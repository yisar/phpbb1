<?php
/***************************************************************************
                          auth.php  -  description
                             -------------------
    begin                : Sat June 17 2000
    copyright            : (C) 2001 The phpBB Group
    email                : support@phpbb.com

    $Id: auth.php,v 1.54 2001/08/11 14:18:55 psotfx Exp $

 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
// Set the error reporting to a sane value:
error_reporting  (E_ERROR | E_WARNING | E_PARSE); // This will NOT report uninitialized variables

if (strpos(' ' . $PHP_SELF, $url_admin))
{
	include("../fix.$phpEx");
}
else
{
	include("fix.$phpEx");
}

// Disable Magic Quotes
// Function is needed for removing quotes from arrays.
function stripslashes_array($the_array_element, $the_array_element_key, $data)
{
   $the_array_element = stripslashes($the_array_element);
}

if(get_magic_quotes_gpc() == 1)
{
   switch($REQUEST_METHOD)
   {
   case "POST":
      while (list ($key, $val) = each ($HTTP_POST_VARS))
      {
         if( is_array($val) )
         {
            array_walk($val, 'stripslashes_array', '');
            $$key = $val;
         }
      else
      {
         $$key = stripslashes($val);
      }
      }
   break;
   case "GET":
      while (list ($key, $val) = each ($HTTP_GET_VARS))
      {
         if( is_array($val) )
         {
            array_walk($val, 'stripslashes_array', '');
            $$key = $val;
         }
         else
         {
            $$key = stripslashes($val);
         }
      }
   break;
   }
}

// Check if the config file is writable (shouldn't be!!)
$config_file_name = "config.$phpEx";
if(strstr($PHP_SELF, "admin"))
{
   if(!strstr($PHP_SELF, "topicadmin"))
   {
     $config_file_name = "../config.$phpEx";
	}
}

if(@fopen($config_file_name, "a"))
{
	?>
	The config file is writeable by the webserver. This is a major security risk
	because anyone can change your server settings now by using the install script.<br><br>

	phpBB will not be able to run until this is fixed. On unix systems this can be done
	with the following command:<br><br>

	<pre>chmod 644 config.<?php echo $phpEx?></pre>

	Or use your FTP program to do this.<br>
	Switch on the 'read-only' attribute if you are running the script on a Windows machine.<br>

	<?php
	exit();
}

// Make a database connection.
if(!$db = @mysql_connect("$dbhost", "$dbuser", "$dbpasswd"))
	die('<font size=+1>An Error Occured</font><hr>phpBB was unable to connect to the database. <BR>Please check $dbhost, $dbuser, and $dbpasswd in config.php.');
if(!@mysql_select_db("$dbname",$db))
	die("<font size=+1>An Error Occured</font><hr>phpBB was unable to find the database <b>$dbname</b> on your MySQL server. <br>Please make sure you ran the phpBB installation script.");

if(is_banned($REMOTE_ADDR, "ip", $db))
  die($l_banned);


// Setup forum Options.
$sql = "SELECT * FROM config WHERE selected = 1";
if($result = mysql_query($sql, $db)) {
   if($myrow = mysql_fetch_array($result)) {
      $sitename = stripslashes($myrow["sitename"]);
      $allow_html = $myrow["allow_html"];
      $allow_bbcode = $myrow["allow_bbcode"];
      $allow_sig = $myrow["allow_sig"];
      $allow_namechange = $myrow["allow_namechange"];
      $posts_per_page = $myrow["posts_per_page"];
      $hot_threshold = $myrow["hot_threshold"];
      $topics_per_page = $myrow["topics_per_page"];
      $override_user_themes = $myrow["override_themes"];
      $email_sig = stripslashes($myrow["email_sig"]);
      $email_from = $myrow["email_from"];
      $default_lang = $myrow["default_lang"];
      $sys_lang = $default_lang;
   }
}

// We MUST do this up here, so it's set even if the cookie's not present.
$user_logged_in = 0;
$logged_in = 0;
$userdata = Array();

// Check for a cookie on the users's machine.
// If the cookie exists, build an array of the users info and setup the theme.

// new code for the session ID cookie..
if(isset($HTTP_COOKIE_VARS[$sesscookiename])) {
	$sessid = $HTTP_COOKIE_VARS[$sesscookiename];
	$userid = get_userid_from_session($sessid, $sesscookietime, $REMOTE_ADDR, $db);

	if ($userid) {
	   $user_logged_in = 1;
	   update_session_time($sessid, $db);

	   $userdata = get_userdata_from_id($userid, $db);
	   if(is_banned($userdata[user_id], "username", $db))
	     die($l_banned);
	   $theme = setuptheme($userdata["user_theme"], $db);
	   if($theme)
	   {
	      $bgcolor = $theme["bgcolor"];
	      $table_bgcolor = $theme["table_bgcolor"];
	      $textcolor = $theme["textcolor"];
	      $color1 = $theme["color1"];
	      $color2 = $theme["color2"];
	      $header_image = $theme["header_image"];
	      $newtopic_image = $theme["newtopic_image"];
	      $reply_image = $theme["reply_image"];
	      $linkcolor = $theme["linkcolor"];
	      $vlinkcolor = $theme["vlinkcolor"];
	      $FontFace = $theme["fontface"];
	      $FontSize1 = $theme["fontsize1"];
	      $FontSize2 = $theme["fontsize2"];
	      $FontSize3 = $theme["fontsize3"];
	      $FontSize4 = $theme["fontsize4"];
	      $tablewidth = $theme["tablewidth"];
	      $TableWidth = $tablewidth;
	      $reply_locked_image = $theme["replylocked_image"];

	   }
	   // Use the language the user has choosen
	   if($userdata["user_lang"] != '')
	     $default_lang = $userdata["user_lang"];
	} // if

}


// Old code for the permanent userid cookie..
// We only need to run this if the user's not logged in.

if (!$user_logged_in)
{
	if(isset($HTTP_COOKIE_VARS[$cookiename]))
	{
	   $userdata = get_userdata_from_id($HTTP_COOKIE_VARS["$cookiename"], $db);
	   if(is_banned($userdata[user_id], "username", $db))
	   {
	     die($l_banned);
		}
	   $theme = setuptheme($userdata["user_theme"], $db);
	   if($theme)
	  	{
	      $bgcolor = $theme["bgcolor"];
	      $table_bgcolor = $theme["table_bgcolor"];
	      $textcolor = $theme["textcolor"];
	      $color1 = $theme["color1"];
	      $color2 = $theme["color2"];
	      $header_image = $theme["header_image"];
	      $newtopic_image = $theme["newtopic_image"];
	      $reply_image = $theme["reply_image"];
	      $linkcolor = $theme["linkcolor"];
	      $vlinkcolor = $theme["vlinkcolor"];
	      $FontFace = $theme["fontface"];
	      $FontSize1 = $theme["fontsize1"];
	      $FontSize2 = $theme["fontsize2"];
	      $FontSize3 = $theme["fontsize3"];
	      $FontSize4 = $theme["fontsize4"];
	      $tablewidth = $theme["tablewidth"];
	      $TableWidth = $tablewidth;
	      $reply_locked_image = $theme["replylocked_image"];
	   }

	   // Use the language the user has choosen.
	   if($userdata["user_lang"] != '')
	   {
	     $default_lang = $userdata["user_lang"];
	   }
	}
}
// Setup the default theme

if($override_user_themes == 1 || !$theme)
{
   $sql = "SELECT * FROM themes WHERE theme_default = 1";
   if(!$r = mysql_query($sql, $db))
   {
   	die('<font size=+1>An Error Occured</font><hr>phpBB was unable to connect to the database. <BR>Please check $dbhost, $dbuser, and $dbpasswd in config.php.');
   }
   if($theme = mysql_fetch_array($r))
   {
      $bgcolor = $theme["bgcolor"];
      $table_bgcolor = $theme["table_bgcolor"];
      $textcolor = $theme["textcolor"];
      $color1 = $theme["color1"];
      $color2 = $theme["color2"];
      $header_image = $theme["header_image"];
      $newtopic_image = $theme["newtopic_image"];
      $reply_image = $theme["reply_image"];
      $linkcolor = $theme["linkcolor"];
      $vlinkcolor = $theme["vlinkcolor"];
      $FontFace = $theme["fontface"];
      $FontSize1 = $theme["fontsize1"];
      $FontSize2 = $theme["fontsize2"];
      $FontSize3 = $theme["fontsize3"];
      $FontSize4 = $theme["fontsize4"];
      $tablewidth = $theme["tablewidth"];
      $TableWidth = $tablewidth;
      $reply_locked_image = $theme["replylocked_image"];
   }
}


// set expire dates: one for a year, one for 10 minutes
$expiredate1 = time() + 3600 * 24 * 365;
$expiredate2 = time() + 600;

// update LastVisit cookie. This cookie is updated each time auth.php runs
setcookie("LastVisit", time(), $expiredate1,  $cookiepath, $cookiedomain, $cookiesecure);

// set LastVisitTemp cookie, which only gets the time from the LastVisit
// cookie if it does not exist yet
// otherwise, it gets the time from the LastVisitTemp cookie
if (!isset($HTTP_COOKIE_VARS["LastVisitTemp"])) {
	$temptime = $HTTP_COOKIE_VARS["LastVisit"];
}
else {
	$temptime = $HTTP_COOKIE_VARS["LastVisitTemp"];
}

// set cookie.
setcookie("LastVisitTemp", $temptime ,$expiredate2, $cookiepath, $cookiedomain, $cookiesecure);

// set vars for all scripts
$now_time = time();
$last_visit = $temptime;


// There are a few variables from the language file that get eval()-ed
// therefor if the user sets an invalid language file they can put the
// variable on the URL line and it will blindly eval() it. This is B - A - D!
// Here we set said vairables to nothing, then if the lang file specified is not
// valid they will remain as nothing..
$l_statsblock = "";
$l_pwdmessage = "";
$l_privnotify = "";


// Include the appropriate language file.
if(!strstr($PHP_SELF, "admin"))
{
   include('language/lang_'.$default_lang.'.'.$phpEx);
}
else
{
   if(strstr($PHP_SELF, "topicadmin")) {
     include('language/lang_'.$default_lang.'.'.$phpEx);
	} else {
     include('../language/lang_'.$default_lang.'.'.$phpEx);
	}
}

// See if translated pictures are available..
$header_image = get_translated_file($header_image);
$reply_locked_image = get_translated_file($reply_locked_image);
$newtopic_image = get_translated_file($newtopic_image);
$reply_image = get_translated_file($reply_image);

// Set documentation locations:
$faq_url = get_translated_file("faq.$phpEx");
$bbref_url = $faq_url . "#bbcode";
$smileref_url = $faq_url . "#smilies";

?>

<?php
/***************************************************************************
                          index.php  -  description
                             -------------------
    begin                : Sat June 17 2000
    copyright            : (C) 2001 The phpBB Group
    email                : support@phpbb.com

    $Id: index.php,v 1.41 2001/04/14 19:40:22 thefinn Exp $

 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

include('functions.'.$phpEx);
include('config.'.$phpEx);
require("auth.$phpEx");
$pagetitle = $l_indextitle;
$pagetype = "index";
include('page_header.'.$phpEx);

$sql = "SELECT c.* FROM catagories c, forums f
	 WHERE f.cat_id=c.cat_id
	 GROUP BY c.cat_id, c.cat_title, c.cat_order
	 ORDER BY c.cat_order";
if(!$result = mysql_query($sql, $db))
	error_die("Unable to get categories from database<br>$sql");
$total_categories = mysql_num_rows($result);

?>

<TABLE BORDER="0" WIDTH="<?php echo $TableWidth?>" CELLPADDING="1" CELLSPACING="0" ALIGN="CENTER" VALIGN="TOP"><TR><TD BGCOLOR="<?php echo $table_bgcolor?>">
<TABLE BORDER="0" CELLPADDING="1" CELLSPACING="1" WIDTH="100%">
<TR BGCOLOR="<?php echo $color1?>" ALIGN="LEFT">
	<TD BGCOLOR="<?php echo $color1?>" ALIGN="CENTER" VALIGN="MIDDLE">&nbsp;</TD>
	<TD><FONT FACE="<?php echo $FontFace?>" SIZE="<?php echo $FontSize1?>" COLOR="<?php echo $textcolor?>"><B><?php echo $l_forum?></B></font></TD>
	<TD ALIGN="CENTER"><FONT FACE="<?php echo $FontFace?>" SIZE="<?php echo $FontSize1?>" COLOR="<?php echo $textcolor?>"><B><?php echo $l_topics?></B></font></TD>
	<TD ALIGN="CENTER"><FONT FACE="<?php echo $FontFace?>" SIZE="<?php echo $FontSize1?>" COLOR="<?php echo $textcolor?>"><B><?php echo $l_posts?></B></font></TD>
	<TD ALIGN="CENTER"><FONT FACE="<?php echo $FontFace?>" SIZE="<?php echo $FontSize1?>" COLOR="<?php echo $textcolor?>"><B><?php echo $l_lastpost?></B></font></TD>
	<TD ALIGN="CENTER"><FONT FACE="<?php echo $FontFace?>" SIZE="<?php echo $FontSize1?>" COLOR="<?php echo $textcolor?>"><B><?php echo $l_moderator?></B></font></TD>
</TR>

<?php
if($total_categories)
{
   if(!$viewcat)
     {
	$viewcat = -1;
     }
   while($cat_row = mysql_fetch_array($result))
     {
	$categories[] = $cat_row;
     }

   $limit_forums = "";
   if($viewcat != -1)
     {
	$limit_forums = "WHERE f.cat_id = $viewcat";
     }
   $sql = "SELECT f.*, u.username, u.user_id, p.post_time
	    FROM forums f
	    LEFT JOIN posts p ON p.post_id = f.forum_last_post_id
	    LEFT JOIN users u ON u.user_id = p.poster_id
	    $limit_forums
	    ORDER BY f.cat_id, f.forum_id";
   if(!$f_res = mysql_query($sql, $db))
     {
	die("Error getting forum data<br>$sql");
     }

   while($forum_data = mysql_fetch_array($f_res))
     {
	$forum_row[] = $forum_data;
     }
for($i = 0; $i < $total_categories; $i++) {
   if($viewcat != -1) {
      if($categories[$i][cat_id] != $viewcat) {
	$title = stripslashes($categories[$i][cat_title]);
	echo "<TR ALIGN=\"LEFT\" VALIGN=\"TOP\"><TD COLSPAN=6 BGCOLOR=\"$color1\"><FONT FACE=\"$FontFace\" SIZE=\"$FontSize2\" COLOR=\"$textcolor\"><B><a href=\"$PHP_SELF?viewcat=".$categories[$i]["cat_id"]."\">$title</a></B></FONT></TD></TR>";
	continue;
     }
   }
   $title = stripslashes($categories[$i][cat_title]);
   echo "<TR ALIGN=\"LEFT\" VALIGN=\"TOP\"><TD COLSPAN=6 BGCOLOR=\"$color1\"><FONT FACE=\"$FontFace\" SIZE=\"$FontSize2\" COLOR=\"$textcolor\"><B><a href=\"$PHP_SELF?viewcat=".$categories[$i]["cat_id"]."\">$title</a></B></FONT></TD></TR>";
   @reset($forum_row);
   for($x = 0; $x < count($forum_row); $x++)
     {
      unset($last_post);
      if($forum_row[$x]["cat_id"] == $categories[$i]["cat_id"]) {
	 //$last_post = $last_posts[$forum_row[$x]["forum_id"]];
	 if($forum_row[$x]["post_time"])
	 {
	 	$last_post = $forum_row[$x]["post_time"] . "<br>$l_by " . $forum_row[$x]["username"];
	 }
	 $last_post_datetime = $forum_row[$x]["post_time"];
	 //list($last_post_datetime, $null) = split($l_by, $last_post);
	 list($last_post_date, $last_post_time) = split(" ", $last_post_datetime);
	 list($year, $month, $day) = explode("-", $last_post_date);
	 list($hour, $min) = explode(":", $last_post_time);
	 $last_post_time = mktime($hour, $min, 0, $month, $day, $year);
	 if(empty($last_post))
	 {
	 	$last_post = "No Posts";
	 }
	 echo "<TR  ALIGN=\"LEFT\" VALIGN=\"TOP\">";
      //if((($last_visit - $last_post_time) < 600) && $last_post != "No posts") {
	 if($last_post_time > $last_visit && $last_post != "No posts") {
	    echo "<TD BGCOLOR=\"$color1\" ALIGN=\"CENTER\" VALIGN=\"middle\" WIDTH=5%><IMG SRC=\"$newposts_image\"></TD>";
	 }
	 else {
	    echo "<TD BGCOLOR=\"$color1\" ALIGN=\"CENTER\" VALIGN=\"middle\" WIDTH=5%><IMG SRC=\"$folder_image\"></TD>";
	 }
	 	$name = stripslashes($forum_row[$x][forum_name]);
		$total_posts = $forum_row[$x]["forum_posts"];
		$total_topics = $forum_row[$x]["forum_topics"];
		$desc = stripslashes($forum_row[$x][forum_desc]);

	 	echo "<TD BGCOLOR=\"$color2\"><FONT FACE=\"$FontFace\" SIZE=\"$FontSize2\" COLOR=\"$textcolor\"><a href=\"viewforum.$phpEx?forum=".$forum_row[$x]["forum_id"]."&$total_posts\">$name</a></font>\n";
	 	echo "<br><FONT FACE=\"$FontFace\" SIZE=\"$FontSize1\" COLOR=\"$textcolor\">$desc</font></TD>\n";
	 	echo "<TD BGCOLOR=\"$color1\" WIDTH=5% ALIGN=\"CENTER\" VALIGN=\"MIDDLE\"><FONT FACE=\"$FontFace\" SIZE=\"$FontSize2\" COLOR=\"$textcolor\">$total_topics</font></TD>\n";
	 	echo "<TD BGCOLOR=\"$color2\" WIDTH=5% ALIGN=\"CENTER\" VALIGN=\"MIDDLE\"><FONT FACE=\"$FontFace\" SIZE=\"$FontSize2\" COLOR=\"$textcolor\">$total_posts</font></TD>\n";
	 	echo "<TD BGCOLOR=\"$color1\" WIDTH=15% ALIGN=\"CENTER\" VALIGN=\"MIDDLE\"><FONT FACE=\"$FontFace\" SIZE=\"$FontSize1\" COLOR=\"$textcolor\">$last_post</font></TD>\n";
	 	$forum_moderators = get_moderators($forum_row[$x][forum_id], $db);
	 	echo "<TD BGCOLOR=\"$color2\" WIDTH=5% ALIGN=\"CENTER\" VALIGN=\"MIDDLE\" NOWRAP><FONT FACE=\"$FontFace\" SIZE=\"-2\" COLOR=\"$textcolor\">";
	 	$count = 0;

	 while(list($null, $mods) = each($forum_moderators)) {
	    while(list($mod_id, $mod_name) = each($mods)) {
	       if($count > 0)
		 echo ", ";
	       if(!($count % 2) && $count != 0)
		 echo "<BR>";
	       echo "<a href=\"bb_profile.$phpEx?mode=view&user=$mod_id\">$mod_name</a>";
	       $count++;
	    }
	 }
	 echo "</font></td></tr>\n";
      }
    }
  }
}

?>
     </TABLE></TD></TR></TABLE>
<TABLE ALIGN="CENTER" BORDER="0" WIDTH="<?php echo $TableWidth?>"><TR><TD>
<FONT FACE="<?php echo $FontFace?>" SIZE="<?php echo $FontSize1?>" COLOR="<?php echo $textcolor?>">
<IMG SRC="<?php echo $newposts_image?>"> = <?php echo $l_newposts?>.
<BR><IMG SRC="<?php echo $folder_image?>"> = <?php echo $l_nonewposts?>.
</FONT></TD></TR></TABLE>

<?php
require('page_tail.'.$phpEx);
?>


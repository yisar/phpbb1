<?php
/***************************************************************************
 *                           lang_russian.php  -  description
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *	    copyright            : (C) 2001 The phpBB Group
 *  	 email                : support@phpbb.com
 *
 *     $Id: lang_russian.php,v 1.9 2001/08/01 00:51:09 thefinn Exp $
 *
 *  ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

$l_special_meta = "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\">";

$l_forum 	= "�����";
$l_forums	= "������";
$l_topic	= "����";
$l_topics 	= "����";
$l_replies	= "������";
$l_poster	= "Poster";
$l_author	= "�����";
$l_views	= "����������";
$l_post 	= "���������";
$l_posts 	= "���������";
$l_message	= "���������";
$l_message_er   = "���������";
$l_messages	= "���������";
$l_subject	= "����";
$l_body		= "���������� $l_message";
$l_from		= "��";   // Message from
$l_moderator 	= "���������";
$l_username 	= "�����";
$l_password 	= "������";
$l_email 	= "�����";
$l_emailaddress	= "�������� �����";
$l_preferences	= "���������";

$l_anonymous	= "���������";  // Post
$l_guest	= "�����"; // Whosonline
$l_noposts	= "��� $l_posts";
$l_joined	= "�������������";
$l_gotopage	= "������� ��������";
$l_nextpage 	= "��������� ��������";
$l_prevpage     = "���������� ��������";
$l_go		= "������";
$l_selectforum	= "�������� $l_forum";
$l_date		= "����";
$l_number	= "�����";
$l_name		= "���";
$l_options 	= "�����";
$l_submit	= "���������";
$l_confirm 	= "�����������";
$l_enter 	= "������";
$l_by		= ""; // Posted by
$l_ondate	= "�"; // This message is edited by: $username on $date
$l_new          = "�����";

$l_html		= "HTML";
$l_bbcode	= "BB���";
$l_smilies	= "��������";
$l_on		= "��������";
$l_off		= "���������";
$l_yes		= "��";
$l_no		= "���";

$l_click 	= "������";
$l_here 	= "�����";
$l_toreturn	= "���������";
$l_returnindex	= "$l_toreturn �� ������� ��������";
$l_returntopic	= "$l_toreturn � ������ ���� �������.";

$l_error	= "������";
$l_tryagain	= "���������� ��������� ����� � ���������� �����.";
$l_mismatch 	= "������ �� �����.";
$l_userremoved 	= "������������ ��� ����� �� ���� ������";
$l_wrongpass	= "�� ����� ������������ ������.";
$l_userpass	= "���������� ������� ��� ����� � ������.";
$l_banned 	= "��� ����� ��������� � ��� �����. ��������� � ��������� ���������������, ���� �� ������ ����� ���� �������.";
$l_enterpassword= "�� ������ ������ ������.";

$l_nopost	= "�� �� ������ ���� �������, ����� �������� ��������� � ���� �����.";
$l_noread	= "�� �� ������ ���� �������, ����� ������ ��������� � ���� ������.";

$l_lastpost 	= "��������� $l_post";
$l_sincelast	= "� ������ ���������� ���������";
$l_newposts 	= "����� $l_posts $l_sincelast";
$l_nonewposts 	= "��� ����� $l_posts $l_sincelast";

// Index page
$l_indextitle	= "��������� �������� ������";

// Members and profile
$l_profile	= "������ ������";
$l_register	= "��������������";
$l_onlyreq 	= "Only requried if being changed";
$l_location 	= "��";
$l_viewpostuser	= "����������� ��� ��������� ����� ������������";
$l_perday       = "$l_messages � ����";
$l_oftotal      = "�� ����";
$l_url 		= "URL";
$l_icq 		= "ICQ";
$l_icqnumber	= "����� ICQ";
$l_icqadd	= "��������";
$l_icqpager	= "�������";
$l_aim 		= "AIM";
$l_yim 		= "YIM";
$l_yahoo 	= "Yahoo Messenger";
$l_msn 		= "MSN";
$l_messenger 	= "MSN Messenger";
$l_website 	= "�������� ��������";
$l_occupation 	= "���������";
$l_interests 	= "��������";
$l_signature 	= "�������";
$l_sigexplain 	= "���� ���� ������ �� ������ ��������� � ���� ���������.<BR>�� 255 ��������!";
$l_usertaken	= "��������� $l_username ��� ������.";
$l_userdisallowed= "��������� $l_username �������� ���������������. $l_tryagain";
$l_infoupdated	= "���� ���������� ���� ���������";
$l_publicmail	= "��������� ������ ������������� ������ ��� $l_emailaddress";
$l_itemsreq	= "���� ���������� ��� * ������������ ��� ����������";

// Viewforum
$l_viewforum	= "���������� �����";
$l_notopics	= "� ���� ������ ��� ���������. �� ������ �������� ������.";
$l_hotthres	= "������ ��� $hot_threshold $l_posts";
$l_islocked	= "$l_topic ������� (�������� ��� ����� $l_posts.)";
$l_moderatedby	= "���������";

// Private forums
$l_privateforum	= "��� <b>�������� �����</b>.";
$l_private 	= "$l_privateforum<br>���������: � ����� �������� ������ ���� ��������  cookies, ����� ������������� �������� ������.";
$l_noprivatepost = "$l_privateforum �� �� ������ ���� �������, ����� ������ ���� ���������.";
// Viewtopic
$l_topictitle	= "������� $l_topic";
$l_unregistered	= "�������������������� ������������";
$l_posted	= "����������";
$l_profileof	= "���������� ������ ������";
$l_viewsite	= "��������� �������";
$l_icqstatus	= "������ $l_icq";  // ICQ status
$l_editdelete	= "��������/������� ��� $l_post";
$l_replyquote	= "�������� � �������";
$l_viewip	= "���������� IP ����������� (������ ��� �����������/���������������)";
$l_locktopic	= "������� ��� $l_topic";
$l_unlocktopic	= "������� ��� $l_topic";
$l_movetopic	= "����������� $l_topic";
$l_deletetopic	= "������� $l_topic";

$l_loggedinas	= "����� ���";
$l_notloggedin	= "�� ����� � �����������";
$l_logout	= "�����";
$l_login	= "�����";

// Page_header
$l_separator	= "� �";  // Included here because some languages have
		          // problems with high ASCII (Big-5 and the like).
$l_editprofile	= "������������� ������ ������";
$l_editprefs	= "������������� $l_preferences";
$l_search	= "�����";
$l_memberslist	= "������ ����������";
$l_faq		= "FAQ";
$l_privmsgs	= "������ $l_message_er";
$l_sendpmsg	= "��������� ������ ���������";
$l_statsblock   = '$statsblock = "������������ ��������� -$total_posts- $l_messages.<br>
����� -$total_users- ������������������ �������������.<br>
��������� �������������������� ������������� ��� -<a href=\"$profile_url\">$newest_user</a>-.<br>
-$users_online- ". ($users_online==1 ? "������������":"�������������") ." <a href=\"$online_url\">������ ���������������</a> �����.<br>";';
$l_privnotify   = '$privnotify = "<br��� ������ $new_message <a href=\"$privmsg_url\">����� ������ ��������� ".($new_message>1?"���������":"���������")."</a>.";';

// Page_tail
$l_adminpanel	= "�������� ��������������";
$l_poweredby	= "Powered by";
$l_version	= "������";

// Auth

// Register
$l_notfilledin	= "������ - �� ��������� �� ��� ����.";
$l_invalidname	= "��� ������������ \"$username\" ��� ������.";
$l_disallowname	= "��� ������������ \"$username\" ��������� ���������������.";

$l_welcomesubj	= "����� ���������� $sitename �����";
$l_welcomemail	=
"
$l_welcomesubj,

���������� �������� ��� email ��� �������.


��� ������� �������� ��������� ����������:

----------------------------
�����: $username
������: $password
----------------------------

���������� �� ��������� ���� ������, ��� ��� ������ � ����� ���� ��������� � �� �� ������ ����� ��� ��� ���������.
������, ���� �� �� ���� �������� ��� ������ ���� ������ �� ����� ������ ��������������� �������� � ��������� ����� ����� ������ ������.

������� �� �����������.

$email_sig
";
$l_beenadded	= "�� ���� ��������� � ���� ������.";
$l_thankregister= "������� �� �����������!";
$l_useruniq	= "������ ���� ����������. �� ����� ���� ���� ������������� � ���������� �������.";
$l_storecookie	= "������� ��� ����� � cookie 1 ���.";

// Prefs
$l_prefupdated	= "$l_preferences ���������. $l_click <a href=\"index.$phpEx\">$l_here</a> $l_returnindex";
$l_editprefs	= "������������� $l_preferences";
$l_themecookie	= "���������: ����� ������������ ���� ���� cookies ������ ���� ��������.";
$l_alwayssig	= "������ ��������� ��� �������";
$l_alwaysdisable= "��������� ������������"; // Only used for next three strings
$l_alwayssmile	= "$l_alwaysdisable $l_smilies";
$l_alwayshtml	= "$l_alwaysdisable $l_html";
$l_alwaysbbcode	= "$l_alwaysdisable $l_bbcode";
$l_boardtheme	= "����������� ���� �����������";
$l_boardlang    = "���� �����������";
$l_nothemes	= "��� ����������� ��� � ����";
$l_saveprefs	= "��������� $l_preferences";

// Search
$l_searchterms	= "�������� �����";
$l_searchany	= "���� ��������� ���� (����������)";
$l_searchall	= "����� ���� ���� ������";
$l_searchallfrm	= "����� �� ���� �������";
$l_sortby	= "����������� ��";
$l_searchin	= "������ �";
$l_titletext	= "���� & ���������";
$l_search	= "�����";
$l_nomatches	= "�� ������� ������� ���������� ������ �������. ���������� �������� ��������� ������.";

// Whosonline
$l_whosonline	= "��� � ����?";
$l_nousers	= "����� ������ �� ������������� ���� �����";


// Editpost
$l_notedit	= "�� �� ������ ������������� �����, ��� ��� ��� �������� �� ��.";
$l_permdeny	= "�� �� ������ ��������, ����� ��������� $l_password ��� ����� ���� ������� ������������, ����� �������� ��� ���������. $l_tryagain";
$l_editedby	= "��� $l_message ���� ���������������:";
$l_stored	= "���� $l_message ���� �������� � ���� ������.";
$l_viewmsg	= "����� ���������� ���� $l_message.";
$l_deleted	= "���� $l_post has ���� �������.";
$l_nouser	= "���� $l_username �� ����������.";
$l_passwdlost	= "� ����� ���� ������!";
$l_delete	= "������� ���������";

$l_disable	= "���������";
$l_onthispost	= "� ���� ���������";

$l_htmlis	= "$l_html";
$l_bbcodeis	= "$l_bbcode";

$l_notify	= "����������� �� e-mail";

// Newtopic
$l_emptymsg	= "�� ������ ������ ������, ����� ��������� ���� $l_message. �� �� ������ ������� ������ $l_message.";
$l_aboutpost	= "����� �����������";
$l_regusers	= "��� <b>������������������</b> ������������";
$l_anonusers	= "<b>���������</b> ������������";
$l_modusers	= "������ <B>���������� � ��������������</b>";
$l_anonhint	= "<br>(����� ��������� ����������, ������ �� ��������� ����� � ������)";
$l_inthisforum	= "������ ������� ����� ���� ��� ��������� ��������� � ���� �����";
$l_attachsig	= "�������� ������� <font size=-2>(�� ������ ������� � ��� �������� � ���������� ������ ������)</font>";
$l_cancelpost	= "�������� ��������� ��������";

// Reply
$l_nopostlock	= "�� �� ������ ��������� ����� � ��� ����, ��� �������.";
$l_topicreview  = "�������� ����";
$l_notifysubj	= "����� � ��� ���� ��� ������.";
$l_notifybody	= '��������� $m[username]\r\n�� �������� ��� ���������, ������ ���
������� ���� � $sitename ����������� � �� �� ��������, � �� ������� ���������� ��� ������.

�� ������ ��������� ������:

http://$SERVER_NAME$url_phpbb/viewtopic.$phpEx?topic=$topic&forum=$forum

��� ������� ������� �������� $sitename ����������� �� ������

http://$SERVER_NAME$url_phpbb

������� �� ������������� $sitename �����������.

�������� ���.

$email_sig';


$l_quotemsg	= '[quote]\nOn $m[post_time], $m[username] wrote:\n$text\n[/quote]';

// Sendpmsg
$l_norecipient	= "�� ������ ������ �����, ����� �������  $l_message.";
$l_sendothermsg	= "������� ������ ������ ���������";
$l_cansend	= "����� ���������� $l_privmsgs";  // All registered users can send PM's
$l_yourname	= "��� $l_username";
$l_recptname	= "�������� $l_username";

// Replypmsg
$l_pmposted	= "����� ��� ������, �� ������ ������ <a href=\"viewpmsg.$phpEx\">�����</a> ����� �����������  $l_privmsgs";

// Viewpmsg
$l_nopmsgs	= "�� �� ������ ����� ���� $l_privmsgs.";
$l_reply	= "��������";

// Delpmsg
$l_deletesucces	= "������� �������.";

// Smilies
$l_smilesym	= "����� ��������?";
$l_smileemotion	= "������";
$l_smilepict	= "��������";

// Sendpasswd
$l_wrongactiv	= "��������� �����, ������� �� ����� �� ���������. ���������� ��������� ��� �������� ���� �� ������� $l_message, ������� �� �������� � ���������, ��� �� ����������� ������������� ���� ���������.";
$l_passchange	= "��� ������ ��� ������� ������. �� ������ ������ �������� <a href=\"bb_profile.$phpEx?mode=edit\">������ ������</a> � �������� ��� ������, �� ���, ������� ��� ����� ������.";
$l_wrongmail	= "��� email �����, ������� �� ����� �� ���������� � ����� ���� ������.";

$l_passsubj	= "��������� ������ $sitename �������";

$l_pwdmessage	= '��������� $checkinfo[username],
�� �������� ��� ������, ������ ���, �� (��� ��� ���� ������)
����� �������� ������ ��� $sitename �����������. ���� �� �������, ��� �� ������� �������� ��� ��� ������ �� �����, �� ������ ������� ��� ��������� �� ��������� ����� (��� �������� ������), � ��� ������ ����� �������� ������.

����� ������ ��������������� ��� ������ ������: $newpw

����� ����������� ����� ������ �� ������ �������:

   http://$SERVER_NAME$PHP_SELF?actkey=$key

��� ������ �� ������ �� ��� �������� ������ ����� ������.

������� �� ������������� $sitename �����������

$email_sig';

$l_passsent	= "��� ������ ��� ������. ��������� ��� �������� ���� � �������� ���� ����������� ��������� � ������..";
$l_emailpass	= "������� ���������� ������";
$l_passexplain	= "���������� ��������� ��� ���� � ����� ������ ����� ������ ��� �� �����";
$l_sendpass	= "��������� ������";
?>

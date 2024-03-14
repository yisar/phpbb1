<?php
/***************************************************************************
                          faq-french.php  -  description
                             -------------------
    begin                : Fri November 3, 2000
    translated by 	 : Kirin * http://www.choixpc.com/ * on 10/06/2001
    original file	 : faq.php - English language -
    copyright            : Free - Offered to the phpBB Community - All thanks to the phpBB group !
    email                : support@phpbb.com

    $Id: faq-french.php,v 1.1 2001/08/01 00:46:00 thefinn Exp $

 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
/***************************************************************************
 * Created by: Steven Cunningham (defender@webinfractions.com) for phpBB
 * *************************************************************************/

include('functions.php');
include('config.php');
require('auth.php');
$pagetitle = "FAQ";
$pagetype = "other";
include('page_header.php');
?>

<div align="center"><center>
<table border="0" width="<?php echo $tablewidth?>" bgcolor="<?php echo $table_bgcolor?>">
  <TR><TD>
<table border="0" width="100%" bgcolor=>
    <tr bgcolor="<?php echo $color1?>">
        <td><font size="<?php echo $FontSize4?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>"><b>Frequently
          Asked Questions (Questions Fr�quemment Pos�es)</font></b></td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
          <font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $linkcolor?>">
          <a href="#register">Suis-je oblig� de m'inscrire ?</a><br>
          <a href="#smilies">Puis-je utiliser des smileys ?</a><br>
          <a href="#html">Utiliser du HTML</a><br>
          <a href="#bbcode">Utiliser les codes sp�cifiques aux forums</a><br>
          <a href="#mods">Que font les mod�rateurs ?</a><br>
	  <a href="#profile">Puis-je modifier mon profil ?</a><br>
          <a href="#prefs">Puis-je "customiser" le forum ?</a><br>
          <a href="#cookies">Le forum utilise-t-il des cookies ?</a><br>
          <a href="#edit">Puis-je �diter mes propres posts ?</a><br>
          <a href="#attach">Puis-je ins�rer des documents attach�s ?</a><br>
          <a href="#search">Puis-je faire une recherche sur le forum ?</a><br>
          <a href="#signature">Puis-je ins�rer une signature � la fin de mes posts ?</a><br>
          <a href="#announce">Que sont les "announcements" ?</a><br>
          <a href="#pw">Existe-t-il un syst�me de r�cup�ration de mon nom d'utilisateur / mot de passe ?</a><br>
          <a href="#notify">Puis-je �tre notifi� par e-mail si quelqu'un r�pond � mon sujet ?</a><br>
          <a href="#searchprivate">Puis-je faire une recherche sur les forums priv�s ?</a><br>
          <a href="#ranks">Quels sont les "ranks" dans les forums <?php echo $sitename?></a><br>
          <a href="#rednumbers">Pourquoi y a-t-il des ic�nes en flamme parfois ?</a></p></font>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="register">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
        <b>S'inscrire</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	L'inscription est uniquement requise ou pas en fonction des forums. Suivant comment l'administrateur du forum a r�gl� ses forums, certains 
	n�cessiteront que vous soyez inscrits pour y poster, et d'autres vous permettront d'y poster librement. Si le fait de poster anonymement 
	est autoris� vous pouvez le faire simplement en n'entrant ni nom d'utilisateur ni mot de passe lorsqu'ils vous seront demand�s.
        L'inscription est libre et il ne vous est pas demand� de donner votre vrai nom. Vous n'�tes pas oblig� de donner votre vrai adresse e-mail,
        cependant elle ne sera utilis�e que pour vous faire parvenir un nouveau mot de passe au cas o� vous ayez oubli� le votre. Par d�faut 
        votre adresse e-mail est cach�e aux yeux de tout le monde (except� de l'administrateur du forum) mais vous pouvez permettre aux autres 
        utilisateur de voir votre adresse e-mail en s�lectionnant l'option "Autoriser les autres membres � voir votre Adresse Email" lors de 
        l'inscription ou encore ult�rieurement dans votre profil. Vous pouvez vous inscrire 
        <a href="<?php echo $url_phpbb?>/bb_register.php?mode=agreement">ici</a></font>.
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="smilies">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
        <b>Les smileys</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Vous avez probablement vu d'autres utilisateurs du forum ayant ins�r� des smileys dans leurs messages. Les smileys sont des assosciations de 
	caract�res claviers utilis�s pour exprimer des �motions, comme des sourires ou des grimaces. Ce forum convertit automatiquement certains smileys
	en une repr�sentation graphique. Les smileys suivant sont actuellement support�s :
        </font><BR>
	
	<div align="center"><center>
	<table border=0 cellpadding=0 cellspacing=0 align="CENTER"><TR><td bgcolor="#FFFFFF">
	  <TABLE WIDTH="500" border="0" cellpadding="0" cellspacing="1">
		 <TR BGCOLOR="<?php echo $color1?>">
		 <TD width="200" align="center">
		 	<FONT FACE="<?php echo $FontFace?>" SIZE="<?php echo $FontSize2?>" COLOR="<?php echo $textcolor?>">
		 		<?php echo $l_smilesym?>
		 	</FONT>
		 </td>
		 <td width="200" align="center">
		 	<FONT FACE="<?php echo $FontFace?>" SIZE="<?php echo $FontSize2?>" COLOR="<?php echo $textcolor?>">
				<?php echo $l_smileemotion?>
			</FONT>
		</td>
		<td width="100" align="center">
		 	<FONT FACE="<?php echo $FontFace?>" SIZE="<?php echo $FontSize2?>" COLOR="<?php echo $textcolor?>">
				<?php echo $l_smilepict?>
			</FONT>
		</td></tr>
 <?php

	  if ($getsmiles = mysql_query("SELECT * FROM smiles")) {
	     while ($smile = mysql_fetch_array($getsmiles)) {
?>
		 <TR BGCOLOR="<?php echo $color2?>">
		 <TD width="200" align="center">
		 	<FONT FACE="<?php echo $FontFace?>" SIZE="<?php echo $FontSize2?>" COLOR="<?php echo $textcolor?>">
		 		<?php echo stripslashes($smile[code])?>
		 	</FONT>
		 </td>
		 <td width="200" align="center">
		 	<FONT FACE="<?php echo $FontFace?>" SIZE="<?php echo $FontSize2?>" COLOR="<?php echo $textcolor?>">
				<?php echo stripslashes($smile[emotion])?>&nbsp;
			</FONT>
		</td>
		<td width="100" align="center">
			<IMG SRC="<?php echo "$url_smiles/$smile[smile_url]";?>">
		</td></tr>
<?php
	     }
	  } else
	     echo "Could not retrieve from the smile database.";
?>
    </TABLE>
		</td></tr>

    </TABLE>
    
</center></div>
	<tr bgcolor="<?php echo $color1?>">
	<td>
		<p align="left"><a name="html">
		<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
		<b>Utiliser du HTML</b></font></a></p>
	</td>
	</tr>
	<tr bgcolor="<?php echo $color2?>">
	<td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Si les administrateurs et mod�rateurs ont activ�s cette option, vous pourrez utilisez du HTML dans vos posts. A chaque fois que vous posterez 
	un nouveau message, il vous sera demand� si le code BB (cf. ci-dessous) et/ou le HTML est activ�. Si le HTML est activ�, vous pouvez alors utiliser
	du code de ce type, mais soyez attentifs � bien utiliser la syntaxe du HTML : en cas d'erreur, un mod�rateur ou adminsitrateur pourrait �tre amen� � 
	�diter votre post.
	</font></td>
	<tr bgcolor="<?php echo $color1?>">
	<td>
		<p align="left"><a name="bbcode">
		<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
		<b>Utiliser du code BB</b></font></a></p>
	</td>
	</tr>
	<tr bgcolor="<?php echo $color2?>">
	<td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
Le code BB est une variation des tags HTML avec laquelle vous �tes peut-�tre d�j� familier. De mani�re simpliste, il permet d'ajouter des fonctionnalit�s ou 
de l'enrichissement de texte qui normalement auraient requis du code HTML. Vous pouvez utiliser du code BB m�me si le HTML n'est pas activ� sur le Forum 
que vous utilisez. Vous pouvez pr�f�rer le code BB au HTML, m�me si le HTML est valid� sur votre forum, car il est de syntaxe plus courte et plus s�r 
d'usage (des erreurs de codage et de syntaxe ne conduiront pas � autant de soucis).
</font>
<P>

<table border=0 cellpadding=0 cellspacing=0 width="<?php echo $tablewidth?>" align="CENTER"><TR><td bgcolor="#FFFFFF">
<table border=0 cellpadding=4 border=0 cellspacing=1 width=100%>
<TR bgcolor="<?php echo $color1?>">
<TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Cr�er des hyperliens</FONT></td></tr>
<TR bgcolor="<?php echo $color2?>"><TD><FONT SIZE="2" FACE="Verdana, Arial">
Si le code BB est valid� dans votre forum, vous n'avez plus besoin d'utiliser le code [URL] pour cr�er un hyperlien. Mettez simplement l'URL compl�te d'une
des mani�res suivantes et le lien sera cr�� automatiquement.
<UL><FONT SIZE="2" FACE="Verdana, Arial" color="silver">
<LI> http://www.votreURL.com
<LI> www.votreURL.com
</font>

Remarquez que vous pouvez au choix utiliser la formulation compl�te de l'adresse URL avec "le http://" ou la raccourcir en commen�ant au "www" : cependant
 si le site � lier ne commence pas par "wwww", vous devez �crire l'adresse URL compl�te. De la m�me mani�re, si le BBcode est activ�, vous pouvez utiliser 
des pr�fixes https et FTP dans ce mode.

<P>
L'ancien code [URL] continuera � fonctionner comme d�taill� ci-dessous.

Encapsulez jsut le lient comme montr� dans l'exemple ci-dessous (le code BB est en <FONT COLOR="#FF0000">rouge</FONT>).
<P><center>
<FONT COLOR="#FF0000">[url]</FONT>www.choixpc.com<FONT COLOR="#FF0000">[/url]</FONT>
<P></center>
Vous pouvez aussi faire de vrais hyperliens en utilisant le code HTML [url].  Utilisez juste le format suivant :
<BR><center>
<FONT COLOR="#FF0000">[url=http://www.choixpc.com]</font>Choisir son PC pi�ce par pi�ce<FONT COLOR="#FF0000">[/url]</font>
</center><p>
Dans les exemples ci-dessus, le code BB g�n�re automatiquement un lien vers l'URL qui est associ�e. Il assurera aussi l'ouverture du lien dans une nouvelle
fen�tre lorsque l'utilisateur cliquera dessus. Notez que la partie  "http://" de l'URL est compl�tement optionnelle. Dans le second exemple ci-dessus, le code
permet de lier le texte de votre choix vers toute URL inscrite apr�s le symb�le �gal. Remarquez aussi que vous ne devez pas utiliser de guillemets � 
l'int�rieur du tag URL.
</font>
</td>
<tr bgcolor="<?php echo $color1?>"><td>
<FONT SIZE="2" FACE="Verdana, Arial">
Lier des email</FONT></td></tr>
<TR bgcolor="<?php echo $color2?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Pour ajouter un hyperlien vers une adresse email dans votre message, encapsulez juste l'adresse email comme montr� dans l'exemple ci-dessous.
(Le code BB est en <FONT COLOR="#FF0000">rouge</FONT>).
<P>
<CENTER>
<FONT COLOR="#FF0000">[email]</FONT>adresse@email.com<FONT COLOR="#FF0000">[/email]</FONT>
</CENTER>
<P>
Dans cet exemple, le code BB g�n�re automatiquement un lien vers cette adresse e-mail encapsul�e.
</FONT>
</td></tr>
<tr bgcolor="<?php echo $color1?>"><td>
<FONT SIZE="2" FACE="Verdana, Arial">
Le gras et l'italique</FONT></td></tr>
<TR bgcolor="<?php echo $color2?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Vous pouvez faire du texte gras ou italique en encapsulant les portions de texte appropri�es avec, respectivement, les tags [b] [/b] et [i] [/i].
<P>
<CENTER>
Bonjour, <FONT COLOR="#FF0000">[b]</FONT><B>James</B><FONT COLOR="#FF0000">[/b]</FONT><BR>
Bonjour, <FONT COLOR="#FF0000">[i]</FONT><I>Mary</I><FONT COLOR="#FF0000">[/i]</FONT><BR>
Bonjour, <FONT COLOR="#FF0000">[b][i]</FONT><B><I>James et Mary</I></B><FONT COLOR="#FF0000">[/i][/b]</FONT>
</CENTER>
</FONT>
</td></tr>
<tr bgcolor="<?php echo $color1?>"><td>
<FONT SIZE="2" FACE="Verdana, Arial">
Les listes</FONT></td></tr>
<TR bgcolor="<?php echo $color2?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Vous pouvez faire des listes avec des point noirs, des chiffres ou des lettres.
<P>
Liste non ordonn�es, avec des points noirs :
<P>
<FONT COLOR="#FF0000">[list]</FONT>
<BR>
<FONT COLOR="#FF0000">[*]</font> Ceci est le premier objet en liste.<BR>
<FONT COLOR="#FF0000">[*]</font> Ceci est le second objet en liste.<BR>
<FONT COLOR="#FF0000">[/list]</font>
<P>
Ceci produit:
<ul>
<LI> Ceci est le premier objet en liste.
<LI> Ceci est le second objet en liste..
</ul>
Remarquez que vous devez inclure une fermeture de liste � la fin de chacune des listes.

<P>
Faire des listes ordonn�es avec des lettre ou des chiffres est tout aussi simple. Il suffit d'ajouter respectivement [LIST=A] et [LIST=1].
<P>
Voici un exemple :
<P>

<FONT COLOR="#FF0000">[list=A]</FONT>
<BR>
<FONT COLOR="#FF0000">[*]</font> Ceci est le premier objet en liste.<BR>
<FONT COLOR="#FF0000">[*]</font> Ceci est le second objet en liste.<BR>
<FONT COLOR="#FF0000">[/list]</font>
<P>
Ce qui produit :
<ol type=A>
<LI> Ceci est le premier objet en liste.
<LI> Ceci est le second objet en liste..
</ul>


</FONT>
</td></tr>
<TR bgcolor="<?php echo $color1?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Ajouter des images</font></td></tr>
<TR bgcolor="<?php echo $color2?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Pour ajouter des images dans votre message, encapsulez simplement l'URL de l'image comme vu dans les exemples pr�c�dents (le code BBCode est en <FONT COLOR="#FF0000">rouge</FONT>).
<P>
<CENTER>
<FONT COLOR="#FF0000">[img]</FONT>http://www.choixpc.com/p4.jpg<FONT COLOR="#FF0000">[/img]</FONT>
</CENTER>
<P>
Dans cet exemple, le code BB rend ce graphisme automatiquement visible dans votre message. Remarquez que la partie "http://" de l'URL est ici 
n�cessaire pour le code <FONT COLOR="#FF0000">[img]</FONT>.
</FONT>
</td></tr>
<TR bgcolor="<?php echo $color1?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Citer un autre message</font></td></tr>
<TR bgcolor="<?php echo $color2?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Pour citer une partie de ce que quelqu'un a �cris, faites un couper/coller de la partie en question et encapsulez l� comme montr� ci-dessous. (le Code BB est en <FONT COLOR="#FF0000">rouge</FONT>).
<P>
<CENTER>
<FONT COLOR="#FF0000">[QUOTE]</FONT>Pour utliser ces forums correctement... <BR>pensez � lire la FAQ et � utiliser la fonction recherche pour v�rifier si la question n'a pas d�j� �t� pos�e.<FONT COLOR="#FF0000">[/QUOTE]</FONT>
</CENTER>
<P>
Dans cet exemple, le code BB met automatiquement en citation et entre des lignes le texte auquel vous faites r�f�rence.
</td>
</tr>
<TR bgcolor="<?php echo $color1?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Code Tag</FONT></td></tr>
<TR bgcolor="<?php echo $color2?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
De mani�re similaire au tag QUOTE, le tag CODE permet de pr�server le formatage du texte �cris. Ceci est particuli�rement utile pour afficher du code
de programmation, par exemple.
<P>

<FONT COLOR="#FF0000">[CODE]</FONT>#!/usr/bin/perl
<P>
print "Content-type: text/html\n\n";
<BR>
print "Hello World!";
<FONT COLOR="#FF0000">[/CODE]</FONT>

<P>
Dans cet exemple, le code BB met automatiquement en citation le texte et en pr�serve le formatage.
</FONT>
</td>
</tr>
</table>
</td></tr></table>
</blockquote>
<BR>
Vous ne devez pas utiliser � la fois les code HTML et BB pour r�aliser la m�me fonctionnalit�.
Notez aussi que le code BB, n'est pas sensible � la casse (ainsi vous pouvez utiliser <FONT COLOR="#FF0000">[URL]</FONT> tout comme <FONT COLOR="#FF0000">[url]</FONT>).
<P>
<FONT COLOR="silver">Usage incorrect de code BB</FONT>
<P>
<FONT COLOR="#FF0000">[url]</FONT> www.choixpc.com <FONT COLOR="#FF0000">[/url]</FONT> Ne fonctionne pas : ne mettez pas des espaces entre 
les crochets et le texte auquel vous appliquez le code.
<P>
<FONT COLOR="#FF0000">[email]</FONT>adresse@email.com<FONT COLOR="#FF0000">[email]</FONT> Les crochets de fin doivent inclure un slash
(<FONT COLOR="#FF0000">[/email]</FONT>)

<P>
</FONT>
</B>

	</td>


    <tr bgcolor="<?php echo $color1?>">
        <td nowrap>
	<p align="left"><a name="mods">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Les Mod�rateurs (Modo)</b></font></a></p>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
          <p>
	    <font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	    Les mod�rateurs controlent les forums. Ils peuvent, �diter, supprimer, verrouiller ou d�placer tout post dans leurs sections.
            Si vous avez une question � propos d'une section de forum particuli�re, vous devriez l'adresser au mod�rateur du forum.</p>
          <p>Les admins et les mod�rateurs du forum se r�servent le droit de d�placer, fermer ou d�truire tout post qui le n�cessiterait ou qui ne 
          pr�senterait pas un sujet utile et clair. De nombreux membres utilisent encore des modems 56K ou moindre et qui n'ont pas de temps � perdre
          avec des sujets inutiles et d�pourvus de sens.</p>
          <p>Tout personne qui poste juste pour augmenter ses stats de forumeur, s'expose � voir ses sujets ferm�s, supprim�s voire � avoir son pseudo
          supprim�.</p>
          <p>Essyez de faire en sorte que le sujet refl�te ce qu'il y a dans la discussion. Les sujets du type "Regrdez cela !" attirent seulement des 
          membres vers un sujet qu'ils ne souhaitent peut-�tre pas lire...
          </font></p>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<p align="left"><a name="profile">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Mofifier votre profil</b></font></a></p>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Vous pouvez facilement modifier toute information stock�e dans votre profil d'inscription en utilisant le lien	&quot;Votre profil&quot; 
	situ� en haut � droite de chaque page. Identifiez vous tout simplement avec votre Nom d'utilisateur et Mot de passe et toutes vos informations
	de profil apparaitront alors, avec la possibilit� de les modifier.
	</font>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="prefs">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Customiser le forum : utiliser les pr�f�rences</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	En tant que membre inscrit de ce forum, vous pouvez stocker votre nom d'utilisateur pour au maximum 1 an.
	Ce faisant, le forum a la possibilit� de savoir qui vous �tes quand vous visitez le forum et de plus vous pouvez customiser l'allure du forum
	en s�lectionnant un des th�mes de couleurs disponible.
	D'autre part, si l'administrateur l'autorise, vous pouvez avoir la possibilit� de cr�er de nouveaux th�mes pour le forum. 
	En cr�ant un nouveau th�me, vous aurez la possibilit� de choisir les couleurs de fond, polices et tailles des textes, mais seul l'administrateur 
	peut modifier les images pour chaque th�me. Lorsqu'un utilisateur cr�e un th�me, les images par d�faut du forum sont celles utilis�es.
	<br>*NB : pour pouvoir utiliser les th�mes, vous devez avoir valid� les cookies dans votre navigateur.</font>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td><a name="cookies">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Les cookies</b></font></a></td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Ce forum utilise les cookies pour stocker les informations suivantes : la derni�re fois que vous avez visit� le forum, votre nom d'utilisateur, et 
	un n� de session unique lorsque vous vous identifiez au forum. Ces cookies sont stock�es dans votre navigateur. Si votre navigateur ne supporte pas
	les cookies, ou que vous ne les avez pas autoris�s, aucune de ces fonctionnalit�s li�es � la datation ne pourra fonctionner correctement mais le 
	forum restera tout � fait utilisable.
	</font>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td><a name="edit">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Editer vos posts</b></font></a>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Vous pouvez �diter vos propres posts n'importe quand. Allez simplement � la discussion o� le post � �diter se trouve et vous verrez un petit ic�ne 
	d'�dition sous votre message. Cliquez dessus et �ditez votre post. Personne d'autre ne peut �diter votre post, except� les mod�rateurs du forum ou.
	D'autre part, dans la demi-heure qui suit l'envoi initial d'un post, l'�cran d'�dition vous donnera la possibilit� de d�truire votre message. Pass�
	cette p�riode, seul un mod�rateur pourra enlever ce post.
	</font>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td><a name="signature">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Ajouter une signature</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Vous pouvez utiliser une signature � vos posts. Si vous cliquez sur le lien "votre profil", visible au sommet de la plupart des pages,
        vous pourrez �diter votre profil, y compris votre signature par d�faut. Une fois que vous y avez d�fini une signature, vous pouvez choisir de l'inclure
        dans tout post que vous faites en cochant la case &quot;Ins�rer votre signature&quot; au momment de la cr�ation de votre post.
        L'administrateur de ce forum peut n�anmoins d�cider de supprimer cette possibilit� � tout moment. Si ceci est le cas, l'option 
        &quot;Ins�rer votre signature&quot; sera sans effet, m�me si vous avez effectivement bien d�fini une signature dans votre profil.
	Notez que vous pouvez modifier votre signature � tout moment dans la section "votre profil".
	
	<p>NB : vous pouvez utiliser du  HTML ou du <a href="#bbcode">code BB</a> si l'administrateur a valid� ces options.
	    </font>
        </p>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="attach">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Joindre des documents attach�s</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Pour des raisons de s�curit�, vous ne pouvez pas joindre des documents attach�s, � vos posts. Vous pouvez cependant faire un copier/coller
	du texte dans votre post ou encore utiliser du code HTML ou BB pour fournir des liens vers des documents externes. Les documents attach�s 
	seront inclus dans une version future de phpBB. (NDT : phpBB 2.0 s�rement)</font>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="search">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Rechercher des posts sp�cifiques</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Vous pouvez chercher des posts sp�cifiques � partir d'un ou plusieurs mots, d'un nom d'utilisateur, d'une date, et/ou d'un forum particulier. 
	Cliquez juste sur le lien &quot;Rechercher&quot; visible en haut � droire de la majorit� des pages.</font>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="announce">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>"Announcements"</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Les "Announcements" n'ont pas �t� impl�ment�s, mais il est pr�vu de le faire dans une prochaine version de phpBB
	Cependant, l'administrateur peut cr�er un forum ou seuls les autres adminsitrateurs et mod�rateurs peuvent poster.
	Ce type de forum peut facilement �tre utilis� comme un forum d'"Announcements".
 	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="pw">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Nom d'utilisateur et / ou Mot de passe perdu</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
 	Au cas o� vous perdriez votre mot de passe, vous pouvez cliquer sur le lien &quot;J'ai perdu mon mot de passe!&quot; visible 
 	au moment des identifications. Ce lien vous am�nera sur une page o� vous pourrez remplir votre Nom d'utilisateur et votre adresse e-mail.
	Le syst�me vous enverra alors un nouveau mot de passe g�n�r� al�atoirement � l'adresse email inscrite dans votre profil, en supposant que vous aviez
	fourni une adresse email correcte.
	</FONT>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="notify">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Notification par email.</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Lorsque vous cr�ez un nouveau sujet, vous avez la possibilit� de recevoir un email de notification
	� chaque fois que quelqu'un poste une r�ponse � ce sujet. Cochez juste la case de notification par email lorsque vous cr�ez un nouveau sujet si vous 
	souhaitez utiliser cette fonctionnalit�.
        </font>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="searchprivate">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Puis chercher dans les forums priv�s ?</b>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Oui, mais vous ne pouvez pas lire les posts, � moins que vous n'ayez le mot de passe � ce(s) forum(s) priv�(s). </font></p>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="ranks">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Quels sont les rangs pour le forum <?php echo $sitename?> ?</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	The <?php echo $sitename?> Les forums �tablissent des m�thodes pour classer leur utilisateurs � travers leur nombre de posts.</p>
	<br>
	Les rangs actuels sont :<br>

	<?php
	$sql = "SELECT * FROM ranks WHERE rank_special = 0";
	if(!$r = mysql_query($sql, $db)) {
	echo "Error connecting to the database";
	include('page_tail.php');
	exit();
	}
	?>
	<br><TABLE BORDER="0" WIDTH="<?php echo $TableWidth?>" CELLPADDING="1" CELLSPACING="0" ALIGN="CENTER" VALIGN="TOP"><TR><TD BGCOLOR="<?php echo $table_bgcolor?>">
	<TABLE BORDER="0" CELLPADDING="1" CELLSPACING="1" WIDTH="100%">
	<TR BGCOLOR="<?php echo $color1?>" ALIGN="CENTER">
	<TD><font face="<?php echo $FontFace?>" size="<?php echo $FontSize2?>" color="<?php echo $textcolor?>">&nbsp;Titre du rang &nbsp;</font></TD>
	<TD><font face="<?php echo $FontFace?>" size="<?php echo $FontSize2?>" color="<?php echo $textcolor?>">&nbsp;Minimum de posts&nbsp;</font></TD>
	<TD><font face="<?php echo $FontFace?>" size="<?php echo $FontSize2?>" color="<?php echo $textcolor?>">&nbsp;Maximum de posts&nbsp;</font></TD>
        <TD><font face="<?php echo $FontFace?>" size="<?php echo $FontSize2?>" color="<?php echo $textcolor?>">&nbsp;Image associ�e au rang&nbsp;</font></TD>
	</TR>
	<?php
	if($m = mysql_fetch_array($r)) {
	do {
	echo "<TR BGCOLOR=\"$color2\" ALIGN=\"CENTER\">";
	echo "<TD><font face=\"<?php echo $FontFace?>\" size=\"2\" color=\"$textcolor\">$m[rank_title]</font></TD>";
	echo "<TD><font face=\"<?php echo $FontFace?>\" size=\"2\" color=\"$textcolor\">$m[rank_min]</font></TD>";
	echo "<TD><font face=\"<?php echo $FontFace?>\" size=\"2\" color=\"$textcolor\">$m[rank_max]</font></TD>";
	if($m[rank_image] != '')
	   echo "<TD><img src=\"$url_images/$m[rank_image]\"></TD>";
	else
	   echo "<TD>&nbsp;</TD>";
	echo "</TR>";
	} while($m = mysql_fetch_array($r));
	}
	else {
	echo "<TR BGCOLOR=\"$color2\" ALIGN=\"CENTER\">";
	echo "<TD COLSPAN=\"4\">Pas de rangs dans la base de donn�es</TD>";
	echo "</TR>";
	}
	?>
	</TABLE></TABLE></font>
	<br>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Les administrateurs ont aussi la possibilit� d'assigner un rang sp�cial � tout utilisateur de leur choix. La table ci-dessus ne liste 
	pas ces rangs sp�ciaux.
	</font>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="rednumbers">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Pourquoi certains icones de posts sont-ils </b>
	</font>
	<font color="#FF0033" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>enflamm�s ?</b>
	</font>
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b> in the forum view?</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Les ic�nes enflamm�s sont l� pour indiquer qu'il y a plus de <?php echo $hot_threshold?> post dans cette discussion. Il s'agit aussi d'un indicateur
	qui pr�vient les utilisateurs de connexion "lentes" que la discussion peut prendre un peu de temps � se charger.</font></p>
        </td>
    </tr>
</table>
</TABLE>
</center>
</div>

<?php
include('page_tail.php');
?>

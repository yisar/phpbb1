<?php
/***************************************************************************
                          faq-spanish.php  -  description
                             -------------------
    begin                : Tue April 3, 2001
    copyright            : (C) 2001 Fernando N�jera
    email                : yo@fernandonajera.com

    $Id: faq-spanish.php,v 1.2 2001/04/25 04:23:20 thefinn Exp $

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
        <td><font size="<?php echo $FontSize4?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>"><b>Preguntas Frecuentemente
          Contestadas</font></b></td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
          <font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $linkcolor?>">
          <a href="#register">�Tengo que registrarme?</a><br>
          <a href="#smilies">�Puedo usar smilies?</a><br>
          <a href="#html">Usando HTML</a><br>
          <a href="#bbcode">Usando BB Code</a><br>
          <a href="#mods">�Qu� son los moderadores?</a><br>
	  <a href="#profile">�Puedo cambiar mi perfil?</a><br>
          <a href="#prefs">�Puedo personalizar el panel de alguna forma?</a><br>
          <a href="#cookies">�Se usan cookies?</a><br>
          <a href="#edit">�Puedo editar mis propios mensajes?</a><br>
          <a href="#attach">�Puedo incluir ficheros?</a><br>
          <a href="#search">�C�mo puedo buscar?</a><br>
          <a href="#signature">�Puedo a�adir una firma al final de mis mensajes?</a><br>
	  <a href="#announce">�Qu� son los anuncios?</a><br>
          <a href="#pw">�Existe un sistema de recuperaci�n de nombre de usuario/clave?</a><br>
          <a href="#notify">�Puedo ser notificado por email si alguien responde a mi tema?</a><br>
          <a href="#searchprivate">�Puedo buscar en los foros privados?</a><br>
          <a href="#ranks">�Qu� son los r�nkings en los Foros <?php echo $sitename?>?</a><br>
          <a href="#rednumbers">�Por qu� hay iconos llameantes en la vista de temas?</a></p></font>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
        <font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
        <a name="register"><b><br>Registr�ndose</b></font></a>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	El registro s�lo se necesita en base a cada foro. Dependiendo de c�mo
	el administrador haya preparado sus foros, algunos pueden obligarte a
	que te registres para poder escribir, mientras que otros pueden permitirte
	escribir de forma an�nima. Si se permite la escritura an�nima, puedes
	hacerlo s�mplemente no introduciendo un nombre de usuario y una clave
	cuando se te pregunte.
	El registro es gratu�to, y no es necesario poner el nombre real.
	Tampoco es necesario poner tu direcci�n real de correo electr�nico, sin embargo,
	s�lo se usar� para enviarte por email una nueva clave si has perdido la tuya.
	Tambi�n tienes la opci�n de ocultar tu direcci�n de correo electr�nico de todo
	el mundo excepto del administraci�n; esta opci�n est� seleccionada por defecto,
	pero puedes permitir a los dem�s ver tu direcci�n de correo electr�nico
	seleccionando la casilla 'Permitir que otros vean mi Direcci�n de correo
	electr�nico' en el formulario de registro.
	Puedes registrarte pulsando
	<a href="<?php echo $url_phpbb?>/bb_register.php?mode=agreement">aqu�</a></font>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="smilies">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
        <b>Smilies</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Probablemente hayas visto a otros usar smilies antes en los mensajes de correo electr�nico,
	o en otros mensajes en alg�n sistema de foros. Los smilies son caracteres del teclado que se usan para
	transmitir una emoci�n, como una sonrisa
	:)
	o un enfado
	:(.
	Este sistema de foros autom�ticamente convierte ciertos smilies a una representaci�n gr�fica.
        Actualmente se traducen los siguientes smilies: </font><BR>
	<table width="50%" ALIGN="CENTER" BGCOLOR="<?php echo $table_bgcolor?>" CELLSPACEING=1 BORDER="0">
	  <TR><TD>
	  <TABLE WIDTH="100%" BORDER="0">
		 <TR BGCOLOR="<?php echo $color1?>">
		 <TD width="100">
		 	<FONT FACE="<?php echo $FontFace?>" SIZE="<?php echo $FontSize2?>" COLOR="<?php echo $textcolor?>">
		 		<?php echo $l_smilesym?>
		 	</FONT>
		 </td>
		 <td width="50%">
		 	<FONT FACE="<?php echo $FontFace?>" SIZE="<?php echo $FontSize2?>" COLOR="<?php echo $textcolor?>">
				<?php echo $l_smileemotion?>
			</FONT>
		</td>
		<td width="55">
		 	<FONT FACE="<?php echo $FontFace?>" SIZE="<?php echo $FontSize2?>" COLOR="<?php echo $textcolor?>">
				<?php echo $l_smilepict?>
			</FONT>
		</td></tr>
 <?php

	  if ($getsmiles = mysql_query("SELECT * FROM smiles")) {
	     while ($smile = mysql_fetch_array($getsmiles)) {
?>
		 <TR BGCOLOR="<?php echo $color2?>">
		 <TD width="100">
		 	<FONT FACE="<?php echo $FontFace?>" SIZE="<?php echo $FontSize2?>" COLOR="<?php echo $textcolor?>">
		 		<?php echo stripslashes($smile[code])?>
		 	</FONT>
		 </td>
		 <td width="50%">
		 	<FONT FACE="<?php echo $FontFace?>" SIZE="<?php echo $FontSize2?>" COLOR="<?php echo $textcolor?>">
				<?php echo stripslashes($smile[emotion])?>&nbsp;
			</FONT>
		</td>
		<td width="55">
			<IMG SRC="<?php echo "$url_smiles/$smile[smile_url]";?>">
		</td></tr>
<?php
	     }
	  } else
	     echo "Could not retrieve from the smile database.";
?>
    </TABLE></TABLE>
    </div>
	</td>
    </tr>
	<tr bgcolor="<?php echo $color1?>">
	<td>
		<p align="left"><a name="html">
		<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
		<b>Usando HTML</b></font></a></p>
	</td>
	</tr>
	<tr bgcolor="<?php echo $color2?>">
	<td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Es posible que puedas usar HTML en tus mensajes, si los
	administradores y los moderadores han activado esta opci�n.
	Cada vez que escribes un mensaje nuevo, se te dir� si se permiten c�digos HTML o BB Code.
	Si HTML est� activado, puedes usar cualquier tag HTML, pero por favor ten cuidado de
	usar una sintaxis HTML correcta. Si no lo haces, tu moderador o administrador quiz�s
	tengan que editar tu mensaje.
	</td>
	<tr bgcolor="<?php echo $color1?>">
	<td>
		<p align="left"><a name="bbcode">
		<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
		<b>Usando BB Code</b></font></a></p>
	</td>
	</tr>
	<tr bgcolor="<?php echo $color2?>">
	<td>

BBCode es una variaci�n a los tags de HTML que quiz�s ya te resulten familiares. B�sicamente, permite a�adirle funcionalidad o estilo a tu mensaje, lo que normalmente requerir�a HTML. Puedes usar BBCode incluso si el HTML no se permite en el foro que est�s usando. Puede que desees usar BBCode en vez de HTML, incluso si el HTML se permite en tu foro, porque se necesita menos c�digo y es m�s seguro de usar (la sintaxis de codificaci�n incorrecta no lleva a tantos problemas).
<P>

<table border=0 cellpadding=0 cellspacing=0 width="<?php echo $tablewidth?>" align="CENTER"><TR><td bgcolor="#FFFFFF">
<table border=0 cellpadding=4 border=0 cellspacing=1 width=100%>
<TR bgcolor="<?php echo $color1?>">
<TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Hiperv�nculos URL</FONT></td></tr>
<TR bgcolor="<?php echo $color2?>"><TD><FONT SIZE="2" FACE="Verdana, Arial">
Si BBCode est� permitido en un foro, no necesitas usar m�s el c�digo [URL] para crear un hiperv�nculo. Simplemente escribe la direcci�n completa en cualquiera de las siguientes formas, y el hiperv�nculo se crear� autom�ticamente:
<UL><FONT SIZE="2" FACE="Verdana, Arial" color="silver">
<LI> http://www.tuURL.com
<LI> www.tuURL.com
</font>

Ten en cuenta que puedes o bien usar la direcci�n completa con http:// o acortarla al dominio www.  Si el v�nculo no empieza con "www", entonces debes usar la direcci�n completa "http://". Por otra parte, puedes usar los prefijos de URL https y ftp en el modo auto-v�nculo (cuando BBCode est� ACTIVADO).
<P>
El viejo c�digo [URL] todav�a funciona, como se detalla a continuaci�n.

Basta con intercalar el v�nculo como se muestra en el siguiente ejemplo (el BBCode est� en <FONT COLOR="#FF0000">rojo</FONT>).
<P><center>
<FONT COLOR="#FF0000">[url]</FONT>www.totalgeek.org<FONT COLOR="#FF0000">[/url]</FONT>
<P></center>
Tambi�n puedes poner verdaderos hiperv�nculos usando el c�digo [url].  Basta con usar el siguiente formato:
<BR><center>
<FONT COLOR="#FF0000">[url=http://www.totalgeek.org]</font>totalgeek.org<FONT COLOR="#FF0000">[/url]</font>
</center><p>
En los ejemplos anteriores, el BBCode autom�ticamente genera un hiperv�nculo a la direcci�n URL que se indica. Tambi�n se asegura de que el v�nculo se abre en una nueva ventana cuando el usuario pulse en ella. F�jate que la parte "http://" del URL es completamente opcional. En el segundo ejemplo de arriba, el URL har� un enlace a cualquier URL que pongas despu�s del signo igual. Por otra parte, NO deber�a usar comillas dentro del tag URL.
</font>
</td>
<tr bgcolor="<?php echo $color1?>"><td>
<FONT SIZE="2" FACE="Verdana, Arial">
V�nculos de Email</FONT></td></tr>
<TR bgcolor="<?php echo $color2?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Para a�adir un v�nculo a una direcci�n email dentro de un mensaje, basta intercalarlo como muestra el siguiente ejemplo (el BBCode est� en <FONT COLOR="#FF0000">rojo</FONT>).
<P>
<CENTER>
<FONT COLOR="#FF0000">[email]</FONT>james@totalgeek.org<FONT COLOR="#FF0000">[/email]</FONT>
</CENTER>
<P>
En el ejemplo anterior, el BBCode autom�ticamente genera un hiperv�nculo a la direcci�n email que est� intercalada.
</FONT>
</td></tr>
<tr bgcolor="<?php echo $color1?>"><td>
<FONT SIZE="2" FACE="Verdana, Arial">
Negritas y Cursivas</FONT></td></tr>
<TR bgcolor="<?php echo $color2?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Puedes hacer texto en cursiva o en negrita al intercalar las secciones apropiadas de tu texto entre los tags [b] [/b] o [i] [/i].
<P>
<CENTER>
Hola, <FONT COLOR="#FF0000">[b]</FONT><B>Juan</B><FONT COLOR="#FF0000">[/b]</FONT><BR>
Hola, <FONT COLOR="#FF0000">[i]</FONT><I>Mar�a</I><FONT COLOR="#FF0000">[/i]</FONT>
</CENTER>
</FONT>
</td></tr>
<tr bgcolor="<?php echo $color1?>"><td>
<FONT SIZE="2" FACE="Verdana, Arial">
Vi�etas/Listas</FONT></td></tr>
<TR bgcolor="<?php echo $color2?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Puedes hacer listas con vi�etas o listas ordenadas (por letras o n�meros).
<P>
Las listas no ordenadas y con vi�etas:
<P>
<FONT COLOR="#FF0000">[list]</FONT>
<BR>
<FONT COLOR="#FF0000">[*]</font> Este es el primer �tem en la lista.<BR>
<FONT COLOR="#FF0000">[*]</font> Este es el segundo �tem en la lista.<BR>
<FONT COLOR="#FF0000">[/list]</font>
<P>
This produces:
<ul>
<LI> Este es el primer �tem en la lista.
<LI> Este es el segundo �tem en la lista.
</ul>
Observa que debes incluir un [/list] cuando termines cada lista.

<P>
Hacer listas ordenadas es igual de f�cil. Basta a�adir o [LIST=A] o [LIST=1].  Escribiendo [List=A] producir� una lista de la A a la Z.  Usando [List=1] producir� listas numeradas.
<P>
Aqu� hay un ejemplo:
<P>

<FONT COLOR="#FF0000">[list=A]</FONT>
<BR>
<FONT COLOR="#FF0000">[*]</font> Este es el primer �tem en la lista.<BR>
<FONT COLOR="#FF0000">[*]</font> Este es el segundo �tem en la lista.<BR>
<FONT COLOR="#FF0000">[/list]</font>
<P>
Esto produce:
<ol type=A>
<LI> Este es el primer �tem en la lista.
<LI> Este es el segundo �tem en la lista.
</ul>


</FONT>
</td></tr>
<TR bgcolor="<?php echo $color1?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
A�adiendo im�genes</font></td></tr>
<TR bgcolor="<?php echo $color2?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Para a�adir un gr�fico en tu mensaje, basta poner el URL de la imagen gr�fica como se muestra en el siguiente ejemplo (el BBCode est� en <FONT COLOR="#FF0000">rojo</FONT>).
<P>
<CENTER>
<FONT COLOR="#FF0000">[img]</FONT>http://www.totalgeek.org/images/tline.gif<FONT COLOR="#FF0000">[/img]</FONT>
</CENTER>
<P>
En el ejemplo anterior, el BBCode autom�ticamente hace visible el gr�fico en tu mensaje. Nota: la parte "http://" de la URL es NECESARIA para el c�digo <FONT COLOR="#FF0000">[img]</FONT>.
</FONT>
</td></tr>
<TR bgcolor="<?php echo $color1?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Citando otros mensajes</font></td></tr>
<TR bgcolor="<?php echo $color2?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Para referirse a algo espec�fico que otro ha escrito, basta cortar y pegar el texto adecuado y encerrarlo como se muestra a continuaci�n (el BBCode est� en <FONT COLOR="#FF0000">rojo</FONT>).
<P>
<CENTER>
<FONT COLOR="#FF0000">[QUOTE]</FONT>No preguntes lo que tu pa�s puede hacer por t�....<BR>preg�ntate qu� puedes hacer por tu pa�s.<FONT COLOR="#FF0000">[/QUOTE]</FONT>
</CENTER>
<P>
En el ejemplo anterior, el BBCode autom�ticamente prepara el texto que se indica.</FONT>
</td>
</tr>
<TR bgcolor="<?php echo $color1?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Tag de c�digo</FONT></td></tr>
<TR bgcolor="<?php echo $color2?>"><TD>
<FONT SIZE="2" FACE="Verdana, Arial">
Similar al tag de Cita, el tag de C�digo a�ade algunos tags &lt;PRE&gt; para preservar el formato. Esto es �til para mostrar c�digo de programaci�n, por ejemplo.
<P>

<FONT COLOR="#FF0000">[CODE]</FONT>#!/usr/bin/perl
<P>
print "Content-type: text/html\n\n";
<BR>
print "�Hola mundo!";
<FONT COLOR="#FF0000">[/CODE]</FONT>

<P>
En el ejemplo anterior, el BBCode autom�ticamente prepara el texto que se indica y preserva el formato del texto de c�digo.</FONT>
</td>
</tr>
</table>
</td></tr></table>
</blockquote>
<BR>
No debes usar los dos sistemas (HTML y BBCode) para hacer la misma funci�n. F�jate que los BBCode no distinguen may�sculas y min�sculas (por tanto, puedes usar <FONT COLOR="#FF0000">[URL]</FONT> o <FONT COLOR="#FF0000">[url]</FONT>).
<P>
<FONT COLOR="silver">Uso Incorrecto de BBCode:</FONT>
<P>
<FONT COLOR="#FF0000">[url]</FONT> www.totalgeek.org <FONT COLOR="#FF0000">[/url]</FONT> - no pongas ning�n espacio entre el c�digo entre corchetes y el texto al que se aplica el c�digo.
<P>
<FONT COLOR="#FF0000">[email]</FONT>james@totalgeek.org<FONT COLOR="#FF0000">[email]</FONT> - los corchetes del final deben incluir una barra hacia adelante (/) (<FONT COLOR="#FF0000">[/email]</FONT>)

<P>
</FONT>
</B>

	</td>


    <tr bgcolor="<?php echo $color1?>">
        <td nowrap>
	<p align="left"><a name="mods">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Moderadores</b></font></a></p>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
          <p>
	    <font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	    Los moderadores controlan los foros individuales.
            Ellos pueden editar, borrar o pasa cualquier escrito en su foro.
            Si tienes alguna pregunta sobre un foro en particular, deber�as dirigirte al moderador de tu foro.</p>
          <p>Los administradorse y los moderadores de foros se reservan el derecho de terminar o borrar cualquier escrito que no tengan un
	    tema claro y acorde al topic. Hay muchos miembros que todav�a usan
	    m�dems de 28.8 y de 56k que no tienen tiempo para bucear a trav�s
	    de temas poco �tiles y sin sentido. </p>
          <p>Cualquiera que escriba para incrementar sus estad�sticas en los Foros de <?php echo $sitename?> o escriba sobre temas fuera de lugar corren el riesgo de que se cierren sus temas, se eliminen y/o se cancele su pertenencia a los foros. </p>
          <p>Intente hacer que el tema sea un reflejo de lo que hay dentro del hilo. Temas como "Comprueba esto!" y ""~~\\�Tienes que ver esto!//~~" s�lo atraen a los miembros a un tema que puede que no quieran leer.</font></p>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<p align="left"><a name="profile">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Cambiando tu perfil</b></font></a></p>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Puedes cambiar f�cilmente cualquier informaci�n almacenada en tu perfil de registro, usando el v�nculo
        &quot;Editar Perfil&quot; en la parte superior de cada p�gina.
        Simplemente identif�cate escribiendo tu nombre de usuario y tu clave,
	o entrando en el sistema, y toda la informaci�n de tu perfil
	aparecer� en pantalla.</font>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="prefs">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Personalizando usando preferencias</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Como usuario registrado del sistema de foros,
	puedes almacenar tu nombre de usuario en la memoria durante un a�o como m�ximo.
	Al hacer esto nosotros creamos una forma de seguir la pista de qui�n eres cuando visitas los foros, por tanto t� puedes personalizar la apariencia del foro
	al seleccionar de entre los temas que la administraci�n ha dispuesto. Adem�s, si el administrador te lo permite, puedes tener la opci�n de crear nuevos temas para los foros. Al crear un nuevo tema podr�s fijar los colores, fuentes y tama�os de letras del tabl�n, sin embargo,
	por ahora s�lo el administrador puede cambiar las im�genes de cada tema. Cuando un usuario crea un tema las im�genes del tema por defecto se seleccionar�n.
	<br>*NOTA: Para poder usar temas DEBES tener las cookies habilitadas.</font>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td><a name="cookies">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Cookies</b></font></a></td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Este sistema de foros usa cookies para almacenar la siguiente informaci�n:
        la �ltima vez que has visitado los foros, tu nombre de usuario,
	y un n�mero de ID de sesi�n �nico cuando entras al sistema. Estas cookies se guardan en tu navegador.
	Si tu navegador no soporta cookies,
	o has seleccionado no habilitar cookies en tu navegador, ninguna de estas
	caracter�sticas que ahorran tiempo funcionar�n correctamente. </font>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td><a name="edit">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Editando tus mensajes</b></font></a>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Puedes editar tus propios mensajes en cualquier momento. S�lo hace falta ir al hilo donde est� el mensaje a ser editado, y
	ver�s un icono de edici�n en la linea debajo de tu mensaje.
        Pulsa este icono y edita el mensaje. Nadie m�s puede editar tu mensaje,
	excepto el moderador del foro o el administrador del sistema. Adem�s, durante los 30 minutos siguientes a haber escrito el mensaje, la pantalla de edici�n te dar� la opci�n de borrar ese mensaje.
	Despu�s de 30 minutos, sin embargo, s�lo el moderador y/o el administrador podr�n eliminar el mensaje.</font>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td><a name="signature">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>A�adir firmas</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Puedes usar una firma en tus mensajes.
	Si pulsas en el v�nculo de perfil en la parte superior de la
	mayor�a de las p�ginas, podr�s editar tu perfil,
	incluyendo tu firma est�ndar. Una vez que
	hayas almacenado una firma, puedes elegir incluirla en cualquier
	mensaje que crees pulsando la casilla de selecci�n 'Incluir firma' cuando crees un mensaje.
	El administrador de este sistema de foros puede elegir deshabilitar la
	firma en cualquier momento, sin embargo. Si este es el caso, la
	opci�n 'Incluir firma' no aparecer� cuando se escribe un mensaje, incluso
	si has guardado una firma. Puedes cambiar tu firma en cualquier momento
	cambiando tu perfil.
	<p>Nota: Puedes usar HTML o <a href="#bbcode">BB Code</a> si el administrador ha
	habilitado estas opciones.
	    </font>
        </p>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="attach">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Adjuntando ficheros</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Por razones de seguridad, no puedes adjuntar ficheros a ning�n
	mensaje. Puedes cortar y pegar texto en tu mensaje, sin embargo,
	o usar HTML y/o BB Code (si se permiten) para dar hiperv�nculos
	a documentos externos. Los ficheros adjuntos se incluir�n en una
	versi�n futura de phpBB..</font>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="search">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Buscando un mensaje espec�fico</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Puedes buscar mensajes espec�ficos basados en una o varias palabras presentes
	en el texto, un nombre de usuario, una fecha, y/o uno o varios foros.
	Basta pulsar en el v�nculo 'Buscar' en la parte superior de la mayor�a de las
	p�ginas.</font>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="announce">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Anuncios</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Los anuncios no se han implementado, pero est�n planeados para una versi�n futura.
	Sin embargo, el administrador puede crear un foro donde s�lo puedan escribir otros administradores y moderadores. Este tipo de foros pueden usarse f�cilmente como un foro de anuncios.
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="pw">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Nombre de usuario y/o contrase�a perdidos</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
 	En el caso de que pierdas tu clave puedes pulsar en el v�nculo &quot;�Olvid� mi
	contrase�a!&quot; que se muestra en las pantallas donde se pide la clave, despu�s de este campo. Este v�nculo
	te llevar� a una p�gina donde puedes rellenar tu nombre de usuario y tu email.
	El sistema te enviar� entonces una contrase�a aleatoria nueva a la direcci�n email que se almacena en tu perfil,
	suponiendo que has introducido la direcci�n de correo electr�nica correcta.</FONT>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="notify">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>Notificaci�n por email</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Si creas un nuevo tema, tienes la opci�n de recibir una notificaci�n por email cada vez que alguien escribe una respuesta en ese tema.
	Basta con marcar la casilla de notificaci�n por email en la pantalla de nuevo tema
	(&quot;New Topic&quot;) cuando est�s creando tu nuevo tema si quieres
	usar esta caracter�stica. </font>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="searchprivate">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>�Puedo buscar en foros privados?</b>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	S�, pero no podr�s leer ninguno de los mensajes a menos que tengas la clave del foro privado. </font></p>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="ranks">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>�Qu� son los rankings de los Foros de <?php echo $sitename?>?</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Los foros de <?php echo $sitename?> han establecido m�todos para
	clasificar a sus usuarios a trav�s del n�mero de mensajes escritos.</p>
	<br>
	El ranking actual es el siguiente:<br>

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
	<TD><font face="<?php echo $FontFace?>" size="<?php echo $FontSize2?>" color="<?php echo $textcolor?>">&nbsp;Rank Title&nbsp;</font></TD>
	<TD><font face="<?php echo $FontFace?>" size="<?php echo $FontSize2?>" color="<?php echo $textcolor?>">&nbsp;Minimum Posts&nbsp;</font></TD>
	<TD><font face="<?php echo $FontFace?>" size="<?php echo $FontSize2?>" color="<?php echo $textcolor?>">&nbsp;Maximum Posts&nbsp;</font></TD>
        <TD><font face="<?php echo $FontFace?>" size="<?php echo $FontSize2?>" color="<?php echo $textcolor?>">&nbsp;Rank Image&nbsp;</font></TD>
	</TR>
	<?php
	if($m = mysql_fetch_array($r)) {
	do {
	echo "<TR BGCOLOR=\"$color2\" ALIGN=\"CENTER\">";
	echo "<TD><font face=\"<?php echo $FontFace?>\" size=\"2\" color=\"$textcolor\">$m[rank_title]</font></TD>";
	echo "<TD><font face=\"<?php echo $FontFace?>\" size=\"2\" color=\"$textcolor\">$m[rank_min]</font></TD>";
	echo "<TD><font face=\"<?php echo $FontFace?>\" size=\"2\" color=\"$textcolor\">$m[rank_max]</font></TD>";
	// The rank image has not been implemented at this time.
        if($m[rank_image] != '')
	   echo "<TD><img src=\"$url_images/$m[rank_image]\"></TD>";
	else
	   echo "<TD>&nbsp;</TD>";
	echo "</TR>";
	} while($m = mysql_fetch_array($r));
	}
	else {
	echo "<TR BGCOLOR=\"$color2\" ALIGN=\"CENTER\">";
	echo "<TD COLSPAN=\"4\">No Ranks in the database</TD>";
	echo "</TR>";
	}
	?>
	</TABLE></TABLE></font>
	<br>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	El administrador tambi�n tiene la opci�n de asignar rankings especiales a cualquier usuario que escoja. La tabla anterior no muestra estos rankings especiales.
	</font>
        </td>
    </tr>
    <tr bgcolor="<?php echo $color1?>">
        <td>
	<a name="rednumbers">
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>�Por qu� algunos iconos </b>
	</font>
	<font color="#FF0033" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b>est�n ardiendo</b>
	</font>
	<font color="<?php echo $textcolor?>" size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>">
	<b> en la vista del foro?</b></font></a>
	</td>
    </tr>
    <tr bgcolor="<?php echo $color2?>">
        <td>
	<font size="<?php echo $FontSize2?>" face="<?php echo $FontFace?>" color="<?php echo $textcolor?>">
	Los iconos llameantes significan que hay <?php echo $hot_threshold?> o m�s mensajes en ese hilo.
	Es una advertencia para las conexiones lentas de que el hilo
	puede llevar cierto tiempo para cargarse.</font></p>
        </td>
    </tr>
</table>
</TABLE>
</center>
</div>

<?php
include('page_tail.php');
?>

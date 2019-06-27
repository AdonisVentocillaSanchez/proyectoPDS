<html>
<head>
<title>INGRESO INTRANET</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/stylo_1.css" rel="stylesheet" type="text/css">
</head>
<script language='JavaScript'>
function openWindow(name, url) 
{
	var height = screen.availHeight-30;
	var width = screen.availWidth-10;
	var left = 0;
	var top = 0;
	settings = 'fullscreen=no,resizable=yes,location=no,toolbar=no,menubar=no';
	settings = settings + ',status=yes,directories=no,scrollbars=yes';
	settings = settings + ',width=' + width +',height=' + height;
	settings = settings + ',top=' + top +',left=' + left;
	settings = settings + ',charset=iso-8859-1';
	var win = window.open(url, '', settings);
	win.outerHeight = screen.availHeight;
	win.outerWidth = screen.availWidth;
	win.resizeTo(screen.availWidth, screen.availHeight);
	if (!win.focus)
	win.focus();
	return win;
	window.close();
}


</script>
<?
	include('./inc/GeneraNumeroSeguridad.php');
	$OBJGeneraNumeroSeguridad = new GeneraNumeroSeguridad;
	$num= $OBJGeneraNumeroSeguridad -> GenerarNumeroSec();	
?>
<!-- <body onload="openWindow('logeo','./seguridad/indexLogin.php?num=<? //echo $num?>');"> -->
<body>
<? //echo $num;?>
<p>&nbsp;</p>
<table width="680" border="0" align="center" class="nav">
  <tr> 
    <td width="74" rowspan="2"><div align="center"><img src="img/Ingreso.png" width="44" height="46"></div></td>
    <td width="594" colspan="2"> <div align="center" class="nav"><font size="3">INSTITUTO 
        SUPERIOR TECNOLOGICO PUBLICO JULIO CESAR TELLO</font></div></td>
  </tr>
  <tr> 
    <td colspan="2"><div align="center" class="nav">INTRANET - Departamento de 
        Computaci&oacute;n e Inform&aacute;tica &copy; - 2013. Todos los Derechos 
        Reservados</div></td>
  </tr>
</table>
<p align="center"><img src="img/logo2.png" width="62" height="64"></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span class="titsec1"><strong>Recomendaciones de seguridad</strong></span></p>
<p>&nbsp;</p>
<ul>
  <li> Al ingresar a la opci&oacute;n INTRANET del INSTITUTO SUPERIOR TECNOLOGICO 
    PUBLICO JULIO CESAR TELLO, tenga cuidado con las operaciones que realize, 
    pues estas son registradas en la base de datos como medio de auditoria.<br>
  </li>
  <li>No descargue archivos o programas de sitios web de los que no tenga referencias 
    de veracidad, tenga en consideraci&oacute;n que algunas personas inescrupulosas 
    tratar&aacute;n de hacerce con su clave de acceso, con la finalidad de alterar 
    alguna informaci&oacute;n registrada por usted en el sistema.<br>
  </li>
  <li>El sistema del Instituto jam&aacute;s pide que se actualicen sus datos por 
    medio de correo electr&oacute;nico, Sospeche de cualquier correo electr&oacute;nico 
    con solicitudes urgentes de informaci&oacute;n personal (nombre de usuario, 
    password o clave de acceso, etc.)<br>
    Evite abrir archivos de correos de remitentes desconocidos. Incluso sospeche 
    de los conocidos.<br>
  </li>
</ul>
<p> <span class="titsec1">Tener en cuenta</span></p>
<p><br>
  Con el fin de mejorar nuestro servicio y por motivos de seguridad, cualquier 
  inconveniente con el sistema por favor contacte con el administrador del mismo.</p>
<p>&nbsp;</p>
<p align="center"> 
  <input name="Submit" type="button" class="bodymenubold"  onClick="openWindow('logeo','./seguridad/indexLogin.php?num=<? echo $num?>');" value="INGRESAR AL SISTEMA">
</p>
<p>&nbsp;</p>
<p align="center" class="tit2"> INSTITUTO SUPERIOR TECNOLOGICO PUBLICO JULIO CESAR 
  TELLO - Departamento de Computaci&oacute;n e Inform&aacute;tica &copy; - 2013. 
  Todos los Derechos Reservados</p>
<p align="center" class="tit2">&nbsp;</p>
</body>
</html>
  
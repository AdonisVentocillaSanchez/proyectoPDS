<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script language='JavaScript'>
var newwindow;
function popup(url)
{ 
newwindow=window.open(url,'Login','fullscreen,scrollbars=1,width=900,height =600,left=200,top=300,scroll');
//newwindow=window.open(url,'Login','fullscreen=yes,scrollbars=1,scroll');
if (window.focus) {newwindow.focus()}
}


</script>
<?
	include('./inc/GeneraNumeroSeguridad.php');
	$OBJGeneraNumeroSeguridad = new GeneraNumeroSeguridad;
	$num= $OBJGeneraNumeroSeguridad -> GenerarNumeroSec();	
?>
<body onload="popup('./seguridad/indexLogin.php?num=<? echo $num?>'); return true;"  onunload="close();">
</body>
</html>
  
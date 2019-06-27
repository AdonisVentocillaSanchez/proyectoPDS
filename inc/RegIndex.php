<?
	include('../inc/GeneraNumeroSeguridad.php');
	$OBJGeneraNumeroSeguridad = new GeneraNumeroSeguridad;
	$num= $OBJGeneraNumeroSeguridad -> GenerarNumeroSec2();	
	$direccion='../seguridad/indexLogin.php?num='.$num;
?>
<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=<? echo $direccion ?>">


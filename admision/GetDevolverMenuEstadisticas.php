<?
//este archo reenvia al ControlVerEstadisticas.php
if(isset($retrocede) and strcmp($login,"")!=0)
	{
		include_once('FormVerEstadisticas.php');
		$OBJFormVerEstadisticas = new FormVerEstadisticas;
		$OBJFormVerEstadisticas -> MostrarFormVerEstadisticas($login);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
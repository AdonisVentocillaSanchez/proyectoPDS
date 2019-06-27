<?php //indexVerEstadisticas.php desde boton del menu
if(strcmp($login,"")!=0)
	{
		include_once('ControlVerEstadisticas.php');
		$OBJControlVerEstadisticas = new ControlVerEstadisticas;
		$OBJControlVerEstadisticas -> MostrarFormVerEstadisticas($login);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}	
?>
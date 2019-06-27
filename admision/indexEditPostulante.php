<?php
		if(strcmp($login,"")!=0)
	{
		include_once('FormSearchPostulante.php');
		$OBJFormSearchPostulante = new FormSearchPostulante;
		$OBJFormSearchPostulante -> MostrarFormSearchPostulante($login);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
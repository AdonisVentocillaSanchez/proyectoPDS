<?php
	if(isset($buscar) and strcmp($login,"")!=0)
	{
		include_once('ControlSearchPostulante.php');
		$OBJControlSearchPostulante = new ControlSearchPostulante;
		$OBJControlSearchPostulante -> BuscarPostulanteApellido($login,$apellidoPaternoPostulante);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
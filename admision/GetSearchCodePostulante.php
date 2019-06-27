<?php
	if(isset($buscar) and strcmp($login,"")!=0)
	{
		$volver=stripslashes($volver);
		include_once('ControlSearchPostulante.php');
		$OBJControlSearchPostulante = new ControlSearchPostulante;
		$OBJControlSearchPostulante -> BuscarPostulanteCodigo($login,$idPostulante);
		
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}

?>
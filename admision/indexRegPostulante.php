<?php
	if(strcmp($login,"")!=0)
	{
		/*include_once('FormRegPostulante.php');
		$OBJPostulante = new FormRegPostulante;
		$OBJPostulante -> MostrarFormRegPostulante($login);*/
		include_once('ControlPostulante.php');
		$OBJControlPostulante = new ControlPostulante;
		$OBJControlPostulante -> MostrarFormRegPostulante($login);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
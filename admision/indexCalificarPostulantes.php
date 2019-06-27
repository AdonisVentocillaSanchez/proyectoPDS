<?php  //indexCalificarPostulantes.php desde boton
if(strcmp($login,"")!=0)
	{
		include('ControlCalificarPostulantes.php');
		$OBJControlCalificarPostulantes = new ControlCalificarPostulantes;
		$OBJControlCalificarPostulantes -> CalificarPostulantes($login);		
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
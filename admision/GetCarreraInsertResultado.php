<?php
	if(isset($aceptar) and strcmp($login,"")!=0)
	{
		//echo $carrera;
		include_once('ControlCarreraInsertResultado.php');
		$OBJControlCarreraInsertResultado = new ControlCarreraInsertResultado;
		$OBJControlCarreraInsertResultado -> ObtenerListaInsertCarreraResultado($login,$carrera);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}

?>
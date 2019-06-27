<?php
	if(isset($Regresar) && strcmp($login,"")!=0)
	{
		include_once("ControlReporteResultado.php");
		$OBJControlReporteResultado = new ControlReporteResultado;
		$OBJControlReporteResultado -> ReportarResultados($login);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}	
?>
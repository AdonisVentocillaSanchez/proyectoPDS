<?php
// llamado de FormReporteDetalleInscripcion.php
if(isset($detallePostulante) and strcmp($login,"")!=0)
	{
		include_once('ControlDetallePostulante.php');
		$OBJControlDetallePostulante = new ControlDetallePostulante;
		$OBJControlDetallePostulante -> VerDetallePostulante($login,$idPostulante);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
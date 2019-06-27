<?php
//echo $login.$detallePostulante;
	if(isset($detallePostulante) and strcmp($login,"")!=0)
	{
		include_once('ControlReporteDetalleInscripcion.php');
		$OBJControlReporteDetalleInscripcion = new ControlReporteDetalleInscripcion;
		$OBJControlReporteDetalleInscripcion -> MostarDetalleCarrera($login,$idCarrera);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}

?>
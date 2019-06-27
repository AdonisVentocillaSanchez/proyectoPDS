<?
if(strcmp($login,"")!=0)
	{
		include('ControlGenerarReporteDistribucion.php');
		$OBJControlGenerarReporteDistribucion = new ControlGenerarReporteDistribucion;
		$OBJControlGenerarReporteDistribucion -> VerReporteDistribucion($login);		
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
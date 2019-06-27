<?php
	if(isset($reportar) and strcmp($login,"")!=0)
	{
		//$numCarreras=count($carrera);
		/*for($i=0;$i<$numCarreras; $i++) 
		{
			echo $carrera[$i]."<br>";
		}*/
		include_once('ControlCarreraReporteResultado.php');
		$OBJControlCarreraReporteResultado = new ControlCarreraReporteResultado;
		$OBJControlCarreraReporteResultado -> GenerarReporteCarreras($login,$carrera);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}

?>
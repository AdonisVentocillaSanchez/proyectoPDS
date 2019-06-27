<?php
if(isset($carnet) and strcmp($login,"")!=0)
	{
		$idpostulante;
		$nombrePostulante;
		$apellidoPaternoPostulante;
		$apellidoMaternoPostulante;
		$direccionPostulante;
		$dniPostulante;
		$movilPostulante;
		$fijoPostulante;
		$mailPostulante;
		$fecnacPostulante;
		$carrera;
		$nomCarrera2;
		$turnoCarrera2;
		include_once('ReporteCarnet.php');
		$OBJReporteCarnet = new ReporteCarnet;
		$OBJReporteCarnet -> GenerarCarnet($login,$idpostulante,$nombrePostulante,$apellidoPaternoPostulante,$apellidoMaternoPostulante,
		                                   $direccionPostulante,$dniPostulante,$movilPostulante,$fijoPostulante,$mailPostulante,
										   $fecnacPostulante,$fecinc,$carrera,$nomCarrera2,$turnoCarrera2);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
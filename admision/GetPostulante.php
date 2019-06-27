<?php
	if(isset($registrar) and strcmp($login,"")!=0)
	{
		$nombre = strtolower($nombre);
		$apellidop = strtolower($apellidop);
		$apellidom = strtolower($apellidom);
		$direccion = strtolower($cabezadireccion." ".$direccion);
		$distrito;
		$dni;
		$movil;
		$fijo;
		$mail = strtolower($mail);
		$fecnac = $dianac."/".$mesnac."/".$anionac;
		$estadocivil =strtolower($estadocivil);
		$sexo;
		$fecinc;
		$carrera;
		$carrera2;
		$estadoPostulante ="apto";
		$voucher;
		$condicionPostulante;
		$rutaFoto = $_FILES['foto']['tmp_name'];
		//echo $rutaFoto;
		include_once('ControlRegPostulante.php');
		$OBJControlRegPostulante = new ControlRegPostulante;
		$OBJControlRegPostulante -> GuardarPostulante($login,$nombre,$apellidop,$apellidom,$direccion,$dni,$movil,$fijo,$mail,$fecnac,$fecinc,		
									$estadocivil,$sexo,$estadoPostulante,$distrito,$carrera,$carrera2,$voucher,$condicionPostulante,$rutaFoto);
									
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
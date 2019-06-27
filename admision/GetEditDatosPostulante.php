<?php
	if(isset($registrar) and strcmp($login,"")!=0)
	{
		$idpostulante;
		$nombre = strtolower($nombre);
		$apellidop = strtolower($apellidop);
		$apellidom = strtolower($apellidom);
		if(strcmp($cabezadireccion,"")!=0)	$direccion = strtolower($cabezadireccion." ".$direccion);
		else $direccion = strtolower($direccion);
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
		$estadoPostulante = $estadoPostulante;
		$voucher;
		$condicionPostulante;
		$carrera2;
		if(strcmp($foto,"")!=0)
		{
			$rutaFoto = $_FILES['foto']['tmp_name'];
		}
		else
		{
			$rutaFoto="";
		}
		$loginIns;		
		include_once('ControlEditDatosPostulante.php');
		$OBJControlEditDatosPostulante = new ControlEditDatosPostulante;
		$OBJControlEditDatosPostulante -> GuardarPostulante($login,$idpostulante,$nombre,$apellidop,$apellidom,$direccion,$dni,$movil,$fijo,$mail,$fecnac,$fecinc,		
									$estadocivil,$sexo,$estadoPostulante,$distrito,$carrera,$voucher,$loginIns,$condicionPostulante,$rutaFoto,$carrera2);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
<?php  //GetDatosActualizarSede.php desde FormEditSede.php
if(isset($EditSedeOld) and strcmp($login,"")!=0)
{
		
		$nombreSede=strtolower(str_replace ("\"", "'", $nombreSede));
		$direccionSede=strtolower(str_replace ("\"", "'", $direccionSede));
		$datos[0]=$idSede;
		$datos[1]=$nombreSede;
		$datos[2]=$direccionSede;
		$datos[3]=$cantidadAulasSede;
		$datos[4]=$cantidadPostulantesAulaSede;
		$datos[5]=$estadoSede;
		include_once("ControlUpdateSedes.php");
		$OBJControlUpdateSedes = new ControlUpdateSedes;
		$OBJControlUpdateSedes -> ActualizarSede($login,$datos);
}
else
{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
}

?>
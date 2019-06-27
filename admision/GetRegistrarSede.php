<?php //GetRegistrarSede.php desde FormEditSede.php desde ControlEditSede.php
if(isset($RegSedeNew) and strcmp($login,"")!=0)
{
		$nombreSede = strtolower(str_replace ("\"", "'", $nombreSede));
		$direccionSede = strtolower(str_replace ("\"", "'", $direccionSede));
		
		
		include_once("ControlRegSedes.php");
		$OBJControlRegSedes = new ControlRegSedes;
		$OBJControlRegSedes -> RegistrarSede($login,$nombreSede,$direccionSede,$cantidadAulasSede,$cantidadPostulantesAulaSede);
}
else
{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
}
?>
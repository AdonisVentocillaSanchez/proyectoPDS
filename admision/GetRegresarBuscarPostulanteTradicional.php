<?php  // GetRegresarBuscarPostulanteTradicional.php desde FormIngresarResultadoPostulanteTradicional.php
if(isset($RegresarBusqueda) and strcmp($login,"")!=0)
	{
		include_once("ControlInsertResultadoTradicional.php");
		$OBJControlInsertResultadoTradicional = new ControlInsertResultadoTradicional;
		$OBJControlInsertResultadoTradicional -> VerFormBusquedaPostulanteResultado($login,"NO SE GUARDO PUNTAJE  DEL POSTULANTE");
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}	
?>
<?php  /// indexInsertResultadoTradicional.php desde boton menu
	if(strcmp($login,"")!=0)
	{
		include_once("ControlInsertResultadoTradicional.php");
		$OBJControlInsertResultadoTradicional = new ControlInsertResultadoTradicional;
		$OBJControlInsertResultadoTradicional -> VerFormBusquedaPostulanteResultado($login," ");// para envio de mensaje s de error
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}	
?>
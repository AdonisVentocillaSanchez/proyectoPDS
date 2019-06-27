<?php // IndexInsertSedes.php desde boton menu y desde FormVerSedesActivas
if(strcmp($login,"")!=0)
	{
		//echo "ok";
		include_once("ControlInsertSedes.php");
		$OBJControlInsertSedes = new ControlInsertSedes;
		$OBJControlInsertSedes -> VerFormInsertSedes($login);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}	

?>
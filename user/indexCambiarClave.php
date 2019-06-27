<?php //indexCambiarClave.php  desde boton menu
if(strcmp($login,"")!=0)
	{
		include_once('ControlChangePasswordMain.php');
		$OBJControlChangePasswordMain = new ControlChangePasswordMain;
		$OBJControlChangePasswordMain -> VerFormChangePassword($login,1,"");
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
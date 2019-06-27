<?php //GetLoginUser desde FormIngresarLogin.php
if(strcmp($login,"")!=0)
	{
		include_once('../entidad/Usuario.php');
		$OBJUsuario = new Usuario;
		$Resultado = $OBJUsuario -> ObtenerDatosUsuario($login);
		if($Resultado != 0)
		{
			include_once('ControlChangePasswordMain.php');
			$OBJControlChangePasswordMain = new ControlChangePasswordMain;
			$OBJControlChangePasswordMain -> VerFormChangePassword($login,0,"");
		}
		else
		{
			include_once('../inc/FormMensaje.php');
			$OBJMSJ = new FormMensaje;
			$OBJMSJ -> RegresarInicio("Error: dato no valido");		
		}		
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}


?>

<?php //GetChangePasswordPasoB.php desde FormChangePasswordPasoB.php
if(isset($cambiar) and strcmp($login,"")!=0)
	{		
		//echo $login."<br>".$RespuestaSecreta."<br>".$RespuestaIngresada;
		
		if(strcmp($password,$Repassword) == 0)
		{
			//cifrando password
			$password = md5($password);
			include_once('ControlChangePassword.php');
			$OBJFormControlChangePassword = new ControlChangePassword;
			$OBJFormControlChangePassword -> CambiarPassword($login,$flag_procedencia,$password);					
		}
		else
		{
			include_once('FormChangePasswordPasoB.php');
			$OBJFormChangePasswordPasoB = new FormChangePasswordPasoB;
			$OBJFormChangePasswordPasoB -> MostrarFormChangePasswordPasoB($login,"EL PASSWORD Y SU CONFIRMACION NO SON IGUALES");			
		}
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}

?>
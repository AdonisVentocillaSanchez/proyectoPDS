<?php  //GetChangePasswordPasoA.php  desde FormChangePassword
	if(isset($aceptar) and strcmp($login,"")!=0)
	{		
		//echo $login."<br>".$RespuestaSecreta."<br>".$RespuestaIngresada;
		//$flag_procedencia indica si viene del menu = 1 o cero desde afuera
		$RespuestaIngresada=strtolower($RespuestaIngresada);
		$RespuestaSecreta=strtolower($RespuestaSecreta);
		if(strcmp($RespuestaSecreta,$RespuestaIngresada) == 0)
		{
			include_once('FormChangePasswordPasoB.php');
			$OBJFormChangePasswordPasoB = new FormChangePasswordPasoB;
			$OBJFormChangePasswordPasoB -> MostrarFormChangePasswordPasoB($login,$flag_procedencia,$mensaje);					
		}
		else
		{
			include_once('ControlChangePasswordMain.php');
			$OBJControlChangePasswordMain = new ControlChangePasswordMain;
			$OBJControlChangePasswordMain -> VerFormChangePassword($login,$flag_procedencia,"LAS RESPUESTA NO COINCIDEN");			
		}
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
<?php //ControlChangePassword.php desde GetChangePasswordPasoB.php
class ControlChangePassword
{
	public function CambiarPassword($login,$flag_procedencia,$password)
	{
		include_once('../entidad/Usuario.php');
		include_once('../inc/FormMensaje.php');
		$OBJUsuario = new Usuario;
		$OBJMSJ = new FormMensaje;
		$Resultado = $OBJUsuario -> ActualizarPassword($login,$password);
		if($Resultado == 1)
		{
				
				if($flag_procedencia==1)
				{
				$cadena="<form name='form1' method='post' action='../inc/RedireccionarMenu.php'>
				  <div align='center'>
					<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
					<input name='login' type='hidden' id='login' value='".$login."'>
				  </div>
				</form>";				
				}
				else
				{
						$cadena="</p><p align='center'><a href='../index.php'>IR A LA AUTENTICACION DE USUARIO</a></p><p> ";
				}
				$OBJMSJ -> VerFormMensaje("La actualización de los datos de: ".$login." se realizó con éxito",$cadena);
		}
		else
		{
				$cadena="<form name='form1' method='post' action='../inc/RedireccionarMenu.php'>
				  <div align='center'>
					<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
					<input name='login' type='hidden' id='login' value='".$login."'>
				  </div>
				</form>";
				$OBJMSJ -> VerFormMensaje("Error: se produjo un acceso fallido a la Base de Datos<br>por favor contacte al administrador del sistema",$cadena);					
		}
	}
}
?>

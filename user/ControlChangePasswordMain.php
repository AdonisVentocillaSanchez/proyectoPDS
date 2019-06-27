<?php //ControlChangePasswordMain.php desde indexCambiarClave.php
	class ControlChangePasswordMain
	{
		public function VerFormChangePassword($login,$flag_procedencia,$mensaje)
		{
			include_once('../entidad/Usuario.php');
			$OBJUsuario = new Usuario;
			$DatosUsuario = $OBJUsuario -> ObtenerDatosUsuario($login);
			//echo $DatosUsuario[0]['estadoUsuario'];
			if($DatosUsuario != 0 && $DatosUsuario[0]['estadoUsuario']==1)
			{
				include_once('FormChangePasswordPasoA.php');
				$OBJFormChangePasswordPasoA = new FormChangePasswordPasoA;
				$OBJFormChangePasswordPasoA -> MostrarFormChangePasswordPasoA($login,$flag_procedencia,$DatosUsuario,$mensaje);
			}
			else
			{
				include_once('../inc/FormMensaje.php');
				$cadena="<form name='form1' method='post' action='../index.php'>
				  <div align='center'>
					<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
					<input name='login' type='hidden' id='login' value='".$login."'>
				  </div>
				</form>";
				$OBJMSJ = new FormMensaje;
				$OBJMSJ -> VerFormMensaje("El usuario esta dado de baja en el sistema o hay un error de acceso de base de datos<br>por favor contacte al administrador del sistema",$cadena);
			}
		}
	}
?>
<?php //
class ControlDesactivarUsuariosSelec
{
	public function DesactivarUsuariosSelec($login,$UserDesactivar)
	{
		include_once('../entidad/Usuario.php');
		include_once('../inc/FormMensaje.php');
		$OBJUsuario = new Usuario;
		$OBJMSJ = new FormMensaje;
		$Respuesta = $OBJUsuario -> DesactivarUsuario($UserDesactivar);
		if($Respuesta ==1)
		{
				$cadena="<form name='form1' method='post' action='../inc/RedireccionarMenu.php'>
				  <div align='center'>
					<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
					<input name='login' type='hidden' id='login' value='".$login."'>
				  </div>
				</form>";
				$OBJMSJ -> VerFormMensaje("Se han desactivado correctamente a los usuarios",$cadena);	
		}
		else
		{
			$cadena="<form name='form1' method='post' action='../inc/RedireccionarMenu.php'>
				  <div align='center'>
					<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
					<input name='login' type='hidden' id='login' value='".$login."'>
				  </div>
				</form>";
			$OBJMSJ -> VerFormMensaje("Error: Ocurrio un error en el acceso a la base de datos<br> contacte con el administrador del sistema",$cadena);			
		}
	}
}
?>
<?php //ControlDesactivarUsuario.php desdeIndexDesactivarUsuario.php
class ControlDesactivarUsuario
{
	public function VerFormDesactivarUsuario($login)
	{
		include_once('../entidad/Usuario.php');
		include_once('../inc/FormMensaje.php');
		$OBJUsuario = new Usuario;
		$OBJMSJ = new FormMensaje;
		$ListaUsuarios = $OBJUsuario -> ObtenerUsuarios();
		if($ListaUsuarios != 0)
		{
			include_once('FormDesactivarUsuarios.php');
			$OBJFormDesactivarUsuarios = new FormDesactivarUsuarios;
			$OBJFormDesactivarUsuarios -> MostrarFormDesactivarUsuarios($login,$ListaUsuarios);
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
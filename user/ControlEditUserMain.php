<?	// desde IndexEditUser.php
	class ControlEditUserMain
	{
		public function VerFormEditUserMain($login)
		{
			include_once('../entidad/Usuario.php');
			$OBJUsuario = new Usuario;
			$ListaUsuarios = $OBJUsuario -> ObtenerUsuarios();
			//$ListaUsuarios = login, nombre, apellidoPaterno,apellidoMaterno, password, preguntaSecreta, respuestaSecreta, estadoUsuario
			if($ListaUsuarios != 0)
			{
				include_once('FormSelectEditUser.php');
				$OBJFormSelectEditUser = new FormSelectEditUser;
				$OBJFormSelectEditUser -> MostrarFormSelectEditUser($login,$ListaUsuarios);				
			}
			else
			{
				include_once('../inc/FormMensaje.php');
				$cadena="<form name='form1' method='post' action='../inc/RedireccionarMenu.php'>
				  <div align='center'>
					<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
					<input name='login' type='hidden' id='login' value='".$login."'>
				  </div>
				</form>";
				$OBJMSJ = new FormMensaje;
				$OBJMSJ -> VerFormMensaje("Error: se produjo un acceso fallido a la Base de Datos<br>por favor contacte al administrador del sistema",$cadena);
			}
		}
	}
?>
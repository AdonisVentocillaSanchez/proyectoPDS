<?	// desde IndexRegUser.php
	class ControlRegUserMain
	{
		public function VerFormRegUserMain($login)
		{
			include_once('../entidad/Privilegio.php');
			$OBJPrivilegio = new Privilegio;
			$ListaPrivilegios = $OBJPrivilegio -> ObtenerPrivilegios();
			if($ListaPrivilegios != 0)
			{
				include_once('FormRegUser.php');
				$OBJFormRegUser = new FormRegUser;
				$OBJFormRegUser -> MostrarFormRegUser($login,$ListaPrivilegios,"");//para validacion de valores
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
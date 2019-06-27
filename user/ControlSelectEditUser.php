<?php // desde GetSelectEditUser.php
	class ControlSelectEditUser
	{
		public function VerDetalleUserEdit($login,$loginUser,$mensaje)
		{
			include_once('../entidad/Usuario.php');
			include_once('../entidad/Privilegio.php');
			include_once('../entidad/DetallePrivilegio.php');
			$OBJUsuario = new Usuario;
			$OBJPrivilegio = new Privilegio;
			$OBJDetallePrivilegio = new DetallePrivilegio;
			//obtener datos del usurio a editar
			$DatosUsuario = $OBJUsuario -> ObtenerDatosUsuario($loginUser);
			 //obtener todos los privilegiso
			$ListaPrivilegios = $OBJPrivilegio ->ObtenerPrivilegios();
			//obtener los privilegios del usuario
			$ListaPrivilegiosUsuario = 	$OBJDetallePrivilegio -> ObtenerPrivilegiosUsuario($loginUser);
			//echo $ListaPrivilegiosUsuario;		
			if($DatosUsuario != 0 and $ListaPrivilegios !=0  and $ListaPrivilegiosUsuario !=0)
			{
				include_once('FormEditUser.php');
				$OBJFormEditUser = new FormEditUser;
				$OBJFormEditUser -> MostrarFormEditUser($login,$DatosUsuario,$ListaPrivilegios,$ListaPrivilegiosUsuario,$mensaje);
				// el campo vacio es para rellamada en la validacion				
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
<?php  // desde GetRegUser.php
	class ControlRegUser
	{
		public function AlmacenarUserPrivilegios($login,$NewUser,$newLogin,$newPrivilegio)
		{
				// vector $NewUser -> TABLA usuario
				// $newLogin y vector $newPrivilegio -> TABLA detalle privilegio
				include_once('../entidad/Usuario.php');
				include_once('../entidad/DetallePrivilegio.php');
				$OBJUsuario = new Usuario;
				$OBJDetallePrivilegio = new DetallePrivilegio;
				$Resultado = $OBJUsuario -> RegistrarNewUser($NewUser);
				if($Resultado == 1)
				{
					//seguimos vamos bien
					include_once('../inc/FormMensaje.php');
					$OBJMSJ = new FormMensaje;
					$Resultado = $OBJDetallePrivilegio -> RegistrarPrivilegiosUser($newLogin,$newPrivilegio);
					if($Resultado == 1)
					{						
						$cadena="<form name='form1' method='post' action='../inc/RedireccionarMenu.php'>
						  <div align='center'>
							<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
							<input name='login' type='hidden' id='login' value='".$login."'>
						  </div>
						</form>";						
						$OBJMSJ -> VerFormMensaje("Se ha registrado al usuario: ".$newLogin." Pulse el botón para continuar",$cadena);					
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
				else
				{   // no se guardo usuario
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
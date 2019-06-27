<?php
	class ControlLogin
	{
		public function ValidarUsuario($login,$password)
		{
			include_once('../entidad/Usuario.php');
			$OBJUsuario = new Usuario;
			$validacion = $OBJUsuario -> VerificarUsuario($login,$password);
			if($validacion == 1)
			{	
				$privilegios =  $OBJUsuario -> ObtenerPrivilegiosUsuario($login);				
				if($privilegios != 0)
				{ //llama a menu
					session_start();
					include_once('FormMenuUsuario.php');
					$OBJMenu = new FormMenuUsuario;
					$OBJMenu -> MostrarMenuUsuario($login,$privilegios);					
				}
				else
				{
					include_once('../inc/FormMensaje.php');
					$OBJMSJ = new FormMensaje;
					$OBJMSJ -> RegresarInicio("Error: Usuario sin privilegios o es un intento de acceso no permitido");		
				}
			}
			else
			{
				include_once('../inc/FormMensaje.php');
				$OBJMSJ = new FormMensaje;
				$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
			}
		}
	}
?>

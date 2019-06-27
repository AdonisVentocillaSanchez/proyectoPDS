<?php
	if(isset($retrocede)and strcmp($login,"")!=0)
	{
				include_once('../entidad/Usuario.php');
				$OBJUsuario = new Usuario;
				$privilegios =  $OBJUsuario -> ObtenerPrivilegiosUsuario($login);				
				if($privilegios != 0)
				{ //llama a menu
					session_start();
					include_once('../seguridad/FormMenuUsuario.php');
					$OBJMenu = new FormMenuUsuario;
					$OBJMenu -> MostrarMenuUsuario($login,$privilegios);					
				}
				else
				{
					include_once('../inc/FormMensaje.php');
					$OBJMSJ = new FormMensaje;
					$OBJMSJ -> VerFormMensaje("Error: El usuario no tiene privilegios de acceso<br>existe un aborto de operacion","<a href='../index.php'>Salir del sistema</a>");	
				}
	}
	else
	{
				include_once('../inc/FormMensaje.php');
				$OBJMSJ = new FormMensaje;
				$OBJMSJ -> VerFormMensaje("Error: se ha intentado ingresar indebidamente al sistema","<a href='../index.php'>accesar correctamente</a>");
	}
?>
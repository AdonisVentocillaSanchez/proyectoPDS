<?
//desde boton menu
	if(strcmp($login,"")!=0)
	{
		include_once('ControlDesactivarUsuario.php');
		$OBJControlDesactivarUsuario = new ControlDesactivarUsuario;
		$OBJControlDesactivarUsuario -> VerFormDesactivarUsuario($login);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
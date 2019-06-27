<? // desde FormSelectEditUser.php
	if(isset($detalleUser) and strcmp($login,"")!=0)
	{		
		//echo $loginUser;
		include_once('ControlSelectEditUser.php');
		$OBJControlSelectEditUser = new ControlSelectEditUser;
		$OBJControlSelectEditUser -> VerDetalleUserEdit($login,$loginUser,"");		
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}

?>
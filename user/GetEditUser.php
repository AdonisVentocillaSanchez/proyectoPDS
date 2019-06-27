<?php // desde FormEditUser.php
if(isset($ActualizarUser) and strcmp($login,"")!=0)
{
	//echo count($newPrivilegio);
	if(count($newPrivilegio) > 0)
	{
		//el password??
		if(strcmp($password,"")==0)
		{
			$password = $passwordAnterior;
		}
		else
		{
			$password = md5($password);
		}
		//armando el array
		$loginUser;
		$OldUser[0] = $password;
		$OldUser[1] = trim(strtolower($nombre));
		$OldUser[2] = trim(strtolower($apellidoPaterno));
		$OldUser[3] = trim(strtolower($apellidoMaterno));
		$OldUser[4] = trim(strtolower($preguntaSecreta));
		$OldUser[5] = trim(strtolower($respuestaSecreta));
		$OldUser[6] = $estadoUsuario;
		/*for($i=0;$i<count($OldUser);$i++)
		{
			echo $OldUser[$i]."<br>";
		}*/
		// $loginUser y vector $OldUser para actualizar datos del usuario
		// $loginUser y vector $newPrivilegio para tabla detalleprivilegio
		include_once('ControlEditUser.php');
		$OBJControlEditUser = new ControlEditUser;
		$OBJControlEditUser -> ActualizarDatosUser($login,$loginUser,$OldUser,$newPrivilegio);
	}
	else
	{
		include_once('ControlSelectEditUser.php');
		$OBJControlSelectEditUser = new ControlSelectEditUser;
		$OBJControlSelectEditUser -> VerDetalleUserEdit($login,$loginUser,"ERROR: Debe seleccionar por lo menos un privilegio");
	}
}
else
{
	include_once('../inc/FormMensaje.php');
	$OBJMSJ = new FormMensaje;
	$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
}
?>
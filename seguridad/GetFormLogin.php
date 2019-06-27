<?
	if(isset($ingresar) and strlen($login)>=5 and strlen($password)>=4)
	{
		include('ControlLogin.php');
		$OBJControlLogin = new ControlLogin;
		$OBJControlLogin -> ValidarUsuario($login,$password);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		/*$cadena="<br>
		<form name='form1' method='post' action='../inc/RegIndex.php'>
 	    <div align='center'>
		<input name='Submit' type='submit' class='bodymenubold' value='Ir al inicio'>
		</div></form>";*/
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado<br> o los valores ingresados en la autenticacion no son validos");		
	}
?>
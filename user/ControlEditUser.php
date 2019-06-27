<?php // desde GetEditUser.php
 class ControlEditUser
 {
 	public function ActualizarDatosUser($login,$loginUser,$OldUser,$newPrivilegio)
	{
		include_once('../entidad/Usuario.php');
		include_once('../entidad/DetallePrivilegio.php');
		$OBJUsuario = new Usuario;
		$OBJDetallePrivilegio = new DetallePrivilegio;
		$ResultadoA = $OBJUsuario -> ActualizarUser($loginUser,$OldUser); 
		$ResultadoB = $OBJDetallePrivilegio -> LimpiarPrivilegiosUser($loginUser);//borra privilegios
		$ResultadoC = $OBJDetallePrivilegio -> RegistrarPrivilegiosUser($loginUser,$newPrivilegio);//ingresa nuevos privilegios
		if($ResultadoA == 1 and $ResultadoB == 1 and $ResultadoC==1)
		{
				include_once('../inc/FormMensaje.php');
				$cadena="<form name='form1' method='post' action='../inc/RedireccionarMenu.php'>
				  <div align='center'>
					<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
					<input name='login' type='hidden' id='login' value='".$login."'>
				  </div>
				</form>";
				$OBJMSJ = new FormMensaje;
				$OBJMSJ -> VerFormMensaje("La actualización de los datos de: ".$loginUser." se realizó con éxito",$cadena);					
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
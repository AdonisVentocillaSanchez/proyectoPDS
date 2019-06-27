<?php // ControlUpdateSedes.php desde GetDatosActualizarSede.php desde FormEditSede.php
class ControlUpdateSedes
{
	public function ActualizarSede($login,$datos)
	{
		include_once('../entidad/Sede.php');
		$OBJSede = new Sede;
		$Respuesta = $OBJSede -> ActualizarSede($datos);
		if($Respuesta == 1)
		{
			include_once("ControlInsertSedes.php");
			$OBJControlInsertSedes = new ControlInsertSedes;
			$OBJControlInsertSedes -> VerFormInsertSedes($login);
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
			$OBJMSJ -> VerFormMensaje("No se pudo actualizar la información en la base de datos",$cadena);
		}
	}
}
?>
<?php //ControlRegSedes.php desde GetRegistrarSede.php desde FormEditSede.php desde ControlEditSede.php
class ControlRegSedes
{
	public function  RegistrarSede($login,$nombreSede,$direccionSede,$cantidadAulasSede,$cantidadPostulantesAulaSede)
	{
		include_once('../entidad/Sede.php');
		$OBJSede = new Sede;
		$Respuesta = $OBJSede -> InsertarSede($nombreSede,$direccionSede,$cantidadAulasSede,$cantidadPostulantesAulaSede);
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
			$OBJMSJ -> VerFormMensaje("No se pudo registrar la sede<br> contacte al adminsitrador del sistema",$cadena);
		}
	}
}
?>
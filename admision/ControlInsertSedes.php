<?php // ControlInsertSedes.php desde IndexInsertSedes.php
class ControlInsertSedes
{
	public function VerFormInsertSedes($login)
	{
		include_once('../entidad/Sede.php');
		include_once('FormInsertSede.php');
		$OBJSede = new Sede;
		$OBJFormInsertSede = new FormInsertSede;
		$listaSedes = $OBJSede -> ObtenerSedes();
		$listaSedesActivas = $OBJSede ->ObtenerSedesActivas();
		if($listaSedes == 0)
		{
			$msj = "NO EXISTEN SEDES REGISTRADAS";
		}
		$OBJFormInsertSede -> MostrarFormInsertSedes($login,$listaSedes,$listaSedesActivas,$msj);
		/*else
		{
			include_once('../inc/FormMensaje.php');
			$cadena="<form name='form1' method='post' action='../inc/RedireccionarMenu.php'>
			<div align='center'>
			<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
			<input name='login' type='hidden' id='login' value='".$login."'>
			</div>
			</form>";
			$OBJMSJ = new FormMensaje;
			$OBJMSJ -> VerFormMensaje("Error: No se encontro ninguna coincidencia de apellido paterno",$cadena);
		}*/
	}
}

?>
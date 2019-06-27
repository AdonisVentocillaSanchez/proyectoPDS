<?php //ControlEditSede.php desde GetEditSede.php
class ControlEditSede
{
	public function VerFormEditSede($login,$idSede)
	{
		include_once('../entidad/Sede.php');
		$OBJSede = new Sede;
		$DatosSede = $OBJSede -> ObtenerDatosSede($idSede);
		//echo $DatosSede[0]['nombreSede'];
		if($DatosSede !=0)
		{
			include_once('FormEditSede.php');
			$OBJFormEditSede = new FormEditSede;
			$OBJFormEditSede -> MostrarFormEditSede($login,$DatosSede);	
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
			$OBJMSJ -> VerFormMensaje("No se ha podido obtener los datos de la sede<br>Contacte al Administrador del Sistema",$cadena);
		}
	}
}
?>
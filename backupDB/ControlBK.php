<?
class ControlBK
{
	public function HacerBK($login)
	{
		include_once('../entidad/Backup.php');
		$OBJBackup = new Backup;
		$Resultado = $OBJBackup -> RealizarBackup($login,$tables ='*');
		//echo $Resultado;
		if($Resultado==1)
		{
			include_once('../inc/FormMensaje.php');
			$cadena="<form name='form1' method='post' action='../inc/RedireccionarMenu.php'>
			  <div align='center'>
				<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
				<input name='login' type='hidden' id='login' value='".$login."'>
			  </div>
			</form>";
			$OBJMSJ = new FormMensaje;
			$OBJMSJ -> VerFormMensaje("SE HA CREADO UN BACKUP DE BASE DE DATOS",$cadena);
		} 
	}
}
?>

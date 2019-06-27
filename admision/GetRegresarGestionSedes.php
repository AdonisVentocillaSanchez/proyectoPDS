<? //GetRegresarGestionSedes.php desde FormEditSede.php
if(isset($retrocede) and strcmp($login,"")!=0)
{
		include_once("ControlInsertSedes.php");
		$OBJControlInsertSedes = new ControlInsertSedes;
		$OBJControlInsertSedes -> VerFormInsertSedes($login);
}
else
{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
}
?>
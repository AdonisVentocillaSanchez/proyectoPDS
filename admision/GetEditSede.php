<? //GetEditSede.php desde FormInsertSede.php
if(isset($EditSede) and strcmp($login,"")!=0)
{
	//echo count($newPrivilegio);
	include_once('ControlEditSede.php');
	$OBJControlEditSede = new ControlEditSede;
	$OBJControlEditSede	-> VerFormEditSede($login,$idSede);
}
else
{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
}
?>
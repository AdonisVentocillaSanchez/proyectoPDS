<?
	if(strcmp($login,"")!=0)
	{
		include_once("ControlInsertResultado.php");
		$OBJControlInsertResultado = new ControlInsertResultado;
		$OBJControlInsertResultado -> VerFormResultadoCarreras($login);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}		
?>
<?php // desde boton en menu
	if(strcmp($login,"")!=0)
	{
		include_once('ControlEditUserMain.php');
		$OBJControlEditUserMain = new ControlEditUserMain;
		$OBJControlEditUserMain -> VerFormEditUserMain($login);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>

<?php  //indexGenerarAulas.php  desde menu
	if(strcmp($login,"")!=0)
	{
		/*include_once("FormGenerarAulasIngresarDatos.php");
		$OBJFormGenerarAulasIngresarDatos = new FormGenerarAulasIngresarDatos;
		$OBJFormGenerarAulasIngresarDatos -> MostrarFormGenerarAulasIngresarDatos($login);*/
		include_once('ControlSedeActiva.php');
		$OBJControlSedeActiva = new ControlSedeActiva;
		$OBJControlSedeActiva -> VerFormSedeActiva($login,"");
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}	
?>
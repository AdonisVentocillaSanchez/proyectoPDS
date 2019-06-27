<? // indexControlCalidad.php desde boton
if(strcmp($login,"")!=0)
	{
		include_once('ControlCalidad.php');
		$OBJControlCalidad = new ControlCalidad;
		$OBJControlCalidad -> VerFormControlCalidad($login,$idPostulante);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
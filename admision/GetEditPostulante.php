<?
	if(isset($editar) and strcmp($login,"")!=0)
	{
		//echo $idpostulante;
		include_once('ControlEditPostulante.php');
		$OBJControlEditPostulante = new ControlEditPostulante;
		$OBJControlEditPostulante -> EditarPostulante($login,$idpostulante);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
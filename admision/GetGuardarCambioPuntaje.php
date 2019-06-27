<?php //GetGuardarCambioPuntaje.php desde FormControlCalidad.php desde desde indexControlCalidad.php desde boton
if(isset($editarPuntaje) and strcmp($login,"")!=0)
{
	include_once('ControlCambioPuntaje.php');
	$OBJControlCambioPuntaje = new ControlCambioPuntaje;
	$OBJControlCambioPuntaje -> CambiarPuntajePostulante($login,$idPostulante,$puntaje);
}
else
{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
}
?>
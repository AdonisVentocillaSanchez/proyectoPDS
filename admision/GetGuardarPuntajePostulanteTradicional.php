<?php // GetGuardarPuntajePostulanteTradicional.php desde FormIngresarResultadoPostulanteTradicional.php
	if(isset($GuardarPuntaje) and strcmp($login,"")!=0)
	{
		$puntos=$ptospost;
		include_once('ControlGuardarPuntajePostulanteTradicional.php');
		$OBJControlGuardarPuntajePostulanteTradicional = new ControlGuardarPuntajePostulanteTradicional;
		$OBJControlGuardarPuntajePostulanteTradicional -> GuardarPuntaje($login,$idPostulante,$puntos);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
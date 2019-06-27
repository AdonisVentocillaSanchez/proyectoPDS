<?php //GetBusquedaPostulanteResultado.php desde FormBusquedaPostulanteResultado.php
if(isset($MostrarPostulante) and strcmp($login,"")!=0)
	{
		include_once('ControlBusquedaPostulanteResultado.php');
		$OBJControlBusquedaPostulanteResultado = new ControlBusquedaPostulanteResultado;
		$OBJControlBusquedaPostulanteResultado -> BuscarPostulanteCodigo($login,$idPostulante);		
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
<?php //ControlCambioPuntaje.php desde GetGuardarCambioPuntaje.php desde FormControlCalidad.php desde desde indexControlCalidad.php desde boton
class ControlCambioPuntaje
{
	public function CambiarPuntajePostulante($login,$idPostulante,$puntaje)
	{
		include_once('../entidad/Resultado.php');
		$OBJResultado = new Resultado;
		$Respuesta = $OBJResultado -> ActualizarPuntajePostulante($login,$idPostulante,$puntaje);
		if($Respuesta != 0)
		{
			include_once('ControlCalidad.php');
			$OBJControlCalidad = new ControlCalidad;
			$OBJControlCalidad -> VerFormControlCalidad($login,$idPostulante);
		}
		else
		{
			include_once('../inc/FormMensaje.php');
				$cadena="<form name='form1' method='post' action='../inc/RedireccionarMenu.php'>
				  <div align='center'>
					<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
					<input name='login' type='hidden' id='login' value='".$login."'>
				  </div>
				</form>";
				$OBJMSJ = new FormMensaje;
				$OBJMSJ -> VerFormMensaje("Error: No se pudo actualizar el puntaje del postulante<br>contacte con el administrador del sistema",$cadena);
		}		
	}
}
?>
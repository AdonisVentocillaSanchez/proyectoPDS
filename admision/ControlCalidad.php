<?php   //ControlCalidad.php desde indexControlCalidad.php desde boton
class ControlCalidad
{
	public function VerFormControlCalidad($login,$idPostulante)
	{
		include_once('../entidad/Configuracion.php');
		include_once('FormControlCalidad.php');
		if(strcmp($idPostulante,"") != 0)
		{
				include_once('../entidad/Resultado.php');
				$OBJResultado = new Resultado;
				$puntajePostulante = $OBJResultado -> ObtenerPuntaje($idPostulante);
				$puntaje = $puntajePostulante[0][0];
		}
		else
			$idPostulante="";
		$OBJFormControlCalidad = new FormControlCalidad;
		$OBJConfiguracion = new Configuracion;
		$proceso = $OBJConfiguracion -> ObtenerProcesoActual();
		$OBJFormControlCalidad -> MostrarFormControlCalidad($login,$proceso,$idPostulante,$puntaje);
	}
}
?>

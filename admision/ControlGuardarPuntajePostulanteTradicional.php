<?  // ControlGuardarPuntajePostulanteTradicional.php desde GetGuardarPuntajePostulanteTradicional.php
class ControlGuardarPuntajePostulanteTradicional
{
		public function GuardarPuntaje($login,$idPostulante,$puntos)
		{
			include_once('../entidad/Resultado.php');
			$OBJResultado = new Resultado;
			$Resultado = $OBJResultado -> GuardarPuntajePostulante($login,$idPostulante,$puntos);
			if($Resultado == 1)
			{
				$msj = "";
			}
			else
			{
				$msj = "HA OCURRIDO UN ERROR Y NO SE GUARDO EL PUNTAJE";
			}
			include_once("ControlInsertResultadoTradicional.php");
			$OBJControlInsertResultadoTradicional = new ControlInsertResultadoTradicional;
			$OBJControlInsertResultadoTradicional -> VerFormBusquedaPostulanteResultado($login,$msj);
		}
}

?>
<?php // ControlBusquedaPostulanteResultado.php desde GetBusquedaPostulanteResultado.php
	class ControlBusquedaPostulanteResultado
	{
		public function BuscarPostulanteCodigo($login,$idPostulante)
		{			
				include_once('../entidad/Postulante.php');
				$OBJPostulante = new Postulante;
				$DatosPostulante = $OBJPostulante -> ObtenerDatosPostulante($idPostulante);
				if($DatosPostulante!=0)
				{
					//echo $DatosPostulante[0]['apellidoPaternoPostulante']; 
					include_once('FormIngresarResultadoPostulanteTradicional.php');
					$OBJFormIngresarResultadoPostulanteTradicional = new FormIngresarResultadoPostulanteTradicional;
					$OBJFormIngresarResultadoPostulanteTradicional -> MostrarFormInsertResultadoTradicional($login,$DatosPostulante);
				}
				else
				{
					include_once("ControlInsertResultadoTradicional.php");
					$OBJControlInsertResultadoTradicional = new ControlInsertResultadoTradicional;
					$OBJControlInsertResultadoTradicional -> VerFormBusquedaPostulanteResultado($login,"NO SE ENCONTRO POSTULANTE CON EL CODIGO PEDIDO");
					
					
				}				
		}
		function __destruct(){}
	}
?>
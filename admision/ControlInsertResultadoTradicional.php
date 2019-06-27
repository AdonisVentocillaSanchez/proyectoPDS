<?php // ControlInsertResultadoTradicional.php desde indexInsertResultadoTradicional.php
	 class ControlInsertResultadoTradicional
	 {
	 		public function VerFormBusquedaPostulanteResultado($login,$mensaje)
			{
					include_once('../entidad/Postulante.php');
					include_once('../entidad/Configuracion.php');			
					$OBJConfiguracion = new Configuracion;
					$OBJPostulante = new Postulante;
					$procesoActual = $OBJConfiguracion -> ObtenerProcesoActual();
					$ListaIdPostulantes = $OBJPostulante -> ObtenerCodigosPostulantesAptos($proceso);
					if(count($ListaIdPostulantes)==0)
					{
						$mensaje="NO EXISTEN MAS POSTULANTES - REGRESE AL MENU";
					}
					
					for($i=0;$i<count($ListaIdPostulantes);$i++)
					{
						$ListaID[$i] = $ListaIdPostulantes[$i][0];
					}
					include_once('FormBusquedaPostulanteResultado.php');					
					$OBJFormBusquedaPostulanteResultado =  new FormBusquedaPostulanteResultado;
					$OBJFormBusquedaPostulanteResultado -> MostrarFormBusquedaPostulanteResultado($login,$ListaID,$mensaje);
			}
	 }
?>
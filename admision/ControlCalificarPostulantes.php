<?php //ControlCalificarPostulantes.php desde indexCalificarPostulantes.php
	class ControlCalificarPostulantes
	{
		public function CalificarPostulantes($login)
		{
			include_once('../entidad/Resultado.php');
			include_once('../entidad/Carrera.php');
			include_once('../entidad/Postulante.php');
			include_once('../entidad/Configuracion.php');			
			$OBJConfiguracion = new Configuracion;
			$OBJCarrera = new Carrera;
			$OBJResultado = new Resultado;
			$OBJPostulante = new Postulante;
			$OBJResultado -> LimpiarObservacion();
			
			$procesoActual = $OBJConfiguracion -> ObtenerProcesoActual();
			$Resultado = $OBJResultado -> ExistePuntaje();
			
			$ResultadoPostulantes = $OBJPostulante ->ObtenerCodigosPostulantesParaCalificacionFinal();
			/*echo count($Resultado);
			echo count($ResultadoPostulantes);
			*/
			if(count($Resultado) == count($ResultadoPostulantes))
			{
					$ListaCarreras = $OBJCarrera -> ObtenerCarreras();			
					///////falta califica
					for($i=0;$i<count($ListaCarreras);$i++)
					{
						$ListadoPostulantesCarrera = $OBJPostulante -> ObtenerCodigosPostulantesParaCalificacion($ListaCarreras[$i]['idCarrera']);
						$vacantesCarrera = $ListaCarreras[$i]['vacantesCarrera'];
						$contVacantes =1;
						for($j=0;$j<count($ListadoPostulantesCarrera);$j++)
						{
								if($contVacantes <= $vacantesCarrera)
									$condicion = "ingreso";
								else
									$condicion = 'no ingreso';
								$OBJResultado ->ActualizarObservacionPostulante($login,$ListadoPostulantesCarrera[$j]['idPostulante'],$condicion);
								$contVacantes++;
						}
					}
					$OBJResultado -> ObservarInaptos();
					include_once('../inc/FormMensaje.php');
					$cadena="<form name='form1' method='post' action='../inc/RedireccionarMenu.php'>
					<div align='center'>
					<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
					<input name='login' type='hidden' id='login' value='".$login."'>
					</div>
					</form>";
					$OBJMSJ = new FormMensaje;
					$OBJMSJ -> VerFormMensaje("SE HA REALIZADO LA CALIFICACION",$cadena);
					
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
				$OBJMSJ -> VerFormMensaje("YA HA SIDO REALIZADA LA CALIFICACION, O SE HA PRODUCIDO UN ERROR<br>CONTACTE CON EL ADMINISTRADOR DEL SISTEMA",$cadena);
			}
		}
	}
?>
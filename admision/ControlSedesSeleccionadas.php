<?php //ControlSedesSeleccionadas.php desde GetSedesSeleccionadas.php
class ControlSedesSeleccionadas
{
	public function DistribuirPostulantes($login)
	{
		include_once('../entidad/Sede.php');
		include_once('../entidad/Postulante.php');
		include_once('../entidad/Configuracion.php');
		$OBJConfiguracion = new Configuracion;
		$OBJSede = new Sede;
		$OBJPostulante = new Postulante;
		$proceso = $OBJConfiguracion -> ObtenerProcesoActual();
		$ListaSedes = $OBJSede -> ObtenerSedesActivas();
		$ListaPostulanteRandom = $OBJPostulante -> ObtenerCodigosPostulantesAptosRandom($proceso);
		for($i=0;$i<count($ListaSedes);$i++)
		{
			$idSedes[$i] = $ListaSedes[$i]['idSede'];
			$cantAulas[$i] = $ListaSedes[$i]['cantidadAulasSede'];
			$cantPostulantePorAula[$i] = $ListaSedes[$i]['cantidadPostulantesAulaSede'];
			$cantPostulantesSede[$i] = $cantAulas[$i] * $cantPostulantePorAula[$i];			
		}
		/*for($i=0;$i<count($idSedes);$i++)
		{
			echo $idSedes[$i]." -> ".$cantAulas[$i]." -> ".$cantPostulantePorAula[$i]." = ".$cantPostulantesSede[$i]."<br>";			
		}*/
		for($i=0;$i<count($ListaPostulanteRandom);$i++)
		{
			$Postulantes[$i] = $ListaPostulanteRandom[$i]['idPostulante'];			
		}
		// ASIGNADO ALEATORIAMENTE SEDES Y AULAS
		$cont=0;
		$indice=0;
		$Aula=1;
		$contAula=0;
		for($i=0;$i<count($Postulantes);$i++)
		{
				$PostulanteRamdomAula[$i]['idSede']=$idSedes[$cont];
				$PostulanteRamdomAula[$i]['aulaPostulante']=$Aula;
				$PostulanteRamdomAula[$i]['idPostulante']=$Postulantes[$i];
				$capacidadPorAula = $cantPostulantesSede[$cont]/$cantAulas[$cont];
				$indice++;
				$contAula++;
				if($capacidadPorAula == $contAula)
				{
					$Aula++;
					$contAula=0;
					if ($cantPostulantesSede[$cont]== $indice)
					{ 
						$Aula=1;
					}
				}
				if ($cantPostulantesSede[$cont]== $indice)
				{ 
					$cont++;
					$indice=0;
				}
								
		}
		//ARMANDO VECTORES	DISTINTOS PARA EVITAR PROBLEMAS EN EL ENVIO AL CONTROL
		for($i=0;$i<count($PostulanteRamdomAula);$i++)
		{
				$VectorIdSede[$i] = $PostulanteRamdomAula[$i]['idSede'];
				$VectorAula[$i] = $PostulanteRamdomAula[$i]['aulaPostulante'];
				$VectorIdPostulante[$i] = $PostulanteRamdomAula[$i]['idPostulante'];
		}
			/*for($i=0;$i<count($VectorIdSede);$i++)
			{
				echo $VectorIdSede[$i]." - ".$VectorAula[$i]." - ".$VectorIdPostulante[$i]."<br>";
			}*/
		//INGRESA VALORES EN LA TABLA PUNTAJE idSede aulaPostulante
		include_once('../entidad/Resultado.php');
		$OBJResultado = new Resultado;
		$Respuesta = $OBJResultado -> AlmacenarSedeAulaPostulante($login,$VectorIdSede,$VectorAula,$VectorIdPostulante);
		if($Respuesta == 1)
		{
			include('ControlGenerarReporteDistribucion.php');
			$OBJControlGenerarReporteDistribucion = new ControlGenerarReporteDistribucion;
			$OBJControlGenerarReporteDistribucion -> VerReporteDistribucion($login);
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
			$OBJMSJ -> VerFormMensaje("ERROR: NO SE PUDO GUARDAR LA ASIGNACION DE AULAS, URGENTE CONTACTE AL ADMINISTRADOR",$cadena);
		}	
	}
}
?>
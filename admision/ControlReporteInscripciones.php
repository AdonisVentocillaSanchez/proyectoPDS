<?php
	class ControlReporteInscripciones
	{
		public function MostrarFormReporteInscripciones($login)
		{
			include_once('../entidad/Carrera.php');
			include_once('../entidad/Postulante.php');
			include_once('../entidad/Configuracion.php');
			include_once('FormReporteInscripciones.php');
			$OBJCarrera = new Carrera;
			$OBJPostulante = new Postulante;
			$OBJFormReporteInscripciones = new FormReporteInscripciones;
			$OBJConfiguracion = new Configuracion;
			$PRECIO = $OBJConfiguracion ->ObtenerPrecio();
			$ListaCarreras = $OBJCarrera -> ObtenerCarreras();
			for($i=0;$i<count($ListaCarreras);$i++)
			{
				$NumPostulantes = $OBJPostulante -> ObtenerCantidadPostulantes($ListaCarreras[$i]['idCarrera']);
				$NumBecados = $OBJPostulante -> ObtenerCantidadPostulantesBecados($ListaCarreras[$i]['idCarrera']);
				$IDCarrera[$i] = $ListaCarreras[$i]['idCarrera'];
				$NOMBRECarrera[$i] = $ListaCarreras[$i]['nombreCarrera'];
				$TURNOCArrera[$i] =  $ListaCarreras[$i]['nombreTurno'];
				$NUMPOSTULANTESCarrera[$i] = $NumPostulantes;
				$NUMPOSTULANTESBECADOSCarrera[$i] = $NumBecados;
			}
			$OBJFormReporteInscripciones -> MostrarReporteCantidadPostulantes($login,$IDCarrera,$NOMBRECarrera,$TURNOCArrera,$NUMPOSTULANTESCarrera,$NUMPOSTULANTESBECADOSCarrera,$PRECIO);			
			
			/*for($i=0;$i<count($ListaCarreras);$i++)
			{
				echo $IDCarrera[$i]." ".$NOMBRECarrera[$i]." ".$TURNOCArrera[$i]." ".$NUMPOSTULANTESCarrera[$i]."<br>";
			}*/			
		}
	}
?>
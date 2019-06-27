<?php  //ControlVerEstadisticas.php desde IndexVerEstadisticas.php
class ControlVerEstadisticas
{
	public function MostrarFormVerEstadisticas($login)
	{
		/*include_once('../entidad/Postulante.php');
		include_once('../entidad/Carrera.php');
		$OBJPostulante = new Postulante;
		$OBJCarrera = new Carrera;
		$ListaCarreras = $OBJCarrera -> ObtenerCarreras();
		for($i=0;$i<count($ListaCarreras);$i++)
		{		
			$idCarrera[$i] = $ListaCarreras[$i]['idCarrera'];
			$nombreCarrera[$i] = $ListaCarreras[$i]['nombreCarrera'];
			$idTurno[$i] = $ListaCarreras[$i]['idTurno'];
			$vacantesCarrera[$i]=$ListaCarreras[$i]['vacantesCarrera'];
			$nombreTurno[$i] = $ListaCarreras[$i]['nombreTurno'];
		}
		//obtener estadistica de postulantes
		for($i=0 ; $i<count($idCarrera); $i++)
		{
			$cantidadPostulantesCarrera[$i] = $OBJPostulante -> ObtenerCantidadPostulantes($idCarrera[$i]);
			//echo $estadisticas."<br>";
		}*/
		include_once('FormVerEstadisticas.php');
		$OBJFormVerEstadisticas = new FormVerEstadisticas;
		$OBJFormVerEstadisticas -> MostrarFormVerEstadisticas($login);
	}
}
?>
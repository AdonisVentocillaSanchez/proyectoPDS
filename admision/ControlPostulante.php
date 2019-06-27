<?php
	class ControlPostulante
	{
		public function MostrarFormRegPostulante($login)
		{
			include_once('../entidad/Distrito.php');
			include_once('../entidad/Carrera.php');
			include_once('FormRegPostulante.php');
			$OBJDistrito = new Distrito;
			$OBJCarrera = new Carrera;
			$OBJFormRegPostulante = new FormRegPostulante;
			$ListaDistritos = $OBJDistrito -> ObtenerDistritos(); 
			$ListaCarreras = $OBJCarrera -> ObtenerCarreras();
			$OBJFormRegPostulante -> MostrarFormRegPostulante($login,$ListaDistritos,$ListaCarreras);
			//echo $ListaDistritos;
			//echo $ListaDistritos;			
		}
	}
?>
<?
	class Carrera
	{
		private function EjecutarConexion()
		{
			include_once('Conecta.inc');			
			$OBJConexion1 = new Conecta;
			$OBJConexion1 -> ConectaBD();
		}
		public function ObtenerCarreras()
		{
			$this -> EjecutarConexion();
			$consulta = "SELECT C.idCarrera, C.nombreCarrera, C.idTurno ,C.vacantesCarrera,T.nombreTurno
						 FROM carrera C, turno T
						 WHERE T.idTurno = C.idTurno 
						 ORDER BY C.nombreCarrera,C.idCarrera";
			$resul = mysql_query($consulta);			
			$aciertos = mysql_num_rows($resul);
			mysql_close();
			if ($aciertos >= 1)
			{
				for($i=0;$i<$aciertos;$i++)	{ $filaEncontrada[$i]=mysql_fetch_array($resul);}			
				return($filaEncontrada);
			}
			else{return (0);}
		}
		public function ObtenerCarrera($idCarrera)
		{
			$this -> EjecutarConexion();
			$consulta = "SELECT C.idCarrera, C.nombreCarrera, C.idTurno ,C.vacantesCarrera,T.nombreTurno
						 FROM carrera C, turno T
						 WHERE T.idTurno = C.idTurno AND C.idCarrera='$idCarrera'";
			$resul = mysql_query($consulta);			
			$aciertos = mysql_num_rows($resul);
			mysql_close();
			if ($aciertos >= 1)
			{
				for($i=0;$i<$aciertos;$i++)	{ $filaEncontrada[$i]=mysql_fetch_array($resul);}			
				return($filaEncontrada);
			}
			else{return (0);}
		}		
	}	
?>
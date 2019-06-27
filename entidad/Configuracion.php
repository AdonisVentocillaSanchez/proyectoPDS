<?php
	class Configuracion
	{
		private $CODE;
		private function EjecutarConexion()
		{
			include_once('Conecta.inc');			
			$OBJConexion = new Conecta;
			$OBJConexion -> ConectaBD();
		}
		/*************************************************/
		public function ObtenerProcesoActual()
		{
				$this -> EjecutarConexion();
				$consulta = "SELECT proceso FROM configuracion";
				$resultado = mysql_query($consulta);
				mysql_close();
				$aciertos = mysql_num_rows($resultado);
				if ($aciertos >= 1)
				{
					$filaEncontrada=mysql_fetch_row($resultado);			
					return($filaEncontrada[0]);
				}
				else{return (0);}
		}
		/*************************************************/
		public function ObtenerPrecio()
		{
				$this -> EjecutarConexion();
				$consulta = "SELECT costoAdmision FROM configuracion";
				$resultado = mysql_query($consulta);
				mysql_close();
				$aciertos = mysql_num_rows($resultado);
				if ($aciertos >= 1)
				{
					$filaEncontrada=mysql_fetch_row($resultado);			
					return($filaEncontrada[0]);
				}
				else{return (0);}			 				
		}
		/**************************************************************/
		
	}
?>
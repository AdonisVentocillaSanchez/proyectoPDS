<?
	class Distrito
	{
		private function EjecutarConexion()
		{
			include_once('Conecta.inc');			
			$OBJConexion = new Conecta;
			$OBJConexion -> ConectaBD();
		}
		public function ObtenerDistritos()
		{
			$this -> EjecutarConexion();
			$consulta = "SELECT idDistrito, nombreDistrito 
						 FROM distrito order by nombreDistrito";
			$resultado = mysql_query($consulta);
			$aciertos = mysql_num_rows($resultado);
			mysql_close();
			if ($aciertos >= 1)
			{
				for($i=0;$i<$aciertos;$i++)	{ $filaEncontrada[$i]=mysql_fetch_array($resultado);}			
				return($filaEncontrada);
			}
			else{return (0);}
		}
	}	
?>
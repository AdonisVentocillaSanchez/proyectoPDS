<?php
	class Privilegio
	{
		private function EjecutarConexion()
		{
			include_once('Conecta.inc');			
			$OBJConexion = new Conecta;
			$OBJConexion -> ConectaBD();
		}
		/************************************/
		public function ObtenerPrivilegios()
		{
			$this -> EjecutarConexion();
			$consulta = "SELECT * FROM privilegios ORDER BY categoriaPrivilegio,orden";
			$resultado = mysql_query($consulta);
			mysql_close();
			$aciertos = mysql_num_rows($resultado);
			if ($aciertos >= 1)
			{
				for($i=0;$i<$aciertos;$i++)	{ $filaEncontrada[$i]=mysql_fetch_array($resultado);}			
				return($filaEncontrada);
			}
			else{return (0);}
		}
	}
?>
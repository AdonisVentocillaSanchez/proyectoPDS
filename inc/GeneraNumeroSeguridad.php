<?
	class GeneraNumeroSeguridad
	{
		public function GenerarNumeroSec()
		{
			include_once('./entidad/Conecta.inc');			
			$OBJConexion1 = new Conecta;
			$OBJConexion1 -> ConectaBD();
			$num = rand(100,9999); //echo $num;
			$num = md5($num);
			$consulta ="INSERT INTO seguridad VALUES('$num')";
			$respuesta = mysql_query($consulta);
			$aciertos = mysql_affected_rows();
			mysql_close();
			return ($num);						
		}
		
		public function GenerarNumeroSec2()
		{
			include_once('../entidad/Conecta.inc');			
			$OBJConexion1 = new Conecta;
			$OBJConexion1 -> ConectaBD();
			$num = rand(0,9999); //echo $num;
			$num = md5($num);
			$consulta ="INSERT INTO seguridad VALUES('$num')";
			$respuesta = mysql_query($consulta);
			$aciertos = mysql_affected_rows();
			mysql_close();
			return ($num);						
		}
		
		
		public function VerificarNummeroSec($numero)
		{
			include_once('../entidad/Conecta.inc');			
			$OBJConexion1 = new Conecta;
			$OBJConexion1 -> ConectaBD();
			$consulta ="SELECT * FROM seguridad WHERE numeroSec='$numero'";
			$resultado = mysql_query($consulta);
			
			$aciertos = mysql_num_rows($resultado);
			if ($aciertos == 1)
			{	
					$consulta ="delete from seguridad where numeroSec='$numero'";
					$resultado = mysql_query($consulta);
					mysql_close();
					return(1);
			}
			else    
			{
				mysql_close();
				return (0);
			}
		}
	}
?>
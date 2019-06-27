<?php
	class DetallePrivilegio
	{
		private function EjecutarConexion()
		{
			include_once('Conecta.inc');			
			$OBJConexion = new Conecta;
			$OBJConexion -> ConectaBD();
		}
		/********************************************/
		public function RegistrarPrivilegiosUser($newLogin,$newPrivilegio)
		{
			$this -> EjecutarConexion();
			$bandera = 1;
			for($i=0;$i<count($newPrivilegio);$i++)
			{
				$consulta ="INSERT INTO detalleprivilegio VALUES('$newPrivilegio[$i]','$newLogin')";	
				mysql_query($consulta);
				$aciertos = mysql_affected_rows();
				if ($aciertos != 1)
				{
					$bandera = 0;
					break;
				}				
			}
			mysql_close();
			return($bandera);
		}
		/***************************************************/
		public function ObtenerPrivilegiosUsuario($loginUser)
		{
			$this -> EjecutarConexion();
			$consulta = "SELECT PR.idPrivilegio, PR.labelPrivilegio,PR.categoriaPrivilegio
						FROM usuario U, privilegios PR, detallePrivilegio DT
						WHERE  U.login = DT.login AND
							   PR.idPrivilegio = DT.idPrivilegio AND
							   U.login = '$loginUser'";
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
		/***************************************************/
		public function LimpiarPrivilegiosUser($loginUser)
		{
			$this -> EjecutarConexion();
			$consulta = "DELETE FROM detalleprivilegio WHERE login='$loginUser'";		
			$respuesta = mysql_query($consulta);
			$aciertos = mysql_affected_rows();
			mysql_close();
			if ($respuesta)	{return(1);	}
			else{return (0);}
		}
	}
?>	
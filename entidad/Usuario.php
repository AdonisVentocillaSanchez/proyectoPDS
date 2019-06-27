<?php
	class Usuario
	{
		private function EjecutarConexion()
		{
			include_once('Conecta.inc');			
			$OBJConexion = new Conecta;
			$OBJConexion -> ConectaBD();
		}
		/********************************************/
		public function VerificarUsuario($login,$password)
		{
				$this -> EjecutarConexion();
				$password = md5($password);
				$consulta = "SELECT * FROM usuario WHERE login = '$login' AND password = '$password' AND estadoUsuario = 1";
				$resultado = mysql_query($consulta);
				mysql_close();
				$aciertos = mysql_num_rows($resultado);
				if ($aciertos == 1)	{return(1);}
				else{return (0);}		
		}
		/*********************************************/
		public function ObtenerPrivilegiosUsuario($login)
		{
				$this -> EjecutarConexion();
			     $consulta = " 	SELECT P.labelPrivilegio, P.rutaPrivilegio,P.categoriaPrivilegio, P.imagen 
							FROM   usuario U, privilegios P, detalleprivilegio DP
							WHERE  U.login = '$login' AND
						           U.login = DP.login AND
						           P.idPrivilegio = DP.idPrivilegio 
							       ORDER BY  P.categoriaPrivilegio,P.orden";
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
		/****************************************************/
		public function RegistrarNewUser($NewUser) // newUser  es vector
		{
			$this -> EjecutarConexion();
			$consulta ="INSERT INTO usuario VALUES('$NewUser[0]','$NewUser[1]','$NewUser[2]','$NewUser[3]','$NewUser[4]','$NewUser[5]','$NewUser[6]','$NewUser[7]')";
			//echo $consulta;
			$respuesta = mysql_query($consulta);
			$aciertos = mysql_affected_rows();
			mysql_close();
			if ($aciertos == 1)	{return(1);	}
			else{return (0);}
		}
		/**************************************************/
		public function ObtenerUsuarios()
		{
				$this -> EjecutarConexion();
				$consulta = " 	SELECT * FROM usuario ORDER BY apellidoPaterno,apellidoMaterno";
				// campos: login, nombre, apellidoPaterno,apellidoMaterno, password, preguntaSecreta, respuestaSecreta, estadoUsuario
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
		public function ObtenerDatosUsuario($login)
		{
			$this -> EjecutarConexion();
			$consulta = " 	SELECT * FROM usuario WHERE login='$login'";
				// campos: login, nombre, apellidoPaterno,apellidoMaterno, password, preguntaSecreta, respuestaSecreta, estadoUsuario
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
		 public function ActualizarUser($loginUser,$OldUser)
		 {
				 /*$OldUser[0] = $password;
				$OldUser[1] = trim(strtolower($nombre));
				$OldUser[2] = trim(strtolower($apellidoPaterno));
				$OldUser[3] = trim(strtolower($apellidoMaterno));
				$OldUser[4] = trim(strtolower($preguntaSecreta));
				$OldUser[5] = trim(strtolower($respuestaSecreta));
				$OldUser[6] = $estadoUsuario;	
				echo $loginUser."<br>";
				for($i=0;$i<count($OldUser);$i++)
				{
						echo $OldUser[$i]."<br>";
				}*/
				$this -> EjecutarConexion();
				
				$consulta = "UPDATE usuario SET password = '$OldUser[0]', nombre = '$OldUser[1]', apellidoPaterno = '$OldUser[2]',
							 apellidoMaterno = '$OldUser[3]', preguntaSecreta = '$OldUser[4]', respuestaSecreta = '$OldUser[5]',
							 estadoUsuario = '$OldUser[6]' WHERE login = '$loginUser'";		
//							 echo $consulta;
				$respuesta = mysql_query($consulta);
				$aciertos = mysql_affected_rows();
				mysql_close();
				if ($respuesta)	{return(1);	}
				else{return (0);}
		 }
		 /********************************************************/
		 public function ActualizarPassword($login,$password)
		 {
		 		$this -> EjecutarConexion();
				$consulta = "UPDATE usuario SET password = '$password' WHERE login = '$login'";
				$respuesta = mysql_query($consulta);
				$aciertos = mysql_affected_rows();
				mysql_close();
				if ($respuesta)	{return(1);	}
				else{return (0);}	
		 }
		 /*************************************************************/
		 public function DesactivarUsuario($UserDesactivar)
		 {
		 	$this -> EjecutarConexion();
			$bandera = 1;
			for($i=0;$i<count($UserDesactivar);$i++)
			{
				$consulta ="UPDATE usuario SET estadoUsuario = 0 WHERE login = '$UserDesactivar[$i]'";	
				$resultado = mysql_query($consulta);
				$aciertos = mysql_affected_rows();
				if (!$resultado)
				{
					$bandera = 0;
					break;
				}				
			}
			mysql_close();
			return($bandera);	
		 }
	}
?>
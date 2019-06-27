<?php
	class Postulante
	{
		private $CODE;
		private $PROCESO;
		private function EjecutarConexion()
		{
			include_once('Configuracion.php');			
			$OBJConfiguracion = new Configuracion;
			$this->PROCESO = $OBJConfiguracion -> ObtenerProcesoActual();
			include_once('Conecta.inc');			
			$OBJConexion = new Conecta;
			$OBJConexion -> ConectaBD();
		}
		/*************************************************/
		private function GeneraCODE($proceso)
		{
			$this -> EjecutarConexion();
			$consulta ="SELECT codigo FROM code";
			$respuesta = mysql_query($consulta);
			$fila = mysql_fetch_row($respuesta);
			$codigo = $fila[0]+1;
			$consulta ="UPDATE code set codigo = '$codigo'";
			mysql_query($consulta);
			//contruyendo
			$cod = $proceso;			
			if($codigo<10) $cod = $cod."000000".$codigo;
			if($codigo>9 && $codigo<100) $cod = $cod."00000".$codigo;
			if($codigo>99 && $codigo<1000) $cod = $cod."0000".$codigo;
			if($codigo>999 && $codigo<1000) $cod = $cod."000".$codigo;
			if($codigo>9999 && $codigo<10000) $cod = $cod."00".$codigo;
			if($codigo>99999 && $codigo<100000) $cod = $cod."0".$codigo;
			if($codigo>999999 && $codigo<1000000) $cod = $cod.$codigo;
			$consulta="INSERT INTO postulante(idPostulante) VALUES('$cod')";
			mysql_query($consulta);
			$consulta="INSERT INTO puntaje(idPostulante,estadoIngresoPostulante,puntajePostulante) VALUES('$cod','apto',0)";
			mysql_query($consulta);
			$this->CODE = $cod;	
			mysql_close();		
		}
		/*************************************************/
		public function AlmacenarPostulante($login,$Campos,$ProcesoActual) // recibe vector
		{ 
			$this -> GeneraCODE($ProcesoActual);
			$nombreFoto = $this->CODE.".jpg";
			$dir = "C:\AppServ\www\intratello\\fotoPostulante\\";
			$direccion = $dir.$nombreFoto;
			$FOTO = $Campos[18];
			copy($FOTO,$direccion);
			unlink($Campos[18]);///			
			$this -> EjecutarConexion();
			$consulta = "UPDATE postulante SET
						nombrePostulante='$Campos[1]',
						apellidoPaternoPostulante='$Campos[2]',
						apellidoMaternoPostulante='$Campos[3]',
						direccionPostulante='$Campos[4]',
						dniPostulante='$Campos[5]',
						movilPostulante='$Campos[6]',
						fijoPostulante='$Campos[7]',
						mailPostulante='$Campos[8]',
						fecnacPostulante='$Campos[9]',
						fecinsPostulante='$Campos[10]',
						estadoCivilPostulante='$Campos[11]',
						sexoPostulante='$Campos[12]',
						estadoPostulante='$Campos[13]',
						idDistrito='$Campos[14]',
						idCarrera='$Campos[15]',
						login='$Campos[0]',
						voucherPostulante='$Campos[16]',
						condicionPostulante ='$Campos[17]',
						idCarrera2='$Campos[19]'   						
						WHERE idPostulante ='$this->CODE'";
						//echo $consulta;   idcarrera2 esta al ultimo osea el 19
			$respuesta = mysql_query($consulta);
			$aciertos = mysql_affected_rows();
			mysql_close();
			if ($respuesta)	{return($this->CODE);	}
			else{return (0);}
		}
		/*************************************************/
		public function ObtenerCantidadPostulantes($carrera)
		{
				$this -> EjecutarConexion();
				$consulta = "SELECT COUNT(idPostulante) FROM postulante WHERE idCarrera = '$carrera' AND idPostulante LIKE '$this->PROCESO%'";
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
		public function ObtenerCantidadPostulantesBecados($carrera)
		{
				$this -> EjecutarConexion();
				$consulta = "SELECT COUNT(idPostulante) FROM postulante WHERE idCarrera = '$carrera' AND condicionPostulante='becado' AND idPostulante LIKE '$this->PROCESO%'";
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
		/*************************************************************/
		public function ObtenerCantidadPostulantesDistrito($idDistrito)
		{
				$this -> EjecutarConexion();
				$consulta = "SELECT COUNT(idPostulante)
							FROM postulante P,distrito D
							WHERE D.idDistrito = P.idDistrito AND
							P.idDistrito = '$idDistrito' AND
							P.idPostulante LIKE '$this->PROCESO%'";
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
		public function ObtenerDatosPostulante($codigoNuevoPostulante)
		{
				$this -> EjecutarConexion();
			     $consulta = " 	SELECT P.idPostulante,
				 				P.nombrePostulante, 
				 				P.apellidoPaternoPostulante,
								P.apellidoMaternoPostulante,
				 				P.direccionPostulante,
								P.dniPostulante,
								P.movilPostulante,
								P.fijoPostulante,
								P.mailPostulante, 
								P.fecnacPostulante,
								P.fecinsPostulante,
								P.estadoCivilPostulante, 
								P.sexoPostulante,
								P.estadoPostulante,
								P.idDistrito,
								D.nombreDistrito,
								P.idCarrera,
								C.nombreCarrera,
								P.login,
								P.voucherPostulante,
								T.nombreTurno,
								P.condicionPostulante,
								P.idCarrera2
								FROM postulante P, distrito D, carrera C , turno T
								WHERE P.idPostulante ='$codigoNuevoPostulante' AND
								       P.idDistrito = D.idDistrito AND
									   P.idCarrera = C.idCarrera AND
									   T.idTurno = C.idTurno AND 
									   P.idPostulante LIKE '$this->PROCESO%'";
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
		/*************************************************/
		public function ActualizarDatosPostulante($login,$Campos)
		{
			$this -> EjecutarConexion();
			if(strcmp($Campos[19],"")!=0)
			{
				$nombreFoto = $Campos[0].".jpg";
				$dir = "C:\AppServ\www\intratello\\fotoPostulante\\";
				$direccion = $dir.$nombreFoto;
				if(file_exists($direccion))
				{
					unlink($direccion);
				}				
				$FOTO = $Campos[19];
				copy($FOTO,$direccion);
				unlink($Campos[19]);
			}
			$consulta = "UPDATE postulante SET
						nombrePostulante='$Campos[1]',
						apellidoPaternoPostulante='$Campos[2]',
						apellidoMaternoPostulante='$Campos[3]',
						direccionPostulante='$Campos[4]',
						dniPostulante='$Campos[5]',
						movilPostulante='$Campos[6]',
						fijoPostulante='$Campos[7]',
						mailPostulante='$Campos[8]',
						fecnacPostulante='$Campos[9]',
						fecinsPostulante='$Campos[10]',
						estadoCivilPostulante='$Campos[11]',
						sexoPostulante='$Campos[12]',
						estadoPostulante='$Campos[13]',
						idDistrito='$Campos[14]',
						idCarrera='$Campos[15]',
						login='$Campos[17]',
						voucherPostulante='$Campos[16]',
						condicionPostulante ='$Campos[18]',
						idCarrera2='$Campos[20]'
						WHERE idPostulante ='$Campos[0]'";
						//echo $consulta;
			$respuesta = mysql_query($consulta);
			$aciertos = mysql_affected_rows();
			mysql_close();
			if ($respuesta)	{return(1);	}
			else{return (0);}
		}
		/*************************************************/
		public function ObtenerPostulantesApellido($apellidoPaternoPostulante)
		{
			$this -> EjecutarConexion();
			$consulta ="SELECT idPostulante,nombrePostulante,apellidoPaternoPostulante,
				        apellidomaternoPostulante, dniPostulante,estadoPostulante
						FROM postulante
						WHERE apellidoPaternoPostulante LIKE '".$apellidoPaternoPostulante."%' AND
							idPostulante LIKE '$this->PROCESO%'
						ORDER BY idPostulante";
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
		/*************************************************/
		public function ObtenerListaPostulantes($carrera)
		{
				$this -> EjecutarConexion();
			    $consulta = "SELECT P.idPostulante,P.nombrePostulante,P.apellidoPaternoPostulante,
							   		P.apellidomaternoPostulante,P.dniPostulante,P.estadoPostulante,
							   		C.nombreCarrera,C.idCarrera,T.nombreTurno
						     FROM   postulante P, puntaje PU, carrera C, turno T
						     WHERE  P.idPostulante = PU.idPostulante AND
								   	P.idCarrera = C.idCarrera AND
							   		T.idTurno = C.idturno AND
								    P.idCarrera = '$carrera' 
									AND P.idPostulante LIKE '$this->PROCESO%'
							 ORDER BY  P.apellidoPaternoPostulante,P.apellidomaternoPostulante,P.nombrePostulante ASC";
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
		/**************************************************/
		public function EjecutarConsultaSelect($cadena_consulta)
		{
			//echo $cadena_consulta."<br>";
			$this -> EjecutarConexion();
			$resultado = mysql_query($cadena_consulta);
			mysql_close();
			$aciertos = mysql_num_rows($resultado);
			if ($aciertos >= 1)
			{
				for($i=0;$i<$aciertos;$i++)	
				{ 
					$filaEncontrada[$i]=mysql_fetch_array($resultado);
					//$filaEncontrada[$i][0]."<br>";
				}			
				return($filaEncontrada);
			}
			else{return (0);}
			//echo 0 ."<br>";
		}
		/*******************************************************/
		public function ObtenerCodigosPostulantesAptos($proceso)
		{
				$this -> EjecutarConexion();
			    /*$consulta = "SELECT P.idPostulante
						     FROM   postulante P, puntaje PU
							 WHERE P.idPostulante = PU.idPostulante AND
									P.estadoPostulante = 'apto' AND						 
							 		PU.estadoIngresoPostulante='apto' AND
									P.idPostulante LIKE '$proceso%'
							 ORDER BY  idPostulante ASC";*/
				$consulta = "SELECT P.idPostulante
						     FROM   postulante P, puntaje PU
							 WHERE P.idPostulante = PU.idPostulante AND
									P.estadoPostulante = 'apto' AND
											PU.estadoIngresoPostulante='apto' AND						 
							 		P.idPostulante LIKE '$proceso%'
							 ORDER BY  idPostulante ASC";
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
		/******************************************************/
		public function ObtenerCodigosPostulantesAptosRandom($proceso)
		{
				$this -> EjecutarConexion();
			    $consulta = "SELECT P.idPostulante
						     FROM   postulante P, puntaje PU
							 WHERE P.idPostulante = PU.idPostulante AND
									P.estadoPostulante = 'apto' AND						 
							 		PU.estadoIngresoPostulante='apto' AND
									P.idPostulante LIKE '$proceso%'
							 ORDER BY  RAND()";
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
		/***************************************************************/
		public function ObtenerCodigosPostulantesParaCalificacion($carrera)
		{
				$this -> EjecutarConexion();
			    /*$consulta = "SELECT PU.idPostulante
						     FROM   postulante P, puntaje PU
							 WHERE P.idPostulante = PU.idPostulante AND
									P.estadoPostulante = 'apto' AND						 
							 		PU.estadoIngresoPostulante='apto' AND
									P.idCarrera = '$carrera' AND 
									PU.idPostulante LIKE '$this->PROCESO%'
							 ORDER BY  PU.puntajePostulante DESC";*/
				$consulta = "SELECT PU.idPostulante
						     FROM   postulante P, puntaje PU
							 WHERE P.idPostulante = PU.idPostulante AND
									P.estadoPostulante = 'apto' AND						 							 
									P.idCarrera = '$carrera' AND 
									PU.idPostulante LIKE '$this->PROCESO%'
							 ORDER BY  PU.puntajePostulante DESC";
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
		/**********************************************************/
		public function ObtenerCodigosPostulantesParaCalificacionFinal()
		{
			$this -> EjecutarConexion();
			$consulta = "SELECT P.idPostulante
						     FROM   postulante P, puntaje PU
							 WHERE P.idPostulante = PU.idPostulante AND
									P.estadoPostulante = 'apto' AND						 
							 		PU.estadoIngresoPostulante='calificado' AND
									P.idPostulante LIKE '$proceso%'
							 ORDER BY  idPostulante ASC";
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
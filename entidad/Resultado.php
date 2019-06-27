<?php
		class Resultado
		{
			private $PROCESO;
			private function EjecutarConexion()
			{
				include_once('Configuracion.php');			
				$OBJConfiguracion = new Configuracion;
				$this->PROCESO = $OBJConfiguracion -> ObtenerProcesoActual();
				include_once('Conecta.inc');			
				$OBJConexion1 = new Conecta;
				$OBJConexion1 -> ConectaBD();
			}
			/************************************/
			public function ObtenerListaOrdenMeritoEstado($carrera)
			{
				//echo $carrera;
				$this -> EjecutarConexion();
				$consulta ="SELECT P.idPostulante,P.nombrePostulante,P.apellidoPaternoPostulante,P.apellidomaternoPostulante,
									P.dniPostulante,C.nombreCarrera,C.vacantesCarrera,T.nombreTurno,PU.puntajePostulante,PU.observacionPostulante
							FROM 	postulante P, puntaje PU, carrera C, turno T
							WHERE 	P.idPostulante = PU.idPostulante AND
								P.idCarrera = C.idCarrera AND
								C.idTurno = T.idTurno AND
								P.idCarrera ='$carrera' AND
								P.idPostulante LIKE '$this->PROCESO%'
							ORDER BY PU.puntajePostulante DESC, PU.observacionPostulante ASC";
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
			/***********************************/
			public function GuardarResultadoCarrera($notas,$codigos,$numPostulantes)
			{
					for($i=0;$i<count($notas);$i++)
					{  
						if(strcmp($notas[$i],"")==0)
							$estadoIngresoPostulante[$i]="apto";
						//echo"0<br>";
						else
							$estadoIngresoPostulante[$i]="calificado";
					}
					
					$this -> EjecutarConexion();
					$bandera=1;
					for($i=0;$i<$numPostulantes;$i++) 
					{
						//echo $notas[$i]." ".$codigos[$i]."<br>";
						$consulta = "UPDATE puntaje SET estadoIngresoPostulante='$estadoIngresoPostulante[$i]',puntajePostulante='$notas[$i]'
									 WHERE idpostulante='$codigos[$i]' ";
						$respuesta = mysql_query($consulta);
						$aciertos = mysql_affected_rows();
						if ($aciertos != 1)
						{
							$bandera =0;
							break;	
						}			
					}
					mysql_close();
					return($bandera);
			}			
			/*************************************/
			public function ObtenerPostulantesAptosSinResultado($carrera)
			{
				$this -> EjecutarConexion();
			    $consulta = "SELECT P.idPostulante,P.nombrePostulante,P.apellidoPaternoPostulante,
							   		P.apellidomaternoPostulante,P.dniPostulante,
							   		C.nombreCarrera,C.idCarrera,T.nombreTurno
						     FROM   postulante P, puntaje PU, carrera C, turno T
						     WHERE  P.idPostulante = PU.idPostulante AND
								   	P.idCarrera = C.idCarrera AND
							   		T.idTurno = C.idturno AND
								   	P.estadoPostulante = 'apto' AND
									PU.estadoIngresoPostulante='apto' AND								   	
								   	P.idCarrera = '$carrera' AND
									P.idPostulante LIKE '$this->PROCESO%'
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
			/*******************************************************/
			public function GuardarPuntajePostulante($login,$idPostulante,$puntos)
			{
				$this -> EjecutarConexion();
				$consulta = "UPDATE puntaje SET estadoIngresoPostulante='calificado',puntajePostulante='$puntos'
									 WHERE idpostulante='$idPostulante' ";
				$respuesta = mysql_query($consulta);
				$aciertos = mysql_affected_rows();
				mysql_close();
				if ($aciertos != 1)
				{
					return(0);
				}
				else
				{
					return(1); 
				}
			}
			/*********************************************************/
			public function ActualizarDatosPostulante($idpostulante,$estadoPostulante)
			{
				$this -> EjecutarConexion();
				$consulta = "UPDATE puntaje SET estadoIngresoPostulante = '$estadoPostulante' WHERE idpostulante='$idpostulante'";
				$respuesta = mysql_query($consulta);
				$aciertos = mysql_affected_rows();
				mysql_close();
				if ($aciertos != 1)
				{
					return(0);
				}
				else
				{
					return(1); 
				}
			}
			/*************************************************************/
			public function  AlmacenarSedeAulaPostulante($login,$VectorIdSede,$VectorAula,$VectorIdPostulante)
			{
					$this -> EjecutarConexion();
					$consulta = "UPDATE puntaje SET idSede ='', aulaPostulante='' WHERE idPostulante LIKE '$this->PROCESO%'";
					mysql_query($consulta);
						//echo $consulta."<br>";
					
					$bandera=1;
					for($i=0;$i<count($VectorIdPostulante);$i++) 
					{
						//echo $notas[$i]." ".$codigos[$i]."<br>";
						$consulta = "UPDATE puntaje SET idSede = '$VectorIdSede[$i]', aulaPostulante = $VectorAula[$i] WHERE idpostulante='$VectorIdPostulante[$i]'";
						//echo $consulta."<br>";
						$respuesta = mysql_query($consulta);
						$aciertos = mysql_affected_rows();
						if ($aciertos != 1)
						{
							$bandera =0;
							break;	
						}			
					}
					mysql_close();
					return($bandera);
			}
			/*************************************************************/
			public function ObtenerSiAulasDistribuidas()
			{
				$this -> EjecutarConexion();
			    $consulta = "SELECT COUNT(idSede) FROM puntaje WHERE idsede <> 0 AND
							 idPostulante LIKE '$this->PROCESO%'";
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
			/*********************************************************/
			public function ObtenerListadoDistibucionAulas()
			{
				$this -> EjecutarConexion();
			    $consulta = "SELECT P.idPostulante,	P.nombrePostulante,	 P.apellidoPaternoPostulante,   P.apellidomaternoPostulante,
							C.nombreCarrera,T.nombreTurno,    PU.aulapostulante,PU.idSede,S.nombreSede,S.direccionSede,S.cantidadAulasSede,S.cantidadPostulantesAulaSede
							FROM postulante P, carrera C, turno T,  puntaje PU,sede S
							WHERE
								P.idPostulante = PU.idPostulante AND
								P.idCarrera = C.idCarrera  AND
								C.idTurno = T.idTurno AND
								PU.idSede = S.idSede AND
								PU.estadoIngresoPostulante ='apto' AND
								P.idPostulante LIKE '$this->PROCESO%'
								ORDER BY PU.idSede,PU.aulapostulante,P.apellidoPaternoPostulante,P.apellidomaternoPostulante,P.nombrePostulante";
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
			public function LimpiarObservacion()
			{
				$this -> EjecutarConexion();
				$consulta ="UPDATE puntaje SET observacionPostulante='' WHERE idPostulante LIKE '$this->PROCESO%'";
				mysql_query($consulta);
			}
			
			public function ExistePuntaje()
			{
				//echo $carrera;
				$this -> EjecutarConexion();
				//$consulta ="UPDATE puntaje SET puntajePostulante=0 WHERE idPostulante LIKE '$this->PROCESO%'";
				//mysql_query($consulta);
				
				$consulta ="SELECT puntajePostulante FROM puntaje WHERE puntajePostulante <> 0 AND
								idPostulante LIKE '$this->PROCESO%'";
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
			public function ActualizarObservacionPostulante($login,$idPostulante,$condicion)
			{
				//echo $idPostulante.$condicion."<br>";
				$this -> EjecutarConexion();
				$consulta = "UPDATE puntaje SET observacionPostulante = '$condicion' WHERE idPostulante='$idPostulante'";
				$respuesta = mysql_query($consulta);
				$aciertos = mysql_affected_rows();
				mysql_close();
				if ($aciertos != 1)
				{
					return(0);
				}
				else
				{
					return(1); 
				}
			}
			/***************************************************/
			public function ObservarInaptos()
			{
				$this -> EjecutarConexion();
				$consulta = "UPDATE puntaje SET observacionPostulante = 'retirado' WHERE estadoIngresoPostulante ='inapto' AND 
							idPostulante LIKE '$this->PROCESO%'";
				$respuesta = mysql_query($consulta);
				$aciertos = mysql_affected_rows();
				mysql_close();
				if ($aciertos != 1)
				{
					return(0);
				}
				else
				{
					return(1); 
				}
			}
			/***************************************************/
			public function ObtenerPuntaje($idPostulante)
			{
				$this -> EjecutarConexion();
				$consulta ="SELECT puntajePostulante FROM puntaje WHERE idPostulante = '$idPostulante'";
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
			public function ActualizarPuntajePostulante($login,$idPostulante,$puntaje)
			{
				$this -> EjecutarConexion();
				$consulta = "UPDATE puntaje SET puntajePostulante ='$puntaje' WHERE idPostulante ='$idPostulante'";
				$respuesta = mysql_query($consulta);
				$aciertos = mysql_affected_rows();
				mysql_close();
				if ($aciertos != 1)
				{
					return(0);
				}
				else
				{
					return(1); 
				}
			}
		}
?>
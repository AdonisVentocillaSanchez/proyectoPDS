<?php
		class Sede
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
			public function ObtenerSedes()
			{
				$this -> EjecutarConexion();
				$consulta ="SELECT * FROM sede";
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
			/************************************/
			public function ObtenerSedesActivas()
			{
				//echo $carrera;
				$this -> EjecutarConexion();
				$consulta ="SELECT * FROM sede WHERE estadoSede = 1";
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
			/*******************************************************/
			public function ObtenerDatosSede($idSede)
			{
				$this -> EjecutarConexion();
				$consulta ="SELECT * FROM sede WHERE idSede ='$idSede'";
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
			public function ActualizarSede($datos)
			{
				$this -> EjecutarConexion();
				$consulta = "UPDATE sede SET nombreSede='$datos[1]', direccionSede='$datos[2]',cantidadAulasSede='$datos[3]',
							 cantidadPostulantesAulaSede = '$datos[4]',estadoSede='$datos[5]' 
							 WHERE idSede='$datos[0]'";
				$respuesta = mysql_query($consulta);
				//$aciertos = mysql_affected_rows();
				mysql_close();
				if ($respuesta)
				{
					return(1);
				}
				else
				{
					return(0); 
				}
			}
			/**********************************************************/
			public function InsertarSede($nombreSede,$direccionSede,$cantidadAulasSede,$cantidadPostulantesAulaSede)
			{
				$this -> EjecutarConexion();
				$estadoSede =1;
				$consulta ="INSERT INTO sede (nombreSede, direccionSede, cantidadAulasSede, cantidadPostulantesAulaSede,estadoSede)
				 VALUES('$nombreSede','$direccionSede','$cantidadAulasSede','$cantidadPostulantesAulaSede','$estadoSede')";
				//echo $consulta;
				$respuesta = mysql_query($consulta);
				$aciertos = mysql_affected_rows();
				mysql_close();
				if ($aciertos == 1)	{return(1);	}
				else{return (0);}
			}
		}
?>
<?php
function armaIndice($cadena,$Cant)
{
	$vectorcadena = explode(" ",$cadena);
	$cad ="";
	for($i=0;$i<count($vectorcadena);$i++)
	{
		if(strlen($vectorcadena[$i])>2)
		{
			$cad = $cad. ucwords(substr($vectorcadena[$i],0,$Cant));
		}
	}
	return($cad);
}
if(isset($verCuadro) and strcmp($login,"")!=0)
	{
		include_once('../entidad/Postulante.php');
		include_once('../entidad/Carrera.php');
		include_once('../entidad/Distrito.php');
		include_once('../entidad/Configuracion.php');
		include_once('FormCuadroEstadistico.php');
					
		$OBJConfiguracion = new Configuracion;
		$OBJPostulante = new Postulante;
		$OBJCarrera = new Carrera;
		$OBJDistrito = new Distrito;
		$OBJFormCuadroEstadistico = new FormCuadroEstadistico;
		
		$proceso = $OBJConfiguracion -> ObtenerProcesoActual();
		$ListaCarreras = $OBJCarrera -> ObtenerCarreras();
		for($i=0;$i<count($ListaCarreras);$i++)
		{		
			$idCarrera[$i] = $ListaCarreras[$i]['idCarrera'];
			$nombreCarrera[$i] = $ListaCarreras[$i]['nombreCarrera'];
			$idTurno[$i] = $ListaCarreras[$i]['idTurno'];
			$vacantesCarrera[$i]=$ListaCarreras[$i]['vacantesCarrera'];
			$nombreTurno[$i] = $ListaCarreras[$i]['nombreTurno'];
		}
												   
		switch ($indice)
		{
			case 1: $acu=0;
					for($i=0 ; $i<count($idCarrera); $i++)
					{
							$cantidadPostulantesCarrera[$i] = $OBJPostulante -> ObtenerCantidadPostulantes($idCarrera[$i]);
							$acu+=$cantidadPostulantesCarrera[$i];							
					}
					for($i=0 ; $i<count($idCarrera); $i++)
					{
							$ind = armaIndice($nombreCarrera[$i],2);
							$ind = $ind . armaIndice($nombreTurno[$i],1);
							$datos[$ind]=$cantidadPostulantesCarrera[$i];
							$Porcent = $cantidadPostulantesCarrera[$i]*100/$acu;
							/**armando leyenda    eje  san juan de miraflores = SJM (50%) */
							$vectorLeyenda[$i][0] = $nombreCarrera[$i];
							//echo number_format(12845.98123,2,".","");// devolvería 1284.98
							$vectorLeyenda[$i][1] = $ind." (".number_format($Porcent,2,".","")."%)";
					}
					
					$OBJFormCuadroEstadistico -> MostrarCuadro($login,$datos,"Cantidad de Postulantes por Carrera",1,700,350,true,$vectorLeyenda);
					break;
					
			case 2: $cadena_consulta = "SELECT COUNT(idPostulante) FROM postulante P,carrera C 
										WHERE P.idCarrera = C.idCarrera AND 
										C.idTurno =1 AND idPostulante LIKE '$proceso%'"; 
					$valorM = $OBJPostulante -> EjecutarConsultaSelect($cadena_consulta);
					$cadena_consulta = "SELECT COUNT(idPostulante) FROM postulante P,carrera C WHERE P.idCarrera = C.idCarrera AND C.idTurno ='2' AND idPostulante LIKE '$proceso%'"; 
					$valorN = $OBJPostulante -> EjecutarConsultaSelect($cadena_consulta);
					$datos['Mañana']=$valorM[0][0];
					$datos['Noche']=$valorN[0][0];
					$total=$valorM[0][0]+$valorN[0][0];
					/*****************/
					$vectorLeyenda[0][0]="Mañana";
					$vectorLeyenda[0][1]= number_format($valorM[0][0]*100/$total,2,".","")."%";
					$vectorLeyenda[1][0]="Noche";
					$vectorLeyenda[1][1]= number_format($valorN[0][0]*100/$total,2,".","")."%";
					/*****************/
					$OBJFormCuadroEstadistico -> MostrarCuadro($login,$datos,"Cantidad de Postulantes (general) por Turno",1,400,250,true,$vectorLeyenda);
					break;
					
			case 3: $ListDistritos = $OBJDistrito -> ObtenerDistritos();
					for($i=0;$i<count($ListDistritos);$i++)
						{ //idDistrito, nombreDistrito 		
							$idDistrito[$i] = $ListDistritos[$i]['idDistrito'];
							$nombreDistrito[$i] = $ListDistritos[$i]['nombreDistrito'];							
						}
					$acu=0;	
					for($i=0 ; $i<count($idDistrito); $i++)
					{
							$cantidadPostulantesDistrito[$i] = $OBJPostulante -> ObtenerCantidadPostulantesDistrito($idDistrito[$i]);							$acu+=$cantidadPostulantesDistrito[$i];
					}
					$cont=0;
					for($i=0 ; $i<count($idDistrito); $i++)
					{
							//$ind = armaIndice($nombreDistrito[$i],3);
							$ind = $idDistrito[$i];
							if($cantidadPostulantesDistrito[$i]>0)
							{
									$datos[$ind]=$cantidadPostulantesDistrito[$i];
									$porcent = $cantidadPostulantesDistrito[$i]*100/$acu;
									$vectorLeyenda[$cont][0] = $nombreDistrito[$i]." (".number_format($porcent,2,".","")."%)";
									$vectorLeyenda[$cont][1] = $ind;
									$cont++;
							}																						
					}
					/*foreach ($datos as $item => $value){
     				echo $item.": ".$value."<br>"; }*/								
					$OBJFormCuadroEstadistico -> MostrarCuadro($login,$datos,"Cantidad de Postulantes Distrito",1,800,350,true,$vectorLeyenda);
					break;
					
			case 4:
					$consulta = "SELECT COUNT(idPostulante) FROM postulante P,carrera C WHERE P.idCarrera = C.idCarrera AND C.idTurno = 1 AND P.sexoPostulante ='masculino' AND idPostulante LIKE '$proceso%'";	
					$valorHM = $OBJPostulante -> EjecutarConsultaSelect($consulta);
					$consulta = "SELECT COUNT(idPostulante) FROM postulante P,carrera C WHERE P.idCarrera = C.idCarrera AND C.idTurno = 1 AND P.sexoPostulante ='femenino' AND idPostulante LIKE '$proceso%'";
					$valorMM = $OBJPostulante -> EjecutarConsultaSelect($consulta);						
					$consulta = "SELECT COUNT(idPostulante) FROM postulante P,carrera C WHERE P.idCarrera = C.idCarrera AND C.idTurno = 2 AND P.sexoPostulante ='femenino' AND idPostulante LIKE '$proceso%'";
					$valorMN = $OBJPostulante -> EjecutarConsultaSelect($consulta);
					$consulta = "SELECT COUNT(idPostulante) FROM postulante P,carrera C WHERE P.idCarrera = C.idCarrera AND C.idTurno = 2 AND P.sexoPostulante ='masculino' AND idPostulante LIKE '$proceso%'";							
					$valorHN = $OBJPostulante -> EjecutarConsultaSelect($consulta);
					$datos['Varones Mañana']=$valorHM[0][0];
					$datos['Mujeres Mañana']=$valorMM[0][0];
					$datos['Varones Noche']=$valorHN[0][0];
					$datos['Mujeres Noche']=$valorMN[0][0];
					$total=$valorHM[0][0]+$valorMM[0][0]+$valorHN[0][0]+$valorMN[0][0];
					/********************/
					$vectorLeyenda[0][0]="Homb. Mañana";
					$vectorLeyenda[0][1]= number_format($valorHM[0][0]*100/$total,2,".","")."%";
					$vectorLeyenda[1][0]="Muje. Mañana";
					$vectorLeyenda[1][1]= number_format($valorMM[0][0]*100/$total,2,".","")."%";
					$vectorLeyenda[2][0]="Homb. Noche";
					$vectorLeyenda[2][1]= number_format($valorHN[0][0]*100/$total,2,".","")."%";
					$vectorLeyenda[3][0]="Muje. Noche";
					$vectorLeyenda[3][1]= number_format($valorHN[0][0]*100/$total,2,".","")."%";
					/********************/
					$OBJFormCuadroEstadistico -> MostrarCuadro($login,$datos,"Cantidad de Postulantes Por Sexo y Turno",1,400,300,true,$vectorLeyenda);
					break;
							
			case 5:
					$cadena_consulta = "SELECT COUNT(idPostulante) FROM postulante WHERE sexoPostulante ='masculino' AND idPostulante LIKE '$proceso%'"; 
					$valorH = $OBJPostulante -> EjecutarConsultaSelect($cadena_consulta);
					//echo $valor[0][0];
					$cadena_consulta = "SELECT COUNT(idPostulante) FROM postulante WHERE sexoPostulante ='femenino' AND idPostulante LIKE '$proceso%'"; 
					$valorM = $OBJPostulante -> EjecutarConsultaSelect($cadena_consulta);
					$datos['Varones']=$valorH[0][0];
					$datos['Mujeres']=$valorM[0][0];
					$total=$valorH[0][0]+$valorM[0][0];
					/*****************/
					$vectorLeyenda[0][0]="Varones";
					$vectorLeyenda[0][1]= number_format($valorH[0][0]*100/$total,2,".","")."%";
					$vectorLeyenda[1][0]="Mujeres";
					$vectorLeyenda[1][1]= number_format($valorM[0][0]*100/$total,2,".","")."%";
					/*****************/
					$OBJFormCuadroEstadistico -> MostrarCuadro($login,$datos,"Cantidad de Postulantes (general) por Sexo",1,400,300,true,$vectorLeyenda);
					break;
		}
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>

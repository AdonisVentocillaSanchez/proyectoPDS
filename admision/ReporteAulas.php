<?php  //ReporteAulas.php desde ControlGenerarReporteDistribucion.php desde 
		//ControlSedesSeleccionadas.php desde GetSedesSeleccionadas.php
	include_once('../inc/Pagina.inc');
	class ReporteAulas extends Pagina
  	{
  		public function MostrarListaDistribucionAulas($login,$ListaDistrucionAulas)
		{ 
				$this->NoClickDerecho();
		?>
			<link href="../css/stylo_1.css" rel="stylesheet" type="text/css">
			<link rel="STYLESHEET" type="text/css" href="../css/print2.css" media="print"> 
			<style type="text/css">
<!--
.Estilo1 {font-size: 36px}
-->
                    </style>
			<script> 			
			/*******************/
			function imprime(){
			//desaparece el boton
			document.getElementById("salir").style.display='none'
			document.getElementById("btnImprimir").style.display='none'
			document.getElementById("retrocede").style.display='none'
			//se imprime la pagina
			window.print()
			//reaparece el boton
			document.getElementById("salir").style.display='inline'
			document.getElementById("btnImprimir").style.display='inline'
			document.getElementById("retrocede").style.display='inline'		
			}
			</script> 
			<div id="contenidos"> 
		    <?php
			//$cadena="";
			//$this->EncabezadoForm("Reporte de Distribución",$cadena);
			$maxfilasPagina=40; //este valor se puede cambiar sin embargo solo hay un limite max de cantidad de alunos
								// por aula, pues por hoja se imprimirá solo un aula
			$numPostulantes=count($ListaDistrucionAulas);
			$contPostulantes=0;
			$contSedes=0;
			$contCapacidadSede=0;
			$contSedesAula=0;
			$contCapacidadAula=0;
			//$cantPagSedeActual=1;
			$cantPagSede =1;
			do{
				$B=0;	
			 	$aulaActual =$ListaDistrucionAulas[$contSedesAula]['aulapostulante']; 
			 	if($aulaAnterior == $aulaActual)
			 	{
			 		//echo "no ".$aulaAnterior." == ".$aulaActual;
					$B=1;
			 	}
				if($B==0)
				{
				?>
					<!-- CABECERA DE PAGINA -->
					
					
  <table width="100%" border="0" align="center" class="inputbts">
    <tr> 
      <td width="9%" rowspan="2"><div align="center"><img src="../img/logo2.png" width="42" height="43"></div></td>
      <td height="28"> <div align="center" class="subheadingbold"><font size="1">INSTITUTO 
          SUPERIOR TECNOLOGICO PUBLICO JULIO CESAR TELLO</font></div></td>
    </tr>
    <tr> 
      <td><div align="center"><font size="1">AV. BOLIVAR N&deg; 100 - VILLA EL 
          SALVADOR - TELEFONOS 2873676 - 2879783 - 2878585</font></div></td>
    </tr>
  </table>
					
					
  <table width="100%" border="1" align="center" class="inputbts">
    <tr> 
						<td width="20%" height="28" class="bodysmallbold">SEDE:</td>
						<td width="54%"> <div align="center" class="bodymenuhomebold">
						  <div align="left"><? echo strtoupper($ListaDistrucionAulas[$contSedes]['nombreSede']);
																	   $SedeActual= $ListaDistrucionAulas[$contSedes]['idSede'];
																	   $CapacidadPostulantesSede = $ListaDistrucionAulas[$contSedes]['cantidadAulasSede'] * $ListaDistrucionAulas[$contSedes]['cantidadPostulantesAulaSede'];
																	   $cantPagSedeActual = $ListaDistrucionAulas[$contSedes]['cantidadAulasSede'];
																		/* cantidadAulasSede */																
																	?></div>
						</div></td>
						<td width="8%" rowspan="2" class="bodysmallbold">AULA N&deg;:</td>
						<td width="18%" rowspan="2"> <div align="center" class="ttseccao1 Estilo1"><?	echo $ListaDistrucionAulas[$contSedesAula]['aulapostulante'];
													$CapacidadPostulantesAula = $ListaDistrucionAulas[$contSedesAula]['cantidadPostulantesAulaSede'];?>
						</div></td>
					  </tr>
					  <tr> 
						<td height="28" class="bodysmallbold">DIRECCI&Oacute;N DE LA SEDE: </td>
						<td class="bodysmallbold"><? echo strtoupper($ListaDistrucionAulas[$contSedes]['direccionSede']); ?></td>
					  </tr>
					</table>					
					

					<!-- FIN CABECERA -->
					<!-- CREANDO LISTA -->
					
					
  <table width="100%" border="0" align="center">
    <tr> 
      <td width="5%" class="inputbts"><div align="center" class="subheadingbold"><strong>N°</strong></div></td>
      <td width="15%" class="inputbts"><div align="center" class="subheadingbold"> 
          <p><strong>Código</strong></p>
          <p><strong> Postulante</strong></p>
        </div></td>
      <td width="41%" class="inputbts"><div align="center" class="subheadingbold"><strong>Apellidos 
          y Nombres</strong></div></td>
      <td width="39%" class="inputbts"><div align="center" class="subheadingbold"><strong>Carrera 
          y Turno</strong></div></td>
    </tr>
    <?php 
				}  //FIN if de cabecera 
				for($fila=1;$fila<=$maxfilasPagina;$fila++)
				{
					//P.idPostulante,	P.nombrePostulante,	 P.apellidoPaternoPostulante,   P.apellidomaternoPostulante,
					//C.nombreCarrera,  T.nombreTurno,    PU.aulapostulante, PU.idSede,  S.nombreSede,   S.direccionSede, 
					//S.cantidadAulasSede,  S.cantidadPostulantesAulaSede
					if($contPostulantes==$numPostulantes) 
						break;
					if($contCapacidadSede == $CapacidadPostulantesSede)
					{
						$contSedes=$contPostulantes;
						$contCapacidadSede=0;
						break;							
					}
					if($contCapacidadAula == $CapacidadPostulantesAula)
					{
						$contSedesAula = $contPostulantes;
						$contCapacidadAula =0;
						break;
					}
					?>
    <tr> 
      <td> <div align="center" class="bodymenubold"> 
          <?	echo $fila; ?>
        </div></td>
      <td><div align="center" class="bodysmallbold"><? echo $ListaDistrucionAulas[$contPostulantes]['idPostulante'] ?></div></td>
      <td class="bodysmallbold"><? echo strtoupper($ListaDistrucionAulas[$contPostulantes]['apellidoPaternoPostulante'])." ".strtoupper($ListaDistrucionAulas[$contPostulantes]['apellidomaternoPostulante']).", ".strtoupper($ListaDistrucionAulas[$contPostulantes]['nombrePostulante']); ?></td>
      <td class="bodysmallbold"><? echo strtoupper($ListaDistrucionAulas[$contPostulantes]['nombreCarrera'])." - ".strtoupper($ListaDistrucionAulas[$contPostulantes]['nombreTurno'])?></td>
    </tr>
    <?php
					$contPostulantes++;
					$contCapacidadSede++;
					$contCapacidadAula++;	
				}//fin for
				$aulaAnterior =$aulaActual;
				if($B==0)
				{
				?>
  </table>
					<br>
					<br>
					<?php
					echo "Usuario: ".$login;
					if($contPostulantes<$numPostulantes)
					{						
					?>
					<br>
					<div class="saltopagina"></div>
					<br>
					<?php
					}
				}			
			}while($contPostulantes<$numPostulantes);
			?>
			</div>
			<br>
			<table width="75%" border="0" align="center">
			  <tr> 
				<td id="noprint" width="23%"> <form name="form2" method="post" action="../inc/AbandonarSistema.php">
					<div align="center"> 
					  <input name="salir" type="submit" class="bodymenubold" id="salir" value="Salir del sistema">
					  <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
					</div>
				  </form></td>
				<td width="18%"><form name="form3" method="post" action="">
					<div align="center"> 
					  <input name="btnImprimir" id="btnImprimir" type="button" class="bodymenubold" value="Imprimir Reporte" onClick="imprime()">
					</div>
				  </form></td>
				<td width="18%"> <form action="../inc/RedireccionarMenu.php" method="post" name="form" id="form"><div align="center"> 
					<div align="center">
					  <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Volver al  MENU">
					  <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
					</div>
				  </form></td>
			  </tr>
			</table>				
            <p>
              <?php				
			
		}				
  	}
?>
<?php  //ReporteAulas.php desde ControlGenerarReporteDistribucion.php desde 
		//ControlSedesSeleccionadas.php desde GetSedesSeleccionadas.php
	include_once('../inc/Pagina.inc');
	class ReporteAulas extends Pagina
  	{
  		public function MostrarListaDistribucionAulas($login,$ListaDistrucionAulas)
		{				
?>
			<script> 
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
		<link href="../css/stylo_1.css" rel="stylesheet" type="text/css">
		<?php
			$maxfilasPagina=20;
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
			 	echo "no ".$aulaAnterior." == ".$aulaActual;
				$B=1;
			 }
			//else
				if($B==0)
				{	
			?>
				
				<!-- CABECERA DE PAGINA -->
				<br>
					<table  border="1" align="center" >
					  <tr> 
						<td  >SEDE:</td>
						<td >><? echo $ListaDistrucionAulas[$contSedes]['nombreSede'];
								$SedeActual= $ListaDistrucionAulas[$contSedes]['idSede'];
								$CapacidadPostulantesSede = $ListaDistrucionAulas[$contSedes]['cantidadAulasSede'] * $ListaDistrucionAulas[$contSedes]['cantidadPostulantesAulaSede'];
								$cantPagSedeActual = $ListaDistrucionAulas[$contSedes]['cantidadAulasSede'];
																/* cantidadAulasSede */																
								?></td>
						<td>&nbsp;</td>
						<td>AULA:</td>						
						<td> <?	echo $ListaDistrucionAulas[$contSedesAula]['aulapostulante'];
								     $alulaActual =$ListaDistrucionAulas[$contSedesAula]['aulapostulante'];
							         $CapacidadPostulantesAula = $ListaDistrucionAulas[$contSedesAula]['cantidadPostulantesAulaSede'];
						?></td>
					  </tr>
					</table>					
					<br>
					<br>	  
					
					<table width="75%" border="1" align="center">
				<? }  //if de cabecera ?>			
					<?php 
					echo "$contPostulantes antes del for: ".$contPostulantes."<br>";
					for($fila=1;$fila<=$maxfilasPagina;$fila++)
					{					
						if($contPostulantes==$numPostulantes) break;
						if($contCapacidadSede == $CapacidadPostulantesSede)
						{
							$contSedes=$contPostulantes;
							$contCapacidadSede=0;
							break;							
						}
						//echo "contCapacidadSede: ".$contCapacidadSede. " == CapacidadPostulantesSede:" .$CapacidadPostulantesSede."<br>";
						if($contCapacidadAula == $CapacidadPostulantesAula)
						{
							$contSedesAula = $contPostulantes;
							
							$contCapacidadAula =0;
							break;
						}
						//echo "contCapacidadAula: ".$contCapacidadAula. " == CapacidadPostulantesAula:" .$CapacidadPostulantesAula."<br>";
					?>
						<tr>
							<td><?	echo $fila; ?></td>
							<td><? echo $ListaDistrucionAulas[$contPostulantes]['idPostulante'] ?></td>
							<td><? echo strtoupper($ListaDistrucionAulas[$contPostulantes]['apellidoPaternoPostulante'])." ".strtoupper($ListaDistrucionAulas[$contPostulantes]['apellidomaternoPostulante']).", ".strtoupper($ListaDistrucionAulas[$contPostulantes]['nombrePostulante']); ?></td>
							<td><? echo strtoupper($ListaDistrucionAulas[$contPostulantes]['nombreCarrera'])." - ".strtoupper($ListaDistrucionAulas[$contPostulantes]['nombreTurno'])?></td>							
						</tr>								
					<?php
						$contPostulantes++;
						$contCapacidadSede++;
						$contCapacidadAula++;
						echo "contPostulantes: ".$contPostulantes." - contCapacidadSede: ".$contCapacidadSede." - contCapacidadAula: ".$contCapacidadAula."<br>";	
					}//fin for
					
					$aulaAnterior =$aulaActual;
					if($B==0)
					{
					?>
					
					</table>
					<!-- ESTO ES UNA HOJA -->			
					<div class="saltopagina"></div>
					<?php
					}								
			}while($contPostulantes<$numPostulantes);
		}				
  	}
?>
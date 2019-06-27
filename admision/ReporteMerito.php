<?php
	include_once('../inc/Pagina.inc');
	class ReporteMerito extends Pagina
  	{
  		public function MostrarReporteMerito($login,$Resultado)
		{
				
				$this->NoClickDerecho();
				$max = count($Resultado);
				/*
				P.idPostulante,P.nombrePostulante,P.apellidoPaternoPostulante,P.apellidomaternoPostulante,
				P.dniPostulante,C.nombreCarrera,C.vacantesCarrera,T.nombreTurno,PU.puntajePostulante
				*/
				$numeroVacantes = $Resultado[0]['vacantesCarrera'];
			?>
			<script> 
		function imprime(){
		//desaparece el boton
		document.getElementById("Regresar").style.display='none'
		document.getElementById("btnImprimir").style.display='none'
		document.getElementById("retrocede").style.display='none'
		//se imprime la pagina
		window.print()
		//reaparece el boton
		document.getElementById("Regresar").style.display='inline'
		document.getElementById("btnImprimir").style.display='inline'
		document.getElementById("retrocede").style.display='inline'		
		}
		</script> 
		<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
		<link rel="STYLESHEET" type="text/css" href="../css/printer.css" media="print"> 
		
		<div id="contenidos"> 
		
		<?php
			$maxfilasPaginas=20;
			$cont=1;
			$i=0;
			do{
					$this->MostrarCabeceraReporte("REPORTE DE RESULTADOS - PROCESO DE ADMISION 2013-I <br>".strtoupper($Resultado[0]['nombreCarrera'])." - TURNO: ".strtoupper($Resultado[0]['nombreTurno']));
					//echo "<br><br>";
		?>
		
					<table width="100%" border="0" align="center">
					  <tr> 
						<td class="inputbts" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("Ord. <br>Merito")?></strong></font></td>
						<td class="inputbts" align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif"><? print("Cód. <br>Postulante")?></font></strong></td>
						<td class="inputbts" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("Apellidos y Nombres")?></strong></font></td>
						<td class="inputbts" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("D.N.I.")?></strong></font></td>
						<td class="inputbts" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("Puntaje")?></strong></font></td>
						<td class="inputbts" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("Estado")?></strong></font></td>
					  </tr>
		<?php					
					for($j=0;$j<$maxfilasPaginas;$j++)
					{
						   if ($cont % 2 == 0)
								$fondo=" class='menuhmlft2lines'";
							else 
								$fondo = " class='centros_01'";
						echo "<tr><td".$fondo."><center><font size='2' face='Arial, Helvetica, sans-serif'><strong>".$cont.".</strong></center>
					      </td><td".$fondo."><font size='2' face='Arial, Helvetica, sans-serif'>".$Resultado[$i]['idPostulante']."</td>
						  <td".$fondo."><font size='2' face='Arial, Helvetica, sans-serif'>".strtoupper($Resultado[$i]['apellidoPaternoPostulante']).
						 " ".strtoupper($Resultado[$i]['apellidomaternoPostulante']).", ".strtoupper($Resultado[$i]['nombrePostulante']).
						 "</td><td".$fondo."><center><font size='2' face='Arial, Helvetica, sans-serif'>".$Resultado[$i]['dniPostulante']."</center>
						 </td><td".$fondo."><center><font size='2' face='Arial, Helvetica, sans-serif'>".$Resultado[$i]['puntajePostulante'].
						 "</center></td><td".$fondo."><center><font size='2' face='Arial, Helvetica, sans-serif'>".$Resultado[$i]['observacionPostulante']."</center></td></tr>";						 
						$cont++;
						$i++;
						if ($cont == $max+1) break;
					}
					echo "</table>";
					echo "<br>";
					echo "Usuario: ".$login;
					if($cont <= $max)
					{
					?>
					<br>
					<div class="saltopagina"></div>
					<br>
					<?php
					}
			}while($cont <= $max);
			
?>
	
		
		</div>
			<table width="70%" border="0" align="center">
			  <tr> 
				<td id="noprint" width="23%"> <form name="form2" method="post" action="GetRegresarCarrerasReporteResultado.php">
					<div align="center"> 
					  
          <input name="Regresar" type="submit" class="bodymenubold" id="Regresar" value="Regresar a seleccionar otra carrera">
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
</p>
            <p>&nbsp;</p>
            <p>&nbsp;            </p>
					
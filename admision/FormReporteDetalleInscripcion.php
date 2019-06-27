<?php
	include_once('../inc/Pagina.inc');
	class FormReporteDetalleInscripcion extends Pagina
	{
		public function MostrarFormReporteDetalleInscripcion($login,$ListaPostulante)
		{
			$max = count($Resultado);
				/*
				P.idPostulante,P.nombrePostulante,P.apellidoPaternoPostulante,P.apellidomaternoPostulante,
				P.dniPostulante,C.nombreCarrera,C.vacantesCarrera,T.nombreTurno,PU.puntajePostulante
				*/			
			?>
			<script> 
				function imprime(){
				//desaparece el boton
				document.getElementById("salir").style.display='none'
				document.getElementById("btnImprimir").style.display='none'
				document.getElementById("retrocede").style.display='none'
				//document.getElementById("buscar").style.display='none'
				//se imprime la pagina
				window.print()
				//reaparece el boton
				document.getElementById("salir").style.display='inline'
				document.getElementById("btnImprimir").style.display='inline'
				document.getElementById("retrocede").style.display='inline'		
				}
			</script> 
			<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
		<?php
			$maxfilasPaginas=20;
			$cont=1;
			$i=0;
			do{
					$this->NoClickDerecho();
					$this->MostrarCabeceraReporte("REPORTE DETALLADO DE POSTULANTES A <br>".strtoupper($ListaPostulante[0]['nombreCarrera'])." - TURNO: ".strtoupper($ListaPostulante[0]['nombreTurno']),"");
					echo "<br><br>";
					/*
					P.idPostulante,P.nombrePostulante,P.apellidoPaternoPostulante,
							   		P.apellidomaternoPostulante,P.dniPostulante,P.estadoPostulante,
							   		C.nombreCarrera,C.idCarrera,T.nombreTurno
					*/
		?>
		
		
					<table width="75%" border="1"  class="nav3" align="center">
						<tr>
							<td colspan="6" class="titsec1"><center><? echo strtoupper($ListaPostulante[0]['nombreCarrera'])." - TURNO: ".strtoupper($ListaPostulante[0]['nombreTurno']);?></center></td>
				    </tr>
					  <tr> 
						<td class="titsec1" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("N°")?></strong></font></td>
						<td class="titsec1" align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif"><? print("Cód. <br>Postulante")?></font></strong></td>
						<td class="titsec1" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("Apellidos y Nombres del Postulante")?></strong></font></td>
						<td class="titsec1" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("D.N.I.")?></strong></font></td>
						<td class="titsec1" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("Estado")?></strong></font></td>
						<td class="titsec1" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("Ficha<br>Postulante")?></strong></font></td>
					  </tr>
		<?php					
						$cont =1;
						for($i=0;$i<count($ListaPostulante);$i++)
						{
							/*if ($cont % 2 == 0)
								$fondo="<tr bgcolor='#F3F3F3'>";
							else*/ 
								//$fondo = "<tr>";
							echo "<tr>";
							echo "<td class='menuhmlft2linesbold' align='center'><font size='2' face='Arial, Helvetica, sans-serif'>".$cont.". </td>
								  <td class='menuhmlft2linesbold' align='center'><font size='2' face='Arial, Helvetica, sans-serif'>".$ListaPostulante[$i]['idPostulante']."</td>
								  <td class='menuhmlft2linesbold'><font size='2' face='Arial, Helvetica, sans-serif'>".strtoupper($ListaPostulante[$i]['apellidoPaternoPostulante']).
								  " ".strtoupper($ListaPostulante[$i]['apellidomaternoPostulante']).", ".ucwords($ListaPostulante[$i]['nombrePostulante'])."</td>
								  <td class='menuhmlft2linesbold' align='center'><font size='2' face='Arial, Helvetica, sans-serif'>".$ListaPostulante[$i]['dniPostulante']."</td>
								  <td class='menuhmlft2linesbold' align='center'><font size='2' face='Arial, Helvetica, sans-serif'>".$ListaPostulante[$i]['estadoPostulante']."</td>";
							echo "<td class='menuhmlft2linesbold' align='center'><font size='2' face='Arial, Helvetica, sans-serif'>";
							$ln="\n";
							//$cadena_boton="<form name='form' method='post' action='GetReporteInscripcionesDetalle.php'>".$ln."<div align='center'><input name='login' type='hidden' id='login' value='".$login."'>".$ln."<input name='idCarrera' type='hidden' id='idCarrera' value='".$ListaPostulante[$i]['idCarrera']."'>".$ln."<input name='detallePostulante' type='submit' id='detallePostulante' value='<- volver'>".$ln."</div>".$ln."</form>";
											
			?>
							<form name="form" method="post" action="GetDetallePostulante.php">
						  <div align="center"> 
							<input name="login" type="hidden" id="login" value="<? echo $login; ?>">
    						
    <input name="detallePostulante" type="submit" class="bodymenubold" id="detallePostulante" value="Detalle">
   							 <input name="idPostulante" type="hidden" id="idPostulante" value="<? echo $ListaPostulante[$i]['idPostulante']; ?>">
						  </div>
							</form>
			<?php
							echo "</td>";
							echo "</tr>";																			
							$cont++;
						}
						//imprime acumulado						
						echo "</table>";
			}while($cont <= $max);
			echo "Usuario: ".$login;
?>
<table width="75%" border="0" align="center" class="nav3">
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
<p align="center">&nbsp;</p>
  
<p>
  <?php		
		}
	}
?>
</p>

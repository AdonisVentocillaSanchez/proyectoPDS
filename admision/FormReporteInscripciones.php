<?php
	include_once('../inc/Pagina.inc');
 	class FormReporteInscripciones extends Pagina
 	{
 		private function T($no)
		{
			for($x=0; $x<$no; $x++)
			$tab.="&nbsp;";
			return $tab;			
		}		
		public function MostrarReporteCantidadPostulantes($login,$IDCarrera,$NOMBRECarrera,$TURNOCArrera,$NUMPOSTULANTESCarrera,$NUMPOSTULANTESBECADOSCarrera,$PRECIO)
		{
			$this->NoClickDerecho();
			$this -> EncabezadoForm("Conteo de Postulantes - Usuario: '$login'","");
			//calculando procentaje
			$acumuladoPostulantes = 0;
			for($i=0;$i<count($IDCarrera);$i++)
			{
				$acumuladoPostulantes+=$NUMPOSTULANTESCarrera[$i];
			}
			for($i=0;$i<count($IDCarrera);$i++)
			{
				$PorcentajeCarrera[$i]=($NUMPOSTULANTESCarrera[$i]*100)/$acumuladoPostulantes;
			}
			
			//echo "<table width='75%' border='1' align='center'>";
		?>
<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
		<table width='75%' border='1' class="nav3" align='center'>
			<tr> 
			<td class="titsec1" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("N°")?></strong></font></td>
			<td class="titsec1" align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif"><? print("CARRERA")?></font></strong></td>
			<td class="titsec1" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("COD. <br>CARRERA")?></strong></font></td>
			<td class="titsec1" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("&nbsp;TURNO&nbsp;")?></strong></font></td>
			<td class="titsec1" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("CANT. <br>POSTULANTES")?></strong></font></td>
			<td class="titsec1" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("PORC.<br>%")?></strong></font></td>
			<td class="titsec1" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("MONTO <br>S/.")?></strong></font></td>
			<td class="titsec1" align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><? print("&nbsp;&nbsp;DETALLE&nbsp;&nbsp;")?></strong></font></td>
			</tr>
		<?php
			$cont =1;
			$acumuladoSoles=0;
			
			for($i=0;$i<count($IDCarrera);$i++)
			{
				if ($cont % 2 == 0)
					$fondo=" class='menuhmlft2linesbold'";
				else 
					$fondo = " class='nav'";
				echo "<tr>";
				echo "<td ".$fondo." align='center'><font size='2' face='Arial, Helvetica, sans-serif'>".$cont.". </td>
				      <td ".$fondo."><font size='2' face='Arial, Helvetica, sans-serif'>".strtoupper($NOMBRECarrera[$i])."</td>
					  <td ".$fondo." align='center'><font size='2' face='Arial, Helvetica, sans-serif'>".$IDCarrera[$i]."</td>
					  <td ".$fondo."><font size='2' face='Arial, Helvetica, sans-serif'>".strtoupper($TURNOCArrera[$i])."</td>
					  <td ".$fondo." align='center'><font size='2' face='Arial, Helvetica, sans-serif'>".$NUMPOSTULANTESCarrera[$i]." (".$NUMPOSTULANTESBECADOSCarrera[$i]." Beca)</td>";
				$cadena = "&nbsp;%";
				printf("<td ".$fondo." align='center'><font size='2' face='Arial, Helvetica, sans-serif'> %.2f %s </td>",$PorcentajeCarrera[$i],$cadena);
				$soles =$NUMPOSTULANTESCarrera[$i]*$PRECIO - $NUMPOSTULANTESBECADOSCarrera[$i] * $PRECIO;
				printf("<td ".$fondo."><font size='2' face='Arial, Helvetica, sans-serif'> S/. %.2f </td>",$soles);
				echo "<td align='center'><font size='2' face='Arial, Helvetica, sans-serif'>";
?>
				<form name="form" method="post" action="GetReporteInscripcionesDetalle.php">
			  <div align="center"> 
				<input name="login" type="hidden" id="login" value="<? echo $login; ?>">
				<input name="detallePostulante" type="submit" class="bodymenubold" id="detallePostulante" value="Detalle">
				<input name="idCarrera" type="hidden" id="idCarrera2" value="<? echo $IDCarrera[$i]; ?>">
			  </div>
				</form>
<?php
				echo "</td>";
				echo "</tr>";												
				$acumuladoSoles+=$soles;
				$cont++;
			}
			//imprime acumulado
			printf("<tr><td></td><td></td><td></td><td></td><td></td><td class='menuhmlft2linesbold'><center><strong>TOTAL</strong></center></td><td class='menuhmlft2linesbold'><strong>S/. %.2f</strong></td><td></td></tr>",$acumuladoSoles);
		//	echo "</table>";
?>
</table>
<br>
			<table width="75%" border="0" align="center" class="nav3">
			  <tr> 
				<td width="50%"><form name="form2" method="post" action="../inc/AbandonarSistema.php">
					<div align="center"> 
					  <input name="salir" type="submit" class="bodymenubold" id="salir del sistema3" value="Salir del sistema">
					  <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
					</div>
				  </form></td>
				<td width="50%"><form name="form3" method="post" action="../inc/RedireccionarMenu.php">
					<div align="center"> 
					  <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Volver al MENU">
					  <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
					</div>
				  </form></td>
			  </tr>
		</table>
            <p>
              <?php
			echo "<br> Usuario: ".$login."<br>";
			$this -> PieForm();			
		}
	}
?>
            </p>
            <p>&nbsp; </p>
		
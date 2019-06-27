<?
	include_once('../inc/Pagina.inc');
	class FormSelecCarreraReporteResultado extends Pagina
	{
		public function MostrarFormSelecCarreraReporteResultado($login,$Carreras)
		{
			$this->NoClickDerecho();
			$this -> EncabezadoForm("Seleción de carrera para Reporte de Resultados - Usuario: '$login'","");
			$numCarreras=count($Carreras);
			//echo $numCarreras;
?>
<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />

			<form name="form1" method="post" action="GetCarrerasReporteResultado.php">			  
			  <table width="75%" border="0" align="center" class="nav3">
				<tr> 
							  <td colspan="2"> <div align="center" class="titsec1"><strong>Selecionar 
          la Carrera para Generar Reporte 
          <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
          </strong></div></td>
				</tr>
			  </table>				  
				
 <br>
  <table width="75%" border="1" align="center" class="nav3">
				  <?php
				  //echo"ssss";
				  		$cont =0;
					  	for($i=0;$i<$numCarreras;$i++)
						{
							if ($cont % 2 == 0)
								$fondo=" class='bgpub'";
							else 
								$fondo = " class='nav3'";
							if ($Carreras[$i]['idTurno'] == 1) $t = "MAÑANA";
							else $t = "NOCHE";
							echo "<tr><td".$fondo."><center>";
							echo "<input type='radio' name='carrera' value='".$Carreras[$i]['idCarrera']."'>";
							echo "</center></td><td".$fondo.">";
							echo $Carreras[$i]['nombreCarrera']." - TURNO: ".$t;
							echo "</td></tr>";
							$cont++;
						}
				  
				  ?>			
				 
				<tr>
				  <td width="13%"><div align="center"></div></td>
				  <td width="87%"><div align="right">
          <input name="reportar" type="submit" class="bodymenubold" id="reportar" value="Generar Reporte">
        </div></td>
				</tr>
			  </table>
			</form>
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
			echo "Usuario: ".$login."<br>";
			$this -> PieForm();
		}
	}
?>
</p>
<p>&nbsp;</p>
			
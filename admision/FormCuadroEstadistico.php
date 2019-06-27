<?php  //desde GetCuadroPosCarrera
		include_once('maxChart.class.php');
		class FormCuadroEstadistico
		{		
			public function MostrarCuadro($login,$datos,$titulo,$tipo,$tamanioX,$tamanioY,$colores,$vectorLeyenda)
			{
?>
				<html>
				<head>
				   <title>VENTANA DE ESTADISTICAS</title>				   
				   <link href="style/style.css" rel="stylesheet" type="text/css" />
				   <link href="../css/stylo_1.css" rel="stylesheet" type="text/css">
				   <style type="text/css">
<!--
.Estilo1 {font-size: 14px}
.Estilo2 {font-size: 12px}
-->
                   </style>
				   <script>
				   function right(e) {
						var msg = " EMPLEE LOS BOTONES DEL SISTEMA - GRACIAS ";
						if (navigator.appName == 'Netscape' && e.which == 3) {
						alert(msg); // Delete this line to disable but not alert user
						return false;
						}
						else
						if (navigator.appName == 'Microsoft Internet Explorer' && event.button==2) {
						alert(msg); // Delete this line to disable but not alert user
						return false;
						}
						return true;
						}
						document.onmousedown = right;	
				   </script>
			    </head>
				<body>
				<table width="71%" border="0" align="center">
				  <tbody>
				    <tr>
				      <td width="8%" rowspan="2"><div align="center"><img src="../img/logo2.png" width="50" height="47" class="nav3"> </div></td>
				      <td width="86%" class="titsec1"><div align="center" class="Estilo1">INSTITUTO SUPERIOR TECNOLOGICO PUBLICO JULIO CESAR TELLO</div></td>
				      <td width="6%" rowspan="2"><div align="center"><img src="../img/julio_tello.jpg" width="35" height="53"></div></td>
			        </tr>
			        <tr>
			          <td height="22" class="nav3 Estilo2"><div align="center">Sistema de Admisi&oacute;n - versi&oacute;n 1.0 - Departamento de Computaci&oacute;n e Inform&aacute;tica </div>
		            </tbody>
			    </table>
				<br>
				<br>
<p align="center" class="titsec1"><strong>Reporte Estadístico</strong></p>
<p> 
<br>
<table width="95%" border="1" align="center" class="nav3">

	  <tr> 
		<td class="titsec1"><center>CUADRO OBTENIDO</center></td>
		<td class="titsec1"><center>LEYENDA</center></td>
	</tr>
	<tr>	
	  	<td>
  <?php
				$mc = new maxChart($datos);
                $mc->displayChart($titulo,$tipo,$tamanioX,$tamanioY,$colores);
				//$mc3->displayChart('Demo chart - 4',1,200,150,true);				
?>
		</td>
		<td>
						
				<table  border="1" align="center" class="edunav">
				<tr><td>
<?php
					
					for($i=0;$i<count($vectorLeyenda);$i++)
					{
						echo "<tr>";
						echo "<td>";
						echo $i+1 ;
						echo "</td>";
						echo "<td>";
						echo $vectorLeyenda[$i][0];
						echo "</td>";
						echo "<td>";
						echo $vectorLeyenda[$i][1];
						echo "</td>";
						echo "</tr>";
					}
?>	
				</td></tr>
		  </table>
		</td>
	</tr>		
</table>
				</p>
				
				
				<br>
				  </p>
				<table width="95%" border="0" align="center" class="nav3">
				  <tr> 
					<td width="50%"><form name="form2" method="post" action="../inc/AbandonarSistema.php">
						<div align="center"> 
						  <input name="salir" type="submit" class="bodymenubold" id="salir del sistema3" value="Salir del sistema">
						  <input name="login" type="hidden" id="login22" value="<?php echo $login; ?>">
						</div>
					  </form></td>
					<td width="50%"><form name="form3" method="post" action="GetDevolverMenuEstadisticas.php">
						<div align="center"> 
						  <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Regresar">
						  <input name="login" type="hidden" id="login23" value="<?php echo $login; ?>">
						</div>
					  </form></td>
				  </tr>
				</table>
				<p>&nbsp;</p>
				</body>
				</html>

<?php
				echo "<br>Usuario: ".$login;
				//$this -> PieForm();
			}
		}
?>
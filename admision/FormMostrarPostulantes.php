<?php
include_once('../inc/Pagina.inc');
class FormMostrarPostulantes extends Pagina
{
	public function MostrarGridPostulantes($login,$Datos)
	{
		$this->NoClickDerecho();
		$this -> EncabezadoForm("Resultado de búsqueda - Usuario: '$login'","");
		//echo count($Datos);
	?>
	<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
	<?php
		echo "<table width='75%' border='0'  align='center'>";
		echo "<tr><td class='titsec1'><center>POSTULANTES ENCONTRADOS</center></td></tr>";
		
		$cont =1;
		for($i=0;$i<count($Datos);$i++)
		{
			echo "<tr> <td colspan='3'></tr><form name='form' method='post' action='GetSearchCodePostulante.php'>";
			echo "<table width='75%' border='1' class ='nav3' align='center'>";
			//echo "<td colspan='2'>&nbsp;</td>";	
			echo "<tr><td width='86%' class='menuhmlft2linesbold'>". $cont ." : ". $Datos[$i][0]." -> ".ucwords($Datos[$i][1])." ".ucwords($Datos[$i][2])." ".ucwords($Datos[$i][3]);
			echo ", DNI: ".$Datos[$i][4].", estado: ".$Datos[$i][5];
			echo "<input name='idPostulante' type='hidden' id='idPostulante' value=".$Datos[$i][0].">";
			echo "<input name='login' type='hidden' id='login' value=".$login.">";
			echo "</td><td width='14%'><div align='center'><input type='submit' class='bodymenubold' name='buscar' value='...'></div></td>";
			echo "</tr>";
			echo "</table></form></td>";
			echo "</tr>";
			$cont++;
		}
		echo "</table>"
		
?>
	
	 
		<table width="75%" border="0" align="center" class="nav3">
		  <tr> 
			<td width="54%"> <form name="form2" method="post" action="../inc/AbandonarSistema.php">
				<div align="center"> 
				  <input name="salir" type="submit" class="bodymenubold" id="salir del sistema3" value="Salir del sistema">
				  <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
				</div>
			  </form></td>
			<td width="46%"> <form name="form3" method="post" action="../inc/RedireccionarMenu.php">
				<div align="center"> 
				  <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Volver al MENU">
				  <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
				</div>
			  </form></td>
		  </tr>
		</table>
		<p>&nbsp;</p>
        <p>
          <?php
		echo "Usuario: ".$login;
		$this -> PieForm();
	}
}
?>
        </p>
        <p>&nbsp;</p>
        <p>&nbsp; </p>
		
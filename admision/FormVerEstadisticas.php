<?php
	include_once('../inc/Pagina.inc');
	class FormVerEstadisticas extends Pagina
	{
		public function MostrarFormVerEstadisticas($login)
		{
			$this->NoClickDerecho();
			$this -> EncabezadoForm("Ver Menu Estadísticas:  bienvenido '$login'","");
?>
			<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
			
			<br>
			
			<table width="75%" border="0" align="center" class="nav3">
			  <tr> 
				<td colspan="7"><div align="center" class="titsec1">VER CUADROS ESTAD&Iacute;STICOS</div></td>
			  </tr>
			  <tr> 
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr> 
				<td width="6%"><img src="../img/Maintenance.png" width="40" height="40"></td>
				<td width="6%"><form name="form1" method="post" action="GetCuadroPostCarrera.php">
					<div align="center">
					  <input name="verCuadro" type="submit" class="bodymenubold" id="verCuadro" value="...">
					  <input name="login" type="hidden" id="login" value="<? echo $login; ?>">
          <input name="indice" type="hidden" id="indice" value="1">
        </div>
				  </form></td>
				<td width="30%" class="menuhmlft2linesbold">Cantidad de Postulantes por carrera</td>
				<td width="5%">&nbsp;</td>
				<td width="6%"><img src="../img/WLM.png" width="40" height="40"></td>
				<td width="6%"><form name="form6" method="post" action="GetCuadroPostCarrera.php">
					<div align="center">
					  <input name="verCuadro" type="submit" class="bodymenubold" id="verCuadro4" value="...">
					  <input name="login" type="hidden" id="login4" value="<? echo $login; ?>">
          <input name="indice" type="hidden" id="indice4" value="4">
        </div>
				  </form></td>
				
    <td width="41%" class="menuhmlft2linesbold">Cantidad de Hombres y Mujeres por Turno</td>
			  </tr>
			  <tr> 
				<td><img src="../img/Buddy-Green.png" width="40" height="40"></td>
				<td><form name="form4" method="post" action="GetCuadroPostCarrera.php">
					<div align="center">
					  <input name="verCuadro" type="submit" class="bodymenubold" id="verCuadro" value="...">
					  <input name="login" type="hidden" id="login" value="<? echo $login; ?>">
          <input name="indice" type="hidden" id="indice" value="2">
        </div>
				  </form></td>
				
    <td class="menuhmlft2linesbold">Cantidad de Postulante por turno</td>
				<td>&nbsp;</td>
				<td><img src="../img/Mac-Logo.png" width="40" height="40"></td>
				<td><form name="form7" method="post" action="GetCuadroPostCarrera.php">
					<div align="center">
					  <input name="verCuadro" type="submit" class="bodymenubold" id="verCuadro5" value="...">
					  <input name="login" type="hidden" id="login5" value="<? echo $login; ?>">
          <input name="indice" type="hidden" id="indice5" value="5">
        </div>
				  </form></td>
				<td class="menuhmlft2linesbold">Cantidad de Hombres y Mujeres (general)</td>
			  </tr>
			  <tr> 
				<td><img src="../img/Home.png" width="40" height="40"></td>
				<td><form name="form5" method="post" action="GetCuadroPostCarrera.php">
					<div align="center">
					  <input name="verCuadro" type="submit" class="bodymenubold" id="verCuadro3" value="...">
					  <input name="login" type="hidden" id="login3" value="<? echo $login; ?>">
          <input name="indice" type="hidden" id="indice3" value="3">
        </div>
				  </form></td>
				<td class="menuhmlft2linesbold">Cantidad de Postulantes por Distrito</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td class="menuhmlft2linesbold">&nbsp;</td>
			  </tr>
			</table>		
						
			<p>&nbsp; </p>
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
					  
          <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Volver al  Menu">
					  <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
					</div>
				  </form></td>
			  </tr>
			</table>
<?php	
			echo "Usuario: ".$login;
			$this -> PieForm();						
		}
	}
?>

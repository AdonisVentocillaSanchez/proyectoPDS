<?
	include_once('../inc/Pagina.inc');
	class FormCarreraInsertResultado extends Pagina
	{
		public function MostrarFormCarreraInsertResultado($login,$ListaCarreras)
		{
			$this->NoClickDerecho();
			$this -> EncabezadoForm("Seleción de carrera para ingreso de resultados - Usuario: '$login'","");
?>
<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />

			<form name="form1" method="post" action="GetCarreraInsertResultado.php">
			  
  <table width="49%" border="0" align="center" class="nav3">
    <tr> 
				  <td colspan="2"> <div align="center" class="titsec1"><strong>Selecionar la Carrera para 
					  ingresar los Resultados </strong></div></td>
	</tr>
				<tr> 
				  <td width="40%">&nbsp;</td>
				  <td width="60%">&nbsp;</td>
				</tr>
				<tr> 
				  <td>Carrera a ingresar resultados:</td>
				  <td><select name="carrera" class="nav2" id="carrera">
				  <?php
								for($i=0;$i<count($ListaCarreras);$i++)
								{
									if ($ListaCarreras[$i][2] == 1) $t = "MAÑANA";
									else $t = "NOCHE";
									echo "<option value='".$ListaCarreras[$i][0]."'>".$ListaCarreras[$i][1]." - TURNO ".$t."</option>";
								}
					?>	  
					</select>
        <input name="login" type="hidden" id="login" value="<?php echo $login; ?>"></td>
				</tr>
				<tr> 
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td><div align="right">
          <input name="aceptar" type="submit" class="bodymenubold" id="aceptar" value="Mostrar Listado">
        </div></td>
				</tr>
			  </table>
			</form>
			<br>
			<table width="49%" border="0" align="center" class="nav3">
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
			<br>
<?php
			echo "Usuario: ".$login."<br>";
			$this -> PieForm();
		}
	}
?>
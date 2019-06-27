<?php // desde controlEditUserMain.php
	include_once('../inc/Pagina.inc');
	class FormSelectEditUser extends Pagina
	{
		public function MostrarFormSelectEditUser($login,$ListaUsuarios)
		{
			$this->NoClickDerecho();
			$this -> EncabezadoForm("Selección de usuario para edición - Usuario: '$login'","");
?>
<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />

			
<p>&nbsp;</p>
<table width="75%" border="1" align="center" class="nav3">
  <tr> 
    <td colspan="4"><div align="center" class="titsec1"><font size="2"><strong><font face="Arial, Helvetica, sans-serif">LISTADO 
        DE USUARIOS DEL SISTEMA</font></strong></font></div></td>
  </tr>
  <tr> 
    <td width="11%" class="titsec1"><div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif">N&deg;</font></strong></div></td>
    <td width="51%" class="titsec1"><div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif">APELLIDOS 
    Y NOMBRES</font></strong></div></td>
    <td width="21%" class="titsec1"><div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif">LOGIN</font></strong></div></td>
    <td width="17%" class="titsec1"><div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif">DETALLE</font></strong></div></td>
  </tr>
  <?php
  		$cont=1;
  		for($i=0;$i<count($ListaUsuarios);$i++)
		{//$ListaUsuarios = login, nombre, apellidoPaterno,apellidoMaterno, password, preguntaSecreta, respuestaSecreta, estadoUsuario
			if ($i % 2 == 0) $fondo="<tr bgcolor='#CCCCCC'>";
			else $fondo="<tr>";
			echo $fondo;
			echo " <td class='menuhmlft2linesbold'><center>".$cont."</center></td>";
			echo " <td class='menuhmlft2linesbold'>".strtoupper($ListaUsuarios[$i]['apellidoPaterno']).
			     " ".strtoupper($ListaUsuarios[$i]['apellidoMaterno']).
				 ", ".strtoupper($ListaUsuarios[$i]['nombre'])."</td>";
			echo " <td class='menuhmlft2linesbold'>".$ListaUsuarios[$i]['login']."</td>";
			echo " <td class='menuhmlft2linesbold'><center>";
			// espacio form
?>
			<form name="form" method="post" action="GetSelectEditUser.php">
				<input name="login" type="hidden" id="login" value="<? echo $login?>">
				<input name="loginUser" type="hidden" id="loginUser" value="<? echo $ListaUsuarios[$i]['login'];?>">
  				<input name="detalleUser" type="submit" class="bodymenubold" id="detalleUser" value="...">	
			</form>
<?php
			echo "</center></td>";
			echo "</tr>";
			$cont++;
		}
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
          <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Volver al MENU" />
          <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
        </div>
      </form></td>
  </tr>
</table>
<p>
  <?php
			echo "<br>Usuario: ".$login;
			$this -> PieForm();
		}
	}	
?>
</p>
<p>&nbsp;</p>

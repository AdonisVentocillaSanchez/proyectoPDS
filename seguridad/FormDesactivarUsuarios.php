<?php // desde controlEditUserMain.php
	include_once('../inc/Pagina.inc');
	class FormDesactivarUsuarios extends Pagina
	{
		public function MostrarFormDesactivarUsuarios($login,$ListaUsuarios)
		{
			$this -> EncabezadoForm("Selección de usuarios para desactivarlos - Usuario: '$login'","");
?>
<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />

			
<p>&nbsp;</p>
		<form name="form" method="post" action="GetDesactivarUsuarios.php">
  <table width="73%" border="1" align="center" class="nav3">
    <tr> 
      <td colspan="4"><div align="center" class="titsec1"><font size="2"><strong><font face="Arial, Helvetica, sans-serif">LISTADO 
          DE USUARIOS DEL SISTEMA</font><font size="2" face="Arial, Helvetica, sans-serif"> 
          <input name="login" type="hidden" id="login" value="<? echo $login?>">
          </font></strong></font></div></td>
    </tr>
    <tr> 
      <td width="11%" class="titsec1"><div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif">N&deg;</font></strong></div></td>
      <td width="43%" class="titsec1"><div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif">APELLIDOS 
      Y NOMBRES</font></strong></div></td>
      <td width="19%" class="titsec1"><div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif">LOGIN</font></strong></div></td>
      <td width="27%" class="titsec1"><div align="center"> 
          <p><strong><font size="2" face="Arial, Helvetica, sans-serif">DESACTIVAR<br>
            USUARIO</font></strong></p>
      </div></td>
    </tr>
    <?php
  		$cont=1;
  		for($i=0;$i<count($ListaUsuarios);$i++)
		{//$ListaUsuarios = login, nombre, apellidoPaterno,apellidoMaterno, password, preguntaSecreta, respuestaSecreta, estadoUsuario
			
		  if($ListaUsuarios[$i]['estadoUsuario']==1)
		  {	
			if ($cont % 2 == 0) $fondo="<tr bgcolor='#CCCCCC'>";
			else $fondo="<tr>";
			echo $fondo;
			echo " <td><div align='center'><font size='2' face='Arial, Helvetica, sans-serif'>".$cont."</font></div></td>";
			echo " <td><div><font size='2' face='Arial, Helvetica, sans-serif'>".strtoupper($ListaUsuarios[$i]['apellidoPaterno']).
			     " ".strtoupper($ListaUsuarios[$i]['apellidoMaterno']).
				 ", ".strtoupper($ListaUsuarios[$i]['nombre'])."</font></div></td>";
			echo " <td><div><font size='2' face='Arial, Helvetica, sans-serif'>".$ListaUsuarios[$i]['login']."</font></div></td>";
			echo " <td><div align='center'><font size='2' face='Arial, Helvetica, sans-serif'>";
			
?>
    <input type="checkbox" name="UserDesactivar[]" value="<? echo $ListaUsuarios[$i]['login']; ?>">
    <?php
			echo "</font></div></td>";
			echo "</tr>";
			$cont++;
		  }			
		}
  ?>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2"> <div align="center">
          <input name="DesactivarUser" type="submit" class="bodymenubold" id="DesactivarUser" value="Desactivar Usuarios">
        </div></td>
    </tr>
  </table> 
<p>&nbsp;</p></form>
<br> 
<table width="73%" border="0" align="center" class="nav3">
  <tr> 
    <td width="50%"><form name="form2" method="post" action="../inc/AbandonarSistema.php">
        <div align="center"> 
          <input name="salir" type="submit" class="bodymenubold" id="salir del sistema3" value="Salir del sistema">
          <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
        </div>
      </form></td>
    <td width="50%"><form name="form3" method="post" action="../inc/RedireccionarMenu.php">
        <div align="center"> 
          <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Volver al MENU sin guardar">
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
<p>
  
</p>

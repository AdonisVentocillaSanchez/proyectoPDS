<?
	include_once('../inc/Pagina.inc');
	include_once('../inc/TableroLetras.inc');
	class FormLogin extends Pagina
	{
		public function VerFormLogin()
		{
			
			$this->NoClickDerecho();
			$cadena="document.form1.login.focus();";
			$this -> EncabezadoForm("Autenticación",$cadena);
			$OBJTablero = new TableroLetras;			
			?>
<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />



			
<br>
			<br>			
			<form name="form1" method="post" action="GetFormLogin.php">
			
  <table width="59%" border="0" align="center" class="nav3">
    <tr> 
      <td width="15%" rowspan="4"><div align="center"><img src="../img/candado.png" width="109" height="113"></div></td>
      <td colspan="3"><div align="center" class="titsec1"><strong><font size="2" face="Arial, Helvetica, sans-serif">Autenticacion 
          de Usuario</font></strong></div></td>
    </tr>
    <tr> 
      <td width="32%"><strong><font size="2" face="Arial, Helvetica, sans-serif">Ingrese 
        su login</font></strong></td>
      <td width="24%"><input name="login" type="text" class="nav2" id="login"></td>
      <td width="29%" rowspan="3"> <div align="center"><?php $OBJTablero -> mostrarTableroNumeros("password","B_"); ?>
        </div>
        <div align="center"></div></td>
    </tr>
    <tr> 
      <td><strong><font size="2" face="Arial, Helvetica, sans-serif">Ingrese su 
        clave</font></strong></td>
      <td><input name="password" type="password" class="nav2" id="password" readonly="true"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><div align="center">
        <input name="ingresar" type="submit" class="bodymenubold" id="ingresar" value="ingresar">
      </div></td>
    </tr>
  </table>
			</form>			
			
<p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><a href="../user/IndexOlvidePassword.php" class="prod_frontpage">Olvide 
  mi password</a></strong></font></p>
<?php
			$this -> PieForm();
		}
	}
?>
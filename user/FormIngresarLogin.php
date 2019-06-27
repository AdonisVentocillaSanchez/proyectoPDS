<?php  //FormIngresarLogin.php  IndexOlvidePassword.php
	include_once('../inc/Pagina.inc');
	class FormIngresarLogin extends Pagina
	{
		public function MostrarFormIngresarLogin()
		{
			$this->NoClickDerecho();
			$cadena="document.form.login.focus();";
			$this -> EncabezadoForm("Proceso de Cambiar Password",$cadena);			
?>
			<script LANGUAGE="JavaScript">
			function checkFields() 
			{
				missinginfo = "";
				if (document.form.login.value.length <5) {	missinginfo += "\n     -  Login(minimo 5 caracteres)  ";}
				if (missinginfo != "") 
				{
					missinginfo ="_____________________________\n" + "El valor ingresado NO ES VALIDO:\n" + 
					missinginfo + "\n_____________________________" + "\n¡Por favor pulsa enter y prueba de nuevo!";
					alert(missinginfo);
					return false;
				}
				else 
					return true;
			}
			</script>
			<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
			
			<p>&nbsp;</p>
			<form name="form" method="post" onSubmit="return checkFields();" action="GetLoginUser.php">
			
  <table width="61%" align="center" class="nav3">
    <tr> 
      <td colspan="3"> <div align="center" class="titsec1"><strong><font face="Arial, Helvetica, sans-serif">INGRESE 
          SU PASSWORD</font></strong></div></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td width="182">&nbsp;</td>
      <td width="103" rowspan="3"><div align="center"><img src="../img/advertencia.png" width="57" height="57" /></div></td>
    </tr>
    <tr> 
      <td><strong class="menuhmlft2linesbold"><font size="2" face="Arial, Helvetica, sans-serif">Ingrese 
        su Nombre de Usuario (LOGIN:)</font></strong></td>
      <td><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
        <input name="login" type="text" class="nav2" id="login" size="25">
      </font></strong></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td colspan="2"> 
        <div align="left">
          <input name="aceptar" type="submit" class="bodymenubold" id="aceptar" value="Aceptar">
        </div></td></tr>
  </table>
			</form>
<form name="form1" method="post" action="../inc/RegIndex.php">
  <div align="center">
    <input name="Submit" type="submit" class="bodymenubold" value="Regresar al Inicio">
  </div>
</form>
<br> 
<p align="center">
  <?php	 
				$this -> PieForm();		
		}
	}
?>

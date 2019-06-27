
<?php
	include_once('../inc/Pagina.inc');
	class FormSearchPostulante extends Pagina
	{
		public function MostrarFormSearchPostulante($login)
		{
			
			$this->NoClickDerecho();
			$cadena="document.form1.apellidoPaternoPostulante.focus();";
			$this -> EncabezadoForm("Busqueda de Postulante - Usuario: '$login'",$cadena);
?>
			<script LANGUAGE="JavaScript">
			function checkFields1() {
			missinginfo = "";
			if (document.form.idPostulante.value == ""){	missinginfo += "\n     -  CODIGO DE POSTULANTE";}			
			if (missinginfo != "") 
			{
				missinginfo ="_____________________________\n" + "Te ha faltado introducir el dato:\n" + 
				missinginfo + "\n_____________________________" + "\n¡Por favor pulsa enter, rellena el campo y prueba de nuevo!";
				alert(missinginfo);
				return false;
			}
			else 
				return true;
			}
			
			function checkFields2() {
			missinginfo = "";
			if (document.form1.apellidoPaternoPostulante.value.length < 3){	missinginfo += "\n     -  MINIMO 3 LETRAS DEL APELLIDO PATERNO DEL POSTULANTE";}			
			if (missinginfo != "") 
			{
				missinginfo ="_____________________________\n" + "Te ha faltado introducir el dato:\n" + 
				missinginfo + "\n_____________________________" + "\n¡Por favor pulsa enter, rellena el campo y prueba de nuevo!";
				alert(missinginfo);
				return false;
			}
			else 
				return true;
			}
			</script>
			<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
			
			<p>&nbsp;</p>
				<form name="form" method="post" onSubmit="return checkFields1();" action="GetSearchCodePostulante.php">
				  <table width="75%" border="0" align="center" class="nav3">
					<tr> 
					  <td colspan="3"><div align="center" class="titsec1"><strong>B&uacute;squeda 
          de Postulante por C&oacute;digo</strong></div></td>
					</tr>
					<tr> 
					  <td width="46%">&nbsp;</td>
					  <td colspan="2">&nbsp;</td>
					</tr>
					<tr> 
					  <td class="menuhmlft2linesbold">Ingrese el C&oacute;digo del Postulante:</td>
					  <td width="45%"><input name="idPostulante" type="text" class="nav2" id="idPostulante">
        <input name="login" type="hidden" id="login" value="<?php  echo $login; ?>"></td>
					  <td width="9%"><input name="buscar" type="submit" class="bodymenubold" id="buscar" value="Buscar"></td>
					</tr>
				  </table>
				</form>
				
<hr>
<form name="form1" method="post" onSubmit="return checkFields2();"action="GetSearchLastNamePostulante.php">
  <table width="75%" border="0" align="center" class="nav3">
    <tr> 
      <td colspan="3"><div align="center" class="titsec1"><strong>B&uacute;squeda de Postulante 
          por</strong> <strong>Apellido</strong></div></td>
    </tr>
    <tr> 
      <td width="46%">&nbsp;</td>
      <td width="45%">&nbsp;</td>
      <td width="9%"><input name="login" type="hidden" id="login23" value="<?php  echo $login; ?>" /></td>
    </tr>
    <tr> 
      <td class="menuhmlft2linesbold">Ingrese el Apellido Paterno del Postulante:</td>
      <td><input name="apellidoPaternoPostulante" type="text" class="nav2" id="apellidoPaternoPostulante" size="40">      </td>
      <td><input name="buscar" type="submit" class="bodymenubold" id="buscar" value="Buscar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
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
<?php
			echo "Usuario: ".$login;
			$this -> PieForm();
		}
	}
?>
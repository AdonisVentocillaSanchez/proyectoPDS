<?php // FormControlCalidad.php desde desde indexControlCalidad.php desde boton
include_once('../inc/Pagina.inc');
class FormControlCalidad extends Pagina
{
	public function MostrarFormControlCalidad($login,$proceso,$idPostulante,$puntaje)
	{
			$this->NoClickDerecho();
			$cadena="document.form.idPostulante.focus();";
			$this -> EncabezadoForm("Control de Calidad - Usuario: '$login'",$cadena);
		?>
			<script LANGUAGE="JavaScript">
				function checkFields(proceso) {
				missinginfo = "";
				if (document.form.idPostulante.value == ""){	missinginfo += "\n     -  Falta Codigo de postulante";}
				if (document.form.idPostulante.value.length != 12){	missinginfo += "\n     -  Codigo de postulante inválido";}
				if (isNaN(document.form.idPostulante.value)){	missinginfo += "\n     -  Codigo de postulante inválido (solo números)";}
				if (missinginfo != "") 
				{
					missinginfo ="_____________________________\n" + "Errores:\n" + 
					missinginfo + "\n_____________________________" + "\n¡Por favor pulsa enter e ingresa el dato solicitado!";
					alert(missinginfo);
					document.form.idPostulante.value=proceso;
					document.form.idPostulante.focus();
					return false;
				}
				else 
					return true;
				}
				
				function Activar()
				{
					//document.formx.puntaje.readonly=!document.formx.puntaje.readonly;
					document.formx.puntaje.disabled=!document.formx.puntaje.disabled
					document.formx.puntaje.focus();
				}
				
				function checkFields2() {
				missinginfo = "";
				if (document.formx.puntaje.value == ""){	missinginfo += "\n     -  Puntaje vacio";}
				if (isNaN(document.formx.puntaje.value)){	missinginfo += "\n     -  solo números";}
				if (missinginfo != "") 
				{
					missinginfo ="_____________________________\n" + "Errores:\n" + 
					missinginfo + "\n_____________________________" + "\n¡Por favor pulsa enter e ingresa el dato solicitado!";
					alert(missinginfo);
					document.formx.puntaje.value="";
					document.formx.puntaje.focus();
					return false;
				}
				else 
					return true;
				}
						
			</script>
			<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
			 <form name="form" method="post" onSubmit="return checkFields(<? echo $proceso; ?>);" action="GetVerificarPuntaje.php">
  <table width="75%" border="0" align="center" class="nav3">
    <tr> 
      <td colspan="2" class="titsec1"><div align="center">CONTROL DE CALIDAD 
          <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
        </div></td>
    </tr>
    <tr> 
      <td width="388" class="bodymenubold">Ingrese un c&oacute;digo de postulante 
        v&aacute;lido</td>
      <td width="344">
        <input name="idPostulante" type="text" class="nav2" id="idPostulante" value="<? echo $proceso; ?>" size="10">
        <span class="bodymenubold">(12 d&iacute;gitos) </span></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td> <div align="right">
          <input name="consultarPostulante" type="submit" class="bodymenubold" id="consultarPostulante" value="Verificar Puntaje">
        </div></td>
    </tr>
  </table>
</form>
<?php if(strcmp($puntaje,"") != 0)
{
?>
<br>
<form name="formx" method="post" on onSubmit="return checkFields2();" action="GetGuardarCambioPuntaje.php">
  <table width="75%" border="0" align="center" class="nav3">
    <tr> 
      <td width="241" class="titsec1"><div align="left">POSTULANTE:</div></td>
      <td colspan="2" class="titsec2"><? echo $idPostulante; ?></td>
    </tr>
    <tr> 
      <td class="titsec1"><div align="left">PUNTAJE ALCANZADO:</div></td>
      <td width="202" class="titsec2"><input name="puntaje" type="text" disabled class="titsec2" id="puntaje" value="<?php echo $puntaje;?>" size="5" > 
        <span class="tit">PUNTOS</span></td>
      <td class="titsec2"><div align="right">
          <input name="Submit" type="button" class="bodymenubold" onClick="Activar();" value="Cambiar Puntaje">
        </div></td>
    </tr>
    <tr> 
      <td colspan="2"> <div align="center"> </div></td>
      <td width="285"> <div align="right">
          <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
          <input name="idPostulante" type="hidden" id="idPostulante" value="<?php echo $idPostulante?>">
          <input name="editarPuntaje" type="submit" class="bodymenubold" id="editarPuntaje" value="Guardar Cambio">
        </div></td>
    </tr>
  </table>
</form>
<?php
}
?>
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
  <?php
			echo "<br>Usuario: ".$login;
			$this -> PieForm();
		}
}
?>
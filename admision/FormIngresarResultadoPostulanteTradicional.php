<?php //FormIngresarResultadoPostulanteTradicional.php  desde ControlBusquedaPostulanteResultado.php
	include_once('../inc/Pagina.inc');
	class FormIngresarResultadoPostulanteTradicional extends Pagina
	{
		public function MostrarFormInsertResultadoTradicional($login,$DatosPostulante)
		{
			$this->NoClickDerecho();
			//ptospost
			$cadena="document.form.ptospost.focus();";
			$this -> EncabezadoForm("Ingreso del puntaje de postulante - Usuario: '$login'",$cadena);
?>
<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
<script LANGUAGE="JavaScript">
function checkFields() {
missinginfo = "";
if (document.form.ptospost.value == ""){	missinginfo += "NO SE HA INGRESADO VALOR EN PUNTAJE";}
if (isNaN(form.ptospost.value)){	missinginfo += "NO SE ACEPTA LETRAS NI SIMBOLOS";}
if (missinginfo != "") 
{
	missinginfo ="_____________________________\n" + "ERROR EN INGRESO DE DATOS\n" + 
	missinginfo + "\n_____________________________" + "\n¡Por favor pulsa enter, ingresa el puntaje y prueba de nuevo!";
	document.form.ptospost.value = "";
	document.form.ptospost.focus();
	alert(missinginfo);
	return false;
}
else 
	return true;
}
//  End -->
/************************************/
function Solo_Numerico(variable){
				//Numer=parseFloat(variable);
	Numer=variable;
	if (isNaN(Numer)){
			alert("POR FAVOR SOLO INGRESE NUMEROS");
			return "";
	}
	return Numer;
	}
	function ValNumero(Control){
		Control.value=Solo_Numerico(Control.value);
	}
/************************************/
</script>
<style type="text/css">
<!--
.Estilo1 {font-size: 24px}
.Estilo2 {color: #FFFF00}
-->
</style>
<br>
 
<form name="form" method="post" onSubmit="return checkFields();" action="GetGuardarPuntajePostulanteTradicional.php">
  <table width="75%" border="0" align="center" class="nav3">
    <tr> 
      <td colspan="3"><div align="center" class="titsec1">Datos del Postulante: 
          <span class="titsec2"> <? echo $DatosPostulante[0]['idPostulante'] ?></span></div></td>
    </tr>
    <tr> 
      <td colspan="3" class="inputbts"><div align="center">
        <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
      </div></td>
    </tr>
    <tr> 
      <td width="31%" class="menuhmlft2linesbold">APELLIDOS Y NOMBRES :</td>
      <td colspan="2" class="titsec2"><? echo strtoupper($DatosPostulante[0]['apellidoPaternoPostulante'])." ".strtoupper($DatosPostulante[0]['apellidoMaternoPostulante']).", ".strtoupper($DatosPostulante[0]['nombrePostulante']);  ?></td>
    </tr>
    <tr> 
      <td class="menuhmlft2linesbold">D.N.I. :</td>
      <td colspan="2" class="titsec2"><? echo $DatosPostulante[0]['dniPostulante'] ?></td>
    </tr>
    <tr> 
      <td class="menuhmlft2linesbold">CARRERA A LA QUE POSTULA :</td>
      <td colspan="2" class="titsec2"><? echo strtoupper($DatosPostulante[0]['nombreCarrera']); ?></td>
    </tr>
    <tr> 
      <td class="menuhmlft2linesbold">TURNO :</td>
      <td colspan="2" class="titsec2"> 
        <?php	echo strtoupper($DatosPostulante[0]['nombreTurno']);   ?>
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td colspan="2" class="nav3">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="3" class="titsec1"><div align="center">INGRESE PUNTAJE OBTENIDO</div></td>
    </tr>
    <tr> 
      <td class="ttseccao"><div align="center" class="inputlogportfolio Estilo1"><span class="Estilo2"><strong><? echo $DatosPostulante[0]['idPostulante']; ?></strong></span> -&gt; </div></td>
      <td width="24%" class="nav3"> <div align="center">
        <input name="ptospost" type="text" onkeyUp="return ValNumero(this);" class="inputlogportfolio Estilo1" id="ptospost" size="10">
        <input name="idPostulante" type="hidden" id="idPostulante" value="<? echo $DatosPostulante[0]['idPostulante'];?>">
      </div></td>
      <td width="45%" class="nav3">
        <div align="left">
          <input name="GuardarPuntaje" type="submit" class="ttseccao1" id="GuardarPuntaje" value="GUARDAR PUNTAJE">
          </div></td></tr>
  </table>
</form>
<br>
<form name="form4" method="post" action="GetRegresarBuscarPostulanteTradicional.php">
  <div align="center">
    <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
    <input name="RegresarBusqueda" type="submit" class="prod_golive" id="RegresarBusqueda" value="REGRESAR A BUSCAR POSTULANTE &lt; SIN GUARDAR PUNTAJE &gt;">
    <input name="mensaje" type="hidden" id="mensaje" value="NO SE GUARDARO EL PUNTAJE DEL POSTULANTE">
  </div>
</form>
<br>
<table width="75%" border="0" align="center" class="nav3">
  <tr> 
    <td width="50%"><form name="form2" method="post" action="../inc/AbandonarSistema.php">
        <div align="center"> 
          <input name="salir" type="submit" class="prod_golive" id="salir del sistema3" value="SALIR DEL SISTEMA">
          <input name="login" type="hidden" id="login22" value="<?php echo $login; ?>">
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
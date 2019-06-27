<?php //FormGenerarAulasIngresarDatos.php  desde indexGenerarAulas.php
	include_once('../inc/Pagina.inc');
	class FormGenerarAulasIngresarDatos extends Pagina
	{
		public function MostrarFormGenerarAulasIngresarDatos($login)
		{
			$this->NoClickDerecho();
			//ptospost
			$cadena="document.form.canAulas.focus();";
			$this -> EncabezadoForm("Ingreso del puntaje de postulante - Usuario: '$login'",$cadena);
?>
			<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
			<script LANGUAGE="JavaScript">
			function checkFields() {
			missinginfo = "";
			if (document.form.canAulas.value == ""){	missinginfo += "La cantidad de aulas es necesaria";}
			if (isNaN(form.canAulas.value)){	missinginfo += "la cantidad de aulas es numerica";}
			if (document.form.canAulas.value <= 0){	missinginfo += "La cantidad de aulas no puede tener este valor";}
			//if (document.form.cantPosAulas.value == ""){	missinginfo += "La cantidad de postulantes por aula es necesaria";}
			//if (document.form.cantPosAulas.value <5 ""){	missinginfo += "La cantidad de postulantes por aula minima es 5";}
			//if (isNaN(form.cantPosAulas.value)){	missinginfo += "la cantidad de postulantes por aula es numerica";}
			if (missinginfo != "") 
			{
				missinginfo ="_____________________________\n" + "ERROR EN INGRESO DE DATOS\n" + 
				missinginfo + "\n_____________________________" + "\n¡Por favor pulsa enter, ingresa el los valores y prueba de nuevo!";
				document.form.ptospost.value = "";
				document.form.ptospost.focus();
				alert(missinginfo);
				return false;
			}
			else 
				return true;
			}
			//  End -->
			</script>
			<br>
 
<form name="form" method="post" onSubmit="return checkFields();" action=" GetGenerarAulas.php">
  <table width="75%" border="0" align="center" class="nav3">
    <tr> 
      <td colspan="3"><div align="center" class="titsec1">INGRESAR LOS SIGUIENTES 
          DATOS PARA GENERAR LISTADO DE AULAS Y DISTRIBUIR POSTULANTES</div></td>
    </tr>
    <tr> 
      <td colspan="3"><div align="center"> 
          <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
        </div></td>
    </tr>
    <tr> 
      <td width="50%" class="menuhmlft2linesbold">Ingrese cantidad de aulas disponibles 
        :</td>
      <td width="50%"><input name="canAulas" type="text" class="nav2" id="canAulas"></td>
    </tr>
    <tr> 
      <td class="menuhmlft2linesbold">Ingrese cantidad de postulantes por cada 
        aula:</td>
      <td><input name="cantPosAulas" type="text" class="nav2" id="cantPosAulas"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td> <div align="center">
          <input name="disAulas" type="submit" class="bodymenubold" id="disAulas" value="Ejecutar la distribucion">
        </div></td>
    </tr>
  </table>
</form>
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
          <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Volver al MENU PRINCIPAL">
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
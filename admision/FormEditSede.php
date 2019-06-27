<?php //FormEditSede.php desde ControlEditSede.php
include_once('../inc/Pagina.inc');
class FormEditSede extends Pagina
{
	public function MostrarFormEditSede($login,$DatosSede)
	{
		//$this->NoClickDerecho();
		//$cadena="document.formx.nombreSede.focus();";
		$this -> EncabezadoForm("Registro de Sedes - Usuario: '$login'","");
		//echo $DatosSede[0]['nombreSede'];
		
		?>
		<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
		<script LANGUAGE="JavaScript">
				function checkFields() {
				missinginfo = "";
				if (document.form.nombreSede.value.length < 5){	missinginfo += "\n     -  Nombre de la Sede - minimo 5 caracteres";}
				if (document.form.direccionSede.value.length < 5) {	missinginfo += "\n     -  Dirección de la Sede - minimo 5 caracteres";}
				if (document.form.cantidadAulasSede.value == "") {	missinginfo += "\n     -  Cantidad de aulas";}
				if (document.form.cantidadPostulantesAulaSede.value == "") {	missinginfo += "\n     -  Cantidad de postulantes por aula";}
				if (missinginfo != "") 
				{
					missinginfo ="_____________________________\n" + "Los siguientes datos no son validos:\n" + 
					missinginfo + "\n_____________________________" + "\n¡Por favor pulsa enter, rellena los datos y prueba de nuevo!";
					alert(missinginfo);
					return false;
				}
				else 
					return true;
				}
				/**************/
				function Solo_Numerico(variable){
					Numer=parseInt(variable);
					if (isNaN(Numer)){
						alert("POR FAVOR SOLO INGRESE NUMEROS ENTEROS");
						return "";
					}
					return Numer;
				}
				function ValNumero(Control){
					Control.value=Solo_Numerico(Control.value);
				}
		</script>
		
		<form name="form" onSubmit="return checkFields()" method="post" action="GetDatosActualizarSede.php">
		  <table width="75%" align="center" class="nav3">
			<tr> 
			  <td colspan="3"><div align="center" class="titsec1">ACTUALIZACION DE DATOS DE SEDE</div></td>
			</tr>
			<tr> 
			  <td class="menuhmlft2linesbold">1.</td>
			  <td class="menuhmlft2linesbold">C&oacute;digo de la Sede</td>
			  <td><input name="idSede" type="text" class="nav2" id="idSede" value="<? echo $DatosSede[0]['idSede']; ?>" size="10" readonly="true"></td>
			</tr>
			<tr> 
			  <td width="2%" class="menuhmlft2linesbold">2.</td>
			  <td width="52%" class="menuhmlft2linesbold">Nombre/denominaci&oacute;n de 
				Sede:</td>
			  <td width="46%"><input name="nombreSede" type="text" class="nav2"  id="nombreSede" value="<?php
			  										$nombre = str_replace ("\"", "'", $DatosSede[0]['nombreSede']); 										
													printf("%s",strtoupper($nombre));
													?>" size="55"></td>
			</tr>
			<tr> 
			  <td class="menuhmlft2linesbold">3.</td>
			  <td class="menuhmlft2linesbold">Diirecci&oacute;n/referencia de la Sede:</td>
			  <td><input name="direccionSede" type="text" class="nav2" id="direccionSede"  value="<?php
			  										$nombre = str_replace ("\"", "'", $DatosSede[0]['direccionSede']); 										
													printf("%s",strtoupper($nombre));
													?>"size="55"></td>
			</tr>
			<tr> 
			  <td class="menuhmlft2linesbold">4.</td>
			  <td class="menuhmlft2linesbold">N&uacute;mero de aulas con que cuenta la 
				Sede:</td>
			  <td> <input name="cantidadAulasSede" type="text" class="nav2" id="cantidadAulasSede" onkeyUp="return ValNumero(this);" value="<? echo $DatosSede[0]['cantidadAulasSede'];?>" size="10">
				(solo n&uacute;meros enteros) </td>
			</tr>
			<tr> 
			  <td class="menuhmlft2linesbold">5.</td>
			  <td class="menuhmlft2linesbold">Cantidad de Postulantes que alberga un (01) 
				aula de la Sede:</td>
			  <td><input name="cantidadPostulantesAulaSede" type="text" class="nav2" size="10" onkeyUp="return ValNumero(this);" id="cantidadPostulantesAulaSede"   value="<? echo $DatosSede[0]['cantidadPostulantesAulaSede'];?>" >
				(solo n&uacute;meros enteros) </td>
			</tr>
			<tr> 
			  <td class="menuhmlft2linesbold">6.</td>
			  <td class="menuhmlft2linesbold">Estado de la sede:</td>
			  <td><select name="estadoSede" class="nav2" id="estadoSede">
			  <?php
			  	if($DatosSede[0]['estadoSede']) $estado ="activo";
				else $estado ="inactivo";
			  	echo "<option value=".$DatosSede[0]['estadoSede'].">".$estado."</option>";
			  ?>
          <option value="1">activo</option>
          <option value="0">inactivo</option>
        </select></td>
			</tr>
			<tr> 
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
			<tr> 
			  <td>&nbsp;</td>
			  <td><input name="login" type="hidden" id="login" value="<?php echo $login; ?>"></td>
			  <td><div align="center"> 
				  
          <input name="EditSedeOld" type="submit" class="bodymenubold" id="EditSedeOld" value="Actualizar los datos de la sede">
				</div></td>
			</tr>
		  </table>
		</form>
		<table width="75%" border="0" align="center" class="nav3">
		  <tr> 
			<td width="47%"><form name="form3" method="post" action="GetRegresarGestionSedes.php">
				<div align="center"> 
				  <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Regresar al formulario anterior SIN GUARDAR LOS DATOS">
				  <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
				</div>
			  </form></td>
		  </tr>
		</table>
		<p>&nbsp;</p>
<?php
		echo "Usuario: ".$login."<br>";
		$this ->PieForm();
	}
}
?>
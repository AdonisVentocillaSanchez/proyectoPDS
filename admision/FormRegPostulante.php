
<?php
	include_once('../inc/Pagina.inc');
	class FormRegPostulante extends Pagina
	{
		public function MostrarFormRegPostulante($login,$ListaDistritos,$ListaCarreras)
		{
			//session_start();
			$this->NoClickDerecho();
			$cadena="document.form.nombre.focus();";
			$this -> EncabezadoForm("Registro de Postulante- Usuario: '$login'",$cadena);
			//echo $login;
			?>
			
<script LANGUAGE="JavaScript">
function checkFields() {
missinginfo = "";
if (document.form.nombre.value == ""){	missinginfo += "\n     -  Nombre";}
if (document.form.apellidop.value == "") {	missinginfo += "\n     -  Apellido Paterno";}
if (document.form.apellidom.value == "") {	missinginfo += "\n     -  Apellido Materno";}
if (document.form.direccion.value == "") {	missinginfo += "\n     -  Dirección";}
if (document.form.foto.value == "") {	missinginfo += "\n     -  No se subio foto";}
if (document.form.dni.value == "") {	missinginfo += "\n     -  DNI";}
if (document.form.movil.value == "") {	missinginfo += "\n     -  Teléfono Celular";}
if (document.form.fijo.value == "") {	missinginfo += "\n     -  Teléfono Fijo";}
if (document.form.voucher.value == "") {	missinginfo += "\n     -  Numero de voucher del pago";}
if ((document.form.mail.value == "") ||(document.form.mail.value.indexOf('@') == -1) || (document.form.mail.value.indexOf('.') == -1))
{	missinginfo += "\n  -  Dirección de correo";}
if (missinginfo != "") 
{
	missinginfo ="_____________________________\n" + "Te ha faltado introducir los siguientes datos:\n" + 
	missinginfo + "\n_____________________________" + "\n¡Por favor pulsa enter, rellena los datos y prueba de nuevo!";
	alert(missinginfo);
	return false;
}
else 
	return true;
}
//  End -->
</script>
<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
<form action="GetPostulante.php" method="post" enctype="multipart/form-data" name="form" onSubmit="return checkFields();" >
  <table width="92%" border="0" align="center" class="nav3">
    <tr> 
      <td colspan="3"><div align="center" class="titsec1">Formulario de Registro de Postulante 
        </div></td>
    </tr>
    <tr> 
      <td colspan="3"><div align="center" class="prod_websitepro">Por favor ingrese con cautela cada dato 
          solicitado por el sistema, cualquier error invalidar&aacute; su postulacion</div></td>
    </tr>
    <tr> 
      <td height="41" colspan="3"> 
        <div align="center"> </div>
        <div align="center"></div>
        <div align="center">
          <table width="95%" border="0">
            <tr> 
              <td colspan="4">&nbsp;</td>
            </tr>
            <tr> 
              <td width="3%" class="menuhmlft2linesbold"><div align="center">1</div></td>
              <td width="33%" class="menuhmlft2linesbold"><div align="left">Nombres 
                  del Postulante:</div></td>
              <td colspan="2"><input name="nombre" type="text" class="nav2" id="nombre" size="50" ></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">2</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Apellido Paterno 
                  del Postulante:</div></td>
              <td colspan="2"><input name="apellidop" type="text" class="nav2" id="apellidop" size="30"></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">3</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Apellido Materno 
                  del Postulante:</div></td>
              <td colspan="2"><input name="apellidom" type="text" class="nav2" id="apellidom" size="30"></td>
            </tr>
            <tr> 
              <td height="24" class="menuhmlft2linesbold"><div align="center">4</div></td>
              <td class="menuhmlft2linesbold">Subir foto al sistema:</td>
              <td colspan="2" class="menuhmlft2linesbold"><input name="foto" type="file" class="nav2" id="foto"></td>
            </tr>
            <tr> 
              <td height="117" class="menuhmlft2linesbold"> <div align="center">5</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Direcci&oacute;n 
                  del Postulante:</div></td>
              <td width="9%" class="menuhmlft2linesbold"> <p> 
                  <label> 
                  <input name="cabezadireccion" type="radio" value="Av." checked>
                  Av.</label>
                  <br>
                  <label> 
                  <input type="radio" name="cabezadireccion" value="Jr.">
                  Jr.</label>
                  <br>
                  <label> 
                  <input type="radio" name="cabezadireccion" value="Psj.">
                  Psj.</label>
                  <br>
                  <label> 
                  <input type="radio" name="cabezadireccion" value="Calle">
                  Calle</label>
                  <br>
                  <label> 
                  <input type="radio" name="cabezadireccion" value="Otro">
                  Otro</label>
              </td>
              <td width="55%"><input name="direccion" type="text" class="nav2" id="direccion" size="60"></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">6</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Distrito donde 
                  vive el Postulante:</div></td>
              <td colspan="2"><select name="distrito" class="nav2" id="distrito">
                  <?php
				  	for($i=0;$i<count($ListaDistritos);$i++)
					{
						echo "<option value='".$ListaDistritos[$i][0]."'>".$ListaDistritos[$i][1]."</option>";
					}
				  ?>
                </select></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">7</div></td>
              <td class="menuhmlft2linesbold"><div align="left">D.N.I. del Postulante:</div></td>
              <td colspan="2"><input name="dni" type="text" class="nav2" id="dni"></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">8</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Tel&eacute;fono 
                  celular del Postulante</div></td>
              <td colspan="2"><input name="movil" type="text" class="nav2" id="movil"></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">9</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Tel&eacute;fono 
                  fijo del Postulante (o de referencia):</div></td>
              <td colspan="2"><input name="fijo" type="text" class="nav2" id="fijo"></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">10</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Correo eletr&oacute;nico 
                  del Postulante:</div></td>
              <td colspan="2"><input name="mail" type="text" class="nav2" id="mail" size="50"> 
              </td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"> <div align="center">11</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Fecha de Nacimiento 
                  del Postulante:</div></td>
              <td colspan="2">Dia: 
                <select name="dianac" class="nav2" id="dianac">
                  <?
			  		for($i=1;$i<32;$i++)
					{
						echo "<option value='".$i."'>".$i."</option>";
					}		
			  ?>
                </select>
                Mes: 
                <select name="mesnac" class="nav2" id="mesnac">
                  <option value="enero">enero</option>
                  <option value="febrero">febrero</option>
                  <option value="marzo">marzo</option>
                  <option value="abril">abril</option>
                  <option value="mayo">mayo</option>
                  <option value="junio">junio</option>
                  <option value="julio">julio</option>
                  <option value="agosto">agosto</option>
                  <option value="septiembre">septiembre</option>
                  <option value="octubre">octubre</option>
                  <option value="noviembre">noviembre</option>
                  <option value="diciembre">diciembre</option>
                </select>
                A&ntilde;o: 
                <select name="anionac" class="nav2" id="anionac">
                  <?
			  		$anio= date('Y'); 		
					for($i = $anio - 15 ;$i >= 1940 ;$i--)
					{
						echo "<option value='".$i."'>".$i."</option>";
					}		
			  ?>
                </select> </td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">12</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Estado civil del 
                  Postulante:</div></td>
              <td colspan="2"><select name="estadocivil" class="nav2" id="select">
                  <option value="soltero(a)">soltero(a)</option>
                  <option value="casado(a)">casado(a)</option>
                  <option value="viudo(a)">viudo(a)</option>
                  <option value="divorciado(a)">divorciado(a)</option>
                  <option value="separado(a)">separado(a)</option>
                  <option value="conviviente">conviviente</option>
                </select></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">13</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Sexo del Postulante:</div></td>
              <td colspan="2"><select name="sexo" class="nav2" id="select2">
                  <option value="masculino">masculino</option>
                  <option value="femenino">femenino</option>
                </select></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">14</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Carrera a la que 
                  Postula como Primera Opci&oacute;n:</div></td>
              <td colspan="2"><select name="carrera" class="nav2" id="select3">
                  <?php
			  	  	for($i=0;$i<count($ListaCarreras);$i++)
					{
						if ($ListaCarreras[$i][2] == 1) $t = "MAÑANA";
						else $t = "NOCHE";
						echo "<option value='".$ListaCarreras[$i][0]."'>".$ListaCarreras[$i][1]." - TURNO ".$t."</option>";
					}
				?>
                </select> </td>
            </tr>
            <tr>
              <td class="menuhmlft2linesbold"><div align="center">15</div></td>
              <td class="menuhmlft2linesbold">Carrera a la que Postula como Segunda 
                Opci&oacute;n:</td>
              <td colspan="2"><select name="carrera2" class="nav2" id="select5">
                  <?php
			  	  	for($i=0;$i<count($ListaCarreras);$i++)
					{
						if ($ListaCarreras[$i][2] == 1) $t = "MAÑANA";
						else $t = "NOCHE";
						echo "<option value='".$ListaCarreras[$i][0]."'>".$ListaCarreras[$i][1]." - TURNO ".$t."</option>";
					}
				?>
                </select></td>
            </tr>
            <tr>
              <td class="menuhmlft2linesbold"><div align="center">16</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Fecha de Inscripci&oacute;n 
                  del Postulante:</div></td>
              <td colspan="2"><input name="fecinc" type="text" class="nav2" id="fecinc" value="<?php echo date('l, d')." de ".date('F')." de ".date('Y')." a horas: ".date('h:i:s a'); ?>" size="50" readonly="true"></td>
            </tr>
            <tr>
              <td class="menuhmlft2linesbold"><div align="center">17</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Usuario Registrador:</div></td>
              <td colspan="2"><input name="login" type="text" class="nav2" id="login" value="<?php echo $login; ?>" readonly="true"></td>
            </tr>
            <tr>
              <td class="menuhmlft2linesbold"><div align="center">18</div></td>
              <td class="menuhmlft2linesbold">N&deg; de voucher de pago en BN:</td>
              <td colspan="2"><input name="voucher" type="text" class="nav2" id="voucher" size="30"></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">19</div></td>
              <td class="menuhmlft2linesbold">Condici&oacute;n del Postulante</td>
              <td colspan="2"><select name="condicionPostulante" class="nav2" id="condicionPostulante">
                  <option value="ordinario">ordinario</option>
                  <option value="becado">becado</option>
                </select></td>
            </tr>
          </table>
        </div></td>
	</tr>
			<tr> 
			  <td width="50%" height="23"><div align="center"></div></td>
			  <td width="27%"><div align="center">
          <input name="registrar" type="submit" class="bodymenubold" id="registrar" value="GUARDAR LA INFORMACION">
        </div></td>
			  <td width="23%"><div align="center"> 
          <input name="Submit2" type="reset" class="bodymenubold" value="Borrar la informacion">
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
          <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Volver al MENU sin guardar">
          <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
        </div>
      </form></td>
  </tr>
</table>
<p>&nbsp;</p>
<?php
			echo "<br>Usuario: ".$login;
			$this -> PieForm();
		}
	}
?>

<?
	include_once('../inc/Pagina.inc');
	class FormEditPostulante extends Pagina
	{
		public function MostrarFormEditPostulante($login,$datos,$ListaDistritos,$ListaCarreras)
		{
			//session_start();
			//echo $ListaCarreras[2][1];
			$this->NoClickDerecho();
			$this -> EncabezadoForm("Edición de Datos de Postulante - Usuario: '$login'","");
			$foto = "";
			$foto = $datos[0][0];
			?>
<script LANGUAGE="JavaScript">

function checkFields() {
missinginfo = "";
if (document.form.nombre.value == ""){	missinginfo += "\n     -  Nombre";}
if (document.form.apellidop.value == "") {	missinginfo += "\n     -  Apellido Paterno";}
if (document.form.apellidom.value == "") {	missinginfo += "\n     -  Apellido Materno";}
if (document.form.direccion.value == "") {	missinginfo += "\n     -  Dirección";}
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


			
			
<form action="GetEditDatosPostulante.php" method="post" enctype="multipart/form-data" name="form" onSubmit="return checkFields();" >
  <table width="92%" border="0" align="center" class="nav3">
    <tr> 
      <td colspan="2"><div align="center" class="titsec1">EDICION DE DATOS DEL POSTULANTE</div></td>
    </tr>
    <tr> 
      <td colspan="2"><div align="center" class="prod_websitepro"> 
          <p>Por favor ingrese con cautela cada dato solicitado por el sistema, 
            cualquier error invalidar&aacute; su postulacion</p>
          <hr>
        </div></td>
    </tr>
    <tr> 
      <td height="41" colspan="2"> <div align="center"> </div>
        <div align="center"></div>
        <div align="center"> 
          <table width="95%" border="0">
            <tr> 
              <td colspan="4"><div align="center" class="titsec1"> 
                  <input name="idpostulante" type="text" class="nav2" id="idpostulante" value="<?php   echo $datos[0][0]; ?>" size="15" readonly="true">
                </div></td>
            </tr>
            <tr> 
              <td width="4%" height="24" class="menuhmlft2linesbold"> <div align="center">1</div></td>
              <td width="33%" class="menuhmlft2linesbold"><div align="left">Nombres 
                  del Postulante:</div></td>
              <td><input name="nombre" type="text" class="nav2" id="nombre" value="<?php   echo $datos[0]['nombrePostulante'] ; ?>" size="50" ></td>
              <td rowspan="4"> <table width="70" height="83" border="0" align="center">
                  <tr> 
                    <td><div align="center"><img src="../fotoPostulante/<? echo $foto;?>.jpg?<? echo time();?>" width="70" height="86"> 
                        <?
					//time() despues de la foto permite que la imagen no este en la cache
					?>
                      </div></td>
                  </tr>
                </table></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">2</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Apellido Paterno 
                  del Postulante:</div></td>
              <td><input name="apellidop" type="text" class="nav2" id="apellidop" value="<?php   echo $datos[0]['apellidoPaternoPostulante'] ; ?>" size="30"></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">3</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Apellido Materno 
                  del Postulante:</div></td>
              <td><input name="apellidom" type="text" class="nav2" id="apellidom" value="<?php   echo $datos[0][3] ; ?>" size="30"></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"> <div align="center">4</div></td>
              <td class="menuhmlft2linesbold">Cambiar Foto del Postulante:</td>
              <td><input name="foto" type="file" class="nav2" id="foto"></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">5</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Direcci&oacute;n 
                  del Postulante:</div></td>
              <td> <p> 
                  <label> 
                  <input name="direccion" type="text" class="nav2" id="direccion" value="<?php   echo $datos[0]['direccionPostulante'] ; ?>" size="50">
                  </label>
              </td>
              <td><div align="center">Foto Actual</div></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">6</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Distrito donde 
                  vive el Postulante:</div></td>
              <td colspan="2"><select name="distrito" class="nav2" id="distrito">
                  <option value="<?php  echo $datos[0]['idDistrito'] ?>"> 
                  <?php  echo $datos[0]['nombreDistrito'] ?>
                  </option>
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
              <td colspan="2"><input name="dni" type="text" class="nav2" id="dni" value="<?php   echo $datos[0]['dniPostulante']; ?>"></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">8</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Tel&eacute;fono 
                  celular del Postulante</div></td>
              <td colspan="2"><input name="movil" type="text" class="nav2" id="movil" value="<?php   echo $datos[0]['movilPostulante']; ?>"></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">9</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Tel&eacute;fono 
                  fijo del Postulante (o de referencia):</div></td>
              <td colspan="2"><input name="fijo" type="text" class="nav2" id="fijo" value="<?php   echo $datos[0]['fijoPostulante']; ?>"></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">10</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Correo eletr&oacute;nico 
                  del Postulante:</div></td>
              <td colspan="2"><input name="mail" type="text" class="nav2" id="mail" value="<?php   echo $datos[0]['mailPostulante']; ?>" size="50"> 
              </td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"> <div align="center">11</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Fecha de Nacimiento 
                  del Postulante:</div></td>
              <td colspan="2"> 
                <?php   $fecha = explode("/",$datos[0]['fecnacPostulante']); ?>
                Dia: 
                <select name="dianac" class="nav2" id="dianac">
                  <option value="<?php echo $fecha[0]; ?>"><?php echo $fecha[0]; ?></option>
                  <?
			  		for($i=1;$i<32;$i++)
					{
						echo "<option value='".$i."'>".$i."</option>";
					}		
			  ?>
                </select>
                Mes: 
                <select name="mesnac" class="nav2" id="mesnac">
                  <option value="<?php echo $fecha[1]; ?>"><?php echo $fecha[1]; ?></option>
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
                  <option value="<?php echo $fecha[2]; ?>"><?php echo $fecha[2]; ?></option>
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
                  <option value="<?php echo $datos[0]['estadoCivilPostulante']; ?>"><?php echo $datos[0]['estadoCivilPostulante']; ?></option>
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
                  <option value="<?php echo $datos[0]['sexoPostulante']; ?>"><?php echo $datos[0]['sexoPostulante']; ?></option>
                  <option value="masculino">masculino</option>
                  <option value="femenino">femenino</option>
                </select></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">14</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Carrera a la que 
                  Postula (1ra opci&oacute;n):</div></td>
              <td colspan="2"><select name="carrera" class="nav2" id="select3">
                  <?php
			  if($datos[0]['idCarrera'] % 2 != 0) $t = "MAÑANA";
			  else $t = "NOCHE";
			  ?>
                  <option value="<?php echo $datos[0]['idCarrera']; ?>"><?php echo strtoupper($datos[0]['nombreCarrera'])." - TURNO ".$t; ?></option>
                  <?php
			  	  	for($i=0;$i<count($ListaCarreras);$i++)
					{
						if ($ListaCarreras[$i][2] == 1) $t = "MAÑANA";
						else $t = "NOCHE";
						echo "<option value='".$ListaCarreras[$i][0]."'>".strtoupper($ListaCarreras[$i][1])." - TURNO ".$t."</option>";
					}
				?>
                </select> </td>
            </tr>
            <tr>
              <td class="menuhmlft2linesbold"><div align="center">15</div></td>
              <td class="menuhmlft2linesbold">Carrera a la que Postula (2da opci&oacute;n):</td>
              <td colspan="2"><select name="carrera2" class="nav2" id="select4">
                  <option value="<?php echo $datos[0]['idCarrera2']; ?>"><?php echo strtoupper($datos[0]['nomSegundaOpcion'])." - TURNO ".strtoupper($datos[0]['turnoSegundaOpcion']); ?></option>
                  <?php
			  	  	for($i=0;$i<count($ListaCarreras);$i++)
					{
						if ($ListaCarreras[$i][2] == 1) $t = "MAÑANA";
						else $t = "NOCHE";
						echo "<option value='".$ListaCarreras[$i][0]."'>".strtoupper($ListaCarreras[$i][1])." - TURNO ".$t."</option>";
					}
				?>
                </select></td>
            </tr>
            <tr>
              <td class="menuhmlft2linesbold"><div align="center">16</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Fecha de Inscripci&oacute;n 
                  del Postulante:</div></td>
              <td colspan="2"><input name="fecinc" type="text" class="nav2" id="fecinc" value="<?php echo $datos[0]['fecinsPostulante']; ?>" size="50" readonly="true"></td>
            </tr>
            <tr>
              <td class="menuhmlft2linesbold"><div align="center">17</div></td>
              <td class="menuhmlft2linesbold"><div align="left">Usuario Registrador:</div></td>
              <td colspan="2"><input name="loginIns" type="text" class="nav2" id="loginIns" value="<?php echo $datos[0]['login']; ?>" readonly="true"></td>
            </tr>
            <tr>
              <td class="menuhmlft2linesbold"><div align="center">18</div></td>
              <td class="menuhmlft2linesbold">N&deg; de voucher de pago en BN:</td>
              <td colspan="2"><input name="voucher" type="text" class="nav2" id="voucher" value="<?php echo $datos[0]['voucherPostulante']; ?>" size="30"></td>
            </tr>
            <tr>
              <td class="menuhmlft2linesbold"><div align="center">19</div></td>
              <td class="menuhmlft2linesbold">Estado del Postulante:</td>
              <td colspan="2"><select name="estadoPostulante" class="nav2" id="estadoPostulante">
                  <option value="<?php echo $datos[0]['estadoPostulante']; ?>"><?php echo $datos[0]['estadoPostulante']; ?></option>
                  <option value="apto">apto</option>
                  <option value="inapto">inapto</option>
                </select></td>
            </tr>
            <tr> 
              <td class="menuhmlft2linesbold"><div align="center">20</div></td>
              <td class="menuhmlft2linesbold">Condici&oacute;n de inscripci&oacute;n 
                del Postulante:</td>
              <td colspan="2"><select name="condicionPostulante" class="nav2" id="condicionPostulante">
                  <?php
					echo "<option value=".$datos[0]['condicionPostulante'].">".strtoupper($datos[0]['condicionPostulante'])."</option>"
				?>
                  <option value="ordinario">ordinario</option>
                  <option value="becado">becado</option>
                </select> </td>
            </tr>
          </table>
        </div></td>
    </tr>
    <tr> 
      <td width="50%" height="23"><div align="center"></div></td>
      <td> <div align="center"> 
          <input name="registrar" type="submit" class="bodymenubold" id="registrar" value="GUARDAR LA INFORMACION">
          <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
        </div>
        <div align="center"> </div></td>
    </tr>
  </table>
		</form>			
			

<div align="center"></div>
<table width="92%" border="0" align="center" class="nav3">
  <tr> 
    <td width="50%"><form name="form2" method="post" action="../inc/AbandonarSistema.php">
        <div align="center"> 
          <input name="salir" type="submit" class="bodymenubold" id="salir del sistema3" value="Salir del sistema">
          <input name="login" type="hidden" id="login22" value="<?php echo $login; ?>">
        </div>
      </form></td>
    <td width="50%"><form name="form3" method="post" action="../inc/RedireccionarMenu.php">
        <div align="center"> 
          <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Volver al MENU sin guardar">
          <input name="login" type="hidden" id="login23" value="<?php echo $login; ?>">
        </div>
      </form></td>
  </tr>
</table>
<p>&nbsp;</p>
<?php
			$this -> PieForm();
		}
	}
?>
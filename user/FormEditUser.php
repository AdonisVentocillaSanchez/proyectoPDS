<?php // desde ControlSelectEditUser.php
	include_once('../inc/Pagina.inc');
	include_once('../inc/TableroLetras.inc');
	class FormEditUser extends Pagina
	{
		public function MostrarFormEditUser($login,$DatosUsuario,$ListaPrivilegios,$ListaPrivilegiosUsuario,$mensaje)
		{
			$this->NoClickDerecho();
			$this -> EncabezadoForm("Edición de datos de usuario - Usuario: '$login'","");
			$OBJTablero = new TableroLetras;
?>
<script LANGUAGE="JavaScript">
			function checkFields() 
			{
				missinginfo = "";
				if (document.form.nombre.value.length  < 3 ){	missinginfo += "\n     -  Nombre (minimo 3 caracteres)";}
				if (document.form.apellidoPaterno.value.length < 3) {	missinginfo += "\n     -  Apellido Paterno(minimo 3 caracteres)";}
				if (document.form.apellidoMaterno.value.length < 3) {	missinginfo += "\n     -  Apellido Materno (minimo 3 caracteres)";}
				if(document.form.password.value.length >0 && document.form.password.value.length <4)
				{
					missinginfo += "\n     -  Password (minimo 4 numeros)  ";						
				}
				if (document.form.password.value != document.form.Repassword.value)	 {	missinginfo += "\n     -  El password y su Confirmación no son iguales  ";					 }
				if (document.form.respuestaSecreta.value.length <3) {	missinginfo += "\n     -  Respuesta Secreta (minimo 3 caracteres)";}
					
				
				
				if (missinginfo != "") 
				{
					missinginfo ="_____________________________\n" + "los siguientes datos son invalidos:\n" + 
					missinginfo + "\n_____________________________" + "\n¡Por favor pulsa enter, rellena los datos y prueba de nuevo!";
					alert(missinginfo);
					return false;
				}
				else 
					return true;
			}			
			</script>
			<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
			
				
            <style type="text/css">
<!--
.Estilo1 {
	font-size: 12px;
	font-weight: bold;
}
.Estilo2 {font-size: 12px}
.Estilo3 {font-size: 10px}
-->
            </style>
            <form name="form" method="post" onSubmit=" return checkFields();" action="GetEditUser.php">

<table width="75%" border="0" align="center" class="nav3">
  <tr> 
      <td height="24" colspan="4"><div align="center"><font color="#FF0000" size="2" face="Arial, Helvetica, sans-serif"></font></div></td>
  </tr>
  <tr> 
    <td height="31" colspan="4"> <div align="center" class="titsec1"><font size="2" face="Arial, Helvetica, sans-serif"><strong>ACTUALIZACION 
        DE DATOS DE: 
        <? $cadena = $DatosUsuario[0]['nombre']." ".$DatosUsuario[0]['apellidoPaterno']." ".$DatosUsuario[0]['apellidoMaterno'];
		  echo strtoupper($cadena);?>
        <input name="login" type="hidden" id="login" value="<? echo $login; ?>">
        </strong></font></div></td>
  </tr>
  <tr> 
    <td width="5%"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    <td width="23%"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
      <td width="46%"><div align="center" class="prod_golive"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font><font color="#FF0000" size="2" face="Arial, Helvetica, sans-serif"><strong><?php echo $mensaje;?></strong></font></div></td>
    <td width="26%"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
  </tr>
  <tr> 
    <td colspan="4"><div align="center" class="titsec1"><font size="2" face="Arial, Helvetica, sans-serif"><strong>Datos 
        Generales</strong></font></div></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">Nombres:</font></strong></td>
    <td><font size="2" face="Arial, Helvetica, sans-serif"> 
      <input name="nombre" type="text" class="nav2" id="nombre" value="<? echo $DatosUsuario[0]['nombre']?>" size="50">
      </font></td>
    <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">Apellido Paterno:</font></strong></td>
    <td><font size="2" face="Arial, Helvetica, sans-serif"> 
      <input name="apellidoPaterno" type="text" class="nav2" id="apellidoPaterno" value="<? echo $DatosUsuario[0]['apellidoPaterno']?>" size="50">
      </font></td>
    <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">Apellido Materno:</font></strong></td>
    <td><font size="2" face="Arial, Helvetica, sans-serif"> 
      <input name="apellidoMaterno" type="text" class="nav2" id="apellidoMaterno" value="<? echo $DatosUsuario[0]['apellidoMaterno']?>" size="50">
      </font></td>
    <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    <td class="menuhmlft2linesbold">&nbsp;</td>
    <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
  </tr>
  <tr class="menuhmlft2linesbold"> 
    <td colspan="4"><div align="center"><font color="#FF0000" size="2" face="Arial, Helvetica, sans-serif"></font></div></td>
  </tr>
  <tr> 
    <td colspan="4"> <div align="center" class="titsec1"><font size="2" face="Arial, Helvetica, sans-serif"><strong>Datos 
        de Acceso al Sistema</strong></font></div></td>
  </tr>
  <tr> 
    <td height="20"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    <td class="menuhmlft2linesbold"><strong></strong></td>
    <td><font size="2" face="Arial, Helvetica, sans-serif" class="subheadingbold"> <strong><font size="1">El 
      Login no se cambiar&aacute;</font></strong></font></td>
    <td rowspan="4"><div align="center" class="titsec1"><font size="1" face="Arial, Helvetica, sans-serif">&nbsp;<strong> 
        Password </strong></font></div>
      <div align="center"> 
        <?php $OBJTablero -> mostrarTableroNumeros("password","BP_"); ?>
      </div></td>
  </tr>
  <tr> 
    <td height="21">&nbsp;</td>
    <td class="menuhmlft2linesbold">Login:</td>
    <td><font size="2" face="Arial, Helvetica, sans-serif"> 
      <input name="loginUser" type="text" class="nav2" id="loginUser2" value="<? echo $DatosUsuario[0]['login'] ?>" size="20" readonly="true">
      </font></td>
  </tr>
  <tr> 
    <td></td>
    <td class="menuhmlft2linesbold Estilo2">&nbsp;</td>
    <td class="subheadingbold Estilo3"><strong>Deje en blanco 
      para no acmbiar su antiguo password</strong></font></td>
  </tr>
  <tr> 
    <td height="48">&nbsp;</td>
    <td class="menuhmlft2linesbold"><span class="Estilo1"><font face="Arial, Helvetica, sans-serif">Password:
        <input name="passwordAnterior" type="hidden" id="passwordAnterior" value="<? echo  $DatosUsuario[0]['password'] ?>">
      </font></span></td>
    <td><font size="2" face="Arial, Helvetica, sans-serif"> 
        <input name="password" type="password" class="nav2" id="password" readonly="true">
      </font></td>
  </tr>
  <tr> 
    <td height="40"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    <td class="menuhmlft2linesbold">Re ingrese 
      su password:</td>
    <td><font size="2" face="Arial, Helvetica, sans-serif"> 
        <input name="Repassword" type="password" class="nav2" id="Repassword" readonly="true">
      </font></td>
    <td rowspan="3"> <div align="center" class="titsec1"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp; 
        Confirme su Password </strong></font></div>
      <div align="center"> <strong><font size="1" face="Arial, Helvetica, sans-serif"> 
        <?php $OBJTablero -> mostrarTableroNumeros("Repassword","RP_"); ?>
        </font></strong></div></td>
  </tr>
  <tr> 
    <td height="26"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    <td class="menuhmlft2linesbold">Pregunta Secreta:</td>
    <td><font size="2" face="Arial, Helvetica, sans-serif"> 
      <?
	  		$vectorPreguntas = array("¿Cómo se llama mi mascota?","¿Dónde nacio mi abuelo paterno?","¿Cómo se llama mi actor(actriz) favorito(a)?",
						             "¿Cómo le digo a mi mamá de cariño?","¿Qué apodo le puse a mi hermana?","¿Cúando es mi aniversario?",
									 "¿Cómo le digo a mi esposa(o) de cariño?");
			
	  ?>
      <select name="preguntaSecreta" class="nav2" id="preguntaSecreta">
        <?
			echo " <option value='".$DatosUsuario[0]['preguntaSecreta']."'>".$DatosUsuario[0]['preguntaSecreta']."</option>";
			for($i=0;$i<count($vectorPreguntas);$i++)
			{
				echo " <option value='".$vectorPreguntas[$i]."'>".$vectorPreguntas[$i]."</option>";
			}
		?>
      </select>
      </font></td>
  </tr>
  <tr> 
    <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    <td class="menuhmlft2linesbold">Respuesta Secreta:</td>
    <td><font size="2" face="Arial, Helvetica, sans-serif"> 
      <input name="respuestaSecreta" type="text" class="nav2" id="respuestaSecreta" value="<? echo $DatosUsuario[0]['respuestaSecreta']?>" size="40">
      </font></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td class="menuhmlft2linesbold Estilo3">Estado del Usuario:</td>
    <td> 
      <select name="estadoUsuario" class="nav2" id="estadoUsuario">
<?php 
	if($DatosUsuario[0]['estadoUsuario']==1) $estado ="activo";
	else $estado = "suspendido";	
	echo " <option value='".$DatosUsuario[0]['estadoUsuario']."'>".$estado."</option>";?>
        <option value="1">activo</option>
        <option value="2">suspendido</option>
      </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td class="menuhmlft2linesbold">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
  </tr>
  <tr> 
    <td colspan="4"><div align="center" class="titsec1"><font size="2" face="Arial, Helvetica, sans-serif"><strong>Privilegios 
        de Acceso en el Sistema</strong></font></div></td>
  </tr>
  <tr> 
    <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    <td colspan="3"><table width="95%" border="0" align="center">
        <tr bgcolor="#EAEAEA"> 
          <td width="10%">&nbsp;</td>
          <td width="27%"> <div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif">Privilegio</font></strong></div></td>
          <td width="26%"> <div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif">Categoria</font></strong></div></td>
          <td width="37%"> <div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif">Nota</font></strong></div></td>
        </tr>
        <?
		  		for($i = 0; $i < count($ListaPrivilegios); $i++ )
				{
					//comprando listas $ListaPrivilegios,$ListaPrivilegiosUsuario
					//" checked";
					$chk="";
					for($j = 0; $j < count($ListaPrivilegiosUsuario); $j++)
					{
						if($ListaPrivilegios[$i]['idPrivilegio'] == $ListaPrivilegiosUsuario[$j]['idPrivilegio'])
						{
							$chk=" checked";
							break;	
						}
					}
					if($i % 2 != 0) $estilo =" class='inputbts'";
					else $estilo="";
					echo "<tr>";
					echo "<td".$estilo."><input name='newPrivilegio[]' type='checkbox' id='newPrivilegio' value='".$ListaPrivilegios[$i]['idPrivilegio']."'".$chk."></td>";
					echo "<td".$estilo.">".$ListaPrivilegios[$i]['labelPrivilegio']."</td>";
					echo "<td".$estilo.">".$ListaPrivilegios[$i]['categoriaPrivilegio']."</td>";
					echo "<td".$estilo.">".$ListaPrivilegios[$i]['nota']."</td>";
					echo "</tr>";					
				}
		  ?>
      </table></td>
    </tr>
  </table>
  <br>
  <table width="75%" border="0" align="center" class="nav3">
    <tr> 
      <td width="50%"> <center>
        </center></td>
      <td width="50%"><div align="center"> 
          <input name="ActualizarUser" type="submit" class="bodymenubold" id="ActualizarUser" value="Actualizar Datos">
        </div></td>
    </tr>
  </table>			
 
</form>
  </tr>
</table>
			<p>&nbsp;</p><table width="75%" border="0" align="center" class="nav3">
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
<?php
			echo "<br>Usuario: ".$login;
			$this -> PieForm();
		}
	}
?>
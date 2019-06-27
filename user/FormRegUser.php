<?php
	// desde ControlRehUserMain.php
	include_once('../inc/Pagina.inc');
	include_once('../inc/TableroLetras.inc');
	class FormRegUser extends Pagina
	{
		public function MostrarFormRegUser($login,$ListaPrivilegios,$valores) //valores puede ser vacio
		{
			
			if(strcmp($valores['nombre'],"")==0)
				$cadena="";
			else
				$cadena="document.form.nombre.focus();";
			$this->NoClickDerecho();
			$this -> EncabezadoForm("Registro de Usuario del Sistema - Usuario: '$login'",$cadena);
			$OBJTablero = new TableroLetras;			
?> 
		<script LANGUAGE="JavaScript">
		 function checkFields() 
			{
				missinginfo = "";
				if (document.form.nombre.value.length  < 3 ){	missinginfo += "\n     -  Nombre (minimo 3 caracteres)";}
				if (document.form.apellidoPaterno.value.length <3) {	missinginfo += "\n     -  Apellido Paterno(minimo 3 caracteres)";}
				if (document.form.apellidoMaterno.value.length <3) {	missinginfo += "\n     -  Apellido Materno (minimo 3 caracteres)";}
				if (document.form.newLogin.value.length <5) {	missinginfo += "\n     -  Login (minimo 5 caracteres)";}
				if (document.form.password.value.length <4) {	missinginfo += "\n     -  Password (minimo 4 numeros)  ";}
				//if (document.form.Repassword.value.length <4)) {	missinginfo += "\n     -  Confirmación de Password (minimo 4 numeros) ";}
				if (document.form.password.value != document.form.Repassword.value) {	missinginfo += "\n     -  El password y su Confirmación no son iguales  ";}
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
			//  End -->
			</script>
			<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
			
	
			<form name="form" method="post" onSubmit="return checkFields();" action="GetRegUser.php">
				
  <table width="73%" border="0" align="center" class="nav3">
    <tr> 
      <td height="24" colspan="4">&nbsp;</td>
    </tr>
    <tr> 
      <td height="31" colspan="4"> <div align="center" class="titsec1"><font size="2" face="Arial, Helvetica, sans-serif"><strong>REGISTRO 
          DE NUEVO USUARIO DEL SISTEMA 
          <input name="login" type="hidden" id="login" value="<? echo $login; ?>">
          </strong></font></div></td>
    </tr>
    <tr> 
      <td width="5%"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
      <td width="23%"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
      <td width="46%"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
      <td width="26%"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    </tr>
    <tr> 
      <td colspan="4"><div align="center" class="titsec1"><font size="2" face="Arial, Helvetica, sans-serif"><strong>Datos 
          Generales</strong></font></div></td>
    </tr>
    <tr> 
      <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
      <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">Nombres:</font></strong></td>
      <td><font size="2" face="Arial, Helvetica, sans-serif"> 
        <input name="nombre" type="text" class="nav2" id="nombre"  value="<? echo $valores['nombre']?>" size="50">
        </font></td>
      <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    </tr>
    <tr> 
      <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
      <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">Apellido 
        Paterno:</font></strong></td>
      <td><font size="2" face="Arial, Helvetica, sans-serif"> 
        <input name="apellidoPaterno" type="text" class="nav2" id="apellidoPaterno" value="<? echo $valores['apaterno']?>" size="50">
        </font></td>
      <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    </tr>
    <tr> 
      <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
      <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">Apellido 
        Materno:</font></strong></td>
      <td><font size="2" face="Arial, Helvetica, sans-serif"> 
        <input name="apellidoMaterno" type="text" class="nav2" id="apellidoMaterno" value="<? echo $valores['amaterno']?>" size="50">
        </font></td>
      <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    </tr>
    <tr> 
      <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
      <td>&nbsp;</td>
      <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
      <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
    </tr>
    <tr> 
      <td colspan="4"><center><?php echo $valores['mensajeError'];?></center></td>
    </tr>
    <tr> 
      <td colspan="4"> <div align="center" class="titsec1"><font size="2" face="Arial, Helvetica, sans-serif"><strong>Datos 
          de Acceso al Sistema</strong></font></div></td>
    </tr>
    <tr> 
      <td height="43"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
      <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">Login: </font></strong></td>
      <td><font size="2" face="Arial, Helvetica, sans-serif"> 
        <input name="newLogin" type="text" class="nav2" id="newLogin" size="30">
        </font></td>
      <td rowspan="2"><div align="center" class="titsec1"><font size="1" face="Arial, Helvetica, sans-serif">&nbsp;<strong> 
          Password </strong></font></div>
        <div align="center"> 
          <?php $OBJTablero -> mostrarTableroNumeros("password","BP_"); ?>
        </div> </td>
    </tr>
    <tr> 
      <td><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
      <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">Password:</font></strong></td>
      <td><font size="2" face="Arial, Helvetica, sans-serif"> 
        <input name="password" type="password" class="nav2" id="password" readonly="true">
        </font></td>
    </tr>
    <tr> 
      <td height="39"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
      <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">Re ingrese 
        su password:</font></strong></td>
      <td><font size="2" face="Arial, Helvetica, sans-serif"> 
        <input name="Repassword" type="password" class="nav2" id="Repassword" readonly="true">
        </font></td>
      <td rowspan="2"> <div align="center" class="titsec1"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp; 
          Confirme su Password </strong></font></div>
        <div align="center"> <strong><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php $OBJTablero -> mostrarTableroNumeros("Repassword","RBP_"); ?>
          </font></strong></div></td>
    </tr>
    <tr> 
      <td height="26"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
      <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">Pregunta 
        Secreta:</font></strong></td>
      <td><font size="2" face="Arial, Helvetica, sans-serif"> 
        <?
	  		$vectorPreguntas = array("¿Cómo se llama mi mascota?","¿Dónde nacio mi abuelo paterno?","¿Cómo se llama mi actor(actriz) favorito(a)?",
						             "¿Cómo le digo a mi mamá de cariño?","¿Qué apodo le puse a mi hermana?","¿Cúando es mi aniversario?",
									 "¿Cómo le digo a mi esposa(o) de cariño?");
			
	  ?>
        <select name="preguntaSecreta" class="nav2" id="preguntaSecreta">
          <?
			if(strcmp($valores['psecreta'],"")!=0)
			{
				echo " <option value='".$valores['psecreta']."'>".$valores['psecreta']."</option>";
			}
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
      <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">Respuesta 
        Secreta:</font></strong></td>
      <td><font size="2" face="Arial, Helvetica, sans-serif"> 
        <input name="respuestaSecreta" type="text" class="nav2" id="respuestaSecreta" value="<? echo $valores['rsecreta']?>" size="40">
        </font></td>
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
            <td width="10%" class="titsec1">&nbsp;</td>
            <td width="27%" class="titsec1"> 
            <div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif">Privilegio</font></strong></div></td>
            <td width="26%" class="titsec1"> 
            <div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif">Categoria</font></strong></div></td>
            <td width="37%" class="titsec1"> 
            <div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif">Nota</font></strong></div></td>
          </tr>
          <?
		  		for($i = 0; $i < count($ListaPrivilegios); $i++ )
				{
					if($i % 2 != 0) $estilo =" class='inputbts'";
					else $estilo="";
					//este if control los check activados por defecto, segun idPrivilegio
					if ($ListaPrivilegios[$i]['idPrivilegio'] == 1 or $ListaPrivilegios[$i]['idPrivilegio'] == 9) $chk =" checked";
					else $chk ="";
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
  <table width="73%" border="0" align="center" class="nav3">
    <tr> 
      <td width="50%"> <center>
        </center></td>
      <td width="50%"><div align="center"> 
          <input name="guardarUser" type="submit" class="bodymenubold" id="guardarUser" value="Guardar Usuario">
        </div></td>
    </tr>
  </table>			
 
</form>
<table width="73%" border="0" align="center" class="nav3">
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
<?php
			echo "<br>Usuario: ".$login;
			$this -> PieForm();
		}
	}
?>
</p>

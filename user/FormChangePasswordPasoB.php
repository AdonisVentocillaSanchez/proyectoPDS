<?php  //FormChangePasswordPasoB.php  desde GetChangePasswordPasoA
	include_once('../inc/Pagina.inc');
	include_once('../inc/TableroLetras.inc');
	class FormChangePasswordPasoB extends Pagina
	{
		public function MostrarFormChangePasswordPasoB($login,$flag_procedencia,$mensaje)
		{
			$this->NoClickDerecho();
			$this -> EncabezadoForm("Cambio de clave - Usuario: '$login'","");
			$OBJTablero = new TableroLetras;
?>
			<script LANGUAGE="JavaScript">
			function checkFields() 
			{
				missinginfo = "";
				if (document.form.password.value.length <4) 
				{	
					document.form.password.value="";
					document.form.Repassword.value="";
					missinginfo += "\n     -  Password (minimo 4 numeros)  ";
				}
				//if (document.form.Repassword.value.length <4)) {	missinginfo += "\n     -  Confirmación de Password (minimo 4 numeros) ";}
				if (document.form.password.value != document.form.Repassword.value) 
				{
					document.form.password.value="";
					document.form.Repassword.value="";				
					missinginfo += "\n     -  El password y su Confirmación no son iguales  ";
				}
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
			
			<p>&nbsp;</p>
			<form name="form" method="post" onSubmit="return checkFields();" action="GetChangePasswordPasoB.php">
			
  <table width="75%" align="center" class="nav3">
    
    <tr> 
      <td colspan="3"> <div align="center" class="titsec1"><strong><font face="Arial, Helvetica, sans-serif">INGRESE 
          SU NUEVO PASSWORD: <?php echo $login ?></font></strong></div></td>
    </tr>
    <tr> 
      <td colspan="3"><div align="center" class="titsec1"><strong><font size="2" face="Arial, Helvetica, sans-serif">La 
          respuesta coincidi&oacute;</font></strong></div></td>
    </tr>
    
    <tr>
      <td colspan="3"><div align="center"><font color="#FF0000" size="2" face="Arial, Helvetica, sans-serif"><strong><?php echo $mensaje; ?></strong></font></div></td>
    </tr>
    
    <tr> 
      <td width="199" class="menuhmlft2linesbold"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Nuevo 
        Password:</strong></font></td>
      <td width="188"><div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
        <input name="password" type="password" class="nav2" id="password" readonly="true">
      </font></strong></div></td>
      <td> 
        <div align="center">
          <?php $OBJTablero -> mostrarTableroNumeros("password","BPA_")?>      
        </div></td>
    </tr>
    <tr> 
      <td class="menuhmlft2linesbold"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr> 
      <td class="menuhmlft2linesbold"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Confirme 
        el Password:</strong></font></td>
      <td><div align="center">
        <input name="Repassword" type="password" class="nav2" id="Repassword" readonly="true">
      </div></td>
      <td> 
        <div align="center">
          <?php $OBJTablero -> mostrarTableroNumeros("Repassword","BPB_")?>      
        </div></td>
    </tr>
    <tr> 
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></td>
      <td colspan="2"><div align="center"></div></td>
    </tr>
    <tr> 
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input name="login" type="hidden" id="login" value="<?php echo $login; ?>" />
        <input name="flag_procedencia" type="hidden" id="flag_procedencia" value="<? echo $flag_procedencia; ?>">
        </font></td>
      <td>&nbsp;</td>
      <td><div align="center">
        <input name="cambiar" type="submit" class="bodymenubold" id="cambiar" value="Cambiar Password" />
      </div></td>
    </tr>
  </table>
			</form>
			<?php
				if($flag_procedencia==1)
				{
			?>
			
<table width="75%" border="0" align="center" class="nav3">
  <tr> 
    <td width="54%"><form name="form2" method="post" action="../inc/AbandonarSistema.php">
        <div align="center"> 
          <input name="salir" type="submit" class="bodymenubold" id="salir del sistema3" value="Salir del sistema">
          <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
        </div>
    </form></td>
    <td width="46%"><form name="form3" method="post" action="../inc/RedireccionarMenu.php">
        <div align="center"> 
          <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Volver al MENU sin guardar">
          <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
        </div>
    </form></td>
  </tr>
</table>
<p>&nbsp; </p>
<p>
  <?php	
			}
			else
			{			
			?>
							<br>
							<form name="form1" method="post" action="../inc/RegIndex.php">
							  <div align="center">
								<input name="Submit" type="submit" class="bodymenubold" value="Regresar al Inicio">
							  </div>
							</form>
			<?php
			}		
		}
	}
?>
</p>

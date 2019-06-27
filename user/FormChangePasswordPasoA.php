<?php  //FormChangePasswordPasoA.php  desde ControlChangePasswordMain
	include_once('../inc/Pagina.inc');
	include_once('../inc/TableroLetras.inc');
	class FormChangePasswordPasoA extends Pagina
	{
		public function MostrarFormChangePasswordPasoA($login,$flag_procedencia,$DatosUsuario,$mensaje)
		{
			$this->NoClickDerecho();
			$cadena="document.form.RespuestaIngresada.focus();";
			$this -> EncabezadoForm("Cambio de clave - Usuario: '$login'",$cadena);
			$OBJTablero = new TableroLetras;
?>
			<script LANGUAGE="JavaScript">
			function checkFields() 
			{
				missinginfo = "";
				if (document.form.RespuestaIngresada.value.length <3) {	missinginfo += "\n     -  Resuesta(minimo 3 caracteres)  ";}
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
			<form name="form" method="post" onSubmit="return checkFields();" action="GetChangePasswordPasoA.php">
			
  <table width="70%" height="4%" align="center" class="nav3">
    
    <tr> 
      <td height="22" colspan="2"> <div align="center" class="titsec1"><strong><font face="Arial, Helvetica, sans-serif">LA 
          PREGUNTA SECRETA DE: <?php echo $login ?></font></strong></div></td>
    </tr>
    
    <tr>
      <td height="20" colspan="2"><div align="center"><font color="#FF0000" size="2" face="Arial, Helvetica, sans-serif"><strong><?php echo $mensaje; ?></strong></font></div></td>
    </tr>
    
    <tr> 
      <td width="175" height="23" class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">Responda 
        la pregunta: </font></strong></td>
      <td width="275">        <div align="left" class="subheadingbold"><?php echo $DatosUsuario[0]['preguntaSecreta']?>        
        </div></td>
    </tr>
    <tr> 
      <td height="24" class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">Su Respuesta 
        aqu&iacute;:</font></strong></td>
      <td><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
        <input name="RespuestaIngresada" type="text" class="nav2" id="RespuestaIngresada" size="40">
        </font></strong></td>
    </tr>
    <tr> 
      <td height="21"><input name="flag_procedencia" type="hidden" id="flag_procedencia" value="<? echo $flag_procedencia; ?>"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td><input name="RespuestaSecreta" type="hidden" id="RespuestaSecreta" value="<? echo  $DatosUsuario[0]['respuestaSecreta'] ?>" />
      <input name="login" type="hidden" id="login" value="<?php echo $login; ?>" /></td>
      <td><div align="right"> 
          <input name="aceptar" type="submit" class="bodymenubold" id="aceptar" value="Comparar Respuesta">
        </div></td>
    </tr>
  </table>
			</form>
			<?
				if($flag_procedencia==1)//1 viene del menu, 0 veine de afuera
				{			
			?>
<table width="70%" border="0" align="center" class="nav3">
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

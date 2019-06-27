
<?		//FormInsertSede.php desde ControlInsertSedes.php
	include_once('../inc/Pagina.inc');
	class FormInsertSede extends Pagina
	{
		public function MostrarFormInsertSedes($login,$listaSedes,$listaSedesActivas,$msj)
		{
			
			$this->NoClickDerecho();
			$cadena="document.formx.nombreSede.focus();";
			$this -> EncabezadoForm("Registro de Sedes - Usuario: '$login'",$cadena);
			
			?>
			
				<script LANGUAGE="JavaScript">
				function checkFields() {
				missinginfo = "";
				if (document.formx.nombreSede.value == ""){	missinginfo += "\n     -  Nombre de la Sede";}
				if (document.formx.direccionSede.value == "") {	missinginfo += "\n     -  Dirección de la Sede";}
				if (document.formx.cantidadAulasSede.value == "") {	missinginfo += "\n     -  Cantidad de aulas";}
				if (document.formx.cantidadPostulantesAulaSede.value == "") {	missinginfo += "\n     -  Cantidad de postulantes por aula";}
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
				/**************/
				function Solo_Numerico(variable){
					Numer=parseInt(variable);
					if (isNaN(Numer)){
						return "";
					}
					return Numer;
				}
				function ValNumero(Control){
					Control.value=Solo_Numerico(Control.value);
				}
				</script>
				<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
			  <table width="75%" border="0" align="center" class="nav3">
				<tr> 
				  <td colspan="2"><div align="center" class="titsec1">Administraci&oacute;n 
					  de las Sedes para el Proceso de Admisi&oacute;n</div></td>
				</tr>
				<tr> 
				  <td colspan="2"><div align="center" class="inputbts">Seleccione una 
					  sede para cambiar sus datos o estado</div></td>
				</tr>
				<tr> 
				  <td height="41" colspan="2">
	  			<table width="95%" border="0" align="center" class="nav3">
        <tr> 
          <td width="10%" class="inputbts"><div align="center">Presionar para editar </div></td>
          <td width="27%" class="inputbts"> 
            <div align="center">Nombre <br>
          de la Sede</div></td>
          <td width="25%" class="inputbts"> 
            <div align="center">Dirección <br>
          de la Sede</div></td>
          <td width="12%" class="inputbts"> 
            <div align="center">Numero <br>
          de Aulas</div></td>
          <td width="17%" class="inputbts"> 
            <div align="center">Numero de <br>
          Postulantes por aula</div></td>
          <td width="9%" class="inputbts"><div align="center">Estado</div></td>
        </tr>
        <?
		  		for($i = 0; $i < count($listaSedes); $i++ )
				{
					echo "<tr>";
					echo "<td>"; //el form
					?>
        <form name="form" method="post" action="GetEditSede.php">
          <input type="submit" name="EditSede" class="bodysmallbold" value="...">
          <input name="login" type="hidden" id="login" value="<?  echo $login; ?>">
          <input name="idSede" type="hidden" id="idSede" value="<?  echo $listaSedes[$i]['idSede']; ?>">
        </form>
        <?php
					echo "</td>";//fin del form
					echo "<td>".strtoupper($listaSedes[$i]['nombreSede'])."</td>";
					echo "<td>".ucwords($listaSedes[$i]['direccionSede'])."</td>";
					echo "<td><center>".$listaSedes[$i]['cantidadAulasSede']."</center></td>";
					echo "<td><center>".$listaSedes[$i]['cantidadPostulantesAulaSede']."</center></td>";
					if($listaSedes[$i]['estadoSede'] == 1)  $estado ="activo";
					else $estado ="inactivo";
					echo "<td><center>".$estado."</center></td>";
					echo "</tr>";					
				}
		  		?>
      </table>
				</td>
				</tr>
			  </table>
			  <br>
		  	 <form name="formx"  onSubmit="return checkFields()" method="post"  action="GetRegistrarSede.php">
			 
  <table width="75%" align="center" class="nav3">
    <tr> 
      <td colspan="3"><div align="center" class="titsec1">REGISTRO DE NUEVA SEDE</div></td>
    </tr>
    <tr> 
      <td width="3%" class="menuhmlft2linesbold">1.</td>
      <td width="50%" class="menuhmlft2linesbold">Nombre/denominaci&oacute;n de 
        Sede:</td>
      <td width="47%"><input name="nombreSede" type="text" class="nav2" id="nombreSede" size="55"></td>
    </tr>
    <tr> 
      <td class="menuhmlft2linesbold">2.</td>
      <td class="menuhmlft2linesbold">Diirecci&oacute;n/referencia de la Sede:</td>
      <td><input name="direccionSede" type="text" class="nav2" id="direccionSede" size="55"></td>
    </tr>
    <tr> 
      <td class="menuhmlft2linesbold">3.</td>
      <td class="menuhmlft2linesbold">N&uacute;mero de aulas con que cuenta la 
        Sede:</td>
      <td> <input name="cantidadAulasSede" type="text" class="nav2" id="cantidadAulasSede" size="10" onkeyUp="return ValNumero(this);">
        (solo n&uacute;meros enteros) </td>
    </tr>
    <tr> 
      <td class="menuhmlft2linesbold">4.</td>
      <td class="menuhmlft2linesbold">Cantidad de Postulantes que alberga un (01) 
        aula de la Sede:</td>
      <td><input name="cantidadPostulantesAulaSede" type="text" class="nav2" id="cantidadPostulantesAulaSede" size="10" onkeyUp="return ValNumero(this);">
        (solo n&uacute;meros enteros) </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="login" type="hidden" id="login" value="<?php echo $login; ?>"></td>
      <td><div align="center">
          <input name="RegSedeNew" type="submit" class="bodymenubold" id="RegSedeNew" value="Registrar la Nueva Sede">
        </div></td>
    </tr>
  </table>
			 </form>
			<br>

<table width="75%" border="0" align="center" class="nav3">
  <tr> 
    <td width="53%"><form name="form2" method="post" action="../inc/AbandonarSistema.php">
        <div align="center"> 
          <input name="salir" type="submit" class="bodymenubold" id="salir del sistema3" value="Salir del sistema">
          <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
        </div>
      </form></td>
    <td width="47%"><form name="form3" method="post" action="../inc/RedireccionarMenu.php">
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
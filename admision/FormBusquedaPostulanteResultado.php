<?php //FormBusquedaPostulanteResultado.php  desde ControlInsertResultadoTradicional.php
	include_once('../inc/Pagina.inc');
	class FormBusquedaPostulanteResultado extends Pagina
	{
		public function MostrarFormBusquedaPostulanteResultado($login,$ListaID,$mensaje)
		{
			$this->NoClickDerecho();
			$this -> EncabezadoForm("Busqueda de postulante para ingreso de datos - Usuario: '$login'","");
?>
<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />

<br>
 
<form name="form1" method="post" action="GetBusquedaPostulanteResultado.php">
  <table width="75%" border="1" align="center" class="nav3">
    <tr> 
      <td colspan="3"><div align="center" class="titsec1">B&uacute;squeda de Postulante 
          por C&oacute;digo Para Ingreso de Resultados</div></td>
    </tr>
    <tr> 
      <td colspan="3"><div align="center">
        <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
       
          <? 
	  	if(strcmp($mensaje,"")==0)
		{
			$mensaje="correcto";
			$estilo ="class='prod_dreamweaver'";
		}
		else
		{
			$estilo ="class='prod_golive'";
		}
		?>
	   <span <? echo $estilo; ?>>
          
        <? echo $mensaje; ?>
      </span></div></td>
    </tr>
    <tr> 
      <td width="42%" class="menuhmlft2linesbold">Ingrese C&oacute;digo de Postulante:</td>
      <td width="39%">
	  <select name="idPostulante" class="nav2" id="idPostulante">
          <?php
	   		for($i=0;$i<count($ListaID);$i++)
			{ 
	   	   			echo "<option value='".$ListaID[$i]."'>".$ListaID[$i]."</option>"; 
			} 
		?>
        </select></td>
      <td width="19%"><div align="center">
          <input name="MostrarPostulante" type="submit" class="bodymenubold" id="MostrarPostulante" value="MOSTRAR DATOS">
        </div></td>
    </tr>
  </table>
</form>

<br>
<br>
<table width="75%" border="0" align="center" class="nav3">
  <tr> 
    <td width="50%"><form name="form2" method="post" action="../inc/AbandonarSistema.php">
        <div align="center"> 
          <input name="salir" type="submit" class="bodymenubold" id="salir del sistema3" value="Salir del sistema">
          <input name="login" type="hidden" id="login22" value="<?php echo $login; ?>">
        </div>
      </form></td>
    <td width="50%"><form name="form3" method="post" action="../inc/RedireccionarMenu.php">
        <div align="center"> 
          <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Volver al MENU PRINCIPAL">
          <input name="login" type="hidden" id="login23" value="<?php echo $login; ?>">
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
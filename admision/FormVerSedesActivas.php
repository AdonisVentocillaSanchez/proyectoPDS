
<?php //  FormVerSedesActivas desde ControlSedeActiva.php
	include_once('../inc/Pagina.inc');
	class FormVerSedesActivas extends Pagina
	{
		public function MostrarFormVerSedesActivas($login,$ListaSedes,$TotalPostulantes,$mensaje)
		{
			//session_start();
			//echo $ListaCarreras[2][1];
			$this->NoClickDerecho();
			$this -> EncabezadoForm("Selección de Sedes - Usuario: '$login'","");
			//echo $login;
			?>

<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />

		
			<form name="form" method="post"   action="GetSedesSeleccionadas.php" >
  <table width="92%" border="0" align="center" class="nav3">
    <tr> 
      <td colspan="7"><div align="center" class="titsec1">Listado de Sedes Activas: 
          selecione aquellas que se emplear&aacute;n para el proceso de admisi&oacute;n</div></td>
    </tr>
    <tr> 
      <td colspan="7" class="titsec1"><div align="center">SON 
          <input name="TotalPostulantes2" type="text" class="nav2" id="TotalPostulantes2" value="<? echo  $TotalPostulantes; ?>" size="10" readonly="true">
          POSTULANTES EN TOTAL</div></td>
    </tr>
    <tr> 
      <td colspan="7"><div align="center" class="nav2"><?php echo $mensaje;?></div></td>
    </tr>
    <? 
	$acuTotalCapacidad = 0;
	for($i=0;$i<count($ListaSedes);$i++)
	{?>
    <tr> 
      <td width="4%"><div align="center"> <? echo $i+1 .". "; ?></div></td>
      <td width="19%"><? echo strtoupper($ListaSedes[$i]['nombreSede']) ?></td>
      <td width="20%"><? echo strtoupper($ListaSedes[$i]['direccionSede']) ?></td>
      <td width="15%">CANT. AULAS : <? echo $ListaSedes[$i]['cantidadAulasSede']?></td>
      <td width="21%">CAPACIDAD DE AULA : <? echo $ListaSedes[$i]['cantidadPostulantesAulaSede']?></td>
      <td colspan="2">TOTAL POSTULANTES EN SEDE: <? echo $ListaSedes[$i]['cantidadAulasSede'] * $ListaSedes[$i]['cantidadPostulantesAulaSede']?></td>
    </tr>
    <? 
			$acuTotalCapacidad+= ($ListaSedes[$i]['cantidadAulasSede'] * $ListaSedes[$i]['cantidadPostulantesAulaSede']);
	}?>
    <tr> 
      <td height="23" colspan="5" class="nav2"><div align="right">CAPACIDAD TOTAL 
          DE PARA ALBERGAR POSTULANTES </div></td>
      <td height="23" colspan="2" class="titsec1"> <div align="center"><font size="3"> 
          <? 	echo $acuTotalCapacidad; 
		  	  //$TotalPostulantes=125463;
	  		if($acuTotalCapacidad>=$TotalPostulantes)
			{
				$msj = "OBS: EXISTEN SUFICIENTES SEDES";
			}
			else
			{
				$msj ="OBS: FALTAN SEDES, LA CAPCIDAD TOTAL ES MENOR AL NUMERO DE POSTULANTES";
			}
	  
	  ?>
          </font></div></td>
    </tr>
    <tr> 
      <td height="23" colspan="7"> <div align="right" class="bodymenubold"> 
          <?php
	   echo $msj;
	  
	  ?>
        </div></td>
    </tr>
    <tr> 
      <td height="23" colspan="7"> <div align="center"> </div>
        <div align="center"> 
          <input name="ContDistricionPostulantes" type="submit" class="bodymenubold" id="ContDistricionPostulantes" value="Continuar con la distribuci&oacute;n">
          <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
          <input name="acuTotalCapacidad" type="hidden" id="acuTotalCapacidad" value="<? echo  $acuTotalCapacidad; ?>">
          <input name="TotalPostulantes" type="hidden" id="TotalPostulantes" value="<? echo $TotalPostulantes; ?>">
        </div>
        <div align="center"> </div></td>
    </tr>
  </table>
</form>			
		<br>	

    <table width="92%" border="0" align="center" class="nav3">
  <tr> 
    <td width="58%" height="41"> 
      <form name="form2" method="post" action="IndexInsertSedes.php">
        
        <div align="right">
          <input name="Submit" type="submit" class="bodymenubold" value="Activar Mas sedes">
          <input name="login" type="hidden" id="login27" value="<?php echo $login; ?>">
          </div>
      </form>	  
    <td width="42%"><img src="../img/VerSedes.png" width="36" height="34" />    
  </tr>
</table>
<br><br>
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
          <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Volver al MENU PRINCIPAL">
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
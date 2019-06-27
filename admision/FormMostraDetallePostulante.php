<?php
	include_once('../inc/Pagina.inc');
	class FormMostraDetallePostulante extends Pagina
	 {
	 	public function MostrarFormMostraDetallePostulante($login,$Datos)
		{
				$this->NoClickDerecho();
				$this->MostrarCabeceraReporte("Datos del Postulante: ".$Datos[0]['idPostulante'],"");
?>
				<script> 
				function imprime(){
				//desaparece el boton
				document.getElementById("salir").style.display='none'
				document.getElementById("btnImprimir").style.display='none'
				document.getElementById("retrocede").style.display='none' 
				document.getElementById("detallePostulante").style.display='none'
				//se imprime la pagina
				window.print()
				//reaparece el boton
				document.getElementById("detallePostulante").style.display='inline'
				document.getElementById("salir").style.display='inline'
				document.getElementById("btnImprimir").style.display='inline'
				document.getElementById("retrocede").style.display='inline'		
				}
				</script>
				<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
				 	               
				
				
<table width="85%" border="1" align="center" class="nav3">
  <tr> 
    <td colspan="4"><div align="center" class="titsec1">INFORMACION DEL POSTULANTE 
      </div></td>
  </tr>
  <tr> 
    <td width="30%" class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">CODIGO 
      DE POSTULANTE:</font></strong></td>
    <td colspan="2" class="nav"><font size="2" face="Arial, Helvetica, sans-serif"><? echo $Datos[0]['idPostulante']; ?></font></td>
    <td width="15%" rowspan="6" class="nav"> <table width="76%" height="106" border="0" align="center" class="nav3">
        <tr> 
          <td><div align="center"><img src="../fotoPostulante/<? echo $Datos[0]['idPostulante']; ?>.jpg?<? echo time();?>" width="77" height="99"></div></td>
        </tr>
      </table>
      <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><? echo $Datos[0]['idPostulante']; ?></font></p></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">APELLIDOS 
      Y NOMBRES:</font></strong></td>
    <td colspan="2" class="nav"><font size="2" face="Arial, Helvetica, sans-serif"><? echo strtoupper($Datos[0]['apellidoPaternoPostulante'])." ".strtoupper($Datos[0]['apellidoMaternoPostulante']).", ".ucwords($Datos[0]['nombrePostulante']); ?></font></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">DIRECCION:</font></strong></td>
    <td colspan="2" class="nav"><font size="2" face="Arial, Helvetica, sans-serif"><? echo strtoupper($Datos[0]['direccionPostulante'])." - ".strtoupper($Datos[0]['nombreDistrito'])." (".ucwords($Datos[0]['idDistrito']).")"; ?></font></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">D.N.I. 
      :</font></strong></td>
    <td colspan="2" class="nav"><font size="2" face="Arial, Helvetica, sans-serif"><? echo $Datos[0]['dniPostulante'] ?></font></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">TELEFONOS 
      :</font></strong></td>
    <td width="27%" class="nav"><font size="2" face="Arial, Helvetica, sans-serif"><strong>cel:</strong> 
      <? echo $Datos[0]['movilPostulante'] ?></font></td>
    <td width="28%" class="nav"><font size="2" face="Arial, Helvetica, sans-serif"><strong> 
      fijo</strong>: <? echo $Datos[0]['fijoPostulante'] ?></font></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">FECHA 
      DE NACIMIENTO:</font></strong></td>
    <td colspan="2" class="nav"><font size="2" face="Arial, Helvetica, sans-serif"><? echo $Datos[0]['fecnacPostulante'] ?></font></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">SEXO:</font></strong></td>
    <td colspan="3" class="nav"><font size="2" face="Arial, Helvetica, sans-serif"><? echo $Datos[0]['sexoPostulante'] ?></font></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">ESTADO 
      CIVIL: </font></strong></td>
    <td colspan="3" class="nav"><font size="2" face="Arial, Helvetica, sans-serif"><? echo $Datos[0]['estadoCivilPostulante'] ?></font></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">POSTULA 
      A EN PRIMERA OPCION:</font></strong></td>
    <td colspan="3" class="nav"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <? if($Datos[0]['idCarrera']==1)
			$turno = 'MAÑANA';
		else
			$turno ='NOCHE'; 
	 	echo strtoupper($Datos[0]['nombreCarrera'])." - ".$turno; ?>
      </font></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">POSTULA 
      A EN SEGUNDA OPCION:</font></strong></td>
    <td colspan="3" class="nav"><font size="2"><? echo strtoupper($Datos[0]['nomSegundaOpcion'])." - ".strtoupper($Datos[0]['turnoSegundaOpcion']); ?></font></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">FECHA 
      DE INSCRIPCION: </font></strong></td>
    <td colspan="3" class="nav"><font size="2" face="Arial, Helvetica, sans-serif"><? echo $Datos[0]['fecinsPostulante']; ?></font></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">VOUCHER 
      DE PAGO (BN): </font></strong></td>
    <td colspan="3" class="nav"><font size="2" face="Arial, Helvetica, sans-serif"><? echo $Datos[0]['voucherPostulante']; ?></font></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><strong><font size="2" face="Arial, Helvetica, sans-serif">REGISTRADO 
      POR: </font></strong></td>
    <td colspan="3" class="nav"><font size="2" face="Arial, Helvetica, sans-serif"><? echo $Datos[0]['login']; ?></font></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><font size="2" face="Arial, Helvetica, sans-serif"><strong>ESTADO 
      DEL POSTULANTE:</strong></font></td>
    <td colspan="3" class="nav"><font size="2" face="Arial, Helvetica, sans-serif"><? echo $Datos[0]['estadoPostulante']; ?></font></td>
  </tr>
  <tr> 
    <td class="menuhmlft2linesbold"><font size="2" face="Arial, Helvetica, sans-serif">CONDICION 
      DE INSCRIPCION:</font></td>
    <td colspan="3" class="nav"><font size="2" face="Arial, Helvetica, sans-serif"><? echo $Datos[0]['condicionPostulante']?></font></td>
  </tr>
</table>
<p align="center"><img src="/intratello/inc/barras/barcode.php?code=<? echo $Datos[0]['idPostulante']?>&scale=1" width="101" height="78"></p>
<table width="85%" border="0" align="center" class="nav3">
  <tr> 
    <td id="noprint" width="29%"> <form name="form2" method="post" action="../inc/AbandonarSistema.php">
        <div align="center"> 
          <input name="salir" type="submit" class="bodymenubold" id="salir" value="Salir del sistema">
          <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
        </div>
    </form></td>
    <td width="25%"><form name="form3" method="post" action="">
        <div align="center"> 
          <input name="btnImprimir" id="btnImprimir" type="button" class="bodymenubold" value="Imprimir Reporte" onClick="imprime()">
        </div>
    </form></td>
    <td width="22%"><form name="form1" method="post" action="GetReporteInscripcionesDetalle.php">
        <div align="center">
          <input name="detallePostulante" type="submit" class="bodymenubold" id="detallePostulante" value="Regresar">
          <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
          <input name="idCarrera" type="hidden" id="idCarrera" value="<? echo $Datos[0]['idCarrera']?>">
        </div>
    </form></td>
    <td width="24%"> <form action="../inc/RedireccionarMenu.php" method="post" name="form" id="form"><div align="center"> 
        <div align="center"> 
          <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Volver al  MENU">
          <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
        </div>
    </form></td>
  </tr>
</table>
<?php
		}
	 }
?>
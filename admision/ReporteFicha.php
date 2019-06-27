
<?php
include_once('../inc/Pagina.inc');
class ReporteFicha extends Pagina
{
	public function MostrarFicha($login,$Datos)
	{
		$this->NoClickDerecho();
		$this->MostrarCabeceraReporte("FICHA DE INSCRIPCION - PROCESO DE ADMISION 2013-I");
		?>
		<script> 
		function imprime(){
		//desaparece el boton
		document.getElementById("salir").style.display='none'
		document.getElementById("editar").style.display='none'
		document.getElementById("btnImprimir").style.display='none'
		document.getElementById("retrocede").style.display='none'
		document.getElementById("carnet").style.display='none'
		//se imprime la pagina
		window.print()
		//reaparece el boton
		document.getElementById("salir").style.display='inline'
		document.getElementById("editar").style.display='inline'
		document.getElementById("btnImprimir").style.display='inline'
		document.getElementById("retrocede").style.display='inline'
		document.getElementById("carnet").style.display='inline'
		}

		</script>
		<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
		 

<table width="90%" border="0" align="center">
  <tr> 
    <td height="48"> <div align="center">
        <p class="inputbts"><strong>C&oacute;digo del Postulante N&deg; <? echo $Datos[0][0]; ?></strong></p>
		</div></td>
  </tr>
  <tr> 
    <td> <table width="100%" border="0" align="center">
        <tr> 
          <td colspan="4"><div align="center" class="inputbts">Datos personales 
              del Postulante 
              <hr>
            </div></td>
        </tr>
        <tr> 
          <td width="4%" class="bodymenubold">
<div align="center">1.</div></td>
          <td width="33%" class="bodymenubold">Nombres:</td>
          <td width="48%" class="bulletsintrobody"><? echo ucwords($Datos[0][1])." ".ucwords($Datos[0][2])." ".ucwords($Datos[0][3]); ?></td>
          <td width="15%" rowspan="6" class="bulletsintrobody"> <table width="68%" height="132" border="0" align="center">
              <tr> 
			    <td height="48"> <img src="../fotoPostulante/<? echo $Datos[0][0];?>.jpg?<? echo time();?>" width="95" height="124"></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td class="bodymenubold">
<div align="center">2.</div></td>
          <td class="bodymenubold">Direcci&oacute;n:</td>
          <td class="bulletsintrobody"><? echo ucwords($Datos[0][4])." - ".ucwords($Datos[0][15]). " (".strtoupper($Datos[0][14]).")"; ?></td>
        </tr>
        <tr> 
          <td class="bodymenubold">
<div align="center">3.</div></td>
          <td class="bodymenubold">D.N.I.:</td>
          <td class="bulletsintrobody"><? echo $Datos[0][5]; ?></td>
        </tr>
        <tr> 
          <td class="bodymenubold">
<div align="center">4.</div></td>
          <td class="bodymenubold">Tel&eacute;fono movil:</td>
          <td class="bulletsintrobody"><? echo $Datos[0][6]; ?></td>
        </tr>
        <tr> 
          <td class="bodymenubold">
<div align="center">5</div></td>
          <td class="bodymenubold">Tel&eacute;fono fijo:</td>
          <td class="bulletsintrobody"><? echo $Datos[0][7]; ?></td>
        </tr>
        <tr> 
          <td class="bodymenubold">
<div align="center">6.</div></td>
          <td class="bodymenubold">e-m@il:</td>
          <td class="bulletsintrobody"><? echo $Datos[0][8]; ?></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center"><strong><? echo $Datos[0][0]; ?></strong></div></td>
        </tr>
        <tr> 
          <td colspan="4"><div align="center" class="inputbts">Datos Complementarios 
              del Postulante 
              <hr>
            </div></td>
        </tr>
        <tr> 
          <td class="bodymenubold">
<div align="center">7.</div></td>
          <td class="bodymenubold">Fecha de nacimiento:</td>
          <td colspan="2" class="bulletsintrobody"><? echo $Datos[0][9]; ?></td>
        </tr>
        <tr> 
          <td class="bodymenubold">
<div align="center">8.</div></td>
          <td class="bodymenubold">Estado civil:</td>
          <td colspan="2" class="bulletsintrobody"><? echo $Datos[0][11]; ?></td>
        </tr>
        <tr> 
          <td class="bodymenubold">
<div align="center">9.</div></td>
          <td class="bodymenubold">Sexo:</td>
          <td colspan="2" class="bulletsintrobody"><? echo $Datos[0][12]; ?></td>
        </tr>
        <tr> 
          <td height="25" class="bulletsintrobody">&nbsp;</td>
          <td class="bulletsintrobody">&nbsp;</td>
          <td colspan="2" class="bulletsintrobody">&nbsp;</td>
        </tr>
        <tr> 
          <td colspan="4"><div align="center" class="inputbts">Datos de Postulaci&oacute;n 
              <hr>
            </div></td>
        </tr>
        <tr> 
          <td class="bodymenubold">
<div align="center">10.</div></td>
          <td class="bodymenubold">Carrera a la que postula como primera Opci&oacute;n:</td>
          <? if($Datos[0][16] % 2 != 0) $t="MAÑANA"; else $t="NOCHE"; ?>
          <td colspan="2" class="bulletsintrobody"><? echo strtoupper($Datos[0][17])." - TURNO: ".$t ; ?></td>
        </tr>
        <tr> 
          <td class="bodymenubold">
<div align="center">11.</div></td>
          <td class="bodymenubold">Carrera a la que postula como segunda Opci&oacute;n:</td>
		 
          <td colspan="2" class="bulletsintrobody"><? echo strtoupper($Datos[0]['nomSegundaOpcion'])." - TURNO: ".strtoupper($Datos[0]['turnoSegundaOpcion']) ; ?></td>
        </tr>
        <tr> 
          <td class="bodymenubold">
<div align="center">12.</div></td>
          <td class="bodymenubold">Inscrito por:</td>
          <td colspan="2" class="bulletsintrobody"><? echo $Datos[0][18]; ?></td>
        </tr>
        <tr> 
          <td class="bodymenubold">
<div align="center">13.</div></td>
          <td class="bodymenubold">Fecha de inscripcion:</td>
          <td colspan="2" class="bulletsintrobody"><? echo $Datos[0][10]; ?></td>
        </tr>
        <tr> 
          <td class="bodymenubold">
<div align="center">14.</div></td>
          <td class="bodymenubold">N&deg; de Voucher BN:</td>
          <td colspan="2" class="bulletsintrobody"><? echo $Datos[0][19]; ?></td>
        </tr>
        <tr> 
          <td class="bodymenubold">
<div align="center">15.</div></td>
          <td class="bodymenubold">Condici&oacute;n para postular:</td>
          <td colspan="2" class="bulletsintrobody"><? echo $Datos[0][13]; ?></td>
        </tr>
        <tr> 
          <td class="bodymenubold">
<div align="center">16.</div></td>
          <td class="bodymenubold">Condici&oacute;n de inscripcion</td>
          <td colspan="2" class="bulletsintrobody"><? echo strtoupper($Datos[0]['condicionPostulante']); //$Datos[0][20] ?></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2"><div align="center" class="bodymenuhomebold">C&oacute;digo 
              del postulante </div></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td class="bulletsintrobody"><div align="center"> 
              <p class="bodymenubold">_____________________</p>
              <p class="bodymenubold">Firma del Postulante</p>
            </div></td>
          <td colspan="2"><div align="center"><img src="/intratello/inc/barras/barcode.php?code=<? echo $Datos[0][0]?>&scale=1" /></div></td>
        </tr>
      </table>
      <div align="center"></div></td>
  </tr>
  <tr> 
     <td id="noprint">
	 <table width="97%" border="0" align="center">
        <tr> 
          <td id="noprint" width="23%"> <form name="form2" method="post" action="../inc/AbandonarSistema.php">
              <div align="center"> 
                <input name="salir" type="submit" class="bodymenubold" id="salir" value="Salir del sistema">
                <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
              </div>
            </form></td>
          <td width="18%"><form name="form3" method="post" action="">
              <div align="center"> 
               
				<input name="btnImprimir" id="btnImprimir" type="button" class="bodymenubold" value="Imprimir Ficha" onClick="imprime()">
              </div>
            </form></td>
          <td width="22%"><form name="form1" method="post" action="GetEditPostulante.php">
              <div align="center"> 
                <input name="editar" type="submit" class="bodymenubold" id="editar" value="Editar datos">
                <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
                <?php  //empaquetando
					$idpostulante = $Datos[0][0]; 
					/*$nombrePostulante=$Datos[0][1]; 
					$apellidoPaternoPostulante=$Datos[0][2];
					$apellidoMaternoPostulante=$Datos[0][3];
					$direccionPostulante=$Datos[0][4]; 
					$dniPostulante=$Datos[0][5];
					$movilPostulante=$Datos[0][6]; 
					$fijoPostulante=$Datos[0][7]; 
					$mailPostulante=$Datos[0][8];
					$fecnacPostulante=$Datos[0][9];
					$fecinsPostulante=$Datos[0][10]; 
					$estadoCivilPostulante= $Datos[0][11];
					$sexoPostulante=$Datos[0][12];
					$estadoPostulante=$Datos[0][13]; 
					$idDistrito=$Datos[0][14];
					$nombreDistrito=$Datos[0][15];
					$idCarrera=$Datos[0][17];
					$loginIns=$Datos[0][18];
					$voucherPostulante=$Datos[0][19];*/				
				?>
                <input name="idpostulante" type="hidden" id="idpostulanteDatos" value="<?php echo $idpostulante; ?>">
              </div>
            </form></td>
          <td width="18%"> <form action="../inc/RedireccionarMenu.php" method="post" name="form" id="form">
              <div align="center"> 
                <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Volver al  MENU">
                <div align="center"> 
                  <input name="login" type="hidden" id="login4" value="<?php echo $login; ?>">
                </div>
              </div>
            </form></td>
          <td width="19%"><form name="form4" method="post" action="GetDatosCarnet.php">
              <div align="center">
                <input name="carnet" type="submit" class="bodymenubold" id="carnet" value="Imprimir carnet" >
                <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
				<input name="idpostulante" type="hidden" id="idpostulante" value="<?php echo $Datos[0][0]; ?>">
				<input name="nombrePostulante" type="hidden" id="nombrePostulante" value="<?php echo $Datos[0][1]; ?>">
				<input name="apellidoPaternoPostulante" type="hidden" id="apellidoPaternoPostulante" value="<?php echo $Datos[0][2]; ?>">
				<input name="apellidoMaternoPostulante" type="hidden" id="apellidoMaternoPostulante" value="<?php echo $Datos[0][3]; ?>">
				<input name="direccionPostulante" type="hidden" id="direccionPostulante" value="<?php echo $Datos[0][4]; ?>">
				<input name="dniPostulante" type="hidden" id="dniPostulante" value="<?php echo $Datos[0][5]; ?>">
				<input name="movilPostulante" type="hidden" id="movilPostulante" value="<?php echo $Datos[0][6]; ?>">
				<input name="fijoPostulante" type="hidden" id="fijoPostulante" value="<?php echo $Datos[0][7]; ?>">
				<input name="mailPostulante" type="hidden" id="mailPostulante" value="<?php echo $Datos[0][8]; ?>">
				<input name="fecnacPostulante" type="hidden" id="fecnacPostulante" value="<?php echo $Datos[0][9]; ?>">
				<? if($Datos[0][16] % 2 != 0) $t="MAÑANA"; else $t="NOCHE"; ?>
				<input name="carrera" type="hidden" id="carrera" value="<?php echo $Datos[0][17]." - ".$t; ?>">
                <input name="nomCarrera2" type="hidden" id="nomCarrera2" value="<? echo $Datos[0]['nomSegundaOpcion'];?>">
                <input name="turnoCarrera2" type="hidden" id="turnoCarrera2" value="<? echo $Datos[0]['turnoSegundaOpcion']?>">
              </div>
            </form></td>
        </tr>
      </table>
	  
	  </td>
  </tr>
</table>
		
<?php
		echo "sesión de: ".$login;
	}
}
?>

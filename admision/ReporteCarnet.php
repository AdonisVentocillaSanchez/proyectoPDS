
<?php
	class ReporteCarnet
	{
		public function GenerarCarnet($login,$idpostulante,$nombrePostulante,$apellidoPaternoPostulante,$apellidoMaternoPostulante,
		                                   $direccionPostulante,$dniPostulante,$movilPostulante,$fijoPostulante,$mailPostulante,
										   $fecnacPostulante,$fecinc,$carrera,$nomCarrera2,$turnoCarrera2)
		{
		
?>
			<script> 
			function right(e) {
			var msg = " EMPLEE LOS BOTONES DEL SISTEMA - GRACIAS ";
			if (navigator.appName == 'Netscape' && e.which == 3) {
			alert(msg); // Delete this line to disable but not alert user
			return false;
			}
			else
			if (navigator.appName == 'Microsoft Internet Explorer' && event.button==2) {
			alert(msg); // Delete this line to disable but not alert user
			return false;
			}
			return true;
			}
			document.onmousedown = right;	
			
		function imprime(){
		//desaparece el boton
		document.getElementById("salir").style.display='none'
		document.getElementById("btnImprimir").style.display='none'
		document.getElementById("retrocede").style.display='none'
		//se imprime la pagina
		window.print()
		//reaparece el boton
		document.getElementById("salir").style.display='inline'
		document.getElementById("btnImprimir").style.display='inline'
		document.getElementById("retrocede").style.display='inline'		
		}

		</script>
		<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
		
<table width="49%" border="0" align="center">
  <tr> 
    <td colspan="2"> 
      <div align="center">
        <table width="100%" border="1" align="center" class="input2">
          <tr> 
            <td colspan="3"><div align="center"> 
                <table width="100%" border="0" align="center" bgcolor="#FFFFFF">
                  <tr> 
                    <td width="15%" rowspan="2"><div align="center"><img src="../img/logo.jpg" width="50" height="50"><span class="centros_01"><font size="1"><? echo $idpostulante; ?></font></span></div></td>
                    <td height="35" colspan="3"> <div align="center" class="inputbts"> 
                        <strong><font size="1" face="Arial, Helvetica, sans-serif">Instituto 
                        Superior Tecnol&oacute;gico P&uacute;blico &quot;Julio 
                        Cesar Tello&quot;</font></strong> <font size="1"><br>
                        <strong><font face="Arial, Helvetica, sans-serif">Proceso 
                        de Admisi&oacute;n <?php echo date('Y');?></font> </strong></font> 
                      </div></td>
                  </tr>
                  <tr> 
                    <td height="26" colspan="3"> <div align="center" class="mais"> 
                        <span class="tblsml_text"><font size="1" face="Arial, Helvetica, sans-serif">Av. 
                        Bol&iacute;var n&deg;100 - 3er. Sector - Ruta &quot;A&quot; 
                        </font> <font size="1" face="Arial, Helvetica, sans-serif">Villa 
                        el Salvador - Tel&eacute;fono : 287-9783 / 287-978</font></span> 
                      </div></td>
                  </tr>
                  <tr> 
                    <td colspan="2" class="bodymenu"><font size="1"><strong>C&oacute;digo 
                      de Postulante:</strong> </font></td>
                    <td width="37%" class="cellback_home"><font size="1"><? echo $idpostulante ?></font></td>
                    <td width="24%" rowspan="8"><table width="63%" height="148" border="0" align="center">
                        <tr> 
                          <td height="96" colspan="3"><table width="87" height="97" border="0">
                              <tr> 
                                <td height="58" colspan="3"><div align="center"><img src="../fotoPostulante/<? echo $idpostulante ?>.jpg?<? echo time();?>" width="65" height="91"></div></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr> 
                          <td height="35" colspan="3" align="center"><img src="/intratello/inc/barras/barcode.php?code=<? echo $idpostulante?>&scale=1" width="60" height="40"></td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr> 
                    <td colspan="2" class="bodymenu"><font size="1"><strong>Nombres 
                      y Apellidos: </strong></font></td>
                    <td class="cellback_home"><font size="1"><? echo ucwords($nombrePostulante)." ".ucwords($apellidoPaternoPostulante)." ".ucwords($apellidoMaternoPostulante); ?></font></td>
                  </tr>
                  <tr> 
                    <td colspan="2" class="bodymenu"><font size="1"><strong>Direcci&oacute;n: 
                      </strong></font></td>
                    <td class="cellback_home"><font size="1"><? echo ucwords($direccionPostulante);?></font></td>
                  </tr>
                  <tr> 
                    <td colspan="2" class="bodymenu"><font size="1"><strong>Tel&eacute;fono:</strong> 
                      </font></td>
                    <td class="cellback_home"><font size="1"><? echo $movilPostulante." / ".$fijoPostulante;?></font></td>
                  </tr>
                  <tr> 
                    <td colspan="2" class="bodymenu"><font size="1"><strong>Carrera 
                      a la que postula (1ra Opci&oacute;n):</strong> </font></td>
                    <td class="cellback_home"><font size="1"><? echo strtoupper($carrera); ?></font></td>
                  </tr>
                  <tr> 
                    <td colspan="2" class="bodymenu"><font size="1"><strong>Carrera 
                      a la que postula (2da Opci&oacute;n):</strong> </font></td>
                    <td class="cellback_home"><font size="1">
                      <? $carrera2 = strtoupper($nomCarrera2." - ".$turnoCarrera2); echo $carrera2 ?>
                      </font></td>
                  </tr>
                  <tr> 
                    <td colspan="2" class="bodymenu"><font size="1"><strong>e-m@il</strong>: 
                      </font></td>
                    <td class="cellback_home"><font size="1"><? echo strtolower($mailPostulante); ?></font></td>
                  </tr>
                  <tr> 
                    <td colspan="3" class="bodymenu">&nbsp;</td>
                  </tr>
                </table>
              </div></td>
          </tr>
        </table>
      </div></td>
  </tr>
  <tr> 
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><table width="100%" border="0" align="center" bgcolor="#FFFFFF">
        <tr> 
          <td width="15%" rowspan="2"><div align="center"><img src="../img/logo.jpg" width="50" height="50"><span class="centros_01"><font size="1"><? echo $idpostulante; ?></font></span></div></td>
          <td height="35" colspan="3"> <div align="center" class="inputbts"> <strong><font size="1" face="Arial, Helvetica, sans-serif">Instituto 
              Superior Tecnol&oacute;gico P&uacute;blico &quot;Julio Cesar Tello&quot;</font></strong> 
              <font size="1"><br>
              <strong><font face="Arial, Helvetica, sans-serif">Proceso de Admisi&oacute;n 
              <?php echo date('Y');?></font> </strong></font> </div></td>
        </tr>
        <tr> 
          <td height="26" colspan="3"> <div align="center" class="mais"> <span class="tblsml_text"><font size="1" face="Arial, Helvetica, sans-serif">Av. 
              Bol&iacute;var n&deg;100 - 3er. Sector - Ruta &quot;A&quot; </font> 
              <font size="1" face="Arial, Helvetica, sans-serif">Villa el Salvador 
              - Tel&eacute;fono : 287-9783 / 287-978</font></span> </div></td>
        </tr>
        <tr> 
          <td colspan="2" class="bodymenu"><font size="1"><strong>C&oacute;digo 
            de Postulante:</strong> </font></td>
          <td width="37%" class="cellback_home"><font size="1"><? echo $idpostulante ?></font></td>
          <td width="24%" rowspan="8"><table width="63%" height="148" border="0" align="center">
              <tr> 
                <td height="96" colspan="3"><table width="87" height="97" border="0">
                    <tr> 
                      <td height="58" colspan="3"><div align="center"><img src="../fotoPostulante/<? echo $idpostulante ?>.jpg?<? echo time();?>" width="65" height="91"></div></td>
                    </tr>
                  </table></td>
              </tr>
              <tr> 
                <td height="35" colspan="3" align="center"><img src="/intratello/inc/barras/barcode.php?code=<? echo $idpostulante?>&scale=1" width="60" height="40"></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td colspan="2" class="bodymenu"><font size="1"><strong>Nombres y Apellidos: 
            </strong></font></td>
          <td class="cellback_home"><font size="1"><? echo ucwords($nombrePostulante)." ".ucwords($apellidoPaternoPostulante)." ".ucwords($apellidoMaternoPostulante); ?></font></td>
        </tr>
        <tr> 
          <td colspan="2" class="bodymenu"><font size="1"><strong>Direcci&oacute;n: 
            </strong></font></td>
          <td class="cellback_home"><font size="1"><? echo ucwords($direccionPostulante);?></font></td>
        </tr>
        <tr> 
          <td colspan="2" class="bodymenu"><font size="1"><strong>Tel&eacute;fono:</strong> 
            </font></td>
          <td class="cellback_home"><font size="1"><? echo $movilPostulante." / ".$fijoPostulante;?></font></td>
        </tr>
        <tr> 
          <td colspan="2" class="bodymenu"><font size="1"><strong>Carrera a la 
            que postula (1ra Opci&oacute;n):</strong> </font></td>
          <td class="cellback_home"><font size="1"><? echo strtoupper($carrera); ?></font></td>
        </tr>
        <tr> 
          <td colspan="2" class="bodymenu"><font size="1"><strong>Carrera a la 
            que postula (2da Opci&oacute;n):</strong> </font></td>
          <td class="cellback_home"><font size="1"> 
            <? $carrera2 = strtoupper($nomCarrera2." - ".$turnoCarrera2); echo $carrera2 ?>
            </font></td>
        </tr>
        <tr> 
          <td colspan="2" class="bodymenu"><font size="1"><strong>e-m@il</strong>: 
            </font></td>
          <td class="cellback_home"><font size="1"><? echo strtolower($mailPostulante); ?></font></td>
        </tr>
        <tr> 
          <td colspan="3" class="bodymenu">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="48%" border="0" align="center" class="inputbts">
  <tr> 
				
				
    <td width="34%" height="26" id="noprint"> 
      <form name="form2" method="post" action="../inc/AbandonarSistema.php">
					<div align="center"> 
					  <input name="salir" type="submit" class="bodymenubold" id="salir" value="Salir del sistema">
					  <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
					</div>
	  </form></td>
				<td width="29%"><div align="center">
					<input name="btnImprimir" type="button" class="bodymenubold" id="btnImprimir" onClick="imprime()" value="Imprimir Carnet">
				  </div></td>
				<td width="37%"> <form action="../inc/RedireccionarMenu.php" method="post" name="form" id="form">
					<div align="center"> 
					  <input name="retrocede" type="submit" class="bodymenubold" id="retrocede" value="Volver al  MENU">
          				<input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
          
				  </form></td>
  </tr>
</table>

<?php				
		}
	}
?>
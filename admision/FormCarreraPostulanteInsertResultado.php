<?php
 include_once('../inc/Pagina.inc');
 class FormCarreraPostulanteInsertResultado extends Pagina
 {
 	public function MostrarFormCarreraInsertResultado($login,$ListaPostulantesSinResultado)
	{
		$this->NoClickDerecho();
		$this -> EncabezadoForm("Registro de Resultados - Usuario: '$login'","");
		$numPostulantes = count($ListaPostulantesSinResultado);		
?>
<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
 				<script language="JavaScript" type="text/JavaScript">
 				function Solo_Numerico(variable){
				//Numer=parseFloat(variable);
				Numer=variable;
				if (isNaN(Numer)){
					alert("POR FAVOR SOLO INGRESE NUMEROS");
					return "";
				}
				return Numer;
				}
				function ValNumero(Control){
					Control.value=Solo_Numerico(Control.value);
				}
 				</script>

<form name="form1" method="post" action="GetCarreraPostulanteInsertResultado.php">
  <p>&nbsp;</p>
  <table width="83%" border="0" align="center" class="nav3">
    <tr> 
      <td><div align="center" class="titsec1"> 
          <p><strong>REGISTRO DE RESULTADOS - PROCESO DE ADMISION</strong></p>
          <p><strong>CARRERA: <? echo strtoupper($ListaPostulantesSinResultado[0]['nombreCarrera'])." -  TURNO: ".strtoupper($ListaPostulantesSinResultado[0]['nombreTurno']); ?> 
            </strong></p>
        </div></td>
    </tr>
    <tr> 
      <td><div align="center" class="prod_websitepro"><strong><font size="2" face="Arial, Helvetica, sans-serif">El 
          Ingreso de Resultados es UNICO, tenga mucho cuidado antes de guardar 
          la informaci&oacute;n, una vez registrado el puntaje de algun postulante, 
          NO SE PODRA CAMBIAR, en ese caso deber&aacute; contactarse con el administrador 
          del sistema</font></strong></div></td>
    </tr>
    <tr>
      <td height="31">
        <div align="center" class="titsec1">LISTADO 
          DE POSTULANTES<strong><font face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
          <input name="numPostulantes" type="hidden" id="numPostulantes" value="<? echo $numPostulantes ?>">
          <input name="carrera" type="hidden" id="carrera" value="<? echo $ListaPostulantesSinResultado[0]['idCarrera']?>">
        </font></strong> </div></td>
    </tr>
  </table>
 <br>

  <table width="83%" border="1" class="nav3" align="center">
<?php
 /*
 P.idPostulante,P.nombrePostulante,P.apellidoPaternoPostulante,
P.apellidomaternoPostulante,P.dniPostulante,
C.nombreCarrera,T.nombreTurno
 */
		echo "<tr>";
		echo "<td class='titsec1'><center><strong>N°</strong></center></td><td class='titsec1'><center><strong>Código de Postulante</strong></center></td><td class='titsec1'><center><strong>Apellidos y Nombres</strong><center></td><td class='titsec1'><center><strong>D.N.I.</strong></center></td><td class='titsec1'><center><strong>PUNTAJE</strong></center></td>";
		echo "</tr>";
		$cont=1;		
		for($i=0;$i<$numPostulantes;$i++)
			{
				echo "<tr>";
				echo "<td class='menuhmlft2linesbold'><center>".$cont.".</center></td>
				<td class='menuhmlft2linesbold'><center>".$ListaPostulantesSinResultado[$i]['idPostulante'].
				"</center></td><td class='menuhmlft2linesbold'>".strtoupper($ListaPostulantesSinResultado[$i]['apellidoPaternoPostulante']).
				" ".strtoupper($ListaPostulantesSinResultado[$i]['apellidomaternoPostulante']).
				", ".ucwords($ListaPostulantesSinResultado[$i]['nombrePostulante']).
				"</td><td class='menuhmlft2linesbold'><center>".$ListaPostulantesSinResultado[$i]['dniPostulante']."</center></td><td><center>
				<input name='notas[]'type='text' size='5' onkeyUp='return ValNumero(this);' class='nav2'>
				<input name='codigos[]' type='hidden' value='".$ListaPostulantesSinResultado[$i]['idPostulante']."'>
				 </center></td>";
				echo "</tr>";
				$cont++;
			}			
?> 
</table>
    <center>
    <table width="83%" border="0" class="nav3">
      <tr> 
        <td colspan="2"><div align="center"> 
            <input name="Submit" type="reset" class="bodymenubold" value="Borrar todo">
          </div></td>
        <td width="50%"><div align="center">
            <input name="guardaResultado" type="submit" class="bodymenubold" id="guardaResultado3" value="Registrar Resultado">
          </div></td>
      </tr>
    </table>
    </center>
</form>
<p>&nbsp;</p>
<table width="83%" border="0" align="center" class="nav3">
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
<p>
  <?php	
		echo "Uuario: ".$login."<br>";		
		$this -> PieForm();	
	}	
 }
?>
</p>
<p>&nbsp; </p>

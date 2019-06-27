<?
$numero_enviado=$_GET['num'];
if(isset($numero_enviado))
{
	//echo $numero_enviado;
	include('../inc/GeneraNumeroSeguridad.php');
	$OBJGeneraNumeroSeguridad = new GeneraNumeroSeguridad;
	$ResultadoSeguridad = $OBJGeneraNumeroSeguridad -> VerificarNummeroSec($numero_enviado);
	if($ResultadoSeguridad == 1)
	{
		//JavaScript:alert('Perfecto. La página ya se ha cargado.');
		include('FormLogin.php');
		$OBJFormLogin = new FormLogin;
		$OBJFormLogin -> VerFormLogin();
	}
	else
	{
		//echo "URL: Se ha detectado un acceso ilicito al sistema<br>no es posible dar acceso de esta manera<br> por favor ingrese adecuadamente";
							?> 
								<div align="center"><img src="../img/PNG/Symbols/Error.png" width="65" height="65"> 
								  <br>
								  EL TIEMPO DE ESPERA PARA INGRESAR AL SISTEMA HA EXPIRADO, PULSE EL BOTON PARA 
								  INICIAR SESION</div>
								<form name="form1" method="post" action="../inc/RegIndex.php">
							  <div align="center">
								<input name="Submit" type="submit" class="bodymenubold" value="Iniciar Sesión">
							  </div>
							</form>
							<?
	}
}
?>

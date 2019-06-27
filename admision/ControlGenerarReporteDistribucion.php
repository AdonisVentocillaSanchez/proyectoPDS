<?php // ControlGenerarReporteDistribucion.php desde ControlSedesSeleccionadas.php desde GetSedesSeleccionadas.php
class ControlGenerarReporteDistribucion
{
	public function VerReporteDistribucion($login)
	{
		include_once('../entidad/Resultado.php');
		$OBJResultado = new Resultado;
		$ListaDistrucionAulas = $OBJResultado -> ObtenerListadoDistibucionAulas();
		if($ListaDistrucionAulas != 0)
		{
			include_once('ReporteAulas.php');
			$OBJReporteAulas = new ReporteAulas;
			$OBJReporteAulas -> MostrarListaDistribucionAulas($login,$ListaDistrucionAulas);
		}
		else
		{
			include_once('../inc/FormMensaje.php');
			$cadena="<form name='form1' method='post' action='../inc/RedireccionarMenu.php'>
			<div align='center'>
			<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
			<input name='login' type='hidden' id='login' value='".$login."'>
			</div>
			</form>";
			$OBJMSJ = new FormMensaje;
			$OBJMSJ -> VerFormMensaje("ERROR: NO HAY DATOS PARA GENERAR ESTE REPORTE, URGENTE CONTACTE AL ADMINISTRADOR",$cadena);
		}
	}
}
?>
<?php  //ControlSedeActiva desde indexGenerarAulas.php
class ControlSedeActiva
{
	public function VerFormSedeActiva($login,$mensaje)
	{
		include_once('../entidad/Sede.php');
		include_once('../entidad/Configuracion.php');
		include_once('../entidad/Postulante.php');
		include_once('../entidad/Resultado.php');
		include_once('../inc/FormMensaje.php');
		$OBJSede = new Sede;
		$OBJConfiguracion = new Configuracion;
		$OBJResultado = new Resultado;
		$OBJPostulante = new Postulante;
		$OBJMSJ = new FormMensaje;
		$proceso = $OBJConfiguracion -> ObtenerProcesoActual();
		$ListaSedes = $OBJSede -> ObtenerSedesActivas();
		$CantPostulante = 	$OBJPostulante -> ObtenerCodigosPostulantesAptos($proceso);
		$TotalPostulantes = count($CantPostulante);
		//echo $RespuestaSiDesarrolloDistribucion[0][0]; ===0
		
		if($ListaSedes!=0 and $TotalPostulantes>0)
		{
				$RespuestaSiDesarrolloDistribucion = $OBJResultado -> ObtenerSiAulasDistribuidas();
				if($RespuestaSiDesarrolloDistribucion[0][0] == 0) //no se hecho distribucion
				{
					$mensaje ="YA EXISTE UNA DISTRIBUCION DE AULAS";			
				}
				include_once('FormVerSedesActivas.php');
				$OBJFormVerSedesActivas = new FormVerSedesActivas;
				$OBJFormVerSedesActivas -> MostrarFormVerSedesActivas($login,$ListaSedes,$TotalPostulantes,$mensaje); //se envia para q selecctine sedes
				/*else
				{
					
					$cadena="<form name='form1' method='post' action='../inc/RedireccionarMenu.php'>
				  	<div align='center'>
					<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
					<input name='login' type='hidden' id='login' value='".$login."'>
				  	</div>
					</form>";
					$OBJMSJ -> VerFormMensaje("LA DISTRIBUCION DE POSTULANTES YA FUE REALIZADA, SI DESEA REHACER CONTACTE AL ADMINISTRADOR",$cadena);
				}*/
		}
		else
		{
			$cadena="<form name='form1' method='post' action='../inc/RedireccionarMenu.php'>
			<div align='center'>
			<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
			<input name='login' type='hidden' id='login' value='".$login."'>
			</div>
			</form>";
			$OBJMSJ -> VerFormMensaje("Error: No se encontro ninguna sede activa  o no existen postulantes registrados",$cadena);
		}
	}
}
?>

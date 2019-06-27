<?php
	class ControlRegPostulante
	{
		public function GuardarPostulante($login,$nombre,$apellidop,$apellidom,$direccion,$dni,$movil,$fijo,$mail,$fecnac,$fecinc,$estadocivil,$sexo,$estadoPostulante,$distrito,$carrera,$carrera2,$voucher,$condicionPostulante,$rutaFoto)
		{
			//generar codigo de postulante ejemplo 2013100001 en entidad
			$Campos = array($login,$nombre,$apellidop,$apellidom,$direccion,$dni,$movil,$fijo,$mail,$fecnac,$fecinc,$estadocivil,$sexo,$estadoPostulante,$distrito,$carrera,$voucher,$condicionPostulante,$rutaFoto,$carrera2);//segunda opcion esta al ultimo
			include_once('../entidad/Postulante.php');
			include_once('../entidad/Configuracion.php');
			include_once('../entidad/Carrera.php');
			$OBJConfiguracion = new Configuracion;
			$OBJPostulante = new Postulante;
			$OBJCarrera = new Carrera;
			$ProcesoActual = $OBJConfiguracion -> ObtenerProcesoActual(); //proceso actual
			//echo $ProcesoActual;
			$codigoNuevoPostulante = $OBJPostulante -> AlmacenarPostulante($login,$Campos,$ProcesoActual);
			//echo $Campos[18];
			if($codigoNuevoPostulante != 0)
			{
				$Datos = $OBJPostulante ->ObtenerDatosPostulante($codigoNuevoPostulante);
				$SegundaOpcion = $OBJCarrera ->ObtenerCarrera($Datos[0]['idCarrera2']);
				$Datos[0]['nomSegundaOpcion'] = $SegundaOpcion[0]['nombreCarrera'];
				$Datos[0]['turnoSegundaOpcion'] = $SegundaOpcion[0]['nombreTurno'];
				//echo $Datos[0]['nomSegundaOpcion'];
				if($Datos != 0)
				{
					include_once('ReporteFicha.php');
					$OBJReporteFicha = new ReporteFicha;
					$OBJReporteFicha -> MostrarFicha($login,$Datos);
				}
				else
				{
					include_once('../inc/FormMensaje.php');
					$cadena="<br>
					<form name='form1' method='post' action='../inc/RegIndex.php'>
					<div align='center'>
					<input name='Submit' type='submit' class='bodymenubold' value='Ir al inicio'>
					</div></form>";
					$OBJMSJ = new FormMensaje;
					$OBJMSJ -> VerFormMensaje("Error: existe un aborto de operacion, contacte al administrador del sistema",$cadena);
				}
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
				$OBJMSJ -> VerFormMensaje("Error:existe un aborto de operacion, contacte al administrador del sistema",$cadena);				
			}			
		}
	}
?>
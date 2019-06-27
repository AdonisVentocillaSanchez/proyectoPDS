<?
	class ControlEditDatosPostulante
	{
		public function GuardarPostulante($login,$idpostulante,$nombre,$apellidop,$apellidom,$direccion,$dni,$movil,$fijo,$mail,$fecnac,$fecinc,		
									$estadocivil,$sexo,$estadoPostulante,$distrito,$carrera,$voucher,$loginIns,$condicionPostulante,$rutaFoto,$carrera2)
		{
			$Campos = array($idpostulante,$nombre,$apellidop,$apellidom,$direccion,$dni,$movil,$fijo,$mail,$fecnac,$fecinc,		
									$estadocivil,$sexo,$estadoPostulante,$distrito,$carrera,$voucher,$loginIns,$condicionPostulante,$rutaFoto,$carrera2);
			include_once('../entidad/Postulante.php');
			include_once('../entidad/Resultado.php');
			include_once('../entidad/Carrera.php');
			
			$OBJPostulante = new Postulante;
			$OBJResultado = new Resultado;
			$OBJCarrera = new Carrera;
			
			$resultado = $OBJPostulante -> ActualizarDatosPostulante($login,$Campos);
			//echo $resultado.$estadoPostulante;
			$OBJResultado -> ActualizarDatosPostulante($idpostulante,$estadoPostulante);
			//echo $resultado.$estadoPostulante;
			if($resultado != 0)
			{
				$Datos = $OBJPostulante ->ObtenerDatosPostulante($idpostulante);
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
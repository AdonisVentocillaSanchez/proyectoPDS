<?
	class ControlDetallePostulante
	{
		public function VerDetallePostulante($login,$idPostulante)
		{
			include_once('../entidad/Postulante.php');
			include_once('../entidad/Carrera.php');
			$OBJPostulante = new Postulante;
			$OBJCarrera = new Carrera;
			$Datos = $OBJPostulante -> ObtenerDatosPostulante($idPostulante);
			if($Datos != 0)
			{
				$SegundaOpcion = $OBJCarrera ->ObtenerCarrera($Datos[0]['idCarrera2']);
				$Datos[0]['nomSegundaOpcion'] = $SegundaOpcion[0]['nombreCarrera'];
				$Datos[0]['turnoSegundaOpcion'] = $SegundaOpcion[0]['nombreTurno'];
				//echo $Datos[0]['nomSegundaOpcion'];
				
				
				include_once('FormMostraDetallePostulante.php');
				$OBJFormMostraDetallePostulante = new FormMostraDetallePostulante;
				$OBJFormMostraDetallePostulante -> MostrarFormMostraDetallePostulante($login,$Datos);
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
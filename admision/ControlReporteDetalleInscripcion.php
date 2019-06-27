<?
	class ControlReporteDetalleInscripcion
	{
		public function MostarDetalleCarrera($login,$idCarrera)
		{
			include_once('../entidad/Postulante.php');
			$OBJPostulante = new Postulante;
			$ListaPostulante = $OBJPostulante -> ObtenerListaPostulantes($idCarrera);
			if($ListaPostulante != 0)
			{
				include_once('FormReporteDetalleInscripcion.php');
				$OBJFormReporteDetalleInscripcion = new FormReporteDetalleInscripcion;
				$OBJFormReporteDetalleInscripcion ->MostrarFormReporteDetalleInscripcion($login,$ListaPostulante);
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
				$OBJMSJ -> VerFormMensaje("Error: se ha producido un fallo al accder a la BD<br> contacte a su administrador",$cadena);
			}
		}
	}
?>
<?
	class ControlEditPostulante
	{
		public function EditarPostulante($login,$idpostulante)
		{
			include_once('../entidad/Postulante.php');
			include_once('../entidad/Distrito.php');
			include_once('../entidad/Carrera.php');
			$OBJPostulante = new Postulante;
			$OBJDistrito = new Distrito;
			$OBJCarrera = new Carrera;
			$ListaDistritos = $OBJDistrito -> ObtenerDistritos(); 
			$ListaCarreras = $OBJCarrera -> ObtenerCarreras();
			$Datos = $OBJPostulante ->ObtenerDatosPostulante($idpostulante);
			
			$SegundaOpcion = $OBJCarrera ->ObtenerCarrera($Datos[0]['idCarrera2']);
			$Datos[0]['nomSegundaOpcion'] = $SegundaOpcion[0]['nombreCarrera'];
			$Datos[0]['turnoSegundaOpcion'] = $SegundaOpcion[0]['nombreTurno'];
			//echo $Datos[0]['nomSegundaOpcion'];
			if($Datos != 0)
			{
				include_once('FormEditPostulante.php');
				$OBJFormEditPostulante = new FormEditPostulante;
				$OBJFormEditPostulante -> MostrarFormEditPostulante($login,$Datos,$ListaDistritos,$ListaCarreras);
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

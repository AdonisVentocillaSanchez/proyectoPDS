
<?php
	class ControlSearchPostulante
	{
		public function BuscarPostulanteApellido($login,$apellidoPaternoPostulante)
		{
			include_once('../entidad/Postulante.php');
			
			$OBJPostulante = new Postulante;
			$Datos = $OBJPostulante ->ObtenerPostulantesApellido($apellidoPaternoPostulante);
			if($Datos != 0)
			{
				include_once('FormMostrarPostulantes.php');
				$OBJFormMostrarPostulantes = new FormMostrarPostulantes;
				$OBJFormMostrarPostulantes -> MostrarGridPostulantes($login,$Datos);
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
				$OBJMSJ -> VerFormMensaje("Error: No se encontro ninguna coincidencia de apellido paterno",$cadena);
			}
		}
		/***********************************************************/
		public function BuscarPostulanteCodigo($login,$idpostulante)
		{
			include_once('../entidad/Postulante.php');
			include_once('../entidad/Distrito.php');
			include_once('../entidad/Carrera.php');
			$OBJDistrito = new Distrito;
			$OBJCarrera = new Carrera;
			$OBJPostulante = new Postulante;
			$ListaDistritos = $OBJDistrito -> ObtenerDistritos(); 
			$ListaCarreras = $OBJCarrera -> ObtenerCarreras();
			$Datos = $OBJPostulante ->ObtenerDatosPostulante($idpostulante);
			//echo $idpostulante;
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
				$OBJMSJ -> VerFormMensaje("Error: No se encontro el Postulante",$cadena);

			}
		}
	}
?>
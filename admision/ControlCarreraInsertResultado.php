<?
	class ControlCarreraInsertResultado
	{
		public function ObtenerListaInsertCarreraResultado($login,$carrera)
		{
			include_once('../entidad/Resultado.php');
			$OBJResultado = new Resultado;
			$ListaPostulantesSinResultado = $OBJResultado -> ObtenerPostulantesAptosSinResultado($carrera);
			if($ListaPostulantesSinResultado != 0)
			{
				include_once('FormCarreraPostulanteInsertResultado.php');
				$OBJFormCarreraPostulanteInsertResultado = new FormCarreraPostulanteInsertResultado;
				$OBJFormCarreraPostulanteInsertResultado -> MostrarFormCarreraInsertResultado($login,$ListaPostulantesSinResultado);
			}
			else
			{
				$cadena="<form name='form1' method='post' action='../inc/RedireccionarMenu.php'>
				  <div align='center'>
					<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
					<input name='login' type='hidden' id='login' value='".$login."'>
				  </div>
				</form>";
				include_once('../inc/FormMensaje.php');
				$OBJMSJ = new FormMensaje;
				$OBJMSJ -> VerFormMensaje("Error: existe un aborto de operacion o no hay postulantes en la carrera seleccionada<br>contacte al administrador del sistema",$cadena);
			}
		}
	}
?>
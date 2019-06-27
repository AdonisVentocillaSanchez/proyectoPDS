<?php
	class ControlInsertResultado
	{
		public function VerFormResultadoCarreras($login)
		{
			include_once('../entidad/Carrera.php');
			include_once('FormCarreraInsertResultado.php');
			$OBJCarrera = new Carrera;
			$OBJFormCarreraInsertResultado = new FormCarreraInsertResultado;
			$ListaCarreras = $OBJCarrera -> ObtenerCarreras();
			$OBJFormCarreraInsertResultado -> MostrarFormCarreraInsertResultado($login,$ListaCarreras);
		}
	}
?>

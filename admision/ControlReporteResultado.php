<?php
	class  ControlReporteResultado
	{
		public function ReportarResultados($login)
		{
			include_once('../entidad/Carrera.php');
			include_once('FormSelecCarreraReporteResultado.php');
			$OBJCarrera = new Carrera;
			$OBJFormSelecCarreraReporteResultado = new FormSelecCarreraReporteResultado;
			$Carreras = $OBJCarrera ->ObtenerCarreras();
			$OBJFormSelecCarreraReporteResultado -> MostrarFormSelecCarreraReporteResultado($login,$Carreras);
			//echo count($Carreras);
		}
	}
?>
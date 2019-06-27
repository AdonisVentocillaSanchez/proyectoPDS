<?php
	class ControlCarreraReporteResultado
	{
		public function  GenerarReporteCarreras($login,$carrera) 
		{
			//include_once('../inc/pdf/fpdf.php');
			include_once('../entidad/Resultado.php');
			$OBJResultado = new Resultado;
			$Resultado = $OBJResultado ->ObtenerListaOrdenMeritoEstado($carrera);  
			if($Resultado != 0)
			{
				include_once('ReporteMerito.php');
				$OBJReporteMerito = new ReporteMerito;
				$OBJReporteMerito -> MostrarReporteMerito($login,$Resultado);  
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
				$OBJMSJ -> VerFormMensaje("Error: contacte con su administrador<br>no se encuentran postulantes para la carrera",$cadena);
			}					
		}		
	}
?>
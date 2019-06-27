<?php //GetSedesSeleccionadas.php desde FormVerSedesActivas.php
	if(isset($ContDistricionPostulantes) and strcmp($login,"")!=0)
	{ 
			//echo $acuTotalCapacidad."<".$TotalPostulantes;		
		if ($acuTotalCapacidad<$TotalPostulantes)
		{
				$msj = "LA CAPACIDAD TOTAL ES MENOR AL NUMERO DE POSTULANTES DEBE ACTIVAR MAS SEDES PARA CONTINUAR CON EL PROCESO";
				include_once('ControlSedeActiva.php');
				$OBJControlSedeActiva = new ControlSedeActiva;
				$OBJControlSedeActiva -> VerFormSedeActiva($login,$msj);
		}
		else
		{
				include('ControlSedesSeleccionadas.php');
				$OBJControlSedesSeleccionadas = new ControlSedesSeleccionadas;
				$OBJControlSedesSeleccionadas -> DistribuirPostulantes($login);
		}			
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>

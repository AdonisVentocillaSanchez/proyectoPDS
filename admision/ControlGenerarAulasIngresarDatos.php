<?php //ControlGenerarAulasIngresarDatos.php desde indexGenerarAulas.php
class ControlGenerarAulasIngresarDatos
{
	public function VerFormGenerarAulasIngresarDatos($login)
	{
		include_once('../entidad/Postulante.php');
		$OBJPostulante = new Postulante;
		$BanderaPostulantes = $OBJPostulante -> ObtenerCodigosPostulantesAptos();
		echo $BanderaPostulantes[0][0];
		/*if($BanderaPostulantes ==0)
		{
		
		}
		else
		{
			//error aun hay postulantes aptos sin punta
		}*/
	}
}
?>
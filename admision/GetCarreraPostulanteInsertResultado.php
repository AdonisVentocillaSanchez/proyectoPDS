<?
	if(isset($guardaResultado) and strcmp($login,"")!=0)
	{
		/*for($i=0;$i<$numPostulantes;$i++) 
		{
			echo $notas[$i]." ".$codigos[$i]."<br>";
		}*/
		include_once('ControlCarreraPostulanteInsertResultado.php');
		$OBJControlCarreraPostulanteInsertResultado = new ControlCarreraPostulanteInsertResultado;
		$OBJControlCarreraPostulanteInsertResultado -> RegistrarResultados($login,$notas,$codigos,$numPostulantes);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>
<?
	if(isset($salir)and strcmp($login,"")!=0)
	{
				//session_destroy();
				include_once('../inc/FormMensaje.php');
				$OBJMSJ = new FormMensaje;
				$OBJMSJ -> VerFormMensaje("Gracias por emplear el sistema","<a href='../index.php'>inicie su sesion</a>");
				?> <script>window.close();</script> <?php
	}
	else
	{
				include_once('../inc/FormMensaje.php');
				$OBJMSJ = new FormMensaje;
				$OBJMSJ -> VerFormMensaje("Error: se ha intentado ingresar fallidamente al sistema","<a href='../index.php'>accesar correctamente</a>");
	}
?>
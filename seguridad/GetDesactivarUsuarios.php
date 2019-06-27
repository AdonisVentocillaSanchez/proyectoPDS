<?php //GetDesactivarUsuarios.php  desde FormDesactivarUsuarios.php
	if(isset($DesactivarUser) and strcmp($login,"")!=0)
	{		
			/*for($i=0;$i<count($UserDesactivar);$i++)
			{
					echo $UserDesactivar[$i]." <br>";
			}*/
			include_once('ControlDesactivarUsuariosSelec.php');
			$OBJControlDesactivarUsuariosSelec = new ControlDesactivarUsuariosSelec;
			$OBJControlDesactivarUsuariosSelec -> DesactivarUsuariosSelec($login,$UserDesactivar);					
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado<br> o los valores ingresados en la autenticacion no son validos");		
	}

?>
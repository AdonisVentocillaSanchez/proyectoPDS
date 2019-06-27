<?php
	class ControlCarreraPostulanteInsertResultado
	{
		public function RegistrarResultados($login,$notas,$codigos,$numPostulantes)
		{
			include_once('../entidad/Resultado.php');
			$OBJResultado = new Resultado;
			$Respuesta = $OBJResultado -> GuardarResultadoCarrera($notas,$codigos,$numPostulantes);
			$cadena="<form name='form1' method='post' action='../inc/RedireccionarMenu.php'>
				  <div align='center'>
					<input name='retrocede' type='submit' id='retrocede' value='Regresar el Menu'>
					<input name='login' type='hidden' id='login' value='".$login."'>
				  </div>
				</form>";
			include_once('../inc/FormMensaje.php');
			$OBJMSJ = new FormMensaje;
			$OBJMSJ -> VerFormMensaje("Se han registrado los resultados, no se podrán alterar ahora<br>
			           Contacte al administrador del sistema si existe algun inconveniemte",$cadena);
		}
	}
?>
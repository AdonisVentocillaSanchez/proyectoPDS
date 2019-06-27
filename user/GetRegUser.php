<? // desde FormRegUser.php
if(isset($guardarUser) and strcmp($login,"")!=0)
	{		
		/* validando el login ingresado*/
			$newLogin = stripslashes(strtolower($newLogin));
			include_once('../entidad/Usuario.php');
			$OBJUsuario = new Usuario;
			$Respuesta = $OBJUsuario -> ObtenerPrivilegiosUsuario($newLogin); // coteja login usado
			if($Respuesta == 0) //no hay login en BD
			{
				 //echo "login valido";
				 /*validando privilegios*/
				 if(count($newPrivilegio)!=0) //hay por lo menos 1 privilegio
				 {
				 	//mandando a un array para tabla usuario	
					$NewUser[0] = $newLogin;
					//encriptando password
					$NewUser[1] = md5($password);
					$NewUser[2] = trim(strtolower($nombre));
					$NewUser[3] = trim(strtolower($apellidoPaterno));
					$NewUser[4] = trim(strtolower($apellidoMaterno));
					$NewUser[5] = trim(strtolower($preguntaSecreta));
					$NewUser[6] = trim(strtolower($respuestaSecreta));
					$NewUser[7] = 1;
					
					// datos para tabla detalle privilegio newLogin y el vector newPrivilegio
					// enviando al control
					include_once('ControlRegUser.php');
				 	$OBJControlRegUser = new ControlRegUser;
				 	$OBJControlRegUser -> AlmacenarUserPrivilegios($login,$NewUser,$newLogin,$newPrivilegio);
				 }
				 else
				 {
				 		include_once('../entidad/Privilegio.php');
						$OBJPrivilegio = new Privilegio;
						$ListaPrivilegios = $OBJPrivilegio -> ObtenerPrivilegios();
						$valores['nombre']= strtolower($nombre);
						$valores['apaterno']=strtolower($apellidoPaterno);
						$valores['amaterno']=strtolower($apellidoMaterno);
						$valores['psecreta']=$preguntaSecreta;
						$valores['rsecreta']=$respuestaSecreta;
						$valores['mensajeError']="<font color='#FF0000'><strong>MENSAJE:<br><br>No se esta asignado privilegios a este usuario
						                           <br><br>seleccione por lo menos 1 privilegio </strong></font>";
						include_once('FormRegUser.php');
						$OBJFormRegUserA = new FormRegUser;
						$OBJFormRegUserA -> MostrarFormRegUser($login,$ListaPrivilegios,$valores);//para validacion de valores
				 }
			}
			else
			{
				include_once('../entidad/Privilegio.php');
				$OBJPrivilegio = new Privilegio;
				$ListaPrivilegios = $OBJPrivilegio -> ObtenerPrivilegios();
				$valores['nombre']= strtolower($nombre);
				$valores['apaterno']=strtolower($apellidoPaterno);
				$valores['amaterno']=strtolower($apellidoMaterno);
				$valores['psecreta']=stripslashes($preguntaSecreta);
				$valores['rsecreta']=stripslashes($respuestaSecreta);
				$valores['mensajeError']="<font color='#FF0000'><strong>MENSAJE:<br><br>El login ya fue usado<br><br>Ingrese nuevamente los datos faltantes y seleccione los privilegios</strong></font>";
				include_once('FormRegUser.php');
				$OBJFormRegUserA = new FormRegUser;
				$OBJFormRegUserA -> MostrarFormRegUser($login,$ListaPrivilegios,$valores);//para validacion de valores
			}
		/*******************************/
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}

?>
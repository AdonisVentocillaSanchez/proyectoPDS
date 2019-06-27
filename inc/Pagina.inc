<?php
	class Pagina
	{
		protected function NoClickDerecho()
		{
			?>
			<script>
			function right(e) {
			var msg = " EMPLEE LOS BOTONES DEL SISTEMA - GRACIAS ";
			if (navigator.appName == 'Netscape' && e.which == 3) {
			alert(msg); // Delete this line to disable but not alert user
			return false;
			}
			else
			if (navigator.appName == 'Microsoft Internet Explorer' && event.button==2) {
			alert(msg); // Delete this line to disable but not alert user
			return false;
			}
			return true;
			}
			document.onmousedown = right;	
			</script>
			<?php
		}
		protected function MostrarCabeceraReporte($title)
		{
			
		?>			
		<html>
			<head>
			<title><?php echo strtoupper($title); ?></title>
			
			<!-- ESTOS SCRIPTS SON PARA NO HABILITAR EL FUNCIONAMIENTO DE REGRESAR -->
			<!-- DEL BOTON ATRAS DEL NAVEGADOR Y PARA ELIMINAR COOKIES DE LA CACHE -->
			<meta http-equiv="Expires" content="0" />
			<meta http-equiv="Pragma" content="no-cache" />
			<script>
				if (history.forward(1)) //Si existe un valor, es decir, que se ha vuelto atrás
				{location.replace(history.forward(1))} //reemplaza la página actual por ese valor, es decir, 
				//la URL desde laque volviste atrás
			</script>
			 <script language="javascript" type="text/javascript">
				 if (document.cookie != "") 
				 {
					la_cookie = document.cookie.split("; ")
					fecha_fin = new Date
					fecha_fin.setDate(fecha_fin.getDate()-1)
					for (i=0; i<la_cookie.length; i++) 
					{
						mi_cookie = la_cookie.split("=")[0]
						document.cookie = mi_cookie + "=;expires=" + fecha_fin.toGMTString()
					}
					document.write("Se han eliminado: " + la_cookie.length + " Cookies ")
				 }			
			 </script>
			 <script>
				 function capturarf5(e)
					{
						var code = (e.keyCode ? e.keyCode : e.which);
						if(code == 116) 
						{
							alert("EL SISTEMA HA DESABILITADO LA TECLA F5");
							return false;
						 }
					}
					document.onkeydown=capturarf5;
			 </script>
			<!-- TERMINA EL SCRIPT -->			
			</head>
			<table width="84%" border="0"  align="center">
			  <tr> 
				<td width="11%" rowspan="2"><div align="center"><img src="/intratello/img/logo2.png" width="83" height="82"></div></td>
				<td width="89%" height="28"> <p align="center"><strong>INSTITUTO SUPERIOR TECNOLOGICO 
					PUBLICO JULIO CESAR TELLO</strong></p></td>
			  </tr>
			  <tr> 
				<td height="34"> <div align="center"><font size="2">AV. BOLIVAR N&deg; 100 
					- VILLA EL SALVADOR<br>
					2873676 - 2879783 - 2878585</font></div></td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td height="34"><center><?php echo $title; ?></center></td>
			  </tr>
			</table>
			<body  OnLoad ="<? echo $cadena;?>" >
		
		<?php }
		
		protected function EncabezadoForm($titulo,$cadena)
		{	
		?>
			<html>
			<head>
			<title><?php echo strtoupper($titulo); ?></title>			
			<!-- ESTOS SCRIPTS SON PARA NO HABILITAR EL FUNCIONAMIENTO DE REGRESAR -->
			<!-- DEL BOTON ATRAS DEL NAVEGADOR Y PARA ELIMINAR COOKIES DE LA CACHE -->
			<meta http-equiv="Expires" content="0" />
			<meta http-equiv="Pragma" content="no-cache" />
			</head>
			<script>
				if (history.forward(1)) //Si existe un valor, es decir, que se ha vuelto atrás
				{location.replace(history.forward(1))} //reemplaza la página actual por ese valor, es decir, 
				//la URL desde laque volviste atrás
			 </script>
			 <script language="javascript" type="text/javascript">
				 if (document.cookie != "") 
				 {
					la_cookie = document.cookie.split("; ")
					fecha_fin = new Date
					fecha_fin.setDate(fecha_fin.getDate()-1)
					for (i=0; i<la_cookie.length; i++) 
					{
						mi_cookie = la_cookie.split("=")[0]
						document.cookie = mi_cookie + "=;expires=" + fecha_fin.toGMTString()
					}
					document.write("Se han eliminado: " + la_cookie.length + " Cookies ")
				 }			
			 </script>
			 <script>
				 function capturarf5(e)
					{
						var code = (e.keyCode ? e.keyCode : e.which);
						if(code == 116) 
						{
							alert("EL SISTEMA HA DESABILITADO LA TECLA F5");
							return false;
						 }
					}
					document.onkeydown=capturarf5;
			 </script>
			 <!-- TERMINA EL SCRIPT -->
			<body  OnLoad ="<? echo $cadena;?>" >
			<table width="53%" border="0"  align="center">
				  <tr> 
					<td width="27%" rowspan="3"><div align="center"><img src="/intratello/img/logo.jpg" width="105" height="95"></div></td>
					<td><div align="center">INSTITUTO SUPERIOR TECNOLOGICO PUBLICO</div></td>
				  </tr>
				  <tr> 
					<td><div align="center">JULIO CESAR TELLO
						<hr>
					  </div></td>
				  </tr>
				  <tr> 
					<td><div align="center">
						<p>Sistema de Admisi&oacute;n - versi&oacute;n 1.0 - Departamento de Computaci&oacute;n 
						  e Inform&aacute;tica</p>
						<p><font size="1">AV. BOLIVAR N&deg;100 - VILLA EL SALVADOR<br>
						  Tlf.2873676 - 2879783 - 2878585</font></p>
						</div></td>
				  </tr>
		</table>	
		<?php }
		protected function PieForm()
		{?>
			</body>
			<br>
			<marquee behavior="alternate" align="midldle" width="100%" height="50" class="prod_officeexpert">Instituto Superior Tecnologico Publico Julio Cesar Tello - Departamento de Computación e Informática
			</marquee>			
			<br>
			<center><span class="prod_frontpage">Ing. Ignacio Ruben Tacza Valverde</span></center>
			<center><span class="prod_frontpage">Lic. Eloy Humberto Cojal Torres</span></center>
			<center><span class="prod_frontpage">Prof. Pedro Bravo Pardo</span></center>
</html>
		<?php }
	}
?>

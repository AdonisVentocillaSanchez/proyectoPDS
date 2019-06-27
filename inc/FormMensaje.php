<?php
	include_once('Pagina.inc');
	class FormMensaje extends Pagina
	{
		public function VerFormMensaje($MSJ,$link)
		{
			$this->NoClickDerecho();
			$this -> EncabezadoForm("Mensaje Sistema","");
			?>
				<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />

				<style type="text/css">
<!--
.Estilo1 {font-size: 14px}
-->
                </style>
				<br>
				<p align="center" class="titsec1"><?php echo strtoupper($MSJ); ?></p>
				 <br>
				
				<p align="center" class="titsec2"><?php echo strtolower($link); ?></p>
			    <p><br>
			      <?php
			$this -> PieForm();			
		}
		
		public function RegresarInicio($mensaje)
		{
			$this->NoClickDerecho();
			$this -> EncabezadoForm("Mensaje Sistema","");
			
			?>
				<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />

				<style type="text/css">
<!--
.Estilo1 {font-size: 14px}
-->
                </style>
				<br>
				<p align="center" class="titsec1"><?php echo strtoupper($mensaje); ?></p>
				 <br>
				<br>
							<form name="form1" method="post" action="../inc/RespuestaMalAcceso.php">
							  <div align="center">
								<input name="Submit" type="submit" class="bodymenubold" value="Regresar al Inicio">
							  </div>
							</form>
			<?
		}
		
	}
?>		
				
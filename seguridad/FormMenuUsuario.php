<script language="JavaScript" type="text/JavaScript">
			document.onkeydown = function(){  
    if(window.event && window.event.keyCode == 116){ 
     window.event.keyCode = 505;  
    } 
    if(window.event && window.event.keyCode == 505){  
     alert("NO");     
    }  
}
			</script>
<?php
	include_once('../inc/Pagina.inc');
	class FormMenuUsuario extends Pagina
	{
		public function MostrarMensaje($msj)
		{
			echo "<center>".strtoupper($msj)."</center><br>";
		}
		
		public function MostrarMenuUsuario($login,$privilegios) //resultado es matriz de privilegios
		{
			$this->NoClickDerecho();
			$this -> EncabezadoForm("Menu de Usuario:  bienvenido '$login'","");
			?>
			<link href="../css/stylo_1.css" rel="stylesheet" type="text/css" />
						
			<?php
			echo "<br><center> <p class ='titsec1' > MENU DE USUARIO</p></center><br>";
			echo "<table width='75%' border='0' class= 'nav3' align='center'>";
			$max=count($privilegios);
			//echo $max;
			$cont=0;
			for($i=0;$i<$max;$i++)
			{
				echo "<tr>";
				for($j=0;$j<3;$j++)
				{
					echo "<td>";
					if($cont <$max)
					{
?>
										
					<table width="146" border="0">
					<tr>
					<td>
					  <div align="center"><img src="<? echo $privilegios[$cont]['imagen']?>" width="60" height="60">					</div></td>
					<td>
					<form method="post" action="<? echo $privilegios[$cont]['rutaPrivilegio'];?>">
					<center>
					  <input name="<? echo $privilegios[$cont]['idPrivilegio']; ?>" type="submit" class="bodymenubold" value="..." />
					  </center>
					  <input name="login" type="hidden" id="login" value="<? echo $login; ?>" />
					</form>					</td>
					<td class="prod_officeexpert"><? echo " ".$privilegios[$cont]['labelPrivilegio']."<br>(".$privilegios[$cont]['categoriaPrivilegio'].")"; ?></td>
					</tr>
</table>
<?php
					}
					echo "</td>";
					$cont++;
				}
				echo "</tr>";
				if($cont >= $max) break;
			}
			echo "</table>";
			
			
			
?>
<br>
<p class="prod_logo">
<form name="form2" method="post" action="../inc/AbandonarSistema.php">
              <div align="center"> 
                <input name="salir" type="submit" class="bodymenubold" id="salir" value="Salir del sistema">
                <input name="login" type="hidden" id="login" value="<?php echo $login; ?>">
              </div>
            </form></p>
<p> 
  <?php	
			echo "Usuario: ".$login;
			$this -> PieForm();						
		}
	}
?>

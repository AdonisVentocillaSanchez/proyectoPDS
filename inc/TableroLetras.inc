
<?php
class tableroLetras
{
	private function Aleatorio()
		{
			$i=0;
			do{
				$sw=1;
				$valor=rand(0,9);
				for($j=0;$j<$i;$j++)
				{
					if($vector[$j]==$valor)
					{
						$sw=0;
						break;
					}
				}
				if($sw==1)
				{
					$vector[$i]=$valor;
					$i++;
				}
			}while($i<10);
			return($vector);
		}

	public function mostrarTableroNumeros($cajaTexto,$prefBoton)
	{
		$valor=$this->Aleatorio();
		?>
		
<table width="28%" border="1">
  <tr> 
    <td><input name="<? echo $prefBoton;?>b0" type="button" id="<? echo $prefBoton;?>b0" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."b0.value"; ?>"  value="<?php echo $valor[0]; ?>"></td>
    <td><input name="<? echo $prefBoton;?>b1" type="button" id="<? echo $prefBoton;?>b1" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."b1.value"; ?>"  value="<?php echo $valor[1]; ?>"></td>
    <td><input name="<? echo $prefBoton;?>b2" type="button" id="<? echo $prefBoton;?>b2" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."b2.value"; ?>"  value="<?php echo $valor[2]; ?>"></td>
  </tr>
  <tr> 
    <td><input name="<? echo $prefBoton;?>b3" type="button" id="<? echo $prefBoton;?>b3" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."b3.value"; ?>"  value="<?php echo $valor[3]; ?>"></td>
    <td><input name="<? echo $prefBoton;?>b4" type="button" id="<? echo $prefBoton;?>b4" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."b4.value"; ?>"  value="<?php echo $valor[4]; ?>"></td>
    <td><input name="<? echo $prefBoton;?>b5" type="button" id="<? echo $prefBoton;?>b5" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."b5.value"; ?>"  value="<?php echo $valor[5]; ?>"></td>
  </tr>
  <tr> 
    <td><input name="<? echo $prefBoton;?>b6" type="button" id="<? echo $prefBoton;?>b6" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."b6.value"; ?>"  value="<?php echo $valor[6]; ?>"></td>
    <td><input name="<? echo $prefBoton;?>b7" type="button" id="<? echo $prefBoton;?>b7" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."b7.value"; ?>"  value="<?php echo $valor[7]; ?>"></td>
    <td><input name="<? echo $prefBoton;?>b8" type="button" id="<? echo $prefBoton;?>b8" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."b8.value"; ?>"  value="<?php echo $valor[8]; ?>"></td>
  </tr>
  <tr> 
    <td><input name="<? echo $prefBoton;?>b9" type="button" id="<? echo $prefBoton;?>b9" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."b9.value"; ?>"  value="<?php echo $valor[9]; ?>"></td>
    <td colspan="2"> <div align="center">
        <input type="button" name="Submit" value="Borrar" onClick="<?php echo $cajaTexto.".value ='' " ; ?>" >
      </div></td>
  </tr>
</table>
		<?php		
	}
	
	public function mostrarTableroLetras($cajaTexto,$prefBoton)
	{
		//$cajaTexto."value = ".$cajaTexto."value + A.value";
	?>
		<table width="30%" border="1" align="center">
				<tr> 
				  <td> <div align="center"> 
					  
        <input name="<? echo $prefBoton;?>A" type="button" id="<? echo $prefBoton;?>A" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."A.value"; ?>" value="A">
					</div></td>
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>B" type="button" id="<? echo $prefBoton;?>B" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."B.value"; ?>" value="B">
					</div></td>
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>C" type="button" id="<? echo $prefBoton;?>C" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."C.value"; ?>" value="C">
					</div></td>
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>D" type="button" id="<? echo $prefBoton;?>D" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."D.value"; ?>" value="D">
					</div></td>
				  <td><div align="center"> 
					  <input name="<? echo $prefBoton;?>E" type="button" id="<? echo $prefBoton;?>E" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."E.value"; ?>" value="E">
					</div></td>
				</tr>
				<tr> 
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>F" type="button" id="<? echo $prefBoton;?>F" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."F.value"; ?>" value="F">
					</div></td>
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>G" type="button" id="<? echo $prefBoton;?>G" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."G.value"; ?>" value="G">
					</div></td>
				  <td><p align="center"> 
					  <input name="<? echo $prefBoton;?>H" type="button" id="<? echo $prefBoton;?>H" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."H.value"; ?>" value="H">
					</p></td>
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>I" type="button" id="<? echo $prefBoton;?>I" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."I.value"; ?>" value="I">
					</div></td>
				  <td><div align="center"> 
					  <input name="<? echo $prefBoton;?>J" type="button" id="<? echo $prefBoton;?>J" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."J.value"; ?>" value="J">
					</div></td>
				</tr>
				<tr> 
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>K" type="button" id="<? echo $prefBoton;?>K" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."K.value"; ?>" value="K">
					</div></td>
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>L" type="button" id="<? echo $prefBoton;?>L" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."L.value"; ?>" value="L">
					</div></td>
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>M" type="button" id="<? echo $prefBoton;?>M" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."M.value"; ?>" value="M">
					</div></td>
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>N" type="button" id="<? echo $prefBoton;?>N" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."N.value"; ?>" value="N">
					</div></td>
				  <td><div align="center"> 
					  <input name="<? echo $prefBoton;?>O" type="button" id="<? echo $prefBoton;?>O" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."O.value"; ?>" value="O">
					</div></td>
				</tr>
				<tr> 
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>P" type="button" id="<? echo $prefBoton;?>P" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."P.value"; ?>" value="P">
					</div></td>
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>Q" type="submit" id="<? echo $prefBoton;?>Q" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."Q.value"; ?>" value="Q">
					</div></td>
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>R" type="button" id="<? echo $prefBoton;?>R" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."R.value"; ?>" value="R">
					</div></td>
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>S" type="button" id="<? echo $prefBoton;?>S" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."S.value"; ?>" value="S">
					</div></td>
				  <td><div align="center"> 
					  <input name="<? echo $prefBoton;?>T" type="button" id="<? echo $prefBoton;?>T" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."T.value"; ?>" value="T">
					</div></td>
				</tr>
				<tr> 
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>U" type="button" id="<? echo $prefBoton;?>U" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."U.value"; ?>" value="U">
					</div></td>
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>V" type="button" id="<? echo $prefBoton;?>V" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."V.value"; ?>" value="V">
					</div></td>
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>W" type="button" id="<? echo $prefBoton;?>W" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."W.value"; ?>" value="W">
					</div></td>
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>X" type="button" id="<? echo $prefBoton;?>X" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."X.value"; ?>" value="X">
					</div></td>
				  <td><div align="center"> 
					  <input name="<? echo $prefBoton;?>Y" type="button" id=<? echo $prefBoton;?>"Y" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."Y.value"; ?>" value="Y">
					</div></td>
				</tr>
				<tr> 
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>Z" type="button" id=<? echo $prefBoton;?>"Z" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."Z.value"; ?>" value="Z">
					</div></td>
				  <td> <div align="center"> 
					  <input name="<? echo $prefBoton;?>RAYA" type="button" id="<? echo $prefBoton;?>RAYA" onClick="<?php echo $cajaTexto.".value = ".$cajaTexto.".value + ".$prefBoton."RAYA.value"; ?>" value="_">
					</div></td>
				  <td colspan="3"> <div align="center"> </div>
					<div align="center"> 
					  
                   <input type="button" name="Submit" value="Borrar" onClick="<?php echo $cajaTexto.".value ='' " ; ?>" >
					</div></td>
				</tr>
			  </table>
			  <? }
	}
	?>


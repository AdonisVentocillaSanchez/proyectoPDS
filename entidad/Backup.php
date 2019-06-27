<?
class Backup
{
	private function EjecutarConexion()
	{
			include_once('Conecta.inc');			
			$OBJConexion = new Conecta;
			$OBJConexion -> ConectaBD();
	}
	public function RealizarBackup($login,$tables ='*')
	{
		   
		   $this -> EjecutarConexion();
		   if($tables == '*')
		   {
			  $tables = array();
			  $result = mysql_query('SHOW TABLES');
			  while($row = mysql_fetch_row($result))  {	 $tables[] = $row[0];  }
		   }
		   else   {	  $tables = is_array($tables) ? $tables : explode(',',$tables);   }
		     //cycle through
		   foreach($tables as $table)
		   {
			  $result = mysql_query('SELECT * FROM '.$table);
			  $num_fields = mysql_num_fields($result);
			  //$return.= 'IF EXIST(DROP TABLE '.$table.');';
			  $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
			  $return.= "\n\n".$row2[1].";\n\n";
			  for ($i = 0; $i < $num_fields; $i++)
			  {
				 while($row = mysql_fetch_row($result))
				 {
					$return.= 'INSERT INTO '.$table.' VALUES(';
					for($j=0; $j<$num_fields; $j++) 
					{
					   $row[$j] = addslashes($row[$j]);
					   $row[$j] = ereg_replace("\n","\\n",$row[$j]);
					   if (isset($row[$j]))   { $return.= '"'.$row[$j].'"' ; } 
					   else { 	$return.= '""'; }
					   if ($j<($num_fields-1)) { $return.= ','; }
					}
					$return.= ");\n";
				  }
			   }
			   $return.="\n\n\n";
		   }
		   
		   //save file
		   //$handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
		   $handle = fopen('db-backup-'.date('dmYh-i-s').'.sql','w+');
		   fwrite($handle,$return);
		   fclose($handle);
		   return 1;
	}
}
?>
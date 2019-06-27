<?php
	class Conecta
	{
		public function ConectaBD()
		{
			mysql_connect('localhost','root','lissette');
			mysql_select_db('intratello');			
		}
	}
?>
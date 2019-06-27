<?
class ControlExcel
{
	public function ConvierteExcel($login,$nombreArchivo,$matrizDatos)
	{
		//Antes de esto, debe estar la clase anterior! 
		//Generamos el objeto 
		include_once('ExportExcel.php');
		$excel = new Export2ExcelClass; 
		//Matriz a convertir: 
		//$Matriz = array(array('Nombre', 'Apellido', 'Edad'),array('Luciana', 'Camila', 1),array('Eduardo','Cuomo', 24),	array('Vanesa', 'Chavez', 21) 		); 
		//Convertimos la matriz a Excel: 
		$excel->WriteMatriz($Matriz); 
		//Hacemos que sea descargable: 
		$excel->Download($nombreArchivo); 
	}
}
?>
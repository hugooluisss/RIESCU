<?php
require_once('Spreadsheet/Excel/Writer.php');

class RPolizas{
	private $libro;
	
	public function RPolizas(){
		$file = "temporal/".basename(tempnam("temporal/", 'tmp'));
		rename($file, $file.'.xls');
		$file .= '.xls';		
		
		$this->libro = new Spreadsheet_Excel_Writer($file);
		$this->file = $file;
	}
	
	function generar($datos){
		$hoja = & $this->libro->addWorksheet("Pólizas");
		$y = 3;
		$negrita = &$this->libro->addFormat();
		$negrita->setBold();
		$negrita->setAlign("merge");
		
		$hoja->write(1, 0, utf8_decode("Documento generado el: ".date("Y-m-d")), $negrita);
		
		$hoja->write($y, 0, utf8_decode("Asegurado"), $negrita);
		$hoja->write($y, 1, utf8_decode("Domicilio"), $negrita);
		$hoja->write($y, 2, utf8_decode("NIT"), $negrita);
		$hoja->write($y, 3, utf8_decode("Aseguradora"), $negrita);
		$hoja->write($y, 4, utf8_decode("Req"), $negrita);
		$hoja->write($y, 5, utf8_decode("Emisión"), $negrita);
		$hoja->write($y, 6, utf8_decode("Póliza"), $negrita);
		$hoja->write($y, 7, utf8_decode("Número"), $negrita);
		$hoja->write($y, 8, utf8_decode("Vencimiento"), $negrita);
		$hoja->write($y, 9, utf8_decode("Estado"), $negrita);
		$hoja->write($y, 10, utf8_decode("Forma de pago"), $negrita);
		$hoja->write($y, 11, utf8_decode("Agente"), $negrita);
		$hoja->write($y, 12, utf8_decode("Monto"), $negrita);
		$hoja->write($y, 13, utf8_decode("Pago"), $negrita);
		$hoja->write($y, 14, utf8_decode("Entrega factura"), $negrita);
		$y++;
		
		foreach($datos as $producto){
			$hoja->write($y, 0, utf8_decode($producto['asegurado']));
			$hoja->write($y, 1, utf8_decode($producto['direccion']));
			$hoja->write($y, 2, utf8_decode($producto['nit']));
			$hoja->write($y, 3, utf8_decode($producto['aseguradora']));
			$hoja->write($y, 4, utf8_decode($producto['requerimiento']));
			$hoja->write($y, 5, utf8_decode($producto['emision']));
			$hoja->write($y, 6, utf8_decode($producto['poliza']));
			$hoja->write($y, 7, utf8_decode($producto['numero']));
			$hoja->write($y, 8, utf8_decode($producto['vencimiento']));
			$hoja->write($y, 9, utf8_decode($producto['estado'].(in_array($row.idEstado, array(1, 2, 3)?($row.dias." días"):''))));
			$hoja->write($y, 10, utf8_decode($producto['formaPago']));
			$hoja->write($y, 11, utf8_decode($producto['usuario']));
			$hoja->write($y, 12, utf8_decode($producto['monto']));
			$hoja->write($y, 13, utf8_decode($producto['fechaPago']));
			$hoja->write($y, 14, utf8_decode($producto['fechaFactura']));
			
			$y++;
		}
	}
	
	public function output(){
		$this->libro->close();
		chmod($this->file, 0777);
		return $this->file;
	}
}
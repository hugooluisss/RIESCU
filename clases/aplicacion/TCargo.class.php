<?php
/**
* TCargo
* Cargos a la póliza
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TCargo{
	private $idCargo;
	private $idPoliza;
	private $requerimiento;
	private $vencimiento;
	private $monto;
	public $estado;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TCargo($id = ''){
		$this->estado = new TEstado(1);
		$this->setId($id);		
		return true;
	}
	
	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->query("select * from cargo where idCargo = ".$id);
		
		foreach($rs->fetch_assoc() as $field => $val){
			switch($field){
				case 'idEstado':
					$this->estado = new TEstado($val);
				break;
				default:
					$this->$field = $val;
			}
		}
		
		return true;
	}
		
	/**
	* Retorna el identificador del objeto
	*
	* @autor Hugo
	* @access public
	* @return integer identificador
	*/
	
	public function getId(){
		return $this->idCargo;
	}
	
	/**
	* Establece requerimiento
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar por default es 2 que hace referencia a doctor
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setRequerimiento($val = ''){
		$this->requerimiento = $val;
		return true;
	}
	
	/**
	* Retorna Requerimiento
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getRequerimiento(){
		return $this->requerimiento;
	}
	
	/**
	* Establece vencimiento
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar por default es 2 que hace referencia a doctor
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setVencimiento($val = ''){
		$this->vencimiento = $val;
		return true;
	}
	
	/**
	* Retorna fecha de vencimiento
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getVencimiento(){
		return $this->vencimiento;
	}
	
	/**
	* Establece el monto
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar por default es 2 que hace referencia a doctor
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setMonto($val = 0){
		$this->monto = $val;
		return true;
	}
	
	/**
	* Retorna el monto
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getMonto(){
		return $this->monto;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar($idPoliza = ''){
		if($this->estado->getId() == '') return false;
			
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			if ($idPoliza == '') return false;
			
			$sql = "INSERT INTO cargo(idPoliza, idEstado) VALUES(".$idPoliza.", 1);";
			$rs = $db->query($sql) or errorMySQL($db, $sql);
			
			if (!$rs) return false;
				
			$this->idCargo = $db->insert_id;
		}
		
		if ($this->getId() == '')
			return false;
		
		$sql = "UPDATE cargo
			SET
				requerimiento = '".$this->getRequerimiento()."',
				vencimiento = '".$this->getVencimiento()."',
				monto = ".$this->getMonto().",
				idEstado = ".$this->estado->getId()."
			WHERE idCargo = ".$this->getId();
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
			
		return $rs?true:false;
	}
	
	/**
	* Elimina el objeto de la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->query("delete from cargo where idCargo = ".$this->getId());
		
		return $rs?true:false;
	}
	
	/**
	* Guarda el pago
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPago($fechaPago = '', $fechaFactura = '', $formaPago = '', $referencia = ''){
		if($this->getId() == '') return false;
			
		$db = TBase::conectaDB();
		$sql = "delete from pago where idCargo = ".$this->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		if ($rs){
			$sql = "insert into pago(idCargo, fechaPago, fechaFactura, formaPago, referencia) values (".$this->getId().", '".$fechaPago."', '".$fechaFactura."', '".$formaPago."', '".$referencia."')";
			$rs = $db->query($sql) or errorMySQL($db, $sql);
				
			return $rs?true:false;
		}
		
		return false;
	}
}
?>
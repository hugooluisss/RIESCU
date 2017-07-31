<?php
/**
* TPoliza
* Poliza
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TPoliza{
	private $idPoliza;
	private $registro;
	private $emision;
	private $numero;
	public $asegurado;
	public $aseguradora;
	public $usuario;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TPoliza($id = ''){
		$this->asegurado = new TAsegurado();
		$this->aseguradora = new TAseguradora();
		$this->usuario = new TUsuario();
		
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
		$rs = $db->query("select * from poliza where idPoliza = ".$id);
		
		foreach($rs->fetch_assoc() as $field => $val){
			switch($field){
				case 'idAsegurado':
					$this->asegurado = new TAsegurado($val);
				break;
				case 'idAseguradora':
					$this->aseguradora = new TAseguradora($val);
				break;
				case 'idUsuario':
					$this->usuario = new TUsuario($val);
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
		return $this->idPoliza;
	}
	
	/**
	* Establece la fecha de registro
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar por default es 2 que hace referencia a doctor
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setRegistro($val = ''){
		$this->registro = $val == ''?date("Y-m-d"):$val;
		
		return true;
	}
	
	/**
	* Retorna la fecha de registro
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getRegistro(){
		return $this->registro == ''?date('Y-m-d'):$this->registro;
	}
	
	/**
	* Establece la fecha de emision
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar por default es 2 que hace referencia a doctor
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setEmision($val = ''){
		$this->emision = $val == ''?date("Y-m-d"):$val;
		
		return true;
	}
	
	/**
	* Retorna la fecha de emision
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getEmision(){
		return $this->emision == ''?date('Y-m-d'):$this->emision;
	}

	
	/**
	* Establece el número de póliza
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar por default es 2 que hace referencia a doctor
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setNumero($val = ''){
		$this->numero = $val;
		return true;
	}
	
	/**
	* Retorna el número de poliza
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getNumero(){
		return $this->numero;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		if ($this->asegurado->getId() == '') return false;
		if ($this->aseguradora->getId() == '') return false;
		if ($this->usuario->getId() == '') return false;
		
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$sql = "INSERT INTO poliza(idAsegurado, idAseguradora, idUsuario) VALUES(".$this->asegurado->getId().", ".$this->aseguradora->getId().", ".$this->usuario->getId().");";
			$rs = $db->query($sql) or errorMySQL($db, $sql);
			
			if (!$rs) return false;
				
			$this->idPoliza = $db->insert_id;
		}		
		
		if ($this->getId() == '')
			return false;
		
		$sql = "UPDATE poliza
			SET
				idAseguradora = ".$this->aseguradora->getId().",
				idAsegurado = ".$this->asegurado->getId().",
				idUsuario = ".$this->usuario->getId().",
				registro = '".$this->getRegistro()."',
				emision = '".$this->getEmision()."',
				numero = '".$this->getNumero()."'
			WHERE idPoliza = ".$this->getId();
			
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
		$rs = $db->query("delete from poliza where idPoliza = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>
<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaEstados':
		$db = TBase::conectaDB();
		global $userSesion;
		
		$rs = $db->query("select * from estado");
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cestados':
		switch($objModulo->getAction()){
			case 'add':
				global $userSesion;
				$obj = new TEstado();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setColor($_POST['color']);
				
				$smarty->assign("json", array("band" => $obj->guardar(), "id" => $obj->getId()));
			break;
		}
	break;
}
?>
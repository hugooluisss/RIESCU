<?php
global $objModulo;
switch($objModulo->getId()){
	case 'polizas':
		$db = TBase::conectaDB();
		$rs = $db->query("select * from usuario a where a.visible = true");
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("usuarios", $datos);
		
		$rs = $db->query("select * from aseguradora a where a.visible = true");
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("aseguradoras", $datos);
	break;
	case 'listaPolizas':
		$db = TBase::conectaDB();
		global $userSesion;
		if ($userSesion->getIdTipo() == 1)
			$sql = "select a.*, b.nombre as asegurado, c.nombre as aseguradora, nit, direccion from poliza a join asegurado b using(idAsegurado) join aseguradora c using(idAseguradora)";
		else
			$sql = "select a.*, b.nombre as asegurado, c.nombre as aseguradora, nit, direccion from poliza a join asegurado b using(idAsegurado) join aseguradora c using(idAseguradora) where idUsuario = ".$userSesion->getId();
			
		$rs = $db->query($sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cpolizas':
		switch($objModulo->getAction()){
			case 'add':
				global $userSesion;
				$obj = new TPoliza();
				$obj->setId($_POST['id']);
				$obj->asegurado = new TAsegurado($_POST['asegurado']);
				$obj->aseguradora = new TAseguradora($_POST['aseguradora']);
				$obj->usuario = new TUsuario($_POST['usuario']);
				$obj->setNumero($_POST['numero']);
				
				$smarty->assign("json", array("band" => $obj->guardar(), "id" => $obj->getId()));
			break;
			case 'del':
				$obj = new TPoliza($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>
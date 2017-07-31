<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaAseguradoras': case 'listaAseguradorasAutocomplete':
		$db = TBase::conectaDB();
		global $userSesion;
		
		$rs = $db->query("select * from aseguradora a where nombre like '%".$_GET['term']."%' and a.visible = true");
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['label'] = $row['nombre'];
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
		$smarty->assign("json", $datos);
	break;
	case 'caseguradoras':
		switch($objModulo->getAction()){
			case 'add':
				global $userSesion;
				$obj = new TAseguradora();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				
				$smarty->assign("json", array("band" => $obj->guardar(), "id" => $obj->getId()));
			break;
			case 'del':
				$obj = new TAseguradora($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>
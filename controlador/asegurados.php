<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaAsegurados': case 'listaAseguradosAutocomplete':
		$db = TBase::conectaDB();
		global $userSesion;
		
		$rs = $db->query("select * from asegurado a where nombre like '%".$_GET['term']."%' and a.visible = true");
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['label'] = $row['nombre'];
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
		$smarty->assign("json", $datos);
	break;
	case 'casegurados':
		switch($objModulo->getAction()){
			case 'add':
				global $userSesion;
				$obj = new TAsegurado();
				
				$obj->setId($_POST['id']);
				$obj->setNIT($_POST['nit']);
				$obj->setNombre($_POST['nombre']);
				$obj->setDireccion($_POST['direccion']);
				$obj->setCorreo($_POST['correo']);
				
				$smarty->assign("json", array("band" => $obj->guardar(), "id" => $obj->getId()));
			break;
			case 'del':
				$obj = new TAsegurado($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>
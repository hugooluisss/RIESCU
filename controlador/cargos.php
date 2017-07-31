<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaCargos':
		$db = TBase::conectaDB();
		global $userSesion;
		
		$rs = $db->query("select a.*, b.nombre as estado, b.color from cargo a join estado b using(idEstado) where idPoliza = ".$_POST['poliza']);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
		$smarty->assign("json", $datos);
	break;
	case 'detalleCargo':
		$db = TBase::conectaDB();
		$rs = $db->query("select *, c.nombre as asegurado, d.nombre as aseguradora,
				e.nombre as estado
			from poliza a join cargo b using(idPoliza) 
				join asegurado c using(idAsegurado) 
				join aseguradora d using(idAseguradora) 
				join estado e using(idEstado) 
				left join pago f using(idCargo)
			where b.idCargo = ".$_POST['id']);
			
		$smarty->assign("cargo", $rs->fetch_assoc());
	break;
	case 'ccargos':
		switch($objModulo->getAction()){
			case 'add':
				global $userSesion;
				$obj = new TCargo();
				
				$obj->setId($_POST['id']);
				$obj->setRequerimiento($_POST['requerimiento']);
				$obj->setVencimiento($_POST['vencimiento']);
				$obj->setMonto($_POST['monto']);
				
				$poliza = new TPoliza($_POST['poliza']);
				$fPoliza = new DateTime($poliza->getEmision());
				$fVencimiento = new DateTime($_POST['vencimiento']);
				$interval = $fPoliza->diff($fVencimiento);
				
				if ($interval->format('%r%a') < 0)
					$smarty->assign("json", array(
						"band" => false, 
						"mensaje" => "La fecha de vencimiento no puede ser anterior a la fecha de emision de la poliza (".$poliza->getEmision().")", 
						"dias" => $interval->format('%r%a')
					));
				else
					$smarty->assign("json", array("band" => $obj->guardar($_POST['poliza']), "id" => $obj->getId(), "dias" => $interval->format('%r%a')));
			break;
			case 'del':
				$obj = new TCargo($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
			case 'setEstado':
				$obj = new TCargo($_POST['id']);
				
				switch($_POST['estado']){
					case '4': #cancelado
						$obj->estado->setId($_POST['estado']);
						$smarty->assign("json", array("band" => $obj->guardar()));
					break;
					case '5':
						$obj->estado->setId($_POST['estado']);
						if($obj->setPago($_POST['fechaPago'], $_POST['fechaFactura'], $_POST['formaPago'], $_POST['referencia']))
							$smarty->assign("json", array("band" => $obj->guardar()));
						else
							$smarty->assign("json", array("band" => false));
					break;
				}
			break;
		}
	break;
}
?>
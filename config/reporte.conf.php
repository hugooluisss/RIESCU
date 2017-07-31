<?php
global $conf;

$conf['reportePolizas'] = array(
	'controlador' => 'reportes.php',
	'vista' => 'reportes/panelPolizas.tpl',
	'descripcion' => 'Reporte de estado de polizas',
	'seguridad' => true,
	'jsTemplate' => array('reportePolizas.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['rListaPolizas'] = array(
	'controlador' => 'reportes.php',
	'vista' => 'reportes/listaCargos.tpl',
	'descripcion' => 'Lista de polizas',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
?>
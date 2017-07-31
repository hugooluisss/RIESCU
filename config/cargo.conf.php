<?php
global $conf;

$conf['cargos'] = array(
	'controlador' => 'cargos.php',
	'vista' => 'cargos/panel.tpl',
	'descripcion' => 'Cargos',
	'seguridad' => true,
	'js' => array('cargo.class.js'),
	'jsTemplate' => array('cargos.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaCargos'] = array(
	'controlador' => 'cargos.php',
	'vista' => 'cargos/lista.tpl',
	'descripcion' => 'Lista de cargos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['ccargos'] = array(
	'controlador' => 'cargos.php',
	'descripcion' => 'Controlador de cargos',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
	
$conf['detalleCargo'] = array(
	'controlador' => 'cargos.php',
	'vista' => 'cargos/detalle.tpl',
	'descripcion' => 'Detalle del cargo',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
?>
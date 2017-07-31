<?php
global $conf;

$conf['polizas'] = array(
	'controlador' => 'polizas.php',
	'vista' => 'polizas/panel.tpl',
	'descripcion' => 'Polizas',
	'seguridad' => true,
	'js' => array('poliza.class.js', 'cargo.class.js'),
	'jsTemplate' => array('polizas.js', 'cargos.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaPolizas'] = array(
	'controlador' => 'polizas.php',
	'vista' => 'polizas/lista.tpl',
	'descripcion' => 'Lista de polizas',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cpolizas'] = array(
	'controlador' => 'polizas.php',
	'descripcion' => 'Controlador de polizas',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
?>
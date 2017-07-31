<?php
global $conf;

$conf['aseguradoras'] = array(
	'controlador' => 'aseguradoras.php',
	'vista' => 'aseguradoras/panel.tpl',
	'descripcion' => 'Aseguradoras',
	'seguridad' => true,
	'js' => array('aseguradora.class.js'),
	'jsTemplate' => array('aseguradoras.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaAseguradoras'] = array(
	'controlador' => 'aseguradoras.php',
	'vista' => 'aseguradoras/lista.tpl',
	'descripcion' => 'Lista de aseguradoras',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['caseguradoras'] = array(
	'controlador' => 'aseguradoras.php',
	'descripcion' => 'Controlador de aseguradoras',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
	
$conf['listaAseguradorasAutocomplete'] = array(
	'controlador' => 'aseguradoras.php',
	'descripcion' => 'Lista de aseguradoras',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
?>
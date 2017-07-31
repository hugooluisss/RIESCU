<?php
global $conf;

$conf['asegurados'] = array(
	'controlador' => 'asegurados.php',
	'vista' => 'asegurados/panel.tpl',
	'descripcion' => 'Asegurados',
	'seguridad' => true,
	'js' => array('asegurado.class.js'),
	'jsTemplate' => array('asegurados.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaAsegurados'] = array(
	'controlador' => 'asegurados.php',
	'vista' => 'asegurados/lista.tpl',
	'descripcion' => 'Lista de asegurados',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['casegurados'] = array(
	'controlador' => 'asegurados.php',
	'descripcion' => 'Controlador de asegurados',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
	
$conf['listaAseguradosAutocomplete'] = array(
	'controlador' => 'asegurados.php',
	'descripcion' => 'Lista de asegurados',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
?>
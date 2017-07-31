<?php /* Smarty version Smarty-3.1.11, created on 2017-07-31 11:54:01
         compiled from "templates/plantillas/modulos/reportes/panelPolizas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1824571204597f407203f868-56833528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '145b6a0bdc71f489a1744616b2370a53ed261cba' => 
    array (
      0 => 'templates/plantillas/modulos/reportes/panelPolizas.tpl',
      1 => 1501519850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1824571204597f407203f868-56833528',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_597f4072079859_52169841',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597f4072079859_52169841')) {function content_597f4072079859_52169841($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/riescu/librerias/smarty/plugins/modifier.date_format.php';
?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Reporte</h1>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<label class="col-sm-3">
				Inicio
			</label>
			<div class="col-sm-3">
				<input type="text" id="txtInicio" name="txtInicio" class="form-control" readonly="true" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
"/>
			</div>
			<label class="col-sm-3">
				Fin
			</label>
			<div class="col-sm-3">
				<input type="text" id="txtFin" name="txtFin" class="form-control" readonly="true" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
"/>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-xs-12 text-right">
				<button id="btnBuscar" class="btn btn-primary">Buscar</button>
			</div>
		</div>
	</div>
</div>

<div id="dvLista">
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/reportes/winDetalleCargo.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
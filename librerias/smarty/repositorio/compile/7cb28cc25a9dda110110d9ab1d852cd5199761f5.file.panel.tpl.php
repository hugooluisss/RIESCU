<?php /* Smarty version Smarty-3.1.11, created on 2017-07-25 15:21:49
         compiled from "templates/plantillas/modulos/asegurados/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7924750585977a85d879e99-10353909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cb28cc25a9dda110110d9ab1d852cd5199761f5' => 
    array (
      0 => 'templates/plantillas/modulos/asegurados/panel.tpl',
      1 => 1501014041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7924750585977a85d879e99-10353909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5977a85d8c6650_31796612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5977a85d8c6650_31796612')) {function content_5977a85d8c6650_31796612($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Asegurados</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar / Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista"></div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">
					<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/asegurados/add.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>
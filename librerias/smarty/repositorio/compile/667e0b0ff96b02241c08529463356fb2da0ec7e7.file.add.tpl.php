<?php /* Smarty version Smarty-3.1.11, created on 2017-07-25 15:01:44
         compiled from "templates/plantillas/modulos/clientes/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199994719259448df9b92686-86644233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '667e0b0ff96b02241c08529463356fb2da0ec7e7' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/add.tpl',
      1 => 1501012903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199994719259448df9b92686-86644233',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59448df9ba4015_74544245',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59448df9ba4015_74544245')) {function content_59448df9ba4015_74544245($_smarty_tpl) {?><div class="form-horizontal">
	<div class="form-group">
		<label class="col-sm-2 text-right" for="txtNIT">NIT</label>
		<div class="col-sm-3">
			<input class="form-control input-sm" id="txtNIT" name="txtNIT" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 text-right" for="txtNombre">Nombre</label>
		<div class="col-sm-10">
			<input class="form-control input-sm" id="txtNombre" name="txtNombre" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 text-right" for="txtDomicilio">Dirección</label>
		<div class="col-sm-10">
			<textarea id="txtDireccion" name="txtDireccion" class="form-control"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 text-right" for="txtCorreo">Correo</label>
		<div class="col-sm-4">
			<input class="form-control input-sm" id="txtCorreo" name="txtCorreo" />
		</div>
	</div>
</div><?php }} ?>
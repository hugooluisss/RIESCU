<?php /* Smarty version Smarty-3.1.11, created on 2017-07-25 15:21:49
         compiled from "templates/plantillas/modulos/asegurados/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18881668125977a85d8cca00-30798651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a6314fceb204f4db4374e4694da44b1bf233568' => 
    array (
      0 => 'templates/plantillas/modulos/asegurados/add.tpl',
      1 => 1501012903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18881668125977a85d8cca00-30798651',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5977a85d8cf713_15506737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5977a85d8cf713_15506737')) {function content_5977a85d8cf713_15506737($_smarty_tpl) {?><div class="form-horizontal">
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
<?php /* Smarty version Smarty-3.1.11, created on 2017-07-31 12:16:05
         compiled from "templates/plantillas/modulos/cargos/detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:563941054597f643a7826e1-44780608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3eb3444cbb6d6cd5aa133ac79e2a4424dc3e7128' => 
    array (
      0 => 'templates/plantillas/modulos/cargos/detalle.tpl',
      1 => 1501521360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '563941054597f643a7826e1-44780608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_597f643a819c55_06279015',
  'variables' => 
  array (
    'cargo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597f643a819c55_06279015')) {function content_597f643a819c55_06279015($_smarty_tpl) {?><div class="row">
	<label class="col-sm-3">Póliza</label>
	<div class="col-sm-9"><?php echo $_smarty_tpl->tpl_vars['cargo']->value['numero'];?>
</div>
</div>
<div class="row">
	<label class="col-sm-3">Emitida</label>
	<div class="col-sm-9"><?php echo $_smarty_tpl->tpl_vars['cargo']->value['emision'];?>
</div>
</div>
<div class="row">
	<label class="col-sm-3">Asegurado</label>
	<div class="col-sm-9"><?php echo $_smarty_tpl->tpl_vars['cargo']->value['asegurado'];?>
</div>
</div>
<div class="row">
	<label class="col-sm-3">Aseguradora</label>
	<div class="col-sm-9"><?php echo $_smarty_tpl->tpl_vars['cargo']->value['aseguradora'];?>
</div>
</div>
<div class="row">
	<label class="col-sm-3">Requerimiento</label>
	<div class="col-sm-9"><?php echo $_smarty_tpl->tpl_vars['cargo']->value['requerimiento'];?>
</div>
</div>
<div class="row">
	<label class="col-sm-3">NIT</label>
	<div class="col-sm-9"><?php echo $_smarty_tpl->tpl_vars['cargo']->value['nit'];?>
</div>
</div>
<div class="row">
	<label class="col-sm-3">Monto</label>
	<div class="col-sm-9"><?php echo $_smarty_tpl->tpl_vars['cargo']->value['monto'];?>
</div>
</div>
<div class="row">
	<label class="col-sm-3">Vencimiento</label>
	<div class="col-sm-9"><?php echo $_smarty_tpl->tpl_vars['cargo']->value['vencimiento'];?>
</div>
</div>
<div class="row">
	<label class="col-sm-3">Estado</label>
	<div class="col-sm-9"><?php echo $_smarty_tpl->tpl_vars['cargo']->value['estado'];?>
</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['cargo']->value['fechaPago']!=''){?>
	<hr />
	<div class="row">
		<label class="col-sm-3">Fecha de pago</label>
		<div class="col-sm-9"><?php echo $_smarty_tpl->tpl_vars['cargo']->value['fechaPago'];?>
</div>
	</div>
	<div class="row">
		<label class="col-sm-3">Fecha de facturación</label>
		<div class="col-sm-9"><?php echo $_smarty_tpl->tpl_vars['cargo']->value['fechaFactura'];?>
</div>
	</div>
	<div class="row">
		<label class="col-sm-3">Forma de pago</label>
		<div class="col-sm-9"><?php echo $_smarty_tpl->tpl_vars['cargo']->value['formaPago'];?>
</div>
	</div>
	<div class="row">
		<label class="col-sm-3">Referencia</label>
		<div class="col-sm-9"><?php echo $_smarty_tpl->tpl_vars['cargo']->value['referencia'];?>
</div>
	</div>
<?php }?><?php }} ?>
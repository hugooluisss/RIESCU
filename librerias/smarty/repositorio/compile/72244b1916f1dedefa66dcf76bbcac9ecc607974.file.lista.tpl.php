<?php /* Smarty version Smarty-3.1.11, created on 2017-07-25 15:38:23
         compiled from "templates/plantillas/modulos/asegurados/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4896171245977a8902b8458-40089145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72244b1916f1dedefa66dcf76bbcac9ecc607974' => 
    array (
      0 => 'templates/plantillas/modulos/asegurados/lista.tpl',
      1 => 1501014961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4896171245977a8902b8458-40089145',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5977a890365329_28818793',
  'variables' => 
  array (
    'select' => 0,
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5977a890365329_28818793')) {function content_5977a890365329_28818793($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['select']->value!=true){?>
<div class="box">
	<div class="box-body">
<?php }?>		
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>NIT</th>
					<th>Nombre</th>
					<?php if ($_smarty_tpl->tpl_vars['select']->value!=true){?>
					<th>&nbsp;</th>
					<?php }?>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr json='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nit'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<?php if ($_smarty_tpl->tpl_vars['select']->value!=true){?>
						<td style="text-align: right">
							<button type="button" class="btn btn-success btn-xs" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idAsegurado'];?>
"><i class="fa fa-times"></i></button>
						</td>
						<?php }?>
					</tr>
				<?php } ?>
			</tbody>
		</table>
<?php if ($_smarty_tpl->tpl_vars['select']->value!=true){?>
	</div>
</div>
<?php }?><?php }} ?>
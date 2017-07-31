<?php /* Smarty version Smarty-3.1.11, created on 2017-07-27 13:00:51
         compiled from "templates/plantillas/modulos/polizas/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20262848815978d472e72d33-29979075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e55c59305bb5965ff1a9dbd1ba40ecb0d9fa4c' => 
    array (
      0 => 'templates/plantillas/modulos/polizas/lista.tpl',
      1 => 1501178426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20262848815978d472e72d33-29979075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5978d472f209e6_57065434',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5978d472f209e6_57065434')) {function content_5978d472f209e6_57065434($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Número</th>
					<th>Asegurado</th>
					<th>Aseguradora</th>
					<th>&nbsp;</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['numero'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['asegurado'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['aseguradora'];?>
</td>
						<td style="text-align: right">
							<div class="btn-group">
								<button type="button" class="btn btn-primary btn-xs" action="cargos" title="Definición de cargos" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
' data-toggle="modal" data-target="#winCargos"><i class="fa fa-money"></i></button>
								
								<button type="button" class="btn btn-success btn-xs" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
								<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idAseguradora'];?>
"><i class="fa fa-times"></i></button>
							</div>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>
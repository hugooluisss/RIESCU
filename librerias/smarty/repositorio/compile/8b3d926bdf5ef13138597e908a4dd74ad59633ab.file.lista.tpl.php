<?php /* Smarty version Smarty-3.1.11, created on 2017-07-25 15:04:20
         compiled from "templates/plantillas/modulos/clientes/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176422759059448dfa8e8514-51426664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b3d926bdf5ef13138597e908a4dd74ad59633ab' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/lista.tpl',
      1 => 1501013057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176422759059448dfa8e8514-51426664',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59448dfa9b4bc2_71421071',
  'variables' => 
  array (
    'select' => 0,
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59448dfa9b4bc2_71421071')) {function content_59448dfa9b4bc2_71421071($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['select']->value!=true){?>
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
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCliente'];?>
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
<?php /* Smarty version Smarty-3.1.11, created on 2017-08-02 13:53:58
         compiled from "templates/plantillas/modulos/cargos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1952531044597a9b0812ef71-14167309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fab89332932bd722266f425579cfdafef704de45' => 
    array (
      0 => 'templates/plantillas/modulos/cargos/lista.tpl',
      1 => 1501699805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1952531044597a9b0812ef71-14167309',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_597a9b081d16b8_52634591',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597a9b081d16b8_52634591')) {function content_597a9b081d16b8_52634591($_smarty_tpl) {?><table id="tblCargos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Número</th>
			<th>Vence</th>
			<th>Estado</th>
			<th>Requerimiento</th>
			<th>Monto</th>
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
				<td style="border-left: 3px solid <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['numero'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['vencimiento'];?>
</td>
				<td style="color: <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['requerimiento'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['monto'];?>
</td>
				<td style="text-align: right">
					<?php if (in_array($_smarty_tpl->tpl_vars['row']->value['idEstado'],array(1,2,3))){?>
					<div class="btn-group">
						<button type="button" class="btn btn-success btn-xs" action="modificarCargo" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
' data-toggle="modal" data-target="#winAddCargos"><i class="fa fa-pencil"></i></button>
						
						<button type="button" class="btn btn-primary btn-xs" action="pagarCargo" title="Pagar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCargo'];?>
" data-toggle="modal" data-target="#winPagar"><i class="fa fa-credit-card"></i></button>
						<button type="button" class="btn btn-warning btn-xs" action="cancelarCargo" title="Cancelar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCargo'];?>
"><i class="fa fa-ban"></i></button>
						<button type="button" class="btn btn-danger btn-xs" action="eliminarCargo" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCargo'];?>
"><i class="fa fa-times"></i></button>
					</div>
					<?php }?>
					
					
					<?php if (in_array($_smarty_tpl->tpl_vars['row']->value['idEstado'],array(4))){?>
					<div class="btn-group">
						<button type="button" class="btn btn-danger btn-xs" action="eliminarCargo" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCargo'];?>
"><i class="fa fa-times"></i></button>
					</div>
					<?php }?>
					
					
					<?php if (in_array($_smarty_tpl->tpl_vars['row']->value['idEstado'],array(5))){?>
					<div class="btn-group">
						<button type="button" class="btn btn-danger btn-xs" action="eliminarCargo" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCargo'];?>
"><i class="fa fa-times"></i></button>
					</div>
					<?php }?>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>
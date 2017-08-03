<?php /* Smarty version Smarty-3.1.11, created on 2017-08-01 14:03:16
         compiled from "templates/plantillas/modulos/reportes/listaCargos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:536995300597f5a32b37373-94635565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '018f87790fa888c4bf0b6d2fe5223c9e59cbc911' => 
    array (
      0 => 'templates/plantillas/modulos/reportes/listaCargos.tpl',
      1 => 1501614194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '536995300597f5a32b37373-94635565',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_597f5a32bf5763_40799407',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597f5a32bf5763_40799407')) {function content_597f5a32bf5763_40799407($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Asegurado</th>
					<th>Domicilio</th>
					<th>NIT</th>
					<th>Aseguradora</th>
					<th>Req</th>
					<th>Emisión</th>
					<th>Póliza</th>
					<th>Número</th>
					<th>Vencimiento</th>
					<th>Estado</th>
					<th>Forma de pago</th>
					<th>Agente</th>
					<th>Monto</th>
					<th>Pago</th>
					<th>Entrega de factura</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCargo'];?>
">
						<td style="border-left: 5px solid <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['asegurado'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['direccion'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nit'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['aseguradora'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['requerimiento'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['emision'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['poliza'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['numero'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['vencimiento'];?>
</td>
						<td style="color: <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>

							<small>
							<?php if (in_array($_smarty_tpl->tpl_vars['row']->value['idEstado'],array(1,2,3))){?>
								(<?php echo $_smarty_tpl->tpl_vars['row']->value['dias'];?>
 días)
							<?php }?>
							</small>
						</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['formaPago'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['usuario'];?>
</td>
						<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['monto'];?>
</td>
						<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['fechaPago'];?>
</td>
						<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['fechaFactura'];?>
</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>
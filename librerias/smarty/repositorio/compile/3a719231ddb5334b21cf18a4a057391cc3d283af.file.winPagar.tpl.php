<?php /* Smarty version Smarty-3.1.11, created on 2017-07-31 11:40:46
         compiled from "templates/plantillas/modulos/cargos/winPagar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:579582019597cd98a7cb143-35440086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a719231ddb5334b21cf18a4a057391cc3d283af' => 
    array (
      0 => 'templates/plantillas/modulos/cargos/winPagar.tpl',
      1 => 1501519225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '579582019597cd98a7cb143-35440086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_597cd98a7cee29_91508195',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597cd98a7cee29_91508195')) {function content_597cd98a7cee29_91508195($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/riescu/librerias/smarty/plugins/modifier.date_format.php';
?><form role="form" id="frmPagar" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="modal fade" id="winPagar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" cargo="">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Pago</h4>
				</div>
				<div class="modal-body">
				
					<div class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-3" for="txtRequerimiento">Pagado el</label>
							<div class="col-sm-4">
								<input id="txtFechaPago" name="txtFechaPago" type="date" class="form-control" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3" for="txtVencimiento">Entrega factura</label>
							<div class="col-sm-4 text-center">
								<input id="txtFechaFactura" name="txtFechaFactura" type="text" class="form-control" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3" for="selFormaPago">Forma de pago</label>
							<div class="col-md-4">
								<select id="selFormaPago" name="selFormaPago" class="form-control">
									<option value="Efectivo">Efectivo</option>
									<option value="Tarjeta de débito">Tarjeta de débito</option>
									<option value="Tarjeta de crédito">Tarjeta de crédito</option>
									<option value="Cheque">Cheque</option>
									<option value="Transferencia">Transferencia</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3" for="txtReferencia">Referencia</label>
							<div class="col-sm-9 text-center">
								<input id="txtReferencia" name="txtReferencia" type="text" class="form-control"/>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="reset" id="btnReset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</form><?php }} ?>
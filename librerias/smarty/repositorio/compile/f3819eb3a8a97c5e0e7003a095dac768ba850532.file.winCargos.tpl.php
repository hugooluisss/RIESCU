<?php /* Smarty version Smarty-3.1.11, created on 2017-08-02 13:53:54
         compiled from "templates/plantillas/modulos/cargos/winCargos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1832934060597cd98a7c0387-29961289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3819eb3a8a97c5e0e7003a095dac768ba850532' => 
    array (
      0 => 'templates/plantillas/modulos/cargos/winCargos.tpl',
      1 => 1501699896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1832934060597cd98a7c0387-29961289',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_597cd98a7c3dd8_98196915',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597cd98a7c3dd8_98196915')) {function content_597cd98a7c3dd8_98196915($_smarty_tpl) {?><div class="modal fade" id="winCargos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Definición de Cargos de la póliza <span id="spnTitulo" /></h4>
			</div>
			<div class="modal-body">
				<div class="btn-group">
					<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#winAddCargos">Agregar</button>
				</div>
				<br />
				<div id="dvListaCargos"></div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<form role="form" id="frmCargos" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="modal fade" id="winAddCargos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Definición de Cargos</h4>
				</div>
				<div class="modal-body">
				
					<div class="form-horizontal">
						<div class="form-group">
							<label class="col-md-3 col-xs-3" for="txtRequerimiento">Requerimiento</label>
							<div class="col-md-6 col-xs-6">
								<input class="form-control input-sm" id="txtRequerimiento" name="txtRequerimiento" maxlength="10"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 col-xs-3 col-sm-3" for="txtEmision">Fecha de emisión</label>
							<div class="col-md-5 col-xs-9 col-sm-3 text-center">
								<input id="txtEmision" name="txtEmision" type="date" class="form-control" readonly="true"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 col-xs-3 col-sm-3" for="txtVencimiento">Fecha de vencimiento</label>
							<div class="col-md-5 col-xs-9 col-sm-3 text-center">
								<input id="txtVencimiento" name="txtVencimiento" type="text" class="form-control" readonly="true"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 col-xs-3" for="txtMonto">Monto</label>
							<div class="col-md-4 col-xs-5">
								<input class="form-control input-sm" id="txtMonto" name="txtMonto" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 col-xs-3" for="txtNumeroPago">Número</label>
							<div class="col-md-2 col-xs-3">
								<input class="form-control input-sm" id="txtNumeroPago" name="txtNumeroPago" type="number" />
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="reset" id="btnReset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input id="idCargo" value="" type="hidden" />
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</form><?php }} ?>
<?php /* Smarty version Smarty-3.1.11, created on 2017-07-25 15:35:05
         compiled from "templates/plantillas/modulos/aseguradoras/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41132245977ab7963c252-28248111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e64d1361710b851f32feca2db9c674c5a6da56d8' => 
    array (
      0 => 'templates/plantillas/modulos/aseguradoras/panel.tpl',
      1 => 1501014842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41132245977ab7963c252-28248111',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5977ab7968a494_04557978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5977ab7968a494_04557978')) {function content_5977ab7968a494_04557978($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Aseguradoras</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar / Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista"></div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">
					<div class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 text-right" for="txtNombre">Nombre</label>
							<div class="col-sm-10">
								<input class="form-control input-sm" id="txtNombre" name="txtNombre" />
							</div>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>
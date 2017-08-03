<?php /* Smarty version Smarty-3.1.11, created on 2017-08-01 13:49:35
         compiled from "templates/plantillas/modulos/polizas/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13208107925978d471b66240-03142690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16c436f5a183276c04b6b2a42b06887597ff5c71' => 
    array (
      0 => 'templates/plantillas/modulos/polizas/panel.tpl',
      1 => 1501613374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13208107925978d471b66240-03142690',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5978d471bbbad4_04735483',
  'variables' => 
  array (
    'aseguradoras' => 0,
    'row' => 0,
    'usuarios' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5978d471bbbad4_04735483')) {function content_5978d471bbbad4_04735483($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Requerimientos</h1>
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
							<label class="col-sm-2 text-right" for="txtAsegurado">NIT del Asegurado</label>
							<div class="col-sm-3">
								<input class="form-control input-sm" id="txtAsegurado" name="txtAsegurado" />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<input class="form-control input-sm" readonly="true" disabled="true" id="txtNombreAsegurado" name="txtNombreAsegurado" placeholder="Nombre" />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<input class="form-control input-sm" readonly="true" disabled="true" id="txtDireccionAsegurado" name="txtDireccionAsegurado" placeholder="Dirección" />
							</div>
						</div>
						<hr />
						<div class="form-group">
							<label class="col-sm-2 text-right" for="txtNumero">Número de póliza</label>
							<div class="col-sm-3">
								<input class="form-control input-sm" id="txtNumero" name="txtNumero" />
							</div>
						</div>
						<!--
						<div class="form-group">
							<label class="col-sm-2 text-right" for="txtEmision">Fecha de emisión</label>
							<div class="col-sm-3">
								<input class="form-control input-sm" id="txtEmision" name="txtEmision" />
							</div>
						</div>
						-->
						<div class="form-group">
							<label class="col-sm-2 text-right" for="txtAseguradora">Aseguradora</label>
							<div class="col-sm-10">
								<select class="form-control" id="selAseguradora" name="selAseguradora">
									<option value="">Selecciona</option>
									<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aseguradoras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idAseguradora'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 text-right" for="selUsuario">Usuario</label>
							<div class="col-sm-5">
								<select class="form-control" id="selUsuario" name="selUsuario">
									<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idUsuario'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</option>
									<?php } ?>
								</select>
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
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/cargos/winCargos.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/cargos/winPagar.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
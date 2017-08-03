<div class="row">
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
									{foreach from=$aseguradoras item="row"}
										<option value="{$row.idAseguradora}">{$row.nombre}</option>
									{/foreach}
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 text-right" for="selUsuario">Usuario</label>
							<div class="col-sm-5">
								<select class="form-control" id="selUsuario" name="selUsuario">
									{foreach from=$usuarios item="row"}
										<option value="{$row.idUsuario}">{$row.nombre}</option>
									{/foreach}
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

{include file=$PAGE.rutaModulos|cat:"modulos/cargos/winCargos.tpl"}
{include file=$PAGE.rutaModulos|cat:"modulos/cargos/winPagar.tpl"}
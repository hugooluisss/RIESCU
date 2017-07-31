<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Reporte</h1>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<label class="col-sm-3">
				Inicio
			</label>
			<div class="col-sm-3">
				<input type="text" id="txtInicio" name="txtInicio" class="form-control" readonly="true" value="{$smarty.now|date_format:"%Y-%m-%d"}"/>
			</div>
			<label class="col-sm-3">
				Fin
			</label>
			<div class="col-sm-3">
				<input type="text" id="txtFin" name="txtFin" class="form-control" readonly="true" value="{$smarty.now|date_format:"%Y-%m-%d"}"/>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-xs-12 text-right">
				<button id="btnBuscar" class="btn btn-primary">Buscar</button>
			</div>
		</div>
	</div>
</div>

<div id="dvLista">
</div>

{include file=$PAGE.rutaModulos|cat:"modulos/reportes/winDetalleCargo.tpl"}
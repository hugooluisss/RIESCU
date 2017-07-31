<div class="box">
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
				{foreach from=$lista item="row"}
					<tr json='{$row.json}'>
						<td>{$row.numero}</td>
						<td>{$row.asegurado}</td>
						<td>{$row.aseguradora}</td>
						<td style="text-align: right">
							<div class="btn-group">
								<button type="button" class="btn btn-primary btn-xs" action="cargos" title="Definición de cargos" datos='{$row.json}' data-toggle="modal" data-target="#winCargos"><i class="fa fa-money"></i></button>
								
								<button type="button" class="btn btn-success btn-xs" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-pencil"></i></button>
								<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="{$row.idAseguradora}"><i class="fa fa-times"></i></button>
							</div>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>
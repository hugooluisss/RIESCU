{if $select neq true}
<div class="box">
	<div class="box-body">
{/if}		
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>NIT</th>
					<th>Nombre</th>
					<th>Dirección</th>
					<th>Correo</th>
					{if $select neq true}
					<th>&nbsp;</th>
					{/if}
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr json='{$row.json}'>
						<td>{$row.nit}</td>
						<td>{$row.nombre}</td>
						<td>{$row.direccion}</td>
						<td>{$row.correo}</td>
						{if $select neq true}
						<td style="text-align: right">
							<div class="btn-group">
								<button type="button" class="btn btn-success btn-xs" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-pencil"></i></button>
								<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="{$row.idAsegurado}"><i class="fa fa-times"></i></button>
							</div>
						</td>
						{/if}
					</tr>
				{/foreach}
			</tbody>
		</table>
{if $select neq true}
	</div>
</div>
{/if}
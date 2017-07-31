<div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Número</th>
					<th>Requerimiento</th>
					<th>NIT</th>
					<th>Asegurado</th>
					<th>Aseguradora</th>
					<th>Estado</th>
					<th>Monto</th>
					<th>Vencimiento</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr identificador="{$row.idCargo}">
						<td style="border-left: 5px solid {$row.color}" title="{$row.estado}">{$row.numero}</td>
						<td>{$row.requerimiento}</td>
						<td>{$row.nit}</td>
						<td>{$row.asegurado}</td>
						<td>{$row.aseguradora}</td>
						<td style="color: {$row.color}">
							{$row.estado}
							<small>
							{if in_array($row.idEstado, array(1, 2, 3))}
								({$row.dias} días)
							{/if}
							</small>
						</td>
						<td class="text-right">{$row.monto}</td>
						<td>{$row.vencimiento}</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>
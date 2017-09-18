<div class="box">
	<div class="box-body">
		<div class="row">
			<div class="col-xs-12 text-left">
				<button class="btn btn-primary" id="exportar">Exportar a excel</button>
			</div>
		</div>
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
				{foreach from=$lista item="row"}
					<tr identificador="{$row.idCargo}">
						<td style="border-left: 5px solid {$row.color}" title="{$row.estado}">{$row.asegurado}</td>
						<td>{$row.direccion}</td>
						<td>{$row.nit}</td>
						<td>{$row.aseguradora}</td>
						<td>{$row.requerimiento}</td>
						<td>{$row.emision}</td>
						<td>{$row.poliza}</td>
						<td>{$row.numero}</td>
						<td>{$row.vencimiento}</td>
						<td style="color: {$row.color}">
							{$row.estado}
							<small>
							{if in_array($row.idEstado, array(1, 2, 3))}
								({$row.dias} días)
							{/if}
							</small>
						</td>
						<td>{$row.formaPago}</td>
						<td>{$row.usuario}</td>
						<td class="text-right">{$row.monto}</td>
						<td class="text-right">{$row.fechaPago}</td>
						<td class="text-right">{$row.fechaFactura}</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>
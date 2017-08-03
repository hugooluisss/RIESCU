<table id="tblCargos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Número</th>
			<th>Vence</th>
			<th>Estado</th>
			<th>Requerimiento</th>
			<th>Monto</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr json='{$row.json}'>
				<td style="border-left: 3px solid {$row.color}">{$row.numero}</td>
				<td>{$row.vencimiento}</td>
				<td style="color: {$row.color}">{$row.estado}</td>
				<td>{$row.requerimiento}</td>
				<td>{$row.monto}</td>
				<td style="text-align: right">
					{if in_array($row.idEstado, array(1, 2, 3))}
					<div class="btn-group">
						<button type="button" class="btn btn-success btn-xs" action="modificarCargo" title="Modificar" datos='{$row.json}' data-toggle="modal" data-target="#winAddCargos"><i class="fa fa-pencil"></i></button>
						
						<button type="button" class="btn btn-primary btn-xs" action="pagarCargo" title="Pagar" identificador="{$row.idCargo}" data-toggle="modal" data-target="#winPagar"><i class="fa fa-credit-card"></i></button>
						<button type="button" class="btn btn-warning btn-xs" action="cancelarCargo" title="Cancelar" identificador="{$row.idCargo}"><i class="fa fa-ban"></i></button>
						<button type="button" class="btn btn-danger btn-xs" action="eliminarCargo" title="Eliminar" identificador="{$row.idCargo}"><i class="fa fa-times"></i></button>
					</div>
					{/if}
					
					
					{if in_array($row.idEstado, array(4))}
					<div class="btn-group">
						<button type="button" class="btn btn-danger btn-xs" action="eliminarCargo" title="Eliminar" identificador="{$row.idCargo}"><i class="fa fa-times"></i></button>
					</div>
					{/if}
					
					
					{if in_array($row.idEstado, array(5))}
					<div class="btn-group">
						<button type="button" class="btn btn-danger btn-xs" action="eliminarCargo" title="Eliminar" identificador="{$row.idCargo}"><i class="fa fa-times"></i></button>
					</div>
					{/if}
				</td>
			</tr>
		{/foreach}
	</tbody>
</table>
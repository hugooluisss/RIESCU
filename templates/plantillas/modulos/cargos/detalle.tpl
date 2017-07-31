<div class="row">
	<label class="col-sm-3">Póliza</label>
	<div class="col-sm-9">{$cargo.numero}</div>
</div>
<div class="row">
	<label class="col-sm-3">Emitida</label>
	<div class="col-sm-9">{$cargo.emision}</div>
</div>
<div class="row">
	<label class="col-sm-3">Asegurado</label>
	<div class="col-sm-9">{$cargo.asegurado}</div>
</div>
<div class="row">
	<label class="col-sm-3">Aseguradora</label>
	<div class="col-sm-9">{$cargo.aseguradora}</div>
</div>
<div class="row">
	<label class="col-sm-3">Requerimiento</label>
	<div class="col-sm-9">{$cargo.requerimiento}</div>
</div>
<div class="row">
	<label class="col-sm-3">NIT</label>
	<div class="col-sm-9">{$cargo.nit}</div>
</div>
<div class="row">
	<label class="col-sm-3">Monto</label>
	<div class="col-sm-9">{$cargo.monto}</div>
</div>
<div class="row">
	<label class="col-sm-3">Vencimiento</label>
	<div class="col-sm-9">{$cargo.vencimiento}</div>
</div>
<div class="row">
	<label class="col-sm-3">Estado</label>
	<div class="col-sm-9">{$cargo.estado}</div>
</div>

{if $cargo.fechaPago neq ''}
	<hr />
	<div class="row">
		<label class="col-sm-3">Fecha de pago</label>
		<div class="col-sm-9">{$cargo.fechaPago}</div>
	</div>
	<div class="row">
		<label class="col-sm-3">Fecha de facturación</label>
		<div class="col-sm-9">{$cargo.fechaFactura}</div>
	</div>
	<div class="row">
		<label class="col-sm-3">Forma de pago</label>
		<div class="col-sm-9">{$cargo.formaPago}</div>
	</div>
	<div class="row">
		<label class="col-sm-3">Referencia</label>
		<div class="col-sm-9">{$cargo.referencia}</div>
	</div>
{/if}
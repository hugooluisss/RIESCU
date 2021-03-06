$(document).ready(function(){
	$("#txtEmision").datepicker({dateFormat: 'yy-mm-dd'});
	$("#txtVencimiento").datepicker({dateFormat: 'yy-mm-dd'});
	
	$('#winAddCargos').on('show.bs.modal', function(e){
		$("#winCargos").modal("hide");
	});
	
	$('#winAddCargos').on('hide.bs.modal', function(e){
		if (e.target.id == 'winAddCargos')
			$("#winCargos").modal();
	});
	
	$("#frmCargos").validate({
		debug: true,
		rules: {
			txtMonto: {
				required: true,
				number: true
			},
			txtVencimiento: "required",
			txtRequerimiento: "required",
			txtNumeroPago: "required",
			txtEmision: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TCargo;
			obj.add({
				id: $("#idCargo").val(), 
				monto: $("#txtMonto").val(), 
				vencimiento: $("#txtVencimiento").val(), 
				requerimiento: $("#txtRequerimiento").val(),
				poliza: $('#winCargos').attr("poliza"),
				numero: $("#txtNumeroPago").val(),
				emision: $("#txtEmision").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							$("#frmCargos").get(0).reset();
							$('#winAddCargos').modal("hide");
						}else{
							alert(datos.mensaje == '' || datos.mensaje == undefined?"No se pudo guardar el registro":datos.mensaje);
						}
					}
				}
			});
        }

    });
	
	$('#winCargos').on('shown.bs.modal', function(e){
		$(this).find("#spnTitulo").text($(this).attr("numero"));
		getLista();
	});
	
	function getLista(){
		$.post("listaCargos", {
			"poliza": $('#winCargos').attr("poliza"),
		}, function(data) {
			$("#dvListaCargos").html(data);
			
			$("[action=modificarCargo]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#winAddCargos").find("#idCargo").val(el.idCargo);
				$("#winAddCargos").find("#txtRequerimiento").val(el.requerimiento);
				$("#winAddCargos").find("#txtEmision").val(el.emision);
				$("#winAddCargos").find("#txtVencimiento").val(el.vencimiento);
				$("#winAddCargos").find("#txtMonto").val(el.monto);
				$("#winAddCargos").find("#txtNumeroPago").val(el.numero);
			});
			
			$("[action=cancelarCargo]").click(function(){
				if(confirm("¿Seguro de querer cancelar?")){
					var obj = new TCargo;
					obj.setEstado({
						"cargo": $(this).attr("identificador"), 
						"estado": 4,
						fn:{
							before: function(){
								$(this).prop("disabled", true);
							},
							after: function(data){
								$(this).prop("disabled", false);
								if (data.band)
									getLista();
								else
									alert("No se pudo realizar la acción")
							}
						}
					});
				}
			});
			
			$("[action=pagarCargo]").click(function(){
				$('#winPagar').attr("cargo", $(this).attr("identificador"));
			});
			
			$("[action=eliminarCargo]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TCargo;
					obj.del($(this).attr("identificador"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$("#tblCargos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"order": [[ 0, "desc" ]]
			});
		});
	}
	
	$('#winPagar').on('hide.bs.modal', function(e){
		if (e.target.id == 'winPagar')
			$("#winCargos").modal();
	});
	
	$('#winPagar').on('show.bs.modal', function(e){
		$("#winCargos").modal('hide');
	});
	
	$("#txtFechaPago").datepicker({dateFormat: 'yy-mm-dd'});
    $("#txtFechaFactura").datepicker({dateFormat: 'yy-mm-dd'});
    
    $("#frmPagar").validate({
		debug: true,
		rules: {
			txtFechaPago: "required",
			txtFechaFactura: "required",
			selFormaPago: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TCargo;
			obj.setEstado({
				cargo: $("#winPagar").attr("cargo"), 
				estado: 5,
				fechaPago: $("#txtFechaPago").val(),
				fechaFactura: $("#txtFechaFactura").val(),
				formaPago: $("#selFormaPago").val(),
				referencia: $("#txtReferencia").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							$("#frmPagar").get(0).reset();
							$('#winPagar').modal("hide");
						}else{
							alert("No se pudo guardar el registro");
						}
					}
				}
			});
        }

    });
});
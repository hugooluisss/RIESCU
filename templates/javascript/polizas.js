$(document).ready(function(){
	getLista();
	
	$("#panelTabs li a[href=#add]").click(function(){
		$("#frmAdd").get(0).reset();
		$("#id").val("");
		$("form:not(.filter) :input:visible:enabled:first").focus();
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
	$("#txtAsegurado").change(function(){
		if ($(this).attr("nombre") != $(this).val()){
			console.log($(this).attr("nombre"), $(this).val());
			$(this).attr("identificador", "");
			$(this).attr("nombre", "");
			
			$("#txtDireccionAsegurado").val("");
			$("#txtNombreAsegurado").val("");
			
			console.log("Identificador del asegurado eliminado");
		}
	}).blur(function(){
		if ($(this).attr("identificador") == '')
			$(this).val("");
	}).autocomplete({
		source: "?mod=listaAseguradosAutocomplete",
		minLength: 3, 
		select: function(event, ui){
			$("#txtAsegurado").val(ui.item.nit);
			$("#txtAsegurado").attr("identificador", ui.item.idAsegurado);
			$("#txtAsegurado").attr("nombre", ui.item.nit);
			
			$("#txtDireccionAsegurado").val(ui.item.direccion);
			$("#txtNombreAsegurado").val(ui.item.nombre);
			
			return false;
		}
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtAsegurado: "required",
			selAseguradora: "required",
			txtNumero: "required",
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TPoliza;
			obj.add({
				id: $("#id").val(), 
				asegurado: $("#txtAsegurado").attr("identificador"), 
				aseguradora: $("#selAseguradora").val(), 
				usuario: $("#selUsuario").val(),
				numero: $("#txtNumero").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
						}else{
							alert("No se pudo guardar el registro");
						}
					}
				}
			});
        }

    });
		
	function getLista(){
		$.get("listaPolizas", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TPoliza;
					obj.del($(this).attr("identificador"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			 
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				console.log(el);
				$("#id").val(el.idPoliza);
				$("#txtAsegurado").val(el.nit);
				$("#txtAsegurado").attr("nombre", el.asegurado);
				$("#txtAsegurado").attr("identificador", el.idAsegurado);
				$("#selAseguradora").val(el.idAseguradora);
				
				$("#txtDireccionAsegurado").val(el.direccion);
				$("#txtNombreAsegurado").val(el.asegurado);
				
				$("#txtNumero").val(el.numero);
				$("#selUsuario").val(el.idUsuario);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=cargos]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				$("#winCargos").attr("poliza", el.idPoliza);
				$("#winCargos").attr("numero", el.numero)
			});
			
			$("#tblDatos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
});
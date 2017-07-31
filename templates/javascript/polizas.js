$(document).ready(function(){
	getLista();
	$("#txtEmision").datepicker({ dateFormat: 'yy-mm-dd' });
	
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
			$(this).attr("identificador", "");
			$(this).attr("nombre", "");
			console.log("Identificador del asegurado eliminado");
		}
	}).blur(function(){
		if ($(this).attr("identificador") == '')
			$(this).val("");
	}).autocomplete({
		source: "?mod=listaAseguradosAutocomplete",
		minLength: 3, 
		select: function(event, ui){
			$("#txtAsegurado").val(ui.item.nombre);
			$("#txtAsegurado").attr("identificador", ui.item.idAsegurado);
			$("#txtAsegurado").attr("nombre", ui.item.nombre);
			console.log("Asegurado seleccionado", ui.item.idAsegurado);
		}
	});
	
	
	$("#txtAseguradora").change(function(){
		if ($(this).attr("nombre") != $(this).val()){
			$(this).attr("identificador", "");
			$(this).attr("nombre", "");
			console.log("Identificador del aseguradora eliminado");
		}
	}).blur(function(){
		if ($(this).attr("identificador") == '')
			$(this).val("");
	}).autocomplete({
		source: "?mod=listaAseguradorasAutocomplete",
		minLength: 3, 
		select: function(event, ui){
			$("#txtAseguradora").val(ui.item.nombre);
			$("#txtAseguradora").attr("identificador", ui.item.idAseguradora);
			$("#txtAseguradora").attr("nombre", ui.item.nombre);
			console.log("Aseguradora seleccionado", ui.item.idAseguradora);
		}
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtAsegurado: "required",
			txtAseguradora: "required",
			txtNumero: "required",
			txtEmision: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TPoliza;
			obj.add({
				id: $("#id").val(), 
				asegurado: $("#txtAsegurado").attr("identificador"), 
				aseguradora: $("#txtAseguradora").attr("identificador"), 
				usuario: $("#selUsuario").val(),
				emision: $("#txtEmision").val(),
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
				
				$("#id").val(el.idAseguradora);
				$("#txtAsegurado").val(el.asegurado);
				$("#txtAsegurado").attr("nombre", el.asegurado);
				$("#txtAsegurado").attr("identificador", el.idAsegurado);
				$("#txtAseguradora").val(el.aseguradora);
				$("#txtAseguradora").attr("nombre", el.aseguradora);
				$("#txtAseguradora").attr("identificador", el.idAseguradora);
				
				$("#txtEmision").val(el.emision);
				$("#txtNumero").val(el.numero);
				$("#selUsuario").val(el.idUsuario);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=cargos]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				$("#winCargos").attr("poliza", el.idPoliza);
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
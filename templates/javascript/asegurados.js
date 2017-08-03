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
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			txtNIT: {
				required: true,
				remote: {
					url: "casegurados",
					type: "post",
					data: {
						"action": "validaNIT",
						"asegurado": function(){
							return $("#id").val()
						},
						"movil": 1
					}
				}
			}
		},
		wrapper: 'span', 
		messages: {
			txtNIT: {
				remote: "El NIT ya existe con otro asegurado"
			}
		},
		submitHandler: function(form){
			var obj = new TAsegurado;
			obj.add({
				id: $("#id").val(), 
				nombre: $("#txtNombre").val(), 
				nit: $("#txtNIT").val(), 
				direccion: $("#txtDireccion").val(), 
				correo: $("#txtCorreo").val(), 
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
		$.get("listaAsegurados", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TAsegurado;
					obj.del($(this).attr("identificador"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			 
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idAsegurado);
				$("#txtNombre").val(el.nombre);
				$("#txtNIT").val(el.nit);
				$("#txtDireccion").val(el.direccion);
				$("#txtCorreo").val(el.correo);
				
				$('#panelTabs a[href="#add"]').tab('show');
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
$(document).ready(function(){
	$("#txtInicio").datepicker({ dateFormat: 'yy-mm-dd' });
	$("#txtFin").datepicker({ dateFormat: 'yy-mm-dd' });
	
	
	function getLista(){
		$.post("rListaPolizas", {
			"inicio": $("#txtInicio").val(),
			"fin": $("#txtFin").val()
		}, function(data) {
			$("#dvLista").html(data);
			
			$("#dvLista").find("tr").click(function(){
				$("#winDetalleCargo").attr("identificador", $(this).attr("identificador"));
				$("#winDetalleCargo").modal();
			});
			
			$("#tblDatos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"order": [[ 6, "desc" ]]
			});
		});
	}
	
	$("#btnBuscar").click(function(){
		getLista();
	});
	
	getLista();
	
	$('#winDetalleCargo').on('shown.bs.modal', function(e){
		$("#winDetalleCargo").find(".modal-body").html("Actualizando datos");
		$.post("detalleCargo", {
			id: $("#winDetalleCargo").attr("identificador")
		}, function(resp){
			$("#winDetalleCargo").find(".modal-body").html(resp);
		});
	});
});
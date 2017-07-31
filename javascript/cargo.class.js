TCargo = function(){
	var self = this;
	
	this.add = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('ccargos', {
				"id": datos.id,
				"poliza": datos.poliza,
				"requerimiento": datos.requerimiento, 
				"vencimiento": datos.vencimiento,
				"monto": datos.monto,
				"action": "add"
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (datos.fn.after !== undefined)
					datos.fn.after(data);
			}, "json");
	};
	
	this.setEstado = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('ccargos', {
				"id": datos.cargo,
				"estado": datos.estado,
				
				"fechaPago": datos.fechaPago,
				"fechaFactura": datos.fechaFactura,
				"formaPago": datos.formaPago,
				"referencia": datos.referencia,
				
				"action": "setEstado"
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (datos.fn.after !== undefined)
					datos.fn.after(data);
			}, "json");
	}
	
	this.del = function(id, fn){
		$.post('ccargos', {
			"id": id,
			"action": "del"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar el registro");
			}
		}, "json");
	};
};
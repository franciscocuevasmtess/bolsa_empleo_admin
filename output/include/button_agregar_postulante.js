Runner.buttonEvents["agregar_postulante"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'agregar_postulante';
	
	if ( !pageObj.buttonEventBefore['agregar_postulante'] ) {
		pageObj.buttonEventBefore['agregar_postulante'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
/*
 * El uso que tendra este boton es vincular un postulante a una oferta de trabajo con
 * el estado inicial de "Preseleccionado" y tener un historico de cambios en la tabla "seguimientos".
*/
params["id_vacancias"] = row.getFieldValue("id_vacancias");

ctrl.setEnabled();

Swal.fire({
	title: "Agregar nuevo postulante a la oferta laboral? ",
	showCancelButton: true,
	cancelButtonText: "Cancelar",
	confirmButtonText: "Confirmar"
}).then((result) => {
	if (result.isConfirmed) {
		params["bandera"] = 0;
		submit();
	}
});

return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['agregar_postulante'] ) {
		pageObj.buttonEventAfter['agregar_postulante'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
if (result["bandera"] == 1) {
	Swal.fire("Se agrego el postulante:" 
					+ result["nombre_completo"] 
					+ " En la oferta: " 
					+ result["descripcion"] 
					+ " exitosamente!"
					//+ " sql: " + result["sql"]
				).then(function() {
		window.location.href = "vacancia_list.php";
	});
} else if(result["bandera"] == 2){
	Swal.fire("Faltan datos de CV del postulante, Verifique!");
} else {
	Swal.fire("No se puede agregar Postulante a una Oferta Laboral Cerrada!");
}
		}
	}
	
	$('a[id="agregar_postulante"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "agregar_postulante" + "_" + Runner.genId();
		
		// create object
		var button_agregar_postulante = new Runner.form.Button({
			id: this.id ,
			btnName: "agregar_postulante"
		});
		
		// init
		button_agregar_postulante.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


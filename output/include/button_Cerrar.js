Runner.buttonEvents["Cerrar"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Cerrar';
	
	if ( !pageObj.buttonEventBefore['Cerrar'] ) {
		pageObj.buttonEventBefore['Cerrar'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Cerrar'] ) {
		pageObj.buttonEventAfter['Cerrar'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
Swal.fire({
	icon: 'success',
	title: 'Operación exitosa',
	text: 'La vacancia esta cerrada.',
	showConfirmButton: false,
	timer: 1500 // Cerrar automáticamente el mensaje después de 1.5 segundos
}).then(() => {
	// Recargar la página después de un breve retraso (por ejemplo, 1 segundo)
	setTimeout(function() {
		location.reload();
	}, 1000);
});
		}
	}
	
	$('a[id="Cerrar"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Cerrar" + "_" + Runner.genId();
		
		// create object
		var button_Cerrar = new Runner.form.Button({
			id: this.id ,
			btnName: "Cerrar"
		});
		
		// init
		button_Cerrar.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


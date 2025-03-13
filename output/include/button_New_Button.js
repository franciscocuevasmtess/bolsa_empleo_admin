Runner.buttonEvents["New_Button"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button';
	
	if ( !pageObj.buttonEventBefore['New_Button'] ) {
		pageObj.buttonEventBefore['New_Button'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button'] ) {
		pageObj.buttonEventAfter['New_Button'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var url = 'postulacion_list.php?masterkey1=' + result['id_vacancias'] + '&page=list&mastertable=bolsa_empleo.vacancia';

// Mostrar mensaje de confirmación antes de redirigir.
Swal.fire({
    title: '¿Está seguro?',
    text: '¿Desea ver la lista de postulantes para esta vacancia?',
    icon: 'question',
    showCancelButton: true, // Muestra botón de "Cancelar"
    confirmButtonColor: '#3085d6', // Color del botón de confirmación
    cancelButtonColor: '#d33', // Color del botón de cancelar
    confirmButtonText: 'Sí, ver lista',
    cancelButtonText: 'Cancelar'
}).then((result) => {
    if (result.isConfirmed) {
        // Si el usuario confirma, redirigir a la página de postulantes.
        location.replace(url);
    }
});

		}
	}
	
	$('a[id="New_Button"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button" + "_" + Runner.genId();
		
		// create object
		var button_New_Button = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button"
		});
		
		// init
		button_New_Button.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


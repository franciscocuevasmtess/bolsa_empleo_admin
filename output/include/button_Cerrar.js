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

// Muestra un cuadro de diálogo de SweetAlert con un mensaje de éxito.
Swal.fire({
	// Icono que indica el tipo de mensaje (en este caso, éxito).
	icon: 'success',
	
	// Título del cuadro de diálogo.
	title: 'Operación exitosa',
	
	// Texto descriptivo adicional.
	text: 'La vacancia esta cerrada.',

	// Oculta el botón de confirmación, ya que el cuadro de diálogo se cerrará automáticamente.
	showConfirmButton: false,
	
	// Tiempo en milisegundos antes de que el cuadro de diálogo se cierre automáticamente (1.5 segundos).
	timer: 1500
}).then(() => {
	// Acción a realizar después de que el cuadro de diálogo desaparezca.
	// Se utiliza un temporizador adicional para recargar la página con un ligero retraso.

	// Recargar la página después de un breve retraso (por ejemplo, 1 segundo)
	setTimeout(function() {
		// Recarga la página para reflejar los cambios realizados.
		location.reload();
	}, 1000); // Retraso de 1 segundo antes de recargar la página.
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


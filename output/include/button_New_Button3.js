Runner.buttonEvents["New_Button3"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button3';
	
	if ( !pageObj.buttonEventBefore['New_Button3'] ) {
		pageObj.buttonEventBefore['New_Button3'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
ctrl.setEnabled();

// Obtener la fecha de expiración de la vacancia del campo de la fila
var fechaExpiracion = row.getFieldValue("fecha_expiracion_vacancia");

// Obtener la fecha y hora actual
var now = new Date();
var nowISO = now.toISOString();

// Verificar si la fecha de expiración es posterior a la fecha y hora actual
if (new Date(fechaExpiracion) > new Date(nowISO)) {
  // Si es así, enviar el formulario
  //submit();
	
	// Mostrar un mensaje de confirmación antes de enviar el formulario.
    Swal.fire({
        title: '¿Está seguro?',
        text: '¿Realmente desea realizar este cambio?',
        icon: 'warning',
        showCancelButton: true, // Muestra botón de "Cancelar"
        confirmButtonColor: '#3085d6', // Color del botón de confirmación
        cancelButtonColor: '#d33', // Color del botón de cancelar
        confirmButtonText: 'Sí, confirmar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            // Si el usuario confirma, se envía el formulario.
            submit();
        }
    });
} else {
  // Si no, mostrar un mensaje de error utilizando SweetAlert2
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'La fecha de expiración de la vacancia ha pasado.'
  });
}

 // descomentar para frenar todo el sistema, usar submit(); para continuar
 return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button3'] ) {
		pageObj.buttonEventAfter['New_Button3'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
Swal.fire({
	icon: 'success',
	title: 'Operación exitosa',
	text: 'La vacancia esta En Evaluacion.',
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
	
	$('a[id="New_Button3"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button3" + "_" + Runner.genId();
		
		// create object
		var button_New_Button3 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button3"
		});
		
		// init
		button_New_Button3.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


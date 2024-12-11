Runner.buttonEvents["Activar"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Activar';
	
	if ( !pageObj.buttonEventBefore['Activar'] ) {
		pageObj.buttonEventBefore['Activar'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
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
  submit();
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
	
	if ( !pageObj.buttonEventAfter['Activar'] ) {
		pageObj.buttonEventAfter['Activar'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
Swal.fire({
	icon: 'success',
	title: 'Operación exitosa',
	text: 'La vacancia esta ativada.',
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
	
	$('a[id="Activar"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Activar" + "_" + Runner.genId();
		
		// create object
		var button_Activar = new Runner.form.Button({
			id: this.id ,
			btnName: "Activar"
		});
		
		// init
		button_Activar.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


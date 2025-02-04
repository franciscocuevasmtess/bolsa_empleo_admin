Runner.buttonEvents["Activar"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Activar';
	
	if ( !pageObj.buttonEventBefore['Activar'] ) {
		pageObj.buttonEventBefore['Activar'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

// Habilitar el control asociado (asegura que las acciones siguientes puedan ejecutarse correctamente).
ctrl.setEnabled();

// Obtener la fecha de expiración de la vacancia desde el campo correspondiente de la fila seleccionada.
var fechaExpiracion = row.getFieldValue("fecha_expiracion_vacancia");

// Obtener la fecha y hora actual del sistema.
var now = new Date();

// Convertir la fecha y hora actual al formato ISO (para comparación uniforme).
var nowISO = now.toISOString();

// Verificar si la fecha de expiración de la vacancia es posterior a la fecha y hora actual.
if (new Date(fechaExpiracion) > new Date(nowISO)) {
	// Si la fecha de expiración es válida (posterior a la actual), proceder a enviar el formulario.
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
	// Si la fecha de expiración ya pasó, mostrar un mensaje de error utilizando SweetAlert2.
	Swal.fire({
		// Icono de advertencia que indica un error.
		icon: 'error',

		// Título del mensaje.
		title: 'Error',

		// Texto explicativo del error.
		text: 'La fecha de expiración de la vacancia ha pasado.'
	});
}

// Nota para el programador: 
// Descomentar la línea "return false;" para detener completamente la ejecución del sistema
// y evitar que el formulario continúe con el envío en ciertas condiciones.
// Usar "submit();" si se desea continuar con el flujo normal del formulario.
return false;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Activar'] ) {
		pageObj.buttonEventAfter['Activar'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

// Muestra un cuadro de diálogo de SweetAlert con un mensaje de éxito.
Swal.fire({
	// Icono que indica el tipo de mensaje (en este caso, éxito).
	icon: 'success',
	
	// Título del cuadro de diálogo.
	title: 'Operación exitosa',

	// Texto descriptivo adicional.
	text: 'La vacancia esta ativada.',
	
	// Tiempo en milisegundos antes de que el cuadro de diálogo se cierre automáticamente (1.5 segundos).
	showConfirmButton: false,
	timer: 1500 // Cerrar automáticamente el mensaje después de 1.5 segundos
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


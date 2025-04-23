Runner.buttonEvents["evaluacion_empresa"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'evaluacion_empresa';
	
	if ( !pageObj.buttonEventBefore['evaluacion_empresa'] ) {
		pageObj.buttonEventBefore['evaluacion_empresa'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
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
        title: 'Atención',
        text: 'Esta acción enviará los datos de los postulantes a la empresa.',
        icon: 'warning',
        showCancelButton: true, // Muestra botón de "Cancelar"
        confirmButtonColor: '#3085d6', // Color del botón de confirmación
        cancelButtonColor: '#d33', // Color del botón de cancelar
        confirmButtonText: 'Sí, confirmar',
        cancelButtonText: 'No enviar'
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
	
	if ( !pageObj.buttonEventAfter['evaluacion_empresa'] ) {
		pageObj.buttonEventAfter['evaluacion_empresa'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Muestra un cuadro de diálogo de SweetAlert con un mensaje de éxito.
Swal.fire({
	// Icono que indica el tipo de mensaje (en este caso, éxito).
	icon: ''+result["xicon"],
	
	// Título del cuadro de diálogo.
	title: ''+result["xtitle"],

	// Texto descriptivo adicional.
	text: ''+result["xmensaje"],
	
	// Tiempo en milisegundos antes de que el cuadro de diálogo se cierre automáticamente (1.5 segundos).
	showConfirmButton: true
	//timer: 1500 // Cerrar automáticamente el mensaje después de 1.5 segundos
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
	
	$('a[id="evaluacion_empresa"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "evaluacion_empresa" + "_" + Runner.genId();
		
		// create object
		var button_evaluacion_empresa = new Runner.form.Button({
			id: this.id ,
			btnName: "evaluacion_empresa"
		});
		
		// init
		button_evaluacion_empresa.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


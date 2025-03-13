Runner.buttonEvents["New_Button5"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button5';
	
	if ( !pageObj.buttonEventBefore['New_Button5'] ) {
		pageObj.buttonEventBefore['New_Button5'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
/*
 * BOTÓN "Cambiar Estado".
 * Este script gestiona el cambio masivo de estado para los postulantes seleccionados en una lista.
 *
 * Funcionalidad:
 * 1. Muestra un cuadro de diálogo de confirmación antes de realizar el cambio masivo de estado.
 * 2. Obtiene el estado seleccionado por el usuario del campo desplegable.
 * 3. Recopila los IDs de los postulantes seleccionados en la lista.
 * 4. Valida que al menos un postulante haya sido seleccionado.
 * 5. Si pasa la validación, envía los datos al servidor para procesar el cambio masivo.
 */


// Habilitar el botón antes de ejecutar la lógica
ctrl.setEnabled();


var valorConvocados = document.getElementById("estados_convocados").value;
if (valorConvocados == "1") {
	textValorConvocados = "Preseleccionado";
} else {
	textValorConvocados = "Seleccionado";
}



// Mostrar un cuadro de diálogo de confirmación usando SweetAlert2
Swal.fire({
	//title: "Esta seguro que desea realizar el cambio masivo? ",
	title: "¿Está seguro que desea realizar el cambio de estado de Convocado a "+textValorConvocados+" de la Oferta ID: "+proxy.master['id_vacancias']+"?",
	showCancelButton: true,
	confirmButtonText: "Confirmar",
	cancelButtonText: "Cancelar"
}).then((result) => {
	
	// Si el usuario confirma la acción
	if (result.isConfirmed) {
		// ────────────────────────────────────────────────
		// Paso 1: Obtener el estado seleccionado por el usuario
		// ────────────────────────────────────────────────
		var e = document.getElementById("estados_convocados");
		var estadoSeleccionado = e.value; // Valor del campo desplegable.
		params["id_nuevo_estado"] = estadoSeleccionado; // Guardar el estado en la variable "params" para usarlo en el servidor.
		
		
		// ────────────────────────────────────────────────
		// Paso 2: Obtener los IDs de los postulantes seleccionados
		// ────────────────────────────────────────────────
		var cboxes = document.getElementsByName('selection[]'); // Checkboxes de la lista
		var totalCheckboxes = cboxes.length; // Número total de checkboxes
		params["cboxes"] = "";	// Inicializar el parámetro para guardar los IDs
		var contadorSeleccionados = 0; // Contador para los postulantes seleccionados
		
		// Recorrer los checkboxes y guardar los IDs de los seleccionados
		for (var i = 0; i < totalCheckboxes; i++) {
			if (cboxes[i].checked) {
				// Agregar el ID del postulante seleccionado al parámetro "cboxes"
				params["cboxes"] += cboxes[i].value + ",";
				contadorSeleccionados += 1;
			}
		}
	
		
		// ────────────────────────────────────────────────
		// Paso 3: Validar que se haya seleccionado al menos un postulante
		// ────────────────────────────────────────────────
		if (contadorSeleccionados == 0) {
			// Mostrar mensaje de error si no hay postulantes seleccionados
			Swal.fire({
				icon: 'error',
				title: 'Error',
				text: 'Debe seleccionar al menos un postulante.'
			});
		} else {
			// ────────────────────────────────────────────────
			// Paso 4: Enviar el formulario al servidor
			// ────────────────────────────────────────────────
			submit(); // Enviar los datos al servidor para procesar el cambio masivo
		}
	}
	
});

return false; // Prevenir el envío automático del formulario

		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button5'] ) {
		pageObj.buttonEventAfter['New_Button5'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
/*
 * Validación del resultado del cambio de estado
 * Este fragmento de código utiliza SweetAlert2 para notificar al usuario sobre el éxito del proceso
 * y redirigirlo a otra página si el cambio fue exitoso.
 */

if (result["bandera"] == 1) {
	// Mostrar mensaje de éxito al usuario
	Swal.fire("Se realizo el cambio de estado exitosamente!")
		.then(function() {
			// Redirigir a la página de listado de vacancias
			window.location.href = "vacancia_list.php";
		});
}

		}
	}
	
	$('a[id="New_Button5"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button5" + "_" + Runner.genId();
		
		// create object
		var button_New_Button5 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button5"
		});
		
		// init
		button_New_Button5.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


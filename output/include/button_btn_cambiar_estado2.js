Runner.buttonEvents["btn_cambiar_estado2"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btn_cambiar_estado2';
	
	if ( !pageObj.buttonEventBefore['btn_cambiar_estado2'] ) {
		pageObj.buttonEventBefore['btn_cambiar_estado2'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
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

// Mostrar un cuadro de diálogo de confirmación usando SweetAlert2
Swal.fire({
	title: "¿Está seguro que desea realizar el cambio masivo?",
	showCancelButton: true,
	confirmButtonText: "Confirmar",
	cancelButtonText: "Cancelar"
}).then((result) => {

	// Si el usuario confirma la acción
	if (result.isConfirmed) {
		// ────────────────────────────────────────────────
		// Paso 1: Obtener el estado seleccionado por el usuario
		// ────────────────────────────────────────────────
		var estadoSeleccionado = document.getElementById("estados_preseleccionados").value; // Valor del campo desplegable.
		params["id_nuevo_estado"] = estadoSeleccionado; // Guardar el estado en la variable "params" para usarlo en el servidor.
		
		
		// ────────────────────────────────────────────────
		// Paso 2: Obtener los IDs de los postulantes seleccionados
		// ────────────────────────────────────────────────
		var checkboxes = document.getElementsByName('selection[]');	// Checkboxes de la lista
		var totalCheckboxes = checkboxes.length;							// Número total de checkboxes
		params["cboxes"] = "";													// Inicializar el parámetro para guardar los IDs
		var contadorSeleccionados = 0;										// Contador para los postulantes seleccionados
		
		// Recorrer los checkboxes y guardar los IDs de los seleccionados
		for (var i = 0; i < totalCheckboxes; i++) {
			if (checkboxes[i].checked) {
				// Agregar el ID del postulante seleccionado al parámetro "cboxes"
				params["cboxes"] += checkboxes[i].value + ",";
				contadorSeleccionados++;
			}
		}
		
		// ────────────────────────────────────────────────
		// Paso 3: Validar que se haya seleccionado al menos un postulante
		// ────────────────────────────────────────────────
		if (contadorSeleccionados === 0) {
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
			submit();	// Enviar los datos al servidor para procesar el cambio masivo
		}
	}
});

return false;	// Prevenir el envío automático del formulario
		}
	}
	
	if ( !pageObj.buttonEventAfter['btn_cambiar_estado2'] ) {
		pageObj.buttonEventAfter['btn_cambiar_estado2'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
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
	
	$('a[id="btn_cambiar_estado2"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "btn_cambiar_estado2" + "_" + Runner.genId();
		
		// create object
		var button_btn_cambiar_estado2 = new Runner.form.Button({
			id: this.id ,
			btnName: "btn_cambiar_estado2"
		});
		
		// init
		button_btn_cambiar_estado2.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


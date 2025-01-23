Runner.buttonEvents["btn_cambiar_estado2"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btn_cambiar_estado2';
	
	if ( !pageObj.buttonEventBefore['btn_cambiar_estado2'] ) {
		pageObj.buttonEventBefore['btn_cambiar_estado2'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
/*
 * Boton "Cambia Estado".
 * Obtiene el valor del nuevo estado seleccionado por el usuario.
 * Obtener las personas seleccionados de la lista para realizar el cambio de estado masivo.
*/
/*
ctrl.setEnabled();

Swal.fire({
	title: "Esta seguro que desea realizar el cambio masivo? ",
	showCancelButton: true,
	confirmButtonText: "Confirmar",
	cancelButtonText: "Cancelar"
}).then((result) => {
	
	if (result.isConfirmed) {
		//Paso 1.) Obtener el valor del Estado "seleccionado" por el usuario.
		var e = document.getElementById("estados_preseleccionados");
		var value = e.value;
		params["id_nuevo_estado"] = value; //asigno a la variable "id_nuevo_estado" para poder utilizarla en el Server.

		var contador = 0;
	
		//Paso 2.) Obtener las personas checkeadas a quienes se les realizara el cambio masivo de Estado.
		var cboxes = document.getElementsByName('selection[]');
		var len = cboxes.length;
		params["cboxes"] = "";
	
		for (var i = 0; i < len; i++) {
			if (cboxes[i].checked) {
				//Voy agregando al array "cboxes" los ID-Postulacion para posteriormente 
				//en el "Server" utilizarlas en las query.
				params["cboxes"] += cboxes[i].value + ",";
				contador += 1;
			}
		}
	
		if (contador == 0) {
			// mostrar un mensaje de error utilizando SweetAlert2
			Swal.fire({
				icon: 'error',
				title: 'Error',
				text: 'Debe seleccionar al menos un postulante.'
			});
		} else {
			// enviar el formulario
			submit();
		}
	}
	
});

return false;
*/


	/*
	 * Botón "Cambia Estado".
	 * Funcionalidad para realizar un cambio masivo de estado a los postulantes seleccionados.
	 * Se utiliza SweetAlert2 para mostrar confirmaciones y mensajes.
	 */

	// Habilita el botón para su uso.
	ctrl.setEnabled();

	// Mostrar confirmación al usuario antes de realizar el cambio masivo
	Swal.fire({
		title: "¿Está seguro que desea realizar el cambio masivo?",
		showCancelButton: true,
		confirmButtonText: "Confirmar",
		cancelButtonText: "Cancelar"
	}).then((result) => {

		// Si el usuario confirma la acción
		if (result.isConfirmed) {

			// **PASO 1**: Obtener el estado nuevo seleccionado por el usuario
			var estadoSeleccionado = document.getElementById("estados_preseleccionados").value;

			// Asignar el estado nuevo a `params` para enviarlo al servidor
			params["id_nuevo_estado"] = estadoSeleccionado;

			// Contador para verificar cuántas personas se seleccionaron
			var contadorSeleccionados = 0;

			// **PASO 2**: Obtener la lista de postulantes seleccionados (checkboxes)
			var checkboxes = document.getElementsByName('selection[]'); // Array de todos los checkboxes
			var totalCheckboxes = checkboxes.length;

			// Inicializar la lista de IDs seleccionados
			params["cboxes"] = "";

			// Iterar sobre los checkboxes y agregar los seleccionados a `params["cboxes"]`
			for (var i = 0; i < totalCheckboxes; i++) {
				if (checkboxes[i].checked) {
					// Agregar el ID del postulante seleccionado a la lista separada por comas
					params["cboxes"] += checkboxes[i].value + ",";
					contadorSeleccionados++;
				}
			}

			// **Validación**: Verificar si no se seleccionó ningún postulante
			if (contadorSeleccionados === 0) {
				// Mostrar mensaje de error si no hay seleccionados
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Debe seleccionar al menos un postulante.'
				});
			} else {
				// Enviar el formulario al servidor
				submit();
			}
		}
	});

	return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['btn_cambiar_estado2'] ) {
		pageObj.buttonEventAfter['btn_cambiar_estado2'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
if (result["bandera"] == 1) {
	Swal.fire("Se realizo el cambio de estado exitosamente!").then(function() {
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


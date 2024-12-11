Runner.buttonEvents["New_Button5"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button5';
	
	if ( !pageObj.buttonEventBefore['New_Button5'] ) {
		pageObj.buttonEventBefore['New_Button5'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
/*
 * Boton "Cambia Estado".
 * Obtiene el valor del nuevo estado seleccionado por el usuario.
 * Obtener las personas seleccionados de la lista para realizar el cambio de estado masivo.
*/
ctrl.setEnabled();

Swal.fire({
	title: "Esta seguro que desea realizar el cambio masivo? ",
	showCancelButton: true,
	confirmButtonText: "Confirmar",
	cancelButtonText: "Cancelar"
}).then((result) => {
	
	if (result.isConfirmed) {
		//Paso 1.) Obtener el valor del Estado "seleccionado" por el usuario.
		var e = document.getElementById("estados_convocados");
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

		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button5'] ) {
		pageObj.buttonEventAfter['New_Button5'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
if (result["bandera"] == 1) {
	Swal.fire("Se realizo el cambio de estado exitosamente!").then(function() {
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


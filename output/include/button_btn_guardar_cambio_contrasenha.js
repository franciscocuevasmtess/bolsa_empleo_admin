Runner.buttonEvents["btn_guardar_cambio_contrasenha"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btn_guardar_cambio_contrasenha';
	
	if ( !pageObj.buttonEventBefore['btn_guardar_cambio_contrasenha'] ) {
		pageObj.buttonEventBefore['btn_guardar_cambio_contrasenha'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
ctrl.setEnabled(); 

var id = Runner.getControl(pageid, 'id');
var email = Runner.getControl(pageid, 'email');
var clave = Runner.getControl(pageid, 'clave');
var repetir_clave = Runner.getControl(pageid, 'repetir_clave');
var nro_documento = Runner.getControl(pageid, 'nro_documento');
var edit_save = Runner.getControl(pageid, 'edit_save');

//VALIDAR CAMPOS VACIOS
if (email.getValue() == "") {
	Swal.fire({
		icon: "warning",
		title: "Email es Requerido",
		text: "El campo Email es requerido."
	});
	return false;
}
if (clave.getValue() == "") {
	Swal.fire({
		icon: "warning",
		title: "Contraseña es Requerido",
		text: "El campo Contraseña es requerido."
	});
	return false;
}
if (repetir_clave.getValue()  == "") {
	Swal.fire({
		icon: "warning",
		title: "Repetir Contraseña es Requerido",
		text: "El campo Repetir contraseña es requerido."
	});
   return false;
}

//VALIDAR QUE COINCIDAN CONTRASEÑAS
if (repetir_clave.getValue() != clave.getValue()) {
	Swal.fire({
		icon: "warning",
		title: "Contraseñas no coinciden",
		text: "Las contraseñas no coinciden. Por favor, verifica e inténtalo de nuevo."
	});
	return false;
}

//VALIDACIONES POR AJAX
$.ajax({
	url: 'validar_clave.php',  // El script PHP en el servidor que realizará la validación
	type: 'POST',
	data: { 
		clave: clave.getValue(), 
		nro_documento: nro_documento.getValue(),
		id: id.getValue(),
		email: email.getValue(),
	},
	success: function(response) {
		// La respuesta debe estar en formato JSON
		var data = JSON.parse(response);
		
		if (data.success) {
			// Si la validación en el servidor fue exitosa
			swal({
				title: "¡Éxito!",
				text: data.message,
				icon: "success",
				button: "Continuar",
			}).then(() => {
				$("#saveButton1").click();
			});
		} else {
			// Si la validación falló en el servidor
			Swal.fire({
				icon: 'error',
				title: 'Error en la validación',
				text: data.message,  // Mensaje desde el servidor
			});
			return false;
		}
	}, error: function(xhr, status, error) {
		// En caso de un error en la petición AJAX
		Swal.fire({
			 icon: 'error',
			 title: 'Error',
			 text: 'Hubo un problema con la petición. Inténtalo de nuevo.',
		});
	return false;
	}
});//fin ajax

return false;

		}
	}
	
	if ( !pageObj.buttonEventAfter['btn_guardar_cambio_contrasenha'] ) {
		pageObj.buttonEventAfter['btn_guardar_cambio_contrasenha'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="btn_guardar_cambio_contrasenha"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "btn_guardar_cambio_contrasenha" + "_" + Runner.genId();
		
		// create object
		var button_btn_guardar_cambio_contrasenha = new Runner.form.Button({
			id: this.id ,
			btnName: "btn_guardar_cambio_contrasenha"
		});
		
		// init
		button_btn_guardar_cambio_contrasenha.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


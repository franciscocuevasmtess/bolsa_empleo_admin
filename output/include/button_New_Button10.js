Runner.buttonEvents["New_Button10"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button10';
	
	if ( !pageObj.buttonEventBefore['New_Button10'] ) {
		pageObj.buttonEventBefore['New_Button10'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button10'] ) {
		pageObj.buttonEventAfter['New_Button10'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var nombre_archivo = "planilla_integrada_rubro_";


function descargarExcel() {
	
	fetch('generar_planilla_web2.php', {	
		method: 'POST'
	})
	.then(response => {
		// Verificar el content-type para saber si se trata de JSON (error) o del archivo Excel
		const contentType = response.headers.get("content-type");
		if (contentType && contentType.indexOf("application/json") !== -1) {
			// Si es JSON, parsearlo y lanzar error
			return response.json().then(data => {
				throw new Error(data.error || "Error desconocido al generar el archivo");
			});
		}
		
		// Si no es JSON, se espera el blob del archivo Excel
		return response.blob();
	})
	.then(blob => {
		// Crear un objeto URL para el blob y forzar la descarga
		const url = window.URL.createObjectURL(blob);
		const a = document.createElement('a');
		a.href = url;
		a.download = nombre_archivo + '.xlsx'; // Nombre del archivo a descargar
		document.body.appendChild(a);
		a.click();
		// Limpieza
		a.remove();
		window.URL.revokeObjectURL(url);
	})
	.catch(error => {
		console.error('Error:', error);
		// Opcional: puedes notificar al usuario mediante una alerta o mediante otro mecanismo
		Swal.fire({
			icon: 'error',
			title: 'Error',
			text: error.message
		});
	});
}



descargarExcel();
Swal.fire({
	icon: 'success',
	title: 'Planilla generada con éxito.',
	text: 'La descarga comenzará en breve.'
});

		}
	}
	
	$('a[id="New_Button10"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button10" + "_" + Runner.genId();
		
		// create object
		var button_New_Button10 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button10"
		});
		
		// init
		button_New_Button10.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


Runner.buttonEvents["New_Button9"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button9';
	
	if ( !pageObj.buttonEventBefore['New_Button9'] ) {
		pageObj.buttonEventBefore['New_Button9'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

// Obtener el ID de la feria de empleo seleccionada desde la fila actual y almacenarlo en params.
params["id_feria_empleo"] = row.getFieldValue("id_feria_empleo");


		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button9'] ) {
		pageObj.buttonEventAfter['New_Button9'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
/*
var message = result["id_vacancias"]+" "+result["id_estado"]+" "+result["descripcion"]+" "+result["empresa"]+" "+result["fullname"];
ajax.setMessage(message);
*/

var nombre_archivo = "planilla_asistencia_" + result["id_feria_empleo"];

function descargarExcel(id_feria_empleo) {
	let data = new FormData();
	
	data.append('id_feria_empleo', id_feria_empleo);

	fetch('generar_planilla_web_asistentes.php', {
		method: 'POST',
		body: data
	}).then(response => {
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
	}).then(blob => {
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
	}).catch(error => {
		console.error('Error:', error);
		// Opcional: puedes notificar al usuario mediante una alerta o mediante otro mecanismo
		Swal.fire({
			icon: 'warning',
			title: 'Mensaje:',
			text: error.message
		});
	});
}

	descargarExcel(result["id_feria_empleo"]);

	Swal.fire({
		icon: 'success',
		title: 'Planilla generada con éxito.',
		text: 'La descarga comenzará en breve.'
	});

		}
	}
	
	$('a[id="New_Button9"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button9" + "_" + Runner.genId();
		
		// create object
		var button_New_Button9 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button9"
		});
		
		// init
		button_New_Button9.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


Runner.buttonEvents["btn_event_descargar2"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btn_event_descargar2';
	
	if ( !pageObj.buttonEventBefore['btn_event_descargar2'] ) {
		pageObj.buttonEventBefore['btn_event_descargar2'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['btn_event_descargar2'] ) {
		pageObj.buttonEventAfter['btn_event_descargar2'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var nombre_archivo = "planilla_vacancia_" + result["id_vacancias"];
var idEstado = parseInt(result["id_estado"], 10); // Convierte a número

switch(idEstado){
	case 1:
		nombre_archivo += "_preseleccionados";
		break;
	case 2:
		nombre_archivo += "_seleccionados";
		break;
	case 3:
		nombre_archivo += "_convocados";
		break;
	default:
		break;
}

var nombre_archivo = "planilla_vacancia_" + result["id_vacancias"];


function descargarExcel(id_vacancias, id_estado, descripcion, empresa, fullname) {
	let data = new FormData();

	data.append('id_vacancias', id_vacancias);
	data.append('id_estado', id_estado);
	data.append('descripcion', descripcion);
	data.append('empresa', empresa);
	data.append('fullname', fullname);

	fetch('generar_planilla_web.php', {	
		method: 'POST',
		body: data
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


//si id_estado es null significa que no hay registros en la tabla detalle
if (result["id_estado"] == null) {
	Swal.fire({
		icon: 'error',
		title: 'Error',
		text: 'No hay datos para generar la planilla.'
	});
} else {
	descargarExcel(result["id_vacancias"], result["id_estado"], result["descripcion"], result["empresa"], result["fullname"]);
	Swal.fire({
		icon: 'success',
		title: 'Planilla generada con éxito.',
		text: 'La descarga comenzará en breve.'
	});
}

		}
	}
	
	$('a[id="btn_event_descargar2"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "btn_event_descargar2" + "_" + Runner.genId();
		
		// create object
		var button_btn_event_descargar2 = new Runner.form.Button({
			id: this.id ,
			btnName: "btn_event_descargar2"
		});
		
		// init
		button_btn_event_descargar2.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


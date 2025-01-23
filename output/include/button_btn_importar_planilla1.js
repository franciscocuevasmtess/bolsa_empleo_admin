Runner.buttonEvents["btn_importar_planilla1"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btn_importar_planilla1';
	
	if ( !pageObj.buttonEventBefore['btn_importar_planilla1'] ) {
		pageObj.buttonEventBefore['btn_importar_planilla1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
/*
// Put your code here.
params["txt"] = "Hello";
ajax.setMessage("Sending request to server...");
// Uncomment the following line to prevent execution of "Server" and "Client After" events.
// return false;
*/
		}
	}
	
	if ( !pageObj.buttonEventAfter['btn_importar_planilla1'] ) {
		pageObj.buttonEventAfter['btn_importar_planilla1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

// Referencia al input de archivo del formulario.
const fileInput = document.getElementById('fileInput_'+result['id_vacancias']);
// Obtener el archivo seleccionado por el usuario.
const file = fileInput.files[0];

// Obtener datos adicionales del formulario y el servidor.
const id_vacancias = row.getFieldValue("id_vacancias"); // ID de la vacancia (se obtiene desde el formulario).
const usuario_carga_id = result["id"]; // ID del usuario que realiza la carga (obtenido desde el servidor).
const usuario_carga_nombre = result["username"]; // Nombre del usuario que realiza la carga (obtenido desde el servidor).


// Validar si el usuario seleccionó un archivo.
if (!file) {
	Swal.fire({
        icon: 'error',
        title: 'Archivo no seleccionado',
        text: 'Por favor, seleccione un archivo.'
    });
	return; // Detener ejecución si no hay archivo seleccionado.
}

// Obtener el nombre del archivo
const fileName = file.name;

// Validar que el archivo sea de tipo CSV o Excel
const allowedExtensions = ['csv', 'xls', 'xlsx']; // Extensiones permitidas
const fileExtension = file.name.split('.').pop().toLowerCase(); // Obtener la extensión del archivo

if (!allowedExtensions.includes(fileExtension)) {
    Swal.fire({
        icon: 'error',
        title: 'Archivo no válido',
        text: 'Por favor, cargue un archivo válido en formato CSV o Excel (.xls, .xlsx).'
    });
    return; // Detener ejecución si el archivo no es válido
}


// Crear un lector de archivos para procesar el archivo seleccionado.
const reader = new FileReader();


// Evento que se ejecuta cuando el archivo ha sido leído.
reader.onload = async function (e) {
	const fileData = e.target.result; // Contenido del archivo leído.
	
	// Procesar archivo CSV.
	if (file.name.endsWith('.csv')) {
		processCSV(fileData);
	} else {
		// Procesar archivo Excel.
		const data = new Uint8Array(fileData); // Convertir datos en bytes para procesar Excel.
		const workbook = XLSX.read(data, { type: 'array' }); // Leer el archivo Excel.
		const worksheet = workbook.Sheets[workbook.SheetNames[0]]; // Seleccionar la primera hoja.
		const jsonData = XLSX.utils.sheet_to_json(worksheet, { header: 1 }); // Convertir datos a JSON.
		processExcel(jsonData);
	}
};


// Leer el archivo según su tipo (CSV o Excel).
if (file.name.endsWith('.csv')) {
	reader.readAsText(file); // Leer archivo como texto.
} else {
	reader.readAsArrayBuffer(file); // Leer archivo como buffer.
}

// Función para procesar datos CSV.
function processCSV(csvData) {
    const rows = csvData.split('\n').map(row => row.split(',')); // Dividir el archivo CSV en filas y columnas.
    console.log('CSV Data:', rows); // Mostrar datos en consola para depuración.
    sendDataToServer(rows); // Enviar datos al servidor.
}

// Función para procesar datos Excel.
function processExcel(jsonData) {
    console.log('Excel Data:', jsonData); // Mostrar datos en consola para depuración.
    sendDataToServer(jsonData); // Enviar datos al servidor.
}


// Función para enviar datos al servidor mediante AJAX.
function sendDataToServer(data) {
	// Antes de enviar la solicitud AJAX.
	const loading = document.getElementById('loading_'+result['id_vacancias']);
	loading.style.display = 'block';

	$.ajax({
		url: 'upload_postulantes_ajax.php', // URL del script PHP que procesará los datos.
        method: 'POST',
        data: { fileData:JSON.stringify(data), // Datos del archivo en formato JSON.
				id_vacancias:id_vacancias, // ID de la vacancia.
				usuario_carga_id:usuario_carga_id, // ID del usuario.
				usuario_carga_nombre:usuario_carga_nombre, // Nombre del usuario.
				fileName: fileName // Nombre del archivo.
		},
        success: function (response) {
			loading.style.display = 'none'; // Ocultar el spinner de carga.
			
            try {
                // Asegúrarse de que la respuesta es un objeto JSON, intentar 
				//convertir la respuesta en JSON.
                const jsonResponse = typeof response === "string" ? JSON.parse(response) : response;
				
				if (jsonResponse.success) {
					console.log("Datos procesados correctamente:", jsonResponse.data);
					// Mostrar mensaje de éxito en el DOM.
					Swal.fire({
						title: "¡Importación Exitosa!",
						html: `${jsonResponse.message}`,
						confirmButtonText: "Ok"
					}).then((result) => {
						if (result.isConfirmed) {
							window.location.href = "vacancia_list.php";
						}
					});
                } else {
                    console.warn("Error en el servidor:", jsonResponse.message);
					// Mostrar mensaje de error del servidor en el DOM.
					Swal.fire({
						title: "¡Aviso Importante!",
						html: `${jsonResponse.message}`
					});
                }
            } catch (error) {
                console.error("Error procesando la respuesta del servidor:", error.message);
				
				// Mostrar error de procesamiento en el DOM.
				Swal.fire({
						title: "Error procesando la respuesta del servidor",
						html: `${error.message}`
				});
            }
		},
        error: function (xhr, status, error) {
			console.error("Error en la solicitud:", error);
			loading.style.display = 'none'; // Ocultar el spinner de carga.
			
			// Mostrar error de solicitud en el DOM.
			Swal.fire({
				title: "Error en la Solicitud",
				html: `${xhr.responseText || error}`
			});
        }
    });
}
		}
	}
	
	$('a[id="btn_importar_planilla1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "btn_importar_planilla1" + "_" + Runner.genId();
		
		// create object
		var button_btn_importar_planilla1 = new Runner.form.Button({
			id: this.id ,
			btnName: "btn_importar_planilla1"
		});
		
		// init
		button_btn_importar_planilla1.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


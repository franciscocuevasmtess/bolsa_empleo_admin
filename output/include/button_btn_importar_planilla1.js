Runner.buttonEvents["btn_importar_planilla1"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btn_importar_planilla1';
	
	if ( !pageObj.buttonEventBefore['btn_importar_planilla1'] ) {
		pageObj.buttonEventBefore['btn_importar_planilla1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
/*
//document.getElementById('processFile').addEventListener('click', function () {
    
	const fileInput = document.getElementById('fileInput');
    const file = fileInput.files[0];
	const id_vacancias = row.getFieldValue("id_vacancias"); //se obtiene id_vacancias desde el formulario.
	
	if (!file) {
		alert('Por favor, seleccione un archivo.' 
			+ 'fileInput ' + fileInput 
			+ ' file ' + file 
			+ ' id_vacancias ' + id_vacancias
			);
		return;
    }
	
	const reader = new FileReader();
    reader.onload = async function (e) {
        const fileData = e.target.result;

        if (file.name.endsWith('.csv')) {
            processCSV(fileData);
        } else {
            const data = new Uint8Array(fileData);
            const workbook = XLSX.read(data, { type: 'array' });
            const worksheet = workbook.Sheets[workbook.SheetNames[0]];
            const jsonData = XLSX.utils.sheet_to_json(worksheet, { header: 1 });
            processExcel(jsonData);
        }
    };

    if (file.name.endsWith('.csv')) {
        reader.readAsText(file);
    } else {
        reader.readAsArrayBuffer(file);
    }
//});

function processCSV(csvData) {
    const rows = csvData.split('\n').map(row => row.split(','));
    console.log('CSV Data:', rows);
    sendDataToServer(rows);
}

function processExcel(jsonData) {
    console.log('Excel Data:', jsonData);
    sendDataToServer(jsonData);
}

function sendDataToServer(data) {
	$.ajax({
		url: 'planillas_empleados_up_ajax3.php',
        method: 'POST',
        data: { fileData: JSON.stringify(data), 
				id_vacancias: id_vacancias 
			},
        success: function (response) {
            console.log("Respuesta desde el server " + response);
			
			document.getElementById('result').innerHTML = `
                <h3>Respuesta del servidor:</h3>
                <pre>${response.data}</pre>`;
			
			// Asegúrate de convertir el JSON a un objeto
			//const jsonResponse = JSON.parse(response);
			// Acceder al campo "message"
			//document.getElementById('result').innerHTML = `
			//	<h3>Respuesta del servidor:</h3>
			//	<pre>${jsonResponse.data}</pre>`;
			
		},
        error: function (xhr, status, error) {
            //console.error('Error:', error);
			document.getElementById('result').innerHTML = `
                <h3>Error en la solicitud:</h3>
                <pre>${error}</pre>`;
            console.error('Detalles del error:', xhr.responseText);
        }
    });
}
*/
		}
	}
	
	if ( !pageObj.buttonEventAfter['btn_importar_planilla1'] ) {
		pageObj.buttonEventAfter['btn_importar_planilla1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

// Referencia al input de archivo del formulario.
const fileInput = document.getElementById('fileInput');

// Obtener el archivo seleccionado por el usuario.
const file = fileInput.files[0];

// Obtener datos adicionales del formulario y el servidor.
const id_vacancias = row.getFieldValue("id_vacancias"); // ID de la vacancia (se obtiene desde el formulario).
const usuario_carga_id = result["id"]; // ID del usuario que realiza la carga (obtenido desde el servidor).
const usuario_carga_nombre = result["username"]; // Nombre del usuario que realiza la carga (obtenido desde el servidor).


// Validar si el usuario seleccionó un archivo.
if (!file) {
	//alert('Por favor, seleccione un archivo.');
	alert('Por favor, seleccione un archivo.'
		+' id_vacancias: '+id_vacancias
		+' usuario_carga_id: '+usuario_carga_id
		+' usuario_carga_nombre: '+usuario_carga_nombre
	);
	return; // Detener ejecución si no hay archivo seleccionado.
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
	
	// Mostrar el div de resultados.
    $("#result").hide(); // Ocultar resultados previos.
    $("#loading").show(); // Mostrar el spinner de carga.
	
	// Antes de enviar la solicitud AJAX.
	document.getElementById('loading').style.display = 'block';
	document.getElementById('result').innerHTML = ''; // Limpia resultados previos.

	$.ajax({
		url: 'upload_postulantes_ajax.php', // URL del script PHP que procesará los datos.
        method: 'POST',
        data: { fileData: JSON.stringify(data), // Datos del archivo en formato JSON.
				id_vacancias: id_vacancias, // ID de la vacancia.
				usuario_carga_id:usuario_carga_id, // ID del usuario.
				usuario_carga_nombre:usuario_carga_nombre // Nombre del usuario.
			},
        success: function (response) {
			$("#loading").hide(); // Ocultar el spinner de carga.
            $("#result").show(); // Mostrar los resultados.
			
            try {
                // Asegúrarse de que la respuesta es un objeto JSON, intentar 
				//convertir la respuesta en JSON.
                const jsonResponse = typeof response === "string" ? JSON.parse(response) : response;
				
				if (jsonResponse.success) {
					console.log("Datos procesados correctamente:", jsonResponse.data);
					// Mostrar mensaje de éxito en el DOM.
					$("#result").html(`<pre>${jsonResponse.message}</pre>`);
                } else {
                    console.warn("Error en el servidor:", jsonResponse.message);
					// Mostrar mensaje de error del servidor en el DOM.
					$("#result").html(`<pre>${jsonResponse.message}</pre>`);
                }
            } catch (error) {
                console.error("Error procesando la respuesta del servidor:", error.message);
				
				// Mostrar error de procesamiento en el DOM.
                document.getElementById('result').innerHTML = `
                    <h3>Error procesando la respuesta del servidor:</h3>
                    <pre>${error.message}</pre>`;
            }
		},
        error: function (xhr, status, error) {
			console.error("Error en la solicitud:", error);
			
			$("#loading").hide(); // Ocultar el spinner de carga.
            $("#result").show(); // Mostrar los resultados.
				
			// Mostrar error de solicitud en el DOM.
            document.getElementById('result').innerHTML = `
                <h3>Error en la solicitud:</h3>
                <pre>${xhr.responseText || error}</pre>`;
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


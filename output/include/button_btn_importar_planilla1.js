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
//document.getElementById('processFile').addEventListener('click', function () {
    
	const fileInput = document.getElementById('fileInput');
    const file = fileInput.files[0];
	const id_vacancias = row.getFieldValue("id_vacancias"); //se obtiene id_vacancias desde el formulario.
	const usuario_carga_id = result["id"]; //se obtiene desde el evento "Server" de este boton.
	const usuario_carga_nombre = result["username"]; //se obtiene desde el evento "Server" de este boton.
	//const usuario_carga_id = 1002;
	//const usuario_carga_nombre = 'aaaa';
	
	if (!file) {
		alert('Por favor, seleccione un archivo.\n' 
			+ 'fileInput ' + fileInput 
			+ ' file ' + file 
			+ ' id_vacancias ' + id_vacancias
			+ ' usuario_carga_id ' + usuario_carga_id
			+ ' usuario_carga_nombre ' + usuario_carga_nombre
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
	
	//const rows = csvData.split('\n').map(row => row.split(','));
	//const filteredData = rows.filter(row => row.some(value => value.trim() !== '')); // Filtrar filas vacías
	//console.log('CSV Data (filtered):', filteredData);
	//sendDataToServer(filteredData);
}

function processExcel(jsonData) {
    console.log('Excel Data:', jsonData);
    sendDataToServer(jsonData);
	
	//const filteredData = jsonData.filter(row => row.some(value => value.trim() !== '')); // Filtrar filas vacías
	//console.log('Excel Data (filtered):', filteredData);
	//sendDataToServer(filteredData);
}

function sendDataToServer(data) {
	$.ajax({
		url: 'planillas_empleados_up_ajax3.php',
        method: 'POST',
        data: { fileData: JSON.stringify(data), 
				id_vacancias: id_vacancias,
				usuario_carga_id:usuario_carga_id,
				usuario_carga_nombre:usuario_carga_nombre
			},
        success: function (response) {
            /*
			console.log("Respuesta desde el server " + response);
			
			document.getElementById('result').innerHTML = `
                <h3>Respuesta del servidor:</h3>
                <pre>${response.data}</pre>`;
			*/
			
			// Asegúrate de convertir el JSON a un objeto
			//const jsonResponse = JSON.parse(response);
			// Acceder al campo "message"
			//document.getElementById('result').innerHTML = `
			//	<h3>Respuesta del servidor:</h3>
			//	<pre>${jsonResponse.message}</pre>`;
			
			try {
                // Asegúrarse de que la respuesta es un objeto JSON
                const jsonResponse = typeof response === "string" ? JSON.parse(response) : response;

                if (jsonResponse.success) {
                    console.log("Datos procesados correctamente:", jsonResponse.data);
                    document.getElementById('result').innerHTML = `
                        <h3>Respuesta del servidor:</h3>
                        <pre>${JSON.stringify(jsonResponse.message, null, 2)}</pre>`;
                } else {
                    console.warn("Error en el servidor:", jsonResponse.message);
                    document.getElementById('result').innerHTML = `
                        <h3>Error del servidor:</h3>
                        <pre>${jsonResponse.message}</pre>`;
                }
            } catch (error) {
                console.error("Error procesando la respuesta del servidor:", error.message);
                document.getElementById('result').innerHTML = `
                    <h3>Error procesando la respuesta del servidor:</h3>
                    <pre>${error.message}</pre>`;
            }
			
		},
        error: function (xhr, status, error) {
			/*
            console.error("Error procesando la respuesta del servidor:", error);
			document.getElementById('result').innerHTML = `
                <h3>Error en la solicitud:</h3>
                <pre>${error}</pre>`;
            console.error('Detalles del error:', xhr.responseText);
			*/
			console.error("Error en la solicitud:", error);
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


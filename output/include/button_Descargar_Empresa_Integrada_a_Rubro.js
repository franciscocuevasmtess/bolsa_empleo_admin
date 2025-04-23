Runner.buttonEvents["Descargar_Empresa_Integrada_a_Rubro"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Descargar_Empresa_Integrada_a_Rubro';
	
	if ( !pageObj.buttonEventBefore['Descargar_Empresa_Integrada_a_Rubro'] ) {
		pageObj.buttonEventBefore['Descargar_Empresa_Integrada_a_Rubro'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Descargar_Empresa_Integrada_a_Rubro'] ) {
		pageObj.buttonEventAfter['Descargar_Empresa_Integrada_a_Rubro'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Realiza una solicitud AJAX para exportar el archivo Excel
$.ajax({
    url: "export_excel_confirmacion_integracion.php", // URL del script PHP que maneja la exportación
    method: "GET", // Método HTTP de la solicitud (GET)
    success: function(response) {
        if (response.status === "ok") { // Verifica si la respuesta es 'ok'
            window.location.href = response.file; // Si es exitosa, redirige al usuario para descargar el archivo
        } else {
            Swal.fire("Sin resultados", "No hay datos para exportar.", "info"); // Muestra un mensaje si no hay datos
        }
    },
    error: function() { // Función que se ejecuta si hay un error con la solicitud
        Swal.fire("Error", "No se pudo ejecutar la exportación.", "error");
    }
});
		}
	}
	
	$('a[id="Descargar_Empresa_Integrada_a_Rubro"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Descargar_Empresa_Integrada_a_Rubro" + "_" + Runner.genId();
		
		// create object
		var button_Descargar_Empresa_Integrada_a_Rubro = new Runner.form.Button({
			id: this.id ,
			btnName: "Descargar_Empresa_Integrada_a_Rubro"
		});
		
		// init
		button_Descargar_Empresa_Integrada_a_Rubro.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


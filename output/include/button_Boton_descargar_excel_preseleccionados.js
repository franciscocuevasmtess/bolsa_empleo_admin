Runner.buttonEvents["Boton_descargar_excel_preseleccionados"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Boton_descargar_excel_preseleccionados';
	
	if ( !pageObj.buttonEventBefore['Boton_descargar_excel_preseleccionados'] ) {
		pageObj.buttonEventBefore['Boton_descargar_excel_preseleccionados'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Hello";
ajax.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Boton_descargar_excel_preseleccionados'] ) {
		pageObj.buttonEventAfter['Boton_descargar_excel_preseleccionados'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="Boton_descargar_excel_preseleccionados"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Boton_descargar_excel_preseleccionados" + "_" + Runner.genId();
		
		// create object
		var button_Boton_descargar_excel_preseleccionados = new Runner.form.Button({
			id: this.id ,
			btnName: "Boton_descargar_excel_preseleccionados"
		});
		
		// init
		button_Boton_descargar_excel_preseleccionados.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


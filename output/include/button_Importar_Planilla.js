Runner.buttonEvents["Importar_Planilla"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Importar_Planilla';
	
	if ( !pageObj.buttonEventBefore['Importar_Planilla'] ) {
		pageObj.buttonEventBefore['Importar_Planilla'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Hello";
ajax.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Importar_Planilla'] ) {
		pageObj.buttonEventAfter['Importar_Planilla'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="Importar_Planilla"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Importar_Planilla" + "_" + Runner.genId();
		
		// create object
		var button_Importar_Planilla = new Runner.form.Button({
			id: this.id ,
			btnName: "Importar_Planilla"
		});
		
		// init
		button_Importar_Planilla.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


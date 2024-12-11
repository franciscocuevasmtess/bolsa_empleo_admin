Runner.buttonEvents["btn_importar_planilla"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btn_importar_planilla';
	
	if ( !pageObj.buttonEventBefore['btn_importar_planilla'] ) {
		pageObj.buttonEventBefore['btn_importar_planilla'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
//params["txt"] = "Hello";
//ajax.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;



//AQUI TAMBIEN SE PUEDE VALIDAR QUE SE ENVIEN DATOS PRIMERO
//SINO HAY NADA QUE NO PERMITA EL ENVIO
var clave = Runner.getControl(pageid, 'id_vacancias');
params["clave"] = clave;
//alert("id_vacancias " + clave);
//alert("id_vacancias " + clave.getValue());



		}
	}
	
	if ( !pageObj.buttonEventAfter['btn_importar_planilla'] ) {
		pageObj.buttonEventAfter['btn_importar_planilla'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
//var message = result["txt"] + " !!!";
//ajax.setMessage(message);

var message = result["clave"] + " !!!";
ajax.setMessage(message);
		}
	}
	
	$('a[id="btn_importar_planilla"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "btn_importar_planilla" + "_" + Runner.genId();
		
		// create object
		var button_btn_importar_planilla = new Runner.form.Button({
			id: this.id ,
			btnName: "btn_importar_planilla"
		});
		
		// init
		button_btn_importar_planilla.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


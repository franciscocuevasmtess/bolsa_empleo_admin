Runner.buttonEvents["btn_ver_contrasenha"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btn_ver_contrasenha';
	
	if ( !pageObj.buttonEventBefore['btn_ver_contrasenha'] ) {
		pageObj.buttonEventBefore['btn_ver_contrasenha'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
//// Put your code here.
//params["txt"] = "Hello";
//ajax.setMessage("Sending request to server...");
// // Uncomment the following line to prevent execution of "Server" and "Client After" events.
// // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['btn_ver_contrasenha'] ) {
		pageObj.buttonEventAfter['btn_ver_contrasenha'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
//// Put your code here.
//var message = result["txt"] + " !!!";
//ajax.setMessage(message);
		}
	}
	
	$('a[id="btn_ver_contrasenha"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "btn_ver_contrasenha" + "_" + Runner.genId();
		
		// create object
		var button_btn_ver_contrasenha = new Runner.form.Button({
			id: this.id ,
			btnName: "btn_ver_contrasenha"
		});
		
		// init
		button_btn_ver_contrasenha.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


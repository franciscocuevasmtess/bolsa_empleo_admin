Runner.buttonEvents["New_Button11"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button11';
	
	if ( !pageObj.buttonEventBefore['New_Button11'] ) {
		pageObj.buttonEventBefore['New_Button11'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Hello";
ajax.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button11'] ) {
		pageObj.buttonEventAfter['New_Button11'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="New_Button11"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button11" + "_" + Runner.genId();
		
		// create object
		var button_New_Button11 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button11"
		});
		
		// init
		button_New_Button11.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


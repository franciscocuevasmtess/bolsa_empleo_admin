Runner.buttonEvents["agg_postulante"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'agg_postulante';
	
	if ( !pageObj.buttonEventBefore['agg_postulante'] ) {
		pageObj.buttonEventBefore['agg_postulante'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
//// Put your code here.
//params["txt"] = "Hello";
//ajax.setMessage("Sending request to server...");
// // Uncomment the following line to prevent execution of "Server" and "Client After" events.
// // return false;


		}
	}
	
	if ( !pageObj.buttonEventAfter['agg_postulante'] ) {
		pageObj.buttonEventAfter['agg_postulante'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
//// Put your code here.
//var message = result["txt"] + " !!!";
//ajax.setMessage(message);

//window.location.href = "bolsa_users_popup_list.php";

Runner.displayPopup( {
  url: "bolsa_users_popup_list.php"
});

		}
	}
	
	$('a[id="agg_postulante"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "agg_postulante" + "_" + Runner.genId();
		
		// create object
		var button_agg_postulante = new Runner.form.Button({
			id: this.id ,
			btnName: "agg_postulante"
		});
		
		// init
		button_agg_postulante.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


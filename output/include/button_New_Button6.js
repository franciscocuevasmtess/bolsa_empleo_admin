Runner.buttonEvents["New_Button6"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button6';
	
	if ( !pageObj.buttonEventBefore['New_Button6'] ) {
		pageObj.buttonEventBefore['New_Button6'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button6'] ) {
		pageObj.buttonEventAfter['New_Button6'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="New_Button6"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button6" + "_" + Runner.genId();
		
		// create object
		var button_New_Button6 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button6"
		});
		
		// init
		button_New_Button6.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

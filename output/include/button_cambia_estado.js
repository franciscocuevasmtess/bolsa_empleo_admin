Runner.buttonEvents["cambia_estado"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'cambia_estado';
	
	if ( !pageObj.buttonEventBefore['cambia_estado'] ) {
		pageObj.buttonEventBefore['cambia_estado'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
var radios = document.getElementsByName('editList');

for (var i = 0, length = radios.length; i < length; i++) {
	if (radios[i].checked) {
		params["nuevo_estado"] = radios[i].value;
		// only one radio can be logically checked, don't check the rest
		break;
	}
}
		}
	}
	
	if ( !pageObj.buttonEventAfter['cambia_estado'] ) {
		pageObj.buttonEventAfter['cambia_estado'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="cambia_estado"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "cambia_estado" + "_" + Runner.genId();
		
		// create object
		var button_cambia_estado = new Runner.form.Button({
			id: this.id ,
			btnName: "cambia_estado"
		});
		
		// init
		button_cambia_estado.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


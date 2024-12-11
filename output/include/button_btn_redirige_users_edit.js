Runner.buttonEvents["btn_redirige_users_edit"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btn_redirige_users_edit';
	
	if ( !pageObj.buttonEventBefore['btn_redirige_users_edit'] ) {
		pageObj.buttonEventBefore['btn_redirige_users_edit'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
//params["txt"] = "Hello";
//ajax.setMessage("Sending request to server...");
// // Uncomment the following line to prevent execution of "Server" and "Client After" events.
// // return false;


var url='bolsa_users_edit.php?editid1='+row.getFieldValue("id");
var myWindow = location.replace(url);
		}
	}
	
	if ( !pageObj.buttonEventAfter['btn_redirige_users_edit'] ) {
		pageObj.buttonEventAfter['btn_redirige_users_edit'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
//var message = result["txt"] + " !!!";
//ajax.setMessage(message);
//alert("result" + result["cedula"]);
//window.location.href = "bolsa_users_edit.php?editid1=" + result["cedula"];


		}
	}
	
	$('a[id="btn_redirige_users_edit"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "btn_redirige_users_edit" + "_" + Runner.genId();
		
		// create object
		var button_btn_redirige_users_edit = new Runner.form.Button({
			id: this.id ,
			btnName: "btn_redirige_users_edit"
		});
		
		// init
		button_btn_redirige_users_edit.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


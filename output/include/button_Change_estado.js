Runner.buttonEvents["Change_estado"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Change_estado';
	
	if ( !pageObj.buttonEventBefore['Change_estado'] ) {
		pageObj.buttonEventBefore['Change_estado'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
var radios = document.getElementsByName('editList');

for (var i = 0, length = radios.length; i < length; i++) {
	if (radios[i].checked) {
		params["nuevo_estado"] = radios[i].value;
		// only one radio can be logically checked, don't check the rest
		break;
	}
}

if (!params["nuevo_estado"]) {
	Swal.fire({
		icon: "warning",
		title: "Seleccione Estado",
		text: "Por favor, selecciona un estado valido."
	});
	return false;
}
		}
	}
	
	if ( !pageObj.buttonEventAfter['Change_estado'] ) {
		pageObj.buttonEventAfter['Change_estado'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
Swal.fire("Se cambio el estado exitosamente!").then(function() {
    window.location.href = "vacancia_list.php";
});
		}
	}
	
	$('a[id="Change_estado"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Change_estado" + "_" + Runner.genId();
		
		// create object
		var button_Change_estado = new Runner.form.Button({
			id: this.id ,
			btnName: "Change_estado"
		});
		
		// init
		button_Change_estado.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


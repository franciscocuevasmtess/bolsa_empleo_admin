Runner.buttonEvents["cambia_estado2"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'cambia_estado2';
	
	if ( !pageObj.buttonEventBefore['cambia_estado2'] ) {
		pageObj.buttonEventBefore['cambia_estado2'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
var radios = document.getElementsByName('editList');

for (var i = 0, length = radios.length; i < length; i++) {
	if (radios[i].checked) {
		params["nuevo_estado"] = radios[i].value;
		// only one radio can be logically checked, don't check the rest
		break;
	}
}

if(!params["nuevo_estado"]) {
	Swal.fire({
		icon: "warning",
		title: "Seleccione Estado",
		text: "Por favor, selecciona un estado valido."
	});
	return false;
}
		}
	}
	
	if ( !pageObj.buttonEventAfter['cambia_estado2'] ) {
		pageObj.buttonEventAfter['cambia_estado2'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
Swal.fire("Se cambio el estado exitosamente!").then(function() {
    window.location.href = "vacancia_list.php";
});

		}
	}
	
	$('a[id="cambia_estado2"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "cambia_estado2" + "_" + Runner.genId();
		
		// create object
		var button_cambia_estado2 = new Runner.form.Button({
			id: this.id ,
			btnName: "cambia_estado2"
		});
		
		// init
		button_cambia_estado2.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


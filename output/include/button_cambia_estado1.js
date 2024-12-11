Runner.buttonEvents["cambia_estado1"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'cambia_estado1';
	
	if ( !pageObj.buttonEventBefore['cambia_estado1'] ) {
		pageObj.buttonEventBefore['cambia_estado1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
params["id_vacancias"] = row.getFieldValue("id_vacancias");
params["id_postulacion"] = row.getFieldValue("id_postulacion");
alert("id_vacancias " + params["id_vacancias"] + " id_postulacion " + params["id_postulacion"]);

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
	
	if ( !pageObj.buttonEventAfter['cambia_estado1'] ) {
		pageObj.buttonEventAfter['cambia_estado1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
Swal.fire("Se cambio el estado exitosamente!").then(function() {
    window.location.href = "vacancia_list.php";
});
		}
	}
	
	$('a[id="cambia_estado1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "cambia_estado1" + "_" + Runner.genId();
		
		// create object
		var button_cambia_estado1 = new Runner.form.Button({
			id: this.id ,
			btnName: "cambia_estado1"
		});
		
		// init
		button_cambia_estado1.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


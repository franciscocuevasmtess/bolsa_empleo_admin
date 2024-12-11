Runner.buttonEvents["btn_importar_planilla1"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btn_importar_planilla1';
	
	if ( !pageObj.buttonEventBefore['btn_importar_planilla1'] ) {
		pageObj.buttonEventBefore['btn_importar_planilla1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
/*
var id_vacancias = row.getFieldValue("id_vacancias");
window.location.href = 'postulacion_importar_planilla_list.php?q=(id_vacancias~contains~'+id_vacancias+')';
*/
		}
	}
	
	if ( !pageObj.buttonEventAfter['btn_importar_planilla1'] ) {
		pageObj.buttonEventAfter['btn_importar_planilla1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="btn_importar_planilla1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "btn_importar_planilla1" + "_" + Runner.genId();
		
		// create object
		var button_btn_importar_planilla1 = new Runner.form.Button({
			id: this.id ,
			btnName: "btn_importar_planilla1"
		});
		
		// init
		button_btn_importar_planilla1.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


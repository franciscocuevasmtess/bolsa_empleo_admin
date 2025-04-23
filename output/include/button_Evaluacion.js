Runner.buttonEvents["Evaluacion"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Evaluacion';
	
	if ( !pageObj.buttonEventBefore['Evaluacion'] ) {
		pageObj.buttonEventBefore['Evaluacion'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Evaluacion'] ) {
		pageObj.buttonEventAfter['Evaluacion'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
Runner.displayPopup({
  url: "archivo_add.php",
  width: "60%",       // o un valor fijo como "800px"
  height: "80%",      // o un valor fijo como "600px"
  modal: true,
  draggable: true,
  resizable: true,
 header: "Agregar Archivo",
  title: "Agregar Archivo",  // Título personalizado
  closeOnEscape: true,
  position: { my: "center top", at: "center top+50", of: window }
});
		}
	}
	
	$('a[id="Evaluacion"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Evaluacion" + "_" + Runner.genId();
		
		// create object
		var button_Evaluacion = new Runner.form.Button({
			id: this.id ,
			btnName: "Evaluacion"
		});
		
		// init
		button_Evaluacion.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


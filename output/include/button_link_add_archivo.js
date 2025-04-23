Runner.buttonEvents["link_add_archivo"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'link_add_archivo';
	
	if ( !pageObj.buttonEventBefore['link_add_archivo'] ) {
		pageObj.buttonEventBefore['link_add_archivo'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['link_add_archivo'] ) {
		pageObj.buttonEventAfter['link_add_archivo'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
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
	
	$('a[id="link_add_archivo"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "link_add_archivo" + "_" + Runner.genId();
		
		// create object
		var button_link_add_archivo = new Runner.form.Button({
			id: this.id ,
			btnName: "link_add_archivo"
		});
		
		// init
		button_link_add_archivo.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


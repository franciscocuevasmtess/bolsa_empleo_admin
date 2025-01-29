Runner.buttonEvents["agregar_postulante"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'agregar_postulante';
	
	if ( !pageObj.buttonEventBefore['agregar_postulante'] ) {
		pageObj.buttonEventBefore['agregar_postulante'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
/*
 * Este botón permite vincular un postulante a una oferta laboral específica.
 * 
 * Funcionamiento:
 * 1. Al confirmarse la acción en el cuadro de diálogo, se crea un registro en la tabla "seguimientos" con el estado "Preseleccionado".
 * 2. También se mantiene un historial de cambios en la misma tabla para rastrear el progreso del postulante.
 * 
 * Variables utilizadas:
 * - params["id_vacancias"]: Contiene el ID de la vacancia seleccionada para asociar al postulante.
 * - params["bandera"]: Indicador utilizado en el servidor para procesar la acción correspondiente.
 */


// Obtener el ID de la vacancia seleccionada desde la fila actual y almacenarlo en params.
params["id_vacancias"] = row.getFieldValue("id_vacancias");

// Habilitar el control antes de continuar con la ejecución.
ctrl.setEnabled();

// Mostrar un cuadro de diálogo de confirmación utilizando SweetAlert2.
Swal.fire({
	// Mensaje principal del cuadro de diálogo.
	title: "Agregar nuevo postulante a la oferta laboral? ",
	
	// Mostrar el botón de cancelación.
	showCancelButton: true,

	// Texto del botón de cancelar.
	cancelButtonText: "Cancelar",

	// Texto del botón de confirmación.
	confirmButtonText: "Confirmar"
}).then((result) => {
	// Si el usuario confirma la acción.
	if (result.isConfirmed) {
		// Establecer la bandera en 0, utilizada en el backend para procesar la acción.
		params["bandera"] = 0;
		
		// Enviar el formulario con los datos actualizados.
		submit();
	}
});

// Retorna false para evitar que la acción continúe automáticamente antes de la confirmación.
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['agregar_postulante'] ) {
		pageObj.buttonEventAfter['agregar_postulante'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

// Verificamos el estado de la bandera para determinar el resultado de la operación
if (result["bandera"] == 1) {
	// Si la bandera es 1, significa que el postulante se vinculó exitosamente
	Swal.fire("Se agrego el postulante: " 
					+ result["nombre_completo"] 
					+ " En la oferta: " 
					+ result["descripcion"] 
					+ " exitosamente!"
					//+ " sql: " + result["sql"] // Línea comentada, útil para depuración si se necesita
				).then(function() {
		window.location.href = "vacancia_list.php";
	});
} else if(result["bandera"] == 2){
	// Si la bandera es 2, significa que al postulante le faltan datos en su CV.
	Swal.fire("Faltan datos de CV del postulante, Verifique!");
} else {
	// Cualquier otro valor indica que la vacante está cerrada y no permite postulaciones.
	Swal.fire("No se puede agregar Postulante a una Oferta Laboral Cerrada!");
}
		}
	}
	
	$('a[id="agregar_postulante"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "agregar_postulante" + "_" + Runner.genId();
		
		// create object
		var button_agregar_postulante = new Runner.form.Button({
			id: this.id ,
			btnName: "agregar_postulante"
		});
		
		// init
		button_agregar_postulante.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


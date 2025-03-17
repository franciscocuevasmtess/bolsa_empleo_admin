<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterLogout"]=true;

		$this->events["BeforeLogin"]=true;

		$this->events["AfterSuccessfulLogin"]=true;



//	onscreen events
		$this->events["bolsa_empleo_vacancia_snippet1"] = true;
		$this->events["bolsa_empleo_vacancia_snippet2"] = true;
		$this->events["bolsa_empleo_bolsa_users_popup_snippet"] = true;
		$this->events["bolsa_empleo_vacancia_snippet3"] = true;
		$this->events["bolsa_empleo_vacancia_snippet4"] = true;
		$this->events["bolsa_empleo_postulacion_preseleccionado_snippet"] = true;
		$this->events["bolsa_empleo_vacancia_snippet7"] = true;
		$this->events["bolsa_empleo_postulacion_preseleccionado_snippet1"] = true;
		$this->events["bolsa_empleo_postulacion_preseleccionado_snippet2"] = true;



		}

//	handlers

		
		
		
		
		
		
		
		
				// After Logout
function AfterLogout($username)
{

		header("Location: login.php");
exit; // Asegúrate de terminar el script después de la redirección
;		
} // function AfterLogout

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
				// Before login
function BeforeLogin(&$username, &$password, &$message, $pageObject, &$values)
{

		//**********  Check if specific record exists  ************
$rs = DB::Query("SELECT bolsa_empleo.gestores_users.username,
														bolsa_empleo.gestores_users.active,
														bolsa_empleo.gestores_users.nrodocumento,
														bolsa_empleo.gestores_users.id
										FROM bolsa_empleo.gestores_users 
										WHERE bolsa_empleo.gestores_users.active = 1 
										AND bolsa_empleo.gestores_users.username = '" . $username 
										. "' LIMIT 1");
$data = $rs->fetchAssoc();
if (!$data) {
	$message = "Usuario INACTIVO, por favor contactarse a sistemas@mtess.gov.py";
	return false;
}
return true;

;		
} // function BeforeLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		header("Location: vacancia_list.php");
exit();
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_bolsa_empleo_vacancia_snippet1(&$params)
	{
	echo '<script src="jquery.masknumber.min.js"></script>';
	;
}
	function event_bolsa_empleo_vacancia_snippet2(&$params)
	{
	echo '<script src="jquery.masknumber.js"></script>';
	;
}
	function event_bolsa_empleo_bolsa_users_popup_snippet(&$params)
	{
	echo "<input type='checkbox' name='user_checkbox' value='1'>";

	;
}
	function event_bolsa_empleo_vacancia_snippet3(&$params)
	{
	echo '
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Seleccionar el elemento que contiene el texto "Preseleccionados"
        const spanElement = document.querySelector("#bsproceed_postulacion_preseleccionado5");

        if (spanElement) {
            // Crear un nuevo nodo de texto
            const newText = document.createTextNode(" (Nuevo texto)");

            // Agregar el nuevo texto al final del contenido existente
            spanElement.appendChild(newText);
        }
    });
</script>
';

	;
}
	function event_bolsa_empleo_vacancia_snippet4(&$params)
	{
	echo '<script src="xlsx.full.min.js"></script>';
	;
}
	function event_bolsa_empleo_postulacion_preseleccionado_snippet(&$params)
	{
	echo '
<input type="file" id="fileInput" name="fileInput" accept=".csv, .xlsx, .xls">
<br>
<div id="loading" name="loading" style="display: none; text-align: center; margin-top: 20px;">
    <p>Procesando, por favor espere...</p>
    <div class="spinner"></div>
</div>
';
	;
}
	function event_bolsa_empleo_vacancia_snippet7(&$params)
	{
	// Put your code here.
echo '
<style>
    .custom-buttons-container {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 10px;
    }

    .custom-button {
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .custom-button:hover {
        background-color: #0056b3;
    }

    .custom-button:disabled {
        background-color: #ccc;
        cursor: not-allowed;
    }
</style>

<div class="custom-buttons-container">
    <!-- Botón Activar Vacancia -->
    <button 
        id="boton_activar_vacancia_' . $data['id_vacancias'] . '" 
        class="custom-button"
        onclick="activarVacancia(' . $data['id_vacancias'] . ')"
    >
        Activar Vacancia
    </button>

    <!-- Botón Cerrar Vacancia -->
    <button 
        id="boton_cerrar_vacancia_' . $data['id_vacancias'] . '" 
        class="custom-button"
        onclick="cerrarVacancia(' . $data['id_vacancias'] . ')"
    >
        Cerrar Vacancia
    </button>
</div>

<script>
    // Función para manejar el botón "Activar Vacancia"
    function activarVacancia(idVacancia) {
        if (confirm("¿Está seguro que desea activar esta vacancia?")) {
            // Aquí puedes realizar una llamada AJAX o redirigir
            alert("Vacancia activada: " + idVacancia);
            // Código adicional para tu lógica
        }
    }

    // Función para manejar el botón "Cerrar Vacancia"
    function cerrarVacancia(idVacancia) {
        if (confirm("¿Está seguro que desea cerrar esta vacancia?")) {
            // Aquí puedes realizar una llamada AJAX o redirigir
            alert("Vacancia cerrada: " + idVacancia);
            // Código adicional para tu lógica
        }
    }
</script>
';

	;
}
	function event_bolsa_empleo_postulacion_preseleccionado_snippet1(&$params)
	{
	$value = '
<style>
    .custom-file-input {
        border: 2px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        width: 100%;
        max-width: 100%;
        font-family: Arial, sans-serif;
        font-size: 14px;
        color: #666;
        cursor: pointer;
        transition: border-color 0.3s, background-color 0.3s;
    }
	
	.custom-file-input:hover {
        border-color: #007bff;
        background-color: #f8f9fa;
    }
	
	.custom-file-input:focus {
        outline: none;
        border-color: #0056b3;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }
</style>
<input type="file" accept=".csv, .xlsx, .xls" class="custom-file-input" />
';
	;
}
	function event_bolsa_empleo_postulacion_preseleccionado_snippet2(&$params)
	{
	/*
echo '
<style>
    .custom-file-input {
        border: 2px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        width: 100%;
        max-width: 100%;
        font-family: Arial, sans-serif;
        font-size: 14px;
        color: #666;
        cursor: pointer;
        transition: border-color 0.3s, background-color 0.3s;
    }
	
	.custom-file-input:hover {
        border-color: #007bff;
        background-color: #f8f9fa;
    }
	
	.custom-file-input:focus {
        outline: none;
        border-color: #0056b3;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }
	
	.spinner {
        width: 30px;
        height: 30px;
        border: 4px solid #ccc;
        border-top: 4px solid #007bff;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin: auto;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }
</style>
<input type="file" 
id="fileInputPreseleccionado" 
name="fileInputPreseleccionado" 
accept=".csv, .xlsx, .xls" class="custom-file-input" />
<br />
<div id="loadingPreseleccionado" 
    name="loadingPreseleccionado" 
    style="display: none; text-align: center; margin-top: 20px;">
    <p>Procesando, por favor espere...</p>
    <div class="spinner"></div>
</div>
';
*/
//$data = $pageObject ->getMasterRecord();
//$sql = "SELECT id_estado_vacancia FROM bolsa_empleo.vacancia WHERE id_vacancias = " . $data["id_vacancias"];

echo '<p>---'.$data["id_vacancias"].'---</p>';
	;
}




}
?>

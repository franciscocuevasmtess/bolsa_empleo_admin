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
		$this->events["bolsa_empleo_vacancia_snippet"] = true;
		$this->events["bolsa_empleo_vacancia_snippet1"] = true;
		$this->events["bolsa_empleo_vacancia_snippet2"] = true;
		$this->events["bolsa_empleo_bolsa_users_popup_snippet"] = true;
		$this->events["bolsa_empleo_vacancia_snippet3"] = true;
		$this->events["bolsa_empleo_vacancia_snippet4"] = true;



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
	function event_bolsa_empleo_vacancia_snippet(&$params)
	{
	//echo '<script src="jquery.masknumber.min.js"></script>';
	;
}
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
	// Put your code here.
//echo "Your message";
echo "
<input type='checkbox' name='user_checkbox' value='1'>
";
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
	// Put your code here.
//echo "Your message";
echo '<script src="xlsx.full.min.js"></script>';
	;
}




}
?>

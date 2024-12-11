<?php 
	@ini_set("display_errors","1");
	@ini_set("display_startup_errors","1");
	
	require_once("include/dbcommon.php");
	add_nocache_headers();

	function validatePassword($password) {
		// Lista de contraseñas comunes
		$commonPasswords = ["123456", "password", "qwerty", "admin", "letmein", "123456789", "iloveyou"];

		// Verificar longitud mínima
		if (strlen($password) < 8) {
			return "La contraseña debe tener al menos 8 caracteres.";
		}

		// Verificar si contiene una letra mayúscula
		if (!preg_match('/[A-Z]/', $password)) {
			return "La contraseña debe contener al menos una letra mayúscula.";
		}

		// Verificar si contiene una letra minúscula
		if (!preg_match('/[a-z]/', $password)) {
			return "La contraseña debe contener al menos una letra minúscula.";
		}

		// Verificar si contiene un número
		if (!preg_match('/[0-9]/', $password)) {
			return "La contraseña debe contener al menos un número.";
		}

		// Verificar si contiene un carácter especial
		if (!preg_match('/[!@#\$%\^&\*]/', $password)) {
			return "La contraseña debe contener al menos un carácter especial (Ejemplo: !@#$%^&*).";
		}

		// Verificar si la contraseña es demasiado común
		if (in_array(strtolower($password), $commonPasswords)) {
			return "Esta contraseña es demasiado común. Elige una contraseña más segura.";
		}

		return true;  // Si pasa todas las validaciones
	}
	
	$id = $_POST["id"];
	$clave = $_POST["clave"];
	$email = $_POST["email"];
	//$phone = $_POST["phone"];
	//$personaid = $_POST["personaid"];
	$validationResult = validatePassword($clave);

	if ($validationResult !== true) {
		// La validación falló
		$success = false;
		$message = $validationResult;
	} else {
		// La validación fue exitosa, la contraseña es segura
		$update_users = "UPDATE bolsa_empleo.bolsa_users 
							SET clave = '$clave',
								email = '$email' 
							WHERE id = '$id'";
		$result_users = db_query($update_users, $conn);

		//$update_phone = "UPDATE eportal.persons_phones 
		//					SET phone = '$phone' 
		//					WHERE person_id = '$personaid'";
		//$result_update_phone = db_query($update_phone, $conn);
		
		//if ($result_users && $result_update_phone) {
		if ($result_users) {
			$success = true;
			$message = 'Se actualizo exitosamente la contraseña!';
		} else {
			$success = false;
			$message = 'No se actualizo la contraseña';
		}
	}
	
	echo json_encode([
		'success' => $success, 
		'message' => $message
	]);
?>
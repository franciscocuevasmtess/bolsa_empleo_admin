<?php
    if (isset($_FILES['file'])) {
        $archivo = $_FILES['file'];
        //move_uploaded_file($archivo['tmp_name'], 'ruta/destino/' . $archivo['name']);
        sleep(10); // Simulación de espera (10 segundos)
        //echo "Archivo subido exitosamente";

        // Respuesta del servidor
        echo "Archivo procesado exitosamente. Nombre: " . $archivo['name'];
    } else {
        echo "No se recibió ningún archivo";
    }
    
?>
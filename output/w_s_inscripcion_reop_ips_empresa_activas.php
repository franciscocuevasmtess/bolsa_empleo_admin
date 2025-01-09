<?php
    @ini_set('memory_limit', '924M');
    @ini_set('max_execution_time', 1600000); //6 minutos
    @ini_set("display_errors", "1");
    @ini_set("display_startup_errors", "1");
    header('Content-Type: text/html; charset=utf-8');
    $edad = date("Y");

    echo "Realizando conexióna<br>";
    echo "Inicializando parámetros<br>";
    $star = date("Y-m-d H:i:s");

    $link = pg_Connect("dbname=eportal host=192.168.70.186 user=postgres password=LA CONTRASEÑA");
    echo "Realizando conexióna<br>";

    //INICIA PREGUNTA SI EXISTE LA EMPRESA EN REOP 
    $consulta_empresa_activas_ips = "SELECT DISTINCT on (ws_ips.ipsporfecha.nrorucdigv)
                                            ws_ips.ipsporfecha.nrorucdigv,
                                            ws_ips.ipsporfecha.fec_inscri,
                                            ws_ips.ipsporfecha.ind_estemp,
                                            ws_ips.ipsporfecha.des_actpri,
                                            ws_ips.ipsporfecha.nro_patron,
                                            ws_ips.ipsporfecha.des_emplea,
                                            ws_ips.ipsporfecha.fec_iniact,
                                            ws_ips.ipsporfecha.telefono,
                                            ws_ips.ipsporfecha.email,
                                            ws_ips.actividad_empresa.tipo,
                                            eportal.empresas.document,
                                            substring(regexp_replace( ws_ips.ipsporfecha.nrorucdigv, '\s+', '', 'g') FROM '^[^-\s]+') AS numero_antes_guion -- solo eliminar espacios
                                        FROM ws_ips.ipsporfecha
                                            LEFT JOIN eportal.empresas 
                                                ON substring(regexp_replace( ws_ips.ipsporfecha.nrorucdigv, '\s+', '', 'g') FROM '^[^-\s]+') = substring(regexp_replace( eportal.empresas.document, '\s+', '', 'g') FROM '^[^-\s]+')
                                            INNER JOIN ws_ips.vista_actividad_desglos 
                                                ON ws_ips.ipsporfecha.id_ips_por_fecha = ws_ips.vista_actividad_desglos.id_ips_por_fecha
                                            INNER JOIN ws_ips.actividad_empresa 
                                                ON ws_ips.vista_actividad_desglos.codigo = ws_ips.actividad_empresa.cod_actividad
                                        WHERE (ws_ips.ipsporfecha.ind_estemp = 'AC' or ws_ips.ipsporfecha.ind_estemp = 'IT' ) AND  ws_ips.ipsporfecha.fec_inscri>= '1957-07-01'
                                        AND ws_ips.ipsporfecha.email LIKE '%@%'
                                        AND ws_ips.actividad_empresa.tipo = 'EMPRESA'
                                        AND ws_ips.ipsporfecha.nrorucdigv <> ''
                                        AND eportal.empresas.document IS NULL 
                                        ORDER BY ws_ips.ipsporfecha.nrorucdigv ASC,
                                                    ws_ips.ipsporfecha.fec_inscri ASC";
    $resultado_de_empresas_inexistente_reop = pg_query($consulta_empresa_activas_ips) or die($error = 'La consulta falló: ' . pg_last_error());
    $filas_afectados = pg_num_rows ($resultado_de_empresas_inexistente_reop);  
    echo "Cantidad de afectados encontrados: ". $filas_afectados." <br>"; 
    while ($row_empresa = pg_fetch_array($resultado_de_empresas_inexistente_reop)) {
        echo "Realizando insert de empresa<br> ";
        print_r( $row_empresa);

        $iscripcion = "SELECT inscripcion_patronal.contenedor_inscripcion.nro_patronal_ips
                        FROM inscripcion_patronal.contenedor_inscripcion
                        WHERE inscripcion_patronal.contenedor_inscripcion.estado = 2 
                        AND substring(regexp_replace( inscripcion_patronal.contenedor_inscripcion.ruc, '\s+', '', 'g') FROM '^[^-\s]+') = '" .$row_empresa['numero_antes_guion']. "'
                        LIMIT 1";

        $consulta_iscripcion = pg_query($iscripcion);
        $data_consulta_iscripcion = pg_fetch_array($consulta_iscripcion);
        echo "Datos de la empresa patronal ips: <br>";
        print_r($iscripcion);

        $inscripcion = 0;

        if ($data_consulta_iscripcion) {
            $inscripcion = 1;
        }

        if ( $inscripcion == 1) {
            echo "existe patronal ruc <br>";
        } else {
            $insertar_empresa_activa = "INSERT INTO eportal.empresas(document,
                                                                        document_type,
                                                                        type,
                                                                        legal,
                                                                        fantasy,
                                                                        origen_dato) 
                                            VALUES ('".pg_escape_string($row_empresa["nrorucdigv"])."',
                                                    6,
                                                    32,
                                                    '".pg_escape_string($row_empresa["des_emplea"])."',
                                                    '".pg_escape_string($row_empresa["des_emplea"])."',2)RETURNING id;";
            $rxempresa = pg_exec($link, $insertar_empresa_activa);
            $rxempresarow = pg_fetch_array($rxempresa);
            $id_empresa_insertada = $rxempresarow['id'];
            echo "Realizando insert de empresa<br> ";
            print_r( $insertar_empresa_activa);
            
            $strSQLExists = "select max(nro_patronal) from eportal.empresas_sucursales";
            $rsExists= pg_exec($link, $strSQLExists);
            $data = pg_fetch_array($rsExists);
            echo "Realizando insert de patronal<br> ";
            print_r( $data);
            if ($data) {
                $valormaximonropatronal = $data['max'] + 1;
            }
            
            ////////inserta empresa sucursal MATRIZ
            $inserta_sucursal = "INSERT INTO eportal.empresas_sucursales (empresa_id,
                                                                            name,
                                                                            type,
                                                                            ruc,
                                                                            nro_patronal,
                                                                            fantasy,
                                                                            fecha_inscrip,
                                                                            nro_patronal_ips,
                                                                            activ_principal,
                                                                            tel,
                                                                            email,
                                                                            id_tipo_inscripcion,
                                                                            origen_dato) 
                                    VALUES ('".pg_escape_string($id_empresa_insertada)."',
                                            '".pg_escape_string($row_empresa["des_emplea"])."',
                                            1,
                                            '".pg_escape_string($row_empresa["nrorucdigv"])."',
                                            '".pg_escape_string($valormaximonropatronal)."',
                                            '".pg_escape_string($row_empresa["des_emplea"])."',
                                            now(),
                                            '".pg_escape_string($row_empresa["nro_patron"])."',
                                            '".pg_escape_string($row_empresa["des_actpri"])."',
                                            '".pg_escape_string($row_empresa["telefono"])."',
                                            '".pg_escape_string($row_empresa["email"])."',
                                            6,
                                            2) RETURNING id;";
            $rxempresasucursal = pg_exec($link,$inserta_sucursal);
            $rxempresasucursalrow = pg_fetch_array($rxempresasucursal);
            $id_empresasucursal_insertada = $rxempresasucursalrow['id'];
            
            echo "Realizando insert de empresa sucursal<br> ";
            print_r( $inserta_sucursal);
            ///////////////////////////////
            
            $empresa_nueva = "SELECT eportal.empresas_sucursales.nro_patronal, 
                                        eportal.empresas_sucursales.origen_dato, 
                                        eportal.empresas_sucursales.email, 
                                        eportal.empresas_sucursales.ruc, 
                                        eportal.empresas_sucursales.id,
                                        eportal.empresas_sucursales.fecha_inscrip,
                                        eportal.empresas_sucursales.name
                                FROM eportal.empresas_sucursales
                                WHERE eportal.empresas_sucursales.id = '".$id_empresasucursal_insertada."'  
                                AND eportal.empresas_sucursales.origen_dato = 2  
                                AND date(eportal.empresas_sucursales.fecha_inscrip) = date(now()) 
                                limit 1";
            $resul_empresa_nueva = pg_exec($link,$empresa_nueva);
            $row_resul_empresa_nueva = pg_fetch_array($resul_empresa_nueva);
            
            
            //// INSERTA SITUACION DE EMPRESA
            $cambio_situacion_empresa = "INSERT INTO eportal.cambio_situacion_empresa (situacion_ant,
                                                                                        fecha_cambio,
                                                                                        situacion_act,
                                                                                        nro_patronal,
                                                                                        nombre_usuario_cambio) 
                                            VALUES (3,
                                                    now(),
                                                    3,
                                                    '".pg_escape_string($row_resul_empresa_nueva["nro_patronal"])."',
                                                    'WS SISTEMA IPS')";
            pg_exec($link,$cambio_situacion_empresa);

            echo "Realizando insert de empresa situacion<br> ";
            print_r( $cambio_situacion_empresa);
            /*   
                //generar certificado laboral
                $insert_certificado_laboral="INSERT INTO 
                cert_laboral.cert_cumplimiento
                (nropatronal,
                estado,
                estado_pago,
                fecha_pedido,
                fecha_vencimiento,
                fecha_aprobacion) 
                VALUES ('".$row_resul_empresa_nueva["nro_patronal"]."',
                '1',
                '5',
                now(),
                CURRENT_DATE + INTERVAL '3 month',
                now()) ;";
                pg_exec($link,$insert_certificado_laboral);

                echo "Realizando insert de empresa certificado<br> ";
                print_r( $insert_certificado_laboral);
            */

            //generar constancia de inscripcion
            $insert_constancia_inscripcion = "INSERT INTO inscripcion_patronal.constancia (nro_patronal, ruc, estado) 
                                                VALUES ('".$row_resul_empresa_nueva["nro_patronal"]."','"
                                                            .$row_resul_empresa_nueva["ruc"]."','P');";
            pg_exec($link, $insert_constancia_inscripcion);
            
            
            ////////////////////////////
            $consulta_de_usuario = "SELECT nro_patronal
                                    FROM public.users_reop 
                                    WHERE nro_patronal = '".$row_resul_empresa_nueva["nro_patronal"]."' 
                                    limit 1";
            $usuario_consulta = pg_exec($link, $consulta_de_usuario);
            $data_usuario = pg_fetch_array($usuario_consulta);
            echo "Realizando insert de patronal<br> ";
            print_r($data_usuario);
            if (!$data_usuario) {
                //////////////////inserta usuario patronal
                $insusuario_patronal = "INSERT INTO public.users_reop (email,
                                                                        contrasenha,
                                                                        active,
                                                                        fecha_alta,
                                                                        nivel,
                                                                        usuario,
                                                                        nro_patronal)
                                            VALUES('".pg_escape_string($row_resul_empresa_nueva["email"])."',
                                                    crypt('".$row_resul_empresa_nueva["nro_patronal"]."' || '-' || '".pg_escape_string($row_resul_empresa_nueva["fecha_inscrip"])."', gen_salt('bf', 8)),
                                                    1,
                                                    now(),
                                                    '0',
                                                    'admin',
                                                    '".$row_resul_empresa_nueva["nro_patronal"]."')RETURNING idacceso;";
                $insusuario_patronalinsert = pg_exec($link, $insusuario_patronal);
                $insusuario_patronalrow = pg_fetch_array($insusuario_patronalinsert);
                $idacceso = $insusuario_patronalrow['idacceso'];
                
                $consulta_de_usuarioemail = "SELECT email,
                                                    contrasenha,
                                                    active,
                                                    fecha_alta,
                                                    nivel,
                                                    usuario,
                                                    nro_patronal
                                                FROM public.users_reop 
                                                WHERE idacceso = '".$idacceso."' 
                                                limit 1";
                $usuario_consultaemail = pg_exec($link,$consulta_de_usuarioemail);
                $data_usuario_email = pg_fetch_array($usuario_consultaemail);
                // Inicializa el contenido del mensaje de correo con una tabla HTML
                $consulta_avilitacion = "SELECT ws_ips.emple_ips_envio_correo.patronal, 
                                                ws_ips.emple_ips_envio_correo.email, 
                                                ws_ips.emple_ips_envio_correo.ruc
                                            FROM ws_ips.emple_ips_envio_correo
                                            WHERE ws_ips.emple_ips_envio_correo.patronal = '". $data_usuario_email["nro_patronal"] ."' 
                                            AND ws_ips.emple_ips_envio_correo.email = '" . $data_usuario_email["email"] . "'";
                $resul_consulta_avilitacion = pg_exec($link, $consulta_avilitacion);
                $data_consulta_avilitacion = pg_fetch_array($resul_consulta_avilitacion);

                if (!$data_consulta_avilitacion) {
                    $mensaje = "<html xmlns= 'http://www.w3.org/1999/xhtml'>
                                    <head>
                                        <meta charset='utf-8' />
                                        <title>REOP(Registro Obrero Patronal - MTESS)</title>
                                        <link href= 'https://fonts.googleapis.com/css?family= Roboto' rel='=stylesheet'>
                                        <style type='text/css'>
                                            img {
                                                width: 100%;
                                            }
                                            h1, h2, h3 {
                                                color: #231f20;
                                            }
                                            a {
                                                color: #231f20; 
                                                text-decoration: none;
                                            }
                                            p {
                                                color: #000000; 
                                                text-decoration: none;
                                            }
                                            .mtess-text {
                                                color: #e20613;
                                            }
                                            .contenido {
                                                font-family: 'Lato', sans-serif;
                                                width: 600px;
                                                height: auto;
                                                margin-left: auto;
                                                margin-right: auto;
                                                text-align: justify;
                                                background-color:#ffffff;
                                                padding: 10px 40px;
                                                border-top-left-radius: 10px;
                                                border-top-right-radius: 10px;
                                            }
                                            .contenedor{
                                                background-color: #e20613;
                                                padding: 20px;
                                            }
                                            .cabecera {
                                                background-color: #ffffff;
                                                padding: 8px 0;
                                                text-align: center;
                                            }
                                            .imagen {
                                                height: 250px;
                                                overflow: hidden;
                                                border-radius: 2px;
                                            }
                                            .texto {
                                                font-size: 14px;
                                                color: #000000;
                                                text-align: justify;
                                            }
                                            .cta {
                                                background-color: #efac00;
                                                text-decoration: none;
                                                padding: 10px 60px;
                                                color: #000000;
                                                font-weight: bold;
                                                transition: background-color 0.5s ease;
                                            }
                                            .cta:hover {
                                                background-color: #231f20;
                                                color: #000000;
                                            }
                                            .cont_cta {
                                                width: 100%;
                                                text-align: center;
                                                margin-top: 20px;
                                                margin-bottom: 20px;
                                            }
                                            .pie {
                                                background-color: #231f20;
                                                color: #000000;
                                                font-size: 12px;
                                                text-align: center;
                                                padding: 10px 0;
                                                overflow: hidden;
                                                width: 680px;
                                                margin: 0 auto;
                                                border-bottom-left-radius: 10px;
                                                border-bottom-right-radius: 10px;
                                            }
                                            .soicon {
                                                width: 32px;
                                                float: left;
                                                padding: 2px;
                                            }
                                            .social {
                                                overflow: hidden;
                                                width: 108px;
                                                margin-left: auto;
                                                margin-right: auto;
                                            }
                                            .line {
                                                width: 95%;
                                                height: 1px;
                                                background-color: #000000;
                                                margin: 5px auto;
                                            }
                                            .titulo-tr {
                                                background-color: #ffffff;
                                                color: #000000;
                                                font-weight: normal;
                                                min-width:150px;
                                                font-size: 14px;
                                            }
                                            .contenido-tr {
                                                background-color: #ffffff;
                                                color:#000000;
                                                padding: 0 10px;
                                                width: 80%;
                                                font-size: 12px;
                                            }
                                            .td-text-value {
                                                background-color: #ffffff;
                                                color:#000000;
                                                font-size: 12px;
                                            }
                                            .td-text-label {
                                                background-color: #ffffff;
                                                color:#000000;
                                                font-size: 12px;
                                                font-weight: bold
                                            }
                                            .titulo-t {
                                                background-color: #231f20;
                                                margin-left: auto;
                                                margin-right: auto;
                                                width: 99%;
                                                text-align: center;
                                                color: #fff;
                                                padding: 5px 10px;
                                            }
                                            .contact-info, .contact-info:visited, .contact-info:hover, .contact-info:link,
                                            .contact-info > a{
                                                color:#FFAD00!important;
                                                text-decoration: none;
                                            }
                                            table, tr, td, th {
                                                border: 1px solid #ccc;
                                                border-collapse: collapse;
                                                line-height: 2.1;
                                            }
                                        </style>
                                    </head>
                                    <body>
                                        <div class='contenedor'>
                                            <div class='contenido'>";
                    
                    $mensaje .= "<div class='cabecera'> 
                                    <a href=\" https://www.mtess.gov.py\"  aria-label=\" Enlace a página principal\" >
                                        <picture>
                                            <img class=\" image-responsive\"  src=\"https://regobpat.mtess.gov.py/dbmt/output/images/logoestirado_small.png\"  alt=\" Logo de Ministerio de Trabajo, Empleo y Seguridad Social\"style='width: 400px; height: auto' >
                                        </picture>
                                    </a>
                                    <h3 style='margin: 20px 0px 0px 0px'> INSCRIPCIÓN PATRONAL AUTOMATICA </h3>
                                </div>
                                <br/>
                                <p>Señor/res:".pg_escape_string($row_resul_empresa_nueva["name"])."</p>
                                <p>El Ministerio de Trabajo, Empleo y Seguridad Social comunica su inscripción como empleador en el Registro Obrero Patronal.</p>
                                <p>Para acceder al Sistema REOP y proveer información del empleador ingrese aquí:(https://regobpat.mtess.gov.py/dbmt/output/login.php).</p>
                                <table style='width:100%;max-width:600px;border=1'>
                                    <tbody>
                                        <tr>
                                            <td class='td-text-label'>
                                            Nombre de usuario:
                                            </td>
                                            <td  class='td-text-value' style='width: 80%'>
                                            admin
                                            </td>
                                        </tr>
                                        <tr>    
                                            <td class='td-text-label'>
                                            Nro. de Patronal:
                                            </td>
                                            <td  class='td-text-value' style='width: 80%'>
                                            ".$row_resul_empresa_nueva["nro_patronal"]."
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='td-text-label'>
                                            Contraseña:
                                            </td>
                                            <td  class='td-text-value' style='width: 80%'>
                                            ".pg_escape_string($data_usuario_email["contrasenha"])."
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>";

                    $mensaje .= "<p style='text-align:justify;font-size:13px;color:red'>
                                    Instamos a actualizar por medio del sistema REOP los datos del empleador en un plazo de 30 días.<br/>
                                    </p>
                                    <p style='text-align:center;font-size:12px;font-color:black'>
                                        <small>
                                            Atentamente,.<br/>
                                        </small>
                                        <small>
                                            DIRECCION DE REGISTRO OBRERO PATRONAL<br/>
                                        </small>
                                        <small>
                                            TEL. 021 7290100 Int. 554<br/>
                                        </small>
                                        <small>
                                            WhatsApp: 0986790101 <br/>
                                        </small>
                                        <small>
                                            reop@mtess.gov.py<br/>
                                        </small>
                                    </p>
                                </div>
                                </div>
                            </body>
                            </html>";

                    // Correo de destino
                    //$para = 'gonzalezvillalba1991@gmail.com';
                    $para = $data_usuario_email["email"];
                    // Asunto del correo
                    $asunto = 'INSCRIPCIÓN PATRONAL AUTOMATICA';
                    //CABECERA CON HTML
                    $cabeceras = "". "\r\n";
                    
                    // Cabeceras del correo
                    $cabeceras = "MIME-Version: 1.0" . "\r\n";
                    $cabeceras .= "Content-Type: text/html; charset=utf-8" . "\r\n";
                    $cabeceras .= "From: reop@mtess.gov.py" . "\r\n" .
                                    "Reply-To: reop@mtess.gov.py" . "\r\n" .
                                    "X-Mailer: PHP/" . phpversion();

                    // Envía el correo
                    if (mail($para, $asunto, $mensaje, $cabeceras)) {
                        $sql12ie = "INSERT INTO ws_ips.emple_ips_envio_correo (patronal,
                                                                                ruc,
                                                                                email,
                                                                                nombre,
                                                                                descripcion,
                                                                                fecha_emision) 
                                    VALUES ('".pg_escape_string($data_usuario_email ["nro_patronal"])."',
                                            '".pg_escape_string($row_resul_empresa_nueva["ruc"])."',
                                            '".pg_escape_string($data_usuario_email ["email"])."',
                                            '".pg_escape_string($row_resul_empresa_nueva["name"])."',
                                            'INSCRIPCION PATRONAL',
                                            now());";
                        $rxempresa = pg_exec($link,$sql12ie);
                        $row2 = pg_fetch_array($rxempresa);
                        echo "Correo enviado con éxito.";
                    } else {
                        echo "Error al enviar el correo.";
                    }

                    // Cierra la conexión a la base de datos
                }
            }
        }
    }//fin while de consulta empresa si existe en reop
    
    /*  SE APAGO POR QUE NO SE QUIERE QUE SE INSERTE SUCURSALES
    
    /////////////////////////////CONSULTA SI MPRESA SUCURSAL YA EXISTE PARA INSERTAR LSA DEMAS EMPRESAS SUCURSAL
    $consulta_empresa_activas_ips_sucursal = "SELECT DISTINCT on (ws_ips.ipsporfecha.nrorucdigv)ws_ips.ipsporfecha.nrorucdigv,
    ws_ips.ipsporfecha.fec_inscri,
    ws_ips.ipsporfecha.ind_estemp,
    ws_ips.ipsporfecha.des_actpri,
    ws_ips.ipsporfecha.nro_patron,
    ws_ips.ipsporfecha.des_emplea,
    ws_ips.ipsporfecha.fec_iniact,
    ws_ips.ipsporfecha.telefono,
    ws_ips.ipsporfecha.email,
    ws_ips.actividad_empresa.tipo,
    ws_ips.ipsporfecha.nrorucdigv,
    eportal.empresas.id,
    split_part(ws_ips.ipsporfecha.nro_patron, '-', 1) || '%' || split_part(ws_ips.ipsporfecha.nro_patron, '-', 2) || '%' || split_part(ws_ips.ipsporfecha.nro_patron, '-', 3)  as numeropatronalips
    FROM
    ws_ips.ipsporfecha
    LEFT JOIN eportal.empresas ON ws_ips.ipsporfecha.nrorucdigv = eportal.empresas.document
    INNER JOIN ws_ips.vista_actividad_desglos ON ws_ips.ipsporfecha.id_ips_por_fecha = ws_ips.vista_actividad_desglos.id_ips_por_fecha
    INNER JOIN ws_ips.actividad_empresa ON ws_ips.vista_actividad_desglos.codigo = ws_ips.actividad_empresa.cod_actividad
    WHERE
    ws_ips.ipsporfecha.ind_estemp = 'AC' AND
    ws_ips.ipsporfecha.email LIKE '%@%' AND ws_ips.actividad_empresa.tipo='EMPRESA' AND
    (
        ws_ips.ipsporfecha.nrorucdigv <> ''
    ) and 	eportal.empresas.document is null  
    ORDER BY
    ws_ips.ipsporfecha.nrorucdigv ASC,
    ws_ips.ipsporfecha.fec_inscri ASC ;
    ";

    $resultado_de_empresas_inexistentes_reop_sucursal = pg_query($consulta_empresa_activas_ips_sucursal) or die('La consulta falló: ' . pg_last_error());

    $filas_afectadas = pg_num_rows($resultado_de_empresas_inexistentes_reop_sucursal);
    echo "Cantidad de afectados encontrados: ". $filas_afectadas . "<br>";

    while ($row_empresa_sucursal_patronal = pg_fetch_array($resultado_de_empresas_inexistentes_reop_sucursal)) {
        echo "Datos de la empresa y sucursal: <br>";
        print_r($row_empresa_sucursal_patronal);

        $consulta_sucursalpatronalips = "SELECT
        eportal.empresas_sucursales.nro_patronal_ips
    FROM
        eportal.empresas_sucursales
    WHERE
        eportal.empresas_sucursales.ruc LIKE '%" . pg_escape_string($row_empresa_sucursal_patronal['nrorucdigv']) . "%'
        AND eportal.empresas_sucursales.nro_patronal_ips LIKE '%" . pg_escape_string($row_empresa_sucursal_patronal['numeropatronalips']) . "%'
    LIMIT 1";

    $consulta_sucursalpatronalipsrow = pg_query($consulta_sucursalpatronalips);
    $data_consulta_sucursalpatronalipsrow = pg_fetch_array($consulta_sucursalpatronalipsrow);
    echo "Datos de la empresa patronal ips: <br>";
    print_r($consulta_sucursalpatronalips);

    $iscripcion = "SELECT
    inscripcion_patronal.contenedor_inscripcion.nro_patronal_ips
    FROM
    inscripcion_patronal.contenedor_inscripcion
    where    inscripcion_patronal.contenedor_inscripcion.estado=2 and   inscripcion_patronal.contenedor_inscripcion.ruc LIKE '%" . pg_escape_string($row_empresa_sucursal_patronal['nrorucdigv']) . "%'
    AND inscripcion_patronal.contenedor_inscripcion.nro_patronal_ips LIKE '%" . pg_escape_string($row_empresa_sucursal_patronal['numeropatronalips']) . "%'
    LIMIT 1";

    $consulta_iscripcion = pg_query($iscripcion);
    $data_consulta_iscripcion = pg_fetch_array($consulta_iscripcion);
    echo "Datos de la empresa patronal ips: <br>";
    print_r($iscripcion);
    $sucursal=0;
    $inscripcion=0;
    if($data_consulta_sucursalpatronalipsrow){     
        $sucursal=1;  
    }
    if($data_consulta_iscripcion){
            
        $inscripcion=1;  
    }

    if($sucursal==1 OR $inscripcion==1){
        echo "existe patronal ips <br>";
    }else {
    ////////inserta empresa sucursal sucursal
    $strSQLExists = "select max(nro_patronal) from eportal.empresas_sucursales";
        $rsExists= pg_exec($link,$strSQLExists);
        $data = pg_fetch_array($rsExists);
        echo "Realizando insert de patronal<br> ";
        print_r( $data);
        if($data)
        {

        $valormaximonropatronal = $data['max'] + 1;
        }

    $inserta_sucursal = "INSERT INTO eportal.empresas_sucursales (
    empresa_id,
    name,
    type,
    ruc,
    nro_patronal,
    fantasy,
    fecha_inscrip,
    nro_patronal_ips,
    activ_principal,
    tel,
    email,
    id_tipo_inscripcion,
    origen_dato) values
    ('".pg_escape_string($row_empresa_sucursal_patronal["id"])."',
    '".pg_escape_string($row_empresa_sucursal_patronal["des_emplea"])."',
    2,
    '".pg_escape_string($row_empresa_sucursal_patronal["nrorucdigv"])."',
    '".pg_escape_string($valormaximonropatronal)."',
    '".pg_escape_string($row_empresa_sucursal_patronal["des_emplea"])."',
        now(),
    '".pg_escape_string($row_empresa_sucursal_patronal["nro_patron"])."',
    '".pg_escape_string($row_empresa_sucursal_patronal["des_actpri"])."',
    '".pg_escape_string($row_empresa_sucursal_patronal["telefono"])."'
    ,'".pg_escape_string($row_empresa_sucursal_patronal["email"])."',
    6,
        2) RETURNING id;";
    $rxempresasucursal= pg_exec($link,$inserta_sucursal);
    $rxempresasucursalrow = pg_fetch_array($rxempresasucursal);
    $id_empresasucursal_insertada = $rxempresasucursalrow['id'];

    echo "Realizando insert de empresa sucursal<br> ";
    print_r( $inserta_sucursal);
    $empresa_nueva = "SELECT
    eportal.empresas_sucursales.nro_patronal, 
    eportal.empresas_sucursales.origen_dato, 
    eportal.empresas_sucursales.email, 
    eportal.empresas_sucursales.ruc, 
    eportal.empresas_sucursales.id,
    eportal.empresas_sucursales.fecha_inscrip,
        eportal.empresas_sucursales.name
    FROM
    eportal.empresas_sucursales
    
    where  eportal.empresas_sucursales.id= '".$id_empresasucursal_insertada."'  and eportal.empresas_sucursales.origen_dato =2  and date(eportal.empresas_sucursales.fecha_inscrip)= date(now()) limit 1";
    $resul_empresa_nueva= pg_exec($link,$empresa_nueva);
    $row_resul_empresa_nueva = pg_fetch_array($resul_empresa_nueva);

    //// INSERTA SITUACION DE EMPRESA
    $cambio_situacion_empresa = "INSERT INTO eportal.cambio_situacion_empresa (
    situacion_ant,
    fecha_cambio,
    situacion_act,
    nro_patronal,
    nombre_usuario_cambio) 
    values (
    3,
    now(),
    3,
    '".pg_escape_string($row_resul_empresa_nueva["nro_patronal"])."',
    'WS SISTEMA IPS')";
    pg_exec($link,$cambio_situacion_empresa);

    echo "Realizando insert de empresa situacion<br> ";
    print_r( $cambio_situacion_empresa);
    
    //generar certificado laboral
    $insert_certificado_laboral="INSERT INTO 
    cert_laboral.cert_cumplimiento
    (nropatronal,
    estado,
    estado_pago,
    fecha_pedido,
    fecha_vencimiento,
    fecha_aprobacion) 
    VALUES ('".$row_resul_empresa_nueva["nro_patronal"]."',
    '1',
    '5',
    now(),
    CURRENT_DATE + INTERVAL '3 month',
    now()) ;";
    pg_exec($link,$insert_certificado_laboral);

    echo "Realizando insert de empresa certificado<br> ";
    print_r( $insert_certificado_laboral);
    ////////////////////////////
    $consulta_de_usuario = "SELECT
    nro_patronal
    FROM
        public.users_reop where nro_patronal ='".$row_resul_empresa_nueva["nro_patronal"]."' limit 1";
    $usuario_consulta= pg_exec($link,$consulta_de_usuario);
    $data_usuario = pg_fetch_array($usuario_consulta);
    echo "Realizando insert de patronal<br> ";
    print_r($data_usuario);
    if(!$data_usuario)
    {
    //////////////////inserta usuario patronal
    $insusuario_patronal="	INSERT INTO public.users_reop (
        email,
        contrasenha,
        active,
        fecha_alta,
        nivel,
        usuario,
        nro_patronal)
    values(
        '".pg_escape_string($row_resul_empresa_nueva["email"])."',
        crypt('".$row_resul_empresa_nueva["nro_patronal"]."' || '-' || '".pg_escape_string($row_resul_empresa_nueva["fecha_inscrip"])."', gen_salt('bf', 8)),
        1,
        now(),
        '0',
        'admin' || '".pg_escape_string($row_resul_empresa_nueva["nro_patronal"])."',
        '".$row_resul_empresa_nueva["nro_patronal"]."')RETURNING idacceso
    ;";
    $insusuario_patronalinsert= pg_exec($link,$insusuario_patronal);
    $insusuario_patronalrow = pg_fetch_array($insusuario_patronalinsert);
    $idacceso = $insusuario_patronalrow['idacceso'];

    $consulta_de_usuarioemail = "SELECT
        email,
        contrasenha,
        active,
        fecha_alta,
        nivel,
        usuario,
        nro_patronal
    FROM
        public.users_reop where nro_patronal ='".$row_resul_empresa_nueva["nro_patronal"]."' limit 1";
    $usuario_consultaemail= pg_exec($link,$consulta_de_usuarioemail);
    $data_usuario_email = pg_fetch_array($usuario_consultaemail);


        $consulta_avilitacion = "SELECT
        ws_ips.emple_ips_envio_correo.patronal, 
        ws_ips.emple_ips_envio_correo.email, 
        ws_ips.emple_ips_envio_correo.ruc
    FROM
    ws_ips.emple_ips_envio_correo
    
    where ws_ips.emple_ips_envio_correo.patronal = '".$data_usuario_email["nro_patronal"]."' and 	ws_ips.emple_ips_envio_correo.email='".$data_usuario_email["email"]."'";
    $resul_consulta_avilitacion= pg_exec($link,$consulta_avilitacion);
    $data_consulta_avilitacion = pg_fetch_array($resul_consulta_avilitacion);
    
    
    if (!$data_consulta_avilitacion){

    // Inicializa el contenido del mensaje de correo con una tabla HTML
    $mensaje = "
    <html xmlns= 'http://www.w3.org/1999/xhtml'>
    <head>
        <meta charset='utf-8' />
        <title>REOP(Registro Obrero Patronal - MTESS)</title>
        <link href= 'https://fonts.googleapis.com/css?family= Roboto' rel='=stylesheet'>
        <style type='text/css'>
        img {
            width: 100%;
        }
        h1, h2, h3 {
            color: #231f20;
        }
        a {
            color: #231f20; 
            text-decoration: none;
        }
        p {
            color: #000000; 
            text-decoration: none;
        }
        .mtess-text {
            color: #e20613;
        }

        .contenido {
            font-family: 'Lato', sans-serif;
            width: 600px;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            text-align: justify;
            background-color:#ffffff;
            padding: 10px 40px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .contenedor{
            background-color: #e20613;
            padding: 20px;
        }
        .cabecera {
            background-color: #ffffff;
            padding: 8px 0;
            text-align: center;
        }
        .imagen {
            height: 250px;
            overflow: hidden;
            border-radius: 2px;
        }
        .texto {
            font-size: 14px;
            color: #000000;
            text-align: justify;
        }


        .cta {
            background-color: #efac00;
            text-decoration: none;
            padding: 10px 60px;
            color: #000000;
            font-weight: bold;
            transition: background-color 0.5s ease;
        }
        .cta:hover {
            background-color: #231f20;
            color: #000000;
        }
        .cont_cta {
            width: 100%;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .pie {
            background-color: #231f20;
            color: #000000;
            font-size: 12px;
            text-align: center;
            padding: 10px 0;
            overflow: hidden;
            width: 680px;
            margin: 0 auto;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .soicon {
            width: 32px;
            float: left;
            padding: 2px;
        }
        .social {
            overflow: hidden;
            width: 108px;
            margin-left: auto;
            margin-right: auto;
        }
        .line {
            width: 95%;
            height: 1px;
            background-color: #000000;
            margin: 5px auto;
        }
        .titulo-tr {
            background-color: #ffffff;
            color: #000000;
            font-weight: normal;
            min-width:150px;
            font-size: 14px;
        }
        .contenido-tr {
            background-color: #ffffff;
            color:#000000;
            padding: 0 10px;
            width: 80%;
            font-size: 12px;
        }

        .td-text-value {
            background-color: #ffffff;
            color:#000000;
            font-size: 12px;
        }

        .td-text-label {
            background-color: #ffffff;
            color:#000000;
            font-size: 12px;
            font-weight: bold
        }

        .titulo-t {
            background-color: #231f20;
            margin-left: auto;
            margin-right: auto;
            width: 99%;
            text-align: center;
            color: #fff;
            padding: 5px 10px;
        }
        .contact-info, .contact-info:visited, .contact-info:hover, .contact-info:link,
        .contact-info > a{
            color:#FFAD00!important;
            text-decoration: none;
        }
        table, tr, td, th {
            border: 1px solid #ccc;
            border-collapse: collapse;
            line-height: 2.1;
        }

        </style>
    </head>
    <body>

    <div class='contenedor'>

        <div class='contenido'>
    ";
    $mensaje .= "<div class='cabecera'> 

    <a href=\" https://www.mtess.gov.py\"  aria-label=\" Enlace a página principal\" >
    <picture>
    <img class=\" image-responsive\"  src=\"https://regobpat.mtess.gov.py/dbmt/output/images/logoestirado_small.png\"  alt=\" Logo de Ministerio de Trabajo, Empleo y Seguridad Social\"style='width: 400px; height: auto' >
    </picture>
    </a>
            <h3 style='margin: 20px 0px 0px 0px'> INSCRIPCIÓN PATRONAL AUTOMATICA </h3>
            </div>
            <br/>
            <p>Señor/res: ".pg_escape_string($row_resul_empresa_nueva["name"])."</p>
            <p>El Ministerio de Trabajo, Empleo y Seguridad Social comunica su inscripción como empleador en el Registro Obrero Patronal.</p>
            <p>Para acceder al Sistema REOP y proveer información del empleador ingrese aquí:(https://regobpat.mtess.gov.py/dbmt/output/login.php).</p>
            <table style='width:100%;max-width:600px;border=1'>
                <tbody>
                    <tr>
                        <td class='td-text-label'>
                        Nombre de usuario:
                        </td>
                        <td  class='td-text-value' style='width: 80%'>
                        admin
                        </td>
                    </tr>
                    <tr>    
                        <td class='td-text-label'>
                        Nro. de Patronal:
                        </td>
                        <td  class='td-text-value' style='width: 80%'>
                        ".$row_resul_empresa_nueva["nro_patronal"]."
                        </td>
                    </tr>
                    <tr>
                        <td class='td-text-label'>
                        Contraseña:
                        </td>
                        <td  class='td-text-value' style='width: 80%'>
                        ".pg_escape_string($data_usuario_email["contrasenha"])."
                        </td>
                    </tr>
                </tbody>
            </table>
            ";



    $mensaje .= "<p style='text-align:justify;font-size:13px;color:red'>
                Instamos a actualizar por medio del sistema REOP los datos del empleador en un plazo de 30 días.<br/>
                </p>
                <p style='text-align:center;font-size:12px;font-color:black'>
                <small>
                Atentamente,.<br/>
                </small>
                <small>
                DIRECCION DE REGISTRO OBRERO PATRONAL<br/>
                </small>
                <small>
                TEL. 021 7290100 Int. 554<br/>
                </small>
                <small>
                WhatsApp: 0986790101 <br/>
                </small>
                <small>
                reop@mtess.gov.py<br/>
                </small>
            </p>
            </div>


            </div>
        </body>
        
        </html>";

    // Correo de destino
    //$para = 'gonzalezvillalba1991@gmail.com';
    $para = $data_usuario_email["email"];
    // Asunto del correo
    $asunto = 'INSCRIPCIÓN PATRONAL AUTOMATICA';
    //CABECERA CON HTML
    $cabeceras = "". "\r\n";



    // Cabeceras del correo
    $cabeceras = "MIME-Version: 1.0" . "\r\n";
    $cabeceras .= "Content-Type: text/html; charset=utf-8" . "\r\n";
    $cabeceras .= "From: reop@mtess.gov.py" . "\r\n" .
        "Reply-To: reop@mtess.gov.py" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Envía el correo
    if (mail($para, $asunto, $mensaje, $cabeceras)) {
        $sql12ie = "INSERT INTO ws_ips.emple_ips_envio_correo(
            patronal,
            ruc,
            email,
            nombre,
            descripcion,
            fecha_emision) values
            ('".pg_escape_string($data_usuario_email ["nro_patronal"])."',
            '".pg_escape_string($row_resul_empresa_nueva["ruc"])."',
            '".pg_escape_string($data_usuario_email ["email"])."',
            '".pg_escape_string($row_resul_empresa_nueva["name"])."',
            'INSCRIPCION PATRONAL',
            now());";
            $rxempresa=pg_exec($link,$sql12ie);
            $row2 = pg_fetch_array($rxempresa);
        echo "Correo enviado con éxito.";
    } else {
        echo "Error al enviar el correo.";
    }

    // Cierra la conexión a la base de datos
    }
    }             

    }
    // Aquí puedes continuar con el procesamiento de los resultados

    }*/
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $ahora = date("Y-m-d H:i:s");			
    $PeriodoDeTiempo = tiempo_transcurrido($star,$ahora);			
    echo "<hr>Han pasado <b>".$PeriodoDeTiempo."</b> <hr>"; 
    function calcular_fecha_df_yyyy($fInicio) {          
        $fecha = time() - strtotime($fInicio);
        //$edad = floor((($fecha / 3600) / 24) / 360);
        $edad = floor($fecha /31556926);
        
        // print_r($interval);
        return $edad;
    }
            
    function CortarFecha($fecha) {
        /*
            Para cortar las fechas que retorna el web service
            Ejemplo: 1991-05-12T00:00:00-04:00
            se cortaran en 1991-05-12 y 00:00:00-04:00
        */ 
        $partes = explode("T",$fecha);
        return $partes["0"];
    }
    function Consultar($pregunta) {
        $consulta = $pregunta;
        //$enlaceDB="dbname=eportal host=192.168.70.186 user=postgres password=i54R1943cMzrkbH1";
        //$enlaceDB="dbname=eportal host=10.2.79.5 user=postgres password=dgoZal3smtess*";
        // $enlaceDB="dbname=identificaciones host=192.168.70.170 user=postgres password=mLxnvGxLX0ND4i2I";
        //$enlaceDB="dbname=eportal host=192.168.70.170 user=postgres password=mLxnvGxLX0ND4i2I";
        $enlaceDB = "dbname=eportal host=192.168.70.186 user=postgres password=i54R1943cMzrkbH1";

        //Conectando y seleccionado la base de datos  
        $dbconexion = pg_Connect($enlaceDB) or die($error='No se ha podido conectar: ' . pg_last_error());
        //realizar consulta al DB
        $resultado = pg_query($consulta) or die($error='La consulta falló: ' . pg_last_error());
        $filas = pg_num_rows ($resultado);   

        if (isset($error)) {
            $retornar = $error;
        } else {
            $retornar = 'La consulta: '.$consulta.'; afectó a '.$filas.' fila(s).';
        }

        // Liberando el conjunto de resultados
        pg_free_result($resultado);

        // Cerrando la conexión
        //pg_close($dbconexion);
        
        return $retornar;
    }
            
    function tiempo_transcurrido($cadena, $cadena2) {
        $horaInicio = new DateTime($cadena);
        $horaTermino = new DateTime($cadena2);
        
        $interval = $horaInicio->diff($horaTermino);
        return $interval->format('%H horas %i minutos %s seconds');  
    }
?>
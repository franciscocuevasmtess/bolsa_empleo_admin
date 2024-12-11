<?php
include("include/dbcommon.php");
$ruc=$_GET["ruc"];
        $respuestaSET=preguntarSET($_GET["ruc"]);     
   
        $mensajeSET="";  
        $tipoPersonaSET="";
        $tipoSociedadSET="";
        $tipocategoriaSET="";
        $razonSocialSET="";
        $consultaOK=false;         
    foreach ($respuestaSET as $llave => $valor) {
        //ver mensaje
        if($llave=='mensaje'){//mensaje de la set
            if($valor=="STATUS_RESPONSE_OK"){
            $consultaOK=true;
            }
        }
        if($consultaOK==true){
            if($llave=="contribuyente"){
                    //echo 'Clave '.$llave.' valor '.$valor.'<br>';
                    foreach ($valor as $key1 => $value1) {
                        //obtener tipo persona set
                        if($key1=="tipoPersona"){
                            $tipoPersonaSET=$value1;
                        }
                        //obtener tipo sociedad set
                        if($key1=="tipoSociedad"){
                            $tipoSociedadSET=$value1;
                        } 
                        //obtener tipo categoria set
                        if($key1=="categoria"){
                            $tipocategoriaSET=$value1;                         
                        } 
                        //obtener razon social set
                        if($key1=="razonSocial"){
                            $razonSocialSET=$value1;                         
                        }                      
                    }
            }//if contribuyente
        }
    }    //fin foreach
    echo utf8_encode(trim($razonSocialSET));
//funciones
function CortarFecha($fecha){
    /*
        Para cortar las fechas que retorna el web service
        Ejemplo: 1991-05-12T00:00:00-04:00
        se cortaran en 1991-05-12 y 00:00:00-04:00
    */ 
    $partes=explode("T",$fecha);
    return $partes["0"];
}

function preguntarSET($ruc){
    $factores=explode("-",$ruc);
    if(isset($factores[1])){
        $url = "https://servicios.set.gov.py/EsetApiWS/ApiWS/consultaRuc?apiKey=b1655bf63dab1190bfc656e2122f50e4--23a85f74446c0f8b92081ec7b90bbcd646eee765&ruc=".$factores[0]."&dv=".$factores[1];
    }else {
        $url = "https://servicios.set.gov.py/EsetApiWS/ApiWS/consultaRuc?apiKey=b1655bf63dab1190bfc656e2122f50e4--23a85f74446c0f8b92081ec7b90bbcd646eee765&ruc=".$factores[0]."&dv=";
    }
    $client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);	
    $result = json_decode(($response),true);
    curl_close($client);   
    return $result;
}
function tiempo_transcurrido($cadena,$cadena2){
    $horaInicio = new DateTime($cadena);
    $horaTermino = new DateTime($cadena2);    
    $interval = $horaInicio->diff($horaTermino);
    return $interval->format('%H horas %i minutos %s seconds');  
}
?>
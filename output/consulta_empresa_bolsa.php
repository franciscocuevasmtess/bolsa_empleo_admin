<?php

include("include/dbcommon.php");
$ruc=$_GET["ruc"];
//$link = pg_Connect("dbname=eportal host=192.168.70.170 user=postgres password=mLxnvGxLX0ND4i2I");
$link = pg_Connect("dbname=eportal host=192.168.70.186 user=postgres password=i54R1943cMzrkbH1");



//buscar empleados de la empresa

$rs = pg_query($link,"
        SELECT
        eportal.empresas.legal,
        eportal.empresas.fantasy,
        eportal.empresas_sucursales.city_id,
        eportal.empresas_sucursales.distrito_id,
        eportal.empresas_sucursales.direccion,
        eportal.empresas_sucursales.tel,
        eportal.empresas_sucursales.type,
        eportal.empresas_sucursales.email
        FROM
        eportal.empresas
        LEFT JOIN eportal.empresas_sucursales ON eportal.empresas.id = eportal.empresas_sucursales.empresa_id 
        WHERE
        eportal.empresas_sucursales.type =1 AND eportal.empresas_sucursales.ruc = '".pg_escape_string($ruc)."'limit 1");
            $data = pg_fetch_array($rs);
 $empresa=array();   
 if($data){
            $empresa = array(
    		'nombre_comercial' => $data[0],
    		'razon_social' => $data[1],
            'ciudad' => $data[2],
    		'departamento' => $data[3],
            'direccion' => $data[4],
    		'tel' => $data[5],
            'id_tipo_empresa' => $data[6],
            'email' => $data[7],
  			);

              $nombre_comercial= $data[0];
    		$razon_social= $data[1];
            $ciudad = $data[2];
    		$departamento = $data[3];
            $direccion = $data[4];
    		$tel = $data[5];
            $id_tipo_empresa = $data[6];
            $email = $data[7];
            echo utf8_encode(trim($nombre_comercial)).":".utf8_encode(trim($razon_social)).":".utf8_encode(trim($ciudad)).":".utf8_encode(trim($departamento)).":".utf8_encode(trim($direccion)).":".utf8_encode(trim($tel)).":".utf8_encode(trim($id_tipo_empresa)).":".utf8_encode(trim($email)).":BASE";
          } 

        
		//fin whileE

		?>
<?php

include("include/dbcommon.php");
$ruc=$_GET["ruc"];
$link = pg_Connect("dbname=eportal host=192.168.70.186 user=postgres password=i54R1943cMzrkbH1");
//pg_Connect("dbname=eportal host=192.168.70.170 user=postgres password=mLxnvGxLX0ND4i2I");



//buscar empleados de la empresa

$rs = pg_query($link,"
                SELECT
                bolsa_empleo.empresa_users.ruc
                FROM
                bolsa_empleo.empresa_users
                WHERE bolsa_empleo.empresa_users.ruc=  '".pg_escape_string($ruc)."'limit 1");
            $data = pg_fetch_array($rs);
 $empresa=array();   
 if($data){
            $empresa = array(
    		'ruc_bolsa' => $data[0],

  			);

              $ruc_bolsa= $data[0];
    		
            echo utf8_encode(trim($ruc_bolsa)).":BASE";
          } 

        
		//fin whileE

		?>
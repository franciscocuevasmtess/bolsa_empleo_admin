<?php

include("../include/dbcommon.php");

//obtiene el id usuario que en este caso tiene que ser el ruc con dígito verificador
//print_r($_SESSION['UserID'] ); 

if (isset($_SESSION['UserID'] )) {
  $ruc=$_SESSION['UserID'];
  //obtener sucursal datos de sucursal
 
  if (isset($_GET['id_s'])) {
              $id_s=$_GET['id_s'];
              //usamos el método de prepara sql
              $sql = DB::PrepareSQL("SELECT
                                        EBS.CITY_ID AS ID_CIUDAD,
                                        EBS.DISTRITO_ID AS ID_DEPARTAMENTO,
                                        EB.ID_RUBRO AS ID_RUBRO
                                      FROM
                                        BOLSA_EMPLEO.EMPRESAS_BOLSA_SUCURSALES EBS
                                      JOIN BOLSA_EMPLEO.EMPRESAS_BOLSA EB 
                                      ON
                                        EBS.RUC = EB.RUC
                                      WHERE
                                        EBS.RUC = ':1'
                                      AND EBS.ID = ':2' limit 1",pg_escape_string($ruc), $id_s);
                  $rs = DB::Query($sql);
                  $data = $rs->fetchAssoc();
                  if($data)
                  {
                    //print_r($data);
                    echo "[id_ciudad]:".$data["id_ciudad"].":[id_departamento]:".$data["id_departamento"].":[id_rubro]:".$data["id_rubro"]; 
                  }
                  else
                  {
                  //No se registran datos de sucursal
                  echo "[id_ciudad]:".":[id_departamento]:".":[id_rubro]:"; 
                  }        
    } 
  else {
      # no hacer nada
    }
}
else{
  //no hay session conectada.
  //no hacer nada.
}

?>
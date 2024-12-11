<?php

//add.php
include("include/dbcommon.php");
if(isset($_POST["category_name"]))
{
	$category_name = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_POST["category_name"]);

	//buscar si existe


		$sql = DB::PrepareSQL("select count(tipo_rubro) from bolsa_empleo.tipos_rubros where tipo_rubro like ':1'", $category_name);
		$rs = DB::Query($sql);
		$data = $rs->fetchAssoc();

	if (!is_numeric($category_name)){
		if($data['count'] == 0)
		{

			$sqlinsert2 = DB::PrepareSQL("INSERT INTO bolsa_empleo.bolsa_empleo.tipos_rubros(tipo_rubro) values 
			(':1') ON CONFLICT ON CONSTRAINT tipos_rubros_tipo_rubro_key DO UPDATE SET tipo_rubro = excluded.tipo_rubro  RETURNING id_tipo_rubro",strtoupper($_POST["category_name"]));
			$rx2=DB::Query($sqlinsert2);
			$row2 = $rx2->fetchAssoc(); 
			$new_id_rubros_nuevos = $row2['id_tipo_rubro'];

				echo $new_id_rubros_nuevos;	
		}

		if($data['count'] > 0){

			echo '0';
		}
	}else{

		echo '0';

	}
	
}
?>
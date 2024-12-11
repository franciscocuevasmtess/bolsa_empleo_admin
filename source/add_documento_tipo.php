<?php

//add.php
include("include/dbcommon.php");
if(isset($_POST["category_name"]))
{
	$category_name = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_POST["category_name"]);

	//buscar si existe


		$sql = DB::PrepareSQL("select count(descripcion) from bolsa_empleo.perfil_documento_tipo where descripcion  like  ':1'", $category_name);
		$rs = DB::Query($sql);
		$data = $rs->fetchAssoc();

	if (!is_numeric($category_name)){
		if($data['count'] == 0)
		{

			$sqlinsert2 = DB::PrepareSQL("INSERT INTO bolsa_empleo.perfil_documento_tipo (descripcion)
			 VALUES( ':1')
			 ON CONFLICT ON CONSTRAINT perfil_documento_tipo_un DO UPDATE SET descripcion = excluded.descripcion  RETURNING id_tipo_documento",strtoupper($_POST["category_name"]));
			$rx2=DB::Query($sqlinsert2);
			$row2 = $rx2->fetchAssoc(); 
			$new_id_rubros_nuevos = $row2['id_tipo_documento'];

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
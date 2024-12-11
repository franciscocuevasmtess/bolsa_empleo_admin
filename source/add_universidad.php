<?php

//add.php
include("include/dbcommon.php");
if(isset($_POST["category_name"]))
{
	$category_name = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_POST["category_name"]);
	//buscar si existe
		$sql = DB::PrepareSQL("select count(descripcion) from bolsa_empleo.estudios_universidades where descripcion like ':1'", $category_name);
		$rs = DB::Query($sql);
		$data = $rs->fetchAssoc();
	if (!is_numeric($category_name)){
		if($data['count'] == 0)
		{
			$sqlinsert2 = DB::PrepareSQL("INSERT INTO bolsa_empleo.estudios_universidades(descripcion) values 
			(':1') ON CONFLICT ON CONSTRAINT estudios_universidades_descripcion_key DO UPDATE SET descripcion = excluded.descripcion  RETURNING id_estudios_universidades",strtoupper($_POST["category_name"]));
			$rx2=DB::Query($sqlinsert2);
			$row2 = $rx2->fetchAssoc(); 
			$new_id_universidad_nuevos = $row2['id_estudios_universidades'];
				echo $new_id_universidad_nuevos;	
		}
		if($data['count'] > 0){
			echo '0';
		}
	}else{
		echo '0';
	}	
}

?>
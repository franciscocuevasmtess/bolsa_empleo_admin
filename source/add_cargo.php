<?php
//add_cargo.php
include("include/dbcommon.php");
if(isset($_POST["category_name"]))
{
	$category_name = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_POST["category_name"]);
	//$category_name = strtoupper($category_name);
	//buscar si existe
		$sql = DB::PrepareSQL("SELECT count(descripcion_cargo) FROM bolsa_empleo.cargo WHERE descripcion_cargo LIKE ':1'", $category_name);
		$rs = DB::Query($sql);
		$data = $rs->fetchAssoc();
	if (!is_numeric($category_name)){
		if($data['count'] == 0)
		{
			$sqlinsert2 = DB::PrepareSQL("INSERT INTO bolsa_empleo.cargo(descripcion_cargo) values 
			(':1') ON CONFLICT ON CONSTRAINT cargo_descripcion_cargo_key DO UPDATE SET descripcion_cargo = excluded.descripcion_cargo  RETURNING id_cargo",strtoupper($_POST["category_name"]));
			$rx2=DB::Query($sqlinsert2);
			$row2 = $rx2->fetchAssoc(); 
			$new_id_rubros_nuevos = $row2['id_cargo'];
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
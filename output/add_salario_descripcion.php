<?php
//add_cargo.php
include("include/dbcommon.php");
if(isset($_POST["category_name"]))
{
	$category_name = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_POST["category_name"]);
	//$category_name = strtoupper($category_name);
	//buscar si existe
		$sql = DB::PrepareSQL("SELECT count(descripcion_salario) FROM bolsa_empleo.vacancia_salario_descripcion WHERE descripcion_salario LIKE ':1'", $category_name);
		$rs = DB::Query($sql);
		$data = $rs->fetchAssoc();
	if (!is_numeric($category_name)){
		if($data['count'] == 0)
		{
			$sqlinsert2 = DB::PrepareSQL("INSERT INTO bolsa_empleo.vacancia_salario_descripcion(descripcion_salario) values 
			(':1') ON CONFLICT ON CONSTRAINT vacancia_salario_descripcion_un DO UPDATE SET descripcion_salario = excluded.descripcion_salario  RETURNING id_va_salario_desc",strtoupper($_POST["category_name"]));
			$rx2=DB::Query($sqlinsert2);
			$row2 = $rx2->fetchAssoc(); 
			$new_id_rubros_nuevos = $row2['id_va_salario_desc'];
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
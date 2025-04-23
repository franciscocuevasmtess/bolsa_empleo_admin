<?php
$tdatapostulacion_convocado = array();
$tdatapostulacion_convocado[".searchableFields"] = array();
$tdatapostulacion_convocado[".ShortName"] = "postulacion_convocado";
$tdatapostulacion_convocado[".OwnerID"] = "";
$tdatapostulacion_convocado[".OriginalTable"] = "bolsa_empleo.postulacion";


$tdatapostulacion_convocado[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapostulacion_convocado[".originalPagesByType"] = $tdatapostulacion_convocado[".pagesByType"];
$tdatapostulacion_convocado[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapostulacion_convocado[".originalPages"] = $tdatapostulacion_convocado[".pages"];
$tdatapostulacion_convocado[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapostulacion_convocado[".originalDefaultPages"] = $tdatapostulacion_convocado[".defaultPages"];

//	field labels
$fieldLabelspostulacion_convocado = array();
$fieldToolTipspostulacion_convocado = array();
$pageTitlespostulacion_convocado = array();
$placeHolderspostulacion_convocado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspostulacion_convocado["Spanish"] = array();
	$fieldToolTipspostulacion_convocado["Spanish"] = array();
	$placeHolderspostulacion_convocado["Spanish"] = array();
	$pageTitlespostulacion_convocado["Spanish"] = array();
	$fieldLabelspostulacion_convocado["Spanish"]["id_vacancia"] = "Id Vacancia";
	$fieldToolTipspostulacion_convocado["Spanish"]["id_vacancia"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["id_vacancia"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["fechanac"] = "<p><strong>&nbsp;Fechanac:</strong></p>";
	$fieldToolTipspostulacion_convocado["Spanish"]["fechanac"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["fechanac"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["sexo"] = "<p>&nbsp;<strong>Sexo:</strong></p>";
	$fieldToolTipspostulacion_convocado["Spanish"]["sexo"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["sexo"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["domicilio"] = "<p>&nbsp;<strong>Domicilio:</strong></p>";
	$fieldToolTipspostulacion_convocado["Spanish"]["domicilio"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["domicilio"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["ciudad"] = "Ciudad:";
	$fieldToolTipspostulacion_convocado["Spanish"]["ciudad"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["ciudad"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["distrito"] = " Departamento:";
	$fieldToolTipspostulacion_convocado["Spanish"]["distrito"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["distrito"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["estado_civil"] = "<p><strong>&nbsp;Estado Civil:</strong></p>";
	$fieldToolTipspostulacion_convocado["Spanish"]["estado_civil"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["estado_civil"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["cedula"] = "Nro. Documento";
	$fieldToolTipspostulacion_convocado["Spanish"]["cedula"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["cedula"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["telefono"] = "<p><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAQCAYAAAAvf+5AAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAB1SURBVHgB7dKxDYAgEIXhe0R7R8AYDdo5kTO4gSO4kSPY2skG2hvuhB6DjZ1/QveFK+5QNWZgUTORFBTPKsiUsWCSi3trNxtT2hjNDiuVdSuUKBhFL/vhR9BvYQ8vCZ9CWXdH6ijgsGRCPCLH4sfp6FcOZzA3Xk0rUBRoB4MAAAAASUVORK5CYII=\">&nbsp;<strong>Telefono:</strong></p>";
	$fieldToolTipspostulacion_convocado["Spanish"]["telefono"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["telefono"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["pais"] = "<p>&nbsp;<strong>Pais:</strong></p>";
	$fieldToolTipspostulacion_convocado["Spanish"]["pais"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["pais"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipspostulacion_convocado["Spanish"]["nombre_completo"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["nombre_completo"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["hash_generado"] = "Hash Generado";
	$fieldToolTipspostulacion_convocado["Spanish"]["hash_generado"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["hash_generado"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["empresa"] = "Empresa";
	$fieldToolTipspostulacion_convocado["Spanish"]["empresa"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["empresa"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["descri_empresa"] = "Descri Empresa";
	$fieldToolTipspostulacion_convocado["Spanish"]["descri_empresa"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["descri_empresa"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["id_postulacion"] = "Postulacion";
	$fieldToolTipspostulacion_convocado["Spanish"]["id_postulacion"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["id_postulacion"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["id_estado"] = "Estado Actual";
	$fieldToolTipspostulacion_convocado["Spanish"]["id_estado"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["id_estado"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["id_vacancias"] = "Id Vacancias";
	$fieldToolTipspostulacion_convocado["Spanish"]["id_vacancias"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["id_vacancias"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["persona_id"] = "Persona Id";
	$fieldToolTipspostulacion_convocado["Spanish"]["persona_id"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["persona_id"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["test_psicotecnico"] = "Test Psicotécnico";
	$fieldToolTipspostulacion_convocado["Spanish"]["test_psicotecnico"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["test_psicotecnico"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["evaluacion"] = "Evaluacion";
	$fieldToolTipspostulacion_convocado["Spanish"]["evaluacion"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["evaluacion"] = "";
	$fieldLabelspostulacion_convocado["Spanish"]["es_programa"] = "Es Programa";
	$fieldToolTipspostulacion_convocado["Spanish"]["es_programa"] = "";
	$placeHolderspostulacion_convocado["Spanish"]["es_programa"] = "";
	$pageTitlespostulacion_convocado["Spanish"]["list"] = "Evaluacion-Empresa";
	if (count($fieldToolTipspostulacion_convocado["Spanish"]))
		$tdatapostulacion_convocado[".isUseToolTips"] = true;
}


	$tdatapostulacion_convocado[".NCSearch"] = true;



$tdatapostulacion_convocado[".shortTableName"] = "postulacion_convocado";
$tdatapostulacion_convocado[".nSecOptions"] = 0;

$tdatapostulacion_convocado[".mainTableOwnerID"] = "";
$tdatapostulacion_convocado[".entityType"] = 1;
$tdatapostulacion_convocado[".connId"] = "eportal_at_192_168_70_170";


$tdatapostulacion_convocado[".strOriginalTableName"] = "bolsa_empleo.postulacion";

	



$tdatapostulacion_convocado[".showAddInPopup"] = false;

$tdatapostulacion_convocado[".showEditInPopup"] = false;

$tdatapostulacion_convocado[".showViewInPopup"] = false;

$tdatapostulacion_convocado[".listAjax"] = false;
//	temporary
//$tdatapostulacion_convocado[".listAjax"] = false;

	$tdatapostulacion_convocado[".audit"] = true;

	$tdatapostulacion_convocado[".locking"] = false;


$pages = $tdatapostulacion_convocado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapostulacion_convocado[".edit"] = true;
	$tdatapostulacion_convocado[".afterEditAction"] = 1;
	$tdatapostulacion_convocado[".closePopupAfterEdit"] = 1;
	$tdatapostulacion_convocado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapostulacion_convocado[".add"] = true;
$tdatapostulacion_convocado[".afterAddAction"] = 1;
$tdatapostulacion_convocado[".closePopupAfterAdd"] = 1;
$tdatapostulacion_convocado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapostulacion_convocado[".list"] = true;
}



$tdatapostulacion_convocado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapostulacion_convocado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapostulacion_convocado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapostulacion_convocado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapostulacion_convocado[".printFriendly"] = true;
}



$tdatapostulacion_convocado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapostulacion_convocado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapostulacion_convocado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapostulacion_convocado[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																					

$tdatapostulacion_convocado[".ajaxCodeSnippetAdded"] = false;

$tdatapostulacion_convocado[".buttonsAdded"] = false;

$tdatapostulacion_convocado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapostulacion_convocado[".isUseTimeForSearch"] = false;


$tdatapostulacion_convocado[".badgeColor"] = "5F9EA0";


$tdatapostulacion_convocado[".allSearchFields"] = array();
$tdatapostulacion_convocado[".filterFields"] = array();
$tdatapostulacion_convocado[".requiredSearchFields"] = array();

$tdatapostulacion_convocado[".googleLikeFields"] = array();
$tdatapostulacion_convocado[".googleLikeFields"][] = "nombre_completo";
$tdatapostulacion_convocado[".googleLikeFields"][] = "ciudad";
$tdatapostulacion_convocado[".googleLikeFields"][] = "distrito";
$tdatapostulacion_convocado[".googleLikeFields"][] = "cedula";
$tdatapostulacion_convocado[".googleLikeFields"][] = "empresa";
$tdatapostulacion_convocado[".googleLikeFields"][] = "id_postulacion";
$tdatapostulacion_convocado[".googleLikeFields"][] = "id_estado";
$tdatapostulacion_convocado[".googleLikeFields"][] = "id_vacancias";
$tdatapostulacion_convocado[".googleLikeFields"][] = "persona_id";
$tdatapostulacion_convocado[".googleLikeFields"][] = "test_psicotecnico";
$tdatapostulacion_convocado[".googleLikeFields"][] = "evaluacion";
$tdatapostulacion_convocado[".googleLikeFields"][] = "es_programa";



$tdatapostulacion_convocado[".tableType"] = "list";

$tdatapostulacion_convocado[".printerPageOrientation"] = 0;
$tdatapostulacion_convocado[".nPrinterPageScale"] = 100;

$tdatapostulacion_convocado[".nPrinterSplitRecords"] = 40;

$tdatapostulacion_convocado[".geocodingEnabled"] = false;










$tdatapostulacion_convocado[".pageSize"] = 10;

$tdatapostulacion_convocado[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY bolsa_empleo.postulacion.id_postulacion";
$tdatapostulacion_convocado[".strOrderBy"] = $tstrOrderBy;

$tdatapostulacion_convocado[".orderindexes"] = array();
			$tdatapostulacion_convocado[".orderindexes"][] = array(15, (1 ? "ASC" : "DESC"), "bolsa_empleo.postulacion.id_postulacion");


$tdatapostulacion_convocado[".sqlHead"] = "SELECT eportal.persons.nombre || ' ' || eportal.persons.apellidos AS nombre_completo,  eportal.persons.fechanac,  eportal.persons.sexo,  eportal.persons.domicilio,  eportal.persons.city_id AS ciudad,  eportal.persons.distrito_id AS distrito,  eportal.persons.nacionalidad AS pais,  eportal.persons_estado_civil_type.name AS estado_civil,  eportal.persons_docs.valor AS cedula,  STRING_AGG(eportal.persons_phones.phone, ', ') AS telefono,  bolsa_empleo.postulacion.id_vacancia,  bolsa_empleo.bolsa_users.hash_generado,  bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal AS empresa,  ' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion AS descri_empresa,  bolsa_empleo.postulacion.id_postulacion,  bolsa_empleo.postulacion.id_estado,  /*CASE      WHEN id_estado = 1 THEN 'Preseleccionado'      WHEN id_estado = 2 THEN 'Seleccionado'      WHEN id_estado = 3 THEN 'Evaluacion-Empresa'      WHEN id_estado = 4 THEN 'Insertado'      ELSE 'Postulado'  END AS id_estado,*/  bolsa_empleo.vacancia.id_vacancias,  bolsa_empleo.postulacion.fk_personaid AS persona_id,  (SELECT  afile1.archivo   from bolsa_empleo.archivo afile1   WHERE afile1.person_id=bolsa_empleo.postulacion.fk_personaid          and afile1.id_tipo_archivo  = 2  order by afile1.fecha_creacion desc  limit 1) as test_psicotecnico,  (select afile.archivo  FROM  bolsa_empleo.archivo afile   WHERE afile.person_id=bolsa_empleo.postulacion.fk_personaid          and afile.id_tipo_archivo  = 1           and afile.postulacion_id::int4 =bolsa_empleo.postulacion.id_postulacion  order by afile.fecha_creacion desc  limit 1) as evaluacion,  (select fe.es_programa from bolsa_empleo.feria_empleo fe   where fe.id_feria_empleo = bolsa_empleo.vacancia.fk_id_feria_empleo  ) as es_programa";
$tdatapostulacion_convocado[".sqlFrom"] = "FROM bolsa_empleo.postulacion  INNER JOIN bolsa_empleo.vacancia ON bolsa_empleo.postulacion.id_vacancia = bolsa_empleo.vacancia.id_vacancias  INNER JOIN eportal.persons ON bolsa_empleo.postulacion.fk_personaid = eportal.persons.id  LEFT OUTER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id  LEFT OUTER JOIN eportal.persons_estado_civil_type ON eportal.persons.estado_civil = eportal.persons_estado_civil_type.id  INNER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id  LEFT OUTER JOIN eportal.persons_phones ON eportal.persons.id = eportal.persons_phones.person_id  INNER JOIN bolsa_empleo.bolsa_users ON eportal.persons_docs.valor = bolsa_empleo.bolsa_users.nro_documento  INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia  INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia  INNER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id";
$tdatapostulacion_convocado[".sqlWhereExpr"] = "(bolsa_empleo.postulacion.id_estado = 3)";
$tdatapostulacion_convocado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapostulacion_convocado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapostulacion_convocado[".arrGroupsPerPage"] = $arrGPP;

$tdatapostulacion_convocado[".highlightSearchResults"] = true;

$tableKeyspostulacion_convocado = array();
$tableKeyspostulacion_convocado[] = "id_postulacion";
$tdatapostulacion_convocado[".Keys"] = $tableKeyspostulacion_convocado;


$tdatapostulacion_convocado[".hideMobileList"] = array();




//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","nombre_completo");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "nombre_completo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.nombre || ' ' || eportal.persons.apellidos";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["nombre_completo"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "nombre_completo";
//	fechanac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fechanac";
	$fdata["GoodName"] = "fechanac";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","fechanac");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fechanac";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.fechanac";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["fechanac"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "fechanac";
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","sexo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sexo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.sexo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["sexo"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "sexo";
//	domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "domicilio";
	$fdata["GoodName"] = "domicilio";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","domicilio");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "domicilio";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.domicilio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["domicilio"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "domicilio";
//	ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ciudad";
	$fdata["GoodName"] = "ciudad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","ciudad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "city_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.city_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "eportal.city";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "name";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "distrito", "lookup" => "distrito_id" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["ciudad"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "ciudad";
//	distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "distrito";
	$fdata["GoodName"] = "distrito";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","distrito");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "distrito_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.distrito_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "eportal.distritos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ciudad";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["distrito"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "distrito";
//	pais
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pais";
	$fdata["GoodName"] = "pais";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","pais");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nacionalidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.nacionalidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "eportal.country";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["pais"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "pais";
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "eportal.persons_estado_civil_type";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","estado_civil");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons_estado_civil_type.name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["estado_civil"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "estado_civil";
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "eportal.persons_docs";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","cedula");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "valor";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons_docs.valor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["cedula"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "cedula";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","telefono");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "phone";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STRING_AGG(eportal.persons_phones.phone, ', ')";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["telefono"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "telefono";
//	id_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "id_vacancia";
	$fdata["GoodName"] = "id_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","id_vacancia");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_vacancia";

		$fdata["sourceSingle"] = "id_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.postulacion.id_vacancia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.vacancia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_vacancias";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "id_estado_vacancia";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["id_vacancia"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "id_vacancia";
//	hash_generado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "hash_generado";
	$fdata["GoodName"] = "hash_generado";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","hash_generado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "hash_generado";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.bolsa_users.hash_generado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["hash_generado"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "hash_generado";
//	empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "empresa";
	$fdata["GoodName"] = "empresa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","empresa");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "empresa";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["empresa"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "empresa";
//	descri_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "descri_empresa";
	$fdata["GoodName"] = "descri_empresa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","descri_empresa");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "descri_empresa";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["descri_empresa"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "descri_empresa";
//	id_postulacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "id_postulacion";
	$fdata["GoodName"] = "id_postulacion";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","id_postulacion");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_postulacion";

		$fdata["sourceSingle"] = "id_postulacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.postulacion.id_postulacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["id_postulacion"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "id_postulacion";
//	id_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "id_estado";
	$fdata["GoodName"] = "id_estado";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","id_estado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_estado";

		$fdata["sourceSingle"] = "id_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.postulacion.id_estado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.estado_postulacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_estado_postulacion";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["id_estado"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "id_estado";
//	id_vacancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "id_vacancias";
	$fdata["GoodName"] = "id_vacancias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","id_vacancias");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_vacancias";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia.id_vacancias";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["id_vacancias"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "id_vacancias";
//	persona_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "persona_id";
	$fdata["GoodName"] = "persona_id";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","persona_id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_personaid";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.postulacion.fk_personaid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["persona_id"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "persona_id";
//	test_psicotecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "test_psicotecnico";
	$fdata["GoodName"] = "test_psicotecnico";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","test_psicotecnico");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "test_psicotecnico";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(SELECT  afile1.archivo   from bolsa_empleo.archivo afile1   WHERE afile1.person_id=bolsa_empleo.postulacion.fk_personaid          and afile1.id_tipo_archivo  = 2  order by afile1.fecha_creacion desc  limit 1)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.archivo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_archivo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "archivo";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["test_psicotecnico"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "test_psicotecnico";
//	evaluacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "evaluacion";
	$fdata["GoodName"] = "evaluacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","evaluacion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "evaluacion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select afile.archivo  FROM  bolsa_empleo.archivo afile   WHERE afile.person_id=bolsa_empleo.postulacion.fk_personaid          and afile.id_tipo_archivo  = 1           and afile.postulacion_id::int4 =bolsa_empleo.postulacion.id_postulacion  order by afile.fecha_creacion desc  limit 1)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.archivo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_archivo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "archivo";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapostulacion_convocado["evaluacion"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "evaluacion";
//	es_programa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "es_programa";
	$fdata["GoodName"] = "es_programa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_convocado","es_programa");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "es_programa";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select fe.es_programa from bolsa_empleo.feria_empleo fe   where fe.id_feria_empleo = bolsa_empleo.vacancia.fk_id_feria_empleo  )";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatapostulacion_convocado["es_programa"] = $fdata;
		$tdatapostulacion_convocado[".searchableFields"][] = "es_programa";


$tables_data["bolsa_empleo.postulacion_convocado"]=&$tdatapostulacion_convocado;
$field_labels["bolsa_empleo_postulacion_convocado"] = &$fieldLabelspostulacion_convocado;
$fieldToolTips["bolsa_empleo_postulacion_convocado"] = &$fieldToolTipspostulacion_convocado;
$placeHolders["bolsa_empleo_postulacion_convocado"] = &$placeHolderspostulacion_convocado;
$page_titles["bolsa_empleo_postulacion_convocado"] = &$pageTitlespostulacion_convocado;


changeTextControlsToDate( "bolsa_empleo.postulacion_convocado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.postulacion_convocado"] = array();
//	bolsa_empleo.seguimientos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.seguimientos";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.seguimientos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "seguimientos";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_seguimientos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.postulacion_convocado"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.postulacion_convocado"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.postulacion_convocado"][$dIndex]["masterKeys"][]="id_postulacion";

				$detailsTablesData["bolsa_empleo.postulacion_convocado"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.postulacion_convocado"][$dIndex]["detailKeys"][]="id_postulacion";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.postulacion_convocado"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.postulacion_convocado"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.postulacion_convocado"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion_convocado"][0]["masterKeys"][]="id_vacancias";
				$masterTablesData["bolsa_empleo.postulacion_convocado"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion_convocado"][0]["detailKeys"][]="id_vacancia";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.estado_postulacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.estado_postulacion";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "estado_postulacion";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.postulacion_convocado"][1] = $masterParams;
				$masterTablesData["bolsa_empleo.postulacion_convocado"][1]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion_convocado"][1]["masterKeys"][]="id_estado_postulacion";
				$masterTablesData["bolsa_empleo.postulacion_convocado"][1]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion_convocado"][1]["detailKeys"][]="id_estado";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_postulacion_convocado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eportal.persons.nombre || ' ' || eportal.persons.apellidos AS nombre_completo,  eportal.persons.fechanac,  eportal.persons.sexo,  eportal.persons.domicilio,  eportal.persons.city_id AS ciudad,  eportal.persons.distrito_id AS distrito,  eportal.persons.nacionalidad AS pais,  eportal.persons_estado_civil_type.name AS estado_civil,  eportal.persons_docs.valor AS cedula,  STRING_AGG(eportal.persons_phones.phone, ', ') AS telefono,  bolsa_empleo.postulacion.id_vacancia,  bolsa_empleo.bolsa_users.hash_generado,  bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal AS empresa,  ' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion AS descri_empresa,  bolsa_empleo.postulacion.id_postulacion,  bolsa_empleo.postulacion.id_estado,  /*CASE      WHEN id_estado = 1 THEN 'Preseleccionado'      WHEN id_estado = 2 THEN 'Seleccionado'      WHEN id_estado = 3 THEN 'Evaluacion-Empresa'      WHEN id_estado = 4 THEN 'Insertado'      ELSE 'Postulado'  END AS id_estado,*/  bolsa_empleo.vacancia.id_vacancias,  bolsa_empleo.postulacion.fk_personaid AS persona_id,  (SELECT  afile1.archivo   from bolsa_empleo.archivo afile1   WHERE afile1.person_id=bolsa_empleo.postulacion.fk_personaid          and afile1.id_tipo_archivo  = 2  order by afile1.fecha_creacion desc  limit 1) as test_psicotecnico,  (select afile.archivo  FROM  bolsa_empleo.archivo afile   WHERE afile.person_id=bolsa_empleo.postulacion.fk_personaid          and afile.id_tipo_archivo  = 1           and afile.postulacion_id::int4 =bolsa_empleo.postulacion.id_postulacion  order by afile.fecha_creacion desc  limit 1) as evaluacion,  (select fe.es_programa from bolsa_empleo.feria_empleo fe   where fe.id_feria_empleo = bolsa_empleo.vacancia.fk_id_feria_empleo  ) as es_programa";
$proto0["m_strFrom"] = "FROM bolsa_empleo.postulacion  INNER JOIN bolsa_empleo.vacancia ON bolsa_empleo.postulacion.id_vacancia = bolsa_empleo.vacancia.id_vacancias  INNER JOIN eportal.persons ON bolsa_empleo.postulacion.fk_personaid = eportal.persons.id  LEFT OUTER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id  LEFT OUTER JOIN eportal.persons_estado_civil_type ON eportal.persons.estado_civil = eportal.persons_estado_civil_type.id  INNER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id  LEFT OUTER JOIN eportal.persons_phones ON eportal.persons.id = eportal.persons_phones.person_id  INNER JOIN bolsa_empleo.bolsa_users ON eportal.persons_docs.valor = bolsa_empleo.bolsa_users.nro_documento  INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia  INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia  INNER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id";
$proto0["m_strWhere"] = "(bolsa_empleo.postulacion.id_estado = 3)";
$proto0["m_strOrderBy"] = "ORDER BY bolsa_empleo.postulacion.id_postulacion";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "bolsa_empleo.postulacion.id_estado = 3";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_estado",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 3";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "eportal.persons.nombre || ' ' || eportal.persons.apellidos"
));

$proto6["m_sql"] = "eportal.persons.nombre || ' ' || eportal.persons.apellidos";
$proto6["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "nombre_completo";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fechanac",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto8["m_sql"] = "eportal.persons.fechanac";
$proto8["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto10["m_sql"] = "eportal.persons.sexo";
$proto10["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "domicilio",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto12["m_sql"] = "eportal.persons.domicilio";
$proto12["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "city_id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto14["m_sql"] = "eportal.persons.city_id";
$proto14["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "ciudad";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "distrito_id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto16["m_sql"] = "eportal.persons.distrito_id";
$proto16["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "distrito";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto18["m_sql"] = "eportal.persons.nacionalidad";
$proto18["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "pais";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.persons_estado_civil_type",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto20["m_sql"] = "eportal.persons_estado_civil_type.name";
$proto20["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "estado_civil";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto22["m_sql"] = "eportal.persons_docs.valor";
$proto22["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "cedula";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_CUSTOM";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "eportal.persons_phones.phone"
));

$proto25["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "', '"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "STRING_AGG";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "STRING_AGG(eportal.persons_phones.phone, ', ')";
$proto24["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "telefono";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto28["m_sql"] = "bolsa_empleo.postulacion.id_vacancia";
$proto28["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "hash_generado",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto30["m_sql"] = "bolsa_empleo.bolsa_users.hash_generado";
$proto30["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal"
));

$proto32["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal";
$proto32["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "empresa";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion"
));

$proto34["m_sql"] = "' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion";
$proto34["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "descri_empresa";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto36["m_sql"] = "bolsa_empleo.postulacion.id_postulacion";
$proto36["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "id_estado",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto38["m_sql"] = "bolsa_empleo.postulacion.id_estado";
$proto38["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto40["m_sql"] = "bolsa_empleo.vacancia.id_vacancias";
$proto40["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_personaid",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto42["m_sql"] = "bolsa_empleo.postulacion.fk_personaid";
$proto42["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "persona_id";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$proto45=array();
$proto45["m_strHead"] = "SELECT";
$proto45["m_strFieldList"] = "afile1.archivo";
$proto45["m_strFrom"] = "from bolsa_empleo.archivo afile1";
$proto45["m_strWhere"] = "afile1.person_id=bolsa_empleo.postulacion.fk_personaid          and afile1.id_tipo_archivo  = 2";
$proto45["m_strOrderBy"] = "order by afile1.fecha_creacion desc";
	
		;
			$proto45["cipherer"] = null;
$proto47=array();
$proto47["m_sql"] = "afile1.person_id=bolsa_empleo.postulacion.fk_personaid          and afile1.id_tipo_archivo  = 2";
$proto47["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "afile1.person_id=bolsa_empleo.postulacion.fk_personaid          and afile1.id_tipo_archivo  = 2"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
						$proto49=array();
$proto49["m_sql"] = "afile1.person_id=bolsa_empleo.postulacion.fk_personaid";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "afile1",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "=bolsa_empleo.postulacion.fk_personaid";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

			$proto47["m_contained"][]=$obj;
						$proto51=array();
$proto51["m_sql"] = "afile1.id_tipo_archivo  = 2";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_tipo_archivo",
	"m_strTable" => "afile1",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "= 2";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

			$proto47["m_contained"][]=$obj;
$proto47["m_strCase"] = "";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_where"] = $obj;
$proto53=array();
$proto53["m_sql"] = "";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

$proto45["m_having"] = $obj;
$proto45["m_fieldlist"] = array();
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "archivo",
	"m_strTable" => "afile1",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto55["m_sql"] = "afile1.archivo";
$proto55["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto45["m_fieldlist"][]=$obj;
$proto45["m_fromlist"] = array();
												$proto57=array();
$proto57["m_link"] = "SQLL_MAIN";
			$proto58=array();
$proto58["m_strName"] = "bolsa_empleo.archivo";
$proto58["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "id_archivo";
$proto58["m_columns"][] = "nombre";
$proto58["m_columns"][] = "archivo";
$proto58["m_columns"][] = "fecha_creacion";
$proto58["m_columns"][] = "usuario_creacion";
$proto58["m_columns"][] = "id_tipo_archivo";
$proto58["m_columns"][] = "person_id";
$proto58["m_columns"][] = "postulacion_id";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_sql"] = "bolsa_empleo.archivo afile1";
$proto57["m_alias"] = "afile1";
$proto57["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto59=array();
$proto59["m_sql"] = "";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto45["m_fromlist"][]=$obj;
$proto45["m_groupby"] = array();
$proto45["m_orderby"] = array();
												$proto61=array();
						$obj = new SQLField(array(
	"m_strName" => "fecha_creacion",
	"m_strTable" => "afile1",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto61["m_column"]=$obj;
$proto61["m_bAsc"] = 0;
$proto61["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto61);

$proto45["m_orderby"][]=$obj;					
$proto45["m_srcTableName"]="bolsa_empleo.postulacion_convocado";		
$obj = new SQLQuery($proto45);

$proto44["m_sql"] = "(SELECT  afile1.archivo   from bolsa_empleo.archivo afile1   WHERE afile1.person_id=bolsa_empleo.postulacion.fk_personaid          and afile1.id_tipo_archivo  = 2  order by afile1.fecha_creacion desc  limit 1)";
$proto44["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "test_psicotecnico";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$proto64=array();
$proto64["m_strHead"] = "select";
$proto64["m_strFieldList"] = "afile.archivo";
$proto64["m_strFrom"] = "FROM  bolsa_empleo.archivo afile";
$proto64["m_strWhere"] = "afile.person_id=bolsa_empleo.postulacion.fk_personaid          and afile.id_tipo_archivo  = 1           and afile.postulacion_id::int4 =bolsa_empleo.postulacion.id_postulacion";
$proto64["m_strOrderBy"] = "order by afile.fecha_creacion desc";
	
		;
			$proto64["cipherer"] = null;
$proto66=array();
$proto66["m_sql"] = "afile.person_id=bolsa_empleo.postulacion.fk_personaid          and afile.id_tipo_archivo  = 1           and afile.postulacion_id::int4 =bolsa_empleo.postulacion.id_postulacion";
$proto66["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "afile.person_id=bolsa_empleo.postulacion.fk_personaid          and afile.id_tipo_archivo  = 1           and afile.postulacion_id::int4 =bolsa_empleo.postulacion.id_postulacion"
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
						$proto68=array();
$proto68["m_sql"] = "afile.person_id=bolsa_empleo.postulacion.fk_personaid";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "afile",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "=bolsa_empleo.postulacion.fk_personaid";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

			$proto66["m_contained"][]=$obj;
						$proto70=array();
$proto70["m_sql"] = "afile.id_tipo_archivo  = 1";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_tipo_archivo",
	"m_strTable" => "afile",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "= 1";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

			$proto66["m_contained"][]=$obj;
						$proto72=array();
$proto72["m_sql"] = "afile.postulacion_id::int4 =bolsa_empleo.postulacion.id_postulacion";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "afile.postulacion_id::int4"
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "=bolsa_empleo.postulacion.id_postulacion";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

			$proto66["m_contained"][]=$obj;
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_where"] = $obj;
$proto74=array();
$proto74["m_sql"] = "";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto64["m_having"] = $obj;
$proto64["m_fieldlist"] = array();
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "archivo",
	"m_strTable" => "afile",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto76["m_sql"] = "afile.archivo";
$proto76["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto64["m_fieldlist"][]=$obj;
$proto64["m_fromlist"] = array();
												$proto78=array();
$proto78["m_link"] = "SQLL_MAIN";
			$proto79=array();
$proto79["m_strName"] = "bolsa_empleo.archivo";
$proto79["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "id_archivo";
$proto79["m_columns"][] = "nombre";
$proto79["m_columns"][] = "archivo";
$proto79["m_columns"][] = "fecha_creacion";
$proto79["m_columns"][] = "usuario_creacion";
$proto79["m_columns"][] = "id_tipo_archivo";
$proto79["m_columns"][] = "person_id";
$proto79["m_columns"][] = "postulacion_id";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "bolsa_empleo.archivo afile";
$proto78["m_alias"] = "afile";
$proto78["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto80=array();
$proto80["m_sql"] = "";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto64["m_fromlist"][]=$obj;
$proto64["m_groupby"] = array();
$proto64["m_orderby"] = array();
												$proto82=array();
						$obj = new SQLField(array(
	"m_strName" => "fecha_creacion",
	"m_strTable" => "afile",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto82["m_column"]=$obj;
$proto82["m_bAsc"] = 0;
$proto82["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto82);

$proto64["m_orderby"][]=$obj;					
$proto64["m_srcTableName"]="bolsa_empleo.postulacion_convocado";		
$obj = new SQLQuery($proto64);

$proto63["m_sql"] = "(select afile.archivo  FROM  bolsa_empleo.archivo afile   WHERE afile.person_id=bolsa_empleo.postulacion.fk_personaid          and afile.id_tipo_archivo  = 1           and afile.postulacion_id::int4 =bolsa_empleo.postulacion.id_postulacion  order by afile.fecha_creacion desc  limit 1)";
$proto63["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "evaluacion";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$proto85=array();
$proto85["m_strHead"] = "select";
$proto85["m_strFieldList"] = "fe.es_programa";
$proto85["m_strFrom"] = "from bolsa_empleo.feria_empleo fe";
$proto85["m_strWhere"] = "fe.id_feria_empleo = bolsa_empleo.vacancia.fk_id_feria_empleo";
$proto85["m_strOrderBy"] = "";
	
		;
			$proto85["cipherer"] = null;
$proto87=array();
$proto87["m_sql"] = "fe.id_feria_empleo = bolsa_empleo.vacancia.fk_id_feria_empleo";
$proto87["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_feria_empleo",
	"m_strTable" => "fe",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto87["m_column"]=$obj;
$proto87["m_contained"] = array();
$proto87["m_strCase"] = "= bolsa_empleo.vacancia.fk_id_feria_empleo";
$proto87["m_havingmode"] = false;
$proto87["m_inBrackets"] = false;
$proto87["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto87);

$proto85["m_where"] = $obj;
$proto89=array();
$proto89["m_sql"] = "";
$proto89["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto89["m_column"]=$obj;
$proto89["m_contained"] = array();
$proto89["m_strCase"] = "";
$proto89["m_havingmode"] = false;
$proto89["m_inBrackets"] = false;
$proto89["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto89);

$proto85["m_having"] = $obj;
$proto85["m_fieldlist"] = array();
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "es_programa",
	"m_strTable" => "fe",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto91["m_sql"] = "fe.es_programa";
$proto91["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto85["m_fieldlist"][]=$obj;
$proto85["m_fromlist"] = array();
												$proto93=array();
$proto93["m_link"] = "SQLL_MAIN";
			$proto94=array();
$proto94["m_strName"] = "bolsa_empleo.feria_empleo";
$proto94["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto94["m_columns"] = array();
$proto94["m_columns"][] = "id_feria_empleo";
$proto94["m_columns"][] = "nombre";
$proto94["m_columns"][] = "fecha_inicio";
$proto94["m_columns"][] = "fecha_fin";
$proto94["m_columns"][] = "locacion";
$proto94["m_columns"][] = "asistentes";
$proto94["m_columns"][] = "descripcion";
$proto94["m_columns"][] = "es_programa";
$obj = new SQLTable($proto94);

$proto93["m_table"] = $obj;
$proto93["m_sql"] = "bolsa_empleo.feria_empleo fe";
$proto93["m_alias"] = "fe";
$proto93["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto95=array();
$proto95["m_sql"] = "";
$proto95["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto95["m_column"]=$obj;
$proto95["m_contained"] = array();
$proto95["m_strCase"] = "";
$proto95["m_havingmode"] = false;
$proto95["m_inBrackets"] = false;
$proto95["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto95);

$proto93["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto93);

$proto85["m_fromlist"][]=$obj;
$proto85["m_groupby"] = array();
$proto85["m_orderby"] = array();
$proto85["m_srcTableName"]="bolsa_empleo.postulacion_convocado";		
$obj = new SQLQuery($proto85);

$proto84["m_sql"] = "(select fe.es_programa from bolsa_empleo.feria_empleo fe   where fe.id_feria_empleo = bolsa_empleo.vacancia.fk_id_feria_empleo  )";
$proto84["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "es_programa";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto97=array();
$proto97["m_link"] = "SQLL_MAIN";
			$proto98=array();
$proto98["m_strName"] = "bolsa_empleo.postulacion";
$proto98["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto98["m_columns"] = array();
$proto98["m_columns"][] = "id_postulacion";
$proto98["m_columns"][] = "id_vacancia";
$proto98["m_columns"][] = "id_estado";
$proto98["m_columns"][] = "fecha_postulacion";
$proto98["m_columns"][] = "fk_personaid";
$proto98["m_columns"][] = "metodo_insercion";
$obj = new SQLTable($proto98);

$proto97["m_table"] = $obj;
$proto97["m_sql"] = "bolsa_empleo.postulacion";
$proto97["m_alias"] = "";
$proto97["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto99=array();
$proto99["m_sql"] = "";
$proto99["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto99["m_column"]=$obj;
$proto99["m_contained"] = array();
$proto99["m_strCase"] = "";
$proto99["m_havingmode"] = false;
$proto99["m_inBrackets"] = false;
$proto99["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto99);

$proto97["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto97);

$proto0["m_fromlist"][]=$obj;
												$proto101=array();
$proto101["m_link"] = "SQLL_INNERJOIN";
			$proto102=array();
$proto102["m_strName"] = "bolsa_empleo.vacancia";
$proto102["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto102["m_columns"] = array();
$proto102["m_columns"][] = "id_vacancias";
$proto102["m_columns"][] = "fecha_creacion_vacancia";
$proto102["m_columns"][] = "id_estado_vacancia";
$proto102["m_columns"][] = "fecha_expiracion_vacancia";
$proto102["m_columns"][] = "cantidad_vacancia";
$proto102["m_columns"][] = "geolocation";
$proto102["m_columns"][] = "fk_id_feria_empleo";
$proto102["m_columns"][] = "usuario";
$proto102["m_columns"][] = "origen";
$proto102["m_columns"][] = "imagen_perfil";
$obj = new SQLTable($proto102);

$proto101["m_table"] = $obj;
$proto101["m_sql"] = "INNER JOIN bolsa_empleo.vacancia ON bolsa_empleo.postulacion.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto101["m_alias"] = "";
$proto101["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto103=array();
$proto103["m_sql"] = "bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.postulacion.id_vacancia";
$proto103["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto103["m_column"]=$obj;
$proto103["m_contained"] = array();
$proto103["m_strCase"] = "= bolsa_empleo.postulacion.id_vacancia";
$proto103["m_havingmode"] = false;
$proto103["m_inBrackets"] = false;
$proto103["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto103);

$proto101["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto101);

$proto0["m_fromlist"][]=$obj;
												$proto105=array();
$proto105["m_link"] = "SQLL_INNERJOIN";
			$proto106=array();
$proto106["m_strName"] = "eportal.persons";
$proto106["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto106["m_columns"] = array();
$proto106["m_columns"][] = "id";
$proto106["m_columns"][] = "nombre";
$proto106["m_columns"][] = "apellidos";
$proto106["m_columns"][] = "nacionalidad";
$proto106["m_columns"][] = "fechanac";
$proto106["m_columns"][] = "sexo";
$proto106["m_columns"][] = "estado_civil";
$proto106["m_columns"][] = "canthijos";
$proto106["m_columns"][] = "domicilio";
$proto106["m_columns"][] = "city_id";
$proto106["m_columns"][] = "distrito_id";
$proto106["m_columns"][] = "esindigena";
$proto106["m_columns"][] = "id_profesion";
$proto106["m_columns"][] = "actualizado";
$proto106["m_columns"][] = "porcentaje_discapacidad";
$proto106["m_columns"][] = "adjunto_potencial_discapacidad";
$proto106["m_columns"][] = "adjunto_certificado_discapacidad";
$proto106["m_columns"][] = "foto";
$proto106["m_columns"][] = "resumen";
$proto106["m_columns"][] = "fk_habilidades";
$proto106["m_columns"][] = "id_barrio";
$obj = new SQLTable($proto106);

$proto105["m_table"] = $obj;
$proto105["m_sql"] = "INNER JOIN eportal.persons ON bolsa_empleo.postulacion.fk_personaid = eportal.persons.id";
$proto105["m_alias"] = "";
$proto105["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto107=array();
$proto107["m_sql"] = "eportal.persons.id = bolsa_empleo.postulacion.fk_personaid";
$proto107["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto107["m_column"]=$obj;
$proto107["m_contained"] = array();
$proto107["m_strCase"] = "= bolsa_empleo.postulacion.fk_personaid";
$proto107["m_havingmode"] = false;
$proto107["m_inBrackets"] = false;
$proto107["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto107);

$proto105["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto105);

$proto0["m_fromlist"][]=$obj;
												$proto109=array();
$proto109["m_link"] = "SQLL_LEFTJOIN";
			$proto110=array();
$proto110["m_strName"] = "eportal.city";
$proto110["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto110["m_columns"] = array();
$proto110["m_columns"][] = "id";
$proto110["m_columns"][] = "name";
$proto110["m_columns"][] = "countrycode";
$proto110["m_columns"][] = "distrito_id";
$proto110["m_columns"][] = "cod_ine_ciudad";
$obj = new SQLTable($proto110);

$proto109["m_table"] = $obj;
$proto109["m_sql"] = "LEFT OUTER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id";
$proto109["m_alias"] = "";
$proto109["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto111=array();
$proto111["m_sql"] = "eportal.city.id = eportal.persons.city_id";
$proto111["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto111["m_column"]=$obj;
$proto111["m_contained"] = array();
$proto111["m_strCase"] = "= eportal.persons.city_id";
$proto111["m_havingmode"] = false;
$proto111["m_inBrackets"] = false;
$proto111["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto111);

$proto109["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto109);

$proto0["m_fromlist"][]=$obj;
												$proto113=array();
$proto113["m_link"] = "SQLL_LEFTJOIN";
			$proto114=array();
$proto114["m_strName"] = "eportal.persons_estado_civil_type";
$proto114["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto114["m_columns"] = array();
$proto114["m_columns"][] = "id";
$proto114["m_columns"][] = "short";
$proto114["m_columns"][] = "name";
$obj = new SQLTable($proto114);

$proto113["m_table"] = $obj;
$proto113["m_sql"] = "LEFT OUTER JOIN eportal.persons_estado_civil_type ON eportal.persons.estado_civil = eportal.persons_estado_civil_type.id";
$proto113["m_alias"] = "";
$proto113["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto115=array();
$proto115["m_sql"] = "eportal.persons_estado_civil_type.id = eportal.persons.estado_civil";
$proto115["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons_estado_civil_type",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto115["m_column"]=$obj;
$proto115["m_contained"] = array();
$proto115["m_strCase"] = "= eportal.persons.estado_civil";
$proto115["m_havingmode"] = false;
$proto115["m_inBrackets"] = false;
$proto115["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto115);

$proto113["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto113);

$proto0["m_fromlist"][]=$obj;
												$proto117=array();
$proto117["m_link"] = "SQLL_INNERJOIN";
			$proto118=array();
$proto118["m_strName"] = "eportal.persons_docs";
$proto118["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto118["m_columns"] = array();
$proto118["m_columns"][] = "id";
$proto118["m_columns"][] = "doctype_id";
$proto118["m_columns"][] = "person_id";
$proto118["m_columns"][] = "valor";
$obj = new SQLTable($proto118);

$proto117["m_table"] = $obj;
$proto117["m_sql"] = "INNER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id";
$proto117["m_alias"] = "";
$proto117["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto119=array();
$proto119["m_sql"] = "eportal.persons_docs.person_id = eportal.persons.id";
$proto119["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto119["m_column"]=$obj;
$proto119["m_contained"] = array();
$proto119["m_strCase"] = "= eportal.persons.id";
$proto119["m_havingmode"] = false;
$proto119["m_inBrackets"] = false;
$proto119["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto119);

$proto117["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto117);

$proto0["m_fromlist"][]=$obj;
												$proto121=array();
$proto121["m_link"] = "SQLL_LEFTJOIN";
			$proto122=array();
$proto122["m_strName"] = "eportal.persons_phones";
$proto122["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto122["m_columns"] = array();
$proto122["m_columns"][] = "id";
$proto122["m_columns"][] = "person_id";
$proto122["m_columns"][] = "type";
$proto122["m_columns"][] = "phone";
$obj = new SQLTable($proto122);

$proto121["m_table"] = $obj;
$proto121["m_sql"] = "LEFT OUTER JOIN eportal.persons_phones ON eportal.persons.id = eportal.persons_phones.person_id";
$proto121["m_alias"] = "";
$proto121["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto123=array();
$proto123["m_sql"] = "eportal.persons_phones.person_id = eportal.persons.id";
$proto123["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "eportal.persons_phones",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto123["m_column"]=$obj;
$proto123["m_contained"] = array();
$proto123["m_strCase"] = "= eportal.persons.id";
$proto123["m_havingmode"] = false;
$proto123["m_inBrackets"] = false;
$proto123["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto123);

$proto121["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto121);

$proto0["m_fromlist"][]=$obj;
												$proto125=array();
$proto125["m_link"] = "SQLL_INNERJOIN";
			$proto126=array();
$proto126["m_strName"] = "bolsa_empleo.bolsa_users";
$proto126["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto126["m_columns"] = array();
$proto126["m_columns"][] = "id";
$proto126["m_columns"][] = "nro_documento";
$proto126["m_columns"][] = "clave";
$proto126["m_columns"][] = "email";
$proto126["m_columns"][] = "groupid";
$proto126["m_columns"][] = "active";
$proto126["m_columns"][] = "reset_token";
$proto126["m_columns"][] = "reset_date";
$proto126["m_columns"][] = "fecha_alta";
$proto126["m_columns"][] = "llave";
$proto126["m_columns"][] = "estado_llave";
$proto126["m_columns"][] = "senadis";
$proto126["m_columns"][] = "trabajo_antes";
$proto126["m_columns"][] = "userpic";
$proto126["m_columns"][] = "personaid";
$proto126["m_columns"][] = "fullname";
$proto126["m_columns"][] = "username";
$proto126["m_columns"][] = "hash_generado";
$proto126["m_columns"][] = "adjunto_foto_perfil";
$proto126["m_columns"][] = "cantidad_omision_cambio_password";
$obj = new SQLTable($proto126);

$proto125["m_table"] = $obj;
$proto125["m_sql"] = "INNER JOIN bolsa_empleo.bolsa_users ON eportal.persons_docs.valor = bolsa_empleo.bolsa_users.nro_documento";
$proto125["m_alias"] = "";
$proto125["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto127=array();
$proto127["m_sql"] = "bolsa_empleo.bolsa_users.nro_documento = eportal.persons_docs.valor";
$proto127["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "nro_documento",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto127["m_column"]=$obj;
$proto127["m_contained"] = array();
$proto127["m_strCase"] = "= eportal.persons_docs.valor";
$proto127["m_havingmode"] = false;
$proto127["m_inBrackets"] = false;
$proto127["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto127);

$proto125["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto125);

$proto0["m_fromlist"][]=$obj;
												$proto129=array();
$proto129["m_link"] = "SQLL_INNERJOIN";
			$proto130=array();
$proto130["m_strName"] = "bolsa_empleo.vacancia_empresa";
$proto130["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto130["m_columns"] = array();
$proto130["m_columns"][] = "id_empresa_vacancia";
$proto130["m_columns"][] = "id_empresa_sucursal";
$proto130["m_columns"][] = "id_contacto_sucursal";
$proto130["m_columns"][] = "id_cidudad";
$proto130["m_columns"][] = "id_departamento";
$proto130["m_columns"][] = "id_vacancia";
$obj = new SQLTable($proto130);

$proto129["m_table"] = $obj;
$proto129["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia";
$proto129["m_alias"] = "";
$proto129["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto131=array();
$proto131["m_sql"] = "bolsa_empleo.vacancia_empresa.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto131["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto131["m_column"]=$obj;
$proto131["m_contained"] = array();
$proto131["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto131["m_havingmode"] = false;
$proto131["m_inBrackets"] = false;
$proto131["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto131);

$proto129["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto129);

$proto0["m_fromlist"][]=$obj;
												$proto133=array();
$proto133["m_link"] = "SQLL_INNERJOIN";
			$proto134=array();
$proto134["m_strName"] = "bolsa_empleo.vacancia_puesto";
$proto134["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto134["m_columns"] = array();
$proto134["m_columns"][] = "id_puesto_vacancia";
$proto134["m_columns"][] = "nombre_puesto";
$proto134["m_columns"][] = "salario";
$proto134["m_columns"][] = "tipo_contrato";
$proto134["m_columns"][] = "descripcion_puesto";
$proto134["m_columns"][] = "id_vacancia";
$proto134["m_columns"][] = "id_rubro";
$proto134["m_columns"][] = "anos_experiencia_vacancia";
$proto134["m_columns"][] = "fk_ocupacion_puesto";
$proto134["m_columns"][] = "meses_experiencia_vacancia";
$proto134["m_columns"][] = "horario_rotativo";
$proto134["m_columns"][] = "beneficios";
$proto134["m_columns"][] = "modalidad_trabajo";
$proto134["m_columns"][] = "descripcion_salario";
$proto134["m_columns"][] = "color";
$proto134["m_columns"][] = "tipo_remuneracion";
$obj = new SQLTable($proto134);

$proto133["m_table"] = $obj;
$proto133["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia";
$proto133["m_alias"] = "";
$proto133["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto135=array();
$proto135["m_sql"] = "bolsa_empleo.vacancia_puesto.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto135["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto135["m_column"]=$obj;
$proto135["m_contained"] = array();
$proto135["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto135["m_havingmode"] = false;
$proto135["m_inBrackets"] = false;
$proto135["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto135);

$proto133["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto133);

$proto0["m_fromlist"][]=$obj;
												$proto137=array();
$proto137["m_link"] = "SQLL_INNERJOIN";
			$proto138=array();
$proto138["m_strName"] = "bolsa_empleo.vista_ocupaciones";
$proto138["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto138["m_columns"] = array();
$proto138["m_columns"][] = "id_ocu_puest_clasi";
$proto138["m_columns"][] = "descripcion";
$proto138["m_columns"][] = "codigo";
$proto138["m_columns"][] = "color";
$obj = new SQLTable($proto138);

$proto137["m_table"] = $obj;
$proto137["m_sql"] = "INNER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi";
$proto137["m_alias"] = "";
$proto137["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto139=array();
$proto139["m_sql"] = "bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi = bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto139["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ocu_puest_clasi",
	"m_strTable" => "bolsa_empleo.vista_ocupaciones",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto139["m_column"]=$obj;
$proto139["m_contained"] = array();
$proto139["m_strCase"] = "= bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto139["m_havingmode"] = false;
$proto139["m_inBrackets"] = false;
$proto139["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto139);

$proto137["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto137);

$proto0["m_fromlist"][]=$obj;
												$proto141=array();
$proto141["m_link"] = "SQLL_INNERJOIN";
			$proto142=array();
$proto142["m_strName"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto142["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto142["m_columns"] = array();
$proto142["m_columns"][] = "id";
$proto142["m_columns"][] = "empresas_bolsa_id";
$proto142["m_columns"][] = "ruc";
$proto142["m_columns"][] = "legal";
$proto142["m_columns"][] = "fantasy";
$proto142["m_columns"][] = "city_id";
$proto142["m_columns"][] = "distrito_id";
$proto142["m_columns"][] = "tel";
$proto142["m_columns"][] = "email";
$proto142["m_columns"][] = "id_tipo_sucursal";
$proto142["m_columns"][] = "nro_patronal";
$proto142["m_columns"][] = "direccion";
$proto142["m_columns"][] = "fecha_creacion";
$obj = new SQLTable($proto142);

$proto141["m_table"] = $obj;
$proto141["m_sql"] = "INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id";
$proto141["m_alias"] = "";
$proto141["m_srcTableName"] = "bolsa_empleo.postulacion_convocado";
$proto143=array();
$proto143["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id = bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto143["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto143["m_column"]=$obj;
$proto143["m_contained"] = array();
$proto143["m_strCase"] = "= bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto143["m_havingmode"] = false;
$proto143["m_inBrackets"] = false;
$proto143["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto143);

$proto141["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto141);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto145=array();
						$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.persons_estado_civil_type",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto145["m_column"]=$obj;
$obj = new SQLGroupByItem($proto145);

$proto0["m_groupby"][]=$obj;
												$proto147=array();
						$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto147["m_column"]=$obj;
$obj = new SQLGroupByItem($proto147);

$proto0["m_groupby"][]=$obj;
												$proto149=array();
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto149["m_column"]=$obj;
$obj = new SQLGroupByItem($proto149);

$proto0["m_groupby"][]=$obj;
												$proto151=array();
						$obj = new SQLField(array(
	"m_strName" => "hash_generado",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto151["m_column"]=$obj;
$obj = new SQLGroupByItem($proto151);

$proto0["m_groupby"][]=$obj;
												$proto153=array();
						$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto153["m_column"]=$obj;
$obj = new SQLGroupByItem($proto153);

$proto0["m_groupby"][]=$obj;
												$proto155=array();
						$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto155["m_column"]=$obj;
$obj = new SQLGroupByItem($proto155);

$proto0["m_groupby"][]=$obj;
												$proto157=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto157["m_column"]=$obj;
$obj = new SQLGroupByItem($proto157);

$proto0["m_groupby"][]=$obj;
												$proto159=array();
						$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto159["m_column"]=$obj;
$obj = new SQLGroupByItem($proto159);

$proto0["m_groupby"][]=$obj;
												$proto161=array();
						$obj = new SQLField(array(
	"m_strName" => "legal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto161["m_column"]=$obj;
$obj = new SQLGroupByItem($proto161);

$proto0["m_groupby"][]=$obj;
												$proto163=array();
						$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.vista_ocupaciones",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto163["m_column"]=$obj;
$obj = new SQLGroupByItem($proto163);

$proto0["m_groupby"][]=$obj;
												$proto165=array();
						$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto165["m_column"]=$obj;
$obj = new SQLGroupByItem($proto165);

$proto0["m_groupby"][]=$obj;
												$proto167=array();
						$obj = new SQLField(array(
	"m_strName" => "id_estado",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto167["m_column"]=$obj;
$obj = new SQLGroupByItem($proto167);

$proto0["m_groupby"][]=$obj;
												$proto169=array();
						$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto169["m_column"]=$obj;
$obj = new SQLGroupByItem($proto169);

$proto0["m_groupby"][]=$obj;
												$proto171=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto171["m_column"]=$obj;
$obj = new SQLGroupByItem($proto171);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto173=array();
						$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_convocado"
));

$proto173["m_column"]=$obj;
$proto173["m_bAsc"] = 1;
$proto173["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto173);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="bolsa_empleo.postulacion_convocado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_postulacion_convocado = createSqlQuery_postulacion_convocado();


	
		;

																					

$tdatapostulacion_convocado[".sqlquery"] = $queryData_postulacion_convocado;



include_once(getabspath("include/postulacion_convocado_events.php"));
$tdatapostulacion_convocado[".hasEvents"] = true;

?>
<?php
$tdatapostulacion_seleccionado = array();
$tdatapostulacion_seleccionado[".searchableFields"] = array();
$tdatapostulacion_seleccionado[".ShortName"] = "postulacion_seleccionado";
$tdatapostulacion_seleccionado[".OwnerID"] = "";
$tdatapostulacion_seleccionado[".OriginalTable"] = "bolsa_empleo.postulacion";


$tdatapostulacion_seleccionado[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list_reacomodado\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapostulacion_seleccionado[".originalPagesByType"] = $tdatapostulacion_seleccionado[".pagesByType"];
$tdatapostulacion_seleccionado[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list_reacomodado\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapostulacion_seleccionado[".originalPages"] = $tdatapostulacion_seleccionado[".pages"];
$tdatapostulacion_seleccionado[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapostulacion_seleccionado[".originalDefaultPages"] = $tdatapostulacion_seleccionado[".defaultPages"];

//	field labels
$fieldLabelspostulacion_seleccionado = array();
$fieldToolTipspostulacion_seleccionado = array();
$pageTitlespostulacion_seleccionado = array();
$placeHolderspostulacion_seleccionado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspostulacion_seleccionado["Spanish"] = array();
	$fieldToolTipspostulacion_seleccionado["Spanish"] = array();
	$placeHolderspostulacion_seleccionado["Spanish"] = array();
	$pageTitlespostulacion_seleccionado["Spanish"] = array();
	$fieldLabelspostulacion_seleccionado["Spanish"]["id_vacancia"] = "Id Vacancia";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["id_vacancia"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["id_vacancia"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["fechanac"] = "<p><strong>&nbsp;Fechanac:</strong></p>";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["fechanac"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["fechanac"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["sexo"] = "<p>&nbsp;<strong>Sexo:</strong></p>";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["sexo"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["sexo"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["domicilio"] = "<p>&nbsp;<strong>Domicilio:</strong></p>";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["domicilio"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["domicilio"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["ciudad"] = "Ciudad:";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["ciudad"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["ciudad"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["distrito"] = " Departamento:";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["distrito"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["distrito"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["estado_civil"] = "<p><strong>&nbsp;Estado Civil:</strong></p>";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["estado_civil"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["estado_civil"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["cedula"] = "Nro. Documento";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["cedula"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["cedula"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["telefono"] = "<p><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAQCAYAAAAvf+5AAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAB1SURBVHgB7dKxDYAgEIXhe0R7R8AYDdo5kTO4gSO4kSPY2skG2hvuhB6DjZ1/QveFK+5QNWZgUTORFBTPKsiUsWCSi3trNxtT2hjNDiuVdSuUKBhFL/vhR9BvYQ8vCZ9CWXdH6ijgsGRCPCLH4sfp6FcOZzA3Xk0rUBRoB4MAAAAASUVORK5CYII=\">&nbsp;<strong>Telefono:</strong></p>";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["telefono"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["telefono"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["pais"] = "<p>&nbsp;<strong>Pais:</strong></p>";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["pais"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["pais"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["nombre_completo"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["nombre_completo"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["hash_generado"] = "Hash Generado";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["hash_generado"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["hash_generado"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["empresa"] = "Empresa";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["empresa"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["empresa"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["descri_empresa"] = "Descri Empresa";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["descri_empresa"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["descri_empresa"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["id_postulacion"] = "Postulacion";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["id_postulacion"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["id_postulacion"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["id_estado"] = "Estado Actual";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["id_estado"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["id_estado"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["id_vacancias"] = "Id Vacancias";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["id_vacancias"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["id_vacancias"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["persona_id"] = "Persona Id";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["persona_id"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["persona_id"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["test_psicotecnico"] = "Test Psicotécnico";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["test_psicotecnico"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["test_psicotecnico"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["evaluacion"] = "Evaluacion";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["evaluacion"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["evaluacion"] = "";
	$fieldLabelspostulacion_seleccionado["Spanish"]["es_programa"] = "Es Programa";
	$fieldToolTipspostulacion_seleccionado["Spanish"]["es_programa"] = "";
	$placeHolderspostulacion_seleccionado["Spanish"]["es_programa"] = "";
	$pageTitlespostulacion_seleccionado["Spanish"]["list_reacomodado"] = "Seleccionados";
	if (count($fieldToolTipspostulacion_seleccionado["Spanish"]))
		$tdatapostulacion_seleccionado[".isUseToolTips"] = true;
}


	$tdatapostulacion_seleccionado[".NCSearch"] = true;



$tdatapostulacion_seleccionado[".shortTableName"] = "postulacion_seleccionado";
$tdatapostulacion_seleccionado[".nSecOptions"] = 0;

$tdatapostulacion_seleccionado[".mainTableOwnerID"] = "";
$tdatapostulacion_seleccionado[".entityType"] = 1;
$tdatapostulacion_seleccionado[".connId"] = "eportal_at_192_168_70_170";


$tdatapostulacion_seleccionado[".strOriginalTableName"] = "bolsa_empleo.postulacion";

	



$tdatapostulacion_seleccionado[".showAddInPopup"] = false;

$tdatapostulacion_seleccionado[".showEditInPopup"] = false;

$tdatapostulacion_seleccionado[".showViewInPopup"] = false;

$tdatapostulacion_seleccionado[".listAjax"] = false;
//	temporary
//$tdatapostulacion_seleccionado[".listAjax"] = false;

	$tdatapostulacion_seleccionado[".audit"] = true;

	$tdatapostulacion_seleccionado[".locking"] = false;


$pages = $tdatapostulacion_seleccionado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapostulacion_seleccionado[".edit"] = true;
	$tdatapostulacion_seleccionado[".afterEditAction"] = 1;
	$tdatapostulacion_seleccionado[".closePopupAfterEdit"] = 1;
	$tdatapostulacion_seleccionado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapostulacion_seleccionado[".add"] = true;
$tdatapostulacion_seleccionado[".afterAddAction"] = 1;
$tdatapostulacion_seleccionado[".closePopupAfterAdd"] = 1;
$tdatapostulacion_seleccionado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapostulacion_seleccionado[".list"] = true;
}



$tdatapostulacion_seleccionado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapostulacion_seleccionado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapostulacion_seleccionado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapostulacion_seleccionado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapostulacion_seleccionado[".printFriendly"] = true;
}



$tdatapostulacion_seleccionado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapostulacion_seleccionado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapostulacion_seleccionado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapostulacion_seleccionado[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																					

$tdatapostulacion_seleccionado[".ajaxCodeSnippetAdded"] = false;

$tdatapostulacion_seleccionado[".buttonsAdded"] = false;

$tdatapostulacion_seleccionado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapostulacion_seleccionado[".isUseTimeForSearch"] = false;


$tdatapostulacion_seleccionado[".badgeColor"] = "B22222";


$tdatapostulacion_seleccionado[".allSearchFields"] = array();
$tdatapostulacion_seleccionado[".filterFields"] = array();
$tdatapostulacion_seleccionado[".requiredSearchFields"] = array();

$tdatapostulacion_seleccionado[".googleLikeFields"] = array();
$tdatapostulacion_seleccionado[".googleLikeFields"][] = "nombre_completo";
$tdatapostulacion_seleccionado[".googleLikeFields"][] = "ciudad";
$tdatapostulacion_seleccionado[".googleLikeFields"][] = "distrito";
$tdatapostulacion_seleccionado[".googleLikeFields"][] = "cedula";
$tdatapostulacion_seleccionado[".googleLikeFields"][] = "empresa";
$tdatapostulacion_seleccionado[".googleLikeFields"][] = "id_postulacion";
$tdatapostulacion_seleccionado[".googleLikeFields"][] = "id_estado";
$tdatapostulacion_seleccionado[".googleLikeFields"][] = "id_vacancias";
$tdatapostulacion_seleccionado[".googleLikeFields"][] = "persona_id";
$tdatapostulacion_seleccionado[".googleLikeFields"][] = "test_psicotecnico";
$tdatapostulacion_seleccionado[".googleLikeFields"][] = "evaluacion";
$tdatapostulacion_seleccionado[".googleLikeFields"][] = "es_programa";



$tdatapostulacion_seleccionado[".tableType"] = "list";

$tdatapostulacion_seleccionado[".printerPageOrientation"] = 0;
$tdatapostulacion_seleccionado[".nPrinterPageScale"] = 100;

$tdatapostulacion_seleccionado[".nPrinterSplitRecords"] = 40;

$tdatapostulacion_seleccionado[".geocodingEnabled"] = false;










$tdatapostulacion_seleccionado[".pageSize"] = 10;

$tdatapostulacion_seleccionado[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY bolsa_empleo.postulacion.id_postulacion";
$tdatapostulacion_seleccionado[".strOrderBy"] = $tstrOrderBy;

$tdatapostulacion_seleccionado[".orderindexes"] = array();
			$tdatapostulacion_seleccionado[".orderindexes"][] = array(15, (1 ? "ASC" : "DESC"), "bolsa_empleo.postulacion.id_postulacion");


$tdatapostulacion_seleccionado[".sqlHead"] = "SELECT eportal.persons.nombre || ' ' || eportal.persons.apellidos AS nombre_completo,  eportal.persons.fechanac,  eportal.persons.sexo,  eportal.persons.domicilio,  eportal.persons.city_id AS ciudad,  eportal.persons.distrito_id AS distrito,  eportal.persons.nacionalidad AS pais,  eportal.persons_estado_civil_type.name AS estado_civil,  eportal.persons_docs.valor AS cedula,  STRING_AGG(eportal.persons_phones.phone, ', ') AS telefono,  bolsa_empleo.postulacion.id_vacancia,  bolsa_empleo.bolsa_users.hash_generado,  bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal AS empresa,  ' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion AS descri_empresa,  bolsa_empleo.postulacion.id_postulacion,  bolsa_empleo.postulacion.id_estado,  bolsa_empleo.vacancia.id_vacancias,  bolsa_empleo.postulacion.fk_personaid AS persona_id,  (SELECT  afile1.archivo   from bolsa_empleo.archivo afile1   WHERE afile1.person_id=bolsa_empleo.postulacion.fk_personaid          and afile1.id_tipo_archivo  = 2  order by afile1.fecha_creacion desc  limit 1) as test_psicotecnico,  (select afile.archivo  FROM  bolsa_empleo.archivo afile   WHERE afile.person_id=bolsa_empleo.postulacion.fk_personaid          and afile.id_tipo_archivo  = 1           and afile.postulacion_id::int4 =bolsa_empleo.postulacion.id_postulacion  order by afile.fecha_creacion desc  limit 1) as evaluacion,  (select fe.es_programa from bolsa_empleo.feria_empleo fe   where fe.id_feria_empleo = bolsa_empleo.vacancia.fk_id_feria_empleo  ) as es_programa";
$tdatapostulacion_seleccionado[".sqlFrom"] = "FROM bolsa_empleo.postulacion  INNER JOIN bolsa_empleo.vacancia ON bolsa_empleo.postulacion.id_vacancia = bolsa_empleo.vacancia.id_vacancias  INNER JOIN eportal.persons ON bolsa_empleo.postulacion.fk_personaid = eportal.persons.id  LEFT OUTER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id  LEFT OUTER JOIN eportal.persons_estado_civil_type ON eportal.persons.estado_civil = eportal.persons_estado_civil_type.id  INNER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id  LEFT OUTER JOIN eportal.persons_phones ON eportal.persons.id = eportal.persons_phones.person_id  INNER JOIN bolsa_empleo.bolsa_users ON eportal.persons_docs.valor = bolsa_empleo.bolsa_users.nro_documento  INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia  INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia  INNER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id";
$tdatapostulacion_seleccionado[".sqlWhereExpr"] = "(bolsa_empleo.postulacion.id_estado = 2)";
$tdatapostulacion_seleccionado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapostulacion_seleccionado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapostulacion_seleccionado[".arrGroupsPerPage"] = $arrGPP;

$tdatapostulacion_seleccionado[".highlightSearchResults"] = true;

$tableKeyspostulacion_seleccionado = array();
$tableKeyspostulacion_seleccionado[] = "id_postulacion";
$tdatapostulacion_seleccionado[".Keys"] = $tableKeyspostulacion_seleccionado;


$tdatapostulacion_seleccionado[".hideMobileList"] = array();




//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","nombre_completo");
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


	$tdatapostulacion_seleccionado["nombre_completo"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "nombre_completo";
//	fechanac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fechanac";
	$fdata["GoodName"] = "fechanac";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","fechanac");
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


	$tdatapostulacion_seleccionado["fechanac"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "fechanac";
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","sexo");
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


	$tdatapostulacion_seleccionado["sexo"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "sexo";
//	domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "domicilio";
	$fdata["GoodName"] = "domicilio";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","domicilio");
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


	$tdatapostulacion_seleccionado["domicilio"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "domicilio";
//	ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ciudad";
	$fdata["GoodName"] = "ciudad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","ciudad");
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


	$tdatapostulacion_seleccionado["ciudad"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "ciudad";
//	distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "distrito";
	$fdata["GoodName"] = "distrito";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","distrito");
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


	$tdatapostulacion_seleccionado["distrito"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "distrito";
//	pais
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pais";
	$fdata["GoodName"] = "pais";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","pais");
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


	$tdatapostulacion_seleccionado["pais"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "pais";
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "eportal.persons_estado_civil_type";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","estado_civil");
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


	$tdatapostulacion_seleccionado["estado_civil"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "estado_civil";
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "eportal.persons_docs";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","cedula");
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


	$tdatapostulacion_seleccionado["cedula"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "cedula";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","telefono");
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


	$tdatapostulacion_seleccionado["telefono"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "telefono";
//	id_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "id_vacancia";
	$fdata["GoodName"] = "id_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","id_vacancia");
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


	$tdatapostulacion_seleccionado["id_vacancia"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "id_vacancia";
//	hash_generado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "hash_generado";
	$fdata["GoodName"] = "hash_generado";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","hash_generado");
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


	$tdatapostulacion_seleccionado["hash_generado"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "hash_generado";
//	empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "empresa";
	$fdata["GoodName"] = "empresa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","empresa");
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


	$tdatapostulacion_seleccionado["empresa"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "empresa";
//	descri_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "descri_empresa";
	$fdata["GoodName"] = "descri_empresa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","descri_empresa");
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


	$tdatapostulacion_seleccionado["descri_empresa"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "descri_empresa";
//	id_postulacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "id_postulacion";
	$fdata["GoodName"] = "id_postulacion";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","id_postulacion");
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


	$tdatapostulacion_seleccionado["id_postulacion"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "id_postulacion";
//	id_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "id_estado";
	$fdata["GoodName"] = "id_estado";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","id_estado");
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


	$tdatapostulacion_seleccionado["id_estado"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "id_estado";
//	id_vacancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "id_vacancias";
	$fdata["GoodName"] = "id_vacancias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","id_vacancias");
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


	$tdatapostulacion_seleccionado["id_vacancias"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "id_vacancias";
//	persona_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "persona_id";
	$fdata["GoodName"] = "persona_id";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","persona_id");
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


	$tdatapostulacion_seleccionado["persona_id"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "persona_id";
//	test_psicotecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "test_psicotecnico";
	$fdata["GoodName"] = "test_psicotecnico";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","test_psicotecnico");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "test_psicotecnico";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(SELECT  afile1.archivo   from bolsa_empleo.archivo afile1   WHERE afile1.person_id=bolsa_empleo.postulacion.fk_personaid          and afile1.id_tipo_archivo  = 2  order by afile1.fecha_creacion desc  limit 1)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatapostulacion_seleccionado["test_psicotecnico"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "test_psicotecnico";
//	evaluacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "evaluacion";
	$fdata["GoodName"] = "evaluacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","evaluacion");
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


	$tdatapostulacion_seleccionado["evaluacion"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "evaluacion";
//	es_programa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "es_programa";
	$fdata["GoodName"] = "es_programa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_seleccionado","es_programa");
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


	$tdatapostulacion_seleccionado["es_programa"] = $fdata;
		$tdatapostulacion_seleccionado[".searchableFields"][] = "es_programa";


$tables_data["bolsa_empleo.postulacion_seleccionado"]=&$tdatapostulacion_seleccionado;
$field_labels["bolsa_empleo_postulacion_seleccionado"] = &$fieldLabelspostulacion_seleccionado;
$fieldToolTips["bolsa_empleo_postulacion_seleccionado"] = &$fieldToolTipspostulacion_seleccionado;
$placeHolders["bolsa_empleo_postulacion_seleccionado"] = &$placeHolderspostulacion_seleccionado;
$page_titles["bolsa_empleo_postulacion_seleccionado"] = &$pageTitlespostulacion_seleccionado;


changeTextControlsToDate( "bolsa_empleo.postulacion_seleccionado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.postulacion_seleccionado"] = array();
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


		
	$detailsTablesData["bolsa_empleo.postulacion_seleccionado"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.postulacion_seleccionado"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.postulacion_seleccionado"][$dIndex]["masterKeys"][]="id_postulacion";

				$detailsTablesData["bolsa_empleo.postulacion_seleccionado"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.postulacion_seleccionado"][$dIndex]["detailKeys"][]="id_postulacion";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.postulacion_seleccionado"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.postulacion_seleccionado"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.postulacion_seleccionado"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion_seleccionado"][0]["masterKeys"][]="id_vacancias";
				$masterTablesData["bolsa_empleo.postulacion_seleccionado"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion_seleccionado"][0]["detailKeys"][]="id_vacancia";
		
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
					$masterTablesData["bolsa_empleo.postulacion_seleccionado"][1] = $masterParams;
				$masterTablesData["bolsa_empleo.postulacion_seleccionado"][1]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion_seleccionado"][1]["masterKeys"][]="id_estado_postulacion";
				$masterTablesData["bolsa_empleo.postulacion_seleccionado"][1]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion_seleccionado"][1]["detailKeys"][]="id_estado";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_postulacion_seleccionado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eportal.persons.nombre || ' ' || eportal.persons.apellidos AS nombre_completo,  eportal.persons.fechanac,  eportal.persons.sexo,  eportal.persons.domicilio,  eportal.persons.city_id AS ciudad,  eportal.persons.distrito_id AS distrito,  eportal.persons.nacionalidad AS pais,  eportal.persons_estado_civil_type.name AS estado_civil,  eportal.persons_docs.valor AS cedula,  STRING_AGG(eportal.persons_phones.phone, ', ') AS telefono,  bolsa_empleo.postulacion.id_vacancia,  bolsa_empleo.bolsa_users.hash_generado,  bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal AS empresa,  ' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion AS descri_empresa,  bolsa_empleo.postulacion.id_postulacion,  bolsa_empleo.postulacion.id_estado,  bolsa_empleo.vacancia.id_vacancias,  bolsa_empleo.postulacion.fk_personaid AS persona_id,  (SELECT  afile1.archivo   from bolsa_empleo.archivo afile1   WHERE afile1.person_id=bolsa_empleo.postulacion.fk_personaid          and afile1.id_tipo_archivo  = 2  order by afile1.fecha_creacion desc  limit 1) as test_psicotecnico,  (select afile.archivo  FROM  bolsa_empleo.archivo afile   WHERE afile.person_id=bolsa_empleo.postulacion.fk_personaid          and afile.id_tipo_archivo  = 1           and afile.postulacion_id::int4 =bolsa_empleo.postulacion.id_postulacion  order by afile.fecha_creacion desc  limit 1) as evaluacion,  (select fe.es_programa from bolsa_empleo.feria_empleo fe   where fe.id_feria_empleo = bolsa_empleo.vacancia.fk_id_feria_empleo  ) as es_programa";
$proto0["m_strFrom"] = "FROM bolsa_empleo.postulacion  INNER JOIN bolsa_empleo.vacancia ON bolsa_empleo.postulacion.id_vacancia = bolsa_empleo.vacancia.id_vacancias  INNER JOIN eportal.persons ON bolsa_empleo.postulacion.fk_personaid = eportal.persons.id  LEFT OUTER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id  LEFT OUTER JOIN eportal.persons_estado_civil_type ON eportal.persons.estado_civil = eportal.persons_estado_civil_type.id  INNER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id  LEFT OUTER JOIN eportal.persons_phones ON eportal.persons.id = eportal.persons_phones.person_id  INNER JOIN bolsa_empleo.bolsa_users ON eportal.persons_docs.valor = bolsa_empleo.bolsa_users.nro_documento  INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia  INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia  INNER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id";
$proto0["m_strWhere"] = "(bolsa_empleo.postulacion.id_estado = 2)";
$proto0["m_strOrderBy"] = "ORDER BY bolsa_empleo.postulacion.id_postulacion";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "bolsa_empleo.postulacion.id_estado = 2";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_estado",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 2";
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
$proto6["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "nombre_completo";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fechanac",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto8["m_sql"] = "eportal.persons.fechanac";
$proto8["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto10["m_sql"] = "eportal.persons.sexo";
$proto10["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "domicilio",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto12["m_sql"] = "eportal.persons.domicilio";
$proto12["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "city_id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto14["m_sql"] = "eportal.persons.city_id";
$proto14["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "ciudad";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "distrito_id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto16["m_sql"] = "eportal.persons.distrito_id";
$proto16["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "distrito";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto18["m_sql"] = "eportal.persons.nacionalidad";
$proto18["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "pais";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.persons_estado_civil_type",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto20["m_sql"] = "eportal.persons_estado_civil_type.name";
$proto20["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "estado_civil";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto22["m_sql"] = "eportal.persons_docs.valor";
$proto22["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
$proto24["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "telefono";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto28["m_sql"] = "bolsa_empleo.postulacion.id_vacancia";
$proto28["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "hash_generado",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto30["m_sql"] = "bolsa_empleo.bolsa_users.hash_generado";
$proto30["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal"
));

$proto32["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal";
$proto32["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "empresa";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion"
));

$proto34["m_sql"] = "' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion";
$proto34["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "descri_empresa";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto36["m_sql"] = "bolsa_empleo.postulacion.id_postulacion";
$proto36["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "id_estado",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto38["m_sql"] = "bolsa_empleo.postulacion.id_estado";
$proto38["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto40["m_sql"] = "bolsa_empleo.vacancia.id_vacancias";
$proto40["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_personaid",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto42["m_sql"] = "bolsa_empleo.postulacion.fk_personaid";
$proto42["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
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
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
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
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto55["m_sql"] = "afile1.archivo";
$proto55["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto45["m_fieldlist"][]=$obj;
$proto45["m_fromlist"] = array();
												$proto57=array();
$proto57["m_link"] = "SQLL_MAIN";
			$proto58=array();
$proto58["m_strName"] = "bolsa_empleo.archivo";
$proto58["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
$proto57["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto61["m_column"]=$obj;
$proto61["m_bAsc"] = 0;
$proto61["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto61);

$proto45["m_orderby"][]=$obj;					
$proto45["m_srcTableName"]="bolsa_empleo.postulacion_seleccionado";		
$obj = new SQLQuery($proto45);

$proto44["m_sql"] = "(SELECT  afile1.archivo   from bolsa_empleo.archivo afile1   WHERE afile1.person_id=bolsa_empleo.postulacion.fk_personaid          and afile1.id_tipo_archivo  = 2  order by afile1.fecha_creacion desc  limit 1)";
$proto44["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
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
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
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
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto76["m_sql"] = "afile.archivo";
$proto76["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto64["m_fieldlist"][]=$obj;
$proto64["m_fromlist"] = array();
												$proto78=array();
$proto78["m_link"] = "SQLL_MAIN";
			$proto79=array();
$proto79["m_strName"] = "bolsa_empleo.archivo";
$proto79["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
$proto78["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto82["m_column"]=$obj;
$proto82["m_bAsc"] = 0;
$proto82["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto82);

$proto64["m_orderby"][]=$obj;					
$proto64["m_srcTableName"]="bolsa_empleo.postulacion_seleccionado";		
$obj = new SQLQuery($proto64);

$proto63["m_sql"] = "(select afile.archivo  FROM  bolsa_empleo.archivo afile   WHERE afile.person_id=bolsa_empleo.postulacion.fk_personaid          and afile.id_tipo_archivo  = 1           and afile.postulacion_id::int4 =bolsa_empleo.postulacion.id_postulacion  order by afile.fecha_creacion desc  limit 1)";
$proto63["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
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
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto91["m_sql"] = "fe.es_programa";
$proto91["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto85["m_fieldlist"][]=$obj;
$proto85["m_fromlist"] = array();
												$proto93=array();
$proto93["m_link"] = "SQLL_MAIN";
			$proto94=array();
$proto94["m_strName"] = "bolsa_empleo.feria_empleo";
$proto94["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
$proto93["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
$proto85["m_srcTableName"]="bolsa_empleo.postulacion_seleccionado";		
$obj = new SQLQuery($proto85);

$proto84["m_sql"] = "(select fe.es_programa from bolsa_empleo.feria_empleo fe   where fe.id_feria_empleo = bolsa_empleo.vacancia.fk_id_feria_empleo  )";
$proto84["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "es_programa";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto97=array();
$proto97["m_link"] = "SQLL_MAIN";
			$proto98=array();
$proto98["m_strName"] = "bolsa_empleo.postulacion";
$proto98["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
$proto97["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
$proto102["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
$proto101["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto103=array();
$proto103["m_sql"] = "bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.postulacion.id_vacancia";
$proto103["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
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
$proto106["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
$proto105["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto107=array();
$proto107["m_sql"] = "eportal.persons.id = bolsa_empleo.postulacion.fk_personaid";
$proto107["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
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
$proto110["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
$proto109["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto111=array();
$proto111["m_sql"] = "eportal.city.id = eportal.persons.city_id";
$proto111["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
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
$proto114["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto114["m_columns"] = array();
$proto114["m_columns"][] = "id";
$proto114["m_columns"][] = "short";
$proto114["m_columns"][] = "name";
$obj = new SQLTable($proto114);

$proto113["m_table"] = $obj;
$proto113["m_sql"] = "LEFT OUTER JOIN eportal.persons_estado_civil_type ON eportal.persons.estado_civil = eportal.persons_estado_civil_type.id";
$proto113["m_alias"] = "";
$proto113["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto115=array();
$proto115["m_sql"] = "eportal.persons_estado_civil_type.id = eportal.persons.estado_civil";
$proto115["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons_estado_civil_type",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
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
$proto118["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto118["m_columns"] = array();
$proto118["m_columns"][] = "id";
$proto118["m_columns"][] = "doctype_id";
$proto118["m_columns"][] = "person_id";
$proto118["m_columns"][] = "valor";
$obj = new SQLTable($proto118);

$proto117["m_table"] = $obj;
$proto117["m_sql"] = "INNER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id";
$proto117["m_alias"] = "";
$proto117["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto119=array();
$proto119["m_sql"] = "eportal.persons_docs.person_id = eportal.persons.id";
$proto119["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
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
$proto122["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto122["m_columns"] = array();
$proto122["m_columns"][] = "id";
$proto122["m_columns"][] = "person_id";
$proto122["m_columns"][] = "type";
$proto122["m_columns"][] = "phone";
$obj = new SQLTable($proto122);

$proto121["m_table"] = $obj;
$proto121["m_sql"] = "LEFT OUTER JOIN eportal.persons_phones ON eportal.persons.id = eportal.persons_phones.person_id";
$proto121["m_alias"] = "";
$proto121["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto123=array();
$proto123["m_sql"] = "eportal.persons_phones.person_id = eportal.persons.id";
$proto123["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "eportal.persons_phones",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
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
$proto126["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
$proto125["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto127=array();
$proto127["m_sql"] = "bolsa_empleo.bolsa_users.nro_documento = eportal.persons_docs.valor";
$proto127["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "nro_documento",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
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
$proto130["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
$proto129["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto131=array();
$proto131["m_sql"] = "bolsa_empleo.vacancia_empresa.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto131["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
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
$proto134["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
$proto133["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto135=array();
$proto135["m_sql"] = "bolsa_empleo.vacancia_puesto.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto135["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
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
$proto138["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto138["m_columns"] = array();
$proto138["m_columns"][] = "id_ocu_puest_clasi";
$proto138["m_columns"][] = "descripcion";
$proto138["m_columns"][] = "codigo";
$proto138["m_columns"][] = "color";
$obj = new SQLTable($proto138);

$proto137["m_table"] = $obj;
$proto137["m_sql"] = "INNER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi";
$proto137["m_alias"] = "";
$proto137["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto139=array();
$proto139["m_sql"] = "bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi = bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto139["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ocu_puest_clasi",
	"m_strTable" => "bolsa_empleo.vista_ocupaciones",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
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
$proto142["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
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
$proto141["m_srcTableName"] = "bolsa_empleo.postulacion_seleccionado";
$proto143=array();
$proto143["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id = bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto143["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
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
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto145["m_column"]=$obj;
$obj = new SQLGroupByItem($proto145);

$proto0["m_groupby"][]=$obj;
												$proto147=array();
						$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto147["m_column"]=$obj;
$obj = new SQLGroupByItem($proto147);

$proto0["m_groupby"][]=$obj;
												$proto149=array();
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto149["m_column"]=$obj;
$obj = new SQLGroupByItem($proto149);

$proto0["m_groupby"][]=$obj;
												$proto151=array();
						$obj = new SQLField(array(
	"m_strName" => "hash_generado",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto151["m_column"]=$obj;
$obj = new SQLGroupByItem($proto151);

$proto0["m_groupby"][]=$obj;
												$proto153=array();
						$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto153["m_column"]=$obj;
$obj = new SQLGroupByItem($proto153);

$proto0["m_groupby"][]=$obj;
												$proto155=array();
						$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto155["m_column"]=$obj;
$obj = new SQLGroupByItem($proto155);

$proto0["m_groupby"][]=$obj;
												$proto157=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto157["m_column"]=$obj;
$obj = new SQLGroupByItem($proto157);

$proto0["m_groupby"][]=$obj;
												$proto159=array();
						$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto159["m_column"]=$obj;
$obj = new SQLGroupByItem($proto159);

$proto0["m_groupby"][]=$obj;
												$proto161=array();
						$obj = new SQLField(array(
	"m_strName" => "legal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto161["m_column"]=$obj;
$obj = new SQLGroupByItem($proto161);

$proto0["m_groupby"][]=$obj;
												$proto163=array();
						$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.vista_ocupaciones",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto163["m_column"]=$obj;
$obj = new SQLGroupByItem($proto163);

$proto0["m_groupby"][]=$obj;
												$proto165=array();
						$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto165["m_column"]=$obj;
$obj = new SQLGroupByItem($proto165);

$proto0["m_groupby"][]=$obj;
												$proto167=array();
						$obj = new SQLField(array(
	"m_strName" => "id_estado",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto167["m_column"]=$obj;
$obj = new SQLGroupByItem($proto167);

$proto0["m_groupby"][]=$obj;
												$proto169=array();
						$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto169["m_column"]=$obj;
$obj = new SQLGroupByItem($proto169);

$proto0["m_groupby"][]=$obj;
												$proto171=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto171["m_column"]=$obj;
$obj = new SQLGroupByItem($proto171);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto173=array();
						$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_seleccionado"
));

$proto173["m_column"]=$obj;
$proto173["m_bAsc"] = 1;
$proto173["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto173);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="bolsa_empleo.postulacion_seleccionado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_postulacion_seleccionado = createSqlQuery_postulacion_seleccionado();


	
		;

																					

$tdatapostulacion_seleccionado[".sqlquery"] = $queryData_postulacion_seleccionado;



include_once(getabspath("include/postulacion_seleccionado_events.php"));
$tdatapostulacion_seleccionado[".hasEvents"] = true;

?>
<?php
$tdatapostulacion_postulado = array();
$tdatapostulacion_postulado[".searchableFields"] = array();
$tdatapostulacion_postulado[".ShortName"] = "postulacion_postulado";
$tdatapostulacion_postulado[".OwnerID"] = "";
$tdatapostulacion_postulado[".OriginalTable"] = "bolsa_empleo.postulacion";


$tdatapostulacion_postulado[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapostulacion_postulado[".originalPagesByType"] = $tdatapostulacion_postulado[".pagesByType"];
$tdatapostulacion_postulado[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapostulacion_postulado[".originalPages"] = $tdatapostulacion_postulado[".pages"];
$tdatapostulacion_postulado[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapostulacion_postulado[".originalDefaultPages"] = $tdatapostulacion_postulado[".defaultPages"];

//	field labels
$fieldLabelspostulacion_postulado = array();
$fieldToolTipspostulacion_postulado = array();
$pageTitlespostulacion_postulado = array();
$placeHolderspostulacion_postulado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspostulacion_postulado["Spanish"] = array();
	$fieldToolTipspostulacion_postulado["Spanish"] = array();
	$placeHolderspostulacion_postulado["Spanish"] = array();
	$pageTitlespostulacion_postulado["Spanish"] = array();
	$fieldLabelspostulacion_postulado["Spanish"]["id_vacancia"] = "Id Vacancia";
	$fieldToolTipspostulacion_postulado["Spanish"]["id_vacancia"] = "";
	$placeHolderspostulacion_postulado["Spanish"]["id_vacancia"] = "";
	$fieldLabelspostulacion_postulado["Spanish"]["fechanac"] = "<p><strong>&nbsp;Fechanac:</strong></p>";
	$fieldToolTipspostulacion_postulado["Spanish"]["fechanac"] = "";
	$placeHolderspostulacion_postulado["Spanish"]["fechanac"] = "";
	$fieldLabelspostulacion_postulado["Spanish"]["sexo"] = "<p>&nbsp;<strong>Sexo:</strong></p>";
	$fieldToolTipspostulacion_postulado["Spanish"]["sexo"] = "";
	$placeHolderspostulacion_postulado["Spanish"]["sexo"] = "";
	$fieldLabelspostulacion_postulado["Spanish"]["domicilio"] = "<p>&nbsp;<strong>Domicilio:</strong></p>";
	$fieldToolTipspostulacion_postulado["Spanish"]["domicilio"] = "";
	$placeHolderspostulacion_postulado["Spanish"]["domicilio"] = "";
	$fieldLabelspostulacion_postulado["Spanish"]["ciudad"] = "Ciudad:";
	$fieldToolTipspostulacion_postulado["Spanish"]["ciudad"] = "";
	$placeHolderspostulacion_postulado["Spanish"]["ciudad"] = "";
	$fieldLabelspostulacion_postulado["Spanish"]["distrito"] = " Departamento:";
	$fieldToolTipspostulacion_postulado["Spanish"]["distrito"] = "";
	$placeHolderspostulacion_postulado["Spanish"]["distrito"] = "";
	$fieldLabelspostulacion_postulado["Spanish"]["estado_civil"] = "<p><strong>&nbsp;Estado Civil:</strong></p>";
	$fieldToolTipspostulacion_postulado["Spanish"]["estado_civil"] = "";
	$placeHolderspostulacion_postulado["Spanish"]["estado_civil"] = "";
	$fieldLabelspostulacion_postulado["Spanish"]["cedula"] = "Nro. Documento";
	$fieldToolTipspostulacion_postulado["Spanish"]["cedula"] = "";
	$placeHolderspostulacion_postulado["Spanish"]["cedula"] = "";
	$fieldLabelspostulacion_postulado["Spanish"]["telefono"] = "<p><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAQCAYAAAAvf+5AAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAB1SURBVHgB7dKxDYAgEIXhe0R7R8AYDdo5kTO4gSO4kSPY2skG2hvuhB6DjZ1/QveFK+5QNWZgUTORFBTPKsiUsWCSi3trNxtT2hjNDiuVdSuUKBhFL/vhR9BvYQ8vCZ9CWXdH6ijgsGRCPCLH4sfp6FcOZzA3Xk0rUBRoB4MAAAAASUVORK5CYII=\">&nbsp;<strong>Telefono:</strong></p>";
	$fieldToolTipspostulacion_postulado["Spanish"]["telefono"] = "";
	$placeHolderspostulacion_postulado["Spanish"]["telefono"] = "";
	$fieldLabelspostulacion_postulado["Spanish"]["pais"] = "<p>&nbsp;<strong>Pais:</strong></p>";
	$fieldToolTipspostulacion_postulado["Spanish"]["pais"] = "";
	$placeHolderspostulacion_postulado["Spanish"]["pais"] = "";
	$fieldLabelspostulacion_postulado["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipspostulacion_postulado["Spanish"]["nombre_completo"] = "";
	$placeHolderspostulacion_postulado["Spanish"]["nombre_completo"] = "";
	$fieldLabelspostulacion_postulado["Spanish"]["hash_generado"] = "Hash Generado";
	$fieldToolTipspostulacion_postulado["Spanish"]["hash_generado"] = "";
	$placeHolderspostulacion_postulado["Spanish"]["hash_generado"] = "";
	$fieldLabelspostulacion_postulado["Spanish"]["empresa"] = "Empresa";
	$fieldToolTipspostulacion_postulado["Spanish"]["empresa"] = "";
	$placeHolderspostulacion_postulado["Spanish"]["empresa"] = "";
	$fieldLabelspostulacion_postulado["Spanish"]["descri_empresa"] = "Descri Empresa";
	$fieldToolTipspostulacion_postulado["Spanish"]["descri_empresa"] = "";
	$placeHolderspostulacion_postulado["Spanish"]["descri_empresa"] = "";
	$fieldLabelspostulacion_postulado["Spanish"]["id_postulacion"] = "Postulacion";
	$fieldToolTipspostulacion_postulado["Spanish"]["id_postulacion"] = "";
	$placeHolderspostulacion_postulado["Spanish"]["id_postulacion"] = "";
	$fieldLabelspostulacion_postulado["Spanish"]["id_estado"] = "Estado Actual";
	$fieldToolTipspostulacion_postulado["Spanish"]["id_estado"] = "";
	$placeHolderspostulacion_postulado["Spanish"]["id_estado"] = "";
	$pageTitlespostulacion_postulado["Spanish"]["list"] = "Estado Postulado";
	if (count($fieldToolTipspostulacion_postulado["Spanish"]))
		$tdatapostulacion_postulado[".isUseToolTips"] = true;
}


	$tdatapostulacion_postulado[".NCSearch"] = true;



$tdatapostulacion_postulado[".shortTableName"] = "postulacion_postulado";
$tdatapostulacion_postulado[".nSecOptions"] = 0;

$tdatapostulacion_postulado[".mainTableOwnerID"] = "";
$tdatapostulacion_postulado[".entityType"] = 1;
$tdatapostulacion_postulado[".connId"] = "eportal_at_192_168_70_170";


$tdatapostulacion_postulado[".strOriginalTableName"] = "bolsa_empleo.postulacion";

	



$tdatapostulacion_postulado[".showAddInPopup"] = false;

$tdatapostulacion_postulado[".showEditInPopup"] = false;

$tdatapostulacion_postulado[".showViewInPopup"] = false;

$tdatapostulacion_postulado[".listAjax"] = false;
//	temporary
//$tdatapostulacion_postulado[".listAjax"] = false;

	$tdatapostulacion_postulado[".audit"] = true;

	$tdatapostulacion_postulado[".locking"] = false;


$pages = $tdatapostulacion_postulado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapostulacion_postulado[".edit"] = true;
	$tdatapostulacion_postulado[".afterEditAction"] = 1;
	$tdatapostulacion_postulado[".closePopupAfterEdit"] = 1;
	$tdatapostulacion_postulado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapostulacion_postulado[".add"] = true;
$tdatapostulacion_postulado[".afterAddAction"] = 1;
$tdatapostulacion_postulado[".closePopupAfterAdd"] = 1;
$tdatapostulacion_postulado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapostulacion_postulado[".list"] = true;
}



$tdatapostulacion_postulado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapostulacion_postulado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapostulacion_postulado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapostulacion_postulado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapostulacion_postulado[".printFriendly"] = true;
}



$tdatapostulacion_postulado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapostulacion_postulado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapostulacion_postulado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapostulacion_postulado[".isUseAjaxSuggest"] = true;



																																																																																																																																																									

$tdatapostulacion_postulado[".ajaxCodeSnippetAdded"] = false;

$tdatapostulacion_postulado[".buttonsAdded"] = false;

$tdatapostulacion_postulado[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapostulacion_postulado[".isUseTimeForSearch"] = false;


$tdatapostulacion_postulado[".badgeColor"] = "CD853F";


$tdatapostulacion_postulado[".allSearchFields"] = array();
$tdatapostulacion_postulado[".filterFields"] = array();
$tdatapostulacion_postulado[".requiredSearchFields"] = array();

$tdatapostulacion_postulado[".googleLikeFields"] = array();
$tdatapostulacion_postulado[".googleLikeFields"][] = "nombre_completo";
$tdatapostulacion_postulado[".googleLikeFields"][] = "ciudad";
$tdatapostulacion_postulado[".googleLikeFields"][] = "distrito";
$tdatapostulacion_postulado[".googleLikeFields"][] = "cedula";
$tdatapostulacion_postulado[".googleLikeFields"][] = "empresa";
$tdatapostulacion_postulado[".googleLikeFields"][] = "id_postulacion";
$tdatapostulacion_postulado[".googleLikeFields"][] = "id_estado";



$tdatapostulacion_postulado[".tableType"] = "list";

$tdatapostulacion_postulado[".printerPageOrientation"] = 0;
$tdatapostulacion_postulado[".nPrinterPageScale"] = 100;

$tdatapostulacion_postulado[".nPrinterSplitRecords"] = 40;

$tdatapostulacion_postulado[".geocodingEnabled"] = false;










$tdatapostulacion_postulado[".pageSize"] = 10;

$tdatapostulacion_postulado[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY bolsa_empleo.postulacion.id_postulacion";
$tdatapostulacion_postulado[".strOrderBy"] = $tstrOrderBy;

$tdatapostulacion_postulado[".orderindexes"] = array();
			$tdatapostulacion_postulado[".orderindexes"][] = array(15, (1 ? "ASC" : "DESC"), "bolsa_empleo.postulacion.id_postulacion");


$tdatapostulacion_postulado[".sqlHead"] = "SELECT eportal.persons.nombre || ' ' || eportal.persons.apellidos AS nombre_completo,  eportal.persons.fechanac,  eportal.persons.sexo,  eportal.persons.domicilio,  eportal.persons.city_id AS ciudad,  eportal.persons.distrito_id AS distrito,  eportal.persons.nacionalidad AS pais,  eportal.persons_estado_civil_type.name AS estado_civil,  eportal.persons_docs.valor AS cedula,  STRING_AGG(eportal.persons_phones.phone, ', ') AS telefono,  bolsa_empleo.postulacion.id_vacancia,  bolsa_empleo.bolsa_users.hash_generado,  bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal AS empresa,  ' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion AS descri_empresa,  bolsa_empleo.postulacion.id_postulacion,  bolsa_empleo.postulacion.id_estado";
$tdatapostulacion_postulado[".sqlFrom"] = "FROM bolsa_empleo.postulacion  INNER JOIN bolsa_empleo.vacancia ON bolsa_empleo.postulacion.id_vacancia = bolsa_empleo.vacancia.id_vacancias  INNER JOIN eportal.persons ON bolsa_empleo.postulacion.fk_personaid = eportal.persons.id  INNER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id  INNER JOIN eportal.persons_estado_civil_type ON eportal.persons.estado_civil = eportal.persons_estado_civil_type.id  INNER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id  INNER JOIN eportal.persons_phones ON eportal.persons.id = eportal.persons_phones.person_id  INNER JOIN bolsa_empleo.bolsa_users ON eportal.persons_docs.valor = bolsa_empleo.bolsa_users.nro_documento  INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia  INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia  INNER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id";
$tdatapostulacion_postulado[".sqlWhereExpr"] = "";
$tdatapostulacion_postulado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapostulacion_postulado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapostulacion_postulado[".arrGroupsPerPage"] = $arrGPP;

$tdatapostulacion_postulado[".highlightSearchResults"] = true;

$tableKeyspostulacion_postulado = array();
$tdatapostulacion_postulado[".Keys"] = $tableKeyspostulacion_postulado;


$tdatapostulacion_postulado[".hideMobileList"] = array();




//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_postulado","nombre_completo");
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


	$tdatapostulacion_postulado["nombre_completo"] = $fdata;
		$tdatapostulacion_postulado[".searchableFields"][] = "nombre_completo";
//	fechanac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fechanac";
	$fdata["GoodName"] = "fechanac";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_postulado","fechanac");
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


	$tdatapostulacion_postulado["fechanac"] = $fdata;
		$tdatapostulacion_postulado[".searchableFields"][] = "fechanac";
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_postulado","sexo");
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


	$tdatapostulacion_postulado["sexo"] = $fdata;
		$tdatapostulacion_postulado[".searchableFields"][] = "sexo";
//	domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "domicilio";
	$fdata["GoodName"] = "domicilio";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_postulado","domicilio");
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


	$tdatapostulacion_postulado["domicilio"] = $fdata;
		$tdatapostulacion_postulado[".searchableFields"][] = "domicilio";
//	ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ciudad";
	$fdata["GoodName"] = "ciudad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_postulado","ciudad");
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


	$tdatapostulacion_postulado["ciudad"] = $fdata;
		$tdatapostulacion_postulado[".searchableFields"][] = "ciudad";
//	distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "distrito";
	$fdata["GoodName"] = "distrito";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_postulado","distrito");
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


	$tdatapostulacion_postulado["distrito"] = $fdata;
		$tdatapostulacion_postulado[".searchableFields"][] = "distrito";
//	pais
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pais";
	$fdata["GoodName"] = "pais";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_postulado","pais");
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


	$tdatapostulacion_postulado["pais"] = $fdata;
		$tdatapostulacion_postulado[".searchableFields"][] = "pais";
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "eportal.persons_estado_civil_type";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_postulado","estado_civil");
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


	$tdatapostulacion_postulado["estado_civil"] = $fdata;
		$tdatapostulacion_postulado[".searchableFields"][] = "estado_civil";
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "eportal.persons_docs";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_postulado","cedula");
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


	$tdatapostulacion_postulado["cedula"] = $fdata;
		$tdatapostulacion_postulado[".searchableFields"][] = "cedula";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_postulado","telefono");
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


	$tdatapostulacion_postulado["telefono"] = $fdata;
		$tdatapostulacion_postulado[".searchableFields"][] = "telefono";
//	id_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "id_vacancia";
	$fdata["GoodName"] = "id_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_postulado","id_vacancia");
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


	$tdatapostulacion_postulado["id_vacancia"] = $fdata;
		$tdatapostulacion_postulado[".searchableFields"][] = "id_vacancia";
//	hash_generado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "hash_generado";
	$fdata["GoodName"] = "hash_generado";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_postulado","hash_generado");
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


	$tdatapostulacion_postulado["hash_generado"] = $fdata;
		$tdatapostulacion_postulado[".searchableFields"][] = "hash_generado";
//	empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "empresa";
	$fdata["GoodName"] = "empresa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_postulado","empresa");
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


	$tdatapostulacion_postulado["empresa"] = $fdata;
		$tdatapostulacion_postulado[".searchableFields"][] = "empresa";
//	descri_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "descri_empresa";
	$fdata["GoodName"] = "descri_empresa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_postulado","descri_empresa");
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


	$tdatapostulacion_postulado["descri_empresa"] = $fdata;
		$tdatapostulacion_postulado[".searchableFields"][] = "descri_empresa";
//	id_postulacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "id_postulacion";
	$fdata["GoodName"] = "id_postulacion";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_postulado","id_postulacion");
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


	$tdatapostulacion_postulado["id_postulacion"] = $fdata;
		$tdatapostulacion_postulado[".searchableFields"][] = "id_postulacion";
//	id_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "id_estado";
	$fdata["GoodName"] = "id_estado";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_postulado","id_estado");
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


	$tdatapostulacion_postulado["id_estado"] = $fdata;
		$tdatapostulacion_postulado[".searchableFields"][] = "id_estado";


$tables_data["bolsa_empleo.postulacion_postulado"]=&$tdatapostulacion_postulado;
$field_labels["bolsa_empleo_postulacion_postulado"] = &$fieldLabelspostulacion_postulado;
$fieldToolTips["bolsa_empleo_postulacion_postulado"] = &$fieldToolTipspostulacion_postulado;
$placeHolders["bolsa_empleo_postulacion_postulado"] = &$placeHolderspostulacion_postulado;
$page_titles["bolsa_empleo_postulacion_postulado"] = &$pageTitlespostulacion_postulado;


changeTextControlsToDate( "bolsa_empleo.postulacion_postulado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.postulacion_postulado"] = array();
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


		
	$detailsTablesData["bolsa_empleo.postulacion_postulado"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.postulacion_postulado"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.postulacion_postulado"][$dIndex]["masterKeys"][]="id_postulacion";

				$detailsTablesData["bolsa_empleo.postulacion_postulado"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.postulacion_postulado"][$dIndex]["detailKeys"][]="id_postulacion";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.postulacion_postulado"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.postulacion_postulado"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.postulacion_postulado"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion_postulado"][0]["masterKeys"][]="id_vacancias";
				$masterTablesData["bolsa_empleo.postulacion_postulado"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion_postulado"][0]["detailKeys"][]="id_vacancia";
		
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
					$masterTablesData["bolsa_empleo.postulacion_postulado"][1] = $masterParams;
				$masterTablesData["bolsa_empleo.postulacion_postulado"][1]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion_postulado"][1]["masterKeys"][]="id_estado_postulacion";
				$masterTablesData["bolsa_empleo.postulacion_postulado"][1]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion_postulado"][1]["detailKeys"][]="id_estado";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_postulacion_postulado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eportal.persons.nombre || ' ' || eportal.persons.apellidos AS nombre_completo,  eportal.persons.fechanac,  eportal.persons.sexo,  eportal.persons.domicilio,  eportal.persons.city_id AS ciudad,  eportal.persons.distrito_id AS distrito,  eportal.persons.nacionalidad AS pais,  eportal.persons_estado_civil_type.name AS estado_civil,  eportal.persons_docs.valor AS cedula,  STRING_AGG(eportal.persons_phones.phone, ', ') AS telefono,  bolsa_empleo.postulacion.id_vacancia,  bolsa_empleo.bolsa_users.hash_generado,  bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal AS empresa,  ' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion AS descri_empresa,  bolsa_empleo.postulacion.id_postulacion,  bolsa_empleo.postulacion.id_estado";
$proto0["m_strFrom"] = "FROM bolsa_empleo.postulacion  INNER JOIN bolsa_empleo.vacancia ON bolsa_empleo.postulacion.id_vacancia = bolsa_empleo.vacancia.id_vacancias  INNER JOIN eportal.persons ON bolsa_empleo.postulacion.fk_personaid = eportal.persons.id  INNER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id  INNER JOIN eportal.persons_estado_civil_type ON eportal.persons.estado_civil = eportal.persons_estado_civil_type.id  INNER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id  INNER JOIN eportal.persons_phones ON eportal.persons.id = eportal.persons_phones.person_id  INNER JOIN bolsa_empleo.bolsa_users ON eportal.persons_docs.valor = bolsa_empleo.bolsa_users.nro_documento  INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia  INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia  INNER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY bolsa_empleo.postulacion.id_postulacion";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
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
$proto6["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "nombre_completo";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fechanac",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto8["m_sql"] = "eportal.persons.fechanac";
$proto8["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto10["m_sql"] = "eportal.persons.sexo";
$proto10["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "domicilio",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto12["m_sql"] = "eportal.persons.domicilio";
$proto12["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "city_id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto14["m_sql"] = "eportal.persons.city_id";
$proto14["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "ciudad";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "distrito_id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto16["m_sql"] = "eportal.persons.distrito_id";
$proto16["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "distrito";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto18["m_sql"] = "eportal.persons.nacionalidad";
$proto18["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "pais";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.persons_estado_civil_type",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto20["m_sql"] = "eportal.persons_estado_civil_type.name";
$proto20["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "estado_civil";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto22["m_sql"] = "eportal.persons_docs.valor";
$proto22["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
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
$proto24["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "telefono";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto28["m_sql"] = "bolsa_empleo.postulacion.id_vacancia";
$proto28["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "hash_generado",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto30["m_sql"] = "bolsa_empleo.bolsa_users.hash_generado";
$proto30["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal"
));

$proto32["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal";
$proto32["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "empresa";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion"
));

$proto34["m_sql"] = "' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion";
$proto34["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "descri_empresa";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto36["m_sql"] = "bolsa_empleo.postulacion.id_postulacion";
$proto36["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "id_estado",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto38["m_sql"] = "bolsa_empleo.postulacion.id_estado";
$proto38["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "bolsa_empleo.postulacion";
$proto41["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id_postulacion";
$proto41["m_columns"][] = "id_vacancia";
$proto41["m_columns"][] = "id_estado";
$proto41["m_columns"][] = "fecha_postulacion";
$proto41["m_columns"][] = "fk_personaid";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "bolsa_empleo.postulacion";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_INNERJOIN";
			$proto45=array();
$proto45["m_strName"] = "bolsa_empleo.vacancia";
$proto45["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id_vacancias";
$proto45["m_columns"][] = "fecha_creacion_vacancia";
$proto45["m_columns"][] = "id_estado_vacancia";
$proto45["m_columns"][] = "fecha_expiracion_vacancia";
$proto45["m_columns"][] = "cantidad_vacancia";
$proto45["m_columns"][] = "geolocation";
$proto45["m_columns"][] = "fk_id_feria_empleo";
$proto45["m_columns"][] = "usuario";
$proto45["m_columns"][] = "origen";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "INNER JOIN bolsa_empleo.vacancia ON bolsa_empleo.postulacion.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto46=array();
$proto46["m_sql"] = "bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.postulacion.id_vacancia";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= bolsa_empleo.postulacion.id_vacancia";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
												$proto48=array();
$proto48["m_link"] = "SQLL_INNERJOIN";
			$proto49=array();
$proto49["m_strName"] = "eportal.persons";
$proto49["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id";
$proto49["m_columns"][] = "nombre";
$proto49["m_columns"][] = "apellidos";
$proto49["m_columns"][] = "nacionalidad";
$proto49["m_columns"][] = "fechanac";
$proto49["m_columns"][] = "sexo";
$proto49["m_columns"][] = "estado_civil";
$proto49["m_columns"][] = "canthijos";
$proto49["m_columns"][] = "domicilio";
$proto49["m_columns"][] = "city_id";
$proto49["m_columns"][] = "distrito_id";
$proto49["m_columns"][] = "esindigena";
$proto49["m_columns"][] = "id_profesion";
$proto49["m_columns"][] = "actualizado";
$proto49["m_columns"][] = "porcentaje_discapacidad";
$proto49["m_columns"][] = "adjunto_potencial_discapacidad";
$proto49["m_columns"][] = "adjunto_certificado_discapacidad";
$proto49["m_columns"][] = "foto";
$proto49["m_columns"][] = "resumen";
$proto49["m_columns"][] = "fk_habilidades";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "INNER JOIN eportal.persons ON bolsa_empleo.postulacion.fk_personaid = eportal.persons.id";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto50=array();
$proto50["m_sql"] = "eportal.persons.id = bolsa_empleo.postulacion.fk_personaid";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= bolsa_empleo.postulacion.fk_personaid";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
												$proto52=array();
$proto52["m_link"] = "SQLL_INNERJOIN";
			$proto53=array();
$proto53["m_strName"] = "eportal.city";
$proto53["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id";
$proto53["m_columns"][] = "name";
$proto53["m_columns"][] = "countrycode";
$proto53["m_columns"][] = "distrito_id";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "INNER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto54=array();
$proto54["m_sql"] = "eportal.city.id = eportal.persons.city_id";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "= eportal.persons.city_id";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_INNERJOIN";
			$proto57=array();
$proto57["m_strName"] = "eportal.persons_estado_civil_type";
$proto57["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "id";
$proto57["m_columns"][] = "short";
$proto57["m_columns"][] = "name";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "INNER JOIN eportal.persons_estado_civil_type ON eportal.persons.estado_civil = eportal.persons_estado_civil_type.id";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto58=array();
$proto58["m_sql"] = "eportal.persons_estado_civil_type.id = eportal.persons.estado_civil";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons_estado_civil_type",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= eportal.persons.estado_civil";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
												$proto60=array();
$proto60["m_link"] = "SQLL_INNERJOIN";
			$proto61=array();
$proto61["m_strName"] = "eportal.persons_docs";
$proto61["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "id";
$proto61["m_columns"][] = "doctype_id";
$proto61["m_columns"][] = "person_id";
$proto61["m_columns"][] = "valor";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "INNER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto62=array();
$proto62["m_sql"] = "eportal.persons_docs.person_id = eportal.persons.id";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "= eportal.persons.id";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
												$proto64=array();
$proto64["m_link"] = "SQLL_INNERJOIN";
			$proto65=array();
$proto65["m_strName"] = "eportal.persons_phones";
$proto65["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "id";
$proto65["m_columns"][] = "person_id";
$proto65["m_columns"][] = "type";
$proto65["m_columns"][] = "phone";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "INNER JOIN eportal.persons_phones ON eportal.persons.id = eportal.persons_phones.person_id";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto66=array();
$proto66["m_sql"] = "eportal.persons_phones.person_id = eportal.persons.id";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "eportal.persons_phones",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "= eportal.persons.id";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
												$proto68=array();
$proto68["m_link"] = "SQLL_INNERJOIN";
			$proto69=array();
$proto69["m_strName"] = "bolsa_empleo.bolsa_users";
$proto69["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "id";
$proto69["m_columns"][] = "nro_documento";
$proto69["m_columns"][] = "clave";
$proto69["m_columns"][] = "email";
$proto69["m_columns"][] = "groupid";
$proto69["m_columns"][] = "active";
$proto69["m_columns"][] = "reset_token";
$proto69["m_columns"][] = "reset_date";
$proto69["m_columns"][] = "fecha_alta";
$proto69["m_columns"][] = "llave";
$proto69["m_columns"][] = "estado_llave";
$proto69["m_columns"][] = "senadis";
$proto69["m_columns"][] = "trabajo_antes";
$proto69["m_columns"][] = "userpic";
$proto69["m_columns"][] = "personaid";
$proto69["m_columns"][] = "fullname";
$proto69["m_columns"][] = "username";
$proto69["m_columns"][] = "hash_generado";
$proto69["m_columns"][] = "adjunto_foto_perfil";
$proto69["m_columns"][] = "cantidad_omision_cambio_password";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "INNER JOIN bolsa_empleo.bolsa_users ON eportal.persons_docs.valor = bolsa_empleo.bolsa_users.nro_documento";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto70=array();
$proto70["m_sql"] = "bolsa_empleo.bolsa_users.nro_documento = eportal.persons_docs.valor";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "nro_documento",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "= eportal.persons_docs.valor";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
												$proto72=array();
$proto72["m_link"] = "SQLL_INNERJOIN";
			$proto73=array();
$proto73["m_strName"] = "bolsa_empleo.vacancia_empresa";
$proto73["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "id_empresa_vacancia";
$proto73["m_columns"][] = "id_empresa_sucursal";
$proto73["m_columns"][] = "id_contacto_sucursal";
$proto73["m_columns"][] = "id_cidudad";
$proto73["m_columns"][] = "id_departamento";
$proto73["m_columns"][] = "id_vacancia";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto74=array();
$proto74["m_sql"] = "bolsa_empleo.vacancia_empresa.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
												$proto76=array();
$proto76["m_link"] = "SQLL_INNERJOIN";
			$proto77=array();
$proto77["m_strName"] = "bolsa_empleo.vacancia_puesto";
$proto77["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "id_puesto_vacancia";
$proto77["m_columns"][] = "nombre_puesto";
$proto77["m_columns"][] = "salario";
$proto77["m_columns"][] = "tipo_contrato";
$proto77["m_columns"][] = "descripcion_puesto";
$proto77["m_columns"][] = "id_vacancia";
$proto77["m_columns"][] = "id_rubro";
$proto77["m_columns"][] = "anos_experiencia_vacancia";
$proto77["m_columns"][] = "fk_ocupacion_puesto";
$proto77["m_columns"][] = "meses_experiencia_vacancia";
$proto77["m_columns"][] = "horario_rotativo";
$proto77["m_columns"][] = "beneficios";
$proto77["m_columns"][] = "modalidad_trabajo";
$proto77["m_columns"][] = "descripcion_salario";
$proto77["m_columns"][] = "color";
$proto77["m_columns"][] = "tipo_remuneracion";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto78=array();
$proto78["m_sql"] = "bolsa_empleo.vacancia_puesto.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
												$proto80=array();
$proto80["m_link"] = "SQLL_INNERJOIN";
			$proto81=array();
$proto81["m_strName"] = "bolsa_empleo.vista_ocupaciones";
$proto81["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto81["m_columns"] = array();
$proto81["m_columns"][] = "id_ocu_puest_clasi";
$proto81["m_columns"][] = "descripcion";
$proto81["m_columns"][] = "codigo";
$proto81["m_columns"][] = "color";
$obj = new SQLTable($proto81);

$proto80["m_table"] = $obj;
$proto80["m_sql"] = "INNER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi";
$proto80["m_alias"] = "";
$proto80["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto82=array();
$proto82["m_sql"] = "bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi = bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto82["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ocu_puest_clasi",
	"m_strTable" => "bolsa_empleo.vista_ocupaciones",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
$proto82["m_strCase"] = "= bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto82["m_havingmode"] = false;
$proto82["m_inBrackets"] = false;
$proto82["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto82);

$proto80["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto80);

$proto0["m_fromlist"][]=$obj;
												$proto84=array();
$proto84["m_link"] = "SQLL_INNERJOIN";
			$proto85=array();
$proto85["m_strName"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto85["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto85["m_columns"] = array();
$proto85["m_columns"][] = "id";
$proto85["m_columns"][] = "empresas_bolsa_id";
$proto85["m_columns"][] = "ruc";
$proto85["m_columns"][] = "legal";
$proto85["m_columns"][] = "fantasy";
$proto85["m_columns"][] = "city_id";
$proto85["m_columns"][] = "distrito_id";
$proto85["m_columns"][] = "tel";
$proto85["m_columns"][] = "email";
$proto85["m_columns"][] = "id_tipo_sucursal";
$proto85["m_columns"][] = "nro_patronal";
$proto85["m_columns"][] = "direccion";
$proto85["m_columns"][] = "fecha_creacion";
$obj = new SQLTable($proto85);

$proto84["m_table"] = $obj;
$proto84["m_sql"] = "INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id";
$proto84["m_alias"] = "";
$proto84["m_srcTableName"] = "bolsa_empleo.postulacion_postulado";
$proto86=array();
$proto86["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id = bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "= bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

$proto84["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto84);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto88=array();
						$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.persons_estado_civil_type",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto88["m_column"]=$obj;
$obj = new SQLGroupByItem($proto88);

$proto0["m_groupby"][]=$obj;
												$proto90=array();
						$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto90["m_column"]=$obj;
$obj = new SQLGroupByItem($proto90);

$proto0["m_groupby"][]=$obj;
												$proto92=array();
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto92["m_column"]=$obj;
$obj = new SQLGroupByItem($proto92);

$proto0["m_groupby"][]=$obj;
												$proto94=array();
						$obj = new SQLField(array(
	"m_strName" => "hash_generado",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto94["m_column"]=$obj;
$obj = new SQLGroupByItem($proto94);

$proto0["m_groupby"][]=$obj;
												$proto96=array();
						$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto96["m_column"]=$obj;
$obj = new SQLGroupByItem($proto96);

$proto0["m_groupby"][]=$obj;
												$proto98=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto98["m_column"]=$obj;
$obj = new SQLGroupByItem($proto98);

$proto0["m_groupby"][]=$obj;
												$proto100=array();
						$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto100["m_column"]=$obj;
$obj = new SQLGroupByItem($proto100);

$proto0["m_groupby"][]=$obj;
												$proto102=array();
						$obj = new SQLField(array(
	"m_strName" => "legal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto102["m_column"]=$obj;
$obj = new SQLGroupByItem($proto102);

$proto0["m_groupby"][]=$obj;
												$proto104=array();
						$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.vista_ocupaciones",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto104["m_column"]=$obj;
$obj = new SQLGroupByItem($proto104);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto106=array();
						$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_postulado"
));

$proto106["m_column"]=$obj;
$proto106["m_bAsc"] = 1;
$proto106["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto106);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="bolsa_empleo.postulacion_postulado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_postulacion_postulado = createSqlQuery_postulacion_postulado();


	
		;

																

$tdatapostulacion_postulado[".sqlquery"] = $queryData_postulacion_postulado;



include_once(getabspath("include/postulacion_postulado_events.php"));
$tdatapostulacion_postulado[".hasEvents"] = true;

?>
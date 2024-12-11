<?php
$tdatapostulacion_preseleccionado = array();
$tdatapostulacion_preseleccionado[".searchableFields"] = array();
$tdatapostulacion_preseleccionado[".ShortName"] = "postulacion_preseleccionado";
$tdatapostulacion_preseleccionado[".OwnerID"] = "";
$tdatapostulacion_preseleccionado[".OriginalTable"] = "bolsa_empleo.postulacion";


$tdatapostulacion_preseleccionado[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapostulacion_preseleccionado[".originalPagesByType"] = $tdatapostulacion_preseleccionado[".pagesByType"];
$tdatapostulacion_preseleccionado[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapostulacion_preseleccionado[".originalPages"] = $tdatapostulacion_preseleccionado[".pages"];
$tdatapostulacion_preseleccionado[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapostulacion_preseleccionado[".originalDefaultPages"] = $tdatapostulacion_preseleccionado[".defaultPages"];

//	field labels
$fieldLabelspostulacion_preseleccionado = array();
$fieldToolTipspostulacion_preseleccionado = array();
$pageTitlespostulacion_preseleccionado = array();
$placeHolderspostulacion_preseleccionado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspostulacion_preseleccionado["Spanish"] = array();
	$fieldToolTipspostulacion_preseleccionado["Spanish"] = array();
	$placeHolderspostulacion_preseleccionado["Spanish"] = array();
	$pageTitlespostulacion_preseleccionado["Spanish"] = array();
	$fieldLabelspostulacion_preseleccionado["Spanish"]["id_vacancia"] = "Id Vacancia";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["id_vacancia"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["id_vacancia"] = "";
	$fieldLabelspostulacion_preseleccionado["Spanish"]["fechanac"] = "<p><strong>&nbsp;Fechanac:</strong></p>";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["fechanac"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["fechanac"] = "";
	$fieldLabelspostulacion_preseleccionado["Spanish"]["sexo"] = "<p>&nbsp;<strong>Sexo:</strong></p>";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["sexo"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["sexo"] = "";
	$fieldLabelspostulacion_preseleccionado["Spanish"]["domicilio"] = "<p>&nbsp;<strong>Domicilio:</strong></p>";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["domicilio"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["domicilio"] = "";
	$fieldLabelspostulacion_preseleccionado["Spanish"]["ciudad"] = "Ciudad:";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["ciudad"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["ciudad"] = "";
	$fieldLabelspostulacion_preseleccionado["Spanish"]["distrito"] = " Departamento:";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["distrito"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["distrito"] = "";
	$fieldLabelspostulacion_preseleccionado["Spanish"]["estado_civil"] = "<p><strong>&nbsp;Estado Civil:</strong></p>";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["estado_civil"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["estado_civil"] = "";
	$fieldLabelspostulacion_preseleccionado["Spanish"]["cedula"] = "Nro. Documento";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["cedula"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["cedula"] = "";
	$fieldLabelspostulacion_preseleccionado["Spanish"]["telefono"] = "<p><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAQCAYAAAAvf+5AAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAB1SURBVHgB7dKxDYAgEIXhe0R7R8AYDdo5kTO4gSO4kSPY2skG2hvuhB6DjZ1/QveFK+5QNWZgUTORFBTPKsiUsWCSi3trNxtT2hjNDiuVdSuUKBhFL/vhR9BvYQ8vCZ9CWXdH6ijgsGRCPCLH4sfp6FcOZzA3Xk0rUBRoB4MAAAAASUVORK5CYII=\">&nbsp;<strong>Telefono:</strong></p>";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["telefono"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["telefono"] = "";
	$fieldLabelspostulacion_preseleccionado["Spanish"]["pais"] = "<p>&nbsp;<strong>Pais:</strong></p>";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["pais"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["pais"] = "";
	$fieldLabelspostulacion_preseleccionado["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["nombre_completo"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["nombre_completo"] = "";
	$fieldLabelspostulacion_preseleccionado["Spanish"]["hash_generado"] = "Hash Generado";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["hash_generado"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["hash_generado"] = "";
	$fieldLabelspostulacion_preseleccionado["Spanish"]["empresa"] = "Empresa";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["empresa"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["empresa"] = "";
	$fieldLabelspostulacion_preseleccionado["Spanish"]["descri_empresa"] = "Descri Empresa";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["descri_empresa"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["descri_empresa"] = "";
	$fieldLabelspostulacion_preseleccionado["Spanish"]["id_postulacion"] = "Postulacion";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["id_postulacion"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["id_postulacion"] = "";
	$fieldLabelspostulacion_preseleccionado["Spanish"]["id_estado"] = "Estado Actual";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["id_estado"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["id_estado"] = "";
	$fieldLabelspostulacion_preseleccionado["Spanish"]["id_vacancias"] = "Id Vacancias";
	$fieldToolTipspostulacion_preseleccionado["Spanish"]["id_vacancias"] = "";
	$placeHolderspostulacion_preseleccionado["Spanish"]["id_vacancias"] = "";
	$pageTitlespostulacion_preseleccionado["Spanish"]["list"] = "Preseleccionados";
	if (count($fieldToolTipspostulacion_preseleccionado["Spanish"]))
		$tdatapostulacion_preseleccionado[".isUseToolTips"] = true;
}


	$tdatapostulacion_preseleccionado[".NCSearch"] = true;



$tdatapostulacion_preseleccionado[".shortTableName"] = "postulacion_preseleccionado";
$tdatapostulacion_preseleccionado[".nSecOptions"] = 0;

$tdatapostulacion_preseleccionado[".mainTableOwnerID"] = "";
$tdatapostulacion_preseleccionado[".entityType"] = 1;
$tdatapostulacion_preseleccionado[".connId"] = "eportal_at_192_168_70_170";


$tdatapostulacion_preseleccionado[".strOriginalTableName"] = "bolsa_empleo.postulacion";

	



$tdatapostulacion_preseleccionado[".showAddInPopup"] = false;

$tdatapostulacion_preseleccionado[".showEditInPopup"] = false;

$tdatapostulacion_preseleccionado[".showViewInPopup"] = false;

$tdatapostulacion_preseleccionado[".listAjax"] = false;
//	temporary
//$tdatapostulacion_preseleccionado[".listAjax"] = false;

	$tdatapostulacion_preseleccionado[".audit"] = true;

	$tdatapostulacion_preseleccionado[".locking"] = false;


$pages = $tdatapostulacion_preseleccionado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapostulacion_preseleccionado[".edit"] = true;
	$tdatapostulacion_preseleccionado[".afterEditAction"] = 1;
	$tdatapostulacion_preseleccionado[".closePopupAfterEdit"] = 1;
	$tdatapostulacion_preseleccionado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapostulacion_preseleccionado[".add"] = true;
$tdatapostulacion_preseleccionado[".afterAddAction"] = 1;
$tdatapostulacion_preseleccionado[".closePopupAfterAdd"] = 1;
$tdatapostulacion_preseleccionado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapostulacion_preseleccionado[".list"] = true;
}



$tdatapostulacion_preseleccionado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapostulacion_preseleccionado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapostulacion_preseleccionado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapostulacion_preseleccionado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapostulacion_preseleccionado[".printFriendly"] = true;
}



$tdatapostulacion_preseleccionado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapostulacion_preseleccionado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapostulacion_preseleccionado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapostulacion_preseleccionado[".isUseAjaxSuggest"] = true;



																																																																																																																																																									

$tdatapostulacion_preseleccionado[".ajaxCodeSnippetAdded"] = false;

$tdatapostulacion_preseleccionado[".buttonsAdded"] = false;

$tdatapostulacion_preseleccionado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapostulacion_preseleccionado[".isUseTimeForSearch"] = false;


$tdatapostulacion_preseleccionado[".badgeColor"] = "778899";


$tdatapostulacion_preseleccionado[".allSearchFields"] = array();
$tdatapostulacion_preseleccionado[".filterFields"] = array();
$tdatapostulacion_preseleccionado[".requiredSearchFields"] = array();

$tdatapostulacion_preseleccionado[".googleLikeFields"] = array();
$tdatapostulacion_preseleccionado[".googleLikeFields"][] = "nombre_completo";
$tdatapostulacion_preseleccionado[".googleLikeFields"][] = "ciudad";
$tdatapostulacion_preseleccionado[".googleLikeFields"][] = "distrito";
$tdatapostulacion_preseleccionado[".googleLikeFields"][] = "cedula";
$tdatapostulacion_preseleccionado[".googleLikeFields"][] = "empresa";
$tdatapostulacion_preseleccionado[".googleLikeFields"][] = "id_postulacion";
$tdatapostulacion_preseleccionado[".googleLikeFields"][] = "id_estado";
$tdatapostulacion_preseleccionado[".googleLikeFields"][] = "id_vacancias";



$tdatapostulacion_preseleccionado[".tableType"] = "list";

$tdatapostulacion_preseleccionado[".printerPageOrientation"] = 0;
$tdatapostulacion_preseleccionado[".nPrinterPageScale"] = 100;

$tdatapostulacion_preseleccionado[".nPrinterSplitRecords"] = 40;

$tdatapostulacion_preseleccionado[".geocodingEnabled"] = false;










$tdatapostulacion_preseleccionado[".pageSize"] = 10;

$tdatapostulacion_preseleccionado[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY bolsa_empleo.postulacion.id_postulacion";
$tdatapostulacion_preseleccionado[".strOrderBy"] = $tstrOrderBy;

$tdatapostulacion_preseleccionado[".orderindexes"] = array();
			$tdatapostulacion_preseleccionado[".orderindexes"][] = array(15, (1 ? "ASC" : "DESC"), "bolsa_empleo.postulacion.id_postulacion");


$tdatapostulacion_preseleccionado[".sqlHead"] = "SELECT eportal.persons.nombre || ' ' || eportal.persons.apellidos AS nombre_completo,  eportal.persons.fechanac,  eportal.persons.sexo,  eportal.persons.domicilio,  eportal.persons.city_id AS ciudad,  eportal.persons.distrito_id AS distrito,  eportal.persons.nacionalidad AS pais,  eportal.persons_estado_civil_type.name AS estado_civil,  eportal.persons_docs.valor AS cedula,  STRING_AGG(eportal.persons_phones.phone, ', ') AS telefono,  bolsa_empleo.postulacion.id_vacancia,  bolsa_empleo.bolsa_users.hash_generado,  bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal AS empresa,  ' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion AS descri_empresa,  bolsa_empleo.postulacion.id_postulacion,  bolsa_empleo.postulacion.id_estado,  bolsa_empleo.vacancia.id_vacancias";
$tdatapostulacion_preseleccionado[".sqlFrom"] = "FROM bolsa_empleo.postulacion  INNER JOIN bolsa_empleo.vacancia ON bolsa_empleo.postulacion.id_vacancia = bolsa_empleo.vacancia.id_vacancias  INNER JOIN eportal.persons ON bolsa_empleo.postulacion.fk_personaid = eportal.persons.id  LEFT OUTER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id  LEFT OUTER JOIN eportal.persons_estado_civil_type ON eportal.persons.estado_civil = eportal.persons_estado_civil_type.id  INNER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id  LEFT OUTER JOIN eportal.persons_phones ON eportal.persons.id = eportal.persons_phones.person_id  INNER JOIN bolsa_empleo.bolsa_users ON eportal.persons_docs.valor = bolsa_empleo.bolsa_users.nro_documento  INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia  INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia  INNER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id";
$tdatapostulacion_preseleccionado[".sqlWhereExpr"] = "(bolsa_empleo.postulacion.id_estado = 1)";
$tdatapostulacion_preseleccionado[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatapostulacion_preseleccionado[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapostulacion_preseleccionado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapostulacion_preseleccionado[".arrGroupsPerPage"] = $arrGPP;

$tdatapostulacion_preseleccionado[".highlightSearchResults"] = true;

$tableKeyspostulacion_preseleccionado = array();
$tableKeyspostulacion_preseleccionado[] = "id_postulacion";
$tdatapostulacion_preseleccionado[".Keys"] = $tableKeyspostulacion_preseleccionado;


$tdatapostulacion_preseleccionado[".hideMobileList"] = array();




//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","nombre_completo");
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


	$tdatapostulacion_preseleccionado["nombre_completo"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "nombre_completo";
//	fechanac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fechanac";
	$fdata["GoodName"] = "fechanac";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","fechanac");
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


	$tdatapostulacion_preseleccionado["fechanac"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "fechanac";
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","sexo");
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


	$tdatapostulacion_preseleccionado["sexo"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "sexo";
//	domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "domicilio";
	$fdata["GoodName"] = "domicilio";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","domicilio");
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


	$tdatapostulacion_preseleccionado["domicilio"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "domicilio";
//	ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ciudad";
	$fdata["GoodName"] = "ciudad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","ciudad");
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


	$tdatapostulacion_preseleccionado["ciudad"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "ciudad";
//	distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "distrito";
	$fdata["GoodName"] = "distrito";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","distrito");
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


	$tdatapostulacion_preseleccionado["distrito"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "distrito";
//	pais
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pais";
	$fdata["GoodName"] = "pais";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","pais");
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


	$tdatapostulacion_preseleccionado["pais"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "pais";
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "eportal.persons_estado_civil_type";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","estado_civil");
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


	$tdatapostulacion_preseleccionado["estado_civil"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "estado_civil";
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "eportal.persons_docs";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","cedula");
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


	$tdatapostulacion_preseleccionado["cedula"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "cedula";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","telefono");
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


	$tdatapostulacion_preseleccionado["telefono"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "telefono";
//	id_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "id_vacancia";
	$fdata["GoodName"] = "id_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","id_vacancia");
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


	$tdatapostulacion_preseleccionado["id_vacancia"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "id_vacancia";
//	hash_generado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "hash_generado";
	$fdata["GoodName"] = "hash_generado";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","hash_generado");
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


	$tdatapostulacion_preseleccionado["hash_generado"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "hash_generado";
//	empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "empresa";
	$fdata["GoodName"] = "empresa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","empresa");
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


	$tdatapostulacion_preseleccionado["empresa"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "empresa";
//	descri_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "descri_empresa";
	$fdata["GoodName"] = "descri_empresa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","descri_empresa");
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


	$tdatapostulacion_preseleccionado["descri_empresa"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "descri_empresa";
//	id_postulacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "id_postulacion";
	$fdata["GoodName"] = "id_postulacion";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","id_postulacion");
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


	$tdatapostulacion_preseleccionado["id_postulacion"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "id_postulacion";
//	id_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "id_estado";
	$fdata["GoodName"] = "id_estado";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","id_estado");
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


	$tdatapostulacion_preseleccionado["id_estado"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "id_estado";
//	id_vacancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "id_vacancias";
	$fdata["GoodName"] = "id_vacancias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_preseleccionado","id_vacancias");
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


	$tdatapostulacion_preseleccionado["id_vacancias"] = $fdata;
		$tdatapostulacion_preseleccionado[".searchableFields"][] = "id_vacancias";


$tables_data["bolsa_empleo.postulacion_preseleccionado"]=&$tdatapostulacion_preseleccionado;
$field_labels["bolsa_empleo_postulacion_preseleccionado"] = &$fieldLabelspostulacion_preseleccionado;
$fieldToolTips["bolsa_empleo_postulacion_preseleccionado"] = &$fieldToolTipspostulacion_preseleccionado;
$placeHolders["bolsa_empleo_postulacion_preseleccionado"] = &$placeHolderspostulacion_preseleccionado;
$page_titles["bolsa_empleo_postulacion_preseleccionado"] = &$pageTitlespostulacion_preseleccionado;


changeTextControlsToDate( "bolsa_empleo.postulacion_preseleccionado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.postulacion_preseleccionado"] = array();
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


		
	$detailsTablesData["bolsa_empleo.postulacion_preseleccionado"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.postulacion_preseleccionado"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.postulacion_preseleccionado"][$dIndex]["masterKeys"][]="id_postulacion";

				$detailsTablesData["bolsa_empleo.postulacion_preseleccionado"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.postulacion_preseleccionado"][$dIndex]["detailKeys"][]="id_postulacion";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.postulacion_preseleccionado"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.postulacion_preseleccionado"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.postulacion_preseleccionado"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion_preseleccionado"][0]["masterKeys"][]="id_vacancias";
				$masterTablesData["bolsa_empleo.postulacion_preseleccionado"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion_preseleccionado"][0]["detailKeys"][]="id_vacancia";
		
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
					$masterTablesData["bolsa_empleo.postulacion_preseleccionado"][1] = $masterParams;
				$masterTablesData["bolsa_empleo.postulacion_preseleccionado"][1]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion_preseleccionado"][1]["masterKeys"][]="id_estado_postulacion";
				$masterTablesData["bolsa_empleo.postulacion_preseleccionado"][1]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion_preseleccionado"][1]["detailKeys"][]="id_estado";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_postulacion_preseleccionado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eportal.persons.nombre || ' ' || eportal.persons.apellidos AS nombre_completo,  eportal.persons.fechanac,  eportal.persons.sexo,  eportal.persons.domicilio,  eportal.persons.city_id AS ciudad,  eportal.persons.distrito_id AS distrito,  eportal.persons.nacionalidad AS pais,  eportal.persons_estado_civil_type.name AS estado_civil,  eportal.persons_docs.valor AS cedula,  STRING_AGG(eportal.persons_phones.phone, ', ') AS telefono,  bolsa_empleo.postulacion.id_vacancia,  bolsa_empleo.bolsa_users.hash_generado,  bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal AS empresa,  ' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion AS descri_empresa,  bolsa_empleo.postulacion.id_postulacion,  bolsa_empleo.postulacion.id_estado,  bolsa_empleo.vacancia.id_vacancias";
$proto0["m_strFrom"] = "FROM bolsa_empleo.postulacion  INNER JOIN bolsa_empleo.vacancia ON bolsa_empleo.postulacion.id_vacancia = bolsa_empleo.vacancia.id_vacancias  INNER JOIN eportal.persons ON bolsa_empleo.postulacion.fk_personaid = eportal.persons.id  LEFT OUTER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id  LEFT OUTER JOIN eportal.persons_estado_civil_type ON eportal.persons.estado_civil = eportal.persons_estado_civil_type.id  INNER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id  LEFT OUTER JOIN eportal.persons_phones ON eportal.persons.id = eportal.persons_phones.person_id  INNER JOIN bolsa_empleo.bolsa_users ON eportal.persons_docs.valor = bolsa_empleo.bolsa_users.nro_documento  INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia  INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia  INNER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id";
$proto0["m_strWhere"] = "(bolsa_empleo.postulacion.id_estado = 1)";
$proto0["m_strOrderBy"] = "ORDER BY bolsa_empleo.postulacion.id_postulacion";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "bolsa_empleo.postulacion.id_estado = 1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_estado",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 1";
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
$proto6["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "nombre_completo";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fechanac",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto8["m_sql"] = "eportal.persons.fechanac";
$proto8["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto10["m_sql"] = "eportal.persons.sexo";
$proto10["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "domicilio",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto12["m_sql"] = "eportal.persons.domicilio";
$proto12["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "city_id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto14["m_sql"] = "eportal.persons.city_id";
$proto14["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "ciudad";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "distrito_id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto16["m_sql"] = "eportal.persons.distrito_id";
$proto16["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "distrito";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto18["m_sql"] = "eportal.persons.nacionalidad";
$proto18["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "pais";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.persons_estado_civil_type",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto20["m_sql"] = "eportal.persons_estado_civil_type.name";
$proto20["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "estado_civil";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto22["m_sql"] = "eportal.persons_docs.valor";
$proto22["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
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
$proto24["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "telefono";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto28["m_sql"] = "bolsa_empleo.postulacion.id_vacancia";
$proto28["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "hash_generado",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto30["m_sql"] = "bolsa_empleo.bolsa_users.hash_generado";
$proto30["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal"
));

$proto32["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.ruc || ' - ' || bolsa_empleo.empresas_bolsa_sucursales.legal";
$proto32["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "empresa";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion"
));

$proto34["m_sql"] = "' Oferta de Empleo: ' || bolsa_empleo.vista_ocupaciones.descripcion";
$proto34["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "descri_empresa";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto36["m_sql"] = "bolsa_empleo.postulacion.id_postulacion";
$proto36["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "id_estado",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto38["m_sql"] = "bolsa_empleo.postulacion.id_estado";
$proto38["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto40["m_sql"] = "bolsa_empleo.vacancia.id_vacancias";
$proto40["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "bolsa_empleo.postulacion";
$proto43["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id_postulacion";
$proto43["m_columns"][] = "id_vacancia";
$proto43["m_columns"][] = "id_estado";
$proto43["m_columns"][] = "fecha_postulacion";
$proto43["m_columns"][] = "fk_personaid";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "bolsa_empleo.postulacion";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
												$proto46=array();
$proto46["m_link"] = "SQLL_INNERJOIN";
			$proto47=array();
$proto47["m_strName"] = "bolsa_empleo.vacancia";
$proto47["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id_vacancias";
$proto47["m_columns"][] = "fecha_creacion_vacancia";
$proto47["m_columns"][] = "id_estado_vacancia";
$proto47["m_columns"][] = "fecha_expiracion_vacancia";
$proto47["m_columns"][] = "cantidad_vacancia";
$proto47["m_columns"][] = "geolocation";
$proto47["m_columns"][] = "fk_id_feria_empleo";
$proto47["m_columns"][] = "usuario";
$proto47["m_columns"][] = "origen";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "INNER JOIN bolsa_empleo.vacancia ON bolsa_empleo.postulacion.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto48=array();
$proto48["m_sql"] = "bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.postulacion.id_vacancia";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= bolsa_empleo.postulacion.id_vacancia";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
												$proto50=array();
$proto50["m_link"] = "SQLL_INNERJOIN";
			$proto51=array();
$proto51["m_strName"] = "eportal.persons";
$proto51["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "id";
$proto51["m_columns"][] = "nombre";
$proto51["m_columns"][] = "apellidos";
$proto51["m_columns"][] = "nacionalidad";
$proto51["m_columns"][] = "fechanac";
$proto51["m_columns"][] = "sexo";
$proto51["m_columns"][] = "estado_civil";
$proto51["m_columns"][] = "canthijos";
$proto51["m_columns"][] = "domicilio";
$proto51["m_columns"][] = "city_id";
$proto51["m_columns"][] = "distrito_id";
$proto51["m_columns"][] = "esindigena";
$proto51["m_columns"][] = "id_profesion";
$proto51["m_columns"][] = "actualizado";
$proto51["m_columns"][] = "porcentaje_discapacidad";
$proto51["m_columns"][] = "adjunto_potencial_discapacidad";
$proto51["m_columns"][] = "adjunto_certificado_discapacidad";
$proto51["m_columns"][] = "foto";
$proto51["m_columns"][] = "resumen";
$proto51["m_columns"][] = "fk_habilidades";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "INNER JOIN eportal.persons ON bolsa_empleo.postulacion.fk_personaid = eportal.persons.id";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto52=array();
$proto52["m_sql"] = "eportal.persons.id = bolsa_empleo.postulacion.fk_personaid";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "= bolsa_empleo.postulacion.fk_personaid";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
												$proto54=array();
$proto54["m_link"] = "SQLL_LEFTJOIN";
			$proto55=array();
$proto55["m_strName"] = "eportal.city";
$proto55["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "id";
$proto55["m_columns"][] = "name";
$proto55["m_columns"][] = "countrycode";
$proto55["m_columns"][] = "distrito_id";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "LEFT OUTER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto56=array();
$proto56["m_sql"] = "eportal.city.id = eportal.persons.city_id";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "= eportal.persons.city_id";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
												$proto58=array();
$proto58["m_link"] = "SQLL_LEFTJOIN";
			$proto59=array();
$proto59["m_strName"] = "eportal.persons_estado_civil_type";
$proto59["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "id";
$proto59["m_columns"][] = "short";
$proto59["m_columns"][] = "name";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "LEFT OUTER JOIN eportal.persons_estado_civil_type ON eportal.persons.estado_civil = eportal.persons_estado_civil_type.id";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto60=array();
$proto60["m_sql"] = "eportal.persons_estado_civil_type.id = eportal.persons.estado_civil";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons_estado_civil_type",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "= eportal.persons.estado_civil";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
												$proto62=array();
$proto62["m_link"] = "SQLL_INNERJOIN";
			$proto63=array();
$proto63["m_strName"] = "eportal.persons_docs";
$proto63["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "id";
$proto63["m_columns"][] = "doctype_id";
$proto63["m_columns"][] = "person_id";
$proto63["m_columns"][] = "valor";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "INNER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto64=array();
$proto64["m_sql"] = "eportal.persons_docs.person_id = eportal.persons.id";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "= eportal.persons.id";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
												$proto66=array();
$proto66["m_link"] = "SQLL_LEFTJOIN";
			$proto67=array();
$proto67["m_strName"] = "eportal.persons_phones";
$proto67["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "id";
$proto67["m_columns"][] = "person_id";
$proto67["m_columns"][] = "type";
$proto67["m_columns"][] = "phone";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "LEFT OUTER JOIN eportal.persons_phones ON eportal.persons.id = eportal.persons_phones.person_id";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto68=array();
$proto68["m_sql"] = "eportal.persons_phones.person_id = eportal.persons.id";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "eportal.persons_phones",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "= eportal.persons.id";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
												$proto70=array();
$proto70["m_link"] = "SQLL_INNERJOIN";
			$proto71=array();
$proto71["m_strName"] = "bolsa_empleo.bolsa_users";
$proto71["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "id";
$proto71["m_columns"][] = "nro_documento";
$proto71["m_columns"][] = "clave";
$proto71["m_columns"][] = "email";
$proto71["m_columns"][] = "groupid";
$proto71["m_columns"][] = "active";
$proto71["m_columns"][] = "reset_token";
$proto71["m_columns"][] = "reset_date";
$proto71["m_columns"][] = "fecha_alta";
$proto71["m_columns"][] = "llave";
$proto71["m_columns"][] = "estado_llave";
$proto71["m_columns"][] = "senadis";
$proto71["m_columns"][] = "trabajo_antes";
$proto71["m_columns"][] = "userpic";
$proto71["m_columns"][] = "personaid";
$proto71["m_columns"][] = "fullname";
$proto71["m_columns"][] = "username";
$proto71["m_columns"][] = "hash_generado";
$proto71["m_columns"][] = "adjunto_foto_perfil";
$proto71["m_columns"][] = "cantidad_omision_cambio_password";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "INNER JOIN bolsa_empleo.bolsa_users ON eportal.persons_docs.valor = bolsa_empleo.bolsa_users.nro_documento";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto72=array();
$proto72["m_sql"] = "bolsa_empleo.bolsa_users.nro_documento = eportal.persons_docs.valor";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "nro_documento",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "= eportal.persons_docs.valor";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

$proto70["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto70);

$proto0["m_fromlist"][]=$obj;
												$proto74=array();
$proto74["m_link"] = "SQLL_INNERJOIN";
			$proto75=array();
$proto75["m_strName"] = "bolsa_empleo.vacancia_empresa";
$proto75["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto75["m_columns"] = array();
$proto75["m_columns"][] = "id_empresa_vacancia";
$proto75["m_columns"][] = "id_empresa_sucursal";
$proto75["m_columns"][] = "id_contacto_sucursal";
$proto75["m_columns"][] = "id_cidudad";
$proto75["m_columns"][] = "id_departamento";
$proto75["m_columns"][] = "id_vacancia";
$obj = new SQLTable($proto75);

$proto74["m_table"] = $obj;
$proto74["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia";
$proto74["m_alias"] = "";
$proto74["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto76=array();
$proto76["m_sql"] = "bolsa_empleo.vacancia_empresa.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

$proto74["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto74);

$proto0["m_fromlist"][]=$obj;
												$proto78=array();
$proto78["m_link"] = "SQLL_INNERJOIN";
			$proto79=array();
$proto79["m_strName"] = "bolsa_empleo.vacancia_puesto";
$proto79["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "id_puesto_vacancia";
$proto79["m_columns"][] = "nombre_puesto";
$proto79["m_columns"][] = "salario";
$proto79["m_columns"][] = "tipo_contrato";
$proto79["m_columns"][] = "descripcion_puesto";
$proto79["m_columns"][] = "id_vacancia";
$proto79["m_columns"][] = "id_rubro";
$proto79["m_columns"][] = "anos_experiencia_vacancia";
$proto79["m_columns"][] = "fk_ocupacion_puesto";
$proto79["m_columns"][] = "meses_experiencia_vacancia";
$proto79["m_columns"][] = "horario_rotativo";
$proto79["m_columns"][] = "beneficios";
$proto79["m_columns"][] = "modalidad_trabajo";
$proto79["m_columns"][] = "descripcion_salario";
$proto79["m_columns"][] = "color";
$proto79["m_columns"][] = "tipo_remuneracion";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto80=array();
$proto80["m_sql"] = "bolsa_empleo.vacancia_puesto.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
												$proto82=array();
$proto82["m_link"] = "SQLL_INNERJOIN";
			$proto83=array();
$proto83["m_strName"] = "bolsa_empleo.vista_ocupaciones";
$proto83["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto83["m_columns"] = array();
$proto83["m_columns"][] = "id_ocu_puest_clasi";
$proto83["m_columns"][] = "descripcion";
$proto83["m_columns"][] = "codigo";
$proto83["m_columns"][] = "color";
$obj = new SQLTable($proto83);

$proto82["m_table"] = $obj;
$proto82["m_sql"] = "INNER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi";
$proto82["m_alias"] = "";
$proto82["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto84=array();
$proto84["m_sql"] = "bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi = bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto84["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ocu_puest_clasi",
	"m_strTable" => "bolsa_empleo.vista_ocupaciones",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto84["m_column"]=$obj;
$proto84["m_contained"] = array();
$proto84["m_strCase"] = "= bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto84["m_havingmode"] = false;
$proto84["m_inBrackets"] = false;
$proto84["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto84);

$proto82["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto82);

$proto0["m_fromlist"][]=$obj;
												$proto86=array();
$proto86["m_link"] = "SQLL_INNERJOIN";
			$proto87=array();
$proto87["m_strName"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto87["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto87["m_columns"] = array();
$proto87["m_columns"][] = "id";
$proto87["m_columns"][] = "empresas_bolsa_id";
$proto87["m_columns"][] = "ruc";
$proto87["m_columns"][] = "legal";
$proto87["m_columns"][] = "fantasy";
$proto87["m_columns"][] = "city_id";
$proto87["m_columns"][] = "distrito_id";
$proto87["m_columns"][] = "tel";
$proto87["m_columns"][] = "email";
$proto87["m_columns"][] = "id_tipo_sucursal";
$proto87["m_columns"][] = "nro_patronal";
$proto87["m_columns"][] = "direccion";
$proto87["m_columns"][] = "fecha_creacion";
$obj = new SQLTable($proto87);

$proto86["m_table"] = $obj;
$proto86["m_sql"] = "INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id";
$proto86["m_alias"] = "";
$proto86["m_srcTableName"] = "bolsa_empleo.postulacion_preseleccionado";
$proto88=array();
$proto88["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id = bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "= bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

$proto86["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto86);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto90=array();
						$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.persons_estado_civil_type",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto90["m_column"]=$obj;
$obj = new SQLGroupByItem($proto90);

$proto0["m_groupby"][]=$obj;
												$proto92=array();
						$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto92["m_column"]=$obj;
$obj = new SQLGroupByItem($proto92);

$proto0["m_groupby"][]=$obj;
												$proto94=array();
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto94["m_column"]=$obj;
$obj = new SQLGroupByItem($proto94);

$proto0["m_groupby"][]=$obj;
												$proto96=array();
						$obj = new SQLField(array(
	"m_strName" => "hash_generado",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto96["m_column"]=$obj;
$obj = new SQLGroupByItem($proto96);

$proto0["m_groupby"][]=$obj;
												$proto98=array();
						$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto98["m_column"]=$obj;
$obj = new SQLGroupByItem($proto98);

$proto0["m_groupby"][]=$obj;
												$proto100=array();
						$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto100["m_column"]=$obj;
$obj = new SQLGroupByItem($proto100);

$proto0["m_groupby"][]=$obj;
												$proto102=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto102["m_column"]=$obj;
$obj = new SQLGroupByItem($proto102);

$proto0["m_groupby"][]=$obj;
												$proto104=array();
						$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto104["m_column"]=$obj;
$obj = new SQLGroupByItem($proto104);

$proto0["m_groupby"][]=$obj;
												$proto106=array();
						$obj = new SQLField(array(
	"m_strName" => "legal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto106["m_column"]=$obj;
$obj = new SQLGroupByItem($proto106);

$proto0["m_groupby"][]=$obj;
												$proto108=array();
						$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.vista_ocupaciones",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto108["m_column"]=$obj;
$obj = new SQLGroupByItem($proto108);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto110=array();
						$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_preseleccionado"
));

$proto110["m_column"]=$obj;
$proto110["m_bAsc"] = 1;
$proto110["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto110);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="bolsa_empleo.postulacion_preseleccionado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_postulacion_preseleccionado = createSqlQuery_postulacion_preseleccionado();


	
		;

																	

$tdatapostulacion_preseleccionado[".sqlquery"] = $queryData_postulacion_preseleccionado;



include_once(getabspath("include/postulacion_preseleccionado_events.php"));
$tdatapostulacion_preseleccionado[".hasEvents"] = true;

?>
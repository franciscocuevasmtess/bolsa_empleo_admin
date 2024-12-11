<?php
$tdatapostulacion_importar_planilla = array();
$tdatapostulacion_importar_planilla[".searchableFields"] = array();
$tdatapostulacion_importar_planilla[".ShortName"] = "postulacion_importar_planilla";
$tdatapostulacion_importar_planilla[".OwnerID"] = "";
$tdatapostulacion_importar_planilla[".OriginalTable"] = "bolsa_empleo.postulacion";


$tdatapostulacion_importar_planilla[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapostulacion_importar_planilla[".originalPagesByType"] = $tdatapostulacion_importar_planilla[".pagesByType"];
$tdatapostulacion_importar_planilla[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapostulacion_importar_planilla[".originalPages"] = $tdatapostulacion_importar_planilla[".pages"];
$tdatapostulacion_importar_planilla[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapostulacion_importar_planilla[".originalDefaultPages"] = $tdatapostulacion_importar_planilla[".defaultPages"];

//	field labels
$fieldLabelspostulacion_importar_planilla = array();
$fieldToolTipspostulacion_importar_planilla = array();
$pageTitlespostulacion_importar_planilla = array();
$placeHolderspostulacion_importar_planilla = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspostulacion_importar_planilla["Spanish"] = array();
	$fieldToolTipspostulacion_importar_planilla["Spanish"] = array();
	$placeHolderspostulacion_importar_planilla["Spanish"] = array();
	$pageTitlespostulacion_importar_planilla["Spanish"] = array();
	$fieldLabelspostulacion_importar_planilla["Spanish"]["nombre_completo"] = "Postulante";
	$fieldToolTipspostulacion_importar_planilla["Spanish"]["nombre_completo"] = "";
	$placeHolderspostulacion_importar_planilla["Spanish"]["nombre_completo"] = "";
	$fieldLabelspostulacion_importar_planilla["Spanish"]["id_postulacion"] = "Nro. Postulación";
	$fieldToolTipspostulacion_importar_planilla["Spanish"]["id_postulacion"] = "";
	$placeHolderspostulacion_importar_planilla["Spanish"]["id_postulacion"] = "";
	$fieldLabelspostulacion_importar_planilla["Spanish"]["estado"] = "Estado Vacancia";
	$fieldToolTipspostulacion_importar_planilla["Spanish"]["estado"] = "";
	$placeHolderspostulacion_importar_planilla["Spanish"]["estado"] = "";
	$fieldLabelspostulacion_importar_planilla["Spanish"]["nombre"] = "Feria Empleo";
	$fieldToolTipspostulacion_importar_planilla["Spanish"]["nombre"] = "";
	$placeHolderspostulacion_importar_planilla["Spanish"]["nombre"] = "";
	$fieldLabelspostulacion_importar_planilla["Spanish"]["descripcion"] = "Estado Postulante";
	$fieldToolTipspostulacion_importar_planilla["Spanish"]["descripcion"] = "";
	$placeHolderspostulacion_importar_planilla["Spanish"]["descripcion"] = "";
	$fieldLabelspostulacion_importar_planilla["Spanish"]["fecha_postulacion"] = "Fecha Postulacion";
	$fieldToolTipspostulacion_importar_planilla["Spanish"]["fecha_postulacion"] = "";
	$placeHolderspostulacion_importar_planilla["Spanish"]["fecha_postulacion"] = "";
	$fieldLabelspostulacion_importar_planilla["Spanish"]["id_vacancias"] = "Nro. Vacancia";
	$fieldToolTipspostulacion_importar_planilla["Spanish"]["id_vacancias"] = "";
	$placeHolderspostulacion_importar_planilla["Spanish"]["id_vacancias"] = "";
	if (count($fieldToolTipspostulacion_importar_planilla["Spanish"]))
		$tdatapostulacion_importar_planilla[".isUseToolTips"] = true;
}


	$tdatapostulacion_importar_planilla[".NCSearch"] = true;



$tdatapostulacion_importar_planilla[".shortTableName"] = "postulacion_importar_planilla";
$tdatapostulacion_importar_planilla[".nSecOptions"] = 0;

$tdatapostulacion_importar_planilla[".mainTableOwnerID"] = "";
$tdatapostulacion_importar_planilla[".entityType"] = 1;
$tdatapostulacion_importar_planilla[".connId"] = "eportal_at_192_168_70_170";


$tdatapostulacion_importar_planilla[".strOriginalTableName"] = "bolsa_empleo.postulacion";

	



$tdatapostulacion_importar_planilla[".showAddInPopup"] = false;

$tdatapostulacion_importar_planilla[".showEditInPopup"] = false;

$tdatapostulacion_importar_planilla[".showViewInPopup"] = false;

$tdatapostulacion_importar_planilla[".listAjax"] = false;
//	temporary
//$tdatapostulacion_importar_planilla[".listAjax"] = false;

	$tdatapostulacion_importar_planilla[".audit"] = true;

	$tdatapostulacion_importar_planilla[".locking"] = false;


$pages = $tdatapostulacion_importar_planilla[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapostulacion_importar_planilla[".edit"] = true;
	$tdatapostulacion_importar_planilla[".afterEditAction"] = 1;
	$tdatapostulacion_importar_planilla[".closePopupAfterEdit"] = 1;
	$tdatapostulacion_importar_planilla[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapostulacion_importar_planilla[".add"] = true;
$tdatapostulacion_importar_planilla[".afterAddAction"] = 1;
$tdatapostulacion_importar_planilla[".closePopupAfterAdd"] = 1;
$tdatapostulacion_importar_planilla[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapostulacion_importar_planilla[".list"] = true;
}



$tdatapostulacion_importar_planilla[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapostulacion_importar_planilla[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapostulacion_importar_planilla[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapostulacion_importar_planilla[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapostulacion_importar_planilla[".printFriendly"] = true;
}



$tdatapostulacion_importar_planilla[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapostulacion_importar_planilla[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapostulacion_importar_planilla[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapostulacion_importar_planilla[".isUseAjaxSuggest"] = true;



																																																			

$tdatapostulacion_importar_planilla[".ajaxCodeSnippetAdded"] = false;

$tdatapostulacion_importar_planilla[".buttonsAdded"] = false;

$tdatapostulacion_importar_planilla[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapostulacion_importar_planilla[".isUseTimeForSearch"] = false;


$tdatapostulacion_importar_planilla[".badgeColor"] = "DC143C";


$tdatapostulacion_importar_planilla[".allSearchFields"] = array();
$tdatapostulacion_importar_planilla[".filterFields"] = array();
$tdatapostulacion_importar_planilla[".requiredSearchFields"] = array();

$tdatapostulacion_importar_planilla[".googleLikeFields"] = array();
$tdatapostulacion_importar_planilla[".googleLikeFields"][] = "id_vacancias";
$tdatapostulacion_importar_planilla[".googleLikeFields"][] = "estado";
$tdatapostulacion_importar_planilla[".googleLikeFields"][] = "nombre";
$tdatapostulacion_importar_planilla[".googleLikeFields"][] = "id_postulacion";
$tdatapostulacion_importar_planilla[".googleLikeFields"][] = "nombre_completo";
$tdatapostulacion_importar_planilla[".googleLikeFields"][] = "descripcion";
$tdatapostulacion_importar_planilla[".googleLikeFields"][] = "fecha_postulacion";



$tdatapostulacion_importar_planilla[".tableType"] = "list";

$tdatapostulacion_importar_planilla[".printerPageOrientation"] = 0;
$tdatapostulacion_importar_planilla[".nPrinterPageScale"] = 100;

$tdatapostulacion_importar_planilla[".nPrinterSplitRecords"] = 40;

$tdatapostulacion_importar_planilla[".geocodingEnabled"] = false;










$tdatapostulacion_importar_planilla[".pageSize"] = 10;

$tdatapostulacion_importar_planilla[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapostulacion_importar_planilla[".strOrderBy"] = $tstrOrderBy;

$tdatapostulacion_importar_planilla[".orderindexes"] = array();


$tdatapostulacion_importar_planilla[".sqlHead"] = "SELECT bolsa_empleo.postulacion.id_vacancia AS id_vacancias,  bolsa_empleo.vacancia_estado.estado,  bolsa_empleo.feria_empleo.nombre,  bolsa_empleo.postulacion.id_postulacion,  eportal.persons.nombre || ' ' || eportal.persons.apellidos AS nombre_completo,  bolsa_empleo.estado_postulacion.descripcion,  bolsa_empleo.postulacion.fecha_postulacion";
$tdatapostulacion_importar_planilla[".sqlFrom"] = "FROM bolsa_empleo.postulacion  		LEFT JOIN bolsa_empleo.vacancia ON bolsa_empleo.postulacion.id_vacancia = bolsa_empleo.vacancia.id_vacancias  				JOIN bolsa_empleo.vacancia_estado ON bolsa_empleo.vacancia.id_estado_vacancia = CAST(bolsa_empleo.vacancia_estado.id_vacancia_estado AS TEXT)  				JOIN bolsa_empleo.feria_empleo ON bolsa_empleo.vacancia.fk_id_feria_empleo = bolsa_empleo.feria_empleo.id_feria_empleo  		JOIN bolsa_empleo.estado_postulacion ON bolsa_empleo.postulacion.id_estado = bolsa_empleo.estado_postulacion.id_estado_postulacion  		JOIN eportal.persons ON bolsa_empleo.postulacion.fk_personaid = eportal.persons.id";
$tdatapostulacion_importar_planilla[".sqlWhereExpr"] = "";
$tdatapostulacion_importar_planilla[".sqlTail"] = "";

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
$tdatapostulacion_importar_planilla[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapostulacion_importar_planilla[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapostulacion_importar_planilla[".arrGroupsPerPage"] = $arrGPP;

$tdatapostulacion_importar_planilla[".highlightSearchResults"] = true;

$tableKeyspostulacion_importar_planilla = array();
$tdatapostulacion_importar_planilla[".Keys"] = $tableKeyspostulacion_importar_planilla;


$tdatapostulacion_importar_planilla[".hideMobileList"] = array();




//	id_vacancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_vacancias";
	$fdata["GoodName"] = "id_vacancias";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_importar_planilla","id_vacancias");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_vacancia";

	
	
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


	$tdatapostulacion_importar_planilla["id_vacancias"] = $fdata;
		$tdatapostulacion_importar_planilla[".searchableFields"][] = "id_vacancias";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_estado";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_importar_planilla","estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_estado.estado";

	
	
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


	$tdatapostulacion_importar_planilla["estado"] = $fdata;
		$tdatapostulacion_importar_planilla[".searchableFields"][] = "estado";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "bolsa_empleo.feria_empleo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_importar_planilla","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.feria_empleo.nombre";

	
	
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


	$tdatapostulacion_importar_planilla["nombre"] = $fdata;
		$tdatapostulacion_importar_planilla[".searchableFields"][] = "nombre";
//	id_postulacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_postulacion";
	$fdata["GoodName"] = "id_postulacion";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_importar_planilla","id_postulacion");
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


	$tdatapostulacion_importar_planilla["id_postulacion"] = $fdata;
		$tdatapostulacion_importar_planilla[".searchableFields"][] = "id_postulacion";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_importar_planilla","nombre_completo");
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


	$tdatapostulacion_importar_planilla["nombre_completo"] = $fdata;
		$tdatapostulacion_importar_planilla[".searchableFields"][] = "nombre_completo";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.estado_postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_importar_planilla","descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.estado_postulacion.descripcion";

	
	
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


	$tdatapostulacion_importar_planilla["descripcion"] = $fdata;
		$tdatapostulacion_importar_planilla[".searchableFields"][] = "descripcion";
//	fecha_postulacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_postulacion";
	$fdata["GoodName"] = "fecha_postulacion";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion_importar_planilla","fecha_postulacion");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_postulacion";

		$fdata["sourceSingle"] = "fecha_postulacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.postulacion.fecha_postulacion";

	
	
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


	$tdatapostulacion_importar_planilla["fecha_postulacion"] = $fdata;
		$tdatapostulacion_importar_planilla[".searchableFields"][] = "fecha_postulacion";


$tables_data["bolsa_empleo.postulacion_importar_planilla"]=&$tdatapostulacion_importar_planilla;
$field_labels["bolsa_empleo_postulacion_importar_planilla"] = &$fieldLabelspostulacion_importar_planilla;
$fieldToolTips["bolsa_empleo_postulacion_importar_planilla"] = &$fieldToolTipspostulacion_importar_planilla;
$placeHolders["bolsa_empleo_postulacion_importar_planilla"] = &$placeHolderspostulacion_importar_planilla;
$page_titles["bolsa_empleo_postulacion_importar_planilla"] = &$pageTitlespostulacion_importar_planilla;


changeTextControlsToDate( "bolsa_empleo.postulacion_importar_planilla" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.postulacion_importar_planilla"] = array();
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


		
	$detailsTablesData["bolsa_empleo.postulacion_importar_planilla"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.postulacion_importar_planilla"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.postulacion_importar_planilla"][$dIndex]["masterKeys"][]="id_postulacion";

				$detailsTablesData["bolsa_empleo.postulacion_importar_planilla"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.postulacion_importar_planilla"][$dIndex]["detailKeys"][]="id_postulacion";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.postulacion_importar_planilla"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_postulacion_importar_planilla()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bolsa_empleo.postulacion.id_vacancia AS id_vacancias,  bolsa_empleo.vacancia_estado.estado,  bolsa_empleo.feria_empleo.nombre,  bolsa_empleo.postulacion.id_postulacion,  eportal.persons.nombre || ' ' || eportal.persons.apellidos AS nombre_completo,  bolsa_empleo.estado_postulacion.descripcion,  bolsa_empleo.postulacion.fecha_postulacion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.postulacion  		LEFT JOIN bolsa_empleo.vacancia ON bolsa_empleo.postulacion.id_vacancia = bolsa_empleo.vacancia.id_vacancias  				JOIN bolsa_empleo.vacancia_estado ON bolsa_empleo.vacancia.id_estado_vacancia = CAST(bolsa_empleo.vacancia_estado.id_vacancia_estado AS TEXT)  				JOIN bolsa_empleo.feria_empleo ON bolsa_empleo.vacancia.fk_id_feria_empleo = bolsa_empleo.feria_empleo.id_feria_empleo  		JOIN bolsa_empleo.estado_postulacion ON bolsa_empleo.postulacion.id_estado = bolsa_empleo.estado_postulacion.id_estado_postulacion  		JOIN eportal.persons ON bolsa_empleo.postulacion.fk_personaid = eportal.persons.id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
			$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_importar_planilla"
));

$proto6["m_sql"] = "bolsa_empleo.postulacion.id_vacancia";
$proto6["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "id_vacancias";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "bolsa_empleo.vacancia_estado",
	"m_srcTableName" => "bolsa_empleo.postulacion_importar_planilla"
));

$proto8["m_sql"] = "bolsa_empleo.vacancia_estado.estado";
$proto8["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "bolsa_empleo.feria_empleo",
	"m_srcTableName" => "bolsa_empleo.postulacion_importar_planilla"
));

$proto10["m_sql"] = "bolsa_empleo.feria_empleo.nombre";
$proto10["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_importar_planilla"
));

$proto12["m_sql"] = "bolsa_empleo.postulacion.id_postulacion";
$proto12["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "eportal.persons.nombre || ' ' || eportal.persons.apellidos"
));

$proto14["m_sql"] = "eportal.persons.nombre || ' ' || eportal.persons.apellidos";
$proto14["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "nombre_completo";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.estado_postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_importar_planilla"
));

$proto16["m_sql"] = "bolsa_empleo.estado_postulacion.descripcion";
$proto16["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_importar_planilla"
));

$proto18["m_sql"] = "bolsa_empleo.postulacion.fecha_postulacion";
$proto18["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "bolsa_empleo.postulacion";
$proto21["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_postulacion";
$proto21["m_columns"][] = "id_vacancia";
$proto21["m_columns"][] = "id_estado";
$proto21["m_columns"][] = "fecha_postulacion";
$proto21["m_columns"][] = "fk_personaid";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "bolsa_empleo.postulacion";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_LEFTJOIN";
			$proto25=array();
$proto25["m_strName"] = "bolsa_empleo.vacancia";
$proto25["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id_vacancias";
$proto25["m_columns"][] = "fecha_creacion_vacancia";
$proto25["m_columns"][] = "id_estado_vacancia";
$proto25["m_columns"][] = "fecha_expiracion_vacancia";
$proto25["m_columns"][] = "cantidad_vacancia";
$proto25["m_columns"][] = "geolocation";
$proto25["m_columns"][] = "fk_id_feria_empleo";
$proto25["m_columns"][] = "usuario";
$proto25["m_columns"][] = "origen";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "LEFT JOIN bolsa_empleo.vacancia ON bolsa_empleo.postulacion.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto26=array();
$proto26["m_sql"] = "bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.postulacion.id_vacancia";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.postulacion_importar_planilla"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= bolsa_empleo.postulacion.id_vacancia";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_INNERJOIN";
			$proto29=array();
$proto29["m_strName"] = "bolsa_empleo.vacancia_estado";
$proto29["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id_vacancia_estado";
$proto29["m_columns"][] = "estado";
$proto29["m_columns"][] = "descripcion_estado";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "JOIN bolsa_empleo.vacancia_estado ON bolsa_empleo.vacancia.id_estado_vacancia = CAST(bolsa_empleo.vacancia_estado.id_vacancia_estado AS TEXT)";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto30=array();
$proto30["m_sql"] = "bolsa_empleo.vacancia.id_estado_vacancia = CAST(bolsa_empleo.vacancia_estado.id_vacancia_estado AS TEXT)";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_estado_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.postulacion_importar_planilla"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= CAST(bolsa_empleo.vacancia_estado.id_vacancia_estado AS TEXT)";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_INNERJOIN";
			$proto33=array();
$proto33["m_strName"] = "bolsa_empleo.feria_empleo";
$proto33["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id_feria_empleo";
$proto33["m_columns"][] = "nombre";
$proto33["m_columns"][] = "fecha_inicio";
$proto33["m_columns"][] = "fecha_fin";
$proto33["m_columns"][] = "locacion";
$proto33["m_columns"][] = "asistentes";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "JOIN bolsa_empleo.feria_empleo ON bolsa_empleo.vacancia.fk_id_feria_empleo = bolsa_empleo.feria_empleo.id_feria_empleo";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto34=array();
$proto34["m_sql"] = "bolsa_empleo.feria_empleo.id_feria_empleo = bolsa_empleo.vacancia.fk_id_feria_empleo";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_feria_empleo",
	"m_strTable" => "bolsa_empleo.feria_empleo",
	"m_srcTableName" => "bolsa_empleo.postulacion_importar_planilla"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= bolsa_empleo.vacancia.fk_id_feria_empleo";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_INNERJOIN";
			$proto37=array();
$proto37["m_strName"] = "bolsa_empleo.estado_postulacion";
$proto37["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id_estado_postulacion";
$proto37["m_columns"][] = "descripcion";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "JOIN bolsa_empleo.estado_postulacion ON bolsa_empleo.postulacion.id_estado = bolsa_empleo.estado_postulacion.id_estado_postulacion";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto38=array();
$proto38["m_sql"] = "bolsa_empleo.estado_postulacion.id_estado_postulacion = bolsa_empleo.postulacion.id_estado";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_estado_postulacion",
	"m_strTable" => "bolsa_empleo.estado_postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion_importar_planilla"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= bolsa_empleo.postulacion.id_estado";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_INNERJOIN";
			$proto41=array();
$proto41["m_strName"] = "eportal.persons";
$proto41["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id";
$proto41["m_columns"][] = "nombre";
$proto41["m_columns"][] = "apellidos";
$proto41["m_columns"][] = "nacionalidad";
$proto41["m_columns"][] = "fechanac";
$proto41["m_columns"][] = "sexo";
$proto41["m_columns"][] = "estado_civil";
$proto41["m_columns"][] = "canthijos";
$proto41["m_columns"][] = "domicilio";
$proto41["m_columns"][] = "city_id";
$proto41["m_columns"][] = "distrito_id";
$proto41["m_columns"][] = "esindigena";
$proto41["m_columns"][] = "id_profesion";
$proto41["m_columns"][] = "actualizado";
$proto41["m_columns"][] = "porcentaje_discapacidad";
$proto41["m_columns"][] = "adjunto_potencial_discapacidad";
$proto41["m_columns"][] = "adjunto_certificado_discapacidad";
$proto41["m_columns"][] = "foto";
$proto41["m_columns"][] = "resumen";
$proto41["m_columns"][] = "fk_habilidades";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "JOIN eportal.persons ON bolsa_empleo.postulacion.fk_personaid = eportal.persons.id";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "bolsa_empleo.postulacion_importar_planilla";
$proto42=array();
$proto42["m_sql"] = "eportal.persons.id = bolsa_empleo.postulacion.fk_personaid";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "bolsa_empleo.postulacion_importar_planilla"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= bolsa_empleo.postulacion.fk_personaid";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.postulacion_importar_planilla";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_postulacion_importar_planilla = createSqlQuery_postulacion_importar_planilla();


	
		;

							

$tdatapostulacion_importar_planilla[".sqlquery"] = $queryData_postulacion_importar_planilla;



$tdatapostulacion_importar_planilla[".hasEvents"] = false;

?>
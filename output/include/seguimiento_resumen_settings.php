<?php
$tdataseguimiento_resumen = array();
$tdataseguimiento_resumen[".searchableFields"] = array();
$tdataseguimiento_resumen[".ShortName"] = "seguimiento_resumen";
$tdataseguimiento_resumen[".OwnerID"] = "";
$tdataseguimiento_resumen[".OriginalTable"] = "bolsa_empleo.seguimiento_resumen";


$tdataseguimiento_resumen[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataseguimiento_resumen[".originalPagesByType"] = $tdataseguimiento_resumen[".pagesByType"];
$tdataseguimiento_resumen[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataseguimiento_resumen[".originalPages"] = $tdataseguimiento_resumen[".pages"];
$tdataseguimiento_resumen[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataseguimiento_resumen[".originalDefaultPages"] = $tdataseguimiento_resumen[".defaultPages"];

//	field labels
$fieldLabelsseguimiento_resumen = array();
$fieldToolTipsseguimiento_resumen = array();
$pageTitlesseguimiento_resumen = array();
$placeHoldersseguimiento_resumen = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsseguimiento_resumen["Spanish"] = array();
	$fieldToolTipsseguimiento_resumen["Spanish"] = array();
	$placeHoldersseguimiento_resumen["Spanish"] = array();
	$pageTitlesseguimiento_resumen["Spanish"] = array();
	$fieldLabelsseguimiento_resumen["Spanish"]["id"] = "ID";
	$fieldToolTipsseguimiento_resumen["Spanish"]["id"] = "";
	$placeHoldersseguimiento_resumen["Spanish"]["id"] = "";
	$fieldLabelsseguimiento_resumen["Spanish"]["fecha_hora"] = "Fecha Audit";
	$fieldToolTipsseguimiento_resumen["Spanish"]["fecha_hora"] = "";
	$placeHoldersseguimiento_resumen["Spanish"]["fecha_hora"] = "";
	$fieldLabelsseguimiento_resumen["Spanish"]["total_registros"] = "Total de Registros";
	$fieldToolTipsseguimiento_resumen["Spanish"]["total_registros"] = "";
	$placeHoldersseguimiento_resumen["Spanish"]["total_registros"] = "";
	$fieldLabelsseguimiento_resumen["Spanish"]["registros_fallidos"] = "Registros Fallidos";
	$fieldToolTipsseguimiento_resumen["Spanish"]["registros_fallidos"] = "";
	$placeHoldersseguimiento_resumen["Spanish"]["registros_fallidos"] = "";
	$fieldLabelsseguimiento_resumen["Spanish"]["usuario_id"] = "Usuario Id";
	$fieldToolTipsseguimiento_resumen["Spanish"]["usuario_id"] = "";
	$placeHoldersseguimiento_resumen["Spanish"]["usuario_id"] = "";
	$fieldLabelsseguimiento_resumen["Spanish"]["usuario_nombre"] = "Usuario Audit";
	$fieldToolTipsseguimiento_resumen["Spanish"]["usuario_nombre"] = "";
	$placeHoldersseguimiento_resumen["Spanish"]["usuario_nombre"] = "";
	$fieldLabelsseguimiento_resumen["Spanish"]["registros_insertados"] = "Registros Insertados";
	$fieldToolTipsseguimiento_resumen["Spanish"]["registros_insertados"] = "";
	$placeHoldersseguimiento_resumen["Spanish"]["registros_insertados"] = "";
	$fieldLabelsseguimiento_resumen["Spanish"]["id_vacancia"] = "ID Vacancia";
	$fieldToolTipsseguimiento_resumen["Spanish"]["id_vacancia"] = "";
	$placeHoldersseguimiento_resumen["Spanish"]["id_vacancia"] = "";
	$fieldLabelsseguimiento_resumen["Spanish"]["nombre_archivo"] = "Nombre Archivo";
	$fieldToolTipsseguimiento_resumen["Spanish"]["nombre_archivo"] = "";
	$placeHoldersseguimiento_resumen["Spanish"]["nombre_archivo"] = "";
	$fieldLabelsseguimiento_resumen["Spanish"]["errores"] = "Errores";
	$fieldToolTipsseguimiento_resumen["Spanish"]["errores"] = "";
	$placeHoldersseguimiento_resumen["Spanish"]["errores"] = "";
	$pageTitlesseguimiento_resumen["Spanish"]["list"] = "Resumen de carga";
	if (count($fieldToolTipsseguimiento_resumen["Spanish"]))
		$tdataseguimiento_resumen[".isUseToolTips"] = true;
}


	$tdataseguimiento_resumen[".NCSearch"] = true;



$tdataseguimiento_resumen[".shortTableName"] = "seguimiento_resumen";
$tdataseguimiento_resumen[".nSecOptions"] = 0;

$tdataseguimiento_resumen[".mainTableOwnerID"] = "";
$tdataseguimiento_resumen[".entityType"] = 1;
$tdataseguimiento_resumen[".connId"] = "eportal_at_192_168_70_170";


$tdataseguimiento_resumen[".strOriginalTableName"] = "bolsa_empleo.seguimiento_resumen";

	



$tdataseguimiento_resumen[".showAddInPopup"] = false;

$tdataseguimiento_resumen[".showEditInPopup"] = false;

$tdataseguimiento_resumen[".showViewInPopup"] = false;

$tdataseguimiento_resumen[".listAjax"] = false;
//	temporary
//$tdataseguimiento_resumen[".listAjax"] = false;

	$tdataseguimiento_resumen[".audit"] = false;

	$tdataseguimiento_resumen[".locking"] = false;


$pages = $tdataseguimiento_resumen[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataseguimiento_resumen[".edit"] = true;
	$tdataseguimiento_resumen[".afterEditAction"] = 1;
	$tdataseguimiento_resumen[".closePopupAfterEdit"] = 1;
	$tdataseguimiento_resumen[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataseguimiento_resumen[".add"] = true;
$tdataseguimiento_resumen[".afterAddAction"] = 1;
$tdataseguimiento_resumen[".closePopupAfterAdd"] = 1;
$tdataseguimiento_resumen[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataseguimiento_resumen[".list"] = true;
}



$tdataseguimiento_resumen[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataseguimiento_resumen[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataseguimiento_resumen[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataseguimiento_resumen[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataseguimiento_resumen[".printFriendly"] = true;
}



$tdataseguimiento_resumen[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataseguimiento_resumen[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataseguimiento_resumen[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataseguimiento_resumen[".isUseAjaxSuggest"] = true;



																																																																																																																														

$tdataseguimiento_resumen[".ajaxCodeSnippetAdded"] = false;

$tdataseguimiento_resumen[".buttonsAdded"] = false;

$tdataseguimiento_resumen[".addPageEvents"] = false;

// use timepicker for search panel
$tdataseguimiento_resumen[".isUseTimeForSearch"] = false;


$tdataseguimiento_resumen[".badgeColor"] = "6da5c8";


$tdataseguimiento_resumen[".allSearchFields"] = array();
$tdataseguimiento_resumen[".filterFields"] = array();
$tdataseguimiento_resumen[".requiredSearchFields"] = array();

$tdataseguimiento_resumen[".googleLikeFields"] = array();
$tdataseguimiento_resumen[".googleLikeFields"][] = "id";
$tdataseguimiento_resumen[".googleLikeFields"][] = "fecha_hora";
$tdataseguimiento_resumen[".googleLikeFields"][] = "total_registros";
$tdataseguimiento_resumen[".googleLikeFields"][] = "registros_fallidos";
$tdataseguimiento_resumen[".googleLikeFields"][] = "usuario_id";
$tdataseguimiento_resumen[".googleLikeFields"][] = "usuario_nombre";
$tdataseguimiento_resumen[".googleLikeFields"][] = "registros_insertados";
$tdataseguimiento_resumen[".googleLikeFields"][] = "id_vacancia";
$tdataseguimiento_resumen[".googleLikeFields"][] = "nombre_archivo";
$tdataseguimiento_resumen[".googleLikeFields"][] = "errores";



$tdataseguimiento_resumen[".tableType"] = "list";

$tdataseguimiento_resumen[".printerPageOrientation"] = 0;
$tdataseguimiento_resumen[".nPrinterPageScale"] = 100;

$tdataseguimiento_resumen[".nPrinterSplitRecords"] = 40;

$tdataseguimiento_resumen[".geocodingEnabled"] = false;










$tdataseguimiento_resumen[".pageSize"] = 20;

$tdataseguimiento_resumen[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataseguimiento_resumen[".strOrderBy"] = $tstrOrderBy;

$tdataseguimiento_resumen[".orderindexes"] = array();


$tdataseguimiento_resumen[".sqlHead"] = "SELECT id,  	fecha_hora,  	total_registros,  	registros_fallidos,  	usuario_id,  	usuario_nombre,  	registros_insertados,  	id_vacancia,  	nombre_archivo,  	errores";
$tdataseguimiento_resumen[".sqlFrom"] = "FROM bolsa_empleo.seguimiento_resumen";
$tdataseguimiento_resumen[".sqlWhereExpr"] = "";
$tdataseguimiento_resumen[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataseguimiento_resumen[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataseguimiento_resumen[".arrGroupsPerPage"] = $arrGPP;

$tdataseguimiento_resumen[".highlightSearchResults"] = true;

$tableKeysseguimiento_resumen = array();
$tableKeysseguimiento_resumen[] = "id";
$tdataseguimiento_resumen[".Keys"] = $tableKeysseguimiento_resumen;


$tdataseguimiento_resumen[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.seguimiento_resumen";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimiento_resumen","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdataseguimiento_resumen["id"] = $fdata;
		$tdataseguimiento_resumen[".searchableFields"][] = "id";
//	fecha_hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_hora";
	$fdata["GoodName"] = "fecha_hora";
	$fdata["ownerTable"] = "bolsa_empleo.seguimiento_resumen";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimiento_resumen","fecha_hora");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_hora";

		$fdata["sourceSingle"] = "fecha_hora";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_hora";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Long Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataseguimiento_resumen["fecha_hora"] = $fdata;
		$tdataseguimiento_resumen[".searchableFields"][] = "fecha_hora";
//	total_registros
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "total_registros";
	$fdata["GoodName"] = "total_registros";
	$fdata["ownerTable"] = "bolsa_empleo.seguimiento_resumen";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimiento_resumen","total_registros");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "total_registros";

		$fdata["sourceSingle"] = "total_registros";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_registros";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataseguimiento_resumen["total_registros"] = $fdata;
		$tdataseguimiento_resumen[".searchableFields"][] = "total_registros";
//	registros_fallidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "registros_fallidos";
	$fdata["GoodName"] = "registros_fallidos";
	$fdata["ownerTable"] = "bolsa_empleo.seguimiento_resumen";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimiento_resumen","registros_fallidos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "registros_fallidos";

		$fdata["sourceSingle"] = "registros_fallidos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "registros_fallidos";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataseguimiento_resumen["registros_fallidos"] = $fdata;
		$tdataseguimiento_resumen[".searchableFields"][] = "registros_fallidos";
//	usuario_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usuario_id";
	$fdata["GoodName"] = "usuario_id";
	$fdata["ownerTable"] = "bolsa_empleo.seguimiento_resumen";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimiento_resumen","usuario_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usuario_id";

		$fdata["sourceSingle"] = "usuario_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario_id";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataseguimiento_resumen["usuario_id"] = $fdata;
		$tdataseguimiento_resumen[".searchableFields"][] = "usuario_id";
//	usuario_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usuario_nombre";
	$fdata["GoodName"] = "usuario_nombre";
	$fdata["ownerTable"] = "bolsa_empleo.seguimiento_resumen";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimiento_resumen","usuario_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usuario_nombre";

		$fdata["sourceSingle"] = "usuario_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario_nombre";

	
	
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


	$tdataseguimiento_resumen["usuario_nombre"] = $fdata;
		$tdataseguimiento_resumen[".searchableFields"][] = "usuario_nombre";
//	registros_insertados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "registros_insertados";
	$fdata["GoodName"] = "registros_insertados";
	$fdata["ownerTable"] = "bolsa_empleo.seguimiento_resumen";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimiento_resumen","registros_insertados");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "registros_insertados";

		$fdata["sourceSingle"] = "registros_insertados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "registros_insertados";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataseguimiento_resumen["registros_insertados"] = $fdata;
		$tdataseguimiento_resumen[".searchableFields"][] = "registros_insertados";
//	id_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id_vacancia";
	$fdata["GoodName"] = "id_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.seguimiento_resumen";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimiento_resumen","id_vacancia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_vacancia";

		$fdata["sourceSingle"] = "id_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_vacancia";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataseguimiento_resumen["id_vacancia"] = $fdata;
		$tdataseguimiento_resumen[".searchableFields"][] = "id_vacancia";
//	nombre_archivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "nombre_archivo";
	$fdata["GoodName"] = "nombre_archivo";
	$fdata["ownerTable"] = "bolsa_empleo.seguimiento_resumen";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimiento_resumen","nombre_archivo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_archivo";

		$fdata["sourceSingle"] = "nombre_archivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_archivo";

	
	
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


	$tdataseguimiento_resumen["nombre_archivo"] = $fdata;
		$tdataseguimiento_resumen[".searchableFields"][] = "nombre_archivo";
//	errores
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "errores";
	$fdata["GoodName"] = "errores";
	$fdata["ownerTable"] = "bolsa_empleo.seguimiento_resumen";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimiento_resumen","errores");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "errores";

		$fdata["sourceSingle"] = "errores";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "errores";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataseguimiento_resumen["errores"] = $fdata;
		$tdataseguimiento_resumen[".searchableFields"][] = "errores";


$tables_data["bolsa_empleo.seguimiento_resumen"]=&$tdataseguimiento_resumen;
$field_labels["bolsa_empleo_seguimiento_resumen"] = &$fieldLabelsseguimiento_resumen;
$fieldToolTips["bolsa_empleo_seguimiento_resumen"] = &$fieldToolTipsseguimiento_resumen;
$placeHolders["bolsa_empleo_seguimiento_resumen"] = &$placeHoldersseguimiento_resumen;
$page_titles["bolsa_empleo_seguimiento_resumen"] = &$pageTitlesseguimiento_resumen;


changeTextControlsToDate( "bolsa_empleo.seguimiento_resumen" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.seguimiento_resumen"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.seguimiento_resumen"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.seguimiento_resumen"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.seguimiento_resumen"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.seguimiento_resumen"][0]["masterKeys"][]="id_vacancias";
				$masterTablesData["bolsa_empleo.seguimiento_resumen"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.seguimiento_resumen"][0]["detailKeys"][]="id_vacancia";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_seguimiento_resumen()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fecha_hora,  	total_registros,  	registros_fallidos,  	usuario_id,  	usuario_nombre,  	registros_insertados,  	id_vacancia,  	nombre_archivo,  	errores";
$proto0["m_strFrom"] = "FROM bolsa_empleo.seguimiento_resumen";
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
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.seguimiento_resumen",
	"m_srcTableName" => "bolsa_empleo.seguimiento_resumen"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "bolsa_empleo.seguimiento_resumen";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hora",
	"m_strTable" => "bolsa_empleo.seguimiento_resumen",
	"m_srcTableName" => "bolsa_empleo.seguimiento_resumen"
));

$proto8["m_sql"] = "fecha_hora";
$proto8["m_srcTableName"] = "bolsa_empleo.seguimiento_resumen";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "total_registros",
	"m_strTable" => "bolsa_empleo.seguimiento_resumen",
	"m_srcTableName" => "bolsa_empleo.seguimiento_resumen"
));

$proto10["m_sql"] = "total_registros";
$proto10["m_srcTableName"] = "bolsa_empleo.seguimiento_resumen";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "registros_fallidos",
	"m_strTable" => "bolsa_empleo.seguimiento_resumen",
	"m_srcTableName" => "bolsa_empleo.seguimiento_resumen"
));

$proto12["m_sql"] = "registros_fallidos";
$proto12["m_srcTableName"] = "bolsa_empleo.seguimiento_resumen";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario_id",
	"m_strTable" => "bolsa_empleo.seguimiento_resumen",
	"m_srcTableName" => "bolsa_empleo.seguimiento_resumen"
));

$proto14["m_sql"] = "usuario_id";
$proto14["m_srcTableName"] = "bolsa_empleo.seguimiento_resumen";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario_nombre",
	"m_strTable" => "bolsa_empleo.seguimiento_resumen",
	"m_srcTableName" => "bolsa_empleo.seguimiento_resumen"
));

$proto16["m_sql"] = "usuario_nombre";
$proto16["m_srcTableName"] = "bolsa_empleo.seguimiento_resumen";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "registros_insertados",
	"m_strTable" => "bolsa_empleo.seguimiento_resumen",
	"m_srcTableName" => "bolsa_empleo.seguimiento_resumen"
));

$proto18["m_sql"] = "registros_insertados";
$proto18["m_srcTableName"] = "bolsa_empleo.seguimiento_resumen";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.seguimiento_resumen",
	"m_srcTableName" => "bolsa_empleo.seguimiento_resumen"
));

$proto20["m_sql"] = "id_vacancia";
$proto20["m_srcTableName"] = "bolsa_empleo.seguimiento_resumen";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_archivo",
	"m_strTable" => "bolsa_empleo.seguimiento_resumen",
	"m_srcTableName" => "bolsa_empleo.seguimiento_resumen"
));

$proto22["m_sql"] = "nombre_archivo";
$proto22["m_srcTableName"] = "bolsa_empleo.seguimiento_resumen";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "errores",
	"m_strTable" => "bolsa_empleo.seguimiento_resumen",
	"m_srcTableName" => "bolsa_empleo.seguimiento_resumen"
));

$proto24["m_sql"] = "errores";
$proto24["m_srcTableName"] = "bolsa_empleo.seguimiento_resumen";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "bolsa_empleo.seguimiento_resumen";
$proto27["m_srcTableName"] = "bolsa_empleo.seguimiento_resumen";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "fecha_hora";
$proto27["m_columns"][] = "total_registros";
$proto27["m_columns"][] = "registros_fallidos";
$proto27["m_columns"][] = "usuario_id";
$proto27["m_columns"][] = "usuario_nombre";
$proto27["m_columns"][] = "registros_insertados";
$proto27["m_columns"][] = "id_vacancia";
$proto27["m_columns"][] = "nombre_archivo";
$proto27["m_columns"][] = "errores";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "bolsa_empleo.seguimiento_resumen";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "bolsa_empleo.seguimiento_resumen";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.seguimiento_resumen";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_seguimiento_resumen = createSqlQuery_seguimiento_resumen();


	
		;

										

$tdataseguimiento_resumen[".sqlquery"] = $queryData_seguimiento_resumen;



$tdataseguimiento_resumen[".hasEvents"] = false;

?>
<?php
$tdataempresas_bolsa = array();
$tdataempresas_bolsa[".searchableFields"] = array();
$tdataempresas_bolsa[".ShortName"] = "empresas_bolsa";
$tdataempresas_bolsa[".OwnerID"] = "";
$tdataempresas_bolsa[".OriginalTable"] = "bolsa_empleo.empresas_bolsa";


$tdataempresas_bolsa[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataempresas_bolsa[".originalPagesByType"] = $tdataempresas_bolsa[".pagesByType"];
$tdataempresas_bolsa[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataempresas_bolsa[".originalPages"] = $tdataempresas_bolsa[".pages"];
$tdataempresas_bolsa[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataempresas_bolsa[".originalDefaultPages"] = $tdataempresas_bolsa[".defaultPages"];

//	field labels
$fieldLabelsempresas_bolsa = array();
$fieldToolTipsempresas_bolsa = array();
$pageTitlesempresas_bolsa = array();
$placeHoldersempresas_bolsa = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresas_bolsa["Spanish"] = array();
	$fieldToolTipsempresas_bolsa["Spanish"] = array();
	$placeHoldersempresas_bolsa["Spanish"] = array();
	$pageTitlesempresas_bolsa["Spanish"] = array();
	$fieldLabelsempresas_bolsa["Spanish"]["id"] = "Id";
	$fieldToolTipsempresas_bolsa["Spanish"]["id"] = "";
	$placeHoldersempresas_bolsa["Spanish"]["id"] = "";
	$fieldLabelsempresas_bolsa["Spanish"]["ruc"] = "Ruc";
	$fieldToolTipsempresas_bolsa["Spanish"]["ruc"] = "";
	$placeHoldersempresas_bolsa["Spanish"]["ruc"] = "";
	$fieldLabelsempresas_bolsa["Spanish"]["legal"] = "Legal";
	$fieldToolTipsempresas_bolsa["Spanish"]["legal"] = "";
	$placeHoldersempresas_bolsa["Spanish"]["legal"] = "";
	$fieldLabelsempresas_bolsa["Spanish"]["fantasy"] = "Fantasy";
	$fieldToolTipsempresas_bolsa["Spanish"]["fantasy"] = "";
	$placeHoldersempresas_bolsa["Spanish"]["fantasy"] = "";
	$fieldLabelsempresas_bolsa["Spanish"]["fecha_creacion"] = "Fecha Creacion";
	$fieldToolTipsempresas_bolsa["Spanish"]["fecha_creacion"] = "";
	$placeHoldersempresas_bolsa["Spanish"]["fecha_creacion"] = "";
	$fieldLabelsempresas_bolsa["Spanish"]["id_estado"] = "Id Estado";
	$fieldToolTipsempresas_bolsa["Spanish"]["id_estado"] = "";
	$placeHoldersempresas_bolsa["Spanish"]["id_estado"] = "";
	$fieldLabelsempresas_bolsa["Spanish"]["id_rubro"] = "Id Rubro";
	$fieldToolTipsempresas_bolsa["Spanish"]["id_rubro"] = "";
	$placeHoldersempresas_bolsa["Spanish"]["id_rubro"] = "";
	$fieldLabelsempresas_bolsa["Spanish"]["color"] = "Color";
	$fieldToolTipsempresas_bolsa["Spanish"]["color"] = "";
	$placeHoldersempresas_bolsa["Spanish"]["color"] = "";
	$fieldLabelsempresas_bolsa["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsempresas_bolsa["Spanish"]["descripcion"] = "";
	$placeHoldersempresas_bolsa["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsempresas_bolsa["Spanish"]))
		$tdataempresas_bolsa[".isUseToolTips"] = true;
}


	$tdataempresas_bolsa[".NCSearch"] = true;



$tdataempresas_bolsa[".shortTableName"] = "empresas_bolsa";
$tdataempresas_bolsa[".nSecOptions"] = 0;

$tdataempresas_bolsa[".mainTableOwnerID"] = "";
$tdataempresas_bolsa[".entityType"] = 1;
$tdataempresas_bolsa[".connId"] = "eportal_at_192_168_70_170";


$tdataempresas_bolsa[".strOriginalTableName"] = "bolsa_empleo.empresas_bolsa";

	



$tdataempresas_bolsa[".showAddInPopup"] = false;

$tdataempresas_bolsa[".showEditInPopup"] = false;

$tdataempresas_bolsa[".showViewInPopup"] = false;

$tdataempresas_bolsa[".listAjax"] = false;
//	temporary
//$tdataempresas_bolsa[".listAjax"] = false;

	$tdataempresas_bolsa[".audit"] = true;

	$tdataempresas_bolsa[".locking"] = false;


$pages = $tdataempresas_bolsa[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataempresas_bolsa[".edit"] = true;
	$tdataempresas_bolsa[".afterEditAction"] = 1;
	$tdataempresas_bolsa[".closePopupAfterEdit"] = 1;
	$tdataempresas_bolsa[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataempresas_bolsa[".add"] = true;
$tdataempresas_bolsa[".afterAddAction"] = 1;
$tdataempresas_bolsa[".closePopupAfterAdd"] = 1;
$tdataempresas_bolsa[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataempresas_bolsa[".list"] = true;
}



$tdataempresas_bolsa[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataempresas_bolsa[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataempresas_bolsa[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataempresas_bolsa[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataempresas_bolsa[".printFriendly"] = true;
}



$tdataempresas_bolsa[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataempresas_bolsa[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataempresas_bolsa[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataempresas_bolsa[".isUseAjaxSuggest"] = true;



																																																						

$tdataempresas_bolsa[".ajaxCodeSnippetAdded"] = false;

$tdataempresas_bolsa[".buttonsAdded"] = false;

$tdataempresas_bolsa[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresas_bolsa[".isUseTimeForSearch"] = false;


$tdataempresas_bolsa[".badgeColor"] = "6B8E23";


$tdataempresas_bolsa[".allSearchFields"] = array();
$tdataempresas_bolsa[".filterFields"] = array();
$tdataempresas_bolsa[".requiredSearchFields"] = array();

$tdataempresas_bolsa[".googleLikeFields"] = array();
$tdataempresas_bolsa[".googleLikeFields"][] = "id";
$tdataempresas_bolsa[".googleLikeFields"][] = "ruc";
$tdataempresas_bolsa[".googleLikeFields"][] = "legal";
$tdataempresas_bolsa[".googleLikeFields"][] = "fantasy";
$tdataempresas_bolsa[".googleLikeFields"][] = "fecha_creacion";
$tdataempresas_bolsa[".googleLikeFields"][] = "id_estado";
$tdataempresas_bolsa[".googleLikeFields"][] = "id_rubro";
$tdataempresas_bolsa[".googleLikeFields"][] = "color";
$tdataempresas_bolsa[".googleLikeFields"][] = "descripcion";



$tdataempresas_bolsa[".tableType"] = "list";

$tdataempresas_bolsa[".printerPageOrientation"] = 0;
$tdataempresas_bolsa[".nPrinterPageScale"] = 100;

$tdataempresas_bolsa[".nPrinterSplitRecords"] = 40;

$tdataempresas_bolsa[".geocodingEnabled"] = false;










$tdataempresas_bolsa[".pageSize"] = 20;

$tdataempresas_bolsa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataempresas_bolsa[".strOrderBy"] = $tstrOrderBy;

$tdataempresas_bolsa[".orderindexes"] = array();


$tdataempresas_bolsa[".sqlHead"] = "SELECT bolsa_empleo.empresas_bolsa.id,  bolsa_empleo.empresas_bolsa.ruc,  bolsa_empleo.empresas_bolsa.legal,  bolsa_empleo.empresas_bolsa.fantasy,  bolsa_empleo.empresas_bolsa.fecha_creacion,  bolsa_empleo.empresas_bolsa.id_estado,  bolsa_empleo.empresas_bolsa.id_rubro,  bolsa_empleo.empresas_bolsa.color,  \"public\".actividad_econ.descripcion";
$tdataempresas_bolsa[".sqlFrom"] = "FROM bolsa_empleo.empresas_bolsa  INNER JOIN \"public\".actividad_econ ON bolsa_empleo.empresas_bolsa.id_rubro = \"public\".actividad_econ.id_activ_econ";
$tdataempresas_bolsa[".sqlWhereExpr"] = "";
$tdataempresas_bolsa[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresas_bolsa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresas_bolsa[".arrGroupsPerPage"] = $arrGPP;

$tdataempresas_bolsa[".highlightSearchResults"] = true;

$tableKeysempresas_bolsa = array();
$tableKeysempresas_bolsa[] = "id";
$tdataempresas_bolsa[".Keys"] = $tableKeysempresas_bolsa;


$tdataempresas_bolsa[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa.id";

	
	
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


	$tdataempresas_bolsa["id"] = $fdata;
		$tdataempresas_bolsa[".searchableFields"][] = "id";
//	ruc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ruc";
	$fdata["GoodName"] = "ruc";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa","ruc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ruc";

		$fdata["sourceSingle"] = "ruc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa.ruc";

	
	
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


	$tdataempresas_bolsa["ruc"] = $fdata;
		$tdataempresas_bolsa[".searchableFields"][] = "ruc";
//	legal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "legal";
	$fdata["GoodName"] = "legal";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa","legal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "legal";

		$fdata["sourceSingle"] = "legal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa.legal";

	
	
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


	$tdataempresas_bolsa["legal"] = $fdata;
		$tdataempresas_bolsa[".searchableFields"][] = "legal";
//	fantasy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fantasy";
	$fdata["GoodName"] = "fantasy";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa","fantasy");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fantasy";

		$fdata["sourceSingle"] = "fantasy";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa.fantasy";

	
	
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


	$tdataempresas_bolsa["fantasy"] = $fdata;
		$tdataempresas_bolsa[".searchableFields"][] = "fantasy";
//	fecha_creacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_creacion";
	$fdata["GoodName"] = "fecha_creacion";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa","fecha_creacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_creacion";

		$fdata["sourceSingle"] = "fecha_creacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa.fecha_creacion";

	
	
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


	$tdataempresas_bolsa["fecha_creacion"] = $fdata;
		$tdataempresas_bolsa[".searchableFields"][] = "fecha_creacion";
//	id_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id_estado";
	$fdata["GoodName"] = "id_estado";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa","id_estado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_estado";

		$fdata["sourceSingle"] = "id_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa.id_estado";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "bolsa_empleo.empresa_estado";
	$edata["LookupConnId"] = "eportal_at_192_168_70_170";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_empresa_estado";
	$edata["LinkFieldType"] = 2;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdataempresas_bolsa["id_estado"] = $fdata;
		$tdataempresas_bolsa[".searchableFields"][] = "id_estado";
//	id_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_rubro";
	$fdata["GoodName"] = "id_rubro";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa","id_rubro");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_rubro";

		$fdata["sourceSingle"] = "id_rubro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa.id_rubro";

	
	
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


	$tdataempresas_bolsa["id_rubro"] = $fdata;
		$tdataempresas_bolsa[".searchableFields"][] = "id_rubro";
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa","color");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "color";

		$fdata["sourceSingle"] = "color";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa.color";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataempresas_bolsa["color"] = $fdata;
		$tdataempresas_bolsa[".searchableFields"][] = "color";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "public.actividad_econ";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa","descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".actividad_econ.descripcion";

	
	
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


	$tdataempresas_bolsa["descripcion"] = $fdata;
		$tdataempresas_bolsa[".searchableFields"][] = "descripcion";


$tables_data["bolsa_empleo.empresas_bolsa"]=&$tdataempresas_bolsa;
$field_labels["bolsa_empleo_empresas_bolsa"] = &$fieldLabelsempresas_bolsa;
$fieldToolTips["bolsa_empleo_empresas_bolsa"] = &$fieldToolTipsempresas_bolsa;
$placeHolders["bolsa_empleo_empresas_bolsa"] = &$placeHoldersempresas_bolsa;
$page_titles["bolsa_empleo_empresas_bolsa"] = &$pageTitlesempresas_bolsa;


changeTextControlsToDate( "bolsa_empleo.empresas_bolsa" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.empresas_bolsa"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.empresas_bolsa"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_empresas_bolsa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bolsa_empleo.empresas_bolsa.id,  bolsa_empleo.empresas_bolsa.ruc,  bolsa_empleo.empresas_bolsa.legal,  bolsa_empleo.empresas_bolsa.fantasy,  bolsa_empleo.empresas_bolsa.fecha_creacion,  bolsa_empleo.empresas_bolsa.id_estado,  bolsa_empleo.empresas_bolsa.id_rubro,  bolsa_empleo.empresas_bolsa.color,  \"public\".actividad_econ.descripcion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.empresas_bolsa  INNER JOIN \"public\".actividad_econ ON bolsa_empleo.empresas_bolsa.id_rubro = \"public\".actividad_econ.id_activ_econ";
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
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa"
));

$proto6["m_sql"] = "bolsa_empleo.empresas_bolsa.id";
$proto6["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa"
));

$proto8["m_sql"] = "bolsa_empleo.empresas_bolsa.ruc";
$proto8["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "legal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa"
));

$proto10["m_sql"] = "bolsa_empleo.empresas_bolsa.legal";
$proto10["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fantasy",
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa"
));

$proto12["m_sql"] = "bolsa_empleo.empresas_bolsa.fantasy";
$proto12["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_creacion",
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa"
));

$proto14["m_sql"] = "bolsa_empleo.empresas_bolsa.fecha_creacion";
$proto14["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id_estado",
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa"
));

$proto16["m_sql"] = "bolsa_empleo.empresas_bolsa.id_estado";
$proto16["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_rubro",
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa"
));

$proto18["m_sql"] = "bolsa_empleo.empresas_bolsa.id_rubro";
$proto18["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa"
));

$proto20["m_sql"] = "bolsa_empleo.empresas_bolsa.color";
$proto20["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "public.actividad_econ",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa"
));

$proto22["m_sql"] = "\"public\".actividad_econ.descripcion";
$proto22["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "bolsa_empleo.empresas_bolsa";
$proto25["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "ruc";
$proto25["m_columns"][] = "legal";
$proto25["m_columns"][] = "fantasy";
$proto25["m_columns"][] = "fecha_creacion";
$proto25["m_columns"][] = "id_estado";
$proto25["m_columns"][] = "id_rubro";
$proto25["m_columns"][] = "color";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "bolsa_empleo.empresas_bolsa";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
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
$proto29["m_strName"] = "public.actividad_econ";
$proto29["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id_activ_econ";
$proto29["m_columns"][] = "descripcion";
$proto29["m_columns"][] = "codigo";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "INNER JOIN \"public\".actividad_econ ON bolsa_empleo.empresas_bolsa.id_rubro = \"public\".actividad_econ.id_activ_econ";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto30=array();
$proto30["m_sql"] = "\"public\".actividad_econ.id_activ_econ = bolsa_empleo.empresas_bolsa.id_rubro";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_activ_econ",
	"m_strTable" => "public.actividad_econ",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= bolsa_empleo.empresas_bolsa.id_rubro";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.empresas_bolsa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresas_bolsa = createSqlQuery_empresas_bolsa();


	
		;

									

$tdataempresas_bolsa[".sqlquery"] = $queryData_empresas_bolsa;



$tdataempresas_bolsa[".hasEvents"] = false;

?>
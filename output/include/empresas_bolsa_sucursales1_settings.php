<?php
$tdataempresas_bolsa_sucursales1 = array();
$tdataempresas_bolsa_sucursales1[".searchableFields"] = array();
$tdataempresas_bolsa_sucursales1[".ShortName"] = "empresas_bolsa_sucursales1";
$tdataempresas_bolsa_sucursales1[".OwnerID"] = "";
$tdataempresas_bolsa_sucursales1[".OriginalTable"] = "bolsa_empleo.empresas_bolsa_sucursales";


$tdataempresas_bolsa_sucursales1[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdataempresas_bolsa_sucursales1[".originalPagesByType"] = $tdataempresas_bolsa_sucursales1[".pagesByType"];
$tdataempresas_bolsa_sucursales1[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdataempresas_bolsa_sucursales1[".originalPages"] = $tdataempresas_bolsa_sucursales1[".pages"];
$tdataempresas_bolsa_sucursales1[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdataempresas_bolsa_sucursales1[".originalDefaultPages"] = $tdataempresas_bolsa_sucursales1[".defaultPages"];

//	field labels
$fieldLabelsempresas_bolsa_sucursales1 = array();
$fieldToolTipsempresas_bolsa_sucursales1 = array();
$pageTitlesempresas_bolsa_sucursales1 = array();
$placeHoldersempresas_bolsa_sucursales1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresas_bolsa_sucursales1["Spanish"] = array();
	$fieldToolTipsempresas_bolsa_sucursales1["Spanish"] = array();
	$placeHoldersempresas_bolsa_sucursales1["Spanish"] = array();
	$pageTitlesempresas_bolsa_sucursales1["Spanish"] = array();
	$fieldLabelsempresas_bolsa_sucursales1["Spanish"]["id"] = "Id";
	$fieldToolTipsempresas_bolsa_sucursales1["Spanish"]["id"] = "";
	$placeHoldersempresas_bolsa_sucursales1["Spanish"]["id"] = "";
	$fieldLabelsempresas_bolsa_sucursales1["Spanish"]["ruc"] = "Ruc";
	$fieldToolTipsempresas_bolsa_sucursales1["Spanish"]["ruc"] = "";
	$placeHoldersempresas_bolsa_sucursales1["Spanish"]["ruc"] = "";
	$fieldLabelsempresas_bolsa_sucursales1["Spanish"]["legal"] = "Legal";
	$fieldToolTipsempresas_bolsa_sucursales1["Spanish"]["legal"] = "";
	$placeHoldersempresas_bolsa_sucursales1["Spanish"]["legal"] = "";
	$fieldLabelsempresas_bolsa_sucursales1["Spanish"]["nro_patronal"] = "Nro Patronal";
	$fieldToolTipsempresas_bolsa_sucursales1["Spanish"]["nro_patronal"] = "";
	$placeHoldersempresas_bolsa_sucursales1["Spanish"]["nro_patronal"] = "";
	$fieldLabelsempresas_bolsa_sucursales1["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipsempresas_bolsa_sucursales1["Spanish"]["direccion"] = "";
	$placeHoldersempresas_bolsa_sucursales1["Spanish"]["direccion"] = "";
	if (count($fieldToolTipsempresas_bolsa_sucursales1["Spanish"]))
		$tdataempresas_bolsa_sucursales1[".isUseToolTips"] = true;
}


	$tdataempresas_bolsa_sucursales1[".NCSearch"] = true;



$tdataempresas_bolsa_sucursales1[".shortTableName"] = "empresas_bolsa_sucursales1";
$tdataempresas_bolsa_sucursales1[".nSecOptions"] = 0;

$tdataempresas_bolsa_sucursales1[".mainTableOwnerID"] = "";
$tdataempresas_bolsa_sucursales1[".entityType"] = 1;
$tdataempresas_bolsa_sucursales1[".connId"] = "eportal_at_192_168_70_170";


$tdataempresas_bolsa_sucursales1[".strOriginalTableName"] = "bolsa_empleo.empresas_bolsa_sucursales";

	



$tdataempresas_bolsa_sucursales1[".showAddInPopup"] = false;

$tdataempresas_bolsa_sucursales1[".showEditInPopup"] = false;

$tdataempresas_bolsa_sucursales1[".showViewInPopup"] = false;

$tdataempresas_bolsa_sucursales1[".listAjax"] = false;
//	temporary
//$tdataempresas_bolsa_sucursales1[".listAjax"] = false;

	$tdataempresas_bolsa_sucursales1[".audit"] = true;

	$tdataempresas_bolsa_sucursales1[".locking"] = false;


$pages = $tdataempresas_bolsa_sucursales1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataempresas_bolsa_sucursales1[".edit"] = true;
	$tdataempresas_bolsa_sucursales1[".afterEditAction"] = 1;
	$tdataempresas_bolsa_sucursales1[".closePopupAfterEdit"] = 1;
	$tdataempresas_bolsa_sucursales1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataempresas_bolsa_sucursales1[".add"] = true;
$tdataempresas_bolsa_sucursales1[".afterAddAction"] = 1;
$tdataempresas_bolsa_sucursales1[".closePopupAfterAdd"] = 1;
$tdataempresas_bolsa_sucursales1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataempresas_bolsa_sucursales1[".list"] = true;
}



$tdataempresas_bolsa_sucursales1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataempresas_bolsa_sucursales1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataempresas_bolsa_sucursales1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataempresas_bolsa_sucursales1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataempresas_bolsa_sucursales1[".printFriendly"] = true;
}



$tdataempresas_bolsa_sucursales1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataempresas_bolsa_sucursales1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataempresas_bolsa_sucursales1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataempresas_bolsa_sucursales1[".isUseAjaxSuggest"] = true;



																																																															

$tdataempresas_bolsa_sucursales1[".ajaxCodeSnippetAdded"] = false;

$tdataempresas_bolsa_sucursales1[".buttonsAdded"] = false;

$tdataempresas_bolsa_sucursales1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresas_bolsa_sucursales1[".isUseTimeForSearch"] = false;


$tdataempresas_bolsa_sucursales1[".badgeColor"] = "9ACD32";


$tdataempresas_bolsa_sucursales1[".allSearchFields"] = array();
$tdataempresas_bolsa_sucursales1[".filterFields"] = array();
$tdataempresas_bolsa_sucursales1[".requiredSearchFields"] = array();

$tdataempresas_bolsa_sucursales1[".googleLikeFields"] = array();
$tdataempresas_bolsa_sucursales1[".googleLikeFields"][] = "id";
$tdataempresas_bolsa_sucursales1[".googleLikeFields"][] = "ruc";
$tdataempresas_bolsa_sucursales1[".googleLikeFields"][] = "legal";
$tdataempresas_bolsa_sucursales1[".googleLikeFields"][] = "nro_patronal";
$tdataempresas_bolsa_sucursales1[".googleLikeFields"][] = "direccion";



$tdataempresas_bolsa_sucursales1[".tableType"] = "list";

$tdataempresas_bolsa_sucursales1[".printerPageOrientation"] = 0;
$tdataempresas_bolsa_sucursales1[".nPrinterPageScale"] = 100;

$tdataempresas_bolsa_sucursales1[".nPrinterSplitRecords"] = 40;

$tdataempresas_bolsa_sucursales1[".geocodingEnabled"] = false;










$tdataempresas_bolsa_sucursales1[".pageSize"] = 20;

$tdataempresas_bolsa_sucursales1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataempresas_bolsa_sucursales1[".strOrderBy"] = $tstrOrderBy;

$tdataempresas_bolsa_sucursales1[".orderindexes"] = array();


$tdataempresas_bolsa_sucursales1[".sqlHead"] = "SELECT DISTINCT id,  ruc,  legal,  nro_patronal,  direccion";
$tdataempresas_bolsa_sucursales1[".sqlFrom"] = "FROM bolsa_empleo.empresas_bolsa_sucursales";
$tdataempresas_bolsa_sucursales1[".sqlWhereExpr"] = "";
$tdataempresas_bolsa_sucursales1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresas_bolsa_sucursales1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresas_bolsa_sucursales1[".arrGroupsPerPage"] = $arrGPP;

$tdataempresas_bolsa_sucursales1[".highlightSearchResults"] = true;

$tableKeysempresas_bolsa_sucursales1 = array();
$tableKeysempresas_bolsa_sucursales1[] = "id";
$tdataempresas_bolsa_sucursales1[".Keys"] = $tableKeysempresas_bolsa_sucursales1;


$tdataempresas_bolsa_sucursales1[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa_sucursales1","id");
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


	$tdataempresas_bolsa_sucursales1["id"] = $fdata;
		$tdataempresas_bolsa_sucursales1[".searchableFields"][] = "id";
//	ruc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ruc";
	$fdata["GoodName"] = "ruc";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa_sucursales1","ruc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ruc";

		$fdata["sourceSingle"] = "ruc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ruc";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.empresas_bolsa";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ruc";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "ruc";

	

	
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


	$tdataempresas_bolsa_sucursales1["ruc"] = $fdata;
		$tdataempresas_bolsa_sucursales1[".searchableFields"][] = "ruc";
//	legal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "legal";
	$fdata["GoodName"] = "legal";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa_sucursales1","legal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "legal";

		$fdata["sourceSingle"] = "legal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "legal";

	
	
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


	$tdataempresas_bolsa_sucursales1["legal"] = $fdata;
		$tdataempresas_bolsa_sucursales1[".searchableFields"][] = "legal";
//	nro_patronal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nro_patronal";
	$fdata["GoodName"] = "nro_patronal";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa_sucursales1","nro_patronal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nro_patronal";

		$fdata["sourceSingle"] = "nro_patronal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nro_patronal";

	
	
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


	$tdataempresas_bolsa_sucursales1["nro_patronal"] = $fdata;
		$tdataempresas_bolsa_sucursales1[".searchableFields"][] = "nro_patronal";
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa_sucursales1","direccion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "direccion";

		$fdata["sourceSingle"] = "direccion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion";

	
	
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


	$tdataempresas_bolsa_sucursales1["direccion"] = $fdata;
		$tdataempresas_bolsa_sucursales1[".searchableFields"][] = "direccion";


$tables_data["bolsa_empleo.empresas_bolsa_sucursales1"]=&$tdataempresas_bolsa_sucursales1;
$field_labels["bolsa_empleo_empresas_bolsa_sucursales1"] = &$fieldLabelsempresas_bolsa_sucursales1;
$fieldToolTips["bolsa_empleo_empresas_bolsa_sucursales1"] = &$fieldToolTipsempresas_bolsa_sucursales1;
$placeHolders["bolsa_empleo_empresas_bolsa_sucursales1"] = &$placeHoldersempresas_bolsa_sucursales1;
$page_titles["bolsa_empleo_empresas_bolsa_sucursales1"] = &$pageTitlesempresas_bolsa_sucursales1;


changeTextControlsToDate( "bolsa_empleo.empresas_bolsa_sucursales1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.empresas_bolsa_sucursales1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.empresas_bolsa_sucursales1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_empresas_bolsa_sucursales1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT DISTINCT";
$proto0["m_strFieldList"] = "id,  ruc,  legal,  nro_patronal,  direccion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.empresas_bolsa_sucursales";
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
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa_sucursales1"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa_sucursales1"
));

$proto8["m_sql"] = "ruc";
$proto8["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "legal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa_sucursales1"
));

$proto10["m_sql"] = "legal";
$proto10["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nro_patronal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa_sucursales1"
));

$proto12["m_sql"] = "nro_patronal";
$proto12["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa_sucursales1"
));

$proto14["m_sql"] = "direccion";
$proto14["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto17["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales1";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "empresas_bolsa_id";
$proto17["m_columns"][] = "ruc";
$proto17["m_columns"][] = "legal";
$proto17["m_columns"][] = "fantasy";
$proto17["m_columns"][] = "city_id";
$proto17["m_columns"][] = "distrito_id";
$proto17["m_columns"][] = "tel";
$proto17["m_columns"][] = "email";
$proto17["m_columns"][] = "id_tipo_sucursal";
$proto17["m_columns"][] = "nro_patronal";
$proto17["m_columns"][] = "direccion";
$proto17["m_columns"][] = "fecha_creacion";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales1";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.empresas_bolsa_sucursales1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresas_bolsa_sucursales1 = createSqlQuery_empresas_bolsa_sucursales1();


	
		;

					

$tdataempresas_bolsa_sucursales1[".sqlquery"] = $queryData_empresas_bolsa_sucursales1;



$tdataempresas_bolsa_sucursales1[".hasEvents"] = false;

?>
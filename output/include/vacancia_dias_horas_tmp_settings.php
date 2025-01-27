<?php
$tdatavacancia_dias_horas_tmp = array();
$tdatavacancia_dias_horas_tmp[".searchableFields"] = array();
$tdatavacancia_dias_horas_tmp[".ShortName"] = "vacancia_dias_horas_tmp";
$tdatavacancia_dias_horas_tmp[".OwnerID"] = "";
$tdatavacancia_dias_horas_tmp[".OriginalTable"] = "bolsa_empleo.vacancia_dias_horas_tmp";


$tdatavacancia_dias_horas_tmp[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavacancia_dias_horas_tmp[".originalPagesByType"] = $tdatavacancia_dias_horas_tmp[".pagesByType"];
$tdatavacancia_dias_horas_tmp[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavacancia_dias_horas_tmp[".originalPages"] = $tdatavacancia_dias_horas_tmp[".pages"];
$tdatavacancia_dias_horas_tmp[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavacancia_dias_horas_tmp[".originalDefaultPages"] = $tdatavacancia_dias_horas_tmp[".defaultPages"];

//	field labels
$fieldLabelsvacancia_dias_horas_tmp = array();
$fieldToolTipsvacancia_dias_horas_tmp = array();
$pageTitlesvacancia_dias_horas_tmp = array();
$placeHoldersvacancia_dias_horas_tmp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvacancia_dias_horas_tmp["Spanish"] = array();
	$fieldToolTipsvacancia_dias_horas_tmp["Spanish"] = array();
	$placeHoldersvacancia_dias_horas_tmp["Spanish"] = array();
	$pageTitlesvacancia_dias_horas_tmp["Spanish"] = array();
	$fieldLabelsvacancia_dias_horas_tmp["Spanish"]["id_vacancia_dias_horas_trabajo"] = "Id Vacancia Dias Horas Trabajo";
	$fieldToolTipsvacancia_dias_horas_tmp["Spanish"]["id_vacancia_dias_horas_trabajo"] = "";
	$placeHoldersvacancia_dias_horas_tmp["Spanish"]["id_vacancia_dias_horas_trabajo"] = "";
	$fieldLabelsvacancia_dias_horas_tmp["Spanish"]["vacancia_dias"] = "Vacancia Dias";
	$fieldToolTipsvacancia_dias_horas_tmp["Spanish"]["vacancia_dias"] = "";
	$placeHoldersvacancia_dias_horas_tmp["Spanish"]["vacancia_dias"] = "";
	$fieldLabelsvacancia_dias_horas_tmp["Spanish"]["vacancia_horas"] = "Vacancia Horas";
	$fieldToolTipsvacancia_dias_horas_tmp["Spanish"]["vacancia_horas"] = "";
	$placeHoldersvacancia_dias_horas_tmp["Spanish"]["vacancia_horas"] = "";
	$fieldLabelsvacancia_dias_horas_tmp["Spanish"]["id_vacancias"] = "Id Vacancias";
	$fieldToolTipsvacancia_dias_horas_tmp["Spanish"]["id_vacancias"] = "";
	$placeHoldersvacancia_dias_horas_tmp["Spanish"]["id_vacancias"] = "";
	$pageTitlesvacancia_dias_horas_tmp["Spanish"]["list"] = "";
	if (count($fieldToolTipsvacancia_dias_horas_tmp["Spanish"]))
		$tdatavacancia_dias_horas_tmp[".isUseToolTips"] = true;
}


	$tdatavacancia_dias_horas_tmp[".NCSearch"] = true;



$tdatavacancia_dias_horas_tmp[".shortTableName"] = "vacancia_dias_horas_tmp";
$tdatavacancia_dias_horas_tmp[".nSecOptions"] = 0;

$tdatavacancia_dias_horas_tmp[".mainTableOwnerID"] = "";
$tdatavacancia_dias_horas_tmp[".entityType"] = 0;
$tdatavacancia_dias_horas_tmp[".connId"] = "eportal_at_192_168_70_170";


$tdatavacancia_dias_horas_tmp[".strOriginalTableName"] = "bolsa_empleo.vacancia_dias_horas_tmp";

	



$tdatavacancia_dias_horas_tmp[".showAddInPopup"] = false;

$tdatavacancia_dias_horas_tmp[".showEditInPopup"] = false;

$tdatavacancia_dias_horas_tmp[".showViewInPopup"] = false;

$tdatavacancia_dias_horas_tmp[".listAjax"] = false;
//	temporary
//$tdatavacancia_dias_horas_tmp[".listAjax"] = false;

	$tdatavacancia_dias_horas_tmp[".audit"] = false;

	$tdatavacancia_dias_horas_tmp[".locking"] = false;


$pages = $tdatavacancia_dias_horas_tmp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavacancia_dias_horas_tmp[".edit"] = true;
	$tdatavacancia_dias_horas_tmp[".afterEditAction"] = 1;
	$tdatavacancia_dias_horas_tmp[".closePopupAfterEdit"] = 1;
	$tdatavacancia_dias_horas_tmp[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavacancia_dias_horas_tmp[".add"] = true;
$tdatavacancia_dias_horas_tmp[".afterAddAction"] = 1;
$tdatavacancia_dias_horas_tmp[".closePopupAfterAdd"] = 1;
$tdatavacancia_dias_horas_tmp[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavacancia_dias_horas_tmp[".list"] = true;
}



$tdatavacancia_dias_horas_tmp[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavacancia_dias_horas_tmp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavacancia_dias_horas_tmp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavacancia_dias_horas_tmp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavacancia_dias_horas_tmp[".printFriendly"] = true;
}



$tdatavacancia_dias_horas_tmp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavacancia_dias_horas_tmp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavacancia_dias_horas_tmp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavacancia_dias_horas_tmp[".isUseAjaxSuggest"] = true;



																																																																																																												

$tdatavacancia_dias_horas_tmp[".ajaxCodeSnippetAdded"] = false;

$tdatavacancia_dias_horas_tmp[".buttonsAdded"] = false;

$tdatavacancia_dias_horas_tmp[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavacancia_dias_horas_tmp[".isUseTimeForSearch"] = false;


$tdatavacancia_dias_horas_tmp[".badgeColor"] = "3CB371";


$tdatavacancia_dias_horas_tmp[".allSearchFields"] = array();
$tdatavacancia_dias_horas_tmp[".filterFields"] = array();
$tdatavacancia_dias_horas_tmp[".requiredSearchFields"] = array();

$tdatavacancia_dias_horas_tmp[".googleLikeFields"] = array();
$tdatavacancia_dias_horas_tmp[".googleLikeFields"][] = "id_vacancia_dias_horas_trabajo";
$tdatavacancia_dias_horas_tmp[".googleLikeFields"][] = "vacancia_dias";
$tdatavacancia_dias_horas_tmp[".googleLikeFields"][] = "vacancia_horas";
$tdatavacancia_dias_horas_tmp[".googleLikeFields"][] = "id_vacancias";



$tdatavacancia_dias_horas_tmp[".tableType"] = "list";

$tdatavacancia_dias_horas_tmp[".printerPageOrientation"] = 0;
$tdatavacancia_dias_horas_tmp[".nPrinterPageScale"] = 100;

$tdatavacancia_dias_horas_tmp[".nPrinterSplitRecords"] = 40;

$tdatavacancia_dias_horas_tmp[".geocodingEnabled"] = false;










$tdatavacancia_dias_horas_tmp[".pageSize"] = 20;

$tdatavacancia_dias_horas_tmp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavacancia_dias_horas_tmp[".strOrderBy"] = $tstrOrderBy;

$tdatavacancia_dias_horas_tmp[".orderindexes"] = array();


$tdatavacancia_dias_horas_tmp[".sqlHead"] = "SELECT id_vacancia_dias_horas_trabajo,  	vacancia_dias,  	vacancia_horas,  	id_vacancias";
$tdatavacancia_dias_horas_tmp[".sqlFrom"] = "FROM bolsa_empleo.vacancia_dias_horas_tmp";
$tdatavacancia_dias_horas_tmp[".sqlWhereExpr"] = "";
$tdatavacancia_dias_horas_tmp[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavacancia_dias_horas_tmp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavacancia_dias_horas_tmp[".arrGroupsPerPage"] = $arrGPP;

$tdatavacancia_dias_horas_tmp[".highlightSearchResults"] = true;

$tableKeysvacancia_dias_horas_tmp = array();
$tableKeysvacancia_dias_horas_tmp[] = "id_vacancia_dias_horas_trabajo";
$tdatavacancia_dias_horas_tmp[".Keys"] = $tableKeysvacancia_dias_horas_tmp;


$tdatavacancia_dias_horas_tmp[".hideMobileList"] = array();




//	id_vacancia_dias_horas_trabajo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_vacancia_dias_horas_trabajo";
	$fdata["GoodName"] = "id_vacancia_dias_horas_trabajo";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_dias_horas_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_dias_horas_tmp","id_vacancia_dias_horas_trabajo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_vacancia_dias_horas_trabajo";

		$fdata["sourceSingle"] = "id_vacancia_dias_horas_trabajo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_vacancia_dias_horas_trabajo";

	
	
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


	$tdatavacancia_dias_horas_tmp["id_vacancia_dias_horas_trabajo"] = $fdata;
		$tdatavacancia_dias_horas_tmp[".searchableFields"][] = "id_vacancia_dias_horas_trabajo";
//	vacancia_dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "vacancia_dias";
	$fdata["GoodName"] = "vacancia_dias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_dias_horas_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_dias_horas_tmp","vacancia_dias");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "vacancia_dias";

		$fdata["sourceSingle"] = "vacancia_dias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vacancia_dias";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.vacancias_dias";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_dias_vacancias";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "descripcion";

	
	
	
	

	
	
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


	$tdatavacancia_dias_horas_tmp["vacancia_dias"] = $fdata;
		$tdatavacancia_dias_horas_tmp[".searchableFields"][] = "vacancia_dias";
//	vacancia_horas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vacancia_horas";
	$fdata["GoodName"] = "vacancia_horas";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_dias_horas_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_dias_horas_tmp","vacancia_horas");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "vacancia_horas";

		$fdata["sourceSingle"] = "vacancia_horas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vacancia_horas";

	
	
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");
				$edata["validateAs"]["regExp"] = "^((?:[01]\\d:[0-5][0-9]|2[0-3]:[0-5][0-9])(?:\\s?)-(?:\\s?)(?:[01]\\d:[0-5][0-9]|2[0-3]:[0-5][0-9])(?:\\s?,\\s?)?)\$";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "Ingrese Rango Adecuado", "messageType" => "Text");
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


	$tdatavacancia_dias_horas_tmp["vacancia_horas"] = $fdata;
		$tdatavacancia_dias_horas_tmp[".searchableFields"][] = "vacancia_horas";
//	id_vacancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_vacancias";
	$fdata["GoodName"] = "id_vacancias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_dias_horas_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_dias_horas_tmp","id_vacancias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_vacancias";

		$fdata["sourceSingle"] = "id_vacancias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_vacancias";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.vacancia_tmp";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_vacancias";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "id_estado_vacancia";

	

	
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


	$tdatavacancia_dias_horas_tmp["id_vacancias"] = $fdata;
		$tdatavacancia_dias_horas_tmp[".searchableFields"][] = "id_vacancias";


$tables_data["bolsa_empleo.vacancia_dias_horas_tmp"]=&$tdatavacancia_dias_horas_tmp;
$field_labels["bolsa_empleo_vacancia_dias_horas_tmp"] = &$fieldLabelsvacancia_dias_horas_tmp;
$fieldToolTips["bolsa_empleo_vacancia_dias_horas_tmp"] = &$fieldToolTipsvacancia_dias_horas_tmp;
$placeHolders["bolsa_empleo_vacancia_dias_horas_tmp"] = &$placeHoldersvacancia_dias_horas_tmp;
$page_titles["bolsa_empleo_vacancia_dias_horas_tmp"] = &$pageTitlesvacancia_dias_horas_tmp;


changeTextControlsToDate( "bolsa_empleo.vacancia_dias_horas_tmp" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.vacancia_dias_horas_tmp"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.vacancia_dias_horas_tmp"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia_tmp";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia_tmp";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia_tmp";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.vacancia_dias_horas_tmp"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.vacancia_dias_horas_tmp"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_dias_horas_tmp"][0]["masterKeys"][]="id_vacancias";
				$masterTablesData["bolsa_empleo.vacancia_dias_horas_tmp"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_dias_horas_tmp"][0]["detailKeys"][]="id_vacancias";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vacancia_dias_horas_tmp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_vacancia_dias_horas_trabajo,  	vacancia_dias,  	vacancia_horas,  	id_vacancias";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vacancia_dias_horas_tmp";
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
	"m_strName" => "id_vacancia_dias_horas_trabajo",
	"m_strTable" => "bolsa_empleo.vacancia_dias_horas_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_dias_horas_tmp"
));

$proto6["m_sql"] = "id_vacancia_dias_horas_trabajo";
$proto6["m_srcTableName"] = "bolsa_empleo.vacancia_dias_horas_tmp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "vacancia_dias",
	"m_strTable" => "bolsa_empleo.vacancia_dias_horas_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_dias_horas_tmp"
));

$proto8["m_sql"] = "vacancia_dias";
$proto8["m_srcTableName"] = "bolsa_empleo.vacancia_dias_horas_tmp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vacancia_horas",
	"m_strTable" => "bolsa_empleo.vacancia_dias_horas_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_dias_horas_tmp"
));

$proto10["m_sql"] = "vacancia_horas";
$proto10["m_srcTableName"] = "bolsa_empleo.vacancia_dias_horas_tmp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia_dias_horas_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_dias_horas_tmp"
));

$proto12["m_sql"] = "id_vacancias";
$proto12["m_srcTableName"] = "bolsa_empleo.vacancia_dias_horas_tmp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "bolsa_empleo.vacancia_dias_horas_tmp";
$proto15["m_srcTableName"] = "bolsa_empleo.vacancia_dias_horas_tmp";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_vacancia_dias_horas_trabajo";
$proto15["m_columns"][] = "vacancia_dias";
$proto15["m_columns"][] = "vacancia_horas";
$proto15["m_columns"][] = "id_vacancias";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "bolsa_empleo.vacancia_dias_horas_tmp";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "bolsa_empleo.vacancia_dias_horas_tmp";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.vacancia_dias_horas_tmp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vacancia_dias_horas_tmp = createSqlQuery_vacancia_dias_horas_tmp();


	
		;

				

$tdatavacancia_dias_horas_tmp[".sqlquery"] = $queryData_vacancia_dias_horas_tmp;



$tdatavacancia_dias_horas_tmp[".hasEvents"] = false;

?>
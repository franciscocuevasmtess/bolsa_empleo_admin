<?php
$tdatavacancia_dias_horas = array();
$tdatavacancia_dias_horas[".searchableFields"] = array();
$tdatavacancia_dias_horas[".ShortName"] = "vacancia_dias_horas";
$tdatavacancia_dias_horas[".OwnerID"] = "";
$tdatavacancia_dias_horas[".OriginalTable"] = "bolsa_empleo.vacancia_dias_horas";


$tdatavacancia_dias_horas[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print1\"],\"search\":[\"search\"]}" );
$tdatavacancia_dias_horas[".originalPagesByType"] = $tdatavacancia_dias_horas[".pagesByType"];
$tdatavacancia_dias_horas[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print1\"],\"search\":[\"search\"]}" ) );
$tdatavacancia_dias_horas[".originalPages"] = $tdatavacancia_dias_horas[".pages"];
$tdatavacancia_dias_horas[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"print\":\"print1\",\"search\":\"search\"}" );
$tdatavacancia_dias_horas[".originalDefaultPages"] = $tdatavacancia_dias_horas[".defaultPages"];

//	field labels
$fieldLabelsvacancia_dias_horas = array();
$fieldToolTipsvacancia_dias_horas = array();
$pageTitlesvacancia_dias_horas = array();
$placeHoldersvacancia_dias_horas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvacancia_dias_horas["Spanish"] = array();
	$fieldToolTipsvacancia_dias_horas["Spanish"] = array();
	$placeHoldersvacancia_dias_horas["Spanish"] = array();
	$pageTitlesvacancia_dias_horas["Spanish"] = array();
	$fieldLabelsvacancia_dias_horas["Spanish"]["id_vacancia_dias_horas_trabajo"] = "Id Vacancia Dias Horas Trabajo";
	$fieldToolTipsvacancia_dias_horas["Spanish"]["id_vacancia_dias_horas_trabajo"] = "";
	$placeHoldersvacancia_dias_horas["Spanish"]["id_vacancia_dias_horas_trabajo"] = "";
	$fieldLabelsvacancia_dias_horas["Spanish"]["vacancia_dias"] = "Vacancia Dias";
	$fieldToolTipsvacancia_dias_horas["Spanish"]["vacancia_dias"] = "";
	$placeHoldersvacancia_dias_horas["Spanish"]["vacancia_dias"] = "";
	$fieldLabelsvacancia_dias_horas["Spanish"]["vacancia_horas"] = "Vacancia Horas";
	$fieldToolTipsvacancia_dias_horas["Spanish"]["vacancia_horas"] = "";
	$placeHoldersvacancia_dias_horas["Spanish"]["vacancia_horas"] = "";
	$fieldLabelsvacancia_dias_horas["Spanish"]["id_vacancias"] = "Id Vacancias";
	$fieldToolTipsvacancia_dias_horas["Spanish"]["id_vacancias"] = "";
	$placeHoldersvacancia_dias_horas["Spanish"]["id_vacancias"] = "";
	if (count($fieldToolTipsvacancia_dias_horas["Spanish"]))
		$tdatavacancia_dias_horas[".isUseToolTips"] = true;
}


	$tdatavacancia_dias_horas[".NCSearch"] = true;



$tdatavacancia_dias_horas[".shortTableName"] = "vacancia_dias_horas";
$tdatavacancia_dias_horas[".nSecOptions"] = 0;

$tdatavacancia_dias_horas[".mainTableOwnerID"] = "";
$tdatavacancia_dias_horas[".entityType"] = 0;
$tdatavacancia_dias_horas[".connId"] = "eportal_at_192_168_70_170";


$tdatavacancia_dias_horas[".strOriginalTableName"] = "bolsa_empleo.vacancia_dias_horas";

	



$tdatavacancia_dias_horas[".showAddInPopup"] = false;

$tdatavacancia_dias_horas[".showEditInPopup"] = false;

$tdatavacancia_dias_horas[".showViewInPopup"] = false;

$tdatavacancia_dias_horas[".listAjax"] = false;
//	temporary
//$tdatavacancia_dias_horas[".listAjax"] = false;

	$tdatavacancia_dias_horas[".audit"] = true;

	$tdatavacancia_dias_horas[".locking"] = false;


$pages = $tdatavacancia_dias_horas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavacancia_dias_horas[".edit"] = true;
	$tdatavacancia_dias_horas[".afterEditAction"] = 1;
	$tdatavacancia_dias_horas[".closePopupAfterEdit"] = 1;
	$tdatavacancia_dias_horas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavacancia_dias_horas[".add"] = true;
$tdatavacancia_dias_horas[".afterAddAction"] = 1;
$tdatavacancia_dias_horas[".closePopupAfterAdd"] = 1;
$tdatavacancia_dias_horas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavacancia_dias_horas[".list"] = true;
}



$tdatavacancia_dias_horas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavacancia_dias_horas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavacancia_dias_horas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavacancia_dias_horas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavacancia_dias_horas[".printFriendly"] = true;
}



$tdatavacancia_dias_horas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavacancia_dias_horas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavacancia_dias_horas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavacancia_dias_horas[".isUseAjaxSuggest"] = true;



																																																																																																																																																									

$tdatavacancia_dias_horas[".ajaxCodeSnippetAdded"] = false;

$tdatavacancia_dias_horas[".buttonsAdded"] = false;

$tdatavacancia_dias_horas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavacancia_dias_horas[".isUseTimeForSearch"] = false;


$tdatavacancia_dias_horas[".badgeColor"] = "8fbc8b";


$tdatavacancia_dias_horas[".allSearchFields"] = array();
$tdatavacancia_dias_horas[".filterFields"] = array();
$tdatavacancia_dias_horas[".requiredSearchFields"] = array();

$tdatavacancia_dias_horas[".googleLikeFields"] = array();
$tdatavacancia_dias_horas[".googleLikeFields"][] = "id_vacancia_dias_horas_trabajo";
$tdatavacancia_dias_horas[".googleLikeFields"][] = "vacancia_dias";
$tdatavacancia_dias_horas[".googleLikeFields"][] = "vacancia_horas";
$tdatavacancia_dias_horas[".googleLikeFields"][] = "id_vacancias";



$tdatavacancia_dias_horas[".tableType"] = "list";

$tdatavacancia_dias_horas[".printerPageOrientation"] = 0;
$tdatavacancia_dias_horas[".nPrinterPageScale"] = 100;

$tdatavacancia_dias_horas[".nPrinterSplitRecords"] = 40;

$tdatavacancia_dias_horas[".geocodingEnabled"] = false;










$tdatavacancia_dias_horas[".pageSize"] = 20;

$tdatavacancia_dias_horas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavacancia_dias_horas[".strOrderBy"] = $tstrOrderBy;

$tdatavacancia_dias_horas[".orderindexes"] = array();


$tdatavacancia_dias_horas[".sqlHead"] = "SELECT id_vacancia_dias_horas_trabajo,  	vacancia_dias,  	vacancia_horas,  	id_vacancias";
$tdatavacancia_dias_horas[".sqlFrom"] = "FROM bolsa_empleo.vacancia_dias_horas";
$tdatavacancia_dias_horas[".sqlWhereExpr"] = "";
$tdatavacancia_dias_horas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavacancia_dias_horas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavacancia_dias_horas[".arrGroupsPerPage"] = $arrGPP;

$tdatavacancia_dias_horas[".highlightSearchResults"] = true;

$tableKeysvacancia_dias_horas = array();
$tableKeysvacancia_dias_horas[] = "id_vacancia_dias_horas_trabajo";
$tdatavacancia_dias_horas[".Keys"] = $tableKeysvacancia_dias_horas;


$tdatavacancia_dias_horas[".hideMobileList"] = array();




//	id_vacancia_dias_horas_trabajo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_vacancia_dias_horas_trabajo";
	$fdata["GoodName"] = "id_vacancia_dias_horas_trabajo";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_dias_horas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_dias_horas","id_vacancia_dias_horas_trabajo");
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


	$tdatavacancia_dias_horas["id_vacancia_dias_horas_trabajo"] = $fdata;
		$tdatavacancia_dias_horas[".searchableFields"][] = "id_vacancia_dias_horas_trabajo";
//	vacancia_dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "vacancia_dias";
	$fdata["GoodName"] = "vacancia_dias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_dias_horas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_dias_horas","vacancia_dias");
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


	$tdatavacancia_dias_horas["vacancia_dias"] = $fdata;
		$tdatavacancia_dias_horas[".searchableFields"][] = "vacancia_dias";
//	vacancia_horas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vacancia_horas";
	$fdata["GoodName"] = "vacancia_horas";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_dias_horas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_dias_horas","vacancia_horas");
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
		
		$edata["autoUpdatable"] = true;

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


	$tdatavacancia_dias_horas["vacancia_horas"] = $fdata;
		$tdatavacancia_dias_horas[".searchableFields"][] = "vacancia_horas";
//	id_vacancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_vacancias";
	$fdata["GoodName"] = "id_vacancias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_dias_horas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_dias_horas","id_vacancias");
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
	$edata["LookupTable"] = "bolsa_empleo.vacancia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_vacancias";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "id_vacancias";

	

	
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


	$tdatavacancia_dias_horas["id_vacancias"] = $fdata;
		$tdatavacancia_dias_horas[".searchableFields"][] = "id_vacancias";


$tables_data["bolsa_empleo.vacancia_dias_horas"]=&$tdatavacancia_dias_horas;
$field_labels["bolsa_empleo_vacancia_dias_horas"] = &$fieldLabelsvacancia_dias_horas;
$fieldToolTips["bolsa_empleo_vacancia_dias_horas"] = &$fieldToolTipsvacancia_dias_horas;
$placeHolders["bolsa_empleo_vacancia_dias_horas"] = &$placeHoldersvacancia_dias_horas;
$page_titles["bolsa_empleo_vacancia_dias_horas"] = &$pageTitlesvacancia_dias_horas;


changeTextControlsToDate( "bolsa_empleo.vacancia_dias_horas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.vacancia_dias_horas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.vacancia_dias_horas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.vacancia_dias_horas"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.vacancia_dias_horas"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_dias_horas"][0]["masterKeys"][]="id_vacancias";
				$masterTablesData["bolsa_empleo.vacancia_dias_horas"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_dias_horas"][0]["detailKeys"][]="id_vacancias";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="vacancia_pendiente";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia_pendiente";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.vacancia_dias_horas"][1] = $masterParams;
				$masterTablesData["bolsa_empleo.vacancia_dias_horas"][1]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_dias_horas"][1]["masterKeys"][]="id_vacancias";
				$masterTablesData["bolsa_empleo.vacancia_dias_horas"][1]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_dias_horas"][1]["detailKeys"][]="id_vacancias";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vacancia_dias_horas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_vacancia_dias_horas_trabajo,  	vacancia_dias,  	vacancia_horas,  	id_vacancias";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vacancia_dias_horas";
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
	"m_strTable" => "bolsa_empleo.vacancia_dias_horas",
	"m_srcTableName" => "bolsa_empleo.vacancia_dias_horas"
));

$proto6["m_sql"] = "id_vacancia_dias_horas_trabajo";
$proto6["m_srcTableName"] = "bolsa_empleo.vacancia_dias_horas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "vacancia_dias",
	"m_strTable" => "bolsa_empleo.vacancia_dias_horas",
	"m_srcTableName" => "bolsa_empleo.vacancia_dias_horas"
));

$proto8["m_sql"] = "vacancia_dias";
$proto8["m_srcTableName"] = "bolsa_empleo.vacancia_dias_horas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vacancia_horas",
	"m_strTable" => "bolsa_empleo.vacancia_dias_horas",
	"m_srcTableName" => "bolsa_empleo.vacancia_dias_horas"
));

$proto10["m_sql"] = "vacancia_horas";
$proto10["m_srcTableName"] = "bolsa_empleo.vacancia_dias_horas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia_dias_horas",
	"m_srcTableName" => "bolsa_empleo.vacancia_dias_horas"
));

$proto12["m_sql"] = "id_vacancias";
$proto12["m_srcTableName"] = "bolsa_empleo.vacancia_dias_horas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "bolsa_empleo.vacancia_dias_horas";
$proto15["m_srcTableName"] = "bolsa_empleo.vacancia_dias_horas";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_vacancia_dias_horas_trabajo";
$proto15["m_columns"][] = "vacancia_dias";
$proto15["m_columns"][] = "vacancia_horas";
$proto15["m_columns"][] = "id_vacancias";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "bolsa_empleo.vacancia_dias_horas";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "bolsa_empleo.vacancia_dias_horas";
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
$proto0["m_srcTableName"]="bolsa_empleo.vacancia_dias_horas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vacancia_dias_horas = createSqlQuery_vacancia_dias_horas();


	
		;

				

$tdatavacancia_dias_horas[".sqlquery"] = $queryData_vacancia_dias_horas;



include_once(getabspath("include/vacancia_dias_horas_events.php"));
$tdatavacancia_dias_horas[".hasEvents"] = true;

?>
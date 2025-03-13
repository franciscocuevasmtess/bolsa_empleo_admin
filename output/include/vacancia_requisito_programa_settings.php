<?php
$tdatavacancia_requisito_programa = array();
$tdatavacancia_requisito_programa[".searchableFields"] = array();
$tdatavacancia_requisito_programa[".ShortName"] = "vacancia_requisito_programa";
$tdatavacancia_requisito_programa[".OwnerID"] = "";
$tdatavacancia_requisito_programa[".OriginalTable"] = "bolsa_empleo.vacancia_requisito_programa";


$tdatavacancia_requisito_programa[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print1\"],\"search\":[\"search\"]}" );
$tdatavacancia_requisito_programa[".originalPagesByType"] = $tdatavacancia_requisito_programa[".pagesByType"];
$tdatavacancia_requisito_programa[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print1\"],\"search\":[\"search\"]}" ) );
$tdatavacancia_requisito_programa[".originalPages"] = $tdatavacancia_requisito_programa[".pages"];
$tdatavacancia_requisito_programa[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"print\":\"print1\",\"search\":\"search\"}" );
$tdatavacancia_requisito_programa[".originalDefaultPages"] = $tdatavacancia_requisito_programa[".defaultPages"];

//	field labels
$fieldLabelsvacancia_requisito_programa = array();
$fieldToolTipsvacancia_requisito_programa = array();
$pageTitlesvacancia_requisito_programa = array();
$placeHoldersvacancia_requisito_programa = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvacancia_requisito_programa["Spanish"] = array();
	$fieldToolTipsvacancia_requisito_programa["Spanish"] = array();
	$placeHoldersvacancia_requisito_programa["Spanish"] = array();
	$pageTitlesvacancia_requisito_programa["Spanish"] = array();
	$fieldLabelsvacancia_requisito_programa["Spanish"]["id_vacancia_requisito_programa"] = "Id Vacancia Requisito Programa";
	$fieldToolTipsvacancia_requisito_programa["Spanish"]["id_vacancia_requisito_programa"] = "";
	$placeHoldersvacancia_requisito_programa["Spanish"]["id_vacancia_requisito_programa"] = "";
	$fieldLabelsvacancia_requisito_programa["Spanish"]["fk_id_vacancia"] = "Fk Id Vacancia";
	$fieldToolTipsvacancia_requisito_programa["Spanish"]["fk_id_vacancia"] = "";
	$placeHoldersvacancia_requisito_programa["Spanish"]["fk_id_vacancia"] = "";
	$fieldLabelsvacancia_requisito_programa["Spanish"]["id_programa"] = "Manejo de programas requeridos";
	$fieldToolTipsvacancia_requisito_programa["Spanish"]["id_programa"] = "";
	$placeHoldersvacancia_requisito_programa["Spanish"]["id_programa"] = "";
	$fieldLabelsvacancia_requisito_programa["Spanish"]["id_nivel_programa"] = "Nivel";
	$fieldToolTipsvacancia_requisito_programa["Spanish"]["id_nivel_programa"] = "";
	$placeHoldersvacancia_requisito_programa["Spanish"]["id_nivel_programa"] = "";
	if (count($fieldToolTipsvacancia_requisito_programa["Spanish"]))
		$tdatavacancia_requisito_programa[".isUseToolTips"] = true;
}


	$tdatavacancia_requisito_programa[".NCSearch"] = true;



$tdatavacancia_requisito_programa[".shortTableName"] = "vacancia_requisito_programa";
$tdatavacancia_requisito_programa[".nSecOptions"] = 0;

$tdatavacancia_requisito_programa[".mainTableOwnerID"] = "";
$tdatavacancia_requisito_programa[".entityType"] = 0;
$tdatavacancia_requisito_programa[".connId"] = "eportal_at_192_168_70_170";


$tdatavacancia_requisito_programa[".strOriginalTableName"] = "bolsa_empleo.vacancia_requisito_programa";

	



$tdatavacancia_requisito_programa[".showAddInPopup"] = false;

$tdatavacancia_requisito_programa[".showEditInPopup"] = false;

$tdatavacancia_requisito_programa[".showViewInPopup"] = false;

$tdatavacancia_requisito_programa[".listAjax"] = false;
//	temporary
//$tdatavacancia_requisito_programa[".listAjax"] = false;

	$tdatavacancia_requisito_programa[".audit"] = true;

	$tdatavacancia_requisito_programa[".locking"] = false;


$pages = $tdatavacancia_requisito_programa[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavacancia_requisito_programa[".edit"] = true;
	$tdatavacancia_requisito_programa[".afterEditAction"] = 1;
	$tdatavacancia_requisito_programa[".closePopupAfterEdit"] = 1;
	$tdatavacancia_requisito_programa[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavacancia_requisito_programa[".add"] = true;
$tdatavacancia_requisito_programa[".afterAddAction"] = 1;
$tdatavacancia_requisito_programa[".closePopupAfterAdd"] = 1;
$tdatavacancia_requisito_programa[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavacancia_requisito_programa[".list"] = true;
}



$tdatavacancia_requisito_programa[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavacancia_requisito_programa[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavacancia_requisito_programa[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavacancia_requisito_programa[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavacancia_requisito_programa[".printFriendly"] = true;
}



$tdatavacancia_requisito_programa[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavacancia_requisito_programa[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavacancia_requisito_programa[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavacancia_requisito_programa[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																													

$tdatavacancia_requisito_programa[".ajaxCodeSnippetAdded"] = false;

$tdatavacancia_requisito_programa[".buttonsAdded"] = false;

$tdatavacancia_requisito_programa[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavacancia_requisito_programa[".isUseTimeForSearch"] = false;


$tdatavacancia_requisito_programa[".badgeColor"] = "bc8f8f";


$tdatavacancia_requisito_programa[".allSearchFields"] = array();
$tdatavacancia_requisito_programa[".filterFields"] = array();
$tdatavacancia_requisito_programa[".requiredSearchFields"] = array();

$tdatavacancia_requisito_programa[".googleLikeFields"] = array();
$tdatavacancia_requisito_programa[".googleLikeFields"][] = "id_vacancia_requisito_programa";
$tdatavacancia_requisito_programa[".googleLikeFields"][] = "fk_id_vacancia";
$tdatavacancia_requisito_programa[".googleLikeFields"][] = "id_programa";
$tdatavacancia_requisito_programa[".googleLikeFields"][] = "id_nivel_programa";



$tdatavacancia_requisito_programa[".tableType"] = "list";

$tdatavacancia_requisito_programa[".printerPageOrientation"] = 0;
$tdatavacancia_requisito_programa[".nPrinterPageScale"] = 100;

$tdatavacancia_requisito_programa[".nPrinterSplitRecords"] = 40;

$tdatavacancia_requisito_programa[".geocodingEnabled"] = false;










$tdatavacancia_requisito_programa[".pageSize"] = 20;

$tdatavacancia_requisito_programa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavacancia_requisito_programa[".strOrderBy"] = $tstrOrderBy;

$tdatavacancia_requisito_programa[".orderindexes"] = array();


$tdatavacancia_requisito_programa[".sqlHead"] = "SELECT id_vacancia_requisito_programa,  	fk_id_vacancia,  	id_programa,  	id_nivel_programa";
$tdatavacancia_requisito_programa[".sqlFrom"] = "FROM bolsa_empleo.vacancia_requisito_programa";
$tdatavacancia_requisito_programa[".sqlWhereExpr"] = "";
$tdatavacancia_requisito_programa[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavacancia_requisito_programa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavacancia_requisito_programa[".arrGroupsPerPage"] = $arrGPP;

$tdatavacancia_requisito_programa[".highlightSearchResults"] = true;

$tableKeysvacancia_requisito_programa = array();
$tableKeysvacancia_requisito_programa[] = "id_vacancia_requisito_programa";
$tdatavacancia_requisito_programa[".Keys"] = $tableKeysvacancia_requisito_programa;


$tdatavacancia_requisito_programa[".hideMobileList"] = array();




//	id_vacancia_requisito_programa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_vacancia_requisito_programa";
	$fdata["GoodName"] = "id_vacancia_requisito_programa";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito_programa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_requisito_programa","id_vacancia_requisito_programa");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_vacancia_requisito_programa";

		$fdata["sourceSingle"] = "id_vacancia_requisito_programa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_vacancia_requisito_programa";

	
	
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


	$tdatavacancia_requisito_programa["id_vacancia_requisito_programa"] = $fdata;
		$tdatavacancia_requisito_programa[".searchableFields"][] = "id_vacancia_requisito_programa";
//	fk_id_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_vacancia";
	$fdata["GoodName"] = "fk_id_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito_programa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_requisito_programa","fk_id_vacancia");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_id_vacancia";

		$fdata["sourceSingle"] = "fk_id_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_vacancia";

	
	
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


	$tdatavacancia_requisito_programa["fk_id_vacancia"] = $fdata;
		$tdatavacancia_requisito_programa[".searchableFields"][] = "fk_id_vacancia";
//	id_programa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_programa";
	$fdata["GoodName"] = "id_programa";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito_programa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_requisito_programa","id_programa");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_programa";

		$fdata["sourceSingle"] = "id_programa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_programa";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.programas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_programas";
	$edata["LinkFieldType"] = 2;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "nombre";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
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
		$fdata["filterTotalFields"] = "id_vacancia_requisito_programa";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavacancia_requisito_programa["id_programa"] = $fdata;
		$tdatavacancia_requisito_programa[".searchableFields"][] = "id_programa";
//	id_nivel_programa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_nivel_programa";
	$fdata["GoodName"] = "id_nivel_programa";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito_programa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_requisito_programa","id_nivel_programa");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_nivel_programa";

		$fdata["sourceSingle"] = "id_nivel_programa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_nivel_programa";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.nivel_programa";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_nivel_programa";
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


	$tdatavacancia_requisito_programa["id_nivel_programa"] = $fdata;
		$tdatavacancia_requisito_programa[".searchableFields"][] = "id_nivel_programa";


$tables_data["bolsa_empleo.vacancia_requisito_programa"]=&$tdatavacancia_requisito_programa;
$field_labels["bolsa_empleo_vacancia_requisito_programa"] = &$fieldLabelsvacancia_requisito_programa;
$fieldToolTips["bolsa_empleo_vacancia_requisito_programa"] = &$fieldToolTipsvacancia_requisito_programa;
$placeHolders["bolsa_empleo_vacancia_requisito_programa"] = &$placeHoldersvacancia_requisito_programa;
$page_titles["bolsa_empleo_vacancia_requisito_programa"] = &$pageTitlesvacancia_requisito_programa;


changeTextControlsToDate( "bolsa_empleo.vacancia_requisito_programa" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.vacancia_requisito_programa"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.vacancia_requisito_programa"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.vacancia_requisito_programa"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.vacancia_requisito_programa"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_requisito_programa"][0]["masterKeys"][]="id_vacancias";
				$masterTablesData["bolsa_empleo.vacancia_requisito_programa"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_requisito_programa"][0]["detailKeys"][]="fk_id_vacancia";
		
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
					$masterTablesData["bolsa_empleo.vacancia_requisito_programa"][1] = $masterParams;
				$masterTablesData["bolsa_empleo.vacancia_requisito_programa"][1]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_requisito_programa"][1]["masterKeys"][]="id_vacancias";
				$masterTablesData["bolsa_empleo.vacancia_requisito_programa"][1]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_requisito_programa"][1]["detailKeys"][]="fk_id_vacancia";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vacancia_requisito_programa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_vacancia_requisito_programa,  	fk_id_vacancia,  	id_programa,  	id_nivel_programa";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vacancia_requisito_programa";
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
	"m_strName" => "id_vacancia_requisito_programa",
	"m_strTable" => "bolsa_empleo.vacancia_requisito_programa",
	"m_srcTableName" => "bolsa_empleo.vacancia_requisito_programa"
));

$proto6["m_sql"] = "id_vacancia_requisito_programa";
$proto6["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_programa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_requisito_programa",
	"m_srcTableName" => "bolsa_empleo.vacancia_requisito_programa"
));

$proto8["m_sql"] = "fk_id_vacancia";
$proto8["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_programa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_programa",
	"m_strTable" => "bolsa_empleo.vacancia_requisito_programa",
	"m_srcTableName" => "bolsa_empleo.vacancia_requisito_programa"
));

$proto10["m_sql"] = "id_programa";
$proto10["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_programa";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_nivel_programa",
	"m_strTable" => "bolsa_empleo.vacancia_requisito_programa",
	"m_srcTableName" => "bolsa_empleo.vacancia_requisito_programa"
));

$proto12["m_sql"] = "id_nivel_programa";
$proto12["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_programa";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "bolsa_empleo.vacancia_requisito_programa";
$proto15["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_programa";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_vacancia_requisito_programa";
$proto15["m_columns"][] = "fk_id_vacancia";
$proto15["m_columns"][] = "id_programa";
$proto15["m_columns"][] = "id_nivel_programa";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "bolsa_empleo.vacancia_requisito_programa";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_programa";
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
$proto0["m_srcTableName"]="bolsa_empleo.vacancia_requisito_programa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vacancia_requisito_programa = createSqlQuery_vacancia_requisito_programa();


	
		;

				

$tdatavacancia_requisito_programa[".sqlquery"] = $queryData_vacancia_requisito_programa;



include_once(getabspath("include/vacancia_requisito_programa_events.php"));
$tdatavacancia_requisito_programa[".hasEvents"] = true;

?>
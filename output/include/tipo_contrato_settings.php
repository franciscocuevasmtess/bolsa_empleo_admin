<?php
$tdatatipo_contrato = array();
$tdatatipo_contrato[".searchableFields"] = array();
$tdatatipo_contrato[".ShortName"] = "tipo_contrato";
$tdatatipo_contrato[".OwnerID"] = "";
$tdatatipo_contrato[".OriginalTable"] = "bolsa_empleo.tipo_contrato";


$tdatatipo_contrato[".pagesByType"] = my_json_decode( "{}" );
$tdatatipo_contrato[".originalPagesByType"] = $tdatatipo_contrato[".pagesByType"];
$tdatatipo_contrato[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatipo_contrato[".originalPages"] = $tdatatipo_contrato[".pages"];
$tdatatipo_contrato[".defaultPages"] = my_json_decode( "{}" );
$tdatatipo_contrato[".originalDefaultPages"] = $tdatatipo_contrato[".defaultPages"];

//	field labels
$fieldLabelstipo_contrato = array();
$fieldToolTipstipo_contrato = array();
$pageTitlestipo_contrato = array();
$placeHolderstipo_contrato = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_contrato["Spanish"] = array();
	$fieldToolTipstipo_contrato["Spanish"] = array();
	$placeHolderstipo_contrato["Spanish"] = array();
	$pageTitlestipo_contrato["Spanish"] = array();
	$fieldLabelstipo_contrato["Spanish"]["id_tipo_contrato"] = "Id Tipo Contrato";
	$fieldToolTipstipo_contrato["Spanish"]["id_tipo_contrato"] = "";
	$placeHolderstipo_contrato["Spanish"]["id_tipo_contrato"] = "";
	$fieldLabelstipo_contrato["Spanish"]["tipo_contrato"] = "Tipo Contrato";
	$fieldToolTipstipo_contrato["Spanish"]["tipo_contrato"] = "";
	$placeHolderstipo_contrato["Spanish"]["tipo_contrato"] = "";
	if (count($fieldToolTipstipo_contrato["Spanish"]))
		$tdatatipo_contrato[".isUseToolTips"] = true;
}


	$tdatatipo_contrato[".NCSearch"] = true;



$tdatatipo_contrato[".shortTableName"] = "tipo_contrato";
$tdatatipo_contrato[".nSecOptions"] = 0;

$tdatatipo_contrato[".mainTableOwnerID"] = "";
$tdatatipo_contrato[".entityType"] = 0;
$tdatatipo_contrato[".connId"] = "eportal_at_192_168_70_170";


$tdatatipo_contrato[".strOriginalTableName"] = "bolsa_empleo.tipo_contrato";

	



$tdatatipo_contrato[".showAddInPopup"] = false;

$tdatatipo_contrato[".showEditInPopup"] = false;

$tdatatipo_contrato[".showViewInPopup"] = false;

$tdatatipo_contrato[".listAjax"] = false;
//	temporary
//$tdatatipo_contrato[".listAjax"] = false;

	$tdatatipo_contrato[".audit"] = true;

	$tdatatipo_contrato[".locking"] = false;


$pages = $tdatatipo_contrato[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipo_contrato[".edit"] = true;
	$tdatatipo_contrato[".afterEditAction"] = 1;
	$tdatatipo_contrato[".closePopupAfterEdit"] = 1;
	$tdatatipo_contrato[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipo_contrato[".add"] = true;
$tdatatipo_contrato[".afterAddAction"] = 1;
$tdatatipo_contrato[".closePopupAfterAdd"] = 1;
$tdatatipo_contrato[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipo_contrato[".list"] = true;
}



$tdatatipo_contrato[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipo_contrato[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipo_contrato[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipo_contrato[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipo_contrato[".printFriendly"] = true;
}



$tdatatipo_contrato[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipo_contrato[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipo_contrato[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipo_contrato[".isUseAjaxSuggest"] = true;



																																																			

$tdatatipo_contrato[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_contrato[".buttonsAdded"] = false;

$tdatatipo_contrato[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_contrato[".isUseTimeForSearch"] = false;


$tdatatipo_contrato[".badgeColor"] = "00C2C5";


$tdatatipo_contrato[".allSearchFields"] = array();
$tdatatipo_contrato[".filterFields"] = array();
$tdatatipo_contrato[".requiredSearchFields"] = array();

$tdatatipo_contrato[".googleLikeFields"] = array();
$tdatatipo_contrato[".googleLikeFields"][] = "id_tipo_contrato";
$tdatatipo_contrato[".googleLikeFields"][] = "tipo_contrato";



$tdatatipo_contrato[".tableType"] = "list";

$tdatatipo_contrato[".printerPageOrientation"] = 0;
$tdatatipo_contrato[".nPrinterPageScale"] = 100;

$tdatatipo_contrato[".nPrinterSplitRecords"] = 40;

$tdatatipo_contrato[".geocodingEnabled"] = false;










$tdatatipo_contrato[".pageSize"] = 20;

$tdatatipo_contrato[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipo_contrato[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_contrato[".orderindexes"] = array();


$tdatatipo_contrato[".sqlHead"] = "SELECT id_tipo_contrato,  	tipo_contrato";
$tdatatipo_contrato[".sqlFrom"] = "FROM bolsa_empleo.tipo_contrato";
$tdatatipo_contrato[".sqlWhereExpr"] = "";
$tdatatipo_contrato[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_contrato[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_contrato[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_contrato[".highlightSearchResults"] = true;

$tableKeystipo_contrato = array();
$tableKeystipo_contrato[] = "id_tipo_contrato";
$tdatatipo_contrato[".Keys"] = $tableKeystipo_contrato;


$tdatatipo_contrato[".hideMobileList"] = array();




//	id_tipo_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_tipo_contrato";
	$fdata["GoodName"] = "id_tipo_contrato";
	$fdata["ownerTable"] = "bolsa_empleo.tipo_contrato";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipo_contrato","id_tipo_contrato");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_tipo_contrato";

		$fdata["sourceSingle"] = "id_tipo_contrato";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_tipo_contrato";

	
	
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


	$tdatatipo_contrato["id_tipo_contrato"] = $fdata;
		$tdatatipo_contrato[".searchableFields"][] = "id_tipo_contrato";
//	tipo_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo_contrato";
	$fdata["GoodName"] = "tipo_contrato";
	$fdata["ownerTable"] = "bolsa_empleo.tipo_contrato";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipo_contrato","tipo_contrato");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_contrato";

		$fdata["sourceSingle"] = "tipo_contrato";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_contrato";

	
	
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


	$tdatatipo_contrato["tipo_contrato"] = $fdata;
		$tdatatipo_contrato[".searchableFields"][] = "tipo_contrato";


$tables_data["bolsa_empleo.tipo_contrato"]=&$tdatatipo_contrato;
$field_labels["bolsa_empleo_tipo_contrato"] = &$fieldLabelstipo_contrato;
$fieldToolTips["bolsa_empleo_tipo_contrato"] = &$fieldToolTipstipo_contrato;
$placeHolders["bolsa_empleo_tipo_contrato"] = &$placeHolderstipo_contrato;
$page_titles["bolsa_empleo_tipo_contrato"] = &$pageTitlestipo_contrato;


changeTextControlsToDate( "bolsa_empleo.tipo_contrato" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.tipo_contrato"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.tipo_contrato"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipo_contrato()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_tipo_contrato,  	tipo_contrato";
$proto0["m_strFrom"] = "FROM bolsa_empleo.tipo_contrato";
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
	"m_strName" => "id_tipo_contrato",
	"m_strTable" => "bolsa_empleo.tipo_contrato",
	"m_srcTableName" => "bolsa_empleo.tipo_contrato"
));

$proto6["m_sql"] = "id_tipo_contrato";
$proto6["m_srcTableName"] = "bolsa_empleo.tipo_contrato";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_contrato",
	"m_strTable" => "bolsa_empleo.tipo_contrato",
	"m_srcTableName" => "bolsa_empleo.tipo_contrato"
));

$proto8["m_sql"] = "tipo_contrato";
$proto8["m_srcTableName"] = "bolsa_empleo.tipo_contrato";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.tipo_contrato";
$proto11["m_srcTableName"] = "bolsa_empleo.tipo_contrato";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_tipo_contrato";
$proto11["m_columns"][] = "tipo_contrato";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.tipo_contrato";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.tipo_contrato";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.tipo_contrato";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_contrato = createSqlQuery_tipo_contrato();


	
		;

		

$tdatatipo_contrato[".sqlquery"] = $queryData_tipo_contrato;



$tdatatipo_contrato[".hasEvents"] = false;

?>
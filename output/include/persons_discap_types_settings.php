<?php
$tdatapersons_discap_types = array();
$tdatapersons_discap_types[".searchableFields"] = array();
$tdatapersons_discap_types[".ShortName"] = "persons_discap_types";
$tdatapersons_discap_types[".OwnerID"] = "";
$tdatapersons_discap_types[".OriginalTable"] = "eportal.persons_discap_types";


$tdatapersons_discap_types[".pagesByType"] = my_json_decode( "{}" );
$tdatapersons_discap_types[".originalPagesByType"] = $tdatapersons_discap_types[".pagesByType"];
$tdatapersons_discap_types[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatapersons_discap_types[".originalPages"] = $tdatapersons_discap_types[".pages"];
$tdatapersons_discap_types[".defaultPages"] = my_json_decode( "{}" );
$tdatapersons_discap_types[".originalDefaultPages"] = $tdatapersons_discap_types[".defaultPages"];

//	field labels
$fieldLabelspersons_discap_types = array();
$fieldToolTipspersons_discap_types = array();
$pageTitlespersons_discap_types = array();
$placeHolderspersons_discap_types = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersons_discap_types["Spanish"] = array();
	$fieldToolTipspersons_discap_types["Spanish"] = array();
	$placeHolderspersons_discap_types["Spanish"] = array();
	$pageTitlespersons_discap_types["Spanish"] = array();
	$fieldLabelspersons_discap_types["Spanish"]["persons_discap_types_id"] = "Persons Discap Types Id";
	$fieldToolTipspersons_discap_types["Spanish"]["persons_discap_types_id"] = "";
	$placeHolderspersons_discap_types["Spanish"]["persons_discap_types_id"] = "";
	$fieldLabelspersons_discap_types["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipspersons_discap_types["Spanish"]["descripcion"] = "";
	$placeHolderspersons_discap_types["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipspersons_discap_types["Spanish"]))
		$tdatapersons_discap_types[".isUseToolTips"] = true;
}


	$tdatapersons_discap_types[".NCSearch"] = true;



$tdatapersons_discap_types[".shortTableName"] = "persons_discap_types";
$tdatapersons_discap_types[".nSecOptions"] = 0;

$tdatapersons_discap_types[".mainTableOwnerID"] = "";
$tdatapersons_discap_types[".entityType"] = 0;
$tdatapersons_discap_types[".connId"] = "eportal_at_192_168_70_170";


$tdatapersons_discap_types[".strOriginalTableName"] = "eportal.persons_discap_types";

	



$tdatapersons_discap_types[".showAddInPopup"] = false;

$tdatapersons_discap_types[".showEditInPopup"] = false;

$tdatapersons_discap_types[".showViewInPopup"] = false;

$tdatapersons_discap_types[".listAjax"] = false;
//	temporary
//$tdatapersons_discap_types[".listAjax"] = false;

	$tdatapersons_discap_types[".audit"] = true;

	$tdatapersons_discap_types[".locking"] = false;


$pages = $tdatapersons_discap_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersons_discap_types[".edit"] = true;
	$tdatapersons_discap_types[".afterEditAction"] = 1;
	$tdatapersons_discap_types[".closePopupAfterEdit"] = 1;
	$tdatapersons_discap_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersons_discap_types[".add"] = true;
$tdatapersons_discap_types[".afterAddAction"] = 1;
$tdatapersons_discap_types[".closePopupAfterAdd"] = 1;
$tdatapersons_discap_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersons_discap_types[".list"] = true;
}



$tdatapersons_discap_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersons_discap_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersons_discap_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersons_discap_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersons_discap_types[".printFriendly"] = true;
}



$tdatapersons_discap_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersons_discap_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersons_discap_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersons_discap_types[".isUseAjaxSuggest"] = true;



																																																			

$tdatapersons_discap_types[".ajaxCodeSnippetAdded"] = false;

$tdatapersons_discap_types[".buttonsAdded"] = false;

$tdatapersons_discap_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersons_discap_types[".isUseTimeForSearch"] = false;


$tdatapersons_discap_types[".badgeColor"] = "EDCA00";


$tdatapersons_discap_types[".allSearchFields"] = array();
$tdatapersons_discap_types[".filterFields"] = array();
$tdatapersons_discap_types[".requiredSearchFields"] = array();

$tdatapersons_discap_types[".googleLikeFields"] = array();
$tdatapersons_discap_types[".googleLikeFields"][] = "persons_discap_types_id";
$tdatapersons_discap_types[".googleLikeFields"][] = "descripcion";



$tdatapersons_discap_types[".tableType"] = "list";

$tdatapersons_discap_types[".printerPageOrientation"] = 0;
$tdatapersons_discap_types[".nPrinterPageScale"] = 100;

$tdatapersons_discap_types[".nPrinterSplitRecords"] = 40;

$tdatapersons_discap_types[".geocodingEnabled"] = false;










$tdatapersons_discap_types[".pageSize"] = 20;

$tdatapersons_discap_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapersons_discap_types[".strOrderBy"] = $tstrOrderBy;

$tdatapersons_discap_types[".orderindexes"] = array();


$tdatapersons_discap_types[".sqlHead"] = "SELECT persons_discap_types_id,  	descripcion";
$tdatapersons_discap_types[".sqlFrom"] = "FROM eportal.persons_discap_types";
$tdatapersons_discap_types[".sqlWhereExpr"] = "";
$tdatapersons_discap_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersons_discap_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersons_discap_types[".arrGroupsPerPage"] = $arrGPP;

$tdatapersons_discap_types[".highlightSearchResults"] = true;

$tableKeyspersons_discap_types = array();
$tableKeyspersons_discap_types[] = "persons_discap_types_id";
$tdatapersons_discap_types[".Keys"] = $tableKeyspersons_discap_types;


$tdatapersons_discap_types[".hideMobileList"] = array();




//	persons_discap_types_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "persons_discap_types_id";
	$fdata["GoodName"] = "persons_discap_types_id";
	$fdata["ownerTable"] = "eportal.persons_discap_types";
	$fdata["Label"] = GetFieldLabel("eportal_persons_discap_types","persons_discap_types_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "persons_discap_types_id";

		$fdata["sourceSingle"] = "persons_discap_types_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "persons_discap_types_id";

	
	
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


	$tdatapersons_discap_types["persons_discap_types_id"] = $fdata;
		$tdatapersons_discap_types[".searchableFields"][] = "persons_discap_types_id";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "eportal.persons_discap_types";
	$fdata["Label"] = GetFieldLabel("eportal_persons_discap_types","descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

		$fdata["sourceSingle"] = "descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion";

	
	
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


	$tdatapersons_discap_types["descripcion"] = $fdata;
		$tdatapersons_discap_types[".searchableFields"][] = "descripcion";


$tables_data["eportal.persons_discap_types"]=&$tdatapersons_discap_types;
$field_labels["eportal_persons_discap_types"] = &$fieldLabelspersons_discap_types;
$fieldToolTips["eportal_persons_discap_types"] = &$fieldToolTipspersons_discap_types;
$placeHolders["eportal_persons_discap_types"] = &$placeHolderspersons_discap_types;
$page_titles["eportal_persons_discap_types"] = &$pageTitlespersons_discap_types;


changeTextControlsToDate( "eportal.persons_discap_types" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["eportal.persons_discap_types"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["eportal.persons_discap_types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_persons_discap_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "persons_discap_types_id,  	descripcion";
$proto0["m_strFrom"] = "FROM eportal.persons_discap_types";
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
	"m_strName" => "persons_discap_types_id",
	"m_strTable" => "eportal.persons_discap_types",
	"m_srcTableName" => "eportal.persons_discap_types"
));

$proto6["m_sql"] = "persons_discap_types_id";
$proto6["m_srcTableName"] = "eportal.persons_discap_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "eportal.persons_discap_types",
	"m_srcTableName" => "eportal.persons_discap_types"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "eportal.persons_discap_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "eportal.persons_discap_types";
$proto11["m_srcTableName"] = "eportal.persons_discap_types";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "persons_discap_types_id";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "eportal.persons_discap_types";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "eportal.persons_discap_types";
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
$proto0["m_srcTableName"]="eportal.persons_discap_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_persons_discap_types = createSqlQuery_persons_discap_types();


	
		;

		

$tdatapersons_discap_types[".sqlquery"] = $queryData_persons_discap_types;



$tdatapersons_discap_types[".hasEvents"] = false;

?>
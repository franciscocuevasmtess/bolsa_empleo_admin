<?php
$tdatacity = array();
$tdatacity[".searchableFields"] = array();
$tdatacity[".ShortName"] = "city";
$tdatacity[".OwnerID"] = "";
$tdatacity[".OriginalTable"] = "eportal.city";


$tdatacity[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatacity[".originalPagesByType"] = $tdatacity[".pagesByType"];
$tdatacity[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatacity[".originalPages"] = $tdatacity[".pages"];
$tdatacity[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatacity[".originalDefaultPages"] = $tdatacity[".defaultPages"];

//	field labels
$fieldLabelscity = array();
$fieldToolTipscity = array();
$pageTitlescity = array();
$placeHolderscity = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscity["Spanish"] = array();
	$fieldToolTipscity["Spanish"] = array();
	$placeHolderscity["Spanish"] = array();
	$pageTitlescity["Spanish"] = array();
	$fieldLabelscity["Spanish"]["id"] = "Id";
	$fieldToolTipscity["Spanish"]["id"] = "";
	$placeHolderscity["Spanish"]["id"] = "";
	$fieldLabelscity["Spanish"]["name"] = "Name";
	$fieldToolTipscity["Spanish"]["name"] = "";
	$placeHolderscity["Spanish"]["name"] = "";
	$fieldLabelscity["Spanish"]["countrycode"] = "Countrycode";
	$fieldToolTipscity["Spanish"]["countrycode"] = "";
	$placeHolderscity["Spanish"]["countrycode"] = "";
	$fieldLabelscity["Spanish"]["distrito_id"] = "Distrito Id";
	$fieldToolTipscity["Spanish"]["distrito_id"] = "";
	$placeHolderscity["Spanish"]["distrito_id"] = "";
	if (count($fieldToolTipscity["Spanish"]))
		$tdatacity[".isUseToolTips"] = true;
}


	$tdatacity[".NCSearch"] = true;



$tdatacity[".shortTableName"] = "city";
$tdatacity[".nSecOptions"] = 0;

$tdatacity[".mainTableOwnerID"] = "";
$tdatacity[".entityType"] = 0;
$tdatacity[".connId"] = "eportal_at_192_168_70_170";


$tdatacity[".strOriginalTableName"] = "eportal.city";

	



$tdatacity[".showAddInPopup"] = false;

$tdatacity[".showEditInPopup"] = false;

$tdatacity[".showViewInPopup"] = false;

$tdatacity[".listAjax"] = false;
//	temporary
//$tdatacity[".listAjax"] = false;

	$tdatacity[".audit"] = true;

	$tdatacity[".locking"] = false;


$pages = $tdatacity[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacity[".edit"] = true;
	$tdatacity[".afterEditAction"] = 1;
	$tdatacity[".closePopupAfterEdit"] = 1;
	$tdatacity[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacity[".add"] = true;
$tdatacity[".afterAddAction"] = 1;
$tdatacity[".closePopupAfterAdd"] = 1;
$tdatacity[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacity[".list"] = true;
}



$tdatacity[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacity[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacity[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacity[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacity[".printFriendly"] = true;
}



$tdatacity[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacity[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacity[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacity[".isUseAjaxSuggest"] = true;



																																																						

$tdatacity[".ajaxCodeSnippetAdded"] = false;

$tdatacity[".buttonsAdded"] = false;

$tdatacity[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacity[".isUseTimeForSearch"] = false;


$tdatacity[".badgeColor"] = "CD5C5C";


$tdatacity[".allSearchFields"] = array();
$tdatacity[".filterFields"] = array();
$tdatacity[".requiredSearchFields"] = array();

$tdatacity[".googleLikeFields"] = array();
$tdatacity[".googleLikeFields"][] = "id";
$tdatacity[".googleLikeFields"][] = "name";
$tdatacity[".googleLikeFields"][] = "countrycode";
$tdatacity[".googleLikeFields"][] = "distrito_id";



$tdatacity[".tableType"] = "list";

$tdatacity[".printerPageOrientation"] = 0;
$tdatacity[".nPrinterPageScale"] = 100;

$tdatacity[".nPrinterSplitRecords"] = 40;

$tdatacity[".geocodingEnabled"] = false;










$tdatacity[".pageSize"] = 20;

$tdatacity[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacity[".strOrderBy"] = $tstrOrderBy;

$tdatacity[".orderindexes"] = array();


$tdatacity[".sqlHead"] = "SELECT id,  	name,  	countrycode,  	distrito_id";
$tdatacity[".sqlFrom"] = "FROM eportal.city";
$tdatacity[".sqlWhereExpr"] = "";
$tdatacity[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacity[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacity[".arrGroupsPerPage"] = $arrGPP;

$tdatacity[".highlightSearchResults"] = true;

$tableKeyscity = array();
$tableKeyscity[] = "id";
$tdatacity[".Keys"] = $tableKeyscity;


$tdatacity[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "eportal.city";
	$fdata["Label"] = GetFieldLabel("eportal_city","id");
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


	$tdatacity["id"] = $fdata;
		$tdatacity[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "eportal.city";
	$fdata["Label"] = GetFieldLabel("eportal_city","name");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	$tdatacity["name"] = $fdata;
		$tdatacity[".searchableFields"][] = "name";
//	countrycode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "countrycode";
	$fdata["GoodName"] = "countrycode";
	$fdata["ownerTable"] = "eportal.city";
	$fdata["Label"] = GetFieldLabel("eportal_city","countrycode");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "countrycode";

		$fdata["sourceSingle"] = "countrycode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "countrycode";

	
	
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


	$tdatacity["countrycode"] = $fdata;
		$tdatacity[".searchableFields"][] = "countrycode";
//	distrito_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "distrito_id";
	$fdata["GoodName"] = "distrito_id";
	$fdata["ownerTable"] = "eportal.city";
	$fdata["Label"] = GetFieldLabel("eportal_city","distrito_id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "distrito_id";

		$fdata["sourceSingle"] = "distrito_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "distrito_id";

	
	
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


	$tdatacity["distrito_id"] = $fdata;
		$tdatacity[".searchableFields"][] = "distrito_id";


$tables_data["eportal.city"]=&$tdatacity;
$field_labels["eportal_city"] = &$fieldLabelscity;
$fieldToolTips["eportal_city"] = &$fieldToolTipscity;
$placeHolders["eportal_city"] = &$placeHolderscity;
$page_titles["eportal_city"] = &$pageTitlescity;


changeTextControlsToDate( "eportal.city" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["eportal.city"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["eportal.city"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_city()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	countrycode,  	distrito_id";
$proto0["m_strFrom"] = "FROM eportal.city";
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
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "eportal.city"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "eportal.city";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "eportal.city"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "eportal.city";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "countrycode",
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "eportal.city"
));

$proto10["m_sql"] = "countrycode";
$proto10["m_srcTableName"] = "eportal.city";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "distrito_id",
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "eportal.city"
));

$proto12["m_sql"] = "distrito_id";
$proto12["m_srcTableName"] = "eportal.city";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "eportal.city";
$proto15["m_srcTableName"] = "eportal.city";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "countrycode";
$proto15["m_columns"][] = "distrito_id";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "eportal.city";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "eportal.city";
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
$proto0["m_srcTableName"]="eportal.city";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_city = createSqlQuery_city();


	
		;

				

$tdatacity[".sqlquery"] = $queryData_city;



$tdatacity[".hasEvents"] = false;

?>
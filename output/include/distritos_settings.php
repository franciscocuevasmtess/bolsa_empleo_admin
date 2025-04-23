<?php
$tdatadistritos = array();
$tdatadistritos[".searchableFields"] = array();
$tdatadistritos[".ShortName"] = "distritos";
$tdatadistritos[".OwnerID"] = "";
$tdatadistritos[".OriginalTable"] = "eportal.distritos";


$tdatadistritos[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatadistritos[".originalPagesByType"] = $tdatadistritos[".pagesByType"];
$tdatadistritos[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatadistritos[".originalPages"] = $tdatadistritos[".pages"];
$tdatadistritos[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatadistritos[".originalDefaultPages"] = $tdatadistritos[".defaultPages"];

//	field labels
$fieldLabelsdistritos = array();
$fieldToolTipsdistritos = array();
$pageTitlesdistritos = array();
$placeHoldersdistritos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdistritos["Spanish"] = array();
	$fieldToolTipsdistritos["Spanish"] = array();
	$placeHoldersdistritos["Spanish"] = array();
	$pageTitlesdistritos["Spanish"] = array();
	$fieldLabelsdistritos["Spanish"]["id"] = "Id";
	$fieldToolTipsdistritos["Spanish"]["id"] = "";
	$placeHoldersdistritos["Spanish"]["id"] = "";
	$fieldLabelsdistritos["Spanish"]["pais_code"] = "Pais Code";
	$fieldToolTipsdistritos["Spanish"]["pais_code"] = "";
	$placeHoldersdistritos["Spanish"]["pais_code"] = "";
	$fieldLabelsdistritos["Spanish"]["name"] = "Name";
	$fieldToolTipsdistritos["Spanish"]["name"] = "";
	$placeHoldersdistritos["Spanish"]["name"] = "";
	$fieldLabelsdistritos["Spanish"]["codigo_ine_dpto"] = "Codigo Ine Dpto";
	$fieldToolTipsdistritos["Spanish"]["codigo_ine_dpto"] = "";
	$placeHoldersdistritos["Spanish"]["codigo_ine_dpto"] = "";
	if (count($fieldToolTipsdistritos["Spanish"]))
		$tdatadistritos[".isUseToolTips"] = true;
}


	$tdatadistritos[".NCSearch"] = true;



$tdatadistritos[".shortTableName"] = "distritos";
$tdatadistritos[".nSecOptions"] = 0;

$tdatadistritos[".mainTableOwnerID"] = "";
$tdatadistritos[".entityType"] = 0;
$tdatadistritos[".connId"] = "eportal_at_192_168_70_170";


$tdatadistritos[".strOriginalTableName"] = "eportal.distritos";

	



$tdatadistritos[".showAddInPopup"] = false;

$tdatadistritos[".showEditInPopup"] = false;

$tdatadistritos[".showViewInPopup"] = false;

$tdatadistritos[".listAjax"] = false;
//	temporary
//$tdatadistritos[".listAjax"] = false;

	$tdatadistritos[".audit"] = true;

	$tdatadistritos[".locking"] = false;


$pages = $tdatadistritos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadistritos[".edit"] = true;
	$tdatadistritos[".afterEditAction"] = 1;
	$tdatadistritos[".closePopupAfterEdit"] = 1;
	$tdatadistritos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadistritos[".add"] = true;
$tdatadistritos[".afterAddAction"] = 1;
$tdatadistritos[".closePopupAfterAdd"] = 1;
$tdatadistritos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadistritos[".list"] = true;
}



$tdatadistritos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadistritos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadistritos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadistritos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadistritos[".printFriendly"] = true;
}



$tdatadistritos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadistritos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadistritos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadistritos[".isUseAjaxSuggest"] = true;



																																																																																							

$tdatadistritos[".ajaxCodeSnippetAdded"] = false;

$tdatadistritos[".buttonsAdded"] = false;

$tdatadistritos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadistritos[".isUseTimeForSearch"] = false;


$tdatadistritos[".badgeColor"] = "008B8B";


$tdatadistritos[".allSearchFields"] = array();
$tdatadistritos[".filterFields"] = array();
$tdatadistritos[".requiredSearchFields"] = array();

$tdatadistritos[".googleLikeFields"] = array();
$tdatadistritos[".googleLikeFields"][] = "id";
$tdatadistritos[".googleLikeFields"][] = "pais_code";
$tdatadistritos[".googleLikeFields"][] = "name";
$tdatadistritos[".googleLikeFields"][] = "codigo_ine_dpto";



$tdatadistritos[".tableType"] = "list";

$tdatadistritos[".printerPageOrientation"] = 0;
$tdatadistritos[".nPrinterPageScale"] = 100;

$tdatadistritos[".nPrinterSplitRecords"] = 40;

$tdatadistritos[".geocodingEnabled"] = false;










$tdatadistritos[".pageSize"] = 20;

$tdatadistritos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadistritos[".strOrderBy"] = $tstrOrderBy;

$tdatadistritos[".orderindexes"] = array();


$tdatadistritos[".sqlHead"] = "SELECT id,  	pais_code,  	name,  	codigo_ine_dpto";
$tdatadistritos[".sqlFrom"] = "FROM eportal.distritos";
$tdatadistritos[".sqlWhereExpr"] = "";
$tdatadistritos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadistritos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadistritos[".arrGroupsPerPage"] = $arrGPP;

$tdatadistritos[".highlightSearchResults"] = true;

$tableKeysdistritos = array();
$tableKeysdistritos[] = "id";
$tdatadistritos[".Keys"] = $tableKeysdistritos;


$tdatadistritos[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "eportal.distritos";
	$fdata["Label"] = GetFieldLabel("eportal_distritos","id");
	$fdata["FieldType"] = 20;


	
	
			

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


	$tdatadistritos["id"] = $fdata;
		$tdatadistritos[".searchableFields"][] = "id";
//	pais_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pais_code";
	$fdata["GoodName"] = "pais_code";
	$fdata["ownerTable"] = "eportal.distritos";
	$fdata["Label"] = GetFieldLabel("eportal_distritos","pais_code");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "pais_code";

		$fdata["sourceSingle"] = "pais_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pais_code";

	
	
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


	$tdatadistritos["pais_code"] = $fdata;
		$tdatadistritos[".searchableFields"][] = "pais_code";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "eportal.distritos";
	$fdata["Label"] = GetFieldLabel("eportal_distritos","name");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatadistritos["name"] = $fdata;
		$tdatadistritos[".searchableFields"][] = "name";
//	codigo_ine_dpto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "codigo_ine_dpto";
	$fdata["GoodName"] = "codigo_ine_dpto";
	$fdata["ownerTable"] = "eportal.distritos";
	$fdata["Label"] = GetFieldLabel("eportal_distritos","codigo_ine_dpto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "codigo_ine_dpto";

		$fdata["sourceSingle"] = "codigo_ine_dpto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo_ine_dpto";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatadistritos["codigo_ine_dpto"] = $fdata;
		$tdatadistritos[".searchableFields"][] = "codigo_ine_dpto";


$tables_data["eportal.distritos"]=&$tdatadistritos;
$field_labels["eportal_distritos"] = &$fieldLabelsdistritos;
$fieldToolTips["eportal_distritos"] = &$fieldToolTipsdistritos;
$placeHolders["eportal_distritos"] = &$placeHoldersdistritos;
$page_titles["eportal_distritos"] = &$pageTitlesdistritos;


changeTextControlsToDate( "eportal.distritos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["eportal.distritos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["eportal.distritos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_distritos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	pais_code,  	name,  	codigo_ine_dpto";
$proto0["m_strFrom"] = "FROM eportal.distritos";
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
	"m_strTable" => "eportal.distritos",
	"m_srcTableName" => "eportal.distritos"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "eportal.distritos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "pais_code",
	"m_strTable" => "eportal.distritos",
	"m_srcTableName" => "eportal.distritos"
));

$proto8["m_sql"] = "pais_code";
$proto8["m_srcTableName"] = "eportal.distritos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.distritos",
	"m_srcTableName" => "eportal.distritos"
));

$proto10["m_sql"] = "name";
$proto10["m_srcTableName"] = "eportal.distritos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_ine_dpto",
	"m_strTable" => "eportal.distritos",
	"m_srcTableName" => "eportal.distritos"
));

$proto12["m_sql"] = "codigo_ine_dpto";
$proto12["m_srcTableName"] = "eportal.distritos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "eportal.distritos";
$proto15["m_srcTableName"] = "eportal.distritos";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "pais_code";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "codigo_ine_dpto";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "eportal.distritos";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "eportal.distritos";
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
$proto0["m_srcTableName"]="eportal.distritos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_distritos = createSqlQuery_distritos();


	
		;

				

$tdatadistritos[".sqlquery"] = $queryData_distritos;



$tdatadistritos[".hasEvents"] = false;

?>
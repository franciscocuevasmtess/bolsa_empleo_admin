<?php
$tdataempleados_dias = array();
$tdataempleados_dias[".searchableFields"] = array();
$tdataempleados_dias[".ShortName"] = "empleados_dias";
$tdataempleados_dias[".OwnerID"] = "";
$tdataempleados_dias[".OriginalTable"] = "mtess.empleados_dias";


$tdataempleados_dias[".pagesByType"] = my_json_decode( "{}" );
$tdataempleados_dias[".originalPagesByType"] = $tdataempleados_dias[".pagesByType"];
$tdataempleados_dias[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataempleados_dias[".originalPages"] = $tdataempleados_dias[".pages"];
$tdataempleados_dias[".defaultPages"] = my_json_decode( "{}" );
$tdataempleados_dias[".originalDefaultPages"] = $tdataempleados_dias[".defaultPages"];

//	field labels
$fieldLabelsempleados_dias = array();
$fieldToolTipsempleados_dias = array();
$pageTitlesempleados_dias = array();
$placeHoldersempleados_dias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempleados_dias["Spanish"] = array();
	$fieldToolTipsempleados_dias["Spanish"] = array();
	$placeHoldersempleados_dias["Spanish"] = array();
	$pageTitlesempleados_dias["Spanish"] = array();
	$fieldLabelsempleados_dias["Spanish"]["id_dias"] = "Id Dias";
	$fieldToolTipsempleados_dias["Spanish"]["id_dias"] = "";
	$placeHoldersempleados_dias["Spanish"]["id_dias"] = "";
	$fieldLabelsempleados_dias["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsempleados_dias["Spanish"]["descripcion"] = "";
	$placeHoldersempleados_dias["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsempleados_dias["Spanish"]))
		$tdataempleados_dias[".isUseToolTips"] = true;
}


	$tdataempleados_dias[".NCSearch"] = true;



$tdataempleados_dias[".shortTableName"] = "empleados_dias";
$tdataempleados_dias[".nSecOptions"] = 0;

$tdataempleados_dias[".mainTableOwnerID"] = "";
$tdataempleados_dias[".entityType"] = 0;
$tdataempleados_dias[".connId"] = "eportal_at_192_168_70_170";


$tdataempleados_dias[".strOriginalTableName"] = "mtess.empleados_dias";

	



$tdataempleados_dias[".showAddInPopup"] = false;

$tdataempleados_dias[".showEditInPopup"] = false;

$tdataempleados_dias[".showViewInPopup"] = false;

$tdataempleados_dias[".listAjax"] = false;
//	temporary
//$tdataempleados_dias[".listAjax"] = false;

	$tdataempleados_dias[".audit"] = false;

	$tdataempleados_dias[".locking"] = false;


$pages = $tdataempleados_dias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataempleados_dias[".edit"] = true;
	$tdataempleados_dias[".afterEditAction"] = 1;
	$tdataempleados_dias[".closePopupAfterEdit"] = 1;
	$tdataempleados_dias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataempleados_dias[".add"] = true;
$tdataempleados_dias[".afterAddAction"] = 1;
$tdataempleados_dias[".closePopupAfterAdd"] = 1;
$tdataempleados_dias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataempleados_dias[".list"] = true;
}



$tdataempleados_dias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataempleados_dias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataempleados_dias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataempleados_dias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataempleados_dias[".printFriendly"] = true;
}



$tdataempleados_dias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataempleados_dias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataempleados_dias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataempleados_dias[".isUseAjaxSuggest"] = true;



																																																															

$tdataempleados_dias[".ajaxCodeSnippetAdded"] = false;

$tdataempleados_dias[".buttonsAdded"] = false;

$tdataempleados_dias[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempleados_dias[".isUseTimeForSearch"] = false;


$tdataempleados_dias[".badgeColor"] = "CD853F";


$tdataempleados_dias[".allSearchFields"] = array();
$tdataempleados_dias[".filterFields"] = array();
$tdataempleados_dias[".requiredSearchFields"] = array();

$tdataempleados_dias[".googleLikeFields"] = array();
$tdataempleados_dias[".googleLikeFields"][] = "id_dias";
$tdataempleados_dias[".googleLikeFields"][] = "descripcion";



$tdataempleados_dias[".tableType"] = "list";

$tdataempleados_dias[".printerPageOrientation"] = 0;
$tdataempleados_dias[".nPrinterPageScale"] = 100;

$tdataempleados_dias[".nPrinterSplitRecords"] = 40;

$tdataempleados_dias[".geocodingEnabled"] = false;










$tdataempleados_dias[".pageSize"] = 20;

$tdataempleados_dias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataempleados_dias[".strOrderBy"] = $tstrOrderBy;

$tdataempleados_dias[".orderindexes"] = array();


$tdataempleados_dias[".sqlHead"] = "SELECT id_dias,  	descripcion";
$tdataempleados_dias[".sqlFrom"] = "FROM mtess.empleados_dias";
$tdataempleados_dias[".sqlWhereExpr"] = "";
$tdataempleados_dias[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempleados_dias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempleados_dias[".arrGroupsPerPage"] = $arrGPP;

$tdataempleados_dias[".highlightSearchResults"] = true;

$tableKeysempleados_dias = array();
$tdataempleados_dias[".Keys"] = $tableKeysempleados_dias;


$tdataempleados_dias[".hideMobileList"] = array();




//	id_dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_dias";
	$fdata["GoodName"] = "id_dias";
	$fdata["ownerTable"] = "mtess.empleados_dias";
	$fdata["Label"] = GetFieldLabel("mtess_empleados_dias","id_dias");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_dias";

		$fdata["sourceSingle"] = "id_dias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_dias";

	
	
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


	$tdataempleados_dias["id_dias"] = $fdata;
		$tdataempleados_dias[".searchableFields"][] = "id_dias";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "mtess.empleados_dias";
	$fdata["Label"] = GetFieldLabel("mtess_empleados_dias","descripcion");
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


	$tdataempleados_dias["descripcion"] = $fdata;
		$tdataempleados_dias[".searchableFields"][] = "descripcion";


$tables_data["mtess.empleados_dias"]=&$tdataempleados_dias;
$field_labels["mtess_empleados_dias"] = &$fieldLabelsempleados_dias;
$fieldToolTips["mtess_empleados_dias"] = &$fieldToolTipsempleados_dias;
$placeHolders["mtess_empleados_dias"] = &$placeHoldersempleados_dias;
$page_titles["mtess_empleados_dias"] = &$pageTitlesempleados_dias;


changeTextControlsToDate( "mtess.empleados_dias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["mtess.empleados_dias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["mtess.empleados_dias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_empleados_dias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_dias,  	descripcion";
$proto0["m_strFrom"] = "FROM mtess.empleados_dias";
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
	"m_strName" => "id_dias",
	"m_strTable" => "mtess.empleados_dias",
	"m_srcTableName" => "mtess.empleados_dias"
));

$proto6["m_sql"] = "id_dias";
$proto6["m_srcTableName"] = "mtess.empleados_dias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "mtess.empleados_dias",
	"m_srcTableName" => "mtess.empleados_dias"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "mtess.empleados_dias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "mtess.empleados_dias";
$proto11["m_srcTableName"] = "mtess.empleados_dias";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_dias";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "mtess.empleados_dias";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "mtess.empleados_dias";
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
$proto0["m_srcTableName"]="mtess.empleados_dias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empleados_dias = createSqlQuery_empleados_dias();


	
		;

		

$tdataempleados_dias[".sqlquery"] = $queryData_empleados_dias;



$tdataempleados_dias[".hasEvents"] = false;

?>
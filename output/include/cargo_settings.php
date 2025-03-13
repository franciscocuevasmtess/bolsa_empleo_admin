<?php
$tdatacargo = array();
$tdatacargo[".searchableFields"] = array();
$tdatacargo[".ShortName"] = "cargo";
$tdatacargo[".OwnerID"] = "";
$tdatacargo[".OriginalTable"] = "bolsa_empleo.cargo";


$tdatacargo[".pagesByType"] = my_json_decode( "{}" );
$tdatacargo[".originalPagesByType"] = $tdatacargo[".pagesByType"];
$tdatacargo[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatacargo[".originalPages"] = $tdatacargo[".pages"];
$tdatacargo[".defaultPages"] = my_json_decode( "{}" );
$tdatacargo[".originalDefaultPages"] = $tdatacargo[".defaultPages"];

//	field labels
$fieldLabelscargo = array();
$fieldToolTipscargo = array();
$pageTitlescargo = array();
$placeHolderscargo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscargo["Spanish"] = array();
	$fieldToolTipscargo["Spanish"] = array();
	$placeHolderscargo["Spanish"] = array();
	$pageTitlescargo["Spanish"] = array();
	$fieldLabelscargo["Spanish"]["id_cargo"] = "Id Cargo";
	$fieldToolTipscargo["Spanish"]["id_cargo"] = "";
	$placeHolderscargo["Spanish"]["id_cargo"] = "";
	$fieldLabelscargo["Spanish"]["descripcion_cargo"] = "Descripcion Cargo";
	$fieldToolTipscargo["Spanish"]["descripcion_cargo"] = "";
	$placeHolderscargo["Spanish"]["descripcion_cargo"] = "";
	if (count($fieldToolTipscargo["Spanish"]))
		$tdatacargo[".isUseToolTips"] = true;
}


	$tdatacargo[".NCSearch"] = true;



$tdatacargo[".shortTableName"] = "cargo";
$tdatacargo[".nSecOptions"] = 0;

$tdatacargo[".mainTableOwnerID"] = "";
$tdatacargo[".entityType"] = 0;
$tdatacargo[".connId"] = "eportal_at_192_168_70_170";


$tdatacargo[".strOriginalTableName"] = "bolsa_empleo.cargo";

	



$tdatacargo[".showAddInPopup"] = false;

$tdatacargo[".showEditInPopup"] = false;

$tdatacargo[".showViewInPopup"] = false;

$tdatacargo[".listAjax"] = false;
//	temporary
//$tdatacargo[".listAjax"] = false;

	$tdatacargo[".audit"] = true;

	$tdatacargo[".locking"] = false;


$pages = $tdatacargo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacargo[".edit"] = true;
	$tdatacargo[".afterEditAction"] = 1;
	$tdatacargo[".closePopupAfterEdit"] = 1;
	$tdatacargo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacargo[".add"] = true;
$tdatacargo[".afterAddAction"] = 1;
$tdatacargo[".closePopupAfterAdd"] = 1;
$tdatacargo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacargo[".list"] = true;
}



$tdatacargo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacargo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacargo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacargo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacargo[".printFriendly"] = true;
}



$tdatacargo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacargo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacargo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacargo[".isUseAjaxSuggest"] = true;



																																																															

$tdatacargo[".ajaxCodeSnippetAdded"] = false;

$tdatacargo[".buttonsAdded"] = false;

$tdatacargo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacargo[".isUseTimeForSearch"] = false;


$tdatacargo[".badgeColor"] = "6DA5C8";


$tdatacargo[".allSearchFields"] = array();
$tdatacargo[".filterFields"] = array();
$tdatacargo[".requiredSearchFields"] = array();

$tdatacargo[".googleLikeFields"] = array();
$tdatacargo[".googleLikeFields"][] = "id_cargo";
$tdatacargo[".googleLikeFields"][] = "descripcion_cargo";



$tdatacargo[".tableType"] = "list";

$tdatacargo[".printerPageOrientation"] = 0;
$tdatacargo[".nPrinterPageScale"] = 100;

$tdatacargo[".nPrinterSplitRecords"] = 40;

$tdatacargo[".geocodingEnabled"] = false;










$tdatacargo[".pageSize"] = 20;

$tdatacargo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacargo[".strOrderBy"] = $tstrOrderBy;

$tdatacargo[".orderindexes"] = array();


$tdatacargo[".sqlHead"] = "SELECT id_cargo,  	descripcion_cargo";
$tdatacargo[".sqlFrom"] = "FROM bolsa_empleo.cargo";
$tdatacargo[".sqlWhereExpr"] = "";
$tdatacargo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacargo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacargo[".arrGroupsPerPage"] = $arrGPP;

$tdatacargo[".highlightSearchResults"] = true;

$tableKeyscargo = array();
$tableKeyscargo[] = "id_cargo";
$tdatacargo[".Keys"] = $tableKeyscargo;


$tdatacargo[".hideMobileList"] = array();




//	id_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cargo";
	$fdata["GoodName"] = "id_cargo";
	$fdata["ownerTable"] = "bolsa_empleo.cargo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cargo","id_cargo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_cargo";

		$fdata["sourceSingle"] = "id_cargo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cargo";

	
	
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


	$tdatacargo["id_cargo"] = $fdata;
		$tdatacargo[".searchableFields"][] = "id_cargo";
//	descripcion_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_cargo";
	$fdata["GoodName"] = "descripcion_cargo";
	$fdata["ownerTable"] = "bolsa_empleo.cargo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cargo","descripcion_cargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_cargo";

		$fdata["sourceSingle"] = "descripcion_cargo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_cargo";

	
	
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


	$tdatacargo["descripcion_cargo"] = $fdata;
		$tdatacargo[".searchableFields"][] = "descripcion_cargo";


$tables_data["bolsa_empleo.cargo"]=&$tdatacargo;
$field_labels["bolsa_empleo_cargo"] = &$fieldLabelscargo;
$fieldToolTips["bolsa_empleo_cargo"] = &$fieldToolTipscargo;
$placeHolders["bolsa_empleo_cargo"] = &$placeHolderscargo;
$page_titles["bolsa_empleo_cargo"] = &$pageTitlescargo;


changeTextControlsToDate( "bolsa_empleo.cargo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.cargo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.cargo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cargo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cargo,  	descripcion_cargo";
$proto0["m_strFrom"] = "FROM bolsa_empleo.cargo";
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
	"m_strName" => "id_cargo",
	"m_strTable" => "bolsa_empleo.cargo",
	"m_srcTableName" => "bolsa_empleo.cargo"
));

$proto6["m_sql"] = "id_cargo";
$proto6["m_srcTableName"] = "bolsa_empleo.cargo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_cargo",
	"m_strTable" => "bolsa_empleo.cargo",
	"m_srcTableName" => "bolsa_empleo.cargo"
));

$proto8["m_sql"] = "descripcion_cargo";
$proto8["m_srcTableName"] = "bolsa_empleo.cargo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.cargo";
$proto11["m_srcTableName"] = "bolsa_empleo.cargo";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_cargo";
$proto11["m_columns"][] = "descripcion_cargo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.cargo";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.cargo";
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
$proto0["m_srcTableName"]="bolsa_empleo.cargo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cargo = createSqlQuery_cargo();


	
		;

		

$tdatacargo[".sqlquery"] = $queryData_cargo;



$tdatacargo[".hasEvents"] = false;

?>
<?php
$tdataprogramas = array();
$tdataprogramas[".searchableFields"] = array();
$tdataprogramas[".ShortName"] = "programas";
$tdataprogramas[".OwnerID"] = "";
$tdataprogramas[".OriginalTable"] = "bolsa_empleo.programas";


$tdataprogramas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"]}" );
$tdataprogramas[".originalPagesByType"] = $tdataprogramas[".pagesByType"];
$tdataprogramas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"]}" ) );
$tdataprogramas[".originalPages"] = $tdataprogramas[".pages"];
$tdataprogramas[".defaultPages"] = my_json_decode( "{\"add\":\"add\"}" );
$tdataprogramas[".originalDefaultPages"] = $tdataprogramas[".defaultPages"];

//	field labels
$fieldLabelsprogramas = array();
$fieldToolTipsprogramas = array();
$pageTitlesprogramas = array();
$placeHoldersprogramas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsprogramas["Spanish"] = array();
	$fieldToolTipsprogramas["Spanish"] = array();
	$placeHoldersprogramas["Spanish"] = array();
	$pageTitlesprogramas["Spanish"] = array();
	$fieldLabelsprogramas["Spanish"]["id_programas"] = "Id Programas";
	$fieldToolTipsprogramas["Spanish"]["id_programas"] = "";
	$placeHoldersprogramas["Spanish"]["id_programas"] = "";
	$fieldLabelsprogramas["Spanish"]["nombre"] = "Manejo de programas requeridos";
	$fieldToolTipsprogramas["Spanish"]["nombre"] = "";
	$placeHoldersprogramas["Spanish"]["nombre"] = "";
	if (count($fieldToolTipsprogramas["Spanish"]))
		$tdataprogramas[".isUseToolTips"] = true;
}


	$tdataprogramas[".NCSearch"] = true;



$tdataprogramas[".shortTableName"] = "programas";
$tdataprogramas[".nSecOptions"] = 0;

$tdataprogramas[".mainTableOwnerID"] = "";
$tdataprogramas[".entityType"] = 0;
$tdataprogramas[".connId"] = "eportal_at_192_168_70_170";


$tdataprogramas[".strOriginalTableName"] = "bolsa_empleo.programas";

	



$tdataprogramas[".showAddInPopup"] = false;

$tdataprogramas[".showEditInPopup"] = false;

$tdataprogramas[".showViewInPopup"] = false;

$tdataprogramas[".listAjax"] = false;
//	temporary
//$tdataprogramas[".listAjax"] = false;

	$tdataprogramas[".audit"] = true;

	$tdataprogramas[".locking"] = false;


$pages = $tdataprogramas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprogramas[".edit"] = true;
	$tdataprogramas[".afterEditAction"] = 1;
	$tdataprogramas[".closePopupAfterEdit"] = 1;
	$tdataprogramas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprogramas[".add"] = true;
$tdataprogramas[".afterAddAction"] = 1;
$tdataprogramas[".closePopupAfterAdd"] = 1;
$tdataprogramas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprogramas[".list"] = true;
}



$tdataprogramas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprogramas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprogramas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprogramas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprogramas[".printFriendly"] = true;
}



$tdataprogramas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprogramas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprogramas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprogramas[".isUseAjaxSuggest"] = true;



																																																															

$tdataprogramas[".ajaxCodeSnippetAdded"] = false;

$tdataprogramas[".buttonsAdded"] = false;

$tdataprogramas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprogramas[".isUseTimeForSearch"] = false;


$tdataprogramas[".badgeColor"] = "7B68EE";


$tdataprogramas[".allSearchFields"] = array();
$tdataprogramas[".filterFields"] = array();
$tdataprogramas[".requiredSearchFields"] = array();

$tdataprogramas[".googleLikeFields"] = array();
$tdataprogramas[".googleLikeFields"][] = "id_programas";
$tdataprogramas[".googleLikeFields"][] = "nombre";



$tdataprogramas[".tableType"] = "list";

$tdataprogramas[".printerPageOrientation"] = 0;
$tdataprogramas[".nPrinterPageScale"] = 100;

$tdataprogramas[".nPrinterSplitRecords"] = 40;

$tdataprogramas[".geocodingEnabled"] = false;










$tdataprogramas[".pageSize"] = 20;

$tdataprogramas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprogramas[".strOrderBy"] = $tstrOrderBy;

$tdataprogramas[".orderindexes"] = array();


$tdataprogramas[".sqlHead"] = "SELECT id_programas,  	nombre";
$tdataprogramas[".sqlFrom"] = "FROM bolsa_empleo.programas";
$tdataprogramas[".sqlWhereExpr"] = "";
$tdataprogramas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprogramas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprogramas[".arrGroupsPerPage"] = $arrGPP;

$tdataprogramas[".highlightSearchResults"] = true;

$tableKeysprogramas = array();
$tableKeysprogramas[] = "id_programas";
$tdataprogramas[".Keys"] = $tableKeysprogramas;


$tdataprogramas[".hideMobileList"] = array();




//	id_programas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_programas";
	$fdata["GoodName"] = "id_programas";
	$fdata["ownerTable"] = "bolsa_empleo.programas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_programas","id_programas");
	$fdata["FieldType"] = 2;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_programas";

		$fdata["sourceSingle"] = "id_programas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_programas";

	
	
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


	$tdataprogramas["id_programas"] = $fdata;
		$tdataprogramas[".searchableFields"][] = "id_programas";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "bolsa_empleo.programas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_programas","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

		$fdata["sourceSingle"] = "nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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


	$tdataprogramas["nombre"] = $fdata;
		$tdataprogramas[".searchableFields"][] = "nombre";


$tables_data["bolsa_empleo.programas"]=&$tdataprogramas;
$field_labels["bolsa_empleo_programas"] = &$fieldLabelsprogramas;
$fieldToolTips["bolsa_empleo_programas"] = &$fieldToolTipsprogramas;
$placeHolders["bolsa_empleo_programas"] = &$placeHoldersprogramas;
$page_titles["bolsa_empleo_programas"] = &$pageTitlesprogramas;


changeTextControlsToDate( "bolsa_empleo.programas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.programas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.programas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_programas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_programas,  	nombre";
$proto0["m_strFrom"] = "FROM bolsa_empleo.programas";
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
	"m_strName" => "id_programas",
	"m_strTable" => "bolsa_empleo.programas",
	"m_srcTableName" => "bolsa_empleo.programas"
));

$proto6["m_sql"] = "id_programas";
$proto6["m_srcTableName"] = "bolsa_empleo.programas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "bolsa_empleo.programas",
	"m_srcTableName" => "bolsa_empleo.programas"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "bolsa_empleo.programas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.programas";
$proto11["m_srcTableName"] = "bolsa_empleo.programas";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_programas";
$proto11["m_columns"][] = "nombre";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.programas";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.programas";
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
$proto0["m_srcTableName"]="bolsa_empleo.programas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_programas = createSqlQuery_programas();


	
		;

		

$tdataprogramas[".sqlquery"] = $queryData_programas;



$tdataprogramas[".hasEvents"] = false;

?>
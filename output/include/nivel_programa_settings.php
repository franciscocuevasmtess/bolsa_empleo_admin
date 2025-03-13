<?php
$tdatanivel_programa = array();
$tdatanivel_programa[".searchableFields"] = array();
$tdatanivel_programa[".ShortName"] = "nivel_programa";
$tdatanivel_programa[".OwnerID"] = "";
$tdatanivel_programa[".OriginalTable"] = "bolsa_empleo.nivel_programa";


$tdatanivel_programa[".pagesByType"] = my_json_decode( "{}" );
$tdatanivel_programa[".originalPagesByType"] = $tdatanivel_programa[".pagesByType"];
$tdatanivel_programa[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatanivel_programa[".originalPages"] = $tdatanivel_programa[".pages"];
$tdatanivel_programa[".defaultPages"] = my_json_decode( "{}" );
$tdatanivel_programa[".originalDefaultPages"] = $tdatanivel_programa[".defaultPages"];

//	field labels
$fieldLabelsnivel_programa = array();
$fieldToolTipsnivel_programa = array();
$pageTitlesnivel_programa = array();
$placeHoldersnivel_programa = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnivel_programa["Spanish"] = array();
	$fieldToolTipsnivel_programa["Spanish"] = array();
	$placeHoldersnivel_programa["Spanish"] = array();
	$pageTitlesnivel_programa["Spanish"] = array();
	$fieldLabelsnivel_programa["Spanish"]["id_nivel_programa"] = "Id Nivel Programa";
	$fieldToolTipsnivel_programa["Spanish"]["id_nivel_programa"] = "";
	$placeHoldersnivel_programa["Spanish"]["id_nivel_programa"] = "";
	$fieldLabelsnivel_programa["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsnivel_programa["Spanish"]["descripcion"] = "";
	$placeHoldersnivel_programa["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsnivel_programa["Spanish"]))
		$tdatanivel_programa[".isUseToolTips"] = true;
}


	$tdatanivel_programa[".NCSearch"] = true;



$tdatanivel_programa[".shortTableName"] = "nivel_programa";
$tdatanivel_programa[".nSecOptions"] = 0;

$tdatanivel_programa[".mainTableOwnerID"] = "";
$tdatanivel_programa[".entityType"] = 0;
$tdatanivel_programa[".connId"] = "eportal_at_192_168_70_170";


$tdatanivel_programa[".strOriginalTableName"] = "bolsa_empleo.nivel_programa";

	



$tdatanivel_programa[".showAddInPopup"] = false;

$tdatanivel_programa[".showEditInPopup"] = false;

$tdatanivel_programa[".showViewInPopup"] = false;

$tdatanivel_programa[".listAjax"] = false;
//	temporary
//$tdatanivel_programa[".listAjax"] = false;

	$tdatanivel_programa[".audit"] = true;

	$tdatanivel_programa[".locking"] = false;


$pages = $tdatanivel_programa[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanivel_programa[".edit"] = true;
	$tdatanivel_programa[".afterEditAction"] = 1;
	$tdatanivel_programa[".closePopupAfterEdit"] = 1;
	$tdatanivel_programa[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanivel_programa[".add"] = true;
$tdatanivel_programa[".afterAddAction"] = 1;
$tdatanivel_programa[".closePopupAfterAdd"] = 1;
$tdatanivel_programa[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanivel_programa[".list"] = true;
}



$tdatanivel_programa[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanivel_programa[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanivel_programa[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanivel_programa[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanivel_programa[".printFriendly"] = true;
}



$tdatanivel_programa[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanivel_programa[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanivel_programa[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanivel_programa[".isUseAjaxSuggest"] = true;



																																																															

$tdatanivel_programa[".ajaxCodeSnippetAdded"] = false;

$tdatanivel_programa[".buttonsAdded"] = false;

$tdatanivel_programa[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanivel_programa[".isUseTimeForSearch"] = false;


$tdatanivel_programa[".badgeColor"] = "DB7093";


$tdatanivel_programa[".allSearchFields"] = array();
$tdatanivel_programa[".filterFields"] = array();
$tdatanivel_programa[".requiredSearchFields"] = array();

$tdatanivel_programa[".googleLikeFields"] = array();
$tdatanivel_programa[".googleLikeFields"][] = "id_nivel_programa";
$tdatanivel_programa[".googleLikeFields"][] = "descripcion";



$tdatanivel_programa[".tableType"] = "list";

$tdatanivel_programa[".printerPageOrientation"] = 0;
$tdatanivel_programa[".nPrinterPageScale"] = 100;

$tdatanivel_programa[".nPrinterSplitRecords"] = 40;

$tdatanivel_programa[".geocodingEnabled"] = false;










$tdatanivel_programa[".pageSize"] = 20;

$tdatanivel_programa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanivel_programa[".strOrderBy"] = $tstrOrderBy;

$tdatanivel_programa[".orderindexes"] = array();


$tdatanivel_programa[".sqlHead"] = "SELECT id_nivel_programa,  	descripcion";
$tdatanivel_programa[".sqlFrom"] = "FROM bolsa_empleo.nivel_programa";
$tdatanivel_programa[".sqlWhereExpr"] = "";
$tdatanivel_programa[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanivel_programa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanivel_programa[".arrGroupsPerPage"] = $arrGPP;

$tdatanivel_programa[".highlightSearchResults"] = true;

$tableKeysnivel_programa = array();
$tableKeysnivel_programa[] = "id_nivel_programa";
$tdatanivel_programa[".Keys"] = $tableKeysnivel_programa;


$tdatanivel_programa[".hideMobileList"] = array();




//	id_nivel_programa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_nivel_programa";
	$fdata["GoodName"] = "id_nivel_programa";
	$fdata["ownerTable"] = "bolsa_empleo.nivel_programa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_nivel_programa","id_nivel_programa");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatanivel_programa["id_nivel_programa"] = $fdata;
		$tdatanivel_programa[".searchableFields"][] = "id_nivel_programa";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.nivel_programa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_nivel_programa","descripcion");
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


	$tdatanivel_programa["descripcion"] = $fdata;
		$tdatanivel_programa[".searchableFields"][] = "descripcion";


$tables_data["bolsa_empleo.nivel_programa"]=&$tdatanivel_programa;
$field_labels["bolsa_empleo_nivel_programa"] = &$fieldLabelsnivel_programa;
$fieldToolTips["bolsa_empleo_nivel_programa"] = &$fieldToolTipsnivel_programa;
$placeHolders["bolsa_empleo_nivel_programa"] = &$placeHoldersnivel_programa;
$page_titles["bolsa_empleo_nivel_programa"] = &$pageTitlesnivel_programa;


changeTextControlsToDate( "bolsa_empleo.nivel_programa" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.nivel_programa"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.nivel_programa"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_nivel_programa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_nivel_programa,  	descripcion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.nivel_programa";
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
	"m_strName" => "id_nivel_programa",
	"m_strTable" => "bolsa_empleo.nivel_programa",
	"m_srcTableName" => "bolsa_empleo.nivel_programa"
));

$proto6["m_sql"] = "id_nivel_programa";
$proto6["m_srcTableName"] = "bolsa_empleo.nivel_programa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.nivel_programa",
	"m_srcTableName" => "bolsa_empleo.nivel_programa"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "bolsa_empleo.nivel_programa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.nivel_programa";
$proto11["m_srcTableName"] = "bolsa_empleo.nivel_programa";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_nivel_programa";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.nivel_programa";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.nivel_programa";
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
$proto0["m_srcTableName"]="bolsa_empleo.nivel_programa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_nivel_programa = createSqlQuery_nivel_programa();


	
		;

		

$tdatanivel_programa[".sqlquery"] = $queryData_nivel_programa;



$tdatanivel_programa[".hasEvents"] = false;

?>
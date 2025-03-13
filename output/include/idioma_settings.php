<?php
$tdataidioma = array();
$tdataidioma[".searchableFields"] = array();
$tdataidioma[".ShortName"] = "idioma";
$tdataidioma[".OwnerID"] = "";
$tdataidioma[".OriginalTable"] = "bolsa_empleo.idioma";


$tdataidioma[".pagesByType"] = my_json_decode( "{}" );
$tdataidioma[".originalPagesByType"] = $tdataidioma[".pagesByType"];
$tdataidioma[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataidioma[".originalPages"] = $tdataidioma[".pages"];
$tdataidioma[".defaultPages"] = my_json_decode( "{}" );
$tdataidioma[".originalDefaultPages"] = $tdataidioma[".defaultPages"];

//	field labels
$fieldLabelsidioma = array();
$fieldToolTipsidioma = array();
$pageTitlesidioma = array();
$placeHoldersidioma = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsidioma["Spanish"] = array();
	$fieldToolTipsidioma["Spanish"] = array();
	$placeHoldersidioma["Spanish"] = array();
	$pageTitlesidioma["Spanish"] = array();
	$fieldLabelsidioma["Spanish"]["id_idioma"] = "Id Idioma";
	$fieldToolTipsidioma["Spanish"]["id_idioma"] = "";
	$placeHoldersidioma["Spanish"]["id_idioma"] = "";
	$fieldLabelsidioma["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsidioma["Spanish"]["descripcion"] = "";
	$placeHoldersidioma["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsidioma["Spanish"]))
		$tdataidioma[".isUseToolTips"] = true;
}


	$tdataidioma[".NCSearch"] = true;



$tdataidioma[".shortTableName"] = "idioma";
$tdataidioma[".nSecOptions"] = 0;

$tdataidioma[".mainTableOwnerID"] = "";
$tdataidioma[".entityType"] = 0;
$tdataidioma[".connId"] = "eportal_at_192_168_70_170";


$tdataidioma[".strOriginalTableName"] = "bolsa_empleo.idioma";

	



$tdataidioma[".showAddInPopup"] = false;

$tdataidioma[".showEditInPopup"] = false;

$tdataidioma[".showViewInPopup"] = false;

$tdataidioma[".listAjax"] = false;
//	temporary
//$tdataidioma[".listAjax"] = false;

	$tdataidioma[".audit"] = true;

	$tdataidioma[".locking"] = false;


$pages = $tdataidioma[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataidioma[".edit"] = true;
	$tdataidioma[".afterEditAction"] = 1;
	$tdataidioma[".closePopupAfterEdit"] = 1;
	$tdataidioma[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataidioma[".add"] = true;
$tdataidioma[".afterAddAction"] = 1;
$tdataidioma[".closePopupAfterAdd"] = 1;
$tdataidioma[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataidioma[".list"] = true;
}



$tdataidioma[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataidioma[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataidioma[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataidioma[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataidioma[".printFriendly"] = true;
}



$tdataidioma[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataidioma[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataidioma[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataidioma[".isUseAjaxSuggest"] = true;



																																																															

$tdataidioma[".ajaxCodeSnippetAdded"] = false;

$tdataidioma[".buttonsAdded"] = false;

$tdataidioma[".addPageEvents"] = false;

// use timepicker for search panel
$tdataidioma[".isUseTimeForSearch"] = false;


$tdataidioma[".badgeColor"] = "DC143C";


$tdataidioma[".allSearchFields"] = array();
$tdataidioma[".filterFields"] = array();
$tdataidioma[".requiredSearchFields"] = array();

$tdataidioma[".googleLikeFields"] = array();
$tdataidioma[".googleLikeFields"][] = "id_idioma";
$tdataidioma[".googleLikeFields"][] = "descripcion";



$tdataidioma[".tableType"] = "list";

$tdataidioma[".printerPageOrientation"] = 0;
$tdataidioma[".nPrinterPageScale"] = 100;

$tdataidioma[".nPrinterSplitRecords"] = 40;

$tdataidioma[".geocodingEnabled"] = false;










$tdataidioma[".pageSize"] = 20;

$tdataidioma[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataidioma[".strOrderBy"] = $tstrOrderBy;

$tdataidioma[".orderindexes"] = array();


$tdataidioma[".sqlHead"] = "SELECT id_idioma,  	descripcion";
$tdataidioma[".sqlFrom"] = "FROM bolsa_empleo.idioma";
$tdataidioma[".sqlWhereExpr"] = "";
$tdataidioma[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataidioma[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataidioma[".arrGroupsPerPage"] = $arrGPP;

$tdataidioma[".highlightSearchResults"] = true;

$tableKeysidioma = array();
$tableKeysidioma[] = "id_idioma";
$tdataidioma[".Keys"] = $tableKeysidioma;


$tdataidioma[".hideMobileList"] = array();




//	id_idioma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_idioma";
	$fdata["GoodName"] = "id_idioma";
	$fdata["ownerTable"] = "bolsa_empleo.idioma";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_idioma","id_idioma");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_idioma";

		$fdata["sourceSingle"] = "id_idioma";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_idioma";

	
	
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


	$tdataidioma["id_idioma"] = $fdata;
		$tdataidioma[".searchableFields"][] = "id_idioma";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.idioma";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_idioma","descripcion");
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


	$tdataidioma["descripcion"] = $fdata;
		$tdataidioma[".searchableFields"][] = "descripcion";


$tables_data["bolsa_empleo.idioma"]=&$tdataidioma;
$field_labels["bolsa_empleo_idioma"] = &$fieldLabelsidioma;
$fieldToolTips["bolsa_empleo_idioma"] = &$fieldToolTipsidioma;
$placeHolders["bolsa_empleo_idioma"] = &$placeHoldersidioma;
$page_titles["bolsa_empleo_idioma"] = &$pageTitlesidioma;


changeTextControlsToDate( "bolsa_empleo.idioma" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.idioma"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.idioma"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_idioma()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_idioma,  	descripcion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.idioma";
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
	"m_strName" => "id_idioma",
	"m_strTable" => "bolsa_empleo.idioma",
	"m_srcTableName" => "bolsa_empleo.idioma"
));

$proto6["m_sql"] = "id_idioma";
$proto6["m_srcTableName"] = "bolsa_empleo.idioma";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.idioma",
	"m_srcTableName" => "bolsa_empleo.idioma"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "bolsa_empleo.idioma";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.idioma";
$proto11["m_srcTableName"] = "bolsa_empleo.idioma";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_idioma";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.idioma";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.idioma";
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
$proto0["m_srcTableName"]="bolsa_empleo.idioma";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_idioma = createSqlQuery_idioma();


	
		;

		

$tdataidioma[".sqlquery"] = $queryData_idioma;



$tdataidioma[".hasEvents"] = false;

?>
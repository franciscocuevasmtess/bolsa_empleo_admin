<?php
$tdatavacancias_dias = array();
$tdatavacancias_dias[".searchableFields"] = array();
$tdatavacancias_dias[".ShortName"] = "vacancias_dias";
$tdatavacancias_dias[".OwnerID"] = "";
$tdatavacancias_dias[".OriginalTable"] = "bolsa_empleo.vacancias_dias";


$tdatavacancias_dias[".pagesByType"] = my_json_decode( "{}" );
$tdatavacancias_dias[".originalPagesByType"] = $tdatavacancias_dias[".pagesByType"];
$tdatavacancias_dias[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatavacancias_dias[".originalPages"] = $tdatavacancias_dias[".pages"];
$tdatavacancias_dias[".defaultPages"] = my_json_decode( "{}" );
$tdatavacancias_dias[".originalDefaultPages"] = $tdatavacancias_dias[".defaultPages"];

//	field labels
$fieldLabelsvacancias_dias = array();
$fieldToolTipsvacancias_dias = array();
$pageTitlesvacancias_dias = array();
$placeHoldersvacancias_dias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvacancias_dias["Spanish"] = array();
	$fieldToolTipsvacancias_dias["Spanish"] = array();
	$placeHoldersvacancias_dias["Spanish"] = array();
	$pageTitlesvacancias_dias["Spanish"] = array();
	$fieldLabelsvacancias_dias["Spanish"]["id_dias_vacancias"] = "Id Dias Vacancias";
	$fieldToolTipsvacancias_dias["Spanish"]["id_dias_vacancias"] = "";
	$placeHoldersvacancias_dias["Spanish"]["id_dias_vacancias"] = "";
	$fieldLabelsvacancias_dias["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsvacancias_dias["Spanish"]["descripcion"] = "";
	$placeHoldersvacancias_dias["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsvacancias_dias["Spanish"]))
		$tdatavacancias_dias[".isUseToolTips"] = true;
}


	$tdatavacancias_dias[".NCSearch"] = true;



$tdatavacancias_dias[".shortTableName"] = "vacancias_dias";
$tdatavacancias_dias[".nSecOptions"] = 0;

$tdatavacancias_dias[".mainTableOwnerID"] = "";
$tdatavacancias_dias[".entityType"] = 0;
$tdatavacancias_dias[".connId"] = "eportal_at_192_168_70_170";


$tdatavacancias_dias[".strOriginalTableName"] = "bolsa_empleo.vacancias_dias";

	



$tdatavacancias_dias[".showAddInPopup"] = false;

$tdatavacancias_dias[".showEditInPopup"] = false;

$tdatavacancias_dias[".showViewInPopup"] = false;

$tdatavacancias_dias[".listAjax"] = false;
//	temporary
//$tdatavacancias_dias[".listAjax"] = false;

	$tdatavacancias_dias[".audit"] = true;

	$tdatavacancias_dias[".locking"] = false;


$pages = $tdatavacancias_dias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavacancias_dias[".edit"] = true;
	$tdatavacancias_dias[".afterEditAction"] = 1;
	$tdatavacancias_dias[".closePopupAfterEdit"] = 1;
	$tdatavacancias_dias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavacancias_dias[".add"] = true;
$tdatavacancias_dias[".afterAddAction"] = 1;
$tdatavacancias_dias[".closePopupAfterAdd"] = 1;
$tdatavacancias_dias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavacancias_dias[".list"] = true;
}



$tdatavacancias_dias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavacancias_dias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavacancias_dias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavacancias_dias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavacancias_dias[".printFriendly"] = true;
}



$tdatavacancias_dias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavacancias_dias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavacancias_dias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavacancias_dias[".isUseAjaxSuggest"] = true;



																																																																																							

$tdatavacancias_dias[".ajaxCodeSnippetAdded"] = false;

$tdatavacancias_dias[".buttonsAdded"] = false;

$tdatavacancias_dias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavacancias_dias[".isUseTimeForSearch"] = false;


$tdatavacancias_dias[".badgeColor"] = "CFAE83";


$tdatavacancias_dias[".allSearchFields"] = array();
$tdatavacancias_dias[".filterFields"] = array();
$tdatavacancias_dias[".requiredSearchFields"] = array();

$tdatavacancias_dias[".googleLikeFields"] = array();
$tdatavacancias_dias[".googleLikeFields"][] = "id_dias_vacancias";
$tdatavacancias_dias[".googleLikeFields"][] = "descripcion";



$tdatavacancias_dias[".tableType"] = "list";

$tdatavacancias_dias[".printerPageOrientation"] = 0;
$tdatavacancias_dias[".nPrinterPageScale"] = 100;

$tdatavacancias_dias[".nPrinterSplitRecords"] = 40;

$tdatavacancias_dias[".geocodingEnabled"] = false;










$tdatavacancias_dias[".pageSize"] = 20;

$tdatavacancias_dias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavacancias_dias[".strOrderBy"] = $tstrOrderBy;

$tdatavacancias_dias[".orderindexes"] = array();


$tdatavacancias_dias[".sqlHead"] = "SELECT id_dias_vacancias,  	descripcion";
$tdatavacancias_dias[".sqlFrom"] = "FROM bolsa_empleo.vacancias_dias";
$tdatavacancias_dias[".sqlWhereExpr"] = "";
$tdatavacancias_dias[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavacancias_dias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavacancias_dias[".arrGroupsPerPage"] = $arrGPP;

$tdatavacancias_dias[".highlightSearchResults"] = true;

$tableKeysvacancias_dias = array();
$tableKeysvacancias_dias[] = "id_dias_vacancias";
$tdatavacancias_dias[".Keys"] = $tableKeysvacancias_dias;


$tdatavacancias_dias[".hideMobileList"] = array();




//	id_dias_vacancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_dias_vacancias";
	$fdata["GoodName"] = "id_dias_vacancias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancias_dias";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancias_dias","id_dias_vacancias");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_dias_vacancias";

		$fdata["sourceSingle"] = "id_dias_vacancias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_dias_vacancias";

	
	
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


	$tdatavacancias_dias["id_dias_vacancias"] = $fdata;
		$tdatavacancias_dias[".searchableFields"][] = "id_dias_vacancias";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.vacancias_dias";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancias_dias","descripcion");
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


	$tdatavacancias_dias["descripcion"] = $fdata;
		$tdatavacancias_dias[".searchableFields"][] = "descripcion";


$tables_data["bolsa_empleo.vacancias_dias"]=&$tdatavacancias_dias;
$field_labels["bolsa_empleo_vacancias_dias"] = &$fieldLabelsvacancias_dias;
$fieldToolTips["bolsa_empleo_vacancias_dias"] = &$fieldToolTipsvacancias_dias;
$placeHolders["bolsa_empleo_vacancias_dias"] = &$placeHoldersvacancias_dias;
$page_titles["bolsa_empleo_vacancias_dias"] = &$pageTitlesvacancias_dias;


changeTextControlsToDate( "bolsa_empleo.vacancias_dias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.vacancias_dias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.vacancias_dias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vacancias_dias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_dias_vacancias,  	descripcion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vacancias_dias";
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
	"m_strName" => "id_dias_vacancias",
	"m_strTable" => "bolsa_empleo.vacancias_dias",
	"m_srcTableName" => "bolsa_empleo.vacancias_dias"
));

$proto6["m_sql"] = "id_dias_vacancias";
$proto6["m_srcTableName"] = "bolsa_empleo.vacancias_dias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.vacancias_dias",
	"m_srcTableName" => "bolsa_empleo.vacancias_dias"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "bolsa_empleo.vacancias_dias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.vacancias_dias";
$proto11["m_srcTableName"] = "bolsa_empleo.vacancias_dias";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_dias_vacancias";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.vacancias_dias";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.vacancias_dias";
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
$proto0["m_srcTableName"]="bolsa_empleo.vacancias_dias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vacancias_dias = createSqlQuery_vacancias_dias();


	
		;

		

$tdatavacancias_dias[".sqlquery"] = $queryData_vacancias_dias;



$tdatavacancias_dias[".hasEvents"] = false;

?>
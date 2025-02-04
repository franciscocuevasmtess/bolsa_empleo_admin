<?php
$tdatanivel_idioma = array();
$tdatanivel_idioma[".searchableFields"] = array();
$tdatanivel_idioma[".ShortName"] = "nivel_idioma";
$tdatanivel_idioma[".OwnerID"] = "";
$tdatanivel_idioma[".OriginalTable"] = "bolsa_empleo.nivel_idioma";


$tdatanivel_idioma[".pagesByType"] = my_json_decode( "{}" );
$tdatanivel_idioma[".originalPagesByType"] = $tdatanivel_idioma[".pagesByType"];
$tdatanivel_idioma[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatanivel_idioma[".originalPages"] = $tdatanivel_idioma[".pages"];
$tdatanivel_idioma[".defaultPages"] = my_json_decode( "{}" );
$tdatanivel_idioma[".originalDefaultPages"] = $tdatanivel_idioma[".defaultPages"];

//	field labels
$fieldLabelsnivel_idioma = array();
$fieldToolTipsnivel_idioma = array();
$pageTitlesnivel_idioma = array();
$placeHoldersnivel_idioma = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnivel_idioma["Spanish"] = array();
	$fieldToolTipsnivel_idioma["Spanish"] = array();
	$placeHoldersnivel_idioma["Spanish"] = array();
	$pageTitlesnivel_idioma["Spanish"] = array();
	$fieldLabelsnivel_idioma["Spanish"]["id_nivel"] = "Id Nivel";
	$fieldToolTipsnivel_idioma["Spanish"]["id_nivel"] = "";
	$placeHoldersnivel_idioma["Spanish"]["id_nivel"] = "";
	$fieldLabelsnivel_idioma["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsnivel_idioma["Spanish"]["descripcion"] = "";
	$placeHoldersnivel_idioma["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsnivel_idioma["Spanish"]))
		$tdatanivel_idioma[".isUseToolTips"] = true;
}


	$tdatanivel_idioma[".NCSearch"] = true;



$tdatanivel_idioma[".shortTableName"] = "nivel_idioma";
$tdatanivel_idioma[".nSecOptions"] = 0;

$tdatanivel_idioma[".mainTableOwnerID"] = "";
$tdatanivel_idioma[".entityType"] = 0;
$tdatanivel_idioma[".connId"] = "eportal_at_192_168_70_170";


$tdatanivel_idioma[".strOriginalTableName"] = "bolsa_empleo.nivel_idioma";

	



$tdatanivel_idioma[".showAddInPopup"] = false;

$tdatanivel_idioma[".showEditInPopup"] = false;

$tdatanivel_idioma[".showViewInPopup"] = false;

$tdatanivel_idioma[".listAjax"] = false;
//	temporary
//$tdatanivel_idioma[".listAjax"] = false;

	$tdatanivel_idioma[".audit"] = true;

	$tdatanivel_idioma[".locking"] = false;


$pages = $tdatanivel_idioma[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanivel_idioma[".edit"] = true;
	$tdatanivel_idioma[".afterEditAction"] = 1;
	$tdatanivel_idioma[".closePopupAfterEdit"] = 1;
	$tdatanivel_idioma[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanivel_idioma[".add"] = true;
$tdatanivel_idioma[".afterAddAction"] = 1;
$tdatanivel_idioma[".closePopupAfterAdd"] = 1;
$tdatanivel_idioma[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanivel_idioma[".list"] = true;
}



$tdatanivel_idioma[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanivel_idioma[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanivel_idioma[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanivel_idioma[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanivel_idioma[".printFriendly"] = true;
}



$tdatanivel_idioma[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanivel_idioma[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanivel_idioma[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanivel_idioma[".isUseAjaxSuggest"] = true;



																																																			

$tdatanivel_idioma[".ajaxCodeSnippetAdded"] = false;

$tdatanivel_idioma[".buttonsAdded"] = false;

$tdatanivel_idioma[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanivel_idioma[".isUseTimeForSearch"] = false;


$tdatanivel_idioma[".badgeColor"] = "778899";


$tdatanivel_idioma[".allSearchFields"] = array();
$tdatanivel_idioma[".filterFields"] = array();
$tdatanivel_idioma[".requiredSearchFields"] = array();

$tdatanivel_idioma[".googleLikeFields"] = array();
$tdatanivel_idioma[".googleLikeFields"][] = "id_nivel";
$tdatanivel_idioma[".googleLikeFields"][] = "descripcion";



$tdatanivel_idioma[".tableType"] = "list";

$tdatanivel_idioma[".printerPageOrientation"] = 0;
$tdatanivel_idioma[".nPrinterPageScale"] = 100;

$tdatanivel_idioma[".nPrinterSplitRecords"] = 40;

$tdatanivel_idioma[".geocodingEnabled"] = false;










$tdatanivel_idioma[".pageSize"] = 20;

$tdatanivel_idioma[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanivel_idioma[".strOrderBy"] = $tstrOrderBy;

$tdatanivel_idioma[".orderindexes"] = array();


$tdatanivel_idioma[".sqlHead"] = "SELECT id_nivel,  	descripcion";
$tdatanivel_idioma[".sqlFrom"] = "FROM bolsa_empleo.nivel_idioma";
$tdatanivel_idioma[".sqlWhereExpr"] = "";
$tdatanivel_idioma[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanivel_idioma[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanivel_idioma[".arrGroupsPerPage"] = $arrGPP;

$tdatanivel_idioma[".highlightSearchResults"] = true;

$tableKeysnivel_idioma = array();
$tableKeysnivel_idioma[] = "id_nivel";
$tdatanivel_idioma[".Keys"] = $tableKeysnivel_idioma;


$tdatanivel_idioma[".hideMobileList"] = array();




//	id_nivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_nivel";
	$fdata["GoodName"] = "id_nivel";
	$fdata["ownerTable"] = "bolsa_empleo.nivel_idioma";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_nivel_idioma","id_nivel");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_nivel";

		$fdata["sourceSingle"] = "id_nivel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_nivel";

	
	
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


	$tdatanivel_idioma["id_nivel"] = $fdata;
		$tdatanivel_idioma[".searchableFields"][] = "id_nivel";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.nivel_idioma";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_nivel_idioma","descripcion");
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


	$tdatanivel_idioma["descripcion"] = $fdata;
		$tdatanivel_idioma[".searchableFields"][] = "descripcion";


$tables_data["bolsa_empleo.nivel_idioma"]=&$tdatanivel_idioma;
$field_labels["bolsa_empleo_nivel_idioma"] = &$fieldLabelsnivel_idioma;
$fieldToolTips["bolsa_empleo_nivel_idioma"] = &$fieldToolTipsnivel_idioma;
$placeHolders["bolsa_empleo_nivel_idioma"] = &$placeHoldersnivel_idioma;
$page_titles["bolsa_empleo_nivel_idioma"] = &$pageTitlesnivel_idioma;


changeTextControlsToDate( "bolsa_empleo.nivel_idioma" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.nivel_idioma"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.nivel_idioma"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_nivel_idioma()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_nivel,  	descripcion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.nivel_idioma";
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
	"m_strName" => "id_nivel",
	"m_strTable" => "bolsa_empleo.nivel_idioma",
	"m_srcTableName" => "bolsa_empleo.nivel_idioma"
));

$proto6["m_sql"] = "id_nivel";
$proto6["m_srcTableName"] = "bolsa_empleo.nivel_idioma";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.nivel_idioma",
	"m_srcTableName" => "bolsa_empleo.nivel_idioma"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "bolsa_empleo.nivel_idioma";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.nivel_idioma";
$proto11["m_srcTableName"] = "bolsa_empleo.nivel_idioma";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_nivel";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.nivel_idioma";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.nivel_idioma";
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
$proto0["m_srcTableName"]="bolsa_empleo.nivel_idioma";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_nivel_idioma = createSqlQuery_nivel_idioma();


	
		;

		

$tdatanivel_idioma[".sqlquery"] = $queryData_nivel_idioma;



$tdatanivel_idioma[".hasEvents"] = false;

?>
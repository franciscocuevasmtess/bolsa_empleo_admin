<?php
$tdatatipo_registro_conducir = array();
$tdatatipo_registro_conducir[".searchableFields"] = array();
$tdatatipo_registro_conducir[".ShortName"] = "tipo_registro_conducir";
$tdatatipo_registro_conducir[".OwnerID"] = "";
$tdatatipo_registro_conducir[".OriginalTable"] = "bolsa_empleo.tipo_registro_conducir";


$tdatatipo_registro_conducir[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatatipo_registro_conducir[".originalPagesByType"] = $tdatatipo_registro_conducir[".pagesByType"];
$tdatatipo_registro_conducir[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatatipo_registro_conducir[".originalPages"] = $tdatatipo_registro_conducir[".pages"];
$tdatatipo_registro_conducir[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatatipo_registro_conducir[".originalDefaultPages"] = $tdatatipo_registro_conducir[".defaultPages"];

//	field labels
$fieldLabelstipo_registro_conducir = array();
$fieldToolTipstipo_registro_conducir = array();
$pageTitlestipo_registro_conducir = array();
$placeHolderstipo_registro_conducir = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_registro_conducir["Spanish"] = array();
	$fieldToolTipstipo_registro_conducir["Spanish"] = array();
	$placeHolderstipo_registro_conducir["Spanish"] = array();
	$pageTitlestipo_registro_conducir["Spanish"] = array();
	$fieldLabelstipo_registro_conducir["Spanish"]["id_registro_conducir"] = "Id Registro Conducir";
	$fieldToolTipstipo_registro_conducir["Spanish"]["id_registro_conducir"] = "";
	$placeHolderstipo_registro_conducir["Spanish"]["id_registro_conducir"] = "";
	$fieldLabelstipo_registro_conducir["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipstipo_registro_conducir["Spanish"]["nombre"] = "";
	$placeHolderstipo_registro_conducir["Spanish"]["nombre"] = "";
	if (count($fieldToolTipstipo_registro_conducir["Spanish"]))
		$tdatatipo_registro_conducir[".isUseToolTips"] = true;
}


	$tdatatipo_registro_conducir[".NCSearch"] = true;



$tdatatipo_registro_conducir[".shortTableName"] = "tipo_registro_conducir";
$tdatatipo_registro_conducir[".nSecOptions"] = 0;

$tdatatipo_registro_conducir[".mainTableOwnerID"] = "";
$tdatatipo_registro_conducir[".entityType"] = 0;
$tdatatipo_registro_conducir[".connId"] = "eportal_at_192_168_70_170";


$tdatatipo_registro_conducir[".strOriginalTableName"] = "bolsa_empleo.tipo_registro_conducir";

	



$tdatatipo_registro_conducir[".showAddInPopup"] = false;

$tdatatipo_registro_conducir[".showEditInPopup"] = false;

$tdatatipo_registro_conducir[".showViewInPopup"] = false;

$tdatatipo_registro_conducir[".listAjax"] = false;
//	temporary
//$tdatatipo_registro_conducir[".listAjax"] = false;

	$tdatatipo_registro_conducir[".audit"] = true;

	$tdatatipo_registro_conducir[".locking"] = false;


$pages = $tdatatipo_registro_conducir[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipo_registro_conducir[".edit"] = true;
	$tdatatipo_registro_conducir[".afterEditAction"] = 1;
	$tdatatipo_registro_conducir[".closePopupAfterEdit"] = 1;
	$tdatatipo_registro_conducir[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipo_registro_conducir[".add"] = true;
$tdatatipo_registro_conducir[".afterAddAction"] = 1;
$tdatatipo_registro_conducir[".closePopupAfterAdd"] = 1;
$tdatatipo_registro_conducir[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipo_registro_conducir[".list"] = true;
}



$tdatatipo_registro_conducir[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipo_registro_conducir[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipo_registro_conducir[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipo_registro_conducir[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipo_registro_conducir[".printFriendly"] = true;
}



$tdatatipo_registro_conducir[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipo_registro_conducir[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipo_registro_conducir[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipo_registro_conducir[".isUseAjaxSuggest"] = true;



																																																															

$tdatatipo_registro_conducir[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_registro_conducir[".buttonsAdded"] = false;

$tdatatipo_registro_conducir[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_registro_conducir[".isUseTimeForSearch"] = false;


$tdatatipo_registro_conducir[".badgeColor"] = "CD853F";


$tdatatipo_registro_conducir[".allSearchFields"] = array();
$tdatatipo_registro_conducir[".filterFields"] = array();
$tdatatipo_registro_conducir[".requiredSearchFields"] = array();

$tdatatipo_registro_conducir[".googleLikeFields"] = array();
$tdatatipo_registro_conducir[".googleLikeFields"][] = "id_registro_conducir";
$tdatatipo_registro_conducir[".googleLikeFields"][] = "nombre";



$tdatatipo_registro_conducir[".tableType"] = "list";

$tdatatipo_registro_conducir[".printerPageOrientation"] = 0;
$tdatatipo_registro_conducir[".nPrinterPageScale"] = 100;

$tdatatipo_registro_conducir[".nPrinterSplitRecords"] = 40;

$tdatatipo_registro_conducir[".geocodingEnabled"] = false;










$tdatatipo_registro_conducir[".pageSize"] = 20;

$tdatatipo_registro_conducir[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipo_registro_conducir[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_registro_conducir[".orderindexes"] = array();


$tdatatipo_registro_conducir[".sqlHead"] = "SELECT id_registro_conducir,  	nombre";
$tdatatipo_registro_conducir[".sqlFrom"] = "FROM bolsa_empleo.tipo_registro_conducir";
$tdatatipo_registro_conducir[".sqlWhereExpr"] = "";
$tdatatipo_registro_conducir[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_registro_conducir[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_registro_conducir[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_registro_conducir[".highlightSearchResults"] = true;

$tableKeystipo_registro_conducir = array();
$tableKeystipo_registro_conducir[] = "id_registro_conducir";
$tdatatipo_registro_conducir[".Keys"] = $tableKeystipo_registro_conducir;


$tdatatipo_registro_conducir[".hideMobileList"] = array();




//	id_registro_conducir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_registro_conducir";
	$fdata["GoodName"] = "id_registro_conducir";
	$fdata["ownerTable"] = "bolsa_empleo.tipo_registro_conducir";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipo_registro_conducir","id_registro_conducir");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_registro_conducir";

		$fdata["sourceSingle"] = "id_registro_conducir";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_registro_conducir";

	
	
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


	$tdatatipo_registro_conducir["id_registro_conducir"] = $fdata;
		$tdatatipo_registro_conducir[".searchableFields"][] = "id_registro_conducir";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "bolsa_empleo.tipo_registro_conducir";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipo_registro_conducir","nombre");
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


	$tdatatipo_registro_conducir["nombre"] = $fdata;
		$tdatatipo_registro_conducir[".searchableFields"][] = "nombre";


$tables_data["bolsa_empleo.tipo_registro_conducir"]=&$tdatatipo_registro_conducir;
$field_labels["bolsa_empleo_tipo_registro_conducir"] = &$fieldLabelstipo_registro_conducir;
$fieldToolTips["bolsa_empleo_tipo_registro_conducir"] = &$fieldToolTipstipo_registro_conducir;
$placeHolders["bolsa_empleo_tipo_registro_conducir"] = &$placeHolderstipo_registro_conducir;
$page_titles["bolsa_empleo_tipo_registro_conducir"] = &$pageTitlestipo_registro_conducir;


changeTextControlsToDate( "bolsa_empleo.tipo_registro_conducir" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.tipo_registro_conducir"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.tipo_registro_conducir"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipo_registro_conducir()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_registro_conducir,  	nombre";
$proto0["m_strFrom"] = "FROM bolsa_empleo.tipo_registro_conducir";
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
	"m_strName" => "id_registro_conducir",
	"m_strTable" => "bolsa_empleo.tipo_registro_conducir",
	"m_srcTableName" => "bolsa_empleo.tipo_registro_conducir"
));

$proto6["m_sql"] = "id_registro_conducir";
$proto6["m_srcTableName"] = "bolsa_empleo.tipo_registro_conducir";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "bolsa_empleo.tipo_registro_conducir",
	"m_srcTableName" => "bolsa_empleo.tipo_registro_conducir"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "bolsa_empleo.tipo_registro_conducir";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.tipo_registro_conducir";
$proto11["m_srcTableName"] = "bolsa_empleo.tipo_registro_conducir";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_registro_conducir";
$proto11["m_columns"][] = "nombre";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.tipo_registro_conducir";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.tipo_registro_conducir";
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
$proto0["m_srcTableName"]="bolsa_empleo.tipo_registro_conducir";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_registro_conducir = createSqlQuery_tipo_registro_conducir();


	
		;

		

$tdatatipo_registro_conducir[".sqlquery"] = $queryData_tipo_registro_conducir;



$tdatatipo_registro_conducir[".hasEvents"] = false;

?>
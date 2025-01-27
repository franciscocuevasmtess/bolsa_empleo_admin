<?php
$tdatatipo_movilidad = array();
$tdatatipo_movilidad[".searchableFields"] = array();
$tdatatipo_movilidad[".ShortName"] = "tipo_movilidad";
$tdatatipo_movilidad[".OwnerID"] = "";
$tdatatipo_movilidad[".OriginalTable"] = "bolsa_empleo.tipo_movilidad";


$tdatatipo_movilidad[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"]}" );
$tdatatipo_movilidad[".originalPagesByType"] = $tdatatipo_movilidad[".pagesByType"];
$tdatatipo_movilidad[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"]}" ) );
$tdatatipo_movilidad[".originalPages"] = $tdatatipo_movilidad[".pages"];
$tdatatipo_movilidad[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\"}" );
$tdatatipo_movilidad[".originalDefaultPages"] = $tdatatipo_movilidad[".defaultPages"];

//	field labels
$fieldLabelstipo_movilidad = array();
$fieldToolTipstipo_movilidad = array();
$pageTitlestipo_movilidad = array();
$placeHolderstipo_movilidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_movilidad["Spanish"] = array();
	$fieldToolTipstipo_movilidad["Spanish"] = array();
	$placeHolderstipo_movilidad["Spanish"] = array();
	$pageTitlestipo_movilidad["Spanish"] = array();
	$fieldLabelstipo_movilidad["Spanish"]["id_tipo_movilidad"] = "Id Tipo Movilidad";
	$fieldToolTipstipo_movilidad["Spanish"]["id_tipo_movilidad"] = "";
	$placeHolderstipo_movilidad["Spanish"]["id_tipo_movilidad"] = "";
	$fieldLabelstipo_movilidad["Spanish"]["descripcion"] = "Otro tipo de movilidad";
	$fieldToolTipstipo_movilidad["Spanish"]["descripcion"] = "";
	$placeHolderstipo_movilidad["Spanish"]["descripcion"] = "";
	$pageTitlestipo_movilidad["Spanish"]["add"] = "Otro tipo de movilidad , Añadir nuevo";
	if (count($fieldToolTipstipo_movilidad["Spanish"]))
		$tdatatipo_movilidad[".isUseToolTips"] = true;
}


	$tdatatipo_movilidad[".NCSearch"] = true;



$tdatatipo_movilidad[".shortTableName"] = "tipo_movilidad";
$tdatatipo_movilidad[".nSecOptions"] = 0;

$tdatatipo_movilidad[".mainTableOwnerID"] = "";
$tdatatipo_movilidad[".entityType"] = 0;
$tdatatipo_movilidad[".connId"] = "eportal_at_192_168_70_170";


$tdatatipo_movilidad[".strOriginalTableName"] = "bolsa_empleo.tipo_movilidad";

	



$tdatatipo_movilidad[".showAddInPopup"] = false;

$tdatatipo_movilidad[".showEditInPopup"] = false;

$tdatatipo_movilidad[".showViewInPopup"] = false;

$tdatatipo_movilidad[".listAjax"] = false;
//	temporary
//$tdatatipo_movilidad[".listAjax"] = false;

	$tdatatipo_movilidad[".audit"] = true;

	$tdatatipo_movilidad[".locking"] = false;


$pages = $tdatatipo_movilidad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipo_movilidad[".edit"] = true;
	$tdatatipo_movilidad[".afterEditAction"] = 1;
	$tdatatipo_movilidad[".closePopupAfterEdit"] = 1;
	$tdatatipo_movilidad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipo_movilidad[".add"] = true;
$tdatatipo_movilidad[".afterAddAction"] = 1;
$tdatatipo_movilidad[".closePopupAfterAdd"] = 1;
$tdatatipo_movilidad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipo_movilidad[".list"] = true;
}



$tdatatipo_movilidad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipo_movilidad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipo_movilidad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipo_movilidad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipo_movilidad[".printFriendly"] = true;
}



$tdatatipo_movilidad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipo_movilidad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipo_movilidad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipo_movilidad[".isUseAjaxSuggest"] = true;



																																																						

$tdatatipo_movilidad[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_movilidad[".buttonsAdded"] = false;

$tdatatipo_movilidad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_movilidad[".isUseTimeForSearch"] = false;


$tdatatipo_movilidad[".badgeColor"] = "E67349";


$tdatatipo_movilidad[".allSearchFields"] = array();
$tdatatipo_movilidad[".filterFields"] = array();
$tdatatipo_movilidad[".requiredSearchFields"] = array();

$tdatatipo_movilidad[".googleLikeFields"] = array();
$tdatatipo_movilidad[".googleLikeFields"][] = "id_tipo_movilidad";
$tdatatipo_movilidad[".googleLikeFields"][] = "descripcion";



$tdatatipo_movilidad[".tableType"] = "list";

$tdatatipo_movilidad[".printerPageOrientation"] = 0;
$tdatatipo_movilidad[".nPrinterPageScale"] = 100;

$tdatatipo_movilidad[".nPrinterSplitRecords"] = 40;

$tdatatipo_movilidad[".geocodingEnabled"] = false;










$tdatatipo_movilidad[".pageSize"] = 20;

$tdatatipo_movilidad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipo_movilidad[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_movilidad[".orderindexes"] = array();


$tdatatipo_movilidad[".sqlHead"] = "SELECT id_tipo_movilidad,  	descripcion";
$tdatatipo_movilidad[".sqlFrom"] = "FROM bolsa_empleo.tipo_movilidad";
$tdatatipo_movilidad[".sqlWhereExpr"] = "";
$tdatatipo_movilidad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_movilidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_movilidad[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_movilidad[".highlightSearchResults"] = true;

$tableKeystipo_movilidad = array();
$tableKeystipo_movilidad[] = "id_tipo_movilidad";
$tdatatipo_movilidad[".Keys"] = $tableKeystipo_movilidad;


$tdatatipo_movilidad[".hideMobileList"] = array();




//	id_tipo_movilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_tipo_movilidad";
	$fdata["GoodName"] = "id_tipo_movilidad";
	$fdata["ownerTable"] = "bolsa_empleo.tipo_movilidad";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipo_movilidad","id_tipo_movilidad");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_tipo_movilidad";

		$fdata["sourceSingle"] = "id_tipo_movilidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_tipo_movilidad";

	
	
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


	$tdatatipo_movilidad["id_tipo_movilidad"] = $fdata;
		$tdatatipo_movilidad[".searchableFields"][] = "id_tipo_movilidad";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.tipo_movilidad";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipo_movilidad","descripcion");
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


	$tdatatipo_movilidad["descripcion"] = $fdata;
		$tdatatipo_movilidad[".searchableFields"][] = "descripcion";


$tables_data["bolsa_empleo.tipo_movilidad"]=&$tdatatipo_movilidad;
$field_labels["bolsa_empleo_tipo_movilidad"] = &$fieldLabelstipo_movilidad;
$fieldToolTips["bolsa_empleo_tipo_movilidad"] = &$fieldToolTipstipo_movilidad;
$placeHolders["bolsa_empleo_tipo_movilidad"] = &$placeHolderstipo_movilidad;
$page_titles["bolsa_empleo_tipo_movilidad"] = &$pageTitlestipo_movilidad;


changeTextControlsToDate( "bolsa_empleo.tipo_movilidad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.tipo_movilidad"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.tipo_movilidad"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipo_movilidad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_tipo_movilidad,  	descripcion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.tipo_movilidad";
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
	"m_strName" => "id_tipo_movilidad",
	"m_strTable" => "bolsa_empleo.tipo_movilidad",
	"m_srcTableName" => "bolsa_empleo.tipo_movilidad"
));

$proto6["m_sql"] = "id_tipo_movilidad";
$proto6["m_srcTableName"] = "bolsa_empleo.tipo_movilidad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.tipo_movilidad",
	"m_srcTableName" => "bolsa_empleo.tipo_movilidad"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "bolsa_empleo.tipo_movilidad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.tipo_movilidad";
$proto11["m_srcTableName"] = "bolsa_empleo.tipo_movilidad";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_tipo_movilidad";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.tipo_movilidad";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.tipo_movilidad";
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
$proto0["m_srcTableName"]="bolsa_empleo.tipo_movilidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_movilidad = createSqlQuery_tipo_movilidad();


	
		;

		

$tdatatipo_movilidad[".sqlquery"] = $queryData_tipo_movilidad;



$tdatatipo_movilidad[".hasEvents"] = false;

?>
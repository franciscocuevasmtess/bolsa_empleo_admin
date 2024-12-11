<?php
$tdatatipo_remuneracion = array();
$tdatatipo_remuneracion[".searchableFields"] = array();
$tdatatipo_remuneracion[".ShortName"] = "tipo_remuneracion";
$tdatatipo_remuneracion[".OwnerID"] = "";
$tdatatipo_remuneracion[".OriginalTable"] = "bolsa_empleo.tipo_remuneracion";


$tdatatipo_remuneracion[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"]}" );
$tdatatipo_remuneracion[".originalPagesByType"] = $tdatatipo_remuneracion[".pagesByType"];
$tdatatipo_remuneracion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"]}" ) );
$tdatatipo_remuneracion[".originalPages"] = $tdatatipo_remuneracion[".pages"];
$tdatatipo_remuneracion[".defaultPages"] = my_json_decode( "{\"add\":\"add\"}" );
$tdatatipo_remuneracion[".originalDefaultPages"] = $tdatatipo_remuneracion[".defaultPages"];

//	field labels
$fieldLabelstipo_remuneracion = array();
$fieldToolTipstipo_remuneracion = array();
$pageTitlestipo_remuneracion = array();
$placeHolderstipo_remuneracion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_remuneracion["Spanish"] = array();
	$fieldToolTipstipo_remuneracion["Spanish"] = array();
	$placeHolderstipo_remuneracion["Spanish"] = array();
	$pageTitlestipo_remuneracion["Spanish"] = array();
	$fieldLabelstipo_remuneracion["Spanish"]["id_tipo_remuneracion"] = "Id Tipo Remuneracion";
	$fieldToolTipstipo_remuneracion["Spanish"]["id_tipo_remuneracion"] = "";
	$placeHolderstipo_remuneracion["Spanish"]["id_tipo_remuneracion"] = "";
	$fieldLabelstipo_remuneracion["Spanish"]["descripcion"] = "Otro tipo de Remuneración";
	$fieldToolTipstipo_remuneracion["Spanish"]["descripcion"] = "";
	$placeHolderstipo_remuneracion["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipstipo_remuneracion["Spanish"]))
		$tdatatipo_remuneracion[".isUseToolTips"] = true;
}


	$tdatatipo_remuneracion[".NCSearch"] = true;



$tdatatipo_remuneracion[".shortTableName"] = "tipo_remuneracion";
$tdatatipo_remuneracion[".nSecOptions"] = 0;

$tdatatipo_remuneracion[".mainTableOwnerID"] = "";
$tdatatipo_remuneracion[".entityType"] = 0;
$tdatatipo_remuneracion[".connId"] = "eportal_at_192_168_70_170";


$tdatatipo_remuneracion[".strOriginalTableName"] = "bolsa_empleo.tipo_remuneracion";

	



$tdatatipo_remuneracion[".showAddInPopup"] = false;

$tdatatipo_remuneracion[".showEditInPopup"] = false;

$tdatatipo_remuneracion[".showViewInPopup"] = false;

$tdatatipo_remuneracion[".listAjax"] = false;
//	temporary
//$tdatatipo_remuneracion[".listAjax"] = false;

	$tdatatipo_remuneracion[".audit"] = true;

	$tdatatipo_remuneracion[".locking"] = false;


$pages = $tdatatipo_remuneracion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipo_remuneracion[".edit"] = true;
	$tdatatipo_remuneracion[".afterEditAction"] = 1;
	$tdatatipo_remuneracion[".closePopupAfterEdit"] = 1;
	$tdatatipo_remuneracion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipo_remuneracion[".add"] = true;
$tdatatipo_remuneracion[".afterAddAction"] = 1;
$tdatatipo_remuneracion[".closePopupAfterAdd"] = 1;
$tdatatipo_remuneracion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipo_remuneracion[".list"] = true;
}



$tdatatipo_remuneracion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipo_remuneracion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipo_remuneracion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipo_remuneracion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipo_remuneracion[".printFriendly"] = true;
}



$tdatatipo_remuneracion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipo_remuneracion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipo_remuneracion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipo_remuneracion[".isUseAjaxSuggest"] = true;



																																																			

$tdatatipo_remuneracion[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_remuneracion[".buttonsAdded"] = false;

$tdatatipo_remuneracion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_remuneracion[".isUseTimeForSearch"] = false;


$tdatatipo_remuneracion[".badgeColor"] = "3CB371";


$tdatatipo_remuneracion[".allSearchFields"] = array();
$tdatatipo_remuneracion[".filterFields"] = array();
$tdatatipo_remuneracion[".requiredSearchFields"] = array();

$tdatatipo_remuneracion[".googleLikeFields"] = array();
$tdatatipo_remuneracion[".googleLikeFields"][] = "id_tipo_remuneracion";
$tdatatipo_remuneracion[".googleLikeFields"][] = "descripcion";



$tdatatipo_remuneracion[".tableType"] = "list";

$tdatatipo_remuneracion[".printerPageOrientation"] = 0;
$tdatatipo_remuneracion[".nPrinterPageScale"] = 100;

$tdatatipo_remuneracion[".nPrinterSplitRecords"] = 40;

$tdatatipo_remuneracion[".geocodingEnabled"] = false;










$tdatatipo_remuneracion[".pageSize"] = 20;

$tdatatipo_remuneracion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipo_remuneracion[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_remuneracion[".orderindexes"] = array();


$tdatatipo_remuneracion[".sqlHead"] = "SELECT id_tipo_remuneracion,  	descripcion";
$tdatatipo_remuneracion[".sqlFrom"] = "FROM bolsa_empleo.tipo_remuneracion";
$tdatatipo_remuneracion[".sqlWhereExpr"] = "";
$tdatatipo_remuneracion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_remuneracion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_remuneracion[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_remuneracion[".highlightSearchResults"] = true;

$tableKeystipo_remuneracion = array();
$tableKeystipo_remuneracion[] = "id_tipo_remuneracion";
$tdatatipo_remuneracion[".Keys"] = $tableKeystipo_remuneracion;


$tdatatipo_remuneracion[".hideMobileList"] = array();




//	id_tipo_remuneracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_tipo_remuneracion";
	$fdata["GoodName"] = "id_tipo_remuneracion";
	$fdata["ownerTable"] = "bolsa_empleo.tipo_remuneracion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipo_remuneracion","id_tipo_remuneracion");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_tipo_remuneracion";

		$fdata["sourceSingle"] = "id_tipo_remuneracion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_tipo_remuneracion";

	
	
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


	$tdatatipo_remuneracion["id_tipo_remuneracion"] = $fdata;
		$tdatatipo_remuneracion[".searchableFields"][] = "id_tipo_remuneracion";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.tipo_remuneracion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipo_remuneracion","descripcion");
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


	$tdatatipo_remuneracion["descripcion"] = $fdata;
		$tdatatipo_remuneracion[".searchableFields"][] = "descripcion";


$tables_data["bolsa_empleo.tipo_remuneracion"]=&$tdatatipo_remuneracion;
$field_labels["bolsa_empleo_tipo_remuneracion"] = &$fieldLabelstipo_remuneracion;
$fieldToolTips["bolsa_empleo_tipo_remuneracion"] = &$fieldToolTipstipo_remuneracion;
$placeHolders["bolsa_empleo_tipo_remuneracion"] = &$placeHolderstipo_remuneracion;
$page_titles["bolsa_empleo_tipo_remuneracion"] = &$pageTitlestipo_remuneracion;


changeTextControlsToDate( "bolsa_empleo.tipo_remuneracion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.tipo_remuneracion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.tipo_remuneracion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipo_remuneracion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_tipo_remuneracion,  	descripcion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.tipo_remuneracion";
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
	"m_strName" => "id_tipo_remuneracion",
	"m_strTable" => "bolsa_empleo.tipo_remuneracion",
	"m_srcTableName" => "bolsa_empleo.tipo_remuneracion"
));

$proto6["m_sql"] = "id_tipo_remuneracion";
$proto6["m_srcTableName"] = "bolsa_empleo.tipo_remuneracion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.tipo_remuneracion",
	"m_srcTableName" => "bolsa_empleo.tipo_remuneracion"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "bolsa_empleo.tipo_remuneracion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.tipo_remuneracion";
$proto11["m_srcTableName"] = "bolsa_empleo.tipo_remuneracion";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_tipo_remuneracion";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.tipo_remuneracion";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.tipo_remuneracion";
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
$proto0["m_srcTableName"]="bolsa_empleo.tipo_remuneracion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_remuneracion = createSqlQuery_tipo_remuneracion();


	
		;

		

$tdatatipo_remuneracion[".sqlquery"] = $queryData_tipo_remuneracion;



$tdatatipo_remuneracion[".hasEvents"] = false;

?>
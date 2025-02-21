<?php
$tdataempresas_sucursales_types = array();
$tdataempresas_sucursales_types[".searchableFields"] = array();
$tdataempresas_sucursales_types[".ShortName"] = "empresas_sucursales_types";
$tdataempresas_sucursales_types[".OwnerID"] = "";
$tdataempresas_sucursales_types[".OriginalTable"] = "eportal.empresas_sucursales_types";


$tdataempresas_sucursales_types[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataempresas_sucursales_types[".originalPagesByType"] = $tdataempresas_sucursales_types[".pagesByType"];
$tdataempresas_sucursales_types[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataempresas_sucursales_types[".originalPages"] = $tdataempresas_sucursales_types[".pages"];
$tdataempresas_sucursales_types[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataempresas_sucursales_types[".originalDefaultPages"] = $tdataempresas_sucursales_types[".defaultPages"];

//	field labels
$fieldLabelsempresas_sucursales_types = array();
$fieldToolTipsempresas_sucursales_types = array();
$pageTitlesempresas_sucursales_types = array();
$placeHoldersempresas_sucursales_types = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresas_sucursales_types["Spanish"] = array();
	$fieldToolTipsempresas_sucursales_types["Spanish"] = array();
	$placeHoldersempresas_sucursales_types["Spanish"] = array();
	$pageTitlesempresas_sucursales_types["Spanish"] = array();
	$fieldLabelsempresas_sucursales_types["Spanish"]["id"] = "Id";
	$fieldToolTipsempresas_sucursales_types["Spanish"]["id"] = "";
	$placeHoldersempresas_sucursales_types["Spanish"]["id"] = "";
	$fieldLabelsempresas_sucursales_types["Spanish"]["name"] = "Name";
	$fieldToolTipsempresas_sucursales_types["Spanish"]["name"] = "";
	$placeHoldersempresas_sucursales_types["Spanish"]["name"] = "";
	$fieldLabelsempresas_sucursales_types["Spanish"]["id1"] = "Id1";
	$fieldToolTipsempresas_sucursales_types["Spanish"]["id1"] = "";
	$placeHoldersempresas_sucursales_types["Spanish"]["id1"] = "";
	if (count($fieldToolTipsempresas_sucursales_types["Spanish"]))
		$tdataempresas_sucursales_types[".isUseToolTips"] = true;
}


	$tdataempresas_sucursales_types[".NCSearch"] = true;



$tdataempresas_sucursales_types[".shortTableName"] = "empresas_sucursales_types";
$tdataempresas_sucursales_types[".nSecOptions"] = 0;

$tdataempresas_sucursales_types[".mainTableOwnerID"] = "";
$tdataempresas_sucursales_types[".entityType"] = 1;
$tdataempresas_sucursales_types[".connId"] = "eportal_at_192_168_70_170";


$tdataempresas_sucursales_types[".strOriginalTableName"] = "eportal.empresas_sucursales_types";

	



$tdataempresas_sucursales_types[".showAddInPopup"] = false;

$tdataempresas_sucursales_types[".showEditInPopup"] = false;

$tdataempresas_sucursales_types[".showViewInPopup"] = false;

$tdataempresas_sucursales_types[".listAjax"] = false;
//	temporary
//$tdataempresas_sucursales_types[".listAjax"] = false;

	$tdataempresas_sucursales_types[".audit"] = true;

	$tdataempresas_sucursales_types[".locking"] = false;


$pages = $tdataempresas_sucursales_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataempresas_sucursales_types[".edit"] = true;
	$tdataempresas_sucursales_types[".afterEditAction"] = 1;
	$tdataempresas_sucursales_types[".closePopupAfterEdit"] = 1;
	$tdataempresas_sucursales_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataempresas_sucursales_types[".add"] = true;
$tdataempresas_sucursales_types[".afterAddAction"] = 1;
$tdataempresas_sucursales_types[".closePopupAfterAdd"] = 1;
$tdataempresas_sucursales_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataempresas_sucursales_types[".list"] = true;
}



$tdataempresas_sucursales_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataempresas_sucursales_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataempresas_sucursales_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataempresas_sucursales_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataempresas_sucursales_types[".printFriendly"] = true;
}



$tdataempresas_sucursales_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataempresas_sucursales_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataempresas_sucursales_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataempresas_sucursales_types[".isUseAjaxSuggest"] = true;



																																																						

$tdataempresas_sucursales_types[".ajaxCodeSnippetAdded"] = false;

$tdataempresas_sucursales_types[".buttonsAdded"] = false;

$tdataempresas_sucursales_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresas_sucursales_types[".isUseTimeForSearch"] = false;


$tdataempresas_sucursales_types[".badgeColor"] = "D2691E";


$tdataempresas_sucursales_types[".allSearchFields"] = array();
$tdataempresas_sucursales_types[".filterFields"] = array();
$tdataempresas_sucursales_types[".requiredSearchFields"] = array();

$tdataempresas_sucursales_types[".googleLikeFields"] = array();
$tdataempresas_sucursales_types[".googleLikeFields"][] = "id";
$tdataempresas_sucursales_types[".googleLikeFields"][] = "name";
$tdataempresas_sucursales_types[".googleLikeFields"][] = "id1";



$tdataempresas_sucursales_types[".tableType"] = "list";

$tdataempresas_sucursales_types[".printerPageOrientation"] = 0;
$tdataempresas_sucursales_types[".nPrinterPageScale"] = 100;

$tdataempresas_sucursales_types[".nPrinterSplitRecords"] = 40;

$tdataempresas_sucursales_types[".geocodingEnabled"] = false;










$tdataempresas_sucursales_types[".pageSize"] = 20;

$tdataempresas_sucursales_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataempresas_sucursales_types[".strOrderBy"] = $tstrOrderBy;

$tdataempresas_sucursales_types[".orderindexes"] = array();


$tdataempresas_sucursales_types[".sqlHead"] = "SELECT eportal.empresas_sucursales_types.id,  eportal.empresas_sucursales_types.name,  bolsa_empleo.empresas_bolsa_sucursales.id AS id1";
$tdataempresas_sucursales_types[".sqlFrom"] = "FROM eportal.empresas_sucursales_types  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON eportal.empresas_sucursales_types.id = bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal";
$tdataempresas_sucursales_types[".sqlWhereExpr"] = "";
$tdataempresas_sucursales_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresas_sucursales_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresas_sucursales_types[".arrGroupsPerPage"] = $arrGPP;

$tdataempresas_sucursales_types[".highlightSearchResults"] = true;

$tableKeysempresas_sucursales_types = array();
$tableKeysempresas_sucursales_types[] = "id";
$tdataempresas_sucursales_types[".Keys"] = $tableKeysempresas_sucursales_types;


$tdataempresas_sucursales_types[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "eportal.empresas_sucursales_types";
	$fdata["Label"] = GetFieldLabel("eportal_empresas_sucursales_types","id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.empresas_sucursales_types.id";

	
	
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


	$tdataempresas_sucursales_types["id"] = $fdata;
		$tdataempresas_sucursales_types[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "eportal.empresas_sucursales_types";
	$fdata["Label"] = GetFieldLabel("eportal_empresas_sucursales_types","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.empresas_sucursales_types.name";

	
	
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


	$tdataempresas_sucursales_types["name"] = $fdata;
		$tdataempresas_sucursales_types[".searchableFields"][] = "name";
//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("eportal_empresas_sucursales_types","id1");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa_sucursales.id";

	
	
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


	$tdataempresas_sucursales_types["id1"] = $fdata;
		$tdataempresas_sucursales_types[".searchableFields"][] = "id1";


$tables_data["eportal.empresas_sucursales_types"]=&$tdataempresas_sucursales_types;
$field_labels["eportal_empresas_sucursales_types"] = &$fieldLabelsempresas_sucursales_types;
$fieldToolTips["eportal_empresas_sucursales_types"] = &$fieldToolTipsempresas_sucursales_types;
$placeHolders["eportal_empresas_sucursales_types"] = &$placeHoldersempresas_sucursales_types;
$page_titles["eportal_empresas_sucursales_types"] = &$pageTitlesempresas_sucursales_types;


changeTextControlsToDate( "eportal.empresas_sucursales_types" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["eportal.empresas_sucursales_types"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["eportal.empresas_sucursales_types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_empresas_sucursales_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eportal.empresas_sucursales_types.id,  eportal.empresas_sucursales_types.name,  bolsa_empleo.empresas_bolsa_sucursales.id AS id1";
$proto0["m_strFrom"] = "FROM eportal.empresas_sucursales_types  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON eportal.empresas_sucursales_types.id = bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal";
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
	"m_strName" => "id",
	"m_strTable" => "eportal.empresas_sucursales_types",
	"m_srcTableName" => "eportal.empresas_sucursales_types"
));

$proto6["m_sql"] = "eportal.empresas_sucursales_types.id";
$proto6["m_srcTableName"] = "eportal.empresas_sucursales_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.empresas_sucursales_types",
	"m_srcTableName" => "eportal.empresas_sucursales_types"
));

$proto8["m_sql"] = "eportal.empresas_sucursales_types.name";
$proto8["m_srcTableName"] = "eportal.empresas_sucursales_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "eportal.empresas_sucursales_types"
));

$proto10["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id";
$proto10["m_srcTableName"] = "eportal.empresas_sucursales_types";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "id1";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "eportal.empresas_sucursales_types";
$proto13["m_srcTableName"] = "eportal.empresas_sucursales_types";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "name";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "eportal.empresas_sucursales_types";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "eportal.empresas_sucursales_types";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
												$proto16=array();
$proto16["m_link"] = "SQLL_INNERJOIN";
			$proto17=array();
$proto17["m_strName"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto17["m_srcTableName"] = "eportal.empresas_sucursales_types";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "empresas_bolsa_id";
$proto17["m_columns"][] = "ruc";
$proto17["m_columns"][] = "legal";
$proto17["m_columns"][] = "fantasy";
$proto17["m_columns"][] = "city_id";
$proto17["m_columns"][] = "distrito_id";
$proto17["m_columns"][] = "tel";
$proto17["m_columns"][] = "email";
$proto17["m_columns"][] = "id_tipo_sucursal";
$proto17["m_columns"][] = "nro_patronal";
$proto17["m_columns"][] = "direccion";
$proto17["m_columns"][] = "fecha_creacion";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON eportal.empresas_sucursales_types.id = bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "eportal.empresas_sucursales_types";
$proto18=array();
$proto18["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal = eportal.empresas_sucursales_types.id";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_tipo_sucursal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "eportal.empresas_sucursales_types"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= eportal.empresas_sucursales_types.id";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="eportal.empresas_sucursales_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresas_sucursales_types = createSqlQuery_empresas_sucursales_types();


	
		;

			

$tdataempresas_sucursales_types[".sqlquery"] = $queryData_empresas_sucursales_types;



$tdataempresas_sucursales_types[".hasEvents"] = false;

?>
<?php
$tdataempresas_sucursales_types1 = array();
$tdataempresas_sucursales_types1[".searchableFields"] = array();
$tdataempresas_sucursales_types1[".ShortName"] = "empresas_sucursales_types1";
$tdataempresas_sucursales_types1[".OwnerID"] = "";
$tdataempresas_sucursales_types1[".OriginalTable"] = "eportal.empresas_sucursales_types";


$tdataempresas_sucursales_types1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataempresas_sucursales_types1[".originalPagesByType"] = $tdataempresas_sucursales_types1[".pagesByType"];
$tdataempresas_sucursales_types1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataempresas_sucursales_types1[".originalPages"] = $tdataempresas_sucursales_types1[".pages"];
$tdataempresas_sucursales_types1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataempresas_sucursales_types1[".originalDefaultPages"] = $tdataempresas_sucursales_types1[".defaultPages"];

//	field labels
$fieldLabelsempresas_sucursales_types1 = array();
$fieldToolTipsempresas_sucursales_types1 = array();
$pageTitlesempresas_sucursales_types1 = array();
$placeHoldersempresas_sucursales_types1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresas_sucursales_types1["Spanish"] = array();
	$fieldToolTipsempresas_sucursales_types1["Spanish"] = array();
	$placeHoldersempresas_sucursales_types1["Spanish"] = array();
	$pageTitlesempresas_sucursales_types1["Spanish"] = array();
	$fieldLabelsempresas_sucursales_types1["Spanish"]["id"] = "Id";
	$fieldToolTipsempresas_sucursales_types1["Spanish"]["id"] = "";
	$placeHoldersempresas_sucursales_types1["Spanish"]["id"] = "";
	$fieldLabelsempresas_sucursales_types1["Spanish"]["name"] = "Name";
	$fieldToolTipsempresas_sucursales_types1["Spanish"]["name"] = "";
	$placeHoldersempresas_sucursales_types1["Spanish"]["name"] = "";
	$fieldLabelsempresas_sucursales_types1["Spanish"]["id1"] = "Id1";
	$fieldToolTipsempresas_sucursales_types1["Spanish"]["id1"] = "";
	$placeHoldersempresas_sucursales_types1["Spanish"]["id1"] = "";
	$fieldLabelsempresas_sucursales_types1["Spanish"]["nro_patronal"] = "Nro Patronal";
	$fieldToolTipsempresas_sucursales_types1["Spanish"]["nro_patronal"] = "";
	$placeHoldersempresas_sucursales_types1["Spanish"]["nro_patronal"] = "";
	if (count($fieldToolTipsempresas_sucursales_types1["Spanish"]))
		$tdataempresas_sucursales_types1[".isUseToolTips"] = true;
}


	$tdataempresas_sucursales_types1[".NCSearch"] = true;



$tdataempresas_sucursales_types1[".shortTableName"] = "empresas_sucursales_types1";
$tdataempresas_sucursales_types1[".nSecOptions"] = 0;

$tdataempresas_sucursales_types1[".mainTableOwnerID"] = "";
$tdataempresas_sucursales_types1[".entityType"] = 1;
$tdataempresas_sucursales_types1[".connId"] = "eportal_at_192_168_70_170";


$tdataempresas_sucursales_types1[".strOriginalTableName"] = "eportal.empresas_sucursales_types";

	



$tdataempresas_sucursales_types1[".showAddInPopup"] = false;

$tdataempresas_sucursales_types1[".showEditInPopup"] = false;

$tdataempresas_sucursales_types1[".showViewInPopup"] = false;

$tdataempresas_sucursales_types1[".listAjax"] = false;
//	temporary
//$tdataempresas_sucursales_types1[".listAjax"] = false;

	$tdataempresas_sucursales_types1[".audit"] = true;

	$tdataempresas_sucursales_types1[".locking"] = false;


$pages = $tdataempresas_sucursales_types1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataempresas_sucursales_types1[".edit"] = true;
	$tdataempresas_sucursales_types1[".afterEditAction"] = 1;
	$tdataempresas_sucursales_types1[".closePopupAfterEdit"] = 1;
	$tdataempresas_sucursales_types1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataempresas_sucursales_types1[".add"] = true;
$tdataempresas_sucursales_types1[".afterAddAction"] = 1;
$tdataempresas_sucursales_types1[".closePopupAfterAdd"] = 1;
$tdataempresas_sucursales_types1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataempresas_sucursales_types1[".list"] = true;
}



$tdataempresas_sucursales_types1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataempresas_sucursales_types1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataempresas_sucursales_types1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataempresas_sucursales_types1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataempresas_sucursales_types1[".printFriendly"] = true;
}



$tdataempresas_sucursales_types1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataempresas_sucursales_types1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataempresas_sucursales_types1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataempresas_sucursales_types1[".isUseAjaxSuggest"] = true;



																																																																																							

$tdataempresas_sucursales_types1[".ajaxCodeSnippetAdded"] = false;

$tdataempresas_sucursales_types1[".buttonsAdded"] = false;

$tdataempresas_sucursales_types1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresas_sucursales_types1[".isUseTimeForSearch"] = false;


$tdataempresas_sucursales_types1[".badgeColor"] = "6493EA";


$tdataempresas_sucursales_types1[".allSearchFields"] = array();
$tdataempresas_sucursales_types1[".filterFields"] = array();
$tdataempresas_sucursales_types1[".requiredSearchFields"] = array();

$tdataempresas_sucursales_types1[".googleLikeFields"] = array();
$tdataempresas_sucursales_types1[".googleLikeFields"][] = "id";
$tdataempresas_sucursales_types1[".googleLikeFields"][] = "name";
$tdataempresas_sucursales_types1[".googleLikeFields"][] = "id1";
$tdataempresas_sucursales_types1[".googleLikeFields"][] = "nro_patronal";



$tdataempresas_sucursales_types1[".tableType"] = "list";

$tdataempresas_sucursales_types1[".printerPageOrientation"] = 0;
$tdataempresas_sucursales_types1[".nPrinterPageScale"] = 100;

$tdataempresas_sucursales_types1[".nPrinterSplitRecords"] = 40;

$tdataempresas_sucursales_types1[".geocodingEnabled"] = false;










$tdataempresas_sucursales_types1[".pageSize"] = 20;

$tdataempresas_sucursales_types1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataempresas_sucursales_types1[".strOrderBy"] = $tstrOrderBy;

$tdataempresas_sucursales_types1[".orderindexes"] = array();


$tdataempresas_sucursales_types1[".sqlHead"] = "SELECT eportal.empresas_sucursales_types.id,  eportal.empresas_sucursales_types.name,  bolsa_empleo.empresas_bolsa_sucursales.id AS id1,  bolsa_empleo.empresas_bolsa_sucursales.nro_patronal";
$tdataempresas_sucursales_types1[".sqlFrom"] = "FROM eportal.empresas_sucursales_types  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON eportal.empresas_sucursales_types.id = bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal";
$tdataempresas_sucursales_types1[".sqlWhereExpr"] = "";
$tdataempresas_sucursales_types1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresas_sucursales_types1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresas_sucursales_types1[".arrGroupsPerPage"] = $arrGPP;

$tdataempresas_sucursales_types1[".highlightSearchResults"] = true;

$tableKeysempresas_sucursales_types1 = array();
$tableKeysempresas_sucursales_types1[] = "id";
$tdataempresas_sucursales_types1[".Keys"] = $tableKeysempresas_sucursales_types1;


$tdataempresas_sucursales_types1[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "eportal.empresas_sucursales_types";
	$fdata["Label"] = GetFieldLabel("eportal_empresas_sucursales_types1","id");
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


	$tdataempresas_sucursales_types1["id"] = $fdata;
		$tdataempresas_sucursales_types1[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "eportal.empresas_sucursales_types";
	$fdata["Label"] = GetFieldLabel("eportal_empresas_sucursales_types1","name");
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


	$tdataempresas_sucursales_types1["name"] = $fdata;
		$tdataempresas_sucursales_types1[".searchableFields"][] = "name";
//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("eportal_empresas_sucursales_types1","id1");
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


	$tdataempresas_sucursales_types1["id1"] = $fdata;
		$tdataempresas_sucursales_types1[".searchableFields"][] = "id1";
//	nro_patronal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nro_patronal";
	$fdata["GoodName"] = "nro_patronal";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("eportal_empresas_sucursales_types1","nro_patronal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nro_patronal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa_sucursales.nro_patronal";

	
	
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


	$tdataempresas_sucursales_types1["nro_patronal"] = $fdata;
		$tdataempresas_sucursales_types1[".searchableFields"][] = "nro_patronal";


$tables_data["eportal.empresas_sucursales_types1"]=&$tdataempresas_sucursales_types1;
$field_labels["eportal_empresas_sucursales_types1"] = &$fieldLabelsempresas_sucursales_types1;
$fieldToolTips["eportal_empresas_sucursales_types1"] = &$fieldToolTipsempresas_sucursales_types1;
$placeHolders["eportal_empresas_sucursales_types1"] = &$placeHoldersempresas_sucursales_types1;
$page_titles["eportal_empresas_sucursales_types1"] = &$pageTitlesempresas_sucursales_types1;


changeTextControlsToDate( "eportal.empresas_sucursales_types1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["eportal.empresas_sucursales_types1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["eportal.empresas_sucursales_types1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_empresas_sucursales_types1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eportal.empresas_sucursales_types.id,  eportal.empresas_sucursales_types.name,  bolsa_empleo.empresas_bolsa_sucursales.id AS id1,  bolsa_empleo.empresas_bolsa_sucursales.nro_patronal";
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
	"m_srcTableName" => "eportal.empresas_sucursales_types1"
));

$proto6["m_sql"] = "eportal.empresas_sucursales_types.id";
$proto6["m_srcTableName"] = "eportal.empresas_sucursales_types1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.empresas_sucursales_types",
	"m_srcTableName" => "eportal.empresas_sucursales_types1"
));

$proto8["m_sql"] = "eportal.empresas_sucursales_types.name";
$proto8["m_srcTableName"] = "eportal.empresas_sucursales_types1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "eportal.empresas_sucursales_types1"
));

$proto10["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id";
$proto10["m_srcTableName"] = "eportal.empresas_sucursales_types1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "id1";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nro_patronal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "eportal.empresas_sucursales_types1"
));

$proto12["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.nro_patronal";
$proto12["m_srcTableName"] = "eportal.empresas_sucursales_types1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "eportal.empresas_sucursales_types";
$proto15["m_srcTableName"] = "eportal.empresas_sucursales_types1";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "name";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "eportal.empresas_sucursales_types";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "eportal.empresas_sucursales_types1";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
												$proto18=array();
$proto18["m_link"] = "SQLL_INNERJOIN";
			$proto19=array();
$proto19["m_strName"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto19["m_srcTableName"] = "eportal.empresas_sucursales_types1";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "empresas_bolsa_id";
$proto19["m_columns"][] = "ruc";
$proto19["m_columns"][] = "legal";
$proto19["m_columns"][] = "fantasy";
$proto19["m_columns"][] = "city_id";
$proto19["m_columns"][] = "distrito_id";
$proto19["m_columns"][] = "tel";
$proto19["m_columns"][] = "email";
$proto19["m_columns"][] = "id_tipo_sucursal";
$proto19["m_columns"][] = "nro_patronal";
$proto19["m_columns"][] = "direccion";
$proto19["m_columns"][] = "fecha_creacion";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON eportal.empresas_sucursales_types.id = bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "eportal.empresas_sucursales_types1";
$proto20=array();
$proto20["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal = eportal.empresas_sucursales_types.id";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_tipo_sucursal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "eportal.empresas_sucursales_types1"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= eportal.empresas_sucursales_types.id";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="eportal.empresas_sucursales_types1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresas_sucursales_types1 = createSqlQuery_empresas_sucursales_types1();


	
		;

				

$tdataempresas_sucursales_types1[".sqlquery"] = $queryData_empresas_sucursales_types1;



$tdataempresas_sucursales_types1[".hasEvents"] = false;

?>
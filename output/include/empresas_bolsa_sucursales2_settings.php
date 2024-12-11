<?php
$tdataempresas_bolsa_sucursales2 = array();
$tdataempresas_bolsa_sucursales2[".searchableFields"] = array();
$tdataempresas_bolsa_sucursales2[".ShortName"] = "empresas_bolsa_sucursales2";
$tdataempresas_bolsa_sucursales2[".OwnerID"] = "";
$tdataempresas_bolsa_sucursales2[".OriginalTable"] = "bolsa_empleo.empresas_bolsa_sucursales";


$tdataempresas_bolsa_sucursales2[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataempresas_bolsa_sucursales2[".originalPagesByType"] = $tdataempresas_bolsa_sucursales2[".pagesByType"];
$tdataempresas_bolsa_sucursales2[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataempresas_bolsa_sucursales2[".originalPages"] = $tdataempresas_bolsa_sucursales2[".pages"];
$tdataempresas_bolsa_sucursales2[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataempresas_bolsa_sucursales2[".originalDefaultPages"] = $tdataempresas_bolsa_sucursales2[".defaultPages"];

//	field labels
$fieldLabelsempresas_bolsa_sucursales2 = array();
$fieldToolTipsempresas_bolsa_sucursales2 = array();
$pageTitlesempresas_bolsa_sucursales2 = array();
$placeHoldersempresas_bolsa_sucursales2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresas_bolsa_sucursales2["Spanish"] = array();
	$fieldToolTipsempresas_bolsa_sucursales2["Spanish"] = array();
	$placeHoldersempresas_bolsa_sucursales2["Spanish"] = array();
	$pageTitlesempresas_bolsa_sucursales2["Spanish"] = array();
	$fieldLabelsempresas_bolsa_sucursales2["Spanish"]["id"] = "Id";
	$fieldToolTipsempresas_bolsa_sucursales2["Spanish"]["id"] = "";
	$placeHoldersempresas_bolsa_sucursales2["Spanish"]["id"] = "";
	$fieldLabelsempresas_bolsa_sucursales2["Spanish"]["nro_patronal"] = "Nro Patronal";
	$fieldToolTipsempresas_bolsa_sucursales2["Spanish"]["nro_patronal"] = "";
	$placeHoldersempresas_bolsa_sucursales2["Spanish"]["nro_patronal"] = "";
	$fieldLabelsempresas_bolsa_sucursales2["Spanish"]["name"] = "Name";
	$fieldToolTipsempresas_bolsa_sucursales2["Spanish"]["name"] = "";
	$placeHoldersempresas_bolsa_sucursales2["Spanish"]["name"] = "";
	if (count($fieldToolTipsempresas_bolsa_sucursales2["Spanish"]))
		$tdataempresas_bolsa_sucursales2[".isUseToolTips"] = true;
}


	$tdataempresas_bolsa_sucursales2[".NCSearch"] = true;



$tdataempresas_bolsa_sucursales2[".shortTableName"] = "empresas_bolsa_sucursales2";
$tdataempresas_bolsa_sucursales2[".nSecOptions"] = 0;

$tdataempresas_bolsa_sucursales2[".mainTableOwnerID"] = "";
$tdataempresas_bolsa_sucursales2[".entityType"] = 1;
$tdataempresas_bolsa_sucursales2[".connId"] = "eportal_at_192_168_70_170";


$tdataempresas_bolsa_sucursales2[".strOriginalTableName"] = "bolsa_empleo.empresas_bolsa_sucursales";

	



$tdataempresas_bolsa_sucursales2[".showAddInPopup"] = false;

$tdataempresas_bolsa_sucursales2[".showEditInPopup"] = false;

$tdataempresas_bolsa_sucursales2[".showViewInPopup"] = false;

$tdataempresas_bolsa_sucursales2[".listAjax"] = false;
//	temporary
//$tdataempresas_bolsa_sucursales2[".listAjax"] = false;

	$tdataempresas_bolsa_sucursales2[".audit"] = true;

	$tdataempresas_bolsa_sucursales2[".locking"] = false;


$pages = $tdataempresas_bolsa_sucursales2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataempresas_bolsa_sucursales2[".edit"] = true;
	$tdataempresas_bolsa_sucursales2[".afterEditAction"] = 1;
	$tdataempresas_bolsa_sucursales2[".closePopupAfterEdit"] = 1;
	$tdataempresas_bolsa_sucursales2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataempresas_bolsa_sucursales2[".add"] = true;
$tdataempresas_bolsa_sucursales2[".afterAddAction"] = 1;
$tdataempresas_bolsa_sucursales2[".closePopupAfterAdd"] = 1;
$tdataempresas_bolsa_sucursales2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataempresas_bolsa_sucursales2[".list"] = true;
}



$tdataempresas_bolsa_sucursales2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataempresas_bolsa_sucursales2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataempresas_bolsa_sucursales2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataempresas_bolsa_sucursales2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataempresas_bolsa_sucursales2[".printFriendly"] = true;
}



$tdataempresas_bolsa_sucursales2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataempresas_bolsa_sucursales2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataempresas_bolsa_sucursales2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataempresas_bolsa_sucursales2[".isUseAjaxSuggest"] = true;



																																																			

$tdataempresas_bolsa_sucursales2[".ajaxCodeSnippetAdded"] = false;

$tdataempresas_bolsa_sucursales2[".buttonsAdded"] = false;

$tdataempresas_bolsa_sucursales2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresas_bolsa_sucursales2[".isUseTimeForSearch"] = false;


$tdataempresas_bolsa_sucursales2[".badgeColor"] = "E8926F";


$tdataempresas_bolsa_sucursales2[".allSearchFields"] = array();
$tdataempresas_bolsa_sucursales2[".filterFields"] = array();
$tdataempresas_bolsa_sucursales2[".requiredSearchFields"] = array();

$tdataempresas_bolsa_sucursales2[".googleLikeFields"] = array();
$tdataempresas_bolsa_sucursales2[".googleLikeFields"][] = "id";
$tdataempresas_bolsa_sucursales2[".googleLikeFields"][] = "nro_patronal";
$tdataempresas_bolsa_sucursales2[".googleLikeFields"][] = "name";



$tdataempresas_bolsa_sucursales2[".tableType"] = "list";

$tdataempresas_bolsa_sucursales2[".printerPageOrientation"] = 0;
$tdataempresas_bolsa_sucursales2[".nPrinterPageScale"] = 100;

$tdataempresas_bolsa_sucursales2[".nPrinterSplitRecords"] = 40;

$tdataempresas_bolsa_sucursales2[".geocodingEnabled"] = false;










$tdataempresas_bolsa_sucursales2[".pageSize"] = 20;

$tdataempresas_bolsa_sucursales2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataempresas_bolsa_sucursales2[".strOrderBy"] = $tstrOrderBy;

$tdataempresas_bolsa_sucursales2[".orderindexes"] = array();


$tdataempresas_bolsa_sucursales2[".sqlHead"] = "SELECT bolsa_empleo.empresas_bolsa_sucursales.id,  bolsa_empleo.empresas_bolsa_sucursales.nro_patronal,  eportal.empresas_sucursales_types.name";
$tdataempresas_bolsa_sucursales2[".sqlFrom"] = "FROM bolsa_empleo.empresas_bolsa_sucursales  INNER JOIN eportal.empresas_sucursales_types ON bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal = eportal.empresas_sucursales_types.id";
$tdataempresas_bolsa_sucursales2[".sqlWhereExpr"] = "";
$tdataempresas_bolsa_sucursales2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresas_bolsa_sucursales2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresas_bolsa_sucursales2[".arrGroupsPerPage"] = $arrGPP;

$tdataempresas_bolsa_sucursales2[".highlightSearchResults"] = true;

$tableKeysempresas_bolsa_sucursales2 = array();
$tableKeysempresas_bolsa_sucursales2[] = "id";
$tdataempresas_bolsa_sucursales2[".Keys"] = $tableKeysempresas_bolsa_sucursales2;


$tdataempresas_bolsa_sucursales2[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa_sucursales2","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
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


	$tdataempresas_bolsa_sucursales2["id"] = $fdata;
		$tdataempresas_bolsa_sucursales2[".searchableFields"][] = "id";
//	nro_patronal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nro_patronal";
	$fdata["GoodName"] = "nro_patronal";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa_sucursales2","nro_patronal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nro_patronal";

		$fdata["sourceSingle"] = "nro_patronal";

	
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


	$tdataempresas_bolsa_sucursales2["nro_patronal"] = $fdata;
		$tdataempresas_bolsa_sucursales2[".searchableFields"][] = "nro_patronal";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "eportal.empresas_sucursales_types";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa_sucursales2","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

	
	
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


	$tdataempresas_bolsa_sucursales2["name"] = $fdata;
		$tdataempresas_bolsa_sucursales2[".searchableFields"][] = "name";


$tables_data["bolsa_empleo.empresas_bolsa_sucursales2"]=&$tdataempresas_bolsa_sucursales2;
$field_labels["bolsa_empleo_empresas_bolsa_sucursales2"] = &$fieldLabelsempresas_bolsa_sucursales2;
$fieldToolTips["bolsa_empleo_empresas_bolsa_sucursales2"] = &$fieldToolTipsempresas_bolsa_sucursales2;
$placeHolders["bolsa_empleo_empresas_bolsa_sucursales2"] = &$placeHoldersempresas_bolsa_sucursales2;
$page_titles["bolsa_empleo_empresas_bolsa_sucursales2"] = &$pageTitlesempresas_bolsa_sucursales2;


changeTextControlsToDate( "bolsa_empleo.empresas_bolsa_sucursales2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.empresas_bolsa_sucursales2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.empresas_bolsa_sucursales2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_empresas_bolsa_sucursales2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bolsa_empleo.empresas_bolsa_sucursales.id,  bolsa_empleo.empresas_bolsa_sucursales.nro_patronal,  eportal.empresas_sucursales_types.name";
$proto0["m_strFrom"] = "FROM bolsa_empleo.empresas_bolsa_sucursales  INNER JOIN eportal.empresas_sucursales_types ON bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal = eportal.empresas_sucursales_types.id";
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
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa_sucursales2"
));

$proto6["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id";
$proto6["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nro_patronal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa_sucursales2"
));

$proto8["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.nro_patronal";
$proto8["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.empresas_sucursales_types",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa_sucursales2"
));

$proto10["m_sql"] = "eportal.empresas_sucursales_types.name";
$proto10["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto13["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales2";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "empresas_bolsa_id";
$proto13["m_columns"][] = "ruc";
$proto13["m_columns"][] = "legal";
$proto13["m_columns"][] = "fantasy";
$proto13["m_columns"][] = "city_id";
$proto13["m_columns"][] = "distrito_id";
$proto13["m_columns"][] = "tel";
$proto13["m_columns"][] = "email";
$proto13["m_columns"][] = "id_tipo_sucursal";
$proto13["m_columns"][] = "nro_patronal";
$proto13["m_columns"][] = "direccion";
$proto13["m_columns"][] = "fecha_creacion";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales2";
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
$proto17["m_strName"] = "eportal.empresas_sucursales_types";
$proto17["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales2";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "name";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "INNER JOIN eportal.empresas_sucursales_types ON bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal = eportal.empresas_sucursales_types.id";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales2";
$proto18=array();
$proto18["m_sql"] = "eportal.empresas_sucursales_types.id = bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.empresas_sucursales_types",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa_sucursales2"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.empresas_bolsa_sucursales2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresas_bolsa_sucursales2 = createSqlQuery_empresas_bolsa_sucursales2();


	
		;

			

$tdataempresas_bolsa_sucursales2[".sqlquery"] = $queryData_empresas_bolsa_sucursales2;



$tdataempresas_bolsa_sucursales2[".hasEvents"] = false;

?>
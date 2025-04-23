<?php
$tdataempresas_bolsa_sucursales3 = array();
$tdataempresas_bolsa_sucursales3[".searchableFields"] = array();
$tdataempresas_bolsa_sucursales3[".ShortName"] = "empresas_bolsa_sucursales3";
$tdataempresas_bolsa_sucursales3[".OwnerID"] = "";
$tdataempresas_bolsa_sucursales3[".OriginalTable"] = "bolsa_empleo.empresas_bolsa_sucursales";


$tdataempresas_bolsa_sucursales3[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataempresas_bolsa_sucursales3[".originalPagesByType"] = $tdataempresas_bolsa_sucursales3[".pagesByType"];
$tdataempresas_bolsa_sucursales3[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataempresas_bolsa_sucursales3[".originalPages"] = $tdataempresas_bolsa_sucursales3[".pages"];
$tdataempresas_bolsa_sucursales3[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataempresas_bolsa_sucursales3[".originalDefaultPages"] = $tdataempresas_bolsa_sucursales3[".defaultPages"];

//	field labels
$fieldLabelsempresas_bolsa_sucursales3 = array();
$fieldToolTipsempresas_bolsa_sucursales3 = array();
$pageTitlesempresas_bolsa_sucursales3 = array();
$placeHoldersempresas_bolsa_sucursales3 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresas_bolsa_sucursales3["Spanish"] = array();
	$fieldToolTipsempresas_bolsa_sucursales3["Spanish"] = array();
	$placeHoldersempresas_bolsa_sucursales3["Spanish"] = array();
	$pageTitlesempresas_bolsa_sucursales3["Spanish"] = array();
	$fieldLabelsempresas_bolsa_sucursales3["Spanish"]["id"] = "Id";
	$fieldToolTipsempresas_bolsa_sucursales3["Spanish"]["id"] = "";
	$placeHoldersempresas_bolsa_sucursales3["Spanish"]["id"] = "";
	$fieldLabelsempresas_bolsa_sucursales3["Spanish"]["nro_patronal"] = "Nro Patronal";
	$fieldToolTipsempresas_bolsa_sucursales3["Spanish"]["nro_patronal"] = "";
	$placeHoldersempresas_bolsa_sucursales3["Spanish"]["nro_patronal"] = "";
	$fieldLabelsempresas_bolsa_sucursales3["Spanish"]["name"] = "Name";
	$fieldToolTipsempresas_bolsa_sucursales3["Spanish"]["name"] = "";
	$placeHoldersempresas_bolsa_sucursales3["Spanish"]["name"] = "";
	$fieldLabelsempresas_bolsa_sucursales3["Spanish"]["id_tipo_sucursal"] = "Id Tipo Sucursal";
	$fieldToolTipsempresas_bolsa_sucursales3["Spanish"]["id_tipo_sucursal"] = "";
	$placeHoldersempresas_bolsa_sucursales3["Spanish"]["id_tipo_sucursal"] = "";
	if (count($fieldToolTipsempresas_bolsa_sucursales3["Spanish"]))
		$tdataempresas_bolsa_sucursales3[".isUseToolTips"] = true;
}


	$tdataempresas_bolsa_sucursales3[".NCSearch"] = true;



$tdataempresas_bolsa_sucursales3[".shortTableName"] = "empresas_bolsa_sucursales3";
$tdataempresas_bolsa_sucursales3[".nSecOptions"] = 0;

$tdataempresas_bolsa_sucursales3[".mainTableOwnerID"] = "";
$tdataempresas_bolsa_sucursales3[".entityType"] = 1;
$tdataempresas_bolsa_sucursales3[".connId"] = "eportal_at_192_168_70_170";


$tdataempresas_bolsa_sucursales3[".strOriginalTableName"] = "bolsa_empleo.empresas_bolsa_sucursales";

	



$tdataempresas_bolsa_sucursales3[".showAddInPopup"] = false;

$tdataempresas_bolsa_sucursales3[".showEditInPopup"] = false;

$tdataempresas_bolsa_sucursales3[".showViewInPopup"] = false;

$tdataempresas_bolsa_sucursales3[".listAjax"] = false;
//	temporary
//$tdataempresas_bolsa_sucursales3[".listAjax"] = false;

	$tdataempresas_bolsa_sucursales3[".audit"] = true;

	$tdataempresas_bolsa_sucursales3[".locking"] = false;


$pages = $tdataempresas_bolsa_sucursales3[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataempresas_bolsa_sucursales3[".edit"] = true;
	$tdataempresas_bolsa_sucursales3[".afterEditAction"] = 1;
	$tdataempresas_bolsa_sucursales3[".closePopupAfterEdit"] = 1;
	$tdataempresas_bolsa_sucursales3[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataempresas_bolsa_sucursales3[".add"] = true;
$tdataempresas_bolsa_sucursales3[".afterAddAction"] = 1;
$tdataempresas_bolsa_sucursales3[".closePopupAfterAdd"] = 1;
$tdataempresas_bolsa_sucursales3[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataempresas_bolsa_sucursales3[".list"] = true;
}



$tdataempresas_bolsa_sucursales3[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataempresas_bolsa_sucursales3[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataempresas_bolsa_sucursales3[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataempresas_bolsa_sucursales3[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataempresas_bolsa_sucursales3[".printFriendly"] = true;
}



$tdataempresas_bolsa_sucursales3[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataempresas_bolsa_sucursales3[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataempresas_bolsa_sucursales3[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataempresas_bolsa_sucursales3[".isUseAjaxSuggest"] = true;



																																																																																							

$tdataempresas_bolsa_sucursales3[".ajaxCodeSnippetAdded"] = false;

$tdataempresas_bolsa_sucursales3[".buttonsAdded"] = false;

$tdataempresas_bolsa_sucursales3[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresas_bolsa_sucursales3[".isUseTimeForSearch"] = false;


$tdataempresas_bolsa_sucursales3[".badgeColor"] = "D2AF80";


$tdataempresas_bolsa_sucursales3[".allSearchFields"] = array();
$tdataempresas_bolsa_sucursales3[".filterFields"] = array();
$tdataempresas_bolsa_sucursales3[".requiredSearchFields"] = array();

$tdataempresas_bolsa_sucursales3[".googleLikeFields"] = array();
$tdataempresas_bolsa_sucursales3[".googleLikeFields"][] = "id";
$tdataempresas_bolsa_sucursales3[".googleLikeFields"][] = "nro_patronal";
$tdataempresas_bolsa_sucursales3[".googleLikeFields"][] = "name";
$tdataempresas_bolsa_sucursales3[".googleLikeFields"][] = "id_tipo_sucursal";



$tdataempresas_bolsa_sucursales3[".tableType"] = "list";

$tdataempresas_bolsa_sucursales3[".printerPageOrientation"] = 0;
$tdataempresas_bolsa_sucursales3[".nPrinterPageScale"] = 100;

$tdataempresas_bolsa_sucursales3[".nPrinterSplitRecords"] = 40;

$tdataempresas_bolsa_sucursales3[".geocodingEnabled"] = false;










$tdataempresas_bolsa_sucursales3[".pageSize"] = 20;

$tdataempresas_bolsa_sucursales3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataempresas_bolsa_sucursales3[".strOrderBy"] = $tstrOrderBy;

$tdataempresas_bolsa_sucursales3[".orderindexes"] = array();


$tdataempresas_bolsa_sucursales3[".sqlHead"] = "SELECT bolsa_empleo.empresas_bolsa_sucursales.id,  bolsa_empleo.empresas_bolsa_sucursales.nro_patronal,  eportal.empresas_sucursales_types.name,  bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal";
$tdataempresas_bolsa_sucursales3[".sqlFrom"] = "FROM bolsa_empleo.empresas_bolsa_sucursales  INNER JOIN eportal.empresas_sucursales_types ON bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal = eportal.empresas_sucursales_types.id";
$tdataempresas_bolsa_sucursales3[".sqlWhereExpr"] = "";
$tdataempresas_bolsa_sucursales3[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresas_bolsa_sucursales3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresas_bolsa_sucursales3[".arrGroupsPerPage"] = $arrGPP;

$tdataempresas_bolsa_sucursales3[".highlightSearchResults"] = true;

$tableKeysempresas_bolsa_sucursales3 = array();
$tableKeysempresas_bolsa_sucursales3[] = "id";
$tdataempresas_bolsa_sucursales3[".Keys"] = $tableKeysempresas_bolsa_sucursales3;


$tdataempresas_bolsa_sucursales3[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa_sucursales3","id");
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


	$tdataempresas_bolsa_sucursales3["id"] = $fdata;
		$tdataempresas_bolsa_sucursales3[".searchableFields"][] = "id";
//	nro_patronal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nro_patronal";
	$fdata["GoodName"] = "nro_patronal";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa_sucursales3","nro_patronal");
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


	$tdataempresas_bolsa_sucursales3["nro_patronal"] = $fdata;
		$tdataempresas_bolsa_sucursales3[".searchableFields"][] = "nro_patronal";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "eportal.empresas_sucursales_types";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa_sucursales3","name");
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


	$tdataempresas_bolsa_sucursales3["name"] = $fdata;
		$tdataempresas_bolsa_sucursales3[".searchableFields"][] = "name";
//	id_tipo_sucursal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_tipo_sucursal";
	$fdata["GoodName"] = "id_tipo_sucursal";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa_sucursales3","id_tipo_sucursal");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_tipo_sucursal";

		$fdata["sourceSingle"] = "id_tipo_sucursal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.empresa_bolsa_tipo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_empresa_bolsa_tipo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataempresas_bolsa_sucursales3["id_tipo_sucursal"] = $fdata;
		$tdataempresas_bolsa_sucursales3[".searchableFields"][] = "id_tipo_sucursal";


$tables_data["bolsa_empleo.empresas_bolsa_sucursales3"]=&$tdataempresas_bolsa_sucursales3;
$field_labels["bolsa_empleo_empresas_bolsa_sucursales3"] = &$fieldLabelsempresas_bolsa_sucursales3;
$fieldToolTips["bolsa_empleo_empresas_bolsa_sucursales3"] = &$fieldToolTipsempresas_bolsa_sucursales3;
$placeHolders["bolsa_empleo_empresas_bolsa_sucursales3"] = &$placeHoldersempresas_bolsa_sucursales3;
$page_titles["bolsa_empleo_empresas_bolsa_sucursales3"] = &$pageTitlesempresas_bolsa_sucursales3;


changeTextControlsToDate( "bolsa_empleo.empresas_bolsa_sucursales3" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.empresas_bolsa_sucursales3"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.empresas_bolsa_sucursales3"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_empresas_bolsa_sucursales3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bolsa_empleo.empresas_bolsa_sucursales.id,  bolsa_empleo.empresas_bolsa_sucursales.nro_patronal,  eportal.empresas_sucursales_types.name,  bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal";
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
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa_sucursales3"
));

$proto6["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id";
$proto6["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nro_patronal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa_sucursales3"
));

$proto8["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.nro_patronal";
$proto8["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales3";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.empresas_sucursales_types",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa_sucursales3"
));

$proto10["m_sql"] = "eportal.empresas_sucursales_types.name";
$proto10["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales3";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_tipo_sucursal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa_sucursales3"
));

$proto12["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal";
$proto12["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales3";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto15["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales3";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "empresas_bolsa_id";
$proto15["m_columns"][] = "ruc";
$proto15["m_columns"][] = "legal";
$proto15["m_columns"][] = "fantasy";
$proto15["m_columns"][] = "city_id";
$proto15["m_columns"][] = "distrito_id";
$proto15["m_columns"][] = "tel";
$proto15["m_columns"][] = "email";
$proto15["m_columns"][] = "id_tipo_sucursal";
$proto15["m_columns"][] = "nro_patronal";
$proto15["m_columns"][] = "direccion";
$proto15["m_columns"][] = "fecha_creacion";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales3";
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
$proto19["m_strName"] = "eportal.empresas_sucursales_types";
$proto19["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales3";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "name";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "INNER JOIN eportal.empresas_sucursales_types ON bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal = eportal.empresas_sucursales_types.id";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "bolsa_empleo.empresas_bolsa_sucursales3";
$proto20=array();
$proto20["m_sql"] = "eportal.empresas_sucursales_types.id = bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.empresas_sucursales_types",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa_sucursales3"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.empresas_bolsa_sucursales3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresas_bolsa_sucursales3 = createSqlQuery_empresas_bolsa_sucursales3();


	
		;

				

$tdataempresas_bolsa_sucursales3[".sqlquery"] = $queryData_empresas_bolsa_sucursales3;



$tdataempresas_bolsa_sucursales3[".hasEvents"] = false;

?>
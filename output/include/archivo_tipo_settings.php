<?php
$tdataarchivo_tipo = array();
$tdataarchivo_tipo[".searchableFields"] = array();
$tdataarchivo_tipo[".ShortName"] = "archivo_tipo";
$tdataarchivo_tipo[".OwnerID"] = "";
$tdataarchivo_tipo[".OriginalTable"] = "bolsa_empleo.archivo_tipo";


$tdataarchivo_tipo[".pagesByType"] = my_json_decode( "{}" );
$tdataarchivo_tipo[".originalPagesByType"] = $tdataarchivo_tipo[".pagesByType"];
$tdataarchivo_tipo[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataarchivo_tipo[".originalPages"] = $tdataarchivo_tipo[".pages"];
$tdataarchivo_tipo[".defaultPages"] = my_json_decode( "{}" );
$tdataarchivo_tipo[".originalDefaultPages"] = $tdataarchivo_tipo[".defaultPages"];

//	field labels
$fieldLabelsarchivo_tipo = array();
$fieldToolTipsarchivo_tipo = array();
$pageTitlesarchivo_tipo = array();
$placeHoldersarchivo_tipo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsarchivo_tipo["Spanish"] = array();
	$fieldToolTipsarchivo_tipo["Spanish"] = array();
	$placeHoldersarchivo_tipo["Spanish"] = array();
	$pageTitlesarchivo_tipo["Spanish"] = array();
	$fieldLabelsarchivo_tipo["Spanish"]["id_tipo_archivo"] = "Id Tipo Archivo";
	$fieldToolTipsarchivo_tipo["Spanish"]["id_tipo_archivo"] = "";
	$placeHoldersarchivo_tipo["Spanish"]["id_tipo_archivo"] = "";
	$fieldLabelsarchivo_tipo["Spanish"]["tipo_archivo"] = "Tipo Archivo";
	$fieldToolTipsarchivo_tipo["Spanish"]["tipo_archivo"] = "";
	$placeHoldersarchivo_tipo["Spanish"]["tipo_archivo"] = "";
	if (count($fieldToolTipsarchivo_tipo["Spanish"]))
		$tdataarchivo_tipo[".isUseToolTips"] = true;
}


	$tdataarchivo_tipo[".NCSearch"] = true;



$tdataarchivo_tipo[".shortTableName"] = "archivo_tipo";
$tdataarchivo_tipo[".nSecOptions"] = 0;

$tdataarchivo_tipo[".mainTableOwnerID"] = "";
$tdataarchivo_tipo[".entityType"] = 0;
$tdataarchivo_tipo[".connId"] = "eportal_at_192_168_70_170";


$tdataarchivo_tipo[".strOriginalTableName"] = "bolsa_empleo.archivo_tipo";

	



$tdataarchivo_tipo[".showAddInPopup"] = false;

$tdataarchivo_tipo[".showEditInPopup"] = false;

$tdataarchivo_tipo[".showViewInPopup"] = false;

$tdataarchivo_tipo[".listAjax"] = false;
//	temporary
//$tdataarchivo_tipo[".listAjax"] = false;

	$tdataarchivo_tipo[".audit"] = false;

	$tdataarchivo_tipo[".locking"] = false;


$pages = $tdataarchivo_tipo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataarchivo_tipo[".edit"] = true;
	$tdataarchivo_tipo[".afterEditAction"] = 1;
	$tdataarchivo_tipo[".closePopupAfterEdit"] = 1;
	$tdataarchivo_tipo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataarchivo_tipo[".add"] = true;
$tdataarchivo_tipo[".afterAddAction"] = 1;
$tdataarchivo_tipo[".closePopupAfterAdd"] = 1;
$tdataarchivo_tipo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataarchivo_tipo[".list"] = true;
}



$tdataarchivo_tipo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataarchivo_tipo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataarchivo_tipo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataarchivo_tipo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataarchivo_tipo[".printFriendly"] = true;
}



$tdataarchivo_tipo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataarchivo_tipo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataarchivo_tipo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataarchivo_tipo[".isUseAjaxSuggest"] = true;



																																																																																							

$tdataarchivo_tipo[".ajaxCodeSnippetAdded"] = false;

$tdataarchivo_tipo[".buttonsAdded"] = false;

$tdataarchivo_tipo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataarchivo_tipo[".isUseTimeForSearch"] = false;


$tdataarchivo_tipo[".badgeColor"] = "6B8E23";


$tdataarchivo_tipo[".allSearchFields"] = array();
$tdataarchivo_tipo[".filterFields"] = array();
$tdataarchivo_tipo[".requiredSearchFields"] = array();

$tdataarchivo_tipo[".googleLikeFields"] = array();
$tdataarchivo_tipo[".googleLikeFields"][] = "id_tipo_archivo";
$tdataarchivo_tipo[".googleLikeFields"][] = "tipo_archivo";



$tdataarchivo_tipo[".tableType"] = "list";

$tdataarchivo_tipo[".printerPageOrientation"] = 0;
$tdataarchivo_tipo[".nPrinterPageScale"] = 100;

$tdataarchivo_tipo[".nPrinterSplitRecords"] = 40;

$tdataarchivo_tipo[".geocodingEnabled"] = false;










$tdataarchivo_tipo[".pageSize"] = 20;

$tdataarchivo_tipo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataarchivo_tipo[".strOrderBy"] = $tstrOrderBy;

$tdataarchivo_tipo[".orderindexes"] = array();


$tdataarchivo_tipo[".sqlHead"] = "SELECT id_tipo_archivo,  	tipo_archivo";
$tdataarchivo_tipo[".sqlFrom"] = "FROM bolsa_empleo.archivo_tipo";
$tdataarchivo_tipo[".sqlWhereExpr"] = "";
$tdataarchivo_tipo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataarchivo_tipo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataarchivo_tipo[".arrGroupsPerPage"] = $arrGPP;

$tdataarchivo_tipo[".highlightSearchResults"] = true;

$tableKeysarchivo_tipo = array();
$tableKeysarchivo_tipo[] = "id_tipo_archivo";
$tdataarchivo_tipo[".Keys"] = $tableKeysarchivo_tipo;


$tdataarchivo_tipo[".hideMobileList"] = array();




//	id_tipo_archivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_tipo_archivo";
	$fdata["GoodName"] = "id_tipo_archivo";
	$fdata["ownerTable"] = "bolsa_empleo.archivo_tipo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_archivo_tipo","id_tipo_archivo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_tipo_archivo";

		$fdata["sourceSingle"] = "id_tipo_archivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_tipo_archivo";

	
	
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


	$tdataarchivo_tipo["id_tipo_archivo"] = $fdata;
		$tdataarchivo_tipo[".searchableFields"][] = "id_tipo_archivo";
//	tipo_archivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo_archivo";
	$fdata["GoodName"] = "tipo_archivo";
	$fdata["ownerTable"] = "bolsa_empleo.archivo_tipo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_archivo_tipo","tipo_archivo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_archivo";

		$fdata["sourceSingle"] = "tipo_archivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_archivo";

	
	
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


	$tdataarchivo_tipo["tipo_archivo"] = $fdata;
		$tdataarchivo_tipo[".searchableFields"][] = "tipo_archivo";


$tables_data["bolsa_empleo.archivo_tipo"]=&$tdataarchivo_tipo;
$field_labels["bolsa_empleo_archivo_tipo"] = &$fieldLabelsarchivo_tipo;
$fieldToolTips["bolsa_empleo_archivo_tipo"] = &$fieldToolTipsarchivo_tipo;
$placeHolders["bolsa_empleo_archivo_tipo"] = &$placeHoldersarchivo_tipo;
$page_titles["bolsa_empleo_archivo_tipo"] = &$pageTitlesarchivo_tipo;


changeTextControlsToDate( "bolsa_empleo.archivo_tipo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.archivo_tipo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.archivo_tipo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_archivo_tipo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_tipo_archivo,  	tipo_archivo";
$proto0["m_strFrom"] = "FROM bolsa_empleo.archivo_tipo";
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
	"m_strName" => "id_tipo_archivo",
	"m_strTable" => "bolsa_empleo.archivo_tipo",
	"m_srcTableName" => "bolsa_empleo.archivo_tipo"
));

$proto6["m_sql"] = "id_tipo_archivo";
$proto6["m_srcTableName"] = "bolsa_empleo.archivo_tipo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_archivo",
	"m_strTable" => "bolsa_empleo.archivo_tipo",
	"m_srcTableName" => "bolsa_empleo.archivo_tipo"
));

$proto8["m_sql"] = "tipo_archivo";
$proto8["m_srcTableName"] = "bolsa_empleo.archivo_tipo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.archivo_tipo";
$proto11["m_srcTableName"] = "bolsa_empleo.archivo_tipo";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_tipo_archivo";
$proto11["m_columns"][] = "tipo_archivo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.archivo_tipo";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.archivo_tipo";
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
$proto0["m_srcTableName"]="bolsa_empleo.archivo_tipo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_archivo_tipo = createSqlQuery_archivo_tipo();


	
		;

		

$tdataarchivo_tipo[".sqlquery"] = $queryData_archivo_tipo;



$tdataarchivo_tipo[".hasEvents"] = false;

?>
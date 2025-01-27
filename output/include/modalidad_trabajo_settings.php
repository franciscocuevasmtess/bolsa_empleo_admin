<?php
$tdatamodalidad_trabajo = array();
$tdatamodalidad_trabajo[".searchableFields"] = array();
$tdatamodalidad_trabajo[".ShortName"] = "modalidad_trabajo";
$tdatamodalidad_trabajo[".OwnerID"] = "";
$tdatamodalidad_trabajo[".OriginalTable"] = "bolsa_empleo.modalidad_trabajo";


$tdatamodalidad_trabajo[".pagesByType"] = my_json_decode( "{}" );
$tdatamodalidad_trabajo[".originalPagesByType"] = $tdatamodalidad_trabajo[".pagesByType"];
$tdatamodalidad_trabajo[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatamodalidad_trabajo[".originalPages"] = $tdatamodalidad_trabajo[".pages"];
$tdatamodalidad_trabajo[".defaultPages"] = my_json_decode( "{}" );
$tdatamodalidad_trabajo[".originalDefaultPages"] = $tdatamodalidad_trabajo[".defaultPages"];

//	field labels
$fieldLabelsmodalidad_trabajo = array();
$fieldToolTipsmodalidad_trabajo = array();
$pageTitlesmodalidad_trabajo = array();
$placeHoldersmodalidad_trabajo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmodalidad_trabajo["Spanish"] = array();
	$fieldToolTipsmodalidad_trabajo["Spanish"] = array();
	$placeHoldersmodalidad_trabajo["Spanish"] = array();
	$pageTitlesmodalidad_trabajo["Spanish"] = array();
	$fieldLabelsmodalidad_trabajo["Spanish"]["id_modalidad_trabajo"] = "Id Modalidad Trabajo";
	$fieldToolTipsmodalidad_trabajo["Spanish"]["id_modalidad_trabajo"] = "";
	$placeHoldersmodalidad_trabajo["Spanish"]["id_modalidad_trabajo"] = "";
	$fieldLabelsmodalidad_trabajo["Spanish"]["tipo_modalidad"] = "Tipo Modalidad";
	$fieldToolTipsmodalidad_trabajo["Spanish"]["tipo_modalidad"] = "";
	$placeHoldersmodalidad_trabajo["Spanish"]["tipo_modalidad"] = "";
	if (count($fieldToolTipsmodalidad_trabajo["Spanish"]))
		$tdatamodalidad_trabajo[".isUseToolTips"] = true;
}


	$tdatamodalidad_trabajo[".NCSearch"] = true;



$tdatamodalidad_trabajo[".shortTableName"] = "modalidad_trabajo";
$tdatamodalidad_trabajo[".nSecOptions"] = 0;

$tdatamodalidad_trabajo[".mainTableOwnerID"] = "";
$tdatamodalidad_trabajo[".entityType"] = 0;
$tdatamodalidad_trabajo[".connId"] = "eportal_at_192_168_70_170";


$tdatamodalidad_trabajo[".strOriginalTableName"] = "bolsa_empleo.modalidad_trabajo";

	



$tdatamodalidad_trabajo[".showAddInPopup"] = false;

$tdatamodalidad_trabajo[".showEditInPopup"] = false;

$tdatamodalidad_trabajo[".showViewInPopup"] = false;

$tdatamodalidad_trabajo[".listAjax"] = false;
//	temporary
//$tdatamodalidad_trabajo[".listAjax"] = false;

	$tdatamodalidad_trabajo[".audit"] = true;

	$tdatamodalidad_trabajo[".locking"] = false;


$pages = $tdatamodalidad_trabajo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamodalidad_trabajo[".edit"] = true;
	$tdatamodalidad_trabajo[".afterEditAction"] = 1;
	$tdatamodalidad_trabajo[".closePopupAfterEdit"] = 1;
	$tdatamodalidad_trabajo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamodalidad_trabajo[".add"] = true;
$tdatamodalidad_trabajo[".afterAddAction"] = 1;
$tdatamodalidad_trabajo[".closePopupAfterAdd"] = 1;
$tdatamodalidad_trabajo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamodalidad_trabajo[".list"] = true;
}



$tdatamodalidad_trabajo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamodalidad_trabajo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamodalidad_trabajo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamodalidad_trabajo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamodalidad_trabajo[".printFriendly"] = true;
}



$tdatamodalidad_trabajo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamodalidad_trabajo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamodalidad_trabajo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamodalidad_trabajo[".isUseAjaxSuggest"] = true;



																																																						

$tdatamodalidad_trabajo[".ajaxCodeSnippetAdded"] = false;

$tdatamodalidad_trabajo[".buttonsAdded"] = false;

$tdatamodalidad_trabajo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodalidad_trabajo[".isUseTimeForSearch"] = false;


$tdatamodalidad_trabajo[".badgeColor"] = "778899";


$tdatamodalidad_trabajo[".allSearchFields"] = array();
$tdatamodalidad_trabajo[".filterFields"] = array();
$tdatamodalidad_trabajo[".requiredSearchFields"] = array();

$tdatamodalidad_trabajo[".googleLikeFields"] = array();
$tdatamodalidad_trabajo[".googleLikeFields"][] = "id_modalidad_trabajo";
$tdatamodalidad_trabajo[".googleLikeFields"][] = "tipo_modalidad";



$tdatamodalidad_trabajo[".tableType"] = "list";

$tdatamodalidad_trabajo[".printerPageOrientation"] = 0;
$tdatamodalidad_trabajo[".nPrinterPageScale"] = 100;

$tdatamodalidad_trabajo[".nPrinterSplitRecords"] = 40;

$tdatamodalidad_trabajo[".geocodingEnabled"] = false;










$tdatamodalidad_trabajo[".pageSize"] = 20;

$tdatamodalidad_trabajo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamodalidad_trabajo[".strOrderBy"] = $tstrOrderBy;

$tdatamodalidad_trabajo[".orderindexes"] = array();


$tdatamodalidad_trabajo[".sqlHead"] = "SELECT id_modalidad_trabajo,  	tipo_modalidad";
$tdatamodalidad_trabajo[".sqlFrom"] = "FROM bolsa_empleo.modalidad_trabajo";
$tdatamodalidad_trabajo[".sqlWhereExpr"] = "";
$tdatamodalidad_trabajo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodalidad_trabajo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodalidad_trabajo[".arrGroupsPerPage"] = $arrGPP;

$tdatamodalidad_trabajo[".highlightSearchResults"] = true;

$tableKeysmodalidad_trabajo = array();
$tableKeysmodalidad_trabajo[] = "id_modalidad_trabajo";
$tdatamodalidad_trabajo[".Keys"] = $tableKeysmodalidad_trabajo;


$tdatamodalidad_trabajo[".hideMobileList"] = array();




//	id_modalidad_trabajo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_modalidad_trabajo";
	$fdata["GoodName"] = "id_modalidad_trabajo";
	$fdata["ownerTable"] = "bolsa_empleo.modalidad_trabajo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_modalidad_trabajo","id_modalidad_trabajo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_modalidad_trabajo";

		$fdata["sourceSingle"] = "id_modalidad_trabajo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_modalidad_trabajo";

	
	
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


	$tdatamodalidad_trabajo["id_modalidad_trabajo"] = $fdata;
		$tdatamodalidad_trabajo[".searchableFields"][] = "id_modalidad_trabajo";
//	tipo_modalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo_modalidad";
	$fdata["GoodName"] = "tipo_modalidad";
	$fdata["ownerTable"] = "bolsa_empleo.modalidad_trabajo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_modalidad_trabajo","tipo_modalidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_modalidad";

		$fdata["sourceSingle"] = "tipo_modalidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_modalidad";

	
	
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


	$tdatamodalidad_trabajo["tipo_modalidad"] = $fdata;
		$tdatamodalidad_trabajo[".searchableFields"][] = "tipo_modalidad";


$tables_data["bolsa_empleo.modalidad_trabajo"]=&$tdatamodalidad_trabajo;
$field_labels["bolsa_empleo_modalidad_trabajo"] = &$fieldLabelsmodalidad_trabajo;
$fieldToolTips["bolsa_empleo_modalidad_trabajo"] = &$fieldToolTipsmodalidad_trabajo;
$placeHolders["bolsa_empleo_modalidad_trabajo"] = &$placeHoldersmodalidad_trabajo;
$page_titles["bolsa_empleo_modalidad_trabajo"] = &$pageTitlesmodalidad_trabajo;


changeTextControlsToDate( "bolsa_empleo.modalidad_trabajo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.modalidad_trabajo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.modalidad_trabajo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_modalidad_trabajo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_modalidad_trabajo,  	tipo_modalidad";
$proto0["m_strFrom"] = "FROM bolsa_empleo.modalidad_trabajo";
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
	"m_strName" => "id_modalidad_trabajo",
	"m_strTable" => "bolsa_empleo.modalidad_trabajo",
	"m_srcTableName" => "bolsa_empleo.modalidad_trabajo"
));

$proto6["m_sql"] = "id_modalidad_trabajo";
$proto6["m_srcTableName"] = "bolsa_empleo.modalidad_trabajo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_modalidad",
	"m_strTable" => "bolsa_empleo.modalidad_trabajo",
	"m_srcTableName" => "bolsa_empleo.modalidad_trabajo"
));

$proto8["m_sql"] = "tipo_modalidad";
$proto8["m_srcTableName"] = "bolsa_empleo.modalidad_trabajo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.modalidad_trabajo";
$proto11["m_srcTableName"] = "bolsa_empleo.modalidad_trabajo";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_modalidad_trabajo";
$proto11["m_columns"][] = "tipo_modalidad";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.modalidad_trabajo";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.modalidad_trabajo";
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
$proto0["m_srcTableName"]="bolsa_empleo.modalidad_trabajo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_modalidad_trabajo = createSqlQuery_modalidad_trabajo();


	
		;

		

$tdatamodalidad_trabajo[".sqlquery"] = $queryData_modalidad_trabajo;



$tdatamodalidad_trabajo[".hasEvents"] = false;

?>
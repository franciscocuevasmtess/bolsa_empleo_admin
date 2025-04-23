<?php
$tdatacvc_niveles_academicos = array();
$tdatacvc_niveles_academicos[".searchableFields"] = array();
$tdatacvc_niveles_academicos[".ShortName"] = "cvc_niveles_academicos";
$tdatacvc_niveles_academicos[".OwnerID"] = "";
$tdatacvc_niveles_academicos[".OriginalTable"] = "bolsa_empleo.cvc_niveles_academicos";


$tdatacvc_niveles_academicos[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatacvc_niveles_academicos[".originalPagesByType"] = $tdatacvc_niveles_academicos[".pagesByType"];
$tdatacvc_niveles_academicos[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatacvc_niveles_academicos[".originalPages"] = $tdatacvc_niveles_academicos[".pages"];
$tdatacvc_niveles_academicos[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatacvc_niveles_academicos[".originalDefaultPages"] = $tdatacvc_niveles_academicos[".defaultPages"];

//	field labels
$fieldLabelscvc_niveles_academicos = array();
$fieldToolTipscvc_niveles_academicos = array();
$pageTitlescvc_niveles_academicos = array();
$placeHolderscvc_niveles_academicos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscvc_niveles_academicos["Spanish"] = array();
	$fieldToolTipscvc_niveles_academicos["Spanish"] = array();
	$placeHolderscvc_niveles_academicos["Spanish"] = array();
	$pageTitlescvc_niveles_academicos["Spanish"] = array();
	$fieldLabelscvc_niveles_academicos["Spanish"]["cvc_id_niveles_academicos"] = "Cvc Id Niveles Academicos";
	$fieldToolTipscvc_niveles_academicos["Spanish"]["cvc_id_niveles_academicos"] = "";
	$placeHolderscvc_niveles_academicos["Spanish"]["cvc_id_niveles_academicos"] = "";
	$fieldLabelscvc_niveles_academicos["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipscvc_niveles_academicos["Spanish"]["descripcion"] = "";
	$placeHolderscvc_niveles_academicos["Spanish"]["descripcion"] = "";
	$fieldLabelscvc_niveles_academicos["Spanish"]["orden"] = "Orden";
	$fieldToolTipscvc_niveles_academicos["Spanish"]["orden"] = "";
	$placeHolderscvc_niveles_academicos["Spanish"]["orden"] = "";
	if (count($fieldToolTipscvc_niveles_academicos["Spanish"]))
		$tdatacvc_niveles_academicos[".isUseToolTips"] = true;
}


	$tdatacvc_niveles_academicos[".NCSearch"] = true;



$tdatacvc_niveles_academicos[".shortTableName"] = "cvc_niveles_academicos";
$tdatacvc_niveles_academicos[".nSecOptions"] = 0;

$tdatacvc_niveles_academicos[".mainTableOwnerID"] = "";
$tdatacvc_niveles_academicos[".entityType"] = 0;
$tdatacvc_niveles_academicos[".connId"] = "eportal_at_192_168_70_170";


$tdatacvc_niveles_academicos[".strOriginalTableName"] = "bolsa_empleo.cvc_niveles_academicos";

	



$tdatacvc_niveles_academicos[".showAddInPopup"] = false;

$tdatacvc_niveles_academicos[".showEditInPopup"] = false;

$tdatacvc_niveles_academicos[".showViewInPopup"] = false;

$tdatacvc_niveles_academicos[".listAjax"] = false;
//	temporary
//$tdatacvc_niveles_academicos[".listAjax"] = false;

	$tdatacvc_niveles_academicos[".audit"] = true;

	$tdatacvc_niveles_academicos[".locking"] = false;


$pages = $tdatacvc_niveles_academicos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacvc_niveles_academicos[".edit"] = true;
	$tdatacvc_niveles_academicos[".afterEditAction"] = 1;
	$tdatacvc_niveles_academicos[".closePopupAfterEdit"] = 1;
	$tdatacvc_niveles_academicos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacvc_niveles_academicos[".add"] = true;
$tdatacvc_niveles_academicos[".afterAddAction"] = 1;
$tdatacvc_niveles_academicos[".closePopupAfterAdd"] = 1;
$tdatacvc_niveles_academicos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacvc_niveles_academicos[".list"] = true;
}



$tdatacvc_niveles_academicos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacvc_niveles_academicos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacvc_niveles_academicos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacvc_niveles_academicos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacvc_niveles_academicos[".printFriendly"] = true;
}



$tdatacvc_niveles_academicos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacvc_niveles_academicos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacvc_niveles_academicos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacvc_niveles_academicos[".isUseAjaxSuggest"] = true;



																																																																																							

$tdatacvc_niveles_academicos[".ajaxCodeSnippetAdded"] = false;

$tdatacvc_niveles_academicos[".buttonsAdded"] = false;

$tdatacvc_niveles_academicos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacvc_niveles_academicos[".isUseTimeForSearch"] = false;


$tdatacvc_niveles_academicos[".badgeColor"] = "778899";


$tdatacvc_niveles_academicos[".allSearchFields"] = array();
$tdatacvc_niveles_academicos[".filterFields"] = array();
$tdatacvc_niveles_academicos[".requiredSearchFields"] = array();

$tdatacvc_niveles_academicos[".googleLikeFields"] = array();
$tdatacvc_niveles_academicos[".googleLikeFields"][] = "cvc_id_niveles_academicos";
$tdatacvc_niveles_academicos[".googleLikeFields"][] = "descripcion";
$tdatacvc_niveles_academicos[".googleLikeFields"][] = "orden";



$tdatacvc_niveles_academicos[".tableType"] = "list";

$tdatacvc_niveles_academicos[".printerPageOrientation"] = 0;
$tdatacvc_niveles_academicos[".nPrinterPageScale"] = 100;

$tdatacvc_niveles_academicos[".nPrinterSplitRecords"] = 40;

$tdatacvc_niveles_academicos[".geocodingEnabled"] = false;










$tdatacvc_niveles_academicos[".pageSize"] = 20;

$tdatacvc_niveles_academicos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacvc_niveles_academicos[".strOrderBy"] = $tstrOrderBy;

$tdatacvc_niveles_academicos[".orderindexes"] = array();


$tdatacvc_niveles_academicos[".sqlHead"] = "SELECT cvc_id_niveles_academicos,  	descripcion,  	orden";
$tdatacvc_niveles_academicos[".sqlFrom"] = "FROM bolsa_empleo.cvc_niveles_academicos";
$tdatacvc_niveles_academicos[".sqlWhereExpr"] = "";
$tdatacvc_niveles_academicos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacvc_niveles_academicos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacvc_niveles_academicos[".arrGroupsPerPage"] = $arrGPP;

$tdatacvc_niveles_academicos[".highlightSearchResults"] = true;

$tableKeyscvc_niveles_academicos = array();
$tableKeyscvc_niveles_academicos[] = "cvc_id_niveles_academicos";
$tdatacvc_niveles_academicos[".Keys"] = $tableKeyscvc_niveles_academicos;


$tdatacvc_niveles_academicos[".hideMobileList"] = array();




//	cvc_id_niveles_academicos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cvc_id_niveles_academicos";
	$fdata["GoodName"] = "cvc_id_niveles_academicos";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_niveles_academicos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_niveles_academicos","cvc_id_niveles_academicos");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cvc_id_niveles_academicos";

		$fdata["sourceSingle"] = "cvc_id_niveles_academicos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cvc_id_niveles_academicos";

	
	
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


	$tdatacvc_niveles_academicos["cvc_id_niveles_academicos"] = $fdata;
		$tdatacvc_niveles_academicos[".searchableFields"][] = "cvc_id_niveles_academicos";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_niveles_academicos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_niveles_academicos","descripcion");
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


	$tdatacvc_niveles_academicos["descripcion"] = $fdata;
		$tdatacvc_niveles_academicos[".searchableFields"][] = "descripcion";
//	orden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "orden";
	$fdata["GoodName"] = "orden";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_niveles_academicos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_niveles_academicos","orden");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "orden";

		$fdata["sourceSingle"] = "orden";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "orden";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacvc_niveles_academicos["orden"] = $fdata;
		$tdatacvc_niveles_academicos[".searchableFields"][] = "orden";


$tables_data["bolsa_empleo.cvc_niveles_academicos"]=&$tdatacvc_niveles_academicos;
$field_labels["bolsa_empleo_cvc_niveles_academicos"] = &$fieldLabelscvc_niveles_academicos;
$fieldToolTips["bolsa_empleo_cvc_niveles_academicos"] = &$fieldToolTipscvc_niveles_academicos;
$placeHolders["bolsa_empleo_cvc_niveles_academicos"] = &$placeHolderscvc_niveles_academicos;
$page_titles["bolsa_empleo_cvc_niveles_academicos"] = &$pageTitlescvc_niveles_academicos;


changeTextControlsToDate( "bolsa_empleo.cvc_niveles_academicos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.cvc_niveles_academicos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.cvc_niveles_academicos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cvc_niveles_academicos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cvc_id_niveles_academicos,  	descripcion,  	orden";
$proto0["m_strFrom"] = "FROM bolsa_empleo.cvc_niveles_academicos";
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
	"m_strName" => "cvc_id_niveles_academicos",
	"m_strTable" => "bolsa_empleo.cvc_niveles_academicos",
	"m_srcTableName" => "bolsa_empleo.cvc_niveles_academicos"
));

$proto6["m_sql"] = "cvc_id_niveles_academicos";
$proto6["m_srcTableName"] = "bolsa_empleo.cvc_niveles_academicos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.cvc_niveles_academicos",
	"m_srcTableName" => "bolsa_empleo.cvc_niveles_academicos"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "bolsa_empleo.cvc_niveles_academicos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "orden",
	"m_strTable" => "bolsa_empleo.cvc_niveles_academicos",
	"m_srcTableName" => "bolsa_empleo.cvc_niveles_academicos"
));

$proto10["m_sql"] = "orden";
$proto10["m_srcTableName"] = "bolsa_empleo.cvc_niveles_academicos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "bolsa_empleo.cvc_niveles_academicos";
$proto13["m_srcTableName"] = "bolsa_empleo.cvc_niveles_academicos";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "cvc_id_niveles_academicos";
$proto13["m_columns"][] = "descripcion";
$proto13["m_columns"][] = "orden";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "bolsa_empleo.cvc_niveles_academicos";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "bolsa_empleo.cvc_niveles_academicos";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.cvc_niveles_academicos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cvc_niveles_academicos = createSqlQuery_cvc_niveles_academicos();


	
		;

			

$tdatacvc_niveles_academicos[".sqlquery"] = $queryData_cvc_niveles_academicos;



$tdatacvc_niveles_academicos[".hasEvents"] = false;

?>
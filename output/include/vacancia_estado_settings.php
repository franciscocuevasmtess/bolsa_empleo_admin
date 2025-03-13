<?php
$tdatavacancia_estado = array();
$tdatavacancia_estado[".searchableFields"] = array();
$tdatavacancia_estado[".ShortName"] = "vacancia_estado";
$tdatavacancia_estado[".OwnerID"] = "";
$tdatavacancia_estado[".OriginalTable"] = "bolsa_empleo.vacancia_estado";


$tdatavacancia_estado[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatavacancia_estado[".originalPagesByType"] = $tdatavacancia_estado[".pagesByType"];
$tdatavacancia_estado[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatavacancia_estado[".originalPages"] = $tdatavacancia_estado[".pages"];
$tdatavacancia_estado[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatavacancia_estado[".originalDefaultPages"] = $tdatavacancia_estado[".defaultPages"];

//	field labels
$fieldLabelsvacancia_estado = array();
$fieldToolTipsvacancia_estado = array();
$pageTitlesvacancia_estado = array();
$placeHoldersvacancia_estado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvacancia_estado["Spanish"] = array();
	$fieldToolTipsvacancia_estado["Spanish"] = array();
	$placeHoldersvacancia_estado["Spanish"] = array();
	$pageTitlesvacancia_estado["Spanish"] = array();
	$fieldLabelsvacancia_estado["Spanish"]["id_vacancia_estado"] = "Id Vacancia Estado";
	$fieldToolTipsvacancia_estado["Spanish"]["id_vacancia_estado"] = "";
	$placeHoldersvacancia_estado["Spanish"]["id_vacancia_estado"] = "";
	$fieldLabelsvacancia_estado["Spanish"]["estado"] = "Estado";
	$fieldToolTipsvacancia_estado["Spanish"]["estado"] = "";
	$placeHoldersvacancia_estado["Spanish"]["estado"] = "";
	$fieldLabelsvacancia_estado["Spanish"]["descripcion_estado"] = "Descripcion Estado";
	$fieldToolTipsvacancia_estado["Spanish"]["descripcion_estado"] = "";
	$placeHoldersvacancia_estado["Spanish"]["descripcion_estado"] = "";
	if (count($fieldToolTipsvacancia_estado["Spanish"]))
		$tdatavacancia_estado[".isUseToolTips"] = true;
}


	$tdatavacancia_estado[".NCSearch"] = true;



$tdatavacancia_estado[".shortTableName"] = "vacancia_estado";
$tdatavacancia_estado[".nSecOptions"] = 0;

$tdatavacancia_estado[".mainTableOwnerID"] = "";
$tdatavacancia_estado[".entityType"] = 0;
$tdatavacancia_estado[".connId"] = "eportal_at_192_168_70_170";


$tdatavacancia_estado[".strOriginalTableName"] = "bolsa_empleo.vacancia_estado";

	



$tdatavacancia_estado[".showAddInPopup"] = false;

$tdatavacancia_estado[".showEditInPopup"] = false;

$tdatavacancia_estado[".showViewInPopup"] = false;

$tdatavacancia_estado[".listAjax"] = false;
//	temporary
//$tdatavacancia_estado[".listAjax"] = false;

	$tdatavacancia_estado[".audit"] = true;

	$tdatavacancia_estado[".locking"] = false;


$pages = $tdatavacancia_estado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavacancia_estado[".edit"] = true;
	$tdatavacancia_estado[".afterEditAction"] = 1;
	$tdatavacancia_estado[".closePopupAfterEdit"] = 1;
	$tdatavacancia_estado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavacancia_estado[".add"] = true;
$tdatavacancia_estado[".afterAddAction"] = 1;
$tdatavacancia_estado[".closePopupAfterAdd"] = 1;
$tdatavacancia_estado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavacancia_estado[".list"] = true;
}



$tdatavacancia_estado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavacancia_estado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavacancia_estado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavacancia_estado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavacancia_estado[".printFriendly"] = true;
}



$tdatavacancia_estado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavacancia_estado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavacancia_estado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavacancia_estado[".isUseAjaxSuggest"] = true;



																																																															

$tdatavacancia_estado[".ajaxCodeSnippetAdded"] = false;

$tdatavacancia_estado[".buttonsAdded"] = false;

$tdatavacancia_estado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavacancia_estado[".isUseTimeForSearch"] = false;


$tdatavacancia_estado[".badgeColor"] = "D2691E";


$tdatavacancia_estado[".allSearchFields"] = array();
$tdatavacancia_estado[".filterFields"] = array();
$tdatavacancia_estado[".requiredSearchFields"] = array();

$tdatavacancia_estado[".googleLikeFields"] = array();
$tdatavacancia_estado[".googleLikeFields"][] = "id_vacancia_estado";
$tdatavacancia_estado[".googleLikeFields"][] = "estado";
$tdatavacancia_estado[".googleLikeFields"][] = "descripcion_estado";



$tdatavacancia_estado[".tableType"] = "list";

$tdatavacancia_estado[".printerPageOrientation"] = 0;
$tdatavacancia_estado[".nPrinterPageScale"] = 100;

$tdatavacancia_estado[".nPrinterSplitRecords"] = 40;

$tdatavacancia_estado[".geocodingEnabled"] = false;










$tdatavacancia_estado[".pageSize"] = 20;

$tdatavacancia_estado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavacancia_estado[".strOrderBy"] = $tstrOrderBy;

$tdatavacancia_estado[".orderindexes"] = array();


$tdatavacancia_estado[".sqlHead"] = "SELECT id_vacancia_estado,  	estado,  	descripcion_estado";
$tdatavacancia_estado[".sqlFrom"] = "FROM bolsa_empleo.vacancia_estado";
$tdatavacancia_estado[".sqlWhereExpr"] = "";
$tdatavacancia_estado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavacancia_estado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavacancia_estado[".arrGroupsPerPage"] = $arrGPP;

$tdatavacancia_estado[".highlightSearchResults"] = true;

$tableKeysvacancia_estado = array();
$tableKeysvacancia_estado[] = "id_vacancia_estado";
$tdatavacancia_estado[".Keys"] = $tableKeysvacancia_estado;


$tdatavacancia_estado[".hideMobileList"] = array();




//	id_vacancia_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_vacancia_estado";
	$fdata["GoodName"] = "id_vacancia_estado";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_estado";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_estado","id_vacancia_estado");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_vacancia_estado";

		$fdata["sourceSingle"] = "id_vacancia_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_vacancia_estado";

	
	
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


	$tdatavacancia_estado["id_vacancia_estado"] = $fdata;
		$tdatavacancia_estado[".searchableFields"][] = "id_vacancia_estado";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_estado";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_estado","estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado";

		$fdata["sourceSingle"] = "estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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


	$tdatavacancia_estado["estado"] = $fdata;
		$tdatavacancia_estado[".searchableFields"][] = "estado";
//	descripcion_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion_estado";
	$fdata["GoodName"] = "descripcion_estado";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_estado";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_estado","descripcion_estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_estado";

		$fdata["sourceSingle"] = "descripcion_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_estado";

	
	
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


	$tdatavacancia_estado["descripcion_estado"] = $fdata;
		$tdatavacancia_estado[".searchableFields"][] = "descripcion_estado";


$tables_data["bolsa_empleo.vacancia_estado"]=&$tdatavacancia_estado;
$field_labels["bolsa_empleo_vacancia_estado"] = &$fieldLabelsvacancia_estado;
$fieldToolTips["bolsa_empleo_vacancia_estado"] = &$fieldToolTipsvacancia_estado;
$placeHolders["bolsa_empleo_vacancia_estado"] = &$placeHoldersvacancia_estado;
$page_titles["bolsa_empleo_vacancia_estado"] = &$pageTitlesvacancia_estado;


changeTextControlsToDate( "bolsa_empleo.vacancia_estado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.vacancia_estado"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.vacancia_estado"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vacancia_estado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_vacancia_estado,  	estado,  	descripcion_estado";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vacancia_estado";
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
	"m_strName" => "id_vacancia_estado",
	"m_strTable" => "bolsa_empleo.vacancia_estado",
	"m_srcTableName" => "bolsa_empleo.vacancia_estado"
));

$proto6["m_sql"] = "id_vacancia_estado";
$proto6["m_srcTableName"] = "bolsa_empleo.vacancia_estado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "bolsa_empleo.vacancia_estado",
	"m_srcTableName" => "bolsa_empleo.vacancia_estado"
));

$proto8["m_sql"] = "estado";
$proto8["m_srcTableName"] = "bolsa_empleo.vacancia_estado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_estado",
	"m_strTable" => "bolsa_empleo.vacancia_estado",
	"m_srcTableName" => "bolsa_empleo.vacancia_estado"
));

$proto10["m_sql"] = "descripcion_estado";
$proto10["m_srcTableName"] = "bolsa_empleo.vacancia_estado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "bolsa_empleo.vacancia_estado";
$proto13["m_srcTableName"] = "bolsa_empleo.vacancia_estado";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_vacancia_estado";
$proto13["m_columns"][] = "estado";
$proto13["m_columns"][] = "descripcion_estado";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "bolsa_empleo.vacancia_estado";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "bolsa_empleo.vacancia_estado";
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
$proto0["m_srcTableName"]="bolsa_empleo.vacancia_estado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vacancia_estado = createSqlQuery_vacancia_estado();


	
		;

			

$tdatavacancia_estado[".sqlquery"] = $queryData_vacancia_estado;



$tdatavacancia_estado[".hasEvents"] = false;

?>
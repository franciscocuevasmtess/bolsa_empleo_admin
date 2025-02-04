<?php
$tdataactividad_econ = array();
$tdataactividad_econ[".searchableFields"] = array();
$tdataactividad_econ[".ShortName"] = "actividad_econ";
$tdataactividad_econ[".OwnerID"] = "";
$tdataactividad_econ[".OriginalTable"] = "public.actividad_econ";


$tdataactividad_econ[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdataactividad_econ[".originalPagesByType"] = $tdataactividad_econ[".pagesByType"];
$tdataactividad_econ[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdataactividad_econ[".originalPages"] = $tdataactividad_econ[".pages"];
$tdataactividad_econ[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdataactividad_econ[".originalDefaultPages"] = $tdataactividad_econ[".defaultPages"];

//	field labels
$fieldLabelsactividad_econ = array();
$fieldToolTipsactividad_econ = array();
$pageTitlesactividad_econ = array();
$placeHoldersactividad_econ = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsactividad_econ["Spanish"] = array();
	$fieldToolTipsactividad_econ["Spanish"] = array();
	$placeHoldersactividad_econ["Spanish"] = array();
	$pageTitlesactividad_econ["Spanish"] = array();
	$fieldLabelsactividad_econ["Spanish"]["id_activ_econ"] = "Id Activ Econ";
	$fieldToolTipsactividad_econ["Spanish"]["id_activ_econ"] = "";
	$placeHoldersactividad_econ["Spanish"]["id_activ_econ"] = "";
	$fieldLabelsactividad_econ["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsactividad_econ["Spanish"]["descripcion"] = "";
	$placeHoldersactividad_econ["Spanish"]["descripcion"] = "";
	$fieldLabelsactividad_econ["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipsactividad_econ["Spanish"]["codigo"] = "";
	$placeHoldersactividad_econ["Spanish"]["codigo"] = "";
	if (count($fieldToolTipsactividad_econ["Spanish"]))
		$tdataactividad_econ[".isUseToolTips"] = true;
}


	$tdataactividad_econ[".NCSearch"] = true;



$tdataactividad_econ[".shortTableName"] = "actividad_econ";
$tdataactividad_econ[".nSecOptions"] = 0;

$tdataactividad_econ[".mainTableOwnerID"] = "";
$tdataactividad_econ[".entityType"] = 0;
$tdataactividad_econ[".connId"] = "eportal_at_192_168_70_170";


$tdataactividad_econ[".strOriginalTableName"] = "public.actividad_econ";

	



$tdataactividad_econ[".showAddInPopup"] = false;

$tdataactividad_econ[".showEditInPopup"] = false;

$tdataactividad_econ[".showViewInPopup"] = false;

$tdataactividad_econ[".listAjax"] = false;
//	temporary
//$tdataactividad_econ[".listAjax"] = false;

	$tdataactividad_econ[".audit"] = true;

	$tdataactividad_econ[".locking"] = false;


$pages = $tdataactividad_econ[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataactividad_econ[".edit"] = true;
	$tdataactividad_econ[".afterEditAction"] = 1;
	$tdataactividad_econ[".closePopupAfterEdit"] = 1;
	$tdataactividad_econ[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataactividad_econ[".add"] = true;
$tdataactividad_econ[".afterAddAction"] = 1;
$tdataactividad_econ[".closePopupAfterAdd"] = 1;
$tdataactividad_econ[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataactividad_econ[".list"] = true;
}



$tdataactividad_econ[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataactividad_econ[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataactividad_econ[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataactividad_econ[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataactividad_econ[".printFriendly"] = true;
}



$tdataactividad_econ[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataactividad_econ[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataactividad_econ[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataactividad_econ[".isUseAjaxSuggest"] = true;



																																																			

$tdataactividad_econ[".ajaxCodeSnippetAdded"] = false;

$tdataactividad_econ[".buttonsAdded"] = false;

$tdataactividad_econ[".addPageEvents"] = false;

// use timepicker for search panel
$tdataactividad_econ[".isUseTimeForSearch"] = false;


$tdataactividad_econ[".badgeColor"] = "7B68EE";


$tdataactividad_econ[".allSearchFields"] = array();
$tdataactividad_econ[".filterFields"] = array();
$tdataactividad_econ[".requiredSearchFields"] = array();

$tdataactividad_econ[".googleLikeFields"] = array();
$tdataactividad_econ[".googleLikeFields"][] = "id_activ_econ";
$tdataactividad_econ[".googleLikeFields"][] = "descripcion";
$tdataactividad_econ[".googleLikeFields"][] = "codigo";



$tdataactividad_econ[".tableType"] = "list";

$tdataactividad_econ[".printerPageOrientation"] = 0;
$tdataactividad_econ[".nPrinterPageScale"] = 100;

$tdataactividad_econ[".nPrinterSplitRecords"] = 40;

$tdataactividad_econ[".geocodingEnabled"] = false;










$tdataactividad_econ[".pageSize"] = 20;

$tdataactividad_econ[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataactividad_econ[".strOrderBy"] = $tstrOrderBy;

$tdataactividad_econ[".orderindexes"] = array();


$tdataactividad_econ[".sqlHead"] = "SELECT id_activ_econ,  	descripcion,  	codigo";
$tdataactividad_econ[".sqlFrom"] = "FROM \"public\".actividad_econ";
$tdataactividad_econ[".sqlWhereExpr"] = "";
$tdataactividad_econ[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataactividad_econ[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataactividad_econ[".arrGroupsPerPage"] = $arrGPP;

$tdataactividad_econ[".highlightSearchResults"] = true;

$tableKeysactividad_econ = array();
$tableKeysactividad_econ[] = "id_activ_econ";
$tdataactividad_econ[".Keys"] = $tableKeysactividad_econ;


$tdataactividad_econ[".hideMobileList"] = array();




//	id_activ_econ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_activ_econ";
	$fdata["GoodName"] = "id_activ_econ";
	$fdata["ownerTable"] = "public.actividad_econ";
	$fdata["Label"] = GetFieldLabel("public_actividad_econ","id_activ_econ");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_activ_econ";

		$fdata["sourceSingle"] = "id_activ_econ";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_activ_econ";

	
	
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


	$tdataactividad_econ["id_activ_econ"] = $fdata;
		$tdataactividad_econ[".searchableFields"][] = "id_activ_econ";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "public.actividad_econ";
	$fdata["Label"] = GetFieldLabel("public_actividad_econ","descripcion");
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataactividad_econ["descripcion"] = $fdata;
		$tdataactividad_econ[".searchableFields"][] = "descripcion";
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "public.actividad_econ";
	$fdata["Label"] = GetFieldLabel("public_actividad_econ","codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "codigo";

		$fdata["sourceSingle"] = "codigo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdataactividad_econ["codigo"] = $fdata;
		$tdataactividad_econ[".searchableFields"][] = "codigo";


$tables_data["public.actividad_econ"]=&$tdataactividad_econ;
$field_labels["public_actividad_econ"] = &$fieldLabelsactividad_econ;
$fieldToolTips["public_actividad_econ"] = &$fieldToolTipsactividad_econ;
$placeHolders["public_actividad_econ"] = &$placeHoldersactividad_econ;
$page_titles["public_actividad_econ"] = &$pageTitlesactividad_econ;


changeTextControlsToDate( "public.actividad_econ" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.actividad_econ"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.actividad_econ"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_actividad_econ()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_activ_econ,  	descripcion,  	codigo";
$proto0["m_strFrom"] = "FROM \"public\".actividad_econ";
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
	"m_strName" => "id_activ_econ",
	"m_strTable" => "public.actividad_econ",
	"m_srcTableName" => "public.actividad_econ"
));

$proto6["m_sql"] = "id_activ_econ";
$proto6["m_srcTableName"] = "public.actividad_econ";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "public.actividad_econ",
	"m_srcTableName" => "public.actividad_econ"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "public.actividad_econ";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "public.actividad_econ",
	"m_srcTableName" => "public.actividad_econ"
));

$proto10["m_sql"] = "codigo";
$proto10["m_srcTableName"] = "public.actividad_econ";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "public.actividad_econ";
$proto13["m_srcTableName"] = "public.actividad_econ";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_activ_econ";
$proto13["m_columns"][] = "descripcion";
$proto13["m_columns"][] = "codigo";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"public\".actividad_econ";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "public.actividad_econ";
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
$proto0["m_srcTableName"]="public.actividad_econ";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_actividad_econ = createSqlQuery_actividad_econ();


	
		;

			

$tdataactividad_econ[".sqlquery"] = $queryData_actividad_econ;



$tdataactividad_econ[".hasEvents"] = false;

?>
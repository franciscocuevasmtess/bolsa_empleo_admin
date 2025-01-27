<?php
$tdatabolsa_sexo = array();
$tdatabolsa_sexo[".searchableFields"] = array();
$tdatabolsa_sexo[".ShortName"] = "bolsa_sexo";
$tdatabolsa_sexo[".OwnerID"] = "";
$tdatabolsa_sexo[".OriginalTable"] = "bolsa_empleo.bolsa_sexo";


$tdatabolsa_sexo[".pagesByType"] = my_json_decode( "{}" );
$tdatabolsa_sexo[".originalPagesByType"] = $tdatabolsa_sexo[".pagesByType"];
$tdatabolsa_sexo[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatabolsa_sexo[".originalPages"] = $tdatabolsa_sexo[".pages"];
$tdatabolsa_sexo[".defaultPages"] = my_json_decode( "{}" );
$tdatabolsa_sexo[".originalDefaultPages"] = $tdatabolsa_sexo[".defaultPages"];

//	field labels
$fieldLabelsbolsa_sexo = array();
$fieldToolTipsbolsa_sexo = array();
$pageTitlesbolsa_sexo = array();
$placeHoldersbolsa_sexo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbolsa_sexo["Spanish"] = array();
	$fieldToolTipsbolsa_sexo["Spanish"] = array();
	$placeHoldersbolsa_sexo["Spanish"] = array();
	$pageTitlesbolsa_sexo["Spanish"] = array();
	$fieldLabelsbolsa_sexo["Spanish"]["bolsa_empleo_sexo_id"] = "Bolsa Empleo Sexo Id";
	$fieldToolTipsbolsa_sexo["Spanish"]["bolsa_empleo_sexo_id"] = "";
	$placeHoldersbolsa_sexo["Spanish"]["bolsa_empleo_sexo_id"] = "";
	$fieldLabelsbolsa_sexo["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsbolsa_sexo["Spanish"]["descripcion"] = "";
	$placeHoldersbolsa_sexo["Spanish"]["descripcion"] = "";
	$fieldLabelsbolsa_sexo["Spanish"]["letra_id"] = "Letra Id";
	$fieldToolTipsbolsa_sexo["Spanish"]["letra_id"] = "";
	$placeHoldersbolsa_sexo["Spanish"]["letra_id"] = "";
	if (count($fieldToolTipsbolsa_sexo["Spanish"]))
		$tdatabolsa_sexo[".isUseToolTips"] = true;
}


	$tdatabolsa_sexo[".NCSearch"] = true;



$tdatabolsa_sexo[".shortTableName"] = "bolsa_sexo";
$tdatabolsa_sexo[".nSecOptions"] = 0;

$tdatabolsa_sexo[".mainTableOwnerID"] = "";
$tdatabolsa_sexo[".entityType"] = 0;
$tdatabolsa_sexo[".connId"] = "eportal_at_192_168_70_170";


$tdatabolsa_sexo[".strOriginalTableName"] = "bolsa_empleo.bolsa_sexo";

	



$tdatabolsa_sexo[".showAddInPopup"] = false;

$tdatabolsa_sexo[".showEditInPopup"] = false;

$tdatabolsa_sexo[".showViewInPopup"] = false;

$tdatabolsa_sexo[".listAjax"] = false;
//	temporary
//$tdatabolsa_sexo[".listAjax"] = false;

	$tdatabolsa_sexo[".audit"] = true;

	$tdatabolsa_sexo[".locking"] = false;


$pages = $tdatabolsa_sexo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabolsa_sexo[".edit"] = true;
	$tdatabolsa_sexo[".afterEditAction"] = 1;
	$tdatabolsa_sexo[".closePopupAfterEdit"] = 1;
	$tdatabolsa_sexo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabolsa_sexo[".add"] = true;
$tdatabolsa_sexo[".afterAddAction"] = 1;
$tdatabolsa_sexo[".closePopupAfterAdd"] = 1;
$tdatabolsa_sexo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabolsa_sexo[".list"] = true;
}



$tdatabolsa_sexo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabolsa_sexo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabolsa_sexo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabolsa_sexo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabolsa_sexo[".printFriendly"] = true;
}



$tdatabolsa_sexo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabolsa_sexo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabolsa_sexo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabolsa_sexo[".isUseAjaxSuggest"] = true;



																																																						

$tdatabolsa_sexo[".ajaxCodeSnippetAdded"] = false;

$tdatabolsa_sexo[".buttonsAdded"] = false;

$tdatabolsa_sexo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabolsa_sexo[".isUseTimeForSearch"] = false;


$tdatabolsa_sexo[".badgeColor"] = "6493EA";


$tdatabolsa_sexo[".allSearchFields"] = array();
$tdatabolsa_sexo[".filterFields"] = array();
$tdatabolsa_sexo[".requiredSearchFields"] = array();

$tdatabolsa_sexo[".googleLikeFields"] = array();
$tdatabolsa_sexo[".googleLikeFields"][] = "bolsa_empleo_sexo_id";
$tdatabolsa_sexo[".googleLikeFields"][] = "descripcion";
$tdatabolsa_sexo[".googleLikeFields"][] = "letra_id";



$tdatabolsa_sexo[".tableType"] = "list";

$tdatabolsa_sexo[".printerPageOrientation"] = 0;
$tdatabolsa_sexo[".nPrinterPageScale"] = 100;

$tdatabolsa_sexo[".nPrinterSplitRecords"] = 40;

$tdatabolsa_sexo[".geocodingEnabled"] = false;










$tdatabolsa_sexo[".pageSize"] = 20;

$tdatabolsa_sexo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabolsa_sexo[".strOrderBy"] = $tstrOrderBy;

$tdatabolsa_sexo[".orderindexes"] = array();


$tdatabolsa_sexo[".sqlHead"] = "SELECT bolsa_empleo_sexo_id,  	descripcion,  	letra_id";
$tdatabolsa_sexo[".sqlFrom"] = "FROM bolsa_empleo.bolsa_sexo";
$tdatabolsa_sexo[".sqlWhereExpr"] = "";
$tdatabolsa_sexo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabolsa_sexo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabolsa_sexo[".arrGroupsPerPage"] = $arrGPP;

$tdatabolsa_sexo[".highlightSearchResults"] = true;

$tableKeysbolsa_sexo = array();
$tableKeysbolsa_sexo[] = "bolsa_empleo_sexo_id";
$tdatabolsa_sexo[".Keys"] = $tableKeysbolsa_sexo;


$tdatabolsa_sexo[".hideMobileList"] = array();




//	bolsa_empleo_sexo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "bolsa_empleo_sexo_id";
	$fdata["GoodName"] = "bolsa_empleo_sexo_id";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_sexo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_sexo","bolsa_empleo_sexo_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "bolsa_empleo_sexo_id";

		$fdata["sourceSingle"] = "bolsa_empleo_sexo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo_sexo_id";

	
	
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


	$tdatabolsa_sexo["bolsa_empleo_sexo_id"] = $fdata;
		$tdatabolsa_sexo[".searchableFields"][] = "bolsa_empleo_sexo_id";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_sexo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_sexo","descripcion");
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


	$tdatabolsa_sexo["descripcion"] = $fdata;
		$tdatabolsa_sexo[".searchableFields"][] = "descripcion";
//	letra_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "letra_id";
	$fdata["GoodName"] = "letra_id";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_sexo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_sexo","letra_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "letra_id";

		$fdata["sourceSingle"] = "letra_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "letra_id";

	
	
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


	$tdatabolsa_sexo["letra_id"] = $fdata;
		$tdatabolsa_sexo[".searchableFields"][] = "letra_id";


$tables_data["bolsa_empleo.bolsa_sexo"]=&$tdatabolsa_sexo;
$field_labels["bolsa_empleo_bolsa_sexo"] = &$fieldLabelsbolsa_sexo;
$fieldToolTips["bolsa_empleo_bolsa_sexo"] = &$fieldToolTipsbolsa_sexo;
$placeHolders["bolsa_empleo_bolsa_sexo"] = &$placeHoldersbolsa_sexo;
$page_titles["bolsa_empleo_bolsa_sexo"] = &$pageTitlesbolsa_sexo;


changeTextControlsToDate( "bolsa_empleo.bolsa_sexo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.bolsa_sexo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.bolsa_sexo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bolsa_sexo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bolsa_empleo_sexo_id,  	descripcion,  	letra_id";
$proto0["m_strFrom"] = "FROM bolsa_empleo.bolsa_sexo";
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
	"m_strName" => "bolsa_empleo_sexo_id",
	"m_strTable" => "bolsa_empleo.bolsa_sexo",
	"m_srcTableName" => "bolsa_empleo.bolsa_sexo"
));

$proto6["m_sql"] = "bolsa_empleo_sexo_id";
$proto6["m_srcTableName"] = "bolsa_empleo.bolsa_sexo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.bolsa_sexo",
	"m_srcTableName" => "bolsa_empleo.bolsa_sexo"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "bolsa_empleo.bolsa_sexo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "letra_id",
	"m_strTable" => "bolsa_empleo.bolsa_sexo",
	"m_srcTableName" => "bolsa_empleo.bolsa_sexo"
));

$proto10["m_sql"] = "letra_id";
$proto10["m_srcTableName"] = "bolsa_empleo.bolsa_sexo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "bolsa_empleo.bolsa_sexo";
$proto13["m_srcTableName"] = "bolsa_empleo.bolsa_sexo";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "bolsa_empleo_sexo_id";
$proto13["m_columns"][] = "descripcion";
$proto13["m_columns"][] = "letra_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "bolsa_empleo.bolsa_sexo";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "bolsa_empleo.bolsa_sexo";
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
$proto0["m_srcTableName"]="bolsa_empleo.bolsa_sexo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bolsa_sexo = createSqlQuery_bolsa_sexo();


	
		;

			

$tdatabolsa_sexo[".sqlquery"] = $queryData_bolsa_sexo;



$tdatabolsa_sexo[".hasEvents"] = false;

?>
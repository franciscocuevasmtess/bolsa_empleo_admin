<?php
$tdataempresa_bolsa_tipo = array();
$tdataempresa_bolsa_tipo[".searchableFields"] = array();
$tdataempresa_bolsa_tipo[".ShortName"] = "empresa_bolsa_tipo";
$tdataempresa_bolsa_tipo[".OwnerID"] = "";
$tdataempresa_bolsa_tipo[".OriginalTable"] = "bolsa_empleo.empresa_bolsa_tipo";


$tdataempresa_bolsa_tipo[".pagesByType"] = my_json_decode( "{}" );
$tdataempresa_bolsa_tipo[".originalPagesByType"] = $tdataempresa_bolsa_tipo[".pagesByType"];
$tdataempresa_bolsa_tipo[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataempresa_bolsa_tipo[".originalPages"] = $tdataempresa_bolsa_tipo[".pages"];
$tdataempresa_bolsa_tipo[".defaultPages"] = my_json_decode( "{}" );
$tdataempresa_bolsa_tipo[".originalDefaultPages"] = $tdataempresa_bolsa_tipo[".defaultPages"];

//	field labels
$fieldLabelsempresa_bolsa_tipo = array();
$fieldToolTipsempresa_bolsa_tipo = array();
$pageTitlesempresa_bolsa_tipo = array();
$placeHoldersempresa_bolsa_tipo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresa_bolsa_tipo["Spanish"] = array();
	$fieldToolTipsempresa_bolsa_tipo["Spanish"] = array();
	$placeHoldersempresa_bolsa_tipo["Spanish"] = array();
	$pageTitlesempresa_bolsa_tipo["Spanish"] = array();
	$fieldLabelsempresa_bolsa_tipo["Spanish"]["id_empresa_bolsa_tipo"] = "Id Empresa Bolsa Tipo";
	$fieldToolTipsempresa_bolsa_tipo["Spanish"]["id_empresa_bolsa_tipo"] = "";
	$placeHoldersempresa_bolsa_tipo["Spanish"]["id_empresa_bolsa_tipo"] = "";
	$fieldLabelsempresa_bolsa_tipo["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsempresa_bolsa_tipo["Spanish"]["descripcion"] = "";
	$placeHoldersempresa_bolsa_tipo["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsempresa_bolsa_tipo["Spanish"]))
		$tdataempresa_bolsa_tipo[".isUseToolTips"] = true;
}


	$tdataempresa_bolsa_tipo[".NCSearch"] = true;



$tdataempresa_bolsa_tipo[".shortTableName"] = "empresa_bolsa_tipo";
$tdataempresa_bolsa_tipo[".nSecOptions"] = 0;

$tdataempresa_bolsa_tipo[".mainTableOwnerID"] = "";
$tdataempresa_bolsa_tipo[".entityType"] = 0;
$tdataempresa_bolsa_tipo[".connId"] = "eportal_at_192_168_70_170";


$tdataempresa_bolsa_tipo[".strOriginalTableName"] = "bolsa_empleo.empresa_bolsa_tipo";

	



$tdataempresa_bolsa_tipo[".showAddInPopup"] = false;

$tdataempresa_bolsa_tipo[".showEditInPopup"] = false;

$tdataempresa_bolsa_tipo[".showViewInPopup"] = false;

$tdataempresa_bolsa_tipo[".listAjax"] = false;
//	temporary
//$tdataempresa_bolsa_tipo[".listAjax"] = false;

	$tdataempresa_bolsa_tipo[".audit"] = true;

	$tdataempresa_bolsa_tipo[".locking"] = false;


$pages = $tdataempresa_bolsa_tipo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataempresa_bolsa_tipo[".edit"] = true;
	$tdataempresa_bolsa_tipo[".afterEditAction"] = 1;
	$tdataempresa_bolsa_tipo[".closePopupAfterEdit"] = 1;
	$tdataempresa_bolsa_tipo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataempresa_bolsa_tipo[".add"] = true;
$tdataempresa_bolsa_tipo[".afterAddAction"] = 1;
$tdataempresa_bolsa_tipo[".closePopupAfterAdd"] = 1;
$tdataempresa_bolsa_tipo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataempresa_bolsa_tipo[".list"] = true;
}



$tdataempresa_bolsa_tipo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataempresa_bolsa_tipo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataempresa_bolsa_tipo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataempresa_bolsa_tipo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataempresa_bolsa_tipo[".printFriendly"] = true;
}



$tdataempresa_bolsa_tipo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataempresa_bolsa_tipo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataempresa_bolsa_tipo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataempresa_bolsa_tipo[".isUseAjaxSuggest"] = true;



																																																						

$tdataempresa_bolsa_tipo[".ajaxCodeSnippetAdded"] = false;

$tdataempresa_bolsa_tipo[".buttonsAdded"] = false;

$tdataempresa_bolsa_tipo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresa_bolsa_tipo[".isUseTimeForSearch"] = false;


$tdataempresa_bolsa_tipo[".badgeColor"] = "2F4F4F";


$tdataempresa_bolsa_tipo[".allSearchFields"] = array();
$tdataempresa_bolsa_tipo[".filterFields"] = array();
$tdataempresa_bolsa_tipo[".requiredSearchFields"] = array();

$tdataempresa_bolsa_tipo[".googleLikeFields"] = array();
$tdataempresa_bolsa_tipo[".googleLikeFields"][] = "id_empresa_bolsa_tipo";
$tdataempresa_bolsa_tipo[".googleLikeFields"][] = "descripcion";



$tdataempresa_bolsa_tipo[".tableType"] = "list";

$tdataempresa_bolsa_tipo[".printerPageOrientation"] = 0;
$tdataempresa_bolsa_tipo[".nPrinterPageScale"] = 100;

$tdataempresa_bolsa_tipo[".nPrinterSplitRecords"] = 40;

$tdataempresa_bolsa_tipo[".geocodingEnabled"] = false;










$tdataempresa_bolsa_tipo[".pageSize"] = 20;

$tdataempresa_bolsa_tipo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataempresa_bolsa_tipo[".strOrderBy"] = $tstrOrderBy;

$tdataempresa_bolsa_tipo[".orderindexes"] = array();


$tdataempresa_bolsa_tipo[".sqlHead"] = "SELECT id_empresa_bolsa_tipo,  	descripcion";
$tdataempresa_bolsa_tipo[".sqlFrom"] = "FROM bolsa_empleo.empresa_bolsa_tipo";
$tdataempresa_bolsa_tipo[".sqlWhereExpr"] = "";
$tdataempresa_bolsa_tipo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresa_bolsa_tipo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresa_bolsa_tipo[".arrGroupsPerPage"] = $arrGPP;

$tdataempresa_bolsa_tipo[".highlightSearchResults"] = true;

$tableKeysempresa_bolsa_tipo = array();
$tableKeysempresa_bolsa_tipo[] = "id_empresa_bolsa_tipo";
$tdataempresa_bolsa_tipo[".Keys"] = $tableKeysempresa_bolsa_tipo;


$tdataempresa_bolsa_tipo[".hideMobileList"] = array();




//	id_empresa_bolsa_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_empresa_bolsa_tipo";
	$fdata["GoodName"] = "id_empresa_bolsa_tipo";
	$fdata["ownerTable"] = "bolsa_empleo.empresa_bolsa_tipo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_tipo","id_empresa_bolsa_tipo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_empresa_bolsa_tipo";

		$fdata["sourceSingle"] = "id_empresa_bolsa_tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_empresa_bolsa_tipo";

	
	
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


	$tdataempresa_bolsa_tipo["id_empresa_bolsa_tipo"] = $fdata;
		$tdataempresa_bolsa_tipo[".searchableFields"][] = "id_empresa_bolsa_tipo";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.empresa_bolsa_tipo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_tipo","descripcion");
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


	$tdataempresa_bolsa_tipo["descripcion"] = $fdata;
		$tdataempresa_bolsa_tipo[".searchableFields"][] = "descripcion";


$tables_data["bolsa_empleo.empresa_bolsa_tipo"]=&$tdataempresa_bolsa_tipo;
$field_labels["bolsa_empleo_empresa_bolsa_tipo"] = &$fieldLabelsempresa_bolsa_tipo;
$fieldToolTips["bolsa_empleo_empresa_bolsa_tipo"] = &$fieldToolTipsempresa_bolsa_tipo;
$placeHolders["bolsa_empleo_empresa_bolsa_tipo"] = &$placeHoldersempresa_bolsa_tipo;
$page_titles["bolsa_empleo_empresa_bolsa_tipo"] = &$pageTitlesempresa_bolsa_tipo;


changeTextControlsToDate( "bolsa_empleo.empresa_bolsa_tipo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.empresa_bolsa_tipo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.empresa_bolsa_tipo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_empresa_bolsa_tipo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_empresa_bolsa_tipo,  	descripcion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.empresa_bolsa_tipo";
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
	"m_strName" => "id_empresa_bolsa_tipo",
	"m_strTable" => "bolsa_empleo.empresa_bolsa_tipo",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_tipo"
));

$proto6["m_sql"] = "id_empresa_bolsa_tipo";
$proto6["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_tipo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.empresa_bolsa_tipo",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_tipo"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_tipo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.empresa_bolsa_tipo";
$proto11["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_tipo";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_empresa_bolsa_tipo";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.empresa_bolsa_tipo";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_tipo";
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
$proto0["m_srcTableName"]="bolsa_empleo.empresa_bolsa_tipo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresa_bolsa_tipo = createSqlQuery_empresa_bolsa_tipo();


	
		;

		

$tdataempresa_bolsa_tipo[".sqlquery"] = $queryData_empresa_bolsa_tipo;



$tdataempresa_bolsa_tipo[".hasEvents"] = false;

?>
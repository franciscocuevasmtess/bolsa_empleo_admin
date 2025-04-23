<?php
$tdataarchivos_relacionados = array();
$tdataarchivos_relacionados[".searchableFields"] = array();
$tdataarchivos_relacionados[".ShortName"] = "archivos_relacionados";
$tdataarchivos_relacionados[".OwnerID"] = "";
$tdataarchivos_relacionados[".OriginalTable"] = "bolsa_empleo.archivos_relacionados";


$tdataarchivos_relacionados[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataarchivos_relacionados[".originalPagesByType"] = $tdataarchivos_relacionados[".pagesByType"];
$tdataarchivos_relacionados[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataarchivos_relacionados[".originalPages"] = $tdataarchivos_relacionados[".pages"];
$tdataarchivos_relacionados[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataarchivos_relacionados[".originalDefaultPages"] = $tdataarchivos_relacionados[".defaultPages"];

//	field labels
$fieldLabelsarchivos_relacionados = array();
$fieldToolTipsarchivos_relacionados = array();
$pageTitlesarchivos_relacionados = array();
$placeHoldersarchivos_relacionados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsarchivos_relacionados["Spanish"] = array();
	$fieldToolTipsarchivos_relacionados["Spanish"] = array();
	$placeHoldersarchivos_relacionados["Spanish"] = array();
	$pageTitlesarchivos_relacionados["Spanish"] = array();
	$fieldLabelsarchivos_relacionados["Spanish"]["person_id"] = "Persona";
	$fieldToolTipsarchivos_relacionados["Spanish"]["person_id"] = "";
	$placeHoldersarchivos_relacionados["Spanish"]["person_id"] = "";
	$fieldLabelsarchivos_relacionados["Spanish"]["id_archivo"] = "Archivo";
	$fieldToolTipsarchivos_relacionados["Spanish"]["id_archivo"] = "";
	$placeHoldersarchivos_relacionados["Spanish"]["id_archivo"] = "";
	$fieldLabelsarchivos_relacionados["Spanish"]["id_postulacion"] = "Postulación";
	$fieldToolTipsarchivos_relacionados["Spanish"]["id_postulacion"] = "";
	$placeHoldersarchivos_relacionados["Spanish"]["id_postulacion"] = "";
	$fieldLabelsarchivos_relacionados["Spanish"]["instante"] = "Instante";
	$fieldToolTipsarchivos_relacionados["Spanish"]["instante"] = "";
	$placeHoldersarchivos_relacionados["Spanish"]["instante"] = "";
	if (count($fieldToolTipsarchivos_relacionados["Spanish"]))
		$tdataarchivos_relacionados[".isUseToolTips"] = true;
}


	$tdataarchivos_relacionados[".NCSearch"] = true;



$tdataarchivos_relacionados[".shortTableName"] = "archivos_relacionados";
$tdataarchivos_relacionados[".nSecOptions"] = 0;

$tdataarchivos_relacionados[".mainTableOwnerID"] = "";
$tdataarchivos_relacionados[".entityType"] = 0;
$tdataarchivos_relacionados[".connId"] = "eportal_at_192_168_70_170";


$tdataarchivos_relacionados[".strOriginalTableName"] = "bolsa_empleo.archivos_relacionados";

	



$tdataarchivos_relacionados[".showAddInPopup"] = false;

$tdataarchivos_relacionados[".showEditInPopup"] = false;

$tdataarchivos_relacionados[".showViewInPopup"] = false;

$tdataarchivos_relacionados[".listAjax"] = false;
//	temporary
//$tdataarchivos_relacionados[".listAjax"] = false;

	$tdataarchivos_relacionados[".audit"] = false;

	$tdataarchivos_relacionados[".locking"] = false;


$pages = $tdataarchivos_relacionados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataarchivos_relacionados[".edit"] = true;
	$tdataarchivos_relacionados[".afterEditAction"] = 1;
	$tdataarchivos_relacionados[".closePopupAfterEdit"] = 1;
	$tdataarchivos_relacionados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataarchivos_relacionados[".add"] = true;
$tdataarchivos_relacionados[".afterAddAction"] = 1;
$tdataarchivos_relacionados[".closePopupAfterAdd"] = 1;
$tdataarchivos_relacionados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataarchivos_relacionados[".list"] = true;
}



$tdataarchivos_relacionados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataarchivos_relacionados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataarchivos_relacionados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataarchivos_relacionados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataarchivos_relacionados[".printFriendly"] = true;
}



$tdataarchivos_relacionados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataarchivos_relacionados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataarchivos_relacionados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataarchivos_relacionados[".isUseAjaxSuggest"] = true;



																																																																								

$tdataarchivos_relacionados[".ajaxCodeSnippetAdded"] = false;

$tdataarchivos_relacionados[".buttonsAdded"] = false;

$tdataarchivos_relacionados[".addPageEvents"] = false;

// use timepicker for search panel
$tdataarchivos_relacionados[".isUseTimeForSearch"] = false;


$tdataarchivos_relacionados[".badgeColor"] = "3cb371";


$tdataarchivos_relacionados[".allSearchFields"] = array();
$tdataarchivos_relacionados[".filterFields"] = array();
$tdataarchivos_relacionados[".requiredSearchFields"] = array();

$tdataarchivos_relacionados[".googleLikeFields"] = array();
$tdataarchivos_relacionados[".googleLikeFields"][] = "person_id";
$tdataarchivos_relacionados[".googleLikeFields"][] = "id_archivo";
$tdataarchivos_relacionados[".googleLikeFields"][] = "id_postulacion";
$tdataarchivos_relacionados[".googleLikeFields"][] = "instante";



$tdataarchivos_relacionados[".tableType"] = "list";

$tdataarchivos_relacionados[".printerPageOrientation"] = 0;
$tdataarchivos_relacionados[".nPrinterPageScale"] = 100;

$tdataarchivos_relacionados[".nPrinterSplitRecords"] = 40;

$tdataarchivos_relacionados[".geocodingEnabled"] = false;










$tdataarchivos_relacionados[".pageSize"] = 20;

$tdataarchivos_relacionados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataarchivos_relacionados[".strOrderBy"] = $tstrOrderBy;

$tdataarchivos_relacionados[".orderindexes"] = array();


$tdataarchivos_relacionados[".sqlHead"] = "SELECT person_id,  	id_archivo,  	id_postulacion,  	instante";
$tdataarchivos_relacionados[".sqlFrom"] = "FROM bolsa_empleo.archivos_relacionados";
$tdataarchivos_relacionados[".sqlWhereExpr"] = "";
$tdataarchivos_relacionados[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataarchivos_relacionados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataarchivos_relacionados[".arrGroupsPerPage"] = $arrGPP;

$tdataarchivos_relacionados[".highlightSearchResults"] = true;

$tableKeysarchivos_relacionados = array();
$tableKeysarchivos_relacionados[] = "person_id";
$tableKeysarchivos_relacionados[] = "id_archivo";
$tdataarchivos_relacionados[".Keys"] = $tableKeysarchivos_relacionados;


$tdataarchivos_relacionados[".hideMobileList"] = array();




//	person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "person_id";
	$fdata["GoodName"] = "person_id";
	$fdata["ownerTable"] = "bolsa_empleo.archivos_relacionados";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_archivos_relacionados","person_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "person_id";

		$fdata["sourceSingle"] = "person_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_id";

	
	
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
	$edata["LookupTable"] = "eportal.persons";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "nombre || ' ' || apellidos";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataarchivos_relacionados["person_id"] = $fdata;
		$tdataarchivos_relacionados[".searchableFields"][] = "person_id";
//	id_archivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_archivo";
	$fdata["GoodName"] = "id_archivo";
	$fdata["ownerTable"] = "bolsa_empleo.archivos_relacionados";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_archivos_relacionados","id_archivo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_archivo";

		$fdata["sourceSingle"] = "id_archivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_archivo";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.archivo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_archivo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "archivo";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataarchivos_relacionados["id_archivo"] = $fdata;
		$tdataarchivos_relacionados[".searchableFields"][] = "id_archivo";
//	id_postulacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_postulacion";
	$fdata["GoodName"] = "id_postulacion";
	$fdata["ownerTable"] = "bolsa_empleo.archivos_relacionados";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_archivos_relacionados","id_postulacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_postulacion";

		$fdata["sourceSingle"] = "id_postulacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_postulacion";

	
	
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


	$tdataarchivos_relacionados["id_postulacion"] = $fdata;
		$tdataarchivos_relacionados[".searchableFields"][] = "id_postulacion";
//	instante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "instante";
	$fdata["GoodName"] = "instante";
	$fdata["ownerTable"] = "bolsa_empleo.archivos_relacionados";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_archivos_relacionados","instante");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "instante";

		$fdata["sourceSingle"] = "instante";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "instante";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataarchivos_relacionados["instante"] = $fdata;
		$tdataarchivos_relacionados[".searchableFields"][] = "instante";


$tables_data["bolsa_empleo.archivos_relacionados"]=&$tdataarchivos_relacionados;
$field_labels["bolsa_empleo_archivos_relacionados"] = &$fieldLabelsarchivos_relacionados;
$fieldToolTips["bolsa_empleo_archivos_relacionados"] = &$fieldToolTipsarchivos_relacionados;
$placeHolders["bolsa_empleo_archivos_relacionados"] = &$placeHoldersarchivos_relacionados;
$page_titles["bolsa_empleo_archivos_relacionados"] = &$pageTitlesarchivos_relacionados;


changeTextControlsToDate( "bolsa_empleo.archivos_relacionados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.archivos_relacionados"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.archivos_relacionados"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_archivos_relacionados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "person_id,  	id_archivo,  	id_postulacion,  	instante";
$proto0["m_strFrom"] = "FROM bolsa_empleo.archivos_relacionados";
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
	"m_strName" => "person_id",
	"m_strTable" => "bolsa_empleo.archivos_relacionados",
	"m_srcTableName" => "bolsa_empleo.archivos_relacionados"
));

$proto6["m_sql"] = "person_id";
$proto6["m_srcTableName"] = "bolsa_empleo.archivos_relacionados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_archivo",
	"m_strTable" => "bolsa_empleo.archivos_relacionados",
	"m_srcTableName" => "bolsa_empleo.archivos_relacionados"
));

$proto8["m_sql"] = "id_archivo";
$proto8["m_srcTableName"] = "bolsa_empleo.archivos_relacionados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.archivos_relacionados",
	"m_srcTableName" => "bolsa_empleo.archivos_relacionados"
));

$proto10["m_sql"] = "id_postulacion";
$proto10["m_srcTableName"] = "bolsa_empleo.archivos_relacionados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "instante",
	"m_strTable" => "bolsa_empleo.archivos_relacionados",
	"m_srcTableName" => "bolsa_empleo.archivos_relacionados"
));

$proto12["m_sql"] = "instante";
$proto12["m_srcTableName"] = "bolsa_empleo.archivos_relacionados";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "bolsa_empleo.archivos_relacionados";
$proto15["m_srcTableName"] = "bolsa_empleo.archivos_relacionados";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "person_id";
$proto15["m_columns"][] = "id_archivo";
$proto15["m_columns"][] = "id_postulacion";
$proto15["m_columns"][] = "instante";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "bolsa_empleo.archivos_relacionados";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "bolsa_empleo.archivos_relacionados";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.archivos_relacionados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_archivos_relacionados = createSqlQuery_archivos_relacionados();


	
		;

				

$tdataarchivos_relacionados[".sqlquery"] = $queryData_archivos_relacionados;



$tdataarchivos_relacionados[".hasEvents"] = false;

?>
<?php
$tdataempresas_bolsa1 = array();
$tdataempresas_bolsa1[".searchableFields"] = array();
$tdataempresas_bolsa1[".ShortName"] = "empresas_bolsa1";
$tdataempresas_bolsa1[".OwnerID"] = "";
$tdataempresas_bolsa1[".OriginalTable"] = "bolsa_empleo.empresas_bolsa";


$tdataempresas_bolsa1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataempresas_bolsa1[".originalPagesByType"] = $tdataempresas_bolsa1[".pagesByType"];
$tdataempresas_bolsa1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataempresas_bolsa1[".originalPages"] = $tdataempresas_bolsa1[".pages"];
$tdataempresas_bolsa1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataempresas_bolsa1[".originalDefaultPages"] = $tdataempresas_bolsa1[".defaultPages"];

//	field labels
$fieldLabelsempresas_bolsa1 = array();
$fieldToolTipsempresas_bolsa1 = array();
$pageTitlesempresas_bolsa1 = array();
$placeHoldersempresas_bolsa1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresas_bolsa1["Spanish"] = array();
	$fieldToolTipsempresas_bolsa1["Spanish"] = array();
	$placeHoldersempresas_bolsa1["Spanish"] = array();
	$pageTitlesempresas_bolsa1["Spanish"] = array();
	$fieldLabelsempresas_bolsa1["Spanish"]["id"] = "Id";
	$fieldToolTipsempresas_bolsa1["Spanish"]["id"] = "";
	$placeHoldersempresas_bolsa1["Spanish"]["id"] = "";
	$fieldLabelsempresas_bolsa1["Spanish"]["ruc"] = "Ruc";
	$fieldToolTipsempresas_bolsa1["Spanish"]["ruc"] = "";
	$placeHoldersempresas_bolsa1["Spanish"]["ruc"] = "";
	$fieldLabelsempresas_bolsa1["Spanish"]["legal"] = "Legal";
	$fieldToolTipsempresas_bolsa1["Spanish"]["legal"] = "";
	$placeHoldersempresas_bolsa1["Spanish"]["legal"] = "";
	$fieldLabelsempresas_bolsa1["Spanish"]["fantasy"] = "Fantasy";
	$fieldToolTipsempresas_bolsa1["Spanish"]["fantasy"] = "";
	$placeHoldersempresas_bolsa1["Spanish"]["fantasy"] = "";
	$fieldLabelsempresas_bolsa1["Spanish"]["fecha_creacion"] = "Fecha Creacion";
	$fieldToolTipsempresas_bolsa1["Spanish"]["fecha_creacion"] = "";
	$placeHoldersempresas_bolsa1["Spanish"]["fecha_creacion"] = "";
	$fieldLabelsempresas_bolsa1["Spanish"]["id_estado"] = "Id Estado";
	$fieldToolTipsempresas_bolsa1["Spanish"]["id_estado"] = "";
	$placeHoldersempresas_bolsa1["Spanish"]["id_estado"] = "";
	$fieldLabelsempresas_bolsa1["Spanish"]["id_rubro"] = "Id Rubro";
	$fieldToolTipsempresas_bolsa1["Spanish"]["id_rubro"] = "";
	$placeHoldersempresas_bolsa1["Spanish"]["id_rubro"] = "";
	$fieldLabelsempresas_bolsa1["Spanish"]["color"] = "Color";
	$fieldToolTipsempresas_bolsa1["Spanish"]["color"] = "";
	$placeHoldersempresas_bolsa1["Spanish"]["color"] = "";
	$fieldLabelsempresas_bolsa1["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsempresas_bolsa1["Spanish"]["descripcion"] = "";
	$placeHoldersempresas_bolsa1["Spanish"]["descripcion"] = "";
	$fieldLabelsempresas_bolsa1["Spanish"]["id1"] = "Id1";
	$fieldToolTipsempresas_bolsa1["Spanish"]["id1"] = "";
	$placeHoldersempresas_bolsa1["Spanish"]["id1"] = "";
	if (count($fieldToolTipsempresas_bolsa1["Spanish"]))
		$tdataempresas_bolsa1[".isUseToolTips"] = true;
}


	$tdataempresas_bolsa1[".NCSearch"] = true;



$tdataempresas_bolsa1[".shortTableName"] = "empresas_bolsa1";
$tdataempresas_bolsa1[".nSecOptions"] = 0;

$tdataempresas_bolsa1[".mainTableOwnerID"] = "";
$tdataempresas_bolsa1[".entityType"] = 1;
$tdataempresas_bolsa1[".connId"] = "eportal_at_192_168_70_170";


$tdataempresas_bolsa1[".strOriginalTableName"] = "bolsa_empleo.empresas_bolsa";

	



$tdataempresas_bolsa1[".showAddInPopup"] = false;

$tdataempresas_bolsa1[".showEditInPopup"] = false;

$tdataempresas_bolsa1[".showViewInPopup"] = false;

$tdataempresas_bolsa1[".listAjax"] = false;
//	temporary
//$tdataempresas_bolsa1[".listAjax"] = false;

	$tdataempresas_bolsa1[".audit"] = true;

	$tdataempresas_bolsa1[".locking"] = false;


$pages = $tdataempresas_bolsa1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataempresas_bolsa1[".edit"] = true;
	$tdataempresas_bolsa1[".afterEditAction"] = 1;
	$tdataempresas_bolsa1[".closePopupAfterEdit"] = 1;
	$tdataempresas_bolsa1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataempresas_bolsa1[".add"] = true;
$tdataempresas_bolsa1[".afterAddAction"] = 1;
$tdataempresas_bolsa1[".closePopupAfterAdd"] = 1;
$tdataempresas_bolsa1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataempresas_bolsa1[".list"] = true;
}



$tdataempresas_bolsa1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataempresas_bolsa1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataempresas_bolsa1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataempresas_bolsa1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataempresas_bolsa1[".printFriendly"] = true;
}



$tdataempresas_bolsa1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataempresas_bolsa1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataempresas_bolsa1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataempresas_bolsa1[".isUseAjaxSuggest"] = true;



																																																						

$tdataempresas_bolsa1[".ajaxCodeSnippetAdded"] = false;

$tdataempresas_bolsa1[".buttonsAdded"] = false;

$tdataempresas_bolsa1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresas_bolsa1[".isUseTimeForSearch"] = false;


$tdataempresas_bolsa1[".badgeColor"] = "1E90FF";


$tdataempresas_bolsa1[".allSearchFields"] = array();
$tdataempresas_bolsa1[".filterFields"] = array();
$tdataempresas_bolsa1[".requiredSearchFields"] = array();

$tdataempresas_bolsa1[".googleLikeFields"] = array();
$tdataempresas_bolsa1[".googleLikeFields"][] = "id";
$tdataempresas_bolsa1[".googleLikeFields"][] = "ruc";
$tdataempresas_bolsa1[".googleLikeFields"][] = "legal";
$tdataempresas_bolsa1[".googleLikeFields"][] = "fantasy";
$tdataempresas_bolsa1[".googleLikeFields"][] = "fecha_creacion";
$tdataempresas_bolsa1[".googleLikeFields"][] = "id_estado";
$tdataempresas_bolsa1[".googleLikeFields"][] = "id_rubro";
$tdataempresas_bolsa1[".googleLikeFields"][] = "color";
$tdataempresas_bolsa1[".googleLikeFields"][] = "descripcion";
$tdataempresas_bolsa1[".googleLikeFields"][] = "id1";



$tdataempresas_bolsa1[".tableType"] = "list";

$tdataempresas_bolsa1[".printerPageOrientation"] = 0;
$tdataempresas_bolsa1[".nPrinterPageScale"] = 100;

$tdataempresas_bolsa1[".nPrinterSplitRecords"] = 40;

$tdataempresas_bolsa1[".geocodingEnabled"] = false;










$tdataempresas_bolsa1[".pageSize"] = 20;

$tdataempresas_bolsa1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataempresas_bolsa1[".strOrderBy"] = $tstrOrderBy;

$tdataempresas_bolsa1[".orderindexes"] = array();


$tdataempresas_bolsa1[".sqlHead"] = "SELECT bolsa_empleo.empresas_bolsa.id,  bolsa_empleo.empresas_bolsa.ruc,  bolsa_empleo.empresas_bolsa.legal,  bolsa_empleo.empresas_bolsa.fantasy,  bolsa_empleo.empresas_bolsa.fecha_creacion,  bolsa_empleo.empresas_bolsa.id_estado,  bolsa_empleo.empresas_bolsa.id_rubro,  bolsa_empleo.empresas_bolsa.color,  \"public\".actividad_econ.descripcion,  bolsa_empleo.empresas_bolsa_sucursales.id AS id1";
$tdataempresas_bolsa1[".sqlFrom"] = "FROM bolsa_empleo.empresas_bolsa  INNER JOIN \"public\".actividad_econ ON bolsa_empleo.empresas_bolsa.id_rubro = \"public\".actividad_econ.id_activ_econ  LEFT OUTER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.empresas_bolsa.id = bolsa_empleo.empresas_bolsa_sucursales.empresas_bolsa_id AND bolsa_empleo.empresas_bolsa.ruc = bolsa_empleo.empresas_bolsa_sucursales.ruc";
$tdataempresas_bolsa1[".sqlWhereExpr"] = "";
$tdataempresas_bolsa1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresas_bolsa1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresas_bolsa1[".arrGroupsPerPage"] = $arrGPP;

$tdataempresas_bolsa1[".highlightSearchResults"] = true;

$tableKeysempresas_bolsa1 = array();
$tableKeysempresas_bolsa1[] = "id";
$tdataempresas_bolsa1[".Keys"] = $tableKeysempresas_bolsa1;


$tdataempresas_bolsa1[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa1","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa.id";

	
	
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


	$tdataempresas_bolsa1["id"] = $fdata;
		$tdataempresas_bolsa1[".searchableFields"][] = "id";
//	ruc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ruc";
	$fdata["GoodName"] = "ruc";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa1","ruc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ruc";

		$fdata["sourceSingle"] = "ruc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa.ruc";

	
	
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


	$tdataempresas_bolsa1["ruc"] = $fdata;
		$tdataempresas_bolsa1[".searchableFields"][] = "ruc";
//	legal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "legal";
	$fdata["GoodName"] = "legal";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa1","legal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "legal";

		$fdata["sourceSingle"] = "legal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa.legal";

	
	
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


	$tdataempresas_bolsa1["legal"] = $fdata;
		$tdataempresas_bolsa1[".searchableFields"][] = "legal";
//	fantasy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fantasy";
	$fdata["GoodName"] = "fantasy";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa1","fantasy");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fantasy";

		$fdata["sourceSingle"] = "fantasy";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa.fantasy";

	
	
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


	$tdataempresas_bolsa1["fantasy"] = $fdata;
		$tdataempresas_bolsa1[".searchableFields"][] = "fantasy";
//	fecha_creacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_creacion";
	$fdata["GoodName"] = "fecha_creacion";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa1","fecha_creacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_creacion";

		$fdata["sourceSingle"] = "fecha_creacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa.fecha_creacion";

	
	
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


	$tdataempresas_bolsa1["fecha_creacion"] = $fdata;
		$tdataempresas_bolsa1[".searchableFields"][] = "fecha_creacion";
//	id_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id_estado";
	$fdata["GoodName"] = "id_estado";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa1","id_estado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_estado";

		$fdata["sourceSingle"] = "id_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa.id_estado";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "bolsa_empleo.empresa_estado";
	$edata["LookupConnId"] = "eportal_at_192_168_70_170";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_empresa_estado";
	$edata["LinkFieldType"] = 2;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdataempresas_bolsa1["id_estado"] = $fdata;
		$tdataempresas_bolsa1[".searchableFields"][] = "id_estado";
//	id_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_rubro";
	$fdata["GoodName"] = "id_rubro";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa1","id_rubro");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_rubro";

		$fdata["sourceSingle"] = "id_rubro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa.id_rubro";

	
	
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


	$tdataempresas_bolsa1["id_rubro"] = $fdata;
		$tdataempresas_bolsa1[".searchableFields"][] = "id_rubro";
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa1","color");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "color";

		$fdata["sourceSingle"] = "color";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa.color";

	
	
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


	$tdataempresas_bolsa1["color"] = $fdata;
		$tdataempresas_bolsa1[".searchableFields"][] = "color";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "public.actividad_econ";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa1","descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".actividad_econ.descripcion";

	
	
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


	$tdataempresas_bolsa1["descripcion"] = $fdata;
		$tdataempresas_bolsa1[".searchableFields"][] = "descripcion";
//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa1","id1");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
	
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


	$tdataempresas_bolsa1["id1"] = $fdata;
		$tdataempresas_bolsa1[".searchableFields"][] = "id1";


$tables_data["bolsa_empleo.empresas_bolsa1"]=&$tdataempresas_bolsa1;
$field_labels["bolsa_empleo_empresas_bolsa1"] = &$fieldLabelsempresas_bolsa1;
$fieldToolTips["bolsa_empleo_empresas_bolsa1"] = &$fieldToolTipsempresas_bolsa1;
$placeHolders["bolsa_empleo_empresas_bolsa1"] = &$placeHoldersempresas_bolsa1;
$page_titles["bolsa_empleo_empresas_bolsa1"] = &$pageTitlesempresas_bolsa1;


changeTextControlsToDate( "bolsa_empleo.empresas_bolsa1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.empresas_bolsa1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.empresas_bolsa1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_empresas_bolsa1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bolsa_empleo.empresas_bolsa.id,  bolsa_empleo.empresas_bolsa.ruc,  bolsa_empleo.empresas_bolsa.legal,  bolsa_empleo.empresas_bolsa.fantasy,  bolsa_empleo.empresas_bolsa.fecha_creacion,  bolsa_empleo.empresas_bolsa.id_estado,  bolsa_empleo.empresas_bolsa.id_rubro,  bolsa_empleo.empresas_bolsa.color,  \"public\".actividad_econ.descripcion,  bolsa_empleo.empresas_bolsa_sucursales.id AS id1";
$proto0["m_strFrom"] = "FROM bolsa_empleo.empresas_bolsa  INNER JOIN \"public\".actividad_econ ON bolsa_empleo.empresas_bolsa.id_rubro = \"public\".actividad_econ.id_activ_econ  LEFT OUTER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.empresas_bolsa.id = bolsa_empleo.empresas_bolsa_sucursales.empresas_bolsa_id AND bolsa_empleo.empresas_bolsa.ruc = bolsa_empleo.empresas_bolsa_sucursales.ruc";
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
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa1"
));

$proto6["m_sql"] = "bolsa_empleo.empresas_bolsa.id";
$proto6["m_srcTableName"] = "bolsa_empleo.empresas_bolsa1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa1"
));

$proto8["m_sql"] = "bolsa_empleo.empresas_bolsa.ruc";
$proto8["m_srcTableName"] = "bolsa_empleo.empresas_bolsa1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "legal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa1"
));

$proto10["m_sql"] = "bolsa_empleo.empresas_bolsa.legal";
$proto10["m_srcTableName"] = "bolsa_empleo.empresas_bolsa1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fantasy",
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa1"
));

$proto12["m_sql"] = "bolsa_empleo.empresas_bolsa.fantasy";
$proto12["m_srcTableName"] = "bolsa_empleo.empresas_bolsa1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_creacion",
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa1"
));

$proto14["m_sql"] = "bolsa_empleo.empresas_bolsa.fecha_creacion";
$proto14["m_srcTableName"] = "bolsa_empleo.empresas_bolsa1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id_estado",
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa1"
));

$proto16["m_sql"] = "bolsa_empleo.empresas_bolsa.id_estado";
$proto16["m_srcTableName"] = "bolsa_empleo.empresas_bolsa1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_rubro",
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa1"
));

$proto18["m_sql"] = "bolsa_empleo.empresas_bolsa.id_rubro";
$proto18["m_srcTableName"] = "bolsa_empleo.empresas_bolsa1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa1"
));

$proto20["m_sql"] = "bolsa_empleo.empresas_bolsa.color";
$proto20["m_srcTableName"] = "bolsa_empleo.empresas_bolsa1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "public.actividad_econ",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa1"
));

$proto22["m_sql"] = "\"public\".actividad_econ.descripcion";
$proto22["m_srcTableName"] = "bolsa_empleo.empresas_bolsa1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa1"
));

$proto24["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id";
$proto24["m_srcTableName"] = "bolsa_empleo.empresas_bolsa1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "id1";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "bolsa_empleo.empresas_bolsa";
$proto27["m_srcTableName"] = "bolsa_empleo.empresas_bolsa1";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "ruc";
$proto27["m_columns"][] = "legal";
$proto27["m_columns"][] = "fantasy";
$proto27["m_columns"][] = "fecha_creacion";
$proto27["m_columns"][] = "id_estado";
$proto27["m_columns"][] = "id_rubro";
$proto27["m_columns"][] = "color";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "bolsa_empleo.empresas_bolsa";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "bolsa_empleo.empresas_bolsa1";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_INNERJOIN";
			$proto31=array();
$proto31["m_strName"] = "public.actividad_econ";
$proto31["m_srcTableName"] = "bolsa_empleo.empresas_bolsa1";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id_activ_econ";
$proto31["m_columns"][] = "descripcion";
$proto31["m_columns"][] = "codigo";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "INNER JOIN \"public\".actividad_econ ON bolsa_empleo.empresas_bolsa.id_rubro = \"public\".actividad_econ.id_activ_econ";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "bolsa_empleo.empresas_bolsa1";
$proto32=array();
$proto32["m_sql"] = "\"public\".actividad_econ.id_activ_econ = bolsa_empleo.empresas_bolsa.id_rubro";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_activ_econ",
	"m_strTable" => "public.actividad_econ",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa1"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= bolsa_empleo.empresas_bolsa.id_rubro";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_LEFTJOIN";
			$proto35=array();
$proto35["m_strName"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto35["m_srcTableName"] = "bolsa_empleo.empresas_bolsa1";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "empresas_bolsa_id";
$proto35["m_columns"][] = "ruc";
$proto35["m_columns"][] = "legal";
$proto35["m_columns"][] = "fantasy";
$proto35["m_columns"][] = "city_id";
$proto35["m_columns"][] = "distrito_id";
$proto35["m_columns"][] = "tel";
$proto35["m_columns"][] = "email";
$proto35["m_columns"][] = "id_tipo_sucursal";
$proto35["m_columns"][] = "nro_patronal";
$proto35["m_columns"][] = "direccion";
$proto35["m_columns"][] = "fecha_creacion";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "LEFT OUTER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.empresas_bolsa.id = bolsa_empleo.empresas_bolsa_sucursales.empresas_bolsa_id AND bolsa_empleo.empresas_bolsa.ruc = bolsa_empleo.empresas_bolsa_sucursales.ruc";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "bolsa_empleo.empresas_bolsa1";
$proto36=array();
$proto36["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.empresas_bolsa_id = bolsa_empleo.empresas_bolsa.id AND bolsa_empleo.empresas_bolsa_sucursales.ruc = bolsa_empleo.empresas_bolsa.ruc";
$proto36["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "bolsa_empleo.empresas_bolsa_sucursales.empresas_bolsa_id = bolsa_empleo.empresas_bolsa.id AND bolsa_empleo.empresas_bolsa_sucursales.ruc = bolsa_empleo.empresas_bolsa.ruc"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
						$proto38=array();
$proto38["m_sql"] = "bolsa_empleo.empresas_bolsa.id = bolsa_empleo.empresas_bolsa_sucursales.empresas_bolsa_id";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa1"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= bolsa_empleo.empresas_bolsa_sucursales.empresas_bolsa_id";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

			$proto36["m_contained"][]=$obj;
						$proto40=array();
$proto40["m_sql"] = "bolsa_empleo.empresas_bolsa.ruc = bolsa_empleo.empresas_bolsa_sucursales.ruc";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "bolsa_empleo.empresas_bolsa",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa1"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= bolsa_empleo.empresas_bolsa_sucursales.ruc";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

			$proto36["m_contained"][]=$obj;
						$proto42=array();
$proto42["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.empresas_bolsa_id = bolsa_empleo.empresas_bolsa.id";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "empresas_bolsa_id",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa1"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= bolsa_empleo.empresas_bolsa.id";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

			$proto36["m_contained"][]=$obj;
						$proto44=array();
$proto44["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.ruc = bolsa_empleo.empresas_bolsa.ruc";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa1"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= bolsa_empleo.empresas_bolsa.ruc";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

			$proto36["m_contained"][]=$obj;
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.empresas_bolsa1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresas_bolsa1 = createSqlQuery_empresas_bolsa1();


	
		;

										

$tdataempresas_bolsa1[".sqlquery"] = $queryData_empresas_bolsa1;



$tdataempresas_bolsa1[".hasEvents"] = false;

?>
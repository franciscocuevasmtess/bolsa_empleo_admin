<?php
$tdataempresa_bolsa_contactos1 = array();
$tdataempresa_bolsa_contactos1[".searchableFields"] = array();
$tdataempresa_bolsa_contactos1[".ShortName"] = "empresa_bolsa_contactos1";
$tdataempresa_bolsa_contactos1[".OwnerID"] = "";
$tdataempresa_bolsa_contactos1[".OriginalTable"] = "bolsa_empleo.empresa_bolsa_contactos";


$tdataempresa_bolsa_contactos1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataempresa_bolsa_contactos1[".originalPagesByType"] = $tdataempresa_bolsa_contactos1[".pagesByType"];
$tdataempresa_bolsa_contactos1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataempresa_bolsa_contactos1[".originalPages"] = $tdataempresa_bolsa_contactos1[".pages"];
$tdataempresa_bolsa_contactos1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataempresa_bolsa_contactos1[".originalDefaultPages"] = $tdataempresa_bolsa_contactos1[".defaultPages"];

//	field labels
$fieldLabelsempresa_bolsa_contactos1 = array();
$fieldToolTipsempresa_bolsa_contactos1 = array();
$pageTitlesempresa_bolsa_contactos1 = array();
$placeHoldersempresa_bolsa_contactos1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresa_bolsa_contactos1["Spanish"] = array();
	$fieldToolTipsempresa_bolsa_contactos1["Spanish"] = array();
	$placeHoldersempresa_bolsa_contactos1["Spanish"] = array();
	$pageTitlesempresa_bolsa_contactos1["Spanish"] = array();
	$fieldLabelsempresa_bolsa_contactos1["Spanish"]["empresa_bolsa_id_contacto"] = "Empresa Bolsa Id Contacto";
	$fieldToolTipsempresa_bolsa_contactos1["Spanish"]["empresa_bolsa_id_contacto"] = "";
	$placeHoldersempresa_bolsa_contactos1["Spanish"]["empresa_bolsa_id_contacto"] = "";
	$fieldLabelsempresa_bolsa_contactos1["Spanish"]["id_cargo"] = "Id Cargo";
	$fieldToolTipsempresa_bolsa_contactos1["Spanish"]["id_cargo"] = "";
	$placeHoldersempresa_bolsa_contactos1["Spanish"]["id_cargo"] = "";
	$fieldLabelsempresa_bolsa_contactos1["Spanish"]["email"] = "Email";
	$fieldToolTipsempresa_bolsa_contactos1["Spanish"]["email"] = "";
	$placeHoldersempresa_bolsa_contactos1["Spanish"]["email"] = "";
	$fieldLabelsempresa_bolsa_contactos1["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipsempresa_bolsa_contactos1["Spanish"]["telefono"] = "";
	$placeHoldersempresa_bolsa_contactos1["Spanish"]["telefono"] = "";
	$fieldLabelsempresa_bolsa_contactos1["Spanish"]["ruc"] = "Ruc";
	$fieldToolTipsempresa_bolsa_contactos1["Spanish"]["ruc"] = "";
	$placeHoldersempresa_bolsa_contactos1["Spanish"]["ruc"] = "";
	$fieldLabelsempresa_bolsa_contactos1["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsempresa_bolsa_contactos1["Spanish"]["nombre"] = "";
	$placeHoldersempresa_bolsa_contactos1["Spanish"]["nombre"] = "";
	$fieldLabelsempresa_bolsa_contactos1["Spanish"]["empresas_bolsa_sucursales_id"] = "Empresas Bolsa Sucursales Id";
	$fieldToolTipsempresa_bolsa_contactos1["Spanish"]["empresas_bolsa_sucursales_id"] = "";
	$placeHoldersempresa_bolsa_contactos1["Spanish"]["empresas_bolsa_sucursales_id"] = "";
	$fieldLabelsempresa_bolsa_contactos1["Spanish"]["id"] = "Id";
	$fieldToolTipsempresa_bolsa_contactos1["Spanish"]["id"] = "";
	$placeHoldersempresa_bolsa_contactos1["Spanish"]["id"] = "";
	if (count($fieldToolTipsempresa_bolsa_contactos1["Spanish"]))
		$tdataempresa_bolsa_contactos1[".isUseToolTips"] = true;
}


	$tdataempresa_bolsa_contactos1[".NCSearch"] = true;



$tdataempresa_bolsa_contactos1[".shortTableName"] = "empresa_bolsa_contactos1";
$tdataempresa_bolsa_contactos1[".nSecOptions"] = 0;

$tdataempresa_bolsa_contactos1[".mainTableOwnerID"] = "";
$tdataempresa_bolsa_contactos1[".entityType"] = 1;
$tdataempresa_bolsa_contactos1[".connId"] = "eportal_at_192_168_70_170";


$tdataempresa_bolsa_contactos1[".strOriginalTableName"] = "bolsa_empleo.empresa_bolsa_contactos";

	



$tdataempresa_bolsa_contactos1[".showAddInPopup"] = false;

$tdataempresa_bolsa_contactos1[".showEditInPopup"] = false;

$tdataempresa_bolsa_contactos1[".showViewInPopup"] = false;

$tdataempresa_bolsa_contactos1[".listAjax"] = false;
//	temporary
//$tdataempresa_bolsa_contactos1[".listAjax"] = false;

	$tdataempresa_bolsa_contactos1[".audit"] = true;

	$tdataempresa_bolsa_contactos1[".locking"] = false;


$pages = $tdataempresa_bolsa_contactos1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataempresa_bolsa_contactos1[".edit"] = true;
	$tdataempresa_bolsa_contactos1[".afterEditAction"] = 1;
	$tdataempresa_bolsa_contactos1[".closePopupAfterEdit"] = 1;
	$tdataempresa_bolsa_contactos1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataempresa_bolsa_contactos1[".add"] = true;
$tdataempresa_bolsa_contactos1[".afterAddAction"] = 1;
$tdataempresa_bolsa_contactos1[".closePopupAfterAdd"] = 1;
$tdataempresa_bolsa_contactos1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataempresa_bolsa_contactos1[".list"] = true;
}



$tdataempresa_bolsa_contactos1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataempresa_bolsa_contactos1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataempresa_bolsa_contactos1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataempresa_bolsa_contactos1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataempresa_bolsa_contactos1[".printFriendly"] = true;
}



$tdataempresa_bolsa_contactos1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataempresa_bolsa_contactos1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataempresa_bolsa_contactos1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataempresa_bolsa_contactos1[".isUseAjaxSuggest"] = true;



																																																															

$tdataempresa_bolsa_contactos1[".ajaxCodeSnippetAdded"] = false;

$tdataempresa_bolsa_contactos1[".buttonsAdded"] = false;

$tdataempresa_bolsa_contactos1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresa_bolsa_contactos1[".isUseTimeForSearch"] = false;


$tdataempresa_bolsa_contactos1[".badgeColor"] = "00C2C5";


$tdataempresa_bolsa_contactos1[".allSearchFields"] = array();
$tdataempresa_bolsa_contactos1[".filterFields"] = array();
$tdataempresa_bolsa_contactos1[".requiredSearchFields"] = array();

$tdataempresa_bolsa_contactos1[".googleLikeFields"] = array();
$tdataempresa_bolsa_contactos1[".googleLikeFields"][] = "empresa_bolsa_id_contacto";
$tdataempresa_bolsa_contactos1[".googleLikeFields"][] = "id_cargo";
$tdataempresa_bolsa_contactos1[".googleLikeFields"][] = "email";
$tdataempresa_bolsa_contactos1[".googleLikeFields"][] = "telefono";
$tdataempresa_bolsa_contactos1[".googleLikeFields"][] = "ruc";
$tdataempresa_bolsa_contactos1[".googleLikeFields"][] = "nombre";
$tdataempresa_bolsa_contactos1[".googleLikeFields"][] = "empresas_bolsa_sucursales_id";
$tdataempresa_bolsa_contactos1[".googleLikeFields"][] = "id";



$tdataempresa_bolsa_contactos1[".tableType"] = "list";

$tdataempresa_bolsa_contactos1[".printerPageOrientation"] = 0;
$tdataempresa_bolsa_contactos1[".nPrinterPageScale"] = 100;

$tdataempresa_bolsa_contactos1[".nPrinterSplitRecords"] = 40;

$tdataempresa_bolsa_contactos1[".geocodingEnabled"] = false;










$tdataempresa_bolsa_contactos1[".pageSize"] = 20;

$tdataempresa_bolsa_contactos1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataempresa_bolsa_contactos1[".strOrderBy"] = $tstrOrderBy;

$tdataempresa_bolsa_contactos1[".orderindexes"] = array();


$tdataempresa_bolsa_contactos1[".sqlHead"] = "SELECT bolsa_empleo.empresa_bolsa_contactos.empresa_bolsa_id_contacto,  bolsa_empleo.empresa_bolsa_contactos.id_cargo,  bolsa_empleo.empresa_bolsa_contactos.email,  bolsa_empleo.empresa_bolsa_contactos.telefono,  bolsa_empleo.empresa_bolsa_contactos.ruc,  bolsa_empleo.empresa_bolsa_contactos.nombre,  bolsa_empleo.empresa_bolsa_contactos.empresas_bolsa_sucursales_id,  bolsa_empleo.empresas_bolsa_sucursales.id";
$tdataempresa_bolsa_contactos1[".sqlFrom"] = "FROM bolsa_empleo.empresa_bolsa_contactos  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.empresas_bolsa_sucursales.id = bolsa_empleo.empresa_bolsa_contactos.empresas_bolsa_sucursales_id";
$tdataempresa_bolsa_contactos1[".sqlWhereExpr"] = "";
$tdataempresa_bolsa_contactos1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresa_bolsa_contactos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresa_bolsa_contactos1[".arrGroupsPerPage"] = $arrGPP;

$tdataempresa_bolsa_contactos1[".highlightSearchResults"] = true;

$tableKeysempresa_bolsa_contactos1 = array();
$tableKeysempresa_bolsa_contactos1[] = "empresa_bolsa_id_contacto";
$tdataempresa_bolsa_contactos1[".Keys"] = $tableKeysempresa_bolsa_contactos1;


$tdataempresa_bolsa_contactos1[".hideMobileList"] = array();




//	empresa_bolsa_id_contacto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "empresa_bolsa_id_contacto";
	$fdata["GoodName"] = "empresa_bolsa_id_contacto";
	$fdata["ownerTable"] = "bolsa_empleo.empresa_bolsa_contactos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_contactos1","empresa_bolsa_id_contacto");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "empresa_bolsa_id_contacto";

		$fdata["sourceSingle"] = "empresa_bolsa_id_contacto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresa_bolsa_contactos.empresa_bolsa_id_contacto";

	
	
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


	$tdataempresa_bolsa_contactos1["empresa_bolsa_id_contacto"] = $fdata;
		$tdataempresa_bolsa_contactos1[".searchableFields"][] = "empresa_bolsa_id_contacto";
//	id_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cargo";
	$fdata["GoodName"] = "id_cargo";
	$fdata["ownerTable"] = "bolsa_empleo.empresa_bolsa_contactos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_contactos1","id_cargo");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_cargo";

		$fdata["sourceSingle"] = "id_cargo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresa_bolsa_contactos.id_cargo";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.cargo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cargo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion_cargo";

	

	
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


	$tdataempresa_bolsa_contactos1["id_cargo"] = $fdata;
		$tdataempresa_bolsa_contactos1[".searchableFields"][] = "id_cargo";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "bolsa_empleo.empresa_bolsa_contactos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_contactos1","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresa_bolsa_contactos.email";

	
	
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


	$tdataempresa_bolsa_contactos1["email"] = $fdata;
		$tdataempresa_bolsa_contactos1[".searchableFields"][] = "email";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "bolsa_empleo.empresa_bolsa_contactos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_contactos1","telefono");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "telefono";

		$fdata["sourceSingle"] = "telefono";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresa_bolsa_contactos.telefono";

	
	
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


	$tdataempresa_bolsa_contactos1["telefono"] = $fdata;
		$tdataempresa_bolsa_contactos1[".searchableFields"][] = "telefono";
//	ruc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ruc";
	$fdata["GoodName"] = "ruc";
	$fdata["ownerTable"] = "bolsa_empleo.empresa_bolsa_contactos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_contactos1","ruc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ruc";

		$fdata["sourceSingle"] = "ruc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresa_bolsa_contactos.ruc";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.empresas_bolsa";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ruc";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "ruc";

	

	
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


	$tdataempresa_bolsa_contactos1["ruc"] = $fdata;
		$tdataempresa_bolsa_contactos1[".searchableFields"][] = "ruc";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "bolsa_empleo.empresa_bolsa_contactos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_contactos1","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

		$fdata["sourceSingle"] = "nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresa_bolsa_contactos.nombre";

	
	
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


	$tdataempresa_bolsa_contactos1["nombre"] = $fdata;
		$tdataempresa_bolsa_contactos1[".searchableFields"][] = "nombre";
//	empresas_bolsa_sucursales_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "empresas_bolsa_sucursales_id";
	$fdata["GoodName"] = "empresas_bolsa_sucursales_id";
	$fdata["ownerTable"] = "bolsa_empleo.empresa_bolsa_contactos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_contactos1","empresas_bolsa_sucursales_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "empresas_bolsa_sucursales_id";

		$fdata["sourceSingle"] = "empresas_bolsa_sucursales_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresa_bolsa_contactos.empresas_bolsa_sucursales_id";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ruc";

	

	
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


	$tdataempresa_bolsa_contactos1["empresas_bolsa_sucursales_id"] = $fdata;
		$tdataempresa_bolsa_contactos1[".searchableFields"][] = "empresas_bolsa_sucursales_id";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_contactos1","id");
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


	$tdataempresa_bolsa_contactos1["id"] = $fdata;
		$tdataempresa_bolsa_contactos1[".searchableFields"][] = "id";


$tables_data["bolsa_empleo.empresa_bolsa_contactos1"]=&$tdataempresa_bolsa_contactos1;
$field_labels["bolsa_empleo_empresa_bolsa_contactos1"] = &$fieldLabelsempresa_bolsa_contactos1;
$fieldToolTips["bolsa_empleo_empresa_bolsa_contactos1"] = &$fieldToolTipsempresa_bolsa_contactos1;
$placeHolders["bolsa_empleo_empresa_bolsa_contactos1"] = &$placeHoldersempresa_bolsa_contactos1;
$page_titles["bolsa_empleo_empresa_bolsa_contactos1"] = &$pageTitlesempresa_bolsa_contactos1;


changeTextControlsToDate( "bolsa_empleo.empresa_bolsa_contactos1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.empresa_bolsa_contactos1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.empresa_bolsa_contactos1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_empresa_bolsa_contactos1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bolsa_empleo.empresa_bolsa_contactos.empresa_bolsa_id_contacto,  bolsa_empleo.empresa_bolsa_contactos.id_cargo,  bolsa_empleo.empresa_bolsa_contactos.email,  bolsa_empleo.empresa_bolsa_contactos.telefono,  bolsa_empleo.empresa_bolsa_contactos.ruc,  bolsa_empleo.empresa_bolsa_contactos.nombre,  bolsa_empleo.empresa_bolsa_contactos.empresas_bolsa_sucursales_id,  bolsa_empleo.empresas_bolsa_sucursales.id";
$proto0["m_strFrom"] = "FROM bolsa_empleo.empresa_bolsa_contactos  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.empresas_bolsa_sucursales.id = bolsa_empleo.empresa_bolsa_contactos.empresas_bolsa_sucursales_id";
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
	"m_strName" => "empresa_bolsa_id_contacto",
	"m_strTable" => "bolsa_empleo.empresa_bolsa_contactos",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_contactos1"
));

$proto6["m_sql"] = "bolsa_empleo.empresa_bolsa_contactos.empresa_bolsa_id_contacto";
$proto6["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cargo",
	"m_strTable" => "bolsa_empleo.empresa_bolsa_contactos",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_contactos1"
));

$proto8["m_sql"] = "bolsa_empleo.empresa_bolsa_contactos.id_cargo";
$proto8["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "bolsa_empleo.empresa_bolsa_contactos",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_contactos1"
));

$proto10["m_sql"] = "bolsa_empleo.empresa_bolsa_contactos.email";
$proto10["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "bolsa_empleo.empresa_bolsa_contactos",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_contactos1"
));

$proto12["m_sql"] = "bolsa_empleo.empresa_bolsa_contactos.telefono";
$proto12["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "bolsa_empleo.empresa_bolsa_contactos",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_contactos1"
));

$proto14["m_sql"] = "bolsa_empleo.empresa_bolsa_contactos.ruc";
$proto14["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "bolsa_empleo.empresa_bolsa_contactos",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_contactos1"
));

$proto16["m_sql"] = "bolsa_empleo.empresa_bolsa_contactos.nombre";
$proto16["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "empresas_bolsa_sucursales_id",
	"m_strTable" => "bolsa_empleo.empresa_bolsa_contactos",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_contactos1"
));

$proto18["m_sql"] = "bolsa_empleo.empresa_bolsa_contactos.empresas_bolsa_sucursales_id";
$proto18["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_contactos1"
));

$proto20["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id";
$proto20["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "bolsa_empleo.empresa_bolsa_contactos";
$proto23["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos1";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "empresa_bolsa_id_contacto";
$proto23["m_columns"][] = "id_cargo";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "telefono";
$proto23["m_columns"][] = "ruc";
$proto23["m_columns"][] = "nombre";
$proto23["m_columns"][] = "empresas_bolsa_sucursales_id";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "bolsa_empleo.empresa_bolsa_contactos";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos1";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
												$proto26=array();
$proto26["m_link"] = "SQLL_INNERJOIN";
			$proto27=array();
$proto27["m_strName"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto27["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos1";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "empresas_bolsa_id";
$proto27["m_columns"][] = "ruc";
$proto27["m_columns"][] = "legal";
$proto27["m_columns"][] = "fantasy";
$proto27["m_columns"][] = "city_id";
$proto27["m_columns"][] = "distrito_id";
$proto27["m_columns"][] = "tel";
$proto27["m_columns"][] = "email";
$proto27["m_columns"][] = "id_tipo_sucursal";
$proto27["m_columns"][] = "nro_patronal";
$proto27["m_columns"][] = "direccion";
$proto27["m_columns"][] = "fecha_creacion";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.empresas_bolsa_sucursales.id = bolsa_empleo.empresa_bolsa_contactos.empresas_bolsa_sucursales_id";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos1";
$proto28=array();
$proto28["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id = bolsa_empleo.empresa_bolsa_contactos.empresas_bolsa_sucursales_id";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_contactos1"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= bolsa_empleo.empresa_bolsa_contactos.empresas_bolsa_sucursales_id";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.empresa_bolsa_contactos1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresa_bolsa_contactos1 = createSqlQuery_empresa_bolsa_contactos1();


	
		;

								

$tdataempresa_bolsa_contactos1[".sqlquery"] = $queryData_empresa_bolsa_contactos1;



$tdataempresa_bolsa_contactos1[".hasEvents"] = false;

?>
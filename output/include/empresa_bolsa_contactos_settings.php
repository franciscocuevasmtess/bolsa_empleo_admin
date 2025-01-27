<?php
$tdataempresa_bolsa_contactos = array();
$tdataempresa_bolsa_contactos[".searchableFields"] = array();
$tdataempresa_bolsa_contactos[".ShortName"] = "empresa_bolsa_contactos";
$tdataempresa_bolsa_contactos[".OwnerID"] = "";
$tdataempresa_bolsa_contactos[".OriginalTable"] = "bolsa_empleo.empresa_bolsa_contactos";


$tdataempresa_bolsa_contactos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataempresa_bolsa_contactos[".originalPagesByType"] = $tdataempresa_bolsa_contactos[".pagesByType"];
$tdataempresa_bolsa_contactos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataempresa_bolsa_contactos[".originalPages"] = $tdataempresa_bolsa_contactos[".pages"];
$tdataempresa_bolsa_contactos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataempresa_bolsa_contactos[".originalDefaultPages"] = $tdataempresa_bolsa_contactos[".defaultPages"];

//	field labels
$fieldLabelsempresa_bolsa_contactos = array();
$fieldToolTipsempresa_bolsa_contactos = array();
$pageTitlesempresa_bolsa_contactos = array();
$placeHoldersempresa_bolsa_contactos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresa_bolsa_contactos["Spanish"] = array();
	$fieldToolTipsempresa_bolsa_contactos["Spanish"] = array();
	$placeHoldersempresa_bolsa_contactos["Spanish"] = array();
	$pageTitlesempresa_bolsa_contactos["Spanish"] = array();
	$fieldLabelsempresa_bolsa_contactos["Spanish"]["empresa_bolsa_id_contacto"] = "Empresa Bolsa Id Contacto";
	$fieldToolTipsempresa_bolsa_contactos["Spanish"]["empresa_bolsa_id_contacto"] = "";
	$placeHoldersempresa_bolsa_contactos["Spanish"]["empresa_bolsa_id_contacto"] = "";
	$fieldLabelsempresa_bolsa_contactos["Spanish"]["id_cargo"] = "Cargo";
	$fieldToolTipsempresa_bolsa_contactos["Spanish"]["id_cargo"] = "";
	$placeHoldersempresa_bolsa_contactos["Spanish"]["id_cargo"] = "";
	$fieldLabelsempresa_bolsa_contactos["Spanish"]["email"] = "Email";
	$fieldToolTipsempresa_bolsa_contactos["Spanish"]["email"] = "";
	$placeHoldersempresa_bolsa_contactos["Spanish"]["email"] = "";
	$fieldLabelsempresa_bolsa_contactos["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipsempresa_bolsa_contactos["Spanish"]["telefono"] = "";
	$placeHoldersempresa_bolsa_contactos["Spanish"]["telefono"] = "";
	$fieldLabelsempresa_bolsa_contactos["Spanish"]["ruc"] = "Ruc";
	$fieldToolTipsempresa_bolsa_contactos["Spanish"]["ruc"] = "";
	$placeHoldersempresa_bolsa_contactos["Spanish"]["ruc"] = "";
	$fieldLabelsempresa_bolsa_contactos["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsempresa_bolsa_contactos["Spanish"]["nombre"] = "";
	$placeHoldersempresa_bolsa_contactos["Spanish"]["nombre"] = "";
	$fieldLabelsempresa_bolsa_contactos["Spanish"]["empresas_bolsa_sucursales_id"] = "Mariz - Sucursal";
	$fieldToolTipsempresa_bolsa_contactos["Spanish"]["empresas_bolsa_sucursales_id"] = "";
	$placeHoldersempresa_bolsa_contactos["Spanish"]["empresas_bolsa_sucursales_id"] = "";
	if (count($fieldToolTipsempresa_bolsa_contactos["Spanish"]))
		$tdataempresa_bolsa_contactos[".isUseToolTips"] = true;
}


	$tdataempresa_bolsa_contactos[".NCSearch"] = true;



$tdataempresa_bolsa_contactos[".shortTableName"] = "empresa_bolsa_contactos";
$tdataempresa_bolsa_contactos[".nSecOptions"] = 0;

$tdataempresa_bolsa_contactos[".mainTableOwnerID"] = "";
$tdataempresa_bolsa_contactos[".entityType"] = 0;
$tdataempresa_bolsa_contactos[".connId"] = "eportal_at_192_168_70_170";


$tdataempresa_bolsa_contactos[".strOriginalTableName"] = "bolsa_empleo.empresa_bolsa_contactos";

	



$tdataempresa_bolsa_contactos[".showAddInPopup"] = false;

$tdataempresa_bolsa_contactos[".showEditInPopup"] = false;

$tdataempresa_bolsa_contactos[".showViewInPopup"] = false;

$tdataempresa_bolsa_contactos[".listAjax"] = false;
//	temporary
//$tdataempresa_bolsa_contactos[".listAjax"] = false;

	$tdataempresa_bolsa_contactos[".audit"] = true;

	$tdataempresa_bolsa_contactos[".locking"] = false;


$pages = $tdataempresa_bolsa_contactos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataempresa_bolsa_contactos[".edit"] = true;
	$tdataempresa_bolsa_contactos[".afterEditAction"] = 1;
	$tdataempresa_bolsa_contactos[".closePopupAfterEdit"] = 1;
	$tdataempresa_bolsa_contactos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataempresa_bolsa_contactos[".add"] = true;
$tdataempresa_bolsa_contactos[".afterAddAction"] = 1;
$tdataempresa_bolsa_contactos[".closePopupAfterAdd"] = 1;
$tdataempresa_bolsa_contactos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataempresa_bolsa_contactos[".list"] = true;
}



$tdataempresa_bolsa_contactos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataempresa_bolsa_contactos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataempresa_bolsa_contactos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataempresa_bolsa_contactos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataempresa_bolsa_contactos[".printFriendly"] = true;
}



$tdataempresa_bolsa_contactos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataempresa_bolsa_contactos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataempresa_bolsa_contactos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataempresa_bolsa_contactos[".isUseAjaxSuggest"] = true;



																																																						

$tdataempresa_bolsa_contactos[".ajaxCodeSnippetAdded"] = false;

$tdataempresa_bolsa_contactos[".buttonsAdded"] = false;

$tdataempresa_bolsa_contactos[".addPageEvents"] = true;

// use timepicker for search panel
$tdataempresa_bolsa_contactos[".isUseTimeForSearch"] = false;


$tdataempresa_bolsa_contactos[".badgeColor"] = "DAA520";


$tdataempresa_bolsa_contactos[".allSearchFields"] = array();
$tdataempresa_bolsa_contactos[".filterFields"] = array();
$tdataempresa_bolsa_contactos[".requiredSearchFields"] = array();

$tdataempresa_bolsa_contactos[".googleLikeFields"] = array();
$tdataempresa_bolsa_contactos[".googleLikeFields"][] = "empresa_bolsa_id_contacto";
$tdataempresa_bolsa_contactos[".googleLikeFields"][] = "id_cargo";
$tdataempresa_bolsa_contactos[".googleLikeFields"][] = "email";
$tdataempresa_bolsa_contactos[".googleLikeFields"][] = "telefono";
$tdataempresa_bolsa_contactos[".googleLikeFields"][] = "ruc";
$tdataempresa_bolsa_contactos[".googleLikeFields"][] = "nombre";
$tdataempresa_bolsa_contactos[".googleLikeFields"][] = "empresas_bolsa_sucursales_id";



$tdataempresa_bolsa_contactos[".tableType"] = "list";

$tdataempresa_bolsa_contactos[".printerPageOrientation"] = 0;
$tdataempresa_bolsa_contactos[".nPrinterPageScale"] = 100;

$tdataempresa_bolsa_contactos[".nPrinterSplitRecords"] = 40;

$tdataempresa_bolsa_contactos[".geocodingEnabled"] = false;










$tdataempresa_bolsa_contactos[".pageSize"] = 20;

$tdataempresa_bolsa_contactos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataempresa_bolsa_contactos[".strOrderBy"] = $tstrOrderBy;

$tdataempresa_bolsa_contactos[".orderindexes"] = array();


$tdataempresa_bolsa_contactos[".sqlHead"] = "SELECT empresa_bolsa_id_contacto,  	id_cargo,  	email,  	telefono,  	ruc,  	nombre,  	empresas_bolsa_sucursales_id";
$tdataempresa_bolsa_contactos[".sqlFrom"] = "FROM bolsa_empleo.empresa_bolsa_contactos";
$tdataempresa_bolsa_contactos[".sqlWhereExpr"] = "";
$tdataempresa_bolsa_contactos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresa_bolsa_contactos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresa_bolsa_contactos[".arrGroupsPerPage"] = $arrGPP;

$tdataempresa_bolsa_contactos[".highlightSearchResults"] = true;

$tableKeysempresa_bolsa_contactos = array();
$tableKeysempresa_bolsa_contactos[] = "empresa_bolsa_id_contacto";
$tdataempresa_bolsa_contactos[".Keys"] = $tableKeysempresa_bolsa_contactos;


$tdataempresa_bolsa_contactos[".hideMobileList"] = array();




//	empresa_bolsa_id_contacto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "empresa_bolsa_id_contacto";
	$fdata["GoodName"] = "empresa_bolsa_id_contacto";
	$fdata["ownerTable"] = "bolsa_empleo.empresa_bolsa_contactos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_contactos","empresa_bolsa_id_contacto");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "empresa_bolsa_id_contacto";

		$fdata["sourceSingle"] = "empresa_bolsa_id_contacto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "empresa_bolsa_id_contacto";

	
	
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


	$tdataempresa_bolsa_contactos["empresa_bolsa_id_contacto"] = $fdata;
		$tdataempresa_bolsa_contactos[".searchableFields"][] = "empresa_bolsa_id_contacto";
//	id_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cargo";
	$fdata["GoodName"] = "id_cargo";
	$fdata["ownerTable"] = "bolsa_empleo.empresa_bolsa_contactos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_contactos","id_cargo");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_cargo";

		$fdata["sourceSingle"] = "id_cargo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cargo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Select2");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Select2");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdataempresa_bolsa_contactos["id_cargo"] = $fdata;
		$tdataempresa_bolsa_contactos[".searchableFields"][] = "id_cargo";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "bolsa_empleo.empresa_bolsa_contactos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_contactos","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
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


	$tdataempresa_bolsa_contactos["email"] = $fdata;
		$tdataempresa_bolsa_contactos[".searchableFields"][] = "email";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "bolsa_empleo.empresa_bolsa_contactos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_contactos","telefono");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "telefono";

		$fdata["sourceSingle"] = "telefono";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "tel";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdataempresa_bolsa_contactos["telefono"] = $fdata;
		$tdataempresa_bolsa_contactos[".searchableFields"][] = "telefono";
//	ruc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ruc";
	$fdata["GoodName"] = "ruc";
	$fdata["ownerTable"] = "bolsa_empleo.empresa_bolsa_contactos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_contactos","ruc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ruc";

		$fdata["sourceSingle"] = "ruc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ruc";

	
	
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

	
		
	$edata["LinkField"] = "ruc";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "ruc";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "empresas_bolsa_sucursales_id", "lookup" => "id" );

	
	

	
	
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


	$tdataempresa_bolsa_contactos["ruc"] = $fdata;
		$tdataempresa_bolsa_contactos[".searchableFields"][] = "ruc";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "bolsa_empleo.empresa_bolsa_contactos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_contactos","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

		$fdata["sourceSingle"] = "nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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


	$tdataempresa_bolsa_contactos["nombre"] = $fdata;
		$tdataempresa_bolsa_contactos[".searchableFields"][] = "nombre";
//	empresas_bolsa_sucursales_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "empresas_bolsa_sucursales_id";
	$fdata["GoodName"] = "empresas_bolsa_sucursales_id";
	$fdata["ownerTable"] = "bolsa_empleo.empresa_bolsa_contactos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresa_bolsa_contactos","empresas_bolsa_sucursales_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "empresas_bolsa_sucursales_id";

		$fdata["sourceSingle"] = "empresas_bolsa_sucursales_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "empresas_bolsa_sucursales_id";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.empresas_bolsa_sucursales4";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ruc||' - '||nro_patronal||' - '||legal||  ' - '||direccion";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "legal";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ruc";

	
	
	
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


	$tdataempresa_bolsa_contactos["empresas_bolsa_sucursales_id"] = $fdata;
		$tdataempresa_bolsa_contactos[".searchableFields"][] = "empresas_bolsa_sucursales_id";


$tables_data["bolsa_empleo.empresa_bolsa_contactos"]=&$tdataempresa_bolsa_contactos;
$field_labels["bolsa_empleo_empresa_bolsa_contactos"] = &$fieldLabelsempresa_bolsa_contactos;
$fieldToolTips["bolsa_empleo_empresa_bolsa_contactos"] = &$fieldToolTipsempresa_bolsa_contactos;
$placeHolders["bolsa_empleo_empresa_bolsa_contactos"] = &$placeHoldersempresa_bolsa_contactos;
$page_titles["bolsa_empleo_empresa_bolsa_contactos"] = &$pageTitlesempresa_bolsa_contactos;


changeTextControlsToDate( "bolsa_empleo.empresa_bolsa_contactos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.empresa_bolsa_contactos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.empresa_bolsa_contactos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_empresa_bolsa_contactos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "empresa_bolsa_id_contacto,  	id_cargo,  	email,  	telefono,  	ruc,  	nombre,  	empresas_bolsa_sucursales_id";
$proto0["m_strFrom"] = "FROM bolsa_empleo.empresa_bolsa_contactos";
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
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_contactos"
));

$proto6["m_sql"] = "empresa_bolsa_id_contacto";
$proto6["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cargo",
	"m_strTable" => "bolsa_empleo.empresa_bolsa_contactos",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_contactos"
));

$proto8["m_sql"] = "id_cargo";
$proto8["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "bolsa_empleo.empresa_bolsa_contactos",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_contactos"
));

$proto10["m_sql"] = "email";
$proto10["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "bolsa_empleo.empresa_bolsa_contactos",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_contactos"
));

$proto12["m_sql"] = "telefono";
$proto12["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "bolsa_empleo.empresa_bolsa_contactos",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_contactos"
));

$proto14["m_sql"] = "ruc";
$proto14["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "bolsa_empleo.empresa_bolsa_contactos",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_contactos"
));

$proto16["m_sql"] = "nombre";
$proto16["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "empresas_bolsa_sucursales_id",
	"m_strTable" => "bolsa_empleo.empresa_bolsa_contactos",
	"m_srcTableName" => "bolsa_empleo.empresa_bolsa_contactos"
));

$proto18["m_sql"] = "empresas_bolsa_sucursales_id";
$proto18["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "bolsa_empleo.empresa_bolsa_contactos";
$proto21["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "empresa_bolsa_id_contacto";
$proto21["m_columns"][] = "id_cargo";
$proto21["m_columns"][] = "email";
$proto21["m_columns"][] = "telefono";
$proto21["m_columns"][] = "ruc";
$proto21["m_columns"][] = "nombre";
$proto21["m_columns"][] = "empresas_bolsa_sucursales_id";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "bolsa_empleo.empresa_bolsa_contactos";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "bolsa_empleo.empresa_bolsa_contactos";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.empresa_bolsa_contactos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresa_bolsa_contactos = createSqlQuery_empresa_bolsa_contactos();


	
		;

							

$tdataempresa_bolsa_contactos[".sqlquery"] = $queryData_empresa_bolsa_contactos;



include_once(getabspath("include/empresa_bolsa_contactos_events.php"));
$tdataempresa_bolsa_contactos[".hasEvents"] = true;

?>
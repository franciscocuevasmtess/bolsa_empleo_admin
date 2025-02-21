<?php
$tdatavacancia_requisito_idioma = array();
$tdatavacancia_requisito_idioma[".searchableFields"] = array();
$tdatavacancia_requisito_idioma[".ShortName"] = "vacancia_requisito_idioma";
$tdatavacancia_requisito_idioma[".OwnerID"] = "";
$tdatavacancia_requisito_idioma[".OriginalTable"] = "bolsa_empleo.vacancia_requisito_idioma";


$tdatavacancia_requisito_idioma[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print1\"],\"search\":[\"search\"]}" );
$tdatavacancia_requisito_idioma[".originalPagesByType"] = $tdatavacancia_requisito_idioma[".pagesByType"];
$tdatavacancia_requisito_idioma[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print1\"],\"search\":[\"search\"]}" ) );
$tdatavacancia_requisito_idioma[".originalPages"] = $tdatavacancia_requisito_idioma[".pages"];
$tdatavacancia_requisito_idioma[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"print\":\"print1\",\"search\":\"search\"}" );
$tdatavacancia_requisito_idioma[".originalDefaultPages"] = $tdatavacancia_requisito_idioma[".defaultPages"];

//	field labels
$fieldLabelsvacancia_requisito_idioma = array();
$fieldToolTipsvacancia_requisito_idioma = array();
$pageTitlesvacancia_requisito_idioma = array();
$placeHoldersvacancia_requisito_idioma = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvacancia_requisito_idioma["Spanish"] = array();
	$fieldToolTipsvacancia_requisito_idioma["Spanish"] = array();
	$placeHoldersvacancia_requisito_idioma["Spanish"] = array();
	$pageTitlesvacancia_requisito_idioma["Spanish"] = array();
	$fieldLabelsvacancia_requisito_idioma["Spanish"]["id_vacancia_requisito_idioma"] = "Id Vacancia Requisito Idioma";
	$fieldToolTipsvacancia_requisito_idioma["Spanish"]["id_vacancia_requisito_idioma"] = "";
	$placeHoldersvacancia_requisito_idioma["Spanish"]["id_vacancia_requisito_idioma"] = "";
	$fieldLabelsvacancia_requisito_idioma["Spanish"]["id_vacancia"] = "Id Vacancia";
	$fieldToolTipsvacancia_requisito_idioma["Spanish"]["id_vacancia"] = "";
	$placeHoldersvacancia_requisito_idioma["Spanish"]["id_vacancia"] = "";
	$fieldLabelsvacancia_requisito_idioma["Spanish"]["id_idioma"] = "Idiomas Requeridos";
	$fieldToolTipsvacancia_requisito_idioma["Spanish"]["id_idioma"] = "";
	$placeHoldersvacancia_requisito_idioma["Spanish"]["id_idioma"] = "";
	$fieldLabelsvacancia_requisito_idioma["Spanish"]["id_nivel_idioma_habla"] = "Nivel Habla";
	$fieldToolTipsvacancia_requisito_idioma["Spanish"]["id_nivel_idioma_habla"] = "";
	$placeHoldersvacancia_requisito_idioma["Spanish"]["id_nivel_idioma_habla"] = "";
	$fieldLabelsvacancia_requisito_idioma["Spanish"]["id_nivel_idioma_escribe"] = "Nivel Escribe";
	$fieldToolTipsvacancia_requisito_idioma["Spanish"]["id_nivel_idioma_escribe"] = "";
	$placeHoldersvacancia_requisito_idioma["Spanish"]["id_nivel_idioma_escribe"] = "";
	$fieldLabelsvacancia_requisito_idioma["Spanish"]["id_nivel_idioma_lee"] = "Nivel Lee";
	$fieldToolTipsvacancia_requisito_idioma["Spanish"]["id_nivel_idioma_lee"] = "";
	$placeHoldersvacancia_requisito_idioma["Spanish"]["id_nivel_idioma_lee"] = "";
	if (count($fieldToolTipsvacancia_requisito_idioma["Spanish"]))
		$tdatavacancia_requisito_idioma[".isUseToolTips"] = true;
}


	$tdatavacancia_requisito_idioma[".NCSearch"] = true;



$tdatavacancia_requisito_idioma[".shortTableName"] = "vacancia_requisito_idioma";
$tdatavacancia_requisito_idioma[".nSecOptions"] = 0;

$tdatavacancia_requisito_idioma[".mainTableOwnerID"] = "";
$tdatavacancia_requisito_idioma[".entityType"] = 0;
$tdatavacancia_requisito_idioma[".connId"] = "eportal_at_192_168_70_170";


$tdatavacancia_requisito_idioma[".strOriginalTableName"] = "bolsa_empleo.vacancia_requisito_idioma";

	



$tdatavacancia_requisito_idioma[".showAddInPopup"] = false;

$tdatavacancia_requisito_idioma[".showEditInPopup"] = false;

$tdatavacancia_requisito_idioma[".showViewInPopup"] = false;

$tdatavacancia_requisito_idioma[".listAjax"] = false;
//	temporary
//$tdatavacancia_requisito_idioma[".listAjax"] = false;

	$tdatavacancia_requisito_idioma[".audit"] = true;

	$tdatavacancia_requisito_idioma[".locking"] = false;


$pages = $tdatavacancia_requisito_idioma[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavacancia_requisito_idioma[".edit"] = true;
	$tdatavacancia_requisito_idioma[".afterEditAction"] = 1;
	$tdatavacancia_requisito_idioma[".closePopupAfterEdit"] = 1;
	$tdatavacancia_requisito_idioma[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavacancia_requisito_idioma[".add"] = true;
$tdatavacancia_requisito_idioma[".afterAddAction"] = 1;
$tdatavacancia_requisito_idioma[".closePopupAfterAdd"] = 1;
$tdatavacancia_requisito_idioma[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavacancia_requisito_idioma[".list"] = true;
}



$tdatavacancia_requisito_idioma[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavacancia_requisito_idioma[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavacancia_requisito_idioma[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavacancia_requisito_idioma[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavacancia_requisito_idioma[".printFriendly"] = true;
}



$tdatavacancia_requisito_idioma[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavacancia_requisito_idioma[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavacancia_requisito_idioma[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavacancia_requisito_idioma[".isUseAjaxSuggest"] = true;



																																																																																																																																																																		

$tdatavacancia_requisito_idioma[".ajaxCodeSnippetAdded"] = false;

$tdatavacancia_requisito_idioma[".buttonsAdded"] = false;

$tdatavacancia_requisito_idioma[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavacancia_requisito_idioma[".isUseTimeForSearch"] = false;


$tdatavacancia_requisito_idioma[".badgeColor"] = "db7093";


$tdatavacancia_requisito_idioma[".allSearchFields"] = array();
$tdatavacancia_requisito_idioma[".filterFields"] = array();
$tdatavacancia_requisito_idioma[".requiredSearchFields"] = array();

$tdatavacancia_requisito_idioma[".googleLikeFields"] = array();
$tdatavacancia_requisito_idioma[".googleLikeFields"][] = "id_vacancia_requisito_idioma";
$tdatavacancia_requisito_idioma[".googleLikeFields"][] = "id_vacancia";
$tdatavacancia_requisito_idioma[".googleLikeFields"][] = "id_idioma";
$tdatavacancia_requisito_idioma[".googleLikeFields"][] = "id_nivel_idioma_habla";
$tdatavacancia_requisito_idioma[".googleLikeFields"][] = "id_nivel_idioma_escribe";
$tdatavacancia_requisito_idioma[".googleLikeFields"][] = "id_nivel_idioma_lee";



$tdatavacancia_requisito_idioma[".tableType"] = "list";

$tdatavacancia_requisito_idioma[".printerPageOrientation"] = 0;
$tdatavacancia_requisito_idioma[".nPrinterPageScale"] = 100;

$tdatavacancia_requisito_idioma[".nPrinterSplitRecords"] = 40;

$tdatavacancia_requisito_idioma[".geocodingEnabled"] = false;










$tdatavacancia_requisito_idioma[".pageSize"] = 20;

$tdatavacancia_requisito_idioma[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavacancia_requisito_idioma[".strOrderBy"] = $tstrOrderBy;

$tdatavacancia_requisito_idioma[".orderindexes"] = array();


$tdatavacancia_requisito_idioma[".sqlHead"] = "SELECT id_vacancia_requisito_idioma,  	id_vacancia,  	id_idioma,  	id_nivel_idioma_habla,  	id_nivel_idioma_escribe,  	id_nivel_idioma_lee";
$tdatavacancia_requisito_idioma[".sqlFrom"] = "FROM bolsa_empleo.vacancia_requisito_idioma";
$tdatavacancia_requisito_idioma[".sqlWhereExpr"] = "";
$tdatavacancia_requisito_idioma[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavacancia_requisito_idioma[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavacancia_requisito_idioma[".arrGroupsPerPage"] = $arrGPP;

$tdatavacancia_requisito_idioma[".highlightSearchResults"] = true;

$tableKeysvacancia_requisito_idioma = array();
$tableKeysvacancia_requisito_idioma[] = "id_vacancia_requisito_idioma";
$tdatavacancia_requisito_idioma[".Keys"] = $tableKeysvacancia_requisito_idioma;


$tdatavacancia_requisito_idioma[".hideMobileList"] = array();




//	id_vacancia_requisito_idioma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_vacancia_requisito_idioma";
	$fdata["GoodName"] = "id_vacancia_requisito_idioma";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito_idioma";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_requisito_idioma","id_vacancia_requisito_idioma");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_vacancia_requisito_idioma";

		$fdata["sourceSingle"] = "id_vacancia_requisito_idioma";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_vacancia_requisito_idioma";

	
	
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


	$tdatavacancia_requisito_idioma["id_vacancia_requisito_idioma"] = $fdata;
		$tdatavacancia_requisito_idioma[".searchableFields"][] = "id_vacancia_requisito_idioma";
//	id_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_vacancia";
	$fdata["GoodName"] = "id_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito_idioma";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_requisito_idioma","id_vacancia");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_vacancia";

		$fdata["sourceSingle"] = "id_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_vacancia";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.vacancia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_vacancias";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "id_estado_vacancia";

	

	
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


	$tdatavacancia_requisito_idioma["id_vacancia"] = $fdata;
		$tdatavacancia_requisito_idioma[".searchableFields"][] = "id_vacancia";
//	id_idioma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_idioma";
	$fdata["GoodName"] = "id_idioma";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito_idioma";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_requisito_idioma","id_idioma");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_idioma";

		$fdata["sourceSingle"] = "id_idioma";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_idioma";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.idioma";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_idioma";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "id_idioma";

	
	
	
	

	
	
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


	$tdatavacancia_requisito_idioma["id_idioma"] = $fdata;
		$tdatavacancia_requisito_idioma[".searchableFields"][] = "id_idioma";
//	id_nivel_idioma_habla
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_nivel_idioma_habla";
	$fdata["GoodName"] = "id_nivel_idioma_habla";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito_idioma";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_requisito_idioma","id_nivel_idioma_habla");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_nivel_idioma_habla";

		$fdata["sourceSingle"] = "id_nivel_idioma_habla";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_nivel_idioma_habla";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.nivel_idioma";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_nivel";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
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


	$tdatavacancia_requisito_idioma["id_nivel_idioma_habla"] = $fdata;
		$tdatavacancia_requisito_idioma[".searchableFields"][] = "id_nivel_idioma_habla";
//	id_nivel_idioma_escribe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_nivel_idioma_escribe";
	$fdata["GoodName"] = "id_nivel_idioma_escribe";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito_idioma";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_requisito_idioma","id_nivel_idioma_escribe");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_nivel_idioma_escribe";

		$fdata["sourceSingle"] = "id_nivel_idioma_escribe";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_nivel_idioma_escribe";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.nivel_idioma";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_nivel";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

	

	
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


	$tdatavacancia_requisito_idioma["id_nivel_idioma_escribe"] = $fdata;
		$tdatavacancia_requisito_idioma[".searchableFields"][] = "id_nivel_idioma_escribe";
//	id_nivel_idioma_lee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id_nivel_idioma_lee";
	$fdata["GoodName"] = "id_nivel_idioma_lee";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito_idioma";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_requisito_idioma","id_nivel_idioma_lee");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_nivel_idioma_lee";

		$fdata["sourceSingle"] = "id_nivel_idioma_lee";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_nivel_idioma_lee";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.nivel_idioma";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_nivel";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

	

	
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


	$tdatavacancia_requisito_idioma["id_nivel_idioma_lee"] = $fdata;
		$tdatavacancia_requisito_idioma[".searchableFields"][] = "id_nivel_idioma_lee";


$tables_data["bolsa_empleo.vacancia_requisito_idioma"]=&$tdatavacancia_requisito_idioma;
$field_labels["bolsa_empleo_vacancia_requisito_idioma"] = &$fieldLabelsvacancia_requisito_idioma;
$fieldToolTips["bolsa_empleo_vacancia_requisito_idioma"] = &$fieldToolTipsvacancia_requisito_idioma;
$placeHolders["bolsa_empleo_vacancia_requisito_idioma"] = &$placeHoldersvacancia_requisito_idioma;
$page_titles["bolsa_empleo_vacancia_requisito_idioma"] = &$pageTitlesvacancia_requisito_idioma;


changeTextControlsToDate( "bolsa_empleo.vacancia_requisito_idioma" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.vacancia_requisito_idioma"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.vacancia_requisito_idioma"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.vacancia_requisito_idioma"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.vacancia_requisito_idioma"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_requisito_idioma"][0]["masterKeys"][]="id_vacancias";
				$masterTablesData["bolsa_empleo.vacancia_requisito_idioma"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_requisito_idioma"][0]["detailKeys"][]="id_vacancia";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="vacancia_pendiente";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia_pendiente";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.vacancia_requisito_idioma"][1] = $masterParams;
				$masterTablesData["bolsa_empleo.vacancia_requisito_idioma"][1]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_requisito_idioma"][1]["masterKeys"][]="id_vacancias";
				$masterTablesData["bolsa_empleo.vacancia_requisito_idioma"][1]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_requisito_idioma"][1]["detailKeys"][]="id_vacancia";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vacancia_requisito_idioma()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_vacancia_requisito_idioma,  	id_vacancia,  	id_idioma,  	id_nivel_idioma_habla,  	id_nivel_idioma_escribe,  	id_nivel_idioma_lee";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vacancia_requisito_idioma";
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
	"m_strName" => "id_vacancia_requisito_idioma",
	"m_strTable" => "bolsa_empleo.vacancia_requisito_idioma",
	"m_srcTableName" => "bolsa_empleo.vacancia_requisito_idioma"
));

$proto6["m_sql"] = "id_vacancia_requisito_idioma";
$proto6["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_idioma";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_requisito_idioma",
	"m_srcTableName" => "bolsa_empleo.vacancia_requisito_idioma"
));

$proto8["m_sql"] = "id_vacancia";
$proto8["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_idioma";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_idioma",
	"m_strTable" => "bolsa_empleo.vacancia_requisito_idioma",
	"m_srcTableName" => "bolsa_empleo.vacancia_requisito_idioma"
));

$proto10["m_sql"] = "id_idioma";
$proto10["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_idioma";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_nivel_idioma_habla",
	"m_strTable" => "bolsa_empleo.vacancia_requisito_idioma",
	"m_srcTableName" => "bolsa_empleo.vacancia_requisito_idioma"
));

$proto12["m_sql"] = "id_nivel_idioma_habla";
$proto12["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_idioma";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_nivel_idioma_escribe",
	"m_strTable" => "bolsa_empleo.vacancia_requisito_idioma",
	"m_srcTableName" => "bolsa_empleo.vacancia_requisito_idioma"
));

$proto14["m_sql"] = "id_nivel_idioma_escribe";
$proto14["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_idioma";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id_nivel_idioma_lee",
	"m_strTable" => "bolsa_empleo.vacancia_requisito_idioma",
	"m_srcTableName" => "bolsa_empleo.vacancia_requisito_idioma"
));

$proto16["m_sql"] = "id_nivel_idioma_lee";
$proto16["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_idioma";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "bolsa_empleo.vacancia_requisito_idioma";
$proto19["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_idioma";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id_vacancia_requisito_idioma";
$proto19["m_columns"][] = "id_vacancia";
$proto19["m_columns"][] = "id_idioma";
$proto19["m_columns"][] = "id_nivel_idioma_habla";
$proto19["m_columns"][] = "id_nivel_idioma_escribe";
$proto19["m_columns"][] = "id_nivel_idioma_lee";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "bolsa_empleo.vacancia_requisito_idioma";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_idioma";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.vacancia_requisito_idioma";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vacancia_requisito_idioma = createSqlQuery_vacancia_requisito_idioma();


	
		;

						

$tdatavacancia_requisito_idioma[".sqlquery"] = $queryData_vacancia_requisito_idioma;



include_once(getabspath("include/vacancia_requisito_idioma_events.php"));
$tdatavacancia_requisito_idioma[".hasEvents"] = true;

?>
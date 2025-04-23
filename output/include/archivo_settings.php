<?php
$tdataarchivo = array();
$tdataarchivo[".searchableFields"] = array();
$tdataarchivo[".ShortName"] = "archivo";
$tdataarchivo[".OwnerID"] = "";
$tdataarchivo[".OriginalTable"] = "bolsa_empleo.archivo";


$tdataarchivo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataarchivo[".originalPagesByType"] = $tdataarchivo[".pagesByType"];
$tdataarchivo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataarchivo[".originalPages"] = $tdataarchivo[".pages"];
$tdataarchivo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataarchivo[".originalDefaultPages"] = $tdataarchivo[".defaultPages"];

//	field labels
$fieldLabelsarchivo = array();
$fieldToolTipsarchivo = array();
$pageTitlesarchivo = array();
$placeHoldersarchivo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsarchivo["Spanish"] = array();
	$fieldToolTipsarchivo["Spanish"] = array();
	$placeHoldersarchivo["Spanish"] = array();
	$pageTitlesarchivo["Spanish"] = array();
	$fieldLabelsarchivo["Spanish"]["id_archivo"] = "Id";
	$fieldToolTipsarchivo["Spanish"]["id_archivo"] = "";
	$placeHoldersarchivo["Spanish"]["id_archivo"] = "";
	$fieldLabelsarchivo["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsarchivo["Spanish"]["nombre"] = "";
	$placeHoldersarchivo["Spanish"]["nombre"] = "";
	$fieldLabelsarchivo["Spanish"]["archivo"] = "Archivo";
	$fieldToolTipsarchivo["Spanish"]["archivo"] = "";
	$placeHoldersarchivo["Spanish"]["archivo"] = "";
	$fieldLabelsarchivo["Spanish"]["fecha_creacion"] = "Fecha Creacion";
	$fieldToolTipsarchivo["Spanish"]["fecha_creacion"] = "";
	$placeHoldersarchivo["Spanish"]["fecha_creacion"] = "";
	$fieldLabelsarchivo["Spanish"]["usuario_creacion"] = "Usuario Creacion";
	$fieldToolTipsarchivo["Spanish"]["usuario_creacion"] = "";
	$placeHoldersarchivo["Spanish"]["usuario_creacion"] = "";
	$fieldLabelsarchivo["Spanish"]["id_tipo_archivo"] = "Tipo Archivo";
	$fieldToolTipsarchivo["Spanish"]["id_tipo_archivo"] = "";
	$placeHoldersarchivo["Spanish"]["id_tipo_archivo"] = "";
	$fieldLabelsarchivo["Spanish"]["person_id"] = "Person Id";
	$fieldToolTipsarchivo["Spanish"]["person_id"] = "";
	$placeHoldersarchivo["Spanish"]["person_id"] = "";
	$fieldLabelsarchivo["Spanish"]["postulacion_id"] = "Postulacion Id";
	$fieldToolTipsarchivo["Spanish"]["postulacion_id"] = "";
	$placeHoldersarchivo["Spanish"]["postulacion_id"] = "";
	$pageTitlesarchivo["Spanish"]["add"] = "Agregar nuevo archivo";
	if (count($fieldToolTipsarchivo["Spanish"]))
		$tdataarchivo[".isUseToolTips"] = true;
}


	$tdataarchivo[".NCSearch"] = true;



$tdataarchivo[".shortTableName"] = "archivo";
$tdataarchivo[".nSecOptions"] = 0;

$tdataarchivo[".mainTableOwnerID"] = "";
$tdataarchivo[".entityType"] = 0;
$tdataarchivo[".connId"] = "eportal_at_192_168_70_170";


$tdataarchivo[".strOriginalTableName"] = "bolsa_empleo.archivo";

	



$tdataarchivo[".showAddInPopup"] = false;

$tdataarchivo[".showEditInPopup"] = false;

$tdataarchivo[".showViewInPopup"] = false;

$tdataarchivo[".listAjax"] = false;
//	temporary
//$tdataarchivo[".listAjax"] = false;

	$tdataarchivo[".audit"] = false;

	$tdataarchivo[".locking"] = false;


$pages = $tdataarchivo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataarchivo[".edit"] = true;
	$tdataarchivo[".afterEditAction"] = 1;
	$tdataarchivo[".closePopupAfterEdit"] = 1;
	$tdataarchivo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataarchivo[".add"] = true;
$tdataarchivo[".afterAddAction"] = 1;
$tdataarchivo[".closePopupAfterAdd"] = 1;
$tdataarchivo[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataarchivo[".list"] = true;
}



$tdataarchivo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataarchivo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataarchivo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataarchivo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataarchivo[".printFriendly"] = true;
}



$tdataarchivo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataarchivo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataarchivo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataarchivo[".isUseAjaxSuggest"] = true;



																																																																																							

$tdataarchivo[".ajaxCodeSnippetAdded"] = false;

$tdataarchivo[".buttonsAdded"] = false;

$tdataarchivo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataarchivo[".isUseTimeForSearch"] = false;


$tdataarchivo[".badgeColor"] = "778899";


$tdataarchivo[".allSearchFields"] = array();
$tdataarchivo[".filterFields"] = array();
$tdataarchivo[".requiredSearchFields"] = array();

$tdataarchivo[".googleLikeFields"] = array();
$tdataarchivo[".googleLikeFields"][] = "id_archivo";
$tdataarchivo[".googleLikeFields"][] = "nombre";
$tdataarchivo[".googleLikeFields"][] = "archivo";
$tdataarchivo[".googleLikeFields"][] = "fecha_creacion";
$tdataarchivo[".googleLikeFields"][] = "usuario_creacion";
$tdataarchivo[".googleLikeFields"][] = "id_tipo_archivo";
$tdataarchivo[".googleLikeFields"][] = "person_id";
$tdataarchivo[".googleLikeFields"][] = "postulacion_id";



$tdataarchivo[".tableType"] = "list";

$tdataarchivo[".printerPageOrientation"] = 0;
$tdataarchivo[".nPrinterPageScale"] = 100;

$tdataarchivo[".nPrinterSplitRecords"] = 40;

$tdataarchivo[".geocodingEnabled"] = false;










$tdataarchivo[".pageSize"] = 20;

$tdataarchivo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataarchivo[".strOrderBy"] = $tstrOrderBy;

$tdataarchivo[".orderindexes"] = array();


$tdataarchivo[".sqlHead"] = "SELECT id_archivo,  	nombre,  	archivo,  	fecha_creacion,  	usuario_creacion,  	id_tipo_archivo,  	person_id,  	postulacion_id";
$tdataarchivo[".sqlFrom"] = "FROM bolsa_empleo.archivo";
$tdataarchivo[".sqlWhereExpr"] = "";
$tdataarchivo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataarchivo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataarchivo[".arrGroupsPerPage"] = $arrGPP;

$tdataarchivo[".highlightSearchResults"] = true;

$tableKeysarchivo = array();
$tableKeysarchivo[] = "id_archivo";
$tdataarchivo[".Keys"] = $tableKeysarchivo;


$tdataarchivo[".hideMobileList"] = array();




//	id_archivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_archivo";
	$fdata["GoodName"] = "id_archivo";
	$fdata["ownerTable"] = "bolsa_empleo.archivo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_archivo","id_archivo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdataarchivo["id_archivo"] = $fdata;
		$tdataarchivo[".searchableFields"][] = "id_archivo";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "bolsa_empleo.archivo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_archivo","nombre");
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


	$tdataarchivo["nombre"] = $fdata;
		$tdataarchivo[".searchableFields"][] = "nombre";
//	archivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "archivo";
	$fdata["GoodName"] = "archivo";
	$fdata["ownerTable"] = "bolsa_empleo.archivo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_archivo","archivo");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "archivo";

		$fdata["sourceSingle"] = "archivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "archivo";

		$fdata["DeleteAssociatedFile"] = true;

	
		$fdata["UploadCodeExpression"] = true;

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
					$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("pdf");
						$edata["acceptFileTypesHtml"] = ".pdf";

		$edata["maxNumberOfFiles"] = 1;

		$edata["maxFileSize"] = 1000;

		$edata["maxTotalFilesSize"] = 1000;

	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;


	$fdata["Absolute"] = true;


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


	$tdataarchivo["archivo"] = $fdata;
		$tdataarchivo[".searchableFields"][] = "archivo";
//	fecha_creacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_creacion";
	$fdata["GoodName"] = "fecha_creacion";
	$fdata["ownerTable"] = "bolsa_empleo.archivo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_archivo","fecha_creacion");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_creacion";

		$fdata["sourceSingle"] = "fecha_creacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_creacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdataarchivo["fecha_creacion"] = $fdata;
		$tdataarchivo[".searchableFields"][] = "fecha_creacion";
//	usuario_creacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usuario_creacion";
	$fdata["GoodName"] = "usuario_creacion";
	$fdata["ownerTable"] = "bolsa_empleo.archivo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_archivo","usuario_creacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usuario_creacion";

		$fdata["sourceSingle"] = "usuario_creacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario_creacion";

	
	
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


	$tdataarchivo["usuario_creacion"] = $fdata;
		$tdataarchivo[".searchableFields"][] = "usuario_creacion";
//	id_tipo_archivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id_tipo_archivo";
	$fdata["GoodName"] = "id_tipo_archivo";
	$fdata["ownerTable"] = "bolsa_empleo.archivo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_archivo","id_tipo_archivo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_tipo_archivo";

		$fdata["sourceSingle"] = "id_tipo_archivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_tipo_archivo";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.archivo_tipo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_tipo_archivo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tipo_archivo";

	

	
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


	$tdataarchivo["id_tipo_archivo"] = $fdata;
		$tdataarchivo[".searchableFields"][] = "id_tipo_archivo";
//	person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "person_id";
	$fdata["GoodName"] = "person_id";
	$fdata["ownerTable"] = "bolsa_empleo.archivo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_archivo","person_id");
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


	$tdataarchivo["person_id"] = $fdata;
		$tdataarchivo[".searchableFields"][] = "person_id";
//	postulacion_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "postulacion_id";
	$fdata["GoodName"] = "postulacion_id";
	$fdata["ownerTable"] = "bolsa_empleo.archivo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_archivo","postulacion_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "postulacion_id";

		$fdata["sourceSingle"] = "postulacion_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "postulacion_id";

	
	
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


	$tdataarchivo["postulacion_id"] = $fdata;
		$tdataarchivo[".searchableFields"][] = "postulacion_id";


$tables_data["bolsa_empleo.archivo"]=&$tdataarchivo;
$field_labels["bolsa_empleo_archivo"] = &$fieldLabelsarchivo;
$fieldToolTips["bolsa_empleo_archivo"] = &$fieldToolTipsarchivo;
$placeHolders["bolsa_empleo_archivo"] = &$placeHoldersarchivo;
$page_titles["bolsa_empleo_archivo"] = &$pageTitlesarchivo;


changeTextControlsToDate( "bolsa_empleo.archivo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.archivo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.archivo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_archivo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_archivo,  	nombre,  	archivo,  	fecha_creacion,  	usuario_creacion,  	id_tipo_archivo,  	person_id,  	postulacion_id";
$proto0["m_strFrom"] = "FROM bolsa_empleo.archivo";
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
	"m_strName" => "id_archivo",
	"m_strTable" => "bolsa_empleo.archivo",
	"m_srcTableName" => "bolsa_empleo.archivo"
));

$proto6["m_sql"] = "id_archivo";
$proto6["m_srcTableName"] = "bolsa_empleo.archivo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "bolsa_empleo.archivo",
	"m_srcTableName" => "bolsa_empleo.archivo"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "bolsa_empleo.archivo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "archivo",
	"m_strTable" => "bolsa_empleo.archivo",
	"m_srcTableName" => "bolsa_empleo.archivo"
));

$proto10["m_sql"] = "archivo";
$proto10["m_srcTableName"] = "bolsa_empleo.archivo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_creacion",
	"m_strTable" => "bolsa_empleo.archivo",
	"m_srcTableName" => "bolsa_empleo.archivo"
));

$proto12["m_sql"] = "fecha_creacion";
$proto12["m_srcTableName"] = "bolsa_empleo.archivo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario_creacion",
	"m_strTable" => "bolsa_empleo.archivo",
	"m_srcTableName" => "bolsa_empleo.archivo"
));

$proto14["m_sql"] = "usuario_creacion";
$proto14["m_srcTableName"] = "bolsa_empleo.archivo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id_tipo_archivo",
	"m_strTable" => "bolsa_empleo.archivo",
	"m_srcTableName" => "bolsa_empleo.archivo"
));

$proto16["m_sql"] = "id_tipo_archivo";
$proto16["m_srcTableName"] = "bolsa_empleo.archivo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "bolsa_empleo.archivo",
	"m_srcTableName" => "bolsa_empleo.archivo"
));

$proto18["m_sql"] = "person_id";
$proto18["m_srcTableName"] = "bolsa_empleo.archivo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "postulacion_id",
	"m_strTable" => "bolsa_empleo.archivo",
	"m_srcTableName" => "bolsa_empleo.archivo"
));

$proto20["m_sql"] = "postulacion_id";
$proto20["m_srcTableName"] = "bolsa_empleo.archivo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "bolsa_empleo.archivo";
$proto23["m_srcTableName"] = "bolsa_empleo.archivo";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id_archivo";
$proto23["m_columns"][] = "nombre";
$proto23["m_columns"][] = "archivo";
$proto23["m_columns"][] = "fecha_creacion";
$proto23["m_columns"][] = "usuario_creacion";
$proto23["m_columns"][] = "id_tipo_archivo";
$proto23["m_columns"][] = "person_id";
$proto23["m_columns"][] = "postulacion_id";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "bolsa_empleo.archivo";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "bolsa_empleo.archivo";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.archivo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_archivo = createSqlQuery_archivo();


	
		;

								

$tdataarchivo[".sqlquery"] = $queryData_archivo;



include_once(getabspath("include/archivo_events.php"));
$tdataarchivo[".hasEvents"] = true;

?>
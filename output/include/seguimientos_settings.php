<?php
$tdataseguimientos = array();
$tdataseguimientos[".searchableFields"] = array();
$tdataseguimientos[".ShortName"] = "seguimientos";
$tdataseguimientos[".OwnerID"] = "";
$tdataseguimientos[".OriginalTable"] = "bolsa_empleo.seguimientos";


$tdataseguimientos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataseguimientos[".originalPagesByType"] = $tdataseguimientos[".pagesByType"];
$tdataseguimientos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataseguimientos[".originalPages"] = $tdataseguimientos[".pages"];
$tdataseguimientos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataseguimientos[".originalDefaultPages"] = $tdataseguimientos[".defaultPages"];

//	field labels
$fieldLabelsseguimientos = array();
$fieldToolTipsseguimientos = array();
$pageTitlesseguimientos = array();
$placeHoldersseguimientos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsseguimientos["Spanish"] = array();
	$fieldToolTipsseguimientos["Spanish"] = array();
	$placeHoldersseguimientos["Spanish"] = array();
	$pageTitlesseguimientos["Spanish"] = array();
	$fieldLabelsseguimientos["Spanish"]["id_seguimiento"] = "ID";
	$fieldToolTipsseguimientos["Spanish"]["id_seguimiento"] = "";
	$placeHoldersseguimientos["Spanish"]["id_seguimiento"] = "";
	$fieldLabelsseguimientos["Spanish"]["fecha_creacion"] = "Fecha Audit";
	$fieldToolTipsseguimientos["Spanish"]["fecha_creacion"] = "";
	$placeHoldersseguimientos["Spanish"]["fecha_creacion"] = "";
	$fieldLabelsseguimientos["Spanish"]["id_postulacion"] = "ID Postulación";
	$fieldToolTipsseguimientos["Spanish"]["id_postulacion"] = "";
	$placeHoldersseguimientos["Spanish"]["id_postulacion"] = "";
	$fieldLabelsseguimientos["Spanish"]["id_estado_anterior"] = "Estado Anterior";
	$fieldToolTipsseguimientos["Spanish"]["id_estado_anterior"] = "";
	$placeHoldersseguimientos["Spanish"]["id_estado_anterior"] = "";
	$fieldLabelsseguimientos["Spanish"]["id_nuevo_estado"] = "Estado";
	$fieldToolTipsseguimientos["Spanish"]["id_nuevo_estado"] = "";
	$placeHoldersseguimientos["Spanish"]["id_nuevo_estado"] = "";
	$fieldLabelsseguimientos["Spanish"]["usuario_carga_id"] = "Usuario Carga Id";
	$fieldToolTipsseguimientos["Spanish"]["usuario_carga_id"] = "";
	$placeHoldersseguimientos["Spanish"]["usuario_carga_id"] = "";
	$fieldLabelsseguimientos["Spanish"]["usuario_carga_nombre"] = "Usuario Audit";
	$fieldToolTipsseguimientos["Spanish"]["usuario_carga_nombre"] = "";
	$placeHoldersseguimientos["Spanish"]["usuario_carga_nombre"] = "";
	$fieldLabelsseguimientos["Spanish"]["id_vacancia"] = "Nro. Vacancia";
	$fieldToolTipsseguimientos["Spanish"]["id_vacancia"] = "";
	$placeHoldersseguimientos["Spanish"]["id_vacancia"] = "";
	$fieldLabelsseguimientos["Spanish"]["id_empresa_sucursal"] = "Empresa";
	$fieldToolTipsseguimientos["Spanish"]["id_empresa_sucursal"] = "";
	$placeHoldersseguimientos["Spanish"]["id_empresa_sucursal"] = "";
	$fieldLabelsseguimientos["Spanish"]["fk_personaid"] = "Fk Personaid";
	$fieldToolTipsseguimientos["Spanish"]["fk_personaid"] = "";
	$placeHoldersseguimientos["Spanish"]["fk_personaid"] = "";
	$fieldLabelsseguimientos["Spanish"]["nombre"] = "Postulante";
	$fieldToolTipsseguimientos["Spanish"]["nombre"] = "";
	$placeHoldersseguimientos["Spanish"]["nombre"] = "";
	$fieldLabelsseguimientos["Spanish"]["apellidos"] = "Apellidos";
	$fieldToolTipsseguimientos["Spanish"]["apellidos"] = "";
	$placeHoldersseguimientos["Spanish"]["apellidos"] = "";
	$fieldLabelsseguimientos["Spanish"]["valor"] = "Nro. Cédula";
	$fieldToolTipsseguimientos["Spanish"]["valor"] = "";
	$placeHoldersseguimientos["Spanish"]["valor"] = "";
	$pageTitlesseguimientos["Spanish"]["list"] = "Historial de Cambios";
	if (count($fieldToolTipsseguimientos["Spanish"]))
		$tdataseguimientos[".isUseToolTips"] = true;
}


	$tdataseguimientos[".NCSearch"] = true;



$tdataseguimientos[".shortTableName"] = "seguimientos";
$tdataseguimientos[".nSecOptions"] = 0;

$tdataseguimientos[".mainTableOwnerID"] = "";
$tdataseguimientos[".entityType"] = 0;
$tdataseguimientos[".connId"] = "eportal_at_192_168_70_170";


$tdataseguimientos[".strOriginalTableName"] = "bolsa_empleo.seguimientos";

	



$tdataseguimientos[".showAddInPopup"] = false;

$tdataseguimientos[".showEditInPopup"] = false;

$tdataseguimientos[".showViewInPopup"] = false;

$tdataseguimientos[".listAjax"] = false;
//	temporary
//$tdataseguimientos[".listAjax"] = false;

	$tdataseguimientos[".audit"] = false;

	$tdataseguimientos[".locking"] = false;


$pages = $tdataseguimientos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataseguimientos[".edit"] = true;
	$tdataseguimientos[".afterEditAction"] = 1;
	$tdataseguimientos[".closePopupAfterEdit"] = 1;
	$tdataseguimientos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataseguimientos[".add"] = true;
$tdataseguimientos[".afterAddAction"] = 1;
$tdataseguimientos[".closePopupAfterAdd"] = 1;
$tdataseguimientos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataseguimientos[".list"] = true;
}



$tdataseguimientos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataseguimientos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataseguimientos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataseguimientos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataseguimientos[".printFriendly"] = true;
}



$tdataseguimientos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataseguimientos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataseguimientos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataseguimientos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																

$tdataseguimientos[".ajaxCodeSnippetAdded"] = false;

$tdataseguimientos[".buttonsAdded"] = false;

$tdataseguimientos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataseguimientos[".isUseTimeForSearch"] = false;


$tdataseguimientos[".badgeColor"] = "5147f6";


$tdataseguimientos[".allSearchFields"] = array();
$tdataseguimientos[".filterFields"] = array();
$tdataseguimientos[".requiredSearchFields"] = array();

$tdataseguimientos[".googleLikeFields"] = array();
$tdataseguimientos[".googleLikeFields"][] = "id_seguimiento";
$tdataseguimientos[".googleLikeFields"][] = "fecha_creacion";
$tdataseguimientos[".googleLikeFields"][] = "id_postulacion";
$tdataseguimientos[".googleLikeFields"][] = "id_estado_anterior";
$tdataseguimientos[".googleLikeFields"][] = "id_nuevo_estado";
$tdataseguimientos[".googleLikeFields"][] = "usuario_carga_id";
$tdataseguimientos[".googleLikeFields"][] = "usuario_carga_nombre";
$tdataseguimientos[".googleLikeFields"][] = "id_vacancia";
$tdataseguimientos[".googleLikeFields"][] = "id_empresa_sucursal";
$tdataseguimientos[".googleLikeFields"][] = "fk_personaid";
$tdataseguimientos[".googleLikeFields"][] = "nombre";
$tdataseguimientos[".googleLikeFields"][] = "apellidos";
$tdataseguimientos[".googleLikeFields"][] = "valor";



$tdataseguimientos[".tableType"] = "list";

$tdataseguimientos[".printerPageOrientation"] = 0;
$tdataseguimientos[".nPrinterPageScale"] = 100;

$tdataseguimientos[".nPrinterSplitRecords"] = 40;

$tdataseguimientos[".geocodingEnabled"] = false;










$tdataseguimientos[".pageSize"] = 20;

$tdataseguimientos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataseguimientos[".strOrderBy"] = $tstrOrderBy;

$tdataseguimientos[".orderindexes"] = array();


$tdataseguimientos[".sqlHead"] = "SELECT s.id_seguimiento,  	s.fecha_creacion,  	s.id_postulacion,  	s.id_estado_anterior,  	s.id_nuevo_estado,  	s.usuario_carga_id,  	s.usuario_carga_nombre,  	s.id_vacancia,  	s.id_empresa_sucursal,  	p.fk_personaid,  	per.nombre,   	per.apellidos,  	pd.valor";
$tdataseguimientos[".sqlFrom"] = "FROM bolsa_empleo.seguimientos s LEFT JOIN bolsa_empleo.postulacion p ON s.id_postulacion = p.id_postulacion AND s.id_vacancia = p.id_vacancia  JOIN eportal.eportal.persons per ON p.fk_personaid = per.id  JOIN eportal.eportal.persons_docs pd ON per.id = pd.person_id";
$tdataseguimientos[".sqlWhereExpr"] = "";
$tdataseguimientos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataseguimientos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataseguimientos[".arrGroupsPerPage"] = $arrGPP;

$tdataseguimientos[".highlightSearchResults"] = true;

$tableKeysseguimientos = array();
$tableKeysseguimientos[] = "id_seguimiento";
$tdataseguimientos[".Keys"] = $tableKeysseguimientos;


$tdataseguimientos[".hideMobileList"] = array();




//	id_seguimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_seguimiento";
	$fdata["GoodName"] = "id_seguimiento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimientos","id_seguimiento");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_seguimiento";

		$fdata["sourceSingle"] = "id_seguimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s.id_seguimiento";

	
	
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


	$tdataseguimientos["id_seguimiento"] = $fdata;
		$tdataseguimientos[".searchableFields"][] = "id_seguimiento";
//	fecha_creacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_creacion";
	$fdata["GoodName"] = "fecha_creacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimientos","fecha_creacion");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_creacion";

		$fdata["sourceSingle"] = "fecha_creacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s.fecha_creacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataseguimientos["fecha_creacion"] = $fdata;
		$tdataseguimientos[".searchableFields"][] = "fecha_creacion";
//	id_postulacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_postulacion";
	$fdata["GoodName"] = "id_postulacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimientos","id_postulacion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_postulacion";

		$fdata["sourceSingle"] = "id_postulacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s.id_postulacion";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.postulacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_postulacion";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_postulacion";

	

	
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


	$tdataseguimientos["id_postulacion"] = $fdata;
		$tdataseguimientos[".searchableFields"][] = "id_postulacion";
//	id_estado_anterior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_estado_anterior";
	$fdata["GoodName"] = "id_estado_anterior";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimientos","id_estado_anterior");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_estado_anterior";

		$fdata["sourceSingle"] = "id_estado_anterior";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s.id_estado_anterior";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
	$edata["LookupTable"] = "bolsa_empleo.estado_postulacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_estado_postulacion";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

	

	
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


	$tdataseguimientos["id_estado_anterior"] = $fdata;
		$tdataseguimientos[".searchableFields"][] = "id_estado_anterior";
//	id_nuevo_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_nuevo_estado";
	$fdata["GoodName"] = "id_nuevo_estado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimientos","id_nuevo_estado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_nuevo_estado";

		$fdata["sourceSingle"] = "id_nuevo_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s.id_nuevo_estado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
	$edata["LookupTable"] = "bolsa_empleo.estado_postulacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_estado_postulacion";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

	

	
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


	$tdataseguimientos["id_nuevo_estado"] = $fdata;
		$tdataseguimientos[".searchableFields"][] = "id_nuevo_estado";
//	usuario_carga_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usuario_carga_id";
	$fdata["GoodName"] = "usuario_carga_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimientos","usuario_carga_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usuario_carga_id";

		$fdata["sourceSingle"] = "usuario_carga_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s.usuario_carga_id";

	
	
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


	$tdataseguimientos["usuario_carga_id"] = $fdata;
		$tdataseguimientos[".searchableFields"][] = "usuario_carga_id";
//	usuario_carga_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "usuario_carga_nombre";
	$fdata["GoodName"] = "usuario_carga_nombre";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimientos","usuario_carga_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usuario_carga_nombre";

		$fdata["sourceSingle"] = "usuario_carga_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s.usuario_carga_nombre";

	
	
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


	$tdataseguimientos["usuario_carga_nombre"] = $fdata;
		$tdataseguimientos[".searchableFields"][] = "usuario_carga_nombre";
//	id_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id_vacancia";
	$fdata["GoodName"] = "id_vacancia";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimientos","id_vacancia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_vacancia";

		$fdata["sourceSingle"] = "id_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s.id_vacancia";

	
	
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


	$tdataseguimientos["id_vacancia"] = $fdata;
		$tdataseguimientos[".searchableFields"][] = "id_vacancia";
//	id_empresa_sucursal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id_empresa_sucursal";
	$fdata["GoodName"] = "id_empresa_sucursal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimientos","id_empresa_sucursal");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_empresa_sucursal";

		$fdata["sourceSingle"] = "id_empresa_sucursal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s.id_empresa_sucursal";

	
	
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fantasy";

	

	
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


	$tdataseguimientos["id_empresa_sucursal"] = $fdata;
		$tdataseguimientos[".searchableFields"][] = "id_empresa_sucursal";
//	fk_personaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fk_personaid";
	$fdata["GoodName"] = "fk_personaid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimientos","fk_personaid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_personaid";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.fk_personaid";

	
	
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


	$tdataseguimientos["fk_personaid"] = $fdata;
		$tdataseguimientos[".searchableFields"][] = "fk_personaid";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimientos","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per.nombre";

	
	
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


	$tdataseguimientos["nombre"] = $fdata;
		$tdataseguimientos[".searchableFields"][] = "nombre";
//	apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "apellidos";
	$fdata["GoodName"] = "apellidos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimientos","apellidos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apellidos";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per.apellidos";

	
	
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


	$tdataseguimientos["apellidos"] = $fdata;
		$tdataseguimientos[".searchableFields"][] = "apellidos";
//	valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "valor";
	$fdata["GoodName"] = "valor";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_seguimientos","valor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "valor";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pd.valor";

	
	
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


	$tdataseguimientos["valor"] = $fdata;
		$tdataseguimientos[".searchableFields"][] = "valor";


$tables_data["bolsa_empleo.seguimientos"]=&$tdataseguimientos;
$field_labels["bolsa_empleo_seguimientos"] = &$fieldLabelsseguimientos;
$fieldToolTips["bolsa_empleo_seguimientos"] = &$fieldToolTipsseguimientos;
$placeHolders["bolsa_empleo_seguimientos"] = &$placeHoldersseguimientos;
$page_titles["bolsa_empleo_seguimientos"] = &$pageTitlesseguimientos;


changeTextControlsToDate( "bolsa_empleo.seguimientos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.seguimientos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.seguimientos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.postulacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.postulacion_seleccionado";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "postulacion_seleccionado";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.seguimientos"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.seguimientos"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.seguimientos"][0]["masterKeys"][]="id_postulacion";
				$masterTablesData["bolsa_empleo.seguimientos"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.seguimientos"][0]["detailKeys"][]="id_postulacion";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.postulacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.postulacion_convocado";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "postulacion_convocado";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.seguimientos"][1] = $masterParams;
				$masterTablesData["bolsa_empleo.seguimientos"][1]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.seguimientos"][1]["masterKeys"][]="id_postulacion";
				$masterTablesData["bolsa_empleo.seguimientos"][1]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.seguimientos"][1]["detailKeys"][]="id_postulacion";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.postulacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.postulacion_postulado";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "postulacion_postulado";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.seguimientos"][2] = $masterParams;
				$masterTablesData["bolsa_empleo.seguimientos"][2]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.seguimientos"][2]["masterKeys"][]="id_postulacion";
				$masterTablesData["bolsa_empleo.seguimientos"][2]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.seguimientos"][2]["detailKeys"][]="id_postulacion";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.postulacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.postulacion_insertado";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "postulacion_insertado";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.seguimientos"][3] = $masterParams;
				$masterTablesData["bolsa_empleo.seguimientos"][3]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.seguimientos"][3]["masterKeys"][]="id_postulacion";
				$masterTablesData["bolsa_empleo.seguimientos"][3]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.seguimientos"][3]["detailKeys"][]="id_postulacion";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.postulacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.postulacion_preseleccionado";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "postulacion_preseleccionado";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.seguimientos"][4] = $masterParams;
				$masterTablesData["bolsa_empleo.seguimientos"][4]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.seguimientos"][4]["masterKeys"][]="id_postulacion";
				$masterTablesData["bolsa_empleo.seguimientos"][4]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.seguimientos"][4]["detailKeys"][]="id_postulacion";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.postulacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.postulacion_importar_planilla";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "postulacion_importar_planilla";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.seguimientos"][5] = $masterParams;
				$masterTablesData["bolsa_empleo.seguimientos"][5]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.seguimientos"][5]["masterKeys"][]="id_postulacion";
				$masterTablesData["bolsa_empleo.seguimientos"][5]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.seguimientos"][5]["detailKeys"][]="id_postulacion";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.seguimientos"][6] = $masterParams;
				$masterTablesData["bolsa_empleo.seguimientos"][6]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.seguimientos"][6]["masterKeys"][]="id_vacancias";
				$masterTablesData["bolsa_empleo.seguimientos"][6]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.seguimientos"][6]["detailKeys"][]="id_vacancia";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_seguimientos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "s.id_seguimiento,  	s.fecha_creacion,  	s.id_postulacion,  	s.id_estado_anterior,  	s.id_nuevo_estado,  	s.usuario_carga_id,  	s.usuario_carga_nombre,  	s.id_vacancia,  	s.id_empresa_sucursal,  	p.fk_personaid,  	per.nombre,   	per.apellidos,  	pd.valor";
$proto0["m_strFrom"] = "FROM bolsa_empleo.seguimientos s LEFT JOIN bolsa_empleo.postulacion p ON s.id_postulacion = p.id_postulacion AND s.id_vacancia = p.id_vacancia  JOIN eportal.eportal.persons per ON p.fk_personaid = per.id  JOIN eportal.eportal.persons_docs pd ON per.id = pd.person_id";
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
$obj = new SQLNonParsed(array(
	"m_sql" => "s.id_seguimiento"
));

$proto6["m_sql"] = "s.id_seguimiento";
$proto6["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "s.fecha_creacion"
));

$proto8["m_sql"] = "s.fecha_creacion";
$proto8["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "s.id_postulacion"
));

$proto10["m_sql"] = "s.id_postulacion";
$proto10["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "s.id_estado_anterior"
));

$proto12["m_sql"] = "s.id_estado_anterior";
$proto12["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "s.id_nuevo_estado"
));

$proto14["m_sql"] = "s.id_nuevo_estado";
$proto14["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "s.usuario_carga_id"
));

$proto16["m_sql"] = "s.usuario_carga_id";
$proto16["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "s.usuario_carga_nombre"
));

$proto18["m_sql"] = "s.usuario_carga_nombre";
$proto18["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "s.id_vacancia"
));

$proto20["m_sql"] = "s.id_vacancia";
$proto20["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "s.id_empresa_sucursal"
));

$proto22["m_sql"] = "s.id_empresa_sucursal";
$proto22["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "p.fk_personaid"
));

$proto24["m_sql"] = "p.fk_personaid";
$proto24["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "per.nombre"
));

$proto26["m_sql"] = "per.nombre";
$proto26["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "per.apellidos"
));

$proto28["m_sql"] = "per.apellidos";
$proto28["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "pd.valor"
));

$proto30["m_sql"] = "pd.valor";
$proto30["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "bolsa_empleo.seguimientos";
$proto33["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id_seguimiento";
$proto33["m_columns"][] = "fecha_creacion";
$proto33["m_columns"][] = "id_postulacion";
$proto33["m_columns"][] = "id_estado_anterior";
$proto33["m_columns"][] = "id_nuevo_estado";
$proto33["m_columns"][] = "usuario_carga_id";
$proto33["m_columns"][] = "usuario_carga_nombre";
$proto33["m_columns"][] = "id_vacancia";
$proto33["m_columns"][] = "id_empresa_sucursal";
$proto33["m_columns"][] = "metodo_insercion";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "bolsa_empleo.seguimientos s";
$proto32["m_alias"] = "s";
$proto32["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_LEFTJOIN";
			$proto37=array();
$proto37["m_strName"] = "bolsa_empleo.postulacion";
$proto37["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id_postulacion";
$proto37["m_columns"][] = "id_vacancia";
$proto37["m_columns"][] = "id_estado";
$proto37["m_columns"][] = "fecha_postulacion";
$proto37["m_columns"][] = "fk_personaid";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "LEFT JOIN bolsa_empleo.postulacion p ON s.id_postulacion = p.id_postulacion AND s.id_vacancia = p.id_vacancia";
$proto36["m_alias"] = "p";
$proto36["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto38=array();
$proto38["m_sql"] = "s.id_postulacion = p.id_postulacion AND s.id_vacancia = p.id_vacancia";
$proto38["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "s.id_postulacion = p.id_postulacion AND s.id_vacancia = p.id_vacancia"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
						$proto40=array();
$proto40["m_sql"] = "s.id_postulacion = p.id_postulacion";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_postulacion",
	"m_strTable" => "s",
	"m_srcTableName" => "bolsa_empleo.seguimientos"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= p.id_postulacion";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

			$proto38["m_contained"][]=$obj;
						$proto42=array();
$proto42["m_sql"] = "s.id_vacancia = p.id_vacancia";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "s",
	"m_srcTableName" => "bolsa_empleo.seguimientos"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= p.id_vacancia";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

			$proto38["m_contained"][]=$obj;
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_INNERJOIN";
			$proto45=array();
$proto45["m_strName"] = "eportal.eportal.persons";
$proto45["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto45["m_columns"] = array();
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "JOIN eportal.eportal.persons per ON p.fk_personaid = per.id";
$proto44["m_alias"] = "per";
$proto44["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto46=array();
$proto46["m_sql"] = "p.fk_personaid = per.id";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "fk_personaid",
	"m_strTable" => "p",
	"m_srcTableName" => "bolsa_empleo.seguimientos"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= per.id";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
$obj = new SQLNonParsed(array(
	"m_sql" => "JOIN eportal.eportal.persons_docs pd ON per.id = pd.person_id"
));

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "JOIN eportal.eportal.persons_docs pd ON per.id = pd.person_id";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "bolsa_empleo.seguimientos";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.seguimientos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_seguimientos = createSqlQuery_seguimientos();


	
		;

													

$tdataseguimientos[".sqlquery"] = $queryData_seguimientos;



$tdataseguimientos[".hasEvents"] = false;

?>
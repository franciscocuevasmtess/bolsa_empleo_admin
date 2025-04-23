<?php
$tdatapersons = array();
$tdatapersons[".searchableFields"] = array();
$tdatapersons[".ShortName"] = "persons";
$tdatapersons[".OwnerID"] = "";
$tdatapersons[".OriginalTable"] = "eportal.persons";


$tdatapersons[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatapersons[".originalPagesByType"] = $tdatapersons[".pagesByType"];
$tdatapersons[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatapersons[".originalPages"] = $tdatapersons[".pages"];
$tdatapersons[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatapersons[".originalDefaultPages"] = $tdatapersons[".defaultPages"];

//	field labels
$fieldLabelspersons = array();
$fieldToolTipspersons = array();
$pageTitlespersons = array();
$placeHolderspersons = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersons["Spanish"] = array();
	$fieldToolTipspersons["Spanish"] = array();
	$placeHolderspersons["Spanish"] = array();
	$pageTitlespersons["Spanish"] = array();
	$fieldLabelspersons["Spanish"]["id"] = "Id";
	$fieldToolTipspersons["Spanish"]["id"] = "";
	$placeHolderspersons["Spanish"]["id"] = "";
	$fieldLabelspersons["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipspersons["Spanish"]["nombre"] = "";
	$placeHolderspersons["Spanish"]["nombre"] = "";
	$fieldLabelspersons["Spanish"]["apellidos"] = "Apellidos";
	$fieldToolTipspersons["Spanish"]["apellidos"] = "";
	$placeHolderspersons["Spanish"]["apellidos"] = "";
	$fieldLabelspersons["Spanish"]["nacionalidad"] = "Nacionalidad";
	$fieldToolTipspersons["Spanish"]["nacionalidad"] = "";
	$placeHolderspersons["Spanish"]["nacionalidad"] = "";
	$fieldLabelspersons["Spanish"]["fechanac"] = "Fechanac";
	$fieldToolTipspersons["Spanish"]["fechanac"] = "";
	$placeHolderspersons["Spanish"]["fechanac"] = "";
	$fieldLabelspersons["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipspersons["Spanish"]["sexo"] = "";
	$placeHolderspersons["Spanish"]["sexo"] = "";
	$fieldLabelspersons["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipspersons["Spanish"]["estado_civil"] = "";
	$placeHolderspersons["Spanish"]["estado_civil"] = "";
	$fieldLabelspersons["Spanish"]["canthijos"] = "Canthijos";
	$fieldToolTipspersons["Spanish"]["canthijos"] = "";
	$placeHolderspersons["Spanish"]["canthijos"] = "";
	$fieldLabelspersons["Spanish"]["domicilio"] = "Domicilio";
	$fieldToolTipspersons["Spanish"]["domicilio"] = "";
	$placeHolderspersons["Spanish"]["domicilio"] = "";
	$fieldLabelspersons["Spanish"]["city_id"] = "City Id";
	$fieldToolTipspersons["Spanish"]["city_id"] = "";
	$placeHolderspersons["Spanish"]["city_id"] = "";
	$fieldLabelspersons["Spanish"]["distrito_id"] = "Distrito Id";
	$fieldToolTipspersons["Spanish"]["distrito_id"] = "";
	$placeHolderspersons["Spanish"]["distrito_id"] = "";
	$fieldLabelspersons["Spanish"]["esindigena"] = "Esindigena";
	$fieldToolTipspersons["Spanish"]["esindigena"] = "";
	$placeHolderspersons["Spanish"]["esindigena"] = "";
	$fieldLabelspersons["Spanish"]["id_profesion"] = "Id Profesion";
	$fieldToolTipspersons["Spanish"]["id_profesion"] = "";
	$placeHolderspersons["Spanish"]["id_profesion"] = "";
	$fieldLabelspersons["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipspersons["Spanish"]["actualizado"] = "";
	$placeHolderspersons["Spanish"]["actualizado"] = "";
	$fieldLabelspersons["Spanish"]["porcentaje_discapacidad"] = "Porcentaje Discapacidad";
	$fieldToolTipspersons["Spanish"]["porcentaje_discapacidad"] = "";
	$placeHolderspersons["Spanish"]["porcentaje_discapacidad"] = "";
	$fieldLabelspersons["Spanish"]["adjunto_potencial_discapacidad"] = "Adjunto Potencial Discapacidad";
	$fieldToolTipspersons["Spanish"]["adjunto_potencial_discapacidad"] = "";
	$placeHolderspersons["Spanish"]["adjunto_potencial_discapacidad"] = "";
	$fieldLabelspersons["Spanish"]["adjunto_certificado_discapacidad"] = "Adjunto Certificado Discapacidad";
	$fieldToolTipspersons["Spanish"]["adjunto_certificado_discapacidad"] = "";
	$placeHolderspersons["Spanish"]["adjunto_certificado_discapacidad"] = "";
	$fieldLabelspersons["Spanish"]["foto"] = "Foto";
	$fieldToolTipspersons["Spanish"]["foto"] = "";
	$placeHolderspersons["Spanish"]["foto"] = "";
	$fieldLabelspersons["Spanish"]["resumen"] = "Resumen";
	$fieldToolTipspersons["Spanish"]["resumen"] = "";
	$placeHolderspersons["Spanish"]["resumen"] = "";
	$fieldLabelspersons["Spanish"]["fk_habilidades"] = "Fk Habilidades";
	$fieldToolTipspersons["Spanish"]["fk_habilidades"] = "";
	$placeHolderspersons["Spanish"]["fk_habilidades"] = "";
	$fieldLabelspersons["Spanish"]["id_barrio"] = "Id Barrio";
	$fieldToolTipspersons["Spanish"]["id_barrio"] = "";
	$placeHolderspersons["Spanish"]["id_barrio"] = "";
	if (count($fieldToolTipspersons["Spanish"]))
		$tdatapersons[".isUseToolTips"] = true;
}


	$tdatapersons[".NCSearch"] = true;



$tdatapersons[".shortTableName"] = "persons";
$tdatapersons[".nSecOptions"] = 0;

$tdatapersons[".mainTableOwnerID"] = "";
$tdatapersons[".entityType"] = 0;
$tdatapersons[".connId"] = "eportal_at_192_168_70_170";


$tdatapersons[".strOriginalTableName"] = "eportal.persons";

	



$tdatapersons[".showAddInPopup"] = false;

$tdatapersons[".showEditInPopup"] = false;

$tdatapersons[".showViewInPopup"] = false;

$tdatapersons[".listAjax"] = false;
//	temporary
//$tdatapersons[".listAjax"] = false;

	$tdatapersons[".audit"] = false;

	$tdatapersons[".locking"] = false;


$pages = $tdatapersons[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersons[".edit"] = true;
	$tdatapersons[".afterEditAction"] = 1;
	$tdatapersons[".closePopupAfterEdit"] = 1;
	$tdatapersons[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersons[".add"] = true;
$tdatapersons[".afterAddAction"] = 1;
$tdatapersons[".closePopupAfterAdd"] = 1;
$tdatapersons[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersons[".list"] = true;
}



$tdatapersons[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersons[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersons[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersons[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersons[".printFriendly"] = true;
}



$tdatapersons[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersons[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersons[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersons[".isUseAjaxSuggest"] = true;



																																																																																							

$tdatapersons[".ajaxCodeSnippetAdded"] = false;

$tdatapersons[".buttonsAdded"] = false;

$tdatapersons[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersons[".isUseTimeForSearch"] = false;


$tdatapersons[".badgeColor"] = "DC143C";


$tdatapersons[".allSearchFields"] = array();
$tdatapersons[".filterFields"] = array();
$tdatapersons[".requiredSearchFields"] = array();

$tdatapersons[".googleLikeFields"] = array();
$tdatapersons[".googleLikeFields"][] = "id";
$tdatapersons[".googleLikeFields"][] = "nombre";
$tdatapersons[".googleLikeFields"][] = "apellidos";
$tdatapersons[".googleLikeFields"][] = "nacionalidad";
$tdatapersons[".googleLikeFields"][] = "fechanac";
$tdatapersons[".googleLikeFields"][] = "sexo";
$tdatapersons[".googleLikeFields"][] = "estado_civil";
$tdatapersons[".googleLikeFields"][] = "canthijos";
$tdatapersons[".googleLikeFields"][] = "domicilio";
$tdatapersons[".googleLikeFields"][] = "city_id";
$tdatapersons[".googleLikeFields"][] = "distrito_id";
$tdatapersons[".googleLikeFields"][] = "esindigena";
$tdatapersons[".googleLikeFields"][] = "id_profesion";
$tdatapersons[".googleLikeFields"][] = "actualizado";
$tdatapersons[".googleLikeFields"][] = "porcentaje_discapacidad";
$tdatapersons[".googleLikeFields"][] = "adjunto_potencial_discapacidad";
$tdatapersons[".googleLikeFields"][] = "adjunto_certificado_discapacidad";
$tdatapersons[".googleLikeFields"][] = "resumen";
$tdatapersons[".googleLikeFields"][] = "fk_habilidades";
$tdatapersons[".googleLikeFields"][] = "id_barrio";



$tdatapersons[".tableType"] = "list";

$tdatapersons[".printerPageOrientation"] = 0;
$tdatapersons[".nPrinterPageScale"] = 100;

$tdatapersons[".nPrinterSplitRecords"] = 40;

$tdatapersons[".geocodingEnabled"] = false;










$tdatapersons[".pageSize"] = 20;

$tdatapersons[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapersons[".strOrderBy"] = $tstrOrderBy;

$tdatapersons[".orderindexes"] = array();


$tdatapersons[".sqlHead"] = "SELECT id,  	nombre,  	apellidos,  	nacionalidad,  	fechanac,  	sexo,  	estado_civil,  	canthijos,  	domicilio,  	city_id,  	distrito_id,  	esindigena,  	id_profesion,  	actualizado,  	porcentaje_discapacidad,  	adjunto_potencial_discapacidad,  	adjunto_certificado_discapacidad,  	foto,  	resumen,  	fk_habilidades,  	id_barrio";
$tdatapersons[".sqlFrom"] = "FROM eportal.persons";
$tdatapersons[".sqlWhereExpr"] = "";
$tdatapersons[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersons[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersons[".arrGroupsPerPage"] = $arrGPP;

$tdatapersons[".highlightSearchResults"] = true;

$tableKeyspersons = array();
$tableKeyspersons[] = "id";
$tdatapersons[".Keys"] = $tableKeyspersons;


$tdatapersons[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","id");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatapersons["id"] = $fdata;
		$tdatapersons[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","nombre");
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


	$tdatapersons["nombre"] = $fdata;
		$tdatapersons[".searchableFields"][] = "nombre";
//	apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "apellidos";
	$fdata["GoodName"] = "apellidos";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","apellidos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apellidos";

		$fdata["sourceSingle"] = "apellidos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellidos";

	
	
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


	$tdatapersons["apellidos"] = $fdata;
		$tdatapersons[".searchableFields"][] = "apellidos";
//	nacionalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nacionalidad";
	$fdata["GoodName"] = "nacionalidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","nacionalidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nacionalidad";

		$fdata["sourceSingle"] = "nacionalidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nacionalidad";

	
	
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
	$edata["LookupTable"] = "eportal.country";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "code";
	$edata["LinkFieldType"] = 13;
	$edata["DisplayField"] = "code";

	

	
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


	$tdatapersons["nacionalidad"] = $fdata;
		$tdatapersons[".searchableFields"][] = "nacionalidad";
//	fechanac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fechanac";
	$fdata["GoodName"] = "fechanac";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","fechanac");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fechanac";

		$fdata["sourceSingle"] = "fechanac";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fechanac";

	
	
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


	$tdatapersons["fechanac"] = $fdata;
		$tdatapersons[".searchableFields"][] = "fechanac";
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","sexo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sexo";

		$fdata["sourceSingle"] = "sexo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexo";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdatapersons["sexo"] = $fdata;
		$tdatapersons[".searchableFields"][] = "sexo";
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","estado_civil");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "estado_civil";

		$fdata["sourceSingle"] = "estado_civil";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_civil";

	
	
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
	$edata["LookupTable"] = "eportal.persons_estado_civil_type";
	$edata["LookupConnId"] = "eportal_at_192_168_70_170";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	

	
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


	$tdatapersons["estado_civil"] = $fdata;
		$tdatapersons[".searchableFields"][] = "estado_civil";
//	canthijos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "canthijos";
	$fdata["GoodName"] = "canthijos";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","canthijos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "canthijos";

		$fdata["sourceSingle"] = "canthijos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "canthijos";

	
	
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


	$tdatapersons["canthijos"] = $fdata;
		$tdatapersons[".searchableFields"][] = "canthijos";
//	domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "domicilio";
	$fdata["GoodName"] = "domicilio";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","domicilio");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "domicilio";

		$fdata["sourceSingle"] = "domicilio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domicilio";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatapersons["domicilio"] = $fdata;
		$tdatapersons[".searchableFields"][] = "domicilio";
//	city_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "city_id";
	$fdata["GoodName"] = "city_id";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","city_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "city_id";

		$fdata["sourceSingle"] = "city_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "city_id";

	
	
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


	$tdatapersons["city_id"] = $fdata;
		$tdatapersons[".searchableFields"][] = "city_id";
//	distrito_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "distrito_id";
	$fdata["GoodName"] = "distrito_id";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","distrito_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "distrito_id";

		$fdata["sourceSingle"] = "distrito_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "distrito_id";

	
	
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


	$tdatapersons["distrito_id"] = $fdata;
		$tdatapersons[".searchableFields"][] = "distrito_id";
//	esindigena
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "esindigena";
	$fdata["GoodName"] = "esindigena";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","esindigena");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "esindigena";

		$fdata["sourceSingle"] = "esindigena";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "esindigena";

	
	
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
	$edata["LookupTable"] = "eportal.persons_indigenas_types";
	$edata["LookupConnId"] = "eportal_at_192_168_70_170";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_persons_indigenas_types";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
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


	$tdatapersons["esindigena"] = $fdata;
		$tdatapersons[".searchableFields"][] = "esindigena";
//	id_profesion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "id_profesion";
	$fdata["GoodName"] = "id_profesion";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","id_profesion");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_profesion";

		$fdata["sourceSingle"] = "id_profesion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_profesion";

	
	
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


	$tdatapersons["id_profesion"] = $fdata;
		$tdatapersons[".searchableFields"][] = "id_profesion";
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","actualizado");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "actualizado";

		$fdata["sourceSingle"] = "actualizado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actualizado";

	
	
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


	$tdatapersons["actualizado"] = $fdata;
		$tdatapersons[".searchableFields"][] = "actualizado";
//	porcentaje_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "porcentaje_discapacidad";
	$fdata["GoodName"] = "porcentaje_discapacidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","porcentaje_discapacidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "porcentaje_discapacidad";

		$fdata["sourceSingle"] = "porcentaje_discapacidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "porcentaje_discapacidad";

	
	
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


	$tdatapersons["porcentaje_discapacidad"] = $fdata;
		$tdatapersons[".searchableFields"][] = "porcentaje_discapacidad";
//	adjunto_potencial_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "adjunto_potencial_discapacidad";
	$fdata["GoodName"] = "adjunto_potencial_discapacidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","adjunto_potencial_discapacidad");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "adjunto_potencial_discapacidad";

		$fdata["sourceSingle"] = "adjunto_potencial_discapacidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adjunto_potencial_discapacidad";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatapersons["adjunto_potencial_discapacidad"] = $fdata;
		$tdatapersons[".searchableFields"][] = "adjunto_potencial_discapacidad";
//	adjunto_certificado_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "adjunto_certificado_discapacidad";
	$fdata["GoodName"] = "adjunto_certificado_discapacidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","adjunto_certificado_discapacidad");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "adjunto_certificado_discapacidad";

		$fdata["sourceSingle"] = "adjunto_certificado_discapacidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adjunto_certificado_discapacidad";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatapersons["adjunto_certificado_discapacidad"] = $fdata;
		$tdatapersons[".searchableFields"][] = "adjunto_certificado_discapacidad";
//	foto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "foto";
	$fdata["GoodName"] = "foto";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","foto");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "foto";

		$fdata["sourceSingle"] = "foto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "foto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatapersons["foto"] = $fdata;
	//	resumen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "resumen";
	$fdata["GoodName"] = "resumen";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","resumen");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "resumen";

		$fdata["sourceSingle"] = "resumen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resumen";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatapersons["resumen"] = $fdata;
		$tdatapersons[".searchableFields"][] = "resumen";
//	fk_habilidades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "fk_habilidades";
	$fdata["GoodName"] = "fk_habilidades";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","fk_habilidades");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fk_habilidades";

		$fdata["sourceSingle"] = "fk_habilidades";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_habilidades";

	
	
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


	$tdatapersons["fk_habilidades"] = $fdata;
		$tdatapersons[".searchableFields"][] = "fk_habilidades";
//	id_barrio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "id_barrio";
	$fdata["GoodName"] = "id_barrio";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","id_barrio");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_barrio";

		$fdata["sourceSingle"] = "id_barrio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_barrio";

	
	
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


	$tdatapersons["id_barrio"] = $fdata;
		$tdatapersons[".searchableFields"][] = "id_barrio";


$tables_data["eportal.persons"]=&$tdatapersons;
$field_labels["eportal_persons"] = &$fieldLabelspersons;
$fieldToolTips["eportal_persons"] = &$fieldToolTipspersons;
$placeHolders["eportal_persons"] = &$placeHolderspersons;
$page_titles["eportal_persons"] = &$pageTitlespersons;


changeTextControlsToDate( "eportal.persons" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["eportal.persons"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["eportal.persons"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_persons()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	apellidos,  	nacionalidad,  	fechanac,  	sexo,  	estado_civil,  	canthijos,  	domicilio,  	city_id,  	distrito_id,  	esindigena,  	id_profesion,  	actualizado,  	porcentaje_discapacidad,  	adjunto_potencial_discapacidad,  	adjunto_certificado_discapacidad,  	foto,  	resumen,  	fk_habilidades,  	id_barrio";
$proto0["m_strFrom"] = "FROM eportal.persons";
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
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "eportal.persons";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "eportal.persons";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "apellidos",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto10["m_sql"] = "apellidos";
$proto10["m_srcTableName"] = "eportal.persons";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto12["m_sql"] = "nacionalidad";
$proto12["m_srcTableName"] = "eportal.persons";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fechanac",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto14["m_sql"] = "fechanac";
$proto14["m_srcTableName"] = "eportal.persons";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto16["m_sql"] = "sexo";
$proto16["m_srcTableName"] = "eportal.persons";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto18["m_sql"] = "estado_civil";
$proto18["m_srcTableName"] = "eportal.persons";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "canthijos",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto20["m_sql"] = "canthijos";
$proto20["m_srcTableName"] = "eportal.persons";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "domicilio",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto22["m_sql"] = "domicilio";
$proto22["m_srcTableName"] = "eportal.persons";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "city_id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto24["m_sql"] = "city_id";
$proto24["m_srcTableName"] = "eportal.persons";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "distrito_id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto26["m_sql"] = "distrito_id";
$proto26["m_srcTableName"] = "eportal.persons";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "esindigena",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto28["m_sql"] = "esindigena";
$proto28["m_srcTableName"] = "eportal.persons";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "id_profesion",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto30["m_sql"] = "id_profesion";
$proto30["m_srcTableName"] = "eportal.persons";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto32["m_sql"] = "actualizado";
$proto32["m_srcTableName"] = "eportal.persons";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "porcentaje_discapacidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto34["m_sql"] = "porcentaje_discapacidad";
$proto34["m_srcTableName"] = "eportal.persons";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "adjunto_potencial_discapacidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto36["m_sql"] = "adjunto_potencial_discapacidad";
$proto36["m_srcTableName"] = "eportal.persons";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "adjunto_certificado_discapacidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto38["m_sql"] = "adjunto_certificado_discapacidad";
$proto38["m_srcTableName"] = "eportal.persons";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "foto",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto40["m_sql"] = "foto";
$proto40["m_srcTableName"] = "eportal.persons";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "resumen",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto42["m_sql"] = "resumen";
$proto42["m_srcTableName"] = "eportal.persons";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_habilidades",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto44["m_sql"] = "fk_habilidades";
$proto44["m_srcTableName"] = "eportal.persons";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "id_barrio",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto46["m_sql"] = "id_barrio";
$proto46["m_srcTableName"] = "eportal.persons";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "eportal.persons";
$proto49["m_srcTableName"] = "eportal.persons";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id";
$proto49["m_columns"][] = "nombre";
$proto49["m_columns"][] = "apellidos";
$proto49["m_columns"][] = "nacionalidad";
$proto49["m_columns"][] = "fechanac";
$proto49["m_columns"][] = "sexo";
$proto49["m_columns"][] = "estado_civil";
$proto49["m_columns"][] = "canthijos";
$proto49["m_columns"][] = "domicilio";
$proto49["m_columns"][] = "city_id";
$proto49["m_columns"][] = "distrito_id";
$proto49["m_columns"][] = "esindigena";
$proto49["m_columns"][] = "id_profesion";
$proto49["m_columns"][] = "actualizado";
$proto49["m_columns"][] = "porcentaje_discapacidad";
$proto49["m_columns"][] = "adjunto_potencial_discapacidad";
$proto49["m_columns"][] = "adjunto_certificado_discapacidad";
$proto49["m_columns"][] = "foto";
$proto49["m_columns"][] = "resumen";
$proto49["m_columns"][] = "fk_habilidades";
$proto49["m_columns"][] = "id_barrio";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "eportal.persons";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "eportal.persons";
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
$proto0["m_srcTableName"]="eportal.persons";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_persons = createSqlQuery_persons();


	
		;

																					

$tdatapersons[".sqlquery"] = $queryData_persons;



$tdatapersons[".hasEvents"] = false;

?>
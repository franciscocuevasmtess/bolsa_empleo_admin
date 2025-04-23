<?php
$tdatabolsa_users = array();
$tdatabolsa_users[".searchableFields"] = array();
$tdatabolsa_users[".ShortName"] = "bolsa_users";
$tdatabolsa_users[".OwnerID"] = "";
$tdatabolsa_users[".OriginalTable"] = "bolsa_empleo.bolsa_users";


$tdatabolsa_users[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabolsa_users[".originalPagesByType"] = $tdatabolsa_users[".pagesByType"];
$tdatabolsa_users[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabolsa_users[".originalPages"] = $tdatabolsa_users[".pages"];
$tdatabolsa_users[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabolsa_users[".originalDefaultPages"] = $tdatabolsa_users[".defaultPages"];

//	field labels
$fieldLabelsbolsa_users = array();
$fieldToolTipsbolsa_users = array();
$pageTitlesbolsa_users = array();
$placeHoldersbolsa_users = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbolsa_users["Spanish"] = array();
	$fieldToolTipsbolsa_users["Spanish"] = array();
	$placeHoldersbolsa_users["Spanish"] = array();
	$pageTitlesbolsa_users["Spanish"] = array();
	$fieldLabelsbolsa_users["Spanish"]["id"] = "ID";
	$fieldToolTipsbolsa_users["Spanish"]["id"] = "";
	$placeHoldersbolsa_users["Spanish"]["id"] = "";
	$fieldLabelsbolsa_users["Spanish"]["nro_documento"] = "Nro. Documento";
	$fieldToolTipsbolsa_users["Spanish"]["nro_documento"] = "";
	$placeHoldersbolsa_users["Spanish"]["nro_documento"] = "";
	$fieldLabelsbolsa_users["Spanish"]["clave"] = "<font color=\"white\"> Contraseña </font>";
	$fieldToolTipsbolsa_users["Spanish"]["clave"] = "Mínimo 8 caracteres. Combina mayúsculas, minúsculas, números y símbolos.";
	$placeHoldersbolsa_users["Spanish"]["clave"] = "";
	$fieldLabelsbolsa_users["Spanish"]["email"] = "<font color=\"white\"> Email </font>";
	$fieldToolTipsbolsa_users["Spanish"]["email"] = "Tu dirección de correo electrónico se utilizará para comunicarte contigo. Por favor, verifica que sea correcta.";
	$placeHoldersbolsa_users["Spanish"]["email"] = "";
	$fieldLabelsbolsa_users["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipsbolsa_users["Spanish"]["groupid"] = "";
	$placeHoldersbolsa_users["Spanish"]["groupid"] = "";
	$fieldLabelsbolsa_users["Spanish"]["active"] = "Active";
	$fieldToolTipsbolsa_users["Spanish"]["active"] = "";
	$placeHoldersbolsa_users["Spanish"]["active"] = "";
	$fieldLabelsbolsa_users["Spanish"]["reset_token"] = "Reset Token";
	$fieldToolTipsbolsa_users["Spanish"]["reset_token"] = "";
	$placeHoldersbolsa_users["Spanish"]["reset_token"] = "";
	$fieldLabelsbolsa_users["Spanish"]["reset_date"] = "Reset Date";
	$fieldToolTipsbolsa_users["Spanish"]["reset_date"] = "";
	$placeHoldersbolsa_users["Spanish"]["reset_date"] = "";
	$fieldLabelsbolsa_users["Spanish"]["fecha_alta"] = "Fecha Alta";
	$fieldToolTipsbolsa_users["Spanish"]["fecha_alta"] = "";
	$placeHoldersbolsa_users["Spanish"]["fecha_alta"] = "";
	$fieldLabelsbolsa_users["Spanish"]["llave"] = "Llave";
	$fieldToolTipsbolsa_users["Spanish"]["llave"] = "";
	$placeHoldersbolsa_users["Spanish"]["llave"] = "";
	$fieldLabelsbolsa_users["Spanish"]["estado_llave"] = "Estado Llave";
	$fieldToolTipsbolsa_users["Spanish"]["estado_llave"] = "";
	$placeHoldersbolsa_users["Spanish"]["estado_llave"] = "";
	$fieldLabelsbolsa_users["Spanish"]["senadis"] = "Senadis";
	$fieldToolTipsbolsa_users["Spanish"]["senadis"] = "";
	$placeHoldersbolsa_users["Spanish"]["senadis"] = "";
	$fieldLabelsbolsa_users["Spanish"]["trabajo_antes"] = "Trabajo Antes";
	$fieldToolTipsbolsa_users["Spanish"]["trabajo_antes"] = "";
	$placeHoldersbolsa_users["Spanish"]["trabajo_antes"] = "";
	$fieldLabelsbolsa_users["Spanish"]["userpic"] = "Userpic";
	$fieldToolTipsbolsa_users["Spanish"]["userpic"] = "";
	$placeHoldersbolsa_users["Spanish"]["userpic"] = "";
	$fieldLabelsbolsa_users["Spanish"]["personaid"] = "Personaid";
	$fieldToolTipsbolsa_users["Spanish"]["personaid"] = "";
	$placeHoldersbolsa_users["Spanish"]["personaid"] = "";
	$fieldLabelsbolsa_users["Spanish"]["fullname"] = "Nombre Completo";
	$fieldToolTipsbolsa_users["Spanish"]["fullname"] = "";
	$placeHoldersbolsa_users["Spanish"]["fullname"] = "";
	$fieldLabelsbolsa_users["Spanish"]["username"] = "Username";
	$fieldToolTipsbolsa_users["Spanish"]["username"] = "";
	$placeHoldersbolsa_users["Spanish"]["username"] = "";
	$fieldLabelsbolsa_users["Spanish"]["hash_generado"] = "Hash Generado";
	$fieldToolTipsbolsa_users["Spanish"]["hash_generado"] = "";
	$placeHoldersbolsa_users["Spanish"]["hash_generado"] = "";
	$fieldLabelsbolsa_users["Spanish"]["adjunto_foto_perfil"] = "Adjunto Foto Perfil";
	$fieldToolTipsbolsa_users["Spanish"]["adjunto_foto_perfil"] = "";
	$placeHoldersbolsa_users["Spanish"]["adjunto_foto_perfil"] = "";
	$fieldLabelsbolsa_users["Spanish"]["repetir_clave"] = "<font color=\"white\"> Repetir Contraseña </font>";
	$fieldToolTipsbolsa_users["Spanish"]["repetir_clave"] = "Mínimo 8 caracteres. Combina mayúsculas, minúsculas, números y símbolos.";
	$placeHoldersbolsa_users["Spanish"]["repetir_clave"] = "";
	$pageTitlesbolsa_users["Spanish"]["edit"] = "Cambiar Contraseña de Usuario";
	if (count($fieldToolTipsbolsa_users["Spanish"]))
		$tdatabolsa_users[".isUseToolTips"] = true;
}


	$tdatabolsa_users[".NCSearch"] = true;



$tdatabolsa_users[".shortTableName"] = "bolsa_users";
$tdatabolsa_users[".nSecOptions"] = 0;

$tdatabolsa_users[".mainTableOwnerID"] = "";
$tdatabolsa_users[".entityType"] = 0;
$tdatabolsa_users[".connId"] = "eportal_at_192_168_70_170";


$tdatabolsa_users[".strOriginalTableName"] = "bolsa_empleo.bolsa_users";

	



$tdatabolsa_users[".showAddInPopup"] = false;

$tdatabolsa_users[".showEditInPopup"] = false;

$tdatabolsa_users[".showViewInPopup"] = false;

$tdatabolsa_users[".listAjax"] = false;
//	temporary
//$tdatabolsa_users[".listAjax"] = false;

	$tdatabolsa_users[".audit"] = false;

	$tdatabolsa_users[".locking"] = false;


$pages = $tdatabolsa_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabolsa_users[".edit"] = true;
	$tdatabolsa_users[".afterEditAction"] = 1;
	$tdatabolsa_users[".closePopupAfterEdit"] = 1;
	$tdatabolsa_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabolsa_users[".add"] = true;
$tdatabolsa_users[".afterAddAction"] = 1;
$tdatabolsa_users[".closePopupAfterAdd"] = 1;
$tdatabolsa_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabolsa_users[".list"] = true;
}



$tdatabolsa_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabolsa_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabolsa_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabolsa_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabolsa_users[".printFriendly"] = true;
}



$tdatabolsa_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabolsa_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabolsa_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabolsa_users[".isUseAjaxSuggest"] = true;



																																																																																							

$tdatabolsa_users[".ajaxCodeSnippetAdded"] = false;

$tdatabolsa_users[".buttonsAdded"] = false;

$tdatabolsa_users[".addPageEvents"] = true;

// use timepicker for search panel
$tdatabolsa_users[".isUseTimeForSearch"] = false;


$tdatabolsa_users[".badgeColor"] = "E67349";


$tdatabolsa_users[".allSearchFields"] = array();
$tdatabolsa_users[".filterFields"] = array();
$tdatabolsa_users[".requiredSearchFields"] = array();

$tdatabolsa_users[".googleLikeFields"] = array();
$tdatabolsa_users[".googleLikeFields"][] = "id";
$tdatabolsa_users[".googleLikeFields"][] = "nro_documento";
$tdatabolsa_users[".googleLikeFields"][] = "clave";
$tdatabolsa_users[".googleLikeFields"][] = "repetir_clave";
$tdatabolsa_users[".googleLikeFields"][] = "email";
$tdatabolsa_users[".googleLikeFields"][] = "groupid";
$tdatabolsa_users[".googleLikeFields"][] = "active";
$tdatabolsa_users[".googleLikeFields"][] = "reset_token";
$tdatabolsa_users[".googleLikeFields"][] = "reset_date";
$tdatabolsa_users[".googleLikeFields"][] = "fecha_alta";
$tdatabolsa_users[".googleLikeFields"][] = "llave";
$tdatabolsa_users[".googleLikeFields"][] = "estado_llave";
$tdatabolsa_users[".googleLikeFields"][] = "senadis";
$tdatabolsa_users[".googleLikeFields"][] = "trabajo_antes";
$tdatabolsa_users[".googleLikeFields"][] = "personaid";
$tdatabolsa_users[".googleLikeFields"][] = "fullname";
$tdatabolsa_users[".googleLikeFields"][] = "username";
$tdatabolsa_users[".googleLikeFields"][] = "hash_generado";
$tdatabolsa_users[".googleLikeFields"][] = "adjunto_foto_perfil";



$tdatabolsa_users[".tableType"] = "list";

$tdatabolsa_users[".printerPageOrientation"] = 0;
$tdatabolsa_users[".nPrinterPageScale"] = 100;

$tdatabolsa_users[".nPrinterSplitRecords"] = 40;

$tdatabolsa_users[".geocodingEnabled"] = false;










$tdatabolsa_users[".pageSize"] = 20;

$tdatabolsa_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabolsa_users[".strOrderBy"] = $tstrOrderBy;

$tdatabolsa_users[".orderindexes"] = array();


$tdatabolsa_users[".sqlHead"] = "SELECT id,  	nro_documento,  	clave,  	clave as repetir_clave,  	email,  	groupid,  	active,  	reset_token,  	reset_date,  	fecha_alta,  	llave,  	estado_llave,  	senadis,  	trabajo_antes,  	userpic,  	personaid,  	fullname,  	username,  	hash_generado,  	adjunto_foto_perfil";
$tdatabolsa_users[".sqlFrom"] = "FROM bolsa_empleo.bolsa_users";
$tdatabolsa_users[".sqlWhereExpr"] = "";
$tdatabolsa_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabolsa_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabolsa_users[".arrGroupsPerPage"] = $arrGPP;

$tdatabolsa_users[".highlightSearchResults"] = true;

$tableKeysbolsa_users = array();
$tableKeysbolsa_users[] = "id";
$tdatabolsa_users[".Keys"] = $tableKeysbolsa_users;


$tdatabolsa_users[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","id");
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


	$tdatabolsa_users["id"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "id";
//	nro_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nro_documento";
	$fdata["GoodName"] = "nro_documento";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","nro_documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nro_documento";

		$fdata["sourceSingle"] = "nro_documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nro_documento";

	
	
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


	$tdatabolsa_users["nro_documento"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "nro_documento";
//	clave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "clave";
	$fdata["GoodName"] = "clave";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","clave");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "clave";

		$fdata["sourceSingle"] = "clave";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clave";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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


	$tdatabolsa_users["clave"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "clave";
//	repetir_clave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "repetir_clave";
	$fdata["GoodName"] = "repetir_clave";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","repetir_clave");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "clave";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clave";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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


	$tdatabolsa_users["repetir_clave"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "repetir_clave";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","email");
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


	$tdatabolsa_users["email"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "email";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","groupid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "groupid";

		$fdata["sourceSingle"] = "groupid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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


	$tdatabolsa_users["groupid"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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


	$tdatabolsa_users["active"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "active";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","reset_token");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "reset_token";

		$fdata["sourceSingle"] = "reset_token";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_token";

	
	
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


	$tdatabolsa_users["reset_token"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","reset_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "reset_date";

		$fdata["sourceSingle"] = "reset_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_date";

	
	
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


	$tdatabolsa_users["reset_date"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "reset_date";
//	fecha_alta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fecha_alta";
	$fdata["GoodName"] = "fecha_alta";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","fecha_alta");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_alta";

		$fdata["sourceSingle"] = "fecha_alta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_alta";

	
	
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


	$tdatabolsa_users["fecha_alta"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "fecha_alta";
//	llave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "llave";
	$fdata["GoodName"] = "llave";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","llave");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "llave";

		$fdata["sourceSingle"] = "llave";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "llave";

	
	
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


	$tdatabolsa_users["llave"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "llave";
//	estado_llave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "estado_llave";
	$fdata["GoodName"] = "estado_llave";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","estado_llave");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "estado_llave";

		$fdata["sourceSingle"] = "estado_llave";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_llave";

	
	
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


	$tdatabolsa_users["estado_llave"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "estado_llave";
//	senadis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "senadis";
	$fdata["GoodName"] = "senadis";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","senadis");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "senadis";

		$fdata["sourceSingle"] = "senadis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "senadis";

	
	
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


	$tdatabolsa_users["senadis"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "senadis";
//	trabajo_antes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "trabajo_antes";
	$fdata["GoodName"] = "trabajo_antes";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","trabajo_antes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "trabajo_antes";

		$fdata["sourceSingle"] = "trabajo_antes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "trabajo_antes";

	
	
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


	$tdatabolsa_users["trabajo_antes"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "trabajo_antes";
//	userpic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "userpic";
	$fdata["GoodName"] = "userpic";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","userpic");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "userpic";

		$fdata["sourceSingle"] = "userpic";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userpic";

	
	
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


	$tdatabolsa_users["userpic"] = $fdata;
	//	personaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "personaid";
	$fdata["GoodName"] = "personaid";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","personaid");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "personaid";

		$fdata["sourceSingle"] = "personaid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "personaid";

	
	
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


	$tdatabolsa_users["personaid"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "personaid";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

		$fdata["sourceSingle"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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


	$tdatabolsa_users["fullname"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "fullname";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdatabolsa_users["username"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "username";
//	hash_generado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "hash_generado";
	$fdata["GoodName"] = "hash_generado";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","hash_generado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "hash_generado";

		$fdata["sourceSingle"] = "hash_generado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hash_generado";

	
	
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


	$tdatabolsa_users["hash_generado"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "hash_generado";
//	adjunto_foto_perfil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "adjunto_foto_perfil";
	$fdata["GoodName"] = "adjunto_foto_perfil";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users","adjunto_foto_perfil");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "adjunto_foto_perfil";

		$fdata["sourceSingle"] = "adjunto_foto_perfil";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adjunto_foto_perfil";

	
	
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


	$tdatabolsa_users["adjunto_foto_perfil"] = $fdata;
		$tdatabolsa_users[".searchableFields"][] = "adjunto_foto_perfil";


$tables_data["bolsa_empleo.bolsa_users"]=&$tdatabolsa_users;
$field_labels["bolsa_empleo_bolsa_users"] = &$fieldLabelsbolsa_users;
$fieldToolTips["bolsa_empleo_bolsa_users"] = &$fieldToolTipsbolsa_users;
$placeHolders["bolsa_empleo_bolsa_users"] = &$placeHoldersbolsa_users;
$page_titles["bolsa_empleo_bolsa_users"] = &$pageTitlesbolsa_users;


changeTextControlsToDate( "bolsa_empleo.bolsa_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.bolsa_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.bolsa_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bolsa_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nro_documento,  	clave,  	clave as repetir_clave,  	email,  	groupid,  	active,  	reset_token,  	reset_date,  	fecha_alta,  	llave,  	estado_llave,  	senadis,  	trabajo_antes,  	userpic,  	personaid,  	fullname,  	username,  	hash_generado,  	adjunto_foto_perfil";
$proto0["m_strFrom"] = "FROM bolsa_empleo.bolsa_users";
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
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nro_documento",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto8["m_sql"] = "nro_documento";
$proto8["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "clave",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto10["m_sql"] = "clave";
$proto10["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "clave",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto12["m_sql"] = "clave";
$proto12["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "repetir_clave";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto14["m_sql"] = "email";
$proto14["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto20["m_sql"] = "reset_token";
$proto20["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto22["m_sql"] = "reset_date";
$proto22["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_alta",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto24["m_sql"] = "fecha_alta";
$proto24["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "llave",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto26["m_sql"] = "llave";
$proto26["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_llave",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto28["m_sql"] = "estado_llave";
$proto28["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "senadis",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto30["m_sql"] = "senadis";
$proto30["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "trabajo_antes",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto32["m_sql"] = "trabajo_antes";
$proto32["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "userpic",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto34["m_sql"] = "userpic";
$proto34["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "personaid",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto36["m_sql"] = "personaid";
$proto36["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto38["m_sql"] = "fullname";
$proto38["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto40["m_sql"] = "username";
$proto40["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "hash_generado",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto42["m_sql"] = "hash_generado";
$proto42["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "adjunto_foto_perfil",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_users"
));

$proto44["m_sql"] = "adjunto_foto_perfil";
$proto44["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "bolsa_empleo.bolsa_users";
$proto47["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id";
$proto47["m_columns"][] = "nro_documento";
$proto47["m_columns"][] = "clave";
$proto47["m_columns"][] = "email";
$proto47["m_columns"][] = "groupid";
$proto47["m_columns"][] = "active";
$proto47["m_columns"][] = "reset_token";
$proto47["m_columns"][] = "reset_date";
$proto47["m_columns"][] = "fecha_alta";
$proto47["m_columns"][] = "llave";
$proto47["m_columns"][] = "estado_llave";
$proto47["m_columns"][] = "senadis";
$proto47["m_columns"][] = "trabajo_antes";
$proto47["m_columns"][] = "userpic";
$proto47["m_columns"][] = "personaid";
$proto47["m_columns"][] = "fullname";
$proto47["m_columns"][] = "username";
$proto47["m_columns"][] = "hash_generado";
$proto47["m_columns"][] = "adjunto_foto_perfil";
$proto47["m_columns"][] = "cantidad_omision_cambio_password";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "bolsa_empleo.bolsa_users";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "bolsa_empleo.bolsa_users";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.bolsa_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bolsa_users = createSqlQuery_bolsa_users();


	
		;

																				

$tdatabolsa_users[".sqlquery"] = $queryData_bolsa_users;



include_once(getabspath("include/bolsa_users_events.php"));
$tdatabolsa_users[".hasEvents"] = true;

?>
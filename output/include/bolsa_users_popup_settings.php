<?php
$tdatabolsa_users_popup = array();
$tdatabolsa_users_popup[".searchableFields"] = array();
$tdatabolsa_users_popup[".ShortName"] = "bolsa_users_popup";
$tdatabolsa_users_popup[".OwnerID"] = "";
$tdatabolsa_users_popup[".OriginalTable"] = "bolsa_empleo.bolsa_users";


$tdatabolsa_users_popup[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabolsa_users_popup[".originalPagesByType"] = $tdatabolsa_users_popup[".pagesByType"];
$tdatabolsa_users_popup[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabolsa_users_popup[".originalPages"] = $tdatabolsa_users_popup[".pages"];
$tdatabolsa_users_popup[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabolsa_users_popup[".originalDefaultPages"] = $tdatabolsa_users_popup[".defaultPages"];

//	field labels
$fieldLabelsbolsa_users_popup = array();
$fieldToolTipsbolsa_users_popup = array();
$pageTitlesbolsa_users_popup = array();
$placeHoldersbolsa_users_popup = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbolsa_users_popup["Spanish"] = array();
	$fieldToolTipsbolsa_users_popup["Spanish"] = array();
	$placeHoldersbolsa_users_popup["Spanish"] = array();
	$pageTitlesbolsa_users_popup["Spanish"] = array();
	$fieldLabelsbolsa_users_popup["Spanish"]["id"] = "Identificador";
	$fieldToolTipsbolsa_users_popup["Spanish"]["id"] = "";
	$placeHoldersbolsa_users_popup["Spanish"]["id"] = "";
	$fieldLabelsbolsa_users_popup["Spanish"]["nro_documento"] = "Nro. Documento";
	$fieldToolTipsbolsa_users_popup["Spanish"]["nro_documento"] = "";
	$placeHoldersbolsa_users_popup["Spanish"]["nro_documento"] = "";
	$fieldLabelsbolsa_users_popup["Spanish"]["email"] = "<font color=\"white\"> Email </font>";
	$fieldToolTipsbolsa_users_popup["Spanish"]["email"] = "Tu dirección de correo electrónico se utilizará para comunicarte contigo. Por favor, verifica que sea correcta.";
	$placeHoldersbolsa_users_popup["Spanish"]["email"] = "";
	$fieldLabelsbolsa_users_popup["Spanish"]["personaid"] = "Personaid";
	$fieldToolTipsbolsa_users_popup["Spanish"]["personaid"] = "";
	$placeHoldersbolsa_users_popup["Spanish"]["personaid"] = "";
	$fieldLabelsbolsa_users_popup["Spanish"]["fullname"] = "Nombre Completo";
	$fieldToolTipsbolsa_users_popup["Spanish"]["fullname"] = "";
	$placeHoldersbolsa_users_popup["Spanish"]["fullname"] = "";
	$fieldLabelsbolsa_users_popup["Spanish"]["username"] = "Username";
	$fieldToolTipsbolsa_users_popup["Spanish"]["username"] = "";
	$placeHoldersbolsa_users_popup["Spanish"]["username"] = "";
	$fieldLabelsbolsa_users_popup["Spanish"]["adjunto_foto_perfil"] = "Adjunto Foto Perfil";
	$fieldToolTipsbolsa_users_popup["Spanish"]["adjunto_foto_perfil"] = "";
	$placeHoldersbolsa_users_popup["Spanish"]["adjunto_foto_perfil"] = "";
	$fieldLabelsbolsa_users_popup["Spanish"]["id_vacancias"] = "Id Vacancias";
	$fieldToolTipsbolsa_users_popup["Spanish"]["id_vacancias"] = "";
	$placeHoldersbolsa_users_popup["Spanish"]["id_vacancias"] = "";
	$pageTitlesbolsa_users_popup["Spanish"]["list"] = "Agregar Postulante";
	if (count($fieldToolTipsbolsa_users_popup["Spanish"]))
		$tdatabolsa_users_popup[".isUseToolTips"] = true;
}


	$tdatabolsa_users_popup[".NCSearch"] = true;



$tdatabolsa_users_popup[".shortTableName"] = "bolsa_users_popup";
$tdatabolsa_users_popup[".nSecOptions"] = 0;

$tdatabolsa_users_popup[".mainTableOwnerID"] = "";
$tdatabolsa_users_popup[".entityType"] = 1;
$tdatabolsa_users_popup[".connId"] = "eportal_at_192_168_70_170";


$tdatabolsa_users_popup[".strOriginalTableName"] = "bolsa_empleo.bolsa_users";

	



$tdatabolsa_users_popup[".showAddInPopup"] = false;

$tdatabolsa_users_popup[".showEditInPopup"] = false;

$tdatabolsa_users_popup[".showViewInPopup"] = false;

$tdatabolsa_users_popup[".listAjax"] = false;
//	temporary
//$tdatabolsa_users_popup[".listAjax"] = false;

	$tdatabolsa_users_popup[".audit"] = false;

	$tdatabolsa_users_popup[".locking"] = false;


$pages = $tdatabolsa_users_popup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabolsa_users_popup[".edit"] = true;
	$tdatabolsa_users_popup[".afterEditAction"] = 1;
	$tdatabolsa_users_popup[".closePopupAfterEdit"] = 1;
	$tdatabolsa_users_popup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabolsa_users_popup[".add"] = true;
$tdatabolsa_users_popup[".afterAddAction"] = 1;
$tdatabolsa_users_popup[".closePopupAfterAdd"] = 1;
$tdatabolsa_users_popup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabolsa_users_popup[".list"] = true;
}



$tdatabolsa_users_popup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabolsa_users_popup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabolsa_users_popup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabolsa_users_popup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabolsa_users_popup[".printFriendly"] = true;
}



$tdatabolsa_users_popup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabolsa_users_popup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabolsa_users_popup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabolsa_users_popup[".isUseAjaxSuggest"] = true;



																																																																																																																																																																														

$tdatabolsa_users_popup[".ajaxCodeSnippetAdded"] = false;

$tdatabolsa_users_popup[".buttonsAdded"] = false;

$tdatabolsa_users_popup[".addPageEvents"] = true;

// use timepicker for search panel
$tdatabolsa_users_popup[".isUseTimeForSearch"] = false;


$tdatabolsa_users_popup[".badgeColor"] = "e07878";


$tdatabolsa_users_popup[".allSearchFields"] = array();
$tdatabolsa_users_popup[".filterFields"] = array();
$tdatabolsa_users_popup[".requiredSearchFields"] = array();

$tdatabolsa_users_popup[".googleLikeFields"] = array();
$tdatabolsa_users_popup[".googleLikeFields"][] = "id";
$tdatabolsa_users_popup[".googleLikeFields"][] = "nro_documento";
$tdatabolsa_users_popup[".googleLikeFields"][] = "email";
$tdatabolsa_users_popup[".googleLikeFields"][] = "personaid";
$tdatabolsa_users_popup[".googleLikeFields"][] = "fullname";
$tdatabolsa_users_popup[".googleLikeFields"][] = "username";
$tdatabolsa_users_popup[".googleLikeFields"][] = "adjunto_foto_perfil";
$tdatabolsa_users_popup[".googleLikeFields"][] = "id_vacancias";



$tdatabolsa_users_popup[".tableType"] = "list";

$tdatabolsa_users_popup[".printerPageOrientation"] = 0;
$tdatabolsa_users_popup[".nPrinterPageScale"] = 100;

$tdatabolsa_users_popup[".nPrinterSplitRecords"] = 40;

$tdatabolsa_users_popup[".geocodingEnabled"] = false;










$tdatabolsa_users_popup[".pageSize"] = 20;

$tdatabolsa_users_popup[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY 
    bu.id DESC, 
    v.id_vacancias desc";
$tdatabolsa_users_popup[".strOrderBy"] = $tstrOrderBy;

$tdatabolsa_users_popup[".orderindexes"] = array();
			$tdatabolsa_users_popup[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "bu.id");
			$tdatabolsa_users_popup[".orderindexes"][] = array(8, (0 ? "ASC" : "DESC"), "v.id_vacancias");


$tdatabolsa_users_popup[".sqlHead"] = "/*SELECT  bolsa_empleo.bolsa_users.id,  bolsa_empleo.bolsa_users.nro_documento,  bolsa_empleo.bolsa_users.clave,  bolsa_empleo.bolsa_users.clave AS repetir_clave,  bolsa_empleo.bolsa_users.email,  bolsa_empleo.bolsa_users.groupid,  bolsa_empleo.bolsa_users.active,  bolsa_empleo.bolsa_users.reset_token,  bolsa_empleo.bolsa_users.reset_date,  bolsa_empleo.bolsa_users.fecha_alta,  bolsa_empleo.bolsa_users.llave,  bolsa_empleo.bolsa_users.estado_llave,  bolsa_empleo.bolsa_users.senadis,  bolsa_empleo.bolsa_users.trabajo_antes,  bolsa_empleo.bolsa_users.userpic,  bolsa_empleo.bolsa_users.personaid,  bolsa_empleo.bolsa_users.fullname,  bolsa_empleo.bolsa_users.username,  bolsa_empleo.bolsa_users.hash_generado,  bolsa_empleo.bolsa_users.adjunto_foto_perfil,  bolsa_empleo.vacancia.id_vacancias  FROM bolsa_empleo.bolsa_users  , bolsa_empleo.vacancia  WHERE (bolsa_empleo.bolsa_users.personaid not in (SELECT  	pos.fk_personaid  FROM  	bolsa_empleo.vacancia as va  	INNER JOIN  	bolsa_empleo.postulacion as pos  	ON   va.id_vacancias = pos.id_vacancia  		where 	va.id_vacancias =  	bolsa_empleo.vacancia.id_vacancias   and pos.fk_personaid= 	bolsa_empleo.bolsa_users.personaid))  ORDER BY bolsa_empleo.bolsa_users.id DESC, bolsa_empleo.vacancia.id_vacancias DESC  */  /* 2024-04-10 */  SELECT bu.id,      bu.nro_documento,         bu.email,         bu.personaid,      bu.fullname,      bu.username,      bu.adjunto_foto_perfil,      v.id_vacancias";
$tdatabolsa_users_popup[".sqlFrom"] = "FROM       bolsa_empleo.vacancia v  JOIN       bolsa_empleo.bolsa_users bu ON bu.personaid NOT IN (          SELECT p.fk_personaid          FROM bolsa_empleo.postulacion p          WHERE p.id_vacancia = v.id_vacancias and p.id_vacancia in (3, 5, 7, 2)					      )";
$tdatabolsa_users_popup[".sqlWhereExpr"] = "";
$tdatabolsa_users_popup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabolsa_users_popup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabolsa_users_popup[".arrGroupsPerPage"] = $arrGPP;

$tdatabolsa_users_popup[".highlightSearchResults"] = true;

$tableKeysbolsa_users_popup = array();
$tableKeysbolsa_users_popup[] = "id";
$tdatabolsa_users_popup[".Keys"] = $tableKeysbolsa_users_popup;


$tdatabolsa_users_popup[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_popup","id");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.id";

	
	
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


	$tdatabolsa_users_popup["id"] = $fdata;
		$tdatabolsa_users_popup[".searchableFields"][] = "id";
//	nro_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nro_documento";
	$fdata["GoodName"] = "nro_documento";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_popup","nro_documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nro_documento";

		$fdata["sourceSingle"] = "nro_documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.nro_documento";

	
	
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


	$tdatabolsa_users_popup["nro_documento"] = $fdata;
		$tdatabolsa_users_popup[".searchableFields"][] = "nro_documento";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_popup","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.email";

	
	
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


	$tdatabolsa_users_popup["email"] = $fdata;
		$tdatabolsa_users_popup[".searchableFields"][] = "email";
//	personaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "personaid";
	$fdata["GoodName"] = "personaid";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_popup","personaid");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "personaid";

		$fdata["sourceSingle"] = "personaid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.personaid";

	
	
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


	$tdatabolsa_users_popup["personaid"] = $fdata;
		$tdatabolsa_users_popup[".searchableFields"][] = "personaid";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_popup","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

		$fdata["sourceSingle"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.fullname";

	
	
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


	$tdatabolsa_users_popup["fullname"] = $fdata;
		$tdatabolsa_users_popup[".searchableFields"][] = "fullname";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_popup","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.username";

	
	
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


	$tdatabolsa_users_popup["username"] = $fdata;
		$tdatabolsa_users_popup[".searchableFields"][] = "username";
//	adjunto_foto_perfil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "adjunto_foto_perfil";
	$fdata["GoodName"] = "adjunto_foto_perfil";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_popup","adjunto_foto_perfil");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "adjunto_foto_perfil";

		$fdata["sourceSingle"] = "adjunto_foto_perfil";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.adjunto_foto_perfil";

	
	
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


	$tdatabolsa_users_popup["adjunto_foto_perfil"] = $fdata;
		$tdatabolsa_users_popup[".searchableFields"][] = "adjunto_foto_perfil";
//	id_vacancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id_vacancias";
	$fdata["GoodName"] = "id_vacancias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_popup","id_vacancias");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_vacancias";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "v.id_vacancias";

	
	
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


	$tdatabolsa_users_popup["id_vacancias"] = $fdata;
		$tdatabolsa_users_popup[".searchableFields"][] = "id_vacancias";


$tables_data["bolsa_empleo.bolsa_users_popup"]=&$tdatabolsa_users_popup;
$field_labels["bolsa_empleo_bolsa_users_popup"] = &$fieldLabelsbolsa_users_popup;
$fieldToolTips["bolsa_empleo_bolsa_users_popup"] = &$fieldToolTipsbolsa_users_popup;
$placeHolders["bolsa_empleo_bolsa_users_popup"] = &$placeHoldersbolsa_users_popup;
$page_titles["bolsa_empleo_bolsa_users_popup"] = &$pageTitlesbolsa_users_popup;


changeTextControlsToDate( "bolsa_empleo.bolsa_users_popup" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.bolsa_users_popup"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.bolsa_users_popup"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.bolsa_users_popup"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.bolsa_users_popup"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.bolsa_users_popup"][0]["masterKeys"][]="id_vacancias";
				$masterTablesData["bolsa_empleo.bolsa_users_popup"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.bolsa_users_popup"][0]["detailKeys"][]="id_vacancias";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bolsa_users_popup()
{
$proto0=array();
$proto0["m_strHead"] = "/*SELECT  bolsa_empleo.bolsa_users.id,  bolsa_empleo.bolsa_users.nro_documento,  bolsa_empleo.bolsa_users.clave,  bolsa_empleo.bolsa_users.clave AS repetir_clave,  bolsa_empleo.bolsa_users.email,  bolsa_empleo.bolsa_users.groupid,  bolsa_empleo.bolsa_users.active,  bolsa_empleo.bolsa_users.reset_token,  bolsa_empleo.bolsa_users.reset_date,  bolsa_empleo.bolsa_users.fecha_alta,  bolsa_empleo.bolsa_users.llave,  bolsa_empleo.bolsa_users.estado_llave,  bolsa_empleo.bolsa_users.senadis,  bolsa_empleo.bolsa_users.trabajo_antes,  bolsa_empleo.bolsa_users.userpic,  bolsa_empleo.bolsa_users.personaid,  bolsa_empleo.bolsa_users.fullname,  bolsa_empleo.bolsa_users.username,  bolsa_empleo.bolsa_users.hash_generado,  bolsa_empleo.bolsa_users.adjunto_foto_perfil,  bolsa_empleo.vacancia.id_vacancias  FROM bolsa_empleo.bolsa_users  , bolsa_empleo.vacancia  WHERE (bolsa_empleo.bolsa_users.personaid not in (SELECT  	pos.fk_personaid  FROM  	bolsa_empleo.vacancia as va  	INNER JOIN  	bolsa_empleo.postulacion as pos  	ON   va.id_vacancias = pos.id_vacancia  		where 	va.id_vacancias =  	bolsa_empleo.vacancia.id_vacancias   and pos.fk_personaid= 	bolsa_empleo.bolsa_users.personaid))  ORDER BY bolsa_empleo.bolsa_users.id DESC, bolsa_empleo.vacancia.id_vacancias DESC  */  /* 2024-04-10 */  SELECT";
$proto0["m_strFieldList"] = "bu.id,      bu.nro_documento,         bu.email,         bu.personaid,      bu.fullname,      bu.username,      bu.adjunto_foto_perfil,      v.id_vacancias";
$proto0["m_strFrom"] = "FROM       bolsa_empleo.vacancia v  JOIN       bolsa_empleo.bolsa_users bu ON bu.personaid NOT IN (          SELECT p.fk_personaid          FROM bolsa_empleo.postulacion p          WHERE p.id_vacancia = v.id_vacancias and p.id_vacancia in (3, 5, 7, 2)					      )";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY       bu.id DESC,       v.id_vacancias desc";
	
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
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_popup"
));

$proto6["m_sql"] = "bu.id";
$proto6["m_srcTableName"] = "bolsa_empleo.bolsa_users_popup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nro_documento",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_popup"
));

$proto8["m_sql"] = "bu.nro_documento";
$proto8["m_srcTableName"] = "bolsa_empleo.bolsa_users_popup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_popup"
));

$proto10["m_sql"] = "bu.email";
$proto10["m_srcTableName"] = "bolsa_empleo.bolsa_users_popup";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "personaid",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_popup"
));

$proto12["m_sql"] = "bu.personaid";
$proto12["m_srcTableName"] = "bolsa_empleo.bolsa_users_popup";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_popup"
));

$proto14["m_sql"] = "bu.fullname";
$proto14["m_srcTableName"] = "bolsa_empleo.bolsa_users_popup";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_popup"
));

$proto16["m_sql"] = "bu.username";
$proto16["m_srcTableName"] = "bolsa_empleo.bolsa_users_popup";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "adjunto_foto_perfil",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_popup"
));

$proto18["m_sql"] = "bu.adjunto_foto_perfil";
$proto18["m_srcTableName"] = "bolsa_empleo.bolsa_users_popup";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "v",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_popup"
));

$proto20["m_sql"] = "v.id_vacancias";
$proto20["m_srcTableName"] = "bolsa_empleo.bolsa_users_popup";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "bolsa_empleo.vacancia";
$proto23["m_srcTableName"] = "bolsa_empleo.bolsa_users_popup";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id_vacancias";
$proto23["m_columns"][] = "fecha_creacion_vacancia";
$proto23["m_columns"][] = "id_estado_vacancia";
$proto23["m_columns"][] = "fecha_expiracion_vacancia";
$proto23["m_columns"][] = "cantidad_vacancia";
$proto23["m_columns"][] = "geolocation";
$proto23["m_columns"][] = "fk_id_feria_empleo";
$proto23["m_columns"][] = "usuario";
$proto23["m_columns"][] = "origen";
$proto23["m_columns"][] = "imagen_perfil";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "bolsa_empleo.vacancia v";
$proto22["m_alias"] = "v";
$proto22["m_srcTableName"] = "bolsa_empleo.bolsa_users_popup";
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
$proto27["m_strName"] = "bolsa_empleo.bolsa_users";
$proto27["m_srcTableName"] = "bolsa_empleo.bolsa_users_popup";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "nro_documento";
$proto27["m_columns"][] = "clave";
$proto27["m_columns"][] = "email";
$proto27["m_columns"][] = "groupid";
$proto27["m_columns"][] = "active";
$proto27["m_columns"][] = "reset_token";
$proto27["m_columns"][] = "reset_date";
$proto27["m_columns"][] = "fecha_alta";
$proto27["m_columns"][] = "llave";
$proto27["m_columns"][] = "estado_llave";
$proto27["m_columns"][] = "senadis";
$proto27["m_columns"][] = "trabajo_antes";
$proto27["m_columns"][] = "userpic";
$proto27["m_columns"][] = "personaid";
$proto27["m_columns"][] = "fullname";
$proto27["m_columns"][] = "username";
$proto27["m_columns"][] = "hash_generado";
$proto27["m_columns"][] = "adjunto_foto_perfil";
$proto27["m_columns"][] = "cantidad_omision_cambio_password";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "JOIN       bolsa_empleo.bolsa_users bu ON bu.personaid NOT IN (          SELECT p.fk_personaid          FROM bolsa_empleo.postulacion p          WHERE p.id_vacancia = v.id_vacancias and p.id_vacancia in (3, 5, 7, 2)					      )";
$proto26["m_alias"] = "bu";
$proto26["m_srcTableName"] = "bolsa_empleo.bolsa_users_popup";
$proto28=array();
$proto28["m_sql"] = "bu.personaid NOT IN (          SELECT p.fk_personaid          FROM bolsa_empleo.postulacion p          WHERE p.id_vacancia = v.id_vacancias and p.id_vacancia in (3, 5, 7, 2)					      )";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "personaid",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_popup"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "NOT IN (          SELECT p.fk_personaid          FROM bolsa_empleo.postulacion p          WHERE p.id_vacancia = v.id_vacancias and p.id_vacancia in (3, 5, 7, 2)					      )";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_popup"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "v",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_popup"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="bolsa_empleo.bolsa_users_popup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bolsa_users_popup = createSqlQuery_bolsa_users_popup();


	
		;

								

$tdatabolsa_users_popup[".sqlquery"] = $queryData_bolsa_users_popup;



include_once(getabspath("include/bolsa_users_popup_events.php"));
$tdatabolsa_users_popup[".hasEvents"] = true;

?>
<?php
$tdatagestores_users = array();
$tdatagestores_users[".searchableFields"] = array();
$tdatagestores_users[".ShortName"] = "gestores_users";
$tdatagestores_users[".OwnerID"] = "";
$tdatagestores_users[".OriginalTable"] = "bolsa_empleo.gestores_users";


$tdatagestores_users[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatagestores_users[".originalPagesByType"] = $tdatagestores_users[".pagesByType"];
$tdatagestores_users[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatagestores_users[".originalPages"] = $tdatagestores_users[".pages"];
$tdatagestores_users[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatagestores_users[".originalDefaultPages"] = $tdatagestores_users[".defaultPages"];

//	field labels
$fieldLabelsgestores_users = array();
$fieldToolTipsgestores_users = array();
$pageTitlesgestores_users = array();
$placeHoldersgestores_users = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgestores_users["Spanish"] = array();
	$fieldToolTipsgestores_users["Spanish"] = array();
	$placeHoldersgestores_users["Spanish"] = array();
	$pageTitlesgestores_users["Spanish"] = array();
	$fieldLabelsgestores_users["Spanish"]["id"] = "Id";
	$fieldToolTipsgestores_users["Spanish"]["id"] = "";
	$placeHoldersgestores_users["Spanish"]["id"] = "";
	$fieldLabelsgestores_users["Spanish"]["username"] = "Nombre de usuario:";
	$fieldToolTipsgestores_users["Spanish"]["username"] = "";
	$placeHoldersgestores_users["Spanish"]["username"] = "";
	$fieldLabelsgestores_users["Spanish"]["clave"] = "Clave";
	$fieldToolTipsgestores_users["Spanish"]["clave"] = "";
	$placeHoldersgestores_users["Spanish"]["clave"] = "";
	$fieldLabelsgestores_users["Spanish"]["email"] = "Email:";
	$fieldToolTipsgestores_users["Spanish"]["email"] = "";
	$placeHoldersgestores_users["Spanish"]["email"] = "";
	$fieldLabelsgestores_users["Spanish"]["fullname"] = "Fullname";
	$fieldToolTipsgestores_users["Spanish"]["fullname"] = "";
	$placeHoldersgestores_users["Spanish"]["fullname"] = "";
	$fieldLabelsgestores_users["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipsgestores_users["Spanish"]["groupid"] = "";
	$placeHoldersgestores_users["Spanish"]["groupid"] = "";
	$fieldLabelsgestores_users["Spanish"]["active"] = "Active";
	$fieldToolTipsgestores_users["Spanish"]["active"] = "";
	$placeHoldersgestores_users["Spanish"]["active"] = "";
	$fieldLabelsgestores_users["Spanish"]["nrodocumento"] = "Nrodocumento";
	$fieldToolTipsgestores_users["Spanish"]["nrodocumento"] = "";
	$placeHoldersgestores_users["Spanish"]["nrodocumento"] = "";
	$fieldLabelsgestores_users["Spanish"]["reset_token"] = "Reset Token";
	$fieldToolTipsgestores_users["Spanish"]["reset_token"] = "";
	$placeHoldersgestores_users["Spanish"]["reset_token"] = "";
	$fieldLabelsgestores_users["Spanish"]["reset_date"] = "Reset Date";
	$fieldToolTipsgestores_users["Spanish"]["reset_date"] = "";
	$placeHoldersgestores_users["Spanish"]["reset_date"] = "";
	$fieldLabelsgestores_users["Spanish"]["fecha_alta"] = "Fecha Alta";
	$fieldToolTipsgestores_users["Spanish"]["fecha_alta"] = "";
	$placeHoldersgestores_users["Spanish"]["fecha_alta"] = "";
	$fieldLabelsgestores_users["Spanish"]["llave"] = "Llave";
	$fieldToolTipsgestores_users["Spanish"]["llave"] = "";
	$placeHoldersgestores_users["Spanish"]["llave"] = "";
	$fieldLabelsgestores_users["Spanish"]["estado_llave"] = "Estado Llave";
	$fieldToolTipsgestores_users["Spanish"]["estado_llave"] = "";
	$placeHoldersgestores_users["Spanish"]["estado_llave"] = "";
	$fieldLabelsgestores_users["Spanish"]["apellido"] = "Apellido";
	$fieldToolTipsgestores_users["Spanish"]["apellido"] = "";
	$placeHoldersgestores_users["Spanish"]["apellido"] = "";
	$fieldLabelsgestores_users["Spanish"]["two_factor"] = "Two Factor";
	$fieldToolTipsgestores_users["Spanish"]["two_factor"] = "";
	$placeHoldersgestores_users["Spanish"]["two_factor"] = "";
	$fieldLabelsgestores_users["Spanish"]["totp_secret"] = "Totp Secret";
	$fieldToolTipsgestores_users["Spanish"]["totp_secret"] = "";
	$placeHoldersgestores_users["Spanish"]["totp_secret"] = "";
	$fieldLabelsgestores_users["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsgestores_users["Spanish"]["nombre"] = "";
	$placeHoldersgestores_users["Spanish"]["nombre"] = "";
	if (count($fieldToolTipsgestores_users["Spanish"]))
		$tdatagestores_users[".isUseToolTips"] = true;
}


	$tdatagestores_users[".NCSearch"] = true;



$tdatagestores_users[".shortTableName"] = "gestores_users";
$tdatagestores_users[".nSecOptions"] = 0;

$tdatagestores_users[".mainTableOwnerID"] = "";
$tdatagestores_users[".entityType"] = 0;
$tdatagestores_users[".connId"] = "eportal_at_192_168_70_170";


$tdatagestores_users[".strOriginalTableName"] = "bolsa_empleo.gestores_users";

	



$tdatagestores_users[".showAddInPopup"] = false;

$tdatagestores_users[".showEditInPopup"] = false;

$tdatagestores_users[".showViewInPopup"] = false;

$tdatagestores_users[".listAjax"] = false;
//	temporary
//$tdatagestores_users[".listAjax"] = false;

	$tdatagestores_users[".audit"] = true;

	$tdatagestores_users[".locking"] = false;


$pages = $tdatagestores_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagestores_users[".edit"] = true;
	$tdatagestores_users[".afterEditAction"] = 1;
	$tdatagestores_users[".closePopupAfterEdit"] = 1;
	$tdatagestores_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagestores_users[".add"] = true;
$tdatagestores_users[".afterAddAction"] = 1;
$tdatagestores_users[".closePopupAfterAdd"] = 1;
$tdatagestores_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagestores_users[".list"] = true;
}



$tdatagestores_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagestores_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagestores_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagestores_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagestores_users[".printFriendly"] = true;
}



$tdatagestores_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagestores_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagestores_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagestores_users[".isUseAjaxSuggest"] = true;



																																																																																							

$tdatagestores_users[".ajaxCodeSnippetAdded"] = false;

$tdatagestores_users[".buttonsAdded"] = false;

$tdatagestores_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagestores_users[".isUseTimeForSearch"] = false;


$tdatagestores_users[".badgeColor"] = "CD5C5C";


$tdatagestores_users[".allSearchFields"] = array();
$tdatagestores_users[".filterFields"] = array();
$tdatagestores_users[".requiredSearchFields"] = array();

$tdatagestores_users[".googleLikeFields"] = array();
$tdatagestores_users[".googleLikeFields"][] = "id";
$tdatagestores_users[".googleLikeFields"][] = "username";
$tdatagestores_users[".googleLikeFields"][] = "clave";
$tdatagestores_users[".googleLikeFields"][] = "email";
$tdatagestores_users[".googleLikeFields"][] = "fullname";
$tdatagestores_users[".googleLikeFields"][] = "groupid";
$tdatagestores_users[".googleLikeFields"][] = "active";
$tdatagestores_users[".googleLikeFields"][] = "nrodocumento";
$tdatagestores_users[".googleLikeFields"][] = "reset_token";
$tdatagestores_users[".googleLikeFields"][] = "reset_date";
$tdatagestores_users[".googleLikeFields"][] = "fecha_alta";
$tdatagestores_users[".googleLikeFields"][] = "llave";
$tdatagestores_users[".googleLikeFields"][] = "estado_llave";
$tdatagestores_users[".googleLikeFields"][] = "apellido";
$tdatagestores_users[".googleLikeFields"][] = "two_factor";
$tdatagestores_users[".googleLikeFields"][] = "totp_secret";
$tdatagestores_users[".googleLikeFields"][] = "nombre";



$tdatagestores_users[".tableType"] = "list";

$tdatagestores_users[".printerPageOrientation"] = 0;
$tdatagestores_users[".nPrinterPageScale"] = 100;

$tdatagestores_users[".nPrinterSplitRecords"] = 40;

$tdatagestores_users[".geocodingEnabled"] = false;










$tdatagestores_users[".pageSize"] = 20;

$tdatagestores_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatagestores_users[".strOrderBy"] = $tstrOrderBy;

$tdatagestores_users[".orderindexes"] = array();


$tdatagestores_users[".sqlHead"] = "SELECT id,  	username,  	clave,  	email,  	fullname,  	groupid,  	active,  	nrodocumento,  	reset_token,  	reset_date,  	fecha_alta,  	llave,  	estado_llave,  	apellido,  	two_factor,  	totp_secret,  	nombre";
$tdatagestores_users[".sqlFrom"] = "FROM bolsa_empleo.gestores_users";
$tdatagestores_users[".sqlWhereExpr"] = "";
$tdatagestores_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagestores_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagestores_users[".arrGroupsPerPage"] = $arrGPP;

$tdatagestores_users[".highlightSearchResults"] = true;

$tableKeysgestores_users = array();
$tableKeysgestores_users[] = "id";
$tdatagestores_users[".Keys"] = $tableKeysgestores_users;


$tdatagestores_users[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","id");
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


	$tdatagestores_users["id"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "id";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","username");
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


	$tdatagestores_users["username"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "username";
//	clave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "clave";
	$fdata["GoodName"] = "clave";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","clave");
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


	$tdatagestores_users["clave"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "clave";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","email");
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


	$tdatagestores_users["email"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","fullname");
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


	$tdatagestores_users["fullname"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","groupid");
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


	$tdatagestores_users["groupid"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","active");
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


	$tdatagestores_users["active"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "active";
//	nrodocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "nrodocumento";
	$fdata["GoodName"] = "nrodocumento";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","nrodocumento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nrodocumento";

		$fdata["sourceSingle"] = "nrodocumento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nrodocumento";

	
	
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


	$tdatagestores_users["nrodocumento"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "nrodocumento";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","reset_token");
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


	$tdatagestores_users["reset_token"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","reset_date");
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


	$tdatagestores_users["reset_date"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "reset_date";
//	fecha_alta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fecha_alta";
	$fdata["GoodName"] = "fecha_alta";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","fecha_alta");
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


	$tdatagestores_users["fecha_alta"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "fecha_alta";
//	llave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "llave";
	$fdata["GoodName"] = "llave";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","llave");
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


	$tdatagestores_users["llave"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "llave";
//	estado_llave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "estado_llave";
	$fdata["GoodName"] = "estado_llave";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","estado_llave");
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


	$tdatagestores_users["estado_llave"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "estado_llave";
//	apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "apellido";
	$fdata["GoodName"] = "apellido";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","apellido");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apellido";

		$fdata["sourceSingle"] = "apellido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellido";

	
	
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


	$tdatagestores_users["apellido"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "apellido";
//	two_factor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "two_factor";
	$fdata["GoodName"] = "two_factor";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","two_factor");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "two_factor";

		$fdata["sourceSingle"] = "two_factor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "two_factor";

	
	
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


	$tdatagestores_users["two_factor"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "two_factor";
//	totp_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "totp_secret";
	$fdata["GoodName"] = "totp_secret";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","totp_secret");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "totp_secret";

		$fdata["sourceSingle"] = "totp_secret";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "totp_secret";

	
	
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


	$tdatagestores_users["totp_secret"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "totp_secret";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "bolsa_empleo.gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_gestores_users","nombre");
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


	$tdatagestores_users["nombre"] = $fdata;
		$tdatagestores_users[".searchableFields"][] = "nombre";


$tables_data["bolsa_empleo.gestores_users"]=&$tdatagestores_users;
$field_labels["bolsa_empleo_gestores_users"] = &$fieldLabelsgestores_users;
$fieldToolTips["bolsa_empleo_gestores_users"] = &$fieldToolTipsgestores_users;
$placeHolders["bolsa_empleo_gestores_users"] = &$placeHoldersgestores_users;
$page_titles["bolsa_empleo_gestores_users"] = &$pageTitlesgestores_users;


changeTextControlsToDate( "bolsa_empleo.gestores_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.gestores_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.gestores_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_gestores_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	username,  	clave,  	email,  	fullname,  	groupid,  	active,  	nrodocumento,  	reset_token,  	reset_date,  	fecha_alta,  	llave,  	estado_llave,  	apellido,  	two_factor,  	totp_secret,  	nombre";
$proto0["m_strFrom"] = "FROM bolsa_empleo.gestores_users";
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
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "clave",
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto10["m_sql"] = "clave";
$proto10["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "nrodocumento",
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto20["m_sql"] = "nrodocumento";
$proto20["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto22["m_sql"] = "reset_token";
$proto22["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto24["m_sql"] = "reset_date";
$proto24["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_alta",
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto26["m_sql"] = "fecha_alta";
$proto26["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "llave",
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto28["m_sql"] = "llave";
$proto28["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_llave",
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto30["m_sql"] = "estado_llave";
$proto30["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido",
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto32["m_sql"] = "apellido";
$proto32["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "two_factor",
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto34["m_sql"] = "two_factor";
$proto34["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "totp_secret",
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto36["m_sql"] = "totp_secret";
$proto36["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "bolsa_empleo.gestores_users",
	"m_srcTableName" => "bolsa_empleo.gestores_users"
));

$proto38["m_sql"] = "nombre";
$proto38["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "bolsa_empleo.gestores_users";
$proto41["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id";
$proto41["m_columns"][] = "username";
$proto41["m_columns"][] = "clave";
$proto41["m_columns"][] = "email";
$proto41["m_columns"][] = "fullname";
$proto41["m_columns"][] = "groupid";
$proto41["m_columns"][] = "active";
$proto41["m_columns"][] = "nrodocumento";
$proto41["m_columns"][] = "reset_token";
$proto41["m_columns"][] = "reset_date";
$proto41["m_columns"][] = "fecha_alta";
$proto41["m_columns"][] = "llave";
$proto41["m_columns"][] = "estado_llave";
$proto41["m_columns"][] = "apellido";
$proto41["m_columns"][] = "two_factor";
$proto41["m_columns"][] = "totp_secret";
$proto41["m_columns"][] = "nombre";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "bolsa_empleo.gestores_users";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "bolsa_empleo.gestores_users";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.gestores_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gestores_users = createSqlQuery_gestores_users();


	
		;

																	

$tdatagestores_users[".sqlquery"] = $queryData_gestores_users;



$tdatagestores_users[".hasEvents"] = false;

?>
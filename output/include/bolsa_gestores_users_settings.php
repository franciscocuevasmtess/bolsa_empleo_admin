<?php
$tdatabolsa_gestores_users = array();
$tdatabolsa_gestores_users[".searchableFields"] = array();
$tdatabolsa_gestores_users[".ShortName"] = "bolsa_gestores_users";
$tdatabolsa_gestores_users[".OwnerID"] = "id_bolsa_gestores_users";
$tdatabolsa_gestores_users[".OriginalTable"] = "bolsa_empleo.bolsa_gestores_users";


$tdatabolsa_gestores_users[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabolsa_gestores_users[".originalPagesByType"] = $tdatabolsa_gestores_users[".pagesByType"];
$tdatabolsa_gestores_users[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabolsa_gestores_users[".originalPages"] = $tdatabolsa_gestores_users[".pages"];
$tdatabolsa_gestores_users[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabolsa_gestores_users[".originalDefaultPages"] = $tdatabolsa_gestores_users[".defaultPages"];

//	field labels
$fieldLabelsbolsa_gestores_users = array();
$fieldToolTipsbolsa_gestores_users = array();
$pageTitlesbolsa_gestores_users = array();
$placeHoldersbolsa_gestores_users = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbolsa_gestores_users["Spanish"] = array();
	$fieldToolTipsbolsa_gestores_users["Spanish"] = array();
	$placeHoldersbolsa_gestores_users["Spanish"] = array();
	$pageTitlesbolsa_gestores_users["Spanish"] = array();
	$fieldLabelsbolsa_gestores_users["Spanish"]["id_bolsa_gestores_users"] = "Id Bolsa Gestores Users";
	$fieldToolTipsbolsa_gestores_users["Spanish"]["id_bolsa_gestores_users"] = "";
	$placeHoldersbolsa_gestores_users["Spanish"]["id_bolsa_gestores_users"] = "";
	$fieldLabelsbolsa_gestores_users["Spanish"]["clave"] = "Clave";
	$fieldToolTipsbolsa_gestores_users["Spanish"]["clave"] = "";
	$placeHoldersbolsa_gestores_users["Spanish"]["clave"] = "";
	$fieldLabelsbolsa_gestores_users["Spanish"]["email"] = "Email";
	$fieldToolTipsbolsa_gestores_users["Spanish"]["email"] = "";
	$placeHoldersbolsa_gestores_users["Spanish"]["email"] = "";
	$fieldLabelsbolsa_gestores_users["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipsbolsa_gestores_users["Spanish"]["groupid"] = "";
	$placeHoldersbolsa_gestores_users["Spanish"]["groupid"] = "";
	$fieldLabelsbolsa_gestores_users["Spanish"]["active"] = "Active";
	$fieldToolTipsbolsa_gestores_users["Spanish"]["active"] = "";
	$placeHoldersbolsa_gestores_users["Spanish"]["active"] = "";
	$fieldLabelsbolsa_gestores_users["Spanish"]["reset_token"] = "Reset Token";
	$fieldToolTipsbolsa_gestores_users["Spanish"]["reset_token"] = "";
	$placeHoldersbolsa_gestores_users["Spanish"]["reset_token"] = "";
	$fieldLabelsbolsa_gestores_users["Spanish"]["reset_date"] = "Reset Date";
	$fieldToolTipsbolsa_gestores_users["Spanish"]["reset_date"] = "";
	$placeHoldersbolsa_gestores_users["Spanish"]["reset_date"] = "";
	$fieldLabelsbolsa_gestores_users["Spanish"]["fecha_alta"] = "Fecha Alta";
	$fieldToolTipsbolsa_gestores_users["Spanish"]["fecha_alta"] = "";
	$placeHoldersbolsa_gestores_users["Spanish"]["fecha_alta"] = "";
	$fieldLabelsbolsa_gestores_users["Spanish"]["userpic"] = "Userpic";
	$fieldToolTipsbolsa_gestores_users["Spanish"]["userpic"] = "";
	$placeHoldersbolsa_gestores_users["Spanish"]["userpic"] = "";
	$fieldLabelsbolsa_gestores_users["Spanish"]["fullname"] = "Fullname";
	$fieldToolTipsbolsa_gestores_users["Spanish"]["fullname"] = "";
	$placeHoldersbolsa_gestores_users["Spanish"]["fullname"] = "";
	$fieldLabelsbolsa_gestores_users["Spanish"]["username"] = "Username";
	$fieldToolTipsbolsa_gestores_users["Spanish"]["username"] = "";
	$placeHoldersbolsa_gestores_users["Spanish"]["username"] = "";
	if (count($fieldToolTipsbolsa_gestores_users["Spanish"]))
		$tdatabolsa_gestores_users[".isUseToolTips"] = true;
}


	$tdatabolsa_gestores_users[".NCSearch"] = true;



$tdatabolsa_gestores_users[".shortTableName"] = "bolsa_gestores_users";
$tdatabolsa_gestores_users[".nSecOptions"] = 0;

$tdatabolsa_gestores_users[".mainTableOwnerID"] = "id_bolsa_gestores_users";
$tdatabolsa_gestores_users[".entityType"] = 0;
$tdatabolsa_gestores_users[".connId"] = "eportal_at_192_168_70_170";


$tdatabolsa_gestores_users[".strOriginalTableName"] = "bolsa_empleo.bolsa_gestores_users";

	



$tdatabolsa_gestores_users[".showAddInPopup"] = false;

$tdatabolsa_gestores_users[".showEditInPopup"] = false;

$tdatabolsa_gestores_users[".showViewInPopup"] = false;

$tdatabolsa_gestores_users[".listAjax"] = false;
//	temporary
//$tdatabolsa_gestores_users[".listAjax"] = false;

	$tdatabolsa_gestores_users[".audit"] = false;

	$tdatabolsa_gestores_users[".locking"] = false;


$pages = $tdatabolsa_gestores_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabolsa_gestores_users[".edit"] = true;
	$tdatabolsa_gestores_users[".afterEditAction"] = 1;
	$tdatabolsa_gestores_users[".closePopupAfterEdit"] = 1;
	$tdatabolsa_gestores_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabolsa_gestores_users[".add"] = true;
$tdatabolsa_gestores_users[".afterAddAction"] = 1;
$tdatabolsa_gestores_users[".closePopupAfterAdd"] = 1;
$tdatabolsa_gestores_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabolsa_gestores_users[".list"] = true;
}



$tdatabolsa_gestores_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabolsa_gestores_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabolsa_gestores_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabolsa_gestores_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabolsa_gestores_users[".printFriendly"] = true;
}



$tdatabolsa_gestores_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabolsa_gestores_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabolsa_gestores_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabolsa_gestores_users[".isUseAjaxSuggest"] = true;





$tdatabolsa_gestores_users[".ajaxCodeSnippetAdded"] = false;

$tdatabolsa_gestores_users[".buttonsAdded"] = false;

$tdatabolsa_gestores_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabolsa_gestores_users[".isUseTimeForSearch"] = false;


$tdatabolsa_gestores_users[".badgeColor"] = "3CB371";


$tdatabolsa_gestores_users[".allSearchFields"] = array();
$tdatabolsa_gestores_users[".filterFields"] = array();
$tdatabolsa_gestores_users[".requiredSearchFields"] = array();

$tdatabolsa_gestores_users[".googleLikeFields"] = array();
$tdatabolsa_gestores_users[".googleLikeFields"][] = "id_bolsa_gestores_users";
$tdatabolsa_gestores_users[".googleLikeFields"][] = "clave";
$tdatabolsa_gestores_users[".googleLikeFields"][] = "email";
$tdatabolsa_gestores_users[".googleLikeFields"][] = "groupid";
$tdatabolsa_gestores_users[".googleLikeFields"][] = "active";
$tdatabolsa_gestores_users[".googleLikeFields"][] = "reset_token";
$tdatabolsa_gestores_users[".googleLikeFields"][] = "reset_date";
$tdatabolsa_gestores_users[".googleLikeFields"][] = "fecha_alta";
$tdatabolsa_gestores_users[".googleLikeFields"][] = "fullname";
$tdatabolsa_gestores_users[".googleLikeFields"][] = "username";



$tdatabolsa_gestores_users[".tableType"] = "list";

$tdatabolsa_gestores_users[".printerPageOrientation"] = 0;
$tdatabolsa_gestores_users[".nPrinterPageScale"] = 100;

$tdatabolsa_gestores_users[".nPrinterSplitRecords"] = 40;

$tdatabolsa_gestores_users[".geocodingEnabled"] = false;










$tdatabolsa_gestores_users[".pageSize"] = 20;

$tdatabolsa_gestores_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabolsa_gestores_users[".strOrderBy"] = $tstrOrderBy;

$tdatabolsa_gestores_users[".orderindexes"] = array();


$tdatabolsa_gestores_users[".sqlHead"] = "SELECT id_bolsa_gestores_users,  	clave,  	email,  	groupid,  	active,  	reset_token,  	reset_date,  	fecha_alta,  	userpic,  	fullname,  	username";
$tdatabolsa_gestores_users[".sqlFrom"] = "FROM bolsa_empleo.bolsa_gestores_users";
$tdatabolsa_gestores_users[".sqlWhereExpr"] = "";
$tdatabolsa_gestores_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabolsa_gestores_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabolsa_gestores_users[".arrGroupsPerPage"] = $arrGPP;

$tdatabolsa_gestores_users[".highlightSearchResults"] = true;

$tableKeysbolsa_gestores_users = array();
$tableKeysbolsa_gestores_users[] = "id_bolsa_gestores_users";
$tdatabolsa_gestores_users[".Keys"] = $tableKeysbolsa_gestores_users;


$tdatabolsa_gestores_users[".hideMobileList"] = array();




//	id_bolsa_gestores_users
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_bolsa_gestores_users";
	$fdata["GoodName"] = "id_bolsa_gestores_users";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_gestores_users","id_bolsa_gestores_users");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_bolsa_gestores_users";

		$fdata["sourceSingle"] = "id_bolsa_gestores_users";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_bolsa_gestores_users";

	
	
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


	$tdatabolsa_gestores_users["id_bolsa_gestores_users"] = $fdata;
		$tdatabolsa_gestores_users[".searchableFields"][] = "id_bolsa_gestores_users";
//	clave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "clave";
	$fdata["GoodName"] = "clave";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_gestores_users","clave");
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


	$tdatabolsa_gestores_users["clave"] = $fdata;
		$tdatabolsa_gestores_users[".searchableFields"][] = "clave";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_gestores_users","email");
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


	$tdatabolsa_gestores_users["email"] = $fdata;
		$tdatabolsa_gestores_users[".searchableFields"][] = "email";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_gestores_users","groupid");
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


	$tdatabolsa_gestores_users["groupid"] = $fdata;
		$tdatabolsa_gestores_users[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_gestores_users","active");
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


	$tdatabolsa_gestores_users["active"] = $fdata;
		$tdatabolsa_gestores_users[".searchableFields"][] = "active";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_gestores_users","reset_token");
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


	$tdatabolsa_gestores_users["reset_token"] = $fdata;
		$tdatabolsa_gestores_users[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_gestores_users","reset_date");
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


	$tdatabolsa_gestores_users["reset_date"] = $fdata;
		$tdatabolsa_gestores_users[".searchableFields"][] = "reset_date";
//	fecha_alta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fecha_alta";
	$fdata["GoodName"] = "fecha_alta";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_gestores_users","fecha_alta");
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


	$tdatabolsa_gestores_users["fecha_alta"] = $fdata;
		$tdatabolsa_gestores_users[".searchableFields"][] = "fecha_alta";
//	userpic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "userpic";
	$fdata["GoodName"] = "userpic";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_gestores_users","userpic");
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


	$tdatabolsa_gestores_users["userpic"] = $fdata;
	//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_gestores_users","fullname");
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


	$tdatabolsa_gestores_users["fullname"] = $fdata;
		$tdatabolsa_gestores_users[".searchableFields"][] = "fullname";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_gestores_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_gestores_users","username");
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


	$tdatabolsa_gestores_users["username"] = $fdata;
		$tdatabolsa_gestores_users[".searchableFields"][] = "username";


$tables_data["bolsa_empleo.bolsa_gestores_users"]=&$tdatabolsa_gestores_users;
$field_labels["bolsa_empleo_bolsa_gestores_users"] = &$fieldLabelsbolsa_gestores_users;
$fieldToolTips["bolsa_empleo_bolsa_gestores_users"] = &$fieldToolTipsbolsa_gestores_users;
$placeHolders["bolsa_empleo_bolsa_gestores_users"] = &$placeHoldersbolsa_gestores_users;
$page_titles["bolsa_empleo_bolsa_gestores_users"] = &$pageTitlesbolsa_gestores_users;


changeTextControlsToDate( "bolsa_empleo.bolsa_gestores_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.bolsa_gestores_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.bolsa_gestores_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bolsa_gestores_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_bolsa_gestores_users,  	clave,  	email,  	groupid,  	active,  	reset_token,  	reset_date,  	fecha_alta,  	userpic,  	fullname,  	username";
$proto0["m_strFrom"] = "FROM bolsa_empleo.bolsa_gestores_users";
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
	"m_strName" => "id_bolsa_gestores_users",
	"m_strTable" => "bolsa_empleo.bolsa_gestores_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_gestores_users"
));

$proto6["m_sql"] = "id_bolsa_gestores_users";
$proto6["m_srcTableName"] = "bolsa_empleo.bolsa_gestores_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "clave",
	"m_strTable" => "bolsa_empleo.bolsa_gestores_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_gestores_users"
));

$proto8["m_sql"] = "clave";
$proto8["m_srcTableName"] = "bolsa_empleo.bolsa_gestores_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "bolsa_empleo.bolsa_gestores_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_gestores_users"
));

$proto10["m_sql"] = "email";
$proto10["m_srcTableName"] = "bolsa_empleo.bolsa_gestores_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "bolsa_empleo.bolsa_gestores_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_gestores_users"
));

$proto12["m_sql"] = "groupid";
$proto12["m_srcTableName"] = "bolsa_empleo.bolsa_gestores_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "bolsa_empleo.bolsa_gestores_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_gestores_users"
));

$proto14["m_sql"] = "active";
$proto14["m_srcTableName"] = "bolsa_empleo.bolsa_gestores_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "bolsa_empleo.bolsa_gestores_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_gestores_users"
));

$proto16["m_sql"] = "reset_token";
$proto16["m_srcTableName"] = "bolsa_empleo.bolsa_gestores_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "bolsa_empleo.bolsa_gestores_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_gestores_users"
));

$proto18["m_sql"] = "reset_date";
$proto18["m_srcTableName"] = "bolsa_empleo.bolsa_gestores_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_alta",
	"m_strTable" => "bolsa_empleo.bolsa_gestores_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_gestores_users"
));

$proto20["m_sql"] = "fecha_alta";
$proto20["m_srcTableName"] = "bolsa_empleo.bolsa_gestores_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "userpic",
	"m_strTable" => "bolsa_empleo.bolsa_gestores_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_gestores_users"
));

$proto22["m_sql"] = "userpic";
$proto22["m_srcTableName"] = "bolsa_empleo.bolsa_gestores_users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "bolsa_empleo.bolsa_gestores_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_gestores_users"
));

$proto24["m_sql"] = "fullname";
$proto24["m_srcTableName"] = "bolsa_empleo.bolsa_gestores_users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "bolsa_empleo.bolsa_gestores_users",
	"m_srcTableName" => "bolsa_empleo.bolsa_gestores_users"
));

$proto26["m_sql"] = "username";
$proto26["m_srcTableName"] = "bolsa_empleo.bolsa_gestores_users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "bolsa_empleo.bolsa_gestores_users";
$proto29["m_srcTableName"] = "bolsa_empleo.bolsa_gestores_users";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id_bolsa_gestores_users";
$proto29["m_columns"][] = "clave";
$proto29["m_columns"][] = "email";
$proto29["m_columns"][] = "groupid";
$proto29["m_columns"][] = "active";
$proto29["m_columns"][] = "reset_token";
$proto29["m_columns"][] = "reset_date";
$proto29["m_columns"][] = "fecha_alta";
$proto29["m_columns"][] = "userpic";
$proto29["m_columns"][] = "fullname";
$proto29["m_columns"][] = "username";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "bolsa_empleo.bolsa_gestores_users";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "bolsa_empleo.bolsa_gestores_users";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.bolsa_gestores_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bolsa_gestores_users = createSqlQuery_bolsa_gestores_users();


	
		;

											

$tdatabolsa_gestores_users[".sqlquery"] = $queryData_bolsa_gestores_users;



$tdatabolsa_gestores_users[".hasEvents"] = false;

?>
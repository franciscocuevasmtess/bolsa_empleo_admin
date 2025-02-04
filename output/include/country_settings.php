<?php
$tdatacountry = array();
$tdatacountry[".searchableFields"] = array();
$tdatacountry[".ShortName"] = "country";
$tdatacountry[".OwnerID"] = "";
$tdatacountry[".OriginalTable"] = "eportal.country";


$tdatacountry[".pagesByType"] = my_json_decode( "{}" );
$tdatacountry[".originalPagesByType"] = $tdatacountry[".pagesByType"];
$tdatacountry[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatacountry[".originalPages"] = $tdatacountry[".pages"];
$tdatacountry[".defaultPages"] = my_json_decode( "{}" );
$tdatacountry[".originalDefaultPages"] = $tdatacountry[".defaultPages"];

//	field labels
$fieldLabelscountry = array();
$fieldToolTipscountry = array();
$pageTitlescountry = array();
$placeHolderscountry = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscountry["Spanish"] = array();
	$fieldToolTipscountry["Spanish"] = array();
	$placeHolderscountry["Spanish"] = array();
	$pageTitlescountry["Spanish"] = array();
	$fieldLabelscountry["Spanish"]["code"] = "Code";
	$fieldToolTipscountry["Spanish"]["code"] = "";
	$placeHolderscountry["Spanish"]["code"] = "";
	$fieldLabelscountry["Spanish"]["name"] = "Name";
	$fieldToolTipscountry["Spanish"]["name"] = "";
	$placeHolderscountry["Spanish"]["name"] = "";
	$fieldLabelscountry["Spanish"]["continent"] = "Continent";
	$fieldToolTipscountry["Spanish"]["continent"] = "";
	$placeHolderscountry["Spanish"]["continent"] = "";
	$fieldLabelscountry["Spanish"]["region"] = "Region";
	$fieldToolTipscountry["Spanish"]["region"] = "";
	$placeHolderscountry["Spanish"]["region"] = "";
	$fieldLabelscountry["Spanish"]["surfacearea"] = "Surfacearea";
	$fieldToolTipscountry["Spanish"]["surfacearea"] = "";
	$placeHolderscountry["Spanish"]["surfacearea"] = "";
	$fieldLabelscountry["Spanish"]["indepyear"] = "Indepyear";
	$fieldToolTipscountry["Spanish"]["indepyear"] = "";
	$placeHolderscountry["Spanish"]["indepyear"] = "";
	$fieldLabelscountry["Spanish"]["population"] = "Population";
	$fieldToolTipscountry["Spanish"]["population"] = "";
	$placeHolderscountry["Spanish"]["population"] = "";
	$fieldLabelscountry["Spanish"]["lifeexpectancy"] = "Lifeexpectancy";
	$fieldToolTipscountry["Spanish"]["lifeexpectancy"] = "";
	$placeHolderscountry["Spanish"]["lifeexpectancy"] = "";
	$fieldLabelscountry["Spanish"]["gnp"] = "Gnp";
	$fieldToolTipscountry["Spanish"]["gnp"] = "";
	$placeHolderscountry["Spanish"]["gnp"] = "";
	$fieldLabelscountry["Spanish"]["gnpold"] = "Gnpold";
	$fieldToolTipscountry["Spanish"]["gnpold"] = "";
	$placeHolderscountry["Spanish"]["gnpold"] = "";
	$fieldLabelscountry["Spanish"]["localname"] = "Localname";
	$fieldToolTipscountry["Spanish"]["localname"] = "";
	$placeHolderscountry["Spanish"]["localname"] = "";
	$fieldLabelscountry["Spanish"]["governmentform"] = "Governmentform";
	$fieldToolTipscountry["Spanish"]["governmentform"] = "";
	$placeHolderscountry["Spanish"]["governmentform"] = "";
	$fieldLabelscountry["Spanish"]["headofstate"] = "Headofstate";
	$fieldToolTipscountry["Spanish"]["headofstate"] = "";
	$placeHolderscountry["Spanish"]["headofstate"] = "";
	$fieldLabelscountry["Spanish"]["capital"] = "Capital";
	$fieldToolTipscountry["Spanish"]["capital"] = "";
	$placeHolderscountry["Spanish"]["capital"] = "";
	$fieldLabelscountry["Spanish"]["code2"] = "Code2";
	$fieldToolTipscountry["Spanish"]["code2"] = "";
	$placeHolderscountry["Spanish"]["code2"] = "";
	if (count($fieldToolTipscountry["Spanish"]))
		$tdatacountry[".isUseToolTips"] = true;
}


	$tdatacountry[".NCSearch"] = true;



$tdatacountry[".shortTableName"] = "country";
$tdatacountry[".nSecOptions"] = 0;

$tdatacountry[".mainTableOwnerID"] = "";
$tdatacountry[".entityType"] = 0;
$tdatacountry[".connId"] = "eportal_at_192_168_70_170";


$tdatacountry[".strOriginalTableName"] = "eportal.country";

	



$tdatacountry[".showAddInPopup"] = false;

$tdatacountry[".showEditInPopup"] = false;

$tdatacountry[".showViewInPopup"] = false;

$tdatacountry[".listAjax"] = false;
//	temporary
//$tdatacountry[".listAjax"] = false;

	$tdatacountry[".audit"] = true;

	$tdatacountry[".locking"] = false;


$pages = $tdatacountry[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacountry[".edit"] = true;
	$tdatacountry[".afterEditAction"] = 1;
	$tdatacountry[".closePopupAfterEdit"] = 1;
	$tdatacountry[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacountry[".add"] = true;
$tdatacountry[".afterAddAction"] = 1;
$tdatacountry[".closePopupAfterAdd"] = 1;
$tdatacountry[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacountry[".list"] = true;
}



$tdatacountry[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacountry[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacountry[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacountry[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacountry[".printFriendly"] = true;
}



$tdatacountry[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacountry[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacountry[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacountry[".isUseAjaxSuggest"] = true;



																																																			

$tdatacountry[".ajaxCodeSnippetAdded"] = false;

$tdatacountry[".buttonsAdded"] = false;

$tdatacountry[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacountry[".isUseTimeForSearch"] = false;


$tdatacountry[".badgeColor"] = "9ACD32";


$tdatacountry[".allSearchFields"] = array();
$tdatacountry[".filterFields"] = array();
$tdatacountry[".requiredSearchFields"] = array();

$tdatacountry[".googleLikeFields"] = array();
$tdatacountry[".googleLikeFields"][] = "code";
$tdatacountry[".googleLikeFields"][] = "name";
$tdatacountry[".googleLikeFields"][] = "continent";
$tdatacountry[".googleLikeFields"][] = "region";
$tdatacountry[".googleLikeFields"][] = "surfacearea";
$tdatacountry[".googleLikeFields"][] = "indepyear";
$tdatacountry[".googleLikeFields"][] = "population";
$tdatacountry[".googleLikeFields"][] = "lifeexpectancy";
$tdatacountry[".googleLikeFields"][] = "gnp";
$tdatacountry[".googleLikeFields"][] = "gnpold";
$tdatacountry[".googleLikeFields"][] = "localname";
$tdatacountry[".googleLikeFields"][] = "governmentform";
$tdatacountry[".googleLikeFields"][] = "headofstate";
$tdatacountry[".googleLikeFields"][] = "capital";
$tdatacountry[".googleLikeFields"][] = "code2";



$tdatacountry[".tableType"] = "list";

$tdatacountry[".printerPageOrientation"] = 0;
$tdatacountry[".nPrinterPageScale"] = 100;

$tdatacountry[".nPrinterSplitRecords"] = 40;

$tdatacountry[".geocodingEnabled"] = false;










$tdatacountry[".pageSize"] = 20;

$tdatacountry[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacountry[".strOrderBy"] = $tstrOrderBy;

$tdatacountry[".orderindexes"] = array();


$tdatacountry[".sqlHead"] = "SELECT code,  	name,  	continent,  	region,  	surfacearea,  	indepyear,  	population,  	lifeexpectancy,  	gnp,  	gnpold,  	localname,  	governmentform,  	headofstate,  	capital,  	code2";
$tdatacountry[".sqlFrom"] = "FROM eportal.country";
$tdatacountry[".sqlWhereExpr"] = "";
$tdatacountry[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacountry[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacountry[".arrGroupsPerPage"] = $arrGPP;

$tdatacountry[".highlightSearchResults"] = true;

$tableKeyscountry = array();
$tableKeyscountry[] = "code";
$tdatacountry[".Keys"] = $tableKeyscountry;


$tdatacountry[".hideMobileList"] = array();




//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("eportal_country","code");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "code";

		$fdata["sourceSingle"] = "code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "code";

	
	
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


	$tdatacountry["code"] = $fdata;
		$tdatacountry[".searchableFields"][] = "code";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("eportal_country","name");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	$tdatacountry["name"] = $fdata;
		$tdatacountry[".searchableFields"][] = "name";
//	continent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "continent";
	$fdata["GoodName"] = "continent";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("eportal_country","continent");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "continent";

		$fdata["sourceSingle"] = "continent";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "continent";

	
	
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


	$tdatacountry["continent"] = $fdata;
		$tdatacountry[".searchableFields"][] = "continent";
//	region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "region";
	$fdata["GoodName"] = "region";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("eportal_country","region");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "region";

		$fdata["sourceSingle"] = "region";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region";

	
	
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


	$tdatacountry["region"] = $fdata;
		$tdatacountry[".searchableFields"][] = "region";
//	surfacearea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "surfacearea";
	$fdata["GoodName"] = "surfacearea";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("eportal_country","surfacearea");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "surfacearea";

		$fdata["sourceSingle"] = "surfacearea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "surfacearea";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatacountry["surfacearea"] = $fdata;
		$tdatacountry[".searchableFields"][] = "surfacearea";
//	indepyear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "indepyear";
	$fdata["GoodName"] = "indepyear";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("eportal_country","indepyear");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "indepyear";

		$fdata["sourceSingle"] = "indepyear";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indepyear";

	
	
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


	$tdatacountry["indepyear"] = $fdata;
		$tdatacountry[".searchableFields"][] = "indepyear";
//	population
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "population";
	$fdata["GoodName"] = "population";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("eportal_country","population");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "population";

		$fdata["sourceSingle"] = "population";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "population";

	
	
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


	$tdatacountry["population"] = $fdata;
		$tdatacountry[".searchableFields"][] = "population";
//	lifeexpectancy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "lifeexpectancy";
	$fdata["GoodName"] = "lifeexpectancy";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("eportal_country","lifeexpectancy");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "lifeexpectancy";

		$fdata["sourceSingle"] = "lifeexpectancy";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lifeexpectancy";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
	
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


	$tdatacountry["lifeexpectancy"] = $fdata;
		$tdatacountry[".searchableFields"][] = "lifeexpectancy";
//	gnp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "gnp";
	$fdata["GoodName"] = "gnp";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("eportal_country","gnp");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "gnp";

		$fdata["sourceSingle"] = "gnp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gnp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatacountry["gnp"] = $fdata;
		$tdatacountry[".searchableFields"][] = "gnp";
//	gnpold
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "gnpold";
	$fdata["GoodName"] = "gnpold";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("eportal_country","gnpold");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "gnpold";

		$fdata["sourceSingle"] = "gnpold";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gnpold";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatacountry["gnpold"] = $fdata;
		$tdatacountry[".searchableFields"][] = "gnpold";
//	localname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "localname";
	$fdata["GoodName"] = "localname";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("eportal_country","localname");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "localname";

		$fdata["sourceSingle"] = "localname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "localname";

	
	
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


	$tdatacountry["localname"] = $fdata;
		$tdatacountry[".searchableFields"][] = "localname";
//	governmentform
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "governmentform";
	$fdata["GoodName"] = "governmentform";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("eportal_country","governmentform");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "governmentform";

		$fdata["sourceSingle"] = "governmentform";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "governmentform";

	
	
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


	$tdatacountry["governmentform"] = $fdata;
		$tdatacountry[".searchableFields"][] = "governmentform";
//	headofstate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "headofstate";
	$fdata["GoodName"] = "headofstate";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("eportal_country","headofstate");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "headofstate";

		$fdata["sourceSingle"] = "headofstate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "headofstate";

	
	
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


	$tdatacountry["headofstate"] = $fdata;
		$tdatacountry[".searchableFields"][] = "headofstate";
//	capital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "capital";
	$fdata["GoodName"] = "capital";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("eportal_country","capital");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "capital";

		$fdata["sourceSingle"] = "capital";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "capital";

	
	
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


	$tdatacountry["capital"] = $fdata;
		$tdatacountry[".searchableFields"][] = "capital";
//	code2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "code2";
	$fdata["GoodName"] = "code2";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("eportal_country","code2");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "code2";

		$fdata["sourceSingle"] = "code2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "code2";

	
	
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


	$tdatacountry["code2"] = $fdata;
		$tdatacountry[".searchableFields"][] = "code2";


$tables_data["eportal.country"]=&$tdatacountry;
$field_labels["eportal_country"] = &$fieldLabelscountry;
$fieldToolTips["eportal_country"] = &$fieldToolTipscountry;
$placeHolders["eportal_country"] = &$placeHolderscountry;
$page_titles["eportal_country"] = &$pageTitlescountry;


changeTextControlsToDate( "eportal.country" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["eportal.country"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["eportal.country"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_country()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "code,  	name,  	continent,  	region,  	surfacearea,  	indepyear,  	population,  	lifeexpectancy,  	gnp,  	gnpold,  	localname,  	governmentform,  	headofstate,  	capital,  	code2";
$proto0["m_strFrom"] = "FROM eportal.country";
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
	"m_strName" => "code",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.country"
));

$proto6["m_sql"] = "code";
$proto6["m_srcTableName"] = "eportal.country";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.country"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "eportal.country";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "continent",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.country"
));

$proto10["m_sql"] = "continent";
$proto10["m_srcTableName"] = "eportal.country";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "region",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.country"
));

$proto12["m_sql"] = "region";
$proto12["m_srcTableName"] = "eportal.country";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "surfacearea",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.country"
));

$proto14["m_sql"] = "surfacearea";
$proto14["m_srcTableName"] = "eportal.country";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "indepyear",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.country"
));

$proto16["m_sql"] = "indepyear";
$proto16["m_srcTableName"] = "eportal.country";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "population",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.country"
));

$proto18["m_sql"] = "population";
$proto18["m_srcTableName"] = "eportal.country";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "lifeexpectancy",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.country"
));

$proto20["m_sql"] = "lifeexpectancy";
$proto20["m_srcTableName"] = "eportal.country";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "gnp",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.country"
));

$proto22["m_sql"] = "gnp";
$proto22["m_srcTableName"] = "eportal.country";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "gnpold",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.country"
));

$proto24["m_sql"] = "gnpold";
$proto24["m_srcTableName"] = "eportal.country";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "localname",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.country"
));

$proto26["m_sql"] = "localname";
$proto26["m_srcTableName"] = "eportal.country";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "governmentform",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.country"
));

$proto28["m_sql"] = "governmentform";
$proto28["m_srcTableName"] = "eportal.country";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "headofstate",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.country"
));

$proto30["m_sql"] = "headofstate";
$proto30["m_srcTableName"] = "eportal.country";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "capital",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.country"
));

$proto32["m_sql"] = "capital";
$proto32["m_srcTableName"] = "eportal.country";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "code2",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.country"
));

$proto34["m_sql"] = "code2";
$proto34["m_srcTableName"] = "eportal.country";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "eportal.country";
$proto37["m_srcTableName"] = "eportal.country";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "code";
$proto37["m_columns"][] = "name";
$proto37["m_columns"][] = "continent";
$proto37["m_columns"][] = "region";
$proto37["m_columns"][] = "surfacearea";
$proto37["m_columns"][] = "indepyear";
$proto37["m_columns"][] = "population";
$proto37["m_columns"][] = "lifeexpectancy";
$proto37["m_columns"][] = "gnp";
$proto37["m_columns"][] = "gnpold";
$proto37["m_columns"][] = "localname";
$proto37["m_columns"][] = "governmentform";
$proto37["m_columns"][] = "headofstate";
$proto37["m_columns"][] = "capital";
$proto37["m_columns"][] = "code2";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "eportal.country";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "eportal.country";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="eportal.country";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_country = createSqlQuery_country();


	
		;

															

$tdatacountry[".sqlquery"] = $queryData_country;



$tdatacountry[".hasEvents"] = false;

?>
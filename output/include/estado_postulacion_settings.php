<?php
$tdataestado_postulacion = array();
$tdataestado_postulacion[".searchableFields"] = array();
$tdataestado_postulacion[".ShortName"] = "estado_postulacion";
$tdataestado_postulacion[".OwnerID"] = "";
$tdataestado_postulacion[".OriginalTable"] = "bolsa_empleo.estado_postulacion";


$tdataestado_postulacion[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataestado_postulacion[".originalPagesByType"] = $tdataestado_postulacion[".pagesByType"];
$tdataestado_postulacion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataestado_postulacion[".originalPages"] = $tdataestado_postulacion[".pages"];
$tdataestado_postulacion[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataestado_postulacion[".originalDefaultPages"] = $tdataestado_postulacion[".defaultPages"];

//	field labels
$fieldLabelsestado_postulacion = array();
$fieldToolTipsestado_postulacion = array();
$pageTitlesestado_postulacion = array();
$placeHoldersestado_postulacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsestado_postulacion["Spanish"] = array();
	$fieldToolTipsestado_postulacion["Spanish"] = array();
	$placeHoldersestado_postulacion["Spanish"] = array();
	$pageTitlesestado_postulacion["Spanish"] = array();
	$fieldLabelsestado_postulacion["Spanish"]["id_estado_postulacion"] = "Id Estado Postulacion";
	$fieldToolTipsestado_postulacion["Spanish"]["id_estado_postulacion"] = "";
	$placeHoldersestado_postulacion["Spanish"]["id_estado_postulacion"] = "";
	$fieldLabelsestado_postulacion["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsestado_postulacion["Spanish"]["descripcion"] = "";
	$placeHoldersestado_postulacion["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsestado_postulacion["Spanish"]))
		$tdataestado_postulacion[".isUseToolTips"] = true;
}


	$tdataestado_postulacion[".NCSearch"] = true;



$tdataestado_postulacion[".shortTableName"] = "estado_postulacion";
$tdataestado_postulacion[".nSecOptions"] = 0;

$tdataestado_postulacion[".mainTableOwnerID"] = "";
$tdataestado_postulacion[".entityType"] = 0;
$tdataestado_postulacion[".connId"] = "eportal_at_192_168_70_170";


$tdataestado_postulacion[".strOriginalTableName"] = "bolsa_empleo.estado_postulacion";

	



$tdataestado_postulacion[".showAddInPopup"] = false;

$tdataestado_postulacion[".showEditInPopup"] = false;

$tdataestado_postulacion[".showViewInPopup"] = false;

$tdataestado_postulacion[".listAjax"] = false;
//	temporary
//$tdataestado_postulacion[".listAjax"] = false;

	$tdataestado_postulacion[".audit"] = false;

	$tdataestado_postulacion[".locking"] = false;


$pages = $tdataestado_postulacion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataestado_postulacion[".edit"] = true;
	$tdataestado_postulacion[".afterEditAction"] = 1;
	$tdataestado_postulacion[".closePopupAfterEdit"] = 1;
	$tdataestado_postulacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataestado_postulacion[".add"] = true;
$tdataestado_postulacion[".afterAddAction"] = 1;
$tdataestado_postulacion[".closePopupAfterAdd"] = 1;
$tdataestado_postulacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataestado_postulacion[".list"] = true;
}



$tdataestado_postulacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataestado_postulacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataestado_postulacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataestado_postulacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataestado_postulacion[".printFriendly"] = true;
}



$tdataestado_postulacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataestado_postulacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataestado_postulacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataestado_postulacion[".isUseAjaxSuggest"] = true;



																																																						

$tdataestado_postulacion[".ajaxCodeSnippetAdded"] = false;

$tdataestado_postulacion[".buttonsAdded"] = false;

$tdataestado_postulacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataestado_postulacion[".isUseTimeForSearch"] = false;


$tdataestado_postulacion[".badgeColor"] = "DB7093";


$tdataestado_postulacion[".allSearchFields"] = array();
$tdataestado_postulacion[".filterFields"] = array();
$tdataestado_postulacion[".requiredSearchFields"] = array();

$tdataestado_postulacion[".googleLikeFields"] = array();
$tdataestado_postulacion[".googleLikeFields"][] = "id_estado_postulacion";
$tdataestado_postulacion[".googleLikeFields"][] = "descripcion";



$tdataestado_postulacion[".tableType"] = "list";

$tdataestado_postulacion[".printerPageOrientation"] = 0;
$tdataestado_postulacion[".nPrinterPageScale"] = 100;

$tdataestado_postulacion[".nPrinterSplitRecords"] = 40;

$tdataestado_postulacion[".geocodingEnabled"] = false;










$tdataestado_postulacion[".pageSize"] = 20;

$tdataestado_postulacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataestado_postulacion[".strOrderBy"] = $tstrOrderBy;

$tdataestado_postulacion[".orderindexes"] = array();


$tdataestado_postulacion[".sqlHead"] = "SELECT id_estado_postulacion,  	descripcion";
$tdataestado_postulacion[".sqlFrom"] = "FROM bolsa_empleo.estado_postulacion";
$tdataestado_postulacion[".sqlWhereExpr"] = "";
$tdataestado_postulacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataestado_postulacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataestado_postulacion[".arrGroupsPerPage"] = $arrGPP;

$tdataestado_postulacion[".highlightSearchResults"] = true;

$tableKeysestado_postulacion = array();
$tableKeysestado_postulacion[] = "id_estado_postulacion";
$tdataestado_postulacion[".Keys"] = $tableKeysestado_postulacion;


$tdataestado_postulacion[".hideMobileList"] = array();




//	id_estado_postulacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_estado_postulacion";
	$fdata["GoodName"] = "id_estado_postulacion";
	$fdata["ownerTable"] = "bolsa_empleo.estado_postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_estado_postulacion","id_estado_postulacion");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_estado_postulacion";

		$fdata["sourceSingle"] = "id_estado_postulacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_estado_postulacion";

	
	
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


	$tdataestado_postulacion["id_estado_postulacion"] = $fdata;
		$tdataestado_postulacion[".searchableFields"][] = "id_estado_postulacion";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.estado_postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_estado_postulacion","descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

		$fdata["sourceSingle"] = "descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion";

	
	
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


	$tdataestado_postulacion["descripcion"] = $fdata;
		$tdataestado_postulacion[".searchableFields"][] = "descripcion";


$tables_data["bolsa_empleo.estado_postulacion"]=&$tdataestado_postulacion;
$field_labels["bolsa_empleo_estado_postulacion"] = &$fieldLabelsestado_postulacion;
$fieldToolTips["bolsa_empleo_estado_postulacion"] = &$fieldToolTipsestado_postulacion;
$placeHolders["bolsa_empleo_estado_postulacion"] = &$placeHoldersestado_postulacion;
$page_titles["bolsa_empleo_estado_postulacion"] = &$pageTitlesestado_postulacion;


changeTextControlsToDate( "bolsa_empleo.estado_postulacion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.estado_postulacion"] = array();
//	bolsa_empleo.postulacion
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.postulacion";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.postulacion";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "postulacion";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_postulacion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["masterKeys"][]="id_estado_postulacion";

				$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["detailKeys"][]="id_estado";
//	bolsa_empleo.postulacion_seleccionado
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.postulacion_seleccionado";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.postulacion";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "postulacion_seleccionado";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_postulacion_seleccionado");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["masterKeys"][]="id_estado_postulacion";

				$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["detailKeys"][]="id_estado";
//	bolsa_empleo.postulacion_convocado
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.postulacion_convocado";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.postulacion";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "postulacion_convocado";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_postulacion_convocado");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["masterKeys"][]="id_estado_postulacion";

				$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["detailKeys"][]="id_estado";
//	bolsa_empleo.postulacion_postulado
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.postulacion_postulado";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.postulacion";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "postulacion_postulado";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_postulacion_postulado");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["masterKeys"][]="id_estado_postulacion";

				$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["detailKeys"][]="id_estado";
//	bolsa_empleo.postulacion_insertado
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.postulacion_insertado";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.postulacion";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "postulacion_insertado";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_postulacion_insertado");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["masterKeys"][]="id_estado_postulacion";

				$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["detailKeys"][]="id_estado";
//	bolsa_empleo.postulacion_preseleccionado
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.postulacion_preseleccionado";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.postulacion";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "postulacion_preseleccionado";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_postulacion_preseleccionado");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["masterKeys"][]="id_estado_postulacion";

				$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.estado_postulacion"][$dIndex]["detailKeys"][]="id_estado";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.estado_postulacion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_estado_postulacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_estado_postulacion,  	descripcion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.estado_postulacion";
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
	"m_strName" => "id_estado_postulacion",
	"m_strTable" => "bolsa_empleo.estado_postulacion",
	"m_srcTableName" => "bolsa_empleo.estado_postulacion"
));

$proto6["m_sql"] = "id_estado_postulacion";
$proto6["m_srcTableName"] = "bolsa_empleo.estado_postulacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.estado_postulacion",
	"m_srcTableName" => "bolsa_empleo.estado_postulacion"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "bolsa_empleo.estado_postulacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.estado_postulacion";
$proto11["m_srcTableName"] = "bolsa_empleo.estado_postulacion";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_estado_postulacion";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.estado_postulacion";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.estado_postulacion";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.estado_postulacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_estado_postulacion = createSqlQuery_estado_postulacion();


	
		;

		

$tdataestado_postulacion[".sqlquery"] = $queryData_estado_postulacion;



$tdataestado_postulacion[".hasEvents"] = false;

?>
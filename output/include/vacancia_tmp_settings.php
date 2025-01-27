<?php
$tdatavacancia_tmp = array();
$tdatavacancia_tmp[".searchableFields"] = array();
$tdatavacancia_tmp[".ShortName"] = "vacancia_tmp";
$tdatavacancia_tmp[".OwnerID"] = "";
$tdatavacancia_tmp[".OriginalTable"] = "bolsa_empleo.vacancia_tmp";


$tdatavacancia_tmp[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatavacancia_tmp[".originalPagesByType"] = $tdatavacancia_tmp[".pagesByType"];
$tdatavacancia_tmp[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatavacancia_tmp[".originalPages"] = $tdatavacancia_tmp[".pages"];
$tdatavacancia_tmp[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatavacancia_tmp[".originalDefaultPages"] = $tdatavacancia_tmp[".defaultPages"];

//	field labels
$fieldLabelsvacancia_tmp = array();
$fieldToolTipsvacancia_tmp = array();
$pageTitlesvacancia_tmp = array();
$placeHoldersvacancia_tmp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvacancia_tmp["Spanish"] = array();
	$fieldToolTipsvacancia_tmp["Spanish"] = array();
	$placeHoldersvacancia_tmp["Spanish"] = array();
	$pageTitlesvacancia_tmp["Spanish"] = array();
	$fieldLabelsvacancia_tmp["Spanish"]["id_vacancias"] = "Id Vacancias";
	$fieldToolTipsvacancia_tmp["Spanish"]["id_vacancias"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["id_vacancias"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["fecha_creacion_vacancia"] = "Fecha Creacion Vacancia";
	$fieldToolTipsvacancia_tmp["Spanish"]["fecha_creacion_vacancia"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["fecha_creacion_vacancia"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["id_estado_vacancia"] = "Id Estado Vacancia";
	$fieldToolTipsvacancia_tmp["Spanish"]["id_estado_vacancia"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["id_estado_vacancia"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["fecha_expiracion_vacancia"] = "Fecha de expiración de la  vacancia";
	$fieldToolTipsvacancia_tmp["Spanish"]["fecha_expiracion_vacancia"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["fecha_expiracion_vacancia"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["cantidad_vacancia"] = "Cantidad de Vacancias";
	$fieldToolTipsvacancia_tmp["Spanish"]["cantidad_vacancia"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["cantidad_vacancia"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["fk_id_feria_empleo"] = "Feria de Empleo";
	$fieldToolTipsvacancia_tmp["Spanish"]["fk_id_feria_empleo"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["fk_id_feria_empleo"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["usuario"] = "Usuario";
	$fieldToolTipsvacancia_tmp["Spanish"]["usuario"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["usuario"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["fk_ocupacion_puesto"] = "Nombre del Puesto";
	$fieldToolTipsvacancia_tmp["Spanish"]["fk_ocupacion_puesto"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["fk_ocupacion_puesto"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["salario"] = "Remuneración base";
	$fieldToolTipsvacancia_tmp["Spanish"]["salario"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["salario"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["tipo_contrato"] = "Tipo de Contrato";
	$fieldToolTipsvacancia_tmp["Spanish"]["tipo_contrato"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["tipo_contrato"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["descripcion_puesto"] = "Descripción del Puesto";
	$fieldToolTipsvacancia_tmp["Spanish"]["descripcion_puesto"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["descripcion_puesto"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["id_rubro"] = "Rubro";
	$fieldToolTipsvacancia_tmp["Spanish"]["id_rubro"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["id_rubro"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["anos_experiencia_vacancia"] = "Años de Experiencia laboral Requerida";
	$fieldToolTipsvacancia_tmp["Spanish"]["anos_experiencia_vacancia"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["anos_experiencia_vacancia"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["meses_experiencia_vacancia"] = "Meses de Experiencia laboral Requerida";
	$fieldToolTipsvacancia_tmp["Spanish"]["meses_experiencia_vacancia"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["meses_experiencia_vacancia"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["horario_rotativo"] = "Horario Rotativo";
	$fieldToolTipsvacancia_tmp["Spanish"]["horario_rotativo"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["horario_rotativo"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["modalidad_trabajo"] = "Modalidad Trabajo";
	$fieldToolTipsvacancia_tmp["Spanish"]["modalidad_trabajo"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["modalidad_trabajo"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["descripcion_salario"] = "Otras remuneraciones";
	$fieldToolTipsvacancia_tmp["Spanish"]["descripcion_salario"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["descripcion_salario"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["id_empresa_sucursal"] = "Matriz- Sucursal";
	$fieldToolTipsvacancia_tmp["Spanish"]["id_empresa_sucursal"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["id_empresa_sucursal"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["id_cidudad"] = "Ciudad para el puesto vacante";
	$fieldToolTipsvacancia_tmp["Spanish"]["id_cidudad"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["id_cidudad"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["id_departamento"] = "Departamento para el puesto vacante ";
	$fieldToolTipsvacancia_tmp["Spanish"]["id_departamento"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["id_departamento"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["genero"] = "Sexo";
	$fieldToolTipsvacancia_tmp["Spanish"]["genero"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["genero"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["movilidad_propia"] = "Movilidad Propia";
	$fieldToolTipsvacancia_tmp["Spanish"]["movilidad_propia"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["movilidad_propia"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["tipo_movilidad"] = "Tipo de Movilidad";
	$fieldToolTipsvacancia_tmp["Spanish"]["tipo_movilidad"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["tipo_movilidad"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["id_registro_conducir"] = "Registro de Conducir";
	$fieldToolTipsvacancia_tmp["Spanish"]["id_registro_conducir"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["id_registro_conducir"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["discapacidad_aceptada"] = "Tipos de Discapacidad Aceptadas para el puesto";
	$fieldToolTipsvacancia_tmp["Spanish"]["discapacidad_aceptada"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["discapacidad_aceptada"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["nacionalidad"] = "Nacionalidad";
	$fieldToolTipsvacancia_tmp["Spanish"]["nacionalidad"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["nacionalidad"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["edad_minimo"] = "Edad Minima (18 años)";
	$fieldToolTipsvacancia_tmp["Spanish"]["edad_minimo"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["edad_minimo"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["requisitos_exclu_formacion"] = "Títulos y Certificados";
	$fieldToolTipsvacancia_tmp["Spanish"]["requisitos_exclu_formacion"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["requisitos_exclu_formacion"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["habilidades_conocimiento"] = "Habilidades & Conocimientos";
	$fieldToolTipsvacancia_tmp["Spanish"]["habilidades_conocimiento"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["habilidades_conocimiento"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["id_formacion_academica"] = "Nivel educativo mínimo requerido(Marcar el nivel educativo mínimo para desempeñar en el puesto)";
	$fieldToolTipsvacancia_tmp["Spanish"]["id_formacion_academica"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["id_formacion_academica"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["id_contacto_sucursal"] = "Contacto";
	$fieldToolTipsvacancia_tmp["Spanish"]["id_contacto_sucursal"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["id_contacto_sucursal"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["edad_maximo"] = "Edad Maximo(75 años)";
	$fieldToolTipsvacancia_tmp["Spanish"]["edad_maximo"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["edad_maximo"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["origen"] = "Origen";
	$fieldToolTipsvacancia_tmp["Spanish"]["origen"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["origen"] = "";
	$fieldLabelsvacancia_tmp["Spanish"]["tipo_remuneracion"] = "Tipo Remuneración";
	$fieldToolTipsvacancia_tmp["Spanish"]["tipo_remuneracion"] = "";
	$placeHoldersvacancia_tmp["Spanish"]["tipo_remuneracion"] = "";
	$pageTitlesvacancia_tmp["Spanish"]["add"] = "Oferta Laboral, Añadir nuevo";
	if (count($fieldToolTipsvacancia_tmp["Spanish"]))
		$tdatavacancia_tmp[".isUseToolTips"] = true;
}


	$tdatavacancia_tmp[".NCSearch"] = true;



$tdatavacancia_tmp[".shortTableName"] = "vacancia_tmp";
$tdatavacancia_tmp[".nSecOptions"] = 0;

$tdatavacancia_tmp[".mainTableOwnerID"] = "";
$tdatavacancia_tmp[".entityType"] = 0;
$tdatavacancia_tmp[".connId"] = "eportal_at_192_168_70_170";


$tdatavacancia_tmp[".strOriginalTableName"] = "bolsa_empleo.vacancia_tmp";

	



$tdatavacancia_tmp[".showAddInPopup"] = false;

$tdatavacancia_tmp[".showEditInPopup"] = false;

$tdatavacancia_tmp[".showViewInPopup"] = false;

$tdatavacancia_tmp[".listAjax"] = false;
//	temporary
//$tdatavacancia_tmp[".listAjax"] = false;

	$tdatavacancia_tmp[".audit"] = true;

	$tdatavacancia_tmp[".locking"] = false;


$pages = $tdatavacancia_tmp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavacancia_tmp[".edit"] = true;
	$tdatavacancia_tmp[".afterEditAction"] = 1;
	$tdatavacancia_tmp[".closePopupAfterEdit"] = 1;
	$tdatavacancia_tmp[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavacancia_tmp[".add"] = true;
$tdatavacancia_tmp[".afterAddAction"] = 1;
$tdatavacancia_tmp[".closePopupAfterAdd"] = 1;
$tdatavacancia_tmp[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavacancia_tmp[".list"] = true;
}



$tdatavacancia_tmp[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavacancia_tmp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavacancia_tmp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavacancia_tmp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavacancia_tmp[".printFriendly"] = true;
}



$tdatavacancia_tmp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavacancia_tmp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavacancia_tmp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavacancia_tmp[".isUseAjaxSuggest"] = true;



																																																						

$tdatavacancia_tmp[".ajaxCodeSnippetAdded"] = false;

$tdatavacancia_tmp[".buttonsAdded"] = false;

$tdatavacancia_tmp[".addPageEvents"] = true;

// use timepicker for search panel
$tdatavacancia_tmp[".isUseTimeForSearch"] = false;


$tdatavacancia_tmp[".badgeColor"] = "4169E1";


$tdatavacancia_tmp[".allSearchFields"] = array();
$tdatavacancia_tmp[".filterFields"] = array();
$tdatavacancia_tmp[".requiredSearchFields"] = array();

$tdatavacancia_tmp[".googleLikeFields"] = array();
$tdatavacancia_tmp[".googleLikeFields"][] = "id_vacancias";
$tdatavacancia_tmp[".googleLikeFields"][] = "fecha_creacion_vacancia";
$tdatavacancia_tmp[".googleLikeFields"][] = "id_estado_vacancia";
$tdatavacancia_tmp[".googleLikeFields"][] = "fecha_expiracion_vacancia";
$tdatavacancia_tmp[".googleLikeFields"][] = "cantidad_vacancia";
$tdatavacancia_tmp[".googleLikeFields"][] = "fk_id_feria_empleo";
$tdatavacancia_tmp[".googleLikeFields"][] = "usuario";
$tdatavacancia_tmp[".googleLikeFields"][] = "fk_ocupacion_puesto";
$tdatavacancia_tmp[".googleLikeFields"][] = "salario";
$tdatavacancia_tmp[".googleLikeFields"][] = "tipo_contrato";
$tdatavacancia_tmp[".googleLikeFields"][] = "descripcion_puesto";
$tdatavacancia_tmp[".googleLikeFields"][] = "id_rubro";
$tdatavacancia_tmp[".googleLikeFields"][] = "anos_experiencia_vacancia";
$tdatavacancia_tmp[".googleLikeFields"][] = "meses_experiencia_vacancia";
$tdatavacancia_tmp[".googleLikeFields"][] = "horario_rotativo";
$tdatavacancia_tmp[".googleLikeFields"][] = "modalidad_trabajo";
$tdatavacancia_tmp[".googleLikeFields"][] = "descripcion_salario";
$tdatavacancia_tmp[".googleLikeFields"][] = "id_empresa_sucursal";
$tdatavacancia_tmp[".googleLikeFields"][] = "id_cidudad";
$tdatavacancia_tmp[".googleLikeFields"][] = "id_departamento";
$tdatavacancia_tmp[".googleLikeFields"][] = "genero";
$tdatavacancia_tmp[".googleLikeFields"][] = "movilidad_propia";
$tdatavacancia_tmp[".googleLikeFields"][] = "tipo_movilidad";
$tdatavacancia_tmp[".googleLikeFields"][] = "id_registro_conducir";
$tdatavacancia_tmp[".googleLikeFields"][] = "discapacidad_aceptada";
$tdatavacancia_tmp[".googleLikeFields"][] = "nacionalidad";
$tdatavacancia_tmp[".googleLikeFields"][] = "edad_minimo";
$tdatavacancia_tmp[".googleLikeFields"][] = "requisitos_exclu_formacion";
$tdatavacancia_tmp[".googleLikeFields"][] = "habilidades_conocimiento";
$tdatavacancia_tmp[".googleLikeFields"][] = "id_formacion_academica";
$tdatavacancia_tmp[".googleLikeFields"][] = "id_contacto_sucursal";
$tdatavacancia_tmp[".googleLikeFields"][] = "edad_maximo";
$tdatavacancia_tmp[".googleLikeFields"][] = "origen";
$tdatavacancia_tmp[".googleLikeFields"][] = "tipo_remuneracion";



$tdatavacancia_tmp[".tableType"] = "list";

$tdatavacancia_tmp[".printerPageOrientation"] = 0;
$tdatavacancia_tmp[".nPrinterPageScale"] = 100;

$tdatavacancia_tmp[".nPrinterSplitRecords"] = 40;

$tdatavacancia_tmp[".geocodingEnabled"] = false;










$tdatavacancia_tmp[".pageSize"] = 20;

$tdatavacancia_tmp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavacancia_tmp[".strOrderBy"] = $tstrOrderBy;

$tdatavacancia_tmp[".orderindexes"] = array();


$tdatavacancia_tmp[".sqlHead"] = "SELECT id_vacancias,  	fecha_creacion_vacancia,  	id_estado_vacancia,  	fecha_expiracion_vacancia,  	cantidad_vacancia,  	fk_id_feria_empleo,  	usuario,  	fk_ocupacion_puesto,  	salario,  	tipo_contrato,  	descripcion_puesto,  	id_rubro,  	anos_experiencia_vacancia,  	meses_experiencia_vacancia,  	horario_rotativo,  	modalidad_trabajo,  	descripcion_salario,  	id_empresa_sucursal,  	id_cidudad,  	id_departamento,  	genero,  	movilidad_propia,  	tipo_movilidad,  	id_registro_conducir,  	discapacidad_aceptada,  	nacionalidad,  	edad_minimo,  	requisitos_exclu_formacion,  	habilidades_conocimiento,  	id_formacion_academica,  	id_contacto_sucursal,  	edad_maximo,  	origen,  	tipo_remuneracion";
$tdatavacancia_tmp[".sqlFrom"] = "FROM bolsa_empleo.vacancia_tmp";
$tdatavacancia_tmp[".sqlWhereExpr"] = "";
$tdatavacancia_tmp[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavacancia_tmp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavacancia_tmp[".arrGroupsPerPage"] = $arrGPP;

$tdatavacancia_tmp[".highlightSearchResults"] = true;

$tableKeysvacancia_tmp = array();
$tableKeysvacancia_tmp[] = "id_vacancias";
$tdatavacancia_tmp[".Keys"] = $tableKeysvacancia_tmp;


$tdatavacancia_tmp[".hideMobileList"] = array();




//	id_vacancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_vacancias";
	$fdata["GoodName"] = "id_vacancias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","id_vacancias");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_vacancias";

		$fdata["sourceSingle"] = "id_vacancias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_vacancias";

	
	
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


	$tdatavacancia_tmp["id_vacancias"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "id_vacancias";
//	fecha_creacion_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_creacion_vacancia";
	$fdata["GoodName"] = "fecha_creacion_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","fecha_creacion_vacancia");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_creacion_vacancia";

		$fdata["sourceSingle"] = "fecha_creacion_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_creacion_vacancia";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatavacancia_tmp["fecha_creacion_vacancia"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "fecha_creacion_vacancia";
//	id_estado_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_estado_vacancia";
	$fdata["GoodName"] = "id_estado_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","id_estado_vacancia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_estado_vacancia";

		$fdata["sourceSingle"] = "id_estado_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_estado_vacancia";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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


	$tdatavacancia_tmp["id_estado_vacancia"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "id_estado_vacancia";
//	fecha_expiracion_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_expiracion_vacancia";
	$fdata["GoodName"] = "fecha_expiracion_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","fecha_expiracion_vacancia");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_expiracion_vacancia";

		$fdata["sourceSingle"] = "fecha_expiracion_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_expiracion_vacancia";

	
	
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

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatavacancia_tmp["fecha_expiracion_vacancia"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "fecha_expiracion_vacancia";
//	cantidad_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cantidad_vacancia";
	$fdata["GoodName"] = "cantidad_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","cantidad_vacancia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cantidad_vacancia";

		$fdata["sourceSingle"] = "cantidad_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidad_vacancia";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");
				$edata["validateAs"]["regExp"] = "^(?!0\$)\\d+\$";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "Solo numeros naturales", "messageType" => "Text");
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


	$tdatavacancia_tmp["cantidad_vacancia"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "cantidad_vacancia";
//	fk_id_feria_empleo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fk_id_feria_empleo";
	$fdata["GoodName"] = "fk_id_feria_empleo";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","fk_id_feria_empleo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_feria_empleo";

		$fdata["sourceSingle"] = "fk_id_feria_empleo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_feria_empleo";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.feria_empleo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_feria_empleo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "nombre";

	
	
	
	

	
	
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


	$tdatavacancia_tmp["fk_id_feria_empleo"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "fk_id_feria_empleo";
//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","usuario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usuario";

		$fdata["sourceSingle"] = "usuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario";

	
	
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


	$tdatavacancia_tmp["usuario"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "usuario";
//	fk_ocupacion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fk_ocupacion_puesto";
	$fdata["GoodName"] = "fk_ocupacion_puesto";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","fk_ocupacion_puesto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_ocupacion_puesto";

		$fdata["sourceSingle"] = "fk_ocupacion_puesto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_ocupacion_puesto";

	
	
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

	$edata = array("EditFormat" => "Select2");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdatavacancia_tmp["fk_ocupacion_puesto"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "fk_ocupacion_puesto";
//	salario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "salario";
	$fdata["GoodName"] = "salario";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","salario");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "salario";

		$fdata["sourceSingle"] = "salario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "salario";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");
				$edata["validateAs"]["regExp"] = "^(0|[1-9][0-9]{0,12})\$";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "solo numeros", "messageType" => "Text");
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


	$tdatavacancia_tmp["salario"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "salario";
//	tipo_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "tipo_contrato";
	$fdata["GoodName"] = "tipo_contrato";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","tipo_contrato");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tipo_contrato";

		$fdata["sourceSingle"] = "tipo_contrato";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_contrato";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.tipo_contrato";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_tipo_contrato";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "tipo_contrato";

				$edata["LookupWhere"] = "id_tipo_contrato >11";


	
	$edata["LookupOrderBy"] = "tipo_contrato";

	
	
	
	

	
	
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


	$tdatavacancia_tmp["tipo_contrato"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "tipo_contrato";
//	descripcion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "descripcion_puesto";
	$fdata["GoodName"] = "descripcion_puesto";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","descripcion_puesto");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "descripcion_puesto";

		$fdata["sourceSingle"] = "descripcion_puesto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_puesto";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatavacancia_tmp["descripcion_puesto"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "descripcion_puesto";
//	id_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "id_rubro";
	$fdata["GoodName"] = "id_rubro";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","id_rubro");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_rubro";

		$fdata["sourceSingle"] = "id_rubro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_rubro";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.empresas_bolsa_sucursales5";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_activ_econ";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "descripcion";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_empresa_sucursal", "lookup" => "id" );

	
	

	
	
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


	$tdatavacancia_tmp["id_rubro"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "id_rubro";
//	anos_experiencia_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "anos_experiencia_vacancia";
	$fdata["GoodName"] = "anos_experiencia_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","anos_experiencia_vacancia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "anos_experiencia_vacancia";

		$fdata["sourceSingle"] = "anos_experiencia_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anos_experiencia_vacancia";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "0";
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "7";
	$edata["LookupValues"][] = "8";
	$edata["LookupValues"][] = "9";
	$edata["LookupValues"][] = "10";
	$edata["LookupValues"][] = "11";
	$edata["LookupValues"][] = "12";
	$edata["LookupValues"][] = "13";
	$edata["LookupValues"][] = "14";
	$edata["LookupValues"][] = "15";
	$edata["LookupValues"][] = "16";
	$edata["LookupValues"][] = "17";
	$edata["LookupValues"][] = "18";
	$edata["LookupValues"][] = "19";
	$edata["LookupValues"][] = "20";
	$edata["LookupValues"][] = "21";
	$edata["LookupValues"][] = "22";
	$edata["LookupValues"][] = "23";
	$edata["LookupValues"][] = "24";
	$edata["LookupValues"][] = "25";
	$edata["LookupValues"][] = "26";
	$edata["LookupValues"][] = "27";
	$edata["LookupValues"][] = "28";
	$edata["LookupValues"][] = "29";
	$edata["LookupValues"][] = "30";
	$edata["LookupValues"][] = "31";
	$edata["LookupValues"][] = "32";
	$edata["LookupValues"][] = "33";
	$edata["LookupValues"][] = "34";
	$edata["LookupValues"][] = "35";
	$edata["LookupValues"][] = "36";
	$edata["LookupValues"][] = "37";
	$edata["LookupValues"][] = "38";
	$edata["LookupValues"][] = "39";
	$edata["LookupValues"][] = "40";
	$edata["LookupValues"][] = "41";
	$edata["LookupValues"][] = "42";
	$edata["LookupValues"][] = "43";
	$edata["LookupValues"][] = "44";
	$edata["LookupValues"][] = "45";
	$edata["LookupValues"][] = "46";
	$edata["LookupValues"][] = "47";
	$edata["LookupValues"][] = "48";
	$edata["LookupValues"][] = "49";
	$edata["LookupValues"][] = "50";

	
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


	$tdatavacancia_tmp["anos_experiencia_vacancia"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "anos_experiencia_vacancia";
//	meses_experiencia_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "meses_experiencia_vacancia";
	$fdata["GoodName"] = "meses_experiencia_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","meses_experiencia_vacancia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "meses_experiencia_vacancia";

		$fdata["sourceSingle"] = "meses_experiencia_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "meses_experiencia_vacancia";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "0";
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "7";
	$edata["LookupValues"][] = "8";
	$edata["LookupValues"][] = "9";
	$edata["LookupValues"][] = "10";
	$edata["LookupValues"][] = "11";

	
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


	$tdatavacancia_tmp["meses_experiencia_vacancia"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "meses_experiencia_vacancia";
//	horario_rotativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "horario_rotativo";
	$fdata["GoodName"] = "horario_rotativo";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","horario_rotativo");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "horario_rotativo";

		$fdata["sourceSingle"] = "horario_rotativo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "horario_rotativo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Toggle");

	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatavacancia_tmp["horario_rotativo"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "horario_rotativo";
//	modalidad_trabajo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "modalidad_trabajo";
	$fdata["GoodName"] = "modalidad_trabajo";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","modalidad_trabajo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "modalidad_trabajo";

		$fdata["sourceSingle"] = "modalidad_trabajo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "modalidad_trabajo";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.modalidad_trabajo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_modalidad_trabajo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "tipo_modalidad";

	

	
	$edata["LookupOrderBy"] = "tipo_modalidad";

	
	
	
	

	
	
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


	$tdatavacancia_tmp["modalidad_trabajo"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "modalidad_trabajo";
//	descripcion_salario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "descripcion_salario";
	$fdata["GoodName"] = "descripcion_salario";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","descripcion_salario");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "descripcion_salario";

		$fdata["sourceSingle"] = "descripcion_salario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_salario";

	
	
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

	$edata = array("EditFormat" => "Select2");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdatavacancia_tmp["descripcion_salario"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "descripcion_salario";
//	id_empresa_sucursal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "id_empresa_sucursal";
	$fdata["GoodName"] = "id_empresa_sucursal";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","id_empresa_sucursal");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_empresa_sucursal";

		$fdata["sourceSingle"] = "id_empresa_sucursal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_empresa_sucursal";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.empresas_bolsa_sucursales4";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ruc||' - '||nro_patronal|| '-  ' ||legal|| '-  ' ||direccion||'- '||descripcion";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "legal";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_rubro";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_contacto_sucursal";

	
	
	
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


	$tdatavacancia_tmp["id_empresa_sucursal"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "id_empresa_sucursal";
//	id_cidudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "id_cidudad";
	$fdata["GoodName"] = "id_cidudad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","id_cidudad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cidudad";

		$fdata["sourceSingle"] = "id_cidudad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cidudad";

	
	
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
	$edata["LookupTable"] = "eportal.city";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "name";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_departamento", "lookup" => "distrito_id" );

	
	

	
	
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


	$tdatavacancia_tmp["id_cidudad"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "id_cidudad";
//	id_departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "id_departamento";
	$fdata["GoodName"] = "id_departamento";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","id_departamento");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_departamento";

		$fdata["sourceSingle"] = "id_departamento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_departamento";

	
	
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
	$edata["LookupTable"] = "eportal.distritos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_cidudad";

	
	
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


	$tdatavacancia_tmp["id_departamento"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "id_departamento";
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","genero");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "genero";

		$fdata["sourceSingle"] = "genero";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "genero";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.bolsa_sexo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "bolsa_empleo_sexo_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "bolsa_empleo_sexo_id";

	
	
	
	

	
	
	
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


	$tdatavacancia_tmp["genero"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "genero";
//	movilidad_propia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "movilidad_propia";
	$fdata["GoodName"] = "movilidad_propia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","movilidad_propia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "movilidad_propia";

		$fdata["sourceSingle"] = "movilidad_propia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "movilidad_propia";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "No";
	$edata["LookupValues"][] = "Si";

	
	
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


	$tdatavacancia_tmp["movilidad_propia"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "movilidad_propia";
//	tipo_movilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "tipo_movilidad";
	$fdata["GoodName"] = "tipo_movilidad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","tipo_movilidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_movilidad";

		$fdata["sourceSingle"] = "tipo_movilidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_movilidad";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.tipo_movilidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_tipo_movilidad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "descripcion";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
		$edata["Multiselect"] = true;

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


	$tdatavacancia_tmp["tipo_movilidad"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "tipo_movilidad";
//	id_registro_conducir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "id_registro_conducir";
	$fdata["GoodName"] = "id_registro_conducir";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","id_registro_conducir");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_registro_conducir";

		$fdata["sourceSingle"] = "id_registro_conducir";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_registro_conducir";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.tipo_registro_conducir";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id_registro_conducir";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "id_registro_conducir";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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


	$tdatavacancia_tmp["id_registro_conducir"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "id_registro_conducir";
//	discapacidad_aceptada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "discapacidad_aceptada";
	$fdata["GoodName"] = "discapacidad_aceptada";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","discapacidad_aceptada");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "discapacidad_aceptada";

		$fdata["sourceSingle"] = "discapacidad_aceptada";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "discapacidad_aceptada";

	
	
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
	$edata["LookupTable"] = "eportal.persons_discap_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "persons_discap_types_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "persons_discap_types_id";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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


	$tdatavacancia_tmp["discapacidad_aceptada"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "discapacidad_aceptada";
//	nacionalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "nacionalidad";
	$fdata["GoodName"] = "nacionalidad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","nacionalidad");
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
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


	$tdatavacancia_tmp["nacionalidad"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "nacionalidad";
//	edad_minimo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "edad_minimo";
	$fdata["GoodName"] = "edad_minimo";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","edad_minimo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "edad_minimo";

		$fdata["sourceSingle"] = "edad_minimo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edad_minimo";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");
				$edata["validateAs"]["regExp"] = "^(1[8-9]|[2-6]\\d|7[0-5])\$";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "Debe ser mayor o igual a 18 años", "messageType" => "Text");
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


	$tdatavacancia_tmp["edad_minimo"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "edad_minimo";
//	requisitos_exclu_formacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "requisitos_exclu_formacion";
	$fdata["GoodName"] = "requisitos_exclu_formacion";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","requisitos_exclu_formacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "requisitos_exclu_formacion";

		$fdata["sourceSingle"] = "requisitos_exclu_formacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "requisitos_exclu_formacion";

	
	
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

	$edata = array("EditFormat" => "Select2");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdatavacancia_tmp["requisitos_exclu_formacion"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "requisitos_exclu_formacion";
//	habilidades_conocimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "habilidades_conocimiento";
	$fdata["GoodName"] = "habilidades_conocimiento";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","habilidades_conocimiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "habilidades_conocimiento";

		$fdata["sourceSingle"] = "habilidades_conocimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "habilidades_conocimiento";

	
	
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

	$edata = array("EditFormat" => "Select2");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdatavacancia_tmp["habilidades_conocimiento"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "habilidades_conocimiento";
//	id_formacion_academica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "id_formacion_academica";
	$fdata["GoodName"] = "id_formacion_academica";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","id_formacion_academica");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_formacion_academica";

		$fdata["sourceSingle"] = "id_formacion_academica";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_formacion_academica";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.cvc_niveles_academicos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "cvc_id_niveles_academicos";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "descripcion";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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


	$tdatavacancia_tmp["id_formacion_academica"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "id_formacion_academica";
//	id_contacto_sucursal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "id_contacto_sucursal";
	$fdata["GoodName"] = "id_contacto_sucursal";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","id_contacto_sucursal");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_contacto_sucursal";

		$fdata["sourceSingle"] = "id_contacto_sucursal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_contacto_sucursal";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.empresa_bolsa_contactos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "empresa_bolsa_id_contacto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre||' - '||telefono";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_empresa_sucursal", "lookup" => "empresas_bolsa_sucursales_id" );

		$edata["AllowToAdd"] = true;
		
	

	
	
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


	$tdatavacancia_tmp["id_contacto_sucursal"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "id_contacto_sucursal";
//	edad_maximo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "edad_maximo";
	$fdata["GoodName"] = "edad_maximo";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","edad_maximo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "edad_maximo";

		$fdata["sourceSingle"] = "edad_maximo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edad_maximo";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");
				$edata["validateAs"]["regExp"] = "^(1[8-9]|[2-6]\\d|7[0-5])\$";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "edad mayor o igual a 18 años y menor o igual a 75 años", "messageType" => "Text");
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


	$tdatavacancia_tmp["edad_maximo"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "edad_maximo";
//	origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "origen";
	$fdata["GoodName"] = "origen";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","origen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "origen";

		$fdata["sourceSingle"] = "origen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "origen";

	
	
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


	$tdatavacancia_tmp["origen"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "origen";
//	tipo_remuneracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "tipo_remuneracion";
	$fdata["GoodName"] = "tipo_remuneracion";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_tmp";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_tmp","tipo_remuneracion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tipo_remuneracion";

		$fdata["sourceSingle"] = "tipo_remuneracion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_remuneracion";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.tipo_remuneracion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_tipo_remuneracion";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

				$edata["LookupWhere"] = "id_tipo_remuneracion>6 or id_tipo_remuneracion<=1";


	
	$edata["LookupOrderBy"] = "descripcion";

	
	
	
	

	
	
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


	$tdatavacancia_tmp["tipo_remuneracion"] = $fdata;
		$tdatavacancia_tmp[".searchableFields"][] = "tipo_remuneracion";


$tables_data["bolsa_empleo.vacancia_tmp"]=&$tdatavacancia_tmp;
$field_labels["bolsa_empleo_vacancia_tmp"] = &$fieldLabelsvacancia_tmp;
$fieldToolTips["bolsa_empleo_vacancia_tmp"] = &$fieldToolTipsvacancia_tmp;
$placeHolders["bolsa_empleo_vacancia_tmp"] = &$placeHoldersvacancia_tmp;
$page_titles["bolsa_empleo_vacancia_tmp"] = &$pageTitlesvacancia_tmp;


changeTextControlsToDate( "bolsa_empleo.vacancia_tmp" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.vacancia_tmp"] = array();
//	bolsa_empleo.vacancia_requisito_idioma_tmp
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.vacancia_requisito_idioma_tmp";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.vacancia_requisito_idioma_tmp";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vacancia_requisito_idioma_tmp";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_vacancia_requisito_idioma_tmp");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.vacancia_tmp"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.vacancia_tmp"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.vacancia_tmp"][$dIndex]["masterKeys"][]="id_vacancias";

				$detailsTablesData["bolsa_empleo.vacancia_tmp"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.vacancia_tmp"][$dIndex]["detailKeys"][]="id_vacancia";
//	bolsa_empleo.vacancia_requisito_programa_tmp
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.vacancia_requisito_programa_tmp";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.vacancia_requisito_programa_tmp";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vacancia_requisito_programa_tmp";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_vacancia_requisito_programa_tmp");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.vacancia_tmp"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.vacancia_tmp"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.vacancia_tmp"][$dIndex]["masterKeys"][]="id_vacancias";

				$detailsTablesData["bolsa_empleo.vacancia_tmp"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.vacancia_tmp"][$dIndex]["detailKeys"][]="fk_id_vacancia";
//	bolsa_empleo.vacancia_dias_horas_tmp
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.vacancia_dias_horas_tmp";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.vacancia_dias_horas_tmp";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vacancia_dias_horas_tmp";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_vacancia_dias_horas_tmp");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.vacancia_tmp"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.vacancia_tmp"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.vacancia_tmp"][$dIndex]["masterKeys"][]="id_vacancias";

				$detailsTablesData["bolsa_empleo.vacancia_tmp"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.vacancia_tmp"][$dIndex]["detailKeys"][]="id_vacancias";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.vacancia_tmp"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vacancia_tmp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_vacancias,  	fecha_creacion_vacancia,  	id_estado_vacancia,  	fecha_expiracion_vacancia,  	cantidad_vacancia,  	fk_id_feria_empleo,  	usuario,  	fk_ocupacion_puesto,  	salario,  	tipo_contrato,  	descripcion_puesto,  	id_rubro,  	anos_experiencia_vacancia,  	meses_experiencia_vacancia,  	horario_rotativo,  	modalidad_trabajo,  	descripcion_salario,  	id_empresa_sucursal,  	id_cidudad,  	id_departamento,  	genero,  	movilidad_propia,  	tipo_movilidad,  	id_registro_conducir,  	discapacidad_aceptada,  	nacionalidad,  	edad_minimo,  	requisitos_exclu_formacion,  	habilidades_conocimiento,  	id_formacion_academica,  	id_contacto_sucursal,  	edad_maximo,  	origen,  	tipo_remuneracion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vacancia_tmp";
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
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto6["m_sql"] = "id_vacancias";
$proto6["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_creacion_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto8["m_sql"] = "fecha_creacion_vacancia";
$proto8["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_estado_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto10["m_sql"] = "id_estado_vacancia";
$proto10["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_expiracion_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto12["m_sql"] = "fecha_expiracion_vacancia";
$proto12["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto14["m_sql"] = "cantidad_vacancia";
$proto14["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_feria_empleo",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto16["m_sql"] = "fk_id_feria_empleo";
$proto16["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto18["m_sql"] = "usuario";
$proto18["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_ocupacion_puesto",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto20["m_sql"] = "fk_ocupacion_puesto";
$proto20["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "salario",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto22["m_sql"] = "salario";
$proto22["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_contrato",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto24["m_sql"] = "tipo_contrato";
$proto24["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_puesto",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto26["m_sql"] = "descripcion_puesto";
$proto26["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "id_rubro",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto28["m_sql"] = "id_rubro";
$proto28["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "anos_experiencia_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto30["m_sql"] = "anos_experiencia_vacancia";
$proto30["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "meses_experiencia_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto32["m_sql"] = "meses_experiencia_vacancia";
$proto32["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "horario_rotativo",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto34["m_sql"] = "horario_rotativo";
$proto34["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "modalidad_trabajo",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto36["m_sql"] = "modalidad_trabajo";
$proto36["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_salario",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto38["m_sql"] = "descripcion_salario";
$proto38["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "id_empresa_sucursal",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto40["m_sql"] = "id_empresa_sucursal";
$proto40["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cidudad",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto42["m_sql"] = "id_cidudad";
$proto42["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "id_departamento",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto44["m_sql"] = "id_departamento";
$proto44["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto46["m_sql"] = "genero";
$proto46["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "movilidad_propia",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto48["m_sql"] = "movilidad_propia";
$proto48["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_movilidad",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto50["m_sql"] = "tipo_movilidad";
$proto50["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "id_registro_conducir",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto52["m_sql"] = "id_registro_conducir";
$proto52["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "discapacidad_aceptada",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto54["m_sql"] = "discapacidad_aceptada";
$proto54["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto56["m_sql"] = "nacionalidad";
$proto56["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_minimo",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto58["m_sql"] = "edad_minimo";
$proto58["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "requisitos_exclu_formacion",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto60["m_sql"] = "requisitos_exclu_formacion";
$proto60["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "habilidades_conocimiento",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto62["m_sql"] = "habilidades_conocimiento";
$proto62["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "id_formacion_academica",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto64["m_sql"] = "id_formacion_academica";
$proto64["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "id_contacto_sucursal",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto66["m_sql"] = "id_contacto_sucursal";
$proto66["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_maximo",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto68["m_sql"] = "edad_maximo";
$proto68["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "origen",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto70["m_sql"] = "origen";
$proto70["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_remuneracion",
	"m_strTable" => "bolsa_empleo.vacancia_tmp",
	"m_srcTableName" => "bolsa_empleo.vacancia_tmp"
));

$proto72["m_sql"] = "tipo_remuneracion";
$proto72["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto74=array();
$proto74["m_link"] = "SQLL_MAIN";
			$proto75=array();
$proto75["m_strName"] = "bolsa_empleo.vacancia_tmp";
$proto75["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto75["m_columns"] = array();
$proto75["m_columns"][] = "id_vacancias";
$proto75["m_columns"][] = "fecha_creacion_vacancia";
$proto75["m_columns"][] = "id_estado_vacancia";
$proto75["m_columns"][] = "fecha_expiracion_vacancia";
$proto75["m_columns"][] = "cantidad_vacancia";
$proto75["m_columns"][] = "fk_id_feria_empleo";
$proto75["m_columns"][] = "usuario";
$proto75["m_columns"][] = "fk_ocupacion_puesto";
$proto75["m_columns"][] = "salario";
$proto75["m_columns"][] = "tipo_contrato";
$proto75["m_columns"][] = "descripcion_puesto";
$proto75["m_columns"][] = "id_rubro";
$proto75["m_columns"][] = "anos_experiencia_vacancia";
$proto75["m_columns"][] = "meses_experiencia_vacancia";
$proto75["m_columns"][] = "horario_rotativo";
$proto75["m_columns"][] = "modalidad_trabajo";
$proto75["m_columns"][] = "descripcion_salario";
$proto75["m_columns"][] = "id_empresa_sucursal";
$proto75["m_columns"][] = "id_cidudad";
$proto75["m_columns"][] = "id_departamento";
$proto75["m_columns"][] = "genero";
$proto75["m_columns"][] = "movilidad_propia";
$proto75["m_columns"][] = "tipo_movilidad";
$proto75["m_columns"][] = "id_registro_conducir";
$proto75["m_columns"][] = "discapacidad_aceptada";
$proto75["m_columns"][] = "nacionalidad";
$proto75["m_columns"][] = "edad_minimo";
$proto75["m_columns"][] = "requisitos_exclu_formacion";
$proto75["m_columns"][] = "habilidades_conocimiento";
$proto75["m_columns"][] = "id_formacion_academica";
$proto75["m_columns"][] = "id_contacto_sucursal";
$proto75["m_columns"][] = "edad_maximo";
$proto75["m_columns"][] = "origen";
$proto75["m_columns"][] = "tipo_remuneracion";
$obj = new SQLTable($proto75);

$proto74["m_table"] = $obj;
$proto74["m_sql"] = "bolsa_empleo.vacancia_tmp";
$proto74["m_alias"] = "";
$proto74["m_srcTableName"] = "bolsa_empleo.vacancia_tmp";
$proto76=array();
$proto76["m_sql"] = "";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

$proto74["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto74);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.vacancia_tmp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vacancia_tmp = createSqlQuery_vacancia_tmp();


	
		;

																																		

$tdatavacancia_tmp[".sqlquery"] = $queryData_vacancia_tmp;



include_once(getabspath("include/vacancia_tmp_events.php"));
$tdatavacancia_tmp[".hasEvents"] = true;

?>
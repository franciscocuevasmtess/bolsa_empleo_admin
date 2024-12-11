<?php
$tdatacerrar_vacancia = array();
$tdatacerrar_vacancia[".searchableFields"] = array();
$tdatacerrar_vacancia[".ShortName"] = "cerrar_vacancia";
$tdatacerrar_vacancia[".OwnerID"] = "";
$tdatacerrar_vacancia[".OriginalTable"] = "bolsa_empleo.vacancia";


$tdatacerrar_vacancia[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacerrar_vacancia[".originalPagesByType"] = $tdatacerrar_vacancia[".pagesByType"];
$tdatacerrar_vacancia[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacerrar_vacancia[".originalPages"] = $tdatacerrar_vacancia[".pages"];
$tdatacerrar_vacancia[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacerrar_vacancia[".originalDefaultPages"] = $tdatacerrar_vacancia[".defaultPages"];

//	field labels
$fieldLabelscerrar_vacancia = array();
$fieldToolTipscerrar_vacancia = array();
$pageTitlescerrar_vacancia = array();
$placeHolderscerrar_vacancia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscerrar_vacancia["Spanish"] = array();
	$fieldToolTipscerrar_vacancia["Spanish"] = array();
	$placeHolderscerrar_vacancia["Spanish"] = array();
	$pageTitlescerrar_vacancia["Spanish"] = array();
	$fieldLabelscerrar_vacancia["Spanish"]["id_vacancias"] = "<i class=\"bi bi-upc-scan\"></i>";
	$fieldToolTipscerrar_vacancia["Spanish"]["id_vacancias"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["id_vacancias"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["fecha_creacion_vacancia"] = "Publicado el ";
	$fieldToolTipscerrar_vacancia["Spanish"]["fecha_creacion_vacancia"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["fecha_creacion_vacancia"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["id_estado_vacancia"] = "Id Estado Vacancia";
	$fieldToolTipscerrar_vacancia["Spanish"]["id_estado_vacancia"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["id_estado_vacancia"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["fecha_expiracion_vacancia"] = "Fecha de Expiración de Vacancia";
	$fieldToolTipscerrar_vacancia["Spanish"]["fecha_expiracion_vacancia"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["fecha_expiracion_vacancia"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["cantidad_vacancia"] = "Cantidad de Puestos";
	$fieldToolTipscerrar_vacancia["Spanish"]["cantidad_vacancia"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["cantidad_vacancia"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipscerrar_vacancia["Spanish"]["descripcion"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["descripcion"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["salario"] = "Salario";
	$fieldToolTipscerrar_vacancia["Spanish"]["salario"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["salario"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["id_empresa_sucursal"] = "Matriz - Sucursal";
	$fieldToolTipscerrar_vacancia["Spanish"]["id_empresa_sucursal"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["id_empresa_sucursal"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["id_contacto_sucursal"] = "Contacto";
	$fieldToolTipscerrar_vacancia["Spanish"]["id_contacto_sucursal"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["id_contacto_sucursal"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["nombre_puesto"] = "Nombre Puesto";
	$fieldToolTipscerrar_vacancia["Spanish"]["nombre_puesto"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["nombre_puesto"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["id_rubro"] = "Rubro";
	$fieldToolTipscerrar_vacancia["Spanish"]["id_rubro"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["id_rubro"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["id_cidudad"] = "Ciudad";
	$fieldToolTipscerrar_vacancia["Spanish"]["id_cidudad"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["id_cidudad"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["id_departamento"] = "Departamento";
	$fieldToolTipscerrar_vacancia["Spanish"]["id_departamento"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["id_departamento"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["tipo_contrato"] = "Tipo de Contrato";
	$fieldToolTipscerrar_vacancia["Spanish"]["tipo_contrato"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["tipo_contrato"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["documentos"] = "Documentos";
	$fieldToolTipscerrar_vacancia["Spanish"]["documentos"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["documentos"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["nacionalidad"] = "Nacionalidad";
	$fieldToolTipscerrar_vacancia["Spanish"]["nacionalidad"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["nacionalidad"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["genero"] = "Sexo";
	$fieldToolTipscerrar_vacancia["Spanish"]["genero"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["genero"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["id_formacion_academica"] = "Formación Académica";
	$fieldToolTipscerrar_vacancia["Spanish"]["id_formacion_academica"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["id_formacion_academica"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["movilidad_propia"] = "Movilidad Propia";
	$fieldToolTipscerrar_vacancia["Spanish"]["movilidad_propia"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["movilidad_propia"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["tipo_movilidad"] = "Tipo de Movilidad";
	$fieldToolTipscerrar_vacancia["Spanish"]["tipo_movilidad"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["tipo_movilidad"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["id_registro_conducir"] = "Registro de Conducir";
	$fieldToolTipscerrar_vacancia["Spanish"]["id_registro_conducir"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["id_registro_conducir"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["discapacidad_aceptada"] = "Tipos de Discapacidad Aceptadas para el puesto";
	$fieldToolTipscerrar_vacancia["Spanish"]["discapacidad_aceptada"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["discapacidad_aceptada"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["edad_rango_bajo"] = "Edad Rango Bajo";
	$fieldToolTipscerrar_vacancia["Spanish"]["edad_rango_bajo"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["edad_rango_bajo"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["edad_rango_alto"] = "Edad Rango Alto";
	$fieldToolTipscerrar_vacancia["Spanish"]["edad_rango_alto"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["edad_rango_alto"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["descripcion_puesto"] = "Descripción del Puesto";
	$fieldToolTipscerrar_vacancia["Spanish"]["descripcion_puesto"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["descripcion_puesto"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["requisitos_exclu_formacion"] = "Requisitos Excluyentes de Formación";
	$fieldToolTipscerrar_vacancia["Spanish"]["requisitos_exclu_formacion"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["requisitos_exclu_formacion"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["habilidades_conocimiento"] = "Habilidades & Conocimientos";
	$fieldToolTipscerrar_vacancia["Spanish"]["habilidades_conocimiento"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["habilidades_conocimiento"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["anos_experiencia_vacancia"] = "Años de Experiencia laboral  Requerida";
	$fieldToolTipscerrar_vacancia["Spanish"]["anos_experiencia_vacancia"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["anos_experiencia_vacancia"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["ruc"] = "Ruc";
	$fieldToolTipscerrar_vacancia["Spanish"]["ruc"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["ruc"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["id_vacancia_requisito"] = "Id Vacancia Requisito";
	$fieldToolTipscerrar_vacancia["Spanish"]["id_vacancia_requisito"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["id_vacancia_requisito"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["legal"] = "Legal";
	$fieldToolTipscerrar_vacancia["Spanish"]["legal"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["legal"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["salario_final"] = "Salario";
	$fieldToolTipscerrar_vacancia["Spanish"]["salario_final"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["salario_final"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["fk_ocupacion_puesto"] = "Nombre del Puesto";
	$fieldToolTipscerrar_vacancia["Spanish"]["fk_ocupacion_puesto"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["fk_ocupacion_puesto"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["meses_experiencia_vacancia"] = "Meses de Experiencia laboral  Requerida";
	$fieldToolTipscerrar_vacancia["Spanish"]["meses_experiencia_vacancia"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["meses_experiencia_vacancia"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["horario_rotativo"] = "Horario rotativo";
	$fieldToolTipscerrar_vacancia["Spanish"]["horario_rotativo"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["horario_rotativo"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["modalidad_trabajo"] = "Modalidad Trabajo";
	$fieldToolTipscerrar_vacancia["Spanish"]["modalidad_trabajo"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["modalidad_trabajo"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["Latitude"] = "Latitude";
	$fieldToolTipscerrar_vacancia["Spanish"]["Latitude"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["Latitude"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["Longitude"] = "Longitude";
	$fieldToolTipscerrar_vacancia["Spanish"]["Longitude"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["Longitude"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["Lat"] = "Lat";
	$fieldToolTipscerrar_vacancia["Spanish"]["Lat"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["Lat"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["Lng"] = "Lng";
	$fieldToolTipscerrar_vacancia["Spanish"]["Lng"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["Lng"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["geolocation"] = "Geolocation";
	$fieldToolTipscerrar_vacancia["Spanish"]["geolocation"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["geolocation"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["map"] = "Map";
	$fieldToolTipscerrar_vacancia["Spanish"]["map"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["map"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["descripcion_salario"] = "Descripcion Salario";
	$fieldToolTipscerrar_vacancia["Spanish"]["descripcion_salario"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["descripcion_salario"] = "";
	$fieldLabelscerrar_vacancia["Spanish"]["salario_descripcion"] = "Salario Descripcion";
	$fieldToolTipscerrar_vacancia["Spanish"]["salario_descripcion"] = "";
	$placeHolderscerrar_vacancia["Spanish"]["salario_descripcion"] = "";
	if (count($fieldToolTipscerrar_vacancia["Spanish"]))
		$tdatacerrar_vacancia[".isUseToolTips"] = true;
}


	$tdatacerrar_vacancia[".NCSearch"] = true;



$tdatacerrar_vacancia[".shortTableName"] = "cerrar_vacancia";
$tdatacerrar_vacancia[".nSecOptions"] = 0;

$tdatacerrar_vacancia[".mainTableOwnerID"] = "";
$tdatacerrar_vacancia[".entityType"] = 1;
$tdatacerrar_vacancia[".connId"] = "eportal_at_192_168_70_170";


$tdatacerrar_vacancia[".strOriginalTableName"] = "bolsa_empleo.vacancia";

	



$tdatacerrar_vacancia[".showAddInPopup"] = false;

$tdatacerrar_vacancia[".showEditInPopup"] = false;

$tdatacerrar_vacancia[".showViewInPopup"] = false;

$tdatacerrar_vacancia[".listAjax"] = false;
//	temporary
//$tdatacerrar_vacancia[".listAjax"] = false;

	$tdatacerrar_vacancia[".audit"] = true;

	$tdatacerrar_vacancia[".locking"] = false;


$pages = $tdatacerrar_vacancia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacerrar_vacancia[".edit"] = true;
	$tdatacerrar_vacancia[".afterEditAction"] = 1;
	$tdatacerrar_vacancia[".closePopupAfterEdit"] = 1;
	$tdatacerrar_vacancia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacerrar_vacancia[".add"] = true;
$tdatacerrar_vacancia[".afterAddAction"] = 1;
$tdatacerrar_vacancia[".closePopupAfterAdd"] = 1;
$tdatacerrar_vacancia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacerrar_vacancia[".list"] = true;
}



$tdatacerrar_vacancia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacerrar_vacancia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacerrar_vacancia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacerrar_vacancia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacerrar_vacancia[".printFriendly"] = true;
}



$tdatacerrar_vacancia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacerrar_vacancia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacerrar_vacancia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacerrar_vacancia[".isUseAjaxSuggest"] = true;



																								

$tdatacerrar_vacancia[".ajaxCodeSnippetAdded"] = false;

$tdatacerrar_vacancia[".buttonsAdded"] = false;

$tdatacerrar_vacancia[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacerrar_vacancia[".isUseTimeForSearch"] = false;


$tdatacerrar_vacancia[".badgeColor"] = "d2691e";


$tdatacerrar_vacancia[".allSearchFields"] = array();
$tdatacerrar_vacancia[".filterFields"] = array();
$tdatacerrar_vacancia[".requiredSearchFields"] = array();

$tdatacerrar_vacancia[".googleLikeFields"] = array();
$tdatacerrar_vacancia[".googleLikeFields"][] = "id_vacancias";
$tdatacerrar_vacancia[".googleLikeFields"][] = "id_empresa_sucursal";
$tdatacerrar_vacancia[".googleLikeFields"][] = "id_contacto_sucursal";
$tdatacerrar_vacancia[".googleLikeFields"][] = "nombre_puesto";
$tdatacerrar_vacancia[".googleLikeFields"][] = "id_rubro";
$tdatacerrar_vacancia[".googleLikeFields"][] = "id_cidudad";
$tdatacerrar_vacancia[".googleLikeFields"][] = "id_departamento";
$tdatacerrar_vacancia[".googleLikeFields"][] = "salario";
$tdatacerrar_vacancia[".googleLikeFields"][] = "tipo_contrato";
$tdatacerrar_vacancia[".googleLikeFields"][] = "fecha_expiracion_vacancia";
$tdatacerrar_vacancia[".googleLikeFields"][] = "cantidad_vacancia";
$tdatacerrar_vacancia[".googleLikeFields"][] = "documentos";
$tdatacerrar_vacancia[".googleLikeFields"][] = "nacionalidad";
$tdatacerrar_vacancia[".googleLikeFields"][] = "genero";
$tdatacerrar_vacancia[".googleLikeFields"][] = "id_formacion_academica";
$tdatacerrar_vacancia[".googleLikeFields"][] = "movilidad_propia";
$tdatacerrar_vacancia[".googleLikeFields"][] = "tipo_movilidad";
$tdatacerrar_vacancia[".googleLikeFields"][] = "id_registro_conducir";
$tdatacerrar_vacancia[".googleLikeFields"][] = "discapacidad_aceptada";
$tdatacerrar_vacancia[".googleLikeFields"][] = "edad_rango_bajo";
$tdatacerrar_vacancia[".googleLikeFields"][] = "edad_rango_alto";
$tdatacerrar_vacancia[".googleLikeFields"][] = "descripcion_puesto";
$tdatacerrar_vacancia[".googleLikeFields"][] = "requisitos_exclu_formacion";
$tdatacerrar_vacancia[".googleLikeFields"][] = "habilidades_conocimiento";
$tdatacerrar_vacancia[".googleLikeFields"][] = "anos_experiencia_vacancia";
$tdatacerrar_vacancia[".googleLikeFields"][] = "id_estado_vacancia";
$tdatacerrar_vacancia[".googleLikeFields"][] = "fecha_creacion_vacancia";
$tdatacerrar_vacancia[".googleLikeFields"][] = "ruc";
$tdatacerrar_vacancia[".googleLikeFields"][] = "id_vacancia_requisito";
$tdatacerrar_vacancia[".googleLikeFields"][] = "legal";
$tdatacerrar_vacancia[".googleLikeFields"][] = "salario_final";
$tdatacerrar_vacancia[".googleLikeFields"][] = "fk_ocupacion_puesto";
$tdatacerrar_vacancia[".googleLikeFields"][] = "descripcion";
$tdatacerrar_vacancia[".googleLikeFields"][] = "meses_experiencia_vacancia";
$tdatacerrar_vacancia[".googleLikeFields"][] = "horario_rotativo";
$tdatacerrar_vacancia[".googleLikeFields"][] = "modalidad_trabajo";
$tdatacerrar_vacancia[".googleLikeFields"][] = "Latitude";
$tdatacerrar_vacancia[".googleLikeFields"][] = "Longitude";
$tdatacerrar_vacancia[".googleLikeFields"][] = "Lat";
$tdatacerrar_vacancia[".googleLikeFields"][] = "Lng";
$tdatacerrar_vacancia[".googleLikeFields"][] = "geolocation";
$tdatacerrar_vacancia[".googleLikeFields"][] = "map";
$tdatacerrar_vacancia[".googleLikeFields"][] = "descripcion_salario";
$tdatacerrar_vacancia[".googleLikeFields"][] = "salario_descripcion";



$tdatacerrar_vacancia[".tableType"] = "list";

$tdatacerrar_vacancia[".printerPageOrientation"] = 0;
$tdatacerrar_vacancia[".nPrinterPageScale"] = 100;

$tdatacerrar_vacancia[".nPrinterSplitRecords"] = 40;

$tdatacerrar_vacancia[".geocodingEnabled"] = false;










$tdatacerrar_vacancia[".pageSize"] = 20;

$tdatacerrar_vacancia[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacerrar_vacancia[".strOrderBy"] = $tstrOrderBy;

$tdatacerrar_vacancia[".orderindexes"] = array();


$tdatacerrar_vacancia[".sqlHead"] = "SELECT bolsa_empleo.vacancia.id_vacancias,  bolsa_empleo.vacancia_empresa.id_empresa_sucursal,  bolsa_empleo.vacancia_empresa.id_contacto_sucursal,  bolsa_empleo.vacancia_puesto.nombre_puesto,  bolsa_empleo.vacancia_puesto.id_rubro,  bolsa_empleo.vacancia_empresa.id_cidudad,  bolsa_empleo.vacancia_empresa.id_departamento,  bolsa_empleo.vacancia_puesto.salario,  bolsa_empleo.vacancia_puesto.tipo_contrato,  bolsa_empleo.vacancia.fecha_expiracion_vacancia,  bolsa_empleo.vacancia.cantidad_vacancia,  bolsa_empleo.vacancia_requisito.documentos,  bolsa_empleo.vacancia_requisito.nacionalidad,  bolsa_empleo.vacancia_requisito.genero,  bolsa_empleo.vacancia_requisito.id_formacion_academica,  bolsa_empleo.vacancia_requisito.movilidad_propia,  bolsa_empleo.vacancia_requisito.tipo_movilidad,  bolsa_empleo.vacancia_requisito.id_registro_conducir,  bolsa_empleo.vacancia_requisito.discapacidad_aceptada,  '' AS edad_rango_bajo,  '' AS edad_rango_alto,  bolsa_empleo.vacancia_puesto.descripcion_puesto,  bolsa_empleo.vacancia_requisito.requisitos_exclu_formacion,  bolsa_empleo.vacancia_requisito.habilidades_conocimiento,  bolsa_empleo.vacancia_puesto.anos_experiencia_vacancia,  bolsa_empleo.vacancia.id_estado_vacancia,  bolsa_empleo.vacancia.fecha_creacion_vacancia,  bolsa_empleo.empresas_bolsa_sucursales.ruc,  bolsa_empleo.vacancia_requisito.id_vacancia_requisito,  bolsa_empleo.empresas_bolsa_sucursales.legal,  '' AS salario_final,  bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto,  bolsa_empleo.vista_ocupaciones.descripcion,  bolsa_empleo.vacancia_puesto.meses_experiencia_vacancia,  bolsa_empleo.vacancia_puesto.horario_rotativo AS horario_rotativo,  bolsa_empleo.vacancia_puesto.modalidad_trabajo,  btrim(split_part((geolocation)::text, ';'::text, 1)) AS \"Latitude\",  btrim(split_part((geolocation)::text, ';'::text, 2)) AS \"Longitude\",  '' AS \"Lat\",  '' AS \"Lng\",  bolsa_empleo.vacancia.geolocation,  '' AS \"map\",  bolsa_empleo.vacancia_puesto.descripcion_salario,  '' AS salario_descripcion";
$tdatacerrar_vacancia[".sqlFrom"] = "FROM bolsa_empleo.vacancia  INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia  INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia  INNER JOIN bolsa_empleo.vacancia_requisito ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_requisito.id_vacancia  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id  INNER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi";
$tdatacerrar_vacancia[".sqlWhereExpr"] = "";
$tdatacerrar_vacancia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacerrar_vacancia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacerrar_vacancia[".arrGroupsPerPage"] = $arrGPP;

$tdatacerrar_vacancia[".highlightSearchResults"] = true;

$tableKeyscerrar_vacancia = array();
$tableKeyscerrar_vacancia[] = "id_vacancias";
$tdatacerrar_vacancia[".Keys"] = $tableKeyscerrar_vacancia;


$tdatacerrar_vacancia[".hideMobileList"] = array();




//	id_vacancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_vacancias";
	$fdata["GoodName"] = "id_vacancias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","id_vacancias");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_vacancias";

		$fdata["sourceSingle"] = "id_vacancias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia.id_vacancias";

	
	
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


	$tdatacerrar_vacancia["id_vacancias"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "id_vacancias";
//	id_empresa_sucursal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_empresa_sucursal";
	$fdata["GoodName"] = "id_empresa_sucursal";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","id_empresa_sucursal");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_empresa_sucursal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_empresa.id_empresa_sucursal";

	
	
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
	$edata["DisplayField"] = "nro_patronal|| '-  ' ||legal|| '-  ' ||direccion";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "ruc", "lookup" => "ruc" );

	
	

	
	
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


	$tdatacerrar_vacancia["id_empresa_sucursal"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "id_empresa_sucursal";
//	id_contacto_sucursal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_contacto_sucursal";
	$fdata["GoodName"] = "id_contacto_sucursal";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","id_contacto_sucursal");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_contacto_sucursal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_empresa.id_contacto_sucursal";

	
	
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
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "nombre||' - '||telefono";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "ruc", "lookup" => "ruc" );

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


	$tdatacerrar_vacancia["id_contacto_sucursal"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "id_contacto_sucursal";
//	nombre_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre_puesto";
	$fdata["GoodName"] = "nombre_puesto";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","nombre_puesto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_puesto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.nombre_puesto";

	
	
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


	$tdatacerrar_vacancia["nombre_puesto"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "nombre_puesto";
//	id_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_rubro";
	$fdata["GoodName"] = "id_rubro";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","id_rubro");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_rubro";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.id_rubro";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.actividad_econ";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_activ_econ";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatacerrar_vacancia["id_rubro"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "id_rubro";
//	id_cidudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id_cidudad";
	$fdata["GoodName"] = "id_cidudad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","id_cidudad");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_cidudad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_empresa.id_cidudad";

	
	
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
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


	$tdatacerrar_vacancia["id_cidudad"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "id_cidudad";
//	id_departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_departamento";
	$fdata["GoodName"] = "id_departamento";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","id_departamento");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_departamento";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_empresa.id_departamento";

	
	
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
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
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


	$tdatacerrar_vacancia["id_departamento"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "id_departamento";
//	salario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "salario";
	$fdata["GoodName"] = "salario";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","salario");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "salario";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.salario";

	
	
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


	$tdatacerrar_vacancia["salario"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "salario";
//	tipo_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tipo_contrato";
	$fdata["GoodName"] = "tipo_contrato";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","tipo_contrato");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_contrato";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.tipo_contrato";

	
	
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tipo_contrato";

	

	
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


	$tdatacerrar_vacancia["tipo_contrato"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "tipo_contrato";
//	fecha_expiracion_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fecha_expiracion_vacancia";
	$fdata["GoodName"] = "fecha_expiracion_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","fecha_expiracion_vacancia");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_expiracion_vacancia";

		$fdata["sourceSingle"] = "fecha_expiracion_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia.fecha_expiracion_vacancia";

	
	
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


	$tdatacerrar_vacancia["fecha_expiracion_vacancia"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "fecha_expiracion_vacancia";
//	cantidad_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cantidad_vacancia";
	$fdata["GoodName"] = "cantidad_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","cantidad_vacancia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cantidad_vacancia";

		$fdata["sourceSingle"] = "cantidad_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia.cantidad_vacancia";

	
	
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
				$edata["validateAs"]["regExp"] = "^\\d+\$";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "Sólo números naturales", "messageType" => "Text");
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


	$tdatacerrar_vacancia["cantidad_vacancia"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "cantidad_vacancia";
//	documentos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "documentos";
	$fdata["GoodName"] = "documentos";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","documentos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "documentos";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.documentos";

	
	
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


	$tdatacerrar_vacancia["documentos"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "documentos";
//	nacionalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "nacionalidad";
	$fdata["GoodName"] = "nacionalidad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","nacionalidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nacionalidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.nacionalidad";

	
	
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
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "code";

	
	
	
	

	
	
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


	$tdatacerrar_vacancia["nacionalidad"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "nacionalidad";
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","genero");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "genero";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.genero";

	
	
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
	$edata["LinkFieldType"] = 3;
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


	$tdatacerrar_vacancia["genero"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "genero";
//	id_formacion_academica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "id_formacion_academica";
	$fdata["GoodName"] = "id_formacion_academica";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","id_formacion_academica");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_formacion_academica";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.id_formacion_academica";

	
	
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
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


	$tdatacerrar_vacancia["id_formacion_academica"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "id_formacion_academica";
//	movilidad_propia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "movilidad_propia";
	$fdata["GoodName"] = "movilidad_propia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","movilidad_propia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "movilidad_propia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.movilidad_propia";

	
	
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


	$tdatacerrar_vacancia["movilidad_propia"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "movilidad_propia";
//	tipo_movilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "tipo_movilidad";
	$fdata["GoodName"] = "tipo_movilidad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","tipo_movilidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_movilidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.tipo_movilidad";

	
	
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
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id_tipo_movilidad";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
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


	$tdatacerrar_vacancia["tipo_movilidad"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "tipo_movilidad";
//	id_registro_conducir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "id_registro_conducir";
	$fdata["GoodName"] = "id_registro_conducir";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","id_registro_conducir");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_registro_conducir";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.id_registro_conducir";

	
	
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
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
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


	$tdatacerrar_vacancia["id_registro_conducir"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "id_registro_conducir";
//	discapacidad_aceptada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "discapacidad_aceptada";
	$fdata["GoodName"] = "discapacidad_aceptada";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","discapacidad_aceptada");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "discapacidad_aceptada";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.discapacidad_aceptada";

	
	
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
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


	$tdatacerrar_vacancia["discapacidad_aceptada"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "discapacidad_aceptada";
//	edad_rango_bajo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "edad_rango_bajo";
	$fdata["GoodName"] = "edad_rango_bajo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","edad_rango_bajo");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "edad_rango_bajo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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
				$edata["validateAs"]["regExp"] = "^(1[6-9]|[2-6]\\d|70)\$";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "solo numeros naturales", "messageType" => "Text");
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


	$tdatacerrar_vacancia["edad_rango_bajo"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "edad_rango_bajo";
//	edad_rango_alto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "edad_rango_alto";
	$fdata["GoodName"] = "edad_rango_alto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","edad_rango_alto");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "edad_rango_alto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");
				$edata["validateAs"]["regExp"] = "^(1[6-9]|[2-6]\\d|70)\$";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "solo numeros naturales", "messageType" => "Text");
				
	
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


	$tdatacerrar_vacancia["edad_rango_alto"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "edad_rango_alto";
//	descripcion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "descripcion_puesto";
	$fdata["GoodName"] = "descripcion_puesto";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","descripcion_puesto");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "descripcion_puesto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.descripcion_puesto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatacerrar_vacancia["descripcion_puesto"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "descripcion_puesto";
//	requisitos_exclu_formacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "requisitos_exclu_formacion";
	$fdata["GoodName"] = "requisitos_exclu_formacion";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","requisitos_exclu_formacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "requisitos_exclu_formacion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.requisitos_exclu_formacion";

	
	
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


	$tdatacerrar_vacancia["requisitos_exclu_formacion"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "requisitos_exclu_formacion";
//	habilidades_conocimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "habilidades_conocimiento";
	$fdata["GoodName"] = "habilidades_conocimiento";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","habilidades_conocimiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "habilidades_conocimiento";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.habilidades_conocimiento";

	
	
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


	$tdatacerrar_vacancia["habilidades_conocimiento"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "habilidades_conocimiento";
//	anos_experiencia_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "anos_experiencia_vacancia";
	$fdata["GoodName"] = "anos_experiencia_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","anos_experiencia_vacancia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "anos_experiencia_vacancia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.anos_experiencia_vacancia";

	
	
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


	$tdatacerrar_vacancia["anos_experiencia_vacancia"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "anos_experiencia_vacancia";
//	id_estado_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "id_estado_vacancia";
	$fdata["GoodName"] = "id_estado_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","id_estado_vacancia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_estado_vacancia";

		$fdata["sourceSingle"] = "id_estado_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia.id_estado_vacancia";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.vacancia_estado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_vacancia_estado";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "estado";

	

	
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


	$tdatacerrar_vacancia["id_estado_vacancia"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "id_estado_vacancia";
//	fecha_creacion_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "fecha_creacion_vacancia";
	$fdata["GoodName"] = "fecha_creacion_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","fecha_creacion_vacancia");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_creacion_vacancia";

		$fdata["sourceSingle"] = "fecha_creacion_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia.fecha_creacion_vacancia";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatacerrar_vacancia["fecha_creacion_vacancia"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "fecha_creacion_vacancia";
//	ruc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ruc";
	$fdata["GoodName"] = "ruc";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","ruc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ruc";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa_sucursales.ruc";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.empresas_bolsa_sucursales1";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "ruc";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ruc|| ' - '||legal";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_empresa_sucursal";
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


	$tdatacerrar_vacancia["ruc"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "ruc";
//	id_vacancia_requisito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "id_vacancia_requisito";
	$fdata["GoodName"] = "id_vacancia_requisito";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","id_vacancia_requisito");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_vacancia_requisito";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.id_vacancia_requisito";

	
	
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


	$tdatacerrar_vacancia["id_vacancia_requisito"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "id_vacancia_requisito";
//	legal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "legal";
	$fdata["GoodName"] = "legal";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","legal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "legal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa_sucursales.legal";

	
	
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
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "nro_patronal||' - '||ruc||' - '||legal";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatacerrar_vacancia["legal"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "legal";
//	salario_final
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "salario_final";
	$fdata["GoodName"] = "salario_final";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","salario_final");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "salario_final";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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
		
		$edata["autoUpdatable"] = true;

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


	$tdatacerrar_vacancia["salario_final"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "salario_final";
//	fk_ocupacion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "fk_ocupacion_puesto";
	$fdata["GoodName"] = "fk_ocupacion_puesto";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","fk_ocupacion_puesto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_ocupacion_puesto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";

	
	
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


	$tdatacerrar_vacancia["fk_ocupacion_puesto"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "fk_ocupacion_puesto";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.vista_ocupaciones";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vista_ocupaciones.descripcion";

	
	
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


	$tdatacerrar_vacancia["descripcion"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "descripcion";
//	meses_experiencia_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "meses_experiencia_vacancia";
	$fdata["GoodName"] = "meses_experiencia_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","meses_experiencia_vacancia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "meses_experiencia_vacancia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.meses_experiencia_vacancia";

	
	
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
		
		$edata["autoUpdatable"] = true;

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


	$tdatacerrar_vacancia["meses_experiencia_vacancia"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "meses_experiencia_vacancia";
//	horario_rotativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "horario_rotativo";
	$fdata["GoodName"] = "horario_rotativo";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","horario_rotativo");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "horario_rotativo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.horario_rotativo";

	
	
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


	$tdatacerrar_vacancia["horario_rotativo"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "horario_rotativo";
//	modalidad_trabajo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "modalidad_trabajo";
	$fdata["GoodName"] = "modalidad_trabajo";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","modalidad_trabajo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "modalidad_trabajo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.modalidad_trabajo";

	
	
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tipo_modalidad";

	

	
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


	$tdatacerrar_vacancia["modalidad_trabajo"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "modalidad_trabajo";
//	Latitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Latitude";
	$fdata["GoodName"] = "Latitude";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","Latitude");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Latitude";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "btrim(split_part((geolocation)::text, ';'::text, 1))";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatacerrar_vacancia["Latitude"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "Latitude";
//	Longitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Longitude";
	$fdata["GoodName"] = "Longitude";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","Longitude");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Longitude";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "btrim(split_part((geolocation)::text, ';'::text, 2))";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatacerrar_vacancia["Longitude"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "Longitude";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","Lat");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Lat";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatacerrar_vacancia["Lat"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "Lat";
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","Lng");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Lng";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatacerrar_vacancia["Lng"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "Lng";
//	geolocation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "geolocation";
	$fdata["GoodName"] = "geolocation";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","geolocation");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "geolocation";

		$fdata["sourceSingle"] = "geolocation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia.geolocation";

	
	
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


	$tdatacerrar_vacancia["geolocation"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "geolocation";
//	map
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "map";
	$fdata["GoodName"] = "map";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","map");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "map";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatacerrar_vacancia["map"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "map";
//	descripcion_salario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "descripcion_salario";
	$fdata["GoodName"] = "descripcion_salario";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","descripcion_salario");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "descripcion_salario";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.descripcion_salario";

	
	
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


	$tdatacerrar_vacancia["descripcion_salario"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "descripcion_salario";
//	salario_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "salario_descripcion";
	$fdata["GoodName"] = "salario_descripcion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cerrar_vacancia","salario_descripcion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "salario_descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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


	$tdatacerrar_vacancia["salario_descripcion"] = $fdata;
		$tdatacerrar_vacancia[".searchableFields"][] = "salario_descripcion";


$tables_data["cerrar_vacancia"]=&$tdatacerrar_vacancia;
$field_labels["cerrar_vacancia"] = &$fieldLabelscerrar_vacancia;
$fieldToolTips["cerrar_vacancia"] = &$fieldToolTipscerrar_vacancia;
$placeHolders["cerrar_vacancia"] = &$placeHolderscerrar_vacancia;
$page_titles["cerrar_vacancia"] = &$pageTitlescerrar_vacancia;


changeTextControlsToDate( "cerrar_vacancia" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cerrar_vacancia"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cerrar_vacancia"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cerrar_vacancia"][0] = $masterParams;
				$masterTablesData["cerrar_vacancia"][0]["masterKeys"] = array();
	$masterTablesData["cerrar_vacancia"][0]["masterKeys"][]="id_vacancias";
				$masterTablesData["cerrar_vacancia"][0]["detailKeys"] = array();
	$masterTablesData["cerrar_vacancia"][0]["detailKeys"][]="id_vacancias";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cerrar_vacancia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bolsa_empleo.vacancia.id_vacancias,  bolsa_empleo.vacancia_empresa.id_empresa_sucursal,  bolsa_empleo.vacancia_empresa.id_contacto_sucursal,  bolsa_empleo.vacancia_puesto.nombre_puesto,  bolsa_empleo.vacancia_puesto.id_rubro,  bolsa_empleo.vacancia_empresa.id_cidudad,  bolsa_empleo.vacancia_empresa.id_departamento,  bolsa_empleo.vacancia_puesto.salario,  bolsa_empleo.vacancia_puesto.tipo_contrato,  bolsa_empleo.vacancia.fecha_expiracion_vacancia,  bolsa_empleo.vacancia.cantidad_vacancia,  bolsa_empleo.vacancia_requisito.documentos,  bolsa_empleo.vacancia_requisito.nacionalidad,  bolsa_empleo.vacancia_requisito.genero,  bolsa_empleo.vacancia_requisito.id_formacion_academica,  bolsa_empleo.vacancia_requisito.movilidad_propia,  bolsa_empleo.vacancia_requisito.tipo_movilidad,  bolsa_empleo.vacancia_requisito.id_registro_conducir,  bolsa_empleo.vacancia_requisito.discapacidad_aceptada,  '' AS edad_rango_bajo,  '' AS edad_rango_alto,  bolsa_empleo.vacancia_puesto.descripcion_puesto,  bolsa_empleo.vacancia_requisito.requisitos_exclu_formacion,  bolsa_empleo.vacancia_requisito.habilidades_conocimiento,  bolsa_empleo.vacancia_puesto.anos_experiencia_vacancia,  bolsa_empleo.vacancia.id_estado_vacancia,  bolsa_empleo.vacancia.fecha_creacion_vacancia,  bolsa_empleo.empresas_bolsa_sucursales.ruc,  bolsa_empleo.vacancia_requisito.id_vacancia_requisito,  bolsa_empleo.empresas_bolsa_sucursales.legal,  '' AS salario_final,  bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto,  bolsa_empleo.vista_ocupaciones.descripcion,  bolsa_empleo.vacancia_puesto.meses_experiencia_vacancia,  bolsa_empleo.vacancia_puesto.horario_rotativo AS horario_rotativo,  bolsa_empleo.vacancia_puesto.modalidad_trabajo,  btrim(split_part((geolocation)::text, ';'::text, 1)) AS \"Latitude\",  btrim(split_part((geolocation)::text, ';'::text, 2)) AS \"Longitude\",  '' AS \"Lat\",  '' AS \"Lng\",  bolsa_empleo.vacancia.geolocation,  '' AS \"map\",  bolsa_empleo.vacancia_puesto.descripcion_salario,  '' AS salario_descripcion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vacancia  INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia  INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia  INNER JOIN bolsa_empleo.vacancia_requisito ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_requisito.id_vacancia  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id  INNER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi";
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
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto6["m_sql"] = "bolsa_empleo.vacancia.id_vacancias";
$proto6["m_srcTableName"] = "cerrar_vacancia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_empresa_sucursal",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto8["m_sql"] = "bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto8["m_srcTableName"] = "cerrar_vacancia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_contacto_sucursal",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto10["m_sql"] = "bolsa_empleo.vacancia_empresa.id_contacto_sucursal";
$proto10["m_srcTableName"] = "cerrar_vacancia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_puesto",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto12["m_sql"] = "bolsa_empleo.vacancia_puesto.nombre_puesto";
$proto12["m_srcTableName"] = "cerrar_vacancia";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_rubro",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto14["m_sql"] = "bolsa_empleo.vacancia_puesto.id_rubro";
$proto14["m_srcTableName"] = "cerrar_vacancia";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cidudad",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto16["m_sql"] = "bolsa_empleo.vacancia_empresa.id_cidudad";
$proto16["m_srcTableName"] = "cerrar_vacancia";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_departamento",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto18["m_sql"] = "bolsa_empleo.vacancia_empresa.id_departamento";
$proto18["m_srcTableName"] = "cerrar_vacancia";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "salario",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto20["m_sql"] = "bolsa_empleo.vacancia_puesto.salario";
$proto20["m_srcTableName"] = "cerrar_vacancia";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_contrato",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto22["m_sql"] = "bolsa_empleo.vacancia_puesto.tipo_contrato";
$proto22["m_srcTableName"] = "cerrar_vacancia";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_expiracion_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto24["m_sql"] = "bolsa_empleo.vacancia.fecha_expiracion_vacancia";
$proto24["m_srcTableName"] = "cerrar_vacancia";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto26["m_sql"] = "bolsa_empleo.vacancia.cantidad_vacancia";
$proto26["m_srcTableName"] = "cerrar_vacancia";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "documentos",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto28["m_sql"] = "bolsa_empleo.vacancia_requisito.documentos";
$proto28["m_srcTableName"] = "cerrar_vacancia";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto30["m_sql"] = "bolsa_empleo.vacancia_requisito.nacionalidad";
$proto30["m_srcTableName"] = "cerrar_vacancia";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto32["m_sql"] = "bolsa_empleo.vacancia_requisito.genero";
$proto32["m_srcTableName"] = "cerrar_vacancia";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "id_formacion_academica",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto34["m_sql"] = "bolsa_empleo.vacancia_requisito.id_formacion_academica";
$proto34["m_srcTableName"] = "cerrar_vacancia";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "movilidad_propia",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto36["m_sql"] = "bolsa_empleo.vacancia_requisito.movilidad_propia";
$proto36["m_srcTableName"] = "cerrar_vacancia";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_movilidad",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto38["m_sql"] = "bolsa_empleo.vacancia_requisito.tipo_movilidad";
$proto38["m_srcTableName"] = "cerrar_vacancia";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "id_registro_conducir",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto40["m_sql"] = "bolsa_empleo.vacancia_requisito.id_registro_conducir";
$proto40["m_srcTableName"] = "cerrar_vacancia";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "discapacidad_aceptada",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto42["m_sql"] = "bolsa_empleo.vacancia_requisito.discapacidad_aceptada";
$proto42["m_srcTableName"] = "cerrar_vacancia";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto44["m_sql"] = "''";
$proto44["m_srcTableName"] = "cerrar_vacancia";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "edad_rango_bajo";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto46["m_sql"] = "''";
$proto46["m_srcTableName"] = "cerrar_vacancia";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "edad_rango_alto";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_puesto",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto48["m_sql"] = "bolsa_empleo.vacancia_puesto.descripcion_puesto";
$proto48["m_srcTableName"] = "cerrar_vacancia";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "requisitos_exclu_formacion",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto50["m_sql"] = "bolsa_empleo.vacancia_requisito.requisitos_exclu_formacion";
$proto50["m_srcTableName"] = "cerrar_vacancia";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "habilidades_conocimiento",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto52["m_sql"] = "bolsa_empleo.vacancia_requisito.habilidades_conocimiento";
$proto52["m_srcTableName"] = "cerrar_vacancia";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "anos_experiencia_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto54["m_sql"] = "bolsa_empleo.vacancia_puesto.anos_experiencia_vacancia";
$proto54["m_srcTableName"] = "cerrar_vacancia";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "id_estado_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto56["m_sql"] = "bolsa_empleo.vacancia.id_estado_vacancia";
$proto56["m_srcTableName"] = "cerrar_vacancia";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_creacion_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto58["m_sql"] = "bolsa_empleo.vacancia.fecha_creacion_vacancia";
$proto58["m_srcTableName"] = "cerrar_vacancia";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto60["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.ruc";
$proto60["m_srcTableName"] = "cerrar_vacancia";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancia_requisito",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto62["m_sql"] = "bolsa_empleo.vacancia_requisito.id_vacancia_requisito";
$proto62["m_srcTableName"] = "cerrar_vacancia";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "legal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto64["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.legal";
$proto64["m_srcTableName"] = "cerrar_vacancia";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto66["m_sql"] = "''";
$proto66["m_srcTableName"] = "cerrar_vacancia";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "salario_final";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_ocupacion_puesto",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto68["m_sql"] = "bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto68["m_srcTableName"] = "cerrar_vacancia";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.vista_ocupaciones",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto70["m_sql"] = "bolsa_empleo.vista_ocupaciones.descripcion";
$proto70["m_srcTableName"] = "cerrar_vacancia";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "meses_experiencia_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto72["m_sql"] = "bolsa_empleo.vacancia_puesto.meses_experiencia_vacancia";
$proto72["m_srcTableName"] = "cerrar_vacancia";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "horario_rotativo",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto74["m_sql"] = "bolsa_empleo.vacancia_puesto.horario_rotativo";
$proto74["m_srcTableName"] = "cerrar_vacancia";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "horario_rotativo";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "modalidad_trabajo",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto76["m_sql"] = "bolsa_empleo.vacancia_puesto.modalidad_trabajo";
$proto76["m_srcTableName"] = "cerrar_vacancia";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$proto79=array();
$proto79["m_functiontype"] = "SQLF_CUSTOM";
$proto79["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "split_part((geolocation)::text, ';'::text, 1)"
));

$proto79["m_arguments"][]=$obj;
$proto79["m_strFunctionName"] = "btrim";
$obj = new SQLFunctionCall($proto79);

$proto78["m_sql"] = "btrim(split_part((geolocation)::text, ';'::text, 1))";
$proto78["m_srcTableName"] = "cerrar_vacancia";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "Latitude";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$proto82=array();
$proto82["m_functiontype"] = "SQLF_CUSTOM";
$proto82["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "split_part((geolocation)::text, ';'::text, 2)"
));

$proto82["m_arguments"][]=$obj;
$proto82["m_strFunctionName"] = "btrim";
$obj = new SQLFunctionCall($proto82);

$proto81["m_sql"] = "btrim(split_part((geolocation)::text, ';'::text, 2))";
$proto81["m_srcTableName"] = "cerrar_vacancia";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "Longitude";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto84["m_sql"] = "''";
$proto84["m_srcTableName"] = "cerrar_vacancia";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "Lat";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto86["m_sql"] = "''";
$proto86["m_srcTableName"] = "cerrar_vacancia";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "Lng";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "geolocation",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto88["m_sql"] = "bolsa_empleo.vacancia.geolocation";
$proto88["m_srcTableName"] = "cerrar_vacancia";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto90["m_sql"] = "''";
$proto90["m_srcTableName"] = "cerrar_vacancia";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "map";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_salario",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto92["m_sql"] = "bolsa_empleo.vacancia_puesto.descripcion_salario";
$proto92["m_srcTableName"] = "cerrar_vacancia";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto94["m_sql"] = "''";
$proto94["m_srcTableName"] = "cerrar_vacancia";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "salario_descripcion";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto96=array();
$proto96["m_link"] = "SQLL_MAIN";
			$proto97=array();
$proto97["m_strName"] = "bolsa_empleo.vacancia";
$proto97["m_srcTableName"] = "cerrar_vacancia";
$proto97["m_columns"] = array();
$proto97["m_columns"][] = "id_vacancias";
$proto97["m_columns"][] = "fecha_creacion_vacancia";
$proto97["m_columns"][] = "id_estado_vacancia";
$proto97["m_columns"][] = "fecha_expiracion_vacancia";
$proto97["m_columns"][] = "cantidad_vacancia";
$proto97["m_columns"][] = "geolocation";
$proto97["m_columns"][] = "fk_id_feria_empleo";
$proto97["m_columns"][] = "usuario";
$obj = new SQLTable($proto97);

$proto96["m_table"] = $obj;
$proto96["m_sql"] = "bolsa_empleo.vacancia";
$proto96["m_alias"] = "";
$proto96["m_srcTableName"] = "cerrar_vacancia";
$proto98=array();
$proto98["m_sql"] = "";
$proto98["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto98["m_column"]=$obj;
$proto98["m_contained"] = array();
$proto98["m_strCase"] = "";
$proto98["m_havingmode"] = false;
$proto98["m_inBrackets"] = false;
$proto98["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto98);

$proto96["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto96);

$proto0["m_fromlist"][]=$obj;
												$proto100=array();
$proto100["m_link"] = "SQLL_INNERJOIN";
			$proto101=array();
$proto101["m_strName"] = "bolsa_empleo.vacancia_empresa";
$proto101["m_srcTableName"] = "cerrar_vacancia";
$proto101["m_columns"] = array();
$proto101["m_columns"][] = "id_empresa_vacancia";
$proto101["m_columns"][] = "id_empresa_sucursal";
$proto101["m_columns"][] = "id_contacto_sucursal";
$proto101["m_columns"][] = "id_cidudad";
$proto101["m_columns"][] = "id_departamento";
$proto101["m_columns"][] = "id_vacancia";
$obj = new SQLTable($proto101);

$proto100["m_table"] = $obj;
$proto100["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia";
$proto100["m_alias"] = "";
$proto100["m_srcTableName"] = "cerrar_vacancia";
$proto102=array();
$proto102["m_sql"] = "bolsa_empleo.vacancia_empresa.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto102["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto102["m_column"]=$obj;
$proto102["m_contained"] = array();
$proto102["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto102["m_havingmode"] = false;
$proto102["m_inBrackets"] = false;
$proto102["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto102);

$proto100["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto100);

$proto0["m_fromlist"][]=$obj;
												$proto104=array();
$proto104["m_link"] = "SQLL_INNERJOIN";
			$proto105=array();
$proto105["m_strName"] = "bolsa_empleo.vacancia_puesto";
$proto105["m_srcTableName"] = "cerrar_vacancia";
$proto105["m_columns"] = array();
$proto105["m_columns"][] = "id_puesto_vacancia";
$proto105["m_columns"][] = "nombre_puesto";
$proto105["m_columns"][] = "salario";
$proto105["m_columns"][] = "tipo_contrato";
$proto105["m_columns"][] = "descripcion_puesto";
$proto105["m_columns"][] = "id_vacancia";
$proto105["m_columns"][] = "id_rubro";
$proto105["m_columns"][] = "anos_experiencia_vacancia";
$proto105["m_columns"][] = "fk_ocupacion_puesto";
$proto105["m_columns"][] = "meses_experiencia_vacancia";
$proto105["m_columns"][] = "horario_rotativo";
$proto105["m_columns"][] = "beneficios";
$proto105["m_columns"][] = "modalidad_trabajo";
$proto105["m_columns"][] = "descripcion_salario";
$proto105["m_columns"][] = "color";
$proto105["m_columns"][] = "tipo_remuneracion";
$obj = new SQLTable($proto105);

$proto104["m_table"] = $obj;
$proto104["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia";
$proto104["m_alias"] = "";
$proto104["m_srcTableName"] = "cerrar_vacancia";
$proto106=array();
$proto106["m_sql"] = "bolsa_empleo.vacancia_puesto.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto106["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto106["m_column"]=$obj;
$proto106["m_contained"] = array();
$proto106["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto106["m_havingmode"] = false;
$proto106["m_inBrackets"] = false;
$proto106["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto106);

$proto104["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto104);

$proto0["m_fromlist"][]=$obj;
												$proto108=array();
$proto108["m_link"] = "SQLL_INNERJOIN";
			$proto109=array();
$proto109["m_strName"] = "bolsa_empleo.vacancia_requisito";
$proto109["m_srcTableName"] = "cerrar_vacancia";
$proto109["m_columns"] = array();
$proto109["m_columns"][] = "id_vacancia_requisito";
$proto109["m_columns"][] = "genero";
$proto109["m_columns"][] = "movilidad_propia";
$proto109["m_columns"][] = "tipo_movilidad";
$proto109["m_columns"][] = "id_registro_conducir";
$proto109["m_columns"][] = "discapacidad_aceptada";
$proto109["m_columns"][] = "id_vacancia";
$proto109["m_columns"][] = "nacionalidad";
$proto109["m_columns"][] = "documentos";
$proto109["m_columns"][] = "edad";
$proto109["m_columns"][] = "requisitos_exclu_formacion";
$proto109["m_columns"][] = "habilidades_conocimiento";
$proto109["m_columns"][] = "id_formacion_academica";
$obj = new SQLTable($proto109);

$proto108["m_table"] = $obj;
$proto108["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_requisito ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_requisito.id_vacancia";
$proto108["m_alias"] = "";
$proto108["m_srcTableName"] = "cerrar_vacancia";
$proto110=array();
$proto110["m_sql"] = "bolsa_empleo.vacancia_requisito.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto108);

$proto0["m_fromlist"][]=$obj;
												$proto112=array();
$proto112["m_link"] = "SQLL_INNERJOIN";
			$proto113=array();
$proto113["m_strName"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto113["m_srcTableName"] = "cerrar_vacancia";
$proto113["m_columns"] = array();
$proto113["m_columns"][] = "id";
$proto113["m_columns"][] = "empresas_bolsa_id";
$proto113["m_columns"][] = "ruc";
$proto113["m_columns"][] = "legal";
$proto113["m_columns"][] = "fantasy";
$proto113["m_columns"][] = "city_id";
$proto113["m_columns"][] = "distrito_id";
$proto113["m_columns"][] = "tel";
$proto113["m_columns"][] = "email";
$proto113["m_columns"][] = "id_tipo_sucursal";
$proto113["m_columns"][] = "nro_patronal";
$proto113["m_columns"][] = "direccion";
$proto113["m_columns"][] = "fecha_creacion";
$obj = new SQLTable($proto113);

$proto112["m_table"] = $obj;
$proto112["m_sql"] = "INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id";
$proto112["m_alias"] = "";
$proto112["m_srcTableName"] = "cerrar_vacancia";
$proto114=array();
$proto114["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id = bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto114["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto114["m_column"]=$obj;
$proto114["m_contained"] = array();
$proto114["m_strCase"] = "= bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto114["m_havingmode"] = false;
$proto114["m_inBrackets"] = false;
$proto114["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto114);

$proto112["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto112);

$proto0["m_fromlist"][]=$obj;
												$proto116=array();
$proto116["m_link"] = "SQLL_INNERJOIN";
			$proto117=array();
$proto117["m_strName"] = "bolsa_empleo.vista_ocupaciones";
$proto117["m_srcTableName"] = "cerrar_vacancia";
$proto117["m_columns"] = array();
$proto117["m_columns"][] = "id_ocu_puest_clasi";
$proto117["m_columns"][] = "descripcion";
$proto117["m_columns"][] = "codigo";
$proto117["m_columns"][] = "color";
$obj = new SQLTable($proto117);

$proto116["m_table"] = $obj;
$proto116["m_sql"] = "INNER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi";
$proto116["m_alias"] = "";
$proto116["m_srcTableName"] = "cerrar_vacancia";
$proto118=array();
$proto118["m_sql"] = "bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi = bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto118["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ocu_puest_clasi",
	"m_strTable" => "bolsa_empleo.vista_ocupaciones",
	"m_srcTableName" => "cerrar_vacancia"
));

$proto118["m_column"]=$obj;
$proto118["m_contained"] = array();
$proto118["m_strCase"] = "= bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto118["m_havingmode"] = false;
$proto118["m_inBrackets"] = false;
$proto118["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto118);

$proto116["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto116);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cerrar_vacancia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cerrar_vacancia = createSqlQuery_cerrar_vacancia();


	
		;

																																												

$tdatacerrar_vacancia[".sqlquery"] = $queryData_cerrar_vacancia;



include_once(getabspath("include/cerrar_vacancia_events.php"));
$tdatacerrar_vacancia[".hasEvents"] = true;

?>
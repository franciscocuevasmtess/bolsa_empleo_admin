<?php
$tdatavacancia_pendiente = array();
$tdatavacancia_pendiente[".searchableFields"] = array();
$tdatavacancia_pendiente[".ShortName"] = "vacancia_pendiente";
$tdatavacancia_pendiente[".OwnerID"] = "";
$tdatavacancia_pendiente[".OriginalTable"] = "bolsa_empleo.vacancia";


$tdatavacancia_pendiente[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavacancia_pendiente[".originalPagesByType"] = $tdatavacancia_pendiente[".pagesByType"];
$tdatavacancia_pendiente[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavacancia_pendiente[".originalPages"] = $tdatavacancia_pendiente[".pages"];
$tdatavacancia_pendiente[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavacancia_pendiente[".originalDefaultPages"] = $tdatavacancia_pendiente[".defaultPages"];

//	field labels
$fieldLabelsvacancia_pendiente = array();
$fieldToolTipsvacancia_pendiente = array();
$pageTitlesvacancia_pendiente = array();
$placeHoldersvacancia_pendiente = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvacancia_pendiente["Spanish"] = array();
	$fieldToolTipsvacancia_pendiente["Spanish"] = array();
	$placeHoldersvacancia_pendiente["Spanish"] = array();
	$pageTitlesvacancia_pendiente["Spanish"] = array();
	$fieldLabelsvacancia_pendiente["Spanish"]["id_vacancias"] = "<i class=\"bi bi-upc-scan\"></i>";
	$fieldToolTipsvacancia_pendiente["Spanish"]["id_vacancias"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["id_vacancias"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["fecha_creacion_vacancia"] = "Publicado el ";
	$fieldToolTipsvacancia_pendiente["Spanish"]["fecha_creacion_vacancia"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["fecha_creacion_vacancia"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["id_estado_vacancia"] = "Id Estado Vacancia";
	$fieldToolTipsvacancia_pendiente["Spanish"]["id_estado_vacancia"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["id_estado_vacancia"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["fecha_expiracion_vacancia"] = "Fecha de Expiración de Vacancia";
	$fieldToolTipsvacancia_pendiente["Spanish"]["fecha_expiracion_vacancia"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["fecha_expiracion_vacancia"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["cantidad_vacancia"] = "Cantidad de Vacancias";
	$fieldToolTipsvacancia_pendiente["Spanish"]["cantidad_vacancia"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["cantidad_vacancia"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsvacancia_pendiente["Spanish"]["descripcion"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["descripcion"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["salario"] = "Salario";
	$fieldToolTipsvacancia_pendiente["Spanish"]["salario"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["salario"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["id_empresa_sucursal"] = "Empresa Sucursal";
	$fieldToolTipsvacancia_pendiente["Spanish"]["id_empresa_sucursal"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["id_empresa_sucursal"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["id_contacto_sucursal"] = "Contacto";
	$fieldToolTipsvacancia_pendiente["Spanish"]["id_contacto_sucursal"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["id_contacto_sucursal"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["nombre_puesto"] = "Nombre Puesto";
	$fieldToolTipsvacancia_pendiente["Spanish"]["nombre_puesto"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["nombre_puesto"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["id_rubro"] = "Rubro";
	$fieldToolTipsvacancia_pendiente["Spanish"]["id_rubro"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["id_rubro"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["id_cidudad"] = "Ciudad para el puesto vacante";
	$fieldToolTipsvacancia_pendiente["Spanish"]["id_cidudad"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["id_cidudad"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["id_departamento"] = "Departamento para el puesto vacante";
	$fieldToolTipsvacancia_pendiente["Spanish"]["id_departamento"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["id_departamento"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["tipo_contrato"] = "Tipo de Contrato";
	$fieldToolTipsvacancia_pendiente["Spanish"]["tipo_contrato"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["tipo_contrato"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["documentos"] = "Documentos";
	$fieldToolTipsvacancia_pendiente["Spanish"]["documentos"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["documentos"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["nacionalidad"] = "Nacionalidad";
	$fieldToolTipsvacancia_pendiente["Spanish"]["nacionalidad"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["nacionalidad"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["genero"] = "Sexo";
	$fieldToolTipsvacancia_pendiente["Spanish"]["genero"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["genero"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["id_formacion_academica"] = "Nivel educativo mínimo requerido(Marcar el nivel educativo mínimo para desempeñar en el puesto)";
	$fieldToolTipsvacancia_pendiente["Spanish"]["id_formacion_academica"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["id_formacion_academica"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["movilidad_propia"] = "Movilidad Propia";
	$fieldToolTipsvacancia_pendiente["Spanish"]["movilidad_propia"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["movilidad_propia"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["tipo_movilidad"] = "Tipo de Movilidad";
	$fieldToolTipsvacancia_pendiente["Spanish"]["tipo_movilidad"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["tipo_movilidad"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["id_registro_conducir"] = "Registro de Conducir";
	$fieldToolTipsvacancia_pendiente["Spanish"]["id_registro_conducir"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["id_registro_conducir"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["discapacidad_aceptada"] = "Tipos de Discapacidad Aceptadas para el puesto";
	$fieldToolTipsvacancia_pendiente["Spanish"]["discapacidad_aceptada"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["discapacidad_aceptada"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["edad_rango_bajo"] = "Edad Minima (18 años)";
	$fieldToolTipsvacancia_pendiente["Spanish"]["edad_rango_bajo"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["edad_rango_bajo"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["edad_rango_alto"] = "Edad Máxima (75 años)";
	$fieldToolTipsvacancia_pendiente["Spanish"]["edad_rango_alto"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["edad_rango_alto"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["descripcion_puesto"] = "Descripción del Puesto";
	$fieldToolTipsvacancia_pendiente["Spanish"]["descripcion_puesto"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["descripcion_puesto"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["requisitos_exclu_formacion"] = "Títulos y Certificados";
	$fieldToolTipsvacancia_pendiente["Spanish"]["requisitos_exclu_formacion"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["requisitos_exclu_formacion"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["habilidades_conocimiento"] = "Habilidades & Conocimientos";
	$fieldToolTipsvacancia_pendiente["Spanish"]["habilidades_conocimiento"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["habilidades_conocimiento"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["anos_experiencia_vacancia"] = "Años de Experiencia laboral  Requerida";
	$fieldToolTipsvacancia_pendiente["Spanish"]["anos_experiencia_vacancia"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["anos_experiencia_vacancia"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["ruc"] = "Ruc";
	$fieldToolTipsvacancia_pendiente["Spanish"]["ruc"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["ruc"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["id_vacancia_requisito"] = "Id Vacancia Requisito";
	$fieldToolTipsvacancia_pendiente["Spanish"]["id_vacancia_requisito"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["id_vacancia_requisito"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["legal"] = "Legal";
	$fieldToolTipsvacancia_pendiente["Spanish"]["legal"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["legal"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["salario_final"] = "Remuneración base";
	$fieldToolTipsvacancia_pendiente["Spanish"]["salario_final"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["salario_final"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["fk_ocupacion_puesto"] = "Nombre del Puesto";
	$fieldToolTipsvacancia_pendiente["Spanish"]["fk_ocupacion_puesto"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["fk_ocupacion_puesto"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["meses_experiencia_vacancia"] = "Meses de Experiencia laboral  Requerida";
	$fieldToolTipsvacancia_pendiente["Spanish"]["meses_experiencia_vacancia"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["meses_experiencia_vacancia"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["horario_rotativo"] = "Horario rotativo";
	$fieldToolTipsvacancia_pendiente["Spanish"]["horario_rotativo"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["horario_rotativo"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["modalidad_trabajo"] = "Modalidad Trabajo";
	$fieldToolTipsvacancia_pendiente["Spanish"]["modalidad_trabajo"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["modalidad_trabajo"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["geolocation"] = "Geolocation";
	$fieldToolTipsvacancia_pendiente["Spanish"]["geolocation"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["geolocation"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["descripcion_salario"] = "Descripcion Salario";
	$fieldToolTipsvacancia_pendiente["Spanish"]["descripcion_salario"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["descripcion_salario"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["salario_descripcion"] = "Otras remuneraciones";
	$fieldToolTipsvacancia_pendiente["Spanish"]["salario_descripcion"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["salario_descripcion"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["lavacancias"] = "N° Vacancia";
	$fieldToolTipsvacancia_pendiente["Spanish"]["lavacancias"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["lavacancias"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["estadodevacancias"] = "Estado de la Vacancia";
	$fieldToolTipsvacancia_pendiente["Spanish"]["estadodevacancias"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["estadodevacancias"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["empresa"] = "Empresa";
	$fieldToolTipsvacancia_pendiente["Spanish"]["empresa"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["empresa"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["id_tipo_sucursal"] = "Tipo de establecimiento";
	$fieldToolTipsvacancia_pendiente["Spanish"]["id_tipo_sucursal"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["id_tipo_sucursal"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["tipo_remuneracion"] = "Tipo Remuneración";
	$fieldToolTipsvacancia_pendiente["Spanish"]["tipo_remuneracion"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["tipo_remuneracion"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["otro_tipo_remuneracion"] = "";
	$fieldToolTipsvacancia_pendiente["Spanish"]["otro_tipo_remuneracion"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["otro_tipo_remuneracion"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["otro_tipo_movilidad"] = "";
	$fieldToolTipsvacancia_pendiente["Spanish"]["otro_tipo_movilidad"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["otro_tipo_movilidad"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["sin_discapacidad"] = "";
	$fieldToolTipsvacancia_pendiente["Spanish"]["sin_discapacidad"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["sin_discapacidad"] = "";
	$fieldLabelsvacancia_pendiente["Spanish"]["fk_id_feria_empleo"] = "Feria Empleo:";
	$fieldToolTipsvacancia_pendiente["Spanish"]["fk_id_feria_empleo"] = "";
	$placeHoldersvacancia_pendiente["Spanish"]["fk_id_feria_empleo"] = "";
	if (count($fieldToolTipsvacancia_pendiente["Spanish"]))
		$tdatavacancia_pendiente[".isUseToolTips"] = true;
}


	$tdatavacancia_pendiente[".NCSearch"] = true;



$tdatavacancia_pendiente[".shortTableName"] = "vacancia_pendiente";
$tdatavacancia_pendiente[".nSecOptions"] = 0;

$tdatavacancia_pendiente[".mainTableOwnerID"] = "";
$tdatavacancia_pendiente[".entityType"] = 1;
$tdatavacancia_pendiente[".connId"] = "eportal_at_192_168_70_170";


$tdatavacancia_pendiente[".strOriginalTableName"] = "bolsa_empleo.vacancia";

	



$tdatavacancia_pendiente[".showAddInPopup"] = false;

$tdatavacancia_pendiente[".showEditInPopup"] = false;

$tdatavacancia_pendiente[".showViewInPopup"] = false;

$tdatavacancia_pendiente[".listAjax"] = false;
//	temporary
//$tdatavacancia_pendiente[".listAjax"] = false;

	$tdatavacancia_pendiente[".audit"] = true;

	$tdatavacancia_pendiente[".locking"] = false;


$pages = $tdatavacancia_pendiente[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavacancia_pendiente[".edit"] = true;
	$tdatavacancia_pendiente[".afterEditAction"] = 1;
	$tdatavacancia_pendiente[".closePopupAfterEdit"] = 0;
	$tdatavacancia_pendiente[".afterEditActionDetTable"] = "bolsa_empleo.vacancia_dias_horas";
}

if( $pages[PAGE_ADD] ) {
$tdatavacancia_pendiente[".add"] = true;
$tdatavacancia_pendiente[".afterAddAction"] = 1;
$tdatavacancia_pendiente[".closePopupAfterAdd"] = 1;
$tdatavacancia_pendiente[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavacancia_pendiente[".list"] = true;
}



$tdatavacancia_pendiente[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavacancia_pendiente[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavacancia_pendiente[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavacancia_pendiente[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavacancia_pendiente[".printFriendly"] = true;
}



$tdatavacancia_pendiente[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavacancia_pendiente[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavacancia_pendiente[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavacancia_pendiente[".isUseAjaxSuggest"] = true;



																																																			

$tdatavacancia_pendiente[".ajaxCodeSnippetAdded"] = false;

$tdatavacancia_pendiente[".buttonsAdded"] = false;

$tdatavacancia_pendiente[".addPageEvents"] = true;

// use timepicker for search panel
$tdatavacancia_pendiente[".isUseTimeForSearch"] = false;


$tdatavacancia_pendiente[".badgeColor"] = "E07878";


$tdatavacancia_pendiente[".allSearchFields"] = array();
$tdatavacancia_pendiente[".filterFields"] = array();
$tdatavacancia_pendiente[".requiredSearchFields"] = array();

$tdatavacancia_pendiente[".googleLikeFields"] = array();
$tdatavacancia_pendiente[".googleLikeFields"][] = "id_vacancias";
$tdatavacancia_pendiente[".googleLikeFields"][] = "lavacancias";
$tdatavacancia_pendiente[".googleLikeFields"][] = "id_empresa_sucursal";
$tdatavacancia_pendiente[".googleLikeFields"][] = "empresa";
$tdatavacancia_pendiente[".googleLikeFields"][] = "id_contacto_sucursal";
$tdatavacancia_pendiente[".googleLikeFields"][] = "nombre_puesto";
$tdatavacancia_pendiente[".googleLikeFields"][] = "id_rubro";
$tdatavacancia_pendiente[".googleLikeFields"][] = "id_cidudad";
$tdatavacancia_pendiente[".googleLikeFields"][] = "id_departamento";
$tdatavacancia_pendiente[".googleLikeFields"][] = "salario";
$tdatavacancia_pendiente[".googleLikeFields"][] = "tipo_remuneracion";
$tdatavacancia_pendiente[".googleLikeFields"][] = "otro_tipo_remuneracion";
$tdatavacancia_pendiente[".googleLikeFields"][] = "tipo_contrato";
$tdatavacancia_pendiente[".googleLikeFields"][] = "fecha_expiracion_vacancia";
$tdatavacancia_pendiente[".googleLikeFields"][] = "cantidad_vacancia";
$tdatavacancia_pendiente[".googleLikeFields"][] = "documentos";
$tdatavacancia_pendiente[".googleLikeFields"][] = "nacionalidad";
$tdatavacancia_pendiente[".googleLikeFields"][] = "genero";
$tdatavacancia_pendiente[".googleLikeFields"][] = "id_formacion_academica";
$tdatavacancia_pendiente[".googleLikeFields"][] = "movilidad_propia";
$tdatavacancia_pendiente[".googleLikeFields"][] = "tipo_movilidad";
$tdatavacancia_pendiente[".googleLikeFields"][] = "id_registro_conducir";
$tdatavacancia_pendiente[".googleLikeFields"][] = "discapacidad_aceptada";
$tdatavacancia_pendiente[".googleLikeFields"][] = "sin_discapacidad";
$tdatavacancia_pendiente[".googleLikeFields"][] = "edad_rango_bajo";
$tdatavacancia_pendiente[".googleLikeFields"][] = "edad_rango_alto";
$tdatavacancia_pendiente[".googleLikeFields"][] = "descripcion_puesto";
$tdatavacancia_pendiente[".googleLikeFields"][] = "requisitos_exclu_formacion";
$tdatavacancia_pendiente[".googleLikeFields"][] = "habilidades_conocimiento";
$tdatavacancia_pendiente[".googleLikeFields"][] = "anos_experiencia_vacancia";
$tdatavacancia_pendiente[".googleLikeFields"][] = "id_estado_vacancia";
$tdatavacancia_pendiente[".googleLikeFields"][] = "estadodevacancias";
$tdatavacancia_pendiente[".googleLikeFields"][] = "fecha_creacion_vacancia";
$tdatavacancia_pendiente[".googleLikeFields"][] = "ruc";
$tdatavacancia_pendiente[".googleLikeFields"][] = "id_vacancia_requisito";
$tdatavacancia_pendiente[".googleLikeFields"][] = "legal";
$tdatavacancia_pendiente[".googleLikeFields"][] = "salario_final";
$tdatavacancia_pendiente[".googleLikeFields"][] = "fk_ocupacion_puesto";
$tdatavacancia_pendiente[".googleLikeFields"][] = "meses_experiencia_vacancia";
$tdatavacancia_pendiente[".googleLikeFields"][] = "horario_rotativo";
$tdatavacancia_pendiente[".googleLikeFields"][] = "modalidad_trabajo";
$tdatavacancia_pendiente[".googleLikeFields"][] = "geolocation";
$tdatavacancia_pendiente[".googleLikeFields"][] = "descripcion_salario";
$tdatavacancia_pendiente[".googleLikeFields"][] = "salario_descripcion";
$tdatavacancia_pendiente[".googleLikeFields"][] = "otro_tipo_movilidad";
$tdatavacancia_pendiente[".googleLikeFields"][] = "id_tipo_sucursal";
$tdatavacancia_pendiente[".googleLikeFields"][] = "fk_id_feria_empleo";
$tdatavacancia_pendiente[".googleLikeFields"][] = "descripcion";



$tdatavacancia_pendiente[".tableType"] = "list";

$tdatavacancia_pendiente[".printerPageOrientation"] = 0;
$tdatavacancia_pendiente[".nPrinterPageScale"] = 100;

$tdatavacancia_pendiente[".nPrinterSplitRecords"] = 40;

$tdatavacancia_pendiente[".geocodingEnabled"] = false;










$tdatavacancia_pendiente[".pageSize"] = 20;

$tdatavacancia_pendiente[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY bolsa_empleo.vacancia.fecha_creacion_vacancia DESC, bolsa_empleo.vacancia.id_estado_vacancia";
$tdatavacancia_pendiente[".strOrderBy"] = $tstrOrderBy;

$tdatavacancia_pendiente[".orderindexes"] = array();
			$tdatavacancia_pendiente[".orderindexes"][] = array(33, (0 ? "ASC" : "DESC"), "bolsa_empleo.vacancia.fecha_creacion_vacancia");
			$tdatavacancia_pendiente[".orderindexes"][] = array(31, (1 ? "ASC" : "DESC"), "bolsa_empleo.vacancia.id_estado_vacancia");


$tdatavacancia_pendiente[".sqlHead"] = "SELECT bolsa_empleo.vacancia.id_vacancias,  bolsa_empleo.vacancia.id_vacancias AS lavacancias,  bolsa_empleo.vacancia_empresa.id_empresa_sucursal,  bolsa_empleo.vacancia_empresa.id_empresa_sucursal AS empresa,  bolsa_empleo.vacancia_empresa.id_contacto_sucursal,  bolsa_empleo.vacancia_puesto.nombre_puesto,  bolsa_empleo.vacancia_puesto.id_rubro,  bolsa_empleo.vacancia_empresa.id_cidudad,  bolsa_empleo.vacancia_empresa.id_departamento,  bolsa_empleo.vacancia_puesto.salario,  '' AS tipo_remuneracion,  '' AS otro_tipo_remuneracion,  bolsa_empleo.vacancia_puesto.tipo_contrato,  bolsa_empleo.vacancia.fecha_expiracion_vacancia,  bolsa_empleo.vacancia.cantidad_vacancia,  bolsa_empleo.vacancia_requisito.documentos,  bolsa_empleo.vacancia_requisito.nacionalidad,  bolsa_empleo.vacancia_requisito.genero,  bolsa_empleo.vacancia_requisito.id_formacion_academica,  bolsa_empleo.vacancia_requisito.movilidad_propia,  bolsa_empleo.vacancia_requisito.tipo_movilidad,  bolsa_empleo.vacancia_requisito.id_registro_conducir,  bolsa_empleo.vacancia_requisito.discapacidad_aceptada,  '' AS sin_discapacidad,  '' AS edad_rango_bajo,  '' AS edad_rango_alto,  bolsa_empleo.vacancia_puesto.descripcion_puesto,  bolsa_empleo.vacancia_requisito.requisitos_exclu_formacion,  bolsa_empleo.vacancia_requisito.habilidades_conocimiento,  bolsa_empleo.vacancia_puesto.anos_experiencia_vacancia,  bolsa_empleo.vacancia.id_estado_vacancia,  bolsa_empleo.vacancia.id_estado_vacancia AS estadodevacancias,  bolsa_empleo.vacancia.fecha_creacion_vacancia,  bolsa_empleo.empresas_bolsa_sucursales.ruc,  bolsa_empleo.vacancia_requisito.id_vacancia_requisito,  bolsa_empleo.empresas_bolsa_sucursales.legal,  '' AS salario_final,  bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto,  bolsa_empleo.vacancia_puesto.meses_experiencia_vacancia,  bolsa_empleo.vacancia_puesto.horario_rotativo AS horario_rotativo,  bolsa_empleo.vacancia_puesto.modalidad_trabajo,  bolsa_empleo.vacancia.geolocation,  bolsa_empleo.vacancia_puesto.descripcion_salario,  '' AS salario_descripcion,  '' AS otro_tipo_movilidad,  bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal,  bolsa_empleo.vacancia.fk_id_feria_empleo,  bolsa_empleo.ocupaciones_nuevas.descripcion";
$tdatavacancia_pendiente[".sqlFrom"] = "FROM bolsa_empleo.vacancia  INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia  INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia  INNER JOIN bolsa_empleo.vacancia_requisito ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_requisito.id_vacancia  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id  INNER JOIN bolsa_empleo.ocupaciones_nuevas ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.ocupaciones_nuevas.id_ocu_puest_clasic";
$tdatavacancia_pendiente[".sqlWhereExpr"] = "(bolsa_empleo.vacancia.id_estado_vacancia ='1')";
$tdatavacancia_pendiente[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavacancia_pendiente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavacancia_pendiente[".arrGroupsPerPage"] = $arrGPP;

$tdatavacancia_pendiente[".highlightSearchResults"] = true;

$tableKeysvacancia_pendiente = array();
$tableKeysvacancia_pendiente[] = "id_vacancias";
$tdatavacancia_pendiente[".Keys"] = $tableKeysvacancia_pendiente;


$tdatavacancia_pendiente[".hideMobileList"] = array();




//	id_vacancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_vacancias";
	$fdata["GoodName"] = "id_vacancias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","id_vacancias");
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


	$tdatavacancia_pendiente["id_vacancias"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "id_vacancias";
//	lavacancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lavacancias";
	$fdata["GoodName"] = "lavacancias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","lavacancias");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_vacancias";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatavacancia_pendiente["lavacancias"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "lavacancias";
//	id_empresa_sucursal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_empresa_sucursal";
	$fdata["GoodName"] = "id_empresa_sucursal";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","id_empresa_sucursal");
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
	$edata["LookupTable"] = "bolsa_empleo.empresas_bolsa_sucursales4";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ruc||' - '||nro_patronal|| '-  ' ||legal|| '-  ' ||direccion||'- '||descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_contacto_sucursal";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_rubro";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_tipo_sucursal";

	
	
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


	$tdatavacancia_pendiente["id_empresa_sucursal"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "id_empresa_sucursal";
//	empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "empresa";
	$fdata["GoodName"] = "empresa";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","empresa");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_empresa_sucursal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_empresa.id_empresa_sucursal";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ruc|| ' - '||legal";

	

		$edata["CustomDisplay"] = "true";

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


	$tdatavacancia_pendiente["empresa"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "empresa";
//	id_contacto_sucursal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_contacto_sucursal";
	$fdata["GoodName"] = "id_contacto_sucursal";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","id_contacto_sucursal");
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
	$edata["LookupTable"] = "bolsa_empleo.empresa_bolsa_contactos1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "empresa_bolsa_id_contacto";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "nombre||' - '||telefono";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "nombre";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_empresa_sucursal", "lookup" => "id" );

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


	$tdatavacancia_pendiente["id_contacto_sucursal"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "id_contacto_sucursal";
//	nombre_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombre_puesto";
	$fdata["GoodName"] = "nombre_puesto";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","nombre_puesto");
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


	$tdatavacancia_pendiente["nombre_puesto"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "nombre_puesto";
//	id_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_rubro";
	$fdata["GoodName"] = "id_rubro";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","id_rubro");
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
	$edata["LookupTable"] = "bolsa_empleo.empresas_bolsa_sucursales5";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_activ_econ";
	$edata["LinkFieldType"] = 3;
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


	$tdatavacancia_pendiente["id_rubro"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "id_rubro";
//	id_cidudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id_cidudad";
	$fdata["GoodName"] = "id_cidudad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","id_cidudad");
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


	$tdatavacancia_pendiente["id_cidudad"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "id_cidudad";
//	id_departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id_departamento";
	$fdata["GoodName"] = "id_departamento";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","id_departamento");
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


	$tdatavacancia_pendiente["id_departamento"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "id_departamento";
//	salario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "salario";
	$fdata["GoodName"] = "salario";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","salario");
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


	$tdatavacancia_pendiente["salario"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "salario";
//	tipo_remuneracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tipo_remuneracion";
	$fdata["GoodName"] = "tipo_remuneracion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","tipo_remuneracion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "tipo_remuneracion";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.tipo_remuneracion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id_tipo_remuneracion";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

				$edata["LookupWhere"] = "id_tipo_remuneracion>6 or id_tipo_remuneracion<=1";


	
	$edata["LookupOrderBy"] = "descripcion";

	
	
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


	$tdatavacancia_pendiente["tipo_remuneracion"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "tipo_remuneracion";
//	otro_tipo_remuneracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "otro_tipo_remuneracion";
	$fdata["GoodName"] = "otro_tipo_remuneracion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","otro_tipo_remuneracion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "otro_tipo_remuneracion";

	
	
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

				$edata["LookupWhere"] = "id_tipo_remuneracion >6";


	
	$edata["LookupOrderBy"] = "descripcion";

	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatavacancia_pendiente["otro_tipo_remuneracion"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "otro_tipo_remuneracion";
//	tipo_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "tipo_contrato";
	$fdata["GoodName"] = "tipo_contrato";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","tipo_contrato");
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

				$edata["LookupWhere"] = "id_tipo_contrato <> 4 and id_tipo_contrato <> 5";


	
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


	$tdatavacancia_pendiente["tipo_contrato"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "tipo_contrato";
//	fecha_expiracion_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "fecha_expiracion_vacancia";
	$fdata["GoodName"] = "fecha_expiracion_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","fecha_expiracion_vacancia");
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


	$tdatavacancia_pendiente["fecha_expiracion_vacancia"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "fecha_expiracion_vacancia";
//	cantidad_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cantidad_vacancia";
	$fdata["GoodName"] = "cantidad_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","cantidad_vacancia");
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
			$edata["EditParams"].= " maxlength=1";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");
				$edata["validateAs"]["regExp"] = "^(?!0\$)\\d+\$";
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


	$tdatavacancia_pendiente["cantidad_vacancia"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "cantidad_vacancia";
//	documentos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "documentos";
	$fdata["GoodName"] = "documentos";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","documentos");
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


	$tdatavacancia_pendiente["documentos"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "documentos";
//	nacionalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "nacionalidad";
	$fdata["GoodName"] = "nacionalidad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","nacionalidad");
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


	$tdatavacancia_pendiente["nacionalidad"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "nacionalidad";
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","genero");
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


	$tdatavacancia_pendiente["genero"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "genero";
//	id_formacion_academica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "id_formacion_academica";
	$fdata["GoodName"] = "id_formacion_academica";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","id_formacion_academica");
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


	$tdatavacancia_pendiente["id_formacion_academica"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "id_formacion_academica";
//	movilidad_propia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "movilidad_propia";
	$fdata["GoodName"] = "movilidad_propia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","movilidad_propia");
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


	$tdatavacancia_pendiente["movilidad_propia"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "movilidad_propia";
//	tipo_movilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "tipo_movilidad";
	$fdata["GoodName"] = "tipo_movilidad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","tipo_movilidad");
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
		$edata["LCType"] = 0;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id_tipo_movilidad";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
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


	$tdatavacancia_pendiente["tipo_movilidad"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "tipo_movilidad";
//	id_registro_conducir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "id_registro_conducir";
	$fdata["GoodName"] = "id_registro_conducir";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","id_registro_conducir");
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


	$tdatavacancia_pendiente["id_registro_conducir"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "id_registro_conducir";
//	discapacidad_aceptada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "discapacidad_aceptada";
	$fdata["GoodName"] = "discapacidad_aceptada";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","discapacidad_aceptada");
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


	$tdatavacancia_pendiente["discapacidad_aceptada"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "discapacidad_aceptada";
//	sin_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "sin_discapacidad";
	$fdata["GoodName"] = "sin_discapacidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","sin_discapacidad");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "sin_discapacidad";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Ninguna";

		$edata["Multiselect"] = true;

	
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


	$tdatavacancia_pendiente["sin_discapacidad"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "sin_discapacidad";
//	edad_rango_bajo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "edad_rango_bajo";
	$fdata["GoodName"] = "edad_rango_bajo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","edad_rango_bajo");
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
				$edata["validateAs"]["regExp"] = "^(1[8-9]|[2-6]\\d|7[0-5])\$";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "Mayor a 18 años", "messageType" => "Text");
				
	
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


	$tdatavacancia_pendiente["edad_rango_bajo"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "edad_rango_bajo";
//	edad_rango_alto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "edad_rango_alto";
	$fdata["GoodName"] = "edad_rango_alto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","edad_rango_alto");
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
				$edata["validateAs"]["regExp"] = "^(1[8-9]|[2-6]\\d|7[0-5])\$";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "edad mayor o igual a 18 años y menor o igual a 75 años", "messageType" => "Text");
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


	$tdatavacancia_pendiente["edad_rango_alto"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "edad_rango_alto";
//	descripcion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "descripcion_puesto";
	$fdata["GoodName"] = "descripcion_puesto";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","descripcion_puesto");
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


	$tdatavacancia_pendiente["descripcion_puesto"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "descripcion_puesto";
//	requisitos_exclu_formacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "requisitos_exclu_formacion";
	$fdata["GoodName"] = "requisitos_exclu_formacion";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","requisitos_exclu_formacion");
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


	$tdatavacancia_pendiente["requisitos_exclu_formacion"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "requisitos_exclu_formacion";
//	habilidades_conocimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "habilidades_conocimiento";
	$fdata["GoodName"] = "habilidades_conocimiento";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","habilidades_conocimiento");
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


	$tdatavacancia_pendiente["habilidades_conocimiento"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "habilidades_conocimiento";
//	anos_experiencia_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "anos_experiencia_vacancia";
	$fdata["GoodName"] = "anos_experiencia_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","anos_experiencia_vacancia");
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


	$tdatavacancia_pendiente["anos_experiencia_vacancia"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "anos_experiencia_vacancia";
//	id_estado_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "id_estado_vacancia";
	$fdata["GoodName"] = "id_estado_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","id_estado_vacancia");
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
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "estado";

	

	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatavacancia_pendiente["id_estado_vacancia"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "id_estado_vacancia";
//	estadodevacancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "estadodevacancias";
	$fdata["GoodName"] = "estadodevacancias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","estadodevacancias");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_estado_vacancia";

	
	
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


	$tdatavacancia_pendiente["estadodevacancias"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "estadodevacancias";
//	fecha_creacion_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "fecha_creacion_vacancia";
	$fdata["GoodName"] = "fecha_creacion_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","fecha_creacion_vacancia");
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


	$tdatavacancia_pendiente["fecha_creacion_vacancia"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "fecha_creacion_vacancia";
//	ruc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "ruc";
	$fdata["GoodName"] = "ruc";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","ruc");
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

	$edata["LookupOrderBy"] = "legal";

	
	
	
	

	
	
	
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


	$tdatavacancia_pendiente["ruc"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "ruc";
//	id_vacancia_requisito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "id_vacancia_requisito";
	$fdata["GoodName"] = "id_vacancia_requisito";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","id_vacancia_requisito");
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


	$tdatavacancia_pendiente["id_vacancia_requisito"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "id_vacancia_requisito";
//	legal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "legal";
	$fdata["GoodName"] = "legal";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","legal");
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


	$tdatavacancia_pendiente["legal"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "legal";
//	salario_final
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "salario_final";
	$fdata["GoodName"] = "salario_final";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","salario_final");
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


	$tdatavacancia_pendiente["salario_final"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "salario_final";
//	fk_ocupacion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "fk_ocupacion_puesto";
	$fdata["GoodName"] = "fk_ocupacion_puesto";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","fk_ocupacion_puesto");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatavacancia_pendiente["fk_ocupacion_puesto"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "fk_ocupacion_puesto";
//	meses_experiencia_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "meses_experiencia_vacancia";
	$fdata["GoodName"] = "meses_experiencia_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","meses_experiencia_vacancia");
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


	$tdatavacancia_pendiente["meses_experiencia_vacancia"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "meses_experiencia_vacancia";
//	horario_rotativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "horario_rotativo";
	$fdata["GoodName"] = "horario_rotativo";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","horario_rotativo");
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatavacancia_pendiente["horario_rotativo"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "horario_rotativo";
//	modalidad_trabajo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "modalidad_trabajo";
	$fdata["GoodName"] = "modalidad_trabajo";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","modalidad_trabajo");
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


	$tdatavacancia_pendiente["modalidad_trabajo"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "modalidad_trabajo";
//	geolocation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "geolocation";
	$fdata["GoodName"] = "geolocation";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","geolocation");
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


	$tdatavacancia_pendiente["geolocation"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "geolocation";
//	descripcion_salario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "descripcion_salario";
	$fdata["GoodName"] = "descripcion_salario";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","descripcion_salario");
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


	$tdatavacancia_pendiente["descripcion_salario"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "descripcion_salario";
//	salario_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "salario_descripcion";
	$fdata["GoodName"] = "salario_descripcion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","salario_descripcion");
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


	$tdatavacancia_pendiente["salario_descripcion"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "salario_descripcion";
//	otro_tipo_movilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "otro_tipo_movilidad";
	$fdata["GoodName"] = "otro_tipo_movilidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","otro_tipo_movilidad");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "otro_tipo_movilidad";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Ninguna";

		$edata["Multiselect"] = true;

	
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


	$tdatavacancia_pendiente["otro_tipo_movilidad"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "otro_tipo_movilidad";
//	id_tipo_sucursal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "id_tipo_sucursal";
	$fdata["GoodName"] = "id_tipo_sucursal";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","id_tipo_sucursal");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_tipo_sucursal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.empresas_bolsa_sucursales3";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_tipo_sucursal";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "name";

	
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


	$tdatavacancia_pendiente["id_tipo_sucursal"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "id_tipo_sucursal";
//	fk_id_feria_empleo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "fk_id_feria_empleo";
	$fdata["GoodName"] = "fk_id_feria_empleo";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","fk_id_feria_empleo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_feria_empleo";

		$fdata["sourceSingle"] = "fk_id_feria_empleo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia.fk_id_feria_empleo";

	
	
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdatavacancia_pendiente["fk_id_feria_empleo"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "fk_id_feria_empleo";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.ocupaciones_nuevas";
	$fdata["Label"] = GetFieldLabel("vacancia_pendiente","descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.ocupaciones_nuevas.descripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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


	$tdatavacancia_pendiente["descripcion"] = $fdata;
		$tdatavacancia_pendiente[".searchableFields"][] = "descripcion";


$tables_data["vacancia_pendiente"]=&$tdatavacancia_pendiente;
$field_labels["vacancia_pendiente"] = &$fieldLabelsvacancia_pendiente;
$fieldToolTips["vacancia_pendiente"] = &$fieldToolTipsvacancia_pendiente;
$placeHolders["vacancia_pendiente"] = &$placeHoldersvacancia_pendiente;
$page_titles["vacancia_pendiente"] = &$pageTitlesvacancia_pendiente;


changeTextControlsToDate( "vacancia_pendiente" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vacancia_pendiente"] = array();
//	bolsa_empleo.vacancia_dias_horas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.vacancia_dias_horas";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.vacancia_dias_horas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vacancia_dias_horas";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_vacancia_dias_horas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["vacancia_pendiente"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vacancia_pendiente"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vacancia_pendiente"][$dIndex]["masterKeys"][]="id_vacancias";

				$detailsTablesData["vacancia_pendiente"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vacancia_pendiente"][$dIndex]["detailKeys"][]="id_vacancias";
//	bolsa_empleo.vacancia_requisito_idioma
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.vacancia_requisito_idioma";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.vacancia_requisito_idioma";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vacancia_requisito_idioma";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_vacancia_requisito_idioma");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["vacancia_pendiente"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vacancia_pendiente"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vacancia_pendiente"][$dIndex]["masterKeys"][]="id_vacancias";

				$detailsTablesData["vacancia_pendiente"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vacancia_pendiente"][$dIndex]["detailKeys"][]="id_vacancia";
//	bolsa_empleo.vacancia_requisito_programa
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.vacancia_requisito_programa";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.vacancia_requisito_programa";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vacancia_requisito_programa";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_vacancia_requisito_programa");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["vacancia_pendiente"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vacancia_pendiente"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vacancia_pendiente"][$dIndex]["masterKeys"][]="id_vacancias";

				$detailsTablesData["vacancia_pendiente"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vacancia_pendiente"][$dIndex]["detailKeys"][]="fk_id_vacancia";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vacancia_pendiente"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vacancia_pendiente()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bolsa_empleo.vacancia.id_vacancias,  bolsa_empleo.vacancia.id_vacancias AS lavacancias,  bolsa_empleo.vacancia_empresa.id_empresa_sucursal,  bolsa_empleo.vacancia_empresa.id_empresa_sucursal AS empresa,  bolsa_empleo.vacancia_empresa.id_contacto_sucursal,  bolsa_empleo.vacancia_puesto.nombre_puesto,  bolsa_empleo.vacancia_puesto.id_rubro,  bolsa_empleo.vacancia_empresa.id_cidudad,  bolsa_empleo.vacancia_empresa.id_departamento,  bolsa_empleo.vacancia_puesto.salario,  '' AS tipo_remuneracion,  '' AS otro_tipo_remuneracion,  bolsa_empleo.vacancia_puesto.tipo_contrato,  bolsa_empleo.vacancia.fecha_expiracion_vacancia,  bolsa_empleo.vacancia.cantidad_vacancia,  bolsa_empleo.vacancia_requisito.documentos,  bolsa_empleo.vacancia_requisito.nacionalidad,  bolsa_empleo.vacancia_requisito.genero,  bolsa_empleo.vacancia_requisito.id_formacion_academica,  bolsa_empleo.vacancia_requisito.movilidad_propia,  bolsa_empleo.vacancia_requisito.tipo_movilidad,  bolsa_empleo.vacancia_requisito.id_registro_conducir,  bolsa_empleo.vacancia_requisito.discapacidad_aceptada,  '' AS sin_discapacidad,  '' AS edad_rango_bajo,  '' AS edad_rango_alto,  bolsa_empleo.vacancia_puesto.descripcion_puesto,  bolsa_empleo.vacancia_requisito.requisitos_exclu_formacion,  bolsa_empleo.vacancia_requisito.habilidades_conocimiento,  bolsa_empleo.vacancia_puesto.anos_experiencia_vacancia,  bolsa_empleo.vacancia.id_estado_vacancia,  bolsa_empleo.vacancia.id_estado_vacancia AS estadodevacancias,  bolsa_empleo.vacancia.fecha_creacion_vacancia,  bolsa_empleo.empresas_bolsa_sucursales.ruc,  bolsa_empleo.vacancia_requisito.id_vacancia_requisito,  bolsa_empleo.empresas_bolsa_sucursales.legal,  '' AS salario_final,  bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto,  bolsa_empleo.vacancia_puesto.meses_experiencia_vacancia,  bolsa_empleo.vacancia_puesto.horario_rotativo AS horario_rotativo,  bolsa_empleo.vacancia_puesto.modalidad_trabajo,  bolsa_empleo.vacancia.geolocation,  bolsa_empleo.vacancia_puesto.descripcion_salario,  '' AS salario_descripcion,  '' AS otro_tipo_movilidad,  bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal,  bolsa_empleo.vacancia.fk_id_feria_empleo,  bolsa_empleo.ocupaciones_nuevas.descripcion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vacancia  INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia  INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia  INNER JOIN bolsa_empleo.vacancia_requisito ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_requisito.id_vacancia  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id  INNER JOIN bolsa_empleo.ocupaciones_nuevas ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.ocupaciones_nuevas.id_ocu_puest_clasic";
$proto0["m_strWhere"] = "(bolsa_empleo.vacancia.id_estado_vacancia ='1')";
$proto0["m_strOrderBy"] = "ORDER BY bolsa_empleo.vacancia.fecha_creacion_vacancia DESC, bolsa_empleo.vacancia.id_estado_vacancia";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "bolsa_empleo.vacancia.id_estado_vacancia ='1'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_estado_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "='1'";
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
	"m_srcTableName" => "vacancia_pendiente"
));

$proto6["m_sql"] = "bolsa_empleo.vacancia.id_vacancias";
$proto6["m_srcTableName"] = "vacancia_pendiente";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto8["m_sql"] = "bolsa_empleo.vacancia.id_vacancias";
$proto8["m_srcTableName"] = "vacancia_pendiente";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "lavacancias";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_empresa_sucursal",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto10["m_sql"] = "bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto10["m_srcTableName"] = "vacancia_pendiente";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_empresa_sucursal",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto12["m_sql"] = "bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto12["m_srcTableName"] = "vacancia_pendiente";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "empresa";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_contacto_sucursal",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto14["m_sql"] = "bolsa_empleo.vacancia_empresa.id_contacto_sucursal";
$proto14["m_srcTableName"] = "vacancia_pendiente";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_puesto",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto16["m_sql"] = "bolsa_empleo.vacancia_puesto.nombre_puesto";
$proto16["m_srcTableName"] = "vacancia_pendiente";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_rubro",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto18["m_sql"] = "bolsa_empleo.vacancia_puesto.id_rubro";
$proto18["m_srcTableName"] = "vacancia_pendiente";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cidudad",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto20["m_sql"] = "bolsa_empleo.vacancia_empresa.id_cidudad";
$proto20["m_srcTableName"] = "vacancia_pendiente";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "id_departamento",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto22["m_sql"] = "bolsa_empleo.vacancia_empresa.id_departamento";
$proto22["m_srcTableName"] = "vacancia_pendiente";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "salario",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto24["m_sql"] = "bolsa_empleo.vacancia_puesto.salario";
$proto24["m_srcTableName"] = "vacancia_pendiente";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto26["m_sql"] = "''";
$proto26["m_srcTableName"] = "vacancia_pendiente";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "tipo_remuneracion";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto28["m_sql"] = "''";
$proto28["m_srcTableName"] = "vacancia_pendiente";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "otro_tipo_remuneracion";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_contrato",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto30["m_sql"] = "bolsa_empleo.vacancia_puesto.tipo_contrato";
$proto30["m_srcTableName"] = "vacancia_pendiente";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_expiracion_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto32["m_sql"] = "bolsa_empleo.vacancia.fecha_expiracion_vacancia";
$proto32["m_srcTableName"] = "vacancia_pendiente";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto34["m_sql"] = "bolsa_empleo.vacancia.cantidad_vacancia";
$proto34["m_srcTableName"] = "vacancia_pendiente";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "documentos",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto36["m_sql"] = "bolsa_empleo.vacancia_requisito.documentos";
$proto36["m_srcTableName"] = "vacancia_pendiente";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto38["m_sql"] = "bolsa_empleo.vacancia_requisito.nacionalidad";
$proto38["m_srcTableName"] = "vacancia_pendiente";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto40["m_sql"] = "bolsa_empleo.vacancia_requisito.genero";
$proto40["m_srcTableName"] = "vacancia_pendiente";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "id_formacion_academica",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto42["m_sql"] = "bolsa_empleo.vacancia_requisito.id_formacion_academica";
$proto42["m_srcTableName"] = "vacancia_pendiente";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "movilidad_propia",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto44["m_sql"] = "bolsa_empleo.vacancia_requisito.movilidad_propia";
$proto44["m_srcTableName"] = "vacancia_pendiente";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_movilidad",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto46["m_sql"] = "bolsa_empleo.vacancia_requisito.tipo_movilidad";
$proto46["m_srcTableName"] = "vacancia_pendiente";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "id_registro_conducir",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto48["m_sql"] = "bolsa_empleo.vacancia_requisito.id_registro_conducir";
$proto48["m_srcTableName"] = "vacancia_pendiente";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "discapacidad_aceptada",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto50["m_sql"] = "bolsa_empleo.vacancia_requisito.discapacidad_aceptada";
$proto50["m_srcTableName"] = "vacancia_pendiente";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto52["m_sql"] = "''";
$proto52["m_srcTableName"] = "vacancia_pendiente";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "sin_discapacidad";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto54["m_sql"] = "''";
$proto54["m_srcTableName"] = "vacancia_pendiente";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "edad_rango_bajo";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto56["m_sql"] = "''";
$proto56["m_srcTableName"] = "vacancia_pendiente";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "edad_rango_alto";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_puesto",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto58["m_sql"] = "bolsa_empleo.vacancia_puesto.descripcion_puesto";
$proto58["m_srcTableName"] = "vacancia_pendiente";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "requisitos_exclu_formacion",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto60["m_sql"] = "bolsa_empleo.vacancia_requisito.requisitos_exclu_formacion";
$proto60["m_srcTableName"] = "vacancia_pendiente";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "habilidades_conocimiento",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto62["m_sql"] = "bolsa_empleo.vacancia_requisito.habilidades_conocimiento";
$proto62["m_srcTableName"] = "vacancia_pendiente";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "anos_experiencia_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto64["m_sql"] = "bolsa_empleo.vacancia_puesto.anos_experiencia_vacancia";
$proto64["m_srcTableName"] = "vacancia_pendiente";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "id_estado_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto66["m_sql"] = "bolsa_empleo.vacancia.id_estado_vacancia";
$proto66["m_srcTableName"] = "vacancia_pendiente";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "id_estado_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto68["m_sql"] = "bolsa_empleo.vacancia.id_estado_vacancia";
$proto68["m_srcTableName"] = "vacancia_pendiente";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "estadodevacancias";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_creacion_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto70["m_sql"] = "bolsa_empleo.vacancia.fecha_creacion_vacancia";
$proto70["m_srcTableName"] = "vacancia_pendiente";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto72["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.ruc";
$proto72["m_srcTableName"] = "vacancia_pendiente";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancia_requisito",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto74["m_sql"] = "bolsa_empleo.vacancia_requisito.id_vacancia_requisito";
$proto74["m_srcTableName"] = "vacancia_pendiente";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "legal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto76["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.legal";
$proto76["m_srcTableName"] = "vacancia_pendiente";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto78["m_sql"] = "''";
$proto78["m_srcTableName"] = "vacancia_pendiente";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "salario_final";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_ocupacion_puesto",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto80["m_sql"] = "bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto80["m_srcTableName"] = "vacancia_pendiente";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "meses_experiencia_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto82["m_sql"] = "bolsa_empleo.vacancia_puesto.meses_experiencia_vacancia";
$proto82["m_srcTableName"] = "vacancia_pendiente";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "horario_rotativo",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto84["m_sql"] = "bolsa_empleo.vacancia_puesto.horario_rotativo";
$proto84["m_srcTableName"] = "vacancia_pendiente";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "horario_rotativo";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "modalidad_trabajo",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto86["m_sql"] = "bolsa_empleo.vacancia_puesto.modalidad_trabajo";
$proto86["m_srcTableName"] = "vacancia_pendiente";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "geolocation",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto88["m_sql"] = "bolsa_empleo.vacancia.geolocation";
$proto88["m_srcTableName"] = "vacancia_pendiente";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_salario",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto90["m_sql"] = "bolsa_empleo.vacancia_puesto.descripcion_salario";
$proto90["m_srcTableName"] = "vacancia_pendiente";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto92["m_sql"] = "''";
$proto92["m_srcTableName"] = "vacancia_pendiente";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "salario_descripcion";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto94["m_sql"] = "''";
$proto94["m_srcTableName"] = "vacancia_pendiente";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "otro_tipo_movilidad";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "id_tipo_sucursal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto96["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id_tipo_sucursal";
$proto96["m_srcTableName"] = "vacancia_pendiente";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_feria_empleo",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto98["m_sql"] = "bolsa_empleo.vacancia.fk_id_feria_empleo";
$proto98["m_srcTableName"] = "vacancia_pendiente";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.ocupaciones_nuevas",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto100["m_sql"] = "bolsa_empleo.ocupaciones_nuevas.descripcion";
$proto100["m_srcTableName"] = "vacancia_pendiente";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto102=array();
$proto102["m_link"] = "SQLL_MAIN";
			$proto103=array();
$proto103["m_strName"] = "bolsa_empleo.vacancia";
$proto103["m_srcTableName"] = "vacancia_pendiente";
$proto103["m_columns"] = array();
$proto103["m_columns"][] = "id_vacancias";
$proto103["m_columns"][] = "fecha_creacion_vacancia";
$proto103["m_columns"][] = "id_estado_vacancia";
$proto103["m_columns"][] = "fecha_expiracion_vacancia";
$proto103["m_columns"][] = "cantidad_vacancia";
$proto103["m_columns"][] = "geolocation";
$proto103["m_columns"][] = "fk_id_feria_empleo";
$proto103["m_columns"][] = "usuario";
$proto103["m_columns"][] = "origen";
$proto103["m_columns"][] = "imagen_perfil";
$obj = new SQLTable($proto103);

$proto102["m_table"] = $obj;
$proto102["m_sql"] = "bolsa_empleo.vacancia";
$proto102["m_alias"] = "";
$proto102["m_srcTableName"] = "vacancia_pendiente";
$proto104=array();
$proto104["m_sql"] = "";
$proto104["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto104["m_column"]=$obj;
$proto104["m_contained"] = array();
$proto104["m_strCase"] = "";
$proto104["m_havingmode"] = false;
$proto104["m_inBrackets"] = false;
$proto104["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto104);

$proto102["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto102);

$proto0["m_fromlist"][]=$obj;
												$proto106=array();
$proto106["m_link"] = "SQLL_INNERJOIN";
			$proto107=array();
$proto107["m_strName"] = "bolsa_empleo.vacancia_empresa";
$proto107["m_srcTableName"] = "vacancia_pendiente";
$proto107["m_columns"] = array();
$proto107["m_columns"][] = "id_empresa_vacancia";
$proto107["m_columns"][] = "id_empresa_sucursal";
$proto107["m_columns"][] = "id_contacto_sucursal";
$proto107["m_columns"][] = "id_cidudad";
$proto107["m_columns"][] = "id_departamento";
$proto107["m_columns"][] = "id_vacancia";
$obj = new SQLTable($proto107);

$proto106["m_table"] = $obj;
$proto106["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia";
$proto106["m_alias"] = "";
$proto106["m_srcTableName"] = "vacancia_pendiente";
$proto108=array();
$proto108["m_sql"] = "bolsa_empleo.vacancia_empresa.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto108["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto108["m_column"]=$obj;
$proto108["m_contained"] = array();
$proto108["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto108["m_havingmode"] = false;
$proto108["m_inBrackets"] = false;
$proto108["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto108);

$proto106["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto106);

$proto0["m_fromlist"][]=$obj;
												$proto110=array();
$proto110["m_link"] = "SQLL_INNERJOIN";
			$proto111=array();
$proto111["m_strName"] = "bolsa_empleo.vacancia_puesto";
$proto111["m_srcTableName"] = "vacancia_pendiente";
$proto111["m_columns"] = array();
$proto111["m_columns"][] = "id_puesto_vacancia";
$proto111["m_columns"][] = "nombre_puesto";
$proto111["m_columns"][] = "salario";
$proto111["m_columns"][] = "tipo_contrato";
$proto111["m_columns"][] = "descripcion_puesto";
$proto111["m_columns"][] = "id_vacancia";
$proto111["m_columns"][] = "id_rubro";
$proto111["m_columns"][] = "anos_experiencia_vacancia";
$proto111["m_columns"][] = "fk_ocupacion_puesto";
$proto111["m_columns"][] = "meses_experiencia_vacancia";
$proto111["m_columns"][] = "horario_rotativo";
$proto111["m_columns"][] = "beneficios";
$proto111["m_columns"][] = "modalidad_trabajo";
$proto111["m_columns"][] = "descripcion_salario";
$proto111["m_columns"][] = "color";
$proto111["m_columns"][] = "tipo_remuneracion";
$obj = new SQLTable($proto111);

$proto110["m_table"] = $obj;
$proto110["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia";
$proto110["m_alias"] = "";
$proto110["m_srcTableName"] = "vacancia_pendiente";
$proto112=array();
$proto112["m_sql"] = "bolsa_empleo.vacancia_puesto.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto112["m_havingmode"] = false;
$proto112["m_inBrackets"] = false;
$proto112["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto112);

$proto110["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto110);

$proto0["m_fromlist"][]=$obj;
												$proto114=array();
$proto114["m_link"] = "SQLL_INNERJOIN";
			$proto115=array();
$proto115["m_strName"] = "bolsa_empleo.vacancia_requisito";
$proto115["m_srcTableName"] = "vacancia_pendiente";
$proto115["m_columns"] = array();
$proto115["m_columns"][] = "id_vacancia_requisito";
$proto115["m_columns"][] = "genero";
$proto115["m_columns"][] = "movilidad_propia";
$proto115["m_columns"][] = "tipo_movilidad";
$proto115["m_columns"][] = "id_registro_conducir";
$proto115["m_columns"][] = "discapacidad_aceptada";
$proto115["m_columns"][] = "id_vacancia";
$proto115["m_columns"][] = "nacionalidad";
$proto115["m_columns"][] = "documentos";
$proto115["m_columns"][] = "edad";
$proto115["m_columns"][] = "requisitos_exclu_formacion";
$proto115["m_columns"][] = "habilidades_conocimiento";
$proto115["m_columns"][] = "id_formacion_academica";
$obj = new SQLTable($proto115);

$proto114["m_table"] = $obj;
$proto114["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_requisito ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_requisito.id_vacancia";
$proto114["m_alias"] = "";
$proto114["m_srcTableName"] = "vacancia_pendiente";
$proto116=array();
$proto116["m_sql"] = "bolsa_empleo.vacancia_requisito.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto116["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto116["m_column"]=$obj;
$proto116["m_contained"] = array();
$proto116["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto116["m_havingmode"] = false;
$proto116["m_inBrackets"] = false;
$proto116["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto116);

$proto114["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto114);

$proto0["m_fromlist"][]=$obj;
												$proto118=array();
$proto118["m_link"] = "SQLL_INNERJOIN";
			$proto119=array();
$proto119["m_strName"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto119["m_srcTableName"] = "vacancia_pendiente";
$proto119["m_columns"] = array();
$proto119["m_columns"][] = "id";
$proto119["m_columns"][] = "empresas_bolsa_id";
$proto119["m_columns"][] = "ruc";
$proto119["m_columns"][] = "legal";
$proto119["m_columns"][] = "fantasy";
$proto119["m_columns"][] = "city_id";
$proto119["m_columns"][] = "distrito_id";
$proto119["m_columns"][] = "tel";
$proto119["m_columns"][] = "email";
$proto119["m_columns"][] = "id_tipo_sucursal";
$proto119["m_columns"][] = "nro_patronal";
$proto119["m_columns"][] = "direccion";
$proto119["m_columns"][] = "fecha_creacion";
$obj = new SQLTable($proto119);

$proto118["m_table"] = $obj;
$proto118["m_sql"] = "INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id";
$proto118["m_alias"] = "";
$proto118["m_srcTableName"] = "vacancia_pendiente";
$proto120=array();
$proto120["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id = bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto120["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto120["m_column"]=$obj;
$proto120["m_contained"] = array();
$proto120["m_strCase"] = "= bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto120["m_havingmode"] = false;
$proto120["m_inBrackets"] = false;
$proto120["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto120);

$proto118["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto118);

$proto0["m_fromlist"][]=$obj;
												$proto122=array();
$proto122["m_link"] = "SQLL_INNERJOIN";
			$proto123=array();
$proto123["m_strName"] = "bolsa_empleo.ocupaciones_nuevas";
$proto123["m_srcTableName"] = "vacancia_pendiente";
$proto123["m_columns"] = array();
$proto123["m_columns"][] = "id_ocu_puest_clasic";
$proto123["m_columns"][] = "descripcion";
$proto123["m_columns"][] = "codigo";
$proto123["m_columns"][] = "color";
$proto123["m_columns"][] = "tipo_registro";
$obj = new SQLTable($proto123);

$proto122["m_table"] = $obj;
$proto122["m_sql"] = "INNER JOIN bolsa_empleo.ocupaciones_nuevas ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.ocupaciones_nuevas.id_ocu_puest_clasic";
$proto122["m_alias"] = "";
$proto122["m_srcTableName"] = "vacancia_pendiente";
$proto124=array();
$proto124["m_sql"] = "bolsa_empleo.ocupaciones_nuevas.id_ocu_puest_clasic = bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto124["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ocu_puest_clasic",
	"m_strTable" => "bolsa_empleo.ocupaciones_nuevas",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto124["m_column"]=$obj;
$proto124["m_contained"] = array();
$proto124["m_strCase"] = "= bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto124["m_havingmode"] = false;
$proto124["m_inBrackets"] = false;
$proto124["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto124);

$proto122["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto122);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto126=array();
						$obj = new SQLField(array(
	"m_strName" => "fecha_creacion_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto126["m_column"]=$obj;
$proto126["m_bAsc"] = 0;
$proto126["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto126);

$proto0["m_orderby"][]=$obj;					
												$proto128=array();
						$obj = new SQLField(array(
	"m_strName" => "id_estado_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "vacancia_pendiente"
));

$proto128["m_column"]=$obj;
$proto128["m_bAsc"] = 1;
$proto128["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto128);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="vacancia_pendiente";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vacancia_pendiente = createSqlQuery_vacancia_pendiente();


	
		;

																																																

$tdatavacancia_pendiente[".sqlquery"] = $queryData_vacancia_pendiente;



include_once(getabspath("include/vacancia_pendiente_events.php"));
$tdatavacancia_pendiente[".hasEvents"] = true;

$query = &$queryData_vacancia_pendiente;
$table = "vacancia_pendiente";
// here goes EVENT_INIT_TABLE event
set_time_limit(500000);

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>
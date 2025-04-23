<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales4"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales4"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales4"]["vacancia.id_empresa_sucursal"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales4"]["vacancia.id_empresa_sucursal"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales4"]["vacancia.id_empresa_sucursal"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_empresa_sucursal", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["vacancia.empresa"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["vacancia.empresa"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["vacancia.empresa"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_bolsa_contactos1"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresa_bolsa_contactos1"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_bolsa_contactos1"]["vacancia.id_contacto_sucursal"] )) {
			$lookupTableLinks["bolsa_empleo.empresa_bolsa_contactos1"]["vacancia.id_contacto_sucursal"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresa_bolsa_contactos1"]["vacancia.id_contacto_sucursal"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_contacto_sucursal", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales5"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales5"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales5"]["vacancia.id_rubro"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales5"]["vacancia.id_rubro"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales5"]["vacancia.id_rubro"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_rubro", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.city"] ) ) {
			$lookupTableLinks["eportal.city"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.city"]["vacancia.id_cidudad"] )) {
			$lookupTableLinks["eportal.city"]["vacancia.id_cidudad"] = array();
		}
		$lookupTableLinks["eportal.city"]["vacancia.id_cidudad"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_cidudad", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.distritos"] ) ) {
			$lookupTableLinks["eportal.distritos"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.distritos"]["vacancia.id_departamento"] )) {
			$lookupTableLinks["eportal.distritos"]["vacancia.id_departamento"] = array();
		}
		$lookupTableLinks["eportal.distritos"]["vacancia.id_departamento"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_departamento", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_remuneracion"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_remuneracion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["vacancia.tipo_remuneracion"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["vacancia.tipo_remuneracion"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["vacancia.tipo_remuneracion"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "tipo_remuneracion", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_remuneracion"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_remuneracion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["vacancia.otro_tipo_remuneracion"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["vacancia.otro_tipo_remuneracion"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["vacancia.otro_tipo_remuneracion"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "otro_tipo_remuneracion", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_contrato"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_contrato"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_contrato"]["vacancia.tipo_contrato"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_contrato"]["vacancia.tipo_contrato"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_contrato"]["vacancia.tipo_contrato"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "tipo_contrato", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.country"] ) ) {
			$lookupTableLinks["eportal.country"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.country"]["vacancia.nacionalidad"] )) {
			$lookupTableLinks["eportal.country"]["vacancia.nacionalidad"] = array();
		}
		$lookupTableLinks["eportal.country"]["vacancia.nacionalidad"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "nacionalidad", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.bolsa_sexo"] ) ) {
			$lookupTableLinks["bolsa_empleo.bolsa_sexo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.bolsa_sexo"]["vacancia.genero"] )) {
			$lookupTableLinks["bolsa_empleo.bolsa_sexo"]["vacancia.genero"] = array();
		}
		$lookupTableLinks["bolsa_empleo.bolsa_sexo"]["vacancia.genero"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "genero", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"] ) ) {
			$lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"]["vacancia.id_formacion_academica"] )) {
			$lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"]["vacancia.id_formacion_academica"] = array();
		}
		$lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"]["vacancia.id_formacion_academica"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_formacion_academica", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_movilidad"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_movilidad"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_movilidad"]["vacancia.tipo_movilidad"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_movilidad"]["vacancia.tipo_movilidad"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_movilidad"]["vacancia.tipo_movilidad"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "tipo_movilidad", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_registro_conducir"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_registro_conducir"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_registro_conducir"]["vacancia.id_registro_conducir"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_registro_conducir"]["vacancia.id_registro_conducir"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_registro_conducir"]["vacancia.id_registro_conducir"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_registro_conducir", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons_discap_types"] ) ) {
			$lookupTableLinks["eportal.persons_discap_types"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons_discap_types"]["vacancia.discapacidad_aceptada"] )) {
			$lookupTableLinks["eportal.persons_discap_types"]["vacancia.discapacidad_aceptada"] = array();
		}
		$lookupTableLinks["eportal.persons_discap_types"]["vacancia.discapacidad_aceptada"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "discapacidad_aceptada", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia.id_estado_vacancia"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia.id_estado_vacancia"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia.id_estado_vacancia"]["add"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_estado_vacancia", "page" => "add");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia.estadodevacancias"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia.estadodevacancias"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia.estadodevacancias"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "estadodevacancias", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales1"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales1"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales1"]["vacancia.ruc"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales1"]["vacancia.ruc"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales1"]["vacancia.ruc"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "ruc", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["vacancia.legal"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["vacancia.legal"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["vacancia.legal"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "legal", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.modalidad_trabajo"] ) ) {
			$lookupTableLinks["bolsa_empleo.modalidad_trabajo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.modalidad_trabajo"]["vacancia.modalidad_trabajo"] )) {
			$lookupTableLinks["bolsa_empleo.modalidad_trabajo"]["vacancia.modalidad_trabajo"] = array();
		}
		$lookupTableLinks["bolsa_empleo.modalidad_trabajo"]["vacancia.modalidad_trabajo"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "modalidad_trabajo", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales3"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales3"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales3"]["vacancia.id_tipo_sucursal"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales3"]["vacancia.id_tipo_sucursal"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales3"]["vacancia.id_tipo_sucursal"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_tipo_sucursal", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.feria_empleo"] ) ) {
			$lookupTableLinks["bolsa_empleo.feria_empleo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.feria_empleo"]["vacancia.fk_id_feria_empleo"] )) {
			$lookupTableLinks["bolsa_empleo.feria_empleo"]["vacancia.fk_id_feria_empleo"] = array();
		}
		$lookupTableLinks["bolsa_empleo.feria_empleo"]["vacancia.fk_id_feria_empleo"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "fk_id_feria_empleo", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancias_dias"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancias_dias"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancias_dias"]["vacancia_dias_horas.vacancia_dias"] )) {
			$lookupTableLinks["bolsa_empleo.vacancias_dias"]["vacancia_dias_horas.vacancia_dias"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancias_dias"]["vacancia_dias_horas.vacancia_dias"]["edit"] = array("table" => "bolsa_empleo.vacancia_dias_horas", "field" => "vacancia_dias", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"]["vacancia_dias_horas.id_vacancias"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia"]["vacancia_dias_horas.id_vacancias"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia"]["vacancia_dias_horas.id_vacancias"]["edit"] = array("table" => "bolsa_empleo.vacancia_dias_horas", "field" => "id_vacancias", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"]["vacancia_requisito_idioma.id_vacancia"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia"]["vacancia_requisito_idioma.id_vacancia"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia"]["vacancia_requisito_idioma.id_vacancia"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_idioma", "field" => "id_vacancia", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.idioma"]["vacancia_requisito_idioma.id_idioma"] )) {
			$lookupTableLinks["bolsa_empleo.idioma"]["vacancia_requisito_idioma.id_idioma"] = array();
		}
		$lookupTableLinks["bolsa_empleo.idioma"]["vacancia_requisito_idioma.id_idioma"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_idioma", "field" => "id_idioma", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_habla"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_habla"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_habla"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_idioma", "field" => "id_nivel_idioma_habla", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_escribe"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_escribe"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_escribe"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_idioma", "field" => "id_nivel_idioma_escribe", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_lee"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_lee"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_lee"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_idioma", "field" => "id_nivel_idioma_lee", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"]["vacancia_requisito_programa.fk_id_vacancia"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia"]["vacancia_requisito_programa.fk_id_vacancia"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia"]["vacancia_requisito_programa.fk_id_vacancia"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_programa", "field" => "fk_id_vacancia", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.programas"] ) ) {
			$lookupTableLinks["bolsa_empleo.programas"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.programas"]["vacancia_requisito_programa.id_programa"] )) {
			$lookupTableLinks["bolsa_empleo.programas"]["vacancia_requisito_programa.id_programa"] = array();
		}
		$lookupTableLinks["bolsa_empleo.programas"]["vacancia_requisito_programa.id_programa"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_programa", "field" => "id_programa", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_programa"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_programa"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_programa"]["vacancia_requisito_programa.id_nivel_programa"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_programa"]["vacancia_requisito_programa.id_nivel_programa"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_programa"]["vacancia_requisito_programa.id_nivel_programa"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_programa", "field" => "id_nivel_programa", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales.empresas_bolsa_id"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales.empresas_bolsa_id"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales.empresas_bolsa_id"]["edit"] = array("table" => "bolsa_empleo.empresas_bolsa_sucursales", "field" => "empresas_bolsa_id", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales.ruc"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales.ruc"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales.ruc"]["edit"] = array("table" => "bolsa_empleo.empresas_bolsa_sucursales", "field" => "ruc", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.city"] ) ) {
			$lookupTableLinks["eportal.city"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.city"]["empresas_bolsa_sucursales.city_id"] )) {
			$lookupTableLinks["eportal.city"]["empresas_bolsa_sucursales.city_id"] = array();
		}
		$lookupTableLinks["eportal.city"]["empresas_bolsa_sucursales.city_id"]["edit"] = array("table" => "bolsa_empleo.empresas_bolsa_sucursales", "field" => "city_id", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.distritos"] ) ) {
			$lookupTableLinks["eportal.distritos"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.distritos"]["empresas_bolsa_sucursales.distrito_id"] )) {
			$lookupTableLinks["eportal.distritos"]["empresas_bolsa_sucursales.distrito_id"] = array();
		}
		$lookupTableLinks["eportal.distritos"]["empresas_bolsa_sucursales.distrito_id"]["edit"] = array("table" => "bolsa_empleo.empresas_bolsa_sucursales", "field" => "distrito_id", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"]["empresas_bolsa_sucursales.id_tipo_sucursal"] )) {
			$lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"]["empresas_bolsa_sucursales.id_tipo_sucursal"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"]["empresas_bolsa_sucursales.id_tipo_sucursal"]["edit"] = array("table" => "bolsa_empleo.empresas_bolsa_sucursales", "field" => "id_tipo_sucursal", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.cargo"] ) ) {
			$lookupTableLinks["bolsa_empleo.cargo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.cargo"]["empresa_bolsa_contactos.id_cargo"] )) {
			$lookupTableLinks["bolsa_empleo.cargo"]["empresa_bolsa_contactos.id_cargo"] = array();
		}
		$lookupTableLinks["bolsa_empleo.cargo"]["empresa_bolsa_contactos.id_cargo"]["search"] = array("table" => "bolsa_empleo.empresa_bolsa_contactos", "field" => "id_cargo", "page" => "search");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["empresa_bolsa_contactos.ruc"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["empresa_bolsa_contactos.ruc"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["empresa_bolsa_contactos.ruc"]["edit"] = array("table" => "bolsa_empleo.empresa_bolsa_contactos", "field" => "ruc", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales4"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales4"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales4"]["empresa_bolsa_contactos.empresas_bolsa_sucursales_id"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales4"]["empresa_bolsa_contactos.empresas_bolsa_sucursales_id"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales4"]["empresa_bolsa_contactos.empresas_bolsa_sucursales_id"]["edit"] = array("table" => "bolsa_empleo.empresa_bolsa_contactos", "field" => "empresas_bolsa_sucursales_id", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales1.ruc"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales1.ruc"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales1.ruc"]["edit"] = array("table" => "bolsa_empleo.empresas_bolsa_sucursales1", "field" => "ruc", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.city"] ) ) {
			$lookupTableLinks["eportal.city"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.city"]["postulacion.ciudad"] )) {
			$lookupTableLinks["eportal.city"]["postulacion.ciudad"] = array();
		}
		$lookupTableLinks["eportal.city"]["postulacion.ciudad"]["edit"] = array("table" => "bolsa_empleo.postulacion", "field" => "ciudad", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.distritos"] ) ) {
			$lookupTableLinks["eportal.distritos"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.distritos"]["postulacion.distrito"] )) {
			$lookupTableLinks["eportal.distritos"]["postulacion.distrito"] = array();
		}
		$lookupTableLinks["eportal.distritos"]["postulacion.distrito"]["edit"] = array("table" => "bolsa_empleo.postulacion", "field" => "distrito", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.country"] ) ) {
			$lookupTableLinks["eportal.country"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.country"]["postulacion.pais"] )) {
			$lookupTableLinks["eportal.country"]["postulacion.pais"] = array();
		}
		$lookupTableLinks["eportal.country"]["postulacion.pais"]["edit"] = array("table" => "bolsa_empleo.postulacion", "field" => "pais", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"]["postulacion.id_vacancia"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia"]["postulacion.id_vacancia"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia"]["postulacion.id_vacancia"]["edit"] = array("table" => "bolsa_empleo.postulacion", "field" => "id_vacancia", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"] ) ) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion.id_estado"] )) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion.id_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion.id_estado"]["edit"] = array("table" => "bolsa_empleo.postulacion", "field" => "id_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_estado"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresa_estado"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_estado"]["empresas_bolsa.id_estado"] )) {
			$lookupTableLinks["bolsa_empleo.empresa_estado"]["empresas_bolsa.id_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresa_estado"]["empresas_bolsa.id_estado"]["edit"] = array("table" => "bolsa_empleo.empresas_bolsa", "field" => "id_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"]["empresas_bolsa_sucursales3.id_tipo_sucursal"] )) {
			$lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"]["empresas_bolsa_sucursales3.id_tipo_sucursal"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"]["empresas_bolsa_sucursales3.id_tipo_sucursal"]["edit"] = array("table" => "bolsa_empleo.empresas_bolsa_sucursales3", "field" => "id_tipo_sucursal", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.city"] ) ) {
			$lookupTableLinks["eportal.city"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.city"]["feria_empleo.locacion"] )) {
			$lookupTableLinks["eportal.city"]["feria_empleo.locacion"] = array();
		}
		$lookupTableLinks["eportal.city"]["feria_empleo.locacion"]["edit"] = array("table" => "bolsa_empleo.feria_empleo", "field" => "locacion", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["vacancia_pendiente.id_empresa_sucursal"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["vacancia_pendiente.id_empresa_sucursal"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["vacancia_pendiente.id_empresa_sucursal"]["edit"] = array("table" => "vacancia_pendiente", "field" => "id_empresa_sucursal", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["vacancia_pendiente.empresa"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["vacancia_pendiente.empresa"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["vacancia_pendiente.empresa"]["edit"] = array("table" => "vacancia_pendiente", "field" => "empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_bolsa_contactos1"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresa_bolsa_contactos1"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_bolsa_contactos1"]["vacancia_pendiente.id_contacto_sucursal"] )) {
			$lookupTableLinks["bolsa_empleo.empresa_bolsa_contactos1"]["vacancia_pendiente.id_contacto_sucursal"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresa_bolsa_contactos1"]["vacancia_pendiente.id_contacto_sucursal"]["edit"] = array("table" => "vacancia_pendiente", "field" => "id_contacto_sucursal", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales5"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales5"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales5"]["vacancia_pendiente.id_rubro"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales5"]["vacancia_pendiente.id_rubro"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales5"]["vacancia_pendiente.id_rubro"]["edit"] = array("table" => "vacancia_pendiente", "field" => "id_rubro", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.city"] ) ) {
			$lookupTableLinks["eportal.city"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.city"]["vacancia_pendiente.id_cidudad"] )) {
			$lookupTableLinks["eportal.city"]["vacancia_pendiente.id_cidudad"] = array();
		}
		$lookupTableLinks["eportal.city"]["vacancia_pendiente.id_cidudad"]["edit"] = array("table" => "vacancia_pendiente", "field" => "id_cidudad", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.distritos"] ) ) {
			$lookupTableLinks["eportal.distritos"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.distritos"]["vacancia_pendiente.id_departamento"] )) {
			$lookupTableLinks["eportal.distritos"]["vacancia_pendiente.id_departamento"] = array();
		}
		$lookupTableLinks["eportal.distritos"]["vacancia_pendiente.id_departamento"]["edit"] = array("table" => "vacancia_pendiente", "field" => "id_departamento", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_remuneracion"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_remuneracion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["vacancia_pendiente.tipo_remuneracion"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["vacancia_pendiente.tipo_remuneracion"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["vacancia_pendiente.tipo_remuneracion"]["edit"] = array("table" => "vacancia_pendiente", "field" => "tipo_remuneracion", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_remuneracion"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_remuneracion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["vacancia_pendiente.otro_tipo_remuneracion"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["vacancia_pendiente.otro_tipo_remuneracion"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["vacancia_pendiente.otro_tipo_remuneracion"]["edit"] = array("table" => "vacancia_pendiente", "field" => "otro_tipo_remuneracion", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_contrato"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_contrato"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_contrato"]["vacancia_pendiente.tipo_contrato"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_contrato"]["vacancia_pendiente.tipo_contrato"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_contrato"]["vacancia_pendiente.tipo_contrato"]["edit"] = array("table" => "vacancia_pendiente", "field" => "tipo_contrato", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.country"] ) ) {
			$lookupTableLinks["eportal.country"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.country"]["vacancia_pendiente.nacionalidad"] )) {
			$lookupTableLinks["eportal.country"]["vacancia_pendiente.nacionalidad"] = array();
		}
		$lookupTableLinks["eportal.country"]["vacancia_pendiente.nacionalidad"]["edit"] = array("table" => "vacancia_pendiente", "field" => "nacionalidad", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.bolsa_sexo"] ) ) {
			$lookupTableLinks["bolsa_empleo.bolsa_sexo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.bolsa_sexo"]["vacancia_pendiente.genero"] )) {
			$lookupTableLinks["bolsa_empleo.bolsa_sexo"]["vacancia_pendiente.genero"] = array();
		}
		$lookupTableLinks["bolsa_empleo.bolsa_sexo"]["vacancia_pendiente.genero"]["edit"] = array("table" => "vacancia_pendiente", "field" => "genero", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"] ) ) {
			$lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"]["vacancia_pendiente.id_formacion_academica"] )) {
			$lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"]["vacancia_pendiente.id_formacion_academica"] = array();
		}
		$lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"]["vacancia_pendiente.id_formacion_academica"]["edit"] = array("table" => "vacancia_pendiente", "field" => "id_formacion_academica", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_movilidad"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_movilidad"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_movilidad"]["vacancia_pendiente.tipo_movilidad"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_movilidad"]["vacancia_pendiente.tipo_movilidad"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_movilidad"]["vacancia_pendiente.tipo_movilidad"]["edit"] = array("table" => "vacancia_pendiente", "field" => "tipo_movilidad", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_registro_conducir"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_registro_conducir"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_registro_conducir"]["vacancia_pendiente.id_registro_conducir"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_registro_conducir"]["vacancia_pendiente.id_registro_conducir"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_registro_conducir"]["vacancia_pendiente.id_registro_conducir"]["edit"] = array("table" => "vacancia_pendiente", "field" => "id_registro_conducir", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons_discap_types"] ) ) {
			$lookupTableLinks["eportal.persons_discap_types"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons_discap_types"]["vacancia_pendiente.discapacidad_aceptada"] )) {
			$lookupTableLinks["eportal.persons_discap_types"]["vacancia_pendiente.discapacidad_aceptada"] = array();
		}
		$lookupTableLinks["eportal.persons_discap_types"]["vacancia_pendiente.discapacidad_aceptada"]["edit"] = array("table" => "vacancia_pendiente", "field" => "discapacidad_aceptada", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia_pendiente.id_estado_vacancia"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia_pendiente.id_estado_vacancia"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia_pendiente.id_estado_vacancia"]["add"] = array("table" => "vacancia_pendiente", "field" => "id_estado_vacancia", "page" => "add");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia_pendiente.estadodevacancias"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia_pendiente.estadodevacancias"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia_pendiente.estadodevacancias"]["edit"] = array("table" => "vacancia_pendiente", "field" => "estadodevacancias", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales1"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales1"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales1"]["vacancia_pendiente.ruc"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales1"]["vacancia_pendiente.ruc"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales1"]["vacancia_pendiente.ruc"]["edit"] = array("table" => "vacancia_pendiente", "field" => "ruc", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["vacancia_pendiente.legal"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["vacancia_pendiente.legal"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["vacancia_pendiente.legal"]["edit"] = array("table" => "vacancia_pendiente", "field" => "legal", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.modalidad_trabajo"] ) ) {
			$lookupTableLinks["bolsa_empleo.modalidad_trabajo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.modalidad_trabajo"]["vacancia_pendiente.modalidad_trabajo"] )) {
			$lookupTableLinks["bolsa_empleo.modalidad_trabajo"]["vacancia_pendiente.modalidad_trabajo"] = array();
		}
		$lookupTableLinks["bolsa_empleo.modalidad_trabajo"]["vacancia_pendiente.modalidad_trabajo"]["edit"] = array("table" => "vacancia_pendiente", "field" => "modalidad_trabajo", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales3"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales3"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales3"]["vacancia_pendiente.id_tipo_sucursal"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales3"]["vacancia_pendiente.id_tipo_sucursal"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales3"]["vacancia_pendiente.id_tipo_sucursal"]["edit"] = array("table" => "vacancia_pendiente", "field" => "id_tipo_sucursal", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.feria_empleo"] ) ) {
			$lookupTableLinks["bolsa_empleo.feria_empleo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.feria_empleo"]["vacancia_pendiente.fk_id_feria_empleo"] )) {
			$lookupTableLinks["bolsa_empleo.feria_empleo"]["vacancia_pendiente.fk_id_feria_empleo"] = array();
		}
		$lookupTableLinks["bolsa_empleo.feria_empleo"]["vacancia_pendiente.fk_id_feria_empleo"]["edit"] = array("table" => "vacancia_pendiente", "field" => "fk_id_feria_empleo", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.feria_empleo"] ) ) {
			$lookupTableLinks["bolsa_empleo.feria_empleo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.feria_empleo"]["vacancia_tmp.fk_id_feria_empleo"] )) {
			$lookupTableLinks["bolsa_empleo.feria_empleo"]["vacancia_tmp.fk_id_feria_empleo"] = array();
		}
		$lookupTableLinks["bolsa_empleo.feria_empleo"]["vacancia_tmp.fk_id_feria_empleo"]["edit"] = array("table" => "bolsa_empleo.vacancia_tmp", "field" => "fk_id_feria_empleo", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_contrato"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_contrato"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_contrato"]["vacancia_tmp.tipo_contrato"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_contrato"]["vacancia_tmp.tipo_contrato"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_contrato"]["vacancia_tmp.tipo_contrato"]["edit"] = array("table" => "bolsa_empleo.vacancia_tmp", "field" => "tipo_contrato", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales5"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales5"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales5"]["vacancia_tmp.id_rubro"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales5"]["vacancia_tmp.id_rubro"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales5"]["vacancia_tmp.id_rubro"]["edit"] = array("table" => "bolsa_empleo.vacancia_tmp", "field" => "id_rubro", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.modalidad_trabajo"] ) ) {
			$lookupTableLinks["bolsa_empleo.modalidad_trabajo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.modalidad_trabajo"]["vacancia_tmp.modalidad_trabajo"] )) {
			$lookupTableLinks["bolsa_empleo.modalidad_trabajo"]["vacancia_tmp.modalidad_trabajo"] = array();
		}
		$lookupTableLinks["bolsa_empleo.modalidad_trabajo"]["vacancia_tmp.modalidad_trabajo"]["edit"] = array("table" => "bolsa_empleo.vacancia_tmp", "field" => "modalidad_trabajo", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales4"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales4"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales4"]["vacancia_tmp.id_empresa_sucursal"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales4"]["vacancia_tmp.id_empresa_sucursal"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales4"]["vacancia_tmp.id_empresa_sucursal"]["edit"] = array("table" => "bolsa_empleo.vacancia_tmp", "field" => "id_empresa_sucursal", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.city"] ) ) {
			$lookupTableLinks["eportal.city"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.city"]["vacancia_tmp.id_cidudad"] )) {
			$lookupTableLinks["eportal.city"]["vacancia_tmp.id_cidudad"] = array();
		}
		$lookupTableLinks["eportal.city"]["vacancia_tmp.id_cidudad"]["edit"] = array("table" => "bolsa_empleo.vacancia_tmp", "field" => "id_cidudad", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.distritos"] ) ) {
			$lookupTableLinks["eportal.distritos"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.distritos"]["vacancia_tmp.id_departamento"] )) {
			$lookupTableLinks["eportal.distritos"]["vacancia_tmp.id_departamento"] = array();
		}
		$lookupTableLinks["eportal.distritos"]["vacancia_tmp.id_departamento"]["edit"] = array("table" => "bolsa_empleo.vacancia_tmp", "field" => "id_departamento", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.bolsa_sexo"] ) ) {
			$lookupTableLinks["bolsa_empleo.bolsa_sexo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.bolsa_sexo"]["vacancia_tmp.genero"] )) {
			$lookupTableLinks["bolsa_empleo.bolsa_sexo"]["vacancia_tmp.genero"] = array();
		}
		$lookupTableLinks["bolsa_empleo.bolsa_sexo"]["vacancia_tmp.genero"]["edit"] = array("table" => "bolsa_empleo.vacancia_tmp", "field" => "genero", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_movilidad"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_movilidad"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_movilidad"]["vacancia_tmp.tipo_movilidad"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_movilidad"]["vacancia_tmp.tipo_movilidad"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_movilidad"]["vacancia_tmp.tipo_movilidad"]["edit"] = array("table" => "bolsa_empleo.vacancia_tmp", "field" => "tipo_movilidad", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_registro_conducir"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_registro_conducir"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_registro_conducir"]["vacancia_tmp.id_registro_conducir"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_registro_conducir"]["vacancia_tmp.id_registro_conducir"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_registro_conducir"]["vacancia_tmp.id_registro_conducir"]["edit"] = array("table" => "bolsa_empleo.vacancia_tmp", "field" => "id_registro_conducir", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons_discap_types"] ) ) {
			$lookupTableLinks["eportal.persons_discap_types"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons_discap_types"]["vacancia_tmp.discapacidad_aceptada"] )) {
			$lookupTableLinks["eportal.persons_discap_types"]["vacancia_tmp.discapacidad_aceptada"] = array();
		}
		$lookupTableLinks["eportal.persons_discap_types"]["vacancia_tmp.discapacidad_aceptada"]["edit"] = array("table" => "bolsa_empleo.vacancia_tmp", "field" => "discapacidad_aceptada", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.country"] ) ) {
			$lookupTableLinks["eportal.country"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.country"]["vacancia_tmp.nacionalidad"] )) {
			$lookupTableLinks["eportal.country"]["vacancia_tmp.nacionalidad"] = array();
		}
		$lookupTableLinks["eportal.country"]["vacancia_tmp.nacionalidad"]["edit"] = array("table" => "bolsa_empleo.vacancia_tmp", "field" => "nacionalidad", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"] ) ) {
			$lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"]["vacancia_tmp.id_formacion_academica"] )) {
			$lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"]["vacancia_tmp.id_formacion_academica"] = array();
		}
		$lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"]["vacancia_tmp.id_formacion_academica"]["edit"] = array("table" => "bolsa_empleo.vacancia_tmp", "field" => "id_formacion_academica", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_bolsa_contactos"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresa_bolsa_contactos"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_bolsa_contactos"]["vacancia_tmp.id_contacto_sucursal"] )) {
			$lookupTableLinks["bolsa_empleo.empresa_bolsa_contactos"]["vacancia_tmp.id_contacto_sucursal"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresa_bolsa_contactos"]["vacancia_tmp.id_contacto_sucursal"]["edit"] = array("table" => "bolsa_empleo.vacancia_tmp", "field" => "id_contacto_sucursal", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_remuneracion"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_remuneracion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["vacancia_tmp.tipo_remuneracion"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["vacancia_tmp.tipo_remuneracion"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["vacancia_tmp.tipo_remuneracion"]["edit"] = array("table" => "bolsa_empleo.vacancia_tmp", "field" => "tipo_remuneracion", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_tmp"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_tmp"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_tmp"]["vacancia_requisito_idioma_tmp.id_vacancia"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_tmp"]["vacancia_requisito_idioma_tmp.id_vacancia"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_tmp"]["vacancia_requisito_idioma_tmp.id_vacancia"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_idioma_tmp", "field" => "id_vacancia", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.idioma"]["vacancia_requisito_idioma_tmp.id_idioma"] )) {
			$lookupTableLinks["bolsa_empleo.idioma"]["vacancia_requisito_idioma_tmp.id_idioma"] = array();
		}
		$lookupTableLinks["bolsa_empleo.idioma"]["vacancia_requisito_idioma_tmp.id_idioma"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_idioma_tmp", "field" => "id_idioma", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma_tmp.id_nivel_idioma_habla"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma_tmp.id_nivel_idioma_habla"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma_tmp.id_nivel_idioma_habla"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_idioma_tmp", "field" => "id_nivel_idioma_habla", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma_tmp.id_nivel_idioma_escribe"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma_tmp.id_nivel_idioma_escribe"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma_tmp.id_nivel_idioma_escribe"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_idioma_tmp", "field" => "id_nivel_idioma_escribe", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma_tmp.id_nivel_idioma_lee"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma_tmp.id_nivel_idioma_lee"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma_tmp.id_nivel_idioma_lee"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_idioma_tmp", "field" => "id_nivel_idioma_lee", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_tmp"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_tmp"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_tmp"]["vacancia_requisito_programa_tmp.fk_id_vacancia"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_tmp"]["vacancia_requisito_programa_tmp.fk_id_vacancia"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_tmp"]["vacancia_requisito_programa_tmp.fk_id_vacancia"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_programa_tmp", "field" => "fk_id_vacancia", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.programas"] ) ) {
			$lookupTableLinks["bolsa_empleo.programas"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.programas"]["vacancia_requisito_programa_tmp.id_programa"] )) {
			$lookupTableLinks["bolsa_empleo.programas"]["vacancia_requisito_programa_tmp.id_programa"] = array();
		}
		$lookupTableLinks["bolsa_empleo.programas"]["vacancia_requisito_programa_tmp.id_programa"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_programa_tmp", "field" => "id_programa", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_programa"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_programa"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_programa"]["vacancia_requisito_programa_tmp.id_nivel_programa"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_programa"]["vacancia_requisito_programa_tmp.id_nivel_programa"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_programa"]["vacancia_requisito_programa_tmp.id_nivel_programa"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_programa_tmp", "field" => "id_nivel_programa", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancias_dias"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancias_dias"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancias_dias"]["vacancia_dias_horas_tmp.vacancia_dias"] )) {
			$lookupTableLinks["bolsa_empleo.vacancias_dias"]["vacancia_dias_horas_tmp.vacancia_dias"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancias_dias"]["vacancia_dias_horas_tmp.vacancia_dias"]["edit"] = array("table" => "bolsa_empleo.vacancia_dias_horas_tmp", "field" => "vacancia_dias", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_tmp"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_tmp"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_tmp"]["vacancia_dias_horas_tmp.id_vacancias"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_tmp"]["vacancia_dias_horas_tmp.id_vacancias"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_tmp"]["vacancia_dias_horas_tmp.id_vacancias"]["edit"] = array("table" => "bolsa_empleo.vacancia_dias_horas_tmp", "field" => "id_vacancias", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales4.empresas_bolsa_id"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales4.empresas_bolsa_id"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales4.empresas_bolsa_id"]["edit"] = array("table" => "bolsa_empleo.empresas_bolsa_sucursales4", "field" => "empresas_bolsa_id", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales4.ruc"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales4.ruc"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales4.ruc"]["edit"] = array("table" => "bolsa_empleo.empresas_bolsa_sucursales4", "field" => "ruc", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"]["empresas_bolsa_sucursales4.id_tipo_sucursal"] )) {
			$lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"]["empresas_bolsa_sucursales4.id_tipo_sucursal"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"]["empresas_bolsa_sucursales4.id_tipo_sucursal"]["edit"] = array("table" => "bolsa_empleo.empresas_bolsa_sucursales4", "field" => "id_tipo_sucursal", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_estado"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresa_estado"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_estado"]["empresas_bolsa1.id_estado"] )) {
			$lookupTableLinks["bolsa_empleo.empresa_estado"]["empresas_bolsa1.id_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresa_estado"]["empresas_bolsa1.id_estado"]["edit"] = array("table" => "bolsa_empleo.empresas_bolsa1", "field" => "id_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_estado"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresa_estado"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_estado"]["empresas_bolsa2.id_estado"] )) {
			$lookupTableLinks["bolsa_empleo.empresa_estado"]["empresas_bolsa2.id_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresa_estado"]["empresas_bolsa2.id_estado"]["edit"] = array("table" => "bolsa_empleo.empresas_bolsa2", "field" => "id_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales5.empresas_bolsa_id"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales5.empresas_bolsa_id"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales5.empresas_bolsa_id"]["edit"] = array("table" => "bolsa_empleo.empresas_bolsa_sucursales5", "field" => "empresas_bolsa_id", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales5.ruc"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales5.ruc"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresas_bolsa_sucursales5.ruc"]["edit"] = array("table" => "bolsa_empleo.empresas_bolsa_sucursales5", "field" => "ruc", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"]["empresas_bolsa_sucursales5.id_tipo_sucursal"] )) {
			$lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"]["empresas_bolsa_sucursales5.id_tipo_sucursal"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresa_bolsa_tipo"]["empresas_bolsa_sucursales5.id_tipo_sucursal"]["edit"] = array("table" => "bolsa_empleo.empresas_bolsa_sucursales5", "field" => "id_tipo_sucursal", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.cargo"] ) ) {
			$lookupTableLinks["bolsa_empleo.cargo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.cargo"]["empresa_bolsa_contactos1.id_cargo"] )) {
			$lookupTableLinks["bolsa_empleo.cargo"]["empresa_bolsa_contactos1.id_cargo"] = array();
		}
		$lookupTableLinks["bolsa_empleo.cargo"]["empresa_bolsa_contactos1.id_cargo"]["edit"] = array("table" => "bolsa_empleo.empresa_bolsa_contactos1", "field" => "id_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresa_bolsa_contactos1.ruc"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresa_bolsa_contactos1.ruc"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa"]["empresa_bolsa_contactos1.ruc"]["edit"] = array("table" => "bolsa_empleo.empresa_bolsa_contactos1", "field" => "ruc", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["empresa_bolsa_contactos1.empresas_bolsa_sucursales_id"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["empresa_bolsa_contactos1.empresas_bolsa_sucursales_id"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["empresa_bolsa_contactos1.empresas_bolsa_sucursales_id"]["edit"] = array("table" => "bolsa_empleo.empresa_bolsa_contactos1", "field" => "empresas_bolsa_sucursales_id", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.postulacion"] ) ) {
			$lookupTableLinks["bolsa_empleo.postulacion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.postulacion"]["seguimientos.id_postulacion"] )) {
			$lookupTableLinks["bolsa_empleo.postulacion"]["seguimientos.id_postulacion"] = array();
		}
		$lookupTableLinks["bolsa_empleo.postulacion"]["seguimientos.id_postulacion"]["edit"] = array("table" => "bolsa_empleo.seguimientos", "field" => "id_postulacion", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"] ) ) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"]["seguimientos.id_estado_anterior"] )) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"]["seguimientos.id_estado_anterior"] = array();
		}
		$lookupTableLinks["bolsa_empleo.estado_postulacion"]["seguimientos.id_estado_anterior"]["edit"] = array("table" => "bolsa_empleo.seguimientos", "field" => "id_estado_anterior", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"] ) ) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"]["seguimientos.id_nuevo_estado"] )) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"]["seguimientos.id_nuevo_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.estado_postulacion"]["seguimientos.id_nuevo_estado"]["edit"] = array("table" => "bolsa_empleo.seguimientos", "field" => "id_nuevo_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"]["seguimientos.id_vacancia"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia"]["seguimientos.id_vacancia"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia"]["seguimientos.id_vacancia"]["edit"] = array("table" => "bolsa_empleo.seguimientos", "field" => "id_vacancia", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"] ) ) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["seguimientos.id_empresa_sucursal"] )) {
			$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["seguimientos.id_empresa_sucursal"] = array();
		}
		$lookupTableLinks["bolsa_empleo.empresas_bolsa_sucursales"]["seguimientos.id_empresa_sucursal"]["edit"] = array("table" => "bolsa_empleo.seguimientos", "field" => "id_empresa_sucursal", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.city"] ) ) {
			$lookupTableLinks["eportal.city"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.city"]["postulacion_seleccionado.ciudad"] )) {
			$lookupTableLinks["eportal.city"]["postulacion_seleccionado.ciudad"] = array();
		}
		$lookupTableLinks["eportal.city"]["postulacion_seleccionado.ciudad"]["edit"] = array("table" => "bolsa_empleo.postulacion_seleccionado", "field" => "ciudad", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.distritos"] ) ) {
			$lookupTableLinks["eportal.distritos"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.distritos"]["postulacion_seleccionado.distrito"] )) {
			$lookupTableLinks["eportal.distritos"]["postulacion_seleccionado.distrito"] = array();
		}
		$lookupTableLinks["eportal.distritos"]["postulacion_seleccionado.distrito"]["edit"] = array("table" => "bolsa_empleo.postulacion_seleccionado", "field" => "distrito", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.country"] ) ) {
			$lookupTableLinks["eportal.country"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.country"]["postulacion_seleccionado.pais"] )) {
			$lookupTableLinks["eportal.country"]["postulacion_seleccionado.pais"] = array();
		}
		$lookupTableLinks["eportal.country"]["postulacion_seleccionado.pais"]["edit"] = array("table" => "bolsa_empleo.postulacion_seleccionado", "field" => "pais", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"]["postulacion_seleccionado.id_vacancia"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia"]["postulacion_seleccionado.id_vacancia"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia"]["postulacion_seleccionado.id_vacancia"]["edit"] = array("table" => "bolsa_empleo.postulacion_seleccionado", "field" => "id_vacancia", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"] ) ) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion_seleccionado.id_estado"] )) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion_seleccionado.id_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion_seleccionado.id_estado"]["edit"] = array("table" => "bolsa_empleo.postulacion_seleccionado", "field" => "id_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.archivo"] ) ) {
			$lookupTableLinks["bolsa_empleo.archivo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.archivo"]["postulacion_seleccionado.test_psicotecnico"] )) {
			$lookupTableLinks["bolsa_empleo.archivo"]["postulacion_seleccionado.test_psicotecnico"] = array();
		}
		$lookupTableLinks["bolsa_empleo.archivo"]["postulacion_seleccionado.test_psicotecnico"]["edit"] = array("table" => "bolsa_empleo.postulacion_seleccionado", "field" => "test_psicotecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.archivo"] ) ) {
			$lookupTableLinks["bolsa_empleo.archivo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.archivo"]["postulacion_seleccionado.evaluacion"] )) {
			$lookupTableLinks["bolsa_empleo.archivo"]["postulacion_seleccionado.evaluacion"] = array();
		}
		$lookupTableLinks["bolsa_empleo.archivo"]["postulacion_seleccionado.evaluacion"]["edit"] = array("table" => "bolsa_empleo.postulacion_seleccionado", "field" => "evaluacion", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.city"] ) ) {
			$lookupTableLinks["eportal.city"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.city"]["postulacion_convocado.ciudad"] )) {
			$lookupTableLinks["eportal.city"]["postulacion_convocado.ciudad"] = array();
		}
		$lookupTableLinks["eportal.city"]["postulacion_convocado.ciudad"]["edit"] = array("table" => "bolsa_empleo.postulacion_convocado", "field" => "ciudad", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.distritos"] ) ) {
			$lookupTableLinks["eportal.distritos"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.distritos"]["postulacion_convocado.distrito"] )) {
			$lookupTableLinks["eportal.distritos"]["postulacion_convocado.distrito"] = array();
		}
		$lookupTableLinks["eportal.distritos"]["postulacion_convocado.distrito"]["edit"] = array("table" => "bolsa_empleo.postulacion_convocado", "field" => "distrito", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.country"] ) ) {
			$lookupTableLinks["eportal.country"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.country"]["postulacion_convocado.pais"] )) {
			$lookupTableLinks["eportal.country"]["postulacion_convocado.pais"] = array();
		}
		$lookupTableLinks["eportal.country"]["postulacion_convocado.pais"]["edit"] = array("table" => "bolsa_empleo.postulacion_convocado", "field" => "pais", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"]["postulacion_convocado.id_vacancia"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia"]["postulacion_convocado.id_vacancia"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia"]["postulacion_convocado.id_vacancia"]["edit"] = array("table" => "bolsa_empleo.postulacion_convocado", "field" => "id_vacancia", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"] ) ) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion_convocado.id_estado"] )) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion_convocado.id_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion_convocado.id_estado"]["edit"] = array("table" => "bolsa_empleo.postulacion_convocado", "field" => "id_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.archivo"] ) ) {
			$lookupTableLinks["bolsa_empleo.archivo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.archivo"]["postulacion_convocado.test_psicotecnico"] )) {
			$lookupTableLinks["bolsa_empleo.archivo"]["postulacion_convocado.test_psicotecnico"] = array();
		}
		$lookupTableLinks["bolsa_empleo.archivo"]["postulacion_convocado.test_psicotecnico"]["edit"] = array("table" => "bolsa_empleo.postulacion_convocado", "field" => "test_psicotecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.archivo"] ) ) {
			$lookupTableLinks["bolsa_empleo.archivo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.archivo"]["postulacion_convocado.evaluacion"] )) {
			$lookupTableLinks["bolsa_empleo.archivo"]["postulacion_convocado.evaluacion"] = array();
		}
		$lookupTableLinks["bolsa_empleo.archivo"]["postulacion_convocado.evaluacion"]["edit"] = array("table" => "bolsa_empleo.postulacion_convocado", "field" => "evaluacion", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.city"] ) ) {
			$lookupTableLinks["eportal.city"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.city"]["postulacion_postulado.ciudad"] )) {
			$lookupTableLinks["eportal.city"]["postulacion_postulado.ciudad"] = array();
		}
		$lookupTableLinks["eportal.city"]["postulacion_postulado.ciudad"]["edit"] = array("table" => "bolsa_empleo.postulacion_postulado", "field" => "ciudad", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.distritos"] ) ) {
			$lookupTableLinks["eportal.distritos"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.distritos"]["postulacion_postulado.distrito"] )) {
			$lookupTableLinks["eportal.distritos"]["postulacion_postulado.distrito"] = array();
		}
		$lookupTableLinks["eportal.distritos"]["postulacion_postulado.distrito"]["edit"] = array("table" => "bolsa_empleo.postulacion_postulado", "field" => "distrito", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.country"] ) ) {
			$lookupTableLinks["eportal.country"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.country"]["postulacion_postulado.pais"] )) {
			$lookupTableLinks["eportal.country"]["postulacion_postulado.pais"] = array();
		}
		$lookupTableLinks["eportal.country"]["postulacion_postulado.pais"]["edit"] = array("table" => "bolsa_empleo.postulacion_postulado", "field" => "pais", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"]["postulacion_postulado.id_vacancia"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia"]["postulacion_postulado.id_vacancia"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia"]["postulacion_postulado.id_vacancia"]["edit"] = array("table" => "bolsa_empleo.postulacion_postulado", "field" => "id_vacancia", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"] ) ) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion_postulado.id_estado"] )) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion_postulado.id_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion_postulado.id_estado"]["edit"] = array("table" => "bolsa_empleo.postulacion_postulado", "field" => "id_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.city"] ) ) {
			$lookupTableLinks["eportal.city"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.city"]["postulacion_insertado.ciudad"] )) {
			$lookupTableLinks["eportal.city"]["postulacion_insertado.ciudad"] = array();
		}
		$lookupTableLinks["eportal.city"]["postulacion_insertado.ciudad"]["edit"] = array("table" => "bolsa_empleo.postulacion_insertado", "field" => "ciudad", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.distritos"] ) ) {
			$lookupTableLinks["eportal.distritos"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.distritos"]["postulacion_insertado.distrito"] )) {
			$lookupTableLinks["eportal.distritos"]["postulacion_insertado.distrito"] = array();
		}
		$lookupTableLinks["eportal.distritos"]["postulacion_insertado.distrito"]["edit"] = array("table" => "bolsa_empleo.postulacion_insertado", "field" => "distrito", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.country"] ) ) {
			$lookupTableLinks["eportal.country"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.country"]["postulacion_insertado.pais"] )) {
			$lookupTableLinks["eportal.country"]["postulacion_insertado.pais"] = array();
		}
		$lookupTableLinks["eportal.country"]["postulacion_insertado.pais"]["edit"] = array("table" => "bolsa_empleo.postulacion_insertado", "field" => "pais", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"]["postulacion_insertado.id_vacancia"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia"]["postulacion_insertado.id_vacancia"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia"]["postulacion_insertado.id_vacancia"]["edit"] = array("table" => "bolsa_empleo.postulacion_insertado", "field" => "id_vacancia", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"] ) ) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion_insertado.id_estado"] )) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion_insertado.id_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion_insertado.id_estado"]["edit"] = array("table" => "bolsa_empleo.postulacion_insertado", "field" => "id_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.city"] ) ) {
			$lookupTableLinks["eportal.city"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.city"]["postulacion_preseleccionado.ciudad"] )) {
			$lookupTableLinks["eportal.city"]["postulacion_preseleccionado.ciudad"] = array();
		}
		$lookupTableLinks["eportal.city"]["postulacion_preseleccionado.ciudad"]["edit"] = array("table" => "bolsa_empleo.postulacion_preseleccionado", "field" => "ciudad", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.distritos"] ) ) {
			$lookupTableLinks["eportal.distritos"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.distritos"]["postulacion_preseleccionado.distrito"] )) {
			$lookupTableLinks["eportal.distritos"]["postulacion_preseleccionado.distrito"] = array();
		}
		$lookupTableLinks["eportal.distritos"]["postulacion_preseleccionado.distrito"]["edit"] = array("table" => "bolsa_empleo.postulacion_preseleccionado", "field" => "distrito", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.country"] ) ) {
			$lookupTableLinks["eportal.country"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.country"]["postulacion_preseleccionado.pais"] )) {
			$lookupTableLinks["eportal.country"]["postulacion_preseleccionado.pais"] = array();
		}
		$lookupTableLinks["eportal.country"]["postulacion_preseleccionado.pais"]["edit"] = array("table" => "bolsa_empleo.postulacion_preseleccionado", "field" => "pais", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"]["postulacion_preseleccionado.id_vacancia"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia"]["postulacion_preseleccionado.id_vacancia"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia"]["postulacion_preseleccionado.id_vacancia"]["edit"] = array("table" => "bolsa_empleo.postulacion_preseleccionado", "field" => "id_vacancia", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"] ) ) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion_preseleccionado.id_estado"] )) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion_preseleccionado.id_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion_preseleccionado.id_estado"]["edit"] = array("table" => "bolsa_empleo.postulacion_preseleccionado", "field" => "id_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.country"] ) ) {
			$lookupTableLinks["eportal.country"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.country"]["persons.nacionalidad"] )) {
			$lookupTableLinks["eportal.country"]["persons.nacionalidad"] = array();
		}
		$lookupTableLinks["eportal.country"]["persons.nacionalidad"]["edit"] = array("table" => "eportal.persons", "field" => "nacionalidad", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons_estado_civil_type"] ) ) {
			$lookupTableLinks["eportal.persons_estado_civil_type"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons_estado_civil_type"]["persons.estado_civil"] )) {
			$lookupTableLinks["eportal.persons_estado_civil_type"]["persons.estado_civil"] = array();
		}
		$lookupTableLinks["eportal.persons_estado_civil_type"]["persons.estado_civil"]["edit"] = array("table" => "eportal.persons", "field" => "estado_civil", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons_indigenas_types"] ) ) {
			$lookupTableLinks["eportal.persons_indigenas_types"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons_indigenas_types"]["persons.esindigena"] )) {
			$lookupTableLinks["eportal.persons_indigenas_types"]["persons.esindigena"] = array();
		}
		$lookupTableLinks["eportal.persons_indigenas_types"]["persons.esindigena"]["edit"] = array("table" => "eportal.persons", "field" => "esindigena", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.archivo_tipo"] ) ) {
			$lookupTableLinks["bolsa_empleo.archivo_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.archivo_tipo"]["archivo.id_tipo_archivo"] )) {
			$lookupTableLinks["bolsa_empleo.archivo_tipo"]["archivo.id_tipo_archivo"] = array();
		}
		$lookupTableLinks["bolsa_empleo.archivo_tipo"]["archivo.id_tipo_archivo"]["edit"] = array("table" => "bolsa_empleo.archivo", "field" => "id_tipo_archivo", "page" => "edit");
}

?>
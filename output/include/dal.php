<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers(Security::loginTable());
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tbleportal_at_192_168_70_170_bolsa_empleo_admin_gestor_audit_audit;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_archivo;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_archivo_tipo;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_bolsa_sexo;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_bolsa_users;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_cargo;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_cvc_niveles_academicos;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_empresa_bolsa_contactos;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_empresa_bolsa_tipo;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_empresa_estado;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_empresas_bolsa;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_empresas_bolsa_sucursales;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_estado_postulacion;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_feria_empleo;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_gestores_users;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_idioma;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_modalidad_trabajo;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_nivel_idioma;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_nivel_programa;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_ocupaciones_nuevas;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_postulacion;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_programas;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_seguimiento_resumen;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_seguimientos;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_tipo_contrato;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_tipo_movilidad;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_tipo_registro_conducir;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_tipo_remuneracion;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_vacancia;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_vacancia_dias_horas;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_vacancia_dias_horas_tmp;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_vacancia_empresa;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_vacancia_estado;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_vacancia_puesto;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_vacancia_requisito;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_vacancia_requisito_idioma;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_vacancia_requisito_idioma_tmp;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_vacancia_requisito_programa;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_vacancia_requisito_programa_tmp;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_vacancia_tmp;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_vacancias_dias;
	var $tbleportal_at_192_168_70_170_bolsa_empleo_vista_ocupaciones;
	var $tbleportal_at_192_168_70_170_eportal_city;
	var $tbleportal_at_192_168_70_170_eportal_country;
	var $tbleportal_at_192_168_70_170_eportal_distritos;
	var $tbleportal_at_192_168_70_170_eportal_empresas_sucursales_types;
	var $tbleportal_at_192_168_70_170_eportal_persons;
	var $tbleportal_at_192_168_70_170_eportal_persons_discap_types;
	var $tbleportal_at_192_168_70_170_eportal_persons_docs;
	var $tbleportal_at_192_168_70_170_eportal_persons_estado_civil_type;
	var $tbleportal_at_192_168_70_170_eportal_persons_indigenas_types;
	var $tbleportal_at_192_168_70_170_eportal_persons_phones;
	var $tbleportal_at_192_168_70_170_mtess_empleados_dias;
	var $tbleportal_at_192_168_70_170_public_actividad_econ;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "admin_gestor_audit_audit", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_admin_gestor_audit_audit", "altvarname" => "admin_gestor_audit_audit", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "archivo", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_archivo", "altvarname" => "archivo", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "archivo_tipo", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_archivo_tipo", "altvarname" => "archivo_tipo", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "bolsa_sexo", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_bolsa_sexo", "altvarname" => "bolsa_sexo", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "bolsa_users", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_bolsa_users", "altvarname" => "bolsa_users", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "cargo", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_cargo", "altvarname" => "cargo", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "cvc_niveles_academicos", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_cvc_niveles_academicos", "altvarname" => "cvc_niveles_academicos", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "empresa_bolsa_contactos", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_empresa_bolsa_contactos", "altvarname" => "empresa_bolsa_contactos", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "empresa_bolsa_tipo", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_empresa_bolsa_tipo", "altvarname" => "empresa_bolsa_tipo", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "empresa_estado", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_empresa_estado", "altvarname" => "empresa_estado", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "empresas_bolsa", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_empresas_bolsa", "altvarname" => "empresas_bolsa", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "empresas_bolsa_sucursales", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_empresas_bolsa_sucursales", "altvarname" => "empresas_bolsa_sucursales", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "estado_postulacion", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_estado_postulacion", "altvarname" => "estado_postulacion", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "feria_empleo", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_feria_empleo", "altvarname" => "feria_empleo", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "gestores_users", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_gestores_users", "altvarname" => "gestores_users", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "idioma", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_idioma", "altvarname" => "idioma", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "modalidad_trabajo", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_modalidad_trabajo", "altvarname" => "modalidad_trabajo", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "nivel_idioma", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_nivel_idioma", "altvarname" => "nivel_idioma", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "nivel_programa", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_nivel_programa", "altvarname" => "nivel_programa", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "ocupaciones_nuevas", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_ocupaciones_nuevas", "altvarname" => "ocupaciones_nuevas", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "postulacion", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_postulacion", "altvarname" => "postulacion", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "programas", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_programas", "altvarname" => "programas", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "seguimiento_resumen", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_seguimiento_resumen", "altvarname" => "seguimiento_resumen", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "seguimientos", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_seguimientos", "altvarname" => "seguimientos", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "tipo_contrato", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_tipo_contrato", "altvarname" => "tipo_contrato", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "tipo_movilidad", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_tipo_movilidad", "altvarname" => "tipo_movilidad", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "tipo_registro_conducir", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_tipo_registro_conducir", "altvarname" => "tipo_registro_conducir", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "tipo_remuneracion", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_tipo_remuneracion", "altvarname" => "tipo_remuneracion", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "vacancia", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia", "altvarname" => "vacancia", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "vacancia_dias_horas", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_dias_horas", "altvarname" => "vacancia_dias_horas", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "vacancia_dias_horas_tmp", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_dias_horas_tmp", "altvarname" => "vacancia_dias_horas_tmp", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "vacancia_empresa", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_empresa", "altvarname" => "vacancia_empresa", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "vacancia_estado", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_estado", "altvarname" => "vacancia_estado", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "vacancia_puesto", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_puesto", "altvarname" => "vacancia_puesto", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "vacancia_requisito", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_requisito", "altvarname" => "vacancia_requisito", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "vacancia_requisito_idioma", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_requisito_idioma", "altvarname" => "vacancia_requisito_idioma", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "vacancia_requisito_idioma_tmp", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_requisito_idioma_tmp", "altvarname" => "vacancia_requisito_idioma_tmp", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "vacancia_requisito_programa", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_requisito_programa", "altvarname" => "vacancia_requisito_programa", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "vacancia_requisito_programa_tmp", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_requisito_programa_tmp", "altvarname" => "vacancia_requisito_programa_tmp", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "vacancia_tmp", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_tmp", "altvarname" => "vacancia_tmp", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "vacancias_dias", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancias_dias", "altvarname" => "vacancias_dias", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "vista_ocupaciones", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vista_ocupaciones", "altvarname" => "vista_ocupaciones", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "city", "varname" => "eportal_at_192_168_70_170_eportal_city", "altvarname" => "city", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "country", "varname" => "eportal_at_192_168_70_170_eportal_country", "altvarname" => "country", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "distritos", "varname" => "eportal_at_192_168_70_170_eportal_distritos", "altvarname" => "distritos", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "empresas_sucursales_types", "varname" => "eportal_at_192_168_70_170_eportal_empresas_sucursales_types", "altvarname" => "empresas_sucursales_types", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "persons", "varname" => "eportal_at_192_168_70_170_eportal_persons", "altvarname" => "persons", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "persons_discap_types", "varname" => "eportal_at_192_168_70_170_eportal_persons_discap_types", "altvarname" => "persons_discap_types", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "persons_docs", "varname" => "eportal_at_192_168_70_170_eportal_persons_docs", "altvarname" => "persons_docs", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "persons_estado_civil_type", "varname" => "eportal_at_192_168_70_170_eportal_persons_estado_civil_type", "altvarname" => "persons_estado_civil_type", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "persons_indigenas_types", "varname" => "eportal_at_192_168_70_170_eportal_persons_indigenas_types", "altvarname" => "persons_indigenas_types", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "persons_phones", "varname" => "eportal_at_192_168_70_170_eportal_persons_phones", "altvarname" => "persons_phones", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "empleados_dias", "varname" => "eportal_at_192_168_70_170_mtess_empleados_dias", "altvarname" => "empleados_dias", "connId" => "eportal_at_192_168_70_170", "schema" => "mtess", "connName" => "eportal at 192.168.70.170");
		$this->lstTables[] = array("name" => "actividad_econ", "varname" => "eportal_at_192_168_70_170_public_actividad_econ", "altvarname" => "actividad_econ", "connId" => "eportal_at_192_168_70_170", "schema" => "public", "connName" => "eportal at 192.168.70.170");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>
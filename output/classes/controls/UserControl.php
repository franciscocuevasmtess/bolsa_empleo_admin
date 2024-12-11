<?php
class UserControl extends EditControl
{
	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		$this->buildUserControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		$this->buildControlEnd($validate, $mode);
	}
	
	public function buildUserControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
	}
	
	public function initUserControl()
	{		
	}
	
	function getUserSearchOptions()
	{
		return array();		
	}
	
	/**
	 * Form the control specified search options array and built the control's search options markup
	 * @param String selOpt		The search option value	
	 * @param Boolean not		It indicates if the search option negation is set 	
	 * @param Boolean both		It indicates if the control needs 'NOT'-options
	 * @return String			A string containing options markup
	 */		
	function getSearchOptions($selOpt, $not, $both)
	{
		return $this->buildSearchOptions($this->getUserSearchOptions(), $selOpt, $not, $both);		
	}
	
	function init()
	{
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.vacancia" && $field=="requisitos_exclu_formacion")
	{
		$this->settings["required"] = false;                                         // Wether is mandatory
$this->settings["placeholder"] = "Ingresar texto";                         // Text to appear in dialog box
$this->settings["select"] = "select id_requisitos_vacancia,descripcion from bolsa_empleo.vacancia_requisitos_excluyentes order by descripcion asc";           // query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["FieldWidth"] = "100%";     
//$this->settings["FieldHeight"] = "42px";                                  // Field width, can be defined in "px" or "%"
$this->settings["multiple"] = true;                                         // Possible selection of multiple values? Possible values "false" or "true"

// Only if it has been indicated that they are Multiple values
//$this->settings["maximumSelectionLength"] = 3;                               // Maximum number of values that can be selected

// Only if you want to show an image next to the selection 
// The third field of the "select" is the key of the 
//$this->settings["renderImage"] = false;                                      // true or false. true = we want to present image
//$this->settings["urlImage"] = './images/{1}.png';                            // URL to download the image. The parameter "{1}" will be replaced by the third field of the "select"
//$this->settings["widthImage"] = 30;                                          // image rendering size;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.vacancia" && $field=="habilidades_conocimiento")
	{
		$this->settings["required"] = false;                                         // Wether is mandatory
$this->settings["placeholder"] = "Ingresar texto";                         // Text to appear in dialog box
$this->settings["select"] = "select id_habilidad , descripcion from bolsa_empleo.habilidades order by descripcion asc";           // query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["FieldWidth"] = "100%";     
//$this->settings["FieldHeight"] = "42px";                                  // Field width, can be defined in "px" or "%"
$this->settings["multiple"] = true;  ;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.vacancia" && $field=="fk_ocupacion_puesto" && $this->pageObject->pageType=="edit")
	{
		$this->settings["required"] = true;                                         // Wether is mandatory
$this->settings["placeholder"] = "Ingresar texto";                         // Text to appear in dialog box
$this->settings["select"] = "select id_ocu_puest_clasic,descripcion from bolsa_empleo.ocupaciones_nuevas order by descripcion asc ";
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["multiple"] = false;                                        // image rendering size
$this->settings["FieldWidth"] = "100%";  ;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.vacancia" && $field=="fk_ocupacion_puesto" && $this->pageObject->pageType=="add")
	{
		$this->settings["required"] = true;                                         // Wether is mandatory
$this->settings["placeholder"] = "Ingresar texto";                         // Text to appear in dialog box
$this->settings["select"] = "select id_ocu_puest_clasic,descripcion from bolsa_empleo.ocupaciones_nuevas order by descripcion asc limit 10";
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["multiple"] = false;                                        // image rendering size;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.vacancia" && $field=="fk_ocupacion_puesto" && $this->pageObject->pageType=="search")
	{
		$this->settings["required"] = true;                                         // Wether is mandatory
$this->settings["placeholder"] = "Ingresar texto";                         // Text to appear in dialog box
$this->settings["select"] = "select id_ocu_puest_clasic,descripcion from bolsa_empleo.ocupaciones_nuevas order by descripcion asc ";
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["multiple"] = false;                                        // image rendering size;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.vacancia" && $field=="horario_rotativo")
	{
		$this->settings["required"] = false;                   // Wether is mandatory
$this->settings["disabled"] = false;                   // Disable or Enable; false or true
$this->settings["name_enable"] = "Sí";                 // Name of Enable
$this->settings["name_disable"] = "No";               // Name of Enable
$this->settings["size"] = "normal";                    // Size field  values: large,normal,small,mini
$this->settings["style"] = "primary";                  // Style field  values: default,primary,success,info,warning,danger;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.vacancia" && $field=="salario_descripcion")
	{
		$this->settings["required"] = false;                                         // Wether is mandatory
$this->settings["placeholder"] = "Select an option";                         // Text to appear in dialog box
$this->settings["select"] = "SELECT id_va_salario_desc, descripcion_salario FROM bolsa_empleo.vacancia_salario_descripcion";           // query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["FieldWidth"] = "100%";                                       // Field width, can be defined in "px" or "%"
$this->settings["multiple"] = false;        ;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.vacancia_requisito_programa" && $field=="id_programa")
	{
		$this->settings["required"] = true;                                         // Wether is mandatory
$this->settings["placeholder"] = "Seleccionar programa";                         // Text to appear in dialog box
$this->settings["select"] = "select id_programas, nombre from bolsa_empleo.programas order by nombre asc limit 10";           // query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
//$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["FieldWidth"] = "90%";                                         // Field width, can be defined in "px" or "%"
$this->settings["multiple"] = false; ;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.empresa_bolsa_contactos" && $field=="id_cargo" && $this->pageObject->pageType=="edit")
	{
		$this->settings["required"] = true;                                         // Wether is mandatory
$this->settings["placeholder"] = "Seleccionar cargo";                         // Text to appear in dialog box
$this->settings["select"] = "select id_cargo,descripcion_cargo from bolsa_empleo.cargo";           // query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["FieldWidth"] = "325px";                                      // Field width, can be defined in "px" or "%"
$this->settings["multiple"] = false; 
                                      // image rendering size;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.empresa_bolsa_contactos" && $field=="id_cargo" && $this->pageObject->pageType=="add")
	{
		$this->settings["required"] = true;                                         // Wether is mandatory
$this->settings["placeholder"] = "Seleccionar cargo";                         // Text to appear in dialog box
$this->settings["select"] = "select id_cargo,descripcion_cargo from bolsa_empleo.cargo";           // query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["FieldWidth"] = "325px";                                      // Field width, can be defined in "px" or "%"
$this->settings["multiple"] = false; 
                                      // image rendering size;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="vacancia_pendiente" && $field=="requisitos_exclu_formacion")
	{
		$this->settings["required"] = false;                                         // Wether is mandatory
$this->settings["placeholder"] = "Ingresar texto";                         // Text to appear in dialog box
$this->settings["select"] = "select id_requisitos_vacancia,descripcion from bolsa_empleo.vacancia_requisitos_excluyentes order by descripcion asc";           // query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
//$this->settings["FieldWidth"] = "100%";     
//$this->settings["FieldHeight"] = "42px";                                  // Field width, can be defined in "px" or "%"
$this->settings["multiple"] = true;                                         // Possible selection of multiple values? Possible values "false" or "true"

// Only if it has been indicated that they are Multiple values
//$this->settings["maximumSelectionLength"] = 3;                               // Maximum number of values that can be selected

// Only if you want to show an image next to the selection 
// The third field of the "select" is the key of the 
//$this->settings["renderImage"] = false;                                      // true or false. true = we want to present image
//$this->settings["urlImage"] = './images/{1}.png';                            // URL to download the image. The parameter "{1}" will be replaced by the third field of the "select"
//$this->settings["widthImage"] = 30;                                          // image rendering size;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="vacancia_pendiente" && $field=="habilidades_conocimiento")
	{
		$this->settings["required"] = false;                                         // Wether is mandatory
$this->settings["placeholder"] = "Ingresar texto";                         // Text to appear in dialog box
$this->settings["select"] = "select id_habilidad , descripcion from bolsa_empleo.habilidades order by descripcion asc";           // query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
//$this->settings["FieldWidth"] = "100%";     
//$this->settings["FieldHeight"] = "42px";                                  // Field width, can be defined in "px" or "%"
$this->settings["multiple"] = true;  ;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="vacancia_pendiente" && $field=="fk_ocupacion_puesto" && $this->pageObject->pageType=="edit")
	{
		$this->settings["required"] = true;                                         // Wether is mandatory
$this->settings["placeholder"] = "Ingresar texto";                         // Text to appear in dialog box
$this->settings["select"] = "select id_ocu_puest_clasic,descripcion from bolsa_empleo.ocupaciones_nuevas order by descripcion asc ";
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["multiple"] = false;                                        // image rendering size;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="vacancia_pendiente" && $field=="fk_ocupacion_puesto" && $this->pageObject->pageType=="add")
	{
		$this->settings["required"] = true;                                         // Wether is mandatory
$this->settings["placeholder"] = "Ingresar texto";                         // Text to appear in dialog box
$this->settings["select"] = "select id_ocu_puest_clasic,descripcion from bolsa_empleo.ocupaciones_nuevas order by descripcion asc limit 10";
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["multiple"] = false;                                        // image rendering size;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="vacancia_pendiente" && $field=="fk_ocupacion_puesto" && $this->pageObject->pageType=="search")
	{
		$this->settings["required"] = true;                                         // Wether is mandatory
$this->settings["placeholder"] = "Ingresar texto";                         // Text to appear in dialog box
$this->settings["select"] = "select id_ocu_puest_clasic,descripcion from bolsa_empleo.ocupaciones_nuevas order by descripcion asc ";
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["multiple"] = false;                                        // image rendering size;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="vacancia_pendiente" && $field=="horario_rotativo")
	{
		$this->settings["required"] = false;                   // Wether is mandatory
$this->settings["disabled"] = false;                   // Disable or Enable; false or true
$this->settings["name_enable"] = "Sí";                 // Name of Enable
$this->settings["name_disable"] = "No";               // Name of Enable
$this->settings["size"] = "normal";                    // Size field  values: large,normal,small,mini
$this->settings["style"] = "primary";                  // Style field  values: default,primary,success,info,warning,danger;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="vacancia_pendiente" && $field=="salario_descripcion")
	{
		$this->settings["required"] = false;                                         // Wether is mandatory
$this->settings["placeholder"] = "Select an option";                         // Text to appear in dialog box
$this->settings["select"] = "SELECT id_va_salario_desc, descripcion_salario FROM bolsa_empleo.vacancia_salario_descripcion";           // query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
//$this->settings["FieldWidth"] = "340px";                                      // Field width, can be defined in "px" or "%"
$this->settings["multiple"] = false;        ;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.vacancia_tmp" && $field=="fk_ocupacion_puesto")
	{
		$this->settings["required"] = true;                                         // Wether is mandatory
$this->settings["placeholder"] = "Nueva Oferta Laboral";                         // Text to appear in dialog box
$this->settings["select"] = "select id_ocu_puest_clasic,descripcion from bolsa_empleo.ocupaciones_nuevas order by descripcion asc limit 10 ";
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["multiple"] = false;  
$this->settings["FieldWidth"] = "100%";  
                                  // image rendering size;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.vacancia_tmp" && $field=="horario_rotativo")
	{
		$this->settings["required"] = false;                   // Wether is mandatory
$this->settings["disabled"] = false;                   // Disable or Enable; false or true
$this->settings["name_enable"] = "Sí";                 // Name of Enable
$this->settings["name_disable"] = "No";               // Name of Enable
$this->settings["size"] = "normal";                    // Size field  values: large,normal,small,mini
$this->settings["style"] = "primary";     ;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.vacancia_tmp" && $field=="descripcion_salario")
	{
		$this->settings["required"] = false;                                         // Wether is mandatory
$this->settings["placeholder"] = "Select an option";                         // Text to appear in dialog box
$this->settings["select"] = "SELECT id_va_salario_desc, descripcion_salario FROM bolsa_empleo.vacancia_salario_descripcion";           // query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
//$this->settings["FieldWidth"] = "340px";                                      // Field width, can be defined in "px" or "%"
$this->settings["multiple"] = false;            
$this->settings["FieldWidth"] = "100%"; ;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.vacancia_tmp" && $field=="requisitos_exclu_formacion")
	{
		$this->settings["required"] = false;                                         // Wether is mandatory
$this->settings["placeholder"] = "Ingresar texto";                         // Text to appear in dialog box
$this->settings["select"] = "select id_requisitos_vacancia,descripcion from bolsa_empleo.vacancia_requisitos_excluyentes order by descripcion asc";           // query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["FieldWidth"] = "100%";     
//$this->settings["FieldHeight"] = "42px";                                  // Field width, can be defined in "px" or "%"
$this->settings["multiple"] = true;                                         // Possible selection of multiple values? Possible values "false" or "true"
                                       // image rendering size                                      // image rendering size;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.vacancia_tmp" && $field=="habilidades_conocimiento")
	{
		$this->settings["required"] = false;                                         // Wether is mandatory
$this->settings["placeholder"] = "Ingresar texto";                         // Text to appear in dialog box
$this->settings["select"] = "select id_habilidad , descripcion from bolsa_empleo.habilidades order by descripcion asc";           // query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["FieldWidth"] = "100%";     
//$this->settings["FieldHeight"] = "42px";                                  // Field width, can be defined in "px" or "%"
$this->settings["multiple"] = true;                                         // image rendering size;
		return;
	}	
	}
}
?>
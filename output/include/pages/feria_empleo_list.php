<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
'inlineEdit' => false,
'spreadsheetMode' => false,
'addToBottom' => false,
'delete' => false,
'updateSelected' => false,
'viewInPopup' => null,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false,
'fieldFilter' => false,
'hideNumberOfRecords' => false ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'id_feria_empleo' => array( 'totalsType' => '' ),
'nombre' => array( 'totalsType' => '' ),
'fecha_inicio' => array( 'totalsType' => '' ),
'fecha_fin' => array( 'totalsType' => '' ),
'locacion' => array( 'totalsType' => '' ),
'asistentes' => array( 'totalsType' => '' ),
'descripcion' => array( 'totalsType' => '' ),
'es_programa' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'nombre',
'descripcion',
'fecha_inicio',
'fecha_fin',
'locacion',
'es_programa',
'id_feria_empleo' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'id_feria_empleo',
'es_programa',
'descripcion',
'asistentes',
'locacion',
'fecha_fin',
'fecha_inicio',
'nombre' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'nombre' => array( 'simple_grid_field1',
'simple_grid_field' ),
'fecha_inicio' => array( 'simple_grid_field2',
'simple_grid_field5' ),
'fecha_fin' => array( 'simple_grid_field3',
'simple_grid_field6' ),
'locacion' => array( 'simple_grid_field4',
'simple_grid_field7' ),
'descripcion' => array( 'grid_field',
'grid_field_label' ),
'es_programa' => array( 'grid_field1',
'grid_field_label1' ),
'id_feria_empleo' => array( 'grid_field2' ) ),
'hideEmptyFields' => array(  ),
'fieldFilterFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'text',
'simple_search',
'search_panel',
'add',
'details_found' ),
'below-grid' => array( 'pagination' ),
'supertop' => array( 'logo',
'menu',
'list_options',
'loginform_login',
'username_button' ),
'left' => array(  ),
'top' => array( 'breadcrumb' ),
'grid' => array( 'simple_grid_field',
'simple_grid_field1',
'grid_field_label',
'grid_field',
'simple_grid_field5',
'simple_grid_field2',
'simple_grid_field6',
'simple_grid_field3',
'text1',
'grid_edit',
'simple_grid_field7',
'simple_grid_field4',
'grid_field_label1',
'grid_field1',
'grid_field2',
'custom_button' ) ),
'formXtTags' => array( 'below-grid' => array( 'pagination' ),
'left' => array(  ),
'top' => array( 'breadcrumb' ) ),
'itemForms' => array( 'text' => 'above-grid',
'simple_search' => 'above-grid',
'search_panel' => 'above-grid',
'add' => 'above-grid',
'details_found' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'supertop',
'menu' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'breadcrumb' => 'top',
'simple_grid_field' => 'grid',
'simple_grid_field1' => 'grid',
'grid_field_label' => 'grid',
'grid_field' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field3' => 'grid',
'text1' => 'grid',
'grid_edit' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field4' => 'grid',
'grid_field_label1' => 'grid',
'grid_field1' => 'grid',
'grid_field2' => 'grid',
'custom_button' => 'grid' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'grid_field_label' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'text1' => array( 'location' => 'grid',
'cellId' => 'headcell_icons' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'grid_field_label1' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'custom_button' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ) ),
'itemVisiblity' => array( 'menu' => 3,
'username_button' => 3,
'loginform_login' => 3,
'search_panel' => 5,
'list_options' => 3,
'simple_search' => 3 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'pagination' => array( 'pagination' ),
'details_found' => array( 'details_found' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'grid_field' => array( 'simple_grid_field1',
'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field4',
'grid_field',
'grid_field1',
'grid_field2' ),
'add' => array( 'add' ),
'grid_edit' => array( 'grid_edit' ),
'text' => array( 'text',
'text1' ),
'breadcrumb' => array( 'breadcrumb' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6',
'search_panel_field7' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field7',
'grid_field_label',
'grid_field_label1' ),
'simple_search' => array( 'simple_search' ),
'advsearch_link' => array( 'advsearch_link' ),
'custom_button' => array( 'custom_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'text1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'nombre_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'descripcion_fieldheadercolumn' ),
'items' => array( 'grid_field_label' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'fecha_inicio_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'fecha_fin_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'locacion_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'es_programa_fieldheadercolumn' ),
'items' => array( 'grid_field_label1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column' ),
'items' => array( 'grid_edit' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'nombre_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'descripcion_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'fecha_inicio_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'fecha_fin_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'locacion_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'es_programa_fieldcolumn' ),
'items' => array( 'grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => true,
'fixedAtClient' => true ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 8,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'label' => 'DISPLAYING3',
'table' => null,
'type' => 1 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => true,
'customButtons' => array( 'New_Button9' ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => true ) ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array( 'New_Button9' ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'text' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'search_panel',
'add' ) ),
'c3' => array( 'model' => 'c3',
'items' => array( 'details_found' ) ),
'c4' => array( 'model' => 'c4',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'menu',
'list_options',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'list-vbar',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'breadcrumb' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'cell_field6' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field7' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'cell_field8' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'nombre',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'nombre',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label' ),
'field' => 'descripcion',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'field' => 'descripcion',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'fecha_inicio',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'fecha_inicio',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'fecha_fin',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'fecha_fin',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array( 'text1' ) ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'locacion',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'locacion',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label1' ),
'field' => 'es_programa',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'grid_field1' ),
'field' => 'es_programa',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_field6' => array( 'model' => 'headcell_field',
'items' => array(  ) ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'grid_field2',
'custom_button' ),
'field' => 'id_feria_empleo',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'pagination' => array( 'type' => 'pagination' ),
'details_found' => array( 'type' => 'details_found',
'color' => '#ffffff',
'label' => array( 'label' => 'DISPLAYING3',
'table' => null,
'type' => 1 ),
'bold' => true ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'-' => array( 'type' => '-' ),
'-1' => array( 'type' => '-' ),
'-2' => array( 'type' => '-' ),
'-3' => array( 'type' => '-' ),
'simple_grid_field1' => array( 'field' => 'nombre',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field2' => array( 'field' => 'fecha_inicio',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field3' => array( 'field' => 'fecha_fin',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field4' => array( 'field' => 'locacion',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'label' => array( 'field' => 'locacion',
'table' => 'bolsa_empleo.feria_empleo',
'type' => 3 ) ),
'add' => array( 'type' => 'add' ),
'grid_edit' => array( 'type' => 'grid_edit' ),
'text' => array( 'type' => 'text',
'label' => array( 'type' => 0,
'text' => 'Tipo de Oferta Laboral' ),
'editedByRte' => false,
'color' => '#ffffff',
'font-size' => '26px',
'bold' => true ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2',
'search_panel_field1' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'advsearch_link',
'show_search_panel',
'hide_search_panel' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'id_feria_empleo',
'type' => 'search_panel_field' ),
'search_panel_field1' => array( 'field' => 'nombre',
'type' => 'search_panel_field' ),
'search_panel_field2' => array( 'field' => 'fecha_inicio',
'type' => 'search_panel_field' ),
'search_panel_field3' => array( 'field' => 'fecha_fin',
'type' => 'search_panel_field' ),
'search_panel_field4' => array( 'field' => 'locacion',
'type' => 'search_panel_field' ),
'search_panel_field5' => array( 'field' => 'asistentes',
'type' => 'search_panel_field' ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'nombre' ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'fecha_inicio' ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'fecha_fin' ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'locacion' ),
'simple_search' => array( 'type' => 'simple_search' ),
'text1' => array( 'type' => 'text',
'label' => array( 'text' => 'Editar',
'type' => 0 ),
'editedByRte' => false ),
'grid_field' => array( 'field' => 'descripcion',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field_label' => array( 'type' => 'grid_field_label',
'field' => 'descripcion' ),
'search_panel_field6' => array( 'field' => 'descripcion',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'grid_field1' => array( 'field' => 'es_programa',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field_label1' => array( 'type' => 'grid_field_label',
'field' => 'es_programa',
'label' => array( 'field' => 'es_programa',
'table' => 'bolsa_empleo.feria_empleo',
'type' => 3 ) ),
'search_panel_field7' => array( 'field' => 'es_programa',
'type' => 'search_panel_field',
'required' => false ),
'custom_button' => array( 'eventId' => 'New_Button9',
'label' => array( 'type' => 0,
'text' => 'Descargar Asistentes' ),
'type' => 'custom_button',
'buttonSize' => 'xtra-small',
'tooltip' => array( 'type' => 0,
'text' => 'Descargar Asistentes' ),
'icon' => array( 'glyph' => 'download-alt' ),
'buttonStyle' => 'success' ),
'grid_field2' => array( 'field' => 'id_feria_empleo',
'type' => 'grid_field' ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 14,
'pageAlign' => 'center',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>
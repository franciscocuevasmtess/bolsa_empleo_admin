<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => true,
'detailsAdd' => true,
'inlineEdit' => true,
'spreadsheetMode' => false,
'addToBottom' => false,
'delete' => true,
'updateSelected' => false,
'addInPopup' => null,
'editInPopup' => null,
'viewInPopup' => null,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false,
'fieldFilter' => false,
'hideNumberOfRecords' => false ),
'master' => array( 'bolsa_empleo.vacancia' => array( 'preview' => true ),
'vacancia_pendiente' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'id_vacancia_dias_horas_trabajo' => array( 'totalsType' => '' ),
'vacancia_dias' => array( 'totalsType' => '' ),
'vacancia_horas' => array( 'totalsType' => '' ),
'id_vacancias' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'id_vacancias',
'vacancia_dias',
'vacancia_horas' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'id_vacancia_dias_horas_trabajo',
'vacancia_horas',
'vacancia_dias',
'id_vacancias' ),
'filterFields' => array(  ),
'inlineAddFields' => array( 'vacancia_dias',
'vacancia_horas',
'id_vacancias' ),
'inlineEditFields' => array( 'vacancia_dias',
'vacancia_horas',
'id_vacancias' ),
'fieldItems' => array( 'vacancia_dias' => array( 'simple_grid_field1',
'simple_grid_field5' ),
'vacancia_horas' => array( 'simple_grid_field2',
'simple_grid_field6' ),
'id_vacancias' => array( 'simple_grid_field3' ) ),
'hideEmptyFields' => array(  ),
'fieldFilterFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'inline_add',
'inline_save_all',
'inline_cancel_all',
'delete',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'supertop' => array( 'logo',
'menu',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'left' => array( 'search_panel' ),
'top' => array( 'breadcrumb',
'master_info' ),
'grid' => array( 'simple_grid_field5',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel',
'simple_grid_field3',
'simple_grid_field1',
'simple_grid_field6',
'simple_grid_field2',
'grid_checkbox_head',
'grid_checkbox' ) ),
'formXtTags' => array( 'above-grid' => array( 'inlineadd_link',
'saveall_link',
'cancelall_link',
'deleteselected_link',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array( 'breadcrumb',
'mastertable_block' ) ),
'itemForms' => array( 'inline_add' => 'above-grid',
'inline_save_all' => 'above-grid',
'inline_cancel_all' => 'above-grid',
'delete' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'supertop',
'menu' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'search_panel' => 'left',
'breadcrumb' => 'top',
'master_info' => 'top',
'simple_grid_field5' => 'grid',
'grid_inline_edit' => 'grid',
'grid_inline_save' => 'grid',
'grid_inline_cancel' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field2' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid' ),
'itemLocations' => array( 'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'grid_inline_edit' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'grid_inline_save' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ) ),
'itemVisiblity' => array( 'menu' => 3,
'simple_search' => 3,
'search_panel' => 5,
'list_options' => 3,
'username_button' => 3,
'loginform_login' => 3,
'print_panel' => 5 ) ),
'itemsByType' => array( 'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field2',
'search_panel_field3' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'delete' => array( 'delete' ),
'delete_selected' => array( 'delete_selected' ),
'advsearch_link' => array( 'advsearch_link' ),
'grid_field' => array( 'simple_grid_field1',
'simple_grid_field2',
'simple_grid_field3' ),
'master_info' => array( 'master_info' ),
'grid_field_label' => array( 'simple_grid_field5',
'simple_grid_field6' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ),
'grid_inline_save' => array( 'grid_inline_save' ),
'inline_save_all' => array( 'inline_save_all' ),
'inline_cancel_all' => array( 'inline_cancel_all' ),
'edit_selected' => array( 'edit_selected' ),
'grid_inline_edit' => array( 'grid_inline_edit' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_checkbox' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'vacancia_dias_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'vacancia_horas_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'inlineedit_column',
'inline_save',
'inline_cancel',
'id_vacancias_fieldcolumn',
'vacancia_dias_fieldcolumn' ),
'items' => array( 'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel',
'simple_grid_field3',
'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'vacancia_horas_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 3,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => true ) ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'inline_add',
'inline_save_all',
'inline_cancel_all',
'delete' ),
'background' => '#d5018a',
'customCSS' => '/* Put  your custom CSS code here */

:host {
   background-image: linear-gradient(100deg,#4e49f8 0%,#d5018a 100%)!important;
}
' ),
'c' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'print_panel' ) ) ),
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
'items' => array( 'logo',
'menu' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'list-vbar',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'search_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'breadcrumb' ) ),
'c3' => array( 'model' => 'c3',
'items' => array( 'master_info' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_field1',
'colspan' => 1 ),
array( 'cell' => 'headcell_field2' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_field1',
'colspan' => 1 ),
array( 'cell' => 'cell_field2' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_field1',
'colspan' => 1 ),
array( 'cell' => 'footcell_field2' ) ) ) ),
'cells' => array( 'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field5' ),
'width' => '33%',
'align' => 'left',
'field' => 'vacancia_dias',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel',
'simple_grid_field3',
'simple_grid_field1' ),
'width' => '80px',
'align' => 'left',
'background' => '#ffffff',
'padding' => array( 'padding' => '0px' ),
'field' => 'id_vacancias',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ),
'width' => '33%',
'align' => 'left' ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'width' => '33%',
'align' => 'left',
'field' => 'vacancia_horas',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'width' => '80px',
'align' => 'left',
'background' => '#ffffff',
'field' => 'vacancia_horas',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ),
'width' => '33%',
'align' => 'left' ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ) ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ) ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field3',
'search_panel_field2',
'search_panel_field1' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'edit_selected',
'delete_selected',
'-3',
'advsearch_link',
'show_search_panel',
'hide_search_panel' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'id_vacancia_dias_horas_trabajo',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field1' => array( 'field' => 'id_vacancias',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field2' => array( 'field' => 'vacancia_dias',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field3' => array( 'field' => 'vacancia_horas',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
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
'delete' => array( 'type' => 'delete' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'simple_grid_field1' => array( 'field' => 'vacancia_dias',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true ),
'simple_grid_field2' => array( 'field' => 'vacancia_horas',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true ),
'simple_grid_field3' => array( 'field' => 'id_vacancias',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'bolsa_empleo.vacancia' => 'true',
'vacancia_pendiente' => 'true' ) ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'vacancia_dias',
'bold' => true ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'vacancia_horas',
'bold' => true ),
'inline_add' => array( 'type' => 'inline_add',
'background' => '#4e49f8',
'customCSS' => '/* Put  your custom CSS code here */

:host {
 background-color:#4e49f8;
}
' ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ),
'grid_inline_save' => array( 'type' => 'grid_inline_save' ),
'inline_save_all' => array( 'type' => 'inline_save_all',
'background' => '#4e49f8',
'customCSS' => '/* Put  your custom CSS code here */

:host {
 background-color:#4e49f8;
}
' ),
'inline_cancel_all' => array( 'type' => 'inline_cancel_all' ),
'edit_selected' => array( 'type' => 'edit_selected' ),
'grid_inline_edit' => array( 'type' => 'grid_inline_edit' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>
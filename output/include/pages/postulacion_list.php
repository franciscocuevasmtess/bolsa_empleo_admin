<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => true,
'inlineEdit' => false,
'spreadsheetMode' => false,
'reorderRows' => false,
'addToBottom' => false,
'delete' => false,
'updateSelected' => false,
'addInPopup' => null,
'editInPopup' => null,
'viewInPopup' => null,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false,
'hideNumberOfRecords' => false ),
'master' => array( 'bolsa_empleo.vacancia' => array( 'preview' => false ),
'bolsa_empleo.estado_postulacion' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array( 'ciudad',
'distrito',
'cedula' ),
'searchPanel' => true,
'fixedSearchPanel' => true,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'nombre_completo' => array( 'totalsType' => '' ),
'fechanac' => array( 'totalsType' => '' ),
'sexo' => array( 'totalsType' => '' ),
'domicilio' => array( 'totalsType' => '' ),
'ciudad' => array( 'totalsType' => '' ),
'distrito' => array( 'totalsType' => '' ),
'pais' => array( 'totalsType' => '' ),
'estado_civil' => array( 'totalsType' => '' ),
'cedula' => array( 'totalsType' => '' ),
'telefono' => array( 'totalsType' => '' ),
'id_vacancia' => array( 'totalsType' => '' ),
'hash_generado' => array( 'totalsType' => '' ),
'empresa' => array( 'totalsType' => '' ),
'descri_empresa' => array( 'totalsType' => '' ),
'id_postulacion' => array( 'totalsType' => '' ),
'id_estado' => array( 'totalsType' => '' ),
'id_vacancias' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'empresa',
'descri_empresa',
'hash_generado',
'id_vacancias',
'nombre_completo',
'id_postulacion',
'cedula',
'sexo',
'telefono',
'estado_civil',
'fechanac',
'domicilio',
'distrito',
'ciudad',
'pais' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'cedula',
'id_vacancias',
'id_estado',
'id_postulacion',
'distrito',
'ciudad' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'fechanac' => array( 'simple_grid_field4',
'simple_grid_field17' ),
'sexo' => array( 'simple_grid_field5',
'simple_grid_field18' ),
'domicilio' => array( 'simple_grid_field6',
'simple_grid_field19' ),
'ciudad' => array( 'simple_grid_field7' ),
'distrito' => array( 'simple_grid_field8' ),
'estado_civil' => array( 'simple_grid_field10',
'simple_grid_field23' ),
'cedula' => array( 'simple_grid_field11' ),
'telefono' => array( 'simple_grid_field12' ),
'pais' => array( 'grid_field',
'grid_field_label' ),
'nombre_completo' => array( 'grid_field1' ),
'empresa' => array( 'grid_field3' ),
'descri_empresa' => array( 'grid_field4' ),
'id_postulacion' => array( 'grid_field5' ),
'id_vacancias' => array( 'grid_field6' ),
'hash_generado' => array( 'hash_generado' ) ),
'hideEmptyFields' => array(  ),
'fieldFilterFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'details_found',
'inline_add',
'text8',
'simple_search' ),
'below-grid' => array( 'pagination',
'search_panel' ),
'supertop' => array( 'logo',
'menu',
'username_button' ),
'left' => array(  ),
'top' => array( 'breadcrumb',
'master_info' ),
'grid' => array( 'grid_inline_cancel',
'image1',
'grid_field1',
'text',
'grid_field5',
'image2',
'text1',
'simple_grid_field11',
'image6',
'text5',
'simple_grid_field8',
'text7',
'simple_grid_field7',
'image5',
'simple_grid_field19',
'simple_grid_field6',
'image4',
'simple_grid_field17',
'simple_grid_field4',
'simple_grid_field23',
'simple_grid_field10',
'simple_grid_field18',
'simple_grid_field5',
'grid_field_label',
'grid_field',
'image3',
'text2',
'simple_grid_field12',
'image',
'grid_field3',
'text3',
'grid_field4',
'hash_generado',
'text4',
'grid_field6',
'boton_descargar_cv' ) ),
'formXtTags' => array( 'left' => array(  ),
'top' => array( 'breadcrumb',
'mastertable_block' ) ),
'itemForms' => array( 'details_found' => 'above-grid',
'inline_add' => 'above-grid',
'text8' => 'above-grid',
'simple_search' => 'above-grid',
'pagination' => 'below-grid',
'search_panel' => 'below-grid',
'logo' => 'supertop',
'menu' => 'supertop',
'username_button' => 'supertop',
'breadcrumb' => 'top',
'master_info' => 'top',
'grid_inline_cancel' => 'grid',
'image1' => 'grid',
'grid_field1' => 'grid',
'text' => 'grid',
'grid_field5' => 'grid',
'image2' => 'grid',
'text1' => 'grid',
'simple_grid_field11' => 'grid',
'image6' => 'grid',
'text5' => 'grid',
'simple_grid_field8' => 'grid',
'text7' => 'grid',
'simple_grid_field7' => 'grid',
'image5' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field6' => 'grid',
'image4' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field23' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field5' => 'grid',
'grid_field_label' => 'grid',
'grid_field' => 'grid',
'image3' => 'grid',
'text2' => 'grid',
'simple_grid_field12' => 'grid',
'image' => 'grid',
'grid_field3' => 'grid',
'text3' => 'grid',
'grid_field4' => 'grid',
'hash_generado' => 'grid',
'text4' => 'grid',
'grid_field6' => 'grid',
'boton_descargar_cv' => 'grid' ),
'itemLocations' => array( 'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'image1' => array( 'location' => 'grid',
'cellId' => 'cell_label' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_label' ),
'text' => array( 'location' => 'grid',
'cellId' => 'cell_label' ),
'grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_label' ),
'image2' => array( 'location' => 'grid',
'cellId' => 'cell_label1' ),
'text1' => array( 'location' => 'grid',
'cellId' => 'cell_label1' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_label1' ),
'image6' => array( 'location' => 'grid',
'cellId' => 'cell_label27' ),
'text5' => array( 'location' => 'grid',
'cellId' => 'cell_label27' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_label27' ),
'text7' => array( 'location' => 'grid',
'cellId' => 'cell_label27' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_label27' ),
'image5' => array( 'location' => 'grid',
'cellId' => 'cell_label29' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'cell_label29' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_label29' ),
'image4' => array( 'location' => 'grid',
'cellId' => 'cell_label31' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'cell_label31' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_label31' ),
'simple_grid_field23' => array( 'location' => 'grid',
'cellId' => 'cell_label33' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_label33' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'cell_label35' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_label35' ),
'grid_field_label' => array( 'location' => 'grid',
'cellId' => 'cell_label41' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_label41' ),
'image3' => array( 'location' => 'grid',
'cellId' => 'cell_label45' ),
'text2' => array( 'location' => 'grid',
'cellId' => 'cell_label45' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_label45' ),
'image' => array( 'location' => 'grid',
'cellId' => 'cell_label2' ),
'grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_label2' ),
'text3' => array( 'location' => 'grid',
'cellId' => 'cell_label2' ),
'grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_label2' ),
'hash_generado' => array( 'location' => 'grid',
'cellId' => 'cell_label2' ),
'text4' => array( 'location' => 'grid',
'cellId' => 'cell_label2' ),
'grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_label2' ),
'boton_descargar_cv' => array( 'location' => 'grid',
'cellId' => 'cell_label3' ) ),
'itemVisiblity' => array( 'menu' => 3,
'simple_search' => 3,
'search_panel' => 5,
'username_button' => 3 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'details_found' => array( 'details_found' ),
'search_panel' => array( 'search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5' ),
'username_button' => array( 'username_button' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'-' => array( '-' ),
'grid_field' => array( 'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field10',
'simple_grid_field11',
'simple_grid_field12',
'grid_field',
'grid_field1',
'grid_field3',
'grid_field4',
'grid_field5',
'grid_field6',
'hash_generado' ),
'grid_field_label' => array( 'simple_grid_field17',
'simple_grid_field18',
'simple_grid_field19',
'simple_grid_field23',
'grid_field_label' ),
'text' => array( 'text',
'text3',
'text4',
'text7',
'text8',
'text1',
'text2',
'text5' ),
'image' => array( 'image',
'image1',
'image2',
'image3',
'image4',
'image5',
'image6' ),
'master_info' => array( 'master_info' ),
'breadcrumb' => array( 'breadcrumb' ),
'custom_button' => array( 'boton_descargar_cv' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'cell_top' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'inline_cancel' ),
'items' => array( 'grid_inline_cancel' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label3' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => true,
'fixedAtClient' => true ),
'cell_label2' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'image',
'grid_field3',
'text3',
'grid_field4',
'hash_generado',
'text4',
'grid_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_label' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'image1',
'grid_field1',
'text',
'grid_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_label1' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'image2',
'text1',
'simple_grid_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_label35' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array( 'sexo_fieldheadercolumn',
'sexo_fieldcolumn' ),
'items' => array( 'simple_grid_field18',
'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label45' => array( 'cols' => array( 0 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array( 'image3',
'text2',
'simple_grid_field12' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_label33' => array( 'cols' => array( 0 ),
'rows' => array( 7 ),
'tags' => array( 'estado_civil_fieldheadercolumn',
'estado_civil_fieldcolumn' ),
'items' => array( 'simple_grid_field23',
'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label31' => array( 'cols' => array( 0 ),
'rows' => array( 8 ),
'tags' => array(  ),
'items' => array( 'image4',
'simple_grid_field17',
'simple_grid_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_label29' => array( 'cols' => array( 0 ),
'rows' => array( 9 ),
'tags' => array(  ),
'items' => array( 'image5',
'simple_grid_field19',
'simple_grid_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_label27' => array( 'cols' => array( 0 ),
'rows' => array( 10 ),
'tags' => array(  ),
'items' => array( 'image6',
'text5',
'simple_grid_field8',
'text7',
'simple_grid_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_label41' => array( 'cols' => array( 0 ),
'rows' => array( 11 ),
'tags' => array( 'pais_fieldheadercolumn',
'pais_fieldcolumn' ),
'items' => array( 'grid_field_label',
'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label42' => array( 'cols' => array( 0 ),
'rows' => array( 12 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0 ),
'rows' => array( 13 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 14 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'label' => 'DISPLAYING',
'table' => null,
'type' => 1 ) ) ),
'gridType' => 1,
'recsPerRow' => 1,
'hasCustomButtons' => true,
'customButtons' => array( 'New_Button12' ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => true ) ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array( 'New_Button12' ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c3' ) ) ),
array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'details_found',
'inline_add' ) ),
'c2' => array( 'model' => 'c2',
'items' => array(  ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'text8' ) ),
'c3' => array( 'model' => 'c2',
'items' => array( 'simple_search' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'search_panel' ) ) ),
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
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'list-vbar',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array(  ) ) ),
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
'grid' => array( 'modelId' => 'vertical-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'cell_top',
'colspan' => 1 ) ),
'section' => 'head' ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_label3',
'colspan' => 1 ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_label2',
'colspan' => 1 ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_label',
'colspan' => 1 ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label1',
'colspan' => 1 ) ),
'section' => 'body' ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_label35',
'colspan' => 1 ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_label45',
'colspan' => 1 ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_label33',
'colspan' => 1 ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_label31',
'colspan' => 1 ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_label29',
'colspan' => 1 ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_label27',
'colspan' => 1 ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_label41',
'colspan' => 1 ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_label42' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 1 ) ),
'section' => 'foot' ) ),
'cells' => array( 'cell_top' => array( 'model' => 'cell_top',
'items' => array( 'grid_inline_cancel' ),
'align' => 'right',
'color' => '#000000' ),
'cell_label' => array( 'model' => 'cell_label',
'items' => array( 'image1',
'grid_field1',
'text',
'grid_field5' ),
'orientation' => 'horizontal',
'align' => 'left',
'width' => '80%',
'field' => 'nombre_completo',
'columnName' => 'field' ),
'cell_label1' => array( 'model' => 'cell_label',
'items' => array( 'image2',
'text1',
'simple_grid_field11' ),
'align' => 'left',
'useFullWidth' => true,
'field' => 'cedula',
'columnName' => 'field' ),
'cell_label27' => array( 'model' => 'cell_label',
'items' => array( 'image6',
'text5',
'simple_grid_field8',
'text7',
'simple_grid_field7' ),
'align' => 'left',
'useFullWidth' => true,
'field' => 'distrito',
'columnName' => 'field' ),
'cell_label29' => array( 'model' => 'cell_label',
'items' => array( 'image5',
'simple_grid_field19',
'simple_grid_field6' ),
'align' => 'left',
'useFullWidth' => true,
'field' => 'domicilio',
'columnName' => 'field' ),
'cell_label31' => array( 'model' => 'cell_label',
'items' => array( 'image4',
'simple_grid_field17',
'simple_grid_field4' ),
'align' => 'left',
'useFullWidth' => true,
'field' => 'fechanac',
'columnName' => 'field' ),
'cell_label33' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field23',
'simple_grid_field10' ),
'align' => 'left',
'useFullWidth' => true,
'field' => 'estado_civil',
'columnName' => 'field' ),
'cell_label35' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field18',
'simple_grid_field5' ),
'align' => 'left',
'useFullWidth' => true,
'field' => 'sexo',
'columnName' => 'field' ),
'cell_label41' => array( 'model' => 'cell_label',
'items' => array( 'grid_field_label',
'grid_field' ),
'align' => 'left',
'useFullWidth' => true,
'field' => 'pais',
'columnName' => 'field' ),
'cell_label45' => array( 'model' => 'cell_label',
'items' => array( 'image3',
'text2',
'simple_grid_field12' ),
'align' => 'left',
'useFullWidth' => true,
'field' => 'telefono',
'columnName' => 'field' ),
'cell_label2' => array( 'model' => 'cell_label',
'items' => array( 'image',
'grid_field3',
'text3',
'grid_field4',
'hash_generado',
'text4',
'grid_field6' ),
'align' => 'left',
'orientation' => 'horizontal',
'field' => 'empresa',
'columnName' => 'field' ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array(  ) ),
'cell_label3' => array( 'model' => 'cell_label',
'items' => array( 'boton_descargar_cv' ) ),
'cell_label42' => array( 'model' => 'cell_label',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo',
'logo' => array( 'type' => 8 ) ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'details_found' => array( 'type' => 'details_found',
'color' => '#ffffff',
'bold' => true,
'label' => array( 'label' => 'DISPLAYING',
'table' => null,
'type' => 1 ) ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field2',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field1',
'search_panel_field' ),
'_flexiblePanel' => false ),
'search_panel_field' => array( 'field' => 'ciudad',
'type' => 'search_panel_field',
'alwaysOnPanel' => true,
'required' => false,
'label' => array( 'field' => 'ciudad',
'table' => 'bolsa_empleo.postulacion',
'type' => 3 ) ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ) ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'-' => array( 'type' => '-' ),
'simple_grid_field4' => array( 'field' => 'fechanac',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field5' => array( 'field' => 'sexo',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field6' => array( 'field' => 'domicilio',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field7' => array( 'field' => 'ciudad',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field8' => array( 'field' => 'distrito',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field10' => array( 'field' => 'estado_civil',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field11' => array( 'field' => 'cedula',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field12' => array( 'field' => 'telefono',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'fechanac',
'label' => array( 'field' => 'fechanac',
'table' => null,
'type' => 3 ) ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'sexo',
'label' => array( 'field' => 'sexo',
'table' => null,
'type' => 3 ) ),
'simple_grid_field19' => array( 'type' => 'grid_field_label',
'field' => 'domicilio',
'label' => array( 'field' => 'domicilio',
'table' => null,
'type' => 3 ) ),
'simple_grid_field23' => array( 'type' => 'grid_field_label',
'field' => 'estado_civil',
'label' => array( 'field' => 'estado_civil',
'table' => null,
'type' => 3 ) ),
'grid_field' => array( 'field' => 'pais',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field_label' => array( 'type' => 'grid_field_label',
'field' => 'pais',
'label' => array( 'field' => 'pais',
'table' => null,
'type' => 3 ) ),
'grid_field1' => array( 'field' => 'nombre_completo',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'font-size' => '20px',
'bold' => true ),
'search_panel_field1' => array( 'field' => 'distrito',
'type' => 'search_panel_field',
'label' => array( 'field' => 'distrito',
'table' => 'bolsa_empleo.postulacion',
'type' => 3 ),
'alwaysOnPanel' => true,
'required' => false ),
'text' => array( 'type' => 'text',
'label' => array( 'type' => 0,
'text' => ' || Cod.Postulante:' ),
'editedByRte' => false,
'bold' => true ),
'search_panel_field2' => array( 'field' => 'cedula',
'type' => 'search_panel_field',
'label' => array( 'field' => 'cedula',
'table' => 'bolsa_empleo.postulacion',
'type' => 3 ),
'alwaysOnPanel' => true,
'required' => false ),
'grid_field3' => array( 'field' => 'empresa',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'font-size' => '24px',
'bold' => true ),
'grid_field4' => array( 'field' => 'descri_empresa',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'background' => 'transparent',
'color' => '#aa0a72',
'mobileDisplay' => 'both',
'font-size' => '24px',
'bold' => true,
'mobileControl' => '' ),
'text3' => array( 'type' => 'text',
'label' => array( 'text' => ' || ',
'type' => 0 ),
'editedByRte' => false,
'font-size' => '24px',
'bold' => true ),
'text4' => array( 'type' => 'text',
'label' => array( 'type' => 0,
'text' => ' || Cod.Vacancia:' ),
'editedByRte' => false,
'color' => '#555555',
'bold' => true ),
'text7' => array( 'type' => 'text',
'label' => array( 'text' => ' , ',
'type' => 0 ),
'editedByRte' => false ),
'text8' => array( 'type' => 'text',
'label' => array( 'type' => 0,
'text' => 'Usuarios Postulados' ),
'editedByRte' => false,
'color' => '#ffffff',
'bold' => true,
'font-size' => '26px' ),
'grid_field5' => array( 'field' => 'id_postulacion',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'bold' => true ),
'search_panel_field3' => array( 'field' => 'id_postulacion',
'type' => 'search_panel_field',
'required' => false ),
'image' => array( 'type' => 'image',
'image' => array( 'image' => 'empresa_vector.png',
'source' => 2 ) ),
'image1' => array( 'type' => 'image',
'image' => array( 'image' => 'person-circle.png',
'source' => 2 ) ),
'image2' => array( 'type' => 'image',
'image' => array( 'image' => 'documento.png',
'source' => 2 ) ),
'image3' => array( 'type' => 'image',
'image' => array( 'image' => 'cel pequeno vector.png',
'source' => 2 ) ),
'image4' => array( 'type' => 'image',
'image' => array( 'image' => 'calendario_vector.png',
'source' => 2 ) ),
'image5' => array( 'type' => 'image',
'image' => array( 'image' => 'direccion vector.png',
'source' => 2 ) ),
'image6' => array( 'type' => 'image',
'image' => array( 'image' => 'ciudad departamento vector.png',
'source' => 2 ) ),
'search_panel_field4' => array( 'field' => 'id_estado',
'type' => 'search_panel_field',
'required' => false ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'bolsa_empleo.estado_postulacion' => 'true' ) ),
'grid_field6' => array( 'field' => 'id_vacancias',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'color' => '#555555',
'bold' => true ),
'search_panel_field5' => array( 'field' => 'id_vacancias',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'text1' => array( 'type' => 'text',
'label' => array( 'text' => '<p>&nbsp;<strong>Nro. Documento:</strong></p>',
'type' => 0 ),
'editedByRte' => false ),
'text2' => array( 'type' => 'text',
'label' => array( 'text' => '<p>&nbsp;<strong>Nro. Telefono:</strong></p>',
'type' => 0 ),
'editedByRte' => false ),
'text5' => array( 'type' => 'text',
'label' => array( 'text' => '<p>&nbsp;<strong>Ubicación:</strong></p>',
'type' => 0 ),
'editedByRte' => false ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'hash_generado' => array( 'field' => 'hash_generado',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'boton_descargar_cv' => array( 'eventId' => 'New_Button12',
'label' => array( 'text' => 'Descargar CV',
'type' => 0 ),
'type' => 'custom_button',
'buttonStyle' => 'primary' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 14,
'pageAlign' => 'center',
'reorderRows' => false,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>
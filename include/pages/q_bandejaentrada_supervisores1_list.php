<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
'inlineEdit' => false,
'delete' => false,
'updateSelected' => false,
'addInPopup' => null,
'editInPopup' => null,
'viewInPopup' => true,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'allDetails' => array( 'linkType' => 0 ),
'details' => array( 'informe_intersup' => array( 'displayPreview' => 1,
'previewPageId' => 'list',
'showCount' => true,
'hideEmptyChild' => false,
'hideEmptyPreview' => false,
'showProceedLink' => true,
'printDetails' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'id_cont' => array( 'totalsType' => '' ),
'cont_nit_contra_ta' => array( 'totalsType' => '' ),
'cont_nit_contra_taname' => array( 'totalsType' => '' ),
'cont_estado' => array( 'totalsType' => '' ),
'numcontrato' => array( 'totalsType' => '' ),
'pre_contnumero' => array( 'totalsType' => '' ),
'contnumero' => array( 'totalsType' => '' ),
'cont_ano' => array( 'totalsType' => '' ),
'cont_codrubro' => array( 'totalsType' => '' ),
'cont_catalogo_presupuestal' => array( 'totalsType' => '' ),
'cont_fecha_inicio' => array( 'totalsType' => '' ),
'cont_fechafinal' => array( 'totalsType' => '' ),
'cont_periodicidad' => array( 'totalsType' => '' ),
'cont_valorinicial' => array( 'totalsType' => '' ),
'cont_valormensual' => array( 'totalsType' => '' ),
'cont_secop_enlace' => array( 'totalsType' => '' ),
'documento_id' => array( 'totalsType' => '' ),
'nombres' => array( 'totalsType' => '' ),
'apellidos' => array( 'totalsType' => '' ),
'cargo_id' => array( 'totalsType' => '' ),
'dependencia_id' => array( 'totalsType' => '' ),
'sup_fechanot' => array( 'totalsType' => '' ),
'sup_mailnot' => array( 'totalsType' => '' ),
'sup_status' => array( 'totalsType' => '' ),
'idusrglobal_fk' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'cont_nit_contra_ta',
'numcontrato',
'cont_ano',
'cont_fecha_inicio',
'cont_fechafinal',
'cont_secop_enlace',
'cont_nit_contra_taname',
'cont_valormensual' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'cont_nit_contra_taname',
'contnumero',
'pre_contnumero',
'id_cont',
'numcontrato',
'cont_valormensual',
'cont_secop_enlace',
'cont_nit_contra_ta',
'cont_fechafinal',
'cont_fecha_inicio',
'cont_estado',
'cont_ano' ),
'filterFields' => array( 'cont_nit_contra_taname' ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'cont_nit_contra_ta' => array( 'simple_grid_field1',
'simple_grid_field' ),
'numcontrato' => array( 'simple_grid_field3',
'simple_grid_field4' ),
'cont_ano' => array( 'simple_grid_field6',
'simple_grid_field7' ),
'cont_fecha_inicio' => array( 'simple_grid_field9',
'simple_grid_field11' ),
'cont_fechafinal' => array( 'simple_grid_field10',
'simple_grid_field12' ),
'cont_secop_enlace' => array( 'simple_grid_field14',
'simple_grid_field15' ),
'cont_nit_contra_taname' => array( 'simple_grid_field24',
'simple_grid_field25' ),
'cont_valormensual' => array( 'grid_field',
'grid_field_label' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'left' => array( 'logo1',
'expand_button',
'menu',
'search_panel',
'filter_panel' ),
'supertop' => array( 'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'above-grid' => array( 'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'grid' => array( 'grid_view',
'grid_alldetails_link',
'grid_details_link',
'grid_details_link1',
'grid_details_link2',
'details_preview',
'details_preview1',
'details_preview2',
'simple_grid_field',
'simple_grid_field1',
'simple_grid_field15',
'simple_grid_field14',
'simple_grid_field25',
'simple_grid_field24',
'simple_grid_field11',
'simple_grid_field9',
'simple_grid_field4',
'simple_grid_field3',
'simple_grid_field12',
'simple_grid_field10',
'simple_grid_field7',
'simple_grid_field6',
'grid_field_label',
'grid_field' ),
'top' => array(  ) ),
'formXtTags' => array( 'above-grid' => array( 'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array(  ) ),
'itemForms' => array( 'logo1' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'filter_panel' => 'left',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'grid_view' => 'grid',
'grid_alldetails_link' => 'grid',
'grid_details_link' => 'grid',
'grid_details_link1' => 'grid',
'grid_details_link2' => 'grid',
'details_preview' => 'grid',
'details_preview1' => 'grid',
'details_preview2' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field25' => 'grid',
'simple_grid_field24' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field6' => 'grid',
'grid_field_label' => 'grid',
'grid_field' => 'grid' ),
'itemLocations' => array( 'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_alldetails_link' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_details_link' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_details_link1' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_details_link2' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'details_preview1' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'details_preview2' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_label' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'cell_label1' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field25' => array( 'location' => 'grid',
'cellId' => 'cell_label2' ),
'simple_grid_field24' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_label3' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_label4' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_label5' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_label6' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'grid_field_label' => array( 'location' => 'grid',
'cellId' => 'cell_label7' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ) ),
'itemVisiblity' => array( 'expand_button' => 5,
'menu' => 3,
'search_panel' => 5,
'filter_panel' => 3,
'collapse_button' => 5,
'simple_search' => 3,
'list_options' => 3,
'loginform_login' => 3,
'username_button' => 3,
'print_panel' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
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
'search_panel_field5',
'search_panel_field6',
'search_panel_field7',
'search_panel_field8',
'search_panel_field10',
'search_panel_field12',
'search_panel_field13',
'search_panel_field18',
'search_panel_field24' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'collapse_button' => array( 'collapse_button' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'export' => array( 'export' ),
'-' => array( '-',
'-1',
'-2' ),
'advsearch_link' => array( 'advsearch_link' ),
'grid_field' => array( 'simple_grid_field1',
'simple_grid_field3',
'simple_grid_field6',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field14',
'simple_grid_field24',
'grid_field' ),
'grid_field_label' => array( 'simple_grid_field7',
'simple_grid_field11',
'simple_grid_field12',
'simple_grid_field',
'simple_grid_field25',
'simple_grid_field4',
'simple_grid_field15',
'grid_field_label' ),
'logo' => array( 'logo1' ),
'grid_view' => array( 'grid_view' ),
'print_details' => array( 'print_details' ),
'details_preview' => array( 'details_preview',
'details_preview1',
'details_preview2' ),
'grid_alldetails_link' => array( 'grid_alldetails_link' ),
'grid_details_link' => array( 'grid_details_link',
'grid_details_link1',
'grid_details_link2' ),
'filter_panel' => array( 'filter_panel' ),
'filter_panel_field' => array( 'filter_panel_field' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'cell_top' => array( 'cols' => array( 0,
1,
2,
3 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'grid_view',
'grid_alldetails_link',
'grid_details_link',
'grid_details_link1',
'grid_details_link2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_label' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'cont_nit_contra_ta_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'cont_nit_contra_ta_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label1' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'cont_secop_enlace_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'cont_secop_enlace_fieldcolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label2' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array( 'cont_nit_contra_taname_fieldheadercolumn' ),
'items' => array( 'simple_grid_field25' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array( 'cont_nit_contra_taname_fieldcolumn' ),
'items' => array( 'simple_grid_field24' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label3' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array( 'cont_fecha_inicio_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array( 'cont_fecha_inicio_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label4' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array( 'numcontrato_fieldheadercolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array( 'numcontrato_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label5' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array( 'cont_fechafinal_fieldheadercolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array( 'cont_fechafinal_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label6' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array( 'cont_ano_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 1 ),
'rows' => array( 4 ),
'tags' => array( 'cont_ano_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label7' => array( 'cols' => array( 2 ),
'rows' => array( 4 ),
'tags' => array( 'cont_valormensual_fieldheadercolumn' ),
'items' => array( 'grid_field_label' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 3 ),
'rows' => array( 4 ),
'tags' => array( 'cont_valormensual_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2,
3 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'details_preview',
'details_preview1',
'details_preview2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 4,
'height' => 6 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 2,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo1',
'expand_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu',
'search_panel',
'filter_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'collapse_button',
'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'columns-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'cell_top',
'colspan' => 4 ) ),
'section' => 'head' ),
array( 'cells' => array( array( 'cell' => 'cell_label' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_label1' ),
array( 'cell' => 'cell_field1' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label2' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_label3' ),
array( 'cell' => 'cell_field3' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label4' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_label5' ),
array( 'cell' => 'cell_field5' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label6' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_label7' ),
array( 'cell' => 'cell_field7' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 4 ) ),
'section' => 'foot' ) ),
'cells' => array( 'cell_top' => array( 'model' => 'cell_top',
'items' => array( 'grid_view',
'grid_alldetails_link',
'grid_details_link',
'grid_details_link1',
'grid_details_link2' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview',
'details_preview1',
'details_preview2' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'cell_label' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field' ),
'field' => 'cont_nit_contra_ta',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'cont_nit_contra_ta',
'columnName' => 'field' ),
'cell_label1' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field15' ),
'field' => 'cont_secop_enlace',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'cont_secop_enlace',
'columnName' => 'field' ),
'cell_label2' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field25' ),
'field' => 'cont_nit_contra_taname',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field24' ),
'field' => 'cont_nit_contra_taname',
'columnName' => 'field' ),
'cell_label3' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field11' ),
'field' => 'cont_fecha_inicio',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'cont_fecha_inicio',
'columnName' => 'field' ),
'cell_label4' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field4' ),
'field' => 'numcontrato',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'numcontrato',
'columnName' => 'field' ),
'cell_label5' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field12' ),
'field' => 'cont_fechafinal',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'cont_fechafinal',
'columnName' => 'field' ),
'cell_label6' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field7' ),
'field' => 'cont_ano',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'cont_ano',
'columnName' => 'field' ),
'cell_label7' => array( 'model' => 'cell_label',
'items' => array( 'grid_field_label' ),
'field' => 'cont_valormensual',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'field' => 'cont_valormensual',
'columnName' => 'field' ) ),
'deferredItems' => array(  ),
'buildType' => 2,
'columnCount' => 2 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field24',
'search_panel_field13',
'search_panel_field1',
'search_panel_field',
'search_panel_field18',
'search_panel_field12',
'search_panel_field10',
'search_panel_field8',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field2' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-2',
'export' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'id_cont',
'type' => 'search_panel_field' ),
'search_panel_field1' => array( 'field' => 'pre_contnumero',
'type' => 'search_panel_field' ),
'search_panel_field2' => array( 'field' => 'cont_ano',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field5' => array( 'field' => 'cont_estado',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field6' => array( 'field' => 'cont_fecha_inicio',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field7' => array( 'field' => 'cont_fechafinal',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field8' => array( 'field' => 'cont_nit_contra_ta',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field10' => array( 'field' => 'cont_secop_enlace',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field12' => array( 'field' => 'cont_valormensual',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field13' => array( 'field' => 'contnumero',
'type' => 'search_panel_field' ),
'search_panel_field18' => array( 'field' => 'numcontrato',
'type' => 'search_panel_field',
'required' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'adminarea_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_details',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'export' => array( 'type' => 'export' ),
'-' => array( 'type' => '-' ),
'-1' => array( 'type' => '-' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-2' => array( 'type' => '-' ),
'simple_grid_field1' => array( 'field' => 'cont_nit_contra_ta',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field3' => array( 'field' => 'numcontrato',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field6' => array( 'field' => 'cont_ano',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'cont_ano',
'clickSort' => true ),
'simple_grid_field9' => array( 'field' => 'cont_fecha_inicio',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field10' => array( 'field' => 'cont_fechafinal',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'cont_fecha_inicio',
'clickSort' => true ),
'simple_grid_field12' => array( 'type' => 'grid_field_label',
'field' => 'cont_fechafinal',
'clickSort' => true ),
'simple_grid_field14' => array( 'field' => 'cont_secop_enlace',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'logo1' => array( 'type' => 'logo' ),
'simple_grid_field24' => array( 'field' => 'cont_nit_contra_taname',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'search_panel_field24' => array( 'field' => 'cont_nit_contra_taname',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'grid_view' => array( 'type' => 'grid_view',
'popup' => true ),
'print_details' => array( 'type' => 'print_details',
'tables' => array( 'informe_intersup_plan_pagos' => true,
'contrato_oe' => true,
'informe_intersup' => true ) ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'informe_intersup_plan_pagos',
'items' => array(  ),
'popup' => false,
'hideEmptyPreview' => false,
'proceedLink' => true,
'pageId' => 'list' ),
'grid_alldetails_link' => array( 'type' => 'grid_alldetails_link',
'icon' => array( 'fa' => 'angle-double-down' ),
'text' => array( 'type' => 0,
'text' => 'Informes de supervisión' ) ),
'grid_details_link' => array( 'type' => 'grid_details_link',
'table' => 'informe_intersup_plan_pagos',
'badge' => true,
'hideIfNone' => false,
'showCount' => true ),
'details_preview1' => array( 'type' => 'details_preview',
'table' => 'contrato_oe',
'items' => array(  ),
'popup' => false,
'hideEmptyPreview' => false,
'proceedLink' => true,
'pageId' => 'list' ),
'grid_details_link1' => array( 'type' => 'grid_details_link',
'table' => 'contrato_oe',
'badge' => true,
'showCount' => true,
'hideIfNone' => false ),
'filter_panel' => array( 'type' => 'filter_panel',
'items' => array( 'filter_panel_field' ) ),
'filter_panel_field' => array( 'field' => 'cont_nit_contra_taname',
'type' => 'filter_panel_field' ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'cont_nit_contra_ta',
'clickSort' => true ),
'simple_grid_field25' => array( 'type' => 'grid_field_label',
'field' => 'cont_nit_contra_taname',
'clickSort' => true ),
'simple_grid_field4' => array( 'type' => 'grid_field_label',
'field' => 'numcontrato',
'clickSort' => true ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'cont_secop_enlace',
'clickSort' => true ),
'grid_field' => array( 'field' => 'cont_valormensual',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field_label' => array( 'type' => 'grid_field_label',
'field' => 'cont_valormensual' ),
'details_preview2' => array( 'type' => 'details_preview',
'table' => 'informe_intersup',
'items' => array(  ),
'popup' => false,
'hideEmptyPreview' => false,
'proceedLink' => true,
'pageId' => 'list' ),
'grid_details_link2' => array( 'type' => 'grid_details_link',
'table' => 'informe_intersup',
'badge' => true,
'showCount' => true,
'hideIfNone' => false ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 4,
'fixedTopbar' => true );
		?>
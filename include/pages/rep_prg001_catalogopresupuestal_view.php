<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'fields' => array( 'gridFields' => array( 'Identificacion',
'Descripcion',
'Estado',
'Afecta_Apropiacion',
'Nivel_normativo',
'Requiere_Usos_Presupuestales',
'Usos_Presupuestales' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Identificacion' => array( 'integrated_edit_field13' ),
'Descripcion' => array( 'integrated_edit_field14' ),
'Estado' => array( 'integrated_edit_field15' ),
'Afecta_Apropiacion' => array( 'integrated_edit_field16' ),
'Nivel_normativo' => array( 'integrated_edit_field17' ),
'Requiere_Usos_Presupuestales' => array( 'integrated_edit_field18' ),
'Usos_Presupuestales' => array( 'integrated_edit_field19' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'integrated_edit_field13' => 'grid',
'integrated_edit_field14' => 'grid',
'integrated_edit_field15' => 'grid',
'integrated_edit_field16' => 'grid',
'integrated_edit_field17' => 'grid',
'integrated_edit_field18' => 'grid',
'integrated_edit_field19' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field13' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field14' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field15' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field16' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field17' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field18' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field19' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'integrated_edit_field' => array( 'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array(  ) ),
'integrated_edit_field13' => array( 'field' => 'Identificacion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field14' => array( 'field' => 'Descripcion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field15' => array( 'field' => 'Estado',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field16' => array( 'field' => 'Afecta_Apropiacion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field17' => array( 'field' => 'Nivel_normativo',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field18' => array( 'field' => 'Requiere_Usos_Presupuestales',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field19' => array( 'field' => 'Usos_Presupuestales',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>
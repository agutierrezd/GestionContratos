<?php
			$optionsArray = array( 'totals' => array( 'poliza_id' => array( 'totalsType' => '' ),
'id_cont_fk' => array( 'totalsType' => '' ),
'id_att_fk' => array( 'totalsType' => '' ),
'poli_numero' => array( 'totalsType' => '' ),
'poli_compania' => array( 'totalsType' => '' ),
'poli_fechaexpedicion' => array( 'totalsType' => '' ),
'poli_codamparo' => array( 'totalsType' => '' ),
'poli_fechaaprobacion' => array( 'totalsType' => '' ),
'poli_porcentaje' => array( 'totalsType' => '' ),
'poli_valor' => array( 'totalsType' => '' ),
'poli_vigenciadesde' => array( 'totalsType' => '' ),
'poli_vigenciahasta' => array( 'totalsType' => '' ),
'sys_user' => array( 'totalsType' => '' ),
'sys_time' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'poli_numero',
'poli_compania',
'poli_fechaexpedicion',
'poli_codamparo',
'poli_fechaaprobacion',
'poli_porcentaje',
'poli_valor',
'poli_vigenciadesde',
'poli_vigenciahasta' ),
'exportFields' => array( 'poli_numero',
'poli_compania',
'poli_fechaexpedicion',
'poli_codamparo',
'poli_fechaaprobacion',
'poli_porcentaje',
'poli_valor',
'poli_vigenciadesde',
'poli_vigenciahasta' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'poli_numero' => array( 'export_field3' ),
'poli_compania' => array( 'export_field4' ),
'poli_fechaexpedicion' => array( 'export_field5' ),
'poli_codamparo' => array( 'export_field6' ),
'poli_fechaaprobacion' => array( 'export_field7' ),
'poli_porcentaje' => array( 'export_field8' ),
'poli_valor' => array( 'export_field9' ),
'poli_vigenciadesde' => array( 'export_field10' ),
'poli_vigenciahasta' => array( 'export_field11' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field3' => array( 'field' => 'poli_numero',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'poli_compania',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'poli_fechaexpedicion',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'poli_codamparo',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'poli_fechaaprobacion',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'poli_porcentaje',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'poli_valor',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'poli_vigenciadesde',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'poli_vigenciahasta',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>
<?php
			$optionsArray = array( 'totals' => array( 'isoe_id' => array( 'totalsType' => '' ),
'inf_id_fk' => array( 'totalsType' => '' ),
'oe_id_fk' => array( 'totalsType' => '' ),
'id_cont_fk' => array( 'totalsType' => '' ),
'cont_nit_contra_ta_fk' => array( 'totalsType' => '' ),
'oe_ordinal' => array( 'totalsType' => '' ),
'oe' => array( 'totalsType' => '' ),
'actividad' => array( 'totalsType' => '' ),
'evidencia' => array( 'totalsType' => '' ),
'sup_aprueba' => array( 'totalsType' => '' ),
'sup_fecha' => array( 'totalsType' => '' ),
'sup_obs' => array( 'totalsType' => '' ),
'sys_last_upd' => array( 'totalsType' => '' ),
'sys_user' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'sup_obs',
'oe_ordinal',
'oe',
'actividad',
'evidencia',
'sup_aprueba' ),
'exportFields' => array( 'oe_ordinal',
'oe',
'actividad',
'evidencia',
'sup_aprueba',
'sup_obs' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'sup_obs' => array( 'export_field' ),
'oe_ordinal' => array( 'export_field5' ),
'oe' => array( 'export_field6' ),
'actividad' => array( 'export_field7' ),
'evidencia' => array( 'export_field8' ),
'sup_aprueba' => array( 'export_field9' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9' ) ),
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
'items' => array( 'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field' ),
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
'export_field' => array( 'field' => 'sup_obs',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'oe_ordinal',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'oe',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'actividad',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'evidencia',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'sup_aprueba',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>
<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'back_master',
'masterchart_header' ),
'above-grid' => array(  ),
'grid' => array( 'chart' ),
'below-grid' => array(  ) ),
'formXtTags' => array( 'above-grid' => array(  ),
'below-grid' => array(  ) ),
'itemForms' => array( 'back_master' => 'top',
'masterchart_header' => 'top',
'chart' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'masterchart_header' => array( 'masterchart_header' ),
'back_master' => array( 'back_master' ),
'chart' => array( 'chart' ) ),
'cellMaps' => array(  ) ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'masterchart',
'type' => 'masterchart',
'layoutId' => 'masterchart',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'masterchart-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'back_master',
'masterchart_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'chart-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'chart' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'masterchart_header' => array( 'type' => 'masterchart_header' ),
'back_master' => array( 'type' => 'back_master' ),
'chart' => array( 'type' => 'chart',
'table' => 'contrato_chart_estado',
'icon' => array( 'glyph' => 'signal' ) ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>
<?php
			$optionsArray = array( 'totals' => array( 'Numero Documento' => array( 'totalsType' => '' ),
'Fecha de Registro' => array( 'totalsType' => '' ),
'vigencia' => array( 'totalsType' => '' ),
'Fecha de pago' => array( 'totalsType' => '' ),
'Estado' => array( 'totalsType' => '' ),
'Valor Bruto' => array( 'totalsType' => '' ),
'Valor Deducciones' => array( 'totalsType' => '' ),
'Identificacion' => array( 'totalsType' => '' ),
'Tesoreria Pagadora' => array( 'totalsType' => '' ),
'Identificacion Pagaduria' => array( 'totalsType' => '' ),
'Obligaciones' => array( 'totalsType' => '' ),
'Tipo Doc Soporte Compromiso' => array( 'totalsType' => '' ),
'Num Doc Soporte Compromiso' => array( 'totalsType' => '' ),
'Objeto del Compromiso' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'Numero Documento',
'Fecha de Registro',
'vigencia',
'Fecha de pago',
'Estado',
'Valor Bruto',
'Valor Deducciones',
'Identificacion',
'Tesoreria Pagadora',
'Identificacion Pagaduria',
'Obligaciones',
'Tipo Doc Soporte Compromiso',
'Num Doc Soporte Compromiso',
'Objeto del Compromiso' ),
'exportFields' => array( 'Numero Documento',
'Fecha de Registro',
'vigencia',
'Fecha de pago',
'Estado',
'Valor Bruto',
'Valor Deducciones',
'Identificacion',
'Tesoreria Pagadora',
'Identificacion Pagaduria',
'Obligaciones',
'Tipo Doc Soporte Compromiso',
'Num Doc Soporte Compromiso',
'Objeto del Compromiso' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Numero Documento' => array( 'export_field' ),
'Fecha de Registro' => array( 'export_field1' ),
'vigencia' => array( 'export_field2' ),
'Fecha de pago' => array( 'export_field3' ),
'Estado' => array( 'export_field4' ),
'Valor Bruto' => array( 'export_field5' ),
'Valor Deducciones' => array( 'export_field6' ),
'Identificacion' => array( 'export_field7' ),
'Tesoreria Pagadora' => array( 'export_field8' ),
'Identificacion Pagaduria' => array( 'export_field9' ),
'Obligaciones' => array( 'export_field10' ),
'Tipo Doc Soporte Compromiso' => array( 'export_field11' ),
'Num Doc Soporte Compromiso' => array( 'export_field12' ),
'Objeto del Compromiso' => array( 'export_field13' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ) ),
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
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ),
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
'export_field' => array( 'field' => 'Numero Documento',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'Fecha de Registro',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'vigencia',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'Fecha de pago',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'Estado',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'Valor Bruto',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'Valor Deducciones',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'Identificacion',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'Tesoreria Pagadora',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'Identificacion Pagaduria',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'Obligaciones',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'Tipo Doc Soporte Compromiso',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'Num Doc Soporte Compromiso',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'Objeto del Compromiso',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>
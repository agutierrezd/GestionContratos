<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'informe_intersup_plan_pagos' => array( 'displayPreview' => 1 ),
'contrato_oe' => array( 'displayPreview' => 1 ) ),
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
'cont_estado',
'numcontrato',
'cont_ano',
'cont_codrubro',
'cont_catalogo_presupuestal',
'cont_fecha_inicio',
'cont_fechafinal',
'cont_periodicidad',
'cont_valorinicial',
'cont_valormensual',
'cont_secop_enlace',
'cont_nit_contra_taname' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'cont_nit_contra_ta' => array( 'simple_grid_field1',
'simple_grid_field' ),
'cont_estado' => array( 'simple_grid_field2',
'simple_grid_field4' ),
'numcontrato' => array( 'simple_grid_field3',
'simple_grid_field5' ),
'cont_ano' => array( 'simple_grid_field6',
'simple_grid_field15' ),
'cont_codrubro' => array( 'simple_grid_field7',
'simple_grid_field16' ),
'cont_catalogo_presupuestal' => array( 'simple_grid_field8',
'simple_grid_field17' ),
'cont_fecha_inicio' => array( 'simple_grid_field9',
'simple_grid_field18' ),
'cont_fechafinal' => array( 'simple_grid_field10',
'simple_grid_field19' ),
'cont_periodicidad' => array( 'simple_grid_field11',
'simple_grid_field20' ),
'cont_valorinicial' => array( 'simple_grid_field12',
'simple_grid_field21' ),
'cont_valormensual' => array( 'simple_grid_field13',
'simple_grid_field22' ),
'cont_secop_enlace' => array( 'simple_grid_field14',
'simple_grid_field23' ),
'cont_nit_contra_taname' => array( 'simple_grid_field24',
'simple_grid_field25' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'print_header',
'print_subheader' ),
'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'grid' => array( 'simple_grid_field',
'simple_grid_field1',
'simple_grid_field4',
'simple_grid_field2',
'simple_grid_field5',
'simple_grid_field3',
'simple_grid_field15',
'simple_grid_field6',
'simple_grid_field16',
'simple_grid_field7',
'simple_grid_field17',
'simple_grid_field8',
'simple_grid_field18',
'simple_grid_field9',
'simple_grid_field19',
'simple_grid_field10',
'simple_grid_field20',
'simple_grid_field11',
'simple_grid_field21',
'simple_grid_field12',
'simple_grid_field22',
'simple_grid_field13',
'simple_grid_field23',
'simple_grid_field14',
'simple_grid_field25',
'simple_grid_field24',
'details_preview1',
'details_preview' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_header' => 'top',
'print_subheader' => 'top',
'print_pages' => 'above-grid',
'simple_grid_field' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field20' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field21' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field22' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field23' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field25' => 'grid',
'simple_grid_field24' => 'grid',
'details_preview1' => 'grid',
'details_preview' => 'grid' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field20' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field21' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'simple_grid_field22' => array( 'location' => 'grid',
'cellId' => 'headcell_field10' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'cell_field10' ),
'simple_grid_field23' => array( 'location' => 'grid',
'cellId' => 'headcell_field11' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'cell_field11' ),
'simple_grid_field25' => array( 'location' => 'grid',
'cellId' => 'headcell_field12' ),
'simple_grid_field24' => array( 'location' => 'grid',
'cellId' => 'cell_field12' ),
'details_preview1' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'grid_field' => array( 'simple_grid_field1',
'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field11',
'simple_grid_field12',
'simple_grid_field13',
'simple_grid_field14',
'simple_grid_field24' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field15',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field18',
'simple_grid_field19',
'simple_grid_field20',
'simple_grid_field21',
'simple_grid_field22',
'simple_grid_field23',
'simple_grid_field25' ),
'details_preview' => array( 'details_preview1',
'details_preview' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'cont_nit_contra_ta_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'cont_estado_fieldheadercolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'numcontrato_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'cont_ano_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'cont_codrubro_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'cont_catalogo_presupuestal_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'cont_fecha_inicio_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'cont_fechafinal_fieldheadercolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'cont_periodicidad_fieldheadercolumn' ),
'items' => array( 'simple_grid_field20' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'cont_valorinicial_fieldheadercolumn' ),
'items' => array( 'simple_grid_field21' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'cont_valormensual_fieldheadercolumn' ),
'items' => array( 'simple_grid_field22' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'cont_secop_enlace_fieldheadercolumn' ),
'items' => array( 'simple_grid_field23' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 0 ),
'tags' => array( 'cont_nit_contra_taname_fieldheadercolumn' ),
'items' => array( 'simple_grid_field25' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'cont_nit_contra_ta_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'cont_estado_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'numcontrato_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'cont_ano_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'cont_codrubro_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'cont_catalogo_presupuestal_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'cont_fecha_inicio_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'cont_fechafinal_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'cont_periodicidad_fieldcolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'cont_valorinicial_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'cont_valormensual_fieldcolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'cont_secop_enlace_fieldcolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 1 ),
'tags' => array( 'cont_nit_contra_taname_fieldcolumn' ),
'items' => array( 'simple_grid_field24' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2,
3,
4,
5,
6,
7,
8,
9,
10,
11,
12 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview1',
'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 13,
'height' => 4 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'headcell_field9' ),
array( 'cell' => 'headcell_field10' ),
array( 'cell' => 'headcell_field11' ),
array( 'cell' => 'headcell_field12' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ),
array( 'cell' => 'cell_field9' ),
array( 'cell' => 'cell_field10' ),
array( 'cell' => 'cell_field11' ),
array( 'cell' => 'cell_field12' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 13 ) ),
'section' => 'body' ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ),
array( 'cell' => 'footcell_field9' ),
array( 'cell' => 'footcell_field10' ),
array( 'cell' => 'footcell_field11' ),
array( 'cell' => 'footcell_field12' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'cont_nit_contra_ta',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'cont_nit_contra_ta',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'cont_estado',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'cont_estado',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'numcontrato',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'numcontrato',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'cont_ano',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'cont_ano',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'cont_codrubro',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'cont_codrubro',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'cont_catalogo_presupuestal',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'cont_catalogo_presupuestal',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'cont_fecha_inicio',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'cont_fecha_inicio',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'cont_fechafinal',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'cont_fechafinal',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field20' ),
'field' => 'cont_periodicidad',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'cont_periodicidad',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field21' ),
'field' => 'cont_valorinicial',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'cont_valorinicial',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field10' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field22' ),
'field' => 'cont_valormensual',
'columnName' => 'field' ),
'cell_field10' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'cont_valormensual',
'columnName' => 'field' ),
'footcell_field10' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field11' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field23' ),
'field' => 'cont_secop_enlace',
'columnName' => 'field' ),
'cell_field11' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'cont_secop_enlace',
'columnName' => 'field' ),
'footcell_field11' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field12' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field25' ),
'field' => 'cont_nit_contra_taname',
'columnName' => 'field' ),
'cell_field12' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field24' ),
'field' => 'cont_nit_contra_taname',
'columnName' => 'field' ),
'footcell_field12' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview1',
'details_preview' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'simple_grid_field1' => array( 'field' => 'cont_nit_contra_ta',
'type' => 'grid_field' ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'cont_nit_contra_ta' ),
'simple_grid_field2' => array( 'field' => 'cont_estado',
'type' => 'grid_field' ),
'simple_grid_field4' => array( 'type' => 'grid_field_label',
'field' => 'cont_estado' ),
'simple_grid_field3' => array( 'field' => 'numcontrato',
'type' => 'grid_field' ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'numcontrato' ),
'simple_grid_field6' => array( 'field' => 'cont_ano',
'type' => 'grid_field' ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'cont_ano' ),
'simple_grid_field7' => array( 'field' => 'cont_codrubro',
'type' => 'grid_field' ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'cont_codrubro' ),
'simple_grid_field8' => array( 'field' => 'cont_catalogo_presupuestal',
'type' => 'grid_field' ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'cont_catalogo_presupuestal' ),
'simple_grid_field9' => array( 'field' => 'cont_fecha_inicio',
'type' => 'grid_field' ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'cont_fecha_inicio' ),
'simple_grid_field10' => array( 'field' => 'cont_fechafinal',
'type' => 'grid_field' ),
'simple_grid_field19' => array( 'type' => 'grid_field_label',
'field' => 'cont_fechafinal' ),
'simple_grid_field11' => array( 'field' => 'cont_periodicidad',
'type' => 'grid_field' ),
'simple_grid_field20' => array( 'type' => 'grid_field_label',
'field' => 'cont_periodicidad' ),
'simple_grid_field12' => array( 'field' => 'cont_valorinicial',
'type' => 'grid_field' ),
'simple_grid_field21' => array( 'type' => 'grid_field_label',
'field' => 'cont_valorinicial' ),
'simple_grid_field13' => array( 'field' => 'cont_valormensual',
'type' => 'grid_field' ),
'simple_grid_field22' => array( 'type' => 'grid_field_label',
'field' => 'cont_valormensual' ),
'simple_grid_field14' => array( 'field' => 'cont_secop_enlace',
'type' => 'grid_field' ),
'simple_grid_field23' => array( 'type' => 'grid_field_label',
'field' => 'cont_secop_enlace' ),
'simple_grid_field24' => array( 'field' => 'cont_nit_contra_taname',
'type' => 'grid_field' ),
'simple_grid_field25' => array( 'type' => 'grid_field_label',
'field' => 'cont_nit_contra_taname' ),
'details_preview1' => array( 'type' => 'details_preview',
'table' => 'contrato_oe',
'items' => array(  ),
'popup' => false ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'informe_intersup_plan_pagos',
'items' => array(  ),
'popup' => false ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>
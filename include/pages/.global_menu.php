<?php
			$optionsArray = array( 'welcome' => array( 'welcomeItems' => array( 'logo' => array( 'menutItem' => false ),
'menu' => array( 'menutItem' => false ),
'loginform_login' => array( 'menutItem' => false ),
'username_button' => array( 'menutItem' => false ),
'chart' => array( 'menutItem' => false ),
'chart1' => array( 'menutItem' => false ),
'chart2' => array( 'menutItem' => false ),
'chart3' => array( 'menutItem' => false ),
'welcome_item' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'q_bandejaentrada_supervisores',
'page' => 'list' ),
'welcome_item1' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'contrato_oe',
'page' => 'list' ),
'welcome_item2' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'q_bandejaentrada_supervisores1',
'page' => 'list' ),
'welcome_item3' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'informe_intersup',
'page' => 'list' ),
'welcome_item4' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'q_bandejaentrada_supervisores2',
'page' => 'list' ),
'welcome_item5' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'informe_intersup_oe',
'page' => 'list' ),
'welcome_item6' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'contrato_modifica',
'page' => 'list' ),
'welcome_item7' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'contrato_modifica_prorroga',
'page' => 'list' ),
'welcome_item8' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'contrato_modifica_cesion',
'page' => 'list' ) ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu',
'loginform_login',
'username_button' ),
'above-grid' => array( 'chart',
'chart1',
'chart2',
'chart3' ),
'grid' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item3',
'welcome_item4',
'welcome_item5',
'welcome_item6',
'welcome_item7',
'welcome_item8' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'chart' => 'above-grid',
'chart1' => 'above-grid',
'chart2' => 'above-grid',
'chart3' => 'above-grid',
'welcome_item' => 'grid',
'welcome_item1' => 'grid',
'welcome_item2' => 'grid',
'welcome_item3' => 'grid',
'welcome_item4' => 'grid',
'welcome_item5' => 'grid',
'welcome_item6' => 'grid',
'welcome_item7' => 'grid',
'welcome_item8' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'loginform_login' => 3,
'username_button' => 3 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'chart' => array( 'chart',
'chart1',
'chart2',
'chart3' ),
'welcome_item' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item3',
'welcome_item4',
'welcome_item5',
'welcome_item6',
'welcome_item7',
'welcome_item8' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'menu',
'type' => 'menu',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'menu-topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo',
'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 1 ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2',
'colspan' => 1 ),
array( 'cell' => 'c3' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'chart' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'chart1' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'chart2' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'chart3' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'welcome',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c2',
'colspan' => 1 ) ) ) ),
'cells' => array( 'c2' => array( 'model' => 'c1',
'items' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item3',
'welcome_item4',
'welcome_item5',
'welcome_item6',
'welcome_item7',
'welcome_item8' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'adminarea_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'chart' => array( 'type' => 'chart',
'table' => 'contrato_chart_estado',
'icon' => array( 'glyph' => 'signal' ) ),
'chart1' => array( 'type' => 'chart',
'table' => 'contrato_chart_dependencia',
'icon' => array( 'glyph' => 'signal' ) ),
'chart2' => array( 'type' => 'chart',
'table' => 'contrato_chart_tipocont',
'icon' => array( 'glyph' => 'signal' ) ),
'chart3' => array( 'type' => 'chart',
'table' => 'contrato_chart_tiporubro',
'icon' => array( 'glyph' => 'signal' ) ),
'welcome_item' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'q_bandejaentrada_supervisores',
'linkPage' => 'list',
'linkText' => array( 'table' => 'q_bandejaentrada_supervisores',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'fire' ),
'linkComments' => array( 'text' => 'Q Bandejaentrada Supervisores description',
'type' => 0 ),
'background' => '#DB7093' ),
'welcome_item1' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'contrato_oe',
'linkPage' => 'list',
'linkText' => array( 'table' => 'contrato_oe',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'briefcase' ),
'linkComments' => array( 'text' => 'Contrato Oe description',
'type' => 0 ),
'background' => '#DB7093' ),
'welcome_item2' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'q_bandejaentrada_supervisores1',
'linkPage' => 'list',
'linkText' => array( 'table' => 'q_bandejaentrada_supervisores1',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'barcode' ),
'linkComments' => array( 'text' => 'Q Bandejaentrada Supervisores1 description',
'type' => 0 ),
'background' => '#8FBC8B' ),
'welcome_item3' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'informe_intersup',
'linkPage' => 'list',
'linkText' => array( 'table' => 'informe_intersup',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'calendar' ),
'linkComments' => array( 'text' => 'Informe Intersup description',
'type' => 0 ),
'background' => '#D2AF80' ),
'welcome_item4' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'q_bandejaentrada_supervisores2',
'linkPage' => 'list',
'linkText' => array( 'table' => 'q_bandejaentrada_supervisores2',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'earphone' ),
'linkComments' => array( 'text' => 'Q Bandejaentrada Supervisores2 description',
'type' => 0 ),
'background' => '#B22222' ),
'welcome_item5' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'informe_intersup_oe',
'linkPage' => 'list',
'linkText' => array( 'table' => 'informe_intersup_oe',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'calendar' ),
'background' => '#8FBC8B' ),
'welcome_item6' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'contrato_modifica',
'linkPage' => 'list',
'linkText' => array( 'table' => 'contrato_modifica',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'fire' ),
'background' => '#00C2C5' ),
'welcome_item7' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'contrato_modifica_prorroga',
'linkPage' => 'list',
'linkText' => array( 'table' => 'contrato_modifica_prorroga',
'type' => 6 ),
'background' => '#9ACD32' ),
'welcome_item8' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'contrato_modifica_cesion',
'linkPage' => 'list',
'linkText' => array( 'table' => 'contrato_modifica_cesion',
'type' => 6 ),
'background' => '#6493EA' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>
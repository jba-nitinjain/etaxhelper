<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
			'social_id',
			'org_id',
			'platform',
			'handle_name',
			'website',
			'mobile_app' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'social_id' => array( 
				'simple_grid_field',
				'simple_grid_field6' 
			),
			'org_id' => array( 
				'simple_grid_field1',
				'simple_grid_field7' 
			),
			'platform' => array( 
				'simple_grid_field2',
				'simple_grid_field8' 
			),
			'handle_name' => array( 
				'simple_grid_field3',
				'simple_grid_field9' 
			),
			'website' => array( 
				'simple_grid_field4',
				'simple_grid_field10' 
			),
			'mobile_app' => array( 
				'simple_grid_field5',
				'simple_grid_field11' 
			) 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => false,
		'view' => false,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'inline_add' 
				),
				'below-grid' => array( 
					 
				),
				'top' => array( 
					'masterprint_header' 
				),
				'grid' => array( 
					'simple_grid_field6',
					'simple_grid_field',
					'simple_grid_field7',
					'simple_grid_field1',
					'simple_grid_field8',
					'simple_grid_field2',
					'simple_grid_field9',
					'simple_grid_field3',
					'simple_grid_field10',
					'simple_grid_field4',
					'simple_grid_field11',
					'simple_grid_field5',
					'grid_inline_cancel' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'inlineadd_link' 
				),
				'below-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'inline_add' => 'above-grid',
				'masterprint_header' => 'top',
				'simple_grid_field6' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field7' => 'grid',
				'simple_grid_field1' => 'grid',
				'simple_grid_field8' => 'grid',
				'simple_grid_field2' => 'grid',
				'simple_grid_field9' => 'grid',
				'simple_grid_field3' => 'grid',
				'simple_grid_field10' => 'grid',
				'simple_grid_field4' => 'grid',
				'simple_grid_field11' => 'grid',
				'simple_grid_field5' => 'grid',
				'grid_inline_cancel' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'simple_grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'simple_grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'simple_grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field5' 
				),
				'simple_grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'grid_inline_cancel' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				) 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'masterprint_header' => array( 
				'masterprint_header' 
			),
			'grid_field' => array( 
				'simple_grid_field',
				'simple_grid_field1',
				'simple_grid_field2',
				'simple_grid_field3',
				'simple_grid_field4',
				'simple_grid_field5' 
			),
			'grid_field_label' => array( 
				'simple_grid_field6',
				'simple_grid_field7',
				'simple_grid_field8',
				'simple_grid_field9',
				'simple_grid_field10',
				'simple_grid_field11' 
			),
			'inline_add' => array( 
				'inline_add' 
			),
			'grid_inline_cancel' => array( 
				'grid_inline_cancel' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'headcell_icons' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'social_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field1' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'org_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field2' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'platform_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'handle_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field4' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'website_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field5' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'mobile_app_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field11' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_icons' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'inline_cancel' 
						),
						'items' => array( 
							'grid_inline_cancel' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'social_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'org_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'platform_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'handle_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'website_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'mobile_app_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_icons' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field1' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field2' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field3' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field4' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field5' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					) 
				),
				'width' => 7,
				'height' => 3 
			) 
		) 
	),
	'loginForm' => array(
		'loginForm' => 3 
	),
	'page' => array(
		'verticalBar' => false,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				 
			) 
		),
		'gridType' => 0,
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'misc' => array(
		'type' => 'masterprint',
		'breadcrumb' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'masterprint',
	'type' => 'masterprint',
	'layoutId' => 'masterprint',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'empty-above-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'inline_add' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'empty-above-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'masterlist-top',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'masterprint_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'horizontal-grid',
			'grid' => array( 
				array(
					'section' => 'head',
					'cells' => array( 
						array(
							'cell' => 'headcell_icons' 
						),
						array(
							'cell' => 'headcell_field' 
						),
						array(
							'cell' => 'headcell_field1' 
						),
						array(
							'cell' => 'headcell_field2' 
						),
						array(
							'cell' => 'headcell_field3' 
						),
						array(
							'cell' => 'headcell_field4' 
						),
						array(
							'cell' => 'headcell_field5' 
						) 
					) 
				),
				array(
					'section' => 'body',
					'cells' => array( 
						array(
							'cell' => 'cell_icons' 
						),
						array(
							'cell' => 'cell_field' 
						),
						array(
							'cell' => 'cell_field1' 
						),
						array(
							'cell' => 'cell_field2' 
						),
						array(
							'cell' => 'cell_field3' 
						),
						array(
							'cell' => 'cell_field4' 
						),
						array(
							'cell' => 'cell_field5' 
						) 
					) 
				),
				array(
					'section' => 'foot',
					'cells' => array( 
						array(
							'cell' => 'footcell_icons' 
						),
						array(
							'cell' => 'footcell_field' 
						),
						array(
							'cell' => 'footcell_field1' 
						),
						array(
							'cell' => 'footcell_field2' 
						),
						array(
							'cell' => 'footcell_field3' 
						),
						array(
							'cell' => 'footcell_field4' 
						),
						array(
							'cell' => 'footcell_field5' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field6' 
					),
					'field' => 'social_id',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field' 
					),
					'field' => 'social_id',
					'columnName' => 'field' 
				),
				'footcell_field' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field1' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'org_id',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field1' 
					),
					'field' => 'org_id',
					'columnName' => 'field' 
				),
				'footcell_field1' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field2' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field8' 
					),
					'field' => 'platform',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'field' => 'platform',
					'columnName' => 'field' 
				),
				'footcell_field2' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field3' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field9' 
					),
					'field' => 'handle_name',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field3' 
					),
					'field' => 'handle_name',
					'columnName' => 'field' 
				),
				'footcell_field3' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field4' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field10' 
					),
					'field' => 'website',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'field' => 'website',
					'columnName' => 'field' 
				),
				'footcell_field4' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field5' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field11' 
					),
					'field' => 'mobile_app',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field5' 
					),
					'field' => 'mobile_app',
					'columnName' => 'field' 
				),
				'footcell_field5' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_icons' => array(
					'model' => 'headcell_icons',
					'items' => array( 
						 
					) 
				),
				'cell_icons' => array(
					'model' => 'cell_icons',
					'items' => array( 
						'grid_inline_cancel' 
					) 
				),
				'footcell_icons' => array(
					'model' => 'footcell_icons',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'masterprint_header' => array(
			'type' => 'masterprint_header' 
		),
		'simple_grid_field' => array(
			'field' => 'social_id',
			'type' => 'grid_field' 
		),
		'simple_grid_field6' => array(
			'type' => 'grid_field_label',
			'field' => 'social_id' 
		),
		'simple_grid_field1' => array(
			'field' => 'org_id',
			'type' => 'grid_field' 
		),
		'simple_grid_field7' => array(
			'type' => 'grid_field_label',
			'field' => 'org_id' 
		),
		'simple_grid_field2' => array(
			'field' => 'platform',
			'type' => 'grid_field' 
		),
		'simple_grid_field8' => array(
			'type' => 'grid_field_label',
			'field' => 'platform' 
		),
		'simple_grid_field3' => array(
			'field' => 'handle_name',
			'type' => 'grid_field' 
		),
		'simple_grid_field9' => array(
			'type' => 'grid_field_label',
			'field' => 'handle_name' 
		),
		'simple_grid_field4' => array(
			'field' => 'website',
			'type' => 'grid_field' 
		),
		'simple_grid_field10' => array(
			'type' => 'grid_field_label',
			'field' => 'website' 
		),
		'simple_grid_field5' => array(
			'field' => 'mobile_app',
			'type' => 'grid_field' 
		),
		'simple_grid_field11' => array(
			'type' => 'grid_field_label',
			'field' => 'mobile_app' 
		),
		'inline_add' => array(
			'type' => 'inline_add',
			'detailsOnly' => true 
		),
		'grid_inline_cancel' => array(
			'type' => 'grid_inline_cancel' 
		) 
	),
	'dbProps' => array(
		 
	),
	'version' => 13,
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'listTotals' => 1,
	'title' => array(
		 
	) 
);
		?>
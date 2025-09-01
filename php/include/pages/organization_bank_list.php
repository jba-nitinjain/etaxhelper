<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => false,
		'detailsAdd' => false,
		'inlineEdit' => false,
		'addToBottom' => false,
		'delete' => false,
		'updateSelected' => false,
		'clickSort' => true,
		'sortDropdown' => false,
		'showHideFields' => false,
		'reorderFields' => false,
		'fieldFilter' => false,
		'hideNumberOfRecords' => false 
	),
	'listSearch' => array(
		'alwaysOnPanelFields' => array( 
			 
		),
		'searchPanel' => true,
		'fixedSearchPanel' => false,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
	),
	'totals' => array(
		'bank_id' => array(
			'totalsType' => '' 
		),
		'org_id' => array(
			'totalsType' => '' 
		),
		'bank_name' => array(
			'totalsType' => '' 
		),
		'branch_name' => array(
			'totalsType' => '' 
		),
		'account_no' => array(
			'totalsType' => '' 
		),
		'ifsc_code' => array(
			'totalsType' => '' 
		),
		'swift_code' => array(
			'totalsType' => '' 
		),
		'account_type' => array(
			'totalsType' => '' 
		),
		'mode_of_operation' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'bank_id',
			'org_id',
			'bank_name',
			'branch_name',
			'account_no',
			'ifsc_code',
			'swift_code',
			'account_type',
			'mode_of_operation' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'bank_id',
			'mode_of_operation',
			'account_type',
			'swift_code',
			'ifsc_code',
			'account_no',
			'branch_name',
			'bank_name',
			'org_id' 
		),
		'filterFields' => array( 
			 
		),
		'inlineAddFields' => array( 
			 
		),
		'inlineEditFields' => array( 
			 
		),
		'fieldItems' => array(
			'bank_id' => array( 
				'simple_grid_field',
				'simple_grid_field9' 
			),
			'org_id' => array( 
				'simple_grid_field1',
				'simple_grid_field10' 
			),
			'bank_name' => array( 
				'simple_grid_field2',
				'simple_grid_field11' 
			),
			'branch_name' => array( 
				'simple_grid_field3',
				'simple_grid_field12' 
			),
			'account_no' => array( 
				'simple_grid_field4',
				'simple_grid_field13' 
			),
			'ifsc_code' => array( 
				'simple_grid_field5',
				'simple_grid_field14' 
			),
			'swift_code' => array( 
				'simple_grid_field6',
				'simple_grid_field15' 
			),
			'account_type' => array( 
				'simple_grid_field7',
				'simple_grid_field16' 
			),
			'mode_of_operation' => array( 
				'simple_grid_field8',
				'simple_grid_field17' 
			) 
		),
		'hideEmptyFields' => array( 
			 
		),
		'fieldFilterFields' => array( 
			 
		) 
	),
	'pageLinks' => array(
		'edit' => true,
		'add' => true,
		'view' => true,
		'print' => true 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'add',
					'details_found',
					'page_size',
					'print_panel' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'left' => array( 
					'logo',
					'expand_button',
					'menu',
					'search_panel' 
				),
				'supertop' => array( 
					'expand_menu_button',
					'collapse_button',
					'breadcrumb',
					'simple_search',
					'list_options' 
				),
				'top' => array( 
					 
				),
				'grid' => array( 
					'simple_grid_field9',
					'simple_grid_field',
					'simple_grid_field10',
					'simple_grid_field1',
					'simple_grid_field11',
					'simple_grid_field2',
					'simple_grid_field12',
					'simple_grid_field3',
					'simple_grid_field13',
					'simple_grid_field4',
					'simple_grid_field14',
					'simple_grid_field5',
					'simple_grid_field15',
					'simple_grid_field6',
					'simple_grid_field16',
					'simple_grid_field7',
					'simple_grid_field17',
					'simple_grid_field8',
					'grid_checkbox_head',
					'grid_checkbox',
					'grid_edit',
					'grid_view' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'add_link',
					'details_found',
					'recsPerPage',
					'print_friendly' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'top' => array( 
					 
				) 
			),
			'itemForms' => array(
				'add' => 'above-grid',
				'details_found' => 'above-grid',
				'page_size' => 'above-grid',
				'print_panel' => 'above-grid',
				'pagination' => 'below-grid',
				'logo' => 'left',
				'expand_button' => 'left',
				'menu' => 'left',
				'search_panel' => 'left',
				'expand_menu_button' => 'supertop',
				'collapse_button' => 'supertop',
				'breadcrumb' => 'supertop',
				'simple_search' => 'supertop',
				'list_options' => 'supertop',
				'simple_grid_field9' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field10' => 'grid',
				'simple_grid_field1' => 'grid',
				'simple_grid_field11' => 'grid',
				'simple_grid_field2' => 'grid',
				'simple_grid_field12' => 'grid',
				'simple_grid_field3' => 'grid',
				'simple_grid_field13' => 'grid',
				'simple_grid_field4' => 'grid',
				'simple_grid_field14' => 'grid',
				'simple_grid_field5' => 'grid',
				'simple_grid_field15' => 'grid',
				'simple_grid_field6' => 'grid',
				'simple_grid_field16' => 'grid',
				'simple_grid_field7' => 'grid',
				'simple_grid_field17' => 'grid',
				'simple_grid_field8' => 'grid',
				'grid_checkbox_head' => 'grid',
				'grid_checkbox' => 'grid',
				'grid_edit' => 'grid',
				'grid_view' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'simple_grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'simple_grid_field12' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'simple_grid_field13' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'simple_grid_field14' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field5' 
				),
				'simple_grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'simple_grid_field15' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field6' 
				),
				'simple_grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field6' 
				),
				'simple_grid_field16' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field7' 
				),
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
				),
				'simple_grid_field17' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field8' 
				),
				'simple_grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'cell_field8' 
				),
				'grid_checkbox_head' => array(
					'location' => 'grid',
					'cellId' => 'headcell_checkbox' 
				),
				'grid_checkbox' => array(
					'location' => 'grid',
					'cellId' => 'cell_checkbox' 
				),
				'grid_edit' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'grid_view' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				) 
			),
			'itemVisiblity' => array(
				'breadcrumb' => 5,
				'expand_menu_button' => 2,
				'print_panel' => 5,
				'expand_button' => 5 
			) 
		),
		'itemsByType' => array(
			'page_size' => array( 
				'page_size' 
			),
			'breadcrumb' => array( 
				'breadcrumb' 
			),
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'simple_search' => array( 
				'simple_search' 
			),
			'pagination' => array( 
				'pagination' 
			),
			'details_found' => array( 
				'details_found' 
			),
			'search_panel' => array( 
				'search_panel' 
			),
			'list_options' => array( 
				'list_options' 
			),
			'show_search_panel' => array( 
				'show_search_panel' 
			),
			'hide_search_panel' => array( 
				'hide_search_panel' 
			),
			'search_panel_field' => array( 
				'search_panel_field',
				'search_panel_field1',
				'search_panel_field2',
				'search_panel_field3',
				'search_panel_field4',
				'search_panel_field5',
				'search_panel_field6',
				'search_panel_field7',
				'search_panel_field8' 
			),
			'expand_menu_button' => array( 
				'expand_menu_button' 
			),
			'collapse_button' => array( 
				'collapse_button' 
			),
			'add' => array( 
				'add' 
			),
			'print_panel' => array( 
				'print_panel' 
			),
			'print_scope' => array( 
				'print_scope' 
			),
			'print_button' => array( 
				'print_button' 
			),
			'print_records' => array( 
				'print_records' 
			),
			'export' => array( 
				'export' 
			),
			'-' => array( 
				'-',
				'-1',
				'-2',
				'-3' 
			),
			'export_selected' => array( 
				'export_selected' 
			),
			'import' => array( 
				'import' 
			),
			'grid_field' => array( 
				'simple_grid_field',
				'simple_grid_field1',
				'simple_grid_field2',
				'simple_grid_field3',
				'simple_grid_field4',
				'simple_grid_field5',
				'simple_grid_field6',
				'simple_grid_field7',
				'simple_grid_field8' 
			),
			'grid_field_label' => array( 
				'simple_grid_field9',
				'simple_grid_field10',
				'simple_grid_field11',
				'simple_grid_field12',
				'simple_grid_field13',
				'simple_grid_field14',
				'simple_grid_field15',
				'simple_grid_field16',
				'simple_grid_field17' 
			),
			'grid_checkbox' => array( 
				'grid_checkbox' 
			),
			'grid_checkbox_head' => array( 
				'grid_checkbox_head' 
			),
			'grid_edit' => array( 
				'grid_edit' 
			),
			'grid_view' => array( 
				'grid_view' 
			),
			'expand_button' => array( 
				'expand_button' 
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
					'headcell_checkbox' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'checkbox_column' 
						),
						'items' => array( 
							'grid_checkbox_head' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'bank_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field1' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'org_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field2' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'bank_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field11' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'branch_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field12' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field4' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'account_no_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field13' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field5' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'ifsc_code_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field14' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field6' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'swift_code_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field15' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field7' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'account_type_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field16' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field8' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'mode_of_operation_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field17' 
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
							'edit_column',
							'view_column' 
						),
						'items' => array( 
							'grid_edit',
							'grid_view' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_checkbox' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'checkbox_column' 
						),
						'items' => array( 
							'grid_checkbox' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'bank_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							3 
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
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'bank_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'branch_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'account_no_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'ifsc_code_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field6' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'swift_code_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field7' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'account_type_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field8' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'mode_of_operation_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field8' 
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
					'footcell_checkbox' => array(
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
					'footcell_field' => array(
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
					'footcell_field1' => array(
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
					'footcell_field2' => array(
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
					'footcell_field3' => array(
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
					'footcell_field4' => array(
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
					),
					'footcell_field5' => array(
						'cols' => array( 
							7 
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
					'footcell_field6' => array(
						'cols' => array( 
							8 
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
					'footcell_field7' => array(
						'cols' => array( 
							9 
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
					'footcell_field8' => array(
						'cols' => array( 
							10 
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
				'width' => 11,
				'height' => 3 
			) 
		) 
	),
	'page' => array(
		'verticalBar' => true,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				'details_found' => array(
					'tag' => 'DISPLAYING',
					'type' => 2 
				) 
			) 
		),
		'gridType' => 0,
		'recsPerRow' => 1,
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			array(
				'id' => 'main',
				'horizontal' => false 
			) 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'misc' => array(
		'type' => 'list',
		'breadcrumb' => true 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	),
	'dataGrid' => array(
		'groupFields' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'list',
	'type' => 'list',
	'layoutId' => 'leftbar',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'list-above-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						),
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'add' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'details_found',
						'page_size',
						'print_panel' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'list-below-grid',
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
						'pagination' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'left' => array(
			'modelId' => 'leftbar-menu',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c0' 
						) 
					),
					'section' => '' 
				),
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
				'c0' => array(
					'model' => 'c0',
					'items' => array( 
						'logo',
						'expand_button' 
					) 
				),
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'menu',
						'search_panel' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'supertop' => array(
			'modelId' => 'leftbar-top',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						),
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'expand_menu_button',
						'collapse_button',
						'breadcrumb' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'simple_search',
						'list_options' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'list-sidebar-top',
			'grid' => array( 
				 
			),
			'cells' => array(
				 
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
							'cell' => 'headcell_checkbox' 
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
						),
						array(
							'cell' => 'headcell_field6' 
						),
						array(
							'cell' => 'headcell_field7' 
						),
						array(
							'cell' => 'headcell_field8' 
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
							'cell' => 'cell_checkbox' 
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
						),
						array(
							'cell' => 'cell_field6' 
						),
						array(
							'cell' => 'cell_field7' 
						),
						array(
							'cell' => 'cell_field8' 
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
							'cell' => 'footcell_checkbox' 
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
						),
						array(
							'cell' => 'footcell_field6' 
						),
						array(
							'cell' => 'footcell_field7' 
						),
						array(
							'cell' => 'footcell_field8' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field9' 
					),
					'field' => 'bank_id',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field' 
					),
					'field' => 'bank_id',
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
						'simple_grid_field10' 
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
						'simple_grid_field11' 
					),
					'field' => 'bank_name',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'field' => 'bank_name',
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
						'simple_grid_field12' 
					),
					'field' => 'branch_name',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field3' 
					),
					'field' => 'branch_name',
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
						'simple_grid_field13' 
					),
					'field' => 'account_no',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'field' => 'account_no',
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
						'simple_grid_field14' 
					),
					'field' => 'ifsc_code',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field5' 
					),
					'field' => 'ifsc_code',
					'columnName' => 'field' 
				),
				'footcell_field5' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field6' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field15' 
					),
					'field' => 'swift_code',
					'columnName' => 'field' 
				),
				'cell_field6' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field6' 
					),
					'field' => 'swift_code',
					'columnName' => 'field' 
				),
				'footcell_field6' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field7' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field16' 
					),
					'field' => 'account_type',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'account_type',
					'columnName' => 'field' 
				),
				'footcell_field7' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field8' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field17' 
					),
					'field' => 'mode_of_operation',
					'columnName' => 'field' 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field8' 
					),
					'field' => 'mode_of_operation',
					'columnName' => 'field' 
				),
				'footcell_field8' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_checkbox' => array(
					'model' => 'headcell_checkbox',
					'items' => array( 
						'grid_checkbox_head' 
					) 
				),
				'cell_checkbox' => array(
					'model' => 'cell_checkbox',
					'items' => array( 
						'grid_checkbox' 
					) 
				),
				'footcell_checkbox' => array(
					'model' => 'footcell_checkbox',
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
						'grid_edit',
						'grid_view' 
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
		'page_size' => array(
			'type' => 'page_size' 
		),
		'breadcrumb' => array(
			'type' => 'breadcrumb' 
		),
		'logo' => array(
			'type' => 'logo' 
		),
		'menu' => array(
			'type' => 'menu' 
		),
		'simple_search' => array(
			'type' => 'simple_search' 
		),
		'pagination' => array(
			'type' => 'pagination' 
		),
		'details_found' => array(
			'type' => 'details_found' 
		),
		'search_panel' => array(
			'type' => 'search_panel',
			'items' => array( 
				'search_panel_field',
				'search_panel_field8',
				'search_panel_field7',
				'search_panel_field6',
				'search_panel_field5',
				'search_panel_field4',
				'search_panel_field3',
				'search_panel_field2',
				'search_panel_field1' 
			),
			'_flexiblePanel' => true 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'export_selected',
				'-3',
				'show_search_panel',
				'hide_search_panel',
				'-',
				'export',
				'-2',
				'import' 
			) 
		),
		'show_search_panel' => array(
			'type' => 'show_search_panel' 
		),
		'hide_search_panel' => array(
			'type' => 'hide_search_panel' 
		),
		'search_panel_field' => array(
			'field' => 'bank_id',
			'type' => 'search_panel_field' 
		),
		'search_panel_field1' => array(
			'field' => 'org_id',
			'type' => 'search_panel_field' 
		),
		'search_panel_field2' => array(
			'field' => 'bank_name',
			'type' => 'search_panel_field' 
		),
		'search_panel_field3' => array(
			'field' => 'branch_name',
			'type' => 'search_panel_field' 
		),
		'search_panel_field4' => array(
			'field' => 'account_no',
			'type' => 'search_panel_field' 
		),
		'search_panel_field5' => array(
			'field' => 'ifsc_code',
			'type' => 'search_panel_field' 
		),
		'search_panel_field6' => array(
			'field' => 'swift_code',
			'type' => 'search_panel_field' 
		),
		'search_panel_field7' => array(
			'field' => 'account_type',
			'type' => 'search_panel_field' 
		),
		'search_panel_field8' => array(
			'field' => 'mode_of_operation',
			'type' => 'search_panel_field' 
		),
		'expand_menu_button' => array(
			'type' => 'expand_menu_button' 
		),
		'collapse_button' => array(
			'type' => 'collapse_button' 
		),
		'add' => array(
			'type' => 'add' 
		),
		'print_panel' => array(
			'type' => 'print_panel',
			'items' => array( 
				'print_scope',
				'print_records',
				'print_button' 
			) 
		),
		'print_scope' => array(
			'type' => 'print_scope' 
		),
		'print_button' => array(
			'type' => 'print_button' 
		),
		'print_records' => array(
			'type' => 'print_records' 
		),
		'export' => array(
			'type' => 'export' 
		),
		'-' => array(
			'type' => '-' 
		),
		'export_selected' => array(
			'type' => 'export_selected' 
		),
		'-1' => array(
			'type' => '-' 
		),
		'import' => array(
			'type' => 'import' 
		),
		'-2' => array(
			'type' => '-' 
		),
		'-3' => array(
			'type' => '-' 
		),
		'simple_grid_field' => array(
			'field' => 'bank_id',
			'type' => 'grid_field' 
		),
		'simple_grid_field9' => array(
			'type' => 'grid_field_label',
			'field' => 'bank_id' 
		),
		'simple_grid_field1' => array(
			'field' => 'org_id',
			'type' => 'grid_field' 
		),
		'simple_grid_field10' => array(
			'type' => 'grid_field_label',
			'field' => 'org_id' 
		),
		'simple_grid_field2' => array(
			'field' => 'bank_name',
			'type' => 'grid_field' 
		),
		'simple_grid_field11' => array(
			'type' => 'grid_field_label',
			'field' => 'bank_name' 
		),
		'simple_grid_field3' => array(
			'field' => 'branch_name',
			'type' => 'grid_field' 
		),
		'simple_grid_field12' => array(
			'type' => 'grid_field_label',
			'field' => 'branch_name' 
		),
		'simple_grid_field4' => array(
			'field' => 'account_no',
			'type' => 'grid_field' 
		),
		'simple_grid_field13' => array(
			'type' => 'grid_field_label',
			'field' => 'account_no' 
		),
		'simple_grid_field5' => array(
			'field' => 'ifsc_code',
			'type' => 'grid_field' 
		),
		'simple_grid_field14' => array(
			'type' => 'grid_field_label',
			'field' => 'ifsc_code' 
		),
		'simple_grid_field6' => array(
			'field' => 'swift_code',
			'type' => 'grid_field' 
		),
		'simple_grid_field15' => array(
			'type' => 'grid_field_label',
			'field' => 'swift_code' 
		),
		'simple_grid_field7' => array(
			'field' => 'account_type',
			'type' => 'grid_field' 
		),
		'simple_grid_field16' => array(
			'type' => 'grid_field_label',
			'field' => 'account_type' 
		),
		'simple_grid_field8' => array(
			'field' => 'mode_of_operation',
			'type' => 'grid_field' 
		),
		'simple_grid_field17' => array(
			'type' => 'grid_field_label',
			'field' => 'mode_of_operation' 
		),
		'grid_checkbox' => array(
			'type' => 'grid_checkbox' 
		),
		'grid_checkbox_head' => array(
			'type' => 'grid_checkbox_head' 
		),
		'grid_edit' => array(
			'type' => 'grid_edit' 
		),
		'grid_view' => array(
			'type' => 'grid_view' 
		),
		'expand_button' => array(
			'type' => 'expand_button' 
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
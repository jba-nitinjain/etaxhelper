<?php
global $runnerTableSettings;
$runnerTableSettings['organization_branch'] = array(
	'name' => 'organization_branch',
	'shortName' => 'organization_branch',
	'pagesByType' => array(
		'add' => array( 
			'add' 
		),
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'edit' => array( 
			'edit' 
		),
		'view' => array( 
			'view' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'list' => 'list',
		'print' => 'print',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'list' => 'list',
		'print' => 'print',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'search' => 'search' 
	),
	'afterEditDetails' => 'organization_branch',
	'afterAddDetail' => 'organization_branch',
	'detailsBadgeColor' => 'db7093',
	'sql' => 'SELECT
	branch_id,
	org_id,
	branch_name,
	address_line,
	city,
	`state`,
	postal_code,
	country,
	phone,
	email
FROM
	organization_branch',
	'keyFields' => array( 
		'branch_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'branch_id' => array(
			'name' => 'branch_id',
			'goodName' => 'branch_id',
			'strField' => 'branch_id',
			'index' => 1,
			'type' => 20,
			'autoinc' => true,
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			) 
		),
		'org_id' => array(
			'name' => 'org_id',
			'goodName' => 'org_id',
			'strField' => 'org_id',
			'index' => 2,
			'type' => 20,
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			) 
		),
		'branch_name' => array(
			'name' => 'branch_name',
			'goodName' => 'branch_name',
			'strField' => 'branch_name',
			'index' => 3,
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			) 
		),
		'address_line' => array(
			'name' => 'address_line',
			'goodName' => 'address_line',
			'strField' => 'address_line',
			'index' => 4,
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			) 
		),
		'city' => array(
			'name' => 'city',
			'goodName' => 'city',
			'strField' => 'city',
			'index' => 5,
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			) 
		),
		'state' => array(
			'name' => 'state',
			'goodName' => 'state',
			'strField' => 'state',
			'index' => 6,
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			) 
		),
		'postal_code' => array(
			'name' => 'postal_code',
			'goodName' => 'postal_code',
			'strField' => 'postal_code',
			'index' => 7,
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			) 
		),
		'country' => array(
			'name' => 'country',
			'goodName' => 'country',
			'strField' => 'country',
			'index' => 8,
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			) 
		),
		'phone' => array(
			'name' => 'phone',
			'goodName' => 'phone',
			'strField' => 'phone',
			'index' => 9,
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			) 
		),
		'email' => array(
			'name' => 'email',
			'goodName' => 'email',
			'strField' => 'email',
			'index' => 10,
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	branch_id,
	org_id,
	branch_name,
	address_line,
	city,
	`state`,
	postal_code,
	country,
	phone,
	email
FROM
	organization_branch',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'branch_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => 'branch_id',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'branch_id' 
			),
			array(
				'sql' => 'org_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => 'org_id',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'org_id' 
			),
			array(
				'sql' => 'branch_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => 'branch_name',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'branch_name' 
			),
			array(
				'sql' => 'address_line',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => 'address_line',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'address_line' 
			),
			array(
				'sql' => 'city',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => 'city',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'city' 
			),
			array(
				'sql' => '`state`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '`state`',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'state' 
			),
			array(
				'sql' => 'postal_code',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => 'postal_code',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'postal_code' 
			),
			array(
				'sql' => 'country',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => 'country',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'country' 
			),
			array(
				'sql' => 'phone',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => 'phone',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'phone' 
			),
			array(
				'sql' => 'email',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => 'email',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'email' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'organization_branch',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'organization_branch',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						 
					),
					'name' => 'organization_branch' 
				),
				'joinOn' => array(
					'sql' => '',
					'parsed' => false,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => null 
				),
				'joinList' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						 
					),
					'field2' => array( 
						 
					) 
				),
				'link' => 0 
			) 
		),
		'where' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'groupBy' => array( 
			 
		),
		'having' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'orderBy' => array( 
			 
		),
		'colsIndex' => array( 
			array(
				'fieldIndex' => 0,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 1,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 2,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 3,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 4,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 5,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 6,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 7,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 8,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 9,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'branch_id,
	org_id,
	branch_name,
	address_line,
	city,
	`state`,
	postal_code,
	country,
	phone,
	email',
		'fromListSql' => 'FROM
	organization_branch',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'organization_branch',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
		),
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'edit' => array( 
			'edit' 
		),
		'view' => array( 
			'view' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'list' => 'list',
		'print' => 'print',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'list' => 'list',
		'print' => 'print',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'branch_id',
			'org_id',
			'branch_name',
			'address_line',
			'city',
			'state',
			'postal_code',
			'country',
			'phone',
			'email' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'branch_id',
			'org_id',
			'branch_name',
			'address_line',
			'city',
			'state',
			'postal_code',
			'country',
			'phone',
			'email' 
		) 
	),
	'connId' => 'conn',
	'clickActions' => array(
		'row' => array(
			'action' => 'noaction' 
		),
		'fields' => array(
			 
		) 
	),
	'geoCoding' => array(
		'enabled' => false,
		'latField' => '',
		'lonField' => '',
		'addressFields' => array( 
			 
		) 
	),
	'whereTabs' => array( 
		 
	),
	'labels' => array(
		 
	),
	'chartSettings' => array(
		 
	),
	'dataSourceOperations' => array(
		 
	) 
);

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'English' ) {
	$runnerTableLabels['organization_branch'] = array(
	'tableCaption' => 'Organization Branch',
	'fieldLabels' => array(
		'branch_id' => 'Branch Id',
		'org_id' => 'Org Id',
		'branch_name' => 'Branch Name',
		'address_line' => 'Address Line',
		'city' => 'City',
		'state' => 'State',
		'postal_code' => 'Postal Code',
		'country' => 'Country',
		'phone' => 'Phone',
		'email' => 'Email' 
	),
	'fieldTooltips' => array(
		'branch_id' => '',
		'org_id' => '',
		'branch_name' => '',
		'address_line' => '',
		'city' => '',
		'state' => '',
		'postal_code' => '',
		'country' => '',
		'phone' => '',
		'email' => '' 
	),
	'fieldPlaceholders' => array(
		'branch_id' => '',
		'org_id' => '',
		'branch_name' => '',
		'address_line' => '',
		'city' => '',
		'state' => '',
		'postal_code' => '',
		'country' => '',
		'phone' => '',
		'email' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>
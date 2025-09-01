<?php
global $runnerTableSettings;
$runnerTableSettings['ORGANIZATION'] = array(
	'name' => 'ORGANIZATION',
	'shortName' => 'ORGANIZATION',
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
	'afterEditDetails' => 'ORGANIZATION',
	'afterAddDetail' => 'ORGANIZATION',
	'detailsBadgeColor' => '00c2c5',
	'sql' => 'SELECT
	org_id,
	org_type,
	company_name,
	display_name,
	email,
	phone_work
FROM
	`ORGANIZATION`',
	'keyFields' => array( 
		'org_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'org_id' => array(
			'name' => 'org_id',
			'goodName' => 'org_id',
			'strField' => 'org_id',
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
		'org_type' => array(
			'name' => 'org_type',
			'goodName' => 'org_type',
			'strField' => 'org_type',
			'index' => 2,
			'type' => 129,
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			) 
		),
		'company_name' => array(
			'name' => 'company_name',
			'goodName' => 'company_name',
			'strField' => 'company_name',
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
		'display_name' => array(
			'name' => 'display_name',
			'goodName' => 'display_name',
			'strField' => 'display_name',
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
		'email' => array(
			'name' => 'email',
			'goodName' => 'email',
			'strField' => 'email',
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
		'phone_work' => array(
			'name' => 'phone_work',
			'goodName' => 'phone_work',
			'strField' => 'phone_work',
			'index' => 6,
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
	org_id,
	org_type,
	company_name,
	display_name,
	email,
	phone_work
FROM
	`ORGANIZATION`',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
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
				'sql' => 'org_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => 'org_type',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'org_type' 
			),
			array(
				'sql' => 'company_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => 'company_name',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'company_name' 
			),
			array(
				'sql' => 'display_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => 'display_name',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'display_name' 
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
			),
			array(
				'sql' => 'phone_work',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => 'phone_work',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'phone_work' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '`ORGANIZATION`',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '`ORGANIZATION`',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						 
					),
					'name' => 'ORGANIZATION' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'org_id,
	org_type,
	company_name,
	display_name,
	email,
	phone_work',
		'fromListSql' => 'FROM
	`ORGANIZATION`',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'ORGANIZATION',
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
			'org_id',
			'org_type',
			'company_name',
			'display_name',
			'email',
			'phone_work' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'org_id',
			'org_type',
			'company_name',
			'display_name',
			'email',
			'phone_work' 
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
	$runnerTableLabels['ORGANIZATION'] = array(
	'tableCaption' => 'ORGANIZATION',
	'fieldLabels' => array(
		'org_id' => 'Org Id',
		'org_type' => 'Org Type',
		'company_name' => 'Company Name',
		'display_name' => 'Display Name',
		'email' => 'Email',
		'phone_work' => 'Phone Work' 
	),
	'fieldTooltips' => array(
		'org_id' => '',
		'org_type' => '',
		'company_name' => '',
		'display_name' => '',
		'email' => '',
		'phone_work' => '' 
	),
	'fieldPlaceholders' => array(
		'org_id' => '',
		'org_type' => '',
		'company_name' => '',
		'display_name' => '',
		'email' => '',
		'phone_work' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>
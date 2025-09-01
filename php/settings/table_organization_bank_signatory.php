<?php
global $runnerTableSettings;
$runnerTableSettings['organization_bank_signatory'] = array(
	'name' => 'organization_bank_signatory',
	'shortName' => 'organization_bank_signatory',
	'pagesByType' => array(
		'add' => array( 
			'add' 
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
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'afterEditDetails' => 'organization_bank_signatory',
	'afterAddDetail' => 'organization_bank_signatory',
	'detailsBadgeColor' => '00c2c5',
	'sql' => 'SELECT
	signatory_id,
	bank_id,
	NAME,
	designation,
	email,
	phone
FROM
	organization_bank_signatory',
	'keyFields' => array( 
		'signatory_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'signatory_id' => array(
			'name' => 'signatory_id',
			'goodName' => 'signatory_id',
			'strField' => 'signatory_id',
			'index' => 1,
			'type' => 20,
			'autoinc' => true,
			'sqlExpression' => 'signatory_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_bank_signatory' 
		),
		'bank_id' => array(
			'name' => 'bank_id',
			'goodName' => 'bank_id',
			'strField' => 'bank_id',
			'index' => 2,
			'type' => 20,
			'sqlExpression' => 'bank_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'organization_bank',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'bank_id',
					'lookupDisplayField' => 'bank_name' 
				) 
			),
			'tableName' => 'organization_bank_signatory' 
		),
		'NAME' => array(
			'name' => 'NAME',
			'goodName' => 'NAME',
			'strField' => 'NAME',
			'index' => 3,
			'sqlExpression' => 'NAME',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_bank_signatory' 
		),
		'designation' => array(
			'name' => 'designation',
			'goodName' => 'designation',
			'strField' => 'designation',
			'index' => 4,
			'sqlExpression' => 'designation',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_bank_signatory' 
		),
		'email' => array(
			'name' => 'email',
			'goodName' => 'email',
			'strField' => 'email',
			'index' => 5,
			'sqlExpression' => 'email',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_bank_signatory' 
		),
		'phone' => array(
			'name' => 'phone',
			'goodName' => 'phone',
			'strField' => 'phone',
			'index' => 6,
			'sqlExpression' => 'phone',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_bank_signatory' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'organization_bank',
			'detailsKeys' => array( 
				'bank_id' 
			),
			'masterKeys' => array( 
				'bank_id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	signatory_id,
	bank_id,
	NAME,
	designation,
	email,
	phone
FROM
	organization_bank_signatory',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'signatory_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_bank_signatory',
					'name' => 'signatory_id' 
				),
				'encrypted' => false,
				'columnName' => 'signatory_id' 
			),
			array(
				'sql' => 'bank_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_bank_signatory',
					'name' => 'bank_id' 
				),
				'encrypted' => false,
				'columnName' => 'bank_id' 
			),
			array(
				'sql' => 'NAME',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_bank_signatory',
					'name' => 'NAME' 
				),
				'encrypted' => false,
				'columnName' => 'NAME' 
			),
			array(
				'sql' => 'designation',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_bank_signatory',
					'name' => 'designation' 
				),
				'encrypted' => false,
				'columnName' => 'designation' 
			),
			array(
				'sql' => 'email',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_bank_signatory',
					'name' => 'email' 
				),
				'encrypted' => false,
				'columnName' => 'email' 
			),
			array(
				'sql' => 'phone',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_bank_signatory',
					'name' => 'phone' 
				),
				'encrypted' => false,
				'columnName' => 'phone' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'organization_bank_signatory',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'organization_bank_signatory',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'signatory_id',
						'bank_id',
						'NAME',
						'designation',
						'email',
						'phone' 
					),
					'name' => 'organization_bank_signatory' 
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
		'fieldListSql' => 'signatory_id,
	bank_id,
	NAME,
	designation,
	email,
	phone',
		'fromListSql' => 'FROM
	organization_bank_signatory',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'organization_bank_signatory',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
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
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'signatory_id',
			'bank_id',
			'NAME',
			'designation',
			'email',
			'phone' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'signatory_id',
			'bank_id',
			'NAME',
			'designation',
			'email',
			'phone' 
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
		 
	),
	'calendarSettings' => array(
		'categoryColors' => array( 
			 
		) 
	),
	'ganttSettings' => array(
		'categoryColors' => array( 
			 
		) 
	) 
);

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'English' ) {
	$runnerTableLabels['organization_bank_signatory'] = array(
	'tableCaption' => 'Organization Bank Signatory',
	'fieldLabels' => array(
		'signatory_id' => 'Signatory Id',
		'bank_id' => 'Bank Id',
		'NAME' => 'NAME',
		'designation' => 'Designation',
		'email' => 'Email',
		'phone' => 'Phone' 
	),
	'fieldTooltips' => array(
		'signatory_id' => '',
		'bank_id' => '',
		'NAME' => '',
		'designation' => '',
		'email' => '',
		'phone' => '' 
	),
	'fieldPlaceholders' => array(
		'signatory_id' => '',
		'bank_id' => '',
		'NAME' => '',
		'designation' => '',
		'email' => '',
		'phone' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>
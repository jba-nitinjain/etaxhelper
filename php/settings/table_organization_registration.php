<?php
global $runnerTableSettings;
$runnerTableSettings['organization_registration'] = array(
	'name' => 'organization_registration',
	'shortName' => 'organization_registration',
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
	'afterEditDetails' => 'organization_registration',
	'afterAddDetail' => 'organization_registration',
	'detailsBadgeColor' => '9acd32',
	'sql' => 'SELECT
	reg_id,
	org_id,
	reg_type,
	reg_number,
	valid_from,
	valid_to
FROM
	organization_registration',
	'keyFields' => array( 
		'reg_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'reg_id' => array(
			'name' => 'reg_id',
			'goodName' => 'reg_id',
			'strField' => 'reg_id',
			'index' => 1,
			'type' => 20,
			'autoinc' => true,
			'sqlExpression' => 'reg_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_registration' 
		),
		'org_id' => array(
			'name' => 'org_id',
			'goodName' => 'org_id',
			'strField' => 'org_id',
			'index' => 2,
			'type' => 20,
			'sqlExpression' => 'org_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'ORGANIZATION',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'org_id',
					'lookupDisplayField' => 'org_type' 
				) 
			),
			'tableName' => 'organization_registration' 
		),
		'reg_type' => array(
			'name' => 'reg_type',
			'goodName' => 'reg_type',
			'strField' => 'reg_type',
			'index' => 3,
			'sqlExpression' => 'reg_type',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_registration' 
		),
		'reg_number' => array(
			'name' => 'reg_number',
			'goodName' => 'reg_number',
			'strField' => 'reg_number',
			'index' => 4,
			'sqlExpression' => 'reg_number',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_registration' 
		),
		'valid_from' => array(
			'name' => 'valid_from',
			'goodName' => 'valid_from',
			'strField' => 'valid_from',
			'index' => 5,
			'type' => 7,
			'sqlExpression' => 'valid_from',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'organization_registration' 
		),
		'valid_to' => array(
			'name' => 'valid_to',
			'goodName' => 'valid_to',
			'strField' => 'valid_to',
			'index' => 6,
			'type' => 7,
			'sqlExpression' => 'valid_to',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'organization_registration' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'ORGANIZATION',
			'detailsKeys' => array( 
				'org_id' 
			),
			'masterKeys' => array( 
				'org_id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	reg_id,
	org_id,
	reg_type,
	reg_number,
	valid_from,
	valid_to
FROM
	organization_registration',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'reg_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_registration',
					'name' => 'reg_id' 
				),
				'encrypted' => false,
				'columnName' => 'reg_id' 
			),
			array(
				'sql' => 'org_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_registration',
					'name' => 'org_id' 
				),
				'encrypted' => false,
				'columnName' => 'org_id' 
			),
			array(
				'sql' => 'reg_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_registration',
					'name' => 'reg_type' 
				),
				'encrypted' => false,
				'columnName' => 'reg_type' 
			),
			array(
				'sql' => 'reg_number',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_registration',
					'name' => 'reg_number' 
				),
				'encrypted' => false,
				'columnName' => 'reg_number' 
			),
			array(
				'sql' => 'valid_from',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_registration',
					'name' => 'valid_from' 
				),
				'encrypted' => false,
				'columnName' => 'valid_from' 
			),
			array(
				'sql' => 'valid_to',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_registration',
					'name' => 'valid_to' 
				),
				'encrypted' => false,
				'columnName' => 'valid_to' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'organization_registration',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'organization_registration',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'reg_id',
						'org_id',
						'reg_type',
						'reg_number',
						'valid_from',
						'valid_to' 
					),
					'name' => 'organization_registration' 
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
		'fieldListSql' => 'reg_id,
	org_id,
	reg_type,
	reg_number,
	valid_from,
	valid_to',
		'fromListSql' => 'FROM
	organization_registration',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'organization_registration',
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
			'reg_id',
			'org_id',
			'reg_type',
			'reg_number',
			'valid_from',
			'valid_to' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'reg_id',
			'org_id',
			'reg_type',
			'reg_number',
			'valid_from',
			'valid_to' 
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
	$runnerTableLabels['organization_registration'] = array(
	'tableCaption' => 'Organization Registration',
	'fieldLabels' => array(
		'reg_id' => 'Reg Id',
		'org_id' => 'Org Id',
		'reg_type' => 'Reg Type',
		'reg_number' => 'Reg Number',
		'valid_from' => 'Valid From',
		'valid_to' => 'Valid To' 
	),
	'fieldTooltips' => array(
		'reg_id' => '',
		'org_id' => '',
		'reg_type' => '',
		'reg_number' => '',
		'valid_from' => '',
		'valid_to' => '' 
	),
	'fieldPlaceholders' => array(
		'reg_id' => '',
		'org_id' => '',
		'reg_type' => '',
		'reg_number' => '',
		'valid_from' => '',
		'valid_to' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>
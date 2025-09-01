<?php
global $runnerTableSettings;
$runnerTableSettings['ORGANIZATION'] = array(
	'name' => 'ORGANIZATION',
	'shortName' => 'ORGANIZATION',
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
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'afterEditDetails' => 'ORGANIZATION',
	'afterAddDetail' => 'ORGANIZATION',
	'detailsBadgeColor' => '8fbc8b',
	'sql' => 'SELECT
	org_id,
	org_type,
	company_name,
	display_name,
	email,
	phone_work,
	group_id
FROM
	`ORGANIZATION`
',
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
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'org_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ORGANIZATION' 
		),
		'org_type' => array(
			'name' => 'org_type',
			'goodName' => 'org_type',
			'strField' => 'org_type',
			'index' => 2,
			'type' => 129,
			'sqlExpression' => 'org_type',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Proprietorship',
						'Partnership',
						'Private Limited',
						'Public Limited',
						'LLP',
						'NGO',
						'Cooperative',
						'Government',
						'Individual',
						'Other' 
					) 
				) 
			),
			'tableName' => 'ORGANIZATION' 
		),
		'company_name' => array(
			'name' => 'company_name',
			'goodName' => 'company_name',
			'strField' => 'company_name',
			'index' => 3,
			'sqlExpression' => 'company_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ORGANIZATION' 
		),
		'display_name' => array(
			'name' => 'display_name',
			'goodName' => 'display_name',
			'strField' => 'display_name',
			'index' => 4,
			'sqlExpression' => 'display_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ORGANIZATION' 
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
			'tableName' => 'ORGANIZATION' 
		),
		'phone_work' => array(
			'name' => 'phone_work',
			'goodName' => 'phone_work',
			'strField' => 'phone_work',
			'index' => 6,
			'sqlExpression' => 'phone_work',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ORGANIZATION' 
		),
		'group_id' => array(
			'name' => 'group_id',
			'goodName' => 'group_id',
			'strField' => 'group_id',
			'index' => 7,
			'type' => 3,
			'sqlExpression' => 'group_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'organization_group',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'group_id',
					'lookupDisplayField' => 'group_name' 
				) 
			),
			'tableName' => 'ORGANIZATION' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'organization_group',
			'detailsKeys' => array( 
				'group_id' 
			),
			'masterKeys' => array( 
				'group_id' 
			) 
		) 
	),
	'detailsTables' => array( 
		'organization_bank',
		'organization_branch',
		'organization_contact',
		'organization_director',
		'organization_login',
		'organization_registration',
		'organization_social_media' 
	),
	'query' => array(
		'sql' => 'SELECT
	org_id,
	org_type,
	company_name,
	display_name,
	email,
	phone_work,
	group_id
FROM
	`ORGANIZATION`
',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'org_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ORGANIZATION',
					'name' => 'org_id' 
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
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ORGANIZATION',
					'name' => 'org_type' 
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
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ORGANIZATION',
					'name' => 'company_name' 
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
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ORGANIZATION',
					'name' => 'display_name' 
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
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ORGANIZATION',
					'name' => 'email' 
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
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ORGANIZATION',
					'name' => 'phone_work' 
				),
				'encrypted' => false,
				'columnName' => 'phone_work' 
			),
			array(
				'sql' => 'group_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ORGANIZATION',
					'name' => 'group_id' 
				),
				'encrypted' => false,
				'columnName' => 'group_id' 
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
						'org_id',
						'org_type',
						'company_name',
						'display_name',
						'email',
						'phone_work',
						'group_id' 
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
			),
			array(
				'fieldIndex' => 6,
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
	phone_work,
	group_id',
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
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
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
			'phone_work',
			'group_id' 
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
			'phone_work',
			'group_id' 
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
	$runnerTableLabels['ORGANIZATION'] = array(
	'tableCaption' => 'ORGANIZATION',
	'fieldLabels' => array(
		'org_id' => 'Org Id',
		'org_type' => 'Org Type',
		'company_name' => 'Company Name',
		'display_name' => 'Display Name',
		'email' => 'Email',
		'phone_work' => 'Phone Work',
		'group_id' => 'Group Id' 
	),
	'fieldTooltips' => array(
		'org_id' => '',
		'org_type' => '',
		'company_name' => '',
		'display_name' => '',
		'email' => '',
		'phone_work' => '',
		'group_id' => '' 
	),
	'fieldPlaceholders' => array(
		'org_id' => '',
		'org_type' => '',
		'company_name' => '',
		'display_name' => '',
		'email' => '',
		'phone_work' => '',
		'group_id' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>
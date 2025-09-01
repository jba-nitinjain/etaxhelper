<?php
global $runnerTableSettings;
$runnerTableSettings['organization_login'] = array(
	'name' => 'organization_login',
	'shortName' => 'organization_login',
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
	'afterEditDetails' => 'organization_login',
	'afterAddDetail' => 'organization_login',
	'detailsBadgeColor' => 'edca00',
	'sql' => 'SELECT
	login_id,
	org_id,
	related_social_id,
	website,
	user_id,
	PASSWORD,
	notes,
	last_updated
FROM
	organization_login',
	'keyFields' => array( 
		'login_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'login_id' => array(
			'name' => 'login_id',
			'goodName' => 'login_id',
			'strField' => 'login_id',
			'index' => 1,
			'type' => 20,
			'autoinc' => true,
			'sqlExpression' => 'login_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_login' 
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
			'tableName' => 'organization_login' 
		),
		'related_social_id' => array(
			'name' => 'related_social_id',
			'goodName' => 'related_social_id',
			'strField' => 'related_social_id',
			'index' => 3,
			'type' => 20,
			'sqlExpression' => 'related_social_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'organization_social_media',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'social_id',
					'lookupDisplayField' => 'platform' 
				) 
			),
			'tableName' => 'organization_login' 
		),
		'website' => array(
			'name' => 'website',
			'goodName' => 'website',
			'strField' => 'website',
			'index' => 4,
			'sqlExpression' => 'website',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_login' 
		),
		'user_id' => array(
			'name' => 'user_id',
			'goodName' => 'user_id',
			'strField' => 'user_id',
			'index' => 5,
			'sqlExpression' => 'user_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_login' 
		),
		'PASSWORD' => array(
			'name' => 'PASSWORD',
			'goodName' => 'PASSWORD',
			'strField' => 'PASSWORD',
			'index' => 6,
			'sqlExpression' => 'PASSWORD',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_login' 
		),
		'notes' => array(
			'name' => 'notes',
			'goodName' => 'notes',
			'strField' => 'notes',
			'index' => 7,
			'sqlExpression' => 'notes',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_login' 
		),
		'last_updated' => array(
			'name' => 'last_updated',
			'goodName' => 'last_updated',
			'strField' => 'last_updated',
			'index' => 8,
			'type' => 135,
			'sqlExpression' => 'last_updated',
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
			'tableName' => 'organization_login' 
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
		),
		array(
			'table' => 'organization_social_media',
			'detailsKeys' => array( 
				'related_social_id' 
			),
			'masterKeys' => array( 
				'social_id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	login_id,
	org_id,
	related_social_id,
	website,
	user_id,
	PASSWORD,
	notes,
	last_updated
FROM
	organization_login',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'login_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_login',
					'name' => 'login_id' 
				),
				'encrypted' => false,
				'columnName' => 'login_id' 
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
					'table' => 'organization_login',
					'name' => 'org_id' 
				),
				'encrypted' => false,
				'columnName' => 'org_id' 
			),
			array(
				'sql' => 'related_social_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_login',
					'name' => 'related_social_id' 
				),
				'encrypted' => false,
				'columnName' => 'related_social_id' 
			),
			array(
				'sql' => 'website',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_login',
					'name' => 'website' 
				),
				'encrypted' => false,
				'columnName' => 'website' 
			),
			array(
				'sql' => 'user_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_login',
					'name' => 'user_id' 
				),
				'encrypted' => false,
				'columnName' => 'user_id' 
			),
			array(
				'sql' => 'PASSWORD',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_login',
					'name' => 'PASSWORD' 
				),
				'encrypted' => false,
				'columnName' => 'PASSWORD' 
			),
			array(
				'sql' => 'notes',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_login',
					'name' => 'notes' 
				),
				'encrypted' => false,
				'columnName' => 'notes' 
			),
			array(
				'sql' => 'last_updated',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_login',
					'name' => 'last_updated' 
				),
				'encrypted' => false,
				'columnName' => 'last_updated' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'organization_login',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'organization_login',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'login_id',
						'org_id',
						'related_social_id',
						'website',
						'user_id',
						'PASSWORD',
						'notes',
						'last_updated' 
					),
					'name' => 'organization_login' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'login_id,
	org_id,
	related_social_id,
	website,
	user_id,
	PASSWORD,
	notes,
	last_updated',
		'fromListSql' => 'FROM
	organization_login',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'organization_login',
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
			'login_id',
			'org_id',
			'related_social_id',
			'website',
			'user_id',
			'PASSWORD',
			'notes',
			'last_updated' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'login_id',
			'org_id',
			'related_social_id',
			'website',
			'user_id',
			'PASSWORD',
			'notes',
			'last_updated' 
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
	$runnerTableLabels['organization_login'] = array(
	'tableCaption' => 'Organization Login',
	'fieldLabels' => array(
		'login_id' => 'Login Id',
		'org_id' => 'Org Id',
		'related_social_id' => 'Related Social Id',
		'website' => 'Website',
		'user_id' => 'User Id',
		'PASSWORD' => 'PASSWORD',
		'notes' => 'Notes',
		'last_updated' => 'Last Updated' 
	),
	'fieldTooltips' => array(
		'login_id' => '',
		'org_id' => '',
		'related_social_id' => '',
		'website' => '',
		'user_id' => '',
		'PASSWORD' => '',
		'notes' => '',
		'last_updated' => '' 
	),
	'fieldPlaceholders' => array(
		'login_id' => '',
		'org_id' => '',
		'related_social_id' => '',
		'website' => '',
		'user_id' => '',
		'PASSWORD' => '',
		'notes' => '',
		'last_updated' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>
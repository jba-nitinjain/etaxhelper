<?php
global $runnerTableSettings;
$runnerTableSettings['users'] = array(
	'name' => 'users',
	'shortName' => 'users',
	'pagesByType' => array(
		'list' => array( 
			'list' 
		),
		'edit' => array( 
			'edit' 
		),
		'add' => array( 
			'add' 
		),
		'view' => array( 
			'view' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'list' => 'list',
		'edit' => 'edit',
		'add' => 'add',
		'view' => 'view',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'list' => 'list',
		'edit' => 'edit',
		'add' => 'add',
		'view' => 'view',
		'search' => 'search' 
	),
	'afterEditDetails' => 'users',
	'afterAddDetail' => 'users',
	'detailsBadgeColor' => 'e07878',
	'sql' => 'SELECT
	ID,
	username,
	password,
	email,
	fullname,
	groupid,
	active,
	ext_security_id,
	apikey
FROM
	users
',
	'keyFields' => array( 
		'ID' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'ID' => array(
			'name' => 'ID',
			'goodName' => 'ID',
			'strField' => 'ID',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'ID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'users' 
		),
		'username' => array(
			'name' => 'username',
			'goodName' => 'username',
			'strField' => 'username',
			'index' => 2,
			'sqlExpression' => 'username',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'users' 
		),
		'password' => array(
			'name' => 'password',
			'goodName' => 'password',
			'strField' => 'password',
			'index' => 3,
			'sqlExpression' => 'password',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'users' 
		),
		'email' => array(
			'name' => 'email',
			'goodName' => 'email',
			'strField' => 'email',
			'index' => 4,
			'sqlExpression' => 'email',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'users' 
		),
		'fullname' => array(
			'name' => 'fullname',
			'goodName' => 'fullname',
			'strField' => 'fullname',
			'index' => 5,
			'sqlExpression' => 'fullname',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'users' 
		),
		'groupid' => array(
			'name' => 'groupid',
			'goodName' => 'groupid',
			'strField' => 'groupid',
			'index' => 6,
			'sqlExpression' => 'groupid',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'users' 
		),
		'active' => array(
			'name' => 'active',
			'goodName' => 'active',
			'strField' => 'active',
			'index' => 7,
			'type' => 3,
			'sqlExpression' => 'active',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'users' 
		),
		'ext_security_id' => array(
			'name' => 'ext_security_id',
			'goodName' => 'ext_security_id',
			'strField' => 'ext_security_id',
			'index' => 8,
			'sqlExpression' => 'ext_security_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'users' 
		),
		'apikey' => array(
			'name' => 'apikey',
			'goodName' => 'apikey',
			'strField' => 'apikey',
			'index' => 9,
			'sqlExpression' => 'apikey',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'users' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	ID,
	username,
	password,
	email,
	fullname,
	groupid,
	active,
	ext_security_id,
	apikey
FROM
	users
',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'ID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'users',
					'name' => 'ID' 
				),
				'encrypted' => false,
				'columnName' => 'ID' 
			),
			array(
				'sql' => 'username',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'users',
					'name' => 'username' 
				),
				'encrypted' => false,
				'columnName' => 'username' 
			),
			array(
				'sql' => 'password',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'users',
					'name' => 'password' 
				),
				'encrypted' => false,
				'columnName' => 'password' 
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
					'table' => 'users',
					'name' => 'email' 
				),
				'encrypted' => false,
				'columnName' => 'email' 
			),
			array(
				'sql' => 'fullname',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'users',
					'name' => 'fullname' 
				),
				'encrypted' => false,
				'columnName' => 'fullname' 
			),
			array(
				'sql' => 'groupid',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'users',
					'name' => 'groupid' 
				),
				'encrypted' => false,
				'columnName' => 'groupid' 
			),
			array(
				'sql' => 'active',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'users',
					'name' => 'active' 
				),
				'encrypted' => false,
				'columnName' => 'active' 
			),
			array(
				'sql' => 'ext_security_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'users',
					'name' => 'ext_security_id' 
				),
				'encrypted' => false,
				'columnName' => 'ext_security_id' 
			),
			array(
				'sql' => 'apikey',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'users',
					'name' => 'apikey' 
				),
				'encrypted' => false,
				'columnName' => 'apikey' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'users',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'users',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'ID',
						'username',
						'password',
						'email',
						'fullname',
						'groupid',
						'active',
						'ext_security_id',
						'apikey' 
					),
					'name' => 'users' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'ID,
	username,
	password,
	email,
	fullname,
	groupid,
	active,
	ext_security_id,
	apikey',
		'fromListSql' => 'FROM
	users',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'users',
	'originalPagesByType' => array(
		'list' => array( 
			'list' 
		),
		'edit' => array( 
			'edit' 
		),
		'add' => array( 
			'add' 
		),
		'view' => array( 
			'view' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'list' => 'list',
		'edit' => 'edit',
		'add' => 'add',
		'view' => 'view',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'list' => 'list',
		'edit' => 'edit',
		'add' => 'add',
		'view' => 'view',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'ID',
			'username',
			'password',
			'email',
			'fullname',
			'groupid',
			'active',
			'ext_security_id',
			'apikey' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'ID',
			'username',
			'password',
			'email',
			'fullname',
			'groupid',
			'active',
			'ext_security_id',
			'apikey' 
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
	$runnerTableLabels['users'] = array(
	'tableCaption' => 'Users',
	'fieldLabels' => array(
		'ID' => 'ID',
		'username' => 'Username',
		'password' => 'Password',
		'email' => 'Email',
		'fullname' => 'Fullname',
		'groupid' => 'Groupid',
		'active' => 'Active',
		'ext_security_id' => 'Ext Security Id',
		'apikey' => 'Apikey' 
	),
	'fieldTooltips' => array(
		'ID' => '',
		'username' => '',
		'password' => '',
		'email' => '',
		'fullname' => '',
		'groupid' => '',
		'active' => '',
		'ext_security_id' => '',
		'apikey' => '' 
	),
	'fieldPlaceholders' => array(
		'ID' => '',
		'username' => '',
		'password' => '',
		'email' => '',
		'fullname' => '',
		'groupid' => '',
		'active' => '',
		'ext_security_id' => '',
		'apikey' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>
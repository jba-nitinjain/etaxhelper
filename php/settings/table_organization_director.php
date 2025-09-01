<?php
global $runnerTableSettings;
$runnerTableSettings['organization_director'] = array(
	'name' => 'organization_director',
	'shortName' => 'organization_director',
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
	'afterEditDetails' => 'organization_director',
	'afterAddDetail' => 'organization_director',
	'detailsBadgeColor' => '4682b4',
	'sql' => 'SELECT
	director_id,
	org_id,
	NAME,
	designation,
	email,
	phone,
	din_number,
	dob,
	city,
	pin,
	country,
	date_of_appointment
FROM
	organization_director',
	'keyFields' => array( 
		'director_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'director_id' => array(
			'name' => 'director_id',
			'goodName' => 'director_id',
			'strField' => 'director_id',
			'index' => 1,
			'type' => 20,
			'autoinc' => true,
			'sqlExpression' => 'director_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_director' 
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
			'tableName' => 'organization_director' 
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
			'tableName' => 'organization_director' 
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
			'tableName' => 'organization_director' 
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
			'tableName' => 'organization_director' 
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
			'tableName' => 'organization_director' 
		),
		'din_number' => array(
			'name' => 'din_number',
			'goodName' => 'din_number',
			'strField' => 'din_number',
			'index' => 7,
			'sqlExpression' => 'din_number',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_director' 
		),
		'dob' => array(
			'name' => 'dob',
			'goodName' => 'dob',
			'strField' => 'dob',
			'index' => 8,
			'type' => 7,
			'sqlExpression' => 'dob',
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
			'tableName' => 'organization_director' 
		),
		'city' => array(
			'name' => 'city',
			'goodName' => 'city',
			'strField' => 'city',
			'index' => 9,
			'sqlExpression' => 'city',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_director' 
		),
		'pin' => array(
			'name' => 'pin',
			'goodName' => 'pin',
			'strField' => 'pin',
			'index' => 10,
			'sqlExpression' => 'pin',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_director' 
		),
		'country' => array(
			'name' => 'country',
			'goodName' => 'country',
			'strField' => 'country',
			'index' => 11,
			'sqlExpression' => 'country',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_director' 
		),
		'date_of_appointment' => array(
			'name' => 'date_of_appointment',
			'goodName' => 'date_of_appointment',
			'strField' => 'date_of_appointment',
			'index' => 12,
			'type' => 7,
			'sqlExpression' => 'date_of_appointment',
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
			'tableName' => 'organization_director' 
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
	director_id,
	org_id,
	NAME,
	designation,
	email,
	phone,
	din_number,
	dob,
	city,
	pin,
	country,
	date_of_appointment
FROM
	organization_director',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'director_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_director',
					'name' => 'director_id' 
				),
				'encrypted' => false,
				'columnName' => 'director_id' 
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
					'table' => 'organization_director',
					'name' => 'org_id' 
				),
				'encrypted' => false,
				'columnName' => 'org_id' 
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
					'table' => 'organization_director',
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
					'table' => 'organization_director',
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
					'table' => 'organization_director',
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
					'table' => 'organization_director',
					'name' => 'phone' 
				),
				'encrypted' => false,
				'columnName' => 'phone' 
			),
			array(
				'sql' => 'din_number',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_director',
					'name' => 'din_number' 
				),
				'encrypted' => false,
				'columnName' => 'din_number' 
			),
			array(
				'sql' => 'dob',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_director',
					'name' => 'dob' 
				),
				'encrypted' => false,
				'columnName' => 'dob' 
			),
			array(
				'sql' => 'city',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_director',
					'name' => 'city' 
				),
				'encrypted' => false,
				'columnName' => 'city' 
			),
			array(
				'sql' => 'pin',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_director',
					'name' => 'pin' 
				),
				'encrypted' => false,
				'columnName' => 'pin' 
			),
			array(
				'sql' => 'country',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_director',
					'name' => 'country' 
				),
				'encrypted' => false,
				'columnName' => 'country' 
			),
			array(
				'sql' => 'date_of_appointment',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_director',
					'name' => 'date_of_appointment' 
				),
				'encrypted' => false,
				'columnName' => 'date_of_appointment' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'organization_director',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'organization_director',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'director_id',
						'org_id',
						'NAME',
						'designation',
						'email',
						'phone',
						'din_number',
						'dob',
						'city',
						'pin',
						'country',
						'date_of_appointment' 
					),
					'name' => 'organization_director' 
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
			),
			array(
				'fieldIndex' => 10,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 11,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'director_id,
	org_id,
	NAME,
	designation,
	email,
	phone,
	din_number,
	dob,
	city,
	pin,
	country,
	date_of_appointment',
		'fromListSql' => 'FROM
	organization_director',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'organization_director',
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
			'director_id',
			'org_id',
			'NAME',
			'designation',
			'email',
			'phone',
			'din_number',
			'dob',
			'city',
			'pin',
			'country',
			'date_of_appointment' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'director_id',
			'org_id',
			'NAME',
			'designation',
			'email',
			'phone',
			'din_number',
			'dob',
			'city',
			'pin',
			'country',
			'date_of_appointment' 
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
	$runnerTableLabels['organization_director'] = array(
	'tableCaption' => 'Organization Director',
	'fieldLabels' => array(
		'director_id' => 'Director Id',
		'org_id' => 'Org Id',
		'NAME' => 'NAME',
		'designation' => 'Designation',
		'email' => 'Email',
		'phone' => 'Phone',
		'din_number' => 'Din Number',
		'dob' => 'Dob',
		'city' => 'City',
		'pin' => 'Pin',
		'country' => 'Country',
		'date_of_appointment' => 'Date Of Appointment' 
	),
	'fieldTooltips' => array(
		'director_id' => '',
		'org_id' => '',
		'NAME' => '',
		'designation' => '',
		'email' => '',
		'phone' => '',
		'din_number' => '',
		'dob' => '',
		'city' => '',
		'pin' => '',
		'country' => '',
		'date_of_appointment' => '' 
	),
	'fieldPlaceholders' => array(
		'director_id' => '',
		'org_id' => '',
		'NAME' => '',
		'designation' => '',
		'email' => '',
		'phone' => '',
		'din_number' => '',
		'dob' => '',
		'city' => '',
		'pin' => '',
		'country' => '',
		'date_of_appointment' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>
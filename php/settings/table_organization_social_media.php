<?php
global $runnerTableSettings;
$runnerTableSettings['organization_social_media'] = array(
	'name' => 'organization_social_media',
	'shortName' => 'organization_social_media',
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
	'afterEditDetails' => 'organization_social_media',
	'afterAddDetail' => 'organization_social_media',
	'detailsBadgeColor' => '5f9ea0',
	'sql' => 'SELECT
	social_id,
	org_id,
	platform,
	handle_name,
	website,
	mobile_app
FROM
	organization_social_media',
	'keyFields' => array( 
		'social_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'social_id' => array(
			'name' => 'social_id',
			'goodName' => 'social_id',
			'strField' => 'social_id',
			'index' => 1,
			'type' => 20,
			'autoinc' => true,
			'sqlExpression' => 'social_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_social_media' 
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
			'tableName' => 'organization_social_media' 
		),
		'platform' => array(
			'name' => 'platform',
			'goodName' => 'platform',
			'strField' => 'platform',
			'index' => 3,
			'sqlExpression' => 'platform',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_social_media' 
		),
		'handle_name' => array(
			'name' => 'handle_name',
			'goodName' => 'handle_name',
			'strField' => 'handle_name',
			'index' => 4,
			'sqlExpression' => 'handle_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_social_media' 
		),
		'website' => array(
			'name' => 'website',
			'goodName' => 'website',
			'strField' => 'website',
			'index' => 5,
			'sqlExpression' => 'website',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_social_media' 
		),
		'mobile_app' => array(
			'name' => 'mobile_app',
			'goodName' => 'mobile_app',
			'strField' => 'mobile_app',
			'index' => 6,
			'sqlExpression' => 'mobile_app',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_social_media' 
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
	'detailsTables' => array( 
		'organization_login' 
	),
	'query' => array(
		'sql' => 'SELECT
	social_id,
	org_id,
	platform,
	handle_name,
	website,
	mobile_app
FROM
	organization_social_media',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'social_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_social_media',
					'name' => 'social_id' 
				),
				'encrypted' => false,
				'columnName' => 'social_id' 
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
					'table' => 'organization_social_media',
					'name' => 'org_id' 
				),
				'encrypted' => false,
				'columnName' => 'org_id' 
			),
			array(
				'sql' => 'platform',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_social_media',
					'name' => 'platform' 
				),
				'encrypted' => false,
				'columnName' => 'platform' 
			),
			array(
				'sql' => 'handle_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_social_media',
					'name' => 'handle_name' 
				),
				'encrypted' => false,
				'columnName' => 'handle_name' 
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
					'table' => 'organization_social_media',
					'name' => 'website' 
				),
				'encrypted' => false,
				'columnName' => 'website' 
			),
			array(
				'sql' => 'mobile_app',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_social_media',
					'name' => 'mobile_app' 
				),
				'encrypted' => false,
				'columnName' => 'mobile_app' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'organization_social_media',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'organization_social_media',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'social_id',
						'org_id',
						'platform',
						'handle_name',
						'website',
						'mobile_app' 
					),
					'name' => 'organization_social_media' 
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
		'fieldListSql' => 'social_id,
	org_id,
	platform,
	handle_name,
	website,
	mobile_app',
		'fromListSql' => 'FROM
	organization_social_media',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'organization_social_media',
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
			'social_id',
			'org_id',
			'platform',
			'handle_name',
			'website',
			'mobile_app' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'social_id',
			'org_id',
			'platform',
			'handle_name',
			'website',
			'mobile_app' 
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
	$runnerTableLabels['organization_social_media'] = array(
	'tableCaption' => 'Organization Social Media',
	'fieldLabels' => array(
		'social_id' => 'Social Id',
		'org_id' => 'Org Id',
		'platform' => 'Platform',
		'handle_name' => 'Handle Name',
		'website' => 'Website',
		'mobile_app' => 'Mobile App' 
	),
	'fieldTooltips' => array(
		'social_id' => '',
		'org_id' => '',
		'platform' => '',
		'handle_name' => '',
		'website' => '',
		'mobile_app' => '' 
	),
	'fieldPlaceholders' => array(
		'social_id' => '',
		'org_id' => '',
		'platform' => '',
		'handle_name' => '',
		'website' => '',
		'mobile_app' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>
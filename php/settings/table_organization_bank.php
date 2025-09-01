<?php
global $runnerTableSettings;
$runnerTableSettings['organization_bank'] = array(
	'name' => 'organization_bank',
	'shortName' => 'organization_bank',
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
	'afterEditDetails' => 'organization_bank',
	'afterAddDetail' => 'organization_bank',
	'detailsBadgeColor' => '5f9ea0',
	'sql' => 'SELECT
	bank_id,
	org_id,
	bank_name,
	branch_name,
	account_no,
	ifsc_code,
	swift_code,
	account_type,
	mode_of_operation
FROM
	organization_bank',
	'keyFields' => array( 
		'bank_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'bank_id' => array(
			'name' => 'bank_id',
			'goodName' => 'bank_id',
			'strField' => 'bank_id',
			'index' => 1,
			'type' => 20,
			'autoinc' => true,
			'sqlExpression' => 'bank_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_bank' 
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
			'tableName' => 'organization_bank' 
		),
		'bank_name' => array(
			'name' => 'bank_name',
			'goodName' => 'bank_name',
			'strField' => 'bank_name',
			'index' => 3,
			'sqlExpression' => 'bank_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_bank' 
		),
		'branch_name' => array(
			'name' => 'branch_name',
			'goodName' => 'branch_name',
			'strField' => 'branch_name',
			'index' => 4,
			'sqlExpression' => 'branch_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_bank' 
		),
		'account_no' => array(
			'name' => 'account_no',
			'goodName' => 'account_no',
			'strField' => 'account_no',
			'index' => 5,
			'sqlExpression' => 'account_no',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_bank' 
		),
		'ifsc_code' => array(
			'name' => 'ifsc_code',
			'goodName' => 'ifsc_code',
			'strField' => 'ifsc_code',
			'index' => 6,
			'sqlExpression' => 'ifsc_code',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_bank' 
		),
		'swift_code' => array(
			'name' => 'swift_code',
			'goodName' => 'swift_code',
			'strField' => 'swift_code',
			'index' => 7,
			'sqlExpression' => 'swift_code',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_bank' 
		),
		'account_type' => array(
			'name' => 'account_type',
			'goodName' => 'account_type',
			'strField' => 'account_type',
			'index' => 8,
			'sqlExpression' => 'account_type',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'organization_bank' 
		),
		'mode_of_operation' => array(
			'name' => 'mode_of_operation',
			'goodName' => 'mode_of_operation',
			'strField' => 'mode_of_operation',
			'index' => 9,
			'type' => 129,
			'sqlExpression' => 'mode_of_operation',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Singly',
						'Jointly',
						'Any two jointly',
						'Either or survivor',
						'Other' 
					) 
				) 
			),
			'tableName' => 'organization_bank' 
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
		'organization_bank_signatory' 
	),
	'query' => array(
		'sql' => 'SELECT
	bank_id,
	org_id,
	bank_name,
	branch_name,
	account_no,
	ifsc_code,
	swift_code,
	account_type,
	mode_of_operation
FROM
	organization_bank',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'bank_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_bank',
					'name' => 'bank_id' 
				),
				'encrypted' => false,
				'columnName' => 'bank_id' 
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
					'table' => 'organization_bank',
					'name' => 'org_id' 
				),
				'encrypted' => false,
				'columnName' => 'org_id' 
			),
			array(
				'sql' => 'bank_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_bank',
					'name' => 'bank_name' 
				),
				'encrypted' => false,
				'columnName' => 'bank_name' 
			),
			array(
				'sql' => 'branch_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_bank',
					'name' => 'branch_name' 
				),
				'encrypted' => false,
				'columnName' => 'branch_name' 
			),
			array(
				'sql' => 'account_no',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_bank',
					'name' => 'account_no' 
				),
				'encrypted' => false,
				'columnName' => 'account_no' 
			),
			array(
				'sql' => 'ifsc_code',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_bank',
					'name' => 'ifsc_code' 
				),
				'encrypted' => false,
				'columnName' => 'ifsc_code' 
			),
			array(
				'sql' => 'swift_code',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_bank',
					'name' => 'swift_code' 
				),
				'encrypted' => false,
				'columnName' => 'swift_code' 
			),
			array(
				'sql' => 'account_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_bank',
					'name' => 'account_type' 
				),
				'encrypted' => false,
				'columnName' => 'account_type' 
			),
			array(
				'sql' => 'mode_of_operation',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'organization_bank',
					'name' => 'mode_of_operation' 
				),
				'encrypted' => false,
				'columnName' => 'mode_of_operation' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'organization_bank',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'organization_bank',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
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
					'name' => 'organization_bank' 
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
		'fieldListSql' => 'bank_id,
	org_id,
	bank_name,
	branch_name,
	account_no,
	ifsc_code,
	swift_code,
	account_type,
	mode_of_operation',
		'fromListSql' => 'FROM
	organization_bank',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'organization_bank',
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
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'bank_id',
			'org_id',
			'bank_name',
			'branch_name',
			'account_no',
			'ifsc_code',
			'swift_code',
			'account_type',
			'mode_of_operation' 
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
	$runnerTableLabels['organization_bank'] = array(
	'tableCaption' => 'Organization Bank',
	'fieldLabels' => array(
		'bank_id' => 'Bank Id',
		'org_id' => 'Org Id',
		'bank_name' => 'Bank Name',
		'branch_name' => 'Branch Name',
		'account_no' => 'Account No',
		'ifsc_code' => 'Ifsc Code',
		'swift_code' => 'Swift Code',
		'account_type' => 'Account Type',
		'mode_of_operation' => 'Mode Of Operation' 
	),
	'fieldTooltips' => array(
		'bank_id' => '',
		'org_id' => '',
		'bank_name' => '',
		'branch_name' => '',
		'account_no' => '',
		'ifsc_code' => '',
		'swift_code' => '',
		'account_type' => '',
		'mode_of_operation' => '' 
	),
	'fieldPlaceholders' => array(
		'bank_id' => '',
		'org_id' => '',
		'bank_name' => '',
		'branch_name' => '',
		'account_no' => '',
		'ifsc_code' => '',
		'swift_code' => '',
		'account_type' => '',
		'mode_of_operation' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>
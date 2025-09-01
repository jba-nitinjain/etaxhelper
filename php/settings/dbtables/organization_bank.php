<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['organization_bank'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => '`fk_bank_org`',
			'columns' => array( 
				 
			) 
		) 
	),
	'fields' => array( 
		array(
			'name' => 'bank_id',
			'type' => 20,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'bigint',
			'nullable' => false,
			'autoinc' => true,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'org_id',
			'type' => 20,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'bigint',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'bank_name',
			'type' => 200,
			'size' => 255,
			'scale' => 0,
			'typeName' => 'varchar(255)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'branch_name',
			'type' => 200,
			'size' => 255,
			'scale' => 0,
			'typeName' => 'varchar(255)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'account_no',
			'type' => 200,
			'size' => 64,
			'scale' => 0,
			'typeName' => 'varchar(64)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'ifsc_code',
			'type' => 200,
			'size' => 11,
			'scale' => 0,
			'typeName' => 'varchar(11)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'swift_code',
			'type' => 200,
			'size' => 11,
			'scale' => 0,
			'typeName' => 'varchar(11)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'account_type',
			'type' => 200,
			'size' => 64,
			'scale' => 0,
			'typeName' => 'varchar(64)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'mode_of_operation',
			'type' => 129,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'enum(\'Singly\',\'Jointly\',\'Any two jointly\',\'Either or survivor\',\'Other\')',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'bank_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'organization_bank' 
);
?>
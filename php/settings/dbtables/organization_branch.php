<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['organization_branch'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => '`fk_branch_org`',
			'columns' => array( 
				 
			) 
		) 
	),
	'fields' => array( 
		array(
			'name' => 'branch_id',
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
			'name' => 'address_line',
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
			'name' => 'city',
			'type' => 200,
			'size' => 128,
			'scale' => 0,
			'typeName' => 'varchar(128)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'state',
			'type' => 200,
			'size' => 128,
			'scale' => 0,
			'typeName' => 'varchar(128)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'postal_code',
			'type' => 200,
			'size' => 12,
			'scale' => 0,
			'typeName' => 'varchar(12)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'country',
			'type' => 200,
			'size' => 128,
			'scale' => 0,
			'typeName' => 'varchar(128)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'phone',
			'type' => 200,
			'size' => 32,
			'scale' => 0,
			'typeName' => 'varchar(32)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'email',
			'type' => 200,
			'size' => 255,
			'scale' => 0,
			'typeName' => 'varchar(255)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'branch_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'organization_branch' 
);
?>
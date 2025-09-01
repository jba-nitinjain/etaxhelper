<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['organization'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => 'fk_org_group',
			'refTable' => 'organization_group',
			'refSchema' => '',
			'del_rule' => 2,
			'upd_rule' => 4,
			'columns' => array( 
				array(
					'column' => 'group_id',
					'ref_column' => 'group_id' 
				) 
			) 
		) 
	),
	'fields' => array( 
		array(
			'name' => 'org_id',
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
			'name' => 'org_type',
			'type' => 129,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'enum(\'Proprietorship\',\'Partnership\',\'Private Limited\',\'Public Limited\',\'LLP\',\'NGO\',\'Cooperative\',\'Government\',\'Individual\',\'Other\')',
			'enumValues' => array( 
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
			),
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'company_name',
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
			'name' => 'display_name',
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
			'name' => 'email',
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
			'name' => 'phone_work',
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
			'name' => 'group_id',
			'type' => 20,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'bigint',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'org_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'ORGANIZATION' 
);
?>
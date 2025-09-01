<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['organization_registration'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => 'fk_reg_org',
			'refTable' => 'ORGANIZATION',
			'refSchema' => '',
			'del_rule' => 1,
			'upd_rule' => 4,
			'columns' => array( 
				array(
					'column' => 'org_id',
					'ref_column' => 'org_id' 
				) 
			) 
		) 
	),
	'fields' => array( 
		array(
			'name' => 'reg_id',
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
			'name' => 'reg_type',
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
			'name' => 'reg_number',
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
			'name' => 'valid_from',
			'type' => 7,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'date',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'valid_to',
			'type' => 7,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'date',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'reg_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'organization_registration' 
);
?>
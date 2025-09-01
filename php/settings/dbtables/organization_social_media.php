<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['organization_social_media'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => 'fk_social_org',
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
			'name' => 'social_id',
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
			'name' => 'platform',
			'type' => 200,
			'size' => 128,
			'scale' => 0,
			'typeName' => 'varchar(128)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'handle_name',
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
			'name' => 'website',
			'type' => 200,
			'size' => 512,
			'scale' => 0,
			'typeName' => 'varchar(512)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'mobile_app',
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
		'social_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'organization_social_media' 
);
?>
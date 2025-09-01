<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['uggroups'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'GroupID',
			'type' => 3,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'int',
			'nullable' => false,
			'autoinc' => true,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'Label',
			'type' => 200,
			'size' => 300,
			'scale' => 0,
			'typeName' => 'varchar(300)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'Provider',
			'type' => 200,
			'size' => 10,
			'scale' => 0,
			'typeName' => 'varchar(10)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		),
		array(
			'name' => 'Comment',
			'type' => 201,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'longtext',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'GroupID' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'uggroups' 
);
?>
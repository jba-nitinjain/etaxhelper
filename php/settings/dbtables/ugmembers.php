<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['ugmembers'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'UserName',
			'type' => 200,
			'size' => 100,
			'scale' => 0,
			'typeName' => 'varchar(100)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'GroupID',
			'type' => 3,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'int',
			'nullable' => false,
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
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'UserName',
		'GroupID',
		'Provider' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'ugmembers' 
);
?>
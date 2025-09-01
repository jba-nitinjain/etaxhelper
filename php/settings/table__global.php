<?php
global $runnerTableSettings;
$runnerTableSettings[ GLOBAL_PAGES ] = array(
	'name' => '<global>',
	'type' => 5,
	'shortName' => '_global',
	'advancedSecurityType' => 0,
	'pagesByType' => array(
		'menu' => array( 
			'menu' 
		),
		'login' => array( 
			'login' 
		) 
	),
	'pageTypes' => array(
		'menu' => 'menu',
		'login' => 'login' 
	),
	'defaultPages' => array(
		'menu' => 'menu',
		'login' => 'login' 
	),
	'originalPagesByType' => array(
		'menu' => array( 
			'menu' 
		),
		'login' => array( 
			'login' 
		) 
	),
	'originalPageTypes' => array(
		'menu' => 'menu',
		'login' => 'login' 
	),
	'originalDefaultPages' => array(
		'menu' => 'menu',
		'login' => 'login' 
	),
	'hasJsEvents' => false 
);

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'English' ) {
	$runnerTableLabels[ GLOBAL_PAGES ] = array(
	'pageTitles' => array(
		'menu' => '',
		'login' => '' 
	) 
);
}
?>
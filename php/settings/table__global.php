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
		) 
	),
	'pageTypes' => array(
		'menu' => 'menu' 
	),
	'defaultPages' => array(
		'menu' => 'menu' 
	),
	'originalPagesByType' => array(
		'menu' => array( 
			'menu' 
		) 
	),
	'originalPageTypes' => array(
		'menu' => 'menu' 
	),
	'originalDefaultPages' => array(
		'menu' => 'menu' 
	),
	'hasJsEvents' => false 
);

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'English' ) {
	$runnerTableLabels[ GLOBAL_PAGES ] = array(
	'pageTitles' => array(
		'menu' => '' 
	) 
);
}
?>
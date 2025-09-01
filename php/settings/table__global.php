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
		),
		'userinfo' => array( 
			'userinfo' 
		),
		'admin_rights_list' => array( 
			'admin_rights_list' 
		),
		'admin_members_list' => array( 
			'admin_members_list' 
		) 
	),
	'pageTypes' => array(
		'menu' => 'menu',
		'login' => 'login',
		'userinfo' => 'userinfo',
		'admin_rights_list' => 'admin_rights_list',
		'admin_members_list' => 'admin_members_list' 
	),
	'defaultPages' => array(
		'menu' => 'menu',
		'login' => 'login',
		'userinfo' => 'userinfo',
		'admin_rights_list' => 'admin_rights_list',
		'admin_members_list' => 'admin_members_list' 
	),
	'originalPagesByType' => array(
		'menu' => array( 
			'menu' 
		),
		'login' => array( 
			'login' 
		),
		'userinfo' => array( 
			'userinfo' 
		),
		'admin_rights_list' => array( 
			'admin_rights_list' 
		),
		'admin_members_list' => array( 
			'admin_members_list' 
		) 
	),
	'originalPageTypes' => array(
		'menu' => 'menu',
		'login' => 'login',
		'userinfo' => 'userinfo',
		'admin_rights_list' => 'admin_rights_list',
		'admin_members_list' => 'admin_members_list' 
	),
	'originalDefaultPages' => array(
		'menu' => 'menu',
		'login' => 'login',
		'userinfo' => 'userinfo',
		'admin_rights_list' => 'admin_rights_list',
		'admin_members_list' => 'admin_members_list' 
	),
	'hasJsEvents' => false 
);

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'English' ) {
	$runnerTableLabels[ GLOBAL_PAGES ] = array(
	'pageTitles' => array(
		 
	) 
);
}
?>
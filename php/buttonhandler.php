<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");

//	CSRF protection
if( !isPostRequest() )
	return;

$params = (array)runner_json_decode(postvalue('params'));

if( $params["_base64fields"] ) {
	foreach( $params["_base64fields"] as $f ) {
		$params[$f] = base64_str2bin( $params[$f] );
	}
}

$buttId = $params['buttId'];
$eventId = postvalue('event');
$table = $params['table'];
if( !GetTableURL( $table ) ) {
	exit;
}
$page = $params['page'];
if( !Security::userCanSeePage($table, $page ) ) {
	exit;
}

$field = $params['field'];

$pSet = new ProjectSettings( $table, "", $page );
$cipherer = new RunnerCipherer( $table );

//	check button or ajax snippet permissions
if( $buttId ) {
	$pageButtons = $pSet->customButtons();
	if( array_search( $buttId , $pageButtons ) === false ) {
		exit;
	}
}

if( $eventId ) {
	if( !verifyAjaxSnippet( $eventId, $field, $pSet ) ) {
		exit;
	}
}


$params["masterTable"] = postValue("masterTable");;
$params["masterKeys"] = array();
$params["masterKeys"] = RunnerPage::readMasterKeysFromRequest();

if( $buttId ) {
	$method = 'buttonHandler_'. $buttId;
	$globalEvents->$method( $params );
	exit();
}

if( $eventId && !$field ) {
	$method = 'ajaxHandler_'. $eventId;
	$globalEvents->$method( $params );
	exit();
}

if( $eventId && $field ) {
	$method = 'fieldEvent_'. $eventId;
	$globalEvents->$method( $params );
	exit();
}



?>
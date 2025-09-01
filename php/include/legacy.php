<?php
//	legacy data
$cCharset = @$runnerProjectSettings['charset'];
$cCodePage = @$runnerProjectSettings['codepage'];
$useUTF8 = $cCharset == "utf-8";

$loginKeyFields = @ProjectSettings::getProjectValue( 'userTableKeys' );
$cLoginTable = @Security::loginTable();
$cUserNameField = @Security::usernameField();
$cUserGroupField = @Security::groupIdField();

$projectBuildKey = ProjectSettings::getProjectValue('projectBuild');
$wizardBuildKey = ProjectSettings::getProjectValue('wizardBuild');

?>
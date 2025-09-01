<?php
$runnerProjectSettings = array(
	'createRestAPI' => true,
	'restAPIReturnEncodedBinary' => true,
	'restAPIAcceptEncodedBinary' => true,
	'restAPIAuthType' => 'basic',
	'menuIds' => array( 
		'main' 
	),
	'tablesAdvSecurity' => array(
		'ORGANIZATION' => array(
			'table' => 238 
		),
		'organization_bank' => array(
			'table' => 271 
		),
		'organization_bank_signatory' => array(
			'table' => 313 
		),
		'organization_branch' => array(
			'table' => 346 
		),
		'organization_contact' => array(
			'table' => 391 
		),
		'organization_director' => array(
			'table' => 436 
		),
		'organization_login' => array(
			'table' => 487 
		),
		'organization_registration' => array(
			'table' => 526 
		),
		'organization_social_media' => array(
			'table' => 559 
		) 
	),
	'phpSpreadsheet' => false,
	'ext' => 'php',
	'security' => array(
		'projectName' => '',
		'loginDataSource' => '',
		'loginForm' => 3,
		'dynamicPermissions' => false,
		'dpTablePrefix' => '',
		'dpTableConnId' => '',
		'providers' => array( 
			 
		),
		'enabled' => false,
		'advancedSecurityAvailable' => false,
		'userGroupsAvailable' => false,
		'hardcodedLogin' => false,
		'defaultProviderCode' => '',
		'adOnlyLogin' => false,
		'sessionControl' => array(
			'lifeTime' => 15,
			'sessionName' => 'LxAL6gweZ107t9FkpHjk',
			'JWTSecret' => 'IRwLpQqerw3mBkZlXLq1' 
		),
		'registration' => array(
			'remindMethod' => 0,
			'hashAlgorithm' => 0,
			'passwordValidation' => array(
				'strong' => false,
				'minimumLength' => 8,
				'uniqueCharacters' => 4,
				'digitsAndSymbols' => 2,
				'upperAndLowerCase' => false 
			),
			'registerPage' => false 
		),
		'captchaSettings' => array(
			'captchaType' => 0,
			'siteKey' => '',
			'secretKey' => '',
			'passesCount' => 5 
		),
		'emailSettings' => array(
			'fromEmail' => '',
			'usePHPDefinedSMTP' => false,
			'useBuiltInMailer' => false,
			'SMTPServer' => 'localhost',
			'SMTPPort' => 25,
			'SMTPUser' => '',
			'SMTPPassword' => '',
			'securityProtocol' => 0 
		),
		'advancedSecurity' => array(
			'allowGuestLogin' => false 
		),
		'auditAndLocking' => array(
			'loggingMode' => 0,
			'loggingTable' => array(
				'connId' => '',
				'table' => '' 
			),
			'loggingFile' => 'audit.log',
			'logSecurityActions' => false,
			'lockAfterUnsuccessfulLogin' => false,
			'enableLocking' => false,
			'lockingTable' => array(
				'connId' => '',
				'table' => '' 
			),
			'tables' => array(
				 
			) 
		),
		'twoFactorSettings' => array(
			'available' => false,
			'required' => false,
			'enable' => true,
			'remember' => true,
			'types' => array(
				 
			),
			'twoFactorField' => '',
			'emailField' => '',
			'phoneField' => '',
			'codeField' => '',
			'projectName' => '' 
		),
		'staticPermissions' => array(
			'groups' => array(
				 
			) 
		),
		'adAdminGroups' => array( 
			 
		),
		'showUserSource' => false,
		'dbProviderCodes' => array( 
			 
		) 
	),
	'notifications' => array(
		'enabled' => false,
		'table' => array(
			'connId' => '',
			'table' => '' 
		) 
	),
	'allTables' => array(
		'ORGANIZATION' => array(
			'gid' => 238,
			'name' => 'ORGANIZATION',
			'shortName' => 'ORGANIZATION',
			'type' => 0,
			'caption' => array(
				'English' => 'ORGANIZATION' 
			),
			'connId' => 'conn',
			'color' => '00c2c5',
			'originalTable' => 'ORGANIZATION' 
		),
		'organization_bank' => array(
			'gid' => 271,
			'name' => 'organization_bank',
			'shortName' => 'organization_bank',
			'type' => 0,
			'caption' => array(
				'English' => 'Organization Bank' 
			),
			'connId' => 'conn',
			'color' => '7b68ee',
			'originalTable' => 'organization_bank' 
		),
		'organization_bank_signatory' => array(
			'gid' => 313,
			'name' => 'organization_bank_signatory',
			'shortName' => 'organization_bank_signatory',
			'type' => 0,
			'caption' => array(
				'English' => 'Organization Bank Signatory' 
			),
			'connId' => 'conn',
			'color' => 'e67349',
			'originalTable' => 'organization_bank_signatory' 
		),
		'organization_branch' => array(
			'gid' => 346,
			'name' => 'organization_branch',
			'shortName' => 'organization_branch',
			'type' => 0,
			'caption' => array(
				'English' => 'Organization Branch' 
			),
			'connId' => 'conn',
			'color' => 'db7093',
			'originalTable' => 'organization_branch' 
		),
		'organization_contact' => array(
			'gid' => 391,
			'name' => 'organization_contact',
			'shortName' => 'organization_contact',
			'type' => 0,
			'caption' => array(
				'English' => 'Organization Contact' 
			),
			'connId' => 'conn',
			'color' => '9acd32',
			'originalTable' => 'organization_contact' 
		),
		'organization_director' => array(
			'gid' => 436,
			'name' => 'organization_director',
			'shortName' => 'organization_director',
			'type' => 0,
			'caption' => array(
				'English' => 'Organization Director' 
			),
			'connId' => 'conn',
			'color' => 'e8926f',
			'originalTable' => 'organization_director' 
		),
		'organization_login' => array(
			'gid' => 487,
			'name' => 'organization_login',
			'shortName' => 'organization_login',
			'type' => 0,
			'caption' => array(
				'English' => 'Organization Login' 
			),
			'connId' => 'conn',
			'color' => '9acd32',
			'originalTable' => 'organization_login' 
		),
		'organization_registration' => array(
			'gid' => 526,
			'name' => 'organization_registration',
			'shortName' => 'organization_registration',
			'type' => 0,
			'caption' => array(
				'English' => 'Organization Registration' 
			),
			'connId' => 'conn',
			'color' => 'd2691e',
			'originalTable' => 'organization_registration' 
		),
		'organization_social_media' => array(
			'gid' => 559,
			'name' => 'organization_social_media',
			'shortName' => 'organization_social_media',
			'type' => 0,
			'caption' => array(
				'English' => 'Organization Social Media' 
			),
			'connId' => 'conn',
			'color' => '6493ea',
			'originalTable' => 'organization_social_media' 
		) 
	),
	'tablesByShort' => array(
		'ORGANIZATION' => 'ORGANIZATION',
		'organization_bank' => 'organization_bank',
		'organization_bank_signatory' => 'organization_bank_signatory',
		'organization_branch' => 'organization_branch',
		'organization_contact' => 'organization_contact',
		'organization_director' => 'organization_director',
		'organization_login' => 'organization_login',
		'organization_registration' => 'organization_registration',
		'organization_social_media' => 'organization_social_media' 
	),
	'tablesByGood' => array(
		'ORGANIZATION' => 'ORGANIZATION',
		'organization_bank' => 'organization_bank',
		'organization_bank_signatory' => 'organization_bank_signatory',
		'organization_branch' => 'organization_branch',
		'organization_contact' => 'organization_contact',
		'organization_director' => 'organization_director',
		'organization_login' => 'organization_login',
		'organization_registration' => 'organization_registration',
		'organization_social_media' => 'organization_social_media' 
	),
	'events' => array( 
		 
	),
	'languages' => array( 
		array(
			'name' => 'English',
			'nativeName' => 'English',
			'rtl' => false,
			'filename' => 'English.lng' 
		) 
	),
	'languageNames' => array( 
		'English' 
	),
	'defaultLanguage' => 'English',
	'detectDefaultLanguage' => true,
	'charset' => 'utf-8',
	'codepage' => 65001,
	'defaultConnID' => 'conn',
	'wrConnectionID' => '',
	'wizardBuild' => '42453',
	'projectBuild' => '2jL83T2gsKCW',
	'projectTheme' => 'default',
	'projectSize' => 'normal',
	'customErrorMsg' => array(
		'text' => 'Error occured.',
		'type' => 0 
	),
	'cloudSettings' => array(
		'cloudAmazonRegion' => '',
		'cloudAmazonBucket' => '',
		'cloudAmazonAccessKey' => '',
		'cloudAmazonSecretKey' => '',
		'cloudWasabiRegion' => '',
		'cloudWasabiBucket' => '',
		'cloudWasabiAccessKey' => '',
		'cloudWasabiSecretKey' => '',
		'cloudGDriveClientId' => '',
		'cloudGDriveClientSecret' => '',
		'cloudOneDriveClientId' => '',
		'cloudOneDriveClientSecret' => '',
		'cloudOneDriveDrive' => '',
		'cloudOneDriveAccountType' => 0,
		'cloudOneDriveDirectoryId' => '',
		'cloudDropboxClientId' => '',
		'cloudDropboxClientSecret' => '' 
	),
	'mapSettings' => array(
		'embed' => true,
		'provider' => 0,
		'apikey' => '' 
	),
	'viewPluginsWithJS' => array( 
		 
	),
	'rtlLanguages' => array(
		'English' => false 
	) 
);

?>
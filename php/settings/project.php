<?php
$runnerProjectSettings = array(
	'createRestAPI' => true,
	'restAPIReturnEncodedBinary' => true,
	'restAPIAcceptEncodedBinary' => true,
	'restAPIAuthType' => 'api',
	'restAPIKeyField' => 'apikey',
	'section508Compat' => true,
	'menuIds' => array( 
		'main',
		'adminarea' 
	),
	'tablesAdvSecurity' => array(
		'ORGANIZATION' => array(
			'table' => 3171 
		),
		'organization_bank' => array(
			'table' => 3204 
		),
		'organization_branch' => array(
			'table' => 3247 
		),
		'organization_bank_signatory' => array(
			'table' => 3293 
		),
		'organization_contact' => array(
			'table' => 3327 
		),
		'organization_director' => array(
			'table' => 3373 
		),
		'organization_login' => array(
			'table' => 3425 
		),
		'organization_registration' => array(
			'table' => 3465 
		),
		'organization_social_media' => array(
			'table' => 3499 
		),
		'users' => array(
			'table' => 3550 
		),
		'admin_users' => array(
			'table' => 3579 
		) 
	),
	'userTableKeys' => array( 
		'ID' 
	),
	'phpSpreadsheet' => false,
	'ext' => 'php',
	'security' => array(
		'projectName' => '',
		'loginDataSource' => 'users',
		'loginForm' => 0,
		'dynamicPermissions' => true,
		'dpTablePrefix' => '',
		'dpTableConnId' => 'conn',
		'providers' => array( 
			array(
				'type' => '%db',
				'name' => 'db',
				'active' => true,
				'label' => array(
					'text' => 'Database',
					'type' => 0 
				),
				'code' => '01',
				'table' => array(
					'connId' => 'conn',
					'table' => 'users' 
				),
				'usernameField' => 'username',
				'passwordField' => 'password',
				'emailField' => 'email',
				'extUserIdField' => 'ext_security_id',
				'fullnameField' => 'fullname',
				'userpicField' => '',
				'userGroupField' => 'username' 
			) 
		),
		'enabled' => true,
		'advancedSecurityAvailable' => true,
		'userGroupsAvailable' => true,
		'hardcodedLogin' => false,
		'defaultProviderCode' => '01',
		'adOnlyLogin' => false,
		'sessionControl' => array(
			'lifeTime' => 15,
			'sessionName' => 'YQnk6p4eO4byfDHEOqes',
			'JWTSecret' => 'Qy0YZsU4To2QkQrtRKuS' 
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
				'<Default>' => array(
					'permissions' => array(
						'ORGANIZATION' => array(
							'mask' => 'ADESPI',
							'table' => 'ORGANIZATION',
							'restrictedPages' => array(
								 
							) 
						),
						'organization_bank' => array(
							'mask' => 'ADESPI',
							'table' => 'organization_bank',
							'restrictedPages' => array(
								 
							) 
						),
						'organization_branch' => array(
							'mask' => 'ADESPI',
							'table' => 'organization_branch',
							'restrictedPages' => array(
								 
							) 
						),
						'organization_bank_signatory' => array(
							'mask' => 'ADESPI',
							'table' => 'organization_bank_signatory',
							'restrictedPages' => array(
								 
							) 
						),
						'organization_contact' => array(
							'mask' => 'ADESPI',
							'table' => 'organization_contact',
							'restrictedPages' => array(
								 
							) 
						),
						'organization_director' => array(
							'mask' => 'ADESPI',
							'table' => 'organization_director',
							'restrictedPages' => array(
								 
							) 
						),
						'organization_login' => array(
							'mask' => 'ADESPI',
							'table' => 'organization_login',
							'restrictedPages' => array(
								 
							) 
						),
						'organization_registration' => array(
							'mask' => 'ADESPI',
							'table' => 'organization_registration',
							'restrictedPages' => array(
								 
							) 
						),
						'organization_social_media' => array(
							'mask' => 'ADESPI',
							'table' => 'organization_social_media',
							'restrictedPages' => array(
								 
							) 
						),
						'<global>' => array(
							'mask' => 'ADESPI',
							'table' => '<global>',
							'restrictedPages' => array(
								 
							) 
						) 
					),
					'admin' => false,
					'username' => '<Default>' 
				) 
			) 
		),
		'dbProvider' => array(
			'type' => '%db',
			'name' => 'db',
			'active' => true,
			'label' => array(
				'text' => 'Database',
				'type' => 0 
			),
			'code' => '01',
			'table' => array(
				'connId' => 'conn',
				'table' => 'users' 
			),
			'usernameField' => 'username',
			'passwordField' => 'password',
			'emailField' => 'email',
			'extUserIdField' => 'ext_security_id',
			'fullnameField' => 'fullname',
			'userpicField' => '',
			'userGroupField' => 'username' 
		),
		'adAdminGroups' => array( 
			 
		),
		'showUserSource' => false,
		'dbProviderCodes' => array( 
			'01' 
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
			'gid' => 3171,
			'name' => 'ORGANIZATION',
			'shortName' => 'ORGANIZATION',
			'type' => 0,
			'caption' => array(
				'English' => 'ORGANIZATION' 
			),
			'connId' => 'conn',
			'color' => '8fbc8b',
			'originalTable' => 'ORGANIZATION' 
		),
		'organization_bank' => array(
			'gid' => 3204,
			'name' => 'organization_bank',
			'shortName' => 'organization_bank',
			'type' => 0,
			'caption' => array(
				'English' => 'Organization Bank' 
			),
			'connId' => 'conn',
			'color' => '5f9ea0',
			'originalTable' => 'organization_bank' 
		),
		'organization_branch' => array(
			'gid' => 3247,
			'name' => 'organization_branch',
			'shortName' => 'organization_branch',
			'type' => 0,
			'caption' => array(
				'English' => 'Organization Branch' 
			),
			'connId' => 'conn',
			'color' => '4682b4',
			'originalTable' => 'organization_branch' 
		),
		'organization_bank_signatory' => array(
			'gid' => 3293,
			'name' => 'organization_bank_signatory',
			'shortName' => 'organization_bank_signatory',
			'type' => 0,
			'caption' => array(
				'English' => 'Organization Bank Signatory' 
			),
			'connId' => 'conn',
			'color' => '00c2c5',
			'originalTable' => 'organization_bank_signatory' 
		),
		'organization_contact' => array(
			'gid' => 3327,
			'name' => 'organization_contact',
			'shortName' => 'organization_contact',
			'type' => 0,
			'caption' => array(
				'English' => 'Organization Contact' 
			),
			'connId' => 'conn',
			'color' => 'bc8f8f',
			'originalTable' => 'organization_contact' 
		),
		'organization_director' => array(
			'gid' => 3373,
			'name' => 'organization_director',
			'shortName' => 'organization_director',
			'type' => 0,
			'caption' => array(
				'English' => 'Organization Director' 
			),
			'connId' => 'conn',
			'color' => '4682b4',
			'originalTable' => 'organization_director' 
		),
		'organization_login' => array(
			'gid' => 3425,
			'name' => 'organization_login',
			'shortName' => 'organization_login',
			'type' => 0,
			'caption' => array(
				'English' => 'Organization Login' 
			),
			'connId' => 'conn',
			'color' => 'edca00',
			'originalTable' => 'organization_login' 
		),
		'organization_registration' => array(
			'gid' => 3465,
			'name' => 'organization_registration',
			'shortName' => 'organization_registration',
			'type' => 0,
			'caption' => array(
				'English' => 'Organization Registration' 
			),
			'connId' => 'conn',
			'color' => '9acd32',
			'originalTable' => 'organization_registration' 
		),
		'organization_social_media' => array(
			'gid' => 3499,
			'name' => 'organization_social_media',
			'shortName' => 'organization_social_media',
			'type' => 0,
			'caption' => array(
				'English' => 'Organization Social Media' 
			),
			'connId' => 'conn',
			'color' => '5f9ea0',
			'originalTable' => 'organization_social_media' 
		),
		'users' => array(
			'gid' => 3550,
			'name' => 'users',
			'shortName' => 'users',
			'type' => 0,
			'caption' => array(
				'English' => 'Users' 
			),
			'connId' => 'conn',
			'color' => 'e07878',
			'originalTable' => 'users' 
		),
		'admin_users' => array(
			'gid' => 3579,
			'name' => 'admin_users',
			'shortName' => 'admin_users',
			'type' => 1,
			'caption' => array(
				'English' => 'Admin Users' 
			),
			'connId' => 'conn',
			'color' => 'e8926f',
			'originalTable' => 'users' 
		) 
	),
	'tablesByShort' => array(
		'ORGANIZATION' => 'ORGANIZATION',
		'organization_bank' => 'organization_bank',
		'organization_branch' => 'organization_branch',
		'organization_bank_signatory' => 'organization_bank_signatory',
		'organization_contact' => 'organization_contact',
		'organization_director' => 'organization_director',
		'organization_login' => 'organization_login',
		'organization_registration' => 'organization_registration',
		'organization_social_media' => 'organization_social_media',
		'users' => 'users',
		'admin_users' => 'admin_users' 
	),
	'tablesByGood' => array(
		'ORGANIZATION' => 'ORGANIZATION',
		'organization_bank' => 'organization_bank',
		'organization_branch' => 'organization_branch',
		'organization_bank_signatory' => 'organization_bank_signatory',
		'organization_contact' => 'organization_contact',
		'organization_director' => 'organization_director',
		'organization_login' => 'organization_login',
		'organization_registration' => 'organization_registration',
		'organization_social_media' => 'organization_social_media',
		'users' => 'users',
		'admin_users' => 'admin_users' 
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
	'wizardBuild' => '43729',
	'projectBuild' => 'qZkjNByO1Uw1',
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
	),
	'smsSettings' => array(
		'smsProvider' => 4,
		'iBusername' => '',
		'iBpassword' => '',
		'iBsender' => '',
		'essUsername' => '',
		'essPassword' => '',
		'essSender' => '',
		'gwApiToken' => '',
		'gwSender' => '',
		'mbAuth' => '',
		'mbSender' => '',
		'twilioSID' => '',
		'twilioAuth' => '',
		'twilioNumber' => '',
		'phoneField' => '',
		'counryCode' => '+1',
		'wauUsername' => '',
		'wauPassword' => '',
		'wauSender' => '' 
	) 
);

?>
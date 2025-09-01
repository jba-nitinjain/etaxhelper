<?php
			$optionsArray = array(
	'welcome' => array(
		'welcomePageSkip' => false,
		'welcomeItems' => array(
			'logo' => array(
				'menutItem' => false 
			),
			'menu' => array(
				'menutItem' => false 
			),
			'loginform_login' => array(
				'menutItem' => false 
			),
			'username_button' => array(
				'menutItem' => false 
			),
			'welcome_item' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'ORGANIZATION',
				'page' => 'list' 
			),
			'welcome_item1' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'organization_bank',
				'page' => 'list' 
			),
			'welcome_item2' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'organization_branch',
				'page' => 'list' 
			),
			'welcome_item3' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'organization_bank_signatory',
				'page' => 'list' 
			),
			'welcome_item4' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'organization_contact',
				'page' => 'list' 
			),
			'welcome_item5' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'organization_director',
				'page' => 'list' 
			),
			'welcome_item6' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'organization_login',
				'page' => 'list' 
			),
			'welcome_item7' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'organization_registration',
				'page' => 'list' 
			),
			'welcome_item8' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'organization_social_media',
				'page' => 'list' 
			),
			'welcome_item9' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'organization_group',
				'page' => 'list' 
			) 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			 
		) 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					 
				),
				'supertop' => array( 
					'logo',
					'menu',
					'loginform_login',
					'username_button' 
				),
				'grid' => array( 
					'welcome_item',
					'welcome_item1',
					'welcome_item2',
					'welcome_item3',
					'welcome_item4',
					'welcome_item5',
					'welcome_item6',
					'welcome_item7',
					'welcome_item8',
					'welcome_item9' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'logo' => 'supertop',
				'menu' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'welcome_item' => 'grid',
				'welcome_item1' => 'grid',
				'welcome_item2' => 'grid',
				'welcome_item3' => 'grid',
				'welcome_item4' => 'grid',
				'welcome_item5' => 'grid',
				'welcome_item6' => 'grid',
				'welcome_item7' => 'grid',
				'welcome_item8' => 'grid',
				'welcome_item9' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				'menu' => 3,
				'username_button' => 3,
				'loginform_login' => 3 
			) 
		),
		'itemsByType' => array(
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'welcome_item' => array( 
				'welcome_item',
				'welcome_item1',
				'welcome_item2',
				'welcome_item3',
				'welcome_item4',
				'welcome_item5',
				'welcome_item6',
				'welcome_item7',
				'welcome_item8',
				'welcome_item9' 
			),
			'username_button' => array( 
				'username_button' 
			),
			'loginform_login' => array( 
				'loginform_login' 
			),
			'logout_link' => array( 
				'logout_link' 
			),
			'userinfo_link' => array( 
				'userinfo_link' 
			),
			'adminarea_link' => array( 
				'adminarea_link' 
			) 
		),
		'cellMaps' => array(
			 
		) 
	),
	'loginForm' => array(
		'loginForm' => 0 
	),
	'page' => array(
		'verticalBar' => false,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				 
			) 
		),
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			array(
				'id' => 'main',
				'horizontal' => true 
			) 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'menu',
	'type' => 'menu',
	'layoutId' => 'topbar',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'empty-above-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'supertop' => array(
			'modelId' => 'menu-topbar-menu',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						),
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'logo',
						'menu' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'loginform_login',
						'username_button' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'welcome',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'welcome_item',
						'welcome_item1',
						'welcome_item2',
						'welcome_item3',
						'welcome_item4',
						'welcome_item5',
						'welcome_item6',
						'welcome_item7',
						'welcome_item8',
						'welcome_item9' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'logo' => array(
			'type' => 'logo' 
		),
		'menu' => array(
			'type' => 'menu' 
		),
		'welcome_item' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'ORGANIZATION',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'ORGANIZATION',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'hand-right' 
			),
			'linkComments' => array(
				'text' => 'ORGANIZATION description',
				'type' => 0 
			),
			'background' => '#8fbc8b',
			'linkType' => 0 
		),
		'welcome_item1' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'organization_bank',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'organization_bank',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'camera' 
			),
			'linkComments' => array(
				'text' => 'Organization Bank description',
				'type' => 0 
			),
			'background' => '#5f9ea0',
			'linkType' => 0 
		),
		'welcome_item2' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'organization_branch',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'organization_branch',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'barcode' 
			),
			'linkComments' => array(
				'text' => 'Organization Branch description',
				'type' => 0 
			),
			'background' => '#4682b4',
			'linkType' => 0 
		),
		'welcome_item3' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'organization_bank_signatory',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'organization_bank_signatory',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'camera' 
			),
			'linkComments' => array(
				'text' => 'Organization Bank Signatory description',
				'type' => 0 
			),
			'background' => '#00c2c5',
			'linkType' => 0 
		),
		'welcome_item4' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'organization_contact',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'organization_contact',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'heart-empty' 
			),
			'linkComments' => array(
				'text' => 'Organization Contact description',
				'type' => 0 
			),
			'background' => '#bc8f8f',
			'linkType' => 0 
		),
		'welcome_item5' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'organization_director',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'organization_director',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'flash' 
			),
			'background' => '#4682b4',
			'linkType' => 0 
		),
		'welcome_item6' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'organization_login',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'organization_login',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'camera' 
			),
			'background' => '#edca00',
			'linkType' => 0 
		),
		'welcome_item7' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'organization_registration',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'organization_registration',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'shopping-cart' 
			),
			'background' => '#9acd32',
			'linkType' => 0 
		),
		'welcome_item8' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'organization_social_media',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'organization_social_media',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'earphone' 
			),
			'background' => '#5f9ea0',
			'linkType' => 0 
		),
		'username_button' => array(
			'type' => 'username_button',
			'items' => array( 
				'userinfo_link',
				'logout_link',
				'adminarea_link' 
			) 
		),
		'loginform_login' => array(
			'type' => 'loginform_login',
			'popup' => false 
		),
		'logout_link' => array(
			'type' => 'logout_link' 
		),
		'userinfo_link' => array(
			'type' => 'userinfo_link' 
		),
		'adminarea_link' => array(
			'type' => 'adminarea_link' 
		),
		'welcome_item9' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'organization_group',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'organization_group',
				'type' => 6 
			),
			'background' => '#d2691e',
			'linkType' => 0 
		) 
	),
	'dbProps' => array(
		 
	),
	'version' => 13,
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'welcomePageStay' => true,
	'listTotals' => 1,
	'title' => array(
		 
	) 
);
		?>
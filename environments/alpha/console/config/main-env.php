<?php

return [
	'bootstrap' => [ 'gii' ],
	'modules' => [
		'gii' => 'yii\gii\Module'
	],
	'components' => [
		'urlManager' => [
			'class' => 'yii\web\UrlManager',
			'baseUrl' => 'https://alpha.cmsgears.com/projectdemo/frontend/web'
		],
		// CMG Modules - Core
		'migration' => [
			'class' => 'cmsgears\core\common\components\Migration',
			'cmgPrefix' => 'cmg_',
			'sitePrefix' => 'site_',
			'siteName' => 'CMSGears',
			'siteTitle' => 'Project Demo',
			'siteMaster' => 'demomaster',
			'primaryDomain' => 'cmsgears.com',
			'defaultSite' => 'https://alpha.cmsgears.com/projectdemo/frontend/web',
			'defaultAdmin' => 'https://alpha.cmsgears.com/projectdemo/backend/web',
			'uploadsUrl' => 'https://alpha.cmsgears.com/projectdemo/uploads',
			'appPrefix' => 'app_',
			'appName' => 'CMSGears',
			'appTitle' => 'Project Demo',
			'appDomain' => 'cmsgears.com',
			'appSite' => 'https://alpha.cmsgears.com/appdemo/frontend/web',
			'appUploadsUrl' => 'https://alpha.cmsgears.com/projectdemo/uploads'
		]
	]
];

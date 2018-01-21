<?php

return [
	'bootstrap' => [ 'gii' ],
	'modules' => [
		'gii' => 'yii\gii\Module'
	],
	'components' => [
		'urlManager' => [
			'class' => 'yii\web\UrlManager',
			'baseUrl' => 'http://localhost/projectdemo/frontend/web'
		],
		// CMG Modules - Core
		'migration' => [
			'class' => 'cmsgears\app\common\components\Migration',
			'cmgPrefix' => 'cmg_',
			'sitePrefix' => 'site_',
			'siteName' => 'CMSGears',
			'siteTitle' => 'Project Demo',
			'siteMaster' => 'demomaster',
			'primaryDomain' => 'cmsgears.com',
			'defaultSite' => 'http://localhost/projectdemo/frontend/web',
			'defaultAdmin' => 'http://localhost/projectdemo/backend/web',
			'uploadsUrl' => 'http://localhost/projectdemo/uploads',
			'appPrefix' => 'app_',
			'appName' => 'CMSGears',
			'appTitle' => 'App Demo',
			'appDomain' => 'cmsgears.com',
			'appSite' => 'http://localhost/appdemo/frontend/web',
			'appUploadsUrl' => 'http://localhost/projectdemo/uploads'
		]
	]
];

<?php

return [
	'components' => [
		'urlManager' => [
			'class' => 'yii\web\UrlManager',
			'baseUrl' => 'https://demo.cmsgears.com/templates/project'
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
			'defaultSite' => 'https://demo.cmsgears.com/templates/project',
			'defaultAdmin' => 'https://demo.cmsgears.com/templates/project/admin',
			'uploadsUrl' => 'https://demo.cmsgears.com/templates/project/uploads',
			'appPrefix' => 'app_',
			'appName' => 'CMSGears',
			'appTitle' => 'Project Demo',
			'appDomain' => 'cmsgears.com',
			'appSite' => 'https://demo.cmsgears.com/templates/app',
			'appUploadsUrl' => 'https://demo.cmsgears.com/templates/project/uploads'
		]
	]
];

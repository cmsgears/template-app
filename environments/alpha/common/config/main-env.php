<?php

return [
	'components' => [
		// Site DB
		'db' => [
			'class' => 'yii\db\Connection',
			'dsn' => 'mysql:host=localhost;dbname=projectdemo',
			'username' => 'projectdemo',
			'password' => 'Demo#Project*8*730',
			'charset' => 'utf8'
		],
		// App DB - Use if app need a different database
		/*
		'appDb' => [
			'class' => 'yii\db\Connection',
			'dsn' => 'mysql:host=localhost;dbname=appdemo',
			'username' => 'appdemo',
			'password' => 'Demo#App*8*730',
			'charset' => 'utf8'
		],
		 */
		'mailer' => [
			'class' => 'yii\swiftmailer\Mailer',
			'viewPath' => '@common/mail'
		]
	]
];

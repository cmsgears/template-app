<?php
return yii\helpers\ArrayHelper::merge(
	require( __DIR__ . '/main.php' ),
	require( __DIR__ . '/main-env.php' ),
	require( __DIR__ . '/test.php' ),
	[
		'components' => [
			// Site DB
			'db' => [
				'class' => 'yii\db\Connection',
				'dsn' => 'mysql:host=localhost;dbname=projectdemo_test',
				'username' => 'projectdemo',
				'password' => 'Demo#Project*8*730',
				'charset' => 'utf8'
			],
			// App DB - Use if app need a different database
			/*
			'appDb' => [
				'class' => 'yii\db\Connection',
				'dsn' => 'mysql:host=localhost;dbname=appdemo_test',
				'username' => 'appdemo',
				'password' => 'Demo#App*8*730',
				'charset' => 'utf8'
			],
			 */
		]
	]
);

<?php

return [
	'Development' => [
		'path' => 'dev',
		'setWritable' => [
			'application/runtime',
			'application/web/assets',
			'uploads'
		],
		'setExecutable' => [
			'yii',
			'yii_test'
		],
		'setCookieValidationKey' => [
			'application/config/main-env.php'
		]
	],
	'Alpha' => [
		'path' => 'alpha',
		'setWritable' => [
			'application/runtime',
			'application/web/assets',
			'uploads'
		],
		'setExecutable' => [
			'yii',
			'yii_test'
		],
		'setCookieValidationKey' => [
			'application/config/main-env.php'
		]
	],
	'Production' => [
		'path' => 'prod',
		'setWritable' => [
			'application/runtime',
			'application/web/assets',
			'uploads'
		],
		'setExecutable' => [
			'yii'
		],
		'setCookieValidationKey' => [
			'application/config/main-env.php'
		]
	]
];

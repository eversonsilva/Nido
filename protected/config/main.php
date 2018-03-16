<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Filmes',

	// preloading 'log' component
	'preload'=>array('log'),

	'defaultController'=>'filme',

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'forum' => array(
			'postPerPage' =>20,
		),
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'19960119',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('*','::1'),
		),
		
	),

	// application components
	'components'=>array(

		'db' => [
			'connectionString' => 'mysql:host=192.168.14.224;dbname=filmes',
			'username' => 'usr_teste',
			'password' => '1234',
			'enableProfiling' => true,
            'enableParamLogging' => true,
		],

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'gii'=>'gii',
				'gii/<controller:\w+>' => 'gii/<controller>',
				'gii/<controller:\w+>/<action:\w+>' => 'gii/<controller>/<action>',
				/*
				'gii/<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				*/
			),
		),
		

		// database settings are configured in database.php
		//'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'filme/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'filme/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);

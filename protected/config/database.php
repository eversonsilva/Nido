<?php

// This is the database connection configuration.
return array(
	// uncomment the following lines to use a MySQL database
	'components' => [
		'db' => [
			'connectionString' => 'mysql:host=192.168.14.224;dbname=filmes',
			'username' => 'usr_teste',
			'password' => '1234',
			'enableProfiling' => true,
            'enableParamLogging' => true,
		]
	]
	
);
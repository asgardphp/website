<?php
return array(
	'all' => array(
		'debug_url' => 'code:%file%:%line%',
		'key'	=>	'gSS0u2CD3d',
		'locale'	=>	'en',
		'locales'	=>	array(
			'fr', 'en'
		),
		'cache_driver'	=>	null,
		'cache'	=>	false,
		'error_display' => true,
		'debug' => true,
		'email' => array(
			'driver' => 'Asgard\Email\SwiftEmail'
		)
	),
	'dev'	=>	array(
	),
	'test'	=>	array(
	),
	'prod'	=>	array(
		'cache'	=>	true,
		'debug' => false,
		'error_display' => false,
	),
);
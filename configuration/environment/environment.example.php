<?php

/**
 *
 * holds all configuration values for local environments
 *
 * each config value is defined as a constant at runtime
 *
 * @var		array
 *
 */

return array
(
	'BASEURL'			=>		'http://localhost/',
	'BASEURLSSL'			=>		'https://localhost/',
	'DOMAIN'			=>		'',
	'INDEXFILE'			=>		'',
	'ERRORS'			=>		TRUE,

	# mysql configurations
	'MYSQL_MASTER_HOST'	=>		'localhost',
	'MYSQL_MASTER_NAME'	=>		'',
	'MYSQL_MASTER_USER'	=>		'',
	'MYSQL_MASTER_PASS'		=>		'',

	'MYSQL_SLAVE_HOST'		=>		'localhost',
	'MYSQL_SLAVE_NAME'		=>		'',
	'MYSQL_SLAVE_USER'		=>		'',
	'MYSQL_SLAVE_PASS'		=>		'',

	'YCMD_MASTER_HOST'		=>		'localhost',
	'YCMD_MASTER_NAME'	=>		'',
	'YCMD_MASTER_USER'		=>		'',
	'YCMD_MASTER_PASS'		=>		'',

	'YCMD_SLAVE_HOST'		=>		'localhost',
	'YCMD_SLAVE_NAME'		=>		'',
	'YCMD_SLAVE_USER'		=>		'',
	'YCMD_SLAVE_PASS'		=>		'',

	# mongo configurations
	'MONGO_HOST'		=>		'',
	'MONGO_PORT'		=>		'',
	'MONGO_NAME'		=>		'',
	'MONGO_USER'			=>		'',
	'MONGO_PASS'			=>		'',
);

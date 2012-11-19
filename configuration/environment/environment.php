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
	'BASEURL'			=>		'http://mwr/',
	'BASEURLSSL'			=>		'https://mwr/',
	'DOMAIN'			=>		'',
	'INDEXFILE'			=>		'',
	'ERRORS'			=>		TRUE,

	# mysql configurations
	'MYSQL_MASTER_HOST'	=>		'127.0.0.1',
	'MYSQL_MASTER_NAME'	=>		'ycmd',
	'MYSQL_MASTER_USER'	=>		'root',
	'MYSQL_MASTER_PASS'		=>		'jinxP0ke',

	'MYSQL_SLAVE_HOST'		=>		'127.0.0.1',
	'MYSQL_SLAVE_NAME'		=>		'ycmd',
	'MYSQL_SLAVE_USER'		=>		'root',
	'MYSQL_SLAVE_PASS'		=>		'jinxP0ke',

	'YCMD_MASTER_HOST'		=>		'127.0.0.1',
	'YCMD_MASTER_NAME'	=>		'youcallmd',
	'YCMD_MASTER_USER'		=>		'root',
	'YCMD_MASTER_PASS'		=>		'jinxP0ke',

	'YCMD_SLAVE_HOST'		=>		'127.0.0.1',
	'YCMD_SLAVE_NAME'		=>		'youcallmd',
	'YCMD_SLAVE_USER'		=>		'root',
	'YCMD_SLAVE_PASS'		=>		'jinxP0ke',

	# mongo configurations
	'MONGO_HOST'		=>		'127.0.0.1',
	'MONGO_PORT'		=>		'27017',
	'MONGO_NAME'		=>		'ycmd',
	'MONGO_USER'			=>		NULL,
	'MONGO_PASS'			=>		NULL,
	'MONGO_TIMEOUT'		=>		300,

	'DEF_ENCRYPTION_KEY'	=>		'12345678912345678912345678912345',

	'COOKIE_SALT'			=>		'MY-COOKIE-SALT'
);

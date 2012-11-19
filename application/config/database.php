<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'default' => array
	(
		'type'       => 'mysql',
		'connection' => array
		(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname     server hostname, or socket
			 * string   database     database name
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 *
			 * Ports and sockets may be appended to the hostname.
			 */
			'hostname'   => MYSQL_MASTER_HOST,
			'database'   => MYSQL_MASTER_NAME,
			'username'   => MYSQL_MASTER_USER,
			'password'   => MYSQL_MASTER_PASS,
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => TRUE,
		'profiling'    => TRUE,
	),
	'default-slave' => array
	(
		'type'       => 'mysql',
		'connection' => array
		(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname     server hostname, or socket
			 * string   database     database name
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 *
			 * Ports and sockets may be appended to the hostname.
			 */
			'hostname'   => MYSQL_SLAVE_HOST,
			'database'   => MYSQL_SLAVE_NAME,
			'username'   => MYSQL_SLAVE_USER,
			'password'   => MYSQL_SLAVE_PASS,
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => TRUE,
		'profiling'    => TRUE,
	),
	'youcallmd' => array
	(
		'type'       => 'mysql',
		'connection' => array
		(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname     server hostname, or socket
			 * string   database     database name
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 *
			 * Ports and sockets may be appended to the hostname.
			 */
			'hostname'   => YCMD_MASTER_HOST,
			'database'   => YCMD_MASTER_NAME,
			'username'   => YCMD_MASTER_USER,
			'password'   => YCMD_MASTER_PASS,
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => TRUE,
		'profiling'    => TRUE,
	),
	'youcallmd-slave' => array
	(
		'type'       => 'mysql',
		'connection' => array
		(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname     server hostname, or socket
			 * string   database     database name
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 *
			 * Ports and sockets may be appended to the hostname.
			 */
			'hostname'   => YCMD_SLAVE_HOST,
			'database'   => YCMD_SLAVE_NAME,
			'username'   => YCMD_SLAVE_USER,
			'password'   => YCMD_SLAVE_PASS,
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => TRUE,
		'profiling'    => TRUE,
	)
);

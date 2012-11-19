<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

	'driver'			=>	'database',
	'hash_method' 		=>	'sha256',
	'hash_key'		=>	'yc!md:pw)hash',
	'lifetime'		=>	1209600,
	'session_type'		=>	'native',
	'session_key' 		=>	'yc-md-auth',

);

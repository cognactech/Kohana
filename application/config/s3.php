<?php defined('SYSPATH') or die('No direct script access.');


require_once('modules/nosql/vendor/Amazon/sdk.class.php');

return array(
	'default' => array(
		'bucket' => 'ycmd-profiles',
		'image_max_size' => 2097152,			// 2MB == 2097152 bytes
		'key_secret' => array(
			'key' => 'AKIAIHMPLPPFKII37UFA',
			'secret' => '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'
		)
	)
);
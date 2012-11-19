<?php defined('SYSPATH') or die('No direct script access.');

$config = require_once 'environment/environment.php';

/**
 * load all config values and define them as constants
 */
foreach ($config AS $name => $value) {
	define($name, $value);
}

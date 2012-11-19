<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(

	'auth'       	=>	MODPATH.'auth',       		// Basic authentication
	'cache'      	=>	MODPATH.'cache',		// Caching with multiple backends - Kohana 3.2
	'database'	=>	MODPATH.'database',   	// Database access - Kohana 3.2
	'deputy'	=>	MODPATH.'deputy',	   	// Access Control List - https://github.com/nichcurtis/kohana-deputy
		
 	'nosql' 		=>	MODPATH.'nosql', 		// Kohana NoSQL DB Abstraction Module - https://github.com/nichcurtis/Ko3-NoSQLt
 	'twig'  		=>	MODPATH.'twig', 		// Kohana Twig Module - https://github.com/nichcurtis/KO3-Twig
 	
 	'tophat-core'	=>	MODPATH.'tophat-core',	// YCMD V2 (TopHat) - https://github.com/YouCall/TopHat-Core
 	'tophat-coms'	=>	MODPATH.'tophat-coms',	// YCMD V2 (TopHat) - https://github.com/YouCall/TopHat-Coms

 	'logging'	=>	MODPATH.'logging',		// Kohana Logging Module - https://github.com/YouCall/KO3-Logging
));

//	
//	'codebench' 	=>	MODPATH.'codebench', 	// Benchmarking tool
//	'image'      	=>	MODPATH.'image',      		// Image manipulation
//	'orm'        	=>	MODPATH.'orm',        		// Object Relationship Mapping
//	'unittest'   	=>	MODPATH.'unittest',   		// Unit testing
//	'userguide' 	=>	MODPATH.'userguide',  	// User guide and API documentation
//	'tophat-mail'	=>	MODPATH.'tophat-mail',	// YCMD V2 (TopHat) - https://github.com/YouCall/TopHat-Mail

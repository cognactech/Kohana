<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-18 20:39:39 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'deputy' at 'MODPATH/deputy' ~ SYSPATH/classes/kohana/core.php [ 550 ]
2012-11-18 20:39:39 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'deputy' at 'MODPATH/deputy' ~ SYSPATH/classes/kohana/core.php [ 550 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/application/modules.php(20): Kohana_Core::modules(Array)
#1 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/application/bootstrap.php(107): require_once('/Users/ncurtis/...')
#2 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(96): require('/Users/ncurtis/...')
#3 {main}
2012-11-18 20:39:39 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'deputy' at 'MODPATH/deputy' ~ SYSPATH/classes/kohana/core.php [ 550 ]
2012-11-18 20:39:39 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'deputy' at 'MODPATH/deputy' ~ SYSPATH/classes/kohana/core.php [ 550 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/application/modules.php(20): Kohana_Core::modules(Array)
#1 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/application/bootstrap.php(107): require_once('/Users/ncurtis/...')
#2 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(96): require('/Users/ncurtis/...')
#3 {main}
2012-11-18 20:41:10 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Response::$messages ~ SYSPATH/classes/kohana/http/exception.php [ 28 ]
2012-11-18 20:41:10 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Response::$messages ~ SYSPATH/classes/kohana/http/exception.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:41:10 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Response::$messages ~ SYSPATH/classes/kohana/http/exception.php [ 28 ]
2012-11-18 20:41:10 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Response::$messages ~ SYSPATH/classes/kohana/http/exception.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:41:12 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Response::$messages ~ SYSPATH/classes/kohana/http/exception.php [ 28 ]
2012-11-18 20:41:12 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Response::$messages ~ SYSPATH/classes/kohana/http/exception.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:41:12 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Response::$messages ~ SYSPATH/classes/kohana/http/exception.php [ 28 ]
2012-11-18 20:41:12 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Response::$messages ~ SYSPATH/classes/kohana/http/exception.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:41:13 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Response::$messages ~ SYSPATH/classes/kohana/http/exception.php [ 28 ]
2012-11-18 20:41:13 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Response::$messages ~ SYSPATH/classes/kohana/http/exception.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:41:13 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Response::$messages ~ SYSPATH/classes/kohana/http/exception.php [ 28 ]
2012-11-18 20:41:13 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Response::$messages ~ SYSPATH/classes/kohana/http/exception.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:41:48 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Response::$messages ~ SYSPATH/classes/kohana/http/exception.php [ 28 ]
2012-11-18 20:41:48 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Response::$messages ~ SYSPATH/classes/kohana/http/exception.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:41:48 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Response::$messages ~ SYSPATH/classes/kohana/http/exception.php [ 28 ]
2012-11-18 20:41:48 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Response::$messages ~ SYSPATH/classes/kohana/http/exception.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-18 20:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#3 {main}
2012-11-18 20:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-18 20:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#3 {main}
2012-11-18 20:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-18 20:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#3 {main}
2012-11-18 20:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-18 20:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#3 {main}
2012-11-18 20:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-18 20:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#3 {main}
2012-11-18 20:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:45:05 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Response ~ SYSPATH/classes/kohana/request.php [ 1252 ]
2012-11-18 20:45:05 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Response ~ SYSPATH/classes/kohana/request.php [ 1252 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-18 20:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#3 {main}
2012-11-18 20:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-18 20:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#3 {main}
2012-11-18 20:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-18 20:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#3 {main}
2012-11-18 20:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:55:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-18 20:55:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#3 {main}
2012-11-18 20:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:55:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
2012-11-18 20:55:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:56:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
2012-11-18 20:56:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:56:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
2012-11-18 20:56:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:56:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
2012-11-18 20:56:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:56:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
2012-11-18 20:56:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:56:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
2012-11-18 20:56:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:56:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
2012-11-18 20:56:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:56:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
2012-11-18 20:56:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:56:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
2012-11-18 20:56:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:56:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
2012-11-18 20:56:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:56:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
2012-11-18 20:56:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:56:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
2012-11-18 20:56:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_Config' not found ~ MODPATH/tophat-core/classes/model.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:56:33 --- ERROR: ErrorException [ 8 ]: Undefined index:  default-slave ~ MODPATH/database/classes/kohana/database.php [ 65 ]
2012-11-18 20:56:33 --- STRACE: ErrorException [ 8 ]: Undefined index:  default-slave ~ MODPATH/database/classes/kohana/database.php [ 65 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/modules/database/classes/kohana/database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/ncurtis/...', 65, Array)
#1 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/modules/database/classes/kohana/database/query.php(214): Kohana_Database::instance('default-slave')
#2 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/application/classes/model/config.php(27): Kohana_Database_Query->execute('default-slave')
#3 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/modules/tophat-core/classes/model.php(116): Model_Config->__construct()
#4 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/application/classes/application.php(33): Model::factory('config')
#5 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/application/classes/controller/twig.php(29): Application->before()
#6 [internal function]: Controller_Twig->before()
#7 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Twig))
#8 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#11 {main}
2012-11-18 20:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:56:52 --- ERROR: ErrorException [ 8 ]: Undefined index:  default-slave ~ MODPATH/database/classes/kohana/database.php [ 65 ]
2012-11-18 20:56:52 --- STRACE: ErrorException [ 8 ]: Undefined index:  default-slave ~ MODPATH/database/classes/kohana/database.php [ 65 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/modules/database/classes/kohana/database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/ncurtis/...', 65, Array)
#1 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/modules/database/classes/kohana/database/query.php(214): Kohana_Database::instance('default-slave')
#2 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/application/classes/model/config.php(27): Kohana_Database_Query->execute('default-slave')
#3 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/modules/tophat-core/classes/model.php(116): Model_Config->__construct()
#4 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/application/classes/application.php(33): Model::factory('config')
#5 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/application/classes/controller/twig.php(29): Application->before()
#6 [internal function]: Controller_Twig->before()
#7 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Twig))
#8 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#11 {main}
2012-11-18 20:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-18 20:56:56 --- ERROR: ErrorException [ 1 ]: Class 'Auth_Database' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
2012-11-18 20:56:56 --- STRACE: ErrorException [ 1 ]: Class 'Auth_Database' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-18 20:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-18 20:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/ncurtis/GitHub/nichcurtis/MessWithRainee/index.php(103): Kohana_Request->execute()
#1 {main}
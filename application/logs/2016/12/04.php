<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-04 20:14:15 --- EMERGENCY: ErrorException [ 2 ]: strpos(): Empty needle ~ SYSPATH/classes/Kohana/Request.php [ 267 ] in file:line
2016-12-04 20:14:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos(): Empty...', '/Users/Desmond/...', 267, Array)
#1 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(267): strpos('/', '')
#2 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(142): Kohana_Request::detect_uri()
#3 /Users/Desmond/Sites/judge/index.php(99): Kohana_Request::factory(true, Array, false)
#4 {main} in file:line
2016-12-04 20:14:40 --- EMERGENCY: ErrorException [ 2 ]: strpos(): Empty needle ~ SYSPATH/classes/Kohana/Request.php [ 267 ] in file:line
2016-12-04 20:14:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos(): Empty...', '/Users/Desmond/...', 267, Array)
#1 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(267): strpos('/status', '')
#2 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(142): Kohana_Request::detect_uri()
#3 /Users/Desmond/Sites/judge/index.php(99): Kohana_Request::factory(true, Array, false)
#4 {main} in file:line
2016-12-04 20:23:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Memcache' not found ~ APPPATH/classes/Controller/Admin/Index.php [ 12 ] in file:line
2016-12-04 20:23:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-04 20:39:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Memcache' not found ~ APPPATH/classes/Controller/Admin/Index.php [ 12 ] in file:line
2016-12-04 20:39:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
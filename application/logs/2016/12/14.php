<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-14 00:14:25 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'problem_id' ~ APPPATH/classes/Controller/Problem.php [ 358 ] in /Users/Desmond/Sites/judge/application/classes/Controller/Problem.php:358
2016-12-14 00:14:25 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Controller/Problem.php(358): Kohana_Core::error_handler(2, 'Illegal string ...', '/Users/Desmond/...', 358, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(271): Controller_Problem->action_show()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/judge/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/judge/application/classes/Controller/Problem.php:358
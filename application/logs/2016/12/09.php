<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-09 14:19:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: invitation ~ APPPATH/classes/Controller/User.php [ 180 ] in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:180
2016-12-09 14:19:30 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(180): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 180, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(271): Controller_User->action_register()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:180
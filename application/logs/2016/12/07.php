<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-07 23:53:16 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/index/list could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /Users/Desmond/Sites/judge/system/classes/Kohana/View.php:145
2016-12-07 23:53:16 --- DEBUG: #0 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(145): Kohana_View->set_filename('admin/index/lis...')
#1 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/index/lis...', Array)
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(119): Kohana_View::factory('admin/index/lis...', Array)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(277): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/system/classes/Kohana/View.php:145
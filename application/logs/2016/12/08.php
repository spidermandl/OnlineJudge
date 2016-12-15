<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-08 19:19:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/Admin/Index.php [ 109 ] in /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Index.php:109
2016-12-08 19:19:18 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Index.php(109): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 109, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(271): Controller_Admin_Index->action_list()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Index.php:109
2016-12-08 23:12:10 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Admin/Index.php [ 99 ] in file:line
2016-12-08 23:12:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-08 23:28:50 --- EMERGENCY: ErrorException [ 1 ]: Cannot access protected property Controller_Admin_Index::$template_data ~ APPPATH/classes/Controller/Common/Index.php [ 41 ] in file:line
2016-12-08 23:28:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-08 23:30:18 --- EMERGENCY: ErrorException [ 1 ]: Cannot access protected property Controller_Admin_Index::$template_data ~ APPPATH/classes/Controller/Common/Index.php [ 41 ] in file:line
2016-12-08 23:30:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-08 23:30:28 --- EMERGENCY: ErrorException [ 1 ]: Cannot access protected property Controller_Admin_Index::$template_data ~ APPPATH/classes/Controller/Common/Index.php [ 41 ] in file:line
2016-12-08 23:30:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-08 23:49:46 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `"variable (T_VARIABLE)"' ~ APPPATH/classes/Controller/Admin/Index.php [ 23 ] in file:line
2016-12-08 23:49:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-08 23:51:23 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `"variable (T_VARIABLE)"' ~ APPPATH/classes/Controller/Admin/Index.php [ 23 ] in file:line
2016-12-08 23:51:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-08 23:51:47 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `"variable (T_VARIABLE)"' ~ APPPATH/classes/Controller/Admin/Index.php [ 23 ] in file:line
2016-12-08 23:51:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-08 23:52:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: news_list ~ APPPATH/views/index/index.php [ 9 ] in /Users/Desmond/Sites/judge/application/views/index/index.php:9
2016-12-08 23:52:40 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/views/index/index.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 9, Array)
#1 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(62): include('/Users/Desmond/...')
#2 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/Users/Desmond/...', Array)
#3 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Users/Desmond/Sites/judge/application/views/layout.php(46): Kohana_View->__toString()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(62): include('/Users/Desmond/...')
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/Users/Desmond/...', Array)
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(121): Kohana_Response->body(Object(View))
#10 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(277): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#13 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /Users/Desmond/Sites/judge/application/views/index/index.php:9
2016-12-08 23:53:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: news_list ~ APPPATH/views/index/index.php [ 9 ] in /Users/Desmond/Sites/judge/application/views/index/index.php:9
2016-12-08 23:53:44 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/views/index/index.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 9, Array)
#1 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(62): include('/Users/Desmond/...')
#2 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/Users/Desmond/...', Array)
#3 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Users/Desmond/Sites/judge/application/views/layout.php(46): Kohana_View->__toString()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(62): include('/Users/Desmond/...')
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/Users/Desmond/...', Array)
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(121): Kohana_Response->body(Object(View))
#10 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(277): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#13 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /Users/Desmond/Sites/judge/application/views/index/index.php:9
2016-12-08 23:53:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: news_list ~ APPPATH/views/index/index.php [ 9 ] in /Users/Desmond/Sites/judge/application/views/index/index.php:9
2016-12-08 23:53:46 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/views/index/index.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 9, Array)
#1 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(62): include('/Users/Desmond/...')
#2 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/Users/Desmond/...', Array)
#3 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Users/Desmond/Sites/judge/application/views/layout.php(46): Kohana_View->__toString()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(62): include('/Users/Desmond/...')
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/Users/Desmond/...', Array)
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(121): Kohana_Response->body(Object(View))
#10 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(277): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#13 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /Users/Desmond/Sites/judge/application/views/index/index.php:9
2016-12-08 23:58:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: news_list ~ APPPATH/views/index/index.php [ 9 ] in /Users/Desmond/Sites/judge/application/views/index/index.php:9
2016-12-08 23:58:54 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/views/index/index.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 9, Array)
#1 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(62): include('/Users/Desmond/...')
#2 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/Users/Desmond/...', Array)
#3 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Users/Desmond/Sites/judge/application/views/layout.php(46): Kohana_View->__toString()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(62): include('/Users/Desmond/...')
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/Users/Desmond/...', Array)
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(121): Kohana_Response->body(Object(View))
#10 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(277): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#13 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /Users/Desmond/Sites/judge/application/views/index/index.php:9
2016-12-08 23:59:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: news_list ~ APPPATH/views/index/index.php [ 9 ] in /Users/Desmond/Sites/judge/application/views/index/index.php:9
2016-12-08 23:59:42 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/views/index/index.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 9, Array)
#1 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(62): include('/Users/Desmond/...')
#2 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/Users/Desmond/...', Array)
#3 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /Users/Desmond/Sites/judge/application/views/layout.php(46): Kohana_View->__toString()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(62): include('/Users/Desmond/...')
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/Users/Desmond/...', Array)
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(121): Kohana_Response->body(Object(View))
#10 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(277): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#13 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /Users/Desmond/Sites/judge/application/views/index/index.php:9
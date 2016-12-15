<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-12 09:28:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Task_Ranker' not found ~ APPPATH/cron.php [ 28 ] in file:line
2016-12-12 09:28:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 09:28:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Task_Ranker' not found ~ APPPATH/cron.php [ 28 ] in file:line
2016-12-12 09:28:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 09:31:56 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Model_Team::problem_status() should not be called statically ~ APPPATH/cron.php [ 28 ] in /Users/Desmond/Sites/judge/application/cron.php:28
2016-12-12 09:31:56 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/cron.php(28): Kohana_Core::error_handler(2048, 'Non-static meth...', '/Users/Desmond/...', 28, Array)
#1 /Users/Desmond/Sites/judge/application/cron.php(28): Model_Team::problem_status()
#2 {main} in /Users/Desmond/Sites/judge/application/cron.php:28
2016-12-12 09:46:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Task_Ranker' not found ~ APPPATH/cron.php [ 28 ] in file:line
2016-12-12 09:46:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 10:11:04 --- EMERGENCY: ErrorException [ 1 ]: Class Model_TempAC contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods (Model_Base::initial_data, Model_Base::validate) ~ APPPATH/classes/Model/TempAC.php [ 18 ] in file:line
2016-12-12 10:11:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 10:12:46 --- EMERGENCY: ErrorException [ 1 ]: Class Model_TempAC contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods (Model_Base::initial_data, Model_Base::validate) ~ APPPATH/classes/Model/TempAC.php [ 18 ] in file:line
2016-12-12 10:12:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 10:16:03 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Model/Base.php [ 104 ] in /Users/Desmond/Sites/judge/application/classes/Model/Base.php:104
2016-12-12 10:16:03 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Model/Base.php(104): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Users/Desmond/...', 104, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Task/Ranker.php(15): Model_Base::find(NULL, NULL, NULL, Array)
#2 [internal function]: Task_Ranker::update_user_score('')
#3 /Users/Desmond/Sites/judge/application/classes/Kohana/Cron.php(154): call_user_func_array('Task_Ranker::up...', Array)
#4 /Users/Desmond/Sites/judge/application/classes/Kohana/Cron.php(116): Kohana_Cron->execute_call_back()
#5 /Users/Desmond/Sites/judge/application/classes/Kohana/Cron.php(88): Kohana_Cron->execute()
#6 /Users/Desmond/Sites/judge/application/cron.php(29): Kohana_Cron::run()
#7 {main} in /Users/Desmond/Sites/judge/application/classes/Model/Base.php:104
2016-12-12 10:42:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/views/admin/situation/testSubmited.php [ 25 ] in /Users/Desmond/Sites/judge/application/views/admin/situation/testSubmited.php:25
2016-12-12 10:42:07 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/views/admin/situation/testSubmited.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 25, Array)
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
#12 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Groups))
#13 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /Users/Desmond/Sites/judge/index.php(104): Kohana_Request->execute()
#16 {main} in /Users/Desmond/Sites/judge/application/views/admin/situation/testSubmited.php:25
2016-12-12 10:45:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/views/admin/situation/testSubmited.php [ 25 ] in /Users/Desmond/Sites/judge/application/views/admin/situation/testSubmited.php:25
2016-12-12 10:45:15 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/views/admin/situation/testSubmited.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 25, Array)
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
#12 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Groups))
#13 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /Users/Desmond/Sites/judge/index.php(104): Kohana_Request->execute()
#16 {main} in /Users/Desmond/Sites/judge/application/views/admin/situation/testSubmited.php:25
2016-12-12 10:57:17 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Task/Ranker.php [ 23 ] in /Users/Desmond/Sites/judge/application/classes/Task/Ranker.php:23
2016-12-12 10:57:17 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Task/Ranker.php(23): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Desmond/...', 23, Array)
#1 [internal function]: Task_Ranker::update_user_score('')
#2 /Users/Desmond/Sites/judge/application/classes/Kohana/Cron.php(154): call_user_func_array('Task_Ranker::up...', Array)
#3 /Users/Desmond/Sites/judge/application/classes/Kohana/Cron.php(116): Kohana_Cron->execute_call_back()
#4 /Users/Desmond/Sites/judge/application/classes/Kohana/Cron.php(88): Kohana_Cron->execute()
#5 /Users/Desmond/Sites/judge/application/cron.php(29): Kohana_Cron::run()
#6 {main} in /Users/Desmond/Sites/judge/application/classes/Task/Ranker.php:23
2016-12-12 11:01:22 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Task/Ranker.php [ 27 ] in /Users/Desmond/Sites/judge/application/classes/Task/Ranker.php:27
2016-12-12 11:01:22 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Task/Ranker.php(27): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Desmond/...', 27, Array)
#1 [internal function]: Task_Ranker::update_user_score('')
#2 /Users/Desmond/Sites/judge/application/classes/Kohana/Cron.php(154): call_user_func_array('Task_Ranker::up...', Array)
#3 /Users/Desmond/Sites/judge/application/classes/Kohana/Cron.php(116): Kohana_Cron->execute_call_back()
#4 /Users/Desmond/Sites/judge/application/classes/Kohana/Cron.php(88): Kohana_Cron->execute()
#5 /Users/Desmond/Sites/judge/application/cron.php(29): Kohana_Cron::run()
#6 {main} in /Users/Desmond/Sites/judge/application/classes/Task/Ranker.php:27
2016-12-12 11:02:24 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Task/Ranker.php [ 27 ] in /Users/Desmond/Sites/judge/application/classes/Task/Ranker.php:27
2016-12-12 11:02:24 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Task/Ranker.php(27): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Desmond/...', 27, Array)
#1 [internal function]: Task_Ranker::update_user_score('')
#2 /Users/Desmond/Sites/judge/application/classes/Kohana/Cron.php(154): call_user_func_array('Task_Ranker::up...', Array)
#3 /Users/Desmond/Sites/judge/application/classes/Kohana/Cron.php(116): Kohana_Cron->execute_call_back()
#4 /Users/Desmond/Sites/judge/application/classes/Kohana/Cron.php(88): Kohana_Cron->execute()
#5 /Users/Desmond/Sites/judge/application/cron.php(29): Kohana_Cron::run()
#6 {main} in /Users/Desmond/Sites/judge/application/classes/Task/Ranker.php:27
2016-12-12 11:17:00 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Task/Ranker.php [ 26 ] in /Users/Desmond/Sites/judge/application/classes/Task/Ranker.php:26
2016-12-12 11:17:00 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Task/Ranker.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Desmond/...', 26, Array)
#1 [internal function]: Task_Ranker::update_user_score('')
#2 /Users/Desmond/Sites/judge/application/classes/Kohana/Cron.php(154): call_user_func_array('Task_Ranker::up...', Array)
#3 /Users/Desmond/Sites/judge/application/classes/Kohana/Cron.php(116): Kohana_Cron->execute_call_back()
#4 /Users/Desmond/Sites/judge/application/classes/Kohana/Cron.php(88): Kohana_Cron->execute()
#5 /Users/Desmond/Sites/judge/application/cron.php(29): Kohana_Cron::run()
#6 {main} in /Users/Desmond/Sites/judge/application/classes/Task/Ranker.php:26
2016-12-12 11:52:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function current() on array ~ APPPATH/classes/Task/Ranker.php [ 26 ] in file:line
2016-12-12 11:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 13:45:34 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Task/Ranker.php [ 23 ] in file:line
2016-12-12 13:45:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 13:56:08 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Task/Ranker.php [ 23 ] in file:line
2016-12-12 13:56:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 14:03:04 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Task/Ranker.php [ 23 ] in file:line
2016-12-12 14:03:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 14:03:32 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Task/Ranker.php [ 23 ] in file:line
2016-12-12 14:03:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 14:08:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function int() ~ APPPATH/classes/Task/Ranker.php [ 25 ] in file:line
2016-12-12 14:08:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
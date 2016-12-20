<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<<<<<<< HEAD
2016-12-17 22:17:15 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-12-17 22:17:15 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/OnlineJudge/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /home/OnlineJudge/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /home/OnlineJudge/application/classes/I18n.php(45): Kohana_Auth::instance()
#6 /home/OnlineJudge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#7 /home/OnlineJudge/application/classes/Controller/Base.php(18): I18n::setup()
#8 /home/OnlineJudge/application/classes/Controller/Base.php(259): Controller_Base->before()
#9 [internal function]: Controller_Base->execute()
#10 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#13 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#14 {main} in /home/OnlineJudge/system/classes/Kohana/Session.php:125
=======
2016-12-17 12:49:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Situation::$staged ~ APPPATH/classes/Controller/Leader/Groups.php [ 258 ] in /Users/Desmond/Sites/judge/application/classes/Controller/Leader/Groups.php:258
2016-12-17 12:49:33 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Controller/Leader/Groups.php(258): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Desmond/...', 258, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(271): Controller_Leader_Groups->action_status()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Leader_Groups))
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/judge/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/judge/application/classes/Controller/Leader/Groups.php:258
2016-12-17 12:51:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: group_config_stages ~ APPPATH/classes/Controller/Leader/Groups.php [ 280 ] in /Users/Desmond/Sites/judge/application/classes/Controller/Leader/Groups.php:280
2016-12-17 12:51:11 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Controller/Leader/Groups.php(280): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 280, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(271): Controller_Leader_Groups->action_status()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Leader_Groups))
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/judge/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/judge/application/classes/Controller/Leader/Groups.php:280
2016-12-17 12:52:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: group_config_stages ~ APPPATH/classes/Controller/Leader/Groups.php [ 278 ] in /Users/Desmond/Sites/judge/application/classes/Controller/Leader/Groups.php:278
2016-12-17 12:52:00 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Controller/Leader/Groups.php(278): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 278, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(271): Controller_Leader_Groups->action_status()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Leader_Groups))
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/judge/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/judge/application/classes/Controller/Leader/Groups.php:278
2016-12-17 12:55:46 --- EMERGENCY: View_Exception [ 0 ]: The requested view leader/groups/status could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /Users/Desmond/Sites/judge/system/classes/Kohana/View.php:145
2016-12-17 12:55:46 --- DEBUG: #0 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(145): Kohana_View->set_filename('leader/groups/s...')
#1 /Users/Desmond/Sites/judge/system/classes/Kohana/View.php(30): Kohana_View->__construct('leader/groups/s...', Array)
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(119): Kohana_View::factory('leader/groups/s...', Array)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(277): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Leader_Groups))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/system/classes/Kohana/View.php:145
>>>>>>> development

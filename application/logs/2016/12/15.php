<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<<<<<<< HEAD
2016-12-15 00:39:54 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-12-15 00:39:54 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-12-15 00:39:54 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-12-15 00:39:54 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-12-15 15:01:06 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-12-15 15:01:06 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-12-15 22:08:53 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-12-15 22:08:53 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-12-15 22:40:29 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-12-15 22:40:29 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-12-15 21:01:11 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.users_status' doesn't exist [ SELECT * FROM `users_status` WHERE `date` LIKE '%2016-12%' AND `user_id` = 'guoxiaoqin' ORDER BY `date` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-15 21:01:11 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Situation', Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Situation.php(152): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/User.php(26): Model_Situation::search('2016-12', 'date', Array, true, 'user_id', 'guoxiaoqin')
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(271): Controller_Admin_User->action_submited()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-15 21:01:11 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.users_status' doesn't exist [ SELECT * FROM `users_status` WHERE `date` LIKE '%2016-12%' AND `user_id` = 'guoxiaoqin' ORDER BY `date` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-15 21:01:11 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Situation', Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Situation.php(152): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/User.php(68): Model_Situation::search('2016-12', 'date', Array, true, 'user_id', 'guoxiaoqin')
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(271): Controller_Admin_User->action_addscore()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
>>>>>>> development

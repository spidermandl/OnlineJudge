<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-26 00:13:21 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-26 00:13:21 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/OnlineJudge/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /home/OnlineJudge/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /home/OnlineJudge/application/classes/I18n.php(45): Kohana_Auth::instance()
#6 /home/OnlineJudge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#7 /home/OnlineJudge/application/classes/Controller/Base.php(18): I18n::setup()
#8 /home/OnlineJudge/application/classes/Controller/Base.php(241): Controller_Base->before()
#9 [internal function]: Controller_Base->execute()
#10 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#13 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#14 {main} in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-26 00:13:56 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-26 00:13:56 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/OnlineJudge/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /home/OnlineJudge/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /home/OnlineJudge/application/classes/I18n.php(45): Kohana_Auth::instance()
#6 /home/OnlineJudge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#7 /home/OnlineJudge/application/classes/Controller/Base.php(18): I18n::setup()
#8 /home/OnlineJudge/application/classes/Controller/Base.php(241): Controller_Base->before()
#9 [internal function]: Controller_Base->execute()
#10 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#13 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#14 {main} in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-26 00:13:57 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-26 00:13:57 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/OnlineJudge/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /home/OnlineJudge/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /home/OnlineJudge/application/classes/I18n.php(45): Kohana_Auth::instance()
#6 /home/OnlineJudge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#7 /home/OnlineJudge/application/classes/Controller/Base.php(18): I18n::setup()
#8 /home/OnlineJudge/application/classes/Controller/Base.php(241): Controller_Base->before()
#9 [internal function]: Controller_Base->execute()
#10 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#13 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#14 {main} in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-26 14:23:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-11-26 14:23:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-26 14:50:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-11-26 14:50:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-26 15:02:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-11-26 15:02:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-26 15:02:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-11-26 15:02:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-26 15:02:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-11-26 15:02:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-26 15:02:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-11-26 15:02:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-26 15:02:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-11-26 15:02:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-26 15:12:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-11-26 15:12:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-26 15:55:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-11-26 15:55:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-26 15:56:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-11-26 15:56:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-26 23:08:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-11-26 23:08:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
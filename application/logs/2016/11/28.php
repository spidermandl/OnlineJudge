<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-28 10:51:19 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 10:51:19 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 10:51:21 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 10:51:21 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 12:18:35 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 12:18:35 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 12:18:38 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 12:18:38 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 14:06:12 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 14:06:12 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 14:06:13 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 14:06:13 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 15:05:42 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 15:05:42 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/OnlineJudge/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /home/OnlineJudge/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /home/OnlineJudge/application/classes/I18n.php(45): Kohana_Auth::instance()
#6 /home/OnlineJudge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#7 /home/OnlineJudge/application/classes/Controller/Base.php(18): I18n::setup()
#8 /home/OnlineJudge/application/classes/Controller/Base.php(241): Controller_Base->before()
#9 [internal function]: Controller_Base->execute()
#10 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#11 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#13 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#14 {main} in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 15:05:47 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 15:05:47 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 15:05:48 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 15:05:48 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 15:22:21 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 15:22:21 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 15:22:23 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 15:22:23 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 16:09:33 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 16:09:33 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 16:09:35 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 16:09:35 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 17:19:49 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 17:19:49 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 17:19:50 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 17:19:50 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 17:33:00 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 17:33:00 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/OnlineJudge/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /home/OnlineJudge/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /home/OnlineJudge/application/classes/I18n.php(45): Kohana_Auth::instance()
#6 /home/OnlineJudge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#7 /home/OnlineJudge/application/classes/Controller/Base.php(18): I18n::setup()
#8 /home/OnlineJudge/application/classes/Controller/Base.php(241): Controller_Base->before()
#9 [internal function]: Controller_Base->execute()
#10 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#13 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#14 {main} in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 17:33:03 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 17:33:03 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 17:33:07 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 17:33:07 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/OnlineJudge/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /home/OnlineJudge/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /home/OnlineJudge/application/classes/I18n.php(45): Kohana_Auth::instance()
#6 /home/OnlineJudge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#7 /home/OnlineJudge/application/classes/Controller/Base.php(18): I18n::setup()
#8 /home/OnlineJudge/application/classes/Controller/Base.php(241): Controller_Base->before()
#9 [internal function]: Controller_Base->execute()
#10 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#13 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#14 {main} in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 17:33:10 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 17:33:10 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 17:33:13 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 17:33:13 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/OnlineJudge/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /home/OnlineJudge/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /home/OnlineJudge/application/classes/I18n.php(45): Kohana_Auth::instance()
#6 /home/OnlineJudge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#7 /home/OnlineJudge/application/classes/Controller/Base.php(18): I18n::setup()
#8 /home/OnlineJudge/application/classes/Controller/Base.php(241): Controller_Base->before()
#9 [internal function]: Controller_Base->execute()
#10 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#11 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#13 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#14 {main} in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 19:33:09 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 19:33:09 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2016-11-28 20:12:45 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 20:12:45 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/OnlineJudge/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /home/OnlineJudge/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /home/OnlineJudge/application/classes/I18n.php(45): Kohana_Auth::instance()
#6 /home/OnlineJudge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#7 /home/OnlineJudge/application/classes/Controller/Base.php(18): I18n::setup()
#8 /home/OnlineJudge/application/classes/Controller/Base.php(241): Controller_Base->before()
#9 [internal function]: Controller_Base->execute()
#10 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#11 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#13 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#14 {main} in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 20:12:47 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 20:12:47 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/OnlineJudge/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /home/OnlineJudge/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /home/OnlineJudge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /home/OnlineJudge/application/classes/I18n.php(45): Kohana_Auth::instance()
#6 /home/OnlineJudge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#7 /home/OnlineJudge/application/classes/Controller/Base.php(18): I18n::setup()
#8 /home/OnlineJudge/application/classes/Controller/Base.php(241): Controller_Base->before()
#9 [internal function]: Controller_Base->execute()
#10 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#11 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#13 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#14 {main} in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 20:22:19 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/OnlineJudge/system/classes/Kohana/Session.php:125
2016-11-28 20:22:19 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
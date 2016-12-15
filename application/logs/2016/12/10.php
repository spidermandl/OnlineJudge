<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-10 22:01:14 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'cron' at 'MODPATH/cron' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /Users/Desmond/Sites/judge/application/bootstrap.php:122
2016-12-10 22:01:14 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/bootstrap.php(122): Kohana_Core::modules(Array)
#1 /Users/Desmond/Sites/judge/index.php(94): require('/Users/Desmond/...')
#2 {main} in /Users/Desmond/Sites/judge/application/bootstrap.php:122
2016-12-10 22:13:26 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php:125
2016-12-10 22:13:26 --- DEBUG: #0 /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /Users/Desmond/Sites/judge/application/classes/I18n.php(45): Kohana_Auth::instance()
#6 /Users/Desmond/Sites/judge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#7 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(18): I18n::setup()
#8 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(259): Controller_Base->before()
#9 [internal function]: Controller_Base->execute()
#10 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#14 {main} in /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php:125
2016-12-10 22:13:32 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php:125
2016-12-10 22:13:32 --- DEBUG: #0 /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /Users/Desmond/Sites/judge/application/classes/I18n.php(45): Kohana_Auth::instance()
#6 /Users/Desmond/Sites/judge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#7 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(18): I18n::setup()
#8 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(259): Controller_Base->before()
#9 [internal function]: Controller_Base->execute()
#10 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#14 {main} in /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php:125
2016-12-10 22:47:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/Kohana/Cron.php [ 33 ] in file:line
2016-12-10 22:47:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-10 22:47:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/Kohana/Cron.php [ 33 ] in file:line
2016-12-10 22:47:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
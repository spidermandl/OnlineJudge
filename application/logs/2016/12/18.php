<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-18 14:47:43 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'solution.group_id' in 'field list' [ UPDATE `users` SET `user_id` = 'admin', `group_id` = '', `stage` = '1', `email` = '87654321@qq.com', `submit` = '185', `solved` = '89', `defunct` = 'N', `ip` = '127.0.0.1', `accesstime` = '2016-12-18 14:47:43', `volume` = '1', `language` = '1', `password` = 'krsGGNs2W/Tvz+ddCm/PtUtlCCI4Mzgz', `reg_time` = '2016-06-13 00:07:11', `nick` = 'admin', `school` = 'stju', `locale` = 'en', `theme` = NULL, `score` = '0', `punish` = '0' WHERE `user_id` = 'admin' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-18 14:47:43 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `users` ...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/User.php(521): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Auth/Hoj.php(100): Model_User->save()
#3 /Users/Desmond/Sites/judge/application/classes/Auth/Hoj.php(21): Auth_Hoj->complete_login(Object(Model_User))
#4 /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth.php(92): Auth_Hoj->_login('admin', 'qqq111', true)
#5 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(203): Kohana_Auth->login('admin', 'qqq111', true)
#6 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(186): Controller_User->do_login()
#7 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(271): Controller_User->action_login()
#8 [internal function]: Controller_Base->execute()
#9 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Desmond/Sites/judge/index.php(104): Kohana_Request->execute()
#13 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
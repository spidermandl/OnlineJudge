<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-16 00:11:41 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'group_id' in 'where clause' [ SELECT * FROM `user_progress` WHERE `date` LIKE '%2016-12%' AND `group_id` = 'hsd' ORDER BY `date` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-16 00:11:41 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Situation', Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Situation.php(151): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Groups.php(117): Model_Situation::search('2016-12', 'date', Array, true, 'group_id', 'hsd')
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(271): Controller_Admin_Groups->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Groups))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-16 01:23:20 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `';'' or `'{'' ~ APPPATH/classes/Controller/Common/User.php [ 22 ] in file:line
2016-12-16 01:23:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-16 01:24:34 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'group_id' in 'where clause' [ SELECT * FROM `user_progress` WHERE `date` LIKE '%2016-12%' AND `group_id` = 'hsd' ORDER BY `date` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-16 01:24:34 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Situation', Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Situation.php(137): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Groups.php(117): Model_Situation::search('2016-12', 'date', Array, true, 'group_id', 'hsd')
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(271): Controller_Admin_Groups->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Groups))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-16 01:24:59 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'group_id' in 'where clause' [ SELECT * FROM `user_progress` WHERE `date` LIKE '%2016-12%' AND `group_id` = 'hsd' ORDER BY `date` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-16 01:24:59 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Situation', Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Situation.php(137): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Groups.php(117): Model_Situation::search('2016-12', 'date', Array, true, 'group_id', 'hsd')
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(271): Controller_Admin_Groups->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Groups))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
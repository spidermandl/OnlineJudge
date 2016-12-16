<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-16 15:05:54 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in on clause is ambiguous [ SELECT * FROM `user_progress` JOIN `users` ON (`user_id` = `users`.`user_id`) WHERE `date` LIKE '%{$date}%' AND `users`.`group_id` = 'sjtu' ORDER BY `date` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-16 15:05:54 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Situation', Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Situation.php(125): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Groups.php(109): Model_Situation::get_group_stage_progress_by_date('2016-12', 'sjtu')
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(271): Controller_Admin_Groups->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Groups))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-16 15:15:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: order_by ~ APPPATH/classes/Controller/Admin/Groups.php [ 105 ] in /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Groups.php:105
2016-12-16 15:15:47 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Groups.php(105): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 105, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(271): Controller_Admin_Groups->action_status()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Groups))
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/judge/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Groups.php:105
2016-12-16 15:24:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: order_by ~ APPPATH/classes/Controller/Admin/Groups.php [ 105 ] in /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Groups.php:105
2016-12-16 15:24:31 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Groups.php(105): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 105, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(271): Controller_Admin_Groups->action_status()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Groups))
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/judge/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Groups.php:105
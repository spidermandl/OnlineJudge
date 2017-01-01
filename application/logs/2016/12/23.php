<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-23 09:50:46 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT * FROM `solution` JOIN `users` ON (`solution`.`user_id` = `users`.`user_id`) WHERE `users`.`group_id` = 'dec2016' AND `user_id` = 'xuelei' ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-23 09:50:46 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(537): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Solution.php(64): Model_Solution::find(Array, '1', 50, Array, 'dec2016')
#3 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-23 09:50:50 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT * FROM `solution` JOIN `users` ON (`solution`.`user_id` = `users`.`user_id`) WHERE `users`.`group_id` = 'dec2016' AND `user_id` = 'xuelei' ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-23 09:50:50 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(537): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Solution.php(64): Model_Solution::find(Array, '1', 50, Array, 'dec2016')
#3 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
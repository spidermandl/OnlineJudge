<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-25 10:45:35 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT * FROM `solution` JOIN `users` ON (`solution`.`user_id` = `users`.`user_id`) WHERE `users`.`group_id` = 'hsd2016' AND `user_id` = 'qiaofei' ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-25 10:45:35 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(537): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Solution.php(64): Model_Solution::find(Array, '1', 50, Array, 'hsd2016')
#3 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-25 10:45:38 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT * FROM `solution` JOIN `users` ON (`solution`.`user_id` = `users`.`user_id`) WHERE `users`.`group_id` = 'hsd2016' AND `user_id` = 'qiaofei' ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-25 10:45:38 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(537): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Solution.php(64): Model_Solution::find(Array, '1', 50, Array, 'hsd2016')
#3 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-25 10:45:46 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT * FROM `solution` JOIN `users` ON (`solution`.`user_id` = `users`.`user_id`) WHERE `users`.`group_id` = 'hsd2016' AND `user_id` = 'lizi' ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-25 10:45:46 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(537): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Solution.php(64): Model_Solution::find(Array, '1', 50, Array, 'hsd2016')
#3 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-25 15:30:13 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT * FROM `solution` JOIN `users` ON (`solution`.`user_id` = `users`.`user_id`) WHERE `users`.`group_id` = 'hsd2016' AND `user_id` = '苏春雨' ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-25 15:30:13 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(537): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Solution.php(64): Model_Solution::find(Array, '1', 50, Array, 'hsd2016')
#3 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-25 16:15:41 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in field list is ambiguous [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                JOIN users ON users.user_id = solution.user_id
                WHERE result = 4
                AND problem_id = '1048'
                AND users.group_id = 'dec2016'
                GROUP BY solution_id,solution.user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-25 16:15:41 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(383): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Model/Problem.php(189): Model_Solution::solution_by_rank('dec2016', '1048', 0, 50)
#3 /home/OnlineJudge/application/classes/Controller/Problem.php(380): Model_Problem->best_solution('dec2016', 0, 50)
#4 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#10 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-25 17:04:04 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in field list is ambiguous [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                JOIN users ON users.user_id = solution.user_id
                WHERE result = 4
                AND problem_id = '10011'
                AND users.group_id = 'hsd2016'
                GROUP BY solution_id,solution.user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-25 17:04:04 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(383): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Model/Problem.php(189): Model_Solution::solution_by_rank('hsd2016', '10011', 0, 50)
#3 /home/OnlineJudge/application/classes/Controller/Problem.php(380): Model_Problem->best_solution('hsd2016', 0, 50)
#4 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#10 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-25 21:43:25 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in field list is ambiguous [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                JOIN users ON users.user_id = solution.user_id
                WHERE result = 4
                AND problem_id = '10012'
                AND users.group_id = 'hsd2016'
                GROUP BY solution_id,solution.user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-25 21:43:25 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(383): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Model/Problem.php(189): Model_Solution::solution_by_rank('hsd2016', '10012', 0, 50)
#3 /home/OnlineJudge/application/classes/Controller/Problem.php(380): Model_Problem->best_solution('hsd2016', 0, 50)
#4 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#10 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-21 09:53:20 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in field list is ambiguous [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                JOIN users ON users.user_id = solution.user_id
                WHERE result = 4
                AND problem_id = '1008'
                AND users.group_id = 'dec2016'
                GROUP BY solution_id,solution.user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-21 09:53:20 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(383): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Model/Problem.php(189): Model_Solution::solution_by_rank('dec2016', '1008', 0, 50)
#3 /home/OnlineJudge/application/classes/Controller/Problem.php(464): Model_Problem->best_solution('dec2016', 0, 50)
#4 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#10 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-21 10:45:27 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Model/GroupConfig.php [ 38 ] in file:line
2016-12-21 10:45:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-21 11:29:20 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Model/GroupConfig.php [ 38 ] in file:line
2016-12-21 11:29:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-21 16:49:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Cron' not found ~ APPPATH/cron.php [ 29 ] in file:line
2016-12-21 16:49:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-21 17:13:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Cron' not found ~ APPPATH/cron.php [ 29 ] in file:line
2016-12-21 17:13:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-21 17:20:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Cron' not found ~ APPPATH/cron.php [ 29 ] in file:line
2016-12-21 17:20:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-21 17:22:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Cron' not found ~ APPPATH/cron.php [ 29 ] in file:line
2016-12-21 17:22:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-21 17:59:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Cron' not found ~ APPPATH/cron.php [ 29 ] in file:line
2016-12-21 17:59:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-21 17:59:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Cron' not found ~ APPPATH/cron.php [ 29 ] in file:line
2016-12-21 17:59:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-21 18:07:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Cron' not found ~ APPPATH/cron.php [ 29 ] in file:line
2016-12-21 18:07:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-21 19:46:21 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in field list is ambiguous [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                JOIN users ON users.user_id = solution.user_id
                WHERE result = 4
                AND problem_id = '1006'
                AND users.group_id = 'dec2016'
                GROUP BY solution_id,solution.user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-21 19:46:21 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(383): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Model/Problem.php(189): Model_Solution::solution_by_rank('dec2016', '1006', 0, 50)
#3 /home/OnlineJudge/application/classes/Controller/Problem.php(379): Model_Problem->best_solution('dec2016', 0, 50)
#4 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#10 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-21 19:46:23 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in field list is ambiguous [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                JOIN users ON users.user_id = solution.user_id
                WHERE result = 4
                AND problem_id = '1006'
                AND users.group_id = 'dec2016'
                GROUP BY solution_id,solution.user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-21 19:46:23 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(383): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Model/Problem.php(189): Model_Solution::solution_by_rank('dec2016', '1006', 0, 50)
#3 /home/OnlineJudge/application/classes/Controller/Problem.php(379): Model_Problem->best_solution('dec2016', 0, 50)
#4 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#10 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-21 19:46:26 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in field list is ambiguous [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                JOIN users ON users.user_id = solution.user_id
                WHERE result = 4
                AND problem_id = '1006'
                AND users.group_id = 'dec2016'
                GROUP BY solution_id,solution.user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-21 19:46:26 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(383): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Model/Problem.php(189): Model_Solution::solution_by_rank('dec2016', '1006', 0, 50)
#3 /home/OnlineJudge/application/classes/Controller/Problem.php(379): Model_Problem->best_solution('dec2016', 0, 50)
#4 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#10 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-21 19:46:29 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in field list is ambiguous [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                JOIN users ON users.user_id = solution.user_id
                WHERE result = 4
                AND problem_id = '1006'
                AND users.group_id = 'dec2016'
                GROUP BY solution_id,solution.user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-21 19:46:29 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(383): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Model/Problem.php(189): Model_Solution::solution_by_rank('dec2016', '1006', 0, 50)
#3 /home/OnlineJudge/application/classes/Controller/Problem.php(379): Model_Problem->best_solution('dec2016', 0, 50)
#4 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#10 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-21 19:46:31 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in field list is ambiguous [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                JOIN users ON users.user_id = solution.user_id
                WHERE result = 4
                AND problem_id = '1006'
                AND users.group_id = 'dec2016'
                GROUP BY solution_id,solution.user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-21 19:46:31 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(383): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Model/Problem.php(189): Model_Solution::solution_by_rank('dec2016', '1006', 0, 50)
#3 /home/OnlineJudge/application/classes/Controller/Problem.php(379): Model_Problem->best_solution('dec2016', 0, 50)
#4 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#10 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-21 19:48:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Cron' not found ~ APPPATH/classes/cron.php [ 9 ] in file:line
2016-12-21 19:48:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-21 19:48:53 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in field list is ambiguous [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                JOIN users ON users.user_id = solution.user_id
                WHERE result = 4
                AND problem_id = '1006'
                AND users.group_id = 'dec2016'
                GROUP BY solution_id,solution.user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-21 19:48:53 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(383): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Model/Problem.php(189): Model_Solution::solution_by_rank('dec2016', '1006', 0, 50)
#3 /home/OnlineJudge/application/classes/Controller/Problem.php(379): Model_Problem->best_solution('dec2016', 0, 50)
#4 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#10 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-21 19:48:56 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in field list is ambiguous [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                JOIN users ON users.user_id = solution.user_id
                WHERE result = 4
                AND problem_id = '1006'
                AND users.group_id = 'dec2016'
                GROUP BY solution_id,solution.user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-21 19:48:56 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(383): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Model/Problem.php(189): Model_Solution::solution_by_rank('dec2016', '1006', 0, 50)
#3 /home/OnlineJudge/application/classes/Controller/Problem.php(379): Model_Problem->best_solution('dec2016', 0, 50)
#4 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#10 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-21 19:50:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-12-21 19:50:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-21 20:01:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-12-21 20:01:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-21 20:10:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'MySQLi' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-12-21 20:10:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-21 20:12:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-12-21 20:12:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-21 20:17:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-12-21 20:17:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-21 20:22:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-12-21 20:22:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-21 20:36:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'mysqli' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in file:line
2016-12-21 20:36:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
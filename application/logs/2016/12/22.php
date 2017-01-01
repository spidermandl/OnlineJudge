<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-22 15:27:36 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT * FROM `solution` JOIN `users` ON (`solution`.`user_id` = `users`.`user_id`) WHERE `users`.`group_id` = 'dec2016' AND `user_id` = 'liuxuxu' ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 15:27:36 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(537): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Solution.php(64): Model_Solution::find(Array, '1', 50, Array, 'dec2016')
#3 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 15:28:00 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT * FROM `solution` JOIN `users` ON (`solution`.`user_id` = `users`.`user_id`) WHERE `users`.`group_id` = 'dec2016' AND `user_id` = 'liuxuxu' ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 15:28:00 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(537): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Solution.php(64): Model_Solution::find(Array, '1', 50, Array, 'dec2016')
#3 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 16:51:18 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in field list is ambiguous [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                JOIN users ON users.user_id = solution.user_id
                WHERE result = 4
                AND problem_id = '104'
                AND users.group_id = 'dec2016'
                GROUP BY solution_id,solution.user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 16:51:18 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(383): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Model/Problem.php(189): Model_Solution::solution_by_rank('dec2016', '104', 0, 50)
#3 /home/OnlineJudge/application/classes/Controller/Problem.php(380): Model_Problem->best_solution('dec2016', 0, 50)
#4 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#10 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 17:03:04 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in field list is ambiguous [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                JOIN users ON users.user_id = solution.user_id
                WHERE result = 4
                AND problem_id = '1039'
                AND users.group_id = 'dec2016'
                GROUP BY solution_id,solution.user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 17:03:04 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(383): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Model/Problem.php(189): Model_Solution::solution_by_rank('dec2016', '1039', 0, 50)
#3 /home/OnlineJudge/application/classes/Controller/Problem.php(380): Model_Problem->best_solution('dec2016', 0, 50)
#4 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#10 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 17:03:08 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in field list is ambiguous [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                JOIN users ON users.user_id = solution.user_id
                WHERE result = 4
                AND problem_id = '1039'
                AND users.group_id = 'dec2016'
                GROUP BY solution_id,solution.user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 17:03:08 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(383): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Model/Problem.php(189): Model_Solution::solution_by_rank('dec2016', '1039', 0, 50)
#3 /home/OnlineJudge/application/classes/Controller/Problem.php(380): Model_Problem->best_solution('dec2016', 0, 50)
#4 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#10 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 17:03:11 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in field list is ambiguous [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                JOIN users ON users.user_id = solution.user_id
                WHERE result = 4
                AND problem_id = '1039'
                AND users.group_id = 'dec2016'
                GROUP BY solution_id,solution.user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 17:03:11 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(383): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Model/Problem.php(189): Model_Solution::solution_by_rank('dec2016', '1039', 0, 50)
#3 /home/OnlineJudge/application/classes/Controller/Problem.php(380): Model_Problem->best_solution('dec2016', 0, 50)
#4 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#10 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 20:56:25 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT * FROM `solution` JOIN `users` ON (`solution`.`user_id` = `users`.`user_id`) WHERE `users`.`group_id` = 'dec2016' AND `user_id` = 'xuelei' ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 20:56:25 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(537): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Solution.php(64): Model_Solution::find(Array, '1', 50, Array, 'dec2016')
#3 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 20:56:28 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT * FROM `solution` JOIN `users` ON (`solution`.`user_id` = `users`.`user_id`) WHERE `users`.`group_id` = 'dec2016' AND `user_id` = 'xuelei' ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 20:56:28 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(537): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Solution.php(64): Model_Solution::find(Array, '1', 50, Array, 'dec2016')
#3 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 20:56:29 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT * FROM `solution` JOIN `users` ON (`solution`.`user_id` = `users`.`user_id`) WHERE `users`.`group_id` = 'dec2016' AND `user_id` = 'xuelei' ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 20:56:29 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(537): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Solution.php(64): Model_Solution::find(Array, '1', 50, Array, 'dec2016')
#3 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 20:56:30 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT * FROM `solution` JOIN `users` ON (`solution`.`user_id` = `users`.`user_id`) WHERE `users`.`group_id` = 'dec2016' AND `user_id` = 'xuelei' ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 20:56:30 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(537): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Solution.php(64): Model_Solution::find(Array, '1', 50, Array, 'dec2016')
#3 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 20:56:43 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT * FROM `solution` JOIN `users` ON (`solution`.`user_id` = `users`.`user_id`) WHERE `users`.`group_id` = 'dec2016' AND `user_id` = 'xuelei' ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-12-22 20:56:43 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(537): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Solution.php(64): Model_Solution::find(Array, '1', 50, Array, 'dec2016')
#3 /home/OnlineJudge/application/classes/Controller/Base.php(271): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(104): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
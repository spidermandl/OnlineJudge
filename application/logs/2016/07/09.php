<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-09 21:51:52 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.reply' doesn't exist [ INSERT INTO `reply` (`rid`, `author_id`, `time`, `content`, `topic_id`, `status`, `ip`) VALUES (NULL, 'admin', '2016-07-09 21:51:52', 'nothing', 1, 0, '127.0.0.1') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-07-09 21:51:52 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `re...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Discuss.php(153): Model_Base->save()
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Discuss->action_new()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Discuss))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-07-09 21:54:43 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.reply' doesn't exist [ DELETE FROM `reply` WHERE `topic_id` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-07-09 21:54:43 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(4, 'DELETE FROM `re...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Base.php(175): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Model/Topic.php(83): Model_Base::delete(Array)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Discuss.php(121): Model_Topic->destroy()
#4 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Discuss->action_batch()
#5 [internal function]: Controller_Base->execute()
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Discuss))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-07-09 21:59:05 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.reply' doesn't exist [ SELECT * FROM `reply` WHERE `topic_id` = '1' ORDER BY `time` ASC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-07-09 21:59:05 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Reply', Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Model/Topic.php(42): Model_Base::find(Array, 1, 50, Array)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Discuss.php(44): Model_Topic->replies()
#4 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Discuss->action_topic()
#5 [internal function]: Controller_Base->execute()
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Discuss))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
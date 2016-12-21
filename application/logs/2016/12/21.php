<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-21 17:51:10 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Cron.php [ 3 ] in /Users/Desmond/Sites/judge/application/classes/Cron.php:3
2016-12-21 17:51:10 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Cron.php(3): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/Desmond/...', 3, Array)
#1 /Users/Desmond/Sites/judge/system/classes/Kohana/Core.php(511): require('/Users/Desmond/...')
#2 [internal function]: Kohana_Core::auto_load('Cron')
#3 /Users/Desmond/Sites/judge/application/cron.php(29): spl_autoload_call('Cron')
#4 {main} in /Users/Desmond/Sites/judge/application/classes/Cron.php:3
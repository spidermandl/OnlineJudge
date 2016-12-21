<?php

/**
 * Cron model
 *
 *
 * @package    OC
 * @category   Cron
 * @author     Chema <chema@open-classifieds.com>
 * @copyright  (c) 2009-2014 Open Classifieds Team
 * @license    GPL v3
 */
// ignore_user_abort(TRUE); 
set_time_limit(0);
ini_set('memory_limit', '1024M');
// Path to Kohana's index.php // REVIEW this depends on your APP is in different folder
$system = dirname(__DIR__).DIRECTORY_SEPARATOR.'index.php';
var_dump($system);
//$system = '/var/www/open-classifieds/index.php';

if (file_exists($system))
{
	defined('SUPPRESS_REQUEST') or define('SUPPRESS_REQUEST', TRUE);
        include $system;
	require APPPATH.'classes/Task/Ranker'.EXT;
	require APPPATH.'classes/Task/DataTracker'.EXT;
    //Task_Ranker::update_user_score();
    //execute all the crons
	echo Cron::run();
}

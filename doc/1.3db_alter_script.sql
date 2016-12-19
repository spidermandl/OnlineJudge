CREATE TABLE `temp_accept` (
	`accept_id` int(11) NOT NULL AUTO_INCREMENT,
	`user_id` varchar(48) NOT NULL,
	`problem_id` int(11) NOT NULL,
	`pending1` text,
	`pending2` text,
	`pending3` text,
	PRIMARY KEY (`accept_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE `crontab` (
	`id_crontab` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	`period` varchar(50) NOT NULL,
	`callback` varchar(140) NOT NULL,
	`params` varchar(255) DEFAULT NULL,
	`description` varchar(255) DEFAULT NULL,
	`date_created` timestamp NOT NULL,
	`date_started` datetime DEFAULT NULL,
	`date_finished` datetime DEFAULT NULL,
	`date_next` datetime DEFAULT NULL,
	`times_executed` bigint(20) DEFAULT 0,
	`output` varchar(50) DEFAULT NULL,
	`running` tinyint(1) NOT NULL DEFAULT '0',
	`active` tinyint(1) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id_crontab`),
	UNIQUE KEY `crontab_UK_name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

insert into `crontab` ( `name`, `period`, `callback`, `params`, `description`, `date_created`, `date_started`, `date_finished`, `date_next`, `times_executed`, `output`, `running`, `active`) values ( 'update_user_score', '* * * * *', 'Task_Ranker::update_user_score', null, null, '2016-12-12 00:56:26', '2016-12-12 14:20:27', '2016-12-12 14:20:27', '2016-12-12 14:21:00', '9', null, '0', '0');

insert into `crontab` ( `name`, `period`, `callback`, `params`, `description`, `date_created`, `date_started`, `date_finished`, `date_next`, `times_executed`, `output`, `running`, `active`) values ( 'progress_tracker', '* * * * *', 'Task_DataTracker::init_all_user_progress', null, null, '2016-12-15 01:24:29', '2016-12-12 14:20:27', '2016-12-12 14:20:27', '2016-12-12 14:21:00', null, null, '0', '1');

CREATE TABLE `invitation_code` (
	`invitation_id` int(11) NOT NULL AUTO_INCREMENT,
	`group_id` varchar(48) NOT NULL,
	`type` int(4) DEFAULT NULL,
	`cap` int(11) DEFAULT NULL,
	`creater_id` varchar(48) NOT NULL,
	`create_time` datetime NOT NULL,
	`activated_num` int(11) DEFAULT NULL,
	`expired_time` int(20) NOT NULL,
	`code` varchar(20) NOT NULL,
	`pending1` text,
	`pending2` text,
	`pending3` text,
	PRIMARY KEY (`invitation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `user_progress` (
	`progress_id` int(11) NOT NULL AUTO_INCREMENT,
	`user_id` varchar(48) NOT NULL,
	`stage` int(4) DEFAULT NULL,
	`date` datetime NOT NULL,
	`submit` int(11) DEFAULT NULL,
	`score` int(11) NOT NULL,
	`during_time` text,
	`pending1` text,
	`pending2` text,
	`pending3` text,
	PRIMARY KEY (`progress_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `user_progress` (
	`progress_id` int(11) NOT NULL AUTO_INCREMENT,
	`user_id` varchar(48) NOT NULL,
	`stage` int(4) DEFAULT NULL,
	`date` datetime NOT NULL,
	`submit` int(11) DEFAULT NULL,
	`score` int(11) NOT NULL,
	`during_time` text,
	`pending1` text,
	`pending2` text,
	`pending3` text,
	PRIMARY KEY (`progress_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
ALTER TABLE solution DROP COLUMN group_id;

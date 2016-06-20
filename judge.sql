-- MySQL dump 10.13  Distrib 5.7.12, for osx10.11 (x86_64)
--
-- Host: localhost    Database: judge
-- ------------------------------------------------------
-- Server version	5.7.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `compileinfo`
--

DROP TABLE IF EXISTS `compileinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compileinfo` (
  `solution_id` int(11) NOT NULL DEFAULT '0',
  `error` text,
  PRIMARY KEY (`solution_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compileinfo`
--

LOCK TABLES `compileinfo` WRITE;
/*!40000 ALTER TABLE `compileinfo` DISABLE KEYS */;
/*!40000 ALTER TABLE `compileinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contest`
--

DROP TABLE IF EXISTS `contest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contest` (
  `contest_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `defunct` char(1) NOT NULL DEFAULT 'N',
  `description` text,
  `private` tinyint(4) NOT NULL DEFAULT '0',
  `langmask` int(11) NOT NULL DEFAULT '0' COMMENT 'bits for LANG to mask',
  PRIMARY KEY (`contest_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contest`
--

LOCK TABLES `contest` WRITE;
/*!40000 ALTER TABLE `contest` DISABLE KEYS */;
/*!40000 ALTER TABLE `contest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contest_problem`
--

DROP TABLE IF EXISTS `contest_problem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contest_problem` (
  `problem_id` int(11) NOT NULL DEFAULT '0',
  `contest_id` int(11) DEFAULT NULL,
  `title` char(200) NOT NULL DEFAULT '',
  `num` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contest_problem`
--

LOCK TABLES `contest_problem` WRITE;
/*!40000 ALTER TABLE `contest_problem` DISABLE KEYS */;
/*!40000 ALTER TABLE `contest_problem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `custominput`
--

DROP TABLE IF EXISTS `custominput`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `custominput` (
  `solution_id` int(11) NOT NULL DEFAULT '0',
  `input_text` text,
  PRIMARY KEY (`solution_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `custominput`
--

LOCK TABLES `custominput` WRITE;
/*!40000 ALTER TABLE `custominput` DISABLE KEYS */;
/*!40000 ALTER TABLE `custominput` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loginlog`
--

DROP TABLE IF EXISTS `loginlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loginlog` (
  `user_id` varchar(48) NOT NULL DEFAULT '',
  `password` varchar(40) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  KEY `user_log_index` (`user_id`,`time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loginlog`
--

LOCK TABLES `loginlog` WRITE;
/*!40000 ALTER TABLE `loginlog` DISABLE KEYS */;
INSERT INTO `loginlog` VALUES ('spidermandl','Sd1cnKEP4R7WJlavC9v0wGsupQdmNjE0','127.0.0.1','2016-06-12 20:43:24'),('spidermandl','9V9yz1a4PBSH6KDlqO+4LrnpYD9mNjE0','127.0.0.1','2016-06-12 22:09:35'),('spidermandl','RuYbMughqcdINgr2NXvx1rUmrPFmNjE0','127.0.0.1','2016-06-12 22:09:52'),('spidermandl','9V9yz1a4PBSH6KDlqO+4LrnpYD9mNjE0','127.0.0.1','2016-06-12 22:11:21'),('spidermandl','RuYbMughqcdINgr2NXvx1rUmrPFmNjE0','127.0.0.1','2016-06-12 22:11:33'),('spidermandl','9V9yz1a4PBSH6KDlqO+4LrnpYD9mNjE0','127.0.0.1','2016-06-12 22:30:06'),('spidermandl','RuYbMughqcdINgr2NXvx1rUmrPFmNjE0','127.0.0.1','2016-06-12 22:30:26'),('spidermandl','0bsp61nCATd3alwNnXaeHaCrUqdmNjE0','127.0.0.1','2016-06-12 22:30:41'),('orientalstu','sD4JtgUF53tQhpoRZZfKo57DMBFjYmRm','127.0.0.1','2016-06-12 22:31:25'),('orientalstu','sD4JtgUF53tQhpoRZZfKo57DMBFjYmRm','127.0.0.1','2016-06-12 22:31:36'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 00:07:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 00:08:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 12:13:35'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 12:28:17'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 12:28:33'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 12:31:47'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 12:48:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 12:54:54'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 12:55:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 13:04:17'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 13:04:38'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 13:05:22'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 13:14:57'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 13:15:17'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 13:21:38'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:01'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:02'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:02'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:02'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:02'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:02'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:02'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:02'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:02'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:02'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:02'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:03'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:03'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:03'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:03'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:03'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:03'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:03'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:03'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:03'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:03'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:37:03'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:39:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:41:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:42:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 16:43:26'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 17:01:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:19'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:19'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:19'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:19'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:34:19'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:43:55'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:45:07'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:45:29'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-13 20:56:39'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 00:48:32'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 00:58:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 00:58:42'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 00:58:44'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 00:59:44'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 01:07:33'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 01:07:55'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 01:09:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 01:10:31'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 01:10:57'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 01:11:46'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 01:18:16'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 01:19:56'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 01:21:55'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 01:29:56'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 11:55:30'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 11:55:33'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 12:14:16'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 13:46:23'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 15:14:50'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 15:14:57'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 15:18:57'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 15:27:52'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 16:05:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 17:23:07'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 17:24:53'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 17:27:43'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 17:57:47'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 17:59:19'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:01:02'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:01:23'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:02:08'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:02:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:02:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:03:48'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:04:44'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:04:49'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:05:34'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:06:39'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:07:06'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:13:37'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:16:29'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:16:58'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:20:37'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:28:07'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:28:19'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:28:33'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:29:30'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:29:55'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:31:56'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:32:21'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:33:40'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:34:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:35:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:35:30'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:41:21'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:43:44'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:49:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:49:44'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:53:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:54:39'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 18:58:58'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 19:00:26'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 19:00:43'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 21:01:15'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 23:27:33'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 23:28:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 23:30:43'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 23:38:37'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 23:43:02'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 23:47:40'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 23:48:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-14 23:55:14'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 00:07:26'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 01:01:34'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 01:01:52'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:00:38'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:05:42'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:44:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:46:39'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:47:15'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:48:55'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:49:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:49:42'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:50:42'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:51:16'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:51:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:52:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:52:24'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:54:13'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:56:21'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:56:55'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:58:19'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:58:55'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 17:59:28'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 18:45:22'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 18:45:30'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 18:46:40'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 18:47:06'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 18:48:27'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 18:49:16'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:02:56'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:03:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:03:45'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:04:14'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:04:16'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:04:19'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:04:21'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:04:29'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:07:35'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:08:25'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:10:32'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:14:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:14:27'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:15:35'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:17:44'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:18:13'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:18:56'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:20:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:20:54'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:21:25'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:21:27'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:21:28'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:22:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:22:22'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:23:05'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:23:26'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:23:27'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:23:27'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:23:28'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:23:28'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:24:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:24:58'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:27:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:27:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:27:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:27:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:32:01'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:32:34'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:33:34'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:33:44'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:33:45'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:33:45'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:33:46'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:33:47'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:33:47'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:34:17'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:34:42'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:34:47'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:35:04'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:35:20'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:38:21'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:39:05'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:39:08'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:39:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:39:47'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:39:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:40:22'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:40:28'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:40:41'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:41:01'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:43:32'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:43:33'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:43:34'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:43:34'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:43:34'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:43:59'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:44:42'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:45:06'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:46:03'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:53:07'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:53:31'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:53:56'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:54:01'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:54:46'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 19:55:05'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:00:14'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:03:41'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:03:58'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:04:19'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:04:39'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:05:31'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:05:50'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:06:30'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:07:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:14:52'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:15:10'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:15:32'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:15:47'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:15:56'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:16:21'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:17:24'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:17:52'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:18:19'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:18:31'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:18:42'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:18:47'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:19:04'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:19:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:19:16'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:20:15'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:20:55'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:21:32'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:23:27'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:23:42'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:24:38'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:25:08'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:25:21'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:25:33'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:26:52'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:27:03'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:27:16'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:27:44'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:28:19'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:30:51'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:30:52'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:30:56'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:30:57'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:30:58'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:30:59'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:31:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:31:07'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:31:20'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 20:31:38'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 23:52:16'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 23:52:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 23:57:39'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 23:58:35'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 23:59:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 23:59:24'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 23:59:56'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-15 23:59:57'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:00:13'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:00:34'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:01:01'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:01:03'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:01:44'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:02:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:02:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:02:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:02:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:02:35'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:03:34'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:13:06'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:13:21'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:13:59'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:14:59'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:15:31'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:16:32'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:16:55'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 00:27:24'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:04:21'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:07:17'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:07:26'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:08:14'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:08:30'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:08:49'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:09:53'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:09:59'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:17:43'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:18:28'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:18:28'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:19:39'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:20:24'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:20:29'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:20:50'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:21:15'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:21:58'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:22:12'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:23:16'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:23:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:27:23'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:27:38'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:27:54'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 01:29:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 12:35:16'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 12:36:12'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 12:36:40'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 12:37:19'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 12:37:52'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 12:37:59'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 12:38:03'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 13:36:23'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 13:36:31'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 13:43:06'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 13:51:22'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 13:51:37'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 13:52:44'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 13:52:56'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 13:52:57'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 13:57:05'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 13:57:15'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 15:45:58'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 15:46:19'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 15:54:40'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 15:55:59'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 17:18:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 17:18:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 17:19:34'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 17:20:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 17:25:31'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 18:17:24'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 18:19:56'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 18:27:13'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 18:28:22'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 18:35:26'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 18:36:35'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 18:39:59'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 18:41:18'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 18:41:47'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 18:42:25'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 18:43:20'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 18:43:25'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 18:43:59'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 19:36:09'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 19:42:49'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 19:44:32'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 19:58:02'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 20:19:31'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 20:22:54'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 20:27:28'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 20:27:38'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-16 20:27:57'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-17 00:50:41'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-17 00:50:49'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-17 00:55:50'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-17 00:57:38'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-17 10:57:11'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-17 11:15:34'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-17 11:50:38'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-17 11:53:16'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-17 13:40:43'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-17 13:56:33'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-17 15:06:04'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-17 15:06:45'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-17 15:27:52'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-17 17:41:04'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-17 17:44:43'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-17 17:48:01'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-18 10:21:00'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-18 10:23:47'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-18 10:27:44'),('admin','jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','127.0.0.1','2016-06-18 17:47:52'),('spidermandl','9V9yz1a4PBSH6KDlqO+4LrnpYD9mNjE0','127.0.0.1','2016-06-19 01:03:59'),('spidermandl','94peyvAD0ZvPY+yDHw+iuKTrwuhmNjE0','127.0.0.1','2016-06-19 01:04:12'),('spidermandl','DYjNOR0tVcv0SjyNxas3ZKaFGmNmNjE0','127.0.0.1','2016-06-19 01:04:26'),('orientalstu','b6Y54l8rM914D3tdrnVb9rkQ9jFjYmRm','127.0.0.1','2016-06-19 15:11:43'),('orientalstu','sD4JtgUF53tQhpoRZZfKo57DMBFjYmRm','127.0.0.1','2016-06-19 15:11:49');
/*!40000 ALTER TABLE `loginlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mail`
--

DROP TABLE IF EXISTS `mail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mail` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `to_user` varchar(48) NOT NULL DEFAULT '',
  `from_user` varchar(48) NOT NULL DEFAULT '',
  `title` varchar(200) NOT NULL DEFAULT '',
  `content` text,
  `new_mail` tinyint(1) NOT NULL DEFAULT '1',
  `reply` tinyint(4) DEFAULT '0',
  `in_date` datetime DEFAULT NULL,
  `defunct` char(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`mail_id`),
  KEY `uid` (`to_user`)
) ENGINE=MyISAM AUTO_INCREMENT=1014 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mail`
--

LOCK TABLES `mail` WRITE;
/*!40000 ALTER TABLE `mail` DISABLE KEYS */;
INSERT INTO `mail` VALUES (1013,'spidermandl','admin','adfadsfa','asdfasdf',1,0,'2016-06-18 19:33:17','N');
/*!40000 ALTER TABLE `mail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(48) NOT NULL DEFAULT '',
  `title` varchar(200) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `time` datetime NOT NULL DEFAULT '2016-05-13 19:24:00',
  `importance` tinyint(4) NOT NULL DEFAULT '0',
  `defunct` char(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1004 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `online`
--

DROP TABLE IF EXISTS `online`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `online` (
  `hash` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `ua` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `refer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastmove` int(10) NOT NULL,
  `firsttime` int(10) DEFAULT NULL,
  `uri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`hash`),
  UNIQUE KEY `hash` (`hash`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `online`
--

LOCK TABLES `online` WRITE;
/*!40000 ALTER TABLE `online` DISABLE KEYS */;
/*!40000 ALTER TABLE `online` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `options` (
  `option_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL DEFAULT '',
  `desc` varchar(128) NOT NULL DEFAULT '',
  `value` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`option_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` VALUES (2,'ga_code','Google Analytics Code','UA-YOURCODE-1');
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `privilege`
--

DROP TABLE IF EXISTS `privilege`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `privilege` (
  `user_id` char(48) NOT NULL DEFAULT '',
  `rightstr` char(30) NOT NULL DEFAULT '',
  `defunct` char(1) NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privilege`
--

LOCK TABLES `privilege` WRITE;
/*!40000 ALTER TABLE `privilege` DISABLE KEYS */;
INSERT INTO `privilege` VALUES ('admin','administrator','N');
/*!40000 ALTER TABLE `privilege` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `problem`
--

DROP TABLE IF EXISTS `problem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `problem` (
  `problem_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL DEFAULT '',
  `description` text,
  `input` text,
  `output` text,
  `sample_input` text,
  `sample_output` text,
  `spj` char(1) NOT NULL DEFAULT '0',
  `hint` text,
  `source` varchar(100) DEFAULT NULL,
  `in_date` datetime DEFAULT NULL,
  `time_limit` int(11) NOT NULL DEFAULT '0',
  `memory_limit` int(11) NOT NULL DEFAULT '0',
  `defunct` char(1) NOT NULL DEFAULT 'N',
  `accepted` int(11) DEFAULT '0',
  `submit` int(11) DEFAULT '0',
  `solved` int(11) DEFAULT '0',
  PRIMARY KEY (`problem_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1002 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `problem`
--

LOCK TABLES `problem` WRITE;
/*!40000 ALTER TABLE `problem` DISABLE KEYS */;
INSERT INTO `problem` VALUES (1000,'10000','<p>Calculate a + b.</p>','<p>&nbsp;</p>\n<p class=\"p1\">Two integers a and b, separated by a space. (0&lt;=a,b&lt;=9).</p>','<p>&nbsp;</p>\n<p class=\"p1\">The sum of a and b in the first line.</p>','5 7','12','0','<p class=\"p1\">&nbsp;</p>\n<p class=\"p1\">Your program should always read from stdin(Standard Input), and write to stdout(Standard Output). Solutions to problem 10000 can be as follows:</p>\n<p class=\"p1\">&nbsp;</p>\n<p class=\"p1\">C:</p>\n<p class=\"p1\">#include</p>\n<p class=\"p2\">&nbsp;</p>\n<p class=\"p1\">int main() {</p>\n<p class=\"p1\">&nbsp;&nbsp;&nbsp;&nbsp;int a, b;</p>\n<p class=\"p1\">&nbsp;&nbsp;&nbsp;&nbsp;scanf(\"%d%d\", &amp;a, &amp;b);</p>\n<p class=\"p1\">&nbsp;&nbsp;&nbsp;&nbsp;printf(\"%d\\n\", a + b);</p>\n<p class=\"p1\">&nbsp;&nbsp;&nbsp;&nbsp;return 0;</p>\n<p class=\"p1\">}</p>\n<p class=\"p2\">&nbsp;</p>\n<p class=\"p2\">&nbsp;</p>\n<p class=\"p1\">C++:</p>\n<p class=\"p1\">#include</p>\n<p class=\"p2\">&nbsp;</p>\n<p class=\"p1\">using namespace std;</p>\n<p class=\"p2\">&nbsp;</p>\n<p class=\"p1\">int main() {</p>\n<p class=\"p1\">&nbsp;&nbsp;&nbsp;&nbsp;int a, b;</p>\n<p class=\"p1\">&nbsp;&nbsp;&nbsp;&nbsp;cin &gt;&gt; a &gt;&gt; b;</p>\n<p class=\"p1\">&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; a + b &lt;&lt; endl;</p>\n<p class=\"p1\">&nbsp;&nbsp;&nbsp;&nbsp;return 0;</p>\n<p class=\"p1\">}</p>\n<p class=\"p2\">&nbsp;</p>\n<p class=\"p2\">&nbsp;</p>\n<p class=\"p1\">Pascal:</p>\n<p class=\"p1\">program toj10000(Input, Output);</p>\n<p class=\"p2\">&nbsp;</p>\n<p class=\"p1\">var</p>\n<p class=\"p1\">&nbsp;&nbsp;&nbsp;&nbsp;a, b: Integer;</p>\n<p class=\"p1\">begin</p>\n<p class=\"p1\">&nbsp;&nbsp;&nbsp;&nbsp;readln(a, b);</p>\n<p class=\"p1\">&nbsp;&nbsp;&nbsp;&nbsp;writeln(a + b);</p>\n<p class=\"p1\">&nbsp;</p>\n<p class=\"p1\">end.</p>','','2016-06-19 15:39:27',1,1,'N',NULL,2,0),(1001,'小熊的购物单','<p><span style=\"color: #333333; font-family: \'Microsoft YaHei\', \'Hiragino Sans GB\', \'ST Heiti\', \'LiHei Pro Medium\', \'Microsoft Jhenghei\', \'Wenquanyi Micro Hei\', \'WenQuanYi Zen Hei\'; font-size: 13px; line-height: 26px; text-indent: 26px; background-color: rgba(255, 255, 255, 0.65098);\">小熊今天很开心，家里购置的新房就要领钥匙了，新房里有一间他自己专用的很宽敞的房间。更让他高兴的是，妈妈昨天对他说：&ldquo;你的房间需要购买哪些物品，怎么布置，你说了算，只要不超过N 元钱就行&rdquo;。今天一早金明就开始做预算，但是他想买的东西太多了，肯定会超过妈妈限定的N 元。于是，他把每件物品规定了一个重要度，分为5 等：用整数1~5 表示，第5 等最重要。他还从因特网上查到了每件物品的价格（都是整数元）。他希望在不超过N 元（可以等于N 元）的前提下，使每件物品的价格与重要度的乘积的总和最大。设第j 件物品的价格为v[j]，重要度为w[j]，共选中了k 件物品，编号依次为j1...jk，则所求的总和为：v[j1]*w[j1]+..+v[jk]*w[jk]请你帮助金明设计一个满足要求的购物单.</span></p>','<p style=\"margin: 0px; padding: 0px; border: 0px; font-size: 13px; vertical-align: baseline; text-indent: 2em; line-height: 2em; color: #333333; font-family: \'Microsoft YaHei\', \'Hiragino Sans GB\', \'ST Heiti\', \'LiHei Pro Medium\', \'Microsoft Jhenghei\', \'Wenquanyi Micro Hei\', \'WenQuanYi Zen Hei\'; background-color: rgba(255, 255, 255, 0.65098);\">输入的第1 行，为两个正整数，用一个空格隔开：</p>\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-size: 13px; vertical-align: baseline; text-indent: 2em; line-height: 2em; color: #333333; font-family: \'Microsoft YaHei\', \'Hiragino Sans GB\', \'ST Heiti\', \'LiHei Pro Medium\', \'Microsoft Jhenghei\', \'Wenquanyi Micro Hei\', \'WenQuanYi Zen Hei\'; background-color: rgba(255, 255, 255, 0.65098);\">N m</p>\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-size: 13px; vertical-align: baseline; text-indent: 2em; line-height: 2em; color: #333333; font-family: \'Microsoft YaHei\', \'Hiragino Sans GB\', \'ST Heiti\', \'LiHei Pro Medium\', \'Microsoft Jhenghei\', \'Wenquanyi Micro Hei\', \'WenQuanYi Zen Hei\'; background-color: rgba(255, 255, 255, 0.65098);\">（其中N（&lt;30000）表示总钱数，m(&lt;25)为希望购买物品的个数。）</p>\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-size: 13px; vertical-align: baseline; text-indent: 2em; line-height: 2em; color: #333333; font-family: \'Microsoft YaHei\', \'Hiragino Sans GB\', \'ST Heiti\', \'LiHei Pro Medium\', \'Microsoft Jhenghei\', \'Wenquanyi Micro Hei\', \'WenQuanYi Zen Hei\'; background-color: rgba(255, 255, 255, 0.65098);\">从第2 行到第m+1 行，第j 行给出了编号为j-1</p>\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-size: 13px; vertical-align: baseline; text-indent: 2em; line-height: 2em; color: #333333; font-family: \'Microsoft YaHei\', \'Hiragino Sans GB\', \'ST Heiti\', \'LiHei Pro Medium\', \'Microsoft Jhenghei\', \'Wenquanyi Micro Hei\', \'WenQuanYi Zen Hei\'; background-color: rgba(255, 255, 255, 0.65098);\">的物品的基本数据，每行有2 个非负整数</p>\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-size: 13px; vertical-align: baseline; text-indent: 2em; line-height: 2em; color: #333333; font-family: \'Microsoft YaHei\', \'Hiragino Sans GB\', \'ST Heiti\', \'LiHei Pro Medium\', \'Microsoft Jhenghei\', \'Wenquanyi Micro Hei\', \'WenQuanYi Zen Hei\'; background-color: rgba(255, 255, 255, 0.65098);\">v p</p>\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-size: 13px; vertical-align: baseline; text-indent: 2em; line-height: 2em; color: #333333; font-family: \'Microsoft YaHei\', \'Hiragino Sans GB\', \'ST Heiti\', \'LiHei Pro Medium\', \'Microsoft Jhenghei\', \'Wenquanyi Micro Hei\', \'WenQuanYi Zen Hei\'; background-color: rgba(255, 255, 255, 0.65098);\">（其中v 表示该物品的价格（v&le;10000），p 表示该物品的重要度（1~5））</p>','<p style=\"margin: 0px; padding: 0px; border: 0px; font-size: 13px; vertical-align: baseline; text-indent: 2em; line-height: 2em; color: #333333; font-family: \'Microsoft YaHei\', \'Hiragino Sans GB\', \'ST Heiti\', \'LiHei Pro Medium\', \'Microsoft Jhenghei\', \'Wenquanyi Micro Hei\', \'WenQuanYi Zen Hei\'; background-color: rgba(255, 255, 255, 0.65098);\">输出只有一个正整数，为不超过总钱数的物品的价格与重要度乘积的总和的</p>\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-size: 13px; vertical-align: baseline; text-indent: 2em; line-height: 2em; color: #333333; font-family: \'Microsoft YaHei\', \'Hiragino Sans GB\', \'ST Heiti\', \'LiHei Pro Medium\', \'Microsoft Jhenghei\', \'Wenquanyi Micro Hei\', \'WenQuanYi Zen Hei\'; background-color: rgba(255, 255, 255, 0.65098);\">最大值（&lt;100000000）</p>','1000 5\n800 2\n400 5\n300 5\n400 3\n200 2','3900','0','<p>动态规划</p>','','2016-06-20 15:54:52',2,10,'Y',NULL,0,0);
/*!40000 ALTER TABLE `problem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `runtimeinfo`
--

DROP TABLE IF EXISTS `runtimeinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `runtimeinfo` (
  `solution_id` int(11) NOT NULL DEFAULT '0',
  `error` text,
  PRIMARY KEY (`solution_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `runtimeinfo`
--

LOCK TABLES `runtimeinfo` WRITE;
/*!40000 ALTER TABLE `runtimeinfo` DISABLE KEYS */;
/*!40000 ALTER TABLE `runtimeinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `session_id` varchar(24) NOT NULL,
  `last_active` int(10) unsigned NOT NULL,
  `contents` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_active` (`last_active`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('576518c861f6d5-13299455',1466412863,'YTo0OntzOjExOiJsYXN0X2FjdGl2ZSI7aToxNDY2NDEyODYzO3M6MTE6ImxvZ2luX3RpbWVzIjtpOjE7czo5OiJhdXRoX3VzZXIiO086MTA6Ik1vZGVsX1VzZXIiOjIwOntzOjc6InVzZXJfaWQiO3M6NToiYWRtaW4iO3M6NToiZW1haWwiO3M6MTU6Ijg3NjU0MzIxQHFxLmNvbSI7czo2OiJzdWJtaXQiO3M6MToiMCI7czo2OiJzb2x2ZWQiO3M6MToiMCI7czo3OiJkZWZ1bmN0IjtzOjE6Ik4iO3M6MjoiaXAiO3M6OToiMTI3LjAuMC4xIjtzOjEwOiJhY2Nlc3N0aW1lIjtzOjE5OiIyMDE2LTA2LTE4IDE3OjQ3OjUyIjtzOjY6InZvbHVtZSI7czoxOiIxIjtzOjg6Imxhbmd1YWdlIjtzOjE6IjEiO3M6ODoicGFzc3dvcmQiO3M6MzI6ImpzdWh5elgxcGtiMm1MSnZKOGpSTllNenlsVTRNemd6IjtzOjg6InJlZ190aW1lIjtzOjE5OiIyMDE2LTA2LTEzIDAwOjA3OjExIjtzOjQ6Im5pY2siO3M6NToiYWRtaW4iO3M6Njoic2Nob29sIjtzOjQ6InN0anUiO3M6NjoibG9jYWxlIjtzOjI6ImVuIjtzOjU6InRoZW1lIjtOO3M6MTg6IgAqAHBlcm1pc3Npb25fbGlzdCI7TjtzOjI0OiIAKgByZXNvbHZlZF9wcm9ibGVtX2xpc3QiO047czoyMjoiACoAdHJ5aW5nX3Byb2JsZW1fbGlzdCI7TjtzOjIyOiIAKgBfbnVtYmVyX29mX25ld19tYWlsIjtOO3M6NjoiACoAX2RiIjtPOjE1OiJEYXRhYmFzZV9NeVNRTGkiOjY6e3M6MTc6IgAqAF9jb25uZWN0aW9uX2lkIjtzOjQwOiJkM2RjNzIxYjVhOTI0OTU4YzhiMjJjMTkwZDg5OTkyZDkxYzc3NmExIjtzOjE0OiIAKgBfaWRlbnRpZmllciI7czoxOiJgIjtzOjEwOiJsYXN0X3F1ZXJ5IjtzOjkwOiJTRUxFQ1QgYHNlc3Npb25faWRgIEZST00gYHNlc3Npb25zYCBXSEVSRSBgc2Vzc2lvbl9pZGAgPSAnNTc2NTE4Yzg2MWY2ZDUtMTMyOTk0NTUnIExJTUlUIDEiO3M6MTI6IgAqAF9pbnN0YW5jZSI7czo3OiJkZWZhdWx0IjtzOjE0OiIAKgBfY29ubmVjdGlvbiI7Tzo2OiJteXNxbGkiOjE5OntzOjEzOiJhZmZlY3RlZF9yb3dzIjtOO3M6MTE6ImNsaWVudF9pbmZvIjtOO3M6MTQ6ImNsaWVudF92ZXJzaW9uIjtOO3M6MTM6ImNvbm5lY3RfZXJybm8iO047czoxMzoiY29ubmVjdF9lcnJvciI7TjtzOjU6ImVycm5vIjtOO3M6NToiZXJyb3IiO047czoxMDoiZXJyb3JfbGlzdCI7TjtzOjExOiJmaWVsZF9jb3VudCI7TjtzOjk6Imhvc3RfaW5mbyI7TjtzOjQ6ImluZm8iO047czo5OiJpbnNlcnRfaWQiO047czoxMToic2VydmVyX2luZm8iO047czoxNDoic2VydmVyX3ZlcnNpb24iO047czo0OiJzdGF0IjtOO3M6ODoic3Fsc3RhdGUiO047czoxNjoicHJvdG9jb2xfdmVyc2lvbiI7TjtzOjk6InRocmVhZF9pZCI7TjtzOjEzOiJ3YXJuaW5nX2NvdW50IjtOO31zOjEwOiIAKgBfY29uZmlnIjthOjY6e3M6NDoidHlwZSI7czo2OiJNeVNRTGkiO3M6MTA6ImNvbm5lY3Rpb24iO2E6Mzp7czo4OiJob3N0bmFtZSI7czo5OiIxMjcuMC4wLjEiO3M6ODoiZGF0YWJhc2UiO3M6NToianVkZ2UiO3M6MTA6InBlcnNpc3RlbnQiO2I6MDt9czoxMjoidGFibGVfcHJlZml4IjtzOjA6IiI7czo3OiJjaGFyc2V0IjtzOjQ6InV0ZjgiO3M6NzoiY2FjaGluZyI7YjowO3M6OToicHJvZmlsaW5nIjtiOjE7fX19czo2OiJ2b2x1bWUiO3M6MToiMSI7fQ=='),('57657ef4dbef56-13790593',1466269491,'YToyOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxNDY2MjY5NDkxO3M6MTE6ImxvZ2luX3RpbWVzIjtpOjM7fQ=='),('576580e9624096-79954530',1466269945,'YToxOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxNDY2MjY5OTQ1O30='),('576645b50851d1-80178548',1466355373,'YTo0OntzOjExOiJsb2dpbl90aW1lcyI7aToyO3M6MTE6Imxhc3RfYWN0aXZlIjtpOjE0NjYzNTUzNzM7czo5OiJhdXRoX3VzZXIiO086MTA6Ik1vZGVsX1VzZXIiOjIwOntzOjc6InVzZXJfaWQiO3M6MTE6Im9yaWVudGFsc3R1IjtzOjU6ImVtYWlsIjtzOjE1OiIxMjM0NTY3OEBxcS5jb20iO3M6Njoic3VibWl0IjtzOjE6IjAiO3M6Njoic29sdmVkIjtzOjE6IjAiO3M6NzoiZGVmdW5jdCI7czoxOiJOIjtzOjI6ImlwIjtzOjk6IjEyNy4wLjAuMSI7czoxMDoiYWNjZXNzdGltZSI7czoxOToiMjAxNi0wNi0xOSAxNToxMTo0OSI7czo2OiJ2b2x1bWUiO3M6MToiMSI7czo4OiJsYW5ndWFnZSI7czoxOiIxIjtzOjg6InBhc3N3b3JkIjtzOjMyOiJzRDRKdGdVRjUzdFFocG9SWlpmS281N0RNQkZqWW1SbSI7czo4OiJyZWdfdGltZSI7czoxOToiMjAxNi0wNi0xMiAyMjozMToyNSI7czo0OiJuaWNrIjtzOjc6ImRlc21vbmQiO3M6Njoic2Nob29sIjtzOjI6InRqIjtzOjY6ImxvY2FsZSI7czoyOiJlbiI7czo1OiJ0aGVtZSI7TjtzOjE4OiIAKgBwZXJtaXNzaW9uX2xpc3QiO047czoyNDoiACoAcmVzb2x2ZWRfcHJvYmxlbV9saXN0IjtOO3M6MjI6IgAqAHRyeWluZ19wcm9ibGVtX2xpc3QiO047czoyMjoiACoAX251bWJlcl9vZl9uZXdfbWFpbCI7TjtzOjY6IgAqAF9kYiI7TzoxNToiRGF0YWJhc2VfTXlTUUxpIjo2OntzOjE3OiIAKgBfY29ubmVjdGlvbl9pZCI7czo0MDoiZDNkYzcyMWI1YTkyNDk1OGM4YjIyYzE5MGQ4OTk5MmQ5MWM3NzZhMSI7czoxNDoiACoAX2lkZW50aWZpZXIiO3M6MToiYCI7czoxMDoibGFzdF9xdWVyeSI7czo5MDoiU0VMRUNUIGBzZXNzaW9uX2lkYCBGUk9NIGBzZXNzaW9uc2AgV0hFUkUgYHNlc3Npb25faWRgID0gJzU3NjY0NWI1MDg1MWQxLTgwMTc4NTQ4JyBMSU1JVCAxIjtzOjEyOiIAKgBfaW5zdGFuY2UiO3M6NzoiZGVmYXVsdCI7czoxNDoiACoAX2Nvbm5lY3Rpb24iO086NjoibXlzcWxpIjoxOTp7czoxMzoiYWZmZWN0ZWRfcm93cyI7TjtzOjExOiJjbGllbnRfaW5mbyI7TjtzOjE0OiJjbGllbnRfdmVyc2lvbiI7TjtzOjEzOiJjb25uZWN0X2Vycm5vIjtOO3M6MTM6ImNvbm5lY3RfZXJyb3IiO047czo1OiJlcnJubyI7TjtzOjU6ImVycm9yIjtOO3M6MTA6ImVycm9yX2xpc3QiO047czoxMToiZmllbGRfY291bnQiO047czo5OiJob3N0X2luZm8iO047czo0OiJpbmZvIjtOO3M6OToiaW5zZXJ0X2lkIjtOO3M6MTE6InNlcnZlcl9pbmZvIjtOO3M6MTQ6InNlcnZlcl92ZXJzaW9uIjtOO3M6NDoic3RhdCI7TjtzOjg6InNxbHN0YXRlIjtOO3M6MTY6InByb3RvY29sX3ZlcnNpb24iO047czo5OiJ0aHJlYWRfaWQiO047czoxMzoid2FybmluZ19jb3VudCI7Tjt9czoxMDoiACoAX2NvbmZpZyI7YTo2OntzOjQ6InR5cGUiO3M6NjoiTXlTUUxpIjtzOjEwOiJjb25uZWN0aW9uIjthOjM6e3M6ODoiaG9zdG5hbWUiO3M6OToiMTI3LjAuMC4xIjtzOjg6ImRhdGFiYXNlIjtzOjU6Imp1ZGdlIjtzOjEwOiJwZXJzaXN0ZW50IjtiOjA7fXM6MTI6InRhYmxlX3ByZWZpeCI7czowOiIiO3M6NzoiY2hhcnNldCI7czo0OiJ1dGY4IjtzOjc6ImNhY2hpbmciO2I6MDtzOjk6InByb2ZpbGluZyI7YjoxO319fXM6Njoidm9sdW1lIjtzOjE6IjEiO30='),('5767a1612d07f4-05727051',1466409694,'YToyOntzOjY6InZvbHVtZSI7aToxO3M6MTE6Imxhc3RfYWN0aXZlIjtpOjE0NjY0MDk2OTQ7fQ==');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sim`
--

DROP TABLE IF EXISTS `sim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sim` (
  `s_id` int(11) NOT NULL,
  `sim_s_id` int(11) DEFAULT NULL,
  `sim` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sim`
--

LOCK TABLES `sim` WRITE;
/*!40000 ALTER TABLE `sim` DISABLE KEYS */;
/*!40000 ALTER TABLE `sim` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solution`
--

DROP TABLE IF EXISTS `solution`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solution` (
  `solution_id` int(11) NOT NULL AUTO_INCREMENT,
  `problem_id` int(11) NOT NULL DEFAULT '0',
  `user_id` char(48) NOT NULL,
  `time` int(11) NOT NULL DEFAULT '0',
  `memory` int(11) NOT NULL DEFAULT '0',
  `in_date` datetime NOT NULL DEFAULT '1000-01-01 00:00:00',
  `result` smallint(6) NOT NULL DEFAULT '0',
  `language` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL,
  `contest_id` int(11) DEFAULT NULL,
  `valid` tinyint(4) NOT NULL DEFAULT '1',
  `num` tinyint(4) NOT NULL DEFAULT '-1',
  `code_length` int(11) NOT NULL DEFAULT '0',
  `judgetime` datetime DEFAULT NULL,
  `pass_rate` decimal(2,2) unsigned NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`solution_id`),
  KEY `uid` (`user_id`),
  KEY `pid` (`problem_id`),
  KEY `res` (`result`),
  KEY `cid` (`contest_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1003 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solution`
--

LOCK TABLES `solution` WRITE;
/*!40000 ALTER TABLE `solution` DISABLE KEYS */;
INSERT INTO `solution` VALUES (1001,1000,'admin',0,0,'2016-06-19 17:22:12',0,0,'127.0.0.1',NULL,1,-1,107,NULL,0.00),(1002,1000,'orientalstu',0,0,'2016-06-19 17:22:57',0,0,'127.0.0.1',NULL,1,-1,107,NULL,0.00);
/*!40000 ALTER TABLE `solution` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `source_code`
--

DROP TABLE IF EXISTS `source_code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `source_code` (
  `solution_id` int(11) NOT NULL,
  `source` text NOT NULL,
  PRIMARY KEY (`solution_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `source_code`
--

LOCK TABLES `source_code` WRITE;
/*!40000 ALTER TABLE `source_code` DISABLE KEYS */;
INSERT INTO `source_code` VALUES (1001,'#include\n \nint main() {\n    int a, b;\n    scanf(\"%d%d\", &a, &b);\n    printf(\"%d\\n\", a + b);\n    return 0;\n}'),(1002,'#include\n \nint main() {\n    int a, b;\n    scanf(\"%d%d\", &a, &b);\n    printf(\"%d\\n\", a + b);\n    return 0;\n}');
/*!40000 ALTER TABLE `source_code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topic`
--

DROP TABLE IF EXISTS `topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topic` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varbinary(60) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `top_level` int(2) NOT NULL DEFAULT '0',
  `cid` int(11) DEFAULT NULL,
  `pid` int(11) NOT NULL,
  `author_id` varchar(48) NOT NULL,
  PRIMARY KEY (`tid`),
  KEY `cid` (`cid`,`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topic`
--

LOCK TABLES `topic` WRITE;
/*!40000 ALTER TABLE `topic` DISABLE KEYS */;
/*!40000 ALTER TABLE `topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` varchar(48) NOT NULL DEFAULT '',
  `email` varchar(100) DEFAULT NULL,
  `submit` int(11) DEFAULT '0',
  `solved` int(11) DEFAULT '0',
  `defunct` char(1) NOT NULL DEFAULT 'N',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `accesstime` datetime DEFAULT NULL,
  `volume` int(11) NOT NULL DEFAULT '1',
  `language` int(11) NOT NULL DEFAULT '1',
  `password` varchar(32) DEFAULT NULL,
  `reg_time` datetime DEFAULT NULL,
  `nick` varchar(100) NOT NULL DEFAULT '',
  `school` varchar(100) NOT NULL DEFAULT '',
  `locale` char(7) DEFAULT NULL,
  `theme` char(30) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('spidermandl','spiderman.dl@gmail.com',0,0,'Y','127.0.0.1','2016-06-12 20:43:24',1,1,'Sd1cnKEP4R7WJlavC9v0wGsupQdmNjE0','2016-06-12 20:43:24','desmond','tongji','en',NULL),('orientalstu','12345678@qq.com',1,0,'N','127.0.0.1','2016-06-19 15:11:49',1,0,'sD4JtgUF53tQhpoRZZfKo57DMBFjYmRm','2016-06-12 22:31:25','desmond','tj','en',NULL),('admin','87654321@qq.com',1,0,'N','127.0.0.1','2016-06-18 17:47:52',1,0,'jsuhyzX1pkb2mLJvJ8jRNYMzylU4Mzgz','2016-06-13 00:07:11','admin','stju','en',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-20 19:39:39

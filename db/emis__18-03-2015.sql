-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2015 at 02:22 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emis`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE IF NOT EXISTS `activity_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(15) NOT NULL,
  `desc` varchar(150) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `user_id`, `action`, `desc`, `time`) VALUES
(1, 3, 'update', 'Updated Students Data, ID-01152001, Nmae- rasel mia', '2015-03-15 13:03:56'),
(2, 3, 'insert', 'Created New Class Structure', '2015-03-18 07:33:00'),
(3, 3, 'insert', 'Created New Class Structure', '2015-03-18 07:36:23'),
(4, 3, 'insert', 'Created New Class Structure', '2015-03-18 07:57:09'),
(5, 3, 'update', 'Updated Class Structure, ID-1', '2015-03-18 10:25:49'),
(6, 3, 'update', 'Updated Class Structure, ID-1', '2015-03-18 10:26:20'),
(7, 3, 'update', 'Updated Class Structure, ID-1', '2015-03-18 10:27:11'),
(8, 3, 'update', 'Updated Class Structure, ID-20', '2015-03-18 10:27:51'),
(9, 3, 'update', 'Updated Class Structure, ID-20', '2015-03-18 10:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('090b1f3a5403f04b307ddf4ef4ffd020', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428446, ''),
('21fa9e53a6ec5730d49de3425bbac2dd', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428447, ''),
('23938333ca079fbd57bff7a81c14bf40', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428444, ''),
('286a9dfda533b9978279fafaa840ca49', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428446, ''),
('28d15936fbbf70de47896bbc5753d6ff', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428447, ''),
('2c17d94babd714e848a5d30c454892b2', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422429696, ''),
('2d20025fea423e45936d4b5c0717e727', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428446, ''),
('37e78a3c4ac9f5c725cbe49d04b06608', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428446, ''),
('5991604b261ffa112d511726daa628e3', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428445, ''),
('611be940e0d0ae251a8dcd0af266be2d', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428445, ''),
('65db32c5d0f3139e0fa89612d8b5158c', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422435603, ''),
('70d20e7c59d3a09f2e79d0bedc41a869', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428446, ''),
('7a07d525345d8ab813f22ced19d79475', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428446, ''),
('819610679b8eb1d782c5e5ecd3b5b1dc', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428445, ''),
('83cd35a4f625857adfcbf8ea508d00d4', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428444, ''),
('8de57b0ceb54f68b4ada8f17d3e99ed9', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428444, ''),
('af17b87f7f88bd068334a12aa60ddb97', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428444, ''),
('b2100accb0029b871bbe27b02704171c', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428444, ''),
('be9d6d6ef635402500a7f92690ee28b7', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428445, ''),
('dbc3624ace26763768e850a544f59e3b', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428445, ''),
('e030a6ad3a9c844cfae903649ba0c1a1', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428444, ''),
('f97ecddebefa3d6505dfc498107ed3d4', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428446, ''),
('ffff53e481ceb7fcef9523c2a925986d', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1422428445, '');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(20) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `status`) VALUES
(1, 'Prep-1(New)', 1, '', NULL, '2015-02-14 18:00:00', 1),
(2, 'Prep-1(Advance)', 1, '', NULL, '2015-02-15 10:23:15', 1),
(3, 'Prep-1', 1, '', NULL, '2015-02-15 10:23:15', 1),
(4, 'Prep-2', 1, '', NULL, '2015-02-15 10:23:15', 1),
(5, 'Class-I', 1, '', NULL, '2015-02-15 10:23:15', 1),
(6, 'Class-II', 1, '', NULL, '2015-02-15 10:23:15', 1),
(7, 'Class-III', 1, '', NULL, '2015-02-15 10:23:15', 1),
(8, 'Class-IV', 1, '', NULL, '2015-02-15 10:23:15', 1),
(9, 'Class-V', 1, '', NULL, '2015-02-15 10:23:15', 1),
(10, 'Class-VI', 1, '', NULL, '2015-02-15 10:23:15', 1),
(11, 'Class-VII', 1, '', NULL, '2015-02-15 10:23:15', 1),
(12, 'Class-VIII', 1, '', NULL, '2015-02-15 10:23:15', 1),
(13, 'Class-IX', 1, '', NULL, '2015-02-15 10:23:15', 1),
(14, 'Class-X', 1, '', NULL, '2015-02-15 10:23:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_struct`
--

CREATE TABLE IF NOT EXISTS `class_struct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `edu_struct_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `start_time` text NOT NULL,
  `end_time` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(25) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `edu_struct_id` (`edu_struct_id`,`class_id`,`dept_id`,`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `class_struct`
--

INSERT INTO `class_struct` (`id`, `edu_struct_id`, `class_id`, `dept_id`, `section_id`, `start_time`, `end_time`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `status`) VALUES
(1, 4, 1, 2, 8, '08:00 AM', '08:00 PM', 3, '2015-02-22 11:29:04', 3, '2015-02-22 10:29:04', 1),
(2, 4, 1, 2, 9, '00:00:00', '00:00:00', 3, '2015-02-22 11:46:43', NULL, '2015-02-22 10:46:43', 1),
(3, 4, 2, 2, 13, '00:00:00', '00:00:00', 3, '2015-02-22 12:55:13', NULL, '2015-02-22 11:55:13', 1),
(4, 4, 2, 2, 15, '00:00:00', '00:00:00', 3, '2015-02-22 12:57:34', NULL, '2015-02-22 11:57:34', 1),
(5, 6, 4, 2, 16, '00:00:00', '00:00:00', 1, '2015-02-22 13:01:57', NULL, '2015-02-22 12:01:57', 1),
(6, 6, 4, 2, 4, '00:00:00', '00:00:00', 3, '2015-02-22 13:04:57', NULL, '2015-02-22 12:04:57', 1),
(7, 6, 5, 2, 11, '00:00:00', '00:00:00', 3, '2015-02-22 13:05:43', NULL, '2015-02-22 12:05:43', 1),
(8, 6, 5, 2, 5, '00:00:00', '00:00:00', 3, '2015-02-22 13:06:06', NULL, '2015-02-22 12:06:06', 1),
(9, 6, 6, 2, 1, '00:00:00', '00:00:00', 3, '2015-02-22 13:06:37', NULL, '2015-02-22 12:06:37', 1),
(10, 6, 6, 2, 10, '00:00:00', '00:00:00', 3, '2015-02-22 13:06:58', NULL, '2015-02-22 12:06:58', 1),
(11, 6, 7, 2, 17, '00:00:00', '00:00:00', 3, '2015-02-22 13:07:31', NULL, '2015-02-22 12:07:31', 1),
(12, 6, 7, 2, 2, '00:00:00', '00:00:00', 3, '2015-02-22 13:07:55', NULL, '2015-02-22 12:07:55', 1),
(13, 6, 8, 2, 6, '00:00:00', '00:00:00', 3, '2015-02-22 13:08:22', NULL, '2015-02-22 12:08:22', 1),
(14, 6, 9, 2, 14, '00:00:00', '00:00:00', 3, '2015-02-22 13:08:48', NULL, '2015-02-22 12:08:48', 1),
(15, 6, 10, 2, 3, '00:00:00', '00:00:00', 3, '2015-02-22 13:09:18', NULL, '2015-02-22 12:09:18', 1),
(16, 6, 11, 2, 12, '00:00:00', '00:00:00', 3, '2015-02-22 13:09:53', NULL, '2015-02-22 12:09:53', 1),
(17, 6, 12, 2, 7, '00:00:00', '00:00:00', 3, '2015-02-22 13:10:53', NULL, '2015-02-22 12:10:53', 1),
(18, 6, 13, 1, 18, '00:00:00', '00:00:00', 3, '2015-02-22 13:11:20', NULL, '2015-02-22 12:11:20', 1),
(19, 6, 14, 1, 18, '00:00:00', '00:00:00', 3, '2015-02-22 13:11:38', NULL, '2015-02-22 12:11:38', 1),
(20, 5, 3, 2, 8, '12:00 AM', '12:00 AM', 3, '2015-02-26 12:57:54', 3, '2015-02-26 11:57:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_struct_std_map`
--

CREATE TABLE IF NOT EXISTS `class_struct_std_map` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` int(11) NOT NULL,
  `class_struct_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(25) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `std_id` (`std_id`,`class_struct_id`,`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `class_struct_std_map`
--

INSERT INTO `class_struct_std_map` (`id`, `std_id`, `class_struct_id`, `status`, `created_by`, `created_dt`, `modified_by`, `modified_dt`) VALUES
(3, 3, 1, 0, 3, '2015-02-26 07:55:56', NULL, '2015-02-26 06:55:56'),
(4, 3, 20, 0, 1, '2015-02-28 08:10:31', NULL, '2015-02-28 07:10:31'),
(5, 5, 20, 1, 1, '2015-02-28 08:11:39', NULL, '2015-02-28 07:11:39'),
(6, 6, 20, 1, 1, '2015-02-28 08:15:08', NULL, '2015-02-28 07:15:08'),
(7, 7, 20, 1, 1, '2015-02-28 08:16:13', NULL, '2015-02-28 07:16:13'),
(8, 8, 20, 1, 1, '2015-02-28 08:16:37', NULL, '2015-02-28 07:16:37'),
(9, 9, 20, 1, 1, '2015-02-28 08:16:55', NULL, '2015-02-28 07:16:55'),
(10, 10, 20, 1, 1, '2015-02-28 10:46:09', NULL, '2015-02-28 09:46:09'),
(11, 11, 20, 1, 1, '2015-02-28 10:48:37', NULL, '2015-02-28 09:48:37'),
(12, 12, 20, 1, 1, '2015-02-28 10:50:29', NULL, '2015-02-28 09:50:29'),
(13, 13, 20, 1, 1, '2015-02-28 10:51:26', NULL, '2015-02-28 09:51:26'),
(14, 14, 20, 1, 1, '2015-02-28 10:52:46', NULL, '2015-02-28 09:52:46'),
(15, 15, 20, 1, 1, '2015-02-28 10:53:16', NULL, '2015-02-28 09:53:16'),
(16, 16, 20, 1, 1, '2015-02-28 10:54:55', NULL, '2015-02-28 09:54:55'),
(17, 17, 20, 1, 1, '2015-02-28 10:56:03', NULL, '2015-02-28 09:56:03'),
(18, 18, 20, 1, 1, '2015-02-28 10:56:19', NULL, '2015-02-28 09:56:19'),
(19, 19, 20, 1, 1, '2015-02-28 11:15:36', NULL, '2015-02-28 10:15:36'),
(20, 20, 20, 1, 1, '2015-02-28 11:16:08', NULL, '2015-02-28 10:16:08'),
(21, 3, 19, 0, 3, '2015-03-15 11:05:18', NULL, '2015-03-15 10:05:18'),
(22, 3, 19, 1, 3, '2015-03-15 11:06:07', NULL, '2015-03-15 10:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(20) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `name`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `status`) VALUES
(1, 'Science', 1, '', 0, '2015-02-15 11:00:37', 1),
(2, 'N/A', 1, '', NULL, '2015-02-22 10:06:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `edu_struct`
--

CREATE TABLE IF NOT EXISTS `edu_struct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year_season_id` int(11) NOT NULL,
  `medium_id` int(4) NOT NULL,
  `shift_id` int(4) NOT NULL,
  `version_id` int(4) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(25) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `year_session_id` (`year_season_id`,`medium_id`,`shift_id`,`version_id`),
  KEY `version_id` (`version_id`),
  KEY `medium_id` (`medium_id`),
  KEY `shift_id` (`shift_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `edu_struct`
--

INSERT INTO `edu_struct` (`id`, `year_season_id`, `medium_id`, `shift_id`, `version_id`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `status`) VALUES
(4, 1, 4, 1, 1, 3, '2015-02-22 08:0', NULL, '2015-02-22 07:00:22', 1),
(5, 1, 4, 2, 1, 3, '2015-02-22 08:09:01', NULL, '2015-02-22 07:09:01', 1),
(6, 1, 4, 3, 1, 3, '2015-02-22 08:09:32', NULL, '2015-02-22 07:09:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE IF NOT EXISTS `features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(20) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url_alias` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3336 ;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `module_id`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `status`, `name`, `url_alias`) VALUES
(3333, 1115, 1, '2015-02-04 13:02:24', 1, '2015-02-04 12:02:24', 1, 'Student', 'student'),
(3334, 1115, 1, '2015-02-08 10:55:41', 1, '2015-02-08 09:55:41', 1, 'Employee', 'staff'),
(3335, 1115, 1, '2015-02-15 12:20:09', 0, '2015-02-15 11:20:09', 1, 'Configure', 'configure');

-- --------------------------------------------------------

--
-- Table structure for table `feature_group_map`
--

CREATE TABLE IF NOT EXISTS `feature_group_map` (
  `feature_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `feature_id` (`feature_id`,`group_id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feature_group_map`
--

INSERT INTO `feature_group_map` (`feature_id`, `group_id`, `created_by`, `created_dt`) VALUES
(3333, 2, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feature_user_map`
--

CREATE TABLE IF NOT EXISTS `feature_user_map` (
  `feature_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `feature_id` (`feature_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feature_user_map`
--

INSERT INTO `feature_user_map` (`feature_id`, `user_id`, `created_by`, `created_dt`) VALUES
(3333, 3, 1, '2015-03-14 10:08:27'),
(3334, 3, 1, '2015-03-14 10:08:27'),
(3334, 18, 1, '2015-02-09 07:09:04'),
(3335, 3, 1, '2015-03-14 10:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(20) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `type`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `status`) VALUES
(1, 'Admin', 'Adminn', 1, '0', 1, '2015-01-28 12:15:16', 1),
(2, 'test', 'test', 1, '2015-01-28 13:39:34', 1, '2015-01-28 12:39:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `medium`
--

CREATE TABLE IF NOT EXISTS `medium` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(15) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `medium`
--

INSERT INTO `medium` (`id`, `name`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `status`) VALUES
(1, 'Bangla Medium', 1, '', NULL, '2015-02-15 09:41:28', 0),
(2, 'English Medium', 1, '', NULL, '2015-02-15 09:41:28', 1),
(3, 'N/A', 1, '', NULL, NULL, 1),
(4, 'National Curriculum', 1, '', NULL, '2015-02-15 12:09:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type` varchar(45) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(20) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL DEFAULT '1',
  `url_alias` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url_alias` (`url_alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1117 ;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `type`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `status`, `url_alias`) VALUES
(1111, 'Organisation', 'admin', 1, 'organisation', 1, '2015-01-27 14:04:25', 1, 'organisation'),
(1115, 'profile', 'Information', 1, '2015-01-28 13:35:17', 1, '2015-01-28 12:35:17', 1, 'profile'),
(1116, 'Attendance', 'Institute', 1, '2015-02-08 08:15:07', 1, '2015-02-08 07:15:07', 1, 'attendance');

-- --------------------------------------------------------

--
-- Table structure for table `module_group_map`
--

CREATE TABLE IF NOT EXISTS `module_group_map` (
  `group_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(20) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `group_id` (`group_id`,`module_id`),
  KEY `module_id` (`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_group_map`
--

INSERT INTO `module_group_map` (`group_id`, `module_id`, `status`, `created_by`, `created_dt`, `modified_by`, `modified_dt`) VALUES
(2, 1111, 0, 1, '', 0, '2015-02-09 09:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `module_user_map`
--

CREATE TABLE IF NOT EXISTS `module_user_map` (
  `user_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `user_id` (`user_id`,`module_id`),
  KEY `module_id` (`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_user_map`
--

INSERT INTO `module_user_map` (`user_id`, `module_id`, `created_by`, `created_dt`) VALUES
(3, 1115, 1, '2015-03-14 10:08:27'),
(3, 1116, 1, '2015-03-14 10:08:27'),
(18, 1115, 1, '2015-02-09 07:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE IF NOT EXISTS `organisation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `dialog` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(20) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`id`, `name`, `type`, `branch`, `address`, `phone`, `mobile`, `email`, `website`, `dialog`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `status`) VALUES
(1, 'COSMO SCHOOL', 'School', 'Pallabi', 'SECTION-12, BLOCK-B, ROAD-1, HOUSE-1, PALLABI, MIRPUR, DHAKA-1216 ', '9028133', '01773-999589, 01842-900045', 'COSMO.QUERY@GMAIL.COM', 'WWW.CSCBD.INFO', 'FIRST IN CLASS FIRST IN LIFE', 1, '', 0, '2015-02-15 10:06:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(20) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `status`) VALUES
(1, 'Amber', 1, '', NULL, '2015-02-15 10:56:55', 1),
(2, 'Aurolin', 1, '', NULL, '2015-02-15 10:56:55', 1),
(3, 'Blue', 1, '', NULL, '2015-02-15 10:56:55', 1),
(4, 'Cosmos', 1, '', NULL, '2015-02-15 10:56:55', 1),
(5, 'Crimson', 1, '', NULL, '2015-02-15 10:56:55', 1),
(6, 'Green', 1, '', NULL, '2015-02-15 10:56:55', 1),
(7, 'Golden', 1, '', NULL, '2015-02-15 10:56:55', 1),
(8, 'Lily', 1, '', NULL, '2015-02-15 10:56:55', 1),
(9, 'Lotus', 1, '', NULL, '2015-02-15 10:56:55', 1),
(10, 'Orange', 1, '', NULL, '2015-02-15 10:56:55', 1),
(11, 'Pink', 1, '', NULL, '2015-02-15 10:56:55', 1),
(12, 'Purple', 1, '', NULL, '2015-02-15 10:56:55', 1),
(13, 'Rose', 1, '', NULL, '2015-02-15 10:56:55', 1),
(14, 'Sky Blue', 1, '', NULL, '2015-02-15 10:56:55', 1),
(15, 'Tube Rose', 1, '', NULL, '2015-02-15 10:56:55', 1),
(16, 'Tulip', 1, '', NULL, '2015-02-15 10:57:39', 1),
(17, 'Yellow', 1, '', NULL, '2015-02-15 10:57:39', 1),
(18, 'White', 1, '', NULL, '2015-02-15 10:57:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE IF NOT EXISTS `shift` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(15) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `name_2` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id`, `name`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `status`) VALUES
(1, 'Morning', 1, '0', NULL, NULL, 1),
(2, 'Day', 1, '0', NULL, NULL, 1),
(3, 'Full', 1, '0', NULL, NULL, 1),
(7, 'N/A', 1, '', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sibling`
--

CREATE TABLE IF NOT EXISTS `sibling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(25) NOT NULL,
  `siblings_std_id` varchar(25) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(15) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_type` varchar(25) NOT NULL,
  `staff_id` varchar(25) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `blood` varchar(15) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `national_id` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `emergency_contact_name` varchar(100) NOT NULL,
  `emergency_contact_mobile` varchar(30) NOT NULL,
  `emergency_contact_relation` varchar(30) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `marital_status` varchar(15) NOT NULL,
  `spouce_name` varchar(100) DEFAULT NULL,
  `spouce_occupation` varchar(50) DEFAULT NULL,
  `joinning_date` varchar(20) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `medium` varchar(30) DEFAULT NULL,
  `shift` varchar(30) DEFAULT NULL,
  `version` varchar(30) DEFAULT NULL,
  `class` varchar(30) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `section` varchar(30) DEFAULT NULL,
  `job_nature` varchar(30) NOT NULL,
  `working_hour` varchar(30) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(15) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_dt` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `f_occu` varchar(100) NOT NULL,
  `f_edu_quali` varchar(100) NOT NULL,
  `f_national_id` varchar(30) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_occu` varchar(100) NOT NULL,
  `m_edu_quali` varchar(100) NOT NULL,
  `m_national_id` varchar(30) NOT NULL,
  `appointed_for` varchar(50) NOT NULL,
  `working_type` varchar(30) NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `end_time` varchar(20) NOT NULL,
  `bank_acc` varchar(50) NOT NULL,
  `bank_acc_name` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_branch` varchar(100) NOT NULL,
  `quantan_grad` varchar(10) NOT NULL,
  `quantam_id` varchar(30) NOT NULL,
  `quan_prom_id` varchar(30) NOT NULL,
  `quan_branch` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff_child`
--

CREATE TABLE IF NOT EXISTS `staff_child` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `institutes_student` varchar(5) NOT NULL,
  `std_id` varchar(25) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(15) NOT NULL,
  `updated_by` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_dt` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='staff childrens informations' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff_experience`
--

CREATE TABLE IF NOT EXISTS `staff_experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(25) NOT NULL,
  `organisation` varchar(200) NOT NULL,
  `org_add` text NOT NULL,
  `designation` varchar(50) NOT NULL,
  `desig_from` varchar(25) NOT NULL,
  `desig_to` varchar(25) NOT NULL,
  `duties` text,
  `other` text,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(15) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff_promotion`
--

CREATE TABLE IF NOT EXISTS `staff_promotion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(25) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `promotion_date` varchar(15) NOT NULL,
  `increment` varchar(25) NOT NULL,
  `new_salary` varchar(25) NOT NULL,
  `working_hour` varchar(30) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(15) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff_qualification`
--

CREATE TABLE IF NOT EXISTS `staff_qualification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(25) NOT NULL,
  `exam_title` varchar(200) NOT NULL,
  `institute` varchar(200) NOT NULL,
  `board` varchar(50) NOT NULL,
  `passing_year` varchar(30) NOT NULL,
  `course_duration` varchar(30) NOT NULL,
  `result` varchar(50) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(15) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(25) NOT NULL,
  `rfid_no` varchar(100) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `name_in_bangla` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(15) NOT NULL,
  `age` varchar(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood` varchar(15) NOT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `religion` varchar(20) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `admission_requested_for` varchar(70) NOT NULL,
  `adm_written_mark` varchar(25) NOT NULL,
  `adm_student_viva_mark` varchar(25) NOT NULL,
  `adm_parents_viva_mark` varchar(25) NOT NULL,
  `adm_medical_test_mark` varchar(25) NOT NULL,
  `adm_physical_test_mark` varchar(25) NOT NULL,
  `adm_total_mark` varchar(25) NOT NULL,
  `adm_outof_mark` varchar(25) NOT NULL,
  `adm_fee` varchar(25) NOT NULL,
  `adm_prime_bank_branch` varchar(100) NOT NULL,
  `adm_date` varchar(15) NOT NULL,
  `previous_school` varchar(150) DEFAULT NULL,
  `previous_school_address` text,
  `previous_school_phone` varchar(50) DEFAULT NULL,
  `previous_school_email` varchar(50) DEFAULT NULL,
  `previous_school_last_class` varchar(50) DEFAULT NULL,
  `previous_school_result` varchar(50) DEFAULT NULL,
  `std_pic` text,
  `f_name` varchar(100) NOT NULL,
  `f_pic` text,
  `f_name_in_bangla` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_nationality` varchar(30) NOT NULL,
  `f_national_id` varchar(30) NOT NULL,
  `f_religion` varchar(30) NOT NULL,
  `f_edu_quali` varchar(50) NOT NULL,
  `f_profession` varchar(30) DEFAULT NULL,
  `f_organisation` varchar(50) DEFAULT NULL,
  `f_designation` varchar(50) DEFAULT NULL,
  `f_income` int(11) NOT NULL,
  `f_present_address` text NOT NULL,
  `f_permanent_address` text,
  `f_phone` varchar(30) DEFAULT NULL,
  `f_mobile` varchar(30) NOT NULL,
  `f_email` varchar(50) DEFAULT NULL,
  `f_blood` varchar(30) DEFAULT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_pic` text,
  `m_name_in_bangla` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_nationality` varchar(30) NOT NULL,
  `m_national_id` varchar(30) NOT NULL,
  `m_religion` varchar(30) NOT NULL,
  `m_edu_quali` varchar(50) DEFAULT NULL,
  `m_profession` varchar(30) NOT NULL,
  `m_organisation` varchar(30) DEFAULT NULL,
  `m_designation` varchar(30) DEFAULT NULL,
  `m_income` int(11) DEFAULT NULL,
  `m_present_address` text NOT NULL,
  `m_permanent_address` text,
  `m_phone` varchar(30) DEFAULT NULL,
  `m_mobile` varchar(30) NOT NULL,
  `m_email` varchar(50) DEFAULT NULL,
  `m_blood` varchar(30) DEFAULT NULL,
  `g_1_name` varchar(100) DEFAULT NULL,
  `g_1_pic` text,
  `g_1_name_in_bangla` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `g_1_relation` varchar(30) DEFAULT NULL,
  `g_1_national_id` varchar(30) DEFAULT NULL,
  `g_1_profession` varchar(50) DEFAULT NULL,
  `g_1_address` text,
  `g_1_phone` varchar(30) DEFAULT NULL,
  `g_1_mobile` varchar(30) DEFAULT NULL,
  `g_1_email` varchar(50) DEFAULT NULL,
  `g_1_blood` varchar(30) DEFAULT NULL,
  `g_2_name` varchar(100) DEFAULT NULL,
  `g_2_name_in_bangla` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `g_2_relation` varchar(30) DEFAULT NULL,
  `g_2_national_id` varchar(30) DEFAULT NULL,
  `g_2_profession` varchar(50) DEFAULT NULL,
  `g_2_address` text,
  `g_2_phone` varchar(30) DEFAULT NULL,
  `g_2_mobile` varchar(30) DEFAULT NULL,
  `g_2_email` varchar(50) DEFAULT NULL,
  `g_2_blood` varchar(30) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(20) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `std_id` (`std_id`),
  UNIQUE KEY `rfid_no` (`rfid_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `std_id`, `rfid_no`, `name`, `name_in_bangla`, `dob`, `age`, `gender`, `blood`, `nationality`, `religion`, `present_address`, `permanent_address`, `admission_requested_for`, `adm_written_mark`, `adm_student_viva_mark`, `adm_parents_viva_mark`, `adm_medical_test_mark`, `adm_physical_test_mark`, `adm_total_mark`, `adm_outof_mark`, `adm_fee`, `adm_prime_bank_branch`, `adm_date`, `previous_school`, `previous_school_address`, `previous_school_phone`, `previous_school_email`, `previous_school_last_class`, `previous_school_result`, `std_pic`, `f_name`, `f_pic`, `f_name_in_bangla`, `f_nationality`, `f_national_id`, `f_religion`, `f_edu_quali`, `f_profession`, `f_organisation`, `f_designation`, `f_income`, `f_present_address`, `f_permanent_address`, `f_phone`, `f_mobile`, `f_email`, `f_blood`, `m_name`, `m_pic`, `m_name_in_bangla`, `m_nationality`, `m_national_id`, `m_religion`, `m_edu_quali`, `m_profession`, `m_organisation`, `m_designation`, `m_income`, `m_present_address`, `m_permanent_address`, `m_phone`, `m_mobile`, `m_email`, `m_blood`, `g_1_name`, `g_1_pic`, `g_1_name_in_bangla`, `g_1_relation`, `g_1_national_id`, `g_1_profession`, `g_1_address`, `g_1_phone`, `g_1_mobile`, `g_1_email`, `g_1_blood`, `g_2_name`, `g_2_name_in_bangla`, `g_2_relation`, `g_2_national_id`, `g_2_profession`, `g_2_address`, `g_2_phone`, `g_2_mobile`, `g_2_email`, `g_2_blood`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `status`) VALUES
(3, '01152001', '1', 'rasel mia', 'কিন্তু তা বেধে রেখে এড়িয়ে চলাটা', '1990-01-05', '26', 'Male', 'o+', 'bangladeshi', 'Islam', 'dhaka', 'jhenaidah', '0', '0', '99', '98', '97', '97', '111', '118', '45000', 'pallabi', '2022-02-05', 'sai school', 'magura', '01714112800', 'srasel84@yahoo.com', 'class 10', 'first class first', '01152001.png', 'test father', '011520012.png', 'কিন্তু তা বেধে রেখে এড়িয়ে ', 'bangladeshi', '00000098765444', 'Islam', 'ms', 'business', 'business grameen', 'propiter', 100000, 'adabor', 'jhenai khulna', '01680832204', '01680832204', 's....@rard.com', 'o positive', 'test ', '011520011.png', ' বেধে রেখে এড়িয়ে ', 'bd', '9875643678', 'Islam', 'aaaaaaaaaa', 'bbbbbbbbbbbbbb', 'cccccccccccccc', 'dddddddddd', 20000, 'jhenaidah', 'jhenaidah', '00987737883', '64575890', 'dsavx@dfgh', 'b positive', 'wegrf', '011520013.png', 'এড়িয়ে ', 'testtttt', '21435t', 'ergdv', '11111111111111111', '324655654', '62334536565', 'sfjhg@stdfhg', 'b-', '11111111111111', 'gerdsfc', 'gfdsc', '2135456453', 'wetg', 'rgdf', '34235342', '125233453242', 'sd@fv', '', 3, '2015-03-15 14:03:56', NULL, '2015-02-26 06:55:56', 1),
(4, '01152002', '2', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', 'std_01152002.JPG', 'wads', 'std_011520025.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', 'std_011520024.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', 'std_011520026.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 08:10:31', NULL, '2015-02-28 07:10:31', 1),
(5, '01152003', '3', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', 'std_01152003.JPG', 'wads', 'std_011520031.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', 'std_01152003.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', 'std_011520032.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 08:11:39', NULL, '2015-02-28 07:11:39', 1),
(6, '01152004', '4', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', '01152004.JPG', 'wads', '011520041.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', '01152004.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', '011520042.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 08:15:08', NULL, '2015-02-28 07:15:08', 1),
(7, '01152005', '5', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', '01152005png.JPG', 'wads', '01152005png1.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', '01152005png.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', '01152005png2.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 08:16:13', NULL, '2015-02-28 07:16:13', 1),
(8, '01152006', '6', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', '01152006.png', 'wads', '011520062.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', '011520061.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', '011520063.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 08:16:37', NULL, '2015-02-28 07:16:37', 1),
(9, '01152007', '7', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', '01152007.png', 'wads', '011520072.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', '011520071.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', '011520073.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 08:16:55', NULL, '2015-02-28 07:16:55', 1),
(10, '01152008', '8', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', '01152008.png', 'wads', '011520082.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', '011520081.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', '011520083.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 10:46:09', NULL, '2015-02-28 09:46:09', 1),
(11, '01152009', '9', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', '01152009.png', 'wads', '011520092.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', '011520091.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', '011520093.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 10:48:37', NULL, '2015-02-28 09:48:37', 1),
(12, '01152010', '10', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', '01152010.png', 'wads', '011520102.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', '011520101.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', '011520103.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 10:50:29', NULL, '2015-02-28 09:50:29', 1),
(13, '01152011', '11', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', '01152011.png', 'wads', '011520112.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', '011520111.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', '011520113.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 10:51:25', NULL, '2015-02-28 09:51:25', 1),
(14, '01152012', '12', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', '01152012.png', 'wads', '011520122.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', '011520121.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', '011520123.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 10:52:46', NULL, '2015-02-28 09:52:46', 1),
(15, '01152013', '13', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', '01152013.png', 'wads', '011520132.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', '011520131.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', '011520133.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 10:53:16', NULL, '2015-02-28 09:53:16', 1),
(16, '01152014', '14', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', '01152014.png', 'wads', '011520142.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', '011520141.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', '011520143.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 10:54:55', NULL, '2015-02-28 09:54:55', 1),
(17, '01152015', '15', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', '01152015.png', 'wads', '011520152.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', '011520151.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', '011520153.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 10:56:03', NULL, '2015-02-28 09:56:03', 1),
(18, '01152016', '16', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', '01152016.png', 'wads', '011520162.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', '011520161.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', '011520163.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 10:56:19', NULL, '2015-02-28 09:56:19', 1),
(19, '01152017', '17', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', '01152017.png', 'wads', '011520172.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', '011520171.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', '011520173.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 11:15:36', NULL, '2015-02-28 10:15:36', 1),
(20, '01152018', '18', 'monjurul islam', 'ttt', '1990-12-10', '12', 'Male', 'o-', '', 'Islam', 'safdc', 'aS', '0', '12', '12', '12', '12', '23', '23', '12', '12234', 'dhaka', '1990-12-12', '', '', '', '', '', '', '01152018.png', 'wads', '011520182.png', '', '', 'aDS', 'Islam', '', 'ASD', '', '', 12, 'SDA', 'ASD', '01714112800', '1`32', '', '122', 'SAX', '011520181.png', '', '', '', 'Islam', '', 'ASc', '', '', 123, 'sd', 'sfa', '', '235', '', 'sad', '', '011520183.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2015-02-28 11:16:08', NULL, '2015-02-28 10:16:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(20) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `created_by`, `modified_by`) VALUES
(1, 'rasel', '$P$Bor024hR3GSWuxmCuxJlnMl8vv1lYZ/', 'srasel84@yahoo.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2015-03-18 07:24:54', '2015-01-22 07:25:46', '2015-03-18 06:24:54', NULL, NULL),
(3, 'monjurul', '$P$BY161qCdZYlq/N2t8YqdJzssdWaO2x.', 's.rasel06@gmail.com', 1, 0, '1115', NULL, NULL, NULL, NULL, '::1', '2015-03-18 11:26:02', '2015-01-29 14:08:22', '2015-03-18 10:26:02', NULL, 1),
(6, 'test', '$2a$08$zaVQljtFPFvbOB/H1mwFGO1k58WF9wd83HS.eW3sSdtNr5L01kdiW', 'tuhrtyrye@erdg', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2015-01-29 14:16:29', '2015-01-29 13:16:29', NULL, NULL),
(7, 'testt', '$2a$08$.qL1Og0lAj2aRl6ZGNIH6OJfVYaUk8jzpDpLbimXY.YYB4qoX7Z1C', '11111@aaa', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2015-02-02 07:45:06', '2015-02-02 06:45:06', NULL, NULL),
(8, 'test333', '$2a$08$bBR2NlI.i7alTELOUKSY3.KoYCVt9/p2lCe4UERg0FtD8lP0UPegi', 'tst3@ttt33', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2015-02-02 08:06:23', '2015-02-02 07:58:36', '2015-02-02 07:06:23', NULL, 1),
(15, 'user_for _test_group', '$P$B.cw9Jueh6O/H0IegbYf4eGqY9Hkh//', 'group_test@testttt', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2015-02-03 14:04:10', '2015-02-08 08:29:54', NULL, 1),
(18, 'group_testt', '$P$B3gS6n42rvX8ZWTSc7o/GLUY7Vpliq.', 'group_test@testt', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2015-02-03 14:12:35', '2015-02-04 11:24:53', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE IF NOT EXISTS `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_group_map`
--

CREATE TABLE IF NOT EXISTS `user_group_map` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` text NOT NULL,
  UNIQUE KEY `user_id` (`user_id`,`group_id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_group_map`
--

INSERT INTO `user_group_map` (`user_id`, `group_id`, `created_by`, `created_dt`) VALUES
(3, 1, 1, '2015-02-15 09:45:15'),
(15, 1, 1, '2015-02-08 09:29:54'),
(15, 2, 1, '2015-02-08 09:29:54'),
(18, 2, 1, '2015-02-04 12:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(1, 1, NULL, NULL),
(3, 3, NULL, NULL),
(4, 4, NULL, NULL),
(5, 5, NULL, NULL),
(6, 6, NULL, NULL),
(7, 7, NULL, NULL),
(8, 8, NULL, NULL),
(9, 9, NULL, NULL),
(10, 10, NULL, NULL),
(11, 11, NULL, NULL),
(12, 12, NULL, NULL),
(13, 13, NULL, NULL),
(14, 14, NULL, NULL),
(15, 15, NULL, NULL),
(16, 16, NULL, NULL),
(17, 17, NULL, NULL),
(18, 18, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `version`
--

CREATE TABLE IF NOT EXISTS `version` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(21) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `version`
--

INSERT INTO `version` (`id`, `name`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `status`) VALUES
(1, 'English', 1, '', 0, '2015-02-15 09:46:23', 1),
(2, 'Bangla', 1, '', 0, '2015-02-15 09:46:23', 1),
(3, 'N/A', 1, '', NULL, '2015-02-15 09:47:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `year_season`
--

CREATE TABLE IF NOT EXISTS `year_season` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(11) NOT NULL,
  `year` varchar(20) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(15) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `year_season`
--

INSERT INTO `year_season` (`id`, `org_id`, `year`, `status`, `created_by`, `created_dt`, `modified_by`, `modified_dt`) VALUES
(1, 1, '2015', 1, 1, '', 0, '2015-02-15 10:15:50');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `edu_struct`
--
ALTER TABLE `edu_struct`
  ADD CONSTRAINT `edu_struct_ibfk_2` FOREIGN KEY (`version_id`) REFERENCES `version` (`id`),
  ADD CONSTRAINT `edu_struct_ibfk_3` FOREIGN KEY (`medium_id`) REFERENCES `medium` (`id`),
  ADD CONSTRAINT `edu_struct_ibfk_4` FOREIGN KEY (`shift_id`) REFERENCES `shift` (`id`),
  ADD CONSTRAINT `edu_struct_ibfk_5` FOREIGN KEY (`year_season_id`) REFERENCES `year_season` (`id`);

--
-- Constraints for table `feature_group_map`
--
ALTER TABLE `feature_group_map`
  ADD CONSTRAINT `feature_group_map_ibfk_1` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `feature_group_map_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feature_user_map`
--
ALTER TABLE `feature_user_map`
  ADD CONSTRAINT `feature_user_map_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `feature_user_map_ibfk_2` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `module_group_map`
--
ALTER TABLE `module_group_map`
  ADD CONSTRAINT `module_group_map_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `module_group_map_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `module_user_map`
--
ALTER TABLE `module_user_map`
  ADD CONSTRAINT `module_user_map_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `module_user_map_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_group_map`
--
ALTER TABLE `user_group_map`
  ADD CONSTRAINT `user_group_map_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_group_map_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

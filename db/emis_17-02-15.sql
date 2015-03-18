-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2015 at 02:25 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `name`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `status`) VALUES
(1, 'Science', 1, '', 0, '2015-02-15 11:00:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `edu_struct`
--

CREATE TABLE IF NOT EXISTS `edu_struct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year_session_id` int(11) NOT NULL,
  `medium_id` int(4) NOT NULL,
  `shift_id` int(4) NOT NULL,
  `version_id` int(4) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(15) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `year_session_id` (`year_session_id`,`medium_id`,`shift_id`,`version_id`),
  KEY `version_id` (`version_id`),
  KEY `medium_id` (`medium_id`),
  KEY `shift_id` (`shift_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(3334, 1115, 1, '2015-02-08 10:55:41', 1, '2015-02-08 09:55:41', 1, 'Teacher', 'teacher'),
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
(3333, 1, 1, '2015-02-09 12:05:59'),
(3333, 2, 1, '0000-00-00 00:00:00'),
(3334, 1, 1, '2015-02-09 12:06:00');

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
(3333, 3, 1, '2015-02-15 11:23:22'),
(3334, 18, 1, '2015-02-09 07:09:04'),
(3335, 3, 1, '2015-02-15 11:23:22');

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
(1, 1115, 0, 1, '', 0, '2015-02-09 12:05:59'),
(1, 1116, 0, 1, '', 0, '2015-02-09 12:06:00'),
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
(3, 1115, 1, '2015-02-15 11:23:22'),
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
-- Table structure for table `parents`
--

CREATE TABLE IF NOT EXISTS `parents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(25) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `national_id` varchar(30) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `edu_qualification` varchar(50) DEFAULT NULL,
  `profession` varchar(50) NOT NULL,
  `organisation` varchar(100) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `yearly_income` varchar(50) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `relation_with_std` varchar(20) NOT NULL COMMENT 'Father/Mother/Gaurdian',
  `blood` varchar(15) NOT NULL,
  `pic` text,
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(15) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `name` varchar(100) NOT NULL,
  `name_in_bangla` varchar(150) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `age` varchar(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood` varchar(15) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `present_address` text NOT NULL,
  `admission_requested_for` varchar(70) NOT NULL,
  `adm_weitten_mark` varchar(25) NOT NULL,
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
  `created_by` int(11) NOT NULL,
  `created_dt` varchar(20) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `std_id` (`std_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(1, 'rasel', '$P$Bor024hR3GSWuxmCuxJlnMl8vv1lYZ/', 'srasel84@yahoo.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2015-02-17 08:30:11', '2015-01-22 07:25:46', '2015-02-17 07:30:11', NULL, NULL),
(3, 'monjurul', '$P$BY161qCdZYlq/N2t8YqdJzssdWaO2x.', 's.rasel06@gmail.com', 1, 0, '1115', NULL, NULL, NULL, NULL, '::1', '2015-02-17 12:41:53', '2015-01-29 14:08:22', '2015-02-17 11:41:53', NULL, 1),
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
  ADD CONSTRAINT `edu_struct_ibfk_1` FOREIGN KEY (`year_session_id`) REFERENCES `year_season` (`id`),
  ADD CONSTRAINT `edu_struct_ibfk_2` FOREIGN KEY (`version_id`) REFERENCES `version` (`id`),
  ADD CONSTRAINT `edu_struct_ibfk_3` FOREIGN KEY (`medium_id`) REFERENCES `medium` (`id`),
  ADD CONSTRAINT `edu_struct_ibfk_4` FOREIGN KEY (`shift_id`) REFERENCES `shift` (`id`);

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

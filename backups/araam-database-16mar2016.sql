-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2016 at 05:19 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `araampk`
--
CREATE DATABASE IF NOT EXISTS `araampk` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `araampk`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE IF NOT EXISTS `admin_table` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `fb_userid` bigint(20) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `cryptpass` varchar(254) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) NOT NULL,
  `status` enum('enabled','disabled','restricted','deleted') NOT NULL,
  `lastlogin` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4325 ;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `name`, `fb_userid`, `email`, `cryptpass`, `phone`, `mobile`, `status`, `lastlogin`) VALUES
(2, 'Ayaz', 0, 'admin@yahoo.com', 'arOgfQ.2A3zKI', '0300-2700-372', '', 'enabled', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(254) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area`, `status`) VALUES
(1, 'Lahore', 'active'),
(2, 'Rawalpindi', 'active'),
(3, 'Islamabad', 'active'),
(4, 'add here', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE IF NOT EXISTS `bids` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servicerequest_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `btype` enum('Fixed','Need more details or visit') NOT NULL,
  `message` text NOT NULL,
  `status` enum('bid','selected') NOT NULL,
  `points` int(11) NOT NULL,
  `dateadded` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `servicerequest_id_provider_id` (`servicerequest_id`,`provider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `servicerequest_id`, `provider_id`, `amount`, `btype`, `message`, `status`, `points`, `dateadded`) VALUES
(2, 2, 1, 0, 'Fixed', '', '', 0, '0000-00-00 00:00:00'),
(5, 1, 1, 1000, 'Fixed', 'test dfasasfasdfasdfasdf', 'bid', 10, '0000-00-00 00:00:00'),
(7, 12, 1, 2000, 'Fixed', 'test 2', 'bid', 0, '0000-00-00 00:00:00'),
(8, 17, 1, 1000, 'Fixed', 'test', 'bid', 10, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customername` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(254) NOT NULL,
  `cryptpass` varchar(254) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastlogin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customername`, `phone`, `email`, `cryptpass`, `status`, `datecreated`, `lastlogin`) VALUES
(1, 'test', '', 'customer1@yahoo.com', 'arOgfQ.2A3zKI', 'active', '2016-02-09 06:59:51', '0000-00-00 00:00:00'),
(2, 'add here', '', 'customer2@yahoo.com', '', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'test user', '112123123', 'customer3@yahoo.com', 'aryzHazoXUr7g', 'active', '2016-03-10 10:00:49', '0000-00-00 00:00:00'),
(4, 'My name', '', 'mytestemail1@yahoo.com', 'arhquUxnb5WHo', 'active', '2016-03-14 05:45:56', '0000-00-00 00:00:00'),
(5, 'my name', '', 'myemail01@yahoo.com', 'arAcVeCzOCesg', 'active', '2016-03-14 05:49:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provider_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `mtype` varchar(10) NOT NULL,
  `reference` varchar(254) NOT NULL,
  `receivedfrom` varchar(50) NOT NULL,
  `points` int(11) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `provider_id`, `date`, `amount`, `mtype`, `reference`, `receivedfrom`, `points`, `datecreated`) VALUES
(1, 2, '0000-00-00', '0', '', '', '', 0, '2016-03-04 06:48:02'),
(2, 1, '2016-03-09', '1000', '', '', '', 2000, '2016-03-09 07:17:35');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `messageby` enum('user','provider') NOT NULL,
  `message` text NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `project_id`, `user_id`, `provider_id`, `messageby`, `message`, `datecreated`) VALUES
(1, 1, 1, 1, 'user', 'sdafasdfasdf', '0000-00-00 00:00:00'),
(2, 1, 1, 1, 'provider', 'fasdfasdfasdfasdf', '0000-00-00 00:00:00'),
(3, 1, 1, 1, 'user', 'asdfasdfasdf', '0000-00-00 00:00:00'),
(4, 1, 1, 1, 'user', 'asdfsadfasdfds', '0000-00-00 00:00:00'),
(5, 1, 1, 1, 'user', 'asdfasdfasdf', '2016-03-10 11:44:46'),
(6, 1, 1, 1, 'user', 'asdfasdfasdf', '2016-03-10 11:50:28'),
(7, 1, 1, 1, '', 'sdfsafasdfsdafsadfsd', '2016-03-14 04:26:18'),
(8, 17, 0, 1, 'provider', 'asdfasdfasdfa', '2016-03-14 04:27:38'),
(9, 17, 0, 1, 'provider', 'second ', '2016-03-14 04:27:48'),
(10, 17, 0, 1, 'provider', 'second ', '2016-03-14 04:31:05'),
(11, 17, 0, 1, 'provider', 'dsasdfasdf', '2016-03-14 04:31:15'),
(12, 17, 0, 1, 'provider', 'dsasdfasdf', '2016-03-14 04:37:19'),
(13, 17, 0, 1, 'provider', 'dsasdfasdf', '2016-03-14 04:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(50) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `body` text NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `url`, `page_title`, `keywords`, `description`, `body`, `status`) VALUES
(1, 'pageurl', 'Page Title', '', '', '', 'active'),
(2, 'pageurl', 'Page Title', '', '', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `providerareas`
--

CREATE TABLE IF NOT EXISTS `providerareas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provider_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `subarea_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `providerareas`
--

INSERT INTO `providerareas` (`id`, `provider_id`, `area_id`, `subarea_id`) VALUES
(14, 2, 0, 2),
(15, 3, 0, 3),
(21, 1, 0, 63),
(22, 1, 0, 64),
(23, 1, 0, 65),
(24, 1, 0, 77);

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE IF NOT EXISTS `providers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_person` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(254) NOT NULL,
  `cryptpass` varchar(254) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `registration` varchar(30) NOT NULL,
  `address` varchar(254) NOT NULL,
  `city` varchar(30) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `website` varchar(254) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `status` enum('applied','active','inactive','rejected') NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastlogin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `contact_person`, `phone`, `mobile`, `email`, `cryptpass`, `company_name`, `registration`, `address`, `city`, `postcode`, `website`, `fb`, `status`, `datecreated`, `lastlogin`) VALUES
(1, 'ayaz ahmed', '03001234567', '03332134455', 'contractor1@yahoo.com', 'arOgfQ.2A3zKI', '', 'register', 'address here', 'Islamabad', 'postcode', 'http:test.com', 'none', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'test', '', '', 'contractor2@yahoo.com', 'arOgfQ.2A3zKI', '', '', '', '', '', '', '', 'active', '2016-02-17 12:23:18', '0000-00-00 00:00:00'),
(3, 'saasdfasdf', '12321321', '234234', 'contractor3@yahoo.com', 'arOgfQ.2A3zKI', 'asfdasd', '', 'asfasdf', 'asdfasdfasdf', '', '', '', 'active', '2016-02-24 04:49:01', '0000-00-00 00:00:00'),
(4, 'ayaz ahemd', '03008210313', '03332134396', 'contractor4@yahoo.com', 'arOgfQ.2A3zKI', 'my test company', '', 'some where', 'karachi', '', '', '', 'active', '2016-02-24 04:54:24', '0000-00-00 00:00:00'),
(5, 'Contractor ', '923001231231', '923331231231', 'contractor5@yahoo.com', 'arOgfQ.2A3zKI', 'some company', '1234', 'some address', 'Lahore', '1234567', '', '', 'active', '2016-03-01 10:16:11', '0000-00-00 00:00:00'),
(7, 'asfdasdf', '923001231231', '234234234', 'test@yahoo.com', 'arLkOVHpPZI5g', 'fdsafasf', 'sasafdsadf', 'asdfdasfds', 'Lahore', '121221', '', '', 'inactive', '2016-03-08 05:01:19', '0000-00-00 00:00:00'),
(8, '', '', '', '', '', '', '', '', '', '', '', '', 'active', '2016-03-08 12:22:24', '0000-00-00 00:00:00'),
(9, 'sdfasdf', 'sadfsadfdsf', 'sadfasdfsdf', 'sadfasdfsadf@yahoo.com', 'arVxnEB/UPxCY', 'asdfsadfasdf', '', 'sadfasdfsd', 'Lahore', '', '', '', 'inactive', '2016-03-10 04:18:27', '0000-00-00 00:00:00'),
(10, 'test name', '', '000000000000', 'contractor12@yahoo.com', 'arbHbqoy9Dalg', '', '', '', 'Lahore', '', '', '', 'applied', '2016-03-15 04:39:29', '0000-00-00 00:00:00'),
(11, 'tealsdkfjasd', '', '000000000000', 'contractor16@yahoo.com', 'ar7pgujFXxxf6', '', '', '', 'Lahore', '', '', '', 'applied', '2016-03-15 04:40:31', '0000-00-00 00:00:00'),
(12, 'asdfsad', '', '2323234234', 'contractor17@yahoo.com', 'ar7pgujFXxxf6', '', '', '', 'Lahore', '', '', '', 'applied', '2016-03-15 04:41:18', '0000-00-00 00:00:00'),
(13, 'asdfasfsadf', '', '12321313', 'contractor18@yahoo.com', 'ar7pgujFXxxf6', '', '', '', 'Lahore', '', '', '', 'active', '2016-03-15 04:56:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `providerservices`
--

CREATE TABLE IF NOT EXISTS `providerservices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provider_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `subservice_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `providerservices`
--

INSERT INTO `providerservices` (`id`, `provider_id`, `service_id`, `subservice_id`) VALUES
(2, 2, 0, 2),
(3, 3, 0, 3),
(16, 1, 0, 1),
(17, 1, 0, 2),
(18, 1, 0, 3),
(19, 1, 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service` varchar(254) NOT NULL,
  `points` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service`, `points`, `status`) VALUES
(1, 'Housekeeping Services', 50, 'active'),
(2, 'Information Technology', 50, 'active'),
(3, 'Legal', 50, 'active'),
(4, 'Accountancy', 50, 'active'),
(5, 'Food & Beverages', 50, 'active'),
(6, 'Events', 50, 'active'),
(7, 'Renovation and Improvement', 50, 'active'),
(8, 'Home & Office', 50, 'active'),
(9, 'Marketing', 50, 'active'),
(10, 'Water & Electric Work', 50, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `servicequestions`
--

CREATE TABLE IF NOT EXISTS `servicequestions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `question_text` varchar(254) NOT NULL,
  `question_type` enum('textbox','textarea','radio','checkbox') NOT NULL,
  `question_choices` varchar(254) NOT NULL,
  `question_others` enum('yes','no') NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `service_id_question_number` (`service_id`,`question_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `servicequestions`
--

INSERT INTO `servicequestions` (`id`, `service_id`, `question_number`, `question_text`, `question_type`, `question_choices`, `question_others`, `status`) VALUES
(1, 1, 1, 'test', 'textbox', '', 'yes', 'active'),
(2, 1, 2, 'question 2', 'textarea', '', 'no', ''),
(3, 1, 3, 'question 3', 'radio', 'a,b,c,d', 'yes', ''),
(4, 1, 4, 'question 4', 'checkbox', 'aa,bb,cc,dd', '', ''),
(5, 7, 1, 'add here 2', 'textbox', '', 'yes', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `servicerequest`
--

CREATE TABLE IF NOT EXISTS `servicerequest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `subservice_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `subarea_id` int(11) NOT NULL,
  `question_1` varchar(254) NOT NULL,
  `question_2` varchar(254) NOT NULL,
  `question_3` varchar(254) NOT NULL,
  `question_4` varchar(254) NOT NULL,
  `question_5` varchar(254) NOT NULL,
  `question_6` varchar(254) NOT NULL,
  `expected_date` varchar(20) NOT NULL,
  `estimated_date` varchar(100) NOT NULL,
  `service_description` text NOT NULL,
  `budget` varchar(100) NOT NULL,
  `attach1` varchar(254) NOT NULL,
  `attach2` varchar(254) NOT NULL,
  `attach3` varchar(254) NOT NULL,
  `attach4` varchar(254) NOT NULL,
  `attach5` varchar(254) NOT NULL,
  `requestby` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `promocode` varchar(100) NOT NULL,
  `approved` enum('submitted','approved','declined') NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `servicerequest`
--

INSERT INTO `servicerequest` (`id`, `user_id`, `service_id`, `subservice_id`, `area_id`, `subarea_id`, `question_1`, `question_2`, `question_3`, `question_4`, `question_5`, `question_6`, `expected_date`, `estimated_date`, `service_description`, `budget`, `attach1`, `attach2`, `attach3`, `attach4`, `attach5`, `requestby`, `email`, `mobile`, `promocode`, `approved`, `datecreated`) VALUES
(1, 1, 1, 1, 1, 63, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 'submitted', '0000-00-00 00:00:00'),
(2, 1, 2, 2, 2, 2, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 'submitted', '2016-02-09 06:44:55'),
(3, 0, 0, 3, 0, 3, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'test@yahoo.com', '2323423432', '', 'approved', '2016-02-29 07:54:20'),
(4, 0, 0, 1, 0, 85, 'a', 'b', 'a', '', '', '', '0000-00-00', '', 'description', '', '', '', '', '', '', '', 'test11@yahoo.com', '923331231231', '', 'approved', '2016-03-01 10:23:11'),
(13, 0, 0, 204, 0, 115, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 'declined', '2016-03-07 07:53:10'),
(14, 0, 1, 9, 1, 79, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'test@yahoo.com', '12121212212', '', 'submitted', '2016-03-08 11:41:51'),
(15, 0, 2, 20, 1, 77, 'a', 'b', 'b', 'aa,bb', '', '', '0000-00-00', '', 'test description', '1000', '', '', '', '', '', '', 'my.email@yahoo.com', '03008210313', 'none', 'submitted', '2016-03-09 04:26:21'),
(16, 0, 2, 20, 1, 77, 'a', 'b', 'b', 'aa,bb', '', '', '0000-00-00', '', 'test description', '1000', '', '', '', '', '', '', 'my.email@yahoo.com', '03008210313', 'none', 'approved', '2016-03-09 04:27:23'),
(17, 0, 1, 10, 1, 77, 'a', 'bb', 'c', 'cc,dd', '', '', '0000-00-00', '', 'project descriot', '1000', '', '', '', '', '', 'test name', 'test.email@yahoo.com', '03008210313', 'none', 'approved', '2016-03-09 04:28:46'),
(18, 0, 1, 1, 1, 75, 'sdfasdf', 'sadfsadf', 'c', 'bb,cc', '', '', '03/02/2016', '', 'asdfsadfsadf', '111', '', '', '', '', '', 'Customer', 'customer1@yahoo.com', '11212121212', '', 'submitted', '2016-03-10 09:58:45'),
(19, 0, 1, 1, 1, 75, 'sdfasdf', 'sadfsadf', 'c', 'bb,cc', '', '', '03/02/2016', '', 'asdfsadfsadf', '111', '', '', '', '', '', 'Customer', 'customer1@yahoo.com', '11212121212', '', 'submitted', '2016-03-10 09:59:36'),
(20, 0, 2, 17, 1, 80, 'sadfasd', 'sadfasdf', 'a', 'aa,bb,cc', '', '', '03/31/2016', '', 'asdfasdfasdf', '1233', '', '', '', '', '', 'test user', 'customer3@yahoo.com', '112123123', '', 'submitted', '2016-03-10 10:00:49'),
(21, 0, 1, 1, 1, 63, '', '', 'b', 'aa', '', '', '', '', '', '', '', '', '', '', '', 'my name', 'myemail01@yahoo.com', '', '', 'submitted', '2016-03-14 05:49:46'),
(22, 7, 13, 113, 1, 75, '', '', 'd', '', '', '', '', '', '', '', '', '', '', '', '', 'test', 'aalogic@gmail.com', '', '', 'submitted', '2016-03-15 06:24:48'),
(23, 0, 13, 113, 1, 75, '', '', 'd', '', '', '', '', '', '', '', '', '', '', '', '', 'test', 'aalogic@gmail.com', '', '', 'submitted', '2016-03-15 06:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `subarea`
--

CREATE TABLE IF NOT EXISTS `subarea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subarea` varchar(254) NOT NULL,
  `area_id` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

--
-- Dumping data for table `subarea`
--

INSERT INTO `subarea` (`id`, `subarea`, `area_id`, `status`) VALUES
(63, 'Model Town', 1, 'active'),
(64, 'Gulberg', 1, 'active'),
(65, 'defence', 1, 'active'),
(66, 'Shalimar Town', 1, 'active'),
(67, 'Samanabad Town', 1, 'active'),
(68, 'Iqbal Town', 1, 'active'),
(69, 'lahore cantt', 1, 'active'),
(70, 'Garden Town Lahore', 1, 'active'),
(71, 'model town', 1, 'active'),
(72, 'faisal town', 1, 'active'),
(73, 'johor town', 1, 'active'),
(74, 'bahria town', 1, 'active'),
(75, 'wapda town', 1, 'active'),
(76, 'shadman', 1, 'active'),
(77, 'Eden Gardens', 1, 'active'),
(78, 'TECH Society', 1, 'active'),
(79, 'PCSIR', 1, 'active'),
(80, 'State Life Housing Society', 1, 'active'),
(81, 'Canal View Housing Society', 1, 'active'),
(82, 'other', 1, 'active'),
(83, 'Punjab Housing Society', 1, 'active'),
(84, 'Bahria Town', 2, 'active'),
(85, 'Askari Housing Scheme', 2, 'active'),
(86, 'Chaklala Housing Scheme', 2, 'active'),
(87, 'Gulraiz Housing Scheme', 2, 'active'),
(88, 'Satellite Town Rawalpindi', 2, 'active'),
(89, 'Media Town', 2, 'active'),
(90, 'Gulzar-E-Quaid', 2, 'active'),
(91, 'PWD Colony', 2, 'active'),
(92, 'Gulistan Colony', 2, 'active'),
(93, 'Lalazar Colony', 2, 'active'),
(94, 'westridge', 2, 'active'),
(95, 'peshawar road', 2, 'active'),
(96, 'cantonment', 2, 'active'),
(97, 'valley road', 2, 'active'),
(98, 'cantt', 2, 'active'),
(99, 'shakshehzad', 2, 'active'),
(100, 'other', 2, 'active'),
(101, 'defence', 3, 'active'),
(102, 'bahria', 3, 'active'),
(103, 'f sector', 3, 'active'),
(104, 'e sector', 3, 'active'),
(105, 'g sector', 3, 'active'),
(106, 'Gulberg Green', 3, 'active'),
(107, 'bani gala', 3, 'active'),
(108, 'Naval Anchorage', 3, 'active'),
(109, 'Jinnah Garden', 3, 'active'),
(110, 'Soan Gardens', 3, 'active'),
(111, 'University Town', 3, 'active'),
(112, 'margalla town', 3, 'active'),
(113, 'Pakistan Colony', 3, 'active'),
(114, 'other', 3, 'active'),
(115, 'add here', 3, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `subservice`
--

CREATE TABLE IF NOT EXISTS `subservice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subservice` varchar(254) NOT NULL,
  `service_id` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=230 ;

--
-- Dumping data for table `subservice`
--

INSERT INTO `subservice` (`id`, `subservice`, `service_id`, `status`) VALUES
(1, 'Maid services', 1, 'active'),
(2, 'Indoor cleaning', 1, 'active'),
(3, 'pest control', 1, 'active'),
(4, 'Outdoor cleaning', 1, 'active'),
(5, 'Graphics and Design', 2, 'active'),
(6, 'Digital Marketing', 2, 'active'),
(7, 'Programming and Development', 2, 'active'),
(8, 'Photography', 2, 'active'),
(9, 'Video and Animation', 2, 'active'),
(10, 'Writing and Translation', 2, 'active'),
(11, 'Consultancy', 2, 'active'),
(12, 'Legal Consultants', 3, 'active'),
(13, 'Contract Law', 3, 'active'),
(14, 'Marriage Law', 3, 'active'),
(15, 'Company Registration Law', 3, 'active'),
(16, 'Tax Prepration', 3, 'active'),
(17, 'Corporate Law', 3, 'active'),
(18, 'Accounting Consultancy', 4, 'active'),
(19, 'Auditors', 4, 'active'),
(20, 'Financial Accounting', 4, 'active'),
(21, 'Bookkeeping', 4, 'active'),
(22, 'Software Experts', 4, 'active'),
(23, 'Caterers', 5, 'active'),
(24, 'Cake specialists', 5, 'active'),
(25, 'Finger lickin food services', 5, 'active'),
(26, 'event planner', 6, 'active'),
(27, 'Photography', 6, 'active'),
(28, 'videographer', 6, 'active'),
(29, 'Caterers', 6, 'active'),
(30, 'Carpentry & joinery', 7, 'active'),
(31, 'Landscapers', 7, 'active'),
(32, 'Architects', 7, 'active'),
(33, 'Interior designers', 7, 'active'),
(34, 'Tiling', 7, 'active'),
(35, 'Window Installation', 7, 'active'),
(36, 'Window tinting', 7, 'active'),
(37, 'Roof installation', 7, 'active'),
(38, 'Plastering', 7, 'active'),
(39, 'iron and aluminium work', 7, 'active'),
(40, 'Floor repair & replacement', 7, 'active'),
(41, 'Floor installation', 7, 'active'),
(42, 'painting', 7, 'active'),
(43, 'Glass work', 7, 'active'),
(44, 'Door installation', 7, 'active'),
(45, 'concreting', 7, 'active'),
(46, 'Architects', 8, 'active'),
(47, 'Interior designers', 8, 'active'),
(48, 'Landscapers', 8, 'active'),
(49, 'Renovation & Improvement', 8, 'active'),
(50, 'Digital Marketing', 9, 'active'),
(51, 'advertising', 9, 'active'),
(52, 'Video and Animation', 9, 'active'),
(53, 'Graphic and Design', 9, 'active'),
(54, 'Plumbing Installation', 10, 'active'),
(55, 'Plumbing repair', 10, 'active'),
(56, 'Water heater installation', 10, 'active'),
(57, 'Water heater repair', 10, 'active'),
(58, 'Water proofing installation', 10, 'active'),
(59, 'Water proofing repair', 10, 'active'),
(60, 'Three phase wiring', 10, 'active'),
(61, 'Fan installation', 10, 'active'),
(62, 'Lighting installation', 10, 'active'),
(63, 'Lighting repair', 10, 'active'),
(64, 'Wiring powerpoint', 10, 'active'),
(65, 'Air condition service & repair', 10, 'active'),
(66, 'Air condition supply', 10, 'active'),
(67, 'Air conditioner installation', 10, 'active'),
(68, 'Generator repair & install', 10, 'active'),
(69, 'Geyser repair & install', 10, 'active'),
(70, 'Home appliance installation', 10, 'active'),
(71, 'Ups repair & install', 10, 'active'),
(205, '', 0, ''),
(206, '', 0, ''),
(207, '', 0, ''),
(208, '', 0, ''),
(209, '', 0, ''),
(210, '', 0, ''),
(211, '', 0, ''),
(212, '', 0, ''),
(213, '', 0, ''),
(214, '', 0, ''),
(215, '', 0, ''),
(216, '', 0, ''),
(217, '', 0, ''),
(218, '', 0, ''),
(219, '', 0, ''),
(220, '', 0, ''),
(221, '', 0, ''),
(222, '', 0, ''),
(223, '', 0, ''),
(224, '', 0, ''),
(225, '', 0, ''),
(226, '', 0, ''),
(227, '', 0, ''),
(228, '', 0, ''),
(229, '', 0, '');

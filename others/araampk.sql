-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2017 at 02:20 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area`, `status`) VALUES
(1, 'Karachi', 'active'),
(2, 'Lahore', 'active'),
(3, 'Faisalabad', 'active'),
(4, 'Rawalpindi', 'active'),
(5, 'Multan', 'active'),
(6, 'Gujranwala', 'active'),
(7, 'Hyderabad', 'active'),
(8, 'Peshawar', 'active'),
(9, 'Islamabad', 'active'),
(10, 'Quetta', 'active'),
(11, 'Sargodha', 'active'),
(12, 'Sialkot', 'active'),
(13, 'Bahawalpur', 'active'),
(14, 'Sukkur', 'active'),
(15, 'Jhang', 'active'),
(16, 'Shekhupura', 'active'),
(17, 'Mardan', 'active'),
(18, 'Gujrat', 'active'),
(19, 'Larkana', 'active'),
(20, 'Kasur', 'active'),
(21, 'Rahim Yar Khan', 'active'),
(22, 'Sahiwal', 'active'),
(23, 'Okara', 'active'),
(24, 'Wah Cantonment', 'active'),
(25, 'Dera Ghazi Khan', 'active'),
(26, 'Mingora', 'active'),
(27, 'Mirpur Khas', 'active'),
(28, 'Chiniot', 'active'),
(29, 'Nawabshah', 'active'),
(30, 'Kamoke', 'active'),
(31, 'Burewala', 'active'),
(32, 'Jhelum', 'active'),
(33, 'Sadiqabad', 'active'),
(34, 'Khanewal', 'active'),
(35, 'Hafizabad', 'active'),
(36, 'Kohat', 'active'),
(37, 'Jacobabad', 'active'),
(38, 'Shikarpur', 'active'),
(39, 'Muzaffargarh', 'active'),
(40, 'Khanpur', 'active'),
(41, 'Gojra', 'active'),
(42, 'Bahawalnagar', 'active'),
(43, 'Abbottabad', 'active'),
(44, 'Muridke', 'active'),
(45, 'Pakpattan', 'active'),
(46, 'Khuzdar', 'active'),
(47, 'Jaranwala', 'active'),
(48, 'Chishtian', 'active'),
(49, 'Daska', 'active'),
(50, 'Mandi Bahauddin', 'active'),
(51, 'Ahmadpur East', 'active'),
(52, 'Kamalia', 'active'),
(53, 'Tando Adam', 'active'),
(54, 'Khairpur', 'active'),
(55, 'Dera Ismail Khan', 'active'),
(56, 'Vehari', 'active'),
(57, 'Nowshera', 'active'),
(58, 'Dadu', 'active'),
(59, 'Wazirabad', 'active'),
(60, 'Khushab', 'active'),
(61, 'Charsada', 'active'),
(62, 'Swabi', 'active'),
(63, 'Chakwal', 'active'),
(64, 'Mianwali', 'active'),
(65, 'Tando Allahyar', 'active'),
(66, 'Kot Adu', 'active'),
(67, 'Turbat', 'active'),
(68, 'murree', 'active'),
(69, 'naran kaghan', 'active'),
(70, 'other', 'active');

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
  `status` enum('bid','selected','completed','cancelled') NOT NULL,
  `points` int(11) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rating` tinyint(4) NOT NULL,
  `review` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `servicerequest_id_provider_id` (`servicerequest_id`,`provider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `servicerequest_id`, `provider_id`, `amount`, `btype`, `message`, `status`, `points`, `dateadded`, `rating`, `review`) VALUES
(2, 1, 2, 0, 'Fixed', '', 'bid', 0, '0000-00-00 00:00:00', 0, ''),
(5, 1, 1, 1000, 'Fixed', 'test dfasasfasdfasdfasdf', 'completed', 10, '0000-00-00 00:00:00', 5, 'dsfasdfasdf'),
(7, 12, 1, 2000, 'Fixed', 'test 2', 'bid', 0, '0000-00-00 00:00:00', 0, ''),
(8, 17, 1, 1000, 'Fixed', 'test', 'bid', 10, '0000-00-00 00:00:00', 0, ''),
(9, 27, 1, 2000, 'Fixed', 'test', 'completed', 50, '2016-03-26 06:28:30', 0, ''),
(10, 33, 1, 2000, 'Fixed', 'sadfsadfsadf', 'bid', 50, '2016-03-30 04:56:11', 0, ''),
(11, 34, 1, 2000, 'Fixed', 'sadfasdfs', 'completed', 50, '2016-03-30 05:29:08', 5, 'sdfasdfsaf'),
(12, 36, 1, 2000, 'Fixed', 'asdfasdfasdfasdf', 'bid', 50, '2016-04-01 05:13:21', 0, ''),
(13, 30, 1, 1, 'Fixed', 'sdfasdfasf', 'bid', 50, '2016-04-01 05:14:53', 0, ''),
(14, 35, 1, 1, 'Fixed', 'fsadfsdf', 'bid', 50, '2016-04-01 06:34:18', 0, '');

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
  `email_verified` tinyint(4) NOT NULL,
  `phone_verified` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customername`, `phone`, `email`, `cryptpass`, `status`, `datecreated`, `lastlogin`, `email_verified`, `phone_verified`) VALUES
(1, 'test', '', 'customer1@yahoo.com', 'arOgfQ.2A3zKI', 'active', '2016-02-09 06:59:51', '0000-00-00 00:00:00', 0, 0),
(2, 'add here', '', 'customer2@yahoo.com', '', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(3, 'test user', '112123123', 'customer3@yahoo.com', 'aryzHazoXUr7g', 'active', '2016-03-10 10:00:49', '0000-00-00 00:00:00', 0, 0),
(4, 'My name', '', 'mytestemail1@yahoo.com', 'arhquUxnb5WHo', 'active', '2016-03-14 05:45:56', '0000-00-00 00:00:00', 0, 0),
(5, 'my name', '', 'myemail01@yahoo.com', 'arAcVeCzOCesg', 'active', '2016-03-14 05:49:46', '0000-00-00 00:00:00', 0, 0),
(6, 'Test Name', '', 'user11@yahoo.com', 'arpkOwNdBWrl2', 'active', '2016-03-29 04:59:37', '0000-00-00 00:00:00', 0, 0),
(7, 'Test User', '', 'user12@yahoo.com', 'arOgfQ.2A3zKI', 'active', '2016-03-29 05:06:13', '0000-00-00 00:00:00', 0, 0),
(8, 'Tester name', '', 'user13@yahoo.com', 'ar6GBA3V3tdJ2', 'active', '2016-03-29 06:57:42', '0000-00-00 00:00:00', 0, 0),
(9, 'Test User', '', 'aalogic@gmail.com', 'arCoR83B9dveE', 'active', '2016-03-30 05:15:52', '0000-00-00 00:00:00', 0, 0),
(10, 'Ahmed', '', 'myusername@yahoo.com', 'ard5CIyrv4.Us', 'active', '2016-03-30 07:48:29', '0000-00-00 00:00:00', 0, 0),
(11, 'ayaz ahmed', '', 'testuser0001@yahoo.com', 'arsRDgCIwfRFQ', 'active', '2016-03-31 04:23:38', '0000-00-00 00:00:00', 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

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
(13, 17, 0, 1, 'provider', 'dsasdfasdf', '2016-03-14 04:37:46'),
(14, 12, 1, 1, 'user', 'asdfasdfasfd', '2016-03-24 05:40:57'),
(15, 1, 1, 2, 'user', 'fdssdfasdf', '2016-03-26 05:13:26'),
(16, 17, 0, 1, 'provider', 'asdfasdfasdf', '2016-03-30 12:52:01'),
(17, 17, 0, 1, 'provider', 'asdfasdfasdf', '2016-03-30 12:54:19'),
(18, 17, 0, 1, 'provider', 'asdfasdfasdf', '2016-03-30 12:54:21'),
(19, 17, 0, 1, 'provider', 'sadfasdfasdf', '2016-03-30 12:55:10'),
(20, 17, 0, 1, 'provider', 'asdfsadfsd', '2016-03-30 12:56:11');

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
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provider_id` int(11) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `business_logo` varchar(256) NOT NULL,
  `business_description` text NOT NULL,
  `business_email` varchar(254) NOT NULL,
  `business_phone` varchar(50) NOT NULL,
  `business_fax` varchar(20) NOT NULL,
  `business_address` varchar(254) NOT NULL,
  `business_area` varchar(50) NOT NULL,
  `business_city` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `provider_id` (`provider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `provider_id`, `business_name`, `business_logo`, `business_description`, `business_email`, `business_phone`, `business_fax`, `business_address`, `business_area`, `business_city`) VALUES
(3, 1, 'sadfasdf', 'logouploads/apex-logo.jpg', 'sadfasdf', '', '', 'asdf', 'sadf', 'sdfasd', 'fsadfsadfsaf');

-- --------------------------------------------------------

--
-- Table structure for table `profileservices`
--

CREATE TABLE IF NOT EXISTS `profileservices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provider_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `service_title` varchar(254) NOT NULL,
  `service_description` text NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `image5` varchar(100) NOT NULL,
  `image6` varchar(100) NOT NULL,
  `image7` varchar(100) NOT NULL,
  `image8` varchar(100) NOT NULL,
  `image9` varchar(100) NOT NULL,
  `image10` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `profileservices`
--

INSERT INTO `profileservices` (`id`, `provider_id`, `service_id`, `service_title`, `service_description`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`) VALUES
(1, 1, 1, 'Top Quality Maid Services', 'saldfjasldfjkasldkfjasdf', 'serviceuploads/apex-logo.jpg', 'serviceuploads/over-top.jpg', 'serviceuploads/1458470082_internt_web_technology-01.png', '', '', '', '', '', '', ''),
(2, 1, 2, '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 1, 2, 'sadfsadfasdf', '', '', '', '', '', '', '', '', '', '', ''),
(4, 1, 2, 'indoor cleaning tilte', '', '', '', '', '', '', '', '', '', '', ''),
(5, 1, 2, 'indoor cleaning tilte 2', '', '', '', '', '', '', '', '', '', '', ''),
(6, 1, 6, 'adsdsfdsafdsaf 2', 'sdfasfdasdf', '', '', '', '', '', '', '', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `providerareas`
--

INSERT INTO `providerareas` (`id`, `provider_id`, `area_id`, `subarea_id`) VALUES
(38, 2, 1, 0),
(39, 2, 2, 0),
(40, 2, 9, 0),
(41, 3, 1, 0),
(42, 3, 2, 0),
(43, 3, 6, 0),
(44, 3, 7, 0),
(45, 3, 9, 0),
(46, 1, 1, 0),
(47, 1, 2, 0),
(48, 1, 3, 0),
(49, 1, 9, 0);

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
  `email_verified` tinyint(4) NOT NULL,
  `phone_verified` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `contact_person`, `phone`, `mobile`, `email`, `cryptpass`, `company_name`, `registration`, `address`, `city`, `postcode`, `website`, `fb`, `status`, `datecreated`, `lastlogin`, `email_verified`, `phone_verified`) VALUES
(1, 'ayaz ahmed', '03001234567', '03332134455', 'contractor1@yahoo.com', 'arOgfQ.2A3zKI', '', 'register', 'address here', 'Islamabad', 'postcode', 'http:test.com', 'none', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(2, 'test', '', '', 'contractor2@yahoo.com', 'arOgfQ.2A3zKI', '', '', '', '', '', '', '', 'active', '2016-02-17 12:23:18', '0000-00-00 00:00:00', 0, 0),
(3, 'saasdfasdf', '12321321', '234234', 'contractor3@yahoo.com', 'arOgfQ.2A3zKI', 'asfdasd', '', 'asfasdf', 'asdfasdfasdf', '', '', '', 'active', '2016-02-24 04:49:01', '0000-00-00 00:00:00', 0, 0),
(4, 'ayaz ahemd', '03008210313', '03332134396', 'contractor4@yahoo.com', 'arOgfQ.2A3zKI', 'my test company', '', 'some where', 'karachi', '', '', '', 'active', '2016-02-24 04:54:24', '0000-00-00 00:00:00', 0, 0),
(5, 'Contractor ', '923001231231', '923331231231', 'contractor5@yahoo.com', 'arOgfQ.2A3zKI', 'some company', '1234', 'some address', 'Lahore', '1234567', '', '', 'active', '2016-03-01 10:16:11', '0000-00-00 00:00:00', 0, 0),
(7, 'asfdasdf', '923001231231', '234234234', 'test@yahoo.com', 'arLkOVHpPZI5g', 'fdsafasf', 'sasafdsadf', 'asdfdasfds', 'Lahore', '121221', '', '', 'inactive', '2016-03-08 05:01:19', '0000-00-00 00:00:00', 0, 0),
(8, '', '', '', '', '', '', '', '', '', '', '', '', 'active', '2016-03-08 12:22:24', '0000-00-00 00:00:00', 0, 0),
(9, 'sdfasdf', 'sadfsadfdsf', 'sadfasdfsdf', 'sadfasdfsadf@yahoo.com', 'arVxnEB/UPxCY', 'asdfsadfasdf', '', 'sadfasdfsd', 'Lahore', '', '', '', 'inactive', '2016-03-10 04:18:27', '0000-00-00 00:00:00', 0, 0),
(10, 'test name', '', '000000000000', 'contractor12@yahoo.com', 'arbHbqoy9Dalg', '', '', '', 'Lahore', '', '', '', 'applied', '2016-03-15 04:39:29', '0000-00-00 00:00:00', 0, 0),
(11, 'tealsdkfjasd', '', '000000000000', 'contractor16@yahoo.com', 'ar7pgujFXxxf6', '', '', '', 'Lahore', '', '', '', 'applied', '2016-03-15 04:40:31', '0000-00-00 00:00:00', 0, 0),
(12, 'asdfsad', '', '2323234234', 'contractor17@yahoo.com', 'ar7pgujFXxxf6', '', '', '', 'Lahore', '', '', '', 'applied', '2016-03-15 04:41:18', '0000-00-00 00:00:00', 0, 0),
(13, 'asdfasfsadf', '', '12321313', 'contractor18@yahoo.com', 'ar7pgujFXxxf6', '', '', '', 'Lahore', '', '', '', 'active', '2016-03-15 04:56:34', '0000-00-00 00:00:00', 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `providerservices`
--

INSERT INTO `providerservices` (`id`, `provider_id`, `service_id`, `subservice_id`) VALUES
(55, 2, 0, 1),
(56, 2, 0, 2),
(57, 2, 0, 3),
(58, 2, 0, 11),
(59, 3, 0, 1),
(60, 3, 0, 2),
(61, 3, 0, 3),
(62, 3, 0, 5),
(63, 3, 0, 6),
(64, 3, 0, 11),
(65, 3, 0, 46),
(66, 3, 0, 47),
(67, 3, 0, 62),
(68, 3, 0, 67),
(69, 1, 0, 1),
(70, 1, 0, 2),
(71, 1, 0, 3),
(72, 1, 0, 6),
(73, 1, 0, 10);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=328 ;

--
-- Dumping data for table `servicequestions`
--

INSERT INTO `servicequestions` (`id`, `service_id`, `question_number`, `question_text`, `question_type`, `question_choices`, `question_others`, `status`) VALUES
(1, 1, 1, 'What type of maid do you want?', 'radio', 'Nanny,Housemaid,Cook,other', 'yes', 'active'),
(2, 1, 2, 'What is the requirement for maid?s nationality?', 'radio', 'Pakistani,Srilankan,Phillipino,Other', 'yes', 'active'),
(3, 1, 3, 'How many persons are living in the house?', 'radio', '2,5,Other', 'yes', 'active'),
(4, 1, 4, 'Do you provide residence?', 'radio', 'Yes,No', 'yes', 'active'),
(5, 1, 5, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(6, 1, 6, 'Do you have any pets?', 'radio', 'Dogs,Cats,No,Other', 'yes', 'active'),
(7, 2, 1, 'What type of cleaning do you want?', 'checkbox', 'Carpet cleaning,House cleaning,Office cleaning,Upholstery cleaning (Cushions;sofa;mattres;chairs),Thorough Cleaning (Moving Out; After Renovation),Other', 'yes', 'active'),
(8, 2, 2, 'What type of property do you want to clean?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(9, 2, 3, 'Does the cleaner have to provide cleaning supplies and materials?', 'radio', 'Yes,No', 'yes', 'active'),
(10, 2, 4, 'How often do you need house cleaning?', 'radio', 'One day,Once a week,Once a month,Other', 'yes', 'active'),
(11, 3, 1, 'What pest problem do you have?', 'checkbox', 'Cockroaches,Ants,Rodents,Bees; Hornets or Wasps,Fleas; Ticks or Mites,Termites,I''m not sure,Other', 'yes', 'active'),
(12, 3, 2, 'What pest control services do you need?', 'checkbox', 'Removal or Extermination,Inspection,Preventive measures,Other', 'yes', 'active'),
(13, 3, 3, 'What are the affected areas?', 'checkbox', 'Kitchen,Living Room,Bedroom,Furniture,Other', 'yes', 'active'),
(14, 3, 4, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(15, 4, 1, 'What type of outdoor cleaning do you want?', 'checkbox', 'Water tank cleaning,Swimming pool cleaning,Event cleanup,Other', 'yes', 'active'),
(16, 4, 2, 'What is the estimated size of the area?', '', '', 'yes', 'active'),
(17, 4, 3, 'Does the cleaner have to provide cleaning supplies and materials?', 'radio', 'Yes,No', 'yes', 'active'),
(18, 4, 4, 'What type of property do you want to clean?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(19, 4, 5, 'How often do you need house cleaning?', 'radio', 'One day,Once a week,Once a month,Other', 'yes', 'active'),
(20, 5, 1, 'What kind of work?', 'checkbox', 'Print ( business cards; posters; artwork),Logo or Branding,Illustration or Digital Art,Web & mobile design,Other', 'yes', 'active'),
(21, 5, 1, 'What kind of work?', 'checkbox', 'Print ( business cards; posters; artwork),Logo or Branding,Illustration or Digital Art,Web & mobile design,Other', 'yes', 'active'),
(22, 5, 2, 'What''s the scope of the project?', '', 'One-time project,Ongoing project,I am not sure yet', 'yes', 'active'),
(23, 5, 2, 'What''s the scope of the project?', '', 'One-time project,Ongoing project,I am not sure yet', 'yes', 'active'),
(24, 5, 3, 'Do you need printing services?', '', 'Yes; I want help with printing ,No;I do not need help with printing', 'yes', 'active'),
(25, 5, 3, 'Do you need printing services?', '', 'Yes; I want help with printing ,No;I do not need help with printing', 'yes', 'active'),
(26, 6, 1, 'What types of services will you need?', 'checkbox', 'SEO (search engine optimization),SMM (social media marketing),SEM (search engine marketing),PPC (pay per click),Email marketing,Local listing,Mobile marketing,Other', 'yes', 'active'),
(27, 6, 1, 'What types of services will you need?', 'checkbox', 'SEO (search engine optimization),SMM (social media marketing),SEM (search engine marketing),PPC (pay per click),Email marketing,Local listing,Mobile marketing,Other', 'yes', 'active'),
(28, 6, 2, 'Do you have any existing data?', 'checkbox', 'Website,Brand,Other', 'yes', 'active'),
(29, 6, 2, 'Do you have any existing data?', 'checkbox', 'Website,Brand,Other', 'yes', 'active'),
(30, 6, 3, 'How large is your company?', '', 'Small local,Large local,Small national,Large national,International,Other', 'yes', 'active'),
(31, 6, 3, 'How large is your company?', '', 'Small local,Large local,Small national,Large national,International,Other', 'yes', 'active'),
(32, 7, 1, 'What do you need developed?', 'checkbox', 'Build a new website,Updates to an existing website,Online store,Database development or set up,Social media integration,Mobile apps & web,Other', 'yes', 'active'),
(33, 7, 2, 'How many new pages do you need?', 'radio', '0-5,6-10,11-20,20+,I do not need any new pages,Other', 'yes', 'active'),
(34, 7, 3, 'What platform are you want or using?', 'radio', 'Custom solution,WordPress,Other', 'yes', 'active'),
(35, 8, 1, 'What type of service do you want?', 'radio', 'Baby photography,Commercial photography,Maternity photography,Wedding photography,Birthday photography,Baby shower photography,Corporate photography,Family portrait photography,Other', 'yes', 'active'),
(36, 8, 2, 'Do you have a theme or preference for your photographs?', 'checkbox', 'Formal or Studio,Casual or Simple,Playful or Humorous , Abstract or Artistic,Other', 'yes', 'active'),
(37, 8, 3, 'Which locations will the photographer be needed in?', 'textbox', '', 'yes', 'active'),
(38, 8, 4, 'Where will the event be held?', 'radio', 'Outdoors (Rooftop , Garden etc),Banquet hall,Restaurant ,Home,Other', 'yes', 'active'),
(39, 8, 5, 'How many people do you think will attend?', 'textbox', '', 'yes', 'active'),
(40, 8, 6, 'How many hours do you need the photographer for?', 'radio', '4 to 8 hours,5 to 10 hours,Full day,Other', 'yes', 'active'),
(41, 9, 1, 'What service method do you want?', 'checkbox', 'Digital,Hand or illustration,intros & animated logos,Promotional & brand videos,Other', 'yes', 'active'),
(42, 9, 1, 'What service method do you want?', 'checkbox', 'Digital,Hand or illustration,intros & animated logos,Promotional & brand videos,Other', 'yes', 'active'),
(43, 9, 2, 'What Software/specialty you are looking for?', 'checkbox', 'Maya,Softimage,After Effects,No preference. I don''t know yet,Other', 'yes', 'active'),
(44, 9, 2, 'What Software/specialty you are looking for?', 'checkbox', 'Maya,Softimage,After Effects,No preference. I don''t know yet,Other', 'yes', 'active'),
(45, 9, 3, 'What is your work type?', '', 'Personal,Commercial', 'yes', 'active'),
(46, 9, 3, 'What is your work type?', '', 'Personal,Commercial', 'yes', 'active'),
(47, 10, 1, 'What do you want content for?', 'checkbox', 'Articles & blog posts,Resumes & cover letter,Translation,Copywriting,Press release,Proofreading & editing,Other', 'yes', 'active'),
(48, 10, 2, 'How many words do you want?', 'textbox', '', 'yes', 'active'),
(49, 10, 3, 'How often do you need writing service?', 'radio', 'Everyday,Once a week,Once a month,Other', 'yes', 'active'),
(50, 11, 1, 'What is the consulting type?', 'checkbox', 'Business consultant,Marketing consultant,Seo consultant,Other', 'yes', 'active'),
(51, 11, 2, 'What is your Business size?', '', 'Small (Fewer than 10 employees),Medium (10-50 employees),Large (more than 50 employees),Not sure', 'yes', 'active'),
(52, 12, 1, 'What kind of legal service?', 'checkbox', 'Legal document assistant,Legal research,Legal transcription,Mobile notary,Notary public,Process server,Other', 'yes', 'active'),
(53, 12, 2, 'Nature of legal needs?', '', 'Individual,Non profit,Business,Other', 'yes', 'active'),
(54, 12, 3, 'Service commitment', '', 'Consultation,Representation,Notarization only,Process service,Document preparation,I am not sure,Other', 'yes', 'active'),
(55, 13, 1, 'What kind of contract work?', 'checkbox', 'Document review,Mergers,Acquisitions,Agreements,Other', 'yes', 'active'),
(56, 13, 2, 'What kind of service are you looking for?', 'checkbox', 'Consultation,Representation,Not sure,Other', 'yes', 'active'),
(57, 13, 3, 'What kind of entity do you represent?', '', 'Individual,Non profit,Business,Other', 'yes', 'active'),
(58, 14, 1, 'What kind of family matter?', 'checkbox', 'Child custody,Child support,Divorce,Visitation,Domestic violence,Mediation,Property,Other', 'yes', 'active'),
(59, 14, 2, 'Who is involved?', 'checkbox', 'Self, Husband or Wife (domestic partner), Parents,Siblings,Children,Other', 'yes', 'active'),
(60, 15, 1, 'What type of company it is?', 'radio', 'Individual or Sole Proprietorship,Partnership,Public Limited Companies,Private limited companies,Other', 'yes', 'active'),
(61, 15, 2, 'What industry are you in?', 'checkbox', 'Healthcare,Financial Services,Information Technology,Education,Manufacturing,Other', 'yes', 'active'),
(62, 15, 3, 'What else lawyer should know?', 'textbox', '', 'yes', 'active'),
(63, 16, 1, 'Entity type', '', 'Business,Individual,Other', 'yes', 'active'),
(64, 16, 2, 'Preparation type', 'checkbox', 'Tax return (Income),Real estate,Planning, Loans,Audit support,Corporation & LLC Setup or Dissolution,I need consultation,Other', 'yes', 'active'),
(65, 16, 3, 'What kind of work?', 'checkbox', 'General taxes,Payroll,Audit, Fraud,Other', 'yes', 'active'),
(66, 16, 4, 'What kind of service are you looking for?', 'checkbox', 'Consultation,Representation,Not sure,Other', 'yes', 'active'),
(67, 17, 1, 'What kind of corporate work ?', 'radio', 'Agreements,Mergers,Acquisitions,Executive compensation,Tax planning,Succession planning,Other', 'yes', 'active'),
(68, 17, 2, 'What kind of service are you looking for?', 'checkbox', 'Consultation,Representation,Not sure,Other', 'yes', 'active'),
(69, 18, 1, 'Which service(s) do you need?', 'checkbox', 'Bookkeeping,General accounting,Accounts receivable,Budgeting,Expense analysis,Forecasting,Taxes,Costing,I am not sure,Other', 'yes', 'active'),
(70, 21, 1, 'What are your primary book keeping needs?', 'checkbox', 'Balancing books,Preparing tax returns,Managing accounts receivable and payable,Preparing financial statements,Other', 'yes', 'active'),
(71, 21, 2, 'Do you use any accounting software?', 'radio', 'I do use accounting software,I currently don''t use any accounting software,Other', 'yes', 'active'),
(72, 21, 3, 'What type of software do you use?', 'textbox', '', 'yes', 'active'),
(73, 21, 4, 'Who is the accounting service for?', 'radio', 'Individual or Sole Proprietorship,Partnership,Public Limited Companies,Private limited companies,Other', 'yes', 'active'),
(74, 21, 5, 'What industry are you in?', 'checkbox', 'Healthcare,Financial Services,Information Technology,Education,Manufacturing,Other', 'yes', 'active'),
(75, 21, 6, 'How often do you need this service?', 'radio', 'One time,Weekly,Monthly,Quarterly,Full time,Other', 'yes', 'active'),
(76, 21, 7, 'Anything else the accountant should know?', 'textbox', '', 'yes', 'active'),
(77, 22, 1, 'What type of Project it is?', 'checkbox', 'General,Game,Interface,Scripts & utilities,QA,VOIP,Other', 'yes', 'active'),
(78, 22, 2, 'What Platform is it?', 'checkbox', 'PC,Mac,Mobile,Other', 'yes', 'active'),
(79, 22, 3, 'What will be the language?', 'checkbox', 'C++,Java,ASP,I''m not sure yet,Other', 'yes', 'active'),
(80, 23, 1, 'What kind of event do you want the catering for?', 'radio', 'House party,Corporate event,Birthday,Bridal shower or baby shower,Wedding or Engagement,Other', 'yes', 'active'),
(81, 23, 1, 'What kind of event do you want the catering for?', 'radio', 'House party,Corporate event,Birthday,Bridal shower or baby shower,Wedding or Engagement,Other', 'yes', 'active'),
(82, 23, 2, 'What dishes or beverages do you need catered? (You can pick more than one)', 'checkbox', 'Appetizer,Main course,Dessert,Beverage (non-alcoholic),Other', 'yes', 'active'),
(83, 23, 2, 'What dishes or beverages do you need catered? (You can pick more than one)', 'checkbox', 'Appetizer,Main course,Dessert,Beverage (non-alcoholic),Other', 'yes', 'active'),
(84, 23, 3, 'What type of cuisine do you want catered?', 'checkbox', 'Pakistani,Chinese,Continental,Other', 'yes', 'active'),
(85, 23, 3, 'What type of cuisine do you want catered?', 'checkbox', 'Pakistani,Chinese,Continental,Other', 'yes', 'active'),
(86, 23, 4, 'What type of food setup do you intend to organize?', 'checkbox', 'Served - full table setup , Buffet , Food stations,Other', 'yes', 'active'),
(87, 23, 4, 'What type of food setup do you intend to organize?', 'checkbox', 'Served - full table setup , Buffet , Food stations,Other', 'yes', 'active'),
(88, 23, 5, 'How many guests are you expecting?', 'textbox', '', 'yes', 'active'),
(89, 23, 5, 'How many guests are you expecting?', 'textbox', '', 'yes', 'active'),
(90, 23, 6, 'Do you require staffs?', 'radio', 'Yes; i only need servers,No,I am not sure,Other', 'yes', 'active'),
(91, 23, 6, 'Do you require staffs?', 'radio', 'Yes; i only need servers,No,I am not sure,Other', 'yes', 'active'),
(92, 23, 7, 'What is your estimated budget per person? (Please note: customer who select higher budget tiers often receive more quotes)', 'textbox', '', 'yes', 'active'),
(93, 23, 7, 'What is your estimated budget per person? (Please note: customer who select higher budget tiers often receive more quotes)', 'textbox', '', 'yes', 'active'),
(94, 24, 1, 'What event is the cake for?', 'radio', 'Wedding or Engagement party,Birthday , corporate event, Small party,Bridal shower cake,Baby shower cake,Other', 'yes', 'active'),
(95, 24, 2, 'What kind of cake are you looking for?', 'checkbox', 'Fondant covered cake,Icing covered cake,Sponge cake,I am not sure', 'yes', 'active'),
(96, 24, 3, 'What else would you like with cake?', 'checkbox', 'macroons,Cupcakes,Other', 'yes', 'active'),
(97, 24, 4, 'How many tiers do you want the cake?', 'radio', '1 tier,2 tier,3 tier,Other', 'yes', 'active'),
(98, 24, 5, 'What flavour would you like?', 'radio', 'Vanilla,Chocolate,Cheese,Other', 'yes', 'active'),
(99, 24, 6, 'How many guests are you expecting?', 'radio', 'Fewer than 50,51 ? 100,100+,Other', 'yes', 'active'),
(100, 24, 7, 'What is your preference for delivering?', 'radio', 'You will pick from the outlet,Needs delivery,Other', 'yes', 'active'),
(101, 25, 1, 'What kind of food are you looking for?', 'checkbox', 'Fresh food,Frozen,Other', 'yes', 'active'),
(102, 25, 2, 'What event is the food for?', 'checkbox', 'House party,Birthday party,Office party,Get together,Dinner or lunch,Other', 'yes', 'active'),
(103, 25, 3, 'What type of food you want?', 'radio', 'Readymade menu (you can choose from our menu),Custom made( you can tell your own dish name),Other', 'yes', 'active'),
(104, 25, 4, 'How many guests are you expecting?', 'textbox', '', 'yes', 'active'),
(105, 25, 5, 'What dishes or beverages do you need catered? (You can pick more than one)', 'checkbox', 'Appetiser,Main course,Dessert,Other', 'yes', 'active'),
(106, 25, 6, 'What type of cuisine do you want catered?', 'checkbox', 'Pakistani,Chinese,Continental,Other', 'yes', 'active'),
(107, 25, 7, 'What is your preference for delivering?', 'radio', 'You will pick from the outlet,Needs delivery,Other', 'yes', 'active'),
(108, 26, 1, 'What events do you need the planner to help you out with?', 'checkbox', 'House party,Corporate event,Birthday,Bridal shower or baby shower,Wedding or Engagement,Other', 'yes', 'active'),
(109, 26, 2, 'What do you need help with?', 'checkbox', 'Venue Identification; Selection and Booking,Budget Preparation and Consultation,Itinerary Planning and Preparation,Attendee List Planning,Design; theme and style advice,Venue Sourcing and Booking,Other', 'yes', 'active'),
(110, 26, 3, 'Any other services that you want to include in your event?', 'checkbox', 'Photographer,Videographer,Dj,Florist,Makeup artist,lighting,Caterer,Other', 'yes', 'active'),
(111, 27, 1, 'What type of service do you want?', 'radio', 'Baby photography,Commercial photography,Maternity photography,Wedding photography,Birthday photography,Baby shower photography,Corporate photography,Family portrait photography,Other', 'yes', 'active'),
(112, 27, 2, 'Do you have a theme or preference for your photographs?', 'checkbox', 'Formal or Studio,Casual or Simple,Playful or Humorous , Abstract or Artistic,Other', 'yes', 'active'),
(113, 27, 3, 'Which locations will the photographer be needed in?', 'textbox', '', 'yes', 'active'),
(114, 27, 4, 'Where will the event be held?', 'radio', 'Outdoors (Rooftop , Garden etc),Banquet hall,Restaurant ,Home,Other', 'yes', 'active'),
(115, 27, 5, 'How many people do you think will attend?', 'textbox', '', 'yes', 'active'),
(116, 27, 6, 'How many hours do you need the photographer for?', 'radio', '4 to 8 hours,5 to 10 hours,Full day,Other', 'yes', 'active'),
(117, 28, 1, 'What type of service do you want?', 'radio', 'Baby Videography,Commercial Videography,Maternity Videography,Wedding Videography,Birthday Videography,Baby shower Videography,Corporate Videography,Family portrait Videography,Other', 'yes', 'active'),
(118, 28, 2, 'What features do you want in your wedding video?', 'checkbox', 'Voice overs,Interviews,Animations,Storyboard , Copywriting (if you need a story drawn up),Graphic design,Music,Other', 'yes', 'active'),
(119, 28, 3, 'Which locations will the Videography be needed in?', 'textbox', '', 'yes', 'active'),
(120, 28, 4, 'Where will the event be held?', 'radio', 'Outdoors (Rooftop , Garden etc),Banquet hall,Restaurant ,Home,Other', 'yes', 'active'),
(121, 28, 5, 'How many people do you think will attend?', 'textbox', '', 'yes', 'active'),
(122, 28, 6, 'How many hours do you need the Videography for?', 'radio', '4 to 8 hours,5 to 10 hours,Full day,Other', 'yes', 'active'),
(123, 30, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(124, 30, 2, 'What kind of service?', 'checkbox', 'Install,Repair,Replace,Custom Build,Other', 'yes', 'active'),
(125, 30, 3, 'What material are the cabinets made of?', '', 'Medium density fiberboard (MDF),Maple,Oak,Plywood,Laminate,As reccomended by carpenter,Other', 'yes', 'active'),
(126, 30, 4, 'Where are the cabinets located?', 'checkbox', 'Kitchen,Lounge,dining room,Drawing room,Other', 'yes', 'active'),
(127, 30, 5, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(128, 31, 1, 'What is the scope of your work?', 'checkbox', 'Create a new garden on bare dirt,Completely replace an existing garden,I want to maintain an existing garden,Other', 'yes', 'active'),
(129, 31, 1, 'What is the scope of your work?', 'checkbox', 'Create a new garden on bare dirt,Completely replace an existing garden,I want to maintain an existing garden,Other', 'yes', 'active'),
(130, 31, 2, 'If you are creating or replacing a garden; do you already have plans?', '', 'I am not creating or replacing a garden,No existing plan but I have a good idea what i want,No existing plan - need design suggestions, Already have plan- just need installation,Other', 'yes', 'active'),
(131, 31, 2, 'If you are creating or replacing a garden; do you already have plans?', '', 'I am not creating or replacing a garden,No existing plan but I have a good idea what i want,No existing plan - need design suggestions, Already have plan- just need installation,Other', 'yes', 'active'),
(132, 31, 3, 'What is the estimated size of your garden?', 'textbox', '', 'yes', 'active'),
(133, 31, 3, 'What is the estimated size of your garden?', 'textbox', '', 'yes', 'active'),
(134, 31, 4, 'Will you need regular garden maintenance? If so; how often?', '', 'One time project,Once a week,Every other week,2-3 times a month,As needed,Other', 'yes', 'active'),
(135, 31, 4, 'Will you need regular garden maintenance? If so; how often?', '', 'One time project,Once a week,Every other week,2-3 times a month,As needed,Other', 'yes', 'active'),
(136, 31, 5, 'What kind of care services do you need?', 'checkbox', 'No lawncare services needed,Trimming and edging,Wedding,Fertilizer application,Seeding or overseeding,Insect control,Flower beds,Other', 'yes', 'active'),
(137, 31, 5, 'What kind of care services do you need?', 'checkbox', 'No lawncare services needed,Trimming and edging,Wedding,Fertilizer application,Seeding or overseeding,Insect control,Flower beds,Other', 'yes', 'active'),
(138, 31, 6, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(139, 31, 6, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(140, 31, 7, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(141, 31, 7, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(142, 33, 1, 'What type of interior designer work do you need?', 'checkbox', 'Ceiling and flooring design,Illustration 2D or 3D animation,Space planning or Furniture positioning,Curtain & Drapes Making and Installation,Wallpaper supply & installation,Other', 'yes', 'active'),
(143, 33, 1, 'What type of interior designer work do you need?', 'checkbox', 'Ceiling and flooring design,Illustration 2D or 3D animation,Space planning or Furniture positioning,Curtain & Drapes Making and Installation,Wallpaper supply & installation,Other', 'yes', 'active'),
(144, 33, 2, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(145, 33, 2, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(146, 33, 3, 'What styles suit do you need?', 'checkbox', 'Contemporary,Traditional,Modern,Rustic,Other', 'yes', 'active'),
(147, 33, 3, 'What styles suit do you need?', 'checkbox', 'Contemporary,Traditional,Modern,Rustic,Other', 'yes', 'active'),
(148, 33, 4, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(149, 33, 4, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(150, 34, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(151, 34, 2, 'What kind of service do you want?', 'checkbox', 'Install,Repair,Other', 'yes', 'active'),
(152, 34, 3, 'What is the estimated size of the area(eg 10'' x 10'' and 8'' x 8'')', 'textbox', '', 'yes', 'active'),
(153, 34, 4, 'Tell us about the material ?', 'checkbox', 'Ceramic,Porcelain,Natural stone (Granite; marble etc),Mosaic,Other', 'yes', 'active'),
(154, 34, 5, 'Which areas need/ have tiling?', 'checkbox', 'Bathroom,Kitchen,Outdoor,Lounge,Other', 'yes', 'active'),
(155, 34, 6, 'What is the estimated area you want to plaster (in square feet)?', 'textbox', '', 'yes', 'active'),
(156, 35, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(157, 35, 2, 'What needs to be done on your window?', 'radio', 'There are no windows. I want to install new ones,Remove the old windows. Install new ones', 'yes', 'active'),
(158, 35, 3, 'Where do you need the windows installed?', 'checkbox', 'Bathroom,Kitchen,Lounge,Bedroom,Other', 'yes', 'active'),
(159, 35, 4, 'What type of windows do you want?', 'checkbox', 'Fixed (does not open),Swing (sideways),Swing (upwards),Sliding (sideways),Other', 'yes', 'active'),
(160, 35, 5, 'What type of material do you want for your windows?', 'checkbox', 'Aluminium frame,Wood frame,Metal frame,Fiber glass frame,Reinforced Glass,Other', 'yes', 'active'),
(161, 35, 6, 'Will you provide all necessary materials and parts?', 'radio', 'Yes; I will provide the materials and parts,Yes; but I will need guidance from the professional,No; I will need the professional to provide materials and parts', 'yes', 'active'),
(162, 35, 7, 'What is the size of the areas you want windowed (in length / width in feet - eg 10 X 10 for kitchen; 8 X 8 for bathroom)?', 'textbox', '', 'yes', 'active'),
(163, 36, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(164, 36, 2, 'How many windows need to be tinted?', 'radio', '1-5,6-10,10+,Other', 'yes', 'active'),
(165, 36, 3, 'What type of tinting film do you want installed?', 'radio', 'Dyed or Colored Films,Sputtered (Metalized) Films,Deposited Films,Please recommend,Other', 'yes', 'active'),
(166, 36, 4, 'Where are the windows located?', 'checkbox', 'Walls,Roofs,Ceiling,Other', 'yes', 'active'),
(167, 36, 5, 'Will you provide all necessary materials and parts?', 'radio', 'Yes; I will provide the materials and parts,Yes; but I will need guidance from the professional,No; I will need the professional to provide materials and parts', 'yes', 'active'),
(168, 36, 6, 'What is the estimated size of your garden?', 'textbox', '', 'yes', 'active'),
(169, 37, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(170, 37, 2, 'What kind of roofing installation do you need?', 'radio', 'There is no roof. I want to install a new one,Remove the old roof. Replace it completely with new roofing,Add another layer on old roof,I want to install Awning or Roof Extension,I want a recommendation,Other', 'yes', 'active'),
(171, 37, 3, 'What material do you want for your new roof?', 'radio', 'Terracota,Ceramic,Concrete,Metal,Clay,Other', 'yes', 'active'),
(172, 37, 4, 'Do you have the roof tiles or does the contractor need to supply it?', 'radio', 'I have the roof tiles,I''ll need the contractor to supply it', 'yes', 'active'),
(173, 37, 5, 'What is the estimated size of your garden?', 'textbox', '', 'yes', 'active'),
(174, 38, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(175, 38, 2, 'What plastering work do you need?', 'checkbox', 'New Plastering Work,Repair or Touch up,Other', 'yes', 'active'),
(176, 38, 3, 'Where do you need the plastering work done?', 'checkbox', 'Ceiling,Walls,Other', 'yes', 'active'),
(177, 38, 4, 'What is the estimated area you want to plaster (in square feet)?', 'textbox', '', 'yes', 'active'),
(178, 38, 5, 'What is the estimated size of your garden?', 'textbox', '', 'yes', 'active'),
(179, 39, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(180, 39, 2, 'What work do you need?', 'checkbox', 'Iron work,Aluminium work', 'yes', 'active'),
(181, 39, 3, 'What type of service do you need?', 'radio', 'I want to install new ,Remove the old one. Install new ironwork,Repair,Other', 'yes', 'active'),
(182, 39, 4, 'What is the work for?', 'checkbox', 'Window ,Dor,Roofing,Railing,Other', 'yes', 'active'),
(183, 39, 5, 'What is the estimated size of the work needed (eg 10'' x 10'' for Window Grill and 8'' x 8'' for Door Grill)', 'textbox', '', 'yes', 'active'),
(184, 39, 6, 'What material are you looking for?', 'checkbox', 'Wrought Iron,Stainless steel,Aluminum,Metal,Other', 'yes', 'active'),
(185, 39, 7, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(186, 40, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(187, 40, 2, 'What do you want to do with the flooring?', 'checkbox', 'Resurface,Replace,Polish,I want a recommendation,Other', 'yes', 'active'),
(188, 40, 3, 'Where is the flooring that needs repair?', 'checkbox', 'Kitchen,Lounge,dining room,Drawing room,ExteriorOther', 'yes', 'active'),
(189, 40, 4, 'What is the estimated area of the floor (in square feet)', 'textbox', '', 'yes', 'active'),
(190, 40, 5, 'What material is your flooring?', 'checkbox', 'Solid wood,Laminate,Concrete,Tiles,Other', 'yes', 'active'),
(191, 40, 6, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(192, 41, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(193, 41, 2, 'What flooring work do you need?', 'radio', 'There is no flooring. I want to install new flooring,Remove the old flooring. Replace it completely with new flooring', 'yes', 'active'),
(194, 41, 3, 'What material do you want for your new floor?', 'checkbox', 'Solid wood,Laminate,Concrete,Tiles,Other', 'yes', 'active'),
(195, 41, 4, 'Where do you want the new flooring?', 'checkbox', 'Exterior,Lounge,Basement,Kitchen,Other', 'yes', 'active'),
(196, 41, 5, 'What is the estimated area of the floor (eg 10 feet X 10 feet for kitchen floor and 8 feet X 8 feet for dining area)', 'textbox', '', 'yes', 'active'),
(197, 41, 6, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(198, 42, 1, 'What needs painting?', 'checkbox', 'Interior walls,Exterior walls,Woodwork,Metalwork,Ceiling,Other', 'yes', 'active'),
(199, 42, 2, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(200, 42, 3, 'What kind of painting do you need?', 'checkbox', 'Repainting - same color,Repainting - color change,Decorative painting - faux finish,Decorative painting - texture coating,Decorative painting - mural,Other', 'yes', 'active'),
(201, 42, 4, 'Please describe the condition of your walls:', 'checkbox', 'Excellent - clean and smooth,Fair - minor holes and scratches,Poor - major repairs needed,Other', 'yes', 'active'),
(202, 42, 5, 'Will you supply the paint?', '', 'Yes,No,I am not sure', 'yes', 'active'),
(203, 42, 6, 'What is the estimated size of your garden?', 'textbox', '', 'yes', 'active'),
(204, 43, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(205, 43, 2, 'What glasswork do you need?', 'radio', 'There is no glasswork. I want to install a new one,Remove the old glasswork. Install a new one', 'yes', 'active'),
(206, 43, 3, 'What is the glasswork for?', 'checkbox', 'Windows,Doors,Partition,Other', 'yes', 'active'),
(207, 43, 4, 'What is the size of the glasswork needed (width / height / length in feet)', 'textbox', '', 'yes', 'active'),
(208, 43, 5, 'What type of glass are you looking for?', 'checkbox', 'Tempered Glass,Non Tempered Glass,Tinted,Frosted,Other', 'yes', 'active'),
(209, 43, 6, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(210, 44, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(211, 44, 2, 'What door installation work do you need?', 'checkbox', 'There is a doorframe. I just need to install a door.,There is no doorframe. I need the contractor to make an opening.,Other', 'yes', 'active'),
(212, 44, 3, 'Do you have the door and doorframe?', 'radio', 'Yes. I only need the contractor to do installation work.,No. I need the contractor to supply the door and doorframe.,Other', 'yes', 'active'),
(213, 44, 4, 'What is the approximate measurement of the door?', 'textbox', '', 'yes', 'active'),
(214, 44, 5, 'What material do you want the door to be?', 'checkbox', 'Wood,Metal,Glass,As reccomended by contractor,Other', 'yes', 'active'),
(215, 44, 6, 'Where is the door?', 'checkbox', 'Interior,Exterior,Security door,Other', 'yes', 'active'),
(216, 44, 7, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(217, 45, 1, 'What concreting work needs to be done?', 'checkbox', 'New Concreting Work,Repair or Touch up,Other', 'yes', 'active'),
(218, 45, 2, 'Which surfaces will the concreting work be needed for?', 'checkbox', 'Wall,Floor,Ceiling,Foundation,Countertop,Other', 'yes', 'active'),
(219, 45, 3, 'Which areas will the concreting work be needed?', 'checkbox', 'Bathroom,Kitchen,Outdoor,Other', 'yes', 'active'),
(220, 45, 4, 'What is the size of the area you need concreted?', 'textbox', '', 'yes', 'active'),
(221, 45, 5, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(222, 45, 6, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(223, 46, 1, 'What do you need?', 'checkbox', 'Architect,Draftsperson or CAD,Structural engineer,Inspector,Other', 'yes', 'active'),
(224, 46, 1, 'What do you need?', 'checkbox', 'Architect,Draftsperson or CAD,Structural engineer,Inspector,Other', 'yes', 'active'),
(225, 46, 2, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(226, 46, 2, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(227, 46, 3, 'What services do you need?', 'checkbox', 'Consultation,Building plans,New construction,Remodel,Other', 'yes', 'active'),
(228, 46, 3, 'What services do you need?', 'checkbox', 'Consultation,Building plans,New construction,Remodel,Other', 'yes', 'active'),
(229, 46, 4, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(230, 46, 4, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(231, 49, 0, 'it is directed to this category', '', '', 'yes', 'active'),
(232, 51, 1, 'What kind of advertising?', 'checkbox', 'Print (newspaper; magazines; flyers) ,Outdoor (billboards; road signage),Broadcast (TV; radio),Online,Public relation, I am not sure,Other', 'yes', 'active'),
(233, 51, 2, 'How often do you need it?', 'radio', 'One day,Once a week,Once a month,Other', 'yes', 'active'),
(234, 54, 1, 'What plumbing fittings do you want to install?', 'checkbox', 'Toilet bowl,Sink or Basin,Shower Head,Tap,Pipes,Other', 'yes', 'active'),
(235, 54, 2, 'Where do you want to install the plumbing fittings?', 'checkbox', 'Washroom,Kitchen,Garage,Other', 'yes', 'active'),
(236, 54, 3, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(237, 54, 4, 'Do you have the plumbing fittings; parts & materials?', 'radio', 'Yes. I just need the plumber to install the fittings,I need the plumber to remove old or existing fittings then install the new fittings,No. I need the plumber to provide the fittings and install them', 'yes', 'active'),
(238, 54, 5, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(239, 55, 1, 'What problem are you having?', 'checkbox', 'Leaking or burst pipe,Clogged drain,Low water or no pressure,Fixture not draining , I''m not sure; I need the plumber to advise,Other', 'yes', 'active'),
(240, 55, 2, 'What fittings does the plumber need to work on?', 'checkbox', 'Toilet bowl,Sink or Basin,Shower Head,Tap,Pipes,Other', 'yes', 'active'),
(241, 55, 3, 'Which part of the plumbing system requires work?', 'checkbox', 'Pipes and drains,Outdoor plumbing,Entire area,Other', 'yes', 'active'),
(242, 55, 4, 'How long has this problem existed?', 'textbox', '', 'yes', 'active'),
(243, 55, 5, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(244, 55, 6, 'How is the building connected to water and sewage systems?', 'checkbox', 'Municipal water,Septic tank,I am not sure', 'yes', 'active'),
(245, 55, 7, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(246, 56, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(247, 56, 2, 'What type of water heater do you want to install?', 'radio', 'Tank or boiler type,Tank less or Instant type,Other', 'yes', 'active'),
(248, 56, 3, 'How many water heaters do you want to install?', 'textbox', '', 'yes', 'active'),
(249, 56, 4, 'Will the contractor have to install new power points / switches for the water heater?', 'radio', 'Yes,No', 'yes', 'active'),
(250, 56, 5, 'Does the contractor have to provide the water heater or do you have your own?', 'radio', 'I have my own,The contractor needs to provide', 'yes', 'active'),
(251, 56, 6, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(252, 57, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(253, 57, 2, 'How long has this problem existed?', 'textbox', '', 'yes', 'active'),
(254, 57, 3, 'What type of water heater do you have?', 'radio', 'Tank or boiler type,Tank less or Instant type,Other', 'yes', 'active'),
(255, 57, 4, 'What''s wrong with the water heater?', 'checkbox', 'Not functioning,Water not hot,Causes power trip,Other', 'yes', 'active'),
(256, 57, 5, 'What brand is the water heater?', 'textbox', '', 'yes', 'active'),
(257, 57, 6, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(258, 58, 1, 'Where do you need the waterproofing?', 'checkbox', 'Roof,Basement,Foundation,Other', 'yes', 'active'),
(259, 58, 2, 'What is the estimated area where waterproofing is needed (in square feet)?', 'textbox', '', 'yes', 'active'),
(260, 58, 3, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(261, 58, 4, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(262, 59, 1, 'What waterproofing problem are you facing?', 'checkbox', 'Leaking or Seepage,Flooding,Cracking,Dampness,Other', 'yes', 'active'),
(263, 59, 2, 'Which area needs repair?', 'checkbox', 'Roof,Basement,Foundation,Other', 'yes', 'active'),
(264, 59, 3, 'What is the estimated area of damage (eg 20'' x 15'' for Roof and 10'' x 10'')', 'textbox', '', 'yes', 'active'),
(265, 59, 4, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(266, 59, 5, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(267, 60, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(268, 60, 2, 'Do you have the approvals from local authorities been made or should the contractor apply for it?', 'radio', 'I have the approvals,The contractor needs to apply for it', 'yes', 'active'),
(269, 60, 3, 'What 3 phase wiring work are you looking for?', 'checkbox', 'There is no wiring. I want to install 3 phase wiring.,Upgrading from Single Phase to 3 phase,Phase balancing,Rewiring,Other', 'yes', 'active'),
(270, 60, 4, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(271, 61, 1, 'What type of fan do you want to install?', 'checkbox', 'Ceiling fan,Wall fan,Other', 'yes', 'active'),
(272, 61, 2, 'How many fans do you want to install', 'textbox', '', 'yes', 'active'),
(273, 61, 3, 'Will the contractor have to install new power points / switches for the fan?', 'radio', 'Yes,No', 'yes', 'active'),
(274, 61, 4, 'Does the contractor have to supply the fan or do you have your own?', 'radio', 'I have my own,The contractor should supply them', 'yes', 'active'),
(275, 61, 5, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(276, 61, 6, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(277, 62, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(278, 62, 2, 'What lights do you want to install?', 'checkbox', 'Downlights,Chandelier,Ceiling lights,Tube Lights,Other', 'yes', 'active'),
(279, 62, 3, 'How many lights do you want installed?', 'textbox', '', 'yes', 'active'),
(280, 62, 4, 'Does the lighting contractor have to supply the lights?', 'radio', 'Yes,No', 'yes', 'active'),
(281, 63, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(282, 63, 2, 'What type of lights are they?', 'checkbox', 'Downlights,Chandelier,Ceiling lights,Tube Lights,Other', 'yes', 'active'),
(283, 63, 3, 'How many lights need repair?', 'textbox', '', 'yes', 'active'),
(284, 63, 4, 'What''s the problem with the lights?', 'checkbox', 'Does not light up,Flickering,Dim , I am not sure,Other', 'yes', 'active'),
(285, 64, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(286, 64, 2, 'What wiring work do you need?', 'checkbox', 'Install,Repair,Relocate,Other', 'yes', 'active'),
(287, 64, 3, 'Which electricity components?', 'checkbox', 'Wiring,Interior lights,Switches,Circuit breaker,Exterior lights,Other', 'yes', 'active'),
(288, 64, 4, 'How many power points need to be worked on?', 'textbox', '', 'yes', 'active'),
(289, 64, 5, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(290, 65, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(291, 65, 2, 'What work do you need on the air conditioner?', 'checkbox', 'General air condition service and maintenance,Gas refill,Cleaning of ducts and cooling system,Cleaning or replacement of filters,Repair leaking air conditioner,Other', 'yes', 'active'),
(292, 65, 3, 'What type of airconditioner is it?', 'radio', 'Split Airconditioner,Standup Airconditioner,Ceiling or Cassette Airconditioner,Other', 'yes', 'active'),
(293, 65, 4, 'What horsepower is the airconditioner?(ton)', 'textbox', '', 'yes', 'active'),
(294, 65, 5, 'How many airconditioners need to be worked on?', 'textbox', '', 'yes', 'active'),
(295, 65, 6, 'Where is the airconditioner located?', 'radio', '1st floor,2nd floor,3rd floor,Other', 'yes', 'active'),
(296, 65, 7, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(297, 66, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(298, 66, 2, 'What brand you require for air conditioner?', 'textbox', '', 'yes', 'active'),
(299, 66, 3, 'What type of airconditioner do you want?', 'radio', 'Split Airconditioner,Standup Airconditioner,Ceiling or Cassette Airconditioner,Other', 'yes', 'active'),
(300, 66, 4, 'What horsepower of airconditioner is required?(ton)', 'textbox', '', 'yes', 'active'),
(301, 66, 5, 'How many airconditioners need to be supplied?', 'textbox', '', 'yes', 'active'),
(302, 66, 6, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(303, 67, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(304, 67, 2, 'What type of airconditioner is it?', 'radio', 'Split Airconditioner,Standup Airconditioner,Ceiling or Cassette Airconditioner,Other', 'yes', 'active'),
(305, 67, 3, 'What horsepower is the airconditioner?(ton)', 'textbox', '', 'yes', 'active'),
(306, 67, 4, 'How many airconditioners need to be installed?', 'textbox', '', 'yes', 'active'),
(307, 67, 5, 'Where the airconditioner needs to be installed?', 'radio', '1st floor,2nd floor,3rd floor,Other', 'yes', 'active'),
(308, 67, 6, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(309, 68, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(310, 68, 2, 'What service you need for generator?', 'radio', 'Repair,Install,Other', 'yes', 'active'),
(311, 68, 3, 'What is the Generator type?', '', 'Portable,Fixed', 'yes', 'active'),
(312, 68, 4, 'What is the use of generator?', '', 'Emergency backup,Primary power source', 'yes', 'active'),
(313, 68, 5, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(314, 69, 1, 'What kind of work do you need?', 'radio', 'Install,Repair,Replace,As recommended by service professional,Other', 'yes', 'active'),
(315, 69, 2, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(316, 69, 3, 'What''s wrong with the geyser?', 'checkbox', 'Not functioning,Water not hot,Causes power trip,Other', 'yes', 'active'),
(317, 69, 4, 'What brand is the geyser?', 'textbox', '', 'yes', 'active'),
(318, 69, 5, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active'),
(319, 70, 1, 'What service you need ?', 'radio', 'Repair,Install,Other', 'yes', 'active'),
(320, 70, 2, 'Which appliance(s)?', 'checkbox', 'Washer or dryer, Refrigerator,Microwave oven,Outdoor tools (lawn mower; etc.),Other', 'yes', 'active'),
(321, 70, 3, 'Which is the power source?', 'radio', 'Electric,Gas (natural),Gas (gasolina),Other', 'yes', 'active'),
(322, 70, 4, 'Where will you be installing the appliance?', 'checkbox', 'My home,My office or commercial lot,Other', 'yes', 'active'),
(323, 71, 1, 'What type of property do you have?', 'radio', 'Home,Apartment,Office,commercial,Other', 'yes', 'active'),
(324, 71, 2, 'What service do you need for ups?', 'checkbox', 'Repair,Install,Change batteries,Other', 'yes', 'active'),
(325, 71, 3, 'how much KVA ups you require or you have?', 'textbox', '', 'yes', 'active'),
(326, 71, 4, 'What is the purpose of ups?', '', 'Emergency backup,Primary power source', 'yes', 'active'),
(327, 71, 5, 'What is the estimated size of the property? (in marla/kanal)', 'textbox', '', 'yes', 'active');

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
  `contacting_preference` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `attach1` varchar(254) NOT NULL,
  `attach2` varchar(254) NOT NULL,
  `attach3` varchar(254) NOT NULL,
  `attach4` varchar(254) NOT NULL,
  `attach5` varchar(254) NOT NULL,
  `requestby` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `promocode` varchar(100) NOT NULL,
  `approved` enum('submitted','approved','declined','cancelled','awarded','completed') NOT NULL,
  `cancelreason` varchar(100) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `servicerequest`
--

INSERT INTO `servicerequest` (`id`, `user_id`, `service_id`, `subservice_id`, `area_id`, `subarea_id`, `question_1`, `question_2`, `question_3`, `question_4`, `question_5`, `question_6`, `expected_date`, `estimated_date`, `service_description`, `budget`, `contacting_preference`, `area`, `attach1`, `attach2`, `attach3`, `attach4`, `attach5`, `requestby`, `email`, `mobile`, `promocode`, `approved`, `cancelreason`, `datecreated`) VALUES
(1, 1, 1, 1, 1, 63, 'answer 1', 'answer 2', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'completed', 'I decided to do it myself or had a friend help', '0000-00-00 00:00:00'),
(2, 1, 2, 2, 2, 2, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'submitted', '', '2016-02-09 06:44:55'),
(3, 0, 0, 3, 0, 3, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 'test@yahoo.com', '2323423432', '', 'approved', '', '2016-02-29 07:54:20'),
(4, 0, 0, 1, 0, 85, 'a', 'b', 'a', '', '', '', '0000-00-00', '', 'description', '', '', '', '', '', '', '', '', '', 'test11@yahoo.com', '923331231231', '', 'approved', '', '2016-03-01 10:23:11'),
(13, 0, 0, 204, 0, 115, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'declined', '', '2016-03-07 07:53:10'),
(14, 0, 1, 9, 1, 79, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 'test@yahoo.com', '12121212212', '', 'submitted', '', '2016-03-08 11:41:51'),
(15, 0, 2, 20, 1, 77, 'a', 'b', 'b', 'aa,bb', '', '', '0000-00-00', '', 'test description', '1000', '', '', '', '', '', '', '', '', 'my.email@yahoo.com', '03008210313', 'none', 'submitted', '', '2016-03-09 04:26:21'),
(16, 0, 2, 20, 1, 77, 'a', 'b', 'b', 'aa,bb', '', '', '0000-00-00', '', 'test description', '1000', '', '', '', '', '', '', '', '', 'my.email@yahoo.com', '03008210313', 'none', 'approved', '', '2016-03-09 04:27:23'),
(17, 0, 1, 10, 1, 77, 'a', 'bb', 'c', 'cc,dd', '', '', '0000-00-00', '', 'project descriot', '1000', '', '', '', '', '', '', '', 'test name', 'test.email@yahoo.com', '03008210313', 'none', 'approved', '', '2016-03-09 04:28:46'),
(18, 0, 1, 1, 1, 75, 'sdfasdf', 'sadfsadf', 'c', 'bb,cc', '', '', '03/02/2016', '', 'asdfsadfsadf', '111', '', '', '', '', '', '', '', 'Customer', 'customer1@yahoo.com', '11212121212', '', 'submitted', '', '2016-03-10 09:58:45'),
(19, 0, 1, 1, 1, 75, 'sdfasdf', 'sadfsadf', 'c', 'bb,cc', '', '', '03/02/2016', '', 'asdfsadfsadf', '111', '', '', '', '', '', '', '', 'Customer', 'customer1@yahoo.com', '11212121212', '', 'submitted', '', '2016-03-10 09:59:36'),
(20, 0, 2, 17, 1, 80, 'sadfasd', 'sadfasdf', 'a', 'aa,bb,cc', '', '', '03/31/2016', '', 'asdfasdfasdf', '1233', '', '', '', '', '', '', '', 'test user', 'customer3@yahoo.com', '112123123', '', 'submitted', '', '2016-03-10 10:00:49'),
(21, 0, 1, 1, 1, 63, '', '', 'b', 'aa', '', '', '', '', '', '', '', '', '', '', '', '', '', 'my name', 'myemail01@yahoo.com', '', '', 'submitted', '', '2016-03-14 05:49:46'),
(22, 7, 13, 113, 1, 75, '', '', 'd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'test', 'aalogic@gmail.com', '', '', 'submitted', '', '2016-03-15 06:24:48'),
(23, 0, 13, 113, 1, 75, '', '', 'd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'test', 'aalogic@gmail.com', '', '', 'submitted', '', '2016-03-15 06:26:36'),
(24, 0, 1, 3, 0, 2, 'a', 'b', 'a', 'aa,bb,cc', '', '', '03/31/2016', '', 'describe', '1000', 'I travel to my pro', 'gulshan', '', '', '', '', '', 'my test name', 'testemail@yahoo.com', '121212121212', '', 'submitted', '', '2016-03-21 05:00:00'),
(25, 0, 1, 3, 0, 0, 'Cockroaches', 'Removal or Extermination', 'Kitchen', 'Home', '', '', '03/31/2016', '', '', '', 'I travel to my pro', '', '', '', '', '', '', 'test name', 'mytestemail2@yahoo.com', '', '', 'submitted', '', '2016-03-21 07:34:16'),
(26, 0, 1, 3, 12, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'test name', 'test.email3@yahoo.com', '', '', 'submitted', '', '2016-03-21 07:38:00'),
(27, 0, 1, 2, 1, 0, 'Carpet cleaning', 'Home', 'Yes', 'One day', '', '', '03/31/2016', '', 'Test Description', '1000', 'I travel to my pro', 'Gulshan', '', '', '', '', '', 'Tester name', 'mytestemail4@yahoo.com', '923001234567', '', 'submitted', '', '2016-03-22 03:44:07'),
(28, 0, 1, 2, 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sadfasdf', 'test.email3@yahoo.com', '', '', 'approved', '', '2016-03-22 07:35:04'),
(29, 6, 1, 2, 1, 0, 'Carpet cleaning', 'Home', 'Yes', 'One day', '', '', '', '', '', '', 'I travel to my professional', '', '', '', '', '', '', 'Test Name', 'user11@yahoo.com', '', '', 'approved', '', '2016-03-29 04:59:37'),
(30, 6, 1, 2, 1, 0, 'Carpet cleaning', 'Home', 'Yes', 'One day', '', '', '', '', '', '', 'I travel to my professional', '', '', '', '', '', '', 'Test Name', 'user11@yahoo.com', '', '', 'approved', '', '2016-03-29 05:03:55'),
(31, 7, 1, 2, 1, 0, '', 'Home', 'Yes', 'One day', '', '', '03/31/2016', '', '', '', 'I travel to my professional', '', '', '', '', '', '', 'Test User', 'user12@yahoo.com', '', '', 'approved', '', '2016-03-29 05:06:13'),
(32, 7, 1, 2, 1, 0, 'Carpet cleaning', 'Home', 'Yes', 'One day', '', '', '', '', '', '', 'I travel to my professional', '', '', '', '', '', '', 'Test User', 'user12@yahoo.com', '', '', 'approved', '', '2016-03-29 05:30:47'),
(33, 8, 1, 2, 1, 0, 'Carpet cleaning,House cleaning', 'Home', 'Yes', 'One day', '', '', '03/31/2016', '', 'test', '2000', 'My professional will travel to me', 'Gulshan', 'requestuploads/apex-logo.jpg', 'requestuploads/over-top.jpg', 'requestuploads/1458470082_internt_web_technology-01.png', '', '', 'Tester name', 'user13@yahoo.com', '', '', 'approved', '', '2016-03-29 06:57:42'),
(34, 9, 1, 2, 1, 0, 'Carpet cleaning', 'Home', 'Yes', 'One day', '', '', '03/31/2016', '', 'sadfasdfasdf', '3000', 'My professional will travel to me', 'FB Area', '', '', '', '', '', 'Test User', 'aalogic@gmail.com', '', '', 'completed', 'I decided to do it myself or had a friend help', '2016-03-30 05:15:52'),
(35, 10, 1, 1, 2, 0, 'Nanny', 'Pakistani', '2', 'Yes', 'Home', 'Dogs', '03/31/2016', '', '', '', 'I travel to my professional', 'FB Area', '', '', '', '', '', 'Ahmed', 'myusername@yahoo.com', '', '', 'approved', '', '2016-03-30 07:48:29'),
(36, 11, 1, 2, 1, 0, 'Carpet cleaning', 'Home', 'Yes', 'One day', '', '', '', '', 'test', '', '', '', '', '', '', '', '', 'ayaz ahmed', 'testuser0001@yahoo.com', '', '', 'approved', '', '2016-03-31 04:23:38');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

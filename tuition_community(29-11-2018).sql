-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 09:52 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuition_community`
--

-- --------------------------------------------------------

--
-- Table structure for table `geoloc`
--

CREATE TABLE IF NOT EXISTS `geoloc` (
  `geo_id` int(11) NOT NULL AUTO_INCREMENT,
  `geo_state` varchar(255) NOT NULL,
  `geo_dist` varchar(255) NOT NULL,
  `geo_city` varchar(255) NOT NULL,
  `geo_lat` float NOT NULL,
  `geo_lon` float NOT NULL,
  PRIMARY KEY (`geo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=829 ;

-- --------------------------------------------------------

--
-- Table structure for table `master_subject`
--

CREATE TABLE IF NOT EXISTS `master_subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE IF NOT EXISTS `parent` (
  `parent_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_name` varchar(255) NOT NULL,
  `parent_ic` varchar(255) NOT NULL,
  `parent_telno` varchar(255) NOT NULL,
  `parent_dob` date DEFAULT NULL,
  `parent_gender` varchar(25) NOT NULL,
  `parent_email` varchar(255) NOT NULL,
  `parent_last_update` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_status` varchar(50) NOT NULL DEFAULT 'UNPAID',
  `payment_receipt` varchar(255) NOT NULL,
  `list_id` int(11) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `profilepic_upload`
--

CREATE TABLE IF NOT EXISTS `profilepic_upload` (
  `upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT 'user.png',
  PRIMARY KEY (`upload_id`),
  KEY `usr_id` (`usr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) NOT NULL,
  `student_ic` varchar(255) NOT NULL,
  `student_start_date` date DEFAULT NULL,
  `student_telno` varchar(255) NOT NULL,
  `student_dob` date DEFAULT NULL,
  `student_gender` varchar(25) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_last_update` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `tuition`
--

CREATE TABLE IF NOT EXISTS `tuition` (
  `tuition_id` int(11) NOT NULL AUTO_INCREMENT,
  `tuition_name` varchar(100) NOT NULL,
  `tuition_telno` varchar(100) NOT NULL,
  `tuition_email` varchar(100) NOT NULL,
  `tuition_address` varchar(100) NOT NULL,
  `tuition_state` varchar(255) NOT NULL,
  `tuition_area` varchar(255) NOT NULL,
  `tuition_rating` float NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`tuition_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `tuition_package`
--

CREATE TABLE IF NOT EXISTS `tuition_package` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `tuition_id` int(11) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `package_capacity` int(11) NOT NULL,
  `package_price` float NOT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `tuition_package_subject`
--

CREATE TABLE IF NOT EXISTS `tuition_package_subject` (
  `package_subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `subject_day` varchar(25) DEFAULT NULL,
  `subject_start_hour` time DEFAULT NULL,
  `subject_end_hour` time DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`package_subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `tuition_review`
--

CREATE TABLE IF NOT EXISTS `tuition_review` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(255) NOT NULL,
  `tuition_id` int(11) NOT NULL,
  `review_star` int(11) NOT NULL,
  `review_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `review_comments` varchar(2048) COLLATE utf8_unicode_ci NOT NULL,
  `review_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `tuition_student_list`
--

CREATE TABLE IF NOT EXISTS `tuition_student_list` (
  `list_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `start_date` date NOT NULL,
  PRIMARY KEY (`list_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

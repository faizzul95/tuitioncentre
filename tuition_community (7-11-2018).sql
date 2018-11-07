-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 04:24 PM
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
-- Table structure for table `master_subject`
--

CREATE TABLE IF NOT EXISTS `master_subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `master_subject`
--

INSERT INTO `master_subject` (`subject_id`, `subject_name`) VALUES
(1, 'Bahasa Melayu'),
(2, 'English'),
(3, 'Science'),
(4, 'Sejarah'),
(5, 'Mathematic'),
(6, 'Additional Mathematic'),
(7, 'Geography');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `parent_name`, `parent_ic`, `parent_telno`, `parent_dob`, `parent_gender`, `parent_email`, `parent_last_update`, `user_id`) VALUES
(1, 'ppp', 'ppp', 'ppp', '2018-11-08', 'male', 'ppp', '2018-11-06', 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_ic`, `student_start_date`, `student_telno`, `student_dob`, `student_gender`, `student_email`, `student_last_update`, `user_id`) VALUES
(1, 'sss', 'sss', NULL, 'sss', '2000-01-01', 'male', 'sss', '2018-11-04', 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tuition`
--

INSERT INTO `tuition` (`tuition_id`, `tuition_name`, `tuition_telno`, `tuition_email`, `tuition_address`, `tuition_state`, `tuition_area`, `tuition_rating`, `user_id`) VALUES
(1, 'aaa', 'aaa', 'aaa', 'aaa', 'JOHOR', 'aaa', 0, 1);

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
  `package_subject` varchar(255) NOT NULL,
  `package_description` varchar(2048) NOT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tuition_package`
--

INSERT INTO `tuition_package` (`package_id`, `tuition_id`, `package_name`, `package_capacity`, `package_price`, `package_subject`, `package_description`) VALUES
(1, 1, '123', 123, 123, 'English,Sejarah', ''),
(2, 1, '321', 321, 321, 'English,Science', '321'),
(3, 1, '222', 222, 222, 'English,Science,Mathematic', '222'),
(4, 1, '33333', 333, 333, 'English,Science,Sejarah,Mathematic', '333'),
(5, 1, '444', 444, 444, 'Bahasa Melayu,English,Additional Mathematic', '444'),
(6, 1, 'test', 0, 0, 'Bahasa Melayu,English,Science,Sejarah,Mathematic,Additional Mathematic,Geography', 'tt');

-- --------------------------------------------------------

--
-- Table structure for table `tuition_review`
--

CREATE TABLE IF NOT EXISTS `tuition_review` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(255) NOT NULL,
  `tuition_id` int(11) NOT NULL,
  `ratingNumber` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `posted_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Block, 0 = Unblock',
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tuition_student_list`
--

INSERT INTO `tuition_student_list` (`list_id`, `package_id`, `student_id`, `start_date`) VALUES
(1, 0, 1, '2018-11-06'),
(2, 0, 1, '2018-11-06'),
(3, 0, 1, '2018-11-06'),
(4, 0, 1, '2018-11-14'),
(5, 1, 0, '2018-11-15'),
(6, 1, 1, '2018-11-30'),
(7, 1, 1, '2018-11-01');

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

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_type`, `user_password`) VALUES
(1, 'aaa', 'tuition', 'aaa'),
(2, 'sss', 'student', 'sss'),
(3, 'ppp', 'parent', 'ppp');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

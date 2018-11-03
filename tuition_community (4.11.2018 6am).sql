-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2018 at 11:09 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `master_subject`
--

INSERT INTO `master_subject` (`subject_id`, `subject_name`) VALUES
(1, 'BM'),
(2, 'BI');

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
(1, 'Mohd Fahmy Izwan Bin Zulkhafri', '950514025299', NULL, '01111019984', '2018-11-01', 'male', 'fahmy_izwan@yahoo.com', '2018-11-03', 1);

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
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`tuition_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tuition`
--

INSERT INTO `tuition` (`tuition_id`, `tuition_name`, `tuition_telno`, `tuition_email`, `tuition_address`, `tuition_state`, `tuition_area`, `user_id`) VALUES
(1, 'aaa', 'aaa', 'aaa', 'aaa', 'SELANGOR', 'test Area', 3);

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
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tuition_package`
--

INSERT INTO `tuition_package` (`package_id`, `tuition_id`, `package_name`, `package_capacity`, `package_price`, `package_subject`) VALUES
(1, 2, '1111', 11, 0, ''),
(2, 0, 'Math Package', 50, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tuition_review`
--

CREATE TABLE IF NOT EXISTS `tuition_review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `review_comm` varchar(255) NOT NULL,
  `review_rate` int(11) NOT NULL,
  `review_date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tuition_student_list`
--

CREATE TABLE IF NOT EXISTS `tuition_student_list` (
  `list_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  PRIMARY KEY (`list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(1, '123', 'student', '123'),
(2, 'faizzul123', 'parent', 'faizzul123'),
(3, 'aaa', 'tuition', 'aaa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

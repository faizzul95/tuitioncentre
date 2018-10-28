-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 04:50 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuition_community_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) NOT NULL,
  `student_ic` varchar(255) NOT NULL,
  `student_start_date` date NOT NULL,
  `student_telno` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`tuition_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tuition`
--

INSERT INTO `tuition` (`tuition_id`, `tuition_name`, `tuition_telno`, `tuition_email`, `tuition_address`) VALUES
(4, 'Maths Pro Shah Alam', '0113131', 'pakarbinawebsite@gmail.com', 'No.19,Jalan Indah, 2/10,, Taman Puchong Indah');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tuition_student_list`
--

INSERT INTO `tuition_student_list` (`list_id`, `subject_id`, `student_id`) VALUES
(3, 0, 0),
(4, 0, 0),
(5, 0, 0),
(6, 0, 2147483647),
(7, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tuition_subject`
--

CREATE TABLE IF NOT EXISTS `tuition_subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `tuition_id` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_capacity` int(11) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tuition_subject`
--

INSERT INTO `tuition_subject` (`subject_id`, `tuition_id`, `subject_name`, `subject_capacity`) VALUES
(1, 0, '1111', 11),
(2, 0, 'Math Package', 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `user_telno` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_type`, `password`, `user_fullname`, `user_telno`, `user_address`) VALUES
(1, 'admin@gmail.com', '', 'admin@gmail.com', 'admin@gmail.com', '', ''),
(8, 'hardik', 'user', '123', '', '', ''),
(13, 'pakarbinawebsite@gmail.com', 'user', '123', 'Mohd Ashraf', '01313133123', ''),
(14, 'website@gmail.com', 'user', '123', 'Mohd Ashraf', '0112321323', ''),
(15, 'fefsdf@gmail.com', 'user', '123', 'fdsfd', '33545345', 'No.19,Jalan Indah, 2/10,\r\nTaman Puchong Indah'),
(16, '', 'user', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
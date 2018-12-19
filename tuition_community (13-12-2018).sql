-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 09:55 AM
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
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_desc` varchar(2056) NOT NULL,
  `com_forum_id` int(11) NOT NULL,
  `com_user` int(11) NOT NULL,
  `com_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`com_id`, `com_desc`, `com_forum_id`, `com_user`, `com_date`) VALUES
(1, 'test com 1', 1, 2, '2018-12-10 23:24:40'),
(2, 'test com 2', 1, 3, '2018-12-10 23:24:40'),
(3, 'test 3', 1, 2, '2018-12-11 14:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `forum_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_user` int(11) NOT NULL,
  `forum_title` varchar(255) NOT NULL,
  `forum_desc` varchar(2056) NOT NULL,
  `forum_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`forum_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forum_id`, `forum_user`, `forum_title`, `forum_desc`, `forum_date`) VALUES
(2, 1, 'test 2', 'test 2                    	', '2018-12-09 22:19:34');

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

--
-- Dumping data for table `geoloc`
--

INSERT INTO `geoloc` (`geo_id`, `geo_state`, `geo_dist`, `geo_city`, `geo_lat`, `geo_lon`) VALUES
(1, 'Kedah', 'Baling', 'Baling', 5.6831, 100.911),
(2, 'Kedah', 'Baling', 'Baling', 5.8149, 100.892),
(3, 'Kedah', 'Baling', 'Baling', 5.7138, 100.801),
(4, 'Kedah', 'Baling', 'Baling', 5.7073, 100.96),
(5, 'Kedah', 'Baling', 'Baling', 5.6875, 100.926),
(6, 'Kedah', 'Baling', 'Baling', 5.6914, 100.849),
(7, 'Kedah', 'Bandar Baharu', 'Serdang', 5.2144, 100.615),
(8, 'Kedah', 'Bandar Baharu', 'Serdang', 5.1964, 100.584),
(9, 'Kedah', 'Bandar Baharu', 'Serdang', 5.2035, 100.627),
(10, 'Kedah', 'Bandar Baharu', 'Serdang', 5.2455, 100.602),
(11, 'Kedah', 'Bandar Baharu', 'Serdang', 5.2251, 100.595),
(12, 'Kedah', 'Bandar Baharu', 'Serdang', 5.2648, 100.614),
(13, 'Kedah', 'Kuala Muda', 'Sungai Petani', 5.6552, 100.529),
(14, 'Kedah', 'Kuala Muda', 'Sungai Petani', 5.647, 100.486),
(15, 'Kedah', 'Kuala Muda', 'Sungai Petani', 5.6432, 100.57),
(16, 'Kedah', 'Kuala Muda', 'Sungai Petani', 5.6519, 100.549),
(17, 'Kedah', 'Kuala Muda', 'Sungai Petani', 5.6852, 100.57),
(18, 'Kedah', 'Kuala Muda', 'Sungai Petani', 5.6695, 100.493),
(19, 'Kedah', 'Kubang Pasu', 'Jitra', 6.2413, 100.432),
(20, 'Kedah', 'Kubang Pasu', 'Jitra', 6.2793, 100.42),
(21, 'Kedah', 'Kubang Pasu', 'Jitra', 6.273, 100.458),
(22, 'Kedah', 'Kubang Pasu', 'Jitra', 6.3288, 100.478),
(23, 'Kedah', 'Kubang Pasu', 'Jitra', 6.2683, 100.425),
(24, 'Kedah', 'Kubang Pasu', 'Jitra', 6.2757, 100.422),
(25, 'Kedah', 'Kubang Pasu', 'Jitra', 6.3288, 100.478),
(26, 'Kedah', 'Kulim', 'Kulim', 5.3411, 100.565),
(27, 'Kedah', 'Kulim', 'Kulim', 5.4165, 100.58),
(28, 'Kedah', 'Kulim', 'Kulim', 5.309, 100.566),
(29, 'Kedah', 'Kulim', 'Kulim', 5.3926, 100.537),
(30, 'Kedah', 'Kulim', 'Kulim', 5.3683, 100.558),
(31, 'Kedah', 'Kulim', 'Kulim', 5.3846, 100.546),
(32, 'Kedah', 'Kota Setar', 'Alor Setar', 6.124, 100.368),
(33, 'Kedah', 'Kota Setar', 'Alor Setar', 6.1281, 100.343),
(34, 'Kedah', 'Kota Setar', 'Alor Setar', 6.1609, 100.363),
(35, 'Kedah', 'Kota Setar', 'Alor Setar', 6.1205, 100.368),
(36, 'Kedah', 'Kota Setar', 'Alor Setar', 6.1512, 100.348),
(37, 'Kedah', 'Kota Setar', 'Alor Setar', 6.1085, 100.355),
(38, 'Kedah', 'Langkawi', 'Langkawi', 6.346, 99.7904),
(39, 'Kedah', 'Langkawi', 'Langkawi', 6.3311, 99.8313),
(40, 'Kedah', 'Langkawi', 'Langkawi', 6.285, 99.7472),
(41, 'Kedah', 'Langkawi', 'Langkawi', 6.3918, 99.7166),
(42, 'Kedah', 'Langkawi', 'Langkawi', 6.3406, 99.7838),
(43, 'Kedah', 'Langkawi', 'Langkawi', 6.3613, 99.7897),
(44, 'Kedah', 'Padang Terap', 'Kuala Nerang', 6.2465, 100.578),
(45, 'Kedah', 'Padang Terap', 'Kuala Nerang', 6.2692, 100.624),
(46, 'Kedah', 'Padang Terap', 'Kuala Nerang', 6.1984, 100.752),
(47, 'Kedah', 'Padang Terap', 'Kuala Nerang', 6.2803, 100.544),
(48, 'Kedah', 'Padang Terap', 'Kuala Nerang', 6.201, 100.718),
(49, 'Kedah', 'Padang Terap', 'Kuala Nerang', 6.2296, 100.622),
(50, 'Kedah', 'Pendang', 'Pendang', 5.9717, 100.515),
(51, 'Kedah', 'Pendang', 'Pendang', 6.0218, 100.481),
(52, 'Kedah', 'Pendang', 'Pendang', 5.9588, 100.477),
(53, 'Kedah', 'Pendang', 'Pendang', 5.9962, 100.608),
(54, 'Kedah', 'Pendang', 'Pendang', 6.0255, 100.521),
(55, 'Kedah', 'Pendang', 'Pendang', 6.0326, 100.541),
(56, 'Kedah', 'Pokok Sena', 'Pokok Sena', 6.103, 100.616),
(57, 'Kedah', 'Pokok Sena', 'Pokok Sena', 6.2139, 100.511),
(58, 'Kedah', 'Pokok Sena', 'Pokok Sena', 6.1091, 100.717),
(59, 'Kedah', 'Pokok Sena', 'Pokok Sena', 6.0494, 100.616),
(60, 'Kedah', 'Pokok Sena', 'Pokok Sena', 6.1585, 100.501),
(61, 'Kedah', 'Pokok Sena', 'Pokok Sena', 6.1176, 100.628),
(62, 'Kedah', 'Sik', 'Sik', 5.9903, 100.815),
(63, 'Kedah', 'Sik', 'Sik', 6.0098, 100.751),
(64, 'Kedah', 'Sik', 'Sik', 5.9835, 100.694),
(65, 'Kedah', 'Sik', 'Sik', 5.7513, 100.726),
(66, 'Kedah', 'Sik', 'Sik', 5.8261, 100.73),
(67, 'Kedah', 'Sik', 'Sik', 6.0347, 100.727),
(68, 'Kedah', 'Yan', 'Yan', 5.7855, 100.372),
(69, 'Kedah', 'Yan', 'Yan', 5.8398, 100.385),
(70, 'Kedah', 'Yan', 'Yan', 5.8398, 100.416),
(71, 'Kedah', 'Yan', 'Yan', 5.8744, 100.422),
(72, 'Kedah', 'Yan', 'Yan', 5.8544, 100.409),
(73, 'Kedah', 'Yan', 'Yan', 5.821, 100.388),
(74, 'Perlis', 'Arau', 'Arau', 6.433, 100.26),
(75, 'Perlis', 'Arau', 'Arau', 6.4256, 100.289),
(76, 'Perlis', 'Arau', 'Arau', 6.3906, 100.251),
(77, 'Perlis', 'Arau', 'Arau', 6.4399, 100.331),
(78, 'Perlis', 'Arau', 'Arau', 6.4345, 100.314),
(79, 'Perlis', 'Arau', 'Arau', 6.4311, 100.253),
(80, 'Perlis', 'Kangar', 'Kangar', 6.4396, 100.193),
(81, 'Perlis', 'Kangar', 'Kangar', 6.4497, 100.198),
(82, 'Perlis', 'Kangar', 'Kangar', 6.4465, 100.203),
(83, 'Perlis', 'Kangar', 'Kangar', 6.462, 100.169),
(84, 'Perlis', 'Kangar', 'Kangar', 6.5106, 100.254),
(85, 'Perlis', 'Kangar', 'Kangar', 6.4416, 100.192),
(86, 'Perlis', 'Padang Besar', 'Padang Besar', 6.6605, 100.312),
(87, 'Perlis', 'Padang Besar', 'Padang Besar', 6.6999, 100.21),
(88, 'Perlis', 'Padang Besar', 'Padang Besar', 6.6551, 100.28),
(89, 'Perlis', 'Padang Besar', 'Padang Besar', 6.6624, 100.285),
(90, 'Perlis', 'Padang Besar', 'Padang Besar', 6.6325, 100.272),
(91, 'Perlis', 'Padang Besar', 'Padang Besar', 6.6543, 100.255),
(92, 'Perlis', 'Kuala Perlis', 'Kuala Perlis', 6.3968, 100.13),
(93, 'Perlis', 'Kuala Perlis', 'Kuala Perlis', 6.4056, 100.146),
(94, 'Perlis', 'Kuala Perlis', 'Kuala Perlis', 6.4151, 100.149),
(95, 'Perlis', 'Kuala Perlis', 'Kuala Perlis', 6.3919, 100.16),
(96, 'Perlis', 'Kuala Perlis', 'Kuala Perlis', 6.3865, 100.147),
(97, 'Perlis', 'Kuala Perlis', 'Kuala Perlis', 6.4072, 100.149),
(98, 'Perak', 'Batang Padang', 'Tapah', 4.1963, 101.259),
(99, 'Perak', 'Batang Padang', 'Tapah', 4.1898, 101.262),
(100, 'Perak', 'Batang Padang', 'Tapah', 4.2088, 101.257),
(101, 'Perak', 'Batang Padang', 'Tapah', 4.1887, 101.265),
(102, 'Perak', 'Batang Padang', 'Tapah', 4.2124, 101.238),
(103, 'Perak', 'Batang Padang', 'Tapah', 4.2141, 101.291),
(104, 'Perak', 'Hilir Perak', 'Teluk Intan', 4.0183, 101.006),
(105, 'Perak', 'Hilir Perak', 'Teluk Intan', 4.0486, 101.031),
(106, 'Perak', 'Hilir Perak', 'Teluk Intan', 3.9979, 101.015),
(107, 'Perak', 'Hilir Perak', 'Teluk Intan', 4.003, 101.036),
(108, 'Perak', 'Hilir Perak', 'Teluk Intan', 4.0796, 100.967),
(109, 'Perak', 'Hilir Perak', 'Teluk Intan', 4.0536, 101.047),
(110, 'Perak', 'Hulu Perak', 'Gerik', 5.4456, 101.112),
(111, 'Perak', 'Hulu Perak', 'Gerik', 5.4763, 101.177),
(112, 'Perak', 'Hulu Perak', 'Lenggong', 5.171, 100.928),
(113, 'Perak', 'Hulu Perak', 'Lenggong', 5.1013, 100.971),
(114, 'Perak', 'Hulu Perak', 'Lenggong', 5.1382, 100.967),
(115, 'Perak', 'Hulu Perak', 'Lenggong', 5, 100.97),
(116, 'Perak', 'Hulu Perak', 'Lenggong', 5.282, 101.03),
(117, 'Perak', 'Hulu Perak', 'Lenggong', 5.309, 101.113),
(118, 'Perak', 'Hulu Perak', 'Gerik', 5.3902, 101.183),
(119, 'Perak', 'Hulu Perak', 'Gerik', 5.3601, 101.147),
(120, 'Perak', 'Hulu Perak', 'Gerik', 5.4928, 101.149),
(121, 'Perak', 'Hulu Perak', 'Gerik', 5.3848, 101.109),
(122, 'Perak', 'Kampar', 'Kampar', 4.2006, 101.153),
(123, 'Perak', 'Kampar', 'Kampar', 4.3239, 101.144),
(124, 'Perak', 'Kampar', 'Kampar', 4.2862, 101.145),
(125, 'Perak', 'Kampar', 'Kampar', 4.2417, 101.14),
(126, 'Perak', 'Kampar', 'Kampar', 4.2707, 101.134),
(127, 'Perak', 'Kampar', 'Kampar', 4.3144, 101.142),
(128, 'Perak', 'Kerian', 'Parit Buntar', 5.1251, 100.489),
(129, 'Perak', 'Kerian', 'Parit Buntar', 5.1149, 100.477),
(130, 'Perak', 'Kerian', 'Parit Buntar', 5.1057, 100.489),
(131, 'Perak', 'Kerian', 'Parit Buntar', 5.1169, 100.463),
(132, 'Perak', 'Kerian', 'Parit Buntar', 5.1078, 100.489),
(133, 'Perak', 'Kerian', 'Parit Buntar', 5.1281, 100.483),
(134, 'Perak', 'Kinta', 'Ipoh', 4.628, 101.097),
(135, 'Perak', 'Kinta', 'Ipoh', 4.6654, 101.095),
(136, 'Perak', 'Kinta', 'Ipoh', 4.5977, 101.107),
(137, 'Perak', 'Kinta', 'Ipoh', 4.6517, 101.073),
(138, 'Perak', 'Kinta', 'Ipoh', 4.6227, 101.067),
(139, 'Perak', 'Kinta', 'Ipoh', 4.5969, 101.075),
(140, 'Perak', 'Kuala Kangsar', 'Kuala Kangsar', 4.7668, 100.948),
(141, 'Perak', 'Kuala Kangsar', 'Kuala Kangsar', 4.7701, 100.931),
(142, 'Perak', 'Kuala Kangsar', 'Kuala Kangsar', 4.7821, 100.934),
(143, 'Perak', 'Kuala Kangsar', 'Kuala Kangsar', 4.7704, 100.916),
(144, 'Perak', 'Kuala Kangsar', 'Kuala Kangsar', 4.7501, 100.934),
(145, 'Perak', 'Kuala Kangsar', 'Kuala Kangsar', 4.7873, 100.956),
(146, 'Perak', 'Larut; Matang & Selama', 'Taiping', 4.8495, 100.741),
(147, 'Perak', 'Larut; Matang & Selama', 'Taiping', 4.8584, 100.74),
(148, 'Perak', 'Larut; Matang & Selama', 'Taiping', 4.8533, 100.733),
(149, 'Perak', 'Larut; Matang & Selama', 'Taiping', 4.8636, 100.733),
(150, 'Perak', 'Larut; Matang & Selama', 'Taiping', 4.8849, 100.733),
(151, 'Perak', 'Larut; Matang & Selama', 'Taiping', 4.8434, 100.709),
(152, 'Perak', 'Manjung', 'Seri Manjung', 4.1809, 100.64),
(153, 'Perak', 'Manjung', 'Seri Manjung', 4.1962, 100.665),
(154, 'Perak', 'Manjung', 'Seri Manjung', 4.2144, 100.669),
(155, 'Perak', 'Manjung', 'Seri Manjung', 4.1845, 100.664),
(156, 'Perak', 'Manjung', 'Seri Manjung', 4.2197, 100.67),
(157, 'Perak', 'Manjung', 'Seri Manjung', 4.1924, 100.657),
(158, 'Perak', 'Muallim', 'Tanjung Malim', 3.7046, 101.505),
(159, 'Perak', 'Muallim', 'Tanjung Malim', 3.6936, 101.52),
(160, 'Perak', 'Muallim', 'Tanjung Malim', 3.6857, 101.526),
(161, 'Perak', 'Muallim', 'Tanjung Malim', 3.7025, 101.51),
(162, 'Perak', 'Muallim', 'Tanjung Malim', 3.8027, 101.501),
(163, 'Perak', 'Muallim', 'Tanjung Malim', 3.8348, 101.409),
(164, 'Perak', 'Perak Tengah', 'Seri Iskandar', 4.3657, 100.959),
(165, 'Perak', 'Perak Tengah', 'Seri Iskandar', 4.3533, 100.961),
(166, 'Perak', 'Perak Tengah', 'Seri Iskandar', 4.3637, 100.981),
(167, 'Perak', 'Perak Tengah', 'Seri Iskandar', 4.3684, 100.959),
(168, 'Perak', 'Perak Tengah', 'Seri Iskandar', 4.3646, 100.983),
(169, 'Perak', 'Perak Tengah', 'Seri Iskandar', 4.366, 100.955),
(170, 'Penang', 'Barat Daya Pulau Pinang', 'Balik Pulau', 5.3765, 100.22),
(171, 'Penang', 'Barat Daya Pulau Pinang', 'Balik Pulau', 5.3593, 100.211),
(172, 'Penang', 'Barat Daya Pulau Pinang', 'Balik Pulau', 5.3404, 100.237),
(173, 'Penang', 'Barat Daya Pulau Pinang', 'Balik Pulau', 5.3346, 100.228),
(174, 'Penang', 'Barat Daya Pulau Pinang', 'Balik Pulau', 5.3415, 100.214),
(175, 'Penang', 'Barat Daya Pulau Pinang', 'Balik Pulau', 5.3494, 100.233),
(176, 'Penang', 'Seberang Perai Selatan', 'Sungai Jawi', 5.2625, 100.511),
(177, 'Penang', 'Seberang Perai Selatan', 'Sungai Jawi', 5.1819, 100.481),
(178, 'Penang', 'Seberang Perai Selatan', 'Sungai Jawi', 5.1538, 100.483),
(179, 'Penang', 'Seberang Perai Selatan', 'Sungai Jawi', 5.2673, 100.452),
(180, 'Penang', 'Seberang Perai Selatan', 'Sungai Jawi', 5.2347, 100.508),
(181, 'Penang', 'Seberang Perai Selatan', 'Sungai Jawi', 5.2759, 100.483),
(182, 'Penang', 'Seberang Perai Tengah', 'Bukit Mertajam', 5.3486, 100.483),
(183, 'Penang', 'Seberang Perai Tengah', 'Bukit Mertajam', 5.3749, 100.467),
(184, 'Penang', 'Seberang Perai Tengah', 'Bukit Mertajam', 5.3739, 100.421),
(185, 'Penang', 'Seberang Perai Tengah', 'Bukit Mertajam', 5.341, 100.513),
(186, 'Penang', 'Seberang Perai Tengah', 'Bukit Mertajam', 5.3656, 100.447),
(187, 'Penang', 'Seberang Perai Tengah', 'Bukit Mertajam', 5.3594, 100.463),
(188, 'Penang', 'Seberang Perai Utara', 'Kepala Batas', 5.517, 100.449),
(189, 'Penang', 'Seberang Perai Utara', 'Kepala Batas', 5.5351, 100.465),
(190, 'Penang', 'Seberang Perai Utara', 'Kepala Batas', 5.5023, 100.446),
(191, 'Penang', 'Seberang Perai Utara', 'Kepala Batas', 5.4777, 100.439),
(192, 'Penang', 'Seberang Perai Utara', 'Kepala Batas', 5.5261, 100.465),
(193, 'Penang', 'Seberang Perai Utara', 'Kepala Batas', 5.5149, 100.434),
(194, 'Penang', 'Timur Laut Pulau Pinang', 'George Town', 5.4271, 100.306),
(195, 'Penang', 'Timur Laut Pulau Pinang', 'George Town', 5.3977, 100.302),
(196, 'Penang', 'Timur Laut Pulau Pinang', 'George Town', 5.4182, 100.328),
(197, 'Penang', 'Timur Laut Pulau Pinang', 'George Town', 5.3844, 100.305),
(198, 'Penang', 'Timur Laut Pulau Pinang', 'George Town', 5.4178, 100.32),
(199, 'Penang', 'Timur Laut Pulau Pinang', 'George Town', 5.4145, 100.313),
(200, 'Selangor', 'Gombak', 'Rawang', 3.3004, 101.64),
(201, 'Selangor', 'Gombak', 'Rawang', 3.2826, 101.526),
(202, 'Selangor', 'Gombak', 'Rawang', 3.2394, 101.541),
(203, 'Selangor', 'Gombak', 'Rawang', 3.2638, 101.684),
(204, 'Selangor', 'Gombak', 'Rawang', 3.3192, 101.575),
(205, 'Selangor', 'Hulu Langat', 'Hulu Langat', 3.1997, 101.857),
(206, 'Selangor', 'Hulu Langat', 'Hulu Langat', 3.1593, 101.891),
(207, 'Selangor', 'Hulu Langat', 'Hulu Langat', 3.1284, 101.828),
(208, 'Selangor', 'Hulu Langat', 'Hulu Langat', 3.0904, 101.794),
(209, 'Selangor', 'Hulu Langat', 'Hulu Langat', 3.1355, 101.835),
(210, 'Selangor', 'Hulu Selangor', 'Kuala Kubu Baru', 3.5617, 101.657),
(211, 'Selangor', 'Hulu Selangor', 'Kuala Kubu Baru', 3.5621, 101.659),
(212, 'Selangor', 'Hulu Selangor', 'Kuala Kubu Baru', 3.5635, 101.661),
(213, 'Selangor', 'Hulu Selangor', 'Kuala Kubu Baru', 3.5628, 101.656),
(214, 'Selangor', 'Hulu Selangor', 'Kuala Kubu Baru', 3.5736, 101.673),
(215, 'Selangor', 'Klang', 'Klang', 3.0239, 101.459),
(216, 'Selangor', 'Klang', 'Klang', 3.0426, 101.421),
(217, 'Selangor', 'Klang', 'Klang', 3.0534, 101.468),
(218, 'Selangor', 'Klang', 'Klang', 3.0693, 101.425),
(219, 'Selangor', 'Klang', 'Klang', 3.0453, 101.445),
(220, 'Selangor', 'Kuala Langat', 'Banting', 2.8002, 101.501),
(221, 'Selangor', 'Kuala Langat', 'Banting', 2.8866, 101.545),
(222, 'Selangor', 'Kuala Langat', 'Banting', 2.936, 101.494),
(223, 'Selangor', 'Kuala Langat', 'Banting', 2.877, 101.314),
(224, 'Selangor', 'Kuala Langat', 'Banting', 2.815, 101.506),
(225, 'Selangor', 'Kuala Selangor', 'Kuala Selangor', 3.3494, 101.285),
(226, 'Selangor', 'Kuala Selangor', 'Kuala Selangor', 3.3574, 101.315),
(227, 'Selangor', 'Kuala Selangor', 'Kuala Selangor', 3.3355, 101.298),
(228, 'Selangor', 'Kuala Selangor', 'Kuala Selangor', 3.3884, 101.256),
(229, 'Selangor', 'Kuala Selangor', 'Kuala Selangor', 3.3322, 101.25),
(230, 'Selangor', 'Petaling', 'Shah Alam', 3.1061, 101.56),
(231, 'Selangor', 'Petaling', 'Shah Alam', 3.1349, 101.505),
(232, 'Selangor', 'Petaling', 'Shah Alam', 3.0046, 101.567),
(233, 'Selangor', 'Petaling', 'Shah Alam', 3.1198, 101.637),
(234, 'Selangor', 'Petaling', 'Shah Alam', 3.0584, 101.494),
(235, 'Selangor', 'Petaling', 'Shah Alam', 3.047, 101.543),
(236, 'Selangor', 'Petaling', 'Shah Alam', 3.09221, 101.486),
(237, 'Selangor', 'Petaling', 'Shah Alam', 3.1064, 101.515),
(238, 'Selangor', 'Petaling', 'Shah Alam', 3.0415, 101.521),
(239, 'Selangor', 'Petaling', 'Sg Buloh', 3.1979, 101.541),
(240, 'Selangor', 'Petaling', 'Sg Buloh', 3.1973, 101.579),
(241, 'Selangor', 'Petaling', 'Sg Buloh', 3.1733, 101.545),
(242, 'Selangor', 'Petaling', 'Sg Buloh', 3.231, 101.552),
(243, 'Selangor', 'Petaling', 'Sg Buloh', 3.205, 101.499),
(244, 'Selangor', 'Petaling', 'Damansara', 3.1419, 101.575),
(245, 'Selangor', 'Petaling', 'Damansara', 3.1217, 101.612),
(246, 'Selangor', 'Petaling', 'Damansara', 3.1604, 101.599),
(247, 'Selangor', 'Petaling', 'Damansara', 3.1229, 101.556),
(248, 'Selangor', 'Petaling', 'Damansara', 3.158, 101.603),
(249, 'Selangor', 'Sepang', 'Sepang', 2.8062, 101.715),
(250, 'Selangor', 'Sepang', 'Sepang', 2.7664, 101.742),
(251, 'Selangor', 'Sepang', 'Sepang', 2.7047, 101.733),
(252, 'Selangor', 'Sepang', 'Sepang', 2.8295, 101.716),
(253, 'Selangor', 'Sepang', 'Sepang', 2.6884, 101.75),
(254, 'Selangor', 'Sabak Bernam', 'Sabak Bernam', 3.5526, 101.163),
(255, 'Selangor', 'Sabak Bernam', 'Sabak Bernam', 3.7801, 101.022),
(256, 'Selangor', 'Sabak Bernam', 'Sabak Bernam', 3.7112, 101.002),
(257, 'Selangor', 'Sabak Bernam', 'Sabak Bernam', 3.6468, 101.299),
(258, 'Selangor', 'Sabak Bernam', 'Sabak Bernam', 3.7626, 100.988),
(259, 'N.Sembilan', 'Jelebu', 'Kuala Klawang', 2.927, 102.105),
(260, 'N.Sembilan', 'Jelebu', 'Kuala Klawang', 2.9702, 102.189),
(261, 'N.Sembilan', 'Jelebu', 'Kuala Klawang', 2.8619, 102.096),
(262, 'N.Sembilan', 'Jelebu', 'Kuala Klawang', 2.9538, 102.041),
(263, 'N.Sembilan', 'Jelebu', 'Kuala Klawang', 2.9652, 102.109),
(264, 'N.Sembilan', 'Jelebu', 'Kuala Klawang', 2.9505, 102.085),
(265, 'N.Sembilan', 'Jempol', 'Bahau / Jempol', 2.8037, 102.42),
(266, 'N.Sembilan', 'Jempol', 'Bahau / Jempol', 2.7784, 102.39),
(267, 'N.Sembilan', 'Jempol', 'Bahau / Jempol', 2.8482, 102.375),
(268, 'N.Sembilan', 'Jempol', 'Bahau / Jempol', 2.8215, 102.443),
(269, 'N.Sembilan', 'Jempol', 'Bahau / Jempol', 2.8097, 102.402),
(270, 'N.Sembilan', 'Jempol', 'Bahau / Jempol', 2.8075, 102.4),
(271, 'N.Sembilan', 'Kuala Pilah', 'Kuala Pilah', 2.6997, 102.234),
(272, 'N.Sembilan', 'Kuala Pilah', 'Kuala Pilah', 2.7302, 102.298),
(273, 'N.Sembilan', 'Kuala Pilah', 'Kuala Pilah', 2.7662, 102.231),
(274, 'N.Sembilan', 'Kuala Pilah', 'Kuala Pilah', 2.8242, 102.268),
(275, 'N.Sembilan', 'Kuala Pilah', 'Kuala Pilah', 2.741, 102.244),
(276, 'N.Sembilan', 'Kuala Pilah', 'Kuala Pilah', 2.7454, 102.247),
(277, 'N.Sembilan', 'Port Dickson', 'Lukut', 2.5887, 101.844),
(278, 'N.Sembilan', 'Port Dickson', 'Lukut', 2.5315, 101.841),
(279, 'N.Sembilan', 'Port Dickson', 'Lukut', 2.6315, 101.786),
(280, 'N.Sembilan', 'Port Dickson', 'Lukut', 2.4683, 101.866),
(281, 'N.Sembilan', 'Port Dickson', 'Lukut', 2.571, 101.831),
(282, 'N.Sembilan', 'Port Dickson', 'Lukut', 2.5602, 101.813),
(283, 'N.Sembilan', 'Rembau', 'Rembau', 2.5854, 102.161),
(284, 'N.Sembilan', 'Rembau', 'Rembau', 2.5504, 102.076),
(285, 'N.Sembilan', 'Rembau', 'Rembau', 2.6018, 102.111),
(286, 'N.Sembilan', 'Rembau', 'Rembau', 2.5127, 102.069),
(287, 'N.Sembilan', 'Rembau', 'Rembau', 2.5905, 102.093),
(288, 'N.Sembilan', 'Rembau', 'Rembau', 2.592, 102.099),
(289, 'N.Sembilan', 'Seremban', 'Seremban', 2.6966, 102.041),
(290, 'N.Sembilan', 'Seremban', 'Seremban', 2.6994, 101.913),
(291, 'N.Sembilan', 'Seremban', 'Seremban', 2.6434, 102.016),
(292, 'N.Sembilan', 'Seremban', 'Seremban', 2.7529, 101.977),
(293, 'N.Sembilan', 'Seremban', 'Seremban', 2.7226, 101.941),
(294, 'N.Sembilan', 'Seremban', 'Seremban', 2.7201, 101.941),
(295, 'Melaka', 'Tampin', 'Tampin', 2.472, 102.254),
(296, 'Melaka', 'Tampin', 'Tampin', 2.4974, 102.274),
(297, 'Melaka', 'Tampin', 'Tampin', 2.5073, 102.227),
(298, 'Melaka', 'Tampin', 'Tampin', 2.5257, 102.238),
(299, 'Melaka', 'Tampin', 'Tampin', 2.4682, 102.23),
(300, 'Melaka', 'Tampin', 'Tampin', 2.4693, 102.221),
(301, 'Melaka', 'Alor Gajah', 'Alor Gajah', 2.4007, 102.287),
(302, 'Melaka', 'Alor Gajah', 'Alor Gajah', 2.4473, 102.22),
(303, 'Melaka', 'Alor Gajah', 'Alor Gajah', 2.3876, 102.291),
(304, 'Melaka', 'Alor Gajah', 'Alor Gajah', 2.4624, 102.202),
(305, 'Melaka', 'Alor Gajah', 'Alor Gajah', 2.3819, 102.21),
(306, 'Melaka', 'Alor Gajah', 'Alor Gajah', 2.3782, 102.209),
(307, 'Melaka', 'Jasin', 'Jasin', 2.2546, 102.444),
(308, 'Melaka', 'Jasin', 'Jasin', 2.3191, 102.35),
(309, 'Melaka', 'Jasin', 'Jasin', 2.315, 102.452),
(310, 'Melaka', 'Jasin', 'Jasin', 2.3253, 102.371),
(311, 'Melaka', 'Jasin', 'Jasin', 2.3055, 102.423),
(312, 'Melaka', 'Jasin', 'Jasin', 2.3057, 102.423),
(313, 'Melaka', 'Melaka Tengah', 'Melaka Tengah', 2.2543, 102.211),
(314, 'Melaka', 'Melaka Tengah', 'Melaka Tengah', 2.2632, 102.288),
(315, 'Melaka', 'Melaka Tengah', 'Melaka Tengah', 2.1946, 102.315),
(316, 'Melaka', 'Melaka Tengah', 'Melaka Tengah', 2.2817, 102.168),
(317, 'Melaka', 'Melaka Tengah', 'Melaka Tengah', 2.2718, 102.286),
(318, 'Melaka', 'Melaka Tengah', 'Melaka Tengah', 2.2573, 102.279),
(319, 'Pahang', 'Bentong', 'Bentong', 3.5665, 101.972),
(320, 'Pahang', 'Bentong', 'Bentong', 3.3636, 101.983),
(321, 'Pahang', 'Bentong', 'Bentong', 3.2101, 102.164),
(322, 'Pahang', 'Bentong', 'Bentong', 3.2841, 102.222),
(323, 'Pahang', 'Bentong', 'Bentong', 3.5253, 101.904),
(324, 'Pahang', 'Bentong', 'Bentong', 3.5269, 101.907),
(325, 'Pahang', 'Bera', 'Bandar Bera', 3.1845, 102.467),
(326, 'Pahang', 'Bera', 'Bandar Bera', 3.0255, 102.676),
(327, 'Pahang', 'Bera', 'Bandar Bera', 3.2229, 102.369),
(328, 'Pahang', 'Bera', 'Bandar Bera', 3.3655, 102.569),
(329, 'Pahang', 'Bera', 'Bandar Bera', 3.2715, 102.452),
(330, 'Pahang', 'Bera', 'Bandar Bera', 3.2453, 102.413),
(331, 'Pahang', 'Cameron Highlands', 'Tanah Rata', 4.4943, 101.445),
(332, 'Pahang', 'Cameron Highlands', 'Tanah Rata', 4.4163, 101.474),
(333, 'Pahang', 'Cameron Highlands', 'Tanah Rata', 4.482, 101.557),
(334, 'Pahang', 'Cameron Highlands', 'Tanah Rata', 4.5207, 101.398),
(335, 'Pahang', 'Cameron Highlands', 'Tanah Rata', 4.4676, 101.389),
(336, 'Pahang', 'Cameron Highlands', 'Tanah Rata', 4.4888, 101.377),
(337, 'Pahang', 'Jerantut', 'Jerantut', 3.9943, 102.414),
(338, 'Pahang', 'Jerantut', 'Jerantut', 4.0135, 102.215),
(339, 'Pahang', 'Jerantut', 'Jerantut', 3.8559, 102.363),
(340, 'Pahang', 'Jerantut', 'Kuala Tahan', 4.317, 102.44),
(341, 'Pahang', 'Jerantut', 'Kuala Tahan', 4.3132, 102.376),
(342, 'Pahang', 'Jerantut', 'Kuala Tahan', 4.356, 102.418),
(343, 'Pahang', 'Jerantut', 'Kuala Tahan', 4.3432, 102.378),
(344, 'Pahang', 'Jerantut', 'Kuala Tahan', 4.4032, 102.379),
(345, 'Pahang', 'Jerantut', 'Jerantut', 3.9806, 102.526),
(346, 'Pahang', 'Jerantut', 'Jerantut', 3.9382, 102.36),
(347, 'Pahang', 'Jerantut', 'Jerantut', 3.9315, 102.362),
(348, 'Pahang', 'Kuantan', 'Kuantan', 3.8688, 103.168),
(349, 'Pahang', 'Kuantan', 'Kuantan', 3.803, 103.234),
(350, 'Pahang', 'Kuantan', 'Kuantan', 3.729, 103.248),
(351, 'Pahang', 'Kuantan', 'Kuantan', 3.8318, 103.312),
(352, 'Pahang', 'Kuantan', 'Kuantan', 3.793, 103.166),
(353, 'Pahang', 'Kuantan', 'Kuantan', 3.7831, 103.236),
(354, 'Pahang', 'Lipis', 'Lipis', 4.2476, 102.084),
(355, 'Pahang', 'Lipis', 'Lipis', 4.0969, 102.196),
(356, 'Pahang', 'Lipis', 'Lipis', 4.2421, 101.706),
(357, 'Pahang', 'Lipis', 'Lipis', 4.4365, 101.913),
(358, 'Pahang', 'Lipis', 'Lipis', 4.182, 102.053),
(359, 'Pahang', 'Lipis', 'Lipis', 4.1735, 102.044),
(360, 'Pahang', 'Maran', 'Maran', 3.5411, 102.773),
(361, 'Pahang', 'Maran', 'Maran', 3.6595, 102.881),
(362, 'Pahang', 'Maran', 'Maran', 3.5217, 102.691),
(363, 'Pahang', 'Maran', 'Maran', 3.5149, 102.831),
(364, 'Pahang', 'Maran', 'Maran', 3.5838, 102.784),
(365, 'Pahang', 'Maran', 'Maran', 3.582, 102.772),
(366, 'Pahang', 'Pekan', 'Pekan', 3.1067, 103.404),
(367, 'Pahang', 'Pekan', 'Pekan', 3.2184, 103.42),
(368, 'Pahang', 'Pekan', 'Pekan', 3.4878, 103.363),
(369, 'Pahang', 'Pekan', 'Pekan', 3.5879, 103.35),
(370, 'Pahang', 'Pekan', 'Pekan', 3.4892, 103.39),
(371, 'Pahang', 'Pekan', 'Pekan', 3.5022, 103.382),
(372, 'Pahang', 'Raub', 'Raub', 3.9023, 101.809),
(373, 'Pahang', 'Raub', 'Raub', 3.8571, 101.904),
(374, 'Pahang', 'Raub', 'Raub', 3.7269, 101.831),
(375, 'Pahang', 'Raub', 'Raub', 4.0502, 101.775),
(376, 'Pahang', 'Raub', 'Raub', 3.7956, 101.855),
(377, 'Pahang', 'Raub', 'Raub', 3.808, 101.847),
(378, 'Pahang', 'Rompin', 'Rompin', 2.7158, 103.504),
(379, 'Pahang', 'Rompin', 'Rompin', 2.7497, 103.055),
(380, 'Pahang', 'Rompin', 'Rompin', 3.1474, 102.849),
(381, 'Pahang', 'Rompin', 'Rompin', 2.618, 103.602),
(382, 'Pahang', 'Rompin', 'Rompin', 2.7085, 102.505),
(383, 'Pahang', 'Rompin', 'Tun Razak', 2.96868, 103.005),
(384, 'Pahang', 'Rompin', 'Tun Razak', 2.8923, 103.009),
(385, 'Pahang', 'Rompin', 'Rompin', 2.86903, 103.235),
(386, 'Pahang', 'Rompin', 'Rompin', 2.88439, 103.267),
(387, 'Pahang', 'Rompin', 'Rompin', 2.8807, 103.219),
(388, 'Pahang', 'Rompin', 'Rompin', 2.91805, 103.227),
(389, 'Pahang', 'Rompin', 'Tun Razak', 3.0028, 102.929),
(390, 'Pahang', 'Rompin', 'Tun Razak', 3.0104, 103.014),
(391, 'Pahang', 'Rompin', 'Rompin', 2.6946, 102.526),
(392, 'Pahang', 'Temerloh', 'Temerloh', 3.4409, 102.491),
(393, 'Pahang', 'Temerloh', 'Temerloh', 3.3829, 102.445),
(394, 'Pahang', 'Temerloh', 'Temerloh', 3.4487, 102.395),
(395, 'Pahang', 'Temerloh', 'Temerloh', 3.5413, 102.441),
(396, 'Pahang', 'Temerloh', 'Temerloh', 3.4475, 102.419),
(397, 'Pahang', 'Temerloh', 'Temerloh', 3.4508, 102.419),
(398, 'Pahang', 'Temerloh', 'Temerloh', 3.4475, 102.419),
(399, 'Terengganu', 'Besut', 'Jerteh', 5.6143, 102.559),
(400, 'Terengganu', 'Besut', 'Jerteh', 5.6935, 102.526),
(401, 'Terengganu', 'Besut', 'Jerteh', 5.7455, 102.559),
(402, 'Terengganu', 'Besut', 'Jerteh', 5.5897, 102.578),
(403, 'Terengganu', 'Dungun', 'Dungun', 4.7962, 103.368),
(404, 'Terengganu', 'Dungun', 'Dungun', 4.73333, 103.403),
(405, 'Terengganu', 'Dungun', 'Dungun', 4.7189, 103.348),
(406, 'Terengganu', 'Dungun', 'Dungun', 4.8024, 103.251),
(407, 'Terengganu', 'Hulu Terengganu', 'Kuala Berang', 5.1014, 102.896),
(408, 'Terengganu', 'Hulu Terengganu', 'Kuala Berang', 5.152, 102.97),
(409, 'Terengganu', 'Hulu Terengganu', 'Kuala Berang', 5.1766, 102.829),
(410, 'Terengganu', 'Hulu Terengganu', 'Kuala Berang', 5.2655, 102.895),
(411, 'Terengganu', 'Kemaman', 'Chukai', 4.2366, 103.303),
(412, 'Terengganu', 'Kemaman', 'Chukai', 4.3749, 103.329),
(413, 'Terengganu', 'Kemaman', 'Chukai', 4.2846, 103.348),
(414, 'Terengganu', 'Kemaman', 'Chukai', 4.1729, 103.26),
(415, 'Terengganu', 'Kuala Nerus', 'Gong Badak', 5.3656, 103.089),
(416, 'Terengganu', 'Kuala Nerus', 'Gong Badak', 5.3707, 103.053),
(417, 'Terengganu', 'Kuala Nerus', 'Gong Badak', 5.3748, 103.108),
(418, 'Terengganu', 'Kuala Nerus', 'Gong Badak', 5.3765, 103.038),
(419, 'Terengganu', 'Kuala Terengganu', 'Kuala Terengganu', 5.237, 102.994),
(420, 'Terengganu', 'Kuala Terengganu', 'Kuala Terengganu', 5.4065, 103.034),
(421, 'Terengganu', 'Kuala Terengganu', 'Kuala Terengganu', 5.2849, 103.139),
(422, 'Terengganu', 'Kuala Terengganu', 'Kuala Terengganu', 5.1878, 103.047),
(423, 'Terengganu', 'Marang', 'Marang', 5.1419, 103.155),
(424, 'Terengganu', 'Marang', 'Marang', 5.0941, 103.224),
(425, 'Terengganu', 'Marang', 'Marang', 4.9545, 103.257),
(426, 'Terengganu', 'Marang', 'Marang', 4.949, 103.335),
(427, 'Terengganu', 'Setiu', 'Bandar Permaisuri', 5.5172, 102.76),
(428, 'Terengganu', 'Setiu', 'Bandar Permaisuri', 5.4687, 102.849),
(429, 'Terengganu', 'Setiu', 'Bandar Permaisuri', 5.4445, 102.835),
(430, 'Terengganu', 'Setiu', 'Bandar Permaisuri', 5.5305, 102.756),
(431, 'Kelantan', 'Bachok', 'Bachok', 6.0291, 102.399),
(432, 'Kelantan', 'Bachok', 'Bachok', 5.9643, 102.432),
(433, 'Kelantan', 'Bachok', 'Bachok', 5.9253, 102.429),
(434, 'Kelantan', 'Bachok', 'Bachok', 5.9745, 102.396),
(435, 'Kelantan', 'Gua Musang', 'Gua Musang', 4.8685, 101.953),
(436, 'Kelantan', 'Gua Musang', 'Gua Musang', 4.939, 101.962),
(437, 'Kelantan', 'Gua Musang', 'Gua Musang', 4.8049, 102.014),
(438, 'Kelantan', 'Gua Musang', 'Gua Musang', 4.8364, 101.87),
(439, 'Kelantan', 'Jeli', 'Jeli', 5.7054, 101.858),
(440, 'Kelantan', 'Jeli', 'Jeli', 5.6217, 101.848),
(441, 'Kelantan', 'Jeli', 'Jeli', 5.5684, 101.898),
(442, 'Kelantan', 'Jeli', 'Jeli', 5.716, 101.835),
(443, 'Kelantan', 'Kota Bharu', 'Kota Bharu', 6.1383, 102.305),
(444, 'Kelantan', 'Kota Bharu', 'Kota Bharu', 6.0591, 102.33),
(445, 'Kelantan', 'Kota Bharu', 'Kota Bharu', 6.0984, 102.383),
(446, 'Kelantan', 'Kota Bharu', 'Kota Bharu', 6.099, 102.253),
(447, 'Kelantan', 'Kuala Krai', 'Kuala Krai', 5.4841, 102.266),
(448, 'Kelantan', 'Kuala Krai', 'Kuala Krai', 5.4253, 102.32),
(449, 'Kelantan', 'Kuala Krai', 'Kuala Krai', 5.6262, 102.16),
(450, 'Kelantan', 'Kuala Krai', 'Kuala Krai', 5.594, 102.274),
(451, 'Kelantan', 'Lojing', 'Lojing', 4.7919, 101.942),
(452, 'Kelantan', 'Lojing', 'Lojing', 4.5966, 101.433),
(453, 'Kelantan', 'Lojing', 'Lojing', 4.5978, 101.432),
(454, 'Kelantan', 'Lojing', 'Lojing', 4.5987, 101.431),
(455, 'Kelantan', 'Machang', 'Machang', 5.7593, 102.25),
(456, 'Kelantan', 'Machang', 'Machang', 5.8129, 102.26),
(457, 'Kelantan', 'Machang', 'Machang', 5.7644, 102.182),
(458, 'Kelantan', 'Machang', 'Machang', 5.7436, 102.242),
(459, 'Kelantan', 'Pasir Mas', 'Pasir Mas', 6.0174, 102.117),
(460, 'Kelantan', 'Pasir Mas', 'Pasir Mas', 5.9573, 102.192),
(461, 'Kelantan', 'Pasir Mas', 'Pasir Mas', 5.93, 102.085),
(462, 'Kelantan', 'Pasir Mas', 'Pasir Mas', 6.0953, 102.102),
(463, 'Kelantan', 'Pasir Puteh', 'Pasir Puteh', 5.8006, 102.412),
(464, 'Kelantan', 'Pasir Puteh', 'Pasir Puteh', 5.8881, 102.39),
(465, 'Kelantan', 'Pasir Puteh', 'Pasir Puteh', 5.8963, 102.456),
(466, 'Kelantan', 'Pasir Puteh', 'Pasir Puteh', 5.7806, 102.352),
(467, 'Kelantan', 'Tanah Merah', 'Tanah Merah', 5.8106, 102.089),
(468, 'Kelantan', 'Tanah Merah', 'Tanah Merah', 5.8946, 102.099),
(469, 'Kelantan', 'Tanah Merah', 'Tanah Merah', 5.7627, 102.11),
(470, 'Kelantan', 'Tanah Merah', 'Tanah Merah', 5.844, 101.956),
(471, 'Kelantan', 'Tumpat', 'Tumpat', 6.2273, 102.096),
(472, 'Kelantan', 'Tumpat', 'Tumpat', 6.1453, 102.153),
(473, 'Kelantan', 'Tumpat', 'Tumpat', 6.1781, 102.223),
(474, 'Kelantan', 'Tumpat', 'Tumpat', 6.2081, 102.111),
(475, 'Johor', 'Batu Pahat', 'Batu Pahat', 1.9544, 102.855),
(476, 'Johor', 'Batu Pahat', 'Batu Pahat', 1.8391, 103.127),
(477, 'Johor', 'Batu Pahat', 'Batu Pahat', 1.8659, 103.158),
(478, 'Johor', 'Batu Pahat', 'Batu Pahat', 1.919, 102.92),
(479, 'Johor', 'Batu Pahat', 'Batu Pahat', 1.862, 103.092),
(480, 'Johor', 'Batu Pahat', 'Batu Pahat', 1.741, 103.044),
(481, 'Johor', 'Batu Pahat', 'Batu Pahat', 1.853, 102.936),
(482, 'Johor', 'Johor Bahru', 'Johor Bahru', 1.4975, 103.616),
(483, 'Johor', 'Johor Bahru', 'Johor Bahru', 1.5187, 103.757),
(484, 'Johor', 'Johor Bahru', 'Johor Bahru', 1.5675, 103.772),
(485, 'Johor', 'Johor Bahru', 'Johor Bahru', 1.4645, 103.745),
(486, 'Johor', 'Kluang', 'Kluang', 1.9862, 103.328),
(487, 'Johor', 'Kluang', 'Kluang', 2.0696, 103.344),
(488, 'Johor', 'Kluang', 'Kluang', 2.0248, 103.322),
(489, 'Johor', 'Kluang', 'Kluang', 2.043, 103.32),
(490, 'Johor', 'Kluang', 'Kluang', 1.9943, 103.264),
(491, 'Johor', 'Kluang', 'Kluang', 1.99, 103.362),
(492, 'Johor', 'Kluang', 'Kluang', 2.104, 103.454),
(493, 'Johor', 'Kota Tinggi', 'Kota Tinggi', 1.7148, 103.896),
(494, 'Johor', 'Kota Tinggi', 'Kota Tinggi', 1.7891, 103.91),
(495, 'Johor', 'Kota Tinggi', 'Kota Tinggi', 1.7568, 103.881),
(496, 'Johor', 'Kota Tinggi', 'Kota Tinggi', 1.7405, 103.911),
(497, 'Johor', 'Kulai', 'Kulai', 1.6484, 103.601),
(498, 'Johor', 'Kulai', 'Kulai', 1.6809, 103.585),
(499, 'Johor', 'Kulai', 'Kulai', 1.6331, 103.6),
(500, 'Johor', 'Kulai', 'Kulai', 1.6632, 103.601),
(501, 'Johor', 'Tangkak', 'Tangkak', 2.2693, 102.534),
(502, 'Johor', 'Tangkak', 'Tangkak', 2.2698, 102.533),
(503, 'Johor', 'Tangkak', 'Tangkak', 2.2715, 102.552),
(504, 'Johor', 'Tangkak', 'Tangkak', 2.2875, 102.551),
(505, 'Johor', 'Mersing', 'Mersing', 2.4299, 103.846),
(506, 'Johor', 'Mersing', 'Mersing', 2.4165, 103.831),
(507, 'Johor', 'Mersing', 'Mersing', 2.3945, 103.863),
(508, 'Johor', 'Mersing', 'Mersing', 2.4775, 103.817),
(509, 'Johor', 'Muar', 'Muar', 2.0708, 102.578),
(510, 'Johor', 'Muar', 'Muar', 2.087, 102.587),
(511, 'Johor', 'Muar', 'Muar', 2.052, 102.614),
(512, 'Johor', 'Muar', 'Muar', 2.0389, 102.571),
(513, 'Johor', 'Muar', 'Pagoh', 2.1275, 102.713),
(514, 'Johor', 'Muar', 'Pagoh', 2.10214, 102.716),
(515, 'Johor', 'Muar', 'Pagoh', 2.113, 102.78),
(516, 'Johor', 'Muar', 'Pagoh', 2.1378, 102.772),
(517, 'Johor', 'Muar', 'Pagoh', 2.17, 102.767),
(518, 'Johor', 'Pontian', 'Pontian', 1.4666, 103.457),
(519, 'Johor', 'Pontian', 'Pontian', 1.489, 103.482),
(520, 'Johor', 'Pontian', 'Pontian', 1.4873, 103.559),
(521, 'Johor', 'Pontian', 'Pontian', 1.5237, 103.424),
(522, 'Johor', 'Segamat', 'Segamat', 2.3814, 102.953),
(523, 'Johor', 'Segamat', 'Segamat', 2.6305, 102.717),
(524, 'Johor', 'Segamat', 'Segamat', 2.5314, 102.71),
(525, 'Johor', 'Segamat', 'Segamat', 2.6021, 102.837),
(526, 'WP', 'Kuala Lumpur', 'Kuala Lumpur', 3.1464, 101.7),
(527, 'WP', 'Kuala Lumpur', 'Kuala Lumpur', 3.156, 101.718),
(528, 'WP', 'Kuala Lumpur', 'Kuala Lumpur', 3.183, 101.675),
(529, 'WP', 'Kuala Lumpur', 'Kuala Lumpur', 3.117, 101.668),
(530, 'WP', 'Putrajaya', 'Putrajaya', 2.9229, 101.702),
(531, 'WP', 'Putrajaya', 'Putrajaya', 2.9335, 101.673),
(532, 'WP', 'Putrajaya', 'Putrajaya', 2.9673, 101.697),
(533, 'WP', 'Putrajaya', 'Putrajaya', 2.9083, 101.679),
(534, 'WP', 'Labuan', 'Labuan', 5.2829, 115.246),
(535, 'WP', 'Labuan', 'Labuan', 5.2891, 115.197),
(536, 'WP', 'Labuan', 'Labuan', 5.3318, 115.234),
(537, 'WP', 'Labuan', 'Labuan', 5.2937, 115.244),
(538, 'Sabah', 'Beaufort', 'Beaufort', 5.2785, 115.715),
(539, 'Sabah', 'Beaufort', 'Beaufort', 5.3988, 115.885),
(540, 'Sabah', 'Beaufort', 'Beaufort', 5.1752, 115.656),
(541, 'Sabah', 'Beaufort', 'Beaufort', 5.2901, 115.739),
(542, 'Sabah', 'Beluran', 'Beluran', 5.724, 117.095),
(543, 'Sabah', 'Beluran', 'Beluran', 5.7008, 117.242),
(544, 'Sabah', 'Beluran', 'Beluran', 5.8887, 117.422),
(545, 'Sabah', 'Beluran', 'Beluran', 5.7951, 117.531),
(546, 'Sabah', 'Keningau', 'Keningau', 5.375, 116.195),
(547, 'Sabah', 'Keningau', 'Keningau', 5.1316, 116.111),
(548, 'Sabah', 'Keningau', 'Keningau', 5.2027, 116.383),
(549, 'Sabah', 'Keningau', 'Keningau', 5.0837, 116.259),
(550, 'Sabah', 'Kinabatangan', 'Kinabatangan', 5.3412, 116.948),
(551, 'Sabah', 'Kinabatangan', 'Kinabatangan', 5.5654, 117.354),
(552, 'Sabah', 'Kinabatangan', 'Kinabatangan', 5.4451, 117.826),
(553, 'Sabah', 'Kinabatangan', 'Kinabatangan', 5.4069, 118.431),
(554, 'Sabah', 'Kota Belut', 'Kota Belut', 6.3491, 116.474),
(555, 'Sabah', 'Kota Belut', 'Kota Belut', 6.4494, 116.462),
(556, 'Sabah', 'Kota Belut', 'Kota Belut', 6.3511, 116.556),
(557, 'Sabah', 'Kota Belut', 'Kota Belut', 6.3825, 116.448),
(558, 'Sabah', 'Kota Kinabalu', 'Kota Kinabalu', 5.9587, 116.082),
(559, 'Sabah', 'Kota Kinabalu', 'Kota Kinabalu', 6.0257, 116.152),
(560, 'Sabah', 'Kota Kinabalu', 'Kota Kinabalu', 6.0998, 116.179),
(561, 'Sabah', 'Kota Kinabalu', 'Kota Kinabalu', 6.0943, 116.143),
(562, 'Sabah', 'Kota Marudu', 'Kota Marudu', 6.7827, 117.141),
(563, 'Sabah', 'Kota Marudu', 'Kota Marudu', 6.4717, 116.833),
(564, 'Sabah', 'Kota Marudu', 'Kota Marudu', 6.6491, 116.73),
(565, 'Sabah', 'Kota Marudu', 'Kota Marudu', 6.6682, 117.193),
(566, 'Sabah', 'Kuala Penyu', 'Kuala Penyu', 5.4317, 115.467),
(567, 'Sabah', 'Kuala Penyu', 'Kuala Penyu', 5.4501, 115.537),
(568, 'Sabah', 'Kuala Penyu', 'Kuala Penyu', 5.486, 115.589),
(569, 'Sabah', 'Kuala Penyu', 'Kuala Penyu', 5.5414, 115.559),
(570, 'Sabah', 'Kuala Penyu', 'Kuala Penyu', 5.5575, 115.569),
(571, 'Sabah', 'Kuala Penyu', 'Kuala Penyu', 5.5689, 115.596),
(572, 'Sabah', 'Kudat', 'Kudat', 6.7424, 116.75),
(573, 'Sabah', 'Kudat', 'Kudat', 6.9244, 116.71),
(574, 'Sabah', 'Kudat', 'Kudat', 6.7969, 116.666),
(575, 'Sabah', 'Kudat', 'Kudat', 6.8433, 116.825),
(576, 'Sabah', 'Kudat', 'Kudat', 6.8835, 116.85),
(577, 'Sabah', 'Kudat', 'Kudat', 6.9067, 116.84),
(578, 'Sabah', 'Kunak', 'Kunak', 4.7209, 118.043),
(579, 'Sabah', 'Kunak', 'Kunak', 4.7517, 117.901),
(580, 'Sabah', 'Kunak', 'Kunak', 4.7989, 118.069),
(581, 'Sabah', 'Kunak', 'Kunak', 4.647, 118.172),
(582, 'Sabah', 'Kunak', 'Kunak', 4.6842, 118.245),
(583, 'Sabah', 'Kunak', 'Kunak', 4.6795, 118.234),
(584, 'Sabah', 'Lahad Datu', 'Lahad Datu', 5.0568, 118.536),
(585, 'Sabah', 'Lahad Datu', 'Lahad Datu', 5.1867, 119.057),
(586, 'Sabah', 'Lahad Datu', 'Lahad Datu', 5.1293, 117.749),
(587, 'Sabah', 'Lahad Datu', 'Lahad Datu', 5.0896, 118.211),
(588, 'Sabah', 'Lahad Datu', 'Lahad Datu', 5.0256, 118.328),
(589, 'Sabah', 'Lahad Datu', 'Lahad Datu', 5.0274, 118.317),
(590, 'Sabah', 'Nabawan', 'Nabawan', 5.0399, 116.446),
(591, 'Sabah', 'Nabawan', 'Nabawan', 5.0539, 116.508),
(592, 'Sabah', 'Nabawan', 'Nabawan', 5.0542, 116.349),
(593, 'Sabah', 'Nabawan', 'Nabawan', 4.9674, 116.452),
(594, 'Sabah', 'Nabawan', 'Nabawan', 5.045, 116.435),
(595, 'Sabah', 'Nabawan', 'Nabawan', 5.0409, 116.427),
(596, 'Sabah', 'Papar', 'Papar', 5.6987, 115.977),
(597, 'Sabah', 'Papar', 'Papar', 5.5986, 115.933),
(598, 'Sabah', 'Papar', 'Papar', 5.7267, 116.09),
(599, 'Sabah', 'Papar', 'Papar', 5.8111, 116.029),
(600, 'Sabah', 'Papar', 'Papar', 5.7346, 115.931),
(601, 'Sabah', 'Papar', 'Papar', 5.7308, 115.935),
(602, 'Sabah', 'Penampang', 'Penampang', 5.9167, 116.07),
(603, 'Sabah', 'Penampang', 'Penampang', 5.8764, 116.101),
(604, 'Sabah', 'Penampang', 'Penampang', 5.9324, 116.131),
(605, 'Sabah', 'Penampang', 'Penampang', 5.9137, 116.108),
(606, 'Sabah', 'Penampang', 'Penampang', 5.9146, 116.099),
(607, 'Sabah', 'Pitas', 'Pitas', 6.733, 117.053),
(608, 'Sabah', 'Pitas', 'Pitas', 6.7144, 117.049),
(609, 'Sabah', 'Pitas', 'Pitas', 6.708, 117.068),
(610, 'Sabah', 'Pitas', 'Pitas', 6.7028, 117.044),
(611, 'Sabah', 'Pitas', 'Pitas', 6.7036, 117.031),
(612, 'Sabah', 'Pitas', 'Pitas', 6.7116, 117.033),
(613, 'Sabah', 'Putatan', 'Putatan', 5.885, 116.05),
(614, 'Sabah', 'Putatan', 'Putatan', 5.8916, 116.045),
(615, 'Sabah', 'Putatan', 'Putatan', 5.8979, 116.046),
(616, 'Sabah', 'Putatan', 'Putatan', 5.8932, 116.043),
(617, 'Sabah', 'Putatan', 'Putatan', 5.897, 116.042),
(618, 'Sabah', 'Putatan', 'Putatan', 5.8962, 116.04),
(619, 'Sabah', 'Ranau', 'Ranau', 6.0171, 116.742),
(620, 'Sabah', 'Ranau', 'Ranau', 5.9755, 116.826),
(621, 'Sabah', 'Ranau', 'Ranau', 5.7446, 116.816),
(622, 'Sabah', 'Ranau', 'Ranau', 5.9366, 116.677),
(623, 'Sabah', 'Ranau', 'Ranau', 5.9531, 116.662),
(624, 'Sabah', 'Ranau', 'Ranau', 5.9537, 116.669),
(625, 'Sarawak', 'Asajaya', 'Asajaya', 1.4772, 110.686),
(626, 'Sarawak', 'Asajaya', 'Asajaya', 1.5441, 110.657),
(627, 'Sarawak', 'Asajaya', 'Asajaya', 1.5146, 110.536),
(628, 'Sarawak', 'Asajaya', 'Asajaya', 1.5005, 110.667),
(629, 'Sarawak', 'Asajaya', 'Asajaya', 1.5407, 110.514),
(630, 'Sarawak', 'Asajaya', 'Asajaya', 1.5459, 110.524),
(631, 'Sarawak', 'Bau', 'Bau', 1.3558, 110.198),
(632, 'Sarawak', 'Bau', 'Bau', 1.4217, 110.03),
(633, 'Sarawak', 'Bau', 'Bau', 1.3376, 109.981),
(634, 'Sarawak', 'Bau', 'Bau', 1.4258, 110.109),
(635, 'Sarawak', 'Bau', 'Bau', 1.4162, 110.156),
(636, 'Sarawak', 'Bau', 'Bau', 1.4235, 110.155),
(637, 'Sarawak', 'Belaga', 'Belaga', 3.2904, 114.072),
(638, 'Sarawak', 'Belaga', 'Belaga', 3.1094, 113.925),
(639, 'Sarawak', 'Belaga', 'Belaga', 2.8159, 114.443),
(640, 'Sarawak', 'Belaga', 'Belaga', 2.9284, 113.8),
(641, 'Sarawak', 'Belaga', 'Belaga', 3.0456, 113.916),
(642, 'Sarawak', 'Belaga', 'Belaga', 3.0529, 113.921),
(643, 'Sarawak', 'Betong', 'Betong', 1.4644, 111.623),
(644, 'Sarawak', 'Betong', 'Betong', 1.4105, 111.604),
(645, 'Sarawak', 'Betong', 'Betong', 1.314, 111.576),
(646, 'Sarawak', 'Betong', 'Betong', 1.4156, 111.514),
(647, 'Sarawak', 'Betong', 'Betong', 1.402, 111.529),
(648, 'Sarawak', 'Betong', 'Betong', 1.4106, 111.526),
(649, 'Sarawak', 'Bintulu', 'Bintulu', 2.7224, 113.329),
(650, 'Sarawak', 'Bintulu', 'Bintulu', 3.5972, 113.389),
(651, 'Sarawak', 'Bintulu', 'Bintulu', 3.3642, 113.977),
(652, 'Sarawak', 'Bintulu', 'Bintulu', 3.3957, 113.575),
(653, 'Sarawak', 'Bintulu', 'Bintulu', 3.1727, 113.042),
(654, 'Sarawak', 'Bintulu', 'Bintulu', 3.176, 113.041),
(655, 'Sarawak', 'Dalat', 'Dalat', 2.3534, 112.156),
(656, 'Sarawak', 'Dalat', 'Dalat', 2.6381, 112.135),
(657, 'Sarawak', 'Dalat', 'Dalat', 2.8637, 111.84),
(658, 'Sarawak', 'Dalat', 'Dalat', 2.4583, 112.195),
(659, 'Sarawak', 'Dalat', 'Dalat', 2.744, 111.944),
(660, 'Sarawak', 'Dalat', 'Dalat', 2.7405, 111.939),
(661, 'Sarawak', 'Daro', 'Daro', 2.6715, 111.432),
(662, 'Sarawak', 'Daro', 'Daro', 2.4883, 111.519),
(663, 'Sarawak', 'Daro', 'Daro', 2.6831, 111.294),
(664, 'Sarawak', 'Daro', 'Daro', 2.5113, 111.349),
(665, 'Sarawak', 'Daro', 'Daro', 2.5059, 111.45),
(666, 'Sarawak', 'Daro', 'Daro', 2.5122, 111.432),
(667, 'Sarawak', 'Julau', 'Julau', 1.9804, 111.748),
(668, 'Sarawak', 'Julau', 'Julau', 1.7992, 111.92),
(669, 'Sarawak', 'Julau', 'Julau', 1.802, 111.819),
(670, 'Sarawak', 'Julau', 'Julau', 2.0545, 111.96),
(671, 'Sarawak', 'Julau', 'Julau', 2.025, 111.918),
(672, 'Sarawak', 'Julau', 'Julau', 2.0287, 111.912),
(673, 'Sarawak', 'Kanowit', 'Kanowit', 1.8867, 112.141),
(674, 'Sarawak', 'Kanowit', 'Kanowit', 2.0335, 111.996),
(675, 'Sarawak', 'Kanowit', 'Kanowit', 2.1653, 112.283),
(676, 'Sarawak', 'Kanowit', 'Kanowit', 2.087, 112.339),
(677, 'Sarawak', 'Kanowit', 'Kanowit', 2.1015, 112.157),
(678, 'Sarawak', 'Kanowit', 'Kanowit', 2.1014, 112.147),
(679, 'Sarawak', 'Kapit', 'Kapit', 1.9737, 112.857),
(680, 'Sarawak', 'Kapit', 'Kapit', 1.9363, 113.094),
(681, 'Sarawak', 'Kapit', 'Kapit', 1.9109, 113.576),
(682, 'Sarawak', 'Kapit', 'Kapit', 1.6178, 113.068),
(683, 'Sarawak', 'Kapit', 'Kapit', 2.0167, 112.941),
(684, 'Sarawak', 'Kapit', 'Kapit', 2.0153, 112.94),
(685, 'Sarawak', 'Kuching', 'Kuching', 1.5554, 110.327),
(686, 'Sarawak', 'Kuching', 'Kuching', 1.4576, 110.301),
(687, 'Sarawak', 'Kuching', 'Kuching', 1.6337, 110.452),
(688, 'Sarawak', 'Kuching', 'Kuching', 1.7208, 110.342),
(689, 'Sarawak', 'Kuching', 'Kuching', 1.5853, 110.372),
(690, 'Sarawak', 'Kuching', 'Kuching', 1.5864, 110.354),
(691, 'Sarawak', 'Lawas', 'Lawas', 4.491, 115.482),
(692, 'Sarawak', 'Lawas', 'Lawas', 4.699, 115.337),
(693, 'Sarawak', 'Lawas', 'Lawas', 4.7859, 115.533),
(694, 'Sarawak', 'Lawas', 'Lawas', 4.9228, 115.468),
(695, 'Sarawak', 'Lawas', 'Lawas', 4.8612, 115.41),
(696, 'Sarawak', 'Lawas', 'Lawas', 4.8535, 115.401),
(697, 'Sarawak', 'Limbang', 'Limbang', 4.7549, 114.856),
(698, 'Sarawak', 'Limbang', 'Limbang', 4.627, 114.825),
(699, 'Sarawak', 'Limbang', 'Limbang', 4.4538, 115.057),
(700, 'Sarawak', 'Limbang', 'Limbang', 4.0734, 115.315),
(701, 'Sarawak', 'Limbang', 'Limbang', 4.7579, 115.008),
(702, 'Sarawak', 'Limbang', 'Limbang', 4.755, 115.01),
(703, 'Sarawak', 'Lubok Antu', 'Lubok Antu', 1.0887, 111.883),
(704, 'Sarawak', 'Lubok Antu', 'Lubok Antu', 1.2397, 111.825),
(705, 'Sarawak', 'Lubok Antu', 'Lubok Antu', 1.0104, 111.834),
(706, 'Sarawak', 'Lubok Antu', 'Lubok Antu', 1.2315, 111.95),
(707, 'Sarawak', 'Lubok Antu', 'Lubok Antu', 1.1363, 111.669),
(708, 'Sarawak', 'Lubok Antu', 'Lubok Antu', 1.1487, 111.661),
(709, 'Sarawak', 'Lundu', 'Lundu', 1.7497, 109.789),
(710, 'Sarawak', 'Lundu', 'Lundu', 1.6379, 109.957),
(711, 'Sarawak', 'Lundu', 'Lundu', 1.5425, 109.841),
(712, 'Sarawak', 'Lundu', 'Lundu', 1.6214, 110.105),
(713, 'Sarawak', 'Lundu', 'Lundu', 1.6713, 109.854),
(714, 'Sarawak', 'Lundu', 'Lundu', 1.6832, 109.851),
(715, 'Sarawak', 'Maradong', 'Maradong', 2.2077, 111.627),
(716, 'Sarawak', 'Maradong', 'Maradong', 2.2324, 111.522),
(717, 'Sarawak', 'Maradong', 'Maradong', 2.1267, 111.77),
(718, 'Sarawak', 'Maradong', 'Maradong', 2.067, 111.702),
(719, 'Sarawak', 'Maradong', 'Maradong', 2.1703, 111.636),
(720, 'Sarawak', 'Maradong', 'Maradong', 2.1686, 111.634),
(721, 'Sarawak', 'Marudi', 'Marudi', 4.2913, 114.296),
(722, 'Sarawak', 'Marudi', 'Marudi', 4.2458, 114.441),
(723, 'Sarawak', 'Marudi', 'Marudi', 4.0983, 114.458),
(724, 'Sarawak', 'Marudi', 'Marudi', 4.3356, 114.266),
(725, 'Sarawak', 'Marudi', 'Marudi', 4.1788, 114.32),
(726, 'Sarawak', 'Marudi', 'Marudi', 4.1783, 114.326),
(727, 'Sarawak', 'Matu', 'Matu', 2.7948, 111.684),
(728, 'Sarawak', 'Matu', 'Matu', 2.672, 111.563),
(729, 'Sarawak', 'Matu', 'Matu', 2.6377, 111.519),
(730, 'Sarawak', 'Matu', 'Matu', 2.7382, 111.636),
(731, 'Sarawak', 'Matu', 'Matu', 2.7158, 111.566),
(732, 'Sarawak', 'Matu', 'Matu', 2.6697, 111.54),
(733, 'Sarawak', 'Miri', 'Miri', 3.6056, 113.811),
(734, 'Sarawak', 'Miri', 'Miri', 3.7495, 113.787),
(735, 'Sarawak', 'Miri', 'Miri', 4.5411, 114.118),
(736, 'Sarawak', 'Miri', 'Miri', 4.3088, 114.018),
(737, 'Sarawak', 'Miri', 'Miri', 4.3967, 113.993),
(738, 'Sarawak', 'Miri', 'Miri', 4.4011, 113.992),
(739, 'Sarawak', 'Mukah', 'Mukah', 2.9047, 112.265),
(740, 'Sarawak', 'Mukah', 'Mukah', 2.8395, 112.049),
(741, 'Sarawak', 'Mukah', 'Mukah', 2.7778, 112.312),
(742, 'Sarawak', 'Mukah', 'Mukah', 2.6077, 112.215),
(743, 'Sarawak', 'Mukah', 'Mukah', 2.8973, 112.089),
(744, 'Sarawak', 'Mukah', 'Mukah', 2.8949, 112.091),
(745, 'Sarawak', 'Padawan', 'Padawan', 1.4261, 110.325),
(746, 'Sarawak', 'Padawan', 'Padawan', 1.4241, 110.327),
(747, 'Sarawak', 'Padawan', 'Padawan', 1.4289, 110.328),
(748, 'Sarawak', 'Padawan', 'Padawan', 1.4254, 110.327),
(749, 'Sarawak', 'Padawan', 'Padawan', 1.4274, 110.326),
(750, 'Sarawak', 'Padawan', 'Padawan', 1.425, 110.326),
(751, 'Sarawak', 'Pakan', 'Pakan', 1.7615, 111.686),
(752, 'Sarawak', 'Pakan', 'Pakan', 1.8603, 111.708),
(753, 'Sarawak', 'Pakan', 'Pakan', 1.9042, 111.595),
(754, 'Sarawak', 'Pakan', 'Pakan', 1.9708, 111.685),
(755, 'Sarawak', 'Pakan', 'Pakan', 1.8952, 111.68),
(756, 'Sarawak', 'Pakan', 'Pakan', 1.8941, 111.68),
(757, 'Sarawak', 'Samarahan', 'Samarahan', 1.4381, 110.457),
(758, 'Sarawak', 'Samarahan', 'Samarahan', 1.4893, 110.407),
(759, 'Sarawak', 'Samarahan', 'Samarahan', 1.4605, 110.632),
(760, 'Sarawak', 'Samarahan', 'Samarahan', 1.3823, 110.436),
(761, 'Sarawak', 'Samarahan', 'Samarahan', 1.4598, 110.495),
(762, 'Sarawak', 'Samarahan', 'Samarahan', 1.4592, 110.477),
(763, 'Sarawak', 'Saratok', 'Saratok', 1.7486, 111.336),
(764, 'Sarawak', 'Saratok', 'Saratok', 1.7513, 111.303),
(765, 'Sarawak', 'Saratok', 'Saratok', 1.7159, 111.301),
(766, 'Sarawak', 'Saratok', 'Saratok', 1.7913, 111.312),
(767, 'Sarawak', 'Saratok', 'Saratok', 1.7384, 111.338),
(768, 'Sarawak', 'Saratok', 'Saratok', 1.753, 111.341),
(769, 'Sarawak', 'Sarikei', 'Sarikei', 2.1179, 111.569),
(770, 'Sarawak', 'Sarikei', 'Sarikei', 2.0315, 111.511),
(771, 'Sarawak', 'Sarikei', 'Sarikei', 2.0919, 111.373),
(772, 'Sarawak', 'Sarikei', 'Sarikei', 2.1192, 111.528),
(773, 'Sarawak', 'Sarikei', 'Sarikei', 2.1312, 111.522),
(774, 'Sarawak', 'Sarikei', 'Sarikei', 2.1304, 111.525),
(775, 'Sarawak', 'Selagau', 'Selangau', 2.5243, 112.325),
(776, 'Sarawak', 'Selagau', 'Selangau', 2.5225, 112.326),
(777, 'Sarawak', 'Selagau', 'Selangau', 2.5231, 112.327),
(778, 'Sarawak', 'Selagau', 'Selangau', 2.5251, 112.326),
(779, 'Sarawak', 'Selagau', 'Selangau', 2.5232, 112.326),
(780, 'Sarawak', 'Selagau', 'Selangau', 2.5246, 112.326),
(781, 'Sarawak', 'Serian', 'Serian', 1.2155, 110.574),
(782, 'Sarawak', 'Serian', 'Serian', 1.164, 110.654),
(783, 'Sarawak', 'Serian', 'Serian', 1.2628, 110.539),
(784, 'Sarawak', 'Serian', 'Serian', 1.0507, 110.58),
(785, 'Sarawak', 'Serian', 'Serian', 1.1672, 110.566),
(786, 'Sarawak', 'Serian', 'Serian', 1.1731, 110.567),
(787, 'Sarawak', 'Sibu', 'Sibu', 2.3027, 111.886),
(788, 'Sarawak', 'Sibu', 'Sibu', 2.3315, 111.697),
(789, 'Sarawak', 'Sibu', 'Sibu', 2.4632, 111.895),
(790, 'Sarawak', 'Sibu', 'Sibu', 2.1284, 111.903),
(791, 'Sarawak', 'Sibu', 'Sibu', 2.2931, 111.842),
(792, 'Sarawak', 'Sibu', 'Sibu', 2.2956, 111.824),
(793, 'Sarawak', 'Simunjan', 'Simunjan', 1.0871, 110.888),
(794, 'Sarawak', 'Simunjan', 'Simunjan', 1.0823, 110.963),
(795, 'Sarawak', 'Simunjan', 'Simunjan', 1.1973, 110.925),
(796, 'Sarawak', 'Simunjan', 'Simunjan', 1.2381, 110.771),
(797, 'Sarawak', 'Simunjan', 'Simunjan', 1.186, 110.903),
(798, 'Sarawak', 'Simunjan', 'Simunjan', 1.1246, 110.933),
(799, 'Sarawak', 'Song', 'Song', 1.7051, 112.775),
(800, 'Sarawak', 'Song', 'Song', 1.8396, 112.714),
(801, 'Sarawak', 'Song', 'Song', 2.0002, 112.541),
(802, 'Sarawak', 'Song', 'Song', 1.6475, 112.698),
(803, 'Sarawak', 'Song', 'Song', 2.0005, 112.549),
(804, 'Sarawak', 'Song', 'Song', 2.0075, 112.548),
(805, 'Sarawak', 'Sri Aman', 'Sri Aman', 1.1862, 111.449),
(806, 'Sarawak', 'Sri Aman', 'Sri Aman', 1.2713, 111.382),
(807, 'Sarawak', 'Sri Aman', 'Sri Aman', 1.2967, 111.491),
(808, 'Sarawak', 'Sri Aman', 'Sri Aman', 1.2027, 111.515),
(809, 'Sarawak', 'Sri Aman', 'Sri Aman', 1.2307, 111.456),
(810, 'Sarawak', 'Sri Aman', 'Sri Aman', 1.2341, 111.463),
(811, 'Sarawak', 'Tatau', 'Tatau', 2.8711, 112.852),
(812, 'Sarawak', 'Tatau', 'Tatau', 2.8888, 112.849),
(813, 'Sarawak', 'Tatau', 'Tatau', 2.9105, 112.858),
(814, 'Sarawak', 'Tatau', 'Tatau', 3.0045, 112.848),
(815, 'Sarawak', 'Tatau', 'Tatau', 2.8804, 112.854),
(816, 'Sarawak', 'Tatau', 'Tatau', 2.8779, 112.851),
(817, 'Kedah', 'Kubang Pasu', 'Sintok', 6.4576, 100.503),
(818, 'Kedah', 'Kubang Pasu', 'Sintok', 6.446, 100.486),
(819, 'Kedah', 'Kubang Pasu', 'Sintok', 6.44, 100.531),
(820, 'Kedah', 'Kubang Pasu', 'Sintok', 6.442, 100.479),
(821, 'Kedah', 'Kubang Pasu', 'Sintok', 6.425, 100.498),
(822, 'Kedah ', 'Kubang Pasu', 'Sintok', 6.467, 100.538),
(823, 'Kedah', 'Kubang Pasu', 'Bukit Kayu Hitam', 6.5, 100.411),
(824, 'Kedah', 'Kubang Pasu', 'Bukit Kayu Hitam', 6.516, 100.435),
(825, 'Kedah', 'Kubang Pasu', 'Bukit Kayu Hitam', 6.5, 100.228),
(826, 'Kedah', 'Kubang Pasu', 'Bukit Kayu Hitam', 6.515, 100.394),
(827, 'Kedah', 'Kubang Pasu', 'Bukit Kayu Hitam', 6.495, 100.398),
(828, 'Kedah', 'Kubang Pasu', 'Bukit Kayu Hitam', 6.513, 100.445);

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
  `parent_img` varchar(255) NOT NULL DEFAULT 'user.png',
  `parent_last_update` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `parent_name`, `parent_ic`, `parent_telno`, `parent_dob`, `parent_gender`, `parent_email`, `parent_img`, `parent_last_update`, `user_id`) VALUES
(1, 'pppp', 'ppp', 'ppp', '2018-11-08', 'male', 'ppp', 'user.png', '2018-11-06', 3);

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

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_status`, `payment_receipt`, `list_id`) VALUES
(3, 'PAID', '', 1),
(4, 'UNPAID', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `profilepic_upload`
--

CREATE TABLE IF NOT EXISTS `profilepic_upload` (
  `upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `tuition_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT 'user.png',
  PRIMARY KEY (`upload_id`),
  KEY `usr_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) NOT NULL,
  `student_ic` varchar(255) NOT NULL,
  `student_telno` varchar(255) NOT NULL,
  `student_dob` date DEFAULT NULL,
  `student_gender` varchar(25) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_img` varchar(255) NOT NULL DEFAULT 'user.png',
  `student_last_update` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_ic`, `student_telno`, `student_dob`, `student_gender`, `student_email`, `student_img`, `student_last_update`, `user_id`) VALUES
(1, 'sss', 'sss', '01122336655', '2018-11-20', 'female', 'fahmy_izwan@yahoo.com', 'user.png', '2018-11-04', 2),
(2, 'Mohd Fahmy Izwan Bin Zulkhafri', '930514025299', '01111019984', '2018-08-15', 'male', 'fahmy_izwan@yahoo.com', 'user.png', '2018-11-08', 3),
(3, 'chil1', 'child1', 'chil1', '2000-01-01', 'male', 'child1', 'user.png', '2018-11-17', 3),
(4, 'child22', 'child2', 'child2', '0000-00-00', 'male', 'child2', 'user.png', '2018-11-17', 3),
(8, 'ss2', 'ss2', 'ss2', '2018-12-04', 'male', 'ss2', 'user.png', '2018-12-12', 7);

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
  `tuition_district` varchar(255) NOT NULL,
  `tuition_area` varchar(255) NOT NULL,
  `tuition_lat` float NOT NULL,
  `tuition_lon` float NOT NULL,
  `tuition_rating` float NOT NULL,
  `tuition_img` varchar(255) NOT NULL DEFAULT 'user.png',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`tuition_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tuition`
--

INSERT INTO `tuition` (`tuition_id`, `tuition_name`, `tuition_telno`, `tuition_email`, `tuition_address`, `tuition_state`, `tuition_district`, `tuition_area`, `tuition_lat`, `tuition_lon`, `tuition_rating`, `tuition_img`, `user_id`) VALUES
(1, 'aaaa', 'aaa', 'aaa', 'aaa', 'WP', 'test', 'Labuan', 6, 105, 3.66667, 'user.png', 1),
(2, 'bbb', 'bbb', 'bbb', 'bbb', 'JOHOR', 'test', 'Shah Alam', 5, 104, 2.6, 'user.png', 2),
(3, 'ttt', 'ttt', 'tt', 'ttt', 'Selangor', 'Petaling', 'Damansara', 4, 103, 0, 'user.png', 5),
(4, 't2t2', 't2t2', 't2t2', 't2t2', 'WP', 'Kuala Lumpur', 'Kuala Lumpur', 3.14091, 101.616, 0, 'user.png', 6);

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

--
-- Dumping data for table `tuition_package`
--

INSERT INTO `tuition_package` (`package_id`, `tuition_id`, `package_name`, `package_capacity`, `package_price`) VALUES
(1, 1, '123', 123, 123),
(2, 1, '321', 321, 321),
(3, 1, '222', 222, 222),
(5, 1, '444', 25, 444),
(6, 1, 'test', 0, 0),
(9, 1, 'Pecutan Terakhir SPM !', 55, 125),
(10, 2, 'Pecutan Terakhir SPM !', 55, 125);

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

--
-- Dumping data for table `tuition_package_subject`
--

INSERT INTO `tuition_package_subject` (`package_subject_id`, `subject_id`, `subject_day`, `subject_start_hour`, `subject_end_hour`, `package_id`) VALUES
(1, 6, 'Wednesday', '17:05:00', '05:07:00', 10),
(2, 6, 'Thursday', '01:01:00', '14:02:00', 9),
(4, 1, 'Monday', '01:00:00', '14:00:00', 9);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tuition_review`
--

INSERT INTO `tuition_review` (`rating_id`, `package_id`, `tuition_id`, `review_star`, `review_title`, `review_comments`, `review_created`, `student_id`) VALUES
(1, 3, 3, 3, 'OKAY', 'Terbaoeekkkk', '2018-11-02 00:00:00', 0),
(2, 7, 1, 4, 'qwe', 'asd', '2018-11-10 01:14:40', 1),
(3, 9, 1, 3, 'qqq', 'aaa', '2018-11-10 01:36:12', 1),
(4, 9, 1, 4, 'q', '2', '2018-12-13 15:58:55', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tuition_student_list`
--

INSERT INTO `tuition_student_list` (`list_id`, `package_id`, `student_id`, `start_date`) VALUES
(1, 9, 2, '2018-11-07'),
(5, 9, 3, '2018-11-19');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_type`, `user_password`) VALUES
(1, 'aaa', 'tuition', 'aaa'),
(2, 'sss', 'student', 'sss'),
(3, 'ppp', 'parent', 'ppp'),
(5, 'ttt', 'tuition', 'ttt'),
(6, 't2t2', 'tuition', 't2t2'),
(7, 'ss2', 'student', 'ss2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 05:08 PM
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
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` varchar(50) NOT NULL,
  `answer_detail` varchar(2000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `question_id`, `answer_detail`, `datetime`, `user_id`) VALUES
(4, '13', 'this is mehuls answer 1.... to the above asked question....', '2012-04-03 22:45:49', 0),
(5, '13', 'rgua ua nt BIRWGEA baWEQWEHkah', '2012-04-05 03:44:56', 0),
(6, '12', 'using the connectivity query', '2012-04-05 22:49:11', 8),
(7, '14', 'the various stages are \r\nNew,Ready,Running,Blocked,Terminate', '2012-04-06 23:33:43', 9),
(8, '16', 'In the star topology there is a centralized hub. The communication between various nodes through the hub.\r\nIn this type of network there is a bottleneck of the centralized hub.It is widely used in LAN connection.', '2012-04-07 22:14:09', 9),
(9, '16', 'In the star topology there is a centralized hub. The communication between various nodes through the hub.\r\nIn this type of network there is a bottleneck of the centralized hub.It is widely used in LAN connection.', '2012-04-09 05:45:22', 9),
(11, '17', 'You can do it withing Borland or VC++ IDE & Compiler.', '2012-04-10 17:15:51', 8),
(12, '17', 'this is reply 1. and this reply is not 2nd...', '2012-04-12 19:49:44', 8),
(13, '17', 'scheduling algorithm is carried out by various methods such as first come first schedule,round robin scheduling,etc;', '2012-04-11 05:33:46', 8),
(15, '17', 'It has many method to explain the sheduling ', '2012-04-12 12:18:28', 12),
(16, '21', 'swing is swing and applet is not swing.', '2012-04-13 04:20:50', 17),
(17, '17', 'scheduling is....', '2012-04-18 03:49:44', 8),
(18, '11', 'i got the answer', '2012-04-18 05:06:22', 9),
(20, '12', 'connectivity with use of execute query and non-execute query\r\n', '2012-04-18 18:27:14', 8),
(21, '17', '\r\n', '2012-04-21 04:30:38', 8),
(22, '29', 'the thread is sub process...', '2012-04-24 06:41:23', 30),
(23, '29', 'are vah', '2012-04-24 06:54:00', 8),
(24, '31', '>This problem is faced with several of people all you have to do is make it stop doing MIME sniffing. You can disable this MIME sniffing by selecting IE the go to tools then to internet options then click custom level after that select Miscellaneous section. After that scroll down in this section then check enable underâ€ open files based on content, not the file extensionâ€', '2012-04-25 05:48:39', 12),
(25, '32', 'The problem was with the theme. Actually it was customized video game theme that was causing the error. Now its working proper.', '2012-04-25 05:49:35', 12),
(26, '32', 'Can you post a screenshot of the problem ? Even I had never seen such problem that notifications turned black. If possible post the screenshot so that I can see what type of pop message in black color is coming in laptop. Till than you can try setting some another them and see if it works. Hope it will work.', '2012-04-25 05:50:25', 9),
(27, '33', 'As i have doubt if you could reset it from the safe mode. But you can surely do it with the help of an application called "Windows Password Key". Here is the step by step process for doing the same:\r\n\r\n\r\nâ€¢	Download Windows Password key from http://www.lostwindowspassword.com/downloads/Windows_Password_Key_Standard_Demo.exe.\r\nâ€¢	Install it on any other PC that you can access easily.\r\nâ€¢	Now you need to burn a bootable CD/DVD Or better create a USB Flash Drive.\r\nâ€¢	Connect this USB or insert bootable DVD to your Windows 8 system and recover the password.\r\nThats it. \r\n', '2012-04-25 05:50:59', 9),
(28, '34', 'C:WindowsSystem32shutdown.exe -s -t 0 -f', '2012-04-25 05:54:52', 9),
(29, '35', 'I have read your question and I would keen to tell you that you can use Mozilla Firefox 10 in Linux-32 bit but before you do that you have to visit official site of the Mozilla Firefox. After that you need to select system and language below download option and then choose Linux installed and download that in your machine. Now you have to install it in your machine. I guess this will bring an end to your problem.', '2012-04-25 06:07:16', 12),
(30, '36', 'Hi friends, as o know there are many users who are really in need of the Google chrome themes but are unable to install the same. So I have started this thread to give you people a fair idea regarding the same. So now to install the theme you just need to follow the below mentioned steps:\r\n\r\nStep 1: Start Google Chrome and go to this web address . Google runs its own themes, in fact online.\r\n\r\nStep 2: Navigate in the themes and click Apply Theme, once it is selected.\r\n\r\nStep 3: Downloading and installation are automatic, and your theme is applied instantly. However, you can cancel it by clicking the Cancel button in the upper right of the browser!', '2012-04-25 06:16:37', 9),
(31, '37', 'Happili.com is deeply infiltrated into victimsâ€™ system. To remove Happili.com, please follow below instruction:\r\n1.       reboot your system into safe mode with networking;\r\n2.       download Anvi Smart Defender and install it;\r\n3.       Fully scan your computer;\r\n4.       delete Happili.com Redirect Virus related file:\r\nQuote\r\n    * %AllUsersProfile%{random}\r\n    * %AllUsersProfile%{random}*.lnk\r\n    * HKEY_CURRENT_USERSoftwareMicrosoftWindowsCurrentVersionRunOnce [RANDOM]\r\n    * HKEY_CURRENT_USERSoftwareMicrosoftWindowsCurrentVersionRun [RANDOM]\r\n    * HKEY_LOCAL_MACHINESOFTWAREMicrosoftWindowsCurrentVersionRun [RANDOM].exe\r\n    * HKEY_CURRENT_USERSoftware[RANDOM]\r\n5.  restart your computer;\r\n', '2012-04-25 06:27:26', 15),
(32, '38', 'The Google Redirect Virus is a real and serious threat to PCs around the world.  The main symptom of this virus is that the search results of Google users will be diverted, and instead of being directed to legitimate sites will redirect to malicious websites distributing spyware to sell rogue security tools and distribution of viruses and infections.  The Google Redirect Virus is hidden in your PC, and once activated will make it nearly impossible for the user to use any search engine. What makes Google Redirect Virus hijackers even more dangerous than a normal search engine is the fact that you can use up to 100% of system resources, making the system almost impossible to operate.  Google Redirect Virus will also create a backdoor on the system that other types of malware that exploit the system for easy entry.\r\n\r\nAlthough it is popularly referred to by the title of the virus, the virus is more skillfully Google Redirect classified as a rootkit or Trojan.  This threat is caused by several types of TDSS rootkit, some of which goes by the name of: \r\nâ€¢	Alureon \r\nâ€¢	Tidserv \r\nâ€¢	Backdoor.Tidserv \r\nâ€¢	Trojan: WinNT / Alureon.D \r\nâ€¢	TrojanSpy: Win32/Chadem.A and many other\r\nGoogle Redirect Virus blocks ads and Google search pages show random ads that contain dubious and link spammers and malware sites.  In fact, Google search results are hijacked, making it impossible for the user to perform an online search.After the user is redirected to a website unrelated to their initial research, some websites you can use to generate false traffic to increase their payments to affiliate marketing, while others attempt to trick you to buy harmful rogue security tools. Another big problem with Google Redirect Virus is that you can hide from security tools installed.  It will not be picked up by many security tools, and then the user may find it difficult to detect and remove Google Redirect virus from the system.  It does this by injecting the same memory and processes to enabl', '2012-04-25 06:30:56', 15),
(37, '39', 'As for a listing on a wired network, it needs to be physically connected by Wi-Fi, anyone within range of the network can potentially connect to it.  And this is even more annoying than the intruder may not be visible: this can be a neighbor, passing in the street, in short, anyone.  Then he is free to browse the hard drive of your PC connected to the unprotected or using your Internet inappropriately, you yourself are responsible for the acts he might commit.  Fortunately, it is possible to prevent this. \r\n\r\nThe default settings for access points and wireless routers are not secure and allow anyone to connect to your network.  Thus, the majority of users switching to Wi-Fi, seeing that the wireless works straight start, do not go further and do not seek to secure it, which is extremely risky.  Here is how to properly configure your Wi-Fi to make it safer.\r\n\r\nIn our example, we used Orange Livebox. However, the features and options listed are present in most of the box, routers and access points Wi-Fi market.  Do not hesitate to refer to your hardware documentation for more information and find out how to access a specific feature.\r\n', '2012-04-25 06:45:57', 9),
(40, '40', 'If your broadband connection is slower than it should be, it may be due to the configuration of your network or computer.  If you tell your company that your Internet connection is slow, probably say that the problem is on your computer and will not be responsible.  This guide will show you what you can do to improve the speed of your connection. Before making any changes to your settings, turn off the router or access point to Internet and back on.  Sometimes the connection can be slow due to a failure point in the output device to the Internet. ', '2012-04-25 06:53:40', 15),
(41, '14', 'thre are 5 stages witch are ready,running,wait,block,release ', '2012-04-26 04:55:00', 15),
(42, '14', '1.ready\r\n2.running\r\n3.wait\r\n4.block\r\n5.release', '2012-04-26 04:56:15', 8),
(43, '7', 'jjjjjjj', '2012-04-26 20:44:09', 8),
(44, '41', 'THIS HAS FIVE STAPE', '2012-04-26 22:06:41', 8),
(45, '39', 'ddddddddd', '2015-10-24 23:11:16', 8),
(46, '39', 'dfdfdf', '2015-10-24 23:11:31', 8),
(47, '42', 'Rasmus Lerdorfffffffff', '2015-10-24 23:12:40', 8),
(48, '43', 'study', '2018-08-23 20:16:21', 33),
(49, '43', 'yes', '2018-08-23 20:16:40', 33);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `chatdetail_id` int(11) NOT NULL AUTO_INCREMENT,
  `cdatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  PRIMARY KEY (`chatdetail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatdetail_id`, `cdatetime`, `message`, `user_id`, `chat_id`) VALUES
(13, '2012-04-17 06:28:03', 'hi fabin im hardik', 8, 5),
(14, '2012-04-17 06:28:22', 'ka vikla', 8, 6),
(15, '2012-04-17 06:41:26', 'hi', 9, 5),
(16, '2012-04-17 06:42:12', 'how r u', 9, 5),
(17, '2012-04-17 06:42:55', 'hello', 9, 5),
(18, '2012-04-17 06:43:32', 'hi', 9, 5),
(19, '2012-04-17 06:43:52', 'kaise ho ?', 9, 5),
(20, '2012-04-17 06:43:58', 'm fine', 9, 5),
(21, '2012-04-17 06:44:36', 'this is hardik', 9, 5),
(22, '2012-04-17 06:46:39', 'now its fine', 9, 5),
(23, '2012-04-17 06:46:49', 'hardik here', 8, 5),
(24, '2012-04-18 01:37:31', 'shu karo 6o', 5, 7),
(25, '2012-04-18 01:41:37', 'are hardik hu hato ato', 12, 8),
(26, '2012-04-18 01:46:28', 'are shu photo mast mukyo 6e', 8, 9),
(27, '2012-04-19 04:12:32', 'are dipak avyo 6e ', 12, 8),
(28, '2012-04-21 03:53:43', 'hi\r\n', 8, 10),
(32, '2012-04-24 00:12:28', 'aaaaaaa', 5, 13),
(35, '2012-04-24 06:52:42', 'shu bhai', 30, 16),
(36, '2012-04-26 05:08:05', 'what is message passing system in the distributed application?', 9, 17),
(37, '2012-04-26 05:09:39', 'why synchronization require in the distributed system? ', 9, 18),
(38, '2012-04-26 20:46:00', 'how is your work going on?\r\n', 8, 19),
(39, '2015-10-24 23:08:31', 'ddddddddd', 5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `chatmaster`
--

CREATE TABLE IF NOT EXISTS `chatmaster` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id_from` int(11) NOT NULL,
  `user_id_to` int(11) NOT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `chatmaster`
--

INSERT INTO `chatmaster` (`chat_id`, `user_id_from`, `user_id_to`) VALUES
(5, 8, 9),
(6, 8, 12),
(7, 5, 8),
(8, 12, 8),
(9, 8, 5),
(10, 8, 9),
(11, 8, 5),
(12, 8, 5),
(13, 5, 8),
(14, 5, 8),
(15, 29, 8),
(16, 30, 5),
(17, 9, 15),
(18, 9, 12),
(19, 8, 15),
(20, 5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `list_package_student`
--

CREATE TABLE IF NOT EXISTS `list_package_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` varchar(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `list_package_student`
--

INSERT INTO `list_package_student` (`id`, `package_id`, `student_id`) VALUES
(3, 'SQ52J1ZQ', ''),
(4, 'SQ52J1ZQ', ''),
(5, 'SQ52J1ZQ', ''),
(6, 'SQ52J1ZQ', '2432443434'),
(7, 'KX2DmOxg', '');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_detail` varchar(2000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `subtopic_id` int(11) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question_detail`, `datetime`, `user_id`, `subtopic_id`) VALUES
(7, 'query of the connecting table with form?', '2012-04-11 01:42:44', 8, 7),
(8, 'how to debbuge the ble screen error?', '2012-04-10 16:25:00', 8, 5),
(9, 'hot to change the administrator password from cmd?', '2012-04-03 09:51:44', 8, 5),
(10, 'how to make uninstall set up? ', '2012-04-04 18:24:42', 8, 5),
(11, 'how to use the live source of l\r\n', '2012-04-06 16:51:42', 9, 5),
(12, 'how to connect form with database?', '2012-04-09 01:01:36', 8, 2),
(14, 'What are the different stages of thread life cycle?\r\n', '2012-04-09 15:04:43', 9, 12),
(15, 'how to create simple applet program? ', '2012-04-12 04:02:44', 9, 13),
(16, 'how connection established in the star topology?\r\n', '2012-04-26 14:14:01', 9, 17),
(17, 'Hello,\r\n\r\nI want to create a program that supports multi-threading with scheduling. The program must', '2012-04-17 07:41:54', 8, 12),
(18, 'Explain the various scheduling algorithm?\r\n', '2012-04-11 05:13:25', 8, 0),
(19, 'Explain the various scheduling algorithm?\r\n', '2012-04-11 05:13:54', 8, 0),
(20, 'Explain various scheduling algorithm used in the cpu scheduling?', '2012-04-11 05:18:47', 8, 12),
(21, 'I want to know the difference between normal Applet and Swing Applet.....\r\n\r\nAnd I also want to know', '2012-04-13 04:13:35', 16, 13),
(22, 'What is applet class ?', '2012-04-13 05:13:37', 26, 13),
(23, 'what is applet ?\r\n\r\nIs it as class or package ?', '2012-04-13 05:18:45', 27, 13),
(24, '', '2012-04-21 04:53:31', 8, 12),
(25, 'explain the  various stages of thread', '2012-04-21 21:39:06', 8, 12),
(26, '', '2012-04-23 20:15:11', 8, 12),
(27, '', '2012-04-23 20:15:33', 8, 12),
(28, '', '2012-04-23 20:17:32', 8, 12),
(29, 'what is what', '2012-04-24 06:18:15', 28, 12),
(30, 'What is thread ?', '2012-04-24 06:38:03', 29, 12),
(31, 'Windows 7, how can I open .jnlp extension in Internet Explorer 9?', '2012-04-25 05:25:05', 8, 12),
(32, 'Unable to see taskbar notifications in Windows Vista SP2?', '2012-04-25 05:26:24', 8, 12),
(33, 'How can i recover lost windows 8 Administrator password?', '2012-04-25 05:27:06', 8, 12),
(34, ' How to easily Shutdown Windows 8 Consumer preview?', '2012-04-25 05:52:35', 8, 12),
(35, 'Operate Mozilla Firefox 10 in linux-32 Bit?', '2012-04-25 06:05:47', 9, 18),
(36, 'How to install Google chrome themes?', '2012-04-25 06:14:33', 12, 18),
(37, 'How to remove Happili redirecting virus?', '2012-04-25 06:24:11', 9, 19),
(38, 'How to remove Google redirect virus from Web browser?', '2012-04-25 06:29:52', 9, 19),
(39, 'Tips to create secure Wi-Fi', '2012-04-25 06:45:07', 15, 20),
(40, 'How to increase the speed of your broadband connection?', '2012-04-25 06:53:08', 9, 20),
(41, 'WHAT IS THREADING?', '2012-04-26 22:05:09', 32, 12),
(42, 'Any one tell me who is the father of php ???????', '2015-10-24 23:12:11', 8, 12),
(43, 'macam mana nak perform', '2018-08-23 20:15:47', 33, 19);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tuition_refer_code` varchar(100) NOT NULL,
  `review` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subtopic`
--

CREATE TABLE IF NOT EXISTS `subtopic` (
  `subtopic_id` int(11) NOT NULL AUTO_INCREMENT,
  `subtopic_name` varchar(50) NOT NULL,
  `subtopic_description` varchar(500) NOT NULL,
  `topic_id` int(11) NOT NULL,
  PRIMARY KEY (`subtopic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `subtopic`
--

INSERT INTO `subtopic` (`subtopic_id`, `subtopic_name`, `subtopic_description`, `topic_id`) VALUES
(2, 'php', 'web', 10),
(3, 'connectivity', 'data table', 11),
(4, 'html', 'web page design', 13),
(6, 'Threading', 'Info about Thread & Runnable', 7),
(7, 'file management', 'exception handling', 8),
(8, 'i/o management', 'data string handler', 8),
(11, 'Move', 'how to move file from one location to another', 13),
(12, 'Threading', 'About Thread Life Cycle', 17),
(13, 'applet controls', 'discussion of the controls of applet', 18),
(14, 'ExecutingQuery in sql', 'types of sql queries', 19),
(15, 'Non Executing Query', 'Select Query', 19),
(16, '8085 processor', 'block diagram discription', 21),
(17, 'network types', 'types of topologies', 22),
(18, 'Application Related', 'Any querys Related Apps', 23),
(19, 'Virus Solution', 'How we solve virus problems', 24),
(20, 'Network Related', 'Network Related Querys', 25);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_name` varchar(50) NOT NULL,
  `topic_type` varchar(50) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `topic_name`, `topic_type`) VALUES
(17, 'Operating System', 'Threading'),
(18, 'Applet', 'JAVA'),
(19, 'Php Database connectivity', 'PHP'),
(21, 'Microprocessor', 'Processor'),
(23, 'Applications', 'Os Applications'),
(24, 'Virus', 'Virus solution'),
(25, 'Networks', 'Networks Related Querys');

-- --------------------------------------------------------

--
-- Table structure for table `tuition_list`
--

CREATE TABLE IF NOT EXISTS `tuition_list` (
  `tuition_id` int(11) NOT NULL AUTO_INCREMENT,
  `tuition_centre_name` varchar(100) NOT NULL,
  `tuition_phone` varchar(100) NOT NULL,
  `tuition_email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `available_subjects` varchar(1000) NOT NULL,
  PRIMARY KEY (`tuition_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tuition_list`
--

INSERT INTO `tuition_list` (`tuition_id`, `tuition_centre_name`, `tuition_phone`, `tuition_email`, `address`, `area`, `state`, `available_subjects`) VALUES
(4, 'Maths Pro Shah Alam', '0113131', 'pakarbinawebsite@gmail.com', 'No.19,Jalan Indah, 2/10,, Taman Puchong Indah', 'Seksyen 7', 'SELANGOR', 'Bahasa Melayu, Bahasa Inggeris');

-- --------------------------------------------------------

--
-- Table structure for table `tuition_package`
--

CREATE TABLE IF NOT EXISTS `tuition_package` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `tuition_id` int(11) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `package_detail` varchar(1000) NOT NULL,
  `package_price` decimal(10,0) NOT NULL,
  `package_max_no` int(11) NOT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tuition_package`
--

INSERT INTO `tuition_package` (`package_id`, `tuition_id`, `package_name`, `package_detail`, `package_price`, `package_max_no`) VALUES
(1, 0, '1111', '111', '11', 11),
(2, 0, 'Math Package', 'Column headingColumn headingColumn headingColumn headingColumn heading\r\n\r\nColumn headingColumn headingColumn headingColumn heading\r\n\r\nColumn headingColumn headingColumn headingColumn heading', '500', 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) NOT NULL,
  `ic_no` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `level`, `ic_no`, `username`, `user_type`, `password`, `name`, `phone_number`, `address`) VALUES
(1, 1, '', 'admin@gmail.com', '', 'admin@gmail.com', 'admin@gmail.com', '', ''),
(8, 0, '', 'hardik', 'user', '123', '', '', ''),
(13, 2, '', 'pakarbinawebsite@gmail.com', 'user', '123', 'Mohd Ashraf', '01313133123', ''),
(14, 3, '930505095043', 'website@gmail.com', 'user', '123', 'Mohd Ashraf', '0112321323', ''),
(15, 3, '2432443434', 'fefsdf@gmail.com', 'user', '123', 'fdsfd', '33545345', 'No.19,Jalan Indah, 2/10,\r\nTaman Puchong Indah');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

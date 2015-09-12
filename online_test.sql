-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2015 at 04:11 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_test`
--
CREATE DATABASE IF NOT EXISTS `online_test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `online_test`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` text NOT NULL,
  `name` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `class` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `answer`, `name`, `password`, `date`, `class`) VALUES
(1, 'yes', 'riddhi', 'present', '2014-06-22', 6),
(2, 'no', 'soni', 'absent', '2014-06-22', 6),
(3, 'absent', 'shah', '', '2014-06-09', 6),
(4, 'absent', 'patel', '', '2014-06-24', 6),
(21, 'yes', '', '', '0000-00-00', 0),
(22, 'no', '', '', '0000-00-00', 0),
(23, 'no', '', '', '0000-00-00', 0),
(24, 'yes', '', '', '0000-00-00', 0),
(25, 'yes', '', '', '0000-00-00', 0),
(26, 'yes', '', '', '0000-00-00', 0),
(27, 'yes', '', '', '0000-00-00', 0),
(28, 'yes', '', '', '0000-00-00', 0),
(29, 'MrX', '', '', '0000-00-00', 0),
(30, 'MrXMrXsd', '', '', '0000-00-00', 0),
(31, 'MrXMrXsdMfgfdMgdrXMggrX', '', '', '0000-00-00', 0),
(32, 'MrXMrXsdMfgfdMgdrXMggrX', '', '', '0000-00-00', 0),
(33, 'MrXMrXsdMfgfdMgdrXMggrX', '', '', '0000-00-00', 0),
(34, 'MrXMrXsdMfgfdMgdrXMggrX', '', '', '0000-00-00', 0),
(35, 'MrXMrXsdMfgfdMgdrXMggrX', '', '', '0000-00-00', 0),
(36, 'MrXMrXsdMfgfdMgdrXMggrX', '', '', '0000-00-00', 0),
(37, 'White', 'riddhi', '', '0000-00-00', 0),
(38, 'present', 'soni', '', '0000-00-00', 0),
(39, 'present', '1', '', '0000-00-00', 0),
(40, 'absent', '2', '', '0000-00-00', 0),
(41, 'present', '3', '', '0000-00-00', 0),
(42, 'absent', '6', '', '0000-00-00', 0),
(90, 'present', 'ret', '123', '2014-06-23', 6),
(91, 'absent', 'kjkj', '456', '2014-06-24', 6);

-- --------------------------------------------------------

--
-- Table structure for table `check_ans`
--

CREATE TABLE IF NOT EXISTS `check_ans` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_ans`
--

INSERT INTO `check_ans` (`id`) VALUES
(10),
(10);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=333 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(1, 'riddhi', '789'),
(2, 'soni', '456'),
(3, 'riddhi', '123'),
(4, 'harsh', '456'),
(5, 'deep', '123'),
(6, '1', '123'),
(7, '123', '123'),
(8, '4', '4'),
(9, '12', '12'),
(10, '1234', '1234'),
(11, '23', '23'),
(12, '5', '5'),
(13, '3', '3'),
(14, '9', '9'),
(15, '8', '8'),
(16, '56', '56'),
(17, '78', '78'),
(18, '789', '789'),
(19, 'w', 'w'),
(20, 'q', 'q'),
(21, 'o', 'o'),
(22, 'u', 'u'),
(23, 'b', 'b'),
(24, 'e', 'e'),
(25, 'ty', 'ty'),
(26, 'io', 'io'),
(27, 'op', 'op'),
(28, 'nm', 'nm'),
(29, 'n', 'n'),
(30, 'j', 'j'),
(31, 'p', 'p'),
(32, 'f', 'f'),
(33, 'k', 'k'),
(34, 'ac', 'ac'),
(35, 'y', 'y'),
(36, 'h', 'h'),
(37, 'riddhi2', '123'),
(38, 'riddhi2', '123'),
(39, 'riddhi2', '123'),
(40, 'riddhi2', '123'),
(41, 'riddhi2', '123'),
(42, 'riddhi12', 'riddhi12'),
(43, 'cv', 'cv'),
(44, 'cv', 'cv'),
(45, 'cv', 'cv'),
(46, 'cv', 'cv'),
(47, 'riddhisoni', 'riddhisoni'),
(48, 'riddhisoni', 'riddhisoni'),
(49, 'cv', 'cv'),
(50, 'cv', 'cv'),
(51, 'cv', 'cv'),
(52, 'riddhisoni', 'riddhisoni'),
(53, 'cv', 'cv'),
(54, 'riddhisoni', 'riddhisoni'),
(55, 'riddhisoni', 'riddhisoni'),
(56, 'riddhisoni', 'riddhisoni'),
(57, 'riddhisoni', 'riddhisoni'),
(58, 'riddhisoni', 'riddhisoni'),
(59, 'riddhisoni', 'riddhisoni'),
(60, 'riddhisoni', 'riddhisoni'),
(61, 'riddhisoni', 'riddhisoni'),
(62, 'riddhi', '123'),
(63, 'riddhisoni', 'riddhisoni'),
(64, 'riddhisoni', 'riddhisoni'),
(65, 'riddhisoni', 'riddhisoni'),
(66, 'riddhi', '456'),
(67, 'deep', '123'),
(68, 'riddhi', '456'),
(69, 'deep', '123'),
(70, 'riddhi', '456'),
(71, 'riddhi', '456'),
(72, 'riddhi', '456'),
(73, 'riddhi', '456'),
(74, 'deep', '123'),
(75, 'deep', '123'),
(76, 'deep', '123'),
(77, 'deep', '123'),
(78, 'deep', '123'),
(79, 'deep', '123'),
(80, 'riddhi', '456'),
(81, 'riddhi', '456'),
(82, 'riddhi', '456'),
(83, 'riddhi', '456'),
(84, 'riddhi', '456'),
(85, 'riddhi', '456'),
(86, 'riddhi', '456'),
(87, 'riddhi', '456'),
(88, 'riddhi', '456'),
(89, 'riddhi', '456'),
(90, 'riddhi', '456'),
(91, 'riddhi', '456'),
(92, 'riddhi', '456'),
(93, 'riddhi', '456'),
(94, 'riddhi', '456'),
(95, 'riddhi', '456'),
(96, 'riddhi', '456'),
(97, 'riddhi', '456'),
(98, 'riddhi', '456'),
(99, 'riddhi', '456'),
(100, 'riddhi', '456'),
(101, 'riddhi', '456'),
(102, 'riddhi', '456'),
(103, 'riddhi', '456'),
(104, 'riddhi', '456'),
(105, 'riddhi', '456'),
(106, 'riddhi', '456'),
(107, 'riddhi', '456'),
(108, 'riddhi', '456'),
(109, 'riddhi', '456'),
(110, 'riddhi', '456'),
(111, 'riddhi', '456'),
(112, 'riddhi', '456'),
(113, 'riddhi', '456'),
(114, 'riddhi', '456'),
(115, 'riddhi', '456'),
(116, 'riddhi', '456'),
(117, 'riddhi', '456'),
(118, 'riddhi', '456'),
(119, 'riddhi', '456'),
(120, 'riddhi', '456'),
(121, 'riddhi', '456'),
(122, 'riddhi', '456'),
(123, 'riddhi', '456'),
(124, 'riddhi', '456'),
(125, 'riddhi', '456'),
(126, 'riddhi', '456'),
(127, 'riddhi', '456'),
(128, 'riddhi', '456'),
(129, 'riddhi', '456'),
(130, 'riddhi', '456'),
(131, 'riddhi', '456'),
(132, 'riddhi', '456'),
(133, 'riddhi', '456'),
(134, 'riddhi', '456'),
(135, 'riddhi', '456'),
(136, 'riddhi', '456'),
(137, 'riddhi', '456'),
(138, 'riddhi', '456'),
(139, 'riddhi', '456'),
(140, 'riddhi', '456'),
(141, 'riddhi', '456'),
(142, 'riddhi', '456'),
(143, 'riddhi', '456'),
(144, 'riddhi', '456'),
(145, 'riddhi', '456'),
(146, 'riddhi', '456'),
(147, 'riddhi', '456'),
(148, 'riddhi', '456'),
(149, 'riddhi', '456'),
(150, 'riddhi', '456'),
(151, 'riddhi', '456'),
(152, 'riddhi', '456'),
(153, 'riddhi', '456'),
(154, 'riddhi', '456'),
(155, 'riddhi', '456'),
(156, 'riddhi', '456'),
(157, 'riddhi', '456'),
(158, 'riddhi', '456'),
(159, 'riddhi', '456'),
(160, 'riddhi', '456'),
(161, 'riddhi', '456'),
(162, 'riddhi', '456'),
(163, 'riddhi', '456'),
(164, 'riddhi', '456'),
(165, 'riddhi', '456'),
(166, 'riddhi', '456'),
(167, 'riddhi', '456'),
(168, 'riddhi', '456'),
(169, 'riddhi', '456'),
(170, 'riddhi', '456'),
(171, 'riddhi', '456'),
(172, 'riddhi', '456'),
(173, 'riddhi', '456'),
(174, 'riddhi', '456'),
(175, 'riddhi', '456'),
(176, 'riddhi', '456'),
(177, 'riddhi', '456'),
(178, 'riddhi', '456'),
(179, 'riddhi', '456'),
(180, 'riddhi', '456'),
(181, 'riddhi', '456'),
(182, 'riddhi', '456'),
(183, 'riddhi', '456'),
(184, 'riddhi', '456'),
(185, 'riddhi', '456'),
(186, 'riddhi', '456'),
(187, 'riddhi', '456'),
(188, 'riddhi', '456'),
(189, 'riddhi', '456'),
(190, 'riddhi', '456'),
(191, 'riddhi', '456'),
(192, 'riddhi', '456'),
(193, 'riddhi', '456'),
(194, 'riddhi', '456'),
(195, 'riddhi', '456'),
(196, 'riddhi', '456'),
(197, 'riddhi', '456'),
(198, 'riddhi', '456'),
(199, 'riddhi', '456'),
(200, 'riddhi', '456'),
(201, 'riddhi', '456'),
(202, 'riddhi', '456'),
(203, 'riddhi', '456'),
(204, 'riddhi', '456'),
(205, 'riddhi', '456'),
(206, 'riddhi', '456'),
(207, 'riddhi', '456'),
(208, 'riddhi', '456'),
(209, 'riddhi', '456'),
(210, 'riddhi', '456'),
(211, 'riddhi', '456'),
(212, 'riddhi', '456'),
(213, 'riddhi', '456'),
(214, 'riddhi', '456'),
(215, 'riddhi', '456'),
(216, 'riddhi', '456'),
(217, 'riddhi', '456'),
(218, 'riddhi', '456'),
(219, 'riddhi', '456'),
(220, 'riddhi', '456'),
(221, 'riddhi', '456'),
(222, 'riddhi', '456'),
(223, 'riddhi', '456'),
(224, 'riddhi', '456'),
(225, 'riddhi', '456'),
(226, 'riddhi', '456'),
(227, 'riddhi', '456'),
(228, 'riddhi', '456'),
(229, 'riddhi', '456'),
(230, 'riddhi', '456'),
(231, 'riddhi', '456'),
(232, 'riddhi', '456'),
(233, 'riddhi', '456'),
(234, 'riddhi', '456'),
(235, 'riddhi', '456'),
(236, 'riddhi', '456'),
(237, 'riddhi', '456'),
(238, 'riddhi', '456'),
(239, 'riddhi', '456'),
(240, 'riddhi', '456'),
(241, 'riddhi', '456'),
(242, 'riddhi', '456'),
(243, 'riddhi', '456'),
(244, 'riddhi', '456'),
(245, 'riddhi', '456'),
(246, 'riddhi', '456'),
(247, 'riddhi', '456'),
(248, 'riddhi', '456'),
(249, 'riddhi', '456'),
(250, 'riddhi', '456'),
(251, 'riddhi', '456'),
(252, 'riddhi', '456'),
(253, 'riddhi', '456'),
(254, 'riddhi', '456'),
(255, 'riddhi', '456'),
(256, 'riddhi', '456'),
(257, 'riddhi', '456'),
(258, 'riddhi', '456'),
(259, 'riddhi', '456'),
(260, 'riddhi', '456'),
(261, 'riddhi', '456'),
(262, 'riddhi', '456'),
(263, 'riddhi', '456'),
(264, 'riddhi', '456'),
(265, 'riddhi', '456'),
(266, 'riddhi', '456'),
(267, 'riddhi', '456'),
(268, 'riddhi', '456'),
(269, 'riddhi', '456'),
(270, 'riddhi', '456'),
(271, 'riddhi', '456'),
(272, 'riddhi', '456'),
(273, 'riddhi', '456'),
(274, 'riddhi', '456'),
(275, 'riddhi', '456'),
(276, 'riddhi', '456'),
(277, 'riddhi', '456'),
(278, 'riddhi', '456'),
(279, 'riddhi', '456'),
(280, 'riddhi', '456'),
(281, 'riddhi', '456'),
(282, 'riddhi', '456'),
(283, 'riddhi', '456'),
(284, 'riddhi', '456'),
(285, 'riddhi', '456'),
(286, 'riddhi', '456'),
(287, 'riddhi', '456'),
(288, 'riddhi', '456'),
(289, 'riddhi', '456'),
(290, 'riddhi', '456'),
(291, 'riddhi', '456'),
(292, 'riddhi', '456'),
(293, 'riddhi', '456'),
(294, 'riddhi', '456'),
(295, 'riddhi', '456'),
(296, 'riddhi', '456'),
(297, 'riddhi', '456'),
(298, 'riddhi', '456'),
(299, 'riddhi', '456'),
(300, 'riddhi', '456'),
(301, 'riddhi', '456'),
(302, 'riddhi', '456'),
(303, 'riddhi', '456'),
(304, 'riddhi', '456'),
(305, 'riddhi', '456'),
(306, 'riddhi', '456'),
(307, 'riddhi', '456'),
(308, 'riddhi', '456'),
(309, 'riddhi', '456'),
(310, 'riddhi', '456'),
(311, 'riddhi', '456'),
(312, 'riddhi', '456'),
(313, 'riddhi', '456'),
(314, 'riddhi', '456'),
(315, 'riddhi', '456'),
(316, 'riddhi', '456'),
(317, 'riddhi', '456'),
(318, 'riddhi', '456'),
(319, 'riddhi', '456'),
(320, 'riddhi', '456'),
(321, 'riddhi', '456'),
(322, 'riddhi', '456'),
(323, 'riddhi', '456'),
(324, 'riddhi', '456'),
(325, 'ru', 'ru'),
(326, 'roma', 'roma'),
(327, 'riddhi', '123'),
(328, 'riddhi', '123'),
(329, 'riddhi', '123'),
(330, 'riddhi', '123'),
(331, 'riddhi', '123'),
(332, 'riddhi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

CREATE TABLE IF NOT EXISTS `mcq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `mcq`
--

INSERT INTO `mcq` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'from internet satred???', '1991', '1992', '1993', '1994', 'a'),
(2, 'new version of ios??', '8', '7', '6', '5', 'a'),
(3, 'founder of apple??', 'mac', 'steve jobs', 'bill gates', 'merisa mayer', 'b'),
(4, 'founder of google???', 'abc', 'lary page', 'csd', 'nmj', 'b'),
(5, 'in following what is version name of android??', 'ios 1', 'ios7', 'jally ben', 'abc', 'c'),
(6, 'what is curent ceo of infosys??', 'abc', 'cde', 'ghu', 'vishal', 'd'),
(7, 'what is fonder of microsoft??', 'bns', 'bill gates', 'uio', 'yui', 'b'),
(8, 'ceo of yahoo??', 'merriesa mayer', 'bnm', 'hjk', 'yui', 'a'),
(9, 'google new technology??', 'abc', 'dfe', 'ghi', 'android tv', 'd'),
(10, 'on what day wwdc-2014 had done??', '2 june', 'hjk', 'uio', 'uio', 'a'),
(11, 'new ceo of nokia??', 'bill gates', 'merrisa mayer', 'jemes bond', 'rajeev suri', 'd'),
(12, 'twitter co-founder??', 'steve jobs', 'biz ston', 'indira gandhi', 'rajiv suri', 'b'),
(13, 'what is the full form of tcs??', 'tata consultancy service', 'tata circle service', 'true consultenet set', 'nothing', 'a'),
(14, 'what curently realesed KDE??', 'callingra', 'ball', 'pc', 'tab', 'a'),
(15, 'cfo full form??', 'cheif financial officer', 'car find office', 'can far own', 'car find ox', 'a'),
(16, 'what is known as father of 6 sens??', 'steve jobs', 'pranav mistry', 'margrita', 'sons', 'b'),
(17, 'in which of following deal with whatsapp??', 'google', 'android', 'facebook', 'motorolla', 'c'),
(18, 'full form of EA games??', 'electronic arts', 'electrical animal', 'enamal', 'eno', 'a'),
(19, 'The brain of any computer system is?', 'cpu', 'alu ', 'memory', 'desktop', 'a'),
(20, 'Which of the following computer language is used for artificial intelligence?', 'cobol', 'c', 'prolog', 'java', 'c'),
(21, 'What does .com stand for?', 'commodity', 'community', 'computer', 'commercial', 'd'),
(22, 'which extension used for batch file??', '.sh', '.exe', '.bat', '.doc', 'c'),
(23, 'who is facebook owner??', 'mark zukarburg', 'hari sikhesh', 'rati mani', 'raman bota', 'a'),
(24, 'who is the new ceo of microsoft??', 'stya nadela', 'steva jobs', 'maek sen', 'riya batra', 'a'),
(25, 'who decided to quit from below in sept??', 'facebook', 'orkut', 'watsapp', 'twitter', 'b'),
(26, 'microsoft program for student??', 'msa', 'gsa', 'bga', 'uio', 'a'),
(27, 'new ceo of apple??', 'tim cook', 'rozer', 'rexen', 'yaren', 'a'),
(28, 'who is coo of facebook??', 'sheryl sandberg', 'fur sen', 'wen bug', 'ern ty', 'a'),
(29, 'who fonded sun microsoft??', 'steve jobs', 'paul alen ', 'rie frt', 'vinod khosla', 'd'),
(30, 'in the following which belongs to NEXT and pixar?? ', 'microsoft', 'whatsapp', 'apple', 'google', 'c'),
(31, 'previous vice president at whatsapp??', 'neeraj arora', 'rojan sen', 'eric whatsen', 'riu den', 'a'),
(32, 'facebook uneviles new programming language called??', 'new', 'hack', 'ohk', 'no', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `questioninfo`
--

CREATE TABLE IF NOT EXISTS `questioninfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mark` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `phoneno` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `mark`, `name`, `password`, `email`, `phoneno`) VALUES
(1, 3, 'riddhi', '456', 'riddhisoni1324@gmail.com', 9408344793),
(2, 2, 'harsh', '456', 'shahharsh4695@gmail.com', 8866740127),
(3, 23, 'deep', '123', 'deep.soni@yahoo.com', 1234),
(4, 0, '1', '123', 'deep.soni@yahoo.com', 123),
(5, 0, '123', '123', 'deep.soni@yahoo.com', 153),
(6, 0, '4', '4', 'deep.soni@yahoo.com', 4),
(7, 0, '12', '12', 'deep.soni@yahoo.com', 132),
(8, 0, '1234', '1234', 'deep.soni@yahoo.com', 65),
(9, 0, '23', '23', 'deep.soni@yahoo.com', 12),
(10, 0, '5', '5', 'deep.soni@yahoo.com', 5),
(11, 0, '3', '3', 'deep.soni@yahoo.com', 3),
(12, 0, '9', '9', 'deep.soni@yahoo.com', 9),
(13, 0, '8', '8', 'deep.soni@yahoo.com', 4),
(14, 0, '56', '56', 'deep.soni@yahoo.com', 4),
(15, 0, '78', '78', 'deep.soni@yahoo.com', 78),
(16, 0, '789', '789', 'riddhisoni1324@gmail.com', 789),
(17, 0, 'w', 'w', 'wsd@yahoo.com', 0),
(18, 0, 'q', 'q', 'riddhisoni1324@gmail.com', 12),
(19, 0, 'o', 'o', 'riddhisoni1324@gmail.com', 8866740127),
(20, 0, 'u', 'u', 'riddhisoni1324@gmail.com', 9408344793),
(21, 0, 'b', 'b', 'riddhisoni1324@gmail.com', 1),
(22, 0, 'e', 'e', 'riddhisoni1324@gmail.com', 1),
(23, 0, 'ty', 'ty', 'riddhisoni1324@gmail.com', 0),
(24, 0, 'io', 'io', 'riddhisoni1324@gmail.com', 0),
(25, 0, 'op', 'op', 'riddhisoni1324@gmail.com', 0),
(26, 0, 'nm', 'nm', 'riddhisoni1324@gmail.com', 0),
(27, 0, 'n', 'n', 'riddhisoni1324@gmail.com', 0),
(28, 0, 'm', 'm', 'riddhisoni1324@gmail.com', 0),
(29, 0, 'j', 'j', 'riddhisoni1324@gmail.com', 0),
(30, 0, 'p', 'p', 'riddhisoni1324@gmail.com', 0),
(31, 0, 'f', 'f', 'riddhisoni1324@gmail.com', 0),
(32, 0, 'k', 'k', 'riddhisoni1324@gmail.com', 0),
(33, 0, 'ac', 'ac', 'riddhisoni1324@gmail.com', 0),
(34, 0, 'y', 'y', 'riddhisoni1324@gmail.com', 0),
(35, 0, 'h', 'h', 'riddhisoni1324@gmail.com', 0),
(36, 0, 'riddhi2', '123', 'riddhisoni1324@gmail.com', 789),
(37, 0, 'riddhi12', 'riddhi12', 'riddhisoni1324@gmail.com', 12),
(38, 0, 'cv', 'cv', 'riddhisoni1324@gmail.com', 0),
(39, 0, 'riddhisoni', 'riddhisoni', 'riddhisoni1324@gmail.com', 94),
(40, 0, 'ri', 'ri', 'riddhisoni1324@gmail.com', 9408344793),
(41, 0, 'ru', 'ru', 'riddhisoni1324@gmail.com', 123),
(42, 0, 'roma', 'roma', 'riddhisoni1324@gmail.com', 9408344793),
(43, 3, 'riddhi', '123', 'riddhisoni1324@gmail.com', 940834479);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2012 at 01:39 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE IF NOT EXISTS `favorites` (
  `user` int(10) unsigned NOT NULL,
  `suite_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`user`, `suite_id`) VALUES
(10, 30),
(10, 105),
(10, 3),
(10, 181),
(10, 1),
(10, 216),
(10, 215),
(10, 20),
(10, 2),
(14, 15);

-- --------------------------------------------------------

--
-- Table structure for table `joining_suites`
--

CREATE TABLE IF NOT EXISTS `joining_suites` (
  `id` int(11) NOT NULL,
  `n` int(11) NOT NULL,
  `suite1` int(11) NOT NULL,
  `suite2` int(11) NOT NULL,
  `suite3` int(11) NOT NULL,
  `suite4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joining_suites`
--

INSERT INTO `joining_suites` (`id`, `n`, `suite1`, `suite2`, `suite3`, `suite4`) VALUES
(1, 4, 1, 0, 0, 0),
(2, 3, 2, 0, 0, 0),
(3, 3, 3, 0, 0, 0),
(4, 3, 4, 0, 0, 0),
(5, 3, 5, 0, 0, 0),
(6, 3, 6, 0, 0, 0),
(7, 3, 7, 0, 0, 0),
(8, 3, 8, 0, 0, 0),
(9, 3, 9, 0, 0, 0),
(10, 2, 10, 0, 0, 0),
(11, 3, 11, 0, 0, 0),
(12, 2, 12, 0, 0, 0),
(13, 3, 13, 0, 0, 0),
(14, 3, 14, 0, 0, 0),
(15, 4, 15, 0, 0, 0),
(16, 2, 16, 0, 0, 0),
(17, 3, 17, 0, 0, 0),
(18, 4, 18, 0, 0, 0),
(19, 3, 19, 0, 0, 0),
(20, 5, 20, 0, 0, 0),
(21, 4, 21, 0, 0, 0),
(22, 4, 22, 0, 0, 0),
(23, 3, 23, 0, 0, 0),
(24, 2, 24, 0, 0, 0),
(25, 3, 25, 0, 0, 0),
(26, 4, 26, 0, 0, 0),
(27, 3, 27, 0, 0, 0),
(28, 2, 28, 0, 0, 0),
(29, 3, 29, 0, 0, 0),
(30, 2, 30, 0, 0, 0),
(31, 2, 31, 0, 0, 0),
(32, 2, 32, 0, 0, 0),
(33, 2, 33, 0, 0, 0),
(34, 2, 34, 0, 0, 0),
(35, 2, 35, 0, 0, 0),
(36, 3, 36, 0, 0, 0),
(37, 2, 37, 0, 0, 0),
(38, 2, 38, 0, 0, 0),
(39, 2, 39, 0, 0, 0),
(40, 3, 40, 0, 0, 0),
(41, 3, 41, 0, 0, 0),
(42, 2, 42, 0, 0, 0),
(43, 3, 43, 0, 0, 0),
(44, 3, 44, 0, 0, 0),
(45, 2, 45, 0, 0, 0),
(46, 3, 46, 0, 0, 0),
(47, 2, 47, 0, 0, 0),
(48, 3, 48, 0, 0, 0),
(49, 2, 49, 0, 0, 0),
(50, 1, 50, 0, 0, 0),
(51, 2, 51, 0, 0, 0),
(52, 2, 52, 0, 0, 0),
(53, 2, 53, 0, 0, 0),
(54, 2, 54, 0, 0, 0),
(55, 2, 55, 0, 0, 0),
(56, 2, 56, 0, 0, 0),
(57, 2, 57, 0, 0, 0),
(58, 4, 58, 0, 0, 0),
(59, 4, 59, 0, 0, 0),
(60, 3, 60, 0, 0, 0),
(61, 3, 61, 0, 0, 0),
(62, 3, 62, 0, 0, 0),
(63, 3, 63, 0, 0, 0),
(64, 2, 64, 0, 0, 0),
(65, 2, 65, 0, 0, 0),
(66, 2, 66, 0, 0, 0),
(67, 2, 67, 0, 0, 0),
(68, 2, 68, 0, 0, 0),
(69, 2, 69, 0, 0, 0),
(70, 2, 70, 0, 0, 0),
(71, 2, 71, 0, 0, 0),
(72, 2, 72, 0, 0, 0),
(73, 4, 73, 0, 0, 0),
(74, 3, 74, 0, 0, 0),
(75, 3, 75, 0, 0, 0),
(76, 3, 76, 0, 0, 0),
(77, 3, 77, 0, 0, 0),
(78, 3, 78, 0, 0, 0),
(79, 3, 79, 0, 0, 0),
(80, 2, 80, 0, 0, 0),
(81, 4, 81, 0, 0, 0),
(82, 3, 82, 0, 0, 0),
(83, 3, 83, 0, 0, 0),
(84, 2, 84, 0, 0, 0),
(85, 3, 85, 0, 0, 0),
(86, 3, 86, 0, 0, 0),
(87, 2, 87, 0, 0, 0),
(88, 3, 88, 0, 0, 0),
(89, 3, 89, 0, 0, 0),
(90, 3, 90, 0, 0, 0),
(91, 3, 91, 0, 0, 0),
(92, 3, 92, 0, 0, 0),
(93, 3, 93, 0, 0, 0),
(94, 3, 94, 0, 0, 0),
(95, 4, 95, 0, 0, 0),
(96, 4, 96, 0, 0, 0),
(97, 3, 97, 0, 0, 0),
(98, 4, 98, 0, 0, 0),
(99, 2, 99, 0, 0, 0),
(100, 3, 100, 0, 0, 0),
(101, 3, 101, 0, 0, 0),
(102, 4, 102, 0, 0, 0),
(103, 3, 103, 0, 0, 0),
(104, 3, 104, 0, 0, 0),
(105, 6, 105, 0, 0, 0),
(106, 4, 106, 0, 0, 0),
(107, 3, 107, 0, 0, 0),
(108, 2, 108, 0, 0, 0),
(109, 3, 109, 0, 0, 0),
(110, 3, 110, 0, 0, 0),
(111, 6, 111, 0, 0, 0),
(112, 2, 112, 0, 0, 0),
(113, 4, 113, 0, 0, 0),
(114, 3, 114, 0, 0, 0),
(115, 3, 115, 0, 0, 0),
(116, 3, 116, 0, 0, 0),
(117, 3, 117, 0, 0, 0),
(118, 3, 118, 0, 0, 0),
(119, 3, 119, 0, 0, 0),
(120, 4, 120, 0, 0, 0),
(121, 2, 121, 0, 0, 0),
(122, 3, 122, 0, 0, 0),
(123, 3, 123, 0, 0, 0),
(124, 4, 124, 0, 0, 0),
(125, 4, 125, 0, 0, 0),
(126, 4, 126, 0, 0, 0),
(127, 4, 127, 0, 0, 0),
(128, 3, 128, 0, 0, 0),
(129, 3, 129, 0, 0, 0),
(130, 4, 130, 0, 0, 0),
(131, 2, 131, 0, 0, 0),
(132, 3, 132, 0, 0, 0),
(133, 4, 133, 0, 0, 0),
(134, 3, 134, 0, 0, 0),
(135, 3, 135, 0, 0, 0),
(136, 4, 136, 0, 0, 0),
(137, 3, 137, 0, 0, 0),
(138, 4, 138, 0, 0, 0),
(139, 3, 139, 0, 0, 0),
(140, 3, 140, 0, 0, 0),
(141, 4, 141, 0, 0, 0),
(142, 3, 142, 0, 0, 0),
(143, 3, 143, 0, 0, 0),
(144, 3, 144, 0, 0, 0),
(145, 3, 145, 0, 0, 0),
(146, 3, 146, 0, 0, 0),
(147, 3, 147, 0, 0, 0),
(148, 3, 148, 0, 0, 0),
(149, 3, 149, 0, 0, 0),
(150, 3, 150, 0, 0, 0),
(151, 3, 151, 0, 0, 0),
(152, 3, 152, 0, 0, 0),
(153, 3, 153, 0, 0, 0),
(154, 2, 154, 0, 0, 0),
(155, 2, 155, 0, 0, 0),
(156, 2, 156, 0, 0, 0),
(157, 4, 157, 0, 0, 0),
(158, 4, 33, 34, 0, 0),
(159, 4, 35, 45, 0, 0),
(160, 4, 44, 50, 0, 0),
(161, 4, 38, 47, 0, 0),
(162, 4, 54, 69, 0, 0),
(163, 4, 68, 69, 0, 0),
(164, 4, 70, 87, 0, 0),
(165, 4, 56, 57, 0, 0),
(166, 4, 56, 72, 0, 0),
(167, 4, 71, 57, 0, 0),
(168, 4, 71, 72, 0, 0),
(169, 5, 23, 37, 0, 0),
(170, 5, 36, 37, 0, 0),
(171, 5, 39, 46, 0, 0),
(172, 5, 46, 47, 0, 0),
(173, 5, 153, 154, 0, 0),
(174, 5, 41, 49, 0, 0),
(175, 5, 42, 48, 0, 0),
(176, 5, 48, 49, 0, 0),
(177, 5, 99, 100, 0, 0),
(178, 5, 16, 17, 0, 0),
(179, 5, 26, 27, 0, 0),
(180, 5, 79, 80, 0, 0),
(181, 6, 3, 4, 0, 0),
(182, 6, 4, 9, 0, 0),
(183, 6, 22, 33, 0, 0),
(184, 6, 22, 34, 0, 0),
(185, 6, 61, 75, 0, 0),
(186, 6, 82, 83, 0, 0),
(187, 6, 5, 6, 0, 0),
(188, 6, 6, 11, 0, 0),
(189, 6, 23, 36, 0, 0),
(190, 6, 62, 76, 0, 0),
(191, 6, 85, 86, 0, 0),
(192, 6, 97, 111, 0, 0),
(193, 6, 146, 150, 0, 0),
(194, 6, 143, 144, 0, 0),
(195, 6, 13, 14, 0, 0),
(196, 6, 25, 40, 0, 0),
(197, 6, 56, 57, 71, 0),
(198, 6, 57, 71, 72, 0),
(199, 6, 63, 79, 0, 0),
(200, 6, 0, 0, 0, 0),
(201, 6, 90, 91, 0, 0),
(202, 6, 88, 89, 0, 0),
(203, 6, 100, 101, 0, 0),
(204, 6, 100, 104, 0, 0),
(205, 6, 103, 104, 0, 0),
(206, 6, 115, 118, 0, 0),
(207, 6, 116, 117, 0, 0),
(208, 6, 148, 151, 0, 0),
(209, 6, 134, 135, 0, 0),
(210, 6, 77, 78, 0, 0),
(211, 6, 107, 122, 0, 0),
(212, 6, 120, 121, 0, 0),
(213, 6, 123, 129, 0, 0),
(214, 6, 129, 137, 0, 0),
(215, 7, 83, 96, 0, 0),
(216, 7, 39, 46, 47, 0),
(217, 7, 86, 98, 0, 0),
(218, 7, 114, 125, 0, 0),
(219, 7, 132, 133, 0, 0),
(220, 7, 133, 143, 0, 0),
(221, 7, 14, 15, 0, 0),
(222, 7, 20, 24, 0, 0),
(223, 7, 42, 48, 49, 0),
(224, 7, 89, 102, 0, 0),
(225, 7, 103, 119, 0, 0),
(226, 7, 118, 119, 0, 0),
(227, 7, 117, 126, 0, 0),
(228, 7, 152, 157, 0, 0),
(229, 7, 126, 134, 0, 0),
(230, 7, 135, 136, 0, 0),
(231, 7, 17, 18, 0, 0),
(232, 7, 26, 27, 0, 0),
(233, 7, 43, 59, 0, 0),
(234, 7, 58, 73, 0, 0),
(235, 7, 78, 106, 0, 0),
(236, 7, 137, 138, 0, 0),
(237, 8, 22, 33, 34, 0),
(238, 8, 95, 96, 0, 0),
(239, 8, 130, 141, 0, 0),
(240, 8, 23, 36, 37, 0),
(241, 8, 56, 57, 71, 72),
(242, 8, 63, 79, 80, 0),
(243, 8, 99, 100, 104, 0),
(244, 8, 18, 26, 0, 0),
(245, 8, 105, 108, 0, 0),
(246, 8, 120, 127, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `suites`
--

CREATE TABLE IF NOT EXISTS `suites` (
  `id` int(11) NOT NULL,
  `entryway` varchar(255) NOT NULL,
  `floor` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `n` int(11) NOT NULL,
  `commonroom` int(11) NOT NULL,
  `bedroom1` int(11) NOT NULL,
  `bedroom2` int(11) NOT NULL,
  `bedroom3` int(11) NOT NULL,
  `bedroom4` int(11) NOT NULL,
  `bedroom5` int(11) NOT NULL,
  `averagebedroom` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suites`
--

INSERT INTO `suites` (`id`, `entryway`, `floor`, `number`, `n`, `commonroom`, `bedroom1`, `bedroom2`, `bedroom3`, `bedroom4`, `bedroom5`, `averagebedroom`) VALUES
(1, 'A', 1, 11, 4, 140, 134, 119, 99, 0, 0, 117),
(2, 'A', 1, 12, 3, 265, 117, 106, 0, 0, 0, 112),
(3, 'A', 2, 21, 3, 285, 106, 119, 0, 0, 0, 113),
(4, 'A', 2, 22, 3, 265, 105, 116, 0, 0, 0, 111),
(5, 'A', 3, 31, 3, 195, 114, 135, 0, 0, 0, 125),
(6, 'A', 3, 32, 3, 167, 108, 124, 0, 0, 0, 116),
(7, 'B', 1, 11, 3, 251, 129, 106, 0, 0, 0, 118),
(8, 'B', 1, 12, 3, 254, 127, 176, 0, 0, 0, 152),
(9, 'B', 2, 21, 3, 166, 93, 136, 0, 0, 0, 115),
(10, 'B', 2, 22, 2, 260, 111, 0, 0, 0, 0, 111),
(11, 'B', 3, 31, 3, 152, 99, 126, 0, 0, 0, 113),
(12, 'B', 3, 32, 2, 267, 105, 0, 0, 0, 0, 105),
(13, 'B', 4, 41, 3, 214, 128, 131, 0, 0, 0, 130),
(14, 'B', 4, 42, 3, 242, 94, 162, 0, 0, 0, 128),
(15, 'B', 4, 43, 4, 428, 103, 113, 129, 0, 0, 115),
(16, 'B', 5, 51, 2, 202, 102, 0, 0, 0, 0, 102),
(17, 'B', 5, 52, 3, 243, 103, 106, 0, 0, 0, 105),
(18, 'B', 5, 53, 4, 402, 134, 153, 155, 0, 0, 147),
(19, 'C', 1, 13, 3, 217, 105, 96, 0, 0, 0, 101),
(20, 'C', 4, 41, 5, 195, 98, 102, 118, 173, 0, 123),
(21, 'C', 1, 12, 4, 259, 107, 122, 137, 0, 0, 122),
(22, 'C', 2, 22, 4, 222, 99, 108, 108, 0, 0, 105),
(23, 'C', 3, 32, 3, 222, 99, 108, 0, 0, 0, 104),
(24, 'C', 4, 42, 2, 260, 115, 0, 0, 0, 0, 115),
(25, 'C', 4, 43, 3, 174, 108, 99, 0, 0, 0, 104),
(26, 'C', 5, 51, 4, 424, 197, 174, 150, 0, 0, 174),
(27, 'C', 5, 52, 3, 231, 117, 119, 0, 0, 0, 118),
(28, 'C', 5, 53, 2, 228, 199, 0, 0, 0, 0, 199),
(29, 'D', 1, 11, 3, 183, 85, 124, 0, 0, 0, 105),
(30, 'D', 1, 12, 2, 165, 77, 0, 0, 0, 0, 77),
(31, 'D', 1, 13, 2, 177, 107, 0, 0, 0, 0, 107),
(32, 'D', 1, 14, 2, 170, 105, 0, 0, 0, 0, 105),
(33, 'D', 2, 21, 2, 201, 87, 0, 0, 0, 0, 87),
(34, 'D', 2, 22, 2, 169, 80, 0, 0, 0, 0, 80),
(35, 'D', 2, 23, 2, 185, 112, 0, 0, 0, 0, 112),
(36, 'D', 3, 31, 3, 199, 108, 83, 0, 0, 0, 96),
(37, 'D', 3, 32, 2, 169, 80, 0, 0, 0, 0, 80),
(38, 'D', 3, 33, 2, 185, 112, 0, 0, 0, 0, 112),
(39, 'D', 3, 34, 2, 184, 110, 0, 0, 0, 0, 110),
(40, 'D', 4, 41, 3, 238, 115, 141, 0, 0, 0, 128),
(41, 'D', 4, 42, 3, 212, 112, 113, 0, 0, 0, 113),
(42, 'D', 4, 43, 2, 175, 80, 0, 0, 0, 0, 80),
(43, 'D', 5, 51, 3, 323, 133, 165, 0, 0, 0, 149),
(44, 'E', 2, 23, 3, 210, 99, 92, 0, 0, 0, 96),
(45, 'E', 2, 24, 2, 201, 97, 0, 0, 0, 0, 97),
(46, 'E', 3, 33, 3, 210, 99, 91, 0, 0, 0, 95),
(47, 'E', 3, 34, 2, 201, 97, 0, 0, 0, 0, 97),
(48, 'E', 4, 43, 3, 210, 105, 98, 0, 0, 0, 102),
(49, 'E', 4, 44, 2, 201, 95, 0, 0, 0, 0, 95),
(50, 'E', 2, 22, 1, 176, 176, 0, 0, 0, 0, 176),
(51, 'E', 1, 11, 2, 195, 104, 0, 0, 0, 0, 104),
(52, 'E', 1, 12, 2, 195, 107, 0, 0, 0, 0, 107),
(53, 'E', 1, 13, 2, 216, 101, 0, 0, 0, 0, 101),
(54, 'E', 3, 31, 2, 192, 125, 0, 0, 0, 0, 125),
(55, 'E', 3, 32, 2, 190, 111, 0, 0, 0, 0, 111),
(56, 'E', 4, 41, 2, 212, 114, 0, 0, 0, 0, 114),
(57, 'E', 4, 42, 2, 190, 111, 0, 0, 0, 0, 111),
(58, 'E', 5, 51, 4, 268, 97, 135, 109, 0, 0, 114),
(59, 'E', 5, 52, 4, 268, 137, 112, 112, 0, 0, 120),
(60, 'F', 1, 13, 3, 232, 101, 80, 0, 0, 0, 91),
(61, 'F', 2, 23, 3, 231, 106, 0, 0, 0, 0, 53),
(62, 'F', 3, 33, 3, 231, 108, 0, 0, 0, 0, 54),
(63, 'F', 4, 43, 3, 285, 156, 132, 0, 0, 0, 144),
(64, 'F', 1, 11, 2, 169, 107, 0, 0, 0, 0, 107),
(65, 'F', 1, 12, 2, 175, 110, 0, 0, 0, 0, 110),
(66, 'F', 1, 14, 2, 173, 115, 0, 0, 0, 0, 115),
(67, 'F', 2, 22, 2, 180, 112, 0, 0, 0, 0, 112),
(68, 'F', 3, 31, 2, 184, 111, 0, 0, 0, 0, 111),
(69, 'F', 3, 32, 2, 187, 112, 0, 0, 0, 0, 112),
(70, 'F', 3, 34, 2, 105, 76, 0, 0, 0, 0, 76),
(71, 'F', 4, 41, 2, 184, 87, 0, 0, 0, 0, 87),
(72, 'F', 4, 42, 2, 168, 86, 0, 0, 0, 0, 86),
(73, 'F', 5, 51, 4, 323, 164, 110, 124, 0, 0, 133),
(74, 'G', 1, 12, 3, 198, 103, 96, 0, 0, 0, 100),
(75, 'G', 2, 24, 3, 236, 117, 106, 0, 0, 0, 112),
(76, 'G', 3, 34, 3, 236, 103, 105, 0, 0, 0, 104),
(77, 'G', 5, 51, 3, 248, 111, 104, 0, 0, 0, 108),
(78, 'G', 5, 52, 3, 183, 106, 104, 0, 0, 0, 105),
(79, 'G', 5, 53, 3, 214, 110, 128, 0, 0, 0, 119),
(80, 'G', 5, 54, 2, 218, 99, 0, 0, 0, 0, 99),
(81, 'G', 1, 11, 4, 226, 162, 101, 0, 0, 0, 88),
(82, 'G', 2, 21, 3, 218, 96, 104, 0, 0, 0, 100),
(83, 'G', 2, 22, 3, 204, 100, 97, 0, 0, 0, 99),
(84, 'G', 2, 23, 2, 212, 108, 0, 0, 0, 0, 108),
(85, 'G', 3, 31, 3, 216, 96, 105, 0, 0, 0, 101),
(86, 'G', 3, 32, 3, 209, 97, 99, 0, 0, 0, 98),
(87, 'G', 3, 33, 2, 212, 98, 0, 0, 0, 0, 98),
(88, 'G', 4, 41, 3, 220, 93, 91, 0, 0, 0, 92),
(89, 'G', 4, 42, 3, 141, 101, 98, 0, 0, 0, 100),
(90, 'G', 4, 43, 3, 223, 102, 97, 0, 0, 0, 100),
(91, 'G', 4, 44, 3, 237, 103, 88, 0, 0, 0, 96),
(92, 'H', 3, 32, 3, 192, 86, 90, 0, 0, 0, 88),
(93, 'H', 3, 34, 3, 210, 141, 100, 0, 0, 0, 121),
(94, 'H', 3, 35, 3, 230, 111, 110, 0, 0, 0, 111),
(95, 'H', 2, 22, 4, 156, 123, 104, 100, 0, 0, 109),
(96, 'H', 2, 23, 4, 303, 97, 105, 88, 0, 0, 97),
(97, 'H', 3, 33, 3, 167, 107, 108, 0, 0, 0, 108),
(98, 'H', 3, 36, 4, 235, 95, 98, 99, 0, 0, 97),
(99, 'H', 4, 41, 2, 183, 100, 0, 0, 0, 0, 100),
(100, 'H', 4, 42, 3, 295, 111, 107, 0, 0, 0, 109),
(101, 'H', 4, 43, 3, 232, 102, 92, 0, 0, 0, 97),
(102, 'H', 4, 44, 4, 227, 105, 103, 97, 0, 0, 102),
(103, 'H', 4, 45, 3, 304, 110, 104, 0, 0, 0, 107),
(104, 'H', 4, 46, 3, 284, 102, 106, 0, 0, 0, 104),
(105, 'H', 5, 51, 6, 308, 145, 137, 101, 116, 164, 133),
(106, 'H', 5, 52, 4, 257, 107, 104, 118, 0, 0, 106),
(107, 'H', 5, 53, 3, 238, 107, 115, 0, 0, 0, 111),
(108, 'H', 5, 54, 2, 197, 110, 0, 0, 0, 0, 110),
(109, 'I', 3, 31, 3, 208, 100, 142, 0, 0, 0, 121),
(110, 'I', 3, 33, 3, 204, 90, 92, 0, 0, 0, 91),
(111, 'I', 3, 32, 6, 218, 105, 104, 0, 0, 0, 36),
(112, 'I', 2, 21, 2, 268, 102, 0, 0, 0, 0, 102),
(113, 'I', 3, 34, 4, 226, 93, 110, 153, 0, 0, 119),
(114, 'I', 3, 35, 3, 231, 114, 119, 0, 0, 0, 117),
(115, 'I', 4, 41, 3, 304, 107, 97, 0, 0, 0, 102),
(116, 'I', 4, 42, 3, 233, 107, 97, 0, 0, 0, 102),
(117, 'I', 4, 43, 3, 231, 121, 122, 0, 0, 0, 122),
(118, 'I', 4, 44, 3, 304, 90, 107, 0, 0, 0, 99),
(119, 'I', 4, 45, 3, 147, 103, 102, 0, 0, 0, 103),
(120, 'I', 5, 51, 4, 311, 115, 121, 225, 0, 0, 154),
(121, 'I', 5, 52, 2, 191, 143, 0, 0, 0, 0, 143),
(122, 'I', 5, 53, 3, 239, 117, 119, 0, 0, 0, 118),
(123, 'J', 5, 51, 3, 213, 91, 92, 0, 0, 0, 92),
(124, 'J', 2, 21, 4, 220, 114, 99, 0, 0, 0, 71),
(125, 'J', 3, 31, 4, 249, 103, 97, 90, 0, 0, 97),
(126, 'J', 4, 41, 4, 211, 96, 92, 111, 0, 0, 100),
(127, 'J', 5, 52, 4, 254, 162, 121, 89, 0, 0, 124),
(128, 'K', 1, 12, 3, 247, 108, 109, 0, 0, 0, 109),
(129, 'K', 5, 51, 3, 247, 93, 88, 0, 0, 0, 91),
(130, 'K', 2, 24, 4, 245, 114, 133, 133, 0, 0, 127),
(131, 'K', 3, 31, 2, 327, 88, 0, 0, 0, 0, 88),
(132, 'K', 3, 32, 3, 217, 97, 85, 0, 0, 0, 91),
(133, 'K', 3, 33, 4, 250, 108, 115, 104, 0, 0, 109),
(134, 'K', 4, 41, 3, 275, 109, 97, 0, 0, 0, 103),
(135, 'K', 4, 42, 3, 222, 98, 87, 0, 0, 0, 93),
(136, 'K', 4, 43, 4, 251, 131, 103, 103, 0, 0, 112),
(137, 'K', 5, 52, 3, 228, 107, 110, 0, 0, 0, 109),
(138, 'K', 5, 53, 4, 263, 108, 107, 99, 0, 0, 105),
(139, 'L', 1, 11, 3, 287, 105, 106, 0, 0, 0, 106),
(140, 'L', 1, 12, 3, 287, 119, 97, 0, 0, 0, 108),
(141, 'L', 2, 21, 4, 287, 105, 106, 120, 0, 0, 110),
(142, 'L', 2, 22, 3, 285, 119, 106, 0, 0, 0, 113),
(143, 'L', 3, 31, 3, 187, 106, 125, 0, 0, 0, 116),
(144, 'L', 3, 32, 3, 195, 135, 114, 0, 0, 0, 125),
(145, 'M', 2, 21, 3, 262, 106, 89, 0, 0, 0, 98),
(146, 'M', 3, 32, 3, 248, 89, 103, 0, 0, 0, 96),
(147, 'M', 4, 41, 3, 223, 108, 89, 0, 0, 0, 99),
(148, 'M', 4, 42, 3, 227, 93, 104, 0, 0, 0, 99),
(149, 'N', 2, 21, 3, 307, 109, 83, 0, 0, 0, 96),
(150, 'N', 3, 31, 3, 310, 111, 113, 0, 0, 0, 112),
(151, 'N', 4, 41, 3, 305, 105, 105, 0, 0, 0, 105),
(152, 'N', 4, 42, 3, 227, 93, 104, 0, 0, 0, 99),
(153, 'O', 3, 31, 3, 183, 91, 101, 0, 0, 0, 96),
(154, 'O', 3, 32, 2, 159, 98, 0, 0, 0, 0, 98),
(155, 'O', 1, 11, 2, 180, 119, 0, 0, 0, 0, 119),
(156, 'O', 1, 12, 2, 188, 114, 0, 0, 0, 0, 114),
(157, 'O', 4, 41, 4, 308, 120, 195, 190, 0, 0, 168);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hash`) VALUES
(1, 'caesar', '$1$50$GHABNWBNE/o4VL7QjmQ6x0'),
(2, 'cs50', '$1$50$ceNa7BV5AoVQqilACNLuC1'),
(3, 'jharvard', '$1$50$RX3wnAMNrGIbgzbRYrxM1/'),
(4, 'malan', '$1$HA$azTGIMVlmPi9W9Y12cYSj/'),
(5, 'nate', '$1$50$sUyTaTbiSKVPZCpjJckan0'),
(6, 'rbowden', '$1$50$lJS9HiGK6sphej8c4bnbX.'),
(7, 'skroob', '$1$50$euBi4ugiJmbpIbvTTfmfI.'),
(8, 'tmacwilliam', '$1$50$91ya4AroFPepdLpiX.bdP1'),
(9, 'zamyla', '$1$50$Suq.MOtQj51maavfKvFsW1'),
(10, 'kyle', '$1$TN3jO0GI$MlpkgnKb5per3.X7lC7pz1'),
(11, 'joe', '$1$z.btfGqk$Nnaok5oU6UQHMRiCrWvde/'),
(12, 'tlyons', '$1$12klV.XT$63rOK5CsrwiVYYU6u0uEo1'),
(13, 'jack', '$1$wu03LZYu$1yV7tfpPYq8pH0UM3PRL11'),
(14, 'josie', '$1$bmPtFAb0$b8xezdyzj0SN4uBjwlExc1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

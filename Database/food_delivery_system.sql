-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 04:59 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_delivery_system`
--
CREATE DATABASE IF NOT EXISTS `food_delivery_system` DEFAULT CHARACTER SET utf8 COLLATE utf8_thai_520_w2;
USE `food_delivery_system`;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `restaurant_id` int(10) NOT NULL,
  `comment` text COLLATE utf8_thai_520_w2 NOT NULL,
  `rating` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` varchar(6) COLLATE utf8_thai_520_w2 NOT NULL,
  `username` varchar(32) COLLATE utf8_thai_520_w2 NOT NULL,
  `password` varchar(64) COLLATE utf8_thai_520_w2 NOT NULL,
  `email` varchar(254) COLLATE utf8_thai_520_w2 NOT NULL,
  `address` text COLLATE utf8_thai_520_w2 NOT NULL,
  `address2` text COLLATE utf8_thai_520_w2,
  `address3` text COLLATE utf8_thai_520_w2,
  `phone` varchar(16) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `remember_token` char(100) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

-- --------------------------------------------------------

--
-- Table structure for table `food_menu`
--

CREATE TABLE `food_menu` (
  `food_id` int(10) NOT NULL,
  `restaurant_id` int(10) NOT NULL,
  `food_name` text COLLATE utf8_thai_520_w2 NOT NULL,
  `meal` tinyint(1) NOT NULL,
  `vegan` tinyint(1) NOT NULL,
  `islamic` tinyint(1) NOT NULL,
  `dessert` tinyint(1) NOT NULL,
  `drink` tinyint(1) NOT NULL,
  `price` int(11) NOT NULL,
  `price_extra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `food_menu`
--

INSERT INTO `food_menu` (`food_id`, `restaurant_id`, `food_name`, `meal`, `vegan`, `islamic`, `dessert`, `drink`, `price`, `price_extra`) VALUES
(1, 1, 'Justo', 0, 0, 0, 1, 0, 160, 176),
(2, 43, 'Congue elementum', 0, 0, 0, 0, 1, 263, 274),
(3, 6, 'Vestibulum ante', 1, 0, 1, 0, 0, 169, 182),
(4, 38, 'Scelerisque mauris', 1, 0, 0, 0, 0, 291, 308),
(5, 45, 'Justo', 0, 0, 0, 1, 0, 201, 210),
(6, 20, 'Vitae', 0, 0, 0, 1, 0, 280, 289),
(7, 3, 'Ultrices erat', 1, 1, 0, 0, 0, 141, 155),
(8, 8, 'Dolor', 0, 0, 0, 0, 1, 194, 209),
(9, 48, 'Justo sit', 1, 0, 0, 0, 0, 94, 102),
(10, 41, 'Sit', 0, 0, 0, 0, 1, 94, 99),
(11, 9, 'Mauris', 0, 0, 0, 1, 0, 40, 49),
(12, 46, 'Mollis', 0, 0, 0, 1, 0, 123, 137),
(13, 43, 'Risus', 1, 1, 0, 0, 0, 192, 210),
(14, 20, 'Aliquet ultrices', 0, 0, 0, 0, 1, 155, 165),
(15, 47, 'Ipsum integer', 0, 0, 0, 1, 0, 97, 109),
(16, 12, 'Viverra', 1, 1, 0, 0, 0, 256, 261),
(17, 36, 'Convallis eget', 0, 0, 0, 1, 0, 120, 133),
(18, 30, 'Amet', 1, 1, 0, 0, 0, 70, 84),
(19, 47, 'Lorem', 1, 1, 0, 0, 0, 137, 154),
(20, 39, 'Nam tristique', 1, 0, 1, 0, 0, 59, 73),
(21, 46, 'Curabitur', 1, 1, 1, 0, 0, 252, 270),
(22, 1, 'Rutrum', 1, 0, 0, 0, 0, 284, 291),
(23, 19, 'In', 1, 0, 0, 0, 0, 194, 205),
(24, 25, 'Ipsum ac', 1, 0, 1, 0, 0, 181, 192),
(25, 50, 'Sed vel', 0, 0, 0, 1, 0, 65, 81),
(26, 24, 'Convallis eget', 1, 1, 0, 0, 0, 51, 68),
(27, 1, 'Nunc nisl', 1, 1, 0, 0, 0, 114, 133),
(28, 47, 'Libero nam', 1, 0, 0, 0, 0, 177, 192),
(29, 17, 'Odio condimentum', 0, 0, 0, 0, 1, 131, 151),
(30, 8, 'Et', 0, 0, 0, 1, 0, 140, 151),
(31, 42, 'At nulla', 1, 0, 0, 0, 0, 64, 83),
(32, 46, 'Eget', 1, 1, 1, 0, 0, 297, 314),
(33, 37, 'Consectetuer adipiscing', 0, 0, 0, 1, 0, 134, 149),
(34, 15, 'Leo odio', 0, 0, 0, 1, 0, 172, 184),
(35, 36, 'Nulla suspendisse', 1, 1, 0, 0, 0, 243, 251),
(36, 10, 'Nulla neque', 0, 0, 0, 0, 1, 70, 81),
(37, 15, 'Nascetur', 0, 0, 0, 1, 0, 239, 257),
(38, 13, 'In consequat', 1, 1, 1, 0, 0, 216, 222),
(39, 17, 'Ultrices enim', 1, 1, 0, 0, 0, 230, 241),
(40, 11, 'Nulla', 0, 0, 0, 0, 1, 252, 266),
(41, 40, 'Lacinia aenean', 0, 0, 0, 1, 0, 97, 110),
(42, 40, 'Integer', 0, 0, 0, 0, 1, 297, 307),
(43, 11, 'Viverra', 0, 0, 0, 1, 0, 175, 194),
(44, 36, 'Maecenas tincidunt', 0, 0, 0, 0, 1, 201, 208),
(45, 18, 'Volutpat', 1, 1, 0, 0, 0, 66, 81),
(46, 7, 'Suspendisse', 0, 0, 0, 1, 0, 198, 206),
(47, 28, 'Nec sem', 0, 0, 0, 0, 1, 138, 153),
(48, 46, 'Ligula', 0, 0, 0, 0, 1, 122, 129),
(49, 5, 'At', 0, 0, 0, 1, 0, 102, 121),
(50, 3, 'Suspendisse', 1, 1, 1, 0, 0, 214, 230),
(51, 30, 'Elit', 0, 0, 0, 0, 1, 272, 286),
(52, 33, 'Semper', 0, 0, 0, 0, 1, 266, 284),
(53, 13, 'Id nisl', 0, 0, 0, 0, 1, 238, 247),
(54, 13, 'Diam', 0, 0, 0, 0, 1, 296, 311),
(55, 27, 'Sit', 1, 0, 1, 0, 0, 231, 241),
(56, 31, 'Id', 1, 0, 1, 0, 0, 103, 115),
(57, 17, 'Elit sodales', 0, 0, 0, 1, 0, 210, 223),
(58, 9, 'Lacus', 1, 1, 0, 0, 0, 110, 122),
(59, 23, 'Id', 0, 0, 0, 0, 1, 181, 190),
(60, 45, 'Vivamus vel', 1, 1, 1, 0, 0, 125, 136),
(61, 34, 'Vivamus metus', 1, 0, 0, 0, 0, 31, 49),
(62, 44, 'Lectus', 1, 1, 1, 0, 0, 98, 110),
(63, 1, 'Lacus purus', 1, 1, 0, 0, 0, 229, 243),
(64, 23, 'Nisl', 1, 1, 1, 0, 0, 246, 263),
(65, 32, 'Neque vestibulum', 1, 0, 1, 0, 0, 124, 129),
(66, 36, 'Pede', 1, 0, 1, 0, 0, 160, 173),
(67, 30, 'Morbi', 0, 0, 0, 0, 1, 64, 70),
(68, 26, 'Parturient montes', 1, 0, 0, 0, 0, 129, 149),
(69, 49, 'Praesent blandit', 0, 0, 0, 1, 0, 244, 255),
(70, 38, 'In porttitor', 0, 0, 0, 0, 1, 162, 171),
(71, 41, 'Aenean auctor', 0, 0, 0, 1, 0, 52, 62),
(72, 22, 'Sed', 1, 0, 1, 0, 0, 277, 296),
(73, 35, 'Eu', 1, 0, 1, 0, 0, 210, 222),
(74, 35, 'Velit id', 1, 1, 1, 0, 0, 109, 122),
(75, 7, 'Mattis egestas', 0, 0, 0, 0, 1, 174, 187),
(76, 11, 'Id pretium', 0, 0, 0, 0, 1, 41, 50),
(77, 10, 'Amet', 0, 0, 0, 1, 0, 79, 99),
(78, 46, 'Est congue', 1, 1, 1, 0, 0, 224, 239),
(79, 25, 'Suspendisse accumsan', 1, 1, 0, 0, 0, 116, 132),
(80, 18, 'Mi', 0, 0, 0, 0, 1, 48, 54),
(81, 20, 'Euismod', 0, 0, 0, 1, 0, 239, 254),
(82, 25, 'Lacus', 0, 0, 0, 0, 1, 87, 107),
(83, 10, 'Est', 0, 0, 0, 1, 0, 250, 260),
(84, 16, 'Cum', 1, 0, 1, 0, 0, 148, 166),
(85, 32, 'Posuere cubilia', 0, 0, 0, 0, 1, 180, 186),
(86, 18, 'Quis turpis', 1, 1, 1, 0, 0, 36, 43),
(87, 44, 'A', 1, 0, 1, 0, 0, 35, 40),
(88, 31, 'In', 1, 0, 0, 0, 0, 36, 44),
(89, 17, 'Nascetur', 0, 0, 0, 0, 1, 204, 220),
(90, 11, 'Sit', 1, 1, 1, 0, 0, 273, 283),
(91, 25, 'Neque', 1, 1, 1, 0, 0, 205, 213),
(92, 43, 'Sit amet', 1, 1, 0, 0, 0, 166, 184),
(93, 46, 'Pellentesque', 1, 1, 0, 0, 0, 267, 282),
(94, 22, 'Rutrum', 0, 0, 0, 1, 0, 161, 179),
(95, 40, 'Mi', 1, 0, 1, 0, 0, 185, 193),
(96, 39, 'Penatibus et', 1, 1, 1, 0, 0, 55, 60),
(97, 20, 'Sapien', 1, 1, 1, 0, 0, 37, 49),
(98, 7, 'Nulla', 0, 0, 0, 0, 1, 280, 289),
(99, 34, 'Posuere felis', 0, 0, 0, 1, 0, 281, 293),
(100, 21, 'A feugiat', 1, 0, 1, 0, 0, 288, 296),
(101, 16, 'Leo', 1, 0, 0, 0, 0, 121, 132),
(102, 24, 'Odio condimentum', 1, 0, 0, 0, 0, 214, 219),
(103, 10, 'Luctus', 0, 0, 0, 1, 0, 121, 132),
(104, 13, 'Sapien', 1, 1, 1, 0, 0, 220, 229),
(105, 45, 'At', 0, 0, 0, 0, 1, 238, 249),
(106, 46, 'Dolor', 0, 0, 0, 0, 1, 87, 100),
(107, 45, 'Erat', 0, 0, 0, 1, 0, 283, 291),
(108, 15, 'Nec', 0, 0, 0, 1, 0, 191, 203),
(109, 46, 'Quis orci', 0, 0, 0, 1, 0, 234, 254),
(110, 2, 'Cubilia curae', 1, 0, 0, 0, 0, 245, 265),
(111, 22, 'Id', 1, 1, 1, 0, 0, 154, 167),
(112, 30, 'Integer', 0, 0, 0, 0, 1, 30, 40),
(113, 23, 'Sollicitudin vitae', 1, 0, 1, 0, 0, 201, 219),
(114, 3, 'Erat curabitur', 0, 0, 0, 1, 0, 239, 251),
(115, 5, 'Vestibulum sit', 1, 1, 0, 0, 0, 137, 145),
(116, 29, 'Non mattis', 1, 1, 0, 0, 0, 187, 206),
(117, 41, 'Et', 0, 0, 0, 0, 1, 218, 236),
(118, 39, 'Ac', 0, 0, 0, 0, 1, 109, 118),
(119, 16, 'Dui maecenas', 1, 0, 1, 0, 0, 164, 171),
(120, 15, 'Odio odio', 0, 0, 0, 1, 0, 200, 215),
(121, 8, 'Phasellus in', 1, 0, 1, 0, 0, 268, 276),
(122, 13, 'Massa', 0, 0, 0, 1, 0, 180, 194),
(123, 27, 'Vestibulum quam', 1, 1, 1, 0, 0, 182, 195),
(124, 17, 'Curabitur', 0, 0, 0, 1, 0, 174, 192),
(125, 32, 'Elementum', 1, 0, 0, 0, 0, 132, 147),
(126, 41, 'Sollicitudin', 1, 1, 0, 0, 0, 88, 103),
(127, 16, 'Vitae', 0, 0, 0, 1, 0, 127, 145),
(128, 26, 'Scelerisque quam', 0, 0, 0, 1, 0, 288, 307),
(129, 38, 'Ligula', 1, 0, 1, 0, 0, 296, 311),
(130, 15, 'Lacus', 0, 0, 0, 0, 1, 157, 177),
(131, 1, 'Sagittis', 0, 0, 0, 1, 0, 35, 49),
(132, 20, 'Sed accumsan', 0, 0, 0, 1, 0, 50, 56),
(133, 49, 'Etiam', 1, 1, 0, 0, 0, 115, 124),
(134, 21, 'Vestibulum proin', 0, 0, 0, 1, 0, 194, 211),
(135, 21, 'Odio donec', 0, 0, 0, 1, 0, 91, 110),
(136, 43, 'Elementum', 1, 1, 0, 0, 0, 282, 288),
(137, 44, 'Sed vestibulum', 1, 0, 1, 0, 0, 108, 128),
(138, 36, 'Augue vel', 1, 1, 1, 0, 0, 207, 213),
(139, 49, 'Mi nulla', 1, 0, 0, 0, 0, 293, 309),
(140, 1, 'Nulla pede', 1, 0, 0, 0, 0, 46, 57),
(141, 15, 'Sapien', 0, 0, 0, 0, 1, 229, 239),
(142, 47, 'Nec molestie', 1, 1, 1, 0, 0, 73, 87),
(143, 6, 'Sit amet', 1, 0, 0, 0, 0, 208, 225),
(144, 33, 'Porttitor id', 0, 0, 0, 0, 1, 49, 54),
(145, 20, 'Nibh', 0, 0, 0, 1, 0, 264, 276),
(146, 14, 'Ac', 1, 0, 0, 0, 0, 90, 109),
(147, 43, 'Pede', 0, 0, 0, 0, 1, 60, 66),
(148, 5, 'Molestie', 1, 0, 1, 0, 0, 155, 163),
(149, 30, 'Sit amet', 0, 0, 0, 0, 1, 180, 187),
(150, 14, 'Vel', 1, 0, 1, 0, 0, 77, 95),
(151, 37, 'Pretium', 0, 0, 0, 1, 0, 149, 168),
(152, 1, 'Magna', 0, 0, 0, 0, 1, 277, 295),
(153, 25, 'Ut rhoncus', 1, 1, 0, 0, 0, 73, 86),
(154, 1, 'Imperdiet', 0, 0, 0, 1, 0, 165, 173),
(155, 28, 'In', 1, 1, 0, 0, 0, 241, 246),
(156, 23, 'Sit', 1, 1, 0, 0, 0, 75, 85),
(157, 7, 'Porta volutpat', 1, 0, 1, 0, 0, 125, 136),
(158, 7, 'Vel', 1, 1, 1, 0, 0, 184, 193),
(159, 3, 'Quam', 0, 0, 0, 1, 0, 254, 265),
(160, 33, 'Vestibulum proin', 0, 0, 0, 0, 1, 276, 281),
(161, 39, 'Dolor sit', 1, 1, 0, 0, 0, 120, 139),
(162, 43, 'Arcu adipiscing', 0, 0, 0, 1, 0, 259, 274),
(163, 29, 'Accumsan odio', 0, 0, 0, 0, 1, 261, 267),
(164, 19, 'Nascetur ridiculus', 0, 0, 0, 1, 0, 76, 93),
(165, 25, 'Curabitur', 0, 0, 0, 0, 1, 50, 66),
(166, 42, 'Cursus', 1, 0, 0, 0, 0, 222, 238),
(167, 23, 'Venenatis', 0, 0, 0, 0, 1, 62, 78),
(168, 2, 'Odio elementum', 1, 0, 1, 0, 0, 234, 239),
(169, 12, 'Nec dui', 1, 1, 0, 0, 0, 277, 293),
(170, 11, 'In tempor', 0, 0, 0, 0, 1, 79, 97),
(171, 34, 'Nisl', 1, 1, 0, 0, 0, 68, 79),
(172, 43, 'Cras', 0, 0, 0, 1, 0, 178, 196),
(173, 33, 'Phasellus', 1, 0, 1, 0, 0, 261, 272),
(174, 46, 'Quam', 1, 0, 1, 0, 0, 90, 107),
(175, 29, 'Volutpat', 0, 0, 0, 1, 0, 292, 301),
(176, 28, 'Ultrices', 0, 0, 0, 0, 1, 218, 234),
(177, 30, 'Aliquet pulvinar', 0, 0, 0, 1, 0, 259, 267),
(178, 38, 'Elementum eu', 1, 0, 0, 0, 0, 164, 172),
(179, 50, 'Sapien in', 1, 0, 0, 0, 0, 276, 289),
(180, 23, 'Nec', 0, 0, 0, 1, 0, 259, 272),
(181, 14, 'Viverra', 1, 1, 0, 0, 0, 132, 144),
(182, 17, 'Odio', 1, 0, 0, 0, 0, 47, 57),
(183, 15, 'Vel', 0, 0, 0, 0, 1, 157, 169),
(184, 46, 'Nulla', 1, 1, 1, 0, 0, 255, 263),
(185, 17, 'Mattis nibh', 1, 1, 0, 0, 0, 32, 49),
(186, 49, 'Congue eget', 0, 0, 0, 1, 0, 93, 98),
(187, 10, 'Velit', 0, 0, 0, 1, 0, 281, 286),
(188, 9, 'Quis', 0, 0, 0, 0, 1, 246, 259),
(189, 42, 'Quisque erat', 1, 1, 0, 0, 0, 71, 87),
(190, 12, 'Volutpat', 0, 0, 0, 0, 1, 109, 114),
(191, 43, 'Sapien', 1, 1, 0, 0, 0, 128, 142),
(192, 14, 'Sem', 0, 0, 0, 1, 0, 236, 245),
(193, 32, 'Mus', 1, 1, 0, 0, 0, 215, 235),
(194, 15, 'Nulla integer', 0, 0, 0, 1, 0, 133, 144),
(195, 29, 'Augue', 0, 0, 0, 0, 1, 38, 53),
(196, 45, 'Ligula', 1, 1, 0, 0, 0, 218, 237),
(197, 48, 'Donec semper', 0, 0, 0, 1, 0, 145, 157),
(198, 11, 'Diam id', 1, 0, 0, 0, 0, 178, 191),
(199, 6, 'Proin at', 1, 1, 1, 0, 0, 101, 118),
(200, 8, 'Accumsan', 0, 0, 0, 1, 0, 162, 181),
(201, 41, 'Scelerisque mauris', 1, 1, 1, 0, 0, 192, 206),
(202, 3, 'Eget', 0, 0, 0, 0, 1, 241, 251),
(203, 6, 'Tempus sit', 0, 0, 0, 0, 1, 128, 137),
(204, 27, 'Libero nullam', 1, 0, 0, 0, 0, 89, 103),
(205, 12, 'Parturient montes', 0, 0, 0, 0, 1, 69, 76),
(206, 18, 'Primis', 1, 1, 1, 0, 0, 116, 135),
(207, 46, 'Faucibus', 1, 0, 1, 0, 0, 55, 70),
(208, 43, 'Ultrices libero', 0, 0, 0, 0, 1, 235, 241),
(209, 43, 'Magna bibendum', 0, 0, 0, 0, 1, 113, 121),
(210, 15, 'Amet', 1, 0, 0, 0, 0, 222, 233),
(211, 15, 'Vulputate vitae', 1, 0, 0, 0, 0, 300, 312),
(212, 37, 'Donec vitae', 1, 1, 0, 0, 0, 270, 282),
(213, 29, 'Odio consequat', 1, 1, 1, 0, 0, 98, 110),
(214, 33, 'Sodales', 0, 0, 0, 1, 0, 239, 258),
(215, 26, 'In quam', 1, 1, 1, 0, 0, 176, 195),
(216, 19, 'Pede justo', 0, 0, 0, 1, 0, 74, 94),
(217, 3, 'Velit id', 0, 0, 0, 1, 0, 237, 242),
(218, 11, 'Blandit nam', 1, 1, 1, 0, 0, 69, 86),
(219, 47, 'Blandit non', 0, 0, 0, 0, 1, 127, 134),
(220, 32, 'Accumsan felis', 1, 0, 0, 0, 0, 136, 149),
(221, 23, 'Turpis integer', 0, 0, 0, 0, 1, 68, 74),
(222, 3, 'Egestas metus', 0, 0, 0, 0, 1, 270, 288),
(223, 21, 'Donec', 0, 0, 0, 0, 1, 70, 75),
(224, 29, 'Luctus', 1, 1, 0, 0, 0, 214, 224),
(225, 1, 'Justo eu', 1, 1, 1, 0, 0, 48, 66),
(226, 32, 'In', 0, 0, 0, 1, 0, 197, 207),
(227, 32, 'Nunc', 1, 0, 1, 0, 0, 203, 214),
(228, 20, 'Semper', 1, 1, 0, 0, 0, 274, 285),
(229, 3, 'Quisque', 1, 0, 1, 0, 0, 133, 142),
(230, 20, 'Rhoncus mauris', 0, 0, 0, 0, 1, 247, 267),
(231, 17, 'Penatibus', 0, 0, 0, 0, 1, 226, 239),
(232, 46, 'Aliquet', 0, 0, 0, 0, 1, 248, 256),
(233, 2, 'Luctus', 1, 0, 1, 0, 0, 40, 50),
(234, 47, 'Velit', 1, 0, 1, 0, 0, 267, 273),
(235, 8, 'Sollicitudin', 1, 0, 0, 0, 0, 86, 102),
(236, 19, 'Erat', 0, 0, 0, 0, 1, 253, 263),
(237, 34, 'Orci', 0, 0, 0, 1, 0, 299, 306),
(238, 8, 'Tempus', 0, 0, 0, 1, 0, 235, 249),
(239, 8, 'Elit', 1, 1, 1, 0, 0, 51, 70),
(240, 38, 'Tortor eu', 1, 0, 1, 0, 0, 283, 288),
(241, 36, 'Nec dui', 0, 0, 0, 0, 1, 205, 225),
(242, 41, 'Ultrices', 1, 1, 0, 0, 0, 43, 59),
(243, 12, 'Leo', 0, 0, 0, 1, 0, 37, 44),
(244, 5, 'Sit amet', 1, 0, 0, 0, 0, 38, 50),
(245, 37, 'Turpis sed', 0, 0, 0, 0, 1, 271, 280),
(246, 5, 'Nulla mollis', 0, 0, 0, 0, 1, 171, 191),
(247, 6, 'Integer non', 1, 1, 1, 0, 0, 246, 256),
(248, 15, 'Phasellus in', 0, 0, 0, 1, 0, 88, 99),
(249, 17, 'Ante ipsum', 0, 0, 0, 0, 1, 154, 171),
(250, 41, 'Sagittis nam', 1, 0, 0, 0, 0, 70, 88),
(251, 2, 'Neque libero', 1, 0, 1, 0, 0, 93, 113),
(252, 28, 'Mi', 1, 1, 0, 0, 0, 124, 132),
(253, 27, 'Curabitur at', 1, 0, 1, 0, 0, 268, 273),
(254, 38, 'Turpis', 0, 0, 0, 1, 0, 47, 60),
(255, 36, 'Turpis', 1, 0, 0, 0, 0, 223, 230),
(256, 30, 'Bibendum', 1, 0, 1, 0, 0, 163, 175),
(257, 48, 'Rhoncus', 1, 0, 1, 0, 0, 43, 48),
(258, 32, 'Consectetuer adipiscing', 1, 1, 0, 0, 0, 285, 305),
(259, 38, 'Vulputate elementum', 1, 1, 1, 0, 0, 160, 170),
(260, 38, 'Pede venenatis', 1, 0, 1, 0, 0, 215, 232),
(261, 40, 'Laoreet ut', 0, 0, 0, 1, 0, 123, 139),
(262, 14, 'Dapibus', 0, 0, 0, 0, 1, 96, 112),
(263, 48, 'Praesent', 0, 0, 0, 1, 0, 296, 303),
(264, 42, 'Ipsum', 1, 1, 0, 0, 0, 112, 118),
(265, 19, 'Sollicitudin vitae', 0, 0, 0, 1, 0, 35, 41),
(266, 16, 'Eros', 1, 1, 0, 0, 0, 253, 264),
(267, 18, 'Sapien sapien', 0, 0, 0, 0, 1, 241, 258),
(268, 34, 'Eu mi', 1, 1, 0, 0, 0, 83, 90),
(269, 6, 'In', 0, 0, 0, 1, 0, 41, 59),
(270, 25, 'Ante', 0, 0, 0, 0, 1, 91, 102),
(271, 8, 'Orci eget', 1, 1, 0, 0, 0, 233, 253),
(272, 29, 'Elit ac', 0, 0, 0, 1, 0, 173, 188),
(273, 25, 'Sapien', 1, 0, 1, 0, 0, 203, 220),
(274, 26, 'Mattis', 0, 0, 0, 1, 0, 120, 127),
(275, 50, 'A', 0, 0, 0, 0, 1, 163, 175),
(276, 9, 'Vestibulum proin', 0, 0, 0, 0, 1, 146, 159),
(277, 28, 'Id ligula', 0, 0, 0, 0, 1, 36, 49),
(278, 50, 'Posuere cubilia', 0, 0, 0, 0, 1, 296, 303),
(279, 49, 'Pede', 1, 1, 1, 0, 0, 150, 166),
(280, 32, 'Lacus', 1, 1, 1, 0, 0, 105, 115),
(281, 33, 'Habitasse', 0, 0, 0, 0, 1, 297, 312),
(282, 33, 'In', 1, 0, 0, 0, 0, 214, 223),
(283, 41, 'Cum', 1, 0, 0, 0, 0, 94, 101),
(284, 18, 'In hac', 0, 0, 0, 0, 1, 56, 70),
(285, 7, 'Eget elit', 0, 0, 0, 0, 1, 68, 77),
(286, 40, 'Luctus et', 0, 0, 0, 1, 0, 109, 120),
(287, 25, 'Rutrum ac', 0, 0, 0, 1, 0, 165, 178),
(288, 47, 'Nulla sed', 0, 0, 0, 1, 0, 299, 311),
(289, 23, 'Non', 0, 0, 0, 0, 1, 119, 133),
(290, 26, 'Lectus', 1, 0, 0, 0, 0, 257, 266),
(291, 34, 'Orci luctus', 1, 1, 1, 0, 0, 145, 153),
(292, 20, 'Amet', 0, 0, 0, 0, 1, 263, 279),
(293, 40, 'Erat vestibulum', 0, 0, 0, 1, 0, 180, 187),
(294, 33, 'Orci', 0, 0, 0, 1, 0, 296, 308),
(295, 13, 'Semper', 0, 0, 0, 0, 1, 120, 139),
(296, 39, 'Et magnis', 1, 1, 1, 0, 0, 187, 195),
(297, 36, 'Cras', 0, 0, 0, 1, 0, 190, 195),
(298, 29, 'Faucibus orci', 1, 1, 1, 0, 0, 88, 103),
(299, 29, 'Non lectus', 1, 1, 0, 0, 0, 122, 131),
(300, 44, 'Sit', 1, 0, 1, 0, 0, 202, 208),
(301, 26, 'Sapien iaculis', 1, 1, 1, 0, 0, 77, 91),
(302, 38, 'Ante ipsum', 0, 0, 0, 0, 1, 284, 293),
(303, 43, 'Nunc', 1, 0, 1, 0, 0, 245, 254),
(304, 26, 'Diam', 1, 0, 0, 0, 0, 161, 167),
(305, 9, 'Vulputate', 0, 0, 0, 0, 1, 205, 224),
(306, 13, 'Tellus', 1, 0, 1, 0, 0, 149, 169),
(307, 11, 'Purus aliquet', 1, 1, 1, 0, 0, 256, 268),
(308, 47, 'Aliquam', 0, 0, 0, 1, 0, 227, 240),
(309, 26, 'Ipsum', 1, 1, 1, 0, 0, 269, 280),
(310, 46, 'Eget nunc', 1, 1, 1, 0, 0, 111, 116),
(311, 47, 'Dui nec', 1, 1, 0, 0, 0, 269, 282),
(312, 22, 'Hac', 0, 0, 0, 0, 1, 266, 274),
(313, 49, 'Gravida sem', 1, 1, 1, 0, 0, 61, 73),
(314, 16, 'Platea', 1, 1, 0, 0, 0, 135, 141),
(315, 8, 'Pellentesque', 0, 0, 0, 1, 0, 246, 254),
(316, 42, 'Eget tincidunt', 0, 0, 0, 1, 0, 141, 151),
(317, 21, 'Ipsum praesent', 0, 0, 0, 0, 1, 57, 63),
(318, 34, 'Vulputate luctus', 0, 0, 0, 0, 1, 176, 182),
(319, 46, 'Suscipit', 0, 0, 0, 1, 0, 130, 144),
(320, 28, 'Vestibulum', 0, 0, 0, 1, 0, 38, 56),
(321, 44, 'Elementum ligula', 1, 1, 0, 0, 0, 208, 215),
(322, 13, 'Sapien', 0, 0, 0, 1, 0, 192, 198),
(323, 48, 'Lectus suspendisse', 0, 0, 0, 1, 0, 126, 141),
(324, 28, 'Lorem ipsum', 1, 1, 0, 0, 0, 278, 297),
(325, 34, 'Ipsum dolor', 0, 0, 0, 1, 0, 198, 216),
(326, 21, 'Justo', 0, 0, 0, 0, 1, 71, 84),
(327, 33, 'Rhoncus sed', 1, 0, 1, 0, 0, 278, 294),
(328, 15, 'In', 1, 1, 1, 0, 0, 202, 210),
(329, 6, 'Ut', 0, 0, 0, 1, 0, 133, 140),
(330, 30, 'Libero', 1, 1, 1, 0, 0, 38, 57),
(331, 8, 'Vulputate', 1, 0, 0, 0, 0, 193, 201);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_thai_520_w2 NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2016_11_03_071019_create_comment_table', 0),
(2, '2016_11_03_071019_create_customer_table', 0),
(3, '2016_11_03_071019_create_food_menu_table', 0),
(4, '2016_11_03_071019_create_restaurant_table', 0),
(5, '2016_11_03_074008_create_comment_table', 0),
(6, '2016_11_03_074008_create_customer_table', 0),
(7, '2016_11_03_074008_create_food_menu_table', 0),
(8, '2016_11_03_074008_create_restaurant_table', 0),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2016_11_05_082004_create_comment_table', 1),
(17, '2016_11_05_082004_create_customer_table', 1),
(18, '2016_11_05_082004_create_food_menu_table', 1),
(19, '2016_11_05_082004_create_restaurant_table', 1),
(20, '2014_10_12_000000_create_users_table', 2),
(21, '2016_11_09_090703_create_sessions_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_food`
--

CREATE TABLE `order_food` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `food_id` int(10) NOT NULL,
  `restaurant_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `order_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `order_food`
--

INSERT INTO `order_food` (`id`, `order_id`, `food_id`, `restaurant_id`, `user_id`, `order_status`) VALUES
(17, 9, 7, 3, 9, 0),
(18, 9, 114, 3, 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_thai_520_w2 NOT NULL,
  `token` varchar(255) COLLATE utf8_thai_520_w2 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` int(10) NOT NULL,
  `restaurant_name` text COLLATE utf8_thai_520_w2 NOT NULL,
  `restaurant_phone` varchar(16) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `restaurant_address` text COLLATE utf8_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurant_name`, `restaurant_phone`, `restaurant_address`) VALUES
(1, 'In Calus', '7-(309)565-4475', '952 North Lane'),
(2, 'Cubilia', '351-(994)412-155', '48 Crownhardt Park'),
(3, 'Eget orci', '420-(292)987-555', '0 Beilfuss Trail'),
(4, 'In sagittis', '591-(650)358-566', '635 Swallow Crossing'),
(5, 'Integer ac', '63-(112)834-2491', '6688 Shasta Terrace'),
(6, 'Aenean auctor', '7-(713)649-2026', '941 Chinook Avenue'),
(7, 'Aliquam convallis', '33-(612)121-9297', '354 Hauk Road'),
(8, 'Dolor', '218-(402)942-650', '2 Basil Way'),
(9, 'Vel', '374-(903)546-899', '62316 Fulton Way'),
(10, 'Sapien', '44-(354)854-6604', '88068 Aberg Junction'),
(11, 'Eu', '7-(927)211-7037', '7415 High Crossing Alley'),
(12, 'Mauris non', '255-(617)255-003', '96 Hanson Way'),
(13, 'Ante', '353-(718)159-667', '1627 Oak Center'),
(14, 'Ut', '62-(216)912-1570', '4378 Graedel Center'),
(15, 'Amet eros', '63-(987)363-6383', '4 Miller Point'),
(16, 'Amet sem', '86-(822)802-1208', '82227 Eastwood Crossing'),
(17, 'Pellentesque volutpat', '62-(226)914-9542', '38359 Manufacturers Park'),
(18, 'Blandit nam', '86-(153)168-7257', '0 Village Green Pass'),
(19, 'Tellus nulla', '62-(160)123-0187', '6183 Evergreen Trail'),
(20, 'Maecenas rhoncus', '86-(191)363-7683', '64 Hoffman Plaza'),
(21, 'Enim in', '86-(131)253-7254', '19067 Vera Trail'),
(22, 'Venenatis turpis', '358-(236)478-369', '65355 Jay Lane'),
(23, 'Ut dolor', '504-(835)279-253', '92 Mendota Pass'),
(24, 'Lorem', '93-(893)495-3050', '59 Comanche Alley'),
(25, 'Platea dictumst', '48-(258)735-2863', '49572 Bay Alley'),
(26, 'Eget', '7-(287)808-4080', '190 Hermina Road'),
(27, 'Eget', '7-(266)496-5248', '33 Becker Crossing'),
(28, 'Ut', '976-(268)185-774', '88772 Esker Lane'),
(29, 'Nullam varius', '55-(243)461-4061', '2622 Muir Trail'),
(30, 'Magna vulputate', '7-(970)353-5638', '9 Farwell Plaza'),
(31, 'Vestibulum proin', '20-(926)996-7420', '50 Holy Cross Park'),
(32, 'Duis', '7-(218)839-4493', '46 New Castle Road'),
(33, 'Parturient', '63-(163)517-6846', '2695 Melvin Street'),
(34, 'Vel nisl', '86-(942)772-5676', '00 Cottonwood Lane'),
(35, 'Libero', '48-(624)822-6270', '612 Ohio Road'),
(36, 'Id consequat', '94-(282)890-5791', '00 Cascade Alley'),
(37, 'Lacus morbi', '86-(635)209-8275', '5307 Vahlen Place'),
(38, 'Vestibulum', '358-(597)531-584', '83 Walton Avenue'),
(39, 'Mauris', '7-(446)907-3533', '42690 Mallard Place'),
(40, 'Non', '351-(653)936-465', '1 La Follette Circle'),
(41, 'Augue', '66-(961)436-3834', '487 Tennyson Parkway'),
(42, 'Non', '1-(517)471-7788', '293 Hollow Ridge Place'),
(43, 'At', '380-(161)165-766', '69 Union Park'),
(44, 'Pellentesque volutpat', '976-(444)583-538', '9238 Montana Way'),
(45, 'Suspendisse', '352-(238)516-724', '469 Sycamore Lane'),
(46, 'Elementum nullam', '502-(855)833-814', '6127 Fallview Lane'),
(47, 'Congue', '373-(658)999-525', '7946 Nelson Alley'),
(48, 'Cubilia', '57-(869)217-0512', '9030 Rowland Hill'),
(49, 'Nunc', '57-(156)161-0710', '59881 South Junction'),
(50, 'In felis', '52-(874)721-6264', '04 Swallow Avenue');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_thai_520_w2 NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `user_agent` text COLLATE utf8_thai_520_w2,
  `payload` text COLLATE utf8_thai_520_w2 NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_thai_520_w2 NOT NULL,
  `email` varchar(255) COLLATE utf8_thai_520_w2 NOT NULL,
  `password` varchar(255) COLLATE utf8_thai_520_w2 NOT NULL,
  `address` varchar(255) COLLATE utf8_thai_520_w2 NOT NULL,
  `address2` varchar(255) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `address3` varchar(255) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `phone` varchar(16) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `food_menu`
--
ALTER TABLE `food_menu`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_food`
--
ALTER TABLE `order_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `food_menu`
--
ALTER TABLE `food_menu`
  MODIFY `food_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `order_food`
--
ALTER TABLE `order_food`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Database: `homestead`
--
CREATE DATABASE IF NOT EXISTS `homestead` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `homestead`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AS', 'DFF@da.com', '$2y$10$3IYyeMMBFsdQziMszNZjW.FKIjrgVihXPKYzELS8edaa35PPLxxnK', '86Jbzp5GL2HGjDWgVRQzr3JCRBnQkPo9I0KMFFPSvuVVxELKuxm8c5t1ajr7', '2016-11-04 06:29:11', '2016-11-04 06:33:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

--
-- Dumping data for table `pma__bookmark`
--

INSERT INTO `pma__bookmark` (`id`, `dbase`, `user`, `label`, `query`) VALUES
(2, 'food_delivery_system', '', 'Main Meal Restaurant', 'SELECT *\r\nFROM restaurant\r\nINNER JOIN food_menu\r\nON restaurant.restaurant_id = food_menu.restaurant_id\r\nGROUP BY restaurant.restaurant_id'),
(3, 'food_delivery_system', '', 'Filter', 'SELECT *\r\nFROM food_menu\r\nWHERE restaurant_id = 2'),
(4, 'food_delivery_system', '', 'Find Menu', 'SELECT *\r\nFROM restaurant\r\nINNER JOIN food_menu\r\nON restaurant.restaurant_id = food_menu.restaurant_id\r\nWHERE restaurant.restaurant_name LIKE ''%sit%'' or food_menu.food_name LIKE ''%sit%''\r\nGROUP BY restaurant.restaurant_id');

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'Food', '{"quick_or_custom":"quick","what":"sql","structure_or_data_forced":"0","table_select[]":["comment","customer","food_menu","restaurant"],"table_structure[]":["comment","customer","food_menu","restaurant"],"table_data[]":["comment","customer","food_menu","restaurant"],"output_format":"sendit","filename_template":"@DATABASE@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","codegen_structure_or_data":"data","codegen_format":"0","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","json_structure_or_data":"data","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure of table @TABLE@","latex_structure_continued_caption":"Structure of table @TABLE@ (continued)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Content of table @TABLE@","latex_data_continued_caption":"Content of table @TABLE@ (continued)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","mediawiki_structure_or_data":"structure_and_data","mediawiki_caption":"something","mediawiki_headers":"something","ods_null":"NULL","ods_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","pdf_report_title":"","pdf_structure_or_data":"structure_and_data","phparray_structure_or_data":"data","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","xml_structure_or_data":"data","xml_export_events":"something","xml_export_functions":"something","xml_export_procedures":"something","xml_export_tables":"something","xml_export_triggers":"something","xml_export_views":"something","xml_export_contents":"something","yaml_structure_or_data":"data","":null,"lock_tables":null,"as_separate_files":null,"csv_removeCRLF":null,"csv_columns":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null,"json_pretty_print":null,"ods_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_create_database":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"texytext_columns":null}'),
(2, 'root', 'server', 'Food', '{"quick_or_custom":"quick","what":"sql","db_select[]":["food_delivery_system","phpmyadmin","test"],"output_format":"sendit","filename_template":"@SERVER@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","codegen_structure_or_data":"data","codegen_format":"0","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","json_structure_or_data":"data","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure of table @TABLE@","latex_structure_continued_caption":"Structure of table @TABLE@ (continued)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Content of table @TABLE@","latex_data_continued_caption":"Content of table @TABLE@ (continued)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","mediawiki_structure_or_data":"data","mediawiki_caption":"something","mediawiki_headers":"something","ods_null":"NULL","ods_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","pdf_report_title":"","pdf_structure_or_data":"data","phparray_structure_or_data":"data","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","yaml_structure_or_data":"data","":null,"as_separate_files":null,"csv_removeCRLF":null,"csv_columns":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null,"json_pretty_print":null,"ods_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_drop_database":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"texytext_columns":null}'),
(3, 'root', 'database', 'FDS Database', '{"quick_or_custom":"quick","what":"sql","structure_or_data_forced":"0","table_select[]":["comment","customer","food_menu","migrations","order_food","password_resets","restaurant","sessions","users"],"table_structure[]":["comment","customer","food_menu","migrations","order_food","password_resets","restaurant","sessions","users"],"table_data[]":["comment","customer","food_menu","migrations","order_food","password_resets","restaurant","sessions","users"],"output_format":"sendit","filename_template":"@DATABASE@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","codegen_structure_or_data":"data","codegen_format":"0","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","json_structure_or_data":"data","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure of table @TABLE@","latex_structure_continued_caption":"Structure of table @TABLE@ (continued)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Content of table @TABLE@","latex_data_continued_caption":"Content of table @TABLE@ (continued)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","mediawiki_structure_or_data":"structure_and_data","mediawiki_caption":"something","mediawiki_headers":"something","ods_null":"NULL","ods_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","pdf_report_title":"","pdf_structure_or_data":"structure_and_data","phparray_structure_or_data":"data","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","xml_structure_or_data":"data","xml_export_events":"something","xml_export_functions":"something","xml_export_procedures":"something","xml_export_tables":"something","xml_export_triggers":"something","xml_export_views":"something","xml_export_contents":"something","yaml_structure_or_data":"data","":null,"lock_tables":null,"as_separate_files":null,"csv_removeCRLF":null,"csv_columns":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null,"json_pretty_print":null,"ods_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_create_database":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"texytext_columns":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{"db":"food_delivery_system","table":"users"},{"db":"food_delivery_system","table":"customer"},{"db":"food_delivery_system","table":"comment"},{"db":"food_delivery_system","table":"order_food"},{"db":"food_delivery_system","table":"restaurant"},{"db":"food_delivery_system","table":"food_menu"},{"db":"food_delivery_system","table":"sessions"},{"db":"food_delivery_system","table":"migrations"},{"db":"homestead","table":"users"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

--
-- Dumping data for table `pma__relation`
--

INSERT INTO `pma__relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('food_delivery_system', 'comment', 'restaurant_id', 'food_delivery_system', 'restaurant', 'restaurant_id'),
('food_delivery_system', 'comment', 'user_id', 'food_delivery_system', 'customer', 'user_id'),
('food_delivery_system', 'food_menu', 'restaurant_id', 'food_delivery_system', 'food_menu', 'food_id'),
('food_delivery_system', 'restaurant', 'restaurant_id', 'food_delivery_system', 'restaurant', 'restaurant_id');

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'food_delivery_system', 'food_menu', '{"sorted_col":"`food_id` ASC"}', '2016-11-09 10:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2016-10-25 08:40:15', '{"collation_connection":"utf8mb4_unicode_ci"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

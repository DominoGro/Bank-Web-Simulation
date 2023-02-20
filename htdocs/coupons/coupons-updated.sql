-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 08:48 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coupons`
--

-- --------------------------------------------------------

--
-- Table structure for table `costs`
--

CREATE TABLE `costs` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costs`
--

INSERT INTO `costs` (`id`, `value`) VALUES
(1, 3),
(2, 5),
(3, 10),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `miasto`
--

CREATE TABLE `miasto` (
  `nr` bigint(20) UNSIGNED NOT NULL,
  `nazwa` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `miasto`
--

INSERT INTO `miasto` (`nr`, `nazwa`) VALUES
(1, 'Crossword'),
(2, 'Lines'),
(3, 'Wingo'),
(4, 'XL Crossword'),
(5, 'XXL Crossword'),
(6, 'Super Lines'),
(7, 'Fruit Explosion'),
(8, 'others');

-- --------------------------------------------------------

--
-- Table structure for table `zdrapki`
--

CREATE TABLE `zdrapki` (
  `nr` bigint(20) UNSIGNED NOT NULL,
  `id` varchar(4) NOT NULL,
  `words` int(5) NOT NULL,
  `miasto` int(30) DEFAULT NULL,
  `cost` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zdrapki`
--

INSERT INTO `zdrapki` (`nr`, `id`, `words`, `miasto`, `cost`) VALUES
(1, '8194', 2, 1, 1),
(2, '3493', 2, 1, 1),
(3, '4876', 2, 1, 1),
(4, '1108', 2, 1, 1),
(5, '3625', 2, 1, 1),
(6, '3960', 2, 1, 1),
(7, '2178', 2, 1, 1),
(8, '7520', 2, 1, 1),
(9, '7859', 2, 1, 1),
(10, '3536', 2, 1, 1),
(11, '1174', 2, 1, 1),
(12, '5467', 2, 1, 1),
(13, '1101', 2, 1, 1),
(14, '2116', 0, 2, 1),
(15, '7611', 0, 2, 1),
(16, '9477', 2, 1, 1),
(17, '6252', 0, 2, 1),
(18, '4171', 2, 1, 1),
(19, '5539', 2, 1, 1),
(20, '5549', 2, 1, 1),
(21, '3173', 2, 1, 1),
(22, '8213', 2, 1, 1),
(23, '3575', 2, 1, 1),
(24, '0882', 2, 1, 1),
(25, '5741', 2, 1, 1),
(26, '7848', 2, 1, 1),
(27, '8290', 2, 1, 1),
(28, '1101', 2, 1, 1),
(29, '4191', 2, 1, 1),
(30, '6925', 1, 1, 1),
(31, '0037', 2, 1, 1),
(32, '2584', 2, 1, 1),
(33, '0716', 2, 1, 1),
(34, '0368', 2, 1, 1),
(35, '3019', 2, 1, 1),
(36, '7167', 2, 1, 1),
(37, '8069', 2, 1, 1),
(38, '2683', 2, 1, 1),
(39, '6347', 2, 1, 1),
(40, '3457', 1, 1, 1),
(41, '1587', 1, 1, 1),
(42, '0893', 2, 1, 1),
(43, '5073', 2, 1, 1),
(44, '5363', 1, 1, 1),
(45, '4792', 1, 1, 1),
(46, '8619', 2, 1, 1),
(47, '6165', 0, 2, 1),
(48, '8525', 2, 1, 1),
(49, '7074', 2, 1, 1),
(50, '2888', 1, 1, 1),
(51, '6578', 1, 1, 1),
(52, '4323', 1, 1, 1),
(53, '5615', 1, 1, 1),
(54, '0585', 2, 1, 1),
(55, '0610', 1, 1, 1),
(56, '3823', 1, 1, 1),
(57, '2061', 2, 1, 1),
(58, '4376', 2, 1, 1),
(59, '4015', 0, 2, 1),
(60, '9784', 0, 3, 1),
(61, '5512', 2, 1, 1),
(62, '0397', 2, 1, 1),
(63, '8538', 2, 1, 1),
(64, '3865', 2, 1, 1),
(65, '7341', 2, 1, 1),
(66, '1474', 1, 1, 1),
(67, '4125', 1, 1, 1),
(68, '4565', 2, 1, 1),
(69, '8689', 1, 1, 1),
(70, '9543', 2, 1, 1),
(71, '1406', 2, 1, 1),
(72, '3312', 2, 1, 1),
(73, '6258', 2, 1, 1),
(74, '6182', 2, 1, 1),
(75, '8424', 2, 1, 1),
(76, '3890', 2, 1, 1),
(77, '8642', 2, 1, 1),
(78, '5709', 1, 1, 1),
(79, '7340', 2, 1, 1),
(80, '2766', 1, 1, 1),
(81, '3616', 2, 1, 1),
(82, '6509', 0, 2, 1),
(83, '5710', 2, 1, 1),
(84, '6429', 2, 1, 1),
(85, '4675', 2, 1, 1),
(86, '1309', 2, 1, 1),
(87, '0848', 2, 1, 1),
(88, '5503', 2, 1, 1),
(89, '7343', 2, 1, 1),
(90, '0626', 2, 1, 1),
(91, '8157', 2, 1, 1),
(92, '5551', 2, 1, 1),
(93, '9706', 0, 2, 1),
(94, '9083', 0, 2, 1),
(95, '1032', 0, 2, 1),
(96, '6063', 0, 2, 1),
(97, '8591', 0, 3, 1),
(98, '1396', 0, 3, 1),
(99, '0675', 2, 1, 1),
(100, '4079', 2, 1, 1),
(101, '3506', 2, 1, 1),
(102, '9180', 2, 1, 1),
(103, '2914', 2, 1, 1),
(104, '1356', 1, 1, 1),
(105, '9166', 21, 4, 2),
(106, '2357', 2, 1, 1),
(107, '3657', 2, 1, 1),
(108, '6688', 2, 1, 1),
(109, '1388', 1, 1, 1),
(110, '2805', 2, 1, 1),
(111, '6443', 1, 1, 1),
(112, '3616', 2, 1, 1),
(113, '4478', 2, 1, 1),
(114, '5488', 1, 1, 1),
(115, '1149', 2, 1, 1),
(116, '5927', 2, 1, 1),
(117, '9896', 2, 1, 1),
(118, '4338', 1, 1, 1),
(119, '1808', 2, 1, 1),
(120, '4050', 2, 1, 1),
(121, '2097', 2, 1, 1),
(122, '3003', 2, 1, 1),
(123, '2710', 2, 1, 1),
(124, '1076', 2, 1, 1),
(125, '6479', 0, 2, 1),
(126, '5626', 2, 1, 1),
(127, '4551', 1, 1, 1),
(128, '6596', 2, 1, 1),
(129, '3692', 2, 1, 1),
(130, '1673', 1, 1, 1),
(131, '5093', 2, 1, 1),
(132, '1502', 2, 1, 1),
(133, '4066', 2, 1, 1),
(134, '9939', 1, 1, 1),
(135, '9170', 0, 2, 1),
(136, '2474', 0, 2, 1),
(137, '9700', 2, 1, 1),
(138, '5030', 2, 1, 1),
(139, '9565', 1, 1, 1),
(140, '9098', 2, 1, 1),
(141, '3882', 0, 1, 2),
(142, '2513', 0, 4, 2),
(143, '8630', 0, 4, 2),
(144, '8266', 0, 4, 2),
(145, '6457', 0, 4, 2),
(146, '5465', 0, 4, 2),
(147, '1455', 0, 4, 2),
(148, '8037', 0, 4, 2),
(149, '2280', 0, 4, 2),
(150, '0820', 0, 4, 2),
(151, '3292', 0, 4, 2),
(152, '3471', 0, 4, 2),
(153, '7928', 2, 1, 1),
(154, '3208', 1, 1, 1),
(155, '9444', 2, 1, 1),
(156, '9620', 2, 1, 1),
(157, '8351', 2, 1, 1),
(158, '8694', 2, 1, 1),
(159, '5877', 0, 4, 2),
(160, '0494', 0, 4, 2),
(161, '9901', 0, 4, 2),
(162, '1403', 0, 4, 2),
(163, '0635', 0, 4, 2),
(164, '8379', 0, 4, 2),
(165, '4172', 0, 4, 2),
(166, '6848', 0, 4, 2),
(167, '2228', 0, 6, 2),
(168, '8203', 0, 6, 2),
(169, '1707', 0, 1, 2),
(170, '9750', 0, 1, 3),
(171, '4069', 1, 1, 1),
(172, '6976', 0, 4, 2),
(173, '1985', 2, 1, 1),
(174, '1143', 0, 2, 1),
(175, '2446', 0, 3, 1),
(176, '8315', 2, 1, 1),
(177, '3510', 2, 1, 1),
(178, '9757', 2, 1, 1),
(179, '3297', 2, 1, 1),
(180, '2357', 2, 1, 1),
(181, '6930', 2, 1, 1),
(182, '9486', 2, 1, 1),
(183, '7099', 1, 1, 1),
(184, '4513', 1, 1, 1),
(185, '5346', 2, 1, 1),
(186, '0097', 0, 2, 1),
(187, '2401', 0, 2, 1),
(188, '7168', 2, 4, 2),
(189, '1842', 2, 4, 2),
(190, '8211', 0, 7, 1),
(191, '0423', 0, 7, 1),
(192, '5109', 2, 1, 1),
(193, '1738', 2, 1, 1),
(194, '6032', 1, 1, 1),
(195, '2549', 1, 1, 1),
(196, '4468', 2, 1, 1),
(197, '3545', 0, 4, 2),
(198, '8453', 1, 1, 1),
(199, '7920', 2, 1, 1),
(200, '0197', 1, 1, 1),
(201, '0479', 2, 4, 2),
(202, '7131', 2, 4, 2),
(203, '4262', 2, 4, 2),
(204, '8981', 2, 4, 2),
(205, '6304', 2, 4, 2),
(206, '3407', 1, 4, 2),
(207, '3010', 2, 4, 2),
(208, '2772', 2, 4, 2),
(209, '9701', 2, 4, 2),
(210, '1900', 2, 4, 2),
(211, '8187', 0, 4, 2),
(212, '5078', 2, 4, 2),
(213, '9518', 0, 8, 2),
(214, '2275', 0, 8, 2),
(215, '4873', 2, 4, 2),
(216, '6241', 2, 4, 2),
(217, '0877', 2, 4, 2),
(218, '8877', 2, 4, 2),
(219, '8066', 1, 4, 2),
(220, '0676', 2, 4, 2),
(221, '5266', 2, 4, 2),
(222, '9055', 1, 4, 2),
(223, '6718', 0, 8, 2),
(224, '9928', 0, 8, 4),
(225, '3600', 2, 4, 2),
(226, '8723', 2, 1, 1),
(227, '1929', 2, 1, 1),
(228, '4342', 1, 1, 1),
(229, '5544', 2, 1, 1),
(230, '1434', 2, 1, 1),
(231, '7883', 2, 1, 1),
(232, '0002', 1, 1, 1),
(233, '4894', 2, 1, 1),
(234, '2445', 1, 1, 1),
(235, '2022', 2, 1, 1),
(236, '8640', 1, 4, 2),
(237, '3788', 2, 1, 1),
(238, '6926', 2, 1, 1),
(239, '7415', 2, 4, 2),
(240, '9490', 2, 1, 1),
(241, '5041', 2, 1, 1),
(242, '7630', 2, 1, 1),
(243, '8247', 2, 1, 1),
(244, '7761', 2, 1, 1),
(245, '5860', 1, 1, 1),
(246, '1199', 2, 1, 1),
(247, '6091', 2, 1, 1),
(248, '5155', 2, 1, 1),
(249, '2781', 2, 1, 1),
(250, '1995', 2, 1, 1),
(251, '3789', 2, 1, 1),
(252, '7744', 2, 1, 1),
(253, '7156', 1, 1, 1),
(254, '4274', 1, 1, 1),
(255, '4228', 2, 1, 1),
(256, '9573', 2, 1, 1),
(257, '1428', 2, 1, 1),
(258, '0307', 2, 1, 1),
(259, '0361', 1, 1, 1),
(260, '6911', 2, 4, 2),
(261, '5501', 1, 5, 3),
(262, '5689', 2, 1, 1),
(263, '4053', 2, 1, 1),
(264, '7435', 2, 1, 1),
(265, '4889', 21, 4, 2),
(266, '2330', 21, 4, 2),
(267, '3508', 1, 1, 1),
(268, '0159', 2, 1, 1),
(269, '4532', 1, 1, 1),
(270, '1611', 1, 1, 1),
(271, '2149', 2, 1, 1),
(272, '5942', 2, 1, 1),
(273, '3674', 2, 1, 1),
(274, '6958', 2, 1, 1),
(275, '5235', 2, 1, 1),
(276, '3127', 2, 1, 1),
(277, '7954', 2, 1, 1),
(278, '6217', 0, 5, 3),
(279, '3428', 21, 4, 2),
(280, '6302', 2, 4, 2),
(281, '7698', 2, 4, 2),
(282, '5068', 0, 8, 2);

-- nr  id   words  name cost
--
-- Indexes for dumped tables
--

--
-- Indexes for table `costs`
--
ALTER TABLE `costs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `value` (`value`);

--
-- Indexes for table `miasto`
--
ALTER TABLE `miasto`
  ADD PRIMARY KEY (`nr`);

--
-- Indexes for table `zdrapki`
--
ALTER TABLE `zdrapki`
  ADD PRIMARY KEY (`nr`),
  ADD KEY `FK_xd` (`miasto`),
  ADD KEY `cost` (`cost`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costs`
--
ALTER TABLE `costs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `miasto`
--
ALTER TABLE `miasto`
  MODIFY `nr` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `zdrapki`
--
ALTER TABLE `zdrapki`
  MODIFY `nr` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8199;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
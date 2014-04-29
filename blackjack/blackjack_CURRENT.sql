-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2014 at 12:24 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blackjack`
--
CREATE DATABASE IF NOT EXISTS `blackjack` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blackjack`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uid` int(10) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `admin`) VALUES
(19, 1),
(22, 0),
(23, 0),
(25, 0),
(27, 0),
(28, 0),
(29, 0),
(30, 0),
(31, 1),
(32, 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `uid` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`uid`, `color`) VALUES
(27, 3),
(28, 2),
(19, 1),
(22, 0),
(23, 0),
(25, 0),
(29, 3),
(30, 0),
(31, 0),
(32, 0);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `ct` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `played` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `losses` int(11) NOT NULL,
  `draws` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ct`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=161 ;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`ct`, `uid`, `played`, `wins`, `losses`, `draws`, `date`) VALUES
(2, 22, 1, 1, 0, 0, '2014-04-26'),
(3, 23, 1, 0, 1, 0, '2014-04-26'),
(4, 23, 1, 0, 1, 0, '2014-04-26'),
(5, 23, 1, 0, 1, 0, '2014-04-26'),
(7, 23, 1, 1, 0, 0, '2014-04-26'),
(8, 19, 1, 0, 1, 0, '2014-04-26'),
(10, 19, 1, 0, 1, 0, '2014-04-26'),
(11, 19, 1, 0, 0, 1, '2014-04-27'),
(12, 19, 1, 1, 0, 0, '2014-04-26'),
(13, 19, 1, 1, 0, 0, '2014-04-26'),
(14, 25, 1, 0, 1, 0, '2014-04-26'),
(15, 25, 1, 0, 1, 0, '2014-04-26'),
(16, 25, 1, 0, 1, 0, '2014-04-26'),
(17, 25, 1, 1, 0, 0, '2014-04-26'),
(19, 25, 1, 1, 0, 0, '2014-04-26'),
(20, 25, 1, 1, 0, 0, '2014-04-26'),
(22, 25, 1, 0, 1, 0, '2014-04-26'),
(23, 25, 1, 1, 0, 0, '2014-04-26'),
(24, 25, 1, 1, 0, 0, '2014-04-26'),
(25, 25, 1, 1, 0, 0, '2014-04-26'),
(27, 27, 1, 1, 0, 0, '2014-04-27'),
(28, 19, 1, 0, 1, 0, '2014-04-27'),
(29, 19, 1, 0, 1, 0, '2014-04-27'),
(30, 19, 1, 0, 1, 0, '2014-04-27'),
(31, 19, 1, 0, 1, 0, '2014-04-27'),
(34, 19, 1, 0, 1, 0, '2014-04-27'),
(35, 19, 1, 1, 0, 0, '2014-04-27'),
(36, 19, 1, 1, 0, 0, '2014-04-27'),
(37, 19, 1, 0, 1, 0, '2014-04-27'),
(39, 27, 1, 1, 0, 0, '2014-04-27'),
(41, 27, 1, 0, 1, 0, '2014-04-27'),
(44, 27, 1, 1, 0, 0, '2014-04-27'),
(45, 27, 1, 0, 1, 0, '2014-04-27'),
(46, 27, 1, 1, 0, 0, '2014-04-27'),
(47, 27, 1, 0, 1, 0, '2014-04-27'),
(48, 27, 1, 1, 0, 0, '2014-04-27'),
(49, 27, 1, 1, 0, 0, '2014-04-27'),
(50, 27, 1, 0, 1, 0, '2014-04-27'),
(51, 27, 1, 1, 0, 0, '2014-04-27'),
(52, 27, 1, 1, 0, 0, '2014-04-27'),
(53, 27, 1, 0, 1, 0, '2014-04-27'),
(54, 27, 1, 1, 0, 0, '2014-04-27'),
(55, 19, 1, 1, 0, 0, '2014-04-27'),
(56, 27, 1, 0, 1, 0, '2014-04-27'),
(58, 19, 1, 0, 1, 0, '2014-04-27'),
(59, 19, 1, 0, 1, 0, '2014-04-28'),
(60, 19, 1, 0, 1, 0, '2014-04-28'),
(61, 19, 1, 0, 1, 0, '2014-04-28'),
(65, 28, 1, 0, 1, 0, '2014-04-29'),
(66, 19, 1, 1, 0, 0, '2014-04-29'),
(67, 19, 1, 1, 0, 0, '2014-04-29'),
(68, 19, 1, 1, 0, 0, '2014-04-29'),
(69, 19, 1, 0, 1, 0, '2014-04-29'),
(70, 19, 1, 0, 1, 1, '2014-04-29'),
(71, 19, 1, 0, 1, 1, '2014-04-29'),
(72, 19, 1, 1, 0, 0, '2014-04-29'),
(73, 19, 1, 1, 0, 0, '2014-04-29'),
(74, 19, 1, 1, 0, 0, '2014-04-29'),
(75, 19, 1, 1, 0, 0, '2014-04-29'),
(77, 19, 1, 1, 0, 0, '2014-04-29'),
(78, 19, 1, 0, 1, 0, '2014-04-29'),
(79, 19, 1, 0, 1, 0, '2014-04-29'),
(80, 19, 1, 1, 0, 0, '2014-04-29'),
(81, 19, 1, 0, 1, 0, '2014-04-29'),
(82, 19, 1, 0, 1, 0, '2014-04-29'),
(83, 19, 1, 1, 0, 0, '2014-04-29'),
(84, 19, 1, 0, 0, 1, '2014-04-29'),
(85, 19, 1, 0, 0, 1, '2014-04-29'),
(86, 19, 1, 0, 1, 0, '2014-04-29'),
(87, 19, 1, 0, 1, 0, '2014-04-29'),
(88, 19, 1, 1, 0, 0, '2014-04-29'),
(89, 19, 1, 1, 0, 0, '2014-04-29'),
(90, 19, 1, 1, 0, 0, '2014-04-29'),
(91, 19, 1, 1, 0, 0, '2014-04-29'),
(97, 19, 1, 0, 1, 0, '2014-04-29'),
(98, 19, 1, 0, 1, 0, '2014-04-29'),
(103, 19, 1, 1, 0, 0, '2014-04-29'),
(118, 19, 1, 0, 0, 1, '2014-04-29'),
(119, 19, 1, 0, 1, 0, '2014-04-29'),
(120, 19, 1, 0, 1, 0, '2014-04-29'),
(121, 19, 1, 1, 0, 0, '2014-04-29'),
(122, 19, 1, 1, 0, 0, '2014-04-29'),
(123, 19, 1, 0, 1, 0, '2014-04-29'),
(124, 19, 1, 0, 1, 0, '2014-04-29'),
(125, 19, 1, 0, 1, 0, '2014-04-29'),
(127, 19, 1, 1, 0, 0, '2014-04-29'),
(128, 19, 1, 1, 0, 0, '2014-04-29'),
(129, 19, 1, 1, 0, 0, '2014-04-29'),
(130, 19, 1, 1, 0, 0, '2014-04-29'),
(131, 19, 1, 0, 1, 0, '2014-04-29'),
(132, 19, 1, 0, 1, 0, '2014-04-29'),
(133, 19, 1, 1, 0, 0, '2014-04-29'),
(134, 19, 1, 0, 1, 0, '2014-04-29'),
(135, 19, 1, 0, 1, 0, '2014-04-29'),
(136, 19, 1, 1, 0, 0, '2014-04-29'),
(137, 19, 1, 0, 0, 1, '2014-04-29'),
(138, 19, 1, 1, 0, 0, '2014-04-29'),
(139, 19, 1, 1, 0, 0, '2014-04-29'),
(140, 19, 1, 1, 0, 0, '2014-04-29'),
(141, 19, 1, 1, 0, 0, '2014-04-29'),
(142, 19, 1, 1, 0, 0, '2014-04-29'),
(143, 19, 1, 1, 0, 0, '2014-04-29'),
(144, 19, 1, 1, 0, 0, '2014-04-29'),
(145, 19, 1, 1, 0, 0, '2014-04-29'),
(146, 19, 1, 1, 0, 0, '2014-04-29'),
(147, 19, 1, 0, 0, 1, '2014-04-29'),
(148, 19, 1, 0, 1, 0, '2014-04-29'),
(149, 19, 1, 0, 1, 0, '2014-04-29'),
(150, 32, 1, 1, 0, 0, '2014-04-29'),
(151, 32, 1, 0, 1, 0, '2014-04-29'),
(152, 32, 1, 0, 1, 0, '2014-04-29'),
(153, 32, 1, 1, 0, 0, '2014-04-29'),
(154, 32, 1, 0, 1, 0, '2014-04-29'),
(155, 32, 1, 1, 0, 0, '2014-04-29'),
(156, 32, 1, 1, 0, 0, '2014-04-29'),
(157, 32, 1, 0, 1, 0, '2014-04-29'),
(158, 32, 1, 0, 0, 1, '2014-04-29'),
(159, 32, 1, 0, 1, 0, '2014-04-29'),
(160, 32, 1, 1, 0, 0, '2014-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `uinfo`
--

CREATE TABLE IF NOT EXISTS `uinfo` (
  `uid` int(11) NOT NULL,
  `money` double NOT NULL DEFAULT '1000',
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `user_id` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uinfo`
--

INSERT INTO `uinfo` (`uid`, `money`, `last_login`) VALUES
(19, 24000, '2014-04-29 22:01:02'),
(22, 1080, '2014-04-26 23:09:03'),
(23, 944, '2014-04-27 01:08:27'),
(25, 1600, '2014-04-28 05:04:24'),
(27, 2000, '2014-04-27 21:08:29'),
(28, 1000, '2014-04-27 21:00:12'),
(29, 1000, '2014-04-27 23:22:43'),
(30, 1000, '2014-04-28 05:25:27'),
(31, 1000, '2014-04-28 05:26:32'),
(32, 3000, '2014-04-29 22:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `FName` varchar(25) NOT NULL,
  `LName` varchar(40) NOT NULL,
  `Email` varchar(257) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `pass` varchar(257) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `FName`, `LName`, `Email`, `user_name`, `pass`) VALUES
(19, '', '', '', 'margo', 'a31a83e3eb0bc30c5e373ae45b532622'),
(22, '', '', '', 'margom', '69ae1b0d7e4f18a404529059cd1e6393'),
(23, '', '', '', 'test1', '5a105e8b9d40e1329780d62ea2265d8a'),
(25, '', '', '', 'test2', 'ad0234829205b9033196ba818f7a872b'),
(27, '', '', '', 'test3', '8ad8757baa8564dc136c1e07507f4a98'),
(28, '', '', '', 'test4', '86985e105f79b95d6bc918fb45ec7727'),
(29, '', '', '', 'baller', '2141b17fb8b9c95b77e9eeccdc7e8010'),
(30, '', '', '', 'bryce', 'bf8297477aec722a665d69d0dc88894e'),
(31, '', '', '', 'beast', 'b878bc127cdb631d4fea3580fccceaa0'),
(32, '', '', '', 'mmackay', 'a83b4a25eb6277bc7e878e103e29eed0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `stats_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `uinfo`
--
ALTER TABLE `uinfo`
  ADD CONSTRAINT `uinfo_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

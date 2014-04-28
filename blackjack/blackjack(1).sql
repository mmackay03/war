-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2014 at 07:44 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

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
(19, 0),
(29, 1),
(31, 1);

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE IF NOT EXISTS `leaderboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `money` double NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(28, 4),
(19, 2),
(22, 0),
(23, 0),
(25, 0),
(29, 3),
(30, 0),
(31, 0);

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ct`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`ct`, `uid`, `played`, `wins`, `losses`, `draws`, `date`) VALUES
(2, 22, 1, 1, 0, 0, '2014-04-26 23:09:03'),
(3, 23, 1, 0, 1, 0, '2014-04-26 23:22:24'),
(4, 23, 1, 0, 1, 0, '2014-04-26 23:54:14'),
(5, 23, 1, 0, 1, 0, '2014-04-26 23:54:21'),
(7, 23, 1, 1, 0, 0, '2014-04-27 01:08:27'),
(8, 19, 1, 0, 1, 0, '2014-04-27 01:08:50'),
(10, 19, 1, 0, 1, 0, '2014-04-27 01:38:33'),
(11, 19, 1, 0, 0, 1, '2014-04-27 19:54:39'),
(12, 19, 1, 1, 0, 0, '2014-04-27 02:00:08'),
(13, 19, 1, 1, 0, 0, '2014-04-27 02:04:20'),
(14, 25, 1, 0, 1, 0, '2014-04-27 02:08:53'),
(15, 25, 1, 0, 1, 0, '2014-04-27 02:09:01'),
(16, 25, 1, 0, 1, 0, '2014-04-27 02:09:30'),
(17, 25, 1, 1, 0, 0, '2014-04-27 02:12:39'),
(19, 25, 1, 1, 0, 0, '2014-04-27 02:14:50'),
(20, 25, 1, 1, 0, 0, '2014-04-27 02:14:58'),
(22, 25, 1, 0, 1, 0, '2014-04-27 02:55:36'),
(23, 25, 1, 1, 0, 0, '2014-04-27 04:25:25'),
(24, 25, 1, 1, 0, 0, '2014-04-27 04:26:04'),
(25, 25, 1, 1, 0, 0, '2014-04-27 04:26:37'),
(27, 27, 1, 1, 0, 0, '2014-04-27 18:20:27'),
(28, 19, 1, 0, 1, 0, '2014-04-27 19:04:12'),
(29, 19, 1, 0, 1, 0, '2014-04-27 19:05:50'),
(30, 19, 1, 0, 1, 0, '2014-04-27 19:42:21'),
(31, 19, 1, 0, 1, 0, '2014-04-27 19:42:47'),
(34, 19, 1, 0, 1, 0, '2014-04-27 20:27:45'),
(35, 19, 1, 1, 0, 0, '2014-04-27 20:28:50'),
(36, 19, 1, 1, 0, 0, '2014-04-27 20:29:00'),
(37, 19, 1, 0, 1, 0, '2014-04-27 20:31:41'),
(38, 27, 1, 0, 1, 0, '2014-04-27 20:32:44'),
(39, 27, 1, 1, 0, 0, '2014-04-27 20:33:33'),
(40, 27, 1, 1, 1, 0, '2014-04-27 20:33:41'),
(41, 27, 1, 0, 1, 0, '2014-04-27 20:35:17'),
(42, 27, 1, 1, 1, 0, '2014-04-27 20:35:23'),
(43, 27, 1, 1, 1, 0, '2014-04-27 20:35:34'),
(44, 27, 1, 1, 0, 0, '2014-04-27 20:38:20'),
(45, 27, 1, 0, 1, 0, '2014-04-27 20:42:10'),
(46, 27, 1, 1, 0, 0, '2014-04-27 20:42:19'),
(47, 27, 1, 0, 1, 0, '2014-04-27 20:43:10'),
(48, 27, 1, 1, 0, 0, '2014-04-27 20:51:21'),
(49, 27, 1, 1, 0, 0, '2014-04-27 20:51:46'),
(50, 27, 1, 0, 1, 0, '2014-04-27 20:52:30'),
(51, 27, 1, 1, 0, 0, '2014-04-27 20:53:06'),
(52, 27, 1, 1, 0, 0, '2014-04-27 20:55:52'),
(53, 27, 1, 0, 1, 0, '2014-04-27 20:57:06'),
(54, 27, 1, 1, 0, 0, '2014-04-27 20:57:25'),
(55, 19, 1, 1, 0, 0, '2014-04-27 21:06:29'),
(56, 27, 1, 0, 1, 0, '2014-04-27 21:08:20'),
(57, 27, 1, 1, 1, 0, '2014-04-27 21:08:29'),
(58, 19, 1, 0, 1, 0, '2014-04-27 21:11:12');

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
(19, 1500, '2014-04-28 04:36:38'),
(22, 1080, '2014-04-26 23:09:03'),
(23, 944, '2014-04-27 01:08:27'),
(25, 1600, '2014-04-28 05:04:24'),
(27, 2000, '2014-04-27 21:08:29'),
(28, 1000, '2014-04-27 21:00:12'),
(29, 1000, '2014-04-27 23:22:43'),
(30, 1000, '2014-04-28 05:25:27'),
(31, 1000, '2014-04-28 05:26:32');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

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
(31, '', '', '', 'beast', 'b878bc127cdb631d4fea3580fccceaa0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD CONSTRAINT `leaderboard_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`uid`);

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

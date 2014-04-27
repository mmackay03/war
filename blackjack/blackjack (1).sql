-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2014 at 09:16 PM
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
(27, 0);

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ct`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`ct`, `uid`, `played`, `wins`, `losses`, `date`) VALUES
(2, 22, 1, 1, 0, '2014-04-26 23:09:03'),
(3, 23, 1, 0, 1, '2014-04-26 23:22:24'),
(4, 23, 1, 0, 1, '2014-04-26 23:54:14'),
(5, 23, 1, 0, 1, '2014-04-26 23:54:21'),
(7, 23, 1, 1, 0, '2014-04-27 01:08:27'),
(8, 19, 1, 0, 1, '2014-04-27 01:08:50'),
(10, 19, 1, 0, 1, '2014-04-27 01:38:33'),
(11, 19, 1, 1, 0, '2014-04-27 02:00:01'),
(12, 19, 1, 1, 0, '2014-04-27 02:00:08'),
(13, 19, 1, 1, 0, '2014-04-27 02:04:20'),
(14, 25, 1, 0, 1, '2014-04-27 02:08:53'),
(15, 25, 1, 0, 1, '2014-04-27 02:09:01'),
(16, 25, 1, 0, 1, '2014-04-27 02:09:30'),
(17, 25, 1, 1, 0, '2014-04-27 02:12:39'),
(18, 25, 1, 1, 1, '2014-04-27 02:12:49'),
(19, 25, 1, 1, 0, '2014-04-27 02:14:50'),
(20, 25, 1, 1, 0, '2014-04-27 02:14:58'),
(21, 25, 1, 1, 1, '2014-04-27 02:15:08'),
(22, 25, 1, 0, 1, '2014-04-27 02:55:36'),
(23, 25, 1, 1, 0, '2014-04-27 04:25:25'),
(24, 25, 1, 1, 0, '2014-04-27 04:26:04'),
(25, 25, 1, 1, 0, '2014-04-27 04:26:37'),
(27, 27, 1, 1, 0, '2014-04-27 18:20:27'),
(28, 19, 1, 0, 1, '2014-04-27 19:04:12'),
(29, 19, 1, 0, 1, '2014-04-27 19:05:50');

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
(13, 1000, '2014-04-21 17:42:28'),
(14, 1000, '2014-04-21 17:44:50'),
(17, 1000, '2014-04-22 15:26:31'),
(18, 10, '2014-04-22 15:32:44'),
(19, 21000, '2014-04-27 19:05:50'),
(20, 1000, '2014-04-26 06:09:02'),
(21, 1150, '2014-04-26 22:31:52'),
(22, 1080, '2014-04-26 23:09:03'),
(23, 944, '2014-04-27 01:08:27'),
(25, 1020, '2014-04-27 04:26:37'),
(27, 2100, '2014-04-27 18:20:27');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `FName`, `LName`, `Email`, `user_name`, `pass`) VALUES
(13, '', '', '', 'bryce', 'bf8297477aec722a665d69d0dc88894e'),
(14, '', '', '', 'google', 'c822c1b63853ed273b89687ac505f9fa'),
(16, '', '', '', 'baller', '2141b17fb8b9c95b77e9eeccdc7e8010'),
(17, '', '', '', 'name', 'b068931cc450442b63f5b3d276ea4297'),
(18, '', '', '', 'danny', 'b7bee6b36bd35b773132d4e3a74c2bb5'),
(19, '', '', '', 'margo', 'a31a83e3eb0bc30c5e373ae45b532622'),
(20, '', '', '', 'margo2', 'f9fdc9eccba31e9e6b2d2839d930c791'),
(21, '', '', '', 'margo3', 'ec0c8964643b3ea78cd145a8149227fd'),
(22, '', '', '', 'margom', '69ae1b0d7e4f18a404529059cd1e6393'),
(23, '', '', '', 'test1', '5a105e8b9d40e1329780d62ea2265d8a'),
(25, '', '', '', 'test2', 'ad0234829205b9033196ba818f7a872b'),
(27, '', '', '', 'test3', '8ad8757baa8564dc136c1e07507f4a98');

--
-- Constraints for dumped tables
--

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

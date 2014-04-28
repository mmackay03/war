-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2014 at 10:24 PM
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `limit_h` int(11) NOT NULL,
  `limit_l` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(18, 10, '2014-04-22 15:32:44');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `FName`, `LName`, `Email`, `user_name`, `pass`) VALUES
(13, '', '', '', 'bryce', 'bf8297477aec722a665d69d0dc88894e'),
(14, '', '', '', 'google', 'c822c1b63853ed273b89687ac505f9fa'),
(16, '', '', '', 'baller', '2141b17fb8b9c95b77e9eeccdc7e8010'),
(17, '', '', '', 'name', 'b068931cc450442b63f5b3d276ea4297'),
(18, '', '', '', 'danny', 'b7bee6b36bd35b773132d4e3a74c2bb5');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD CONSTRAINT `leaderboard_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`uid`);

--
-- Constraints for table `uinfo`
--
ALTER TABLE `uinfo`
  ADD CONSTRAINT `uinfo_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

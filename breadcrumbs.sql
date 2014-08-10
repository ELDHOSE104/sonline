-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2013 at 05:49 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `breadcrumbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `title` text,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`lid`, `question`, `answer`, `title`) VALUES
(6, 'uploads/jhljhjh.jpg', 'appy fizz', '5'),
(2, 'uploads/kjhdf.jpg', 'Chetan Bhagat', '2'),
(3, 'uploads/cvxbdfbdb.jpg', 'ibl', '3'),
(4, 'uploads/youtu.be9sciU0dY5u0.jpg', 'Chennai Express', '1'),
(1, 'uploads/youtu.be9sciU0dY5u0.jpg', 'Chennai Express', '1'),
(7, 'uploads/kjbkjb.jpg', 'Will Smith', '6'),
(8, 'uploads/sdfsf.jpg', 'SAME BIRTHDAY', '7');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `full_name` text NOT NULL,
  `phno` bigint(20) DEFAULT NULL,
  `college` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phno` (`phno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `full_name`, `phno`, `college`, `created_at`) VALUES
(1, 'eldhose104@gmail.com', 'sempron', 'eldhose k shibu', 9400346078, 'mace', '2013-09-17 19:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE IF NOT EXISTS `user_level` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `lid` int(11) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`uid`, `lid`, `time`) VALUES
(1, 2, '2013-09-17 20:03:41');

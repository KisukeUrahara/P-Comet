-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2014 at 05:21 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: ` a7912153_pest`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `Project_id` int(11) NOT NULL,
  `Admin_id` int(11) NOT NULL,
  `Member-count` int(11) NOT NULL,
  `Institute` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `Region` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `Description` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `Stream` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `Video_id` int(11) NOT NULL,
  PRIMARY KEY (`Project_id`),
  KEY `ProjectFK` (`Admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `Password` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `Contact_no.` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Current_Project` int(11) NOT NULL,
  `email` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`Uid`),
  KEY `UserFK` (`Current_Project`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `works_on`
--

CREATE TABLE IF NOT EXISTS `works_on` (
  `email` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `Project_id` int(11) NOT NULL,
  PRIMARY KEY (`email`,`Project_id`),
  KEY `Works_onFK2` (`Project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

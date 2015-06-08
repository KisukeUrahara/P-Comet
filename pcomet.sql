-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2014 at 06:56 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pcomet`
--


-- --------------------------------------------------------

--
-- Table structure for table `invite`
--

CREATE TABLE IF NOT EXISTS `invite` (
  `tsi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `auid` int(11) NOT NULL,
  `ruid` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invite`
--

INSERT INTO `invite` (`tsi`, `auid`, `ruid`, `pid`) VALUES
('2014-07-23 11:35:05', 0, 0, 0),
('2014-07-24 05:30:41', 40, 44, 49),
('2014-07-24 05:30:41', 40, 44, 57),
('2014-07-24 07:54:58', 41, 40, 56),
('2014-07-24 07:54:58', 41, 40, 58),
('2014-07-28 07:32:55', 40, 42, 57);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `Project_id` int(11) NOT NULL AUTO_INCREMENT,
  `Admin_id` int(11) NOT NULL,
  `project_name` varchar(40) NOT NULL,
  `Memcount` int(11) NOT NULL,
  `Institute` varchar(35) NOT NULL,
  `pregion` varchar(30) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Stream` varchar(30) NOT NULL,
  `vidurl` varchar(50) NOT NULL,
  `tsp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stat` int(11) NOT NULL DEFAULT '1' COMMENT '1=going on; 0 = over',
  PRIMARY KEY (`Project_id`),
  KEY `Admin_id` (`Admin_id`),
  KEY `Admin_id_2` (`Admin_id`),
  KEY `Admin_id_3` (`Admin_id`),
  KEY `stat` (`stat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Project_id`, `Admin_id`, `project_name`, `Memcount`, `Institute`, `pregion`, `Description`, `Stream`, `vidurl`, `tsp`, `stat`) VALUES
(49, 40, 'Ajax camp', 0, '', '', 'Start a workshop to research why ajax doesnt work well with metro ui css', 'Educational', 'http://localhost/Projectx/project_pics/49.png', '2014-07-20 17:32:14', 0),
(50, 40, 'event app', 0, '', '', 'Create a platform for advertising your college fests', 'Social', 'http://localhost/Projectx/project_pics/50.JPEG', '2014-07-18 04:14:12', 1),
(51, 41, 'Portable radar system', 0, '', '', 'Build a portable radar system using bluetooth modules', 'Military and Defense', 'http://localhost/Projectx/project_pics/51.jpg', '2014-07-18 06:57:25', 0),
(52, 41, 'Jumping jack', 0, '', '', 'A game for facebook.', 'Miscellaneous', 'http://localhost/Projectx/project_pics/52.jpg', '2014-07-18 04:31:06', 0),
(53, 42, 'Blue Copter', 0, 'PESIT', '', 'Build a quadcopter that can be controlled by simple hand gestures', 'Miscellaneous', 'http://localhost/Projectx/project_pics/53.jpg', '2014-07-18 04:26:06', 1),
(54, 42, 'Retina Temperature sensor', 0, 'PESIT', '', 'Build a device that scans the retina and determines the body temperature.', 'Medical', 'http://localhost/Projectx/project_pics/54.jpg', '2014-07-18 04:27:41', 1),
(55, 43, 'Money splitter', 0, 'RV', '', 'Splits the bill and assigns it to all friends in a social group.', 'Social', 'http://localhost/Projectx/project_pics/55.jpg', '2014-07-18 04:42:56', 0),
(56, 41, 'Isecure door lock', 0, 'Dayanand Sagar CE', '', 'A door lock that activates on retina scan', 'Miscellaneous', 'http://localhost/Projectx/project_pics/56.jpg', '2014-07-18 06:55:26', 1),
(57, 40, 'Water Toxicity Sensor', 0, 'MSRIT', '', 'Building sensors that detect the level of arsenic in potable water', 'Medical', 'http://localhost/Projectx/project_pics/57.png', '2014-07-23 07:46:20', 1),
(58, 41, 'WEMS', 0, 'Dayanand Sagar CE', '', 'Build wireless controlled switches ', 'Miscellaneous', 'http://localhost/Projectx/project_pics/58.jpg', '2014-07-24 07:50:44', 1),
(64, 47, 'hang glider', 0, '', '', 'hang glider made from carbon fibre', 'Military and Defense', 'http://localhost/Projectx/project_pics/64.jpg', '2014-07-28 18:50:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1=on;0=done',
  PRIMARY KEY (`uid`,`pid`),
  KEY `fk_pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`ts`, `uid`, `pid`, `status`) VALUES
('2014-07-18 04:42:40', 43, 53, 1),
('2014-07-18 06:53:26', 44, 51, 1),
('2014-07-18 06:52:45', 44, 54, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Contact_no` varchar(10) NOT NULL,
  `Sex` varchar(7) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `institute` varchar(40) NOT NULL,
  `Stream` varchar(25) NOT NULL,
  `Year` varchar(7) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `dpurl` varchar(200) NOT NULL,
  PRIMARY KEY (`Uid`),
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Uid`, `Name`, `Password`, `Contact_no`, `Sex`, `emailid`, `institute`, `Stream`, `Year`, `Description`, `dpurl`) VALUES
(1, 'prashanth', '5d7165b6488b6b52e1232f7708ba9c71', '9712340098', '', 'prashanth.tk@gmail.com', 'PESIT', 'CS', '2', 'html,php,sql,javascripts,jquery', 'http://localhost/Projectx/profile_pics/1.png'),
(2, 'Sachit', '30a2e250a8c9cdb984f2b9e8dbe6dea6', '9876543210', '', 'sachit.lite@live.in', '', '', '', '', 'http://localhost/Projectx/images/sil.png'),
(40, 'shiva', '9594f65525228e36a69ea0bfebded5ea', '9945123456', '', 'shiva.deviah@yahoo.com', 'MSRIT', 'ME', '1', 'Worked for Team HAYA,', 'http://localhost/Projectx/profile_pics/40.jpg'),
(41, 'Preeti Singh', '9594f65525228e36a69ea0bfebded5ea', '9876543434', '', 'singh.preeti400@gmail.com', 'Dayanand Sagar CE', 'EC', '3', 'html,css,bootstrap,metro ui', 'http://localhost/Projectx/profile_pics/41.png'),
(42, 'Ashwin', '9594f65525228e36a69ea0bfebded5ea', '8897654123', '', 'ashwin.naresh94@gmail.com', 'PESIT', 'CS', '2', 'ruby,node.js,php, Member in SND labs', 'http://localhost/Projectx/profile_pics/42.jpg'),
(43, 'Aditya', '9594f65525228e36a69ea0bfebded5ea', '8865423233', '', 'adi.skyman@gmail.com', 'RV', 'BT', '4', 'Android app development, ', 'http://localhost/Projectx/profile_pics/43.jpg'),
(44, 'Ramesh', '9594f65525228e36a69ea0bfebded5ea', '9875423456', '', 'ramesh.ab@gmail.com', '', '', '', '', 'http://localhost/Projectx/images/sil.png'),
(47, 'Aarti Selvan', '9594f65525228e36a69ea0bfebded5ea', '', '', 'aartiselvan26@gmail.com', '', '', '', '', 'https://lh5.googleusercontent.com/-Izz9PqUlQaI/AAAAAAAAAAI/AAAAAAAAAI0/dMDAzuGyBtM/photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `works_on`
--

CREATE TABLE IF NOT EXISTS `works_on` (
  `tsw` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1=going on; 0 =false',
  PRIMARY KEY (`uid`,`pid`),
  KEY `fk_wpid` (`pid`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='true=currently working, false=past proj';

--
-- Dumping data for table `works_on`
--

INSERT INTO `works_on` (`tsw`, `uid`, `pid`, `uname`, `status`) VALUES
('2014-07-18 04:12:13', 40, 49, 'shiva', 0),
('2014-07-18 04:14:12', 40, 50, 'shiva', 0),
('2014-07-20 17:30:12', 41, 50, 'preeti', 0),
('2014-07-18 04:17:59', 41, 51, 'preeti', 0),
('2014-07-18 04:19:01', 41, 52, 'preeti', 0),
('2014-07-18 06:55:26', 41, 56, 'preeti', 0),
('2014-07-20 17:30:06', 42, 49, 'Ashwin', 0),
('2014-07-18 04:28:10', 42, 51, 'Ashwin', 0),
('2014-07-18 04:30:23', 42, 52, 'Ashwin', 0),
('2014-07-18 04:26:06', 42, 53, 'Ashwin', 0),
('2014-07-18 04:27:41', 42, 54, 'Ashwin', 0),
('2014-07-18 06:54:15', 43, 52, 'Aditya', 0),
('2014-07-18 04:41:55', 43, 55, 'Aditya', 0),
('2014-07-28 18:50:39', 47, 64, 'Aarti Selvan', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `fk_admu` FOREIGN KEY (`Admin_id`) REFERENCES `user` (`Uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `fk_pid` FOREIGN KEY (`pid`) REFERENCES `project` (`Project_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_uid` FOREIGN KEY (`uid`) REFERENCES `user` (`Uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `works_on`
--
ALTER TABLE `works_on`
  ADD CONSTRAINT `fk_fu` FOREIGN KEY (`status`) REFERENCES `project` (`stat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_wpid` FOREIGN KEY (`pid`) REFERENCES `project` (`Project_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_wuid` FOREIGN KEY (`uid`) REFERENCES `user` (`Uid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

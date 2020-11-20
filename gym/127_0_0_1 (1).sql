-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 18, 2019 at 04:22 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventmanagedb`
--
CREATE DATABASE IF NOT EXISTS `eventmanagedb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `eventmanagedb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pwd`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `CName` varchar(255) NOT NULL,
  `EventType` varchar(255) NOT NULL,
  `Place` varchar(255) NOT NULL,
  `VenueName` varchar(255) NOT NULL,
  `Guest` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Equipment` varchar(255) NOT NULL,
  `FoodType` varchar(255) NOT NULL,
  `Food` varchar(255) NOT NULL,
  `Decoration` varchar(255) NOT NULL,
  `Payment` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `CName`, `EventType`, `Place`, `VenueName`, `Guest`, `Date`, `Equipment`, `FoodType`, `Food`, `Decoration`, `Payment`, `Status`) VALUES
(1, 'abc', 'Marriage', 'Bangalore', 'engagement', '5', '11/12/2019', 'DJ', 'BreakFast,Lunch,Tea and Snacks', 'Veg Only', 'Lighting,Flower,Sitting', '65000', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

DROP TABLE IF EXISTS `card`;
CREATE TABLE IF NOT EXISTS `card` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `CardNo` varchar(255) NOT NULL,
  `CvvNo` varchar(255) NOT NULL,
  `CardHolder` varchar(255) NOT NULL,
  `ValidThru` varchar(255) NOT NULL,
  `ValidUpto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `CardNo`, `CvvNo`, `CardHolder`, `ValidThru`, `ValidUpto`) VALUES
(1, '12345678912345', '5555', 'pallavi', '10/18', '11/50'),
(2, '12345678985496', '5567', 'Kumar', '12/15', '04/22'),
(3, '3495877698328304', '0258', 'Kiran', '09/10', '11/20'),
(4, '6799998912341006', '6558', 'Omkar', '07/16', '10/19');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `CustomerName` varchar(255) NOT NULL,
  `PhoneNo` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `CustomerName`, `PhoneNo`, `emailid`, `Address`, `pass`) VALUES
(1, 'Sanjana', '9480631430', 'admin@gmail.com', 'mohanfiuaf', '99999'),
(2, 'Sumona', '8196226774', 'mydatabasemail1@gmail.com', 'msduwbf', '77777'),
(3, 'abc', '9988776655', 'abc@gmail.com', 'Bangalore', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE IF NOT EXISTS `venue` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `VenueName` varchar(255) NOT NULL,
  `VenueAddress` varchar(255) NOT NULL,
  `VenuePlace` varchar(255) NOT NULL,
  `VenuePhone` varchar(255) NOT NULL,
  `Capacity` varchar(255) NOT NULL,
  `Preferred` varchar(255) NOT NULL,
  `Amount` varchar(255) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `VenueName`, `VenueAddress`, `VenuePlace`, `VenuePhone`, `Capacity`, `Preferred`, `Amount`, `Image`) VALUES
(2, 'engagement', 'Near Mysore', 'Mysore', '9999999990', '1000', 'All', '65000', 'FB_IMG_1486212778856.jpg'),
(3, 'reception', 'Near Bangalore', 'Bangalore', '9999999988', '500', 'Marriage', '12000', 'FB_IMG_1486212746289.jpg');
--
-- Database: `gym`
--
CREATE DATABASE IF NOT EXISTS `gym` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gym`;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`email`) VALUES
('yahsh@g.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `first` varchar(50) DEFAULT NULL,
  `last` varchar(50) DEFAULT NULL,
  `email` varchar(500) NOT NULL,
  `doj` date NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;
--
-- Database: `secure_login`
--
CREATE DATABASE IF NOT EXISTS `secure_login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `secure_login`;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(2, '1394950310'),
(2, '1395431162'),
(2, '1395432481'),
(2, '1395432607'),
(3, '1395432637'),
(2, '1395513130');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `days` varchar(220) DEFAULT '0',
  `present` varchar(220) DEFAULT '0',
  `absent` varchar(220) DEFAULT '0',
  `pect` varchar(220) DEFAULT '0',
  `pic` int(11) DEFAULT '0',
  `picName` mediumtext,
  `paid` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Database: `userinfo`
--
CREATE DATABASE IF NOT EXISTS `userinfo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `userinfo`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_first` varchar(100) NOT NULL,
  `user_last` varchar(100) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `user_uid` varchar(500) NOT NULL,
  `user_pass` varchar(500) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  PRIMARY KEY (`user_uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_first`, `user_last`, `user_email`, `user_uid`, `user_pass`, `user_type`) VALUES
('abc', 'abc', 'abc@gmail.com', 'abc123', '$2y$10$Nq/25UV9m3taTRWdryATEOMDeeC2OvkZSd6ur7Y6cc6dLPk1bf81m', 'admin'),
('yashu', 'gowda', 'y@g.com', 'yashu', '$2y$10$sxRcGJwHez/OIr.EOEcwYObVvryLOqroOI.gvUN4tISORzrPBpMGW', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

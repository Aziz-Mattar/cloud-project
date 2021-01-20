-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 05, 2021 at 09:14 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `financial_data`
--

DROP TABLE IF EXISTS `financial_data`;
CREATE TABLE IF NOT EXISTS `financial_data` (
  `ID` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Semester` int(11) DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `paid_amount` double DEFAULT NULL,
  `Remained_amount` double DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=120171423 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial_data`
--

INSERT INTO `financial_data` (`ID`, `Year`, `Semester`, `total_amount`, `paid_amount`, `Remained_amount`) VALUES
(120171422, 1, 1, 75, 10, 65);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
CREATE TABLE IF NOT EXISTS `grades` (
  `ID` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `course_grade` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`ID`, `year`, `semester`, `course_name`, `course_grade`) VALUES
(120171422, 1, 1, 'Ø¨Ø±Ù…Ø¬Ø© 1', 90);

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

DROP TABLE IF EXISTS `personal_information`;
CREATE TABLE IF NOT EXISTS `personal_information` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Age` date NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `birthday_certificate` varchar(255) NOT NULL,
  `identity_card` varchar(255) NOT NULL,
  `GPA` double DEFAULT NULL,
  `total_Remained` double DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`ID`, `FirstName`, `LastName`, `Email`, `Address`, `City`, `Age`, `Photo`, `birthday_certificate`, `identity_card`, `GPA`, `total_Remained`, `password`) VALUES
(120171422, 'aziz', 'balaha', 'aziz.balaha@gmail.com', 'Der Al-balah', 'Gaza Strip', '1999-12-12', '5.jpg', '5.jpg', '5.jpg', 90, 65, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tmp`
--

DROP TABLE IF EXISTS `tmp`;
CREATE TABLE IF NOT EXISTS `tmp` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Age` date NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `birthday_certificate` varchar(255) NOT NULL,
  `identity_card` varchar(255) NOT NULL,
  `GPA` double DEFAULT NULL,
  `total_Remained` double DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp`
--
DROP TRIGGER IF EXISTS `ins`;
DELIMITER $$
CREATE TRIGGER `ins` AFTER DELETE ON `tmp` FOR EACH ROW INSERT INTO `personal_information` (`ID`, `FirstName`, `LastName`, `Email`, `Address`, `City`, `Age`, `Photo`, `birthday_certificate`, `identity_card`, `password`) VALUES
(old.ID, old.FirstName, old.LastName, old.Email, old.Address, old.City, old.Age, old.Photo, old.birthday_certificate, old.identity_card, old.password)
$$
DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

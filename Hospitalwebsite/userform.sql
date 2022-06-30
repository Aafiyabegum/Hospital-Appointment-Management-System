-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2020 at 06:06 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userform`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `names` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `names`, `password`, `code`, `status`) VALUES
(1, 'admin@gmail.com', 'Admin', '$2y$10$Kk1j9cqEy4dm2goPOqb5Y.J.b0xcjN4tl/4Gkz5KlByokSq7TNO7y', 0, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `appoints`
--

DROP TABLE IF EXISTS `appoints`;
CREATE TABLE IF NOT EXISTS `appoints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Appointment_Date` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Specialist` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `usertable_id` int(11) DEFAULT NULL,
  `app_no` varchar(45) DEFAULT 'NA',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoints`
--

INSERT INTO `appoints` (`id`, `Name`, `Appointment_Date`, `Email`, `Phone`, `Description`, `Specialist`, `active`, `usertable_id`, `app_no`) VALUES
(63, 'Aafiyah', '2020-11-12', 'aafiyah@gmail.com', 770843562, 'Need an Immunologist', 'Prof.Suranjith Seneviratna', 1, 1, '1'),
(64, 'Venba', '2020-11-12', 'venba@gmail.com', 770849865, 'Need an Immunologist', 'Prof.Suranjith Seneviratna', 1, 1, '2'),
(65, 'Sahan', '2020-11-19', 'sahan@gmail.com', 770849875, 'Need a Surgeon', 'Dr. Lalantha Ranasinghe', 1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` text NOT NULL,
  `date_of_uploading` date NOT NULL,
  `date_of_closing` date NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_title`, `date_of_uploading`, `date_of_closing`, `active`) VALUES
(1, 'The Asian Australian Society of Oncologists & Workshop is being held at Colombo  Conference Hall in 5th & 6th November 2020 at the Bandaranaike Memorial International Conference Hall.', '2020-11-04', '2020-11-15', 1),
(2, 'The international Patient Safety Conference(IPSC), Now in its seventh year,  is an annual event to learn from patient safety experts across the world.', '2020-11-17', '2020-12-03', 1),
(3, 'ARS Hospitals presents the Recent Advances in Neuroscience and Orthopedic Conference hoste by Medetarian Conferences Organizing(MCO).', '2020-12-05', '2020-12-15', 1),
(4, 'The Asian Australian Society of Immunologist & Workshop is being held at Colombo  Conference Hall in 7th & 9th November 2020 at the Bandaranaike Memorial International Conference Hall.', '2020-12-07', '2020-12-14', 1),
(5, 'ARS Hospitals presents the Recent Advances in Cardiologic Conference hoste by Medetarian Conferences Organizing(MCO).', '2020-12-19', '2020-12-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

DROP TABLE IF EXISTS `offer`;
CREATE TABLE IF NOT EXISTS `offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `message`, `active`) VALUES
(34, 'Immunologist Mr.Suranjith Seneviratne has 300/= offer from November to December.', 1),
(35, 'Surgeon Mr.lalantha has 200/= offer from November 15th - December 2nd.', 1),
(36, 'Immunologist Mr.Anura weerasinghe has 200/= offer from November 8th to Decmber 24th', 1),
(37, 'Oncologist Mr.Randima has 400/= offer from November 9th to Decmber 25th.', 1),
(38, 'Pediatrician Mr.Hashir Ariff has 300/= offer from November 12th to December 12th.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(1, 'Shoufiya', 'shoufiyabegum@gmail.com', '$2y$10$Db1cTC9ExUjHu6nRK5Xk/eE0evClTjJpSp9/PVrK.jfoSVuF9J6t6', 0, 'verified'),
(2, 'Riz', 'rizkan@rizcreation.com', '$2y$10$H75LBRFnOAEa2NvC.SOSLOcPeYbyav.Q1im3viU/i.vIDzZPBX8ki', 0, 'verified'),
(3, 'Rasmi', 'rasmi@gmail.com', '$2y$10$Sp1L3HEzcfm4201n.D5T8Op.b2WAOB3kuf.n/CmB9qOnW8gaszeTy', 0, 'verified'),
(4, 'Pasmi', 'pasmi@gmail.com', '$2y$10$EgfaiO30kpwaDIzGmx8NGOIrSUONHNJ43QdOd1pFsAFZOMaiftlQy', 0, 'verified'),
(5, 'Aqmaar', 'aqmaar@gmail.com', '$2y$10$rWYMnrZg/yMmbjeM/3JxEes2J2I6CrM1aOeECd4NiubTNae5AzM16', 0, 'verified'),
(6, 'Venba', 'venba@gmail.com', '$2y$10$i569JIs7C.2YyHECa3ECDeOaJDqxgwAgV3z.RJAFNgtFFhQQJyGB2', 0, 'verified'),
(7, 'Aqmaar', 'aqm@gmail.com', '$2y$10$0KysF1ww4O2nrxmZyHBGrO1hnU8xpELbMkfzcNvuDa1ClLWGj98om', 0, 'verified'),
(8, 'Shoufiya', 'shou@gmail.com', '$2y$10$Uton05e3xBC4t7eJNqA.rO7WtEbO2ZevbRSgF/Kn1udSPxQStGo26', 0, 'verified'),
(9, 'Riz', 'riz1@gmail.com', '$2y$10$DxsVRMMPDvQhCvaS80kSa.69bt3bQkznWYkk5Nafhj4X7vnJqs5xW', 818115, 'notverified'),
(10, 'RiZS', 'rizs@gmail.com', '$2y$10$MckxqyGQxkKmABS15ovZh.NOl43abrtMsyznZbcWCI8CdFh9tDlrq', 421930, 'notverified'),
(11, 'Aafiyah', 'aafi@gmail.com', '$2y$10$XR2erlXLMJE0O7Bh98gFcePhu/uDz5vsWBB6XLiUwP9B5yLq4YYYi', 0, 'verified'),
(12, 'Begam', 'begam@gmail.com', '$2y$10$OF76kTR9M1eW1nM1fkSOz.7kZSI4BSt5HotVVAf89yGSkp2KjnTd2', 451986, 'notverified'),
(13, 'Shoufiya', 'shouf@gmail.com', '$2y$10$A3q2zvYhKezLPkKO0V62/O6Vp3U1bmac1KQF5xjhTiJRqCS20Q7Oe', 0, 'verified');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

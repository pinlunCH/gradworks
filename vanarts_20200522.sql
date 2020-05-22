-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2020 at 12:17 PM
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
-- Database: `vanarts`
--

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

DROP TABLE IF EXISTS `img`;
CREATE TABLE IF NOT EXISTS `img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `strName` varchar(255) NOT NULL,
  `workID` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `strName`, `workID`) VALUES
(1, 'harry.jpg', '2'),
(2, 'harry.jpg', '2');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
CREATE TABLE IF NOT EXISTS `programs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `strName` varchar(50) NOT NULL,
  `strShort` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `strName`, `strShort`) VALUES
(1, '2D/3D CHARACTER ANIMATION', '2d3d'),
(2, 'ACTING FOR FILM & TELEVISION', 'acting'),
(3, 'BROADCASTING & ONLINE MEDIA', 'radio'),
(4, 'GAME ART & DESIGN', 'game'),
(5, 'PROFESSIONAL PHOTOGRAPHY', 'photography'),
(6, 'VISUAL EFFECTS FOR FILM & TV', 'vfx'),
(7, 'WEB DEVELOPMENT & INTERACTIVE DESIGN', 'web');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `strName` varchar(30) NOT NULL COMMENT 'graduate or not',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `strName`) VALUES
(1, 'undergraduate'),
(2, 'graduate');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `strName` varchar(30) NOT NULL,
  `nPrograms` mediumint(10) NOT NULL,
  `nStatus` mediumint(9) NOT NULL,
  `strBio` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nStatus` (`nStatus`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `strName`, `nPrograms`, `nStatus`, `strBio`) VALUES
(1, 'maria', 1, 2, ''),
(2, 'Tife', 2, 1, ''),
(3, 'Mana', 3, 2, ''),
(4, 'Ashwin', 4, 1, ''),
(5, 'Pinlun', 5, 2, ''),
(6, 'Price', 6, 1, ''),
(7, 'Negar', 7, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `strName` varchar(20) NOT NULL,
  `strImage` varchar(255) NOT NULL,
  `bStatus` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

DROP TABLE IF EXISTS `works`;
CREATE TABLE IF NOT EXISTS `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `strName` varchar(255) NOT NULL,
  `strCoverImage` varchar(255) NOT NULL,
  `nStudentsId` mediumint(9) NOT NULL,
  `strDetail` mediumtext NOT NULL,
  `nPrograms` mediumint(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `strName`, `strCoverImage`, `nStudentsId`, `strDetail`, `nPrograms`) VALUES
(3, 'blade runner', 'poster1.jpg', 1, 'Now is the winter of our discontent\r\nMade glorious summer by this sun of York;\r\nAnd all the clouds that lour\'d upon our house\r\nIn the deep bosom of the ocean buried.\r\nNow are our brows bound with victorious wreaths;\r\nOur bruised arms hung up for monuments;\r\nOur stern alarums changed to merry meetings,\r\nOur dreadful marches to delightful measures.\r\nGrim-visaged war hath smooth\'d his wrinkled front;\r\nAnd now, instead of mounting barded steeds\r\nTo fright the souls of fearful adversaries,', 1),
(4, 'Moonlight', 'poster4.jpg', 2, 'Now is the winter of our discontent\r\nMade glorious summer by this sun of York;\r\nAnd all the clouds that lour\'d upon our house\r\nIn the deep bosom of the ocean buried.\r\nNow are our brows bound with victorious wreaths;\r\nOur bruised arms hung up for monuments;\r\nOur stern alarums changed to merry meetings,\r\nOur dreadful marches to delightful measures.\r\nGrim-visaged war hath smooth\'d his wrinkled front;\r\nAnd now, instead of mounting barded steeds\r\nTo fright the souls of fearful adversaries,', 2),
(5, 'IO', 'poster2.jpg', 3, 'Now is the winter of our discontent\r\nMade glorious summer by this sun of York;\r\nAnd all the clouds that lour\'d upon our house\r\nIn the deep bosom of the ocean buried.', 3),
(6, 'Spider-Man: Into the Spider-Verse', 'spiderman.jpg', 4, 'Now is the winter of our discontent\r\nMade glorious summer by this sun of York;\r\nAnd all the clouds that lour\'d upon our house\r\nIn the deep bosom of the ocean buried.', 4),
(7, 'baby driver', 'baby.jpeg', 5, 'Now is the winter of our discontent\r\nMade glorious summer by this sun of York;\r\nAnd all the clouds that lour\'d upon our house\r\nIn the deep bosom of the ocean buried.', 5),
(8, 'replicas', 'poster3.jpg', 6, 'Now is the winter of our discontent\r\nMade glorious summer by this sun of York;\r\nAnd all the clouds that lour\'d upon our house\r\nIn the deep bosom of the ocean buried.', 6),
(9, 'avengers:endgame', 'avengers.jpg', 7, 'Now is the winter of our discontent\r\nMade glorious summer by this sun of York;\r\nAnd all the clouds that lour\'d upon our house\r\nIn the deep bosom of the ocean buried.', 7),
(10, 'the grand budapest hotel', 'budapesthotel.jpg', 6, 'somthings', 1),
(11, 'Isle of Dogs', 'dogs.jpg', 6, 'somthings', 1),
(12, 'Alita', '068910016849516.jpg', 7, 'some', 4),
(13, 'Guardians of the Galaxy', 'MOVAB77045__90041.1542107226.jpg', 6, 'dom', 4),
(14, 'jumanji', 'jumanji.jpeg', 4, 'hi', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

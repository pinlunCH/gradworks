-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 22, 2020 at 03:43 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `strName` varchar(255) NOT NULL,
  `workID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `strName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `strName`) VALUES
(1, '2D/3D CHARACTER ANIMATION'),
(2, 'ACTING FOR FILM & TELEVISION'),
(3, 'BROADCASTING & ONLINE MEDIA'),
(4, 'GAME ART & DESIGN'),
(5, 'PROFESSIONAL PHOTOGRAPHY'),
(6, 'VISUAL EFFECTS FOR FILM & TV'),
(7, 'WEB DEVELOPMENT & INTERACTIVE DESIGN');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `strName` varchar(30) NOT NULL COMMENT 'graduate or not'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `strName` varchar(30) NOT NULL,
  `nPrograms` mediumint(10) NOT NULL,
  `nStatus` mediumint(9) NOT NULL,
  `strBio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `strName` varchar(20) NOT NULL,
  `strImage` varchar(255) NOT NULL,
  `bStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `strName` varchar(255) NOT NULL,
  `strCoverImage` varchar(255) NOT NULL,
  `nStudentsId` mediumint(9) NOT NULL,
  `strDetail` mediumtext NOT NULL,
  `nPrograms` mediumint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nStatus` (`nStatus`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

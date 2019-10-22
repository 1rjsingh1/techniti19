-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 05:17 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techniti19`
--

-- --------------------------------------------------------

--
-- Table structure for table `combo`
--

CREATE TABLE `combo` (
  `sid` int(11) NOT NULL,
  `eid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `combo`
--

INSERT INTO `combo` (`sid`, `eid`) VALUES
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(2, 29),
(2, 30),
(3, 31),
(3, 32),
(3, 33),
(4, 34),
(4, 35),
(4, 36),
(5, 37),
(5, 38),
(5, 39),
(5, 40),
(6, 41),
(6, 42),
(6, 43),
(6, 44),
(7, 45),
(7, 46),
(8, 47),
(8, 48),
(8, 49),
(8, 50),
(9, 51),
(9, 52),
(9, 53),
(10, 54),
(10, 55),
(10, 56),
(11, 1),
(11, 2),
(11, 3),
(11, 4),
(11, 5),
(12, 6),
(12, 7),
(12, 8),
(12, 9),
(12, 10),
(13, 11),
(13, 12),
(13, 13),
(14, 14),
(14, 15),
(14, 16),
(15, 18),
(15, 17),
(15, 19),
(15, 23),
(16, 20),
(16, 21),
(16, 22);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eid` int(11) NOT NULL,
  `ename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eid`, `ename`) VALUES
(1, 'Numbery Route'),
(2, 'Smack That'),
(3, 'Arduino Challenge'),
(4, 'Amaze Us'),
(5, 'Technophilla'),
(6, 'Drishya'),
(7, 'Photo Treasure hunt'),
(8, 'Nazar'),
(9, 'Photo Manipulation'),
(10, 'Weekend Diaries'),
(11, 'CS 1.6 War Zone'),
(12, 'FIFA 18'),
(13, 'NFS MOST WANTED'),
(14, 'Refubrish The Moment'),
(15, 'Fix the Glitch'),
(16, 'Movie Cascader'),
(18, 'MUN'),
(17, 'Symposium'),
(19, 'NITJ GATE'),
(20, 'B-Plan'),
(21, 'The Next CEO'),
(22, 'Kya tu Beer Hai?'),
(23, 'Design for Impact'),
(24, 'Techville'),
(25, 'Robo Wars'),
(26, 'uAVs & Drones'),
(27, 'Manoeuvre'),
(28, 'Rocket League'),
(29, 'Micro Robo War'),
(30, 'Tricky Circuits'),
(31, 'Endurance'),
(32, 'Dimensions'),
(33, 'Best Engineer'),
(34, 'Bridge IT'),
(35, 'Survey hunt'),
(36, 'Civil Expo'),
(37, 'Smart TexStyles'),
(38, 'Tax-Ogle'),
(39, 'Patagonia'),
(40, 'Tex-Capes'),
(41, 'Code IT'),
(42, 'Algo-Rythm'),
(43, 'Cyber Hunt'),
(44, 'Web Design'),
(45, 'Bio Entrepreneur'),
(46, 'Gel-Aesthetics'),
(47, 'heat Exchanger'),
(48, 'Chemetrix'),
(49, 'ChemeCar'),
(50, 'Best Out Of Waste'),
(51, 'E-Waste Mackerthon'),
(52, 'Mind the Mind'),
(53, 'Circuit hunt'),
(54, 'Sci-tech'),
(55, 'Biz-Quizzard'),
(56, 'Ace of Space');

-- --------------------------------------------------------

--
-- Table structure for table `groupe`
--

CREATE TABLE `groupe` (
  `eid` int(11) NOT NULL,
  `tname` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupe`
--

INSERT INTO `groupe` (`eid`, `tname`, `email`) VALUES
(52, 'Rj', 'rj@gmail.com'),
(52, 'Rj', 'ashihs@gmail.com'),
(52, 'Rj', 'rj@gmail.com'),
(52, 'Rj', 'rj@gmIK.COM'),
(29, 'as', 'fdfs@sf'),
(29, 'as', 'ff@ff'),
(25, 'ws', 'xdx@c'),
(25, 'ws', 'xe@x'),
(51, 'dc', 'vfvf@fff'),
(51, 'dc', 'cv@c');

-- --------------------------------------------------------

--
-- Table structure for table `ind`
--

CREATE TABLE `ind` (
  `eid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ind`
--

INSERT INTO `ind` (`eid`, `userid`) VALUES
(43, 8),
(43, 1),
(43, 1),
(43, 1);

-- --------------------------------------------------------

--
-- Table structure for table `societies`
--

CREATE TABLE `societies` (
  `sid` int(11) NOT NULL,
  `sname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `societies`
--

INSERT INTO `societies` (`sid`, `sname`) VALUES
(1, 'some'),
(2, 'spice'),
(3, 'ties'),
(4, 'soccer'),
(5, 'texstyles'),
(6, 'opengeest'),
(7, 'sober'),
(8, 'chess'),
(9, 'soece'),
(10, 'quest'),
(11, 'rtist'),
(12, 'netra'),
(13, 'langaming'),
(14, 'movieclub'),
(15, 'Mega Events'),
(16, 'Managerial Events');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `College` varchar(40) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

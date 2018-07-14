-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2018 at 01:50 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bootcamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcomments`
--

CREATE TABLE `tbcomments` (
  `id` int(5) NOT NULL,
  `comment` text,
  `postId` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcomments`
--

INSERT INTO `tbcomments` (`id`, `comment`, `postId`) VALUES
(1, 'ah masa', 1),
(2, 'serius?', 1),
(3, 'bonbin mana', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbposts`
--

CREATE TABLE `tbposts` (
  `id` int(5) NOT NULL,
  `title` text,
  `content` text,
  `createdBy` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbposts`
--

INSERT INTO `tbposts` (`id`, `title`, `content`, `createdBy`) VALUES
(1, 'wanita itu diserang kadal saat mengunjungi kebun binatang\r\n', 'ini contentnya yang wanita diserang di kebun binatang', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(5) NOT NULL,
  `username` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `username`) VALUES
(1, 'Hesa Suryana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcomments`
--
ALTER TABLE `tbcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbposts`
--
ALTER TABLE `tbposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcomments`
--
ALTER TABLE `tbcomments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbposts`
--
ALTER TABLE `tbposts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

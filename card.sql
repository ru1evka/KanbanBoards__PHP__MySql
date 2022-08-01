-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2022 at 07:41 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `card`
--

-- --------------------------------------------------------

--
-- Table structure for table `backlog`
--

CREATE TABLE `backlog` (
  `id` int(11) NOT NULL,
  `data_backlog` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `backlog`
--

INSERT INTO `backlog` (`id`, `data_backlog`) VALUES
(30, 'das'),
(4, 'Отдохнуть');

-- --------------------------------------------------------

--
-- Table structure for table `finished`
--

CREATE TABLE `finished` (
  `id` int(11) NOT NULL,
  `data_finished` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `finished`
--

INSERT INTO `finished` (`id`, `data_finished`) VALUES
(1, 'Сделать уроки'),
(5, 'Покушать'),
(6, 'Собрать рюкзак'),
(7, 'das');

-- --------------------------------------------------------

--
-- Table structure for table `progres`
--

CREATE TABLE `progres` (
  `id` int(11) NOT NULL,
  `data_progres` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progres`
--

INSERT INTO `progres` (`id`, `data_progres`) VALUES
(3, 'Собрать рюкзак'),
(2, 'Покушать'),
(4, 'das');

-- --------------------------------------------------------

--
-- Table structure for table `ready`
--

CREATE TABLE `ready` (
  `id` int(11) NOT NULL,
  `data_ready` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ready`
--

INSERT INTO `ready` (`id`, `data_ready`) VALUES
(6, 'das'),
(3, 'Собрать рюкзак');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backlog`
--
ALTER TABLE `backlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finished`
--
ALTER TABLE `finished`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progres`
--
ALTER TABLE `progres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ready`
--
ALTER TABLE `ready`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backlog`
--
ALTER TABLE `backlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `finished`
--
ALTER TABLE `finished`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `progres`
--
ALTER TABLE `progres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ready`
--
ALTER TABLE `ready`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

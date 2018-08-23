-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2018 at 07:24 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kushalgram`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `form` int(11) NOT NULL,
  `village` text NOT NULL,
  `name` text NOT NULL,
  `parent` text NOT NULL,
  `member` int(11) NOT NULL,
  `address` text NOT NULL,
  `mobile` text NOT NULL,
  `date` text NOT NULL,
  `gender` text NOT NULL,
  `education` text NOT NULL,
  `mnrega` text NOT NULL,
  `aadhar` text NOT NULL,
  `ration` text NOT NULL,
  `shg` text NOT NULL,
  `primaryq` text NOT NULL,
  `secondaryq` text NOT NULL,
  `tertiaryq` text NOT NULL,
  `activity` text NOT NULL,
  `place` text NOT NULL,
  `problem` text NOT NULL,
  `earning` int(11) NOT NULL,
  `profit` text NOT NULL,
  `dream` text NOT NULL,
  `train` text NOT NULL,
  `previous` text NOT NULL,
  `advanced` text NOT NULL,
  `help` text NOT NULL,
  `time` text NOT NULL,
  `period` text NOT NULL,
  `distance` text NOT NULL,
  `intend` text NOT NULL,
  `rank1` text NOT NULL,
  `rank2` text NOT NULL,
  `rank3` text NOT NULL,
  `worked1` text NOT NULL,
  `learn1` text NOT NULL,
  `tutor1` text NOT NULL,
  `worked2` text NOT NULL,
  `learn2` text NOT NULL,
  `tutor2` text NOT NULL,
  `worked3` text NOT NULL,
  `learn3` text NOT NULL,
  `tutor3` text NOT NULL,
  `level1` int(11) NOT NULL,
  `level2` int(11) NOT NULL,
  `level3` int(11) NOT NULL,
  `D1` tinyint(1) NOT NULL,
  `D2` tinyint(1) NOT NULL,
  `D3` tinyint(1) NOT NULL,
  `D4` tinyint(1) NOT NULL,
  `D5` tinyint(1) NOT NULL,
  `D6` tinyint(1) NOT NULL,
  `D7` tinyint(1) NOT NULL,
  `A1` tinyint(1) NOT NULL,
  `A2` tinyint(1) NOT NULL,
  `A3` tinyint(1) NOT NULL,
  `A4` tinyint(1) NOT NULL,
  `A5` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

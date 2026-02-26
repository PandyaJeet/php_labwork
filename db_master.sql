-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2026 at 10:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_master`
--

CREATE TABLE `db_master` (
  `username` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_master`
--

INSERT INTO `db_master` (`username`, `name`, `email`, `mobile`, `password`) VALUES
('dhruvpatel27106', 'DHRUV PATEL', 'dhruvpatel27106@gmai', 2147483647, '1937'),
('faaaaa', 'faaaaaaq', 'faaaaaaa', 183718391, ''),
('jeet', 'jeetpandya', 'jsfnfn', 82491242, '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_master`
--
ALTER TABLE `db_master`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

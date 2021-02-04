-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 05:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrationform_inicio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_issue` varchar(100) NOT NULL,
  `contact_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contact_number`, `contact_email`, `contact_issue`, `contact_description`) VALUES
(2, '8879284770', 'ndnigelkyle@gmail.com', '122222', '111111'),
(3, '4565443333', 'rajan.parakh@gmail.com', '122222', '12121');

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE `discussions` (
  `id` int(11) NOT NULL,
  `discussion_name` varchar(50) NOT NULL,
  `discussion_date` int(8) NOT NULL,
  `discussion_time` int(6) NOT NULL,
  `discussion_description` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`id`, `discussion_name`, `discussion_date`, `discussion_time`, `discussion_description`) VALUES
(1, '', 0, 0, 0),
(2, 'fdfdfdfdfdf', 2222, 14, 0),
(3, 'ddfdf', 2222, 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(20) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time(6) NOT NULL,
  `event_location` varchar(50) NOT NULL,
  `event_description` varchar(200) NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_date`, `event_time`, `event_location`, `event_description`, `user_id`) VALUES
(1, 'Hello', '3333-03-01', '14:22:00.000000', 'Arlignton', 'sdsdsdsd', 0),
(2, 'Garba', '3333-02-01', '15:33:00.000000', 'Arlignton', 'sdsdsdsd', 0),
(4, '', '0000-00-00', '00:00:00.000000', '', '', 0),
(5, 'Manu', '1111-02-21', '12:22:00.000000', 'India', 'Theres always a manu around the corner', 0),
(6, 'vratant', '1111-02-22', '14:11:00.000000', 'Oman', 'wqwwqqw', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `country` varchar(100) NOT NULL,
  `vkey` varchar(45) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `createdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `number`, `country`, `vkey`, `verified`, `createdate`) VALUES
(36, 'admin', 'admin@gmail.com', '1234', '8879284770', 'India', '', 0, '2020-04-14 00:54:39.802586'),
(37, 'Nigel Dsouza', 'nigel10122@gmail.com', '1234', '8879284770', 'India', '', 0, '2020-04-14 01:44:02.083274');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `subscribe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `subscribe`) VALUES
(3, 'ndnigelkyle@gmail.com'),
(4, 'rajan.parakh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_email` varchar(50) NOT NULL,
  `team_number` varchar(10) NOT NULL,
  `team_country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_name`, `team_email`, `team_number`, `team_country`) VALUES
(2, 'Nigel', 'ndnigelkyle@gmail.com', '8879284770', 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `FOREIGN` (`user_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 08:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dnb`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `regno` varchar(15) NOT NULL,
  `name` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`regno`, `name`, `date`, `title`, `category`, `details`) VALUES
('', 'sdftghj', '2023-07-12', 'sxdcfvgbh', 'sdxcfvgbh', 'zsxdcfvgbhn'),
('', 'asdfg', '2023-07-15', 'sdfg', 'asdfg', 'sdfg'),
('', 'bhagavath', '2023-07-17', 'qwertyhu', 'awsedrftghj', 'asdfghjkl;'),
('', 'bhagavath', '2023-07-20', 'bhaga', 'bhag', 'bhag'),
('21B91A6203', 'Jai Sri Ram', '2023-02-11', 'Jai Sri Ram Test Shiva', 'Jai Sri Ram Test Shiva', 'Jai Sri Ram Test Shiva'),
('21B91A6206', 'Sai Praveen', '2023-07-31', 'Jai Sri Ram', 'Studentq', 'Rama Rama Ragu Rama'),
('21B91A6207', 'Sri Rama', '2003-10-21', 'Jai Sri Ram', 'Shiva', 'Ohm namo Shivaya');

-- --------------------------------------------------------

--
-- Table structure for table `birthday`
--

CREATE TABLE `birthday` (
  `reg_no` varchar(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `birthday`
--

INSERT INTO `birthday` (`reg_no`, `name`, `dob`, `photo`) VALUES
('21B91A6202', 'Rama', '2003-08-31', 'uploads/Krishna1.jpeg'),
('21B91A6203', 'Bhagavath', '2003-11-21', 'uploads/'),
('21B91A6205', 'vavavava', '21-11-2003', '64c6dbc192183_Annaya.jpg'),
('21B91A6206', 'Sai Praveen', '21-11-2003', 'saipraveen.jpeg'),
('21B91A6207', 'Purna', '21-11-2003', 'saipraveen1.jpeg'),
('21B91A6212', 'Jai Sri Ram Test Shiva', '2003-07-31', '64c71523312a3_Annaya.jpg'),
('21B91A6213', 'Jajaja', '2000-08-31', '64c71ad8040f3_sai_Praveen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `flashnews`
--

CREATE TABLE `flashnews` (
  `id` int(4) NOT NULL,
  `flash` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flashnews`
--

INSERT INTO `flashnews` (`id`, `flash`) VALUES
(1, 'wert'),
(2, 'sdfghjk'),
(3, 'bhagavath\r\n'),
(4, 'puri'),
(5, 'bhagavath'),
(6, 'Hi'),
(7, 'hii'),
(8, 'Hlo'),
(9, 'hi\r\n'),
(10, 'hlo\r\n'),
(11, 'Bhagavath'),
(12, 'shfkjgHBDSVKFLuw;iakvshbkdgyefK;UCHKSJAHBDkaegfekquv;j bhkFGCU;KJVW HFGKjwbv hjfgw;ckajsgvwaklhsc'),
(13, 'Hello\r\n'),
(14, 'Jai Sri Ram Jai Jai Sri Ram'),
(15, 'Shiva Bhavani'),
(16, 'Ohm Namo Shiva'),
(17, 'Jai Jai Janaki Rama'),
(18, 'Flash News Shiva'),
(19, 'Jai Sri Ram Test Shiva');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(4) NOT NULL,
  `date` date NOT NULL,
  `quote` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `date`, `quote`) VALUES
(1, '0000-00-00', 'heloo \r\n'),
(2, '0000-00-00', 'hi every on \r\n'),
(3, '0000-00-00', 'Jai Sri Ram'),
(4, '0000-00-00', 'how is this'),
(5, '0000-00-00', 'what'),
(6, '0000-00-00', 'submit'),
(7, '0000-00-00', 'Jia Jai Jai Jai Jai Jai Jai Jai'),
(8, '0000-00-00', 'Jai Sri Ram Test Shiva');

-- --------------------------------------------------------

--
-- Table structure for table `wishes`
--

CREATE TABLE `wishes` (
  `std_id` varchar(15) NOT NULL,
  `to_std_id` varchar(15) NOT NULL,
  `wish` varchar(50) NOT NULL,
  `time` time NOT NULL DEFAULT current_timestamp(),
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishes`
--

INSERT INTO `wishes` (`std_id`, `to_std_id`, `wish`, `time`, `date`) VALUES
('21B91A', '21B91A6212', 'Si Ram', '08:12:51', '2023-07-31'),
('21B91A6205', '21B91A6206', 'I Love Amma', '10:11:12', '2023-07-22'),
('21B91A6206', '21B91A6212', 'Happy Birthday Shiva', '08:13:45', '2023-07-31'),
('21B91A6207', '21B91A6206', 'I Love Amma', '10:11:12', '2023-07-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`regno`,`date`);

--
-- Indexes for table `birthday`
--
ALTER TABLE `birthday`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `flashnews`
--
ALTER TABLE `flashnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishes`
--
ALTER TABLE `wishes`
  ADD PRIMARY KEY (`std_id`,`to_std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flashnews`
--
ALTER TABLE `flashnews`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

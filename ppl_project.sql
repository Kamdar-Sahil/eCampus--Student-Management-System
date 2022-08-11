-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 06:02 PM
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
-- Database: `ppl_project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `fyexams`
--

CREATE TABLE `fyexams` (
  `id` int(100) NOT NULL,
  `name` varchar(10) NOT NULL,
  `roll` int(9) NOT NULL,
  `mid_PPS` int(11) NOT NULL,
  `mid_ACH` int(11) NOT NULL,
  `end_PPS` int(11) NOT NULL,
  `end_ACH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fyexams`
--

INSERT INTO `fyexams` (`id`, `name`, `roll`, `mid_PPS`, `mid_ACH`, `end_PPS`, `end_ACH`) VALUES
(1, 'sahil', 112003120, 45, 46, 47, 48);

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` int(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `duration` time NOT NULL,
  `time` date NOT NULL,
  `pass` varchar(10) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `year`, `topic`, `duration`, `time`, `pass`, `url`) VALUES
(1, 'Second Year', '', '00:00:00', '2022-08-11', '', ''),
(2, 'Second Year', 'ppl', '00:00:00', '2022-08-11', '12345', ''),
(3, 'Second Year', 'ppl', '00:00:00', '0000-00-00', '1234', ''),
(4, 'Second Year', 'ppl', '00:00:00', '0000-00-00', '1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `role`, `name`) VALUES
(1, 'sahil', '12345', 'student', 'sahil'),
(2, 'prasad', '12345', 'student', 'prasad'),
(3, 'aman', '1234', 'teacher', 'aman');

-- --------------------------------------------------------

--
-- Table structure for table `record_student`
--

CREATE TABLE `record_student` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `roll` int(9) NOT NULL,
  `year` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record_student`
--

INSERT INTO `record_student` (`id`, `name`, `gender`, `email`, `contact_number`, `dob`, `address`, `roll`, `year`, `branch`, `password`) VALUES
(1, 'sahil', 'Male', 'sahilkamdar.ssk1@gmail.com', '7249724902', '2002-05-07', 'Lautr', 112003120, 'First Year', 'Computer', '12345'),
(2, 'prasad', 'Male', 'prasad@gmail.com', '7894561234', '2002-05-29', 'Latur', 112003027, 'Second Year', 'Computer', '12345'),
(3, 'nisarg', 'Male', 'nisarg@gmail.com', '7415296355', '2002-02-13', 'Pune', 112003127, 'Third Year', 'Information Technology', '12345'),
(4, 'bhushan', 'Male', 'bhushan@gmail.com', '7418529637', '2002-06-05', 'pune', 112003070, 'Second Year', 'Information Technology', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `syexams`
--

CREATE TABLE `syexams` (
  `id` int(100) NOT NULL,
  `name` varchar(10) NOT NULL,
  `roll` int(9) NOT NULL,
  `mid_PPL` int(11) NOT NULL,
  `mid_DSA` int(11) NOT NULL,
  `end_PPL` int(11) NOT NULL,
  `end_DSA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syexams`
--

INSERT INTO `syexams` (`id`, `name`, `roll`, `mid_PPL`, `mid_DSA`, `end_PPL`, `end_DSA`) VALUES
(1, 'prasad', 112003027, 41, 42, 43, 44),
(2, 'bhushan', 112003070, 46, 48, 50, 49);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fyexams`
--
ALTER TABLE `fyexams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record_student`
--
ALTER TABLE `record_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING HASH;

--
-- Indexes for table `syexams`
--
ALTER TABLE `syexams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fyexams`
--
ALTER TABLE `fyexams`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `record_student`
--
ALTER TABLE `record_student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `syexams`
--
ALTER TABLE `syexams`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

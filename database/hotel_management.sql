-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 12:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `birthdate` date NOT NULL,
  `adminname` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`admin_id`, `first_name`, `last_name`, `contact`, `birthdate`, `adminname`, `password`) VALUES
(1, 'Pinaki', 'Jayakar', 9930125372, '2001-01-15', 'pjaya', '1911039'),
(2, 'Priyal', 'Babel', 8976514635, '2001-05-28', 'pbab', '1911041'),
(3, 'Hinal', 'Pujara', 8779369930, '1999-12-26', 'hpuja', '1911042');

-- --------------------------------------------------------

--
-- Table structure for table `booking_data`
--

CREATE TABLE `booking_data` (
  `date` date DEFAULT current_timestamp(),
  `booking_id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `room_type` varchar(10) NOT NULL,
  `no_of_rooms` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_data`
--

INSERT INTO `booking_data` (`date`, `booking_id`, `email`, `checkin`, `checkout`, `room_type`, `no_of_rooms`, `price`) VALUES
('2021-04-06', 1, 'katie@gmail.com', '2021-03-02', '2021-03-06', 'Deluxe', 1, 0),
('2021-04-20', 2, 'katie@gmail.com', '2021-03-24', '2021-03-28', 'Deluxe', 3, 0),
('2021-04-22', 3, 'katie@gmail.com', '2021-04-21', '2021-04-29', 'Luxury', 1, 0),
(NULL, 11, 'katie@gmail.com', '2021-05-03', '2021-05-07', 'Deluxe', 2, 0),
(NULL, 12, 'katie@gmail.com', '2021-03-29', '2021-03-31', 'Luxury', 1, 0),
(NULL, 14, 'katie@gmail.com', '2021-04-02', '2021-04-04', 'Deluxe', 1, 0),
(NULL, 21, '', '2021-04-12', '2021-04-14', 'Luxury', 1, 0),
(NULL, 22, '', '2021-04-11', '2021-04-13', 'Luxury', 3, 0),
(NULL, 36, '', '2021-04-20', '2021-04-22', 'Deluxe', 1, 0),
(NULL, 37, '', '2021-04-17', '2021-04-18', 'Luxury', 2, 0),
(NULL, 38, '', '2021-04-12', '2021-04-14', 'Deluxe', 1, 0),
(NULL, 39, '', '2021-04-19', '2021-04-20', 'Premium', 2, 15000),
(NULL, 40, 'pinaki@kjsce.edu', '2021-04-22', '2021-04-20', 'Deluxe', 1, 10000),
('2021-04-15', 42, 'joannareeves@gmail.c', '2021-04-29', '2021-04-30', 'Luxury', 1, 15000),
('2021-04-15', 43, 'joannareeves@gmail.c', '2021-04-29', '2021-04-30', 'Luxury', 1, 15000),
('2021-04-16', 44, 'rainejackson@gmail.c', '2021-04-03', '2021-04-06', 'Deluxe', 2, 20000),
('2021-04-17', 45, 'katie@gmail.com', '2021-04-05', '2021-04-06', 'Deluxe', 2, 20000),
('2021-04-17', 46, 'katie@gmail.com', '2021-04-05', '2021-04-06', 'Deluxe', 2, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `booking_date`
--

CREATE TABLE `booking_date` (
  `no` int(3) NOT NULL,
  `date_of_booking` date NOT NULL,
  `premium_availability` int(11) NOT NULL,
  `deluxe_availability` int(11) NOT NULL,
  `luxury_availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_date`
--

INSERT INTO `booking_date` (`no`, `date_of_booking`, `premium_availability`, `deluxe_availability`, `luxury_availability`) VALUES
(1, '2021-04-01', 10, 9, 10),
(2, '2021-04-02', 10, 9, 10),
(3, '2021-04-03', 10, 7, 10),
(4, '2021-04-04', 10, 7, 10),
(5, '2021-04-05', 10, 3, 10),
(6, '2021-04-06', 10, 3, 10),
(7, '2021-04-07', 10, 9, 10),
(8, '2021-04-08', 10, 9, 10),
(9, '2021-04-09', 10, 9, 10),
(10, '2021-04-10', 10, 9, 10),
(11, '2021-04-11', 10, 9, 10),
(12, '2021-04-12', 10, 8, 9),
(13, '2021-04-13', 10, 8, 9),
(14, '2021-04-14', 10, 8, 9),
(15, '2021-04-15', 10, 9, 10),
(16, '2021-04-16', 10, 9, 10),
(17, '2021-04-17', 10, 9, 8),
(18, '2021-04-18', 10, 9, 8),
(19, '2021-04-19', 8, 9, 10),
(20, '2021-04-20', 8, 8, 9),
(21, '2021-04-21', 10, 8, 9),
(22, '2021-04-22', 10, 8, 9),
(23, '2021-04-23', 10, 9, 10),
(24, '2021-04-24', 10, 9, 10),
(25, '2021-04-25', 10, 9, 10),
(27, '2021-04-27', 10, 9, 10),
(28, '2021-04-28', 10, 9, 10),
(29, '2021-04-29', 10, 9, 7),
(30, '2021-04-30', 10, 9, 7);

-- --------------------------------------------------------

--
-- Table structure for table `enquire`
--

CREATE TABLE `enquire` (
  `Sr_No` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `city` varchar(15) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquire`
--

INSERT INTO `enquire` (`Sr_No`, `firstname`, `lastname`, `email`, `city`, `message`) VALUES
(1, 'pinaki', 'jayakar', 'pjayakar01@gmail.com', 'Mumbai', 'Great page there!');

-- --------------------------------------------------------

--
-- Table structure for table `inclusions`
--

CREATE TABLE `inclusions` (
  `room_type` varchar(10) NOT NULL,
  `AC` tinyint(4) NOT NULL,
  `breakfast` tinyint(4) NOT NULL,
  `tv` tinyint(4) NOT NULL,
  `mini_fridge` tinyint(4) NOT NULL,
  `coffee_machine` tinyint(4) NOT NULL,
  `hair_dryer` tinyint(4) NOT NULL,
  `wifi` tinyint(4) NOT NULL,
  `electronic_safe` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inclusions`
--

INSERT INTO `inclusions` (`room_type`, `AC`, `breakfast`, `tv`, `mini_fridge`, `coffee_machine`, `hair_dryer`, `wifi`, `electronic_safe`) VALUES
('Deluxe', 1, 0, 1, 0, 0, 1, 1, 0),
('Premium', 1, 1, 1, 0, 1, 1, 1, 0),
('Luxury', 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `occupancy`
--

CREATE TABLE `occupancy` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `ccn` varchar(16) NOT NULL,
  `room_number` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `room_type` varchar(15) NOT NULL,
  `number_of_rooms` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_type` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `capacity` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `type_of_bed` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_contact` bigint(10) NOT NULL,
  `user_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`first_name`, `last_name`, `email`, `user_contact`, `user_password`) VALUES
('Kate', 'Hudson', 'katie@gmail.com', 8723012345, '123@katie'),
('pinaki', 'jayakar', 'pinaki.j@somaiya.edu', 8723012345, 'dkac'),
('pinaki', 'jayakar', 'pinaki.j@somaiya.edu', 8723012345, 'PINAKI'),
('pinaki', '', '', 0, ''),
('pinaki', 'jayakar', 'pjayakar01@gmail.com', 8723012345, 'Pinaki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`adminname`);

--
-- Indexes for table `booking_data`
--
ALTER TABLE `booking_data`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `booking_date`
--
ALTER TABLE `booking_date`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `enquire`
--
ALTER TABLE `enquire`
  ADD PRIMARY KEY (`Sr_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking_data`
--
ALTER TABLE `booking_data`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `booking_date`
--
ALTER TABLE `booking_date`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `enquire`
--
ALTER TABLE `enquire`
  MODIFY `Sr_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

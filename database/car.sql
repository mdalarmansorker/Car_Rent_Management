-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 03:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted_users`
--

CREATE TABLE `accepted_users` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(50) DEFAULT NULL,
  `u_phone` varchar(50) DEFAULT NULL,
  `u_order` varchar(50) DEFAULT NULL,
  `start_from` varchar(50) DEFAULT NULL,
  `stop_to` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `notes` varchar(200) DEFAULT NULL,
  `curr_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accepted_users`
--

INSERT INTO `accepted_users` (`u_id`, `u_fname`, `u_phone`, `u_order`, `start_from`, `stop_to`, `type`, `notes`, `curr_date`) VALUES
(29, 'Rayhan', '01744444444', '1 Car 0 Micro 0 Ambulance ', 'Rangpur', 'Dhaka', 'Non AC', '', '2021-12-05'),
(38, 'ali', '01444444444', '0 Car 0 Micro 0 Ambulance ', 'Rangpur', 'Dhaka', 'Non AC', '', '2021-12-05'),
(43, 'Ali', '01444444444', '1 Car 0 Micro 0 Ambulance ', 'Rangpur', 'Dhaka', 'Non AC', '', '2021-12-05'),
(46, 'Ali Arman', '01774406256', '1 Car 0 Micro 0 Ambulance ', 'Rangpur', 'Dhaka', 'Non AC', '', '2021-12-05'),
(47, 'Arman', '01774406256', '1 Car 0 Micro 0 Ambulance ', 'Rangpur', 'Dhaka', 'Non AC', '', '2021-12-05'),
(53, 'Ali Arman', '01777777777', '0 Car 0 Micro 0 Ambulance ', 'Rangpur', 'Dhaka', 'Non AC', '', '2021-12-05'),
(58, 'Ali Arman', '01774406256', '1 Car 0 Micro 0 Ambulance ', 'Rangpur', 'Dhaka', 'Non AC', '', '2021-12-05'),
(59, 'Ali Arman', '00000000555', '1 Car 0 Micro 0 Ambulance ', 'Rangpur', 'Dhaka', 'Non AC', '', '2021-12-05'),
(62, 'shaikat', '01773433173', '1 Car 1 Micro 1 Ambulance ', 'Rangpur', 'Dhaka', 'AC', 'wdssd', '2021-12-06'),
(64, 'Akbor', '01111111111', '0 Car 0 Micro 0 Ambulance ', 'Rangpur', 'Dhaka', 'Non AC', '', '2021-12-06'),
(66, 'defsdf', '01236987452', '0 Car 0 Micro 0 Ambulance ', 'Rangpur', 'Dhaka', 'Non AC', '', '2021-12-06'),
(72, 'sdsd', '01236974125', '0 Car 0 Micro 0 Ambulance ', 'Rangpur', 'Dhaka', 'Non AC', '', '2021-12-06'),
(78, 'Jabet', '01788888888', '0 Car 1 Micro 0 Ambulance ', 'Rangpur', 'Dhaka', 'Non AC', '', '2021-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(100) NOT NULL DEFAULT 'NOT NULL',
  `Email` varchar(100) NOT NULL DEFAULT 'NOT NULL',
  `Password` varchar(100) NOT NULL DEFAULT 'NOT NULL',
  `Phone` varchar(20) NOT NULL,
  `Division` varchar(20) NOT NULL,
  `Gender` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Email`, `Password`, `Phone`, `Division`, `Gender`) VALUES
('Monisha Bakhsi', 'cse.200101055@gmail.com', 'monisha', '01700000000', 'Rangpur', 'Female'),
('Wahid Raza', 'cse.200101063@gmail.com', 'wahid', '01712121212', 'Khulna', 'Male'),
('Rayhan Islam Ripto', 'cse.200101099@gmail.com', 'rayhan', '01710431428', 'Rangpur', 'Male'),
('MD Al Arman Sorker', 'mdalarmansorker@gmail.com', 'password', '01723408603', 'Rangpur', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Journey_from` varchar(100) DEFAULT NULL,
  `Journey_to` varchar(100) DEFAULT NULL,
  `Car_size` int(11) DEFAULT NULL,
  `Date_time` date DEFAULT NULL,
  `type` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `id` int(11) NOT NULL,
  `CDate` date DEFAULT NULL,
  `Reason` varchar(100) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`id`, `CDate`, `Reason`, `Price`) VALUES
(3, '2021-12-06', 'AC gas', 1000),
(4, '2021-12-06', 'AC Filter', 250),
(5, '2021-12-07', 'Light', 2000),
(6, '2021-12-07', 'Tire change', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `shedule_info`
--

CREATE TABLE `shedule_info` (
  `sh_number` int(11) NOT NULL,
  `ordered` varchar(50) DEFAULT NULL,
  `sh_date` varchar(50) DEFAULT NULL,
  `u_id_i` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` text DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shedule_info`
--

INSERT INTO `shedule_info` (`sh_number`, `ordered`, `sh_date`, `u_id_i`, `price`, `status`) VALUES
(8, '1 Car 0 Micro 0 Ambulance ', '2021-12-06', 29, 4000, 'Done'),
(9, '1 Car 0 Micro 0 Ambulance ', '2021-12-07', 58, NULL, 'Done'),
(10, '1 Car 0 Micro 0 Ambulance ', '2021-12-06', 43, 6000, 'Done'),
(11, '1 Car 0 Micro 0 Ambulance ', '2021-12-06', 46, 5500, 'Pending'),
(12, '0 Car 0 Micro 0 Ambulance ', '2021-12-06', 38, NULL, 'Done'),
(14, '1 Car 0 Micro 0 Ambulance ', '2021-12-06', 59, 30000, 'Done'),
(15, '0 Car 0 Micro 0 Ambulance ', '2021-12-24', 72, NULL, 'Pending'),
(16, '1 Car 0 Micro 0 Ambulance ', '2021-12-06', 47, 10000, 'Pending'),
(17, '0 Car 0 Micro 0 Ambulance ', '2021-12-06', 53, 20000, 'Pending'),
(18, '1 Car 1 Micro 1 Ambulance ', '2021-12-26', 62, NULL, 'Pending'),
(19, '0 Car 0 Micro 0 Ambulance ', '2021-12-23', 64, NULL, 'Pending'),
(20, '0 Car 0 Micro 0 Ambulance ', '2021-12-30', 66, NULL, 'Pending'),
(21, '0 Car 1 Micro 0 Ambulance ', '2021-12-13', 78, 50000, 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `firstName` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `number` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_data`
--

CREATE TABLE `users_data` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(50) DEFAULT NULL,
  `u_phone` varchar(20) DEFAULT NULL,
  `u_order` varchar(50) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `start_from` varchar(30) DEFAULT NULL,
  `stop_to` varchar(30) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `notes` varchar(500) DEFAULT NULL,
  `curr_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_data`
--

INSERT INTO `users_data` (`u_id`, `u_fname`, `u_phone`, `u_order`, `order_date`, `start_from`, `stop_to`, `type`, `notes`, `curr_date`) VALUES
(75, 'Labid', '01777777777', '1 Car 0 Micro 0 Ambulance ', '2021-12-08', 'Rangpur', 'Dhaka', 'Non AC', '', '2021-12-07'),
(76, 'Sunvi', '01999999999', '0 Car 0 Micro 1 Ambulance ', '2021-12-28', 'Rangpur', 'Dhaka', 'Non AC', '', '2021-12-07'),
(77, 'Kabir', '01666666666', '0 Car 0 Micro 0 Ambulance ', '2021-12-16', 'Rangpur', 'Dhaka', 'Non AC', 'Hello This i need', '2021-12-07'),
(79, 'MD AL ARMAN SORKER', '01723408603', '1 Car 0 Micro 0 Ambulance ', '2021-12-16', 'Rangpur', 'Dhaka', 'AC', 'I need a car on 16 December.', '2021-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_info`
--

CREATE TABLE `vehicle_info` (
  `id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `model_name` varchar(30) DEFAULT NULL,
  `lisence_info` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_info`
--

INSERT INTO `vehicle_info` (`id`, `type`, `model_name`, `lisence_info`) VALUES
(101, 1, 'Car One', 'lisenceOfCar01'),
(102, 1, 'Car two', 'lisenceOfCar02'),
(103, 1, 'Car three', 'lisenceOfCar03'),
(104, 2, 'Micro One', 'lisenceOfMicro01'),
(105, 2, 'Micro Two', 'lisenceOfMicro02'),
(106, 2, 'Micro Three', 'lisenceOfMicro03'),
(107, 3, 'Ambulance One', 'lisenceOfAmbulence01'),
(108, 3, 'Ambulance Two', 'lisenceOfAmbulence02'),
(109, 3, 'Ambulance Three', 'lisenceOfAmbulence03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepted_users`
--
ALTER TABLE `accepted_users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shedule_info`
--
ALTER TABLE `shedule_info`
  ADD PRIMARY KEY (`sh_number`);

--
-- Indexes for table `users_data`
--
ALTER TABLE `users_data`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cost`
--
ALTER TABLE `cost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shedule_info`
--
ALTER TABLE `shedule_info`
  MODIFY `sh_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users_data`
--
ALTER TABLE `users_data`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

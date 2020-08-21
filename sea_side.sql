-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 07:34 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sea_side`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`booking_id` int(200) NOT NULL,
  `total_adult` int(50) NOT NULL,
  `total_children` int(50) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `special_requirement` text NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `total_amount` double DEFAULT NULL,
  `offer` double NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone_no` varchar(30) NOT NULL,
  `add_line1` varchar(100) NOT NULL,
  `add_line2` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `postcode` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `total_adult`, `total_children`, `checkin_date`, `checkout_date`, `special_requirement`, `payment_status`, `total_amount`, `offer`, `booking_date`, `first_name`, `last_name`, `email`, `telephone_no`, `add_line1`, `add_line2`, `city`, `state`, `postcode`, `country`) VALUES
(145, 2, 0, '2020-08-01', '2020-08-05', 'A/C, Wifi ', 'pending', 1200, 180, '2020-08-01 16:25:34', 'Pium', 'Karunasena', 'pium.karunasena@gmail.com', '+94 75 890 4704', 'Madurupitiya', 'Algama', 'Algama', 'Sabaragamuwa', '71607', 'Sri Lanka');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
`room_id` int(255) NOT NULL,
  `total_room` int(255) NOT NULL,
  `capacity` int(255) DEFAULT NULL,
  `size` varchar(30) DEFAULT NULL,
  `bed` varchar(30) DEFAULT NULL,
  `room_name` varchar(50) NOT NULL,
  `descriptions` text,
  `rate` double NOT NULL,
  `imgpath` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `total_room`, `capacity`, `size`, `bed`, `room_name`, `descriptions`, `rate`, `imgpath`) VALUES
(1, 5, 2, '10 sqft', 'Double Bed', 'Double Room', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 199, 'img/room/room-1.jpg'),
(2, 5, 2, '15 sqft', 'Double Bed', 'Premium King Room', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 300, 'img/room/room-2.jpg'),
(3, 5, 2, '10 sqft', 'Double Bed', 'Deluxe Room', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 195, 'img/room/room-3.jpg'),
(4, 5, 5, '10 sqft', 'King Size', 'Family Room', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 400, 'img/room/room-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE IF NOT EXISTS `roombook` (
  `booking_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `totalroombook` int(11) NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`booking_id`, `room_id`, `totalroombook`, `id`) VALUES
(145, 2, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'Admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
 ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
MODIFY `booking_id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
MODIFY `room_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

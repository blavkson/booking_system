-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 03:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beauty_salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appoint_num` int(11) NOT NULL,
  `service_code` varchar(255) NOT NULL,
  `cust_num` int(11) NOT NULL,
  `appoint_time` time NOT NULL,
  `appoint_date` date NOT NULL,
  `payment_type` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appoint_num`, `service_code`, `cust_num`, `appoint_time`, `appoint_date`, `payment_type`) VALUES
(7, 'H105', 678911, '08:00:00', '2022-06-16', 'P'),
(8, 'H105', 678911, '10:00:00', '2022-06-16', 'M'),
(9, 'H105', 678913, '12:00:00', '2022-06-16', 'V'),
(10, 'H105', 678914, '10:00:00', '2022-06-18', 'D'),
(11, 'H105', 678915, '08:00:00', '2022-06-19', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `beautician`
--

CREATE TABLE `beautician` (
  `beautician_ID` int(11) NOT NULL,
  `beautician_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beautician`
--

INSERT INTO `beautician` (`beautician_ID`, `beautician_name`) VALUES
(50601, 'Prayer'),
(50602, 'Frank'),
(50603, 'Petronella'),
(50604, 'John'),
(50606, 'Gladys');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_num` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_num`, `first_name`, `last_name`, `email`, `username`, `passwd`) VALUES
(678911, 'Linnah', 'Mahlangu', 'mahlangulinah8@gmail.com', 'mahlah', 'Ln063583!'),
(678912, 'Maria', 'Mnguni', 'mngunimaria@gmail.com', 'mnguna', 'Mn078394!'),
(678913, 'OUPA', 'Skosana', 'skosanaoupa@gmail.com', 'skosi', 'So071881!'),
(678914, 'JACKIE', 'Ntuli', 'ntulijackie@gmail.com', 'jacky', 'Nj076299!'),
(678915, 'LAWRENCE', 'Msiza', 'msizalawrence@gmail.com', 'rence', 'Ml078321');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_code` varchar(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_code`, `service_name`, `service_price`) VALUES
('B101', 'Straight Up', 190),
('B102', 'Straight Back', 120),
('B103', 'Twist', 500),
('B104', 'Dabreds', 450),
('H101', 'Chiskop', 200),
('H102', 'Fade', 250),
('H103', 'S-Curl', 180),
('H104', 'Ladies Fade', 380),
('H105', 'Brush', 300),
('M101', 'Full Massage', 200),
('M102', 'Back Massage', 170),
('M103', 'Foot Massage', 180),
('N101', 'Manicure', 300),
('N102', 'Pedicure', 260),
('N104', 'Nail Installation', 150),
('N105', 'Paint Nails', 180);

-- --------------------------------------------------------

--
-- Table structure for table `servicebeautician`
--

CREATE TABLE `servicebeautician` (
  `service_code` varchar(255) NOT NULL,
  `beautician_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicebeautician`
--

INSERT INTO `servicebeautician` (`service_code`, `beautician_ID`) VALUES
('H101', 50603),
('H102', 50606),
('H105', 50602),
('H104', 50604),
('H103', 50603);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appoint_num`);

--
-- Indexes for table `beautician`
--
ALTER TABLE `beautician`
  ADD PRIMARY KEY (`beautician_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_num`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=678916;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

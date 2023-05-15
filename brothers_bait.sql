-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 01:54 AM
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
-- Database: `brothers bait`
--

-- --------------------------------------------------------

--
-- Table structure for table `bucktail`
--

CREATE TABLE `bucktail` (
  `picture` blob NOT NULL,
  `id` int(8) NOT NULL,
  `type` varchar(20) NOT NULL,
  `size of blade` varchar(20) NOT NULL,
  `Number of blades` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bucktail`
--

INSERT INTO `bucktail` (`picture`, `id`, `type`, `size of blade`, `Number of blades`) VALUES
('', 1, 'bucktail', '10', 1),
('', 2, 'flash', '11', 2),
('', 3, 'Marabou', '9', 3),
(0x4c4f41445f46494c45282f446f776e6c6f6164732f6275636b7461696c2e6a706729, 7, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hairjig`
--

CREATE TABLE `hairjig` (
  `picture` blob NOT NULL,
  `id` int(8) NOT NULL,
  `Size` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hairjig`
--

INSERT INTO `hairjig` (`picture`, `id`, `Size`) VALUES
('', 1, '[1/32oz]'),
('', 2, '[1/16oz]'),
('', 3, '[1/8oz]'),
('', 4, '[1/4oz]'),
('', 5, '[3/8oz]'),
('', 6, '[1/2oz]'),
('', 7, '[3/4oz]'),
('', 8, '[1oz]'),
(0x4c4f41445f46494c45282f446f776e6c6f6164732f6a69672e7765627029, 16, '');

-- --------------------------------------------------------

--
-- Table structure for table `hardwaterrods`
--

CREATE TABLE `hardwaterrods` (
  `id` int(11) NOT NULL,
  `length` varchar(20) NOT NULL,
  `action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hardwaterrods`
--

INSERT INTO `hardwaterrods` (`id`, `length`, `action`) VALUES
(1, '31-36in', 'ultra light/light'),
(2, '31-36in', 'light/medium,medium/heavy');

-- --------------------------------------------------------

--
-- Table structure for table `rods`
--

CREATE TABLE `rods` (
  `id` int(10) NOT NULL,
  `length` varchar(30) NOT NULL,
  `action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rods`
--

INSERT INTO `rods` (`id`, `length`, `action`) VALUES
(1, '5,4ft', 'light'),
(2, '6,6-7,0ft', 'light/medium,medium/heavy'),
(3, '7-9ft', 'medium/heavy,heavy,Xheavy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bucktail`
--
ALTER TABLE `bucktail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hairjig`
--
ALTER TABLE `hairjig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hardwaterrods`
--
ALTER TABLE `hardwaterrods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rods`
--
ALTER TABLE `rods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bucktail`
--
ALTER TABLE `bucktail`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hairjig`
--
ALTER TABLE `hairjig`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hardwaterrods`
--
ALTER TABLE `hardwaterrods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rods`
--
ALTER TABLE `rods`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

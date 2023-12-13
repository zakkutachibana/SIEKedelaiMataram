-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 05:59 AM
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
-- Database: `db_eis_soy`
--

-- --------------------------------------------------------

--
-- Table structure for table `land_area_details`
--

CREATE TABLE `land_area_details` (
  `land_area_detail_id` int(11) NOT NULL,
  `land_area_detail_value` double NOT NULL,
  `land_area_id` int(11) NOT NULL,
  `sub_district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land_area_details`
--

INSERT INTO `land_area_details` (`land_area_detail_id`, `land_area_detail_value`, `land_area_id`, `sub_district_id`) VALUES
(1, 122.85, 1, 1),
(2, 85.74, 1, 2),
(3, 92.14, 1, 3),
(4, 184.27, 1, 4),
(5, 0, 1, 5),
(6, 0, 1, 6),
(7, 96.28, 2, 1),
(8, 77.02, 2, 2),
(9, 77.02, 2, 3),
(10, 111.68, 2, 4),
(11, 0, 2, 5),
(12, 0, 2, 6),
(13, 113.84, 3, 1),
(14, 91.06, 3, 2),
(15, 90.06, 3, 3),
(16, 133.04, 3, 4),
(17, 0, 3, 5),
(18, 0, 3, 6),
(19, 113.84, 4, 1),
(20, 91.06, 4, 2),
(21, 90.06, 4, 3),
(22, 133.04, 4, 4),
(23, 0, 4, 5),
(24, 0, 4, 6),
(25, 113.84, 5, 1),
(26, 91.06, 5, 2),
(27, 90.06, 5, 3),
(28, 133.04, 5, 4),
(29, 0, 5, 5),
(30, 0, 5, 6),
(31, 113.84, 6, 1),
(32, 91.06, 6, 2),
(33, 90.06, 6, 3),
(34, 133.04, 6, 4),
(35, 0, 6, 5),
(36, 0, 6, 6),
(37, 113.84, 7, 1),
(38, 91.06, 7, 2),
(39, 90.06, 7, 3),
(40, 133.04, 7, 4),
(41, 0, 7, 5),
(42, 0, 7, 6),
(43, 1.9, 8, 1),
(44, 3.9, 8, 2),
(45, 0, 8, 3),
(46, 0, 8, 4),
(47, 0, 8, 5),
(48, 0, 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `land_area_total`
--

CREATE TABLE `land_area_total` (
  `land_area_id` int(11) NOT NULL,
  `land_area_total_value` double NOT NULL COMMENT 'Ha',
  `year_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land_area_total`
--

INSERT INTO `land_area_total` (`land_area_id`, `land_area_total_value`, `year_id`) VALUES
(1, 485, 1),
(2, 362, 2),
(3, 428, 3),
(4, 428, 4),
(5, 428, 5),
(6, 428, 6),
(7, 428, 7),
(8, 5.8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `production_details`
--

CREATE TABLE `production_details` (
  `production_detail_id` int(11) NOT NULL,
  `production_detail_value` double NOT NULL,
  `production_id` int(11) NOT NULL,
  `sub_district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `production_details`
--

INSERT INTO `production_details` (`production_detail_id`, `production_detail_value`, `production_id`, `sub_district_id`) VALUES
(1, 113, 1, 1),
(2, 71, 1, 2),
(3, 101, 1, 3),
(4, 167, 1, 4),
(5, 0, 1, 5),
(6, 0, 1, 6),
(7, 92.5, 2, 1),
(8, 58.12, 2, 2),
(9, 82.68, 2, 3),
(10, 136.7, 2, 4),
(11, 0, 2, 5),
(12, 0, 2, 6),
(13, 208, 3, 1),
(14, 131, 3, 2),
(15, 186, 3, 3),
(16, 307, 3, 4),
(17, 0, 3, 5),
(18, 0, 3, 6),
(19, 208, 4, 1),
(20, 131, 4, 2),
(21, 186, 4, 3),
(22, 307, 4, 4),
(23, 0, 4, 5),
(24, 0, 4, 6),
(25, 208, 5, 1),
(26, 131, 5, 2),
(27, 186, 5, 3),
(28, 307, 5, 4),
(29, 0, 5, 5),
(30, 0, 5, 6),
(31, 208, 6, 1),
(32, 131, 6, 2),
(33, 186, 6, 3),
(34, 307, 6, 4),
(35, 0, 6, 5),
(36, 0, 6, 6),
(37, 208, 7, 1),
(38, 131, 7, 2),
(39, 186, 7, 3),
(40, 307, 7, 4),
(41, 0, 7, 5),
(42, 0, 7, 6),
(43, 2.68, 8, 1),
(44, 6.08, 8, 2),
(45, 0, 8, 3),
(46, 0, 8, 4),
(47, 0, 8, 5),
(48, 0, 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `production_total`
--

CREATE TABLE `production_total` (
  `production_id` int(11) NOT NULL,
  `production_total_value` double NOT NULL COMMENT 'ton',
  `year_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `production_total`
--

INSERT INTO `production_total` (`production_id`, `production_total_value`, `year_id`) VALUES
(1, 452, 1),
(2, 370, 2),
(3, 832, 3),
(4, 832, 4),
(5, 832, 5),
(6, 832, 6),
(7, 832, 7),
(8, 9.04, 8);

-- --------------------------------------------------------

--
-- Table structure for table `productivity_details`
--

CREATE TABLE `productivity_details` (
  `productivity_detail_id` int(11) NOT NULL,
  `productivity_detail_value` double NOT NULL,
  `productivity_id` int(11) NOT NULL,
  `sub_district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productivity_details`
--

INSERT INTO `productivity_details` (`productivity_detail_id`, `productivity_detail_value`, `productivity_id`, `sub_district_id`) VALUES
(1, 9.2, 1, 1),
(2, 8.28, 1, 2),
(3, 10.96, 1, 3),
(4, 9.06, 1, 4),
(5, 0, 1, 5),
(6, 0, 1, 6),
(7, 9.61, 2, 1),
(8, 7.55, 2, 2),
(9, 10.73, 2, 3),
(10, 12.24, 2, 4),
(11, 0, 2, 5),
(12, 0, 2, 6),
(13, 18.27, 3, 1),
(14, 14.39, 3, 2),
(15, 20.65, 3, 3),
(16, 23.08, 3, 4),
(17, 0, 3, 5),
(18, 0, 3, 6),
(19, 18.27, 4, 1),
(20, 14.39, 4, 2),
(21, 20.65, 4, 3),
(22, 23.08, 4, 4),
(23, 0, 4, 5),
(24, 0, 4, 6),
(25, 18.27, 5, 1),
(26, 14.39, 5, 2),
(27, 20.65, 5, 3),
(28, 23.08, 5, 4),
(29, 0, 5, 5),
(30, 0, 5, 6),
(31, 18.27, 6, 1),
(32, 14.39, 6, 2),
(33, 20.65, 6, 3),
(34, 23.08, 6, 4),
(35, 0, 6, 5),
(36, 0, 6, 6),
(37, 18.27, 7, 1),
(38, 14.39, 7, 2),
(39, 20.65, 7, 3),
(40, 23.08, 7, 4),
(41, 0, 7, 5),
(42, 0, 7, 6),
(43, 15.58, 8, 1),
(44, 15.58, 8, 2),
(45, 0, 8, 3),
(46, 0, 8, 4),
(47, 0, 8, 5),
(48, 0, 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `productivity_total`
--

CREATE TABLE `productivity_total` (
  `productivity_id` int(11) NOT NULL,
  `productivity_total_value` double NOT NULL COMMENT 'kw/Ha',
  `year_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productivity_total`
--

INSERT INTO `productivity_total` (`productivity_id`, `productivity_total_value`, `year_id`) VALUES
(1, 9.32, 1),
(2, 10.22, 2),
(3, 19.44, 3),
(4, 19.44, 4),
(5, 19.44, 5),
(6, 19.44, 6),
(7, 19.44, 7),
(8, 15.58, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sub_districts`
--

CREATE TABLE `sub_districts` (
  `sub_district_id` int(11) NOT NULL,
  `sub_district_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_districts`
--

INSERT INTO `sub_districts` (`sub_district_id`, `sub_district_name`) VALUES
(1, 'Ampenan'),
(2, 'Sekarbela'),
(3, 'Mataram'),
(4, 'Selaparang'),
(5, 'Cakranegara\r\n'),
(6, 'Sandubaya');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `year_id` int(11) NOT NULL,
  `year` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`year_id`, `year`) VALUES
(1, 2013),
(2, 2014),
(3, 2015),
(4, 2016),
(5, 2017),
(6, 2018),
(7, 2019),
(8, 2020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `land_area_details`
--
ALTER TABLE `land_area_details`
  ADD PRIMARY KEY (`land_area_detail_id`),
  ADD KEY `land_area_id` (`land_area_id`),
  ADD KEY `sub_district_id` (`sub_district_id`);

--
-- Indexes for table `land_area_total`
--
ALTER TABLE `land_area_total`
  ADD PRIMARY KEY (`land_area_id`),
  ADD KEY `year_id` (`year_id`);

--
-- Indexes for table `production_details`
--
ALTER TABLE `production_details`
  ADD PRIMARY KEY (`production_detail_id`),
  ADD KEY `production_id` (`production_id`),
  ADD KEY `sub_district_id` (`sub_district_id`);

--
-- Indexes for table `production_total`
--
ALTER TABLE `production_total`
  ADD PRIMARY KEY (`production_id`),
  ADD KEY `year_id` (`year_id`);

--
-- Indexes for table `productivity_details`
--
ALTER TABLE `productivity_details`
  ADD PRIMARY KEY (`productivity_detail_id`),
  ADD KEY `productivity_id` (`productivity_id`),
  ADD KEY `sub_district_id` (`sub_district_id`);

--
-- Indexes for table `productivity_total`
--
ALTER TABLE `productivity_total`
  ADD PRIMARY KEY (`productivity_id`),
  ADD KEY `year_id` (`year_id`);

--
-- Indexes for table `sub_districts`
--
ALTER TABLE `sub_districts`
  ADD PRIMARY KEY (`sub_district_id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `land_area_details`
--
ALTER TABLE `land_area_details`
  MODIFY `land_area_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `land_area_total`
--
ALTER TABLE `land_area_total`
  MODIFY `land_area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `production_details`
--
ALTER TABLE `production_details`
  MODIFY `production_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `production_total`
--
ALTER TABLE `production_total`
  MODIFY `production_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `productivity_details`
--
ALTER TABLE `productivity_details`
  MODIFY `productivity_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `productivity_total`
--
ALTER TABLE `productivity_total`
  MODIFY `productivity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_districts`
--
ALTER TABLE `sub_districts`
  MODIFY `sub_district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `land_area_details`
--
ALTER TABLE `land_area_details`
  ADD CONSTRAINT `land_area_details_ibfk_1` FOREIGN KEY (`land_area_id`) REFERENCES `land_area_total` (`land_area_id`),
  ADD CONSTRAINT `land_area_details_ibfk_2` FOREIGN KEY (`sub_district_id`) REFERENCES `sub_districts` (`sub_district_id`);

--
-- Constraints for table `land_area_total`
--
ALTER TABLE `land_area_total`
  ADD CONSTRAINT `land_area_total_ibfk_1` FOREIGN KEY (`year_id`) REFERENCES `years` (`year_id`);

--
-- Constraints for table `production_details`
--
ALTER TABLE `production_details`
  ADD CONSTRAINT `production_details_ibfk_1` FOREIGN KEY (`production_id`) REFERENCES `production_total` (`production_id`),
  ADD CONSTRAINT `production_details_ibfk_2` FOREIGN KEY (`sub_district_id`) REFERENCES `sub_districts` (`sub_district_id`);

--
-- Constraints for table `production_total`
--
ALTER TABLE `production_total`
  ADD CONSTRAINT `production_total_ibfk_1` FOREIGN KEY (`year_id`) REFERENCES `years` (`year_id`);

--
-- Constraints for table `productivity_details`
--
ALTER TABLE `productivity_details`
  ADD CONSTRAINT `productivity_details_ibfk_1` FOREIGN KEY (`productivity_id`) REFERENCES `productivity_total` (`productivity_id`),
  ADD CONSTRAINT `productivity_details_ibfk_2` FOREIGN KEY (`sub_district_id`) REFERENCES `sub_districts` (`sub_district_id`);

--
-- Constraints for table `productivity_total`
--
ALTER TABLE `productivity_total`
  ADD CONSTRAINT `productivity_total_ibfk_1` FOREIGN KEY (`year_id`) REFERENCES `years` (`year_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

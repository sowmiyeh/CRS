-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 05:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crs`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `RegisterNumber` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `MobileNumber` varchar(20) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `GraduationYear` varchar(20) DEFAULT NULL,
  `Qualification` varchar(50) DEFAULT NULL,
  `Role` varchar(20) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `Confirmations` varchar(50) DEFAULT NULL,
  `PlaceofUniversity` varchar(50) DEFAULT NULL,
  `Comments` varchar(50) DEFAULT NULL,
  `file_name` varchar(40) DEFAULT NULL,
  `type` varchar(5) DEFAULT NULL,
  `size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `Name`, `RegisterNumber`, `Email`, `MobileNumber`, `Gender`, `DOB`, `GraduationYear`, `Qualification`, `Role`, `Department`, `Confirmations`, `PlaceofUniversity`, `Comments`, `file_name`, `type`, `size`) VALUES
(1, 'sowmi', '221027099', '221027099@sastra.ac.', '9876543210', 'f', '2005-09-14', '2022', 'CCS', 'Full--time', 'bd', 'srel', 'KMU', 'sql connection test 1', '17629-2-week-mechanical.pdf', 'appli', 64),
(2, 'shve', '221027105', '221027055@sastra.ac.', '9876543210', 'f', '2002-06-18', '2021', 'BCA', 'Full--time', 'it', 'srel', 'KMU', 'completedd...............................', '98504-2-week-mechanical.pdf', 'appli', 64),
(3, 'sariga', '221027090', '22102709@sastra.ac.i', '9876543210', 'f', '2005-09-01', '2020', 'BCA', 'Internship', 'it', 'srel', 'KMU', 'final test form', '10014-2-week-cse-and-it.pdf', 'appli', 55),
(4, 'swmiya', '221027099', '221027099@sastra.ac.', '9876543210', 'f', '2001-02-08', '2021', 'BCA', 'Full--time', 'it', 'upes', 'KMU', '', '25958-skilldizire-internship-report.pdf', 'appli', 527),
(5, 'sowmiya', '221027099', '221027099@sastra.ac.', '9876543210', 'f', '2005-09-01', '2021', 'BCA', 'Full--time', 'it', 'upes', 'KMU', 'sfdha', '71208-sowmiya-bca-project-cv.pdf', 'appli', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

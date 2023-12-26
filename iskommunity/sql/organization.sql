-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 26, 2023 at 06:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iskommunity`
--

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `college_Code` varchar(5) NOT NULL,
  `org_Code` varchar(10) NOT NULL,
  `org_Name` varchar(128) NOT NULL,
  `org_Classification` varchar(128) NOT NULL,
  `org_Interest` varchar(128) NOT NULL,
  `membership_Code` varchar(10) NOT NULL,
  `org_Email` varchar(255) NOT NULL,
  `org_Password` varchar(255) NOT NULL,
  `org_Username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`college_Code`, `org_Code`, `org_Name`, `org_Classification`, `org_Interest`, `membership_Code`, `org_Email`, `org_Password`, `org_Username`) VALUES
('CCIS', 'TPG', 'PUP The Programmers Guild', 'Special Interest', 'Technology', 'M_TPG', 'tpg@email.com', '$2y$10$iV60tjeW5obL1QVRAYfqVOAgre/c6kY0cUI7kyPRPFsoCrTKXHN4i', 'puptpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD UNIQUE KEY `org_Email` (`org_Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 04:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `industrial_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `industry-info`
--

CREATE TABLE `industry-info` (
  `main_heading` varchar(255) NOT NULL,
  `heading1` varchar(255) NOT NULL,
  `heading2` varchar(255) NOT NULL,
  `heading3` varchar(255) NOT NULL,
  `heading4` varchar(255) NOT NULL,
  `second-section` varchar(255) NOT NULL,
  `middle-heading1` varchar(255) NOT NULL,
  `middle-heading2` varchar(255) NOT NULL,
  `middle-heading3` varchar(255) NOT NULL,
  `middle-discription1` varchar(500) NOT NULL,
  `middle-discription2` varchar(500) NOT NULL,
  `middle-discription3` varchar(500) NOT NULL,
  `middle-img1` varchar(500) NOT NULL,
  `middle-img2` varchar(500) NOT NULL,
  `middle-img3` varchar(500) NOT NULL,
  `history-year1` int(11) NOT NULL,
  `history-year2` int(11) NOT NULL,
  `history-year3` int(11) NOT NULL,
  `history-year4` int(11) NOT NULL,
  `history-disc1` varchar(500) NOT NULL,
  `history-disc2` varchar(500) NOT NULL,
  `history-disc3` varchar(500) NOT NULL,
  `history-disc4` varchar(500) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industry-info`
--

INSERT INTO `industry-info` (`main_heading`, `heading1`, `heading2`, `heading3`, `heading4`, `second-section`, `middle-heading1`, `middle-heading2`, `middle-heading3`, `middle-discription1`, `middle-discription2`, `middle-discription3`, `middle-img1`, `middle-img2`, `middle-img3`, `history-year1`, `history-year2`, `history-year3`, `history-year4`, `history-disc1`, `history-disc2`, `history-disc3`, `history-disc4`, `id`) VALUES
('Industrial & Factory', 'Free Multipurpose', 'Responsive', 'Landing Page 2019', '', 'hkjk', 'industry\'s standard dummy', 'industry\'s standard dummy 2', 'industry\'s standard dummy 3', 'discription1dddsdjfklsjdie', 'dddddddddd', 'sdsfsd', 'upload_img/work_img2.jpg', 'upload_img/tests.png', 'upload_img/work_img3.jpg', 2034, 2008, 2011, 2018, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it', 'ok', 'dix1', 'hhh', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `industry-info`
--
ALTER TABLE `industry-info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `industry-info`
--
ALTER TABLE `industry-info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

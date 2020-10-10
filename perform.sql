-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 07:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perform`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(10) UNSIGNED NOT NULL,
  `book_title` varchar(50) DEFAULT NULL,
  `authorname` varchar(100) DEFAULT NULL,
  `ISBN` varchar(20) DEFAULT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `copies` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_title`, `authorname`, `ISBN`, `Category`, `copies`, `reg_date`) VALUES
(2, 'Masud Rana', 'Kazi Da', '44422e', 'Thriller', '3', '2020-10-10 15:57:50'),
(4, 'Manob Jonom', 'Sadat Hossain', '1111', 'Romance', '', '2020-10-10 16:41:00'),
(9, 'ochin pakhi', 'rajib hossain', '1145', 'Romance', '3', '2020-10-10 17:42:29'),
(10, 'Shoharab Rustom', 'Jafor Iqbal', '005656', 'Thriller', '11', '2020-10-10 17:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) DEFAULT NULL,
  `member_id` int(10) DEFAULT NULL,
  `Cd` varchar(20) DEFAULT NULL,
  `rd` varchar(50) DEFAULT NULL,
  `Copies` varchar(20) DEFAULT NULL,
  `ISBN` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`id`, `book_id`, `member_id`, `Cd`, `rd`, `Copies`, `ISBN`, `reg_date`) VALUES
(1, 33, 1, '2020-10-02', '2020-10-30', '1', '005656', '2020-10-10 15:37:30'),
(2, 2, 1, '2020-10-03', '2020-10-31', '1', '1111', '2020-10-10 15:52:13'),
(3, 4, 1, '2020-10-03', '2020-10-28', '2', '1111', '2020-10-10 15:53:16'),
(4, 4, 1, '2020-10-17', '2020-11-07', '2', '1111', '2020-10-10 15:57:38'),
(5, 4, 1, '2020-10-03', '2020-10-31', '1', '44422e', '2020-10-10 15:57:50'),
(6, 7, 1, '2020-10-10', '2020-11-07', '2', '233', '2020-10-10 16:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `ISBN` varchar(10) DEFAULT NULL,
  `category_name` varchar(10) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `ISBN`, `category_name`, `reg_date`) VALUES
(1, NULL, 'Romance', '2020-10-10 17:10:45'),
(2, NULL, 'Thriller', '2020-10-10 17:10:47'),
(3, NULL, 'Mystery', '2020-10-10 17:10:50'),
(4, NULL, 'Fantasy', '2020-10-10 17:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `street` varchar(10) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `age` varchar(30) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `Name`, `Address`, `street`, `city`, `Email`, `phone`, `age`, `reg_date`) VALUES
(1, 'Munem Sahriar', '560/F, North Halisahar, Chittagong, Bangladesh', 'besides ba', 'Chittagong', 'munemsah@gmail.com', '01832444434', '21', '2020-10-10 15:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `returnbook`
--

CREATE TABLE `returnbook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Book_id` varchar(10) DEFAULT NULL,
  `Member_id` varchar(10) DEFAULT NULL,
  `ISBN` varchar(20) DEFAULT NULL,
  `Copies` varchar(20) DEFAULT NULL,
  `rd` varchar(20) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `returnbook`
--
ALTER TABLE `returnbook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `returnbook`
--
ALTER TABLE `returnbook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

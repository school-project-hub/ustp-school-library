-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 06:04 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_borrowing_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `call_no` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `call_no`, `author`, `title`) VALUES
(1, 'N101', 'Rrenzy', 'Elective 3'),
(2, 'N102', 'rrenzy', 'Elective 4'),
(5, '123', 'jera', 'jeram');

-- --------------------------------------------------------

--
-- Table structure for table `borrowed`
--

CREATE TABLE `borrowed` (
  `id` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_borrower` int(11) NOT NULL,
  `date_borrowed` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_returned` timestamp NULL DEFAULT NULL,
  `assisted_by` varchar(100) DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowed`
--

INSERT INTO `borrowed` (`id`, `id_book`, `id_borrower`, `date_borrowed`, `date_returned`, `assisted_by`, `status`) VALUES
(1, 1, 1, '2022-10-23 16:00:00', NULL, NULL, ''),
(2, 1, 1, '2022-10-23 16:00:00', NULL, NULL, ''),
(3, 1, 3, '2022-10-25 03:14:33', NULL, NULL, ''),
(4, 2, 1, '2022-10-25 03:14:58', NULL, NULL, ''),
(7, 5, 3, '2022-10-26 04:03:14', '2022-10-26 04:03:14', 'RRENZ D AQUIT', 'RETURNED'),
(10, 2, 1, '2022-10-26 04:04:07', NULL, 'RRENZ D AQUIT', 'borrowed');

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE `borrower` (
  `id` int(11) NOT NULL,
  `academic` varchar(100) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `course` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`id`, `academic`, `f_name`, `m_name`, `l_name`, `school_id`, `course`, `phone`, `email`) VALUES
(1, 'STUDENT', 'renz', 'dayondon', 'aquit', '2020305414', 'BSMB', '09062905452', 'renz@mail.com'),
(3, 'SCHOOL STAFF', 'Guilelr', 'C', 'Cabatuan', '1111', 'STAFF', '09090909', 'guiler@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `birth` date NOT NULL,
  `sex` varchar(1) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `school_id` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `m_name`, `l_name`, `birth`, `sex`, `phone`, `email`, `school_id`, `username`, `pw`) VALUES
(1, 'RRENZ', 'D', 'AQUIT', '2022-10-17', 'M', '09062905452', 'aquit.reynaldo@gmail.com', '202054154', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowed`
--
ALTER TABLE `borrowed`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_book` (`id_book`),
  ADD KEY `id_borrower` (`id_borrower`);

--
-- Indexes for table `borrower`
--
ALTER TABLE `borrower`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `school_id` (`school_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `school_id` (`school_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `borrowed`
--
ALTER TABLE `borrowed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `borrower`
--
ALTER TABLE `borrower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrowed`
--
ALTER TABLE `borrowed`
  ADD CONSTRAINT `borrowed_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `book` (`id`),
  ADD CONSTRAINT `borrowed_ibfk_2` FOREIGN KEY (`id_borrower`) REFERENCES `borrower` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

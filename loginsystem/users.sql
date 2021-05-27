-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 12:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `sno` bigint(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `timestamp` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `password`, `dt`) VALUES
(1, 'shivam', '$2y$10$GYnFLgRbvccqy0yBs0xMTOoxZMJxLHRJLIsPcqtmO8.DY.o8L7A0C', '2021-03-07 01:01:36'),
(2, 'scvb', '$2y$10$4AfZQ12Nr8AM9LQGfgasLefmDiBe8lfCADVR9s2vA510/1.HTxaCm', '2021-05-03 00:30:50'),
(3, 'asdf', '$2y$10$FZgFcXuSTKxBlaypXC0uoucyt4fMdwbeCRIj9vxvgC/.WlDiKSgVy', '2021-05-23 14:13:21'),
(4, 'poiu', '$2y$10$mhoH.DmfNCbMLKXqI3GOV.7nSP3p6.8LIrpCBXrsvB3OKWmJGPXpq', '2021-05-23 15:14:25'),
(5, 'dfg', '$2y$10$uhzupKdHNbzKjr0jefrfFu5CJdcX4OA9.WYCSBWUUPWS8yXmWsmwq', '2021-05-23 15:14:50'),
(6, 'cvg', '$2y$10$DEgtUybHbH9yEs4Xnt/2d.58sTmtntU5DBj.36hK3mQpH7VzNEjMS', '2021-05-23 15:20:48'),
(7, 'axde', '$2y$10$K091lrIyo5e5Vd1OhiqWfOJ4smfijr6EVAlX5TS8lF9gKTVFv2NUW', '2021-05-23 15:21:14'),
(8, '', '$2y$10$b0HAsFhWKp3fCleX54pXZeAObLxx/f7olAGAURl.m5jkWW9J0dltO', '2021-05-23 15:42:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `sno` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

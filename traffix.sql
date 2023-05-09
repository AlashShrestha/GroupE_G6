-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 09, 2023 at 05:55 PM
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
-- Database: `traffix`
--

-- --------------------------------------------------------

--
-- Table structure for table `forgot_password_tokens`
--

CREATE TABLE `forgot_password_tokens` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forgot_password_tokens`
--

INSERT INTO `forgot_password_tokens` (`id`, `email`, `token`, `created_at`) VALUES
(1, 'dikeshkhatree@gmail.com', 'abc123def456', '2023-05-08 03:47:52'),
(2, 'dikeshkhatree@gmail.com', 'abc123def456', '2023-05-08 04:17:41'),
(3, 'dikeshkhatree@gmail.com', 'abc123def456', '2023-05-08 04:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `offence`
--

CREATE TABLE `offence` (
  `id` int(11) NOT NULL,
  `offence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reported_offence`
--

CREATE TABLE `reported_offence` (
  `id` int(11) NOT NULL,
  `offence_id` varchar(200) NOT NULL,
  `vehicle_no` varchar(200) NOT NULL,
  `driver_license` varchar(300) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `gender` varchar(300) NOT NULL,
  `officer_reporting` varchar(500) NOT NULL,
  `offence` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reported_offence`
--

INSERT INTO `reported_offence` (`id`, `offence_id`, `vehicle_no`, `driver_license`, `name`, `address`, `gender`, `officer_reporting`, `offence`, `date`) VALUES
(1, '78771c', '12345', '987654', 'Sohan Shrestha', 'Sukedhara', 'Male', 'arbin', 'Driving Under Drug Influence', '2018-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(300) NOT NULL,
  `site_desc` varchar(2000) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(300) NOT NULL,
  `country` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_name`, `site_desc`, `email`, `phone`, `address`, `city`, `country`) VALUES
(1, 'Traffix', 'Welcome to Dashboard ', 'traffix@gmail.com', '9811760892', 'Naxal', 'Kathmandu', 'Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `username` varchar(300) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `address` varchar(500) NOT NULL,
  `position` varchar(300) NOT NULL,
  `token` varchar(200) NOT NULL,
  `verify_token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `name`, `username`, `pass`, `email`, `address`, `position`, `token`, `verify_token`) VALUES
(1, 'bcefa114ee', 'Rohit karki', 'sabin123', '12345678', 'rohitkarki@gmail.com', 'hadigaun', 'admin', '0', ''),
(0, '0f08f7d437', 'Arbin Rai', 'arbin123', '12345678', 'arbin@gmail.com', 'Hadigaun', 'public', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forgot_password_tokens`
--
ALTER TABLE `forgot_password_tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forgot_password_tokens`
--
ALTER TABLE `forgot_password_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 10:25 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samuel`
--

-- --------------------------------------------------------

--
-- Table structure for table `complainant`
--

CREATE TABLE `complainant` (
  `id` int(11) NOT NULL,
  `id_number` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pics` varchar(200) NOT NULL,
  `adds` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `ms` varchar(15) NOT NULL,
  `occupation` varchar(25) NOT NULL,
  `date_convicted` date NOT NULL,
  `report_time` varchar(10) NOT NULL,
  `report_date` date NOT NULL,
  `remark` text NOT NULL,
  `oic` varchar(30) NOT NULL,
  `crime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complainant`
--

INSERT INTO `complainant` (`id`, `id_number`, `name`, `email`, `pics`, `adds`, `phone`, `sex`, `ms`, `occupation`, `date_convicted`, `report_time`, `report_date`, `remark`, `oic`, `crime`) VALUES
(1, '1638357648', 'Miracle Dappa', 'dap@gmail.com', 'IMG-20210907-WA0016.jpg', '#14b Okania Street, Rumuokwuta, Port-Harcourt', '0987654321', 'Male', 'Single', 'Employee', '2021-12-01', '12:21', '2021-12-25', 'Cultits', 'Maxwell Max', 'Cult'),
(2, '1638444439', 'Favour Nwokamma', 'Favourehio2019@gmail.com', 'IMG-20210731-WA0020.jpg', '#14b Okania Street, Rumuokwuta, Port-Harcourt', '09097048450', 'Male', 'Married', 'Trader', '2021-12-02', '00:27', '2021-12-02', 'I was there', 'Okoru', 'Cult');

-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE `criminal` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pics` varchar(200) NOT NULL,
  `adds` text NOT NULL,
  `id_number` varchar(10) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `ms` varchar(15) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `crime_code` varchar(10) NOT NULL,
  `lga` varchar(30) NOT NULL,
  `complextion` varchar(20) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `soo` varchar(20) NOT NULL,
  `arrest_date` date NOT NULL,
  `arrest_time` varchar(10) NOT NULL,
  `date_convicted` date NOT NULL,
  `remark` text NOT NULL,
  `oic` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criminal`
--

INSERT INTO `criminal` (`id`, `name`, `email`, `pics`, `adds`, `id_number`, `sex`, `ms`, `height`, `weight`, `crime_code`, `lga`, `complextion`, `occupation`, `soo`, `arrest_date`, `arrest_time`, `date_convicted`, `remark`, `oic`, `type`) VALUES
(1, 'Samuel Mark', 'samuel@gmail.com', '1.jpg', 'New Road Of Shell Location', '1638106690', 'Male', 'Single', '8.3', '123', 'Murder', 'Obio Akpor', 'Dark', 'Student', 'Rivers', '2021-11-28', '12:34', '2021-11-03', 'Dangerous act', 'John Chukwu Ebuka', 'Guilty'),
(3, 'Chuks Nice', 'chuks@gmail.com', '3.png', 'Down Town', '1638107230', 'Male', 'Married', '23', '432', 'Robbery', 'Faga', 'Yellow', 'Student', 'Rivers State', '2021-11-28', '23:07', '2021-11-10', 'Bad ', 'Oluchi Chizoba ', 'Suspect'),
(4, 'Favour Nwokamma', 'Favourehio2019@gmail.com', '30.jpg', '#14b Okania Street, Rumuokwuta, Port-Harcourt', '1638272574', 'Male', 'Widower', '56', '58', 'Rap', 'Faga', 'Dfhd', 'Business Person', 'Akwa Ibom', '2021-11-30', '12:48', '2021-12-11', 'Daesrfgh', 'Chukwu Justice', 'Suspect'),
(5, 'Favour Nwokamma', 'Favourehio2019@gmail.com', '36.jpg', '#14b Okania Street, Rumuokwuta, Port-Harcourt', '1638276762', 'Female', 'Widow', '56', '58', 'Robbery', 'Faga', 'Dark', 'Business Person', 'Akwa Ibom', '2021-11-30', '01:52', '2021-11-05', 'He rapped me', 'Chukwu Justice', 'Guilty'),
(6, 'Destiny', 'des@gmail.com', '3.png', 'New Layout', '1638276948', 'Male', 'Single', '4.6', '13', 'Murder', 'Obio Akpor', 'Yellow', 'Cobbler', 'Rivers State', '2021-11-30', '12:34', '2021-11-18', 'He murdered someone', 'John Chukwu Ebuka', 'Guilty'),
(7, 'Awo John', 'awo@gmail.com', 'IMG-20210731-WA0019.jpg', '#14b Okania Street, Rumuokwuta, Port-Harcourt', '1638272574', 'Male', 'Single', '7.0', '80.78', 'Rap', 'Ikwerre', 'Black', 'Employee', 'Cross River', '2021-11-30', '15:23', '2021-12-11', 'Bad boy', 'Chukwu Justice', 'Suspect'),
(8, 'Kelechi Ehio', 'kelechi@gmail.com', 'IMG-20210828-WA0031.jpg', '#14b Okania Street, Rumuokwuta, Port-Harcourt', '1638355434', 'Male', 'Married', '5.8', '80.78', 'Stealing', 'Ikwerre', 'Fair', 'Trader', 'Akwa Ibom', '2021-12-01', '11:48', '2021-12-31', 'Bank stealing', 'Maxwell Max', 'Guilty'),
(9, 'Okoro Francis', 'okoro@gmail.com', 'IMG-20210907-WA0017.jpg', '#14b Okania Street, Rumuokwuta, Port-Harcourt', '1638357648', 'Male', 'Single', '10.11', '45.20', 'Cult', 'Obio Akpor', 'Black', 'Worker', 'Rivers', '2021-12-01', '13:10', '2021-12-01', 'Big boy', 'Maxwell Max', 'Guilty'),
(10, 'Theo Mbachu', 'Favourehio2019@gmail.comxxxxxxx', 'php.jfif', '#14b Okania Street, Rumuokwuta, Port-Harcourt', '1638355434', 'Male', 'Single', '56', '80.78', 'Stealing', 'Phaga', 'Black', 'Trader', 'Imo', '2022-03-22', '14:44', '2021-12-31', '16 years in prison for 5 dollar fruad', 'Maxwell Max', 'Guilty');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `position` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `position`, `date`, `status`) VALUES
(1, 'sam', 'sam', 'Admin', '2021-11-27', 'Active'),
(2, 'favour', 'favour', 'User', '2021-11-26', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complainant`
--
ALTER TABLE `complainant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criminal`
--
ALTER TABLE `criminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complainant`
--
ALTER TABLE `complainant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `criminal`
--
ALTER TABLE `criminal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

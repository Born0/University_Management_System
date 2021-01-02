-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 05:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `bloodgroup` varchar(3) DEFAULT NULL,
  `contact_number` varchar(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `religion` varchar(10) DEFAULT NULL,
  `join_date` varchar(10) DEFAULT NULL,
  `salary` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `dob`, `gender`, `bloodgroup`, `contact_number`, `address`, `religion`, `join_date`, `salary`, `password`, `image`) VALUES
(1, 'Shafiq', 'shafiq@gmail.com', '01/01/21', 'male', 'O+', '017', 'dhaka', 'Islam', '01/01/21', '50000', 'aa', 'files/glutsetup.png'),
(2, 'Eraj', 'eraj@g.c', '2021-01-04', 'M', 'B+', '01971992725', 'Kuril, Dhaka, Bangladesh', 'Islam', '2020-12-29', '80000', 'aa', 'files/glutsetup.png'),
(3, 'Shefat syeda', 's@g.c', '2021-01-05', 'F', 'B-', '01971992725', 'Kuril, Dhaka, Bangladesh', 'Islam', '2021-01-05', '80000', 'aa', 'files/Screenshot (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(10) NOT NULL,
  `mid` varchar(5) NOT NULL,
  `m_total` varchar(5) NOT NULL,
  `final` varchar(5) NOT NULL,
  `f_total` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `mid`, `m_total`, `final`, `f_total`) VALUES
(1, '65', '100', '70', '100'),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_type`
--

CREATE TABLE `login_type` (
  `id` int(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_type`
--

INSERT INTO `login_type` (`id`, `email`, `password`, `type`) VALUES
(2, 'a@apex.com', 'a', 'teacher'),
(1, 'ajaj@apex.com', 'a', 'teacher'),
(8, 'aklima@gmail.com', 'a', 'teacher'),
(36, 'bornoahmed2@gmail.com', 'a', 'teacher'),
(2, 'eraj@g.c', 'aa', 'admin'),
(3, 's@g.c', 'aa', 'admin'),
(1, 'shafiq@gmail.com', 'aa', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `study_material`
--

CREATE TABLE `study_material` (
  `id` int(25) NOT NULL,
  `t_id` varchar(25) NOT NULL,
  `section_id` varchar(25) NOT NULL,
  `file_path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study_material`
--

INSERT INTO `study_material` (`id`, `t_id`, `section_id`, `file_path`) VALUES
(1, '1', '1', 'study/CSC 3222 Web Technologies - Fall 2020-2021.p'),
(13, '1', '1', 'study/Screenshot 2020-12-25 202825.png'),
(16, '8', '1', 'study/52.png'),
(17, '1', '1', 'study/Screenshot (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(25) NOT NULL,
  `t_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `blood_group` varchar(25) NOT NULL,
  `address` longtext NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `joining_year` varchar(25) NOT NULL,
  `salary` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `working_experience` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `profile_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_name`, `email`, `dob`, `gender`, `blood_group`, `address`, `contact_number`, `religion`, `joining_year`, `salary`, `department`, `designation`, `working_experience`, `password`, `profile_image`) VALUES
(2, 'apex', 'a@apex.com', '2020-12-31', 'male', 'A+', 'dhaka', '014', 'Islam', '2020-12-23', '35000', 'CS', 'jr', '1', 'a', 'files/WUB.png'),
(1, 'Ajaj', 'ajaj@apex.com', '2020-12-10', 'male', 'B+', 'dhaka', '01729', 'Islam', '2020-12-09', '35000', 'CS', 'jr', '3', 'a', 'files/2.jpg'),
(8, 'Aklima', 'aklima@gmail.com', '2020-12-08', 'male', 'A-', 'Kuril,', '01729389004', 'Islam', '2020-12-10', '80000', 'CS', 'j', '2', 'a', 'files/2.jpg'),
(36, 'Borno', 'bornoahmed2@gmail.com', '2021-01-06', 'male', 'O+', 'Kuril, Dhaka, Bangladesh', '014', 'Islam', '2021-01-05', '80000', 'Englisg', 'j', '11', 'a', 'files/Screenshot (7).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_type`
--
ALTER TABLE `login_type`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `study_material`
--
ALTER TABLE `study_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `t_id` (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `study_material`
--
ALTER TABLE `study_material`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

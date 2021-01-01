-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 02:21 PM
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
(1, '80', '100', '70', '100'),
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
(8, 'aklima@gmail.com', 'a', 'teacher'),
(16, 'bornoahmed2@gmail.com', 'a', 'teacher'),
(20, 'e@m.b', 'a', 'teacher'),
(1, 'ejaj@apex.com', 'a', 'teacher'),
(34, 'jk@g.com', 'a', 'teacher'),
(22, 'khoab@gmail.com', 'a', 'teacher'),
(31, 'p@g.com', 'a', 'teacher'),
(35, 's@g.com', 'a', 'teacher'),
(30, 'shefat@gmail.com', 'a', 'teacher');

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
(3, '1', '1', 'study/debug.log');

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
(8, 'Aklima', 'aklima@gmail.com', '2020-12-08', 'male', 'A-', 'Kuril,', '01729389004', 'Islam', '2020-12-10', '80000', 'CS', 'j', '2', 'a', 'files/2.jpg'),
(16, 'MD SIRAJUDDIN BORNO', 'bornoahmed2@gmail.com', '2020-12-01', 'male', 'O+', 'Kuril, Dhaka, Bangladesh', '01729389004', 'Islam', '2020-12-08', '35000', 'CS', 'j', '2', 'a', 'files/2.jpg'),
(20, 'eran', 'e@m.b', '2020-12-22', 'female', 'B+', 'Kuril, Dhaka, Bangladesh', '017', 'Islam', '2020-12-03', '80000', 'Matd', 'j', '11', 'a', 'files/Screenshot 2020-12-16 192904.png'),
(1, 'Ajaj', 'ejaj@apex.com', '2020-12-10', 'male', 'B+', 'dhaka', '01729', 'Islam', '2020-12-09', '35000', 'CS', 'jr', '3', 'a', 'files/2.jpg'),
(34, 'pranto', 'jk@g.com', '2020-12-09', 'male', 'B-', 'Kuril, Dhaka, Bangladesh', '014', 'Islam', '2020-12-02', '80000', 'Englisg', 'j', '2', 'a', 'files/00100sPORTRAIT_00100_BURST20190622201948973_'),
(22, 'Khoab', 'khoab@gmail.com', '2020-12-02', 'male', 'A-', 'abc', '014', 'Islam', '2020-12-31', '20000', 'EEE', 'jr', '2', 'a', 'files/desmos.png'),
(31, 'pranto', 'p@g.com', '2020-12-01', 'male', 'B+', 'Kuril, Dhaka, Bangladesh', '014', 'Islam', '2020-12-09', '80000', 'Matd', 'j', '2', 'a', 'files/IMG_20190622_202115.jpg'),
(35, 'Shefat syed', 's@g.com', '2020-12-15', 'female', 'B-', 'Kuril, Dhaka, Bangladesh', '014', 'Islam', '2020-12-08', '80000', 'Matd', 'j', '2', 'a', 'files/00100sPORTRAIT_00100_BURST20190622201951377_'),
(30, 'Shefat syed', 'shefat@gmail.com', '2020-12-14', 'female', 'B-', 'Kuril, Dhaka, Bangladesh', '014', 'Islam', '2020-12-02', '80000', 'Englisg', 'j', '2', 'a', 'files/desmos.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_type`
--
ALTER TABLE `login_type`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

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
-- AUTO_INCREMENT for table `study_material`
--
ALTER TABLE `study_material`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

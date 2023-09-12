-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 08:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `css`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_year_section` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_year_section`, `Department`, `major`) VALUES
(6, 'CSE', ' Technology', 'Lab'),
(2, 'EEE', '--Select Department--', 'none'),
(32, 'BBA', '--Select Department--', 'b'),
(37, '', '--Select Department--', 'none'),
(46, 'English', ' Technology', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `departmet`
--

CREATE TABLE `departmet` (
  `department_id` int(11) NOT NULL,
  `person_incharge` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departmet`
--

INSERT INTO `departmet` (`department_id`, `person_incharge`, `title`, `department`) VALUES
(9, 'Emon', 'Dean', 'Arts and Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `user` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `date`, `data`, `action`, `user`) VALUES
(1408, '2020-12-19 08:43:49', 'john kevin  lorayna', 'Login', 'Admin'),
(1409, '2022-12-03 22:42:22', 'emon tasveer', 'Login', 'admin'),
(1410, '2022-12-03 23:01:10', 'emon tasveer', 'Login', 'admin'),
(1411, '2022-12-03 23:05:52', 'emon tasveer', 'Login', 'admin'),
(1412, '2022-12-04 00:22:36', 'emon tasveer', 'Login', 'admin'),
(1413, '2022-12-04 00:30:47', 'emon tasveer', 'Login', 'admin'),
(1414, '2022-12-04 00:44:03', 'emon tasveer', 'Login', 'admin'),
(1415, '2022-12-04 00:44:29', 'abdullah', 'Add Entry Teacher', 'admin'),
(1416, '2022-12-04 00:48:45', 'emon tasveer', 'Login', 'admin'),
(1417, '2022-12-04 00:49:04', 'emon tasveer', 'Login', 'admin'),
(1418, '2022-12-04 00:56:31', 'emon tasveer', 'Login', 'admin'),
(1419, '2022-12-04 01:25:34', 'emon tasveer', 'Logout', 'admin'),
(1420, '2022-12-04 01:27:21', 'emon tasveer', 'Login', 'admin'),
(1421, '2022-12-04 01:36:09', 'emon tasveer', 'Logout', 'admin'),
(1422, '2022-12-04 01:36:15', 'emon tasveer', 'Login', 'admin'),
(1423, '2022-12-04 01:37:57', 'emon tasveer', 'Logout', 'admin'),
(1424, '2022-12-04 01:39:18', 'emon tasveer', 'Login', 'admin'),
(1425, '2022-12-04 01:39:22', 'emon tasveer', 'Logout', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `description`) VALUES
(13, 'Room 311', 'asd'),
(5, 'Room 312', 'Computer Lab'),
(6, 'Room 313', 'Computer Lab'),
(14, 'Room 401', 'Internet Laboratory'),
(18, 'Room 401A', '4th floor'),
(21, 'Room 314', 'none'),
(20, 'Room 401B', '4th floor'),
(12, 'Room 110', 'Speech Lab'),
(16, 'Room 211', '2nd Floor'),
(22, 'Internet Lab', 'none'),
(25, 'Room 320', 'none'),
(26, 'Room 307', 'none'),
(27, 'Room 308', 'none'),
(28, 'Room 323', 'none'),
(29, 'Room 324', 'none'),
(30, 'Room 316', 'none'),
(31, 'Room 214', 'none'),
(32, 'Room 106', 'none'),
(33, 'Room 411', 'none'),
(34, 'Room 216', 'none'),
(35, 'D5', 'none'),
(36, 'Room 213', 'none'),
(37, 'Room 407', 'none'),
(39, 'Room 408', 'none'),
(40, 'Room 105', 'none'),
(41, 'Room 212', 'none'),
(42, 'Room 412', 'nonoe'),
(43, 'Room 211', 'none'),
(44, 'D6', 'none'),
(45, 'Room 302', ''),
(46, 'Room 402B', ''),
(47, 'Room 402A', ''),
(48, 'Speech LAB', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `sy` varchar(20) NOT NULL,
  `CYS` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `room` varchar(20) NOT NULL,
  `day` varchar(100) NOT NULL,
  `time` varchar(20) NOT NULL,
  `time_end` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `day1` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `semester`, `sy`, `CYS`, `subject`, `teacher`, `room`, `day`, `time`, `time_end`, `type`, `day1`) VALUES
(442, '1st', 'A', 'CSE', 'CSE 225', 'Emon', 'Room 311', 'Monday', '2:30 pm', '3:30 pm', 'Exam', 'Monday');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(1, 'Sample 101', 'This is a sample schedule only.', '2022-01-10 10:30:00', '2022-01-11 18:00:00'),
(2, 'Sample 102', 'Sample Description 102', '2022-01-08 09:30:00', '2022-01-08 11:30:00'),
(4, 'Sample 102', 'Sample Description', '2022-01-12 14:00:00', '2022-01-12 17:00:00'),
(5, 'aaaa', 'aaaaa', '2022-12-03 22:35:00', '2022-12-03 22:35:00'),
(8, 'ssssss', 'ssssss', '2022-12-04 00:41:00', '2022-12-04 00:41:00'),
(9, 'dedfas', 'asdasd', '2022-12-04 00:43:00', '2022-12-04 00:43:00'),
(10, 'dsf', 'sdfsdf', '2022-12-04 00:46:00', '2022-12-04 00:46:00'),
(11, 'fgvfgf', 'fdsgdfg', '2022-12-04 00:50:00', '2022-12-04 00:50:00'),
(12, 'dsfcvsdf', 'dsfcvdsf', '2022-12-04 00:58:00', '2022-12-04 00:58:00'),
(13, 'rfgr', 'fgrfgvsdg', '2022-12-04 00:59:00', '2022-12-04 00:59:00'),
(14, 'rfgr', 'fgrfgvsdg', '2022-12-04 00:59:00', '2022-12-04 00:59:00'),
(15, 'fdgdfgdfg', 'dfgdfgdfg', '2022-12-25 05:04:00', '2022-12-23 07:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Subject_id` int(11) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_title` varchar(100) NOT NULL,
  `subject_category` varchar(100) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `Lab_hours` varchar(50) NOT NULL,
  `lecture_hours` varchar(50) NOT NULL,
  `total` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Subject_id`, `subject_code`, `subject_title`, `subject_category`, `semester`, `Lab_hours`, `lecture_hours`, `total`) VALUES
(57, 'Comp. lit 1', 'none', 'Minor', '2nd', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sy`
--

CREATE TABLE `sy` (
  `sy_id` int(11) NOT NULL,
  `sy` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sy`
--

INSERT INTO `sy` (`sy_id`, `sy`) VALUES
(3, '2012-2013'),
(6, '2019-2020');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Academic_Rank` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `Name`, `Academic_Rank`, `Designation`, `Department`) VALUES
(65, 'MR.', 'none', 'none', 'Industrial Technology'),
(66, 'abdullah', 's', 's', 'Arts and Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `time_end`
--

CREATE TABLE `time_end` (
  `time_end_id` int(11) NOT NULL,
  `time_end` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_end`
--

INSERT INTO `time_end` (`time_end_id`, `time_end`) VALUES
(1, '8:00 am'),
(2, '8:30 am'),
(3, '9:00 am'),
(4, '9:30 am'),
(5, '10:00 am'),
(6, '10:30 am'),
(7, '11:30 am'),
(8, '12:00 pm'),
(9, '12:30 pm'),
(10, '1:00 pm'),
(11, '1:30 pm'),
(12, '2:00 pm'),
(13, '2:30 pm'),
(14, '3:00 pm'),
(36, '8:30 pm'),
(35, '8:00 pm'),
(34, '7:30 pm'),
(33, '7:00 pm'),
(32, '6:30 pm'),
(31, '6:00 pm'),
(30, '5:30 pm'),
(29, '5:00 pm'),
(28, '4:30 pm'),
(27, '4:00 pm'),
(26, '3:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `time_start`
--

CREATE TABLE `time_start` (
  `time_id` int(11) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_start`
--

INSERT INTO `time_start` (`time_id`, `time`) VALUES
(1, '7:30 am'),
(2, '8:00 am'),
(3, '8:30 am'),
(4, '9:00 am'),
(5, '9:30 am'),
(6, '10:00 am'),
(7, '10:30 am'),
(8, '11:00 am'),
(9, '11:30 am'),
(10, '12:00 pm'),
(11, '12:30 pm'),
(12, '1:00 pm'),
(13, '1:30 pm'),
(14, '2:00 pm'),
(15, '2:30 pm'),
(16, '3:00 pm'),
(17, '3:30 pm'),
(18, '4:00 pm'),
(19, '4:30 pm'),
(20, '5:00 pm'),
(21, '5:30 pm'),
(22, '6:00 pm'),
(23, '6:30 pm'),
(24, '7:00 pm'),
(25, '7:30 pm'),
(26, '8:00 pm'),
(27, '8:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `User_Type` varchar(20) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `College` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `UserName`, `Password`, `User_Type`, `FirstName`, `LastName`, `College`) VALUES
(15, 'emon', 'emon123', 'admin', 'emon', 'tasveer', 'Cse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `departmet`
--
ALTER TABLE `departmet`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Subject_id`);

--
-- Indexes for table `sy`
--
ALTER TABLE `sy`
  ADD PRIMARY KEY (`sy_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `time_end`
--
ALTER TABLE `time_end`
  ADD PRIMARY KEY (`time_end_id`);

--
-- Indexes for table `time_start`
--
ALTER TABLE `time_start`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `departmet`
--
ALTER TABLE `departmet`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1426;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=443;

--
-- AUTO_INCREMENT for table `schedule_list`
--
ALTER TABLE `schedule_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `Subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `sy`
--
ALTER TABLE `sy`
  MODIFY `sy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `time_end`
--
ALTER TABLE `time_end`
  MODIFY `time_end_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `time_start`
--
ALTER TABLE `time_start`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

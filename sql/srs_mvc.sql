-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 01:13 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srs_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` int(11) NOT NULL,
  `facultyname` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `facultyname`, `department`, `email`, `mobile`, `address`, `dob`, `gender`, `password`, `status`) VALUES
(1, 'Anadhu', 'cs', 'a@gmail.com', 9874563210, 'sreekaryam   ', '1991-01-01', 'male', '12345', 'Approved'),
(3, 'Amitha', 'cs', 'amitha@gmail.com', 9874563210, 'sreekaryam', '1992-01-31', 'female', '123456', 'Approved'),
(4, 'john', 'history', 'jj@gmail.com', 9638527410, 'tvm', '1990-01-01', 'male', '123456', 'Approved'),
(5, '', '', '', 0, '', '0000-00-00', '', '', 'pending'),
(6, '', '', '', 0, '', '0000-00-00', '', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `noticeid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `beginningdate` date NOT NULL,
  `author` varchar(50) NOT NULL,
  `endingdate` date NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`noticeid`, `title`, `beginningdate`, `author`, `endingdate`, `description`) VALUES
(1, 'SEM  LEAVE', '2020-12-31', 'Principal', '2021-01-15', 'semester Leave'),
(2, 'SEM EXAM', '2020-01-01', 'Faculty', '2020-01-16', 'semester exam');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semid` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `department` varchar(30) NOT NULL,
  `subject1` varchar(30) NOT NULL,
  `subject2` varchar(30) NOT NULL,
  `subject3` varchar(30) NOT NULL,
  `subject4` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semid`, `sem`, `department`, `subject1`, `subject2`, `subject3`, `subject4`) VALUES
(1, 1, 'cs', 'python', 'java', 'cpp', 'cpp'),
(3, 1, 'commerce', 'accounting', 'tally', 'cost accounting', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studid` int(11) NOT NULL,
  `regno` int(11) NOT NULL,
  `studentname` varchar(30) NOT NULL,
  `departmentname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studid`, `regno`, `studentname`, `departmentname`, `email`, `dob`, `gender`, `address`, `mobile`, `password`) VALUES
(1, 14, 'jebin', 'cs', 'jebinvabraham@gmail.com', '1996-02-11', 'male', 'ranny', 9847072366, '123456'),
(2, 7, 'ashiq', 'cs', 'ashiq@gmail.com', '2018-01-01', 'male', 'sreekaryam', 9874563210, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `department` varchar(30) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `day` varchar(30) NOT NULL,
  `hour1` varchar(30) NOT NULL,
  `hour2` varchar(30) NOT NULL,
  `hour3` varchar(30) NOT NULL,
  `hour4` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `department`, `sem`, `day`, `hour1`, `hour2`, `hour3`, `hour4`) VALUES
(1, 'cs', 'sem1', 'monday', 'java', 'cpp', 'c', 'python'),
(2, 'cs', 'sem2', 'monday', 'java', 'django', 'python', 'php'),
(3, 'cs', 'sem1', 'Tuesday', 'java', 'python', 'c', 'cpp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`noticeid`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studid`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `noticeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

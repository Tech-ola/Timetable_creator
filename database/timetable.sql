-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 08:36 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `gen_timetable`
--

CREATE TABLE `gen_timetable` (
  `id` int(11) NOT NULL,
  `name_of_timetable` varchar(150) NOT NULL,
  `subject1` varchar(100) NOT NULL,
  `time1` varchar(100) NOT NULL,
  `day1` varchar(200) NOT NULL,
  `subject2` varchar(100) NOT NULL,
  `time2` varchar(100) NOT NULL,
  `day2` varchar(100) NOT NULL,
  `subject3` varchar(100) NOT NULL,
  `time3` varchar(100) NOT NULL,
  `day3` varchar(100) NOT NULL,
  `subject4` varchar(100) NOT NULL,
  `time4` varchar(100) NOT NULL,
  `day4` varchar(100) NOT NULL,
  `subject5` varchar(100) NOT NULL,
  `time5` varchar(100) NOT NULL,
  `day5` varchar(100) NOT NULL,
  `subject6` varchar(100) NOT NULL,
  `time6` varchar(100) NOT NULL,
  `day6` varchar(100) NOT NULL,
  `subject7` varchar(100) NOT NULL,
  `time7` varchar(100) NOT NULL,
  `day7` varchar(100) NOT NULL,
  `Date_recorded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gen_timetable`
--

INSERT INTO `gen_timetable` (`id`, `name_of_timetable`, `subject1`, `time1`, `day1`, `subject2`, `time2`, `day2`, `subject3`, `time3`, `day3`, `subject4`, `time4`, `day4`, `subject5`, `time5`, `day5`, `subject6`, `time6`, `day6`, `subject7`, `time7`, `day7`, `Date_recorded`, `Action`) VALUES
(2, 'My Weekly Routine', 'Attend Conference Meeting', '9:00-10:00', 'monday', 'Take a break', '10:00-11:00', 'monday', 'Take an Online Class', '13:00-14:00', 'wednesday', 'Take an Online Class', '13:00-14:00', 'wednesday', 'Go to lunch', '14:00-15:00', 'wednesday', 'Personal Development', '11:00-12:00', 'thursday', 'Watch Movies', '14:00-15:00', 'friday', '2021-12-28 21:52:17', ''),
(3, 'Personal Routine', 'Personal Devlopment', '10:00-11:00', 'wednesday', 'Lorem ipsom', '9:00-10:00', 'tuesday', 'Lorem ipsom', '13:00-14:00', 'monday', '', '', '', '', '', '', '', '', '', '', '', '', '2021-12-28 21:53:48', ''),
(5, 'Lecture Timetable', 'Go on Vacation', '10:00-11:00', 'saturday', 'Take a Stroll', '15:00-16:00', 'saturday', '', '', '', '', '', '', 'dy8erew3', '10:00-11:00', 'friday', 'ujhtee', '11:00-12:00', 'tuesday', '', '10:00-11:00', 'wednesday', '2021-12-29 10:07:24', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gen_timetable`
--
ALTER TABLE `gen_timetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gen_timetable`
--
ALTER TABLE `gen_timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

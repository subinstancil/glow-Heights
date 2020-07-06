-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 10:20 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `glowheights`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
`college_id` int(11) NOT NULL,
  `college_name` varchar(200) NOT NULL,
  `district_id` int(11) NOT NULL,
  `university_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `college_name`, `district_id`, `university_id`) VALUES
(2, 'CET', 7, 2),
(3, 'Govt. College Malappuram', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `college_courses`
--

CREATE TABLE IF NOT EXISTS `college_courses` (
`cl_course_id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `fees` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `college_courses`
--

INSERT INTO `college_courses` (`cl_course_id`, `college_id`, `course_id`, `fees`) VALUES
(1, 2, 6, 'reg : 1000, 1st yr : 10000, 2nd yr : 10000,3rd yr : 1000,4th yr : 10000'),
(2, 2, 2, 'reg : 1000, 1st yr : 10000, 2nd yr : 10000,3rd yr : 1000,4th yr : 10000'),
(3, 2, 4, 'reg : 1000, 1st yr : 10000, 2nd yr : 10000,3rd yr : 1000,4th yr : 10000'),
(4, 3, 10, 'reg : 1000, 1st yr : 10000, 2nd yr : 10000,3rd yr : 1000,4th yr : 10000'),
(5, 3, 7, 'reg : 1000, 1st yr : 10000, 2nd yr : 10000,3rd yr : 1000,4th yr : 10000');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
`country_id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
`course_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `qualification` varchar(300) NOT NULL,
  `after` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `stream_id`, `duration`, `qualification`, `after`) VALUES
(2, 'Mechanical Engineering', 1, 4, '+2', 'higher studies'),
(4, 'Civil Engineering', 1, 4, '+2', 'higher studies'),
(5, 'B PHARM', 5, 2, '+2', 'higher studies'),
(6, 'MBBS', 2, 5, '+2', 'higher studies'),
(7, 'BDS', 2, 5, '+2', 'higher studies'),
(8, 'MBA', 4, 2, 'BBA', 'higher studies'),
(9, 'BBA', 4, 3, '+2', 'higher studies'),
(10, 'LLB', 3, 3, '+2', 'higher studies'),
(11, 'B.com + LLB', 3, 5, '+2', 'higher studies');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
`district_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `district_name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `state_id`, `district_name`) VALUES
(1, 2, 'Malapuram'),
(2, 2, 'Kollam'),
(5, 2, 'Kozhikode'),
(6, 2, 'Kannur'),
(7, 2, 'Thiruvanathapuram');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
`state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `country_id`, `state_name`) VALUES
(2, 1, 'Kerala'),
(3, 1, 'Tamil Nadu');

-- --------------------------------------------------------

--
-- Table structure for table `streams`
--

CREATE TABLE IF NOT EXISTS `streams` (
`stream_id` int(11) NOT NULL,
  `stream_name` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `streams`
--

INSERT INTO `streams` (`stream_id`, `stream_name`) VALUES
(1, 'Engineering'),
(3, 'Law'),
(4, 'Management'),
(2, 'Medical'),
(5, 'Para-Medical');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE IF NOT EXISTS `university` (
`university_id` int(11) NOT NULL,
  `university_name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`university_id`, `university_name`) VALUES
(1, 'Kerala university'),
(2, 'KTU'),
(3, 'CUSAT'),
(4, 'Calicut University');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
 ADD PRIMARY KEY (`college_id`), ADD KEY `college_ibfk_1` (`district_id`), ADD KEY `college_ibfk_2` (`university_id`);

--
-- Indexes for table `college_courses`
--
ALTER TABLE `college_courses`
 ADD PRIMARY KEY (`cl_course_id`), ADD KEY `college_courses_ibfk_1` (`college_id`), ADD KEY `college_courses_ibfk_2` (`course_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
 ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD PRIMARY KEY (`course_id`), ADD KEY `courses_ibfk_1` (`stream_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
 ADD PRIMARY KEY (`district_id`), ADD KEY `district_ibfk_1` (`state_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
 ADD PRIMARY KEY (`state_id`), ADD KEY `state_ibfk_1` (`country_id`);

--
-- Indexes for table `streams`
--
ALTER TABLE `streams`
 ADD PRIMARY KEY (`stream_id`), ADD UNIQUE KEY `stream_id` (`stream_id`), ADD UNIQUE KEY `stream_name` (`stream_name`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
 ADD PRIMARY KEY (`university_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `college_courses`
--
ALTER TABLE `college_courses`
MODIFY `cl_course_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `streams`
--
ALTER TABLE `streams`
MODIFY `stream_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
MODIFY `university_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `college`
--
ALTER TABLE `college`
ADD CONSTRAINT `college_ibfk_1` FOREIGN KEY (`district_id`) REFERENCES `district` (`district_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `college_ibfk_2` FOREIGN KEY (`university_id`) REFERENCES `university` (`university_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `college_courses`
--
ALTER TABLE `college_courses`
ADD CONSTRAINT `college_courses_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`college_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `college_courses_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`stream_id`) REFERENCES `streams` (`stream_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `district`
--
ALTER TABLE `district`
ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `state`
--
ALTER TABLE `state`
ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

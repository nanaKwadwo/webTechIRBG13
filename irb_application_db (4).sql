-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2016 at 12:57 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irb_application_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `userName` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` enum('MALE','FEMALE') NOT NULL,
  `dateOfBirth` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phoneNumber` decimal(12,0) NOT NULL,
  `usergroup` enum('Reviewer','Admin','Applicant','None') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `userName`, `password`, `firstName`, `lastName`, `gender`, `dateOfBirth`, `email`, `address`, `phoneNumber`, `usergroup`) VALUES
(1, 'Delanyo', 'new padd', 'Delanyo', 'test', 'MALE', '2016-03-09', 'test@test.com', '', '0', 'Applicant'),
(2, 'Eben', 'dgdgd', 'Ebenezer', 'Guwama', 'MALE', '2016-03-14', '', '', '0', 'Applicant');

-- --------------------------------------------------------

--
-- Table structure for table `irb_application`
--

CREATE TABLE `irb_application` (
  `APPLICATION_ID` int(11) NOT NULL,
  `APPLICANT_ID` int(11) NOT NULL,
  `TITLE_OF_PROJECT` varchar(300) NOT NULL,
  `PRINCIPAL_INVESTIGATOR` varchar(300) NOT NULL,
  `CO-PRINCIPAL_INVESTIGATOR` varchar(300) NOT NULL,
  `SOURCES_OF_FINANCE` text NOT NULL,
  `REQUEST_FOR_EXEMPTION` text NOT NULL,
  `CHARACTERISTICS_OF_SUBJECTS` text NOT NULL,
  `SPECIAL_CASES` text NOT NULL,
  `METHOD_OF_RECRUITMENT` text NOT NULL,
  `EXTENT_OF_INFORMATION` text NOT NULL,
  `RESEARCH_METHOD` text NOT NULL,
  `DATA_SOURCES` text NOT NULL,
  `RESEARCH_INVOLVES` set('1','2','3','4','5','6') NOT NULL,
  `PROCEDURE_OF_RESEARCH` text NOT NULL,
  `CONFIDENTIALITY_OF_INFORMATION` text NOT NULL,
  `HANDLING_DATA` text NOT NULL,
  `DISSEMINATION_OF_DATA` text NOT NULL,
  `INFORMING_SUBJECT` text NOT NULL,
  `CONFIDENTIALITY_PROCEDURES` text NOT NULL,
  `PARTICIPANT_REWARD` text NOT NULL,
  `PARTICIPANT_BENEFITS` text NOT NULL,
  `RATIONALE_FOR_EXCLUSION` text NOT NULL,
  `APPLICATION_STATE` enum('SAVE','SUBMITTED') NOT NULL,
  `REVIEWER_STATUS` enum('PENDING_REVIEW','APPROVED','DENIED') NOT NULL,
  `ATTACHMENTS` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `irb_application`
--

INSERT INTO `irb_application` (`APPLICATION_ID`, `APPLICANT_ID`, `TITLE_OF_PROJECT`, `PRINCIPAL_INVESTIGATOR`, `CO-PRINCIPAL_INVESTIGATOR`, `SOURCES_OF_FINANCE`, `REQUEST_FOR_EXEMPTION`, `CHARACTERISTICS_OF_SUBJECTS`, `SPECIAL_CASES`, `METHOD_OF_RECRUITMENT`, `EXTENT_OF_INFORMATION`, `RESEARCH_METHOD`, `DATA_SOURCES`, `RESEARCH_INVOLVES`, `PROCEDURE_OF_RESEARCH`, `CONFIDENTIALITY_OF_INFORMATION`, `HANDLING_DATA`, `DISSEMINATION_OF_DATA`, `INFORMING_SUBJECT`, `CONFIDENTIALITY_PROCEDURES`, `PARTICIPANT_REWARD`, `PARTICIPANT_BENEFITS`, `RATIONALE_FOR_EXCLUSION`, `APPLICATION_STATE`, `REVIEWER_STATUS`, `ATTACHMENTS`) VALUES
(1, 4, 'Test Project', '2', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SUBMITTED', '', ''),
(2, 1, 'project', '1', '1', 'grant', 'request', 'character', 'special', 'method', 'extent', 'ressearch', 'data sources', '4', 'yes', '', 'data', 'dissemi', 'informed', 'confidence', 'reward', 'beliefs', 'rional', 'SAVE', 'PENDING_REVIEW', ''),
(3, 1, 'project final', '1', '1', 'grant', 'request', 'character', 'special', 'method', 'extent', 'ressearch', 'data sources', '4', 'yes', '', 'data', 'dissemi', 'informed', 'confidence', 'reward', 'beliefs', 'rional', 'SAVE', 'PENDING_REVIEW', '');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `sponsor_id` int(11) NOT NULL,
  `sponsor_name` varchar(300) NOT NULL,
  `organisation_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `userName` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `yeargroup` int(4) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` enum('MALE','FEMALE') NOT NULL,
  `dateOfBirth` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phoneNumber` decimal(12,0) NOT NULL,
  `is_applicant` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `userName`, `password`, `yeargroup`, `firstName`, `lastName`, `gender`, `dateOfBirth`, `email`, `address`, `phoneNumber`, `is_applicant`) VALUES
(1, 'Nelson', 'test', 2016, 'Nana Kwadwo', 'Darfoor', 'FEMALE', '2016-03-09', 'test@test.com', '', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `is_applicant` tinyint(1) NOT NULL,
  `user_status` set('Admin','Reviewer','Student','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `is_applicant`, `user_status`) VALUES
(1, 'Kofi', 'dgdgd', 1, 'Admin,Reviewer,'),
(2, 'Ama', 'dsdsd', 1, 'Reviewer'),
(3, 'jo', 'jo', 0, 'Reviewer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `irb_application`
--
ALTER TABLE `irb_application`
  ADD PRIMARY KEY (`APPLICATION_ID`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`sponsor_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `irb_application`
--
ALTER TABLE `irb_application`
  MODIFY `APPLICATION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `sponsor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

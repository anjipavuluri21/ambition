-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 03:01 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ambition`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `chapter_id` int(11) NOT NULL,
  `chapter_name` varchar(200) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`chapter_id`, `chapter_name`, `subject_id`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(2, 'topic1', 1, 1, '2019-12-02 12:05:42', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_validity` int(11) NOT NULL COMMENT 'data in months',
  `exam_id` int(200) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_price`, `course_validity`, `exam_id`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'science', 1500, 1500, 1, 1, '2019-11-29 12:42:33', 0, '0000-00-00 00:00:00'),
(10, 'anji', 1200, 1200, 1, 1, '2019-12-02 02:20:55', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `course_category_id` int(11) NOT NULL,
  `course_category_name` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`course_category_id`, `course_category_name`, `course_id`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Chemistry', 8, 1, '2019-11-29 12:43:08', 0, '0000-00-00 00:00:00'),
(4, 'naga', 8, 1, '2019-12-02 12:21:30', 0, '0000-00-00 00:00:00'),
(5, 'naga', 8, 1, '2019-12-02 12:21:54', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `course_papers`
--

CREATE TABLE `course_papers` (
  `course_paper_id` int(11) NOT NULL,
  `course_paper_name` varchar(200) NOT NULL,
  `course_category_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_papers`
--

INSERT INTO `course_papers` (`course_paper_id`, `course_paper_name`, `course_category_id`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(6, 'biology', 1, 1, '2019-12-02 10:08:41', 0, '0000-00-00 00:00:00'),
(7, 'anji', 1, 1, '2019-12-02 10:09:29', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `course_vedios`
--

CREATE TABLE `course_vedios` (
  `course_vedio_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_category_id` int(11) NOT NULL,
  `course_paper_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `vedio_name` varchar(500) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(200) NOT NULL,
  `exam_banner` varchar(200) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exam_id`, `exam_name`, `exam_banner`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'SAT (P2)', '', 1, '2019-11-29 12:40:23', 1, '2019-12-02 12:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(200) NOT NULL,
  `course_paper_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `course_paper_id`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'science', 7, 1, '2019-12-02 12:03:40', 0, '0000-00-00 00:00:00'),
(5, 'science2', 7, 1, '2019-12-02 12:32:54', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pin_code` int(20) DEFAULT NULL,
  `user_type` int(11) NOT NULL COMMENT '1=> super admin 2=> admin',
  `created_on` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `last_name`, `email`, `mobile_no`, `password`, `state`, `district`, `pin_code`, `user_type`, `created_on`, `updated_at`) VALUES
(1, 'admin', '', 'admin@gmail.com', '', '123456', '', '', 0, 2, '0000-00-00 00:00:00', '2019-11-27 06:15:22'),
(3, 'super admin', '', 'superadmin@gmail.com', '9014675474', '123456', '', '', 0, 1, '0000-00-00 00:00:00', '2019-11-29 07:37:37'),
(12, 'anji', 'pavuluri', 'ad@gmail.com', '9014675474', 'e10adc3949ba59abbe56', 'ap', 'guntur', 0, 0, '0000-00-00 00:00:00', '2019-11-27 10:44:04'),
(16, 'naganji', 'p', 'naganj@mail.com', '1234567890', '8d70d8ab2768f232ebe8', 'telangana', 'hyd', 500072, 0, '0000-00-00 00:00:00', '2019-11-28 03:58:45'),
(18, 'nagan', 'asas', 'nagan@gmail.com', '9879874562', '123456', 'ap', 'gnt', 12121, 2, '0000-00-00 00:00:00', '2019-11-28 07:25:34'),
(19, 'harish', 'harish', 'harish@gmail.com', '15515115', 'e10adc3949ba59abbe56', 'hyd', 'uppal', NULL, 0, '2028-11-19 02:11:06', '2019-11-28 08:40:06'),
(20, 'harish', 'kumar', 'harish@gmail.com', '1234567890', 'e10adc3949ba59abbe56', 'Telangana', 'RangaReddy', NULL, 0, '2029-11-19 10:11:03', '2019-11-29 04:54:03'),
(21, 'Vamshi', 'kumar', 'vamshi@gmail.com', '1234567890', 'e10adc3949ba59abbe56', 'Telangana', 'RangaReddy', NULL, 0, '2029-11-19 01:11:16', '2019-11-29 07:44:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`chapter_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`course_category_id`);

--
-- Indexes for table `course_papers`
--
ALTER TABLE `course_papers`
  ADD PRIMARY KEY (`course_paper_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `chapter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `course_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_papers`
--
ALTER TABLE `course_papers`
  MODIFY `course_paper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

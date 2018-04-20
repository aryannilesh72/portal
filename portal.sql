-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 04:50 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'Marketing'),
(12, 'Graphic Designer');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `desig_id` int(11) NOT NULL,
  `desig_name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`desig_id`, `desig_name`) VALUES
(4, 'Junior-One'),
(6, 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `account_no` text NOT NULL,
  `ifsc_code` text NOT NULL,
  `su` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `designation` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `e-mail` text NOT NULL,
  `per_address` text NOT NULL,
  `cur_address` text NOT NULL,
  `pan_no` text NOT NULL,
  `aadhar_no` text NOT NULL,
  `verify_pan` text,
  `verify_aadhar` text,
  `verify_account` text,
  `verify_ifsc` text,
  `dob` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp-one`
--

CREATE TABLE `emp-one` (
  `user_id` int(11) NOT NULL,
  `username` text,
  `password` text,
  `first_name` text,
  `last_name` text,
  `e-mail` text,
  `su` int(11) DEFAULT NULL,
  `contact_no` text,
  `doj` date DEFAULT NULL,
  `department` int(255) DEFAULT NULL,
  `location` int(255) DEFAULT NULL,
  `designation` int(255) DEFAULT NULL,
  `per_address` text,
  `cur_address` text,
  `pan_no` text,
  `aadhar_no` text,
  `account_no` text,
  `ifsc_code` text,
  `photo` blob,
  `verify_pan` text,
  `verify_aadhar` text,
  `verify_account` text,
  `verify_ifsc` text,
  `employee_status` text,
  `gross_salary` int(200) NOT NULL,
  `dob` date DEFAULT NULL,
  `emp_code` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp-one`
--

INSERT INTO `emp-one` (`user_id`, `username`, `password`, `first_name`, `last_name`, `e-mail`, `su`, `contact_no`, `doj`, `department`, `location`, `designation`, `per_address`, `cur_address`, `pan_no`, `aadhar_no`, `account_no`, `ifsc_code`, `photo`, `verify_pan`, `verify_aadhar`, `verify_account`, `verify_ifsc`, `employee_status`, `gross_salary`, `dob`, `emp_code`) VALUES
(15, 'Ruchitha', 'ee11cbb19052e40b07aac0ca060c23ee', 'Ruchi', 'Deshpande', 'ruchithadeshpande@gmail.com', 0, '7798576939', '2018-04-02', 13, 7, 4, 'Home', 'Home', '1234567890', '1234567890', '1234567890', '1234567890', NULL, 'Under Review', 'Under Review', 'Under Review', 'Under Review', 'On Process', 0, '1996-04-02', ''),
(14, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'Ruchi', 'Deshpande', 'admin@example.com', 1, '7798576939', '2018-04-02', 13, 7, 4, 'Shubham Apts', 'Shubham Apts', '1234567890', '1234567890', '1234567890', '1234567890', NULL, 'Under Review', 'Under Review', 'Under Review', 'Under Review', 'On Process', 0, '1996-04-02', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `user_id` int(7) NOT NULL,
  `username` varchar(23) DEFAULT NULL,
  `account_no` varchar(16) DEFAULT NULL,
  `ifsc_code` varchar(12) DEFAULT NULL,
  `su` int(2) DEFAULT NULL,
  `aadhar_no` varchar(9) DEFAULT NULL,
  `location` int(8) DEFAULT NULL,
  `department` int(10) DEFAULT NULL,
  `designation` int(11) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `first_name` varchar(10) DEFAULT NULL,
  `last_name` varchar(10) DEFAULT NULL,
  `e-mail` text,
  `contact_no` varchar(9) DEFAULT NULL,
  `doj` varchar(10) DEFAULT NULL,
  `per_address` varchar(10) DEFAULT NULL,
  `cur_address` varchar(3) DEFAULT NULL,
  `pan_no` varchar(11) DEFAULT NULL,
  `verify_aadhar` varchar(12) DEFAULT NULL,
  `verify_ifsc` varchar(13) DEFAULT NULL,
  `verify_pan` varchar(14) DEFAULT NULL,
  `verify_account` varchar(12) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `emp_code` int(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`user_id`, `username`, `account_no`, `ifsc_code`, `su`, `aadhar_no`, `location`, `department`, `designation`, `password`, `first_name`, `last_name`, `e-mail`, `contact_no`, `doj`, `per_address`, `cur_address`, `pan_no`, `verify_aadhar`, `verify_ifsc`, `verify_pan`, `verify_account`, `dob`, `emp_code`) VALUES
(150, 'Arun', '20229521583', 'SBIN0016331', 0, '', 14, 1, 6, 'ee11cbb19052e40b07aac0ca060c23ee', '', '', '', '', '', '', '', '', 'Under Review', 'Under Review', 'Under Review', 'Under Review', '', 0),
(154, 'Dhilnoy', '20229521583', 'SBIN0016331', 0, '', 14, 1, 6, 'ee11cbb19052e40b07aac0ca060c23ee', '', '', '', '', '', '', '', '', 'Under Review', 'Under Review', 'Under Review', 'Under Review', '', 0),
(155, 'Syam V J', '', '', 0, '', 19, 1, 6, 'ee11cbb19052e40b07aac0ca060c23ee', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(156, 'admin', NULL, NULL, 1, NULL, NULL, NULL, NULL, '21232f297a57a5a743894a0e4a801fc3', NULL, '', 'admin@example.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(157, 'Ruchi', '', '', 0, '', 10, 1, 6, '996c43b3df35048358e637b5f80e9954', 'Ruchitha', 'Deshpande', 'ruchithadeshpande@gmail.com', '779857693', '2018-04-29', 'Hi', 'Hi', '', 'Under Review', 'Under Review', 'Under Review', 'Under Review', '2018-04-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `emp_attendance`
--

CREATE TABLE `emp_attendance` (
  `attId` int(200) NOT NULL,
  `dept_id` int(255) DEFAULT NULL,
  `loc_id` int(255) DEFAULT NULL,
  `attendance_date` date DEFAULT NULL,
  `year` year(4) NOT NULL,
  `user_id` int(255) NOT NULL,
  `status` int(255) NOT NULL,
  `office_in` time NOT NULL,
  `office_out` time NOT NULL,
  `reason` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_attendance`
--

INSERT INTO `emp_attendance` (`attId`, `dept_id`, `loc_id`, `attendance_date`, `year`, `user_id`, `status`, `office_in`, `office_out`, `reason`) VALUES
(150, 13, 7, '2018-03-28', 2018, 12, 2, '10:00:00', '20:00:00', 'Function'),
(149, 13, 7, '2018-03-28', 2018, 8, 3, '10:00:00', '20:00:00', 'Fewer'),
(151, 1, 10, '2018-04-01', 2018, 1, 1, '10:00:00', '20:00:00', ''),
(152, 1, 10, '2018-04-01', 2018, 2, 2, '00:00:00', '00:00:00', 'Fewer'),
(153, 1, 10, '2018-04-01', 2018, 3, 0, '10:00:00', '20:00:00', ''),
(154, 1, 10, '2018-04-01', 2018, 4, 0, '10:00:00', '20:00:00', ''),
(155, 1, 10, '2018-04-01', 2018, 5, 0, '10:00:00', '20:00:00', ''),
(156, 1, 10, '2018-04-01', 2018, 6, 0, '10:00:00', '20:00:00', ''),
(157, 1, 10, '2018-04-01', 2018, 7, 0, '10:00:00', '20:00:00', ''),
(158, 1, 10, '2018-04-01', 2018, 8, 0, '10:00:00', '20:00:00', ''),
(159, 1, 10, '2018-04-01', 2018, 9, 0, '10:00:00', '20:00:00', ''),
(160, 1, 10, '2018-04-01', 2018, 10, 0, '10:00:00', '20:00:00', ''),
(161, 1, 10, '2018-04-01', 2018, 11, 0, '10:00:00', '20:00:00', ''),
(162, 1, 10, '2018-04-01', 2018, 12, 0, '10:00:00', '20:00:00', ''),
(163, 1, 10, '2018-04-01', 2018, 13, 0, '10:00:00', '20:00:00', ''),
(164, 1, 10, '2018-04-01', 2018, 14, 0, '10:00:00', '20:00:00', ''),
(165, 1, 10, '2018-04-01', 2018, 15, 0, '10:00:00', '20:00:00', ''),
(166, 1, 10, '2018-04-01', 2018, 16, 0, '10:00:00', '20:00:00', ''),
(167, 1, 10, '2018-04-01', 2018, 17, 0, '10:00:00', '20:00:00', ''),
(168, 1, 10, '2018-04-01', 2018, 18, 0, '10:00:00', '20:00:00', ''),
(169, 1, 10, '2018-04-01', 2018, 19, 0, '10:00:00', '20:00:00', ''),
(170, 1, 10, '2018-04-01', 2018, 20, 0, '10:00:00', '20:00:00', ''),
(171, 1, 10, '2018-04-01', 2018, 21, 0, '10:00:00', '20:00:00', ''),
(172, 1, 10, '2018-04-01', 2018, 22, 0, '10:00:00', '20:00:00', ''),
(173, 1, 10, '2018-04-01', 2018, 23, 0, '10:00:00', '20:00:00', ''),
(174, 1, 10, '2018-04-01', 2018, 24, 0, '10:00:00', '20:00:00', ''),
(175, 1, 10, '2018-04-01', 2018, 25, 0, '10:00:00', '20:00:00', ''),
(176, 1, 10, '2018-04-01', 2018, 26, 0, '10:00:00', '20:00:00', ''),
(177, 1, 10, '2018-04-01', 2018, 27, 0, '10:00:00', '20:00:00', ''),
(178, 1, 10, '2018-04-01', 2018, 28, 0, '10:00:00', '20:00:00', ''),
(179, 1, 10, '2018-04-01', 2018, 29, 0, '10:00:00', '20:00:00', ''),
(180, 1, 10, '2018-04-01', 2018, 30, 0, '10:00:00', '20:00:00', ''),
(181, 1, 10, '2018-04-01', 2018, 31, 0, '10:00:00', '20:00:00', ''),
(182, 1, 10, '2018-04-01', 2018, 32, 0, '10:00:00', '20:00:00', ''),
(183, 1, 10, '2018-04-01', 2018, 33, 0, '10:00:00', '20:00:00', ''),
(184, 1, 10, '2018-04-01', 2018, 34, 0, '10:00:00', '20:00:00', ''),
(185, 1, 10, '2018-04-01', 2018, 35, 0, '10:00:00', '20:00:00', ''),
(186, 1, 10, '2018-04-01', 2018, 36, 0, '10:00:00', '20:00:00', ''),
(187, 1, 10, '2018-04-01', 2018, 37, 0, '10:00:00', '20:00:00', ''),
(188, 1, 10, '2018-04-01', 2018, 38, 0, '10:00:00', '20:00:00', ''),
(189, 1, 10, '2018-04-01', 2018, 39, 0, '10:00:00', '20:00:00', ''),
(190, 1, 10, '2018-04-01', 2018, 40, 0, '10:00:00', '20:00:00', ''),
(191, 1, 10, '2018-04-01', 2018, 41, 0, '10:00:00', '20:00:00', ''),
(192, 1, 10, '2018-04-01', 2018, 42, 0, '10:00:00', '20:00:00', ''),
(193, 1, 10, '2018-04-01', 2018, 43, 0, '10:00:00', '20:00:00', ''),
(194, 1, 11, '2018-04-28', 2018, 44, 0, '10:00:00', '20:00:00', ''),
(195, 1, 11, '2018-04-28', 2018, 45, 0, '10:00:00', '20:00:00', ''),
(196, 1, 11, '2018-04-28', 2018, 46, 0, '10:00:00', '20:00:00', ''),
(197, 1, 11, '2018-04-28', 2018, 47, 0, '10:00:00', '20:00:00', ''),
(198, 1, 11, '2018-04-28', 2018, 48, 0, '10:00:00', '20:00:00', ''),
(199, 1, 11, '2018-04-28', 2018, 49, 0, '10:00:00', '20:00:00', ''),
(200, 1, 11, '2018-04-28', 2018, 50, 0, '10:00:00', '20:00:00', ''),
(201, 1, 11, '2018-04-28', 2018, 51, 0, '10:00:00', '20:00:00', ''),
(202, 1, 11, '2018-04-28', 2018, 52, 0, '10:00:00', '20:00:00', ''),
(203, 1, 11, '2018-04-28', 2018, 79, 0, '10:00:00', '20:00:00', ''),
(204, 1, 11, '2018-04-28', 2018, 80, 0, '10:00:00', '20:00:00', ''),
(205, 1, 11, '2018-04-28', 2018, 81, 0, '10:00:00', '20:00:00', ''),
(206, 1, 11, '2018-04-28', 2018, 82, 0, '10:00:00', '20:00:00', ''),
(207, 1, 11, '2018-04-28', 2018, 83, 0, '10:00:00', '20:00:00', ''),
(208, 1, 11, '2018-04-28', 2018, 84, 0, '10:00:00', '20:00:00', ''),
(209, 1, 11, '2018-04-28', 2018, 85, 0, '10:00:00', '20:00:00', ''),
(210, 1, 11, '2018-04-28', 2018, 86, 0, '10:00:00', '20:00:00', ''),
(211, 1, 11, '2018-04-28', 2018, 87, 0, '10:00:00', '20:00:00', ''),
(212, 1, 11, '2018-04-28', 2018, 88, 0, '10:00:00', '20:00:00', ''),
(213, 1, 11, '2018-04-28', 2018, 89, 0, '10:00:00', '20:00:00', ''),
(214, 1, 11, '2018-04-28', 2018, 90, 0, '10:00:00', '20:00:00', ''),
(215, 1, 11, '2018-04-28', 2018, 91, 0, '10:00:00', '20:00:00', ''),
(216, 1, 11, '2018-04-28', 2018, 92, 0, '10:00:00', '20:00:00', ''),
(217, 1, 10, '2018-04-08', 2018, 1, 0, '10:00:00', '18:00:00', ''),
(218, 1, 10, '2018-04-08', 2018, 2, 0, '10:00:00', '18:00:00', ''),
(219, 1, 10, '2018-04-08', 2018, 3, 0, '10:00:00', '18:00:00', ''),
(220, 1, 10, '2018-04-08', 2018, 4, 0, '10:00:00', '18:00:00', ''),
(221, 1, 10, '2018-04-08', 2018, 5, 0, '10:00:00', '18:00:00', ''),
(222, 1, 10, '2018-04-08', 2018, 6, 0, '10:00:00', '18:00:00', ''),
(223, 1, 10, '2018-04-08', 2018, 7, 0, '10:00:00', '18:00:00', ''),
(224, 1, 10, '2018-04-08', 2018, 8, 0, '10:00:00', '18:00:00', ''),
(225, 1, 10, '2018-04-08', 2018, 9, 0, '10:00:00', '18:00:00', ''),
(226, 1, 10, '2018-04-08', 2018, 10, 0, '10:00:00', '18:00:00', ''),
(227, 1, 10, '2018-04-08', 2018, 11, 0, '10:00:00', '18:00:00', ''),
(228, 1, 10, '2018-04-08', 2018, 12, 0, '10:00:00', '18:00:00', ''),
(229, 1, 10, '2018-04-08', 2018, 13, 0, '10:00:00', '18:00:00', ''),
(230, 1, 10, '2018-04-08', 2018, 14, 0, '10:00:00', '18:00:00', ''),
(231, 1, 10, '2018-04-08', 2018, 15, 0, '10:00:00', '18:00:00', ''),
(232, 1, 10, '2018-04-08', 2018, 16, 0, '10:00:00', '18:00:00', ''),
(233, 1, 10, '2018-04-08', 2018, 17, 0, '10:00:00', '18:00:00', ''),
(234, 1, 10, '2018-04-08', 2018, 18, 0, '10:00:00', '18:00:00', ''),
(235, 1, 10, '2018-04-08', 2018, 19, 0, '10:00:00', '18:00:00', ''),
(236, 1, 10, '2018-04-08', 2018, 20, 0, '10:00:00', '18:00:00', ''),
(237, 1, 10, '2018-04-08', 2018, 21, 0, '10:00:00', '18:00:00', ''),
(238, 1, 10, '2018-04-08', 2018, 22, 0, '10:00:00', '18:00:00', ''),
(239, 1, 10, '2018-04-08', 2018, 23, 0, '10:00:00', '18:00:00', ''),
(240, 1, 10, '2018-04-08', 2018, 24, 0, '10:00:00', '18:00:00', ''),
(241, 1, 10, '2018-04-08', 2018, 25, 0, '10:00:00', '18:00:00', ''),
(242, 1, 10, '2018-04-08', 2018, 26, 0, '10:00:00', '18:00:00', ''),
(243, 1, 10, '2018-04-08', 2018, 27, 0, '10:00:00', '18:00:00', ''),
(244, 1, 10, '2018-04-08', 2018, 28, 0, '10:00:00', '18:00:00', ''),
(245, 1, 10, '2018-04-08', 2018, 29, 0, '10:00:00', '18:00:00', ''),
(246, 1, 10, '2018-04-08', 2018, 30, 0, '10:00:00', '18:00:00', ''),
(247, 1, 10, '2018-04-08', 2018, 31, 0, '10:00:00', '18:00:00', ''),
(248, 1, 10, '2018-04-08', 2018, 32, 0, '10:00:00', '18:00:00', ''),
(249, 1, 10, '2018-04-08', 2018, 33, 0, '10:00:00', '18:00:00', ''),
(250, 1, 10, '2018-04-08', 2018, 34, 0, '10:00:00', '18:00:00', ''),
(251, 1, 10, '2018-04-08', 2018, 35, 0, '10:00:00', '18:00:00', ''),
(252, 1, 10, '2018-04-08', 2018, 36, 0, '10:00:00', '18:00:00', ''),
(253, 1, 10, '2018-04-08', 2018, 37, 0, '10:00:00', '18:00:00', ''),
(254, 1, 10, '2018-04-08', 2018, 38, 0, '10:00:00', '18:00:00', ''),
(255, 1, 10, '2018-04-08', 2018, 39, 0, '10:00:00', '18:00:00', ''),
(256, 1, 10, '2018-04-08', 2018, 40, 0, '10:00:00', '18:00:00', ''),
(257, 1, 10, '2018-04-08', 2018, 41, 0, '10:00:00', '18:00:00', ''),
(258, 1, 10, '2018-04-08', 2018, 42, 0, '10:00:00', '18:00:00', ''),
(259, 1, 10, '2018-04-08', 2018, 43, 0, '10:00:00', '18:00:00', ''),
(260, 1, 10, '2018-04-08', 2018, 157, 0, '10:00:00', '18:00:00', ''),
(261, 1, 12, '2018-04-01', 2018, 53, 1, '10:00:00', '18:00:00', ''),
(262, 1, 12, '2018-04-01', 2018, 125, 3, '10:00:00', '18:00:00', ''),
(263, 1, 12, '2018-04-01', 2018, 126, 1, '10:00:00', '18:00:00', ''),
(264, 1, 12, '2018-04-01', 2018, 127, 1, '10:00:00', '18:00:00', ''),
(265, 1, 12, '2018-04-01', 2018, 128, 1, '10:00:00', '18:00:00', ''),
(266, 1, 12, '2018-04-01', 2018, 129, 1, '10:00:00', '18:00:00', ''),
(267, 1, 12, '2018-04-01', 2018, 130, 0, '10:00:00', '18:00:00', ''),
(268, 1, 12, '2018-04-01', 2018, 131, 0, '10:00:00', '18:00:00', ''),
(269, 1, 12, '2018-04-01', 2018, 132, 0, '10:00:00', '18:00:00', ''),
(270, 1, 12, '2018-04-01', 2018, 148, 0, '10:00:00', '18:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `holi_id` int(11) NOT NULL,
  `holi_reason` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `holi_start_month` int(11) NOT NULL,
  `holi_start_year` int(11) NOT NULL,
  `holi_end_month` int(11) NOT NULL,
  `holi_end_year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`holi_id`, `holi_reason`, `start_date`, `end_date`, `holi_start_month`, `holi_start_year`, `holi_end_month`, `holi_end_year`) VALUES
(14, 'Strike', '2018-03-31', '2019-06-03', 3, 2018, 0, 0),
(13, 'Strike', '2018-04-21', '2018-04-22', 4, 2018, 0, 0),
(12, 'Diwali', '2018-03-01', '2018-03-16', 3, 2018, 0, 0),
(15, 'Diwali', '2018-03-01', '2018-03-16', 3, 2018, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `loc_id` int(11) NOT NULL,
  `loc_name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`loc_id`, `loc_name`) VALUES
(10, 'Bangalore'),
(11, 'Chennai HP'),
(12, 'Kottayam'),
(13, 'Calicut'),
(14, 'Cochin'),
(15, 'TVM'),
(16, 'Trichur'),
(17, 'Chennai HP'),
(18, 'Coimbatore'),
(19, 'Kerala');

-- --------------------------------------------------------

--
-- Table structure for table `salary_emp_slip`
--

CREATE TABLE `salary_emp_slip` (
  `sal_id` int(200) NOT NULL,
  `emp_id` int(200) NOT NULL,
  `pf` int(200) NOT NULL,
  `prof_tax` int(200) NOT NULL,
  `basic` int(200) NOT NULL,
  `allowance` int(200) NOT NULL,
  `earnings` int(200) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `sal_status` int(11) NOT NULL,
  `hra` int(30) NOT NULL,
  `esic` int(30) NOT NULL,
  `deductions` int(30) DEFAULT NULL,
  `net_pay` int(30) DEFAULT NULL,
  `travel` int(30) DEFAULT NULL,
  `net_transfer` int(30) DEFAULT NULL,
  `special_allowance` int(30) DEFAULT NULL,
  `paid_days` int(30) NOT NULL,
  `leave_days` int(30) NOT NULL,
  `half_days` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_emp_slip`
--

INSERT INTO `salary_emp_slip` (`sal_id`, `emp_id`, `pf`, `prof_tax`, `basic`, `allowance`, `earnings`, `start_date`, `end_date`, `sal_status`, `hra`, `esic`, `deductions`, `net_pay`, `travel`, `net_transfer`, `special_allowance`, `paid_days`, `leave_days`, `half_days`) VALUES
(110, 53, 618, 0, 5150, 800, 9790, '2018-04-01', '2018-04-30', 1, 1545, 171, 789, 9001, 0, 9001, 2295, 0, 0, 0),
(109, 140, 0, 0, 0, 0, NULL, '2018-04-01', '2018-04-30', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(108, 5, 0, 0, 0, 0, NULL, '2018-04-01', '2018-04-30', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(107, 3, 0, 0, 0, 0, NULL, '2018-04-01', '2018-04-30', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(106, 15, 0, 0, 0, 0, NULL, '2018-04-01', '2018-04-30', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(105, 15, 0, 0, 0, 0, NULL, '2018-04-01', '2018-05-31', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(104, 15, 1000, 400, 8333, 0, 600, '2018-04-01', '2018-04-30', 1, 2500, 11, 1411, -811, 500, -311, -10233, 0, 0, 0),
(103, 8, 0, 0, 0, 0, NULL, '2018-04-01', '2018-04-30', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(102, 8, 618, 0, 5150, 800, 9790, '2018-03-01', '2018-04-30', 1, 1545, 171, 789, 9001, 0, 9001, 2295, 0, 0, 1),
(111, 46, 0, 0, 0, 0, NULL, '2018-04-01', '2018-04-01', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(112, 1, 0, 0, 0, 0, NULL, '2018-01-01', '2018-04-08', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(113, 53, 0, 0, 0, 0, NULL, '2018-04-01', '2018-04-30', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(114, 1, 0, 0, 0, 0, NULL, '2018-04-01', '2018-04-30', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(115, 1, 0, 0, 0, 0, NULL, '2018-04-01', '2018-04-30', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(116, 1, 0, 0, 0, 0, NULL, '2018-01-01', '2018-05-07', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(117, 1, 0, 0, 0, 0, NULL, '2017-09-15', '2017-10-15', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(118, 157, 618, 0, 5150, 800, 9790, '2018-04-01', '2018-04-30', 1, 1545, 171, 789, 9001, 0, 9001, 2295, 0, 0, 0),
(119, 44, 0, 0, 5000, 0, 0, '2018-04-01', '2018-04-30', 2, 0, 0, 0, 0, 0, 0, 0, 10, 10, 20),
(120, 44, 0, 0, 0, 0, NULL, '2018-04-01', '2018-04-30', 2, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`desig_id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `emp-one`
--
ALTER TABLE `emp-one`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `emp_attendance`
--
ALTER TABLE `emp_attendance`
  ADD PRIMARY KEY (`attId`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`holi_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `salary_emp_slip`
--
ALTER TABLE `salary_emp_slip`
  ADD PRIMARY KEY (`sal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `desig_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT for table `emp-one`
--
ALTER TABLE `emp-one`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
--
-- AUTO_INCREMENT for table `emp_attendance`
--
ALTER TABLE `emp_attendance`
  MODIFY `attId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;
--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `holi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `salary_emp_slip`
--
ALTER TABLE `salary_emp_slip`
  MODIFY `sal_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

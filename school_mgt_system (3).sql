-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2018 at 04:11 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_mgt_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `class` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`, `class`) VALUES
(1, 'Chapter 02 groups.pdf', '2018-12-23 11:36:23', '1', ''),
(2, 'Chapter 02 groups.pdf', '2018-12-23 11:39:12', '1', ''),
(3, 'Chapter 02 groups.pdf', '2018-12-23 11:41:38', '1', ''),
(4, 'raww.jpeg', '2018-12-23 12:21:47', '1', '6'),
(5, 'raww.jpeg', '2018-12-27 13:00:26', '1', '6');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `school_name` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `index_no` varchar(255) NOT NULL,
  `sinhala` varchar(255) NOT NULL,
  `buddhism` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  `mathematics` varchar(255) NOT NULL,
  `science` varchar(255) NOT NULL,
  `history` varchar(255) NOT NULL,
  `group_01` varchar(255) NOT NULL,
  `group_02` varchar(255) NOT NULL,
  `group_03` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(7, 'raww13.jpeg', '2018-11-26 10:38:04', '1'),
(8, '05.NFAtoDFAConversion.pdf', '2018-12-22 13:41:22', '1'),
(9, '02.Premineries (1).pdf', '2018-12-23 21:30:44', '1');

-- --------------------------------------------------------

--
-- Table structure for table `principals_info`
--

CREATE TABLE `principals_info` (
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `class` varchar(30) NOT NULL,
  `telephone` int(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `age` int(30) NOT NULL,
  `pro_pic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `principals_info`
--

INSERT INTO `principals_info` (`username`, `email`, `address`, `class`, `telephone`, `gender`, `age`, `pro_pic`) VALUES
('587412368v', 'amara@gmail.com', '17/c,horana,colombo', 'primary', 123654789, 'male', 50, 'images/pro_pic.png'),
('88', 'amara@gmail.com', '17/imbulana,dehiwala', '0', 778943570, 'female', 52, 'images/pro_pic.png'),
('898123988v', 'saman@gmail.com', '19/s,deniyaya,matara', '0', 14785236, 'male', 45, 'images/pro_pic.png');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `username` varchar(20) NOT NULL,
  `email` varchar(15) DEFAULT NULL,
  `address` varchar(12) DEFAULT NULL,
  `class` varchar(100) DEFAULT NULL,
  `telephone` varchar(8) DEFAULT NULL,
  `gender` varchar(40) NOT NULL,
  `age` int(30) NOT NULL,
  `pro_pic` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`username`, `email`, `address`, `class`, `telephone`, `gender`, `age`, `pro_pic`) VALUES
('147', '147@g.com', 'wcwecwcc', '5', '01478953', 'female', 0, 'images/p'),
('456', '456@gmail.com', 'ubbwIC', '8', '48787', 'female', 13, 'images/p'),
('555', 'cd@gmail.com', '', '', '', '', 0, 'images/p'),
('5558', 'vfsg@gmail.xfb', 'sxdbfn', '5', '8494942', 'female', 6, 'images/p'),
('741', 'jew@gmail.com', 'nuwara,kalaw', '8', '07789631', 'female', 0, 'images/p'),
('789', NULL, NULL, NULL, NULL, '', 0, NULL),
('888', '88@gmail.com', '17/c,dibbedd', '9', '07789435', 'female', 14, 'images/p'),
('amara', NULL, NULL, NULL, NULL, '', 0, NULL),
('damith', '', '', '', '', '', 0, ''),
('dinithi', '', '', '', '', '', 0, ''),
('hadhi', '', '', '', '', '', 0, 'Male'),
('himansa', '', '', '', '', '', 0, 'Male'),
('Omal', '', '', '', '', '', 0, ''),
('rin', NULL, NULL, NULL, NULL, '', 0, NULL),
('sammani', NULL, NULL, NULL, NULL, '', 0, NULL),
('shika', '961245784v', '+9456686562', 'Ane manda', 'Single', '', 0, 'Female'),
('sumudu', NULL, NULL, NULL, NULL, '', 0, NULL),
('therese', '', '', '', '', '', 0, 'Female'),
('thisura', '', '', '', '', '', 0, ''),
('ucsc', '552654545v', '+94712466468', 'Reid Avenue, Colombo 7', 'Married', '', 0, 'Male'),
('vinuri', '956123452v', '+9404654213', 'Kurunegala', 'Single', '', 0, 'Female'),
('yasara', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_info`
--

CREATE TABLE `teachers_info` (
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `class` varchar(15) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `pro_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_info`
--

INSERT INTO `teachers_info` (`username`, `email`, `address`, `class`, `telephone`, `gender`, `age`, `pro_pic`) VALUES
('958232322V', 'amara@gmail.com', 'dfvgbhj', '8', '01122377', 'female', '25', 'images/pro_pic.png'),
('hirdaramani', 'Hirdaramani Group', '', '', 'images/propic/hirdaramani.png', 'Manufacturing', '', ''),
('mas', 'MAS Holdings (Pvt) Ltd', '', '', 'images/propic/mas.png', '', '', ''),
('prima', 'Prima Group', '', '', 'images/propic/prima.png', 'Manufacturing', '', ''),
('ucsc_company', 'UCSC Company Account', '', '', 'images/propic/ucsc_company.jpg', '', '', ''),
('virtusa', 'Virtusa', '', '', 'images/propic/virtusa.png', 'IT', '', ''),
('wso2', 'WSO2', '20, Palm Grove,\r\nColombo 3', 'PV/1325/RG', 'images/propic/wso2.jpg', 'IT', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` date NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `username` varchar(20) NOT NULL,
  `pw` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`username`, `pw`, `type`, `email`) VALUES
('000001', 'b59c67bf196a4758191e42f76670ceba', 1, ''),
('0001', '81dc9bdb52d04dc20036dbd8313ed055', 1, ''),
('0002', '81dc9bdb52d04dc20036dbd8313ed055', 2, ''),
('0008', 'cf79ae6addba60ad018347359bd144d2', 1, ''),
('0009', 'fa246d0262c3925617b0c72bb20eeb1d', 1, ''),
('0123', '202cb962ac59075b964b07152d234b70', 1, ''),
('111', 'b59c67bf196a4758191e42f76670ceba', 1, ''),
('114', '5fd0b37cd7dbbb00f97ba6ce92bf5add', 1, ''),
('147', '8d5e957f297893487bd98fa830fa6413', 1, ''),
('222', 'bcbe3365e6ac95ea2c0343a2395834dd', 1, ''),
('333', '2be9bd7a3434f7038ca27d1918de58bd', 1, ''),
('456', '250cf8b51c773f3f8dc8b4be867a9a02', 1, ''),
('555', '15de21c670ae7c3f6f3f1f37029303c9', 1, ''),
('5558', 'fa246d0262c3925617b0c72bb20eeb1d', 1, ''),
('587412368v', '66f041e16a60928b05a7e228a89c3799', 4, ''),
('666', 'b706835de79a2b4e80506f582af3676a', 1, ''),
('741', '2e65f2f2fdaf6c699b223c61b1b5ab89', 1, ''),
('744', '698d51a19d8a121ce581499d7b701668', 1, ''),
('77', '28dd2c7955ce926456240b2ff0100bde', 1, ''),
('7777', '698d51a19d8a121ce581499d7b701668', 1, ''),
('789', '827ccb0eea8a706c4c34a16891f84e7b', 1, ''),
('88', '6512bd43d9caa6e02c990b0a82652dca', 4, ''),
('888', '0a113ef6b61820daa5611c870ed8d5ee', 1, ''),
('89', '7647966b7343c29048673252e490f736', 4, ''),
('898123988v', '7647966b7343c29048673252e490f736', 4, ''),
('958232322V', '812b4ba287f5ee0bc9d43bbf5bbe87fb', 2, ''),
('975100545v', 'e10adc3949ba59abbe56e057f20f883e', 2, ''),
('975100546v', '900150983cd24fb0d6963f7d28e17f72', 2, ''),
('975100547v', '4a7d1ed414474e4033ac29ccb8653d9b', 2, ''),
('999', 'b706835de79a2b4e80506f582af3676a', 1, ''),
('abc', '25d55ad283aa400af464c76d713c07ad', 2, ''),
('admin', '827ccb0eea8a706c4c34a16891f84e7b', 3, ''),
('amara', 'd79c8788088c2193f0244d8f1f36d2db', 1, ''),
('damith', '827ccb0eea8a706c4c34a16891f84e7b', 1, ''),
('dinithi', '827ccb0eea8a706c4c34a16891f84e7b', 1, ''),
('hadhi', '827ccb0eea8a706c4c34a16891f84e7b', 1, ''),
('harshani', '827ccb0eea8a706c4c34a16891f84e7b', 1, ''),
('himansa', '827ccb0eea8a706c4c34a16891f84e7b', 1, ''),
('hirdaramani', '827ccb0eea8a706c4c34a16891f84e7b', 2, ''),
('mas', '827ccb0eea8a706c4c34a16891f84e7b', 2, ''),
('prima', '827ccb0eea8a706c4c34a16891f84e7b', 2, ''),
('rin', 'b59c67bf196a4758191e42f76670ceba', 1, ''),
('sammani', 'e10adc3949ba59abbe56e057f20f883e', 1, 'sammani@gmail.com'),
('shika', '827ccb0eea8a706c4c34a16891f84e7b', 1, ''),
('sumudu', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'sumudu@gmail.com'),
('therese', '827ccb0eea8a706c4c34a16891f84e7b', 1, ''),
('thisura', '827ccb0eea8a706c4c34a16891f84e7b', 1, ''),
('ucsc', 'd32934b31349d77e70957e057b1bcd28', 1, ''),
('ucsc_admin', 'd32934b31349d77e70957e057b1bcd28', 3, ''),
('ucsc_company', 'd32934b31349d77e70957e057b1bcd28', 2, ''),
('vinuri', '827ccb0eea8a706c4c34a16891f84e7b', 1, ''),
('virtusa', '827ccb0eea8a706c4c34a16891f84e7b', 2, ''),
('wso2', '827ccb0eea8a706c4c34a16891f84e7b', 2, ''),
('yasara', '827ccb0eea8a706c4c34a16891f84e7b', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `principals_info`
--
ALTER TABLE `principals_info`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `teachers_info`
--
ALTER TABLE `teachers_info`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

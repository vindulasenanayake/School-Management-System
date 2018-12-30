-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 06:54 AM
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
-- Table structure for table `client_contact`
--

CREATE TABLE `client_contact` (
  `username` varchar(20) NOT NULL,
  `cont_name` varchar(50) NOT NULL,
  `cont_tele` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_contact`
--

INSERT INTO `client_contact` (`username`, `cont_name`, `cont_tele`, `email`) VALUES
('88', '', '', 'amara@gmail.com'),
('958232322V', '', '', 'amara@gmail.com'),
('975100545v', '', '', 'dtf@gmail.com'),
('975100546v', '', '', 'ddfg@gmail.com'),
('975100547v', '', '', 'ggh@gmail.com'),
('abc', '', '', 'abc@gmail.com'),
('hirdaramani', '', '', 'careers@hirdaramani.com'),
('mas', '', '', 'talent2o_support@masholdings.com'),
('prima', '', '', 'help@prima.com.lk'),
('ucsc_company', '', '', 'ucsc@ucsc.cmb.ac.lk'),
('virtusa', '', '', 'careers@virtusa.lk'),
('wso2', 'Help Desk', '+94112145345', 'help@wso2.lk');

-- --------------------------------------------------------

--
-- Table structure for table `client_job_vc`
--

CREATE TABLE `client_job_vc` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `function` varchar(50) NOT NULL,
  `job_desc` varchar(1024) DEFAULT NULL,
  `req` varchar(1024) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `ad` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_job_vc`
--

INSERT INTO `client_job_vc` (`id`, `username`, `title`, `function`, `job_desc`, `req`, `photo`, `ad`) VALUES
(1, 'wso2', 'Software Engineer', 'IT', 'Do you get a thrill out of watching software unfold before your eyes? We are looking for top-notch Software Engineers who would see technical glitches as an enjoyable challenge and are willing to walk the extra mile to see a project through to completion.', 'Fresh graduate with BSc in Computer Science/Engineering or Equivalent or with a minimum of 1-2 years industry experience\r\nStrong development skills and proficiency in at least one programming language\r\nHaving experience in Java, C# or C/C++ will be an added advantage\r\nStrong analytical skills\r\nExperience and knowledge on Distributed Systems are an added advantage', 'images/categories/IT.jpg', 'images/ad/wso21556156715.jpg'),
(2, 'wso2', 'Technical Writer', 'IT', 'We are looking for a technical writer who can write documentation and training content for system administrators, data integration engineers, application developers, and end users. \r\n', 'Outstanding English language skills\r\nPreferably three (3) or more years experience as a full-time technical writer, documenting large, complex software applications, but we will consider junior applicants with high potential\r\nMust be highly self-motivated and work like an investigative journalist, doing what it takes to get the story with minimum support\r\nThorough knowledge or keen desire to learn best practices and methodologies for creating documentation\r\nExcellent copy-editing skills', 'images/categories/IT.jpg', 'images/ad/wso21578260460.jpg'),
(3, 'hirdaramani', 'Merchandiser', 'Sales and Distribution', 'The Hirdaramani Group is looking for an experienced individual with strong communication and organizational skills to take on the role of Merchandiser within the Knit Cluster.', 'Degree or Equivalent qualification from a reputed Institution\r\nMinimum 2 years experience\r\nExcellent written & spoken English capabilities', 'images/categories/sales.jpg', 'images/ad/hirdaramani690227532.png'),
(4, 'mas', 'Fabric Technologist', 'Production', 'Be actively involved in raw material development & sourcing to meet customer expectations while maximizing company profitability. Develop and maintain close working relationships with raw material manufacturers and suppliers while assessing, identifying and sorting out any issues before delivery.', 'A Degree/Higher National Diploma in Textile & Clothing Engineering or in any related field\r\n\r\n1-2  years of relevant work experience in Fabric Development & Sourcing in the apparel industry\r\n\r\nPossess excellent communication in English\r\n\r\nBasic spoken fluency in Chinese language would be an added advantage', 'images/categories/production.jpg', 'images/ad/mas614754457.jpg'),
(5, 'mas', 'Executive - Digital Entrepreneur', 'Marketing', 'You are required to assist in innovating marketable concepts based on emerging trends and deliver palpable business ideas for the business unit to convert them into investment-grade opportunities in line with the overall business strategy for the SBU.', 'A Degree in IT/Management/Marketing/Economics  or relevant field\r\n\r\n1-2 years of relevant work experience in the similar capacity with strong IT skills\r\n\r\nPossess strong communication, analytical & negotiation skills with up-to date knowledge on latest technological  advancements', 'images/categories/marketing.png', 'images/ad/mas1971870537.jpg'),
(9, 'mas', 'Assistant Manager', 'Production', 'Weâ€™re in search of an expert in the garment manufacturing field, an effective negotiator and a team player with excellent leadership skills, communication skills, analytical thinking and thriving for excellence and quality. ', 'Degree or equivalent professional qualifications in engineering, chemistry or sciences \r\n\r\nMinimum  â€“ 6 years of industry experience in a manufacturing environment preferably in the textile industry\r\n\r\nExcellent people management skills', 'images/categories/production.jpg', 'images/ad/mas2102078306.jpeg'),
(10, 'hirdaramani', 'Internship', 'Production', 'Hirdaramani welcomes the chance for students to learn from the expertise and experience of its talented employees, to be a part of daily operations and to acquire knowledge that will enable them to develop in the future.', 'If you have a passion for fashion, a story to convey, if you can keep up, and if you desire to play a role in something extraordinary, then you are the perfect candidate for the Hirdaramani Internship Program.', 'images/categories/production.jpg', ''),
(11, 'virtusa', 'Senior Architect - UI', 'IT', 'Coder with a heart', 'Java\r\nC++', 'images/categories/IT.jpg', ''),
(12, 'wso2', 'Senior Architect', 'IT', 'Come join us', 'Someone? Anyone?', 'images/categories/IT.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `cust_qual`
--

CREATE TABLE `cust_qual` (
  `username` varchar(20) NOT NULL,
  `work_xp` int(11) NOT NULL,
  `prv_emp` varchar(32) NOT NULL,
  `function` varchar(32) NOT NULL,
  `cv_path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_qual`
--

INSERT INTO `cust_qual` (`username`, `work_xp`, `prv_emp`, `function`, `cv_path`) VALUES
('000001', 0, '', '', 'cv/default.pdf'),
('0008', 0, '', '', 'cv/default.pdf'),
('0009', 0, '', '', 'cv/default.pdf'),
('0123', 0, '', '', 'cv/default.pdf'),
('111', 0, '', '', 'cv/default.pdf'),
('114', 0, '', '', 'cv/default.pdf'),
('147', 0, '', '', 'cv/default.pdf'),
('222', 0, '', '', 'cv/default.pdf'),
('333', 0, '', '', 'cv/default.pdf'),
('456', 0, '', '', 'cv/default.pdf'),
('555', 0, '', '', 'cv/default.pdf'),
('5558', 0, '', '', 'cv/default.pdf'),
('666', 0, '', '', 'cv/default.pdf'),
('741', 0, '', '', 'cv/default.pdf'),
('744', 0, '', '', 'cv/default.pdf'),
('77', 0, '', '', 'cv/default.pdf'),
('7777', 0, '', '', 'cv/default.pdf'),
('789', 0, '', '', 'cv/default.pdf'),
('888', 0, '', '', 'cv/default.pdf'),
('999', 0, '', '', 'cv/default.pdf'),
('amara', 0, '', '', 'cv/default.pdf'),
('damith', 0, '', 'Marketing', 'cv/default.pdf'),
('dinithi', 0, '', 'Accounting', 'cv/default.pdf'),
('hadhi', 0, '', 'Sales and Distribution', 'cv/default.pdf'),
('harshani', 0, '', 'Customer Support', 'cv/default.pdf'),
('himansa', 0, '', 'Customer Support', 'cv/default.pdf'),
('Omal', 0, '', 'Marketing', 'cv/default.pdf'),
('rin', 0, '', '', 'cv/default.pdf'),
('sammani', 0, '', '', 'cv/default.pdf'),
('shika', 2, 'WSO2', 'Marketing', 'cv/shika.pdf'),
('sumudu', 0, '', '', 'cv/default.pdf'),
('therese', 0, '', 'Sales and Distribution', 'cv/default.pdf'),
('thisura', 0, '', 'IT', 'cv/default.pdf'),
('ucsc', 3, 'WSO2', 'IT', 'cv/default.pdf'),
('vinuri', 5, 'Virtusa', 'R&D', 'cv/default.pdf'),
('yasara', 0, '', 'Production', 'cv/default.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `cust_qual_deg`
--

CREATE TABLE `cust_qual_deg` (
  `username` varchar(20) NOT NULL,
  `undergrad` varchar(5) NOT NULL,
  `ug_uni` varchar(32) NOT NULL,
  `postgrad` varchar(5) NOT NULL,
  `pg_uni` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_qual_deg`
--

INSERT INTO `cust_qual_deg` (`username`, `undergrad`, `ug_uni`, `postgrad`, `pg_uni`) VALUES
('000001', '', '', '', ''),
('0008', '', '', '', ''),
('0009', '', '', '', ''),
('0123', '', '', '', ''),
('111', '', '', '', ''),
('114', '', '', '', ''),
('147', '', '', '', ''),
('222', '', '', '', ''),
('333', '', '', '', ''),
('456', '', '', '', ''),
('555', '', '', '', ''),
('5558', '', '', '', ''),
('666', '', '', '', ''),
('741', '', '', '', ''),
('744', '', '', '', ''),
('77', '', '', '', ''),
('7777', '', '', '', ''),
('789', '', '', '', ''),
('888', '', '', '', ''),
('999', '', '', '', ''),
('amara', '', '', '', ''),
('damith', 'BSc', 'University of Colombo', 'PhD.', 'University of Colombo'),
('dinithi', 'BSc', 'University of Colombo', 'PhD.', 'University of Colombo'),
('hadhi', 'BSc', 'University of Colombo', 'MSc.', 'University of Colombo'),
('harshani', 'BSc', 'University of Colombo', 'PhD.', 'University of Colombo'),
('himansa', 'BSc', 'University of Colombo', 'PhD.', 'University of Colombo'),
('Omal', 'BSc', 'University of Colombo', 'PhD.', 'University of Colombo'),
('rin', '', '', '', ''),
('sammani', '', '', '', ''),
('shika', 'BSc', 'University of Colombo', 'PhD.', 'University of Colombo'),
('sumudu', '', '', '', ''),
('therese', 'BSc', 'University of Colombo', 'PhD.', 'University of Colombo'),
('thisura', 'BSc', 'University of Colombo', 'PhD.', 'University of Colombo'),
('ucsc', 'BSc', 'University of Colombo', 'PhD.', 'University of Colombo'),
('vinuri', 'BSc', 'University of Colombo', 'PhD.', 'Foreign University'),
('yasara', 'BSc', 'University of Colombo', 'PhD.', 'Foreign University');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'BiWeeklyReport-2018.pdf', '2018-11-01 16:08:14', '1'),
(2, 'image1.png', '2018-11-01 16:08:45', '1'),
(3, 'BiWeeklyReport-2018.pdf', '2018-11-01 16:09:37', '1'),
(4, '16001451.pdf', '2018-11-01 21:24:39', '1'),
(5, 'Takehome Assignment 2.pdf', '2018-11-25 09:51:30', '1'),
(6, 'syllabus.pdf', '2018-11-25 11:25:44', '1'),
(7, 'SCS2111_Lecture_5.pdf', '2018-11-26 10:19:39', '1'),
(8, 'image1.png', '2018-11-26 10:23:15', '1');

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
(7, 'raww13.jpeg', '2018-11-26 10:38:04', '1');

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
-- Indexes for table `client_contact`
--
ALTER TABLE `client_contact`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `client_job_vc`
--
ALTER TABLE `client_job_vc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cust_qual`
--
ALTER TABLE `cust_qual`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cust_qual_deg`
--
ALTER TABLE `cust_qual_deg`
  ADD PRIMARY KEY (`username`);

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
-- AUTO_INCREMENT for table `client_job_vc`
--
ALTER TABLE `client_job_vc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

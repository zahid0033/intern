-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2018 at 06:26 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL,
  `cMail` varchar(32) NOT NULL,
  `jobId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `cMail`, `jobId`) VALUES
(45, 'zaf@gmail.com', 2),
(53, 'zai@gmail.com', 4),
(59, 'zay@gmail.com', 4),
(60, 'zaz@gmail.com', 5),
(61, 'zaf@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `cMail` varchar(100) CHARACTER SET utf32 NOT NULL,
  `cPass` text CHARACTER SET utf32 NOT NULL,
  `cName` varchar(32) CHARACTER SET utf32 NOT NULL,
  `cGender` text CHARACTER SET utf32 NOT NULL,
  `cMobile` int(11) NOT NULL,
  `cSkill` text CHARACTER SET utf32,
  `cLogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cLogout` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cLastActivity` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cId` int(11) NOT NULL,
  `cDegree` varchar(32) NOT NULL,
  `cPresentAdd` text NOT NULL,
  `cPermanentAdd` text NOT NULL,
  `cDob` time NOT NULL,
  `cDeleteDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`cMail`, `cPass`, `cName`, `cGender`, `cMobile`, `cSkill`, `cLogin`, `cLogout`, `cLastActivity`, `cId`, `cDegree`, `cPresentAdd`, `cPermanentAdd`, `cDob`, `cDeleteDate`) VALUES
('asieb.hasan.supto@gmail.com', '慳????????', '?????????', '????', 0, '????????', '2018-08-19 18:42:35', '2018-08-15 18:00:00', '0000-00-00 00:00:00', 1, '', '', '', '00:00:00', NULL),
('zaz@gmail.com', '321', 'qwe', 'male', 1521434247, 'java', '2018-08-22 20:28:57', '2018-08-22 20:28:57', '2018-08-22 20:28:56', 2, '', '', '', '00:00:00', NULL),
('zaf@gmail.com', '321', 'shakil', 'male', 1521434247, 'java.php', '2018-08-22 20:27:50', '2018-08-22 20:27:50', '2018-08-22 20:27:50', 3, 'BSC in CSE', 'banasree dhaka', 'comilla adda bazar', '18:12:12', NULL),
('zay@gmail.com', '321', 'qwe', 'male', 1521434247, 'laravel,php', '2018-08-19 18:42:35', '2018-08-13 16:18:19', '2018-08-13 16:18:19', 4, 'java', 'banasree rampura dhaka', 'ksjdjks sdsjds sjdksjd', '19:09:09', NULL),
('zai@gmail.com', '321', 'shakib', 'male', 1521434247, 'java', '2018-08-22 20:20:50', '2018-08-22 20:20:50', '2018-08-22 20:20:50', 5, 'PHD', 'banasree dhaka', 'banasree dhakabanasree dhakabanasree dhaka', '22:17:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `compId` int(11) NOT NULL,
  `empId` int(11) NOT NULL,
  `compName` text NOT NULL,
  `compAddress` text NOT NULL,
  `compWebLink` text,
  `compType` varchar(32) NOT NULL,
  `compDeleteDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`compId`, `empId`, `compName`, `compAddress`, `compWebLink`, `compType`, `compDeleteDate`) VALUES
(1, 0, 'Agrani Bank', 'Motijheel Dhaka', 'https://www.youtube.com/', 'Business', NULL),
(2, 0, 'Cloud Software Solution Ltd', 'Banasree Dhaka', 'http://jobs.bdjobs.com/jobsearch.asp?fcatId=5&icatId=', 'startup', NULL),
(3, 0, 'loud Software Solution Ltd', 'Mirpur 10,Dhaka', 'https://www.w3schools.com/bootstrap/bootstrap_jumbotron_header.asp', 'Employee', NULL),
(4, 1, 'Raven System Ltd ( A Sister Conc', 'mugdapara Dhaka', 'https://github.com/zahid0033/intern', 'Business', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `eId` int(11) NOT NULL,
  `eName` varchar(30) NOT NULL,
  `ePass` varchar(100) NOT NULL,
  `eCompId` int(11) NOT NULL,
  `eDesignation` text NOT NULL,
  `eMobile` int(11) NOT NULL,
  `eMail` text NOT NULL,
  `ePosition` text NOT NULL,
  `eDescription` text NOT NULL,
  `eDob` date NOT NULL,
  `eDeleteDate` date DEFAULT NULL,
  `eLogin` date NOT NULL,
  `eLogout` date NOT NULL,
  `eLastActivity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`eId`, `eName`, `ePass`, `eCompId`, `eDesignation`, `eMobile`, `eMail`, `ePosition`, `eDescription`, `eDob`, `eDeleteDate`, `eLogin`, `eLogout`, `eLastActivity`) VALUES
(1, 'hasib', '321', 1, 'CEO', 125454545, 'zaz@yahoo.com', 'ceo', 'dfdf d dfdf', '0000-00-00', NULL, '0000-00-00', '2018-08-23', '2018-08-22 20:32:00'),
(2, 'shakil', '321', 2, 'manager', 1521121212, 'yay@gmail.com', 'manager', 'ksdkjs sdnksj ndsj', '2017-08-14', NULL, '0000-00-00', '2018-08-11', '2018-08-19 17:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `empId` int(11) NOT NULL,
  `companyName` varchar(32) NOT NULL,
  `vacancy` varchar(10) NOT NULL,
  `context` text NOT NULL,
  `description` text NOT NULL,
  `empStatus` varchar(10) NOT NULL,
  `eduRequirement` text NOT NULL,
  `expRequirement` text NOT NULL,
  `addRequirement` text NOT NULL,
  `jobLocation` text NOT NULL,
  `salary` int(10) NOT NULL,
  `degree` varchar(32) NOT NULL,
  `browseCatg` varchar(32) NOT NULL,
  `postTime` date NOT NULL,
  `expDate` date DEFAULT NULL,
  `deletedAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`id`, `title`, `empId`, `companyName`, `vacancy`, `context`, `description`, `empStatus`, `eduRequirement`, `expRequirement`, `addRequirement`, `jobLocation`, `salary`, `degree`, `browseCatg`, `postTime`, `expDate`, `deletedAt`) VALUES
(1, 'C# developer needed', 1, 'Agrani Bank', '6', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type ', 'Lorem Ipsum is simply dummy text of the printing an a galley of type a', 'Full time', 'Diploma in Mechatronics, Electronics, Power, Mechanical & Electrical Engineering from any recognized Institution.', 'at least 5 years', '\r\nAge at most 28 years\r\nOnly males are allowed to apply\r\nFresher/2 year\'s relevant job experiences are preferable.\r\n', 'Chittagong', 10000, 'MBBS', 'IT/Telecommunication', '2018-08-06', '2018-08-24', NULL),
(2, 'Web Developer ( PHP , WordPress )', 1, 'Cloud Software Solution Ltd', '6', '\r\n    Convert Dynamic Layout from PSD to HTML5 for WordPress Theme and Plugin Development.\r\n    Have to develop theme short-code in Elementor page builder.\r\n    Have to develop theme feature from design to functionality for WordPress theme\r\n    Have to develop plugin for WordPress\r\n', 'Convert Dynamic Layout from PSD to HTML5 for WordPress Theme and Plugin Development.\r\nHave to develop theme short-code in Elementor page builder. ', 'Half time', '\r\n    Bachelor of Science (BSc) in CSE\r\n    University of Dhaka,Bangladesh University of Engineering and Technology,Shahjalal University of Science & Technology,Military Institute of Science and Technology (MIST),Ahsanullah University of Science and Technology students will get preference\r\n    Skills Required: MySQL,JavaScript,PHP,WordPress,HTML5 & CSS3\r\n', '\r\n    At least 2 year(s)\r\n    The applicants should have experience in the following area(s):\r\n    Web Developer/ Web Designer, UX Designer, HTML & CSS\r\n    Freshers are also encouraged to apply.\r\n', 'NA', 'Dhaka', 40000, 'BSC', 'IT/Telecommunication', '2018-08-06', '2018-08-15', NULL),
(3, 'Senior UX/UI Designer', 1, 'Cloud Software Solution Ltd', '4', 'Have to design PSD web Template - Sample for clear under', 'Have to design PSD web Template - Sample for clear understanding https://dribbble.com/search?q=web+template\r\nHave to design Web Application UI - Sample for clear understanding https://dribbble.com/search?q=Web+Application\r\nHave to design company Brochure & Printing Elements\r\nHave to help others team member to prepare sales presentation and product documentation. ', 'Half time', '\r\n    Bachelor degree in any discipline\r\n    Skills Required: Adobe Photoshop/ Illustrator\r\n', 'At least 3 year(s)\r\nThe applicants should have experience in the following area(s):\r\nGraphic Designer, UX Designer, UI Design', 'Age 25 to 40 years\r\nBoth males and females are allowed to apply\r\nMust be energetic, able to work under pressure and meet deadlines', 'Dhaka', 10000, 'Masters', 'NGO/Development', '2018-08-06', '2018-08-21', NULL),
(4, 'Software Engineer (.NET)', 2, 'Raven System Ltd ( A Sister Conc', '4', 'Require 2 years of experienced Full Stack .NET developer with strong knowledge in HTML-5, CSS-3, JavaScript, Bootstrap, jQuery, one of any JavaScript either Angular or React.JS', 'Require 2 years of experienced Full Stack .NET developer with strong knowledge in HTML-5, CSS-3, JavaScript, Bootstrap, jQuery, one of any JavaScript either Angular or React.JS', 'Full time', 'B.Sc in CSE from a reputed university', 'At least 1 year(s)', 'NA', 'Dhaka', 40000, 'Bachelor', 'IT/Telecommunication', '2018-08-08', '2018-08-29', NULL),
(5, 'NGO Worker needed', 1, 'loud Software Solution Ltd', '7', 'Require 2 years of experienced Full Stack .NET developer with strong knowledge in HTML-5, CSS-3, JavaScript, Bootstrap, jQuery, one of any JavaScript either Angular or React.JS', 'Require 2 years of experienced Full Stack .NET developer with strong knowledge in HTML-5, CSS-3, JavaScript, Bootstrap, jQuery, one of any JavaScript either Angular or React.JS', 'Half time', 'B.Sc in CSE from a reputed university', 'At least 1 year(s)', 'NA', 'Comilla', 20000, 'BSC in CSE', 'NGO/Development', '2018-08-09', '2018-08-30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`cId`),
  ADD UNIQUE KEY `Email` (`cMail`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`compId`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`eId`),
  ADD KEY `comId` (`eCompId`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `compId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `eId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employer`
--
ALTER TABLE `employer`
  ADD CONSTRAINT `employer_ibfk_1` FOREIGN KEY (`eCompId`) REFERENCES `company` (`compId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

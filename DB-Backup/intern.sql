-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 09:47 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(200) NOT NULL,
  `aemail` varchar(200) NOT NULL,
  `apass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `aemail`, `apass`) VALUES
(1, 'zahid', 'qwe@gmail.com', '321');

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
(60, 'zaz@gmail.com', 5),
(61, 'zaf@gmail.com', 1),
(62, 'zai@gmail.com', 5),
(63, 'zai@gmail.com', 3),
(65, 'zaz@gmail.com', 2),
(66, 'zaz@gmail.com', 8),
(70, 'zay@gmail.com', 9),
(71, 'zay@gmail.com', 1),
(72, 'zay@gmail.com', 5),
(73, 'zai@gmail.com', 9),
(74, 'zaz@gmail.com', 3),
(75, 'm@gmail.com', 9),
(76, 'm@gmail.com', 2),
(77, 'm@gmail.com', 3),
(78, 'zaf@gmail.com', 9),
(80, 'zaf@gmail.com', 7),
(81, 'zaf@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `cMail` varchar(100) CHARACTER SET utf32 NOT NULL,
  `cPass` text CHARACTER SET utf32 NOT NULL,
  `cName` varchar(32) CHARACTER SET utf32 NOT NULL,
  `cImage` varchar(200) NOT NULL,
  `cGender` text CHARACTER SET utf32 NOT NULL,
  `cMobile` varchar(200) DEFAULT NULL,
  `cSkill` text CHARACTER SET utf32,
  `cPreviousExp` text NOT NULL,
  `cLogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cLogout` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cLastActivity` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cId` int(11) NOT NULL,
  `cDegree` varchar(32) NOT NULL,
  `cPresentAdd` text NOT NULL,
  `cPermanentAdd` text NOT NULL,
  `cDob` varchar(32) NOT NULL,
  `cDeleteDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`cMail`, `cPass`, `cName`, `cImage`, `cGender`, `cMobile`, `cSkill`, `cPreviousExp`, `cLogin`, `cLogout`, `cLastActivity`, `cId`, `cDegree`, `cPresentAdd`, `cPermanentAdd`, `cDob`, `cDeleteDate`) VALUES
('asieb.hasan.supto@gmail.com', '慳????????', '?????????', '', '????', '0', '????????', '', '2018-08-26 04:50:35', '2018-08-15 18:00:00', '0000-00-00 00:00:00', 1, '', '', '', '00:00:00', '2018-08-26 04:50:35'),
('zaz@gmail.com', '321', 'Zahid', 'bookss.jpg', 'male', '01521434247', 'Laravel,PHP,nodeJs', 'Worked as a web developer', '2018-09-03 21:32:40', '2018-09-03 21:32:40', '2018-09-03 21:32:40', 2, 'B.S.C in CSE', 'Bansree,Rampura Dhaka', 'Comilla ', '30/06/1997', NULL),
('zaf@gmail.com', '321', 'shakil', 'foot.jpg', 'male', '1521434247', '', '', '2018-09-04 06:54:22', '2018-09-04 06:54:22', '2018-09-04 06:54:22', 3, 'BSC in CSE', 'banasree dhaka', 'comilla adda bazar', '18:12:12', NULL),
('zay@gmail.com', '321', 'shakil', 'foot.jpg', 'female', '01521434247', 'laravel,php', 'Worked in GrameenPhone', '2018-09-04 00:24:31', '2018-09-04 00:24:31', '2018-09-04 00:24:31', 4, 'java', 'banasree rampura dhaka', 'ksjdjks sdsjds sjdksjd', '23/05/1995', NULL),
('zai@gmail.com', '321', 'shakib', 'foot.jpg', 'male', '0152143424', 'java,php', 'Worked in an IT firm', '2018-09-03 21:02:52', '2018-09-03 21:02:52', '2018-09-03 21:02:52', 5, 'BSC', 'banasree dhaka', 'Comilla banasree dhaka', '23/05/1995', NULL),
('m@gmail.com', '123456', 'moyeen', 'background_log.png', 'Male ', '01521434247', 'j', 'N/A', '2018-09-04 04:20:09', '2018-09-04 04:20:09', '2018-09-04 04:20:08', 6, 'Cse', 'bashundhara', 'bashundhara', '2018-09-13', NULL);

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
(1, 0, 'Agrani Bank', 'Motijheel Dhaka,Bangladesh', 'https://www.youtube.com/', 'Business', NULL),
(2, 0, 'Cloud Software Solution Ltd', 'Banasree Dhaka', 'https://www.youtube.com/watch?v=mDotS5BDqRM', 'startup', NULL),
(3, 0, 'loud Software Solution Ltd', 'Mirpur 10,Dhaka', 'https://www.w3schools.com/bootstrap/bootstrap_jumbotron_header.asp', 'Employee', NULL),
(4, 1, 'Raven System Ltd ( A Sister Conc', 'mugdapara Dhaka', 'https://github.com/zahid0033/intern', 'Business', NULL),
(5, 4, 'Amazon', 'bashundhara', 'https://pastebin.com/wMLFw0tW', 'Business ', NULL),
(6, 5, 'Alibaba', 'banasree', 'https://www.google.com/search?client=firefox-b-ab&biw', 'Business ', NULL),
(7, 6, 'hotel', 'dhaka', 'www.hotel.com', 'Business ', NULL);

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
(1, 'Hasib', '321', 1, 'CEO', 125454, 'zaz@yahoo.com', 'manager', 'dfdf d dfdf', '0000-00-00', NULL, '0000-00-00', '2018-09-02', '2018-09-02 19:23:45'),
(2, 'Shakil', '321', 2, 'manager', 1521121212, 'yay@gmail.com', 'manager', 'ksdkjs sdnksj ndsj', '2017-08-14', NULL, '0000-00-00', '2018-09-04', '2018-09-04 19:47:59'),
(4, 'moyeen', '123456', 5, 'ceo', 1521434247, 'moyeen@gmail.com', 'moyeen', 'aks;jhkas jkjbhdsa ', '2018-09-12', '0000-00-00', '0000-00-00', '0000-00-00', '2018-09-04 03:19:46'),
(5, 'himel', '123456', 6, 'manager', 1521434247, 'himel@gmail.com', 'himel', 'shuasb shbdj', '2018-09-18', '0000-00-00', '0000-00-00', '0000-00-00', '2018-09-04 03:23:01'),
(6, 'parvez', '123123', 7, 'ceo', 1521434247, 'p@gmail.com', 'parvez', 'qds dsf asdfasdfasdf', '2018-09-26', '0000-00-00', '0000-00-00', '0000-00-00', '2018-09-04 03:25:11');

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
(4, 'Software Engineer (.NET)', 2, 'Raven System Ltd ( A Sister Conc', '4', 'Require 2 years of experienced Full Stack .NET developer with strong knowledge in HTML-5, CSS-3, JavaScript, Bootstrap, jQuery, one of any JavaScript either Angular or React.JS', 'Require 2 years of experienced Full Stack .NET developer with strong knowledge in HTML-5, CSS-3, JavaScript, Bootstrap, jQuery, one of any JavaScript either Angular or React.JS', 'Full time', 'B.Sc in CSE from a reputed university', 'At least 1 year(s)', 'NA', 'Dhaka', 40000, 'Bachelor', 'IT/Telecommunication', '2018-08-08', '2018-08-29', '2018-09-03 09:07:56'),
(5, 'NGO Worker needed', 1, 'loud Software Solution Ltd', '7', 'Require 2 years of experienced Full Stack .NET developer with strong knowledge in HTML-5, CSS-3, JavaScript, Bootstrap, jQuery, one of any JavaScript either Angular or React.JS', 'Require 2 years of experienced Full Stack .NET developer with strong knowledge in HTML-5, CSS-3, JavaScript, Bootstrap, jQuery, one of any JavaScript either Angular or React.JS', 'Half time', 'B.Sc in CSE from a reputed university', 'At least 1 year(s)', 'NA', 'Comilla', 20000, 'BSC in CSE', 'NGO/Development', '2018-08-09', '2018-08-30', NULL),
(7, 'Manager - Store/ Inventory', 2, 'Cloud Software Solution Ltd', '4', 'Coordinate with procurement/merchandising team and suppliers to receive the products on time. Check and Validate that all the products received from vendors or suppliers ', 'Coordinate with procurement/merchandising team and suppliers to receive the products on time. Check and Validate that all the products received from vendors or suppliers are in good condition and Make sure that all the documents related to receiving procedure i.e. Challan, invoice etc. are properly checked and signed Verify that the product description i.e. materials specification, grade, quantity etc. of PO/Challan are identical with the physical product ', 'Full-time', 'Master of Commerce (MCom)', 'At least 7 year(s)     The applicants should have experience in the following area(s):     Store     The applicants should have experience in the following business area(s):     Garments', 'N/A', '<br />\r\n<b>Notice</b>:  Array to string conversion in <b>D:SoftXampphtdocsInternjob_edit.php</b> on line <b>142</b><br />\r\nArray', 10000, 'Master of Commerce (MCom)', 'Education/Training', '2018-09-02', '2018-08-24', NULL),
(8, 'Sr. Executive/Asst. Manager-IE & Planning', 2, 'Cloud Software Solution Ltd', '6', 'Coordination (Planning-Cutting-Production-Sample-Store-Merchandising) Reporting (MIS-Monthly Reporting-Down time Reporting) Analysis, problem identify and find out solution to continuous improvement. Prepare project for reducing cost and increase Efficiency. Standardize every steps of work in the manufacturing processes.', 'Coordination (Planning-Cutting-Production-Sample-Store-Merchandising) Reporting (MIS-Monthly Reporting-Down time Reporting) Analysis, problem identify and find out solution to continuous improvement. Prepare project for reducing cost and increase Efficiency. Standardize every steps of work in the manufacturing processes.', 'Full-time', 'Bachelor of Science (BSc) ', '5 to 7 year(s)', 'N/A', 'Khulna', 20000, 'Bachelor of Science (BSc) ', 'Garments/Textile', '2018-09-02', '2018-08-24', NULL),
(9, 'Sales Executive', 1, 'Agrani Bank', '5', 'Creating PNR, issuing and reissuing, refund ticket using GDS (Abacus, Amadeus, Galileo) â€¢ Sales & Marketing (Reservation, Visa Processing, Tour Packages) ', 'Creating PNR, issuing and reissuing, refund ticket using GDS (Abacus, Amadeus, Galileo)\r\nâ€¢ Sales & Marketing (Reservation, Visa Processing, Tour Packages) ', 'Full-time', 'Bachelor degree in any discipline (Marketing & Sales)', '2 to 3 year(s) The applicants should have experience in the following area(s): Reservation/ Ticketing', '2 to 3 year(s) The applicants should have experience in the following area(s): Reservation/ Ticketing', 'Khulna', 20000, 'Bachelor degree in any disciplin', 'Hospitality/ Travel/ Tourism', '2018-09-02', '2018-08-25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `compId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `eId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

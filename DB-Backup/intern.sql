-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2018 at 01:52 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `Email` varchar(100) NOT NULL,
  `Password` text NOT NULL,
  `Name` text NOT NULL,
  `Gender` text NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Skill` text NOT NULL,
  `Login` date NOT NULL,
  `Logout` date NOT NULL,
  `ID` int(11) NOT NULL,
  `deleteDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`Email`, `Password`, `Name`, `Gender`, `Mobile`, `Skill`, `Login`, `Logout`, `ID`, `deleteDate`) VALUES
('asieb.hasan.supto@gmail.com', 'asieb00145', 'asieb hasan', 'male', 0, 'no skill', '2018-08-16', '2018-08-16', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `comId` int(11) NOT NULL,
  `compName` text NOT NULL,
  `compAddress` text NOT NULL,
  `webLink` text NOT NULL,
  `type` text NOT NULL,
  `deleteDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `userName` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `comId` int(11) NOT NULL,
  `designation` text NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` text NOT NULL,
  `position` text NOT NULL,
  `description` text NOT NULL,
  `deleteDate` date NOT NULL,
  `login` date NOT NULL,
  `logout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `Id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `vacancy` varchar(10) NOT NULL,
  `context` text NOT NULL,
  `discription` text NOT NULL,
  `empStatus` varchar(10) NOT NULL,
  `eduRequirement` text NOT NULL,
  `expRequirement` text NOT NULL,
  `addRequirement` text NOT NULL,
  `jobLocation` text NOT NULL,
  `Salary` int(10) NOT NULL,
  `deleteDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`comId`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD KEY `comId` (`comId`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `comId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employer`
--
ALTER TABLE `employer`
  ADD CONSTRAINT `employer_ibfk_1` FOREIGN KEY (`comId`) REFERENCES `company` (`comId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

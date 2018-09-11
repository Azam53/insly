-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2018 at 03:24 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.1.20-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insly2`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeeInfo`
--

CREATE TABLE `employeeInfo` (
  `ssnID` int(11) NOT NULL,
  `name` text NOT NULL,
  `birthdate` text NOT NULL,
  `isEmployee` enum('Yes','NO') NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `intro` text NOT NULL,
  `prevExprience` text NOT NULL,
  `educationInfo` text NOT NULL,
  `createdBy` text NOT NULL,
  `updatedBy` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeeInfo`
--

INSERT INTO `employeeInfo` (`ssnID`, `name`, `birthdate`, `isEmployee`, `email`, `phone`, `address`, `intro`, `prevExprience`, `educationInfo`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`) VALUES
(1, 'Tom Bill', '30-08-1990', 'Yes', 'tom.bill@info.com', '7078345690', 'Lootsa,Tallinn Estonia', 'I am Tom having 10 years of exprience in Administration.', 'I have 2 years exprience working with XYZ Firm', 'Bachelors in IT', 'Admin', '', '2018-09-08 09:34:04', '');

-- --------------------------------------------------------

--
-- Table structure for table `employeeLanguages`
--

CREATE TABLE `employeeLanguages` (
  `id` int(11) NOT NULL,
  `ssnID` int(11) DEFAULT NULL,
  `languageId` int(11) DEFAULT NULL,
  `intro` text NOT NULL,
  `prevExprience` text,
  `educationInfo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeeLanguages`
--

INSERT INTO `employeeLanguages` (`id`, `ssnID`, `languageId`, `intro`, `prevExprience`, `educationInfo`) VALUES
(1, 1, 2, 'Soy Tom con 10 años de experiencia en administración.', 'Tengo 2 años de experiencia trabajando con XYZ Firm', 'Solteros en TI'),
(2, 1, 3, 'Je suis Tom ayant 10 ans d\'expérience en administration.', 'J\'ai 2 ans d\'expérience avec XYZ Firm', 'Baccalauréat en informatique');

-- --------------------------------------------------------

--
-- Table structure for table `langauges`
--

CREATE TABLE `langauges` (
  `languageId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `langauges`
--

INSERT INTO `langauges` (`languageId`, `name`) VALUES
(1, 'en'),
(2, 'es'),
(3, 'fr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeeInfo`
--
ALTER TABLE `employeeInfo`
  ADD PRIMARY KEY (`ssnID`);

--
-- Indexes for table `employeeLanguages`
--
ALTER TABLE `employeeLanguages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `langauges`
--
ALTER TABLE `langauges`
  ADD PRIMARY KEY (`languageId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeeInfo`
--
ALTER TABLE `employeeInfo`
  MODIFY `ssnID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `langauges`
--
ALTER TABLE `langauges`
  MODIFY `languageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

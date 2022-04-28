-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 03:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cemeterymappingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumber`
--

CREATE TABLE `tblautonumber` (
  `ID` int(11) NOT NULL,
  `AUTOSTART` varchar(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOKEY` varchar(12) NOT NULL,
  `AUTONUM` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumber`
--

INSERT INTO `tblautonumber` (`ID`, `AUTOSTART`, `AUTOINC`, `AUTOEND`, `AUTOKEY`, `AUTONUM`) VALUES
(1, '2018', 1, 40, 'PEOPLEID', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `CATEGID` int(11) NOT NULL,
  `CATEGORIES` varchar(255) NOT NULL,
  `USERID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`CATEGID`, `CATEGORIES`, `USERID`) VALUES
(17, 'A', 0),
(18, 'B', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcoordinates`
--

CREATE TABLE `tblcoordinates` (
  `IDNUMBER` int(20) NOT NULL,
  `LATITUDE` varchar(90) NOT NULL,
  `LONGITUDE` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcoordinates`
--

INSERT INTO `tblcoordinates` (`IDNUMBER`, `LATITUDE`, `LONGITUDE`) VALUES
(1, '14.064545', '120.632424');

-- --------------------------------------------------------

--
-- Table structure for table `tblpeople`
--

CREATE TABLE `tblpeople` (
  `PEOPLEID` int(11) NOT NULL,
  `GRAVENO` int(11) NOT NULL,
  `FNAME` varchar(90) NOT NULL,
  `BORNDATE` varchar(30) NOT NULL,
  `DIEDDATE` varchar(30) NOT NULL,
  `CATEGORIES` varchar(30) NOT NULL,
  `LOCATION` varchar(90) NOT NULL,
  `LATITUDE` varchar(90) NOT NULL,
  `LONGITUDE` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpeople`
--

INSERT INTO `tblpeople` (`PEOPLEID`, `GRAVENO`, `FNAME`, `BORNDATE`, `DIEDDATE`, `CATEGORIES`, `LOCATION`, `LATITUDE`, `LONGITUDE`) VALUES
(201839, 1, 'Jose Rizal', '11/11/2011', '02/22/2022', 'A', 'MUNICIPAL CEMETERY', '14.4198785', '120.8683769');

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `USERID` int(11) NOT NULL,
  `U_NAME` varchar(122) NOT NULL,
  `U_USERNAME` varchar(122) NOT NULL,
  `U_PASS` varchar(122) NOT NULL,
  `U_ROLE` varchar(30) NOT NULL,
  `USERIMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`USERID`, `U_NAME`, `U_USERNAME`, `U_PASS`, `U_ROLE`, `USERIMAGE`) VALUES
(126, 'Richelle Ramos', 'richelle', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'photos/admin2.jpg'),
(127, 'Jolina Cebeda', 'jolina', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'photos/admin3.jpg'),
(129, 'Lemar Buhay', 'lemar', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'photos/admin1.jpg'),
(130, 'staff', 'staff', '6ccb4b7c39a6e77f76ecfa935a855c6c46ad5611', 'Staff', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`CATEGID`);

--
-- Indexes for table `tblcoordinates`
--
ALTER TABLE `tblcoordinates`
  ADD PRIMARY KEY (`IDNUMBER`);

--
-- Indexes for table `tblpeople`
--
ALTER TABLE `tblpeople`
  ADD PRIMARY KEY (`PEOPLEID`);

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`USERID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `CATEGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblcoordinates`
--
ALTER TABLE `tblcoordinates`
  MODIFY `IDNUMBER` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpeople`
--
ALTER TABLE `tblpeople`
  MODIFY `PEOPLEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201840;

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

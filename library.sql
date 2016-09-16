-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 01:59 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Admin_id` varchar(7) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Library_id` varchar(10) NOT NULL,
  PRIMARY KEY (`Admin_id`),
  KEY `Library_id` (`Library_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Password`, `Library_id`) VALUES
('aam', 'aditi', 'ARG');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `Document_id` int(6) NOT NULL,
  `ISBN` varchar(10) NOT NULL,
  PRIMARY KEY (`Document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Document_id`, `ISBN`) VALUES
(212482, '9908'),
(474747, '2314'),
(549549, '235X'),
(555555, '2111'),
(632632, '579P'),
(929192, 'OLPW1'),
(939393, '532X');

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

CREATE TABLE IF NOT EXISTS `borrows` (
  `Bor_number` int(3) NOT NULL,
  `Card_no` int(5) NOT NULL,
  `Copy_no` int(2) NOT NULL,
  `Doc_id` int(6) NOT NULL,
  `Lib_id` varchar(10) NOT NULL,
  `bor_date` datetime NOT NULL,
  `ret_date` datetime NOT NULL,
  `Due_Date` datetime NOT NULL,
  `Fine` int(8) NOT NULL,
  PRIMARY KEY (`Bor_number`),
  KEY `Card_no` (`Card_no`),
  KEY `Doc_id` (`Doc_id`),
  KEY `Copy_no` (`Copy_no`),
  KEY `Lib_id` (`Lib_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrows`
--

INSERT INTO `borrows` (`Bor_number`, `Card_no`, `Copy_no`, `Doc_id`, `Lib_id`, `bor_date`, `ret_date`, `Due_Date`, `Fine`) VALUES
(0, 34343, 3, 555555, 'HCL', '2016-05-02 00:00:00', '2016-05-02 00:00:00', '2016-05-22 00:00:00', 0),
(107, 52525, 6, 632632, 'CHNC', '2016-04-09 00:00:00', '2016-04-29 00:00:00', '2016-04-29 00:00:00', 0),
(123, 52394, 1, 939393, 'NYC3', '2016-02-03 00:00:00', '2016-02-26 00:00:00', '2016-02-23 00:00:00', 60),
(128, 19347, 5, 549549, 'HCL', '2015-06-02 00:00:00', '2015-06-26 00:00:00', '2015-06-22 00:00:00', 80),
(201, 12345, 8, 212482, 'BPL', '2016-04-01 00:00:00', '2016-04-07 00:00:00', '2016-04-21 00:00:00', 0),
(259, 56783, 5, 939393, 'HCL', '2016-02-05 00:00:00', '2016-02-28 00:00:00', '2016-02-25 00:00:00', 60),
(275, 19347, 1, 212482, 'ARG', '2016-03-01 00:00:00', '2016-03-09 00:00:00', '2016-03-21 00:00:00', 0),
(312, 35612, 4, 929192, 'ARG', '2016-02-18 00:00:00', '2016-03-22 00:00:00', '2016-03-08 00:00:00', 280),
(333, 22222, 3, 555555, 'HCL', '2015-12-01 00:00:00', '2015-12-15 00:00:00', '2015-12-21 00:00:00', 0),
(354, 12345, 10, 549549, 'HCL', '2015-09-12 00:00:00', '2015-09-19 00:00:00', '2015-10-02 00:00:00', 0),
(367, 56783, 5, 555555, 'CHNC', '2016-03-01 00:00:00', '2016-03-26 00:00:00', '2016-03-21 00:00:00', 100),
(387, 10101, 1, 212482, 'ARG', '2016-03-03 00:00:00', '2016-03-11 00:00:00', '2016-03-23 00:00:00', 0),
(482, 56783, 3, 929192, 'NYC3', '2014-05-24 00:00:00', '2014-06-08 00:00:00', '2014-06-14 00:00:00', 0),
(485, 20202, 8, 212482, 'ARG', '2015-04-01 00:00:00', '2015-05-12 00:00:00', '2015-04-21 00:00:00', 420),
(508, 10101, 5, 939393, 'NYC3', '2014-10-24 00:00:00', '2014-11-23 00:00:00', '2014-11-13 00:00:00', 200),
(509, 35612, 8, 632632, 'ARG', '2014-09-04 00:00:00', '2014-09-28 00:00:00', '2014-09-24 00:00:00', 80),
(529, 56783, 4, 929192, 'CHNC', '2015-09-11 00:00:00', '2015-10-15 00:00:00', '2015-10-01 00:00:00', 280),
(567, 45454, 4, 929192, 'BPL', '2014-11-05 00:00:00', '2014-11-30 00:00:00', '2014-11-25 00:00:00', 100),
(666, 56783, 6, 632632, 'BPL', '2016-01-03 00:00:00', '2016-01-31 00:00:00', '2016-01-23 00:00:00', 160),
(764, 52394, 5, 939393, 'NYC3', '2015-06-09 00:00:00', '2015-06-11 00:00:00', '2015-06-29 00:00:00', 0),
(786, 22222, 8, 212482, 'ARG', '2013-01-11 00:00:00', '2013-01-31 00:00:00', '2013-01-31 00:00:00', 0),
(875, 20202, 8, 632632, 'ARG', '2016-04-16 00:00:00', '2016-04-23 00:00:00', '2016-05-06 00:00:00', 0),
(908, 23232, 3, 555555, 'HCL', '2013-09-04 00:00:00', '2013-09-19 00:00:00', '2013-09-24 00:00:00', 0),
(938, 90183, 8, 632632, 'BPL', '2015-06-02 00:00:00', '2015-06-27 00:00:00', '2015-06-22 00:00:00', 100),
(957, 90874, 5, 929192, 'NYC3', '2016-02-04 00:00:00', '2016-02-28 00:00:00', '2016-02-24 00:00:00', 80);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `Lib_id` varchar(10) NOT NULL,
  `Lib_name` varchar(20) NOT NULL,
  `Location` varchar(10) NOT NULL,
  PRIMARY KEY (`Lib_id`),
  KEY `Lib_id` (`Lib_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`Lib_id`, `Lib_name`, `Location`) VALUES
('ARG', 'ARLINGTON LIB', 'AR'),
('BPL', 'BOSTON LIB', 'BOSTON'),
('CHNC', 'CHARLOTTE LIB', 'NC'),
('HCL', 'HUSTON LIB', 'NJ'),
('HUL', 'HOUSTON LIB', 'HX'),
('NJJC', 'NJ LIB', 'NJ'),
('NJPAC', 'JERSEY LIB', 'NJ'),
('NWK', 'NJIT', 'NJ'),
('NYC3', 'NY LIB', 'NY'),
('NYPL', 'SYRACUSE LIB', 'NY');

-- --------------------------------------------------------

--
-- Table structure for table `copy`
--

CREATE TABLE IF NOT EXISTS `copy` (
  `Copy_no` int(2) NOT NULL,
  `Doc_id` int(6) NOT NULL,
  `Lib_id` varchar(10) NOT NULL,
  `Position` varchar(6) NOT NULL,
  PRIMARY KEY (`Copy_no`,`Doc_id`,`Lib_id`),
  KEY `Doc_id` (`Doc_id`),
  KEY `Lib_id` (`Lib_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `copy`
--

INSERT INTO `copy` (`Copy_no`, `Doc_id`, `Lib_id`, `Position`) VALUES
(1, 939393, 'NYC3', '001A03'),
(3, 555555, 'HCL', '350C23'),
(4, 929192, 'BPL', '342S15'),
(5, 939393, 'NYC3', '549D11'),
(6, 632632, 'CHNC', '001A03'),
(8, 212482, 'ARG', '350C23'),
(10, 549549, 'HCL', '450T42'),
(11, 632632, 'BPL', '555I55'),
(12, 667466, 'NWK', '890N12'),
(13, 667466, 'HUL', '125P09'),
(14, 929192, 'CHNC', '902H41'),
(15, 929192, 'ARG', '902H04');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `Doci_id` int(6) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Publisher_id` int(4) NOT NULL,
  PRIMARY KEY (`Doci_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`Doci_id`, `Title`, `Publisher_id`) VALUES
(212482, 'Animal Farm', 1528),
(474747, 'Holy Bible', 1611),
(549549, 'Romeo and Juliet', 1027),
(555555, 'The Republic', 4242),
(632632, 'Complete Works', 3242),
(667466, 'The Devine Comedy', 1611),
(684368, 'The Prince', 3242),
(786786, 'Lord of the rings', 6114),
(929192, 'Art of War', 4242),
(939393, 'Origin of Species', 4242);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE IF NOT EXISTS `publisher` (
  `Pub_id` int(4) NOT NULL,
  `PName` varchar(10) NOT NULL,
  `Pub_Address` varchar(50) NOT NULL,
  PRIMARY KEY (`Pub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`Pub_id`, `PName`, `Pub_Address`) VALUES
(1027, 'Sun Tzu', 'Japan'),
(1528, 'Homer', 'India'),
(1611, 'Karl max', 'Japan'),
(1717, 'Joseph', 'Germany'),
(2353, 'Isaac', 'Mexico'),
(2811, 'Martin', 'USA'),
(3242, 'William', 'Spain'),
(4242, 'Cahrles Da', 'london'),
(6114, 'Plato', 'China'),
(7781, 'Dante', 'Scotland');

-- --------------------------------------------------------

--
-- Table structure for table `reader`
--

CREATE TABLE IF NOT EXISTS `reader` (
  `Card_no` int(5) NOT NULL,
  `RType` varchar(20) NOT NULL,
  `RName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  PRIMARY KEY (`Card_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reader`
--

INSERT INTO `reader` (`Card_no`, `RType`, `RName`, `LName`, `Address`) VALUES
(10101, 'Student', 'James', 'Martin', 'Dallas'),
(12345, 'student', 'John', 'Snow', 'Newark'),
(19347, 'Student', 'Tulika', 'Harsulkar', 'Harrison'),
(20202, 'Staff', 'Harry', 'Potter', 'Stone'),
(22222, 'Staff', 'Alicia', 'Johnson', 'Houston'),
(23232, 'Student', 'Joice', 'Thakur', 'NY'),
(34343, 'Staff', 'Ahmed', 'Rehman', 'Rice'),
(35612, 'Student', 'Shatakshi', 'Patil', 'Harrison'),
(45454, 'Other', 'Jenifer', 'Lopez', 'Texas'),
(52394, 'Senior Citizen', 'Frank', 'Churchill', 'Jersey City'),
(52525, 'Student', 'Ramesh', 'Mehta', 'Brooklyn'),
(56783, 'Student', 'Aditi', 'Mehta', 'Newark'),
(62670, 'Student', 'Dmitri', 'Therodatos', 'Paramus'),
(90183, 'Student', 'Ekta', 'Mangal', 'Jersey City'),
(90874, 'Student', 'Shraddha', 'Naik', 'Harrison'),
(92929, 'Student', 'Rob', 'Patel', 'Spring Field'),
(184574, 'Student', 'Randa', 'Aji', 'Paramus'),
(238419, 'Other', 'Ribal', 'Assaffin', 'Newark');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE IF NOT EXISTS `reserves` (
  `Res_no` int(7) NOT NULL AUTO_INCREMENT,
  `Card_no` int(5) NOT NULL,
  `Doc_id` int(6) NOT NULL,
  `Copy_no` int(2) NOT NULL,
  `Lib_id` varchar(10) NOT NULL,
  `ResTime` datetime NOT NULL,
  `ResStatus` varchar(20) NOT NULL,
  PRIMARY KEY (`Res_no`),
  KEY `Card_no` (`Card_no`),
  KEY `Lib_id` (`Lib_id`),
  KEY `Copy_no` (`Copy_no`),
  KEY `Doc_id` (`Doc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`Res_no`, `Card_no`, `Doc_id`, `Copy_no`, `Lib_id`, `ResTime`, `ResStatus`) VALUES
(1, 12345, 939393, 1, 'NYC3', '2016-01-12 00:00:00', 'Reserved'),
(2, 52394, 929192, 4, 'BPL', '2013-12-06 00:00:00', 'Returned'),
(3, 45454, 212482, 8, 'ARG', '2014-08-23 00:00:00', 'Returned'),
(4, 23232, 939393, 5, 'NYC3', '2016-04-23 00:00:00', 'Reserved'),
(5, 22222, 555555, 3, 'HCL', '2015-07-10 00:00:00', 'Returned'),
(6, 20202, 549549, 10, 'HCL', '2014-12-23 00:00:00', 'Reserved'),
(7, 22222, 939393, 1, 'NYC3', '2013-03-16 00:00:00', 'Returned'),
(9, 12345, 555555, 3, 'HCL', '2015-10-25 00:00:00', 'Returned'),
(10, 22222, 549549, 10, 'HCL', '2016-11-10 00:00:00', 'Reserved'),
(11, 92929, 632632, 6, 'CHNC', '2015-03-17 00:00:00', 'Returned'),
(12, 22222, 212482, 5, 'BPL', '2016-04-06 00:00:00', 'Reserved'),
(13, 45454, 212482, 8, 'NYC3', '2016-01-06 00:00:00', 'Returned'),
(14, 52394, 212482, 6, 'HCL', '2016-02-11 00:00:00', 'Reserved'),
(34, 34343, 555555, 3, 'HCL', '2016-05-02 14:02:07', 'Returned'),
(37, 10101, 212482, 8, 'ARG', '2016-05-02 18:00:09', 'Returned');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`Library_id`) REFERENCES `branch` (`Lib_id`);

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`Document_id`) REFERENCES `document` (`Doci_id`);

--
-- Constraints for table `borrows`
--
ALTER TABLE `borrows`
  ADD CONSTRAINT `borrows_ibfk_1` FOREIGN KEY (`Card_no`) REFERENCES `reader` (`Card_no`),
  ADD CONSTRAINT `borrows_ibfk_2` FOREIGN KEY (`Doc_id`) REFERENCES `copy` (`Doc_id`),
  ADD CONSTRAINT `borrows_ibfk_3` FOREIGN KEY (`Copy_no`) REFERENCES `copy` (`Copy_no`),
  ADD CONSTRAINT `borrows_ibfk_4` FOREIGN KEY (`Lib_id`) REFERENCES `copy` (`Lib_id`);

--
-- Constraints for table `copy`
--
ALTER TABLE `copy`
  ADD CONSTRAINT `copy_ibfk_2` FOREIGN KEY (`Lib_id`) REFERENCES `branch` (`Lib_id`),
  ADD CONSTRAINT `copy_ibfk_1` FOREIGN KEY (`Doc_id`) REFERENCES `document` (`Doci_id`);

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_ibfk_1` FOREIGN KEY (`Card_no`) REFERENCES `reader` (`Card_no`),
  ADD CONSTRAINT `reserves_ibfk_2` FOREIGN KEY (`Lib_id`) REFERENCES `copy` (`Lib_id`),
  ADD CONSTRAINT `reserves_ibfk_3` FOREIGN KEY (`Copy_no`) REFERENCES `copy` (`Copy_no`),
  ADD CONSTRAINT `reserves_ibfk_4` FOREIGN KEY (`Doc_id`) REFERENCES `copy` (`Doc_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

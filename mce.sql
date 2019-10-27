-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 09:06 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `adminID` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`adminID`, `email`, `password`) VALUES
(1, 'khan@gmail.com', 'khan'),
(2, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendancetable`
--

CREATE TABLE `attendancetable` (
  `id` int(11) NOT NULL,
  `empName` varchar(30) NOT NULL,
  `iqamaNo` varchar(30) NOT NULL,
  `passportNo` varchar(30) NOT NULL,
  `jobDesc` varchar(255) NOT NULL,
  `attendance_status` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendancetable`
--

INSERT INTO `attendancetable` (`id`, `empName`, `iqamaNo`, `passportNo`, `jobDesc`, `attendance_status`, `date`) VALUES
(1, 'Naveed Shehzad', 'B2605', '99N2P', 'Manager', 'Absent', '2019-10-03'),
(3, 'Hazratullah Khan', 'B2605', '77IX30', 'CEO', 'Present', '2019-10-03'),
(5, 'Kamran Khan', '13BSCSS', '99N2P', 'Computer Operator', 'Present', '2019-10-03'),
(7, 'Akram Syed', '999BEC', 'VXR879', 'Foreman', 'Present', '2019-10-03'),
(9, 'Bilal Ahmad', 'B2605', '9B341', 'Labour', 'Absent', '2019-10-03'),
(15, 'Hazratullah Khan', 'B2605', '77IX30', 'CEO', 'Present', '2019-10-04'),
(16, 'Naveed Shehzad', 'B2605', '99N2P', 'Manager', 'Absent', '2019-10-04'),
(17, 'Bilal Ahmad', 'B2605', '9B341', 'Labour', 'Present', '2019-10-04'),
(18, 'Akram Syed', '999BEC', 'VXR879', 'Foreman', 'Present', '2019-10-04'),
(19, 'Kamran Khan', '13BSCSS', '99N2P', 'Computer Operator', 'Absent', '2019-10-04'),
(20, 'Anwar Zaib', '999BEC', 'VXR879', 'Driver', 'Present', '2019-10-04'),
(54, 'Hazratullah Khan', 'B2605', '77IX30', 'CEO', 'Present', '2019-10-05'),
(55, 'Naveed Shehzad', 'B2605', '99N2P', 'Manager', 'Present', '2019-10-05'),
(56, 'Bilal Ahmad', 'B2605', '9B341', 'Labour', 'Present', '2019-10-05'),
(57, 'Akram Syed', '999BEC', 'VXR879', 'Foreman', 'Present', '2019-10-05'),
(58, 'Kamran Khan', '13BSCSS', '99N2P', 'Computer Operator', 'Present', '2019-10-05'),
(59, 'Anwar Zaib', '999BEC', 'VXR879', 'Driver', 'Present', '2019-10-05'),
(60, 'Dawood Ahmad', '13BSCSS', '77IX30', 'Driver', 'Present', '2019-10-05'),
(61, 'Sami Khan', '13BSCSS', '77IX30', 'Driver', 'Present', '2019-10-05'),
(62, 'Aman Khan', 'B2605', '99N2P', 'Manager', 'Present', '2019-10-05'),
(63, 'Sohail Khan', '13BSCSS', 'VXR879', 'Foreman', 'Present', '2019-10-05'),
(64, 'Noman Khan', '999BEC', '9B341', 'Computer Operator', 'Absent', '2019-10-05'),
(65, 'Hazratullah Khan', 'B2605', '77IX30', 'CEO', 'Present', '2019-10-06'),
(66, 'Naveed Shehzad', 'B2605', '99N2P', 'Manager', 'Absent', '2019-10-06'),
(67, 'Bilal Ahmad', 'B2605', '9B341', 'Labour', 'Absent', '2019-10-06'),
(68, 'Akram Syed', '999BEC', 'VXR879', 'Foreman', 'Absent', '2019-10-06'),
(69, 'Kamran Khan', '13BSCSS', '99N2P', 'Computer Operator', 'Present', '2019-10-06'),
(70, 'Anwar Zaib', '999BEC', 'VXR879', 'Driver', 'Present', '2019-10-06'),
(71, 'Dawood Ahmad', '13BSCSS', '77IX30', 'Driver', 'Present', '2019-10-06'),
(72, 'Sami Khan', '13BSCSS', '77IX30', 'Driver', 'Present', '2019-10-06'),
(73, 'Aman Khan', 'B2605', '99N2P', 'Manager', 'Absent', '2019-10-06'),
(74, 'Sohail Khan', '13BSCSS', 'VXR879', 'Foreman', 'Absent', '2019-10-06'),
(75, 'Noman Khan', '999BEC', '9B341', 'Computer Operator', 'Present', '2019-10-06'),
(76, '', '', '', '', 'Absent', '2019-10-07'),
(77, '', '', '', '', 'Absent', '2019-10-07'),
(78, '', '', '', '', 'Absent', '2019-10-07'),
(79, '', '', '', '', 'Absent', '2019-10-07'),
(80, '', '', '', '', 'Absent', '2019-10-07'),
(81, '', '', '', '', 'Absent', '2019-10-07'),
(82, '', '', '', '', 'Absent', '2019-10-07'),
(83, '', '', '', '', 'Absent', '2019-10-07'),
(84, '', '', '', '', 'Absent', '2019-10-07'),
(85, '', '', '', '', 'Absent', '2019-10-07'),
(86, '', '', '', '', 'Absent', '2019-10-07'),
(87, 'Hazratullah Khan', 'B2605', '77IX30', 'CEO', 'Present', '2019-10-08'),
(88, 'Naveed Shehzad', 'B2605', '99N2P', 'Manager', 'Absent', '2019-10-08'),
(89, 'Bilal Ahmad', 'B2605', '9B341', 'Labour', 'Present', '2019-10-08'),
(90, 'Akram Syed', '999BEC', 'VXR879', 'Foreman', 'Present', '2019-10-08'),
(91, 'Kamran Khan', '13BSCSS', '99N2P', 'Computer Operator', 'Present', '2019-10-08'),
(92, 'Anwar Zaib', '999BEC', 'VXR879', 'Driver', 'Present', '2019-10-08'),
(93, 'Dawood Ahmad', '13BSCSS', '77IX30', 'Driver', 'Present', '2019-10-08'),
(94, 'Sami Khan', '13BSCSS', '77IX30', 'Driver', 'Present', '2019-10-08'),
(95, 'Aman Khan', 'B2605', '99N2P', 'Manager', 'Present', '2019-10-08'),
(96, 'Sohail Khan', '13BSCSS', 'VXR879', 'Foreman', 'Absent', '2019-10-08'),
(97, 'Noman Khan', '999BEC', '9B341', 'Computer Operator', 'Absent', '2019-10-08'),
(98, 'Hazratullah Khan', 'B2605', '77IX30', 'CEO', 'Present', '2019-10-11'),
(99, 'Naveed Shehzad', 'B2605', '99N2P', 'Manager', 'Absent', '2019-10-11'),
(100, 'Bilal Ahmad', 'B2605', '9B341', 'Labour', 'Present', '2019-10-11'),
(101, 'Akram Syed', '999BEC', 'VXR879', 'Foreman', 'Absent', '2019-10-11'),
(102, 'Kamran Khan', '13BSCSS', '99N2P', 'Computer Operator', 'Present', '2019-10-11'),
(103, 'Anwar Zaib', '999BEC', 'VXR879', 'Driver', 'Present', '2019-10-11'),
(104, 'Dawood Ahmad', '13BSCSS', '77IX30', 'Driver', 'Present', '2019-10-11'),
(105, 'Sami Khan', '13BSCSS', '77IX30', 'Driver', 'Present', '2019-10-11'),
(106, 'Aman Khan', 'B2605', '99N2P', 'Manager', 'Present', '2019-10-11'),
(107, 'Sohail Khan', '13BSCSS', 'VXR879', 'Foreman', 'Present', '2019-10-11'),
(108, 'Noman Khan', '999BEC', '9B341', 'Computer Operator', 'Absent', '2019-10-11'),
(109, 'Naveed', '85BBC', 'VXR879', 'CEO', 'Present', '2019-10-11'),
(110, 'Hazratullah Khan', 'B2605', '77IX30', 'CEO', 'Present', '2019-10-17'),
(111, 'Naveed Shehzad', 'B2605', '99N2P', 'Manager', 'Present', '2019-10-17'),
(112, 'Bilal Ahmad', 'B2605', '9B341', 'Labour', 'Present', '2019-10-17'),
(113, 'Akram Syed', '999BEC', 'VXR879', 'Foreman', 'Present', '2019-10-17'),
(114, 'Kamran Khan', '13BSCSS', '99N2P', 'Computer Operator', 'Present', '2019-10-17'),
(115, 'Anwar Zaib', '999BEC', 'VXR879', 'Driver', 'Present', '2019-10-17'),
(116, 'Dawood Ahmad', '13BSCSS', '77IX30', 'Driver', 'Present', '2019-10-17'),
(117, 'Sami Khan', '13BSCSS', '77IX30', 'Driver', 'Present', '2019-10-17'),
(118, 'Aman Khan', 'B2605', '99N2P', 'Manager', 'Present', '2019-10-17'),
(119, 'Sohail Khan', '13BSCSS', 'VXR879', 'Foreman', 'Present', '2019-10-17'),
(120, 'Noman Khan', '999BEC', '9B341', 'Computer Operator', 'Present', '2019-10-17'),
(121, 'Naveed', '85BBC', 'VXR879', 'CEO', 'Absent', '2019-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `dailyworkusage`
--

CREATE TABLE `dailyworkusage` (
  `dailyID` int(11) NOT NULL,
  `projectID` int(11) NOT NULL,
  `ddescription` text NOT NULL,
  `Qty` float NOT NULL,
  `amountPerQty` int(11) NOT NULL,
  `totalPrice` float NOT NULL,
  `NoofLabors` int(11) NOT NULL,
  `ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dailyworkusage`
--

INSERT INTO `dailyworkusage` (`dailyID`, `projectID`, `ddescription`, `Qty`, `amountPerQty`, `totalPrice`, `NoofLabors`, `ddate`) VALUES
(6, 8, 'Cement', 13, 200, 2600, 10, '2019-09-05'),
(8, 8, 'Concrete', 100, 200, 20000, 10, '2019-09-05'),
(11, 9, 'Cement', 14, 200, 2800, 11, '2019-09-19'),
(12, 9, 'Concrete', 1000, 200, 200000, 20, '2019-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `employeetable`
--

CREATE TABLE `employeetable` (
  `empID` int(11) NOT NULL,
  `empName` varchar(30) NOT NULL,
  `iqamaNo` varchar(30) NOT NULL,
  `passportNo` varchar(30) NOT NULL,
  `jobDesc` varchar(255) NOT NULL,
  `Salary` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeetable`
--

INSERT INTO `employeetable` (`empID`, `empName`, `iqamaNo`, `passportNo`, `jobDesc`, `Salary`) VALUES
(13, 'Hazratullah Khan', 'B2605', '77IX30', 'CEO', 10000),
(15, 'Naveed Shehzad', 'B2605', '99N2P', 'Manager', 5000),
(16, 'Bilal Ahmad', 'B2605', '9B341', 'Labour', 1200),
(17, 'Akram Syed', '999BEC', 'VXR879', 'Foreman', 2500),
(18, 'Kamran Khan', '13BSCSS', '99N2P', 'Computer Operator', 5000),
(19, 'Anwar Zaib', '999BEC', 'VXR879', 'Driver', 2000),
(20, 'Dawood Ahmad', '13BSCSS', '77IX30', 'Driver', 2000),
(21, 'Sami Khan', '13BSCSS', '77IX30', 'Driver', 2000),
(22, 'Aman Khan', 'B2605', '99N2P', 'Manager', 2500),
(23, 'Sohail Khan', '13BSCSS', 'VXR879', 'Foreman', 2500),
(24, 'Noman Khan', '999BEC', '9B341', 'Computer Operator', 5000),
(25, 'Naveed', '85BBC', 'VXR879', 'CEO', 1800);

-- --------------------------------------------------------

--
-- Table structure for table `expensestable`
--

CREATE TABLE `expensestable` (
  `expenseID` int(11) NOT NULL,
  `description` text NOT NULL,
  `projectID` int(11) NOT NULL,
  `ebudget` float NOT NULL,
  `edate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expensestable`
--

INSERT INTO `expensestable` (`expenseID`, `description`, `projectID`, `ebudget`, `edate`) VALUES
(5, 'Vehicle Repairing', 8, 200, '2019-09-03'),
(6, 'Meal', 8, 150, '2019-09-20'),
(7, 'Stool', 8, 150, '2019-09-05'),
(8, 'Car fuel', 8, 50, '2019-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `overtimetable`
--

CREATE TABLE `overtimetable` (
  `overtimeID` int(11) NOT NULL,
  `projectID` int(11) NOT NULL,
  `empID` int(11) NOT NULL,
  `NoofHours` float NOT NULL,
  `amountPerHour` int(11) NOT NULL,
  `totalAmount` int(11) NOT NULL,
  `odate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overtimetable`
--

INSERT INTO `overtimetable` (`overtimeID`, `projectID`, `empID`, `NoofHours`, `amountPerHour`, `totalAmount`, `odate`) VALUES
(3, 9, 15, 3, 20, 60, '2019-09-25'),
(4, 8, 18, 7, 29, 203, '2019-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `projecttable`
--

CREATE TABLE `projecttable` (
  `projectID` int(11) NOT NULL,
  `projectDescription` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `budget` float NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projecttable`
--

INSERT INTO `projecttable` (`projectID`, `projectDescription`, `location`, `budget`, `date`, `status`) VALUES
(8, 'Road construction', 'Jiddah', 100000, '2019-08-23', 'Completed'),
(9, 'Building Repairing', 'Riyadh', 500000, '2019-08-14', 'Completed'),
(12, 'marble work', 'Al Qasim', 100000, '2019-10-23', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `toolstable`
--

CREATE TABLE `toolstable` (
  `toolsID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toolstable`
--

INSERT INTO `toolstable` (`toolsID`, `name`) VALUES
(3, 'Leader'),
(4, 'Stool');

-- --------------------------------------------------------

--
-- Table structure for table `vehicledetails`
--

CREATE TABLE `vehicledetails` (
  `vehID` int(11) NOT NULL,
  `empID` int(11) NOT NULL,
  `vehicleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicledetails`
--

INSERT INTO `vehicledetails` (`vehID`, `empID`, `vehicleID`) VALUES
(1, 13, 7),
(3, 13, 1),
(4, 19, 2);

-- --------------------------------------------------------

--
-- Table structure for table `vehicletable`
--

CREATE TABLE `vehicletable` (
  `vehicleID` int(11) NOT NULL,
  `vehicleName` varchar(30) NOT NULL,
  `vehicleNo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicletable`
--

INSERT INTO `vehicletable` (`vehicleID`, `vehicleName`, `vehicleNo`) VALUES
(1, 'Toyota', 'B3776'),
(2, 'Honda', '1947'),
(3, 'Honda', 'C7777');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `attendancetable`
--
ALTER TABLE `attendancetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dailyworkusage`
--
ALTER TABLE `dailyworkusage`
  ADD PRIMARY KEY (`dailyID`),
  ADD KEY `projectID` (`projectID`);

--
-- Indexes for table `employeetable`
--
ALTER TABLE `employeetable`
  ADD PRIMARY KEY (`empID`);

--
-- Indexes for table `expensestable`
--
ALTER TABLE `expensestable`
  ADD PRIMARY KEY (`expenseID`),
  ADD KEY `projectID` (`projectID`);

--
-- Indexes for table `overtimetable`
--
ALTER TABLE `overtimetable`
  ADD PRIMARY KEY (`overtimeID`),
  ADD KEY `projectID` (`projectID`,`empID`),
  ADD KEY `overtimetable_ibfk_1` (`empID`);

--
-- Indexes for table `projecttable`
--
ALTER TABLE `projecttable`
  ADD PRIMARY KEY (`projectID`);

--
-- Indexes for table `toolstable`
--
ALTER TABLE `toolstable`
  ADD PRIMARY KEY (`toolsID`);

--
-- Indexes for table `vehicledetails`
--
ALTER TABLE `vehicledetails`
  ADD PRIMARY KEY (`vehID`),
  ADD KEY `empID` (`empID`),
  ADD KEY `vehicleID` (`vehicleID`);

--
-- Indexes for table `vehicletable`
--
ALTER TABLE `vehicletable`
  ADD PRIMARY KEY (`vehicleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendancetable`
--
ALTER TABLE `attendancetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `dailyworkusage`
--
ALTER TABLE `dailyworkusage`
  MODIFY `dailyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employeetable`
--
ALTER TABLE `employeetable`
  MODIFY `empID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `expensestable`
--
ALTER TABLE `expensestable`
  MODIFY `expenseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `overtimetable`
--
ALTER TABLE `overtimetable`
  MODIFY `overtimeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projecttable`
--
ALTER TABLE `projecttable`
  MODIFY `projectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `toolstable`
--
ALTER TABLE `toolstable`
  MODIFY `toolsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicledetails`
--
ALTER TABLE `vehicledetails`
  MODIFY `vehID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicletable`
--
ALTER TABLE `vehicletable`
  MODIFY `vehicleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dailyworkusage`
--
ALTER TABLE `dailyworkusage`
  ADD CONSTRAINT `dailyworkusage_ibfk_1` FOREIGN KEY (`projectID`) REFERENCES `projecttable` (`projectID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `expensestable`
--
ALTER TABLE `expensestable`
  ADD CONSTRAINT `expensestable_ibfk_1` FOREIGN KEY (`projectID`) REFERENCES `projecttable` (`projectID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `overtimetable`
--
ALTER TABLE `overtimetable`
  ADD CONSTRAINT `overtimetable_ibfk_1` FOREIGN KEY (`empID`) REFERENCES `employeetable` (`empID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `overtimetable_ibfk_2` FOREIGN KEY (`projectID`) REFERENCES `projecttable` (`projectID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicledetails`
--
ALTER TABLE `vehicledetails`
  ADD CONSTRAINT `vehicledetails_ibfk_1` FOREIGN KEY (`empID`) REFERENCES `employeetable` (`empID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vehicledetails_ibfk_2` FOREIGN KEY (`vehicleID`) REFERENCES `vehicletable` (`vehicleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

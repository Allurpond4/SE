-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 12, 2019 at 07:32 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `apron`
--

CREATE TABLE `apron` (
  `ID_apron` int(11) NOT NULL,
  `Img_apron` varchar(100) DEFAULT NULL,
  `Name_apron` varchar(50) DEFAULT NULL,
  `Description_apron` varchar(500) DEFAULT NULL,
  `Color_apron` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hat`
--

CREATE TABLE `hat` (
  `ID_hat` int(11) NOT NULL,
  `Img_hat` varchar(100) DEFAULT NULL,
  `Name_hat` varchar(50) DEFAULT NULL,
  `Description_hat` varchar(500) DEFAULT NULL,
  `Color_hat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jacket`
--

CREATE TABLE `jacket` (
  `ID_jacket` int(11) NOT NULL,
  `Img_jacket` varchar(100) DEFAULT NULL,
  `Name_jacket` varchar(50) DEFAULT NULL,
  `Description_jacket` varchar(500) DEFAULT NULL,
  `Color_jacket` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `UserID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `FName` varchar(100) NOT NULL,
  `LName` varchar(100) NOT NULL,
  `type` enum('นักศึกษา','บุคลากรภายใน','บุคลากรภายนอก') NOT NULL,
  `department` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `Status` enum('ADMIN','USER') NOT NULL DEFAULT 'USER'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `Username`, `Password`, `title`, `FName`, `LName`, `type`, `department`, `email`, `phone`, `Status`) VALUES
(001, 'Benz', '123456', 'นาย', 'สุรพัศ', 'สุขสวัสดิ์', 'นักศึกษา', 'คณะครุศาสตร์อุตสาหกรรม', 's5902041610088@email.kmutnb.ac.th', '0874141491', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `pants`
--

CREATE TABLE `pants` (
  `ID_pants` int(11) NOT NULL,
  `Img_pants` varchar(100) DEFAULT NULL,
  `Name_pants` varchar(50) DEFAULT NULL,
  `Description_pants` varchar(500) DEFAULT NULL,
  `Color_pants` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `polo`
--

CREATE TABLE `polo` (
  `ID_polo` int(11) NOT NULL,
  `Img_polo` varchar(100) NOT NULL,
  `Name_polo` varchar(50) NOT NULL,
  `Description_polo` varchar(500) DEFAULT NULL,
  `Color_polo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `Number` int(15) NOT NULL,
  `Dates` date DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `Amount` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `vat` float DEFAULT NULL,
  `GrandTotal` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `ID_sport` int(11) NOT NULL,
  `Img_sport` varchar(100) DEFAULT NULL,
  `Name_sport` varchar(50) DEFAULT NULL,
  `Description_sport` varchar(500) DEFAULT NULL,
  `Color_sport` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `suits`
--

CREATE TABLE `suits` (
  `ID_Suits` int(11) NOT NULL,
  `Img_Suits` varchar(100) DEFAULT NULL,
  `Name_Suits` varchar(50) DEFAULT NULL,
  `Description_Suits` varchar(500) DEFAULT NULL,
  `Color_Suits` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tshirt`
--

CREATE TABLE `tshirt` (
  `ID_Tshirt` int(11) NOT NULL,
  `Img_Tshirt` varchar(100) DEFAULT NULL,
  `Name_Tshirt` varchar(50) DEFAULT NULL,
  `Description_Tshirt` varchar(500) DEFAULT NULL,
  `Color_Tshirt` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `umbrella`
--

CREATE TABLE `umbrella` (
  `ID_umbrella` int(11) NOT NULL,
  `Img_umbrella` varchar(100) DEFAULT NULL,
  `Name_umbrella` varchar(50) DEFAULT NULL,
  `Description_umbrella` varchar(500) DEFAULT NULL,
  `Color_umbrella` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apron`
--
ALTER TABLE `apron`
  ADD PRIMARY KEY (`ID_apron`),
  ADD UNIQUE KEY `ID_apron` (`ID_apron`);

--
-- Indexes for table `hat`
--
ALTER TABLE `hat`
  ADD PRIMARY KEY (`ID_hat`),
  ADD UNIQUE KEY `ID_hat` (`ID_hat`);

--
-- Indexes for table `jacket`
--
ALTER TABLE `jacket`
  ADD PRIMARY KEY (`ID_jacket`),
  ADD UNIQUE KEY `ID_jacket` (`ID_jacket`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `pants`
--
ALTER TABLE `pants`
  ADD PRIMARY KEY (`ID_pants`),
  ADD UNIQUE KEY `ID_pants` (`ID_pants`);

--
-- Indexes for table `polo`
--
ALTER TABLE `polo`
  ADD PRIMARY KEY (`ID_polo`),
  ADD UNIQUE KEY `ID_polo` (`ID_polo`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`Number`),
  ADD UNIQUE KEY `Number` (`Number`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`ID_sport`),
  ADD UNIQUE KEY `ID_sport` (`ID_sport`);

--
-- Indexes for table `suits`
--
ALTER TABLE `suits`
  ADD PRIMARY KEY (`ID_Suits`),
  ADD UNIQUE KEY `ID_Suits` (`ID_Suits`);

--
-- Indexes for table `tshirt`
--
ALTER TABLE `tshirt`
  ADD PRIMARY KEY (`ID_Tshirt`),
  ADD UNIQUE KEY `ID_Tshirt` (`ID_Tshirt`);

--
-- Indexes for table `umbrella`
--
ALTER TABLE `umbrella`
  ADD PRIMARY KEY (`ID_umbrella`),
  ADD UNIQUE KEY `ID_umbrella` (`ID_umbrella`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hat`
--
ALTER TABLE `hat`
  MODIFY `ID_hat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pants`
--
ALTER TABLE `pants`
  MODIFY `ID_pants` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `Number` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `ID_sport` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `suits`
--
ALTER TABLE `suits`
  MODIFY `ID_Suits` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tshirt`
--
ALTER TABLE `tshirt`
  MODIFY `ID_Tshirt` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `umbrella`
--
ALTER TABLE `umbrella`
  MODIFY `ID_umbrella` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

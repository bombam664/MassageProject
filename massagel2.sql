-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2020 at 09:51 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `massagel2`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(5) NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `Gender` varchar(5) COLLATE utf8mb4_bin NOT NULL,
  `Username` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Name`, `Gender`, `Username`, `Password`) VALUES
(1, 'pichayanach', 'หญิง', 'peach', '1234'),
(2, 'อทิพงศ์ งามนัก', 'ชาย', 'อทิพงศ์', '10831'),
(3, 'บอมเบล', 'ชาย', 'Athipong10831', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `data_sensor`
--

CREATE TABLE `data_sensor` (
  `SensorID` int(5) NOT NULL,
  `Sensor_name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `MachineID` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `LessonDID` int(5) NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `A_force` int(3) NOT NULL,
  `A_time` time NOT NULL,
  `Count_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `data_sensor`
--

INSERT INTO `data_sensor` (`SensorID`, `Sensor_name`, `MachineID`, `LessonDID`, `CustomerID`, `A_force`, `A_time`, `Count_time`) VALUES
(1, 'fsr1', 'MC001', 1, 2, 0, '00:00:00', '00:00:15'),
(3, 'fsr2', 'MC001', 3, 2, 0, '00:00:00', '00:00:15'),
(4, 'fsr3', 'MC001', 4, 2, 0, '00:00:00', '00:00:15'),
(5, 'fsr4', 'MC001', 5, 2, 0, '00:00:00', '00:00:15'),
(6, 'fsr5', 'MC001', 6, 2, 0, '00:00:00', '00:00:00'),
(19, 'fsr6', 'MC001', 7, 2, 0, '00:00:00', '00:00:00'),
(20, 'fsr7', 'MC001', 8, 2, 0, '00:00:00', '00:00:00'),
(21, 'fsr8', 'MC001', 9, 2, 0, '00:00:00', '00:00:00'),
(22, 'fsr9', 'MC001', 10, 2, 0, '00:00:00', '00:00:00'),
(23, 'fsr10', 'MC001', 11, 2, 0, '00:00:00', '00:00:00'),
(24, 'fsr11', 'MC001', 12, 2, 0, '00:00:00', '00:00:00'),
(25, 'fsr12', 'MC001', 13, 2, 0, '00:00:00', '00:00:00'),
(26, 'fsr13', 'MC001', 14, 2, 0, '00:00:00', '00:00:00'),
(27, 'fsr14', 'MC001', 15, 2, 0, '00:00:00', '00:00:00'),
(28, 'fsr15', 'MC001', 16, 2, 0, '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `enroll_lesson`
--

CREATE TABLE `enroll_lesson` (
  `EnrollID` int(5) NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `LessonID` int(5) NOT NULL,
  `Enroll_timestamp` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `enroll_lesson`
--

INSERT INTO `enroll_lesson` (`EnrollID`, `CustomerID`, `LessonID`, `Enroll_timestamp`) VALUES
(1, 2, 1, '0000-00-00 00:00:00'),
(3, 2, 1, '0000-00-00 00:00:00'),
(4, 2, 1, '0000-00-00 00:00:00'),
(5, 2, 1, '0000-00-00 00:00:00'),
(6, 2, 1, '0000-00-00 00:00:00'),
(7, 2, 1, '0000-00-00 00:00:00'),
(8, 2, 1, '0000-00-00 00:00:00'),
(9, 2, 1, '0000-00-00 00:00:00'),
(10, 2, 1, '0000-00-00 00:00:00'),
(11, 2, 1, '0000-00-00 00:00:00'),
(12, 2, 1, '0000-00-00 00:00:00'),
(13, 2, 1, '0000-00-00 00:00:00'),
(14, 2, 1, '0000-00-00 00:00:00'),
(15, 2, 3, '0000-00-00 00:00:00'),
(16, 2, 1, '0000-00-00 00:00:00'),
(17, 2, 1, '0000-00-00 00:00:00'),
(18, 2, 1, '0000-00-00 00:00:00'),
(19, 2, 1, '0000-00-00 00:00:00'),
(20, 2, 1, '0000-00-00 00:00:00'),
(21, 2, 4, '0000-00-00 00:00:00'),
(22, 2, 1, '0000-00-00 00:00:00'),
(23, 2, 1, '0000-00-00 00:00:00'),
(24, 2, 3, '0000-00-00 00:00:00'),
(25, 2, 4, '0000-00-00 00:00:00'),
(26, 2, 1, '0000-00-00 00:00:00'),
(27, 2, 1, '0000-00-00 00:00:00'),
(28, 2, 1, '0000-00-00 00:00:00'),
(29, 2, 1, '0000-00-00 00:00:00'),
(30, 2, 1, '0000-00-00 00:00:00'),
(31, 2, 1, '0000-00-00 00:00:00'),
(32, 2, 1, '0000-00-00 00:00:00'),
(33, 2, 1, '0000-00-00 00:00:00'),
(34, 2, 1, '0000-00-00 00:00:00'),
(35, 2, 1, '0000-00-00 00:00:00'),
(36, 2, 1, '0000-00-00 00:00:00'),
(37, 2, 1, '0000-00-00 00:00:00'),
(38, 2, 1, '0000-00-00 00:00:00'),
(39, 2, 1, '0000-00-00 00:00:00'),
(40, 2, 1, '0000-00-00 00:00:00'),
(41, 2, 1, '0000-00-00 00:00:00'),
(42, 2, 1, '0000-00-00 00:00:00'),
(43, 2, 1, '0000-00-00 00:00:00'),
(44, 2, 3, '0000-00-00 00:00:00'),
(45, 2, 1, '0000-00-00 00:00:00'),
(46, 2, 1, '0000-00-00 00:00:00'),
(47, 2, 1, '0000-00-00 00:00:00'),
(48, 2, 1, '0000-00-00 00:00:00'),
(49, 2, 4, '0000-00-00 00:00:00'),
(50, 2, 4, '0000-00-00 00:00:00'),
(51, 2, 1, '0000-00-00 00:00:00'),
(52, 2, 1, '0000-00-00 00:00:00'),
(53, 2, 1, '0000-00-00 00:00:00'),
(54, 2, 4, '0000-00-00 00:00:00'),
(55, 2, 1, '0000-00-00 00:00:00'),
(56, 2, 1, '0000-00-00 00:00:00'),
(57, 2, 1, '0000-00-00 00:00:00'),
(58, 2, 1, '0000-00-00 00:00:00'),
(59, 2, 1, '0000-00-00 00:00:00'),
(60, 2, 4, '0000-00-00 00:00:00'),
(61, 2, 1, '0000-00-00 00:00:00'),
(62, 2, 4, '0000-00-00 00:00:00'),
(63, 2, 3, '0000-00-00 00:00:00'),
(64, 2, 3, '0000-00-00 00:00:00'),
(65, 2, 1, '0000-00-00 00:00:00'),
(66, 2, 4, '0000-00-00 00:00:00'),
(67, 2, 1, '0000-00-00 00:00:00'),
(68, 2, 4, '0000-00-00 00:00:00'),
(69, 2, 1, '0000-00-00 00:00:00'),
(70, 2, 1, '0000-00-00 00:00:00'),
(71, 2, 4, '0000-00-00 00:00:00'),
(72, 2, 4, '0000-00-00 00:00:00'),
(73, 2, 4, '0000-00-00 00:00:00'),
(74, 2, 4, '0000-00-00 00:00:00'),
(75, 2, 4, '0000-00-00 00:00:00'),
(76, 2, 4, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `LessonID` int(5) NOT NULL,
  `Name_lesson` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`LessonID`, `Name_lesson`) VALUES
(1, 'จุดสัญญาณหัวไหล่'),
(3, 'จุดสัญญาณแขนด้านนอก'),
(4, 'จุดสัญญาณแขนด้านใน');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_details`
--

CREATE TABLE `lesson_details` (
  `LessonDID` int(5) NOT NULL,
  `LessonID` int(5) NOT NULL,
  `Question` int(1) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `badge_img` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `Q_force` int(3) NOT NULL,
  `Q_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `lesson_details`
--

INSERT INTO `lesson_details` (`LessonDID`, `LessonID`, `Question`, `img`, `badge_img`, `Q_force`, `Q_time`) VALUES
(1, 1, 1, 'shoulder_1.svg', 'justify-content:center;align-items:flex-end;padding-right:90px;', 50, '00:00:10'),
(3, 1, 2, 'shoulder_2.svg', 'justify-content:flex-start;padding-left:130px;padding-top:120px;', 0, '00:00:00'),
(4, 1, 3, 'shoulder_3.svg', 'justify-content:center;padding-left:100px;padding-bottom:90px;', 0, '00:00:00'),
(5, 1, 4, 'shoulder_4.svg', 'justify-content:center;padding-left:90px;padding-bottom:30px;', 0, '00:00:00'),
(6, 1, 5, 'shoulder_5.svg', 'justify-content:center;align-items:center;padding-left:40px;padding-top:10px;', 0, '00:00:00'),
(7, 3, 1, 'OuterPartArm_1.svg', 'justify-content:flex-start;align-items:center;padding-top:50px;', 0, '00:00:00'),
(8, 3, 2, 'OuterPartArm_2.svg', 'justify-content:center;align-items:flex-end;padding-right:110px;padding-top:20px;', 0, '00:00:00'),
(9, 3, 3, 'OuterPartArm_3.svg', 'justify-content:center;align-items:center;padding-top:140px;padding-right:60px;', 0, '00:00:00'),
(10, 3, 4, 'OuterPartArm_4.svg', 'justify-content:center;align-items:center;padding-left:100px;padding-top:150px;', 0, '00:00:00'),
(11, 3, 5, 'OuterPartArm_5.svg', 'justify-content:center;align-items:center;padding-left:20px;padding-top:10px;', 0, '00:00:00'),
(12, 4, 1, 'InsideArm_1.svg', '    justify-content:center;align-items:center;padding-left:80px;padding-top:20px;', 50, '00:00:10'),
(13, 4, 2, 'InsideArm_2.svg', ' justify-content:center;align-items:center;padding-left:40px;', 50, '00:00:10'),
(14, 4, 3, 'InsideArm_3.svg', 'justify-content:center;align-items:center;', 50, '00:00:10'),
(15, 4, 4, 'InsideArm_4.svg', '    justify-content:center;align-items:flex-end;padding-right:100px;padding-top:30px;', 50, '00:00:10'),
(16, 4, 5, 'InsideArm_5.svg', 'justify-content:center;padding-top:20px;padding-left:120px;', 50, '00:00:10');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `ScoreID` int(5) NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `LessonID` int(5) NOT NULL,
  `Question` int(1) NOT NULL,
  `Signal_point` varchar(5) COLLATE utf8mb4_bin NOT NULL,
  `Score_force` varchar(5) COLLATE utf8mb4_bin NOT NULL,
  `Score_time` varchar(5) COLLATE utf8mb4_bin NOT NULL,
  `Score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`ScoreID`, `CustomerID`, `LessonID`, `Question`, `Signal_point`, `Score_force`, `Score_time`, `Score`) VALUES
(1, 1, 1, 1, 'true', 'true', 'true', 3),
(2, 2, 1, 1, 'true', 'false', 'true', 2),
(3, 2, 1, 1, 'true', 'false', 'true', 2),
(4, 2, 1, 3, 'true', 'false', 'true', 2),
(5, 2, 1, 4, 'true', 'false', 'false', 1),
(6, 2, 1, 5, 'true', 'false', 'false', 1),
(7, 2, 1, 2, 'true', 'false', 'false', 1),
(8, 2, 1, 1, 'false', 'false', 'false', 0),
(9, 2, 1, 1, 'false', 'false', 'false', 0),
(10, 2, 1, 1, 'false', 'false', 'false', 0),
(11, 2, 1, 1, 'false', 'false', 'false', 0),
(12, 2, 1, 1, 'false', 'false', 'false', 0),
(13, 2, 1, 1, 'false', 'false', 'false', 0),
(14, 2, 1, 1, 'false', 'false', 'false', 0),
(15, 2, 1, 1, 'false', 'false', 'false', 0),
(16, 2, 1, 1, 'false', 'false', 'false', 0),
(17, 2, 1, 1, 'false', 'false', 'false', 0),
(18, 2, 1, 1, 'false', 'false', 'false', 0),
(19, 2, 1, 1, 'false', 'false', 'false', 0),
(20, 2, 1, 1, 'false', 'false', 'false', 0),
(21, 2, 1, 1, 'false', 'false', 'false', 0),
(22, 2, 1, 1, 'false', 'false', 'false', 0),
(23, 2, 1, 1, 'false', 'false', 'false', 0),
(24, 2, 1, 1, 'false', 'false', 'false', 0),
(25, 2, 1, 4, 'false', 'false', 'false', 0),
(26, 2, 1, 4, 'false', 'false', 'false', 0),
(27, 2, 1, 3, 'false', 'false', 'false', 0),
(28, 2, 1, 3, 'false', 'false', 'false', 0),
(29, 2, 1, 4, 'false', 'false', 'false', 0),
(30, 2, 1, 4, 'false', 'false', 'false', 0),
(31, 2, 1, 3, 'false', 'false', 'false', 0),
(32, 2, 1, 4, 'false', 'false', 'false', 0),
(33, 2, 1, 4, 'false', 'false', 'false', 0),
(34, 2, 1, 3, 'false', 'false', 'false', 0),
(35, 2, 1, 4, 'false', 'false', 'false', 0),
(36, 2, 1, 4, 'false', 'false', 'false', 0),
(37, 2, 1, 3, 'false', 'false', 'false', 0),
(38, 2, 1, 4, 'false', 'false', 'false', 0),
(39, 2, 1, 3, 'false', 'false', 'false', 0),
(40, 2, 1, 4, 'false', 'false', 'false', 0),
(41, 2, 1, 3, 'false', 'false', 'false', 0),
(42, 2, 1, 3, 'false', 'false', 'false', 0),
(43, 2, 1, 3, 'false', 'false', 'false', 0),
(44, 2, 1, 4, 'false', 'false', 'false', 0),
(45, 2, 1, 4, 'false', 'false', 'false', 0),
(46, 2, 1, 4, 'false', 'false', 'false', 0),
(47, 2, 1, 4, 'false', 'false', 'false', 0),
(48, 2, 1, 3, 'false', 'false', 'false', 0),
(49, 2, 1, 3, 'false', 'false', 'false', 0),
(50, 2, 1, 3, 'false', 'false', 'false', 0),
(51, 2, 1, 3, 'false', 'false', 'false', 0),
(52, 2, 1, 3, 'false', 'false', 'false', 0),
(53, 2, 1, 3, 'false', 'false', 'false', 0),
(54, 2, 1, 3, 'false', 'false', 'false', 0),
(55, 2, 1, 3, 'false', 'false', 'false', 0),
(56, 2, 1, 3, 'false', 'false', 'false', 0),
(57, 2, 1, 3, 'false', 'false', 'false', 0),
(58, 2, 1, 4, 'false', 'false', 'false', 0),
(59, 2, 1, 4, 'false', 'false', 'false', 0),
(60, 2, 1, 1, 'false', 'false', 'false', 0),
(61, 2, 1, 3, 'false', 'false', 'false', 0),
(62, 2, 1, 3, 'false', 'false', 'false', 0),
(63, 2, 1, 3, 'false', 'false', 'false', 0),
(64, 2, 1, 3, 'false', 'false', 'false', 0),
(65, 2, 1, 3, 'false', 'false', 'false', 0),
(66, 2, 1, 1, 'false', 'false', 'false', 0),
(67, 2, 1, 3, 'false', 'false', 'false', 0),
(68, 2, 1, 1, 'false', 'false', 'false', 0),
(69, 2, 1, 3, 'false', 'false', 'false', 0),
(70, 2, 1, 1, 'false', 'false', 'false', 0),
(71, 2, 1, 3, 'false', 'false', 'false', 0),
(72, 2, 1, 4, 'false', 'false', 'false', 0),
(73, 2, 1, 5, 'false', 'false', 'false', 0),
(74, 2, 1, 2, 'false', 'false', 'false', 0),
(75, 2, 4, 1, 'false', 'false', 'false', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `show_score`
-- (See below for the actual view)
--
CREATE TABLE `show_score` (
`CustomerID` int(5)
,`DateScore` timestamp
,`Name_lesson` varchar(255)
,`Totalscore` float
,`TotalScoreID` int(5)
);

-- --------------------------------------------------------

--
-- Table structure for table `timeonlesson`
--

CREATE TABLE `timeonlesson` (
  `TimeonlesID` int(5) NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `LessonDID` int(5) NOT NULL,
  `Time_start` time NOT NULL,
  `Time_end` time NOT NULL,
  `logDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `timeonlesson`
--

INSERT INTO `timeonlesson` (`TimeonlesID`, `CustomerID`, `LessonDID`, `Time_start`, `Time_end`, `logDate`) VALUES
(54, 2, 1, '02:17:03', '02:17:09', '2020-09-22'),
(55, 2, 3, '02:17:11', '02:17:17', '2020-09-22'),
(56, 2, 4, '02:17:18', '02:17:23', '2020-09-22'),
(57, 2, 5, '02:17:24', '02:17:47', '2020-09-22'),
(58, 2, 6, '02:17:49', '02:17:59', '2020-09-22'),
(59, 2, 7, '02:18:26', '02:21:54', '2020-09-22'),
(60, 2, 8, '02:21:56', '02:22:00', '2020-09-22'),
(61, 2, 9, '02:22:01', '02:22:06', '2020-09-22'),
(62, 2, 10, '02:22:07', '02:22:12', '2020-09-22'),
(63, 2, 11, '02:22:13', '02:22:23', '2020-09-22'),
(64, 2, 1, '02:22:40', '02:31:03', '2020-09-22'),
(65, 2, 3, '02:31:04', '00:00:00', '2020-09-22'),
(66, 2, 1, '02:34:19', '02:35:06', '2020-09-22'),
(67, 2, 1, '02:37:54', '02:38:11', '2020-09-22'),
(68, 2, 3, '02:38:12', '02:41:01', '2020-09-22'),
(69, 2, 1, '02:41:02', '02:43:30', '2020-09-22'),
(70, 2, 3, '02:43:31', '02:43:35', '2020-09-22'),
(71, 2, 1, '02:43:36', '02:43:40', '2020-09-22'),
(72, 2, 3, '02:43:41', '02:43:45', '2020-09-22'),
(73, 2, 4, '02:43:46', '02:43:50', '2020-09-22'),
(74, 2, 3, '02:43:51', '02:44:40', '2020-09-22'),
(75, 2, 1, '02:44:41', '02:44:56', '2020-09-22'),
(76, 2, 3, '02:44:57', '02:45:08', '2020-09-22'),
(77, 2, 4, '02:45:09', '02:46:53', '2020-09-22'),
(78, 2, 5, '02:46:54', '02:47:35', '2020-09-22'),
(79, 2, 4, '02:47:36', '02:47:42', '2020-09-22'),
(80, 2, 5, '02:47:43', '02:49:43', '2020-09-22'),
(81, 2, 6, '02:49:44', '02:52:41', '2020-09-22'),
(82, 2, 5, '02:52:42', '00:00:00', '2020-09-22'),
(83, 2, 1, '03:24:35', '03:24:44', '2020-09-22'),
(84, 2, 6, '03:24:45', '00:00:00', '2020-09-22'),
(85, 2, 5, '03:24:50', '00:00:00', '2020-09-22'),
(86, 2, 4, '03:24:55', '00:00:00', '2020-09-22'),
(87, 2, 3, '03:24:59', '00:00:00', '2020-09-22'),
(88, 2, 1, '03:25:03', '03:28:43', '2020-09-22'),
(89, 2, 3, '03:28:44', '00:00:00', '2020-09-22'),
(90, 2, 4, '03:28:47', '00:00:00', '2020-09-22'),
(91, 2, 5, '03:28:50', '00:00:00', '2020-09-22'),
(92, 2, 6, '03:28:54', '03:28:57', '2020-09-22'),
(93, 2, 5, '03:28:58', '00:00:00', '2020-09-22'),
(94, 2, 6, '03:29:02', '00:00:00', '2020-09-22'),
(95, 2, 5, '03:29:06', '00:00:00', '2020-09-22'),
(96, 2, 4, '03:29:09', '00:00:00', '2020-09-22'),
(97, 2, 3, '03:29:14', '00:00:00', '2020-09-22'),
(98, 2, 1, '03:29:18', '00:00:00', '2020-09-22'),
(99, 2, 12, '03:32:22', '03:32:28', '2020-09-22'),
(100, 2, 13, '03:32:29', '03:32:30', '2020-09-22'),
(101, 2, 14, '03:32:31', '03:32:32', '2020-09-22'),
(102, 2, 15, '03:32:32', '03:32:33', '2020-09-22'),
(103, 2, 16, '03:32:33', '03:32:35', '2020-09-22'),
(104, 2, 12, '03:32:39', '03:32:42', '2020-09-22'),
(105, 2, 16, '03:32:42', '00:00:00', '2020-09-22'),
(106, 2, 13, '03:32:44', '00:00:00', '2020-09-22'),
(107, 2, 14, '03:32:46', '00:00:00', '2020-09-22'),
(108, 2, 15, '03:32:47', '03:32:50', '2020-09-22'),
(109, 2, 14, '03:32:50', '03:32:52', '2020-09-22'),
(110, 2, 13, '03:32:52', '03:32:53', '2020-09-22'),
(111, 2, 12, '03:32:54', '00:00:00', '2020-09-22'),
(112, 2, 1, '03:56:02', '00:00:00', '2020-09-22'),
(113, 2, 1, '02:08:32', '00:00:00', '2020-09-25'),
(114, 2, 1, '02:11:54', '00:00:00', '2020-09-25'),
(115, 2, 12, '02:53:40', '02:56:10', '2020-09-25'),
(116, 2, 13, '02:56:10', '00:00:00', '2020-09-25'),
(117, 2, 14, '02:56:12', '00:00:00', '2020-09-25'),
(118, 2, 15, '02:56:15', '00:00:00', '2020-09-25'),
(119, 2, 16, '02:56:17', '00:00:00', '2020-09-25'),
(120, 2, 12, '02:56:22', '00:00:00', '2020-09-25'),
(121, 2, 1, '02:56:33', '00:00:00', '2020-09-25'),
(122, 2, 1, '03:13:34', '03:19:10', '2020-09-25'),
(123, 2, 4, '03:19:10', '00:00:00', '2020-09-25'),
(124, 2, 1, '03:20:10', '00:00:00', '2020-09-25'),
(125, 2, 1, '03:27:29', '03:45:16', '2020-09-25'),
(126, 2, 3, '03:45:16', '00:00:00', '2020-09-25'),
(127, 2, 1, '09:13:34', '09:16:30', '2020-09-27'),
(128, 2, 5, '09:16:30', '00:00:00', '2020-09-27'),
(129, 2, 12, '12:13:27', '00:00:00', '2020-09-27'),
(130, 2, 1, '12:14:43', '00:00:00', '2020-09-27'),
(131, 2, 12, '12:16:10', '12:16:14', '2020-09-27'),
(132, 2, 13, '12:16:14', '00:00:00', '2020-09-27'),
(133, 2, 7, '12:16:25', '00:00:00', '2020-09-27'),
(134, 2, 7, '12:16:29', '00:00:00', '2020-09-27'),
(135, 2, 1, '12:16:34', '00:00:00', '2020-09-27'),
(136, 2, 12, '12:16:39', '00:00:00', '2020-09-27'),
(137, 2, 1, '12:18:53', '00:00:00', '2020-09-27'),
(138, 2, 12, '02:12:44', '00:00:00', '2020-09-27'),
(139, 2, 1, '02:16:32', '00:00:00', '2020-09-27'),
(140, 2, 1, '02:16:45', '02:47:04', '2020-09-27'),
(141, 2, 3, '02:47:04', '02:53:14', '2020-09-27'),
(142, 2, 1, '02:53:14', '02:53:19', '2020-09-27'),
(143, 2, 3, '02:53:19', '00:00:00', '2020-09-27'),
(144, 2, 12, '02:53:38', '02:53:42', '2020-09-27'),
(145, 2, 13, '02:53:43', '02:55:14', '2020-09-27'),
(146, 2, 12, '02:55:14', '02:55:17', '2020-09-27'),
(147, 2, 13, '02:55:18', '02:56:04', '2020-09-27'),
(148, 2, 14, '02:56:04', '03:02:42', '2020-09-27'),
(149, 2, 15, '03:02:42', '03:06:40', '2020-09-27'),
(150, 2, 16, '03:06:40', '03:09:45', '2020-09-27'),
(151, 2, 12, '03:09:46', '03:09:47', '2020-09-27'),
(152, 2, 13, '03:09:48', '03:09:49', '2020-09-27'),
(153, 2, 14, '03:09:49', '03:09:51', '2020-09-27'),
(154, 2, 15, '03:09:51', '03:09:52', '2020-09-27'),
(155, 2, 16, '03:09:52', '03:09:57', '2020-09-27'),
(156, 2, 12, '03:09:57', '03:10:02', '2020-09-27'),
(157, 2, 13, '03:10:02', '03:10:06', '2020-09-27'),
(158, 2, 14, '03:10:06', '03:10:08', '2020-09-27'),
(159, 2, 13, '03:10:09', '03:10:10', '2020-09-27'),
(160, 2, 15, '03:10:11', '03:10:12', '2020-09-27'),
(161, 2, 16, '03:10:12', '03:22:28', '2020-09-27'),
(162, 2, 12, '03:22:28', '03:22:32', '2020-09-27'),
(163, 2, 13, '03:22:33', '03:22:34', '2020-09-27'),
(164, 2, 14, '03:22:34', '03:22:35', '2020-09-27'),
(165, 2, 15, '03:22:36', '03:22:37', '2020-09-27'),
(166, 2, 16, '03:22:37', '00:00:00', '2020-09-27'),
(167, 2, 12, '03:25:16', '03:25:18', '2020-09-27'),
(168, 2, 13, '03:25:19', '03:25:20', '2020-09-27'),
(169, 2, 14, '03:25:20', '03:25:21', '2020-09-27'),
(170, 2, 15, '03:25:21', '03:25:22', '2020-09-27'),
(171, 2, 16, '03:25:22', '03:25:23', '2020-09-27'),
(172, 2, 12, '03:25:27', '00:00:00', '2020-09-27'),
(173, 2, 12, '03:36:32', '03:36:36', '2020-09-27'),
(174, 2, 13, '03:36:36', '03:36:38', '2020-09-27'),
(175, 2, 14, '03:36:38', '03:36:40', '2020-09-27'),
(176, 2, 15, '03:36:40', '03:36:42', '2020-09-27'),
(177, 2, 16, '03:36:42', '03:36:46', '2020-09-27'),
(178, 2, 15, '03:36:46', '03:36:49', '2020-09-27'),
(179, 2, 14, '03:36:49', '03:36:51', '2020-09-27'),
(180, 2, 13, '03:36:52', '03:36:54', '2020-09-27'),
(181, 2, 12, '03:36:54', '03:37:03', '2020-09-27'),
(182, 2, 16, '03:37:03', '03:37:05', '2020-09-27'),
(183, 2, 15, '03:37:05', '03:37:06', '2020-09-27'),
(184, 2, 14, '03:37:07', '03:37:08', '2020-09-27'),
(185, 2, 13, '03:37:08', '03:37:09', '2020-09-27'),
(186, 2, 12, '03:37:10', '00:00:00', '2020-09-27'),
(187, 2, 12, '03:37:27', '03:44:22', '2020-09-27'),
(188, 2, 13, '03:44:23', '03:44:30', '2020-09-27'),
(189, 2, 14, '03:44:30', '03:44:38', '2020-09-27'),
(190, 2, 15, '03:44:38', '03:44:46', '2020-09-27'),
(191, 2, 16, '03:44:46', '00:00:00', '2020-09-27'),
(192, 2, 12, '04:34:45', '04:34:47', '2020-09-27'),
(193, 2, 13, '04:34:48', '04:34:49', '2020-09-27'),
(194, 2, 14, '04:34:49', '04:34:50', '2020-09-27'),
(195, 2, 15, '04:34:50', '04:34:51', '2020-09-27'),
(196, 2, 16, '04:34:51', '04:34:52', '2020-09-27'),
(197, 2, 12, '04:34:53', '00:00:00', '2020-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `totalscore`
--

CREATE TABLE `totalscore` (
  `TotalScoreID` int(5) NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `LessonID` int(5) NOT NULL,
  `Totalscore` float NOT NULL,
  `DateScore` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `totalscore`
--

INSERT INTO `totalscore` (`TotalScoreID`, `CustomerID`, `LessonID`, `Totalscore`, `DateScore`) VALUES
(1, 2, 1, 7, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure for view `show_score`
--
DROP TABLE IF EXISTS `show_score`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `show_score`  AS  select `a`.`TotalScoreID` AS `TotalScoreID`,`a`.`CustomerID` AS `CustomerID`,`b`.`Name_lesson` AS `Name_lesson`,`a`.`Totalscore` AS `Totalscore`,`a`.`DateScore` AS `DateScore` from (`totalscore` `a` left join `lesson` `b` on((`a`.`LessonID` = `b`.`LessonID`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `data_sensor`
--
ALTER TABLE `data_sensor`
  ADD PRIMARY KEY (`SensorID`),
  ADD KEY `lesDID` (`LessonDID`),
  ADD KEY `cos3` (`CustomerID`);

--
-- Indexes for table `enroll_lesson`
--
ALTER TABLE `enroll_lesson`
  ADD PRIMARY KEY (`EnrollID`),
  ADD KEY `cos` (`CustomerID`),
  ADD KEY `les` (`LessonID`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`LessonID`);

--
-- Indexes for table `lesson_details`
--
ALTER TABLE `lesson_details`
  ADD PRIMARY KEY (`LessonDID`),
  ADD KEY `les2` (`LessonID`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`ScoreID`),
  ADD KEY `cos4` (`CustomerID`),
  ADD KEY `les6` (`LessonID`);

--
-- Indexes for table `timeonlesson`
--
ALTER TABLE `timeonlesson`
  ADD PRIMARY KEY (`TimeonlesID`),
  ADD KEY `cos6` (`CustomerID`),
  ADD KEY `lesDID3` (`LessonDID`);

--
-- Indexes for table `totalscore`
--
ALTER TABLE `totalscore`
  ADD PRIMARY KEY (`TotalScoreID`),
  ADD KEY `cos5` (`CustomerID`),
  ADD KEY `les5` (`LessonID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_sensor`
--
ALTER TABLE `data_sensor`
  MODIFY `SensorID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `enroll_lesson`
--
ALTER TABLE `enroll_lesson`
  MODIFY `EnrollID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `LessonID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lesson_details`
--
ALTER TABLE `lesson_details`
  MODIFY `LessonDID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `ScoreID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `timeonlesson`
--
ALTER TABLE `timeonlesson`
  MODIFY `TimeonlesID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `totalscore`
--
ALTER TABLE `totalscore`
  MODIFY `TotalScoreID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_sensor`
--
ALTER TABLE `data_sensor`
  ADD CONSTRAINT `cos3` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lesDID` FOREIGN KEY (`LessonDID`) REFERENCES `lesson_details` (`LessonDID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enroll_lesson`
--
ALTER TABLE `enroll_lesson`
  ADD CONSTRAINT `cos` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `les` FOREIGN KEY (`LessonID`) REFERENCES `lesson` (`LessonID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lesson_details`
--
ALTER TABLE `lesson_details`
  ADD CONSTRAINT `les2` FOREIGN KEY (`LessonID`) REFERENCES `lesson` (`LessonID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `cos4` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `les6` FOREIGN KEY (`LessonID`) REFERENCES `lesson` (`LessonID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `timeonlesson`
--
ALTER TABLE `timeonlesson`
  ADD CONSTRAINT `cos6` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lesDID3` FOREIGN KEY (`LessonDID`) REFERENCES `lesson_details` (`LessonDID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `totalscore`
--
ALTER TABLE `totalscore`
  ADD CONSTRAINT `cos5` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `les5` FOREIGN KEY (`LessonID`) REFERENCES `lesson` (`LessonID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

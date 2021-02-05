-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 02:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniform_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `studentID` int(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `studentID`, `department`, `Course`, `Year`, `Fullname`, `password`) VALUES
(1, 201910322, 'CCS', 'BSIT', '2nd', 'Arshley Tan', 'tan'),
(2, 201911715, 'CCS', 'BSIT', '2nd', 'Beverly Karen Bernardino', 'bev'),
(3, 201910278, 'CCS', 'BSIT', '2nd', 'Fatrizha Alejah Boongaling', 'fat'),
(4, 201911284, 'CCS', 'BSIT', '2nd', 'John Albert De Vera', 'albert'),
(5, 201911373, 'CCS', 'BSCS', '2nd', 'John Angelo Vergel', 'vergel'),
(6, 201911283, 'CCS', 'BSIT', '2nd', 'Edward Ramos', 'eramos'),
(7, 201810411, 'CBA', 'BSCA', '3rd', 'John Victor Fabon', 'fabon'),
(8, 201911043, 'CCS', 'BSIT', '2nd', 'Generoso Sionzon', 'sionzon'),
(9, 201911710, 'CCS', 'BSEMC', '2nd', 'Daiki Hayashi', 'hayashi'),
(10, 201910434, 'CBA', 'BSCA', '2nd', 'Jake Terrobias', 'terrobias'),
(11, 201911415, 'CHTM', 'BSHM', '2nd', 'Luigi Tamayo', 'tamayo'),
(12, 201910448, 'CHTM', 'BSHM', '2nd', 'Rodel Elamparo Jr.', 'elamparo'),
(13, 201911415, 'CHTM', 'BSHM', '2nd', 'Luigi Tamayo', 'tamayo'),
(14, 201911514, 'CCS', 'BSEMC', '2nd', 'Christian Mallari', 'mallari'),
(15, 201910704, 'CHTM', 'BSHM', '2nd', 'Rysen Lance Daquilanea', 'lance'),
(16, 201910346, 'CCS', 'BSIT', '2nd', 'Aldrin Maque', 'Maque'),
(17, 201911515, 'CCS', 'BSIT', '2nd', 'Emerson Sazon', 'sazon'),
(18, 201811462, 'CBA', 'BSCA', '3rd', 'Ma. Sofia Yvonne Uson', 'uson'),
(19, 201810536, 'CBA', 'BSCA', '3rd', 'Samuel Paul Fernandez', 'fernandez'),
(20, 201811345, 'CBA', 'BSCA', '3rd', 'Maggie Mae Cervantes', 'cervantes'),
(21, 201910903, 'CCS', 'BSIT', '2nd', 'Louise John Soria', 'soria'),
(22, 201910373, 'CCS', 'BSIT', '2nd', 'Justin Kirk Nacor', 'nacor'),
(23, 201910373, 'CCS', 'BSIT', '2nd', 'Angelo James Aguirre', 'aguirre'),
(24, 201910123, 'CCS', 'BSIT', '2nd', 'Bernie Nicholas', 'nicholas'),
(25, 201820031, 'CCS', 'BSIT', '2nd', 'Renzo Guile Santos', 'santos'),
(26, 201910999, 'CCS', 'BSIT', '2nd', 'Tyrone Hizola', 'hizola'),
(27, 201911008, 'CCS', 'BSIT', '2nd', 'Algen Carian', 'Carian'),
(28, 201811028, 'CCS', 'BSIT', '2nd', 'Simon Gerard Granil', 'granil'),
(29, 201910432, 'CCS', 'BSIT', '2nd', 'Berwyn Felismenia', 'felismenia'),
(30, 201911205, 'CCS', 'BSIT', '2nd', 'Dwayne Joed Ramos', 'dramos'),
(31, 201911397, 'CCS', 'BSIT', '2nd', 'Royce Ogot', 'ogot'),
(32, 201910190, 'CCS', 'BSIT', '2nd', 'Angelica Espinosa Estrada', 'estrada'),
(33, 201911339, 'CCS', 'BSIT', '2nd', 'Edgardo Cayosa Jr.', 'cayosa'),
(34, 201911338, 'CCS', 'BSIT', '2nd', 'Shermayne Ooi Francisco', 'francisco'),
(35, 201911018, 'CCS', 'BSIT', '2nd', 'Reenalyn Landicho', 'Landicho'),
(36, 201910065, 'CCS', 'BSIT', '2nd', 'Darrel Robrigardo', 'darrel'),
(37, 201910705, 'CCS', 'BSIT', '2nd', 'Justin Reyes', 'reyes'),
(38, 201910548, 'CCS', 'BSIT', '2nd', 'Jade Lester Dela Cruz', 'jade'),
(39, 201911714, 'CCS', 'BSIT', '2nd', 'Angelica Sargan', 'sargan'),
(40, 20210101, 'CEAS', 'BSED', '3rd', 'Yashuar Surla', 'surla'),
(41, 20210102, 'CCS', 'BSIT', '1st', 'Ariel Boongaling', 'ariel'),
(42, 20210103, 'CCS', 'BSEMC', '2nd', 'Denise Gabriel', 'gabriel'),
(43, 20210104, 'CCS', 'ACT', '1st', 'Tea Timue', 'timue'),
(44, 20210105, 'CCS', 'BSIT', '2nd', 'Gregorio Delphin', 'delphin'),
(45, 20210106, 'CCS', 'BSCS', '3rd', 'Lexi Lore', 'lore'),
(46, 20210107, 'CHTM', 'BSHM', '4th', 'Pedro Penduko', 'pedro'),
(47, 20210108, 'CBA', 'BSA', '3rd', 'Jotreb Mirador', 'mirador'),
(48, 20210109, 'CHTM', 'BSHM', '3rd', 'Marie Pipi', 'pipi'),
(49, 20210110, 'CCS', 'BSIT', '3rd', 'Samantha Marie Cegales', 'cegales'),
(50, 20210111, 'CAHS', 'BSN', '2nd', 'Bimby Aquino', 'aquino'),
(51, 20210112, 'CCS', 'BSIT', '4th', 'Darryl Ruiz', 'ruiz'),
(52, 20210113, 'CCS', 'BSCS', '1st', 'Zeinab Harake', 'harake'),
(53, 20210114, 'CCS', 'BSEMC', '2nd', 'Jepoy Kolokoy', 'kolokoy'),
(54, 20210115, 'CAHS', 'BSN', '2nd', 'Dianne Getuya', 'getuya'),
(55, 20210116, 'CHTM', 'BSHM', '1st', 'Dinalo Dinala', 'dinala'),
(56, 20210117, 'CCS', 'BSIT', '2nd', 'Feng Suy', 'suy'),
(57, 20210118, 'CBA', 'BSCA', '3rd', 'Pechay Kampay', 'kampay'),
(58, 20210119, 'CAHS', 'BSN', '1st', 'Marie Gomburza', 'marie'),
(59, 20210120, 'CCS', 'BSEMC', '1st', 'Andrew Brew', 'brew'),
(60, 20210121, 'CEAS', 'BSED', '2nd', 'Turomo Teach', 'teach'),
(61, 20210122, 'CEAS', 'BSED', '1st', 'Arnold Clavio', 'clavio'),
(62, 20210123, 'CBA', 'BSBA', '2nd', 'Christine Uy', 'uy'),
(63, 20210124, 'CAHS', 'BSN', '1st', 'Riza Kim', 'Kim'),
(64, 20210125, 'CCS', 'BSIT', '1st', 'Roger Raker', 'raker'),
(65, 20210126, 'CEAS', 'BSED', '1st', 'Michael Jam', 'jam'),
(66, 20210127, 'CCS', 'BSIT', '2nd', 'Braum Broom', 'broom'),
(67, 20210128, 'CCS', 'BSIT', '3rd', 'Albin Rosales', 'albin'),
(68, 20210129, 'CHTM', 'BSHM', '1st', 'Linda Grand', 'grand'),
(69, 20210130, 'CEAS', 'BSED', '2nd', 'Mary Grace', 'grace'),
(70, 20210131, 'CEAS', 'BSED', '1st', 'Marnie Gee', 'gee'),
(71, 20210132, 'CEAS', 'BSED', '3rd', 'Britany Wan', 'wan'),
(72, 20210134, 'CCS', 'BSIT', '2nd', 'Whiskey Banayad', 'whiskey'),
(73, 20210135, 'CCS', 'BSIT', '3rd', 'John Empi', 'empi'),
(74, 20210136, 'CEAS', 'BSED', '1st', 'Moley Holey', 'holey'),
(75, 20210137, 'CEAS', 'BSED', '2nd', 'Sheynd Noyds', 'noyds'),
(76, 20210138, 'CAHS', 'BSN', '2nd', 'Maricar Reyes', 'reyes'),
(77, 20210139, 'CAHS', 'BSN', '3rd', 'Blues Klaus', 'klaus'),
(78, 20210140, 'CAHS', 'BSN', '2nd', 'Ulbers Berts', 'berts'),
(79, 20210141, 'CAHS', 'BSN', '1st', 'Amput Grabe', 'grabe'),
(80, 20210142, 'CAHS', 'BSN', '1st', 'Starbaks Emerats', 'emerats'),
(81, 20210143, 'CAHS', 'BSN', '3rd', 'Buddha Khels', 'khels'),
(82, 20210144, 'CAHS', 'BSN', '2nd', 'Vien Bin', 'bin'),
(83, 20210145, 'CEAS', 'BSED', '1st', 'Yuri Bero', 'bero'),
(84, 20210146, 'CEAS', 'BSED', '1st', 'James Klyde', 'kylde'),
(85, 20210147, 'CEAS', 'BSED', '3rd', 'Migs Zubiri', 'zubiri'),
(86, 20210148, 'CEAS', 'BSED', '2nd', 'Aristotle Tick', 'tick'),
(87, 20210149, 'CEAS', 'BSED', '3rd', 'Jeffrey Ragnal', 'ragnal'),
(88, 20210150, 'CEAS', 'BSED', '2nd', 'Josephine Guanlao', 'Guanlao'),
(89, 20210151, 'CEAS', 'BSED', '2nd', 'Jose Manalo', 'manalo'),
(90, 20210152, 'CCS', 'BSIT', '1st', 'Kenneth Cabunagan', 'cabunagan'),
(91, 20210153, 'CCS', 'BSIT', '1st', 'Timothy Chip', 'chip'),
(92, 20210154, 'CCS', 'BSCS', '2nd', 'Lester Juarez', 'juarez'),
(93, 20210155, 'CCS', 'BSEMC', '1st', 'Gio Arbitrario', 'gio'),
(94, 20210156, 'CCS', 'ACT', '3rd', 'Mika Salamangkera', 'mika'),
(95, 20210157, 'CBA', 'BSBA', '3rd', 'Junnie Boy', 'boy'),
(96, 20210158, 'CBA', 'BSBA', '3rd', 'Cong Velasquez', 'cong'),
(97, 20210159, 'CBA', 'BSBA', '2nd', 'Benny Yow', 'yow'),
(98, 20210160, 'CBA', 'BSCA', '1st', 'Keng Boss', 'boss'),
(99, 20210161, 'CBA', 'BSCA', '2nd', 'Viy Cornetto', 'viy'),
(100, 20210162, 'CBA', 'BSBA', '1st', 'Ariel Tide', 'tide'),
(103, 20210163, 'CCS', 'BSEMC', '2nd', 'Eris Clavo', 'clavo'),
(104, 20210164, 'CCS', 'BSEMC', '2nd', 'Bullet Roswell', 'bullet'),
(105, 20210165, 'CCS', 'BSEMC', '2nd', 'Anne Mateo', 'mateo'),
(106, 20210166, 'CCS', 'BSIT', '1st', 'Melissa Changco', 'melissa'),
(107, 20210167, 'CCS', 'BSIT', '1st', 'Kevin Aguilar', 'aguilar'),
(108, 20210168, 'CBA', 'BSBA', '3rd', 'Daniel Martinez', 'martinez'),
(109, 20210169, 'CBA', 'BSCA', '3rd', 'Jacob Dela Rosa', 'jacob'),
(110, 20210170, 'CBA', 'BSCA', '2nd', 'Jenzel Paje', 'paje'),
(111, 20210171, 'CBA', 'BSCA', '1st', 'Bong Ga', 'bong'),
(112, 20210172, 'CBA', 'BSCA', '3rd', 'Susan Suman', 'suman'),
(113, 20210173, 'CEAS', 'BSED', '2nd', 'Gerald Gambino', 'gambino'),
(114, 20210174, 'CEAS', 'BSED', '3rd', 'Jomar Edejer', 'edejer'),
(115, 20210175, 'CEAS', 'BSED', '2nd', 'Eden Chesse', 'eden'),
(116, 20210176, 'CEAS', 'BSED', '1st', 'Eren Jaeger', 'eren'),
(117, 20210177, 'CEAS', 'BSED', '1st', 'Mikasa Ackerman', 'mikasa'),
(118, 20210178, 'CEAS', 'BSED', '2nd', 'Armin Arlert', 'armin'),
(119, 20210179, 'CAHS', 'BSN', '2nd', 'Levi Brusto', 'levi'),
(120, 20210180, 'CAHS', 'BSN', '3rd', 'Erwin Smith', 'smith'),
(121, 20210181, 'CAHS', 'BSN', '2nd', 'Sasha Braus', 'braus'),
(122, 20210182, 'CAHS', 'BSN', '2nd', 'Bertolt Hoover', 'hoover'),
(123, 20210163, 'CAHS', 'BSN', '1st', 'Connie Springer', 'connie'),
(124, 20210164, 'CAHS', 'BSN', '1st', 'Historia Reiss', 'reiss'),
(125, 20210165, 'CBA', 'BSCA', '3rd', 'Hange Zoe', 'zoe'),
(126, 20210166, 'CCS', 'BSIT', '2nd', 'Dot Pyxis', 'dot'),
(127, 20210167, 'CEAS', 'BSED', '1st', 'Jean Kirstein', 'jean'),
(128, 20210168, 'CCS', 'BSCS', '2nd', 'Alisson Shore', 'shore'),
(129, 20210169, 'CCS', 'BSCS', '2nd', 'Inday Badiday', 'inday'),
(130, 20210170, 'CCS', 'BSCS', '2nd', 'Bakekang Kaba', 'kaba'),
(131, 20210171, 'CCS', 'BSIT', '3rd', 'Rudolf Longnose', 'rudolf'),
(132, 20210172, 'CCS', 'BSIT', '1st', 'Amir Khan', 'khan'),
(133, 20210173, 'CEAS', 'BSED', '1st', 'Faker Grip', 'grip'),
(134, 20210174, 'CEAS', 'BSED', '2nd', 'Samuel Marter', 'marter'),
(135, 20210175, 'CEAS', 'BSED', '2nd', 'Samsong Mia', 'mia'),
(136, 20210176, 'CEAS', 'BSED', '3rd', 'Abrahano Cortez', 'cortez'),
(137, 20210177, 'CEAS', 'BSED', '1st', 'Julio Basilan', 'basilan'),
(138, 20210178, 'CBA', 'BSCA', '3rd', 'James Amber', 'amber'),
(139, 20210179, 'CBA', 'BSCA', '2nd', 'Crawford Ilish', 'ilish'),
(140, 20210180, 'CBA', 'BSCA', '1st', 'Gerome Uy', 'uy'),
(141, 20210181, 'CBA', 'BSCA', '3rd', 'Frederick Martin', 'martin'),
(142, 20210182, 'CBA', 'BSCA', '2nd', 'Freddy Lacson', 'lacson'),
(143, 20210183, 'CHTM', 'BSHM', '1st', 'Kaizer Lamperoge', 'kaizer'),
(144, 20210184, 'CHTM', 'BSHM', '2nd', 'Reiner Armor', 'reiner'),
(145, 20210185, 'CHTM', 'BSHM', '1st', 'Ella Esponela', 'ella'),
(146, 20210186, 'CHTM', 'BSHM', '3rd', 'Giezelle Mariposa', 'mariposa'),
(147, 20210187, 'CHTM', 'BSHM', '2nd', 'Ymir Titan', 'ymir'),
(148, 20210188, 'CHTM', 'BSHM', '1st', 'Marco Bodt', 'bodt'),
(149, 20210189, 'CHTM', 'BSHM', '2nd', 'Eld Gin', 'gin'),
(150, 20210190, 'CHTM', 'BSHM', '3rd', 'Tony Montana', 'tony'),
(151, 20210191, 'CHTM', 'BSHM', '2nd', 'Edward Binan', 'binan'),
(152, 20210192, 'CHTM', 'BSHM', '1st', 'Grisha Mantel', 'mantel'),
(153, 20210193, 'CEAS', 'BSED', '1st', 'Shanti Dope', 'dope'),
(154, 20210194, 'CEAS', 'BSED', '1st', 'Lonnie Fliptap', 'fliptap'),
(155, 20210195, 'CEAS', 'BSED', '3rd', 'Kyogi Moises', 'moises'),
(156, 20210196, 'CEAS', 'BSED', '2nd', 'Sabrina Brey', 'brey'),
(157, 20210197, 'CEAS', 'BSED', '2nd', 'Abbie Gayle', 'gayle'),
(158, 20210198, 'CEAS', 'BSED', '1st', 'Arbhie Liscano', 'rb'),
(159, 20210199, 'CEAS', 'BSED', '2nd', 'Tracy Mcgregy', 'tracy'),
(160, 20210200, 'CEAS', 'BSED', '2nd', 'Irene Soleta', 'irene'),
(161, 20210201, 'CCS', 'BSIT', '1st', 'Bernardo Ambanta', 'boyet'),
(162, 20210202, 'CCS', 'BSIT', '3rd', 'Christine Maleta', 'maleta'),
(163, 20210183, 'CCS', 'BSIT', '2nd', 'Joyce Ree', 'ree'),
(164, 20210184, 'CCS', 'BSIT', '3rd', 'Palermo Shampu', 'shampu'),
(165, 20210185, 'CCS', 'BSCS', '3rd', 'Jade Pateros', 'jade'),
(166, 20210186, 'CCS', 'BSCS', '3rd', 'Piatos Toska', 'toska'),
(167, 20210187, 'CCS', 'BSCS', '1st', 'Jaypee Solidad', 'solidad'),
(168, 20210188, 'CCS', 'BSCS', '2nd', 'Philip Marquez', 'philip'),
(169, 20210189, 'CCS', 'BSCS', '1st', 'Dudut La Ang', 'ang'),
(170, 20210190, 'CBA', 'BSBA', '2nd', 'Chris Gray', 'chrisbrown'),
(171, 20210191, 'CBA', 'BSCA', '1st', 'Marvs Da Too', 'marvs'),
(172, 20210192, 'CBA', 'BSBA', '2nd', 'Larva Mengoy', 'larva'),
(173, 20210193, 'CBA', 'BSBA', '1st', 'Minerva Alcasid', 'alcasid'),
(174, 20210194, 'CBA', 'BSCA', '3rd', 'Jules Mamon', 'mamon'),
(175, 20210195, 'CBA', 'BSBA', '2nd', 'Julies Bread', 'bread'),
(176, 20210196, 'CBA', 'BSBA', '1st', 'Thea Katok', 'thea'),
(177, 20210197, 'CBA', 'BSCA', '1st', 'Luffy Cy', 'cy'),
(178, 20210198, 'CEAS', 'BSED', '2nd', 'Brix Mondreal', 'brix'),
(179, 20210199, 'CEAS', 'BSED', '1st', 'Shandy Magalona', 'shandy'),
(180, 20210200, 'CEAS', 'BSED', '3rd', 'Sheng Xi', 'xi'),
(181, 20210201, 'CEAS', 'BSED', '2nd', 'Dua Lipa', 'dua'),
(182, 20210202, 'CEAS', 'BSED', '1st', 'Greg Socialidad', 'greg'),
(183, 20210203, 'CCS', 'BSIT', '1st', 'Josh Montes', 'josh'),
(184, 20210204, 'CCS', 'BSIT', '2nd', 'David Cooker', 'david'),
(185, 20210205, 'CCS', 'BSEMC', '1st', 'Jackson Mitchell', 'mitchell'),
(186, 20210206, 'CCS', 'BSEMC', '3rd', 'Sheila Hills', 'hills'),
(187, 20210207, 'CCS', 'BSEMC', '2nd', 'Patricia Adventura', 'adventura'),
(188, 20210208, 'CCS', 'BSEMC', '2nd', 'Ashley Bliss', 'bliss'),
(189, 20210209, 'CCS', 'BSEMC', '2nd', 'Troy Humming', 'troy'),
(190, 20210210, 'CHTM', 'BSHM', '1st', 'Happy Quinn', 'quinn'),
(191, 20210211, 'CHTM', 'BSHM', '3rd', 'Harley Beach', 'beach'),
(192, 20210212, 'CHTM', 'BSHM', '1st', 'Charles Barney', 'charles'),
(193, 20210213, 'CHTM', 'BSHM', '1st', 'Cristina Talaman', 'talaman'),
(194, 20210214, 'CHTM', 'BSHM', '1st', 'Blake Vitane', 'blake'),
(195, 20210215, 'CHTM', 'BSHM', '1st', 'Hiro Matchida', 'hiro'),
(196, 20210216, 'CHTM', 'BSHM', '2nd', 'Sevi Montero', 'sevi'),
(197, 20210217, 'CHTM', 'BSHM', '2nd', 'Paolo Lool', 'lool'),
(198, 20210218, 'CHTM', 'BSHM', '2nd', 'Joseph Bigtal', 'bigtal'),
(199, 20210219, 'CBA', 'BSCA', '1st', 'Sherwin Rivera', 'rivera'),
(200, 20210220, 'CBA', 'BSBA', '3rd', 'Joanne Crisostomo', 'joanne'),
(201, 20210203, 'CBA', 'BSCA', '2nd', 'Juaquin Ibarra', 'ibarra'),
(202, 20210204, 'CBA', 'BSBA', '1st', 'Jusmiyo Maricar', 'maricar');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reserveNo` int(11) NOT NULL,
  `studentID` int(20) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `uniform_type` varchar(50) NOT NULL,
  `uniform_size` varchar(20) NOT NULL,
  `uniform_qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reserveNo`, `studentID`, `Course`, `Fullname`, `uniform_type`, `uniform_size`, `uniform_qty`) VALUES
(77, 201911514, 'BSEMC', 'Christian Mallari', 'Mens Polo Uniform', 'M', 2),
(78, 201910322, 'BSIT', 'Arshley Tan', 'Mens Polo Uniform', 'M', 2),
(79, 201910322, 'BSIT', 'Arshley Tan', 'Mens Polo Uniform', 'L', 1),
(80, 201910322, 'BSIT', 'Arshley Tan', 'PE Shirt', 'S', 1),
(81, 201911715, 'BSIT', 'Beverly Karen Bernardino', 'Womens Blouse Uniform', 'M', 2),
(82, 201910278, 'BSIT', 'Fatrizha Alejah Boongaling', 'PE Shirt', 'M', 1),
(83, 201910278, 'BSIT', 'Fatrizha Alejah Boongaling', 'PE Jogging pants', 'L', 1),
(84, 201911284, 'BSIT', 'John Albert De Vera', 'Mens Polo Uniform', 'M', 3),
(85, 201810411, 'BSCA', 'John Victor Fabon', 'Male Uniform Bundle', 'S', 2),
(86, 201911710, 'BSEMC', 'Daiki Hayashi', 'Mens Polo Uniform', 'M', 2),
(87, 201911373, 'BSCS', 'John Angelo Vergel', 'Male Uniform Bundle', 'M', 3),
(92, 201910322, 'BSIT', 'Arshley Tan', 'PE Uniform Bundle', 'M', 1),
(93, 201910322, 'BSIT', 'Arshley Tan', 'Male Uniform Bundle', 'M', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reserveNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserveNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

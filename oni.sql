-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2016 at 09:23 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oni`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `bookname` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`sl`, `year`, `sem`, `subject`, `bookname`, `link`) VALUES
(2, '1', '1', 'Computer Fundamentals', 'Computer Fundamentals,Nortons Computer Fundamentals', 'https://conputerFundamentals.com,https://www.norton.com'),
(3, '1', '1', 'structured Programming language', 'Teach Yourself C(Herbert Schildt),Programming in ANSI C(E Balagurusamy),Computer Programming(Tamim Shahriar Subin),Programming With C(SCHAUM''S ouTlines)', 'link'),
(4, '1', '1', 'Physics', 'HEAT AND THERMODYNAMICS(BRIJ LAL,N SUBRAHMANYAM),WAVES AND OSCILLATION(N Subrahmanyam)', 'link'),
(5, '1', '1', 'Mathematics -1', 'College Higher Algebra & fundamentals of mathematics(Prof Md.ABDUR RAHMAN),Co-ordinate Geometry with Vector Analysis(A.F.M.ABDUR RAHMAN,P.KBHATTACHARJEE),CALCULUS(Howard Anton)', 'link'),
(6, '1', '1', 'English', 'English I, English II, English III, English IV', 'link'),
(7, '1', '2', 'Compiler Design and Construction', 'Principle Of Compiler Design(Alfred V.Aho,Jeffrey D.Ullman)', 'link'),
(8, '1', '2', 'Computer Networks', 'Computer Networks(ANDREW S. TANENBAUM)', 'link'),
(9, '1', '2', 'Software Engineering and Information System Design', 'Software Engineering(Summerville)', 'link'),
(10, '1', '2', 'Artificial Intelligence ', 'Artificial Intelligence(Stuart Russell,Peter Norvig,Pearson)', '');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE IF NOT EXISTS `syllabus` (
  `ys` varchar(10) NOT NULL,
  `cc` varchar(100) NOT NULL,
  `title` varchar(400) NOT NULL,
  `marks` int(11) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`ys`, `cc`, `title`, `marks`, `credits`) VALUES
('ys', 'cc', 'title', 0, 0),
('11', 'CSE-1101', 'Computer Fundamentals', 50, 2),
('11', 'CSE-1103', 'Structured Programming Labguage', 100, 3),
('11', 'CSEL-1104', 'Structured Programming Labguage lab', 50, 2),
('11', 'CSER-1105', 'Mathematics -l (Fundamentals of Mathematics,Differential Calculus & Co-ordinate Geometry)', 100, 3),
('11', 'CSER-1107', 'Physics', 100, 3),
('11', 'CSERL-1108', 'Physics Lab', 50, 2),
('11', 'CSER-1109', 'English', 100, 3),
('12', 'CSE-1201', 'Object Oriented Programming Language', 100, 3),
('12', 'CSEL-1202', 'Object Oriented Programming Language Lab', 50, 2),
('12', 'CSE-1203', 'Electrical Circuit Analysis', 50, 2),
('12', 'CSE-1205', 'Basic Electronics', 50, 2),
('12', 'CSEL-1206', 'Electrical & Electronics Lab', 50, 2),
('12', 'CSER-1207', 'Mathematics -ll (Integral Calculus,Ordinary and Partial Differential Equations)', 100, 3),
('12', 'CSER-1209', 'Discrete Mathematics ', 100, 3),
('12', 'CSEV-1210', 'Viva-Voce ', 50, 2),
('21', 'CSE-2101', 'Data Structures', 100, 3),
('21', 'CSEL-2102', 'Data Structures Lab', 50, 2),
('21', 'CSE-2103', 'Digital Logic Design', 100, 3),
('21', 'CSEL-2104', 'Digital Logic Design Lab', 50, 2),
('21', 'CSER-2105', 'Mathematics- lll(Matrices, Vectors, and Fourier Analysis)', 100, 3),
('21', 'CSER-2107', 'Introduction to Statistics and Probability', 100, 3),
('21', 'CSER-2109', 'Economics', 50, 2),
('21', 'CSER-2109', 'Financial and Managerial Accounting', 100, 3),
('22', 'CSE-2201', 'Data and Telecommunication', 100, 3),
('22', 'CSE-2203', 'Database Management Systems', 100, 3),
('22', 'CSEL-2204', 'Database Management Systems Lab', 50, 2),
('22', 'CSER-2205', 'Mathematics-IV (Complex Variable, Laplace Transforms)', 100, 3),
('22', 'CSER-2207', 'Numerical Analysis', 100, 3),
('22', 'CSE-2209', 'Algorithms', 100, 3),
('22', 'CSEL-2210', 'Algorithms Lab', 50, 2),
('22', 'CSEV-2212', 'Viva-Voce', 50, 2),
('31', 'CSE-3101', 'Theory of Computation', 100, 3),
('31', 'CSE-3103', 'Mathematical Analysis for Computer Science', 100, 3),
('31', 'CSE-3105', 'Operating Systems', 100, 3),
('31', 'CSEL-3106', 'Operating Systems Lab', 50, 2),
('31', 'CSE-3107', 'Microprocessor and Assembly Language', 100, 3),
('31', 'CSEL-3108', 'Microprocessor and Assembly Language Lab', 50, 2),
('31', 'CSE-3109', 'Computer Architecture', 100, 3),
('32', 'CSE-3201', 'Compiler Design and Construction', 100, 3),
('32', 'CSEL-3202', 'Compiler Design and Construction Lab', 50, 2),
('32', 'CSE-3203', 'Computer Networks', 100, 3),
('32', 'CSEL-3204', 'Computer Networks Lab', 50, 2),
('32', 'CSE-3205', 'Software Engineering and Information System Design', 100, 3),
('32', 'CSEL-3206', 'Information Systems Analysis , Software Design & Develop Lab', 50, 2),
('32', 'CSE-3207', 'Artificial Intelligence', 100, 3),
('32', 'CSEL-3208', 'Artificial Intelligence Lab', 50, 2),
('32', 'CSEV-3210', 'Viva-Voce', 50, 2),
('41', 'CSE-4101', 'Computer Peripheral and Interfacing', 100, 3),
('41', 'CSEL-4102', 'Computer Peripheral and Interfacing Lab', 50, 2),
('41', 'CSE-4103', 'Internet Programming', 100, 3),
('41', 'CSEL-4104', 'Internet Programming Lab', 50, 2),
('41', 'CSE-4105', 'Computer Graphics', 100, 3),
('41', 'CSEL-4106', 'Computer Graphics Lab', 50, 2),
('41', 'CSE-41**', 'Option-I', 100, 3),
('41', 'CSEP-4114', 'Project and Thesis', 50, 2),
('41', 'CSE-4107', 'Cryptography and Network Security', 100, 3),
('41', 'CSE-4109', 'Fiber Optic Communication', 100, 3),
('41', 'CSE-4113', 'Pattern Recognition', 100, 3),
('42', 'CSE-4201', 'Design and Testing of VLSI Systems', 100, 3),
('42', 'CSEL-4202', 'Design and Testing of VLSI Systems Lab', 50, 2),
('42', 'CSE-4203', 'Multimedia Systems', 50, 2),
('42', 'CSE-4205', 'Wireless Mobile Communication', 50, 2),
('42', 'CSE-42**', 'Option- II A', 100, 3),
('42', 'CSEL-42**', 'Option- II A Lab', 50, 1),
('42', 'CSE-42**', 'Option- II B', 50, 1),
('42', 'CSEL-42**', 'Option- II B Lab', 50, 1),
('42', 'CSE-4222', 'Viva-Voce', 50, 2),
('42', 'CSEP-4224', 'Project and Thesis', 50, 2),
('42', 'CSE-4207', 'Simulation & Modeling', 100, 3),
('42', 'CSEL-4208', 'Simulation & Modeling Lab', 50, 1),
('42', 'CSE-4209', 'Distributed Systems', 100, 3),
('42', 'CSEL-4210', 'Distributed Systems Lab', 50, 1),
('42', 'CSE-4211', 'Digital Signal Processing', 100, 3),
('42', 'CSEL-4212 ', 'Digital Signal Processing Lab', 50, 1),
('', 'CSE-4213', 'Network Routing and Switching', 100, 3),
('', 'CSEL-4214 ', 'Network Routing and Switching Lab', 50, 1),
('', 'CSE-4215', 'System Programming', 100, 3),
('', 'CSEL-4216', 'System Programming Lab', 50, 1),
('', 'CSE-4217 ', 'Distributed Database System', 100, 3),
('', 'CSEL-4218 ', 'Distributed Database System Lab', 50, 1),
('', 'CSE-4219', 'Neural Network & Fuzzy System', 100, 3),
('', 'CSEL-4220', 'Neural Network & Fuzzy System Lab', 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user`, `pass`) VALUES
('user1', 'lumas');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

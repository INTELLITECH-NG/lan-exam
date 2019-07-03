-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2013 at 12:51 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE IF NOT EXISTS `choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(300) NOT NULL,
  `opt` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question`, `opt`) VALUES
(1, 'QID-AZX65BQM', '3'),
(2, 'QID-AZX65BQM', '4'),
(3, 'QID-AZX65BQM', '5'),
(4, 'QID-AZX65BQM', '6'),
(5, 'QID-JGUKIBZW', 'science'),
(6, 'QID-JGUKIBZW', 'math'),
(7, 'QID-JGUKIBZW', 'eng ang'),
(8, 'QID-JGUKIBZW', 'lang'),
(9, 'QID-OBV66VJY', 'k'),
(10, 'QID-OBV66VJY', 'l'),
(11, 'QID-OBV66VJY', 'm'),
(12, 'QID-OBV66VJY', 'n'),
(13, 'QID-FP3ED0SF', 'l'),
(14, 'QID-FP3ED0SF', 'j'),
(15, 'QID-FP3ED0SF', 'k'),
(16, 'QID-FP3ED0SF', 'f'),
(17, 'QID-4YMHFF0R', 'h'),
(18, 'QID-4YMHFF0R', 'j'),
(19, 'QID-4YMHFF0R', 'u'),
(20, 'QID-4YMHFF0R', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(30) NOT NULL,
  `course_description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_description`) VALUES
(2, 'BSIS', 'Bachelor Of Science in Information Systems'),
(3, 'BSIT', 'Bachelor of Science in Information Technology'),
(4, 'BSOA', 'bla bla');

-- --------------------------------------------------------

--
-- Table structure for table `facilatator`
--

CREATE TABLE IF NOT EXISTS `facilatator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `facilatator`
--

INSERT INTO `facilatator` (`id`, `username`, `password`, `firstname`, `lastname`) VALUES
(3, 'n', 'n', 'm', 'n'),
(4, 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `instruction`
--

CREATE TABLE IF NOT EXISTS `instruction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instruction` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `instruction`
--

INSERT INTO `instruction` (`id`, `instruction`) VALUES
(1, 'sabat lang asta matapos ang exam');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(300) NOT NULL,
  `answer` varchar(300) NOT NULL,
  `course` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `qid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `answer`, `course`, `cat`, `qid`) VALUES
(1, '1+2', '3', 'BSIT', 'Math', 'QID-AZX65BQM'),
(2, 'What is Science', 'science', 'BSIT', 'Science', 'QID-JGUKIBZW'),
(3, 'kkkkkkk', 'k', 'BSIT', 'English', 'QID-OBV66VJY'),
(4, 'lllllll', 'l', 'BSIT', 'History', 'QID-FP3ED0SF'),
(5, 'hhhhhh', 'h', 'BSIT', 'Geography', 'QID-4YMHFF0R'),
(6, 'what is that', '', 'BSIT', 'Essay', '');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE IF NOT EXISTS `reference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference_number` varchar(30) NOT NULL,
  `owner` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`id`, `reference_number`, `owner`) VALUES
(1, 'BCC-6PA4ZJE4', 'used'),
(2, 'BCC-TJFHK6PA', 'used'),
(4, 'BCC-HMMFBBKS', 'used'),
(5, 'BCC-2QKH5RBQ', 'used'),
(6, 'BCC-HYE7KQFC', 'used'),
(7, 'BCC-LDSB703G', 'used');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `passing` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `passing`) VALUES
(1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `refnumber` varchar(300) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `score` int(11) NOT NULL,
  `easy` text NOT NULL,
  `facilatator` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `refnumber`, `firstname`, `lastname`, `middlename`, `course`, `username`, `status`, `score`, `easy`, `facilatator`, `duration`) VALUES
(3, 'BCC-6PA4ZJE4', 'l', 'l', 'l', 'BSIS', 'l', '', 0, '', 'a a', '100'),
(4, 'BCC-TJFHK6PA', 'argie', 'policarpio', 'blank', 'BSIT', 'bcc', 'ready', 10, 'my name is argie policarpio, ', 'a a', '100'),
(5, 'BCC-HMMFBBKS', 'm', 'm', 'm', 'BSIT', 'm', 'ready', 7, 'my name is argie', 'a a', '100'),
(6, 'BCC-2QKH5RBQ', 'k', 'k', 'k', 'BSIT', 'l', '', 0, '', 'a a', '100'),
(7, 'BCC-HYE7KQFC', 'argie', 'policarpio', 'none', 'BSIT', 'argie', '', 0, 'uyuuyuyuyuy', 'a a', '100'),
(8, 'BCC-LDSB703G', 'p', 'p', 'p', 'BSIT', 'p', 'ready', 25, 'dasdasdasasasasas', 'a a', '100');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject`) VALUES
(2, 'Math'),
(3, 'Science'),
(4, 'English'),
(5, 'History'),
(6, 'Geography');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2019 at 07:23 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

DROP TABLE IF EXISTS `admintb`;
CREATE TABLE IF NOT EXISTS `admintb` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`admin_id`, `username`, `pass`) VALUES
(1, 'jyotsna', '123'),
(28, 'ashwini', '123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `subject`, `email`, `feedback`) VALUES
(3, 'viru', 'sadasdad', 'viru@gmail.com', 'ty67i87o9');

-- --------------------------------------------------------

--
-- Table structure for table `questions_table`
--

DROP TABLE IF EXISTS `questions_table`;
CREATE TABLE IF NOT EXISTS `questions_table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `question` varchar(1000) NOT NULL,
  `a1` varchar(1000) NOT NULL,
  `a2` varchar(1000) NOT NULL,
  `a3` varchar(1000) NOT NULL,
  `a4` varchar(1000) NOT NULL,
  `correct` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_table`
--

INSERT INTO `questions_table` (`id`, `question`, `a1`, `a2`, `a3`, `a4`, `correct`) VALUES
(1, 'what is html', 'lang', 'design', 'markup', 'none', 'markup'),
(2, 'what is php', 'lang', 'backend', 'frontend', 'none', 'backend'),
(3, 'what is bootstrap', 'framework of html,css,js', 'none', 'lang', 'library', 'framework of html,css,js'),
(4, 'what is css', 'lang', 'cascading style sheet', 'none', 'markup', 'cascading style sheet'),
(5, 'HTML uses', 'User defined tags', 'Pre-specified tags', 'Fixed tags defined by the language', 'Tags only for linking', 'Fixed tags defined by the language'),
(6, 'HTML is what type of language ?', 'Scripting Language', 'Markup Language', 'Programming Language', 'Network Protocol', 'Markup Language'),
(7, 'HTML uses', 'User defined tags', 'Pre-specified tags', 'Fixed tags defined by the language', 'Tags only for linking', 'Fixed tags defined by the language'),
(8, 'Fundamental HTML Block is known as ___________.', 'HTML Body', 'HTML Tag', 'HTML Attribute', 'HTML Element', 'HTML Tag'),
(10, 'HTML web pages can be read and rendered by _________.', 'Compiler', 'Server', 'Web Browser', 'Interpreter', 'Web Browser'),
(11, 'Which of the following is not a browser ?', 'Microsofts Bing', 'Netscape Navigator', 'Mozilla Firefox', 'Opera', 'Microsofts Bing'),
(12, 'Choose the correct HTML element for the largest heading:', '&lt;h1&gt;', '&lt;head&gt;', '&lt;heading&gt;', '&lt;h6&gt;', '&lt;h1&gt;'),
(13, 'What is the correct HTML element for inserting a line break?', '&lt;br&gt;', '&lt;lb&gt;', '&lt;break&gt;', 'none', '&lt;br&gt;'),
(14, 'What is the correct HTML for adding a background color?', '&lt;background&gt;red&lt;/background&gt;', '&lt;body bg=&quot;yellow&quot;&gt;', '&lt;body style=&quot;background-color:yellow;&quot;&gt;', 'none', '&lt;body style=&quot;background-color:yellow;&quot;&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `password`, `email`) VALUES
(95, 'bhushan11', '25d55ad283aa400af464c76d713c07ad', 'bvikharankar@gmail.com'),
(93, 'pratik1', '25d55ad283aa400af464c76d713c07ad', 'pratik@gmail.com'),
(92, 'prachi', '25d55ad283aa400af464c76d713c07ad', 'prachi@gmail.com'),
(91, 'ashu', '25d55ad283aa400af464c76d713c07ad', 'ashu@gmail.com'),
(90, 'snehal', '25d55ad283aa400af464c76d713c07ad', 'snehal@gmail.com'),
(89, 'viru', '25d55ad283aa400af464c76d713c07ad', 'viru@gmail.com'),
(88, 'shweta', '25d55ad283aa400af464c76d713c07ad', 'shweta@gmail.com'),
(87, 'jyotsna', '25d55ad283aa400af464c76d713c07ad', 'jvikharankar@gmail.com'),
(101, 'ashwini', '25d55ad283aa400af464c76d713c07ad', 'bhagyashri@gmail.com'),
(102, 'rani', '25d55ad283aa400af464c76d713c07ad', 'rani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_exam`
--

DROP TABLE IF EXISTS `student_exam`;
CREATE TABLE IF NOT EXISTS `student_exam` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `total_que` int(255) NOT NULL,
  `attempt` varchar(255) NOT NULL,
  `score` int(255) NOT NULL,
  `stud_id` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `stud_id` (`stud_id`)
) ENGINE=MyISAM AUTO_INCREMENT=364 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_exam`
--

INSERT INTO `student_exam` (`id`, `name`, `total_que`, `attempt`, `score`, `stud_id`) VALUES
(363, 'jyotsna', 13, '1', 0, 87),
(362, 'viru', 15, '6', 4, 89);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

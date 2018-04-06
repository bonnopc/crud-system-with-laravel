-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2016 at 02:28 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assign5`
--

-- --------------------------------------------------------

--
-- Table structure for table `stu_reg`
--

CREATE TABLE IF NOT EXISTS `stu_reg` (
`id` int(5) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `stu_reg`
--

INSERT INTO `stu_reg` (`id`, `fname`, `lname`, `uname`, `email`, `pass`, `timestamp`) VALUES
(2, 'dasasd', 'dasdasdas', 'dasdafsdgs', 'sdfsdf@asjknj.com', 'pass', '2016-11-17 13:19:45'),
(4, 'asdas', 'dszfsd', 'sfdsdf', 'dasdas@asddad', 'fsdffsd', '2016-11-15 18:27:49'),
(5, 'bonno', 'pc', 'bonnopcasdas', 'bonnopc@hotmail.com', 'asjdasjkdn', '2016-11-15 18:27:11'),
(6, 'bonno', 'pc', 'bonnopc', 'kasdn@gau.com', 'adsas', '2016-11-11 20:02:00'),
(7, 'bonno', 'pcdasdsa', 'bonnopc', 'kasdn@gau.com', 'asddsadas', '2016-11-17 12:53:30'),
(8, 'jkbkjb', 'ljkslk', 'psjsjk', 'skm@klmsklm', 'slkmnsklmskl', '2016-11-11 20:13:34'),
(9, 'jkbkjb', 'ljkslk', 'psjsjk', 'skm@klmsklm', 'dsadasda', '2016-11-11 20:16:16'),
(10, 'jkbkjb', 'ljkslk', 'psjsjk', 'skm@klmsklm', 'sdfsdf', '2016-11-11 20:19:24'),
(11, 'jkbkjb', 'ljkslk', 'psjsjk', 'skm@klmsklm', 'sdfsdf', '2016-11-11 20:19:24'),
(12, 'jkbkjb', 'ljkslk', 'psjsjk', 'skm@klmsklm', 'asdasd', '2016-11-11 20:28:43'),
(13, 'jkbkjb', 'ljkslk', 'psjsjk', 'skm@klmsklm', 'saSas', '2016-11-11 20:29:11'),
(14, 'jkbkjb', 'ljkslk', 'psjsjk', 'skm@klmsklm', 'asdasd', '2016-11-11 20:29:22'),
(15, 'jkbkjb', 'ljkslk', 'psjsjk', 'skm@klmsklm', 'dasdasd', '2016-11-11 20:30:37'),
(16, 'fooo', 'looo', 'foolooo', 'foo@looo', 'lasdnflksnf', '2016-11-11 21:21:04'),
(19, 'fooo', 'looo', 'foolooo', 'foo@looo', 'sdfsdfsf', '2016-11-11 21:25:33'),
(20, '', '', '', '', '', '2016-11-15 14:37:32'),
(21, 'faisal', 'jnsjkdn', 'kasnk', 'sknd@dknksn', 'kasdmkldms', '2016-11-15 16:46:05'),
(22, 'faisal', 'jnsjkdn', 'kasnk', 'sknd@dknksn', 'asdasdasd', '2016-11-15 16:47:50'),
(24, 'faisal', 'jnsjkdn', 'kasnk', 'sknd@dknksn', 'asdasdasdas', '2016-11-15 16:56:32'),
(25, 'faisalddd', 'jnsjkdn', 'kasnk', 'sknd@dknksn', 'sdasdasd', '2016-11-17 13:16:06'),
(27, 'faisal', 'jnsjkdn', 'kasnk', 'sknd@dknksn', 'sdfsdfsdf', '2016-11-15 17:00:11'),
(31, 'foo', 'loo', 'fooloo', 'foo@loo.com', 'lsdamndlksamnda', '2016-11-17 13:07:46'),
(32, 'first', 'last', 'firstandlast', 'first@last.com', 'kjsndjksan', '2016-11-17 13:09:08'),
(33, 'dddddd', 'dddddd', 'nnnnn', 'nnnnn@mmmm.com', 'sadndasd', '2016-11-17 13:19:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stu_reg`
--
ALTER TABLE `stu_reg`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stu_reg`
--
ALTER TABLE `stu_reg`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

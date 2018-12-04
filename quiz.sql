-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 07:34 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answar`
--

CREATE TABLE `answar` (
  `aid` int(250) NOT NULL,
  `ans` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answar`
--

INSERT INTO `answar` (`aid`, `ans`, `ans_id`) VALUES
(1, 'Home tool mark up language', 1),
(2, 'hyperlink and text mark up language', 1),
(3, 'hyper text mark up language', 1),
(4, 'none of the above ', 1),
(5, 'th first  div element', 2),
(6, 'all div element', 2),
(7, ' the last div element', 2),
(8, 'non of the above', 2),
(9, 'the head section ', 3),
(10, 'the body section ', 3),
(11, 'both the head section and the body section  ', 3),
(12, 'none of the above  ', 3),
(13, 'function myfunction()  ', 4),
(14, 'function:myfunction()  ', 4),
(15, 'function=myfunction()  ', 4),
(16, 'none of the above  ', 4),
(17, '.container  ', 5),
(18, '.container_fixed  ', 5),
(19, '.container_fluid  ', 5),
(20, 'none of the above  ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(250) NOT NULL,
  `q` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `q`, `ans_id`) VALUES
(1, 'What does html stand for?', 1),
(2, 'look at the following selector :$(\"div\").what does it select?', 5),
(3, 'where isthe correct place to insert a java script?', 9),
(4, 'how to creat the function in java scrip?', 13),
(5, 'which class provide a responsive fixed width container?', 17);

-- --------------------------------------------------------

--
-- Table structure for table `user_sign`
--

CREATE TABLE `user_sign` (
  `uid` int(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `userpassward` varchar(250) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answar`
--
ALTER TABLE `answar`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `user_sign`
--
ALTER TABLE `user_sign`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answar`
--
ALTER TABLE `answar`
  MODIFY `aid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_sign`
--
ALTER TABLE `user_sign`
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 07:37 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `uid` decimal(65,0) NOT NULL,
  `cid` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`uid`, `cid`) VALUES
('117237710842059343296', '1');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cid` int(11) NOT NULL,
  `id` decimal(50,0) NOT NULL DEFAULT '992006536799200653679920065367',
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `website` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `id`, `fname`, `lname`, `email`, `gender`, `name`, `address`, `contact`, `website`) VALUES
(1, '105386114922645099652', 'Nimesh', 'Patil', 'nimesh1010patil@gmail.com', 'male', 'tcs', '448, near ram mandir, rai village, uttan road, bhayandar(w.)', '9920065367', 'http://localhost/Lit');

-- --------------------------------------------------------

--
-- Table structure for table `contacted`
--

CREATE TABLE `contacted` (
  `uid` decimal(65,0) NOT NULL,
  `vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `sid` int(11) NOT NULL,
  `uid` decimal(50,0) NOT NULL DEFAULT '992006536799200653679920065367',
  `c++` tinyint(1) NOT NULL,
  `java` tinyint(1) NOT NULL,
  `python` tinyint(1) NOT NULL,
  `angularjs` tinyint(4) NOT NULL DEFAULT '0',
  `node.js` tinyint(4) NOT NULL DEFAULT '0',
  `c#.NET` tinyint(4) NOT NULL DEFAULT '0',
  `DBMS` tinyint(4) NOT NULL DEFAULT '0',
  `Data Structures` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`sid`, `uid`, `c++`, `java`, `python`, `angularjs`, `node.js`, `c#.NET`, `DBMS`, `Data Structures`) VALUES
(1, '1', 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `id` decimal(50,0) NOT NULL DEFAULT '992006536799200653679920065367',
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `ssc` varchar(500) NOT NULL,
  `hsc` varchar(500) NOT NULL,
  `graduation` varchar(500) NOT NULL,
  `ssc_s` varchar(50) NOT NULL,
  `hsc_s` varchar(50) NOT NULL,
  `graduation_s` text NOT NULL,
  `post_graduation` varchar(50) NOT NULL,
  `post_graduation_s` varchar(50) NOT NULL,
  `post_graduation_marks` text NOT NULL,
  `graduation_m` varchar(50) NOT NULL,
  `experience_at` varchar(50) NOT NULL DEFAULT 'none',
  `experience_of` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `id`, `fname`, `lname`, `email`, `gender`, `contact`, `address`, `ssc`, `hsc`, `graduation`, `ssc_s`, `hsc_s`, `graduation_s`, `post_graduation`, `post_graduation_s`, `post_graduation_marks`, `graduation_m`, `experience_at`, `experience_of`) VALUES
(1, '117237710842059343296', 'Nimesh', 'Patil', 'nimesh10patil@gmail.com', 'male', 9920065367, '448, near ram mandir, rai village, uttan road, bhayandar(w.)', '93', '85', '', 'avm', '55', '444', 'ME', 'nn', '8', '44', 'infosys', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vecancy`
--

CREATE TABLE `vecancy` (
  `id` int(100) NOT NULL,
  `cid` int(100) NOT NULL,
  `c++` tinyint(1) NOT NULL DEFAULT '1',
  `java` tinyint(1) NOT NULL,
  `python` tinyint(1) NOT NULL,
  `angularjs` tinyint(4) NOT NULL DEFAULT '0',
  `node.js` tinyint(4) NOT NULL DEFAULT '0',
  `c#.NET` tinyint(4) NOT NULL DEFAULT '0',
  `DBMS` tinyint(4) NOT NULL DEFAULT '0',
  `Data Structures` tinyint(4) NOT NULL DEFAULT '0',
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vecancy`
--

INSERT INTO `vecancy` (`id`, `cid`, `c++`, `java`, `python`, `angularjs`, `node.js`, `c#.NET`, `DBMS`, `Data Structures`, `description`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'forth'),
(2, 1, 0, 1, 0, 0, 0, 0, 1, 1, 'netbeans');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vecancy`
--
ALTER TABLE `vecancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vecancy`
--
ALTER TABLE `vecancy`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

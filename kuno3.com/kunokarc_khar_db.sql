-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 09:42 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kunokarc_khar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `A_ID` int(11) NOT NULL,
  `CAT_ID` int(100) NOT NULL,
  `HEADING` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `CONTENT` text COLLATE utf8_unicode_ci NOT NULL,
  `DATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`A_ID`, `CAT_ID`, `HEADING`, `CONTENT`, `DATE`) VALUES
(11, 12, 'State of the Nation Address 2019', '<p><s><strong>President</strong></s> Cyril<span style=\"font-size:24px\"> Ramaphosa</span> has delivered the State of the Nation Address (SoNA) during a joint sitting of the two Houses of Parliament (National Assembly and National Council of Provinces) on 7 February 2019 at 19h00. The theme for this year s event was: Following up on our commitments: Making Your Future Work Better . During the SONA, the President addressed the nation as both the Head of State and Head of Government. He presented a plan to address South Africa s needs for the year ahead. Since it is a Joint Sitting of both Houses, the Speaker of the NA and the Chairperson of the NCOP host the event. All the three (3) Arms of the State, namely; the Legislature, the Executive and the Judiciary attend this event.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:22px\">It</span> is one of the rare moments whereby all three Arms of the State meet in one place. As one of the important ceremonies of the state, it is broadcasted live on national television so that the general population is afforded the chance to see it. The State of the Nation Address is important for all South Africans because it tells us what government s Programme of Action is for the year ahead. The Programme of Action is government s plans for the country and people of South Africa. By being aware of what government is doing, everyone can become involved and also take part in government s plans to build a better life for all. The State of the Nation Address was broadcast live on: DStv Channel 408, SABC TV, eNCA, ANN7, SABC radio stations and Parliament s YouTube Channel. FAST FACTS The State of the Nation Address is divided into three parts. The first is the important public participation role in the ceremony when the Civil Guard of Honour welcomes the President and his guests as they walk along the red carpet. This is followed by a state ceremonial, which includes a 21-gun salute and the South African Air Force flypast and finally the official address by the President. Members of the South African National Defence Force (SANDF) line the route that the President takes to Parliament. The Military Guard of Honour participates in the ceremony and the military band plays South Africa s national anthem. In a general election year, two State of the Nation Addresses are delivered. The State of the Nation Address is one of the rare occasions where the three arms of State, namely the Executive represented by the President, Deputy President and Ministers; the Judiciary, represented by the country s Chief Justice and the Judge Presidents; and the Legislature, represented by the Members of Parliament gather in one place. The provincial and local spheres of government are also represented. Related links Speeches and statements</p>\r\n', '2019-04-10 21:02:29'),
(13, 15, 'my pay', '<h1><s><strong><em>pay us</em></strong></s></h1>\n', '2019-04-15 21:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CAT_ID` int(11) NOT NULL,
  `CAT_NAME` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CAT_ID`, `CAT_NAME`) VALUES
(19, 'Money laws'),
(15, 'Money making'),
(12, 'Tax');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `ID` int(11) NOT NULL,
  `JOB_TITLE` varchar(100) COLLATE utf8_bin NOT NULL,
  `JOB_POSITION` varchar(100) COLLATE utf8_bin NOT NULL,
  `JOB_LOCATION` varchar(100) COLLATE utf8_bin NOT NULL,
  `EXPIRY_DATE` date NOT NULL,
  `IMAGE` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `CONTENT` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`ID`, `JOB_TITLE`, `JOB_POSITION`, `JOB_LOCATION`, `EXPIRY_DATE`, `IMAGE`, `CONTENT`) VALUES
(7, 'Developer', 'Software engineering', 'Bende', '2020-03-20', 'NULL', '<p>Software Engineer Job Responsibilities: Develops information systems by designing, developing, and installing software so....</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `RATE_ID` int(11) NOT NULL,
  `RATE_VALUE` int(11) NOT NULL,
  `RATE_TYPE` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`RATE_ID`, `RATE_VALUE`, `RATE_TYPE`) VALUES
(1, 1, 'Worst'),
(2, 2, 'Bad'),
(3, 3, 'Better'),
(4, 4, 'Good'),
(5, 5, 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `REV_ID` int(11) NOT NULL,
  `REV_FIRSTNAME` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `REV_LASTNAME` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `RATE_ID` int(11) NOT NULL,
  `REV_COMMENT` text COLLATE utf8_bin DEFAULT NULL,
  `REV_DATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`REV_ID`, `REV_FIRSTNAME`, `REV_LASTNAME`, `RATE_ID`, `REV_COMMENT`, `REV_DATE`) VALUES
(3, 'Simamkele', 'Ndabeni', 4, 'Recently changed Accountant and so far so very good! Good one-to-one care with no hidden/additional charges and prompt responses from the team whenever I have a question.....I would definately recommend you to any of my friends.', '2019-04-21 04:04:00'),
(6, 'K', 'Rachel ', 4, 'Fabulous service. Really helpful and so far have answered all questions promptly. Really happy!\r\n', '2019-09-18 07:37:25'),
(16, 'Sinethemba', 'Mgoqi', 5, 'awesome', '2019-09-30 17:54:09'),
(19, 'Dona', 'Clare', 5, 'I\'ve got the best services', '2019-09-30 22:40:01'),
(20, 'Masibu', 'Mgoqi', 5, 'check', '2019-10-01 16:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `temp_pass`
--

CREATE TABLE `temp_pass` (
  `temp_id` int(11) NOT NULL,
  `temp_email` varchar(100) COLLATE utf8_bin NOT NULL,
  `temp_code` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(11) NOT NULL,
  `USER_NAME` varchar(100) COLLATE utf8_bin NOT NULL,
  `USER_EMAIL_ADDRESS` varchar(100) COLLATE utf8_bin NOT NULL,
  `USER_PASSWORD` varchar(100) COLLATE utf8_bin NOT NULL,
  `USER_FIRSTNAME` varchar(100) COLLATE utf8_bin NOT NULL,
  `USER_LASTNAME` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `USER_NAME`, `USER_EMAIL_ADDRESS`, `USER_PASSWORD`, `USER_FIRSTNAME`, `USER_LASTNAME`) VALUES
(3, 'masibulelemgoqi', 'masibulelemgoqi@gmail.com', '$2y$10$9Tg2eFkTdD7LmmazJZoCIuz23yWTr6OE7b4TIceP.lc23ftWmaAUy', 'Masibulele', 'Mgoqi'),
(4, 'r_vuzane', 'rvuzane@gmail.com', '$2y$10$YgJSGdqa9APl77ihGGij1u7Q8gv/T5FQUInelqW9k/wj6Z28diX42', 'Rholihlahla', 'Vuzane');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`A_ID`),
  ADD KEY `CAT_ID` (`CAT_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CAT_ID`),
  ADD UNIQUE KEY `CAT_NAME` (`CAT_NAME`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `JOB_TITLE` (`JOB_TITLE`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`RATE_ID`),
  ADD UNIQUE KEY `RATE_VALUE` (`RATE_VALUE`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`REV_ID`),
  ADD KEY `RATE_ID` (`RATE_ID`);

--
-- Indexes for table `temp_pass`
--
ALTER TABLE `temp_pass`
  ADD PRIMARY KEY (`temp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`),
  ADD UNIQUE KEY `USER_NAME` (`USER_NAME`),
  ADD UNIQUE KEY `USER_EMAIL_ADDRESS` (`USER_EMAIL_ADDRESS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CAT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `RATE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `REV_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `temp_pass`
--
ALTER TABLE `temp_pass`
  MODIFY `temp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`CAT_ID`) REFERENCES `category` (`CAT_ID`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`RATE_ID`) REFERENCES `ratings` (`RATE_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

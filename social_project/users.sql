-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 05:54 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
`id` int(10) unsigned NOT NULL,
  `from` varchar(255) NOT NULL DEFAULT '',
  `to` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=558 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `from`, `to`, `message`, `sent`, `recd`) VALUES
(549, 'Surender', 'Varnika', 'hey', '2015-04-08 10:04:22', 0),
(550, 'B', 'B', 'aa', '2016-10-22 19:44:50', 1),
(551, 'A', 'B', 'a', '2016-11-09 10:31:14', 1),
(552, 'A', 'B', 'a', '2016-11-10 07:33:42', 1),
(553, 'A', 'B', 'hello', '2016-11-10 07:33:48', 1),
(554, 'A', 'B', 'a', '2016-11-10 07:42:29', 1),
(555, 'A', 'B', 'hello', '2016-11-10 07:42:33', 1),
(556, 'A', 'A', 'hii', '2017-03-29 15:14:00', 1),
(557, 'A', 'B', 'hii', '2017-03-29 15:14:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(11) NOT NULL,
  `status_id` varchar(100) NOT NULL,
  `sender_id` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `status_id`, `sender_id`, `comment`) VALUES
(1, '1', '7', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
`id` int(11) NOT NULL,
  `too` varchar(300) NOT NULL,
  `froom` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `friend1`
--

CREATE TABLE IF NOT EXISTS `friend1` (
`id` int(11) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `friend1`
--

INSERT INTO `friend1` (`id`, `email1`, `email2`) VALUES
(4, 'sdabur1@gmail.com', 'svarnika033@gmail.com'),
(5, 'a', 'a'),
(6, 'a', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`id` int(11) NOT NULL,
  `first` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(300) NOT NULL,
  `city` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `folder` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first`, `password`, `last`, `email`, `image`, `city`, `sex`, `month`, `day`, `year`, `folder`) VALUES
(5, 'Surender', 'nhipata', 'Dabur', 'sdabur1@gmail.com', 'male.jpg', '', 'Male', 'November', '23', '1993', './images/'),
(6, 'Varnika', 'facebook', 'Sharma', 'svarnika033@gmail.com', 'female.jpg', '', 'Female', 'May', '3', '1993', './images/'),
(7, 'a', 'a', 'a', 'a', 'Cute-Sel-selena-gomez-24642116-348-590.jpg', '', 'Male', 'December', '19', '1993', './profiles/'),
(8, 'b', 'b', 'b', 'b', '742089399_261521.gif', '', 'Male', 'March', '15', '1994', './profiles/');

-- --------------------------------------------------------

--
-- Table structure for table `messagenoti`
--

CREATE TABLE IF NOT EXISTS `messagenoti` (
`id` int(11) NOT NULL,
  `send_id` varchar(100) NOT NULL,
  `rec_id` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `messagenoti`
--

INSERT INTO `messagenoti` (`id`, `send_id`, `rec_id`) VALUES
(2, '5', '6'),
(3, '7', '8');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`id` int(11) NOT NULL,
  `sender_id` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `rec_id` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `message`, `rec_id`) VALUES
(1, '6', 'Hi dabur\r\nVarnika this side', '5'),
(2, '5', 'hello dear :)', '6'),
(3, '7', 'hello', '8');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
`id` int(11) NOT NULL,
  `challenge` varchar(300) NOT NULL,
  `home` varchar(100) NOT NULL,
  `current` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `song` varchar(100) NOT NULL,
  `book` varchar(100) NOT NULL,
  `movie` varchar(100) NOT NULL,
  `sports` varchar(100) NOT NULL,
  `tv` varchar(100) NOT NULL,
  `about` varchar(100) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `interested` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `online` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `challenge`, `home`, `current`, `school`, `college`, `song`, `book`, `movie`, `sports`, `tv`, `about`, `relationship`, `interested`, `phone`, `website`, `company`, `online`) VALUES
(5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(7, 'life is a race', 'chennai', 'delhi', 'DPS, delhi', 'vit university', 'national song', '2 states', '2 states', 'cricket', 'Friends', 'master''s student', 'single', 'computers', '99999999999', 'a@gmail.com', 'tcs', '1'),
(8, 'life is a race', '', 'mumbai', 'DPS, delhi', 'vit university', 'national song', '2 states', '2 states', 'cricket', 'Friends', '', '', '', '', '', 'infosys', '1');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
`id` int(11) NOT NULL,
  `message` varchar(300) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend`
--
ALTER TABLE `friend`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend1`
--
ALTER TABLE `friend1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messagenoti`
--
ALTER TABLE `messagenoti`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=558;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `friend`
--
ALTER TABLE `friend`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `friend1`
--
ALTER TABLE `friend1`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `messagenoti`
--
ALTER TABLE `messagenoti`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 10:00 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `romcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `content` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `content`) VALUES
(1, '<p><strong><span style="font-size: 72px;">About</span></strong></p><p><span style="font-size: 24px;">dito yung description ng site.</span></p><p><br></p><p><span style="font-size: 72px;"><strong>Contact</strong></span></p><p><span style="font-size: 72px;">09123545</span></p><p><span style="font-size: 72px;"><br></span></p><p><br></p><p><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `sliderid` int(11) NOT NULL,
  `comment` text NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `userid`, `sliderid`, `comment`, `dateadded`) VALUES
(8, 17, 3, '\nGal Gadot''s Wonder Woman got the tone right last time, which suggested things were looking up. But without director Patty Jenkins around, she''s subject to the dismissive male gaze for which Hollywood''s long been criticized.', '2017-11-22 07:28:40'),
(9, 17, 3, 'There''s some welcome levity, some genuine conversation (as when Bats and Diana share a drink), and a few moments that feel like really good comic book panels (especially mid-credits). For some, that may be enough.', '2017-11-22 07:29:20'),
(10, 17, 3, 'A pointless flail of expensive (yet, somehow, cheap-looking) CGI that no amount of tacked-on quips, or even Gadot''s luminescent star power, can rescue.', '2017-11-22 07:29:33'),
(11, 17, 4, '"Wonder Woman" is a superhero movie, and it fulfills the heroic and mythic demands of that genre, but it''s also an entry in the genre of wisdom literature that shares hard-won insights and long-pondered paradoxes of the past with a sincere intimacy.', '2017-11-22 07:30:39'),
(12, 17, 4, 'The final big action sequence, as now seems always to be the case, is a messy and overwrought CGI extravaganza. But at least the movie that precedes it involves actual characters-likeable ones, even!-exhibiting recognizable human emotions.', '2017-11-22 07:30:52'),
(13, 17, 5, 'Perfectly acceptable as an action movie but inspired as a comedy--which is probably where the Thor franchise should have been aiming from the start.', '2017-11-22 07:31:31'),
(14, 17, 5, 'Tessa''s got the comedic timing to match Taika Waititi''s Thor humor, and the physicality to lead the movie''s pack of superheroes. She''s not trying to outdo the boys; she''s just trying to sip her drink and mind her own business.', '2017-11-22 07:31:44'),
(15, 17, 5, '\nOriginal Score: 3/4\n... fun and a good time... just ignore all the nameless characters dying horribly in the background and everything will be fine.', '2017-11-22 07:32:40');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `religion` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `firstname`, `lastname`, `middlename`, `age`, `sex`, `dob`, `religion`, `address`, `nationality`, `weight`, `height`, `userid`) VALUES
(10, '', 'sad', '', '', 'male', '2015-05-13', '', '', '', '', '', 1),
(11, 'Jordan', 'Sadiwa', 'DLR', '24', 'male', '2015-05-26', 'atheist', 'addres', '[inpy', '234', '345', 10),
(12, 'MyAdmin', 'adada', 'mname', '', 'male', '1970-01-01', 'catholic', '', '', '', '', 9);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `filename`, `active`, `dateadded`) VALUES
(1, '15da49e22b20ca55d4656ead32f143a4.jpg', 1, '2017-11-22 05:10:14'),
(2, '46bbf8e2407a5289a288db4e6baac088.jpg', 1, '2017-11-22 05:15:08'),
(3, '5ee685d5afdeb64cb8a3e6394e47c9bd.jpg', 1, '2017-11-22 05:19:20'),
(4, '56786bf136897a7ac22dd63c82b6907a.jpg', 1, '2017-11-22 05:20:41'),
(5, '5fbbf74bcee1c43a17e1a607be0de257.jpg', 1, '2017-11-22 05:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `photoid` int(11) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `photoid`, `dateadded`) VALUES
(3, 'Justice League', 'Fueled by his restored faith in humanity and inspired by Superman''s selfless act, Bruce Wayne enlists the help of his newfound ally, Diana Prince, to face an even greater enemy. Together, Batman and Wonder Woman work quickly to find and recruit a team of metahumans to stand against this newly awakened threat. But despite the formation of this unprecedented league of heroes--Batman, Wonder Woman, Aquaman, Cyborg and The Flash--it may already be too late to save the planet from an assault of catas', 3, '2017-11-22 05:19:20'),
(4, 'Wonder Woman', 'An Amazon princess (Gal Gadot) finds her idyllic life on an island occupied only by female warriors interrupted when a pilot (Chris Pine) crash-lands nearby. After rescuing him, she learns that World War I is engulfing the planet, and vows to use her superpowers to restore peace. Directed by Patty Jenkins (Monster).', 4, '2017-11-22 05:20:41'),
(5, 'Thor: Ragnarok', 'In Marvel Studios'' "Thor: Ragnarok," Thor is imprisoned on the other side of the universe without his mighty hammer and finds himself in a race against time to get back to Asgard to stop Ragnarok--the destruction of his homeworld and the end of Asgardian civilization--at the hands of an all-powerful new threat, the ruthless Hela. But first he must survive a deadly gladiatorial contest that pits him against his former ally and fellow Avenger--the Incredible Hulk!', 5, '2017-11-22 05:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dateuploaded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(255) NOT NULL,
  `uploaded_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `active` int(11) DEFAULT '0',
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`, `active`, `date_registered`) VALUES
(16, 'admin', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'admin', 0, '2017-11-22 07:26:21'),
(17, 'Jordan Sadiwa', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', '1', 0, '2017-11-22 07:27:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`password`,`type`,`active`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

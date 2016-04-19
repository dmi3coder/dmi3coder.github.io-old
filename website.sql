-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2016 at 03:16 PM
-- Server version: 5.6.28-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `web_experience`
--

CREATE TABLE IF NOT EXISTS `web_experience` (
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `web_experience`
--

INSERT INTO `web_experience` (`name`, `position`, `description`, `link`, `image`, `from_date`, `to_date`, `id`) VALUES
('Imbiss am kreisel (dmi3cafe)', 'Mobile Android developer', 'Inspired with Android SDK, it was my first project for Android.\r\n                            Started in May 2015 I''ve created a lot of features that i''m still using:\r\n                            listview, asynktask, Picasso, slide navigation menu. I''ve been using Parse\r\n                            as a pseudo backend. Got hired by some German cafeteria called "Imbiss\r\n                            am kreisel".', 'http://www.amazon.com/dmi3coder-dmi3cafe/dp/B011M755OA', 'images/exp_dmi3cafe.png', '2015-05-01', '2015-08-16', 1),
('Rai bulletin board', 'Mobile Android developer', 'Started in September 2015, minimal viable prodict was developed less then 2 weeks. Got hired by Russian company Rai, but moreover, I got huge experience in handling the workflow of bulletin board program. It was my first experience with inApp billing and PlayMarket application posting. The project''s wide-open happend in October 2015\r\n', '', 'images/exp_rai.jpg', '2015-09-01', '2015-11-01', 2),
('Fourplaces', 'Backend & Mobile Android developer', 'The more exciting project that I''ve ever made for now! I''m cofounder of\r\n                            Fourplaces - our application for finding cafeterias and events. It''s the\r\n                            point where I''ve realized myself as &nbsp;experienced developer: REST API,\r\n                            Retrofit, okhttp, search, RecyclerView, Parralax effect, realm and a lot\r\n                            of interesting things; on the other hand - entrepreneur: Startup challenge,\r\n                            presentations, advertisement. A lot of books was read, a lot of code was\r\n                            written. Also I''ve developed backend on Spring for this project.&nbsp;', 'http://fourplaces.com/', 'images/exp_fourplaces.png', '2015-12-29', '0000-00-00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `web_skills`
--

CREATE TABLE IF NOT EXISTS `web_skills` (
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_skills`
--

INSERT INTO `web_skills` (`name`, `description`, `image`, `id`) VALUES
('Android SDK', 'Tried android in summer 2014 and was astonished with this power. In 2015\r\n                            started aggresive deep learning: Intents, Content providers, Services and\r\n                            much much more&nbsp;', 'images/androidDev.png', 1),
('Java SE', 'Started learning in fall 2015 righ after small experience with Android\r\n                            SDK because strong basics are matter. &nbsp;Have good backgound in Java\r\n                            SE + Java 8 experience such as lambdas and streams', 'images/javase.jpg', 2),
('API', 'Had some small experience with Parse SDK. In winter 2015 started deep\r\n                            learning of REST API with Retrofit library. In spring 2016 created own\r\n                            Spring backend with REST API: authorization and MongoDB.', 'images/rest.png', 3),
('Some more', 'Have few\r\n                            <a href="https://github.com/dmi3coder/jZeldaProject">experience with jMonkeyEngine</a>, Spring Framework and huge amount of libraries. Also have good experience\r\n                            with some databases such as: SQLite, Realm, MongoDB\r\n                            <br>', 'images/android.jpg', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `web_experience`
--
ALTER TABLE `web_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_skills`
--
ALTER TABLE `web_skills`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `web_experience`
--
ALTER TABLE `web_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `web_skills`
--
ALTER TABLE `web_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

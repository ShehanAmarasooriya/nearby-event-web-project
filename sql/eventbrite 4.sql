-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 09:19 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eventbrite`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `date_time` varchar(100) NOT NULL,
  `create_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `event_create_datetime` varchar(100) NOT NULL,
  `event_start_date` varchar(100) NOT NULL,
  `event_start_time` varchar(50) NOT NULL,
  `event_end_date` varchar(50) NOT NULL,
  `event_end_time` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `author` varchar(100) NOT NULL,
  `event_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `description`, `category`, `event_create_datetime`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `location`, `image`, `author`, `event_type`) VALUES
(12, 'Nottingham Vegan Festival 2019', 'Nottingham''s biggest ever Vegan Festival! Saturday 27th April 2019 - Nottingham Conference Centre, Nottingham City Centre. \r\n\r\n100 vegan/animal welfare and rights stalls, world food caterers, huge seating area, talk rooms, workshops and cookery demonstrations\r\n\r\nFor information about booking a stall, sponsoring the event or volunteering on the day please email veganeventsuk@gmail.com\r\n                    ', 'food_and_drink', 'December-13-2018 19:25:50', '2019-01-05', '15:45', '2018-12-08', '15:44', 'Colombo 02', 'wsi-imageoptim-event-1.png', 'Shehan', 'openEvent'),
(13, 'Jamesons Interactive Whiskey Tasting', 'For all the Nottingham whiskey fans, this is a masterclass like no other! An interactive tasting where you will try up to 5 of Jamesons products. Nibbles included! Limited tickets available, buy now to avoid disappointment.\r\n                    ', 'food_and_drink', 'December-13-2018 19:32:31', '2019-12-13', '06:30', '2019-12-14', '06:31', 'Colombo 03', 'wine-and-cheese-night-at-mygoldbar-1-e1530092783930.png', 'Shehan', 'closedEvent'),
(14, 'Concert Tour', 'A concert tour (or simply tour) is a series of concerts by an artist or group of artists in different cities, countries or locations. Often concert tours are named to differentiate different tours by the same artist and to associate a specific tour with a particular album or product\r\n                    ', 'concerts', 'December-13-2018 19:46:11', '2019-12-14', '03:42', '2019-12-15', '03:42', 'Colombo 03', 'sample.png', 'Shehan', 'openEvent'),
(15, 'Circus Skills', '\r\n                    \r\nDance is a type of performance art practiced all over the world.\r\nPerforming arts\r\nAcrobatics Ballet Circus skills Clown Dance\r\nGeneral Gymnastics Magic\r\nMime Music Opera\r\nProfessional wrestling\r\nPuppetry\r\nSpeech Theatre Ventriloquism\r\nvte\r\nPerforming arts are a form of art in which artists use their voices, bodies or inanimate objects to convey artistic expression. It is different from visual arts', 'art_and_drama', 'December-13-2018 19:51:21', '2018-12-13', '18:50', '2018-12-13', '18:50', 'India', 'homepage1drama_0.jpg', 'Shehan', 'openEvent'),
(16, 'Roman theatre', '\r\n    Western theatre developed and expanded considerably under the Romans. The Roman historian Livy wrote that the Romans first experienced theatre in the 4th century BCE, with a performance by Etruscan actors.[23] Beacham argues that they had been familiar with "pre-theatrical practices" for some time before that recorded contact                ', 'art_and_drama', 'December-13-2018 19:55:42', '2018-12-15', '23:00', '2018-12-16', '15:34', 'America', 'under-35-rj.jpg', 'Shehan', 'openEvent'),
(17, 'Gobal Business', '\r\n                    We are introduce new businees technology in the world.', 'business', 'December-13-2018 20:29:59', '2018-12-21', '14:33', '2018-12-22', '15:04', 'Colombo 05', '646619798-pointing-a-finger-bar-graf-military-briefing-whiteboard.jpg', 'Shehan', 'openEvent'),
(18, 'Businees in world', '\r\n                    You can know what are the newest technologies.You will be enticed by the rich diversity of sights and sensations that this little island has to offer.', 'business', 'December-13-2018 20:33:36', '2018-12-15', '14:35', '2018-12-20', '03:44', 'Colombo 02', 'business-technology.jpg', 'Shehan', 'openEvent'),
(19, 'Excibition In Art', '\r\n                    An art exhibition is traditionally the space in which art objects (in the most general sense) meet an audience. The exhibit is universally understood to be for some temporary period unless, as is rarely true, it is stated to be a "permanent exhibition".', 'exhibition', 'December-13-2018 20:39:55', '2019-07-05', '14:33', '2019-09-07', '02:33', 'Colombo 02', 'watercolor9thAnnual_THUMBNAIL.jpg', 'Shehan', 'openEvent'),
(20, 'Businees Types in world', 'There are many different types of exhibit, ranging from museum exhibitions, to retail and trades show spaces, to themed attractions, zoos, and visitor centers\r\n                    ', 'exhibition', 'December-13-2018 20:45:43', '2018-12-15', '03:43', '2018-12-21', '02:32', 'America', 'spp2016blur_edit.jpg', 'Shehan', 'openEvent'),
(21, 'Meet up for Future', '\r\n                    We are in the process of finalizing the topics. We are planning for sessions for beginners as well as for experienced folk. Stay tuned, you should see something in the next couple of days.', 'meetups', 'December-13-2018 20:55:17', '2021-02-13', '19:54', '2021-12-13', '19:54', 'Kurunegala', 'IMG_4483.JPG', 'Shehan', 'openEvent'),
(22, 'Meet Up for Leaders', '\r\n         Meetup is a social networking site that allows you to find and join groups related to your own personal interests. However, instead of just talking about these interests online, Meetup is used to organize offline and in-person meetings in your area           ', 'meetups', 'December-13-2018 21:02:50', '2018-12-15', '00:23', '2018-12-16', '01:03', 'Gampaha', 'Screen-Shot-2018-10-01-at-7.58.59-AM-1024x774.png', 'Shehan', 'openEvent'),
(23, 'Golden Party', '\r\n                    Any one can join withnus.Enjoy Your Life.', 'party', 'December-13-2018 21:04:54', '2018-12-29', '03:23', '2018-12-31', '02:32', 'Galle', 'wsi-imageoptim-event-1.png', 'Shehan', 'closedEvent'),
(24, 'Cricket in Srilanka', 'Cricket news, scores and highlights produced by Cricket Australia''s digital content team. Follow @CAComms for official CA communication.\r\n\r\n\r\n                    ', 'sports', 'December-13-2018 21:07:48', '2018-12-28', '02:34', '2018-12-31', '02:32', 'Colombo 05', '7-003_usage.jpg', 'Shehan', 'openEvent'),
(25, 'Health Of Life', 'From Public Healthpublic health initiatives to personal wellbeing, find online courses covering a wide variety of health and medical subjects.\r\n                    ', 'health_and_wellness', 'December-13-2018 21:09:42', '2018-12-25', '08:00', '2018-12-26', '09:00', 'Colombo 05', 'positive-health-wellness.jpg', 'Shehan', 'openEvent'),
(26, 'Digital Dreams', '\r\n                    Technology can be the knowledge of techniques, processes, and the like, or it can be embedded in machines to allow for operation without detailed knowledge of their workings. ', 'technology', 'December-13-2018 21:11:39', '2018-12-28', '09:00', '2018-12-28', '17:00', 'Kelaniya', '245511e13ecc1888b3cf9bdc3d1c8218.jpg', 'Shehan', 'closedEvent');

-- --------------------------------------------------------

--
-- Table structure for table `event_tag`
--

CREATE TABLE IF NOT EXISTS `event_tag` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `event_id` int(10) NOT NULL,
  `tag_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`) VALUES
(8, 'rasika', 'rasika@gmail.com', '123'),
(10, 'weragoda', 'rasikadonz@gmai.com', 'rasika@123'),
(13, 'Shehan', 'shehan@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(100) NOT NULL,
  `date_time` varchar(100) NOT NULL,
  `create_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_count`
--

CREATE TABLE IF NOT EXISTS `user_count` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `allow_participation` int(11) NOT NULL,
  `currnt_participation` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user_count`
--

INSERT INTO `user_count` (`id`, `event_id`, `allow_participation`, `currnt_participation`) VALUES
(3, 12, 100, 0),
(4, 14, 250, 0),
(5, 15, 20, 0),
(6, 16, 100, 0),
(7, 18, 30, 0),
(8, 19, 20, 0),
(9, 24, 100, 0),
(10, 26, 20, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

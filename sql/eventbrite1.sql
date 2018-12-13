-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 12:15 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventbrite`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `date_time` varchar(100) NOT NULL,
  `create_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `event_create_datetime` varchar(100) NOT NULL,
  `event_start_date` varchar(100) NOT NULL,
  `event_start_time` varchar(50) NOT NULL,
  `event_end_date` varchar(50) NOT NULL,
  `event_end_time` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `description`, `category`, `event_create_datetime`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `location`, `image`) VALUES
(1, 'exhibition', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet similique dolorum explicabo omnis aperiam exercitationem, sequi adipisci quidem atque ipsam enim odit necessitatibus quo consequuntur quis porro officia dicta. Maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias praesentium ratione minima dignissimos officiis earum vitae aut repellendus, suscipit hic repudiandae. Modi laboriosam tempore eveniet corrupti ab repellat neque quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla autem sint possimus? Unde ad numquam dicta similique, velit temporibus incidunt, facilis saepe neque libero laborum dolor dolores ducimus quidem tempore?', 'food', 'December-01-2018 07:58:07', '2018-12-06', '08:00', '2018-12-06', '17:00', 'colombo', '1.jpg'),
(2, 'Holy', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet similique dolorum explicabo omnis aperiam exercitationem, sequi adipisci quidem atque ipsam enim odit necessitatibus quo consequuntur quis porro officia dicta. Maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias praesentium ratione minima dignissimos officiis earum vitae aut repellendus, suscipit hic repudiandae. Modi laboriosam tempore eveniet corrupti ab repellat neque quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla autem sint possimus? Unde ad numquam dicta similique, velit temporibus incidunt, facilis saepe neque libero laborum dolor dolores ducimus quidem tempore?', 'party', 'December-02-2018 07:58:07', '2019-12-06', '08:00', '2019-12-06', '17:00', 'colombo', '2.jpg'),
(3, 'DJ', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet similique dolorum explicabo omnis aperiam exercitationem, sequi adipisci quidem atque ipsam enim odit necessitatibus quo consequuntur quis porro officia dicta. Maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias praesentium ratione minima dignissimos officiis earum vitae aut repellendus, suscipit hic repudiandae. Modi laboriosam tempore eveniet corrupti ab repellat neque quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla autem sint possimus? Unde ad numquam dicta similique, velit temporibus incidunt, facilis saepe neque libero laborum dolor dolores ducimus quidem tempore?', 'party', 'December-02-2018 07:58:08', '2019-11-06', '08:00', '2019-11-06', '17:00', 'colombo', '3.jpg'),
(4, 'Wedding', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet similique dolorum explicabo omnis aperiam exercitationem, sequi adipisci quidem atque ipsam enim odit necessitatibus quo consequuntur quis porro officia dicta. Maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias praesentium ratione minima dignissimos officiis earum vitae aut repellendus, suscipit hic repudiandae. Modi laboriosam tempore eveniet corrupti ab repellat neque quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla autem sint possimus? Unde ad numquam dicta similique, velit temporibus incidunt, facilis saepe neque libero laborum dolor dolores ducimus quidem tempore?', 'meetup', 'December-02-2018 07:58:07', '2018-10-06', '08:00', '2018-10-06', '17:00', 'colombo', '4.jpg'),
(5, 'Wedding', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet similique dolorum explicabo omnis aperiam exercitationem, sequi adipisci quidem atque ipsam enim odit necessitatibus quo consequuntur quis porro officia dicta. Maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias praesentium ratione minima dignissimos officiis earum vitae aut repellendus, suscipit hic repudiandae. Modi laboriosam tempore eveniet corrupti ab repellat neque quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla autem sint possimus? Unde ad numquam dicta similique, velit temporibus incidunt, facilis saepe neque libero laborum dolor dolores ducimus quidem tempore?', 'meetup', 'December-02-2018 07:58:07', '2018-10-06', '08:00', '2018-10-06', '17:00', 'colombo', '5.jpg'),
(6, 'Wedding', '', 'meetup', 'December-02-2018 07:58:07', '2020-10-06', '08:00', '2018-10-06', '17:00', 'colombo', '1.jpg'),
(7, 'Wedding', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet similique dolorum explicabo omnis aperiam exercitationem, sequi adipisci quidem atque ipsam enim odit necessitatibus quo consequuntur quis porro officia dicta. Maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias praesentium ratione minima dignissimos officiis earum vitae aut repellendus, suscipit hic repudiandae. Modi laboriosam tempore eveniet corrupti ab repellat neque quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla autem sint possimus? Unde ad numquam dicta similique, velit temporibus incidunt, facilis saepe neque libero laborum dolor dolores ducimus quidem tempore?', 'meetup', 'December-02-2018 07:58:07', '2018-10-06', '08:00', '2018-10-06', '17:00', 'colombo', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event_tag`
--

CREATE TABLE `event_tag` (
  `id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `tag_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`) VALUES
(8, 'rasika', 'rasika@gmail.com', '123'),
(10, 'weragoda', 'rasikadonz@gmai.com', 'rasika@123');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(10) NOT NULL,
  `tag_name` varchar(100) NOT NULL,
  `date_time` varchar(100) NOT NULL,
  `create_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_tag`
--
ALTER TABLE `event_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event_tag`
--
ALTER TABLE `event_tag`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

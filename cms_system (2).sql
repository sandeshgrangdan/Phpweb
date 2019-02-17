-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2019 at 07:14 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `category_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `category_name`) VALUES
(2, 'home'),
(4, 'laptop'),
(6, 'watch'),
(7, 'mobiles');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `name`, `email`, `subject`, `comment`, `date`) VALUES
(1, 'sandesh grangdan ', 'sandesht801@gmail.com', 'hahhha', 'koi k vannu  ra\r\n', '2017-12-18 03:00:34'),
(2, 'sandesh grangdan ', 'sandesht801@gmail.com', 'hahhha', 'koi k vannu  ra\r\n', '2017-12-18 03:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `created_at`) VALUES
('cus_ESaQan7gpetixU', 'sandesh', 'tamang', 'sandesht801@gmail.com', '2019-02-03 13:03:38'),
('cus_ESaQBrhHae06a9', 'sandesh', 'tamang', 'sandesht801@gmail.com', '2019-02-03 13:03:41'),
('cus_ESaQkxLoqZ6mMT', 'sandesh', 'tamang', 'sandesht801@gmail.com', '2019-02-03 13:03:34'),
('cus_ESaQRZFT18sSYM', 'sandesh', 'tamang', 'sandesht801@gmail.com', '2019-02-03 13:03:44'),
('cus_ESbQplwBtcxxQV', 'Bijay', 'rajak', 'bijayrajak55@gmail.com', '2019-02-03 14:05:32'),
('cus_ESNuYndP6uKQEn', 'safal', 'tamang', 'safal@gmail.com', '2019-02-03 00:07:28'),
('cus_ETje1EuXGNkGDZ', 'ram', 'thapa', 'narenpyakurel@gmail.com', '2019-02-06 14:39:51'),
('cus_EUCQcPCSupoooB', 'safal', 'tamang', 'safal@gmail.com', '2019-02-07 20:23:44'),
('cus_EUCQMeCJDTxER8', 'safal', 'tamang', 'safal@gmail.com', '2019-02-07 20:23:52'),
('cus_EUracUqAt9epy8', 'sandesh', 'tamang', 'sandesg@gamil.com', '2019-02-09 14:56:03'),
('cus_EVwzB1u5Up07Pr', 'safal', 'tamang', 'safal@gmail.com', '2019-02-12 12:34:26'),
('cus_EVy2CzIJnu8m9w', 'safal', 'tamang', 'safal@gmail.com', '2019-02-12 13:39:48'),
('cus_EVy8NajYj0BFGm', 'safal', 'tamang', 'safal@gmail.com', '2019-02-12 13:45:42'),
('cus_EWLylsKrF1VPmF', 'Bijay', 'rajak', 'bijayrajak55@gmail.com', '2019-02-13 14:24:19'),
('cus_EWLzfcrTaX5IV4', 'Bijay', 'rajak', 'bijayrajak55@gmail.com', '2019-02-13 14:25:17'),
('cus_EWM6vV98tqGdyo', 'Bijay', 'rajak', 'bijayrajak55@gmail.com', '2019-02-13 14:31:55'),
('cus_EWM9Q4Ww0m004T', 'Bijay', 'rajak', 'bijayrajak55@gmail.com', '2019-02-13 14:34:39'),
('cus_EWRfkPwR74OC8I', 'Bijay', 'rajak', 'bijayrajak55@gmail.com', '2019-02-13 20:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `description` varchar(200) NOT NULL,
  `location_status` tinyint(1) DEFAULT '0',
  `c_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `lat`, `lng`, `description`, `location_status`, `c_id`) VALUES
(9, 27.696142, 85.334381, 'location', 0, 'ch_1E2wC7Cbu1nAmf4O64Lt'),
(10, 27.696133, 85.334274, 'shai hoo', 1, 'ch_1E2wC7Cbu1nAmf4O64Lth9xp'),
(11, 27.697412, 85.334717, 'Home', 0, 'ch_1E3JQyCbu1nAmf4OWIMfO2w6'),
(12, 27.695370, 85.331512, 'This is my loaction  for macbook', 1, 'ch_1E3OmcCbu1nAmf4OHLR03Rsu');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `discription` text NOT NULL,
  `image` text NOT NULL,
  `status` text NOT NULL,
  `category` text NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `discription`, `image`, `status`, `category`, `dates`, `author`) VALUES
(1, '', 'it is  just  a  mistake', 'images/img1.jpg', 'published', '7', '2019-02-02 14:10:16', 'sandesht801@gmail.com'),
(3, 'The Third post', 'it\'s  my  fucking  fiest webside developed ', 'images/PBonet_Wacken2013_0301.jpg', 'published', '4', '2019-02-05 06:14:30', 'sandesht801@gmail.com'),
(5, 'Logo', 'It&#39;s&nbsp; just a logo&nbsp; of&nbsp; my project\r\n', 'images/DSD.png', 'published', '7', '2019-02-05 06:14:46', 'sandesht801@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `display` varchar(50) DEFAULT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `c_id`, `name`, `image`, `price`, `display`, `author`) VALUES
(1, 7, 'Samsung J2 Pro', '1.jpg', 100.00, 'on', 'sandesht801@gmail.com'),
(2, 4, 'HP Notebook', '2.jpg', 299.00, 'on', 'sandesht801@gmail.com'),
(3, 7, 'Panasonic T44 Lite', '3.jpg', 125.00, 'on', 'sandesht801@gmail.com'),
(11, 4, 'alienware', 'alian.png', 679.00, 'on', 'sandesht801@gmail.com'),
(20, 7, 'Iphone 10', 'iphone 10.jpg', 999.00, 'on', 'sandesht801@gmail.com'),
(24, 4, 'Macbook Pro', 'mac.jpg', 1704.00, 'on', 'sandesht801@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `received` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `customer_id`, `product`, `amount`, `currency`, `status`, `created_at`, `received`) VALUES
('ch_1DzfFNCbu1nAmf4OLcRDUqLe', 'cus_ESaQkxLoqZ6mMT', 'Macbook ProIphone 10', '270300', 'usd', 'succeeded', '2019-02-03 13:03:35', 'yes'),
('ch_1DzfFQCbu1nAmf4OwZ6lhM95', 'cus_ESaQan7gpetixU', 'Macbook ProIphone 10', '270300', 'usd', 'succeeded', '2019-02-03 13:03:39', 'yes'),
('ch_1DzfFUCbu1nAmf4Ob6Gks0lR', 'cus_ESaQBrhHae06a9', 'Macbook ProIphone 10', '270300', 'usd', 'succeeded', '2019-02-03 13:03:41', 'yes'),
('ch_1DzfFXCbu1nAmf4O0zW65XNH', 'cus_ESaQRZFT18sSYM', 'Macbook ProIphone 10', '270300', 'usd', 'succeeded', '2019-02-03 13:03:44', 'yes'),
('ch_1DzgDLCbu1nAmf4Ocla2A9Bp', 'cus_ESbQplwBtcxxQV', ' alienware', '67900', 'usd', 'succeeded', '2019-02-03 14:05:32', 'yes'),
('ch_1DzT8JCbu1nAmf4ObsiYiVIU', 'cus_ESNuYndP6uKQEn', 'Iphone 10', '99900', 'usd', 'succeeded', '2019-02-03 00:07:28', 'yes'),
('ch_1E0mBCCbu1nAmf4OmItyl0Jx', 'cus_ETje1EuXGNkGDZ', ' alienware', '67900', 'usd', 'succeeded', '2019-02-06 14:39:51', 'yes'),
('ch_1E1E1fCbu1nAmf4OPB4BEHAA', 'cus_EUCQMeCJDTxER8', ' alienware', '67900', 'usd', 'succeeded', '2019-02-07 20:23:52', 'no'),
('ch_1E1E1XCbu1nAmf4OBLDafzWD', 'cus_EUCQcPCSupoooB', ' alienware', '67900', 'usd', 'succeeded', '2019-02-07 20:23:44', 'yes'),
('ch_1E1rrXCbu1nAmf4OVdOw3Yis', 'cus_EUracUqAt9epy8', ' alienware', '67900', 'usd', 'succeeded', '2019-02-09 14:56:03', ''),
('ch_1E2v59Cbu1nAmf4O8BWwuwYT', 'cus_EVwzB1u5Up07Pr', ' Alienware', '67900', 'usd', 'succeeded', '2019-02-12 12:34:26', ''),
('ch_1E2w6PCbu1nAmf4OEcuWmSp8', 'cus_EVy2CzIJnu8m9w', ' Alienware', '67900', 'usd', 'succeeded', '2019-02-12 13:39:48', ''),
('ch_1E2wC7Cbu1nAmf4O64Lth9xp', 'cus_EVy8NajYj0BFGm', ' HP Notebook', '29900', 'usd', 'succeeded', '2019-02-12 13:45:42', ''),
('ch_1E3JH1Cbu1nAmf4OhUMmc9Gg', 'cus_EWLylsKrF1VPmF', ' Panasonic T44 Lite', '12500', 'usd', 'succeeded', '2019-02-13 14:24:19', ''),
('ch_1E3JHxCbu1nAmf4OVVdN7cjH', 'cus_EWLzfcrTaX5IV4', ' Panasonic T44 Lite', '12500', 'usd', 'succeeded', '2019-02-13 14:25:17', ''),
('ch_1E3JOMCbu1nAmf4OiirmqrGt', 'cus_EWM6vV98tqGdyo', ' Samsung J2 Pro', '10000', 'usd', 'succeeded', '2019-02-13 14:31:55', ''),
('ch_1E3JQyCbu1nAmf4OWIMfO2w6', 'cus_EWM9Q4Ww0m004T', ' Samsung J2 Pro', '10000', 'usd', 'succeeded', '2019-02-13 14:34:39', ''),
('ch_1E3OmcCbu1nAmf4OHLR03Rsu', 'cus_EWRfkPwR74OC8I', ' Macbook Pro', '170400', 'usd', 'succeeded', '2019-02-13 20:17:18', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `role` text NOT NULL,
  `user_f_name` text NOT NULL,
  `user_l_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_gender` text NOT NULL,
  `user_phone_no` text NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `role`, `user_f_name`, `user_l_name`, `user_email`, `user_password`, `user_gender`, `user_phone_no`, `user_date`) VALUES
(1, 'admin', 'sandesh', 'tamang', 'sandesht801@gmail.com', '123', 'male', '9866558715', '2019-02-03 08:53:15'),
(2, 'subscriber', 'safal', 'tamang', 'safal@gmail.com', '1234', 'male', '9804033099', '2019-02-03 08:53:18'),
(3, 'subscriber', 'Bijay', 'rajak', 'bijayrajak55@gmail.com', '123', 'male', '9869814323', '2019-02-03 08:53:20'),
(4, 'subscriber', 'ram', 'thapa', 'narenpyakurel@gmail.com', '123', 'male', '9843433343', '2019-02-06 03:57:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

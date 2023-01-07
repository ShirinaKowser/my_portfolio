-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 05, 2023 at 01:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personalportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'cec9818936add98229817fb432540b18');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(25, 'Ayaan', 'adust_it@yahoo.com', 'hello', 'I AM AYAAN HOSSAIN'),
(26, 'Ayaan', 'adust_it@yahoo.com', 'hello', 'I AM AYAAN HOSSAIN'),
(27, 'ayaan', 'adust_it@yahoo.com', 'hello', 'I am ayaan'),
(28, 'ayaan', 'adust_it@yahoo.com', 'hello', 'I am ayaan'),
(29, 'ayaan', 'adust_it@yahoo.com', 'hello', 'I am ayaan');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `PageDescription` text NOT NULL,
  `subject` varchar(100) NOT NULL,
  `expertise` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `PageDescription`, `subject`, `expertise`) VALUES
(1, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ratione error est recusandae consequatur, iusto illum deleniti quidem impedit, quos quaerat quis minima sequi. Cupiditate recusandae laudantium esse, harum animi aspernatur\r\nquisquam et delectus ipsum quam alias quaerat? Quasi hic quidem illum. Ad delectus natus aut hic explicabo minus quod.</p>\r\n   ', '', ''),
(2, '', 'html', '70%'),
(3, '', 'css', '60%'),
(4, '', 'js', '50%'),
(5, '', 'php', '50%'),
(6, '', 'mysql', '50%');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `id` int(11) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`id`, `PageType`, `PageTitle`, `image`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Me', 'images/face.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est .', NULL, NULL, NULL),
(15, 'contactus', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(20) NOT NULL,
  `Description` text NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `Description`, `name`) VALUES
(1, '\r\nYour work is going to fill a large part of your life, and the only way to be truly satisfied is\r\n                           to do what you believe is great work. And the only way to do great work is to love what you do.\r\n                           If you haven\'t found it yet, keep looking. Don\'t settle. As with all matters of the heart, you\'ll know.\r\n\r\n', 'John Steve'),
(2, 'This is Photoshop\'s version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.\r\n Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis senibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.', 'Shirina Kowser');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `PageDescription` varchar(255) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `degree` varchar(255) NOT NULL,
  `certification` varchar(255) NOT NULL,
  `freelance` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `slogan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `PageDescription`, `fname`, `lname`, `email`, `password`, `contactno`, `address`, `facebook`, `twitter`, `linkedin`, `instagram`, `github`, `youtube`, `birthday`, `degree`, `certification`, `freelance`, `website`, `posting_date`, `slogan`) VALUES
(29, 'personal portfolio', 'Personal portfolio of mine', 'SHIRINA', 'Kowser', 'test-email@yahoo.com', '$2y$10$.Y04PGI45tV7PunFMiZF0eN3SLDp3xAu0TfBC5FLS0cor2Fw5yNvy', '123456789', '2 Windsor Road, London', '#', '#', '#', '', '#', '', '0000-00-00', '', '', '', '', '2022-12-31 14:48:49', '');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `JobDescription` text NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `title`, `JobDescription`, `company`) VALUES
(1, 'Web Design', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita tempore praesentium eos fugit earum veritatis, voluptatem recusandae tempora hic necessitatibus.\r\n', 'Company ABC'),
(2, 'App Design', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita tempore praesentium eos fugit earum veritatis, voluptatem recusandae tempora hic necessitatibus.\r\n', 'Company BCD'),
(3, 'Advertising', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita tempore praesentium eos fugit earum veritatis, voluptatem recusandae tempora hic necessitatibus.\r\n', 'Company XYZ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

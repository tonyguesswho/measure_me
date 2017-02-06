-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 12:36 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `measure`
--
CREATE DATABASE IF NOT EXISTS `measure` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `measure`;

-- --------------------------------------------------------

--
-- Table structure for table `measurements`
--

CREATE TABLE `measurements` (
  `id` int(11) NOT NULL,
  `mea_id` int(11) NOT NULL,
  `neck` varchar(55) NOT NULL,
  `stomach` varchar(55) NOT NULL,
  `chest` varchar(55) NOT NULL,
  `ltnw` varchar(55) NOT NULL,
  `nw` varchar(55) NOT NULL,
  `lts` varchar(55) NOT NULL,
  `seat` varchar(55) NOT NULL,
  `jl` varchar(55) NOT NULL,
  `tw` varchar(55) NOT NULL,
  `crotch` varchar(55) NOT NULL,
  `sw` varchar(55) NOT NULL,
  `sl` varchar(55) NOT NULL,
  `bicep` varchar(55) NOT NULL,
  `pc` varchar(55) NOT NULL,
  `pb` varchar(55) NOT NULL,
  `ltec` varchar(55) NOT NULL,
  `wrist` varchar(55) NOT NULL,
  `calf` varchar(55) NOT NULL,
  `tl` varchar(55) NOT NULL,
  `thigh` varchar(55) NOT NULL,
  `title` varchar(55) NOT NULL,
  `unit` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `measurements`
--

INSERT INTO `measurements` (`id`, `mea_id`, `neck`, `stomach`, `chest`, `ltnw`, `nw`, `lts`, `seat`, `jl`, `tw`, `crotch`, `sw`, `sl`, `bicep`, `pc`, `pb`, `ltec`, `wrist`, `calf`, `tl`, `thigh`, `title`, `unit`) VALUES
(1, 0, '22', '22', '22', '222', '22', '22', '22', '22', '22', '2', '22', '22', '222', '22', '22', '22', '22', '22', '222', '2', 'my new suit', '0'),
(12, 9, '33', '33', '33', '33', '3', '33', '33', '3', '3', '3', '3', '33', '3', '33', '3', '3', '33', '3', '3', '3', 'COLLINS MEASU', 'cm'),
(13, 9, '33', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'num 2 collins', 'cm'),
(14, 29, '66', '66', '66', '66', '6', '6', '6', '6', '6', '6', '3', '3', '7', '7', '', '4', '4', '4', '4', '99', 'My Trad', 'inches'),
(15, 29, '54', '3', '43', '6', '67', '56', '78', '8', '7', '6', '6', '6', '67', '785', '44', '5', '68', '99', '54', '56', 'sunday gown', 'cm'),
(16, 29, '223', '6', '35', '77', '65', '67', '78T', '88', '898', '9', '7T7', '88', '88', '77', '789', '67', '99', '66', '5', '5', 'eVENYN wEAR', 'inches'),
(17, 29, '', '', '', '66', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 29, '', '', '55', '87', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TT', ''),
(19, 30, '6', '68', '77', '67', '78', '78', '8', '89', '9', '9', '6', '7', '8', '6765', '58', '89', '999', '75', '566', '66', 'biloo', 'inches'),
(20, 30, '8', '76', '566', '9', '9', '45', '44', '45', '45', '5', '09', '76', '77', '88', '88', '8', '889', '9', '9', '9', 'biggy', ''),
(21, 31, '8', '8', '8', '8', '88', '8', '8', '8', '8', '8', '8', '88', '8', '88', '8', '8', '8', '8', '8', '8', 'fred b', ''),
(22, 31, '2', '22', '22', '2', '2', '22', '2', '22', '2', '2', '2', '22', '2', '22', '2', '2', '2', '2', '2', '22', 'fred c', 'inches'),
(23, 31, '3', '3', '33', '3', '3', '3', '3', '3', '3', '33', '3', '33', '3', '33', '3', '3', '3', '33', '3', '3', 'fred d', 'inches'),
(24, 32, '1', '11', '1', '1', '11', '11', '1', '1', '1', '1', '1', '11', '1', '1', '1', '11', '1', '1', '1', '1', 'fish', 'inches'),
(25, 33, '5', '5', '5', '55', '5', '', '', '5', '5', '5', '5', '5', '', '55', '', '55', '5', '', '55', '5', 'empire', 'inches'),
(26, 9, '3', '33', '3', '32', '23', '3', '66', '6', '6', '6', '34', '33', '44', '44', '44', '4', '4', '44', '4', '4', 'my suit', 'inches');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `P-des` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_price`, `P-des`) VALUES
(20, 'white t-shirt', '7000', 'pure silk white shirt');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `sex` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `sex`) VALUES
(1, 'anthony', 'ugwu', 'anthonyu234@gmail.com', 'c0285a3c2bb4bdc77e0a41712e568224', 'Male'),
(2, 'ifeanyi', 'ugwu', 'ifeanyi@yahoo.com', 'ca2cd2bcc63c4d7c8725577442073dde', 'Male'),
(3, 'dele', 'alams', 'alams@gmail.com', '56ab24c15b72a457069c5ea42fcfc640', 'Male'),
(7, 'abims', 'abimla', 'abim@GMAIL.COM', 'BIKO', 'Male'),
(8, 'uche', 'joe', 'uche@gmail.com', 'iceberg', 'Male'),
(9, 'collins', 'ugwu', 'collins@gmail.com', 'great', 'Male'),
(10, 'samson', 'iyanda', 'sam@gmail.com', 'samson', 'Male'),
(11, '', '', 'sam@gmail.com', 'samson', 'Male'),
(12, 'udeng', 'otobong', 'udeng@gmail.com', 'udeng', 'Male'),
(13, 'udeng', 'otobong', 'udeng@gmail.com', 'udeng', 'Male'),
(14, 'ruu', 'jjj', 'jj@gmail.com', 'abc', 'Male'),
(15, 'pius', 'igigio', 'p@gmail.com', 'guess', 'Male'),
(16, 'jim', 'iyke', 'jim@gmail.com', 'jim', 'Male'),
(17, 'jim', 'iyke', 'jim@gmail.com', 'jim', 'Male'),
(18, 'fish', 'fisha', 'fish@gmail.com', 'deed', 'Male'),
(24, 'damola', 'dam', 'da@gmail.com', 'damola', 'Female'),
(25, 'meat', 'mita', 'meat@gmail.com', 'meat', 'Male'),
(26, 'jude', 'agbo', 'jude@gmail.com', 'jude', 'Male'),
(29, 'alero', 'al', 'ale@gmail.com', 'jeep', 'Female'),
(30, 'balo', 'gun', 'balo@gmail.com', 'balo', 'Male'),
(31, 'fred', 'james', 'fred@gmail.com', 'fred', 'Male'),
(32, 'fish', 'ice', 'fish@gmail.com', 'fish', 'Male'),
(33, 'collin', 'hana', 'collin@gmail.com', 'collin', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `measurements`
--
ALTER TABLE `measurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `measurements`
--
ALTER TABLE `measurements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

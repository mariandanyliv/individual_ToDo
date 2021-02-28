-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2021 at 01:43 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hometask`
--

-- --------------------------------------------------------

--
-- Table structure for table `task`
--
CREATE DATABASE `hometask`;

CREATE TABLE hometask.task (
  `id` int(11) UNSIGNED NOT NULL,
  `text` varchar(50) NOT NULL,
  `datatime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task`
--

INSERT INTO hometask.task (`id`, `text`, `datatime`, `checked`, `user_id`) VALUES
(105, '4', '2021-02-28 12:23:12', 0, 18),
(103, '3', '2021-02-28 11:37:57', 0, 18),
(101, '1', '2021-02-28 11:37:54', 0, 18),
(102, '2', '2021-02-28 11:37:56', 0, 18),
(106, 'zXVzxcvbb', '2021-02-28 15:21:15', 0, 18),
(107, 'ghjghkj', '2021-02-28 15:26:48', 0, 18);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE hometask.user (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO hometask.user (`id`, `email`, `login`, `pass`) VALUES
(20, 'danulivmarian@gmail.com', 'qwer', 'qwerty12345'),
(19, 'danulivmarian@mail.ua', 'marian', 'Sterben322'),
(18, 'sadgfgf@gmail.com', 'qwert', 'qwertyu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE hometask.task
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE hometask.user
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE hometask.task
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE hometask.user
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

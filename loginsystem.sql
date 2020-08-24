-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 02:50 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE 'users' (
  `id` int
(6) UNSIGNED NOT NULL,
  `user_first` varchar
(256) NOT NULL,
  `user_last` varchar
(256) NOT NULL,
  `user_email` varchar
(256) DEFAULT NULL,
  `user_uid` varchar
(256) DEFAULT NULL,
  `user_pwd` varchar
(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`
id`,
`user_first
`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, 'Nalani', 'SURESH', 'nalani74@gmail.com', 'nalaniSuresh', '4321'),
(2, 'Pavienaa', 'Raj', 'rajpavienaa80@gmail.com', 'pavi08', '$2y$10$TZtgqW.zcKogtMnMKcF4SuB.wV2KLlyU5X.x3h9TAf/kPDrKnpyIC'),
(3, 'Vignes', 'Saravanan', 'vignes23@gmai.com', 'vicky1234', '$2y$10$SFWFDB3u8Lor.2QfqSlxuOCJc15d5P0EtUK6peu0/tzYaka7YT/Bi'),
(4, 'Oscar', 'Chua', 'oscar23@gmail.com', 'oscar02', '$2y$10$MPPoaOfAwq8RDAffwnbu3.pjD1cqHN8MQ.Omil6I757V1Q8n//VU6'),
(5, 'Simba', 'Dog', 'simba@gmail.com', 'simba2', '$2y$10$1MAOAlyOfO8jeNmG2AQtl.UCClkscDulQzycZIjG2NF/aJAvlwiZS'),
(9, 'Naruto', 'Uzumaki', 'naruto15@gmail.com', 'naruto', '$2y$10$nLOS1Rc6CNOYGX3UMgZ9fuHIEu/SkUksFw/jiYb.O4zDEzKqRLXp6'),
(13, 'Tiger', 'Cat', 'tiger@gmail.com', 'tiger234', '$2y$10$DRAROpyvIU0qwGqNmaAnDeiNF1/eWre1iLaCZxP2/kYJigagyyRIG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY
(`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int
(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

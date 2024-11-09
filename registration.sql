-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 01:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `patient` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `patient`, `date`, `time`) VALUES
(9, 'Jere', '2023-09-28', '12:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userrole` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`userid`, `username`, `password`, `userrole`) VALUES
(2, 'Maryjane', '$2y$10$r9VjTnp4RLExWOW0dEuApuT18bARgEePmYbCQtR8gPV', 'doctor'),
(3, 'Mike', '$2y$10$../2udaVaw5339PyHNyuUOiOb3siLj0q4v5c0hSvaI0', 'pilot'),
(4, 'Chris', '$2y$10$JHIfVQKCikTGquEumDb4beOexo59HB3kdllFfQSxQz.', 'medic'),
(5, 'Dan', '$2y$10$yvAJ74OyP439XtEfdysifuESh5iAg2dis75cvnsTUWx', 'teacher'),
(6, 'MJ', '$2y$10$m4kurntukanqtQ08h97IPOgbRLztjV6b1S63ZpVa0fR', 'pilot'),
(7, 'Luis', '$2y$10$lM42AkIu/dlpEjog.JIVCOT86hSs1JlPbU7.qnYG2vq', 'medic'),
(8, 'Fish', '$2y$10$dDHjKstF5kVZ0p52BYR2zOqcg7sH9cpEUffhVk6LkGw', 'doctor'),
(9, 'Frank', '$2y$10$oHdOJY/.jDL34GerVZS42u8q..vEW5MXCrtk9huzNNm', 'teacher'),
(11, 'jonjon', '$2y$10$xyU8W9jY1I0lz434VrWQ2O.kYFdWDPqKHctngbbAM4m', 'teacher'),
(12, 'Killian', '$2y$10$gO5lXuNIDhDJqpKYSyWwsesHzzgZHHJq.x8P/LJGCoG', 'medic'),
(13, 'jonjonjon', '$2y$04$n6KulMmMKm25CAQbK.Tar.W8Dny208CpQHKWpleNOlr', 'pilot'),
(14, 'jon', '$2y$04$V.3mTgU6W9YeC.ui3Zyd0e8G3stw0LiYt2g63WSPhC1', 'pilot'),
(16, 'Won', '$2y$10$UOFbUN8en5.I.dHIrrQ4zebzfhXcTgNaYzrwnmjY5.Cm654sLr2Vm', 'teacher'),
(17, 'MMM', '$2y$10$6MAmCvJuvG1SEDNN7Tv76.PTNWZ0oWrz7sT5MVgO70C0F09BoU2/6', 'doctor'),
(20, 'Kiii', '$2y$10$Y7RZk4b3UeECqp5wwOMvz.FCpWZyCvBnGJEqu0qFPMFZDCmkXd/pC', 'doctor'),
(21, 'Ben', '$2y$10$c7P3pGwFJr30TP4VmWO3qOd0XCdlYFHU6SGjYrPICZK6YhxYXbZgm', 'pilot'),
(23, 'Jere', '$2y$10$DVnIZ9KOKxrjuUimEcw6fOPZ2tzXmEWg2h4WG6DTLxPKgKWNHBkYG', 'pilot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

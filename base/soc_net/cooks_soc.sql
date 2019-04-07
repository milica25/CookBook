-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 02:57 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cooks_soc`
--

-- --------------------------------------------------------

--
-- Table structure for table `img_com`
--

CREATE TABLE `img_com` (
  `comId` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `comBody` varchar(255) NOT NULL,
  `comDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_com`
--

INSERT INTO `img_com` (`comId`, `postId`, `userId`, `comBody`, `comDate`) VALUES
(16, 2, 13, '', '2019-04-04 12:25:51'),
(17, 2, 13, '', '2019-04-04 12:26:40'),
(18, 2, 13, '', '2019-04-04 13:18:24'),
(19, 2, 13, '', '2019-04-04 13:18:52'),
(20, 2, 13, '', '2019-04-04 13:29:54'),
(21, 2, 13, '', '2019-04-04 13:35:04'),
(22, 2, 13, '', '2019-04-04 13:41:22'),
(23, 2, 13, '', '2019-04-04 13:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` varchar(250) NOT NULL,
  `date` varchar(20) NOT NULL,
  `userId` int(11) NOT NULL,
  `privateStatus` varchar(20) NOT NULL,
  `images` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `date`, `userId`, `privateStatus`, `images`) VALUES
(1, 'Danas je lepo vreme', '07.03.2019', 1, 'private', ''),
(2, 'Danas ucimo phpmyadmin', '07.03.2019', 6, 'public', ''),
(3, 'PHP i SQL su komplikovaniji nego sto nam je receno.', '07.03.2019.', 5, 'public', ''),
(4, 'post', '08.03.2019', 1, 'public', ''),
(5, 'Da li je moj status uspesno unesen?', '08.03.2019', 3, 'private', ''),
(6, 'Private status', '08.03.2019', 4, 'private', ''),
(7, 'Public status', '08.03.2019', 4, 'public', ''),
(8, 'Status2', '08.03.2019', 5, 'public', ''),
(9, 'Jos neki status, ovaj put nesto duzi, ali ne mnogo.', '08.03.2019', 6, 'public', ''),
(10, 'Status koji pise NIKNIK', '08.03.2019', 1, 'private', ''),
(12, 'NIKNIK', '08.03.2019', 3, 'public', ''),
(14, 'Danas je 14. mart', '14/03/2019', 3, 'public', ''),
(15, 'Drugi put, datum je drugacije formatiran', '14.03.2019', 3, 'public', ''),
(16, 'Sad ja kacim status', '14.03.2019', 4, 'private', ''),
(17, 'Pavletov novi status', '14.03.2019', 4, 'private', ''),
(18, 'Post novi', '14.03.2019', 4, 'public', ''),
(19, 'Post novi', '14.03.2019', 4, 'public', ''),
(20, 'Privatni status koji kacim sada', '17.03.2019', 4, 'private', ''),
(24, 'daalalala', '18.03.2019', 3, 'public', ''),
(25, '', '18.03.2019', 3, 'public', ''),
(26, 'pozdrav sa mora', '18.03.2019', 3, 'public', ''),
(27, 'Ovaj sad ne bi trebalo da se vidi jer je na private', '18.03.2019', 3, 'private', ''),
(29, 'Bojboj vas pozdravlja', '19.03.2019', 9, 'public', ''),
(30, 'Samo za Bojanov profil.', '19.03.2019', 9, 'private', ''),
(80, 'jnvhvbn', '26.03.2019', 13, 'public', ''),
(81, '', '31.03.2019', 13, 'public', 'AragornBuddha.jpg'),
(82, 'hgjvgfd', '31.03.2019', 13, 'public', 'AragornBuddha.jpg'),
(83, 'vcxvd', '01.04.2019', 13, 'public', 'AragornBuddha.jpg'),
(84, 'novi status bre', '01.04.2019', 13, 'public', ''),
(85, 'sta koji kurac', '01.04.2019', 13, 'public', ''),
(86, 'gfdgfdg', '01.04.2019', 13, 'public', ''),
(93, 'sdadsad', '02.04.2019', 13, 'public', ''),
(94, '', '02.04.2019', 13, 'public', ''),
(95, 'ggfdgfgfd', '02.04.2019', 13, 'public', ''),
(98, '', '03.04.2019', 13, 'public', '1_Co0gr64Uo5kSg89ukFD2dw.jpeg'),
(99, '', '03.04.2019', 13, 'public', 'pulp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(4) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `firstName`, `lastName`, `email`, `username`, `image`, `password`) VALUES
(1, 'Marko', 'Markovic', 'markomarkovic@gmail.com', 'markomar', '', '$2y$10$AhqjLQs6kRim7GWP02jvqeQGbyzVBqvvMLExxEI6S/MAirLLifA5G'),
(3, 'Nikola', 'Nikolic', 'niknik@gmail.com', 'niknik', '', '$2y$10$kJI6XnsjJ/d7.K3rX2dioOpYy/IPWt3My/nLneR3CYRv/9FEJuNmO'),
(4, 'Pavle', 'Pavlovic', 'pavpav@gmail.com', 'Pavlinjo', '', '$2y$10$32p4A3wQ6ZUu2CspgyOXge4lZZkpENPatVGgMKahmMLO3IAW30PXm'),
(5, 'Mirko', 'Mirkovic', 'mirmir@gmail.com', 'mirkomir', '', '$2y$10$fVPahJ.bLrme8HZ7Z3s0xOP71Vn13udJ6D7Y83xbJ3SMjI9f.cc6y'),
(6, 'Nemanja', 'Nemanjic', 'nemnem@gmail.com', 'nemnem', '', '$2y$10$TwhvZ8U7BhGvSoeX5e/I9OBFS.fKGC/yCld5u08LhKjgagLR2W6SK'),
(9, 'Bojan', 'Bojanic', 'bojboj@gmail.com', 'bojboj', '', '$2y$10$7COxi4bLzypj2WhldQjPVOjEIjtTmg37gKgijZwQw4NWavYT13DFi'),
(12, 'Sima', 'Simic', 'simsim@gmail.com', 'simsim', '', '$2y$10$ZbxGrTIKRi.NFTjoIyFvMuDJlRJMMbOG6CXCrSrfdFb5N.ou1tCjq'),
(13, 'Nemanjus', 'Marin', 'nemanja@gmail.com', 'Nemus', '22753_1333370023438_1861036_n.jpg', '$2y$10$BnJ54pelDnGzLKX6ks.cXuvYvU1DkrCrPcA2Z/EzzwnWr9SUJUe0S'),
(14, 'Nemanja', 'Testing', 'test@teest.com', 'Nesvil', '', '$2y$10$z174V3pEbkBtxhKp0E8Hf.oqQJyoNwQsh/t.FCcDvJDEF3ok9HE6C'),
(16, 'Nemanja', 'Mouse', 'abdcs@mail.com', 'Test', '', '$2y$10$.rdIOmqtlk8BNciQFOHSMupPYqe4MNSXJpnL6K7wPt9E.pPukq/jO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img_com`
--
ALTER TABLE `img_com`
  ADD PRIMARY KEY (`comId`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `username_3` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img_com`
--
ALTER TABLE `img_com`
  MODIFY `comId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `jedan_korisnik_vise_postova` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

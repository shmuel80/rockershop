-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 10:26 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rockershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `article`, `url`, `image`, `updated_at`, `created_at`) VALUES
(1, 'Metallica', 'Metallica has become one of the most influential heavy metal bands of all time, and is credited as one of the \"big four\" of thrash metal, along with Slayer, Anthrax, and Megadeth.', 'metallica', 'metallica.jpg', '2019-01-23 22:35:03', '2019-01-23 22:35:03'),
(2, 'Iron Maiden', 'Pioneers of the new wave of British heavy metal, Iron Maiden achieved initial success during the early 1980s.', 'iron_maiden', 'iron_maiden.jpg', '2019-01-23 22:35:03', '2019-01-23 22:35:03'),
(3, 'Slayer', 'Slayer is considered a thrash metal band. In an article from December 1986 by the Washington Post, writer Joe Brown described Slayer as speed metal, a genre he defined as \"an unholy hybrid of punk rock thrash and heavy metal that attracts an almost all-ma', 'slayer', 'slayer.jpg', '2019-01-23 22:36:19', '2019-01-23 22:36:19');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `order_data` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `url` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `title`, `article`, `image`, `url`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Master of Puppets', 'Released to critical acclaim, the album is considered to be one of the best in history, and one of the most influential to heavy metal. Its driving, virtuosic music and angry political lyrics drew praise from critics outside the metal community.', 'master.jpg', 'master_of_puppets', 15, '2019-02-02 23:15:34', '2019-02-02 23:15:34'),
(2, 1, 'And Justice For All', 'And Justice for All is a musically progressive album featuring long and complex songs, fast tempos and few verse-chorus structures. Metallica decided to broaden its sonic range, writing songs with multiple sections, heavy guitar arpeggios and unusual time', 'justice.jpg', 'and_justice_for_all', 15, '2019-02-02 23:15:34', '2019-02-02 23:15:34'),
(3, 1, 'Metallica Black', 'It received widespread critical acclaim and became the band\'s best-selling album. Metallica produced five singles that are considered to be among the band\'s best-known songs, which include \"Enter Sandman\", \"The Unforgiven\", \"Nothing Else Matters\", \"Wherev', 'metallica_album.jpg', 'metallica', 14, '2019-02-02 23:19:41', '2019-02-02 23:19:41'),
(4, 2, 'Live at Donington', 'Live at Donington is a live album by the English heavy metal band Iron Maiden, documenting their second headlining appearance at the Monsters of Rock festival at Donington Park, a motorsport circuit located near Castle Donington.', 'donington.jpg', 'live_at_donington', 18, '2019-02-17 21:31:29', '2019-02-17 21:31:29'),
(5, 2, 'Powerslave 1984', 'Powerslave is notable as the band\'s first album to feature the same personnel as their previous studio release. This lineup would remain intact for two further studio releases. Also, it is their last album to date to feature an instrumental piece.', 'powerslave.jpg', 'powerslave', 17, '2019-02-17 21:31:29', '2019-02-17 21:31:29'),
(6, 2, 'Fear of the Dark', 'it was their third studio release to top the UK albums chart and the last to feature Bruce Dickinson as the group\'s lead vocalist until his return in 1999.', 'fear.jpg', 'fear', 19, '2019-02-17 21:36:17', '2019-02-17 21:36:17'),
(7, 3, 'Reign in Blood ', 'Reign in Blood is regarded by critics as one of the most influential and extreme thrash metal albums', 'reign.jpg', 'reign_in_blood', 15, '2019-02-17 21:44:11', '2019-02-17 21:44:11'),
(8, 3, 'South of Heaven', 'In order to offset the pace of the group\'s previous album, Slayer deliberately slowed down the album\'s tempo. In contrast to their previous albums, the band utilized undistorted guitars and toned-down vocals.', 'south.jpg', 'south_of_heaven', 15, '2019-02-17 21:44:11', '2019-02-17 21:44:11'),
(9, 3, 'Seasons of Abyss', 'Upon its release, Seasons in the Abyss received a generally positive reception and peaked at number 40 on the US Billboard 200. It was later certified gold in the United States and Canada.', 'season.jpg', 'seasons_of_abyss', 13, '2019-02-17 21:45:59', '2019-02-17 21:45:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'sami', 'madem', 'samimadem@gmail.com', '$2y$10$BTMp7hgih7enrj4n3LnW4ORhbslYuknVNuQv4A2oh799foRnwKTAa', 1, '2018-12-16 00:00:00', '2018-12-16 00:00:00'),
(2, 'omer', 'avhar', 'omeravhar@gmail.com', '$2y$10$BTMp7hgih7enrj4n3LnW4ORhbslYuknVNuQv4A2oh799foRnwKTAa', 1, '2018-12-16 00:00:00', '2018-12-16 00:00:00'),
(3, 'sabi', 'erdemanar', 'sabih.erdemanar@gmail.com', '$2y$10$BTMp7hgih7enrj4n3LnW4ORhbslYuknVNuQv4A2oh799foRnwKTAa', 2, '2018-12-16 00:00:00', '2018-12-16 00:00:00'),
(4, 'sam', 'jones', 'sam@gmail.com', '$2y$10$BTMp7hgih7enrj4n3LnW4ORhbslYuknVNuQv4A2oh799foRnwKTAa', 2, '2019-03-10 21:07:38', '2019-03-10 21:07:38'),
(5, 'sam', 'jones', 'sam@gmail.com', '$2y$10$TjRZfs9CZK9pYeIH58ZPAuV2P706ZZl7gxzLGC2c9gyrL/ngq45TK', 2, '2019-03-10 21:09:46', '2019-03-10 21:09:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

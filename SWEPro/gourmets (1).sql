-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2022 at 02:04 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gourmets`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(3) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `pass` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `userName`, `pass`) VALUES
(1, 'Admin1Nada', 'Nada1234'),
(2, 'Admin2Sarah', 'Sarah7777'),
(3, 'Admin3Deem', 'Deem1010');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `ResID` int(4) NOT NULL,
  `ResName` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `logoImg` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`ResID`, `ResName`, `description`, `logoImg`, `type`, `phoneNumber`) VALUES
(0, 'MAMO    ', 'Mamo searched for the best products available in the south of France and Italy, and found many small producers, who put their hearts into their work. Mamo has always known that good food starts with quality in the ingredients and the consistency of the dishes, allowing his guests to have the same perfect experience time and time again. Traveling to all parts of Italy, connecting passionate producers to discover the rare, he has obtained the excellence and best products available: truffles, tomatoes, burrata, porcinis to always offer more taste and flavor…    ', 'Images/img3.png', '  American ', '600000999'),
(1, 'ROKA', 'ROKA is a meeting place where food and drinks are shared around the robata (Ro) and heat, warmth and an all-embracing energy surround (Ka).', 'Images/img4.png', 'Japanese', '0509999999'),
(2, 'The Cheese Cake Factory', 'Try home-style versions of recipes for some of our most popular dishes, and desserts inspired by our legendary cheesecakes.\r\n\r\n', 'Images/img2.png', 'American ', '500324899'),
(3, 'Urth Cafe', 'Urth Caffé has sought to provide only the finest and most exquisite culinary experiences for our customers. We always strive to touch the hearts, minds and taste buds of our patrons by maintaining exceptional quality, ethics and above all bringing our customers the best tasting food, organic heirloom coffees and fine teas from all around the globe. Our philosophy is to offer purity, quality & great pleasure to our customers.', 'Images/img1.jpeg', 'American', '600000000');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `RevID` int(4) NOT NULL,
  `FoodQuality` int(2) NOT NULL,
  `Price` int(2) NOT NULL,
  `Service` int(2) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `Anonymous` int(1) NOT NULL DEFAULT '0',
  `UserID` int(3) NOT NULL,
  `ResID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`RevID`, `FoodQuality`, `Price`, `Service`, `comment`, `Anonymous`, `UserID`, `ResID`) VALUES
(1, 7, 6, 2, 'I Had a disappointing experience here because of the service. I ordered to go and I had to wait over 20 min for my coffee.\r\n\r\n\r\n', 1, 1, 2),
(2, 9, 9, 10, 'Its great every where I go to Cheesecake Factory they are always welcoming and it’s always full of customers.\r\n\r\n', 0, 1, 0),
(3, 10, 8, 10, 'Great service! Big smiles! Large choice of food on the menu.\r\n\r\n\r\n', 1, 2, 3),
(4, 9, 6, 3, 'Great atmosphere. Poor service. I tried truffle pizza and it was delicious.', 0, 3, 3),
(5, 10, 6, 7, 'I recommend Truffle Pizza, Burrata, and absolutely the tiramisu!', 1, 4, 0),
(6, 8, 6, 10, 'This restaurant combined tasty and atmosphere along with warm welcoming\r\n\r\n', 0, 5, 2),
(7, 10, 8, 9, 'Nice atmosphere and decoration. I tried Sea bream, California maki and do not miss Spicy beef filet, they were all delicious.\r\n\r\n\r\n', 0, 2, 2),
(9, 8, 9, 7, 'Good', 0, 3, 0),
(12, 10, 10, 10, 'I like it', 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(4) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `pass` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `userName`, `pass`) VALUES
(0, 'Saad2345', 'Saad1234'),
(1, 'HalaAhmad2001', 'Hala2222'),
(2, 'NoufMohammad2', 'NoufM1212'),
(3, 'SarahAbdullah55', 'SarahA777'),
(4, 'Abdullah11', 'Abdullah2233'),
(5, 'KhalidSaad200', 'Khalid11111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`ResID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`RevID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `ResID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `RevID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

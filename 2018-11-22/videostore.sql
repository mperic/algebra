-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 06:46 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videostore`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`ID`, `FIRST_NAME`, `LAST_NAME`) VALUES
(1, 'John', 'Travolta'),
(2, 'Tom', 'Cruise'),
(3, 'Halle', 'Berry'),
(4, 'Vin', 'Diesel'),
(5, 'Scarlett', 'Johansson');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `FIRST_NAME`) VALUES
(1, 'Pero'),
(2, 'Ivan'),
(3, 'Marko'),
(4, 'Maja'),
(5, 'Ivana');

-- --------------------------------------------------------

--
-- Table structure for table `customer_movie`
--

CREATE TABLE `customer_movie` (
  `ID` int(11) NOT NULL,
  `MOVIE_ID` int(11) NOT NULL,
  `CUSTOMER_ID` int(11) NOT NULL,
  `RECEIPT_ID` int(11) NOT NULL,
  `RETURNED` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_movie`
--

INSERT INTO `customer_movie` (`ID`, `MOVIE_ID`, `CUSTOMER_ID`, `RECEIPT_ID`, `RETURNED`) VALUES
(1, 2, 2, 1, 1),
(2, 3, 5, 2, 0),
(3, 3, 4, 3, 0),
(4, 4, 5, 2, 0),
(5, 5, 5, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`ID`, `TITLE`) VALUES
(1, 'Action'),
(2, 'Comedy'),
(3, 'Drama'),
(4, 'Triller'),
(5, 'Cartoon');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(20) NOT NULL,
  `YEAR_OF_PUBLISHING` date NOT NULL,
  `PRICE` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`ID`, `TITLE`, `YEAR_OF_PUBLISHING`, `PRICE`) VALUES
(1, 'Top Gun', '1986-05-12', '5'),
(2, 'Fast and Furious 1', '2001-06-18', '7'),
(3, 'Harry Potter 1', '2001-12-23', '8'),
(4, 'Jurrassic Park', '1993-06-09', '1000'),
(5, 'Titanic', '1997-11-18', '10');

-- --------------------------------------------------------

--
-- Table structure for table `movie_actor`
--

CREATE TABLE `movie_actor` (
  `ID` int(11) NOT NULL,
  `MOVIE_ID` int(11) NOT NULL,
  `ACTOR_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_actor`
--

INSERT INTO `movie_actor` (`ID`, `MOVIE_ID`, `ACTOR_ID`) VALUES
(1, 2, 4),
(2, 3, 1),
(3, 4, 5),
(4, 5, 4),
(5, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `movie_genre`
--

CREATE TABLE `movie_genre` (
  `ID` int(11) NOT NULL,
  `MOVIE_ID` int(11) NOT NULL,
  `GENRE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_genre`
--

INSERT INTO `movie_genre` (`ID`, `MOVIE_ID`, `GENRE_ID`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 3, 5),
(4, 4, 1),
(5, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `ID` int(11) NOT NULL,
  `TIMESTAMP` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`ID`, `TIMESTAMP`) VALUES
(1, '2018-11-01'),
(2, '2018-11-02'),
(3, '2018-11-03'),
(4, '2018-11-04'),
(5, '2018-11-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer_movie`
--
ALTER TABLE `customer_movie`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CUSTOMER_ID` (`CUSTOMER_ID`),
  ADD KEY `MOVIE_ID` (`MOVIE_ID`),
  ADD KEY `RECEIPT_ID` (`RECEIPT_ID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `movie_actor`
--
ALTER TABLE `movie_actor`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MOVIE_ID` (`MOVIE_ID`),
  ADD KEY `ACTOR_ID` (`ACTOR_ID`);

--
-- Indexes for table `movie_genre`
--
ALTER TABLE `movie_genre`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `GENRE_ID` (`GENRE_ID`),
  ADD KEY `MOVIE_ID` (`MOVIE_ID`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customer_movie`
--
ALTER TABLE `customer_movie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `movie_actor`
--
ALTER TABLE `movie_actor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `movie_genre`
--
ALTER TABLE `movie_genre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_movie`
--
ALTER TABLE `customer_movie`
  ADD CONSTRAINT `customer_movie_ibfk_1` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`ID`),
  ADD CONSTRAINT `customer_movie_ibfk_2` FOREIGN KEY (`MOVIE_ID`) REFERENCES `movie` (`ID`),
  ADD CONSTRAINT `customer_movie_ibfk_3` FOREIGN KEY (`RECEIPT_ID`) REFERENCES `receipt` (`ID`);

--
-- Constraints for table `movie_actor`
--
ALTER TABLE `movie_actor`
  ADD CONSTRAINT `movie_actor_ibfk_1` FOREIGN KEY (`MOVIE_ID`) REFERENCES `movie` (`ID`),
  ADD CONSTRAINT `movie_actor_ibfk_2` FOREIGN KEY (`ACTOR_ID`) REFERENCES `actor` (`ID`);

--
-- Constraints for table `movie_genre`
--
ALTER TABLE `movie_genre`
  ADD CONSTRAINT `movie_genre_ibfk_1` FOREIGN KEY (`GENRE_ID`) REFERENCES `genre` (`ID`),
  ADD CONSTRAINT `movie_genre_ibfk_2` FOREIGN KEY (`MOVIE_ID`) REFERENCES `movie` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

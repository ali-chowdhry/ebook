-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Oct 21, 2024 at 10:16 AM
=======
-- Generation Time: Oct 16, 2024 at 10:24 AM
>>>>>>> 26b5ac32f33838b11ebd7a2aabbd2609eda2ed2b
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `AboutID` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Record_insert` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`AboutID`, `Title`, `Description`, `Record_insert`) VALUES
(6, 'Book Haven', 'Discover your next favorite read in our curated collection of genres, author spotlights, and literary discussions.', '2024-10-21 07:48:22'),
(7, 'The Written Word', 'Dive into the world of literature with book reviews, author interviews, and a vibrant community of readers.', '2024-10-21 07:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `author_info`
--

CREATE TABLE `author_info` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author_info`
--

INSERT INTO `author_info` (`id`, `Name`, `Email`, `Gender`, `Age`) VALUES
(1, 'Kamila Shamsie', 'KamilaShamsie@gmail.com', 'female', 47),
(2, 'Mohsin Hamid', 'MohsinHamid@gmail.com', 'male', 39),
(3, 'Ahmad Nadeem Qasmi', 'AhmadNadeemQasmi@gmail.com', 'male', 50),
(4, 'Bano Qudsia', 'BanoQudsia@gmail.com', 'female', 53),
(5, 'Daud Kamal', 'DaudKamal@gmail.com', 'male', 49),
(6, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BookID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `AuthorID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `Bookimage` varchar(50) NOT NULL,
  `Bookprice` int(11) NOT NULL,
  `Availability` varchar(10) NOT NULL,
  `Rating` int(11) NOT NULL,
  `PublisherID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BookID`, `Name`, `AuthorID`, `CategoryID`, `Bookimage`, `Bookprice`, `Availability`, `Rating`, `PublisherID`) VALUES
(4, 'Titanic', 4, 2, '../Book Images/Titanic.jfif', 500, 'yes', 4, 1),
(6, 'Around the world in 80 days', 5, 10, '../Book Images/Around the world in 80 days.jpg', 320, 'yes', 5, 1),
(7, 'Harry Potter', 5, 8, '../Book Images/harry potter.jfif', 200, 'yes', 4, 1),
(8, 'the count of monte cristo', 2, 2, '../Book Images/the count of monte cristo.jfif', 800, 'yes', 3, 1),
(9, 'the haunting of hill house', 3, 7, '../Book Images/the haunting of hill house.jfif', 470, 'yes', 4, 1),
(10, 'the jungle book', 1, 11, '../Book Images/the jungle book.jpg', 430, 'yes', 2, 1),
(11, 'The Trial', 4, 8, '../Book Images/the trial.jfif', 560, 'yes', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CatID` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `record_insert` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CatID`, `category_name`, `record_insert`) VALUES
(2, 'Romantic', '2024-10-06 11:57:45'),
(4, 'Drama', '2024-10-07 06:50:32'),
(7, 'Horror', '2024-10-09 06:33:28'),
(8, 'Fiction', '2024-10-09 06:33:37'),
(9, 'Actions', '2024-10-09 07:05:45'),
(10, 'Adventure', '2024-10-13 19:43:21'),
(11, 'Comedy', '2024-10-13 19:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id`, `name`, `number`, `address`) VALUES
(1, 'John Wiley', '0123456789', 'aptech'),
(2, 'John Wiley', '0231456789', 'aptech'),
(3, 'John Wiley', '0215846554', 'aptech'),
(4, 'John Wiley', '236654646', 'aptech'),
(5, 'John Wiley', '0156556566', 'aptech'),
(6, 'John Wiley', '5301654068', 'aptech');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(70) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `Role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `email`, `password`, `gender`, `address`, `phone`, `Role`) VALUES
(1, 'Adeen Shaikh', 'adeenshaikh342@gmail.com', 'tonystark', 'male', 'Nazimabad no.3 karachi', '3353472993', 'Admin'),
(2, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `website_info`
--

CREATE TABLE `website_info` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phoneno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website_info`
--

INSERT INTO `website_info` (`ID`, `Name`, `Email`, `Description`, `Address`, `Phoneno`) VALUES
(1, 'Bookbuzz', 'book_buzz333@gmail.com', 'Welcome to Bookbuzz, your one-stop destination for a world of knowledge! We specialize in a diverse range of informational books across various genres, including history, science, self-help, and more. Our curated selection features titles from renowned authors and emerging voices alike. Whether you\'re a student, a professional, or just a curious reader, you\'ll find the perfect resource to satisfy your thirst for knowledge.', 'North Nazimabad no2, Karachi', '03353472993');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`AboutID`);

--
-- Indexes for table `author_info`
--
ALTER TABLE `author_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BookID`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD KEY `AuthorID` (`AuthorID`),
  ADD KEY `CategoryID` (`CategoryID`),
  ADD KEY `PublisherID` (`PublisherID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CatID`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `website_info`
--
ALTER TABLE `website_info`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `AboutID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `author_info`
--
ALTER TABLE `author_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `website_info`
--
ALTER TABLE `website_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`AuthorID`) REFERENCES `author_info` (`id`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`CatID`),
  ADD CONSTRAINT `book_ibfk_3` FOREIGN KEY (`PublisherID`) REFERENCES `publisher` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 09:59 AM
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
(3, '', 'saasddsadas', '2024-10-09 07:00:57'),
(4, 'aaaa', 'ccccc', '2024-10-09 07:01:21');

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
  `PublisherID` int(11) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BookID`, `Name`, `AuthorID`, `CategoryID`, `Bookimage`, `Bookprice`, `Availability`, `Rating`, `PublisherID`, `Description`) VALUES
(4, 'Titanic', 4, 2, '../Book Images/Titanic.jfif', 500, 'yes', 4, 1, 'Margaret Anne dreams of leaving the orphanage behind, and she can hardly believe her luck when she is chosen to accompany wealth Mrs Carstairs aboard the great Titanic. But when the passengers are woken on a freezing night in April 1912, she finds herself caught up in an unimaginable nightmare…'),
(6, 'Around the world in 80 days', 5, 10, '../Book Images/Around the world in 80 days.jpg', 320, 'yes', 5, 1, 'Around the World in Eighty Days, is an adventure novel by the French writer Jules Verne, first published in 1873. In the story, Phileas Fogg of London and his newly employed French valet Jean Passepartout, attempt to circumnavigate the world in 80 days by his friends at the Reform Club.'),
(7, 'Harry Potter', 5, 8, '', 200, 'yes', 4, 1, 'Harry Potter is a series of novels by British author J. K. Rowling. The novels follow Harry Potter, an 11-year-old boy who discovers he is the son of famous wizards and will attend Hogwarts School of Witchcraft and Wizardry. Harry learns of an entire society of wizards and witches.'),
(8, 'the count of monte cristo', 2, 2, '../Book Images/the count of monte cristo.jfif', 800, 'yes', 3, 1, 'The Count of Monte Cristo is an adventure novel written by French author Alexandre Dumas serialized from 1844 to 1846. It is one of the author\'s most popular works, along with The Three Musketeers. Like many of his novels, it was expanded from plot outlines suggested by his collaborating ghostwriter Auguste Maquet'),
(9, 'the haunting of hill house', 3, 7, '../Book Images/the haunting of hill house.jfif', 470, 'yes', 4, 1, 'The Haunting of Hill House is a 1959 gothic horror novel by American author Shirley Jackson. It was a finalist for the National Book Award and has been made into two feature films, a play, and is the basis of a Netflix series. The book is dedicated to Leonard Brown, Jackson\'s English teacher at Syracuse University.'),
(10, 'the jungle book', 1, 11, '../Book Images/the jungle book.jpg', 430, 'yes', 2, 1, 'The Jungle Book by Rudyard Kipling is an adventure story about a man-cub named Mowgli. Mowgli is hunted by an evil tiger named Shere Khan. Mowgli tries to live a peaceful life with other humans, but is too wild for them and too human for the wolves. Eventually Mowgli finds a home in the jungle with a pack of his own.'),
(11, 'The Trial', 4, 8, '../Book Images/the trial.jfif', 560, 'yes', 1, 1, 'The Trial is a novel written by Franz Kafka but not published until 1925 after the author\'s death. In the novel, Josef K. is a bank worker accused of a crime, but he is never told the nature of his crime and must navigate a seemingly impossible legal system to save himself.');

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
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `BookID` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `number` varchar(15) NOT NULL,
  `Address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id`, `name`, `number`, `Address`) VALUES
(1, 'umer', '0987456123', 'aptech');

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
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userID` (`userID`);

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
  MODIFY `AboutID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `author_info`
--
ALTER TABLE `author_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

--
-- Constraints for table `order_table`
--
ALTER TABLE `order_table`
  ADD CONSTRAINT `order_table_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

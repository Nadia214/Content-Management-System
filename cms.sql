-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 05:42 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `category`) VALUES
(1, 'Books'),
(2, 'Videos'),
(3, 'Youtube'),
(5, 'BLOG');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(2, 'BOOKS'),
(3, 'blog'),
(4, 'VIDEOS'),
(5, 'YOUTUBE');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `date`, `name`, `username`, `post_id`, `email`, `website`, `image`, `comment`, `status`) VALUES
(44, 1234567899, 'nadia', 'nadia', 4, 'nadia@gmail.com', 'dkjk', 'kar.png', 'this is first comment', 'pending'),
(45, 1234567899, 'lauren', 'lauren', 5, 'laure@gmail.com', 'dkjk', 'ls.png', 'this is second comment.dahdjhkajdhkjashdj', 'pending'),
(48, 1533331798, 'nadia hossain', 'ndi', 5, 'nadia@gmail.com', '', 'Malina.jpg', 'hlw,this is hi,also from dreamland', 'approve'),
(49, 1533367822, ' nadia', ' nadia', 18, 'unknown', 'unknown', 'tk.jpg', ' this is a creative concept ', 'approve'),
(50, 1533368127, ' laruen', ' laruen', 18, 'unknown', 'unknown', 'tk.jpg', ' yeah ,u are right ', 'approve'),
(51, 1533368149, ' laruen', ' laruen', 18, 'unknown', 'unknown', 'tk.jpg', ' yeah ,u are right ', 'pending'),
(52, 1533371644, ' nadia', ' nadia', 18, 'unknown', 'unknown', 'tk.jpg', ' this is a creative concept ', 'pending'),
(53, 1533371648, ' nadia', ' nadia', 18, 'unknown', 'unknown', 'tk.jpg', ' this is a creative concept ', 'pending'),
(54, 1533371652, ' nadia', ' nadia', 18, 'unknown', 'unknown', 'tk.jpg', ' this is a creative concept ', 'pending'),
(55, 1533380448, ' laruen', ' laruen', 18, 'unknown', 'unknown', 'tk.jpg', ' yeah ,u are right ', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `image`) VALUES
(9, '1.png.jpg'),
(10, '2.png'),
(11, '3.png.jpg'),
(12, 'ZERO-WASTE.png');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `author_image` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `tags` varchar(155) NOT NULL,
  `post_data` text NOT NULL,
  `views` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `date`, `title`, `author`, `author_image`, `image`, `categories`, `tags`, `post_data`, `views`, `status`) VALUES
(3, 134567989, 'THIS IS DEMO POST AREA ONE', 'KARA DANVER', 'kd.png', '5.png', 'BLOG', 'DEMO', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. ', 3, 'publish'),
(4, 134567989, 'THIS IS DEMO POST AREA TWO', 'melissa', 'a.png', '7.png', 'BLOG', 'demo', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 6, 'publish'),
(6, 1533380169, 'the very first post from site', 'ndi', 'Malina.jpg', 'Los_Angeles,_Winter_2016.jpg', 'YOUTUBE', 'zero waste', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>My name is Lauren Singer and I live a Zero Waste lifestyle in New York City. So how did I get here? I was an Environmental Studies major in College and have always been interested in the environment, but I made the conscious decision to live Zero Waste in 2012 when a fellow Environmental Studies classmate would bring lunch to class every week in a single use plastic bag, a disposable water bottle, and a plastic takeout container. I would sit there and think, we are supposed to be the future of this planet and here we are with our trash, messing it up. Then I learned about Bea Johnson, a woman in California who was producing little to no garbage, it was this Aha! moment for me. I wanted to lessen my impact, so I started my Zero Waste journey. This is when I really decided that I not only needed to claim to love the environment, but actually live like I love the environment. Trash is for Tossers is my attempt. It will document my Zero Waste journey and show that leading a Zero Waste lifestyle is simple, cost-effective, timely, fun, &amp; entirely possible for everyone and anyone. If I can do it, anyone can! How do I define ZERO WASTE? To me, Zero Waste means that I do not produce any garbage. No sending anything to landfill, no throwing anything in a trash can, nothing. However, I do recycle and I do compost.</p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/1.png.jpg\" alt=\"1.png.jpg\" width=\"600\" height=\"400\" /></p>\r\n<p>My name is Lauren Singer and I live a Zero Waste lifestyle in New York City. So how did I get here? I was an Environmental Studies major in College and have always been interested in the environment, but I made the conscious decision to live Zero Waste in 2012 when a fellow Environmental Studies classmate would bring lunch to class every week in a single use plastic bag, a disposable water bottle, and a plastic takeout container. I would sit there and think, we are supposed to be the future of this planet and here we are with our trash, messing it up. Then I learned about Bea Johnson, a woman in California who was producing little to no garbage, it was this Aha! moment for me. I wanted to lessen my impact, so I started my Zero Waste journey. This is when I really decided that I not only needed to claim to love the environment, but actually live like I love the environment. Trash is for Tossers is my attempt. It will document my Zero Waste journey and show that leading a Zero Waste lifestyle is simple, cost-effective, timely, fun, &amp; entirely possible for everyone and anyone. If I can do it, anyone can! How do I define ZERO WASTE? To me, Zero Waste means that I do not produce any garbage. No sending anything to landfill, no throwing anything in a trash can, nothing. However, I do recycle and I do compost.</p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/3.png.jpg\" alt=\"3.png.jpg\" width=\"700\" height=\"465\" /></p>\r\n<p>My name is Lauren Singer and I live a Zero Waste lifestyle in New York City. So how did I get here? I was an Environmental Studies major in College and have always been interested in the environment, but I made the conscious decision to live Zero Waste in 2012 when a fellow Environmental Studies classmate would bring lunch to class every week in a single use plastic bag, a disposable water bottle, and a plastic takeout container. I would sit there and think, we are supposed to be the future of this planet and here we are with our trash, messing it up. Then I learned about Bea Johnson, a woman in California who was producing little to no garbage, it was this Aha! moment for me. I wanted to lessen my impact, so I started my Zero Waste journey. This is when I really decided that I not only needed to claim to love the environment, but actually live like I love the environment. Trash is for Tossers is my attempt. It will document my Zero Waste journey and show that leading a Zero Waste lifestyle is simple, cost-effective, timely, fun, &amp; entirely possible for everyone and anyone. If I can do it, anyone can! How do I define ZERO WASTE? To me, Zero Waste means that I do not produce any garbage. No sending anything to landfill, no throwing anything in a trash can, nothing. However, I do recycle and I do compost.</p>\r\n<p>&nbsp;</p>\r\n<p>My name is Lauren Singer and I live a Zero Waste lifestyle in New York City. So how did I get here? I was an Environmental Studies major in College and have always been interested in the environment, but I made the conscious decision to live Zero Waste in 2012 when a fellow Environmental Studies classmate would bring lunch to class every week in a single use plastic bag, a disposable water bottle, and a plastic takeout container. I would sit there and think, we are supposed to be the future of this planet and here we are with our trash, messing it up. Then I learned about Bea Johnson, a woman in California who was producing little to no garbage, it was this Aha! moment for me. I wanted to lessen my impact, so I started my Zero Waste journey. This is when I really decided that I not only needed to claim to love the environment, but actually live like I love the environment. Trash is for Tossers is my attempt. It will document my Zero Waste journey and show that leading a Zero Waste lifestyle is simple, cost-effective, timely, fun, &amp; entirely possible for everyone and anyone. If I can do it, anyone can! How do I define ZERO WASTE? To me, Zero Waste means that I do not produce any garbage. No sending anything to landfill, no throwing anything in a trash can, nothing. However, I do recycle and I do compost.</p>\r\n<p>&nbsp;</p>\r\n<p>My name is Lauren Singer and I live a Zero Waste lifestyle in New York City. So how did I get here? I was an Environmental Studies major in College and have always been interested in the environment, but I made the conscious decision to live Zero Waste in 2012 when a fellow Environmental Studies classmate would bring lunch to class every week in a single use plastic bag, a disposable water bottle, and a plastic takeout container. I would sit there and think, we are supposed to be the future of this planet and here we are with our trash, messing it up. Then I learned about Bea Johnson, a woman in California who was producing little to no garbage, it was this Aha! moment for me. I wanted to lessen my impact, so I started my Zero Waste journey. This is when I really decided that I not only needed to claim to love the environment, but actually live like I love the environment. Trash is for Tossers is my attempt. It will document my Zero Waste journey and show that leading a Zero Waste lifestyle is simple, cost-effective, timely, fun, &amp; entirely possible for everyone and anyone. If I can do it, anyone can! How do I define ZERO WASTE? To me, Zero Waste means that I do not produce any garbage. No sending anything to landfill, no throwing anything in a trash can, nothing. However, I do recycle and I do compost.</p>\r\n</body>\r\n</html>', 13, 'publish'),
(18, 1457895404, 'How to LIVE ZERO WASTE LIFE with lauren singer', 'Lauren Singer', 'ls.png', 'ZERO-WASTE.png', 'YOUTUBE', 'zero waste life', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>My name is Lauren Singer and I live a Zero Waste lifestyle in New York City. So how did I get here? I was an Environmental Studies major in College and have always been interested in the environment, but I made the conscious decision to live Zero Waste in 2012 when a fellow Environmental Studies classmate would bring lunch to class every week in a single use plastic bag, a disposable water bottle, and a plastic takeout container. I would sit there and think, we are supposed to be the future of this planet and here we are with our trash, messing it up. Then I learned about Bea Johnson, a woman in California who was producing little to no garbage, it was this Aha! moment for me. I wanted to lessen my impact, so I started my Zero Waste journey. This is when I really decided that I not only needed to claim to love the environment, but actually live like I love the environment. Trash is for Tossers is my attempt. It will document my Zero Waste journey and show that leading a Zero Waste lifestyle is simple, cost-effective, timely, fun, &amp; entirely possible for everyone and anyone. If I can do it, anyone can! How do I define ZERO WASTE? To me, Zero Waste means that I do not produce any garbage. No sending anything to landfill, no throwing anything in a trash can, nothing. However, I do recycle and I do compost.</p>\r\n</body>\r\n</html>', 23, 'publish'),
(19, 1533676775, 'hi this is me', 'sad', '3.png.jpg', 'Los_Angeles,_Winter_2016.jpg', 'YOUTUBE', 'winter', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>this is first</p>\r\n</body>\r\n</html>', 6, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `salt` varchar(255) DEFAULT '$2y$10$quickbrownfoxjumpsover'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `date`, `first_name`, `last_name`, `username`, `email`, `image`, `password`, `role`, `details`, `salt`) VALUES
(16, 1533277102, 'nadia', 'hossain', 'ndi', 'nadia@gmail.com', 'Malina.jpg', '$1$lDAdpJ7w$AtuUKiy/qscUkqvv1DZFI1', 'admin', 'hellow ,i am melina weissman', ''),
(17, 1533277179, 'sad', 'sad', 'sad', 'sad@gmail.com', '3.png.jpg', '$2y$10$quickbrownfoxjumpsoveeob1NkAIqYlnDNd6AAwE0Nv1BMtRiD26', 'author', 'jqlkjkdjladjlaskjdlaksdjlksajd', ''),
(18, 1234567899, 'Lauren', 'singer', 'Lauren Singer', 'laurensinger', 'Lauren-SInger2.jpg', '$2y$10$quickbrownfoxjumpsoveeob1NkAIqYlnDNd6AAwE0Nv1BMtRiD26', 'author', 'i am lauren singer', '$2y$10$quickbrownfoxjumpsover');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

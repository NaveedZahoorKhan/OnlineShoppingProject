-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2016 at 09:51 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `bags_shoes`
--

CREATE TABLE IF NOT EXISTS `bags_shoes` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(80) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bags_shoes`
--

INSERT INTO `bags_shoes` (`id`, `name`, `image`, `link`) VALUES
(1, 'Mens Casual Shoes', 'images/bags shoes/men casual shoes.jpg', 'https://www.google.com'),
(2, 'Women Shoes', 'images/bags shoes/women-casual-shoes.jpg', 'https://www.google.com'),
(3, 'Women Sandals', 'images/bags shoes/women-sandals.jpg', 'https://www.google.com'),
(4, 'Mens Boots', 'images/bags shoes/mens-boots.jpg', 'https://www.google.com'),
(5, 'Women Boots', 'images/bags shoes/women-boots.jpg', 'https://www.google.com'),
(6, 'Women Pumps', 'images/bags shoes/womens pumps.jpg', 'https://www.google.com'),
(7, 'Shoe Accesories', 'images/bags shoes/shoe accesories.jpg', 'https://www.google.com'),
(8, 'Women Flats', 'images/bags shoes/womens flats.jpg', 'https://www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `health_beauty`
--

CREATE TABLE IF NOT EXISTS `health_beauty` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(80) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health_beauty`
--

INSERT INTO `health_beauty` (`id`, `name`, `image`, `link`) VALUES
(1, 'Hair Extension', 'images/health&beauty/hair extension&wigs.jpg', 'https://www.google.com'),
(2, 'Makeup', 'images/health&beauty/makeup.jpg', 'https://www.google.com'),
(3, 'Skin Care', 'images/health&beauty/skin-care.jpg', 'https://www.google.com'),
(4, 'Hair Removal', 'images/health&beauty/shaving-heair-removal.jpg', 'https://www.google.com'),
(5, 'Nails Tools', 'images/health&beauty/nails-tools.jpg', 'https://www.google.com'),
(6, 'Health Care', 'images/health&beauty/health-care.jpg', 'https://www.google.com'),
(7, 'Hair Care & Styling', 'images/health&beauty/hair-care-styling.jpg', 'https://www.google.com'),
(8, 'Makeup', 'images/health&beauty/makeup.jpg', 'https://www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `home_garden`
--

CREATE TABLE IF NOT EXISTS `home_garden` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(80) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_garden`
--

INSERT INTO `home_garden` (`id`, `name`, `image`, `link`) VALUES
(1, 'Kitchen,Dinner & Bar', 'images/home&garden/kitchen,dinner&bar.jpg', 'https://www.google.com'),
(2, 'Home Textile', 'images/home&garden/home-textile.jpg', 'https://www.google.com'),
(3, 'Festive & Supplier', 'images/home&garden/festive&party supplier.jpg', 'https://www.google.com'),
(4, 'Bathroom Product', 'images/home&garden/bathroom-product.jpg', 'https://www.google.com'),
(5, 'Home Decor', 'images/home&garden/home decor.jpg', 'https://www.google.com'),
(6, 'Arts,Crafts & Sweing', 'images/home&garden/arts,crafts&Sewing.jpg', 'https://www.google.com'),
(7, 'House Ornamentation', 'images/home&garden/house ornamentation.jpg', 'https://www.google.com'),
(8, 'Garden Supplier', 'images/home&garden/garden-supplier.jpg', 'https://www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `kids_baby`
--

CREATE TABLE IF NOT EXISTS `kids_baby` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(80) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kids_baby`
--

INSERT INTO `kids_baby` (`id`, `name`, `image`, `link`) VALUES
(1, 'Baby Girls Clothing', 'images/kids&baby/baby girls clothing.jpg', 'https://www.google.com'),
(2, 'Girls Clothing', 'images/kids&baby/girls-clothing.jpg', 'https://www.google.com'),
(3, 'Baby Shoes', 'images/kids&baby/baby-shoes.jpg', 'https://www.google.com'),
(4, 'Baby Care', 'images/kids&baby/baby-care.jpg', 'https://www.google.com'),
(5, 'Baby Boys Clothing', 'images/kids&baby/baby boys clothing.jpg', 'https://www.google.com'),
(6, 'Boys Clothing', 'images/kids&baby/boys clothing.jpg', 'https://www.google.com'),
(7, 'Children Shoes', 'images/kids&baby/children shoes.jpg', 'https://www.google.com'),
(8, 'Activity Gear', 'images/kids&baby/activity-gear.jpg', 'https://www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'adeel', 'adeel1995');

-- --------------------------------------------------------

--
-- Table structure for table `men_clothing`
--

CREATE TABLE IF NOT EXISTS `men_clothing` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(80) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men_clothing`
--

INSERT INTO `men_clothing` (`id`, `name`, `image`, `link`) VALUES
(1, 'Top & Tees', 'images/men/top-tess.jpg', 'men-top-tees.php'),
(2, 'Jackets & Coats', 'images/men/jackets.jpg', 'men-top-tees.php'),
(3, 'Bottoms', 'images/men/bottom.jpg', 'men-top-tees.php'),
(4, 'Suits & Blazers', 'images/men/Suits&blazers.jpg', 'https://www.google.com'),
(5, 'Shirts', 'images/men/shirts.jpg', 'men-top-tees.php'),
(6, 'Accesories', 'images/men/accesories.jpg', 'men-top-tees.php'),
(7, 'Underwear', 'images/men/underwear.jpg', 'men-top-tees.php'),
(8, 'Hoddies', 'images/men/hoodies.jpg', 'men-top-tees.php');

-- --------------------------------------------------------

--
-- Table structure for table `top_tees`
--

CREATE TABLE IF NOT EXISTS `top_tees` (
  `id` int(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_tees`
--

INSERT INTO `top_tees` (`id`, `description`, `image`, `link`, `price`) VALUES
(1, '2W1212-Men-s-pure-cotton-T-shirt-with-short-sleeve', 'images/top-tees/img-1.jpg', 'https://www.google.com', 7),
(2, '2W1212-Men-s-pure-cotton-T-shirt-with-short-sleeve', 'images/top-tees/img-2.jpg', 'https://www.google.com', 16),
(3, '2W1212-Men-s-pure-cotton-T-shirt-with-short-sleeve', 'images/top-tees/img-3.jpg', 'https://www.google.com', 6),
(4, '2W1212-Men-s-pure-cotton-T-shirt-with-short-sleeve', 'images/top-tees/img-4.jpg', 'https://www.google.com', 10),
(5, '2W1212-Men-s-pure-cotton-T-shirt-with-short-sleeve', 'images/top-tees/img-5.jpg', 'https://www.google.com', 22),
(6, '2W1212-Men-s-pure-cotton-T-shirt-with-short-sleeve', 'images/top-tees/img-6.jpg', 'https://www.google.com', 9),
(7, '2W1212-Men-s-pure-cotton-T-shirt-with-short-sleeve', 'images/top-tees/img-7.jpg', 'https://www.google.com', 7),
(8, '2W1212-Men-s-pure-cotton-T-shirt-with-short-sleeve', 'images/top-tees/img-8.jpg', 'https://www.google.com', 15),
(9, '2W1212-Men-s-pure-cotton-T-shirt-with-short-sleeve', 'images/top-tees/img-9.jpg', 'https://www.google.com', 12),
(10, '2W1212-Men-s-pure-cotton-T-shirt-with-short-sleeve', 'images/top-tees/img-10.jpg', 'https://www.google.com', 16),
(11, '2W1212-Men-s-pure-cotton-T-shirt-with-short-sleeve', 'images/top-tees/img-11.jpg', 'https://www.google.com', 7),
(12, '2W1212-Men-s-pure-cotton-T-shirt-with-short-sleeve', 'images/top-tees/img-12.jpg', 'https://www.google.com', 9),
(13, '2W1212-Men-s-pure-cotton-T-shirt-with-short-sleeve', 'images/top-tees/img-13.jpg', 'https://www.google.com', 12),
(14, '2W1212-Men-s-pure-cotton-T-shirt-with-short-sleeve', 'images/top-tees/img-14.jpg', 'https://www.google.com', 8),
(15, '2W1212-Men-s-pure-cotton-T-shirt-with-short-sleeve', 'images/top-tees/img-15.jpg', 'https://www.google.com', 9),
(16, '2W1212-Men-s-pure-cotton-T-shirt-with-short-sleeve', 'images/top-tees/img-16.jpg', 'https://www.google.com', 10);

-- --------------------------------------------------------

--
-- Table structure for table `women_clothing`
--

CREATE TABLE IF NOT EXISTS `women_clothing` (
  `id` int(20) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `image` varchar(80) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women_clothing`
--

INSERT INTO `women_clothing` (`id`, `name`, `image`, `link`) VALUES
(1, 'Dresses', 'images/women/Dresses.jpg', 'men-top-tees.php'),
(2, 'Jackets&Coats', 'images/women/jackets&coats.jpg', 'men-top-tees.php'),
(3, 'Swimwear', 'images/women/swimwear.jpg', 'men-top-tees.php'),
(4, 'Bottoms', 'images/women/bottoms.jpg', 'men-top-tees.php'),
(5, 'Blouses & Shirts', 'images/women/blouses&shirts.jpg', 'men-top-tees.php'),
(6, 'Tops & Tees', 'images/women/tops&tees.jpg', 'men-top-tees.php'),
(7, 'Accesories', 'images/women/accesories.jpg', 'men-top-tees.php'),
(8, 'Intimates', 'images/women/intimates.jpg', 'men-top-tees.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bags_shoes`
--
ALTER TABLE `bags_shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_beauty`
--
ALTER TABLE `health_beauty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_garden`
--
ALTER TABLE `home_garden`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kids_baby`
--
ALTER TABLE `kids_baby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `men_clothing`
--
ALTER TABLE `men_clothing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_tees`
--
ALTER TABLE `top_tees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `women_clothing`
--
ALTER TABLE `women_clothing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bags_shoes`
--
ALTER TABLE `bags_shoes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `health_beauty`
--
ALTER TABLE `health_beauty`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `home_garden`
--
ALTER TABLE `home_garden`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kids_baby`
--
ALTER TABLE `kids_baby`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `men_clothing`
--
ALTER TABLE `men_clothing`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `top_tees`
--
ALTER TABLE `top_tees`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

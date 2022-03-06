-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 06, 2022 at 04:53 PM
-- Server version: 8.0.27
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Computers'),
(2, 'Phones'),
(3, 'Cameras'),
(4, 'TV');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `hasher` varchar(64) COLLATE latin1_general_ci DEFAULT NULL,
  `address` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pobox` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `fname` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `lname` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `customer_img` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `group` int DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `status` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `permissions` text COLLATE latin1_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`) VALUES
(1, 'Standard', NULL),
(2, 'Standard', NULL),
(3, 'Administrator', '{\"admin\":1}');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `category_id` int NOT NULL,
  `subcategory_id` int NOT NULL,
  `product_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `product_brand` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `product_model` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `made_in_year` int NOT NULL,
  `product_serial_n` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_description` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `product_image` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `p_status` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'A',
  `product_condition` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `availability` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `subcategory_id`, `product_name`, `product_brand`, `product_model`, `made_in_year`, `product_serial_n`, `product_price`, `product_description`, `product_image`, `p_status`, `product_condition`, `availability`) VALUES
(1, 1, 1, 'ZBook WorkStation', 'HP', 'ZBook 850', 2017, 'ZB-HPZB-2021', '1180.00', 'WorkStation for Businesses, 1TB storage, 32GB-Ram, 16inch OLED deisplay', 'laptopimg1', 'A', 'New', 20),
(2, 1, 2, 'Hp laptop', 'HP', 'ZBook 950', 2018, 'HPZB-19-I7-1TB32R', '1725.00', 'Newest HP Laptop for Business and Student Intel I7, 32GB RAM, 1TB eMMC Flash Memory, Webcam, USB-A&C ,WiFi , Bluetooth, Windows 11', 'laptopimg2', 'sales', 'New', 20),
(3, 2, 3, 'Apple Iphone', 'Apple', 'Iphone 12 64 GT', 2020, 'MGJ63FS/A', '699.00', 'Nappaa upeat valokuvat ja yksityiskohtaiset videot iPhone 12 5G -älypuhelimen 12 megapikselin kaksoiskameralla, ja tutki niitä 6,1” Super Retina XDR OLED -näytöltä.', 'smartphone1', 'A', 'New', 15),
(4, 2, 3, 'Sony android phone', 'Sony', 'Sony Xperia 10 III 5G -Android-puhelin musta', 2021, 'XQBT52C4W.EEAC', '449.00', 'Sony Xperia 10 III -älypuhelimella on IP65/68-luokitus, ja sen ominaisuuksiin lukeutuu 5G-tuki, kaunis 6\" OLED-kosketusnäyttö, tekoälyavusteinen 12 + 8 + 8 megapikselin kolmoiskamera ja 4500 mAh akku kattavilla virranhallinta-asetuksilla.', 'smartphone2', 'sales', ' New', 25),
(5, 2, 3, 'Motorola android phone', 'Motorola', 'Motorola Moto G41 -Android-puhelin, Dual-SIM, 128 Gt, Pearl Gold', 2022, 'PAS40015SE', '249.00', 'Motorola Moto G41 -älypuhelimessa on 6,4” OLED-kosketusnäyttö, optisella kuvanvakaimella sekä Quad Pixel -teknologialla varustettu 48 + 8 + 2 megapikselin kolmoiskamera sekä 30 W pikalatausta tukeva 5000 mAh akku.', 'smartphone3', ' A', 'New', 15),
(6, 2, 3, 'Erifon 4G Plus pöytä-GSM puhelin', 'Erifon', 'Doro 312CS', 2015, '132-2400', '119.00', '(Helppokäyttöinen perinteistä lankapuhelinta muistuttava 4G-puhelin, joka toimii myös akkukäyttöisesti. Käyttö on virtaviivaista selkeän näytön ja isojen näppäinten ansiosta.)', NULL, 'sales', 'Used', 5),
(7, 2, 4, 'Doro fixed phone', 'Doro', 'Doro 312CS', 2017, '5639', '54.90', '(Tässä suositussa puhelimessa on suuri ja selkeä näyttö. Hyvin sijoitettu visuaalinen soittomerkkivalo auttaa näkemään, milloin joku soittaa. Soittajan numeron näyttö ja kaiutin ovat käteviä toimintoja.)', 'fixedphone2', ' A', 'Used', 3),
(8, 2, 4, 'Doro fixed phone', 'Doro', 'Doro 901c', 0, '4756', '21.90', '(Doro 901c on pienikokoinen ja hienostunut pöytäpuhelin. Sen kuulokeosassa on integroitu näppäimistö ja puhelinpainike – fiksu ratkaisu, kun tilaa ei ole liikaa.)', 'fixedphone3', 'sales', 'New', 0),
(9, 2, 4, 'Gigaset fixed phone', 'Gigaset', 'DA710 Gigaset', 0, 'S30350-S213-R201', '59.00', '(Helppokäyttöinen lankapuhelin kotiin tai toimistoon. Tilaa 100 yhteystiedolle ja mukana useita käteviä toimintoja.)', 'fixedphone1', 'A', 'New', 5),
(10, 2, 4, 'Doro fixed phone', 'Doro', 'PhoneEasyDoro', 0, 'PHONEEASY100WWH', '79.95', '(Langaton DECT-puhelin, jossa suuret näppäimet, helppolukuinen iso näyttö ja hyvä äänenlaatu. Mukana 2 luuria.)', 'fixedphone3', ' A', 'New', 10);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `hasher` varchar(64) COLLATE latin1_general_ci DEFAULT NULL,
  `fname` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `lname` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `staff_img` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `group` int DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `status` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `subcategory_id` int NOT NULL,
  `subcategory_name` varchar(100) NOT NULL,
  `parent_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`subcategory_id`, `subcategory_name`, `parent_id`) VALUES
(1, 'Desktop', 1),
(2, 'Laptop', 1),
(3, 'Mobile', 2),
(4, 'Landphone', 2),
(5, 'Digital', 3),
(6, 'Manual', 3),
(7, 'LED', 4),
(8, 'OLED', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_session`
--

CREATE TABLE `user_session` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `hash` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD KEY `fk_category` (`category_id`),
  ADD KEY `fk_subcategory` (`subcategory_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD UNIQUE KEY `subcategory_id` (`subcategory_id`),
  ADD KEY `fk_category` (`parent_id`);

--
-- Indexes for table `user_session`
--
ALTER TABLE `user_session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subcategory_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_session`
--
ALTER TABLE `user_session`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

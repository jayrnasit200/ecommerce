-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2020 at 03:22 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `Product_id` int(11) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `rate` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `amount` varchar(10) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `Product_id`, `Email`, `rate`, `qty`, `amount`) VALUES
(2, 92, 'admin@gmail.com', '1956.5', '1', '1956.5'),
(3, 91, 'admin@gmail.com', '332.63', '3', '996');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `name`, `image`) VALUES
(24, 'Women', 'women.jpg'),
(23, 'Men', 't_shirts.jpg'),
(21, 'Electronics', '8a35529743d840c490bd3a3c14a65930_169e15672a5_673_Galaxy_A50_Premium-A_Content_650x350_04_jpg.jpeg'),
(25, 'Baby & Kids', 'kids_boy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `order_address`
--

DROP TABLE IF EXISTS `order_address`;
CREATE TABLE IF NOT EXISTS `order_address` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `Full_name` varchar(30) NOT NULL,
  `Mobile_number` varchar(13) NOT NULL,
  `Pincode` varchar(6) NOT NULL,
  `House_no` varchar(80) NOT NULL,
  `Colony` varchar(80) NOT NULL,
  `Landmark` varchar(80) NOT NULL,
  `Town_City` varchar(10) NOT NULL,
  `State` varchar(10) NOT NULL,
  `Address_Type` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `Qty` varchar(20) NOT NULL,
  `Rate` varchar(20) NOT NULL,
  `Amount` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `create_date` timestamp NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_address`
--

INSERT INTO `order_address` (`order_id`, `Email`, `Full_name`, `Mobile_number`, `Pincode`, `House_no`, `Colony`, `Landmark`, `Town_City`, `State`, `Address_Type`, `product_id`, `Qty`, `Rate`, `Amount`, `date`, `create_date`) VALUES
(2, 'admin@gmail.com', 'raju patel', '9924229808', '395004', 'carmayog', 'carmayog', 'Gujarat', 'surat', 'India', 'Home (7 am – 9 pm delivery)', 92, '1', '1956.5', '1956.5', '2020-02-20', '2020-02-20 03:03:22'),
(3, 'admin@gmail.com', 'raju patel', '9924229808', '395004', 'carmayog', 'carmayog', 'Gujarat', 'surat', 'India', 'Home (7 am – 9 pm delivery)', 91, '3', '332.63', '996', '2020-02-20', '2020-02-20 03:03:22');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_number` varchar(8) NOT NULL,
  `type_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `simage` text NOT NULL,
  `price` varchar(6) NOT NULL,
  `discount` varchar(6) NOT NULL,
  `discount_price` varchar(6) NOT NULL,
  `sell_price` varchar(6) NOT NULL,
  `stoke` varchar(6) NOT NULL,
  `description` text NOT NULL,
  `short_description` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_number`, `type_id`, `name`, `cat_id`, `subcat_id`, `image`, `simage`, `price`, `discount`, `discount_price`, `sell_price`, `stoke`, `description`, `short_description`, `date`) VALUES
(90, 'ww-02', 14, 'XM-LR516-SLBR AWESOME SIL', 24, 64, 'xm-lr516-slbr-xtreme-original-imafhp726qf3xzms.jpeg', '', '1699', '80', '1359.2', '339.79', '100', 'Water Resistant\r\nYes\r\nDisplay Type\r\nAnalog\r\nStyle Code\r\nXM-LR516-SLBR\r\nSeries\r\nAWESOME SILVER DIAL\r\nOccasion\r\nCasual, Party-Wedding, Formal\r\nWatch Type\r\nWrist Watch\r\nPack of\r\n1\r\nSales Package\r\n1 Watch,Warranty Card\r\nMechanism\r\nQuartz\r\nStrap Material\r\nStainless Steel Strap\r\nStrap Type\r\nLinket\r\nStrap Design\r\nMesh\r\nCase/Bezel Material\r\nMetal\r\nNovelty Features\r\nSILVER DIAL WOMEN WATCH, BROWN COLOR STRAP, PREMIUM METAL WATCH\r\nPower Source\r\nBattery Powered\r\nClasp Type\r\nPush Button Clasp\r\nDial Color\r\nSilver\r\nDomestic Warranty\r\n1 Year\r\nWarranty Service Type\r\nOff-Site Warranty.', 'Xtreme : Dial Features: A screw to reset the time ; Steel-stoned stainless strap, secured by a butterfly class Water-resistant, caseInternational warranty: 1 years', '2020-02-15'),
(89, 'ww-01', 15, 'Present 12 Diamond Blue 2', 24, 64, 'present-12-diamond-blue-daniel-jubile-original-imafnsfhfv3hfgpz.jpeg', '', '1999', '86', '1719.1', '279.85', '500', 'Product Details\r\n\r\nDisplay Type\r\nAnalog\r\nStyle Code\r\nPresent 12 Diamond Blue\r\nSeries\r\n21st century Magnetic Chain\r\nOccasion\r\nCasual, Party-Wedding, Formal\r\nWatch Type\r\nWrist Watch\r\nPack of\r\n1\r\nSales Package\r\n1 Watch\r\nModel Name\r\n21st century Magnetic Chain\r\nCase/Bezel Material\r\nMetal\r\nClasp Type\r\nBuckle\r\nDial Color\r\nBlack\r\nWorld\'s one of the best indian movement and Sony battery helps to run the watch for years & years. Crafted from a rich quality material, this watch for men is light in weight and long lasting too. Daniel Jubile known for its edgy and affordable range of watches.You can show it off with your casual & formal attires to grab compliments from everyone around. Being easily Affordable to make it sit right on your wrist, it can add a physical dimension to your Style.watch yourself \"time doesnt stop\".\r\nGeneric Name\r\nWatches\r\nCountry of Origin\r\nIndia', 'World\'s one of the best indian movement and Sony battery helps to run the watch for years & years. Crafted from a rich quality material, this watch for men is light in weight and long lasting too. Daniel Jubile known for its edgy and affordable range of watches.You can show it off with your casual & formal attires to grab compliments from everyone around. Being easily Affordable to make it sit right on your wrist, it can add a physical dimension to your Style.watch yourself \"time doesnt stop\".', '2020-02-15'),
(91, 'ww-03', 13, 'TC_130142 NEW ARRIVA RAJV', 24, 64, 'trending-premium-quality-tc-130142-new-arrival-rajvadi-bangle-original-imafemp7e8pnzcrg.jpeg', '', '899', '63', '566.37', '332.63', '500', 'This Watch Offers The Priceless Looks And Class You Always Wanted. This Watch Offers True Craftsmanship That Only People With A Distinct Taste Can Identify. This Watch Is Designed Using Technology And Innovation, All Of Which Is Wrapped Up In Eye-catchy Dials Encased In quality Case That Can Be Beautifully Placed On Your Wrist Using Its Comfortable And Luxuriously Finished Leather Strap/Matel/Rubber or bracelets . Being Battery Powered, This Watch Offers Amazing Long Life And Durability That You Would Look For. We Are Sure That This Watch Is Going To Be Your Favorite For All Those Business Meetings, Events, Outings And Special Occasions Because It’s Not A Watch, It’s Your Identity.', '\r\n\r\nWater Resistant\r\nYes\r\nDisplay Type\r\nAnalog\r\nStyle Code\r\nTC_130142 NEW ARRIVA RAJVADI BANG E PACK OF 3\r\nOccasion\r\nCasual, Formal, Party-Wedding\r\nWatch Type\r\nWrist Watch\r\nPack of\r\n3\r\nSales Package\r\n3 Watch\r\nShock Resistance\r\nNo\r\nScratch Resistant\r\nNo\r\nMechanism\r\nQuartz\r\nStrap Material\r\nMetal Strap\r\nWorld Time\r\nNo\r\nDual Time\r\nNo\r\nStrap Type\r\nBracelet\r\nStrap Design\r\nNEW DESIGN\r\nCase/Bezel Material\r\nstainless steel case\r\nPower Source\r\nBattery Powered\r\nPower Reserve Indicator\r\nNo\r\nLight\r\nNo\r\nGPS\r\nNo\r\nTourbillon\r\nNo\r\nClasp Type\r\nBuckle\r\nMoonphase\r\nNo\r\nBox Material\r\nPaper Box\r\nOther Functions\r\nGOLD DIAL WATCH,WOMEN WRIST WATCHES,GIRLS WRIST WATCHES, WATCHES, WRIST WATCHES, GIRLS WATCHES, WOMEN WATCHES, LEATHER STRAP, BANGLE TYPE WATCH,RAJWADI BANGLE WATCH\r\nDial Color\r\nBlack, Gold, Gold\r\nWeight\r\n250 g\r\nWarranty Service Type\r\nOff Site Warranty - Customer will Need to send the Defected Product to the Surat Head Office and the replaced Product will be sent back to customer\r\n', '2020-02-15'),
(92, 'ww-04', 13, '2598WM02 Ladies Karishma ', 24, 64, '2598wm02-titan-original-imafh5fy2xzjgmen.jpeg', '', '2795', '30', '838.5', '1956.5', '25', ' Model Name\r\n2598WM02\r\nStrap Material\r\nMetal Strap\r\nWorld Time\r\nNo\r\nDual Time\r\nNo\r\nStrap Type\r\nMetal\r\nCase/Bezel Material\r\nBrass\r\nWater Resistance Depth\r\n30\r\nNovelty Features\r\nSleek Ergonomic metal strap\r\nPower Source\r\nLithium\r\nPower Reserve Indicator\r\nNo\r\nClasp Type\r\nSliding Clasp\r\nDial Color\r\nRose Gold\r\nWidth\r\n25 mm\r\nWarranty Service Type\r\nAt authorised service center only', '\r\nWater Resistant\r\nYes\r\nDisplay Type\r\nAnalog\r\nStyle Code\r\n2598WM02\r\nSeries\r\nLadies Karishma\r\nOccasion\r\nCasual\r\nWatch Type\r\nWrist Watch\r\nPack of\r\n1\r\nShock Resistance\r\nNo\r\nScratch Resistant\r\nNo\r\nMechanism\r\nQuartz\r\nModel Name\r\n2598WM02\r\nStrap Material\r\nMetal Strap\r\nWorld Time\r\nNo\r\nDual Time\r\nNo\r\nStrap Type\r\nMetal\r\nCase/Bezel Material\r\nBrass\r\nWater Resistance Depth\r\n30\r\nNovelty Features\r\nSleek Ergonomic metal strap\r\nPower Source\r\nLithium\r\nPower Reserve Indicator\r\nNo\r\nClasp Type\r\nSliding Clasp\r\nDial Color\r\nRose Gold\r\nWidth\r\n25 mm\r\nWarranty Service Type\r\nAt authorised service center only', '2020-02-15'),
(93, 'ww-05', 16, 'blue exclusive diamond st', 24, 64, 'blue-exclusive-diamond-studded-prisiouse-collaction-love-original-imafh6s3u4twywpq.jpeg', '', '499', '56', '279.44', '219.56', '30', '\r\nWarranty Service Type\r\nOff-site warranty, all maunfacturing defacts are covered under warranty within mantioned warranty period.\r\nManufacturing, Packaging and Import Info', '\r\n\r\nDisplay Type\r\nAnalog\r\nStyle Code\r\nblue exclusive diamond studded prisiouse collaction love bracelet for valantine Watch For Girls\r\nOccasion\r\nCasual, Formal, Party-Wedding\r\nWatch Type\r\nWrist Watch\r\nPack of\r\n1\r\nMechanism\r\nQuartz\r\nStrap Material\r\nGenuine Leather Strap\r\nStrap Type\r\nBracelet\r\nCase/Bezel Material\r\nMetal\r\nNovelty Features\r\nDiamond stuuded on love, round gold diamond studded case.\r\nPower Source\r\nBattery Powered\r\nClasp Type\r\nPush button clasp\r\nBox Material\r\nCardboard\r\nDial Color\r\nWhite\r\nThickness\r\n7 mm', '2020-02-15'),
(94, 'wf-01', 15, 'Women Multicolor Flats Sa', 24, 65, 'ans05-ans08-sndl-001-4-beonza-multicolor-original-imafe945asvzyhap.jpeg', '', '999', '50', '499.5', '499.5', '50', 'Type\r\nFlats\r\nType for Flats\r\nSandal\r\nColor\r\nMulticolor\r\nPack of\r\n2', 'Type\r\nFlats\r\nType for Flats\r\nSandal\r\nColor\r\nMulticolor\r\nPack of\r\n2', '2020-02-15'),
(95, 'wf-02', 14, 'Women Maroon Flats Sandal', 24, 65, 'bk-101-3-bk-dream-maroon-original-imafnhfbhhmgddaa.jpeg', '', '1499', '78', '1169.2', '329.78', '25', 'Other Details\r\nLend a refined finish to your everyday look with this pair of slip-ons. Featuring a unique design, they\'ll go best with a skater skirt and a sling bag when you head for a quick catch over a cup of coffee.\r\nWeight\r\n240 g (per single Sandal) - Weight of the product may vary depending on size.\r\nThis product brings you this cool, trendy Flats of Casual Synthetic Leather for Women . Outer material is high quality synthetic leather. The bold look guarantees the wearer much appreciation from people. The casual design makes them perfect for daily use whereas the design aesthetics make it the right choice for wearing to a party. Buy yourself these Street Style Casual Flats, Sandals or gift someone NOW!\r\nGeneric Name\r\nSandal\r\nCountry of Origin\r\nIndia', 'Type\r\nFlats\r\nUpper Pattern\r\nSolid\r\nClosure\r\nSlip on\r\nType for Flats\r\nSlip-on\r\nColor\r\nMaroon\r\nTanning Process\r\nSynthetic\r\nRemovable Insole\r\nNo\r\nPack of\r\n1\r\nSole Material\r\nEVA\r\nCare instructions\r\nWipe with a clean, dry cloth when needed\r\nInner Material\r\nVelvet\r\nInsole Material\r\nEVA', '2020-02-15'),
(96, 'wf-03', 13, 'Angel-04 Pink Flyknit Spo', 24, 65, 'angel-04cpink-8-asian-pink-original-imafz7yysgttywuy.jpeg', '', '999', '41', '409.59', '589.41', '50', 'Pack of\r\n1\r\nLining\r\nFabric\r\nCare Instructions\r\nWipe with a clean, dry cloth to remove dust\r\nGeneric Name\r\nShoe', 'Color\r\nPink\r\nInner Material\r\nFabric\r\nOuter Material\r\nFabric\r\nModel Name\r\nAngel-04 Pink Flyknit Sports Shoes,Walking Shoes,Gym Shoes,Sneakers,Loafers\r\nIdeal For\r\nWomen\r\nOccasion\r\nSports\r\nSole Material\r\nEva\r\nClosure\r\nLace-Ups\r\nWeight\r\n145 g (per single Shoe) - Weight of the product may vary depending on size.\r\nUpper Pattern\r\nSolid', '2020-02-15'),
(97, 'wf-04', 13, 'Running Shoes For Women  ', 24, 65, 'blush61cblkbeg-cuteclgrydgry-7-asian-multicolor-original-imae7jdshwymnfmy.jpeg', '', '639', '18', '115.02', '523.98', '100', 'Color\r\nPink, Grey\r\nOuter Material\r\nMesh\r\nIdeal For\r\nWomen\r\nOccasion\r\nSports', 'School Shoe\r\nNo\r\nGeneric Name\r\nShoe', '2020-02-15'),
(98, 'wf-05', 16, 'Stylish Blue & Pink Runni', 24, 65, '88-4-sparx-blue-pink-original-imaeqf22u6tfbwzr.jpeg', '', '999', '20', '199.8', '799.2', '555', 'Encapsulate an ultimate look, wearing these sneakers from Sparx. This pair is designed to ensure that every nerve in your feet can relax on its comfortable sole. Club these sneakers with your outfit to add a refined finish to your overall look for the day.\r\nGeneric Name\r\nShoe\r\nCountry of Origin\r\nIndia', 'Color\r\nBlue, Pink\r\nOuter Material\r\nSynthetic Leather\r\nModel Name\r\nStylish Blue & Pink\r\nIdeal For\r\nWomen\r\nOccasion\r\nSports\r\nSchool Shoe\r\nNo\r\nSole Material\r\nEVA\r\nClosure\r\nLace-Ups\r\nWeight\r\n200 g (per single Shoe) - Weight of the product may vary depending on size.\r\nUpper Pattern\r\nSolid\r\nPack of\r\n1\r\nTip Shape\r\nRound\r\nSeason\r\nSS16', '2020-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `product_image_master`
--

DROP TABLE IF EXISTS `product_image_master`;
CREATE TABLE IF NOT EXISTS `product_image_master` (
  `pim_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `is_created` datetime NOT NULL,
  `is_deleted` int(3) NOT NULL,
  `product_id` int(11) NOT NULL,
  `simage` text NOT NULL,
  PRIMARY KEY (`pim_id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_image_master`
--

INSERT INTO `product_image_master` (`pim_id`, `status`, `is_created`, `is_deleted`, `product_id`, `simage`) VALUES
(75, 1, '0000-00-00 00:00:00', 0, 91, 'trending-premium-quality-tc-130142-new-arrival-rajvadi-bangle-original-imafemp73haza77a.jpeg'),
(74, 1, '0000-00-00 00:00:00', 0, 91, 'trending-premium-quality-tc-130142-new-arrival-rajvadi-bangle-original-imafemp7whh5ysbd.jpeg'),
(73, 1, '0000-00-00 00:00:00', 0, 90, 'xm-lr516-slbr-xtreme-original-imafhp74qn25sdta.jpeg'),
(72, 1, '0000-00-00 00:00:00', 0, 90, 'xm-lr516-slbr-xtreme-original-imafhp73zygqrhhy.jpeg'),
(71, 1, '0000-00-00 00:00:00', 0, 89, 'present-12-diamond-blue-daniel-jubile-original-imafzgt75v9hunny.jpeg'),
(70, 1, '0000-00-00 00:00:00', 0, 89, 'present-12-diamond-blue-daniel-jubile-original-imafnsfh6x3n59jq.jpeg'),
(69, 1, '0000-00-00 00:00:00', 0, 89, 'indian-rishtey-present-blue-1-diamond-line-daniel-jubile-original-imafgg3crtatffmq.jpeg'),
(68, 1, '0000-00-00 00:00:00', 0, 88, 'IMG-20180411-WA0030_edit.jpg'),
(66, 1, '0000-00-00 00:00:00', 0, 87, 'images.png'),
(67, 1, '0000-00-00 00:00:00', 0, 87, 'index.jpg'),
(64, 1, '0000-00-00 00:00:00', 0, 86, 'mi-l32m5-an-original-imafm59fhkvg9sr51.jpeg'),
(65, 1, '0000-00-00 00:00:00', 0, 86, 'mi-l43m4-4ain-original-imafkdzpsafcrzue1.jpeg'),
(63, 1, '0000-00-00 00:00:00', 0, 86, 'koryo-kle32dlvh5-kle32dlvh5-original-imafghr2chqyvqv41.jpeg'),
(62, 1, '0000-00-00 00:00:00', 0, 85, 'mi-l43m4-4ain-original-imafkdzpsafcrzue.jpeg'),
(61, 1, '0000-00-00 00:00:00', 0, 85, 'mi-l32m5-an-original-imafm59fhkvg9sr5.jpeg'),
(60, 1, '0000-00-00 00:00:00', 0, 85, 'koryo-kle32dlvh5-kle32dlvh5-original-imafghr2chqyvqv4.jpeg'),
(59, 1, '0000-00-00 00:00:00', 0, 84, 'Mobile_Accessories.jpeg'),
(58, 1, '0000-00-00 00:00:00', 0, 84, 'mobil.jpeg'),
(57, 1, '0000-00-00 00:00:00', 0, 84, 'leptop.jpeg'),
(76, 1, '0000-00-00 00:00:00', 0, 92, '2598wm02-titan-original-imafh5fy2xzjgmen1.jpeg'),
(77, 1, '0000-00-00 00:00:00', 0, 92, '2598wm02-titan-original-imafh5fy3rgvunux.jpeg'),
(78, 1, '0000-00-00 00:00:00', 0, 92, '2598wm02-titan-original-imafh5fyrz7rcged.jpeg'),
(79, 1, '0000-00-00 00:00:00', 0, 92, '2598wm02-titan-original-imafh5fyyhwj9as6.jpeg'),
(80, 1, '0000-00-00 00:00:00', 0, 93, 'blue-exclusive-diamond-studded-prisiouse-collaction-love-original-imafh6s3nph8jxyx.jpeg'),
(81, 1, '0000-00-00 00:00:00', 0, 93, 'blue-exclusive-diamond-studded-prisiouse-collaction-love-original-imafh6s358pkg8n8.jpeg'),
(82, 1, '0000-00-00 00:00:00', 0, 94, 'ans05-ans08-sndl-001-4-beonza-multicolor-original-imafdjffsscd2kca.jpeg'),
(83, 1, '0000-00-00 00:00:00', 0, 94, 'ans05-ans08-sndl-001-4-beonza-multicolor-original-imafdvwpdgf3mceq.jpeg'),
(84, 1, '0000-00-00 00:00:00', 0, 94, 'ans05-ans08-sndl-001-4-beonza-multicolor-original-imafdwbmnjtsadvq.jpeg'),
(85, 1, '0000-00-00 00:00:00', 0, 95, 'bk-101-3-bk-dream-maroon-original-imafnhf8yzjcebwc.jpeg'),
(86, 1, '0000-00-00 00:00:00', 0, 95, 'bk-101-4-bk-dream-maroon-original-imafnhf7zzbawfgq.jpeg'),
(87, 1, '0000-00-00 00:00:00', 0, 95, 'bk-101-6-5-bk-dream-maroon-original-imafnheyrjb4vfhd.jpeg'),
(88, 1, '0000-00-00 00:00:00', 0, 95, 'bk-101-6-bk-dream-maroon-original-imafnhfg2zwgfxu5.jpeg'),
(89, 1, '0000-00-00 00:00:00', 0, 96, 'angel-04cpink-4-asian-pink-original-imafz7yykegezzwm.jpeg'),
(90, 1, '0000-00-00 00:00:00', 0, 96, 'angel-04cpink-5-asian-pink-original-imafz7yy6r9gaur9.jpeg'),
(91, 1, '0000-00-00 00:00:00', 0, 96, 'angel-04cpink-5-asian-pink-original-imafz7yyyj62jzed.jpeg'),
(92, 1, '0000-00-00 00:00:00', 0, 96, 'angel-04cpink-6-asian-pink-original-imafz7yyzbcrqdmk.jpeg'),
(93, 1, '0000-00-00 00:00:00', 0, 97, 'blush61cblkbeg-cuteclgrydgry-5-asian-multicolor-original-imae7jdsu92ejxdq.jpeg'),
(94, 1, '0000-00-00 00:00:00', 0, 97, 'cute-n-42-asian-grey-pink-original-imae7jdshpvzqf7v.jpeg'),
(95, 1, '0000-00-00 00:00:00', 0, 97, 'cute-n-42-asian-grey-pink-original-imaez4h7yzrhfhrm.jpeg'),
(96, 1, '0000-00-00 00:00:00', 0, 98, '88-4-sparx-blue-pink-original-imaeqf22evdbrqaw.jpeg'),
(97, 1, '0000-00-00 00:00:00', 0, 98, '88-4-sparx-blue-pink-original-imaeqf22gtybwhhv.jpeg'),
(98, 1, '0000-00-00 00:00:00', 0, 98, '88-4-sparx-blue-pink-original-imaeqf22hfrbzypd.jpeg'),
(99, 1, '0000-00-00 00:00:00', 0, 98, '88-4-sparx-blue-pink-original-imaeqf22u6tfbwzr_(1).jpeg'),
(100, 1, '0000-00-00 00:00:00', 0, 98, '88-4-sparx-blue-pink-original-imaeqf22u6tfbwzr1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `name`, `image`) VALUES
(8, '1', '01.jpg'),
(9, '2', '02.jpg'),
(10, '3', '03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  PRIMARY KEY (`sub_category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `cat_id`, `Name`) VALUES
(58, 23, 'Jeans For Men'),
(53, 21, 'Camera'),
(52, 21, 'Laptops'),
(51, 21, 'Mobile Accessories'),
(50, 21, 'Mobile'),
(60, 23, 'Shirts For Men'),
(62, 23, 'Footwear For Men'),
(63, 23, 'Watches For Men'),
(64, 24, 'Watches For Women'),
(65, 24, 'Footwear For Women'),
(66, 24, 'Western Wear'),
(67, 24, 'Jewellery For Women'),
(69, 25, 'Baby Boy Clothing'),
(70, 25, 'Baby Girl Clothing'),
(71, 25, 'Toys'),
(72, 25, 'Footwear Ror Baby');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `name`) VALUES
(15, 'Top-Offer'),
(14, 'Weekend-Offer'),
(13, 'New-Offer'),
(16, 'Best-Offer');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

DROP TABLE IF EXISTS `user_signup`;
CREATE TABLE IF NOT EXISTS `user_signup` (
  `user_signup_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `password` varchar(80) NOT NULL,
  PRIMARY KEY (`user_signup_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`user_signup_id`, `Name`, `Email`, `Mobile`, `password`) VALUES
(11, 'admin', 'admin@gmail.com', '+918980868147', 'admin'),
(12, 'jay', 'jayrnasit12345@gmail.com', '+919664663274', '111'),
(13, 'king', 'admin@gmail.com', '+919664663274', 'zzz'),
(15, 'yogesh', 'admin123@gmail.com', '+918866552409', '21232f297a57a5a74389'),
(16, 'abc', 'ad123@gmail.com', '+911234567895', 'Jay@12345'),
(17, 'manibean', 'ad5236@gmail.com', '8529637415', 'JaY@12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

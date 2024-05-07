-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 10:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `select_category` text NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `small_discription` mediumtext NOT NULL,
  `long_discription` longtext NOT NULL,
  `price` varchar(8) NOT NULL,
  `offerprice` varchar(8) NOT NULL,
  `tax` varchar(4) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `select_category`, `product_name`, `small_discription`, `long_discription`, `price`, `offerprice`, `tax`, `image`, `created_at`) VALUES
(12, 'electronic', 'samsung s21 fe 5g', 'Released', 'LAUNCH	Announced	2022, January 04\r\nStatus	Available. Released 2022, January 07\r\nBODY	Dimensions	155.7 x 74.5 x 7.9 mm (6.13 x 2.93 x 0.31 in)\r\nWeight	177 g (6.24 oz)\r\nBuild	Glass front (Gorilla Glass Victus), plastic back, aluminum frame\r\nSIM	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)\r\n 	IP68 dust/water resistant (up to 1.5m for 30 min)\r\nDISPLAY	Type	Dynamic AMOLED 2X, 120Hz, HDR10+\r\nSize	6.4 inches, 100.5 cm2 (~86.7% screen-to-body ratio)\r\nResolution	1080 x 2340 pixels, 19.5:9 ratio (~403 ppi density)\r\nProtection	Corning Gorilla Glass Victus\r\n 	Always-on display\r\nPLATFORM	OS	Android 12, upgradable to Android 14, One UI 6\r\nChipset	Qualcomm SM8350 Snapdragon 888 5G (5 nm) - Version 1\r\nExynos 2100 (5 nm) - Version 2\r\nCPU	Octa-core (1x2.84 GHz Cortex-X1 & 3x2.42 GHz Cortex-A78 & 4x1.80 GHz Cortex-A55) - Version 1\r\nOcta-core (1x2.9 GHz Cortex-X1 & 3x2.80 GHz Cortex-A78 & 4x2.2 GHz Cortex-A55) - Version 2\r\nGPU	Adreno 660 - Version 1\r\nMali-G78 MP14 - Version 2\r\nMEMORY	Card slot	No\r\nInternal	128GB 6GB RAM, 128GB 8GB RAM, 256GB 6GB RAM, 256GB 8GB RAM\r\n 	UFS 3.1\r\nMAIN CAMERA	Triple	12 MP, f/1.8, 26mm (wide), 1/1.76\", 1.8µm, dual pixel PDAF, OIS\r\n8 MP, f/2.4, 76mm (telephoto), 1/4.5\", 1.0µm, PDAF, OIS, 3x optical zoom\r\n12 MP, f/2.2, 13mm, 123˚ (ultrawide), 1/3.0\", 1.12µm\r\nFeatures	LED flash, auto-HDR, panorama\r\nVideo	4K@30/60fps, 1080p@30/60/240fps, 720p@960fps, HDR10+, gyro-EIS\r\nSELFIE CAMERA	Single	32 MP, f/2.2, 26mm (wide), 1/2.74\", 0.8µm\r\nFeatures	HDR\r\nVideo	4K@30/60fps, 1080p@30/60fps, gyro-EIS\r\nSOUND	Loudspeaker	Yes, with stereo speakers\r\n3.5mm jack	No\r\n 	32-bit/384kHz audio\r\nCOMMS	WLAN	Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct\r\nBluetooth	5.0, A2DP, LE\r\nPositioning	GPS, GLONASS, BDS, GALILEO\r\nNFC	Yes\r\nRadio	Unspecified\r\nUSB	USB Type-C, OTG\r\nFEATURES	Sensors	Fingerprint (under display, optical), accelerometer, gyro, proximity, compass\r\n 	Samsung DeX (desktop experience support)\r\nBATTERY	Type	Li-Ion 4500 mAh, non-removable\r\nCharging	25W wired, PD3.0, 50% in 30 min (advertised)\r\n15W wireless\r\nReverse wireless', '35000rs', '33000rs', '18%', 's21.webp', '2024-04-30 12:09:20'),
(13, 'electronic', 'samsung m31', 'Samsung Galaxy M31 Android smartphone. Announced Feb 2020. Features 6.4″ display, Exynos 9611 chipset, 6000 mAh battery, 128 GB storage, 8 GB RAM,', 'NETWORK	Technology	\r\nGSM / HSPA / LTE\r\nLAUNCH	Announced	2020, February 25\r\nStatus	Available. Released 2020, March 05\r\nBODY	Dimensions	159.2 x 75.1 x 8.9 mm (6.27 x 2.96 x 0.35 in)\r\nWeight	191 g (6.74 oz)\r\nBuild	Glass front (Gorilla Glass 3), plastic back, plastic frame\r\nSIM	Dual SIM (Nano-SIM, dual stand-by)\r\nDISPLAY	Type	Super AMOLED, 420 nits (peak)\r\nSize	6.4 inches, 100.5 cm2 (~84.1% screen-to-body ratio)\r\nResolution	1080 x 2340 pixels, 19.5:9 ratio (~403 ppi density)\r\nProtection	Corning Gorilla Glass 3\r\nPLATFORM	OS	Android 10, upgradable to Android 12, One UI 4.1\r\nChipset	Exynos 9611 (10nm)\r\nCPU	Octa-core (4x2.3 GHz Cortex-A73 & 4x1.7 GHz Cortex-A53)\r\nGPU	Mali-G72 MP3\r\nMEMORY	Card slot	microSDXC (dedicated slot)\r\nInternal	64GB 6GB RAM, 128GB 6GB RAM, 128GB 8GB RAM\r\n 	UFS 2.1\r\nMAIN CAMERA	Triple	64 MP, f/1.8, 26mm (wide), 1/1.72\", 0.8µm, PDAF\r\n8 MP, f/2.2, 123˚ (ultrawide), 1/4.0\", 1.12µm\r\n5 MP, f/2.4, (macro)\r\n5 MP, f/2.2, (depth)\r\nFeatures	LED flash, panorama, HDR\r\nVideo	4K@30fps, 1080p@30fps, gyro-EIS\r\nSELFIE CAMERA	Single	32 MP, f/2.0, 26mm (wide), 1/2.8\", 0.8µm\r\nFeatures	HDR\r\nVideo	4K@30fps, 1080p@30fps\r\nSOUND	Loudspeaker	Yes\r\n3.5mm jack	Yes\r\nCOMMS	WLAN	Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct\r\nBluetooth	5.0, A2DP, LE\r\nPositioning	GPS, GLONASS, GALILEO, BDS\r\nNFC	Yes (market/region dependent)\r\nRadio	FM radio, RDS, recording\r\nUSB	USB Type-C 2.0\r\nFEATURES	Sensors	Fingerprint (rear-mounted), accelerometer, gyro, compass\r\n 	Virtual proximity sensing\r\nBATTERY	Type	Li-Po 6000 mAh, non-removable\r\nCharging	15W wired\r\nMISC	Colors	Ocean Blue, Space Black, Red\r\nModels	SM-M315F, SM-M315F/DS, SM-M315F/DSN\r\nSAR	0.52 W/kg (head)     0.69 W/kg (body)    \r\nSAR EU	0.48 W/kg (head)     1.13 W/kg (body)    \r\nPrice	About 310 EUR', '16000rs', '13000rs', '18%', 'm31.png', '2024-04-30 12:11:56'),
(15, 'electronic', 'i phone x', 'Buy iPhone X online at best price with offers in India. iPhone X (Space Grey, 64GB) features and specifications include 5.8 inch Super Retina HD Display', 'Also known as Apple iPhone 10, Apple iPhone Ten\r\nVersions:\r\nA1865 (USA, Hong Kong, Australia, New Zealand, China)\r\nA1901 (EMEA, UAE, LATAM, Canada, USA - AT&T/T-Mobile, Singapore)\r\nA1902 (Japan), A1903 (Unknown market)\r\n\r\nNETWORK	Technology	\r\nGSM / HSPA / LTE\r\nLAUNCH	Announced	2017, September 12\r\nStatus	Available. Released 2017, November 03\r\nBODY	Dimensions	143.6 x 70.9 x 7.7 mm (5.65 x 2.79 x 0.30 in)\r\nWeight	174 g (6.14 oz)\r\nBuild	Glass front (Corning-made glass), glass back (Corning-made glass), stainless steel frame\r\nSIM	Nano-SIM\r\n 	IP67 dust/water resistant (up to 1m for 30 min)\r\nApple Pay (Visa, MasterCard, AMEX certified)\r\nDISPLAY	Type	Super Retina OLED, HDR10, Dolby Vision, 625 nits (HBM)\r\nSize	5.8 inches, 84.4 cm2 (~82.9% screen-to-body ratio)\r\nResolution	1125 x 2436 pixels, 19.5:9 ratio (~458 ppi density)\r\nProtection	Scratch-resistant glass\r\n 	3D Touch\r\nPLATFORM	OS	iOS 11.1.1, up to iOS 16.7.5\r\nChipset	Apple A11 Bionic (10 nm)\r\nCPU	Hexa-core 2.39 GHz (2x Monsoon + 4x Mistral)\r\nGPU	Apple GPU (three-core graphics)\r\nMEMORY	Card slot	No\r\nInternal	64GB 3GB RAM, 256GB 3GB RAM\r\n 	NVMe\r\nMAIN CAMERA	Dual	12 MP, f/1.8, 28mm (wide), 1/3.0\", 1.22µm, dual pixel PDAF, OIS\r\n12 MP, f/2.4, 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS, 2x optical zoom\r\nFeatures	Quad-LED dual-tone flash, HDR (photo/panorama), panorama, HDR\r\nVideo	4K@24/30/60fps, 1080p@30/60/120/240fps\r\nSELFIE CAMERA	Single	7 MP, f/2.2, 32mm (standard)\r\nSL 3D, (depth/biometrics sensor)\r\nFeatures	HDR\r\nVideo	1080p@30fps\r\nSOUND	Loudspeaker	Yes, with stereo speakers\r\n3.5mm jack	No\r\nCOMMS	WLAN	Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot\r\nBluetooth	5.0, A2DP, LE\r\nPositioning	GPS, GLONASS, GALILEO, QZSS\r\nNFC	Yes\r\nRadio	No\r\nUSB	Lightning, USB 2.0\r\nFEATURES	Sensors	Face ID, accelerometer, gyro, proximity, compass, barometer\r\nBATTERY	Type	Li-Ion 2716 mAh, non-removable (10.35 Wh)\r\nCharging	15W wired, PD2.0, 50% in 30 min (advertised)\r\nWireless (Qi)\r\nTalk time	Up to 21 h (3G)\r\nMISC	Colors	Space Gray, Silver\r\nModels	A1865, A1901, A1902, A1903, iPhone10,3, iPhone10,6\r\nSAR	1.09 W/kg (head)     1.17 W/kg (body)    \r\nPrice	$ 155.00 / £ 133.00 / € 196.50\r\nTESTS	Performance	AnTuTu: 233100 (v7)\r\nGeekBench: 10215 (v4.4)\r\nGFXBench: 28fps (ES 3.1 onscreen)\r\nDisplay	Contrast ratio: Infinity (nominal), 5.013 (sunlight)\r\nCamera	Photo / Video\r\nLoudspeaker	Voice 68dB / Noise 74dB / Ring 76dB\r\nAudio quality	Noise -93.7dB / Crosstalk -82.8dB\r\nBattery (old)	\r\nEndurance rating 74h', '38000rs', '36000rs', '50%', 'iphone-x.png', '2024-04-30 12:19:07'),
(17, 'electronic', 'realme9', 'Realme', 'Buy realme 9 online at best price with offers in India. realme 9 (Sunburst Gold, 128 GB) features and specifications include 6 GB RAM, 128 GB ROM, ...', '14000rs', '13999rs', '18%', 'realme.jpg', '2024-05-02 06:44:10'),
(19, 'electronic', 'samsung s23 ultra', 'The display can achieve peak brightness of up to 1750 nits, improving the contrast between dark', 'Color: Green ; Storage: 256 GB ; SAMSUNG Galaxy S23 Ultra 5G (Green, 256 GB) (12 GB RAM) ; Big Saving Deal. 26% off. 1,49,999. ₹1,09,999 ; Free delivery by. 7th ...', '100000rs', '88000rs', '18%', 'images.jpeg', '2024-05-04 06:23:05'),
(21, 'cloths', 'men jeans navy blue', 'Upgrade your wardrobe with our stylish collection of men\'s denim jeans, crafted to perfection for the modern man. Made from premium quality cotton fabric, these jeans offer both style and comfort. Whether you\'re heading out for a casual day or a night out with friends, these jeans are versatile enough to suit any occasion. With a variety of fits and washes available, you\'re sure to find the perfect pair to elevate your look. From slim fit to relaxed fit, our denim jeans are designed to flatter every body type. Pair them with a casual tee or a button-down shirt for a laid-back yet polished ensemble.', 'Date First Available ‏ : ‎ 22 April 2024\r\nManufacturer ‏ : ‎ Yaksh Apparels\r\nASIN ‏ : ‎ B0D2DLJB5Q\r\nItem model number ‏ : ‎ New-JENS_2-28-B\r\nCountry of Origin ‏ : ‎ India\r\nDepartment ‏ : ‎ Men\r\nManufacturer ‏ : ‎ Yaksh Apparels, Yaksh Apparels\r\nPacker ‏ : ‎ Yaksh Apparels\r\nNet Quantity ‏ : ‎ 1.00 count\r\nGeneric Name ‏ : ‎ Jeans', '777', '666', '50%', 'jeans.jpg', '2024-05-04 08:03:06'),
(22, 'cloths', 'indian traditional saree', 'Walk In Style With Clothes That Fit Your Personality and Size. Place Your Order! Explore Ethnic Wear Like Blouses, Sarees, Kurtis,', 'Walk In Style With Clothes That Fit Your Personality and Size. Place Your Order! Explore Ethnic Wear Like Blouses, Sarees, Kurtis,', '3000rs', '2000rs', '12%', 'ereal saree.jpg', '2024-05-04 08:04:12'),
(23, 'cloths', 'indian weeding saree', 'Wedding Lehengas', 'Colour: Black\r\nProduct details\r\nMaterial compositionGeorgette\r\nWeave typePrinted\r\nLength6.30 Mtr\r\nOccasion typeFestival, Party, Evening, Work, Ceremony\r\nPatternFloral\r\nIncluded componentsWith Blouse Piece\r\nCountry of OriginIndia', '999rs', '666rs', '13%', 'real2.jpg', '2024-05-04 08:05:44'),
(24, 'cloths', 'indian traditional  wear', 'INDO ERA Women\'s Printed Pure Cotton', 'Product Dimensions ‏ : ‎ 46.7 x 39.1 x 6.1 cm; 300 g\r\nDate First Available ‏ : ‎ 21 November 2022\r\nManufacturer ‏ : ‎ High Street Essentials Pvt. Ltd. ,C-11,Sector-7,Noida,Uttar Pradesh-201301\r\nASIN ‏ : ‎ B0BKQ1KTZQ\r\nItem model number ‏ : ‎ ITN04191\r\nCountry of Origin ‏ : ‎ India\r\nDepartment ‏ : ‎ Women\r\nManufacturer ‏ : ‎ High Street Essentials Pvt. Ltd. ,C-11,Sector-7,Noida,Uttar Pradesh-201301, High Street Essentials Pvt. Ltd. ,C-11,Sector-7,Noida,Uttar Pradesh-201301\r\nPacker ‏ : ‎ High Street Essentials Pvt. Ltd. ,C-11,Sector-7,Noida,Uttar Pradesh-201301\r\nItem Weight ‏ : ‎ 300 g\r\nItem Dimensions LxWxH ‏ : ‎ 46.7 x 39.1 x 6.1 Centimeters\r\nIncluded Components ‏ : ‎ Kurta\r\nGeneric Name ‏ : ‎ Kurta', '999rs', '666rs', '13%', '3.jpg', '2024-05-04 08:11:39'),
(26, 'books', 'The', 'this', 'This remarkable book by Dr. Joseph Murphy, one of the pioneering voices of affirmative thinking, will unlock for you the truly staggering powers of your subconscious mind. Combining time-honored spiritual wisdom with cutting edge scientific research, Dr. Murphy explains how the subconscious mind influences every single thing that you do and how, by understanding it and learning to control its incredible force, you can improve the quality of your daily life.Everything, from the promotion that you wanted and the raise you think you deserve, to overcoming phobias and bad habits and strengthening interpersonal relationships, the Power of Your Subconscious Mind will open a world of happiness, success, prosperity and peace for you. It will change your life and your world by changing your beliefs.', '545rs', '400rs', '12%', 'bookei.jpg', '2024-05-04 08:27:28'),
(27, 'books', 'liver diese', 'Dr Saumin Shah (SACHVO TAMARA LIVER NE)', 'Compared to other diseases, liver diseases are much less known. This is also a reason why the liver does not show symptoms until it is 90% damaged. Hence if the inflammation in the liver is in the initial stage we do not know and ignore it and when it is known it is too late. Answers to many questions like how to do liver transplant after liver failure and what care to take are given in this book.', '677rs', '355rs', '13%', 'book2.jpg', '2024-05-04 08:40:27'),
(28, 'books', 'The Complete Book of Yoga:', 'The Complete Book of Yoga: Karma Yoga, Bhakti Yoga, Raja Yoga, Jnana Yoga [Paperback] Swami Vivekananda', '“All knowledge that the world has ever received comes from the mind...” in the quest for understanding one’s own mind, body, and soul, and to attain liberation, each man seeks spirituality as per his own means and understanding. Yoga, with its origin dating back to ancient India, has always been considered a pathway of achieving moksha. This edition combines the four paths of yoga as expounded by Swami Vivekananda in the nineteenth century. They include the three yogas mentioned in the Bhagat gita—karma yoga, bhakti yoga, and jnāna yoga—and Raja yoga, which is based on Maharshi Patanjali’s yoga sutras, and together they speak to the active, the emotional, the mystic, and the philosophical inside us. Complete with timeless universal wisdom, and not restricted to as an as and physical exercises, The yogic practices explained by Vivekananda become a way of life and hence lead to the realisation of the absolute.', '299rs', '150rs', '13%', 'book3.jpg', '2024-05-04 08:43:49'),
(29, 'books', 'The Power of Your ', 'The Verge called it a \"beautiful, powerful, and incredibly capable device\", praising the new design reminiscent of the iPhone 5, the speed of the A14 Bionic processor, its 5G capabilities, addition of the OLED display like on the high end iPhones,', '\"\"\"A wonderful way to begin getting to know the two functions of your mind is to think of it as a garden. You are the gardener. You are planting seeds of thought in your subconscious mind all day long. Much of the time you are not even aware of doing so, because the seeds are based on your habitual thinking. As you sow in your subconscious mind, so shall you reap in your body and environment.”', '170rs', '140rs', '18%', 'the-powernew.jpg', '2024-05-04 08:47:19'),
(30, 'sports', 'bag sg', 'sg bag for cricket', 'Size	L\r\nColour	NVY/TEAL\r\nMaterial	Polyester\r\nSport	Cricket\r\nBrand	SG\r\nAbout this item\r\nAn ideal player trolley kit which accomodate all necessary items.\r\nWater resistant & highly durable premium fabric\r\nSpecially customized SG durable zips and runners\r\n2 outiside bats storage sleeves\r\nBigger C shape opening for easy access', '4000rs', '3200rs', '18%', 'sport1.jpg', '2024-05-04 09:41:58'),
(32, 'sports', 'Jaspo', 'Rollno', '1. Comfortable Rubber Grip: This cricket bat is specially designed for tennis ball and wind ball. Not recommendation for leather or any hard coated ball. High-quality material is used which make you feel comfort while batting. For beginner adults can try to use this product and began interest in cricket sport.\r\n2: Safe for All Ages: Designed with safety in mind, this bat is suitable for players of all ages, making it perfect for family fun and friendly competitions.\r\n3: Great for Beginners: Ideal for beginners and those new to bat sports, this plastic bat helps build confidence and skill while having fun.\r\n4: Lightweight and Easy to Handle: The lightweight design of our plastic bat makes it easy to swing, allowing for better control and accuracy during gameplay.\r\n5: Indoor and Outdoor Fun: Use it in the backyard, at the park, or even indoors for rainy-day entertainment – its suitable for various play environments.\r\n6: Easy to Clean: Cleanup is a breeze with our plastic bat – simply wipe it down with a damp cloth to keep it looking like new.\r\n7: Measurement: Measurement of bat around 34” inch height, width 4.5” inch, thickness 2.2” inch.', '999rs', '666rs', '12%', 'bat.jpg', '2024-05-04 09:48:41'),
(33, 'sports', 'Leader Sportz Cricket Bat', 'Leader Sportz Cricket Bat', 'Leader Sportz Cricket Bat, Plastic Bat, Birthday Gift for Boys, Tennis Bat, Powerstrike Bat Cricket for Adults, Heavy Plastic Cricket Bats with Anti Slip Rubber Grip Full Size Bat for Cricket (Black)', '999rs', '666rs', '13%', 's3.jpg', '2024-05-04 09:59:56'),
(35, 'sports', 'Boldfit Cricket ', 'Boldfit Cricket Tennis Ball for Cricket', 'Boldfit Cricket Tennis Ball for Cricket Tournament, Street Match Cricket Ball Tennis for Lawn Cricket Soft Tennis Balls', '299rs', '150rs', '18%', 's55_.webp', '2024-05-04 10:03:00'),
(36, 'cloths', 'FABNEX kurta set for women', 'FABNEX kurta set for women', 'FABNEX kurta set for women | women embroidered kurta set | Women Kurta Sets Kurtis | Women Kurta Pant Set (K-34-38)', '599rs', '450rs', '13%', 'new.jpg', '2024-05-04 10:05:14'),
(38, 'cloths', 'Rayon Anarkali Kurta', 'Rayon Anarkali Kurta', 'Nermosa Women\'s Rayon Anarkali Kurta Pant and Dupatta Ethnic Set (Blue) - Riya_NM', '699rs', '666rs', '8%', '41f7Qo00+pL.jpg', '2024-05-04 10:14:47'),
(39, 'cloths', 'woman jeans', 'Levi\'s Women\'s 711 Skinny Fit Mid Rise Jeans', 'Product details\r\nMaterial typeCotton\r\nLengthStandard Length\r\nStyleBoyfriend\r\nClosure typeButton\r\nOccasion typeCasual\r\nCare instructionsMachine Wash\r\nCountry of OriginBangladesh', '999rs', '666rs', '8%', 'w.jpg', '2024-05-04 10:33:56'),
(40, 'cloths', 'girl top', 'Sky Heights Women Green Floral Top', 'Product details\r\nMaterial compositionGeorgette\r\nPatternAll over print\r\nFit typeRelaxed Fit\r\nSleeve typeBell Sleeve\r\nStyleWestern\r\nOccasion typeNew Year, Valentine\'s Day, Women\'s Day\r\nAbout this item\r\nFabric: Georgette\r\nSuitable For: Women\r\nFit Type: Relaxed Fit\r\nCare Instruction: Machine Wash', '999rs', '666rs', '8%', 't.jpg', '2024-05-05 06:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `loginuser`
--

CREATE TABLE `loginuser` (
  `id` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginuser`
--

INSERT INTO `loginuser` (`id`, `email`, `password`, `role`) VALUES
(1, 'rahul@gmail.com', 'rahul', 1),
(2, 'ugrasen@gmail.com', 'ugrasen', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `password`, `address`, `city`) VALUES
(33, 'jotav rs', 'jotav@gmail.com', 2147483647, 'jotav', 'pantnagar jha', 'rio d gewnerio'),
(34, 'giuh', 'giuh@gmail.com', 345678765, '1234', 'pantnagar jha', 'rio'),
(35, 'guddu', 'guddu@gmail.com', 9876543, 'guddu', 'golgate', 'sao paulo'),
(36, 'bops', 'bops@gmail.com', 1234567, 'bop', 'pantnagar jha', 'rio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginuser`
--
ALTER TABLE `loginuser`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `loginuser`
--
ALTER TABLE `loginuser`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2023 at 05:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourstravels`
--

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `description`) VALUES
(9, 'chitwan national park', 'Chitwan National Park is a renowned wildlife sanctuary located in the southern part of Nepal. Established in 1973, it covers an area of approximately 952 square kilometers (367 square miles) and is known for its rich biodiversity. The park is famous for its population of endangered species such as Bengal tigers, one-horned rhinoceros, and gharials (a type of crocodile). Visitors to Chitwan National Park can enjoy safaris, jungle walks, and bird-watching, making it a popular destination for ecotourism in Nepal.\r\n'),
(10, 'Mt.Everest(8848.86)', 'The Everest region in Nepal is more than just climbing and trekking, it is a life-changing experience and some see it as a journey close to achieving Nirvana. Located in the northeastern province of Nepal, this region is in a world of its own with vast glaciers, icefalls, the highest mountains, deep valleys, precarious settlements, and hardy people challenging the harshest conditions thrown at them by nature in the thin air of high altitude. \r\n'),
(11, 'Pashupatinath Temple', 'Pashupatinath Temple is one of the most sacred Hindu temples in Nepal. It is located on the banks of the Bagmati River in Kathmandu. The temple is dedicated to Lord Pashupatinath, who is considered to be a manifestation of Lord Shiva. The temple complex is a UNESCO World Heritage Site and one of Nepal’s most popular tourist destinations.\r\n'),
(12, 'Tilicho Lake', 'Tilicho Lake is located at an altitude of 4919m in the Manang district. This is one of the world’s highest lakes situated at the highest altitude. This Lake is formed by the glacial melt of the northern slope of Annapurna Mountain and Thorung peak. This is one of the holy Lakes of Hindu people so Hindu people around the world gather in Tilicho lake to take holy baths'),
(13, 'Dhorpatan Hunting Reserve', 'Dhorpatan Hunting Reserve, the only hunting reserve of Nepal.The hunting reserve is a sanctuary of some rare and endangered species of mammals like Red Panda and Musk Deer. The hunting reserve is an array of diverse bird species and a center for wildlife and bird enthusiasts, hunters, and researchers. Composed of alpine, sub-alpine, and high temperate vegetation, Dhorpatan Hunting Reserve is home to plants like fir, pine, birch, rhododendron – the national flower of Nepal, hemlock, oak, juniper, and spruce.\r\n'),
(14, 'Lumbini', 'Siddhartha Gautama, the Lord Buddha, was born in 623 B.C. in the famous gardens of Lumbini, which soon became a place of pilgrimage. Among the pilgrims was the Indian emperor Ashoka, who erected one of his commemorative pillars there. The site is now being developed as a Buddhist pilgrimage centre, where the archaeological remains associated with the birth of the Lord Buddha form a central feature'),
(15, 'Tindhare Jharana', 'Tindhare Jharana, also known as Bahubali Jharana, is a waterfall located in Roshi Rural Municipality-2 in Kavre district, Nepal.The waterfall is a popular destination for bike riders and hiking enthusiasts. The total ride from Kathmandu to Kafal Danda will take 3.5 hours, and from there, we need to hike approximately 45 minutes to reach the waterfall. The name Tindhare comes from the hill of Mahabharat Range'),
(16, 'Sisneri ', 'Sisneri is a natural swimming pool located in the Makwanpur district of Nepal, about 33 km from Kathmandu. The pool is formed by a stream flowing down from the hills and is surrounded by lush greenery and scenic views, making it an ideal place to relax and enjoy nature.It is one of the best local destinations to enjoy in the natural water in this world of swimming pools.\r\n'),
(17, 'Langtang trek ', 'The Langtang trek is one of the shorter hiking routes in Nepal. It offers fantastic scenery from the jungle with banana trees and monkeys at lower altitudes to glaciers and ice peaks at higher elevations. Short doesn’t mean easy the route is quite challenging from the beginning with many long and steep ascents which is a typical thing for trekking in Nepal.\r\n'),
(18, 'Jitgadhi fort', 'The Jitgadhi Killa  in Butwal where the Nepali forces had beaten Britains East Indian Company army is being developed as a tourist spot with the biggest national Nepali flag and installation of Colonel Ujir Singhs lifesize statue.It is one of the must visit locations for people around Butwal.\r\n'),
(19, ' Supa Deurali ', 'Supa Deurail Temple (Supa Deural Mandir) is a Hindu temple dedicated to devi which is situated in the town of Arghakhanchi district, Sandhikharka municipality in Lumbini Pradesh,Nepal.It is one of the famous pilgrimage site of western Nepal surrounded by magnificent hills.\r\n'),
(20, 'Kakrebihar', 'Kakrebihar is a Hindu-Buddhist temple which is situated over a small mountain which lies in Latikoili VDC in Surkhet district of Nepal. The temple is made by solid stone with attractive bronze Idols of Hindu gods and goddess along Buddha and believed to be built on 12th centuary. The place is also referred to as ‘Buddha Bihar’ which means, Buddha’s place or area, and is famous for its own natural beauty.\r\n'),
(21, 'Ilam chiyabagan', 'Ilam is a hill district in Nepal. The tea gardens are the hill station’s most well-known attraction, located in one of Nepal’s most populous districts. Visitors are drawn to the region because of its natural beauty and wildlife. Ilam is a well-known tourist spot in Nepal’s eastern region.It is one of the best places to visit for the people of eastern for the refreshment.'),
(22, 'Maulakalika Temple', 'Maula Kalika temple is a famous and religious temple dedicated to Hindu goddess Kalika situated at the height of 561 meters above the sea level and located in Gaidakot town near Narayangarh city of Nawalparasi district of Nepal.It is a popular temple to visit in the \r\nWestern side of Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `package_image`
--

CREATE TABLE `package_image` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_image`
--

INSERT INTO `package_image` (`id`, `package_id`, `image_path`) VALUES
(9, 9, 'uploads/chitwan.webp'),
(10, 10, 'uploads/mteverest.webp'),
(11, 11, 'uploads/pashupati.webp'),
(12, 12, 'uploads/tilicho.webp'),
(13, 13, 'uploads/dhorpatan.webp'),
(14, 14, 'uploads/lumbini.webp'),
(15, 15, 'uploads/tindare.webp'),
(16, 16, 'uploads/sisneri.webp'),
(17, 17, 'uploads/langtang.webp'),
(18, 18, 'uploads/Jitgadi.webp'),
(19, 19, 'uploads/supa deurali.webp'),
(20, 20, 'uploads/kankrebihar.jpg'),
(21, 21, 'uploads/illam.webp'),
(22, 22, 'uploads/maulakalika.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_image`
--
ALTER TABLE `package_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `package_image`
--
ALTER TABLE `package_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `package_image`
--
ALTER TABLE `package_image`
  ADD CONSTRAINT `package_image_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

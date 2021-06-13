-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 04:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-01`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(100) NOT NULL,
  `about_subtitle` varchar(200) NOT NULL,
  `about_details` text NOT NULL,
  `about_button` varchar(100) NOT NULL,
  `about_button_link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_title`, `about_subtitle`, `about_details`, `about_button`, `about_button_link`) VALUES
(1, 'Science 1981', 'Provide the best quality service and construct', '   Publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infance', 'Learn More', 'about.php');

-- --------------------------------------------------------

--
-- Table structure for table `about_feature`
--

CREATE TABLE `about_feature` (
  `feat_id` int(11) NOT NULL,
  `feat_title` varchar(100) NOT NULL,
  `feat_details` text NOT NULL,
  `feat_img` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_feature`
--

INSERT INTO `about_feature` (`feat_id`, `feat_title`, `feat_details`, `feat_img`) VALUES
(7, 'Top Rated', 'Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill uncover', 'feature-1604834273-204117.png'),
(8, 'Best Quality', 'Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill uncover', 'feature-1604834302-2068536.png'),
(9, 'Low Price', 'Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill uncove', 'feature-1604834318-6753846.png');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `ban_id` int(11) NOT NULL,
  `ban_title` varchar(200) NOT NULL,
  `ban_subtitle` varchar(250) NOT NULL,
  `ban_btnurl` varchar(200) NOT NULL,
  `ban_btntext` varchar(250) NOT NULL,
  `ban_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`ban_id`, `ban_title`, `ban_subtitle`, `ban_btnurl`, `ban_btntext`, `ban_img`) VALUES
(1, 'Abu Bokkor', 'FULL STACK WEB DEVELOPER', 'contact.php', 'READ-MORE', 'banner-1605797248-3946864.jpg'),
(2, 'Farhan', 'FULL STACK WEB DEVELOPER', 'contact.php', 'READ MORE', 'banner-1605797276-6375846.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_name` varchar(150) NOT NULL,
  `blog_details` text NOT NULL,
  `blog_creator_name` varchar(60) NOT NULL,
  `blog_date` varchar(15) NOT NULL,
  `blog_img` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_name`, `blog_details`, `blog_creator_name`, `blog_date`, `blog_img`) VALUES
(1, 'What are Groundworkers and what do they do?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam explicabo iusto suscipit dolore repellendus odit laborum, cupiditate unde nesciunt eveniet temporibus autem adipisci earum at error aspernatur neque minima doloribus?<br>\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis voluptate repellat quam exercitationem excepturi enim et blanditiis amet minima itaque, doloribus cumque labore. Asperiores nemo odio sed molestias harum laborum quia enim, delectus repellendus consequuntur unde magnam, ipsam possimus vero, quam dolore adipisci. Rerum, vitae!<br>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam explicabo iusto suscipit dolore repellendus odit laborum, cupiditate unde nesciunt eveniet temporibus autem adipisci earum at error aspernatur neque minima doloribus?<br>\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis voluptate repellat quam exercitationem excepturi enim et blanditiis amet minima itaque, doloribus cumque labore. Asperiores nemo odio sed molestias harum laborum quia enim, delectus repellendus consequuntur unde magnam, ipsam possimus vero, quam dolore adipisci. Rerum, vitae!<br>', 'Admin', '4 Aug 2019', 'feature-1605367595-7422114.jpg'),
(2, 'New design concept & idea', 'Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eveniet reprehenderit voluptas delectus reiciendis pariatur, totam id quae tempore fugiat tenetur asperiores saepe velit nisi voluptates molestiae quia fugit laboriosam quidem, distinctio dolor consequatur repellendus debitis natus magni. Totam atque provident nulla quasi voluptatum nostrum officia rerum pariatur maxime sit.<br>\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Iste iure eveniet minima commodi consequuntur veritatis, officiis quibusdam molestias, nemo dolorum veniam quisquam pariatur facilis repudiandae eaque quas assumenda enim, unde placeat dolores id voluptatibus amet.', 'Farhan', '3 July 2019', 'feature-1605370300-1727556.jpg'),
(3, 'Bigest construction design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eveniet reprehenderit voluptas delectus reiciendis pariatur, totam id quae tempore fugiat tenetur asperiores saepe velit nisi voluptates molestiae quia fugit laboriosam quidem, distinctio dolor consequatur repellendus debitis natus magni. Totam atque provident nulla quasi voluptatum nostrum officia rerum pariatur maxime sit.<br>\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Iste iure eveniet minima commodi consequuntur veritatis, officiis quibusdam molestias, nemo dolorum veniam quisquam pariatur facilis repudiandae eaque quas assumenda enim, unde placeat dolores id voluptatibus amet.<br>', 'ADmin', '19 Jan 2020', 'feature-1605370350-7572112.jpg'),
(4, 'Steel structure design concept', 'Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eveniet reprehenderit voluptas delectus reiciendis pariatur, totam id quae tempore fugiat tenetur asperiores saepe velit nisi voluptates molestiae quia fugit laboriosam quidem, distinctio dolor consequatur repellendus debitis natus magni. Totam atque provident nulla quasi voluptatum nostrum officia rerum pariatur maxime sit.<br>\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Iste iure eveniet minima commodi consequuntur veritatis, officiis quibusdam molestias, nemo dolorum veniam quisquam pariatur facilis repudiandae eaque quas assumenda enim, unde placeat dolores id voluptatibus amet.<br>', 'Abu Bokkor', '15 Feb 2020', 'feature-1605370411-3710626.jpg'),
(6, 'Industry Ministry to Hike', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe minus, illo error ratione eos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste iure eveniet minima commodi consequuntur veritatis, officiis quibusdam molestias, nemo dolorum veniam quisquam pariatur facilis repudiandae eaque quas assumenda enim, unde placeat dolores id voluptatibus amet.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eveniet reprehenderit voluptas delectus reiciendis pariatur, totam id quae tempore fugiat tenetur asperiores saepe velit nisi voluptates molestiae quia fugit laboriosam quidem, distinctio dolor consequatur repellendus debitis natus magni. Totam atque provident nulla quasi voluptatum nostrum officia rerum pariatur maxime sit.', 'Jhon Deo', '6 Nov 2019', 'feature-1605373563-7519927.jpg'),
(7, 'Worker Safety: India Appeals', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eveniet reprehenderit voluptas delectus reiciendis pariatur, totam id quae tempore fugiat tenetur asperiores saepe velit nisi voluptates molestiae quia fugit laboriosam quidem, distinctio dolor consequatur repellendus debitis natus magni. Totam atque provident nulla quasi voluptatum nostrum officia rerum pariatur maxime sit.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ad totam est optio mollitia dolores rem ducimus. Odio assumenda distinctio adipisci! Consequuntur excepturi eos nulla.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis voluptate repellat quam exercitationem excepturi enim et blanditiis amet minima itaque, doloribus cumque labore. Asperiores nemo odio sed molestias harum laborum quia enim, delectus repellendus consequuntur unde magnam, ipsam possimus vero, quam dolore adipisci. Rerum, vitae!', 'Kamrul', '29 Mar 2020', 'feature-1605373649-9398514.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `brand_img` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_img`) VALUES
(1, 'brand', 'Brand-1605377719-4219628.png'),
(2, 'brand2', 'Brand-1605377738-2039245.png'),
(3, 'brand3', 'Brand-1605377746-1953722.png'),
(4, 'brand4', 'Brand-1605377753-603762.png'),
(5, 'brand5', 'Brand-1605377762-6524957.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `con_id` int(11) NOT NULL,
  `con_name` varchar(25) NOT NULL,
  `con_email` varchar(40) NOT NULL,
  `con_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`con_id`, `con_name`, `con_email`, `con_message`) VALUES
(10, 'farhan', 'farhan@gmail.com', 'Here is message'),
(11, 'abu bokkor', 'bokkor@gmail.com', 'here is bokkor'),
(12, 'Nazmul', 'nazmul@gmail.com', 'here is dumy text.');

-- --------------------------------------------------------

--
-- Table structure for table `count_down`
--

CREATE TABLE `count_down` (
  `count_id` int(11) NOT NULL,
  `count_1st_name` varchar(10) NOT NULL,
  `count_2nd_name` varchar(10) NOT NULL,
  `count_3rd_name` varchar(10) NOT NULL,
  `count_4th_name` varchar(10) NOT NULL,
  `count_1st_value` varchar(20) NOT NULL,
  `count_2nd_value` varchar(20) NOT NULL,
  `count_3rd_value` varchar(20) NOT NULL,
  `count_4th_value` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `count_down`
--

INSERT INTO `count_down` (`count_id`, `count_1st_name`, `count_2nd_name`, `count_3rd_name`, `count_4th_name`, `count_1st_value`, `count_2nd_value`, `count_3rd_value`, `count_4th_value`) VALUES
(1, 'Project', 'Client', 'Success', 'Award', '517', '350', '485', '322');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_details` text NOT NULL,
  `p_client` varchar(50) NOT NULL,
  `p_location` varchar(200) NOT NULL,
  `p_area` varchar(200) NOT NULL,
  `p_year` varchar(15) NOT NULL,
  `p_buject` varchar(30) NOT NULL,
  `p_architect` varchar(100) NOT NULL,
  `p_sector` varchar(100) NOT NULL,
  `p_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`p_id`, `p_name`, `p_details`, `p_client`, `p_location`, `p_area`, `p_year`, `p_buject`, `p_architect`, `p_sector`, `p_img`) VALUES
(1, 'Mountain Tunnel', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem veritatis quo et ullam, ducimus itaque earum dolorem? Consectetur, et, aut. A, corporis officia eius dicta explicabo saepe nesciunt, mollitia minima, atque maiores optio cum. Atque amet unde impedit voluptate cumque distinctio minima, aspernatur nemo! Expedita in, numquam blanditiis ullam rem!<br><br>\r\n\r\n<b>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</b> Modi cum fugit officia dolores eligendi, rem. Quibusdam quasi impedit perspiciatis iure maiores, eaque numquam doloremque, quo nam soluta itaque obcaecati tempore!.<br><br>\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ex, nam adipisci dolores laborum earum. Unde cum, ut nostrum nihil alias, laudantium molestiae, vitae quidem dolorem officiis ipsum. Aliquid nemo consequuntur cupiditate delectus sapiente doloribus dolorem, at suscipit, non laudantium mollitia magnam repellat atque quia! Aut, veniam, nam. Ex porro optio facilis nostrum, qui ipsa?', 'RRS Company', 'San Francisco', '550,000 sf', '2020', '$235000000', 'Scott & Austin', 'Tunnel, Transport', 'Project-1605187731-71670.jpg'),
(6, 'Western Shopping Mall', 'Farhan', '', '', '', '', '', '', '', 'Project-1605188199-34603.jpg'),
(7, 'City Flyover', 'Farhan2', '', '', '', '', '', '', '', 'Project-1605188227-21571.jpg'),
(8, 'Highway Carpeting', 'Farhan3', '', '', '', '', '', '', '', 'Project-1605188259-66882.jpg'),
(9, 'House Infrustructure Making', 'Farhan4', '', '', '', '', '', '', '', 'Project-1605188282-72060.jpg'),
(10, 'Wooden House', 'Farhan5', '', '', '', '', '', '', '', 'Project-1605188324-78210.jpg'),
(11, 'Road Repairing', 'Farhan6', '', '', '', '', '', '', '', 'Project-1605188681-21445.jpg'),
(12, 'Apartment Building', 'Farhan7', '', '', '', '', '', '', '', 'Project-1605188718-54572.jpg'),
(13, 'Bridge Construction', 'Farhan8', '', '', '', '', '', '', '', 'Project-1605188795-6067.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project_header`
--

CREATE TABLE `project_header` (
  `pro_id` int(11) NOT NULL,
  `pro_title` varchar(50) NOT NULL,
  `pro_subtitle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_header`
--

INSERT INTO `project_header` (`pro_id`, `pro_title`, `pro_subtitle`) VALUES
(1, 'Our Projects', 'Here you find our latest projects that we did and doing');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ser_id` int(11) NOT NULL,
  `ser_title` varchar(100) NOT NULL,
  `ser_subtitle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ser_id`, `ser_title`, `ser_subtitle`) VALUES
(2, 'Our Services.', 'Unique and Qulaity Service Makes Client Happy');

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `serd_id` int(11) NOT NULL,
  `serd_name` varchar(100) NOT NULL,
  `serd_details` text NOT NULL,
  `serd_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`serd_id`, `serd_name`, `serd_details`, `serd_img`) VALUES
(2, 'Construction', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sunt perspiciatis error id ipsa atque unde quis dolore nobis eum aperiam enim blanditiis pariatur inventore eius commodi consectetur ut. Totam, assumenda! Laboriosam possimus, corporis dicta!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aliquid quod, officiis unde nostrum itaque! Adipisci dolorum, ab dolor, exercitationem praesentium dolorem quo voluptatum itaque dignissimos, sit esse cupiditate. Doloremque rerum similique a nobis placeat in illum, quo quaerat, ut repellat, fuga itaque? Nihil mollitia nisi, nam, accusantium nemo consequun', 'Service-1604843175-3429319.jpg'),
(3, 'Renovation', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sunt perspiciatis error id ipsa atque unde quis dolore nobis eum aperiam enim blanditiis pariatur inventore eius commodi consectetur ut. Totam, assumenda! Laboriosam possimus, corporis dicta!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aliquid quod, officiis unde nostrum itaque! Adipisci dolorum, ab dolor, exercitationem praesentium dolorem quo voluptatum itaque dignissimos, sit esse cupiditate. Doloremque rerum similique a nobis placeat in illum, quo quaerat, ut repellat, fuga itaque? Nihil mollitia nisi, nam, accusantium nemo consequuntur reiciendis autem dicta consequatur earum beatae dolor distinctio, debitis repudiandae?', 'Service-1604843205-6452254.jpg'),
(4, 'Architecture', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sunt perspiciatis error id ipsa atque unde quis dolore nobis eum aperiam enim blanditiis pariatur inventore eius commodi consectetur ut. Totam, assumenda! Laboriosam possimus, corporis dicta!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aliquid quod, officiis unde nostrum itaque! Adipisci dolorum, ab dolor, exercitationem praesentium dolorem quo voluptatum itaque dignissimos, sit esse cupiditate. Doloremque rerum similique a nobis placeat in illum, quo quaerat, ut repellat, fuga itaque? Nihil mollitia nisi, nam, accusantium nemo consequuntur reiciendis autem dicta consequatur earum beatae dolor distinctio, debitis repudiandae?', 'Service-1604843227-3974831.jpg'),
(5, 'Concrete Supply', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sunt perspiciatis error id ipsa atque unde quis dolore nobis eum aperiam enim blanditiis pariatur inventore eius commodi consectetur ut. Totam, assumenda! Laboriosam possimus, corporis dicta!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aliquid quod, officiis unde nostrum itaque! Adipisci dolorum, ab dolor, exercitationem praesentium dolorem quo voluptatum itaque dignissimos, sit esse cupiditate. Doloremque rerum similique a nobis placeat in illum, quo quaerat, ut repellat, fuga itaque? Nihil mollitia nisi, nam, accusantium nemo consequuntur reiciendis autem dicta consequatur earum beatae dolor distinctio, debitis repudiandae?', 'Service-1604843250-9136462.jpg'),
(6, 'Laminate Flooring', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sunt perspiciatis error id ipsa atque unde quis dolore nobis eum aperiam enim blanditiis pariatur inventore eius commodi consectetur ut. Totam, assumenda! Laboriosam possimus, corporis dicta!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aliquid quod, officiis unde nostrum itaque! Adipisci dolorum, ab dolor, exercitationem praesentium dolorem quo voluptatum itaque dignissimos, sit esse cupiditate. Doloremque rerum similique a nobis placeat in illum, quo quaerat, ut repellat, fuga itaque? Nihil mollitia nisi, nam, accusantium nemo consequuntur reiciendis autem dicta consequatur earum beatae dolor distinctio, debitis repudiandae?', 'Service-1604843284-7926975.jpg'),
(7, 'Project Planning', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, sunt perspiciatis error id ipsa atque unde quis dolore nobis eum aperiam enim blanditiis pariatur inventore eius commodi consectetur ut. Totam, assumenda! Laboriosam possimus, corporis dicta!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aliquid quod, officiis unde nostrum itaque! Adipisci dolorum, ab dolor, exercitationem praesentium dolorem quo voluptatum itaque dignissimos, sit esse cupiditate. Doloremque rerum similique a nobis placeat in illum, quo quaerat, ut repellat, fuga itaque? Nihil mollitia nisi, nam, accusantium nemo consequuntur reiciendis autem dicta consequatur earum beatae dolor distinctio, debitis repudiandae?', 'Service-1604843308-1404291.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `sub_id` int(11) NOT NULL,
  `sub_email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `team_member`
--

CREATE TABLE `team_member` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `team_title` varchar(100) NOT NULL,
  `team_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_member`
--

INSERT INTO `team_member` (`team_id`, `team_name`, `team_title`, `team_img`) VALUES
(1, 'Franky Moina', 'Chief Electrician', 'Team-Member-1605242009-1784529.jpg'),
(2, 'Navira Pareyo.', 'Chief Architect', 'Team-Member-1605281039-2060708.jpg'),
(3, 'Tandur Belali', 'Engineer', 'Team-Member-1605242598-477659.jpg'),
(4, 'John Doe', 'Site Engineer', 'Team-Member-1605242634-4881832.jpg'),
(5, 'ABU BOKKOR.', 'Project Maneger', 'Team-Member-1605243452-1827846.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `tes_id` int(11) NOT NULL,
  `tes_name` varchar(50) NOT NULL,
  `tes_designation` varchar(100) NOT NULL,
  `tes_details` text NOT NULL,
  `tes_title` varchar(200) NOT NULL,
  `tes_subtitle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`tes_id`, `tes_name`, `tes_designation`, `tes_details`, `tes_title`, `tes_subtitle`) VALUES
(1, 'Nicolus Vengelious', 'CEO, Octafact Group', ' Publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in infance ', 'Testimonials', 'What client’s say'),
(2, 'John Doe', 'CTO, HB Group', ' Publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in infance ', '', ''),
(3, 'Jonathon Doe', 'CIO, Oct Group', 'Publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in infance', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_phone` varchar(18) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_username` varchar(15) NOT NULL,
  `user_pass` varchar(40) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_img` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_username`, `user_pass`, `role_id`, `user_img`) VALUES
(1, 'ABU BOKKOR FARHAN', '01868362878', 'farhanbokkor@gmail.com', 'ab_farhan', 'e10adc3949ba59abbe56e057f20f883e', 1, 'user-1603555336-4697789.jpg'),
(3, 'Nazmul Huda', '01623434311', 'nazmulhuda@gmail.com', 'nazmul', 'e10adc3949ba59abbe56e057f20f883e', 2, 'user-1603558554-1495800.jpg'),
(4, 'Farhan ', '01756815964E', 'farhan@gmail.com', 'farhan', 'e10adc3949ba59abbe56e057f20f883e', 4, 'user-1603559003-1391930.jpg'),
(5, 'abu bokkor farhan', '0125748645564', 'example@gmail.com', 'example', 'e10adc3949ba59abbe56e057f20f883e', 5, ''),
(6, 'example', '012354789985', 'example@gmail.com', 'example', 'e10adc3949ba59abbe56e057f20f883e', 5, ''),
(7, 'example 3', '204820748554', 'example@gmail.com', 'example3', '$2y$12$$2y$12$wcppsn4m99P3ffuXVyLIOuCqLA', 5, ''),
(8, 'example 4', '21748452205641', 'example4@gmail.com', 'example4', 'e10adc3949ba59abbe56e057f20f883e', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`) VALUES
(2, 'Admin'),
(3, 'Author'),
(4, 'Editor'),
(5, 'Subscriber'),
(1, 'Super Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `about_feature`
--
ALTER TABLE `about_feature`
  ADD PRIMARY KEY (`feat_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `count_down`
--
ALTER TABLE `count_down`
  ADD PRIMARY KEY (`count_id`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `project_header`
--
ALTER TABLE `project_header`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ser_id`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`serd_id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `team_member`
--
ALTER TABLE `team_member`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`tes_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_feature`
--
ALTER TABLE `about_feature`
  MODIFY `feat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `ban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `count_down`
--
ALTER TABLE `count_down`
  MODIFY `count_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `project_header`
--
ALTER TABLE `project_header`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `serd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_member`
--
ALTER TABLE `team_member`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `tes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 10:11 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srb`
--
CREATE DATABASE IF NOT EXISTS `srb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `srb`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `comment_string` varchar(500) NOT NULL,
  `time` int(11) DEFAULT NULL,
  `comment_rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comment_likes`
--

CREATE TABLE `comment_likes` (
  `comment_likes_id` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL,
  `tag_string` varchar(120) NOT NULL,
  `tag_metaphone` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tags_videos`
--

CREATE TABLE `tags_videos` (
  `tag_video_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `youtube_id` varchar(50) NOT NULL,
  `start_lat` double NOT NULL,
  `start_long` double NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `geo_data` longtext NOT NULL,
  `video_rating` int(11) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `length` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `user_id`, `youtube_id`, `start_lat`, `start_long`, `title`, `description`, `geo_data`, `video_rating`, `date_posted`, `length`, `category`) VALUES
(1, '1', 'aRdLE8MgoLI', -43.57649, 172.6528, 'Major A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non condimentum mi. Donec tincidunt finibus interdum. Integer sed est ut felis feugiat volutpat. Aenean vitae vehicula mauris. Sed tincidunt posuere elit sed lacinia. Proin massa eros, rhoncus eget elit vel, ullamcorper ullamcorper ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam commodo, tortor vitae tristique accumsan, augue erat sodales ante, vitae finibus augue leo in dolor. Cras lacinia est turpis, eu pretium odio molestie a. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Curabitur scelerisque risus id nisi sollicitudin, et imperdiet urna rutrum.', '', 5, '2017-04-20 00:42:24', 120, 'Longboarding'),
(2, '2', 'uJqkSep9gKk', -43.58184, 172.71618, 'Morgans', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare mi quis vestibulum viverra. Nam velit nisl, bibendum nec pellentesque et, dignissim eget metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam semper ex sed ultricies egestas. Praesent laoreet eu nisi quis consequat. Donec posuere sem eget interdum hendrerit. Morbi egestas quam turpis, ac hendrerit eros facilisis sit amet. Sed consectetur porta velit sit amet finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer eget finibus sapien. Vivamus elementum nisl leo, sed facilisis justo tincidunt eget. Nulla aliquet vulputate mauris, non tempor erat condimentum hendrerit. Aliquam erat volutpat. Etiam gravida nisi a pellentesque bibendum. In hac habitasse platea dictumst.\r\n\r\n', '[{\"time\":\"2017-02-04T03:47:18Z\",\"coords\":{\"lat\":-43.58184,\"lng\":172.71618},\"elevation\":\"98.20823577679977\"},{\"time\":\"2017-02-04T03:47:19Z\",\"coords\":{\"lat\":-43.58184,\"lng\":172.71618},\"elevation\":\"98.64186722350513\"},{\"time\":\"2017-02-04T03:47:20Z\",\"coords\":{\"lat\":-43.58184,\"lng\":172.71618},\"elevation\":\"99.02738387861842\"},{\"time\":\"2017-02-04T03:47:21Z\",\"coords\":{\"lat\":-43.58184,\"lng\":172.71618},\"elevation\":\"99.37185752325865\"},{\"time\":\"2017-02-04T03:47:22Z\",\"coords\":{\"lat\":-43.58184,\"lng\":172.71618},\"elevation\":\"99.6683469787595\"},{\"time\":\"2017-02-04T03:47:23Z\",\"coords\":{\"lat\":-43.58184,\"lng\":172.71618},\"elevation\":\"99.95466535107064\"},{\"time\":\"2017-02-04T03:47:24Z\",\"coords\":{\"lat\":-43.58184,\"lng\":172.71618},\"elevation\":\"99.98116483528855\"},{\"time\":\"2017-02-04T03:47:25Z\",\"coords\":{\"lat\":-43.58184,\"lng\":172.71618},\"elevation\":\"100.00218789169418\"},{\"time\":\"2017-02-04T03:47:26Z\",\"coords\":{\"lat\":-43.58184,\"lng\":172.71618},\"elevation\":\"100.0235954641178\"},{\"time\":\"2017-02-04T03:47:27Z\",\"coords\":{\"lat\":-43.58184,\"lng\":172.71609999999998},\"elevation\":\"100.26053193505636\"},{\"time\":\"2017-02-04T03:47:28Z\",\"coords\":{\"lat\":-43.58182,\"lng\":172.71609999999998},\"elevation\":\"100.45852481611414\"},{\"time\":\"2017-02-04T03:47:29Z\",\"coords\":{\"lat\":-43.58179,\"lng\":172.71609},\"elevation\":\"102.46691405802241\"},{\"time\":\"2017-02-04T03:47:30Z\",\"coords\":{\"lat\":-43.58174,\"lng\":172.71606999999995},\"elevation\":\"103.97054150543255\"},{\"time\":\"2017-02-04T03:47:31Z\",\"coords\":{\"lat\":-43.58169,\"lng\":172.71604000000002},\"elevation\":\"104.84896783244608\"},{\"time\":\"2017-02-04T03:47:32Z\",\"coords\":{\"lat\":-43.58163,\"lng\":172.716},\"elevation\":\"105.30822896324995\"},{\"time\":\"2017-02-04T03:47:33Z\",\"coords\":{\"lat\":-43.58156,\"lng\":172.71595000000002},\"elevation\":\"105.49464788952346\"},{\"time\":\"2017-02-04T03:47:34Z\",\"coords\":{\"lat\":-43.58149,\"lng\":172.71587999999997},\"elevation\":\"105.43290547588876\"},{\"time\":\"2017-02-04T03:47:35Z\",\"coords\":{\"lat\":-43.58143,\"lng\":172.71579999999994},\"elevation\":\"104.88074951207953\"},{\"time\":\"2017-02-04T03:47:36Z\",\"coords\":{\"lat\":-43.58137,\"lng\":172.71572000000003},\"elevation\":\"103.99699901073166\"},{\"time\":\"2017-02-04T03:47:37Z\",\"coords\":{\"lat\":-43.58133,\"lng\":172.71563000000003},\"elevation\":\"102.7739183948509\"},{\"time\":\"2017-02-04T03:47:38Z\",\"coords\":{\"lat\":-43.58128,\"lng\":172.71552999999994},\"elevation\":\"101.60517502306817\"},{\"time\":\"2017-02-04T03:47:39Z\",\"coords\":{\"lat\":-43.58125,\"lng\":172.71543999999994},\"elevation\":\"100.85730184148179\"},{\"time\":\"2017-02-04T03:47:40Z\",\"coords\":{\"lat\":-43.58121,\"lng\":172.71534999999994},\"elevation\":\"100.39846233011188\"},{\"time\":\"2017-02-04T03:47:41Z\",\"coords\":{\"lat\":-43.58119,\"lng\":172.71527000000003},\"elevation\":\"99.83770943030498\"},{\"time\":\"2017-02-04T03:47:42Z\",\"coords\":{\"lat\":-43.58116,\"lng\":172.71519999999998},\"elevation\":\"99.23343754476184\"},{\"time\":\"2017-02-04T03:47:43Z\",\"coords\":{\"lat\":-43.58114,\"lng\":172.71512000000007},\"elevation\":\"98.79340092201268\"},{\"time\":\"2017-02-04T03:47:44Z\",\"coords\":{\"lat\":-43.58111,\"lng\":172.71504000000004},\"elevation\":\"98.52127443814115\"},{\"time\":\"2017-02-04T03:47:45Z\",\"coords\":{\"lat\":-43.58108,\"lng\":172.71495000000004},\"elevation\":\"98.79946509141755\"},{\"time\":\"2017-02-04T03:47:46Z\",\"coords\":{\"lat\":-43.58105,\"lng\":172.71486000000004},\"elevation\":\"99.17228224119154\"},{\"time\":\"2017-02-04T03:47:47Z\",\"coords\":{\"lat\":-43.58102,\"lng\":172.71477000000004},\"elevation\":\"99.20524576240183\"},{\"time\":\"2017-02-04T03:47:48Z\",\"coords\":{\"lat\":-43.58097,\"lng\":172.7147},\"elevation\":\"98.64664492933582\"},{\"time\":\"2017-02-04T03:47:49Z\",\"coords\":{\"lat\":-43.58092,\"lng\":172.71464000000003},\"elevation\":\"97.75354076913851\"},{\"time\":\"2017-02-04T03:47:50Z\",\"coords\":{\"lat\":-43.58087,\"lng\":172.71458000000007},\"elevation\":\"96.56974274529689\"},{\"time\":\"2017-02-04T03:47:51Z\",\"coords\":{\"lat\":-43.58081,\"lng\":172.71452},\"elevation\":\"95.4380113405414\"},{\"time\":\"2017-02-04T03:47:52Z\",\"coords\":{\"lat\":-43.58075,\"lng\":172.71449000000007},\"elevation\":\"94.24984213600884\"},{\"time\":\"2017-02-04T03:47:53Z\",\"coords\":{\"lat\":-43.58067,\"lng\":172.71444999999994},\"elevation\":\"92.81263041471051\"},{\"time\":\"2017-02-04T03:47:54Z\",\"coords\":{\"lat\":-43.58061,\"lng\":172.71443},\"elevation\":\"91.40616607738887\"},{\"time\":\"2017-02-04T03:47:55Z\",\"coords\":{\"lat\":-43.58054,\"lng\":172.71440000000007},\"elevation\":\"89.60920066934415\"},{\"time\":\"2017-02-04T03:47:56Z\",\"coords\":{\"lat\":-43.58048,\"lng\":172.71438},\"elevation\":\"88.24111328847596\"},{\"time\":\"2017-02-04T03:47:57Z\",\"coords\":{\"lat\":-43.58042,\"lng\":172.71434999999997},\"elevation\":\"87.00330577749176\"},{\"time\":\"2017-02-04T03:47:58Z\",\"coords\":{\"lat\":-43.58035,\"lng\":172.71432000000004},\"elevation\":\"86.07093642045665\"},{\"time\":\"2017-02-04T03:47:59Z\",\"coords\":{\"lat\":-43.58029,\"lng\":172.71429999999998},\"elevation\":\"85.5743431655409\"},{\"time\":\"2017-02-04T03:48:00Z\",\"coords\":{\"lat\":-43.58023,\"lng\":172.71428000000003},\"elevation\":\"84.98761905716695\"},{\"time\":\"2017-02-04T03:48:01Z\",\"coords\":{\"lat\":-43.58017,\"lng\":172.71425},\"elevation\":\"84.56608509547327\"},{\"time\":\"2017-02-04T03:48:02Z\",\"coords\":{\"lat\":-43.5801,\"lng\":172.71423000000004},\"elevation\":\"83.79848541990987\"},{\"time\":\"2017-02-04T03:48:03Z\",\"coords\":{\"lat\":-43.58004,\"lng\":172.71420999999998},\"elevation\":\"82.92320993243257\"},{\"time\":\"2017-02-04T03:48:04Z\",\"coords\":{\"lat\":-43.57997,\"lng\":172.71419000000003},\"elevation\":\"82.20861427666718\"},{\"time\":\"2017-02-04T03:48:05Z\",\"coords\":{\"lat\":-43.57991,\"lng\":172.71416999999997},\"elevation\":\"81.61780844774768\"},{\"time\":\"2017-02-04T03:48:06Z\",\"coords\":{\"lat\":-43.57982,\"lng\":172.71414000000004},\"elevation\":\"80.77003484701316\"},{\"time\":\"2017-02-04T03:48:07Z\",\"coords\":{\"lat\":-43.57974,\"lng\":172.71411},\"elevation\":\"80.01334080956003\"},{\"time\":\"2017-02-04T03:48:08Z\",\"coords\":{\"lat\":-43.57966,\"lng\":172.71407},\"elevation\":\"79.22484168463168\"},{\"time\":\"2017-02-04T03:48:09Z\",\"coords\":{\"lat\":-43.57957,\"lng\":172.71404000000007},\"elevation\":\"78.38614337001474\"},{\"time\":\"2017-02-04T03:48:10Z\",\"coords\":{\"lat\":-43.57947,\"lng\":172.71398999999997},\"elevation\":\"77.42999670377962\"},{\"time\":\"2017-02-04T03:48:11Z\",\"coords\":{\"lat\":-43.57935,\"lng\":172.71393999999998},\"elevation\":\"76.33281076375005\"},{\"time\":\"2017-02-04T03:48:12Z\",\"coords\":{\"lat\":-43.57921,\"lng\":172.71388000000002},\"elevation\":\"75.28760206579791\"},{\"time\":\"2017-02-04T03:48:13Z\",\"coords\":{\"lat\":-43.57907,\"lng\":172.71381999999994},\"elevation\":\"73.9191686000706\"},{\"time\":\"2017-02-04T03:48:14Z\",\"coords\":{\"lat\":-43.57894,\"lng\":172.71375999999998},\"elevation\":\"72.43700597258362\"},{\"time\":\"2017-02-04T03:48:15Z\",\"coords\":{\"lat\":-43.57882,\"lng\":172.71371},\"elevation\":\"71.1117262836098\"},{\"time\":\"2017-02-04T03:48:16Z\",\"coords\":{\"lat\":-43.5787,\"lng\":172.71365000000003},\"elevation\":\"69.86319837066696\"},{\"time\":\"2017-02-04T03:48:17Z\",\"coords\":{\"lat\":-43.57861,\"lng\":172.71360000000004},\"elevation\":\"68.89313676718882\"},{\"time\":\"2017-02-04T03:48:18Z\",\"coords\":{\"lat\":-43.57853,\"lng\":172.71351000000004},\"elevation\":\"68.06174957350706\"},{\"time\":\"2017-02-04T03:48:19Z\",\"coords\":{\"lat\":-43.57848,\"lng\":172.71344},\"elevation\":\"67.31623191474753\"},{\"time\":\"2017-02-04T03:48:20Z\",\"coords\":{\"lat\":-43.57845,\"lng\":172.71336999999994},\"elevation\":\"66.64599426008743\"},{\"time\":\"2017-02-04T03:48:21Z\",\"coords\":{\"lat\":-43.57842,\"lng\":172.71330999999998},\"elevation\":\"65.91753385322936\"},{\"time\":\"2017-02-04T03:48:22Z\",\"coords\":{\"lat\":-43.57839,\"lng\":172.71326999999997},\"elevation\":\"65.60478389679737\"},{\"time\":\"2017-02-04T03:48:23Z\",\"coords\":{\"lat\":-43.57835,\"lng\":172.71324000000004},\"elevation\":\"65.38424387312158\"},{\"time\":\"2017-02-04T03:48:24Z\",\"coords\":{\"lat\":-43.57831,\"lng\":172.71323000000007},\"elevation\":\"65.07529676033896\"},{\"time\":\"2017-02-04T03:48:25Z\",\"coords\":{\"lat\":-43.57828,\"lng\":172.71323000000007},\"elevation\":\"65.03594279745974\"},{\"time\":\"2017-02-04T03:48:26Z\",\"coords\":{\"lat\":-43.57825,\"lng\":172.71323000000007},\"elevation\":\"64.96655076589164\"},{\"time\":\"2017-02-04T03:48:27Z\",\"coords\":{\"lat\":-43.57821,\"lng\":172.71324000000004},\"elevation\":\"64.82025031233438\"},{\"time\":\"2017-02-04T03:48:28Z\",\"coords\":{\"lat\":-43.57818,\"lng\":172.71324000000004},\"elevation\":\"64.61426555815464\"},{\"time\":\"2017-02-04T03:48:29Z\",\"coords\":{\"lat\":-43.57815,\"lng\":172.71324000000004},\"elevation\":\"64.34606847704889\"},{\"time\":\"2017-02-04T03:48:30Z\",\"coords\":{\"lat\":-43.57814,\"lng\":172.71324000000004},\"elevation\":\"64.0115499168752\"},{\"time\":\"2017-02-04T03:48:31Z\",\"coords\":{\"lat\":-43.57814,\"lng\":172.71324000000004},\"elevation\":\"63.66876142501769\"},{\"time\":\"2017-02-04T03:48:32Z\",\"coords\":{\"lat\":-43.57814,\"lng\":172.71324000000004},\"elevation\":\"63.637478199402146\"},{\"time\":\"2017-02-04T03:48:33Z\",\"coords\":{\"lat\":-43.57814,\"lng\":172.71324000000004},\"elevation\":\"63.60709704707261\"},{\"time\":\"2017-02-04T03:48:34Z\",\"coords\":{\"lat\":-43.57814,\"lng\":172.71324000000004},\"elevation\":\"63.34547299241315\"},{\"time\":\"2017-02-04T03:48:35Z\",\"coords\":{\"lat\":-43.57814,\"lng\":172.71324000000004},\"elevation\":\"63.07261668592797\"},{\"time\":\"2017-02-04T03:48:36Z\",\"coords\":{\"lat\":-43.57814,\"lng\":172.71324000000004},\"elevation\":\"62.80723594858079\"},{\"time\":\"2017-02-04T03:48:37Z\",\"coords\":{\"lat\":-43.57814,\"lng\":172.71324000000004},\"elevation\":\"62.56204055423877\"},{\"time\":\"2017-02-04T03:48:38Z\",\"coords\":{\"lat\":-43.57814,\"lng\":172.71324000000004},\"elevation\":\"62.34270211666083\"},{\"time\":\"2017-02-04T03:48:39Z\",\"coords\":{\"lat\":-43.57814,\"lng\":172.71324000000004},\"elevation\":\"62.186829658665225\"},{\"time\":\"2017-02-04T03:48:40Z\",\"coords\":{\"lat\":-43.57814,\"lng\":172.71324000000004},\"elevation\":\"62.112445536024865\"},{\"time\":\"2017-02-04T03:48:41Z\",\"coords\":{\"lat\":-43.57814,\"lng\":172.71324000000004},\"elevation\":\"61.98310729362762\"},{\"time\":\"2017-02-04T03:48:42Z\",\"coords\":{\"lat\":-43.57814,\"lng\":172.71324000000004},\"elevation\":\"61.811633093320246\"},{\"time\":\"2017-02-04T03:48:43Z\",\"coords\":{\"lat\":-43.57814,\"lng\":172.71324000000004},\"elevation\":\"61.61801038361103\"},{\"time\":\"2017-02-04T03:48:44Z\",\"coords\":{\"lat\":-43.57814,\"lng\":172.71324000000004},\"elevation\":\"61.59348527096635\"}]', 5, '2017-04-20 01:37:55', 200, 'Longboarding'),
(3, '1', 'pa7MY-GuUkE', -43.58495, 172.72801, 'Mt P', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare mi quis vestibulum viverra. Nam velit nisl, bibendum nec pellentesque et, dignissim eget metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam semper ex sed ultricies egestas. Praesent laoreet eu nisi quis consequat. Donec posuere sem eget interdum hendrerit. Morbi egestas quam turpis, ac hendrerit eros facilisis sit amet. Sed consectetur porta velit sit amet finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer eget finibus sapien. Vivamus elementum nisl leo, sed facilisis justo tincidunt eget. Nulla aliquet vulputate mauris, non tempor erat condimentum hendrerit. Aliquam erat volutpat. Etiam gravida nisi a pellentesque bibendum. In hac habitasse platea dictumst.', '', 5, '2017-04-20 00:43:13', 900, 'Longboarding');

-- --------------------------------------------------------

--
-- Table structure for table `video_likes`
--

CREATE TABLE `video_likes` (
  `video_likes_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `comment_likes`
--
ALTER TABLE `comment_likes`
  ADD PRIMARY KEY (`comment_likes_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `tags_videos`
--
ALTER TABLE `tags_videos`
  ADD PRIMARY KEY (`tag_video_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `video_likes`
--
ALTER TABLE `video_likes`
  ADD PRIMARY KEY (`video_likes_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment_likes`
--
ALTER TABLE `comment_likes`
  MODIFY `comment_likes_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tags_videos`
--
ALTER TABLE `tags_videos`
  MODIFY `tag_video_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `video_likes`
--
ALTER TABLE `video_likes`
  MODIFY `video_likes_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

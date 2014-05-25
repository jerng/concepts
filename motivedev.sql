-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2014 at 04:10 PM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `motivedev`
--

-- --------------------------------------------------------

--
-- Table structure for table `emotions`
--

CREATE TABLE IF NOT EXISTS `emotions` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emotions`
--

INSERT INTO `emotions` (`id`, `user_id`, `text`) VALUES
('538084df-22f4-4901-8cfa-3a91b5fe9524', '53806a38-dc40-430e-9d1e-3a92b5fe9524', 'It takes me a long time to get to the office. I don''t know if it''s something I''m imagining, or if it''s just the car I drive. Maybe it''s just traffic.'),
('5380894c-da60-49c6-aa92-3a96b5fe9524', '53807151-eb40-404e-a8e7-3e07cbdd56cb', 'I wake up in the morning and everything feels slow. Maybe I need to run a mile or drink some coffee.'),
('538089ce-2d9c-41ef-ba47-42a8b5fe9524', '5380746e-8918-4fda-9425-3a91b5fe9524', 'Our delivery man drives a 1978 Toyota. We''ve optimised the routes and delivery timings, and we can''t afford to hire more than one guy. It looks like we''re limited by the speed of his car.'),
('5380b7c9-4a58-4752-8fea-3e91b5fe9524', '538075d3-6f60-4cfc-8c20-3e09b5fe9524', 'The flat I live in wasn''t roofed properly. The clay tiles up there are lying directly on wooden batons, there''s no plywood or felt or any other kind of sheeting underneath. I need to find out how much it would cost to do this.'),
('5380b7ee-2f30-4d10-831c-3e05b5fe9524', '538075eb-b830-4d4b-bec0-3a94b5fe9524', 'Eh I was sleeping the other day, and I can hear this drip drip drip sound at night. Please tell me you know a roofer.'),
('5380b81b-2260-4e24-8573-42a8b5fe9524', '5380769c-9f0c-4d3d-b2c2-3e05b5fe9524', 'The coffee near my office is all over-roasted and bitter. I need to know where to find some more delicate flavours without driving out from the Mid Valley City area.'),
('5380b87f-d4fc-4b32-abdf-3e07b5fe9524', '538076aa-bcd8-4dc8-92cc-3e09b5fe9524', 'I make RM2,400/month and I have three kids. I''m not exactly sure how to make ends meet, but my wife has a part-time job and we somehow manage to make ends meet. I''d really like to know how I can make more money, given the skills that I have.'),
('5380b8ee-3e64-493b-9192-3ee6b5fe9524', '538076e9-0510-4a4e-9c6e-3a94b5fe9524', 'I have a brilliant team of developers and product managers, but we''re having a problem breaking into neighbouring markets like Germany and everything south of Turkey. I''d like to hire a headhunter to find me the specialist I need. Personal recommendations haven''t worked out.'),
('5380b97f-7204-49a5-b7f4-3a91b5fe9524', '53809fb5-cbbc-44bc-9413-3a91b5fe9524', 'We just got an RFQ from Singapore''s Ministry of Defense to build a data-warehousing, analytical engine, and business intelligence recommendations tool. We''ve got loads of statisticians and developers in house, but no one here''s really experienced with the qualitative aspect of data-management in modern military operations. Maybe we need to look harder at the people we have.'),
('5380b9e2-75ac-49c3-9eab-3e09b5fe9524', '538075d3-6f60-4cfc-8c20-3e09b5fe9524', 'I can''t stand this fellow. Every time I go on set, the first time for the day he tells me to fix this or that item of clothing. He''s not even a director FFS.'),
('5380ba7f-8c58-4cba-b31e-3a93b5fe9524', '538076e9-0510-4a4e-9c6e-3a94b5fe9524', 'I have been sitting on this idea for a while. We''re in the middle of a mature neighborhood with some older vendors starting to close their doors. There are a few kitschy fast-food places open here and there, but we don''t really have good places to hang out late into the night. This area needs a place that''s open all night that serves good coffee, beer, and then some.'),
('5380bb55-e43c-4ae0-8eb9-3e07b5fe9524', '5380746e-8918-4fda-9425-3a91b5fe9524', 'While I can appreciate the caramelised butter-roasted acorns we get in Malaysia, I''d like some good old Tim Wendelboe every now and then. These days I get my colleagues from Digi to bring it in when they return from vacations.'),
('5380bccd-79a0-48e9-bfb3-3a93b5fe9524', '53806a38-dc40-430e-9d1e-3a92b5fe9524', 'I love making coffee. It''s a craft. I''ll spend the rest of my life doing it. I wish there were more ways to make money from it, because the pay sucks.'),
('5380e404-8170-4507-9e4a-62e0b5fe9524', '53809fb5-cbbc-44bc-9413-3a91b5fe9524', 'We grew up in a small village. Every family had a role. My family repaired roofs. There isn''t much I don''t know about building a secure cover for any weather condition.'),
('5380e578-58a4-4ee2-bb8d-5df8b5fe9524', '538075eb-b830-4d4b-bec0-3a94b5fe9524', 'I''m looking for small local businesses to invest in. I spend most of my time in the city, and I return home to the suburbs late in the day, and rarely meet people from around here. I wish there was some way to find out more about entrepreneurs in my neighborhood.');

-- --------------------------------------------------------

--
-- Table structure for table `emotions_problems`
--

CREATE TABLE IF NOT EXISTS `emotions_problems` (
  `id` char(36) NOT NULL,
  `emotion_id` char(36) NOT NULL,
  `problem_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emotions_problems`
--

INSERT INTO `emotions_problems` (`id`, `emotion_id`, `problem_id`) VALUES
('5380e8fe-5d60-4610-8f6c-3a93b5fe9524', '538089ce-2d9c-41ef-ba47-42a8b5fe9524', '5380765e-447c-407f-8da2-3a96b5fe9524'),
('5380e907-4cc4-489e-a876-62e0b5fe9524', '5380b7c9-4a58-4752-8fea-3e91b5fe9524', '53806eff-03b4-45b8-af57-3ee6b5fe9524'),
('5380e910-40dc-40b5-bf05-3a95b5fe9524', '5380b7ee-2f30-4d10-831c-3e05b5fe9524', '53806eff-03b4-45b8-af57-3ee6b5fe9524'),
('5380e919-fe54-406e-8812-6620b5fe9524', '5380b81b-2260-4e24-8573-42a8b5fe9524', '5380762c-f8d0-4340-9605-3a95b5fe9524'),
('5380e923-ee24-410b-8cac-661db5fe9524', '5380b87f-d4fc-4b32-abdf-3e07b5fe9524', '53807743-74f4-422e-8859-3ee6b5fe9524'),
('5380e92d-bf54-4fdc-b0f3-3ee6b5fe9524', '5380b8ee-3e64-493b-9192-3ee6b5fe9524', '53807753-2ef0-4d5f-848c-3a96b5fe9524'),
('5380e938-0dc0-4194-bd89-5df9b5fe9524', '5380b97f-7204-49a5-b7f4-3a91b5fe9524', '5380777e-f398-4c6d-bc45-3a93b5fe9524'),
('5380ebfc-a0a0-4c19-8116-62e0b5fe9524', '5380b9e2-75ac-49c3-9eab-3e09b5fe9524', '53807704-b994-4c1c-a69c-3a91b5fe9524'),
('5380ec34-ed3c-4367-8910-6620b5fe9524', '5380ba7f-8c58-4cba-b31e-3a93b5fe9524', '53808474-8908-43e4-a2f1-3e09b5fe9524'),
('5380ec9a-d134-4401-9dbe-62e0b5fe9524', '5380bccd-79a0-48e9-bfb3-3a93b5fe9524', '5380762c-f8d0-4340-9605-3a95b5fe9524'),
('5380ec9a-ea34-4df5-9127-62e0b5fe9524', '5380bccd-79a0-48e9-bfb3-3a93b5fe9524', '53807743-74f4-422e-8859-3ee6b5fe9524'),
('5380eca9-715c-49dd-a05c-3a95b5fe9524', '5380bb55-e43c-4ae0-8eb9-3e07b5fe9524', '5380762c-f8d0-4340-9605-3a95b5fe9524'),
('5380ed14-dc44-47e2-ad91-5c4ab5fe9524', '5380894c-da60-49c6-aa92-3a96b5fe9524', '5380762c-f8d0-4340-9605-3a95b5fe9524'),
('5380f049-db70-4da8-baf9-661db5fe9524', '538084df-22f4-4901-8cfa-3a91b5fe9524', '5380762c-f8d0-4340-9605-3a95b5fe9524'),
('5380f049-fd08-48be-a77c-661db5fe9524', '538084df-22f4-4901-8cfa-3a91b5fe9524', '5380765e-447c-407f-8da2-3a96b5fe9524');

-- --------------------------------------------------------

--
-- Table structure for table `emotions_solutions`
--

CREATE TABLE IF NOT EXISTS `emotions_solutions` (
  `emotion_id` char(36) NOT NULL,
  `solution_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emotions_solutions`
--

INSERT INTO `emotions_solutions` (`emotion_id`, `solution_id`) VALUES
('5380e578-58a4-4ee2-bb8d-5df8b5fe9524', '5380e5bf-e718-4a04-9a45-3a93b5fe9524'),
('5380e404-8170-4507-9e4a-62e0b5fe9524', '5380e39f-fb60-4b21-9227-3a93b5fe9524'),
('5380bccd-79a0-48e9-bfb3-3a93b5fe9524', '5380e1af-a7cc-42f7-aa80-5df8b5fe9524');

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE IF NOT EXISTS `problems` (
  `id` char(36) NOT NULL,
  `name` char(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`id`, `name`) VALUES
('53806eff-03b4-45b8-af57-3ee6b5fe9524', 'leaky roof'),
('5380762c-f8d0-4340-9605-3a95b5fe9524', 'need coffee'),
('5380765e-447c-407f-8da2-3a96b5fe9524', 'slow car'),
('53807704-b994-4c1c-a69c-3a91b5fe9524', 'stupid producers'),
('53807743-74f4-422e-8859-3ee6b5fe9524', 'cost of living is killing me'),
('53807753-2ef0-4d5f-848c-3a96b5fe9524', 'looking for sales people'),
('5380777e-f398-4c6d-bc45-3a93b5fe9524', 'project x'),
('53808474-8908-43e4-a2f1-3e09b5fe9524', 'taman jaya needs a better coffee shop'),
('5380c355-a918-46c5-8b96-3e07b5fe9524', 'need that $40,000 handbag');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE IF NOT EXISTS `solutions` (
  `id` char(36) NOT NULL,
  `name` char(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `name`) VALUES
('5380e1af-a7cc-42f7-aa80-5df8b5fe9524', 'I can make coffee.'),
('5380e39f-fb60-4b21-9227-3a93b5fe9524', 'I can fix a roof.'),
('5380e5bf-e718-4a04-9a45-3a93b5fe9524', 'I have cash to invest.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` char(36) NOT NULL,
  `name` char(100) NOT NULL,
  `lat` float NOT NULL,
  `long` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lat`, `long`) VALUES
('53806a38-dc40-430e-9d1e-3a92b5fe9524', 'Jing', 2.91062, 102.106),
('53807151-eb40-404e-a8e7-3e07cbdd56cb', 'Ali', 2.70914, 102.081),
('5380746e-8918-4fda-9425-3a91b5fe9524', 'Ah Kow', 3.12424, 101.674),
('538075d3-6f60-4cfc-8c20-3e09b5fe9524', 'Muthu', 3.38914, 101.554),
('538075eb-b830-4d4b-bec0-3a94b5fe9524', 'Jim', 3.12417, 101.675),
('5380769c-9f0c-4d3d-b2c2-3e05b5fe9524', 'Jane', 3.20432, 101.367),
('538076aa-bcd8-4dc8-92cc-3e09b5fe9524', 'Nurul', 3.12417, 101.675),
('538076e9-0510-4a4e-9c6e-3a94b5fe9524', 'Aishwarya', 3.09961, 102.024),
('53809fb5-cbbc-44bc-9413-3a91b5fe9524', 'Greg House', 3.34383, 101.71);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

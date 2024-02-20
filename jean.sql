-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 20, 2024 at 08:02 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jean`
--

-- --------------------------------------------------------

--
-- Table structure for table `freelancer`
--

DROP TABLE IF EXISTS `freelancer`;
CREATE TABLE IF NOT EXISTS `freelancer` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) NOT NULL,
  `Last_name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `status` int NOT NULL,
  `Data` json DEFAULT NULL,
  `Files` json DEFAULT NULL,
  `Description` text NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `freelancer`
--

INSERT INTO `freelancer` (`ID`, `Name`, `Last_name`, `Email`, `status`, `Data`, `Files`, `Description`, `Created_at`, `Updated_at`) VALUES
(1, 'Raousing', 'Bertrand', 'raousingbertrand@gmail.com', 1, '{\"data\": \"[\\\"Full-stack\\\",\\\"Product Owner\\\",\\\"Asie\\\",\\\"PMO\\\"]\"}', NULL, '<div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</div>', '2024-02-15 15:18:04', '2024-02-15 15:18:04'),
(2, 'Jacques', 'Martin', 'jaquesmartin@we.com', 1, '{\"data\": \"[\\\"Front-end\\\",\\\"Back-end\\\",\\\"Full-stack\\\",\\\"Graphique\\\",\\\"Python\\\",\\\"React\\\",\\\"Vue.js\\\",\\\"Git\\\"]\"}', NULL, '<div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br><br>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.<br><br>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.<br><br>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.<br><br>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</div>', '2024-02-15 15:27:44', '2024-02-15 15:27:44'),
(3, 'Josephine', 'Mia', 'joMia@go.com', 0, '{\"data\": \"[\\\"Back-end\\\",\\\"UI\\\\/UX\\\",\\\"Graphique\\\"]\"}', NULL, '<div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br><br>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.<br><br>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.<br><br>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.<br><br>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</div>', '2024-02-15 15:29:46', '2024-02-15 15:29:46'),
(4, 'John', 'Doe', 'johndoe4@example.com', 1, '{\"data\": \"[\\\"Back-end\\\",\\\"Python\\\",\\\"Java\\\",\\\"C#\\\"]\"}', NULL, '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(5, 'Jane', 'Smith', 'janesmith5@example.com', 1, '{\"data\": \"[\\\"UI\\\\/UX\\\",\\\"Graphique\\\",\\\"React\\\"]\"}', NULL, '<div>Pellentesque habitant morbi tristique senectus et netus.</div>', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(6, 'Michael', 'Brown', 'michaelbrown6@example.com', 0, '{\"data\": \"[\\\"Python\\\",\\\"Java\\\",\\\"C#\\\",\\\"Docker\\\",\\\"Git\\\",\\\"T\\\\u00e9l\\\\u00e9travail\\\",\\\"T\\\\u00e9l\\\\u00e9travail global\\\"]\"}', NULL, '<div>Sed do eiusmod tempor incididunt ut labore et dolore.</div>', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(7, 'Linda', 'Davis', 'lindadavis7@example.com', 1, '{\"data\": \"[\\\"Back-end\\\",\\\"UI\\\\/UX\\\",\\\"Graphique\\\"]\"}', NULL, 'Ut enim ad minim veniam, quis nostrud exercitation.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(8, 'James', 'Wilson', 'jameswilson8@example.com', 1, '{\"data\": \"[\\\"Full-stack\\\",\\\"Product Owner\\\"]\"}', NULL, 'Duis aute irure dolor in reprehenderit in voluptate.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(9, 'Patricia', 'Martinez', 'patriciamartinez9@example.com', 1, '{\"data\": \"[\\\"UI\\\\/UX\\\",\\\"Graphique\\\",\\\"React\\\"]\"}', NULL, 'Velit esse cillum dolore eu fugiat nulla pariatur.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(10, 'Robert', 'Anderson', 'robertanderson10@example.com', 1, '{\"data\": \"[\\\"Back-end\\\",\\\"UI\\\\/UX\\\",\\\"Graphique\\\"]\"}', NULL, 'Excepteur sint occaecat cupidatat non proident.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(11, 'Jennifer', 'Taylor', 'jennifertaylor11@example.com', 1, '{\"data\": \"[\\\"Python\\\",\\\"Java\\\",\\\"C#\\\",\\\"Docker\\\",\\\"Git\\\",\\\"T\\\\u00e9l\\\\u00e9travail\\\",\\\"T\\\\u00e9l\\\\u00e9travail global\\\"]\"}', NULL, 'Sunt in culpa qui officia deserunt mollit anim id est laborum.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(12, 'William', 'Thomas', 'williamthomas12@example.com', 1, '{\"data\": \"[\\\"UI\\\\/UX\\\",\\\"Graphique\\\",\\\"React\\\"]\"}', NULL, 'Curabitur pretium tincidunt lacus.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(13, 'Jessica', 'Hernandez', 'jessicahernandez13@example.com', 0, '{\"data\": \"[\\\"Full-stack\\\",\\\"Product Owner\\\"]\"}', NULL, '<div>Nulla gravida orci a odio.</div>', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(14, 'David', 'Moore', 'davidmoore14@example.com', 1, '{\"data\": \"[\\\"Front-end\\\",\\\"Back-end\\\",\\\"Full-stack\\\",\\\"Graphique\\\",\\\"Python\\\",\\\"React\\\",\\\"Vue.js\\\",\\\"Git\\\"]\"}', NULL, 'Nullam varius, turpis et commodo pharetra.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(15, 'Sarah', 'Jackson', 'sarahjackson15@example.com', 1, '{\"data\": \"[\\\"UI\\\\/UX\\\",\\\"Graphique\\\",\\\"React\\\"]\"}', NULL, 'Est erat faucibus purus, vitae vehicula tortor nunc.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(16, 'Charles', 'Lee', 'charleslee16@example.com', 1, '{\"data\": \"[\\\"Python\\\",\\\"Java\\\",\\\"C#\\\",\\\"Docker\\\",\\\"Git\\\",\\\"T\\\\u00e9l\\\\u00e9travail\\\",\\\"T\\\\u00e9l\\\\u00e9travail global\\\"]\"}', NULL, 'Quisque quis turpis ac quam sagittis scelerisque.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(17, 'Karen', 'Harris', 'karenharris17@example.com', 1, '{\"data\": \"[\\\"Back-end\\\",\\\"UI\\\\/UX\\\",\\\"Graphique\\\"]\"}', NULL, 'Etiam ultricies nisi vel augue.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(18, 'Christopher', 'Clark', 'christopherclark18@example.com', 1, '{\"data\": \"[\\\"Full-stack\\\",\\\"Product Owner\\\"]\"}', NULL, 'Curabitur ullamcorper ultricies nisi.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(19, 'Nancy', 'Lewis', 'nancylewis19@example.com', 1, '{\"data\": \"[\\\"Front-end\\\",\\\"Back-end\\\",\\\"Full-stack\\\",\\\"Graphique\\\",\\\"Python\\\",\\\"React\\\",\\\"Vue.js\\\",\\\"Git\\\"]\"}', NULL, 'Nam eget dui. Etiam rhoncus.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(20, 'Daniel', 'Walker', 'danielwalker20@example.com', 1, '{\"data\": \"[\\\"Back-end\\\",\\\"UI\\\\/UX\\\",\\\"Graphique\\\"]\"}', NULL, '<div>Maecenas tempus, tellus eget condimentum rhoncus.</div>', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(21, 'Lisa', 'Hall', 'lisahall21@example.com', 1, '{\"data\": \"[\\\"UI\\\\/UX\\\",\\\"Graphique\\\",\\\"React\\\"]\"}', NULL, 'Sem quam semper libero, sit amet.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(22, 'Matthew', 'Allen', 'matthewallen22@example.com', 1, '{\"data\": \"[\\\"Python\\\",\\\"Java\\\",\\\"C#\\\",\\\"Docker\\\",\\\"Git\\\",\\\"T\\\\u00e9l\\\\u00e9travail\\\",\\\"T\\\\u00e9l\\\\u00e9travail global\\\"]\"}', NULL, 'Adipiscing sem neque sed ipsum.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(23, 'Margaret', 'Young', 'margaretyoung23@example.com', 1, '{\"data\": \"[\\\"Back-end\\\",\\\"UI\\\\/UX\\\",\\\"Graphique\\\"]\"}', NULL, 'Nam quam nunc, blandit vel, luctus pulvinar.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(24, 'Richard', 'King', 'richardking24@example.com', 1, '{\"data\": \"[\\\"Front-end\\\",\\\"Back-end\\\",\\\"Full-stack\\\",\\\"Graphique\\\",\\\"Python\\\",\\\"React\\\",\\\"Vue.js\\\",\\\"Git\\\"]\"}', NULL, 'Hendrerit id, lorem. Maecenas nec odio et ante.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(25, 'Barbara', 'Wright', 'barbarawright25@example.com', 1, '{\"data\": \"[\\\"Back-end\\\",\\\"UI\\\\/UX\\\",\\\"Graphique\\\"]\"}', NULL, 'Tincidunt tempus. Donec vitae sapien ut libero.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(26, 'Joseph', 'Lopez', 'josephlopez26@example.com', 1, '{\"data\": \"[\\\"Python\\\",\\\"Java\\\",\\\"C#\\\",\\\"Docker\\\",\\\"Git\\\",\\\"T\\\\u00e9l\\\\u00e9travail\\\",\\\"T\\\\u00e9l\\\\u00e9travail global\\\"]\"}', NULL, 'Venenatis faucibus. Nullam quis ante.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(27, 'Susan', 'Hill', 'susanhill27@example.com', 1, '{\"data\": \"[\\\"Back-end\\\",\\\"UI\\\\/UX\\\",\\\"Graphique\\\"]\"}', NULL, 'Etiam sit amet orci eget eros faucibus tincidunt.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(28, 'Thomas', 'Scott', 'thomasscott28@example.com', 1, '{\"data\": \"[\\\"Front-end\\\",\\\"Back-end\\\",\\\"Full-stack\\\",\\\"Graphique\\\",\\\"Python\\\",\\\"React\\\",\\\"Vue.js\\\",\\\"Git\\\"]\"}', NULL, 'Duis leo. Sed fringilla mauris sit amet nibh.', '2024-02-18 05:27:04', '2024-02-18 05:27:04'),
(59, 'test1234', 'rew3423', 'sdsd@ddd.com', 0, '[\"Front-end\", \"Product Owner\"]', NULL, 'fdfsdfsdfs', '2024-02-19 14:38:55', '2024-02-19 14:38:55'),
(60, 'bert', 'rao', 'das@ddd.co', 0, '[\"Full-stack\", \"Angular\"]', NULL, 'sdflkslfkjsdlf', '2024-02-20 03:40:38', '2024-02-20 03:40:38'),
(58, 'asdflksaldf', 'isdfkjsndf', 'sjjsj@fj.ci', 0, '[\"Product Owner\", \"Full-stack\", \"Graphique\"]', NULL, 'ksdfklsdf', '2024-02-19 14:38:01', '2024-02-19 14:38:01'),
(57, 'dddddd', 'sssssask', 'skks@fkd.com', 0, '[\"Graphique\", \"Product Owner\", \"Analyse de données\"]', NULL, 'fdlmklskdfmls', '2024-02-19 14:36:50', '2024-02-19 14:36:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

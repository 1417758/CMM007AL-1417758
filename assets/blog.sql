-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `blogview`;
CREATE TABLE `blogview` (
  `blogItemID` int(4) NOT NULL AUTO_INCREMENT,
  `entryTitle` varchar(50) NOT NULL,
  `entrySummary` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `submitter` varchar(50) NOT NULL,
  PRIMARY KEY (`blogItemID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `blogview` (`blogItemID`, `entryTitle`, `entrySummary`, `category`, `submitter`) VALUES
(1,	'Today at work',	'Today I went to work and did lost of very complicated coding things. I was very pleased that I managed to finish them all',	'Work',	'Adam'),
(11,	'University lecturer',	'This week in university I had an amazing lecturer. I cant remember the name of the lecturer but he was really really good',	'University',	'Brian'),
(21,	'Dads new television',	'Today dad bought a new television. he like to watch the F1 and it a lot',	'Family',	'Charlie'),
(31,	'adsrfasdf',	'asdfasdfasdf',	'Work',	'asedfasdf'),
(41,	'me testing for real',	'aksdjhfkajshdfkljahsdfkjhaskdf',	'Family',	'rachie'),
(51,	'2nd TEST HERE',	'asdfasdfasdfasdfasdf',	'University',	'ME of course');

-- 2016-05-04 10:52:59

-- --------------------------------------------------------
-- Host:                         193.1.101.7
-- Server version:               5.6.26 - MySQL Community Server (GPL)
-- Server OS:                    osx10.8
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for group19DB
CREATE DATABASE IF NOT EXISTS `group19DB` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `group19DB`;


-- Dumping structure for table group19DB.ADMIN
CREATE TABLE IF NOT EXISTS `ADMIN` (
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.ADMIN: ~0 rows (approximately)
/*!40000 ALTER TABLE `ADMIN` DISABLE KEYS */;
/*!40000 ALTER TABLE `ADMIN` ENABLE KEYS */;


-- Dumping structure for table group19DB.BANNED
CREATE TABLE IF NOT EXISTS `BANNED` (
  `USERNAME` varchar(15) NOT NULL,
  `EMAIL` varchar(35) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.BANNED: ~0 rows (approximately)
/*!40000 ALTER TABLE `BANNED` DISABLE KEYS */;
/*!40000 ALTER TABLE `BANNED` ENABLE KEYS */;


-- Dumping structure for table group19DB.BIO
CREATE TABLE IF NOT EXISTS `BIO` (
  `USERNAME` varchar(15) NOT NULL,
  `INFO` varchar(150) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.BIO: ~0 rows (approximately)
/*!40000 ALTER TABLE `BIO` DISABLE KEYS */;
/*!40000 ALTER TABLE `BIO` ENABLE KEYS */;


-- Dumping structure for table group19DB.BODYTYPE
CREATE TABLE IF NOT EXISTS `BODYTYPE` (
  `BODYNUMBER` int(3) DEFAULT NULL,
  `BODY` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.BODYTYPE: ~0 rows (approximately)
/*!40000 ALTER TABLE `BODYTYPE` DISABLE KEYS */;
/*!40000 ALTER TABLE `BODYTYPE` ENABLE KEYS */;


-- Dumping structure for table group19DB.CARD
CREATE TABLE IF NOT EXISTS `CARD` (
  `USERNAME` varchar(15) NOT NULL,
  `EXPIRE` date NOT NULL,
  `NUMBER` varchar(60) NOT NULL,
  `CVV` varchar(60) NOT NULL,
  `TYPE` varchar(10) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.CARD: ~0 rows (approximately)
/*!40000 ALTER TABLE `CARD` DISABLE KEYS */;
/*!40000 ALTER TABLE `CARD` ENABLE KEYS */;


-- Dumping structure for table group19DB.COLLEGE
CREATE TABLE IF NOT EXISTS `COLLEGE` (
  `COLLEGENUMBER` int(3) DEFAULT NULL,
  `COLLEGENAME` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.COLLEGE: ~0 rows (approximately)
/*!40000 ALTER TABLE `COLLEGE` DISABLE KEYS */;
/*!40000 ALTER TABLE `COLLEGE` ENABLE KEYS */;


-- Dumping structure for table group19DB.COOKIE
CREATE TABLE IF NOT EXISTS `COOKIE` (
  `USERNAME` varchar(15) NOT NULL,
  `HASH` varchar(60) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.COOKIE: ~0 rows (approximately)
/*!40000 ALTER TABLE `COOKIE` DISABLE KEYS */;
/*!40000 ALTER TABLE `COOKIE` ENABLE KEYS */;


-- Dumping structure for table group19DB.COUNTY
CREATE TABLE IF NOT EXISTS `COUNTY` (
  `COUNTYNUMBER` int(3) DEFAULT NULL,
  `COUNTYNAME` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.COUNTY: ~0 rows (approximately)
/*!40000 ALTER TABLE `COUNTY` DISABLE KEYS */;
/*!40000 ALTER TABLE `COUNTY` ENABLE KEYS */;


-- Dumping structure for table group19DB.ETHNICTY
CREATE TABLE IF NOT EXISTS `ETHNICTY` (
  `ETHNICITYNUMBER` int(3) DEFAULT NULL,
  `ETHNICITYNAME` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.ETHNICTY: ~0 rows (approximately)
/*!40000 ALTER TABLE `ETHNICTY` DISABLE KEYS */;
/*!40000 ALTER TABLE `ETHNICTY` ENABLE KEYS */;


-- Dumping structure for table group19DB.EYECOLORS
CREATE TABLE IF NOT EXISTS `EYECOLORS` (
  `EYENUMBER` int(3) DEFAULT NULL,
  `EYECOLOR` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.EYECOLORS: ~0 rows (approximately)
/*!40000 ALTER TABLE `EYECOLORS` DISABLE KEYS */;
/*!40000 ALTER TABLE `EYECOLORS` ENABLE KEYS */;


-- Dumping structure for table group19DB.HAIRCOLORS
CREATE TABLE IF NOT EXISTS `HAIRCOLORS` (
  `HAIRNUMBER` int(3) DEFAULT NULL,
  `HAIRCOLOR` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.HAIRCOLORS: ~0 rows (approximately)
/*!40000 ALTER TABLE `HAIRCOLORS` DISABLE KEYS */;
/*!40000 ALTER TABLE `HAIRCOLORS` ENABLE KEYS */;


-- Dumping structure for table group19DB.HEIGHT
CREATE TABLE IF NOT EXISTS `HEIGHT` (
  `HEIGHTNUMBER` int(3) DEFAULT NULL,
  `HEIGHTNAME` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.HEIGHT: ~0 rows (approximately)
/*!40000 ALTER TABLE `HEIGHT` DISABLE KEYS */;
/*!40000 ALTER TABLE `HEIGHT` ENABLE KEYS */;


-- Dumping structure for table group19DB.LIKEOPTIONS
CREATE TABLE IF NOT EXISTS `LIKEOPTIONS` (
  `LIKENUMBER` int(3) DEFAULT NULL,
  `LIKENAME` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.LIKEOPTIONS: ~0 rows (approximately)
/*!40000 ALTER TABLE `LIKEOPTIONS` DISABLE KEYS */;
/*!40000 ALTER TABLE `LIKEOPTIONS` ENABLE KEYS */;


-- Dumping structure for table group19DB.LIKES
CREATE TABLE IF NOT EXISTS `LIKES` (
  `USERNAME` varchar(15) NOT NULL,
  `HOBBIE` int(3) NOT NULL,
  PRIMARY KEY (`USERNAME`),
  KEY `likeIndex` (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.LIKES: ~0 rows (approximately)
/*!40000 ALTER TABLE `LIKES` DISABLE KEYS */;
/*!40000 ALTER TABLE `LIKES` ENABLE KEYS */;


-- Dumping structure for table group19DB.LOCATION
CREATE TABLE IF NOT EXISTS `LOCATION` (
  `USERNAME` varchar(60) NOT NULL,
  `COLLEGE` int(3) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `COUNTY` int(3) NOT NULL,
  PRIMARY KEY (`USERNAME`),
  CONSTRAINT `location_ibfk_1` FOREIGN KEY (`USERNAME`) REFERENCES `REGISTER` (`USERNAME`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.LOCATION: ~0 rows (approximately)
/*!40000 ALTER TABLE `LOCATION` DISABLE KEYS */;
/*!40000 ALTER TABLE `LOCATION` ENABLE KEYS */;


-- Dumping structure for table group19DB.PERSONALITY
CREATE TABLE IF NOT EXISTS `PERSONALITY` (
  `USERNAME` varchar(15) NOT NULL,
  `TRAIT` int(3) NOT NULL,
  PRIMARY KEY (`USERNAME`),
  KEY `personIndex` (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.PERSONALITY: ~0 rows (approximately)
/*!40000 ALTER TABLE `PERSONALITY` DISABLE KEYS */;
/*!40000 ALTER TABLE `PERSONALITY` ENABLE KEYS */;


-- Dumping structure for table group19DB.PERSONALITYOPTIONS
CREATE TABLE IF NOT EXISTS `PERSONALITYOPTIONS` (
  `PERSONALITYNUMBER` int(3) DEFAULT NULL,
  `PERSONALITYTRAIT` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.PERSONALITYOPTIONS: ~0 rows (approximately)
/*!40000 ALTER TABLE `PERSONALITYOPTIONS` DISABLE KEYS */;
/*!40000 ALTER TABLE `PERSONALITYOPTIONS` ENABLE KEYS */;


-- Dumping structure for table group19DB.PHYSICAL
CREATE TABLE IF NOT EXISTS `PHYSICAL` (
  `USERNAME` varchar(15) NOT NULL,
  `EYES` int(3) NOT NULL,
  `HAIR` int(3) NOT NULL,
  `HAIRLEN` int(3) NOT NULL,
  `BODYTYPE` int(3) NOT NULL,
  `HEIGHT` int(3) NOT NULL,
  `ETHNICITY` int(3) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.PHYSICAL: ~0 rows (approximately)
/*!40000 ALTER TABLE `PHYSICAL` DISABLE KEYS */;
/*!40000 ALTER TABLE `PHYSICAL` ENABLE KEYS */;


-- Dumping structure for table group19DB.REGISTER
CREATE TABLE IF NOT EXISTS `REGISTER` (
  `USERNAME` varchar(60) NOT NULL,
  `NAME` varchar(60) NOT NULL,
  `PASSWORD` varchar(60) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `DOB` date NOT NULL,
  `PREFERENCE` varchar(60) NOT NULL,
  `SEX` varchar(60) NOT NULL,
  `IMAGE` varchar(60) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.REGISTER: ~0 rows (approximately)
/*!40000 ALTER TABLE `REGISTER` DISABLE KEYS */;
/*!40000 ALTER TABLE `REGISTER` ENABLE KEYS */;


-- Dumping structure for table group19DB.REQUESTS
CREATE TABLE IF NOT EXISTS `REQUESTS` (
  `USERNAME` varchar(15) NOT NULL,
  `USER` varchar(15) NOT NULL,
  `LEVEL` varchar(10) NOT NULL,
  PRIMARY KEY (`USERNAME`),
  KEY `USER` (`USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.REQUESTS: ~0 rows (approximately)
/*!40000 ALTER TABLE `REQUESTS` DISABLE KEYS */;
/*!40000 ALTER TABLE `REQUESTS` ENABLE KEYS */;


-- Dumping structure for table group19DB.SKINTONES
CREATE TABLE IF NOT EXISTS `SKINTONES` (
  `TONENUMBER` int(3) DEFAULT NULL,
  `TONE` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.SKINTONES: ~0 rows (approximately)
/*!40000 ALTER TABLE `SKINTONES` DISABLE KEYS */;
/*!40000 ALTER TABLE `SKINTONES` ENABLE KEYS */;


-- Dumping structure for table group19DB.TEMPBAN
CREATE TABLE IF NOT EXISTS `TEMPBAN` (
  `USERNAME` varchar(15) NOT NULL,
  `START` date DEFAULT NULL,
  `END` date DEFAULT NULL,
  `OFFENCES` int(2) DEFAULT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table group19DB.TEMPBAN: ~0 rows (approximately)
/*!40000 ALTER TABLE `TEMPBAN` DISABLE KEYS */;
/*!40000 ALTER TABLE `TEMPBAN` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

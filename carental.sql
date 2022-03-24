CREATE DATABASE CAR_RENTAL;
USE CAR_RENTAL;
DROP TABLE IF EXISTS `bank`;
CREATE TABLE IF NOT EXISTS `bank` (
  `Bid` int NOT NULL,
  `Bname` varchar(20) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Owner_id` int DEFAULT NULL,
  PRIMARY KEY (`Bid`),
  KEY `Owner_id` (`Owner_id`)
);
-- --------------------------------------------------------
--
-- Table structure for table `bill`
--
DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `Bno` int NOT NULL,
  `BDate` date DEFAULT NULL,
  `Advance` int DEFAULT NULL,
  `Discount` int DEFAULT NULL,
  `Drivercharge` int DEFAULT NULL,
  `Famount` int DEFAULT NULL,
  `Rid` int DEFAULT NULL,
  `Cid` int DEFAULT NULL,
  PRIMARY KEY (`Bno`),
  KEY `Rid` (`Rid`),
  KEY `Cid` (`Cid`)
);
-- --------------------------------------------------------
--
-- Table structure for table `car`
--
DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `Vehicle_id` int NOT NULL,
  `License_no` varchar(20) DEFAULT NULL,
  `Model` varchar(20) DEFAULT NULL,
  `Year` date DEFAULT NULL,
  `Ctype` varchar(20) DEFAULT NULL,
  `Drate` int DEFAULT NULL,
  `Wrate` int DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Vehicle_id`),
  UNIQUE KEY `License_no` (`License_no`)
);
-- --------------------------------------------------------
--
-- Table structure for table `chauffeur`
--
DROP TABLE IF EXISTS `chauffeur`;
CREATE TABLE IF NOT EXISTS `chauffeur` (
  `Chid` int NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `Mobile` int DEFAULT NULL,
  `Dno` int DEFAULT NULL,
  PRIMARY KEY (`Chid`),
  KEY `Dno` (`Dno`)
);
-- --------------------------------------------------------
--
-- Table structure for table `company`
--
DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `Compid` int NOT NULL,
  `Cname` varchar(20) DEFAULT NULL,
  `Owner_id` int DEFAULT NULL,
  PRIMARY KEY (`Compid`),
  KEY `Owner_id` (`Owner_id`)
);
-- --------------------------------------------------------
--
-- Table structure for table `customer`
--
DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Cid` int NOT NULL,
  `Fname` varchar(1) DEFAULT NULL,
  `Lname` varchar(20) DEFAULT NULL,
  `AGE` int NOT NULL,
  `Mobile` int DEFAULT NULL,
  `Dno` int DEFAULT NULL,
  `Vehicle_id` int DEFAULT NULL,
  PRIMARY KEY (`Cid`),
  KEY `Dno` (`Dno`),
  KEY `Vehicle_id` (`Vehicle_id`)
);
-- --------------------------------------------------------
--
-- Table structure for table `customer_service`
--
DROP TABLE IF EXISTS `customer_service`;
CREATE TABLE IF NOT EXISTS `customer_service` (
  `Empid` int NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Mobile` int DEFAULT NULL,
  PRIMARY KEY (`Empid`)
);
-- --------------------------------------------------------
--
-- Table structure for table `daily`
--
DROP TABLE IF EXISTS `daily`;
CREATE TABLE IF NOT EXISTS `daily` (
  `Rid` int NOT NULL,
  `Sdate` date DEFAULT NULL,
  `Amount` int DEFAULT NULL,
  `Nodays` int DEFAULT NULL,
  `Vehicle_id` int DEFAULT NULL,
  `Dno` int DEFAULT NULL,
  PRIMARY KEY (`Rid`),
  KEY `Vehicle_id` (`Vehicle_id`),
  KEY `Dno` (`Dno`)
);
-- --------------------------------------------------------
--
-- Table structure for table `driver`
--
DROP TABLE IF EXISTS `driver`;
CREATE TABLE IF NOT EXISTS `driver` (`Dno` int NOT NULL, PRIMARY KEY (`Dno`));
-- --------------------------------------------------------
--
-- Table structure for table `feedback`
--
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `Fid` int NOT NULL,
  `Message` varchar(140) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Empid` int DEFAULT NULL,
  `Cid` int DEFAULT NULL,
  PRIMARY KEY (`Fid`),
  KEY `Empid` (`Empid`),
  KEY `Cid` (`Cid`)
);
-- --------------------------------------------------------
--
-- Table structure for table `individual`
--
DROP TABLE IF EXISTS `individual`;
CREATE TABLE IF NOT EXISTS `individual` (
  `Ssn` int NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Owner_id` int DEFAULT NULL,
  PRIMARY KEY (`Ssn`),
  KEY `Owner_id` (`Owner_id`)
);
-- --------------------------------------------------------
--
-- Table structure for table `members`
--
DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `Mid` int NOT NULL,
  `Mtype` varchar(20) DEFAULT NULL,
  `Discount` int DEFAULT NULL,
  `Duration` varchar(10) DEFAULT NULL,
  `Cid` int DEFAULT NULL,
  PRIMARY KEY (`Mid`),
  KEY `Cid` (`Cid`)
);
-- --------------------------------------------------------
--
-- Table structure for table `owner`
--
DROP TABLE IF EXISTS `owner`;
CREATE TABLE IF NOT EXISTS `owner` (
  `Owner_id` int NOT NULL,
  PRIMARY KEY (`Owner_id`)
);
-- --------------------------------------------------------
--
-- Table structure for table `owns`
--
CREATE TABLE IF NOT EXISTS `owns` (
  `Owner_id` int NOT NULL,
  `Vehicle_id` int DEFAULT NULL,
  PRIMARY KEY (`Owner_id`)
);
-- --------------------------------------------------------
--
-- Table structure for table `rates`
--
CREATE TABLE IF NOT EXISTS `rates` (
  `id` int NOT NULL,
  `Ctype` int NOT NULL,
  `Drate` int NOT NULL
);
-- --------------------------------------------------------
--
-- Table structure for table `rental`
CREATE TABLE IF NOT EXISTS `rental` (
  `Rid` int NOT NULL,
  `Rdate` date DEFAULT NULL,
  `Amount` int DEFAULT NULL,
  `Dno` int DEFAULT NULL,
  `Vehicle_id` int DEFAULT NULL,
  `Noweeks` int NOT NULL,
  `Nodays` int NOT NULL,
  `Ctype` varchar(25) NOT NULL,
  PRIMARY KEY (`Rid`),
  KEY `Vehicle_id` (`Vehicle_id`),
  KEY `Dno` (`Dno`)
);
-- --------------------------------------------------------
--
-- Table structure for table `self`
--
CREATE TABLE IF NOT EXISTS `self` (
  `Dlno` int NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Insurance_no` int DEFAULT NULL,
  `Dno` int DEFAULT NULL,
  PRIMARY KEY (`Dlno`),
  KEY `Dno` (`Dno`)
);
-- --------------------------------------------------------
--
-- Table structure for table `weekly`
--
CREATE TABLE IF NOT EXISTS `weekly` (
  `Rid` int NOT NULL,
  `Sdate` date DEFAULT NULL,
  `Amount` int DEFAULT NULL,
  `Noweeks` int DEFAULT NULL,
  `Vehicle_id` int DEFAULT NULL,
  `Dno` int DEFAULT NULL,
  PRIMARY KEY (`Rid`),
  KEY `Vehicle_id` (`Vehicle_id`),
  KEY `Dno` (`Dno`)
);
COMMIT;
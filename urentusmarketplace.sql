-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.6.14 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for urentusmarketplace
CREATE DATABASE IF NOT EXISTS `urentusmarketplace` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `urentusmarketplace`;


-- Dumping structure for table urentusmarketplace.attachmenttool
CREATE TABLE IF NOT EXISTS `attachmenttool` (
  `attachmenttoolcode` varchar(50) NOT NULL,
  `attachmenttoolname` varchar(50) NOT NULL,
  `createddate` datetime DEFAULT NULL,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`attachmenttoolcode`),
  KEY `brandname` (`attachmenttoolname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table urentusmarketplace.attachmenttool: ~2 rows (approximately)
DELETE FROM `attachmenttool`;
/*!40000 ALTER TABLE `attachmenttool` DISABLE KEYS */;
INSERT INTO `attachmenttool` (`attachmenttoolcode`, `attachmenttoolname`, `createddate`, `createdip`, `createdby`) VALUES
	('Blades', 'Blades', '2014-04-20 18:53:53', NULL, NULL),
	('Bucket', 'Bucket', '2014-04-20 18:53:56', NULL, NULL);
/*!40000 ALTER TABLE `attachmenttool` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.brand
CREATE TABLE IF NOT EXISTS `brand` (
  `brandcode` varchar(50) NOT NULL,
  `brandname` varchar(50) NOT NULL,
  `createddate` datetime DEFAULT NULL,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`brandcode`),
  KEY `brandname` (`brandname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.brand: ~2 rows (approximately)
DELETE FROM `brand`;
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` (`brandcode`, `brandname`, `createddate`, `createdip`, `createdby`) VALUES
	('Caterpillar', 'Caterpillar', '2014-04-20 18:53:56', NULL, NULL),
	('Komatsu', 'Komatsu', '2014-04-20 18:53:53', NULL, NULL);
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.category
CREATE TABLE IF NOT EXISTS `category` (
  `categorycode` varchar(50) NOT NULL,
  `categoryname` varchar(50) NOT NULL,
  `createddate` datetime DEFAULT NULL,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`categorycode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.category: ~4 rows (approximately)
DELETE FROM `category`;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`categorycode`, `categoryname`, `createddate`, `createdip`, `createdby`) VALUES
	('Backhoe', 'Backhoe', '2014-04-20 18:52:09', NULL, NULL),
	('Earthmoving', 'Earthmoving', '2014-04-20 21:23:59', NULL, NULL),
	('Excavator', 'Excavator', '2014-04-20 18:51:32', NULL, NULL),
	('Power Generation', 'Power Generation', '2014-04-24 16:54:22', NULL, NULL);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.city
CREATE TABLE IF NOT EXISTS `city` (
  `citycode` varchar(50) NOT NULL,
  `provincecode` varchar(50) DEFAULT NULL,
  `cityname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`citycode`),
  KEY `provincecode` (`provincecode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.city: ~2 rows (approximately)
DELETE FROM `city`;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` (`citycode`, `provincecode`, `cityname`) VALUES
	('Aceh 1', 'Aceh', 'Aceh 1'),
	('Padang', 'Sumatera Barat', 'Padang');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.ci_sessions: ~1 rows (approximately)
DELETE FROM `ci_sessions`;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
	('823bc3f80dd6e7591bf401fab67349bb', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', 1398679768, 'a:2:{s:9:"user_data";s:0:"";s:7:"product";a:3:{i:0;a:7:{s:12:"product_name";s:11:"Equipment 1";s:10:"id_product";s:12:"RVFQTUFDXzE-";s:11:"number_item";s:3:"100";s:8:"location";s:7:"Jakarta";s:10:"start_date";s:14:"April 28, 2014";s:8:"end_date";s:12:"May 10, 2014";s:12:"special_note";s:0:"";}i:1;a:7:{s:12:"product_name";s:11:"Equipment 1";s:10:"id_product";s:12:"RVFQTUFDXzE-";s:11:"number_item";s:3:"100";s:8:"location";s:7:"Jakarta";s:10:"start_date";s:14:"April 28, 2014";s:8:"end_date";s:12:"May 10, 2014";s:12:"special_note";s:0:"";}i:2;a:8:{s:12:"product_name";s:11:"Equipment 1";s:10:"id_product";s:12:"RVFQTUFDXzE-";s:11:"number_item";s:3:"100";s:8:"location";s:7:"Jakarta";s:10:"start_date";s:14:"April 28, 2014";s:8:"end_date";s:12:"May 10, 2014";s:6:"submit";s:11:"Add to Cart";s:12:"special_note";s:0:"";}}}');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.company
CREATE TABLE IF NOT EXISTS `company` (
  `idcompany` int(10) NOT NULL AUTO_INCREMENT,
  `companycode` varchar(50) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `companytype` varchar(50) NOT NULL,
  `companylogo` varchar(50) DEFAULT NULL,
  `companyaddress` varchar(200) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `companycity` varchar(50) DEFAULT NULL,
  `companyprovince` varchar(50) DEFAULT NULL,
  `companyofficephone` varchar(50) DEFAULT NULL,
  `companyofficenumber` varchar(50) DEFAULT NULL,
  `companyofficemap` varchar(50) DEFAULT NULL,
  `membershiptype` varchar(50) DEFAULT NULL,
  `companyemailaddress` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `isactive` smallint(6) NOT NULL DEFAULT '1',
  `createddate` datetime DEFAULT NULL,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updatedip` varchar(50) DEFAULT NULL,
  `updatedby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idcompany`),
  UNIQUE KEY `companycode` (`companycode`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table urentusmarketplace.company: ~3 rows (approximately)
DELETE FROM `company`;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` (`idcompany`, `companycode`, `companyname`, `companytype`, `companylogo`, `companyaddress`, `zipcode`, `companycity`, `companyprovince`, `companyofficephone`, `companyofficenumber`, `companyofficemap`, `membershiptype`, `companyemailaddress`, `website`, `isactive`, `createddate`, `createdip`, `createdby`, `updateddate`, `updatedip`, `updatedby`) VALUES
	(1, 'ABCD', 'PT ABCD', 'renter', NULL, 'Jalan', NULL, 'City', 'Province', '123', '321', NULL, NULL, NULL, NULL, 1, '2014-04-20 14:28:17', NULL, NULL, '2014-04-20 14:28:18', NULL, NULL),
	(2, '', 'PT. CHAKRA JAWARA', 'renter', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2014-04-21 13:25:07', '::1', 'Admin', NULL, NULL, NULL),
	(6, 'PTTU', 'PT TRAKINDO UTAMA', 'renter', NULL, 'CILANDAK', '12345', 'Aceh 1', 'Aceh', NULL, '1000', NULL, NULL, 'INFO@TRAKINDO.CO.ID', 'WWW.TRAKINDO.CO.ID', 0, '2014-04-22 05:42:19', '::1', 'Admin', NULL, NULL, NULL);
/*!40000 ALTER TABLE `company` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.componentindustry
CREATE TABLE IF NOT EXISTS `componentindustry` (
  `idcomponentindustry` int(10) NOT NULL AUTO_INCREMENT,
  `idcomponent` int(10) NOT NULL,
  `industrycode` varchar(50) NOT NULL,
  PRIMARY KEY (`idcomponentindustry`),
  KEY `idequipment` (`idcomponent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table urentusmarketplace.componentindustry: ~0 rows (approximately)
DELETE FROM `componentindustry`;
/*!40000 ALTER TABLE `componentindustry` DISABLE KEYS */;
/*!40000 ALTER TABLE `componentindustry` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.componentlocation
CREATE TABLE IF NOT EXISTS `componentlocation` (
  `idcomponentlocation` int(10) NOT NULL AUTO_INCREMENT,
  `idcomponent` int(10) NOT NULL,
  `region` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcomponentlocation`),
  KEY `idequipment` (`idcomponent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table urentusmarketplace.componentlocation: ~0 rows (approximately)
DELETE FROM `componentlocation`;
/*!40000 ALTER TABLE `componentlocation` DISABLE KEYS */;
/*!40000 ALTER TABLE `componentlocation` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.componentpart
CREATE TABLE IF NOT EXISTS `componentpart` (
  `idcomponent` int(10) NOT NULL AUTO_INCREMENT,
  `componentname` varchar(50) NOT NULL,
  `componentnumber` varchar(50) NOT NULL,
  `idrenter` int(10) NOT NULL,
  `filteroptioncode` varchar(50) NOT NULL,
  `searchpreference` varchar(50) NOT NULL,
  `industry` varchar(50) DEFAULT NULL,
  `categorycode` varchar(50) NOT NULL,
  `subcategorycode` varchar(50) NOT NULL,
  `attachmenttoolcode` varchar(50) DEFAULT NULL,
  `brandcode` varchar(50) NOT NULL,
  `modelcode` varchar(50) NOT NULL,
  `capacity` varchar(50) DEFAULT NULL,
  `yearmade` varchar(50) DEFAULT NULL,
  `hourmeter` varchar(50) DEFAULT NULL,
  `specification` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `region` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updatedip` varchar(50) DEFAULT NULL,
  `updatedby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idcomponent`),
  KEY `categorycode` (`categorycode`),
  KEY `subcategorycode` (`subcategorycode`),
  KEY `filteroptioncode` (`filteroptioncode`),
  KEY `idrenter` (`idrenter`),
  KEY `searchpreference` (`searchpreference`),
  KEY `attachmenttoolcode` (`attachmenttoolcode`),
  KEY `brandcode` (`brandcode`),
  KEY `modelcode` (`modelcode`),
  KEY `capacity` (`capacity`),
  KEY `yearmade` (`yearmade`),
  KEY `hourmeter` (`hourmeter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table urentusmarketplace.componentpart: ~0 rows (approximately)
DELETE FROM `componentpart`;
/*!40000 ALTER TABLE `componentpart` DISABLE KEYS */;
/*!40000 ALTER TABLE `componentpart` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.componentphoto
CREATE TABLE IF NOT EXISTS `componentphoto` (
  `idcomponentphoto` int(10) NOT NULL AUTO_INCREMENT,
  `idcomponent` int(10) NOT NULL,
  `originalfilename` varchar(50) DEFAULT NULL,
  `thumbnailfilename` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idcomponentphoto`),
  KEY `idequipment` (`idcomponent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table urentusmarketplace.componentphoto: ~0 rows (approximately)
DELETE FROM `componentphoto`;
/*!40000 ALTER TABLE `componentphoto` DISABLE KEYS */;
/*!40000 ALTER TABLE `componentphoto` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.directory
CREATE TABLE IF NOT EXISTS `directory` (
  `iddirectory` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) DEFAULT NULL,
  `companyname` varchar(50) DEFAULT NULL,
  `companyaddress` varchar(200) DEFAULT NULL,
  `officenumber` varchar(20) DEFAULT NULL,
  `cellphonenumber` varchar(50) DEFAULT NULL,
  `partnershiptype` varchar(50) DEFAULT NULL,
  `information` text,
  `contactname` varchar(50) DEFAULT NULL,
  `contactnumber` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`iddirectory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table urentusmarketplace.directory: ~0 rows (approximately)
DELETE FROM `directory`;
/*!40000 ALTER TABLE `directory` DISABLE KEYS */;
/*!40000 ALTER TABLE `directory` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.filteroption
CREATE TABLE IF NOT EXISTS `filteroption` (
  `filteroptioncode` varchar(50) NOT NULL,
  `filteroptionname` varchar(50) NOT NULL,
  PRIMARY KEY (`filteroptioncode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.filteroption: ~3 rows (approximately)
DELETE FROM `filteroption`;
/*!40000 ALTER TABLE `filteroption` DISABLE KEYS */;
INSERT INTO `filteroption` (`filteroptioncode`, `filteroptionname`) VALUES
	('COMPAR', 'Component And Part'),
	('EQPMAC', 'Equipment And Machinery'),
	('TOLATC', 'Tools And Attachment');
/*!40000 ALTER TABLE `filteroption` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.industry
CREATE TABLE IF NOT EXISTS `industry` (
  `industrycode` varchar(50) NOT NULL,
  `industryname` varchar(50) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`industrycode`),
  KEY `industryname` (`industryname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.industry: ~4 rows (approximately)
DELETE FROM `industry`;
/*!40000 ALTER TABLE `industry` DISABLE KEYS */;
INSERT INTO `industry` (`industrycode`, `industryname`, `createddate`, `createdip`, `createdby`) VALUES
	('Agriculture', 'Agriculture', '2014-04-25 11:13:43', NULL, NULL),
	('Forestry', 'Forestry', '2014-04-25 11:13:59', NULL, NULL),
	('Mining', 'Mining', '2014-04-25 11:13:26', NULL, NULL),
	('Oil & Gas', 'Oil & Gas', '2014-04-25 11:13:27', NULL, NULL);
/*!40000 ALTER TABLE `industry` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.inquiry
CREATE TABLE IF NOT EXISTS `inquiry` (
  `idinquiry` int(10) NOT NULL AUTO_INCREMENT,
  `companycode` varchar(50) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `companyorderno` int(10) NOT NULL,
  `statusinquiry` varchar(50) NOT NULL,
  `freerequest` text,
  `createddate` datetime DEFAULT NULL,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedip` varchar(50) DEFAULT NULL,
  `updatedby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idinquiry`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.inquiry: ~0 rows (approximately)
DELETE FROM `inquiry`;
/*!40000 ALTER TABLE `inquiry` DISABLE KEYS */;
/*!40000 ALTER TABLE `inquiry` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.inquiryproduct
CREATE TABLE IF NOT EXISTS `inquiryproduct` (
  `idproductinquiry` int(10) NOT NULL AUTO_INCREMENT,
  `productname` varchar(50) NOT NULL,
  `idrenter` int(10) NOT NULL,
  `filteroptioncode` varchar(50) NOT NULL,
  `componentnumber` varchar(50) NOT NULL,
  `searchpreference` varchar(50) NOT NULL,
  `industry` varchar(50) DEFAULT NULL,
  `categorycode` varchar(50) NOT NULL,
  `subcategorycode` varchar(50) NOT NULL,
  `attachmenttoolcode` varchar(50) DEFAULT NULL,
  `brandcode` varchar(50) NOT NULL,
  `modelcode` varchar(50) NOT NULL,
  `capacity` varchar(50) DEFAULT NULL,
  `yearmade` varchar(50) DEFAULT NULL,
  `hourmeter` varchar(50) DEFAULT NULL,
  `specification` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `region` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updatedip` varchar(50) DEFAULT NULL,
  `updatedby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idproductinquiry`),
  KEY `categorycode` (`categorycode`),
  KEY `subcategorycode` (`subcategorycode`),
  KEY `filteroptioncode` (`filteroptioncode`),
  KEY `idrenter` (`idrenter`),
  KEY `searchpreference` (`searchpreference`),
  KEY `attachmenttoolcode` (`attachmenttoolcode`),
  KEY `brandcode` (`brandcode`),
  KEY `modelcode` (`modelcode`),
  KEY `capacity` (`capacity`),
  KEY `yearmade` (`yearmade`),
  KEY `hourmeter` (`hourmeter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table urentusmarketplace.inquiryproduct: ~0 rows (approximately)
DELETE FROM `inquiryproduct`;
/*!40000 ALTER TABLE `inquiryproduct` DISABLE KEYS */;
/*!40000 ALTER TABLE `inquiryproduct` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.iteminquiry
CREATE TABLE IF NOT EXISTS `iteminquiry` (
  `iditeminquiry` int(10) NOT NULL AUTO_INCREMENT,
  `idinquiry` int(10) DEFAULT NULL,
  `idproductinquiry` int(10) DEFAULT NULL,
  `numberofitem` int(10) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `startdateuse` date DEFAULT NULL,
  `enddateuse` date DEFAULT NULL,
  `specialnoterequest` text,
  PRIMARY KEY (`iditeminquiry`),
  KEY `idinquiry` (`idinquiry`),
  KEY `idproductinquiry` (`idproductinquiry`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.iteminquiry: ~0 rows (approximately)
DELETE FROM `iteminquiry`;
/*!40000 ALTER TABLE `iteminquiry` DISABLE KEYS */;
/*!40000 ALTER TABLE `iteminquiry` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.model
CREATE TABLE IF NOT EXISTS `model` (
  `modelcode` varchar(50) NOT NULL,
  `modelname` varchar(50) NOT NULL,
  `brandcode` varchar(50) NOT NULL,
  `categorycode` varchar(50) DEFAULT NULL,
  `subcategorycode` varchar(50) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`modelcode`),
  KEY `brandcode` (`brandcode`),
  KEY `categorycode` (`categorycode`),
  KEY `subcategorycode` (`subcategorycode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.model: ~0 rows (approximately)
DELETE FROM `model`;
/*!40000 ALTER TABLE `model` DISABLE KEYS */;
/*!40000 ALTER TABLE `model` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.partnership
CREATE TABLE IF NOT EXISTS `partnership` (
  `idpartnership` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) DEFAULT NULL,
  `companyname` varchar(50) DEFAULT NULL,
  `companyaddress` varchar(200) DEFAULT NULL,
  `officenumber` varchar(20) DEFAULT NULL,
  `cellphonenumber` varchar(50) DEFAULT NULL,
  `partnershiptype` varchar(50) DEFAULT NULL,
  `information` text,
  `contactname` varchar(50) DEFAULT NULL,
  `contactnumber` varchar(50) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedip` varchar(50) DEFAULT NULL,
  `updatedby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idpartnership`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.partnership: ~0 rows (approximately)
DELETE FROM `partnership`;
/*!40000 ALTER TABLE `partnership` DISABLE KEYS */;
/*!40000 ALTER TABLE `partnership` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.productindustry
CREATE TABLE IF NOT EXISTS `productindustry` (
  `idproductindustry` int(10) NOT NULL AUTO_INCREMENT,
  `idequipment` int(10) NOT NULL,
  `industrycode` varchar(50) NOT NULL,
  PRIMARY KEY (`idproductindustry`),
  KEY `idequipment` (`idequipment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.productindustry: ~0 rows (approximately)
DELETE FROM `productindustry`;
/*!40000 ALTER TABLE `productindustry` DISABLE KEYS */;
/*!40000 ALTER TABLE `productindustry` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.productitem
CREATE TABLE IF NOT EXISTS `productitem` (
  `idequipment` int(10) NOT NULL AUTO_INCREMENT,
  `equipmentname` varchar(50) NOT NULL,
  `companycode` varchar(50) NOT NULL,
  `filteroptioncode` varchar(50) NOT NULL,
  `searchpreference` varchar(50) NOT NULL,
  `industry` varchar(50) DEFAULT NULL,
  `categorycode` varchar(50) NOT NULL,
  `subcategorycode` varchar(50) NOT NULL,
  `attachmenttoolcode` varchar(50) DEFAULT NULL,
  `brandcode` varchar(50) NOT NULL,
  `modelcode` varchar(50) NOT NULL,
  `capacity` varchar(50) DEFAULT NULL,
  `yearmade` varchar(50) DEFAULT NULL,
  `hourmeter` varchar(50) DEFAULT NULL,
  `specification` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `region` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `mainphoto_original` varchar(50) DEFAULT NULL,
  `mainphoto_middle` varchar(50) DEFAULT NULL,
  `mainphoto_thumb` varchar(50) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updatedip` varchar(50) DEFAULT NULL,
  `updatedby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idequipment`),
  KEY `categorycode` (`categorycode`),
  KEY `subcategorycode` (`subcategorycode`),
  KEY `filteroptioncode` (`filteroptioncode`),
  KEY `idrenter` (`companycode`),
  KEY `searchpreference` (`searchpreference`),
  KEY `attachmenttoolcode` (`attachmenttoolcode`),
  KEY `brandcode` (`brandcode`),
  KEY `modelcode` (`modelcode`),
  KEY `capacity` (`capacity`),
  KEY `yearmade` (`yearmade`),
  KEY `hourmeter` (`hourmeter`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.productitem: ~5 rows (approximately)
DELETE FROM `productitem`;
/*!40000 ALTER TABLE `productitem` DISABLE KEYS */;
INSERT INTO `productitem` (`idequipment`, `equipmentname`, `companycode`, `filteroptioncode`, `searchpreference`, `industry`, `categorycode`, `subcategorycode`, `attachmenttoolcode`, `brandcode`, `modelcode`, `capacity`, `yearmade`, `hourmeter`, `specification`, `description`, `price`, `region`, `province`, `city`, `mainphoto_original`, `mainphoto_middle`, `mainphoto_thumb`, `createddate`, `createdip`, `createdby`, `updateddate`, `updatedip`, `updatedby`) VALUES
	(1, 'Equipment 1', 'PTTU', 'EQPMAC', 'New', NULL, 'Backhoe', '', NULL, 'Caterpillar', '', NULL, NULL, NULL, 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lo', 'description lorem ipsum', 0, NULL, NULL, NULL, 'trakindo-big.gif', 'trakindo.gif', 'trakindo.gif', '2014-04-22 18:04:13', NULL, NULL, '2014-04-26 23:47:56', NULL, NULL),
	(2, 'Equipment 2', 'PTTU', 'TOLSPC', 'New', NULL, 'Backhoe', '', NULL, 'Caterpillar', '', NULL, NULL, NULL, 'lorem ipsum', '', 0, NULL, NULL, NULL, 'video1.jpg', 'video1.jpg', 'video1.jpg', '2014-04-22 18:04:13', NULL, NULL, '2014-04-27 00:05:56', NULL, NULL),
	(3, 'Equipment 2', 'PTTU', 'EQPMAC', 'New', NULL, 'Backhoe', '', NULL, 'Caterpillar', '', NULL, NULL, NULL, 'lorem ipsum', '', 0, NULL, NULL, NULL, 'video1.jpg', 'video1-middle.jpg', 'video1.jpg', '2014-04-22 18:04:13', NULL, NULL, '2014-04-27 11:26:56', NULL, NULL),
	(4, 'Equipment 3', 'PTTU', 'EQPMAC', 'New', NULL, 'Backhoe', '', NULL, 'Caterpillar', '', NULL, NULL, NULL, 'lorem ipsum', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2014-04-22 18:04:13', NULL, NULL, '2014-04-26 17:42:53', NULL, NULL),
	(5, 'Equipment 4', 'PTTU', 'EQPMAC', 'New', NULL, 'Backhoe', '', NULL, 'Caterpillar', '', NULL, NULL, NULL, 'lorem ipsum', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2014-04-22 18:04:13', NULL, NULL, '2014-04-26 17:42:55', NULL, NULL);
/*!40000 ALTER TABLE `productitem` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.productlocation
CREATE TABLE IF NOT EXISTS `productlocation` (
  `idproductlocation` int(10) NOT NULL AUTO_INCREMENT,
  `idequipment` int(10) NOT NULL,
  `region` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`idproductlocation`),
  KEY `idequipment` (`idequipment`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.productlocation: ~2 rows (approximately)
DELETE FROM `productlocation`;
/*!40000 ALTER TABLE `productlocation` DISABLE KEYS */;
INSERT INTO `productlocation` (`idproductlocation`, `idequipment`, `region`, `province`, `city`, `stock`) VALUES
	(1, 1, 'Jawa', 'Jawa Timur', 'Surabaya', 3),
	(2, 1, 'Jawa', 'Jawa Timur', 'Malang', 2),
	(3, 1, 'Sumater', 'Sumater Barat', 'Padang', 3);
/*!40000 ALTER TABLE `productlocation` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.productphoto
CREATE TABLE IF NOT EXISTS `productphoto` (
  `idphoto` int(10) NOT NULL AUTO_INCREMENT,
  `idequipment` int(10) NOT NULL,
  `originalfilename` varchar(50) DEFAULT NULL,
  `middlefilename` varchar(50) DEFAULT NULL,
  `thumbnailfilename` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idphoto`),
  KEY `idequipment` (`idequipment`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.productphoto: ~1 rows (approximately)
DELETE FROM `productphoto`;
/*!40000 ALTER TABLE `productphoto` DISABLE KEYS */;
INSERT INTO `productphoto` (`idphoto`, `idequipment`, `originalfilename`, `middlefilename`, `thumbnailfilename`) VALUES
	(1, 1, 'trakindo-big.gif', NULL, 'trakindo-big.gif');
/*!40000 ALTER TABLE `productphoto` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.province
CREATE TABLE IF NOT EXISTS `province` (
  `provincecode` varchar(50) NOT NULL,
  `regioncode` varchar(50) DEFAULT NULL,
  `provincename` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`provincecode`),
  KEY `regioncode` (`regioncode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.province: ~4 rows (approximately)
DELETE FROM `province`;
/*!40000 ALTER TABLE `province` DISABLE KEYS */;
INSERT INTO `province` (`provincecode`, `regioncode`, `provincename`) VALUES
	('Aceh', 'Sumatera', 'Aceh'),
	('Sumatera Barat', 'Sumatera', 'Sumatera Barat'),
	('Sumatera Selatan', 'Sumatera', 'Sumatera Selatan'),
	('Sumatera Utara', 'Sumatera', 'Sumatera Utara');
/*!40000 ALTER TABLE `province` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.region
CREATE TABLE IF NOT EXISTS `region` (
  `regioncode` varchar(50) NOT NULL,
  `regionname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`regioncode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.region: ~0 rows (approximately)
DELETE FROM `region`;
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
/*!40000 ALTER TABLE `region` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.rentaltender
CREATE TABLE IF NOT EXISTS `rentaltender` (
  `idrentaltender` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) DEFAULT NULL,
  `companyname` varchar(50) DEFAULT NULL,
  `companyaddress` varchar(200) DEFAULT NULL,
  `officenumber` varchar(20) DEFAULT NULL,
  `cellphonenumber` varchar(50) DEFAULT NULL,
  `partnershiptype` varchar(50) DEFAULT NULL,
  `information` text,
  `contactname` varchar(50) DEFAULT NULL,
  `contactnumber` varchar(50) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedip` varchar(50) DEFAULT NULL,
  `updatedby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idrentaltender`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table urentusmarketplace.rentaltender: ~0 rows (approximately)
DELETE FROM `rentaltender`;
/*!40000 ALTER TABLE `rentaltender` DISABLE KEYS */;
/*!40000 ALTER TABLE `rentaltender` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.rentaltenderitem
CREATE TABLE IF NOT EXISTS `rentaltenderitem` (
  `idrentaltenderitem` int(10) NOT NULL AUTO_INCREMENT,
  `idrentaltender` int(10) DEFAULT NULL,
  `productname` varchar(200) DEFAULT NULL,
  `specification` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idrentaltenderitem`),
  KEY `idrentaltender` (`idrentaltender`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.rentaltenderitem: ~0 rows (approximately)
DELETE FROM `rentaltenderitem`;
/*!40000 ALTER TABLE `rentaltenderitem` DISABLE KEYS */;
/*!40000 ALTER TABLE `rentaltenderitem` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.rentee
CREATE TABLE IF NOT EXISTS `rentee` (
  `idrentee` int(10) NOT NULL AUTO_INCREMENT,
  `companyname` varchar(50) NOT NULL,
  `companylogo` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `officephone` varchar(50) DEFAULT NULL,
  `officenumber` varchar(50) DEFAULT NULL,
  `companyofficemap` varchar(50) DEFAULT NULL,
  `membershiptype` varchar(50) DEFAULT NULL,
  `emailaddress` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `isactive` smallint(6) NOT NULL DEFAULT '1',
  `createddate` datetime DEFAULT NULL,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updatedip` varchar(50) DEFAULT NULL,
  `updatedby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idrentee`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.rentee: ~0 rows (approximately)
DELETE FROM `rentee`;
/*!40000 ALTER TABLE `rentee` DISABLE KEYS */;
/*!40000 ALTER TABLE `rentee` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.renter
CREATE TABLE IF NOT EXISTS `renter` (
  `idrenter` int(10) NOT NULL AUTO_INCREMENT,
  `companyname` varchar(50) NOT NULL,
  `companylogo` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `officephone` varchar(50) DEFAULT NULL,
  `officenumber` varchar(50) DEFAULT NULL,
  `companyofficemap` varchar(50) DEFAULT NULL,
  `membershiptype` varchar(50) DEFAULT NULL,
  `emailaddress` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `isactive` smallint(6) NOT NULL DEFAULT '1',
  `createddate` datetime DEFAULT NULL,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updatedip` varchar(50) DEFAULT NULL,
  `updatedby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idrenter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table urentusmarketplace.renter: ~0 rows (approximately)
DELETE FROM `renter`;
/*!40000 ALTER TABLE `renter` DISABLE KEYS */;
/*!40000 ALTER TABLE `renter` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.searchpreference
CREATE TABLE IF NOT EXISTS `searchpreference` (
  `searchpreferencecode` varchar(50) NOT NULL,
  `searchpreferencename` varchar(50) NOT NULL,
  `createddate` datetime DEFAULT NULL,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`searchpreferencecode`),
  KEY `searchpreferencename` (`searchpreferencename`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.searchpreference: ~0 rows (approximately)
DELETE FROM `searchpreference`;
/*!40000 ALTER TABLE `searchpreference` DISABLE KEYS */;
/*!40000 ALTER TABLE `searchpreference` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.subcategory
CREATE TABLE IF NOT EXISTS `subcategory` (
  `subcategorycode` varchar(50) NOT NULL,
  `categorycode` varchar(50) NOT NULL,
  `subcategoryname` varchar(50) NOT NULL,
  `createddate` datetime DEFAULT NULL,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`subcategorycode`),
  KEY `categorycode` (`categorycode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.subcategory: ~2 rows (approximately)
DELETE FROM `subcategory`;
/*!40000 ALTER TABLE `subcategory` DISABLE KEYS */;
INSERT INTO `subcategory` (`subcategorycode`, `categorycode`, `subcategoryname`, `createddate`, `createdip`, `createdby`) VALUES
	('Sub Backhoe', 'Backhoe', 'Sub Backhoe', '2014-04-23 13:39:01', NULL, NULL),
	('Sub Backhoe2', 'Backhoe', 'Sub Backhoe', '2014-04-23 13:39:01', NULL, NULL);
/*!40000 ALTER TABLE `subcategory` ENABLE KEYS */;


-- Dumping structure for table urentusmarketplace.useraccess
CREATE TABLE IF NOT EXISTS `useraccess` (
  `iduseraccess` int(10) NOT NULL AUTO_INCREMENT,
  `companytype` varchar(50) DEFAULT NULL COMMENT 'Renter, Rentee, UrentUs',
  `companycode` varchar(50) DEFAULT NULL,
  `companyname` varchar(50) DEFAULT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `emailaddress` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `isactive` smallint(2) NOT NULL DEFAULT '1',
  `createddate` datetime DEFAULT NULL,
  `createdip` varchar(50) DEFAULT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updatedip` varchar(50) DEFAULT NULL,
  `updatedby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`iduseraccess`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table urentusmarketplace.useraccess: ~0 rows (approximately)
DELETE FROM `useraccess`;
/*!40000 ALTER TABLE `useraccess` DISABLE KEYS */;
INSERT INTO `useraccess` (`iduseraccess`, `companytype`, `companycode`, `companyname`, `userid`, `password`, `fullname`, `emailaddress`, `usertype`, `isactive`, `createddate`, `createdip`, `createdby`, `updateddate`, `updatedip`, `updatedby`) VALUES
	(1, 'renter', 'ABCD', 'PT ABCD', 'rhantoro@gmail.com', '202cb962ac59075b964b07152d234b70', 'RIA HANTORO', 'rhantoro@gmail.com', 'SUPERUSER', 1, '2014-04-20 11:18:24', NULL, NULL, '2014-04-20 14:27:48', NULL, NULL),
	(2, 'renter', 'PTTU', 'PT TRAKINDO UTAMA', 'TORO@SEWATAMA.COM', '1234', 'TORO', 'TORO@SEWATAMA.COM', 'SUPERUSER', 0, '2014-04-22 05:42:19', '::1', 'TORO@SEWATAMA.COM', NULL, NULL, NULL);
/*!40000 ALTER TABLE `useraccess` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

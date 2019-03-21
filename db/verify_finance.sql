-- MySQL dump 10.13  Distrib 5.5.56, for Linux (x86_64)
--
-- Host: localhost    Database: thebank
-- ------------------------------------------------------
-- Server version	5.5.56-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `verify_finance`
--

DROP TABLE IF EXISTS `verify_finance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verify_finance` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` text,
  `service` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='chung minh tai chinh';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verify_finance`
--

LOCK TABLES `verify_finance` WRITE;
/*!40000 ALTER TABLE `verify_finance` DISABLE KEYS */;
INSERT INTO `verify_finance` VALUES (1,'Sao kê lương',7),(2,'Giấy ĐKKD/giấy xác nhận KD/Hợp đồng thuê sạp',7),(3,'Giấy xác nhận lương/bảng lương/phiếu lương',7),(4,'Hợp đồng bảo hiểm và hóa đơn/biên lai',7),(5,'Quyết định hưởng chế độ hưu trí/Giấy chứng nhận hưu trí/Trợ cấp BHXH',7),(6,'Hóa đơn điện nước/điện thoại/internet/truyền hình cáp',7),(7,'Thẻ bảo hiểm y tế',7),(8,'Thẻ bảo hiểm healthcare',7),(9,'Sổ tiết kiệm/tài khoản tiền gửi',7),(10,'Hợp đồng/đăng ký sử dụng xe',7),(11,'Hợp đồng điện máy',7),(12,'Giấy tờ có giá khác',7);
/*!40000 ALTER TABLE `verify_finance` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-20 19:11:55

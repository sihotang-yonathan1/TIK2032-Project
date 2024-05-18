-- MariaDB dump 10.19  Distrib 10.11.2-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: tugas_php_web
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `modified_date` date DEFAULT NULL,
  `content` text DEFAULT NULL,
  `author` text DEFAULT NULL,
  PRIMARY KEY (`id`,`title`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES
(1,'Performa single core Intel Meteor Lake lebih rendah dibanding pendahulunya','2024-03-23',' <p>Munculnya Intel Meteor Lake membuat orang bertanya-tanya mengenai performa yang diberikan. Berdasarkan hasil sampel yang diberikan Intel dalam model laptop Asus Zenbook, terdapat sedikit penurunan performa single corenya. </p><p>Pihak Intel sendiri membuat CPU ini dengan fokus untuk menambah efisiensi daya dibanding generasi-generasi sebelumnya.</p><p>Hal ini terbukti dari berbagai benchmark yang telah dibuat, memang benar terjadi peningkatan oerforma per watt-nya, namun performa ini masih kalah dengan laptop yang arsitektur ARM seperti Apple M1</p><p>Hadirnya laptop ini, diharapkan membuat laptop dapat digunakan untuk program yang berat namun dapat dipakai dalam jangka waktu yang lebih lama</p>','Yonathan Sihotang'),
(2,'One UI 6.1 rilis','2024-03-23','<p>One UI adalah UI yang dibuat oleh Samsung untuk hp buatan mereka. Kali ini, mereka membuat update baru yaitu One UI 6.1 yang memungkinkan perangkat flagship 2023 mendapat update yang menarik seperti Circle to Search yang sebelumnya hadir pada Jajaran S24. Fitur ini sudah dirilis sejak Maret 2024. Pada update ini, terdapat beberapa perbaikan dari update-update berikutnya</p>','Yonathan Sihotang'),
(3,'LPCAMM2 jadi standar baru RAM','2024-03-23','<p>RAM merupakan salah satu bagian penting dari komponen komputer. Pada umumnya terdapat dua jenis fisik RAM yang umum digunakan sehari-hari.Yang pertama adalah RAM yang bertipe SODIMM dengan tipe RAM DDR. Ram tipe ini dapat diganti dengan mudah karena pada perangkatnya terdapat slot RAM.Meskipun RAM ini mudah untuk dipasang, RAM dengan jenis fisik seperti ini memiliki kecepatan yang lebih rendah karena harus menyusuri jalur data yang lebih panjang Jenis fisik RAM lainnya adalah RAM untuk penggunaan mobile yakni LPDDR.LPDDR adalah jenis RAM yang disolder ke perangkat sehingga tidak dapat diganti. Keuntungan dari jenis ini adalah jumlah daya yang digunakan lebih kecil dan kecepatan data lebih cepat karena memiliki jalur data yang lebih pendek. </p><p>Dengan adanya keterbatasan dari kemudahan untuk upgrade dan kecepatan RAM, beberapa vendor berusaha untuk membuat jenis baru.Salah satunya adalah DELL. Sebelumnya mereka mengumumkan jenis fisik baru, yaitu CAMM. Saat ini, model CAMM hanya terdapat pada model-model tertentu laptop buatan DELL. Berikutnya, Samsung mengembangkan model dari DELL menjadi lebih kecil, model ini disebut oleh Samsung sebagai LPCAMM. Model ini lebih kecil dari CAMM, namun lebih cepat dan efisien dibanding model CAMM buatan DELL. Kemudian, Micron mengembangkan model baru yang bernama LPCAMM2 dan dipamerkan CES2024. JEDEC kemudian menyetujui LPCAMM2 sebagai model standar baru RAM berikutnya\r\n</p>','Yonathan Sihotang');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-18 13:32:54

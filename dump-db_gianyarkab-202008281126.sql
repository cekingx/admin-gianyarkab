-- MySQL dump 10.13  Distrib 8.0.21, for Linux (x86_64)
--
-- Host: localhost    Database: db_gianyarkab
-- ------------------------------------------------------
-- Server version	8.0.21-0ubuntu0.20.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ref_alamat_instansi`
--

DROP TABLE IF EXISTS `ref_alamat_instansi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ref_alamat_instansi` (
  `alamat_instansi_id` int NOT NULL AUTO_INCREMENT,
  `alamat_instansi_nama` varchar(255) DEFAULT NULL,
  `alamat_instansi_alamat` varchar(255) DEFAULT NULL,
  `alamat_instansi_telp` varchar(255) DEFAULT NULL,
  `alamat_instansi_email` varchar(255) DEFAULT NULL,
  `alamat_instansi_user_id` bigint DEFAULT NULL,
  PRIMARY KEY (`alamat_instansi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_alamat_instansi`
--

LOCK TABLES `ref_alamat_instansi` WRITE;
/*!40000 ALTER TABLE `ref_alamat_instansi` DISABLE KEYS */;
INSERT INTO `ref_alamat_instansi` VALUES (1,'Diskominfo','Jln. Kebo Iwa','0812345','diskominfo@gianyarkab.go.id',NULL);
/*!40000 ALTER TABLE `ref_alamat_instansi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_jabatan_bupati`
--

DROP TABLE IF EXISTS `ref_jabatan_bupati`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ref_jabatan_bupati` (
  `jabatan_bupati_id` int NOT NULL AUTO_INCREMENT,
  `jabatan_bupati_nama` varchar(255) DEFAULT NULL,
  `jabatan_bupati_foto` varchar(255) DEFAULT NULL,
  `jabatan_bupati_masa_jabatan` varchar(255) DEFAULT NULL,
  `jabatan_bupati_tanggal` datetime DEFAULT NULL,
  `jabatan_bupati_user_id` bigint DEFAULT NULL,
  PRIMARY KEY (`jabatan_bupati_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_jabatan_bupati`
--

LOCK TABLES `ref_jabatan_bupati` WRITE;
/*!40000 ALTER TABLE `ref_jabatan_bupati` DISABLE KEYS */;
INSERT INTO `ref_jabatan_bupati` VALUES (1,'Dirga','default.jpg','2020-2025',NULL,NULL),(4,'Kris Sanjaya','kris-sanjaya-20200827-120808.jpg','2030 - 2045','2020-08-27 12:46:08',NULL);
/*!40000 ALTER TABLE `ref_jabatan_bupati` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_jenis_laporan`
--

DROP TABLE IF EXISTS `ref_jenis_laporan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ref_jenis_laporan` (
  `jenis_laporan_id` int NOT NULL AUTO_INCREMENT,
  `jenis_laporan_nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`jenis_laporan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_jenis_laporan`
--

LOCK TABLES `ref_jenis_laporan` WRITE;
/*!40000 ALTER TABLE `ref_jenis_laporan` DISABLE KEYS */;
/*!40000 ALTER TABLE `ref_jenis_laporan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_sub_domain`
--

DROP TABLE IF EXISTS `ref_sub_domain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ref_sub_domain` (
  `sub_domain_id` int NOT NULL AUTO_INCREMENT,
  `sub_domain_link` varchar(255) DEFAULT NULL,
  `sub_domain_deskripsi` varchar(255) DEFAULT NULL,
  `sub_domain_user_id` bigint DEFAULT NULL,
  PRIMARY KEY (`sub_domain_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_sub_domain`
--

LOCK TABLES `ref_sub_domain` WRITE;
/*!40000 ALTER TABLE `ref_sub_domain` DISABLE KEYS */;
INSERT INTO `ref_sub_domain` VALUES (1,'gianyarkab.go.id','Website resmi kabupaten gianyarsssss',NULL);
/*!40000 ALTER TABLE `ref_sub_domain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ta_artikel_berita`
--

DROP TABLE IF EXISTS `ta_artikel_berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ta_artikel_berita` (
  `artikel_berita_id` int NOT NULL AUTO_INCREMENT,
  `artikel_berita_judul` varchar(255) DEFAULT NULL,
  `artikel_berita_isi` text,
  `artikel_berita_foto` varchar(255) DEFAULT NULL,
  `artikel_berita_tanggal` datetime DEFAULT NULL,
  `artikel_berita_user_id` bigint DEFAULT NULL,
  PRIMARY KEY (`artikel_berita_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ta_artikel_berita`
--

LOCK TABLES `ta_artikel_berita` WRITE;
/*!40000 ALTER TABLE `ta_artikel_berita` DISABLE KEYS */;
/*!40000 ALTER TABLE `ta_artikel_berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ta_kegiatan`
--

DROP TABLE IF EXISTS `ta_kegiatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ta_kegiatan` (
  `kegiatan_id` int NOT NULL AUTO_INCREMENT,
  `kegiatan_judul` varchar(255) DEFAULT NULL,
  `kegiatan_deskripsi` text,
  `kegiatan_foto` varchar(255) DEFAULT NULL,
  `kegiatan_tanggal` datetime DEFAULT NULL,
  `kegiatan_user_id` bigint DEFAULT NULL,
  PRIMARY KEY (`kegiatan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ta_kegiatan`
--

LOCK TABLES `ta_kegiatan` WRITE;
/*!40000 ALTER TABLE `ta_kegiatan` DISABLE KEYS */;
/*!40000 ALTER TABLE `ta_kegiatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ta_kontak_person`
--

DROP TABLE IF EXISTS `ta_kontak_person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ta_kontak_person` (
  `kontak_person_id` int NOT NULL AUTO_INCREMENT,
  `kontak_person_nama` varchar(255) DEFAULT NULL,
  `kontak_person_alamat` varchar(255) DEFAULT NULL,
  `kontak_person_email` varchar(255) DEFAULT NULL,
  `kontak_person_judul` varchar(255) DEFAULT NULL,
  `kontak_person_isi_aduan` text,
  `kontak_person_tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`kontak_person_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ta_kontak_person`
--

LOCK TABLES `ta_kontak_person` WRITE;
/*!40000 ALTER TABLE `ta_kontak_person` DISABLE KEYS */;
INSERT INTO `ta_kontak_person` VALUES (1,'Dirga','Sidan Kelod','dirga@example.com','Internet lemot','Internet gianyar sangat lambat',NULL);
/*!40000 ALTER TABLE `ta_kontak_person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ta_kritik_saran`
--

DROP TABLE IF EXISTS `ta_kritik_saran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ta_kritik_saran` (
  `kritik_saran_id` int NOT NULL AUTO_INCREMENT,
  `kritik_saran_judul` varchar(255) DEFAULT NULL,
  `kritik_saran_isi` text,
  `kritik_saran_tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`kritik_saran_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ta_kritik_saran`
--

LOCK TABLES `ta_kritik_saran` WRITE;
/*!40000 ALTER TABLE `ta_kritik_saran` DISABLE KEYS */;
/*!40000 ALTER TABLE `ta_kritik_saran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ta_laporan`
--

DROP TABLE IF EXISTS `ta_laporan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ta_laporan` (
  `laporan_id` int NOT NULL AUTO_INCREMENT,
  `laporan_jenis_laporan_id` bigint DEFAULT NULL,
  `laporan_nama` varchar(255) DEFAULT NULL,
  `laporan_file` varchar(255) DEFAULT NULL,
  `laporan_tanggal` datetime DEFAULT NULL,
  `laporan_user_id` bigint DEFAULT NULL,
  PRIMARY KEY (`laporan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ta_laporan`
--

LOCK TABLES `ta_laporan` WRITE;
/*!40000 ALTER TABLE `ta_laporan` DISABLE KEYS */;
/*!40000 ALTER TABLE `ta_laporan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ta_media_cetak`
--

DROP TABLE IF EXISTS `ta_media_cetak`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ta_media_cetak` (
  `media_cetak_id` int NOT NULL AUTO_INCREMENT,
  `media_cetak_nama` varchar(255) DEFAULT NULL,
  `media_cetak_file` varchar(255) DEFAULT NULL,
  `media_cetak_tanggal` datetime DEFAULT NULL,
  `media_cetak_user_id` bigint DEFAULT NULL,
  PRIMARY KEY (`media_cetak_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ta_media_cetak`
--

LOCK TABLES `ta_media_cetak` WRITE;
/*!40000 ALTER TABLE `ta_media_cetak` DISABLE KEYS */;
/*!40000 ALTER TABLE `ta_media_cetak` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ta_pengumuman`
--

DROP TABLE IF EXISTS `ta_pengumuman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ta_pengumuman` (
  `pengumuman_judul` varchar(255) DEFAULT NULL,
  `pengumuman_tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `pengumuman_user_id` bigint DEFAULT NULL,
  `pengumuman_id` int NOT NULL AUTO_INCREMENT,
  `pengumuman_isi` text,
  PRIMARY KEY (`pengumuman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ta_pengumuman`
--

LOCK TABLES `ta_pengumuman` WRITE;
/*!40000 ALTER TABLE `ta_pengumuman` DISABLE KEYS */;
INSERT INTO `ta_pengumuman` VALUES ('Lelang mobil','2020-08-24 09:41:56',NULL,1,'Lelang mobil lama');
/*!40000 ALTER TABLE `ta_pengumuman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_gianyarkab'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-28 11:26:42

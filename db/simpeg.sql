/*
SQLyog Ultimate v11.2 (64 bit)
MySQL - 5.7.19 : Database - simpeg
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `golongan` */

DROP TABLE IF EXISTS `golongan`;

CREATE TABLE `golongan` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `golongan` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `golongan` */

insert  into `golongan`(`kode`,`golongan`) values (1,'I'),(2,'II'),(3,'III'),(4,'IV');

/*Table structure for table `jeniscuti` */

DROP TABLE IF EXISTS `jeniscuti`;

CREATE TABLE `jeniscuti` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `jeniscuti` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `jeniscuti` */

insert  into `jeniscuti`(`kode`,`jeniscuti`) values (1,'Cuti Tahunan'),(2,'Cuti Besar'),(3,'Cuti Sakit'),(4,'Cuti Melahirkan'),(5,'Cuti Alasan Penting'),(6,'Cuti Diluar Tanggungan Negara');

/*Table structure for table `jenispegawai` */

DROP TABLE IF EXISTS `jenispegawai`;

CREATE TABLE `jenispegawai` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `jenispegawai` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `jenispegawai` */

insert  into `jenispegawai`(`kode`,`jenispegawai`) values (1,'PNS Pusat'),(2,'PNS Daerah');

/*Table structure for table `kedudukanpegawai` */

DROP TABLE IF EXISTS `kedudukanpegawai`;

CREATE TABLE `kedudukanpegawai` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `kedudukanpegawai` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `kedudukanpegawai` */

insert  into `kedudukanpegawai`(`kode`,`kedudukanpegawai`) values (1,'Pegawai Aktif'),(2,'Pejabat Negara'),(3,'Cuti Diluar Tanggungan Negara'),(4,'Penerima Uang Tunggu'),(5,'Bebas Tugas'),(6,'Tugas Belajar'),(7,'Pemberhentian Sementara'),(8,'Pensiun'),(9,'Meninggal Dunia');

/*Table structure for table `pangkat` */

DROP TABLE IF EXISTS `pangkat`;

CREATE TABLE `pangkat` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `namapangkat` varchar(50) NOT NULL,
  `kodegolongan` int(11) NOT NULL,
  `koderuang` int(11) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `pangkat` */

insert  into `pangkat`(`kode`,`namapangkat`,`kodegolongan`,`koderuang`) values (1,'Pembina Utama',4,5),(2,'Pembina Utama Madya',4,4),(3,'Pembina Utama Muda',4,3),(4,'Pembina Tingkat I',4,2),(5,'Pembina',4,1),(6,'Penata Tingkat I',3,4),(7,'Penata',3,3),(8,'Penata Muda Tingkat I',3,2),(9,'Penata Muda',3,1),(10,'Pengatur Tingkat I',2,4),(11,'Pengatur',2,3),(12,'Pengatur Muda Tingkat I',2,2),(13,'Pengatur Muda',2,1),(14,'Juru Tingkat I',1,4),(15,'Juru',1,2),(16,'Juru Muda Tingkat I',1,2),(17,'Juru Muda',1,1);

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` enum('L','P') NOT NULL,
  `golongandarah` enum('O','A','B','AB') NOT NULL,
  `statusnikah` enum('Belum Menikah','Menikah','Janda','Duda','Bercerai') NOT NULL,
  `agama` enum('Islam','Kristen Protestan','Kristen Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `kodestatuspegawai` int(11) NOT NULL,
  `kodejenispegawai` int(11) NOT NULL,
  `kodekedudukanpegawai` int(11) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nokarpeg` varchar(100) NOT NULL,
  `noaskes` varchar(50) NOT NULL,
  `notaspen` varchar(50) NOT NULL,
  `nokariskarsu` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `dibuatpada` datetime NOT NULL,
  `dibuatoleh` int(11) NOT NULL,
  `diubahpada` datetime DEFAULT NULL,
  `diubaholeh` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `pegawai` */

/*Table structure for table `pegawaicuti` */

DROP TABLE IF EXISTS `pegawaicuti`;

CREATE TABLE `pegawaicuti` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `kodepegawai` int(11) NOT NULL,
  `kodecuti` int(11) NOT NULL,
  `mulaicuti` date NOT NULL,
  `akhircuti` date NOT NULL,
  `pengajuan` enum('1','0') NOT NULL DEFAULT '1',
  `batal` enum('1','0') DEFAULT '0',
  `disetujui` enum('1','0') DEFAULT '0',
  `disetujuitanggal` datetime DEFAULT NULL,
  `ditolak` enum('1','0') DEFAULT '0',
  `ditolaktanggal` datetime DEFAULT NULL,
  `dibuatpada` datetime NOT NULL,
  `dibuatoleh` int(11) NOT NULL,
  `diubahpada` datetime DEFAULT NULL,
  `diubaholeh` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `pegawaicuti` */

/*Table structure for table `pengguna` */

DROP TABLE IF EXISTS `pengguna`;

CREATE TABLE `pengguna` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `namapengguna` varchar(100) NOT NULL,
  `katakunci` varchar(100) NOT NULL,
  `kodepegawai` int(11) NOT NULL,
  `kodeperan` int(11) NOT NULL,
  `dibuatpada` datetime NOT NULL,
  `dibuatoleh` int(11) NOT NULL,
  `diubahpada` datetime DEFAULT NULL,
  `diubaholeh` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `pengguna` */

insert  into `pengguna`(`kode`,`namapengguna`,`katakunci`,`kodepegawai`,`kodeperan`,`dibuatpada`,`dibuatoleh`,`diubahpada`,`diubaholeh`) values (1,'admin','ee10c315eba2c75b403ea99136f5b48d',0,1,'2018-05-13 13:03:58',0,NULL,NULL);

/*Table structure for table `peran` */

DROP TABLE IF EXISTS `peran`;

CREATE TABLE `peran` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `peran` varchar(100) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `peran` */

insert  into `peran`(`kode`,`peran`) values (1,'Superadmin'),(2,'Admin'),(3,'Pegawai');

/*Table structure for table `ruang` */

DROP TABLE IF EXISTS `ruang`;

CREATE TABLE `ruang` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `ruang` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `ruang` */

insert  into `ruang`(`kode`,`ruang`) values (1,'a'),(2,'b'),(3,'c'),(4,'d'),(5,'e');

/*Table structure for table `statuspegawai` */

DROP TABLE IF EXISTS `statuspegawai`;

CREATE TABLE `statuspegawai` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `statuspegawai` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `statuspegawai` */

insert  into `statuspegawai`(`kode`,`statuspegawai`) values (1,'CPNS'),(2,'PNS');

/*Table structure for table `subsubunitkerja` */

DROP TABLE IF EXISTS `subsubunitkerja`;

CREATE TABLE `subsubunitkerja` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `subsubunitkerja` varchar(100) NOT NULL,
  `kodesubunitkerja` int(11) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=555 DEFAULT CHARSET=utf8;

/*Data for the table `subsubunitkerja` */

insert  into `subsubunitkerja`(`kode`,`subsubunitkerja`,`kodesubunitkerja`) values (1,'Sub Bagian Perencanaan dan Keuangan',1),(2,'Sub Bagian Umum dan Kepegawaian',1),(3,'Sub Bagian Pemerintahan Umum',7),(4,'Sub Bagian Otonomi Daerah',7),(5,'Sub Bagian Kerjasama',0),(6,'Sub Bagian Bina Sosial',8),(7,'Sub Bagian Bina Mental',8),(8,'Sub Bagian Bina Masyarakat',8),(9,'Sub Bagian Bantuan Hukum dan HAM',9),(10,'Sub Bagian Fasilitas Produk Hukum Daerah',9),(11,'Sub Bagian Dokumentasi Informasi dan Penyuluhan Hukum',9),(12,'Sub Bagian Administrasi Pembangunan',11),(13,'Sub Bagian Pengelolaan Pelayanan Pengadaan',11),(14,'Sub Bagian Evaluasi dan Pelaporan Pembangunan',11),(15,'Sub Bagian Bina Produksi Daerah',12),(16,'Sub Bagian Pengembangan Usaha Daerah',12),(17,'Sub Bagian Sarana Perekonomian',12),(18,'Sub Bagian Publikasi dan Pemberitaan',13),(19,'Sub Bagian Informasi dan Dokumentasi',13),(20,'Sub Bagian Protokol',13),(21,'Sub Bagian Kelembagaan',15),(22,'Sub Bagian Ketatalaksanaan dan Pelayanan Publik',15),(23,'Sub Bagian Pendayagunaan Sumber Daya Aparatur dan Kepegawaian Sekretariat',13),(24,'Sub Bagian Tata Usaha',16),(25,'Sub Bagian Rumah Tangga',16),(26,'Sub Bagian Perlengkapan',16),(27,'Sub Bagian Administrasi Pengendalian Keuangan',17),(28,'Sub Bagian Analisis Pengembangan Keuangan',17),(29,'Sub Bagian Keuangan Sekretariat',17),(30,'Sub Bagian TU dan Kepegawaian',21),(33,'Sub Bagian Humas dan RT',21),(34,'Sub Bagian Persidangan dan Risalah',22),(35,'Sub Bagian Rapat dan Perundang-Undangan',22),(36,'Sub Bagian Perencanaan, Monitoring, Evaluasi dan Pelaporan',23),(37,'Sub Bagian Administrasi Keuangan',23),(38,'Sub Bagian Perencanaan dan Keuangan',25),(39,'Sub Bagian Umum dan Kepegawaian',25),(40,'Sub Bagian Pembinaan dan Kesejahteraan',26),(41,'Sub Bagian Pemindahan, Pemberhentian dan Pensiun',26),(42,'Sub Bagian Pengangkatan dan Kepangkatan',26),(43,'Sub Bagian Pengembangan Karier',27),(44,'Sub Bagian Pendidikan san Pelatihan',27),(45,'Sub Bagian Pengelolaan Data dan Informasi',27),(46,'Sub Bagian Perencanaan, Evaluasi dan Pelaporan',28),(47,'Sub Bagian Umum dan Kepegawaian',28),(48,'Sub Bagian Keuangan',28),(49,'Sub Bidang Bina Ideologi',29),(50,'Sub Bidang Wawasan Kebangsaan',29),(51,'Sub Bidang Kewaspadaan Dini dan Pengawasan Orang dan Lembaga Asing',30),(52,'Sub Bidang Penanganan Konflik',30),(53,'Sub Bidang Ketahanan Seni, Budaya, Agama dan Kemasyarakatan',31),(54,'Sub Bidang Ketahanan Ekonomi',31),(55,'Sub Bidang Kelembagaan dan Pendidikan Politik',32),(56,'Sub Bidang Implementasi Politik dan Fasilitasi Pemilu',32),(57,'Sub Bagian Perencanaan dan Keuangan',33),(58,'Sub Bagian Umum dan Kepegawaian',33),(59,'Sub Bidang Pelayanan Pengolahan Data dan Informasi',34),(60,'Sub Bidang Penetapan Pajak',34),(61,'Sub Bidang Keberatan Pajak, Perencanaan dan Evaluasi Pendapatan',34),(62,'Sub Bidang Penyusunan Anggaran',35),(63,'Sub Bidang Administrasi Anggaran dan Perbendaharaan',35),(64,'Sub Bidang Perbendaharaan',35),(65,'Sub Bidang Akuntasi Anggaran',36),(66,'Sub Bidang Akuntansi Keuangan',36),(67,'Sub Bidang Evaluasi, Pengendalian dan Pelaporan',36),(68,'Sub Bidang Perencanaan dan Pengadaan',37),(69,'Sub Bidang Pemberdayaan',37),(70,'Sub Bidang Penatausahaan dan Pengamanan',37),(71,'Sub Bagian Perencanaan dan Keuangan',38),(72,'Sub Bagian Umum dan Kepegawaian',38),(73,'Sub Bidang Program Kerja',38),(74,'Sub Bidang Inovasi DaerahSub Bidang Pengendalian dan Evaluasi',39),(75,'Sub Bidang Pembangunan Manusia',40),(76,'Sub Bidang Kesejahteraan Masyarakat',40),(77,'Sub Bidang Sosial Budaya',40),(78,'Sub Bidang Ekonomi',41),(79,'Sub Bidang Sarana Prasarana Perkotaan',41),(80,'Sub Bidang Pengembangan Wilayah',41),(81,'Sub Bagian Perencanaan dan Keuangan',42),(82,'Sub Bagian Umum dan Kepegawaian',42),(83,'Seksi Kebudayaan dan Kesenian Tradisional',43),(84,'Seksi Sejarah, Cagar Budaya dan Permuseuman',43),(85,'Seksi Destinasi dan Pemasaran Pariwisata',44),(86,'Seksi Pengembangan Ekonomi Kreatif dan Sumber Daya Manusia',44),(87,'Sub Bagian Perencanaan dan Keuangan',45),(88,'Sub Bagian Umum dan Kepegawaian',45),(89,'Seksi Kepemudaan',46),(90,'Seksi Kepramukaan',46),(91,'Seksi Pembibitan dan Pembinaan Olahraga',47),(92,'Seksi Pengembangan Pemasyarakatan Olahraga',47),(93,'Sub Bagian Perencanaan dan Keuangan',48),(94,'Sub Bagian Umum dan Kepegawaian',48),(95,'Seksi Identitas Penduduk',49),(96,'Seksi Pindah Datang dan Pendataan Penduduk',49),(97,'Seksi Kelahiran dan Kematian',50),(98,'Seksi Perkawinan, Perceraian, Perubahan Status Anak dan Pewarganegaraan',50),(99,'Seksi Pengelolaan Informasi Administrasi Kependudukan',51),(100,'Seksi Kerjasama dan Inovasi Pelayanan',51),(101,'Sub Bagian Perencanaan dan Keuangan',52),(102,'Sub Bagian Umum dan Kepegawaian',52),(103,'Seksi Kesehatan Keluarga dan Gizi',53),(104,'Seksi Kesehatan Lingkungan dan Kesehatan Kerja',53),(105,'Seksi Promosi Kesehatan dan Pemberdayaan Kesehatan',53),(106,'Seksi Surveilans, Karantina Kesehatan dan Imunisasi',54),(107,'Seksi Pengendalian Penyakit Tidak Menular dan Kesehatan Jiwa',54),(108,'Seksi Pengendalian Penyakit Menular',54),(109,'Seksi Pelayanan dan Pembiayaan Kesehatan',55),(110,'Seksi Farmasi, Makanan dan Minuman dan Perbekalan Kesehatan',55),(111,'Seksi Penelitian dan Pengembangan, Sumber Daya Manusia dan Perizinan Kesehatan',55),(112,'UPT Klinik Paru Masyarakat',56),(113,'UPT Instalasi Farmasi',56),(114,'UPT Jaminan Kesehatan Masyarakat',56),(115,'UPT Puskesmas Cebongan',56),(116,'UPT Puskesmas Kalicacing',56),(117,'UPT Puskeemas Mangunsari',56),(118,'UPT Puskesmas Sidorejo Kidul',56),(119,'UPT Puskesmas Sidorejo Lor',56),(120,'UPT Puskesmas Tegalrejo',56),(121,'Sub Bagian Perencanaan dan Keuangan',57),(122,'Sub Bagian Umum dan Kepegawaian',57),(123,'Seksi Layanan Data dan Informasi',58),(124,'Seksi Jejaring Komunikasi Publik',58),(125,'Seksi Infrastruktur',59),(126,'Seksi Sistem Informasi',59),(127,'Seksi Statistik',60),(128,'Seksi Persandian',60),(129,'Sub Bagian Perencanaan dan Keuangan',61),(130,'Sub Bagian Umum dan Kepegawaian',61),(131,'Seksi Kelembagaan dan Pengembangan Koperasi',62),(132,'Seksi Pengawasan Koperasi',62),(133,'Seksi Pemberdayaan Usaha Kecil dan Menengah',63),(134,'Seksi Pengembangan dan Pengawasan Usaha Kecil Menengah',63),(135,'Sub Bagian Perencanaan dan Keuangan',64),(136,'Sub Bagian Umum dan Kepegawaian',64),(137,'Seksi Pengamanan, Pengendalian dan Pengembangan Kapasitas Lingkungan',65),(138,'Seksi Pengawasan dan Pengendalian Dampak Lingkungan',65),(139,'Seksi Pengelolaan Kebersihan',66),(140,'Seksi Pengembangan Sarana dan Prasarana Persampahan',66),(141,'Seksi Pertamanan dan Konservasi',67),(142,'Seksi Penerangan Jalan Umum',67),(143,'Sub Bagian Perencanaan dan Keuangan',69),(144,'Sub Bagian Umum dan Kepegawaian',69),(145,'Seksi Ketersediaan dan Kerawanan Pangan',70),(146,'Seksi Distribusi Pangan',70),(147,'Seksi Konsumsi dan Penganekaragaman Pangan',71),(148,'Seksi Keamanan Pangan',71),(149,'Sub Bagian Perencanaan dan Keuangan',72),(150,'Sub Bagian Umum dan Kepegawaian',72),(151,'Seksi Perencanaan dan Pemanfaatan Ruang',73),(152,'Seksi Pengendalian Ruang',73),(153,'Seksi Perencanaan dan Pengendalian Jalan dan Jembatan',74),(154,'Seksi Pemeliharaan Jalan dan Jembatan',74),(155,'Seksi Pembangunan dan Peningkatan Jalan dan Jembatan',74),(156,'Seksi Perencanaan dan Pengendalian Prasaranan Perairan',75),(157,'Seksi Operasi dan Pemeliharaan Prasarana Perairan',75),(158,'Seksi Pembangunan dan Peningkatan Prasarana Perairan',75),(159,'Seksi Perencanaan dan Pengendalian Gedung',76),(160,'Seksi Pembangunan dan Rehabilitasi Gedung',76),(161,'Seksi Pembinaan Jasa Konstruksi',76),(162,'Sub Bagian Perencanaan dan Keuangan',77),(163,'Sub Bagian Umum dan Kepegawaian',77),(164,'Seksi Pengarusutamaan Gender',78),(165,'Seksi Perlindungan dan Peningkatan Kualitas Hidup Perempuan',78),(166,'Seksi Perlindungan Anak',79),(167,'Seksi Pemenuh Hak Asasi Anak dan Peningkatan Kualitas Hidup Anak',79),(168,'Sub Bidang Perencanaan dan Keuangan',80),(169,'Sub Bagian Umum dan Kepegawaian',80),(170,'Seksi Promosi, Pengembangan dan Pelayanan Penanaman Modal',81),(171,'Seksi Pengendalian, Pengolahan Data, Pelaporan dan Sistem Informasi',81),(172,'Seksi Perizinan Tata Ruang, Pekerjaan Umum',82),(173,'Seksi Perizinan Lingkungan Hidup, Sosial, Kesehatan, Pendidikan dan Ketenagakerjaan',82),(174,'Seksi Perizinan Perindustrian, Perdagangan dan Koperasi',83),(175,'Seksi Perizinan Perhubungan, Komunikasi, Informatika, Pariwisata dan Pengaduan',83),(176,'Sub Bagian Perencanaan dan Keuangan',84),(177,'Sub Bagian Umum dan Kepegawaian',84),(178,'Seksi Pendidikan Anak Usia Dini',85),(179,'Seksi Pendidikan Non Formal',85),(180,'Seksi Kelembagaan dan Sarana Prasarana',85),(181,'Seksi Kurikulum dan Pengendalian Mutu',86),(182,'Seksi Kelembagaan dan Sarana Prasarana',86),(183,'Seksi Peserta Didik dan Pembangunan Karakter',86),(184,'Seksi Pendidik dan Tenaga Kependidikan Pendidikan Anak Usia Dini dan Pendidikan Non Formal',87),(185,'Seksi Pendidik dan Tenaga Kependidikan Sekolah Dasar',87),(186,'Seksi Pendidik dan Tenaga Kependidikan Sekolah Menengah Pertama',87),(187,'TK Aisyah 04 Argomulyo',88),(188,'TK Al Hidayah',88),(189,'TK An Nida Ledok',88),(190,'TK Kartika XII-25',88),(191,'TK Kristen 5',88),(192,'TK Pertiwi Tegalrejo',88),(193,'TK PGRI',88),(194,'TK Siwi Lestari I',88),(195,'TK Siwi Lestari II',88),(196,'TK Siwi Peni 6 Ledok',88),(197,'TK Tabita',88),(198,'TK Tarbiyatul Banin 25 Noborejo',88),(199,'TK Tarbiyatul Banin 57',88),(200,'TK Tarbiyatul Banin 58',88),(201,'TK Tarumatama Ledok',88),(202,'TK Negeri Pembina',88),(203,'SDN Ledok 01',88),(204,'SDN Ledok 02',88),(205,'SDN Ledok 04',88),(206,'SDN Ledok 05',88),(207,'SDN Ledok 06',88),(208,'SDN Ledok 07',88),(209,'SDN Tegalrejo 01',88),(210,'SDN Tegalrejo 02',88),(211,'SDN Tegalrejo 03',88),(212,'SDN Tegalrejo 04',88),(213,'SDN Tegalrejo 05',88),(214,'SDN Cebongan 01',88),(215,'SDN Cebongan 02',88),(216,'SDN Cebongan 03',88),(217,'SDN Kumpulrejo 01',88),(218,'SDN Kumpulrejo 02',88),(219,'SDN Kumpulrejo 03',88),(220,'SDN Noborejo 01',88),(221,'SDN Noborejo 02',88),(222,'SDN Randuacir 01',88),(223,'SDN Randuacir 02',88),(224,'SDN Rancuacir 03',88),(225,'SDLB Wantu Wirawan',88),(226,'TK Al Husna',89),(227,'TK Putra Jaya',89),(228,'TK Siwi Peni 5',89),(229,'TK Tarbiyatul Banin 19',89),(230,'TK Tarbiyatul Banin 45',89),(231,'TK Aisyiah Pembina',89),(232,'TK Kartika IV-39',89),(233,'TK Kemala Bayangkari 31',89),(234,'TK Kamulyan Terpadu',89),(235,'TK Tarbiyatul 60',89),(236,'TK Kartika IX-24',89),(237,'TK Kristen 02',89),(238,'SDN Dukuh 01',89),(239,'SDN Dukuh 02',89),(240,'SDN Dukuh 03',89),(241,'SDN Dukuh 04',89),(242,'SDN Dukuh 05',89),(243,'SDN Kalicacing 02',89),(244,'SDN Mangunsari 01',89),(245,'SDN Mangunsari 02',89),(246,'SDN Mangunsari 03',89),(247,'SDN Mangunsari 04',89),(248,'SDN Mangunsari 05',89),(249,'SDN Mangunsari 06',89),(250,'SDN Mangunsari 07',89),(251,'SDN Kecandran 01',89),(252,'SDLB Mangunsari',89),(253,'SD Muhamadiyah',89),(254,'SD Kristen 1',89),(255,'TK Al Azhar',90),(256,'TK Al Murtadho',90),(257,'TK Darma Wanita SMU 3',90),(258,'TK Kanisius Cungkup',90),(259,'TK Kristen 01 / Laboratorium',90),(260,'TK Mardi Siwi Kauman Kidul',90),(261,'TK Sultan Fatah',90),(262,'TK Sinar Nyata Sidorejo Lor',90),(263,'TK Siwi Peni II',90),(264,'TK Tarbiyatul Banin 02',90),(265,'TK Tarbiyatul Banin 09',90),(266,'TK Trisula Perwari',90),(267,'TK An Nuur',90),(268,'TK Xaverius',90),(269,'TK Perintis Blotongan',90),(270,'TK At Thohiriyyah I',90),(271,'TK PGRI 02',90),(272,'TK Pertiwi Sidorejo Lor',90),(273,'TK Aisyah Bustanul Athfal 5',90),(274,'SDN Blotongan 01',90),(275,'SDN Blotongan 02',90),(276,'SDN Blotongan 03',90),(277,'SDN Bugel 01',90),(278,'SDN Bugel 02',90),(279,'SDN Kauman Kidul',90),(280,'SDN Pulutan 01',90),(281,'SDN Pulutan 02',90),(282,'SDN Sidorejolor 01',90),(283,'SDN Sidorejolor 02',90),(284,'SDN Sidorejolor 03',90),(285,'SDN Sidorejolor 04',90),(286,'SDN Sidorejolor 05',90),(287,'SDN Sidorejolor 06',90),(288,'SDN Sidorejolor 07',90),(289,'SDN Salatiga 01',90),(290,'SDN Salatiga 02',90),(291,'SDN Salatiga 03',90),(292,'SDN Salatiga 04',90),(293,'SDN Salatiga 05',90),(294,'SDN Salatiga 06',90),(295,'SDN Salatiga 08',90),(296,'SDN Salatiga 09',90),(297,'SDN Salatiga 10',90),(298,'SDN Salatiga 12',90),(299,'SD Al Azhar',90),(300,'SD Marsudirini',90),(301,'SD Kanisius Cungkup',90),(302,'SD Kristen 2 / Laboratorium',90),(303,'TK Aisyah 03',91),(304,'TK Miftahul Jannah',91),(305,'TK Tarbiyatul Banin 03',91),(306,'TK Tarbiyatul Banin 22',91),(307,'TK Tarbiyatul Banin 24',91),(308,'TK Tarumatama Canden',91),(309,'TK Tarumatama IV',91),(310,'TK Tarumatama Kalioso',91),(311,'TK Tunas Rimba',91),(312,'TK Sejahtera Loka',91),(313,'TK Si Buyung',91),(314,'TK Permata',91),(315,'TK Pertiwi 01',91),(316,'TK Pertiwi 02',91),(317,'TK Pertiwi Tingkir Tengah',91),(318,'TK Kanisiun Gendongan',91),(319,'TK Kristen 3',91),(320,'TK Tarbiyatul Aulad Islahul Muna',91),(321,'TK Al Fitroh',91),(322,'SDN Gendongan 01',91),(323,'SDN Gendongan 02',91),(324,'SDN Gendongan 03',91),(325,'SDN Kutowinangun 01',91),(326,'SDN Kutowinangun 03',91),(327,'SDN Kutowinangun 04',91),(328,'SDN Kutowinangun 05',91),(329,'SDN Kutowinangun 07',91),(330,'SDN Kutowinangun 08',91),(331,'SDN Kutowinangun 09',91),(332,'SDN Kutowinangun 10',91),(333,'SDN Kutowinangun 11',91),(334,'SDN Kutowinangun 12',91),(335,'SDN Kalibening',91),(336,'SDN Sidorejo Kidul 01',91),(337,'SDN Sidorejo Kidul 02',91),(338,'SDN Sidorejo Kidul 03',91),(339,'SDN Tingkir Lor 01',91),(340,'SDN Tingkir Lor 02',91),(341,'SDN Tingkir Tengah 01',91),(342,'SDN Tingkir Tengah 02',91),(343,'SD Kanisius Gendongan',91),(344,'SD Kristen 3',91),(345,'SD Kristen 4',91),(346,'TK Mubaroh',91),(347,'SMP Negeri 1',92),(348,'SMP Negeri 2',92),(349,'SMP Negeri 3',92),(350,'SMP Negeri 4',92),(351,'SMP Negeri 5',92),(352,'SMP Negeri 6',92),(353,'SMP Negeri 7',92),(354,'SMP Negeri 8',92),(355,'SMP Negeri 9',92),(356,'SMP Negeri 10',92),(357,'MTSN',92),(358,'SMP Al Azhar',92),(359,'SMP muhammadiyah',92),(360,'SMP Islam Sultan Fatah',92),(361,'SMP Kristen 1',92),(362,'SMP Kristen 2',92),(363,'SMP Kristen 3',92),(364,'SMP Kristen 4',92),(365,'SMP Kristen Satya Wacana',92),(366,'SMP Pangudi Luhur',92),(367,'SMP Stella Matutina',92),(368,'SMP Sudirman II',92),(369,'MTs Yasinta',92),(370,'SMP Dharma Putera',92),(371,'SMPLB Wantu Wirawan',92),(372,'Sub Bagian Perencanaan dan Keuangan',94),(373,'Sub Bagian Umum dan Kepegawaian',94),(374,'Seksi advokasi dan Penggerak Pendayagunaan Petugas Lapangan Keluarga Berencana',95),(375,'Seksi Pengendalian Penduduk dan Informasi Keluarga',95),(376,'Seksi Jaminan dan Pembinaan Kesertaan Ber Keluarga Berencana',96),(377,'Seksi Ketahanan dan Kesejahteraan Keluarga',96),(378,'Sub Bagian Perencanaan dan Keuangan',97),(379,'Sub Bagian Umum dan Kepegawaian',97),(380,'Seksi Pengembangan',98),(381,'Seksi Usaha Perdagangan',98),(382,'Seksi Pengelolaan Pasar Tradisional',99),(383,'Seksi Penataan Pedagang Kaki Lima',100),(384,'Seksi Pengelolaan dan Pemberdayaan Pedagang Kaki Lima',99),(385,'Sub Bagian Perencanaan dan Keuangan',107),(386,'Sub Bagian Umum dan Kepegawaian',107),(387,'Seksi Manajemen dan Rekayasa Lalu Lintas',108),(388,'Seksi Bina Keselamatan dan Ketertiban Lalu Lintas',108),(389,'Seksi Pelayanan Angkutan dan Terminal',109),(390,'Seksi Kelaikan Kendaraan',109),(391,'Sub Bagian Perencanaan dan Keuangan',111),(392,'Sub Bagian Umum dan Kepegawaian',111),(393,'Seksi Pengembangan Industri',112),(394,'Seksi Sistem Informasi Industri',112),(395,'Seksi Hubungan Industrial dan Syarat Kerja',113),(396,'Seksi Penempatan Tenaga Kerja, Pelatihan dan Transmigrasi',113),(397,'Sub Bagian Perencanaan dan Keuangan',114),(398,'Sub Bagian Umum dan Kepegawaian',114),(399,'Seksi Layanan',115),(400,'Seksi Pengolahan dan Pelestarian',115),(401,'Seksi Akuisisi dan Pengolahan Arsip',116),(402,'Seksi Layanan dan Pelestarian',116),(403,'Seksi Pembinaan',117),(404,'Seksi Pengembangan dan Hubungan Antar Lembaga',117),(405,'Sub Bagian Perencanaan dan Keuangan',118),(406,'Sub Bagian Umum dan Kepegawaian',118),(407,'Seksi Produksi Tanaman Pangan dan Holtikultura',119),(408,'Seksi Sarana dan Prasarana Tanaman Pangan dan Holtikultura',119),(409,'Seksi Peternakan',120),(410,'Seksi Kesehatan Hewan dan Kesehatan Masyarakat Veteriner',120),(411,'Seksi Sumber Daya Pertanian dan Perikanan',121),(412,'Seksi Perikanan',121),(413,'Sub Bagian Perencanaan dan Keuangan',124),(414,'Sub Bagian Umum dan Kepegawaian',124),(415,'Seksi Penyediaan Perumahan',125),(416,'Seksi Perencanaan dan Penyerahan Prasarana, Sarana dan Utilitas',125),(417,'Seksi Legalitas dan Pemberdayaan Permukiman',126),(418,'Seksi Prasarana, Sarana dan Utilitas PSU',126),(419,'Seksi Penggunaan, Penggantian Kerugian dan Santunan',127),(420,'Seksi Penggunaan, Penggantian Kerugian dan Santunan',127),(421,'Seksi Pengawasan dan Pengendalian Pertanahan',127),(422,'Sub Bagian Perencanaan dan Keuangan',129),(423,'Sub Bagian Umum dan Kepegawaian',129),(424,'Seksi Kepahlawanan dan Restorasi Sosial',130),(425,'Seksi Pemberdayaan Sosial Kelembagaan Masyarakat',130),(426,'Seksi Rehabilitas Sosial Penyandang Cacat',131),(427,'Seksi Rehabilitas Sosial Tuna Sosial dan Korban Perdagangan Orang',131),(428,'Seksi Rehabilitasi Sosial Anak dan Usia Lanjut',131),(429,'Seksi Perlindungan Sosial Penanganan Korban Bencana',132),(430,'Seksi Identifikasi dan Penguatan Kapasitas Pengelolaan Data Fakir Miskin',132),(431,'Seksi Jaminan Sosial Keluarga',132),(432,'Sub Bagian Umum, Rumah Tangga dan Barang Milik Daerah',134),(433,'Sub Bagian Kepegawaian',134),(434,'Sub Bagian Hukum dan Kerjasama',134),(435,'Sub Bagian Penyusunan Anggaran dan Perbendaharaan',135),(436,'Sub Bagian Pendapatan',135),(437,'Sub Bagian Akuntansi dan Verifikasi',135),(438,'Sub Bagian Pendidikan dan Pelatihan',136),(439,'Sub Bagian Perencanaan Moitoring, Evaluasi dan Pelaporan',136),(440,'Sub Bagian Pemasaran dan hubungan Masyarakat',136),(441,'Seksi Medik Rawat Inap',138),(442,'Seksi Medik Rawat Jalan',138),(443,'Seksi Keperawatan Rawat Inap',139),(444,'Seksi Keperawatan Rawat Jalan',139),(445,'Seksi Penunjang Klinis',140),(446,'Seksi Penunjang Non Klinis',140),(447,'Sub Bagian Perencanaan dan Keuangan',141),(448,'Sub Bagian Umum dan Kepegawaian',141),(449,'Seksi Penegakan Perda dan Perwali',142),(450,'Seksi Penyelidikan, Penyidikan dan Penindakan',142),(451,'Seksi Ketertiban Umum, Operasional dan Pengendalian',143),(452,'Seksi Perlindungan Masyarakat',143),(453,'Seksi Pemadam Kebakaran',144),(454,'Seksi Penanganan Bencana',144),(455,'Sub Bagian Perencanaan dan Keuangan',145),(456,'Sub Bagian Umum dan Kepegawaian',145),(457,'Sekretariat Kelurahan Kutawinangun Kidul',150),(458,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Kutawinangun Kidul',150),(459,'Seksi Ekonomi dan Pembangunan Kelurahan Kutawinangun Kidul',150),(460,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Kutawinangun Kidul',150),(461,'Sekretariat Kelurahan Gendongan',151),(462,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Gendongan',151),(463,'Seksi Ekonomi dan Pembangunan Kelurahan Gendongan',151),(464,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Gendongan',151),(465,'Sekretariat Kelurahan Tingkir Lor',152),(466,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Tingkir Lor',152),(467,'Seksi Ekonomi dan Pembangunan Kelurahan Tingkir Lor',152),(468,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Tingkir Lor',152),(469,'Sekretariat Kelurahan Tingkir Tengah',153),(470,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Tingkir Tengah',153),(471,'Seksi Ekonomi dan Pembangunan Kelurahan Tingkir Tengah',153),(472,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Tingkir Tengah',153),(473,'Sekretariat Kelurahan Tingkir Kidul',154),(474,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Tingkir Kidul',154),(475,'Seksi Ekonomi dan Pembangunan Kelurahan Tingkir Kidul',154),(476,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Tingkir Kidul',154),(477,'Sekretariat Kelurahan Kalibening',155),(478,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Kalibening',155),(479,'Seksi Ekonomi dan Pembangunan Kelurahan Kalibening',155),(480,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Kalibening',155),(481,'Sekretariat Kelurahan Kutowinangun Lor',156),(482,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Kutowinangun Lor',156),(483,'Seksi Ekonomi dan Pembangunan Kelurahan Kutowinangun Lor',156),(484,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Kutowinangun Lor',156),(485,'Sub Bagian Perencanaan dan Keuangan',157),(486,'Sub Bagian Umum dan Kepegawaian',157),(487,'Sekretariat Kelurahan Salatiga',162),(488,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Salatiga',162),(489,'Seksi Ekonomi dan Pembangunan Kelurahan Salatiga',162),(490,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Salatiga',162),(491,'Sekretariat Kelurahan Sidorejo Lor',163),(492,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Sidorejo Lor',163),(493,'Seksi Ekonomi dan Pembangunan Kelurahan Sidorejo Lor',163),(494,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Sidorejo Lor',163),(495,'Sekretariat Kelurahan Kauman Kidul',164),(496,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Kauman Kidul',164),(497,'Seksi Ekonomi dan Pembangunan Kelurahan Kauman Kidul',164),(498,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Kauman Kidul',164),(499,'Sekretariat Kelurahan Pulutan',165),(500,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Pulutan',165),(501,'Seksi Ekonomi dan Pembangunan Kelurahan Pulutan',165),(502,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Pulutan',165),(503,'Sekretariat Kelurahan Blotongan',166),(504,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Blotongan',166),(505,'Seksi Ekonomi dan Pembangunan Kelurahan Blotongan',166),(506,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Blotongan',166),(507,'Sekretariat Kelurahan Bugel',167),(508,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Bugel',167),(509,'Seksi Ekonomi dan Pembangunan Kelurahan Bugel',167),(510,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Bugel',167),(511,'Sub Bagian Perencanaan dan Keuangan',168),(512,'Sub Bagian Umum dan Kepegawaian',168),(513,'Sekretariat Kelurahan Dukuh',173),(514,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Dukuh',173),(515,'Seksi Ekonomi dan Pembangunan Kelurahan Dukuh',173),(516,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Dukuh',173),(517,'Sekretariat Kelurahan Mangunsari',174),(518,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Mangunsari',174),(519,'Seksi Ekonomi dan Pembangunan Kelurahan Mangunsari',174),(520,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Mangunsari',174),(521,'Sekretariat Kelurahan Kecandran',175),(522,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Kecandran',175),(523,'Seksi Ekonomi dan Pembangunan Kelurahan Kecandran',175),(524,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Kecandran',175),(525,'Sekretariat Kelurahan Kalicacing',176),(526,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Kalicacing',176),(527,'Seksi Ekonomi dan Pembangunan Kelurahan Kalicacing',176),(528,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Kalicacing',176),(529,'Sub Bagian Perencanaan dan Keuangan',177),(530,'Sub Bagian Umum dan Kepegawaian',177),(531,'Sekretariat Kelurahan Tegalrejo',182),(532,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Tegalrejo',182),(533,'Seksi Ekonomi dan Pembangunan Kelurahan Tegalrejo',182),(534,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Tegalrejo',182),(535,'Sekretariat Kelurahan Ledok',183),(536,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Ledok',183),(537,'Seksi Ekonomi dan Pembangunan Kelurahan Ledok',183),(538,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Ledok',183),(539,'Sekretariat Kelurahan Cebongan',184),(540,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Cebongan',184),(541,'Seksi Ekonomi dan Pembangunan Kelurahan Cebongan',184),(542,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Cebongan',184),(543,'Sekretariat Kelurahan Noborejo',185),(544,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Noborejo',184),(545,'Seksi Ekonomi dan Pembangunan Kelurahan Noborejo',185),(546,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Noborejo',185),(547,'Sekretariat Kelurahan Kumpulrejo',186),(548,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Kumpulrejo',186),(549,'Seksi Ekonomi dan Pembangunan Kelurahan Kumpulrejo',186),(550,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Kumpulrejo',186),(551,'Sekretariat Kelurahan Randuacir',187),(552,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kelurahan Randuacir',187),(553,'Seksi Ekonomi dan Pembangunan Kelurahan Randuacir',187),(554,'Seksi Sosial dan Pemberdayaan Masyarakat Kelurahan Randuacir',187);

/*Table structure for table `subunitkerja` */

DROP TABLE IF EXISTS `subunitkerja`;

CREATE TABLE `subunitkerja` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `subunitkerja` varchar(100) DEFAULT NULL,
  `kodeunitkerja` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=utf8;

/*Data for the table `subunitkerja` */

insert  into `subunitkerja`(`kode`,`subunitkerja`,`kodeunitkerja`) values (1,'Sekretariat Inspektorat',1),(2,'Inspektur Pembantu I',1),(3,'Inspektur Pembantu II',1),(4,'Inspektur Pembantu III',1),(5,'Sekretariat Daerah',2),(6,'Asisten Pemerintahan dan Kesejahteraan Rakyat',2),(7,'Bagian Pemerintahan',2),(8,'Bagian Kesejahteraan Rakyat',2),(9,'Bagian Hukum',2),(10,'Asisten Perekonomian dan Pembangunan',2),(11,'Bagian Pembangunan',2),(12,'Bagian Perekonomian',2),(13,'Bagian Hubungan Masyarakat dan Protokol',2),(14,'Asisten Administrasi Umum',2),(15,'Bagian Organisasi dan Kepegawaian',2),(16,'Bagian Umum',2),(17,'Bagian Keuangan',2),(18,'Staff Ahli Walikota Bidang Hukum dan Pemerintahan',2),(19,'Staff Ahli Walikota Bidang Kemasyarakatan dan Sumber Daya Manusia',2),(20,'Staff Ahli Walikota Bidang Ekonomi dan Pembangunan',2),(21,'Bagian Umum',3),(22,'Bagian Persidangan dan Perundang-Undangan',3),(23,'Bagian Keuangan',3),(25,'Sekretariat Badan Kepegawaian, Pendidikan dan Pelatihan Daerah',4),(26,'Bidang Pembinaan dan Mutasi',4),(27,'Bidang Pengembangan, Pendidikan dan Pelatihan',4),(28,'Sekretariat Badan Kesatuan Bangsa dan Politik',5),(29,'Bidang Bina Ideologi dan Wawasan Kebangsaan',5),(30,'Bidang Kewaspadaan Nasional',5),(31,'Bidang Ketahanan Seni, Budaya, Agama, Kemasyarakatan dan Ekonomi',5),(32,'Bidang Politik',5),(33,'Sekretariat Badan Keuangan Daerah',6),(34,'Bidang Pendapatan',6),(35,'Bidang Anggaran dan Belanja',6),(36,'Bidang Akuntansi',6),(37,'Bidang Barang Milik Daerah',6),(38,'Sekretariat Badan Perencanaan, Penelitian dan Pengembangan Daerah',7),(39,'Bidang Penelitian dan Pengembangan',7),(40,'Bidang Perencanaan Kesejahteraan Rakyat',7),(41,'Bidang Perencanaan Ekonomi dan Pembangunan',7),(42,'Sekretariat Kebudayaan dan Pariwisata',8),(43,'Bidang Kebudayaan',8),(44,'Bidang Pariwisata',8),(45,'Sekretariat Dinas Kepemudaan dan Olahraga',9),(46,'Bidang Kepemudaan dan Kepramukaan',9),(47,'Bidang Keolahragaan',9),(48,'Sekretariat Dinas Kependudukan dan Pencatatan Sipil',10),(49,'Bidang Pelayanan Pendaftaran Penduduk',10),(50,'Bidang Pelayanan Pencatatan Sipil',10),(51,'Bidang Pengelolaan Informasi Administrasi Kependudukan dan Pemanfaatan Data',10),(52,'Sekretariat Dinas Kesehatan',11),(53,'Bidang Kesehatan Masyarakat',11),(54,'Bidang Pencegahan dan Pengendalian Penyakit',11),(55,'Bidang Pelayanan Kesehatan dan Sumber Daya Kesehatan',11),(56,'UPT Dinas Kesehatan',11),(57,'Sekretariat Dinas Komunikasi dan Informatika',13),(58,'Bidang Informasi dan Komunikasi Publik',13),(59,'Bidang Aplikasi Informatika',13),(60,'Bidang Statistik dan Persandian',13),(61,'Sekretariat Dinas Koperasi, Usaha Kecil dan Menengah',14),(62,'Bidang Koperasi',14),(63,'Bidang Usaha Kecil dan Menengah',14),(64,'Sekretariat Dinas Lingkungan Hidup',15),(65,'Bidang Pengelolaan Lingkungan Hidup',15),(66,'Bidang Kebersihan',15),(67,'Bidang Pertamanan dan Penerangan Jalan Umum',15),(68,'UPT Tempat Pemrosesan Akhir Sampah',15),(69,'Sekretariat Dinas Pangan',16),(70,'Bidang Ketersediaan dan Distribusi Pangan',16),(71,'Bidang Konsumsi, Penganekaragaman dan Keamanan Pangan',16),(72,'Sekretariat Dinas Pekerjaan Umum dan Penataan Ruang',17),(73,'Bidang Tata Ruang',17),(74,'Bidang Bina Marga',17),(75,'Bidang Pengairan',17),(76,'Bidang Gedung dan Pembinaan Jasa Konstruksi',17),(77,'Sekretariat Dinas Pemberdayaan Perempuan dan Perlindungan Anak',18),(78,'Bidang Pemberdayaan Perempuan',18),(79,'Bidang Kesejahteraan dan Perlindungan Anak',18),(80,'Sekretariat Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu',19),(81,'Bidang Penanaman Modal',19),(82,'Bidang Perizinan',19),(83,'Bidang Perizinan Usaha',19),(84,'Sekretariat Dinas Pendidikan',20),(85,'Bidang Pendidikan Anak Usia Dini dan Pendidikan Masyarakat',20),(86,'Bidang Pendidikan Dasar',20),(87,'Bidang Ketenagaan',20),(88,'Satuan Pendidikan Kec. Argomulyo',20),(89,'Satuan Pendidikan Kec. Sidomukti',20),(90,'Satuan Pendidikan Kec. Sidorejo',20),(91,'Satuan Pendidikan Kec. Tingkir',20),(92,'SLTP',20),(93,'Satuan Pendidikan Non Formal Sejenis Sanggar Kegiatan Belajar',20),(94,'Sekretariat Dinas pengendalian Penduduk dan Keluarga Berencana',21),(95,'Bidang Pengendalian Penduduk, Advokasi dan Komunikasi, Informasi dan Edukasi',21),(96,'Bidang Keluarga Berencana, Ketahanan dan Kesejahteraan Keluarga',21),(97,'Sekretariat Dinas Perdagangan',22),(98,'Bidang Perdagangan',22),(99,'Bidang Pasar',22),(100,'Bidang Pedagang Kaki Lima',22),(101,'UPT Pasar I',22),(102,'UPT Pasar II',22),(103,'UPT Pasar III',22),(104,'UPT Pasar IV',22),(105,'UPT Pasar Kelas A',0),(106,'UPT Pasar Kelas B',22),(107,'Seretariat Dinas Perhubungan',23),(108,'Bidang Lalu Lintas',23),(109,'Bidang Angkutan dan Kelaikan Kendaraan',23),(110,'UPT Perparkiran',23),(111,'Sekretariat Dinas Perindustrian dan Tenaga Kerja',24),(112,'Bidang Perindustrian',24),(113,'Bidang Ketenagakerjaan',24),(114,'Sekretariat Dinas Perpustakaan dan Kearsipan',25),(115,'Bidang Perpustakaan',25),(116,'Bidang Kearsipan',25),(117,'Bidang Pembinaan dan Pengembangan',25),(118,'Sekretaris Dinas Pertanian',26),(119,'Bidang Tanaman Pangan dan Holtikultura',26),(120,'Bidang Peternakan dan Kesehatan Hewan',26),(121,'Bidang Sumber Daya dan Perikanan',26),(122,'UPT Rumah Pemotongan Hewan',26),(123,'UPT Balai Benih Ikan',26),(124,'Sekretariat Dinas Perumahan dan Kawasan Pemukiman',27),(125,'Bidang Perumahan',27),(126,'Bidang Kawasan Permukiman',27),(127,'Bidang Pertanahan',27),(128,'UPT Rumah Susun Sederhana Sewa',27),(129,'Sekretariat Dinas Sosial',28),(130,'Bidang Pemberdayaan Sosial',28),(131,'Bidang Rehabilitas Sosial',28),(132,'Bidang Perlindungan, Jaminan Sosial dan Penanganan Fakir Miskin',28),(133,'Wakil Direktur Administrasi dan Keuangan',29),(134,'Bagian Umum, Administrasi dan Barang Milik Daerah',29),(135,'Bagian Keuangan',29),(136,'Bagian Bina Program dan Pendidikan dan Pelatihan',29),(137,'Wakil Direktur Pelayanan',29),(138,'Bidang Pelayanan Medik',29),(139,'Bidang Pelayanan Keperawatan',29),(140,'Bidang Pelayanan Penunjang',29),(141,'Sekretariat Satuan Polisi Pamong Praja',30),(142,'Bidang Penegak',30),(143,'Bidang Ketertiban Umum, Ketentraman dan Pelindung Masyarakat',30),(144,'Bidang Pemadam Kebaran',30),(145,'Sekretariat Kecamatan Tingkir',31),(146,'Seksi Pelayanan Kecamatan Tingkir',31),(147,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kecamatan Tingkir',31),(148,'Seksi Ekonomi dan Pembangunan Kecamatan Tingkir',31),(149,'Seksi Sosial dan Pemberdayaan Masyarakat Kecamatan Tingkir',31),(150,'Kelurahan Kutawinangun Kidul',31),(151,'Keluharan Gendongan',31),(152,'Keluharan Tingkir Lor',31),(153,'Kelurahan Tingkir Tengah',31),(154,'Kelurahan Tingkir Kidul',31),(155,'Kelurahan Kalibening',31),(156,'Kelurahan Kutowinangun Lor',31),(157,'Sekretariat Kecamatan Sidorejo',32),(158,'Seksi Pelayanan Kecamatan Sidorejo',32),(159,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kecamatan Sidorejo',32),(160,'Seksi Ekonomi dan Pembangunan Kecamatan Sidorejo',32),(161,'Seksi Sosial dan Pemberdayaan Masyarakat Kecamatan Sidorejo',32),(162,'Kelurahan Salatiga',32),(163,'Keluharan Sidorejo Lor',32),(164,'Keluharan Kauman Kidul',32),(165,'Kelurahan Pulutan',32),(166,'Kelurahan Blotongan',32),(167,'Kelurahan Bugel',32),(168,'Sekretariat Kecamatan Sidomukti',33),(169,'Seksi Pelayanan Kecamatan Sidomukti',33),(170,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kecamatan Sidomukti',33),(171,'Seksi Ekonomi dan Pembangunan Kecamatan Sidomukti',33),(172,'Seksi Sosial dan Pemberdayaan Masyarakat Kecamatan Sidomukti',33),(173,'Kelurahan Dukuh',33),(174,'Keluharan Mangunsari',33),(175,'Keluharan Kecandran',33),(176,'Kelurahan Kalicacing',33),(177,'Sekretariat Kecamatan Argomulyo',34),(178,'Seksi Pelayanan Kecamatan Argomulyo',34),(179,'Seksi Pemerintahan, Ketentraman dan Ketertiban Umum Kecamatan Argomulyo',34),(180,'Seksi Ekonomi dan Pembangunan Kecamatan Argomulyo',34),(181,'Seksi Sosial dan Pemberdayaan Masyarakat Kecamatan Argomulyo',34),(182,'Kelurahan Tegalrejo',34),(183,'Keluharan Ledok',34),(184,'Keluharan Cebongan',34),(185,'Kelurahan Noborejo',34),(186,'Kelurahan Kumpulrejo',34),(187,'Kelurahan Randuacir',34);

/*Table structure for table `tmtjabatan` */

DROP TABLE IF EXISTS `tmtjabatan`;

CREATE TABLE `tmtjabatan` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `kodepegawai` int(11) NOT NULL,
  `jabatan` text NOT NULL,
  `tugasjabatan` text NOT NULL,
  `tmtjabatan` datetime NOT NULL,
  `dibuatpada` datetime NOT NULL,
  `dibuatoleh` int(11) NOT NULL,
  `diubahpada` datetime DEFAULT NULL,
  `diubaholeh` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tmtjabatan` */

/*Table structure for table `tmtlokasikerja` */

DROP TABLE IF EXISTS `tmtlokasikerja`;

CREATE TABLE `tmtlokasikerja` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `kodepegawai` int(11) NOT NULL,
  `kodeunitkerja` int(11) NOT NULL,
  `kodesubunitkerja` int(11) NOT NULL,
  `kodesubsubunitkerja` int(11) NOT NULL,
  `tmtlokasikerja` datetime NOT NULL,
  `dibuatpada` datetime NOT NULL,
  `dibuatoleh` int(11) NOT NULL,
  `diubahpada` datetime DEFAULT NULL,
  `diubaholeh` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tmtlokasikerja` */

/*Table structure for table `tmtpangkat` */

DROP TABLE IF EXISTS `tmtpangkat`;

CREATE TABLE `tmtpangkat` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `kodepegawai` int(11) NOT NULL,
  `kodepangkat` int(11) NOT NULL,
  `tmtpangkat` datetime NOT NULL,
  `dibuatpada` datetime NOT NULL,
  `dibuatoleh` int(11) NOT NULL,
  `diubahpada` datetime DEFAULT NULL,
  `diubaholeh` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tmtpangkat` */

/*Table structure for table `unitkerja` */

DROP TABLE IF EXISTS `unitkerja`;

CREATE TABLE `unitkerja` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `unitkerja` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

/*Data for the table `unitkerja` */

insert  into `unitkerja`(`kode`,`unitkerja`) values (1,'Inspektorat'),(2,'Sekretariat Daerah'),(3,'Sekretariat DPRD'),(4,'Badan Kepegawaian, Pendidikan dan Pelatihan Daerah'),(5,'Badan Kesatuan Bangsa dan Politik'),(6,'Badan Keuangan Daerah'),(7,'Badan Perencanaan, Penelitian dan Pengembangan Daerah'),(8,'Dinas Kebudayaan dan Pariwisata'),(9,'Dinas Kepemudaan dan Olahraga'),(10,'Dinas Kependudukan dan Pencatatan Sipil'),(11,'Dinas Kesehatan'),(13,'Dinas Komunikasi dan Informatika'),(14,'Dinas Koperasi, Usaha Kecil dan Menengah'),(15,'Dinas Lingkungan Hidup'),(16,'Dinas Pangan'),(17,'Dinas Pekerjaan Umum dan Penataan Ruang'),(18,'Dinas Pemberdayaan Perempuan dan Perlindungan Anak'),(19,'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu'),(20,'Dinas Pendidikan'),(21,'Dinas Pengendalian Penduduk dan Keluarga Berencana'),(22,'Dinas Perdagangan'),(23,'Dinas Perhubungan'),(24,'Dinas Perindustrian dan Tenaga Kerja'),(25,'Dinas Perpustakaan dan Kearsipan'),(26,'Dinas Pertanian'),(27,'Dinas Perumahan dan Kawasan Pemukiman'),(28,'Dinas Sosial'),(29,'UPT Rumah Sakit Umum Daerah Pada Dinas Kesehatan'),(30,'Satuan Polisi Pamong Praja'),(31,'Kecamatan Tingkir'),(32,'Kecamatan Sidorejo'),(33,'Kecamatan Sidomukti'),(34,'Kecamatan Argomulyo');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

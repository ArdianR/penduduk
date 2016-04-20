-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2016 at 03:26 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webpotensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_desa`
--

CREATE TABLE IF NOT EXISTS `admin_desa` (
  `kode_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `desa` varchar(30) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  PRIMARY KEY (`kode_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin_desa`
--

INSERT INTO `admin_desa` (`kode_admin`, `username`, `password`, `desa`, `nip`, `nama_admin`) VALUES
(1, 'coegx', '1234588', 'Sanguan', '872132132133', 'Jancoegx'),
(2, 'sukoco', '12345', 'Mekarmulya', '129182183618', 'Agit Sukoco'),
(3, 'adminsuper', '12345', 'MEKARSARI', '29121281738131', 'Sanguand'),
(4, 'sangu', '12762121', 'Situmekar', '2198318', 'Agit Nugroho'),
(5, 'ridwan_kamil', '1019282736364', 'Sumenep', '12982182172126', 'Ridwan Kamil');

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE IF NOT EXISTS `alamat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `alamat` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id`, `alamat`) VALUES
(1, '<div>\r\n<div>Jalan Raya Wado - Malangbong No. 33 Sumedang 45373</div>\r\n</div>');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(45) NOT NULL DEFAULT '',
  `isi` varchar(1000) NOT NULL DEFAULT '',
  `gambar` varchar(45) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `gambar`, `tanggal`) VALUES
(6, 'TExt Cool', '<p style="text-align: justify;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">Cool Text is a&nbsp;</span><strong style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">FREE</strong><span style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">&nbsp;graphics generator for web pages and anywhere else you need an impressive logo without a lot of design work. &nbsp;Simply choose what kind of image you would like. Then fill out a form and you''ll have your own custom image created on the fly.&nbsp;</span></p>', 'cloud.png', '2015-05-13'),
(7, 'Kebakaran Pasar Wado', '<h5 style="text-align: justify;">Terjadi di Pasar Wado, Sumedang, Jawa Barat, tadi malam. Besarnya kobaran api serta kencangnya tiupan angin membuat sekitar 235 kios di pasar tersebut hangus terbakar. Para pedagang tidak mampu berbuat banyak dan hanya berupaya memadamkan api dengan peralatan seadanya.<br /><br />Seperti ditayangkan&nbsp;Liputan 6 Malam SCTV,&nbsp;Selasa (2/9/2014), api yang menjalar begitu cepat membuat para pedagang tidak sempat menyelamatkan barang dagangan mereka. Bahkan petugas pemadam kebakaran juga mengalami kesulitan karena jauhnya sumber air dari lokasi. Api baru bisa dipadamkan 2 jam kemudian.<br /><br />Menurut para pedagang, diduga kebakaran terjadi akibat hubungan pendek arus listrik di salah satu kios. Tidak ada korban jiwa dalam peristiwa tersebut. Namun pedagang mengalami kerugian mencapai miliaran rupiah.</h5>', 'pasar15.jpg', '2015-06-11'),
(9, 'Aula Baru Kecamatan Wado Resmi Digunakan', '<h5 style="text-align: justify;">Selasa, (17/1), jajaran pemerintahan dan warga masyarakat Kecamatan Wado berkumpul di Kantor Kecamatan untuk menghadiri acara syukuran sekaligus peresmian penggunaan aula Kantor Kecamatan yang baru selesai dibangun. Aula yang pembangunannya bersamaan dengan renovasi Kantor Camat tersebut diresmikan oleh Sekretaris Daerah H. Atje Arifin Abdullah, SH, SIP, MSi yang hadir beserta Ibu Hj. Anne Arifin, SH.&nbsp; Camat Wado Tatang Setadi, S.Sos atas nama pemerintah dan masyarakat Wado dalam sambutannya menyampaikan terima kasih kepada Pemerintah Kabupaten Sumedang yang telah memberikan kucuran dana rehabilitasi kantor dan pembangunan aula dengan total Rp. 410 juta lebih. &ldquo;Mudah-mudahan dengan direhabnya kantor Kecamatan dan dibangunnya aula menjadi titik awal penataan-penataan infrastruktur lainnya di Kecamatan Wado,&rdquo; ujarnya.</h5>\r\n<h5 class="MsoNormal" style="text-align: justify;">Sumber : Bagian Hubungan Masyarakat Setda Kabupaten Sumedang</h5>', 'aula3.JPG', '2015-06-10'),
(10, 'Drag Bike Pertama Di Sumedang', '<h5 style="text-align: justify;">Wado &ndash; 14/05 Event Kejuaraan Agung Laksana Drag Bike Open 2015 berlangsung meriah, sebanyak sekitar 5.500 pasang mata hadir untuk menyaksikan event tersebut. Acara yang di Gelar di Sirkuit Wado Jalan Lingkar Desa Cikareo tersebut, menarik perhatian 320 starter. Tujuan yang sangat baik Herman Dhenox (Penyelenggara) buktikan kepada warga Sumedang, bahwa acara Drag Bike yang diselenggarakannya berlangsung meriah dan sukses. Pria asal Sumedang tersebut juga ingin membuktikan bahwa Kota Sumedang sangat layak untuk dijadikan Kota Ajang Balap Otomotif roda dua khususnya. Karena yang hadir dalam event kejuaraan Agung Laksana Drag Bike Championship 2015 bukan hanya dari Kota-kota di Jawa Barat saja, Tim-tim besar Drag Bike Yogyakarta, Semarang dan Solo juga hadir di event tersebut.</h5>\r\n<h5 style="text-align: justify;">Sumber : OtoLine.Net</h5>', 'drag221.jpg', '2015-06-10'),
(11, 'Curug Jatma', '<p>Curug Jatma merupakan curug yang terletak di kampung kolasi tepatnya di Desa Cilengkrang. Curug tersebut berpotensi di jadikan objek wisata dikarenakan curug jatma masih jarang dikunjingi oleh orang banyak.</p>', '100_9945.jpg', '2015-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE IF NOT EXISTS `desa` (
  `kode_desa` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `nama_desa` varchar(50) NOT NULL DEFAULT '',
  `luas_wilayah` float NOT NULL DEFAULT '0',
  `ketinggian` float NOT NULL DEFAULT '0',
  `keadaan_permukaan` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`kode_desa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`kode_desa`, `nama_desa`, `luas_wilayah`, `ketinggian`, `keadaan_permukaan`) VALUES
(2, 'Sukapura', 3.48, 270, 'Berbukit'),
(3, 'Cisurat', 3.68, 265, 'Berbukit'),
(4, 'Wado', 2.61, 270, 'Datar'),
(5, 'Cikareo Utara', 250, 375, 'Berbukit'),
(6, 'Cikareo Selatan', 3.39, 300, 'Berbukit'),
(7, 'Mulyajaya', 4.69, 350, 'Berbukit'),
(8, 'Sukajadi', 12.19, 650, 'Berbukit'),
(9, 'Cilengkrang', 16.23, 700, 'Berbukit'),
(10, 'Ganjaresik', 8.35, 790, 'Berbukit'),
(11, 'Cimungkal', 18.6, 800, 'Berbukit'),
(12, 'Padajaya', 3.39, 289, 'Datar');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE IF NOT EXISTS `informasi` (
  `id_informasi` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `isi` longtext NOT NULL,
  PRIMARY KEY (`id_informasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `judul`, `isi`) VALUES
(7, 'Contoh Informasi', '<p>Contoh Infrormasi</p>');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_jabatan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Camat'),
(2, 'Sekcam'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kontak`
--

CREATE TABLE IF NOT EXISTS `jenis_kontak` (
  `id_jenis` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_jenis` varchar(45) NOT NULL DEFAULT '',
  `nama_jenis` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_jenis`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jenis_kontak`
--

INSERT INTO `jenis_kontak` (`id_jenis`, `kode_jenis`, `nama_jenis`) VALUES
(1, '<i class="glyphicon glyphicon-phone-alt"></i>', 'Kantor'),
(2, '<i class="glyphicon glyphicon-phone"></i>', 'Handprone'),
(3, '<i class="glyphicon glyphicon-envelope"></i>', 'E-Mail');

-- --------------------------------------------------------

--
-- Table structure for table `kepala`
--

CREATE TABLE IF NOT EXISTS `kepala` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kepala`
--

INSERT INTO `kepala` (`id`, `nip`, `nama`) VALUES
(1, '19751104 199412 1 003', 'Nama Saya');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) NOT NULL DEFAULT '',
  `isi` varchar(45) NOT NULL DEFAULT '',
  `jenis` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `isi`, `jenis`) VALUES
(9, 'Email', 'kecamatan.wado@yahoo.co.id', ''),
(11, 'Kantor', '(0262) 428259', '1'),
(12, 'Email', 'kecamatan.wado@yahoo.co.id', '3');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE IF NOT EXISTS `link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL DEFAULT '',
  `link` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `nama`, `link`) VALUES
(3, 'Sumedang', 'http://www.sumedangkab.go.id/'),
(4, 'Indonesia', 'https://www.google.com/search?q=indonesia&ie=utf-8&oe=utf-8'),
(7, 'Garut', 'http://garut.com');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `idpegawai` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(45) NOT NULL DEFAULT '',
  `nama` varchar(50) NOT NULL DEFAULT '',
  `alamat` varchar(50) NOT NULL DEFAULT '',
  `jabatan` varchar(30) NOT NULL DEFAULT '',
  `profil` text NOT NULL,
  `foto` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`idpegawai`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`idpegawai`, `nip`, `nama`, `alamat`, `jabatan`, `profil`, `foto`) VALUES
(12, '19751104 199412 1 003', 'WIDODO HERU P,AP.MM', 'Wado', 'Pimpinan', '', 'STOP.gif'),
(13, '19620306 1985031 012', 'TARKO, S.Sos', 'Darmaraja', 'Sekertaris', '', 'STOP1.gif'),
(14, 'A2.1100070', 'Jajang Saepul Milah', 'Wado', 'Admin', '', 'STOP2.gif');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE IF NOT EXISTS `penduduk` (
  `nik` varchar(25) NOT NULL DEFAULT '',
  `kode_admin` varchar(20) NOT NULL,
  `kode_desa` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL DEFAULT '',
  `tempat_lahir` varchar(30) NOT NULL DEFAULT '',
  `tanggal_lahir` date NOT NULL DEFAULT '0000-00-00',
  `jenis_kelamin` varchar(10) NOT NULL DEFAULT '',
  `dusun` varchar(30) NOT NULL DEFAULT '',
  `rt` varchar(5) NOT NULL DEFAULT '',
  `rw` varchar(5) NOT NULL DEFAULT '',
  `desa` varchar(30) NOT NULL DEFAULT '',
  `kecamatan` varchar(30) NOT NULL DEFAULT '',
  `agama` varchar(15) NOT NULL DEFAULT '',
  `status` varchar(25) NOT NULL DEFAULT '',
  `pekerjaan` varchar(30) NOT NULL DEFAULT '',
  `kewarganegaraan` varchar(5) NOT NULL DEFAULT '',
  `berlaku_hingga` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`nik`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nik`, `kode_admin`, `kode_desa`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `dusun`, `rt`, `rw`, `desa`, `kecamatan`, `agama`, `status`, `pekerjaan`, `kewarganegaraan`, `berlaku_hingga`) VALUES
('3211010707800004', '0', '10', 'Nana Romansah', 'Sumedang', '1980-07-07', 'LAKI-LAKI', 'Cihirung', '001', '005', 'Ganjaresik', 'Wado', '', 'BELUM KAWIN', 'Tani', 'WNI', '2010-07-07'),
('3211011107680006', '0', '12', 'Nana Suryana', 'Sumedang', '1968-07-11', 'LAKI-LAKI', 'Cadasngampar', '004', '002', 'Padajaya', 'Wado', '', 'KAWIN', 'Tani', 'WNI', '2010-07-11'),
('3211011212850003', '0', '2', 'Kosasih', 'Sumedang', '1985-12-12', 'PEREMPUAN', 'Cipasang', '002', '001', 'Sukapura', 'Wado', '', 'KAWIN', 'Wiraswasta', 'WNI', '2010-12-12'),
('32110114107530130', '0', '8', 'Manah', 'Sumedang', '1975-10-14', 'PEREMPUAN', 'Sukamanah', '003', '003', 'Sukajadi', 'Wado', '', 'KAWIN', 'Wiraswasta', 'WNI', '2010-10-14'),
('32110114706550008', '0', '5', 'Tjarji', 'Sumedang', '1965-06-07', 'LAKI-LAKI', 'Nagrak', '002', '003', 'Cikareo Utara', 'Wado', '', 'BELUM KAWIN', 'Tani', 'WNI', '2010-06-07'),
('3211011507820004', '0', '9', 'Enang', 'Sumedang', '1982-07-15', 'LAKI-LAKI', 'Kebonkalapa', '004', '002', 'Cilengkrang', 'Wado', '', 'BELUM KAWIN', 'Tani', 'WNI', '2010-07-15'),
('3211012504970002', '0', '7', 'Deni Ramdani', 'Sumedang', '1997-04-25', 'LAKI-LAKI', 'Cialang-alang', '005', '003', 'Mulyajaya', 'Wado', '', 'BELUM KAWIN', 'Pelajar', 'WNI', '2010-04-25'),
('3211012804840001', '0', '6', 'Sarif Hidayat', 'Sumedang', '1984-04-04', 'LAKI-LAKI', 'Elos', '002', '003', 'Cikareo Selatan', 'Wado', '', 'BELUM KAWIN', 'Wiraswasta', 'WNI', '2010-04-04'),
('3211012906910006', '0', '4', 'Jajang Saepul Milah', 'Sumedang', '1991-06-29', 'LAKI-LAKI', 'Wadogirang', '005', '001', 'Wado', 'Wado', '', 'BELUM KAWIN', 'Mahasiswa', 'WNI', '2010-06-29'),
('3211013112900051', '0', '11', 'Hamdan', 'Sumedang', '1990-12-31', 'LAKI-LAKI', 'Sukanyiru', '001', '002', 'Cimungkal', 'Wado', '', 'KAWIN', 'Wiraswasta', 'WNI', '2010-12-31'),
('3211014162070002', '0', '3', 'Endang Kurniasari', 'Sumedang', '2000-07-12', 'PEREMPUAN', 'Cisurat', '002', '005', 'Cisurat', 'Wado', '', 'BELUM KAWIN', 'Pelajar', 'WNI', '2010-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `potensi`
--

CREATE TABLE IF NOT EXISTS `potensi` (
  `kode_potensi` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_desa` int(10) unsigned NOT NULL DEFAULT '0',
  `nama_potensi` varchar(30) NOT NULL DEFAULT '',
  `jenis_potensi` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`kode_potensi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `potensi`
--

INSERT INTO `potensi` (`kode_potensi`, `kode_desa`, `nama_potensi`, `jenis_potensi`, `deskripsi`) VALUES
(24, 2, 'Kerupuk', 'Usaha', '              	\r\n              Salah satu prodak unggul dari desa Sukapura'),
(25, 2, 'Rangginang', 'Usaha', '              	Salah satu prodak unggul dari desa Sukapura\r\n              '),
(23, 4, 'Kripik', 'Usaha', '              	Salah satu prodak unggul dari desa Wado \r\n              '),
(22, 4, 'Kerupuk Wortel', 'Usaha', '              	Salah satu prodak unggul dari desa Wado \r\n              '),
(11, 4, 'Kerupuk Ikan', 'Usaha', '              	Salah satu prodak unggul dari desa Wado              '),
(12, 12, 'Beras', 'Pertanian', '              	\r\n              Salah satu prodak unggul dari desa Padajaya'),
(13, 12, 'Bibit Padi', 'Pertanian', '              	\r\n               	Salah satu prodak unggul dari desa Padajaya'),
(14, 12, 'Bros', 'Usaha', '              	 	Salah satu prodak unggul dari desa Padajaya\r\n              '),
(15, 12, 'Tas Limbah', 'Usaha', '              	\r\n               	Salah satu prodak unggul dari desa Padajaya'),
(19, 3, 'Jamur', 'Pertanian', '              	\r\n              Salah satu prodak unggul dari desa Cisurat'),
(20, 3, 'Ikan Gurame', 'Usaha', '              	Salah satu prodak unggul dari desa Cisurat\r\n              '),
(26, 7, 'Gula Merah', 'Usaha', '              	Salah satu prodak unggul dari desa Mulyajaya\r\n              '),
(27, 7, 'Kripik Singkong', 'Usaha', '              	\r\n               	Salah satu prodak unggul dari desa Mulyajaya '),
(28, 7, 'Kripik Pisang', 'Usaha', '              	\r\nSalah satu prodak unggul dari desa Mulyajaya'),
(29, 5, 'Gula Aren', 'Usaha', '              	\r\n           Salah satu prodak unggul dari desa Cikareo Utara   '),
(30, 5, 'Sale Pisang', 'Usaha', '              	       Salah satu prodak unggul dari desa Cikareo Utara   \r\n              '),
(31, 6, 'Hiasan Bambu', 'Usaha', '              	\r\n                     Salah satu prodak unggul dari desa Cikareo Selatan'),
(32, 6, 'Kripik Pisang', 'Usaha', '              	Salah satu prodak unggul dari desa Cikareo Selatan\r\n              '),
(33, 11, 'Kalua Jeruk', 'Usaha', '              	\r\n            Salah satu prodak unggul dari desa Cimungkal '),
(34, 11, 'Gula Merah', 'Usaha', '              	Salah satu prodak unggul dari desa Cimungkal\r\n              '),
(35, 11, 'Sereh Wangi', 'Pertanian', '              	              	\r\n              Salah satu prodak unggul dari desa Cimungkal          '),
(36, 9, 'Besek', 'Usaha', '              	\r\n             Salah satu prodak unggul dari desa Cilengkrang'),
(37, 9, 'Gula Merah', 'Usaha', '              	\r\n              Salah satu prodak unggul dari desa Cilengkrang'),
(38, 9, 'Dapros', 'Usaha', '              	\r\n              Salah satu prodak unggul dari desa Cilengkrang'),
(39, 10, 'Gula Merah', 'Usaha', '              	\r\n           Salah satu prodak unggul dari desa Ganjaresik'),
(40, 10, 'Teh Hijau', 'Pertanian', '              	\r\n              Salah satu prodak unggul dari desa Ganjaresik'),
(41, 10, 'Dapros', 'Usaha', '              	\r\n              Salah satu prodak unggul dari desa Ganjaresik'),
(42, 8, 'Gula Merah', 'Usaha', '              	Salah satu prodak unggul dari desa Sukajadi\r\n              '),
(43, 8, 'Kerupuk Singkong', 'Usaha', '              	    	Salah satu prodak unggul dari desa Sukajadi\r\n              '),
(44, 8, 'Kripik Pisang', 'Usaha', '              	\r\n                  	Salah satu prodak unggul dari desa Sukajadi'),
(45, 2, '423', 'Pertanian', '              	\r\n             dasdasdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE IF NOT EXISTS `super_admin` (
  `kode_admin` varchar(32) NOT NULL DEFAULT '',
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`kode_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`kode_admin`, `username`, `password`) VALUES
('1234567890', 'adminsuper', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE IF NOT EXISTS `visimisi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `visimisi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `visimisi`) VALUES
(1, '<p>&nbsp;</p>\r\n<!-- [if gte mso 9]><xml>\r\n <o:DocumentProperties>\r\n  <o:Version>14.00</o:Version>\r\n </o:DocumentProperties>\r\n <o:OfficeDocumentSettings>\r\n  <o:AllowPNG/>\r\n </o:OfficeDocumentSettings>\r\n</xml><![endif]-->\r\n<p class="MsoNormalCxSpFirst" style="mso-margin-bottom-alt: auto; margin-left: .75in; mso-add-space: auto; text-align: justify; text-indent: -.25in; line-height: 200%; mso-list: l0 level1 lfo1;"><strong style="mso-bidi-font-weight: normal;"><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial; mso-ansi-language: EN-US;"><span style="mso-list: Ignore;">1.<span style="font: 7.0pt ''Times New Roman'';">&nbsp;&nbsp;&nbsp; </span></span></span></strong><strong style="mso-bidi-font-weight: normal;"><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif''; mso-ansi-language: EN-US;">Visi</span></strong></p>\r\n<p class="MsoNormalCxSpMiddle" style="mso-margin-bottom-alt: auto; margin-left: .75in; mso-add-space: auto; text-align: justify; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif''; mso-ansi-language: EN-US;">&ldquo;Terwujudnya Masyarakat Kecamatan Wado yang Taqwa, Sehat, Tertib, Pandai, Dinamis dan Unggul (Wado Taqwa, Wado Sehat, Wado Rapi, Wado Pandai, Wado , Wado Unggul)&rdquo;.</span></p>\r\n<p class="MsoNormalCxSpLast" style="mso-margin-bottom-alt: auto; margin-left: .75in; mso-add-space: auto; text-align: justify; text-indent: -.25in; line-height: 200%; mso-list: l0 level1 lfo1;"><strong style="mso-bidi-font-weight: normal;"><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial; mso-ansi-language: EN-US;"><span style="mso-list: Ignore;">2.<span style="font: 7.0pt ''Times New Roman'';">&nbsp;&nbsp;&nbsp; </span></span></span></strong><strong style="mso-bidi-font-weight: normal;"><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif''; mso-ansi-language: EN-US;">Misi</span></strong></p>\r\n<p class="Style1" style="margin-left: 0.75in; text-align: justify; text-indent: -0.25in; line-height: 200%; padding-left: 30px;"><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial;"><span style="mso-list: Ignore;">a.<span style="font: 7.0pt ''Times New Roman'';">&nbsp;&nbsp; </span></span></span><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif'';">Meningkatkan kualitas keimanan dan ketaqwaan jasmani dan rohani masyarakat.</span></p>\r\n<p class="Style1" style="margin-left: 0.75in; text-align: justify; text-indent: -0.25in; line-height: 200%; padding-left: 30px;"><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial;"><span style="mso-list: Ignore;">b.<span style="font: 7.0pt ''Times New Roman'';">&nbsp;&nbsp;&nbsp; </span></span></span><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif'';">Meningkatkan kualitas kesehatan masyarakat.</span></p>\r\n<p class="Style1" style="margin-left: 0.75in; text-align: justify; text-indent: -0.25in; line-height: 200%; padding-left: 30px;"><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial;"><span style="mso-list: Ignore;">c.<span style="font: 7.0pt ''Times New Roman'';">&nbsp;&nbsp; </span></span></span><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif'';">Meningkatkan kualitas tata kelola dan manajemen pemerintahan.</span></p>\r\n<p class="Style1" style="margin-left: 0.75in; text-align: justify; text-indent: -0.25in; line-height: 200%; padding-left: 30px;"><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial;"><span style="mso-list: Ignore;">d.<span style="font: 7.0pt ''Times New Roman'';">&nbsp; </span></span></span><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif'';">Meningkatkan kondisi lingkungan yang rapi, tertib aman dan nyaman.</span></p>\r\n<p class="Style1" style="margin-left: 0.75in; text-align: justify; text-indent: -0.25in; line-height: 200%; padding-left: 30px;"><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial;"><span style="mso-list: Ignore;">e.<span style="font: 7.0pt ''Times New Roman'';">&nbsp; </span></span></span><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif'';">Meningkatkan kualitas Pendidikan Masyarakat.</span></p>\r\n<p class="Style1" style="margin-left: 0.75in; text-align: justify; text-indent: -0.25in; line-height: 200%; padding-left: 30px;"><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial;"><span style="mso-list: Ignore;">f.<span style="font: 7.0pt ''Times New Roman'';">&nbsp;&nbsp;&nbsp; </span></span></span><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif'';">Meningkatkan kualitas perekonomian masyarakat.</span></p>\r\n<p class="MsoNormalCxSpFirst" style="mso-margin-bottom-alt: auto; margin-left: .75in; mso-add-space: auto; text-align: justify; text-indent: -.25in; line-height: 200%; mso-list: l0 level1 lfo1;"><strong style="mso-bidi-font-weight: normal;"><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial; mso-ansi-language: EN-US;"><span style="mso-list: Ignore;">3.<span style="font: 7.0pt ''Times New Roman'';">&nbsp;&nbsp;&nbsp; </span></span></span></strong><strong style="mso-bidi-font-weight: normal;"><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif''; mso-ansi-language: EN-US;">Tujuan</span></strong></p>\r\n<p class="MsoNormalCxSpMiddle" style="mso-margin-bottom-alt: auto; margin-left: .75in; mso-add-space: auto; text-align: justify; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: ''Times New Roman''; mso-ansi-language: EN-US; mso-fareast-language: IN;">&ldquo;</span><span lang="IN" style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: ''Times New Roman''; mso-fareast-language: IN;">Menyelenggarakan secara optimal tugas Pemerintah, Pembangunan dan Kemasyarakatan serta kemandirian Pemerintah Desa menuju kesejahteraan masyarakat</span><span style="font-size: 12.0pt; line-height: 200%; font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: ''Times New Roman''; mso-ansi-language: EN-US; mso-fareast-language: IN;">&rdquo;.</span></p>\r\n<p>&nbsp;</p>\r\n<!-- [if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves/>\r\n  <w:TrackFormatting/>\r\n  <w:PunctuationKerning/>\r\n  <w:ValidateAgainstSchemas/>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF/>\r\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\r\n  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables/>\r\n   <w:SnapToGridInCell/>\r\n   <w:WrapTextWithPunct/>\r\n   <w:UseAsianBreakRules/>\r\n   <w:DontGrowAutofit/>\r\n   <w:SplitPgBreakAndParaMark/>\r\n   <w:EnableOpenTypeKerning/>\r\n   <w:DontFlipMirrorIndents/>\r\n   <w:OverrideTableStyleHps/>\r\n  </w:Compatibility>\r\n  <m:mathPr>\r\n   <m:mathFont m:val="Cambria Math"/>\r\n   <m:brkBin m:val="before"/>\r\n   <m:brkBinSub m:val="--"/>\r\n   <m:smallFrac m:val="off"/>\r\n   <m:dispDef/>\r\n   <m:lMargin m:val="0"/>\r\n   <m:rMargin m:val="0"/>\r\n   <m:defJc m:val="centerGroup"/>\r\n   <m:wrapIndent m:val="1440"/>\r\n   <m:intLim m:val="subSup"/>\r\n   <m:naryLim m:val="undOvr"/>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]--><!-- [if gte mso 9]><xml>\r\n <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"\r\n  DefSemiHidden="true" DefQFormat="false" DefPriority="99"\r\n  LatentStyleCount="267">\r\n  <w:LsdException Locked="false" Priority="0" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>\r\n  <w:LsdException Locked="false" Priority="9" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>\r\n  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>\r\n  <w:LsdException Locked="false" Priority="10" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Title"/>\r\n  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>\r\n  <w:LsdException Locked="false" Priority="11" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>\r\n  <w:LsdException Locked="false" Priority="22" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>\r\n  <w:LsdException Locked="false" Priority="20" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="59" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Table Grid"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>\r\n  <w:LsdException Locked="false" Priority="1" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>\r\n  <w:LsdException Locked="false" Priority="34" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>\r\n  <w:LsdException Locked="false" Priority="29" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>\r\n  <w:LsdException Locked="false" Priority="30" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="19" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="21" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="31" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>\r\n  <w:LsdException Locked="false" Priority="32" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>\r\n  <w:LsdException Locked="false" Priority="33" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>\r\n  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>\r\n  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>\r\n </w:LatentStyles>\r\n</xml><![endif]--><!-- [if gte mso 10]>\r\n<style>\r\n /* Style Definitions */\r\n table.MsoNormalTable\r\n	{mso-style-name:"Table Normal";\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-noshow:yes;\r\n	mso-style-priority:99;\r\n	mso-style-parent:"";\r\n	mso-padding-alt:0in 5.4pt 0in 5.4pt;\r\n	mso-para-margin:0in;\r\n	mso-para-margin-bottom:.0001pt;\r\n	mso-pagination:widow-orphan;\r\n	font-size:10.0pt;\r\n	font-family:"Calibri","sans-serif";\r\n	mso-bidi-font-family:"Times New Roman";}\r\n</style>\r\n<![endif]--><!-- [if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves/>\r\n  <w:TrackFormatting/>\r\n  <w:PunctuationKerning/>\r\n  <w:ValidateAgainstSchemas/>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF/>\r\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\r\n  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables/>\r\n   <w:SnapToGridInCell/>\r\n   <w:WrapTextWithPunct/>\r\n   <w:UseAsianBreakRules/>\r\n   <w:DontGrowAutofit/>\r\n   <w:SplitPgBreakAndParaMark/>\r\n   <w:EnableOpenTypeKerning/>\r\n   <w:DontFlipMirrorIndents/>\r\n   <w:OverrideTableStyleHps/>\r\n  </w:Compatibility>\r\n  <m:mathPr>\r\n   <m:mathFont m:val="Cambria Math"/>\r\n   <m:brkBin m:val="before"/>\r\n   <m:brkBinSub m:val="--"/>\r\n   <m:smallFrac m:val="off"/>\r\n   <m:dispDef/>\r\n   <m:lMargin m:val="0"/>\r\n   <m:rMargin m:val="0"/>\r\n   <m:defJc m:val="centerGroup"/>\r\n   <m:wrapIndent m:val="1440"/>\r\n   <m:intLim m:val="subSup"/>\r\n   <m:naryLim m:val="undOvr"/>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]--><!-- [if gte mso 9]><xml>\r\n <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"\r\n  DefSemiHidden="true" DefQFormat="false" DefPriority="99"\r\n  LatentStyleCount="267">\r\n  <w:LsdException Locked="false" Priority="0" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>\r\n  <w:LsdException Locked="false" Priority="9" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>\r\n  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>\r\n  <w:LsdException Locked="false" Priority="10" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Title"/>\r\n  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>\r\n  <w:LsdException Locked="false" Priority="11" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>\r\n  <w:LsdException Locked="false" Priority="22" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>\r\n  <w:LsdException Locked="false" Priority="20" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="59" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Table Grid"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>\r\n  <w:LsdException Locked="false" Priority="1" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>\r\n  <w:LsdException Locked="false" Priority="34" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>\r\n  <w:LsdException Locked="false" Priority="29" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>\r\n  <w:LsdException Locked="false" Priority="30" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="19" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="21" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="31" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>\r\n  <w:LsdException Locked="false" Priority="32" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>\r\n  <w:LsdException Locked="false" Priority="33" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>\r\n  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>\r\n  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>\r\n </w:LatentStyles>\r\n</xml><![endif]--><!-- [if gte mso 10]>\r\n<style>\r\n /* Style Definitions */\r\n table.MsoNormalTable\r\n	{mso-style-name:"Table Normal";\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-noshow:yes;\r\n	mso-style-priority:99;\r\n	mso-style-parent:"";\r\n	mso-padding-alt:0in 5.4pt 0in 5.4pt;\r\n	mso-para-margin:0in;\r\n	mso-para-margin-bottom:.0001pt;\r\n	mso-pagination:widow-orphan;\r\n	font-size:10.0pt;\r\n	font-family:"Calibri","sans-serif";\r\n	mso-bidi-font-family:"Times New Roman";}\r\n</style>\r\n<![endif]-->\r\n<p><!-- [if gte mso 9]><xml>\r\n <o:DocumentProperties>\r\n  <o:Version>14.00</o:Version>\r\n </o:DocumentProperties>\r\n <o:OfficeDocumentSettings>\r\n  <o:AllowPNG/>\r\n </o:OfficeDocumentSettings>\r\n</xml><![endif]--></p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

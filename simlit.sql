-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Agu 2017 pada 05.47
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simlit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fab_ijin`
--

CREATE TABLE IF NOT EXISTS `fab_ijin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `date_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `nomor_surat` text CHARACTER SET utf8,
  `judul_penelitian` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `bidang_penelitian` text CHARACTER SET utf8,
  `bidang_penelitian_lain` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `lokasi_penelitian` text CHARACTER SET utf8,
  `tanggal_mulai_penelitian` datetime DEFAULT CURRENT_TIMESTAMP,
  `tanggal_selesai_penelitian` datetime DEFAULT CURRENT_TIMESTAMP,
  `nomor_surat_instansi` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `penanggung_jawab` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `pengikut` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `surat_permohonan_instansi` text CHARACTER SET utf8,
  `scan_copy_identitas` text CHARACTER SET utf8,
  `pas_foto_berwarna` text CHARACTER SET utf8,
  `softcopy_proposal_penelitian` text CHARACTER SET utf8,
  `surat_penyerahan_hasil` text CHARACTER SET utf8,
  `data_pemohon` text CHARACTER SET utf8,
  `jenis_ijin` text CHARACTER SET utf8,
  `scan_rekomendasi` text CHARACTER SET utf8,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `date_status` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data untuk tabel `fab_ijin`
--

INSERT INTO `fab_ijin` (`id`, `userid`, `date_time`, `nomor_surat`, `judul_penelitian`, `bidang_penelitian`, `bidang_penelitian_lain`, `lokasi_penelitian`, `tanggal_mulai_penelitian`, `tanggal_selesai_penelitian`, `nomor_surat_instansi`, `penanggung_jawab`, `pengikut`, `surat_permohonan_instansi`, `scan_copy_identitas`, `pas_foto_berwarna`, `softcopy_proposal_penelitian`, `surat_penyerahan_hasil`, `data_pemohon`, `jenis_ijin`, `scan_rekomendasi`, `status`, `date_status`) VALUES
(13, 0, '2017-03-28 00:00:00', '070/III.00/2017', 'Analisis DIsabilitas terhadap dampak teknologi di Kecamatan Randublatung Blora', 'Sosial', '', 'Kecamatan Randublatung', NULL, NULL, '094.1/215/420/2017', 'Andjar Prasetyo', '2', '/images/lembar_Cover_acc.pdf', '/images/stories/BA_Sidang_Tesis_Andjar28082015_0000.pdf', '/images/stories/IMG-20151004-WA0000.jpg', '/images/stories/3._PANDUAN_PTK.pdf', '/images/stories/Pengantar_surat.pdf', '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', NULL, NULL, 2, '0000-00-00 00:00:00'),
(14, 0, '2017-03-30 00:00:00', '070/III.00/2017', 'sjahhl', 'Politik', '', 'GFAHATJ', NULL, NULL, '123344', 'FBGDNGZNZ', '0', '/images/1b40336eefe05fb68499dae904df1c27.jpg', '/images/stories/2e19ddb30a818f2edebb8d074fa6df68.jpg', '/images/stories/3a2af1785d62603502f6760bae5dc0e9.jpg', '/images/stories/4782c559656c0eee963263e8f100f73e.jpg', '/images/stories/C75yJfoVMAEMtu6.jpg', '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', NULL, NULL, 3, '0000-00-00 00:00:00'),
(15, 0, '2017-03-30 00:00:00', '070/III.00/2017', 'Pemanfaatan teknologi informasi pada kabupaten blora', 'Teknik Informatika', '', 'Cepu blora jawa tengah', NULL, NULL, 'IZ/123/2017', 'naskan', '2', '/images/ifthen.pdf', '/images/stories/etoolbox.pdf', '/images/stories/Belajar_Cara_Membuat_Website_Sendiri.pdf', '/images/stories/16466552-Cara-Membuat-Website-Dengan-HTML.pdf', '/images/stories/MITESD_051JF12_Lec14_2.pdf', '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', NULL, NULL, 4, '0000-00-00 00:00:00'),
(16, 0, '2017-03-31 00:00:00', '070/III.00/2017', 'Faktor-Faktor yang mempengaruhi kinerja jaringan irigasi waduk Tempuran', 'Teknik Sipil', '', 'Bappeda Kabupaten Blora', NULL, NULL, '001/III/2017', 'Prof. DR. Ir. Samin', '1 Orang', '/images/Divisi_1_-_Des_2010_R3_sec.pdf', '/images/stories/Divisi_2_-_Des_2010_R3_sec.pdf', '/images/stories/Divisi_3_-_Des_2010_R3_sec.pdf', '/images/stories/Divisi_4_-_Des_2010_R3_sec.pdf', '/images/stories/Divisi_5_-Des_2010_R3_sec.pdf', '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', NULL, NULL, 5, '0000-00-00 00:00:00'),
(17, 0, '2017-04-04 00:00:00', '070/IV.00/2017', 'sadasd', 'Sosial', '', 'asdasdas', NULL, NULL, 'sadasdasd', 'dasdsd', '2', '/images/LaporanPDFMenggunakanPHP.pdf', '/images/stories/Responsive_free_joomla_3_template.pdf', '/images/stories/Surat_Ijin_Penelitian.pdf', '/images/stories/cetakBappeda.pdf', '/images/stories/belajar-PHP.pdf', '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', NULL, NULL, 1, '0000-00-00 00:00:00'),
(18, 0, '2017-04-19 00:00:00', '070/IV.00/2017', 'sistem informasi pendidikan', 'Pendidikan', '', 'kecamatan blora', NULL, NULL, '1213344', 'naskan', '3', '/images/CV_naskan.pdf', '/images/stories/Surat_Permohonan_Pencairan_Dana_Bantuan.pdf', '/images/stories/17855577_1829376957088662_4870671175322519692_o.jpg', '/images/stories/tesla_model_s.jpg', '/images/stories/17157620_379699629078985_5035710061684166625_o.jpg', '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', 'Penelitian', '/images/stories/tesla_x_4.jpg', 1, '0000-00-00 00:00:00'),
(19, 0, '2017-04-20 00:00:00', '070/IV.00/2017', 'sistem informasi', 'Teknik Informatika', '', 'kab blora', NULL, NULL, '123', 'naskan', '3', '/images/Surat_permohonan_dari_institusi.pdf', '/images/stories/Scan_KTP.pdf', '/images/stories/Foto.jpg', '/images/stories/Softcopy_proposal_penelitian.pdf', NULL, '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', 'Penelitian', '/images/stories/Surat_rekomendasi_dari_universitas.pdf', 1, '0000-00-00 00:00:00'),
(20, 0, '2017-06-07 00:00:00', '070/VI.00/2017', 'Pnecegahan HIV AIDS supaya tidak menyebar Luas', 'Psikologis', '', 'Kabupaten Blora', NULL, NULL, '07/118/VI/2017', 'Drs. Ahmad Habib', '1', '/images/7caog4RMi.png', '/images/stories/bb.JPG', '/images/stories/IMG_0657.JPG', '/images/stories/bb.JPG', NULL, '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', 'Penelitian', '/images/stories/bb.JPG', 1, '0000-00-00 00:00:00'),
(21, 0, '2017-06-07 00:00:00', '070/VI.00/2017', 'Analisis Peningkatan Keagamaan di MTS', 'Lainnya', 'Agama', 'Mts Nurul Huda', NULL, NULL, '07/118/VI/2017', 'Drs. Ahmad Habib', '2', '/images/PENGUMUMAN_PEMENANG.pdf', '/images/stories/Buku_Panduan_RUD_20032017.pdf', '/images/stories/ktp.pdf', '/images/stories/Surat_Penelitian.jpg', NULL, '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', 'Penelitian', '/images/stories/ktp.pdf', 1, '0000-00-00 00:00:00'),
(22, 0, '2017-06-17 00:00:00', '070/VI.00/2017', 'sadasdsadsa', 'Sosial', '', 'asdsadsadsad', NULL, NULL, 'asdsadsad', 'dsadasdas', '2', '/images/Innovation.jpg', '/images/stories/see_thing_act.jpg', '/images/stories/succes_projek.jpg', '/images/stories/berfikir.jpg', NULL, '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', 'Observasi', '/images/stories/strategi.jpg', 1, '0000-00-00 00:00:00'),
(23, 0, '2017-06-17 00:00:00', '070/VI.00/2017', 'Analisis jaringan irigasi', 'Teknik Sipil', '', 'Kabupaten Blora', NULL, NULL, '001/VI/2017', 'Kasubbid Litbang', '1', '/images/Rekap_BQ_Indeks_Daya_Saing.pdf', '/images/stories/BQ_Indeks_Daya_Saing.pdf', '/images/stories/KAK_-_RP2I.pdf', '/images/stories/Rekap_BQ-RP2I.pdf', NULL, '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', 'Penelitian', '/images/stories/KAK_Masterplan_Angkutan_2017.pdf', 1, '0000-00-00 00:00:00'),
(24, 0, '2017-06-17 00:00:00', '070/VI.00/2017', 'Analisa Terhadap', 'Sosial', '', 'Blora', NULL, NULL, '071/126/VI/2017', 'Ahmad Habib', '1', '/images/BAPPEDA.pdf', '/images/stories/DINA_LINGKUNGAN_HIDUP.pdf', '/images/stories/DINA_LINGKUNGAN_HIDUP.pdf', '/images/stories/mpdf_14.pdf', NULL, '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', 'Observasi', '/images/stories/mpdf_21.pdf', 1, '0000-00-00 00:00:00'),
(25, 0, '2017-06-19 00:00:00', '070/VI.00/2017', 'Analisis anu', 'Teknik Sipil', '', 'Kabupaten Blora', NULL, NULL, '001/Litbangsta/VI/2017', 'Kasubbid Litbang', '2', '/images/11._KRENOVA_SIRUP_KUNYIT_JAHE.pdf', '/images/stories/6._krenova_jati_Tektona.pdf', '/images/stories/11._KRENOVA_SIRUP_KUNYIT_JAHE.pdf', '/images/stories/11._KRENOVA_SIRUP_KUNYIT_JAHE.pdf', NULL, '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', 'Penelitian', '/images/stories/11._KRENOVA_SIRUP_KUNYIT_JAHE.pdf', 1, '0000-00-00 00:00:00'),
(26, 0, '2017-07-03 00:00:00', '070/VII.00/2017', 'Pengaruh Karakteristik Tujuan Anggaran terhadap Kinerja Manajerial dengan Intellectual Capital sebagai Variabel Moderasi', 'Ekonomi', '', 'Organisasi Pemerintah Daerah Lingkup Pemda Blora', NULL, NULL, '070/7065/209.4.2017', 'Dr. Wiwiek Dianawati, M.Si, Ak, CMA', '1', '', '', '', '', NULL, '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', 'Penelitian', '', 1, '0000-00-00 00:00:00'),
(27, 0, '2017-07-04 00:00:00', '070/VII.00/2017', 'analisis pemberdayaan sosial', 'Sosial', '', 'dinas pmd', NULL, NULL, '02/kaka/2017', 'dosen', '-', '/images/1.png', '/images/stories/1597762_379239678926802_874709525_n.jpg', '/images/stories/PERBUP-51-BAPPEDA.pdf', '/images/stories/PERDA_11_2016_-_OPD.pdf', NULL, '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', 'Penelitian', '/images/stories/21712048120_ca0a9c519c_o.jpg', 1, '0000-00-00 00:00:00'),
(28, 0, '2017-07-05 00:00:00', '070/VII.00/2017', 'Analisis', 'Ekonomi', '', 'jenar', NULL, NULL, '071/130/VII/2017', 'Nalaitul', '1', '/images/Sistem-Penganggaran-Penerintah.pdf', '/images/stories/S2-2014-325000-chapter1.pdf', '/images/stories/download-fullpapers-admpaeedbd5334full.pdf', '/images/stories/better_practice_guide_penganggaran_berbasis_kine_39444.pdf', NULL, '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', 'Penelitian', '/images/stories/54-3390-1-SM.pdf', 1, '0000-00-00 00:00:00'),
(29, 0, '2017-07-05 00:00:00', '070/VII.00/2017', 'Analisis Anu', 'Teknik Sipil', '', 'Kabupaten Blora', NULL, NULL, '001/VII/2017', 'Ki Demang', '1', '/images/1._Perpres-4-Tahun-2015.pdf', '/images/stories/2._Penjelasan-Perpres-4-Tahun-2015.pdf', '/images/stories/3._Inpres-1-Tahun-2015.pdf', '/images/stories/Ball_room_Hotel_Arum_Allium_Cepu__1_.pdf', NULL, '<p></p>\r\n<h4 style="text-align:center">Data Pemohon</h4>\r\n<p></p>', 'Penelitian', '/images/stories/3._Inpres-1-Tahun-2015.pdf', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fab_member`
--

CREATE TABLE IF NOT EXISTS `fab_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ulangi_password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `nomor_handphone` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `level` varchar(50) DEFAULT 'Member',
  `jenis_identitas` varchar(50) DEFAULT NULL,
  `no_identitas` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kelurahan` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `institusi` varchar(50) DEFAULT NULL,
  `alamat_institusi` varchar(50) DEFAULT NULL,
  `pekerjaan_lain` varchar(50) DEFAULT NULL,
  `foto` varchar(100) DEFAULT 'user.png',
  `status` enum('Valid','Tidak Valid','','') DEFAULT 'Tidak Valid',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Dumping data untuk tabel `fab_member`
--

INSERT INTO `fab_member` (`id`, `date_time`, `username`, `password`, `email`, `ulangi_password`, `nama`, `nomor_handphone`, `level`, `jenis_identitas`, `no_identitas`, `tgl_lahir`, `jenis_kelamin`, `agama`, `alamat`, `kelurahan`, `kecamatan`, `pekerjaan`, `institusi`, `alamat_institusi`, `pekerjaan_lain`, `foto`, `status`) VALUES
(14, '2017-06-17 05:22:06', 'simpelbang', '2f25f77ca33ccd179830129f24c54703:ayy90eM7Yioxu0gBXKJrtvTD4aTxyOs1', 'simpelbang@blorakab.go.id', NULL, 'simpelbang', '08181818181901', 'Member', '', '', '0000-00-00', 'Laki-Laki', '', 'bchjsdbvchusdvfu gug', '', '', '', 'ncksbdvjdsbvjhbdshv', '', '', 'user.png', 'Valid'),
(16, '2017-06-17 06:56:07', 'arief', 'b7ca428fe4c3eec3b860201af8a67645:Tb4XJVvPXbEf804w7cc5XB3F2smzh3ST', 'ariefbudiyanto94@gmail.com', NULL, 'Arief Budiyanto', '089692500610', 'Member', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'user.png', 'Tidak Valid'),
(22, '2017-07-03 07:02:11', 'simpelbangku', '3d5b0cbf65e261e2e01c8c83fd7fa315:py6SMzeDxBCJBxAPoOhNghHUpq2SLFha', 'raden.ch@gmail.com', NULL, 'R Cahyo Hasbiyarto', '081232375691', 'Member', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'user.png', 'Tidak Valid'),
(21, '2017-06-19 05:18:28', 'litbang', '5e6bfb5c3096815641199fea9f61e6df:sphnjIsYqgpSiyE855MGukeRAovd4BLr', 'litbangsta.bappedablora1@gmail.com', NULL, 'litbangsta bappeda blora', '081357763184', 'Member', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'user.png', 'Tidak Valid'),
(23, '2017-07-04 04:11:25', 'dayang', '0a5ecaffbe67a8a9d83c1e040e8d98a4:dj3vwTZfqadgVWQ8UA6umtXzMjkfCYN5', 'adzramanis10@gmail.com', NULL, 'dayang muda', '085740651211', 'Member', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'user.png', 'Tidak Valid'),
(24, '2017-07-05 04:32:55', 'kristian', '1c84d8ca956e5116b7172f7843848168:M0DUyIG5dyrwhJC92RkzGFPssNPxniPj', 'kristian.anjar@yahoo.co.id', NULL, 'kristian anjar', '081357763184', 'Member', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'user.png', 'Tidak Valid'),
(25, '2017-07-10 03:27:22', 'kukuhkds', 'a8bbc0ff67748c7821e0773c69b4f721:DH4ne4xA5IM8wfK7urdPUswTDnrnuHSI', 'kukuhkds.utpska@gmail.com', NULL, 'kukuh kurniawan dwi sungkono', '081326666114', 'Member', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'user.png', 'Tidak Valid'),
(26, '2017-07-10 04:57:00', 'Arya', '042fe10aedba92254dfb23e1fa119749:mm5OYXShHUEKFpGuyhkY1Iopj05S2OCI', 'sitaresmi09@gmail.com', NULL, 'R.LUKMAN WIJAYANTO', '082139827788', 'Member', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'user.png', 'Tidak Valid'),
(27, '2017-07-11 09:20:21', 'tikarestip', 'a3c3ef130a152e54710005cc8159b72e:oOEXcNfmQSZ7E6pwNbyjI6w1KKuGHhVG', 'tikaresti12@gmail.com', NULL, 'Tika Resti Pratiwi', '085726126766', 'Member', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'user.png', 'Tidak Valid'),
(29, '2017-07-13 03:13:47', 'Dicky Nugroho', '29c0a4d5e9ae31fc096c703c38810d56:4w4kKssbArZFspH5WURG1VUvq4x72ej9', 'dicky.nugroho@gmail.com', NULL, 'Dicky Cahyo Nugroho', '089519899047', 'Member', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'user.png', 'Tidak Valid'),
(35, '2017-07-26 03:16:20', 'dimas123', '7d49e40f4b3d8f68c19406a58303f826', 'dimas@gmail.com', NULL, 'dimas', '', 'Member', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'user.png', 'Tidak Valid'),
(34, '2017-07-26 03:00:51', 'joni123', '1c0ac25b077a885dc53d91b05b14544e', 'j.rodito@gmail.com', NULL, 'joni', '87687686787', 'Member', 'PASPOR', '123456', '1985-08-10', 'Laki-Laki', 'ISLAM', 'jkhkhkhkhjhkjhkjh', 'jhkhkjh', 'kjhkhkjh', 'jkhkjhkj', 'hkhkjh', 'hkhkjh', 'kjhkjhkj', 'user.png', 'Tidak Valid'),
(37, '2017-08-05 00:04:20', 'username', 'e10adc3949ba59abbe56e057f20f883e', 'email@gmail.com', NULL, 'Contoh Nama', NULL, 'Member', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'user.png', 'Tidak Valid'),
(38, '2017-08-05 00:18:21', 'cek', 'd94b3fc388ef9231425a7c1096fe8596', 'cek@gmail.com', NULL, 'cek', NULL, 'Member', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'user.png', 'Tidak Valid'),
(39, '2017-08-05 08:12:55', 'pakdimas', '7d49e40f4b3d8f68c19406a58303f826', 'pakdimas@gmail.com', NULL, 'Pak Dimas', '68768768768', 'Member', 'KTP', '879877989879798', '1980-08-12', 'Laki-Laki', 'ISLAM', 'jhkjhkjhk', 'kjhkjhkjhk', 'kjhkjhkjhkjh', 'jhkjhkjhk', 'hkhkjh', 'hkhkjh', 'kjhkhkj', 'user.png', 'Tidak Valid'),
(40, '2017-08-05 09:22:56', 'pakbagus', 'c326b52215380978300cb1c4751792cf', 'pakbagus@gmail.com', NULL, 'Pak Bagusus', '9809808098', 'Member', 'KTP', '989898989', '1988-08-02', 'Laki-Laki', 'ISLAM', 'jljlkjkjk', 'asdassadsa', 'fsadsadsa', 'afdfefas', 'fdfddfaa', 'fdfddfaa', 'ksdlkjsakdowij', 'user.png', 'Tidak Valid'),
(111, '2017-08-10 18:17:53', 'admin', '0192023A7BBD73250516F069DF18B500', 'ash@gmail.com', '0192023A7BBD73250516F069DF18B500', 'admin', '457385643', 'Admin', 'ktp', '34624', '2017-08-01', 'L', 'islam', 'a', 'aa', 'a', 'a', 'a', 'a', 'a', 'user.png', 'Tidak Valid'),
(113, '2017-08-10 18:55:44', 'q', '81dc9bdb52d04dc20036dbd8313ed055', 'q@gmail.com', NULL, 'q', NULL, 'Member', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'user.png', 'Tidak Valid');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

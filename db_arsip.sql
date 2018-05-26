-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 09:00 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `kegiatan` varchar(300) NOT NULL,
  `tempat` varchar(300) NOT NULL,
  `unit_kerja` varchar(300) NOT NULL,
  `hadir` varchar(300) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_agenda`
--

INSERT INTO `tb_agenda` (`id`, `tanggal`, `waktu`, `kegiatan`, `tempat`, `unit_kerja`, `hadir`, `keterangan`) VALUES
(23, '2018-04-20', '10:30 PM', 'kegiatan 1', 'tempat 1', 'unit kerja', 'hadir', 'keterangan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_asal_tujuan_external`
--

CREATE TABLE `tb_asal_tujuan_external` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_asal_tujuan_external`
--

INSERT INTO `tb_asal_tujuan_external` (`id`, `nama`) VALUES
(1, 'Bidang Arsip Dinamis'),
(2, 'Bidang Arsip Statis'),
(3, 'Subbag Keuangan'),
(4, 'Subbag Umum'),
(5, 'Bidang Pelayanan dan Pelestarian BP'),
(6, 'Sekretariat'),
(7, 'Subbid Akuisisi dan Pelestarian'),
(8, 'Kepala Instansi'),
(9, 'Bidang Pengembangan Perpustakaan'),
(10, 'pribadi'),
(11, 'BAGIAN HUMAS DAN PROTOKOL'),
(12, 'BAGIAN PERLENGKAPAN DAN ASSET DAERAH'),
(13, 'BAGIAN UMUM'),
(14, 'BAGIAN KEUANGAN'),
(15, 'BAGIAN ADMINISTRASI PEREKONOMIAN'),
(16, 'BAGIAN ADMINISTRASI PEMBANGUNAN'),
(17, 'BAGIAN HUKUM DAN HAM'),
(18, 'BAGIAN ADMINISTRASI KESEJAHTERAAN RAKYAT'),
(19, 'BAGIAN ADMINISTRASI PEMERINTAHAN UMUM'),
(20, 'DINAS PENDIDIKAN, PEMUDA DAN OLAH RAGA '),
(21, 'DINAS KESEHATAN'),
(22, 'DINAS SOSIAL DAN TENAGA KERJA'),
(23, 'DINAS PERHUBUNGAN, KOMUNIKASI DAN INFORMATIKA'),
(24, 'DINAS KEBUDAYAAN'),
(25, 'DINAS KEPENDUDUKAN DAN CATATAN SIPIL'),
(26, 'PERINDUSTRIAN DAN PERDAGANGAN'),
(27, 'DINAS PERTERNAKAN, PERIKANAN DAN KELAUTAN'),
(28, 'DINAS PERTANIAN, PERKEBUNAN DAN KEHUTANAN'),
(29, 'DINAS PENDAPATAN DAERAH / PASEDEHAN AGUNG'),
(30, 'DINAS PEMADAM KEBAKARAN'),
(31, 'DINAS KEBERSIHAN DAN PERTANAMAN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_asal_tujuan_internal`
--

CREATE TABLE `tb_asal_tujuan_internal` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_asal_tujuan_internal`
--

INSERT INTO `tb_asal_tujuan_internal` (`id`, `nama`) VALUES
(1, 'Subbag Umum dan Kepegawaian'),
(2, 'subbag Keuangan'),
(3, 'Subbag Perencanaan dan Pelaporan'),
(4, 'Bidang Pengembangan Sumber Daya Manusia'),
(5, 'Bidang Ekonomi dan Sumber Daya Alam'),
(6, 'Bidang Sosial dan Budaya'),
(7, 'Bidang Sarana dan Prasarana Wilayah'),
(8, 'Subbid Kesejahteraan Masyarakat'),
(9, 'Subbid Pendidikan dan Kepemudaan'),
(10, 'Subbid Pengembangan Ketenagakerjaan'),
(11, 'Subbid Ekonomi'),
(12, 'Subbid Pengembangan Dunia Usaha'),
(13, 'Subbid Pertanian dan Sumber Daya Alam'),
(14, 'Subbid Sosial dan Pemberdayaan Desa'),
(15, 'Subbid Ketentraman dan Ketertiban'),
(16, 'Subbid Pengembangan Adat dan Budaya'),
(17, 'Subbid Infrastruktur Wilayah'),
(18, 'Subbid Pengembangan Wilayah'),
(19, 'Subbid Teknologi Informasi dan Komunikasi'),
(20, 'Sekretaris Bappeda'),
(21, 'Kepala Bappeda');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id` int(11) NOT NULL,
  `informasi` text NOT NULL,
  `mulaipengumuman` date NOT NULL,
  `akhirpengumuman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id`, `informasi`, `mulaipengumuman`, `akhirpengumuman`) VALUES
(2, '<p>informasi 2</p>\n', '0023-02-12', '0013-01-12'),
(3, '<p>informasi 1</p>\n', '2018-04-05', '2018-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `no_disposisi` varchar(20) NOT NULL,
  `sifat_surat` varchar(100) NOT NULL,
  `index_surat` varchar(100) NOT NULL,
  `perihal` text NOT NULL,
  `klasifikasi_arsip` varchar(500) NOT NULL,
  `isi_ringkasan` text NOT NULL,
  `asal_surat` varchar(100) NOT NULL,
  `tujuan_surat` varchar(100) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `lampiran` text NOT NULL,
  `file_lampiran` varchar(200) NOT NULL,
  `catatan` text NOT NULL,
  `batas_penyelesaian` date NOT NULL,
  `file_surat` varchar(200) NOT NULL,
  `tanggal_pengantar` date NOT NULL,
  `unit_pengolah_pengantar` varchar(200) NOT NULL,
  `file_pengantar` varchar(200) NOT NULL,
  `informasi_disposisi` text NOT NULL,
  `tgl_disposisi` date NOT NULL,
  `unit_pengolah_disposisi` varchar(100) NOT NULL,
  `file_disposisi` varchar(200) NOT NULL,
  `tujuan_disposisi` varchar(200) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`id_surat`, `no_surat`, `no_disposisi`, `sifat_surat`, `index_surat`, `perihal`, `klasifikasi_arsip`, `isi_ringkasan`, `asal_surat`, `tujuan_surat`, `tanggal_surat`, `lampiran`, `file_lampiran`, `catatan`, `batas_penyelesaian`, `file_surat`, `tanggal_pengantar`, `unit_pengolah_pengantar`, `file_pengantar`, `informasi_disposisi`, `tgl_disposisi`, `unit_pengolah_disposisi`, `file_disposisi`, `tujuan_disposisi`, `jenis_surat`) VALUES
(2, 'xxi/12/1q/ akb2017', 'DM/33/2/3x', 'Biasa', 'index', 'perihalq', 'UMUM', 'isiq', 'subbag Keuangan', 'Subbag Perencanaan dan Pelaporan', '2018-04-01', 'lampiranq', 'undefined', 'catatanq', '2018-04-02', 'undefined', '2018-04-03', 'Kasubbid Teknologi Informasi dan Komunikasi', 'undefined', 'isi disq', '2018-04-30', 'Kasubbid Teknologi Informasi dan Komunikasi', 'undefined', 'subbag Keuangan', 'surat masuk'),
(3, 'xxi/12', 'DM/33/2/3', 'Penting', 'dxx', 'x', 'POLITIK/ORGANISASI KEMASYARAKATAN', 'x', 'Subbag Umum dan Kepegawaian', 'Sekretariat', '2018-05-01', 'xx', 'lmp_1526351882_Data_Siswa.pdf', 'x', '2018-05-21', 'surat_1526351882_Data_Siswa.pdf', '2018-05-03', 'Sekretaris Bappeda', 'ps_1526351882_Data_Siswa.pdf', 'x', '2018-05-09', 'KaSubbid Pengembangan Wilayah', 'dsp_1526351882_Data_Siswa.pdf', 'Bidang Ekonomi dan Sumber Daya Alam', 'surat keluar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_unitpengolah`
--

CREATE TABLE `tb_unitpengolah` (
  `id` int(11) NOT NULL,
  `nama_unitPengolah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_unitpengolah`
--

INSERT INTO `tb_unitpengolah` (`id`, `nama_unitPengolah`) VALUES
(1, 'KaSubbag Umum dan Kepegawaian'),
(2, 'KaSubbag Keuangan'),
(3, 'KaSubbag Perencanaan dan Pelaporan'),
(4, 'Kabid Pengembangan Sumber Daya Manusia'),
(5, 'Kabid Ekonomi dan Sumber Daya Alam'),
(6, 'Kabid Sosial dan Budaya'),
(7, 'Kabid Sarana dan Prasarana Wilayah'),
(8, 'KaSubbid Kesejahteraan Masyarakat'),
(9, 'KaSubbid Pendidikan dan Kepemudaan'),
(10, 'KaSubbid Pengembangan Ketenagakerjaan'),
(11, 'KaSubbid Ekonomi'),
(12, 'KaSubbid Pengembangan Dunia Usaha'),
(13, 'KaSubbid Pertanian dan Sumber Daya Alam'),
(14, 'KaSubbid Sosial dan Pemberdayaan Desa'),
(15, 'KaSubbid Ketentraman dan Ketertiban'),
(16, 'KaSubbid Pengembangan Adat dan Budaya'),
(17, 'KaSubbid Infrastruktur Wilayah'),
(18, 'KaSubbid Pengembangan Wilayah'),
(19, 'Kasubbid Teknologi Informasi dan Komunikasi'),
(20, 'Sekretaris Bappeda'),
(21, 'Kepala Bappeda');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `thumb_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `fullname`, `jabatan`, `foto`, `thumb_foto`) VALUES
(1, 'rudi', '1755e8df56655122206c7c1d16b1c7e3', 'operator, s.kom', 'Operator', '3fa9eeb81c323c1e0c390f6bdc01c2b2_thumb.jpg', 'xx.png'),
(3, 'kim', 'fb1eaf2bd9f2a7013602be235c305e7a', 'kim arya, s.kom', 'Kepala', 'c3f0536c943a6e113be5b946fd96156f.jpg', 'c3f0536c943a6e113be5b946fd96156f_thumb.jpg'),
(4, 'ayu', '29c65f781a1068a41f735e1b092546de', 'dek ayu, S.TP', 'Sekretaris', '8fc9360f74c500808701039a840ff639.jpg', '18fc9360f74c500808701039a840ff639_thumb.jpg'),
(5, 'eri', '1f5198faff59782cd71dba9588e45697', 'Eri, S.Si', 'Bidang Ekonomi dan Sumber Daya', 'a2e1de7106a871f75e5535219cbb38d7.jpg', 'a2e1de7106a871f75e5535219cbb38d7_thumb.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_asal_tujuan_external`
--
ALTER TABLE `tb_asal_tujuan_external`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_asal_tujuan_internal`
--
ALTER TABLE `tb_asal_tujuan_internal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tb_unitpengolah`
--
ALTER TABLE `tb_unitpengolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_asal_tujuan_external`
--
ALTER TABLE `tb_asal_tujuan_external`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tb_asal_tujuan_internal`
--
ALTER TABLE `tb_asal_tujuan_internal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_unitpengolah`
--
ALTER TABLE `tb_unitpengolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

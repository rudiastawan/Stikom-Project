-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 05:37 PM
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
(21, '2018-03-16', '01:30 PM', 'ab', 'ab', 'ab', 'ab', 'ab'),
(22, '2018-03-01', '11:45 AM', 'sas', 'sas', 'as', 'q', 'q'),
(23, '2018-04-20', '10:30 PM', 's', 'q', 'q', 'q', 'q');

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
(2, 'Bidang Arsip Statis');

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
(2, 'subbag Keuangan');

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
(1, '<p>asdd</p>\n', '2018-03-01', '2018-03-07'),
(2, '<p>q</p>\n', '0023-02-12', '0013-01-12'),
(3, '<p>dfsf</p>\n', '2018-04-05', '2018-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
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
  `tujuan_disposisi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`id_surat`, `no_surat`, `sifat_surat`, `index_surat`, `perihal`, `klasifikasi_arsip`, `isi_ringkasan`, `asal_surat`, `tujuan_surat`, `tanggal_surat`, `lampiran`, `file_lampiran`, `catatan`, `batas_penyelesaian`, `file_surat`, `tanggal_pengantar`, `unit_pengolah_pengantar`, `file_pengantar`, `informasi_disposisi`, `tgl_disposisi`, `unit_pengolah_disposisi`, `file_disposisi`, `tujuan_disposisi`) VALUES
(1, 'xqq', 'Penting', 'weqe', 'weqe', 'UMUM', 'eqwew', 'Internal', 'Internal', '0000-00-00', 'eqweqe', 'lmp_1524713452_Modul OR - METODE TRANSPORTASI.pdf', 'weqe', '0000-00-00', 'surat_1524713452_Modul OR - METODE TRANSPORTASI.pdf', '0000-00-00', '', 'ps_1524713452_Modul OR - METODE TRANSPORTASI.pdf', '', '0000-00-00', '', 'dsp_1524713452_Modul OR - METODE TRANSPORTASI.pdf', '2'),
(2, 'xxi/12', 'Penting', 'dxx', 'perihal', 'UMUM', 'isi', 'Bidang Arsip Statis', 'Subbag Umum dan Kepegawaian', '2018-04-01', 'lampiran', 'lmp_1524750895_Modul OR - METODE TRANSPORTASI.pdf', 'catatan', '2018-04-02', 'surat_1524750895_Modul OR - METODE TRANSPORTASI.pdf', '2018-04-03', 'dinas pertambangan', 'ps_1524750895_Modul OR - METODE TRANSPORTASI.pdf', 'isi dis', '2018-04-30', 'dinas pertambangan', 'dsp_1524750895_Modul OR - METODE TRANSPORTASI.pdf', '1');

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
(1, 'dinas pertambangan'),
(2, 'dinas kehutanan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `fullname`) VALUES
(1, 'kim', 'fb1eaf2bd9f2a7013602be235c305e7a', 'kim arya');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_asal_tujuan_internal`
--
ALTER TABLE `tb_asal_tujuan_internal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_unitpengolah`
--
ALTER TABLE `tb_unitpengolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

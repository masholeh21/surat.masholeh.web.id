-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 07:43 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persuratan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `kodeJab` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `jabatan`, `kodeJab`) VALUES
('006120101', 'Riyanto, Prof., S.Pd., M.Si., Ph.D.', 'Dekan Fakultas Matematika dan Ilmu Pengetahuan Alam', '100'),
('006130101', 'Muhammad Hatta Prabowo, S.F., M.Si., Apt.', 'Dosen Jurusan Farmasi', '477'),
('006130102', 'Saepudin, S.Si., M.Si., Apt., Ph.D.', 'Ketua Program Studi Farmasi - Program Sarjana', '421'),
('006130103', 'Yandi Syukri, Dr., S.Si., M.Si., Apt.', 'Ketua Jurusan Farmasi', '400'),
('016120101', 'Dwiarso Rubiyanto, Dr., S.Si, M.Si.', 'Ketua Program Studi Kimia - Program Sarjana', '321'),
('016120102', 'Tatang Shabur Julianto, S.Si., M.Si.', 'Dosen Jurusan Kimia', '377'),
('036130102', 'Suci Hanifah, S.F., M.Si., Ph.D., Apt.', 'Kepala Laboratorium Riset Farmasi', '458'),
('036130103', 'Asih Triastuti, S.F. M.Pharm., Apt.', 'Dosen Jurusan Farmasi', '477'),
('046130101', 'Siti Zahliyatul Munawiroh, S.F.,  Apt., Ph.D.', 'Kepala Laboratorium Teknologi Farmasi', '459'),
('046130102', 'Rochmy Istikharah, S.Farm., M.Sc., Apt.', 'Dosen Jurusan Farmasi', '477'),
('046130407', 'Dwi Pudjaningsih, Dra. Hj., MMR.,  Apt.', 'Dosen Jurusan Farmasi', '477'),
('052316002', 'Reni Banowati Istiningrum, S.Si., M.Sc.', 'Dosen Jurusan Kimia', '377'),
('052316003', 'Thorikul Huda, S.Si., M.Sc.', 'Wakil Dekan Bidang Keagamaan, Kemahasiswaan, dan Alumni', '102'),
('052316004', 'Yulirohyami, S.Si., M.Sc.', 'Sekretaris Jurusan Kimia', '310'),
('056130703', 'Hady Anshory T, S.Si., Apt., M.Sc.', 'Dosen Jurusan Farmasi', '477'),
('056130704', 'Vitarani Dwi Ananda Ningrum, Dr., S.Si., M.Si., Apt.', 'Sekretaris Program Studi Farmasi - Program Sarjana', '431'),
('066120401', 'Pedy Artsanti, S.Si., M.Sc.', 'Dosen Jurusan Kimia', '377'),
('076130501', 'Yulianto, S.Farm., Apt., M.P.H.', 'Dosen Jurusan Farmasi', '477'),
('086110501', 'Suparna, Ir., M.Si.', 'Dosen Jurusan Statistika', '277'),
('086130404', 'Ari Wibowo, S.Farm., Apt., M.Sc.', 'Kepala Laboratorium Pengujian Obat, Makanan dan Kosmetik (LPOMK)', '457'),
('086130405', 'Dimas Adhi Pradana, S.Farm., M.Sc., Apt.', 'Sekretaris Jurusan Farmasi', '410'),
('086130406', 'Lutfi Chabib, Dr., S.Farm., M.Sc., Apt.', 'Dosen Jurusan Farmasi', '477'),
('096130101', 'Arba Pramundita Ramadani, Dr., S.Farm., M.Sc., Apt.', 'Kepala Laboratorium Farmakologi', '453'),
('096130102', 'Oktavia Indrati, S.Farm., M.Sc., Apt.', 'Dosen Jurusan Farmasi', '477'),
('096130405', 'Endang Sulistiyowatiningsih, S.Farm., Apt., M.Sc.', 'Dosen Jurusan Farmasi', '477'),
('096130408', 'Bambang Hernawan Nugroho, S.Farm., Apt., M.Sc.', 'Koordinator Laboratorium Jurusan Farmasi', '444'),
('096130502', 'Yunita Rizky Wijayanti, S.Pd., M.Hum.', 'Dosen Jurusan Farmasi', '477'),
('106130101', 'Fithria Dyah Ayu Suryanegara, S.Farm., M.Sc., Apt.', 'Dosen Jurusan Farmasi', '477'),
('106130102', 'Okti Ratna Mafruhah, S.Farm., M.Sc., Apt.', 'Dosen Jurusan Farmasi', '477'),
('116130101', 'Aris Perdana Kusuma, S.Farm. M.Sc., Apt.', 'Dosen Jurusan Farmasi', '477'),
('126130401', 'Annisa Fitria, S.Farm., Apt., M.Sc.', 'Kepala Laboratorium Mikrobiologi Farmasi', '456'),
('126130403', 'Yosi Febrianti, S.Farm., Apt., M.Sc.', 'Kepala Laboratorium Farmasi Praktis', '454'),
('126130405', 'Chynthia Pradiftha Sari, S.Farm., M.Sc., Apt.', 'Dosen Jurusan Farmasi', '477'),
('126140101', 'Krisna Merdekawati, S.Pd., M.Pd.', 'Ketua Program Studi Pendidikan Kimia - Program Sarjana', '323'),
('126150101', 'Ndaru Setyaningrum, S.Farm., M.Sc., Apt.', 'Dosen Jurusan Farmasi', '477'),
('132311101', 'Bayu Wiyantoko, S.Si., M.Sc.', 'Kepala Laboratorium Kimia Terapan', '451'),
('132311102', 'Tri Esti Purbaningtias, S.Si., M.Si.', 'Ketua Program Studi Analis Kimia - Program Diploma', '322'),
('132311103', 'Puji Kurniawati, S.Pd.Si., M.Sc.', 'Dosen Jurusan Kimia', '377'),
('136110504', 'Anggit Aruwiyantoko, S.Pd., M.Pd.', 'Dosen Jurusan Statistika', '277'),
('136111102', 'Ayundyah Kesumawati, S.Si., M.Si.', 'Dosen Jurusan Statistika', '277'),
('136151101', 'Dian Medisa, S.Farm., Apt., M.P.H.', 'Dosen Jurusan Farmasi', '477'),
('136151102', 'Diesty Anita Nugraheni, S.Farm., M.Sc., Apt.', 'Kepala Laboratorium Mini Teaching Hospital dan OSCE Center', '450'),
('146110101', 'Atina Ahdika, S.Si., M.Si.', 'Dosen Jurusan Statistika', '277'),
('146110504', 'Arum Handini Primandari, S.Pd.Si., M.Sc.', 'Koordinator Laboratorium Jurusan/Program Studi Statistika', '244'),
('146110505', 'Muhammad Muhajir, S.Si., M.Sc.', 'Kepala Laboratorium Data Mining', '251'),
('146110507', 'Prabarini Dwi Pangestu, S.Pd., M.Hum.', 'Dosen Jurusan Statistika', '277'),
('146151303', 'Mutiara Herawati, S.Farm., M.Sc., Apt.', 'Dosen Jurusan Farmasi', '477'),
('151001301', 'Asyharul Muala, S.H.I., M.H.I.', 'Dosen Jurusan Statistika', '277'),
('153130501', 'Shubhi Mahmashony Harimurti, S.S., M.A.', 'Dosen Jurusan Farmasi', '477'),
('156110502', 'Tuti Purwaningsih, S.Stat., M.Si.', 'Dosen Jurusan Statistika', '277'),
('156111303', 'Muhammad Hasan Sidiq Kurniawan, S.Si., M.Sc.', 'Sekretaris Jurusan/Program Studi Statistika - Program Sarjana', '210'),
('156111305', 'Rahmadi Yotenka, S.Si., M.Sc.', 'Dosen Jurusan Statistika', '277'),
('156120103', 'Gani Purwiandono, S.Si., M.Sc.', 'Dosen Jurusan Kimia', '377'),
('156120104', 'Nurcahyo Iman Prakoso, S.Si., M.Sc.', 'Sekretaris Program Studi Kimia - Program Sarjana', '331'),
('156120105', 'Salmahaminati, S.Si., M.Sc.', 'Dosen Jurusan Kimia', '377'),
('156120210', 'Habibi Hidayat, S.Pd., M.Si.', 'Dosen Jurusan Kimia', '377'),
('156121301', 'Mai Anugrahwati, S.Si., M.Sc.', 'Kepala Laboratorium Kimia Pengajaran', '350'),
('156121308', 'Muhammad Arsyik Kurniawan S, S.Si., M.Sc.', 'Kepala Laboratorium Riset Kimia', '352'),
('156121311', 'Febi Indah Fajarwati, S.Si., M.Sc.', 'Dosen Jurusan Kimia', '377'),
('156121312', 'Ika Yanti, S.Si., M.Sc.', 'Dosen Jurusan Kimia', '377'),
('156130103', 'Sista Werdyani, S.Farm., Apt., M.Biotech.', 'Kepala Laboratorium Kimia Farmasi', '455'),
('156131304', 'Cynthia Astiti Putri, S.Farm., Apt., M.Si.', 'Dosen Jurusan Farmasi', '477'),
('156131305', 'Arde Toga Nugraha, S.Farm., Apt., M.Sc.', 'Kepala Laboratorium Biologi Farmasi', '452'),
('156141302', 'Artina Diniaty, S.Pd.Si., M.Pd.', 'Kepala Laboratorium Microteaching', '353'),
('156141303', 'Beta Wulan Febriana, S.Pd., M.Pd.', 'Dosen Jurusan Kimia', '377'),
('156141304', 'Widinda Normalia Arlianty, S.Pd., M.Pd.', 'Dosen Jurusan Kimia', '377'),
('156141305', 'Muhaimin, S.Si., M.Sc.', 'Dosen Jurusan Kimia', '377'),
('162310401', 'Kuntari, S.Si., M.Sc.', 'Dosen Jurusan Kimia', '377'),
('162310402', 'R Yosi Aprian Sari, S.Si., M.Si.', 'Dosen Jurusan Kimia', '377'),
('162310403', 'Rio Christy Handziko, S.Pd.Si., M.Pd.', 'Dosen Jurusan Kimia', '377'),
('166110102', 'Mujiati Dwi Kartikasari, S.Si., M.Sc.', 'Dosen Jurusan Statistika', '277'),
('166120101', 'Amri Setyawati, S.Si., M.Sc.', 'Dosen Jurusan Kimia', '377'),
('166120102', 'Argo Khoirul Anas, S.Si., M.Sc.', 'Koordinator Laboratorium Jurusan Kimia', '344'),
('166120103', 'Dhina Fitriastuti, S.Si., M.Sc.', 'Kepala Laboratorium Minyak Atsiri', '351'),
('166120104', 'Wiyogo Prio Wicaksono, S.Si., M.Si.', 'Dosen Jurusan Kimia', '377'),
('166130501', 'Novi Dwi Rugiarti, S.Si., Apt., M.Sc.', 'Dosen Jurusan Farmasi', '477'),
('166130502', 'Wimbuh Dumadi, S.Si., Apt., M.H.', 'Dosen Jurusan Farmasi', '477'),
('176110101', 'Abdullah Ahmad Dzikrullah, S.Si., M.Sc.', 'Dosen Jurusan Statistika', '277'),
('176110102', 'Achmad Fauzan, S.Pd., M.Si.', 'Kepala Laboratorium Statistika Manajemen Kebencanaan', '252'),
('176110103', 'Dina Tri Utari, S.Si., M.Sc.', 'Kepala Laboratorium Bisnis Industri dan Sosial', '250'),
('176131301', 'Ardi Nugroho, S.Farm., M.Sc.', 'Dosen Jurusan Farmasi', '477'),
('178200501', 'Rina Desitarahmi, S.Pd., M.Hum.', 'Dosen Jurusan Farmasi', '477'),
('182310101', 'Ganjar Fadillah, S.Si., M.Si.', 'Dosen Jurusan Kimia', '377'),
('186110101', 'Sekti Kartika Dini, S.Si., M.Si.', 'Dosen Jurusan Statistika', '277'),
('186120101', 'Imam Sahroni, S.Si., M.Sc.', 'Dosen Jurusan Kimia', '377'),
('186120102', 'Muhammad Miqdam Musawwa, S.Si., M.Sc.', 'Dosen Jurusan Kimia', '377'),
('186130405', 'Harsa Permata, S.Fil. M.Phil.', 'Dosen Jurusan Farmasi', '477'),
('825210202', 'Suparmi, Dra., M.Si. Apt.', 'Dosen Jurusan Farmasi', '477'),
('956110101', 'Akhmad Fauzy, Prof., S.Si., M.Si., Ph.D.', 'Dosen Jurusan Statistika', '277'),
('956110102', 'Jaka Nugraha, Dr., S.Si., M.Si.', 'Dosen Jurusan Statistika', '277'),
('966110101', 'Rohmatul Fajriyah, Dr.techn., S.Si., M.Si.', 'Wakil Dekan Bidang Sumber Daya', '101'),
('966110102', 'Kariyam, S.Si., M.Si.', 'Dosen Jurusan Statistika', '277'),
('966110103', 'Edy Widodo, Dr., S.Si., M.Si.', 'Ketua Jurusan/Program Studi Statistika - Program Sarjana', '200'),
('966120101', 'Allwar, Drs., M.Sc., Ph.D.', 'Ketua Program Studi Kimia - Program Magister', '324'),
('986110101', 'Raden Bagus Fajriya Hakim, Dr., S.Si., M.Si.', 'Dosen Jurusan Statistika', '277'),
('986120101', 'Is Fatimah, Dr., S.Si., M.Si.', 'Ketua Jurusan Kimia', '300'),
('986120102', 'Rudy Syahputra, S.Si., M.Si., Ph.D.', 'Dosen Jurusan Kimia', '377'),
('986120103', 'Noor Fitri, Dr., S.Si., M.Si.', 'Dosen Jurusan Kimia', '377'),
('986130103', 'Pinus Jumaryatno, S.Si., M.Phil., Ph.D., Apt.', 'Dosen Jurusan Farmasi', '477'),
('986130106', 'Farida Hayati, Dr., S.Si., M.Si., Apt.', 'Ketua Program Studi Profesi Apoteker', '422'),
('996100428', 'Edny Wulandari, S.H., M.H.', 'Dosen Jurusan Statistika', '277'),
('996100430', 'Agus Taftazani, Prof. Dr.rer.nat. Ir.', 'Dosen Jurusan Kimia', '377');

-- --------------------------------------------------------

--
-- Table structure for table `itmk`
--

CREATE TABLE `itmk` (
  `id_ITMK` int(100) NOT NULL,
  `id_surat` int(100) NOT NULL,
  `id_jenis_surat` int(100) NOT NULL,
  `mhs1` varchar(100) NOT NULL,
  `mhs2` varchar(100) NOT NULL,
  `mhs3` varchar(100) NOT NULL,
  `mhs4` varchar(100) NOT NULL,
  `mhs5` varchar(100) NOT NULL,
  `mhs6` varchar(100) NOT NULL,
  `mhs7` varchar(100) NOT NULL,
  `mhs8` varchar(100) NOT NULL,
  `mhs9` varchar(100) NOT NULL,
  `mhs10` varchar(100) NOT NULL,
  `nim1` varchar(100) NOT NULL,
  `nim2` varchar(100) NOT NULL,
  `nim3` varchar(100) NOT NULL,
  `nim4` varchar(100) NOT NULL,
  `nim5` varchar(100) NOT NULL,
  `nim6` varchar(100) NOT NULL,
  `nim7` varchar(100) NOT NULL,
  `nim8` varchar(100) NOT NULL,
  `nim9` varchar(100) NOT NULL,
  `nim10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itmk`
--

INSERT INTO `itmk` (`id_ITMK`, `id_surat`, `id_jenis_surat`, `mhs1`, `mhs2`, `mhs3`, `mhs4`, `mhs5`, `mhs6`, `mhs7`, `mhs8`, `mhs9`, `mhs10`, `nim1`, `nim2`, `nim3`, `nim4`, `nim5`, `nim6`, `nim7`, `nim8`, `nim9`, `nim10`) VALUES
(2, 50, 17, 'Paul Pogba', 'Ander Herrera', 'David De Gea', 'Antonio Valencia', '', '', '', '', '', '', '111', '222', '333', '444', '', '', '', '', '', ''),
(4, 54, 17, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 55, 17, 'b', 'b', 'b', 'b', 'b', 'b', 'b', '', '', '', 'b', 'b', 'b', 'b', 'b', 'b', 'b', '', '', ''),
(6, 57, 17, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 59, 18, 'Cristiano Ronaldo', '', '', '', '', '', '', '', '', '', 'CR7', '', '', '', '', '', '', '', '', ''),
(8, 60, 19, 'Paulo Dybala', '', '', '', '', '', '', '', '', '', '192838', '', '', '', '', '', '', '', '', ''),
(9, 83, 17, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 92, 17, 'mhs1', 'mhs2', '', '', '', '', '', '', '', '', 'nim1', 'nim2', '', '', '', '', '', '', '', ''),
(11, 100, 18, 'nama mhs', '', '', '', '', '', '', '', '', '', '1231231', '', '', '', '', '', '', '', '', ''),
(12, 102, 19, 'nama', '', '', '', '', '', '', '', '', '', 'nim', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `id_jenis_surat` int(5) NOT NULL,
  `nama_surat` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `kode_surat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `id_divisi` int(50) NOT NULL,
  `margin_top` decimal(3,1) NOT NULL DEFAULT '1.0',
  `margin_bottom` decimal(3,1) NOT NULL DEFAULT '1.0',
  `margin_left` decimal(3,1) NOT NULL DEFAULT '1.0',
  `margin_right` decimal(3,1) NOT NULL DEFAULT '1.0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `jenis_surat`
--

INSERT INTO `jenis_surat` (`id_jenis_surat`, `nama_surat`, `kode_surat`, `id_divisi`, `margin_top`, `margin_bottom`, `margin_left`, `margin_right`) VALUES
(1, 'Surat Keterangan Berkelakuan Baik', 'Div.AU', 698, '7.0', '2.0', '2.5', '1.0'),
(2, 'Surat Pengantar Pembuatan Paspor', 'Div.Um&RT', 696, '5.5', '2.0', '2.5', '1.0'),
(3, 'Surat Keterangan Menyelesaikan Studi', 'Div.Um&RT', 696, '5.0', '2.0', '2.5', '1.0'),
(4, 'Surat Permohonan Pembelian Bahan Penelitian', 'Bag.TA', 698, '5.5', '2.0', '2.5', '1.0'),
(5, 'Surat Permohonan Bantuan Bahan Penelitian', 'Bag.TA', 698, '5.5', '2.0', '2.5', '1.0'),
(6, 'Surat Ijin Observasi', 'Bag.TA', 698, '5.5', '2.0', '2.5', '1.0'),
(7, 'Surat Ijin Studi Pendahuluan', 'Bag.TA', 698, '5.5', '2.0', '2.5', '1.0'),
(8, 'Permohonan Ijin Penelitian', 'Bag.TA', 698, '5.5', '2.0', '2.5', '1.0'),
(9, 'Surat Permohonan Ethical Clearance', 'Bag.TA', 698, '5.5', '2.0', '2.5', '1.0'),
(10, 'Surat Pengantar Tugas Akhir', 'Bag.TA', 698, '5.5', '2.0', '2.5', '1.0'),
(11, 'Surat Ijin Peminjaman Laboratorium', 'Bag.TA', 698, '5.5', '2.0', '2.5', '1.0'),
(12, 'Surat Permohonan Izin Determinasi', 'Bag.TA', 698, '1.0', '1.0', '1.0', '1.0'),
(13, 'Surat Keterangan Aktif Kuliah', 'Div.AU', 698, '7.0', '2.0', '2.5', '1.0'),
(14, 'Surat Permohonan Ijin Praktik Kerja Lapangan', 'Bag.KP', 698, '5.5', '2.0', '2.5', '1.0'),
(15, 'Surat Keterangan Beasiswa', 'Div.AU', 698, '7.0', '2.0', '2.5', '1.0'),
(16, 'Surat Keterangan Akreditasi', 'Div.Um&RT', 696, '5.5', '2.0', '2.5', '1.0'),
(17, 'Surat Ijin Tugas Mata Kuliah', 'Div.Um&RT', 696, '5.5', '2.0', '2.5', '1.0'),
(18, 'Surat Pengantar Praktik Kerja Lapangan', '', 696, '5.5', '2.0', '2.5', '1.0'),
(19, 'Surat Pengunduran Diri Praktik Kerja Lapangan', '', 696, '5.5', '2.0', '2.5', '1.0'),
(20, 'Surat Keterangan Asisten Praktikum', 'Div.AU', 698, '5.5', '2.0', '2.5', '1.0'),
(21, 'Surat Permohonan Ijin Determinasi', 'Bag.TA', 698, '5.5', '2.0', '2.5', '1.0');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(5) NOT NULL,
  `nama_instansi` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `akreditasi` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `ket_akreditasi` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `jangka_awal` date NOT NULL,
  `jangka_akhir` date NOT NULL,
  `jabatan` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `nama_pimpinan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nip` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kode_surat` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_instansi`, `akreditasi`, `ket_akreditasi`, `jangka_awal`, `jangka_akhir`, `jabatan`, `nama_pimpinan`, `nip`, `kode_surat`) VALUES
(6117, 'Koordinator Lab Statistika', '', '', '0000-00-00', '0000-00-00', '', 'Arum Handini Primandari, S.Pd.Si., M.Sc.', '146110504', ''),
(613, 'Farmasi', 'B', 'LAM-PTKes No.: 0159/LAM-PTKes/Akr/Sar/XI/2015', '0000-00-00', '2020-11-07', 'Ketua Program Studi Farmasi', 'Saepudin, S.Si., M.Si., Apt., Ph.D.', '006130102', 'Kaprodi.Far'),
(611, 'Statistika', 'B', 'BAN-PT No. 1133/SK/BAN-PT/Akred/S/X/2015', '2015-10-31', '2020-10-31', 'Ketua Program Studi Statistika\r\n', 'Dr. Edy Widodo, S.Si., M.Si.', '966110103', 'Kaprodi.Sta'),
(612, 'Kimia', 'A', 'BAN-PT No. 1535/SK/BAN-PT/Akred/S/VI/2018', '2018-06-06', '2023-06-06', 'Ketua Prodi Kimia - Program Sarjana', 'Dwiarso Rubiyanto, Dr., S.Si, M.Si.', '016120101', 'Kaprodi.Kim'),
(614, 'Pendidikan Kimia', 'B', 'BAN-PT No. 1491/SK/BAN-PT/Ak-SURV/S/V/2017', '2016-12-20', '2021-12-20', 'Ketua Program Studi Pendidikan Kimia', 'Krisna Merdekawati, S.Pd., M.Pd.', '126140101', 'Kaprodi.Pend'),
(615, 'Profesi Apoteker', 'A', 'LAM-PTKes No.: 0059/LAM-PTKes/Akr/Pro/I/2017', '0000-00-00', '2022-01-28', 'Ketua Program Studi Profesi Apoteker', 'Farida Hayati, Dr., S.Si., M.Si., Apt.', '986130106', 'Kaprodi.Apo'),
(696, 'Divisi Umum dan Rumah Tangga', '', '', '0000-00-00', '0000-00-00', '', 'Widiyanto, A.Md', '961002125', ''),
(231, 'D3 Analis Kimia', 'B', 'BAN-PT No. 0318/SK/BAN-PT/Akred/Dipl-III/IV/2016', '2016-04-28', '2021-04-28', 'Ketua Program Studi Analis Kimia', 'Tri Esti Purbaningtias, S.Si., M.Si.', '132311102', 'Kaprodi.D3'),
(2, 'Dekanat', '', '', '0000-00-00', '0000-00-00', 'Wakil Dekan Bidang Sumberdaya', 'Dr.techn. Rohmatul Fajriyah, S.Si., M.Si.', '966110101', 'WD1'),
(697, 'Div Keuangan', '', '', '0000-00-00', '0000-00-00', '', 'Masirah, A.Md', '', ''),
(698, 'Divisi Akademik dan Perkuliahan', '', '', '0000-00-00', '0000-00-00', '', 'Anang Susilo, A.Md', '971002113', ''),
(699, 'Divisi Sistem Informasi Manajemen', '', '', '0000-00-00', '0000-00-00', '', 'Noor Hilal Fathoni, S.Ag', '', ''),
(1, 'Dekanat', '', '', '0000-00-00', '0000-00-00', 'Dekan', 'Prof. Riyanto, S.Pd., M.Si., Ph.D.', '006120101', 'Dek'),
(3, 'Dekanat', '', '', '0000-00-00', '0000-00-00', 'Wakil Dekan Bid. Kemahasiswaan', 'Thorikul Huda, S.Si., M.Sc.', '052316003', 'WD2'),
(6137, 'Koordinator Lab Farmasi', '', '', '0000-00-00', '0000-00-00', '', 'Bambang Hernawan Nugroho, S.Farm., Apt., M.Sc.', '096130408', ''),
(6147, 'Koordinator Lab Pendidikan Kimia', '', '', '0000-00-00', '0000-00-00', '', '', '', ''),
(6157, 'Koordinator Lab Apoteker', 'A', 'aAa', '0000-00-00', '0000-00-00', 'A', 'A', 'A', 'A'),
(6127, 'Koordinator Lab Kimia', '', '', '0000-00-00', '0000-00-00', '', 'Argo Khoirul Anas, S.Si., M.Sc.', '166120102', ''),
(2317, 'Koordinator Lab D3 Analis Kimia', '', '', '0000-00-00', '0000-00-00', '', '', '', ''),
(981, 'bidang apa', 'Belum Terakreditasi', '', '0000-00-00', '0000-00-00', 'jab', 'nama', '098', 'blablabla');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `jk` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `angkatan` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `jurusan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `fakultas` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT 'Fakultas Teknologi Industri',
  `tempat_lahir` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenjang_pendidikan` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT 'Strata 1 (S1)',
  `alamat` varchar(1000) COLLATE latin1_general_ci NOT NULL,
  `status_mahasiswa` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT 'aktif',
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jk`, `angkatan`, `password`, `jurusan`, `fakultas`, `tempat_lahir`, `tanggal_lahir`, `jenjang_pendidikan`, `alamat`, `status_mahasiswa`, `level`) VALUES
('9613061', 'NIKE FITRI ADRIAAN', '', '2009', '$2y$10$xLWWiBw8tDJGo4/s/fA3SepTL8TDizFo5Pri2w2PGaqmTu5UXk9G.', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'BANDUNG', '1991-01-15', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613065', 'NINDY ANGGRAENI', '', '2009', '$2y$10$YmSkns9j5rtsKp4UY9st.efllfvG5ObSL.mXJ9LGOJTn0aplHdL3m', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'SUKARESIK', '1989-03-14', 'Strata 1 (S1)', '', 'aktif', 'user'),
('3811142', 'DIAN ANGGRAENI', '', '2003', '$2y$10$voerdpz9tXFTxvC/P8/nX.jAIQ0OCe.ED6816FDVryTJQnRjBA7qq', 'Statistika', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', '', '0000-00-00', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613067', 'SEPTIANA NURVITA HERDIYANTI', '', '2009', '$2y$10$9/yUAAbXW/OQSaMs7cM5b.pbAqOTM/idqttlcDvGN/4ADniunzH7.', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'KULON PROGO', '1990-09-21', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613076', 'DELLYNA FERONICA MANIK', '', '2009', '$2y$10$iY.r8n1lx8ELyxtpogZ3HumWEpBOC90NJVNkuZmqwHUJqcFwVw/a.', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Kuaro', '1991-01-11', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9611004', 'RINALDI', '', '2009', '$2y$10$ReWOUGi3cOpXWqVAWI8e2OtYLfZncYAPcXY7OV.Y/3DhGKT0gZWSu', 'Statistika', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'DESA BATIN', '1990-07-10', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613068', 'HANUM EL SARA', '', '2009', '$2y$10$S3VOiaUI7/uWtW/u.W9NX.3hKd3.7AoonnvnN5nnpVkfRoq/RqhsK', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Kupang', '1991-02-24', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613073', 'HENI WIDIASTUTI', '', '2009', '$2y$10$vxjKyzyULp9GM5tdWw0J3OrPi.nYGHl6Mam1cFwIiS5E7GG5KuXmG', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'SLEMAN', '1991-04-15', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613075', 'HALIDA HANUM', '', '2009', '$2y$10$q04gHhQDn7K1abE245tO8.gnSEIGy5yUE0KsTCXEPnNgOK1kRZ0oi', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'LAMPUNG', '1992-01-23', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613050', 'TRI HANDAYANI WISMANINGRUM', '', '2009', '$2y$10$ar4062UZw3rHVQ72JXxkT.hr5GepnM1vE.0VTvpsfxx0pAtcXj/S.', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'INDRAMAYU', '1991-07-01', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9612004', 'WIHARTI', '', '2009', '$2y$10$MgJOeXB13htSbqA2QfHnL.NHH3H6v2hXpg5wIfdqhxnUmH7WuKyOi', 'Kimia', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'brebes', '1991-08-19', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613062', 'DINA AYU PUSPITASARI', '', '2009', '$2y$10$/ayLGESaeRMUrjJXogvmVuBtlLC9l.H39Vs4CEt1tR5mG3SGGwj6m', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'SEMARANG', '1991-03-02', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613052', 'MAGHFIROTI FITRI', '', '2009', '$2y$10$n559qABOSLLe5w9Pu35U4.wwBP4PNsVA0UzkKbKXArKMDpoiosIeK', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'PEMANGKAT', '1991-04-10', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613048', 'FITRI ADITIA APRILIANA', '', '2009', '$2y$10$Y4JPDLoK/7/0vVHLCEhWtuMjRbavkiPBAhMEoZEZGy17/Z2jl0xWu', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'BANTUL', '1991-04-27', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613057', 'HERDIAN LARASATI', '', '2009', '$2y$10$KVNjwffC9mekeW8UKhtIKuIjfkvmrPFMp1iP9VzJsPsPmDQjlWEn.', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'sleman', '1991-09-30', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613049', 'WULAN RACHMANIAH', '', '2009', '$2y$10$5VVx7oQ42jbx3xOC/CY2L.rEbHJKgWIYTPVBHSzFCnp4/FjBDAw4W', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'BALIKPAPAN', '1991-02-11', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613058', 'SILVIA WULANDARI', '', '2009', '$2y$10$avdmMPq7stfSEo9IKOgAb.v4OkWGXUqBFodK1HOnBo/xWdQ/JGFHa', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'MATARAM', '1992-01-21', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613054', 'RIKO RIVA\'I', '', '2009', '$2y$10$euClyguzFxoVKIZOOOZFSe06Nko.TTJM0.TQuwIhVHBpUJqR5pJnC', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Mukomuko', '1991-05-28', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613077', 'ANDAM RESCIA', '', '2009', '$2y$10$CLiMPojPrTTpff/JQIBQsOm8qPGYhMh1SVbt7u8DlkfeXrLUVLXme', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'PEKANBARU', '1991-11-07', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613074', 'DESSY PRIHASTINI P.', '', '2009', '$2y$10$L7uAV1/53x0s5nK3UyrP.uXSpOPokpLWgYG/oviG6z3ItwOlcFmL6', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'JAYAPURA', '1991-12-07', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9611003', 'ALVIA SAHRIATIANA', '', '2009', '$2y$10$ZB4BMnwUHj4dY3mfXUHnQuzF9hNeeiBNmQKQWdNku8jLixNHlrkhS', 'Statistika', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Galang Bulan', '1991-03-22', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9231031', 'WAHYU BAGUS BINTORO', '', '2009', '$2y$10$hmhdZD1OCVFhG1.e4Ok4Z.hazPKvamE3VXsBoSozl/HUJJwmordI2', 'D3 Analis Kimia', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Tempat', '1989-01-21', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613059', 'SAPUTRI NING ATI', '', '2009', '$2y$10$CE9LoD12g3x4RyZCeRPeaOw.VGHxXQ1hnm5oivM/pTeZRQu..PA5O', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'PEMALANG', '1991-09-01', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613053', 'DISTIANA NUR BELINDA', '', '2009', '$2y$10$f4XVeFbIkT2AqOrSDKZUfOIhMkGF2x8hG3UfmCvl4NC/7v7ZWA78u', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'sleman', '1991-06-09', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613072', 'ASTRI WULANDARI', '', '2009', '$2y$10$272OQXlOT7dyXHWmfZWP3e.wvvz7PsNa6xGT/nuMhSyo.uL2qjsZC', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'PANGKALAN BUN', '1991-04-04', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9612002', 'SITI ROKHMAYATUN', '', '2009', '$2y$10$Z0Is1zl.3JpRvm0zNAy7tOnYCFwsuRV4wSsI.aOD23UkyJ.591mba', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'kebumen', '1986-11-12', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613060', 'ERINA KUSUMAWARDHANI', '', '2009', '$2y$10$O9OHnubdbp1AE2S2oP.MaeoUZxwpiyAfbWdupD9lpcpUiFF8lIREO', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Sleman', '1991-09-24', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613064', 'MUTIARA NUR DZIKRINA', '', '2009', '$2y$10$K3AVwvuzQM9LF1D743UQc.d2jZFaiPXRQhyLQdKuuNrkxeHR/ZS9G', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'JAKARTA', '1991-10-24', 'Strata 1 (S1)', '', 'aktif', 'user'),
('3811141', 'DEVI NOVIANTI', '', '2003', '$2y$10$xtcOx9G9/NiNtrKFvQyxp.dnAQUy2XituWIthaLISX2zztNDSjZGG', 'Statistika', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', '', '0000-00-00', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613070', 'HITAKI MILLATA', '', '2009', '$2y$10$gZIiBXfpiR8RWl3DJG43jO5mZVxQpqhcTKAbcniWVzMjHtiLzJR0W', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'kab.semarang', '1992-03-13', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613071', 'RATNA WAHYU SEPTIANA', '', '2009', '$2y$10$WUyiz7oG3Rt6Z2QS2Uu5munpzN2gvMAzBxtTRkCC/0JzYRV28MHm.', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'KULOM PROGO', '1990-09-26', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613063', 'LUTFI MANPALUTI', '', '2009', '$2y$10$O2EChx8HL1Xm46SdfRInXeANYAPV/Twi.SWcVQFJr9Nx9CvBc4DPm', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Terantang', '1991-05-13', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9612003', 'RATIH DYAH PUSPITASARI', '', '2009', '$2y$10$CsTxginb.jvvnECLzQZzcup7gnUmTrvNsp4X7glIlIloekciVk2aa', 'Kimia', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Caturrahayu', '1990-07-23', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613069', 'LUSI MARYANI', '', '2009', '$2y$10$N3TCZkj6h8KysKM.v9gZIeXnZdH4nPlyQE0pRALZE2XwVGQ55Giom', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Pulau Gebe', '1991-09-11', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613056', 'MARINA DEWI HAPSARI', '', '2009', '$2y$10$ZZDQZEKyxuVSKtlBRubTLuPI/OJuP1lgYfBoZCsBUf5vrq65qT1.2', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'PEMALANG', '1991-03-09', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613102', 'NUR AZIZAH', '', '2009', '$2y$10$g0TevtBOvT/t9Fnzfu00z.5wfplfRSTgjofF7EfAKwg3btRUIK.ZK', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'sleman', '1990-11-22', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613080', 'FIRDA AYU APRILA', '', '2009', '$2y$10$2uw43eEouIkI/yQ.B0WP8OU1tEFusxlDxwbW63V2j05IAcHhijyx6', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'CIREBON', '1991-04-24', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613082', 'RIZKI ANDINI PUTERI', '', '2009', '$2y$10$h6cEep75K5wIKUSeBn/vMuMp2YAW9Rw6mwuTlZL0NtwN9KXGK6/ky', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'SAMARINDA', '1991-03-02', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613124', 'VIVIN OKVIANI ', '', '2009', '$2y$10$h5XCUvEfPwI9NbJ6Y/AeneN8lUMsoijzKYdNuHoLB89wZmNKIUWMe', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'rangkasbitung', '1991-10-19', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613125', 'ELLIETYA YOEWANDHINI', '', '2009', '$2y$10$klguibEObIbzrRB9w7rjCe3OcPQz1ag45Q4.wjKsqw.rrZq4b/VN6', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Tanjung Labu', '1992-06-29', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613094', 'ZAENAL SURYANA YAHYA', '', '2009', '$2y$10$BP4R/JB9SLR6pACZA7lJRObmNuF3SFH1AKJGrkxsLSniGO8HPYtUO', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Sorong', '1984-09-14', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613132', 'SITI MAZIYAH', '', '2009', '$2y$10$LNSq8veEdgpRJXY0ShiiYuk6Jmp7ECs2DdCG0VNqQP3GZueveElKC', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'TEGAL', '1991-01-17', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613129', 'TRIFITRIA HANDAYANI', '', '2009', '$2y$10$BXzud4TDqiuw7vRKydPqwuQPLSeIAnzfXJir2I2XDD66T8NoJRv4O', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'madiun', '1991-04-04', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613130', 'FAMELA MENTARI', '', '2009', '$2y$10$XDA2h7U6.X04aSK4razxtOy5oSSJIuayEVC3pIhdys4NbFcd2UoRu', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'PAGARALAM', '1991-11-21', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9612005', 'LAGAIDA AMANGGA RATRI', '', '2009', '$2y$10$/P6xvdRa3c9Q4kndanzEk.fgPNAo5Dj5BpRtxFb6EtVN.7gmOn4A6', 'Kimia', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'BALIKPAPAN', '1990-11-11', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613097', 'IKA ALFINNISA MAJIDA', '', '2009', '$2y$10$L6DbaciWV/cI8pILmlApLuKXUeId4arHOpxBo/9/e3tNmRDXhGBOu', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'BREBES', '1990-10-17', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613121', 'AZAM TAUFIKURRAKHMAN', '', '2009', '$2y$10$dqjqotf2dqKVq1dGFP4GFuB/9Ox.IBSfcvXIxSrT6M5DUdpkTCcUa', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'pemalang', '1990-03-09', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613134', 'SAFRINA KUSUMA DEWI', '', '2009', '$2y$10$AD6OBPfu08cQuEvinVgBOu1HQZUlMr.bzyY/6z.ZZtBRE3W.xiIyG', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'KLATEN', '1991-09-04', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613099', 'RISTA YUDHA INDRAWAN', '', '2009', '$2y$10$8d6sIfG0VIdnN8Y9ddb9vuQ9Sjae9/gYsSgpq.BDml9W521PTfzQu', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'KLATEN', '1991-06-02', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613088', 'ARPINA SARI', '', '2009', '$2y$10$sTtVC6FIrfbV2iTZeu/pkOdGcyX8LQ.SixP8eVkgQZEGa4cCQz0Qm', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'bengkulu', '1991-02-09', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613101', 'NILA KANDHI ELDINI', '', '2009', '$2y$10$mx/jS7SAIWNWMBVtKkbH9O7lkWNwph5k5HBsQt1wqg/VVywiUTQ2i', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'CEPU', '1990-11-07', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613116', 'RIA CAHYA ANDRIANA', '', '2009', '$2y$10$Dei5ZmIEzlKjGRrzXoJzd.gwfLSyNXQbjG6IoVa3w3RBygy1/Yb4u', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'TANGERANG', '1992-01-07', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613095', 'CITRA ARUM REZKY OKTAVIAN', '', '2009', '$2y$10$Sf8pxWnaBR5hbvqqhkSLruo7HXeKyugpBSOmD/kL5d2VL/xanlxQq', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'karanganyar', '1991-10-22', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613091', 'EKA AYU PURNAMASARI', '', '2009', '$2y$10$e67s/8uR0XvtZtPh9ROPguGNE1tcNdd0T1h7iypxyBYMGFB5nH/0q', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Muara Enim', '1991-10-10', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613109', 'FISSY RIZKY UTAMI', '', '2009', '$2y$10$sgaSuEuePWTTmk1wSLB1lua6Q96JYqzJBuEGT7/TszDWnPpyRizH2', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Pekanbaru', '1991-08-26', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9611006', 'AMINULLAH ADE', '', '2009', '$2y$10$ns37VaRloK8i1CfGmaYuA.6nXIL2XvyPbDBaYSCXacETdvVSM5Ogq', 'Statistika', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'mareku', '1991-01-04', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613090', 'LIAN OCTARICA NOVA', '', '2009', '$2y$10$94MEUuzIYfgMNyU7z5YW2u9tY6xIG4aQ2iFqL7akqlqjkigtlj5WW', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'pulau rambai', '1991-10-19', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613096', 'DWI YESSIANA SYAHPUTRI', '', '2009', '$2y$10$ylvpvrXxpAFZLcwy7h0IRuGs5fEy86uQx7laRCVy2V.tPFz1Nh95y', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Gantung', '1992-07-14', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613103', 'DEVITA KURNIASARI', '', '2009', '$2y$10$UnVHVDg5RfDWxOCODHJwue8EkeRjx4ryoiDCMdeedGrkqnXQMMF6y', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'kOTAMOBAGU', '1992-01-03', 'Strata 1 (S1)', '', 'aktif', 'user'),
('3811138', 'DAHLIA ANDAYANI', '', '2003', '$2y$10$aQg8kI2R4HtJ.GVR0fCQS.BJNDJGW0KO0TRYJ7B46zbj0zo9wS8j.', 'Profesi Apoteker', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', '', '0000-00-00', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613105', 'IRRIN ASTRIYUNI PONDABO', '', '2009', '$2y$10$QLVuxtfQdgKYOn6Ywb.QPeWd.q78Vfw0ynEquTLwO7qUA.0OrNz4O', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'poigar', '1991-03-17', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613115', 'FATIMAH RAHMAWATI', '', '2009', '$2y$10$NakDFpF1t.KQ/MvP7kUJ/OXlsuWC.bY91EW1HydNvhRYJP6.Jq03m', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'KARANGANYAR', '1989-06-11', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613084', 'JOHRY  CAPELLA SUJONO', '', '2009', '$2y$10$1Av9tYq74SpapTk4IPrEouBBm/yUBLizvMl84miOKy/snu7X3OmcC', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Tanjungpinang', '1991-08-13', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613106', 'FITRIA NOVITASARI', '', '2009', '$2y$10$gSAHF5D4JV9GWn9JcKQqUOFTkzNVx5CkM7tNnp4onKCH3s2/Qzv7a', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Banjarmasin', '1991-04-08', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613107', 'SRI SUMARTI', '', '2009', '$2y$10$QAopHTp0vxtjvlpog5lqZuky44A2Ok9qInxXUjmUAzFKI8LT8cVAK', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'sintang', '1991-10-20', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613108', 'VERA NUR PRADANIA DEWI P', '', '2009', '$2y$10$t4JHxgVima8gKJQQ8iieFOuVRryyt76bv6RejDBzVhC8H3T07vOaa', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'INDRAMAYU', '1991-11-03', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613081', 'ARIFI  BHAKTI SINATRIA', '', '2009', '$2y$10$cThc2/IysGne/1bWRKZLNepvd0BWXSvC48e5HEKA4y1n8Kxpn5cSS', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'sleman', '1991-04-08', 'Strata 1 (S1)', '', 'aktif', 'user'),
('09613083', 'AFRILIYA FITHRIYATI', '', '2009', '4a234d57efd2f1e5fa8bc590ce75b5ab', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'KULON PROGO', '1991-04-23', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613085', 'THO\'ATUN MA\'RUFAH', '', '2009', '$2y$10$WgqWqSXpcICrDKOUPGEeXeym5Wq2lc6ZjYWtbC2fsWkzCklO4vAP2', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'MAGELANG', '1991-01-22', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9611005', 'NISSA MEILANI', '', '2009', '$2y$10$XdK6VekvQ3pO2cmAJDf1l.3BGpXigmcBYcwnJp1LGZCajv.iCavXS', 'Statistika', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'pangkalpinang', '1992-05-07', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613126', 'BAYU GUGAH DIWANGKARA', '', '2009', '$2y$10$QGLM4kf4WgvceRQJGTmvYuZPdSUEaU.15rIyVnKAEj/aXgP/B9IIC', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'KEBUMEN', '1990-09-14', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9611008', 'HENDRA KUSUMA', '', '2009', '$2y$10$W9lfLR32rFmEDqg0TRqmv.AFAuesnC1dSoL4qZDnBj/jSnUIl4fcy', 'Statistika', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'WONOSOBO', '1990-09-03', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613127', 'APRIANTO', '', '2009', '$2y$10$bsXPwzGswcuG8velmiEYSeDDRmBwD3KalyfnS7C8fJs/4kOIlA5aC', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'BENGKULU', '1990-04-19', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613119', 'SOEADJITO SANTARIANO SUDI', '', '2009', '$2y$10$v1oNrtXt9ej0mzU6s8kHCuyXNB.EWrKWkgrDOh1Xly1xV.wMorua.', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'MATARAM', '1991-11-15', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613120', 'RIZKY ICHWAN', '', '2009', '$2y$10$kd7bIdXUe40dyNO8YHZpSexQ5.wpOIGqPtVyreUYKSlEhAPrEvYh2', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Sumbawa Besar', '1991-09-01', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613128', 'NOVASURI', '', '2009', '$2y$10$kiB81y0mspOS50S3f7PYHuYAvwqVMqHHuXbBVSOoXNXIhnFfCEAfq', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'kotabumi', '1990-11-10', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613123', 'SEPTA PRATAMA', '', '2009', '$2y$10$lSl068p6UElF1sSMnOALEO1lXhsjs.Y22XXnIjG/VQR1K21sLiemW', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'sumber sari', '1991-10-22', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613100', 'AHMAD KUSWORO', '', '2009', '$2y$10$v2PmvXk0HGugP/1W2QI4G.IPTrRBgF9hCXw/N8hLx701qI/a/rJ02', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'sepayung', '1991-08-15', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9611007', 'PANDU PRATAMA', '', '2009', '$2y$10$RotUUsZWqCgCwcxJcaQ81eApoNbFjqWqLI/17oWbgLJ3/WYx7Xm..', 'Statistika', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'wonosobo', '1991-03-10', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613131', 'AGUS SALIM', '', '2009', '$2y$10$4IMLlDVCStziErf59UDTCekwETieBAqtJ.K1BqL27ZjcP96ySa7Ua', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'TELUK DURIAN', '1991-08-10', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613092', 'LITA PRIESCILLA SP', '', '2009', '$2y$10$MzObZzpyQihuy0IKnrfude08.0MpgWw7Xf6b05O6OEh/Fk6ivdcmG', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Bontang', '1991-03-11', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613093', 'REA PRAMITRA SETYO PUTRI', '', '2009', '$2y$10$S0WNrnpRfjMHNM9C9mP33.fr6/KruB3giZJ0EdGkxx5GMAsv1rPJi', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'BONTANG', '1991-03-11', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613087', 'ARIFINA FAHAMSYA', '', '2009', '$2y$10$m8i3q4BJQXYTdJB0YNhMou9sTiylI1dBeB8lqn.kO365XVjOe8ofG', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'PEMALANG', '1991-09-13', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613079', 'MELATI WISNITA YATI', '', '2009', '$2y$10$12PDrZBMm0v6h8sNjZjxieqvYF9IvPYXpF5Qcxhd5p62OMF4ID3a.', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'miau baru', '1991-09-29', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613083', 'FITRI APRILIANY', '', '2009', '$2y$10$.qmBKtyjz6N5Dp4PYlyWMOzCMck0WurmHQ7eYfalPwIXLvFA9Unqy', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'utan-sumbawa', '1991-04-19', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613111', 'CITRA MAULA ANIDYA', '', '2009', '$2y$10$pfzOrjL.1/vIfEUaAPbzeuzNetQh0AvcObD1.XIMe2aDTy4/JX956', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'SLEMAN', '1991-09-29', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613110', 'NOOR SYAM SIDIQ HIMAWAN', '', '2009', '$2y$10$Dk4mcPISXnlMyNr1hGQNWO9hrOEqQXWEbyt8C1pzlX7bb.wDMc.JO', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'DILI', '1992-03-01', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613114', 'ERMA YUNITA', '', '2009', '$2y$10$GJ2TVEafeY5WzWmTnVNmIeJfHN9E3kvz6OSKuPKs7aXIkl34eSfXK', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'BENGKULU', '1991-07-26', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613118', 'NURI ULFA', '', '2009', '$2y$10$vKiRcxfYU8/RJAB73ZqKzOzPHy4huDNmOARK6sHJ9rz7D9LUJ3Sgu', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'kodya bengkulu', '1991-09-07', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613164', 'NADIA PUSPITA', '', '2009', '$2y$10$NsQj..IIApEZTbY.Qc.tqe92t/Iciiv75Dtbrwdf38/2A.bhH31xK', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Mentok', '1991-08-13', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613177', 'NOVIALY PUTRI', '', '2009', '$2y$10$VQfKZ4WVywvMxVwsu24Wbu5t.Q1aTuVkGewv47H.wzZ/8RIS4i1lG', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'CIAMIS', '1990-11-22', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613175', 'YOGI KUNCORO', '', '2009', '$2y$10$t4OQX2mBVgeYtMaz5HbueOc2yuzQSBKI68aBGDJeCXQi1Dju/VwUq', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'banyuwangi', '1991-09-24', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613162', 'RANITA RAHMANIAR', '', '2009', '$2y$10$1fDXFGxgaZAzbNRJ9vr/JuB4tk3yyWfCY2dtxpfzafSGqGw9zw27m', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Magelang', '1991-09-11', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613166', 'BINAROSA PERMATA SARI', '', '2009', '$2y$10$36vr1rGe1kpbsNMUgMayfu3TTmCCaqKRib0oqZoSqJi2HcNTeorjW', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'KEBUMEN', '1990-03-26', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613167', 'YOLA ALFIANA', '', '2009', '21232f297a57a5a743894a0e4a801fc3', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'TELUK BETUNG', '1991-04-29', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613169', 'RETNO VIDIANA KHODIJAH ', '', '2009', '$2y$10$Z6DgNUvOUVrY/rMTPbQPhOGoCDoIM8WEFEIHh.R1MdNA3kKaOiGiq', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'ketapang', '1991-01-28', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613142', 'AR. DENOK ROKHIMAH', '', '2009', '$2y$10$8T/NrTuyFLgl2uGi3uPfueuQHyPLPI.2U8bPCEZp.m.ogKe.xm8iy', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'sanggau', '1991-11-16', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9613173', 'LISNA JUPITA', '', '2009', '$2y$10$7whicRz.MSYlGT5xT8qhbukck1cDy1kWJQIOCiuztB38R2eTAEcnS', 'Farmasi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'ketapang', '1991-07-30', 'Strata 1 (S1)', '', 'aktif', 'user'),
('9612006', 'RESTU AYU MUMPUNI', '', '2009', '$2y$10$JVYgjCdDVW7QRSSBh4u57uprwtIWr5poE5yP9AUZ6RL/wAhGNBPfG', 'Kimia', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'SRAGEN', '1991-06-07', 'Strata 1 (S1)', '', 'aktif', 'user'),
('1234567890', 'nama1', 'L', '', '$2y$10$RhqpI3tzTP8oD0Fey1BIyuGf2zEzwwukpM7cPv1HHgwIUQiqw3djG', 'D3 Analis Kimia', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'bnjre', '1995-06-24', 'Strata 1 (S1)', '', 'Aktif', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `username`, `password`) VALUES
('006120101', 'Prof. Riyanto, S.Pd., M.Si., Ph.D.', '006120101', '$2y$10$Q1MNWCZLAMkejVBYb6ntUuUv3RYGO5QwB3h1xqeLqFm13HlFcWDtm'),
('052316003', 'Thorikul Huda, S.Si., M.Sc.', '052316003', '$2y$10$4MdgQEnqKE6CRZMzmVc6LOuyEMWRKsT.CPO1xr4uNdMKKwpmcmqhW'),
('096130408', 'Bambang Hernawan Nugroho, S.Farm., Apt., M.Sc.', '096130408', '$2y$12$wX.SkxfOi3av/3JV5OyE2eZ59bAhK76wXLehsW0C9nuMcDkbdaZo6'),
('098', 'nama', '098', '$2y$10$4mIRh7rS2ikgv7EVTXp3c.m.Uzx.kmyeftyaOry7r9aatGWEd1cnm'),
('146110504', 'Arum Handini Primandari, S.Pd.Si., M.Sc.', '146110504', '$2y$12$40aaqwkl0P.8aKZYuZEo9u7HgTnSsucYuTnmL1gY7apETapCcrE.e'),
('166120102', 'Argo Khoirul Anas, S.Si., M.Sc.', '166120102', '$2y$12$KjW71d03t8yjxA.RnJR0b.mp3neN2DexBybXziZgVmwKWyeC9Sawu'),
('961002125', 'Widiyanto, A.Md.', '961002125', 'f2e68856f336a2441c1d4034572ee65d'),
('966110101', 'Dr.techn. Rohmatul Fajriyah, S.Si., M.Si.', '966110101', '$2y$10$x1TuT67ZDLOPTaBS/OygKut.EOaQAZEooK3lBFDlWQbCZ8c8ywCq.'),
('971002113', 'Anang Susilo, A.Md.', '971002113', '$2y$10$h4QSvz25LacpjFczpY7Q2uRzASk6FyxE8grXJ1L7DmJG9tFKRjHoG');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(5) NOT NULL,
  `rekening` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `an` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `rekening`, `bank`, `an`) VALUES
(1, '7037612701', 'Bank Syariah Mandiri (BSM)', 'Fakultas MIPA UII');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(100) NOT NULL,
  `id_jenis_surat` int(50) NOT NULL,
  `nim1` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `tgl_pesan` date NOT NULL,
  `tgl_setujui` date NOT NULL,
  `tgl_jadi` date NOT NULL,
  `tgl_ambil` date NOT NULL,
  `persetujuan` int(50) NOT NULL DEFAULT '0',
  `penolakan` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nosurat` int(100) NOT NULL,
  `nomersurat` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `smst_jln` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `kedubes` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_paspor` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `scan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `no_ijazah` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tahun_lulus` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `tgl_ijazah` date NOT NULL,
  `alamat` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `subyek` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `maksud` varchar(1000) COLLATE latin1_general_ci NOT NULL,
  `lokasi` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama_pimpinan` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `kota` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pembimbing1` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pembimbing2` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama_ortu` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pekerjaan` varchar(75) COLLATE latin1_general_ci NOT NULL,
  `nip` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `instansi` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pangkat` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `dikirim` tinyint(1) NOT NULL,
  `kirim_alamat` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `kirim_kabupaten` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `kirim_provinsi` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tarif` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `scan_bayar` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `id_jenis_surat`, `nim1`, `email`, `status`, `tgl_pesan`, `tgl_setujui`, `tgl_jadi`, `tgl_ambil`, `persetujuan`, `penolakan`, `nosurat`, `nomersurat`, `smst_jln`, `kedubes`, `no_paspor`, `scan`, `no_ijazah`, `tahun_lulus`, `tgl_ijazah`, `alamat`, `judul`, `subyek`, `maksud`, `lokasi`, `nama_pimpinan`, `kota`, `pembimbing1`, `pembimbing2`, `nama_ortu`, `pekerjaan`, `nip`, `instansi`, `pangkat`, `dikirim`, `kirim_alamat`, `kirim_kabupaten`, `kirim_provinsi`, `tarif`, `scan_bayar`) VALUES
(1, 3, '00611001', '00611001@students.uii.ac.id', 4, '2019-03-22', '2019-03-23', '2019-03-23', '2019-03-23', 611, ' ', 0, '15/Ka.Sta/90/Div.Um&RT/III/2019', '', ' ', ' ', 'Tiket Kereta Argo Lawu.pdf', '1', '2', '2019-02-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '3', '4', '5', '42000', 'Tiket Kereta Argo Lawu.pdf'),
(2, 3, '00611001', '00611001@students.uii.ac.id', 1, '2019-03-23', '2019-05-19', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', ' ', ' ', 'Tiket Kereta Argo Lawu.pdf', 'ijazah/2010/FIT/Inf', '2010', '2019-04-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'DIY', 'Sleman', 'DI Jogjakarta', '10000', 'Rundown Kuliah Umum.pdf'),
(3, 1, '9613094', '9613094@students.uii.ac.id', 0, '2019-03-24', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, '17/WD1/90-Ket.Mhs/Div.AU/IV/2019', 'I (SATU)', ' ', ' ', '', '', '', '0000-00-00', 'alamat2', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(4, 2, '00611055', '11613145@students.uii.ac.id', 1, '2019-03-24', '2019-03-24', '0000-00-00', '0000-00-00', 1, ' ', 0, '18/Dek/90/Div.AU/III/2019', '', ' ', ' ', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(5, 3, '00611055', '11613145@students.uii.ac.id', 1, '2019-03-24', '2019-03-24', '0000-00-00', '0000-00-00', 611, ' ', 0, '19/Kaprodi.Sta/90/Div.AU/V/2019', '', ' ', ' ', '', 'd', 'w', '2019-03-14', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(6, 4, '00611055', '11613145@students.uii.ac.id', 2, '2019-03-24', '2019-06-25', '0000-00-00', '0000-00-00', 1, ' ', 0, '20//70-TA/Bag.TA/IV/2019', '', '', '', '', '', '', '0000-00-00', '', 'a', '', 'a', '', '', '', 'a', 'a', '', '', '', '', '', 0, '', '', '', '', ''),
(7, 5, '00611055', '11613145@students.uii.ac.id', 1, '2019-03-24', '2019-03-24', '0000-00-00', '0000-00-00', 3, ' ', 0, '21/WD2/70-TA/Bag.TA/III/2019', '', '', '', '', '', '', '0000-00-00', '', 'a', '', 'a', '', '', '', 'a', 'a', '', '', '', '', '', 0, '', '', '', '', ''),
(8, 6, '00611055', '11613145@students.uii.ac.id', 1, '2019-03-24', '2019-04-12', '0000-00-00', '0000-00-00', 1, ' ', 0, '22/Dek/70-TA/Bag.TA/IV/2019', '', '', '', '', '', '', '0000-00-00', '', 'judul', '', 'maksud', 'instansi', '', 'kota', '146110101', '176110102', '', '', '', '', '', 0, '', '', '', '', ''),
(9, 7, '00611055', '11613145@students.uii.ac.idd', 1, '2019-03-24', '2019-03-24', '0000-00-00', '0000-00-00', 1, ' ', 0, '23//70-TA/Bag.TA/IV/2019', '', '', '', '', '', '', '0000-00-00', 'w', 'w', '', 'w', '', '', '', 'w', 'w', '', '', '', '', '', 0, '', '', '', '', ''),
(10, 8, '00611055', '11613145@students.uii.ac.id', 1, '2019-03-24', '2019-03-24', '0000-00-00', '0000-00-00', 1, ' ', 0, '24/Dek/70-TA/Bag.TA/III/2019', '', '', '', '', '', '', '0000-00-00', 'w', 'w', 'w', 'w', '', '', '', 'w', 'w', '', '', '', '', '', 0, '', '', '', '', ''),
(11, 9, '00611055', '11613145@students.uii.ac.id', 1, '2019-03-24', '2019-04-12', '0000-00-00', '0000-00-00', 2, ' ', 0, '25/WD1/70-TA/Bag.TA/IV/2019', '', '', '', '', '', '', '0000-00-00', 'w', 'Analisis Judul', 'w', 'Maksud tujuan ', 'insansi', '', 'kabupaten', '146110504', '166120102', '', '', '', '', '', 0, '', '', '', '', ''),
(12, 10, '00611055', '11613145@students.uii.ac.idd', 1, '2019-03-24', '2019-04-12', '0000-00-00', '0000-00-00', 2, ' ', 0, '26/WD1/70-TA/Bag.TA/IV/2019', '', '', '', '', '', '', '0000-00-00', 'w', 'dul judul', '', 'dolan', 'mbun ndi', '', 'kota kota', '096130102', '126130405', '', '', '', '', '', 0, '', '', '', '', ''),
(13, 11, '00611055', '11613145@students.uii.ac.id', 1, '2019-03-24', '2019-04-12', '0000-00-00', '0000-00-00', 3, ' ', 0, '27/WD2/70-TA/Bag.TA/IV/2019', '', '', '', '', '', '', '0000-00-00', 'w', 'bal bal an', '', 'piala presiden', 'Pilpres', '', 'Malang', '956110102', '986120101', '', '', '', '', '', 0, '', '', '', '', ''),
(14, 13, '00611055', '11613145@students.uii.ac.id', 1, '2019-03-24', '2019-04-12', '0000-00-00', '0000-00-00', 2, ' ', 0, '28/WD1/90-Ket.Mhs/Div.AU/IV/2019', 'II (DUA)', '', '', '', '', '', '0000-00-00', 'w', '', '', '', '', '', '', '', '', 'w', 'w', 'w', 'w', 'w', 0, '', '', '', '', ''),
(15, 14, '00611055', '11613145@students.uii.ac.id', 1, '2019-03-24', '2019-04-12', '0000-00-00', '0000-00-00', 1, ' ', 0, '29/Dek/70-TA/Bag.TA/IV/2019', '', '', '', '', '', '', '0000-00-00', 'w', 'judul marjudul', '', 'murmaksud', 'marinstansi', '', 'murkota', '966110103', '156131305', '', '', '', '', '', 0, '', '', '', '', ''),
(16, 14, '00611055', '11613145@students.uii.ac.id', 1, '2019-03-24', '2019-03-24', '0000-00-00', '0000-00-00', 2, ' ', 0, '30/WD1/70-TA/Bag.TA/IV/2019', '', '', '', '', '', '', '0000-00-00', 'w', '', '', 'w', '', '', '', 'w', 'w', '', '', '', '', '', 0, '', '', '', '', ''),
(17, 15, '00611055', '11613145@students.uii.ac.id', 1, '2019-03-24', '2019-04-12', '0000-00-00', '0000-00-00', 2, ' ', 0, '0/WD1/90-Ket.Mhs/Div.AU/IV/2019', 'III (TIGA)', '', '', '', '', '', '0000-00-00', 'w', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(18, 12, 'e', 'e@s.c', 1, '2019-03-24', '2019-03-24', '0000-00-00', '0000-00-00', 2, ' ', 0, '32/WD1/70-TA/Bag.TA/III/2019', '611', 'd', '', '', '', '', '0000-00-00', '', 'dd', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(19, 1, '00611001', 'andhika.giri@uii.ac.id', 1, '2019-03-26', '2019-04-12', '0000-00-00', '0000-00-00', 1, ' ', 0, '33/Dek/90-Ket.Mhs/Div.AU/IV/2019', 'VI (ENAM)', ' ', ' ', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(20, 2, '00611001', 'andhika.giri@uii.ac.id', 1, '2019-03-26', '2019-04-12', '0000-00-00', '0000-00-00', 3, ' ', 0, '34/WD2/90/Div.AU/IV/2019', '', ' ', ' ', '', '', '', '0000-00-00', '', '', '', '', 'Kota', '', 'Malang', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(21, 4, '00611055', '11613145@students.uii.ac.id', 1, '2019-03-27', '2019-04-12', '0000-00-00', '0000-00-00', 2, ' ', 0, '35/WD1/70-TA/Bag.TA/IV/2019', '', '', '', '', '', '', '0000-00-00', '', 'Analisis Kimia Dasar', '', 'Roti bakar, Semen', 'PT.ABC Indonesia', 'Mr Leu Xieng Ciu', 'Tangerang', '096130408', '966110102', '', '', '', '', '', 0, '', '', '', '', ''),
(22, 5, '00611055', '11613145@students.uii.ac.id', 1, '2019-03-27', '2019-04-12', '0000-00-00', '0000-00-00', 1, ' ', 0, '36/Dek/70-TA/Bag.TA/IV/2019', '', '', '', '', '', '', '0000-00-00', '', 'Judul contoh', '', 'maksud contoh', 'MIPA', 'm', 'Sleman', '966110101', '966120101', '', '', '', '', '', 0, '', '', '', '', ''),
(23, 8, '00611055', '11613145@students.uii.ac.id', 1, '2019-03-27', '2019-04-12', '0000-00-00', '0000-00-00', 3, ' ', 0, '37/WD2/70-TA/Bag.TA/IV/2019', '', '', '', '', '', '', '0000-00-00', '', 'Analisis Pemetaan WIlayahx', 'Sistem Cerdas', 'Mohon dikawal di tempatx', 'PT. Cpa x', 'Mr. Hui Yun', 'Slemanx', '156121311', '036130102', '', '', '', '', '', 0, '', '', '', '', ''),
(24, 7, '00611055', '11613145@students.uii.ac.id', 1, '2019-03-27', '2019-04-12', '0000-00-00', '0000-00-00', 1, ' ', 0, '39/Dek/70-TA/Bag.TA/IV/2019', '', '', '', '', '', '', '0000-00-00', '', 'Judul', '', 'maksud keperluan', 'Lokasi', 'pimpinan', 'nama kota', '126130401', '096130502', '', '', '', '', '', 0, '', '', '', '', ''),
(25, 16, '11613145', '11613145@students.uii.ac.id', 0, '2019-03-27', '2019-03-28', '0000-00-00', '0000-00-00', 2, ' ', 0, '40/WD1/20/Div.Um&RT/III/2019', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(26, 17, '07811944', '11613145@students.uii.ac.id', 1, '2019-03-28', '2019-05-19', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', '', '', '', '', '', '0000-00-00', '', '', 'Kimia Dasar', 'keperluan TA', 'MUFC', 'Grazer', 'Manchester', 'Mr Joko Susanto', '', '', '', '', '', '', 0, '', '', '', '', ''),
(27, 17, '07811944', '11613145@students.uii.ac.id', 1, '2019-03-28', '2019-05-19', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', '', '', '', '', '', '0000-00-00', '', '', 'a', 'a', 'a', 'a', 'a', 'a', '', '', '', '', '', '', 0, '', '', '', '', ''),
(28, 17, '07811944', '11613145@students.uii.ac.id', 1, '2019-03-28', '2019-04-12', '0000-00-00', '0000-00-00', 1, ' ', 0, '53/Dek/90/Div.Um&RT/IV/2019', '', '', '', '', '', '', '0000-00-00', '', '', 'matematika', 'ijin ga masuk', 'MIPA', 'a', 'SLeman', '176110101', '', '', '', '', '', '', 0, '', '', '', '', ''),
(29, 17, '07811944', '11613145@students.uii.ac.id', 1, '2019-03-28', '2019-03-28', '0000-00-00', '0000-00-00', 2, ' ', 0, '54/WD1/90/Div.Um&RT/III/2019', '', '', '', '', '', '', '0000-00-00', '', '', 'b', 'b', 'b', 'b', 'b', 'b', '', '', '', '', '', '', 0, '', '', '', '', ''),
(30, 17, '07811944', '11613145@students.uii.ac.id', 1, '2019-03-28', '2019-03-28', '0000-00-00', '0000-00-00', 1, ' ', 0, '55/Dek/90/Div.Um&RT/V/2019', '', '', '', '', '', '', '0000-00-00', '', '', 'b', 'b', 'b', 'b', 'b', 'b', '', '', '', '', '', '', 0, '', '', '', '', ''),
(31, 2, '07811944', '11613145@students.uii.ac.id', 1, '2019-03-29', '2019-03-29', '0000-00-00', '0000-00-00', 1, ' ', 0, '56/Dek/90/Div.AU/V/2019', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 'Kabupaten Wonosobo', '', 'Wonosobo', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(32, 17, '11811059', '11811059@students.uii.ac.id', 1, '2019-03-29', '2019-03-29', '0000-00-00', '0000-00-00', 1, ' ', 0, '57/Dek/90/Div.Um&RT/V/2019', '', '', '', '', '', '', '0000-00-00', '', '', 'Matematika Kimia Dasar', 'Uji Coba Lab', 'PT. Celluler', 'Mr. Celluler', 'Korea', 'Mr Jono', '', '', '', '', '', '', 0, '', '', '', '', ''),
(33, 2, '11811059', '11811059@students.uii.ac.id', 1, '2019-03-29', '2019-05-19', '0000-00-00', '0000-00-00', 2, ' ', 0, '58/WD1/90/Div.AU/III/2019', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 'Jawa Tengah', '', 'Kota Semarang', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(34, 3, '00611001', '00611001@students.uii.ac.id', 1, '2019-05-19', '2019-05-19', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', ' ', ' ', 'Alghabban.pdf', 's', 's', '2019-05-08', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(35, 18, '11811059', '11811059@students.uii.ac.id', 1, '2019-03-29', '2019-04-12', '0000-00-00', '0000-00-00', 615, ' ', 0, '59/Kaprodi.Apo/90//IV/2019', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 'Paris St. Germain', 'Agnelli', 'Paris, France', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(36, 19, '11811059', '11811059@students.uii.ac.id', 1, '2019-03-29', '2019-04-12', '0000-00-00', '0000-00-00', 615, ' ', 0, '60/Kaprodi.Apo/90//V/2019', '', '', '', '', '', '', '0000-00-00', '', '', '', 'Transfer Accepted', 'Manchester City', 'Angelli GIannp', 'City of Manchester', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(37, 20, '00611001', '00611001@students.uii.ac.id', 1, '2019-04-10', '0000-00-00', '0000-00-00', '0000-00-00', 3, ' ', 0, '74/WD2/70-TA/Bag.TA/V/2019', 'Genap', '', '', '', '', '', '0000-00-00', '', 'Praktikum Statistika Dasar', '2020/2021', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(38, 4, '00611001', '00611001@students.uii.ac.id', 1, '2019-04-03', '2019-04-03', '0000-00-00', '0000-00-00', 1, ' ', 0, '62/Dek/70-TA/Bag.TA/IV/2019', '', '', '', '', '', '', '0000-00-00', '', 'Judul', '', 'Bahan', 'Instansi', 'Pimpinan', 'Jogjakarta', '956110101', '986120101', '', '', '', '', '', 0, '', '', '', '', ''),
(39, 21, '00611001', '00611001@students.uii.ac.id', 1, '2019-04-10', '2019-04-12', '0000-00-00', '0000-00-00', 1, ' ', 0, '75/Dek/70-TA/Bag.TA/IV/2019', '', '', '', '', '', '', '0000-00-00', '', 'Barcelona menang tipis atas MU', '', '', 'Visca Barca', 'Valverde', 'Barcelona, Catalunya, Spain', '166120102', '156121311', '', '', '', '', '', 0, '', '', '', '', ''),
(40, 1, '00611001', '00611001@students.uii.ac.id', 1, '2019-04-09', '2019-04-09', '0000-00-00', '0000-00-00', 1, ' ', 0, '66/Dek/90-Ket.Mhs/Div.AU/IV/2019', 'XIV (EMPAT BELAS)', ' ', ' ', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(41, 12, '', 'c@c.c', 0, '2019-04-10', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '611', '', '', '', '', '', '0000-00-00', '', 'fjlfdjldf\r\n', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(42, 12, '', 'andhika.giri@uii.ac.id', 1, '2019-04-10', '2019-05-19', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '613', '', '', '', '', '', '0000-00-00', '', 'xsxssx', '', '', '', '', '', 'Akhmad Fauzy, Prof., S.Si., M.Si., Ph.D.', '', '', '', '', '', '', 0, '', '', '', '', ''),
(43, 12, '', 'andhika.giri@uii.ac.id', 0, '2019-04-10', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', '611', '', '', '', '', '0000-00-00', '', 'dfdsfs', '', '', '', '', '', 'Akhmad Fauzy, Prof., S.Si., M.Si., Ph.D.', '', '', '', '', '', '', 0, '', '', '', '', ''),
(44, 12, '', 'andhika.giri@uii.ac.id', 0, '2019-04-10', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', '611', '', '', '', '', '0000-00-00', '', 'sdsdsd', '', '', '', '', '', '986120101', '', '', '', '', '', '', 0, '', '', '', '', ''),
(45, 13, '07811944', '07811944@students.uii.ac.id', 1, '2019-04-10', '2019-04-10', '0000-00-00', '0000-00-00', 2, ' ', 0, '71/WD1/90-Ket.Mhs/Div.AU/IV/2019', 'I (SATU)', '', '', '', '', '', '0000-00-00', 'a', '', '', '', '', '', '', '', '', 'a', 'a', 'a', 'a', 'a', 0, '', '', '', '', ''),
(46, 20, '00611001', '00611001@students.uii.ac.id', 0, '2019-05-03', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', 'Genap', '', '', '', '', '', '0000-00-00', '', '10', '2018/2019', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(47, 6, '00611055', '', 1, '2019-04-12', '2019-04-12', '0000-00-00', '0000-00-00', 1, ' ', 0, '76/Dek/70-TA/Bag.TA/IV/2019', '', '', '', '', '', '', '0000-00-00', '', 'judul', '', 'maksud', 'instansi', '', 'kota', '166120101', '096130502', '', '', '', '', '', 0, '', '', '', '', ''),
(48, 16, '07811944', '', 1, '2019-04-12', '2019-05-19', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(49, 16, '07811944', '', 1, '2019-04-12', '2019-05-18', '0000-00-00', '0000-00-00', 1, ' ', 0, '78/Dek/20/Div.Um&RT/V/2019', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(50, 16, '07811944', '', 1, '2019-04-12', '2019-04-12', '0000-00-00', '0000-00-00', 1, ' ', 0, '79/Dek/20/Div.Um&RT/IV/2019', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(51, 13, '00611001', '00611001@students.uii.ac.id', 2, '2019-05-11', '2019-05-19', '0000-00-00', '0000-00-00', 0, 'ulangi', 0, ' ', 'I (SATU)', '', '', '', '', '', '0000-00-00', 'Jalan RayaSeturan', '', '', 'Surat keterangan PNS ', '', '', '', '', '', 'Ronaldo', 'Pemain Bola', 'CR7', 'Juventus', 'LWF', 0, '', '', '', '', ''),
(52, 7, '00611001', '00611001@students.uii.ac.id', 0, '2019-05-19', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', '', '', '', '', '', '0000-00-00', '', 'p', '', 'i', 'i', 'i', 'i', '016120102', '', '', '', '', '', '', 0, '', '', '', '', ''),
(53, 16, '00611001', '00611001@students.uii.ac.id', 1, '2019-05-18', '2019-05-18', '0000-00-00', '0000-00-00', 3, ' ', 0, '82/WD2/20/Div.Um&RT/V/2019', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(54, 17, '00611001', '00611001@students.uii.ac.id', 1, '2019-05-18', '2019-05-18', '0000-00-00', '0000-00-00', 3, ' ', 0, '83/WD2/90/Div.Um&RT/V/2019', '', '', '', '', '', '', '0000-00-00', '', '', 'Matematika', 'TUgas Wae', 'PT XYZ', 'f', 'Bantul', '006120101', '', '', '', '', '', '', 0, '', '', '', '', ''),
(55, 6, '00611001', '00611001@students.uii.ac.id', 3, '2019-05-19', '2019-05-19', '2019-05-19', '0000-00-00', 1, ' ', 0, '85/Dek/70-TA/Bag.TA/V/2019', '', '', '', '', '', '', '0000-00-00', '', 'judul', '', 'maksud', 'instansi', 'l', 'kota', '166120101', '136110504', '', '', '', '', '', 0, '', '', '', '', ''),
(56, 6, '00611001', '00611001@students.uii.ac.id', 1, '2019-05-19', '2019-05-19', '0000-00-00', '0000-00-00', 2, ' ', 0, '87/WD1/70-TA/Bag.TA/V/2019', '', '', '', '', '', '', '0000-00-00', '', 'judul', '', 'keperluan', 'instansi', 'pim', 'kabupaten', '986120101', '956110101', '', '', '', '', '', 0, '', '', '', '', ''),
(57, 3, '09613110', '09613110@student.com', 0, '2019-05-26', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', ' ', ' ', '679-1343-1-PB.pdf', '14/23/012/vii', '2014', '2014-05-10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'alamat kirim ijazah', 'alamat kirim ijazah kab', 'alamat kirim ijazah prov', '20000', '14523227_Paper_Makalah1.pdf'),
(58, 6, '9613094', '9613094@students.uii.ac.id', 2, '2019-06-02', '2019-06-25', '0000-00-00', '0000-00-00', 2, 's', 0, '89/WD1/70-TA/Bag.TA/VI/2019', '', '', '', '', '', '', '0000-00-00', '', 'Judul2', '', 'Maksud2', 'PT. Instansi2', 'nn', 'Kota2', '176110102', '956110101', '', '', '', '', '', 0, '', '', '', '', ''),
(59, 11, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 1, ' ', 0, '90/Dek/70-TA/Bag.TA/VI/2019', '', '', '', '', '', '', '0000-00-00', '', 'judul penelitian x xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '', 'maksud keperluan', 'nama instansi x', 'nama pimpinan, S.Pd.I', 'kota x', '176110101', '', '', '', '', '', '', 0, '', '', '', '', ''),
(60, 7, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 2, ' ', 0, '91/WD1/70-TA/Bag.TA/VI/2019', '', '', '', '', '', '', '0000-00-00', '', 'lorem ipsum asdasdasdadasdasdasdasdasdasdasdasdasdasdasdasd\r\nlorem ipsum asdasdasdadasdasdasdasdasdasdasdasdasdasdasdasd', '', 'maksud keperluans', 'institusis', 'pimpinan msc', 'kota kabss', '176110101', '', '', '', '', '', '', 0, '', '', '', '', ''),
(61, 17, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 3, ' ', 0, '92/WD2/90/Div.Um&RT/VI/2019', '', '', '', '', '', '', '0000-00-00', '', '', 'mata kuliah 1', 'keperluan1 keperluan1 keperluan1 keperluan1 keperluan1 keperluan1 keperluan1 keperluan1 keperluan1 keperluan1 ', 'nama instansi penelitian1', 'pimpinan lokasi', 'kota kab1', '996100430', '', '', '', '', '', '', 0, '', '', '', '', ''),
(62, 16, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 3, ' ', 0, '93/WD2/20/Div.Um&RT/VI/2019', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(63, 13, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 2, ' ', 0, '94/WD1/90-Ket.Mhs/Div.AU/VI/2019', 'I (SATU)', '', '', '', '', '', '0000-00-00', 'alamat rumah x asdasdasdadasdasdasdasdasdasd', '', '', 'keperluan surat x', '', '', '', '', '', 'nama orang tua x', 'pekerjaan x', '018239 xxxxx', 'instansi s', 'iii/c x', 0, '', '', '', '', ''),
(64, 20, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 2, ' ', 0, ' ', 'Ganjil', '', '', '', '', '', '0000-00-00', '', 'Praktikum apa saja', '2018/2019', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(65, 15, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 1, ' ', 0, '96/Dek/90-Ket.Mhs/Div.AU/VI/2019', 'III (TIGA)', '', '', '', '', '', '0000-00-00', 'almaat rumaha lkjh kljhkjhk jhkjhkjhkjhkl hjlkjhlkhjlkhjlkhklhjkjhkljh', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(66, 1, '9613094', '9613094@students.uii.ac.id', 0, '2019-06-16', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', 'II (DUA)', ' ', ' ', '', '', '', '0000-00-00', 'as', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(67, 3, '9613094', '9613094@students.uii.ac.id', 3, '2019-06-16', '2019-06-16', '2019-06-28', '0000-00-00', 613, ' ', 0, '67/Kaprodi.Far/90/Div.AU/VI/2019', '', ' ', ' ', '14523227_Paper_Makalah1.pdf', '1092jj/10', '2014', '2014-09-10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'alamat', 'kabupaten', 'provinsi', '10.000', '14523227_Paper_Makalah.pdf'),
(68, 2, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 3, ' ', 0, '99/WD2/90/Div.AU/VI/2019', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 'DIY', '', 'Jogja kota', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(69, 18, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 613, ' ', 0, '69/Kaprodi.Far/90//VI/2019', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 'instansi1', 'pimpinan', 'kab1', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(70, 10, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 2, ' ', 0, '101/WD1/70-TA/Bag.TA/VI/2019', '', '', '', '', '', '', '0000-00-00', '', 'lorem ipsum asdasdasdadasdasdasdasdasdasdasdasdasdasdasdasd\r\nlorem ipsum asdasdasdadasdasdasdasdasdasdasdasdasdasdasdasd', '', 'keperluarn x', 'pt instansi x', 'bpk pimpinan', 'kota kabupaten x', '166120101', '136110504', '', '', '', '', '', 0, '', '', '', '', ''),
(71, 19, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 613, ' ', 0, '102/Kaprodi.Far/90//VI/2019', '', '', '', '', '', '', '0000-00-00', '', '', '', 'alasan1', 'instansi1', 'pimpinan', 'kabupaten1', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(72, 5, '9613094', '9613094@students.uii.ac.id', 2, '2019-06-16', '2019-06-25', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', '', '', '', '', '', '0000-00-00', '', 'judul penelitian', '', 'kebutuhan bahan', 'namainstansi', 'pimpinan', 'kota kabu', '176110102', '', '', '', '', '', '', 0, '', '', '', '', ''),
(73, 9, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 3, ' ', 0, '104/WD2/70-TA/Bag.TA/VI/2019', '', '', '', '', '', '', '0000-00-00', '', 'lorem ipsum asdasdasdadasdasdasdasdasdasdasdasdasdasdasdasd\r\nlorem ipsum asdasdasdadasdasdasdasdasdasdasdasdasdasdasdasd', 'subyek', 'keperluan penelitian', 'tempat penelitian', '', 'kota x', '176110102', '', '', '', '', '', '', 0, '', '', '', '', ''),
(74, 21, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-26', '0000-00-00', '0000-00-00', 1, ' ', 0, '105/Dek/70-TA/Bag.TA/VI/2019', '', '', '', '', '', '', '0000-00-00', '', 'asdx Barcelona menang tipis atas MU asdasd adsaasd asdasdasdads adasdasaa', '', '', 'namax', 'pimpinanx', 'alamatx', '176110102', '', '', '', '', '', '', 0, '', '', '', '', ''),
(75, 8, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 3, ' ', 0, ' ', '', '', '', '', '', '', '0000-00-00', '', 'lorem ipsum asdasdasdadasdasdasdasdasdasdasdasdasdasdasdasd\r\nlorem ipsum asdasdasdadasdasdasdasdasdasdasdasdasdasdasdasd', 'subyek', 'maksudx', 'instansixs', 'pimpinan', 'kotax', '176110102', '', '', '', '', '', '', 0, '', '', '', '', ''),
(76, 14, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 3, ' ', 0, '76/WD2/70-TA/Bag.TA/VI/2019', '', '', '', '', '', '', '0000-00-00', '', '', '', 'asdaasdasdadasdadasdasdasdasdasdadasdak.jhlkjhlkjkjhkljhlkhjkjhkjhlkhjkjhkjhlkhjlkhjklhjlkhj', 'asda', 'asdxca', 'asdef', '176110101', '', '', '', '', '', '', 0, '', '', '', '', ''),
(77, 4, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 1, ' ', 0, '108/Dek/70-TA/Div.AU/VI/2019', '', '', '', '', '', '', '0000-00-00', '', 'lorem ipsum asdasdasdadasdasdasdasdasdasdasdasdasdasdasdasd', '', 'asd ,mxcp', 'laksdnlws', 'ma sdkj', ',masoiws', '176110101', '136110504', '', '', '', '', '', 0, '', '', '', '', ''),
(78, 1, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 1, ' ', 0, '109/Dek/90-Ket.Mhs/Div.AU/VI/2019', 'I (SATU)', ' ', ' ', '', '', '', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(79, 5, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 1, ' ', 0, '110/Dek/70-TA/Div.AU/VI/2019', '', '', '', '', '', '', '0000-00-00', '', 'lorem ipsum asdasdasdadasdasdasdasdasdasdasdasdasdasdasdasd', '', 'kas 12', 'instansi233', 'pimpinan2', 'kab233', '956110101', '176110102', '', '', '', '', '', 0, '', '', '', '', ''),
(80, 20, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-16', '2019-06-16', '0000-00-00', '0000-00-00', 1, ' ', 0, '111/Dek/70-TA/Bag.TA/VI/2019', 'Ganjil', '', '', '', '', '', '0000-00-00', '', 'Praktikum Statistika Dasar abjad abc', '2020/2021', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(81, 3, '9613094', '9613094@students.uii.ac.id', 4, '2019-06-17', '2019-06-19', '2019-06-19', '2019-06-19', 613, ' ', 0, '112/Kaprodi.Far/90/Div.AU/VI/2019', '', ' ', ' ', '', '1234', '2019', '2019-06-05', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'alamt', 'kab', 'prov', '', ''),
(82, 1, '9613094', '9613094@students.uii.ac.id', 0, '2019-06-19', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', 'I (SATU)', ' ', ' ', '', '', '', '0000-00-00', 'coba', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(83, 3, '9613094', '9613094@students.uii.ac.id', 0, '2019-06-20', '0000-00-00', '0000-00-00', '0000-00-00', 0, 'alasan', 0, ' ', '', ' ', ' ', '', 'a', 'a', '2014-10-10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'a', 'b', 'c', '', ''),
(84, 2, '9231031', '9231031@students.uii.ac.id', 1, '2019-06-24', '2019-06-24', '0000-00-00', '0000-00-00', 3, ' ', 0, '115/WD2/90/Div.AU/VI/2019', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 'DIY', '', 'Sleman', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(85, 6, '9613094', '9613094@students.uii.ac.id', 2, '2019-06-25', '2019-06-25', '0000-00-00', '0000-00-00', 0, 'uji tolak', 0, ' ', '', '', '', '', '', '', '0000-00-00', '', 'uji coba', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'instansi', 'coba', 'coba', '176110101', '', '', '', '', '', '', 0, '', '', '', '', ''),
(86, 6, '9613094', '9613094@students.uii.ac.id', 2, '2019-06-25', '2019-06-25', '0000-00-00', '0000-00-00', 0, 'asalan', 0, ' ', '', '', '', '', '', '', '0000-00-00', '', 't', '', 't', 't', 't', 't', '156131305', '', '', '', '', '', '', 0, '', '', '', '', ''),
(87, 6, '9613094', '9613094@students.uii.ac.id', 2, '2019-06-25', '2019-06-25', '0000-00-00', '0000-00-00', 0, 'asdasdasd', 0, ' ', '', '', '', '', '', '', '0000-00-00', '', 's', '', 's', 's', 's', 's', '166120101', '', '', '', '', '', '', 0, '', '', '', '', ''),
(88, 6, '9613094', '9613094@students.uii.ac.id', 4, '2019-06-25', '2019-06-25', '2019-06-25', '2019-06-25', 1, ' ', 0, '119/WD2/70-TA/Bag.TA/VI/2019', '', '', '', '', '', '', '0000-00-00', '', 'as', '', 'as', 'as', 'as', 'as', '176110101', '', '', '', '', '', '', 0, '', '', '', '', ''),
(89, 16, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-25', '2019-06-25', '0000-00-00', '0000-00-00', 1, ' ', 0, '120/Dek/20/Div.Um&RT/VI/2019', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(90, 20, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-25', '2019-06-25', '0000-00-00', '0000-00-00', 3, ' ', 0, '123/WD2/70-TA/Bag.TA/VI/2019', 'Ganjil', '', '', '', '', '', '0000-00-00', '', 'Praktikum A', '2018/2019', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(91, 20, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-25', '2019-06-25', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', 'Ganjil', '', '', '', '', '', '0000-00-00', '', '', '2', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(92, 20, '9613094', '9613094@students.uii.ac.id', 2, '2019-06-25', '2019-06-25', '0000-00-00', '0000-00-00', 0, 'tolak', 0, ' ', 'Ganjil', '', '', '', '', '', '0000-00-00', '', '', '3', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(93, 20, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-25', '2019-06-25', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', 'Ganjil', '', '', '', '', '', '0000-00-00', '', '', '4', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(94, 20, '9613094', '9613094@students.uii.ac.id', 1, '2019-06-25', '2019-06-25', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', 'Ganjil', '', '', '', '', '', '0000-00-00', '', '', '2018/2019', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(95, 3, '9613094', '9613094@students.uii.ac.id', 2, '2019-06-25', '2019-06-28', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', ' ', ' ', 'Cetak_surat_.pdf', 'ab', '2014', '2014-06-03', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'kab2', 'prov2', '', ''),
(96, 8, '9613094', '9613094@students.uii.ac.id', 0, '2019-06-25', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 'a', 'a', 'a', '176110101', '', '', '', '', '', '', 0, '', '', '', '', ''),
(97, 14, '9613094', '9613094@students.uii.ac.id', 0, '2019-06-25', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', '', '', '', '', '', '0000-00-00', '', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ', 'lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ', 'lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ', '966120101', '', '', '', '', '', '', 0, '', '', '', '', ''),
(98, 14, '9613094', '9613094@students.uii.ac.id', 0, '2019-06-25', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', '', '', '', '', '', '0000-00-00', '', '', '', 'asdasd', 'as', 'asd', 'asd', '956110101', '', '', '', '', '', '', 0, '', '', '', '', ''),
(99, 14, '9613094', '9613094@students.uii.ac.id', 0, '2019-06-25', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', '', '', '', '', '', '0000-00-00', '', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'a', 'b', 'c', '176110101', '', '', '', '', '', '', 0, '', '', '', '', ''),
(100, 11, '9613094', '9613094@students.uii.ac.id', 0, '2019-06-25', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', '', '', '', '', '', '0000-00-00', '', 'qwer', '', 'qwr', 'erq', 'qewr', 'qweq', '176110102', '996100430', '', '', '', '', '', 0, '', '', '', '', ''),
(101, 11, '9613094', '9613094@students.uii.ac.id', 0, '2019-06-26', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', '', '', '', '', '', '0000-00-00', '', '1123', '', '123', '123', '132', '123', '956110101', '176110101', '', '', '', '', '', 0, '', '', '', '', ''),
(102, 11, '9613094', '9613094@students.uii.ac.id', 0, '2019-06-26', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', '', '', '', '', '', '', '0000-00-00', '', '123', '', '123', '123', '123', '123', '176110102', '176110101', '', '', '', '', '', 0, '', '', '', '', ''),
(103, 6, '9231031', '9231031@students.uii.ac.id', 1, '2019-06-26', '2019-06-26', '0000-00-00', '0000-00-00', 1, ' ', 0, '136/Dek/70-TA/Bag.TA/VI/2019', '', '', '', '', '', '', '0000-00-00', '', 'lorem ipsum asdasdasdadasdasdasdasdasdasdasdasdasdasdasdasd\r\nlorem ipsum asdasdasdadasdasdasdasdasdasdasdasdasdasdasdasd', '', 'lorem ipsum asdasdasdadasdasdasdasdasdasdasdasdasdasdasdasd', 'lorem ipsum', 'lorem', 'ipsium', '166120101', '', '', '', '', '', '', 0, '', '', '', '', ''),
(104, 14, '9231031', '9231031@students.uii.ac.id', 1, '2019-06-27', '2019-06-27', '0000-00-00', '0000-00-00', 1, ' ', 0, '104/Dek/70-TA/Bag.TA/VI/2019', '', '', '', '', '', '', '0000-00-00', '', '', '', 'cek', 'ins', 'pimp', 'kab', '176110101', '', '', '', '', '', '', 0, '', '', '', '', ''),
(105, 14, '9231031', '9231031@students.uii.ac.id', 1, '2019-06-27', '2019-06-27', '0000-00-00', '0000-00-00', 1, ' ', 0, '105/Dek/70-TA/Bag.TA/VI/2019', '', '', '', '', '', '', '0000-00-00', 'cek2', '', '', 'cek2', 'cek2', 'cek2', 'cek2', '966120101', '', '', '', '', '', '', 0, '', '', '', '', ''),
(106, 20, '9613094', '9613094@students.uii.ac.id', 0, '2019-07-01', '0000-00-00', '0000-00-00', '0000-00-00', 0, ' ', 0, ' ', 'Genap', '', '', '', '', '', '0000-00-00', '', 'Praktikum blablabla1', '2018/2019', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id` int(5) NOT NULL,
  `awal` varchar(10) NOT NULL,
  `akhir` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id`, `awal`, `akhir`, `semester`) VALUES
(1, '2018', '2019', 'Genap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `itmk`
--
ALTER TABLE `itmk`
  ADD PRIMARY KEY (`id_ITMK`);

--
-- Indexes for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`id_jenis_surat`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itmk`
--
ALTER TABLE `itmk`
  MODIFY `id_ITMK` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  MODIFY `id_jenis_surat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

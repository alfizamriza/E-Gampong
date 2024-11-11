-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2024 pada 15.57
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egampong`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `Id_admin` int(20) NOT NULL,
  `Nama_admin` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`Id_admin`, `Nama_admin`, `Password`) VALUES
(123987, 'farhansyah', '$2y$10$nH9INauTP5AY5vN1Gqx0IetISm1KmwzreZo2au5k2Jek1TlHXZzYW');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_pindah`
--

CREATE TABLE `surat_pindah` (
  `No_Surat_Pindah` int(5) NOT NULL,
  `NIK` int(16) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Tempat_Lahir` varchar(20) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Alamat_baru` varchar(255) NOT NULL,
  `Alasan_pindah` varchar(100) NOT NULL,
  `Tgl_pindah` date NOT NULL,
  `Tgl_permohonan` date NOT NULL,
  `Tgl_cetak` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_pindah`
--

INSERT INTO `surat_pindah` (`No_Surat_Pindah`, `NIK`, `Nama`, `Tempat_Lahir`, `Tanggal_Lahir`, `Alamat`, `Alamat_baru`, `Alasan_pindah`, `Tgl_pindah`, `Tgl_permohonan`, `Tgl_cetak`, `id_user`, `status`) VALUES
(4, 3456543, 'SDSDS', 'SDSD', '2023-11-06', 'SDSD', 'SDSD', 'SDDS', '2023-11-03', '2023-11-14', '0000-00-00', 0, 1),
(5, 234543, 'fsfs', 'sfsf', '2023-11-09', 'sfsf', 'sfsf', 'sfs', '2023-11-02', '2023-11-08', '0000-00-00', 0, 0),
(6, 15432345, 'dwdw', 'dwdw', '2023-11-16', 'wdwdw', 'wdwd', 'wdwdw', '2023-10-31', '2023-11-15', '0000-00-00', 0, 0),
(7, 13456, 'aDADA', 'ADA', '2023-11-09', 'WDAD', 'AWDAWD', 'AWDA', '2023-11-08', '2023-11-14', '0000-00-00', 0, 0),
(8, 234567654, 'WDWD', 'WDWD', '2023-11-10', 'WDWD', 'WDWD', 'WDW', '2023-11-22', '2023-11-22', '0000-00-00', 0, 0),
(9, 34543, 'adwd', 'wdwd', '2023-11-24', 'wdwdw', 'wdw', 'wdw', '2023-11-08', '2023-11-14', '2023-11-03', 0, 0),
(19, 8796874, 'bjkVIYVD', 'EFREGE', '0000-00-00', 'DFVFRF', 'DFGBHGHT', 'DFGHM,J', '5656-12-31', '5676-03-04', '0678-04-05', 0, 0),
(20, 234434, 'dfgrrt', 'dfghh', '0003-12-31', '45665', '345656', '3456', '0045-02-09', '0567-02-20', '0056-03-04', 0, 0),
(21, 2345678, 'ilhi', 'medan', '2004-02-11', 'jalan', 'jalan baru', 'gabut', '2223-02-04', '2223-02-06', '2023-02-09', 0, 0),
(22, 123, 'alfi', 'Sigli', '0000-00-00', 'dfghjkl', 'asdfghjkl', 'asdfghjk', '0567-12-02', '2023-11-08', '2023-11-16', 0, 1),
(23, 10293847, 'Alfi Zamriza', 'Sigli', '2023-11-09', 'asdfghjkl', 'asdfghjkl', 'asdfghjkl', '2023-11-23', '2023-11-25', '2023-11-24', 0, 0),
(24, 10293847, 'Alfi Zamriza', 'Sigli', '2023-11-09', '1234567', 'sdfghjk', 'asdfghjk', '2023-11-21', '2023-11-17', '2023-11-23', 0, 1),
(25, 10293847, '1dq', 'Sigli', '2023-11-17', 'j', 'k', 'k', '2023-11-24', '2023-11-14', '2023-11-09', 7, 1),
(26, 10293847, 'Alfi Zamriza', 'Sigli', '2023-11-20', 'dfghjk', 'dfghjk', 'dfghjk', '2023-11-16', '2023-11-24', '2023-11-15', 7, 0),
(27, 10293847, 'kljn', 'jnk', '2023-11-17', 'ghbjkl', 'lnigl', 'knji', '2023-11-24', '2023-11-06', '2023-12-01', 7, 1),
(28, 987, 'T. Farhan Syah', 'Medan', '2004-04-28', 'Gampong Prada', 'Gampong Paya', 'Dinas Luar Kota', '2023-12-09', '2023-11-30', '2023-12-04', 8, 1),
(29, 10293847, 'T Farhan', 'Medan', '2023-12-11', 'jakarta', 'Medan', 'Kerjaan', '2023-12-19', '2023-12-11', '2023-12-19', 7, 1),
(30, 4556, 'nama', 'tempat', '2023-12-08', 'lamat', 'baru', 'tidak betah', '2023-12-23', '2023-12-23', '2023-12-23', 9, 1),
(31, 1, 'Bayu', 'Jawa', '2006-01-22', 'Gampong Rawa', 'Gampong Jawa', 'Pindah Kerja', '2024-01-06', '2024-01-02', '2024-01-05', 10, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_tidak_mampu`
--

CREATE TABLE `surat_tidak_mampu` (
  `No_Surat_Tidak_Mampu` int(5) NOT NULL,
  `NIK` int(16) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Tempat_Lahir` varchar(20) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` text NOT NULL,
  `JK` varchar(10) NOT NULL,
  `Tujuan` varchar(100) NOT NULL,
  `Catatan` text NOT NULL,
  `Tgl_permohonan` date NOT NULL,
  `Tgl_cetak` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_tidak_mampu`
--

INSERT INTO `surat_tidak_mampu` (`No_Surat_Tidak_Mampu`, `NIK`, `Nama`, `Tempat_Lahir`, `Tanggal_Lahir`, `Alamat`, `JK`, `Tujuan`, `Catatan`, `Tgl_permohonan`, `Tgl_cetak`, `id_user`, `status`) VALUES
(22, 234567654, 'farhan', 'efef', '2023-11-08', 'frfrf', 'laki', 'rrgrgg', 'rgrgr', '2023-11-10', '2023-11-10', 0, 2),
(25, 34567887, 'mana', 'jsusg', '2023-11-09', 'wdwdwd', 'perempuan', 'wdwd', 'dwd', '2023-11-16', '2023-11-15', 0, 1),
(26, 1234567876, 'jahja', 'wdwdw', '2023-11-16', 'wdwdw', 'laki', 'wddw', 'wdwd', '2023-11-01', '2023-11-04', 0, 1),
(27, 3456787, 'wdwdw', 'wdwdwd', '2023-11-10', 'wdwd', 'laki', 'wdwd', 'wdwd', '2023-11-16', '2023-11-10', 0, 0),
(28, 1234324, 'adad', 'asdd', '2023-11-08', 'addasdsa', 'laki', 'adsadsa', 'dasdsa', '2023-11-15', '2023-11-09', 0, 0),
(29, 765454657, 'Montu JR ', 'sabang', '2050-10-10', 'tanoh buju kota sabang', 'laki', 'untuk kuliah', 'mohon di percepat', '2023-11-24', '2023-11-27', 0, 1),
(30, 65885568, 'husd', 'dcdc', '2023-11-29', 'dcdcd', 'laki', 'cdcdd', 'dcdcd', '2023-11-30', '2023-12-01', 0, 0),
(31, 2147483647, 'wdwdw', 'wdwdw', '2023-11-16', 'wdwd', 'laki', 'wdwd', 'wdwdw', '2023-11-15', '2023-12-06', 0, 0),
(32, 24536457, 'jhghgjkhkhfj', 'vhjgkhj', '0345-12-31', 'sdsf', 'laki', 'sdfsdf', 'sfsdf', '0005-12-04', '5656-03-04', 0, 0),
(33, 10293847, 'Alfi Zamriza', 'Sigli', '2023-11-08', 'sfyguioo', '', 'tfyguijo', 'huigyftodri', '2023-11-16', '2023-11-30', 0, 1),
(34, 10293847, 'dfgui', 'tdyfffi7', '2023-11-08', 'higlygi', '', 'ytyu', 'ygtoytoy', '2023-11-15', '2023-11-24', 7, 1),
(35, 1234567, 'rd6ruj', 'uiiuo', '5678-12-31', 'uhiu', '', 'kj', 'njkjk', '2023-11-10', '2023-11-13', 7, 1),
(36, 987, 'T. Farhan Syah', 'Medan', '2004-04-28', 'Gampong Prada', '', 'Kuliah', 'Segera Siap', '2023-11-30', '2023-11-30', 8, 1),
(37, 123456, 'Abulah', 'CrohKrong', '1972-06-01', 'Jl. Mamudun', '', 'Bansos', 'Dipersiapkan segera', '2023-12-22', '2023-12-23', 7, 0),
(38, 123, 'T Farhan Syah', 'Prada', '2023-12-16', 'asdfghjkl', '', 'sdfghjkl', 'asdfghjk', '2023-12-19', '2023-12-15', 7, 1),
(39, 456, 'Nama', 'temapy', '2023-12-08', 'lamat', '', 'juan', 'catan', '2023-12-08', '2023-12-16', 9, 1),
(40, 10293847, 'Alfi Zamriza', 'Sigli', '2023-12-28', 'aghjkl;', '', 'dfjygui', 'jjuil.v', '2023-12-24', '2023-12-27', 7, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id_user` int(10) NOT NULL,
  `NIK` bigint(16) NOT NULL,
  `No_KK` bigint(16) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Tempat_Lahir` varchar(20) NOT NULL,
  `TanggaL_Lahir` date NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `No_WA` bigint(13) NOT NULL,
  `JK` varchar(10) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id_user`, `NIK`, `No_KK`, `Nama`, `Tempat_Lahir`, `TanggaL_Lahir`, `Alamat`, `No_WA`, `JK`, `Password`) VALUES
(1, 12345678, 1234567, 'AAAD', 'ADDAA', '2023-11-17', 'DADA', 1234567, 'laki-laki', '$2y$10$MR4J.3yhmtwQaY/GPpC8meFfFF9o6rxnTo1UNjro0LmjjyHmBFNta'),
(2, 98765456733, 98765456789, 'adDA', 'WQDQDQ', '2023-12-08', 'QWDQWD', 234567, 'laki-laki', '$2y$10$plC16c2V6ZqC/1ZlFu65g.jnc0v7KSLL6zgxjgyWkrvmzwWuz3ZH.'),
(3, 123456789, 98765430, 'FARHAN', 'medan', '2023-11-10', 'perauda', 81927216181, 'laki-laki', '$2y$10$TBiq/6QWDak2evej1il7y.D4Bx2ntPvH8X/BcHnFolwyinOGciIAq'),
(4, 10293847, 123456787654, 'Montu sinaga', 'Medan', '2023-11-15', 'Perauda', 9876652, 'laki-laki', '$2y$10$hfJX0dYC2LF7KcueYf2Z3.fclndnTA8M0NLvrzEOqj4YEzVS6tUKu'),
(5, 1171020901040001, 6198517521578581, 'T. M. Fadlul Ihsan', 'Banda Aceh', '2004-01-09', 'JLN.N.MUJAJIR NO.12', 87979279279, 'laki-laki', '$2y$10$EkUjkwK3vFtHjvO9KTPHVehBtbPzp87twoctckld95Y6qyBPHTDim'),
(6, 19191919191919191, 8282828282828282, 'lLlL', 'lingke', '2003-11-30', 'sasas', 8800880, '', '$2y$10$PJA5Jx6CEI/4kSY2SUnUgu3BY6U2kMdb3PPJIII5pXmg2KUgXV23W'),
(7, 123, 98760, 'Alfi Zamriza', 'Sigli', '2023-11-21', 'Gampong Paya, Kec. Pidie, Kab. Pidie', 82211341607, 'laki-laki', '$2y$10$g87mDXZsO/oh3vqQazHKP.UzlQVfkpHgE47Ce.CL7YUQjMRbXEvwS'),
(8, 987, 987, 'T. Farhan Syah', 'Medan', '2004-04-28', 'Gampong Prada', 812345678, 'laki-laki', '$2y$10$TTMTM5brZM.1ydHCyLViqe.ANq07oQ6.Y3DUbSDJaJmSRqslhdu46'),
(9, 9876, 45677, 'alfi', 'aceh', '2023-12-15', 'banda aceh', 9897, 'laki-laki', '$2y$10$Pf.hBDTj7liOxk9P9UwUuuc0W7Y4pi0fJzBKIJdMhO0VIjBRwk32C'),
(10, 1, 110716060821001, 'Bayu', 'Jawa', '2006-01-22', 'Gampong Rawa', 822, 'laki-laki', '$2y$10$QAEYouImgavKnaaYyi7VueGkwSr8Wq0A27yApO9OeZ589PK4chKaG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Indeks untuk tabel `surat_pindah`
--
ALTER TABLE `surat_pindah`
  ADD PRIMARY KEY (`No_Surat_Pindah`);

--
-- Indeks untuk tabel `surat_tidak_mampu`
--
ALTER TABLE `surat_tidak_mampu`
  ADD PRIMARY KEY (`No_Surat_Tidak_Mampu`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `surat_pindah`
--
ALTER TABLE `surat_pindah`
  MODIFY `No_Surat_Pindah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `surat_tidak_mampu`
--
ALTER TABLE `surat_tidak_mampu`
  MODIFY `No_Surat_Tidak_Mampu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `Id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

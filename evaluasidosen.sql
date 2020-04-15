-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 07.17
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evaluasidosen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `iduser` varchar(32) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`iduser`, `nama`, `password`, `status`) VALUES
('198910132015042000', 'Dania Eridani, S.T., M.Eng.', 'dd4b21e9ef71e1291183a46b913ae6f2', 'dosen'),
('21120117120024', 'Dwi Supardiyono', 'dd4b21e9ef71e1291183a46b913ae6f2', 'mahasiswa'),
('Admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `dosen` varchar(41) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `dosen`) VALUES
(1, 'Dr. R. Rizal Isnanto, S.T., M.M., M'),
(2, 'Dr. Adian Fatchur Rochim, S.T., M.T.'),
(3, 'Agung Budi Prasetijo, S.T., M.I.T., '),
(4, 'Rinta Krida Lukmana, S.., M.T.'),
(5, 'Dr. Oky Dwi Nurhayati, S.T., M.T.'),
(6, 'Eko Didik Widianto, S.T., M.T.'),
(7, 'Kurniawan Teguh Martono, S.T., M.T.'),
(8, 'Ike Pertiwi Windasari, S.T., M.T.'),
(9, 'Adnan Fauzi, S.T., M.Kom.'),
(10, 'Dania Eridani, S.T., M.Eng.'),
(11, 'Yudi Eko Windarto, S.T., M.Kom.'),
(12, 'Risma Septiana, S.T., M.Eng.'),
(13, 'Kuntoro Adi Nugroho, S.T., M.Eng.'),
(14, 'Dr. R. Rizal Isnanto, S.T., M.M., M'),
(15, 'Dr. Adian Fatchur Rochim, S.T., M.T.'),
(16, 'Agung Budi Prasetijo, S.T., M.I.T., '),
(17, 'Rinta Krida Lukmana, S.., M.T.'),
(18, 'Dr. Oky Dwi Nurhayati, S.T., M.T.'),
(19, 'Eko Didik Widianto, S.T., M.T.'),
(20, 'Kurniawan Teguh Martono, S.T., M.T.'),
(21, 'Ike Pertiwi Windasari, S.T., M.T.'),
(22, 'Adnan Fauzi, S.T., M.Kom.'),
(23, 'Dania Eridani, S.T., M.Eng.'),
(24, 'Yudi Eko Windarto, S.T., M.Kom.'),
(25, 'Risma Septiana, S.T., M.Eng.'),
(26, 'Kuntoro Adi Nugroho, S.T., M.Eng.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
--

CREATE TABLE `form` (
  `id_form` int(10) NOT NULL,
  `id_mhs` varchar(32) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `smt` varchar(15) NOT NULL,
  `dosen` varchar(64) NOT NULL,
  `matkul` varchar(64) NOT NULL,
  `total_nilai` varchar(32) NOT NULL,
  `teks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(10) NOT NULL,
  `matkul` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `matkul`) VALUES
(1, 'Bahasa Inggris'),
(2, 'Olahraga'),
(3, 'Pancasila'),
(4, 'Pendidikan Agama'),
(5, 'Dasar Komputer dan Pemrograman'),
(6, 'Fisika Dasar 1'),
(7, 'Kalkulus I'),
(8, 'Teknologi Informasi'),
(9, 'Kewarganegaraan'),
(10, 'Praktikum Dasar Komputer dan Pemrograman'),
(11, 'Praktikum Fisika Dasar I'),
(12, 'Algoritma dan Pemrograman'),
(13, 'Elektronika Dasar'),
(14, 'Fisika Dasar II'),
(15, 'Kalkulus II'),
(16, 'Konsep Jaringan Komputer'),
(17, 'Sistem Digital'),
(18, 'Kewirausahaan'),
(19, 'Praktikum Fisika Dasar II'),
(20, 'Praktikum Sistem Digital'),
(21, 'Dasar Sistem Kendali'),
(22, 'Matematika Teknik'),
(23, 'Organisasi Komputer'),
(24, 'Pengantar Perangkat Bergerak'),
(25, 'Sistem Operasi'),
(26, 'Struktur Data'),
(27, 'Teknik Antarmuka dan Periferal'),
(28, 'Teknik Mikroprosesor'),
(29, 'Praktikum Teknik Antarmuka dan Periferal'),
(30, 'Praktikum Teknik Mikroprosesor'),
(31, 'Arsitektur Komputer'),
(32, 'Jaringan Komputer I'),
(33, 'Kecakapan Antar Personal'),
(34, 'Kriptografi'),
(35, 'Metodologi Penelitian'),
(36, 'Pemrograman Perangkat Bergerak'),
(37, 'Sistem Basis Data'),
(38, 'Teknik Telekomunikasi Seluler'),
(39, 'Tranduser dan Sensor'),
(40, 'Praktikum Jaringan Komputer I'),
(41, 'Praktikum Pemrograman Perangkat Bergerak'),
(42, 'Praktikum SIstem Basis Data'),
(43, 'Bahasa Pemrograman Rakitan'),
(44, 'Jaringan Komputer II'),
(45, 'Pemrograman Berorientasi Objek'),
(46, 'Metode Numerik'),
(47, 'Probabilitas dan Statistik'),
(48, 'Rekayasa Perangkat Lunak'),
(49, 'Robotika'),
(50, 'Sisten Digital Lanjut'),
(51, 'Sistem Tertanam'),
(52, 'Praktikum Jaringan Komputer II'),
(53, 'Praktikum Rekayasa Perangkat Lunak'),
(54, 'Praktikum Robotika'),
(55, 'Praktikum Sistem Digital Lanjut'),
(56, 'Etika Profesi'),
(57, 'Jaringan Komputer Lanjut'),
(58, 'Kerja Praktek'),
(59, 'Multimedia'),
(60, 'Rekayasa Perangkat Lunak Berbasis Komponen'),
(61, 'Sistem Operasi Waktu Nyata'),
(62, 'Praktikum Jaringan Komputer Lanjut'),
(63, 'Praktkum Multimedia'),
(64, 'Praktikum Rekayasa Perangkat Lunak Berbasis Komponen'),
(65, 'Interaksi Manusia dan Komputer'),
(66, 'Manajemen Trafik'),
(67, 'Pemrograman Jaringan'),
(68, 'Kuliah Kerja Nyata'),
(69, 'Kuliah Kerja Lapangan'),
(70, 'Desain Sistem VLSI'),
(71, 'Jaringan Syaraf Tiruan'),
(72, 'Keamanan Jaringan Komputer'),
(73, 'Kecerdasan Buatan'),
(74, 'Logika Fuzzy'),
(75, 'Pemrograman Game'),
(76, 'Pemrograman Java'),
(77, 'Pengolahan CItra dan Penegenalan Pola'),
(78, 'Perencanaan Startegis Sistem dan Teknologi Informasi'),
(79, 'Sistem Informasi'),
(80, 'Sistem Terintegrasi'),
(81, 'Telekomunikasi Satelit'),
(82, 'Data Mining'),
(83, 'Grafika Komputer'),
(84, 'Keamanan Sistem Informasi'),
(85, 'Pemrograman Basis Data'),
(86, 'Pemrograman Berorientasi Objek Lanjut'),
(87, 'Pengenalan Ucapan'),
(88, 'Pengolahan Paralel'),
(89, 'Pengolahan Sinyal'),
(90, 'Perancangan Mikroprosesor'),
(91, 'Sistem Tertanam Terdistribusi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(10) NOT NULL,
  `nilai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nilai`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id_smt` int(11) NOT NULL,
  `semester` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id_smt`, `semester`) VALUES
(1, 'Semester 1'),
(2, 'Semester 2'),
(3, 'Semester 3'),
(4, 'Semester 4'),
(5, 'Semester 5'),
(6, 'Semester 6'),
(7, 'Semester 7'),
(8, 'Semester 8'),
(9, 'Semester 9'),
(10, 'Semester 10'),
(11, 'Semester 11'),
(12, 'Semester 12'),
(13, 'Semester 13'),
(14, 'Semester 14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`iduser`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_form`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_smt`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `form`
--
ALTER TABLE `form`
  MODIFY `id_form` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `semester`
--
ALTER TABLE `semester`
  MODIFY `id_smt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

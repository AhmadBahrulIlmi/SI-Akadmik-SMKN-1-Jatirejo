-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 14 Jun 2023 pada 16.25
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
-- Database: `db_smkn1jatiorejo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` char(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`, `no_telp`, `alamat`, `id_user`, `updated_at`, `created_at`) VALUES
('A01', 'Pak Sugiono', '088653636363', 'Mojokerto', NULL, '2023-05-05 06:15:58', '2023-05-05 06:15:58'),
('A02', 'Pak Yayan', '087866563434', 'Mojokerto', NULL, '2023-05-05 06:17:45', '2023-05-05 06:17:45'),
('A03', 'Jajang Suprinto', '087563819222', 'Mojokerto', NULL, '2023-06-02 10:08:43', '2023-06-02 10:08:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ekstrakulikuler`
--

CREATE TABLE `tb_ekstrakulikuler` (
  `nama_ekstra` varchar(20) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` char(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nama`, `jenis_kelamin`, `tgl_lahir`, `agama`, `alamat`, `no_tlp`, `email`, `jabatan`, `id_user`, `updated_at`, `created_at`) VALUES
('G01', 'Iwan', 'Laki-laki', '1877-11-11', 'Islam', 'Mojokerto', '08785463435', 'iwan@gmail.com', '08785463435', NULL, '2023-06-03 05:35:32', '2023-05-05 05:37:18'),
('G02', 'Ismi Zahroh', 'Perempuan', '1979-09-27', 'Islam', 'Mojokerto', '087856437645', 'ismizahroh@gmail.com', 'Guru Utama', NULL, '2023-05-05 05:48:17', '2023-05-05 05:48:17'),
('G03', 'Munaroh', 'Perempuan', '1877-02-19', 'Islam', 'Mojokerto', '086745324563', 'munaroh@gmail.com', 'Guru Utama', NULL, '2023-05-06 08:29:29', '2023-05-06 08:29:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam` time NOT NULL,
  `id_admin` varchar(20) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `hari`, `jam`, `id_admin`, `id_mapel`, `id_jurusan`, `updated_at`, `created_at`) VALUES
(1, 'Senin', '07:00:00', NULL, 114, 13, '2023-06-03 04:54:30', '2023-06-02 08:47:07'),
(3, 'Senin', '08:00:00', NULL, 112, 11, '2023-06-02 10:19:31', '2023-06-02 10:19:31'),
(4, 'Senin', '08:00:00', NULL, 114, 11, '2023-06-02 10:19:55', '2023-06-02 10:19:55'),
(5, 'Senin', '09:00:00', NULL, 113, 11, '2023-06-02 10:20:21', '2023-06-02 10:20:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`, `updated_at`, `created_at`) VALUES
(11, 'Multimedia', '2023-05-07 01:55:24', '2023-05-07 01:55:24'),
(12, 'Mesin', '2023-06-02 05:33:06', '2023-06-02 05:33:06'),
(13, 'Industri', '2023-06-02 10:20:58', '2023-06-02 10:20:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `tingkat_kelas` varchar(20) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `tingkat_kelas`, `id_jurusan`, `updated_at`, `created_at`) VALUES
(101, 'XII', 11, '2023-06-02 10:22:44', '2023-06-02 09:51:15'),
(102, 'XII', 12, '2023-06-02 10:22:52', '2023-06-02 10:22:52'),
(103, 'XII', 13, '2023-06-02 10:23:03', '2023-06-02 10:23:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama_mapel`, `updated_at`, `created_at`) VALUES
(111, 'Bahasa Inggris', '2023-06-02 10:16:34', '2023-05-07 02:25:34'),
(112, 'Bahasa Indonesia', '2023-06-02 10:16:20', '2023-05-07 02:25:22'),
(113, 'Matematika', '2023-06-02 10:16:41', '2023-05-07 02:25:46'),
(114, 'PPKN', '2023-06-02 10:16:56', '2023-06-02 10:16:56'),
(115, 'Sejarah', '2023-06-02 10:17:31', '2023-06-02 10:17:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `tugas1` int(10) NOT NULL,
  `tugas2` int(11) NOT NULL,
  `tugas3` int(11) NOT NULL,
  `uts` int(10) NOT NULL,
  `uas` int(10) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_guru` varchar(20) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `semester`, `tugas1`, `tugas2`, `tugas3`, `uts`, `uas`, `id_siswa`, `id_guru`, `id_mapel`, `updated_at`, `created_at`) VALUES
(27, 'Genap', 80, 90, 90, 99, 88, 2002021, NULL, 111, '2023-06-03 05:58:46', '2023-06-03 05:58:46'),
(31, 'Genap', 80, 88, 89, 99, 88, 2002021, NULL, 112, '2023-06-03 05:58:46', '2023-06-03 05:58:46'),
(32, 'Genap', 80, 90, 90, 99, 88, 2002021, NULL, 113, '2023-06-03 05:58:46', '2023-06-03 05:58:46'),
(34, 'Genap', 80, 88, 79, 99, 88, 2002021, NULL, 114, '2023-06-03 05:58:46', '2023-06-03 05:58:46'),
(35, 'Genap', 78, 90, 80, 99, 99, 2002021, NULL, 115, '2023-06-03 05:58:46', '2023-06-03 05:58:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` char(15) NOT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama`, `jenis_kelamin`, `tgl_lahir`, `agama`, `alamat`, `no_tlp`, `id_user`, `id_kelas`, `updated_at`, `created_at`) VALUES
(2002021, 'Ahmad Bahrul Ilmi', 'Laki-laki', '2002-09-10', 'Islam', 'Mojokerto', '087851088335', 'U02', 101, '2023-06-02 10:00:04', '2023-06-02 10:00:04'),
(2002022, 'Ahmad Rasyid Habibi', 'Laki-laki', '2002-08-22', 'Islam', 'Mojokerto', '088125678666', NULL, 101, '2023-06-02 10:00:58', '2023-06-02 10:00:58'),
(2002023, 'Mohammad Akbar Ilham', 'Laki-laki', '2002-03-02', 'Islam', 'Mojokerto', '087856432575', NULL, 101, '2023-06-02 10:02:48', '2023-06-02 10:02:48'),
(2002024, 'Khairani Nurul Ummah', 'Perempuan', '2002-06-04', 'Islam', 'Mojokerto', '086846579796', NULL, 101, '2023-06-02 10:01:51', '2023-06-02 10:01:51'),
(2002025, 'Dimas Rizky Pratama', 'Laki-laki', '2002-07-06', 'Islam', 'Jombang', '087839320121', NULL, 101, '2023-06-02 10:03:36', '2023-06-02 10:03:36'),
(2002026, 'Yogi Ainur Rofiq', 'Laki-laki', '2003-07-03', 'Islam', 'Mojokerto', '089562782939', NULL, 101, '2023-06-02 10:04:48', '2023-06-02 10:04:48'),
(2002027, 'Ridho Arif Wicaksono', 'Laki-laki', '2002-03-20', 'Islam', 'Jombang', '087562829819', NULL, 101, '2023-06-02 10:05:39', '2023-06-02 10:05:39'),
(2002028, 'Rofiqotus Solikhah', 'Perempuan', '2002-04-12', 'Islam', 'Mojokerto', '086745325678', NULL, 101, '2023-06-02 10:06:48', '2023-06-02 10:06:48'),
(2002029, 'Arika Nur Aliya', 'Perempuan', '2002-03-12', 'Islam', 'Jombang', '086742516292', NULL, 101, '2023-06-02 10:07:43', '2023-06-02 10:07:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tahun_ajaran`
--

CREATE TABLE `tb_tahun_ajaran` (
  `tahun` year(4) NOT NULL,
  `id_mapel` varchar(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_tahun_ajaran`
--

INSERT INTO `tb_tahun_ajaran` (`tahun`, `id_mapel`, `updated_at`, `created_at`) VALUES
(2023, NULL, '2023-05-05 23:58:20', '2023-05-05 23:58:20'),
(2023, NULL, '2023-05-06 00:02:16', '2023-05-06 00:02:16'),
(2022, NULL, '2023-05-06 01:01:15', '2023-05-06 01:01:15'),
(2030, NULL, '2023-05-07 01:30:26', '2023-05-07 01:30:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `password`, `role`, `username`) VALUES
('U01', '$2y$10$nsjipnnM.yHoBsgkJoKP4uLrLVRrT9LPHNRRiFXb2.joHMqhPZJcG', 'admin', 'Admin'),
('U02', '$2y$10$N2F4/kwdd1blPJeqs/8pD.voG4DjSncNJLhwO5qmXoltg.tnb1kw6', 'siswa', 'Bahrul'),
('U03', '$2y$10$TosXOM/mfV8ZX9dInKf7M.lJC1sIRhC2mBd18Qz/zEb3zOObCr842', 'guru', 'Guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wali_murid`
--

CREATE TABLE `tb_wali_murid` (
  `id_wali` bigint(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `no_telp` char(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_wali_murid`
--

INSERT INTO `tb_wali_murid` (`id_wali`, `nama`, `no_telp`, `alamat`, `id_siswa`, `updated_at`, `created_at`) VALUES
(121, 'Sunyoto', '086755648878', 'Mojokerto', 2002021, '2023-06-02 10:09:20', '2023-06-02 10:09:20'),
(122, 'Hariono', '086742628193', 'Mojokerto', 2002022, '2023-06-02 10:09:46', '2023-06-02 10:09:46'),
(123, 'Hartono Mulyadi', '086729381023', 'Mojokerto', 2002023, '2023-06-03 06:11:17', '2023-06-02 10:10:11'),
(124, 'Eka Wahyuningsih', '097856543668', 'Mojokerto', 2002024, '2023-06-02 10:11:39', '2023-06-02 10:11:39'),
(125, 'Pratiwi', '098855689486', 'Jombang', 2002025, '2023-06-02 10:12:12', '2023-06-02 10:12:12'),
(126, 'Indah', '086746479743', 'Mojokerto', 2002026, '2023-06-02 10:12:45', '2023-06-02 10:12:45'),
(127, 'Eva Auliya', '089643683791', 'Jombang', 2002027, '2023-06-02 10:13:47', '2023-06-02 10:13:47'),
(128, 'Subadi', '086464368685', 'Jombang', 2002028, '2023-06-02 10:14:23', '2023-06-02 10:14:23'),
(129, 'Agus Pranoto', '098646462786', 'Jombang', 2002029, '2023-06-02 10:15:12', '2023-06-02 10:15:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_ekstrakulikuler`
--
ALTER TABLE `tb_ekstrakulikuler`
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `tb_siswa_ibfk_1` (`id_user`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_wali_murid`
--
ALTER TABLE `tb_wali_murid`
  ADD PRIMARY KEY (`id_wali`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD CONSTRAINT `tb_admin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_ekstrakulikuler`
--
ALTER TABLE `tb_ekstrakulikuler`
  ADD CONSTRAINT `tb_ekstrakulikuler_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `tb_guru_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `tb_jadwal_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jadwal_ibfk_3` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jadwal_ibfk_4` FOREIGN KEY (`id_mapel`) REFERENCES `tb_mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD CONSTRAINT `tb_kelas_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD CONSTRAINT `tb_nilai_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `tb_guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_ibfk_4` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_ibfk_5` FOREIGN KEY (`id_mapel`) REFERENCES `tb_mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_wali_murid`
--
ALTER TABLE `tb_wali_murid`
  ADD CONSTRAINT `tb_wali_murid_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

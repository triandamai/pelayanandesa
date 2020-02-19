-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Feb 2020 pada 00.13
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_layanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(15) NOT NULL,
  `nama_lengkap` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Bapak/Ibu Petugas Balai Desa', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_akta`
--

CREATE TABLE `tbl_akta` (
  `id_akta` int(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jenis_kel` varchar(10) NOT NULL,
  `tmp_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `keperluan` varchar(40) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_akta`
--

INSERT INTO `tbl_akta` (`id_akta`, `nama`, `nik`, `jenis_kel`, `tmp_lahir`, `tgl_lahir`, `agama`, `pekerjaan`, `alamat`, `keperluan`, `keterangan`) VALUES
(1, 'Hanif', 'Jambu', '23', '999', '0000-00-00', 'Syahrul', 'Pemalang', '22', '888', 'Manajer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_belum_nikah`
--

CREATE TABLE `tbl_belum_nikah` (
  `id_belum_nikah` int(12) NOT NULL,
  `id_kk` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_belum_nikah`
--

INSERT INTO `tbl_belum_nikah` (`id_belum_nikah`, `id_kk`) VALUES
(11, 9999),
(10, 0),
(12, 9999);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id_data` int(6) NOT NULL,
  `nik` int(16) NOT NULL,
  `nkk` int(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kel` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(3) NOT NULL,
  `tmp_lahir` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_rt` int(3) NOT NULL,
  `no_rw` int(3) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `shdk` varchar(20) NOT NULL,
  `status_kawin` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `akta_lahir` varchar(10) NOT NULL,
  `no_akta_lahir` int(40) NOT NULL,
  `akta_kawin` varchar(10) NOT NULL,
  `no_akta_kawin` int(40) NOT NULL,
  `akta_cerai` varchar(10) NOT NULL,
  `no_akta_cerai` int(40) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_data`
--

INSERT INTO `tbl_data` (`id_data`, `nik`, `nkk`, `nama`, `jenis_kel`, `tgl_lahir`, `umur`, `tmp_lahir`, `alamat`, `no_rt`, `no_rw`, `kelurahan`, `shdk`, `status_kawin`, `pendidikan`, `agama`, `pekerjaan`, `gol_darah`, `akta_lahir`, `no_akta_lahir`, `akta_kawin`, `no_akta_kawin`, `akta_cerai`, `no_akta_cerai`, `nama_ayah`, `nama_ibu`) VALUES
(1, 0, 8907988, 'Alucard', 'Laki-laki', '2020-01-01', 18, 'Ajibarang', 'Banyumas', 5, 8, 'Lumbir', 'jhkj', 'Sudah-Kawin', 'SD', 'kristen', 'Karyawan Perusahaan', 'AB', 'hjk', 0, 'bbhj', 0, 'hb jh', 0, 'bbh', 'buib'),
(2, 2, 8907988, 'njbn', 'Perempuan', '0000-00-00', 0, '', '', 0, 0, '', '', 'pilih', '', 'pilih', '', '', '', 0, '', 0, '', 0, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_domisili`
--

CREATE TABLE `tbl_domisili` (
  `id_domisili` int(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jenis_kel` varchar(10) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hajatan`
--

CREATE TABLE `tbl_hajatan` (
  `id_hajatan` int(12) NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nik` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `jenis_kel` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pekerjaan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `keperluan` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `keterangan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `masa_berlaku` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_hajatan`
--

INSERT INTO `tbl_hajatan` (`id_hajatan`, `nama`, `nik`, `jenis_kel`, `tmp_lahir`, `tgl_lahir`, `agama`, `pekerjaan`, `alamat`, `keperluan`, `keterangan`, `masa_berlaku`) VALUES
(467, 'Hayabusa', '9999', 'Laki-laki', 'Banyumas', '2019-12-12', 'buddha', 'Pelajar', 'Jakarta', 'mengadakan hajatan', 'Sunatan', '2019-12-28'),
(465, 'Zilong', '88899988', 'Laki-laki', 'Banyumas', '2019-12-04', 'Islam', 'Karyawan Perusahaan', 'Pekuncen', ' mengadakan hajatan', ' pernikahan', '2019-12-28'),
(466, 'Gatotkaca', '000000000', 'Laki-laki', 'Pekuncen', '2019-12-05', 'kristen', 'Pengangguran', 'Banyumas', 'mengadakan hajatan', 'Sunatan', '2019-12-21'),
(468, ' Abi ', '000000000', 'Perempuan', 'Banyumas', '2019-12-06', 'Islam', 'Pelajar', 'Wangon', ' mengadakan hajatan', ' Sunatan', '2019-12-21'),
(469, '', '330201451219870005', 'pilih', '', '0000-00-00', 'pilih', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hiburan`
--

CREATE TABLE `tbl_hiburan` (
  `id_hiburan` int(12) NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nik` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `kewarganegaraan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `pekerjaan` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `acara` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `hiburan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tgl_hiburan` date NOT NULL,
  `tmp_acara` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_hiburan`
--

INSERT INTO `tbl_hiburan` (`id_hiburan`, `nama`, `nik`, `tmp_lahir`, `tgl_lahir`, `agama`, `kewarganegaraan`, `pekerjaan`, `alamat`, `acara`, `hiburan`, `tgl_hiburan`, `tmp_acara`) VALUES
(11, 'Alucard', '123456', 'Banyumas', '2019-02-03', 'kristen', 'Indonesia', 'Pengangguran', 'Wangon', 'Lomba Gaming', 'Ebeg', '2019-01-01', 'Lapangan'),
(12, ' Clint', '000000000', 'Ajibarang', '2019-12-12', 'buddha', 'Indonesia', 'Pelajar', 'Pekuncen', ' Lomba Gaming', ' Ebeg', '2019-12-28', ' Lapangan'),
(13, 'Layla', '123456', 'Pekuncen', '2019-12-04', 'Islam', 'Indonesia', 'Bekerja di Bank', 'Wangon', 'Lomba Gaming', 'Ebeg', '2019-12-24', 'Lapangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kehilangan`
--

CREATE TABLE `tbl_kehilangan` (
  `id_kehilangan` int(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jenis_kel` varchar(12) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `keperluan` varchar(40) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kematian`
--

CREATE TABLE `tbl_kematian` (
  `id_kematian` int(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kel` varchar(10) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `tgl_mati` date NOT NULL,
  `tmp_mati` varchar(30) NOT NULL,
  `sebab_mati` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kk`
--

CREATE TABLE `tbl_kk` (
  `id_kk` int(6) NOT NULL,
  `nokk` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kel` varchar(10) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `status` varchar(15) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `keperluan` varchar(40) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kk`
--

INSERT INTO `tbl_kk` (`id_kk`, `nokk`, `nama`, `jenis_kel`, `tmp_lahir`, `tgl_lahir`, `nik`, `status`, `agama`, `pekerjaan`, `alamat`, `keperluan`, `keterangan`) VALUES
(1, '2345', 'Trian Damai', 'LAKI-LAKI', 'Purbalingga', '2020-02-19', '1234564212345', 'aktif', 'Islam', 'Programmer', 'adsfgerafgfewdwfd', 'fdgfghfew', 'dfdgmhgfd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nikah`
--

CREATE TABLE `tbl_nikah` (
  `id_nikah` int(6) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis_kel` varchar(10) NOT NULL,
  `tmp_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `bin_binti` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pasangan_terdahulu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nikah`
--

INSERT INTO `tbl_nikah` (`id_nikah`, `nama`, `jenis_kel`, `tmp_lahir`, `tgl_lahir`, `kewarganegaraan`, `agama`, `pekerjaan`, `alamat`, `bin_binti`, `status`, `pasangan_terdahulu`) VALUES
(1, ' Seng', 'Perempuan', ' Ajibarang', '2019-12-06', ' Indonesia', 'Hindu', ' Bekerja di Bank', ' Banyumas', ' Sukidi', 'Janda/Duda', ' Tidak ada'),
(2, 'Dino Purnomo', 'Laki-laki', 'Banyumas', '2019-12-27', 'Indonesia', 'Islam', 'Pelajar', 'Banyumas', 'Tukiyem', 'Perawan/Perjaka', 'Reni'),
(3, 'Rizki Subekti', 'Laki-laki', '', '2019-12-04', 'Indonesia', 'buddha', 'Pelajar', 'Wangon', 'Simad', 'Janda/Duda', 'Tidak ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `id_pengunjung` int(12) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_telpon` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`id_pengunjung`, `username`, `password`, `nama_lengkap`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `agama`, `no_telpon`) VALUES
(5, 'nasri', 'nasri', 'nasri', '2017-11-06', 'Laki-laki', 'lubeg', 'Islam', '0556746'),
(1, 'sopi', 'sopi', 'sopi sapriadi', '2017-08-07', 'Laki-laki', 'padang', 'Islam', '0987654321'),
(6, 'anwar', '12345', 'Anwar', '2018-05-28', 'Laki-laki', 'Padang', 'Islam', '082170214455');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pindah`
--

CREATE TABLE `tbl_pindah` (
  `id_pindah` int(6) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `nik` int(16) NOT NULL,
  `nkk` int(16) NOT NULL,
  `nama_kepkel` varchar(30) NOT NULL,
  `alamat_asal` varchar(40) NOT NULL,
  `alamat_tuju` varchar(40) NOT NULL,
  `jumlah_anggota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_skck`
--

CREATE TABLE `tbl_skck` (
  `id_skck` int(12) NOT NULL,
  `id_kk` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_skck`
--

INSERT INTO `tbl_skck` (`id_skck`, `id_kk`) VALUES
(239, 0),
(240, 9999),
(241, 9999);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sktm`
--

CREATE TABLE `tbl_sktm` (
  `id_sktm` int(12) NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `nik` varchar(16) COLLATE latin1_general_ci NOT NULL,
  `tmp_lahir` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kewarganegaraan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `pekerjaan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `keperluan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `keterangan` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_sktm`
--

INSERT INTO `tbl_sktm` (`id_sktm`, `nama`, `nik`, `tmp_lahir`, `tgl_lahir`, `kewarganegaraan`, `agama`, `pekerjaan`, `alamat`, `keperluan`, `keterangan`) VALUES
(8, ' Layla', ' 9999', ' Banyumas', '2019-12-05', ' Indonesia', '', ' Pengangguran', ' Banyumas', 'Mengajukan surat keterangan tidak mampu', 'Bahwa yang bersangkutan benar benar tidak mampu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sktm_sekolah`
--

CREATE TABLE `tbl_sktm_sekolah` (
  `id_sktm_sekolah` int(12) NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `nis` int(20) NOT NULL,
  `nama_sekolah` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_sekolah` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `alamat_rumah` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `nama_ayah` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama_ibu` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `alamat_ortu` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `pekerjaan_ortu` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `penghasilan_ortu` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `jumlah_tanggung` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_usaha`
--

CREATE TABLE `tbl_usaha` (
  `id_usaha` int(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kel` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jenis_usaha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_akta`
--
ALTER TABLE `tbl_akta`
  ADD PRIMARY KEY (`id_akta`);

--
-- Indeks untuk tabel `tbl_belum_nikah`
--
ALTER TABLE `tbl_belum_nikah`
  ADD PRIMARY KEY (`id_belum_nikah`);

--
-- Indeks untuk tabel `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indeks untuk tabel `tbl_domisili`
--
ALTER TABLE `tbl_domisili`
  ADD PRIMARY KEY (`id_domisili`);

--
-- Indeks untuk tabel `tbl_hajatan`
--
ALTER TABLE `tbl_hajatan`
  ADD PRIMARY KEY (`id_hajatan`);

--
-- Indeks untuk tabel `tbl_hiburan`
--
ALTER TABLE `tbl_hiburan`
  ADD PRIMARY KEY (`id_hiburan`);

--
-- Indeks untuk tabel `tbl_kehilangan`
--
ALTER TABLE `tbl_kehilangan`
  ADD PRIMARY KEY (`id_kehilangan`);

--
-- Indeks untuk tabel `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indeks untuk tabel `tbl_kk`
--
ALTER TABLE `tbl_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indeks untuk tabel `tbl_nikah`
--
ALTER TABLE `tbl_nikah`
  ADD PRIMARY KEY (`id_nikah`);

--
-- Indeks untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indeks untuk tabel `tbl_pindah`
--
ALTER TABLE `tbl_pindah`
  ADD PRIMARY KEY (`id_pindah`);

--
-- Indeks untuk tabel `tbl_skck`
--
ALTER TABLE `tbl_skck`
  ADD PRIMARY KEY (`id_skck`);

--
-- Indeks untuk tabel `tbl_sktm`
--
ALTER TABLE `tbl_sktm`
  ADD PRIMARY KEY (`id_sktm`);

--
-- Indeks untuk tabel `tbl_sktm_sekolah`
--
ALTER TABLE `tbl_sktm_sekolah`
  ADD PRIMARY KEY (`id_sktm_sekolah`);

--
-- Indeks untuk tabel `tbl_usaha`
--
ALTER TABLE `tbl_usaha`
  ADD PRIMARY KEY (`id_usaha`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_akta`
--
ALTER TABLE `tbl_akta`
  MODIFY `id_akta` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_belum_nikah`
--
ALTER TABLE `tbl_belum_nikah`
  MODIFY `id_belum_nikah` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id_data` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_domisili`
--
ALTER TABLE `tbl_domisili`
  MODIFY `id_domisili` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_hajatan`
--
ALTER TABLE `tbl_hajatan`
  MODIFY `id_hajatan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=470;

--
-- AUTO_INCREMENT untuk tabel `tbl_hiburan`
--
ALTER TABLE `tbl_hiburan`
  MODIFY `id_hiburan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_kehilangan`
--
ALTER TABLE `tbl_kehilangan`
  MODIFY `id_kehilangan` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  MODIFY `id_kematian` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_kk`
--
ALTER TABLE `tbl_kk`
  MODIFY `id_kk` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_nikah`
--
ALTER TABLE `tbl_nikah`
  MODIFY `id_nikah` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `id_pengunjung` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_pindah`
--
ALTER TABLE `tbl_pindah`
  MODIFY `id_pindah` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_skck`
--
ALTER TABLE `tbl_skck`
  MODIFY `id_skck` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT untuk tabel `tbl_sktm`
--
ALTER TABLE `tbl_sktm`
  MODIFY `id_sktm` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_sktm_sekolah`
--
ALTER TABLE `tbl_sktm_sekolah`
  MODIFY `id_sktm_sekolah` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_usaha`
--
ALTER TABLE `tbl_usaha`
  MODIFY `id_usaha` int(6) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

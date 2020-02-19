-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jan 2020 pada 09.04
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'Mediatama Web', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_belumpernahmenikah`
--

CREATE TABLE `tbl_belumpernahmenikah` (
  `id_belumpernahmenikah` int(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_belumpernahmenikah`
--

INSERT INTO `tbl_belumpernahmenikah` (`id_belumpernahmenikah`, `nama`, `nik`, `jenis_kelamin`, `tmp_lahir`, `tgl_lahir`, `kewarganegaraan`, `agama`, `pekerjaan`, `alamat`) VALUES
(2, '  Abbi Rokhman', '  222', 'Laki-laki', '  Banyumas', '2006-12-12', '  Indonesia', 'Islam', '  Pelajar', '  Lumbir'),
(3, '  Abbi Rokhman', '  222', 'Laki-laki', '  Banyumas', '2006-12-12', '  Indonesia', 'Islam', '  Pelajar', '  Lumbir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_domisili`
--

CREATE TABLE `tbl_domisili` (
  `id_domisili` int(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_domisili`
--

INSERT INTO `tbl_domisili` (`id_domisili`, `nama`, `nik`, `jenis_kelamin`, `tmp_lahir`, `tgl_lahir`, `agama`, `kewarganegaraan`, `pekerjaan`, `alamat`) VALUES
(2, ' i Rokhman', '  33020102029800', 'Laki-laki', '  Banyumas', '2019-11-23', 'Hindu', '  Indonesia', '  Pelajar', '  Lumbir'),
(3, ' i Rokhman', '  33020102029800', 'Laki-laki', '  Banyumas', '2019-11-23', 'Hindu', '  Indonesia', '  Pelajar', '  Lumbir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ijin_keramaian`
--

CREATE TABLE `tbl_ijin_keramaian` (
  `id_ijin_keramaian` int(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `acara` varchar(30) NOT NULL,
  `hiburan` varchar(20) NOT NULL,
  `tgl_keramaian` date NOT NULL,
  `tmp_acara` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ijin_keramaian`
--

INSERT INTO `tbl_ijin_keramaian` (`id_ijin_keramaian`, `nama`, `nik`, `tmp_lahir`, `tgl_lahir`, `agama`, `kewarganegaraan`, `pekerjaan`, `alamat`, `acara`, `hiburan`, `tgl_keramaian`, `tmp_acara`) VALUES
(2, ' Khoirul Abbi Rokhman', ' 330201020298000', ' Banyumas', '2019-11-22', 'Islam', ' ', ' Pelajar', ' Lumbir', ' hajatan', ' dangdut', '2019-11-26', ' lum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ijin_khajatan`
--

CREATE TABLE `tbl_ijin_khajatan` (
  `id_ijin_khajatan` int(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `masa_berlaku` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ijin_khajatan`
--

INSERT INTO `tbl_ijin_khajatan` (`id_ijin_khajatan`, `nama`, `nik`, `jenis_kelamin`, `tmp_lahir`, `tgl_lahir`, `agama`, `pekerjaan`, `alamat`, `keperluan`, `keterangan`, `masa_berlaku`) VALUES
(3, '  Khoirul Abbi ', '  33020148019800', 'Perempuan', '  bmg', '0000-00-00', 'Islam', '  Pelajar', '  Lumbir', '  -', '  s', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kehilangan`
--

CREATE TABLE `tbl_kehilangan` (
  `id_kehilangan` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kehilangan`
--

INSERT INTO `tbl_kehilangan` (`id_kehilangan`, `nama`, `nik`, `tmp_lahir`, `tgl_lahir`, `jenis_kelamin`, `pekerjaan`, `agama`, `alamat`, `keperluan`, `keterangan`) VALUES
(2, 'Khoirul Abbi Rokhman', '12', '', '0000-00-00', 'pilih', '', 'pilih', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelahiran`
--

CREATE TABLE `tbl_kelahiran` (
  `id_kelahiran` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelahiran`
--

INSERT INTO `tbl_kelahiran` (`id_kelahiran`, `nama`, `nik`, `jenis_kelamin`, `tmp_lahir`, `tgl_lahir`, `agama`, `pekerjaan`, `alamat`, `keperluan`, `keterangan`) VALUES
(3, ' Khoirul Abbi Rokhman', ' 330201480198000', 'Laki-laki', 'BMS', '0000-00-00', 'Islam', ' Pelajar', ' Lumbir', ' -', ' -');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kematian`
--

CREATE TABLE `tbl_kematian` (
  `id_kematian` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_meninggal` date NOT NULL,
  `tmp_kematian` varchar(20) NOT NULL,
  `sebab_kematian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kematian`
--

INSERT INTO `tbl_kematian` (`id_kematian`, `nama`, `nik`, `tmp_lahir`, `tgl_lahir`, `jenis_kelamin`, `pekerjaan`, `kewarganegaraan`, `agama`, `alamat`, `tgl_meninggal`, `tmp_kematian`, `sebab_kematian`) VALUES
(2, 'nadia raihana sofi', '3302010202980001', 'Banyumas', '2019-11-13', 'Perempuan', 'Pelajar', 'Indonesia', 'Islam', 'Lumbir', '2019-11-28', 'lumbir', 'sakit'),
(3, '', '', '', '0000-00-00', 'pilih', '', '', 'pilih', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menikah`
--

CREATE TABLE `tbl_menikah` (
  `id_menikah` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `bin_binti` varchar(20) NOT NULL,
  `stts_perkawinan` varchar(20) NOT NULL,
  `nm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menikah`
--

INSERT INTO `tbl_menikah` (`id_menikah`, `nama`, `jenis_kelamin`, `tmp_lahir`, `tgl_lahir`, `kewarganegaraan`, `agama`, `pekerjaan`, `alamat`, `bin_binti`, `stts_perkawinan`, `nm`) VALUES
(1, ' Khoirul Abbi', 'Laki-laki', ' Banyumas', '0000-00-00', ' Indonesia', 'Islam', ' Pelajar', ' Lumbir', ' d', 'duda', ' -');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemohon_kk`
--

CREATE TABLE `tbl_pemohon_kk` (
  `id_pemohon_kk` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pemohon_kk`
--

INSERT INTO `tbl_pemohon_kk` (`id_pemohon_kk`, `nama`, `jenis_kelamin`, `tmp_lahir`, `tgl_lahir`, `nik`, `status_perkawinan`, `agama`, `pekerjaan`, `alamat`, `keperluan`, `keterangan`) VALUES
(1, 'Khoirul Abbi Rokhman', 'Laki-laki', 'Banyumas', '2019-10-27', '3302010202980001', 'Belum Kawin', 'Islam', '-', 'Lumbir', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pindah_penduduk`
--

CREATE TABLE `tbl_pindah_penduduk` (
  `id_pindah_penduduk` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nama_kepala_keluarga` varchar(20) NOT NULL,
  `alamat_sekarang` varchar(50) NOT NULL,
  `alamat_pindah` varchar(50) NOT NULL,
  `jml_anggota_pindah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pindah_penduduk`
--

INSERT INTO `tbl_pindah_penduduk` (`id_pindah_penduduk`, `nama`, `nik`, `no_kk`, `nama_kepala_keluarga`, `alamat_sekarang`, `alamat_pindah`, `jml_anggota_pindah`) VALUES
(1, 'Khoirul Abbi Rokhman', '3302014801980002', '3302010708720005', 'daryono', ' lumbir', 'wangon', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_skck`
--

CREATE TABLE `tbl_skck` (
  `id_skck` int(12) NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `nik` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status_perkawinan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `kewarganegaraan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pekerjaan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_skck`
--

INSERT INTO `tbl_skck` (`id_skck`, `nama`, `nik`, `jenis_kelamin`, `tmp_lahir`, `tgl_lahir`, `status_perkawinan`, `kewarganegaraan`, `agama`, `pekerjaan`, `alamat`) VALUES
(242, '    Khoirul Abbi ', '    3302010202980001', 'Laki-laki', '    Banyumas', '0000-00-00', 'pilih', '    Indonesia', 'Islam', '    Pelajar', '    Lumbir'),
(240, '   Khoirul Abbi Rokhman', '   3302010202980001', 'Laki-laki', '   Banyumas', '0022-02-12', 'Belum Kawin', '   Indonesia', 'Islam', '   Pelajar', '   Lumbir'),
(239, '   Khoirul Abbi Rokhman', '   3302010202980001', 'Laki-laki', '   Banyumas', '0022-02-12', 'Belum Kawin', '   Indonesia', 'Islam', '   Pelajar', '   Lumbir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sktm`
--

CREATE TABLE `tbl_sktm` (
  `id_sktm` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `keperluan` varchar(60) NOT NULL,
  `keterangan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sktm`
--

INSERT INTO `tbl_sktm` (`id_sktm`, `nama`, `nik`, `tmp_lahir`, `tgl_lahir`, `kewarganegaraan`, `agama`, `pekerjaan`, `alamat`, `keperluan`, `keterangan`) VALUES
(1, 'Khoirul Abbi Rokhman', '3302010202980001', 'Banyumas', '1998-02-02', 'Indonesia', 'Islam', 'Pelajar', 'Lumbir', 'Mengajukan Permohonan Bantuan Pendidikan untuk anaknya berna', 'Tersebut benar Penduduk desa Lumbir dan keadaan ekonominya k');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sktm_sekolah`
--

CREATE TABLE `tbl_sktm_sekolah` (
  `id_sktm_sekolah` int(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nis` varchar(16) NOT NULL,
  `nama_sekolah` varchar(20) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_sekolah` varchar(30) NOT NULL,
  `alamat_rumah` varchar(30) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `alamat_orang_tua` varchar(30) NOT NULL,
  `pekerjaan_orang_tua` varchar(30) NOT NULL,
  `penghasilan_orang_tua` varchar(30) NOT NULL,
  `jumlah_tanggungan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sktm_sekolah`
--

INSERT INTO `tbl_sktm_sekolah` (`id_sktm_sekolah`, `nama`, `nis`, `nama_sekolah`, `tmp_lahir`, `tgl_lahir`, `alamat_sekolah`, `alamat_rumah`, `nama_ayah`, `nama_ibu`, `alamat_orang_tua`, `pekerjaan_orang_tua`, `penghasilan_orang_tua`, `jumlah_tanggungan`) VALUES
(1, 'Khoirul Abbi Rokhman', '16.12.0079', 'sma n wangon', 'Banyumas', '1998-02-02', 'wangon', 'lumbir', 'daryono', 'yanti', 'lumbir', '-', 'rp', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_usaha`
--

CREATE TABLE `tbl_usaha` (
  `id_usaha` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jenis_usaha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_usaha`
--

INSERT INTO `tbl_usaha` (`id_usaha`, `nama`, `tmp_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `pekerjaan`, `alamat`, `jenis_usaha`) VALUES
(3, 'Khoirul Abbi Rokhman', 'Banyumas', '2019-11-19', 'Perempuan', 'Islam', '-', 'Lumbir', 'dagang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_belumpernahmenikah`
--
ALTER TABLE `tbl_belumpernahmenikah`
  ADD PRIMARY KEY (`id_belumpernahmenikah`);

--
-- Indexes for table `tbl_domisili`
--
ALTER TABLE `tbl_domisili`
  ADD PRIMARY KEY (`id_domisili`);

--
-- Indexes for table `tbl_ijin_keramaian`
--
ALTER TABLE `tbl_ijin_keramaian`
  ADD PRIMARY KEY (`id_ijin_keramaian`);

--
-- Indexes for table `tbl_ijin_khajatan`
--
ALTER TABLE `tbl_ijin_khajatan`
  ADD PRIMARY KEY (`id_ijin_khajatan`);

--
-- Indexes for table `tbl_kehilangan`
--
ALTER TABLE `tbl_kehilangan`
  ADD PRIMARY KEY (`id_kehilangan`);

--
-- Indexes for table `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`);

--
-- Indexes for table `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indexes for table `tbl_menikah`
--
ALTER TABLE `tbl_menikah`
  ADD PRIMARY KEY (`id_menikah`);

--
-- Indexes for table `tbl_pemohon_kk`
--
ALTER TABLE `tbl_pemohon_kk`
  ADD PRIMARY KEY (`id_pemohon_kk`);

--
-- Indexes for table `tbl_pindah_penduduk`
--
ALTER TABLE `tbl_pindah_penduduk`
  ADD PRIMARY KEY (`id_pindah_penduduk`);

--
-- Indexes for table `tbl_skck`
--
ALTER TABLE `tbl_skck`
  ADD PRIMARY KEY (`id_skck`);

--
-- Indexes for table `tbl_sktm`
--
ALTER TABLE `tbl_sktm`
  ADD PRIMARY KEY (`id_sktm`);

--
-- Indexes for table `tbl_sktm_sekolah`
--
ALTER TABLE `tbl_sktm_sekolah`
  ADD PRIMARY KEY (`id_sktm_sekolah`);

--
-- Indexes for table `tbl_usaha`
--
ALTER TABLE `tbl_usaha`
  ADD PRIMARY KEY (`id_usaha`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_belumpernahmenikah`
--
ALTER TABLE `tbl_belumpernahmenikah`
  MODIFY `id_belumpernahmenikah` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_domisili`
--
ALTER TABLE `tbl_domisili`
  MODIFY `id_domisili` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_ijin_keramaian`
--
ALTER TABLE `tbl_ijin_keramaian`
  MODIFY `id_ijin_keramaian` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_ijin_khajatan`
--
ALTER TABLE `tbl_ijin_khajatan`
  MODIFY `id_ijin_khajatan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_kehilangan`
--
ALTER TABLE `tbl_kehilangan`
  MODIFY `id_kehilangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  MODIFY `id_kelahiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  MODIFY `id_kematian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_menikah`
--
ALTER TABLE `tbl_menikah`
  MODIFY `id_menikah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_pemohon_kk`
--
ALTER TABLE `tbl_pemohon_kk`
  MODIFY `id_pemohon_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_pindah_penduduk`
--
ALTER TABLE `tbl_pindah_penduduk`
  MODIFY `id_pindah_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_skck`
--
ALTER TABLE `tbl_skck`
  MODIFY `id_skck` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;
--
-- AUTO_INCREMENT for table `tbl_sktm`
--
ALTER TABLE `tbl_sktm`
  MODIFY `id_sktm` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_sktm_sekolah`
--
ALTER TABLE `tbl_sktm_sekolah`
  MODIFY `id_sktm_sekolah` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_usaha`
--
ALTER TABLE `tbl_usaha`
  MODIFY `id_usaha` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

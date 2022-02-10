-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2020 pada 14.56
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratorium`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dokter`
--

CREATE TABLE `data_dokter` (
  `kode_dokter` varchar(5) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `alamat_dokter` varchar(25) NOT NULL,
  `no_telpon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_dokter`
--

INSERT INTO `data_dokter` (`kode_dokter`, `nama_dokter`, `alamat_dokter`, `no_telpon`) VALUES
('DK001', 'Prof. Dr. Abdul Muthalib, Sp. ', 'Jalan Setiabudi', '08211876456'),
('DK002', 'Prof. Dr. dr. Aru Wisaksono Sudoyo, Sp.PD-KHOM., F', 'Jalan Ir.H Djuanda', '08211742237'),
('DK003', 'Dr. Ikhwan Rinaldi, Sp.PD-KHOM', '', ''),
('DK005', 'dr. Dody Ranuhardy, Sp.PD-KHOM., FINASIM., MPH', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id_pasien` varchar(10) NOT NULL,
  `nama_pasien` varchar(25) NOT NULL,
  `tmptlahir_pasien` varchar(15) NOT NULL,
  `ttl_pasien` date NOT NULL,
  `alamat_pasien` varchar(30) NOT NULL,
  `gender_pasien` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pasien`
--

INSERT INTO `data_pasien` (`id_pasien`, `nama_pasien`, `tmptlahir_pasien`, `ttl_pasien`, `alamat_pasien`, `gender_pasien`) VALUES
('L202003002', 'Yanti Susilawanti', 'Bandung', '1990-03-01', 'Jalan PHH Mustofa', 'Perempuan'),
('L202003009', 'Travis', 'Los Angles', '1988-07-09', 'Los Angles Kidul', 'Laki - Laki'),
('L202003010', 'Tom Delonge', 'Chicago', '1989-09-08', 'Chicago kidul', 'Laki - Laki'),
('L202003011', 'Malik', 'Bandung', '2020-07-02', 'solokan', 'Laki - Laki'),
('L202003012', 'Roronoa Zoro', 'East Blue', '1998-06-17', 'Sunny Go', 'Laki - Laki'),
('L202003013', 'Fahra Arafahsah', 'Banglades', '0000-00-00', 'Taman indah banglades', 'Laki - Laki'),
('L202003014', 'Luvian Toembelaka', 'Bandung', '2020-06-30', 'Cimahi', 'Laki - Laki'),
('L202003015', 'Mia Hanifa', 'Tasik', '2020-07-02', 'dfghjgjjhgjkh', 'Perempuan'),
('L202003016', '', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `invoice` varchar(10) NOT NULL,
  `id_pasien` varchar(10) NOT NULL,
  `kode_pemeriksaan` varchar(30) NOT NULL,
  `hasil_pemeriksaan` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `file` varchar(150) NOT NULL,
  `total_harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`invoice`, `id_pasien`, `kode_pemeriksaan`, `hasil_pemeriksaan`, `keterangan`, `file`, `total_harga`) VALUES
('IV0707002', 'L202003002', '0002,0006', '13;4,8jt', 'Baik', 'Untitled.jpg', 'Rp. 40000'),
('IV0707003', 'L202003012', '0006,0007,0009,0010,0011', '5jt;45;B normal;normal;normal', 'Sehat', 'man-1.jpg', 'Rp. 355000'),
('IV0707004', 'L202003011', '0003,0004', '8000;normal', 'Sehat', '', 'Rp. 40000'),
('IV0707005', 'L202003013', '0005,0006,0007', '11;5jt;45', 'Sehat', 'ronsen otak.jpeg', 'Rp. 60000'),
('IV0707006', 'L202003010', '0001,0003,0005', 'normal;8000;13', 'Sehat', 'Foto-Rontgen-Gigi.jpg', 'Rp. 145000'),
('IV0707007', 'L202003014', '0002,0009,0011', '14;normal;normal', 'sehat', 'logo-itenas.png', 'Rp. 260000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `kode_pemeriksaan` varchar(4) NOT NULL,
  `nama_pemeriksaan` varchar(30) NOT NULL,
  `nilai_normal` varchar(30) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`kode_pemeriksaan`, `nama_pemeriksaan`, `nilai_normal`, `satuan`, `harga`) VALUES
('0001', 'Darah Lengkap', '', '', '105000'),
('0002', 'Hemogoblin Lengkap', 'P(13-17), W(12-15)', 'g/dL', '20000'),
('0003', 'Leukosit Lengkap', '5.000-10.000', 'mcL', '20000'),
('0004', 'Hitung Jenis Leukosit', '', '', '20000'),
('0005', 'Laju Endap Darah', '0-15', 'mm/jam', '20000'),
('0006', 'Eritrosit', 'P(4,7jt-6,1jt), W(4,2-5,4)', 'mikroliter', '20000'),
('0007', 'Hematokrit', '40 – 50 (P), 45 – 55 (L)', 'persen', '20000'),
('0008', 'Trombosit', '150.000-400.000', 'mikroliter', '20000'),
('0009', 'Golongan Darah + Rhesus', '', '', '40000'),
('0010', 'Mortofologi Darah Tepi', '', '', '75000'),
('0011', 'Agregat Trombosit', '', '', '200000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rawat_inap`
--

CREATE TABLE `rawat_inap` (
  `no_registrasi` varchar(10) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `dokter_umum` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `tgl_keluar` date NOT NULL,
  `jam_keluar` time NOT NULL,
  `pembayaran` varchar(15) NOT NULL,
  `id_pasien` varchar(10) NOT NULL,
  `kode_pemeriksaan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rawat_inap`
--

INSERT INTO `rawat_inap` (`no_registrasi`, `nama_dokter`, `dokter_umum`, `tgl_masuk`, `jam_masuk`, `tgl_keluar`, `jam_keluar`, `pembayaran`, `id_pasien`, `kode_pemeriksaan`) VALUES
('R202003002', 'Prof. Dr. Abdul Muthalib, Sp. ', '', '2020-07-09', '21:24:00', '2020-07-10', '21:24:00', 'Tunai', 'L202003011', '0003,0004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rawat_jalan`
--

CREATE TABLE `rawat_jalan` (
  `nomorbilling_rj` varchar(10) NOT NULL,
  `nama_dokter` varchar(25) NOT NULL,
  `dokter_umum` varchar(25) DEFAULT NULL,
  `tgl_masuk` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `pembayaran_rj` varchar(15) NOT NULL,
  `id_pasien` varchar(10) NOT NULL,
  `kode_pemeriksaan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rawat_jalan`
--

INSERT INTO `rawat_jalan` (`nomorbilling_rj`, `nama_dokter`, `dokter_umum`, `tgl_masuk`, `jam_masuk`, `pembayaran_rj`, `id_pasien`, `kode_pemeriksaan`) VALUES
('J202003002', 'Dr. Syafiq Muhammad', '', '2020-03-03', '13:00:00', 'on', 'L202003002', '0002,0006'),
('J202003003', 'Prof. Dr. Abdul Muthalib,', '', '2020-07-11', '06:26:00', 'Tunai', 'L202003012', '0006,0007,0009,0010,0011');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi_internal`
--

CREATE TABLE `registrasi_internal` (
  `no_pendaftaran` varchar(10) NOT NULL,
  `id_pasien` varchar(10) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `kode_pemeriksaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `registrasi_internal`
--

INSERT INTO `registrasi_internal` (`no_pendaftaran`, `id_pasien`, `tgl_masuk`, `jam_masuk`, `kode_pemeriksaan`) VALUES
('RG0707001', 'L202003009', '2020-07-09', '00:00:00', '0002,0004'),
('RG0707002', 'L202003010', '2020-07-09', '00:55:00', '0001,0003,0005'),
('RG0707003', 'L202003014', '2020-07-14', '10:39:00', '0002,0009,0011'),
('RG0707004', 'L202003015', '2020-07-15', '13:22:00', '0006');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rujukan`
--

CREATE TABLE `rujukan` (
  `no_rujukan` varchar(10) NOT NULL,
  `dokter_umum` varchar(50) NOT NULL,
  `nama_instansi` varchar(25) NOT NULL,
  `jenis_periksa` varchar(15) NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `jam_keluar` time DEFAULT NULL,
  `pembayaran` varchar(15) NOT NULL,
  `id_pasien` varchar(10) NOT NULL,
  `kode_pemeriksaan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rujukan`
--

INSERT INTO `rujukan` (`no_rujukan`, `dokter_umum`, `nama_instansi`, `jenis_periksa`, `tgl_masuk`, `jam_masuk`, `tgl_keluar`, `jam_keluar`, `pembayaran`, `id_pasien`, `kode_pemeriksaan`) VALUES
('K202003002', 'Dr. Syaqid Muhammad', 'RS Santosa', 'Rawat Jalan', '2020-07-11', '07:59:00', '2020-07-18', '19:59:00', 'Tunai', 'L202003013', '0005,0006,0007'),
('K202003003', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Tunai', 'L202003016', '0003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `no_telpon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `nama_user`, `email_user`, `no_telpon`) VALUES
('admin123', 'admin123', '', '', ''),
('admin1', 'admin1', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('admin', 'admin', 'Alfian', 'alfianichsanid@gmail.com', '082116669'),
('ikiw', 'ikiw', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_dokter`
--
ALTER TABLE `data_dokter`
  ADD PRIMARY KEY (`kode_dokter`);

--
-- Indeks untuk tabel `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`invoice`),
  ADD KEY `fk_pembayaran` (`id_pasien`);

--
-- Indeks untuk tabel `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`kode_pemeriksaan`);

--
-- Indeks untuk tabel `rawat_inap`
--
ALTER TABLE `rawat_inap`
  ADD PRIMARY KEY (`no_registrasi`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indeks untuk tabel `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  ADD PRIMARY KEY (`nomorbilling_rj`),
  ADD KEY `fk_rj_pasien` (`id_pasien`);

--
-- Indeks untuk tabel `registrasi_internal`
--
ALTER TABLE `registrasi_internal`
  ADD PRIMARY KEY (`no_pendaftaran`),
  ADD KEY `fk_regis_internal` (`id_pasien`);

--
-- Indeks untuk tabel `rujukan`
--
ALTER TABLE `rujukan`
  ADD PRIMARY KEY (`no_rujukan`),
  ADD KEY `fk_rjk_pasien` (`id_pasien`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_pembayaran` FOREIGN KEY (`id_pasien`) REFERENCES `data_pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rawat_inap`
--
ALTER TABLE `rawat_inap`
  ADD CONSTRAINT `fk_ri_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `data_pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  ADD CONSTRAINT `fk_rj_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `data_pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `registrasi_internal`
--
ALTER TABLE `registrasi_internal`
  ADD CONSTRAINT `fk_regis_internal` FOREIGN KEY (`id_pasien`) REFERENCES `data_pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rujukan`
--
ALTER TABLE `rujukan`
  ADD CONSTRAINT `fk_rjk_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `data_pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

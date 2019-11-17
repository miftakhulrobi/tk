-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Nov 2019 pada 12.58
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agamadanmoral`
--

CREATE TABLE `agamadanmoral` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `kemampuan_id` int(11) NOT NULL,
  `mb` int(11) DEFAULT NULL,
  `bb` int(11) DEFAULT NULL,
  `bsh` int(11) DEFAULT NULL,
  `bsb` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `apps`
--

CREATE TABLE `apps` (
  `app_id` int(11) NOT NULL,
  `appname` varchar(255) NOT NULL,
  `by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apps`
--

INSERT INTO `apps` (`app_id`, `appname`, `by`, `created_at`) VALUES
(1, 'TK Islam Miftaahul Jannah ', 'Kelompok 6 FTIk Jurusan TI Universitas Semarang', '2019-11-12 16:27:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahasa`
--

CREATE TABLE `bahasa` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `kemampuan_id` int(11) NOT NULL,
  `mb` int(11) DEFAULT NULL,
  `bb` int(11) DEFAULT NULL,
  `bsh` int(11) DEFAULT NULL,
  `bsb` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan`
--

CREATE TABLE `catatan` (
  `catatan_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `table` varchar(255) NOT NULL,
  `catatan` text NOT NULL,
  `penginput` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `classname` varchar(255) NOT NULL,
  `year_id` int(11) NOT NULL,
  `countsiswa` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstraagama`
--

CREATE TABLE `ekstraagama` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `b` int(11) DEFAULT NULL,
  `c` int(11) DEFAULT NULL,
  `k` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrabahasajawa`
--

CREATE TABLE `ekstrabahasajawa` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `b` int(11) DEFAULT NULL,
  `c` int(11) DEFAULT NULL,
  `k` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstradrumbband`
--

CREATE TABLE `ekstradrumbband` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `b` int(11) DEFAULT NULL,
  `c` int(11) DEFAULT NULL,
  `k` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstramenari`
--

CREATE TABLE `ekstramenari` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `b` int(11) DEFAULT NULL,
  `c` int(11) DEFAULT NULL,
  `k` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstramenggambar`
--

CREATE TABLE `ekstramenggambar` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `b` int(11) DEFAULT NULL,
  `c` int(11) DEFAULT NULL,
  `k` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kognitif`
--

CREATE TABLE `kognitif` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `kemampuan_id` int(11) NOT NULL,
  `mb` int(11) DEFAULT NULL,
  `bb` int(11) DEFAULT NULL,
  `bsh` int(11) DEFAULT NULL,
  `bsb` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `motorik`
--

CREATE TABLE `motorik` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `kemampuan_id` int(11) NOT NULL,
  `mb` int(11) DEFAULT NULL,
  `bb` int(11) DEFAULT NULL,
  `bsh` int(11) DEFAULT NULL,
  `bsb` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `seni`
--

CREATE TABLE `seni` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `kemampuan_id` int(11) NOT NULL,
  `mb` int(11) DEFAULT NULL,
  `bb` int(11) DEFAULT NULL,
  `bsh` int(11) DEFAULT NULL,
  `bsb` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `siswa_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `namasiswa` varchar(255) NOT NULL,
  `namapgln` varchar(255) NOT NULL,
  `noinduk` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `tgllahir` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `anakke` int(11) NOT NULL,
  `ayah` varchar(255) NOT NULL,
  `ibu` varchar(255) NOT NULL,
  `pekerjaanayah` varchar(255) NOT NULL,
  `pekerjaanibu` varchar(255) NOT NULL,
  `alamatortu` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosialemosional`
--

CREATE TABLE `sosialemosional` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `kemampuan_id` int(11) NOT NULL,
  `mb` int(11) DEFAULT NULL,
  `bb` int(11) DEFAULT NULL,
  `bsh` int(11) DEFAULT NULL,
  `bsb` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_agamadanmoral`
--

CREATE TABLE `t_agamadanmoral` (
  `kemampuan_id` int(11) NOT NULL,
  `kemampuan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_agamadanmoral`
--

INSERT INTO `t_agamadanmoral` (`kemampuan_id`, `kemampuan`, `created_at`) VALUES
(1, 'Mempercayai Tuhan melalui ciptaan Nya', '2019-11-15 05:50:26'),
(2, 'Menghargai diri sendiri, orang lain dan lingkungan sekitar sebagai rasa syukur kepada Tuhan', '2019-11-15 05:50:26'),
(3, 'Memiliki perilaku yang dapat menyesuaikan diri', '2019-11-15 05:50:26'),
(4, 'Memiliki perilaku yang mencerminkan sikap jujur', '2019-11-15 05:50:26'),
(5, 'Memiliki perilaku yang mencerminkan sikap santun kepada orang tua didik atau pengasuh dan teman', '2019-11-15 05:50:26'),
(6, 'Mengenal kegiatan beribadah sehari-hari', '2019-11-15 05:50:26'),
(7, 'Melakukan peribadatan sehari-hari dengan tuntunan orang dewasa', '2019-11-15 05:50:26'),
(8, 'Mengenal perilaku baik sebagai cerminan akhlaq mulia', '2019-11-15 05:50:26'),
(9, 'Menunjukan perilaku santun sebagai cerminan akhlaq mulia', '2019-11-15 05:50:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_bahasa`
--

CREATE TABLE `t_bahasa` (
  `kemampuan_id` int(11) NOT NULL,
  `kemampuan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_bahasa`
--

INSERT INTO `t_bahasa` (`kemampuan_id`, `kemampuan`, `created_at`) VALUES
(1, 'Memahami bahasa reseptif (menyimak dan membaca)', '2019-11-15 05:57:02'),
(2, 'Menunjukan kemampuan berbahasa reseptif (menyimak dan membaca)', '2019-11-15 05:57:02'),
(3, 'Memahami bahasa ekspresi (mengungkapkan bahasa secara verbal dan nonverbal)', '2019-11-15 05:57:02'),
(4, 'Menunjukan kemampuan berbahasa ekspresi (mengungkapkan bahasa secara verbal dan nonverbal)', '2019-11-15 05:57:02'),
(5, 'Mengenal keaksaraan awal melalui bermain', '2019-11-15 05:57:02'),
(6, 'Menunjukan kemampuan keaksaraan awal dalam berbagai bentuk karya', '2019-11-15 05:57:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_ekstraagama`
--

CREATE TABLE `t_ekstraagama` (
  `program_id` int(11) NOT NULL,
  `program` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_ekstraagama`
--

INSERT INTO `t_ekstraagama` (`program_id`, `program`, `created_at`) VALUES
(1, 'Hafalan surat pendek Alquran', '2019-11-15 07:12:01'),
(2, 'Hafalan hadist', '2019-11-15 07:12:01'),
(3, 'Hafalan doa harian', '2019-11-15 07:12:01'),
(4, 'Bacaan dan Gerakan sholat', '2019-11-15 07:12:01'),
(5, 'Bahasa Arab', '2019-11-15 07:12:01'),
(6, 'Huruf Hijaiyah', '2019-11-15 07:12:01'),
(7, 'Hafalan Asmaul Husna', '2019-11-15 07:12:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_ekstrabahasajawa`
--

CREATE TABLE `t_ekstrabahasajawa` (
  `program_id` int(11) NOT NULL,
  `program` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_ekstrabahasajawa`
--

INSERT INTO `t_ekstrabahasajawa` (`program_id`, `program`, `created_at`) VALUES
(1, 'Kawruh basa jawa', '2019-11-15 07:13:23'),
(2, 'Nembang jawa', '2019-11-15 07:13:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_ekstradrumbband`
--

CREATE TABLE `t_ekstradrumbband` (
  `program_id` int(11) NOT NULL,
  `program` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_ekstradrumbband`
--

INSERT INTO `t_ekstradrumbband` (`program_id`, `program`, `created_at`) VALUES
(1, 'Keaktifan', '2019-11-15 07:14:39'),
(2, 'Kemampuan', '2019-11-15 07:14:39'),
(3, 'Permainan', '2019-11-15 07:14:39'),
(4, 'Pukulan', '2019-11-15 07:14:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_ekstramenari`
--

CREATE TABLE `t_ekstramenari` (
  `program_id` int(11) NOT NULL,
  `program` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_ekstramenari`
--

INSERT INTO `t_ekstramenari` (`program_id`, `program`, `created_at`) VALUES
(1, 'Keberanian', '2019-11-15 07:15:56'),
(2, 'Keaktifan', '2019-11-15 07:15:56'),
(3, 'Ekspresi', '2019-11-15 07:15:56'),
(4, 'Keluwesan', '2019-11-15 07:15:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_ekstramenggambar`
--

CREATE TABLE `t_ekstramenggambar` (
  `program_id` int(11) NOT NULL,
  `program` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_ekstramenggambar`
--

INSERT INTO `t_ekstramenggambar` (`program_id`, `program`, `created_at`) VALUES
(1, 'Pewarnaan', '2019-11-15 07:16:49'),
(2, 'Kreatifitas', '2019-11-15 07:16:49'),
(3, 'Kerapian', '2019-11-15 07:16:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kognitif`
--

CREATE TABLE `t_kognitif` (
  `kemampuan_id` int(11) NOT NULL,
  `kemampuan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kognitif`
--

INSERT INTO `t_kognitif` (`kemampuan_id`, `kemampuan`, `created_at`) VALUES
(1, 'Memiliki perilaku yang mencerminkan sikap ingin tahu', '2019-11-15 06:03:41'),
(2, 'Mengetahui cara memecahkan masalah sehari-hari dan prilaku kreatif', '2019-11-15 06:03:41'),
(3, 'Menyelesaikan masalah sehari-hari secara kreatif', '2019-11-15 06:03:41'),
(4, 'Mengenal benda-benda di sekitarnya (nama,warna,bentuk,ukuran,pola,sifat,\r\nTekstur,fungsidanciri-ciri lain nya)\r\n', '2019-11-15 06:03:41'),
(5, 'Menyampaikan tentang apa dan bagaimana benda-benda disekitar yang dikenalnya (nama,warna,bentuk,ukuran,pola,sifat,tekstur,fungsi,dan ciri lainnya) ', '2019-11-15 06:03:41'),
(6, 'Mengenal teknologi sederhana (peralatan rumah tangga, peralatan bermaian, peralatan pertukangan dll)', '2019-11-15 06:03:41'),
(7, 'Mengenal teknologi sederhana (peralatan rumah tangga, peralatan bermaian,peralatan pertukangan dll) untuk menyelesaikan tugas dan kegiatan', '2019-11-15 06:03:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_motorik`
--

CREATE TABLE `t_motorik` (
  `kemampuan_id` int(11) NOT NULL,
  `kemampuan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_motorik`
--

INSERT INTO `t_motorik` (`kemampuan_id`, `kemampuan`, `created_at`) VALUES
(1, 'Memiliki perilaku yang mencerminkan hidup sehat', '2019-11-15 06:07:49'),
(2, 'Mengenal anggota tubuh, fungsi, dan geraknya untuk mengembangkan motorik kasar dan motorik halus', '2019-11-15 06:07:49'),
(3, 'Menggunakan anggota tubuh untuk pengembangan motorik kasar dan halus', '2019-11-15 06:07:49'),
(4, 'Mengetahui cara hidup sehat', '2019-11-15 06:07:49'),
(5, 'Mampu menolong diri sendiri untuk hidup sehat', '2019-11-15 06:07:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_seni`
--

CREATE TABLE `t_seni` (
  `kemampuan_id` int(11) NOT NULL,
  `kemampuan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_seni`
--

INSERT INTO `t_seni` (`kemampuan_id`, `kemampuan`, `created_at`) VALUES
(1, 'Memiliki prilaku yang mencerminkan sikap kreatif', '2019-11-15 06:11:49'),
(2, 'Memiliki prilaku yang mencerminkan sikap estetis', '2019-11-15 06:11:49'),
(3, 'Mengenal berbagai karya dan aktivitas seni', '2019-11-15 06:11:49'),
(4, 'Mengenal berbagai karya dan aktivitas seni dengan menggunakan berbagai media ', '2019-11-15 06:11:49'),
(5, 'Mengenal lingkungan social(keluarga,teman,tempat tinggal,tempat ibadah,budaya,transportasi)', '2019-11-15 06:11:49'),
(6, 'Menyajikan berbagai karyanya dalam bentuk,gambar,bercerita,bernyanyi,gerak tubuh,dan lain-lain tentang lingkungan social(keluarga,teman,tempat tinggal,tempat ibadah,budaya dan transportasi)', '2019-11-15 06:11:49'),
(7, 'Mengenal lingkungan alam(hewan,tanaman,cuaca,tanah,air,batu-batuan)', '2019-11-15 06:11:49'),
(8, 'Menyajikan berbagai karyanya dalam bentuk gambar,bercerita,bernyanyi,gerak tubuh,dan lain-lain tentang lingkungan alam(hewan,tanaman,cuaca,tanah,air,batu-batuan)', '2019-11-15 06:11:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sosialemosional`
--

CREATE TABLE `t_sosialemosional` (
  `kemampuan_id` int(11) NOT NULL,
  `kemampuan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_sosialemosional`
--

INSERT INTO `t_sosialemosional` (`kemampuan_id`, `kemampuan`, `created_at`) VALUES
(1, 'Memiliki perilaku yang mencerminkan percaya diri', '2019-11-15 06:18:18'),
(2, 'Memiliki prilaku yang mencerminkan sikap taat terhadap aturan sehari-hari untuk melatih kedisiplinan', '2019-11-15 06:18:18'),
(3, 'Memiliki prilaku yang mencerminkan sikap sabar(mau menunggu giliran ,mau mendengarkan ketika orang lain berbicara)untuk melakukan kedisiplinan', '2019-11-15 06:18:18'),
(4, 'Memiliki perilaku yang mencerminkan kemandirian', '2019-11-15 06:18:18'),
(5, 'Memiliki perilaku yang mencerminkan sikap peduli dan mau membantu jika di minta bantuan', '2019-11-15 06:18:18'),
(6, 'Memiliki perilaku yang mencerminkan sikap kerjasama', '2019-11-15 06:18:18'),
(7, 'Mengenal emosi diri dan orang lain', '2019-11-15 06:18:18'),
(8, 'Menujukan reaksi emosi diri secara jujur', '2019-11-15 06:18:18'),
(9, 'Mengenal kebutuhan, keinginan dan melihat diri', '2019-11-15 06:18:18'),
(10, 'Mengungkapkan kebutuhan, keinginan dan melihat diri dengan cara tepat', '2019-11-15 06:18:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgllahir` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikanterakhir` varchar(255) NOT NULL,
  `mulaimengajar` varchar(30) NOT NULL,
  `pengampu` varchar(30) NOT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `nama`, `tgllahir`, `alamat`, `pendidikanterakhir`, `mulaimengajar`, `pengampu`, `telepon`, `created_at`) VALUES
(1, 'eny', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Eny Widiastuti, Amd', 'Semarang, 30 Desember 1976', 'Jl. Galar VI No. 8', 'D3', '2014', 'TK B Kecil', '089777555111', '2019-11-11 15:22:53'),
(2, 'tia', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Andika Wahyu Setiyani', 'Purwodadi, 01-01-1990', 'Purwodadi JawaTengah', 'S3', '2017', 'TK Kecil A', '089777555000', '2019-11-16 13:53:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `years`
--

CREATE TABLE `years` (
  `year_id` int(11) NOT NULL,
  `yearname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Baru',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agamadanmoral`
--
ALTER TABLE `agamadanmoral`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`app_id`);

--
-- Indeks untuk tabel `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`catatan_id`);

--
-- Indeks untuk tabel `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indeks untuk tabel `ekstraagama`
--
ALTER TABLE `ekstraagama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ekstrabahasajawa`
--
ALTER TABLE `ekstrabahasajawa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ekstradrumbband`
--
ALTER TABLE `ekstradrumbband`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ekstramenari`
--
ALTER TABLE `ekstramenari`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ekstramenggambar`
--
ALTER TABLE `ekstramenggambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kognitif`
--
ALTER TABLE `kognitif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `motorik`
--
ALTER TABLE `motorik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `seni`
--
ALTER TABLE `seni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indeks untuk tabel `sosialemosional`
--
ALTER TABLE `sosialemosional`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_agamadanmoral`
--
ALTER TABLE `t_agamadanmoral`
  ADD PRIMARY KEY (`kemampuan_id`);

--
-- Indeks untuk tabel `t_bahasa`
--
ALTER TABLE `t_bahasa`
  ADD PRIMARY KEY (`kemampuan_id`);

--
-- Indeks untuk tabel `t_ekstraagama`
--
ALTER TABLE `t_ekstraagama`
  ADD PRIMARY KEY (`program_id`);

--
-- Indeks untuk tabel `t_ekstrabahasajawa`
--
ALTER TABLE `t_ekstrabahasajawa`
  ADD PRIMARY KEY (`program_id`);

--
-- Indeks untuk tabel `t_ekstradrumbband`
--
ALTER TABLE `t_ekstradrumbband`
  ADD PRIMARY KEY (`program_id`);

--
-- Indeks untuk tabel `t_ekstramenari`
--
ALTER TABLE `t_ekstramenari`
  ADD PRIMARY KEY (`program_id`);

--
-- Indeks untuk tabel `t_ekstramenggambar`
--
ALTER TABLE `t_ekstramenggambar`
  ADD PRIMARY KEY (`program_id`);

--
-- Indeks untuk tabel `t_kognitif`
--
ALTER TABLE `t_kognitif`
  ADD PRIMARY KEY (`kemampuan_id`);

--
-- Indeks untuk tabel `t_motorik`
--
ALTER TABLE `t_motorik`
  ADD PRIMARY KEY (`kemampuan_id`);

--
-- Indeks untuk tabel `t_seni`
--
ALTER TABLE `t_seni`
  ADD PRIMARY KEY (`kemampuan_id`);

--
-- Indeks untuk tabel `t_sosialemosional`
--
ALTER TABLE `t_sosialemosional`
  ADD PRIMARY KEY (`kemampuan_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agamadanmoral`
--
ALTER TABLE `agamadanmoral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT untuk tabel `apps`
--
ALTER TABLE `apps`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT untuk tabel `catatan`
--
ALTER TABLE `catatan`
  MODIFY `catatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `ekstraagama`
--
ALTER TABLE `ekstraagama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT untuk tabel `ekstrabahasajawa`
--
ALTER TABLE `ekstrabahasajawa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `ekstradrumbband`
--
ALTER TABLE `ekstradrumbband`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `ekstramenari`
--
ALTER TABLE `ekstramenari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `ekstramenggambar`
--
ALTER TABLE `ekstramenggambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `kognitif`
--
ALTER TABLE `kognitif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT untuk tabel `motorik`
--
ALTER TABLE `motorik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT untuk tabel `seni`
--
ALTER TABLE `seni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT untuk tabel `siswas`
--
ALTER TABLE `siswas`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sosialemosional`
--
ALTER TABLE `sosialemosional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT untuk tabel `t_agamadanmoral`
--
ALTER TABLE `t_agamadanmoral`
  MODIFY `kemampuan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `t_bahasa`
--
ALTER TABLE `t_bahasa`
  MODIFY `kemampuan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `t_ekstraagama`
--
ALTER TABLE `t_ekstraagama`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `t_ekstrabahasajawa`
--
ALTER TABLE `t_ekstrabahasajawa`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_ekstradrumbband`
--
ALTER TABLE `t_ekstradrumbband`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `t_ekstramenari`
--
ALTER TABLE `t_ekstramenari`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `t_ekstramenggambar`
--
ALTER TABLE `t_ekstramenggambar`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_kognitif`
--
ALTER TABLE `t_kognitif`
  MODIFY `kemampuan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `t_motorik`
--
ALTER TABLE `t_motorik`
  MODIFY `kemampuan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `t_seni`
--
ALTER TABLE `t_seni`
  MODIFY `kemampuan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `t_sosialemosional`
--
ALTER TABLE `t_sosialemosional`
  MODIFY `kemampuan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `years`
--
ALTER TABLE `years`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Agu 2014 pada 05.20
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sinbanproject`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `administrator`
--

INSERT INTO `administrator` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_petugas` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`) VALUES
(1, 'Muhammad Ali', 'ali', '86318e52f5ed4801abe1d13d509443de');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_daerah`
--

CREATE TABLE IF NOT EXISTS `tbl_daerah` (
  `id_daerah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_daerah` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  PRIMARY KEY (`id_daerah`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tbl_daerah`
--

INSERT INTO `tbl_daerah` (`id_daerah`, `nama_daerah`, `latitude`, `longitude`) VALUES
(1, 'Kranji', '-6.2281985', '106.9760771'),
(2, 'Pasar Kranji', '-6.23458', '106.973585'),
(3, 'Cevest', '-6.234674', '106.989400'),
(5, 'Perumnas 3', '-6.2849775', '106.970127'),
(6, 'Kayuringin', '-6.2386894', '106.9847315');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_donasi`
--

CREATE TABLE IF NOT EXISTS `tbl_donasi` (
  `id_donasi` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_donasi` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `id_donatur` int(11) NOT NULL,
  `id_posko` int(11) NOT NULL,
  PRIMARY KEY (`id_donasi`),
  KEY `id_donatur` (`id_donatur`,`id_posko`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `tbl_donasi`
--

INSERT INTO `tbl_donasi` (`id_donasi`, `jenis_donasi`, `keterangan`, `id_donatur`, `id_posko`) VALUES
(1, 'Mie', '10 Pack', 1, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_donatur`
--

CREATE TABLE IF NOT EXISTS `tbl_donatur` (
  `id_donatur` int(11) NOT NULL AUTO_INCREMENT,
  `nama_donatur` varchar(100) NOT NULL,
  `alamat_donatur` text NOT NULL,
  PRIMARY KEY (`id_donatur`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_donatur`
--

INSERT INTO `tbl_donatur` (`id_donatur`, `nama_donatur`, `alamat_donatur`) VALUES
(1, 'Irawan Setiadi', 'Tambun'),
(2, 'Raessa Fathul Alim', 'Karawang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_info`
--

CREATE TABLE IF NOT EXISTS `tbl_info` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pemberi_info` varchar(100) NOT NULL,
  `alamat_pemberi_info` varchar(100) NOT NULL,
  `informasi_masyarakat` varchar(200) NOT NULL,
  `tanggal_info` date NOT NULL,
  `tampilkan` varchar(10) NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tbl_info`
--

INSERT INTO `tbl_info` (`id_info`, `nama_pemberi_info`, `alamat_pemberi_info`, `informasi_masyarakat`, `tanggal_info`, `tampilkan`) VALUES
(1, 'Ucup', 'Bekasi - Kayuringin', 'Oy.. Noh... Samping Stadion Banjir', '2014-06-19', 'iya'),
(2, 'Ucok', 'Bekasi - Perum 2', 'Ok mantaps.. aplikasinya..', '2014-06-20', 'iya'),
(3, 'Rachmat', 'Cevest', 'Good!!', '2014-06-24', 'iya'),
(5, 'Reksi', 'Tambun', 'Tambun Menggila', '2014-06-26', 'tidak'),
(6, 'Rachmad Fajrin', 'Sumarekon', 'Sumarekon Aman :D', '2014-06-26', 'tidak'),
(7, 'Rifky', 'Kayuringin', 'testing', '2014-06-27', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ketinggian`
--

CREATE TABLE IF NOT EXISTS `tbl_ketinggian` (
  `id_ketinggian` int(11) NOT NULL,
  `ketinggian_air` int(11) NOT NULL,
  `radius` int(11) NOT NULL,
  `tanggal_update` date NOT NULL,
  `id_daerah` int(11) NOT NULL,
  PRIMARY KEY (`id_ketinggian`),
  KEY `id_daerah` (`id_daerah`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ketinggian`
--

INSERT INTO `tbl_ketinggian` (`id_ketinggian`, `ketinggian_air`, `radius`, `tanggal_update`, `id_daerah`) VALUES
(1, 20, 100, '2014-06-04', 1),
(3, 12, 50, '2014-06-13', 3),
(2, 10, 200, '2014-06-14', 2),
(5, 10, 20, '2014-06-20', 5),
(0, 20, 100, '2014-06-27', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_korban`
--

CREATE TABLE IF NOT EXISTS `tbl_korban` (
  `id_korban` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat_korban` text NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_posko` int(11) NOT NULL,
  PRIMARY KEY (`id_korban`),
  KEY `id_posko` (`id_posko`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `tbl_korban`
--

INSERT INTO `tbl_korban` (`id_korban`, `nama_lengkap`, `alamat_korban`, `no_hp`, `foto`, `id_posko`) VALUES
(9, 'Nana Toing', 'Keranji', '087697765544', '220px-Wikirl2.jpg', 9),
(10, 'Ucup Clalu Cyx Mamah', 'Jl. Cinta Sejati', '0987654', 'Screenshot_11.png', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_posko`
--

CREATE TABLE IF NOT EXISTS `tbl_posko` (
  `id_posko` int(11) NOT NULL AUTO_INCREMENT,
  `nama_posko` varchar(100) NOT NULL,
  `alamat_posko` text NOT NULL,
  `id_daerah` int(11) NOT NULL,
  PRIMARY KEY (`id_posko`),
  KEY `id_daerah` (`id_daerah`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `tbl_posko`
--

INSERT INTO `tbl_posko` (`id_posko`, `nama_posko`, `alamat_posko`, `id_daerah`) VALUES
(10, 'Posko Rama', 'SD Al-Husna/Guntur Raya No.1', 3),
(9, 'Posko Bima', 'kranji atas', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

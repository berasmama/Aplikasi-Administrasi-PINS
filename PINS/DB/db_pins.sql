-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 21 Jun 2016 pada 11.36
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_pins`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE IF NOT EXISTS `tbl_pegawai` (
  `nip` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jabatan` varchar(7) NOT NULL,
  `is_valid` int(11) NOT NULL,
  `reserved1` text NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_project`
--

CREATE TABLE IF NOT EXISTS `tbl_project` (
  `id_project` int(11) NOT NULL AUTO_INCREMENT,
  `nama_project` varchar(100) NOT NULL,
  `jenis_project` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `staff` varchar(35) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_project`
--

INSERT INTO `tbl_project` (`id_project`, `nama_project`, `jenis_project`, `tanggal`, `staff`, `data`) VALUES
(1, '', 'probis', '2016-06-21 11:33:42', 'Taufan', '{"probis_1":"","probis_2":"","probis_3":"","probis_4":"","probis_5":"","probis_6":"","probis_7":"","probis_8":"","probis_9":"","probis_10":"","probis_11":"","probis_12":"","probis_13":"","probis_14":"","probis_15":"","probis_16":"","probis_17":"","probis_18":"","probis_19":"","probis_20":"","probis_21":"","probis_22":"","probis_23":"","probis_24":"","probis_25":"","probis_26":"","probis_27":"","probis_28":"","probis_29":"","probis_30":"","probis_31":"","probis_32":"","probis_33":"","probis_34":"","probis_35":""}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 27 Jul 2016 pada 09.49
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
  `password` varchar(50) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jabatan` varchar(7) NOT NULL,
  `is_valid` int(11) NOT NULL,
  `reserved1` text NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`nip`, `firstname`, `lastname`, `email`, `password`, `ttl`, `alamat`, `no_hp`, `foto`, `jabatan`, `is_valid`, `reserved1`) VALUES
(12345, 'Taufan F', 'Iskandar', 'tfi231097@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2016-06-21', 'jln. Perak no.32', '087781884330', '12345.jpg', 'Manager', 1, ''),
(22222, 'Fadhilah', 'Taufan', 'gg@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2016-07-13', 'Perak', '08771884330', '22222.jpg', 'Staff', 1, ''),
(55555, 'Taufan', 'Fadhilah Iskandar', 'tfi231097@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1997-10-23', 'jln. Perak no.32 lama', '08771884330', '55555.jpg', 'Staff', 1, '');

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
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_project`
--

INSERT INTO `tbl_project` (`id_project`, `nama_project`, `jenis_project`, `tanggal`, `staff`, `data`, `status`) VALUES
(2, 'Project PDAM anyar maneh', 'probis', '2016-06-22 18:15:52', 'Taufan', '{"probis_1":"PDAM cuy uhuuyyy","probis_2":"","probis_3":"","probis_4":"","probis_5":"","probis_6":"","probis_7":"","probis_8":"","probis_9":"","probis_10":"","probis_11":"","probis_12":"","probis_13":"","probis_14":"","probis_15":"","probis_16":"","probis_17":"","probis_18":"","probis_19":"","probis_20":"","probis_21":"","probis_22":"","probis_23":"","probis_24":"","probis_25":"","probis_26":"","probis_27":"","probis_28":"","probis_29":"","probis_30":"","probis_31":"","probis_32":"","probis_33":"","probis_34":"","probis_35":"","nama_project":"Project PDAM anyar maneh"}', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_timeline`
--

CREATE TABLE IF NOT EXISTS `tbl_timeline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jul 2018 pada 11.07
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
`id_buku` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `jumlah_halaman` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `id_kategori`, `jumlah_halaman`, `gambar`, `sinopsis`, `stok`, `harga`) VALUES
(1, 'mendung mencerah', 'siti sofiyah', 'AlAzharPress', 2010, 1, 120, 'Capture.png', 'ywehfkjdrb', 1, 30000),
(3, 'Ayat ayat cinta', 'amir', 'AlAzharPress', 2010, 1, 12, 'unnamed (4).png', 'ywehfkjdrb', 3, 30000),
(4, 'Sirah Nabawiyah', 'Abdurrahman', 'AlAzharPress', 2010, 2, 120, 'korea.png', 'okelah', 3, 30000),
(5, 'LASKAR PELANGI', 'Muh. Abdillah', 'Al Azhar Press', 2010, 1, 230, 'Jellyfish.jpg', 'gdfdhb', 9, 3000),
(6, 'Laa Tahzaan', 'Abdurrahman', 'Malang', 2011, 2, 125, 'Desert.jpg', 'jhkj', 11, 5000),
(7, 'yuhu', 'hj', 'hjh', 2010, 0, 125, '2.PNG', 'jhkj', 12, 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpembelian`
--

CREATE TABLE IF NOT EXISTS `detailpembelian` (
`id_detail` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `totalHarga` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Trigger `detailpembelian`
--
DELIMITER //
CREATE TRIGGER `StokBerkurang` AFTER INSERT ON `detailpembelian`
 FOR EACH ROW BEGIN
UPDATE buku set stok=stok-NEW.jumlah
WHERE id_buku=NEW.id_buku;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id_kategori` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Fiksi'),
(2, 'Non-Fiksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
`id_pembelian` int(11) NOT NULL,
  `tgl_beli` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `totalBayar` int(11) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `level` varchar(10) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `password`, `email`, `alamat`, `no_telp`, `level`, `gambar`, `username`) VALUES
(1, '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'Malang', '89786757', 'admin', 'user.png', 'admin'),
(2, 'db04eb4b07e0aaf8d1d477ae342bdff9', 'sitisofia05@gmail.com', 'Madyopuro', '900000000000', 'user', 'Penguins.jpg', 'siti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `detailpembelian`
--
ALTER TABLE `detailpembelian`
 ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`), ADD UNIQUE KEY `kategori` (`kategori`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
 ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `detailpembelian`
--
ALTER TABLE `detailpembelian`
MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

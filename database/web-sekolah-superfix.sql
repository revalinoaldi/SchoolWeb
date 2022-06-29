-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2022 pada 19.41
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

DROP TABLE IF EXISTS `tbl_berita`;
CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `slug_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `gambar_berita` varchar(30) DEFAULT NULL,
  `tgl_berita` date NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `slug_berita`, `isi_berita`, `gambar_berita`, `tgl_berita`, `id_user`) VALUES
(2, 'uts', 'UAS', 'ISI BERITA', 'gambar', '2022-05-12', 1),
(3, 'libur', 'libur', 'ISI BERITA', 'gambar', '2022-05-12', 1),
(4, 'uts1', 'UAS1', 'ISI BERITA', 'gambar', '2022-05-12', 1),
(5, 'uts2', 'UAS2', 'ISI BERITA', 'gambar', '2022-05-12', 1),
(6, 'libur1', 'libur1', 'ISI BERITA', 'gambar', '2022-05-12', 1),
(7, 'uts3', 'UAS3', 'ISI BERITA', 'gambar', '2022-05-12', 1),
(8, 'uts5', 'UAS5', 'ISI BERITA', 'gambar', '2022-05-12', 1),
(9, 'libur5', 'libur5', 'ISI BERITA', 'gambar', '2022-05-12', 1),
(10, 'uts5', 'UAS5', 'ISI BERITA', 'gambar', '2022-05-12', 1),
(11, 'uts6', 'UAS6', 'ISI BERITA', 'gambar', '2022-05-12', 1),
(12, 'libur6', 'libur6', 'ISI BERITA', 'gambar', '2022-05-12', 1),
(13, 'Penembakan SD di Texas: Polisi Akui Bersalah Tak Segera Bekuk Pelaku', 'penembakan-sd-di-texas-polisi-akui-bersalah-tak-segera-bekuk-pelaku', '<p>Direktur Departemen Keamanan Masyarakat Texas mengatakan pada Jumat (27/5/2022) bahwa polisi yang menanggapi peristiwa penembakan di Sekolah Dasar Robb di Uvade, Texas, AS, membuat keputusan untuk tidak segara memasuki ruang kelas tempat penembak berada. Keputusan tersebut dibuat karena mereka yakin para siswa tidak lagi dalam keadaan bahaya.</p>\r\n\r\n<p>Direktur Keamanan Publik Steven McCraw mengatakan, komandan insiden di lokasi penembakan sekolah yang terjadi pada Selasa (24/5/2022) itu menilai tidak ada lagi penembak aktif atau ancaman terhadap anak-anak. Ia mengira situasi telah beralih ke penyanderaan sambil ia menunggu tim taktis tiba.</p>\r\n\r\n<p>McGraw mengidentifikasi komandan tersebut adalah Pete Arredondo, kepala polisi Distrik Sekolah Konsolidasi Uvalde. McGraw mengatakan kepada wartawan, dengan melihat ke belakang, itu adalah keputusan yang salah untuk menunggu dalam menghadapi si penembak.</p>\r\n\r\n<p>Polisi Uvalde mendapat kecaman tajam dari orang tua dan warga di tempat kejadian pada Selasa atas keterlambatan mereka dalam menghadapi penembak, Salvador Ramos (18). Ramos memasuki sekolah tersebut melalui pintu yang tidak terkunci dan menembak mati 19 siswa dan dua guru.</p>\r\n\r\n<p>Para pejabat mengatakan Ramos, seorang remaja putus sekolah menengah, berada di sekolah itu selama 40 menit hingga satu jam sebelum polisi menyerbu ruang kelas empat tempat pembunuhan terjadi.</p>\r\n\r\n<p>Gubernur Texas Gregg Abbott, yang awalnya memuji tanggapan polisi, mengatakan pada Jumat bahwa dia sangat marah mengetahui bahwa dia telah diberikan informasi yang tidak akurat. Dia menyerukan agar tindakan polisi diselidiki secara menyeluruh.</p>\r\n\r\n<p>McGraw mengatakan sebanyak 19 petugas polisi tiba di tempat kejadian dan berada di lorong sekolah, tetapi komandan insiden merasa tim taktis dibutuhkan untuk melakukan operasi polisi yang dianggap perlu. Petugas taktis Patroli Perbatasan AS akhirnya tiba, bersama dengan petugas dan peralatan lainnya, termasuk perisai balistik. Mereka memasuki ruang kelas tempat Ramos berada yang akhirnya tewas ditembak aparat. McGraw mengatakan, berdasarkan suara yang direkam pada kamera keamanan dan selongsong peluru yang ditemukan di tempat kejadian, Ramos menembakkan lebih dari 100 peluru selama insiden tersebut</p>\r\n', 'berita_texas.jpg', '2022-06-05', 1),
(14, 'Berita KJP', 'berita-kjp', '<p>KJP adalah Kartu Jakarta Pintar.</p>\r\n', 'sdlc_2.jpg', '2022-06-05', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_fasilitas`
--

DROP TABLE IF EXISTS `tbl_fasilitas`;
CREATE TABLE `tbl_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` text NOT NULL,
  `sampul_fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`id_fasilitas`, `nama_fasilitas`, `sampul_fasilitas`) VALUES
(5, 'Musholla', 'WhatsApp_Image_2022-06-07_at_21_14_541.jpeg'),
(6, 'Ruang Kelas', 'WhatsApp_Image_2022-06-07_at_21_14_17.jpeg'),
(8, 'UKS', 'WhatsApp_Image_2022-06-07_at_21_14_40.jpeg'),
(9, 'Ruang Alat Musik', 'WhatsApp_Image_2022-06-07_at_21_14_46.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto`
--

DROP TABLE IF EXISTS `tbl_foto`;
CREATE TABLE `tbl_foto` (
  `id_foto` int(11) NOT NULL,
  `id_gallery` int(11) NOT NULL,
  `ket_foto` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_foto`
--

INSERT INTO `tbl_foto` (`id_foto`, `id_gallery`, `ket_foto`, `foto`) VALUES
(1, 1, 'a', ''),
(3, 1, 'Upacara', 'TUNGGAL.jpg'),
(4, 1, 'baru', 'itbu.png'),
(5, 3, 'Amanat Pembina Upacara', 'IMG-20220601-WA0045.jpg'),
(8, 3, 'Hormat Kepada Bendera', 'IMG-20220601-WA0044.jpg'),
(9, 3, 'Mengheningkan Cipta', 'IMG-20220601-WA0038.jpg'),
(14, 4, 'Kelompok Nasi Goreng', 'WhatsApp_Image_2022-03-18_at_09_59_13.jpeg'),
(15, 4, 'Kelompok Minuman', 'WhatsApp_Image_2022-03-18_at_10_00_21_(1).jpeg'),
(18, 4, 'Kegiatan Jual Beli', 'WhatsApp_Image_2022-03-25_at_06_25_59.jpeg'),
(20, 4, 'Pengarahan Market Day', 'WhatsApp_Image_2022-03-18_at_07_18_00.jpeg'),
(21, 5, 'Tenda Untuk Perjusa', 'tenda.jpg'),
(22, 5, 'Gugus Depan 01-25', 'gusdep_25.jpg'),
(23, 6, 'Tari Kipas', 'kipas.jpg'),
(24, 6, 'Tari Topeng', 'gerak_tari_topeng.jpg'),
(25, 6, 'Tari Kuda Lumping', 'kuda_lumping.jpg'),
(26, 6, 'Tari Payung', 'payungg.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_fotofasilitas`
--

DROP TABLE IF EXISTS `tbl_fotofasilitas`;
CREATE TABLE `tbl_fotofasilitas` (
  `id_foto` int(11) NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `ket_foto` text NOT NULL,
  `foto_fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_fotofasilitas`
--

INSERT INTO `tbl_fotofasilitas` (`id_foto`, `id_fasilitas`, `ket_foto`, `foto_fasilitas`) VALUES
(6, 3, 'Tampak Depan Musholla', 'WhatsApp_Image_2022-06-07_at_21_14_55.jpeg'),
(7, 3, 'Dalam Musholla', 'WhatsApp_Image_2022-06-07_at_21_14_58.jpeg'),
(8, 5, 'Tampak Depan Musholla', 'WhatsApp_Image_2022-06-07_at_21_14_551.jpeg'),
(9, 5, 'Dalam Musholla', 'WhatsApp_Image_2022-06-07_at_21_14_581.jpeg'),
(10, 6, 'Ruang Kelas I', 'WhatsApp_Image_2022-06-07_at_21_14_30.jpeg'),
(11, 6, 'Pintu Masuk Ruang Kelas I', 'WhatsApp_Image_2022-06-07_at_21_14_24.jpeg'),
(12, 6, 'Ruang Kelas II', 'WhatsApp_Image_2022-06-07_at_21_14_26.jpeg'),
(13, 6, 'Pintu Masuk Ruang Kelas II', 'WhatsApp_Image_2022-06-09_at_01_39_47.jpeg'),
(14, 6, 'Ruang Kelas III', 'WhatsApp_Image_2022-06-09_at_01_41_25.jpeg'),
(15, 6, 'Pintu Masuk Ruang Kelas III', 'WhatsApp_Image_2022-06-09_at_01_44_03.jpeg'),
(16, 7, 'UKS Sekolah', 'WhatsApp_Image_2022-06-07_at_21_14_39_(1).jpeg'),
(17, 7, 'Tampak Depan UKS', 'WhatsApp_Image_2022-06-07_at_21_14_44.jpeg'),
(18, 7, 'Lab Alat Musik', 'WhatsApp_Image_2022-06-07_at_21_14_46.jpeg'),
(19, 7, 'Angklung Kecil', 'WhatsApp_Image_2022-06-07_at_21_14_48.jpeg'),
(20, 7, 'Angklung Besar', 'WhatsApp_Image_2022-06-07_at_21_14_51.jpeg'),
(21, 8, 'UKS Sekolah', 'WhatsApp_Image_2022-06-07_at_21_14_39_(1)1.jpeg'),
(22, 8, 'Tampak Depan UKS', 'WhatsApp_Image_2022-06-07_at_21_14_441.jpeg'),
(23, 9, 'Angklung Kecil', 'WhatsApp_Image_2022-06-07_at_21_14_481.jpeg'),
(24, 9, 'Angklung Besar', 'WhatsApp_Image_2022-06-07_at_21_14_511.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

DROP TABLE IF EXISTS `tbl_gallery`;
CREATE TABLE `tbl_gallery` (
  `id_gallery` int(11) NOT NULL,
  `nama_gallery` text NOT NULL,
  `sampul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `nama_gallery`, `sampul`) VALUES
(3, 'Upacara Pengibaran Bendera', 'IMG-20220601-WA0036.jpg'),
(4, 'Market Day', 'WhatsApp_Image_2022-03-18_at_20_06_09.jpeg'),
(5, 'Perkemahan Jumat Sabtu', 'perjusa.jpg'),
(6, 'Praktek Tari', 'tariii.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

DROP TABLE IF EXISTS `tbl_guru`;
CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama_guru` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `id_mapel` int(2) DEFAULT NULL,
  `pendidikan` varchar(5) DEFAULT NULL,
  `foto_guru` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nip`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `id_mapel`, `pendidikan`, `foto_guru`) VALUES
(1, '198010312014121001', 'Syaiful Yudi Setiawan', 'Madiun', '1980-10-31', 2, 'S1', '7.png'),
(2, '197405282016042001', 'Nur Aini', 'Jakarta', '1974-05-28', 2, 'S1', '2.png'),
(5, '199208082019032026', 'Annisa Rizky Triana', 'Bekasi', '1992-08-08', 2, 'S1', '10.png'),
(6, '199611262020122024', 'Mafisah Novryliyani', 'Bogor', '1996-11-26', 2, 'S1', '11.png'),
(7, '196504061986102003', 'Nawisah', 'Serang', '1965-04-06', 5, 'S1', '3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_informasi`
--

DROP TABLE IF EXISTS `tbl_informasi`;
CREATE TABLE `tbl_informasi` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `brosur_img` varchar(255) NOT NULL,
  `brosur_doc` varchar(255) NOT NULL,
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`id`, `title`, `tahun`, `brosur_img`, `brosur_doc`, `update_at`) VALUES
(1, 'Informasi PPDB Online 2022', 2022, 'poster_ppdb_SD_page-0001.jpg', 'poster_ppdb_SD_page-0001.pdf', '2022-06-30 00:19:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas1`
--

DROP TABLE IF EXISTS `tbl_kelas1`;
CREATE TABLE `tbl_kelas1` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(15) DEFAULT NULL,
  `nama_siswa` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `foto_kelas1` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelas1`
--

INSERT INTO `tbl_kelas1` (`id_siswa`, `nis`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `kelas`, `foto_kelas1`) VALUES
(5, '2269', 'RAIHAN SETIAWAN', 'Jakarta', '2013-06-13', 'Laki-Laki', 'Islam', 'I', 'ec38b499bcbe1518d44c92d117f3d6'),
(6, '2267', 'PRASTYA WISNU ADJI', 'Karawang', '2014-04-17', 'Laki-Laki', 'Islam', 'I', 'Screenshot_2021-07-11_1105196.'),
(7, '2257', 'LUCAS ACACIO SINAMBELA', 'Jakarta', '2015-01-18', 'Laki-Laki', 'Katholik', 'I', 'Screenshot_2021-07-11_1105197.'),
(8, '2252', 'HANAMI SAKURA SEPTYANI', 'Pekalongan', '2014-11-11', 'Perempuan', 'Islam', 'I', 'Screenshot_2021-07-11_1105198.'),
(9, '2248', 'ANINDIA PUTRI', 'Jakarta', '2015-01-27', 'Perempuan', 'Islam', 'I', 'Screenshot_2021-07-11_1105199.'),
(13, '24532', 'Sinta Pudji', 'Brebes', '2001-05-05', 'Perempuan', 'Islam', 'IV', 'pas_foto_terbaru_page-0001.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas2`
--

DROP TABLE IF EXISTS `tbl_kelas2`;
CREATE TABLE `tbl_kelas2` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(15) DEFAULT NULL,
  `nama_siswa` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `foto_kelas2` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelas2`
--

INSERT INTO `tbl_kelas2` (`id_siswa`, `nis`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `kelas`, `foto_kelas2`) VALUES
(1, '2237', 'RAFIF ATHALLAH NURDIANSYA', 'Jakarta', '2013-07-10', 'Laki-Laki', 'Islam', 'II', 'Screenshot_2021-07-11_110519.p'),
(2, '2230', 'MUHAMMAD AMMAR HANAFI', 'Jakarta', '2013-08-18', 'Laki-Laki', 'Islam', 'II', 'Screenshot_2021-07-11_1105191.'),
(3, '2222', 'I GUSTI BAGUS JHANARDANA ', 'Jakarta', '2013-06-27', 'Laki-Laki', 'Hindu', 'II', 'Screenshot_2021-07-11_1105192.'),
(4, '2216', 'EKA NOVITA AULIYASARI', 'Klaten', '2013-11-01', 'Perempuan', 'Islam', 'II', 'Screenshot_2021-07-11_1105193.'),
(5, '2214', 'BIANCA CLAUDIA', 'Jakarta', '2013-11-27', 'Perempuan', 'Islam', 'II', 'Screenshot_2021-07-11_1105194.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas3`
--

DROP TABLE IF EXISTS `tbl_kelas3`;
CREATE TABLE `tbl_kelas3` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(15) DEFAULT NULL,
  `nama_siswa` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `foto_kelas3` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelas3`
--

INSERT INTO `tbl_kelas3` (`id_siswa`, `nis`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `kelas`, `foto_kelas3`) VALUES
(1, '2202', 'URBY AQEELA TULQOLBI', 'Jakarta', '2011-12-13', 'Perempuan', 'Islam', 'III', 'Screenshot_2021-07-11_110519.p'),
(2, '2191', 'KAYSHABILAH RAMADHANI', 'Jakarta', '2012-08-01', 'Perempuan', 'Islam', 'III', 'Screenshot_2021-07-11_1105191.'),
(3, '2185', 'FADHIL SYAHMI HISYAM', 'Kebumen', '2013-02-24', 'Laki-Laki', 'Islam', 'III', 'Screenshot_2021-07-11_1105192.'),
(4, '2181', 'ANUGRAH HALOMOAN MANURUNG', 'Jakarta', '2012-09-29', 'Laki-Laki', 'Kristen', 'III', 'Screenshot_2021-07-11_1105193.'),
(5, '2174', 'AHMAD FIKRI', 'Batam', '2012-05-25', 'Laki-Laki', 'Islam', 'III', 'Screenshot_2021-07-11_1105194.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas4`
--

DROP TABLE IF EXISTS `tbl_kelas4`;
CREATE TABLE `tbl_kelas4` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(15) DEFAULT NULL,
  `nama_siswa` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `foto_kelas4` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelas4`
--

INSERT INTO `tbl_kelas4` (`id_siswa`, `nis`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `kelas`, `foto_kelas4`) VALUES
(1, '2171', 'YUSUF EL QASSAM ATTAMIMI', 'Ambon', '2011-09-14', 'Laki-Laki', 'Islam', 'IV', 'Screenshot_2021-07-11_110519.p'),
(2, '2165', 'SHANDRINA KHAIRANA', 'Jakarta', '2011-07-08', 'Perempuan', 'Islam', 'IV', 'Screenshot_2021-07-11_1105191.'),
(3, '2155', 'GRACE EKA FEBRIYANI', 'Pekalongan', '2011-02-13', 'Perempuan', 'Islam', 'IV', 'Screenshot_2021-07-11_1105192.'),
(4, '2148', 'BHANU ANDRIANSATYA', 'Jakarta', '2011-09-19', 'Laki-Laki', 'Islam', 'IV', 'Screenshot_2021-07-11_1105193.'),
(5, '2143', 'AFKAR FIDEL NARYAMA', 'Jakarta', '2011-10-03', 'Laki-Laki', 'Islam', 'IV', 'Screenshot_2021-07-11_1105194.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas5`
--

DROP TABLE IF EXISTS `tbl_kelas5`;
CREATE TABLE `tbl_kelas5` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(15) DEFAULT NULL,
  `nama_siswa` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `foto_kelas5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelas5`
--

INSERT INTO `tbl_kelas5` (`id_siswa`, `nis`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `kelas`, `foto_kelas5`) VALUES
(1, '2160', 'REVALDI MAULANA MUKTI', 'Jakarta', '2011-09-10', 'Laki-Laki', 'Islam', 'V', 'Screenshot_2021-07-11_110519.p'),
(2, '2156', 'RAHMI SYALSA OKTAVIA', 'Jakarta', '2011-08-30', 'Perempuan', 'Islam', 'V', 'Screenshot_2021-07-11_1105191.'),
(3, '2150', 'LAELA NURFADILA', 'Jakarta', '2011-08-31', 'Perempuan', 'Islam', 'V', 'Screenshot_2021-07-11_1105192.'),
(4, '2146', 'IBNU SABBIL FIRDAUS', 'Jakarta', '2011-05-11', 'Laki-Laki', 'Islam', 'V', 'Screenshot_2021-07-11_1105193.'),
(5, '2140', 'AKMA GASANI', 'Jakarta', '2011-06-16', 'Laki-Laki', 'Islam', 'V', 'Screenshot_2021-07-11_1105194.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas6`
--

DROP TABLE IF EXISTS `tbl_kelas6`;
CREATE TABLE `tbl_kelas6` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(15) DEFAULT NULL,
  `nama_siswa` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `foto_kelas6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelas6`
--

INSERT INTO `tbl_kelas6` (`id_siswa`, `nis`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `kelas`, `foto_kelas6`) VALUES
(1, '2135', 'SATRIA DEWAZACKY', 'Jakarta', '2010-06-30', 'Laki-Laki', 'Islam', 'VI', 'Screenshot_2021-07-11_110519.p'),
(2, '2085', 'NEZZA ALVA AMADEA', 'Jakarta', '2009-06-22', 'Perempuan', 'Islam', 'VI', 'Screenshot_2021-07-11_1105191.'),
(3, '2081', 'MUHAMMAD GILANG RAMADHAN', 'Cirebon', '2009-09-16', 'Laki-Laki', 'Islam', 'VI', 'Screenshot_2021-07-11_1105192.'),
(4, '2277', 'INDAH KARINA BR GINTING', 'Jakarta', '2008-10-26', 'Perempuan', 'Islam', 'VI', 'Screenshot_2021-07-11_1105193.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mapel`
--

DROP TABLE IF EXISTS `tbl_mapel`;
CREATE TABLE `tbl_mapel` (
  `id_mapel` int(2) NOT NULL,
  `nama_mapel` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `nama_mapel`) VALUES
(2, 'Guru Kelas'),
(3, 'PJOK'),
(5, 'Pendidikan Agama Islam'),
(7, 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

DROP TABLE IF EXISTS `tbl_pengumuman`;
CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(255) DEFAULT NULL,
  `isi_pengumuman` text DEFAULT NULL,
  `tgl` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `tgl`) VALUES
(1, 'UTS', 'Diberitahukan kepada seluruh siswa SMK Nurul Huda bahwa ujian mulai dilaksanakan pada 17 Mei 2022', '2022-05-17'),
(2, 'Libur Semester', 'Diberitahukan kepada seluruh siswa SMK Nurul Huda bahwa libur semester dimulai pada 17 Mei 2022', '2022-05-17'),
(4, 'Hari Kartini', 'Diberitahukan kepada seluruh siswa SMK Nurul Huda bahwa pada 21 April 2022 diperingati sebagai hari Kartini. Maka seluruh siswa diwajibkan memakai kebaya untuk wanita dan baju koko putih untuk laki-laki.', '2022-04-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_setting`
--

DROP TABLE IF EXISTS `tbl_setting`;
CREATE TABLE `tbl_setting` (
  `id` int(1) NOT NULL,
  `nama_kepsek` varchar(50) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `sambutan` text DEFAULT NULL,
  `foto_kepsek` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `nama_kepsek`, `nip`, `sambutan`, `foto_kepsek`) VALUES
(1, 'Sri Sihyani', '196707141998022002', 'assalamualaikum <br>\r\n\r\nWhat is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <br>\r\n<br>\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

DROP TABLE IF EXISTS `tbl_siswa`;
CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(15) DEFAULT NULL,
  `nama_siswa` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `foto_siswa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nis`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `kelas`, `foto_siswa`) VALUES
(1, '111', 'Eka', 'Jakarta', '2000-05-08', 'I', 'foto'),
(2, '222', 'Retno', 'Jakarta', '2000-04-10', 'I', 'foto'),
(3, '333', 'Wulan', 'Jakarta', '2000-02-18', 'I', 'foto'),
(4, '444', 'Ani', 'Jakarta', '2000-03-23', 'I', 'foto'),
(6, '555', 'Anissa al', 'Bekasi', '2000-01-12', 'I', 'itbuu.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id_user` int(2) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Eka', 'admin', 'admin', 1),
(2, 'Wulan', 'user', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `tbl_fotofasilitas`
--
ALTER TABLE `tbl_fotofasilitas`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kelas1`
--
ALTER TABLE `tbl_kelas1`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tbl_kelas2`
--
ALTER TABLE `tbl_kelas2`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tbl_kelas3`
--
ALTER TABLE `tbl_kelas3`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tbl_kelas4`
--
ALTER TABLE `tbl_kelas4`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tbl_kelas5`
--
ALTER TABLE `tbl_kelas5`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tbl_kelas6`
--
ALTER TABLE `tbl_kelas6`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto`
--
ALTER TABLE `tbl_foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tbl_fotofasilitas`
--
ALTER TABLE `tbl_fotofasilitas`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas1`
--
ALTER TABLE `tbl_kelas1`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas2`
--
ALTER TABLE `tbl_kelas2`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas3`
--
ALTER TABLE `tbl_kelas3`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas4`
--
ALTER TABLE `tbl_kelas4`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas5`
--
ALTER TABLE `tbl_kelas5`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas6`
--
ALTER TABLE `tbl_kelas6`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

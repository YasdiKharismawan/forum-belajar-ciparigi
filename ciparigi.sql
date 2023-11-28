-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 01:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciparigi`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `kelas`, `harga`, `cover`) VALUES
(2, 'Kompeten Ulangan Harian Kurikulum Merdeka Kelas 6 SD/MI (Pixelindo)', '6', 165000, 'buku_(5).png'),
(3, 'Detik Detik AAS', '6', 48000, 'buku_(4).png'),
(4, 'injury time US USBN 2024', '6', 71000, 'buku.png'),
(5, 'Bank Soal Smart Ujian Sekolah SD', '6', 51000, 'buku_(2).png'),
(6, 'Ujian Sekolah Kelas 6 SD SPM PLUS US SD/MI 2023 Erlangga', '6', 90000, 'buku_(3).png'),
(7, 'ESPS: B. INDONESIA SD/MI KLS.VI/KTSP', '6', 76500, 'buku_(6).png'),
(8, 'Paten USBN SD/MI 2020', '6', 46000, 'buku_(7).png'),
(9, 'ERLANGGA X-PRESS USBN SD/MI 2020 B. INDONESIA', '6', 45000, 'buku_(8).png');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `judul`, `genre`, `harga`, `detail`, `cover`) VALUES
(4, 'Super Mario Odyssey', 'Indie-Adventure', 700000, 'Berpetualang menggunakan mario gendut', 'SMOD12.png'),
(5, 'Resident Evil 4', 'Horror-Survival', 550000, 'Kamu akan bermain sebagai karakter bernama leon, dan kamu harus menyelamatkan putri presiden bernama ashley yang diculik oleh zombie', 'RE41.png'),
(10, 'Litle Kitty Big City', 'Indie-Adventure', 600000, '', 'LKBC.png'),
(11, 'Super Mario 3D World', 'Indie-Adventure', 600000, '', 'SM3D.png'),
(12, 'The Legend of Zelda: Tears of The Kingdom', 'Action-Adventure-OpenWorld', 700000, '', 'totk.png'),
(14, 'The Legend of Zelda: Breath of The Wild', 'Action-Adventure-OpenWorld', 600000, '', 'botw.png'),
(15, 'Space From The Unbound', 'Indie-Adventure', 600000, '', 'stu.png'),
(20, 'Animal Crossing', 'Indie-Farm', 650000, '', 'ac.png'),
(21, 'Outlast: Bundle Of Terror', 'Horror-Survival', 400000, '', 'OUT1.png'),
(22, 'Outlast 2', 'Horror-Survival', 500000, '', 'OUT2.png'),
(23, 'Resident Evil 5', 'Horror-Survival', 500000, '', 'RE5.png'),
(24, 'Resident Evil 6', 'Horror-Survival', 500000, '', 'RE6.png'),
(25, 'Resident Evil Revelation 1', 'Horror-Survival', 400000, '', 'REREV1.png'),
(26, 'Resident Evil Revelation 2', 'Horror-Survival', 400000, '', 'REREV2.png'),
(27, 'Super Mario Kart 8', 'Racing', 600000, '', 'mk8.png'),
(28, 'Super Mario Bros Wonder', 'Indie-Adventure', 600000, '', 'smb.png'),
(29, 'Samurai Maiden', 'Action-Adventure-OpenWorld', 800000, 'Kamu adalah seorang gadis yang dikirim ke isekai untuk membasi para zombie dan monster', 'SM1.png');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(25, 'yasdi', 'Bogor', '2023-11-15 14:48:04', '2023-11-16 14:48:04'),
(26, 'Agnes Gustyani', 'Cigombong, Bogor', '2023-11-15 19:05:48', '2023-11-16 19:05:48'),
(27, 'Yasdi Kharismawan', 'Jakarta', '2023-11-16 12:32:09', '2023-11-17 12:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(20) NOT NULL,
  `kd_mapel` varchar(20) NOT NULL,
  `kd_kelas` varchar(20) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `topik` varchar(50) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `kd_mapel`, `kd_kelas`, `mapel`, `kelas`, `topik`, `detail`, `link`, `cover`) VALUES
(6, 'MT', '001', 'Matematika', '1', 'Berhitung', 'Berhitung angka 1 sampai 1.000.000.000.000', 'https://www.youtube.com/watch?v=VNdHd1asf9s&list=RDIAOH34JtNRA&index=27', 'default.jpg'),
(7, 'IA', '004', 'Ilmu Pengetahuan Alam', '4', 'Rangka dan Pemeliharaannya', 'Siswa dapat mendeskripsikan hubungan antara struktur kerangka tubuh dan fungsinya serta dapat menerapkannya cara memelihara kesehatan kerangka tubuh.', 'https://youtu.be/GKqcVHdEwfM?si=92sH8hwOSNzt-1Le', '4-ipa.png'),
(8, 'IS', '004', 'Ilmu Pengetahuan Sosial', '4', 'Peta Lingkungan Setempat', 'Kita tidak akan tersesat dan salah jalan apabila kita bisa membaca sebuah peta.  Dengan adanya peta kita bisa melihat gambaran suatu wilayah dengan mudah.', 'https://youtu.be/mx1r9cVeMR8?si=rro2WW279VRAlbxR', '4-ips.png'),
(9, 'BI', '004', 'Bahasa Indonesia', '4', 'Menemukan Ide Pokok dan Paragraf', 'Cara menentukan ide pokok dalam sebuah paragraf ditentukan dari gagasan pendukung suatu bacaan.', 'https://youtu.be/0jnhDUjuykg?si=ArP2LkxaVVrYXeBq', '4-bindo.png'),
(10, 'PA', '004', 'Pendidikan Agama Islam', '4', 'Mari Belajar Qur\'an Surat Al-Falaq', 'Al -Falaq artinya waktu subuh. Rasulullah saw. sering membaca surah ini, terutama ketika dalam perjalanan agar selalu terpelihara dari kejahatan.', 'https://youtu.be/BNIPnJMFnCs?si=AAQuOfxSnmCUmxCQ', '4-PAI.png'),
(11, 'MT', '004', 'Matematika', '4', 'Pecahan', 'Bilangan pecahan adalah bilangan yang tidak bulat dan berbentuk a/b, di mana a dan b adalah bilangan bulat dan b tidak sama dengan 0.', 'https://youtu.be/CuZkrtdplNg?si=TcAno35w8Vn-SV-0', '4-MTK.png'),
(12, 'IA', '005', 'Ilmu Pengetahuan Alam', '5', 'Alat Pernapasan Manusia', 'Alat pernapasan manusia terdiri dari beberapa bagian, mulai dari hidung dan mulut hingga paru-paru. Udara dihirup melalui hidung atau mulut, kemudian melewati saluran udara seperti tenggorokan dan laring. Setelah itu, udara masuk ke dalam trakea atau salu', 'https://youtu.be/eoi8rrH6rWU?si=b_eWp50Yp1WkoVM2', '5-IPA.png'),
(13, 'IS', '005', 'Ilmu Pengetahuan Sosial', '5', 'Peninggalan Sejarah Hindu-Buddha Islam', 'Indonesia memiliki warisan sejarah yang kaya dari berbagai periode, termasuk masa pengaruh kebudayaan Hindu-Buddha dan kemudian Islam. Beberapa peninggalan sejarahnya melibatkan situs-situs purbakala, struktur arsitektur, seni, dan naskah-naskah kuno.', 'https://youtu.be/PhH0dDVC7a8?si=K07gBinGvlok3weX', '5-IPS.png'),
(14, 'BI', '005', 'Bahasa Indonesia', '5', 'Peristiwa', 'Peristiwa adalah suatu kejadian atau kejadian yang terjadi pada suatu waktu tertentu dan tempat tertentu. Peristiwa dapat melibatkan berbagai aspek kehidupan, seperti politik, sosial, ekonomi, budaya, atau alam.', 'https://youtu.be/7gsUjTxiOT0?si=YcTaRJCblqmA99FC', '5-BINDO.png'),
(15, 'PA', '005', 'Pendidikan Agama Islam', '5', 'Mari Belajar Qur\'an Surat At-Tin', 'Surat ini menekankan pentingnya penciptaan manusia dalam bentuk yang sebaik-baiknya, tetapi juga mengingatkan bahwa manusia bisa jatuh ke tingkat yang paling rendah jika tidak bersyukur dan berbuat baik. Pada akhirnya, surat ini menyoroti keadilan Allah s', 'https://youtu.be/zMza4-1UQCM?si=qfopv7ruPkWDMYD0', '5-PAI.png'),
(16, 'MT', '005', 'Matematika', '5', 'Bilangan Bulat', 'Bilangan bulat adalah jenis bilangan yang melibatkan angka-angka tanpa desimal atau pecahan. Bilangan bulat mencakup bilangan positif, bilangan negatif, dan nol. Beberapa contoh bilangan bulat adalah 1, 0, -5, 100, -200, dan seterusnya.', 'https://youtu.be/-hudLTIDUXk?si=uux4m91N2EOT7BiT', '5-MTK.png'),
(17, 'IA', '006', 'Ilmu Pengetahuan Alam', '6', 'Ciri-Ciri Khusus Makhluk Hidup', 'Makhluk hidup memiliki ciri-ciri khusus yang membedakannya dari benda mati. Pertama, struktur dasar makhluk hidup terdiri dari sel-sel, unit kehidupan yang memungkinkan fungsi dan reproduksi.', 'https://youtu.be/4UpxuiiFy7Y?si=6EQuzzK24KWi9pPM', '6-IPA.png'),
(18, 'IS', '006', 'Ilmu Pengetahuan Sosial', '6', 'Perkembangan Wilayah dan Sistem Pemerintahan di In', 'Perkembangan wilayah dan sistem pemerintahan di Indonesia telah melibatkan sejarah panjang yang mencakup periode sebelum kemerdekaan hingga zaman modern.', 'https://youtu.be/PX3DibLDpsA?si=nif6bF6suAJRU7Ug', '6-IPS.png'),
(19, 'BI', '006', 'Bahasa Indonesia', '6', 'Tema Lingkungan', 'Lingkungan dapat diartikan sebagai segala sesuatu yang ada di sekitar suatu organisme atau suatu tempat, yang dapat memengaruhi kehidupan dan perkembangan organisme tersebut. Lingkungan mencakup unsur-unsur fisik, kimia, biologi, sosial, dan budaya yang m', 'https://youtu.be/tQmsa2oTDBo?si=ucRJD7WPInVAc0ux', '6-BINDO.png'),
(20, 'PA', '006', 'Pendidikan Agama Islam', '6', 'Indahnya Saling Menghormati', 'Indahnya saling menghormati terletak pada kemampuan untuk melihat nilai dan keunikan setiap individu tanpa memandang perbedaan. Saling menghormati menciptakan atmosfer yang penuh keberagaman, di mana setiap orang diakui, dihargai, dan diterima dengan sega', 'https://youtu.be/OdqQIXBF7_Y?si=pGtyUXnW47YiJYcC', '6-PAI.png'),
(21, 'MT', '006', 'Matematika', '6', 'Bilangan Bulat', 'Mempelajari cara menjumlahkan dan mengurangkan bilangan bulat, termasuk penggunaan tanda tambah dan tanda kurang.', 'https://youtu.be/nlTaS2DrueU?si=b0bURq_Ah6WNv0yH', '6-MTK.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `nama_game` varchar(255) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_invoice`, `id_game`, `nama_game`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 4, 'Super Mario Odyssey', 1, 600000, ''),
(2, 1, 5, 'Resident Evil 4', 1, 550000, ''),
(3, 1, 10, 'Litle Kitty Big City', 1, 600000, ''),
(4, 1, 11, 'Super Mario 3D World', 1, 600000, ''),
(5, 2, 5, 'Resident Evil 4', 1, 550000, ''),
(6, 2, 14, 'The Legend of Zelda: Breath of The Wild', 1, 600000, ''),
(7, 2, 12, 'The Legend of Zelda: Tears of The Kingdom', 1, 700000, ''),
(8, 3, 5, 'Resident Evil 4', 1, 550000, ''),
(9, 3, 12, 'The Legend of Zelda: Tears of The Kingdom', 1, 700000, ''),
(10, 3, 4, 'Super Mario Odyssey', 1, 600000, ''),
(11, 4, 4, 'Super Mario Odyssey', 1, 600000, ''),
(12, 4, 5, 'Resident Evil 4', 1, 550000, ''),
(13, 4, 12, 'The Legend of Zelda: Tears of The Kingdom', 1, 700000, ''),
(14, 5, 5, 'Resident Evil 4', 1, 550000, ''),
(15, 5, 11, 'Super Mario 3D World', 2, 600000, ''),
(16, 5, 10, 'Litle Kitty Big City', 2, 600000, ''),
(17, 5, 22, 'Outlast 2', 1, 500000, ''),
(18, 6, 4, 'Super Mario Odyssey', 1, 600000, ''),
(19, 6, 5, 'Resident Evil 4', 1, 550000, ''),
(20, 6, 12, 'The Legend of Zelda: Tears of The Kingdom', 1, 700000, ''),
(21, 6, 10, 'Litle Kitty Big City', 1, 600000, ''),
(22, 7, 5, 'Resident Evil 4', 2, 550000, ''),
(23, 7, 29, 'Samurai Maiden', 1, 800000, ''),
(24, 9, 4, 'Super Mario Odyssey', 1, 600000, ''),
(25, 9, 5, 'Resident Evil 4', 1, 550000, ''),
(26, 9, 29, 'Samurai Maiden', 1, 800000, ''),
(27, 9, 30, 'Batman: The Enemy Within', 1, 600000, ''),
(28, 10, 10, 'Litle Kitty Big City', 1, 600000, ''),
(29, 16, 5, 'Resident Evil 4', 1, 550000, ''),
(30, 16, 10, 'Litle Kitty Big City', 1, 600000, ''),
(31, 16, 14, 'The Legend of Zelda: Breath of The Wild', 1, 600000, ''),
(32, 16, 29, 'Samurai Maiden', 1, 800000, ''),
(33, 17, 4, 'Super Mario Odyssey', 1, 600000, ''),
(34, 17, 5, 'Resident Evil 4', 1, 550000, ''),
(35, 18, 4, 'Super Mario Odyssey', 1, 600000, ''),
(36, 18, 5, 'Resident Evil 4', 1, 550000, ''),
(37, 18, 10, 'Litle Kitty Big City', 1, 600000, ''),
(38, 18, 29, 'Samurai Maiden', 1, 800000, ''),
(39, 19, 4, 'Super Mario Odyssey', 2, 600000, ''),
(40, 19, 10, 'Litle Kitty Big City', 2, 600000, ''),
(41, 20, 4, 'Super Mario Odyssey', 1, 700000, ''),
(42, 21, 2, 'KOMPETEN', 2, 20000, ''),
(43, 22, 2, 'KOMPETEN', 3, 20000, ''),
(44, 22, 3, 'Detik Detik AAS', 3, 20000, ''),
(45, 23, 2, 'KOMPETEN', 1, 20000, ''),
(46, 24, 2, 'KOMPETEN', 1, 20000, ''),
(47, 25, 2, 'KOMPETEN', 5, 20000, ''),
(48, 25, 3, 'Detik Detik AAS', 2, 20000, ''),
(49, 26, 3, 'Detik Detik AAS', 1, 48000, ''),
(50, 27, 5, 'Bank Soal Smart Ujian Sekolah SD', 1, 51000, ''),
(51, 27, 4, 'injury time US USBN 2024', 2, 71000, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'mikasa', 'mikasa@gmail.com', 'default.jpg', '$2y$10$Sc/qFo2mnreGoHryxOufeuPHkPiyqppoPc7/KPgMHiN13GM8dHD8y', 2, 1, 1686025077),
(6, 'Ayanami Rei', 'ayanami@gmail.com', 'wallhaven-p9w673.jpg', '$2y$10$iIa0Rl2lTkJ76KODDrDHhe7FecHJzsutw9tJZMrwwA27BU5kU494a', 1, 1, 1686027030),
(7, 'Yasdi', 'yasdikharismawan5@gmail.com', 'Proyek_182.png', '$2y$10$9HB/93OmVeQoNXMXZnBT8.2XpJux6mgvQOuzp6BohTzVbRrjSI2iC', 2, 1, 1686729636),
(8, 'Zelda', 'zelda@gmail.com', 'shironeko.jpg', '$2y$10$6Mm7vRJVrp30CxzbCHjgQ.Y5L08uUAT/5WArmPNdLSGTsw4EHfGLq', 1, 1, 1698937903),
(9, 'Agnes ADMIN', 'agnes.gustyani72@gmail.com', 'd6a8fdb8e35feb9798b66371d6f42246.jpg', '$2y$10$1SoCWqBRkWc2ZRjHKipB.us4r0Lr1c8K3kDeP0AfqnXBiGSxWM9Wi', 1, 1, 1700046591),
(10, 'Agnes USER', 'useragnes@gmail.com', 'c10417d24d7d0c5e0841a8e893f170b8.jpg', '$2y$10$677ZsF69Hfu17K3m1vwDU.MmW7gx71YtYajGAdOZJ30OttOuscP6u', 2, 1, 1700111020);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(8, 2, 10),
(10, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(3, 'Menu'),
(10, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(10, 2, 'Games', 'test', 'fas fa-fw fa-gamepad', 1),
(14, 10, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(15, 10, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(17, 10, 'Home', 'user/home', 'fas fa-fw fa-home', 1),
(20, 1, 'Invoice', 'invoice/index', 'fas fa-fw fa-receipt', 1),
(22, 1, 'Buku Management', 'Buku/index', 'fas fa-fw Example of book fa-book', 1),
(23, 10, 'Beli Buku', 'user/beli_buku', 'fas fa-fw fa-shopping-cart', 1),
(24, 10, 'Materi Belajar', 'user/materi', 'fas fa-fw fa-file', 1),
(25, 1, 'Materi Management', 'Materi/index', 'fas fa-fw fa-table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

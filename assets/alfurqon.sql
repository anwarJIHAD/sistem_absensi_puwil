-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 03:04 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfurqon`
--

-- --------------------------------------------------------

--
-- Table structure for table `calonsiswa`
--

CREATE TABLE `calonsiswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calonsiswa`
--

INSERT INTO `calonsiswa` (`id_siswa`, `nama_lengkap`, `no_hp`, `username`, `password`) VALUES
(2, 'd', '8', 'd', 'd'),
(4, 'ff', '55', 'admin2', 'admin2'),
(11, 'da', '081374665318', 'marsuki19si@mahasiswa.pcr', '$2y$10$zjrketdu47vJB62O9J'),
(12, 'safas', '081374665318', 'qasfasdfs', '$2y$10$fG7laH/BSvfdhD/kIr'),
(13, 'Marsuki', '081374665318', '2e1sdascas', '$2y$10$grdLknCMg0MbbtCwgE'),
(14, 'Marsuki', '081374665318', 'anggiasad', '$2y$10$61BhxlwufBWJdm7jU0');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `Id_dokumen` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `akte` varchar(255) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `kip` varchar(255) NOT NULL,
  `pas_foto` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `pernyataan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ekskul`
--

CREATE TABLE `ekskul` (
  `id_ekskul` int(11) NOT NULL,
  `nama_ekskul` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekskul`
--

INSERT INTO `ekskul` (`id_ekskul`, `nama_ekskul`, `deskripsi`, `gambar`) VALUES
(10, 'Yasinan', 'Yasinan merupakan kegiatan yang dilakukan seluruh siswa setiap hari Jumat sebelum pelajaran dimulai. Hal ini sebagai bagian pendidikan karakter yang diterapkan madrasah kepada para siswa.', 'Yasinan.jpg'),
(11, 'Tahsin Al-Quran', 'Tahsin Merupakan Salah satu kegiatan ektrakurikuler keagamaan MTS Al- Furqon Raja Bejamu yang rutin dilaksanakan setiap sore hari.tahsin Qur\'an merupakan pembelajaran dimana para siswa diajarkan dasar-dasar tentang membaca Qur\'an seperti pengenalan huruf-huruf hijaiyah dan hukum-hukum tajwid agar siswa bisa membaca Al-Qur\'an dengan baik dan benar.', 'tahsin.jpeg'),
(12, 'Merawis', 'Ektrakurikuler Merawis merupakan salah satu ekstrakurikuler untuk mengembangkan bakat siswa dibidang alat musik merawis dan sholawatan. Ekstrakurikuler Merawis tersebut juga digunakan sebagai pengiring upacara hari– hari besar.', 'WhatsApp_Image_2023-01-10_at_12_03_26.jpeg'),
(13, 'Seni Tari', 'Ekstrakurikuler Seni Tari merupakan kegiatan Menari yang diajarkan di MTS Al-Furqon Raja Bejamu. Kegiatan ini diadakan untuk mengasah bakat siswa yang memiliki bakat dalam menari.', 'tari-MTs-N-1.jpg'),
(14, 'Pramuka', 'Gerakan pramuka merupakan salah satu ekstrakurikuler unggulan di MTS Al-Furqon Raja Bejamu.Sebagai salah satu organisasi pendidikan non-formal, gerakan pramuka MTS Alfurqon Raja Bejamu merupakan wadah pembentukan karakter peserta didik.', 'pramuka.jpeg'),
(15, 'OlahRaga', 'Ekstrakurikuler Olahraga MTS Al-Furqon Raja Bejamu terdiri dari 2 cabang Futsal dan Volly. Kedua cabang olahraga yang tergabung dalam 1 ekstrakurikuler ini dibina oleh Mustopo, S.Pdi. Beliau adalah guru muda pada mata pelajaran Olahraga di MTS Al-Furqon Raja Bejamu yang dipercaya memegang tugas tambahan tersebut.', 'futsal.jpg'),
(16, 'Senam Pagi', 'Senam Pagi merupakan kegiatan yang dilakukan seluruh siswa setiap hari Sabtu sebelum pelajaran dimulai. Hal ini dilakukan untuk menjaga kesegaran jasmani para siswa di sekolah dan merupakan salah satu aktifitas jasmani yang efektif untuk membantu pertumbuhan dan perkembangan siswa.', 'Senam-Bareng.jpg'),
(17, 'Gotong Royong', 'Kegiatan ini mengajarkan siswa tentang tanggung jawab dan etos kerja. Para siswa dibagi menjadi beberapa kelompok dan diberi tugas. Ada yang membersihkan sampah, ada yang meratakan tanah, dan ada yang membantu menyiapkan makanan untuk para relawan. Mereka bekerja sama dan mampu menyelesaikan tugas mereka dengan cepat.', 'gotong_royong.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `deskripsi`, `gambar`) VALUES
(6, 'Ruang Kelas', 'Ruang Kelas adalah suatu ruangan dalam bangunan sekolah, yang berfungsi sebagai tempat untuk kegiatan tatap muka dalam proses kegiatan belajar mengajar (KBM). Mebeler dalam ruangan ini terdiri dari meja siswa, kursi siswa, meja guru, lemari kelas, papan tulis, serta aksesoris ruangan lainnya yang sesuai. Ukuran yang umum adalah 9m x 8m. Ruang kelas memiliki syarat kelayakan dan standar tertentu, misalnya ukuran, pencahayaan alami, sirkulasi udara, dan persyaratan lainnya .', 'kelas.jpg'),
(8, 'Laboratorium Komputer', 'Lab Komputer merupakan fasilitas sekolah untuk menunjang proses terlaksananya belajar mengajar di sekolah. Lab Komputer sangat penting untuk proses belajar mengajar siswa karena Lab Komputer yang terhubung dengan internet dapat membantu para siswa dan siswi untuk mencari informasi untuk kebutuhan pembelajaran.', 'labkom.jpg'),
(9, 'Perpustakaan', 'Perpustakaan sekolah merupakan pusat sumber ilmu pengetahuan dan informasi yangberada di sekolah, baik tingkat dasar sampai dengan tingkat menengah. Perpustakaan sekolah harus dapat memainkan peran, khususnya dalam membantu siswa untuk mencapai tujuan pendidikan di sekolah.', 'Perputs.jpg'),
(10, 'Musholla', 'Peranan Mushola pada saat ini di sekolah sangat berperan untuk membina generasi yang madani, karena Mushola di samping sebagai sarana ukhuwah islamiyah juga sebagai sarana membantu pendidikan non formal yang memberi dampak positif kepada warga Sekolah dan masyarakat di lingkungan sekolah pada umumnya.', 'musholllaa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orangtua`
--

CREATE TABLE `orangtua` (
  `id_ortu` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nama_ayah` varchar(25) NOT NULL,
  `tempat_lahir_ayah` varchar(25) NOT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `pekerjaan_ayah` varchar(25) NOT NULL,
  `penghasilan_ayah` varchar(25) NOT NULL,
  `keterangan_ayah` varchar(25) NOT NULL,
  `nama_ibu` varchar(25) NOT NULL,
  `tempat_lahir_ibu` varchar(25) NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `pekerjaan_ibu` varchar(25) NOT NULL,
  `penghasilan_ibu` varchar(25) NOT NULL,
  `keterangan_ibu` varchar(25) NOT NULL,
  `alamat_ortu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nominal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `nisn` varchar(25) NOT NULL,
  `tempat_lahir` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `transportasi` varchar(50) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(25) NOT NULL,
  `alamat_pengguna` varchar(25) NOT NULL,
  `hp_pengguna` varchar(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `alamat_pengguna`, `hp_pengguna`, `username`, `password`, `level`) VALUES
(2, 'Marsuki', 'rohil', '0845674839', 'marsuki', '$2y$10$hg46.AWINTXnb84CUE', 'Calon');

-- --------------------------------------------------------

--
-- Table structure for table `periodik`
--

CREATE TABLE `periodik` (
  `id_periodik` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `jarak` int(11) NOT NULL,
  `anak` int(11) NOT NULL,
  `jumlah_saudara` int(11) NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nama_prestasi` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama_prestasi`, `deskripsi`, `gambar`) VALUES
(3, 'sfhgs', 'dhdah', 'WhatsApp-Image-2022-08-18-at-09_10_42-1024x576.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calonsiswa`
--
ALTER TABLE `calonsiswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`Id_dokumen`),
  ADD KEY `id_siswa2` (`id_siswa`);

--
-- Indexes for table `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`id_ekskul`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `orangtua`
--
ALTER TABLE `orangtua`
  ADD PRIMARY KEY (`id_ortu`),
  ADD KEY `id_siswa5` (`id_siswa`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_siswa4` (`id_siswa`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `periodik`
--
ALTER TABLE `periodik`
  ADD PRIMARY KEY (`id_periodik`),
  ADD KEY `id_siswa3` (`id_siswa`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calonsiswa`
--
ALTER TABLE `calonsiswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `Id_dokumen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `id_ekskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orangtua`
--
ALTER TABLE `orangtua`
  MODIFY `id_ortu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `periodik`
--
ALTER TABLE `periodik`
  MODIFY `id_periodik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `id_siswa2` FOREIGN KEY (`id_siswa`) REFERENCES `calonsiswa` (`id_siswa`);

--
-- Constraints for table `orangtua`
--
ALTER TABLE `orangtua`
  ADD CONSTRAINT `id_siswa5` FOREIGN KEY (`id_siswa`) REFERENCES `calonsiswa` (`id_siswa`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `id_siswa4` FOREIGN KEY (`id_siswa`) REFERENCES `calonsiswa` (`id_siswa`);

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `id_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `calonsiswa` (`id_siswa`);

--
-- Constraints for table `periodik`
--
ALTER TABLE `periodik`
  ADD CONSTRAINT `id_siswa3` FOREIGN KEY (`id_siswa`) REFERENCES `calonsiswa` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

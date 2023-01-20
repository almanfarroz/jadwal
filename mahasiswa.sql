-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 03:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `hari` varchar(50) DEFAULT NULL,
  `slot_waktu` varchar(50) DEFAULT NULL,
  `kelas` varchar(100) DEFAULT NULL,
  `dosen` varchar(50) DEFAULT NULL,
  `ruang` varchar(50) DEFAULT NULL,
  `mata_kuliah` varchar(50) DEFAULT NULL,
  `tahun_ajaran` varchar(50) DEFAULT NULL,
  `semester` varchar(50) DEFAULT NULL,
  `jumlah_jam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `hari`, `slot_waktu`, `kelas`, `dosen`, `ruang`, `mata_kuliah`, `tahun_ajaran`, `semester`, `jumlah_jam`) VALUES
(1, 'Senin', '07.30-08.20', 'TI 1A', 'Indra', 'AA302', 'Sistem Operasi', '2022/2023', '1', 4),
(2, 'Senin', '08.20-09.10', 'TI 1A', 'Indra', 'AA302', 'Sistem Operasi', '2022/2023', '1', 4),
(3, 'Senin', '09.10-10.00', 'TI 1A', 'Indra', 'AA302', 'Sistem Operasi', '2022/2023', '1', 4),
(4, 'Senin', '10.15-11.05', 'TI 1A', 'Indra', 'AA302', 'Sistem Operasi', '2022/2023', '1', 4),
(5, 'Senin', '11.05-11.55', 'TI 1A', 'Mera', 'AA302', 'Pengantar TIK', '2022/2023', '1', 4),
(6, 'Senin', '12.45-13.35', 'TI 1A', 'Mera', 'AA302', 'Pengantar TIK', '2022/2023', '1', 4),
(7, 'Senin', '13.35-14.25', 'TI 1A', 'Mera', 'AA302', 'Pengantar TIK', '2022/2023', '1', 4),
(8, 'Senin', '14.25-15.15', 'TI 1A', 'Mera', 'AA302', 'Pengantar TIK', '2022/2023', '1', 4),
(9, 'Selasa', '07.30-08.20', 'TI 1A', 'Ayres', 'GSG206', 'Pancasila', '2022/2023', '1', 2),
(10, 'Selasa', '08.20-09.10', 'TI 1A', 'Ayres', 'GSG206', 'Pancasila', '2022/2023', '1', 2),
(11, 'Selasa', '12.45-13.35', 'TI 1A', 'Dewi', 'GSG202', 'Bahasa Inggris TIK 1', '2022/2023', '1', 4),
(12, 'Selasa', '13.35-14.25', 'TI 1A', 'Dewi', 'GSG202', 'Bahasa Inggris TIK 1', '2022/2023', '1', 4),
(13, 'Selasa', '14.25-15.15', 'TI 1A', 'Ratna', 'GSG202', 'Bahasa Inggris TIK 1', '2022/2023', '1', 4),
(14, 'Selasa', '15.45-16.35', 'TI 1A', 'Ratna', 'GSG202', 'Bahasa Inggris TIK 1', '2022/2023', '1', 4),
(15, 'Rabu', '07.30-08.20', 'TI 1A', 'Irawati', 'GSG210', 'Organisasi dan Arsitektur Komputer', '2022/2023', '1', 4),
(16, 'Rabu', '08.20-09.10', 'TI 1A', 'Irawati', 'GSG210', 'Organisasi dan Arsitektur Komputer', '2022/2023', '1', 4),
(17, 'Rabu', '09.10-10.00', 'TI 1A', 'Irawati', 'GSG210', 'Organisasi dan Arsitektur Komputer', '2022/2023', '1', 4),
(18, 'Rabu', '10.15-11.05', 'TI 1A', 'Irawati', 'GSG210', 'Organisasi dan Arsitektur Komputer', '2022/2023', '1', 4),
(19, 'Rabu', '11.05-11.55', 'TI 1A', 'Euis', 'GSG207', 'Matematika Diskrit', '2022/2023', '1', 4),
(20, 'Rabu', '12.45-13.35', 'TI 1A', 'Euis', 'GSG207', 'Matematika Diskrit', '2022/2023', '1', 4),
(21, 'Rabu', '13.35-14.25', 'TI 1A', 'Euis', 'GSG207', 'Matematika Diskrit', '2022/2023', '1', 4),
(22, 'Rabu', '14.25-15.15', 'TI 1A', 'Euis', 'GSG207', 'Matematika Diskrit', '2022/2023', '1', 4),
(23, 'Kamis', '07.30-08.20', 'TI 1A', 'Adi', 'GSGlnt', 'Pendidikan Agama', '2022/2023', '1', 2),
(24, 'Kamis', '08.20-09.10', 'TI 1A', 'Adi', 'GSGlnt', 'Pendidikan Agama', '2022/2023', '1', 2),
(25, 'Kamis', '09.10-10.00', 'TI 1A', 'Yana', 'GSGlnt', 'Bahasa Indonesia', '2022/2023', '1', 2),
(26, 'Kamis', '10.15-11.05', 'TI 1A', 'Adi', 'GSGlnt', 'Bahasa Indonesia', '2022/2023', '1', 2),
(27, 'Jumat', '08.20-09.10', 'TI 1A', 'Rizki Elisa', 'AA304', 'Teknik Multimedia', '2022/2023', '1', 4),
(28, 'Jumat', '09.10-10.00', 'TI 1A', 'Rizki Elisa', 'AA304', 'Teknik Multimedia', '2022/2023', '1', 4),
(29, 'Jumat', '10.15-11.05', 'TI 1A', 'Heikal', 'AA304', 'Teknik Multimedia', '2022/2023', '1', 4),
(30, 'Jumat', '11.05-11.55', 'TI 1A', 'Heikal', 'AA304', 'Teknik Multimedia', '2022/2023', '1', 4),
(31, 'Jumat', '12.45-13.35', 'TI 1A', 'Maudy', 'AA303', 'Algoritma & Pemograman', '2022/2023', '1', 5),
(32, 'Jumat', '13.35-14.25', 'TI 1A', 'Maudy', 'AA303', 'Algoritma & Pemograman', '2022/2023', '1', 5),
(33, 'Jumat', '14.25-15.15', 'TI 1A', 'Maudy', 'AA303', 'Algoritma & Pemograman', '2022/2023', '1', 5),
(34, 'Jumat', '15.45-16.35', 'TI 1A', 'Maudy', 'AA303', 'Algoritma & Pemograman', '2022/2023', '1', 5),
(35, 'Jumat', '16.35-17.25', 'TI 1A', 'Maudy', 'AA303', 'Algoritma & Pemograman', '2022/2023', '1', 5),
(36, 'Senin', '11.05-11.55', 'TI 1B', 'Irawati', 'AA205', 'Arsitektur & Operasi Komputer', '2022/2023', '1', 4),
(37, 'Senin', '12.45-13.35', 'TI 1B', 'Irawati', 'AA205', 'Arsitektur & Operasi Komputer', '2022/2023', '1', 4),
(38, 'Senin', '13.35-14.25', 'TI 1B', 'Irawati', 'AA205', 'Arsitektur & Operasi Komputer', '2022/2023', '1', 4),
(39, 'Senin', '14.25-15.15', 'TI 1B', 'Irawati', 'AA205', 'Arsitektur & Operasi Komputer', '2022/2023', '1', 4),
(40, 'Selasa', '07.30-08.20', 'TI 1B', 'Hata', 'GSG206', 'Pancasila', '2022/2023', '1', 4),
(41, 'Selasa', '08.20-09.10', 'TI 1B', 'Hata', 'GSG206', 'Pancasila', '2022/2023', '1', 4),
(42, 'Selasa', '09.10-10.00', 'TI 1B', 'Hata', 'GSG206', 'Pancasila', '2022/2023', '1', 4),
(43, 'Selasa', '10.15-11.05', 'TI 1B', 'Hata', 'GSG206', 'Pancasila', '2022/2023', '1', 4),
(44, 'Selasa', '11.05-12.45', 'TI 1B', 'Rizki Elisa', 'GSG202', 'Bahasa Inggris TIK 1', '2022/2023', '1', 4),
(45, 'Selasa', '12.45-13.35', 'TI 1B', 'Rizki Elisa', 'GSG202', 'Bahasa Inggris TIK 1', '2022/2023', '1', 4),
(46, 'Selasa', '13.35-14.25', 'TI 1B', 'Heikal', 'GSG202', 'Bahasa Inggris TIK 1', '2022/2023', '1', 4),
(47, 'Selasa', '14.25-15.15', 'TI 1B', 'Heikal', 'GSG202', 'Bahasa Inggris TIK 1', '2022/2023', '1', 4),
(48, 'Rabu', '07.30-08.20', 'TI 1B', 'Dewi K', 'GSG211', 'Bahasa Inggris TIK 1', '2022/2023', '1', 4),
(49, 'Rabu', '08.20-09.10', 'TI 1B', 'Dewi K', 'GSG211', 'Bahasa Inggris TIK 1', '2022/2023', '1', 4),
(50, 'Rabu', '09.10-10.00', 'TI 1B', 'Ratna', 'GSG211', 'Bahasa Inggris TIK 1', '2022/2023', '1', 4),
(51, 'Rabu', '10.15-11.05', 'TI 1B', 'Ratna', 'GSG211', 'Bahasa Inggris TIK 1', '2022/2023', '3', 4),
(52, 'Rabu', '12.45-13.35', 'TI 1B', 'Yusuf', 'GSG206', 'Matematika Diskrit', '2022/2023', '1', 2),
(53, 'Rabu', '13.35-14.25', 'TI 1B', 'Yusuf', 'GSG206', 'Matematika Diskrit', '2022/2023', '1', 2),
(54, 'Kamis', '07.30-08.20', 'TI 1B', 'Agus', 'GSG212', 'Pendidikan Agama', '2022/2023', '1', 4),
(55, 'Kamis', '08.20-09.10', 'TI 1B', 'Agus', 'GSG212', 'Pendidikan Agama', '2022/2023', '1', 4),
(56, 'Kamis', '09.10-10.00', 'TI 1B', 'Agus', 'GSG212', 'Bahasa Indonesia', '2022/2023', '1', 4),
(57, 'Kamis', '10.15-11.05', 'TI 1B', 'Agus', 'GSG212', 'Bahasa Indonesia', '2022/2023', '1', 4),
(58, 'Kamis', '12.45-13.35', 'TI 1B', 'Anggi', 'AA303', 'Algoritma & Pemograman', '2022/2023', '1', 5),
(59, 'Kamis', '13.35-14.25', 'TI 1B', 'Anggi', 'AA303', 'Algoritma & Pemograman', '2022/2023', '1', 5),
(60, 'Kamis', '14.25-15.15', 'TI 1B', 'Anggi', 'AA303', 'Algoritma & Pemograman', '2022/2023', '1', 5),
(61, 'Kamis', '15.45-16.35', 'TI 1B', 'Anggi', 'AA303', 'Algoritma & Pemograman', '2022/2023', '1', 5),
(62, 'Kamis', '16.35-17.25', 'TI 1B', 'Anggi', 'AA303', 'Algoritma & Pemograman', '2022/2023', '1', 5),
(63, 'Jumat', '08.20-09.10', 'TI 1B', 'Linda', 'GSG220', 'Bahasa Indonesia', '2022/2023', '1', 2),
(64, 'Jumat', '09.10-10.00', 'TI 1B', 'Linda', 'GSG220', 'Bahasa Indonesia', '2022/2023', '1', 2),
(65, 'Jumat', '10.15-11.05', 'TI 1B', 'Dinda', 'GSG220', 'Pancasila', '2022/2023', '1', 2),
(66, 'Jumat', '11.05-11.55', 'TI 1B', 'Dinda', 'GSG220', 'Pancasila', '2022/2023', '1', 2),
(67, 'Jumat', '14.25-15.15', 'TI 1B', 'Bambang', 'GSG210', 'Algoritma & Pemograman', '2022/2023', '1', 4),
(68, 'Jumat', '15.45-16.35', 'TI 1B', 'Bambang', 'GSG210', 'Algoritma & Pemograman', '2022/2023', '1', 4),
(69, 'Jumat', '16.35-17.25', 'TI 1B', 'Bambang', 'GSG210', 'Algoritma & Pemograman', '2022/2023', '1', 4),
(70, 'Jumat', '17.25-18.15', 'TI 1B', 'Bambang', 'GSG210', 'Algoritma & Pemograman', '2022/2023', '1', 4),
(71, 'Senin', '07.30-08.20', 'TI 3A', 'Fachroni', 'GSG205', 'Sistem Terdistribusi', '2022/2023', '1', 4),
(72, 'Senin', '08.20-09.10', 'TI 3A', 'Fachroni', 'GSG205', 'Sistem Terdistribusi', '2022/2023', '1', 4),
(73, 'Senin', '09.10-10.00', 'TI 3A', 'Fachroni', 'GSG205', 'Sistem Terdistribusi', '2022/2023', '1', 4),
(74, 'Senin', '10.15-11.05', 'TI 3A', 'Fachroni', 'GSG205', 'Sistem Terdistribusi', '2022/2023', '1', 4),
(75, 'Senin', '13.35-14.25', 'TI 3A', 'Iik', 'AA304', 'Keamanan Informasi', '2022/2023', '3', 4),
(76, 'Senin', '14.25-15.15', 'TI 3A', 'Iik', 'AA304', 'Keamanan Informasi', '2022/2023', '3', 4),
(77, 'Senin', '15.45-16.35', 'TI 3A', 'Defiana', 'AA304', 'Keamanan Informasi', '2022/2023', '3', 4),
(78, 'Senin', '16.35-17.25', 'TI 3A', 'Defiana', 'AA304', 'Keamanan Informasi', '2022/2023', '3', 4),
(79, 'Selasa', '07.30-08.20', 'TI 3A', 'Asep', 'AA301', 'Pemrograman Web Lanjut', '2022/2023', '3', 4),
(80, 'Selasa', '08.20-09.10', 'TI 3A', 'Asep', 'AA301', 'Pemrograman Web Lanjut', '2022/2023', '3', 4),
(81, 'Selasa', '09.10-10.00', 'TI 3A', 'Asep', 'AA301', 'Pemrograman Web Lanjut', '2022/2023', '3', 4),
(82, 'Selasa', '10.15-11.05', 'TI 3A', 'Asep', 'AA301', 'Pemrograman Web Lanjut', '2022/2023', '1', 4),
(83, 'Selasa', '12.45-13.35', 'TI 3A', 'Euis', 'GSGlnt', 'Metode Numerik', '2022/2023', '3', 3),
(84, 'Selasa', '13.35-14.25', 'TI 3A', 'Euis', 'GSGlnt', 'Metode Numerik', '2022/2023', '3', 3),
(85, 'Selasa', '14.25-15.15', 'TI 3A', 'Euis', 'GSGlnt', 'Metode Numerik', '2022/2023', '3', 3),
(86, 'Rabu', '07.30-08.20', 'TI 3A', 'Basam', 'AA303', 'Pemrograman Visual', '2022/2023', '3', 4),
(87, 'Rabu', '08.20-09.10', 'TI 3A', 'Basam', 'AA303', 'Pemrograman Visual', '2022/2023', '3', 4),
(88, 'Rabu', '09.10-10.00', 'TI 3A', 'Basam', 'AA303', 'Pemrograman Visual', '2022/2023', '3', 4),
(89, 'Rabu', '10.15-11.05', 'TI 3A', 'Basam', 'AA303', 'Pemrograman Visual', '2022/2023', '3', 4),
(90, 'Rabu', '12.45-13.35', 'TI 3A', 'Bambang', 'GSG209', 'Manajemen Proyek', '2022/2023', '3', 4),
(91, 'Rabu', '13.35-14.25', 'TI 3A', 'Bambang', 'GSG209', 'Manajemen Proyek', '2022/2023', '3', 4),
(92, 'Rabu', '14.25-15.15', 'TI 3A', 'Bambang', 'GSG209', 'Manajemen Proyek', '2022/2023', '3', 4),
(93, 'Rabu', '15.45-16.35', 'TI 3A', 'Bambang', 'GSG209', 'Manajemen Proyek', '2022/2023', '3', 4),
(94, 'Kamis', '07.30-08.20', 'TI 3A', 'Risna', 'GSG202', 'Analisis Desain & Database', '2022/2023', '3', 4),
(95, 'Kamis', '08.20-09.10', 'TI 3A', 'Risna', 'GSG202', 'Analisis Desain & Database', '2022/2023', '3', 4),
(96, 'Kamis', '09.10-10.00', 'TI 3A', 'Risna', 'GSG202', 'Analisis Desain & Database', '2022/2023', '3', 4),
(97, 'Kamis', '10.15-11.05', 'TI 3A', 'Risna', 'GSG202', 'Analisis Desain & Database', '2022/2023', '3', 4),
(98, 'Kamis', '12.45-13.35', 'TI 3A', 'Iwan', 'GSG212', 'Desain UI/UX', '2022/2023', '3', 5),
(99, 'Kamis', '13.35-14.25', 'TI 3A', 'Iwan', 'GSG212', 'Desain UI/UX', '2022/2023', '3', 5),
(100, 'Kamis', '14.25-15.15', 'TI 3A', 'Iwan', 'GSG212', 'Desain UI/UX', '2022/2023', '3', 5),
(101, 'Kamis', '15.45-16.35', 'TI 3A', 'Iwan', 'GSG212', 'Desain UI/UX', '2022/2023', '3', 5),
(102, 'Jumat', '07.30-08.20', 'TI 3A', 'Maria', 'AA303', 'Pemrograman Basis Data', '2022/2023', '3', 4),
(103, 'Jumat', '08.20-09.10', 'TI 3A', 'Maria', 'AA303', 'Pemrograman Basis Data', '2022/2023', '3', 4),
(104, 'Jumat', '09.10-10.00', 'TI 3A', 'Maria', 'AA303', 'Pemrograman Basis Data', '2022/2023', '3', 4),
(105, 'Jumat', '10.15-11.05', 'TI 3A', 'Maria', 'AA303', 'Pemrograman Basis Data', '2022/2023', '3', 4),
(106, 'Jumat', '12.45-13.35', 'TI 3A', 'Anggi', 'GSG203', 'Grafika Komputer', '2022/2023', '3', 4),
(107, 'Jumat', '13.35-14.25', 'TI 3A', 'Anggi', 'GSG203', 'Grafika Komputer', '2022/2023', '3', 4),
(108, 'Jumat', '14.25-15.15', 'TI 3A', 'Anggi', 'GSG203', 'Grafika Komputer', '2022/2023', '3', 4),
(109, 'Jumat', '15.45-16.35', 'TI 3A', 'Anggi', 'GSG203', 'Grafika Komputer', '2022/2023', '3', 4),
(110, 'Senin', '07.30-08.20', 'TI 3B', 'Euis', 'GSG202', 'Metode Numerik', '2022/2023', '3', 4),
(111, 'Senin', '08.20-09.10', 'TI 3B', 'Euis', 'GSG202', 'Metode Numerik', '2022/2023', '3', 4),
(112, 'Senin', '09.10-10.00', 'TI 3B', 'Euis', 'GSG202', 'Metode Numerik', '2022/2023', '3', 4),
(113, 'Senin', '10.15-11.05', 'TI 3B', 'Euis', 'GSG202', 'Metode Numerik', '2022/2023', '3', 4),
(114, 'Senin', '13.35-14.25', 'TI 3B', 'Anita', 'GSG302', 'Analisi & Desain Sistem Informasi', '2022/2023', '3', 4),
(115, 'Senin', '14.25-15.15', 'TI 3B', 'Anita', 'GSG302', 'Analisi & Desain Sistem Informasi', '2022/2023', '3', 4),
(116, 'Senin', '15.45-16.35', 'TI 3B', 'Anita', 'GSG302', 'Analisi & Desain Sistem Informasi', '2022/2023', '3', 4),
(117, 'Senin', '16.35-17.25', 'TI 3B', 'Anita', 'GSG302', 'Analisi & Desain Sistem Informasi', '2022/2023', '3', 4),
(118, 'Selasa', '07.30-08.20', 'TI 3B', 'Fachroni', 'GSG207', 'Sistem Terdistribusi', '2022/2023', '3', 4),
(119, 'Selasa', '08.20-09.10', 'TI 3B', 'Fachroni', 'GSG207', 'Sistem Terdistribusi', '2022/2023', '3', 4),
(120, 'Selasa', '09.10-10.00', 'TI 3B', 'Fachroni', 'GSG207', 'Sistem Terdistribusi', '2022/2023', '3', 4),
(121, 'Selasa', '10.15-11.05', 'TI 3B', 'Fachroni', 'GSG207', 'Sistem Terdistribusi', '2022/2023', '1', 4),
(122, 'Selasa', '11.05-12.45', 'TI 3B', 'Risna', 'AA301', 'Pemrograman Basis Data', '2022/2023', '3', 4),
(123, 'Selasa', '12.45-13.35', 'TI 3B', 'Risna', 'AA301', 'Pemrograman Basis Data', '2022/2023', '3', 4),
(124, 'Selasa', '13.35-14.25', 'TI 3B', 'Risna', 'AA301', 'Pemrograman Basis Data', '2022/2023', '3', 4),
(125, 'Selasa', '14.25-15.15', 'TI 3B', 'Risna', 'AA301', 'Pemrograman Basis Data', '2022/2023', '3', 4),
(126, 'Rabu', '07.30-08.20', 'TI 3B', 'Mauldy', 'GSG208', 'Grafika Komputer', '2022/2023', '3', 4),
(127, 'Rabu', '08.20-09.10', 'TI 3B', 'Mauldy', 'GSG208', 'Grafika Komputer', '2022/2023', '3', 4),
(128, 'Rabu', '09.10-10.00', 'TI 3B', 'Mauldy', 'GSG208', 'Grafika Komputer', '2022/2023', '3', 4),
(129, 'Rabu', '10.15-11.05', 'TI 3B', 'Mauldy', 'GSG208', 'Grafika Komputer', '2022/2023', '3', 4),
(130, 'Rabu', '11.05-11.55', 'TI 3B', 'Iwan', 'GSG209', 'Desain UI/UX', '2022/2023', '3', 4),
(131, 'Rabu', '12.45-13.35', 'TI 3B', 'Iwan', 'GSG209', 'Desain UI/UX', '2022/2023', '3', 4),
(132, 'Rabu', '13.35-14.25', 'TI 3B', 'Iwan', 'GSG209', 'Desain UI/UX', '2022/2023', '3', 4),
(133, 'Rabu', '14.25-15.15', 'TI 3B', 'Iwan', 'GSG209', 'Desain UI/UX', '2022/2023', '3', 4),
(134, 'Kamis', '07.30-08.20', 'TI 3B', 'Anggi', 'AA304', 'Pemrograman Web Lanjut', '2022/2023', '3', 4),
(135, 'Kamis', '08.20-09.10', 'TI 3B', 'Anggi', 'AA304', 'Pemrograman Web Lanjut', '2022/2023', '3', 4),
(136, 'Kamis', '09.10-10.00', 'TI 3B', 'Anggi', 'AA304', 'Pemrograman Web Lanjut', '2022/2023', '3', 4),
(137, 'Kamis', '10.15-11.05', 'TI 3B', 'Anggi', 'AA304', 'Pemrograman Web Lanjut', '2022/2023', '3', 4),
(138, 'Kamis', '12.45-13.35', 'TI 3B', 'Bambang', 'AA304', 'Manajemen Proyek TI', '2022/2023', '3', 4),
(139, 'Kamis', '13.35-14.25', 'TI 3B', 'Bambang', 'AA304', 'Manajemen Proyek TI', '2022/2023', '3', 4),
(140, 'Kamis', '14.25-15.15', 'TI 3B', 'Rizki Elisa', 'AA304', 'Manajemen Proyek TI', '2022/2023', '3', 4),
(141, 'Kamis', '15.45-16.35', 'TI 3B', 'Rizki Elisa', 'AA304', 'Manajemen Proyek TI', '2022/2023', '3', 4),
(142, 'Jumat', '07.30-08.20', 'TI 3B', 'Basam', 'AA301', 'Pemrograman Visual', '2022/2023', '3', 4),
(143, 'Jumat', '08.20-09.10', 'TI 3B', 'Basam', 'AA301', 'Pemrograman Visual', '2022/2023', '3', 4),
(144, 'Jumat', '09.10-10.00', 'TI 3B', 'Basam', 'AA301', 'Pemrograman Visual', '2022/2023', '3', 4),
(145, 'Jumat', '10.15-11.05', 'TI 3B', 'Basam', 'AA301', 'Pemrograman Visual', '2022/2023', '3', 4),
(146, 'Jumat', '12.45-13.35', 'TI 3B', 'Iik', 'AA205', 'Keamanan Informasi', '2022/2023', '3', 4),
(147, 'Jumat', '13.35-14.25', 'TI 3B', 'Iik', 'AA205', 'Keamanan Informasi', '2022/2023', '3', 4),
(148, 'Jumat', '14.25-15.15', 'TI 3B', 'Defiana', 'AA205', 'Keamanan Informasi', '2022/2023', '3', 4),
(149, 'Jumat', '15.45-16.35', 'TI 3B', 'Defiana', 'AA205', 'Keamanan Informasi', '2022/2023', '3', 4),
(150, 'Senin', '07.30-08.20', 'TI 5B', 'Bambang', 'GSG210', 'E Business', '2022/2023', '5', 4),
(151, 'Senin', '08.20-09.10', 'TI 5B', 'Bambang', 'GSG210', 'E Business', '2022/2023', '5', 4),
(152, 'Senin', '09.10-10.00', 'TI 5B', 'Bambang', 'GSG210', 'E Business', '2022/2023', '5', 4),
(153, 'Senin', '10.15-11.05', 'TI 5B', 'Bambang', 'GSG210', 'E Business', '2022/2023', '5', 4),
(154, 'Senin', '11.05-11.55', 'TI 5B', 'Euis', 'GSG210', 'Probabilitas dan Statistik', '2022/2023', '5', 4),
(155, 'Senin', '12.45-13.35', 'TI 5B', 'Euis', 'GSG210', 'Probabilitas dan Statistik', '2022/2023', '5', 4),
(156, 'Senin', '13.35-14.25', 'TI 5B', 'Euis', 'GSG210', 'Probabilitas dan Statistik', '2022/2023', '5', 4),
(157, 'Senin', '14.25-15.15', 'TI 5B', 'Euis', 'GSG210', 'Probabilitas dan Statistik', '2022/2023', '5', 4),
(158, 'Selasa', '07.30-08.20', 'TI 5B', 'Syamsi', 'AA303', 'Pemrograman Web 2', '2022/2023', '5', 6),
(159, 'Selasa', '08.20-09.10', 'TI 5B', 'Syamsi', 'AA303', 'Pemrograman Web 2', '2022/2023', '5', 6),
(160, 'Selasa', '09.10-10.00', 'TI 5B', 'Syamsi', 'AA303', 'Pemrograman Web 2', '2022/2023', '5', 6),
(161, 'Selasa', '10.15-11.05', 'TI 5B', 'Syamsi', 'AA303', 'Pemrograman Web 2', '2022/2023', '5', 6),
(162, 'Selasa', '11.05-11.55', 'TI 5B', 'Syamsi', 'AA303', 'Pemrograman Web 2', '2022/2023', '5', 6),
(163, 'Selasa', '12.45-13.35', 'TI 5B', 'Syamsi', 'AA303', 'Pemrograman Web 2', '2022/2023', '5', 6),
(164, 'Selasa', '14.25-15.15', 'TI 5B', 'Hata', 'AA304', 'Perencanaan Strategi Sistem Informasi', '2022/2023', '5', 3),
(165, 'Selasa', '15.45-16.35', 'TI 5B', 'Hata', 'AA304', 'Perencanaan Strategi Sistem Informasi', '2022/2023', '5', 3),
(166, 'Selasa', '16.35-17.25', 'TI 5B', 'Hata', 'AA304', 'Perencanaan Strategi Sistem Informasi', '2022/2023', '5', 3),
(167, 'Rabu', '07.30-08.20', 'TI 5B', 'Iklima', 'GSG201', 'Penjaminan Kualitas Perangkat Lunak', '2022/2023', '5', 4),
(168, 'Rabu', '08.20-09.10', 'TI 5B', 'Iklima', 'GSG201', 'Penjaminan Kualitas Perangkat Lunak', '2022/2023', '5', 4),
(169, 'Rabu', '09.10-10.00', 'TI 5B', 'Iklima', 'GSG201', 'Penjaminan Kualitas Perangkat Lunak', '2022/2023', '5', 4),
(170, 'Rabu', '10.15-11.05', 'TI 5B', 'Iklima', 'GSG201', 'Penjaminan Kualitas Perangkat Lunak', '2022/2023', '5', 4),
(171, 'Rabu', '12.45-13.35', 'TI 5B', 'Asep', 'AA304', 'Sistem Pendukung Keputusan', '2022/2023', '5', 4),
(172, 'Rabu', '13.35-14.25', 'TI 5B', 'Asep', 'AA304', 'Sistem Pendukung Keputusan', '2022/2023', '5', 4),
(173, 'Rabu', '14.25-15.15', 'TI 5B', 'Asep', 'AA304', 'Sistem Pendukung Keputusan', '2022/2023', '5', 4),
(174, 'Rabu', '15.45-16.35', 'TI 5B', 'Asep', 'AA304', 'Sistem Pendukung Keputusan', '2022/2023', '5', 4),
(175, 'Kamis', '13.35-14.25', 'TI 5B', 'Hadi', 'AA304', 'Manajemen Proyek TI', '2022/2023', '5', 4),
(176, 'Kamis', '14.25-15.15', 'TI 5B', 'Hadi', 'AA304', 'Manajemen Proyek TI', '2022/2023', '5', 4),
(177, 'Kamis', '15.45-16.35', 'TI 5B', 'Hadi', 'AA304', 'Manajemen Proyek TI', '2022/2023', '5', 4),
(178, 'Kamis', '16.35-17.25', 'TI 5B', 'Hadi', 'AA304', 'Manajemen Proyek TI', '2022/2023', '5', 4),
(179, 'Jumat', '07.30-08.20', 'TI 5B', 'Fitri', 'GSG206', 'Bahasa Inggris Komunikasi 2', '2022/2023', '5', 3),
(180, 'Jumat', '08.20-09.10', 'TI 5B', 'Fitri', 'GSG206', 'Bahasa Inggris Komunikasi 2', '2022/2023', '5', 3),
(181, 'Jumat', '09.10-10.00', 'TI 5B', 'Fitri', 'GSG206', 'Bahasa Inggris Komunikasi 2', '2022/2023', '5', 3),
(182, 'Jumat', '12.45-13.35', 'TI 5B', 'Mera', 'AA304', 'Pembelajaran Mesin', '2022/2023', '5', 4),
(183, 'Jumat', '13.35-14.25', 'TI 5B', 'Mera', 'AA304', 'Pembelajaran Mesin', '2022/2023', '5', 4),
(184, 'Jumat', '14.25-15.15', 'TI 5B', 'Mera', 'AA304', 'Pembelajaran Mesin', '2022/2023', '5', 4),
(185, 'Jumat', '15.45-16.35', 'TI 5B', 'Mera', 'AA304', 'Pembelajaran Mesin', '2022/2023', '5', 4),
(186, 'Senin', '12.45-13.35', 'TI 5A', 'Mauldy', 'GSG208', 'Penjaminan Kualitas Perangkat Lunak', '2022/2023', '5', 4),
(187, 'Senin', '13.35-14.25', 'TI 5A', 'Mauldy', 'GSG208', 'Penjaminan Kualitas Perangkat Lunak', '2022/2023', '5', 4),
(188, 'Senin', '14.25-15.15', 'TI 5A', 'Heikal', 'GSG208', 'Penjaminan Kualitas Perangkat Lunak', '2022/2023', '5', 4),
(189, 'Senin', '15.45-16.35', 'TI 5A', 'Heikal', 'GSG208', 'Penjaminan Kualitas Perangkat Lunak', '2022/2023', '5', 4),
(190, 'Selasa', '07.30-08.20', 'TI 5A', 'Mera', 'GSG208', 'Probabilitas dan Statistik', '2022/2023', '5', 4),
(191, 'Selasa', '08.20-09.10', 'TI 5A', 'Mera', 'GSG208', 'Probabilitas dan Statistik', '2022/2023', '5', 4),
(192, 'Selasa', '09.10-10.00', 'TI 5A', 'Mera', 'GSG208', 'Probabilitas dan Statistik', '2022/2023', '5', 4),
(193, 'Selasa', '10.15-11.05', 'TI 5A', 'Mera', 'GSG208', 'Probabilitas dan Statistik', '2022/2023', '5', 4),
(194, 'Selasa', '11.05-11.55', 'TI 5A', 'Bambang', 'GSG208', 'E Bisnis', '2022/2023', '5', 4),
(195, 'Selasa', '12.45-13.35', 'TI 5A', 'Bambang', 'GSG208', 'E Bisnis', '2022/2023', '5', 4),
(196, 'Selasa', '13.35-14.25', 'TI 5A', 'Bambang', 'GSG208', 'E Bisnis', '2022/2023', '5', 4),
(197, 'Selasa', '14.25-15.15', 'TI 5A', 'Bambang', 'GSG208', 'E Bisnis', '2022/2023', '5', 4),
(198, 'Rabu', '07.30-08.20', 'TI 5A', 'Hata', 'AA304', 'Perencanaan Strategis Sistem Informasi', '2022/2023', '5', 3),
(199, 'Rabu', '08.20-09.10', 'TI 5A', 'Hata', 'AA304', 'Perencanaan Strategis Sistem Informasi', '2022/2023', '5', 3),
(200, 'Rabu', '09.10-10.00', 'TI 5A', 'Hata', 'AA304', 'Perencanaan Strategis Sistem Informasi', '2022/2023', '5', 3),
(201, 'Rabu', '11.05-11.55', 'TI 5A', 'Anggi', 'AA303', 'Pemrograman Web 2', '2022/2023', '5', 6),
(202, 'Rabu', '12.45-13.35', 'TI 5A', 'Anggi', 'AA303', 'Pemrograman Web 2', '2022/2023', '5', 6),
(203, 'Rabu', '13.35-14.25', 'TI 5A', 'Anggi', 'AA303', 'Pemrograman Web 2', '2022/2023', '5', 6),
(204, 'Rabu', '14.25-15.15', 'TI 5A', 'Anggi', 'AA303', 'Pemrograman Web 2', '2022/2023', '5', 6),
(205, 'Rabu', '15.45-16.35', 'TI 5A', 'Anggi', 'AA303', 'Pemrograman Web 2', '2022/2023', '5', 6),
(206, 'Rabu', '16.35-17.25', 'TI 5A', 'Anggi', 'AA303', 'Pemrograman Web 2', '2022/2023', '5', 6),
(207, 'Selasa', '07.30-08.20', 'TI 5A', 'Iklima', 'GSG211', 'Sistem Pendukung Keputusan', '2022/2023', '5', 4),
(208, 'Selasa', '08.20-09.10', 'TI 5A', 'Iklima', 'GSG211', 'Sistem Pendukung Keputusan', '2022/2023', '5', 4),
(209, 'Selasa', '09.10-10.00', 'TI 5A', 'Iklima', 'GSG211', 'Sistem Pendukung Keputusan', '2022/2023', '5', 4),
(210, 'Selasa', '10.15-11.05', 'TI 5A', 'Iklima', 'GSG211', 'Sistem Pendukung Keputusan', '2022/2023', '5', 4),
(211, 'Selasa', '12.45-13.35', 'TI 5A', 'Dewiyanti', 'AA301', 'Pembelajaran Mesin', '2022/2023', '5', 4),
(212, 'Selasa', '13.35-14.25', 'TI 5A', 'Dewiyanti', 'AA301', 'Pembelajaran Mesin', '2022/2023', '5', 4),
(213, 'Selasa', '14.25-15.15', 'TI 5A', 'Dewiyanti', 'AA301', 'Pembelajaran Mesin', '2022/2023', '5', 4),
(214, 'Selasa', '15.45-16.35', 'TI 5A', 'Dewiyanti', 'AA301', 'Pembelajaran Mesin', '2022/2023', '5', 4),
(215, 'Rabu', '11.05-11.55', 'TI 5A', 'Dewi K', 'GSGInt', 'Bahasa Inggris Komunikasi 2', '2022/2023', '5', 3),
(216, 'Rabu', '12.45-13.35', 'TI 5A', 'Dewi K', 'GSGInt', 'Bahasa Inggris Komunikasi 2', '2022/2023', '5', 3),
(217, 'Rabu', '13.35-14.25', 'TI 5A', 'Dewi K', 'GSGInt', 'Bahasa Inggris Komunikasi 2', '2022/2023', '5', 3),
(218, 'Rabu', '14.25-15.15', 'TI 5A', 'Risna', 'GSGInt', 'Manajemen Proyek TIK', '2022/2023', '5', 4),
(219, 'Rabu', '15.45-16.35', 'TI 5A', 'Risna', 'GSGInt', 'Manajemen Proyek TIK', '2022/2023', '5', 4),
(220, 'Rabu', '16.35-17.25', 'TI 5A', 'Rizki Elisa', 'GSGInt', 'Manajemen Proyek TIK', '2022/2023', '5', 4),
(221, 'Rabu', '17.25-18.15', 'TI 5A', 'Rizki Elisa', 'GSGInt', 'Manajemen Proyek TIK', '2022/2023', '5', 4),
(222, 'Sabtu', '07.30-08.20', 'TI 7A', 'Mauldy', 'AA304', 'Kapita Selekta 1', '2022/2023', '7', 6),
(223, 'Sabtu', '08.20-09.10', 'TI 7A', 'Mauldy', 'AA304', 'Kapita Selekta 1', '2022/2023', '7', 6),
(224, 'Sabtu', '09.10-10.00', 'TI 7A', 'Mauldy', 'AA304', 'Kapita Selekta 1', '2022/2023', '7', 6),
(225, 'Sabtu', '10.15-11.05', 'TI 7A', 'Mauldy', 'AA304', 'Kapita Selekta 1', '2022/2023', '7', 6),
(226, 'Sabtu', '11.05-11.55', 'TI 7A', 'Mauldy', 'AA304', 'Kapita Selekta 1', '2022/2023', '7', 6),
(227, 'Sabtu', '12.45-13.35', 'TI 7A', 'Mauldy', 'AA304', 'Kapita Selekta 1', '2022/2023', '7', 6),
(228, 'Sabtu', '13.35-14.25', 'TI 7A', 'Risna', 'AA304', 'Seminar', '2022/2023', '7', 6),
(229, 'Sabtu', '14.25-15.15', 'TI 7A', 'Risna', 'AA304', 'Seminar', '2022/2023', '7', 6),
(230, 'Sabtu', '15.45-16.35', 'TI 7A', 'Risna', 'AA304', 'Seminar', '2022/2023', '7', 6),
(231, 'Sabtu', '16.35-17.25', 'TI 7A', 'Risna', 'AA304', 'Seminar', '2022/2023', '7', 6),
(232, 'Sabtu', '17.25-18.15', 'TI 7A', 'Risna', 'AA304', 'Seminar', '2022/2023', '7', 6),
(233, 'Sabtu', '18.45-19.25', 'TI 7A', 'Risna', 'AA304', 'Seminar', '2022/2023', '7', 6),
(234, 'Sabtu', '07.30-08.20', 'TI 7B', 'Iklima', 'AA204', 'Kapita Selekta 1', '2022/2023', '7', 6),
(235, 'Sabtu', '08.20-09.10', 'TI 7B', 'Iklima', 'AA204', 'Kapita Selekta 1', '2022/2023', '7', 6),
(236, 'Sabtu', '09.10-10.00', 'TI 7B', 'Iklima', 'AA204', 'Kapita Selekta 1', '2022/2023', '7', 6),
(237, 'Sabtu', '10.15-11.05', 'TI 7B', 'Iklima', 'AA204', 'Kapita Selekta 1', '2022/2023', '7', 6),
(238, 'Sabtu', '11.05-11.55', 'TI 7B', 'Iklima', 'AA204', 'Kapita Selekta 1', '2022/2023', '7', 6),
(239, 'Sabtu', '12.45-13.35', 'TI 7B', 'Iklima', 'AA204', 'Kapita Selekta 1', '2022/2023', '7', 6),
(240, 'Sabtu', '13.35-14.25', 'TI 7B', 'Asep', 'AA204', 'Seminar', '2022/2023', '7', 6),
(241, 'Sabtu', '14.25-15.15', 'TI 7B', 'Asep', 'AA204', 'Seminar', '2022/2023', '7', 6),
(242, 'Sabtu', '15.45-16.35', 'TI 7B', 'Asep', 'AA204', 'Seminar', '2022/2023', '7', 6),
(243, 'Sabtu', '16.35-17.25', 'TI 7B', 'Asep', 'AA204', 'Seminar', '2022/2023', '7', 6),
(244, 'Sabtu', '17.25-18.15', 'TI 7B', 'Asep', 'AA204', 'Seminar', '2022/2023', '7', 6),
(245, 'Sabtu', '18.45-19.25', 'TI 7B', 'Asep', 'AA204', 'Seminar', '2022/2023', '7', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'user', 'user@gmail.com', 'f67c683f0f3e98cb9dd5582e8cbbcd04'),
(2, 'alman', 'alman.farroz@gmail.com', 'c98a9bb0ae52e52ce96985f7398f268b'),
(3, 'fahmi', 'fahmi@gmail.com', 'f11d50d63d3891a44c332e46d6d7d561');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

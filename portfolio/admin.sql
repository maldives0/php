-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 20-10-08 11:26
-- 서버 버전: 10.3.15-MariaDB
-- PHP 버전: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `cafe`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `admin`
--

CREATE TABLE `admin` (
  `num` int(11) NOT NULL,
  `id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pw` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 테이블의 덤프 데이터 `admin`
--

INSERT INTO `admin` (`num`, `id`, `pw`) VALUES
(9, 'dd', 'dd'),
(10, 'dd', 'dd'),
(11, 'dd', 'dd'),
(12, 'dd', 'dd'),
(13, 'dd', 'dd'),
(14, 'dd', 'dd'),
(15, 'dd1', 'dd2'),
(16, '', '');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

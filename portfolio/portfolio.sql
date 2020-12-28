-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 20-10-08 11:07
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
-- 테이블 구조 `portfolio`
--

CREATE TABLE `portfolio` (
  `num` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imgs` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `start` text COLLATE utf8_unicode_ci NOT NULL,
  `finish` text COLLATE utf8_unicode_ci NOT NULL,
  `txt` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 테이블의 덤프 데이터 `portfolio`
--

INSERT INTO `portfolio` (`num`, `name`, `type`, `imgs`, `url`, `start`, `finish`, `txt`) VALUES
(1, 'daon renewal project', 'web', 'img/project1.png', 'https://maldives0.github.io/project1/', '2020-06', '2020-09', '힐링 페이지');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

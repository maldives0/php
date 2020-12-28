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
-- 테이블 구조 `contact`
--

CREATE TABLE `contact` (
  `num` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 테이블의 덤프 데이터 `contact`
--

INSERT INTO `contact` (`num`, `name`, `email`, `message`) VALUES
(4, 'k@naver.com', '', 'gkgkkgkgk'),
(5, '', '', ''),
(6, 'kkk@naver.com', '', 'ㅇㅇㅇ'),
(7, '', '', ''),
(8, '궁금해', 'kkk@naver.com', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', '');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `contact`
--
ALTER TABLE `contact`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

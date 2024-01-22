-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 20 2024 г., 14:47
-- Версия сервера: 10.7.5-MariaDB
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nurex`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(25) NOT NULL DEFAULT '0',
  `password` varchar(32) NOT NULL DEFAULT '0',
  `rights` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `imname` varchar(100) NOT NULL DEFAULT '0',
  `ism` varchar(30) NOT NULL DEFAULT '0',
  `fam` varchar(30) NOT NULL DEFAULT '0',
  `tel` varchar(15) NOT NULL DEFAULT '0',
  `failed_login` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `ip` bigint(20) NOT NULL DEFAULT 0,
  `ip_via_proxy` bigint(20) NOT NULL DEFAULT 0,
  `browser` varchar(999) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT 1,
  `reg_sana` varchar(255) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `rights`, `imname`, `ism`, `fam`, `tel`, `failed_login`, `ip`, `ip_via_proxy`, `browser`, `status`, `reg_sana`, `time`) VALUES
(1, 'admin', '14e1b600b1fd579f47433b88e8d85291', 9, '0', '0', '0', '0', 0, 0, 0, '0', 1, '05.02.2023', 1675571353);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

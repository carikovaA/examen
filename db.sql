-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 19 2024 г., 10:08
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `examen`
--

-- --------------------------------------------------------
--
-- Структура таблицы `doljnost`
--

CREATE TABLE `doljnost` (
  `id_doljnosty` int(10) NOT NULL,
  `nazvanie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `doljnost`
--

INSERT INTO `doljnost` (`id_doljnosty`, `nazvanie`) VALUES
(1, 'master');

--
-- Индексы таблицы `doljnost`
--
ALTER TABLE `doljnost`
  ADD PRIMARY KEY (`id_doljnosty`);


--
-- AUTO_INCREMENT для таблицы `doljnost`
--
ALTER TABLE `doljnost`
  MODIFY `id_doljnosty` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

--
-- Структура таблицы `sotrydnik`
--

CREATE TABLE `sotrydnik` (
  `id_sotrydnika` int(10) NOT NULL,
  `imya` varchar(50) NOT NULL,
  `familia` varchar(50) NOT NULL,
  `id_doljnosty` int NOT NULL,
  `login` varchar(50) NOT NULL,
  `parol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `sotrydnik`
--

INSERT INTO `sotrydnik` (`id_sotrydnika`, `imya`, `familia`, `id_doljnosty`, `login`, `parol`) VALUES
(1, 'Ivan', 'Ivanovich', 1, 123, 123);

-- --------------------------------------------------------


--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `sotrydnik`
--
ALTER TABLE `sotrydnik`
  ADD PRIMARY KEY (`id_sotrydnika`);


--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `sotrydnik`
--
ALTER TABLE `sotrydnik`
  MODIFY `id_sotrydnika` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

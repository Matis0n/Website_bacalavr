-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 09 2022 г., 20:41
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `s2021_sauresr1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `grafick`
--

CREATE TABLE `grafick` (
  `id` int NOT NULL,
  `param` int NOT NULL,
  `data` date NOT NULL,
  `pokazanie` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `grafick`
--

INSERT INTO `grafick` (`id`, `param`, `data`, `pokazanie`) VALUES
(159, 1, '2022-11-10', 16),
(160, 1, '2022-11-11', 18),
(161, 1, '2022-11-12', 25),
(162, 1, '2022-11-13', 24),
(163, 1, '2022-11-14', 18),
(164, 1, '2022-11-15', 33),
(165, 1, '2022-11-16', 24),
(166, 1, '2022-11-17', 16),
(167, 1, '2022-11-18', 24),
(168, 1, '2022-11-19', 26),
(169, 2, '2022-11-10', 22),
(170, 2, '2022-11-11', 23),
(171, 2, '2022-11-12', 26),
(172, 2, '2022-11-13', 26),
(173, 2, '2022-11-14', 38),
(174, 2, '2022-11-15', 21),
(175, 2, '2022-11-16', 14),
(176, 2, '2022-11-17', 15),
(177, 2, '2022-11-18', 24),
(178, 2, '2022-11-19', 20),
(179, 2, '2022-11-10', 29),
(180, 2, '2022-11-11', 33),
(181, 2, '2022-11-12', 27),
(182, 2, '2022-11-13', 29),
(183, 2, '2022-11-14', 29),
(184, 2, '2022-11-15', 30),
(185, 2, '2022-11-16', 29),
(186, 2, '2022-11-17', 17),
(187, 2, '2022-11-18', 26),
(188, 2, '2022-11-19', 21),
(189, 2, '2022-11-10', 17),
(190, 2, '2022-11-11', 27),
(191, 2, '2022-11-12', 20),
(192, 2, '2022-11-13', 29),
(193, 2, '2022-11-14', 29),
(194, 2, '2022-11-15', 30),
(195, 2, '2022-11-16', 29),
(196, 2, '2022-11-17', 17),
(197, 2, '2022-11-18', 26),
(198, 2, '2022-11-19', 21),
(199, 1, '2022-11-10', 31),
(200, 1, '2022-11-11', 16),
(201, 1, '2022-11-12', 35),
(202, 1, '2022-11-13', 29),
(203, 1, '2022-11-14', 29),
(204, 1, '2022-11-15', 30),
(205, 1, '2022-11-16', 29),
(206, 1, '2022-11-17', 17),
(207, 1, '2022-11-18', 26),
(208, 1, '2022-11-19', 21),
(209, 1, '2022-11-10', 24),
(210, 1, '2022-11-11', 38),
(211, 1, '2022-11-12', 19),
(212, 1, '2022-11-13', 29),
(213, 1, '2022-11-14', 29),
(214, 1, '2022-11-15', 30),
(215, 1, '2022-11-16', 29),
(216, 1, '2022-11-17', 17),
(217, 1, '2022-11-18', 26),
(218, 1, '2022-11-19', 21),
(219, 2, '2022-11-10', 11),
(220, 2, '2022-11-11', 39),
(221, 2, '2022-11-12', 28),
(222, 2, '2022-11-13', 29),
(223, 2, '2022-11-14', 29),
(224, 2, '2022-11-15', 30),
(225, 2, '2022-11-16', 29),
(226, 2, '2022-11-17', 17),
(227, 2, '2022-11-18', 26),
(228, 2, '2022-11-19', 21);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `grafick`
--
ALTER TABLE `grafick`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `grafick`
--
ALTER TABLE `grafick`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
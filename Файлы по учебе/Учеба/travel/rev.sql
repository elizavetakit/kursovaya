-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 21 2021 г., 19:30
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `travel_life`
--

-- --------------------------------------------------------

--
-- Структура таблицы `rev`
--

CREATE TABLE `rev` (
  `id` int NOT NULL,
  `FIO` text NOT NULL,
  `Mail` text NOT NULL,
  `Number_phone` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Rev_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rev`
--

INSERT INTO `rev` (`id`, `FIO`, `Mail`, `Number_phone`, `Rev_text`) VALUES
(1, 'Китаева Елизавета Евгеньевна', 'lizakeat@mail.ru', '+7(953) 772-22-93', 'tfyuftuyftyuf');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `rev`
--
ALTER TABLE `rev`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `rev`
--
ALTER TABLE `rev`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

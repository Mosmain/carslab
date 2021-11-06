-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 06 2021 г., 17:04
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cars_lab_02`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id` int NOT NULL,
  `brand_name` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `color` varchar(25) NOT NULL,
  `doors` int NOT NULL,
  `weight` int NOT NULL,
  `hp` int NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id`, `brand_name`, `color`, `doors`, `weight`, `hp`, `created`, `modified`) VALUES
(1, 'заз', 'голубой', 4, 700, 30, NULL, '2021-10-13 11:27:12'),
(2, 'mercedes-benz', 'черный', 4, 2100, 600, NULL, NULL),
(7, 'Волга', 'Черный', 4, 2300, 145, '2021-09-25 16:26:15', '2021-09-25 23:08:50'),
(18, 'Газ', 'Черный', 4, 2400, 320, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `pos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `pos`) VALUES
(1, 'Иван', 'Иванов', 'Менеджер'),
(2, 'Петр', 'Петров', 'Сисадмин'),
(3, 'Сара', 'Конор', 'Бухгалтер'),
(4, 'Федор', 'Федоров', 'Архитектор'),
(5, 'Алексей', 'Алексеев', 'Оператор'),
(6, 'Марина', 'Маринина', 'Менеджер'),
(7, 'Михаил', 'Михайлов', 'Директор'),
(8, 'Владислав', 'Валдаев', 'Водитель'),
(9, 'Валентина', 'Иванова', 'Художник'),
(10, 'Владислав', 'Валдаев', 'Водитель');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 27 2024 г., 14:58
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `CRM`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `surname` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathersname` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(1111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `targets` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`surname`, `name`, `fathersname`, `phone`, `email`, `targets`) VALUES
('123', '123', '123', '123', '123', '');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(255) NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `worker` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `date`, `worker`, `client`) VALUES
(1, '123', '312', '1323-03-23', '312312', ''),
(2, '321', '123', '2222-02-22', 'qweqwe', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `login` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_Admin` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `email`, `number`, `is_Admin`) VALUES
(6, 'root', 'ab6TRGT20sY26', 'root', 'root@mail.ru', '8914111111111', 'on');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

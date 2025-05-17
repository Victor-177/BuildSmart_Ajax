-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Апр 15 2025 г., 22:04
-- Версия сервера: 8.0.35
-- Версия PHP: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `buildsmart_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image_url`, `created_at`) VALUES
(1, 'Ремонт дома', 'Очень крутой ремонт', 'https://www.prorabneva.ru/storage/post_content/November2021/jKjHXtZ22sauIzRIjxGr.jpg', '2025-04-16 01:00:34');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

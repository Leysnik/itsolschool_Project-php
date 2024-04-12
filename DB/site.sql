-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 28 2021 г., 11:32
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `trololo_admin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `employers`
--
-- Создание: Июн 05 2021 г., 18:22
-- Последнее обновление: Июл 28 2021 г., 08:31
--

DROP TABLE IF EXISTS `employers`;
CREATE TABLE `employers` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `Birth` date NOT NULL,
  `Education` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Social` varchar(100) NOT NULL,
  `Meetday` date NOT NULL,
  `Testtime` date NOT NULL,
  `Datevacantion` date NOT NULL,
  `Comment` text NOT NULL,
  `pinned` tinyint(1) NOT NULL,
  `resume` text NOT NULL,
  `testWork` text NOT NULL,
  `Instagram` text NOT NULL,
  `VK` text NOT NULL,
  `Work` text NOT NULL,
  `EducatePlace` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
-- Создание: Июн 05 2021 г., 18:22
-- Последнее обновление: Июл 28 2021 г., 08:31
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Login` varchar(30) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Grant` tinyint(1) NOT NULL,
  `Name` text NOT NULL,
  `Surname` text NOT NULL,
  `Lastname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `Login`, `Pass`, `Grant`, `Name`, `Surname`, `Lastname`) VALUES
(18, 'sssss', 'e341288809016bb5f2daff0bde7802b7', 1, 'Admin', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `work`
--
-- Создание: Июн 05 2021 г., 18:22
-- Последнее обновление: Июл 28 2021 г., 08:32
--

DROP TABLE IF EXISTS `work`;
CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `Work` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

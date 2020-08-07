-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 07 2020 г., 17:21
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2-starter-kit`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `auth_key` varchar(32) NOT NULL,
  `access_token` varchar(40) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `oauth_client` varchar(255) DEFAULT NULL,
  `oauth_client_user_id` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '2',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `logged_at` int(11) DEFAULT NULL,
  `office_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `access_token`, `password_hash`, `oauth_client`, `oauth_client_user_id`, `email`, `status`, `created_at`, `updated_at`, `logged_at`, `office_id`) VALUES
(1, 'webmaster', 'iPaeWTHmxrkLe-Cyqn6vZvpCntALXOQZ', '8Z5M4WqddzTU2ROMxrI8Effe8X7KIH_eyFaeq00J', '$2y$13$e/zYvmdjhEJREQ02b0gTkubMeIHEUC/bTcQcfwQrzro4sOdqLMB/G', NULL, NULL, 'webmaster@example.com', 2, 1596661527, 1596803439, 1596805953, 3),
(2, 'manager', 'XpAnvAEzA5tpWRGBqjYE2Z1jk4cOJTMl', 'iSk7G0j-m5EHGHFo7DxsKrfdYLYqU6MXcJAdM7oV', '$2y$13$XvXhMs0QwsZNQa.gRkp03OsNll1VanslJQObYXYUdmyPjwE6MpuSO', NULL, NULL, 'manager@example.com', 2, 1596661528, 1596803454, 1596663163, 2),
(3, 'user', '3OSxeXG113Dx7BWd9GGv4NumSsbLJvRo', 'oJzoaeKFMc8PBbKWTdI3o5cNzs_bb5EDAdF4-mbc', '$2y$13$xJO/LIW3q1t5lr3pMymk8ucFmp3OvcE2LGGhtunrrS1FyALLZQ./u', NULL, NULL, 'user@example.com', 2, 1596661529, 1596807494, 1596805751, 5),
(16, 'SuperUser', 'NFjcgmlswR1opnKEINTxfuJ23VgjCA_w', 'izpjsgaEFlQC1q3jLr2MhXjof1fMCSagsaTvnbSf', '$2y$13$C/fBrqWhUPNvXdLHEp9o3eHSCD8EtdFVc2D3BQxruHUYB./axB0I2', NULL, NULL, 'superman@gmail.com', 2, 1596807779, 1596807779, NULL, 3),
(18, 'SuperUser2', '9wDKpJ70oeiVrTmMrH0TgD8q5kYFh18X', 'FydfcY5O_Wy7AWc_PHJup_RmFYhH51auEelwlaGa', '$2y$13$pqd90g/Bde0gaP/A0tRume8SYNXtbeCKoZbnns8WeMTuCKbcb4SiK', NULL, NULL, 'superman2@gmail.com', 1, 1596808181, 1596808181, NULL, 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_office` (`office_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_office` FOREIGN KEY (`office_id`) REFERENCES `office` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

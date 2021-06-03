-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 03 2021 г., 11:59
-- Версия сервера: 5.7.29
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pink`
--

-- --------------------------------------------------------

--
-- Структура таблицы `likes`
--

CREATE TABLE `likes` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`) VALUES
(278, 1, 2),
(51, 1, 3),
(271, 1, 4),
(53, 1, 5),
(261, 1, 6),
(252, 1, 22),
(272, 1, 27),
(253, 1, 28),
(44, 2, 1),
(16, 2, 3),
(7, 2, 4),
(23, 2, 5),
(21, 3, 2),
(4, 3, 4),
(37, 3, 22),
(39, 3, 27),
(9, 6, 3),
(27, 12, 1),
(30, 12, 22),
(31, 12, 27),
(33, 12, 28),
(55, 15, 2),
(118, 17, 3),
(248, 17, 22),
(215, 17, 28),
(274, 18, 28),
(277, 19, 28);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `img`, `description`, `date`, `user_id`) VALUES
(1, 'user-photo-6.jpg', 'Всем GM и взаимные лайки!', 'March 01 2021', 2),
(2, 'user-photo-5.jpg', 'Где снег-то?', 'March 02 2021', 3),
(3, 'user-photo-4.jpg', 'Самая кубанская в мире!', 'March 03 2021', 4),
(4, 'user-photo-3.jpg', 'Здесь могла быть ваша цитата о высоком и вечном.', 'March 04 2021', 5),
(5, 'user-photo-2.jpg', 'Соседи будут рады!', 'March 06 2021', 6),
(6, 'user-photo-1.jpg', 'Вчера он на луну летал, сегодня в руки к нам попал.', 'March 06 2021', 7),
(22, 'user-photo-7.jpg', 'sadsaddsad', 'March 06 2021', 1),
(27, 'a6d03cdc736ba208dcc25f915ec1e378.jpg', 'Лето', 'March 10 2021', 1),
(28, '2b35da5e1087a0c2a3d6adb462593d75.jpg', 'мой первый пост в Pink', 'March 10 2021', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `status` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `mail`, `tel`, `status`) VALUES
(1, 'admin', '$2y$10$m1VU2krM1m3u2Mhpb.UTJu23P65E2/N2GJBPfDVddjLLf2KlX3cce', 'doka96@mail.ua', '+380951373441', 10),
(2, 'nadya_228', '$2y$10$vT.0lqulD2blleg0JhAH2elDFBzS0X9Q.N4Y4Y1IuoNNPg5RZF0PC', 'naduiha_3001@gmail.com', '393894', 0),
(3, 'max_1337', '$2y$10$wVlXZOEmrliBh1ulRKpV6eW28kyWyoi71t7g4Tp9KH8N6p7YMAmBG', 'max@mail.ua', '+121233212', 0),
(4, 'sergeychik', '$2y$10$EF./Vu0XH2CA7rbS3dZN4OFqJVQp3t3Xo2FSsvIYtBC/eFg5VDKi2', 'sergey1000@mail.ua', '65743645', 0),
(5, 'borissss', '$2y$10$SIbcaB2PgpmfAi2W8740UOROsDNsI.23JXEMPfkVcHhe/57c38nMa', 'borissssik2002@gmail.com', '45654645', 0),
(6, 'anton_superboy1', '$2y$10$Imw9b5/Trfc5Ksd0AauyZe8F4ilfseX/e9kW1/k6IVOcUwWN2UkZO', 'anton.inanushkin@gmail.com', '932923109', 0),
(7, 'levon_123', '$2y$10$26mbjiYN4/aShTwwA9wS8eF3ax6dm2OJh.JEXQ3JcdRpqHQX62TXe', 'leva.hlebuskin@gmail.com', '238983217982', 0),
(8, 'admin23123', '$2y$10$YtQ7xlogCMZC709gl7hv.Og6lOyHUM7Tm3ERWpdRtnw5QTRfRT0SC', 'doka6923@mail.ua', '23243', 0),
(11, 'admin1', '$2y$10$imTKlZ9kUocmr9VgOchlJeHG4jdYlNDpOTbXnPKatMfZtg0HK9HXK', 'doka691@mail.ua', '23243', 0),
(12, 'user231', '$2y$10$LHjlfJIerr4MunbuQEO12uHb4Ra/ckgr5L9FcBJDbWfeHTc14IQki', 'adsfdsf@mail.ua', '2324321231123', 0),
(13, 'asdasdsda', '$2y$10$YpD1cEvin3tDKoV.RXwT4eFmk8davgQg3XgHLhNnVxPl46pHJWVUa', '80ka92132136@gmail.com', '2324321', 0),
(14, 'sadsdasdsadsada', '$2y$10$w2pca1VX1FUdEC9qIbUFsOWeHWOhzVSAtX/INu8S8Jipn/.IF/s3a', 'doka1212192@mail.ua', '2324321', 0),
(15, 'admin121', '$2y$10$MC4AxcpFo/yRpieuVMuwyu1r/cBI3YkAJDavdwICSjdvGEOoM.4Te', 'doka69@mail.ua', '2324312', 0),
(16, 'user12112', '$2y$10$DkgmNqyJfyWE2IcfYxui6OvMgwTKrFZwWYGOKIlIJnqkj5Jfu4v4y', 'doka6911231@mail.ua', '23243', 0),
(17, 'userrrrrrrrrrrrrrrrrrr', '$2y$10$7I4104gldX90ClXvR4Zz0ONNTqN9pNwUWVrUxujfYfU22w43cq8ae', 'dok213123213123321231321a69@mail.ua', '23243', 0),
(18, 'userrrrrr', '$2y$10$zW0DyxVi8nRHDDC7cRZKGueKyXQ6YTSsDtxUrWLEYDgwH/TZMcazy', '812120ka96@gmail.com', '+2324321231123', 0),
(19, 'askfsdaf', '$2y$10$cY8ISJPzSjR0iDNEFvdyEuuX8SNCaLbFmDP7WEU8vczsRzWCZH3V2', 'asd@masd.ua', '32423342123', 0),
(20, 'adminsdsd', '$2y$10$2ZRnixOiidImtWkP5eKyIexW/zspiofto1bzrPjx/bSPxwkAHtBBS', 'dfksadfk@mail.ua', '+380951373446', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`post_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
